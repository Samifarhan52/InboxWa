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
  <link rel="stylesheet" href="/app.css?v=43">
  <link rel="stylesheet" href="/assets/css/style.css?v=42">
  <link rel="stylesheet" href="/assets/css/mobile-menu.css?v=38">
  <link rel="stylesheet" href="/assets/css/story-journey.css?v=43">
  <link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=44">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "InboxWa AI Technologies Pvt Ltd",
    "url": "https://inboxwa.com/",
    "logo": "https://inboxwa.com/assets/images/logo.png",
    "description": "Official WhatsApp Business API and Omnichannel automation platform for WhatsApp, Instagram, Facebook and Telegram.",
    "email": "mail@inboxwa.com",
    "telephone": "+91-8050854445",
    "address": { "@type": "PostalAddress", "addressCountry": "IN", "addressLocality": "Bangalore" },
    "contactPoint": [{
      "@type": "ContactPoint",
      "telephone": "+91-8050854445",
      "contactType": "sales",
      "areaServed": "IN",
      "availableLanguage": ["English", "Hindi"]
    }, {
      "@type": "ContactPoint",
      "telephone": "+91-8050854445",
      "contactType": "customer support",
      "email": "support@inboxwa.com"
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

    /* Hellobotz-Style Dark Mega Menu for Channels (100% Centered & Never Cut Off) */
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
      background: #0d111c !important;
      border: 1px solid rgba(255, 255, 255, 0.14) !important;
      border-radius: 20px !important;
      box-shadow: 0 25px 60px -12px rgba(0, 0, 0, 0.75), 0 0 0 1px rgba(255, 255, 255, 0.08) !important;
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
      color: #818cf8 !important;
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
      background: rgba(255, 255, 255, 0.06) !important;
      transform: translateY(-2px) !important;
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
    .wa-icon-wrap { background: rgba(37, 211, 102, 0.15) !important; color: #25d366 !important; }
    .ig-icon-wrap { background: rgba(236, 72, 153, 0.15) !important; color: #f43f5e !important; }
    .tg-icon-wrap { background: rgba(14, 165, 233, 0.15) !important; color: #0284c7 !important; }
    .fb-icon-wrap { background: rgba(59, 130, 246, 0.15) !important; color: #3b82f6 !important; }

    .channel-text {
      display: flex !important;
      flex-direction: column !important;
    }
    .channel-name {
      font-size: 0.95rem !important;
      font-weight: 700 !important;
      color: #ffffff !important;
      line-height: 1.2 !important;
    }
    .channel-desc {
      font-size: 0.75rem !important;
      color: #94a3b8 !important;
      line-height: 1.35 !important;
      margin-top: 3px !important;
    }

    /* Right Promo Card */
    .mega-channels-promo {
      background: linear-gradient(145deg, #161b2e 0%, #111524 100%) !important;
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
      background: rgba(139, 92, 246, 0.22) !important;
      color: #c084fc !important;
      border: 1px solid rgba(168, 85, 247, 0.35) !important;
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
      color: #ffffff !important;
      margin: 0 0 8px 0 !important;
      line-height: 1.3 !important;
    }
    .promo-offer-desc {
      font-size: 0.82rem !important;
      color: #cbd5e1 !important;
      line-height: 1.5 !important;
      margin: 0 0 16px 0 !important;
    }
    .promo-offer-cta {
      display: inline-flex !important;
      align-items: center !important;
      gap: 6px !important;
      color: #a78bfa !important;
      font-size: 0.9rem !important;
      font-weight: 700 !important;
      text-decoration: none !important;
      transition: all 0.15s ease !important;
    }
    .promo-offer-cta:hover {
      color: #c4b5fd !important;
      gap: 9px !important;
    }

    /* ALL WIDE MEGA MENUS CENTERED UNDER .header-inner */
    .mega-menu-products,
    .mega-menu-solutions,
    .mega-menu-panel,
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
    }
    .nav-item.open > .mega-menu-products,
    .nav-item:hover > .mega-menu-products,
    .nav-item.open > .mega-menu-solutions,
    .nav-item:hover > .mega-menu-solutions,
    .nav-item.open > .mega-menu-panel,
    .nav-item:hover > .mega-menu-panel,
    .nav-item.open > .mega-menu-products.align-left,
    .nav-item:hover > .mega-menu-products.align-left,
    .nav-item.open > .mega-menu-solutions.align-left,
    .nav-item:hover > .mega-menu-solutions.align-left,
    .nav-item.open > .mega-menu-panel.align-left,
    .nav-item:hover > .mega-menu-panel.align-left {
      transform: translateX(-50%) translateY(0) !important;
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
    }
    .nav-item:hover > .mega-menu-sm,
    .nav-item.open > .mega-menu-sm {
      transform: translateY(0) !important;
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
        padding: 0.35rem 0.45rem !important;
        font-size: 0.8rem !important;
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
        display: none !important;
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
        <img src="<?php echo htmlspecialchars($cmsLogo); ?>" alt="<?php echo htmlspecialchars($SITE_NAME); ?>" class="logo-img" width="140" height="36" onerror="this.onerror=null;this.src='';this.style.display='none';var f=this.parentNode.querySelector('.logo-fallback');if(f)f.style.display='inline-flex'">
        <span class="logo-fallback" style="display:none;align-items:center;gap:0.4rem">
          <span class="logo-icon" style="width:36px;height:36px;display:inline-flex;background:linear-gradient(135deg,#8B5CF6,#6366F1);border-radius:10px;color:#fff;align-items:center;justify-content:center"><svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg></span>
          <span style="font-weight:800;font-size:1.15rem;color:#0F172A">InboxWa</span>
        </span>
      </a>
      <nav class="nav-desktop" role="navigation" aria-label="Main">

        <div class="nav-item" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Products <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-panel mega-menu-products" role="menu">
            <div class="mega-products-grid">
              <div class="mega-sol-col">
                <div class="mega-col-title">FEATURES</div>
                <a href="<?php echo $bp; ?>products/whatsapp-business-platform/#whatsapp-api" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Official WhatsApp API</span><span class="mega-link-desc">Meta Business API & green-tick</span></span>
</a>
                <a href="<?php echo $bp; ?>products/whatsapp-business-platform/#team-inbox" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-6l-2 3h-4l-2-3H2"/><path d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Shared Team Inbox</span><span class="mega-link-desc">Assign, notes & SLAs</span></span>
</a>
                <a href="<?php echo $bp; ?>products/whatsapp-business-platform/#broadcasts" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Broadcast Campaigns</span><span class="mega-link-desc">Templates at scale</span></span>
</a>
                <a href="<?php echo $bp; ?>products/automation" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Automation</span><span class="mega-link-desc">Triggers & workflows</span></span>
</a>
                <a href="<?php echo $bp; ?>products/crm-analytics/#crm" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">CRM</span><span class="mega-link-desc">Leads & pipeline</span></span>
</a>
                <a href="<?php echo $bp; ?>products/crm-analytics/#analytics" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 20V10M12 20V4M6 20v-6"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Analytics</span><span class="mega-link-desc">Campaign & agent reports</span></span>
</a>
                <a href="<?php echo $bp; ?>products/whatsapp-form/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M9 15h6M9 11h6"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">WhatsApp Form</span><span class="mega-link-desc">Lead capture on chat</span></span>
</a>
                <a href="<?php echo $bp; ?>products/chatbot" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/><path d="M8 10h.01M12 10h.01M16 10h.01"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">AI Chatbot &amp; Flow Builder</span><span class="mega-link-desc">Build intelligent no-code customer journeys</span></span>
</a>
              </div>
              <div class="mega-sol-col">
                <div class="mega-col-title">CHANNELS</div>
                <a href="<?php echo $bp; ?>products/channels/whatsapp/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">WhatsApp</span><span class="mega-link-desc">Connect your business channel</span></span>
</a>
                <a href="<?php echo $bp; ?>products/channels/facebook/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Facebook</span><span class="mega-link-desc">Messenger inbox</span></span>
</a>
                <a href="<?php echo $bp; ?>products/channels/instagram/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Instagram</span><span class="mega-link-desc">DM automation</span></span>
</a>
                <a href="<?php echo $bp; ?>products/channels/telegram/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Telegram</span><span class="mega-link-desc">Bot messaging</span></span>
</a>
              </div>
              <div class="mega-sol-col mega-products-cta">
                <span class="mega-guide-badge">PLATFORM</span>
                <h4>WhatsApp API + Automation</h4>
                <p>Official Meta API, inbox, broadcasts, flows and CRM — built for sales and support teams.</p>
                <a href="<?php echo $bp; ?>auth/register" class="btn btn-sm btn-primary" style="margin-top:.5rem;align-self:flex-start">Start Free Trial</a>
              </div>
            </div>
          </div>
        </div>

        <!-- CHANNELS [LIVE] MEGAMENU (Hellobotz Style) -->
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
                  <a href="<?php echo $bp; ?>products/channels/instagram/" class="mega-channel-item" role="menuitem">
                    <div class="channel-icon-wrap ig-icon-wrap">
                      <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </div>
                    <div class="channel-text">
                      <span class="channel-name">Instagram</span>
                      <span class="channel-desc">Manage Instagram DMs &...</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/channels/telegram/" class="mega-channel-item" role="menuitem">
                    <div class="channel-icon-wrap tg-icon-wrap">
                      <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.121l-6.871 4.326-2.962-.924c-.643-.204-.657-.643.136-.953l11.57-4.461c.537-.196 1.006.128.832.942z"/></svg>
                    </div>
                    <div class="channel-text">
                      <span class="channel-name">Telegram</span>
                      <span class="channel-desc">Telegram bots & group...</span>
                    </div>
                  </a>
                  <a href="<?php echo $bp; ?>products/channels/facebook/" class="mega-channel-item" role="menuitem">
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

        <div class="nav-item" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Solutions <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-solutions" role="menu">
            <div class="mega-solutions-grid">
              <div class="mega-sol-col">
                <div class="mega-col-title">INTEGRATIONS</div>
                <a href="<?php echo $bp; ?>solutions/shopify/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 01-8 0"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Shopify</span><span class="mega-link-desc">Orders & abandoned cart</span></span></a>
                <a href="<?php echo $bp; ?>solutions/woocommerce/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></span><span class="mega-link-text"><span class="mega-link-title">WooCommerce</span><span class="mega-link-desc">Store sync & alerts</span></span></a>
                <a href="<?php echo $bp; ?>solutions/google-forms-sheets/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M8 13h8M8 17h8M8 9h2"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Google Sheet</span><span class="mega-link-desc">Form → Sheet → WhatsApp</span></span></a>
                <a href="<?php echo $bp; ?>solutions/google-calendar-meet/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/><path d="M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Google Calendar</span><span class="mega-link-desc">Book · Meet · Remind</span></span></a>
                <a href="<?php echo $bp; ?>facebook-ads/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Facebook Ads</span><span class="mega-link-desc">Click-to-WhatsApp</span></span></a>
                <a href="<?php echo $bp; ?>integrations/crm/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></span><span class="mega-link-text"><span class="mega-link-title">CRM Integration</span><span class="mega-link-desc">HubSpot & more</span></span></a>
                <a href="<?php echo $bp; ?>integrations/api-webhooks/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Webhooks & API</span><span class="mega-link-desc">Real-time events</span></span></a>
                <a href="<?php echo $bp; ?>integrations/custom/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Custom Integration</span><span class="mega-link-desc">Your stack</span></span></a>
              </div>
              <div class="mega-sol-col">
                <div class="mega-col-title">BY USE CASE</div>
                <a href="<?php echo $bp; ?>solutions/appointment/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Appointments</span><span class="mega-link-desc">Booking & reminders</span></span></a>
                <a href="<?php echo $bp; ?>solutions/class-bookings/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10l-10-5L2 10l10 5 10-5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Class bookings</span><span class="mega-link-desc">Batches & seats</span></span></a>
                <a href="<?php echo $bp; ?>solutions/inventory-subscriptions-invoices/#invoices" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Invoice & Payments</span><span class="mega-link-desc">Collect on WhatsApp</span></span></a>
                <a href="<?php echo $bp; ?>solutions/inventory-subscriptions-invoices/#subscriptions" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 1l4 4-4 4"/><path d="M3 11V9a4 4 0 014-4h14"/><path d="M7 23l-4-4 4-4"/><path d="M21 13v2a4 4 0 01-4 4H3"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Subscriptions</span><span class="mega-link-desc">Renewals & plans</span></span></a>
                <a href="<?php echo $bp; ?>solutions/inventory-subscriptions-invoices/#inventory" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Inventory</span><span class="mega-link-desc">Stock alerts</span></span></a>
                <a href="<?php echo $bp; ?>solutions/marketing-sales-customer-service/#service" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Customer Service</span><span class="mega-link-desc">Support inbox</span></span></a>
                <a href="<?php echo $bp; ?>solutions/marketing-sales-customer-service/#sales" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20V10"/><path d="M18 20V4"/><path d="M6 20v-4"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Sales</span><span class="mega-link-desc">Qualify & close</span></span></a>
                <a href="<?php echo $bp; ?>solutions/marketing-sales-customer-service/#marketing" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 11l18-5v12L3 13v-2z"/><path d="M11.6 16.8a3 3 0 11-5.2-3"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Marketing</span><span class="mega-link-desc">Campaigns & nurture</span></span></a>
                <a href="<?php echo $bp; ?>solutions/recruitment/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="8.5" cy="7" r="4"/><path d="M20 8v6M23 11h-6"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Recruitment</span><span class="mega-link-desc">Hiring on WhatsApp</span></span></a>
                <a href="<?php echo $bp; ?>solutions/collections/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Collections</span><span class="mega-link-desc">Payment reminders</span></span></a>
                <a href="<?php echo $bp; ?>solutions/onboarding/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15h6"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Onboarding</span><span class="mega-link-desc">Activate customers</span></span></a>
              </div>
              <div class="mega-sol-col">
                <div class="mega-col-title">BY INDUSTRY</div>
                <a href="<?php echo $bp; ?>industries/healthcare/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Healthcare</span><span class="mega-link-desc">Clinics & care</span></span></a>
                <a href="<?php echo $bp; ?>industries/education/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10l-10-5L2 10l10 5 10-5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Education</span><span class="mega-link-desc">Admissions & fees</span></span></a>
                <a href="<?php echo $bp; ?>industries/ecommerce/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></span><span class="mega-link-text"><span class="mega-link-title">E-commerce</span><span class="mega-link-desc">Carts & orders</span></span></a>
                <a href="<?php echo $bp; ?>industries/real-estate/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><path d="M9 22V12h6v10"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Real Estate</span><span class="mega-link-desc">Site visits</span></span></a>
                <a href="<?php echo $bp; ?>industries/automotive/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17h14v2a1 1 0 01-1 1H6a1 1 0 01-1-1v-2z"/><path d="M5 17l-1-7h16l-1 7"/><path d="M7 10V7a1 1 0 011-1h8a1 1 0 011 1v3"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Automotive</span><span class="mega-link-desc">Sales & service</span></span></a>
                <a href="<?php echo $bp; ?>industries/finance/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Finance</span><span class="mega-link-desc">BFSI messaging</span></span></a>
                <a href="<?php echo $bp; ?>solutions/data-marketplace/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Data Marketplace</span><span class="mega-link-desc">Business datasets</span></span></a>
              </div>
            </div>
          </div>
        </div>

<div class="nav-item nav-item-secondary" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Business Leads <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-panel" role="menu">
            <div class="mega-panel">
              <div class="mega-panel-links">
                <a href="/solutions/data-marketplace/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg></span><span class="mega-link-text"><span class="mega-link-title">All Datasets</span><span class="mega-link-desc">Browse marketplace</span></span></a>
                <a href="/solutions/data-marketplace/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Real Estate Leads</span><span class="mega-link-desc">Buyers & businesses</span></span></a>
                <a href="/solutions/data-marketplace/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10l-10-5L2 10l10 5 10-5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Education Leads</span><span class="mega-link-desc">Institutes & students</span></span></a>
                <a href="/solutions/data-marketplace/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Healthcare Leads</span><span class="mega-link-desc">Clinics & wellness</span></span></a>
                <a href="/solutions/data-marketplace/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></span><span class="mega-link-text"><span class="mega-link-title">E-commerce Leads</span><span class="mega-link-desc">D2C & online brands</span></span></a>
                <a href="/solutions/data-marketplace/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17h14v2H5v-2z"/><path d="M5 17l-1-7h16l-1 7"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Automotive Leads</span><span class="mega-link-desc">Dealers & buyers</span></span></a>
                <a href="/solutions/data-marketplace/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></span><span class="mega-link-text"><span class="mega-link-title">B2B Business Data</span><span class="mega-link-desc">Owners & companies</span></span></a>
                <a href="/solutions/data-marketplace/#custom-request" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Custom Data Request</span><span class="mega-link-desc">Tell us your audience</span></span></a>
              </div>
              <div class="mega-panel-aside">
                <strong>Data Marketplace</strong>
                <p>Category-wise business datasets. Request access on WhatsApp — no public pricing.</p>
                <a href="/solutions/data-marketplace/" class="btn btn-primary btn-sm">Explore Marketplace</a>
              </div>
            </div>
          </div>
        </div>
<div class="nav-item" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Resources <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-panel" role="menu">
            <div class="mega-panel" style="display:grid;grid-template-columns:repeat(4,minmax(140px,1fr));gap:1.25rem;padding:1.25rem;min-width:min(720px,90vw)">
              <div>
                <div class="mega-col-title">SUPPORT</div>
                <a href="/resources/help-center/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3M12 17h.01"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Help Center</span><span class="mega-link-desc">Guides & FAQs</span></span></a>
                <a href="/resources/help-center/#support-form" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Contact Support</span><span class="mega-link-desc">Raise a ticket</span></span></a>
              </div>
              <div>
                <div class="mega-col-title">DEVELOPERS</div>
                <a href="/integrations/api-webhooks/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></span><span class="mega-link-text"><span class="mega-link-title">API Docs</span><span class="mega-link-desc">REST & webhooks</span></span></a>
                <a href="/resources/documentation/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Documentation</span><span class="mega-link-desc">Product guides</span></span></a>
              </div>
              <div>
                <div class="mega-col-title">LEARN</div>
                <a href="/resources/blog/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Blog</span><span class="mega-link-desc">Tips & insights</span></span></a>
                <a href="/resources/case-studies/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Case Studies</span><span class="mega-link-desc">Customer results</span></span></a>
                <a href="/resources/templates/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Templates</span><span class="mega-link-desc">Message templates</span></span></a>
              </div>
              <div>
                <div class="mega-col-title">DOWNLOADS</div>
                <a href="/resources/download-app/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Download App</span><span class="mega-link-desc">Android & desktop</span></span></a>
                <a href="/resources/download-ios-app/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a7 7 0 017 7c0 5-7 13-7 13S5 14 5 9a7 7 0 017-7z"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Download iOS App</span><span class="mega-link-desc">iPhone & iPad</span></span></a>
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
        <a href="<?php echo $bp; ?>" class="logo" aria-label="InboxWa Home">
          <img src="<?php echo $bp; ?>assets/images/logo.png" alt="InboxWa" class="logo-img" width="120" height="32" onerror="this.style.display='none'">
        </a>
        <button type="button" class="mobile-close btn btn-icon btn-ghost" aria-label="Close menu"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg></button>
      </div>
      <div class="mobile-drawer-body">
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Products <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <a href="/products/whatsapp-business-platform/#whatsapp-api">Official WhatsApp API</a>
            <a href="/products/whatsapp-business-platform/#team-inbox">Shared Team Inbox</a>
            <a href="/products/whatsapp-business-platform/#broadcasts">Broadcast Campaigns</a>
            <a href="/products/automation/">Automation</a>
            <a href="/products/crm-analytics/#crm">CRM</a>
            <a href="/products/crm-analytics/#analytics">Analytics</a>
            <a href="/products/whatsapp-form/">WhatsApp Form</a>
            <a href="/products/chatbot/">AI Chatbot &amp; Flow Builder</a>
            <a href="/products/channels/whatsapp/">WhatsApp</a>
            <a href="/products/channels/facebook/">Facebook</a>
            <a href="/products/channels/instagram/">Instagram</a>
            <a href="/products/channels/telegram/">Telegram</a>
          </div></div>
        </div>
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link" style="display:flex;align-items:center;justify-content:space-between;width:100%;">
            <span>Channels <span class="badge-live-pill" style="margin-left:6px;">Live</span></span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <a href="/channel/whatsapp/" style="font-weight:700;color:#10b981;">WhatsApp Business API</a>
            <a href="/products/channels/instagram/">Instagram DM Automation</a>
            <a href="/products/channels/telegram/">Telegram Bot Platform</a>
            <a href="/products/channels/facebook/">Facebook Messenger</a>
          </div></div>
        </div>
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Solutions <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <a href="/solutions/shopify/">Shopify</a>
            <a href="/solutions/woocommerce/">WooCommerce</a>
            <a href="/solutions/google-forms-sheets/">Google Sheet</a>
            <a href="/solutions/google-calendar-meet/">Google Calendar</a>
            <a href="/solutions/marketing-sales-customer-service/#service">Customer Support</a>
            <a href="/solutions/marketing-sales-customer-service/#sales">Sales &amp; Marketing</a>
            <a href="/solutions/lead-generation/">Lead Generation</a>
            <a href="/solutions/data-marketplace/">Data Marketplace</a>
            <a href="/industries/ecommerce/">E-commerce</a>
            <a href="/industries/education/">Education</a>
            <a href="/industries/healthcare/">Healthcare</a>
            <a href="/industries/real-estate/">Real Estate</a>
          </div></div>
        </div>
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Business Leads <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <a href="/solutions/data-marketplace/">All Datasets</a>
            <a href="/solutions/data-marketplace/">Real Estate Leads</a>
            <a href="/solutions/data-marketplace/">Education Leads</a>
            <a href="/solutions/data-marketplace/">Healthcare Leads</a>
            <a href="/solutions/data-marketplace/">E-commerce Leads</a>
            <a href="/solutions/data-marketplace/">B2B Business Data</a>
            <a href="/solutions/data-marketplace/#custom-request">Custom Request</a>
          </div></div>
        </div>
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Resources <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <a href="/resources/help-center/">Help Center</a>
            <a href="/resources/help-center/#support-form">Contact Support</a>
            <a href="/integrations/api-webhooks/">API Docs</a>
            <a href="/resources/documentation/">Documentation</a>
            <a href="/resources/blog/">Blog</a>
            <a href="/resources/case-studies/">Case Studies</a>
            <a href="/resources/templates/">Templates</a>
            <a href="/resources/download-app/">Download App</a>
            <a href="/resources/download-ios-app/">Download iOS App</a>
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
            <a href="/company/careers/">Careers</a>
            <a href="/contact/">Contact</a>
            <a href="/security/">Security</a>
            <a href="/privacy/">Privacy</a>
            <a href="/terms/">Terms</a>
          </div></div>
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
