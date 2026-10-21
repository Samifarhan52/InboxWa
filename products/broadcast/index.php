<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Send Bulk WhatsApp Broadcasts | Official Meta API | HelloBotz';
$pageDescription = 'Broadcast personalized offers, updates, and announcements in bulk to unlimited contacts on WhatsApp with zero ban risk using HelloBotz official Meta API platform.';
$canonicalUrl = 'https://hellobotz.com/products/broadcast/';
$ogImage = 'https://hellobotz.com/assets/images/og-image.png';
$ogTitle = 'Send Bulk WhatsApp Broadcasts | Official Meta API | HelloBotz';
$ogDescription = 'Broadcast personalized offers, updates, and announcements in bulk to unlimited contacts on WhatsApp with zero ban risk using HelloBotz.';

include __DIR__ . '/../../includes/header.php';
?>

<style>
  :root {
    --hb-primary: #7C3AED;
    --hb-primary-hover: #6D28D9;
    --hb-wa: #25D366;
    --hb-wa-dark: #128C7E;
    --hb-dark: #0F172A;
    --hb-slate: #1E293B;
    --hb-muted: #64748B;
    --hb-border: #E2E8F0;
    --hb-bg-alt: #F8FAFC;
  }

  .hb-page-wrap {
    width: 100%;
    overflow-x: hidden;
    background: #ffffff;
    color: var(--hb-slate);
    font-family: inherit;
  }

  .hb-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1.25rem;
    box-sizing: border-box;
  }

  /* Hero Section */
  .hb-hero-sec {
    padding: 3.5rem 0 4rem;
    background: radial-gradient(1000px 500px at 50% -80px, rgba(124, 58, 237, 0.08), transparent 70%), #ffffff;
    border-bottom: 1px solid var(--hb-border);
  }

  .hb-hero-grid {
    display: grid;
    grid-template-columns: 1.15fr 0.95fr;
    gap: 3.5rem;
    align-items: center;
  }

  .hb-badge-partner {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 14px;
    background: #F1F5F9;
    border: 1px solid #CBD5E1;
    border-radius: 9999px;
    font-size: 12.5px;
    font-weight: 700;
    color: #334155;
    margin-bottom: 1.25rem;
  }

  .hb-badge-partner svg {
    color: #0081FB;
  }

  .hb-hero-title {
    font-size: clamp(2.1rem, 3.8vw, 3.1rem);
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: -0.025em;
    color: var(--hb-dark);
    margin-bottom: 1.2rem;
  }

  .hb-hero-title span {
    background: linear-gradient(135deg, #7C3AED 0%, #25D366 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .hb-hero-sub {
    font-size: 1.12rem;
    line-height: 1.65;
    color: var(--hb-muted);
    margin-bottom: 2rem;
    max-width: 580px;
  }

  .hb-hero-ctas {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    align-items: center;
    margin-bottom: 2rem;
  }

  .hb-btn-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 48%, #6366F1 100%);
    color: #ffffff !important;
    font-size: 15px;
    font-weight: 700;
    padding: 12px 26px;
    border-radius: 9999px;
    text-decoration: none;
    border: 1px solid rgba(255, 255, 255, 0.4);
    box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.65), 0 6px 18px rgba(124, 58, 237, 0.35);
    transition: all 0.25s ease;
  }

  .hb-btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 24px rgba(124, 58, 237, 0.45);
  }

  .hb-btn-outline {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: #ffffff;
    color: var(--hb-dark);
    font-size: 15px;
    font-weight: 600;
    padding: 12px 24px;
    border-radius: 9999px;
    text-decoration: none;
    border: 1.5px solid var(--hb-border);
    transition: all 0.2s ease;
    cursor: pointer;
  }

  .hb-btn-outline:hover {
    border-color: var(--hb-primary);
    color: var(--hb-primary);
    background: #F5F3FF;
  }

  .hb-trust-row {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    font-size: 13px;
    color: var(--hb-muted);
    font-weight: 500;
  }

  .hb-trust-item {
    display: inline-flex;
    align-items: center;
    gap: 6px;
  }

  .hb-trust-item svg {
    color: var(--hb-wa);
  }

  /* Transparent UI Hero Visual */
  .hb-hero-visual {
    position: relative;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .hb-device-canvas {
    width: 100%;
    max-width: 440px;
    background: #ffffff;
    border-radius: 28px;
    border: 1px solid rgba(124, 58, 237, 0.18);
    box-shadow: 0 20px 45px -10px rgba(15, 23, 42, 0.12), 0 0 0 1px rgba(124, 58, 237, 0.08);
    overflow: hidden;
  }

  .hb-device-header {
    background: linear-gradient(135deg, #075E54 0%, #128C7E 100%);
    padding: 14px 18px;
    color: #ffffff;
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .hb-device-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #128C7E;
    font-weight: 800;
    font-size: 15px;
  }

  .hb-device-info h4 {
    margin: 0;
    font-size: 15px;
    font-weight: 700;
    color: #ffffff;
    display: flex;
    align-items: center;
    gap: 5px;
  }

  .hb-device-info span {
    font-size: 12px;
    opacity: 0.88;
  }

  .hb-chat-body {
    padding: 20px 16px;
    background: #EFEAE2 url('/assets/images/whatsapp-doodle-bg.png') repeat;
    background-size: 320px;
    min-height: 380px;
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  .hb-chat-bubble {
    background: #ffffff;
    border-radius: 12px;
    border-top-left-radius: 3px;
    padding: 12px 14px;
    max-width: 88%;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12);
    font-size: 13.5px;
    line-height: 1.5;
    color: #111827;
  }

  .hb-bubble-img {
    width: 100%;
    border-radius: 8px;
    margin-bottom: 8px;
    aspect-ratio: 16/9;
    background: linear-gradient(135deg, #7C3AED 0%, #6366F1 50%, #06B6D4 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 0.02em;
  }

  .hb-bubble-btns {
    display: flex;
    flex-direction: column;
    gap: 6px;
    margin-top: 10px;
    border-top: 1px solid #E2E8F0;
    padding-top: 8px;
  }

  .hb-bubble-btn {
    background: #F8FAFC;
    border: 1px solid #CBD5E1;
    border-radius: 6px;
    padding: 7px 12px;
    font-size: 12.5px;
    font-weight: 600;
    color: #0284C7;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
  }

  .hb-meta-footer {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 4px;
    font-size: 11px;
    color: #64748B;
    margin-top: 4px;
  }

  /* Stats Section */
  .hb-stats-sec {
    padding: 3rem 0;
    background: #F8FAFC;
    border-bottom: 1px solid var(--hb-border);
  }

  .hb-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    text-align: center;
  }

  .hb-stat-card {
    background: #ffffff;
    padding: 24px 18px;
    border-radius: 16px;
    border: 1px solid var(--hb-border);
    box-shadow: 0 4px 14px rgba(0,0,0,0.03);
  }

  .hb-stat-val {
    font-size: 2.2rem;
    font-weight: 800;
    color: var(--hb-dark);
    margin-bottom: 4px;
  }

  .hb-stat-val span {
    color: var(--hb-primary);
  }

  .hb-stat-label {
    font-size: 13.5px;
    color: var(--hb-muted);
    font-weight: 600;
  }

  /* Features Grid */
  .hb-feat-sec {
    padding: 4.5rem 0;
  }

  .hb-sec-head {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 3.5rem;
  }

  .hb-sec-badge {
    display: inline-block;
    padding: 4px 14px;
    background: #EDE9FE;
    color: var(--hb-primary);
    border-radius: 9999px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 12px;
  }

  .hb-sec-title {
    font-size: clamp(1.8rem, 3vw, 2.4rem);
    font-weight: 800;
    color: var(--hb-dark);
    line-height: 1.25;
    margin-bottom: 14px;
  }

  .hb-sec-sub {
    font-size: 1.05rem;
    color: var(--hb-muted);
    line-height: 1.6;
  }

  .hb-features-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
  }

  .hb-feat-card {
    background: #ffffff;
    border-radius: 18px;
    padding: 30px 24px;
    border: 1px solid var(--hb-border);
    box-shadow: 0 4px 20px rgba(0,0,0,0.03);
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
  }

  .hb-feat-card:hover {
    transform: translateY(-4px);
    border-color: rgba(124, 58, 237, 0.3);
    box-shadow: 0 16px 36px rgba(124, 58, 237, 0.09);
  }

  .hb-feat-icon-box {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    background: linear-gradient(135deg, #EDE9FE 0%, #F5F3FF 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--hb-primary);
    margin-bottom: 20px;
  }

  .hb-feat-card h3 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--hb-dark);
    margin-bottom: 10px;
  }

  .hb-feat-card p {
    font-size: 14.5px;
    color: var(--hb-muted);
    line-height: 1.6;
    margin: 0;
  }

  /* Workflow Steps */
  .hb-steps-sec {
    padding: 4.5rem 0;
    background: #F8FAFC;
    border-top: 1px solid var(--hb-border);
    border-bottom: 1px solid var(--hb-border);
  }

  .hb-steps-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
    position: relative;
  }

  .hb-step-box {
    background: #ffffff;
    border-radius: 18px;
    padding: 32px 26px;
    border: 1px solid var(--hb-border);
    position: relative;
  }

  .hb-step-num {
    position: absolute;
    top: -16px;
    left: 24px;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: var(--hb-primary);
    color: #ffffff;
    font-weight: 800;
    font-size: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(124, 58, 237, 0.35);
  }

  .hb-step-box h3 {
    font-size: 1.15rem;
    font-weight: 700;
    color: var(--hb-dark);
    margin: 12px 0 10px;
  }

  .hb-step-box p {
    font-size: 14px;
    color: var(--hb-muted);
    line-height: 1.6;
    margin: 0;
  }

  /* FAQ Accordion */
  .hb-faq-sec {
    padding: 4.5rem 0;
  }

  .hb-faq-list {
    max-width: 820px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 14px;
  }

  .hb-faq-item {
    background: #ffffff;
    border-radius: 14px;
    border: 1px solid var(--hb-border);
    overflow: hidden;
    transition: border-color 0.2s ease;
  }

  .hb-faq-item:hover {
    border-color: #CBD5E1;
  }

  .hb-faq-btn {
    width: 100%;
    text-align: left;
    background: transparent;
    border: none;
    padding: 20px 24px;
    font-size: 16px;
    font-weight: 700;
    color: var(--hb-dark);
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
    gap: 16px;
  }

  .hb-faq-btn svg {
    transition: transform 0.25s ease;
    color: var(--hb-muted);
    flex-shrink: 0;
  }

  .hb-faq-btn[aria-expanded="true"] svg {
    transform: rotate(180deg);
    color: var(--hb-primary);
  }

  .hb-faq-ans {
    display: none;
    padding: 0 24px 22px;
    font-size: 14.5px;
    color: var(--hb-muted);
    line-height: 1.65;
  }

  .hb-faq-btn[aria-expanded="true"] + .hb-faq-ans {
    display: block;
  }

  /* CTA Banner */
  .hb-cta-sec {
    padding: 4.5rem 0;
    background: linear-gradient(135deg, #0F172A 0%, #1E1B4B 100%);
    color: #ffffff;
    text-align: center;
  }

  .hb-cta-box {
    max-width: 760px;
    margin: 0 auto;
  }

  .hb-cta-box h2 {
    font-size: clamp(2rem, 3.5vw, 2.75rem);
    font-weight: 800;
    margin-bottom: 16px;
    color: #ffffff;
  }

  .hb-cta-box p {
    font-size: 1.1rem;
    color: #CBD5E1;
    margin-bottom: 2rem;
    line-height: 1.6;
  }

  @media (max-width: 991px) {
    .hb-hero-grid { grid-template-columns: 1fr; gap: 2.5rem; text-align: center; }
    .hb-hero-sub { margin-left: auto; margin-right: auto; }
    .hb-hero-ctas { justify-content: center; }
    .hb-trust-row { justify-content: center; flex-wrap: wrap; }
    .hb-stats-grid { grid-template-columns: repeat(2, 1fr); }
    .hb-features-grid { grid-template-columns: repeat(2, 1fr); }
    .hb-steps-grid { grid-template-columns: 1fr; }
  }

  @media (max-width: 640px) {
    .hb-stats-grid { grid-template-columns: 1fr; }
    .hb-features-grid { grid-template-columns: 1fr; }
  }
</style>

<div class="hb-page-wrap">

  <!-- Breadcrumbs -->
  <div style="background:#ffffff; border-bottom:1px solid #f1f5f9; padding: 12px 0; font-size: 13px;">
    <div class="hb-container">
      <nav aria-label="Breadcrumb">
        <ol style="list-style:none; display:flex; gap:8px; margin:0; padding:0; color:#64748B;">
          <li><a href="<?php echo $bp; ?>" style="color:#64748B; text-decoration:none;">Home</a> &rsaquo;</li>
          <li><a href="<?php echo $bp; ?>products/" style="color:#64748B; text-decoration:none;">Products</a> &rsaquo;</li>
          <li style="color:#0F172A; font-weight:600;">WhatsApp Broadcast</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hb-hero-sec">
    <div class="hb-container">
      <div class="hb-hero-grid">
        <div>
          <div class="hb-badge-partner">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10z"/></svg>
            Official Meta Cloud API Partner
          </div>

          <h1 class="hb-hero-title">
            Send Bulk WhatsApp Broadcasts with <span>Zero Ban Risk</span>
          </h1>

          <p class="hb-hero-sub">
            Broadcast personalized offers, automated updates, and high-converting announcements to thousands of opted-in customers simultaneously using HelloBotz's official Meta Cloud API infrastructure.
          </p>

          <div class="hb-hero-ctas">
            <a href="https://app.hellobotz.com/auth/register" class="hb-btn-primary">
              Start Free Trial &rarr;
            </a>
            <button type="button" class="hb-btn-outline btn-demo-open">
              Book Live Demo
            </button>
          </div>

          <div class="hb-trust-row">
            <div class="hb-trust-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              98% Open Rate
            </div>
            <div class="hb-trust-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Official Meta Cloud API
            </div>
            <div class="hb-trust-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Zero Platform Markup
            </div>
          </div>
        </div>

        <!-- Transparent UI Mockup -->
        <div class="hb-hero-visual">
          <div class="hb-device-canvas">
            <div class="hb-device-header">
              <div class="hb-device-avatar">HB</div>
              <div class="hb-device-info">
                <h4>HelloBotz Store <svg width="14" height="14" viewBox="0 0 24 24" fill="#25D366"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4" stroke="#ffffff" stroke-width="2.5" fill="none"/></svg></h4>
                <span>Official Business Account</span>
              </div>
            </div>

            <div class="hb-chat-body">
              <div class="hb-chat-bubble">
                <div class="hb-bubble-img">
                  Exclusive VIP Access &bull; 25% OFF
                </div>
                <strong>Hi {{1}},</strong>
                <p style="margin: 6px 0 0;">Your exclusive weekend offer is now active! Use code <strong>SAVE25</strong> at checkout to unlock your reward.</p>
                <div class="hb-bubble-btns">
                  <div class="hb-bubble-btn">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/></svg>
                    Claim 25% Discount
                  </div>
                  <div class="hb-bubble-btn">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
                    Chat with Advisor
                  </div>
                </div>
                <div class="hb-meta-footer">
                  <span>10:42 AM</span>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#38BDF8" stroke-width="2.5"><polyline points="18 6 9 17 4 12"/><polyline points="22 6 13 17 8 12"/></svg>
                </div>
              </div>

              <!-- Live broadcast delivery badge -->
              <div style="background:rgba(255,255,255,0.95); padding:10px 14px; border-radius:12px; border:1px solid #E2E8F0; font-size:12px; display:flex; justify-content:space-between; align-items:center; box-shadow:0 4px 12px rgba(0,0,0,0.06);">
                <span style="font-weight:700; color:#0F172A;">Broadcast Campaign Status:</span>
                <span style="color:#059669; font-weight:700; background:#ECFDF5; padding:3px 8px; border-radius:6px;">98.4% Delivered</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Metrics Stats -->
  <section class="hb-stats-sec">
    <div class="hb-container">
      <div class="hb-stats-grid">
        <div class="hb-stat-card">
          <div class="hb-stat-val">98<span>%</span></div>
          <div class="hb-stat-label">Average Message Open Rate</div>
        </div>
        <div class="hb-stat-card">
          <div class="hb-stat-val">3.2<span>x</span></div>
          <div class="hb-stat-label">Higher ROI Than Email &amp; SMS</div>
        </div>
        <div class="hb-stat-card">
          <div class="hb-stat-val">100<span>%</span></div>
          <div class="hb-stat-label">Ban-Proof Official Cloud API</div>
        </div>
        <div class="hb-stat-card">
          <div class="hb-stat-val">0<span>%</span></div>
          <div class="hb-stat-label">Markup on Meta Conversation Fees</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Grid -->
  <section class="hb-feat-sec">
    <div class="hb-container">
      <div class="hb-sec-head">
        <div class="hb-sec-badge">Built For Growth</div>
        <h2 class="hb-sec-title">Enterprise Features for Maximum Broadcast Deliverability</h2>
        <p class="hb-sec-sub">Everything your sales, marketing, and retention teams need to execute high-volume WhatsApp campaigns reliably.</p>
      </div>

      <div class="hb-features-grid">
        <div class="hb-feat-card">
          <div class="hb-feat-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>Unlimited Audience Scaling</h3>
          <p>Scale from hundreds to hundreds of thousands of contacts seamlessly. High-throughput Cloud API infrastructure ensures messages arrive instantaneously.</p>
        </div>

        <div class="hb-feat-card">
          <div class="hb-feat-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
          </div>
          <h3>Meta Template Management</h3>
          <p>Create, submit, and manage Meta-approved message templates directly inside HelloBotz. Get real-time status updates and instant template sync.</p>
        </div>

        <div class="hb-feat-card">
          <div class="hb-feat-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/><path d="M16 11l2 2 4-4"/></svg>
          </div>
          <h3>Dynamic 1-to-1 Personalization</h3>
          <p>Incorporate customer names, order details, tracking links, and custom variables into each broadcast to increase response rates by over 40%.</p>
        </div>

        <div class="hb-feat-card">
          <div class="hb-feat-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          </div>
          <h3>Smart Campaign Scheduling</h3>
          <p>Queue announcements to fire at optimal conversion windows. Target audiences by specific time zones so messages arrive at the right time.</p>
        </div>

        <div class="hb-feat-card">
          <div class="hb-feat-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <h3>Interactive CTA &amp; Quick Replies</h3>
          <p>Equip messages with clickable action buttons, catalog deep links, phone number dials, or instant survey replies to eliminate friction.</p>
        </div>

        <div class="hb-feat-card">
          <div class="hb-feat-icon-box">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
          </div>
          <h3>Real-Time Delivery Analytics</h3>
          <p>Monitor sent, delivered, read, and response metrics in real time. Download comprehensive CSV audit logs and optimize audience engagement.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section class="hb-steps-sec">
    <div class="hb-container">
      <div class="hb-sec-head">
        <div class="hb-sec-badge">Simple 3-Step Setup</div>
        <h2 class="hb-sec-title">How to Launch Your First WhatsApp Broadcast</h2>
        <p class="hb-sec-sub">Go live in less than 10 minutes with our guided onboarding.</p>
      </div>

      <div class="hb-steps-grid">
        <div class="hb-step-box">
          <div class="hb-step-num">1</div>
          <h3>Connect WhatsApp Number</h3>
          <p>Link your official phone number via Meta Embedded Signup with zero technical setup or phone downtime.</p>
        </div>

        <div class="hb-step-box">
          <div class="hb-step-num">2</div>
          <h3>Upload Contacts &amp; Template</h3>
          <p>Import contacts via CSV or CRM sync (Shopify, Zoho, WooCommerce) and select your pre-approved message template.</p>
        </div>

        <div class="hb-step-box">
          <div class="hb-step-num">3</div>
          <h3>Schedule &amp; Track Live</h3>
          <p>Hit send or set a schedule. Watch real-time delivery and read rates in your HelloBotz live dashboard.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="hb-faq-sec">
    <div class="hb-container">
      <div class="hb-sec-head">
        <div class="hb-sec-badge">Got Questions?</div>
        <h2 class="hb-sec-title">Frequently Asked Questions</h2>
        <p class="hb-sec-sub">Everything you need to know about bulk WhatsApp broadcasting on HelloBotz.</p>
      </div>

      <div class="hb-faq-list">
        <div class="hb-faq-item">
          <button class="hb-faq-btn" aria-expanded="false" onclick="toggleFaq(this)">
            <span>Will my WhatsApp number get banned for sending bulk broadcasts?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="hb-faq-ans">
            No. HelloBotz uses the official Meta WhatsApp Business Cloud API. Unlike unauthorized automation extensions or modded APKs, sending broadcasts via the official API is 100% compliant with Meta terms of service and carries zero risk of automated bans.
          </div>
        </div>

        <div class="hb-faq-item">
          <button class="hb-faq-btn" aria-expanded="false" onclick="toggleFaq(this)">
            <span>Do customers need to save my phone number to receive broadcasts?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="hb-faq-ans">
            No! Unlike standard WhatsApp personal or business apps which require reciprocal address book saves, the official WhatsApp Business API delivers messages directly to any customer with an active WhatsApp account, even if they have not saved your number.
          </div>
        </div>

        <div class="hb-faq-item">
          <button class="hb-faq-btn" aria-expanded="false" onclick="toggleFaq(this)">
            <span>How many messages can I send per day?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="hb-faq-ans">
            Meta operates on a tiered messaging system: Tier 1 (1,000 unique recipients/day), Tier 2 (10,000/day), Tier 3 (100,000/day), and Tier 4 (Unlimited). As you send quality broadcasts with positive engagement, your tier automatically upgrades.
          </div>
        </div>

        <div class="hb-faq-item">
          <button class="hb-faq-btn" aria-expanded="false" onclick="toggleFaq(this)">
            <span>Can I personalize messages with custom fields like customer names?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="hb-faq-ans">
            Yes. HelloBotz allows dynamic variable insertion (e.g. {{name}}, {{order_id}}, {{coupon_code}}) pulled directly from your CSV upload or connected CRM like Shopify, WooCommerce, or Zoho.
          </div>
        </div>

        <div class="hb-faq-item">
          <button class="hb-faq-btn" aria-expanded="false" onclick="toggleFaq(this)">
            <span>Does HelloBotz charge markup fees on Meta conversations?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="hb-faq-ans">
            No. HelloBotz offers transparent pricing with 0% markup on Meta's official conversation charges. You pay Meta's official regional rates directly with complete transparency.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Banner -->
  <section class="hb-cta-sec">
    <div class="hb-container">
      <div class="hb-cta-box">
        <h2>Start Broadcasting on WhatsApp in Minutes</h2>
        <p>Join thousands of growing businesses using HelloBotz to engage customers, drive sales, and scale automated campaigns on WhatsApp.</p>
        <div style="display:flex; justify-content:center; gap:12px; flex-wrap:wrap;">
          <a href="https://app.hellobotz.com/auth/register" class="hb-btn-primary" style="font-size:16px; padding:14px 32px;">
            Start Free 14-Day Trial &rarr;
          </a>
          <button type="button" class="hb-btn-outline btn-demo-open" style="background:rgba(255,255,255,0.12); color:#ffffff; border-color:rgba(255,255,255,0.3);">
            Schedule a Demo
          </button>
        </div>
      </div>
    </div>
  </section>

</div>

<script>
  function toggleFaq(btn) {
    var expanded = btn.getAttribute('aria-expanded') === 'true';
    btn.setAttribute('aria-expanded', !expanded);
  }
</script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
