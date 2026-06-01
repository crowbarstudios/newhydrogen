<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");

$basePath = '';
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim(str_replace($basePath, '', $requestUri), '/');
$page = $path === '' ? 'home' : $path;

if ($page === 'report') {
    header('Location: /special-report-October-2025', true, 301);
    exit;
}

// Use empty string so asset paths become root-relative: /assets/...
$full_url = '';

include './includes/header.php';
include './includes/router.php';
include './includes/footer.php';
