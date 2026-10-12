<?php
// Staging-only form. Never change the live newsletter form's settings.
const NEWH_STAGING_FORM_ID = '262847331355056';
const NEWH_STAGING_EMAIL_QID = '3';
const NEWH_MARKETING_CONSENT_QID = '5';
const NEWH_CONSENT_TIMESTAMP_QID = '6';
const NEWH_CONSENT_WORDING_QID = '7';
const NEWH_MARKETING_CONSENT_WORDING = 'I agree to receive NewHydrogen news and marketing emails. Unsubscribe anytime.';

function newhSignupSession(): void
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        return;
    }
    session_name('newh_staging_signup');
    session_set_cookie_params([
        'httponly' => true,
        'samesite' => 'Lax',
        'secure' => (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
            || ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https',
        'path' => '/',
    ]);
    if (!session_start()) {
        throw new RuntimeException('Registration session unavailable.');
    }
}

function newhSignupFailure(string $reason): RuntimeException
{
    // Only internal codes and numeric status codes: never provider messages,
    // email addresses, request bodies, exception traces or credentials.
    $safeReason = preg_match('/^[a-z_]+(?::[0-9]{1,3})?$/D', $reason)
        ? $reason : 'unknown_failure';
    error_log('[NewHydrogen signup] ' . $safeReason);
    return new RuntimeException('Registration storage could not confirm this request.');
}

function newhJotformRequest(string $path, string $method = 'GET', array $fields = []): array
{
    // Prefer the server environment; the fallback belongs outside the web root
    // and Git repository. Never print configuration contents or exception data.
    $environmentKey = getenv('JOTFORM_API_KEY');
    $key = is_string($environmentKey) ? trim($environmentKey) : '';
    $privateFile = '/home3/biosolar/.newh-staging-secrets.php';
    if ($key === '' && @is_readable($privateFile)) {
        $resolvedFile = @realpath($privateFile);
        $publicRoot = @realpath($_SERVER['DOCUMENT_ROOT'] ?? __DIR__ . '/..');
        if ($resolvedFile === false
            || ($publicRoot !== false && ($resolvedFile === $publicRoot
                || strpos($resolvedFile, rtrim($publicRoot, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR) === 0))) {
            throw newhSignupFailure('private_config_inside_public_root');
        }
        $bufferLevel = ob_get_level();
        ob_start();
        try {
            $config = (static function (string $file) {
                return @require $file;
            })($resolvedFile);
        } catch (Throwable $error) {
            // Do not forward parse errors, file contents, or other diagnostics.
            throw newhSignupFailure('private_config_load_failed');
        } finally {
            while (ob_get_level() > $bufferLevel) {
                ob_end_clean();
            }
        }
        $key = is_array($config) && is_string($config['JOTFORM_API_KEY'] ?? null)
            ? trim($config['JOTFORM_API_KEY']) : '';
        unset($config);
        if ($key === '') {
            throw newhSignupFailure('private_config_key_missing');
        }
    }
    if ($key !== '') {
        if (preg_match('/[\r\n]/', $key)) {
            throw newhSignupFailure('credential_format_invalid');
        }
        $url = 'https://api.jotform.com' . $path;
        $headers = ['Accept: application/json', 'APIKEY: ' . $key];
        if ($method === 'POST') {
            $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        }
        $httpStatus = 0;
        if (function_exists('curl_init')) {
            $curl = curl_init($url);
            if ($curl === false) {
                throw newhSignupFailure('https_transport_unavailable');
            }
            curl_setopt_array($curl, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER => $headers,
                CURLOPT_CONNECTTIMEOUT => 8,
                CURLOPT_TIMEOUT => 18,
                CURLOPT_FOLLOWLOCATION => false,
                CURLOPT_SSL_VERIFYPEER => true,
                CURLOPT_SSL_VERIFYHOST => 2,
            ]);
            if ($method === 'POST') {
                curl_setopt($curl, CURLOPT_POST, true);
                // A string is intentional: an array would send multipart data.
                curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($fields));
            }
            $raw = curl_exec($curl);
            $httpStatus = (int) curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $transportError = curl_errno($curl);
            curl_close($curl);
            if ($raw === false) {
                // Never retry a POST after an ambiguous transport failure.
                throw newhSignupFailure('curl_transport_failed:' . $transportError);
            }
        } else {
            if (!filter_var(ini_get('allow_url_fopen'), FILTER_VALIDATE_BOOLEAN)) {
                throw newhSignupFailure('https_transport_unavailable');
            }
            $options = [
                'method' => $method, 'header' => implode("\r\n", $headers) . "\r\n",
                'timeout' => 18, 'ignore_errors' => true, 'follow_location' => 0,
            ];
            if ($method === 'POST') {
                $options['content'] = http_build_query($fields);
            }
            $raw = @file_get_contents($url, false, stream_context_create(['http' => $options]));
            foreach ($http_response_header ?? [] as $header) {
                if (preg_match('~^HTTP/\S+\s+(\d{3})~', $header, $match)) {
                    $httpStatus = (int) $match[1];
                }
            }
            if ($raw === false) {
                throw newhSignupFailure('stream_transport_failed');
            }
        }
        if ($httpStatus < 200 || $httpStatus >= 300) {
            throw newhSignupFailure('jotform_http_rejected:' . $httpStatus);
        }
        $response = is_string($raw) ? json_decode($raw, true) : null;
    } elseif (getenv('REPL_ID')) {
        // Replit's managed connector keeps the provider credential out of PHP.
        $pipes = [];
        $process = proc_open(
            ['node', __DIR__ . '/../scripts/jotform-request.mjs'],
            [0 => ['pipe', 'r'], 1 => ['pipe', 'w'], 2 => ['pipe', 'w']],
            $pipes
        );
        if (!is_resource($process)) {
            throw newhSignupFailure('connector_unavailable');
        }
        fwrite($pipes[0], json_encode(['path' => $path, 'method' => $method, 'fields' => $fields]));
        fclose($pipes[0]);
        $raw = stream_get_contents($pipes[1]);
        fclose($pipes[1]);
        stream_get_contents($pipes[2]); // Do not expose connector diagnostics or credentials.
        fclose($pipes[2]);
        $exit = proc_close($process);
        $response = $exit === 0 ? json_decode($raw, true) : null;
    } else {
        // CLI readability does not prove that the web PHP worker can read it.
        throw newhSignupFailure('web_credentials_missing_or_unreadable');
    }
    if (!is_array($response)) {
        throw newhSignupFailure('jotform_response_not_json');
    }
    $responseCode = (int) ($response['responseCode'] ?? 0);
    if ($responseCode < 200 || $responseCode >= 300) {
        throw newhSignupFailure('jotform_api_rejected:' . $responseCode);
    }
    if (!isset($response['content']) || !is_array($response['content'])) {
        throw newhSignupFailure('jotform_content_invalid');
    }
    return $response['content'];
}
