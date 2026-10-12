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
$validPages = ['home', 'home-orange-1', 'home-orange-2', 'home-lava', 'lava', 'dark', 'bigh-aug-27-a', 'sep-2-home-bullets', 'about', 'technology', 'application', 'team', 'market', 'news-archive', 'newsroom', 'news-commentary', 'investor', 'contact', 'short-videos', 'videos', 'thermoloop-video', 'ceo-podcast', 'webinar', 'thank-you', 'explainer', '3reasons', 'electrolyzer-tech', 'why-thermoloop', 'fasttrack', 'home1', 'home2', 'home3', 'special-report', 'special-report-nucube', 'special-report-October-2025', 'sign-up', 'signup-042826', 'heat-source', 'nuqube1', 'nuqube2', 'nuqube3', 'stagegateone1', 'stagegateone2', 'stagegateone3', 'both'];

$validPages[] = 'heat-sources';
$primaryPageFiles = [
    'home' => $path === '' ? 'production-home-announcement' : 'home-oct-8',
    'technology' => 'technology-oct-8',
    'heat-sources' => 'heat-source-oct-8',
];

// Dynamic video categories
$videoCategories = ['news-commentary', 'ceo-podcast', 'short-videos'];

if (strpos($requestUri, 'single-news.php') !== false && isset($_GET['id'])) {
    // Only the approved complete release bypasses legacy boilerplate.
    if ($requestUri === '/single-news.php' && $_GET['id'] === '107') {
        $newsEntries = include __DIR__ . '/../data/news-data.php';
        $approvedArticle = null;
        foreach ($newsEntries as $newsEntry) {
            if ((string) $newsEntry['id'] === '107') {
                $approvedArticle = $newsEntry;
                break;
            }
        }
        if (!$approvedArticle) {
            http_response_code(404);
            include __DIR__ . '/../pages/404.php';
            exit;
        }
        ?>
        <section class="news-detail mt-[100px] mb-[133px] mx-auto px-4 lg:px-8">
            <div class="container max-w-screen-xl mx-auto">
                <h1 class="text-center text-4xl font-semibold mb-[114px]"><?= htmlspecialchars($approvedArticle['title']); ?></h1>
                <div class="news-detail-info space-y-6">
                    <?php foreach ($approvedArticle['description'] as $paragraph) : ?>
                        <div class="[&>h3]:text-xl [&>h3]:font-bold [&>p]:text-base [&_a]:text-xl sm:[&_a]:text-base [&_a]:mb-4 [&_a]:tracking-[0.78px] [&_a]:underline [&_li]:text-xl sm:[&_li]:text-base">
                            <?= $paragraph[0] ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php
        exit;
    }
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
    include __DIR__ . '/../pages/' . ($primaryPageFiles[$page] ?? $page) . '.php';
}

// Serve 404 page for invalid routes
else {
    if ($page === 'newh-etu') {
        http_response_code(404);
    }
    include __DIR__ . '/../pages/404.php';
}
