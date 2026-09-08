<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'WhatsApp Business API & Automation Platform | InboxWa';
$pageDescription = 'Scale your sales and customer support with Official Meta WhatsApp Business API. Multi-agent shared inbox, automated AI reply builder, bulk broadcasts, and zero-ban compliance.';
$canonicalUrl = 'https://inboxwa.com/channel/whatsapp/';
$ogImage = 'assets/images/og-image.png';

include __DIR__ . '/../../includes/header.php';
?>

<style>
  /* Channel WhatsApp Page Styles */
  :root {
    --wa-green: #059669;
    --wa-green-hover: #047857;
    --wa-green-light: rgba(5, 150, 105, 0.1);
    --wa-dark: #0f172a;
    --wa-slate: #1e293b;
  }

  .cw-page {
    background: #ffffff;
    color: #1e293b;
    font-family: inherit;
    overflow-x: hidden;
  }

  /* Breadcrumb */
  .cw-breadcrumb {
    padding: calc(var(--nav, 72px) + 1.25rem) 1.5rem 0.5rem;
    max-width: 1200px;
    margin: 0 auto;
    font-size: 0.85rem;
    color: #64748b;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }
  .cw-breadcrumb a {
    color: #64748b;
    text-decoration: none;
    transition: color 0.15s;
  }
  .cw-breadcrumb a:hover {
    color: var(--wa-green);
  }

  /* Hero Section */
  .cw-hero-section {
    padding: 2.5rem 1.5rem 4.5rem;
    max-width: 1200px;
    margin: 0 auto;
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
    font-size: 0.82rem;
    font-weight: 700;
    padding: 0.35rem 0.85rem;
    border-radius: 999px;
    margin-bottom: 1.25rem;
  }
  .cw-hero-title {
    font-size: clamp(2.25rem, 4.5vw, 3.5rem);
    font-weight: 800;
    line-height: 1.15;
    color: #0f172a;
    letter-spacing: -0.02em;
    margin-bottom: 1.25rem;
  }
  .cw-hero-title .highlight-green {
    color: #059669;
    background: linear-gradient(135deg, #059669 0%, #10b981 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .cw-hero-desc {
    font-size: 1.15rem;
    line-height: 1.65;
    color: #475569;
    margin-bottom: 2rem;
    max-width: 540px;
  }
  .cw-hero-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 2rem;
  }
  .cw-btn-primary {
    background: #059669;
    color: #ffffff;
    font-weight: 700;
    font-size: 1rem;
    padding: 0.85rem 1.85rem;
    border-radius: 999px;
    text-decoration: none;
    box-shadow: 0 10px 25px -5px rgba(5, 150, 105, 0.4);
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
  }
  .cw-btn-primary:hover {
    background: #047857;
    transform: translateY(-2px);
    box-shadow: 0 15px 30px -5px rgba(5, 150, 105, 0.5);
    color: #ffffff;
  }
  .cw-btn-secondary {
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
  .cw-btn-secondary:hover {
    background: #f8fafc;
    border-color: #94a3b8;
    color: #0f172a;
    transform: translateY(-2px);
  }
  .cw-trust-row {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    flex-wrap: wrap;
    font-size: 0.85rem;
    font-weight: 600;
    color: #64748b;
  }
  .cw-trust-item {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
  }

  /* Interactive Mockup Phone Stage */
  .cw-phone-wrapper {
    position: relative;
    max-width: 380px;
    margin: 0 auto;
  }
  .cw-phone-device {
    background: #0b141a;
    border-radius: 36px;
    padding: 12px;
    box-shadow: 0 25px 60px -15px rgba(15, 23, 42, 0.35), 0 0 0 1px rgba(255, 255, 255, 0.1);
    border: 3px solid #1e293b;
    position: relative;
    z-index: 2;
  }
  .cw-phone-notch {
    width: 90px;
    height: 18px;
    background: #1e293b;
    border-radius: 0 0 12px 12px;
    margin: 0 auto 8px;
  }
  .cw-phone-screen {
    background: #0b141a;
    border-radius: 26px;
    height: 440px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
  }
  .cw-wa-header {
    background: #1f2c34;
    padding: 10px 14px;
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .cw-wa-avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: linear-gradient(135deg, #059669, #10b981);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    font-weight: 800;
    font-size: 0.85rem;
  }
  .cw-wa-header-info strong {
    display: block;
    color: #e9edef;
    font-size: 0.85rem;
    font-weight: 700;
  }
  .cw-wa-header-info span {
    color: #8696a0;
    font-size: 0.72rem;
    display: flex;
    align-items: center;
    gap: 4px;
  }
  .cw-wa-body {
    flex: 1;
    padding: 12px;
    display: flex;
    flex-direction: column;
    gap: 8px;
    justify-content: flex-end;
    background-image: radial-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px);
    background-size: 16px 16px;
  }
  .cw-bubble {
    max-width: 88%;
    padding: 8px 12px;
    border-radius: 12px;
    font-size: 0.8rem;
    line-height: 1.45;
  }
  .cw-bubble.user {
    align-self: flex-end;
    background: #005c4b;
    color: #e9edef;
    border-bottom-right-radius: 2px;
  }
  .cw-bubble.bot {
    align-self: flex-start;
    background: #1f2c34;
    color: #e9edef;
    border-bottom-left-radius: 2px;
  }
  .cw-bubble .time {
    display: block;
    text-align: right;
    font-size: 0.65rem;
    color: #8696a0;
    margin-top: 3px;
  }
  .cw-floating-card {
    position: absolute;
    z-index: 3;
    background: #ffffff;
    padding: 10px 14px;
    border-radius: 14px;
    box-shadow: 0 14px 30px rgba(15, 23, 42, 0.15);
    border: 1px solid #e2e8f0;
    display: flex;
    align-items: center;
    gap: 10px;
    animation: cwFloat 4s ease-in-out infinite alternate;
  }
  .cw-fc-1 { top: 12%; left: -24px; }
  .cw-fc-2 { bottom: 18%; right: -24px; animation-delay: -2s; }
  @keyframes cwFloat {
    from { transform: translateY(0); }
    to { transform: translateY(-8px); }
  }

  /* Comparison Section */
  .cw-comparison-section {
    background: #f8fafc;
    padding: 5rem 1.5rem;
    border-top: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
  }
  .cw-section-header {
    text-align: center;
    max-width: 760px;
    margin: 0 auto 3.5rem;
  }
  .cw-section-title {
    font-size: clamp(1.85rem, 3.5vw, 2.75rem);
    font-weight: 800;
    color: #0f172a;
    line-height: 1.2;
    margin: 0.75rem 0 1rem;
    letter-spacing: -0.01em;
  }
  .cw-section-subtitle {
    font-size: 1.1rem;
    color: #64748b;
    line-height: 1.6;
  }

  .cw-table-container {
    max-width: 1050px;
    margin: 0 auto;
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
    overflow: hidden;
  }
  .cw-comp-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
  }
  .cw-comp-table th {
    padding: 18px 24px;
    font-size: 0.85rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    background: #f1f5f9;
    border-bottom: 2px solid #e2e8f0;
  }
  .cw-comp-table th.col-api {
    background: rgba(5, 150, 105, 0.1);
    color: #059669;
  }
  .cw-comp-table td {
    padding: 20px 24px;
    border-bottom: 1px solid #e2e8f0;
    font-size: 0.95rem;
    vertical-align: middle;
  }
  .cw-comp-table tr:last-child td {
    border-bottom: none;
  }
  .cw-comp-feature {
    font-weight: 700;
    color: #0f172a;
  }
  .cw-comp-standard {
    color: #64748b;
  }
  .cw-comp-api {
    color: #059669;
    font-weight: 700;
    background: rgba(5, 150, 105, 0.03);
  }

  /* Interactive 9-Feature Showcase */
  .cw-showcase-section {
    padding: 5.5rem 1.5rem;
    max-width: 1200px;
    margin: 0 auto;
  }
  .cw-showcase-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 24px;
    margin-top: 3rem;
  }
  .cw-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 18px;
    padding: 26px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    display: flex;
    flex-direction: column;
  }
  .cw-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 36px -8px rgba(15, 23, 42, 0.1);
    border-color: rgba(5, 150, 105, 0.3);
  }
  .cw-card-icon {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    background: rgba(5, 150, 105, 0.1);
    color: #059669;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 18px;
  }
  .cw-card-title {
    font-size: 1.25rem;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
  }
  .cw-card-desc {
    font-size: 0.92rem;
    color: #475569;
    line-height: 1.6;
    margin-bottom: 20px;
    flex-grow: 1;
  }
  .cw-card-bullets {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 8px;
    border-top: 1px solid #f1f5f9;
    padding-top: 16px;
  }
  .cw-card-bullets li {
    font-size: 0.85rem;
    font-weight: 600;
    color: #334155;
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .cw-card-bullets li svg {
    color: #059669;
    flex-shrink: 0;
  }

  /* Steps Section */
  .cw-steps-section {
    background: #0f172a;
    color: #ffffff;
    padding: 5.5rem 1.5rem;
  }
  .cw-steps-header {
    text-align: center;
    max-width: 760px;
    margin: 0 auto 4rem;
  }
  .cw-steps-header .cw-section-title {
    color: #ffffff;
  }
  .cw-steps-header .cw-section-subtitle {
    color: #94a3b8;
  }
  .cw-steps-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 24px;
    max-width: 1200px;
    margin: 0 auto;
  }
  .cw-step-card {
    background: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 18px;
    padding: 28px 24px;
    position: relative;
    transition: transform 0.2s ease;
  }
  .cw-step-card:hover {
    transform: translateY(-4px);
    border-color: rgba(5, 150, 105, 0.4);
  }
  .cw-step-num {
    font-size: 2.5rem;
    font-weight: 900;
    color: rgba(5, 150, 105, 0.4);
    line-height: 1;
    margin-bottom: 14px;
  }
  .cw-step-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 10px;
  }
  .cw-step-desc {
    font-size: 0.88rem;
    color: #94a3b8;
    line-height: 1.6;
    margin: 0;
  }

  /* Sales CTA Section */
  .cw-sales-section {
    background: linear-gradient(135deg, #059669 0%, #047857 100%);
    color: #ffffff;
    padding: 5.5rem 1.5rem;
    text-align: center;
  }
  .cw-sales-inner {
    max-width: 820px;
    margin: 0 auto;
  }
  .cw-sales-title {
    font-size: clamp(2rem, 4vw, 3.25rem);
    font-weight: 900;
    line-height: 1.2;
    margin-bottom: 1.25rem;
    letter-spacing: -0.01em;
  }
  .cw-sales-desc {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.92);
    line-height: 1.6;
    margin-bottom: 2.5rem;
  }
  .cw-sales-actions {
    display: flex;
    justify-content: center;
    gap: 1.25rem;
    flex-wrap: wrap;
    margin-bottom: 2.25rem;
  }
  .cw-btn-white {
    background: #ffffff;
    color: #059669;
    font-weight: 800;
    font-size: 1.05rem;
    padding: 0.95rem 2.25rem;
    border-radius: 999px;
    text-decoration: none;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    transition: all 0.2s ease;
  }
  .cw-btn-white:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    color: #047857;
  }
  .cw-btn-transparent {
    background: transparent;
    color: #ffffff;
    font-weight: 700;
    font-size: 1.05rem;
    padding: 0.95rem 2.25rem;
    border-radius: 999px;
    border: 2px solid rgba(255, 255, 255, 0.6);
    text-decoration: none;
    transition: all 0.2s ease;
  }
  .cw-btn-transparent:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: #ffffff;
    color: #ffffff;
    transform: translateY(-2px);
  }
  .cw-sales-trust {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    font-size: 0.9rem;
    font-weight: 700;
    color: rgba(255, 255, 255, 0.9);
    flex-wrap: wrap;
  }

  @media (max-width: 900px) {
    .cw-hero-grid { grid-template-columns: 1fr; gap: 2.5rem; }
    .cw-phone-wrapper { margin-top: 1rem; }
    .cw-table-container { overflow-x: auto; }
    .cw-showcase-grid { grid-template-columns: 1fr; }
  }
</style>

<div class="cw-page">
  <!-- Breadcrumb -->
  <nav class="cw-breadcrumb" aria-label="Breadcrumb">
    <a href="<?php echo $bp; ?>">Home</a>
    <span>/</span>
    <a href="<?php echo $bp; ?>#channels">Channels</a>
    <span>/</span>
    <span style="color:#0f172a;font-weight:600;">WhatsApp</span>
  </nav>

  <!-- 1. HERO SECTION -->
  <section class="cw-hero-section">
    <div class="cw-hero-grid">
      <div class="cw-hero-content">
        <span class="cw-badge-pill">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
          Official WhatsApp Connection
        </span>
        <h1 class="cw-hero-title">
          Scale Your Sales and Support on <span class="highlight-green">WhatsApp</span>
        </h1>
        <p class="cw-hero-desc">
          Manage customer chats together with a shared inbox, build smart automatic reply flows, and run broadcasts safely using the official WhatsApp Business API.
        </p>
        <div class="cw-hero-actions">
          <a href="<?php echo $bp; ?>auth/register" class="cw-btn-primary">
            Start Free Trial
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <button type="button" class="cw-btn-secondary btn-demo-open">
            Book a Demo
          </button>
        </div>
        <div class="cw-trust-row">
          <span class="cw-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            5-Minute Setup
          </span>
          <span class="cw-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Official Meta API
          </span>
          <span class="cw-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Zero Ban Risk
          </span>
        </div>
      </div>

      <!-- Phone Simulator Stage -->
      <div class="cw-phone-wrapper">
        <div class="cw-floating-card cw-fc-1">
          <span style="width:10px;height:10px;border-radius:50%;background:#10b981;display:inline-block;"></span>
          <span style="font-size:0.8rem;font-weight:700;color:#0f172a;">+128 Leads Captured</span>
        </div>
        <div class="cw-floating-card cw-fc-2">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
          <span style="font-size:0.8rem;font-weight:700;color:#0f172a;">99.9% Delivery Uptime</span>
        </div>

        <div class="cw-phone-device">
          <div class="cw-phone-notch"></div>
          <div class="cw-phone-screen">
            <div class="cw-wa-header">
              <div class="cw-wa-avatar">IW</div>
              <div class="cw-wa-header-info">
                <strong>InboxWa Business AI</strong>
                <span><i style="width:6px;height:6px;border-radius:50%;background:#10b981;display:inline-block;"></i> Online</span>
              </div>
            </div>
            <div class="cw-wa-body">
              <div class="cw-bubble user">
                Hi! How can InboxWa automate our customer sales on WhatsApp?
                <span class="time">10:42 AM</span>
              </div>
              <div class="cw-bubble bot">
                👋 Hello! With Official WhatsApp API, you can send broadcasts with 98% open rates, auto-qualify leads 24/7, and assign chats across your entire team from 1 single number!
                <span class="time">10:42 AM</span>
              </div>
              <div class="cw-bubble user">
                Can I connect my Shopify store & CRM?
                <span class="time">10:43 AM</span>
              </div>
              <div class="cw-bubble bot">
                ✅ Yes! Orders, abandoned cart recoveries, and contact sync happen automatically with zero code.
                <span class="time">10:43 AM</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 2. COMPARISON GRID SECTION -->
  <section class="cw-comparison-section">
    <div class="cw-section-header">
      <span class="cw-badge-pill">Comparison Grid</span>
      <h2 class="cw-section-title">Standard WhatsApp vs WhatsApp Business API</h2>
      <p class="cw-section-subtitle">Discover why scaling on WhatsApp requires switching from the generic app to an official API-powered workflow built for teams.</p>
    </div>

    <div class="cw-table-container">
      <table class="cw-comp-table">
        <thead>
          <tr>
            <th style="width:30%;">Platform Feature</th>
            <th style="width:35%;">WhatsApp App (Standard)</th>
            <th style="width:35%;" class="col-api">Official API (InboxWa)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="cw-comp-feature">Multi-Agent Support</td>
            <td class="cw-comp-standard">Max 4 devices (Single device focus)</td>
            <td class="cw-comp-api">Unlimited agents, dynamic routing</td>
          </tr>
          <tr>
            <td class="cw-comp-feature">Broadcast Limits</td>
            <td class="cw-comp-standard">Max 256 contacts per list (Risk of Ban)</td>
            <td class="cw-comp-api">Unlimited broadcasts, safe delivery</td>
          </tr>
          <tr>
            <td class="cw-comp-feature">Auto-Reply Bots</td>
            <td class="cw-comp-standard">Extremely basic auto-responder</td>
            <td class="cw-comp-api">Visual flow builder + AI Support</td>
          </tr>
          <tr>
            <td class="cw-comp-feature">Green Tick Verification</td>
            <td class="cw-comp-standard">Not available for standard accounts</td>
            <td class="cw-comp-api">Official verified green tick badge</td>
          </tr>
          <tr>
            <td class="cw-comp-feature">CRM & API Integrations</td>
            <td class="cw-comp-standard">No Webhook or API connections</td>
            <td class="cw-comp-api">Robust REST APIs + Webhooks ready</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- 3. INTERACTIVE 9-FEATURE SHOWCASE -->
  <section class="cw-showcase-section">
    <div class="cw-section-header">
      <span class="cw-badge-pill">Interactive Showcase</span>
      <h2 class="cw-section-title">Powerful Tools to Turn WhatsApp into a Sales Machine</h2>
      <p class="cw-section-subtitle">Explore the exact capabilities engineered within our platform to help you automate customer operations completely.</p>
    </div>

    <div class="cw-showcase-grid">
      <!-- Feature 1 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
        </div>
        <h3 class="cw-card-title">Shared Team Inbox</h3>
        <p class="cw-card-desc">Let your entire sales and customer service team chat with customers using a single WhatsApp number. Direct customer messages to the right team member automatically.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Send chats to the right person</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Write notes only your team can see</li>
        </ul>
      </div>

      <!-- Feature 2 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
        </div>
        <h3 class="cw-card-title">Visual Reply Builder</h3>
        <p class="cw-card-desc">Create simple automatic replies for customer questions. Set up answers that trigger when customers type specific words or tap buttons.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Taps and words trigger replies</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Add interactive options menu</li>
        </ul>
      </div>

      <!-- Feature 3 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
        </div>
        <h3 class="cw-card-title">Bulk Messaging</h3>
        <p class="cw-card-desc">Send announcements or notifications to thousands of customers at once. Add their names or personal details to make messages friendly.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Add customer names automatically</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> See who opened and clicked links</li>
        </ul>
      </div>

      <!-- Feature 4 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
        </div>
        <h3 class="cw-card-title">Smart AI Calling</h3>
        <p class="cw-card-desc">Let smart voice assistants make and answer phone calls for your business. Help customers get information without waiting on hold.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Clear and friendly AI voices</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> See summary logs of every call</li>
        </ul>
      </div>

      <!-- Feature 5 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/><path d="M8 14h.01M12 14h.01M16 14h.01"/></svg>
        </div>
        <h3 class="cw-card-title">Easy Scheduling</h3>
        <p class="cw-card-desc">Let customers book appointments and schedule meetings directly inside the WhatsApp chat window. No outside links needed.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Choose calendar dates in chat</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Send automated appointment reminders</li>
        </ul>
      </div>

      <!-- Feature 6 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M8 13h8M8 17h8M8 9h2"/></svg>
        </div>
        <h3 class="cw-card-title">Send Simple Forms</h3>
        <p class="cw-card-desc">Create and send simple forms inside the chat so customers can fill out their details, sign up, or share info without leaving WhatsApp.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Fill out forms inside the chat</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Save customer answers instantly</li>
        </ul>
      </div>

      <!-- Feature 7 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/><path d="M8 10h.01M12 10h.01M16 10h.01"/></svg>
        </div>
        <h3 class="cw-card-title">AI Chat Assistant</h3>
        <p class="cw-card-desc">Train an AI helper using your own business files or website links. It can answer customer questions about pricing and product availability 24/7.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> AI answers customer questions</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Hand over to a real person if needed</li>
        </ul>
      </div>

      <!-- Feature 8 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
        </div>
        <h3 class="cw-card-title">Link Your Existing Tools</h3>
        <p class="cw-card-desc">Connect WhatsApp with the tools you already use like Shopify or your customer database. Send messages automatically when orders are placed or shipped.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Connect with tools like Shopify</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Send messages automatically on updates</li>
        </ul>
      </div>

      <!-- Feature 9 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
        </div>
        <h3 class="cw-card-title">Showcase Your Products</h3>
        <p class="cw-card-desc">Display your product inventory, catalog items, and pictures directly in the chat. Let customers select items and check out right inside WhatsApp.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Show product lists and pictures</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Quick and easy checkout in chat</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- 4. HOW IT WORKS / 4 EASY STEPS -->
  <section class="cw-steps-section">
    <div class="cw-steps-header">
      <span class="cw-badge-pill" style="background:rgba(5, 150, 105, 0.2);color:#34d399;border-color:rgba(5,150,105,0.4);">How It Works</span>
      <h2 class="cw-section-title">Start in 4 Easy Steps</h2>
      <p class="cw-section-subtitle">Setting up your official WhatsApp assistant takes less than 10 minutes.</p>
    </div>

    <div class="cw-steps-grid">
      <div class="cw-step-card">
        <div class="cw-step-num">01</div>
        <h3 class="cw-step-title">Link Your Phone</h3>
        <p class="cw-step-desc">Connect your business phone number by scanning a simple QR code in 30 seconds.</p>
      </div>

      <div class="cw-step-card">
        <div class="cw-step-num">02</div>
        <h3 class="cw-step-title">Upload Contact List</h3>
        <p class="cw-step-desc">Upload your customer phone list or link directly with your existing Shopify or CRM tool.</p>
      </div>

      <div class="cw-step-card">
        <div class="cw-step-num">03</div>
        <h3 class="cw-step-title">Design Chat Flows</h3>
        <p class="cw-step-desc">Type out your answers or design automated reply menus using our visual builder.</p>
      </div>

      <div class="cw-step-card">
        <div class="cw-step-num">04</div>
        <h3 class="cw-step-title">Start Answering</h3>
        <p class="cw-step-desc">Turn on your assistant, send bulk messages, and watch conversations happen automatically.</p>
      </div>
    </div>
  </section>

  <!-- 5. FINAL SALES CTA BANNER -->
  <section class="cw-sales-section">
    <div class="cw-sales-inner">
      <h2 class="cw-sales-title">Turn Your WhatsApp Into A Sales Engine Today</h2>
      <p class="cw-sales-desc">Start sending announcements, managing team chats, and answering customer questions automatically right now.</p>
      <div class="cw-sales-actions">
        <a href="<?php echo $bp; ?>auth/register" class="cw-btn-white">
          Try For Free &rarr;
        </a>
        <button type="button" class="cw-btn-transparent btn-demo-open">
          Talk to Sales
        </button>
      </div>
      <div class="cw-sales-trust">
        <span>✓ 5-Minute Setup</span>
        <span>✓ Official Connection</span>
        <span>✓ Cancel Anytime</span>
      </div>
    </div>
  </section>
</div>

<?php
include __DIR__ . '/../../includes/offer-popup.php';
include __DIR__ . '/../../includes/callback-popup.php';
include __DIR__ . '/../../includes/footer.php';
?>
