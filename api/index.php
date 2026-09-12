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

// Industry pages routing
$industrySlugs = [
    'bfsi',
    'healthcare',
    'retail-and-ecommerce',
    'travel-and-hospitality',
    'education-and-social-impacts',
    'communication-and-it',
    'food-and-beverages',
    'advertising-and-events',
    'construction-and-real-estate',
    'automobiles-and-transport',
    'government-and-utilities',
    'manufacturing-and-supply'
];
if (count($parts) === 2 && in_array(strtolower($parts[0]), ['industry', 'solutions', 'industries'])) {
    $indSlug = strtolower($parts[1]);
    if (in_array($indSlug, $industrySlugs)) {
        $indFile = $rootDir . '/industry/' . $indSlug . '/index.php';
        if (file_exists($indFile)) {
            require $indFile;
            exit;
        }
    }
}

// Education shortcuts & aliases
if ((count($parts) === 1 && strtolower($parts[0]) === 'education') ||
    (count($parts) === 2 && in_array(strtolower($parts[0]), ['solutions', 'solution', 'industry', 'industries', 'business-leads', 'leads']) && strtolower($parts[1]) === 'education')) {
    require $rootDir . '/Industries/education/index.php';
    exit;
}

// BFSI / Finance & Insurance shortcuts & aliases
if ((count($parts) === 1 && in_array(strtolower($parts[0]), ['bfsi', 'finance-insurance'])) ||
    (count($parts) === 2 && in_array(strtolower($parts[0]), ['solutions', 'solution', 'business-leads', 'leads']) && in_array(strtolower($parts[1]), ['finance-insurance', 'finance-bfsi']))) {
    require $rootDir . '/business-leads/finance-insurance/index.php';
    exit;
}

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
    if ($partLower === 'product') {
        $partLower = 'products';
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

// Dynamic Business Leads Route
if (isset($parts[0]) && in_array(strtolower($parts[0]), ['business-leads', 'leads'])) {
    if (isset($parts[1])) {
        $cat = strtolower($parts[1]);
        if ($cat === 'education') {
            require $rootDir . '/Industries/education/index.php';
            exit;
        }
        if (in_array($cat, ['finance-insurance', 'bfsi', 'finance-bfsi'])) {
            require $rootDir . '/business-leads/finance-insurance/index.php';
            exit;
        }
        $catDir = $rootDir . '/business-leads/' . $cat;
        if (is_dir($catDir) && is_file($catDir . '/index.php')) {
            require $catDir . '/index.php';
            exit;
        }
        $_GET['category'] = $cat;
        require $rootDir . '/business-leads/single.php';
        exit;
    } else {
        require $rootDir . '/business-leads/index.php';
        exit;
    }
}

// Dynamic Industry / Industries Route
if (isset($parts[0]) && in_array(strtolower($parts[0]), ['industry', 'industries'])) {
    if (isset($parts[1])) {
        $ind = strtolower($parts[1]);
        $aliasMap = [
            'education' => 'education',
            'finance-bfsi' => 'finance-insurance',
            'finance' => 'finance-insurance',
            'bfsi' => 'finance-insurance',
            'real-estate' => 'real-estate',
            'healthcare' => 'healthcare',
            'travel-hospitality' => 'travel-hospitality',
            'travel-and-tourism' => 'travel-hospitality',
            'travel' => 'travel-hospitality',
            'beauty-wellness' => 'beauty-wellness',
            'ecommerce' => 'ecommerce',
            'automotive' => 'automotive',
            'restaurants-food' => 'restaurants-food',
            'restaurant' => 'restaurants-food',
            'manufacturing' => 'manufacturing',
            'events-wedding' => 'events-wedding',
            'digital-marketing' => 'digital-marketing',
            'it-software' => 'it-software',
            'retail' => 'retail',
            'professional-services' => 'professional-services',
            'b2b-suppliers' => 'b2b-suppliers'
        ];
        $mappedCat = $aliasMap[$ind] ?? $ind;
        if ($mappedCat === 'education') {
            require $rootDir . '/Industries/education/index.php';
            exit;
        }
        if (is_file($rootDir . '/business-leads/' . $mappedCat . '/index.php')) {
            require $rootDir . '/business-leads/' . $mappedCat . '/index.php';
            exit;
        }
    }
}

// Fallback to homepage
require $rootDir . '/index.php';
