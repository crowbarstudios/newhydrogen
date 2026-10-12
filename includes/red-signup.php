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

function newhJotformRequest(string $path, string $method = 'GET', array $fields = []): array
{
    // cPanel: supply this key in the server environment, never in public HTML.
    $key = getenv('JOTFORM_API_KEY');
    if (is_string($key) && $key !== '') {
        $headers = "Accept: application/json\r\nAPIKEY: " . $key . "\r\n";
        $options = ['method' => $method, 'header' => $headers, 'timeout' => 18, 'ignore_errors' => true];
        if ($method === 'POST') {
            $options['header'] .= "Content-Type: application/x-www-form-urlencoded\r\n";
            $options['content'] = http_build_query($fields);
        }
        $raw = @file_get_contents('https://api.jotform.com' . $path, false, stream_context_create(['http' => $options]));
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
            throw new RuntimeException('Registration storage unavailable.');
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
        throw new RuntimeException('Registration storage is not configured.');
    }
    if (!is_array($response) || (int) ($response['responseCode'] ?? 0) !== 200
        || !isset($response['content']) || !is_array($response['content'])) {
        throw new RuntimeException('Jotform could not confirm this request.');
    }
    return $response['content'];
}
