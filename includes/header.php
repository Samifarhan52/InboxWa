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
$detectedHost = $_SERVER['HTTP_X_FORWARDED_HOST'] ?? $_SERVER['HTTP_HOST'] ?? 'inbox-wa-k1i3-five.vercel.app';
$detectedProto = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ? 'https' : 'http';
$SITE_DOMAIN = (strpos($detectedHost, 'localhost') === false && strpos($detectedHost, '127.0.0.1') === false) ? $detectedProto . '://' . $detectedHost : 'https://inbox-wa-k1i3-five.vercel.app';
$DEFAULT_OG  = $SITE_DOMAIN . '/assets/images/og-image.png';
$cmsWhatsapp = cms_setting('support_whatsapp', '918050854445');
$cmsPhone    = cms_setting('phone_number', '+91 80508 54445');
$cmsSalesEmail = cms_setting('sales_email', 'mail@hellobotz.com');
$cmsSupportEmail = cms_setting('support_email', 'support@hellobotz.com');
$cmsLogo     = cms_setting('logo_url', '/assets/images/logo.png');
$cmsLogoLight = cms_setting('logo_light_url', '/assets/images/logo-light.png');
$cmsLogoDark  = cms_setting('logo_dark_url', '/assets/images/logo-dark.png');
$cmsLogoWidth = cms_setting('logo_width', '180px');
$cmsLogoHeight= cms_setting('logo_height', '44px');
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
  <link rel="stylesheet" href="/app.css?v=55">
  <link rel="stylesheet" href="/assets/css/style.css?v=55">
  <link rel="stylesheet" href="/assets/css/mobile-menu.css?v=55">
  <link rel="stylesheet" href="/assets/css/story-journey.css?v=55">
  <link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=51">
  <link rel="stylesheet" href="/assets/css/robot-chatbot.css?v=6">
  <link rel="stylesheet" href="/assets/css/dark-mode.css?v=52">
  <?php if (!empty($extraCss)): foreach ((array)$extraCss as $ecss): ?>
  <link rel="stylesheet" href="<?php echo hb_seo_esc($ecss); ?>">
  <?php endforeach; endif; ?>
  <script>
    (function() {
      try {
        var s = localStorage.getItem('hb_theme');
        var t = s ? s : 'light';
        document.documentElement.setAttribute('data-theme', t);
        if (t === 'dark') {
          document.documentElement.classList.add('dark-theme');
          document.documentElement.classList.remove('light-theme');
        } else {
          document.documentElement.classList.remove('dark-theme');
          document.documentElement.classList.add('light-theme');
        }
      } catch (e) {}
    })();
  </script>

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
  <style id="hellobotz-navbar-style">
     /* ==========================================================================
        HelloBotz Global Header Navigation System
        Edge-to-edge full width sticky bar, HD brand logo, clean typography & pill CTAs
        ========================================================================== */
    :root {
      --nav: 74px !important;
      --hb-ann-h: 40px;
    }
    html {
      scroll-padding-top: calc(var(--nav, 74px) + var(--hb-ann-h, 40px) + 12px) !important;
    }
    body {
      padding-top: calc(var(--nav, 74px) + var(--hb-ann-h, 40px)) !important;
    }
    @media (max-width: 768px) {
      :root {
        --nav: 60px !important;
        --hb-ann-h: 38px;
      }
      body {
        padding-top: calc(var(--nav, 60px) + var(--hb-ann-h, 38px)) !important;
      }
      html {
        scroll-padding-top: calc(var(--nav, 60px) + var(--hb-ann-h, 38px) + 10px) !important;
      }
    }
    body.hb-ann-dismissed {
      --hb-ann-h: 0px !important;
      padding-top: var(--nav, 74px) !important;
    }
    body.hb-ann-dismissed .site-header {
      top: 0 !important;
    }
    @media (max-width: 768px) {
      body.hb-ann-dismissed {
        padding-top: var(--nav, 60px) !important;
      }
    }

    /* Universal Breadcrumbs Removal */
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

    /* Edge-to-Edge Sticky Header Bar */
    .site-header {
      position: fixed !important;
      top: var(--hb-ann-h, 40px) !important;
      left: 0 !important;
      right: 0 !important;
      width: 100% !important;
      max-width: 100vw !important;
      z-index: 99999 !important;
      padding: 0 !important;
      margin: 0 !important;
      box-sizing: border-box !important;
      pointer-events: auto !important;
      background: #ffffff !important;
      backdrop-filter: blur(16px) !important;
      -webkit-backdrop-filter: blur(16px) !important;
      border-top: none !important;
      border-left: none !important;
      border-right: none !important;
      border-bottom: 1px solid rgba(226, 232, 240, 0.85) !important;
      box-shadow: 0 1px 3px 0 rgba(15, 23, 42, 0.02) !important;
      transition: background 0.25s ease,
                  box-shadow 0.25s ease,
                  border-color 0.25s ease !important;
    }
    /* Header Bar: Light Mode Default & Explicit */
    .site-header,
    html[data-theme="light"] .site-header,
    body.light-theme .site-header {
      background: #ffffff !important;
      border-bottom: 1px solid rgba(226, 232, 240, 0.85) !important;
      box-shadow: 0 1px 3px 0 rgba(15, 23, 42, 0.02) !important;
    }
    .site-header.scrolled,
    html[data-theme="light"] .site-header.scrolled,
    body.light-theme .site-header.scrolled {
      background: rgba(255, 255, 255, 0.98) !important;
      border-bottom-color: rgba(203, 213, 225, 0.85) !important;
      box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.08) !important;
    }

    /* Dark Mode Header Bar */
    html[data-theme="dark"] .site-header,
    body.dark-theme .site-header {
      background: #0b0f19 !important;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.4) !important;
    }
    html[data-theme="dark"] .site-header.scrolled,
    body.dark-theme .site-header.scrolled {
      background: rgba(11, 15, 25, 0.98) !important;
      border-bottom-color: rgba(255, 255, 255, 0.12) !important;
      box-shadow: 0 4px 24px -2px rgba(0, 0, 0, 0.7) !important;
    }

    /* Inner Container */
    .header-inner {
      position: relative !important;
      max-width: 1360px !important;
      width: 100% !important;
      margin: 0 auto !important;
      height: 80px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      padding: 0 2rem !important;
      background: transparent !important;
      border: none !important;
      border-radius: 0 !important;
      box-shadow: none !important;
      box-sizing: border-box !important;
      transition: height 0.25s cubic-bezier(0.16, 1, 0.3, 1),
                  padding 0.25s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .site-header.scrolled .header-inner {
      height: 60px !important;
    }
    html[data-theme="dark"] .site-header .header-inner,
    body.dark-theme .site-header .header-inner,
    html[data-theme="dark"] .site-header.scrolled .header-inner,
    body.dark-theme .site-header.scrolled .header-inner {
      background: transparent !important;
      border: none !important;
      border-radius: 0 !important;
      box-shadow: none !important;
    }

    /* Logo Container & Logo Link */
    .logo-dock-wrapper {
      display: inline-flex !important;
      align-items: center !important;
      flex-shrink: 0 !important;
      position: relative !important;
      margin-right: 24px !important;
    }
    .site-header .logo,
    .site-header .site-main-logo,
    .site-header:not(.scrolled) .logo,
    .site-header.scrolled .logo {
      display: inline-flex !important;
      align-items: center !important;
      background: transparent !important;
      background-color: transparent !important;
      border: none !important;
      border-radius: 0 !important;
      box-shadow: none !important;
      padding: 0 !important;
      margin: 0 !important;
      text-decoration: none !important;
      flex-shrink: 0 !important;
      cursor: pointer !important;
      transform: none !important;
      outline: none !important;
      transition: opacity 0.2s ease !important;
    }
    .site-header .logo:hover,
    .site-header .site-main-logo:hover,
    .site-header:not(.scrolled) .logo:hover,
    .site-header.scrolled .logo:hover {
      opacity: 0.86 !important;
      background: transparent !important;
      background-color: transparent !important;
      border: none !important;
      box-shadow: none !important;
      transform: none !important;
    }

    :root {
      --site-logo-width: <?php echo htmlspecialchars($cmsLogoWidth); ?>;
      --site-logo-height: <?php echo htmlspecialchars($cmsLogoHeight); ?>;
    }

    /* Logo Image Sizing & Resizing on Scroll */
    .site-header .logo-img {
      height: var(--site-logo-height, 44px) !important;
      width: auto !important;
      max-width: var(--site-logo-width, 220px) !important;
      object-fit: contain !important;
      image-rendering: -webkit-optimize-contrast;
      image-rendering: crisp-edges;
      display: block !important;
      transition: height 0.25s cubic-bezier(0.16, 1, 0.3, 1),
                  max-width 0.25s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .site-header.scrolled .logo-img {
      height: calc(var(--site-logo-height, 44px) * 0.78) !important;
      max-width: calc(var(--site-logo-width, 220px) * 0.78) !important;
    }

    /* Theme Logo Switcher */
    .site-header .logo-img-light,
    .mobile-drawer-header .logo-img-light,
    html[data-theme="light"] .site-header .logo-img-light,
    html[data-theme="light"] .mobile-drawer-header .logo-img-light,
    body.light-theme .site-header .logo-img-light,
    body.light-theme .mobile-drawer-header .logo-img-light {
      display: block !important;
    }
    .site-header .logo-img-dark,
    .mobile-drawer-header .logo-img-dark,
    html[data-theme="light"] .site-header .logo-img-dark,
    html[data-theme="light"] .mobile-drawer-header .logo-img-dark,
    body.light-theme .site-header .logo-img-dark,
    body.light-theme .mobile-drawer-header .logo-img-dark {
      display: none !important;
    }
    html[data-theme="dark"] .site-header .logo-img-light,
    html[data-theme="dark"] .mobile-drawer-header .logo-img-light,
    body.dark-theme .site-header .logo-img-light,
    body.dark-theme .mobile-drawer-header .logo-img-light {
      display: none !important;
    }
    html[data-theme="dark"] .site-header .logo-img-dark,
    html[data-theme="dark"] .mobile-drawer-header .logo-img-dark,
    body.dark-theme .site-header .logo-img-dark,
    body.dark-theme .mobile-drawer-header .logo-img-dark {
      display: block !important;
    }

    @media (max-width: 1024px) {
      .logo-dock-wrapper {
        margin-right: 8px !important;
      }
      .site-header .header-inner {
        height: 58px !important;
        padding: 0 1rem !important;
      }
      .site-header.scrolled .header-inner {
        height: 52px !important;
      }
      .site-header .logo-img {
        height: 34px !important;
        max-width: 140px !important;
      }
      .site-header.scrolled .logo-img {
        height: 28px !important;
        max-width: 120px !important;
      }
    }
    .mobile-drawer-header .logo {
      display: inline-flex !important;
      align-items: center !important;
      background: transparent !important;
      padding: 0 !important;
      border: none !important;
      box-shadow: none !important;
    }
    .mobile-drawer-header .logo-img {
      height: 34px !important;
      width: auto !important;
      max-width: 150px !important;
      object-fit: contain !important;
    }
    .site-footer .logo-img {
      height: 42px !important;
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
      gap: 1.15rem !important;
      flex: 1 !important;
      justify-content: center !important;
    }
    .nav-link,
    html[data-theme="light"] .nav-link,
    body.light-theme .nav-link {
      display: inline-flex !important;
      align-items: center !important;
      gap: 6px !important;
      padding: 0.45rem 0.65rem !important;
      font-size: 0.92rem !important;
      font-weight: 550 !important;
      color: #1e293b !important;
      border-radius: 8px !important;
      white-space: nowrap !important;
      transition: color 0.18s ease, background 0.18s ease !important;
      background: transparent !important;
      border: none !important;
      cursor: pointer !important;
      text-decoration: none !important;
    }
    .nav-link:hover,
    .nav-item:hover > .nav-link,
    .nav-item.open > .nav-link,
    html[data-theme="light"] .nav-link:hover,
    html[data-theme="light"] .nav-item:hover > .nav-link,
    html[data-theme="light"] .nav-item.open > .nav-link,
    body.light-theme .nav-link:hover,
    body.light-theme .nav-item:hover > .nav-link,
    body.light-theme .nav-item.open > .nav-link {
      background: rgba(15, 23, 42, 0.04) !important;
      color: #044738 !important;
    }
    .nav-link svg {
      width: 12px !important;
      height: 12px !important;
      opacity: 0.65 !important;
      flex-shrink: 0 !important;
      transition: transform 0.2s ease, opacity 0.2s ease !important;
    }
    .nav-item:hover > .nav-link svg,
    .nav-item.open > .nav-link svg,
    html[data-theme="light"] .nav-item:hover > .nav-link svg,
    html[data-theme="light"] .nav-item.open > .nav-link svg,
    body.light-theme .nav-item:hover > .nav-link svg,
    body.light-theme .nav-item.open > .nav-link svg {
      transform: rotate(180deg) !important;
      opacity: 1 !important;
      color: #044738 !important;
    }

    /* Channels Live Button */
    .nav-link-channels,
    html[data-theme="light"] .nav-link-channels,
    body.light-theme .nav-link-channels {
      font-weight: 650 !important;
      color: #0f172a !important;
    }
    .nav-item-channels:hover > .nav-link-channels,
    .nav-item-channels.open > .nav-link-channels,
    html[data-theme="light"] .nav-item-channels:hover > .nav-link-channels,
    html[data-theme="light"] .nav-item-channels.open > .nav-link-channels,
    body.light-theme .nav-item-channels:hover > .nav-link-channels,
    body.light-theme .nav-item-channels.open > .nav-link-channels {
      background: #0d111c !important;
      color: #ffffff !important;
    }
    .nav-item-channels:hover > .nav-link-channels svg,
    .nav-item-channels.open > .nav-link-channels svg {
      color: #ffffff !important;
    }
    html[data-theme="dark"] .nav-link,
    body.dark-theme .nav-link {
      color: #cbd5e1 !important;
    }
    html[data-theme="dark"] .nav-link:hover,
    html[data-theme="dark"] .nav-item:hover > .nav-link,
    html[data-theme="dark"] .nav-item.open > .nav-link,
    body.dark-theme .nav-link:hover,
    body.dark-theme .nav-item:hover > .nav-link,
    body.dark-theme .nav-item.open > .nav-link {
      background: rgba(255, 255, 255, 0.08) !important;
      color: #ffffff !important;
    }
    html[data-theme="dark"] .nav-link-channels,
    body.dark-theme .nav-link-channels {
      color: #f8fafc !important;
    }
    html[data-theme="dark"] .nav-item-channels:hover > .nav-link-channels,
    html[data-theme="dark"] .nav-item-channels.open > .nav-link-channels,
    body.dark-theme .nav-item-channels:hover > .nav-link-channels,
    body.dark-theme .nav-item-channels.open > .nav-link-channels {
      background: rgba(255, 255, 255, 0.12) !important;
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

    /* PRODUCTS MEGA MENU: DESKTOP LAYOUT */
    .mega-menu-products {
      width: 1160px !important;
      max-width: calc(100vw - 32px) !important;
      background: #ffffff !important;
      border: 1px solid #e5e7eb !important;
      border-radius: 16px !important;
      box-shadow: 0 15px 35px -5px rgba(0, 0, 0, 0.12), 0 0 0 1px rgba(0, 0, 0, 0.03) !important;
      padding: 22px 24px 24px 24px !important;
      box-sizing: border-box !important;
    }

    .prodocu-mega-layout {
      display: grid !important;
      grid-template-columns: 185px 1.15fr 1.05fr 1.05fr 275px !important;
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
    .prodocu-chan-icon {
      width: 22px !important;
      height: 22px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
      border-radius: 5px !important;
    }
    .prodocu-chan-icon svg {
      width: 22px !important;
      height: 22px !important;
      display: block !important;
      border-radius: 5px !important;
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
      padding: 6px 8px !important;
      border-radius: 8px !important;
      text-decoration: none !important;
      transition: all 0.15s ease !important;
      background: transparent !important;
    }

    .prodocu-item:hover {
      background-color: #f8fafc !important;
    }

    .prodocu-item-icon {
      width: 32px !important;
      height: 32px !important;
      border-radius: 8px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
      margin-top: 1px !important;
    }

    .prodocu-item:hover .prodocu-item-icon,
    .prodocu-mob-item:hover .prodocu-item-icon {
      transform: scale(1.12) translateY(-1px) !important;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08) !important;
    }

    .prodocu-item-icon svg {
      width: 16px !important;
      height: 16px !important;
      flex-shrink: 0 !important;
      display: block !important;
    }

    /* Vibrant SaaS feature icon badges */
    .pro-icon-broadcast { background: #F3E8FF !important; color: #7C3AED !important; }
    .pro-icon-ctwa { background: #DCFCE7 !important; color: #16A34A !important; }
    .pro-icon-drip { background: #DBEAFE !important; color: #2563EB !important; }
    .pro-icon-catalog { background: #FFEDD5 !important; color: #EA580C !important; }
    .pro-icon-form { background: #CCFBF1 !important; color: #0D9488 !important; }
    .pro-icon-bluetick { background: #E0F2FE !important; color: #0284C7 !important; }

    .pro-icon-chatbot { background: #EEF2FF !important; color: #6366F1 !important; }
    .pro-icon-payment { background: #D1FAE5 !important; color: #059669 !important; }
    .pro-icon-catalog-sales { background: #FEF3C7 !important; color: #D97706 !important; }
    .pro-icon-interactive { background: #FFE4E6 !important; color: #E11D48 !important; }

    .pro-icon-inbox { background: #E0E7FF !important; color: #3730A3 !important; }
    .pro-icon-ai-agent { background: #F5F3FF !important; color: #9333EA !important; }
    .pro-icon-feedback { background: #FEF3C7 !important; color: #D97706 !important; }
    .pro-icon-analytics { background: #CFFAFE !important; color: #0891B2 !important; }

    html[data-theme="dark"] .pro-icon-broadcast { background: rgba(124, 58, 237, 0.22) !important; color: #C4B5FD !important; }
    html[data-theme="dark"] .pro-icon-ctwa { background: rgba(22, 163, 74, 0.22) !important; color: #86EFAC !important; }
    html[data-theme="dark"] .pro-icon-drip { background: rgba(37, 99, 235, 0.22) !important; color: #93C5FD !important; }
    html[data-theme="dark"] .pro-icon-catalog { background: rgba(234, 88, 12, 0.22) !important; color: #FDBA74 !important; }
    html[data-theme="dark"] .pro-icon-form { background: rgba(13, 148, 136, 0.22) !important; color: #5EEAD4 !important; }
    html[data-theme="dark"] .pro-icon-bluetick { background: rgba(2, 132, 199, 0.22) !important; color: #7DD3FC !important; }
    html[data-theme="dark"] .pro-icon-chatbot { background: rgba(99, 102, 241, 0.22) !important; color: #A5B4FC !important; }
    html[data-theme="dark"] .pro-icon-payment { background: rgba(5, 150, 105, 0.22) !important; color: #6EE7B7 !important; }
    html[data-theme="dark"] .pro-icon-catalog-sales { background: rgba(217, 119, 6, 0.22) !important; color: #FCD34D !important; }
    html[data-theme="dark"] .pro-icon-interactive { background: rgba(225, 29, 72, 0.22) !important; color: #FDA4AF !important; }
    html[data-theme="dark"] .pro-icon-inbox { background: rgba(55, 48, 163, 0.28) !important; color: #C7D2FE !important; }
    html[data-theme="dark"] .pro-icon-ai-agent { background: rgba(147, 51, 234, 0.22) !important; color: #D8B4FE !important; }
    html[data-theme="dark"] .pro-icon-feedback { background: rgba(217, 119, 6, 0.22) !important; color: #FDE68A !important; }
    html[data-theme="dark"] .pro-icon-analytics { background: rgba(8, 145, 178, 0.22) !important; color: #67E8F9 !important; }

    /* Dark theme container and text contrast for products mega menu */
    html[data-theme="dark"] .mega-menu-products,
    body.dark-theme .mega-menu-products {
      background: #0f172a !important;
      border-color: rgba(255, 255, 255, 0.12) !important;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6), 0 0 0 1px rgba(255, 255, 255, 0.08) !important;
    }
    html[data-theme="dark"] .prodocu-col-channels,
    body.dark-theme .prodocu-col-channels {
      border-right-color: rgba(255, 255, 255, 0.1) !important;
    }
    html[data-theme="dark"] .prodocu-item-title,
    body.dark-theme .prodocu-item-title {
      color: #f1f5f9 !important;
    }
    html[data-theme="dark"] .prodocu-item:hover .prodocu-item-title,
    body.dark-theme .prodocu-item:hover .prodocu-item-title,
    html[data-theme="dark"] .prodocu-mob-item:hover .prodocu-item-title,
    body.dark-theme .prodocu-mob-item:hover .prodocu-item-title {
      color: #38ef7d !important;
    }
    html[data-theme="dark"] .prodocu-item-desc,
    body.dark-theme .prodocu-item-desc {
      color: #94a3b8 !important;
    }
    html[data-theme="dark"] .prodocu-section-title,
    body.dark-theme .prodocu-section-title,
    html[data-theme="dark"] .prodocu-col-heading,
    body.dark-theme .prodocu-col-heading {
      color: #cbd5e1 !important;
    }
    html[data-theme="dark"] .prodocu-channel-item,
    body.dark-theme .prodocu-channel-item {
      color: #e2e8f0 !important;
    }
    html[data-theme="dark"] .prodocu-channel-item:hover,
    body.dark-theme .prodocu-channel-item:hover {
      background: rgba(255, 255, 255, 0.08) !important;
      color: #ffffff !important;
    }
    html[data-theme="dark"] .prodocu-channel-item.active,
    body.dark-theme .prodocu-channel-item.active {
      background: rgba(255, 255, 255, 0.12) !important;
      color: #ffffff !important;
    }
    html[data-theme="dark"] .prodocu-integrate-card,
    body.dark-theme .prodocu-integrate-card {
      background: rgba(255, 255, 255, 0.04) !important;
      border-color: rgba(255, 255, 255, 0.08) !important;
    }
    html[data-theme="dark"] .prodocu-integrate-title,
    body.dark-theme .prodocu-integrate-title {
      color: #f1f5f9 !important;
    }
    html[data-theme="dark"] .prodocu-int-tile,
    body.dark-theme .prodocu-int-tile {
      background: #ffffff !important;
      border-color: rgba(255, 255, 255, 0.15) !important;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25) !important;
    }
    html[data-theme="dark"] .prodocu-int-arrow,
    body.dark-theme .prodocu-int-arrow {
      background: #034737 !important;
      color: #ffffff !important;
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
      color: #111827 !important;
      line-height: 1.25 !important;
      letter-spacing: -0.01em !important;
      transition: color 0.15s ease !important;
    }

    .prodocu-item:hover .prodocu-item-title {
      color: #034737 !important;
    }

    .prodocu-item-desc {
      font-size: 12px !important;
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
      background: #F8FAFC !important;
      border: 1px solid #E2E8F0 !important;
      border-radius: 16px !important;
      padding: 18px 14px !important;
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
      justify-content: flex-start !important;
      height: 100% !important;
      box-sizing: border-box !important;
    }

    .prodocu-integrate-title {
      font-size: 16px !important;
      font-weight: 700 !important;
      color: #0f172a !important;
      text-align: center !important;
      margin-bottom: 16px !important;
      width: 100% !important;
      line-height: 1.2 !important;
      letter-spacing: -0.01em !important;
    }

    .prodocu-integrate-grid {
      display: grid !important;
      grid-template-columns: repeat(3, 72px) !important;
      gap: 12px !important;
      justify-content: center !important;
      align-items: center !important;
    }

    .prodocu-int-tile {
      width: 72px !important;
      height: 72px !important;
      background: #ffffff !important;
      border: 1.5px solid #e2e8f0 !important;
      border-radius: 14px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      padding: 8px !important;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.04) !important;
      transition: transform 0.15s ease, box-shadow 0.15s ease, border-color 0.15s ease !important;
      text-decoration: none !important;
      box-sizing: border-box !important;
    }

    .prodocu-int-tile:hover {
      transform: translateY(-2px) scale(1.04) !important;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1) !important;
      border-color: #cbd5e1 !important;
    }

    .prodocu-int-tile img {
      max-width: 100% !important;
      max-height: 48px !important;
      width: auto !important;
      height: auto !important;
      object-fit: contain !important;
      display: block !important;
    }

    .prodocu-int-arrow-tile {
      width: 72px !important;
      height: 72px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      background: transparent !important;
      box-shadow: none !important;
    }

    .prodocu-int-arrow {
      width: 50px !important;
      height: 50px !important;
      background: #034737 !important;
      border-radius: 50% !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      color: #ffffff !important;
      text-decoration: none !important;
      transition: transform 0.2s ease, background-color 0.2s ease !important;
      box-shadow: 0 3px 8px rgba(3, 71, 55, 0.28) !important;
    }

    .prodocu-int-arrow:hover {
      transform: scale(1.08) !important;
      background: #04634d !important;
    }

    .prodocu-int-arrow svg {
      width: 22px !important;
      height: 22px !important;
      color: #ffffff !important;
      stroke: #ffffff !important;
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
      width: 22px !important;
      height: 22px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
      border-radius: 5px !important;
    }
    .prodocu-mob-chan-card .chan-icon-wrap svg {
      width: 22px !important;
      height: 22px !important;
      display: block !important;
      border-radius: 5px !important;
    }
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
      max-height: 28px !important;
      max-width: 88% !important;
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
      background: #f8fafc !important;
      transform: translateX(3px) !important;
    }

    .mega-ind-icon {
      width: 38px !important;
      height: 38px !important;
      min-width: 38px !important;
      border-radius: 11px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
      transition: transform 0.22s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.22s ease !important;
    }

    .mega-ind-icon svg {
      width: 20px !important;
      height: 20px !important;
      stroke: currentColor !important;
      stroke-width: 2 !important;
      transition: transform 0.2s ease !important;
    }

    .mega-ind-link:hover .mega-ind-icon {
      transform: scale(1.12) !important;
      box-shadow: 0 4px 14px rgba(0, 0, 0, 0.09) !important;
    }

    /* 12 Industry SaaS Badges */
    .sol-icon-bfsi { background: #DCFCE7 !important; color: #16A34A !important; }
    .sol-icon-healthcare { background: #FFE4E6 !important; color: #E11D48 !important; }
    .sol-icon-retail { background: #FFEDD5 !important; color: #EA580C !important; }
    .sol-icon-travel { background: #E0F2FE !important; color: #0284C7 !important; }
    .sol-icon-education { background: #F3E8FF !important; color: #7C3AED !important; }
    .sol-icon-it { background: #EEF2FF !important; color: #4F46E5 !important; }
    .sol-icon-food { background: #FEF3C7 !important; color: #D97706 !important; }
    .sol-icon-events { background: #FDF4FF !important; color: #C026D3 !important; }
    .sol-icon-realestate { background: #FFF7ED !important; color: #C2410C !important; }
    .sol-icon-auto { background: #EFF6FF !important; color: #2563EB !important; }
    .sol-icon-gov { background: #CCFBF1 !important; color: #0D9488 !important; }
    .sol-icon-manufacturing { background: #F1F5F9 !important; color: #475569 !important; }

    /* Dark Mode Industry Badges */
    html[data-theme="dark"] .sol-icon-bfsi { background: rgba(22, 163, 74, 0.22) !important; color: #86EFAC !important; }
    html[data-theme="dark"] .sol-icon-healthcare { background: rgba(225, 29, 72, 0.22) !important; color: #FDA4AF !important; }
    html[data-theme="dark"] .sol-icon-retail { background: rgba(234, 88, 12, 0.22) !important; color: #FDBA74 !important; }
    html[data-theme="dark"] .sol-icon-travel { background: rgba(2, 132, 199, 0.22) !important; color: #7DD3FC !important; }
    html[data-theme="dark"] .sol-icon-education { background: rgba(124, 58, 237, 0.22) !important; color: #C4B5FD !important; }
    html[data-theme="dark"] .sol-icon-it { background: rgba(79, 70, 229, 0.22) !important; color: #A5B4FC !important; }
    html[data-theme="dark"] .sol-icon-food { background: rgba(217, 119, 6, 0.22) !important; color: #FCD34D !important; }
    html[data-theme="dark"] .sol-icon-events { background: rgba(192, 38, 211, 0.22) !important; color: #F0ABFC !important; }
    html[data-theme="dark"] .sol-icon-realestate { background: rgba(194, 65, 12, 0.22) !important; color: #FDBA74 !important; }
    html[data-theme="dark"] .sol-icon-auto { background: rgba(37, 99, 235, 0.22) !important; color: #93C5FD !important; }
    html[data-theme="dark"] .sol-icon-gov { background: rgba(13, 148, 136, 0.22) !important; color: #5EEAD4 !important; }
    html[data-theme="dark"] .sol-icon-manufacturing { background: rgba(100, 116, 139, 0.22) !important; color: #CBD5E1 !important; }

    /* Dark Mode Solutions Mega Menu Overrides */
    html[data-theme="dark"] .mega-sol-main,
    body.dark-theme .mega-sol-main {
      background: #0f172a !important;
    }
    html[data-theme="dark"] .mega-sol-heading,
    body.dark-theme .mega-sol-heading {
      color: #cbd5e1 !important;
    }
    html[data-theme="dark"] .mega-ind-title,
    body.dark-theme .mega-ind-title {
      color: #f1f5f9 !important;
    }
    html[data-theme="dark"] .mega-ind-link:hover,
    body.dark-theme .mega-ind-link:hover {
      background: rgba(255, 255, 255, 0.06) !important;
    }
    html[data-theme="dark"] .mega-ind-link:hover .mega-ind-title,
    body.dark-theme .mega-ind-link:hover .mega-ind-title {
      color: #38ef7d !important;
    }
    html[data-theme="dark"] .mega-sol-leads-aside,
    body.dark-theme .mega-sol-leads-aside {
      background: linear-gradient(180deg, #111827 0%, #1e293b 100%) !important;
      border-left-color: rgba(255, 255, 255, 0.08) !important;
    }
    html[data-theme="dark"] .mega-leads-title,
    body.dark-theme .mega-leads-title {
      color: #ffffff !important;
    }
    html[data-theme="dark"] .mega-leads-desc,
    body.dark-theme .mega-leads-desc {
      color: #94a3b8 !important;
    }
    html[data-theme="dark"] .btn-mega-leads-secondary,
    body.dark-theme .btn-mega-leads-secondary {
      background: rgba(255, 255, 255, 0.06) !important;
      color: #f1f5f9 !important;
      border-color: rgba(255, 255, 255, 0.15) !important;
    }
    html[data-theme="dark"] .btn-mega-leads-secondary:hover,
    body.dark-theme .btn-mega-leads-secondary:hover {
      background: rgba(255, 255, 255, 0.12) !important;
      color: #ffffff !important;
    }

    /* Mobile drawer industry icons */
    .mob-ind-link {
      display: flex !important;
      align-items: center !important;
      gap: 10px !important;
      padding: 6px 0 !important;
      text-decoration: none !important;
      font-size: 13px !important;
      font-weight: 600 !important;
      color: #1e293b !important;
      transition: color 0.15s ease !important;
    }
    .mob-ind-icon {
      width: 26px !important;
      height: 26px !important;
      min-width: 26px !important;
      border-radius: 7px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
    }
    .mob-ind-icon svg {
      width: 15px !important;
      height: 15px !important;
      stroke: currentColor !important;
      stroke-width: 2 !important;
    }
    html[data-theme="dark"] .mob-ind-link,
    body.dark-theme .mob-ind-link {
      color: #f1f5f9 !important;
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

    html[data-theme="dark"] .mega-ind-title,
    body.dark-theme .mega-ind-title {
      color: #f1f5f9 !important;
    }

    html[data-theme="dark"] .mega-ind-link:hover .mega-ind-title,
    body.dark-theme .mega-ind-link:hover .mega-ind-title {
      color: #38ef7d !important;
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
    .res-icon-rose { background: rgba(244, 63, 94, 0.14) !important; color: #e11d48 !important; }
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

    /* Action Buttons: Lang, Theme, Contact Sales, Log in / Sign up */
    .header-actions {
      display: flex !important;
      align-items: center !important;
      gap: 0.75rem !important;
      flex-shrink: 0 !important;
      margin-left: 1rem !important;
    }


    /* Secondary CTA - Outline Pill Button */
    .header-btn-outline,
    .header-login {
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 6px !important;
      padding: 0.46rem 1.2rem !important;
      font-size: 0.86rem !important;
      font-weight: 600 !important;
      color: #111827 !important;
      background: transparent !important;
      border: 1.5px solid #111827 !important;
      border-radius: 9999px !important;
      text-decoration: none !important;
      white-space: nowrap !important;
      flex-shrink: 0 !important;
      cursor: pointer !important;
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .header-btn-outline:hover,
    .header-login:hover {
      background: #f8fafc !important;
      border-color: #000000 !important;
      color: #000000 !important;
      transform: translateY(-1px) !important;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05) !important;
    }
    .header-btn-outline svg,
    .header-login svg {
      transition: transform 0.2s ease !important;
    }
    .header-btn-outline:hover svg,
    .header-login:hover svg {
      transform: translateX(2px) !important;
    }

    /* Primary CTA - Deep Green Solid Pill Button */
    .header-btn-primary,
    .header-cta-start {
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 6px !important;
      padding: 0.48rem 1.3rem !important;
      font-size: 0.86rem !important;
      font-weight: 600 !important;
      color: #ffffff !important;
      background: #044738 !important;
      border: 1.5px solid #044738 !important;
      border-radius: 9999px !important;
      text-decoration: none !important;
      white-space: nowrap !important;
      flex-shrink: 0 !important;
      cursor: pointer !important;
      box-shadow: 0 4px 14px rgba(4, 71, 56, 0.25) !important;
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .header-btn-primary:hover,
    .header-cta-start:hover {
      background: #03362a !important;
      border-color: #03362a !important;
      color: #ffffff !important;
      transform: translateY(-1px) !important;
      box-shadow: 0 6px 20px rgba(4, 71, 56, 0.38) !important;
    }
    .header-btn-primary svg,
    .header-cta-start svg {
      transition: transform 0.2s ease !important;
    }
    .header-btn-primary:hover svg,
    .header-cta-start:hover svg {
      transform: translateX(2px) !important;
    }

    /* Dark Mode Action Button Variations */
    html[data-theme="dark"] .header-btn-outline,
    html[data-theme="dark"] .header-login,
    body.dark-theme .header-btn-outline,
    body.dark-theme .header-login {
      color: #f8fafc !important;
      border-color: rgba(255, 255, 255, 0.32) !important;
      background: transparent !important;
    }
    html[data-theme="dark"] .header-btn-outline:hover,
    html[data-theme="dark"] .header-login:hover,
    body.dark-theme .header-btn-outline:hover,
    body.dark-theme .header-login:hover {
      background: rgba(255, 255, 255, 0.1) !important;
      border-color: #ffffff !important;
      color: #ffffff !important;
    }
    html[data-theme="dark"] .header-btn-primary,
    html[data-theme="dark"] .header-cta-start,
    body.dark-theme .header-btn-primary,
    body.dark-theme .header-cta-start {
      background: #059669 !important;
      border-color: #059669 !important;
      color: #ffffff !important;
      box-shadow: 0 4px 16px rgba(5, 150, 105, 0.35) !important;
    }
    html[data-theme="dark"] .header-btn-primary:hover,
    html[data-theme="dark"] .header-cta-start:hover,
    body.dark-theme .header-btn-primary:hover,
    body.dark-theme .header-cta-start:hover {
      background: #047857 !important;
      border-color: #047857 !important;
      color: #ffffff !important;
      box-shadow: 0 6px 20px rgba(5, 150, 105, 0.45) !important;
    }

    .lang-switch-btn {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.32rem !important;
      padding: 0.38rem 0.65rem !important;
      border-radius: 999px !important;
      border: 1.5px solid #cbd5e1 !important;
      background: #ffffff !important;
      font-size: 0.78rem !important;
      font-weight: 700 !important;
      color: #334155 !important;
      cursor: pointer !important;
      white-space: nowrap !important;
      flex-shrink: 0 !important;
      transition: all 0.2s ease !important;
    }
    .lang-switch-btn:hover {
      border-color: #044738 !important;
      color: #044738 !important;
    }
    html[data-theme="dark"] .lang-switch-btn,
    body.dark-theme .lang-switch-btn {
      background: rgba(30, 41, 59, 0.8) !important;
      border-color: rgba(255, 255, 255, 0.16) !important;
      color: #f1f5f9 !important;
    }

    /* Screen Adaptability - Responsive Breakpoints */
    @media (max-width: 1240px) {
      .header-inner {
        padding: 0 1.25rem !important;
      }
      .nav-desktop {
        gap: 0.75rem !important;
      }
      .nav-link {
        padding: 0.4rem 0.5rem !important;
        font-size: 0.88rem !important;
      }
      .header-btn-outline,
      .header-login {
        padding: 0.42rem 0.95rem !important;
        font-size: 0.82rem !important;
      }
      .header-btn-primary,
      .header-cta-start {
        padding: 0.42rem 1.05rem !important;
        font-size: 0.82rem !important;
      }
    }
    @media (max-width: 1080px) {
      .nav-desktop {
        display: none !important;
      }
      .mobile-toggle {
        display: flex !important;
      }
      .header-btn-outline,
      .header-login {
        display: none !important;
      }
      .header-btn-primary,
      .header-cta-start {
        padding: 0.42rem 0.95rem !important;
        font-size: 0.8rem !important;
      }
      .header-inner {
        height: 60px !important;
        padding: 0 1rem !important;
      }
      .site-header.scrolled .header-inner {
        height: 52px !important;
      }
    }
    @media (max-width: 600px) {
      .header-btn-primary,
      .header-cta-start {
        display: none !important;
      }
      .header-actions {
        gap: 6px !important;
        margin-left: 0.25rem !important;
      }
      .lang-switch-btn {
        padding: 0.28rem 0.48rem !important;
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
      function handleScroll() {
        var header = document.querySelector('.site-header');
        if (header) {
          if (window.scrollY > 20) {
            header.classList.add('scrolled');
          } else {
            header.classList.remove('scrolled');
          }
        }
      }

      window.addEventListener('scroll', handleScroll, { passive: true });
      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', handleScroll);
      } else {
        handleScroll();
      }
    })();
  </script>
  <!-- HelloBotz Live CMS Client Runtime (Propagates brand logos, bot avatar, sizing, and links) -->
  <script src="/assets/js/hb-cms-runtime.js" defer></script>
  <!-- HelloBotz Pure Mascot Entry Reveal Runtime (2.5s Zero-Word Greeting) -->
  <script src="/assets/js/entry-reveal.js?v=1" defer></script>
  <!-- HelloBotz Interactive Top Announcement & Offers Carousel Runtime -->
  <script src="/assets/js/announcement.js?v=1" defer></script>
</head>
<body>

  <!-- =========================================================================
       HELLOBOTZ PURE MASCOT ENTRY REVEAL (2-3s Pure Animated Greeting)
       ========================================================================= -->
  <div id="hb-entry-reveal" class="hb-entry-reveal" role="presentation" aria-hidden="true">
    <div class="hb-entry-aura"></div>
    <div class="hb-entry-stage">
      <div class="hb-entry-sparkles">
        <span class="hb-sparkle s1">✦</span>
        <span class="hb-sparkle s2">✦</span>
        <span class="hb-sparkle s3">✦</span>
        <span class="hb-sparkle s4">✦</span>
      </div>
      <div class="hb-entry-bot-wrap">
        <img class="hb-entry-bot-base" src="/assets/images/entry/bot-body.png" alt="HelloBotz Mascot" width="512" height="512" fetchpriority="high">
        <img class="hb-entry-bot-hand" src="/assets/images/entry/bot-hand.png" alt="Waving Hand" width="512" height="512" fetchpriority="high">
      </div>
    </div>
  </div>

  <!-- =========================================================================
       HELLOBOTZ INTERACTIVE TOP ANNOUNCEMENT & OFFERS SCROLL CAROUSEL
       ========================================================================= -->
  <aside class="announcement-banner hb-announcement-bar" id="hb-announcement-bar" role="region" aria-label="Offers & Updates Carousel">
    <div class="hb-ann-inner">
      <div class="hb-ann-center">
        <!-- Previous Offer Button -->
        <button type="button" class="hb-ann-btn hb-ann-prev" id="hb-ann-prev" aria-label="Previous announcement" title="Previous announcement">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
        </button>

        <!-- Carousel Track Viewport -->
        <div class="hb-ann-viewport">
          <div class="hb-ann-track">
            
            <!-- Slide 1: Special Limited Offer -->
            <div class="hb-ann-slide is-active" data-index="0" role="group" aria-roledescription="slide" aria-label="1 of 5">
              <a href="/pricing/" class="hb-ann-link">
                <span class="hb-ann-badge hb-badge-offer"><span class="hb-badge-pulse"></span><svg class="hb-badge-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg> LIMITED OFFER</span>
                <span class="hb-ann-text"><?php if ($announcementEnabled && !empty($announcementText)): ?><strong><?php echo htmlspecialchars($announcementText); ?></strong><?php else: ?><strong>Flat 20% OFF</strong> on All Annual WhatsApp API &amp; AI Chatbot Plans — Code: <mark class="hb-ann-code">HB20OFF</mark><?php endif; ?></span>
                <span class="hb-ann-cta">Claim Discount <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
              </a>
            </div>

            <!-- Slide 2: Major Release Update -->
            <div class="hb-ann-slide" data-index="1" role="group" aria-roledescription="slide" aria-label="2 of 5" aria-hidden="true">
              <a href="/products/whatsapp-api/" class="hb-ann-link">
                <span class="hb-ann-badge hb-badge-update"><svg class="hb-badge-svg" viewBox="0 0 24 24" fill="currentColor"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg> NEW UPDATE</span>
                <span class="hb-ann-text">Official Meta WhatsApp Cloud API v20.0 with <strong>99.99% Uptime &amp; 0% Ban Shield</strong></span>
                <span class="hb-ann-cta">Explore API <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
              </a>
            </div>

            <!-- Slide 3: Official Announcement -->
            <div class="hb-ann-slide" data-index="2" role="group" aria-roledescription="slide" aria-label="3 of 5" aria-hidden="true">
              <a href="/products/whatsapp-blue-tick/" class="hb-ann-link">
                <span class="hb-ann-badge hb-badge-announcement"><svg class="hb-badge-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="6 3 18 3 22 9 12 22 2 9"/><polyline points="11 3 8 9 12 22 16 9 13 3"/><line x1="2" y1="9" x2="22" y2="9"/></svg> ANNOUNCEMENT</span>
                <span class="hb-ann-text"><strong>Free Meta Official Green Tick Verification</strong> included with Pro &amp; Enterprise Plans</span>
                <span class="hb-ann-cta">Get Verified <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
              </a>
            </div>

            <!-- Slide 4: New Omnichannel Inbox -->
            <div class="hb-ann-slide" data-index="3" role="group" aria-roledescription="slide" aria-label="4 of 5" aria-hidden="true">
              <a href="/products/shared-inbox/" class="hb-ann-link">
                <span class="hb-ann-badge hb-badge-feature"><svg class="hb-badge-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4.5c1.62-1.63 5-2 5-2"/><path d="M12 15v5s3.03-.55 4.5-2c1.63-1.62 2-5 2-5"/></svg> NEW FEATURE</span>
                <span class="hb-ann-text">Omnichannel Team Inbox Live: WhatsApp, Instagram DM &amp; Messenger in One Screen</span>
                <span class="hb-ann-cta">See Demo <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
              </a>
            </div>

            <!-- Slide 5: White-Label Partner Program -->
            <div class="hb-ann-slide" data-index="4" role="group" aria-roledescription="slide" aria-label="5 of 5" aria-hidden="true">
              <a href="/partners/white-label/" class="hb-ann-link">
                <span class="hb-ann-badge hb-badge-partner"><svg class="hb-badge-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg> WHITE-LABEL</span>
                <span class="hb-ann-text">Launch Your Own Branded WhatsApp SaaS — <strong>Keep 100% Client Margins</strong></span>
                <span class="hb-ann-cta">Become a Partner <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
              </a>
            </div>

          </div>
        </div>

        <!-- Next Offer Button -->
        <button type="button" class="hb-ann-btn hb-ann-next" id="hb-ann-next" aria-label="Next announcement" title="Next announcement">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </button>

        <!-- Offer Counter Indicator -->
        <div class="hb-ann-counter" id="hb-ann-counter" aria-label="Announcement counter">
          <span class="hb-ann-current">1</span>/<span class="hb-ann-total">5</span>
        </div>
      </div>

      <!-- Dismiss Button -->
      <button type="button" class="hb-ann-btn hb-ann-close" id="hb-ann-close" aria-label="Dismiss announcement" title="Dismiss">
        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
      </button>
    </div>
  </aside>

  <a href="#main" class="skip-link">Skip to content</a>
  <header class="site-header" role="banner">
    <div class="header-inner">
      <div class="logo-dock-wrapper" id="logo-dock-wrapper">
        <a href="<?php echo $bp; ?>" class="logo site-main-logo" id="site-logo" aria-label="<?php echo htmlspecialchars($SITE_NAME); ?> Home">
          <img src="<?php echo htmlspecialchars($cmsLogoLight); ?>" alt="<?php echo htmlspecialchars($SITE_NAME); ?>" class="logo-img logo-img-light" width="160" height="52">
          <img src="<?php echo htmlspecialchars($cmsLogoDark); ?>" alt="<?php echo htmlspecialchars($SITE_NAME); ?>" class="logo-img logo-img-dark" width="160" height="52">
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
                  <a href="<?php echo $bp; ?>channel/whatsapp/" class="prodocu-channel-item active" title="WhatsApp Channel">
                    <span class="prodocu-chan-icon">
                      <svg viewBox="0 0 24 24" width="22" height="22" fill="none">
                        <circle cx="12" cy="12" r="12" fill="#25D366"/>
                        <path d="M12.04 4C7.6 4 4 7.6 4 12.04c0 1.54.44 2.99 1.2 4.23L4 20l3.86-1.18c1.19.7 2.58 1.1 4.18 1.1 4.44 0 8.04-3.6 8.04-8.04 0-4.44-3.6-7.88-8.04-7.88zm4.73 11.23c-.2.56-1.17 1.07-1.63 1.14-.42.06-.97.09-2.77-.66-2.31-.96-3.8-3.32-3.91-3.48-.12-.15-.93-1.24-.93-2.36 0-1.12.59-1.67.8-1.9.21-.23.46-.29.62-.29.15 0 .31 0 .44.01.14.01.33-.05.51.39.19.45.65 1.58.71 1.7.06.11.1.25.02.4-.07.14-.11.24-.22.37-.12.13-.24.3-.35.4-.12.11-.24.23-.1.47.14.24.63 1.04 1.35 1.68.93.83 1.71 1.09 1.95 1.21.24.12.38.1.53-.06.14-.17.6-.7.76-.94.16-.24.32-.2.53-.12.22.08 1.38.65 1.62.77.24.12.4.18.46.28.06.1.06.6-.14 1.15z" fill="#FFFFFF"/>
                      </svg>
                    </span>
                    <span>WhatsApp</span>
                  </a>
                  <a href="<?php echo $bp; ?>channel/instagram/" class="prodocu-channel-item" title="Instagram Channel">
                    <span class="prodocu-chan-icon">
                      <svg viewBox="0 0 24 24" width="22" height="22" fill="none">
                        <defs>
                          <radialGradient id="igGradDesk" cx="20%" cy="105%" r="125%">
                            <stop offset="0%" stop-color="#FFD600"/>
                            <stop offset="15%" stop-color="#FF7A00"/>
                            <stop offset="50%" stop-color="#FF0069"/>
                            <stop offset="85%" stop-color="#D300C5"/>
                            <stop offset="100%" stop-color="#7638FA"/>
                          </radialGradient>
                        </defs>
                        <rect width="24" height="24" rx="5.5" fill="url(#igGradDesk)"/>
                        <rect x="5" y="5" width="14" height="14" rx="3.8" stroke="#FFFFFF" stroke-width="1.8" fill="none"/>
                        <circle cx="12" cy="12" r="3.4" stroke="#FFFFFF" stroke-width="1.8" fill="none"/>
                        <circle cx="16" cy="8" r="1.1" fill="#FFFFFF"/>
                      </svg>
                    </span>
                    <span>Instagram</span>
                  </a>
                  <a href="<?php echo $bp; ?>channel/facebook/" class="prodocu-channel-item" title="Facebook Channel">
                    <span class="prodocu-chan-icon">
                      <svg viewBox="0 0 24 24" width="22" height="22" fill="none">
                        <circle cx="12" cy="12" r="12" fill="#1877F2"/>
                        <path d="M15.1 12.5h-2.3v7.4h-3.1v-7.4H7.9V9.9h1.8V8.1c0-2.4 1.4-3.8 3.7-3.8 1.1 0 2.2.2 2.2.2v2.4h-1.2c-1.2 0-1.6.7-1.6 1.5v1.5h2.8l-.5 2.6z" fill="#FFFFFF"/>
                      </svg>
                    </span>
                    <span>Facebook</span>
                  </a>
                  <a href="<?php echo $bp; ?>channel/telegram/" class="prodocu-channel-item" title="Telegram Channel">
                    <span class="prodocu-chan-icon">
                      <svg viewBox="0 0 24 24" width="22" height="22" fill="none">
                        <defs>
                          <linearGradient id="tgGradDesk" x1="50%" y1="0%" x2="50%" y2="100%">
                            <stop offset="0%" stop-color="#2AABEE"/>
                            <stop offset="100%" stop-color="#229ED9"/>
                          </linearGradient>
                        </defs>
                        <circle cx="12" cy="12" r="12" fill="url(#tgGradDesk)"/>
                        <path d="M5.4 11.9l12.4-4.8c.6-.2 1.1.1.9.8l-2.1 10c-.2.7-.6.9-1.2.5l-3.2-2.4-1.5 1.5c-.2.2-.3.3-.6.3l.2-3.3 6-5.4c.3-.2-.1-.4-.4-.2l-7.4 4.7-3.2-1c-.7-.2-.7-.7.1-1z" fill="#FFFFFF"/>
                      </svg>
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
                    <div class="prodocu-item-icon pro-icon-broadcast">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11l15-5v12L3 13v-2z"/><path d="M11.6 16.8l1.4 4.2a1 1 0 0 0 1.2.6l1.8-.6a1 1 0 0 0 .6-1.2l-1.4-4.2"/><path d="M19 8a4 4 0 0 1 0 8"/><path d="M21 6a7 7 0 0 1 0 12"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Broadcast</span>
                      <span class="prodocu-item-desc">Send bulk messages</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/ctwa/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon pro-icon-ctwa">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/><path d="M10 8l4 4-2 1 1 3-4-4 2-1-1-3z" fill="currentColor"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">CTWA</span>
                      <span class="prodocu-item-desc">Click to WhatsApp ads</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/automation/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon pro-icon-drip">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Drip Campaign</span>
                      <span class="prodocu-item-desc">Automated sequences</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/catalog/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon pro-icon-catalog">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Catalog</span>
                      <span class="prodocu-item-desc">Showcase products</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/whatsapp-form/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon pro-icon-form">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/><path d="M9 12l2 2 4-4"/><path d="M9 17h6"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">WhatsApp Form/Flow</span>
                      <span class="prodocu-item-desc">Interactive forms</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/whatsapp-blue-tick/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon pro-icon-bluetick">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.4 2.6 3.5-.4 1.2 3.3 3.3 1.2-.4 3.5 2.6 2.4-2.6 2.4.4 3.5-3.3 1.2-1.2 3.3-3.5-.4L12 22l-2.4-2.6-3.5.4-1.2-3.3-3.3-1.2.4-3.5L2 12l2.6-2.4-.4-3.5 3.3-1.2 1.2-3.3 3.5.4z" fill="currentColor" fill-opacity="0.15"/><polyline points="9 12 11 14 15 10"/></svg>
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
                    <div class="prodocu-item-icon pro-icon-chatbot">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="8" width="18" height="12" rx="4"/><path d="M12 2v6"/><circle cx="9" cy="14" r="1.5" fill="currentColor"/><circle cx="15" cy="14" r="1.5" fill="currentColor"/><line x1="9" y1="18" x2="15" y2="18"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">AI Chatbot</span>
                      <span class="prodocu-item-desc">Automate conversations</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/whatsapp-payments/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon pro-icon-payment">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="3"/><line x1="2" y1="10" x2="22" y2="10"/><line x1="6" y1="15" x2="10" y2="15"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">WhatsApp Payment</span>
                      <span class="prodocu-item-desc">Accept payments</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/catalog/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon pro-icon-catalog-sales">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Catalog</span>
                      <span class="prodocu-item-desc">Display products</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/whatsapp-interactive-messages/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon pro-icon-interactive">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/><circle cx="18" cy="5" r="2.5" fill="currentColor"/></svg>
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
                    <div class="prodocu-item-icon pro-icon-inbox">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><path d="M8 10h8M8 14h4"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Team Inbox</span>
                      <span class="prodocu-item-desc">Unified conversations</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/ai-agent/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon pro-icon-ai-agent">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l1.9 4.9a2 2 0 0 0 1.2 1.2L20 11l-4.9 1.9a2 2 0 0 0-1.2 1.2L12 19l-1.9-4.9a2 2 0 0 0-1.2-1.2L4 11l4.9-1.9a2 2 0 0 0 1.2-1.2L12 3z"/><path d="M19 3l.6 1.4a1 1 0 0 0 .6.6L21.6 5.6l-1.4.6a1 1 0 0 0-.6.6L19 8.2l-.6-1.4a1 1 0 0 0-.6-.6L16.4 5.6l1.4-.6a1 1 0 0 0 .6-.6L19 3z"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">AI Assistant</span>
                      <span class="prodocu-item-desc">Smart responses</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>solutions/feedback-surveys/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon pro-icon-feedback">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    </div>
                    <div class="prodocu-item-content">
                      <span class="prodocu-item-title">Feedback Collection</span>
                      <span class="prodocu-item-desc">Gather insights</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/analytics/" class="prodocu-item" role="menuitem">
                    <div class="prodocu-item-icon pro-icon-analytics">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
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
                      <img src="<?php echo $bp; ?>assets/images/integrations/zoho.png" alt="Zoho" width="48" height="48" loading="lazy">
                    </a>
                    <a href="<?php echo $bp; ?>integrations/google-sheets/" class="prodocu-int-tile" title="Google Sheets">
                      <img src="<?php echo $bp; ?>assets/images/integrations/google-sheet.png" alt="Google Sheets" width="48" height="48" loading="lazy">
                    </a>
                    <a href="<?php echo $bp; ?>integrations/shopify/" class="prodocu-int-tile" title="Shopify">
                      <img src="<?php echo $bp; ?>assets/images/integrations/shopify.png" alt="Shopify" width="48" height="48" loading="lazy">
                    </a>
                    <a href="<?php echo $bp; ?>integrations/woocommerce/" class="prodocu-int-tile" title="WooCommerce">
                      <img src="<?php echo $bp; ?>assets/images/integrations/woocommerce.png" alt="WooCommerce" width="48" height="48" loading="lazy">
                    </a>
                    <a href="<?php echo $bp; ?>integrations/wortal/" class="prodocu-int-tile" title="Wortal">
                      <img src="<?php echo $bp; ?>assets/images/integrations/wortal.png" alt="Wortal" width="48" height="48" loading="lazy">
                    </a>
                    <a href="<?php echo $bp; ?>integrations/" class="prodocu-int-tile" title="GoTab">
                      <img src="<?php echo $bp; ?>assets/images/integrations/gotab.png" alt="GoTab" width="48" height="48" loading="lazy">
                    </a>
                    <a href="<?php echo $bp; ?>integrations/shiprocket/" class="prodocu-int-tile" title="Shiprocket">
                      <img src="<?php echo $bp; ?>assets/images/integrations/shiprocket.png" alt="Shiprocket" width="48" height="48" loading="lazy">
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
                      <span class="mega-ind-icon sol-icon-bfsi">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M3 10h18M5 10v11M19 10v11M9 10v11M15 10v11M12 3L2 10h20L12 3z"/><circle cx="12" cy="15.5" r="1.5" fill="currentColor"/></svg>
                      </span>
                      <span class="mega-ind-title">Banking &amp; Finance</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/healthcare/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon sol-icon-healthcare">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/><path d="M12 8v5m-2.5-2.5h5"/></svg>
                      </span>
                      <span class="mega-ind-title">Health &amp; Wellness</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/retail-and-ecommerce/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon sol-icon-retail">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/><path d="M12 9l2 2 4-4"/></svg>
                      </span>
                      <span class="mega-ind-title">Retail &amp; E-commerce</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/travel-and-hospitality/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon sol-icon-travel">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/><path d="m14 8 4 4-4 4"/></svg>
                      </span>
                      <span class="mega-ind-title">Travel &amp; Hospitality</span>
                    </a>
                  </div>

                  <!-- Column 2 -->
                  <div class="mega-ind-col">
                    <a href="<?php echo $bp; ?>industry/education-and-social-impacts/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon sol-icon-education">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/><circle cx="12" cy="12" r="1.5" fill="currentColor"/></svg>
                      </span>
                      <span class="mega-ind-title">Education &amp; Social Impacts</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/communication-and-it/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon sol-icon-it">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/><polyline points="7 8 10 10.5 7 13"/><line x1="12" y1="13" x2="16" y2="13"/></svg>
                      </span>
                      <span class="mega-ind-title">Communication &amp; IT</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/food-and-beverages/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon sol-icon-food">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
                      </span>
                      <span class="mega-ind-title">Food &amp; Beverage</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/advertising-and-events/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon sol-icon-events">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11l15-5v12L3 13v-2z"/><path d="M11.6 16.8l1.4 4.2a1 1 0 0 0 1.2.6l1.8-.6a1 1 0 0 0 .6-1.2l-1.4-4.2"/><path d="M19 8a4 4 0 0 1 0 8"/><path d="M21 6a7 7 0 0 1 0 12"/></svg>
                      </span>
                      <span class="mega-ind-title">Advertising &amp; Events</span>
                    </a>
                  </div>

                  <!-- Column 3 -->
                  <div class="mega-ind-col">
                    <a href="<?php echo $bp; ?>industry/construction-and-real-estate/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon sol-icon-realestate">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V7l8-4v18"/><path d="M19 21V11l-6-4"/><line x1="9" y1="9" x2="9" y2="9.01"/><line x1="9" y1="13" x2="9" y2="13.01"/><line x1="9" y1="17" x2="9" y2="17.01"/><line x1="15" y1="13" x2="15" y2="13.01"/><line x1="15" y1="17" x2="15" y2="17.01"/></svg>
                      </span>
                      <span class="mega-ind-title">Construction &amp; Real Estate</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/automobiles-and-transport/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon sol-icon-auto">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.5 2.8C2.1 11.2 2 11.6 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></svg>
                      </span>
                      <span class="mega-ind-title">Automobiles &amp; Transport</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/government-and-utilities/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon sol-icon-gov">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v3M4 10h16M2 21h20M5 10v8M19 10v8M9 10v8M15 10v8M12 5l8 5H4l8-5z"/></svg>
                      </span>
                      <span class="mega-ind-title">Government &amp; Utilities</span>
                    </a>
                    <a href="<?php echo $bp; ?>industry/manufacturing-and-supply/" class="mega-ind-link" role="menuitem">
                      <span class="mega-ind-icon sol-icon-manufacturing">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/><circle cx="17" cy="17" r="1" fill="currentColor"/><circle cx="12" cy="17" r="1" fill="currentColor"/><circle cx="7" cy="17" r="1" fill="currentColor"/></svg>
                      </span>
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

                  <a href="<?php echo $bp; ?>integrations/api-webhooks/" class="mega-res-link" role="menuitem">
                    <div class="res-icon-wrap res-icon-cyan">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                    </div>
                    <div class="res-text">
                      <span class="res-title">API &amp; Webhooks</span>
                      <span class="res-desc">Developer REST API reference</span>
                    </div>
                  </a>

                  <a href="<?php echo $bp; ?>careers/" class="mega-res-link" role="menuitem">
                    <div class="res-icon-wrap res-icon-rose">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                    </div>
                    <div class="res-text">
                      <span class="res-title" style="display:flex;align-items:center;gap:6px;">
                        Careers
                        <span style="font-size:9.5px;font-weight:800;background:linear-gradient(135deg,#7C3AED,#10B981);color:#fff;padding:2px 7px;border-radius:9999px;letter-spacing:0.04em;">HIRING</span>
                      </span>
                      <span class="res-desc">Join our team &amp; build AI tech</span>
                    </div>
                  </a>

                  <a href="<?php echo $bp; ?>about/" class="mega-res-link" role="menuitem">
                    <div class="res-icon-wrap res-icon-cyan">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                    </div>
                    <div class="res-text">
                      <span class="res-title">About HelloBotz</span>
                      <span class="res-desc">Mission, team &amp; Meta partnership</span>
                    </div>
                  </a>
                </div>
              </div>

              <!-- Right: Support / Onboarding Promo -->
              <div class="mega-resources-aside">
                <span class="mega-res-badge">SUPPORT &amp; ONBOARDING</span>
                <h4 class="mega-res-title">Need 1-on-1 Help?</h4>
                <p class="mega-res-desc">Our WhatsApp API architects help you setup flows, Meta Cloud API verification, and CRM integrations.</p>
                <a href="<?php echo $bp; ?>#contact-section" class="btn-mega-res-primary">Talk to Support &rarr;</a>
                <button type="button" class="btn-mega-res-secondary" onclick="if(window.openDemoModal) window.openDemoModal(); else window.location.href='/#contact-section';">Schedule Free Demo</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 4. PRICING -->
        <div class="nav-item"><a href="/pricing/" class="nav-link">Pricing</a></div>

        <div class="nav-item"><a href="<?php echo $bp; ?>partners/" class="nav-link">Partners</a></div>

        <div class="nav-item"><a href="<?php echo $bp; ?>about/" class="nav-link">About</a></div>
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
        <!-- Dark / Light Mode Toggle Button -->
        <button type="button" class="theme-toggle-btn" id="theme-toggle-btn" aria-label="Toggle dark or light mode" title="Toggle dark / light mode">
          <span class="theme-icon-sun" aria-hidden="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
          </span>
          <span class="theme-icon-moon" aria-hidden="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
          </span>
        </button>
        <a href="<?php echo $bp; ?>auth/login" class="header-login header-btn-outline">
          <span>Login</span>
        </a>
        <a href="<?php echo $bp; ?>auth/register" class="header-cta-start header-btn-primary">
          <span>Sign Up</span>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
        <button type="button" class="mobile-toggle" aria-label="Open menu" aria-expanded="false"><span></span><span></span><span></span></button>
      </div>
    </div>
  </header>

  <div class="mobile-menu" id="mobile-menu" role="dialog" aria-label="Mobile navigation" hidden aria-hidden="true">
    <div class="mobile-backdrop"></div>
    <div class="mobile-drawer">
      <div class="mobile-drawer-header">
        <a href="<?php echo $bp; ?>" class="logo" aria-label="<?php echo htmlspecialchars($SITE_NAME); ?> Home">
          <img src="<?php echo $bp; ?>assets/images/logo-light.png" alt="<?php echo htmlspecialchars($SITE_NAME); ?>" class="logo-img logo-img-light" width="150" height="48">
          <img src="<?php echo $bp; ?>assets/images/logo-dark.png" alt="<?php echo htmlspecialchars($SITE_NAME); ?>" class="logo-img logo-img-dark" width="150" height="48">
        </a>
        <button type="button" class="mobile-close btn btn-icon btn-ghost" aria-label="Close menu"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg></button>
      </div>
      <div class="mobile-drawer-body">
        <!-- PRODUCTS ACCORDION -->
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Products <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu">
            <div class="prodocu-mob-container">
              
              <!-- Channels Section -->
              <div class="prodocu-mob-section-title">CHANNELS</div>
              <div class="prodocu-mob-chan-grid">
                <a href="<?php echo $bp; ?>channel/whatsapp/" class="prodocu-mob-chan-card" title="WhatsApp Channel">
                  <span class="chan-icon-wrap chan-wa">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="none">
                      <circle cx="12" cy="12" r="12" fill="#25D366"/>
                      <path d="M12.04 4C7.6 4 4 7.6 4 12.04c0 1.54.44 2.99 1.2 4.23L4 20l3.86-1.18c1.19.7 2.58 1.1 4.18 1.1 4.44 0 8.04-3.6 8.04-8.04 0-4.44-3.6-7.88-8.04-7.88zm4.73 11.23c-.2.56-1.17 1.07-1.63 1.14-.42.06-.97.09-2.77-.66-2.31-.96-3.8-3.32-3.91-3.48-.12-.15-.93-1.24-.93-2.36 0-1.12.59-1.67.8-1.9.21-.23.46-.29.62-.29.15 0 .31 0 .44.01.14.01.33-.05.51.39.19.45.65 1.58.71 1.7.06.11.1.25.02.4-.07.14-.11.24-.22.37-.12.13-.24.3-.35.4-.12.11-.24.23-.1.47.14.24.63 1.04 1.35 1.68.93.83 1.71 1.09 1.95 1.21.24.12.38.1.53-.06.14-.17.6-.7.76-.94.16-.24.32-.2.53-.12.22.08 1.38.65 1.62.77.24.12.4.18.46.28.06.1.06.6-.14 1.15z" fill="#FFFFFF"/>
                    </svg>
                  </span>
                  <span>WhatsApp</span>
                </a>
                <a href="<?php echo $bp; ?>channel/instagram/" class="prodocu-mob-chan-card" title="Instagram Channel">
                  <span class="chan-icon-wrap chan-ig">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="none">
                      <defs>
                        <radialGradient id="igGradMob" cx="20%" cy="105%" r="125%">
                          <stop offset="0%" stop-color="#FFD600"/>
                          <stop offset="15%" stop-color="#FF7A00"/>
                          <stop offset="50%" stop-color="#FF0069"/>
                          <stop offset="85%" stop-color="#D300C5"/>
                          <stop offset="100%" stop-color="#7638FA"/>
                        </radialGradient>
                      </defs>
                      <rect width="24" height="24" rx="5.5" fill="url(#igGradMob)"/>
                      <rect x="5" y="5" width="14" height="14" rx="3.8" stroke="#FFFFFF" stroke-width="1.8" fill="none"/>
                      <circle cx="12" cy="12" r="3.4" stroke="#FFFFFF" stroke-width="1.8" fill="none"/>
                      <circle cx="16" cy="8" r="1.1" fill="#FFFFFF"/>
                    </svg>
                  </span>
                  <span>Instagram</span>
                </a>
                <a href="<?php echo $bp; ?>channel/facebook/" class="prodocu-mob-chan-card" title="Facebook Channel">
                  <span class="chan-icon-wrap chan-fb">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="none">
                      <circle cx="12" cy="12" r="12" fill="#1877F2"/>
                      <path d="M15.1 12.5h-2.3v7.4h-3.1v-7.4H7.9V9.9h1.8V8.1c0-2.4 1.4-3.8 3.7-3.8 1.1 0 2.2.2 2.2.2v2.4h-1.2c-1.2 0-1.6.7-1.6 1.5v1.5h2.8l-.5 2.6z" fill="#FFFFFF"/>
                    </svg>
                  </span>
                  <span>Facebook</span>
                </a>
                <a href="<?php echo $bp; ?>channel/telegram/" class="prodocu-mob-chan-card" title="Telegram Channel">
                  <span class="chan-icon-wrap chan-tg">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="none">
                      <defs>
                        <linearGradient id="tgGradMob" x1="50%" y1="0%" x2="50%" y2="100%">
                          <stop offset="0%" stop-color="#2AABEE"/>
                          <stop offset="100%" stop-color="#229ED9"/>
                        </linearGradient>
                      </defs>
                      <circle cx="12" cy="12" r="12" fill="url(#tgGradMob)"/>
                      <path d="M5.4 11.9l12.4-4.8c.6-.2 1.1.1.9.8l-2.1 10c-.2.7-.6.9-1.2.5l-3.2-2.4-1.5 1.5c-.2.2-.3.3-.6.3l.2-3.3 6-5.4c.3-.2-.1-.4-.4-.2l-7.4 4.7-3.2-1c-.7-.2-.7-.7.1-1z" fill="#FFFFFF"/>
                    </svg>
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
                  <div class="prodocu-item-icon pro-icon-broadcast">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11l15-5v12L3 13v-2z"/><path d="M11.6 16.8l1.4 4.2a1 1 0 0 0 1.2.6l1.8-.6a1 1 0 0 0 .6-1.2l-1.4-4.2"/><path d="M19 8a4 4 0 0 1 0 8"/><path d="M21 6a7 7 0 0 1 0 12"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">Broadcast</span>
                    <span class="prodocu-item-desc">Send bulk messages</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/ctwa/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon pro-icon-ctwa">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/><path d="M10 8l4 4-2 1 1 3-4-4 2-1-1-3z" fill="currentColor"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">CTWA</span>
                    <span class="prodocu-item-desc">Click to WhatsApp ads</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/automation/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon pro-icon-drip">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">Drip Campaign</span>
                    <span class="prodocu-item-desc">Automated sequences</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/catalog/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon pro-icon-catalog">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">Catalog</span>
                    <span class="prodocu-item-desc">Showcase products</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/whatsapp-form/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon pro-icon-form">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/><path d="M9 12l2 2 4-4"/><path d="M9 17h6"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">WhatsApp Form/Flow</span>
                    <span class="prodocu-item-desc">Interactive forms</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/whatsapp-blue-tick/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon pro-icon-bluetick">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.4 2.6 3.5-.4 1.2 3.3 3.3 1.2-.4 3.5 2.6 2.4-2.6 2.4.4 3.5-3.3 1.2-1.2 3.3-3.5-.4L12 22l-2.4-2.6-3.5.4-1.2-3.3-3.3-1.2.4-3.5L2 12l2.6-2.4-.4-3.5 3.3-1.2 1.2-3.3 3.5.4z" fill="currentColor" fill-opacity="0.15"/><polyline points="9 12 11 14 15 10"/></svg>
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
                  <div class="prodocu-item-icon pro-icon-chatbot">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="8" width="18" height="12" rx="4"/><path d="M12 2v6"/><circle cx="9" cy="14" r="1.5" fill="currentColor"/><circle cx="15" cy="14" r="1.5" fill="currentColor"/><line x1="9" y1="18" x2="15" y2="18"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">AI Chatbot</span>
                    <span class="prodocu-item-desc">Automate conversations</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/whatsapp-payments/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon pro-icon-payment">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="3"/><line x1="2" y1="10" x2="22" y2="10"/><line x1="6" y1="15" x2="10" y2="15"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">WhatsApp Payment</span>
                    <span class="prodocu-item-desc">Accept payments</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/catalog/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon pro-icon-catalog-sales">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">Catalog</span>
                    <span class="prodocu-item-desc">Display products</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/whatsapp-interactive-messages/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon pro-icon-interactive">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/><circle cx="18" cy="5" r="2.5" fill="currentColor"/></svg>
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
                  <div class="prodocu-item-icon pro-icon-inbox">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><path d="M8 10h8M8 14h4"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">Team Inbox</span>
                    <span class="prodocu-item-desc">Unified conversations</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/ai-agent/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon pro-icon-ai-agent">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l1.9 4.9a2 2 0 0 0 1.2 1.2L20 11l-4.9 1.9a2 2 0 0 0-1.2 1.2L12 19l-1.9-4.9a2 2 0 0 0-1.2-1.2L4 11l4.9-1.9a2 2 0 0 0 1.2-1.2L12 3z"/><path d="M19 3l.6 1.4a1 1 0 0 0 .6.6L21.6 5.6l-1.4.6a1 1 0 0 0-.6.6L19 8.2l-.6-1.4a1 1 0 0 0-.6-.6L16.4 5.6l1.4-.6a1 1 0 0 0 .6-.6L19 3z"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">AI Assistant</span>
                    <span class="prodocu-item-desc">Smart responses</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>solutions/feedback-surveys/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon pro-icon-feedback">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  </div>
                  <div class="prodocu-item-content">
                    <span class="prodocu-item-title">Feedback Collection</span>
                    <span class="prodocu-item-desc">Gather insights</span>
                  </div>
                </a>
                <a href="<?php echo $bp; ?>products/analytics/" class="prodocu-mob-item">
                  <div class="prodocu-item-icon pro-icon-analytics">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
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
            <div style="font-size:11px;font-weight:700;letter-spacing:.05em;color:var(--p2);text-transform:uppercase;padding:4px 0 6px;border-bottom:1px solid #f1f5f9;margin-bottom:6px;">By Industry</div>
            <a href="<?php echo $bp; ?>industry/bfsi/" class="mob-ind-link"><span class="mob-ind-icon sol-icon-bfsi"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M3 10h18M5 10v11M19 10v11M9 10v11M15 10v11M12 3L2 10h20L12 3z"/><circle cx="12" cy="15.5" r="1.5" fill="currentColor"/></svg></span> Banking &amp; Finance</a>
            <a href="<?php echo $bp; ?>industry/healthcare/" class="mob-ind-link"><span class="mob-ind-icon sol-icon-healthcare"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/><path d="M12 8v5m-2.5-2.5h5"/></svg></span> Health &amp; Wellness</a>
            <a href="<?php echo $bp; ?>industry/retail-and-ecommerce/" class="mob-ind-link"><span class="mob-ind-icon sol-icon-retail"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/><path d="M12 9l2 2 4-4"/></svg></span> Retail &amp; E-commerce</a>
            <a href="<?php echo $bp; ?>industry/travel-and-hospitality/" class="mob-ind-link"><span class="mob-ind-icon sol-icon-travel"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/><path d="m14 8 4 4-4 4"/></svg></span> Travel &amp; Hospitality</a>
            <a href="<?php echo $bp; ?>industry/education-and-social-impacts/" class="mob-ind-link"><span class="mob-ind-icon sol-icon-education"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/><circle cx="12" cy="12" r="1.5" fill="currentColor"/></svg></span> Education &amp; Social Impacts</a>
            <a href="<?php echo $bp; ?>industry/communication-and-it/" class="mob-ind-link"><span class="mob-ind-icon sol-icon-it"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/><polyline points="7 8 10 10.5 7 13"/><line x1="12" y1="13" x2="16" y2="13"/></svg></span> Communication &amp; IT</a>
            <a href="<?php echo $bp; ?>industry/food-and-beverages/" class="mob-ind-link"><span class="mob-ind-icon sol-icon-food"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg></span> Food &amp; Beverage</a>
            <a href="<?php echo $bp; ?>industry/advertising-and-events/" class="mob-ind-link"><span class="mob-ind-icon sol-icon-events"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11l15-5v12L3 13v-2z"/><path d="M11.6 16.8l1.4 4.2a1 1 0 0 0 1.2.6l1.8-.6a1 1 0 0 0 .6-1.2l-1.4-4.2"/><path d="M19 8a4 4 0 0 1 0 8"/><path d="M21 6a7 7 0 0 1 0 12"/></svg></span> Advertising &amp; Events</a>
            <a href="<?php echo $bp; ?>industry/construction-and-real-estate/" class="mob-ind-link"><span class="mob-ind-icon sol-icon-realestate"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V7l8-4v18"/><path d="M19 21V11l-6-4"/><line x1="9" y1="9" x2="9" y2="9.01"/><line x1="9" y1="13" x2="9" y2="13.01"/><line x1="9" y1="17" x2="9" y2="17.01"/><line x1="15" y1="13" x2="15" y2="13.01"/><line x1="15" y1="17" x2="15" y2="17.01"/></svg></span> Construction &amp; Real Estate</a>
            <a href="<?php echo $bp; ?>industry/automobiles-and-transport/" class="mob-ind-link"><span class="mob-ind-icon sol-icon-auto"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.5 2.8C2.1 11.2 2 11.6 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></svg></span> Automobiles &amp; Transport</a>
            <a href="<?php echo $bp; ?>industry/government-and-utilities/" class="mob-ind-link"><span class="mob-ind-icon sol-icon-gov"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v3M4 10h16M2 21h20M5 10v8M19 10v8M9 10v8M15 10v8M12 5l8 5H4l8-5z"/></svg></span> Government &amp; Utilities</a>
            <a href="<?php echo $bp; ?>industry/manufacturing-and-supply/" class="mob-ind-link"><span class="mob-ind-icon sol-icon-manufacturing"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/><circle cx="17" cy="17" r="1" fill="currentColor"/><circle cx="12" cy="17" r="1" fill="currentColor"/><circle cx="7" cy="17" r="1" fill="currentColor"/></svg></span> Manufacturing &amp; Supply</a>
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

            <div style="font-size:11px;font-weight:700;letter-spacing:.05em;color:var(--p2);text-transform:uppercase;padding:10px 0 2px;border-bottom:1px solid #f1f5f9;">Developers &amp; Support</div>
            <a href="<?php echo $bp; ?>resources/help-center/">Help Center <span style="font-size:11px;color:#64748B;display:block;">FAQs, onboarding &amp; guides</span></a>
            <a href="<?php echo $bp; ?>resources/documentation/">Documentation <span style="font-size:11px;color:#64748B;display:block;">Platform manuals &amp; tutorials</span></a>
            <a href="<?php echo $bp; ?>integrations/api-webhooks/">API Docs &amp; Webhooks <span style="font-size:11px;color:#64748B;display:block;">Developer REST &amp; webhooks</span></a>
            <a href="<?php echo $bp; ?>careers/">Careers <span style="font-size:9px;background:#EEF2FF;color:#4F46E5;padding:1px 5px;border-radius:999px;font-weight:700;border:1px solid #C7D2FE;margin-left:4px;">Hiring</span> <span style="font-size:11px;color:#64748B;display:block;">Jobs, internships &amp; openings</span></a>
            <a href="<?php echo $bp; ?>about/">About HelloBotz <span style="font-size:11px;color:#64748B;display:block;">Mission, team &amp; Meta partnership</span></a>
          </div></div>
        </div>

        <!-- 4. PRICING -->
        <div class="mobile-nav-item"><a href="/pricing/" class="mobile-nav-link">Pricing</a></div>

        <div class="mobile-nav-item"><a href="<?php echo $bp; ?>partners/" class="mobile-nav-link">Partners</a></div>
        <div class="mobile-nav-item"><a href="<?php echo $bp; ?>about/" class="mobile-nav-link">About Us</a></div>
        <div class="mobile-theme-section">
          <div class="mobile-theme-title">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
            <span>Appearance / Theme</span>
          </div>
          <div class="mobile-theme-toggle-box">
            <button type="button" class="mobile-theme-option active" data-theme-val="light" aria-label="Light mode">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
              <span>Light</span>
            </button>
            <button type="button" class="mobile-theme-option" data-theme-val="dark" aria-label="Dark mode">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
              <span>Dark</span>
            </button>
          </div>
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
          <a href="<?php echo $bp; ?>auth/login" class="mnav-login">Login &rarr;</a>
          <a href="<?php echo $bp; ?>auth/register" class="mnav-start" style="background:#044738 !important;border-color:#044738 !important;color:#ffffff !important;">Sign Up Free &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <script>
    (function() {
      function getPreferredTheme() {
        try {
          var saved = localStorage.getItem('hb_theme');
          if (saved === 'dark' || saved === 'light') return saved;
        } catch (e) {}
        return 'light';
      }

      function updateButtons(theme) {
        var desktopBtns = document.querySelectorAll('.theme-toggle-btn');
        desktopBtns.forEach(function(btn) {
          var label = theme === 'dark' ? 'Switch to Light Mode' : 'Switch to Dark Mode';
          btn.setAttribute('aria-label', label);
          btn.setAttribute('title', label);
        });

        var mobileOptions = document.querySelectorAll('.mobile-theme-option');
        mobileOptions.forEach(function(opt) {
          if (opt.getAttribute('data-theme-val') === theme) {
            opt.classList.add('active');
          } else {
            opt.classList.remove('active');
          }
        });
      }

      function applyTheme(theme, persist) {
        if (theme !== 'dark' && theme !== 'light') theme = 'light';
        document.documentElement.setAttribute('data-theme', theme);
        if (theme === 'dark') {
          document.documentElement.classList.add('dark-theme');
          document.documentElement.classList.remove('light-theme');
          if (document.body) {
            document.body.classList.add('dark-theme');
            document.body.classList.remove('light-theme');
          }
        } else {
          document.documentElement.classList.remove('dark-theme');
          document.documentElement.classList.add('light-theme');
          if (document.body) {
            document.body.classList.remove('dark-theme');
            document.body.classList.add('light-theme');
          }
        }
        if (persist) {
          try { localStorage.setItem('hb_theme', theme); } catch (e) {}
        }
        updateButtons(theme);
      }

      var lastToggle = 0;
      function toggleTheme() {
        var now = Date.now();
        if (now - lastToggle < 250) return;
        lastToggle = now;
        var current = document.documentElement.getAttribute('data-theme') || 'light';
        var next = current === 'dark' ? 'light' : 'dark';
        applyTheme(next, true);
      }

      function initTheme() {
        var current = getPreferredTheme();
        applyTheme(current, false);

        function onDesktopToggle(e) {
          if (e) {
            e.preventDefault();
            e.stopPropagation();
          }
          toggleTheme();
        }

        function onMobileToggle(e) {
          if (e) {
            e.preventDefault();
            e.stopPropagation();
          }
          var targetTheme = this.getAttribute('data-theme-val');
          if (targetTheme) applyTheme(targetTheme, true);
        }

        function attachDirectListeners() {
          var desktopBtns = document.querySelectorAll('.theme-toggle-btn');
          desktopBtns.forEach(function(btn) {
            btn.removeEventListener('click', onDesktopToggle);
            btn.addEventListener('click', onDesktopToggle);
          });
          var mobileOptions = document.querySelectorAll('.mobile-theme-option');
          mobileOptions.forEach(function(opt) {
            opt.removeEventListener('click', onMobileToggle);
            opt.addEventListener('click', onMobileToggle);
          });
        }

        attachDirectListeners();

        // Delegated backup listener
        document.addEventListener('click', function(e) {
          var toggleBtn = e.target.closest('.theme-toggle-btn');
          if (toggleBtn) {
            e.preventDefault();
            toggleTheme();
            return;
          }

          var mobileOpt = e.target.closest('.mobile-theme-option');
          if (mobileOpt) {
            e.preventDefault();
            var targetTheme = mobileOpt.getAttribute('data-theme-val');
            if (targetTheme) applyTheme(targetTheme, true);
          }
        });
      }

      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initTheme);
      } else {
        initTheme();
      }
    })();
  </script>
  <main id="main">
