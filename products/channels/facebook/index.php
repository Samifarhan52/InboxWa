<?php
$basePath = '../../../';
$bp = '../../../';
require_once __DIR__ . '/../../../config/cms.php';

$pageTitle = 'Facebook Messenger Automation & Lead Ads Sync | InboxWa';
$pageDescription = 'Connect your Facebook business pages, automatically save customer form details from your ads, chat in a single inbox, and send easy automated messages with InboxWa.';
$canonicalUrl = 'https://inboxwa.com/channel/facebook/';
$ogImage = 'assets/images/channel/facebook/hero.png';

include __DIR__ . '/../../../includes/header.php';
?>

<style>
  :root {
    --fb-blue: #1877f2;
    --fb-darkblue: #1d4ed8;
    --fb-light: #2563eb;
    --fb-gradient: linear-gradient(135deg, #1877f2 0%, #2563eb 100%);
    --fb-gradient-subtle: linear-gradient(135deg, rgba(24, 119, 242, 0.08) 0%, rgba(37, 99, 235, 0.08) 100%);
  }

  .cfb-page {
    background: #ffffff;
    color: #1e293b;
    font-family: inherit;
    overflow-x: hidden;
    width: 100%;
    max-width: 100vw;
    box-sizing: border-box;
  }

  /* Breadcrumb */
  .cfb-breadcrumb {
    padding: calc(var(--nav, 72px) + 1.25rem) 1.5rem 0.5rem;
    max-width: 1200px;
    margin: 0 auto;
    font-size: 0.85rem;
    color: #64748b;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }
  .cfb-breadcrumb a {
    color: #64748b;
    text-decoration: none;
    transition: color 0.15s;
  }
  .cfb-breadcrumb a:hover {
    color: var(--fb-blue);
  }

  /* Hero Section */
  .cfb-hero-section {
    padding: 2.5rem 1.5rem 4.5rem;
    max-width: 1200px;
    width: 100%;
    margin: 0 auto;
    box-sizing: border-box;
  }
  .cfb-hero-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3.5rem;
    align-items: center;
  }
  .cfb-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.35rem 0.9rem;
    border-radius: 9999px;
    background: var(--fb-gradient-subtle);
    color: var(--fb-blue);
    font-size: 0.78rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    border: 1px solid rgba(24, 119, 242, 0.2);
    margin-bottom: 1.25rem;
  }
  .cfb-badge-pill svg {
    flex-shrink: 0;
  }
  .cfb-hero-title {
    font-size: clamp(2.2rem, 4vw, 3.25rem);
    font-weight: 900;
    line-height: 1.15;
    color: #0f172a;
    margin: 0 0 1.25rem;
    letter-spacing: -0.025em;
  }
  .cfb-hero-title .highlight-fb {
    background: var(--fb-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
  }
  .cfb-hero-desc {
    font-size: 1.1rem;
    line-height: 1.65;
    color: #475569;
    margin: 0 0 2rem;
    max-width: 520px;
  }
  .cfb-hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    margin-bottom: 2.5rem;
    align-items: center;
  }
  .cfb-btn-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    background: var(--fb-gradient);
    color: #ffffff !important;
    font-weight: 700;
    font-size: 0.98rem;
    padding: 0.875rem 1.85rem;
    border-radius: 12px;
    text-decoration: none;
    box-shadow: 0 10px 25px -5px rgba(24, 119, 242, 0.38);
    transition: all 0.2s ease;
    border: none;
    cursor: pointer;
  }
  .cfb-btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 30px -5px rgba(24, 119, 242, 0.5);
    color: #ffffff !important;
  }
  .cfb-btn-secondary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    background: #f8fafc;
    color: #334155;
    font-weight: 600;
    font-size: 0.98rem;
    padding: 0.875rem 1.65rem;
    border-radius: 12px;
    text-decoration: none;
    border: 1px solid #e2e8f0;
    transition: all 0.2s ease;
    cursor: pointer;
  }
  .cfb-btn-secondary:hover {
    background: #f1f5f9;
    color: #0f172a;
    border-color: #cbd5e1;
  }
  .cfb-trust-row {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    font-size: 0.85rem;
    color: #64748b;
    font-weight: 600;
    align-items: center;
  }
  .cfb-trust-item {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
  }
  .cfb-trust-item svg {
    color: var(--fb-blue);
    flex-shrink: 0;
  }
  .cfb-hero-visual {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }
  .cfb-hero-img-wrap {
    position: relative;
    width: 100%;
    max-width: 540px;
    border-radius: 20px;
    box-shadow: 0 25px 50px -12px rgba(24, 119, 242, 0.2);
    overflow: hidden;
    background: #f8fafc;
    border: 1px solid rgba(24, 119, 242, 0.15);
  }
  .cfb-hero-img {
    display: block;
    width: 100%;
    height: auto;
    object-fit: cover;
    transform: translateZ(0);
  }

  /* Section Containers */
  .cfb-container {
    max-width: 1200px;
    margin: 0 auto;
    width: 100%;
    padding: 0 1.5rem;
    box-sizing: border-box;
  }
  .cfb-section-header {
    text-align: center;
    max-width: 760px;
    margin: 0 auto 3.5rem;
  }
  .cfb-section-title {
    font-size: clamp(1.85rem, 3.2vw, 2.6rem);
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 1rem;
    letter-spacing: -0.02em;
    line-height: 1.2;
  }
  .cfb-section-subtitle {
    font-size: 1.05rem;
    color: #64748b;
    line-height: 1.6;
    margin: 0;
  }

  /* 4 Showcase Rows */
  .cfb-showcases-section {
    padding: 5rem 0;
    background: #ffffff;
  }
  .cfb-showcases-list {
    display: flex;
    flex-direction: column;
    gap: 5.5rem;
  }
  .cfb-showcase-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
  }
  .cfb-showcase-row.reversed {
    direction: rtl;
  }
  .cfb-showcase-row.reversed .cfb-sc-text {
    direction: ltr;
  }
  .cfb-showcase-row.reversed .cfb-sc-visual {
    direction: ltr;
  }
  .cfb-sc-tag {
    display: inline-block;
    padding: 0.25rem 0.75rem;
    border-radius: 6px;
    background: rgba(24, 119, 242, 0.1);
    color: var(--fb-blue);
    font-size: 0.78rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 0.75rem;
  }
  .cfb-sc-title {
    font-size: clamp(1.65rem, 2.5vw, 2.25rem);
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 1rem;
    line-height: 1.25;
    letter-spacing: -0.015em;
  }
  .cfb-sc-desc {
    font-size: 1.02rem;
    line-height: 1.65;
    color: #475569;
    margin: 0 0 1.5rem;
  }
  .cfb-sc-bullets {
    list-style: none;
    padding: 0;
    margin: 0 0 2rem;
    display: flex;
    flex-direction: column;
    gap: 0.85rem;
  }
  .cfb-sc-bullet {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    font-size: 0.95rem;
    color: #334155;
    font-weight: 500;
    line-height: 1.45;
  }
  .cfb-sc-bullet svg {
    color: var(--fb-blue);
    flex-shrink: 0;
    margin-top: 2px;
  }
  .cfb-sc-visual {
    position: relative;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.08);
    border: 1px solid #e2e8f0;
    background: #f8fafc;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .cfb-sc-visual:hover {
    transform: translateY(-4px);
    box-shadow: 0 25px 50px -12px rgba(24, 119, 242, 0.18);
  }
  .cfb-sc-img {
    display: block;
    width: 100%;
    height: auto;
    object-fit: cover;
  }

  /* Built-In Tools Grid (6 tools) */
  .cfb-tools-section {
    padding: 5.5rem 0;
    background: #f8fafc;
    border-top: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
  }
  .cfb-tools-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.75rem;
  }
  .cfb-tool-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 2.25rem 1.75rem;
    border: 1px solid #e2e8f0;
    transition: all 0.25s ease;
  }
  .cfb-tool-card:hover {
    border-color: var(--fb-blue);
    box-shadow: 0 15px 35px -5px rgba(24, 119, 242, 0.12);
    transform: translateY(-3px);
  }
  .cfb-tool-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: var(--fb-gradient-subtle);
    color: var(--fb-blue);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.25rem;
    border: 1px solid rgba(24, 119, 242, 0.2);
  }
  .cfb-tool-icon svg {
    width: 26px;
    height: 26px;
  }
  .cfb-tool-card h4 {
    font-size: 1.2rem;
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 0.75rem;
  }
  .cfb-tool-card p {
    font-size: 0.92rem;
    line-height: 1.6;
    color: #64748b;
    margin: 0;
  }

  /* 4 Steps Section */
  .cfb-steps-section {
    padding: 5.5rem 0;
    background: #ffffff;
  }
  .cfb-steps-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
  }
  .cfb-step-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 2rem 1.5rem;
    border: 1px solid #e2e8f0;
    position: relative;
    transition: all 0.25s ease;
    display: flex;
    flex-direction: column;
  }
  .cfb-step-card:hover {
    transform: translateY(-4px);
    border-color: var(--fb-blue);
    box-shadow: 0 15px 30px -5px rgba(24, 119, 242, 0.12);
  }
  .cfb-step-number {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: var(--fb-gradient-subtle);
    color: var(--fb-blue);
    font-size: 1.15rem;
    font-weight: 800;
    margin-bottom: 1.25rem;
    border: 1px solid rgba(24, 119, 242, 0.2);
  }
  .cfb-step-card h4 {
    font-size: 1.15rem;
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 0.65rem;
    line-height: 1.3;
  }
  .cfb-step-card p {
    font-size: 0.9rem;
    line-height: 1.6;
    color: #64748b;
    margin: 0;
  }

  /* Enterprise Capabilities Grid */
  .cfb-capabilities-section {
    padding: 5.5rem 0;
    background: #f8fafc;
    border-top: 1px solid #e2e8f0;
  }
  .cfb-cap-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.75rem;
  }
  .cfb-cap-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 2.25rem 1.75rem;
    border: 1px solid #e2e8f0;
    transition: all 0.25s ease;
  }
  .cfb-cap-card:hover {
    border-color: var(--fb-blue);
    box-shadow: 0 15px 35px -5px rgba(24, 119, 242, 0.12);
    transform: translateY(-3px);
  }
  .cfb-cap-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: var(--fb-gradient-subtle);
    color: var(--fb-blue);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.25rem;
    border: 1px solid rgba(24, 119, 242, 0.2);
  }
  .cfb-cap-icon svg {
    width: 26px;
    height: 26px;
  }
  .cfb-cap-card h3 {
    font-size: 1.2rem;
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 0.75rem;
  }
  .cfb-cap-card p {
    font-size: 0.92rem;
    line-height: 1.6;
    color: #64748b;
    margin: 0;
  }

  /* FAQs Section */
  .cfb-faq-section {
    padding: 5.5rem 0;
    background: #ffffff;
    border-top: 1px solid #e2e8f0;
  }
  .cfb-faq-list {
    max-width: 800px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }
  .cfb-faq-item {
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    background: #ffffff;
    overflow: hidden;
    transition: all 0.2s ease;
  }
  .cfb-faq-item.active {
    border-color: var(--fb-blue);
    box-shadow: 0 10px 25px -5px rgba(24, 119, 242, 0.08);
  }
  .cfb-faq-trigger {
    width: 100%;
    padding: 1.35rem 1.5rem;
    text-align: left;
    background: none;
    border: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 1.05rem;
    font-weight: 700;
    color: #0f172a;
    cursor: pointer;
  }
  .cfb-faq-icon {
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #94a3b8;
    transition: transform 0.25s ease;
    flex-shrink: 0;
  }
  .cfb-faq-item.active .cfb-faq-icon {
    transform: rotate(180deg);
    color: var(--fb-blue);
  }
  .cfb-faq-content {
    display: none;
    padding: 0 1.5rem 1.35rem;
    font-size: 0.95rem;
    color: #475569;
    line-height: 1.65;
  }
  .cfb-faq-item.active .cfb-faq-content {
    display: block;
  }

  /* Sales Banner */
  .cfb-sales-section {
    padding: 5rem 1.5rem;
    background: #f8fafc;
  }
  .cfb-cta-banner {
    max-width: 1100px;
    margin: 0 auto;
    background: var(--fb-gradient);
    border-radius: 24px;
    padding: 4.5rem 2.5rem;
    text-align: center;
    color: #ffffff;
    box-shadow: 0 25px 50px -12px rgba(24, 119, 242, 0.4);
    position: relative;
    overflow: hidden;
  }
  .cfb-cta-banner::before {
    content: ;
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.15) 0%, transparent 60%);
    pointer-events: none;
  }
  .cfb-cta-title {
    font-size: clamp(2rem, 3.5vw, 2.75rem);
    font-weight: 900;
    margin: 0 0 1rem;
    line-height: 1.2;
    color: #ffffff;
  }
  .cfb-cta-subtitle {
    font-size: 1.15rem;
    opacity: 0.95;
    max-width: 680px;
    margin: 0 auto 2.5rem;
    line-height: 1.6;
    color: #ffffff;
  }
  .cfb-cta-actions {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 1rem;
    position: relative;
    z-index: 2;
  }
  .cfb-btn-white {
    background: #ffffff;
    color: var(--fb-blue) !important;
    font-weight: 800;
    font-size: 1rem;
    padding: 0.95rem 2.2rem;
    border-radius: 12px;
    text-decoration: none;
    box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
  }
  .cfb-btn-white:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    color: var(--fb-blue) !important;
  }
  .cfb-cta-trust {
    margin-top: 1.75rem;
    font-size: 0.85rem;
    opacity: 0.9;
    color: #ffffff;
  }

  /* Responsive Rules */
  @media (max-width: 1024px) {
    .cfb-hero-grid, .cfb-showcase-row {
      grid-template-columns: 1fr;
      gap: 3rem;
    }
    .cfb-showcase-row.reversed {
      direction: ltr;
    }
    .cfb-showcase-row.reversed .cfb-sc-visual {
      order: 2;
    }
    .cfb-showcase-row.reversed .cfb-sc-text {
      order: 1;
    }
    .cfb-tools-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    .cfb-steps-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    .cfb-cap-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }
  @media (max-width: 640px) {
    .cfb-hero-section {
      padding: 1.5rem 1rem 3.5rem;
    }
    .cfb-tools-grid {
      grid-template-columns: 1fr;
    }
    .cfb-steps-grid {
      grid-template-columns: 1fr;
    }
    .cfb-cap-grid {
      grid-template-columns: 1fr;
    }
    .cfb-cta-banner {
      padding: 3rem 1.5rem;
    }
    .cfb-hero-actions {
      flex-direction: column;
      align-items: stretch;
    }
    .cfb-btn-primary, .cfb-btn-secondary {
      width: 100%;
      text-align: center;
    }
  }
</style>

<div class="cfb-page">
  <!-- Breadcrumb -->
  <nav class="cfb-breadcrumb" aria-label="Breadcrumb">
    <a href="<?php echo $bp; ?>">Home</a>
    <span>/</span>
    <span>Channels</span>
    <span>/</span>
    <span style="color:#1877f2;font-weight:600;">Facebook</span>
  </nav>

  <!-- 1. HERO SECTION -->
  <section class="cfb-hero-section">
    <div class="cfb-hero-grid">
      <div class="cfb-hero-content">
        <span class="cfb-badge-pill">
          <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          FACEBOOK MESSENGER &amp; LEAD ADS
        </span>
        <h1 class="cfb-hero-title">
          Automate Your Facebook <span class="highlight-fb">Pages &amp; Lead Ads</span>
        </h1>
        <p class="cfb-hero-desc">
          Connect your Facebook business pages, automatically save customer form details from your ads, chat in a single inbox, and send easy automated messages.
        </p>
        <div class="cfb-hero-actions">
          <a href="<?php echo $bp; ?>auth/register" class="cfb-btn-primary">
            Start Free Trial &rarr;
          </a>
          <button type="button" class="cfb-btn-secondary btn-demo-open">
            Book Facebook Demo
          </button>
        </div>
        <div class="cfb-trust-row">
          <span class="cfb-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Official Meta Business API
          </span>
          <span class="cfb-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Instant Lead Sync
          </span>
          <span class="cfb-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            2-Minute Setup
          </span>
        </div>
      </div>

      <div class="cfb-hero-visual">
        <div class="cfb-hero-img-wrap">
          <img src="<?php echo $bp; ?>assets/images/channel/facebook/hero.png?v=20260909" alt="InboxWa Facebook Automation" class="cfb-hero-img" loading="eager">
        </div>
      </div>
    </div>
  </section>

  <!-- 2. 4 FEATURE SHOWCASE CARDS -->
  <section class="cfb-showcases-section">
    <div class="cfb-container">
      <div class="cfb-section-header">
        <span class="cfb-badge-pill">Features</span>
        <h2 class="cfb-section-title">Grow Your Facebook Page Automatically</h2>
        <p class="cfb-section-subtitle">
          Here is everything you can set up to manage your customer conversations and ads in one place.
        </p>
      </div>

      <div class="cfb-showcases-list">
        <!-- Showcase 1: Link Your Facebook Pages -->
        <div class="cfb-showcase-row">
          <div class="cfb-sc-text">
            <span class="cfb-sc-tag">Multi-Page Management</span>
            <h3 class="cfb-sc-title">Link Your Facebook Pages</h3>
            <p class="cfb-sc-desc">
              Connect and manage all your Facebook business pages in one clean dashboard. Choose which page sends automated messages to customers.
            </p>
            <ul class="cfb-sc-bullets">
              <li class="cfb-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                1-click official Meta OAuth authorization
              </li>
              <li class="cfb-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Manage multiple pages and brand identities under one roof
              </li>
              <li class="cfb-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Configure granular team permissions and role assignments
              </li>
            </ul>
            <a href="<?php echo $bp; ?>auth/register" class="cfb-btn-primary">Link Your Pages Free &rarr;</a>
          </div>
          <div class="cfb-sc-visual">
            <img src="<?php echo $bp; ?>assets/images/channel/facebook/link-pages.png?v=20260909" alt="Link Your Facebook Pages" class="cfb-sc-img" loading="lazy">
          </div>
        </div>

        <!-- Showcase 2: Save Customer Form Details (Reversed) -->
        <div class="cfb-showcase-row reversed">
          <div class="cfb-sc-text">
            <span class="cfb-sc-tag">Instant Lead Ads Sync</span>
            <h3 class="cfb-sc-title">Save Customer Form Details</h3>
            <p class="cfb-sc-desc">
              Instantly save details when customers fill out forms on your Facebook ads. Save their info directly to your contact list and reply to them automatically.
            </p>
            <ul class="cfb-sc-bullets">
              <li class="cfb-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Real-time webhook ingestion from Instant Forms &amp; Lead Ads
              </li>
              <li class="cfb-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Instantly fire automated WhatsApp or Messenger welcome sequences
              </li>
              <li class="cfb-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                10x lead response speed to close deals while intent is hot
              </li>
            </ul>
            <a href="<?php echo $bp; ?>auth/register" class="cfb-btn-primary">Automate Lead Forms &rarr;</a>
          </div>
          <div class="cfb-sc-visual">
            <img src="<?php echo $bp; ?>assets/images/channel/facebook/save-leads.png?v=20260909" alt="Save Customer Form Details" class="cfb-sc-img" loading="lazy">
          </div>
        </div>

        <!-- Showcase 3: Track Your Ad Campaigns -->
        <div class="cfb-showcase-row">
          <div class="cfb-sc-text">
            <span class="cfb-sc-tag">Campaign Control</span>
            <h3 class="cfb-sc-title">Track Your Ad Campaigns</h3>
            <p class="cfb-sc-desc">
              See all your active Facebook ads in one simple view. Pause, start, or check the status of your ads without leaving your dashboard.
            </p>
            <ul class="cfb-sc-bullets">
              <li class="cfb-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Real-time campaign status monitoring and ad spend visibility
              </li>
              <li class="cfb-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Identify highest performing ad creatives and lead forms
              </li>
              <li class="cfb-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Direct Messenger and WhatsApp click-to-chat ad tracking
              </li>
            </ul>
            <a href="<?php echo $bp; ?>auth/register" class="cfb-btn-primary">Track Ad Campaigns &rarr;</a>
          </div>
          <div class="cfb-sc-visual">
            <img src="<?php echo $bp; ?>assets/images/channel/facebook/track-ads.png?v=20260909" alt="Track Your Ad Campaigns" class="cfb-sc-img" loading="lazy">
          </div>
        </div>

        <!-- Showcase 4: View Simple Ad Reports (Reversed) -->
        <div class="cfb-showcase-row reversed">
          <div class="cfb-sc-text">
            <span class="cfb-sc-tag">Clear Analytics</span>
            <h3 class="cfb-sc-title">View Simple Ad Reports</h3>
            <p class="cfb-sc-desc">
              Understand how your ads are doing. See simple counts of clicks, views, cost-per-lead, and how many people you have reached.
            </p>
            <ul class="cfb-sc-bullets">
              <li class="cfb-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Clean visual charts for impressions, clicks, leads, and spend
              </li>
              <li class="cfb-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Real-time cost-per-acquisition and conversion rate reporting
              </li>
              <li class="cfb-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Export CSV reports for executive reviews and client presentations
              </li>
            </ul>
            <a href="<?php echo $bp; ?>auth/register" class="cfb-btn-primary">Explore Ad Reports &rarr;</a>
          </div>
          <div class="cfb-sc-visual">
            <img src="<?php echo $bp; ?>assets/images/channel/facebook/ad-reports.png?v=20260909" alt="View Simple Ad Reports" class="cfb-sc-img" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. BUILT-IN PAGE & MESSAGE TOOLS -->
  <section class="cfb-tools-section">
    <div class="cfb-container">
      <div class="cfb-section-header">
        <span class="cfb-badge-pill">Built-In Tools</span>
        <h2 class="cfb-section-title">Built-In Page &amp; Message Tools</h2>
        <p class="cfb-section-subtitle">
          Every tool you need to track delivery, send replies, and manage customer chats.
        </p>
      </div>

      <div class="cfb-tools-grid">
        <div class="cfb-tool-card">
          <div class="cfb-tool-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          </div>
          <h4>Unified Inbox</h4>
          <p>Manage all customer chat messages in one single inbox across Facebook, WhatsApp, and Instagram.</p>
        </div>

        <div class="cfb-tool-card">
          <div class="cfb-tool-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
          </div>
          <h4>Simple Reply Flows</h4>
          <p>Build automated answers for customers using a visual drag-and-drop layout builder with zero code.</p>
        </div>

        <div class="cfb-tool-card">
          <div class="cfb-tool-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="9" x2="15" y2="9"/><line x1="9" y1="13" x2="15" y2="13"/><line x1="9" y1="17" x2="11" y2="17"/></svg>
          </div>
          <h4>Message Templates</h4>
          <p>Create easy pre-written answers with clickable customer buttons and approved interactive cards.</p>
        </div>

        <div class="cfb-tool-card">
          <div class="cfb-tool-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"/></svg>
          </div>
          <h4>Bulk Messaging</h4>
          <p>Send one message to multiple customer groups at the same time with full Meta policy compliance.</p>
        </div>

        <div class="cfb-tool-card">
          <div class="cfb-tool-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          </div>
          <h4>Word Auto-Replies</h4>
          <p>Instantly reply when customers type words like 'price' or 'help' in public comments or private messages.</p>
        </div>

        <div class="cfb-tool-card">
          <div class="cfb-tool-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
          </div>
          <h4>Delivery Reports</h4>
          <p>Check whether messages have been successfully sent, delivered, or read in real-time audits.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. START IN 4 EASY STEPS -->
  <section class="cfb-steps-section" id="how-it-works">
    <div class="cfb-container">
      <div class="cfb-section-header">
        <span class="cfb-badge-pill">Process &amp; Setup</span>
        <h2 class="cfb-section-title">Start in 4 Easy Steps</h2>
        <p class="cfb-section-subtitle">
          No complicated codes or technical steps. Just connect and go.
        </p>
      </div>

      <div class="cfb-steps-grid">
        <div class="cfb-step-card">
          <div class="cfb-step-number">01</div>
          <h4>Log In Securely</h4>
          <p>Log in with your Facebook account via our secure official Meta connection in one click.</p>
        </div>

        <div class="cfb-step-card">
          <div class="cfb-step-number">02</div>
          <h4>Select Pages &amp; Ads</h4>
          <p>Pick the Facebook pages and active ad campaigns you want to connect to InboxWa.</p>
        </div>

        <div class="cfb-step-card">
          <div class="cfb-step-number">03</div>
          <h4>Link Your Forms</h4>
          <p>Choose how to save info when customers fill out your Facebook instant ad forms.</p>
        </div>

        <div class="cfb-step-card">
          <div class="cfb-step-number">04</div>
          <h4>Automate &amp; Reply</h4>
          <p>Watch new customer leads get saved and answered automatically in under two seconds.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. ENTERPRISE CAPABILITIES & LEAD CRM -->
  <section class="cfb-capabilities-section">
    <div class="cfb-container">
      <div class="cfb-section-header">
        <span class="cfb-badge-pill">Enterprise Infrastructure</span>
        <h2 class="cfb-section-title">Enterprise Facebook Marketing &amp; Lead Automation</h2>
        <p class="cfb-section-subtitle">
          Bridge the gap between Facebook Lead Ads and real-time sales conversions.
        </p>
      </div>

      <div class="cfb-cap-grid">
        <div class="cfb-cap-card">
          <div class="cfb-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <h3>Lead Ads Instant Webhooks</h3>
          <p>Capture contact submissions the exact millisecond they hit your Facebook Instant Forms, bypassing manual CSV export delays completely.</p>
        </div>

        <div class="cfb-cap-card">
          <div class="cfb-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
          </div>
          <h3>Click-to-WhatsApp Ads Bridge</h3>
          <p>Route Facebook and Instagram ad traffic straight into high-converting WhatsApp conversations with automated keyword pre-fill triggers.</p>
        </div>

        <div class="cfb-cap-card">
          <div class="cfb-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          </div>
          <h3>Messenger Auto-Responder</h3>
          <p>Engage prospective buyers 24/7 with interactive chat flows, qualifying lead questions, automated product recommendations, and human handover.</p>
        </div>

        <div class="cfb-cap-card">
          <div class="cfb-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          </div>
          <h3>Post Comment Auto-Replies</h3>
          <p>Automatically like comments on page posts, reply publicly with social proof, and send private follow-ups directly to their inbox.</p>
        </div>

        <div class="cfb-cap-card">
          <div class="cfb-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <h3>CRM &amp; Webhook Data Sync</h3>
          <p>Instantly sync lead entries to HubSpot, Salesforce, Zoho, Google Sheets, or any custom ERP via real-time webhooks and REST APIs.</p>
        </div>

        <div class="cfb-cap-card">
          <div class="cfb-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Official Meta API Compliance</h3>
          <p>Built exclusively with Meta Graph API v20.0 standards ensuring zero account restrictions, guaranteed message delivery, and enterprise security.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. FREQUENTLY ASKED QUESTIONS -->
  <section class="cfb-faq-section">
    <div class="cfb-container">
      <div class="cfb-section-header">
        <span class="cfb-badge-pill">FAQ</span>
        <h2 class="cfb-section-title">Frequently Asked Questions</h2>
        <p class="cfb-section-subtitle">
          Everything you need to know about Facebook automation and lead syncing with InboxWa.
        </p>
      </div>

      <div class="cfb-faq-list">
        <div class="cfb-faq-item active">
          <button type="button" class="cfb-faq-trigger">
            <span>How does InboxWa connect to my Facebook Pages and Lead Ads?</span>
            <span class="cfb-faq-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </button>
          <div class="cfb-faq-content">
            InboxWa connects using official Meta OAuth. You simply log in with your Facebook account, grant page and ad management permissions, and select the pages you want to automate. No technical knowledge or server setup is required.
          </div>
        </div>

        <div class="cfb-faq-item">
          <button type="button" class="cfb-faq-trigger">
            <span>How quickly are Facebook Lead Ad submissions received?</span>
            <span class="cfb-faq-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </button>
          <div class="cfb-faq-content">
            Submissions are received in real-time via Meta webhooks—typically within 1 to 2 seconds of a user submitting the instant form. InboxWa immediately triggers your configured auto-reply or sends the lead to your CRM.
          </div>
        </div>

        <div class="cfb-faq-item">
          <button type="button" class="cfb-faq-trigger">
            <span>Can I auto-respond to comments on Facebook posts and reels?</span>
            <span class="cfb-faq-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </button>
          <div class="cfb-faq-content">
            Yes! InboxWa can automatically like comments, post a public reply to boost post engagement, and send a private Messenger message or WhatsApp follow-up containing brochures, pricing, or checkout links.
          </div>
        </div>

        <div class="cfb-faq-item">
          <button type="button" class="cfb-faq-trigger">
            <span>Is my Facebook account safe from bans or restrictions?</span>
            <span class="cfb-faq-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </button>
          <div class="cfb-faq-content">
            Absolutely. InboxWa operates exclusively via official Meta Graph API v20.0 endpoints. We never scrape, use unofficial browser extensions, or bypass platform rules, guaranteeing 100% compliance with Meta platform terms.
          </div>
        </div>

        <div class="cfb-faq-item">
          <button type="button" class="cfb-faq-trigger">
            <span>Can multiple team members manage Facebook conversations?</span>
            <span class="cfb-faq-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </button>
          <div class="cfb-faq-content">
            Yes. With our multi-agent shared inbox, multiple agents can respond to Facebook Messenger conversations simultaneously, assign chats, leave internal notes, and monitor response resolution metrics.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. SALES CTA BANNER -->
  <section class="cfb-sales-section">
    <div class="cfb-cta-banner">
      <h2 class="cfb-cta-title">Automate Your Facebook Ads &amp; Leads Today</h2>
      <p class="cfb-cta-subtitle">
        Link your pages, track active ad campaigns, save lead form answers, and reply to customers automatically.
      </p>
      <div class="cfb-cta-actions">
        <a href="<?php echo $bp; ?>auth/register" class="cfb-btn-white">
          Start Free Trial &rarr;
        </a>
        <button type="button" class="cfb-btn-secondary btn-demo-open" style="background:rgba(255,255,255,0.15);color:#ffffff;border-color:rgba(255,255,255,0.3);">
          Book Facebook Demo
        </button>
      </div>
      <div class="cfb-cta-trust">
        Free 14-day trial &bull; No credit card required &bull; 2-minute setup
      </div>
    </div>
  </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // FAQ accordion
  const faqItems = document.querySelectorAll('.cfb-faq-item');
  faqItems.forEach(item => {
    const trigger = item.querySelector('.cfb-faq-trigger');
    trigger.addEventListener('click', () => {
      const isActive = item.classList.contains('active');
      faqItems.forEach(i => i.classList.remove('active'));
      if (!isActive) item.classList.add('active');
    });
  });
});
</script>

<?php
include __DIR__ . '/../../../includes/offer-popup.php';
include __DIR__ . '/../../../includes/callback-popup.php';
include __DIR__ . '/../../../includes/footer.php';
?>
