<?php
$basePath = '../';
$bp = $basePath;
require_once dirname(__DIR__) . '/config/cms.php';

$pageTitle = 'Frequently Asked Questions (FAQ) – HelloBotz WhatsApp API & AI Automation';
$pageDescription = 'Everything you need to know about HelloBotz: Official WhatsApp Business API, AI Chatbots, pricing plans, Meta Green Tick verification, bulk broadcasts, and integrations.';
$canonicalUrl = 'https://hellobotz.com/faq/';
$ogTitle = 'Frequently Asked Questions (FAQ) | HelloBotz';
$ogDescription = 'Browse answers to common questions about HelloBotz WhatsApp Marketing & Automation Platform. Instant setup, 3-day free trial.';

include __DIR__ . '/../includes/header.php';

// Fetch dynamic FAQs from CMS if available
$dbFaqs = [];
if (function_exists('cms_faqs')) {
    $dbFaqs = cms_faqs();
}
?>

<style>
/* Scoped FAQ Page Styling */
.faq-page-wrap {
  background: #ffffff;
  color: #1e293b;
  overflow-x: hidden;
  width: 100%;
}

.faq-hero-section {
  position: relative;
  padding: 4.5rem 1.25rem 3.5rem;
  background: radial-gradient(circle at 50% 10%, rgba(99, 102, 241, 0.08) 0%, rgba(248, 250, 252, 0) 70%),
              linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
  border-bottom: 1px solid #f1f5f9;
  text-align: center;
}

.faq-hero-container {
  max-width: 860px;
  margin: 0 auto;
}

.faq-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 6px 14px;
  border-radius: 9999px;
  background: rgba(16, 185, 129, 0.1);
  border: 1px solid rgba(16, 185, 129, 0.25);
  color: #059669;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 0.02em;
  margin-bottom: 1.25rem;
}

.faq-badge-dot {
  width: 8px;
  height: 8px;
  background: #10b981;
  border-radius: 50%;
  animation: hbPulseDot 2s infinite;
}

@keyframes hbPulseDot {
  0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); }
  70% { transform: scale(1); box-shadow: 0 0 0 6px rgba(16, 185, 129, 0); }
  100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
}

.faq-hero-title {
  font-size: clamp(2rem, 4.5vw, 3.25rem);
  font-weight: 900;
  color: #0f172a;
  line-height: 1.18;
  letter-spacing: -0.025em;
  margin: 0 0 1rem;
}

.faq-hero-title .gradient-text {
  background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 50%, #059669 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.faq-hero-subtitle {
  font-size: 1.125rem;
  color: #475569;
  line-height: 1.6;
  max-width: 680px;
  margin: 0 auto 2rem;
}

/* Interactive Search Bar */
.faq-search-box {
  position: relative;
  max-width: 620px;
  margin: 0 auto;
}

.faq-search-input {
  width: 100%;
  padding: 1rem 1.25rem 1rem 3.25rem;
  font-size: 1rem;
  color: #0f172a;
  background: #ffffff;
  border: 2px solid #e2e8f0;
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
  outline: none;
  transition: all 0.2s ease;
  box-sizing: border-box;
}

.faq-search-input:focus {
  border-color: #6366f1;
  box-shadow: 0 4px 24px rgba(99, 102, 241, 0.18);
}

.faq-search-icon {
  position: absolute;
  left: 1.15rem;
  top: 50%;
  transform: translateY(-50%);
  color: #94a3b8;
  pointer-events: none;
  width: 20px;
  height: 20px;
}

.faq-search-clear {
  position: absolute;
  right: 1rem;
  top: 50%;
  transform: translateY(-50%);
  background: none;
  border: none;
  color: #94a3b8;
  cursor: pointer;
  padding: 4px;
  display: none;
}

.faq-search-clear:hover {
  color: #0f172a;
}

/* Category Filter Tabs */
.faq-filter-bar {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 0.5rem;
  padding: 2rem 1rem 1rem;
  max-width: 1100px;
  margin: 0 auto;
}

.faq-tab-btn {
  padding: 0.6rem 1.25rem;
  font-size: 0.92rem;
  font-weight: 600;
  border-radius: 9999px;
  background: #f1f5f9;
  color: #475569;
  border: 1px solid transparent;
  cursor: pointer;
  transition: all 0.2s ease;
  white-space: nowrap;
}

.faq-tab-btn:hover {
  background: #e2e8f0;
  color: #0f172a;
}

.faq-tab-btn.active {
  background: #4f46e5;
  color: #ffffff;
  box-shadow: 0 4px 14px rgba(79, 70, 229, 0.3);
}

/* Main FAQ Accordion Container */
.faq-content-section {
  padding: 2rem 1.25rem 5rem;
  max-width: 900px;
  margin: 0 auto;
}

.faq-category-block {
  margin-bottom: 2.75rem;
}

.faq-category-header {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 1.25rem;
  padding-bottom: 0.5rem;
  border-bottom: 2px solid #f1f5f9;
}

.faq-category-icon {
  width: 36px;
  height: 36px;
  border-radius: 8px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background: #eef2ff;
  color: #4f46e5;
  font-size: 18px;
  flex-shrink: 0;
}

.faq-category-title {
  font-size: 1.35rem;
  font-weight: 800;
  color: #0f172a;
  margin: 0;
}

.faq-category-count {
  font-size: 0.85rem;
  font-weight: 700;
  color: #64748b;
  background: #f1f5f9;
  padding: 2px 8px;
  border-radius: 12px;
}

/* Accordion Item */
.hb-faq-item {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  margin-bottom: 0.85rem;
  overflow: hidden;
  transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.hb-faq-item:hover {
  border-color: #cbd5e1;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
}

.hb-faq-item.is-active {
  border-color: #6366f1;
  box-shadow: 0 6px 20px rgba(99, 102, 241, 0.08);
}

.hb-faq-question-btn {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  padding: 1.25rem 1.5rem;
  background: transparent;
  border: none;
  font-size: 1.05rem;
  font-weight: 700;
  color: #0f172a;
  text-align: left;
  cursor: pointer;
  transition: color 0.2s ease;
}

.hb-faq-item.is-active .hb-faq-question-btn {
  color: #4f46e5;
}

.hb-faq-chevron {
  width: 22px;
  height: 22px;
  border-radius: 50%;
  background: #f1f5f9;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: #475569;
  transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.2s;
}

.hb-faq-chevron svg {
  width: 12px;
  height: 12px;
  stroke-width: 2.5;
  transition: transform 0.25s ease;
}

.hb-faq-item.is-active .hb-faq-chevron {
  background: #4f46e5;
  color: #ffffff;
  transform: rotate(180deg);
}

.hb-faq-answer-wrap {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.35s cubic-bezier(0, 1, 0, 1);
}

.hb-faq-item.is-active .hb-faq-answer-wrap {
  max-height: 1200px;
  transition: max-height 0.4s ease-in-out;
}

.hb-faq-answer-body {
  padding: 0 1.5rem 1.4rem;
  font-size: 0.98rem;
  line-height: 1.65;
  color: #334155;
}

.hb-faq-answer-body p:last-child {
  margin-bottom: 0;
}

.hb-faq-answer-body ul, .hb-faq-answer-body ol {
  margin: 0.6rem 0;
  padding-left: 1.4rem;
}

.hb-faq-answer-body li {
  margin-bottom: 0.35rem;
}

.hb-faq-pill-tag {
  font-size: 11px;
  font-weight: 700;
  padding: 2px 7px;
  border-radius: 4px;
  background: #eff6ff;
  color: #2563eb;
  margin-left: 6px;
  vertical-align: middle;
}

/* Empty search state */
.faq-no-results {
  display: none;
  text-align: center;
  padding: 4rem 1rem;
}

.faq-no-results svg {
  width: 48px;
  height: 48px;
  color: #94a3b8;
  margin-bottom: 1rem;
}

/* Bottom CTA Support Card */
.faq-help-card {
  background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #0f172a 100%);
  border-radius: 16px;
  padding: 2.75rem 2rem;
  color: #ffffff;
  text-align: center;
  margin-top: 3.5rem;
  box-shadow: 0 12px 36px rgba(15, 23, 42, 0.25);
  position: relative;
  overflow: hidden;
}

.faq-help-card::before {
  content: "";
  position: absolute;
  top: -50%;
  right: -20%;
  width: 320px;
  height: 320px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(16, 185, 129, 0.25) 0%, transparent 70%);
  pointer-events: none;
}

.faq-help-card h3 {
  font-size: 1.75rem;
  font-weight: 800;
  color: #ffffff;
  margin: 0 0 0.75rem;
}

.faq-help-card p {
  color: #cbd5e1;
  font-size: 1.05rem;
  max-width: 580px;
  margin: 0 auto 1.75rem;
  line-height: 1.6;
}

.faq-cta-btn-row {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 1rem;
  flex-wrap: wrap;
}

.faq-btn-wa {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
  border-radius: 10px;
  background: #25d366;
  color: #ffffff !important;
  font-weight: 700;
  font-size: 15px;
  text-decoration: none;
  box-shadow: 0 4px 16px rgba(37, 211, 102, 0.35);
  transition: transform 0.2s, filter 0.2s;
}

.faq-btn-wa:hover {
  transform: translateY(-2px);
  filter: brightness(1.08);
}

.faq-btn-trial {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
  border-radius: 10px;
  background: rgba(255, 255, 255, 0.12);
  color: #ffffff !important;
  font-weight: 700;
  font-size: 15px;
  text-decoration: none;
  border: 1px solid rgba(255, 255, 255, 0.25);
  transition: background 0.2s, border-color 0.2s;
}

.faq-btn-trial:hover {
  background: rgba(255, 255, 255, 0.2);
  border-color: #ffffff;
}

/* Dark mode adjustments */
html[data-theme="dark"] .faq-page-wrap,
body.dark-theme .faq-page-wrap {
  background: #0b1120;
  color: #f1f5f9;
}

html[data-theme="dark"] .faq-hero-section,
body.dark-theme .faq-hero-section {
  background: linear-gradient(180deg, #0b1120 0%, #0f172a 100%);
  border-bottom-color: rgba(255, 255, 255, 0.08);
}

html[data-theme="dark"] .faq-hero-title,
body.dark-theme .faq-hero-title,
html[data-theme="dark"] .faq-category-title,
body.dark-theme .faq-category-title,
html[data-theme="dark"] .hb-faq-question-btn,
body.dark-theme .hb-faq-question-btn {
  color: #f8fafc;
}

html[data-theme="dark"] .faq-hero-subtitle,
body.dark-theme .faq-hero-subtitle,
html[data-theme="dark"] .hb-faq-answer-body,
body.dark-theme .hb-faq-answer-body {
  color: #cbd5e1;
}

html[data-theme="dark"] .faq-search-input,
body.dark-theme .faq-search-input {
  background: #1e293b;
  border-color: #334155;
  color: #ffffff;
}

html[data-theme="dark"] .hb-faq-item,
body.dark-theme .hb-faq-item {
  background: #131c31;
  border-color: rgba(255, 255, 255, 0.08);
}

html[data-theme="dark"] .faq-tab-btn,
body.dark-theme .faq-tab-btn {
  background: #1e293b;
  color: #cbd5e1;
}

html[data-theme="dark"] .faq-tab-btn.active,
body.dark-theme .faq-tab-btn.active {
  background: #4f46e5;
  color: #ffffff;
}
</style>

<div class="faq-page-wrap">

  <!-- Breadcrumb -->
  <div class="container" style="padding-top:1.25rem;">
    <nav class="res-breadcrumb" aria-label="Breadcrumb" style="font-size:13px; color:#64748b; display:flex; align-items:center; gap:6px;">
      <a href="<?php echo $bp; ?>" style="color:#64748b; text-decoration:none;">Home</a>
      <span>/</span>
      <span style="color:#0f172a; font-weight:600;">Frequently Asked Questions</span>
    </nav>
  </div>

  <!-- Hero Section -->
  <section class="faq-hero-section">
    <div class="faq-hero-container">
      <div class="faq-badge">
        <span class="faq-badge-dot"></span>
        HelloBotz Help &amp; Knowledge Base
      </div>
      <h1 class="faq-hero-title">
        Frequently Asked <span class="gradient-text">Questions</span>
      </h1>
      <p class="faq-hero-subtitle">
        Everything you need to know about official WhatsApp Business API, AI Chatbot automations, Meta Green Tick, billing, and system integrations.
      </p>

      <!-- Live Search Box -->
      <div class="faq-search-box">
        <svg class="faq-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
        <input type="search" id="faqSearchInput" class="faq-search-input" placeholder="Search questions (e.g. green tick, pricing, trial, limits, api)..." autocomplete="off">
        <button type="button" id="faqSearchClear" class="faq-search-clear" aria-label="Clear search">&times;</button>
      </div>
    </div>
  </section>

  <!-- Filter Bar -->
  <div class="faq-filter-bar" id="faqFilterBar" role="tablist">
    <button type="button" class="faq-tab-btn active" data-category="all">All Questions</button>
    <button type="button" class="faq-tab-btn" data-category="general">General &amp; Setup</button>
    <button type="button" class="faq-tab-btn" data-category="api">WhatsApp API &amp; Green Tick</button>
    <button type="button" class="faq-tab-btn" data-category="pricing">Pricing &amp; Billing</button>
    <button type="button" class="faq-tab-btn" data-category="automation">AI Chatbots &amp; Flows</button>
    <button type="button" class="faq-tab-btn" data-category="campaigns">Bulk Broadcasts</button>
    <button type="button" class="faq-tab-btn" data-category="compliance">Security &amp; Meta Compliance</button>
  </div>

  <!-- FAQ Accordion Content -->
  <section class="faq-content-section" id="faqAccordionSection">

    <!-- 1. General & Setup Category -->
    <div class="faq-category-block" data-category="general">
      <div class="faq-category-header">
        <div class="faq-category-icon">🚀</div>
        <h2 class="faq-category-title">General &amp; Getting Started</h2>
        <span class="faq-category-count">4 FAQs</span>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>What is HelloBotz and how does it work?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p><strong>HelloBotz</strong> is an enterprise WhatsApp Marketing &amp; Omnichannel Automation platform built on top of the official Meta WhatsApp Cloud API. It empowers businesses to:</p>
            <ul>
              <li>Deploy 24/7 AI-powered chatbots and drag-and-drop conversational flows.</li>
              <li>Send high-converting bulk broadcasts with rich buttons, images, and catalogs.</li>
              <li>Empower multiple support and sales agents with a Unified Shared Team Inbox.</li>
              <li>Sync leads, abandoned carts, and orders automatically with Shopify, WooCommerce, Zoho, and CRM systems.</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>How does the 3-day free trial work? <span class="hb-faq-pill-tag">No Card Required</span></span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p>All new HelloBotz accounts start with a full-featured <strong>3-day free trial</strong> with zero upfront payment and no credit card required. You get complete access to the visual flow builder, template submissions, agent seats, and webhook testing. Once you are satisfied with performance, you can choose a monthly or annual plan to go live permanently.</p>
          </div>
        </div>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>Can I use my existing WhatsApp mobile number?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p>Yes! You can connect either a fresh new number (mobile, landline, or 1800 toll-free) or migrate your existing WhatsApp number. If you migrate an existing number currently active in the regular WhatsApp or WhatsApp Business mobile app, you simply delete the consumer WhatsApp account first, and our onboarding wizard registers it directly onto the official Meta Cloud API infrastructure in minutes.</p>
          </div>
        </div>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>How long does account activation take?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p>With Meta Embedded Signup inside HelloBotz, official WhatsApp Business API phone number onboarding typically takes between <strong>10 to 25 minutes</strong>. Once your number is verified by Meta OTP, you can instantly receive messages and dispatch outbound campaigns.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- 2. WhatsApp API & Green Tick Category -->
    <div class="faq-category-block" data-category="api">
      <div class="faq-category-header">
        <div class="faq-category-icon">✅</div>
        <h2 class="faq-category-title">WhatsApp API &amp; Meta Green Tick</h2>
        <span class="faq-category-count">4 FAQs</span>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>How do I get the Meta Official Green Tick verification badge?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p>The Green Tick badge (Official Business Account) shows your verified brand name instead of a phone number even if the contact hasn’t saved your contact card. Qualifications include:</p>
            <ol>
              <li>A verified Meta Business Manager account.</li>
              <li>Two-Factor Authentication (2FA) active on the Business Account.</li>
              <li>Documented brand notability (credible news publications, press mentions, or digital authority).</li>
            </ol>
            <p><strong>HelloBotz handles the Green Tick submission process directly for all Pro and Enterprise clients at zero additional service charge.</strong></p>
          </div>
        </div>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>Is there any risk of phone number blocking or bans?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p><strong>Zero risk of bans when using HelloBotz.</strong> Unlike unofficial QR-code scrapers or unauthorized desktop extensions that get banned daily, HelloBotz runs exclusively on Meta’s official Cloud API infrastructure. All messages comply strictly with WhatsApp Business Messaging Policies.</p>
          </div>
        </div>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>What are the daily messaging limits for outbound broadcasts?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p>Meta establishes messaging tiers dynamically:</p>
            <ul>
              <li><strong>Tier 1:</strong> 1,000 unique business-initiated conversations every 24 hours.</li>
              <li><strong>Tier 2:</strong> 10,000 unique conversations per 24 hours.</li>
              <li><strong>Tier 3:</strong> 100,000 unique conversations per 24 hours.</li>
              <li><strong>Tier 4:</strong> Unlimited broadcast conversations per 24 hours.</li>
            </ul>
            <p>As you send high-quality broadcasts with low block/report rates, Meta automatically promotes your account to higher tiers every 48 to 72 hours.</p>
          </div>
        </div>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>Can multiple customer support agents share one WhatsApp number?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p>Yes! With HelloBotz Team Inbox, unlimited support agents and sales reps can log in simultaneously from desktops, tablets, or phones. Incoming chats can be auto-assigned via round-robin, claimed manually, tagged with custom CRM labels, and transferred between departments smoothly.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- 3. Pricing & Billing Category -->
    <div class="faq-category-block" data-category="pricing">
      <div class="faq-category-header">
        <div class="faq-category-icon">💳</div>
        <h2 class="faq-category-title">Pricing, Plans &amp; Billing</h2>
        <span class="faq-category-count">4 FAQs</span>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>What is included in the HelloBotz subscription fee?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p>The transparent software fee covers full access to the HelloBotz platform: Visual Flow Builder, Shared Team Inbox, Contact CRM, Broadcast scheduler, API webhooks, analytics, and dedicated support. There are <strong>no setup fees</strong> and no contract lock-ins.</p>
          </div>
        </div>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>How do WhatsApp conversation charges work? <span class="hb-faq-pill-tag">Zero Markup</span></span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p>Meta bills WhatsApp conversations in 24-hour windows categorized into:</p>
            <ul>
              <li><strong>Marketing:</strong> Outbound promotions, discounts, product launches.</li>
              <li><strong>Utility:</strong> Order confirmations, shipment tracking, billing reminders.</li>
              <li><strong>Authentication:</strong> One-time passcodes (OTPs) and verification security.</li>
              <li><strong>Service (Inbound):</strong> Inquiries initiated by customers (free up to 1,000 monthly service conversations per account!).</li>
            </ul>
            <p><strong>HelloBotz charges 0% commission/markup on Meta conversations.</strong> You top up your prepaid wallet and pay the exact standard Meta government rate directly.</p>
          </div>
        </div>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>Can I upgrade, downgrade, or cancel anytime?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p>Yes. You can switch between Monthly and Annual plans or upgrade tiers at any point from your dashboard. Upgrades take effect immediately with pro-rata calculations. You can also cancel anytime with no penalties or hidden termination charges.</p>
          </div>
        </div>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>What payment methods are supported?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p>We accept all Indian and International payment methods including UPI (Google Pay, PhonePe, Paytm), Credit &amp; Debit Cards (Visa, Mastercard, RuPay, Amex), Net Banking, and Bank Wire Transfer for Enterprise accounts. GST invoices are generated automatically.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- 4. AI Chatbots & Flows Category -->
    <div class="faq-category-block" data-category="automation">
      <div class="faq-category-header">
        <div class="faq-category-icon">🤖</div>
        <h2 class="faq-category-title">AI Chatbots &amp; Visual Flow Builder</h2>
        <span class="faq-category-count">3 FAQs</span>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>Do I need coding skills to build chatbots?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p><strong>No technical or coding skills are needed!</strong> HelloBotz features an intuitive drag-and-drop visual canvas. You can drag message blocks, quick-reply buttons, interactive list pickers, conditional branches, and delay timers with zero lines of code.</p>
          </div>
        </div>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>Can the AI chatbot train on my website knowledgebase or FAQs?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p>Yes! With our AI Assistant integration (ChatGPT &amp; Claude LLM engine), you can feed your website URLs, PDF product brochures, or support documents. The AI chatbot understands user context, responds to complex multi-turn inquiries accurately in 50+ languages, and gracefully hands off to a human agent when needed.</p>
          </div>
        </div>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>How does the bot transfer complex queries to live human agents?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p>Whenever a customer clicks "Talk to Agent" or types an intent not recognized by the automated tree, the flow automatically pauses the bot, alerts your team in real-time, and transfers the chat to the available human agent queue.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- 5. Bulk Broadcasts Category -->
    <div class="faq-category-block" data-category="campaigns">
      <div class="faq-category-header">
        <div class="faq-category-icon">📢</div>
        <h2 class="faq-category-title">Bulk Broadcasts &amp; Campaigns</h2>
        <span class="faq-category-count">3 FAQs</span>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>Do recipients need to have my number saved to receive broadcasts?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p><strong>No!</strong> Unlike the free personal WhatsApp app (where recipients must save your number in their address book), official Meta API broadcasts deliver directly into the inbox of all opt-in contacts regardless of whether they saved your contact.</p>
          </div>
        </div>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>What formats and attachments can I send in broadcast campaigns?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p>You can send high-definition images, video previews, PDF catalogs, dynamic personalized variable text (e.g. <code>{{1}}</code> customer name, <code>{{2}}</code> tracking ID), Quick Reply buttons, and Call-To-Action buttons that link to website URLs or trigger phone calls.</p>
          </div>
        </div>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>How fast are bulk messages delivered?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p>HelloBotz’s enterprise queue dispatches at speeds exceeding <strong>1,000+ messages per minute</strong> directly to Meta’s Tier-4 data centers with real-time delivery and read receipt tracking.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- 6. Integrations & Security Category -->
    <div class="faq-category-block" data-category="compliance">
      <div class="faq-category-header">
        <div class="faq-category-icon">🔒</div>
        <h2 class="faq-category-title">Integrations, Security &amp; Compliance</h2>
        <span class="faq-category-count">3 FAQs</span>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>Which e-commerce and CRM platforms integrate with HelloBotz?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p>HelloBotz offers 1-click native integrations and webhooks for:</p>
            <ul>
              <li><strong>E-commerce:</strong> Shopify, WooCommerce, Shiprocket, Wortal, Magento.</li>
              <li><strong>CRM &amp; Leads:</strong> HubSpot, Zoho CRM, Salesforce, LeadSquared.</li>
              <li><strong>Automation Hubs:</strong> Zapier, Make (Integromat), Pabbly, Google Sheets.</li>
              <li><strong>Custom APIs:</strong> REST Webhooks with secure HMAC-SHA256 signatures.</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>Is customer data secure and GDPR compliant?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p>Yes. All message data and customer records are protected with 256-bit SSL encryption in transit and AES-256 at rest. HelloBotz strictly complies with GDPR, SOC-2 Type II standards, and Meta Cloud Security specifications.</p>
          </div>
        </div>
      </div>

      <div class="hb-faq-item">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span>Do you offer custom API integrations or dedicated white-label setup?</span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p>Yes! For marketing agencies and enterprise partners, HelloBotz offers 100% White-Label SaaS reseller portals (your logo, your domain, custom pricing) as well as dedicated developer API architecture. Contact our partnership specialists for a live demo.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Dynamic DB FAQs (If added in Admin console) -->
    <?php if (!empty($dbFaqs)): ?>
    <div class="faq-category-block" data-category="custom">
      <div class="faq-category-header">
        <div class="faq-category-icon">💡</div>
        <h2 class="faq-category-title">Additional Questions &amp; Updates</h2>
        <span class="faq-category-count"><?php echo count($dbFaqs); ?> FAQs</span>
      </div>

      <?php foreach ($dbFaqs as $df): ?>
      <div class="hb-faq-item" data-custom-cat="<?php echo htmlspecialchars($df['category'] ?? 'general'); ?>">
        <button type="button" class="hb-faq-question-btn" aria-expanded="false">
          <span><?php echo htmlspecialchars($df['question']); ?></span>
          <span class="hb-faq-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="6 9 12 15 18 9"/></svg></span>
        </button>
        <div class="hb-faq-answer-wrap">
          <div class="hb-faq-answer-body">
            <p><?php echo nl2br(htmlspecialchars($df['answer'])); ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <!-- No Search Results Found View -->
    <div class="faq-no-results" id="faqNoResults">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <circle cx="11" cy="11" r="8"></circle>
        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
      </svg>
      <h3 style="font-size:1.25rem; font-weight:700; color:#0f172a; margin:0 0 0.5rem;">No matching questions found</h3>
      <p style="color:#64748b; font-size:0.95rem; margin:0 0 1.25rem;">Try searching for another keyword or reach out directly to our live team.</p>
      <button type="button" class="faq-tab-btn" onclick="document.getElementById('faqSearchInput').value=''; document.getElementById('faqSearchInput').dispatchEvent(new Event('input'));" style="background:#4f46e5; color:#fff;">View All FAQs</button>
    </div>

    <!-- Still Have Questions Card -->
    <div class="faq-help-card">
      <h3>Still Have Questions? We&apos;re Here to Help!</h3>
      <p>Can&apos;t find the answer you&apos;re looking for? Our WhatsApp API engineers and automation experts are available to chat with you right now.</p>
      <div class="faq-cta-btn-row">
        <a href="https://wa.me/918050854445?text=Hi%20HelloBotz%2C%20I%20have%20a%20question%20about%20your%20WhatsApp%20API%20platform" target="_blank" rel="noopener noreferrer" class="faq-btn-wa">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
          <span>Chat on WhatsApp</span>
        </a>
        <a href="https://app.hellobotz.com/auth/register" class="faq-btn-trial">
          <span>Start 3-Day Free Trial &rarr;</span>
        </a>
      </div>
    </div>

  </section>

</div>

<!-- Interactive FAQ Script -->
<script>
(function() {
  'use strict';

  var searchInput = document.getElementById('faqSearchInput');
  var searchClear = document.getElementById('faqSearchClear');
  var filterBtns = document.querySelectorAll('.faq-tab-btn');
  var faqItems = document.querySelectorAll('.hb-faq-item');
  var categoryBlocks = document.querySelectorAll('.faq-category-block');
  var noResultsEl = document.getElementById('faqNoResults');

  // Accordion Toggle Logic
  faqItems.forEach(function(item) {
    var btn = item.querySelector('.hb-faq-question-btn');
    if (!btn) return;

    btn.addEventListener('click', function(e) {
      e.preventDefault();
      var isActive = item.classList.contains('is-active');

      // Toggle this item
      if (isActive) {
        item.classList.remove('is-active');
        btn.setAttribute('aria-expanded', 'false');
      } else {
        item.classList.add('is-active');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // Category Tab Filtering
  filterBtns.forEach(function(tab) {
    tab.addEventListener('click', function(e) {
      e.preventDefault();
      filterBtns.forEach(function(b) { b.classList.remove('active'); });
      tab.classList.add('active');

      var cat = tab.getAttribute('data-category');
      applyFilters(cat, searchInput.value.trim().toLowerCase());
    });
  });

  // Search Input Filtering
  if (searchInput) {
    searchInput.addEventListener('input', function() {
      var query = searchInput.value.trim().toLowerCase();
      if (searchClear) {
        searchClear.style.display = query.length > 0 ? 'block' : 'none';
      }
      var activeTab = document.querySelector('.faq-tab-btn.active');
      var cat = activeTab ? activeTab.getAttribute('data-category') : 'all';
      applyFilters(cat, query);
    });

    if (searchClear) {
      searchClear.addEventListener('click', function() {
        searchInput.value = '';
        searchClear.style.display = 'none';
        var activeTab = document.querySelector('.faq-tab-btn.active');
        var cat = activeTab ? activeTab.getAttribute('data-category') : 'all';
        applyFilters(cat, '');
        searchInput.focus();
      });
    }
  }

  function applyFilters(category, query) {
    var totalVisible = 0;

    categoryBlocks.forEach(function(block) {
      var blockCat = block.getAttribute('data-category');
      var catMatches = (category === 'all' || category === blockCat);

      var blockItems = block.querySelectorAll('.hb-faq-item');
      var visibleInBlock = 0;

      blockItems.forEach(function(item) {
        var qText = (item.querySelector('.hb-faq-question-btn')?.textContent || '').toLowerCase();
        var aText = (item.querySelector('.hb-faq-answer-body')?.textContent || '').toLowerCase();

        var queryMatches = !query || (qText.indexOf(query) > -1 || aText.indexOf(query) > -1);

        if (catMatches && queryMatches) {
          item.style.display = '';
          visibleInBlock++;
          totalVisible++;
          // auto expand if user searched specifically
          if (query.length >= 3) {
            item.classList.add('is-active');
            item.querySelector('.hb-faq-question-btn')?.setAttribute('aria-expanded', 'true');
          }
        } else {
          item.style.display = 'none';
        }
      });

      // Show/hide category block header based on whether it has visible items
      if (visibleInBlock > 0) {
        block.style.display = '';
      } else {
        block.style.display = 'none';
      }
    });

    if (noResultsEl) {
      noResultsEl.style.display = totalVisible === 0 ? 'block' : 'none';
    }
  }

  // Open specific FAQ if hash exists in URL (e.g. #faq-greentick)
  if (window.location.hash) {
    var targetHash = window.location.hash.toLowerCase();
    if (targetHash === '#faq' || targetHash === '#faqs') {
      // scroll to accordion
      var accSec = document.getElementById('faqAccordionSection');
      if (accSec) {
        setTimeout(function() {
          accSec.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }, 200);
      }
    }
  }
})();
</script>

<!-- Structured Data for FAQPage (Google SEO Rich Snippets) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is HelloBotz and how does it work?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "HelloBotz is an enterprise WhatsApp Marketing & Omnichannel Automation platform built on official Meta WhatsApp Cloud API. It provides visual chatbot flow builders, bulk broadcasts, unified multi-agent team inboxes, and CRM integrations."
      }
    },
    {
      "@type": "Question",
      "name": "How does the 3-day free trial work?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "All new HelloBotz accounts include a full-featured 3-day free trial with no credit card required. You get complete access to flow builders, template submissions, agent seats, and webhook testing."
      }
    },
    {
      "@type": "Question",
      "name": "How do I get the Meta Official Green Tick verification badge?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "To qualify for the Meta Green Tick badge, your business must have a verified Meta Business Manager, 2FA enabled, and brand notability. HelloBotz handles the Green Tick submission directly for all Pro and Enterprise clients."
      }
    },
    {
      "@type": "Question",
      "name": "How do WhatsApp conversation charges work?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Meta bills WhatsApp conversations in 24-hour windows across Marketing, Utility, Authentication, and Service categories. HelloBotz maintains 0% commission on Meta conversations—you pay exact official Meta rates directly."
      }
    },
    {
      "@type": "Question",
      "name": "Do recipients need to have my number saved to receive broadcasts?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Official Meta API broadcasts deliver directly into the inbox of all opt-in contacts regardless of whether they saved your contact in their address book."
      }
    }
  ]
}
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
