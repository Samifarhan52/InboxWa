<?php
/**
 * HelloBotz global header + SEO meta engine
 * Set before include: $pageTitle, $pageDescription, $pageKeywords,
 * $canonicalUrl, $ogImage, $ogType, $robots, $basePath
 */
if (!isset($basePath)) { $basePath = ''; }
$bp = $basePath;

require_once dirname(__DIR__) . '/config/cms.php';

$SITE_NAME   = cms_setting('site_title', 'HelloBotz');
$SITE_TAGLINE = cms_setting('site_tagline', 'WhatsApp Marketing & Automation Platform');
$SITE_DOMAIN = 'https://hellobotz.com';
$DEFAULT_OG  = $SITE_DOMAIN . '/assets/images/og-image.png';
$cmsWhatsapp = cms_setting('support_whatsapp', '918050854445');
$cmsPhone    = cms_setting('phone_number', '+91 80508 54445');
$cmsSalesEmail = cms_setting('sales_email', 'mail@hellobotz.com');
$cmsSupportEmail = cms_setting('support_email', 'support@hellobotz.com');
$cmsLogo     = cms_setting('logo_url', '/assets/images/logo.png');
$announcementEnabled = cms_setting('announcement_enabled', '0') === '1';
$announcementText = cms_setting('announcement_text', '');
$announcementLink = cms_setting('announcement_link', '/auth/register');
$gaId        = cms_setting('ga_id', '');
$pixelId     = cms_setting('meta_pixel_id', '');
$customHead  = cms_setting('custom_header_code', '');

$pageTitle       = isset($pageTitle) ? trim((string)$pageTitle) : '';
$pageDescription = isset($pageDescription) ? trim((string)$pageDescription) : '';
$pageKeywords    = isset($pageKeywords) ? trim((string)$pageKeywords) : '';
$canonicalUrl    = isset($canonicalUrl) ? trim((string)$canonicalUrl) : '';
$ogImage         = isset($ogImage) && $ogImage !== '' ? trim((string)$ogImage) : $DEFAULT_OG;
$ogType          = isset($ogType) ? $ogType : 'website';
$robots          = isset($robots) ? $robots : 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';
$twitterCard     = isset($twitterCard) ? $twitterCard : 'summary_large_image';

if ($pageTitle === '') {
  $pageTitle = 'WhatsApp Marketing & Automation Platform';
}
if ($pageDescription === '') {
  $pageDescription = 'Automate WhatsApp marketing with official WhatsApp Business API, chatbots, broadcasts, shared inbox & CRM. Start free with HelloBotz today.';
}
if ($pageKeywords === '') {
  $pageKeywords = 'WhatsApp marketing software, WhatsApp Business API, WhatsApp automation tool, AI chatbot for business, WhatsApp CRM software, lead generation chatbot, shared inbox, broadcast campaigns, HelloBotz';
}
if ($canonicalUrl === '') {
  $reqUri = isset($_SERVER['REQUEST_URI']) ? strtok($_SERVER['REQUEST_URI'], '?') : '/';
  $canonicalUrl = $SITE_DOMAIN . (isset($reqUri[0]) && $reqUri[0] === '/' ? $reqUri : '/' . $reqUri);
}
if (!preg_match('/\.[a-z0-9]+$/i', $canonicalUrl) && substr($canonicalUrl, -1) !== '/') {
  $canonicalUrl .= '/';
}

$fullTitle = (stripos($pageTitle, 'HelloBotz') !== false)
  ? $pageTitle
  : ($pageTitle . ' | ' . $SITE_NAME);

$ogTitle = isset($ogTitle) ? $ogTitle : $pageTitle;
$ogDescription = isset($ogDescription) ? $ogDescription : $pageDescription;
$twitterTitle = isset($twitterTitle) ? $twitterTitle : $ogTitle;
$twitterDescription = isset($twitterDescription) ? $twitterDescription : $ogDescription;

if (!function_exists('hb_seo_esc')) {
  function hb_seo_esc($s) {
    return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php echo hb_seo_esc($fullTitle); ?></title>
  <meta name="description" content="<?php echo hb_seo_esc($pageDescription); ?>">
  <meta name="keywords" content="<?php echo hb_seo_esc($pageKeywords); ?>">
  <meta name="author" content="HelloBotz">
  <meta name="robots" content="<?php echo hb_seo_esc($robots); ?>">
  <meta name="googlebot" content="<?php echo (strpos($robots, 'noindex') !== false) ? 'noindex, nofollow' : 'index, follow'; ?>">
  <meta name="theme-color" content="#8B5CF6">
  <meta name="application-name" content="HelloBotz">
  <meta name="format-detection" content="telephone=no">
  <meta name="geo.region" content="<?php echo hb_seo_esc($geoRegion ?? 'IN-KA'); ?>">
  <meta name="geo.placename" content="<?php echo hb_seo_esc($geoPlacename ?? 'Bengaluru, Karnataka, India'); ?>">
  <meta name="geo.position" content="<?php echo hb_seo_esc($geoPosition ?? '12.9716;77.5946'); ?>">
  <meta name="ICBM" content="<?php echo hb_seo_esc($icbm ?? '12.9716, 77.5946'); ?>">
  <meta name="language" content="en">
  <link rel="canonical" href="<?php echo hb_seo_esc($canonicalUrl); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo hb_seo_esc($canonicalUrl); ?>">
  <link rel="alternate" hreflang="en-IN" href="<?php echo hb_seo_esc($canonicalUrl); ?>">
  <link rel="alternate" hreflang="x-default" href="<?php echo hb_seo_esc($canonicalUrl); ?>">

  <meta property="og:type" content="<?php echo hb_seo_esc($ogType); ?>">
  <meta property="og:site_name" content="HelloBotz">
  <meta property="og:locale" content="en_US">
  <meta property="og:title" content="<?php echo hb_seo_esc($ogTitle); ?>">
  <meta property="og:description" content="<?php echo hb_seo_esc($ogDescription); ?>">
  <meta property="og:url" content="<?php echo hb_seo_esc($canonicalUrl); ?>">
  <meta property="og:image" content="<?php echo hb_seo_esc($ogImage); ?>">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="<?php echo hb_seo_esc($ogTitle); ?>">

  <meta name="twitter:card" content="<?php echo hb_seo_esc($twitterCard); ?>">
  <meta name="twitter:title" content="<?php echo hb_seo_esc($twitterTitle); ?>">
  <meta name="twitter:description" content="<?php echo hb_seo_esc($twitterDescription); ?>">
  <meta name="twitter:image" content="<?php echo hb_seo_esc($ogImage); ?>">
  <meta name="twitter:image:alt" content="<?php echo hb_seo_esc($ogTitle); ?>">

  <link rel="icon" href="/assets/images/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/app.css?v=52">
  <link rel="stylesheet" href="/assets/css/style.css?v=53">
  <link rel="stylesheet" href="/assets/css/mobile-menu.css?v=51">
  <link rel="stylesheet" href="/assets/css/story-journey.css?v=51">
  <link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=51">
  <link rel="stylesheet" href="/assets/css/robot-chatbot.css?v=3">

  <?php
  // Dynamic Website Color Palette from Admin Settings
  $themePrimary = cms_setting('theme_primary_color', '#8B5CF6');
  $themePrimaryHover = cms_setting('theme_primary_hover', '#7C3AED');
  $themeAccent = cms_setting('theme_accent_color', '#06B6D4');
  $themeSuccess = cms_setting('theme_success_color', '#16A34A');
  $themeBg = cms_setting('theme_bg_color', '#FFFFFF');
  $themeText = cms_setting('theme_text_color', '#0F172A');
  ?>
  <style id="hellobotz-theme-palette">
    :root {
      --p: <?php echo htmlspecialchars($themePrimary); ?> !important;
      --p2: <?php echo htmlspecialchars($themePrimaryHover); ?> !important;
      --p3: <?php echo htmlspecialchars($themePrimaryHover); ?> !important;
      --p-l: <?php echo htmlspecialchars($themePrimary); ?>18 !important;
      --p-m: <?php echo htmlspecialchars($themePrimary); ?>35 !important;
      --a: <?php echo htmlspecialchars($themeAccent); ?> !important;
      --a2: <?php echo htmlspecialchars($themeAccent); ?>cc !important;
      --g: <?php echo htmlspecialchars($themeSuccess); ?> !important;
      <?php if (!empty($themeBg) && strtoupper($themeBg) !== '#FFFFFF'): ?>
      --bg: <?php echo htmlspecialchars($themeBg); ?> !important;
      <?php endif; ?>
      <?php if (!empty($themeText) && strtoupper($themeText) !== '#0F172A'): ?>
      --t: <?php echo htmlspecialchars($themeText); ?> !important;
      <?php endif; ?>
    }
    .btn-primary {
      background: linear-gradient(135deg, <?php echo htmlspecialchars($themePrimary); ?> 0%, <?php echo htmlspecialchars($themePrimaryHover); ?> 50%, <?php echo htmlspecialchars($themeAccent); ?> 100%) !important;
      box-shadow: 0 4px 20px <?php echo htmlspecialchars($themePrimary); ?>66 !important;
    }
    .btn-primary:hover {
      box-shadow: 0 8px 25px <?php echo htmlspecialchars($themePrimary); ?>88 !important;
    }
    .logo-icon {
      background: linear-gradient(135deg, <?php echo htmlspecialchars($themePrimary); ?>, <?php echo htmlspecialchars($themeAccent); ?>) !important;
    }
    .badge, .pill, .cw-hero-badge {
      background: <?php echo htmlspecialchars($themePrimary); ?>18 !important;
      color: <?php echo htmlspecialchars($themePrimaryHover); ?> !important;
      border-color: <?php echo htmlspecialchars($themePrimary); ?>35 !important;
    }
    .icon-box-gradient {
      background: linear-gradient(135deg, <?php echo htmlspecialchars($themePrimary); ?>15, <?php echo htmlspecialchars($themeAccent); ?>20) !important;
      color: <?php echo htmlspecialchars($themePrimaryHover); ?> !important;
    }
    .cta-band {
      background: linear-gradient(135deg, <?php echo htmlspecialchars($themePrimaryHover); ?>, <?php echo htmlspecialchars($themePrimary); ?>, <?php echo htmlspecialchars($themeAccent); ?>) !important;
    }
  </style>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "HelloBotz AI Technologies Pvt Ltd",
    "url": "https://hellobotz.com/",
    "logo": "https://hellobotz.com/assets/images/logo.png",
    "description": "Official WhatsApp Business API and Omnichannel automation platform for WhatsApp, Instagram, Facebook and Telegram.",
    "email": "<?php echo htmlspecialchars($cmsSalesEmail); ?>",
    "telephone": "<?php echo htmlspecialchars($cmsPhone); ?>",
    "address": { "@type": "PostalAddress", "addressCountry": "IN", "addressLocality": "Bangalore" },
    "contactPoint": [{
      "@type": "ContactPoint",
      "telephone": "<?php echo htmlspecialchars($cmsPhone); ?>",
      "contactType": "sales",
      "areaServed": "IN",
      "availableLanguage": ["English", "Hindi"]
    }, {
      "@type": "ContactPoint",
      "telephone": "<?php echo htmlspecialchars($cmsPhone); ?>",
      "contactType": "customer support",
      "email": "<?php echo htmlspecialchars($cmsSupportEmail); ?>"
    }],
    "sameAs": [
      "https://facebook.com/hellobotz",
      "https://instagram.com/hellobotz",
      "https://linkedin.com/company/hellobotz"
    ]
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "HelloBotz",
    "url": "https://hellobotz.com/",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://hellobotz.com/resources/search?q={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "HelloBotz",
    "applicationCategory": "BusinessApplication",
    "operatingSystem": "Web, iOS, Android",
    "url": "https://hellobotz.com/",
    "description": "Official WhatsApp Business API platform with shared team inbox, visual flow builder, bulk broadcast campaigns, CRM integrations, and AI chatbots.",
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.9",
      "reviewCount": "1250",
      "bestRating": "5",
      "worstRating": "1"
    },
    "offers": { "@type": "Offer", "price": "0", "priceCurrency": "INR", "description": "14-Day Free Trial" }
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "HelloBotz AI Technologies Pvt Ltd",
    "image": "https://hellobotz.com/assets/images/logo.png",
    "url": "https://hellobotz.com/",
    "telephone": "<?php echo htmlspecialchars($cmsPhone); ?>",
    "email": "<?php echo htmlspecialchars($cmsSalesEmail); ?>",
    "priceRange": "₹₹",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Bengaluru",
      "addressRegion": "Karnataka",
      "postalCode": "560001",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 12.9716,
      "longitude": 77.5946
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      "opens": "09:00",
      "closes": "20:00"
    }
  }
  </script>
  <?php if (!empty($gaId)): ?>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($gaId); ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo htmlspecialchars($gaId); ?>');
  </script>
  <?php endif; ?>
  <?php if (!empty($pixelId)): ?>
  <!-- Meta Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '<?php echo htmlspecialchars($pixelId); ?>');
    fbq('track', 'PageView');
  </script>
  <?php endif; ?>
  <?php if (!empty($customHead)) echo $customHead; ?>
  <?php if (!empty($extraHead)) echo $extraHead; ?>
  <script>
    window.HELLOBOTZ_CONFIG = {
      whatsapp: <?php echo json_encode($cmsWhatsapp); ?>,
      siteName: <?php echo json_encode($SITE_NAME); ?>
    };
  </script>
  <style id="hellobotz-floating-pill-navbar-style">
    /* FLOATING PILL NAVBAR SYSTEM (100% Fixed, Centered & Always Visible on Scroll) */
    :root {
      --nav: 0px !important;
    }
    html {
      scroll-padding-top: 84px;
    }
    body {
      padding-top: 76px !important;
    }
    @media (max-width: 768px) {
      body {
        padding-top: 66px !important;
      }
    }

    /* Universal Breadcrumbs Removal (eliminates extra top vertical gaps across all pages) */
    .breadcrumb-nav,
    .cw-breadcrumb,
    .cig-breadcrumb,
    .cfb-breadcrumb,
    .ctg-breadcrumb,
    .ind-top-bar,
    .loc-breadcrumb,
    .res-breadcrumbs,
    .res-breadcrumb,
    .bl-breadcrumb,
    nav[aria-label="Breadcrumb"],
    nav.breadcrumb,
    nav.breadcrumbs {
      display: none !important;
    }

    .site-header {
      position: fixed !important;
      top: 12px !important;
      left: 0 !important;
      right: 0 !important;
      width: 100% !important;
      max-width: 100vw !important;
      z-index: 99999 !important;
      padding: 0 16px !important;
      box-sizing: border-box !important;
      pointer-events: none !important;
      background: transparent !important;
      border: none !important;
      box-shadow: none !important;
      margin: 0 !important;
      transition: top 0.25s ease !important;
    }
    .header-inner {
      position: relative !important; /* Critical anchor for all centered mega menus */
      pointer-events: auto !important;
      max-width: min(1280px, calc(100vw - 28px)) !important;
      width: 100% !important;
      margin: 0 auto !important;
      height: 60px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      padding: 0 1rem 0 1.25rem !important;
      background: rgba(255, 255, 255, 0.96) !important;
      backdrop-filter: blur(20px) !important;
      -webkit-backdrop-filter: blur(20px) !important;
      border-radius: 999px !important;
      border: 1px solid rgba(226, 232, 240, 0.9) !important;
      box-shadow: 0 10px 30px -5px rgba(15, 23, 42, 0.1), 0 4px 12px rgba(15, 23, 42, 0.04) !important;
      box-sizing: border-box !important;
      transition: all 0.25s ease !important;
    }
    .site-header.scrolled .header-inner {
      background: rgba(255, 255, 255, 0.98) !important;
      box-shadow: 0 16px 40px -4px rgba(15, 23, 42, 0.16), 0 6px 18px rgba(15, 23, 42, 0.08) !important;
      border-color: rgba(203, 213, 225, 0.95) !important;
    }

    /* Logo Docking Container */
    .logo-dock-wrapper {
      display: inline-flex !important;
      align-items: center !important;
      flex-shrink: 0 !important;
      position: relative !important;
      overflow: visible !important;
      transition: width 0.48s cubic-bezier(0.16, 1, 0.3, 1),
                  margin-right 0.48s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .site-header.scrolled .logo-dock-wrapper {
      width: 176px !important;
      max-width: 190px !important;
      margin-right: 12px !important;
    }
    .site-header:not(.scrolled) .logo-dock-wrapper {
      width: 0px !important;
      max-width: 0px !important;
      margin-right: 0px !important;
    }
    @media (max-width: 1024px) {
      .logo-dock-wrapper,
      .site-header.scrolled .logo-dock-wrapper,
      .site-header:not(.scrolled) .logo-dock-wrapper {
        width: auto !important;
        max-width: none !important;
        margin-right: 8px !important;
        display: flex !important;
        align-items: center !important;
        flex-shrink: 0 !important;
      }
    }

    /* Brand Logo Pill & Dynamic Flying Animation */
    .site-header .logo,
    .site-header .site-main-logo {
      display: inline-flex !important;
      align-items: center !important;
      background: #030712 !important;
      border-radius: 999px !important;
      text-decoration: none !important;
      flex-shrink: 0 !important;
      position: relative !important;
      z-index: 100000 !important;
      pointer-events: auto !important;
      cursor: pointer !important;
      transform-origin: top left !important;
      will-change: transform, box-shadow, border-color !important;
      transition: transform 0.48s cubic-bezier(0.16, 1, 0.3, 1),
                  box-shadow 0.45s ease,
                  border-color 0.45s ease,
                  padding 0.35s ease,
                  background 0.35s ease !important;
    }

    /* 1. TOP STATE: Left side above corner, larger size, glowing aura */
    .site-header:not(.scrolled) .logo,
    .site-header:not(.scrolled) .site-main-logo {
      --logo-fly-x: calc(28px - (max(20px, (100vw - min(1280px, calc(100vw - 28px))) / 2) + 20px));
      --logo-fly-y: -6px;
      --logo-fly-scale: 1.38;
      transform: translate3d(var(--logo-fly-x, 0px), var(--logo-fly-y, 0px), 0) scale(var(--logo-fly-scale, 1.38)) !important;
      padding: 6px 16px !important;
      border: 1px solid rgba(139, 92, 246, 0.6) !important;
      box-shadow: 0 12px 36px -4px rgba(139, 92, 246, 0.38), 0 4px 16px rgba(0, 0, 0, 0.45) !important;
      background: radial-gradient(circle at 20% 50%, rgba(139, 92, 246, 0.22), transparent 70%), #030712 !important;
    }
    .site-header:not(.scrolled) .logo:hover,
    .site-header:not(.scrolled) .site-main-logo:hover {
      transform: translate3d(var(--logo-fly-x, 0px), var(--logo-fly-y, 0px), 0) scale(calc(var(--logo-fly-scale, 1.38) * 1.03)) !important;
      border-color: rgba(167, 139, 250, 0.9) !important;
      box-shadow: 0 16px 44px -4px rgba(139, 92, 246, 0.52), 0 6px 20px rgba(0, 0, 0, 0.55) !important;
    }

    /* 2. DOCKED STATE: Come to navbar, whatever size is there */
    .site-header.scrolled .logo,
    .site-header.scrolled .site-main-logo {
      transform: translate3d(0, 0, 0) scale(1) !important;
      padding: 4px 12px !important;
      border: 1px solid rgba(99, 102, 241, 0.35) !important;
      box-shadow: 0 2px 8px rgba(3, 7, 18, 0.08) !important;
      background: #030712 !important;
    }
    .site-header.scrolled .logo:hover,
    .site-header.scrolled .site-main-logo:hover {
      border-color: rgba(99, 102, 241, 0.75) !important;
      box-shadow: 0 4px 16px rgba(99, 102, 241, 0.28) !important;
      transform: translate3d(0, 0, 0) scale(1.02) !important;
    }

    .site-header .logo-img {
      height: 32px !important;
      width: auto !important;
      max-width: 170px !important;
      object-fit: contain !important;
      display: block !important;
      transition: height 0.25s ease !important;
    }
    .site-header.scrolled .logo-img {
      height: 30px !important;
    }
    @media (max-width: 1024px) {
      .site-header:not(.scrolled) .logo,
      .site-header:not(.scrolled) .site-main-logo,
      .site-header.scrolled .logo,
      .site-header.scrolled .site-main-logo,
      .site-header .logo,
      .site-header .site-main-logo {
        transform: none !important;
        position: static !important;
        padding: 4px 10px !important;
        height: 32px !important;
        margin: 0 !important;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15) !important;
        --logo-fly-x: 0px !important;
        --logo-fly-y: 0px !important;
        --logo-fly-scale: 1 !important;
      }
      .site-header .logo-img,
      .site-header.scrolled .logo-img,
      .site-header:not(.scrolled) .logo-img {
        height: 22px !important;
        max-width: 110px !important;
        width: auto !important;
      }
    }
    .mobile-drawer-header .logo {
      display: inline-flex !important;
      align-items: center !important;
      background: #030712 !important;
      padding: 4px 10px !important;
      border-radius: 999px !important;
      border: 1px solid rgba(99, 102, 241, 0.35) !important;
    }
    .mobile-drawer-header .logo-img {
      height: 26px !important;
      width: auto !important;
      max-width: 135px !important;
      display: block !important;
    }
    .site-footer .logo-img {
      height: 40px !important;
      width: auto !important;
      max-width: 195px !important;
      object-fit: contain !important;
      display: block !important;
    }

    /* Remove legacy underline from nav links */
    .nav-link::after {
      display: none !important;
    }

    /* Desktop Navigation Row */
    .nav-desktop {
      display: flex !important;
      align-items: center !important;
      gap: 3px !important;
      flex: 1 !important;
      justify-content: center !important;
    }
    .nav-link {
      display: inline-flex !important;
      align-items: center !important;
      gap: 4px !important;
      padding: 0.38rem 0.55rem !important;
      font-size: 0.82rem !important;
      font-weight: 550 !important;
      color: #334155 !important;
      border-radius: 999px !important;
      white-space: nowrap !important;
      transition: all 0.18s ease !important;
      background: transparent !important;
      border: none !important;
      cursor: pointer !important;
    }
    .nav-link:hover,
    .nav-item:hover > .nav-link,
    .nav-item.open > .nav-link {
      background: rgba(15, 23, 42, 0.05) !important;
      color: #0f172a !important;
    }
    .nav-link svg {
      width: 12px !important;
      height: 12px !important;
      opacity: 0.6 !important;
      flex-shrink: 0 !important;
      transition: transform 0.2s ease !important;
    }
    .nav-item:hover > .nav-link svg,
    .nav-item.open > .nav-link svg {
      transform: rotate(180deg) !important;
      opacity: 0.9 !important;
    }

    /* Channels Live Button */
    .nav-link-channels {
      font-weight: 650 !important;
      color: #0f172a !important;
    }
    .nav-item-channels:hover > .nav-link-channels,
    .nav-item-channels.open > .nav-link-channels {
      background: #0d111c !important;
      color: #ffffff !important;
    }
    .nav-item-channels:hover > .nav-link-channels svg,
    .nav-item-channels.open > .nav-link-channels svg {
      color: #ffffff !important;
    }

    /* Red Live Badge */
    .badge-live-pill {
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      background: #ef4444 !important;
      color: #ffffff !important;
      font-size: 0.62rem !important;
      font-weight: 800 !important;
      line-height: 1 !important;
      padding: 2.5px 6.5px !important;
      border-radius: 999px !important;
      margin-left: 4px !important;
      text-transform: uppercase !important;
      letter-spacing: 0.04em !important;
      box-shadow: 0 0 10px rgba(239, 68, 68, 0.45) !important;
      animation: hbPulseLive 2s infinite ease-in-out !important;
    }
    @keyframes hbPulseLive {
      0%, 100% { box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.6); }
      50% { box-shadow: 0 0 0 5px rgba(239, 68, 68, 0); }
    }

    /* POSITIONING FIX: Static on nav-item so mega menus center relative to .header-inner */
    .nav-item[data-mega],
    .nav-item-channels {
      position: static !important;
    }

    /* HelloBotz Light Mega Menu for Channels (100% Centered & Never Cut Off) */
    .mega-menu-channels,
    .mega-menu-channels.align-left,
    .mega-menu-channels.align-right {
      position: absolute !important;
      top: calc(100% + 14px) !important;
      left: 50% !important;
      right: auto !important;
      transform: translateX(-50%) translateY(8px) !important;
      width: min(820px, calc(100vw - 32px)) !important;
      max-width: calc(100vw - 32px) !important;
      box-sizing: border-box !important;
      background: #ffffff !important;
      border: 1px solid rgba(226, 232, 240, 0.95) !important;
      border-radius: 20px !important;
      box-shadow: 0 24px 60px -12px rgba(15, 23, 42, 0.16), 0 0 0 1px rgba(15, 23, 42, 0.04) !important;
      padding: 24px 26px !important;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.22s cubic-bezier(0.16, 1, 0.3, 1), transform 0.22s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.22s !important;
      z-index: 100000 !important;
      pointer-events: none;
    }
    .mega-menu-channels::before,
    .mega-menu-products::before,
    .mega-menu-solutions::before,
    .mega-menu-panel::before,
    .mega-menu-sm::before {
      content: "";
      position: absolute;
      top: -18px;
      left: 0;
      right: 0;
      height: 18px;
      background: transparent;
    }
    .nav-item-channels:hover .mega-menu-channels,
    .nav-item-channels.open .mega-menu-channels,
    .nav-item-channels:focus-within .mega-menu-channels {
      opacity: 1 !important;
      visibility: visible !important;
      transform: translateX(-50%) translateY(0) !important;
      pointer-events: auto !important;
    }

    .mega-channels-container {
      display: grid !important;
      grid-template-columns: 1.45fr 1fr !important;
      gap: 22px !important;
      align-items: stretch !important;
    }
    .mega-channels-left {
      display: flex !important;
      flex-direction: column !important;
    }
    .mega-channels-heading {
      font-size: 0.72rem !important;
      font-weight: 800 !important;
      letter-spacing: 0.08em !important;
      color: #8b5cf6 !important;
      text-transform: uppercase !important;
      margin-bottom: 12px !important;
    }
    .mega-channels-grid {
      display: grid !important;
      grid-template-columns: 1fr 1fr !important;
      gap: 12px 14px !important;
    }
    .mega-channel-item {
      display: flex !important;
      align-items: flex-start !important;
      gap: 12px !important;
      padding: 10px 12px !important;
      border-radius: 12px !important;
      text-decoration: none !important;
      transition: all 0.18s ease !important;
      background: transparent !important;
    }
    .mega-channel-item:hover {
      background: #f8fafc !important;
      transform: translateX(3px) !important;
    }
    .channel-icon-wrap {
      width: 38px !important;
      height: 38px !important;
      border-radius: 11px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
    }
    .wa-icon-wrap { background: rgba(37, 211, 102, 0.15) !important; color: #16a34a !important; }
    .ig-icon-wrap { background: rgba(236, 72, 153, 0.15) !important; color: #db2777 !important; }
    .tg-icon-wrap { background: rgba(14, 165, 233, 0.15) !important; color: #0284c7 !important; }
    .fb-icon-wrap { background: rgba(59, 130, 246, 0.15) !important; color: #2563eb !important; }

    .channel-text {
      display: flex !important;
      flex-direction: column !important;
    }
    .channel-name {
      font-size: 0.95rem !important;
      font-weight: 700 !important;
      color: #0f172a !important;
      line-height: 1.2 !important;
    }
    .channel-desc {
      font-size: 0.75rem !important;
      color: #64748b !important;
      line-height: 1.35 !important;
      margin-top: 3px !important;
    }

    /* Right Promo Card (Light Theme Matching HelloBotz Style) */
    .mega-channels-promo {
      background: linear-gradient(145deg, #f5f3ff 0%, #ede9fe 100%) !important;
      border: 1px solid rgba(139, 92, 246, 0.25) !important;
      border-radius: 16px !important;
      padding: 20px 22px !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: center !important;
    }
    .promo-offer-pill {
      display: inline-block !important;
      align-self: flex-start !important;
      background: rgba(139, 92, 246, 0.15) !important;
      color: #7c3aed !important;
      border: 1px solid rgba(139, 92, 246, 0.3) !important;
      font-size: 0.68rem !important;
      font-weight: 700 !important;
      letter-spacing: 0.06em !important;
      text-transform: uppercase !important;
      padding: 3px 9px !important;
      border-radius: 999px !important;
      margin-bottom: 12px !important;
    }
    .promo-offer-title {
      font-size: 1.15rem !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      margin: 0 0 8px 0 !important;
      line-height: 1.3 !important;
    }
    .promo-offer-desc {
      font-size: 0.82rem !important;
      color: #475569 !important;
      line-height: 1.5 !important;
      margin: 0 0 16px 0 !important;
    }
    .promo-offer-cta {
      display: inline-flex !important;
      align-items: center !important;
      gap: 6px !important;
      color: #7c3aed !important;
      font-size: 0.9rem !important;
      font-weight: 700 !important;
      text-decoration: none !important;
      transition: all 0.15s ease !important;
    }
    .promo-offer-cta:hover {
      color: #6d28d9 !important;
      gap: 9px !important;
    }

    /* ALL WIDE MEGA MENUS CENTERED UNDER .header-inner */
    .mega-menu-features,
    .mega-menu-products,
    .mega-menu-solutions,
    .mega-menu-panel,
    .mega-menu-features.align-left,
    .mega-menu-features.align-right,
    .mega-menu-products.align-left,
    .mega-menu-products.align-right,
    .mega-menu-solutions.align-left,
    .mega-menu-solutions.align-right,
    .mega-menu-panel.align-left,
    .mega-menu-panel.align-right {
      position: absolute !important;
      top: calc(100% + 14px) !important;
      left: 50% !important;
      right: auto !important;
      transform: translateX(-50%) translateY(8px) !important;
      width: min(860px, calc(100vw - 32px)) !important;
      max-width: calc(100vw - 32px) !important;
      box-sizing: border-box !important;
      z-index: 100000 !important;
      opacity: 0 !important;
      visibility: hidden !important;
      pointer-events: none !important;
      transition: opacity 0.22s cubic-bezier(0.16, 1, 0.3, 1), transform 0.22s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.22s !important;
    }
    .nav-item.open > .mega-menu-features,
    .nav-item:hover > .mega-menu-features,
    .nav-item:focus-within > .mega-menu-features,
    .nav-item.open > .mega-menu-products,
    .nav-item:hover > .mega-menu-products,
    .nav-item:focus-within > .mega-menu-products,
    .nav-item.open > .mega-menu-solutions,
    .nav-item:hover > .mega-menu-solutions,
    .nav-item:focus-within > .mega-menu-solutions,
    .nav-item.open > .mega-menu-panel,
    .nav-item:hover > .mega-menu-panel,
    .nav-item:focus-within > .mega-menu-panel,
    .nav-item.open > .mega-menu-features.align-left,
    .nav-item:hover > .mega-menu-features.align-left,
    .nav-item:focus-within > .mega-menu-features.align-left,
    .nav-item.open > .mega-menu-products.align-left,
    .nav-item:hover > .mega-menu-products.align-left,
    .nav-item:focus-within > .mega-menu-products.align-left,
    .nav-item.open > .mega-menu-solutions.align-left,
    .nav-item:hover > .mega-menu-solutions.align-left,
    .nav-item:focus-within > .mega-menu-solutions.align-left,
    .nav-item.open > .mega-menu-panel.align-left,
    .nav-item:hover > .mega-menu-panel.align-left,
    .nav-item:focus-within > .mega-menu-panel.align-left {
      transform: translateX(-50%) translateY(0) !important;
      opacity: 1 !important;
      visibility: visible !important;
      pointer-events: auto !important;
    }

    /* Attention focus animations for "Explore All Features" navigation */
    .nav-item-highlight > .nav-link {
      background: rgba(124, 58, 237, 0.14) !important;
      color: #7c3aed !important;
      border-radius: 10px !important;
      animation: navPulseGlow 1.6s ease-in-out 3 !important;
    }
    .mega-menu-highlight {
      box-shadow: 0 25px 60px -15px rgba(124, 58, 237, 0.35), 0 0 0 2.5px rgba(124, 58, 237, 0.5) !important;
      animation: megaPulseGlow 1.6s ease-in-out 3 !important;
    }
    @keyframes navPulseGlow {
      0%, 100% {
        box-shadow: 0 0 0 0 rgba(124, 58, 237, 0.6);
      }
      50% {
        box-shadow: 0 0 0 8px rgba(124, 58, 237, 0);
      }
    }
    @keyframes megaPulseGlow {
      0%, 100% {
        box-shadow: 0 25px 60px -15px rgba(124, 58, 237, 0.35), 0 0 0 2.5px rgba(124, 58, 237, 0.5);
      }
      50% {
        box-shadow: 0 30px 70px -10px rgba(124, 58, 237, 0.5), 0 0 0 4.5px rgba(124, 58, 237, 0.7);
      }
    }

    /* CRITICAL OVERRIDE: Prevent any mega menu content from inheriting white-space: nowrap */
    .mega-menu,
    .mega-menu *,
    .mega-menu-features,
    .mega-menu-features *,
    .mega-menu-products,
    .mega-menu-products *,
    .mega-menu-solutions,
    .mega-menu-solutions *,
    .mega-menu-panel,
    .mega-menu-panel * {
      white-space: normal !important;
      box-sizing: border-box !important;
    }

    /* FEATURES MEGA MENU: Clean 2-Column Grid Matching HelloBotz Theme */
    .mega-menu-features {
      width: min(840px, calc(100vw - 28px)) !important;
      max-width: calc(100vw - 28px) !important;
      background: #ffffff !important;
      border: 1px solid rgba(226, 232, 240, 0.95) !important;
      border-radius: 20px !important;
      box-shadow: 0 24px 60px -12px rgba(15, 23, 42, 0.16), 0 0 0 1px rgba(15, 23, 42, 0.04) !important;
      padding: 22px 26px !important;
      box-sizing: border-box !important;
    }

    .mega-features-wrapper {
      width: 100% !important;
      display: flex !important;
      flex-direction: column !important;
    }

    .mega-features-header {
      display: flex !important;
      align-items: center !important;
      justify-content: flex-start !important;
      padding: 0 4px 10px !important;
      margin-bottom: 8px !important;
      border-bottom: 1px solid #f1f5f9 !important;
    }

    .mega-features-label {
      font-size: 0.88rem !important;
      font-weight: 800 !important;
      letter-spacing: 0.04em !important;
      color: #7c3aed !important;
      text-transform: capitalize !important;
    }

    .mega-features-grid {
      display: grid !important;
      grid-template-columns: 1fr 1fr !important;
      column-gap: 20px !important;
      row-gap: 6px !important;
      width: 100% !important;
    }

    .mega-feature-link {
      display: flex !important;
      align-items: flex-start !important;
      gap: 13px !important;
      padding: 10px 12px !important;
      border-radius: 12px !important;
      text-decoration: none !important;
      transition: all 0.18s cubic-bezier(0.16, 1, 0.3, 1) !important;
      background: transparent !important;
    }

    .mega-feature-link:hover {
      background: rgba(139, 92, 246, 0.06) !important;
      transform: translateX(3px) !important;
    }

    .mega-feature-icon {
      width: 40px !important;
      height: 40px !important;
      border-radius: 11px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
      transition: transform 0.2s ease !important;
    }

    .mega-feature-link:hover .mega-feature-icon {
      transform: scale(1.08) !important;
    }

    .mega-feature-icon svg {
      width: 20px !important;
      height: 20px !important;
    }

    .mega-feature-icon.icon-pink    { background: #FDF2F8 !important; color: #DB2777 !important; }
    .mega-feature-icon.icon-purple  { background: #F5F3FF !important; color: #7C3AED !important; }
    .mega-feature-icon.icon-blue    { background: #ECFEFF !important; color: #0891B2 !important; }
    .mega-feature-icon.icon-indigo  { background: #EEF2FF !important; color: #4F46E5 !important; }
    .mega-feature-icon.icon-green   { background: #F0FDF4 !important; color: #16A34A !important; }
    .mega-feature-icon.icon-amber   { background: #FFFBEB !important; color: #D97706 !important; }
    .mega-feature-icon.icon-emerald { background: #ECFDF5 !important; color: #059669 !important; }
    .mega-feature-icon.icon-violet  { background: #FAF5FF !important; color: #9333EA !important; }

    .mega-feature-text {
      display: flex !important;
      flex-direction: column !important;
      min-width: 0 !important;
    }

    .mega-feature-title {
      font-size: 0.92rem !important;
      font-weight: 700 !important;
      color: #0F172A !important;
      line-height: 1.3 !important;
      white-space: normal !important;
      transition: color 0.18s ease !important;
    }

    .mega-feature-link:hover .mega-feature-title {
      color: #7C3AED !important;
    }

    .mega-feature-desc {
      font-size: 0.77rem !important;
      color: #64748B !important;
      line-height: 1.35 !important;
      margin-top: 2px !important;
      white-space: normal !important;
    }

    @media (max-width: 768px) {
      .mega-menu-features {
        width: calc(100vw - 20px) !important;
        padding: 16px !important;
      }
      .mega-features-grid {
        grid-template-columns: 1fr !important;
        gap: 6px !important;
      }
    }

    /* PRODUCTS MEGA MENU: Clean 5-Column SaaS Mega Menu Matching Reference Image 2 */
    .mega-menu-products {
      width: min(1180px, calc(100vw - 32px)) !important;
      max-width: calc(100vw - 32px) !important;
      background: #ffffff !important;
      border: 1px solid #e5e7eb !important;
      border-radius: 20px !important;
      box-shadow: 0 20px 50px -12px rgba(0, 0, 0, 0.12), 0 0 0 1px rgba(0, 0, 0, 0.03) !important;
      padding: 30px 32px !important;
      box-sizing: border-box !important;
    }

    .prodocu-mega-layout {
      display: grid !important;
      grid-template-columns: 180px 1.15fr 1.15fr 1.15fr 255px !important;
      gap: 32px !important;
      align-items: stretch !important;
      width: 100% !important;
    }

    /* Column 1: Channels */
    .prodocu-col-channels {
      display: flex !important;
      flex-direction: column !important;
      padding-right: 8px !important;
    }

    .prodocu-col-heading {
      font-size: 15px !important;
      font-weight: 700 !important;
      color: #111827 !important;
      margin-bottom: 16px !important;
      line-height: 1.2 !important;
    }

    .prodocu-channel-list {
      display: flex !important;
      flex-direction: column !important;
      gap: 6px !important;
    }

    .prodocu-channel-btn {
      display: flex !important;
      align-items: center !important;
      gap: 10px !important;
      width: 100% !important;
      padding: 9px 12px !important;
      border-radius: 8px !important;
      font-size: 14px !important;
      font-weight: 500 !important;
      color: #4b5563 !important;
      border: none !important;
      background: transparent !important;
      cursor: pointer !important;
      transition: all 0.15s ease !important;
      text-align: left !important;
      font-family: inherit !important;
      outline: none !important;
    }

    .prodocu-channel-btn:hover {
      background: #f9fafb !important;
      color: #111827 !important;
    }

    .prodocu-channel-btn.active[data-channel="whatsapp"],
    .prodocu-channel-btn.active {
      background: #f0fdf4 !important;
      color: #166534 !important;
      font-weight: 600 !important;
    }
    .prodocu-channel-btn.active[data-channel="whatsapp"] .prodocu-chan-icon {
      color: #16a34a !important;
    }
    .prodocu-channel-btn.active[data-channel="instagram"] {
      background: #fdf2f8 !important;
      color: #be185d !important;
      font-weight: 600 !important;
    }
    .prodocu-channel-btn.active[data-channel="instagram"] .prodocu-chan-icon {
      color: #e1306c !important;
    }
    .prodocu-channel-btn.active[data-channel="telegram"] {
      background: #f0f9ff !important;
      color: #0369a1 !important;
      font-weight: 600 !important;
    }
    .prodocu-channel-btn.active[data-channel="telegram"] .prodocu-chan-icon {
      color: #0284c7 !important;
    }
    .prodocu-channel-btn.active[data-channel="facebook"] {
      background: #eff6ff !important;
      color: #1d4ed8 !important;
      font-weight: 600 !important;
    }
    .prodocu-channel-btn.active[data-channel="facebook"] .prodocu-chan-icon {
      color: #2563eb !important;
    }

    /* MOBILE PRODUCTS ACCORDION (Matching getgabs / media_1789588745503.png) */
    .prodocu-mob-container {
      padding: 10px 4px 16px !important;
      display: flex !important;
      flex-direction: column !important;
      gap: 10px !important;
    }
    .prodocu-mob-section-title {
      font-size: 11.5px !important;
      font-weight: 700 !important;
      color: #6b7280 !important;
      letter-spacing: 0.06em !important;
      text-transform: uppercase !important;
      margin-bottom: 4px !important;
      padding-left: 2px !important;
    }
    .prodocu-mob-channel-btn {
      width: 100% !important;
      background: #f3f4f6 !important;
      border: 1px solid #e5e7eb !important;
      border-radius: 12px !important;
      padding: 12px 16px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      font-size: 15px !important;
      font-weight: 600 !important;
      color: #111827 !important;
      cursor: pointer !important;
      transition: all 0.2s ease !important;
      text-align: left !important;
      outline: none !important;
      margin-bottom: 6px !important;
      font-family: inherit !important;
    }
    .prodocu-mob-channel-btn:hover,
    .prodocu-mob-channel-btn.active {
      background: #e5e7eb !important;
    }
    .prodocu-mob-channel-btn .mob-chan-left {
      display: flex !important;
      align-items: center !important;
      gap: 12px !important;
    }
    .prodocu-mob-channel-btn svg.mob-chevron {
      color: #6b7280 !important;
      transition: transform 0.2s ease !important;
    }
    .prodocu-mob-channel-btn.active svg.mob-chevron {
      transform: rotate(90deg) !important;
    }
    .prodocu-mob-channel-panel {
      padding: 6px 12px 14px 18px !important;
      margin-bottom: 8px !important;
      border-left: 2px solid #e5e7eb !important;
      margin-left: 14px !important;
      display: none;
      flex-direction: column !important;
      gap: 10px !important;
    }
    .prodocu-mob-channel-panel.active {
      display: flex !important;
    }
    .prodocu-mob-group-title {
      font-size: 11px !important;
      font-weight: 700 !important;
      color: #9ca3af !important;
      text-transform: uppercase !important;
      letter-spacing: 0.05em !important;
      margin-top: 4px !important;
      margin-bottom: 2px !important;
    }
    .prodocu-mob-link {
      display: flex !important;
      align-items: center !important;
      gap: 10px !important;
      padding: 6px 0 !important;
      color: #374151 !important;
      font-size: 14px !important;
      font-weight: 500 !important;
      text-decoration: none !important;
      border-bottom: 1px solid #f3f4f6 !important;
    }
    .prodocu-mob-link:hover {
      color: #059669 !important;
    }
    .prodocu-mob-link svg {
      color: #6b7280 !important;
      flex-shrink: 0 !important;
    }
    .prodocu-mob-divider {
      border: none !important;
      border-top: 1px solid #e5e7eb !important;
      margin: 12px 0 14px 0 !important;
    }
    .prodocu-mob-integrate-grid {
      display: grid !important;
      grid-template-columns: repeat(3, 1fr) !important;
      gap: 10px !important;
      margin-top: 6px !important;
    }
    .prodocu-mob-int-tile {
      background: #f9fafb !important;
      border: 1px solid #e5e7eb !important;
      border-radius: 12px !important;
      height: 60px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      padding: 8px !important;
      box-sizing: border-box !important;
      transition: all 0.15s ease !important;
      text-decoration: none !important;
    }
    .prodocu-mob-int-tile img {
      max-height: 28px !important;
      max-width: 44px !important;
      width: auto !important;
      height: auto !important;
      object-fit: contain !important;
    }
    .prodocu-mob-int-tile.tile-arrow {
      background: #064e3b !important;
      border-color: #064e3b !important;
      color: #ffffff !important;
    }
    .prodocu-mob-int-tile.tile-arrow svg {
      width: 24px !important;
      height: 24px !important;
      stroke: #ffffff !important;
    }

    .prodocu-chan-icon {
      width: 18px !important;
      height: 18px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
      color: #6b7280 !important;
    }

    .prodocu-partner-badge {
      margin-top: auto !important;
      padding-top: 36px !important;
      display: flex !important;
      align-items: center !important;
    }

    .prodocu-partner-pill {
      display: inline-flex !important;
      align-items: center !important;
      gap: 10px !important;
      padding: 8px 16px !important;
      border: 1.5px solid #e5e7eb !important;
      border-radius: 9999px !important;
      background: #ffffff !important;
      text-decoration: none !important;
      box-shadow: 0 1px 2px rgba(0,0,0,0.02) !important;
      transition: border-color 0.2s, box-shadow 0.2s !important;
    }

    .prodocu-partner-pill:hover {
      border-color: #cbd5e1 !important;
      box-shadow: 0 2px 6px rgba(0,0,0,0.06) !important;
    }

    .prodocu-partner-pill svg {
      width: 20px !important;
      height: 20px !important;
      flex-shrink: 0 !important;
    }

    .prodocu-partner-pill span {
      font-size: 13.5px !important;
      font-weight: 600 !important;
      color: #1f2937 !important;
      white-space: nowrap !important;
      letter-spacing: -0.01em !important;
    }

    /* Columns 2, 3, 4: Marketing, Sales, Support */
    .prodocu-col {
      display: flex !important;
      flex-direction: column !important;
    }

    .prodocu-section-title {
      font-size: 15px !important;
      font-weight: 600 !important;
      color: #111827 !important;
      padding-bottom: 10px !important;
      margin-bottom: 14px !important;
      border-bottom: 1px solid #f3f4f6 !important;
      letter-spacing: -0.01em !important;
      line-height: 1.2 !important;
    }

    .prodocu-items-list {
      display: flex !important;
      flex-direction: column !important;
      gap: 14px !important;
    }

    .prodocu-item {
      display: flex !important;
      align-items: flex-start !important;
      gap: 12px !important;
      padding: 0 !important;
      text-decoration: none !important;
      transition: transform 0.15s ease !important;
      background: transparent !important;
      border: none !important;
    }

    .prodocu-item:hover {
      transform: translateX(3px) !important;
      background: transparent !important;
    }

    .prodocu-item-icon {
      width: 22px !important;
      height: 22px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
      margin-top: 1px !important;
      background: transparent !important;
      border: none !important;
      border-radius: 0 !important;
      color: #4b5563 !important;
      transition: color 0.15s ease !important;
    }

    .prodocu-item:hover .prodocu-item-icon {
      color: #16a34a !important;
    }

    .prodocu-item-icon svg {
      width: 20px !important;
      height: 20px !important;
      stroke: currentColor !important;
      stroke-width: 1.6 !important;
    }

    .prodocu-item-content {
      display: flex !important;
      flex-direction: column !important;
      gap: 2px !important;
      min-width: 0 !important;
    }

    .prodocu-item-title {
      font-size: 14px !important;
      font-weight: 600 !important;
      color: #111827 !important;
      line-height: 1.3 !important;
      letter-spacing: -0.01em !important;
      transition: color 0.15s ease !important;
    }

    .prodocu-item:hover .prodocu-item-title {
      color: #16a34a !important;
    }

    .prodocu-item-desc {
      font-size: 12.5px !important;
      font-weight: 400 !important;
      color: #6b7280 !important;
      line-height: 1.3 !important;
      margin: 0 !important;
      white-space: normal !important;
    }

    /* Column 5: Integrate With Card */
    .prodocu-col-integrate {
      display: flex !important;
      flex-direction: column !important;
    }

    .prodocu-integrate-card {
      background: #f9fafb !important;
      border: 1px solid #f3f4f6 !important;
      border-radius: 18px !important;
      padding: 22px 18px 24px 18px !important;
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
      justify-content: flex-start !important;
      height: 100% !important;
      box-sizing: border-box !important;
    }

    .prodocu-integrate-title {
      font-size: 15px !important;
      font-weight: 600 !important;
      color: #111827 !important;
      text-align: center !important;
      margin-bottom: 20px !important;
      width: 100% !important;
      line-height: 1.2 !important;
    }

    .prodocu-integrate-grid {
      display: grid !important;
      grid-template-columns: repeat(3, 56px) !important;
      gap: 12px !important;
      justify-content: center !important;
      align-items: center !important;
    }

    .prodocu-int-tile {
      width: 56px !important;
      height: 56px !important;
      background: #ffffff !important;
      border: 1px solid rgba(0,0,0,0.04) !important;
      border-radius: 14px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      padding: 8px !important;
      box-shadow: 0 1px 3px rgba(0,0,0,0.05) !important;
      transition: transform 0.18s ease, box-shadow 0.18s ease !important;
      text-decoration: none !important;
      box-sizing: border-box !important;
    }

    .prodocu-int-tile:hover {
      transform: translateY(-2px) !important;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08) !important;
    }

    .prodocu-int-tile img {
      max-width: 100% !important;
      max-height: 32px !important;
      width: auto !important;
      height: auto !important;
      object-fit: contain !important;
      display: block !important;
    }

    .prodocu-int-arrow-tile {
      width: 56px !important;
      height: 56px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
    }

    .prodocu-int-arrow {
      width: 38px !important;
      height: 38px !important;
      background: #064e3b !important;
      border-radius: 50% !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      color: #ffffff !important;
      text-decoration: none !important;
      transition: transform 0.18s ease, background-color 0.18s ease !important;
    }

    .prodocu-int-arrow:hover {
      background: #047857 !important;
      transform: scale(1.08) !important;
    }

    .prodocu-int-arrow svg {
      width: 18px !important;
      height: 18px !important;
      stroke: #ffffff !important;
      stroke-width: 2.5 !important;
    }

    /* SOLUTIONS MEGA MENU: 12 Industries (3 cols x 4 rows) + Leads Directory Card (Image 3) */
    .mega-menu-solutions {
      width: min(1240px, calc(100vw - 24px)) !important;
      max-width: calc(100vw - 24px) !important;
      background: #ffffff !important;
      border: 1px solid rgba(226, 232, 240, 0.95) !important;
      border-radius: 22px !important;
      box-shadow: 0 24px 60px -12px rgba(15, 23, 42, 0.16), 0 0 0 1px rgba(15, 23, 42, 0.04) !important;
      padding: 0 !important;
      overflow: hidden !important;
      box-sizing: border-box !important;
    }

    .mega-solutions-wrap {
      display: grid !important;
      grid-template-columns: minmax(300px, 1fr) minmax(420px, 1.4fr) 275px !important;
      align-items: stretch !important;
      min-height: 410px !important;
    }

    .mega-sol-integrations {
      padding: 24px 22px !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: center !important;
      border-right: 1px solid #f1f5f9 !important;
      background: #fafbfc !important;
    }

    .mega-sol-main {
      padding: 24px 22px !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: center !important;
      background: #ffffff !important;
    }

    .mega-sol-heading {
      font-size: 1.12rem !important;
      font-weight: 800 !important;
      color: #3b4cb8 !important;
      margin-bottom: 16px !important;
      letter-spacing: -0.01em !important;
    }

    .mega-industry-grid {
      display: grid !important;
      grid-template-columns: repeat(3, 1fr) !important;
      gap: 10px 12px !important;
      width: 100% !important;
    }

    .mega-integrations-grid {
      display: grid !important;
      grid-template-columns: repeat(2, 1fr) !important;
      gap: 10px 12px !important;
      width: 100% !important;
    }

    .mega-ind-col {
      display: flex !important;
      flex-direction: column !important;
      gap: 8px !important;
    }

    .mega-ind-link {
      display: flex !important;
      align-items: center !important;
      gap: 11px !important;
      padding: 8px 10px !important;
      border-radius: 12px !important;
      text-decoration: none !important;
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
      background: transparent !important;
    }

    .mega-ind-link:hover {
      background: #f1f5f9 !important;
      transform: translateX(3px) !important;
    }

    .mega-ind-icon {
      width: 38px !important;
      height: 38px !important;
      min-width: 38px !important;
      border-radius: 50% !important;
      background: #eff2fe !important;
      color: #4f46e5 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
      transition: transform 0.2s ease, background-color 0.2s ease, color 0.2s ease !important;
    }

    .mega-ind-icon svg {
      width: 19px !important;
      height: 19px !important;
      stroke: currentColor !important;
      stroke-width: 2 !important;
    }

    .mega-ind-link:hover .mega-ind-icon {
      transform: scale(1.08) !important;
      background: #4f46e5 !important;
      color: #ffffff !important;
    }

    .mega-icon-shopify { background: #ecfdf5 !important; color: #059669 !important; }
    .mega-integ-link:hover .mega-icon-shopify { background: #059669 !important; color: #ffffff !important; }

    .mega-icon-woo { background: #f5f3ff !important; color: #7c3aed !important; }
    .mega-integ-link:hover .mega-icon-woo { background: #7c3aed !important; color: #ffffff !important; }

    .mega-icon-sheets { background: #eff6ff !important; color: #2563eb !important; }
    .mega-integ-link:hover .mega-icon-sheets { background: #2563eb !important; color: #ffffff !important; }

    .mega-icon-cal { background: #ecfdf5 !important; color: #10b981 !important; }
    .mega-integ-link:hover .mega-icon-cal { background: #10b981 !important; color: #ffffff !important; }

    .mega-icon-fb { background: #eff6ff !important; color: #1877f2 !important; }
    .mega-integ-link:hover .mega-icon-fb { background: #1877f2 !important; color: #ffffff !important; }

    .mega-icon-crm { background: #faf5ff !important; color: #9333ea !important; }
    .mega-integ-link:hover .mega-icon-crm { background: #9333ea !important; color: #ffffff !important; }

    .mega-icon-api { background: #fdf2f8 !important; color: #db2777 !important; }
    .mega-integ-link:hover .mega-icon-api { background: #db2777 !important; color: #ffffff !important; }

    .mega-icon-custom { background: #fff7ed !important; color: #ea580c !important; }
    .mega-integ-link:hover .mega-icon-custom { background: #ea580c !important; color: #ffffff !important; }

    .mega-ind-title {
      font-size: 0.92rem !important;
      font-weight: 700 !important;
      color: #1e293b !important;
      line-height: 1.3 !important;
      transition: color 0.2s ease !important;
    }

    .mega-ind-link:hover .mega-ind-title {
      color: #4338ca !important;
    }

    /* Aside Lead Directory Card (Image 3) */
    .mega-sol-leads-aside {
      background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%) !important;
      border-left: 1px solid #e2e8f0 !important;
      padding: 34px 28px !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: center !important;
      align-items: flex-start !important;
      gap: 14px !important;
      box-sizing: border-box !important;
    }

    .mega-leads-badge {
      display: inline-block !important;
      background: #e0e7ff !important;
      color: #3730a3 !important;
      border: 1px solid rgba(99, 102, 241, 0.25) !important;
      font-size: 0.68rem !important;
      font-weight: 800 !important;
      letter-spacing: 0.06em !important;
      text-transform: uppercase !important;
      padding: 4px 12px !important;
      border-radius: 999px !important;
    }

    .mega-leads-title {
      font-size: 1.35rem !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      line-height: 1.25 !important;
      margin: 0 !important;
    }

    .mega-leads-desc {
      font-size: 0.88rem !important;
      color: #475569 !important;
      line-height: 1.5 !important;
      margin: 0 0 6px 0 !important;
    }

    .btn-mega-leads-primary {
      width: 100% !important;
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      padding: 11px 18px !important;
      background: linear-gradient(90deg, #6366f1 0%, #0ea5e9 100%) !important;
      color: #ffffff !important;
      font-size: 0.92rem !important;
      font-weight: 700 !important;
      border-radius: 999px !important;
      text-decoration: none !important;
      box-shadow: 0 4px 14px rgba(99, 102, 241, 0.35) !important;
      transition: all 0.2s ease !important;
      box-sizing: border-box !important;
    }

    .btn-mega-leads-primary:hover {
      transform: translateY(-2px) !important;
      box-shadow: 0 6px 20px rgba(99, 102, 241, 0.45) !important;
      color: #ffffff !important;
    }

    .btn-mega-leads-secondary {
      width: 100% !important;
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      padding: 10px 18px !important;
      background: #ffffff !important;
      color: #0f172a !important;
      font-size: 0.9rem !important;
      font-weight: 700 !important;
      border: 1.5px solid #cbd5e1 !important;
      border-radius: 999px !important;
      cursor: pointer !important;
      transition: all 0.2s ease !important;
      box-sizing: border-box !important;
    }

    .btn-mega-leads-secondary:hover {
      background: #f8fafc !important;
      border-color: #94a3b8 !important;
      color: #0f172a !important;
      transform: translateY(-1px) !important;
    }

    @media (max-width: 1240px) {
      .mega-menu-solutions {
        width: min(1080px, calc(100vw - 20px)) !important;
      }
      .mega-solutions-wrap {
        grid-template-columns: 1fr 1.35fr 240px !important;
      }
      .mega-sol-main,
      .mega-sol-integrations {
        padding: 18px 14px !important;
      }
      .mega-sol-leads-aside {
        padding: 20px 16px !important;
      }
      .mega-industry-grid,
      .mega-integrations-grid {
        gap: 6px 10px !important;
      }
      .mega-ind-link {
        padding: 6px 8px !important;
        gap: 8px !important;
      }
      .mega-ind-icon {
        width: 32px !important;
        height: 32px !important;
        min-width: 32px !important;
      }
      .mega-ind-icon svg {
        width: 16px !important;
        height: 16px !important;
      }
      .mega-ind-title {
        font-size: 0.84rem !important;
      }
    }

    .mega-solutions-grid,
    .mega-products-grid {
      display: grid !important;
      grid-template-columns: 1.25fr 1fr 1fr 1fr 1fr !important;
      gap: 16px !important;
      align-items: stretch !important;
      width: 100% !important;
    }

    .mega-solutions-grid .mega-sol-col,
    .mega-products-grid .mega-sol-col {
      display: flex !important;
      flex-direction: column !important;
      gap: 5px !important;
      padding: 0 !important;
      border: none !important;
      min-width: 0 !important;
    }

    .mega-solutions-grid .mega-sol-col + .mega-sol-col,
    .mega-products-grid .mega-sol-col + .mega-sol-col {
      border-left: 1px solid #f1f5f9 !important;
      padding-left: 16px !important;
    }

    .mega-solutions-grid .mega-col-title,
    .mega-products-grid .mega-col-title {
      font-size: 0.72rem !important;
      font-weight: 800 !important;
      letter-spacing: 0.08em !important;
      text-transform: uppercase !important;
      color: #8b5cf6 !important;
      padding: 2px 6px 10px !important;
      margin-bottom: 2px !important;
      border-bottom: 2px solid rgba(139, 92, 246, 0.15) !important;
    }

    .mega-solutions-grid .mega-link,
    .mega-products-grid .mega-link {
      display: flex !important;
      align-items: flex-start !important;
      gap: 10px !important;
      padding: 7px 8px !important;
      border-radius: 12px !important;
      text-decoration: none !important;
      transition: all 0.18s cubic-bezier(0.16, 1, 0.3, 1) !important;
      background: transparent !important;
    }

    .mega-solutions-grid .mega-link:hover,
    .mega-products-grid .mega-link:hover {
      background: #f8fafc !important;
      transform: translateX(3px) !important;
    }

    .mega-solutions-grid .mega-icon,
    .mega-products-grid .mega-icon {
      width: 36px !important;
      height: 36px !important;
      border-radius: 10px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
    }

    .mega-solutions-grid .mega-icon svg,
    .mega-products-grid .mega-icon svg {
      width: 18px !important;
      height: 18px !important;
    }

    .mega-solutions-grid .mega-link-text,
    .mega-products-grid .mega-link-text {
      display: flex !important;
      flex-direction: column !important;
      min-width: 0 !important;
    }

    .mega-solutions-grid .mega-link-title,
    .mega-products-grid .mega-link-title {
      font-size: 0.86rem !important;
      font-weight: 700 !important;
      color: #0f172a !important;
      line-height: 1.25 !important;
      white-space: normal !important;
    }

    .mega-solutions-grid .mega-link-desc,
    .mega-products-grid .mega-link-desc {
      font-size: 0.73rem !important;
      color: #64748b !important;
      line-height: 1.35 !important;
      margin-top: 2px !important;
      white-space: normal !important;
    }

    /* Column 4: Platform Spotlight CTA Card */
    .mega-products-grid .mega-products-cta {
      background: linear-gradient(155deg, #f5f3ff 0%, #ede9fe 45%, #faf5ff 100%) !important;
      border: 1px solid rgba(139, 92, 246, 0.22) !important;
      border-radius: 16px !important;
      padding: 18px 18px !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      gap: 12px !important;
      box-shadow: 0 4px 20px -2px rgba(139, 92, 246, 0.12) !important;
      min-width: 0 !important;
    }

    .mega-products-cta .mega-cta-top {
      display: flex !important;
      flex-direction: column !important;
      gap: 8px !important;
    }

    .mega-products-cta .mega-guide-badge {
      display: inline-flex !important;
      align-self: flex-start !important;
      background: linear-gradient(135deg, #8b5cf6, #6366f1) !important;
      color: #ffffff !important;
      font-size: 0.64rem !important;
      font-weight: 800 !important;
      letter-spacing: 0.07em !important;
      text-transform: uppercase !important;
      padding: 3px 8px !important;
      border-radius: 6px !important;
    }

    .mega-products-cta h4 {
      font-size: 1.02rem !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      line-height: 1.3 !important;
      margin: 2px 0 0 0 !important;
      white-space: normal !important;
    }

    .mega-products-cta p {
      font-size: 0.77rem !important;
      color: #475569 !important;
      line-height: 1.45 !important;
      margin: 0 !important;
      white-space: normal !important;
    }

    .mega-products-cta-perks {
      list-style: none !important;
      padding: 0 !important;
      margin: 4px 0 0 0 !important;
      display: flex !important;
      flex-direction: column !important;
      gap: 6px !important;
    }

    .mega-products-cta-perks li {
      font-size: 0.74rem !important;
      font-weight: 600 !important;
      color: #334155 !important;
      display: flex !important;
      align-items: center !important;
      gap: 7px !important;
      white-space: normal !important;
    }

    .mega-products-cta-perks li svg {
      width: 14px !important;
      height: 14px !important;
      color: #10b981 !important;
      flex-shrink: 0 !important;
    }

    .mega-products-cta .mega-cta-btn {
      width: 100% !important;
      text-align: center !important;
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      padding: 0.55rem 1rem !important;
      font-size: 0.84rem !important;
      font-weight: 700 !important;
      background: linear-gradient(135deg, #8b5cf6 0%, #6366f1 100%) !important;
      color: #ffffff !important;
      border-radius: 999px !important;
      text-decoration: none !important;
      box-shadow: 0 4px 14px rgba(139, 92, 246, 0.35) !important;
      transition: all 0.2s ease !important;
      border: none !important;
    }

    .mega-products-cta .mega-cta-btn:hover {
      transform: translateY(-2px) !important;
      box-shadow: 0 6px 20px rgba(139, 92, 246, 0.5) !important;
      color: #ffffff !important;
    }

    @media (max-width: 1220px) {
      .mega-menu-solutions,
      .mega-menu-products {
        width: min(980px, calc(100vw - 20px)) !important;
        padding: 18px 16px !important;
      }
      .mega-solutions-grid,
      .mega-products-grid {
        gap: 12px !important;
        grid-template-columns: 1.2fr 1fr 1fr 1fr 1fr !important;
      }
      .mega-solutions-grid .mega-sol-col + .mega-sol-col,
      .mega-products-grid .mega-sol-col + .mega-sol-col {
        padding-left: 12px !important;
      }
      .mega-solutions-grid .mega-link,
      .mega-products-grid .mega-link {
        padding: 6px 6px !important;
        gap: 7px !important;
      }
      .mega-solutions-grid .mega-icon,
      .mega-products-grid .mega-icon {
        width: 32px !important;
        height: 32px !important;
      }
      .mega-solutions-grid .mega-link-title,
      .mega-products-grid .mega-link-title {
        font-size: 0.8rem !important;
      }
      .mega-solutions-grid .mega-link-desc,
      .mega-products-grid .mega-link-desc {
        font-size: 0.7rem !important;
      }
    }

    /* BUSINESS LEADS NAVBAR BUTTON: Prominently highlighted pill - ALWAYS visible on all screen sizes */
    .nav-item-leads {
      display: inline-flex !important;
      align-items: center !important;
      position: static !important;
    }
    .nav-link-leads {
      background: linear-gradient(180deg, #f0f4ff 0%, #e6edff 100%) !important;
      color: #3730a3 !important;
      font-weight: 700 !important;
      border: 1px solid rgba(99, 102, 241, 0.28) !important;
      padding: 0.36rem 0.72rem !important;
      border-radius: 999px !important;
      box-shadow: 0 1px 4px rgba(79, 70, 229, 0.08) !important;
      display: inline-flex !important;
      align-items: center !important;
      gap: 5px !important;
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .nav-link-leads:hover,
    .nav-item-leads:hover > .nav-link-leads,
    .nav-item-leads.open > .nav-link-leads,
    .nav-link-leads.active {
      background: linear-gradient(135deg, #4f46e5 0%, #4338ca 100%) !important;
      color: #ffffff !important;
      border-color: #4338ca !important;
      box-shadow: 0 4px 14px rgba(79, 70, 229, 0.35) !important;
    }
    .nav-link-leads:hover svg,
    .nav-item-leads:hover > .nav-link-leads svg,
    .nav-item-leads.open > .nav-link-leads svg,
    .nav-link-leads.active svg {
      opacity: 1 !important;
      color: #ffffff !important;
      transform: rotate(180deg) !important;
    }
    .nav-leads-pill {
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      font-size: 0.64rem !important;
      font-weight: 800 !important;
      line-height: 1 !important;
      padding: 2px 6px !important;
      border-radius: 999px !important;
      background: #4f46e5 !important;
      color: #ffffff !important;
      letter-spacing: 0.02em !important;
      transition: all 0.18s ease !important;
    }
    .nav-link-leads:hover .nav-leads-pill,
    .nav-item-leads:hover > .nav-link-leads .nav-leads-pill,
    .nav-item-leads.open > .nav-link-leads .nav-leads-pill,
    .nav-link-leads.active .nav-leads-pill {
      background: #ffffff !important;
      color: #4338ca !important;
    }

    /* Mega menu leads open/hover visibility guarantee */
    .nav-item-leads.open > .mega-menu-leads,
    .nav-item-leads:hover > .mega-menu-leads,
    .nav-item.open > .mega-menu-leads,
    .nav-item:hover > .mega-menu-leads {
      opacity: 1 !important;
      visibility: visible !important;
      pointer-events: auto !important;
      transform: translateX(-50%) translateY(0) !important;
    }

    /* BUSINESS LEADS MEGA MENU: 16 Categories 2-Column Grid + Featured Aside */
    .mega-menu-leads {
      width: min(920px, calc(100vw - 28px)) !important;
      max-width: calc(100vw - 28px) !important;
      background: #ffffff !important;
      border: 1px solid rgba(226, 232, 240, 0.95) !important;
      border-radius: 20px !important;
      box-shadow: 0 24px 60px -12px rgba(15, 23, 42, 0.16), 0 0 0 1px rgba(15, 23, 42, 0.04) !important;
      padding: 0 !important;
      overflow: hidden !important;
      box-sizing: border-box !important;
    }
    .mega-panel-leads {
      display: grid !important;
      grid-template-columns: 1fr 240px !important;
      min-height: 480px;
    }
    .mega-panel-leads-grid {
      display: grid !important;
      grid-template-columns: 1fr 1fr !important;
      gap: 3px 12px !important;
      padding: 16px 18px !important;
      max-height: 520px !important;
      overflow-y: auto !important;
    }
    .mega-panel-leads-grid::-webkit-scrollbar {
      width: 5px;
    }
    .mega-panel-leads-grid::-webkit-scrollbar-thumb {
      background: rgba(148, 163, 184, 0.4);
      border-radius: 999px;
    }
    .mega-panel-leads-grid .mega-link {
      display: flex !important;
      align-items: center !important;
      gap: 10px !important;
      padding: 6px 10px !important;
      border-radius: 10px !important;
      transition: background 0.15s ease, transform 0.15s ease !important;
      text-decoration: none !important;
    }
    .mega-panel-leads-grid .mega-link:hover {
      background: #f1f5f9 !important;
      transform: translateX(2px) !important;
    }
    .mega-panel-leads-grid .mega-icon {
      width: 36px !important;
      height: 36px !important;
      min-width: 36px !important;
      border-radius: 10px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
      transition: transform 0.18s ease, box-shadow 0.18s ease !important;
    }
    .mega-panel-leads-grid .mega-icon svg {
      width: 18px !important;
      height: 18px !important;
      stroke-width: 2 !important;
      stroke: currentColor !important;
      fill: none !important;
      transition: transform 0.18s ease !important;
    }
    .mega-panel-leads-grid .mega-link:hover .mega-icon {
      transform: scale(1.06) !important;
      box-shadow: 0 4px 10px rgba(15, 23, 42, 0.08) !important;
    }
    .mega-icon-blue { background: #EFF6FF !important; color: #2563EB !important; border: 1px solid rgba(37, 99, 235, 0.12) !important; }
    .mega-icon-green { background: #ECFDF5 !important; color: #059669 !important; border: 1px solid rgba(5, 150, 105, 0.12) !important; }
    .mega-icon-pink { background: #FFF1F2 !important; color: #E11D48 !important; border: 1px solid rgba(225, 29, 72, 0.12) !important; }
    .mega-icon-purple { background: #F5F3FF !important; color: #7C3AED !important; border: 1px solid rgba(124, 58, 237, 0.12) !important; }
    .mega-icon-amber { background: #FFFBEB !important; color: #D97706 !important; border: 1px solid rgba(217, 119, 6, 0.12) !important; }
    .mega-icon-indigo { background: #EEF2FF !important; color: #4F46E5 !important; border: 1px solid rgba(79, 70, 229, 0.12) !important; }
    .mega-icon-cyan { background: #F0F9FF !important; color: #0284C7 !important; border: 1px solid rgba(2, 132, 199, 0.12) !important; }
    .mega-icon-orange { background: #FFF7ED !important; color: #EA580C !important; border: 1px solid rgba(234, 88, 12, 0.12) !important; }
    .mega-panel-leads-grid .mega-link-title {
      font-size: 0.86rem !important;
      font-weight: 700 !important;
      color: #0f172a !important;
      line-height: 1.25 !important;
      display: block !important;
    }
    .mega-panel-leads-grid .mega-link-desc {
      font-size: 0.72rem !important;
      color: #64748b !important;
      line-height: 1.25 !important;
      display: block !important;
      white-space: nowrap !important;
      overflow: hidden !important;
      text-overflow: ellipsis !important;
      max-width: 215px !important;
    }
    .mega-panel-aside {
      background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%) !important;
      border-left: 1px solid #e2e8f0 !important;
      padding: 24px 20px !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: center !important;
      gap: 12px !important;
      box-sizing: border-box !important;
      text-align: left !important;
    }
    .mega-aside-badge {
      background: rgba(37, 99, 235, 0.1);
      color: #2563eb;
      border: 1px solid rgba(37, 99, 235, 0.25);
      font-size: 0.7rem;
      font-weight: 800;
      letter-spacing: 0.04em;
      padding: 3px 8px;
      border-radius: 999px;
      display: inline-block;
      align-self: flex-start;
      text-transform: uppercase;
    }
    .mega-panel-aside strong {
      font-size: 1.12rem !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      margin: 0 !important;
      display: block !important;
    }
    .mega-panel-aside p {
      font-size: 0.84rem !important;
      color: #64748b !important;
      line-height: 1.5 !important;
      margin: 0 !important;
    }
    .mega-panel-aside .btn {
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      width: 100% !important;
      box-sizing: border-box !important;
      text-align: center !important;
    }
    @media (max-width: 1100px) {
      .mega-menu-leads {
        width: min(820px, calc(100vw - 20px)) !important;
      }
      .mega-panel-leads-grid .mega-link-desc {
        max-width: 170px !important;
      }
    }

    /* Compact Small Dropdowns for Partners & Company */
    .nav-item-sm {
      position: relative !important;
    }
    .mega-menu-sm {
      position: absolute !important;
      top: calc(100% + 14px) !important;
      left: auto !important;
      right: 0 !important;
      transform: translateY(8px) !important;
      min-width: 260px !important;
      max-width: calc(100vw - 32px) !important;
      box-sizing: border-box !important;
      z-index: 100000 !important;
      opacity: 0 !important;
      visibility: hidden !important;
      pointer-events: none !important;
      transition: opacity 0.22s cubic-bezier(0.16, 1, 0.3, 1), transform 0.22s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.22s !important;
    }
    .nav-item:hover > .mega-menu-sm,
    .nav-item.open > .mega-menu-sm,
    .nav-item:focus-within > .mega-menu-sm {
      transform: translateY(0) !important;
      opacity: 1 !important;
      visibility: visible !important;
      pointer-events: auto !important;
    }

    /* Professional Categorized Company Dropdown */
    .mega-menu-company {
      position: absolute !important;
      top: calc(100% + 14px) !important;
      left: auto !important;
      right: -60px !important;
      width: 890px !important;
      max-width: calc(100vw - 32px) !important;
      background: #ffffff !important;
      border-radius: 20px !important;
      box-shadow: 0 24px 50px -10px rgba(15, 23, 42, 0.22), 0 0 0 1px rgba(0, 0, 0, 0.06) !important;
      box-sizing: border-box !important;
      z-index: 100000 !important;
      opacity: 0 !important;
      visibility: hidden !important;
      pointer-events: none !important;
      transform: translateY(8px) !important;
      transition: opacity 0.22s cubic-bezier(0.16, 1, 0.3, 1), transform 0.22s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.22s !important;
      overflow: hidden !important;
    }
    .nav-item:hover > .mega-menu-company,
    .nav-item.open > .mega-menu-company,
    .nav-item:focus-within > .mega-menu-company {
      transform: translateY(0) !important;
      opacity: 1 !important;
      visibility: visible !important;
      pointer-events: auto !important;
    }
    .mega-company-grid {
      display: grid !important;
      grid-template-columns: repeat(4, 1fr) !important;
      gap: 12px !important;
      padding: 18px 18px 14px !important;
      background: #ffffff !important;
    }
    @media (max-width: 1100px) and (min-width: 992px) {
      .mega-menu-company {
        width: 760px !important;
        right: -20px !important;
      }
      .mega-company-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 16px !important;
      }
    }
    .mega-company-brochure-link {
      display: inline-flex !important;
      align-items: center !important;
      gap: 5px !important;
      color: #6D28D9 !important;
      font-weight: 700 !important;
      text-decoration: none !important;
      padding: 4px 10px !important;
      border-radius: 8px !important;
      background: #F3E8FF !important;
      font-size: 11.5px !important;
      transition: all 0.18s ease !important;
    }
    .mega-company-brochure-link:hover {
      background: #6D28D9 !important;
      color: #ffffff !important;
    }
    .mega-company-col {
      display: flex !important;
      flex-direction: column !important;
      gap: 3px !important;
    }
    .mega-company-category-title {
      font-size: 11px !important;
      font-weight: 700 !important;
      letter-spacing: 0.06em !important;
      text-transform: uppercase !important;
      color: #6D28D9 !important;
      padding: 0 8px 6px 8px !important;
      border-bottom: 1px solid #F1F5F9 !important;
      margin-bottom: 4px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
    }
    .mega-company-link {
      display: flex !important;
      align-items: center !important;
      gap: 9px !important;
      padding: 7px 8px !important;
      border-radius: 10px !important;
      text-decoration: none !important;
      transition: background 0.18s ease, transform 0.18s ease !important;
    }
    .mega-company-link:hover {
      background: #F8FAFC !important;
      transform: translateX(2px) !important;
    }
    .mega-company-icon {
      width: 32px !important;
      height: 32px !important;
      min-width: 32px !important;
      border-radius: 8px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
      transition: transform 0.18s ease !important;
    }
    .mega-company-link:hover .mega-company-icon {
      transform: scale(1.08) !important;
    }
    .mega-company-icon svg {
      width: 16px !important;
      height: 16px !important;
      stroke-width: 2 !important;
      fill: none !important;
      stroke: currentColor !important;
    }
    .mega-company-text {
      display: flex !important;
      flex-direction: column !important;
      gap: 1px !important;
    }
    .mega-company-title {
      font-size: 12.5px !important;
      font-weight: 700 !important;
      color: #0F172A !important;
      line-height: 1.25 !important;
      display: flex !important;
      align-items: center !important;
      gap: 4px !important;
    }
    .mega-company-desc {
      font-size: 10.5px !important;
      color: #64748B !important;
      line-height: 1.25 !important;
    }
    .mega-company-badge {
      font-size: 8.5px !important;
      background: #EEF2FF !important;
      color: #4F46E5 !important;
      padding: 1px 5px !important;
      border-radius: 999px !important;
      font-weight: 700 !important;
      border: 1px solid #C7D2FE !important;
      letter-spacing: 0.02em !important;
    }
    .mega-company-footer {
      background: #F8FAFC !important;
      border-top: 1px solid #F1F5F9 !important;
      padding: 10px 18px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      font-size: 11px !important;
      color: #64748B !important;
    }
    .mega-company-footer a {
      color: #6D28D9 !important;
      font-weight: 600 !important;
      text-decoration: none !important;
    }
    .mega-company-footer a:hover {
      text-decoration: underline !important;
    }

    /* Action Buttons: Lang, Login, Start Free */
    .header-actions {
      display: flex !important;
      align-items: center !important;
      gap: 0.45rem !important;
      flex-shrink: 0 !important;
      margin-left: 0.5rem !important;
    }
    .header-login {
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      padding: 0.38rem 0.95rem !important;
      font-size: 0.82rem !important;
      font-weight: 600 !important;
      color: #334155 !important;
      background: #ffffff !important;
      border: 1.5px solid #cbd5e1 !important;
      border-radius: 999px !important;
      text-decoration: none !important;
      white-space: nowrap !important;
      flex-shrink: 0 !important;
      transition: all 0.2s ease !important;
    }
    .header-login:hover {
      border-color: #8b5cf6 !important;
      color: #8b5cf6 !important;
      background: #fbfbfe !important;
    }
    .header-cta-start {
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      padding: 0.42rem 1.15rem !important;
      font-size: 0.82rem !important;
      font-weight: 700 !important;
      color: #ffffff !important;
      background: linear-gradient(135deg, #7c3aed 0%, #6366f1 100%) !important;
      border-radius: 999px !important;
      border: none !important;
      text-decoration: none !important;
      white-space: nowrap !important;
      flex-shrink: 0 !important;
      box-shadow: 0 4px 14px rgba(124, 58, 237, 0.35) !important;
      transition: all 0.2s ease !important;
    }
    .header-cta-start:hover {
      transform: translateY(-1px) !important;
      box-shadow: 0 8px 20px rgba(124, 58, 237, 0.45) !important;
      color: #ffffff !important;
    }
    .lang-switch-btn {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.3rem !important;
      padding: 0.32rem 0.65rem !important;
      border-radius: 999px !important;
      border: 1.5px solid #e2e8f0 !important;
      background: #ffffff !important;
      font-size: 0.76rem !important;
      font-weight: 700 !important;
      color: #334155 !important;
      cursor: pointer !important;
      white-space: nowrap !important;
      flex-shrink: 0 !important;
    }

    /* Screen Adaptability - NEVER clip or overflow on any device */
    @media (max-width: 1320px) {
      .nav-item-secondary {
        display: none !important;
      }
      .nav-link {
        padding: 0.32rem 0.42rem !important;
        font-size: 0.79rem !important;
      }
      .nav-link-leads {
        padding: 0.32rem 0.55rem !important;
        font-size: 0.79rem !important;
      }
    }
    @media (max-width: 1140px) {
      .nav-desktop {
        display: none !important;
      }
      .mobile-toggle {
        display: flex !important;
      }
      .header-cta-start {
        display: none !important;
      }
    }
    @media (max-width: 1024px) {
      .site-header {
        top: 8px !important;
        padding: 0 10px !important;
      }
      .header-inner {
        height: 52px !important;
        border-radius: 999px !important;
        padding: 0 0.75rem !important;
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
      }
      .btn-header-data {
        display: none !important;
      }
      .header-actions .header-login {
        display: none !important;
      }
      .header-cta-start {
        display: none !important;
      }
      .header-actions {
        display: flex !important;
        align-items: center !important;
        gap: 6px !important;
      }
      .mobile-toggle {
        display: flex !important;
      }
      .lang-switch {
        display: inline-flex !important;
      }
      .lang-switch-btn {
        padding: 0.28rem 0.5rem !important;
      }
      .lang-switch-menu {
        top: calc(100% + 8px) !important;
        right: -8px !important;
        min-width: 140px !important;
      }
    }
    @media (max-width: 991px) {
      .mega-channels-container { grid-template-columns: 1fr !important; }
      .mega-channels-promo { display: none !important; }
    }

    /* Google Website Translator Clean UI Suppression */
    .goog-te-banner-frame.skiptranslate,
    .goog-te-banner-frame,
    iframe.goog-te-banner-frame {
      display: none !important;
      visibility: hidden !important;
      height: 0 !important;
      width: 0 !important;
      opacity: 0 !important;
      pointer-events: none !important;
    }
    body {
      top: 0px !important;
      position: static !important;
    }
    #google_translate_element,
    .skiptranslate:not(.lang-switch):not(.lang-switch-btn):not(.lang-switch-menu):not(.mobile-lang-box):not(.mobile-lang-grid):not(.mobile-lang-btn) {
      display: none !important;
    }
    .goog-tooltip,
    .goog-tooltip:hover,
    #goog-gt-tt,
    .goog-te-balloon-frame {
      display: none !important;
    }
    .goog-text-highlight {
      background: transparent !important;
      border: none !important;
      box-shadow: none !important;
    }
    font[color] {
      color: inherit !important;
    }

    /* Arabic RTL Layout Adaptations */
    html[dir="rtl"],
    html.translated-rtl {
      direction: rtl !important;
      text-align: right !important;
    }
    html[dir="rtl"] body,
    body.is-rtl {
      direction: rtl !important;
      text-align: right !important;
    }
    html[dir="rtl"] .lang-switch-menu {
      left: 0 !important;
      right: auto !important;
      text-align: right !important;
    }
    html[dir="rtl"] .header-actions {
      flex-direction: row-reverse !important;
    }
    html[dir="rtl"] .cw-hero-content {
      text-align: right !important;
    }
    html[dir="rtl"] .cw-trust-row {
      justify-content: flex-start !important;
    }
    html[dir="rtl"] .cw-trust-item svg {
      margin-left: 5px !important;
      margin-right: 0 !important;
    }

    /* Mobile Drawer Language Selector Box */
    .mobile-lang-box {
      padding: 12px 14px 10px;
      border-top: 1px solid #e2e8f0;
      margin-top: 10px;
      background: #f8fafc;
      border-radius: 12px;
    }
    .mobile-lang-title {
      font-size: 0.72rem;
      font-weight: 800;
      color: #64748b;
      margin-bottom: 8px;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .mobile-lang-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 6px;
    }
    .mobile-lang-btn {
      padding: 7px 10px;
      border-radius: 8px;
      border: 1.5px solid #cbd5e1;
      background: #ffffff;
      font-size: 0.78rem;
      font-weight: 700;
      color: #334155;
      text-align: center;
      cursor: pointer;
      transition: all 0.15s ease;
    }
    .mobile-lang-btn:hover {
      border-color: #6366f1;
      color: #6366f1;
    }
    .mobile-lang-btn.active {
      background: #6366f1;
      border-color: #6366f1;
      color: #ffffff;
      box-shadow: 0 2px 8px rgba(99, 102, 241, 0.3);
    }
  </style>
  <script>
    (function() {
      function updateLogoCoords() {
        var header = document.querySelector('.site-header');
        var logo = document.getElementById('site-logo');
        if (!header || !logo) return;
        var inner = header.querySelector('.header-inner');
        if (!inner) return;

        var isMobile = window.innerWidth <= 768;
        var targetLeft = isMobile ? 16 : 28;
        var ann = document.querySelector('.announcement-banner');
        var annOffset = (ann && window.scrollY < ann.offsetHeight) ? (ann.offsetHeight - window.scrollY) : 0;
        var targetTop = (isMobile ? 14 : 16) + annOffset;
        var targetScale = isMobile ? 1.25 : 1.38;

        var innerRect = inner.getBoundingClientRect();
        var innerPaddingLeft = isMobile ? 14 : 20;
        var dockX = innerRect.left + innerPaddingLeft;
        var dockY = innerRect.top + ((innerRect.height - 40) / 2);

        var deltaX = targetLeft - dockX;
        var deltaY = targetTop - dockY;

        logo.style.setProperty('--logo-fly-x', deltaX + 'px');
        logo.style.setProperty('--logo-fly-y', deltaY + 'px');
        logo.style.setProperty('--logo-fly-scale', targetScale);
      }

      function handleScroll() {
        var header = document.querySelector('.site-header');
        if (header) {
          if (window.scrollY > 25) {
            header.classList.add('scrolled');
          } else {
            header.classList.remove('scrolled');
          }
        }
      }

      window.addEventListener('scroll', handleScroll, { passive: true });
      window.addEventListener('resize', function() {
        updateLogoCoords();
        handleScroll();
      }, { passive: true });

      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
          updateLogoCoords();
          handleScroll();
        });
      } else {
        updateLogoCoords();
        handleScroll();
      }
      window.addEventListener('load', updateLogoCoords);
    })();
  </script>
</head>
<body>

  <?php if ($announcementEnabled && !empty($announcementText)): ?>
  <aside class="announcement-banner" style="background:linear-gradient(90deg,#8B5CF6,#6366F1,#06B6D4);color:#fff;text-align:center;padding:0.45rem 1rem;font-size:0.875rem;font-weight:600;display:flex;align-items:center;justify-content:center;gap:0.5rem;z-index:9999;position:relative;">
    <a href="<?php echo htmlspecialchars($announcementLink); ?>" style="color:#fff;text-decoration:none;display:inline-flex;align-items:center;gap:0.4rem;">
      <span><?php echo htmlspecialchars($announcementText); ?></span>
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
  </aside>
  <?php endif; ?>

  <a href="#main" class="skip-link">Skip to content</a>
  <header class="site-header" role="banner">
    <div class="header-inner">
      <div class="logo-dock-wrapper" id="logo-dock-wrapper">
        <a href="<?php echo $bp; ?>" class="logo site-main-logo" id="site-logo" aria-label="<?php echo htmlspecialchars($SITE_NAME); ?> Home">
          <img src="<?php echo htmlspecialchars($cmsLogo); ?>" alt="<?php echo htmlspecialchars($SITE_NAME); ?>" class="logo-img" width="168" height="42" onerror="this.onerror=null;this.src='<?php echo $bp; ?>assets/images/logo.png';">
          <span class="logo-fallback" style="display:none;align-items:center;gap:0.4rem">
            <img src="<?php echo $bp; ?>assets/images/logo-icon.png" width="32" height="32" style="border-radius:8px" alt="<?php echo htmlspecialchars($SITE_NAME); ?>">
            <span style="font-weight:800;font-size:1.15rem;color:#fff">Hellobotz</span>
          </span>
        </a>
      </div>
      <nav class="nav-desktop" role="navigation" aria-label="Main">

        <!-- PRODUCTS MEGAMENU (HelloBotz Suite - 5-Column SaaS Mega Menu) -->
        <div class="nav-item nav-item-features nav-item-products" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Products <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-panel mega-menu-products" role="menu">
            <div class="prodocu-mega-layout">

              <!-- Column 1: Channels (All 4 Channels) -->
              <div class="prodocu-col-channels">
                <div class="prodocu-col-heading">Channels</div>
                <div class="prodocu-channel-list">
                  <button type="button" class="prodocu-channel-btn active" data-channel="whatsapp">
                    <span class="prodocu-chan-icon">
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/><path d="M16 12.5c-.2-.1-1.2-.6-1.4-.7-.2-.1-.3-.1-.5.1-.1.2-.5.7-.6.8-.1.1-.3.2-.5.1-.2-.1-.9-.3-1.7-1-.6-.5-1-1.2-1.1-1.4-.1-.2 0-.3.1-.4.1-.1.2-.2.3-.4.1-.1.1-.2.2-.3 0-.1 0-.3-.1-.4-.1-.1-.5-1.1-.6-1.5-.2-.4-.3-.3-.5-.4h-.4c-.1 0-.4.1-.6.3-.2.2-.8.8-.8 1.9s.8 2.2.9 2.4c.1.1 1.6 2.4 3.9 3.4.5.2 1 .4 1.3.5.6.2 1.1.1 1.5.1.5-.1 1.4-.6 1.6-1.1.2-.5.2-1 .1-1.1-.1-.1-.3-.2-.5-.3z"/></svg>
                    </span>
                    <span>WhatsApp</span>
                  </button>
                  <button type="button" class="prodocu-channel-btn" data-channel="instagram">
                    <span class="prodocu-chan-icon">
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </span>
                    <span>Instagram</span>
                  </button>
                  <button type="button" class="prodocu-channel-btn" data-channel="telegram">
                    <span class="prodocu-chan-icon">
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    </span>
                    <span>Telegram</span>
                  </button>
                  <button type="button" class="prodocu-channel-btn" data-channel="facebook">
                    <span class="prodocu-chan-icon">
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </span>
                    <span>Facebook</span>
                  </button>
                </div>
                <div class="prodocu-partner-badge">
                  <div class="prodocu-partner-pill">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="#0081FB"><path d="M12 8.547c-1.396-2.646-3.234-4.547-5.551-4.547-3.568 0-6.45 4.029-6.45 9 0 4.97 2.882 9 6.45 9 2.457 0 4.382-2.128 5.795-4.832 1.412 2.704 3.338 4.832 5.795 4.832 3.568 0 6.45-4.03 6.45-9 0-4.971-2.882-9-6.45-9-2.317 0-4.155 1.901-5.551 4.547zm0 6.906c-1.226 2.327-2.613 3.547-3.999 3.547-2.071 0-3.75-2.8-3.75-6.25s1.679-6.25 3.75-6.25c1.386 0 2.773 1.22 3.999 3.547.014.026.027.053.04.079l.08.156-.12.247zm3.999 3.547c-1.386 0-2.773-1.22-3.999-3.547l-.12-.247.08-.156c.013-.026.026-.053.04-.079 1.226-2.327 2.613-3.547 3.999-3.547 2.071 0 3.75 2.8 3.75 6.25s-1.679 6.25-3.75 6.25z"/></svg>
                    <span>Meta Official Partner</span>
                  </div>
                </div>
              </div>

              <!-- Column 2: Marketing -->
              <div class="prodocu-col">
                <div class="prodocu-section-title">Marketing</div>

                <!-- WhatsApp Group -->
                <div class="prodocu-items-list prodocu-group-wa">
                  <a href="<?php echo $bp; ?>products/broadcast/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8a6 6 0 0 1 0 12"/><path d="M11.56 4.69A2 2 0 0 0 8 6.13v11.74a2 2 0 0 0 3.56 1.44l5.38-4.31H19a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-2.06l-5.38-4.31z"/><path d="M6 15v3a2 2 0 0 0 2 2h1"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Broadcast</span>
                      <span class="prodocu-item-desc">Send bulk messages</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/ctwa/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/><circle cx="9" cy="12" r="1"/><circle cx="12" cy="12" r="1"/><circle cx="15" cy="12" r="1"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">CTWA</span>
                      <span class="prodocu-item-desc">Click to WhatsApp ads</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/automation/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Drip Campaign</span>
                      <span class="prodocu-item-desc">Automated sequences</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/catalog/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Catalog</span>
                      <span class="prodocu-item-desc">Showcase products</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/whatsapp-form/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="6" x2="20" y2="6"/><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="18" x2="20" y2="18"/><circle cx="8" cy="6" r="2" fill="#fff"/><circle cx="16" cy="12" r="2" fill="#fff"/><circle cx="8" cy="18" r="2" fill="#fff"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">WhatsApp Form/Flow</span>
                      <span class="prodocu-item-desc">Interactive forms</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/whatsapp-blue-tick/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.6 2.7 3.7.4 1 3.6 2.8 2.5-1.6 3.4.5 3.7-3.5 1.2-2 3.1-3.5-.9-3.5.9-2-3.1-3.5-1.2.5-3.7-1.6-3.4 2.8-2.5 1-3.6 3.7-.4L12 2z"/><polyline points="9 12 11 14 15 10"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Blue Tick</span>
                      <span class="prodocu-item-desc">Verified business badge</span>
                    </div>
                  </a>
                </div>

                <!-- Instagram Group -->
                <div class="prodocu-items-list prodocu-group-ig" style="display:none;">
                  <a href="<?php echo $bp; ?>channel/instagram/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8a6 6 0 0 1 0 12"/><path d="M11.56 4.69A2 2 0 0 0 8 6.13v11.74a2 2 0 0 0 3.56 1.44l5.38-4.31H19a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-2.06l-5.38-4.31z"/><path d="M6 15v3a2 2 0 0 0 2 2h1"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Broadcast</span>
                      <span class="prodocu-item-desc">Direct messaging to followers</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>channel/instagram/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><line x1="8" y1="9" x2="16" y2="9"/><line x1="8" y1="13" x2="13" y2="13"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Comment to DM</span>
                      <span class="prodocu-item-desc">Automate comment replies</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>channel/instagram/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Story Mention</span>
                      <span class="prodocu-item-desc">Reply to story mentions</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>channel/instagram/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.4 6.9 6.9 2.4-6.9 2.4L12 20.6l-2.4-6.9-6.9-2.4 6.9-2.4L12 2z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Instagram Ads</span>
                      <span class="prodocu-item-desc">Click-to-Instagram Direct</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/flow-builder/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="6" x2="20" y2="6"/><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="18" x2="20" y2="18"/><circle cx="8" cy="6" r="2" fill="#fff"/><circle cx="16" cy="12" r="2" fill="#fff"/><circle cx="8" cy="18" r="2" fill="#fff"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">DM Flows</span>
                      <span class="prodocu-item-desc">Guided conversational flows</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>channel/instagram/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.6 2.7 3.7.4 1 3.6 2.8 2.5-1.6 3.4.5 3.7-3.5 1.2-2 3.1-3.5-.9-3.5.9-2-3.1-3.5-1.2.5-3.7-1.6-3.4 2.8-2.5 1-3.6 3.7-.4L12 2z"/><polyline points="9 12 11 14 15 10"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Blue Badge</span>
                      <span class="prodocu-item-desc">Verified Instagram profile</span>
                    </div>
                  </a>
                </div>

                <!-- Telegram Group -->
                <div class="prodocu-items-list prodocu-group-tg" style="display:none;">
                  <a href="<?php echo $bp; ?>channel/telegram/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Channel Broadcast</span>
                      <span class="prodocu-item-desc">Unlimited subscriber blasts</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/telegram-automation/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Group Automation</span>
                      <span class="prodocu-item-desc">Welcome &amp; rule enforcement</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>channel/telegram/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Interactive Polls</span>
                      <span class="prodocu-item-desc">Engage community members</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/broadcast/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Rich Media Blasts</span>
                      <span class="prodocu-item-desc">Videos, files &amp; documents</span>
                    </div>
                  </a>
                </div>

                <!-- Facebook Group -->
                <div class="prodocu-items-list prodocu-group-fb" style="display:none;">
                  <a href="<?php echo $bp; ?>channel/facebook/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Click-to-Messenger</span>
                      <span class="prodocu-item-desc">Ads that start conversations</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>channel/facebook/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Sponsored Messages</span>
                      <span class="prodocu-item-desc">Re-engage previous leads</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/facebook-automation/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Post Auto-Replies</span>
                      <span class="prodocu-item-desc">Turn comments into buyers</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>channel/facebook/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="6" x2="20" y2="6"/><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="18" x2="20" y2="18"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Lead Ads Sync</span>
                      <span class="prodocu-item-desc">Instant CRM lead capture</span>
                    </div>
                  </a>
                </div>

              </div>

              <!-- Column 3: Sales -->
              <div class="prodocu-col">
                <div class="prodocu-section-title">Sales</div>

                <!-- WhatsApp Group -->
                <div class="prodocu-items-list prodocu-group-wa">
                  <a href="<?php echo $bp; ?>products/chatbot/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4"/><line x1="8" y1="16" x2="8.01" y2="16"/><line x1="16" y1="16" x2="16.01" y2="16"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">AI Chatbot</span>
                      <span class="prodocu-item-desc">Automate conversations</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/whatsapp-payments/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">WhatsApp Payment</span>
                      <span class="prodocu-item-desc">Instant in-chat checkout</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/catalog/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Catalog</span>
                      <span class="prodocu-item-desc">Display products</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/whatsapp-interactive-messages/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Interactive Message</span>
                      <span class="prodocu-item-desc">Buttons &amp; list pickers</span>
                    </div>
                  </a>
                </div>

                <!-- Instagram Group -->
                <div class="prodocu-items-list prodocu-group-ig" style="display:none;">
                  <a href="<?php echo $bp; ?>products/chatbot/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4"/><line x1="8" y1="16" x2="8.01" y2="16"/><line x1="16" y1="16" x2="16.01" y2="16"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">AI Chatbot</span>
                      <span class="prodocu-item-desc">Automate sales conversations</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/catalog/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">DM Catalog</span>
                      <span class="prodocu-item-desc">Showcase products in DM</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/whatsapp-payments/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Payments</span>
                      <span class="prodocu-item-desc">Collect orders &amp; payments</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>channel/instagram/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Story Leads</span>
                      <span class="prodocu-item-desc">Convert stories to sales</span>
                    </div>
                  </a>
                </div>

                <!-- Telegram Group -->
                <div class="prodocu-items-list prodocu-group-tg" style="display:none;">
                  <a href="<?php echo $bp; ?>channel/telegram/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Telegram Bot Shop</span>
                      <span class="prodocu-item-desc">Digital storefront inside bot</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/whatsapp-payments/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">In-Bot Payments</span>
                      <span class="prodocu-item-desc">Instant order checkout</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/whatsapp-interactive-messages/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="10" rx="2"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Inline Menus</span>
                      <span class="prodocu-item-desc">One-tap order buttons</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>channel/telegram/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Lead Nurturing</span>
                      <span class="prodocu-item-desc">Convert subscribers to deals</span>
                    </div>
                  </a>
                </div>

                <!-- Facebook Group -->
                <div class="prodocu-items-list prodocu-group-fb" style="display:none;">
                  <a href="<?php echo $bp; ?>channel/facebook/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Messenger Sales Bot</span>
                      <span class="prodocu-item-desc">Automate buyers on Page</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/catalog/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Facebook Shop Sync</span>
                      <span class="prodocu-item-desc">Share products directly</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/whatsapp-payments/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">In-Chat Payments</span>
                      <span class="prodocu-item-desc">Collect payments via chat</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>channel/facebook/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Order Updates</span>
                      <span class="prodocu-item-desc">Real-time delivery alerts</span>
                    </div>
                  </a>
                </div>

              </div>

              <!-- Column 4: Support -->
              <div class="prodocu-col">
                <div class="prodocu-section-title">Support</div>

                <!-- WhatsApp Group -->
                <div class="prodocu-items-list prodocu-group-wa">
                  <a href="<?php echo $bp; ?>products/shared-inbox/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><line x1="8" y1="9" x2="16" y2="9"/><line x1="8" y1="13" x2="13" y2="13"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Team Inbox</span>
                      <span class="prodocu-item-desc">Unified conversations</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/ai-agent/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.4 6.9 6.9 2.4-6.9 2.4L12 20.6l-2.4-6.9-6.9-2.4 6.9-2.4L12 2z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">AI Assistant</span>
                      <span class="prodocu-item-desc">Smart responses</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>solutions/feedback-surveys/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/><line x1="9" y1="11" x2="15" y2="11"/><line x1="9" y1="15" x2="13" y2="15"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Feedback Collection</span>
                      <span class="prodocu-item-desc">Gather insights</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/analytics/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Analytics Dashboard</span>
                      <span class="prodocu-item-desc">Track performance</span>
                    </div>
                  </a>
                </div>

                <!-- Instagram Group -->
                <div class="prodocu-items-list prodocu-group-ig" style="display:none;">
                  <a href="<?php echo $bp; ?>products/shared-inbox/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><line x1="8" y1="9" x2="16" y2="9"/><line x1="8" y1="13" x2="13" y2="13"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Team Inbox</span>
                      <span class="prodocu-item-desc">Unified Instagram DMs</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/ai-agent/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.4 6.9 6.9 2.4-6.9 2.4L12 20.6l-2.4-6.9-6.9-2.4 6.9-2.4L12 2z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">AI Assistant</span>
                      <span class="prodocu-item-desc">Instant smart replies</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>solutions/feedback-surveys/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/><line x1="9" y1="11" x2="15" y2="11"/><line x1="9" y1="15" x2="13" y2="15"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Feedback Collection</span>
                      <span class="prodocu-item-desc">Gather DM reviews</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/analytics/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Analytics Dashboard</span>
                      <span class="prodocu-item-desc">DM engagement metrics</span>
                    </div>
                  </a>
                </div>

                <!-- Telegram Group -->
                <div class="prodocu-items-list prodocu-group-tg" style="display:none;">
                  <a href="<?php echo $bp; ?>channel/telegram/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Community Support</span>
                      <span class="prodocu-item-desc">Manage customer inquiries</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/ai-agent/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.4 6.9 6.9 2.4-6.9 2.4L12 20.6l-2.4-6.9-6.9-2.4 6.9-2.4L12 2z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">24/7 AI Auto-Replies</span>
                      <span class="prodocu-item-desc">Instant bot answers in groups</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/shared-inbox/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="9" x2="16" y2="9"/><line x1="8" y1="13" x2="13" y2="13"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Group Moderation</span>
                      <span class="prodocu-item-desc">Filter spam &amp; auto-ban</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/analytics/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Channel Analytics</span>
                      <span class="prodocu-item-desc">Member growth &amp; activity</span>
                    </div>
                  </a>
                </div>

                <!-- Facebook Group -->
                <div class="prodocu-items-list prodocu-group-fb" style="display:none;">
                  <a href="<?php echo $bp; ?>products/shared-inbox/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><line x1="8" y1="9" x2="16" y2="9"/><line x1="8" y1="13" x2="13" y2="13"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Page Inbox</span>
                      <span class="prodocu-item-desc">Unified Facebook Messenger</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/ai-agent/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.4 6.9 6.9 2.4-6.9 2.4L12 20.6l-2.4-6.9-6.9-2.4 6.9-2.4L12 2z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Smart FAQ Bot</span>
                      <span class="prodocu-item-desc">24/7 automated page answers</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>solutions/feedback-surveys/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Review Handling</span>
                      <span class="prodocu-item-desc">Collect &amp; respond to reviews</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/analytics/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Performance Insights</span>
                      <span class="prodocu-item-desc">Resolution time &amp; CSAT</span>
                    </div>
                  </a>
                </div>

              </div>

              <!-- Column 5: Integrate With Card -->
              <div class="prodocu-col-integrate">
                <div class="prodocu-integrate-card">
                  <div class="prodocu-integrate-title">Integrate With</div>
                  <div class="prodocu-integrate-grid">
                    <a href="<?php echo $bp; ?>integrations/crm/" class="prodocu-int-tile" title="Zoho">
                      <img src="<?php echo $bp; ?>assets/images/integrations/zoho.png" alt="Zoho" width="38" height="20">
                    </a>
                    <a href="<?php echo $bp; ?>integrations/google-sheets/" class="prodocu-int-tile" title="Google Sheets">
                      <img src="<?php echo $bp; ?>assets/images/integrations/google-sheet.png" alt="Google Sheets" width="28" height="32">
                    </a>
                    <a href="<?php echo $bp; ?>integrations/shopify/" class="prodocu-int-tile" title="Shopify">
                      <img src="<?php echo $bp; ?>assets/images/integrations/shopify.png" alt="Shopify" width="32" height="32">
                    </a>
                    <a href="<?php echo $bp; ?>integrations/woocommerce/" class="prodocu-int-tile" title="WooCommerce">
                      <img src="<?php echo $bp; ?>assets/images/integrations/woocommerce.png" alt="WooCommerce" width="38" height="24">
                    </a>
                    <a href="<?php echo $bp; ?>integrations/" class="prodocu-int-tile" title="Wortal">
                      <img src="<?php echo $bp; ?>assets/images/integrations/wortal.png" alt="Wortal" width="32" height="32">
                    </a>
                    <a href="<?php echo $bp; ?>integrations/" class="prodocu-int-tile" title="GoTab">
                      <img src="<?php echo $bp; ?>assets/images/integrations/gotab.png" alt="GoTab" width="38" height="20">
                    </a>
                    <a href="<?php echo $bp; ?>integrations/" class="prodocu-int-tile" title="Shiprocket">
                      <img src="<?php echo $bp; ?>assets/images/integrations/shiprocket.png" alt="Shiprocket" width="30" height="30">
                    </a>
                    <div class="prodocu-int-arrow-tile">
                      <a href="<?php echo $bp; ?>integrations/" class="prodocu-int-arrow" title="View All Integrations">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                      </a>
                    </div>
                    <div class="prodocu-int-spacer"></div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <script>
            (function() {
              function setupProdocuMega() {
                var buttons = document.querySelectorAll(".prodocu-channel-btn");
                var waGroups = document.querySelectorAll(".prodocu-group-wa");
                var igGroups = document.querySelectorAll(".prodocu-group-ig");
                var tgGroups = document.querySelectorAll(".prodocu-group-tg");
                var fbGroups = document.querySelectorAll(".prodocu-group-fb");
                if (!buttons.length) return;

                function switchChannel(channel) {
                  buttons.forEach(function(btn) {
                    if (btn.getAttribute("data-channel") === channel) {
                      btn.classList.add("active");
                    } else {
                      btn.classList.remove("active");
                    }
                  });

                  // Hide all groups first
                  waGroups.forEach(function(el) { el.style.display = "none"; });
                  igGroups.forEach(function(el) { el.style.display = "none"; });
                  tgGroups.forEach(function(el) { el.style.display = "none"; });
                  fbGroups.forEach(function(el) { el.style.display = "none"; });

                  // Show active group
                  if (channel === "instagram") {
                    igGroups.forEach(function(el) { el.style.display = "flex"; });
                  } else if (channel === "telegram") {
                    tgGroups.forEach(function(el) { el.style.display = "flex"; });
                  } else if (channel === "facebook") {
                    fbGroups.forEach(function(el) { el.style.display = "flex"; });
                  } else {
                    waGroups.forEach(function(el) { el.style.display = "flex"; });
                  }
                }

                buttons.forEach(function(btn) {
                  btn.addEventListener("mouseenter", function() {
                    switchChannel(this.getAttribute("data-channel"));
                  });
                  btn.addEventListener("click", function(e) {
                    e.preventDefault();
                    switchChannel(this.getAttribute("data-channel"));
                  });
                });
              }
              if (document.readyState === "loading") {
                document.addEventListener("DOMContentLoaded", setupProdocuMega);
              } else {
                setupProdocuMega();
              }
            })();
          </script>
        </div>

        <div class="nav-item nav-item-solutions" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Solutions <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-solutions" role="menu">
            <div class="mega-solutions-wrap">
              <!-- Left: Integrations (2 columns x 4 rows = 8 items) -->
              <div class="mega-sol-integrations">
                <div class="mega-sol-heading">Integrations</div>
                <div class="mega-integrations-grid">
                  <!-- Col 1 -->
                  <div class="mega-ind-col">
                    <a href="<?php echo $bp; ?>solutions/shopify/" class="mega-ind-link mega-integ-link" role="menuitem">
                      <span class="mega-ind-icon mega-icon-shopify"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 01-8 0"/></svg></span>
                      <span class="mega-ind-title">Shopify</span>
                    </a>
                    <a href="<?php echo $bp; ?>solutions/woocommerce/" class="mega-ind-link mega-integ-link" role="menuitem">
                      <span class="mega-ind-icon mega-icon-woo"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></span>
                      <span class="mega-ind-title">WooCommerce</span>
                    </a>
                    <a href="<?php echo $bp; ?>solutions/google-forms-sheets/" class="mega-ind-link mega-integ-link" role="menuitem">
                      <span class="mega-ind-icon mega-icon-sheets"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M8 13h8M8 17h8M8 9h2"/></svg></span>
                      <span class="mega-ind-title">Google Sheet</span>
                    </a>
                    <a href="<?php echo $bp; ?>solutions/google-calendar-meet/" class="mega-ind-link mega-integ-link" role="menuitem">
                      <span class="mega-ind-icon mega-icon-cal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/><path d="M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01"/></svg></span>
                      <span class="mega-ind-title">Google Calendar</span>
                    </a>
                  </div>

                  <!-- Col 2 -->
                  <div class="mega-ind-col">
                    <a href="<?php echo $bp; ?>facebook-ads/" class="mega-ind-link mega-integ-link" role="menuitem">
                      <span class="mega-ind-icon mega-icon-fb"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></span>
                      <span class="mega-ind-title">Facebook Ads</span>
                    </a>
                    <a href="<?php echo $bp; ?>integrations/crm/" class="mega-ind-link mega-integ-link" role="menuitem">
                      <span class="mega-ind-icon mega-icon-crm"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></span>
                      <span class="mega-ind-title">CRM Integration</span>
                    </a>
                    <a href="<?php echo $bp; ?>integrations/api-webhooks/" class="mega-ind-link mega-integ-link" role="menuitem">
                      <span class="mega-ind-icon mega-icon-api"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71"/></svg></span>
                      <span class="mega-ind-title">Webhooks &amp; API</span>
                    </a>
                    <a href="<?php echo $bp; ?>integrations/custom/" class="mega-ind-link mega-integ-link" role="menuitem">
                      <span class="mega-ind-icon mega-icon-custom"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></span>
                      <span class="mega-ind-title">Custom Integration</span>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Middle: By Industry (3 columns x 4 rows) -->
              <div class="mega-sol-main">
                <div class="mega-sol-heading">By Industry</div>
                <div class="mega-industry-grid">
                  <!-- Column 1 -->
                  <div class="mega-ind-col">
                    <a href="<?php echo $bp; ?>industry/bfsi/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M5 10v11M19 10v11M9 10v11M15 10v11M12 3L2 10h20L12 3z"/></svg></span>
                      <span class="mega-ind-title">Banking &amp; Finance</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/healthcare/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg></span>
                      <span class="mega-ind-title">Health &amp; Wellness</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/retail-and-ecommerce/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></span>
                      <span class="mega-ind-title">Retail &amp; E-commerce</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/travel-and-hospitality/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/><line x1="2" y1="12" x2="22" y2="12"/></svg></span>
                      <span class="mega-ind-title">Travel &amp; Hospitality</span>
                    </a>
                  </div>

                  <!-- Column 2 -->
                  <div class="mega-ind-col">
                    <a href="<?php echo $bp; ?>industry/education-and-social-impacts/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></span>
                      <span class="mega-ind-title">Education &amp; Social Impacts</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/communication-and-it/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></span>
                      <span class="mega-ind-title">Communication &amp; IT</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/food-and-beverages/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg></span>
                      <span class="mega-ind-title">Food &amp; Beverage</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/advertising-and-events/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"/></svg></span>
                      <span class="mega-ind-title">Advertising &amp; Events</span>
                    </a>
                  </div>

                  <!-- Column 3 -->
                  <div class="mega-ind-col">
                    <a href="<?php echo $bp; ?>industry/construction-and-real-estate/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></span>
                      <span class="mega-ind-title">Construction &amp; Real Estate</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/automobiles-and-transport/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.5 2.8C2.1 11.2 2 11.6 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></svg></span>
                      <span class="mega-ind-title">Automobiles &amp; Transport</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/government-and-utilities/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 22h16M4 2h16M6 6h12M6 10h12M6 14h12M6 18h12"/></svg></span>
                      <span class="mega-ind-title">Government &amp; Utilities</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/manufacturing-and-supply/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/></svg></span>
                      <span class="mega-ind-title">Manufacturing &amp; Supply</span>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Right: Business Leads Directory Promo Card (Image 3) -->
              <div class="mega-sol-leads-aside">
                <span class="mega-leads-badge">12 CATEGORIES</span>
                <h3 class="mega-leads-title">Business Leads Directory</h3>
                <p class="mega-leads-desc">Explore all 12 category-wise verified business datasets &amp; WhatsApp workflows.</p>
                <a href="<?php echo $bp; ?>business-leads/" class="btn-mega-leads-primary">Browse All 12 Categories</a>
                <button type="button" class="btn-mega-leads-secondary btn-demo-open" onclick="if(window.openDemoModal) window.openDemoModal(); else window.location.href='/#contact-section';">+ Custom Data Request</button>
              </div>
            </div>
          </div>
        </div>
        <div class="nav-item"><a href="/pricing/" class="nav-link">Pricing</a></div>

        <div class="nav-item nav-item-secondary nav-item-sm" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Company <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-company" role="menu">
            <div class="mega-company-grid">
              <!-- Column 1: Company -->
              <div class="mega-company-col">
                <div class="mega-company-category-title">Company</div>
                <a href="<?php echo $bp; ?>company/about/" class="mega-company-link" role="menuitem">
                  <span class="mega-company-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></span>
                  <span class="mega-company-text"><span class="mega-company-title">About Us</span><span class="mega-company-desc">Mission, vision &amp; leadership</span></span>
                </a>
                <a href="<?php echo $bp; ?>company/careers/" class="mega-company-link" role="menuitem">
                  <span class="mega-company-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></span>
                  <span class="mega-company-text"><span class="mega-company-title">Careers <span class="mega-company-badge">Hiring</span></span><span class="mega-company-desc">Join our growing team</span></span>
                </a>
                <a href="<?php echo $bp; ?>contact/" class="mega-company-link" role="menuitem">
                  <span class="mega-company-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/></svg></span>
                  <span class="mega-company-text"><span class="mega-company-title">Contact Us</span><span class="mega-company-desc">Sales &amp; 24/7 support</span></span>
                </a>
              </div>

              <!-- Column 2: Partners (Moved into Company dropdown) -->
              <div class="mega-company-col">
                <div class="mega-company-category-title">Partners</div>
                <a href="<?php echo $bp; ?>partners/affiliate/" class="mega-company-link" role="menuitem">
                  <span class="mega-company-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></span>
                  <span class="mega-company-text"><span class="mega-company-title">Affiliate Partner</span><span class="mega-company-desc">Refer &amp; earn 20%</span></span>
                </a>
                <a href="<?php echo $bp; ?>partners/agency/" class="mega-company-link" role="menuitem">
                  <span class="mega-company-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></span>
                  <span class="mega-company-text"><span class="mega-company-title">Agency Partner</span><span class="mega-company-desc">Serve your clients</span></span>
                </a>
                <a href="<?php echo $bp; ?>partners/white-label/" class="mega-company-link" role="menuitem">
                  <span class="mega-company-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg></span>
                  <span class="mega-company-text"><span class="mega-company-title">White Label Partner</span><span class="mega-company-desc">Your brand, our platform</span></span>
                </a>
                <a href="<?php echo $bp; ?>partners/technology/" class="mega-company-link" role="menuitem">
                  <span class="mega-company-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg></span>
                  <span class="mega-company-text"><span class="mega-company-title">Technology Partner</span><span class="mega-company-desc">Build integrations</span></span>
                </a>
              </div>

              <!-- Column 3: Resources -->
              <div class="mega-company-col">
                <div class="mega-company-category-title">Resources</div>
                <a href="<?php echo $bp; ?>resources/blog/" class="mega-company-link" role="menuitem">
                  <span class="mega-company-icon mega-icon-indigo"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></span>
                  <span class="mega-company-text"><span class="mega-company-title">Blog &amp; Insights</span><span class="mega-company-desc">WhatsApp tips &amp; guides</span></span>
                </a>
                <a href="<?php echo $bp; ?>resources/case-studies/" class="mega-company-link" role="menuitem">
                  <span class="mega-company-icon mega-icon-amber"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.45 1-1 1H7c-.55 0-1-.45-1-1v-2.34"/><path d="M18 14.66V17c0 .55-.45 1-1 1h-2c-.55 0-1-.45-1-1v-2.34"/><path d="M12 2v12.66"/></svg></span>
                  <span class="mega-company-text"><span class="mega-company-title">Case Studies</span><span class="mega-company-desc">Customer success stories</span></span>
                </a>
                <a href="<?php echo $bp; ?>resources/help-center/" class="mega-company-link" role="menuitem">
                  <span class="mega-company-icon mega-icon-cyan"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3M12 17h.01"/></svg></span>
                  <span class="mega-company-text"><span class="mega-company-title">Help Center</span><span class="mega-company-desc">Docs, FAQs &amp; onboarding</span></span>
                </a>
              </div>

              <!-- Column 4: Trust & Legal -->
              <div class="mega-company-col">
                <div class="mega-company-category-title">Trust &amp; Legal</div>
                <a href="<?php echo $bp; ?>security/" class="mega-company-link" role="menuitem">
                  <span class="mega-company-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
                  <span class="mega-company-text"><span class="mega-company-title">Security &amp; ISO</span><span class="mega-company-desc">Enterprise data protection</span></span>
                </a>
                <a href="<?php echo $bp; ?>privacy/" class="mega-company-link" role="menuitem">
                  <span class="mega-company-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></span>
                  <span class="mega-company-text"><span class="mega-company-title">Privacy Policy</span><span class="mega-company-desc">GDPR &amp; privacy commitment</span></span>
                </a>
                <a href="<?php echo $bp; ?>terms/" class="mega-company-link" role="menuitem">
                  <span class="mega-company-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/></svg></span>
                  <span class="mega-company-text"><span class="mega-company-title">Terms of Service</span><span class="mega-company-desc">Platform usage terms</span></span>
                </a>
                <a href="<?php echo $bp; ?>cookie-policy/" class="mega-company-link" role="menuitem">
                  <span class="mega-company-icon mega-icon-orange"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm4 8a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/></svg></span>
                  <span class="mega-company-text"><span class="mega-company-title">Cookie Policy</span><span class="mega-company-desc">Tracking &amp; transparency</span></span>
                </a>
              </div>
            </div>
            <!-- Trust Footer Strip -->
            <div class="mega-company-footer">
              <div class="mega-company-footer-left">🛡️ Official Meta Cloud API Partner &bull; ISO 27001 Certified &bull; GDPR Compliant</div>
              <div style="display:flex;align-items:center;gap:10px;">
                <a href="/assets/downloads/hellobotz-partner-brochure.pdf" download="HelloBotz-Partner-Brochure.pdf" class="mega-company-brochure-link">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
                  Download Brochure
                </a>
                <a href="<?php echo $bp; ?>contact/">Talk to Sales &rarr;</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="header-actions">
        <div class="lang-switch" id="lang-switch">
          <button type="button" class="lang-switch-btn" id="lang-switch-btn" aria-haspopup="listbox" aria-expanded="false" title="Language">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg>
            <span id="lang-switch-label">EN</span>
          </button>
          <ul class="lang-switch-menu" id="lang-switch-menu" role="listbox" hidden>
            <li role="option" data-lang="en" class="active">English</li>
            <li role="option" data-lang="ar">العربية</li>
            <li role="option" data-lang="es">Español</li>
            <li role="option" data-lang="pt">Português</li>
            <li role="option" data-lang="de">Deutsch</li>
            <li role="option" data-lang="fr">Français</li>
          </ul>
        </div>
        <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn-header-data">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          <span>Download Data</span>
        </a>
        <a href="<?php echo $bp; ?>auth/login" class="header-login"><span>Login</span></a>
        <a href="<?php echo $bp; ?>auth/register" class="btn btn-primary btn-sm header-cta-start">Start Free</a>
        <button type="button" class="mobile-toggle" aria-label="Open menu" aria-expanded="false"><span></span><span></span><span></span></button>
      </div>
    </div>
  </header>

  <div class="mobile-menu" id="mobile-menu" role="dialog" aria-label="Mobile navigation" hidden aria-hidden="true">
    <div class="mobile-backdrop"></div>
    <div class="mobile-drawer">
      <div class="mobile-drawer-header">
        <a href="<?php echo $bp; ?>" class="logo" aria-label="<?php echo htmlspecialchars($SITE_NAME); ?> Home">
          <img src="<?php echo $bp; ?>assets/images/logo.png" alt="<?php echo htmlspecialchars($SITE_NAME); ?>" class="logo-img" width="135" height="34">
        </a>
        <button type="button" class="mobile-close btn btn-icon btn-ghost" aria-label="Close menu"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg></button>
      </div>
      <div class="mobile-drawer-body">
        <!-- PRODUCTS ACCORDION (Matching getgabs / media_1789588745503.png) -->
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Products <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu">
            <div class="prodocu-mob-container">
              
              <!-- Channels Section -->
              <div class="prodocu-mob-section-title">CHANNELS</div>

              <!-- Channel 1: WhatsApp -->
              <button type="button" class="prodocu-mob-channel-btn" data-mob-chan="whatsapp">
                <span class="mob-chan-left">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="#25d366"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                  <span>WhatsApp</span>
                </span>
                <svg class="mob-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polyline points="9 18 15 12 9 6"/></svg>
              </button>
              <div class="prodocu-mob-channel-panel" id="prodocu-mob-wa">
                <div class="prodocu-mob-group-title">Marketing</div>
                <a href="<?php echo $bp; ?>products/broadcast/" class="prodocu-mob-link"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M18 8a6 6 0 0 1 0 12"/><path d="M11.56 4.69A2 2 0 0 0 8 6.13v11.74a2 2 0 0 0 3.56 1.44l5.38-4.31H19a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-2.06l-5.38-4.31z"/></svg> Broadcast</a>
                <a href="<?php echo $bp; ?>products/ctwa/" class="prodocu-mob-link"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="12" r="1"/><circle cx="12" cy="12" r="1"/><circle cx="15" cy="12" r="1"/><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg> CTWA</a>
                <a href="<?php echo $bp; ?>products/automation/" class="prodocu-mob-link"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/></svg> Drip Campaign</a>
                <a href="<?php echo $bp; ?>products/catalog/" class="prodocu-mob-link"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg> Catalog</a>
                <a href="<?php echo $bp; ?>products/whatsapp-form/" class="prodocu-mob-link"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="8" cy="6" r="2"/><circle cx="16" cy="12" r="2"/><circle cx="8" cy="18" r="2"/></svg> WhatsApp Form/Flow</a>
                <a href="<?php echo $bp; ?>products/whatsapp-blue-tick/" class="prodocu-mob-link"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2l2.6 2.7 3.7.4 1 3.6 2.8 2.5-1.6 3.4.5 3.7-3.5 1.2-2 3.1-3.5-.9-3.5.9-2-3.1-3.5-1.2.5-3.7-1.6-3.4 2.8-2.5 1-3.6 3.7-.4L12 2z"/><polyline points="9 12 11 14 15 10"/></svg> Blue Tick</a>

                <div class="prodocu-mob-group-title" style="margin-top:8px;">Sales</div>
                <a href="<?php echo $bp; ?>products/chatbot/" class="prodocu-mob-link"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="11" width="18" height="10" rx="2"/></svg> AI Chatbot</a>
                <a href="<?php echo $bp; ?>products/whatsapp-payments/" class="prodocu-mob-link"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg> WhatsApp Payment</a>
                <a href="<?php echo $bp; ?>products/catalog/" class="prodocu-mob-link"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg> Catalog</a>
                <a href="<?php echo $bp; ?>products/whatsapp-interactive-messages/" class="prodocu-mob-link"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/></svg> Interactive Message</a>

                <div class="prodocu-mob-group-title" style="margin-top:8px;">Support</div>
                <a href="<?php echo $bp; ?>products/shared-inbox/" class="prodocu-mob-link"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg> Team Inbox</a>
                <a href="<?php echo $bp; ?>products/ai-agent/" class="prodocu-mob-link"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2l2.4 6.9 6.9 2.4-6.9 2.4L12 20.6l-2.4-6.9-6.9-2.4 6.9-2.4L12 2z"/></svg> AI Assistant</a>
                <a href="<?php echo $bp; ?>solutions/feedback-surveys/" class="prodocu-mob-link"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/></svg> Feedback Collection</a>
                <a href="<?php echo $bp; ?>products/analytics/" class="prodocu-mob-link"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/></svg> Analytics Dashboard</a>
              </div>

              <!-- Channel 2: Instagram -->
              <button type="button" class="prodocu-mob-channel-btn" data-mob-chan="instagram">
                <span class="mob-chan-left">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="#e1306c"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                  <span>Instagram</span>
                </span>
                <svg class="mob-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polyline points="9 18 15 12 9 6"/></svg>
              </button>
              <div class="prodocu-mob-channel-panel" id="prodocu-mob-ig">
                <div class="prodocu-mob-group-title">Features</div>
                <a href="<?php echo $bp; ?>channel/instagram/" class="prodocu-mob-link">Story Mention Ads</a>
                <a href="<?php echo $bp; ?>channel/instagram/" class="prodocu-mob-link">Comment to DM</a>
                <a href="<?php echo $bp; ?>products/chatbot/" class="prodocu-mob-link">AI Chatbot for DMs</a>
                <a href="<?php echo $bp; ?>products/shared-inbox/" class="prodocu-mob-link">Unified Team Inbox</a>
                <a href="<?php echo $bp; ?>products/analytics/" class="prodocu-mob-link">DM Engagement Analytics</a>
              </div>

              <!-- Channel 3: Telegram -->
              <button type="button" class="prodocu-mob-channel-btn" data-mob-chan="telegram">
                <span class="mob-chan-left">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="#0088cc"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.121l-6.871 4.326-2.962-.924c-.643-.204-.657-.643.136-.953l11.57-4.461c.537-.196 1.006.128.832.942z"/></svg>
                  <span>Telegram</span>
                </span>
                <svg class="mob-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polyline points="9 18 15 12 9 6"/></svg>
              </button>
              <div class="prodocu-mob-channel-panel" id="prodocu-mob-tg">
                <div class="prodocu-mob-group-title">Features</div>
                <a href="<?php echo $bp; ?>channel/telegram/" class="prodocu-mob-link">Channel Broadcasts</a>
                <a href="<?php echo $bp; ?>products/telegram-automation/" class="prodocu-mob-link">Group Automation</a>
                <a href="<?php echo $bp; ?>channel/telegram/" class="prodocu-mob-link">Telegram Bot Shop</a>
                <a href="<?php echo $bp; ?>products/shared-inbox/" class="prodocu-mob-link">Community Support Inbox</a>
                <a href="<?php echo $bp; ?>products/analytics/" class="prodocu-mob-link">Channel Analytics</a>
              </div>

              <!-- Channel 4: Facebook -->
              <button type="button" class="prodocu-mob-channel-btn" data-mob-chan="facebook">
                <span class="mob-chan-left">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="#1877f2"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                  <span>Facebook</span>
                </span>
                <svg class="mob-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polyline points="9 18 15 12 9 6"/></svg>
              </button>
              <div class="prodocu-mob-channel-panel" id="prodocu-mob-fb">
                <div class="prodocu-mob-group-title">Features</div>
                <a href="<?php echo $bp; ?>channel/facebook/" class="prodocu-mob-link">Click-to-Messenger Ads</a>
                <a href="<?php echo $bp; ?>products/facebook-automation/" class="prodocu-mob-link">Post Auto-Replies</a>
                <a href="<?php echo $bp; ?>channel/facebook/" class="prodocu-mob-link">Messenger Sales Bot</a>
                <a href="<?php echo $bp; ?>products/shared-inbox/" class="prodocu-mob-link">Facebook Page Inbox</a>
                <a href="<?php echo $bp; ?>products/analytics/" class="prodocu-mob-link">Page Performance Insights</a>
              </div>

              <!-- Divider -->
              <hr class="prodocu-mob-divider">

              <!-- Integrate With Section (Matching media_1789588745503.png) -->
              <div class="prodocu-mob-section-title">INTEGRATE WITH</div>
              <div class="prodocu-mob-integrate-grid">
                <a href="<?php echo $bp; ?>integrations/crm/" class="prodocu-mob-int-tile" title="Zoho">
                  <img src="<?php echo $bp; ?>assets/images/integrations/zoho.png" alt="Zoho">
                </a>
                <a href="<?php echo $bp; ?>integrations/google-sheets/" class="prodocu-mob-int-tile" title="Google Sheets">
                  <img src="<?php echo $bp; ?>assets/images/integrations/google-sheet.png" alt="Google Sheets">
                </a>
                <a href="<?php echo $bp; ?>integrations/shopify/" class="prodocu-mob-int-tile" title="Shopify">
                  <img src="<?php echo $bp; ?>assets/images/integrations/shopify.png" alt="Shopify">
                </a>
                <a href="<?php echo $bp; ?>integrations/woocommerce/" class="prodocu-mob-int-tile" title="WooCommerce">
                  <img src="<?php echo $bp; ?>assets/images/integrations/woocommerce.png" alt="WooCommerce">
                </a>
                <a href="<?php echo $bp; ?>integrations/" class="prodocu-mob-int-tile" title="Wortal">
                  <img src="<?php echo $bp; ?>assets/images/integrations/wortal.png" alt="Wortal">
                </a>
                <a href="<?php echo $bp; ?>integrations/" class="prodocu-mob-int-tile" title="GoTab">
                  <img src="<?php echo $bp; ?>assets/images/integrations/gotab.png" alt="GoTab">
                </a>
                <a href="<?php echo $bp; ?>integrations/" class="prodocu-mob-int-tile" title="Shiprocket">
                  <img src="<?php echo $bp; ?>assets/images/integrations/shiprocket.png" alt="Shiprocket">
                </a>
                <a href="<?php echo $bp; ?>integrations/" class="prodocu-mob-int-tile tile-arrow" title="View All Integrations">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
              </div>

            </div>
          </div>
        </div>
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Solutions <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <div style="font-size:11px;font-weight:700;letter-spacing:.05em;color:var(--p2);text-transform:uppercase;padding:4px 0 2px;border-bottom:1px solid #f1f5f9;">By Industry</div>
            <a href="<?php echo $bp; ?>industry/ecommerce-and-retail/">Ecommerce &amp; Retail</a>
            <a href="<?php echo $bp; ?>industry/education-and-social-impacts/">Education &amp; Social Impacts</a>
            <a href="<?php echo $bp; ?>industry/communication-and-it/">Communication &amp; IT</a>
            <a href="<?php echo $bp; ?>industry/food-and-beverages/">Food &amp; Beverage</a>
            <a href="<?php echo $bp; ?>industry/advertising-and-events/">Advertising &amp; Events</a>
            <a href="<?php echo $bp; ?>industry/construction-and-real-estate/">Construction &amp; Real Estate</a>
            <a href="<?php echo $bp; ?>industry/automobiles-and-transport/">Automobiles &amp; Transport</a>
            <a href="<?php echo $bp; ?>industry/government-and-utilities/">Government &amp; Utilities</a>
            <a href="<?php echo $bp; ?>industry/manufacturing-and-supply/">Manufacturing &amp; Supply</a>
            <div style="font-size:11px;font-weight:700;letter-spacing:.05em;color:var(--p2);text-transform:uppercase;padding:10px 0 2px;border-bottom:1px solid #f1f5f9;">Integrations</div>
            <a href="<?php echo $bp; ?>solutions/shopify/">Shopify</a>
            <a href="<?php echo $bp; ?>solutions/woocommerce/">WooCommerce</a>
            <a href="<?php echo $bp; ?>solutions/google-forms-sheets/">Google Sheet</a>
            <a href="<?php echo $bp; ?>solutions/google-calendar-meet/">Google Calendar</a>
            <a href="<?php echo $bp; ?>facebook-ads/">Facebook Ads</a>
            <a href="<?php echo $bp; ?>integrations/crm/">CRM Integration</a>
            <a href="<?php echo $bp; ?>integrations/api-webhooks/">Webhooks &amp; API</a>
            <a href="<?php echo $bp; ?>integrations/custom/">Custom Integration</a>
            <div style="font-size:11px;font-weight:700;letter-spacing:.05em;color:var(--p2);text-transform:uppercase;padding:10px 0 2px;border-bottom:1px solid #f1f5f9;">Business Leads</div>
            <a href="<?php echo $bp; ?>business-leads/" style="font-weight:700;color:#4f46e5;">Browse All 12 Leads Categories &rarr;</a>
            <a href="<?php echo $bp; ?>solutions/data-marketplace/#custom-request" style="color:var(--p2);font-weight:600;">+ Custom Data Request</a>
          </div></div>
        </div>
        <div class="mobile-nav-item"><a href="/pricing/" class="mobile-nav-link">Pricing</a></div>
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Company <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <div style="font-size:11px;font-weight:700;letter-spacing:.05em;color:var(--p2);text-transform:uppercase;padding:8px 0 2px;border-bottom:1px solid #f1f5f9;">Company</div>
            <a href="/company/about/">About Us</a>
            <a href="/company/careers/">Careers <span style="font-size:9px;background:#EEF2FF;color:#4F46E5;padding:1px 5px;border-radius:999px;font-weight:700;border:1px solid #C7D2FE;margin-left:4px;">Hiring</span></a>
            <a href="/contact/">Contact Us</a>

            <div style="font-size:11px;font-weight:700;letter-spacing:.05em;color:var(--p2);text-transform:uppercase;padding:10px 0 2px;border-bottom:1px solid #f1f5f9;">Partner Programs</div>
            <a href="/partners/affiliate/">Affiliate Partner <span style="font-size:11px;color:#64748B;display:block;">Refer &amp; earn 20%</span></a>
            <a href="/partners/agency/">Agency Partner <span style="font-size:11px;color:#64748B;display:block;">Serve your clients (40%)</span></a>
            <a href="/partners/white-label/">White Label Partner <span style="font-size:11px;color:#64748B;display:block;">Your brand, our platform (50%)</span></a>
            <a href="/partners/technology/">Technology Partner <span style="font-size:11px;color:#64748B;display:block;">Build integrations</span></a>
            <a href="/assets/downloads/hellobotz-partner-brochure.pdf" download="HelloBotz-Partner-Brochure.pdf" style="font-weight:700;color:#6D28D9;display:flex;align-items:center;gap:6px;padding:6px 0;">📄 Download Partner Brochure</a>

            <div style="font-size:11px;font-weight:700;letter-spacing:.05em;color:var(--p2);text-transform:uppercase;padding:10px 0 2px;border-bottom:1px solid #f1f5f9;">Resources</div>
            <a href="<?php echo $bp; ?>resources/blog/">Blog &amp; Insights</a>
            <a href="<?php echo $bp; ?>resources/case-studies/">Case Studies</a>
            <a href="<?php echo $bp; ?>resources/help-center/">Help Center</a>

            <div style="font-size:11px;font-weight:700;letter-spacing:.05em;color:var(--p2);text-transform:uppercase;padding:10px 0 2px;border-bottom:1px solid #f1f5f9;">Trust &amp; Legal</div>
            <a href="/security/">Security &amp; ISO</a>
            <a href="/privacy/">Privacy Policy</a>
            <a href="/terms/">Terms of Service</a>
            <a href="/cookie-policy/">Cookie Policy</a>
          </div></div>
        </div>
        <div class="mobile-lang-box">
          <div class="mobile-lang-title">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg>
            <span>Language / اللغة</span>
          </div>
          <div class="mobile-lang-grid">
            <button type="button" class="mobile-lang-btn active" data-lang="en">English</button>
            <button type="button" class="mobile-lang-btn" data-lang="ar">العربية</button>
            <button type="button" class="mobile-lang-btn" data-lang="es">Español</button>
            <button type="button" class="mobile-lang-btn" data-lang="pt">Português</button>
            <button type="button" class="mobile-lang-btn" data-lang="de">Deutsch</button>
            <button type="button" class="mobile-lang-btn" data-lang="fr">Français</button>
          </div>
        </div>
        <div class="mobile-nav-actions">
          <a href="<?php echo $bp; ?>auth/login" class="mnav-login">Login</a>
          <a href="<?php echo $bp; ?>auth/register" class="mnav-start">Start Free</a>
          <a href="/#contact-section" class="mnav-demo btn-demo-open">Book a Demo</a>
          <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="mnav-data">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            Download Data
          </a>
        </div>
      </div>
    </div>
  </div>
  <main id="main">
