<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Telegram Bot Automation & Broadcast Platform | InboxWa';
$pageDescription = 'Create Telegram bots, send unlimited message broadcasts to channels and groups, and automate 24/7 customer support with interactive button flows.';
$canonicalUrl = 'https://inboxwa.com/channel/telegram/';
$ogImage = 'assets/images/og-image.png';

include __DIR__ . '/../../includes/header.php';
?>

<style>
  :root {
    --tg-blue: #0284c7;
    --tg-cyan: #06b6d4;
    --tg-gradient: linear-gradient(135deg, #0284c7 0%, #06b6d4 100%);
    --tg-gradient-subtle: linear-gradient(135deg, rgba(2, 132, 199, 0.08) 0%, rgba(6, 182, 212, 0.08) 100%);
  }

  .ctg-page {
    background: #ffffff;
    color: #1e293b;
    font-family: inherit;
    overflow-x: hidden;
    width: 100%;
    max-width: 100vw;
    box-sizing: border-box;
  }

  /* Breadcrumb */
  .ctg-breadcrumb {
    padding: calc(var(--nav, 72px) + 1.25rem) 1.5rem 0.5rem;
    max-width: 1200px;
    margin: 0 auto;
    font-size: 0.85rem;
    color: #64748b;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }
  .ctg-breadcrumb a {
    color: #64748b;
    text-decoration: none;
    transition: color 0.15s;
  }
  .ctg-breadcrumb a:hover {
    color: var(--tg-blue);
  }

  /* Hero Section */
  .ctg-hero-section {
    padding: 2.5rem 1.5rem 4.5rem;
    max-width: 1200px;
    width: 100%;
    margin: 0 auto;
    box-sizing: border-box;
  }
  .ctg-hero-grid {
    display: grid;
    grid-template-columns: 1.15fr 0.85fr;
    gap: 3.5rem;
    align-items: center;
  }
  .ctg-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(2, 132, 199, 0.1);
    border: 1px solid rgba(2, 132, 199, 0.25);
    color: #0284c7;
    font-size: 0.82rem;
    font-weight: 700;
    padding: 0.35rem 0.85rem;
    border-radius: 999px;
    margin-bottom: 1.25rem;
  }
  .ctg-hero-title {
    font-size: clamp(2.25rem, 4.5vw, 3.5rem);
    font-weight: 800;
    line-height: 1.15;
    color: #0f172a;
    letter-spacing: -0.02em;
    margin-bottom: 1.25rem;
  }
  .ctg-hero-title .highlight-blue {
    background: var(--tg-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .ctg-hero-desc {
    font-size: 1.15rem;
    line-height: 1.65;
    color: #475569;
    margin-bottom: 2rem;
    max-width: 540px;
  }
  .ctg-hero-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 2rem;
  }
  .ctg-btn-primary {
    background: var(--tg-gradient);
    color: #ffffff;
    font-weight: 700;
    font-size: 1rem;
    padding: 0.85rem 1.85rem;
    border-radius: 999px;
    text-decoration: none;
    box-shadow: 0 10px 25px -5px rgba(2, 132, 199, 0.4);
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    border: none;
  }
  .ctg-btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 30px -5px rgba(2, 132, 199, 0.55);
    color: #ffffff;
  }
  .ctg-btn-secondary {
    background: #ffffff;
    color: #0f172a;
    font-weight: 600;
    font-size: 1rem;
    padding: 0.85rem 1.75rem;
    border-radius: 999px;
    border: 1px solid #cbd5e1;
    text-decoration: none;
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
  }
  .ctg-btn-secondary:hover {
    background: #f8fafc;
    border-color: #94a3b8;
    color: #0f172a;
    transform: translateY(-2px);
  }
  .ctg-trust-row {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    flex-wrap: wrap;
    font-size: 0.85rem;
    font-weight: 600;
    color: #64748b;
  }
  .ctg-trust-item {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
  }

  /* Interactive Mockup Phone Stage */
  .ctg-phone-wrapper {
    position: relative;
    max-width: 380px;
    margin: 0 auto;
  }
  .ctg-phone-device {
    background: #0f172a;
    border-radius: 36px;
    padding: 12px;
    box-shadow: 0 25px 60px -15px rgba(2, 132, 199, 0.25), 0 0 0 1px rgba(255, 255, 255, 0.1);
    border: 3px solid #1e293b;
    position: relative;
    z-index: 2;
  }
  .ctg-phone-notch {
    width: 90px;
    height: 18px;
    background: #1e293b;
    border-radius: 0 0 12px 12px;
    margin: 0 auto 8px;
  }
  .ctg-phone-screen {
    background: #17212b;
    border-radius: 26px;
    overflow: hidden;
    height: 480px;
    display: flex;
    flex-direction: column;
    color: #ffffff;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
  }
  .ctg-chat-header {
    background: #242f3d;
    padding: 12px 14px;
    display: flex;
    align-items: center;
    gap: 10px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  }
  .ctg-avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: var(--tg-gradient);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 14px;
    color: #fff;
    flex-shrink: 0;
  }
  .ctg-header-info {
    flex: 1;
    min-width: 0;
  }
  .ctg-header-name {
    font-size: 0.9rem;
    font-weight: 700;
    color: #ffffff;
  }
  .ctg-header-status {
    font-size: 0.72rem;
    color: #64b5f6;
  }
  .ctg-chat-messages {
    flex: 1;
    padding: 14px;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    gap: 10px;
    background: #0e1621;
  }
  .ctg-msg {
    max-width: 84%;
    padding: 9px 13px;
    border-radius: 12px;
    font-size: 0.84rem;
    line-height: 1.4;
    position: relative;
    word-break: break-word;
  }
  .ctg-msg-in {
    background: #242f3d;
    color: #f4f4f5;
    align-self: flex-start;
  }
  .ctg-msg-out {
    background: #2b5278;
    color: #ffffff;
    align-self: flex-end;
  }
  .ctg-inline-kb {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 6px;
    margin-top: 6px;
  }
  .ctg-kb-btn {
    background: rgba(43, 82, 120, 0.85);
    border: 1px solid rgba(100, 181, 246, 0.3);
    color: #90caf9;
    border-radius: 8px;
    padding: 7px 10px;
    font-size: 0.76rem;
    font-weight: 700;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.15s;
  }
  .ctg-kb-btn:hover {
    background: rgba(43, 82, 120, 1);
    color: #ffffff;
  }

  /* Features Grid Section */
  .ctg-features-section {
    padding: 5rem 1.5rem;
    background: #f8fafc;
  }
  .ctg-section-header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 3.5rem;
  }
  .ctg-section-title {
    font-size: clamp(2rem, 3.5vw, 2.75rem);
    font-weight: 800;
    color: #0f172a;
    letter-spacing: -0.02em;
    margin-bottom: 0.75rem;
  }
  .ctg-section-subtitle {
    font-size: 1.1rem;
    color: #64748b;
    line-height: 1.6;
  }
  .ctg-features-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    max-width: 1200px;
    margin: 0 auto;
  }
  .ctg-feature-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 28px;
    transition: all 0.25s ease;
    display: flex;
    flex-direction: column;
  }
  .ctg-feature-card:hover {
    transform: translateY(-4px);
    border-color: #cbd5e1;
    box-shadow: 0 16px 36px -8px rgba(2, 132, 199, 0.12);
  }
  .ctg-feature-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 18px;
  }
  .ctg-feature-icon {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    background: var(--tg-gradient-subtle);
    color: #0284c7;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .ctg-feature-badge {
    font-size: 0.68rem;
    font-weight: 700;
    padding: 3px 8px;
    border-radius: 999px;
    background: rgba(2, 132, 199, 0.1);
    color: #0284c7;
    text-transform: uppercase;
    letter-spacing: 0.04em;
  }
  .ctg-feature-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 8px;
  }
  .ctg-feature-desc {
    font-size: 0.92rem;
    color: #64748b;
    line-height: 1.6;
  }

  /* Setup Guide Accordion */
  .ctg-guide-section {
    padding: 4.5rem 1.5rem;
    max-width: 900px;
    margin: 0 auto;
  }
  .ctg-guide-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 20px 24px;
    margin-bottom: 16px;
    display: flex;
    gap: 18px;
    align-items: flex-start;
  }
  .ctg-guide-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background: rgba(2, 132, 199, 0.1);
    color: #0284c7;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    flex-shrink: 0;
  }

  /* Visual Customer Journey & Steps Section */
  .ctg-steps-section {
    padding: 6rem 1.5rem;
    background: linear-gradient(180deg, #ffffff 0%, #f0f9ff 100%);
    position: relative;
    overflow: hidden;
  }
  .ctg-journey-flow {
    display: flex;
    flex-direction: column;
    gap: 3rem;
    max-width: 1160px;
    margin: 0 auto;
  }
  .ctg-journey-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 24px;
    padding: 2.5rem;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    align-items: center;
    transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 12px 32px -10px rgba(0, 0, 0, 0.06);
    box-sizing: border-box;
    width: 100%;
    max-width: 100%;
  }
  .ctg-journey-card:hover {
    border-color: #38bdf8;
    box-shadow: 0 20px 45px -10px rgba(2, 132, 199, 0.15);
    transform: translateY(-3px);
  }
  .ctg-journey-card.reverse {
    direction: rtl;
  }
  .ctg-journey-card.reverse > * {
    direction: ltr;
  }
  .ctg-journey-media {
    position: relative;
    border-radius: 18px;
    overflow: hidden;
    background: #f1f5f9;
    border: 1px solid #e2e8f0;
    box-shadow: 0 16px 36px -10px rgba(15, 23, 42, 0.12);
    width: 100%;
    box-sizing: border-box;
  }
  .ctg-journey-img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 18px;
    transition: transform 0.4s ease;
  }
  .ctg-journey-card:hover .ctg-journey-img {
    transform: scale(1.025);
  }
  .ctg-journey-badge-float {
    position: absolute;
    top: 14px;
    left: 14px;
    background: rgba(15, 23, 42, 0.88);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(56, 189, 248, 0.35);
    color: #38bdf8;
    font-size: 0.75rem;
    font-weight: 700;
    padding: 6px 12px;
    border-radius: 999px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    z-index: 2;
    box-shadow: 0 4px 12px rgba(0,0,0,0.25);
  }
  .ctg-journey-content {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
    box-sizing: border-box;
    width: 100%;
  }
  .ctg-journey-step-header {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    flex-wrap: wrap;
  }
  .ctg-journey-step-pill {
    background: rgba(2, 132, 199, 0.1);
    color: #0284c7;
    border: 1px solid rgba(2, 132, 199, 0.3);
    font-size: 0.75rem;
    font-weight: 800;
    letter-spacing: 0.06em;
    padding: 4px 12px;
    border-radius: 999px;
    text-transform: uppercase;
  }
  .ctg-journey-step-time {
    color: #64748b;
    font-size: 0.82rem;
    font-weight: 600;
  }
  .ctg-journey-title {
    font-size: 1.55rem;
    font-weight: 800;
    color: #0f172a;
    line-height: 1.3;
    margin: 0;
  }
  .ctg-journey-desc {
    font-size: 0.95rem;
    color: #475569;
    line-height: 1.6;
    margin: 0;
  }
  .ctg-journey-guide-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 0.85rem;
  }
  .ctg-journey-guide-box {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 1.1rem 1.25rem;
  }
  .ctg-journey-box-label {
    font-size: 0.8rem;
    font-weight: 800;
    color: #0284c7;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 0.55rem;
    display: flex;
    align-items: center;
    gap: 6px;
  }
  .ctg-journey-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
  }
  .ctg-journey-list li {
    font-size: 0.88rem;
    color: #334155;
    line-height: 1.45;
    display: flex;
    align-items: flex-start;
    gap: 0.6rem;
  }
  .ctg-journey-list li svg {
    flex-shrink: 0;
    color: #0284c7;
    margin-top: 3px;
  }
  .ctg-journey-kpi-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.82rem;
    font-weight: 700;
    color: #0284c7;
    background: rgba(2, 132, 199, 0.08);
    border: 1px solid rgba(2, 132, 199, 0.25);
    padding: 7px 14px;
    border-radius: 10px;
    align-self: flex-start;
  }

  /* Sales CTA Section */
  .ctg-sales-section {
    padding: 5rem 1.5rem;
    background: linear-gradient(135deg, #075985 0%, #1e1b4b 100%);
    color: #ffffff;
    text-align: center;
  }
  .ctg-sales-inner {
    max-width: 800px;
    margin: 0 auto;
  }
  .ctg-sales-title {
    font-size: clamp(2.2rem, 4vw, 3rem);
    font-weight: 800;
    letter-spacing: -0.02em;
    margin-bottom: 1rem;
    line-height: 1.2;
  }
  .ctg-sales-desc {
    font-size: 1.15rem;
    color: #bae6fd;
    line-height: 1.6;
    margin-bottom: 2.5rem;
  }
  .ctg-sales-actions {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 2rem;
  }
  .ctg-btn-white {
    background: #ffffff;
    color: #075985;
    font-weight: 700;
    font-size: 1rem;
    padding: 0.9rem 2.2rem;
    border-radius: 999px;
    text-decoration: none;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    transition: all 0.2s ease;
  }
  .ctg-btn-white:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
  }

  @media (max-width: 900px) {
    .ctg-hero-section {
      width: 100% !important;
      max-width: 100% !important;
      padding: 1.5rem 1rem 3rem !important;
      box-sizing: border-box !important;
      overflow-x: hidden !important;
    }
    .ctg-hero-grid {
      display: flex !important;
      flex-direction: column !important;
      gap: 2rem !important;
      width: 100% !important;
      max-width: 100% !important;
      min-width: 0 !important;
      box-sizing: border-box !important;
    }
    .ctg-hero-grid > div:first-child {
      width: 100% !important;
      max-width: 100% !important;
      min-width: 0 !important;
      box-sizing: border-box !important;
      text-align: center !important;
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
    }
    .ctg-badge-pill {
      margin: 0 auto 1.25rem !important;
      white-space: normal !important;
      word-break: break-word !important;
      text-align: center !important;
      max-width: 100% !important;
    }
    .ctg-hero-title {
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
    .ctg-hero-desc {
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
    .ctg-hero-actions {
      display: flex !important;
      flex-direction: column !important;
      width: 100% !important;
      max-width: 320px !important;
      margin: 0 auto 1.5rem !important;
      gap: 0.65rem !important;
      align-items: stretch !important;
    }
    .ctg-btn-primary,
    .ctg-btn-secondary {
      width: 100% !important;
      box-sizing: border-box !important;
      justify-content: center !important;
      text-align: center !important;
      padding: 0.85rem 1.25rem !important;
      font-size: 0.95rem !important;
    }
    .ctg-trust-row {
      width: 100% !important;
      max-width: 100% !important;
      justify-content: center !important;
      flex-wrap: wrap !important;
      gap: 0.65rem 1.25rem !important;
      font-size: 0.8rem !important;
      margin: 0 auto !important;
    }
    .ctg-phone-wrapper {
      width: min(315px, calc(100vw - 32px)) !important;
      max-width: 315px !important;
      margin: 1.25rem auto 0 !important;
      box-sizing: border-box !important;
      perspective: none !important;
      transform-style: flat !important;
      overflow: visible !important;
    }
    .ctg-phone-device {
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      transform: none !important;
      transform-style: flat !important;
      border-radius: 36px !important;
      padding: 8px 8px 6px !important;
      border-width: 2.5px !important;
    }
    .ctg-phone-screen {
      height: 440px !important;
      border-radius: 26px !important;
    }
    .ctg-floating-card {
      display: none !important;
    }
    .ctg-features-section,
    .ctg-steps-section,
    .ctg-sales-section {
      padding: 3rem 1rem !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
    }
    .ctg-journey-flow {
      gap: 2rem !important;
      width: 100% !important;
      max-width: 100% !important;
    }
    .ctg-journey-card {
      grid-template-columns: 1fr !important;
      gap: 1.5rem !important;
      padding: 1.5rem 1.2rem !important;
      width: 100% !important;
      max-width: 100% !important;
    }
    .ctg-journey-card.reverse {
      direction: ltr !important;
    }
    .ctg-journey-card.reverse .ctg-journey-media {
      order: -1 !important;
    }
    .ctg-journey-title {
      font-size: 1.3rem !important;
    }
    .ctg-features-grid,
    .ctg-steps-grid {
      grid-template-columns: 1fr !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      gap: 1rem !important;
    }
    .ctg-feature-card,
    .ctg-step-card {
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      padding: 1.5rem 1.25rem !important;
    }
    .ctg-sales-inner {
      padding: 2.5rem 1.25rem !important;
      border-radius: 24px !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
    }
    .ctg-sales-title {
      font-size: clamp(1.5rem, 5.5vw, 2rem) !important;
    }
    .ctg-sales-desc {
      font-size: 0.95rem !important;
    }
    .ctg-sales-actions {
      flex-direction: column !important;
      width: 100% !important;
      max-width: 300px !important;
      margin: 0 auto 1.25rem !important;
      gap: 0.65rem !important;
    }
    .ctg-sales-actions .btn {
      width: 100% !important;
      justify-content: center !important;
      box-sizing: border-box !important;
    }
    .ctg-sales-trust {
      flex-direction: column !important;
      gap: 0.4rem !important;
      align-items: center !important;
    }
  }
</style>

<div class="ctg-page">
  <!-- Breadcrumb -->
  <nav class="ctg-breadcrumb" aria-label="Breadcrumb">
    <a href="<?php echo $bp; ?>">Home</a>
    <span>/</span>
    <span>Channels</span>
    <span>/</span>
    <span style="color:#0284c7;font-weight:600;">Telegram</span>
  </nav>

  <!-- 1. HERO SECTION -->
  <section class="ctg-hero-section">
    <div class="ctg-hero-grid">
      <div>
        <div class="ctg-badge-pill">
          <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.121l-6.871 4.326-2.962-.924c-.643-.204-.657-.643.136-.953l11.57-4.461c.537-.196 1.006.128.832.942z"/></svg>
          TELEGRAM BOT PLATFORM
        </div>
        <h1 class="ctg-hero-title">
          Telegram Bot Automation &amp; <span class="highlight-blue">Broadcast Platform</span>
        </h1>
        <p class="ctg-hero-desc">
          Create intelligent Telegram bots, broadcast unlimited promotions to channels & groups, and automate 24/7 customer support with interactive button menus.
        </p>
        <div class="ctg-hero-actions">
          <a href="<?php echo $bp; ?>auth/register" class="ctg-btn-primary">
            Connect Telegram Bot &rarr;
          </a>
          <button type="button" class="ctg-btn-secondary btn-demo-open">
            Book Platform Demo
          </button>
        </div>
        <div class="ctg-trust-row">
          <span class="ctg-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            BotFather Integration
          </span>
          <span class="ctg-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Unlimited Broadcasts
          </span>
          <span class="ctg-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Zero Server Setup
          </span>
        </div>
      </div>

      <!-- Live Simulator -->
      <div class="ctg-phone-wrapper">
        <div class="ctg-phone-device">
          <div class="ctg-phone-notch"></div>
          <div class="ctg-phone-screen">
            <div class="ctg-chat-header">
              <div class="ctg-avatar">TG</div>
              <div class="ctg-header-info">
                <div class="ctg-header-name">SalesAssistantBot</div>
                <div class="ctg-header-status">bot &bull; active 24/7</div>
              </div>
            </div>
            <div class="ctg-chat-messages">
              <div class="ctg-msg ctg-msg-in">
                /start
              </div>
              <div class="ctg-msg ctg-msg-out">
                Welcome to InboxWa Assistant! How can I help you today? Please choose an option below:
                <div class="ctg-inline-kb">
                  <a href="#" class="ctg-kb-btn">📦 View Plans</a>
                  <a href="#" class="ctg-kb-btn">💳 Get Discount</a>
                  <a href="#" class="ctg-kb-btn">🚀 API Docs</a>
                  <a href="#" class="ctg-kb-btn">💬 Live Agent</a>
                </div>
              </div>
              <div class="ctg-msg ctg-msg-in">
                💳 Get Discount
              </div>
              <div class="ctg-msg ctg-msg-out">
                Special Offer: Use code <strong>TELEGRAM20</strong> for 20% off any annual subscription!
              </div>
            </div>
            <div style="padding:10px 12px;background:#242f3d;display:flex;align-items:center;gap:8px;">
              <div style="flex:1;background:#17212b;border-radius:18px;padding:6px 12px;font-size:0.8rem;color:#718096;">Write a message...</div>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#64b5f6" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 2. TELEGRAM BOT SETUP GUIDE -->
  <section class="ctg-guide-section">
    <div style="text-align:center;margin-bottom:2.5rem;">
      <span class="ctg-badge-pill">Setup Guide</span>
      <h2 style="font-size:2rem;font-weight:800;color:#0f172a;margin-bottom:8px;">Link Your Telegram Bot in 4 Quick Steps</h2>
      <p style="color:#64748b;">Complete these steps to link your Telegram channel and enable automated workflows.</p>
    </div>

    <div class="ctg-guide-card">
      <div class="ctg-guide-icon">1</div>
      <div>
        <h4 style="font-size:1.1rem;font-weight:700;color:#0f172a;margin-bottom:4px;">Locate BotFather</h4>
        <p style="font-size:0.92rem;color:#64748b;line-height:1.5;">Open Telegram and search for the official <strong>@BotFather</strong> account (look for the blue verified badge).</p>
      </div>
    </div>

    <div class="ctg-guide-card">
      <div class="ctg-guide-icon">2</div>
      <div>
        <h4 style="font-size:1.1rem;font-weight:700;color:#0f172a;margin-bottom:4px;">Create New Bot</h4>
        <p style="font-size:0.92rem;color:#64748b;line-height:1.5;">Send the <code>/newbot</code> command to @BotFather and follow instructions to give your bot a name and username.</p>
      </div>
    </div>

    <div class="ctg-guide-card">
      <div class="ctg-guide-icon">3</div>
      <div>
        <h4 style="font-size:1.1rem;font-weight:700;color:#0f172a;margin-bottom:4px;">Retrieve API Token</h4>
        <p style="font-size:0.92rem;color:#64748b;line-height:1.5;">BotFather will generate an HTTP API access token (e.g. <code>123456789:ABCdefGhIJKlmNoPQRsTuvw</code>). Copy this token safely.</p>
      </div>
    </div>

    <div class="ctg-guide-card">
      <div class="ctg-guide-icon">4</div>
      <div>
        <h4 style="font-size:1.1rem;font-weight:700;color:#0f172a;margin-bottom:4px;">Connect Bot Here</h4>
        <p style="font-size:0.92rem;color:#64748b;line-height:1.5;">Paste your token in the InboxWa dashboard and click <strong>Connect Bot</strong> to activate automated replies and broadcasts.</p>
      </div>
    </div>
  </section>

  <!-- 3. HOW IT WORKS / CUSTOMER JOURNEY -->
  <section class="ctg-steps-section" id="how-it-works">
    <div class="ctg-section-header">
      <span class="ctg-badge-pill">Customer Journey &amp; Process</span>
      <h2 class="ctg-section-title">How It Works: 3 Steps to Telegram Automation</h2>
      <p class="ctg-section-subtitle">Connect your official Telegram bot in 60 seconds, build rich inline interactive menus, and broadcast to millions without message fees.</p>
    </div>

    <div class="ctg-journey-flow">
      <!-- Step 1 -->
      <div class="ctg-journey-card">
        <div class="ctg-journey-media">
          <span class="ctg-journey-badge-float">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            BotFather Official API
          </span>
          <img src="<?php echo $bp; ?>assets/images/journey/tg-step-1.jpg" alt="Telegram Step 1: Create Bot via BotFather and Connect Token" class="ctg-journey-img" loading="lazy" />
        </div>
        <div class="ctg-journey-content">
          <div class="ctg-journey-step-header">
            <span class="ctg-journey-step-pill">Step 01 &bull; Bot Pairing</span>
            <span class="ctg-journey-step-time">⏱️ Under 60 Seconds</span>
          </div>
          <h3 class="ctg-journey-title">Create Telegram Bot via @BotFather &amp; Paste API Token</h3>
          <p class="ctg-journey-desc">No complex server installations. Generate an official bot token inside Telegram with one message and paste it into InboxWa for instant pairing.</p>
          
          <div class="ctg-journey-guide-grid">
            <div class="ctg-journey-guide-box">
              <div class="ctg-journey-box-label">👉 What You Do</div>
              <ul class="ctg-journey-list">
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Open Telegram and send <code>/newbot</code> to official <strong>@BotFather</strong></span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Choose your bot's name and unique username (e.g. <code>MyStore_bot</code>)</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Copy the generated HTTP API token and paste it into your InboxWa workspace</span>
                </li>
              </ul>
            </div>
            <div class="ctg-journey-guide-box">
              <div class="ctg-journey-box-label">⚙️ How It Works Behind The Scenes</div>
              <p style="font-size:0.86rem;color:#64748b;line-height:1.5;margin:0;">InboxWa establishes a high-concurrency webhook pipe directly to Telegram's cloud datacenter, delivering sub-second message response times with unlimited bandwidth.</p>
            </div>
          </div>

          <div class="ctg-journey-kpi-badge">
            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Instant Cloud Activation &bull; Zero Server Maintenance
          </div>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="ctg-journey-card reverse">
        <div class="ctg-journey-media">
          <span class="ctg-journey-badge-float">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
            Inline Keyboard Flows
          </span>
          <img src="<?php echo $bp; ?>assets/images/journey/tg-step-2.jpg" alt="Telegram Step 2: Interactive Menus and Inline Buttons" class="ctg-journey-img" loading="lazy" />
        </div>
        <div class="ctg-journey-content">
          <div class="ctg-journey-step-header">
            <span class="ctg-journey-step-pill">Step 02 &bull; Interaction</span>
            <span class="ctg-journey-step-time">🔘 Rich Clickable Menus</span>
          </div>
          <h3 class="ctg-journey-title">Build Rich Interactive Menus &amp; Inline Button Flows</h3>
          <p class="ctg-journey-desc">Give your users an app-like experience right inside Telegram. Construct interactive inline button menus, product price cards, digital downloads, and automated FAQs.</p>
          
          <div class="ctg-journey-guide-grid">
            <div class="ctg-journey-guide-box">
              <div class="ctg-journey-box-label">👉 What You Do</div>
              <ul class="ctg-journey-list">
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Build inline buttons: <code>[Browse Catalog]</code>, <code>[Pricing]</code>, <code>[VIP Support]</code></span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Attach PDFs, download links, product photos, and web app links</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Configure automated greeting messages and auto-approve channel join requests</span>
                </li>
              </ul>
            </div>
            <div class="ctg-journey-guide-box">
              <div class="ctg-journey-box-label">⚙️ How It Works Behind The Scenes</div>
              <p style="font-size:0.86rem;color:#64748b;line-height:1.5;margin:0;">Whenever users tap an inline button, InboxWa routes the callback in under 0.1s, delivering instant dynamic answers, payment checkouts, or live support escalations.</p>
            </div>
          </div>

          <div class="ctg-journey-kpi-badge">
            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            0.1s Callback Latency &bull; 100% Responsive UI Buttons
          </div>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="ctg-journey-card">
        <div class="ctg-journey-media">
          <span class="ctg-journey-badge-float">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M11 5L6 9H2v6h4l5 4V5z"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"/></svg>
            Zero Cost Broadcasts
          </span>
          <img src="<?php echo $bp; ?>assets/images/journey/tg-step-3.jpg" alt="Telegram Step 3: Broadcast Campaigns and Group Management" class="ctg-journey-img" loading="lazy" />
        </div>
        <div class="ctg-journey-content">
          <div class="ctg-journey-step-header">
            <span class="ctg-journey-step-pill">Step 03 &bull; Broadcast &amp; Scale</span>
            <span class="ctg-journey-step-time">📢 100% Free Blasts</span>
          </div>
          <h3 class="ctg-journey-title">Broadcast to Channels &amp; Automate Group Communities</h3>
          <p class="ctg-journey-desc">Reach 10,000 or 1,000,000 subscribers simultaneously with zero per-message charges, zero rate throttling, and complete media freedom.</p>
          
          <div class="ctg-journey-guide-grid">
            <div class="ctg-journey-guide-box">
              <div class="ctg-journey-box-label">👉 What You Do</div>
              <ul class="ctg-journey-list">
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Connect your public announcement channels and community supergroups</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Schedule rich broadcasts with buttons, video updates, and discount codes</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Track open views, tap rates, and member growth in your live dashboard</span>
                </li>
              </ul>
            </div>
            <div class="ctg-journey-guide-box">
              <div class="ctg-journey-box-label">⚙️ How It Works Behind The Scenes</div>
              <p style="font-size:0.86rem;color:#64748b;line-height:1.5;margin:0;">InboxWa queues and distributes high-volume messages across Telegram's channel infrastructure without hitting flood limits or incurring extra per-message SMS costs.</p>
            </div>
          </div>

          <div class="ctg-journey-kpi-badge">
            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
            Zero Per-Message Fees &bull; Unlimited Subscribers
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. CORE FEATURES -->
  <section class="ctg-features-section">
    <div class="ctg-section-header">
      <span class="ctg-badge-pill">Key Capabilities</span>
      <h2 class="ctg-section-title">Built For High-Volume Telegram Growth</h2>
      <p class="ctg-section-subtitle">Run marketing broadcasts, customer support, and sales automation on Telegram seamlessly.</p>
    </div>

    <div class="ctg-features-grid">
      <div class="ctg-feature-card">
        <div class="ctg-feature-top">
          <div class="ctg-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          </div>
          <span class="ctg-feature-badge">1-Click Setup</span>
        </div>
        <h3 class="ctg-feature-title">Easy Account Setup</h3>
        <p class="ctg-feature-desc">Connect your Telegram business account instantly with just a single copy-paste step from BotFather.</p>
      </div>

      <div class="ctg-feature-card">
        <div class="ctg-feature-top">
          <div class="ctg-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M7 12h10M12 7v10"/></svg>
          </div>
          <span class="ctg-feature-badge">Interactive</span>
        </div>
        <h3 class="ctg-feature-title">Messages with Quick Buttons</h3>
        <p class="ctg-feature-desc">Write answers that include clickable inline buttons so your customers can reply or visit links in one tap.</p>
      </div>

      <div class="ctg-feature-card">
        <div class="ctg-feature-top">
          <div class="ctg-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          </div>
          <span class="ctg-feature-badge">Trigger Rules</span>
        </div>
        <h3 class="ctg-feature-title">Word Detection Rules</h3>
        <p class="ctg-feature-desc">Tell your account to automatically send specific answers whenever a customer types words like 'price', 'demo', or 'refund'.</p>
      </div>

      <div class="ctg-feature-card">
        <div class="ctg-feature-top">
          <div class="ctg-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <span class="ctg-feature-badge">Real-Time</span>
        </div>
        <h3 class="ctg-feature-title">Real-Time Message Logs</h3>
        <p class="ctg-feature-desc">Keep track of all sent, delivered, and read messages in a simple, live dashboard list view.</p>
      </div>

      <div class="ctg-feature-card">
        <div class="ctg-feature-top">
          <div class="ctg-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"/></svg>
          </div>
          <span class="ctg-feature-badge">Broadcasting</span>
        </div>
        <h3 class="ctg-feature-title">Unlimited Message Broadcasts</h3>
        <p class="ctg-feature-desc">Broadcast updates, promotions, and media alerts to unlimited Telegram subscribers across channels and groups simultaneously.</p>
      </div>

      <div class="ctg-feature-card">
        <div class="ctg-feature-top">
          <div class="ctg-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <span class="ctg-feature-badge">24/7 Auto</span>
        </div>
        <h3 class="ctg-feature-title">24/7 AI Customer Support</h3>
        <p class="ctg-feature-desc">Let smart AI bots handle customer FAQs and routing 24/7 without needing human agents on constant standby.</p>
      </div>
    </div>
  </section>

  <!-- 5. FINAL SALES CTA -->
  <section class="ctg-sales-section">
    <div class="ctg-sales-inner">
      <h2 class="ctg-sales-title">Launch Your Telegram Bot Today</h2>
      <p class="ctg-sales-desc">Start building custom bots, broadcasting to groups, and handling customer inquiries on Telegram with InboxWa.</p>
      <div class="ctg-sales-actions">
        <a href="<?php echo $bp; ?>auth/register" class="ctg-btn-white">
          Create Free Bot &rarr;
        </a>
        <button type="button" class="ctg-btn-secondary btn-demo-open" style="background:transparent;color:#fff;border-color:rgba(255,255,255,0.4);">
          Schedule a Demo
        </button>
      </div>
      <div style="font-size:0.88rem;color:#bae6fd;display:flex;justify-content:center;gap:1.5rem;flex-wrap:wrap;">
        <span>✓ Instant token connection</span>
        <span>✓ Unlimited broadcasts</span>
        <span>✓ Cancel anytime</span>
      </div>
    </div>
  </section>
</div>

<?php include __DIR__ . '/../../includes/footer.php'; ?>