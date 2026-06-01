<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Serve static files directly
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false; // Let PHP built-in server handle it
}

// Route all other requests through index.php
require __DIR__ . '/index.php';
