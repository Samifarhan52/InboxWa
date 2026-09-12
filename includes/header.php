<?php
/**
 * InboxWa global header + SEO meta engine
 * Set before include: $pageTitle, $pageDescription, $pageKeywords,
 * $canonicalUrl, $ogImage, $ogType, $robots, $basePath
 */
if (!isset($basePath)) { $basePath = ''; }
$bp = $basePath;

require_once dirname(__DIR__) . '/config/cms.php';

$SITE_NAME   = cms_setting('site_title', 'InboxWa');
$SITE_TAGLINE = cms_setting('site_tagline', 'WhatsApp Marketing & Automation Platform');
$SITE_DOMAIN = 'https://inboxwa.com';
$DEFAULT_OG  = $SITE_DOMAIN . '/assets/images/og-image.png';
$cmsWhatsapp = cms_setting('support_whatsapp', '918050854445');
$cmsPhone    = cms_setting('phone_number', '+91 80508 54445');
$cmsSalesEmail = cms_setting('sales_email', 'mail@inboxwa.com');
$cmsSupportEmail = cms_setting('support_email', 'support@inboxwa.com');
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
  $pageDescription = 'Automate WhatsApp marketing with official WhatsApp Business API, chatbots, broadcasts, shared inbox & CRM. Start free with InboxWa today.';
}
if ($pageKeywords === '') {
  $pageKeywords = 'WhatsApp marketing software, WhatsApp Business API, WhatsApp automation tool, AI chatbot for business, WhatsApp CRM software, lead generation chatbot, shared inbox, broadcast campaigns, InboxWa';
}
if ($canonicalUrl === '') {
  $reqUri = isset($_SERVER['REQUEST_URI']) ? strtok($_SERVER['REQUEST_URI'], '?') : '/';
  $canonicalUrl = $SITE_DOMAIN . (isset($reqUri[0]) && $reqUri[0] === '/' ? $reqUri : '/' . $reqUri);
}
if (!preg_match('/\.[a-z0-9]+$/i', $canonicalUrl) && substr($canonicalUrl, -1) !== '/') {
  $canonicalUrl .= '/';
}

$fullTitle = (stripos($pageTitle, 'InboxWa') !== false)
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php echo hb_seo_esc($fullTitle); ?></title>
  <meta name="description" content="<?php echo hb_seo_esc($pageDescription); ?>">
  <meta name="keywords" content="<?php echo hb_seo_esc($pageKeywords); ?>">
  <meta name="author" content="InboxWa">
  <meta name="robots" content="<?php echo hb_seo_esc($robots); ?>">
  <meta name="googlebot" content="<?php echo (strpos($robots, 'noindex') !== false) ? 'noindex, nofollow' : 'index, follow'; ?>">
  <meta name="theme-color" content="#8B5CF6">
  <meta name="application-name" content="InboxWa">
  <meta name="format-detection" content="telephone=no">
  <meta name="geo.region" content="IN">
  <meta name="language" content="en">
  <link rel="canonical" href="<?php echo hb_seo_esc($canonicalUrl); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo hb_seo_esc($canonicalUrl); ?>">
  <link rel="alternate" hreflang="en-IN" href="<?php echo hb_seo_esc($canonicalUrl); ?>">
  <link rel="alternate" hreflang="x-default" href="<?php echo hb_seo_esc($canonicalUrl); ?>">

  <meta property="og:type" content="<?php echo hb_seo_esc($ogType); ?>">
  <meta property="og:site_name" content="InboxWa">
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

  <?php
  // Dynamic Website Color Palette from Admin Settings
  $themePrimary = cms_setting('theme_primary_color', '#8B5CF6');
  $themePrimaryHover = cms_setting('theme_primary_hover', '#7C3AED');
  $themeAccent = cms_setting('theme_accent_color', '#06B6D4');
  $themeSuccess = cms_setting('theme_success_color', '#16A34A');
  $themeBg = cms_setting('theme_bg_color', '#FFFFFF');
  $themeText = cms_setting('theme_text_color', '#0F172A');
  ?>
  <style id="inboxwa-theme-palette">
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
    "name": "InboxWa AI Technologies Pvt Ltd",
    "url": "https://inboxwa.com/",
    "logo": "https://inboxwa.com/assets/images/logo.png",
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
      "https://facebook.com/inboxwa",
      "https://instagram.com/inboxwa",
      "https://linkedin.com/company/inboxwa"
    ]
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "InboxWa",
    "url": "https://inboxwa.com/",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://inboxwa.com/resources/search?q={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "InboxWa",
    "applicationCategory": "BusinessApplication",
    "operatingSystem": "Web",
    "url": "https://inboxwa.com/",
    "description": "WhatsApp Business API platform with shared inbox, broadcasts, flow builder, chatbots, CRM and omnichannel automation.",
    "offers": { "@type": "Offer", "price": "0", "priceCurrency": "INR", "description": "Free trial available" }
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
    window.INBOXWA_CONFIG = {
      whatsapp: <?php echo json_encode($cmsWhatsapp); ?>,
      siteName: <?php echo json_encode($SITE_NAME); ?>
    };
  </script>
  <style id="inboxwa-floating-pill-navbar-style">
    /* FLOATING PILL NAVBAR SYSTEM (100% Fixed, Centered & Always Visible on Scroll) */
    html {
      scroll-padding-top: 100px;
    }
    body {
      padding-top: 86px !important;
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

    /* Brand Logo Pill & Responsive Sizing */
    .site-header .logo {
      display: inline-flex !important;
      align-items: center !important;
      background: #030712 !important;
      padding: 4px 12px !important;
      border-radius: 999px !important;
      border: 1px solid rgba(99, 102, 241, 0.35) !important;
      box-shadow: 0 2px 8px rgba(3, 7, 18, 0.08) !important;
      max-width: none !important;
      transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1) !important;
      text-decoration: none !important;
      flex-shrink: 0 !important;
    }
    .site-header .logo:hover {
      border-color: rgba(99, 102, 241, 0.75) !important;
      box-shadow: 0 4px 16px rgba(99, 102, 241, 0.28) !important;
      transform: translateY(-1px) scale(1.02) !important;
    }
    .site-header.scrolled .logo {
      padding: 3px 10px !important;
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
      height: 27px !important;
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

    /* InboxWa Light Mega Menu for Channels (100% Centered & Never Cut Off) */
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

    /* Right Promo Card (Light Theme Matching InboxWa Style) */
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

    /* FEATURES MEGA MENU: Clean 2-Column Grid Matching InboxWa Theme */
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

    /* PRODUCTS MEGA MENU: Clean 5-Column Balanced Grid Matching InboxWa Theme */
    .mega-menu-products {
      width: min(1180px, calc(100vw - 28px)) !important;
      max-width: calc(100vw - 28px) !important;
      background: #ffffff !important;
      border: 1px solid rgba(226, 232, 240, 0.95) !important;
      border-radius: 20px !important;
      box-shadow: 0 24px 60px -12px rgba(15, 23, 42, 0.16), 0 0 0 1px rgba(15, 23, 42, 0.04) !important;
      padding: 22px 24px !important;
      box-sizing: border-box !important;
    }

    /* SOLUTIONS MEGA MENU: 12 Industries (3 cols x 4 rows) + Leads Directory Card (Image 3) */
    .mega-menu-solutions {
      width: min(1120px, calc(100vw - 24px)) !important;
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
      grid-template-columns: 1fr 310px !important;
      align-items: stretch !important;
      min-height: 410px !important;
    }

    .mega-sol-main {
      padding: 26px 30px !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: center !important;
    }

    .mega-sol-heading {
      font-size: 1.15rem !important;
      font-weight: 800 !important;
      color: #3b4cb8 !important;
      margin-bottom: 18px !important;
      letter-spacing: -0.01em !important;
    }

    .mega-industry-grid {
      display: grid !important;
      grid-template-columns: repeat(3, 1fr) !important;
      gap: 12px 18px !important;
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
      gap: 12px !important;
      padding: 9px 12px !important;
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

    @media (max-width: 1120px) {
      .mega-menu-solutions {
        width: min(960px, calc(100vw - 20px)) !important;
      }
      .mega-solutions-wrap {
        grid-template-columns: 1fr 270px !important;
      }
      .mega-sol-main {
        padding: 20px 20px !important;
      }
      .mega-sol-leads-aside {
        padding: 24px 20px !important;
      }
      .mega-industry-grid {
        gap: 8px 12px !important;
      }
      .mega-ind-link {
        padding: 8px 8px !important;
        gap: 10px !important;
      }
      .mega-ind-icon {
        width: 34px !important;
        height: 34px !important;
        min-width: 34px !important;
      }
      .mega-ind-title {
        font-size: 0.86rem !important;
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
    @media (max-width: 768px) {
      .site-header {
        top: 8px !important;
        padding: 0 10px !important;
      }
      .header-inner {
        height: 52px !important;
        border-radius: 999px !important;
        padding: 0 0.85rem !important;
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
      .logo-img {
        height: 26px !important;
        max-width: 120px !important;
      }
    }
    @media (max-width: 480px) {
      .header-login {
        padding: 0.28rem 0.7rem !important;
        font-size: 0.76rem !important;
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
    window.addEventListener('scroll', function() {
      var header = document.querySelector('.site-header');
      if (header) {
        if (window.scrollY > 20) {
          header.classList.add('scrolled');
        } else {
          header.classList.remove('scrolled');
        }
      }
    }, { passive: true });
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
      <a href="<?php echo $bp; ?>" class="logo" aria-label="<?php echo htmlspecialchars($SITE_NAME); ?> Home">
        <img src="<?php echo htmlspecialchars($cmsLogo); ?>" alt="<?php echo htmlspecialchars($SITE_NAME); ?>" class="logo-img" width="168" height="42" onerror="this.onerror=null;this.src='<?php echo $bp; ?>assets/images/logo.png';">
        <span class="logo-fallback" style="display:none;align-items:center;gap:0.4rem">
          <img src="<?php echo $bp; ?>assets/images/logo-icon.png" width="32" height="32" style="border-radius:8px" alt="<?php echo htmlspecialchars($SITE_NAME); ?>">
          <span style="font-weight:800;font-size:1.15rem;color:#fff">Hellobotz</span>
        </span>
      </a>
      <nav class="nav-desktop" role="navigation" aria-label="Main">

        <!-- PRODUCTS MEGAMENU (InboxWa Suite) -->
        <div class="nav-item nav-item-features nav-item-products" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Products <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-panel mega-menu-features" role="menu">
            <div class="mega-features-wrapper">
              <div class="mega-features-header">
                <span class="mega-features-label">Products</span>
              </div>
              <div class="mega-features-grid">
                <!-- 1. Bulk Broadcast -->
                <a href="<?php echo $bp; ?>products/broadcast/" class="mega-feature-link" role="menuitem">
                  <div class="mega-feature-icon icon-pink">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                  </div>
                  <div class="mega-feature-text">
                    <span class="mega-feature-title">Bulk Broadcast</span>
                    <span class="mega-feature-desc">Send campaigns to thousands instantly</span>
                  </div>
                </a>

                <!-- 2. Shared Team Inbox -->
                <a href="<?php echo $bp; ?>products/shared-inbox/" class="mega-feature-link" role="menuitem">
                  <div class="mega-feature-icon icon-purple">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
                  </div>
                  <div class="mega-feature-text">
                    <span class="mega-feature-title">Shared Team Inbox</span>
                    <span class="mega-feature-desc">Collaborate on customer conversations</span>
                  </div>
                </a>

                <!-- 3. AI Chatbot Builder -->
                <a href="<?php echo $bp; ?>products/chatbot/" class="mega-feature-link" role="menuitem">
                  <div class="mega-feature-icon icon-blue">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="18" r="3"/><circle cx="6" cy="6" r="3"/><path d="M13 6h3a2 2 0 0 1 2 2v7"/><line x1="6" y1="9" x2="6" y2="21"/></svg>
                  </div>
                  <div class="mega-feature-text">
                    <span class="mega-feature-title">AI Chatbot Builder</span>
                    <span class="mega-feature-desc">Visual no-code automation flows</span>
                  </div>
                </a>

                <!-- 4. AI Voice Calling -->
                <a href="<?php echo $bp; ?>products/ai-voice/" class="mega-feature-link" role="menuitem">
                  <div class="mega-feature-icon icon-indigo">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                  </div>
                  <div class="mega-feature-text">
                    <span class="mega-feature-title">AI Voice Calling</span>
                    <span class="mega-feature-desc">AI agents for inbound &amp; outbound calls</span>
                  </div>
                </a>

                <!-- 5. WhatsApp Catalog -->
                <a href="<?php echo $bp; ?>products/catalog/" class="mega-feature-link" role="menuitem">
                  <div class="mega-feature-icon icon-green">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                  </div>
                  <div class="mega-feature-text">
                    <span class="mega-feature-title">WhatsApp Catalog</span>
                    <span class="mega-feature-desc">Showcase products inside WhatsApp</span>
                  </div>
                </a>

                <!-- 6. Appointment Booking -->
                <a href="<?php echo $bp; ?>solutions/appointment/" class="mega-feature-link" role="menuitem">
                  <div class="mega-feature-icon icon-amber">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                  </div>
                  <div class="mega-feature-text">
                    <span class="mega-feature-title">Appointment Booking</span>
                    <span class="mega-feature-desc">Let customers self-book appointments</span>
                  </div>
                </a>

                <!-- 7. WhatsApp Forms -->
                <a href="<?php echo $bp; ?>products/whatsapp-form/" class="mega-feature-link" role="menuitem">
                  <div class="mega-feature-icon icon-emerald">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                  </div>
                  <div class="mega-feature-text">
                    <span class="mega-feature-title">WhatsApp Forms</span>
                    <span class="mega-feature-desc">Collect responses via chat forms</span>
                  </div>
                </a>

                <!-- 8. Click-to-WhatsApp Ads -->
                <a href="<?php echo $bp; ?>facebook-ads/" class="mega-feature-link" role="menuitem">
                  <div class="mega-feature-icon icon-violet">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l1.912 5.813a2 2 0 0 0 1.275 1.275L21 12l-5.813 1.912a2 2 0 0 0-1.275 1.275L12 21l-1.912-5.813a2 2 0 0 0-1.275-1.275L3 12l5.813-1.912a2 2 0 0 0 1.275-1.275L12 3z"/></svg>
                  </div>
                  <div class="mega-feature-text">
                    <span class="mega-feature-title">Click-to-WhatsApp Ads</span>
                    <span class="mega-feature-desc">Drive ad traffic to WhatsApp conversations</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- CHANNELS [LIVE] MEGAMENU (InboxWa Suite) -->
        <div class="nav-item nav-item-channels" data-mega>
          <button type="button" class="nav-link nav-link-channels" aria-expanded="false" aria-haspopup="true">
            Channels <span class="badge-live-pill">Live</span>
            <svg class="nav-chevron" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="mega-menu mega-menu-channels" role="menu">
            <div class="mega-channels-container">
              <div class="mega-channels-left">
                <div class="mega-channels-heading">CHANNELS</div>
                <div class="mega-channels-grid">
                  <a href="<?php echo $bp; ?>channel/whatsapp/" class="mega-channel-item" role="menuitem">
                    <div class="channel-icon-wrap wa-icon-wrap">
                      <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    </div>
                    <div class="channel-text">
                      <span class="channel-name">WhatsApp</span>
                      <span class="channel-desc">Official WhatsApp Business API...</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>channel/instagram/" class="mega-channel-item" role="menuitem">
                    <div class="channel-icon-wrap ig-icon-wrap">
                      <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </div>
                    <div class="channel-text">
                      <span class="channel-name">Instagram</span>
                      <span class="channel-desc">Manage Instagram DMs &...</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>channel/telegram/" class="mega-channel-item" role="menuitem">
                    <div class="channel-icon-wrap tg-icon-wrap">
                      <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.121l-6.871 4.326-2.962-.924c-.643-.204-.657-.643.136-.953l11.57-4.461c.537-.196 1.006.128.832.942z"/></svg>
                    </div>
                    <div class="channel-text">
                      <span class="channel-name">Telegram</span>
                      <span class="channel-desc">Telegram bots & group...</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>channel/facebook/" class="mega-channel-item" role="menuitem">
                    <div class="channel-icon-wrap fb-icon-wrap">
                      <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </div>
                    <div class="channel-text">
                      <span class="channel-name">Facebook</span>
                      <span class="channel-desc">Facebook Messenger & page...</span>
                    </div>
                  </a>
                </div>
              </div>
              <div class="mega-channels-promo">
                <span class="promo-offer-pill">PROMO OFFER</span>
                <h4 class="promo-offer-title">Build Custom Bots in Minutes</h4>
                <p class="promo-offer-desc">Engage customers with custom WhatsApp templates & workflows.</p>
                <a href="<?php echo $bp; ?>auth/register" class="promo-offer-cta">Start Free Trial <span class="arr">&rarr;</span></a>
              </div>
            </div>
          </div>
        </div>

        <div class="nav-item nav-item-solutions" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Solutions <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-solutions" role="menu">
            <div class="mega-solutions-wrap">
              <!-- Left: By Industry (3 columns x 4 rows matching Image 2) -->
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
                <span class="mega-leads-badge">16 CATEGORIES</span>
                <h3 class="mega-leads-title">Business Leads Directory</h3>
                <p class="mega-leads-desc">Explore all 16 category-wise verified business datasets &amp; WhatsApp workflows.</p>
                <a href="<?php echo $bp; ?>business-leads/" class="btn-mega-leads-primary">Browse All 16 Categories</a>
                <button type="button" class="btn-mega-leads-secondary btn-demo-open" onclick="if(window.openDemoModal) window.openDemoModal(); else window.location.href='/#contact-section';">+ Custom Data Request</button>
              </div>
            </div>
          </div>
        </div>
<div class="nav-item"><a href="/pricing/" class="nav-link">Pricing</a></div>

        <div class="nav-item nav-item-secondary nav-item-sm" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Partners <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-sm" role="menu">
            <div class="mega-panel mega-panel-single">
              <div class="mega-panel-links">
                <a href="/partners/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Affiliate Partner</span><span class="mega-link-desc">Refer &amp; earn</span></span>
</a>
                <a href="/partners/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Agency Partner</span><span class="mega-link-desc">Serve your clients</span></span>
</a>
                <a href="/partners/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">White Label Partner</span><span class="mega-link-desc">Your brand, our platform</span></span>
</a>
                <a href="/partners/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v6M8 8H4a2 2 0 00-2 2v8a2 2 0 002 2h16a2 2 0 002-2v-8a2 2 0 00-2-2h-4"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Technology Partner</span><span class="mega-link-desc">Build integrations</span></span>
</a>
              </div>
            
                <div class="mega-cta-box">
                  <p>Grow with InboxWa as a partner or reseller.</p>
                  <a href="/partners/" class="btn btn-primary btn-sm">Join Our Partner Program</a>
                </div>
</div>
          </div>
        </div>

        <div class="nav-item nav-item-secondary nav-item-sm" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Company <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-sm" role="menu">
            <div class="mega-panel mega-panel-single">
              <div class="mega-panel-links">
                <a href="/company/about/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">About</span><span class="mega-link-desc">Our mission</span></span>
</a>
                <a href="<?php echo $bp; ?>resources/blog/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-indigo"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Blog</span><span class="mega-link-desc">Tips, guides &amp; insights</span></span>
</a>
                <a href="/company/careers/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Careers</span><span class="mega-link-desc">Join the team</span></span>
</a>
                <a href="/contact/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Contact</span><span class="mega-link-desc">Talk to us</span></span>
</a>
                <a href="/security/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Security</span><span class="mega-link-desc">Data protection</span></span>
</a>
                <a href="/privacy/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Privacy</span><span class="mega-link-desc">Privacy policy</span></span>
</a>
                <a href="/terms/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Terms</span><span class="mega-link-desc">Terms of service</span></span>
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
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Products <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <a href="/products/broadcast/">Bulk Broadcast</a>
            <a href="/products/shared-inbox/">Shared Team Inbox</a>
            <a href="/products/chatbot/">AI Chatbot Builder</a>
            <a href="/products/ai-voice/">AI Voice Calling</a>
            <a href="/products/catalog/">WhatsApp Catalog</a>
            <a href="/solutions/appointment/">Appointment Booking</a>
            <a href="/products/whatsapp-form/">WhatsApp Forms</a>
            <a href="/facebook-ads/">Click-to-WhatsApp Ads</a>
          </div></div>
        </div>
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link" style="display:flex;align-items:center;justify-content:space-between;width:100%;">
            <span>Channels <span class="badge-live-pill" style="margin-left:6px;">Live</span></span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <a href="/channel/whatsapp/" style="font-weight:700;color:#10b981;">WhatsApp Business API</a>
            <a href="/channel/instagram/">Instagram DM Automation</a>
            <a href="/channel/telegram/">Telegram Bot Platform</a>
            <a href="/channel/facebook/">Facebook Messenger</a>
          </div></div>
        </div>
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Solutions <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <div style="font-size:11px;font-weight:700;letter-spacing:.05em;color:var(--p2);text-transform:uppercase;padding:6px 0 2px;border-bottom:1px solid #f1f5f9;">By Industry</div>
            <a href="<?php echo $bp; ?>industry/bfsi/">Banking &amp; Finance</a>
            <a href="<?php echo $bp; ?>industry/healthcare/">Health &amp; Wellness</a>
            <a href="<?php echo $bp; ?>industry/retail-and-ecommerce/">Retail &amp; E-commerce</a>
            <a href="<?php echo $bp; ?>industry/travel-and-hospitality/">Travel &amp; Hospitality</a>
            <a href="<?php echo $bp; ?>industry/education-and-social-impacts/">Education &amp; Social Impacts</a>
            <a href="<?php echo $bp; ?>industry/communication-and-it/">Communication &amp; IT</a>
            <a href="<?php echo $bp; ?>industry/food-and-beverages/">Food &amp; Beverage</a>
            <a href="<?php echo $bp; ?>industry/advertising-and-events/">Advertising &amp; Events</a>
            <a href="<?php echo $bp; ?>industry/construction-and-real-estate/">Construction &amp; Real Estate</a>
            <a href="<?php echo $bp; ?>industry/automobiles-and-transport/">Automobiles &amp; Transport</a>
            <a href="<?php echo $bp; ?>industry/government-and-utilities/">Government &amp; Utilities</a>
            <a href="<?php echo $bp; ?>industry/manufacturing-and-supply/">Manufacturing &amp; Supply</a>
            <div style="font-size:11px;font-weight:700;letter-spacing:.05em;color:var(--p2);text-transform:uppercase;padding:10px 0 2px;border-bottom:1px solid #f1f5f9;">Business Leads</div>
            <a href="<?php echo $bp; ?>business-leads/" style="font-weight:700;color:#4f46e5;">Browse All 16 Leads Categories &rarr;</a>
            <a href="<?php echo $bp; ?>solutions/data-marketplace/#custom-request" style="color:var(--p2);font-weight:600;">+ Custom Data Request</a>
          </div></div>
        </div>
        <div class="mobile-nav-item"><a href="/pricing/" class="mobile-nav-link">Pricing</a></div>
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Partners <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <a href="/partners/">Affiliate Partner</a>
            <a href="/partners/">Agency Partner</a>
            <a href="/partners/">White Label Partner</a>
            <a href="/partners/">Technology Partner</a>
          </div></div>
        </div>
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Company <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <a href="/company/about/">About</a>
            <a href="<?php echo $bp; ?>resources/blog/">Blog</a>
            <a href="/company/careers/">Careers</a>
            <a href="/contact/">Contact</a>
            <a href="/security/">Security</a>
            <a href="/privacy/">Privacy</a>
            <a href="/terms/">Terms</a>
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
