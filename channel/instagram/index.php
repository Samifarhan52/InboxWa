<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Instagram DM Automation & Comment-to-DM Platform | InboxWa';
$pageDescription = 'Automate Instagram Direct Messages, auto-reply to Post & Reel comments, capture leads, and scale customer support with official Meta API compliance.';
$canonicalUrl = 'https://inboxwa.com/channel/instagram/';
$ogImage = 'assets/images/og-image.png';

include __DIR__ . '/../../includes/header.php';
?>

<style>
  :root {
    --ig-pink: #ec4899;
    --ig-purple: #8b5cf6;
    --ig-gradient: linear-gradient(135deg, #ec4899 0%, #8b5cf6 100%);
    --ig-gradient-subtle: linear-gradient(135deg, rgba(236, 72, 153, 0.08) 0%, rgba(139, 92, 246, 0.08) 100%);
  }

  .cig-page {
    background: #ffffff;
    color: #1e293b;
    font-family: inherit;
    overflow-x: hidden;
    width: 100%;
    max-width: 100vw;
    box-sizing: border-box;
  }

  /* Breadcrumb */
  .cig-breadcrumb {
    padding: calc(var(--nav, 72px) + 1.25rem) 1.5rem 0.5rem;
    max-width: 1200px;
    margin: 0 auto;
    font-size: 0.85rem;
    color: #64748b;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }
  .cig-breadcrumb a {
    color: #64748b;
    text-decoration: none;
    transition: color 0.15s;
  }
  .cig-breadcrumb a:hover {
    color: var(--ig-pink);
  }

  /* Hero Section */
  .cig-hero-section {
    padding: 2.5rem 1.5rem 4.5rem;
    max-width: 1200px;
    width: 100%;
    margin: 0 auto;
    box-sizing: border-box;
  }
  .cig-hero-grid {
    display: grid;
    grid-template-columns: 1.15fr 0.85fr;
    gap: 3.5rem;
    align-items: center;
  }
  .cig-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(236, 72, 153, 0.1);
    border: 1px solid rgba(236, 72, 153, 0.25);
    color: #db2777;
    font-size: 0.82rem;
    font-weight: 700;
    padding: 0.35rem 0.85rem;
    border-radius: 999px;
    margin-bottom: 1.25rem;
  }
  .cig-hero-title {
    font-size: clamp(2.25rem, 4.5vw, 3.5rem);
    font-weight: 800;
    line-height: 1.15;
    color: #0f172a;
    letter-spacing: -0.02em;
    margin-bottom: 1.25rem;
  }
  .cig-hero-title .highlight-pink {
    background: var(--ig-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .cig-hero-desc {
    font-size: 1.15rem;
    line-height: 1.65;
    color: #475569;
    margin-bottom: 2rem;
    max-width: 540px;
  }
  .cig-hero-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 2rem;
  }
  .cig-btn-primary {
    background: var(--ig-gradient);
    color: #ffffff;
    font-weight: 700;
    font-size: 1rem;
    padding: 0.85rem 1.85rem;
    border-radius: 999px;
    text-decoration: none;
    box-shadow: 0 10px 25px -5px rgba(236, 72, 153, 0.4);
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    border: none;
  }
  .cig-btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 30px -5px rgba(236, 72, 153, 0.55);
    color: #ffffff;
  }
  .cig-btn-secondary {
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
  .cig-btn-secondary:hover {
    background: #f8fafc;
    border-color: #94a3b8;
    color: #0f172a;
    transform: translateY(-2px);
  }
  .cig-trust-row {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    flex-wrap: wrap;
    font-size: 0.85rem;
    font-weight: 600;
    color: #64748b;
  }
  .cig-trust-item {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
  }

  /* Interactive Mockup Phone Stage */
  .cig-phone-wrapper {
    position: relative;
    max-width: 380px;
    margin: 0 auto;
  }
  .cig-phone-device {
    background: #000000;
    border-radius: 36px;
    padding: 12px;
    box-shadow: 0 25px 60px -15px rgba(236, 72, 153, 0.25), 0 0 0 1px rgba(255, 255, 255, 0.1);
    border: 3px solid #1e293b;
    position: relative;
    z-index: 2;
  }
  .cig-phone-notch {
    width: 90px;
    height: 18px;
    background: #1e293b;
    border-radius: 0 0 12px 12px;
    margin: 0 auto 8px;
  }
  .cig-phone-screen {
    background: #0f111a;
    border-radius: 26px;
    overflow: hidden;
    height: 480px;
    display: flex;
    flex-direction: column;
    color: #ffffff;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
  }
  .cig-chat-header {
    background: #161926;
    padding: 12px 14px;
    display: flex;
    align-items: center;
    gap: 10px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  }
  .cig-avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: var(--ig-gradient);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 14px;
    color: #fff;
    flex-shrink: 0;
  }
  .cig-header-info {
    flex: 1;
    min-width: 0;
  }
  .cig-header-name {
    font-size: 0.9rem;
    font-weight: 700;
    color: #ffffff;
    display: flex;
    align-items: center;
    gap: 4px;
  }
  .cig-header-status {
    font-size: 0.72rem;
    color: #a1a1aa;
  }
  .cig-chat-messages {
    flex: 1;
    padding: 14px;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    gap: 10px;
    background: #0a0c14;
  }
  .cig-msg {
    max-width: 84%;
    padding: 9px 13px;
    border-radius: 18px;
    font-size: 0.84rem;
    line-height: 1.4;
    position: relative;
    word-break: break-word;
  }
  .cig-msg-in {
    background: #27272a;
    color: #f4f4f5;
    align-self: flex-start;
    border-bottom-left-radius: 4px;
  }
  .cig-msg-out {
    background: var(--ig-gradient);
    color: #ffffff;
    align-self: flex-end;
    border-bottom-right-radius: 4px;
  }
  .cig-product-card {
    background: #18181b;
    border: 1px solid rgba(236, 72, 153, 0.3);
    border-radius: 14px;
    padding: 10px;
    margin-top: 6px;
    display: flex;
    flex-direction: column;
    gap: 6px;
  }
  .cig-card-title {
    font-weight: 700;
    font-size: 0.85rem;
    color: #fff;
  }
  .cig-card-price {
    font-weight: 800;
    color: #f472b6;
    font-size: 0.95rem;
  }
  .cig-quick-btn {
    background: rgba(236, 72, 153, 0.2);
    border: 1px solid rgba(236, 72, 153, 0.4);
    color: #f472b6;
    border-radius: 999px;
    padding: 6px 12px;
    font-size: 0.76rem;
    font-weight: 700;
    text-align: center;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.15s;
  }
  .cig-quick-btn:hover {
    background: rgba(236, 72, 153, 0.35);
    color: #fff;
  }
  .cig-chat-input-bar {
    padding: 8px 12px;
    background: #161926;
    display: flex;
    align-items: center;
    gap: 8px;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
  }
  .cig-input-fake {
    flex: 1;
    background: #27272a;
    border-radius: 999px;
    padding: 7px 14px;
    font-size: 0.82rem;
    color: #71717a;
  }

  /* Features Grid Section */
  .cig-features-section {
    padding: 5rem 1.5rem;
    background: #f8fafc;
  }
  .cig-section-header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 3.5rem;
  }
  .cig-section-title {
    font-size: clamp(2rem, 3.5vw, 2.75rem);
    font-weight: 800;
    color: #0f172a;
    letter-spacing: -0.02em;
    margin-bottom: 0.75rem;
  }
  .cig-section-subtitle {
    font-size: 1.1rem;
    color: #64748b;
    line-height: 1.6;
  }
  .cig-features-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    max-width: 1200px;
    margin: 0 auto;
  }
  .cig-feature-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 28px;
    transition: all 0.25s ease;
    display: flex;
    flex-direction: column;
  }
  .cig-feature-card:hover {
    transform: translateY(-4px);
    border-color: #cbd5e1;
    box-shadow: 0 16px 36px -8px rgba(236, 72, 153, 0.12);
  }
  .cig-feature-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 18px;
  }
  .cig-feature-icon {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    background: var(--ig-gradient-subtle);
    color: #db2777;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .cig-feature-badge {
    font-size: 0.68rem;
    font-weight: 700;
    padding: 3px 8px;
    border-radius: 999px;
    background: rgba(236, 72, 153, 0.1);
    color: #db2777;
    text-transform: uppercase;
    letter-spacing: 0.04em;
  }
  .cig-feature-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 8px;
  }
  .cig-feature-desc {
    font-size: 0.92rem;
    color: #64748b;
    line-height: 1.6;
  }

  /* 4-Step Journey Section */
  .cig-steps-section {
    padding: 5rem 1.5rem;
    background: #ffffff;
  }
  .cig-steps-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    max-width: 1200px;
    margin: 0 auto;
  }
  .cig-step-card {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 26px;
    position: relative;
    transition: all 0.25s ease;
  }
  .cig-step-card:hover {
    border-color: #f472b6;
    transform: translateY(-3px);
  }
  .cig-step-num {
    font-size: 2.25rem;
    font-weight: 900;
    background: var(--ig-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    line-height: 1;
    margin-bottom: 12px;
  }
  .cig-step-title {
    font-size: 1.15rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 8px;
  }
  .cig-step-desc {
    font-size: 0.88rem;
    color: #64748b;
    line-height: 1.55;
  }

  /* Sales CTA Section */
  .cig-sales-section {
    padding: 5rem 1.5rem;
    background: linear-gradient(135deg, #831843 0%, #312e81 100%);
    color: #ffffff;
    text-align: center;
  }
  .cig-sales-inner {
    max-width: 800px;
    margin: 0 auto;
  }
  .cig-sales-title {
    font-size: clamp(2.2rem, 4vw, 3rem);
    font-weight: 800;
    letter-spacing: -0.02em;
    margin-bottom: 1rem;
    line-height: 1.2;
  }
  .cig-sales-desc {
    font-size: 1.15rem;
    color: #fbcfe8;
    line-height: 1.6;
    margin-bottom: 2.5rem;
  }
  .cig-sales-actions {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 2rem;
  }
  .cig-btn-white {
    background: #ffffff;
    color: #831843;
    font-weight: 700;
    font-size: 1rem;
    padding: 0.9rem 2.2rem;
    border-radius: 999px;
    text-decoration: none;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    transition: all 0.2s ease;
  }
  .cig-btn-white:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
  }

  @media (max-width: 900px) {
    .cig-hero-section {
      width: 100% !important;
      max-width: 100% !important;
      padding: 1.5rem 1rem 3rem !important;
      box-sizing: border-box !important;
      overflow-x: hidden !important;
    }
    .cig-hero-grid {
      display: flex !important;
      flex-direction: column !important;
      gap: 2rem !important;
      width: 100% !important;
      max-width: 100% !important;
      min-width: 0 !important;
      box-sizing: border-box !important;
    }
    .cig-hero-grid > div:first-child {
      width: 100% !important;
      max-width: 100% !important;
      min-width: 0 !important;
      box-sizing: border-box !important;
      text-align: center !important;
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
    }
    .cig-badge-pill {
      margin: 0 auto 1.25rem !important;
      white-space: normal !important;
      word-break: break-word !important;
      text-align: center !important;
      max-width: 100% !important;
    }
    .cig-hero-title {
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
    .cig-hero-desc {
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
    .cig-hero-actions {
      display: flex !important;
      flex-direction: column !important;
      width: 100% !important;
      max-width: 320px !important;
      margin: 0 auto 1.5rem !important;
      gap: 0.65rem !important;
      align-items: stretch !important;
    }
    .cig-btn-primary,
    .cig-btn-secondary {
      width: 100% !important;
      box-sizing: border-box !important;
      justify-content: center !important;
      text-align: center !important;
      padding: 0.85rem 1.25rem !important;
      font-size: 0.95rem !important;
    }
    .cig-trust-row {
      width: 100% !important;
      max-width: 100% !important;
      justify-content: center !important;
      flex-wrap: wrap !important;
      gap: 0.65rem 1.25rem !important;
      font-size: 0.8rem !important;
      margin: 0 auto !important;
    }
    .cig-phone-wrapper {
      width: min(315px, calc(100vw - 32px)) !important;
      max-width: 315px !important;
      margin: 1.25rem auto 0 !important;
      box-sizing: border-box !important;
      perspective: none !important;
      transform-style: flat !important;
      overflow: visible !important;
    }
    .cig-phone-device {
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      transform: none !important;
      transform-style: flat !important;
      border-radius: 36px !important;
      padding: 8px 8px 6px !important;
      border-width: 2.5px !important;
    }
    .cig-phone-screen {
      height: 440px !important;
      border-radius: 26px !important;
    }
    .cig-floating-card {
      display: none !important;
    }
    .cig-features-section,
    .cig-steps-section,
    .cig-sales-section {
      padding: 3rem 1rem !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
    }
    .cig-features-grid,
    .cig-steps-grid {
      grid-template-columns: 1fr !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      gap: 1rem !important;
    }
    .cig-feature-card,
    .cig-step-card {
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      padding: 1.5rem 1.25rem !important;
    }
    .cig-sales-inner {
      padding: 2.5rem 1.25rem !important;
      border-radius: 24px !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
    }
    .cig-sales-title {
      font-size: clamp(1.5rem, 5.5vw, 2rem) !important;
    }
    .cig-sales-desc {
      font-size: 0.95rem !important;
    }
    .cig-sales-actions {
      flex-direction: column !important;
      width: 100% !important;
      max-width: 300px !important;
      margin: 0 auto 1.25rem !important;
      gap: 0.65rem !important;
    }
    .cig-sales-actions .btn {
      width: 100% !important;
      justify-content: center !important;
      box-sizing: border-box !important;
    }
    .cig-sales-trust {
      flex-direction: column !important;
      gap: 0.4rem !important;
      align-items: center !important;
    }
  }
</style>

<div class="cig-page">
  <!-- Breadcrumb -->
  <nav class="cig-breadcrumb" aria-label="Breadcrumb">
    <a href="<?php echo $bp; ?>">Home</a>
    <span>/</span>
    <span>Channels</span>
    <span>/</span>
    <span style="color:#db2777;font-weight:600;">Instagram</span>
  </nav>

  <!-- 1. HERO SECTION -->
  <section class="cig-hero-section">
    <div class="cig-hero-grid">
      <div>
        <div class="cig-badge-pill">
          <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/></svg>
          INSTAGRAM DM AUTOMATION
        </div>
        <h1 class="cig-hero-title">
          Turn Instagram Conversations Into <span class="highlight-pink">Customers</span>
        </h1>
        <p class="cig-hero-desc">
          Automate Instagram Direct Messages, auto-reply to Post & Reel comments, capture leads, and scale customer support with official Meta API compliance.
        </p>
        <div class="cig-hero-actions">
          <a href="<?php echo $bp; ?>auth/register" class="cig-btn-primary">
            Start Free Trial &rarr;
          </a>
          <button type="button" class="cig-btn-secondary btn-demo-open">
            Book Instagram Demo
          </button>
        </div>
        <div class="cig-trust-row">
          <span class="cig-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#db2777" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Official Meta API
          </span>
          <span class="cig-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#db2777" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Zero-Ban Guarantee
          </span>
          <span class="cig-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#db2777" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            2-Minute Setup
          </span>
        </div>
      </div>

      <!-- Live Simulator -->
      <div class="cig-phone-wrapper">
        <div class="cig-phone-device">
          <div class="cig-phone-notch"></div>
          <div class="cig-phone-screen">
            <div class="cig-chat-header">
              <div class="cig-avatar">IG</div>
              <div class="cig-header-info">
                <div class="cig-header-name">YourBrand <svg viewBox="0 0 24 24" width="13" height="13" fill="#38bdf8"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div>
                <div class="cig-header-status">Active now &bull; Instagram Business</div>
              </div>
            </div>
            <div class="cig-chat-messages">
              <div class="cig-msg cig-msg-in">
                Hey! I saw your new Reel. How much is the Autumn Jacket?
              </div>
              <div class="cig-msg cig-msg-out">
                Hi Sarah! Thanks for reaching out! Here are the details:
                <div class="cig-product-card">
                  <div class="cig-card-title">Urban Tech Autumn Jacket</div>
                  <div class="cig-card-price">$89.00 &bull; 20% Off Today</div>
                  <a href="#" class="cig-quick-btn">Order with 20% Code &rarr;</a>
                  <a href="#" class="cig-quick-btn" style="background:rgba(255,255,255,0.1);color:#fff;border-color:rgba(255,255,255,0.2);">View Size Guide</a>
                </div>
              </div>
              <div class="cig-msg cig-msg-in">
                Awesome! Just ordered Medium in Black!
              </div>
              <div class="cig-msg cig-msg-out">
                Order confirmed #8492! We will send tracking updates right here in your DMs.
              </div>
            </div>
            <div class="cig-chat-input-bar">
              <div class="cig-input-fake">Message...</div>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ec4899" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 2. HOW IT WORKS / 4 EASY STEPS -->
  <section class="cig-steps-section">
    <div class="cig-section-header">
      <span class="cig-badge-pill">How It Works</span>
      <h2 class="cig-section-title">Start in 4 Easy Steps</h2>
      <p class="cig-section-subtitle">Set up automated Instagram comment replies and DM workflows in under 2 minutes.</p>
    </div>

    <div class="cig-steps-grid">
      <div class="cig-step-card">
        <div class="cig-step-num">01</div>
        <h3 class="cig-step-title">Link Your Account</h3>
        <p class="cig-step-desc">Connect your business page securely using your official Instagram and Facebook log in details.</p>
      </div>

      <div class="cig-step-card">
        <div class="cig-step-num">02</div>
        <h3 class="cig-step-title">Choose Reply Words</h3>
        <p class="cig-step-desc">Select the key words (like "price", "link", "deal") that customers use when they want to get details.</p>
      </div>

      <div class="cig-step-card">
        <div class="cig-step-num">03</div>
        <h3 class="cig-step-title">Create Your Answers</h3>
        <p class="cig-step-desc">Type in the answers or activate our AI helper to answer customer questions automatically 24/7.</p>
      </div>

      <div class="cig-step-card">
        <div class="cig-step-num">04</div>
        <h3 class="cig-step-title">Launch & Grow</h3>
        <p class="cig-step-desc">Watch comment words automatically send direct messages and turn followers into paying customers!</p>
      </div>
    </div>
  </section>

  <!-- 3. CORE FEATURES -->
  <section class="cig-features-section">
    <div class="cig-section-header">
      <span class="cig-badge-pill">Key Capabilities</span>
      <h2 class="cig-section-title">Everything You Need To Dominate Instagram Sales</h2>
      <p class="cig-section-subtitle">Turn viral reach into measurable revenue with powerful automation tools.</p>
    </div>

    <div class="cig-features-grid">
      <div class="cig-feature-card">
        <div class="cig-feature-top">
          <div class="cig-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          </div>
          <span class="cig-feature-badge">Comments to DMs</span>
        </div>
        <h3 class="cig-feature-title">Reply Instantly to Comments</h3>
        <p class="cig-feature-desc">Automatically send discount codes, PDF links, or product catalogs directly to customers who comment on your posts or reels.</p>
      </div>

      <div class="cig-feature-card">
        <div class="cig-feature-top">
          <div class="cig-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <span class="cig-feature-badge">Smart Moderation</span>
        </div>
        <h3 class="cig-feature-title">Keep Comments Clean</h3>
        <p class="cig-feature-desc">Keep your posts friendly. Our system instantly filters, hides, or deletes spam, competitor links, and bad words from your comments section automatically.</p>
      </div>

      <div class="cig-feature-card">
        <div class="cig-feature-top">
          <div class="cig-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
          </div>
          <span class="cig-feature-badge">Visual Builder</span>
        </div>
        <h3 class="cig-feature-title">Design Customer Chat Routes</h3>
        <p class="cig-feature-desc">Draw out the exact steps you want customers to take. Set up questions, capture their email, and tag them based on what they are interested in.</p>
      </div>

      <div class="cig-feature-card">
        <div class="cig-feature-top">
          <div class="cig-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
          </div>
          <span class="cig-feature-badge">AI Assistant</span>
        </div>
        <h3 class="cig-feature-title">24/7 Smart AI Chatbot</h3>
        <p class="cig-feature-desc">Train an AI helper on your website links or business details. It will answer customer questions about pricing and product availability around the clock.</p>
      </div>

      <div class="cig-feature-card">
        <div class="cig-feature-top">
          <div class="cig-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/></svg>
          </div>
          <span class="cig-feature-badge">Story Mention</span>
        </div>
        <h3 class="cig-feature-title">Story Mention Auto-Replies</h3>
        <p class="cig-feature-desc">Trigger instant thank-you messages with coupon codes whenever a follower mentions your brand in their Instagram Story.</p>
      </div>

      <div class="cig-feature-card">
        <div class="cig-feature-top">
          <div class="cig-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg>
          </div>
          <span class="cig-feature-badge">Lead Capture</span>
        </div>
        <h3 class="cig-feature-title">In-Chat Lead Capture Forms</h3>
        <p class="cig-feature-desc">Collect customer emails, phone numbers, and delivery addresses without ever forcing them to leave the Instagram direct message screen.</p>
      </div>
    </div>
  </section>

  <!-- 4. FINAL SALES CTA -->
  <section class="cig-sales-section">
    <div class="cig-sales-inner">
      <h2 class="cig-sales-title">Ready To Automate Your Instagram Growth?</h2>
      <p class="cig-sales-desc">Join thousands of fast-growing brands converting Instagram comments and DMs into high-value sales automatically.</p>
      <div class="cig-sales-actions">
        <a href="<?php echo $bp; ?>auth/register" class="cig-btn-white">
          Start Free Trial &rarr;
        </a>
        <button type="button" class="cig-btn-secondary btn-demo-open" style="background:transparent;color:#fff;border-color:rgba(255,255,255,0.4);">
          Talk to an Expert
        </button>
      </div>
      <div style="font-size:0.88rem;color:#fbcfe8;display:flex;justify-content:center;gap:1.5rem;flex-wrap:wrap;">
        <span>✓ No credit card required</span>
        <span>✓ 100% Meta compliant</span>
        <span>✓ Cancel anytime</span>
      </div>
    </div>
  </section>
</div>

<?php include __DIR__ . '/../../includes/footer.php'; ?>