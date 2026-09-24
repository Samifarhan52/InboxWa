<?php
$basePath = "";
require_once __DIR__ . '/config/cms.php';

$pageTitle = cms_setting('site_title', 'HelloBotz') . ' – ' . cms_setting('site_tagline', 'Scale Your Sales and Support on WhatsApp');
$pageDescription = 'Official WhatsApp Business API platform with shared inbox, AI chatbots, visual flow builder, bulk broadcasts, and CRM integrations.';
$canonicalUrl = 'https://hellobotz.com/';
$ogImage = 'https://hellobotz.com/assets/images/og-image.png';
$ogTitle = 'HelloBotz – WhatsApp Marketing & Automation Platform';
$ogDescription = 'Official WhatsApp Business API platform with shared inbox, AI chatbots, visual flow builder, bulk broadcasts, and CRM integrations.';

include __DIR__ . '/includes/header.php';
?>

<style>
  :root {
    --wa-green: #059669;
    --wa-green-hover: #047857;
    --wa-dark: #0f172a;
    --wa-slate: #1e293b;
  }

  .cw-main-page {
    background: #ffffff;
    color: #1e293b;
    overflow-x: hidden;
    width: 100%;
    max-width: 100vw;
    box-sizing: border-box;
  }

  /* Hero Section */
  .cw-hero-wrap {
    padding: 1.75rem 1.25rem 4.5rem;
    max-width: 1240px;
    width: 100%;
    margin: 0 auto;
    box-sizing: border-box;
  }
  .cw-hero-grid {
    display: grid;
    grid-template-columns: 1.15fr 0.85fr;
    gap: 3.5rem;
    align-items: center;
  }
  .cw-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(5, 150, 105, 0.1);
    border: 1px solid rgba(5, 150, 105, 0.25);
    color: #059669;
    font-size: 0.85rem;
    font-weight: 700;
    padding: 0.4rem 0.95rem;
    border-radius: 999px;
    margin-bottom: 1.25rem;
  }
  .cw-hero-title {
    font-size: clamp(2.25rem, 4.5vw, 3.65rem);
    font-weight: 800;
    line-height: 1.15;
    color: #0f172a;
    letter-spacing: -0.02em;
    margin-bottom: 1.25rem;
    text-wrap: balance;
  }
  /* Dual Color Gradient & Dynamic Text Rotator (Matches Image 2) */
  .cw-hero-title .dual-color-gradient,
  .cw-hero-title .highlight-green {
    background: linear-gradient(135deg, #0052ff 0%, #00b4ff 50%, #00e5ff 100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
    color: #0052ff;
    font-weight: 800;
    display: inline-block;
    filter: drop-shadow(0 2px 14px rgba(0, 150, 255, 0.22));
    letter-spacing: -0.01em;
  }

  .cw-rotator-wrap {
    display: inline-flex;
    vertical-align: top;
    position: relative;
    overflow: hidden;
    height: 1.25em;
    line-height: 1.25;
    margin: 0 0.28em;
    transition: width 0.35s cubic-bezier(0.16, 1, 0.3, 1);
  }

  .cw-rotator-item {
    position: absolute;
    left: 0;
    top: 0;
    white-space: nowrap;
    opacity: 0;
    transform: translateY(110%);
    transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.5s ease, filter 0.5s ease;
    filter: blur(5px);
    pointer-events: none;
    will-change: transform, opacity, filter;
  }

  .cw-rotator-item.active {
    position: relative;
    opacity: 1;
    transform: translateY(0);
    filter: blur(0);
    pointer-events: auto;
  }

  .cw-rotator-item.prev {
    position: absolute;
    opacity: 0;
    transform: translateY(-110%);
    filter: blur(5px);
    pointer-events: none;
  }
  .cw-hero-desc {
    font-size: 1.15rem;
    line-height: 1.65;
    color: #475569;
    margin-bottom: 2rem;
    max-width: 560px;
  }
  /* Master Hero CTA Action Row - Perfectly Aligned Single-Line Layout */
  .cw-hero-actions {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    gap: 0.75rem !important;
    flex-wrap: nowrap !important;
    margin-bottom: 2rem !important;
    width: max-content !important;
    max-width: 100% !important;
  }
  .cw-btn-primary {
    background: #059669 !important;
    color: #ffffff !important;
    font-family: inherit !important;
    font-weight: 700 !important;
    font-size: 0.92rem !important;
    height: 46px !important;
    line-height: 46px !important;
    padding: 0 1.3rem !important;
    border-radius: 9999px !important;
    border: 1.5px solid #059669 !important;
    text-decoration: none !important;
    box-shadow: 0 6px 18px -3px rgba(5, 150, 105, 0.38) !important;
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 0.45rem !important;
    white-space: nowrap !important;
    box-sizing: border-box !important;
    flex-shrink: 0 !important;
    vertical-align: middle !important;
    cursor: pointer !important;
  }
  .cw-btn-primary:hover {
    background: #047857 !important;
    border-color: #047857 !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 10px 24px -3px rgba(5, 150, 105, 0.5) !important;
    color: #ffffff !important;
  }
  .cw-btn-primary svg {
    width: 16px !important;
    height: 16px !important;
    flex-shrink: 0 !important;
    transition: transform 0.2s ease !important;
  }
  .cw-btn-primary:hover svg {
    transform: translateX(3px) !important;
  }
  .cw-btn-secondary {
    background: #ffffff !important;
    color: #0f172a !important;
    font-family: inherit !important;
    font-weight: 600 !important;
    font-size: 0.92rem !important;
    height: 46px !important;
    line-height: 46px !important;
    padding: 0 1.3rem !important;
    border-radius: 9999px !important;
    border: 1.5px solid #cbd5e1 !important;
    text-decoration: none !important;
    box-shadow: 0 4px 12px -2px rgba(15, 23, 42, 0.08) !important;
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 0.45rem !important;
    cursor: pointer !important;
    white-space: nowrap !important;
    box-sizing: border-box !important;
    flex-shrink: 0 !important;
    vertical-align: middle !important;
  }
  .cw-btn-secondary:hover {
    background: #f8fafc !important;
    border-color: #94a3b8 !important;
    color: #0f172a !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 6px 16px -2px rgba(15, 23, 42, 0.12) !important;
  }
  .cw-hero-actions .cw-btn-data,
  .cw-hero-actions .btn-download-data,
  .cw-hero-actions .btn-download-brochure,
  .stories-bottom-actions .btn-download-brochure {
    background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%) !important;
    color: #ffffff !important;
    font-family: inherit !important;
    font-weight: 700 !important;
    font-size: 0.92rem !important;
    height: 46px !important;
    line-height: 46px !important;
    padding: 0 1.25rem !important;
    border-radius: 9999px !important;
    border: 1.5px solid rgba(255, 255, 255, 0.25) !important;
    text-decoration: none !important;
    box-shadow: 0 6px 18px -3px rgba(79, 70, 229, 0.42) !important;
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 0.45rem !important;
    cursor: pointer !important;
    white-space: nowrap !important;
    box-sizing: border-box !important;
    flex-shrink: 0 !important;
    vertical-align: middle !important;
  }
  .cw-hero-actions .cw-btn-data:hover,
  .cw-hero-actions .btn-download-data:hover,
  .cw-hero-actions .btn-download-brochure:hover,
  .stories-bottom-actions .btn-download-brochure:hover {
    background: linear-gradient(135deg, #4338CA 0%, #6D28D9 100%) !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 10px 24px -3px rgba(79, 70, 229, 0.58) !important;
    color: #ffffff !important;
  }
  .cw-hero-actions .cw-btn-data svg,
  .cw-hero-actions .btn-download-data svg,
  .cw-hero-actions .btn-download-brochure svg,
  .stories-bottom-actions .btn-download-brochure svg {
    width: 17px !important;
    height: 17px !important;
    flex-shrink: 0 !important;
    transition: transform 0.2s ease !important;
  }
  .cw-hero-actions .cw-btn-data:hover svg,
  .cw-hero-actions .btn-download-data:hover svg,
  .cw-hero-actions .btn-download-brochure:hover svg,
  .stories-bottom-actions .btn-download-brochure:hover svg {
    transform: translateY(1.5px) !important;
  }

  /* ========================================================
     SEAMLESSLY INTEGRATE MARQUEE SECTION (HELLOBOTZ)
     ======================================================== */
  .hb-integrations-marquee-section {
    padding: 75px 0 65px;
    background: #FFFFFF;
    position: relative;
    overflow: hidden;
    border-top: 1px solid rgba(226, 232, 240, 0.8);
    border-bottom: 1px solid rgba(226, 232, 240, 0.8);
  }
  .hb-int-container {
    max-width: 900px;
    margin: 0 auto 36px;
    padding: 0 20px;
    text-align: center;
  }
  .hb-int-title {
    font-size: clamp(2rem, 3.5vw, 2.75rem);
    font-weight: 800;
    color: #0F172A;
    line-height: 1.25;
    letter-spacing: -0.03em;
    margin-bottom: 14px;
  }
  .hb-int-gradient-text {
    color: #9333EA;
    background: linear-gradient(135deg, #7C3AED 0%, #A855F7 50%, #C084FC 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }
  .hb-int-subtitle {
    font-size: clamp(1rem, 1.3vw, 1.15rem);
    color: #64748B;
    line-height: 1.65;
    max-width: 680px;
    margin: 0 auto;
  }
  .hb-marquee-wrapper {
    position: relative;
    overflow: hidden;
    width: 100%;
    padding: 12px 0;
    display: flex;
    flex-direction: column;
    gap: 16px;
  }
  .hb-marquee-wrapper::before,
  .hb-marquee-wrapper::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    width: clamp(60px, 12vw, 160px);
    pointer-events: none;
    z-index: 5;
  }
  .hb-marquee-wrapper::before {
    left: 0;
    background: linear-gradient(to right, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%);
  }
  .hb-marquee-wrapper::after {
    right: 0;
    background: linear-gradient(to left, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%);
  }
  html[data-theme="dark"] .hb-marquee-wrapper::before,
  body.dark-theme .hb-marquee-wrapper::before {
    background: linear-gradient(to right, #080c14 0%, rgba(8, 12, 20, 0) 100%) !important;
  }
  html[data-theme="dark"] .hb-marquee-wrapper::after,
  body.dark-theme .hb-marquee-wrapper::after {
    background: linear-gradient(to left, #080c14 0%, rgba(8, 12, 20, 0) 100%) !important;
  }
  .hb-marquee-row {
    display: flex;
    width: max-content;
    gap: 16px;
  }
  .hb-marquee-scroll-left {
    animation: hbMarqueeLeft 36s linear infinite;
  }
  .hb-marquee-scroll-right {
    animation: hbMarqueeRight 36s linear infinite;
  }
  .hb-marquee-wrapper:hover .hb-marquee-row {
    animation-play-state: paused;
  }
  @keyframes hbMarqueeLeft {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
  @keyframes hbMarqueeRight {
    0% { transform: translateX(-50%); }
    100% { transform: translateX(0); }
  }
  .hb-int-link {
    text-decoration: none;
    color: inherit;
    display: block;
  }
  .hb-int-card {
    display: flex;
    align-items: center;
    gap: 14px;
    background: #FFFFFF;
    padding: 13px 24px;
    border-radius: 16px;
    border: 1px solid #E2E8F0;
    box-shadow: 0 4px 10px -2px rgba(15, 23, 42, 0.05), 0 2px 4px -1px rgba(15, 23, 42, 0.02);
    min-width: 190px;
    white-space: nowrap;
    transition: transform 0.25s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.25s ease, border-color 0.25s ease;
    cursor: pointer;
    user-select: none;
  }
  .hb-int-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 24px -4px rgba(124, 58, 237, 0.12), 0 4px 8px -2px rgba(15, 23, 42, 0.04);
    border-color: #DDD6FE;
  }
  .hb-int-icon {
    width: 32px;
    height: 32px;
    object-fit: contain;
    flex-shrink: 0;
  }
  .hb-int-name {
    font-weight: 600;
    font-size: 0.95rem;
    color: #1E293B;
    letter-spacing: -0.01em;
  }
  @media (max-width: 768px) {
    .hb-integrations-marquee-section {
      padding: 55px 0 45px;
    }
    .hb-int-card {
      padding: 10px 18px;
      min-width: 155px;
      gap: 10px;
    }
    .hb-int-icon {
      width: 26px;
      height: 26px;
    }
    .hb-int-name {
      font-size: 0.88rem;
    }
  }
  .cw-trust-row {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    flex-wrap: wrap;
    font-size: 0.88rem;
    font-weight: 600;
    color: #64748b;
  }
  .cw-trust-item {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
  }

  /* Interactive 3D Mockup Phone Stage */
  .cw-phone-wrapper {
    position: relative;
    max-width: 375px;
    margin: 0 auto;
  }
  
  /* Glowing Ambient WhatsApp Aura */
  .cw-phone-aura {
    position: absolute;
    inset: -20px;
    border-radius: 64px;
    background: radial-gradient(circle at 50% 45%, rgba(0, 168, 132, 0.22) 0%, rgba(37, 211, 102, 0.12) 40%, rgba(16, 185, 129, 0.04) 65%, transparent 80%);
    filter: blur(28px);
    z-index: 1;
    pointer-events: none;
    animation: cwAuraBreathe 6s ease-in-out infinite alternate;
  }
  @keyframes cwAuraBreathe {
    0% { transform: scale(0.96); opacity: 0.75; }
    100% { transform: scale(1.04); opacity: 1; }
  }

  /* Sleek Flagship iPhone Device Chassis with Smooth Floating Motion */
  .cw-phone-device {
    background: #0d1319;
    border-radius: 48px;
    padding: 8px 8px 7px;
    box-shadow: 0 25px 65px -12px rgba(0, 0, 0, 0.5), 0 0 0 1.5px rgba(255, 255, 255, 0.12) inset, 0 1px 3px rgba(255, 255, 255, 0.2) inset;
    border: 10px solid #1a222d;
    position: relative;
    z-index: 2;
    animation: cwPhoneFloat 5s ease-in-out infinite alternate;
    transition: box-shadow 0.3s ease, border-color 0.3s ease;
  }
  @keyframes cwPhoneFloat {
    0% { transform: translateY(0); }
    100% { transform: translateY(-7px); }
  }
  /* Stabilize phone completely when cursor hovers, focuses, or types so typing is 100% steady */
  .cw-phone-wrapper:hover .cw-phone-device,
  .cw-phone-wrapper:focus-within .cw-phone-device {
    animation-play-state: paused;
    box-shadow: 0 30px 75px -10px rgba(0, 0, 0, 0.6), 0 0 0 1.5px rgba(0, 168, 132, 0.4) inset;
  }

  /* Realistic iPhone 11/12 Hardware Side Buttons */
  .cw-phone-btn-mute {
    position: absolute;
    left: -13px;
    top: 92px;
    width: 3.5px;
    height: 18px;
    background: #2a3443;
    border-radius: 2px 0 0 2px;
    box-shadow: -1px 0 2px rgba(0,0,0,0.5);
    pointer-events: none;
  }
  .cw-phone-btn-vup {
    position: absolute;
    left: -13px;
    top: 130px;
    width: 3.5px;
    height: 42px;
    background: #2a3443;
    border-radius: 2px 0 0 2px;
    box-shadow: -1px 0 2px rgba(0,0,0,0.5);
    pointer-events: none;
  }
  .cw-phone-btn-vdown {
    position: absolute;
    left: -13px;
    top: 184px;
    width: 3.5px;
    height: 42px;
    background: #2a3443;
    border-radius: 2px 0 0 2px;
    box-shadow: -1px 0 2px rgba(0,0,0,0.5);
    pointer-events: none;
  }
  .cw-phone-btn-power {
    position: absolute;
    right: -13px;
    top: 140px;
    width: 3.5px;
    height: 56px;
    background: #2a3443;
    border-radius: 0 2px 2px 0;
    box-shadow: 1px 0 2px rgba(0,0,0,0.5);
    pointer-events: none;
  }

  /* Glare Sweep Reflection */
  .cw-phone-glare {
    position: absolute;
    top: 0;
    left: -80%;
    width: 60%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.04), transparent);
    transform: skewX(-25deg);
    pointer-events: none;
    z-index: 10;
  }

  /* Hardware Top Bar (Live Status Clock + Classic iPhone 11/12 Notch) */
  .cw-phone-topbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 28px;
    padding: 0 16px;
    background: #008069;
    color: #ffffff;
    position: relative;
    z-index: 30;
    flex-shrink: 0;
    user-select: none;
    transition: background-color 0.25s ease, color 0.25s ease;
  }
  html[data-theme="dark"] .cw-phone-topbar {
    background: #202c33;
    color: #e9edef;
  }
  .cw-status-time {
    font-family: -apple-system, BlinkMacSystemFont, "SF Pro Text", "Helvetica Neue", sans-serif;
    font-size: 0.74rem;
    font-weight: 700;
    letter-spacing: -0.02em;
    line-height: 1;
    z-index: 32;
  }

  /* Classic iPhone 11 / 12 Notch (TrueDepth Sensor Housing) */
  .cw-iphone-notch {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 154px;
    height: 22px;
    background: #000000;
    border-radius: 0 0 14px 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.35);
    z-index: 35;
    pointer-events: none;
  }
  .cw-notch-sensor {
    width: 4px;
    height: 4px;
    border-radius: 50%;
    background: #0d131a;
  }
  .cw-notch-speaker {
    width: 46px;
    height: 3.5px;
    border-radius: 2px;
    background: #181d24;
    border: 0.5px solid rgba(255, 255, 255, 0.15);
  }
  .cw-notch-camera {
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: #080e16;
    border: 1px solid #1f2b38;
    position: relative;
  }
  .cw-notch-camera::after {
    content: '';
    position: absolute;
    top: 1.5px;
    left: 1.5px;
    width: 2.5px;
    height: 2.5px;
    border-radius: 50%;
    background: rgba(56, 189, 248, 0.85);
  }
  .cw-status-icons {
    display: flex;
    align-items: center;
    gap: 5px;
    opacity: 0.95;
    z-index: 32;
  }

  /* Authentic iOS Cellular Signal Bars */
  .cw-signal-bars {
    display: inline-flex;
    align-items: flex-end;
    gap: 1.5px;
    height: 10px;
  }
  .cw-signal-bars i {
    display: inline-block;
    width: 2.5px;
    background: currentColor;
    border-radius: 0.5px;
  }
  .cw-signal-bars i:nth-child(1) { height: 3px; }
  .cw-signal-bars i:nth-child(2) { height: 5px; }
  .cw-signal-bars i:nth-child(3) { height: 7px; }
  .cw-signal-bars i:nth-child(4) { height: 9.5px; }

  /* Authentic iOS Battery Icon */
  .cw-battery-icon {
    display: inline-flex;
    align-items: center;
    gap: 1px;
  }
  .cw-battery-shell {
    width: 19px;
    height: 9.5px;
    border-radius: 3px;
    border: 1px solid currentColor;
    padding: 1px;
    display: flex;
    align-items: center;
    box-sizing: border-box;
  }
  .cw-battery-fill {
    width: 78%;
    height: 100%;
    background: #22c55e;
    border-radius: 1px;
  }
  .cw-battery-nub {
    width: 1.5px;
    height: 4px;
    border-radius: 0 1px 1px 0;
    background: currentColor;
  }

  /* Phone Internal Screen */
  .cw-phone-screen {
    background: #efeae2;
    border-radius: 38px;
    height: 525px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    position: relative;
    border: 1px solid rgba(0, 0, 0, 0.12);
    transform: translateZ(0);
    transition: background-color 0.25s ease;
  }
  html[data-theme="dark"] .cw-phone-screen {
    background: #0b141a;
    border-color: rgba(255, 255, 255, 0.05);
  }

  /* WhatsApp Header */
  .cw-wa-header {
    background: #008069;
    padding: 7px 10px 8px;
    display: flex;
    align-items: center;
    gap: 6px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.08);
    flex-shrink: 0;
    color: #ffffff;
    transition: background-color 0.25s ease;
  }
  html[data-theme="dark"] .cw-wa-header {
    background: #202c33;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
  }
  .cw-wa-back {
    background: transparent;
    border: none;
    color: rgba(255, 255, 255, 0.9);
    padding: 4px 2px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    border-radius: 50%;
    transition: color 0.15s;
  }
  .cw-wa-back:hover {
    color: #ffffff;
  }
  .cw-wa-avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: #111b21;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    flex-shrink: 0;
  }
  .cw-wa-avatar-img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    border: 1.5px solid rgba(255, 255, 255, 0.25);
    display: block;
  }
  .cw-wa-avatar-badge {
    position: absolute;
    bottom: -1px;
    right: -1px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #25d366;
    border: 2px solid #008069;
  }
  html[data-theme="dark"] .cw-wa-avatar-badge {
    border-color: #202c33;
  }
  .cw-wa-header-info {
    flex: 1;
    min-width: 0;
    margin-left: 2px;
  }
  .cw-wa-title-row {
    display: flex;
    align-items: center;
    gap: 4px;
  }
  .cw-wa-title-row strong {
    color: #ffffff;
    font-size: 0.83rem;
    font-weight: 600;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
  }
  html[data-theme="dark"] .cw-wa-title-row strong {
    color: #e9edef;
  }
  .cw-verified-check {
    flex-shrink: 0;
  }
  .cw-wa-subtitle {
    color: rgba(255, 255, 255, 0.88);
    font-size: 0.66rem;
    display: flex;
    align-items: center;
    gap: 4px;
    margin-top: 1px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
  }
  html[data-theme="dark"] .cw-wa-subtitle {
    color: #8696a0;
  }
  .cw-live-dot { display: none !important;  display: none !important;  display: none !important; 
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #25d366;
    display: inline-block;
    box-shadow: 0 0 6px rgba(37, 211, 102, 0.9);
  }
  .cw-wa-header-tools {
    display: flex;
    align-items: center;
    gap: 2px;
  }
  .cw-tool-btn {
    background: transparent;
    border: none;
    color: rgba(255, 255, 255, 0.85);
    cursor: pointer;
    padding: 5px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
  }
  .cw-tool-btn:hover {
    color: #ffffff;
    background: rgba(255, 255, 255, 0.14);
  }
  html[data-theme="dark"] .cw-tool-btn {
    color: #aebac1;
  }
  html[data-theme="dark"] .cw-tool-btn:hover {
    color: #e9edef;
    background: rgba(255, 255, 255, 0.08);
  }

  /* WhatsApp Messages Scroll Area with Authentic WhatsApp Doodle Wallpaper */
  .cw-wa-body {
    flex: 1;
    padding: 10px 12px;
    display: flex;
    flex-direction: column;
    gap: 8px;
    overflow-y: auto;
    scroll-behavior: smooth;
    background-color: #efeae2;
    background-image: url('/assets/images/whatsapp-doodle-bg.png');
    background-repeat: repeat;
    background-size: 380px auto;
    transition: background-color 0.25s ease;
  }
  html[data-theme="dark"] .cw-wa-body {
    background-color: #0b141a;
    background-image: linear-gradient(rgba(11, 20, 26, 0.90), rgba(11, 20, 26, 0.90)), url('/assets/images/whatsapp-doodle-bg.png');
    background-repeat: repeat;
    background-size: 380px auto;
  }
  .cw-wa-body::-webkit-scrollbar {
    width: 4px;
  }
  .cw-wa-body::-webkit-scrollbar-thumb {
    background: rgba(0, 0, 0, 0.15);
    border-radius: 4px;
  }
  html[data-theme="dark"] .cw-wa-body::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.12);
  }

  /* Authentic WhatsApp Chat Bubbles */
  .cw-bubble {
    max-width: 85%;
    padding: 7px 11px 6px 11px;
    font-size: 0.81rem;
    line-height: 1.4;
    position: relative;
    word-break: break-word;
    box-shadow: 0 1px 0.5px rgba(11, 20, 26, 0.13);
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
  }
  /* Only dynamically added messages slide in smoothly */
  .cw-bubble.cw-msg-new {
    animation: cwMsgSlideIn 0.22s cubic-bezier(0.16, 1, 0.3, 1);
  }
  @keyframes cwMsgSlideIn {
    0% {
      opacity: 0;
      transform: translateY(6px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  @media (prefers-reduced-motion: reduce) {
    .cw-bubble.cw-msg-new {
      animation: none !important;
    }
  }
  .cw-bubble.user {
    align-self: flex-end;
    background: #d9fdd3;
    color: #111b21;
    border-radius: 8px 8px 0 8px;
  }
  .cw-bubble.user::after {
    content: "";
    position: absolute;
    top: 0;
    right: -7px;
    width: 8px;
    height: 12px;
    background: #d9fdd3;
    clip-path: polygon(0 0, 100% 0, 0 100%);
  }
  html[data-theme="dark"] .cw-bubble.user {
    background: #005c4b;
    color: #e9edef;
  }
  html[data-theme="dark"] .cw-bubble.user::after {
    background: #005c4b;
  }
  .cw-bubble.bot {
    align-self: flex-start;
    background: #ffffff;
    color: #111b21;
    border-radius: 8px 8px 8px 0;
  }
  .cw-bubble.bot::after {
    content: "";
    position: absolute;
    top: 0;
    left: -7px;
    width: 8px;
    height: 12px;
    background: #ffffff;
    clip-path: polygon(0 0, 100% 0, 100% 100%);
  }
  html[data-theme="dark"] .cw-bubble.bot {
    background: #202c33;
    color: #e9edef;
  }
  html[data-theme="dark"] .cw-bubble.bot::after {
    background: #202c33;
  }
  .cw-bubble-meta {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 3px;
    margin-top: 3px;
    font-size: 0.63rem;
    color: #667781;
  }
  html[data-theme="dark"] .cw-bubble-meta {
    color: #8696a0;
  }
  .cw-ticks {
    font-size: 0.72rem;
    letter-spacing: -1px;
    font-weight: 700;
    transition: color 0.2s ease, transform 0.2s ease;
  }
  .cw-ticks.double-blue {
    color: #53bdeb;
    display: inline-block;
    animation: cwTickPop 0.22s ease-out;
  }
  @keyframes cwTickPop {
    0% { transform: scale(0.7); }
    50% { transform: scale(1.2); }
    100% { transform: scale(1); }
  }
  .cw-ticks.grey {
    color: #667781;
  }
  html[data-theme="dark"] .cw-ticks.grey {
    color: #8696a0;
  }

  /* Interactive Bot CTA Action Button */
  .cw-bot-action-btn {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    background: rgba(0, 168, 132, 0.12);
    border: 1px solid rgba(0, 168, 132, 0.4);
    color: #008069;
    border-radius: 8px;
    padding: 5px 10px;
    font-size: 0.72rem;
    font-weight: 600;
    margin-top: 6px;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.2s;
  }
  .cw-bot-action-btn:hover {
    background: #00a884;
    color: #ffffff;
    border-color: #00a884;
    transform: translateY(-1px);
  }
  html[data-theme="dark"] .cw-bot-action-btn {
    background: rgba(0, 168, 132, 0.18);
    border-color: rgba(0, 168, 132, 0.45);
    color: #25d366;
  }

  /* Typing Indicator Bubble */
  .cw-typing-bubble {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 12px;
    border-radius: 8px 8px 8px 0;
    background: #ffffff;
    box-shadow: 0 1px 0.5px rgba(11, 20, 26, 0.13);
    align-self: flex-start;
  }
  html[data-theme="dark"] .cw-typing-bubble {
    background: #202c33;
  }
  .cw-typing-dots {
    display: inline-flex;
    align-items: center;
    gap: 3.5px;
  }
  .cw-typing-dots span {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #00a884;
    display: inline-block;
    animation: cwTypingWave 1.2s infinite ease-in-out;
  }
  .cw-typing-dots span:nth-child(1) { animation-delay: 0s; }
  .cw-typing-dots span:nth-child(2) { animation-delay: 0.18s; }
  .cw-typing-dots span:nth-child(3) { animation-delay: 0.36s; }
  @keyframes cwTypingWave {
    0%, 60%, 100% { transform: translateY(0); opacity: 0.4; }
    30% { transform: translateY(-4px); opacity: 1; }
  }
  .cw-typing-label {
    font-size: 0.7rem;
    color: #667781;
    font-style: italic;
  }
  html[data-theme="dark"] .cw-typing-label {
    color: #8696a0;
  }

  /* Quick Suggestion Chips Carousel */
  .cw-chips-wrap {
    background: rgba(240, 242, 245, 0.98);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-top: 1px solid rgba(0, 0, 0, 0.06);
    padding: 8px 10px 6px;
    flex-shrink: 0;
    position: relative;
    z-index: 20;
    pointer-events: auto !important;
    transition: background-color 0.25s ease;
  }
  html[data-theme="dark"] .cw-chips-wrap {
    background: rgba(11, 20, 26, 0.98);
    border-top-color: rgba(255, 255, 255, 0.06);
  }
  .cw-chips-hint {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 0.67rem;
    color: #54656f;
    margin-bottom: 6px;
    font-weight: 600;
  }
  html[data-theme="dark"] .cw-chips-hint {
    color: #8696a0;
  }
  .cw-chips-scroll {
    display: flex;
    gap: 7px;
    overflow-x: auto;
    white-space: nowrap;
    scrollbar-width: none;
    -ms-overflow-style: none;
    padding-bottom: 2px;
    -webkit-overflow-scrolling: touch;
  }
  .cw-chips-scroll::-webkit-scrollbar {
    display: none;
  }
  .cw-chip {
    background: #ffffff;
    border: 1px solid rgba(0, 168, 132, 0.35);
    color: #008069;
    border-radius: 16px;
    font-size: 0.73rem;
    font-weight: 600;
    padding: 6px 12px;
    cursor: pointer;
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
    flex-shrink: 0;
    position: relative;
    z-index: 25;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    pointer-events: auto !important;
    touch-action: manipulation;
    user-select: none;
    -webkit-user-select: none;
  }
  .cw-chip:hover {
    background: #00a884;
    border-color: #00a884;
    color: #ffffff;
    transform: translateY(-1.5px);
    box-shadow: 0 3px 8px rgba(0, 168, 132, 0.35);
  }
  .cw-chip:active {
    transform: scale(0.95);
  }
  html[data-theme="dark"] .cw-chip {
    background: #1f2c34;
    border-color: rgba(0, 168, 132, 0.4);
    color: #e9edef;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
  }
  html[data-theme="dark"] .cw-chip:hover {
    background: #00a884;
    border-color: #00a884;
    color: #ffffff;
    box-shadow: 0 4px 10px rgba(0, 168, 132, 0.4);
  }

  /* WhatsApp Chat Input Footer - High Contrast, Always-Active & Clickable */
  .cw-chat-footer {
    display: flex;
    align-items: center;
    gap: 7px;
    padding: 8px 10px 9px;
    background: #f0f2f5;
    border-top: 1px solid rgba(0, 0, 0, 0.06);
    flex-shrink: 0;
    position: relative;
    z-index: 30;
    pointer-events: auto !important;
    transition: background-color 0.25s ease;
  }
  html[data-theme="dark"] .cw-chat-footer {
    background: #202c33;
    border-top: 1px solid rgba(255, 255, 255, 0.06);
  }

  /* Unique Floating Alert Banner OUTSIDE Phone Frame - Down on Right Side */
  .cw-floating-sim-alert {
    position: absolute !important;
    bottom: 42px !important;
    right: -75px !important;
    top: auto !important;
    left: auto !important;
    z-index: 80 !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
    padding: 8px 13px 8px 10px !important;
    background: rgba(15, 23, 42, 0.95) !important;
    backdrop-filter: blur(16px) !important;
    -webkit-backdrop-filter: blur(16px) !important;
    border: 1.5px solid rgba(16, 185, 129, 0.55) !important;
    border-radius: 9999px !important;
    box-shadow: 0 16px 36px -8px rgba(0, 0, 0, 0.5), 0 0 22px rgba(16, 185, 129, 0.28) !important;
    cursor: pointer !important;
    animation: cwSimAlertFloatRight 3.2s ease-in-out infinite alternate !important;
    transition: opacity 0.25s ease, transform 0.25s ease, visibility 0.25s !important;
    user-select: none !important;
  }
  .cw-floating-sim-alert::before {
    content: '';
    position: absolute;
    left: -6px;
    top: 50%;
    transform: translateY(-50%) rotate(45deg);
    width: 11px;
    height: 11px;
    background: rgba(15, 23, 42, 0.95);
    border-left: 1.5px solid rgba(16, 185, 129, 0.55);
    border-bottom: 1.5px solid rgba(16, 185, 129, 0.55);
    border-top: none;
    border-right: none;
    border-radius: 0 0 0 2px;
    pointer-events: none;
  }
  @keyframes cwSimAlertFloatRight {
    0% { transform: translateY(0); }
    100% { transform: translateY(-5px); }
  }
  .cw-floating-sim-alert.dismissed {
    opacity: 0 !important;
    visibility: hidden !important;
    transform: translateY(-8px) scale(0.95) !important;
    pointer-events: none !important;
  }
  .cw-sim-alert-hand.cw-sim-hand-left {
    font-size: 1.15rem !important;
    animation: cwPointHandLeft 1.4s ease-in-out infinite alternate !important;
    flex-shrink: 0 !important;
    line-height: 1 !important;
  }
  @keyframes cwPointHandLeft {
    0% { transform: translateX(0); }
    100% { transform: translateX(-6px); }
  }
  .cw-sim-alert-beacon {
    position: relative;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }
  .cw-sim-pulse-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #10B981;
    box-shadow: 0 0 10px #10B981;
    z-index: 2;
  }
  .cw-sim-pulse-ring {
    position: absolute;
    inset: 0;
    border-radius: 50%;
    border: 1.5px solid rgba(16, 185, 129, 0.6);
    animation: cwSimRadar 2s infinite ease-out;
  }
  @keyframes cwSimRadar {
    0% { transform: scale(0.5); opacity: 1; }
    100% { transform: scale(1.4); opacity: 0; }
  }
  .cw-sim-alert-body {
    display: flex;
    flex-direction: column;
    line-height: 1.2;
    text-align: left;
  }
  .cw-sim-alert-badge {
    font-size: 0.58rem;
    font-weight: 800;
    letter-spacing: 0.05em;
    color: #34D399;
    text-transform: uppercase;
  }
  .cw-sim-alert-text {
    font-size: 0.78rem;
    font-weight: 700;
    color: #FFFFFF;
    white-space: nowrap;
  }
  .cw-sim-alert-close {
    background: transparent;
    border: none;
    color: rgba(255, 255, 255, 0.6);
    font-size: 15px;
    line-height: 1;
    padding: 0 0 0 4px;
    cursor: pointer;
    transition: color 0.15s ease;
  }
  .cw-sim-alert-close:hover {
    color: #FFFFFF;
  }

  @media (max-width: 991px) {
    .cw-floating-sim-alert {
      position: relative !important;
      bottom: auto !important;
      right: auto !important;
      left: auto !important;
      top: auto !important;
      margin: 14px auto 0 !important;
      display: inline-flex !important;
      animation: none !important;
    }
    .cw-floating-sim-alert::before {
      display: none !important;
    }
  }

  .cw-chat-btn-emoji {
    background: transparent;
    border: none;
    font-size: 1.25rem;
    cursor: pointer;
    padding: 4px;
    line-height: 1;
    opacity: 0.9;
    transition: opacity 0.2s, transform 0.2s;
    position: relative;
    z-index: 35;
    pointer-events: auto !important;
    touch-action: manipulation;
  }
  .cw-chat-btn-emoji:hover {
    opacity: 1;
    transform: scale(1.15);
  }
  .cw-chat-btn-clip {
    background: transparent;
    border: none;
    cursor: pointer;
    padding: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #54656f;
    transition: color 0.2s, transform 0.2s;
    position: relative;
    z-index: 35;
    pointer-events: auto !important;
    touch-action: manipulation;
  }
  .cw-chat-btn-clip:hover {
    color: #111b21;
    transform: scale(1.15);
  }
  html[data-theme="dark"] .cw-chat-btn-clip {
    color: #8696a0;
  }
  html[data-theme="dark"] .cw-chat-btn-clip:hover {
    color: #e9edef;
  }
  .cw-chat-input {
    flex: 1;
    background: #ffffff;
    border: 1.5px solid #d1d7db;
    border-radius: 22px;
    padding: 9px 15px;
    color: #111b21;
    font-size: 0.84rem;
    font-weight: 500;
    outline: none;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
    cursor: text !important;
    user-select: text !important;
    -webkit-user-select: text !important;
    position: relative;
    z-index: 35;
    pointer-events: auto !important;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
  }
  .cw-chat-input:focus {
    background: #ffffff;
    border-color: #00a884;
    box-shadow: 0 0 0 2px rgba(0, 168, 132, 0.25);
  }
  .cw-chat-input::placeholder {
    color: #667781;
    opacity: 1;
  }
  html[data-theme="dark"] .cw-chat-input {
    background: #2a3942;
    border-color: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    box-shadow: none;
  }
  html[data-theme="dark"] .cw-chat-input:focus {
    background: #32434d;
    border-color: #00a884;
    box-shadow: 0 0 0 2px rgba(0, 168, 132, 0.35);
  }
  html[data-theme="dark"] .cw-chat-input::placeholder {
    color: #8696a0;
  }
  .cw-chat-send {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: #00a884;
    border: none;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer !important;
    transition: transform 0.2s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.2s ease, box-shadow 0.2s ease;
    flex-shrink: 0;
    box-shadow: 0 2px 8px rgba(0, 168, 132, 0.4);
    position: relative;
    z-index: 35;
    pointer-events: auto !important;
    touch-action: manipulation;
  }
  .cw-chat-send:hover {
    background: #008f6f;
    transform: scale(1.08);
  }
  .cw-chat-send:active {
    transform: scale(0.92);
  }
  .cw-chat-send.has-text {
    transform: scale(1.06);
    box-shadow: 0 3px 12px rgba(0, 168, 132, 0.55);
  }

  /* Bottom iOS Home Indicator */
  .cw-home-bar {
    width: 120px;
    height: 4px;
    border-radius: 3px;
    background: rgba(0, 0, 0, 0.25);
    margin: 4px auto 3px;
    flex-shrink: 0;
    transition: background-color 0.25s ease;
  }
  html[data-theme="dark"] .cw-home-bar {
    background: rgba(255, 255, 255, 0.3);
  }

  /* ==========================================================================
     HELLOBOTZ INTERACTIVE ANIMATED FLOW BUILDER & SHOWCASE MODULES
     ========================================================================== */
  
  /* Hero Animated Teaser Box */
  .cw-hero-anim-box {
    margin-top: 1.25rem;
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 10px 14px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(226, 232, 240, 0.95);
    border-radius: 16px;
    box-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.08), 0 4px 6px -2px rgba(15, 23, 42, 0.03);
    cursor: pointer;
    transition: all 0.25s ease;
    user-select: none;
    max-width: 540px;
  }
  .cw-hero-anim-box:hover {
    transform: translateY(-2px);
    border-color: rgba(16, 185, 129, 0.5);
    box-shadow: 0 14px 30px -4px rgba(16, 185, 129, 0.15), 0 6px 12px -2px rgba(15, 23, 42, 0.06);
  }
  .cw-hero-anim-thumb {
    position: relative;
    width: 90px;
    height: 58px;
    border-radius: 10px;
    overflow: hidden;
    flex-shrink: 0;
    background: #0f172a;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.18);
  }
  .cw-hero-anim-video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  .cw-hero-anim-overlay {
    position: absolute;
    inset: 0;
    background: rgba(15, 23, 42, 0.25);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s ease;
  }
  .cw-hero-anim-box:hover .cw-hero-anim-overlay {
    background: rgba(15, 23, 42, 0.1);
  }
  .cw-hero-anim-play-icon {
    width: 26px;
    height: 26px;
    border-radius: 50%;
    background: #10b981;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-left: 2px;
    box-shadow: 0 3px 10px rgba(16, 185, 129, 0.5);
    transition: transform 0.25s ease;
  }
  .cw-hero-anim-box:hover .cw-hero-anim-play-icon {
    transform: scale(1.12);
  }
  .cw-hero-anim-live-tag {
    position: absolute;
    top: 4px;
    left: 4px;
    background: rgba(15, 23, 42, 0.8);
    backdrop-filter: blur(4px);
    color: #ffffff;
    font-size: 0.58rem;
    font-weight: 700;
    padding: 2px 5px;
    border-radius: 4px;
    display: flex;
    align-items: center;
    gap: 4px;
    letter-spacing: 0.02em;
  }
  .cw-hero-anim-details {
    flex: 1;
    min-width: 0;
  }
  .cw-hero-anim-title-row {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 2px;
    flex-wrap: wrap;
  }
  .cw-hero-anim-heading {
    font-size: 0.88rem;
    font-weight: 700;
    color: #0f172a;
  }
  .cw-hero-anim-pill {
    font-size: 0.65rem;
    font-weight: 700;
    color: #059669;
    background: #ecfdf5;
    border: 1px solid #a7f3d0;
    padding: 1px 7px;
    border-radius: 10px;
    letter-spacing: 0.02em;
  }
  .cw-hero-anim-sub {
    font-size: 0.76rem;
    color: #64748b;
    margin: 0;
    line-height: 1.35;
  }
  .cw-hero-anim-action {
    display: flex;
    align-items: center;
    padding-left: 2px;
  }
  .cw-hero-anim-expand-btn {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    background: #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #475569;
    transition: all 0.2s ease;
  }
  .cw-hero-anim-box:hover .cw-hero-anim-expand-btn {
    background: #ecfdf5;
    color: #059669;
  }

  /* Platform Showcase Section */
  .cw-platform-showcase-section {
    padding: 4.5rem 1.5rem 5rem;
    background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 60%, #ffffff 100%);
    position: relative;
    overflow: hidden;
  }
  .cw-showcase-container {
    max-width: 1140px;
    margin: 0 auto;
    position: relative;
  }
  .cw-showcase-header {
    text-align: center;
    max-width: 780px;
    margin: 0 auto 2.5rem;
  }
  .cw-showcase-pill {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 6px 14px;
    background: #ecfdf5;
    border: 1px solid #a7f3d0;
    border-radius: 30px;
    font-size: 0.78rem;
    font-weight: 700;
    color: #065f46;
    margin-bottom: 1rem;
    letter-spacing: 0.05em;
  }
  .cw-showcase-title {
    font-size: 2.35rem;
    font-weight: 800;
    color: #0f172a;
    line-height: 1.25;
    margin-bottom: 0.85rem;
    letter-spacing: -0.02em;
  }
  .cw-showcase-subtitle {
    font-size: 1.05rem;
    color: #64748b;
    line-height: 1.6;
    margin: 0;
  }
  .cw-showcase-tabs {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-bottom: 2.25rem;
    flex-wrap: wrap;
  }
  .cw-showcase-tab {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 10px 18px;
    font-size: 0.88rem;
    font-weight: 600;
    color: #475569;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s ease;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
  }
  .cw-showcase-tab:hover {
    border-color: #cbd5e1;
    color: #0f172a;
    transform: translateY(-1px);
  }
  .cw-showcase-tab.active {
    background: #0f172a;
    border-color: #0f172a;
    color: #ffffff;
    box-shadow: 0 4px 14px rgba(15, 23, 42, 0.2);
  }
  .cw-showcase-window-wrap {
    position: relative;
    max-width: 1040px;
    margin: 0 auto;
  }
  .cw-showcase-window {
    background: #ffffff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 25px 60px -15px rgba(15, 23, 42, 0.22), 0 0 0 1px rgba(15, 23, 42, 0.08);
  }
  .cw-window-titlebar {
    background: #0f172a;
    padding: 12px 18px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  }
  .cw-window-dots {
    display: flex;
    gap: 7px;
  }
  .cw-dot {
    width: 11px;
    height: 11px;
    border-radius: 50%;
  }
  .cw-dot.red { background: #ef4444; }
  .cw-dot.yellow { background: #f59e0b; }
  .cw-dot.green { background: #10b981; }
  .cw-window-url-bar {
    display: flex;
    align-items: center;
    gap: 7px;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.12);
    padding: 5px 14px;
    border-radius: 8px;
    color: #cbd5e1;
    font-size: 0.78rem;
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
    max-width: 480px;
    width: 100%;
    justify-content: center;
  }
  .cw-window-actions {
    display: flex;
    align-items: center;
  }
  .cw-window-expand {
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.15);
    color: #f1f5f9;
    padding: 5px 12px;
    border-radius: 7px;
    font-size: 0.74rem;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 6px;
    transition: background 0.2s;
  }
  .cw-window-expand:hover {
    background: rgba(255, 255, 255, 0.22);
  }
  .cw-window-screen {
    background: #0b0f19;
    position: relative;
    overflow: hidden;
  }
  .cw-tab-media {
    display: none;
    animation: cwFadeInMedia 0.35s ease;
  }
  .cw-tab-media.active {
    display: block;
  }
  @keyframes cwFadeInMedia {
    from { opacity: 0; transform: scale(0.995); }
    to { opacity: 1; transform: scale(1); }
  }
  .cw-showcase-media-elem {
    width: 100%;
    height: auto;
    max-height: 580px;
    object-fit: contain;
    display: block;
    background: #0b0f19;
    margin: 0 auto;
  }
  .cw-media-caption {
    padding: 14px 22px;
    background: #ffffff;
    border-top: 1px solid #e2e8f0;
    font-size: 0.88rem;
    color: #475569;
    display: flex;
    align-items: center;
    gap: 12px;
  }
  .cw-caption-badge {
    background: #10b981;
    color: #ffffff;
    font-size: 0.72rem;
    font-weight: 700;
    padding: 3px 8px;
    border-radius: 6px;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    flex-shrink: 0;
  }

  /* Floating Proof Badges */
  .cw-showcase-card {
    position: absolute;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.85);
    border-radius: 14px;
    padding: 10px 16px;
    box-shadow: 0 16px 36px rgba(15, 23, 42, 0.12);
    display: flex;
    align-items: center;
    gap: 10px;
    z-index: 5;
    pointer-events: none;
  }
  .cw-sc-left {
    bottom: 50px;
    left: -28px;
    animation: cwFloat 4s ease-in-out infinite alternate;
  }
  .cw-sc-right {
    top: 70px;
    right: -28px;
    animation: cwFloat 4s ease-in-out infinite alternate -2s;
  }
  .cw-sc-icon {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: #ecfdf5;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.15rem;
    flex-shrink: 0;
  }
  .cw-sc-text strong {
    display: block;
    font-size: 0.84rem;
    font-weight: 700;
    color: #0f172a;
    line-height: 1.2;
  }
  .cw-sc-text span {
    display: block;
    font-size: 0.72rem;
    color: #64748b;
  }

  /* Fullscreen Video Lightbox Modal */
  .cw-modal-overlay {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 999999;
    background: rgba(15, 23, 42, 0.88);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    align-items: center;
    justify-content: center;
    padding: 20px;
  }
  .cw-modal-overlay.open {
    display: flex;
  }
  .cw-modal-box {
    background: #0f172a;
    border-radius: 20px;
    width: 100%;
    max-width: 980px;
    overflow: hidden;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.55), 0 0 0 1px rgba(255, 255, 255, 0.1);
    display: flex;
    flex-direction: column;
    animation: cwModalPop 0.25s ease;
  }
  @keyframes cwModalPop {
    from { opacity: 0; transform: scale(0.96); }
    to { opacity: 1; transform: scale(1); }
  }
  .cw-modal-topbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 22px;
    background: #090d16;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  }
  .cw-modal-title {
    display: flex;
    align-items: center;
    gap: 9px;
    color: #f8fafc;
    font-size: 0.92rem;
    font-weight: 700;
  }
  .cw-modal-dot {
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: #10b981;
    box-shadow: 0 0 8px #10b981;
  }
  .cw-modal-close {
    background: rgba(255, 255, 255, 0.1);
    border: none;
    color: #cbd5e1;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    font-size: 1.4rem;
    line-height: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s;
  }
  .cw-modal-close:hover {
    background: #ef4444;
    color: #ffffff;
  }
  .cw-modal-tabs {
    display: flex;
    gap: 8px;
    padding: 12px 20px;
    background: #131b2e;
    border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    overflow-x: auto;
  }
  .cw-m-tab {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.08);
    color: #94a3b8;
    padding: 7px 15px;
    border-radius: 8px;
    font-size: 0.82rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
    white-space: nowrap;
  }
  .cw-m-tab:hover {
    color: #ffffff;
    background: rgba(255, 255, 255, 0.14);
  }
  .cw-m-tab.active {
    background: #10b981;
    border-color: #10b981;
    color: #ffffff;
  }
  .cw-modal-media-container {
    position: relative;
    background: #000000;
    min-height: 360px;
    max-height: 65vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }
  .cw-modal-video, .cw-modal-img {
    max-width: 100%;
    max-height: 65vh;
    width: auto;
    height: auto;
    display: block;
    object-fit: contain;
  }
  .cw-modal-footer {
    padding: 16px 22px;
    background: #090d16;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
  }
  .cw-modal-footnote {
    color: #94a3b8;
    font-size: 0.85rem;
  }
  .cw-modal-actions {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .cw-btn-modal-primary {
    background: #10b981;
    color: #ffffff;
    padding: 8px 18px;
    border-radius: 8px;
    font-size: 0.84rem;
    font-weight: 700;
    text-decoration: none;
    transition: background 0.2s;
    display: inline-block;
  }
  .cw-btn-modal-primary:hover {
    background: #059669;
    color: #ffffff;
  }
  .cw-btn-modal-secondary {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.15);
    color: #e2e8f0;
    padding: 8px 16px;
    border-radius: 8px;
    font-size: 0.84rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
  }
  .cw-btn-modal-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
  }

  @media (max-width: 768px) {
    .cw-platform-showcase-section {
      padding: 3rem 1rem 3.5rem;
    }
    .cw-showcase-title {
      font-size: 1.65rem;
    }
    .cw-showcase-subtitle {
      font-size: 0.92rem;
    }
    .cw-window-url-bar {
      display: none;
    }
    .cw-showcase-card {
      display: none !important;
    }
    .cw-hero-anim-box {
      padding: 8px 10px;
    }
    .cw-hero-anim-thumb {
      width: 76px;
      height: 50px;
    }
    .cw-hero-anim-heading {
      font-size: 0.82rem;
    }
    .cw-hero-anim-sub {
      font-size: 0.7rem;
    }
    .cw-modal-footer {
      flex-direction: column;
      align-items: stretch;
      text-align: center;
    }
    .cw-modal-actions {
      justify-content: center;
    }
  }

  /* Upgraded Floating Badges (Hidden to prevent covering phone mockup) */
  .cw-floating-card {
    display: none !important;
    position: absolute;
    z-index: 5;
    pointer-events: none; /* Never blocks user interaction with chat */
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.85);
    padding: 8px 14px;
    border-radius: 16px;
    box-shadow: 0 16px 36px rgba(15, 23, 42, 0.16), 0 2px 6px rgba(0, 0, 0, 0.04);
    display: flex;
    align-items: center;
    gap: 9px;
    animation: cwFloat 4.5s ease-in-out infinite alternate;
  }
  .cw-fc-1 {
    top: 8%;
    left: -32px;
  }
  .cw-fc-2 {
    bottom: 27%;
    right: -28px;
    animation-delay: -2.25s;
  }
  .cw-fc-text strong {
    display: block;
    font-size: 0.82rem;
    font-weight: 700;
    color: #0f172a;
    line-height: 1.2;
    white-space: nowrap;
  }
  .cw-fc-text span {
    display: block;
    font-size: 0.68rem;
    color: #64748b;
  }

  /* Live Pulsing Green Dot */
  .cw-pulse-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #10b981;
    position: relative;
    display: inline-block;
    box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7);
    animation: cwPulseDot 2s infinite;
    flex-shrink: 0;
  }
  @keyframes cwPulseDot {
    0% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); }
    70% { box-shadow: 0 0 0 8px rgba(16, 185, 129, 0); }
    100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
  }

  /* Animated ECG Heartbeat Pulse */
  .cw-ecg-icon polyline {
    stroke-dasharray: 50;
    stroke-dashoffset: 50;
    animation: cwEcgPulse 3s ease-in-out infinite;
  }
  @keyframes cwEcgPulse {
    0% { stroke-dashoffset: 50; opacity: 0.3; }
    40% { stroke-dashoffset: 0; opacity: 1; }
    80% { stroke-dashoffset: -50; opacity: 1; }
    100% { stroke-dashoffset: -50; opacity: 0.3; }
  }

  @keyframes cwFloat {
    from { transform: translateY(0); }
    to { transform: translateY(-9px); }
  }







  /* =========================================
     COMPREHENSIVE MOBILE RESPONSIVE ENGINE
     ========================================= */
  @media (max-width: 900px) {
    .cw-hero-wrap {
      width: 100% !important;
      max-width: 100% !important;
      padding: 1.5rem 1rem 3rem !important;
      box-sizing: border-box !important;
      overflow-x: hidden !important;
    }
    .cw-hero-grid {
      display: flex !important;
      flex-direction: column !important;
      gap: 2rem !important;
      width: 100% !important;
      max-width: 100% !important;
      min-width: 0 !important;
      box-sizing: border-box !important;
    }
    .cw-hero-content {
      width: 100% !important;
      max-width: 100% !important;
      min-width: 0 !important;
      box-sizing: border-box !important;
      text-align: center !important;
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
    }
    .cw-badge-pill {
      margin: 0 auto 1.25rem !important;
      white-space: normal !important;
      word-break: break-word !important;
      text-align: center !important;
      max-width: 100% !important;
    }
    .cw-hero-title {
      font-size: clamp(1.65rem, 6.8vw, 2.35rem) !important;
      line-height: 1.22 !important;
      word-break: break-word !important;
      overflow-wrap: break-word !important;
      text-align: center !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      margin-bottom: 1rem !important;
    }
    .cw-rotator-wrap {
      max-width: 100% !important;
      overflow: hidden !important;
      vertical-align: bottom !important;
    }
    .cw-hero-desc {
      font-size: 0.95rem !important;
      line-height: 1.55 !important;
      word-break: break-word !important;
      overflow-wrap: break-word !important;
      text-align: center !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      margin: 0 auto 1.5rem !important;
    }
    .cw-hero-actions {
      display: flex !important;
      flex-direction: column !important;
      width: 100% !important;
      max-width: 320px !important;
      margin: 0 auto 1.5rem !important;
      gap: 0.65rem !important;
      align-items: stretch !important;
    }
    .cw-hero-actions .cw-btn-primary,
    .cw-hero-actions .cw-btn-secondary,
    .cw-hero-actions .cw-btn-data,
    .cw-hero-actions .btn-download-data {
      width: 100% !important;
      box-sizing: border-box !important;
      justify-content: center !important;
      text-align: center !important;
      height: 46px !important;
      line-height: 46px !important;
      padding: 0 1.25rem !important;
      font-size: 0.92rem !important;
    }
    .cw-trust-row {
      display: grid !important;
      grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
      gap: 0.5rem 0.6rem !important;
      width: 100% !important;
      max-width: 360px !important;
      margin: 0 auto 1.5rem !important;
      font-size: 0.76rem !important;
      align-items: center !important;
      justify-items: center !important;
    }
    .cw-trust-item {
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 4px !important;
      white-space: nowrap !important;
      font-size: 0.76rem !important;
    }
    .cw-phone-wrapper {
      width: min(315px, calc(100vw - 32px)) !important;
      max-width: 315px !important;
      margin: 1.25rem auto 0 !important;
      box-sizing: border-box !important;
      perspective: none !important;
      transform-style: flat !important;
      overflow: visible !important;
    }
    .cw-phone-device {
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      transform: none !important;
      transform-style: flat !important;
      border-radius: 36px !important;
      padding: 8px 8px 6px !important;
      border-width: 2.5px !important;
    }
    .cw-phone-btn-mute,
    .cw-phone-btn-vup,
    .cw-phone-btn-vdown,
    .cw-phone-btn-power {
      display: none !important;
    }
    .cw-phone-screen {
      height: 440px !important;
      border-radius: 28px !important;
    }
    .cw-phone-aura {
      inset: 0 !important;
      filter: blur(16px) !important;
      border-radius: 40px !important;
    }
    .cw-floating-card {
      display: none !important;
    }
    .cw-table-container {
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      overflow-x: auto !important;
      -webkit-overflow-scrolling: touch !important;
      border-radius: 14px !important;
      margin: 0 auto !important;
    }
    .cw-comp-table {
      min-width: 560px !important;
      width: 100% !important;
    }

  }

  @media (max-width: 768px) {
    .cw-chat-input {
      font-size: 16px !important;
      -webkit-text-size-adjust: 100% !important;
    }
    .cw-wa-body {
      -webkit-overflow-scrolling: touch !important;
      overscroll-behavior: contain !important;
      padding: 8px 10px !important;
      gap: 7px !important;
    }
    .cw-section-title {
      font-size: clamp(1.4rem, 5.5vw, 1.85rem) !important;
    }
    .cw-section-subtitle {
      font-size: 0.9rem !important;
    }
  }

  @media (max-width: 400px) {
    .cw-hero-wrap {
      padding: 1.25rem 0.75rem 2.25rem !important;
    }
    .cw-hero-title {
      font-size: clamp(1.4rem, 6.2vw, 1.7rem) !important;
    }
    .cw-phone-wrapper {
      width: min(290px, calc(100vw - 20px)) !important;
      max-width: 290px !important;
    }
    .cw-phone-device {
      border-radius: 32px !important;
      padding: 6px 6px 5px !important;
    }
    .cw-phone-screen {
      height: 400px !important;
      border-radius: 24px !important;
    }
    .cw-wa-header {
      padding: 7px 8px !important;
      gap: 6px !important;
    }
    .cw-wa-title-row strong {
      font-size: 0.76rem !important;
    }
    .cw-wa-subtitle {
      font-size: 0.62rem !important;
    }
    .cw-chips-scroll {
      gap: 4px !important;
    }
    .cw-chip {
      padding: 4px 8px !important;
      font-size: 0.66rem !important;
    }
    .cw-chat-footer {
      padding: 5px 6px 6px !important;
      gap: 4px !important;
    }
    .cw-chat-input {
      padding: 6px 9px !important;
    }
    .cw-chat-send {
      width: 30px !important;
      height: 30px !important;
      min-width: 30px !important;
    }
  }

  /* ==========================================================================
     AUTHENTIC HELLOBOTZ FEATURES SECTION (JOURNEY FLOW)
     ========================================================================== */
  .reveal-item {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.65s cubic-bezier(.4,0,.2,1), transform 0.65s cubic-bezier(.4,0,.2,1);
  }
  .reveal-item.reveal-visible {
    opacity: 1;
    transform: translateY(0);
  }
  .reveal-left {
    opacity: 0;
    transform: translateX(-48px);
    transition: opacity 0.7s cubic-bezier(.4,0,.2,1), transform 0.7s cubic-bezier(.4,0,.2,1);
  }
  .reveal-left.reveal-visible {
    opacity: 1;
    transform: translateX(0);
  }
  .reveal-right {
    opacity: 0;
    transform: translateX(48px);
    transition: opacity 0.7s cubic-bezier(.4,0,.2,1), transform 0.7s cubic-bezier(.4,0,.2,1);
  }
  .reveal-right.reveal-visible {
    opacity: 1;
    transform: translateX(0);
  }

  .hb-features-section {
    position: relative;
    padding: 4.5rem 1.5rem 5.5rem;
    background: #ffffff;
    overflow: hidden;
  }
  .hb-features-container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 1rem;
    box-sizing: border-box;
  }
  .hb-features-header {
    text-align: center;
    max-width: 820px;
    margin: 0 auto 4.5rem;
  }
  .hb-features-badge {
    display: inline-block;
    font-size: 12px;
    font-weight: 800;
    color: var(--p, #7C3AED);
    background: rgba(124, 58, 237, 0.1);
    padding: 6px 18px;
    border-radius: 9999px;
    margin-bottom: 1.1rem;
    letter-spacing: 0.06em;
    text-transform: uppercase;
  }
  .hb-features-title {
    font-size: clamp(22px, 3.2vw, 36px);
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 1rem;
    line-height: 1.22;
    letter-spacing: -0.02em;
  }
  .hb-features-subtitle {
    font-size: clamp(15px, 1.25vw, 17px);
    color: #475569;
    line-height: 1.65;
  }

  .hb-feature-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: clamp(24px, 4vw, 48px);
    align-items: center;
    margin-bottom: clamp(32px, 4.5vw, 55px);
  }
  .hb-feature-text {
    box-sizing: border-box;
  }
  .hb-feature-icon-box {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 56px;
    height: 56px;
    border-radius: 16px;
    background: var(--p, #7C3AED);
    color: #ffffff;
    margin-bottom: 1.25rem;
    box-shadow: 0 10px 25px -5px rgba(124, 58, 237, 0.35);
  }
  .hb-feature-icon-box svg {
    width: 28px;
    height: 28px;
  }
  .hb-feature-item-title {
    font-size: clamp(22px, 2.4vw, 30px);
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 0.95rem;
    line-height: 1.22;
    letter-spacing: -0.015em;
  }
  .hb-feature-item-desc {
    font-size: clamp(15px, 1.2vw, 17px);
    color: #475569;
    line-height: 1.7;
    margin-bottom: 1.25rem;
  }
  .hb-feature-media-wrap {
    position: relative;
    width: 100%;
    max-width: 550px;
    margin: 0 auto;
    z-index: 10;
  }
  .hb-feature-media-inner {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .hb-feature-media-inner:hover {
    transform: translateY(-6px);
  }
  .hb-feature-img {
    width: 100%;
    height: auto;
    object-fit: contain;
    display: block;
    border-radius: 12px;
    transition: transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
  }

  /* Desktop Alternating Order: Odd features reverse order */
  @media (min-width: 1025px) {
    .hb-feature-row.is-odd .hb-feature-text {
      order: 2;
    }
    .hb-feature-row.is-odd .hb-feature-media-wrap {
      order: 1;
    }
  }

  /* Mobile Stack */
  @media (max-width: 1024px) {
    .hb-feature-row {
      grid-template-columns: 1fr;
      gap: 2.25rem;
      margin-bottom: 3.5rem;
    }
    .hb-feature-media-wrap {
      max-width: 480px;
    }
  }

  /* Bottom CTA Button */
  .hb-features-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.65rem;
    background: var(--p, #7C3AED);
    color: #ffffff !important;
    padding: 0.95rem 2.5rem;
    height: 52px;
    border-radius: 12px;
    font-weight: 700;
    font-size: 1.1rem;
    text-decoration: none;
    box-shadow: 0 10px 25px -5px rgba(124, 58, 237, 0.4);
    transition: all 0.3s ease;
  }
  .hb-features-cta-btn:hover {
    background: #6D28D9;
    transform: scale(1.05);
    box-shadow: 0 15px 30px -5px rgba(124, 58, 237, 0.5);
    color: #ffffff !important;
  }
  .hb-features-cta-btn svg {
    transition: transform 0.3s ease;
  }
  .hb-features-cta-btn:hover svg {
    transform: translateX(4px);
  }

  /* ==========================================================================
     SECTION 3: HOW IT WORKS (GO LIVE IN MINUTES, NOT MONTHS - 6 CARDS)
     ========================================================================== */
  .hiw-section {
    position: relative;
    padding: 5.5rem 1.5rem 6.5rem;
    background: #f8fafc;
    border-top: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
    overflow: hidden;
  }
  .hiw-container {
    max-width: 1280px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
  }
  .hiw-header {
    text-align: center;
    max-width: 820px;
    margin: 0 auto 3.5rem;
  }
  .hiw-badge {
    display: inline-block;
    font-size: 0.78rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #7c3aed;
    background: rgba(139, 92, 246, 0.12);
    padding: 6px 16px;
    border-radius: 9999px;
    margin-bottom: 1rem;
    border: 1px solid rgba(139, 92, 246, 0.25);
  }
  .hiw-title {
    font-size: clamp(2.1rem, 3.8vw, 3rem);
    font-weight: 900;
    line-height: 1.18;
    color: #0f172a;
    letter-spacing: -0.03em;
    margin: 0 0 1rem;
  }
  .hiw-subtitle {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #64748b;
    max-width: 720px;
    margin: 0 auto;
  }
  .hiw-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    position: relative;
    z-index: 2;
  }
  .hiw-card-wrapper {
    height: 100%;
  }
  .hiw-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow: hidden;
  }
  .hiw-card:hover {
    transform: translateY(-8px);
    border-color: #8b5cf6;
    box-shadow: 0 22px 48px rgba(124, 58, 237, 0.14);
  }
  .hiw-card-body {
    padding: 2.25rem 2rem 1.25rem;
    display: flex;
    flex-direction: column;
    flex: 1;
  }
  .hiw-step-num {
    width: 58px;
    height: 58px;
    border-radius: 16px;
    background: linear-gradient(135deg, #7c3aed 0%, #6366f1 100%);
    color: #ffffff;
    font-size: 1.55rem;
    font-weight: 900;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.35rem;
    box-shadow: 0 10px 22px rgba(124, 58, 237, 0.3);
    letter-spacing: -0.02em;
  }
  .hiw-step-tagline {
    font-size: 0.76rem;
    font-weight: 800;
    text-transform: uppercase;
    color: #7c3aed;
    letter-spacing: 0.08em;
    margin-bottom: 0.65rem;
    display: block;
  }
  .hiw-card-title {
    font-size: 1.35rem;
    font-weight: 800;
    line-height: 1.3;
    color: #0f172a;
    letter-spacing: -0.02em;
    margin: 0 0 0.85rem;
  }
  .hiw-card-desc {
    font-size: 0.93rem;
    line-height: 1.65;
    color: #64748b;
    margin: 0 0 1.35rem;
    flex: 1;
  }
  .hiw-bullets {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 0.7rem;
    border-top: 1px solid #f1f5f9;
    padding-top: 1.25rem;
  }
  .hiw-bullets li {
    display: flex;
    align-items: flex-start;
    gap: 0.65rem;
    font-size: 0.88rem;
    line-height: 1.45;
    color: #334155;
    font-weight: 500;
  }
  .hiw-check-icon {
    width: 18px;
    height: 18px;
    border-radius: 50%;
    background: rgba(16, 185, 129, 0.15);
    color: #059669;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    margin-top: 2px;
  }
  .hiw-check-icon svg {
    width: 11px;
    height: 11px;
  }
  .hiw-card-media {
    width: 100%;
    margin-top: 1.25rem;
    border-top: 1px solid #f1f5f9;
    background: #f8fafc;
    border-radius: 0 0 19px 19px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .hiw-card-media img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  }
  .hiw-card:hover .hiw-card-media img {
    transform: scale(1.03);
  }
  .hiw-cta-wrap {
    margin-top: 3.5rem;
    text-align: center;
  }
  .hiw-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.65rem;
    background: linear-gradient(135deg, #7c3aed 0%, #6366f1 50%, #06b6d4 100%);
    color: #ffffff !important;
    padding: 0.95rem 2.5rem;
    height: 52px;
    border-radius: 9999px;
    font-weight: 800;
    font-size: 1.05rem;
    text-decoration: none;
    box-shadow: 0 10px 25px rgba(124, 58, 237, 0.35);
    transition: all 0.3s ease;
  }
  .hiw-cta-btn:hover {
    transform: translateY(-2px) scale(1.03);
    box-shadow: 0 15px 35px rgba(124, 58, 237, 0.45);
    color: #ffffff !important;
  }
  .hiw-cta-subtext {
    font-size: 0.82rem;
    color: #64748b;
    margin-top: 0.85rem;
    font-weight: 500;
  }

  /* ==========================================================================
     SECTION 4: CUSTOMER STORIES / TESTIMONIALS (SINGLE ROW ANIMATED MARQUEE)
     ========================================================================== */
  .stories-section {
    position: relative;
    padding: 5.5rem 0 6.5rem;
    background: #ffffff;
    overflow: hidden;
  }
  .stories-container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 1.5rem;
    position: relative;
    z-index: 2;
  }
  .stories-header {
    text-align: center;
    max-width: 820px;
    margin: 0 auto 2.5rem;
  }
  .stories-badge {
    display: inline-block;
    font-size: 0.78rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #7c3aed;
    background: rgba(139, 92, 246, 0.1);
    padding: 6px 16px;
    border-radius: 9999px;
    margin-bottom: 1rem;
    border: 1px solid rgba(139, 92, 246, 0.22);
  }
  .stories-title {
    font-size: clamp(2.1rem, 3.8vw, 3rem);
    font-weight: 900;
    line-height: 1.18;
    color: #0f172a;
    letter-spacing: -0.03em;
    margin: 0 0 1rem;
  }
  .stories-subtitle {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #64748b;
    max-width: 720px;
    margin: 0 auto;
  }

  /* Trust Stats Strip */
  .stories-stats-strip {
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 1.5rem;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 1.5rem 2rem;
    margin: 0 auto 2.5rem;
    max-width: 1040px;
    box-shadow: 0 4px 20px rgba(15, 23, 42, 0.03);
  }
  .stories-stat-item {
    text-align: center;
  }
  .stories-stat-val {
    font-size: 1.75rem;
    font-weight: 900;
    color: #0f172a;
    line-height: 1.2;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.35rem;
  }
  .stories-star-rating {
    color: #f59e0b;
    font-size: 1.2rem;
    letter-spacing: 1px;
  }
  .stories-stat-lbl {
    font-size: 0.8rem;
    font-weight: 600;
    color: #64748b;
    margin-top: 0.25rem;
    text-transform: uppercase;
    letter-spacing: 0.04em;
  }
  .stories-stat-sep {
    width: 1px;
    height: 38px;
    background: #cbd5e1;
  }

  /* Interactive Category Chips */
  .stories-filter-chips {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-bottom: 2rem;
    padding: 0 1.5rem;
    max-width: 1280px;
    margin-left: auto;
    margin-right: auto;
  }
  .story-chip-btn {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    color: #475569;
    font-size: 0.84rem;
    font-weight: 700;
    padding: 0.5rem 1.15rem;
    border-radius: 9999px;
    cursor: pointer;
    transition: all 0.25s ease;
  }
  .story-chip-btn:hover {
    background: #e2e8f0;
    color: #0f172a;
    border-color: #cbd5e1;
  }
  .story-chip-btn.active {
    background: #7c3aed;
    color: #ffffff;
    border-color: #7c3aed;
    box-shadow: 0 4px 14px rgba(124, 58, 237, 0.35);
  }

  /* Interactive Controls Bar */
  .stories-ctrl-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 1rem;
    margin-bottom: 1.75rem;
    padding: 0 1.5rem;
    max-width: 1280px;
    margin-left: auto;
    margin-right: auto;
  }
  .stories-ctrl-left {
    display: flex;
    align-items: center;
    gap: 0.75rem;
  }
  .stories-ctrl-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
    font-size: 0.82rem;
    font-weight: 700;
    color: #475569;
    background: #f1f5f9;
    border: 1px solid #e2e8f0;
    padding: 0.5rem 1rem;
    border-radius: 9999px;
    cursor: pointer;
    transition: all 0.2s ease;
  }
  .stories-ctrl-btn:hover {
    background: #e2e8f0;
    color: #0f172a;
  }
  .stories-pulse-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #10b981;
    display: inline-block;
    box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.25);
    animation: dotPulse 1.8s infinite;
  }
  @keyframes dotPulse {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.3); opacity: 0.6; }
  }
  .stories-nav-arrows {
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }
  .stories-nav-arrow {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    color: #334155;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    transition: all 0.25s ease;
  }
  .stories-nav-arrow:hover {
    background: #7c3aed;
    color: #ffffff;
    border-color: #7c3aed;
    transform: scale(1.08);
    box-shadow: 0 4px 15px rgba(124, 58, 237, 0.3);
  }

  /* Single-Row Marquee Container & Track */
  .stories-marquee-container {
    width: 100%;
    position: relative;
    overflow: hidden;
    padding: 1.25rem 0 1.75rem;
    mask-image: linear-gradient(to right, transparent 0%, black 5%, black 95%, transparent 100%);
    -webkit-mask-image: linear-gradient(to right, transparent 0%, black 5%, black 95%, transparent 100%);
  }
  .stories-marquee-track {
    display: flex;
    gap: 1.75rem;
    width: max-content;
    will-change: transform;
    animation: singleRowMarquee 65s linear infinite;
  }
  .stories-marquee-container:hover .stories-marquee-track,
  .stories-marquee-container.is-paused .stories-marquee-track {
    animation-play-state: paused !important;
  }

  @keyframes singleRowMarquee {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(calc(-50% - 0.875rem));
    }
  }

  /* Single-Row Story Card */
  .story-scroller-card {
    width: 420px;
    max-width: 85vw;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 22px;
    padding: 2rem 1.85rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 10px 25px rgba(15, 23, 42, 0.04);
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    flex-shrink: 0;
    cursor: default;
    user-select: none;
    position: relative;
  }
  .story-scroller-card:hover {
    transform: translateY(-9px) scale(1.03);
    border-color: #8b5cf6;
    box-shadow: 0 24px 50px rgba(124, 58, 237, 0.18);
    z-index: 10;
  }

  /* Spotlight active state when filtering */
  .story-scroller-card.is-spotlight {
    border-color: #7c3aed !important;
    box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.25), 0 20px 45px rgba(124, 58, 237, 0.2) !important;
    transform: translateY(-6px) scale(1.02);
  }
  .story-scroller-card.is-dimmed {
    opacity: 0.45;
    filter: grayscale(30%);
  }

  .story-card-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 0.5rem;
    margin-bottom: 1.15rem;
  }
  .story-tag-group {
    display: flex;
    align-items: center;
    gap: 0.45rem;
    flex-wrap: wrap;
  }
  .story-tag {
    font-size: 0.72rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    padding: 0.25rem 0.65rem;
    border-radius: 9999px;
  }
  .story-metric-chip {
    font-size: 0.72rem;
    font-weight: 800;
    background: rgba(124, 58, 237, 0.1);
    color: #7c3aed;
    border: 1px solid rgba(124, 58, 237, 0.2);
    padding: 0.22rem 0.65rem;
    border-radius: 9999px;
  }
  .tag-bfsi { background: rgba(99, 102, 241, 0.12); color: #4338ca; }
  .tag-ecom { background: rgba(16, 185, 129, 0.12); color: #047857; }
  .tag-edu { background: rgba(245, 158, 11, 0.12); color: #b45309; }
  .tag-health { background: rgba(6, 182, 212, 0.12); color: #0e7490; }
  .tag-services { background: rgba(139, 92, 246, 0.12); color: #6d28d9; }

  .story-stars {
    color: #f59e0b;
    font-size: 1rem;
    letter-spacing: 2px;
  }
  .story-headline {
    font-size: 1.15rem;
    font-weight: 800;
    color: #0f172a;
    line-height: 1.35;
    margin: 0 0 0.85rem;
    letter-spacing: -0.01em;
  }
  .story-quote {
    font-size: 0.93rem;
    line-height: 1.68;
    color: #475569;
    margin: 0 0 1.5rem;
    flex: 1;
    position: relative;
  }
  .story-author {
    display: flex;
    align-items: center;
    gap: 0.85rem;
    border-top: 1px solid #f1f5f9;
    padding-top: 1.15rem;
  }
  .story-avatar-img {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    object-fit: cover;
    flex-shrink: 0;
    border: 2px solid #e2e8f0;
    box-shadow: 0 3px 10px rgba(0,0,0,0.07);
  }
  .story-author-info {
    flex: 1;
    min-width: 0;
  }
  .story-author-name {
    font-size: 0.9rem;
    font-weight: 800;
    color: #0f172a;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .story-author-role {
    font-size: 0.78rem;
    color: #64748b;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .story-verified {
    display: flex;
    align-items: center;
    gap: 0.25rem;
    font-size: 0.72rem;
    font-weight: 700;
    color: #059669;
    background: rgba(16, 185, 129, 0.1);
    padding: 3px 9px;
    border-radius: 9999px;
  }

  /* Bottom Trust Card */
  .stories-bottom-card {
    margin-top: 3.5rem;
    background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%);
    border-radius: 22px;
    padding: 2.75rem 3rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
    box-shadow: 0 20px 45px rgba(15, 23, 42, 0.25);
  }
  .stories-bottom-content h3 {
    font-size: 1.6rem;
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 0.5rem;
  }
  .stories-bottom-content p {
    font-size: 1rem;
    color: #94a3b8;
    margin: 0;
  }
  .stories-bottom-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
    flex-shrink: 0;
  }
  .btn-ghost-dark {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.85rem 1.6rem;
    border-radius: 9999px;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.25);
    color: #ffffff !important;
    font-weight: 700;
    font-size: 0.95rem;
    text-decoration: none;
    transition: all 0.2s ease;
  }
  .btn-ghost-dark:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: #ffffff;
  }

  /* Responsive Rules */
  @media (max-width: 1024px) {
    .hiw-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    .stories-bottom-card {
      flex-direction: column;
      text-align: center;
      padding: 2.25rem 2rem;
    }
    .stories-bottom-actions {
      justify-content: center;
    }
    .story-scroller-card {
      width: 360px;
    }
  }
  @media (max-width: 640px) {
    .hiw-grid {
      grid-template-columns: 1fr;
    }
    .stories-stats-strip {
      flex-direction: column;
      gap: 1rem;
      padding: 1.25rem;
    }
    .stories-stat-sep {
      display: none;
    }
    .stories-bottom-actions {
      flex-direction: column;
      width: 100%;
    }
    .stories-bottom-actions a {
      width: 100%;
      text-align: center;
      justify-content: center;
    }
    .story-scroller-card {
      width: 300px;
      padding: 1.5rem 1.25rem;
    }
  }

  /* ==========================================================================
     HOMEPAGE MASTER DARK MODE OVERRIDES
     ========================================================================== */
  html[data-theme="dark"] .cw-main-page {
    background: #080c14 !important;
    color: #f8fafc !important;
  }
  html[data-theme="dark"] .cw-hero-title {
    color: #f8fafc !important;
  }
  html[data-theme="dark"] .cw-hero-desc {
    color: #94a3b8 !important;
  }
  html[data-theme="dark"] .cw-trust-row,
  html[data-theme="dark"] .cw-trust-item {
    color: #94a3b8 !important;
  }
  html[data-theme="dark"] .cw-btn-secondary {
    background: rgba(255, 255, 255, 0.08) !important;
    border-color: rgba(255, 255, 255, 0.22) !important;
    color: #f8fafc !important;
    box-shadow: 0 4px 12px -2px rgba(0, 0, 0, 0.4) !important;
  }
  html[data-theme="dark"] .cw-btn-secondary:hover {
    background: rgba(255, 255, 255, 0.16) !important;
    border-color: rgba(255, 255, 255, 0.38) !important;
    color: #ffffff !important;
  }
  html[data-theme="dark"] .cw-hero-anim-box {
    background: rgba(15, 23, 42, 0.85) !important;
    border-color: rgba(255, 255, 255, 0.12) !important;
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.5) !important;
  }
  html[data-theme="dark"] .cw-hero-anim-box:hover {
    border-color: rgba(16, 185, 129, 0.6) !important;
  }
  html[data-theme="dark"] .cw-hero-anim-heading {
    color: #f8fafc !important;
  }
  html[data-theme="dark"] .cw-hero-anim-sub {
    color: #94a3b8 !important;
  }
  html[data-theme="dark"] .cw-hero-anim-expand-btn {
    background: rgba(255, 255, 255, 0.08) !important;
    color: #cbd5e1 !important;
  }
  html[data-theme="dark"] .cw-hero-anim-box:hover .cw-hero-anim-expand-btn {
    background: #059669 !important;
    color: #ffffff !important;
  }

  /* Platform Showcase Section */
  html[data-theme="dark"] .cw-platform-showcase-section {
    background: #080c14 !important;
  }
  html[data-theme="dark"] .cw-showcase-title {
    color: #f8fafc !important;
  }
  html[data-theme="dark"] .cw-showcase-subtitle {
    color: #94a3b8 !important;
  }
  html[data-theme="dark"] .cw-showcase-tab {
    background: #0f172a !important;
    border-color: rgba(255, 255, 255, 0.12) !important;
    color: #94a3b8 !important;
  }
  html[data-theme="dark"] .cw-showcase-tab:hover {
    color: #f8fafc !important;
    border-color: rgba(255, 255, 255, 0.25) !important;
  }
  html[data-theme="dark"] .cw-showcase-tab.active {
    background: #10b981 !important;
    border-color: #10b981 !important;
    color: #ffffff !important;
  }
  html[data-theme="dark"] .cw-media-caption {
    background: #0f172a !important;
    border-color: rgba(255, 255, 255, 0.08) !important;
    color: #cbd5e1 !important;
  }
  html[data-theme="dark"] .cw-showcase-card {
    background: rgba(15, 23, 42, 0.9) !important;
    border-color: rgba(255, 255, 255, 0.1) !important;
  }
  html[data-theme="dark"] .cw-sc-text strong {
    color: #f8fafc !important;
  }
  html[data-theme="dark"] .cw-sc-text span {
    color: #94a3b8 !important;
  }

  /* Features Section */
  html[data-theme="dark"] .hb-features-section {
    background: #080c14 !important;
  }
  html[data-theme="dark"] .hb-features-title {
    color: #f8fafc !important;
  }
  html[data-theme="dark"] .hb-features-subtitle {
    color: #94a3b8 !important;
  }
  html[data-theme="dark"] .hb-feature-item-title {
    color: #f8fafc !important;
  }
  html[data-theme="dark"] .hb-feature-item-desc {
    color: #94a3b8 !important;
  }

  /* How It Works Section */
  html[data-theme="dark"] .hiw-section {
    background: #080c14 !important;
  }
  html[data-theme="dark"] .hiw-title {
    color: #f8fafc !important;
  }
  html[data-theme="dark"] .hiw-subtitle {
    color: #94a3b8 !important;
  }
  html[data-theme="dark"] .hiw-card {
    background: #0f172a !important;
    border-color: rgba(255, 255, 255, 0.1) !important;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4) !important;
  }
  html[data-theme="dark"] .hiw-card:hover {
    border-color: #8b5cf6 !important;
    box-shadow: 0 22px 48px rgba(124, 58, 237, 0.22) !important;
  }
  html[data-theme="dark"] .hiw-card-title {
    color: #f8fafc !important;
  }
  html[data-theme="dark"] .hiw-card-desc {
    color: #94a3b8 !important;
  }
  html[data-theme="dark"] .hiw-bullets {
    border-top-color: rgba(255, 255, 255, 0.08) !important;
  }
  html[data-theme="dark"] .hiw-bullets li {
    color: #cbd5e1 !important;
  }
  html[data-theme="dark"] .hiw-card-media {
    background: #0b0f19 !important;
    border-top-color: rgba(255, 255, 255, 0.08) !important;
  }

  /* Customer Stories Section */
  html[data-theme="dark"] .stories-section {
    background: #080c14 !important;
  }
  html[data-theme="dark"] .stories-title {
    color: #f8fafc !important;
  }
  html[data-theme="dark"] .stories-subtitle {
    color: #94a3b8 !important;
  }
  html[data-theme="dark"] .stories-stats-strip {
    background: #0f172a !important;
    border-color: rgba(255, 255, 255, 0.1) !important;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3) !important;
  }
  html[data-theme="dark"] .stories-stat-val {
    color: #f8fafc !important;
  }
  html[data-theme="dark"] .stories-stat-lbl {
    color: #94a3b8 !important;
  }
  html[data-theme="dark"] .stories-stat-sep {
    background: rgba(255, 255, 255, 0.12) !important;
  }
  html[data-theme="dark"] .story-chip-btn {
    background: #0f172a !important;
    border-color: rgba(255, 255, 255, 0.12) !important;
    color: #cbd5e1 !important;
  }
  html[data-theme="dark"] .story-chip-btn:hover {
    background: rgba(255, 255, 255, 0.1) !important;
    color: #ffffff !important;
  }
  html[data-theme="dark"] .story-chip-btn.active {
    background: #7c3aed !important;
    border-color: #7c3aed !important;
    color: #ffffff !important;
  }
  html[data-theme="dark"] .stories-ctrl-btn {
    background: #0f172a !important;
    border-color: rgba(255, 255, 255, 0.12) !important;
    color: #cbd5e1 !important;
  }
  html[data-theme="dark"] .stories-ctrl-btn:hover {
    background: rgba(255, 255, 255, 0.1) !important;
    color: #ffffff !important;
  }
  html[data-theme="dark"] .stories-nav-arrow {
    background: #0f172a !important;
    border-color: rgba(255, 255, 255, 0.12) !important;
    color: #cbd5e1 !important;
  }
  html[data-theme="dark"] .stories-nav-arrow:hover {
    background: #7c3aed !important;
    border-color: #7c3aed !important;
    color: #ffffff !important;
  }
  html[data-theme="dark"] .story-scroller-card {
    background: #0f172a !important;
    border-color: rgba(255, 255, 255, 0.1) !important;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.35) !important;
  }
  html[data-theme="dark"] .story-scroller-card:hover {
    border-color: #8b5cf6 !important;
    box-shadow: 0 24px 50px rgba(124, 58, 237, 0.25) !important;
  }
  html[data-theme="dark"] .story-headline {
    color: #f8fafc !important;
  }
  html[data-theme="dark"] .story-quote {
    color: #94a3b8 !important;
  }
  html[data-theme="dark"] .story-author {
    border-top-color: rgba(255, 255, 255, 0.08) !important;
  }
  html[data-theme="dark"] .story-avatar-img {
    border-color: rgba(255, 255, 255, 0.15) !important;
  }
  html[data-theme="dark"] .story-author-name {
    color: #f8fafc !important;
  }
  html[data-theme="dark"] .story-author-role {
    color: #94a3b8 !important;
  }

</style>

<div class="cw-main-page">
  <!-- 1. HERO SECTION -->
  <section class="cw-hero-wrap">
    <div class="cw-hero-grid">
      <div class="cw-hero-content">
        <span class="cw-badge-pill">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
          <?php echo htmlspecialchars(cms_section('hero', 'badge', 'Official WhatsApp Connection')); ?>
        </span>
        <h1 class="cw-hero-title">
          HelloBotz — WhatsApp Automation Software &amp; <span class="cw-rotator-wrap" id="cwHeroRotator" aria-live="polite"><span class="cw-rotator-item dual-color-gradient active">AI Chatbot</span><span class="cw-rotator-item dual-color-gradient">Lead Generation</span><span class="cw-rotator-item dual-color-gradient">Bulk Broadcasts</span><span class="cw-rotator-item dual-color-gradient">Sales Funnels</span><span class="cw-rotator-item dual-color-gradient">Shopify &amp; CRM Sync</span><span class="cw-rotator-item dual-color-gradient">Shared Team Inbox</span></span> for Business
        </h1>
        <p class="cw-hero-desc">
          A complete WhatsApp automation software and WhatsApp marketing tool with AI chatbot for business, shared inbox, and omnichannel customer engagement platform — across WhatsApp, Instagram, Facebook &amp; Telegram.
        </p>
        <div class="cw-hero-actions">
          <a href="<?php echo htmlspecialchars(cms_section('hero', 'cta1_link', '/auth/register')); ?>" class="cw-btn-primary">
            <?php echo htmlspecialchars(cms_section('hero', 'cta1_text', "Start Automating - It's Free")); ?>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <button type="button" class="cw-btn-secondary btn-demo-open">
            <?php echo htmlspecialchars(cms_section('hero', 'cta2_text', 'Book a Demo')); ?>
          </button>
          <?php 
            $brochureUrl = trim(cms_setting('brochure_url', ''));
            $brochureHref = !empty($brochureUrl) ? htmlspecialchars($brochureUrl) : '#callback';
            $brochureTarget = !empty($brochureUrl) ? ' target="_blank" rel="noopener noreferrer"' : '';
            $brochureOnClick = empty($brochureUrl) ? ' onclick="if(window.openCallbackModal){openCallbackModal();return false;}"' : '';
          ?>
          <a href="<?php echo $brochureHref; ?>"<?php echo $brochureTarget; ?><?php echo $brochureOnClick; ?> class="cw-btn-data btn-download-brochure" title="Download HelloBotz Brochure">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            Download Brochure
          </a>
        </div>
        <div class="cw-trust-row">
          <span class="cw-trust-item" id="cw-side-leads">
            <span class="cw-pulse-dot" style="width:8px;height:8px;display:inline-block;border-radius:50%;background:#10b981;margin-right:2px;"></span>
            <strong><span id="cw-leads-num"><?php echo htmlspecialchars(cms_section('hero', 'float1_val', '+128')); ?></span> <?php echo htmlspecialchars(cms_section('hero', 'float1_label', 'Leads Captured')); ?></strong>
          </span>
          <span class="cw-trust-item">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
            <?php echo htmlspecialchars(cms_section('hero', 'float3_val', '99.9%')); ?> <?php echo htmlspecialchars(cms_section('hero', 'float3_label', 'Delivery Uptime')); ?>
          </span>
          <span class="cw-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <?php echo htmlspecialchars(cms_section('hero', 'float2_val', 'Official Meta API')); ?>
          </span>
          <span class="cw-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <?php echo htmlspecialchars(cms_section('hero', 'float2_label', 'Zero Ban Risk')); ?>
          </span>
        </div>

        <!-- Interactive Animated Flow Builder Demo Box -->
        <div class="cw-hero-anim-box" onclick="openHelloBotzVideoModal('flow')" role="button" tabindex="0" aria-label="Watch HelloBotz Flow Builder Animation">
          <div class="cw-hero-anim-thumb">
            <video class="cw-hero-anim-video" autoplay loop muted playsinline poster="/assets/images/animations/interakt-hero.gif">
              <source src="/assets/images/animations/flow-builder.mp4" type="video/mp4">
              <img src="/assets/images/animations/interakt-hero.gif" alt="HelloBotz Flow Builder Animation" loading="lazy">
            </video>
            <div class="cw-hero-anim-overlay">
              <span class="cw-hero-anim-play-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"/></svg>
              </span>
            </div>
            <span class="cw-hero-anim-live-tag">
              <span class="cw-pulse-dot" style="width:6px;height:6px;background:#10b981;border-radius:50%;display:inline-block;"></span>
              Live Flow
            </span>
          </div>
          <div class="cw-hero-anim-details">
            <div class="cw-hero-anim-title-row">
              <span class="cw-hero-anim-heading">See HelloBotz in Action</span>
              <span class="cw-hero-anim-pill">Visual Builder</span>
            </div>
            <p class="cw-hero-anim-sub">Watch how drag-and-drop conversational bots qualify leads &amp; trigger sales 24/7 &rarr;</p>
          </div>
          <div class="cw-hero-anim-action">
            <span class="cw-hero-anim-expand-btn" title="Expand Fullscreen Demo">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg>
            </span>
          </div>
        </div>
      </div>

      <!-- Interactive 3D Phone Simulator Stage -->
      <div class="cw-phone-wrapper" id="cw-phone-wrapper">
        <!-- Glowing Ambient Aura -->
        <div class="cw-phone-aura" aria-hidden="true"></div>

        <!-- Floating Interactive Simulator Alert OUTSIDE Phone Frame -->
        <div class="cw-floating-sim-alert" id="cw-floating-sim-alert" role="status" title="Click to test live chat">
          <div class="cw-sim-alert-hand cw-sim-hand-left" aria-hidden="true">👈</div>
          <div class="cw-sim-alert-beacon">
            <span class="cw-sim-pulse-dot"></span>
            <span class="cw-sim-pulse-ring"></span>
          </div>
          <div class="cw-sim-alert-body">
            <div class="cw-sim-alert-badge">⚡ LIVE DEMO</div>
            <strong class="cw-sim-alert-text">Type here to test Live!</strong>
          </div>
          <button type="button" class="cw-sim-alert-close" id="cw-sim-alert-close" aria-label="Dismiss alert">&times;</button>
        </div>

        <!-- 3D Tilting Phone Device Frame (iPhone 11 / 12) -->
        <div class="cw-phone-device" id="cw-phone-device">
          <!-- Realistic Hardware Side Buttons -->
          <span class="cw-phone-btn-mute" aria-hidden="true"></span>
          <span class="cw-phone-btn-vup" aria-hidden="true"></span>
          <span class="cw-phone-btn-vdown" aria-hidden="true"></span>
          <span class="cw-phone-btn-power" aria-hidden="true"></span>

          <!-- Glass Glare Sweep -->
          <div class="cw-phone-glare" aria-hidden="true"></div>

          <!-- Phone Screen -->
          <div class="cw-phone-screen">
            <!-- Hardware Top Bar: Live Status Clock + Classic iPhone 11/12 Notch -->
            <div class="cw-phone-topbar">
              <span class="cw-status-time" id="cw-status-clock">9:41</span>
              <div class="cw-iphone-notch" aria-hidden="true">
                <span class="cw-notch-sensor"></span>
                <span class="cw-notch-speaker"></span>
                <span class="cw-notch-camera"></span>
              </div>
              <div class="cw-status-icons" aria-hidden="true">
                <span class="cw-signal-bars" title="Signal">
                  <i></i><i></i><i></i><i></i>
                </span>
                <svg class="cw-wifi-icon" width="12" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M12 3c-4.97 0-9.46 2.02-12.73 5.3l1.42 1.42C3.37 7.03 7.42 5.2 12 5.2s8.63 1.83 11.31 4.52l1.42-1.42C21.46 5.02 16.97 3 12 3zm0 4c-3.87 0-7.37 1.57-9.9 4.1l1.41 1.42C5.69 10.5 8.66 9.2 12 9.2s6.31 1.3 8.49 3.32l1.41-1.42C19.37 8.57 15.87 7 12 7zm0 4c-2.76 0-5.26 1.12-7.07 2.93l1.41 1.41C7.79 13.9 9.77 13 12 13s4.21.9 5.66 2.34l1.41-1.41C17.26 12.12 14.76 11 12 11zm0 4c-1.66 0-3.16.67-4.24 1.76L12 21.01l4.24-4.25C15.16 15.67 13.66 15 12 15z"/></svg>
                <span class="cw-battery-icon" title="Battery 100%">
                  <span class="cw-battery-shell"><span class="cw-battery-fill"></span></span>
                  <span class="cw-battery-nub"></span>
                </span>
              </div>
            </div>
            <!-- WhatsApp Chat Header -->
            <div class="cw-wa-header">
              <button type="button" class="cw-wa-back" aria-label="Back to chats">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
              </button>
              <div class="cw-wa-avatar">
                <img src="<?php echo htmlspecialchars(cms_setting('bot_avatar_url', '/assets/images/logo-icon.png')); ?>" alt="HelloBotz" class="cw-wa-avatar-img">
                <span class="cw-wa-avatar-badge"></span>
              </div>
              <div class="cw-wa-header-info">
                <div class="cw-wa-title-row">
                  <strong>HelloBotz Business AI</strong>
                  <svg class="cw-verified-check" width="13" height="13" viewBox="0 0 24 24" fill="#10b981"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                </div>
                <span class="cw-wa-subtitle">Online • Official Meta Partner</span>
              </div>
              <div class="cw-wa-header-tools">
                <button type="button" class="cw-tool-btn" title="Video Call">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M18 10.48V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-4.48l4 3.98v-11l-4 3.5z"/></svg>
                </button>
                <button type="button" class="cw-tool-btn" title="Voice Call">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 0 0-1.01.24l-2.2 2.2a15.057 15.057 0 0 1-6.59-6.59l2.2-2.21a.96.96 0 0 0 .25-1.01A11.36 11.36 0 0 1 8.57 3.9c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.52c0-.55-.45-1-.99-1z"/></svg>
                </button>
                <button type="button" class="cw-tool-btn" id="cw-audio-toggle" title="Toggle audio sound (Click to mute/unmute)">
                  <svg id="cw-audio-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M15.54 8.46a5 5 0 0 1 0 7.07"/></svg>
                </button>
                <button type="button" class="cw-tool-btn" id="cw-chat-reset" title="Restart conversation">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"/><path d="M3 21v-5h5"/></svg>
                </button>
              </div>
            </div>

            <!-- WhatsApp Chat Messages Body -->
            <div class="cw-wa-body" id="cw-live-body">
              <div class="cw-bubble user">
                <span>Hi! How can HelloBotz automate our customer sales on WhatsApp?</span>
                <div class="cw-bubble-meta">
                  <span class="time">10:42 AM</span>
                  <span class="cw-ticks double-blue">✓✓</span>
                </div>
              </div>
              <div class="cw-bubble bot">
                <span>👋 Hello! With Official WhatsApp API, you can send broadcasts with 98% open rates, auto-qualify leads 24/7, and assign chats across your entire team from 1 single number!</span>
                <div class="cw-bubble-meta">
                  <span class="time">10:42 AM</span>
                </div>
              </div>
              <div class="cw-bubble user">
                <span>Can I connect my Shopify store &amp; CRM?</span>
                <div class="cw-bubble-meta">
                  <span class="time">10:43 AM</span>
                  <span class="cw-ticks double-blue">✓✓</span>
                </div>
              </div>
              <div class="cw-bubble bot">
                <span>✅ Yes! Orders, abandoned cart recoveries, and contact sync happen automatically with zero code.</span>
                <div class="cw-bubble-meta">
                  <span class="time">10:43 AM</span>
                </div>
              </div>

              <!-- Typing Indicator Bubble (controlled via JS) -->
              <div class="cw-bubble bot cw-typing-bubble" id="cw-typing-indicator" style="display:none;">
                <div class="cw-typing-dots">
                  <span></span><span></span><span></span>
                </div>
                <span class="cw-typing-label">HelloBotz AI is typing...</span>
              </div>
            </div>

            <!-- Quick Suggestion Chips Carousel -->
            <div class="cw-chips-wrap">
              <div class="cw-chips-hint">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#00a884" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                <span>Tap a topic or type below:</span>
              </div>
              <div class="cw-chips-scroll" id="cw-chips-container">
                <button type="button" class="cw-chip" data-query="<?php echo htmlspecialchars(cms_section('simulator', 'btn1', '💰 See Pricing')); ?>"><?php echo htmlspecialchars(cms_section('simulator', 'btn1', '💰 See Pricing')); ?></button>
                <button type="button" class="cw-chip" data-query="<?php echo htmlspecialchars(cms_section('simulator', 'btn2', '🤖 How AI Works')); ?>"><?php echo htmlspecialchars(cms_section('simulator', 'btn2', '🤖 How AI Works')); ?></button>
                <button type="button" class="cw-chip" data-query="<?php echo htmlspecialchars(cms_section('simulator', 'btn3', '📢 Send Broadcasts')); ?>"><?php echo htmlspecialchars(cms_section('simulator', 'btn3', '📢 Send Broadcasts')); ?></button>
                <button type="button" class="cw-chip" data-query="⚡ 0% Ban Guarantee">⚡ 0% Ban Guarantee</button>
                <button type="button" class="cw-chip" data-query="👥 Team Inbox">👥 Team Inbox</button>
                <button type="button" class="cw-chip" data-query="📞 Book Live Demo">📞 Book Live Demo</button>
              </div>
            </div>

            <!-- WhatsApp Chat Composer Footer -->
            <div class="cw-chat-footer" id="cw-chat-footer">
              <button type="button" class="cw-chat-btn-emoji" id="cw-emoji-btn" title="Add emoji">😊</button>
              <button type="button" class="cw-chat-btn-clip" id="cw-clip-btn" title="Attach media">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#8696a0" stroke-width="2"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"/></svg>
              </button>
              <input type="text" id="cw-chat-input" class="cw-chat-input" placeholder="Type a message..." autocomplete="off" maxlength="150" aria-label="Type your WhatsApp message">
              <button type="button" id="cw-chat-send" class="cw-chat-send" aria-label="Send message" title="Send message">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
              </button>
            </div>

            <!-- Bottom iOS Home Indicator -->
            <div class="cw-home-bar"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 2.0 SEAMLESSLY INTEGRATE WITH YOUR STACK SECTION (HELLOBOTZ) -->
  <section class="hb-integrations-marquee-section" id="integrations-stack">
    <div class="hb-int-container">
      <div class="hb-int-header">
        <h2 class="hb-int-title">
          Seamlessly <span class="hb-int-gradient-text">Integrate</span> with Your Stack
        </h2>
        <p class="hb-int-subtitle">
          Connect HelloBotz with 50+ platforms including Shopify, Zoho, Zapier, and more to automate your entire revenue workflow.
        </p>
      </div>
    </div>

    <!-- Dual Marquee Slider Wrapper -->
    <div class="hb-marquee-wrapper" aria-label="Seamlessly Integrated Platforms Marquee">
      <!-- Row 1: Left Scroll -->
      <div class="hb-marquee-row hb-marquee-scroll-left">
        <!-- Set 1 -->
        <a href="/integrations/shopify/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/shopify.png" class="hb-int-icon" alt="Shopify" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Shopify</span>
          </div>
        </a>
        <a href="/integrations/woocommerce/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/woocommerce.png" class="hb-int-icon" alt="WooCommerce" width="40" height="40" loading="lazy">
            <span class="hb-int-name">WooCommerce</span>
          </div>
        </a>
        <div class="hb-int-card">
          <img src="<?php echo $bp; ?>assets/images/integrations/gotab.png" class="hb-int-icon" alt="Gotab" width="40" height="40" loading="lazy">
          <span class="hb-int-name">Gotab</span>
        </div>
        <a href="/integrations/wortal/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/wortal.png" class="hb-int-icon" alt="Wortal" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Wortal</span>
          </div>
        </a>
        <a href="/integrations/shiprocket/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/shiprocket.png" class="hb-int-icon" alt="Shiprocket" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Shiprocket</span>
          </div>
        </a>
        <a href="/integrations/zoho/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/zoho.png" class="hb-int-icon" alt="Zoho" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Zoho</span>
          </div>
        </a>
        <a href="/integrations/google-sheets/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/google-sheet.png" class="hb-int-icon" alt="Google Sheet" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Google Sheet</span>
          </div>
        </a>
        <div class="hb-int-card">
          <img src="<?php echo $bp; ?>assets/images/integrations/n8n.png" class="hb-int-icon" alt="n8n" width="40" height="40" loading="lazy">
          <span class="hb-int-name">n8n</span>
        </div>

        <!-- Duplicate Set 1 for seamless infinite loop -->
        <a href="/integrations/shopify/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/shopify.png" class="hb-int-icon" alt="Shopify" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Shopify</span>
          </div>
        </a>
        <a href="/integrations/woocommerce/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/woocommerce.png" class="hb-int-icon" alt="WooCommerce" width="40" height="40" loading="lazy">
            <span class="hb-int-name">WooCommerce</span>
          </div>
        </a>
        <div class="hb-int-card">
          <img src="<?php echo $bp; ?>assets/images/integrations/gotab.png" class="hb-int-icon" alt="Gotab" width="40" height="40" loading="lazy">
          <span class="hb-int-name">Gotab</span>
        </div>
        <a href="/integrations/wortal/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/wortal.png" class="hb-int-icon" alt="Wortal" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Wortal</span>
          </div>
        </a>
        <a href="/integrations/shiprocket/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/shiprocket.png" class="hb-int-icon" alt="Shiprocket" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Shiprocket</span>
          </div>
        </a>
        <a href="/integrations/zoho/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/zoho.png" class="hb-int-icon" alt="Zoho" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Zoho</span>
          </div>
        </a>
        <a href="/integrations/google-sheets/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/google-sheet.png" class="hb-int-icon" alt="Google Sheet" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Google Sheet</span>
          </div>
        </a>
        <div class="hb-int-card">
          <img src="<?php echo $bp; ?>assets/images/integrations/n8n.png" class="hb-int-icon" alt="n8n" width="40" height="40" loading="lazy">
          <span class="hb-int-name">n8n</span>
        </div>
      </div>

      <!-- Row 2: Right Scroll -->
      <div class="hb-marquee-row hb-marquee-scroll-right">
        <!-- Set 2 (Offset sequence for visual interest) -->
        <div class="hb-int-card">
          <img src="<?php echo $bp; ?>assets/images/integrations/n8n.png" class="hb-int-icon" alt="n8n" width="40" height="40" loading="lazy">
          <span class="hb-int-name">n8n</span>
        </div>
        <a href="/integrations/shopify/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/shopify.png" class="hb-int-icon" alt="Shopify" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Shopify</span>
          </div>
        </a>
        <a href="/integrations/woocommerce/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/woocommerce.png" class="hb-int-icon" alt="WooCommerce" width="40" height="40" loading="lazy">
            <span class="hb-int-name">WooCommerce</span>
          </div>
        </a>
        <div class="hb-int-card">
          <img src="<?php echo $bp; ?>assets/images/integrations/gotab.png" class="hb-int-icon" alt="Gotab" width="40" height="40" loading="lazy">
          <span class="hb-int-name">Gotab</span>
        </div>
        <a href="/integrations/wortal/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/wortal.png" class="hb-int-icon" alt="Wortal" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Wortal</span>
          </div>
        </a>
        <a href="/integrations/shiprocket/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/shiprocket.png" class="hb-int-icon" alt="Shiprocket" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Shiprocket</span>
          </div>
        </a>
        <a href="/integrations/zoho/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/zoho.png" class="hb-int-icon" alt="Zoho" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Zoho</span>
          </div>
        </a>
        <a href="/integrations/google-sheets/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/google-sheet.png" class="hb-int-icon" alt="Google Sheet" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Google Sheet</span>
          </div>
        </a>

        <!-- Duplicate Set 2 for seamless infinite loop -->
        <div class="hb-int-card">
          <img src="<?php echo $bp; ?>assets/images/integrations/n8n.png" class="hb-int-icon" alt="n8n" width="40" height="40" loading="lazy">
          <span class="hb-int-name">n8n</span>
        </div>
        <a href="/integrations/shopify/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/shopify.png" class="hb-int-icon" alt="Shopify" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Shopify</span>
          </div>
        </a>
        <a href="/integrations/woocommerce/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/woocommerce.png" class="hb-int-icon" alt="WooCommerce" width="40" height="40" loading="lazy">
            <span class="hb-int-name">WooCommerce</span>
          </div>
        </a>
        <div class="hb-int-card">
          <img src="<?php echo $bp; ?>assets/images/integrations/gotab.png" class="hb-int-icon" alt="Gotab" width="40" height="40" loading="lazy">
          <span class="hb-int-name">Gotab</span>
        </div>
        <a href="/integrations/wortal/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/wortal.png" class="hb-int-icon" alt="Wortal" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Wortal</span>
          </div>
        </a>
        <a href="/integrations/shiprocket/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/shiprocket.png" class="hb-int-icon" alt="Shiprocket" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Shiprocket</span>
          </div>
        </a>
        <a href="/integrations/zoho/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/zoho.png" class="hb-int-icon" alt="Zoho" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Zoho</span>
          </div>
        </a>
        <a href="/integrations/google-sheets/" class="hb-int-link">
          <div class="hb-int-card">
            <img src="<?php echo $bp; ?>assets/images/integrations/google-sheet.png" class="hb-int-icon" alt="Google Sheet" width="40" height="40" loading="lazy">
            <span class="hb-int-name">Google Sheet</span>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- 2.5 AUTHENTIC FEATURES SECTION (HELLOBOTZ CLONE) -->
  <section class="hb-features-section" id="features">
    <div id="journey-flow" style="position: absolute; top: -80px; left: 0;"></div>
    <div class="hb-features-container">
      <!-- SECTION HEADER -->
      <div class="hb-features-header reveal-item">
        <span class="hb-features-badge">BUILT FOR GROWING BUSINESSES</span>
        <h2 class="hb-features-title">Everything You Need — WhatsApp Automation Software with AI Chatbot for Business</h2>
        <p class="hb-features-subtitle">HelloBotz gives your team Everything you need to automate, sell, and support customers —all in ONE place.</p>
      </div>

      <!-- 8-FEATURE ALTERNATING LIST -->
      <div class="hb-features-list">
        <!-- Feature 0: Key Capabilities & Setup (Even -> Left Text, Right Media) -->
        <div class="hb-feature-row is-even">
          <div class="hb-feature-text reveal-left" style="transition-delay: 0ms;">
            <div class="hb-feature-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h3 class="hb-feature-item-title">Key Capabilities &amp; Setup</h3>
            <p class="hb-feature-item-desc">Official Meta WABA API integration in under 2 minutes 24/7 automated instant responses for all incoming leads Pre-approved message templates and interactive buttons.</p>
          </div>
          <div class="hb-feature-media-wrap reveal-right" style="transition-delay: 120ms;">
            <div class="hb-feature-media-inner">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-0-capabilities.png" alt="Key Capabilities &amp; Setup" class="hb-feature-img hb-feature-img-light" loading="lazy">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-0-capabilities-dark.png" alt="Key Capabilities &amp; Setup" class="hb-feature-img hb-feature-img-dark" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Feature 1: Centralized Communication Hub (Odd -> Right Text, Left Media) -->
        <div class="hb-feature-row is-odd">
          <div class="hb-feature-text reveal-right" style="transition-delay: 0ms;">
            <div class="hb-feature-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h3 class="hb-feature-item-title">Centralized Communication Hub</h3>
            <p class="hb-feature-item-desc">Manage WhatsApp, Instagram DMs, Facebook, and Telegram in one screen Assign chats to team members with smart auto-routing Internal agent notes, SLA alerts, and real-time response tracking.</p>
          </div>
          <div class="hb-feature-media-wrap reveal-left" style="transition-delay: 120ms;">
            <div class="hb-feature-media-inner">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-1-hub.png" alt="Centralized Communication Hub" class="hb-feature-img hb-feature-img-light" loading="lazy">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-1-hub-dark.png" alt="Centralized Communication Hub" class="hb-feature-img hb-feature-img-dark" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Feature 2: Drag-and-Drop Automation (Even -> Left Text, Right Media) -->
        <div class="hb-feature-row is-even">
          <div class="hb-feature-text reveal-left" style="transition-delay: 0ms;">
            <div class="hb-feature-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h3 class="hb-feature-item-title">Drag-and-Drop Automation</h3>
            <p class="hb-feature-item-desc">Build multi-step conversational flows without writing code Set up keyword triggers, interactive buttons, and media replies Automatically qualify leads and capture customer details.</p>
          </div>
          <div class="hb-feature-media-wrap reveal-right" style="transition-delay: 120ms;">
            <div class="hb-feature-media-inner">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-2-automation.png" alt="Drag-and-Drop Automation" class="hb-feature-img hb-feature-img-light" loading="lazy">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-2-automation-dark.png" alt="Drag-and-Drop Automation" class="hb-feature-img hb-feature-img-dark" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Feature 3: Autonomous Voice Intelligence (Odd -> Right Text, Left Media) -->
        <div class="hb-feature-row is-odd">
          <div class="hb-feature-text reveal-right" style="transition-delay: 0ms;">
            <div class="hb-feature-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h3 class="hb-feature-item-title">Autonomous Voice Intelligence</h3>
            <p class="hb-feature-item-desc">Human-sounding AI handles inbound and outbound phone calls Automated lead qualification and routine customer inquiries Complete call summaries, audio logs, and transcriptions.</p>
          </div>
          <div class="hb-feature-media-wrap reveal-left" style="transition-delay: 120ms;">
            <div class="hb-feature-media-inner">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-3-voice.png" alt="Autonomous Voice Intelligence" class="hb-feature-img hb-feature-img-light" loading="lazy">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-3-voice-dark.png" alt="Autonomous Voice Intelligence" class="hb-feature-img hb-feature-img-dark" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Feature 4: High-Deliverability Outreach (Even -> Left Text, Right Media) -->
        <div class="hb-feature-row is-even">
          <div class="hb-feature-text reveal-left" style="transition-delay: 0ms;">
            <div class="hb-feature-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h3 class="hb-feature-item-title">High-Deliverability Outreach</h3>
            <p class="hb-feature-item-desc">Send personalized broadcast campaigns to thousands at once Schedule campaigns by date, time, and customer tags Live analytics tracking delivery rates, opens, and replies.</p>
          </div>
          <div class="hb-feature-media-wrap reveal-right" style="transition-delay: 120ms;">
            <div class="hb-feature-media-inner">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-4-outreach.png" alt="High-Deliverability Outreach" class="hb-feature-img hb-feature-img-light" loading="lazy">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-4-outreach-dark.png" alt="High-Deliverability Outreach" class="hb-feature-img hb-feature-img-dark" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Feature 5: Automated Sales Engine (Odd -> Right Text, Left Media) -->
        <div class="hb-feature-row is-odd">
          <div class="hb-feature-text reveal-right" style="transition-delay: 0ms;">
            <div class="hb-feature-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h3 class="hb-feature-item-title">Automated Sales Engine</h3>
            <p class="hb-feature-item-desc">Instant order updates and shipping confirmation alerts Automated abandoned cart recovery messages that convert In-chat product catalog display and direct payment links.</p>
          </div>
          <div class="hb-feature-media-wrap reveal-left" style="transition-delay: 120ms;">
            <div class="hb-feature-media-inner">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-5-sales.png" alt="Automated Sales Engine" class="hb-feature-img hb-feature-img-light" loading="lazy">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-5-sales-dark.png" alt="Automated Sales Engine" class="hb-feature-img hb-feature-img-dark" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Feature 6: Social Traffic Conversion (Even -> Left Text, Right Media) -->
        <div class="hb-feature-row is-even">
          <div class="hb-feature-text reveal-left" style="transition-delay: 0ms;">
            <div class="hb-feature-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h3 class="hb-feature-item-title">Social Traffic Conversion</h3>
            <p class="hb-feature-item-desc">Convert Facebook &amp; Instagram ad clicks directly into WhatsApp chats Track exact ad attribution and ROI for every campaign Pre-filled message templates allow instant customer response.</p>
          </div>
          <div class="hb-feature-media-wrap reveal-right" style="transition-delay: 120ms;">
            <div class="hb-feature-media-inner">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-6-social.png" alt="Social Traffic Conversion" class="hb-feature-img hb-feature-img-light" loading="lazy">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-6-social-dark.png" alt="Social Traffic Conversion" class="hb-feature-img hb-feature-img-dark" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Feature 7: Growth Metrics & Insights Dashboard (Odd -> Right Text, Left Media) -->
        <div class="hb-feature-row is-odd">
          <div class="hb-feature-text reveal-right" style="transition-delay: 0ms;">
            <div class="hb-feature-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h3 class="hb-feature-item-title">Growth Metrics &amp; Insights Dashboard</h3>
            <p class="hb-feature-item-desc">Real-time operational dashboard for messaging performance Monitor agent response speeds and conversation resolution rates Comprehensive campaign ROI tracking with CSV/PDF exports.</p>
          </div>
          <div class="hb-feature-media-wrap reveal-left" style="transition-delay: 120ms;">
            <div class="hb-feature-media-inner">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-7-dashboard.png" alt="Growth Metrics &amp; Insights Dashboard" class="hb-feature-img hb-feature-img-light" loading="lazy">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-7-dashboard-dark.png" alt="Growth Metrics &amp; Insights Dashboard" class="hb-feature-img hb-feature-img-dark" loading="lazy">
            </div>
          </div>
        </div>
      </div>

      <!-- BOTTOM CTA BUTTON -->
      <div class="reveal-item text-center" style="margin-top: 3.5rem; text-align: center;">
        <a href="<?php echo $bp; ?>features/" id="btnExploreAllFeatures" class="hb-features-cta-btn" aria-label="Explore All Features in Navigation Bar">
          Explore All Features
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       SECTION 3: HOW IT WORKS (GO LIVE IN MINUTES, NOT MONTHS - 6 CARDS)
       ========================================================================== -->
  <section class="hiw-section" id="how-it-works">
    <div class="hiw-container">
      <div class="hiw-header reveal-item">
        <span class="hiw-badge">⚡ How It Works</span>
        <h2 class="hiw-title">Go Live in Minutes, Not Months</h2>
        <p class="hiw-subtitle">Set up your WhatsApp automation software and WhatsApp CRM software in minutes — no developer required.</p>
      </div>

      <div class="hiw-grid">
        <!-- Card 1 -->
        <div class="hiw-card-wrapper reveal-item">
          <div class="hiw-card">
            <div class="hiw-card-body">
              <div class="hiw-step-num">01</div>
              <span class="hiw-step-tagline">CONNECT YOUR NUMBER</span>
              <h3 class="hiw-card-title">One-Click WhatsApp Business Onboarding</h3>
              <p class="hiw-card-desc">Connect your WhatsApp Business number directly through the platform using official Meta embedded signup. No developer account needed — just a few clicks and you're live.</p>
              <ul class="hiw-bullets">
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Official Meta onboarding flow with instant approval</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Connect number in under 2 minutes</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Secure OAuth authentication &amp; zero ban risk</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Supports multiple WABA numbers &amp; branches</span>
                </li>
              </ul>
            </div>
            <div class="hiw-card-media">
              <img src="<?php echo $bp; ?>assets/images/platform/step-1-onboarding.png" alt="One-Click WhatsApp Business Onboarding" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="hiw-card-wrapper reveal-item" style="transition-delay: 100ms;">
          <div class="hiw-card">
            <div class="hiw-card-body">
              <div class="hiw-step-num">02</div>
              <span class="hiw-step-tagline">BUILD YOUR BOT</span>
              <h3 class="hiw-card-title">No-Code AI Chatbot for Business — Automation Builder</h3>
              <p class="hiw-card-desc">Design powerful WhatsApp automation flows with a visual drag-and-drop builder. Set up keyword triggers, button responses, lead capture forms, and multi-step conversation logic — no coding required.</p>
              <ul class="hiw-bullets">
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Visual drag-and-drop flow editor</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Keyword, button &amp; QR code triggers</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>AI-powered smart reply suggestions &amp; fallback</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Multi-step conversation routing &amp; CRM sync</span>
                </li>
              </ul>
            </div>
            <div class="hiw-card-media">
              <img src="<?php echo $bp; ?>assets/images/platform/step-2-builder.png" alt="No-Code Chatbot &amp; Automation Builder" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="hiw-card-wrapper reveal-item" style="transition-delay: 200ms;">
          <div class="hiw-card">
            <div class="hiw-card-body">
              <div class="hiw-step-num">03</div>
              <span class="hiw-step-tagline">LAUNCH CAMPAIGNS</span>
              <h3 class="hiw-card-title">WhatsApp Broadcast Campaign Tool — Campaigns That Actually Convert</h3>
              <p class="hiw-card-desc">Send highly targeted WhatsApp campaigns to segmented audiences. Schedule messages, personalize with variables, and track real-time delivery, open, and reply rates from a single dashboard.</p>
              <ul class="hiw-bullets">
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Bulk WhatsApp broadcasts in seconds</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Audience segmentation by tags &amp; filters</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Schedule campaigns by date and time</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Live campaign analytics &amp; instant CSV export</span>
                </li>
              </ul>
            </div>
            <div class="hiw-card-media">
              <img src="<?php echo $bp; ?>assets/images/platform/step-3-campaigns.png" alt="Broadcast Campaigns That Actually Convert" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="hiw-card-wrapper reveal-item" style="transition-delay: 300ms;">
          <div class="hiw-card">
            <div class="hiw-card-body">
              <div class="hiw-step-num">04</div>
              <span class="hiw-step-tagline">AUTOMATE SALES</span>
              <h3 class="hiw-card-title">Automate Your Entire Ecommerce Flow</h3>
              <p class="hiw-card-desc">Sync your online store and let HelloBotz handle the entire post-purchase journey — from order confirmation to delivery tracking, abandoned cart recovery, and review collection.</p>
              <ul class="hiw-bullets">
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Shopify &amp; WooCommerce integration</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Automatic order status notifications</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Abandoned cart recovery messages</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Payment link delivery via WhatsApp</span>
                </li>
              </ul>
            </div>
            <div class="hiw-card-media">
              <img src="<?php echo $bp; ?>assets/images/platform/step-4-ecommerce.png" alt="Automate Your Entire Ecommerce Flow" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="hiw-card-wrapper reveal-item" style="transition-delay: 400ms;">
          <div class="hiw-card">
            <div class="hiw-card-body">
              <div class="hiw-step-num">05</div>
              <span class="hiw-step-tagline">DEVELOPERS</span>
              <h3 class="hiw-card-title">Powerful WhatsApp Business API for Custom Integrations</h3>
              <p class="hiw-card-desc">Integrate WhatsApp messaging into your CRM, ERP, or custom application with a clean, well-documented REST API. Trigger messages, manage contacts, and build fully custom workflows.</p>
              <ul class="hiw-bullets">
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Send messages &amp; templates via REST API</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Webhook support for real-time events</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Contact &amp; conversation management</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Easy integration with CRM, apps &amp; websites</span>
                </li>
              </ul>
            </div>
            <div class="hiw-card-media">
              <img src="<?php echo $bp; ?>assets/images/platform/step-5-api.png" alt="Powerful REST API for Custom Integrations" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="hiw-card-wrapper reveal-item" style="transition-delay: 500ms;">
          <div class="hiw-card">
            <div class="hiw-card-body">
              <div class="hiw-step-num">06</div>
              <span class="hiw-step-tagline">INSIGHTS</span>
              <h3 class="hiw-card-title">Real-Time Analytics &amp; Performance Reports</h3>
              <p class="hiw-card-desc">Track every message, campaign, and conversation with a powerful analytics dashboard. Monitor delivery rates, agent performance, campaign ROI, and customer engagement in real time.</p>
              <ul class="hiw-bullets">
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Live campaign delivery &amp; open rates</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Agent performance leaderboards</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Contact growth &amp; engagement trends</span>
                </li>
                <li>
                  <span class="hiw-check-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>Export reports as CSV or PDF</span>
                </li>
              </ul>
            </div>
            <div class="hiw-card-media">
              <img src="<?php echo $bp; ?>assets/images/platform/step-6-analytics.png" alt="Real-Time Analytics &amp; Performance Reports" loading="lazy">
            </div>
          </div>
        </div>
      </div>

      <div class="hiw-cta-wrap reveal-item">
        <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="hiw-cta-btn">
          Get Started Now
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
        <p class="hiw-cta-subtext">No credit card required • 7-day free trial • Live support onboarding included</p>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       SECTION 4: CUSTOMER STORIES / TESTIMONIALS (ANIMATED INFINITE SCROLLER)
       ========================================================================== -->
  <section class="stories-section" id="testimonials">
    <div class="stories-container">
      <div class="stories-header reveal-item">
        <span class="stories-badge">Customer Success Stories</span>
        <h2 class="stories-title">Real Results from Teams Powered by HelloBotz</h2>
        <p class="stories-subtitle">See how fast-growing businesses across retail, education, healthcare, and finance achieve 98% open rates and 4x faster response times.</p>
      </div>

      <!-- Trust Stats Banner -->
      <div class="stories-stats-strip reveal-item">
        <div class="stories-stat-item">
          <div class="stories-stat-val">
            <span>4.9</span>
            <span class="stories-star-rating">★★★★★</span>
          </div>
          <div class="stories-stat-lbl">Customer Rating (Meta Verified)</div>
        </div>
        <div class="stories-stat-sep"></div>
        <div class="stories-stat-item">
          <div class="stories-stat-val">98%</div>
          <div class="stories-stat-lbl">Average Open Rate</div>
        </div>
        <div class="stories-stat-sep"></div>
        <div class="stories-stat-item">
          <div class="stories-stat-val">10M+</div>
          <div class="stories-stat-lbl">Messages Delivered / Mo</div>
        </div>
        <div class="stories-stat-sep"></div>
        <div class="stories-stat-item">
          <div class="stories-stat-val">99.99%</div>
          <div class="stories-stat-lbl">Enterprise Uptime SLA</div>
        </div>
      </div>
    </div>

    <!-- Category Filter Chips -->
    <div class="stories-filter-chips">
      <button type="button" class="story-chip-btn active" data-filter="all">All Stories (12)</button>
      <button type="button" class="story-chip-btn" data-filter="ecommerce">E-Commerce &amp; Retail (3)</button>
      <button type="button" class="story-chip-btn" data-filter="education">Education &amp; EdTech (4)</button>
      <button type="button" class="story-chip-btn" data-filter="healthcare">Healthcare &amp; Clinics (1)</button>
      <button type="button" class="story-chip-btn" data-filter="bfsi">BFSI &amp; Banking (2)</button>
      <button type="button" class="story-chip-btn" data-filter="services">Logistics &amp; Services (2)</button>
    </div>

    <!-- Interactive Controls Bar -->
    <div class="stories-ctrl-bar">
      <div class="stories-ctrl-left">
        <button type="button" id="btnToggleMarquee" class="stories-ctrl-btn" aria-label="Pause or resume scrolling animation">
          <span class="stories-pulse-dot" id="marqueePulse"></span>
          <span id="marqueeBtnText">Pause Auto-Scroll</span>
        </button>
        <span style="font-size: 0.8rem; color: #94a3b8; font-weight: 500;">Hover card to inspect &bull; Click category to spotlight</span>
      </div>
      <div class="stories-nav-arrows">
        <button type="button" id="btnMarqueeLeft" class="stories-nav-arrow" aria-label="Nudge track left">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
        </button>
        <button type="button" id="btnMarqueeRight" class="stories-nav-arrow" aria-label="Nudge track right">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
      </div>
    </div>

    <!-- Single-Row Scrolling Marquee Track -->
    <div class="stories-marquee-container" id="storiesMarqueeContainer">
      <div class="stories-marquee-track" id="marqueeSingleTrack">
        <?php
        $stories = [
          [
            'company' => 'Trustline Insurance Advisors',
            'role' => 'Regional Sales Manager • Bangalore',
            'category' => 'bfsi',
            'tag' => 'BFSI & Insurance',
            'tag_cls' => 'tag-bfsi',
            'metric' => '+42% Policy Renewals',
            'headline' => 'Renewals handled before agents even get involved',
            'quote' => 'AI calling agent handles our policy renewal reminders now across our Bangalore region. Agents only get looped in when a customer actually wants to talk terms.',
            'avatar' => 'avatar-1.png'
          ],
          [
            'company' => 'Urban Thread Apparel',
            'role' => 'E-commerce Manager • Dubai & UAE',
            'category' => 'ecommerce',
            'tag' => 'Fashion Retail',
            'tag_cls' => 'tag-ecom',
            'metric' => '4.2x Campaign ROI',
            'headline' => 'WhatsApp became a real sales channel',
            'quote' => 'Catalog sync with our Shopify store turned WhatsApp into a real sales channel for our customers across Dubai and the UAE. They browse and order without downloading anything new.',
            'avatar' => 'avatar-2.png'
          ],
          [
            'company' => 'Spice Route Foods',
            'role' => 'Founder • Chennai',
            'category' => 'ecommerce',
            'tag' => 'D2C Food & Beverage',
            'tag_cls' => 'tag-ecom',
            'metric' => '-65% Support Calls',
            'headline' => 'Abandoned carts we never would have recovered',
            'quote' => 'We recovered abandoned carts from customers across Chennai that we never would have followed up on manually. Automated WhatsApp nudges brought back real revenue in the first month.',
            'avatar' => 'avatar-3.png'
          ],
          [
            'company' => 'Pinnacle Business School',
            'role' => 'Marketing Manager • Chennai',
            'category' => 'education',
            'tag' => 'Higher Education',
            'tag_cls' => 'tag-edu',
            'metric' => '2x Lead Conversion',
            'headline' => 'Enquiry-to-application conversion doubled',
            'quote' => 'Lead generation forms inside WhatsApp doubled our enquiry-to-application conversion here in Chennai. Prospective students fill it out without ever leaving the chat.',
            'avatar' => 'avatar-4.png'
          ],
          [
            'company' => 'DPS International School',
            'role' => 'Director of Admissions • Chennai',
            'category' => 'education',
            'tag' => 'K-12 Education',
            'tag_cls' => 'tag-edu',
            'metric' => '100% Parent Reach',
            'headline' => 'Auto-qualifying leads during peak enquiry season',
            'quote' => 'Our admissions cycle in Chennai gets thousands of WhatsApp enquiries in weeks. HelloBotz\'s auto-qualification flow tags serious applicants automatically, so counselors spend time only on real conversations.',
            'avatar' => 'avatar-5.png'
          ],
          [
            'company' => 'Greenfield International School',
            'role' => 'Principal • Bangalore',
            'category' => 'education',
            'tag' => 'International School',
            'tag_cls' => 'tag-edu',
            'metric' => '< 3 Min Response',
            'headline' => 'One channel replaced scattered parent communication',
            'quote' => 'Parent-teacher communication across our Bangalore campus used to be scattered across calls and texts. Now it\'s one WhatsApp channel with templates for fee reminders, event updates, and attendance alerts.',
            'avatar' => 'avatar-6.png'
          ],
          [
            'company' => 'Wellness First Clinic',
            'role' => 'Clinic Manager • Hyderabad',
            'category' => 'healthcare',
            'tag' => 'Clinics & Healthcare',
            'tag_cls' => 'tag-health',
            'metric' => '6% No-Show Rate',
            'headline' => 'Front-desk call volume cut in half',
            'quote' => 'Appointment booking through WhatsApp cut our Hyderabad front-desk call volume in half. Patients book, get reminders, and reschedule without a single phone call.',
            'avatar' => 'avatar-7.png'
          ],
          [
            'company' => 'Bloom & Co. Home Decor',
            'role' => 'D2C Growth Lead • Singapore',
            'category' => 'ecommerce',
            'tag' => 'D2C Home Decor',
            'tag_cls' => 'tag-ecom',
            'metric' => '23% Cart Recovery',
            'headline' => 'Segmented campaigns outperformed email',
            'quote' => 'Segmented broadcast campaigns let us target repeat buyers separately from first-time visitors across our Singapore customer base. Open rates are nothing like email ever gave us.',
            'avatar' => 'avatar-8.png'
          ],
          [
            'company' => 'Cornerstone Cooperative Bank',
            'role' => 'Head of Digital Banking • Visakhapatnam',
            'category' => 'bfsi',
            'tag' => 'Banking & FinTech',
            'tag_cls' => 'tag-bfsi',
            'metric' => '24/7 Self-Service',
            'headline' => 'Lighter call center load, faster answers',
            'quote' => 'Customer support queries on loan status and account queries dropped our Visakhapatnam call center\'s load noticeably once WhatsApp automation took over routine questions.',
            'avatar' => 'avatar-9.png'
          ],
          [
            'company' => 'Everest Logistics Solutions',
            'role' => 'Customer Experience Lead • London & UK',
            'category' => 'services',
            'tag' => 'Supply Chain & Freight',
            'tag_cls' => 'tag-services',
            'metric' => 'Real-Time Tracking',
            'headline' => 'Where\'s my order tickets noticeably down',
            'quote' => 'Shipment status updates go out automatically to hundreds of customers across London and the UK every day. Support tickets asking where\'s my order dropped noticeably.',
            'avatar' => 'avatar-10.png'
          ],
          [
            'company' => 'WorkHub Coworking Spaces',
            'role' => 'Community Manager • Hyderabad',
            'category' => 'services',
            'tag' => 'Commercial Real Estate',
            'tag_cls' => 'tag-services',
            'metric' => '3x Faster Check-In',
            'headline' => 'Front desk freed up for actual community building',
            'quote' => 'Member queries about bookings and day passes across our Hyderabad space are now handled instantly through automated WhatsApp replies, freeing up our front desk for actual community building.',
            'avatar' => 'avatar-11.png'
          ],
          [
            'company' => 'The Edu Consultant',
            'role' => 'Founder • Bangalore',
            'category' => 'education',
            'tag' => 'Ed-Tech Consultancy',
            'tag_cls' => 'tag-edu',
            'metric' => '+35% Enrollments',
            'headline' => 'No-shows dropped after switching to WhatsApp booking',
            'quote' => 'As an ed-tech consultancy based in Bangalore, we book 40+ counseling calls a week. The appointment booking feature inside WhatsApp cut our no-show rate significantly — students book and get reminded automatically.',
            'avatar' => 'avatar-12.png'
          ]
        ];

        // Output twice for seamless infinite loop
        for ($loop = 0; $loop < 2; $loop++) {
          foreach ($stories as $idx => $st) {
        ?>
          <div class="story-scroller-card" data-category="<?php echo $st['category']; ?>" data-index="<?php echo $idx + ($loop * 12); ?>">
            <div>
              <div class="story-card-top">
                <div class="story-tag-group">
                  <span class="story-tag <?php echo $st['tag_cls']; ?>"><?php echo $st['tag']; ?></span>
                  <span class="story-metric-chip"><?php echo $st['metric']; ?></span>
                </div>
                <div class="story-stars">★★★★★</div>
              </div>
              <h3 class="story-headline"><?php echo htmlspecialchars($st['headline']); ?></h3>
              <p class="story-quote">"<?php echo htmlspecialchars($st['quote']); ?>"</p>
            </div>
            <div class="story-author">
              <img src="<?php echo $bp; ?>assets/images/testimonials/<?php echo $st['avatar']; ?>" alt="<?php echo htmlspecialchars($st['company']); ?>" class="story-avatar-img" loading="lazy">
              <div class="story-author-info">
                <div class="story-author-name"><?php echo htmlspecialchars($st['company']); ?></div>
                <div class="story-author-role"><?php echo htmlspecialchars($st['role']); ?></div>
              </div>
              <span class="story-verified">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                Verified
              </span>
            </div>
          </div>
        <?php
          }
        }
        ?>
      </div>
    </div>

    <!-- Bottom Trust Card -->
    <div class="stories-container" style="margin-top: 3.5rem;">
      <div class="stories-bottom-card reveal-item">
        <div class="stories-bottom-content">
          <h3>Start Growing Your Business with Hellobotz's WhatsApp, Instagram, Facebook &amp; Telegram Automation</h3>
          <p>Join 500+ businesses delivering standout customer experiences across WhatsApp, Instagram, Facebook &amp; Telegram with HelloBotz.</p>
        </div>
        <div class="stories-bottom-actions">
          <a href="/auth/register" class="cw-btn-primary" style="background: #ffffff; color: #0f172a !important; font-weight: 800; border-radius: 9999px; box-shadow: 0 4px 15px rgba(255,255,255,0.25);">
            Start Free 7-Day Trial
          </a>
          <a href="<?php echo $brochureHref; ?>"<?php echo $brochureTarget; ?><?php echo $brochureOnClick; ?> class="cw-btn-data btn-download-brochure" title="Download HelloBotz Brochure">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            Download Brochure
          </a>
          <a href="#callback" onclick="if(window.openCallbackModal){openCallbackModal();return false;}" class="btn-ghost-dark">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Talk to an Expert
          </a>
        </div>
      </div>
    </div>
  </section>

</div>

<script>
(function() {
  // Explore All Features CTA -> Smoothly take to navbar with all features
  var exploreBtn = document.getElementById('btnExploreAllFeatures') || document.querySelector('.hb-features-cta-btn');
  if (exploreBtn) {
    exploreBtn.addEventListener('click', function(e) {
      if (e.metaKey || e.ctrlKey || e.shiftKey || e.button === 1) return;
      e.preventDefault();

      var isMobile = window.innerWidth < 992;
      window.scrollTo({ top: 0, behavior: 'smooth' });

      if (!isMobile) {
        var navItem = document.querySelector('.nav-item-products') || document.querySelector('.nav-item-features');
        var navBtn = navItem ? navItem.querySelector('.nav-link') : null;
        var megaMenu = navItem ? navItem.querySelector('.mega-menu') : null;

        setTimeout(function() {
          if (navItem && navBtn) {
            if (!navItem.classList.contains('open')) {
              navBtn.click();
            }

            navItem.classList.remove('nav-item-highlight');
            void navItem.offsetWidth;
            navItem.classList.add('nav-item-highlight');

            if (megaMenu) {
              megaMenu.classList.remove('mega-menu-highlight');
              void megaMenu.offsetWidth;
              megaMenu.classList.add('mega-menu-highlight');
            }

            setTimeout(function() {
              navItem.classList.remove('nav-item-highlight');
              if (megaMenu) megaMenu.classList.remove('mega-menu-highlight');
            }, 3500);
          }
        }, 320);
      } else {
        setTimeout(function() {
          var toggle = document.querySelector('.mobile-toggle');
          var menu = document.getElementById('mobile-menu');
          if (toggle && menu) {
            if (!menu.classList.contains('is-open') && !menu.classList.contains('open')) {
              toggle.click();
            }
            setTimeout(function() {
              var prodAccordion = menu.querySelector('.mobile-nav-item[data-accordion]');
              if (prodAccordion && !prodAccordion.classList.contains('is-open') && !prodAccordion.classList.contains('open')) {
                var accBtn = prodAccordion.querySelector('.mobile-nav-link');
                if (accBtn) accBtn.click();
              }
            }, 200);
          }
        }, 300);
      }
    });
  }


  // 1. Live Clock in Phone Hardware Top Bar
  function updatePhoneClock() {
    const clockEl = document.getElementById('cw-status-clock');
    if (!clockEl) return;
    const now = new Date();
    let hours = now.getHours();
    const minutes = String(now.getMinutes()).padStart(2, '0');
    hours = hours % 12 || 12;
    clockEl.textContent = hours + ':' + minutes;
  }
  updatePhoneClock();
  setInterval(updatePhoneClock, 30000);

  // 2. Phone Mockup Floating Stability
  // The phone uses a subtle, smooth CSS breathing float (cwPhoneFloat) that pauses on hover/focus.
  // No 3D transform tilt is applied via JS so text stays razor-sharp and input focus/typing is 100% stable.

  // 3. Realistic Web Audio Chimes (Synthesized - zero external file dependencies)
  let audioEnabled = true;
  const audioToggle = document.getElementById('cw-audio-toggle');
  const audioIcon = document.getElementById('cw-audio-icon');

  if (audioToggle) {
    audioToggle.addEventListener('click', function() {
      audioEnabled = !audioEnabled;
      if (audioEnabled) {
        audioToggle.setAttribute('title', 'Audio sound ON (Click to mute)');
        audioToggle.style.color = '#10b981';
        audioIcon.innerHTML = '<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M15.54 8.46a5 5 0 0 1 0 7.07"/>';
      } else {
        audioToggle.setAttribute('title', 'Audio sound MUTED (Click to unmute)');
        audioToggle.style.color = '#ef4444';
        audioIcon.innerHTML = '<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><line x1="23" y1="9" x2="17" y2="15"/><line x1="17" y1="9" x2="23" y2="15"/>';
      }
    });
  }

  function playChime(isBot) {
    if (!audioEnabled) return;
    try {
      const AudioContext = window.AudioContext || window.webkitAudioContext;
      if (!AudioContext) return;
      const ctx = new AudioContext();
      const osc = ctx.createOscillator();
      const gain = ctx.createGain();
      osc.type = 'sine';
      if (isBot) {
        osc.frequency.setValueAtTime(587.33, ctx.currentTime);
        osc.frequency.exponentialRampToValueAtTime(880, ctx.currentTime + 0.08);
      } else {
        osc.frequency.setValueAtTime(440, ctx.currentTime);
        osc.frequency.exponentialRampToValueAtTime(659.25, ctx.currentTime + 0.06);
      }
      gain.gain.setValueAtTime(0.08, ctx.currentTime);
      gain.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + 0.16);
      osc.connect(gain);
      gain.connect(ctx.destination);
      osc.start();
      osc.stop(ctx.currentTime + 0.16);
    } catch (err) {}
  }

  // 4. Live Chatbot Engine
  const cwBody = document.getElementById('cw-live-body');
  const typingIndicator = document.getElementById('cw-typing-indicator');
  const chatSendBtn = document.getElementById('cw-chat-send');
  const chatInput = document.getElementById('cw-chat-input');
  const chatReset = document.getElementById('cw-chat-reset');
  const emojiBtn = document.getElementById('cw-emoji-btn');
  const leadsNumEl = document.getElementById('cw-leads-num');

  function getFormattedTime() {
    const now = new Date();
    let h = now.getHours();
    const m = String(now.getMinutes()).padStart(2, '0');
    const ampm = h >= 12 ? 'PM' : 'AM';
    h = h % 12 || 12;
    return `${h}:${m} ${ampm}`;
  }

  function scrollToBottom() {
    if (!cwBody) return;
    cwBody.scrollTo({ top: cwBody.scrollHeight, behavior: 'smooth' });
  }

  function escapeHtml(str) {
    return str.replace(/[&<>'"]/g, function(tag) {
      return ({
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        "'": '&#39;',
        '"': '&quot;'
      })[tag] || tag;
    });
  }

  // Default initial message markup for reset
  const defaultChatHtml = `
    <div class="cw-bubble user">
      <span>Hi! How can HelloBotz automate our customer sales on WhatsApp?</span>
      <div class="cw-bubble-meta">
        <span class="time">10:42 AM</span>
        <span class="cw-ticks double-blue">✓✓</span>
      </div>
    </div>
    <div class="cw-bubble bot">
      <span>👋 Hello! With Official WhatsApp API, you can send broadcasts with 98% open rates, auto-qualify leads 24/7, and assign chats across your entire team from 1 single number!</span>
      <div class="cw-bubble-meta">
        <span class="time">10:42 AM</span>
      </div>
    </div>
    <div class="cw-bubble user">
      <span>Can I connect my Shopify store &amp; CRM?</span>
      <div class="cw-bubble-meta">
        <span class="time">10:43 AM</span>
        <span class="cw-ticks double-blue">✓✓</span>
      </div>
    </div>
    <div class="cw-bubble bot">
      <span>✅ Yes! Orders, abandoned cart recoveries, and contact sync happen automatically with zero code.</span>
      <div class="cw-bubble-meta">
        <span class="time">10:43 AM</span>
      </div>
    </div>
    <div class="cw-bubble bot cw-typing-bubble" id="cw-typing-indicator" style="display:none;">
      <div class="cw-typing-dots">
        <span></span><span></span><span></span>
      </div>
      <span class="cw-typing-label">HelloBotz AI is typing...</span>
    </div>
  `;

  if (chatReset) {
    chatReset.addEventListener('click', function() {
      if (!cwBody) return;
      cwBody.innerHTML = defaultChatHtml;
      playChime(true);
      scrollToBottom();
    });
  }

  // Emoji button quick rotator
  const emojiList = ['🚀', '🛍️', '💰', '🤖', '⚡', '📦', '💬'];
  let emojiIdx = 0;
  if (emojiBtn && chatInput) {
    emojiBtn.addEventListener('click', function() {
      chatInput.value += emojiList[emojiIdx % emojiList.length] + ' ';
      emojiIdx++;
      chatInput.focus();
    });
  }

  // Conversational AI NLP Matcher
  function generateBotReply(text) {
    const q = text.toLowerCase().trim();

    if (q.includes('price') || q.includes('pricing') || q.includes('plan') || q.includes('cost') || q.includes('fee') || q.includes('rate')) {
      return {
        text: "💳 Plans start at just $29/month with 0% markup on Meta messages! Includes unlimited contacts, team inbox, broadcast manager, and AI visual builder.",
        actionText: "View Pricing Plans",
        actionUrl: "/pricing"
      };
    }
    if (q.includes('shopify') || q.includes('woo') || q.includes('store') || q.includes('cart') || q.includes('abandoned') || q.includes('order')) {
      return {
        text: "🛍️ 1-Click Shopify & WooCommerce integration! Automatically send abandoned cart recovery links (recapturing ~35% lost sales), order confirmations, and live shipment tracking via WhatsApp.",
        actionText: "Explore Shopify Sync",
        actionUrl: "/channel/whatsapp/"
      };
    }
    if (q.includes('broadcast') || q.includes('bulk') || q.includes('blast') || q.includes('campaign') || q.includes('mass') || q.includes('csv')) {
      return {
        text: "📢 Send 10,000 to 1,000,000+ broadcasts in minutes with 98% average open rates! Powered by the Official Meta WhatsApp Cloud API with smart pacing so delivery is 100% reliable.",
        actionText: "Start Free Trial",
        actionUrl: "https://panindiadata.com/"
      };
    }
    if (q.includes('ban') || q.includes('risk') || q.includes('meta') || q.includes('official') || q.includes('api') || q.includes('safe')) {
      return {
        text: "🛡️ Zero Ban Risk! Unlike unofficial QR-scraping extensions that get accounts banned, HelloBotz connects directly through the official Meta Business Cloud API with 100% compliance guarantee.",
        actionText: "Verify API Status",
        actionUrl: "/channel/whatsapp/"
      };
    }
    if (q.includes('team') || q.includes('agent') || q.includes('inbox') || q.includes('seat') || q.includes('multi') || q.includes('assign')) {
      return {
        text: "👥 Connect unlimited team members to 1 single WhatsApp number! Includes automated department routing, private notes, quick canned replies, and agent analytics.",
        actionText: "Learn More",
        actionUrl: "/channel/whatsapp/"
      };
    }
    if (q.includes('bot') || q.includes('ai') || q.includes('flow') || q.includes('builder') || q.includes('automate') || q.includes('chatgpt')) {
      return {
        text: "🤖 Build intelligent auto-reply flows in minutes with our visual drag-and-drop builder! Train your AI on website URLs or FAQs to qualify prospects and close deals 24/7.",
        actionText: "Try Flow Builder",
        actionUrl: "https://panindiadata.com/"
      };
    }
    if (q.includes('demo') || q.includes('call') || q.includes('talk') || q.includes('sales') || q.includes('meeting') || q.includes('specialist')) {
      return {
        text: "📞 We'd love to show you HelloBotz in action! Schedule a personalized 15-minute walkthrough with our automation architects.",
        actionText: "Book Live Demo",
        actionUrl: "#demo"
      };
    }
    if (q.includes('hi') || q.includes('hello') || q.includes('hey') || q.includes('hola') || q.includes('good')) {
      return {
        text: "👋 Hello! Welcome to HelloBotz! Ask me about pricing, Shopify integration, bulk broadcasts, or click any chip above to test.",
        actionText: "Get Started Free",
        actionUrl: "https://panindiadata.com/"
      };
    }
    if (q.includes('trial') || q.includes('free') || q.includes('sign') || q.includes('register') || q.includes('start')) {
      return {
        text: "🚀 You can start right now with our 14-day free trial! Zero credit card required and 5-minute setup.",
        actionText: "Start Free Trial",
        actionUrl: "https://panindiadata.com/"
      };
    }
    if (q.includes('green tick') || q.includes('tick') || q.includes('badge') || q.includes('verify')) {
      return {
        text: "✅ We help your business apply for and secure the official Meta Verified Green Tick badge beside your brand name for maximum trust.",
        actionText: "Request Green Tick Help",
        actionUrl: "/channel/whatsapp/"
      };
    }

    return {
      text: "⚡ HelloBotz empowers you to scale WhatsApp sales with official Meta Cloud API, automated AI chat funnels, 98% open-rate broadcasts, and 1-click CRM/Shopify sync!",
      actionText: "Start 14-Day Trial",
      actionUrl: "https://panindiadata.com/"
    };
  }

  function handleUserMessage(msgText) {
    if (!msgText || !msgText.trim() || !cwBody) return;
    const cleanText = msgText.trim();

    // 1. Append User Message with smooth slide-fade
    const userDiv = document.createElement('div');
    userDiv.className = 'cw-bubble user cw-msg-new';
    userDiv.innerHTML = `
      <span>${escapeHtml(cleanText)}</span>
      <div class="cw-bubble-meta">
        <span class="time">${getFormattedTime()}</span>
        <span class="cw-ticks grey">✓</span>
      </div>
    `;
    const typingIndicatorEl = document.getElementById('cw-typing-indicator');
    if (typingIndicatorEl) {
      cwBody.insertBefore(userDiv, typingIndicatorEl);
    } else {
      cwBody.appendChild(userDiv);
    }
    scrollToBottom();
    playChime(false);
    setTimeout(function() {
      userDiv.classList.remove('cw-msg-new');
    }, 260);

    // 2. Change tick to double blue after 220ms with smooth pop
    setTimeout(function() {
      const ticks = userDiv.querySelector('.cw-ticks');
      if (ticks) {
        ticks.className = 'cw-ticks double-blue';
        ticks.textContent = '✓✓';
      }
    }, 220);

    // 3. Increment Leads Captured Metric with smooth pulse
    if (leadsNumEl) {
      const cur = parseInt(leadsNumEl.textContent, 10) || 128;
      leadsNumEl.textContent = cur + 1;
      const card = document.getElementById('cw-card-leads') || document.getElementById('cw-side-leads');
      if (card) {
        card.style.transform = 'scale(1.06)';
        setTimeout(() => { card.style.transform = ''; }, 300);
      }
    }

    // 4. Show Typing Indicator (input remains 100% active and enabled for user typing)
    if (typingIndicatorEl) {
      typingIndicatorEl.style.display = 'flex';
      scrollToBottom();
    }

    // 5. Bot Response after realistic delay
    setTimeout(function() {
      if (typingIndicatorEl) typingIndicatorEl.style.display = 'none';

      const botReply = generateBotReply(cleanText);
      const botDiv = document.createElement('div');
      botDiv.className = 'cw-bubble bot cw-msg-new';

      let actionBtnHtml = '';
      if (botReply.actionText && botReply.actionUrl) {
        if (botReply.actionUrl === '#demo') {
          actionBtnHtml = `<button type="button" class="cw-bot-action-btn btn-demo-open">${escapeHtml(botReply.actionText)} &rarr;</button>`;
        } else {
          actionBtnHtml = `<a href="${escapeHtml(botReply.actionUrl)}" class="cw-bot-action-btn">${escapeHtml(botReply.actionText)} &rarr;</a>`;
        }
      }

      botDiv.innerHTML = `
        <span>${escapeHtml(botReply.text)}</span>
        ${actionBtnHtml}
        <div class="cw-bubble-meta">
          <span class="time">${getFormattedTime()}</span>
        </div>
      `;

      if (typingIndicatorEl) {
        cwBody.insertBefore(botDiv, typingIndicatorEl);
      } else {
        cwBody.appendChild(botDiv);
      }

      scrollToBottom();
      playChime(true);
      setTimeout(function() {
        botDiv.classList.remove('cw-msg-new');
      }, 260);
    }, 650);
  }

  // Trigger Send Action smoothly without losing input focus
  function sendCurrentInput() {
    if (!chatInput) return;
    const val = chatInput.value;
    if (!val || !val.trim()) {
      chatInput.focus();
      return;
    }
    chatInput.value = '';
    if (chatSendBtn) {
      chatSendBtn.classList.remove('has-text');
    }
    handleUserMessage(val);
    chatInput.focus();
  }

  // Click & Touch on Send Button
  if (chatSendBtn) {
    chatSendBtn.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      sendCurrentInput();
    });
  }

  // Press Enter key inside Input
  if (chatInput) {
    chatInput.addEventListener('keydown', function(e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        e.stopPropagation();
        sendCurrentInput();
      }
    });

    // Visual feedback when typing text via CSS class
    chatInput.addEventListener('input', function() {
      if (chatSendBtn) {
        if (chatInput.value.trim().length > 0) {
          chatSendBtn.classList.add('has-text');
        } else {
          chatSendBtn.classList.remove('has-text');
        }
      }
    });
  }

  // Handle Interactive Simulator Alert notification (outside phone device)
  const floatingAlert = document.getElementById('cw-floating-sim-alert');
  const floatingAlertClose = document.getElementById('cw-sim-alert-close');
  if (floatingAlert && chatInput) {
    floatingAlert.addEventListener('click', function(e) {
      if (e.target === floatingAlertClose || e.target.closest('#cw-sim-alert-close')) {
        e.stopPropagation();
        floatingAlert.classList.add('dismissed');
        return;
      }
      chatInput.focus();
    });
    if (floatingAlertClose) {
      floatingAlertClose.addEventListener('click', function(e) {
        e.stopPropagation();
        floatingAlert.classList.add('dismissed');
      });
    }
    chatInput.addEventListener('focus', function() {
      floatingAlert.classList.add('dismissed');
    });
    chatInput.addEventListener('input', function() {
      if (chatInput.value.trim().length > 0) {
        floatingAlert.classList.add('dismissed');
      }
    });
  }

  // Quick Suggestion Chips Listener with Debounce
  const chips = document.querySelectorAll('.cw-chip');
  let lastChipTapTime = 0;
  chips.forEach(function(chip) {
    chip.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      const now = Date.now();
      if (now - lastChipTapTime < 350) return;
      lastChipTapTime = now;
      const q = chip.getAttribute('data-query');
      if (q) {
        handleUserMessage(q);
      }
    });
  });

  // -------------------------------------------------------------------------
  // Authentic Features & Sections Reveal Animations
  // -------------------------------------------------------------------------
  (function() {
    const revealElements = document.querySelectorAll('#features .reveal-left, #features .reveal-right, #features .reveal-item, #how-it-works .reveal-item, #testimonials .reveal-item');
    if (revealElements.length && 'IntersectionObserver' in window) {
      const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            setTimeout(function() {
              entry.target.classList.add('reveal-visible');
            }, 80);
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12 });

      revealElements.forEach(function(el) {
        observer.observe(el);
      });
    } else if (revealElements.length) {
      revealElements.forEach(function(el) {
        el.classList.add('reveal-visible');
      });
    }
  })();

  // -------------------------------------------------------------------------
  // Customer Stories Animated Single-Row Marquee & Interactive Category Chips
  // -------------------------------------------------------------------------
  (function() {
    var container = document.getElementById('storiesMarqueeContainer');
    var track = document.getElementById('marqueeSingleTrack');
    var toggleBtn = document.getElementById('btnToggleMarquee');
    var pulseDot = document.getElementById('marqueePulse');
    var btnText = document.getElementById('marqueeBtnText');
    var btnLeft = document.getElementById('btnMarqueeLeft');
    var btnRight = document.getElementById('btnMarqueeRight');
    var filterChips = document.querySelectorAll('.story-chip-btn');

    if (!container || !track) return;

    var isPaused = false;

    function setPaused(paused) {
      isPaused = paused;
      if (isPaused) {
        container.classList.add('is-paused');
        if (btnText) btnText.textContent = 'Resume Auto-Scroll';
        if (pulseDot) pulseDot.style.background = '#f59e0b';
      } else {
        container.classList.remove('is-paused');
        if (btnText) btnText.textContent = 'Pause Auto-Scroll';
        if (pulseDot) pulseDot.style.background = '#10b981';
      }
    }

    if (toggleBtn) {
      toggleBtn.addEventListener('click', function() {
        if (track.style.animation === 'none') {
          // Reset track animation and filter state
          track.style.animation = '';
          track.style.transform = '';
          track.style.transition = '';
          filterChips.forEach(function(c) {
            if (c.getAttribute('data-filter') === 'all') c.classList.add('active');
            else c.classList.remove('active');
          });
          var allCards = track.querySelectorAll('.story-scroller-card');
          allCards.forEach(function(c) { c.classList.remove('is-spotlight', 'is-dimmed'); });
        }
        setPaused(!isPaused);
      });
    }

    function nudgeTrack(delta) {
      if (!track) return;
      setPaused(true);
      var computedStyle = window.getComputedStyle(track);
      var matrix = new WebKitCSSMatrix(computedStyle.transform);
      var currentX = matrix.m41;
      track.style.animation = 'none';
      track.style.transition = 'transform 0.4s cubic-bezier(0.16, 1, 0.3, 1)';
      track.style.transform = 'translateX(' + (currentX + delta) + 'px)';
    }

    if (btnLeft) {
      btnLeft.addEventListener('click', function() {
        nudgeTrack(420);
      });
    }
    if (btnRight) {
      btnRight.addEventListener('click', function() {
        nudgeTrack(-420);
      });
    }

    // Category Filter Chips Interaction
    filterChips.forEach(function(chip) {
      chip.addEventListener('click', function() {
        var cat = this.getAttribute('data-filter');
        filterChips.forEach(function(c) { c.classList.remove('active'); });
        this.classList.add('active');

        var allCards = track.querySelectorAll('.story-scroller-card');

        if (cat === 'all') {
          allCards.forEach(function(c) {
            c.classList.remove('is-spotlight', 'is-dimmed');
          });
          track.style.animation = '';
          track.style.transform = '';
          track.style.transition = '';
          setPaused(false);
        } else {
          setPaused(true);
          allCards.forEach(function(c) {
            if (c.getAttribute('data-category') === cat) {
              c.classList.add('is-spotlight');
              c.classList.remove('is-dimmed');
            } else {
              c.classList.remove('is-spotlight');
              c.classList.add('is-dimmed');
            }
          });

          // Smoothly center or bring the first matching card into view
          var firstMatch = track.querySelector('.story-scroller-card[data-category="' + cat + '"]');
          if (firstMatch) {
            var offset = firstMatch.offsetLeft;
            track.style.animation = 'none';
            track.style.transition = 'transform 0.6s cubic-bezier(0.16, 1, 0.3, 1)';
            track.style.transform = 'translateX(-' + Math.max(0, offset - 60) + 'px)';
          }
        }
      });
    });
  })();
})();
</script>

<!-- HELLOBOTZ INTERACTIVE PLATFORM DEMO MODAL -->
<div id="hellobotz-video-modal" class="cw-modal-overlay" onclick="handleModalOverlayClick(event)">
  <div class="cw-modal-box">
    <div class="cw-modal-topbar">
      <div class="cw-modal-title">
        <span class="cw-modal-dot"></span>
        <span>HelloBotz Platform Demo &bull; Interactive Tour</span>
      </div>
      <button class="cw-modal-close" onclick="closeHelloBotzVideoModal()" aria-label="Close demo modal">&times;</button>
    </div>
    <div class="cw-modal-body">
      <div class="cw-modal-tabs">
        <button class="cw-m-tab active" data-tab="flow" onclick="switchModalMedia('flow', this)">⚡ Flow Builder</button>
        <button class="cw-m-tab" data-tab="chat" onclick="switchModalMedia('chat', this)">💬 Team Live Chat</button>
        <button class="cw-m-tab" data-tab="integrations" onclick="switchModalMedia('integrations', this)">🔌 Integrations</button>
        <button class="cw-m-tab" data-tab="analytics" onclick="switchModalMedia('analytics', this)">📊 Campaign Analytics</button>
      </div>
      <div class="cw-modal-media-container" id="hellobotz-modal-media">
        <video class="cw-modal-video" autoplay loop muted playsinline controls poster="/assets/images/animations/interakt-hero.gif">
          <source src="/assets/images/animations/flow-builder.mp4" type="video/mp4">
          <img src="/assets/images/animations/interakt-hero.gif" alt="Flow Builder Demo">
        </video>
      </div>
      <div class="cw-modal-footer">
        <div class="cw-modal-footnote">Experience the full power of WhatsApp automation with zero ban risk.</div>
        <div class="cw-modal-actions">
          <a href="/contact" class="cw-btn-modal-primary">Start 7-Day Free Trial</a>
          <button type="button" class="cw-btn-modal-secondary btn-demo-open" onclick="closeHelloBotzVideoModal()">Schedule 1-on-1 Call</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
/* HelloBotz Animated Showcase & Modal Handlers */
function openHelloBotzVideoModal(tab) {
  var modal = document.getElementById('hellobotz-video-modal');
  if (modal) {
    modal.classList.add('open');
    document.body.style.overflow = 'hidden';
    if (tab) {
      var tabBtn = modal.querySelector('.cw-m-tab[data-tab="' + tab + '"]');
      if (tabBtn) switchModalMedia(tab, tabBtn);
    }
  }
}

function closeHelloBotzVideoModal() {
  var modal = document.getElementById('hellobotz-video-modal');
  if (modal) {
    modal.classList.remove('open');
    document.body.style.overflow = '';
    var vid = modal.querySelector('video');
    if (vid) vid.pause();
  }
}

function handleModalOverlayClick(e) {
  if (e.target && e.target.id === 'hellobotz-video-modal') {
    closeHelloBotzVideoModal();
  }
}

document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeHelloBotzVideoModal();
  }
});

function switchShowcaseTab(target, btn) {
  var tabs = document.querySelectorAll('.cw-showcase-tab');
  tabs.forEach(function(t) { t.classList.remove('active'); });
  if (btn) btn.classList.add('active');

  var medias = document.querySelectorAll('.cw-tab-media');
  medias.forEach(function(m) { m.classList.remove('active'); });
  var activeMedia = document.getElementById('media-' + target);
  if (activeMedia) {
    activeMedia.classList.add('active');
    var vid = activeMedia.querySelector('video');
    if (vid) {
      vid.currentTime = 0;
      vid.play().catch(function(){});
    }
  }
}

function switchModalMedia(type, btn) {
  var container = document.getElementById('hellobotz-modal-media');
  if (!container) return;

  var tabs = document.querySelectorAll('.cw-m-tab');
  tabs.forEach(function(t) { t.classList.remove('active'); });
  if (btn) btn.classList.add('active');

  if (type === 'flow') {
    container.innerHTML = '<video class="cw-modal-video" autoplay loop muted playsinline controls poster="/assets/images/animations/interakt-hero.gif"><source src="/assets/images/animations/flow-builder.mp4" type="video/mp4"><img src="/assets/images/animations/interakt-hero.gif" alt="Flow Builder Demo"></video>';
  } else if (type === 'chat') {
    container.innerHTML = '<img class="cw-modal-img" src="/assets/images/animations/live-chat.gif" alt="Multi-Agent Live Chat Inbox">';
  } else if (type === 'integrations') {
    container.innerHTML = '<img class="cw-modal-img" src="/assets/images/animations/integration-1.gif" alt="CRM & eCommerce Integrations">';
  } else if (type === 'analytics') {
    container.innerHTML = '<img class="cw-modal-img" src="/assets/images/animations/analytics.gif" alt="Campaign Analytics">';
  }
}

// Dynamic Hero Headline Rotator (Dual-color animated cycling)
(function initHeroRotator() {
  function setup() {
    var rotator = document.getElementById('cwHeroRotator');
    if (!rotator) return;

    var items = rotator.querySelectorAll('.cw-rotator-item');
    if (items.length <= 1) return;

    var currentIndex = 0;
    var isPaused = false;

    function adjustWidth(idx) {
      if (items[idx]) {
        rotator.style.width = items[idx].offsetWidth + 'px';
      }
    }

    // Measure initial width
    adjustWidth(0);
    window.addEventListener('resize', function() { adjustWidth(currentIndex); });

    function rotateNext() {
      if (isPaused) return;

      var current = items[currentIndex];
      currentIndex = (currentIndex + 1) % items.length;
      var next = items[currentIndex];

      // Measure target width cleanly
      next.style.visibility = 'hidden';
      next.style.position = 'relative';
      var targetWidth = next.offsetWidth;
      next.style.position = '';
      next.style.visibility = '';

      rotator.style.width = targetWidth + 'px';

      current.classList.remove('active');
      current.classList.add('prev');

      next.classList.remove('prev');
      next.classList.add('active');

      setTimeout(function() {
        current.classList.remove('prev');
      }, 550);
    }

    // Change frequently: every 2.6 seconds
    setInterval(rotateNext, 2600);

    rotator.addEventListener('mouseenter', function() { isPaused = true; });
    rotator.addEventListener('mouseleave', function() { isPaused = false; });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', setup);
  } else {
    setup();
  }
})();
</script>

<?php
include __DIR__ . '/includes/footer.php';
?>
