<?php

// Always use no basePath — site is served at root
$basePath = '';

// Get the requested URI and clean it
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim(str_replace($basePath, '', $requestUri), '/');

// Extract path segments
$pathParts = explode('/', $path);
$requestedPage = $pathParts[0] ?? '';
if ($requestedPage !== '') {
    $page = $requestedPage;
} elseif (!isset($page) || $page === '') {
    $page = 'home';
}

// Define valid static pages
$validPages = ['home', 'home-oct-8', 'coming-soon-red', 'coming-soon-red-steve', 'coming-soon-red-steve-over', 'coming-soon-red-steve-under', 'coming-soon-red-with-date', 'coming-soon-texture', 'coming-soon-white', 'completes-etu', 'newh-etu', 'home-orange-1', 'home-orange-2', 'home-lava', 'lava', 'dark', 'bigh-aug-27-a', 'sep-2-home-bullets', 'sep-19-a', 'about', 'technology', 'technology-sep-24', 'application', 'team', 'market', 'news-archive', 'newsroom', 'news-commentary', 'investor', 'contact', 'short-videos', 'videos', 'thermoloop-video', 'ceo-podcast', 'webinar', 'thank-you', 'explainer', '3reasons', 'electrolyzer-tech', 'why-thermoloop', 'fasttrack', 'home1', 'home2', 'home3', 'special-report', 'special-report-nucube', 'special-report-October-2025', 'sign-up', 'signup-042826', 'heat-source', 'nuqube1', 'nuqube2', 'nuqube3', 'stagegateone1', 'stagegateone2', 'stagegateone3', 'both'];

$validPages[] = 'technology-oct-8';
$validPages[] = 'heat-source-oct-8';
$validPages[] = 'about-oct-8';
$validPages[] = 'heat-sources';

// Serve the approved October pages at their primary URLs without redirecting.
$primaryPageTemplates = [
    'home' => 'home-oct-8',
    'technology' => 'technology-oct-8',
    'heat-sources' => 'heat-source-oct-8',
];

// Dynamic video categories
$videoCategories = ['news-commentary', 'ceo-podcast', 'short-videos'];

if (strpos($requestUri, 'single-news.php') !== false && isset($_GET['id'])) {
    include __DIR__ . '/../pages/single-news.php';
    exit;
}

// Handle homepage request
if ($page === '') {
    include __DIR__ . '/../pages/home.php';
}

// Handle dynamic video category pages (e.g., /videos/news-commentary/slug)
elseif ($page === 'videos' && isset($pathParts[1]) && in_array($pathParts[1], $videoCategories) && isset($pathParts[2])) {
    $category = $pathParts[1];
    $_GET['slug'] = $pathParts[2];
    include __DIR__ . '/../pages/videos/' . $category . '/index.php';
}

// Serve static pages
elseif (in_array($page, $validPages)) {
    $pageTemplate = $primaryPageTemplates[$page] ?? $page;
    include __DIR__ . '/../pages/' . $pageTemplate . '.php';
}

// Serve 404 page for invalid routes
else {
    include __DIR__ . '/../pages/404.php';
}
