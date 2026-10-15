<?php
/**
 * Temporary HTTP Basic authentication for the staging hostname only.
 * Credentials are never stored in the repository.
 */
(static function (): void {
    $host = strtolower((string) ($_SERVER['HTTP_HOST'] ?? ''));
    $host = preg_replace('/:\d+$/', '', $host);
    if ($host !== 'staging.newhydrogen.com') {
        return;
    }

    header('Cache-Control: private, no-store, max-age=0');
    header('Pragma: no-cache');
    header('Vary: Authorization', false);
    header('X-Robots-Tag: noindex, nofollow, noarchive');

    $deny = static function (int $status, string $message): void {
        http_response_code($status);
        header('Content-Type: text/plain; charset=utf-8');
        header('X-Content-Type-Options: nosniff');
        if ($status === 401) {
            header('WWW-Authenticate: Basic realm="NewHydrogen Staging", charset="UTF-8"');
        }
        echo $message;
        exit;
    };

    // Do not trust forwarded headers or send passwords over plain HTTP.
    if (empty($_SERVER['HTTPS']) || strtolower((string) $_SERVER['HTTPS']) === 'off') {
        header('Location: https://staging.newhydrogen.com/', true, 308);
        exit;
    }

    $configPath = '/home3/biosolar/.newh-staging-access.php';
    $config = null;
    $resolvedPath = realpath($configPath);
    $documentRoot = realpath((string) ($_SERVER['DOCUMENT_ROOT'] ?? ''));
    if ($resolvedPath !== false && is_readable($resolvedPath)
        && ($documentRoot === false || ($resolvedPath !== $documentRoot
            && strpos($resolvedPath, rtrim($documentRoot, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR) !== 0))) {
        $bufferLevel = ob_get_level();
        ob_start();
        try {
            $config = (static function (string $path) {
                return require $path;
            })($resolvedPath);
        } catch (Throwable $error) {
            // Do not output exception details, configuration contents, or credentials.
            $config = null;
        } finally {
            while (ob_get_level() > $bufferLevel) {
                ob_end_clean();
            }
        }
    }
    $hash = is_array($config) ? ($config['password_hash'] ?? null) : null;
    if (!is_string($hash) || empty(password_get_info($hash)['algo'])) {
        $deny(503, 'Staging access is locked until its private password configuration is installed.');
    }

    $username = $_SERVER['PHP_AUTH_USER'] ?? null;
    $password = $_SERVER['PHP_AUTH_PW'] ?? null;
    if (!is_string($username) || !is_string($password)) {
        // Support CGI/FastCGI when Apache passes Authorization as a header.
        $authorization = $_SERVER['HTTP_AUTHORIZATION'] ?? $_SERVER['REDIRECT_HTTP_AUTHORIZATION'] ?? '';
        if ($authorization === '' && function_exists('getallheaders')) {
            foreach (getallheaders() as $name => $value) {
                if (strcasecmp($name, 'Authorization') === 0) {
                    $authorization = $value;
                    break;
                }
            }
        }
        if (is_string($authorization) && preg_match('/^Basic\s+(\S+)$/i', $authorization, $matches)) {
            $decoded = base64_decode($matches[1], true);
            if ($decoded !== false && strpos($decoded, ':') !== false) {
                [$username, $password] = explode(':', $decoded, 2);
            }
        }
    }

    if (!is_string($username) || !is_string($password)
        || !hash_equals('staging', $username) || !password_verify($password, $hash)) {
        $deny(401, 'Authentication is required to view NewHydrogen staging.');
    }
})();
