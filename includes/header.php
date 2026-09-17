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
$ogImage         = isset($ogImage) && $ogImage !== '' ? trim((string)$ogImage) : $DEFAULT_OG;
if (!preg_match('~^https?://~i', $ogImage)) {
  $ogImage = $SITE_DOMAIN . '/' . ltrim($ogImage, '/');
}
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
  <meta property="og:image:secure_url" content="<?php echo hb_seo_esc($ogImage); ?>">
  <meta property="og:image:type" content="image/png">
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

    /* MASTER SITE-WIDE CENTERED CONTAINER (Matches Homepage 1240px Layout) */
    .container {
      width: 100% !important;
      max-width: 1240px !important;
      margin-left: auto !important;
      margin-right: auto !important;
      padding-left: 1.25rem !important;
      padding-right: 1.25rem !important;
      box-sizing: border-box !important;
    }
    @media (max-width: 1280px) {
      .container {
        max-width: 100% !important;
      }
    }
    @media (max-width: 768px) {
      .container {
        padding-left: 1rem !important;
        padding-right: 1rem !important;
      }
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
    .mega-menu-resources::before,
    .mega-menu-partners::before,
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
    .mega-menu-resources,
    .mega-menu-partners,
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
    .nav-item.open > .mega-menu-resources,
    .nav-item:hover > .mega-menu-resources,
    .nav-item:focus-within > .mega-menu-resources,
    .nav-item.open > .mega-menu-partners,
    .nav-item:hover > .mega-menu-partners,
    .nav-item:focus-within > .mega-menu-partners,
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

    /* PRODUCTS MEGA MENU: EXACT 1:1 CLONE OF GetGabs (media_1789591778093.png) */
    .mega-menu-products {
      width: 1040px !important;
      max-width: calc(100vw - 32px) !important;
      background: #ffffff !important;
      border: 1px solid #e5e7eb !important;
      border-radius: 16px !important;
      box-shadow: 0 15px 35px -5px rgba(0, 0, 0, 0.12), 0 0 0 1px rgba(0, 0, 0, 0.03) !important;
      padding: 20px 22px 22px 22px !important;
      box-sizing: border-box !important;
    }

    .prodocu-mega-layout {
      display: grid !important;
      grid-template-columns: 185px 1.15fr 1.05fr 1.05fr 200px !important;
      gap: 20px !important;
      align-items: stretch !important;
      width: 100% !important;
    }

    /* Column 1: Channels */
    .prodocu-col-channels {
      border-right: 1px solid #e5e7eb !important;
      display: flex !important;
      flex-direction: column !important;
      padding-right: 16px !important;
      height: 100% !important;
    }

    .prodocu-col-heading {
      font-size: 13.5px !important;
      font-weight: 600 !important;
      color: #111827 !important;
      margin-bottom: 12px !important;
      line-height: 1.2 !important;
    }

    .prodocu-channel-list {
      display: flex !important;
      flex-direction: column !important;
      gap: 4px !important;
    }

    .prodocu-channel-item {
      display: flex !important;
      align-items: center !important;
      gap: 10px !important;
      width: 100% !important;
      padding: 7px 10px !important;
      border-radius: 8px !important;
      font-size: 13.5px !important;
      font-weight: 500 !important;
      color: #4b5563 !important;
      text-decoration: none !important;
      transition: all 0.15s ease !important;
      text-align: left !important;
      box-sizing: border-box !important;
    }

    .prodocu-channel-item:hover {
      background-color: #f3f4f6 !important;
      color: #111827 !important;
    }

    .prodocu-channel-item.active {
      background-color: #f4f6f5 !important;
      color: #034737 !important;
      font-weight: 600 !important;
    }
    .prodocu-channel-item.active .prodocu-chan-icon {
      color: #034737 !important;
    }
    .prodocu-chan-icon {
      width: 17px !important;
      height: 17px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
      color: #4b5563 !important;
    }
    .prodocu-chan-icon svg {
      width: 16px !important;
      height: 16px !important;
      display: block !important;
    }

    .prodocu-partner-badge {
      margin-top: auto !important;
      padding-top: 14px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
    }
    .prodocu-partner-pill {
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      padding: 6px 12px !important;
      border: 1px solid #d1d5db !important;
      border-radius: 9999px !important;
      background: #ffffff !important;
      box-sizing: border-box !important;
      width: 100% !important;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03) !important;
      text-decoration: none !important;
      transition: border-color 0.2s, box-shadow 0.2s !important;
    }
    .prodocu-partner-pill:hover {
      border-color: #9ca3af !important;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.06) !important;
    }
    .prodocu-partner-pill img {
      height: 20px !important;
      width: auto !important;
      max-width: 100% !important;
      object-fit: contain !important;
      display: block !important;
    }

    /* Columns 2, 3, 4: Marketing, Sales, Support */
    .prodocu-col {
      display: flex !important;
      flex-direction: column !important;
    }

    .prodocu-section-title {
      font-size: 13.5px !important;
      font-weight: 500 !important;
      color: #1f2937 !important;
      padding-bottom: 6px !important;
      margin-bottom: 10px !important;
      border-bottom: 1px solid #e5e7eb !important;
      letter-spacing: -0.01em !important;
      line-height: 1.2 !important;
    }

    .prodocu-items-list {
      display: flex !important;
      flex-direction: column !important;
      gap: 6px !important;
    }

    .prodocu-item {
      display: flex !important;
      align-items: flex-start !important;
      gap: 10px !important;
      padding: 2px 0 !important;
      text-decoration: none !important;
      background: transparent !important;
      border: none !important;
    }

    .prodocu-item:hover {
      background: transparent !important;
    }

    .prodocu-item-icon {
      width: 18px !important;
      height: 18px !important;
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
      color: #034737 !important;
    }

    .prodocu-item-icon svg {
      width: 17px !important;
      height: 17px !important;
      flex-shrink: 0 !important;
    }

    .prodocu-item-content {
      display: flex !important;
      flex-direction: column !important;
      gap: 1px !important;
      min-width: 0 !important;
    }

    .prodocu-item-title {
      font-size: 13.5px !important;
      font-weight: 600 !important;
      color: #1f2937 !important;
      line-height: 1.25 !important;
      letter-spacing: -0.01em !important;
      transition: color 0.15s ease !important;
    }

    .prodocu-item:hover .prodocu-item-title {
      color: #034737 !important;
    }

    .prodocu-item-desc {
      font-size: 11.5px !important;
      font-weight: 400 !important;
      color: #6b7280 !important;
      line-height: 1.25 !important;
      margin: 0 !important;
      white-space: normal !important;
    }

    /* Column 5: Integrate With Card */
    .prodocu-col-integrate {
      display: flex !important;
      flex-direction: column !important;
    }

    .prodocu-integrate-card {
      background: #F9F9F9 !important;
      border: 1px solid #f0f0f0 !important;
      border-radius: 12px !important;
      padding: 14px 12px !important;
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
      justify-content: flex-start !important;
      height: 100% !important;
      box-sizing: border-box !important;
    }

    .prodocu-integrate-title {
      font-size: 13.5px !important;
      font-weight: 500 !important;
      color: #1f2937 !important;
      text-align: center !important;
      margin-bottom: 12px !important;
      width: 100% !important;
      line-height: 1.2 !important;
    }

    .prodocu-integrate-grid {
      display: grid !important;
      grid-template-columns: repeat(3, 46px) !important;
      gap: 8px !important;
      justify-content: center !important;
      align-items: center !important;
    }

    .prodocu-int-tile {
      width: 46px !important;
      height: 46px !important;
      background: #ffffff !important;
      border-radius: 8px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      padding: 6px !important;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.04) !important;
      transition: transform 0.15s ease, box-shadow 0.15s ease !important;
      text-decoration: none !important;
      box-sizing: border-box !important;
    }

    .prodocu-int-tile:hover {
      transform: translateY(-2px) !important;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.08) !important;
    }

    .prodocu-int-tile img {
      max-width: 100% !important;
      max-height: 24px !important;
      width: auto !important;
      height: auto !important;
      object-fit: contain !important;
      display: block !important;
    }

    .prodocu-int-arrow-tile {
      width: 46px !important;
      height: 46px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      background: transparent !important;
      box-shadow: none !important;
    }

    .prodocu-int-arrow {
      width: 32px !important;
      height: 32px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      text-decoration: none !important;
      transition: transform 0.15s ease !important;
    }

    .prodocu-int-arrow:hover {
      transform: scale(1.1) !important;
    }

    .prodocu-int-arrow svg {
      width: 30px !important;
      height: 30px !important;
      fill: #034737 !important;
    }

    /* MOBILE PRODUCTS ACCORDION */
    .prodocu-mob-container {
      padding: 12px 6px 18px !important;
      display: flex !important;
      flex-direction: column !important;
      gap: 12px !important;
    }
    .prodocu-mob-section-title {
      font-size: 12px !important;
      font-weight: 700 !important;
      color: #6b7280 !important;
      letter-spacing: 0.05em !important;
      text-transform: uppercase !important;
      margin-bottom: 6px !important;
      padding-left: 2px !important;
    }
    .prodocu-mob-chan-grid {
      display: grid !important;
      grid-template-columns: repeat(2, 1fr) !important;
      gap: 8px !important;
      margin-bottom: 8px !important;
    }
    .prodocu-mob-chan-card {
      display: flex !important;
      align-items: center !important;
      gap: 8px !important;
      padding: 9px 12px !important;
      background: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 10px !important;
      font-size: 13.5px !important;
      font-weight: 600 !important;
      color: #1e293b !important;
      text-decoration: none !important;
      transition: all 0.15s ease !important;
    }
    .prodocu-mob-chan-card:hover {
      background: #f1f5f9 !important;
      color: #034737 !important;
    }
    .prodocu-mob-chan-card .chan-icon-wrap {
      width: 18px !important;
      height: 18px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
    }
    .prodocu-mob-chan-card .chan-icon-wrap.chan-wa { color: #25d366 !important; }
    .prodocu-mob-chan-card .chan-icon-wrap.chan-ig { color: #e1306c !important; }
    .prodocu-mob-chan-card .chan-icon-wrap.chan-fb { color: #1877f2 !important; }
    .prodocu-mob-chan-card .chan-icon-wrap.chan-tg { color: #0088cc !important; }
    .prodocu-mob-partner-wrap {
      display: flex !important;
      justify-content: flex-start !important;
      margin-top: 4px !important;
      margin-bottom: 6px !important;
    }
    .prodocu-mob-items-col {
      display: flex !important;
      flex-direction: column !important;
      gap: 10px !important;
    }
    .prodocu-mob-item {
      display: flex !important;
      align-items: flex-start !important;
      gap: 10px !important;
      text-decoration: none !important;
      padding: 3px 0 !important;
    }
    .prodocu-mob-item:hover .prodocu-item-title {
      color: #034737 !important;
    }
    .prodocu-mob-divider {
      border: none !important;
      border-top: 1px solid #e5e7eb !important;
      margin: 10px 0 !important;
    }
    .prodocu-mob-integrate-grid {
      display: grid !important;
      grid-template-columns: repeat(4, 1fr) !important;
      gap: 10px !important;
      margin-top: 6px !important;
    }
    .prodocu-mob-int-tile {
      background: #f4f4f5 !important;
      border-radius: 12px !important;
      aspect-ratio: 1 / 1 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      padding: 6px !important;
      box-sizing: border-box !important;
      transition: transform 0.15s ease, box-shadow 0.15s ease !important;
      text-decoration: none !important;
    }
    .prodocu-mob-int-tile:hover {
      transform: translateY(-2px) !important;
    }
    .prodocu-mob-int-tile .int-inner-card {
      background: #ffffff !important;
      border-radius: 8px !important;
      width: 100% !important;
      height: 100% !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      box-shadow: 0 1px 2px rgba(0,0,0,0.04) !important;
      padding: 4px !important;
      box-sizing: border-box !important;
    }
    .prodocu-mob-int-tile .int-inner-card img {
      max-height: 22px !important;
      max-width: 80% !important;
      width: auto !important;
      height: auto !important;
      object-fit: contain !important;
      display: block !important;
    }
    .prodocu-mob-int-tile.tile-arrow {
      background: #034737 !important;
      color: #ffffff !important;
    }
    .prodocu-mob-int-tile.tile-arrow .arrow-circle {
      width: 32px !important;
      height: 32px !important;
      border-radius: 50% !important;
      background: #ffffff !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1) !important;
    }
    .prodocu-mob-int-tile.tile-arrow .arrow-circle svg {
      width: 16px !important;
      height: 16px !important;
      stroke: #034737 !important;
      stroke-width: 2.5 !important;
    }

    /* SOLUTIONS MEGA MENU: 12 Industries (3 cols x 4 rows) + Leads Directory Card */
    .mega-menu-solutions {
      width: min(940px, calc(100vw - 28px)) !important;
      max-width: calc(100vw - 28px) !important;
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
      grid-template-columns: 1fr 280px !important;
      align-items: stretch !important;
      min-height: 400px !important;
    }

    .mega-sol-main {
      padding: 28px 26px !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: center !important;
      background: #ffffff !important;
    }

    .mega-sol-heading {
      font-size: 1.12rem !important;
      font-weight: 800 !important;
      color: #3b4cb8 !important;
      margin-bottom: 18px !important;
      letter-spacing: -0.01em !important;
    }

    .mega-industry-grid {
      display: grid !important;
      grid-template-columns: repeat(3, 1fr) !important;
      gap: 12px 14px !important;
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
        width: min(920px, calc(100vw - 20px)) !important;
      }
      .mega-solutions-wrap {
        grid-template-columns: 1fr 250px !important;
      }
      .mega-sol-main {
        padding: 20px 18px !important;
      }
      .mega-sol-leads-aside {
        padding: 20px 16px !important;
      }
      .mega-industry-grid {
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

    /* PROFESSIONAL RESOURCES MEGA MENU */
    .mega-menu-resources {
      position: absolute !important;
      top: calc(100% + 14px) !important;
      left: 50% !important;
      right: auto !important;
      transform: translateX(-50%) translateY(8px) !important;
      width: min(820px, calc(100vw - 32px)) !important;
      max-width: calc(100vw - 32px) !important;
      background: #ffffff !important;
      border: 1px solid rgba(226, 232, 240, 0.95) !important;
      border-radius: 20px !important;
      box-shadow: 0 24px 60px -12px rgba(15, 23, 42, 0.16), 0 0 0 1px rgba(15, 23, 42, 0.04) !important;
      padding: 0 !important;
      overflow: hidden !important;
      box-sizing: border-box !important;
      z-index: 100000 !important;
      opacity: 0 !important;
      visibility: hidden !important;
      pointer-events: none !important;
      transition: opacity 0.22s cubic-bezier(0.16, 1, 0.3, 1), transform 0.22s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.22s !important;
    }
    .nav-item:hover > .mega-menu-resources,
    .nav-item.open > .mega-menu-resources,
    .nav-item:focus-within > .mega-menu-resources {
      transform: translateX(-50%) translateY(0) !important;
      opacity: 1 !important;
      visibility: visible !important;
      pointer-events: auto !important;
    }
    .mega-resources-wrap {
      display: grid !important;
      grid-template-columns: 1.45fr 1fr !important;
      align-items: stretch !important;
    }
    .mega-resources-main {
      padding: 22px 24px !important;
      display: flex !important;
      flex-direction: column !important;
    }
    .mega-resources-heading {
      font-size: 0.72rem !important;
      font-weight: 800 !important;
      letter-spacing: 0.08em !important;
      color: #6366f1 !important;
      text-transform: uppercase !important;
      margin-bottom: 14px !important;
    }
    .mega-resources-grid {
      display: grid !important;
      grid-template-columns: 1fr 1fr !important;
      gap: 12px 14px !important;
    }
    .mega-res-link {
      display: flex !important;
      align-items: flex-start !important;
      gap: 12px !important;
      padding: 10px 12px !important;
      border-radius: 12px !important;
      text-decoration: none !important;
      transition: all 0.18s ease !important;
      background: transparent !important;
    }
    .mega-res-link:hover {
      background: #f8fafc !important;
      transform: translateX(3px) !important;
    }
    .res-icon-wrap {
      width: 36px !important;
      height: 36px !important;
      border-radius: 10px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
    }
    .res-icon-indigo { background: rgba(99, 102, 241, 0.12) !important; color: #6366f1 !important; }
    .res-icon-amber { background: rgba(245, 158, 11, 0.14) !important; color: #d97706 !important; }
    .res-icon-green { background: rgba(16, 185, 129, 0.12) !important; color: #059669 !important; }
    .res-icon-purple { background: rgba(139, 92, 246, 0.12) !important; color: #7c3aed !important; }
    .res-icon-blue { background: rgba(59, 130, 246, 0.12) !important; color: #2563eb !important; }
    .res-icon-cyan { background: rgba(6, 182, 212, 0.14) !important; color: #0891b2 !important; }
    .res-icon-wrap svg {
      width: 17px !important;
      height: 17px !important;
    }
    .res-text {
      display: flex !important;
      flex-direction: column !important;
    }
    .res-title {
      font-size: 0.88rem !important;
      font-weight: 700 !important;
      color: #0f172a !important;
      line-height: 1.25 !important;
    }
    .res-desc {
      font-size: 0.74rem !important;
      color: #64748b !important;
      line-height: 1.35 !important;
      margin-top: 2px !important;
    }

    /* Resources Promo Card */
    .mega-resources-aside {
      background: linear-gradient(145deg, #f5f3ff 0%, #ede9fe 100%) !important;
      border-left: 1px solid rgba(139, 92, 246, 0.2) !important;
      padding: 22px 22px !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: center !important;
    }
    .mega-res-badge {
      display: inline-block !important;
      align-self: flex-start !important;
      background: rgba(139, 92, 246, 0.15) !important;
      color: #7c3aed !important;
      border: 1px solid rgba(139, 92, 246, 0.3) !important;
      font-size: 0.65rem !important;
      font-weight: 800 !important;
      letter-spacing: 0.06em !important;
      text-transform: uppercase !important;
      padding: 3px 9px !important;
      border-radius: 999px !important;
      margin-bottom: 10px !important;
    }
    .mega-res-title {
      font-size: 1.08rem !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      margin: 0 0 6px 0 !important;
      line-height: 1.3 !important;
    }
    .mega-res-desc {
      font-size: 0.78rem !important;
      color: #475569 !important;
      line-height: 1.45 !important;
      margin: 0 0 16px 0 !important;
    }
    .btn-mega-res-primary {
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      background: #7c3aed !important;
      color: #ffffff !important;
      font-size: 0.84rem !important;
      font-weight: 700 !important;
      text-decoration: none !important;
      padding: 9px 16px !important;
      border-radius: 10px !important;
      transition: all 0.18s ease !important;
      box-shadow: 0 4px 12px rgba(124, 58, 237, 0.25) !important;
      margin-bottom: 8px !important;
    }
    .btn-mega-res-primary:hover {
      background: #6d28d9 !important;
      transform: translateY(-1px) !important;
      color: #ffffff !important;
    }
    .btn-mega-res-secondary {
      background: transparent !important;
      border: none !important;
      color: #7c3aed !important;
      font-size: 0.8rem !important;
      font-weight: 700 !important;
      padding: 4px 0 !important;
      cursor: pointer !important;
      text-align: center !important;
      transition: color 0.15s ease !important;
    }
    .btn-mega-res-secondary:hover {
      color: #5b21b6 !important;
      text-decoration: underline !important;
    }

    /* PROFESSIONAL PARTNERS MEGA MENU */
    .mega-menu-partners {
      position: absolute !important;
      top: calc(100% + 14px) !important;
      left: 50% !important;
      right: auto !important;
      transform: translateX(-50%) translateY(8px) !important;
      width: min(780px, calc(100vw - 32px)) !important;
      max-width: calc(100vw - 32px) !important;
      background: #ffffff !important;
      border: 1px solid rgba(226, 232, 240, 0.95) !important;
      border-radius: 20px !important;
      box-shadow: 0 24px 60px -12px rgba(15, 23, 42, 0.16), 0 0 0 1px rgba(15, 23, 42, 0.04) !important;
      padding: 0 !important;
      overflow: hidden !important;
      box-sizing: border-box !important;
      z-index: 100000 !important;
      opacity: 0 !important;
      visibility: hidden !important;
      pointer-events: none !important;
      transition: opacity 0.22s cubic-bezier(0.16, 1, 0.3, 1), transform 0.22s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.22s !important;
    }
    .nav-item:hover > .mega-menu-partners,
    .nav-item.open > .mega-menu-partners,
    .nav-item:focus-within > .mega-menu-partners {
      transform: translateX(-50%) translateY(0) !important;
      opacity: 1 !important;
      visibility: visible !important;
      pointer-events: auto !important;
    }
    .mega-partners-wrap {
      display: grid !important;
      grid-template-columns: 1.45fr 1fr !important;
      align-items: stretch !important;
    }
    .mega-partners-main {
      padding: 22px 24px !important;
      display: flex !important;
      flex-direction: column !important;
    }
    .mega-partners-heading {
      font-size: 0.72rem !important;
      font-weight: 800 !important;
      letter-spacing: 0.08em !important;
      color: #034737 !important;
      text-transform: uppercase !important;
      margin-bottom: 14px !important;
    }
    .mega-partners-grid {
      display: grid !important;
      grid-template-columns: 1fr 1fr !important;
      gap: 12px 14px !important;
    }
    .mega-part-link {
      display: flex !important;
      align-items: flex-start !important;
      gap: 12px !important;
      padding: 10px 12px !important;
      border-radius: 12px !important;
      text-decoration: none !important;
      transition: all 0.18s ease !important;
      background: transparent !important;
    }
    .mega-part-link:hover {
      background: #f0fdf4 !important;
      transform: translateX(3px) !important;
    }
    .part-icon-wrap {
      width: 36px !important;
      height: 36px !important;
      border-radius: 10px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
    }
    .part-icon-purple { background: rgba(139, 92, 246, 0.12) !important; color: #7c3aed !important; }
    .part-icon-blue { background: rgba(59, 130, 246, 0.12) !important; color: #2563eb !important; }
    .part-icon-green { background: rgba(3, 71, 55, 0.12) !important; color: #034737 !important; }
    .part-icon-pink { background: rgba(236, 72, 153, 0.12) !important; color: #db2777 !important; }
    .part-icon-wrap svg {
      width: 17px !important;
      height: 17px !important;
    }
    .part-text {
      display: flex !important;
      flex-direction: column !important;
    }
    .part-title {
      font-size: 0.88rem !important;
      font-weight: 700 !important;
      color: #0f172a !important;
      line-height: 1.25 !important;
      display: flex !important;
      align-items: center !important;
      gap: 5px !important;
      flex-wrap: wrap !important;
    }
    .part-badge-pill {
      font-size: 0.62rem !important;
      font-weight: 800 !important;
      background: #dcfce7 !important;
      color: #034737 !important;
      padding: 1.5px 6px !important;
      border-radius: 999px !important;
      border: 1px solid #bbf7d0 !important;
      line-height: 1.2 !important;
    }
    .part-desc {
      font-size: 0.74rem !important;
      color: #64748b !important;
      line-height: 1.35 !important;
      margin-top: 2px !important;
    }

    /* Partners Promo Card */
    .mega-partners-aside {
      background: linear-gradient(145deg, #f0fdf4 0%, #dcfce7 100%) !important;
      border-left: 1px solid rgba(34, 197, 94, 0.25) !important;
      padding: 22px 22px !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: center !important;
    }
    .mega-part-badge {
      display: inline-block !important;
      align-self: flex-start !important;
      background: rgba(3, 71, 55, 0.15) !important;
      color: #034737 !important;
      border: 1px solid rgba(3, 71, 55, 0.25) !important;
      font-size: 0.65rem !important;
      font-weight: 800 !important;
      letter-spacing: 0.06em !important;
      text-transform: uppercase !important;
      padding: 3px 9px !important;
      border-radius: 999px !important;
      margin-bottom: 10px !important;
    }
    .mega-part-title {
      font-size: 1.08rem !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      margin: 0 0 6px 0 !important;
      line-height: 1.3 !important;
    }
    .mega-part-desc {
      font-size: 0.78rem !important;
      color: #334155 !important;
      line-height: 1.45 !important;
      margin: 0 0 16px 0 !important;
    }
    .btn-mega-part-primary {
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      background: #034737 !important;
      color: #ffffff !important;
      font-size: 0.84rem !important;
      font-weight: 700 !important;
      text-decoration: none !important;
      padding: 9px 16px !important;
      border-radius: 10px !important;
      transition: all 0.18s ease !important;
      box-shadow: 0 4px 12px rgba(3, 71, 55, 0.25) !important;
      margin-bottom: 8px !important;
    }
    .btn-mega-part-primary:hover {
      background: #023025 !important;
      transform: translateY(-1px) !important;
      color: #ffffff !important;
    }
    .mega-part-brochure-link {
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 6px !important;
      color: #034737 !important;
      font-size: 0.8rem !important;
      font-weight: 700 !important;
      text-decoration: none !important;
      padding: 4px 0 !important;
      transition: color 0.15s ease !important;
    }
    .mega-part-brochure-link:hover {
      color: #023025 !important;
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

              <!-- Column 1: Channels (WhatsApp, Instagram, Facebook, Telegram) -->
              <div class="prodocu-col-channels">
                <div class="prodocu-col-heading">Channels</div>
                <div class="prodocu-channel-list">
                  <a href="<?php echo $bp; ?>channel/whatsapp/" class="prodocu-channel-item active">
                    <span class="prodocu-chan-icon" style="color:#25d366;">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.704 1.916.802 2.049c.098.133 1.39 2.1 3.43 2.972.48.207.854.33 1.145.424.481.152.92.13 1.267.079.387-.058 1.17-.478 1.336-.94.166-.462.166-.857.116-.94-.05-.083-.183-.133-.38-.233"/></svg>
                    </span>
                    <span>WhatsApp</span>
                  </a>
                  <a href="<?php echo $bp; ?>channel/instagram/" class="prodocu-channel-item">
                    <span class="prodocu-chan-icon">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/></svg>
                    </span>
                    <span>Instagram</span>
                  </a>
                  <a href="<?php echo $bp; ?>channel/facebook/" class="prodocu-channel-item">
                    <span class="prodocu-chan-icon">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/></svg>
                    </span>
                    <span>Facebook</span>
                  </a>
                  <a href="<?php echo $bp; ?>channel/telegram/" class="prodocu-channel-item">
                    <span class="prodocu-chan-icon">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/></svg>
                    </span>
                    <span>Telegram</span>
                  </a>
                </div>
                <div class="prodocu-partner-badge">
                  <div class="prodocu-partner-pill">
                    <img src="<?php echo $bp; ?>assets/images/integrations/official-meta-partner.png" alt="Meta Official Partner" width="145" height="21">
                  </div>
                </div>
              </div>

              <!-- Column 2: Marketing -->
              <div class="prodocu-col">
                <div class="prodocu-section-title">Marketing</div>
                <div class="prodocu-items-list">
                  <a href="<?php echo $bp; ?>products/broadcast/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68 68 0 0 1-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 1 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.03v4.24c2.731.177 5.513.784 7.799 1.95l.201.107V3.85zM5.003 14.004l-.37-2.48a43 43 0 0 0-2.633.094l1.583 2.986a.5.5 0 0 0 .42.274zM1 7v2a1 1 0 0 0 1 1h.016c.328 0 .684.006 1.068.016l.084-.001V5.986l-.084.001A25 25 0 0 0 2 6a1 1 0 0 0-1 1"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Broadcast</span>
                      <span class="prodocu-item-desc">Send bulk messages</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/ctwa/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/><path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.52 1.903l-.01.037.037.01c.214.06.666.177 1.22.177.567 0 1.05-.116 1.468-.327"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">CTWA</span>
                      <span class="prodocu-item-desc">Click to WhatsApp ads</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/automation/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Drip Campaign</span>
                      <span class="prodocu-item-desc">Automated sequences</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/catalog/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-.5h-.5v.5a.5.5 0 0 1-1 0z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Catalog</span>
                      <span class="prodocu-item-desc">Showcase products</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/whatsapp-form/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">WhatsApp Form/Flow</span>
                      <span class="prodocu-item-desc">Interactive forms</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/whatsapp-blue-tick/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0"/><path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Blue Tick</span>
                      <span class="prodocu-item-desc">Verified business</span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- Column 3: Sales -->
              <div class="prodocu-col">
                <div class="prodocu-section-title">Sales</div>
                <div class="prodocu-items-list">
                  <a href="<?php echo $bp; ?>products/chatbot/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.7 5.865 5.7c.368 0 .72.054 1.045.152a4 4 0 0 1 1.09-.152c1.63 0 2.865 1.06 2.865 2.362 0 .894-.582 1.666-1.437 2.052v.006c-.006.184-.02.36-.043.528A3.5 3.5 0 0 1 6.5 13.5c-.886 0-1.68-.328-2.28-.871a3.7 3.7 0 0 1-.22-.629C3.42 11.59 3 10.748 3 9.77zM4.75 7.5a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5m6.5 0a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1M5 4h6a1 1 0 0 1 1 1v1h-8V5a1 1 0 0 1 1-1"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">AI Chatbot</span>
                      <span class="prodocu-item-desc">Automate conversations</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/whatsapp-payments/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/><path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">WhatsApp Payment</span>
                      <span class="prodocu-item-desc">Accept payments</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/catalog/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-.5h-.5v.5a.5.5 0 0 1-1 0z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Catalog</span>
                      <span class="prodocu-item-desc">Display products</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/whatsapp-interactive-messages/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Interactive Message</span>
                      <span class="prodocu-item-desc">Order updates</span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- Column 4: Support -->
              <div class="prodocu-col">
                <div class="prodocu-section-title">Support</div>
                <div class="prodocu-items-list">
                  <a href="<?php echo $bp; ?>products/shared-inbox/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/><path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Team Inbox</span>
                      <span class="prodocu-item-desc">Unified conversations</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/ai-agent/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794.11a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 4.65l-.387 1.162a.217.217 0 0 1-.412 0L3.407 4.65A1.73 1.73 0 0 0 2.31 3.553L1.148 3.166a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 1.27zm6.758 1.88a.217.217 0 0 1 .412 0l.248.744a1.73 1.73 0 0 0 1.097 1.097l.744.248a.217.217 0 0 1 0 .412l-.744.248a1.73 1.73 0 0 0-1.097 1.097l-.248.744a.217.217 0 0 1-.412 0l-.248-.744A1.73 1.73 0 0 0 9.455 5.5l-.744-.248a.217.217 0 0 1 0-.412l.744-.248A1.73 1.73 0 0 0 10.552 3.5z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">AI Assistant</span>
                      <span class="prodocu-item-desc">Smart responses</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>solutions/feedback-surveys/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0z"/><path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/><path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Feedback Collection</span>
                      <span class="prodocu-item-desc">Gather insights</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/analytics/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon">
                      <svg viewBox="0 0 16 16" fill="currentColor"><path d="M7.5 1.018a7 7 0 0 0-4.79 11.566L7.5 7.793zm1 0V7.5h6.482A7 7 0 0 0 8.5 1.018M14.982 8.5H8.207l-4.79 4.79A7 7 0 0 0 14.982 8.5M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Analytics Dashboard</span>
                      <span class="prodocu-item-desc">Track performance</span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- Column 5: Integrate With Card -->
              <div class="prodocu-col-integrate">
                <div class="prodocu-integrate-card">
                  <div class="prodocu-integrate-title">Integrate With</div>
                  <div class="prodocu-integrate-grid">
                    <a href="<?php echo $bp; ?>integrations/zoho/" class="prodocu-int-tile" title="Zoho">
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
                    <a href="<?php echo $bp; ?>integrations/wortal/" class="prodocu-int-tile" title="Wortal">
                      <img src="<?php echo $bp; ?>assets/images/integrations/wortal.png" alt="Wortal" width="32" height="32">
                    </a>
                    <a href="<?php echo $bp; ?>integrations/" class="prodocu-int-tile" title="GoTab">
                      <img src="<?php echo $bp; ?>assets/images/integrations/gotab.png" alt="GoTab" width="38" height="20">
                    </a>
                    <a href="<?php echo $bp; ?>integrations/shiprocket/" class="prodocu-int-tile" title="Shiprocket">
                      <img src="<?php echo $bp; ?>assets/images/integrations/shiprocket.png" alt="Shiprocket" width="30" height="30">
                    </a>
                    <div class="prodocu-int-arrow-tile">
                      <a href="<?php echo $bp; ?>integrations/" class="prodocu-int-arrow" title="View All Integrations">
                        <svg viewBox="0 0 16 16" fill="currentColor"><path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/></svg>
                      </a>
                    </div>
                    <div class="prodocu-int-spacer"></div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="nav-item nav-item-solutions" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Solutions <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-solutions" role="menu">
            <div class="mega-solutions-wrap">
              <!-- Left: By Industry (3 columns x 4 rows) -->
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
        <!-- 3. RESOURCES MEGAMENU -->
        <div class="nav-item nav-item-resources" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Resources <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-panel mega-menu-resources" role="menu">
            <div class="mega-resources-wrap">
              <div class="mega-resources-main">
                <div class="mega-resources-heading">Knowledge &amp; Developer Hub</div>
                <div class="mega-resources-grid">
                  <a href="<?php echo $bp; ?>resources/blog/" class="mega-res-link" role="menuitem">
                    <div class="res-icon-wrap res-icon-indigo">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                    </div>
                    <div class="res-text">
                      <span class="res-title">Blog &amp; Insights</span>
                      <span class="res-desc">WhatsApp tips, growth &amp; guides</span>
                    </div>
                  </a>

                  <a href="<?php echo $bp; ?>resources/help-center/" class="mega-res-link" role="menuitem">
                    <div class="res-icon-wrap res-icon-purple">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3M12 17h.01"/></svg>
                    </div>
                    <div class="res-text">
                      <span class="res-title">Help Center</span>
                      <span class="res-desc">Docs, FAQs &amp; onboarding setup</span>
                    </div>
                  </a>

                  <a href="<?php echo $bp; ?>resources/case-studies/" class="mega-res-link" role="menuitem">
                    <div class="res-icon-wrap res-icon-amber">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.45 1-1 1H7c-.55 0-1-.45-1-1v-2.34"/><path d="M18 14.66V17c0 .55-.45 1-1 1h-2c-.55 0-1-.45-1-1v-2.34"/><path d="M12 2v12.66"/></svg>
                    </div>
                    <div class="res-text">
                      <span class="res-title">Case Studies</span>
                      <span class="res-desc">Real business metrics &amp; ROI</span>
                    </div>
                  </a>

                  <a href="<?php echo $bp; ?>resources/documentation/" class="mega-res-link" role="menuitem">
                    <div class="res-icon-wrap res-icon-blue">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
                    </div>
                    <div class="res-text">
                      <span class="res-title">Documentation</span>
                      <span class="res-desc">Feature manuals &amp; tutorials</span>
                    </div>
                  </a>

                  <a href="<?php echo $bp; ?>resources/templates/" class="mega-res-link" role="menuitem">
                    <div class="res-icon-wrap res-icon-green">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
                    </div>
                    <div class="res-text">
                      <span class="res-title">Message Templates</span>
                      <span class="res-desc">High-converting WhatsApp copies</span>
                    </div>
                  </a>

                  <a href="<?php echo $bp; ?>integrations/api-webhooks/" class="mega-res-link" role="menuitem">
                    <div class="res-icon-wrap res-icon-cyan">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                    </div>
                    <div class="res-text">
                      <span class="res-title">API &amp; Webhooks</span>
                      <span class="res-desc">Developer REST API reference</span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- Right: Support / Onboarding Promo -->
              <div class="mega-resources-aside">
                <span class="mega-res-badge">SUPPORT &amp; ONBOARDING</span>
                <h4 class="mega-res-title">Need 1-on-1 Help?</h4>
                <p class="mega-res-desc">Our WhatsApp API architects help you setup flows, Meta Cloud API verification, and CRM integrations.</p>
                <a href="<?php echo $bp; ?>contact/" class="btn-mega-res-primary">Talk to Support &rarr;</a>
                <button type="button" class="btn-mega-res-secondary" onclick="if(window.openDemoModal) window.openDemoModal(); else window.location.href='/#contact-section';">Schedule Free Demo</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 4. PRICING -->
        <div class="nav-item"><a href="/pricing/" class="nav-link">Pricing</a></div>

        <!-- 5. PARTNERS MEGAMENU -->
        <div class="nav-item nav-item-partners" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Partners <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-panel mega-menu-partners" role="menu">
            <div class="mega-partners-wrap">
              <div class="mega-partners-main">
                <div class="mega-partners-heading">Partner Programs</div>
                <div class="mega-partners-grid">
                  <a href="<?php echo $bp; ?>partners/affiliate/" class="mega-part-link" role="menuitem">
                    <div class="part-icon-wrap part-icon-purple">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </div>
                    <div class="part-text">
                      <span class="part-title">Affiliate Partner <span class="part-badge-pill">20% Recurring</span></span>
                      <span class="part-desc">Refer businesses &amp; earn lifetime commission</span>
                    </div>
                  </a>

                  <a href="<?php echo $bp; ?>partners/agency/" class="mega-part-link" role="menuitem">
                    <div class="part-icon-wrap part-icon-blue">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <div class="part-text">
                      <span class="part-title">Agency Partner <span class="part-badge-pill">40% Margin</span></span>
                      <span class="part-desc">Manage client accounts with multi-tenant portal</span>
                    </div>
                  </a>

                  <a href="<?php echo $bp; ?>partners/white-label/" class="mega-part-link" role="menuitem">
                    <div class="part-icon-wrap part-icon-green">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>
                    </div>
                    <div class="part-text">
                      <span class="part-title">White Label Partner <span class="part-badge-pill">50% Rev-Share</span></span>
                      <span class="part-desc">Launch under your brand with custom domain</span>
                    </div>
                  </a>

                  <a href="<?php echo $bp; ?>partners/technology/" class="mega-part-link" role="menuitem">
                    <div class="part-icon-wrap part-icon-pink">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
                    </div>
                    <div class="part-text">
                      <span class="part-title">Technology Partner <span class="part-badge-pill">Ecosystem</span></span>
                      <span class="part-desc">Build native CRM, POS &amp; eCommerce apps</span>
                    </div>
                  </a>

                  <a href="<?php echo $bp; ?>company/careers/" class="mega-part-link mega-part-link-careers" role="menuitem" style="grid-column:1/-1;background:linear-gradient(135deg,rgba(99,102,241,0.06),rgba(16,185,129,0.06));border:1px dashed rgba(99,102,241,0.3);">
                    <div class="part-icon-wrap" style="background:rgba(99,102,241,0.14);color:#4F46E5;">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg>
                    </div>
                    <div class="part-text">
                      <span class="part-title">Careers <span class="part-badge-pill" style="background:#EEF2FF;color:#4F46E5;border:1px solid rgba(99,102,241,0.25);">We're Hiring</span></span>
                      <span class="part-desc">Build the future with HelloBotz &bull; AI, Automation &amp; Digital Solutions</span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- Right: Partner Program Aside -->
              <div class="mega-partners-aside">
                <span class="mega-part-badge">GLOBAL ECOSYSTEM</span>
                <h4 class="mega-part-title">Partner With HelloBotz</h4>
                <p class="mega-part-desc">Join 150+ global agencies &amp; tech partners driving millions of WhatsApp messages monthly.</p>
                <a href="<?php echo $bp; ?>partners/" class="btn-mega-part-primary">Explore Partner Program &rarr;</a>
                <a href="/assets/downloads/hellobotz-partner-brochure.pdf" download="HelloBotz-Partner-Brochure.pdf" class="mega-part-brochure-link">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
                  Partner Brochure (PDF)
                </a>
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
              <div class="prodocu-mob-chan-grid">
                <a href="<?php echo $bp; ?>channel/whatsapp/" class="prodocu-mob-chan-card">
                  <span class="chan-icon-wrap chan-wa">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.704 1.916.802 2.049c.098.133 1.39 2.1 3.43 2.972.48.207.854.33 1.145.424.481.152.92.13 1.267.079.387-.058 1.17-.478 1.336-.94.166-.462.166-.857.116-.94-.05-.083-.183-.133-.38-.233"/></svg>
                  </span>
                  <span>WhatsApp</span>
                </a>
                <a href="<?php echo $bp; ?>channel/instagram/" class="prodocu-mob-chan-card">
                  <span class="chan-icon-wrap chan-ig">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/></svg>
                  </span>
                  <span>Instagram</span>
                </a>
                <a href="<?php echo $bp; ?>channel/facebook/" class="prodocu-mob-chan-card">
                  <span class="chan-icon-wrap chan-fb">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/></svg>
                  </span>
                  <span>Facebook</span>
                </a>
                <a href="<?php echo $bp; ?>channel/telegram/" class="prodocu-mob-chan-card">
                  <span class="chan-icon-wrap chan-tg">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/></svg>
                  </span>
                  <span>Telegram</span>
                </a>
              </div>
              <div class="prodocu-mob-partner-wrap">
                <div class="prodocu-partner-pill">
                  <img src="<?php echo $bp; ?>assets/images/integrations/official-meta-partner.png" alt="Meta Official Partner" width="145" height="21">
                </div>
              </div>

              <hr class="prodocu-mob-divider">

              <!-- Marketing Section -->
              <div class="prodocu-mob-section-title">MARKETING</div>
              <div class="prodocu-mob-items-col">
                <a href="<?php echo $bp; ?>products/broadcast/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68 68 0 0 1-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 1 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.03v4.24c2.731.177 5.513.784 7.799 1.95l.201.107V3.85zM5.003 14.004l-.37-2.48a43 43 0 0 0-2.633.094l1.583 2.986a.5.5 0 0 0 .42.274zM1 7v2a1 1 0 0 0 1 1h.016c.328 0 .684.006 1.068.016l.084-.001V5.986l-.084.001A25 25 0 0 0 2 6a1 1 0 0 0-1 1"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">Broadcast</span>
                    <span class="prodocu-item-desc">Send bulk messages</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/ctwa/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/><path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.52 1.903l-.01.037.037.01c.214.06.666.177 1.22.177.567 0 1.05-.116 1.468-.327"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">CTWA</span>
                    <span class="prodocu-item-desc">Click to WhatsApp ads</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/automation/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">Drip Campaign</span>
                    <span class="prodocu-item-desc">Automated sequences</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/catalog/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-.5h-.5v.5a.5.5 0 0 1-1 0z"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">Catalog</span>
                    <span class="prodocu-item-desc">Showcase products</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/whatsapp-form/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5z"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">WhatsApp Form/Flow</span>
                    <span class="prodocu-item-desc">Interactive forms</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/whatsapp-blue-tick/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0"/><path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">Blue Tick</span>
                    <span class="prodocu-item-desc">Verified business</span>
                  </div>
                </a>
              </div>

              <hr class="prodocu-mob-divider">

              <!-- Sales Section -->
              <div class="prodocu-mob-section-title">SALES</div>
              <div class="prodocu-mob-items-col">
                <a href="<?php echo $bp; ?>products/chatbot/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.7 5.865 5.7c.368 0 .72.054 1.045.152a4 4 0 0 1 1.09-.152c1.63 0 2.865 1.06 2.865 2.362 0 .894-.582 1.666-1.437 2.052v.006c-.006.184-.02.36-.043.528A3.5 3.5 0 0 1 6.5 13.5c-.886 0-1.68-.328-2.28-.871a3.7 3.7 0 0 1-.22-.629C3.42 11.59 3 10.748 3 9.77zM4.75 7.5a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5m6.5 0a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1M5 4h6a1 1 0 0 1 1 1v1h-8V5a1 1 0 0 1 1-1"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">AI Chatbot</span>
                    <span class="prodocu-item-desc">Automate conversations</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/whatsapp-payments/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/><path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">WhatsApp Payment</span>
                    <span class="prodocu-item-desc">Accept payments</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/catalog/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-.5h-.5v.5a.5.5 0 0 1-1 0z"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">Catalog</span>
                    <span class="prodocu-item-desc">Display products</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/whatsapp-interactive-messages/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">Interactive Message</span>
                    <span class="prodocu-item-desc">Order updates</span>
                  </div>
                </a>
              </div>

              <hr class="prodocu-mob-divider">

              <!-- Support Section -->
              <div class="prodocu-mob-section-title">SUPPORT</div>
              <div class="prodocu-mob-items-col">
                <a href="<?php echo $bp; ?>products/shared-inbox/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/><path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">Team Inbox</span>
                    <span class="prodocu-item-desc">Unified conversations</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/ai-agent/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794.11a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 4.65l-.387 1.162a.217.217 0 0 1-.412 0L3.407 4.65A1.73 1.73 0 0 0 2.31 3.553L1.148 3.166a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 1.27zm6.758 1.88a.217.217 0 0 1 .412 0l.248.744a1.73 1.73 0 0 0 1.097 1.097l.744.248a.217.217 0 0 1 0 .412l-.744.248a1.73 1.73 0 0 0-1.097 1.097l-.248.744a.217.217 0 0 1-.412 0l-.248-.744A1.73 1.73 0 0 0 9.455 5.5l-.744-.248a.217.217 0 0 1 0-.412l.744-.248A1.73 1.73 0 0 0 10.552 3.5z"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">AI Assistant</span>
                    <span class="prodocu-item-desc">Smart responses</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>solutions/feedback-surveys/" class="prodocu-item" role="menuitem">
                  <div class="prodocu-item-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0z"/><path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/><path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">Feedback Collection</span>
                    <span class="prodocu-item-desc">Gather insights</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/analytics/" class="prodocu-item" role="menuitem">
                  <div class="prodocu-item-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor"><path d="M7.5 1.018a7 7 0 0 0-4.79 11.566L7.5 7.793zm1 0V7.5h6.482A7 7 0 0 0 8.5 1.018M14.982 8.5H8.207l-4.79 4.79A7 7 0 0 0 14.982 8.5M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">Analytics Dashboard</span>
                    <span class="prodocu-item-desc">Track performance</span>
                  </div>
                </a>
              </div>

              <hr class="prodocu-mob-divider">

              <!-- Integrate With Section -->
              <div class="prodocu-mob-section-title">INTEGRATE WITH</div>
              <div class="prodocu-mob-integrate-grid">
                <a href="<?php echo $bp; ?>integrations/zoho/" class="prodocu-mob-int-tile" title="Zoho">
                  <div class="int-inner-card">
                    <img src="<?php echo $bp; ?>assets/images/integrations/zoho.png" alt="Zoho">
                  </div>
                </a>
                <a href="<?php echo $bp; ?>integrations/google-sheets/" class="prodocu-mob-int-tile" title="Google Sheets">
                  <div class="int-inner-card">
                    <img src="<?php echo $bp; ?>assets/images/integrations/google-sheet.png" alt="Google Sheets">
                  </div>
                </a>
                <a href="<?php echo $bp; ?>integrations/shopify/" class="prodocu-mob-int-tile" title="Shopify">
                  <div class="int-inner-card">
                    <img src="<?php echo $bp; ?>assets/images/integrations/shopify.png" alt="Shopify">
                  </div>
                </a>
                <a href="<?php echo $bp; ?>integrations/woocommerce/" class="prodocu-mob-int-tile" title="WooCommerce">
                  <div class="int-inner-card">
                    <img src="<?php echo $bp; ?>assets/images/integrations/woocommerce.png" alt="WooCommerce">
                  </div>
                </a>
                <a href="<?php echo $bp; ?>integrations/wortal/" class="prodocu-mob-int-tile" title="Wortal">
                  <div class="int-inner-card">
                    <img src="<?php echo $bp; ?>assets/images/integrations/wortal.png" alt="Wortal">
                  </div>
                </a>
                <a href="<?php echo $bp; ?>integrations/" class="prodocu-mob-int-tile" title="GoTab">
                  <div class="int-inner-card">
                    <img src="<?php echo $bp; ?>assets/images/integrations/gotab.png" alt="GoTab">
                  </div>
                </a>
                <a href="<?php echo $bp; ?>integrations/shiprocket/" class="prodocu-mob-int-tile" title="Shiprocket">
                  <div class="int-inner-card">
                    <img src="<?php echo $bp; ?>assets/images/integrations/shiprocket.png" alt="Shiprocket">
                  </div>
                </a>
                <a href="<?php echo $bp; ?>integrations/" class="prodocu-mob-int-tile tile-arrow" title="View All Integrations">
                  <div class="arrow-circle">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                  </div>
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
            <div style="font-size:11px;font-weight:700;letter-spacing:.05em;color:var(--p2);text-transform:uppercase;padding:10px 0 2px;border-bottom:1px solid #f1f5f9;">Business Leads</div>
            <a href="<?php echo $bp; ?>business-leads/" style="font-weight:700;color:#4f46e5;">Browse All 12 Leads Categories &rarr;</a>
            <a href="<?php echo $bp; ?>solutions/data-marketplace/#custom-request" style="color:var(--p2);font-weight:600;">+ Custom Data Request</a>
          </div></div>
        </div>
        <!-- 3. RESOURCES ACCORDION -->
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Resources <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <div style="font-size:11px;font-weight:700;letter-spacing:.05em;color:var(--p2);text-transform:uppercase;padding:6px 0 2px;border-bottom:1px solid #f1f5f9;">Knowledge &amp; Guides</div>
            <a href="<?php echo $bp; ?>resources/blog/">Blog &amp; Insights <span style="font-size:11px;color:#64748B;display:block;">WhatsApp tips &amp; guides</span></a>
            <a href="<?php echo $bp; ?>resources/case-studies/">Case Studies <span style="font-size:11px;color:#64748B;display:block;">Customer results &amp; ROI</span></a>
            <a href="<?php echo $bp; ?>resources/templates/">Message Templates <span style="font-size:11px;color:#64748B;display:block;">Pre-approved broadcast copies</span></a>

            <div style="font-size:11px;font-weight:700;letter-spacing:.05em;color:var(--p2);text-transform:uppercase;padding:10px 0 2px;border-bottom:1px solid #f1f5f9;">Developers &amp; Support</div>
            <a href="<?php echo $bp; ?>resources/help-center/">Help Center <span style="font-size:11px;color:#64748B;display:block;">FAQs, onboarding &amp; guides</span></a>
            <a href="<?php echo $bp; ?>resources/documentation/">Documentation <span style="font-size:11px;color:#64748B;display:block;">Platform manuals &amp; tutorials</span></a>
            <a href="<?php echo $bp; ?>integrations/api-webhooks/">API Docs &amp; Webhooks <span style="font-size:11px;color:#64748B;display:block;">Developer REST &amp; webhooks</span></a>
          </div></div>
        </div>

        <!-- 4. PRICING -->
        <div class="mobile-nav-item"><a href="/pricing/" class="mobile-nav-link">Pricing</a></div>

        <!-- 5. PARTNERS ACCORDION -->
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Partners <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <div style="font-size:11px;font-weight:700;letter-spacing:.05em;color:var(--p2);text-transform:uppercase;padding:6px 0 2px;border-bottom:1px solid #f1f5f9;">Partner Programs</div>
            <a href="<?php echo $bp; ?>partners/affiliate/">Affiliate Partner <span style="font-size:11px;color:#64748B;display:block;">Refer &amp; earn 20% recurring</span></a>
            <a href="<?php echo $bp; ?>partners/agency/">Agency Partner <span style="font-size:11px;color:#64748B;display:block;">Serve your clients (40% margin)</span></a>
            <a href="<?php echo $bp; ?>partners/white-label/">White Label Partner <span style="font-size:11px;color:#64748B;display:block;">Your brand &amp; domain (50% rev-share)</span></a>
            <a href="<?php echo $bp; ?>partners/technology/">Technology Partner <span style="font-size:11px;color:#64748B;display:block;">Build integrations</span></a>
            <a href="<?php echo $bp; ?>company/careers/" style="font-weight:700;color:#4F46E5;display:flex;align-items:center;justify-content:space-between;gap:6px;padding:8px 10px;margin-top:6px;background:rgba(99,102,241,0.08);border-radius:8px;border:1px solid rgba(99,102,241,0.2);"><span>🚀 Careers</span> <span style="font-size:10px;font-weight:700;background:#4F46E5;color:#fff;padding:2px 8px;border-radius:12px;letter-spacing:.02em;">We're Hiring</span></a>
            <a href="/assets/downloads/hellobotz-partner-brochure.pdf" download="HelloBotz-Partner-Brochure.pdf" style="font-weight:700;color:#6D28D9;display:flex;align-items:center;gap:6px;padding:6px 0;">📄 Download Partner Brochure</a>
            <a href="<?php echo $bp; ?>partners/" style="font-weight:700;color:#034737;display:flex;align-items:center;gap:4px;padding:6px 0;">Join Partner Program &rarr;</a>
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
        </div>
      </div>
    </div>
  </div>
  <main id="main">
