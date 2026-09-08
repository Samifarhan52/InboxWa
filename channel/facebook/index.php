<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Facebook Messenger Automation & Lead Ads Sync | InboxWa';
$pageDescription = 'Connect Facebook Pages, capture leads from Instant Forms automatically, and automate Messenger chats with official Meta Business API.';
$canonicalUrl = 'https://inboxwa.com/channel/facebook/';
$ogImage = 'assets/images/og-image.png';

include __DIR__ . '/../../includes/header.php';
?>

<style>
  :root {
    --fb-blue: #2563eb;
    --fb-darkblue: #1d4ed8;
    --fb-gradient: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%);
    --fb-gradient-subtle: linear-gradient(135deg, rgba(37, 99, 235, 0.08) 0%, rgba(59, 130, 246, 0.08) 100%);
  }

  .cfb-page {
    background: #ffffff;
    color: #1e293b;
    font-family: inherit;
    overflow-x: hidden;
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
    margin: 0 auto;
  }
  .cfb-hero-grid {
    display: grid;
    grid-template-columns: 1.15fr 0.85fr;
    gap: 3.5rem;
    align-items: center;
  }
  .cfb-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(37, 99, 235, 0.1);
    border: 1px solid rgba(37, 99, 235, 0.25);
    color: #2563eb;
    font-size: 0.82rem;
    font-weight: 700;
    padding: 0.35rem 0.85rem;
    border-radius: 999px;
    margin-bottom: 1.25rem;
  }
  .cfb-hero-title {
    font-size: clamp(2.25rem, 4.5vw, 3.5rem);
    font-weight: 800;
    line-height: 1.15;
    color: #0f172a;
    letter-spacing: -0.02em;
    margin-bottom: 1.25rem;
  }
  .cfb-hero-title .highlight-blue {
    background: var(--fb-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .cfb-hero-desc {
    font-size: 1.15rem;
    line-height: 1.65;
    color: #475569;
    margin-bottom: 2rem;
    max-width: 540px;
  }
  .cfb-hero-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 2rem;
  }
  .cfb-btn-primary {
    background: var(--fb-gradient);
    color: #ffffff;
    font-weight: 700;
    font-size: 1rem;
    padding: 0.85rem 1.85rem;
    border-radius: 999px;
    text-decoration: none;
    box-shadow: 0 10px 25px -5px rgba(37, 99, 235, 0.4);
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    border: none;
  }
  .cfb-btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 30px -5px rgba(37, 99, 235, 0.55);
    color: #ffffff;
  }
  .cfb-btn-secondary {
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
  .cfb-btn-secondary:hover {
    background: #f8fafc;
    border-color: #94a3b8;
    color: #0f172a;
    transform: translateY(-2px);
  }
  .cfb-trust-row {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    flex-wrap: wrap;
    font-size: 0.85rem;
    font-weight: 600;
    color: #64748b;
  }
  .cfb-trust-item {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
  }

  /* Interactive Mockup Phone Stage */
  .cfb-phone-wrapper {
    position: relative;
    max-width: 380px;
    margin: 0 auto;
  }
  .cfb-phone-device {
    background: #000000;
    border-radius: 36px;
    padding: 12px;
    box-shadow: 0 25px 60px -15px rgba(37, 99, 235, 0.25), 0 0 0 1px rgba(255, 255, 255, 0.1);
    border: 3px solid #1e293b;
    position: relative;
    z-index: 2;
  }
  .cfb-phone-notch {
    width: 90px;
    height: 18px;
    background: #1e293b;
    border-radius: 0 0 12px 12px;
    margin: 0 auto 8px;
  }
  .cfb-phone-screen {
    background: #ffffff;
    border-radius: 26px;
    overflow: hidden;
    height: 480px;
    display: flex;
    flex-direction: column;
    color: #0f172a;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
  }
  .cfb-chat-header {
    background: #f1f5f9;
    padding: 12px 14px;
    display: flex;
    align-items: center;
    gap: 10px;
    border-bottom: 1px solid #e2e8f0;
  }
  .cfb-avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: var(--fb-gradient);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 14px;
    color: #fff;
    flex-shrink: 0;
  }
  .cfb-header-info {
    flex: 1;
    min-width: 0;
  }
  .cfb-header-name {
    font-size: 0.9rem;
    font-weight: 700;
    color: #0f172a;
  }
  .cfb-header-status {
    font-size: 0.72rem;
    color: #10b981;
    font-weight: 600;
  }
  .cfb-chat-messages {
    flex: 1;
    padding: 14px;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    gap: 10px;
    background: #f8fafc;
  }
  .cfb-msg {
    max-width: 84%;
    padding: 9px 13px;
    border-radius: 18px;
    font-size: 0.84rem;
    line-height: 1.4;
    position: relative;
    word-break: break-word;
  }
  .cfb-msg-in {
    background: #e2e8f0;
    color: #0f172a;
    align-self: flex-start;
    border-bottom-left-radius: 4px;
  }
  .cfb-msg-out {
    background: #2563eb;
    color: #ffffff;
    align-self: flex-end;
    border-bottom-right-radius: 4px;
  }
  .cfb-ad-badge {
    font-size: 0.7rem;
    color: #64748b;
    margin-bottom: 4px;
    display: flex;
    align-items: center;
    gap: 4px;
  }

  /* Features Grid Section */
  .cfb-features-section {
    padding: 5rem 1.5rem;
    background: #f8fafc;
  }
  .cfb-section-header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 3.5rem;
  }
  .cfb-section-title {
    font-size: clamp(2rem, 3.5vw, 2.75rem);
    font-weight: 800;
    color: #0f172a;
    letter-spacing: -0.02em;
    margin-bottom: 0.75rem;
  }
  .cfb-section-subtitle {
    font-size: 1.1rem;
    color: #64748b;
    line-height: 1.6;
  }
  .cfb-features-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    max-width: 1200px;
    margin: 0 auto;
  }
  .cfb-feature-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 28px;
    transition: all 0.25s ease;
    display: flex;
    flex-direction: column;
  }
  .cfb-feature-card:hover {
    transform: translateY(-4px);
    border-color: #cbd5e1;
    box-shadow: 0 16px 36px -8px rgba(37, 99, 235, 0.12);
  }
  .cfb-feature-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 18px;
  }
  .cfb-feature-icon {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    background: var(--fb-gradient-subtle);
    color: #2563eb;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .cfb-feature-badge {
    font-size: 0.68rem;
    font-weight: 700;
    padding: 3px 8px;
    border-radius: 999px;
    background: rgba(37, 99, 235, 0.1);
    color: #2563eb;
    text-transform: uppercase;
    letter-spacing: 0.04em;
  }
  .cfb-feature-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 8px;
  }
  .cfb-feature-desc {
    font-size: 0.92rem;
    color: #64748b;
    line-height: 1.6;
  }

  /* 4-Step Journey Section */
  .cfb-steps-section {
    padding: 5rem 1.5rem;
    background: #ffffff;
  }
  .cfb-steps-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    max-width: 1200px;
    margin: 0 auto;
  }
  .cfb-step-card {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 26px;
    position: relative;
    transition: all 0.25s ease;
  }
  .cfb-step-card:hover {
    border-color: #60a5fa;
    transform: translateY(-3px);
  }
  .cfb-step-num {
    font-size: 2.25rem;
    font-weight: 900;
    background: var(--fb-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    line-height: 1;
    margin-bottom: 12px;
  }
  .cfb-step-title {
    font-size: 1.15rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 8px;
  }
  .cfb-step-desc {
    font-size: 0.88rem;
    color: #64748b;
    line-height: 1.55;
  }

  /* Sales CTA Section */
  .cfb-sales-section {
    padding: 5rem 1.5rem;
    background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%);
    color: #ffffff;
    text-align: center;
  }
  .cfb-sales-inner {
    max-width: 800px;
    margin: 0 auto;
  }
  .cfb-sales-title {
    font-size: clamp(2.2rem, 4vw, 3rem);
    font-weight: 800;
    letter-spacing: -0.02em;
    margin-bottom: 1rem;
    line-height: 1.2;
  }
  .cfb-sales-desc {
    font-size: 1.15rem;
    color: #bfdbfe;
    line-height: 1.6;
    margin-bottom: 2.5rem;
  }
  .cfb-sales-actions {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 2rem;
  }
  .cfb-btn-white {
    background: #ffffff;
    color: #1e3a8a;
    font-weight: 700;
    font-size: 1rem;
    padding: 0.9rem 2.2rem;
    border-radius: 999px;
    text-decoration: none;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    transition: all 0.2s ease;
  }
  .cfb-btn-white:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
  }

  @media (max-width: 1024px) {
    .cfb-hero-grid { grid-template-columns: 1fr; gap: 3rem; }
    .cfb-features-grid { grid-template-columns: repeat(2, 1fr); }
    .cfb-steps-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 640px) {
    .cfb-features-grid { grid-template-columns: 1fr; }
    .cfb-steps-grid { grid-template-columns: 1fr; }
  }
</style>

<div class="cfb-page">
  <!-- Breadcrumb -->
  <nav class="cfb-breadcrumb" aria-label="Breadcrumb">
    <a href="<?php echo $bp; ?>">Home</a>
    <span>/</span>
    <span>Channels</span>
    <span>/</span>
    <span style="color:#2563eb;font-weight:600;">Facebook</span>
  </nav>

  <!-- 1. HERO SECTION -->
  <section class="cfb-hero-section">
    <div class="cfb-hero-grid">
      <div>
        <div class="cfb-badge-pill">
          <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          FACEBOOK &amp; META ADS INTEGRATION
        </div>
        <h1 class="cfb-hero-title">
          Facebook Messenger Automation &amp; <span class="highlight-blue">Lead Ads Sync</span>
        </h1>
        <p class="cfb-hero-desc">
          Connect your Facebook Pages, capture leads from Facebook Instant Forms automatically, and reply to Messenger chats with automated AI workflows.
        </p>
        <div class="cfb-hero-actions">
          <a href="<?php echo $bp; ?>auth/register" class="cfb-btn-primary">
            Connect Facebook Pages &rarr;
          </a>
          <button type="button" class="cfb-btn-secondary btn-demo-open">
            Book Messenger Demo
          </button>
        </div>
        <div class="cfb-trust-row">
          <span class="cfb-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Official Meta Partner
          </span>
          <span class="cfb-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Instant Lead Form Sync
          </span>
          <span class="cfb-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Multi-Page Support
          </span>
        </div>
      </div>

      <!-- Live Simulator -->
      <div class="cfb-phone-wrapper">
        <div class="cfb-phone-device">
          <div class="cfb-phone-notch"></div>
          <div class="cfb-phone-screen">
            <div class="cfb-chat-header">
              <div class="cfb-avatar">FB</div>
              <div class="cfb-header-info">
                <div class="cfb-header-name">Acme Solutions</div>
                <div class="cfb-header-status">● Verified Facebook Page</div>
              </div>
            </div>
            <div class="cfb-chat-messages">
              <div class="cfb-ad-badge">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58.55 0 1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41 0-.55-.23-1.06-.59-1.42zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z"/></svg>
                Lead arrived from Click-to-Messenger Ad #401
              </div>
              <div class="cfb-msg cfb-msg-in">
                Hi! I filled out your Facebook ad for commercial real estate consultation.
              </div>
              <div class="cfb-msg cfb-msg-out">
                Hello David! We received your inquiry for 3-Bedroom Executive Suites. Would you like a property brochure or a phone call with our advisor?
              </div>
              <div class="cfb-msg cfb-msg-in">
                Please send the brochure PDF and schedule a call for tomorrow 3 PM.
              </div>
              <div class="cfb-msg cfb-msg-out">
                Done! Brochure PDF sent. Appointment confirmed for tomorrow at 3:00 PM. Our senior advisor Alex will call you.
              </div>
            </div>
            <div style="padding:10px 12px;background:#f1f5f9;display:flex;align-items:center;gap:8px;border-top:1px solid #e2e8f0;">
              <div style="flex:1;background:#ffffff;border:1px solid #cbd5e1;border-radius:18px;padding:6px 12px;font-size:0.8rem;color:#94a3b8;">Type a message...</div>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 2. HOW IT WORKS / 4 EASY STEPS -->
  <section class="cfb-steps-section">
    <div class="cfb-section-header">
      <span class="cfb-badge-pill">How It Works</span>
      <h2 class="cfb-section-title">Start in 4 Easy Steps</h2>
      <p class="cfb-section-subtitle">Authorize page access to sync customer inbox communications and capture marketing leads in seconds.</p>
    </div>

    <div class="cfb-steps-grid">
      <div class="cfb-step-card">
        <div class="cfb-step-num">01</div>
        <h3 class="cfb-step-title">Log In Securely</h3>
        <p class="cfb-step-desc">Log in with your Facebook account via our secure official Meta OAuth connection.</p>
      </div>

      <div class="cfb-step-card">
        <div class="cfb-step-num">02</div>
        <h3 class="cfb-step-title">Select Pages &amp; Ads</h3>
        <p class="cfb-step-desc">Pick the Facebook business pages and active campaigns you want to connect to this workspace.</p>
      </div>

      <div class="cfb-step-card">
        <div class="cfb-step-num">03</div>
        <h3 class="cfb-step-title">Link Your Forms</h3>
        <p class="cfb-step-desc">Choose how to save info when customers fill out your Facebook ad lead generation forms.</p>
      </div>

      <div class="cfb-step-card">
        <div class="cfb-step-num">04</div>
        <h3 class="cfb-step-title">Automate &amp; Reply</h3>
        <p class="cfb-step-desc">Watch new customer leads get saved, synced to your CRM, and answered automatically.</p>
      </div>
    </div>
  </section>

  <!-- 3. CORE FEATURES -->
  <section class="cfb-features-section">
    <div class="cfb-section-header">
      <span class="cfb-badge-pill">Key Capabilities</span>
      <h2 class="cfb-section-title">Connect Facebook Marketing to Scalable Revenue</h2>
      <p class="cfb-section-subtitle">Manage pages, instant forms, and ad replies from a single high-performance dashboard.</p>
    </div>

    <div class="cfb-features-grid">
      <div class="cfb-feature-card">
        <div class="cfb-feature-top">
          <div class="cfb-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
          </div>
          <span class="cfb-feature-badge">Page Hub</span>
        </div>
        <h3 class="cfb-feature-title">Link Your Facebook Pages</h3>
        <p class="cfb-feature-desc">Connect and manage all your Facebook business pages in one clean dashboard. Choose which page sends automated messages to customers.</p>
      </div>

      <div class="cfb-feature-card">
        <div class="cfb-feature-top">
          <div class="cfb-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
          </div>
          <span class="cfb-feature-badge">Lead Sync</span>
        </div>
        <h3 class="cfb-feature-title">Save Customer Form Details</h3>
        <p class="cfb-feature-desc">Instantly save details when customers fill out forms on your Facebook ads. Save their info directly to your contact list and reply to them automatically.</p>
      </div>

      <div class="cfb-feature-card">
        <div class="cfb-feature-top">
          <div class="cfb-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
          </div>
          <span class="cfb-feature-badge">Analytics</span>
        </div>
        <h3 class="cfb-feature-title">View Simple Ad Reports</h3>
        <p class="cfb-feature-desc">Understand how your ads are doing. See simple counts of clicks, views, cost-per-lead, and how many people you have reached.</p>
      </div>

      <div class="cfb-feature-card">
        <div class="cfb-feature-top">
          <div class="cfb-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          </div>
          <span class="cfb-feature-badge">Omnichannel</span>
        </div>
        <h3 class="cfb-feature-title">Omnichannel Messenger Inbox</h3>
        <p class="cfb-feature-desc">Reply to Facebook post comments and Messenger direct chats directly from the shared team inbox interface.</p>
      </div>

      <div class="cfb-feature-card">
        <div class="cfb-feature-top">
          <div class="cfb-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </div>
          <span class="cfb-feature-badge">Meta Ads</span>
        </div>
        <h3 class="cfb-feature-title">Click-to-WhatsApp Ads</h3>
        <p class="cfb-feature-desc">Launch Facebook ad campaigns that redirect interested prospects directly into WhatsApp chats with pre-filled promo text.</p>
      </div>

      <div class="cfb-feature-card">
        <div class="cfb-feature-top">
          <div class="cfb-feature-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
          </div>
          <span class="cfb-feature-badge">AI Chatbot</span>
        </div>
        <h3 class="cfb-feature-title">24/7 Messenger AI Chatbot</h3>
        <p class="cfb-feature-desc">Automate answers to common prospect questions, qualify customer requirements, and collect contact info around the clock.</p>
      </div>
    </div>
  </section>

  <!-- 4. FINAL SALES CTA -->
  <section class="cfb-sales-section">
    <div class="cfb-sales-inner">
      <h2 class="cfb-sales-title">Scale Your Facebook Lead Generation</h2>
      <p class="cfb-sales-desc">Stop losing leads to slow follow-ups. Capture, qualify, and respond to Facebook ad inquiries in seconds.</p>
      <div class="cfb-sales-actions">
        <a href="<?php echo $bp; ?>auth/register" class="cfb-btn-white">
          Connect Pages Free &rarr;
        </a>
        <button type="button" class="cfb-btn-secondary btn-demo-open" style="background:transparent;color:#fff;border-color:rgba(255,255,255,0.4);">
          Schedule a Demo
        </button>
      </div>
      <div style="font-size:0.88rem;color:#bfdbfe;display:flex;justify-content:center;gap:1.5rem;flex-wrap:wrap;">
        <span>✓ Official Meta API</span>
        <span>✓ Instant form sync</span>
        <span>✓ Cancel anytime</span>
      </div>
    </div>
  </section>
</div>

<?php include __DIR__ . '/../../includes/footer.php'; ?>