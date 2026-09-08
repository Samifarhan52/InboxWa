<?php
/**
 * Vercel Serverless PHP Entrypoint for InboxWa
 * Features case-insensitive routing & alias resolution for Linux environments
 */
header('Content-Type: text/html; charset=UTF-8');

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$parsedUrl  = parse_url($requestUri, PHP_URL_PATH) ?: '/';
$rootDir    = dirname(__DIR__);

$cleanPath = trim($parsedUrl, '/');

if (empty($cleanPath)) {
    require $rootDir . '/index.php';
    exit;
}

$parts = array_values(array_filter(explode('/', $cleanPath)));

// 1. Direct exact path match check
$directPath = $rootDir . '/' . implode('/', $parts);
if (is_dir($directPath) && is_file(rtrim($directPath, '/') . '/index.php')) {
    require rtrim($directPath, '/') . '/index.php';
    exit;
}
if (is_file($directPath) && substr($directPath, -4) === '.php') {
    require $directPath;
    exit;
}
if (is_file($directPath . '.php')) {
    require $directPath . '.php';
    exit;
}

// 2. Case-insensitive & alias path resolver (for Linux / Vercel compatibility)
$current = $rootDir;
$resolved = true;

foreach ($parts as $part) {
    if (!is_dir($current)) {
        $resolved = false;
        break;
    }
    
    $entries = scandir($current);
    $found = false;
    $partLower = strtolower($part);

    // Industry / Industries alias mapping
    if ($partLower === 'industry') {
        $partLower = 'industries';
    }
    if ($partLower === 'channels') {
        $partLower = 'channel';
    }

    foreach ($entries as $entry) {
        if ($entry === '.' || $entry === '..') continue;
        if (strtolower($entry) === $partLower) {
            $current .= '/' . $entry;
            $found = true;
            break;
        }
    }

    if (!$found) {
        $resolved = false;
        break;
    }
}

if ($resolved) {
    if (is_dir($current) && is_file(rtrim($current, '/') . '/index.php')) {
        require rtrim($current, '/') . '/index.php';
        exit;
    }
    if (is_file($current) && substr($current, -4) === '.php') {
        require $current;
        exit;
    }
}

// Dynamic Blog Post Route
if (isset($parts[0], $parts[1], $parts[2]) && strtolower($parts[0]) === 'resources' && strtolower($parts[1]) === 'blog') {
    require_once $rootDir . '/config/cms.php';
    $postSlug = strtolower($parts[2]);
    $post = hb_get_post($postSlug);
    if ($post) {
        $_GET['slug'] = $postSlug;
        require $rootDir . '/resources/blog/single.php';
        exit;
    }
}

// Dynamic Location Route
if (isset($parts[0], $parts[1]) && strtolower($parts[0]) === 'locations') {
    require_once $rootDir . '/config/cms.php';
    $locSlug = strtolower($parts[1]);
    $all = cms_locations();
    foreach ($all as $k => $locData) {
        if (strtolower($k) === $locSlug || strtolower($locData['slug'] ?? '') === $locSlug) {
            $basePath = '../';
            $bp = '../';
            $loc = $locData;
            require $rootDir . '/includes/location-page-template.php';
            exit;
        }
    }
}

// Fallback to homepage
require $rootDir . '/index.php';
