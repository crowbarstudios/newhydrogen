<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");

function addThermoLoopRegisteredMark(string $html): string
{
    $html = preg_replace(
        '/thermo\s*loop\s*<sup\b[^>]*>\s*(?:TM|™|®|&trade;|&reg;|&#8482;|&#174;)\s*<\/sup>/iu',
        'ThermoLoop®',
        $html
    );

    $parts = preg_split('/(<[^>]+>)/', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
    $insideExcludedElement = false;

    foreach ($parts as &$part) {
        if ($part === '') {
            continue;
        }

        if ($part[0] === '<') {
            if (preg_match('/^<(script|style)\b/i', $part)) {
                $insideExcludedElement = true;
            } elseif (preg_match('/^<\/(script|style)\s*>/i', $part)) {
                $insideExcludedElement = false;
            }
            continue;
        }

        if (!$insideExcludedElement) {
            $part = preg_replace(
                '/(?<![\p{L}\p{N}_-])thermo\s*loop(?:\s*(?:TM|™|®|&trade;|&reg;|&#8482;|&#174;))?(?![\p{L}\p{N}_-])/iu',
                'ThermoLoop®',
                $part
            );
        }
    }
    unset($part);

    return implode('', $parts);
}

ob_start('addThermoLoopRegisteredMark');

$basePath = '';
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim(str_replace($basePath, '', $requestUri), '/');
$page = $path === '' ? 'bigh-aug-27-a' : $path;

if ($page === 'report') {
    header('Location: /special-report-October-2025', true, 301);
    exit;
}

// Use empty string so asset paths become root-relative: /assets/...
$full_url = '';

include './includes/header.php';
include './includes/router.php';
include './includes/footer.php';

ob_end_flush();
