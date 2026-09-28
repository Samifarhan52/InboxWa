<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'WhatsApp Automation & Drip Campaigns | HelloBotz';
$pageDescription = 'Trigger intelligent follow-up sequences, reminders, and multi-step conversational journeys on WhatsApp with zero manual effort using HelloBotz.';
$canonicalUrl = 'https://hellobotz.com/products/automation/';
$ogImage = 'assets/images/og-image.png';

include __DIR__ . '/../../includes/header.php';
?>

<!-- Dependencies: Bootstrap Grid, FontAwesome -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>
.cloned-hellobots-page {
  width: 100%;
  overflow-x: hidden;
  background: #ffffff;
}
.cloned-hellobots-page .container {
  width: 100% !important;
  max-width: 1240px !important;
  margin-left: auto !important;
  margin-right: auto !important;
  padding-left: 1.25rem !important;
  padding-right: 1.25rem !important;
  box-sizing: border-box !important;
}
.auto-hero {
  padding: 4.5rem 0 3.5rem;
  background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
  border-bottom: 1px solid #e2e8f0;
}
.meta-partner-badge {
  font-size: 11px !important;
  color: #111827;
  border: 1px solid #cbd5e1;
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 8px 14px;
  border-radius: 9999px;
  background: #ffffff;
  font-weight: 700;
  margin-bottom: 24px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.04);
}
.hero-title {
  font-size: clamp(2rem, 3.4vw, 3rem);
  font-weight: 800;
  color: #0f172a;
  line-height: 1.22;
  letter-spacing: -0.025em;
  margin-bottom: 1.25rem;
}
.hero-text {
  font-size: 1.12rem;
  color: #475569;
  line-height: 1.65;
  margin-bottom: 2rem;
  max-width: 580px;
}
.auto-features {
  padding: 4.5rem 0;
}
.auto-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 1.5rem;
  margin-top: 2.5rem;
}
.auto-card {
  background: #ffffff;
  border: 1.5px solid #e2e8f0;
  border-radius: 16px;
  padding: 1.85rem;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
  transition: all 0.25s ease;
}
.auto-card:hover {
  transform: translateY(-4px);
  border-color: #818cf8;
  box-shadow: 0 12px 30px rgba(79, 70, 229, 0.1);
}
.auto-card-icon {
  width: 48px;
  height: 48px;
  border-radius: 12px;
  background: rgba(79, 70, 229, 0.1);
  color: #4f46e5;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.4rem;
  margin-bottom: 1.25rem;
}
.auto-card h3 {
  font-size: 1.2rem;
  font-weight: 700;
  color: #0f172a;
  margin-bottom: 0.65rem;
}
.auto-card p {
  font-size: 0.95rem;
  color: #64748b;
  line-height: 1.6;
  margin: 0;
}
</style>

<div class="cloned-hellobots-page">

  <!-- HERO SECTION -->
  <section class="auto-hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <span class="meta-partner-badge">
            <i class="fa-brands fa-meta" style="color:#0081fb;"></i> Official Meta Partner
          </span>
          <h1 class="hero-title">Automate follow-ups, reminders, and multi-step WhatsApp journeys</h1>
          <p class="hero-text">
            Trigger automated sequences from tags, keywords, webhooks, and campaign events — keep conversations moving, recover abandoned carts, and nurture leads without manual busywork.
          </p>
          <div class="product-hero-actions" style="display:flex;flex-wrap:wrap;gap:12px;align-items:center;">
            <a href="https://app.hellobotz.com/auth/register" class="btn text-white cta-button m-0" style="background:#4f46e5;color:#ffffff;font-weight:700;padding:12px 26px;border-radius:10px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;box-shadow:0 4px 14px rgba(79,70,229,0.35);">
              Start Free Trial →
            </a>
            <button type="button" class="btn btn-outline-primary cta-button-secondary m-0 btn-demo-open" style="border:1.5px solid #4f46e5;color:#4f46e5;background:#ffffff;font-weight:700;padding:12px 24px;border-radius:10px;cursor:pointer;">
              Book Live Demo
            </button>
            <a href="#contact-section" class="btn btn-verified-outline m-0" style="display:inline-flex;align-items:center;gap:7px;border:1.5px solid #10b981;color:#047857;background:#ecfdf5;font-weight:700;padding:12px 22px;border-radius:10px;text-decoration:none;">
              <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
              Get Verified
            </a>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <div style="background:#f1f5f9;border:1px solid #e2e8f0;border-radius:18px;padding:24px;box-shadow:0 12px 35px rgba(0,0,0,0.06);">
            <img width="100%" src="/assets/images/products/automation/hero.webp" alt="WhatsApp Automation" style="border-radius:12px;display:block;" onerror="this.src='/assets/images/hellobots/whatsapp-broadcasting/whatsapp-broadcasting.png'">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- KEY FEATURES -->
  <section class="auto-features">
    <div class="container">
      <div style="text-align:center;max-width:720px;margin:0 auto;">
        <span style="font-size:0.8rem;font-weight:800;letter-spacing:0.12em;text-transform:uppercase;color:#4f46e5;">BUILT FOR AUTONOMOUS SCALE</span>
        <h2 style="font-size:clamp(1.8rem, 2.8vw, 2.4rem);font-weight:800;color:#0f172a;margin-top:0.5rem;">Powerful automation engines that work while you sleep</h2>
        <p style="font-size:1.05rem;color:#64748b;margin-top:0.75rem;">Scale high-touch customer communication across millions of subscribers without hiring extra staff.</p>
      </div>

      <div class="auto-grid">
        <div class="auto-card">
          <div class="auto-card-icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
          <h3>Drip Sequences</h3>
          <p>Nurture new leads with scheduled, multi-day messaging sequences that educate, build trust, and gently guide prospects toward conversion.</p>
        </div>
        <div class="auto-card">
          <div class="auto-card-icon"><i class="fa-solid fa-cart-shopping"></i></div>
          <h3>Abandoned Cart Recovery</h3>
          <p>Instantly recover lost revenue by sending automated reminders with item images, dynamic discount codes, and 1-tap checkout resume links.</p>
        </div>
        <div class="auto-card">
          <div class="auto-card-icon"><i class="fa-solid fa-bell"></i></div>
          <h3>Event &amp; Payment Reminders</h3>
          <p>Send proactive payment alerts, webinar reminders, and appointment notifications with verified UPI/card payment links.</p>
        </div>
        <div class="auto-card">
          <div class="auto-card-icon"><i class="fa-solid fa-tags"></i></div>
          <h3>Tag-Based Branching</h3>
          <p>Segment subscribers based on their replies and click actions. Route different customers down personalized conversational journeys.</p>
        </div>
        <div class="auto-card">
          <div class="auto-card-icon"><i class="fa-solid fa-plug"></i></div>
          <h3>Webhook Integrations</h3>
          <p>Connect Shopify, WooCommerce, Zoho, HubSpot, or custom backends with instant webhook triggers that fire WhatsApp actions in &lt;50ms.</p>
        </div>
        <div class="auto-card">
          <div class="auto-card-icon"><i class="fa-solid fa-chart-line"></i></div>
          <h3>Funnel Analytics</h3>
          <p>Track delivery, open rates, button taps, and conversion milestones for each step of your automated workflow in real time.</p>
        </div>
      </div>
    </div>
  </section>


<!-- INTERACTIVE JOURNEY FLOW SECTION -->
<style>
.drip-journey-section {
  padding: 5rem 0;
  background: #f8fafc;
  border-top: 1px solid #e2e8f0;
  border-bottom: 1px solid #e2e8f0;
  position: relative;
}
.drip-journey-container {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 1.25rem;
  box-sizing: border-box;
  text-align: center;
}
.drip-j-kicker {
  font-size: 0.8rem;
  font-weight: 800;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #4f46e5;
  margin-bottom: 0.6rem;
}
.drip-j-title {
  font-size: clamp(1.8rem, 2.8vw, 2.4rem);
  font-weight: 800;
  color: #0f172a;
  letter-spacing: -0.025em;
  margin-bottom: 0.85rem;
  line-height: 1.25;
}
.drip-j-intro {
  font-size: 1.05rem;
  color: #475569;
  max-width: 680px;
  margin: 0 auto 2.5rem;
  line-height: 1.6;
}
.drip-j-nav {
  display: flex;
  justify-content: center;
  gap: 0.75rem;
  flex-wrap: wrap;
  margin-bottom: 2.75rem;
}
.drip-j-tab {
  background: #ffffff;
  border: 1.5px solid #cbd5e1;
  color: #334155;
  font-weight: 700;
  font-size: 0.92rem;
  padding: 0.75rem 1.4rem;
  border-radius: 9999px;
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
  box-shadow: 0 1px 3px rgba(0,0,0,0.05);
}
.drip-j-tab:hover {
  background: #f1f5f9;
  color: #0f172a;
  border-color: #94a3b8;
}
.drip-j-tab.active {
  background: #4f46e5;
  color: #ffffff;
  border-color: #4f46e5;
  box-shadow: 0 4px 16px rgba(79, 70, 229, 0.35);
}
.drip-j-timeline {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.25rem;
}
@media (max-width: 992px) {
  .drip-j-timeline {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 576px) {
  .drip-j-timeline {
    grid-template-columns: 1fr;
  }
}
.drip-j-card {
  background: #ffffff;
  border: 1.5px solid #e2e8f0;
  border-radius: 18px;
  padding: 1.75rem 1.25rem;
  text-align: left;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
  position: relative;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  display: flex;
  flex-direction: column;
}
.drip-j-card:hover {
  transform: translateY(-4px);
  border-color: #818cf8;
  box-shadow: 0 12px 30px rgba(79, 70, 229, 0.12);
}
.drip-j-step-num {
  width: 40px;
  height: 40px;
  border-radius: 12px;
  background: rgba(79, 70, 229, 0.1);
  color: #4f46e5;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 800;
  font-size: 1rem;
  margin-bottom: 1.1rem;
}
.drip-j-card h4 {
  font-size: 1.12rem;
  font-weight: 700;
  color: #0f172a;
  margin-bottom: 0.5rem;
  min-height: 2.5rem;
  display: flex;
  align-items: center;
}
.drip-j-card p {
  font-size: 0.9rem;
  color: #475569;
  line-height: 1.55;
  margin-bottom: 1.25rem;
  flex-grow: 1;
}
.drip-j-badge {
  display: inline-flex;
  align-items: center;
  font-size: 0.76rem;
  font-weight: 700;
  color: #047857;
  background: #ecfdf5;
  border: 1px solid #a7f3d0;
  border-radius: 9999px;
  padding: 4px 10px;
  width: fit-content;
}
</style>

<section class="drip-journey-section" id="journey-flow">
  <div class="drip-journey-container">
    <div class="drip-j-kicker">AUTOMATED DRIP WORKFLOW</div>
    <h2 class="drip-j-title">Automate follow-ups, reminders, and multi-step journeys.</h2>
    <p class="drip-j-intro">Trigger sequences from tags, keywords, webhooks and campaign events — keep conversations moving without manual busywork.</p>

    <!-- Scenario Switcher -->
    <div class="drip-j-nav">
      <button type="button" class="drip-j-tab active" onclick="dripSwitchJourney('cart', this)">🛒 Abandoned Cart Recovery</button>
        <button type="button" class="drip-j-tab" onclick="dripSwitchJourney('onboard', this)">🚀 SaaS Onboarding Drip</button>
        <button type="button" class="drip-j-tab" onclick="dripSwitchJourney('renewal', this)">💳 Payment & Renewal Reminders</button>
    </div>

    <!-- 4-Stage Cards -->
    <div class="drip-j-timeline">
        <div class="drip-j-card" id="drip-step-1">
          <div class="drip-j-step-num">01</div>
          <h4 id="drip-title-1">Checkout Abandoned</h4>
          <p id="drip-desc-1">Customer leaves cart; webhook triggers sequence after 30-min delay.</p>
          <span class="drip-j-badge" id="drip-badge-1">Webhook Trigger</span>
        </div>
        <div class="drip-j-card" id="drip-step-2">
          <div class="drip-j-step-num">02</div>
          <h4 id="drip-title-2">WhatsApp Reminder</h4>
          <p id="drip-desc-2">Sends item photo, order value, and 1-tap checkout resume button.</p>
          <span class="drip-j-badge" id="drip-badge-2">Direct Cart Link</span>
        </div>
        <div class="drip-j-card" id="drip-step-3">
          <div class="drip-j-step-num">03</div>
          <h4 id="drip-title-3">Dynamic Incentive</h4>
          <p id="drip-desc-3">If unresolved after 4h, sends 10% coupon with countdown expiry.</p>
          <span class="drip-j-badge" id="drip-badge-3">Smart Incentive</span>
        </div>
        <div class="drip-j-card" id="drip-step-4">
          <div class="drip-j-step-num">04</div>
          <h4 id="drip-title-4">Cart Recovered</h4>
          <p id="drip-desc-4">Customer checks out; automatically removed from the drip sequence.</p>
          <span class="drip-j-badge" id="drip-badge-4">+32% Recovery Rate</span>
        </div>
    </div>
  </div>
</section>

<script>
(function() {
  var journeyData = {"cart": [{"title": "Checkout Abandoned", "desc": "Customer leaves cart; webhook triggers sequence after 30-min delay.", "badge": "Webhook Trigger"}, {"title": "WhatsApp Reminder", "desc": "Sends item photo, order value, and 1-tap checkout resume button.", "badge": "Direct Cart Link"}, {"title": "Dynamic Incentive", "desc": "If unresolved after 4h, sends 10% coupon with countdown expiry.", "badge": "Smart Incentive"}, {"title": "Cart Recovered", "desc": "Customer checks out; automatically removed from the drip sequence.", "badge": "+32% Recovery Rate"}], "onboard": [{"title": "User Signup Event", "desc": "New customer registers; welcome WhatsApp message arrives in 60s.", "badge": "Instant Welcome"}, {"title": "Day 1 Quick-Start Guide", "desc": "Shares 2-minute video on launching the first WhatsApp campaign.", "badge": "High Engagement"}, {"title": "Day 3 Proactive Help", "desc": "If user hasn't connected API, chatbot offers guided live help.", "badge": "Zero Churn"}, {"title": "Day 7 Upgrade Milestone", "desc": "User reaches threshold; receives special upgrade offer with link.", "badge": "3.8x Expansion MRR"}], "renewal": [{"title": "Renewal Due Date Trigger", "desc": "Subscription system flags renewal invoice due in 3 days.", "badge": "ERP Auto-Sync"}, {"title": "Friendly WhatsApp Notice", "desc": "Sends polite reminder with PDF bill and 1-tap UPI payment button.", "badge": "In-Chat Payment"}, {"title": "Payment Verification", "desc": "Checks status via webhook; suppresses alert if payment received.", "badge": "Smart Suppression"}, {"title": "Instant GST Receipt", "desc": "Thank-you confirmation and GST invoice sent immediately on success.", "badge": "Zero Overdue Invoices"}]};

  window.dripSwitchJourney = function(scenarioId, btn) {
    var nav = btn.closest('.drip-j-nav');
    if (nav) {
      var tabs = nav.querySelectorAll('.drip-j-tab');
      for (var t = 0; t < tabs.length; t++) {
        tabs[t].classList.remove('active');
      }
    }
    btn.classList.add('active');

    var steps = journeyData[scenarioId];
    if (!steps) return;

    for (var i = 0; i < steps.length; i++) {
      var num = i + 1;
      var titleEl = document.getElementById('drip-title-' + num);
      var descEl = document.getElementById('drip-desc-' + num);
      var badgeEl = document.getElementById('drip-badge-' + num);
      var cardEl = document.getElementById('drip-step-' + num);

      if (titleEl) titleEl.textContent = steps[i].title;
      if (descEl) descEl.textContent = steps[i].desc;
      if (badgeEl) badgeEl.textContent = steps[i].badge;

      if (cardEl) {
        cardEl.style.opacity = '0.4';
        cardEl.style.transform = 'translateY(6px)';
      }
    }

    setTimeout(function() {
      for (var j = 1; j <= 4; j++) {
        var c = document.getElementById('drip-step-' + j);
        if (c) {
          c.style.opacity = '1';
          c.style.transform = 'translateY(0)';
        }
      }
    }, 120);
  };
})();
</script>



<!-- PRODUCT BOTTOM CTA SECTION -->
<style>
.hb-bottom-cta-banner {
  background: linear-gradient(135deg, #1e1b4b 0%, #312e81 40%, #4338ca 100%);
  color: #ffffff;
  padding: 4.5rem 1.5rem;
  text-align: center;
  position: relative;
  overflow: hidden;
}
.hb-bottom-cta-inner {
  max-width: 900px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}
.hb-bottom-cta-title {
  font-size: clamp(2rem, 3.2vw, 2.8rem);
  font-weight: 800;
  letter-spacing: -0.025em;
  margin-bottom: 1rem;
  line-height: 1.25;
  color: #ffffff !important;
}
.hb-bottom-cta-desc {
  font-size: 1.12rem;
  color: #e0e7ff !important;
  max-width: 650px;
  margin: 0 auto 2.25rem;
  line-height: 1.6;
}
.hb-bottom-cta-btns {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 14px;
  flex-wrap: wrap;
}
.hb-cta-btn-primary {
  background: #ffffff !important;
  color: #1e1b4b !important;
  font-weight: 800 !important;
  font-size: 1rem !important;
  padding: 13px 28px !important;
  border-radius: 12px !important;
  text-decoration: none !important;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25) !important;
  transition: transform 0.2s ease, box-shadow 0.2s ease !important;
  display: inline-flex !important;
  align-items: center !important;
}
.hb-cta-btn-primary:hover {
  transform: translateY(-2px) !important;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.35) !important;
}
.hb-cta-btn-secondary {
  background: rgba(255, 255, 255, 0.12) !important;
  color: #ffffff !important;
  border: 1.5px solid rgba(255, 255, 255, 0.35) !important;
  font-weight: 700 !important;
  font-size: 1rem !important;
  padding: 13px 26px !important;
  border-radius: 12px !important;
  cursor: pointer !important;
  transition: all 0.2s ease !important;
}
.hb-cta-btn-secondary:hover {
  background: rgba(255, 255, 255, 0.22) !important;
}
.hb-cta-btn-verified {
  background: rgba(16, 185, 129, 0.2) !important;
  color: #6ee7b7 !important;
  border: 1.5px solid rgba(16, 185, 129, 0.45) !important;
  font-weight: 700 !important;
  font-size: 1rem !important;
  padding: 13px 26px !important;
  border-radius: 12px !important;
  text-decoration: none !important;
  display: inline-flex !important;
  align-items: center !important;
  gap: 7px !important;
  transition: all 0.2s ease !important;
}
.hb-cta-btn-verified:hover {
  background: rgba(16, 185, 129, 0.35) !important;
  color: #ffffff !important;
}
</style>

<section class="hb-bottom-cta-banner">
  <div class="hb-bottom-cta-inner">
    <div style="font-size:0.82rem;font-weight:800;letter-spacing:0.12em;text-transform:uppercase;color:#a5b4fc;margin-bottom:0.75rem;">
      SUPERCHARGE YOUR WORKFLOW
    </div>
    <h2 class="hb-bottom-cta-title">Ready to transform your business with WhatsApp Automation & Drip Campaigns?</h2>
    <p class="hb-bottom-cta-desc">
      Join fast-growing companies that rely on HelloBotz for official WhatsApp Business API automation, intelligent lead handling, and verified credibility.
    </p>
    <div class="hb-bottom-cta-btns">
      <a href="https://app.hellobotz.com/auth/register" class="hb-cta-btn-primary">
        Start Free Trial →
      </a>
      <button type="button" class="hb-cta-btn-secondary btn-demo-open">
        Book a Live Demo
      </button>
      <a href="#contact-section" class="hb-cta-btn-verified">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
        Get Verified
      </a>
    </div>
  </div>
</section>


</div>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
