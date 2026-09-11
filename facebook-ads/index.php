<?php
$basePath = '../';
$bp = '../';
require_once __DIR__ . '/../config/cms.php';

$pageTitle = 'Click to WhatsApp Ads (CTWA) | Facebook & Instagram Ads | InboxWa';
$pageDescription = 'Turn Facebook & Instagram Ads into live WhatsApp conversations. Launch CTWA campaigns with a 3-step wizard, targeted ad sets, automated welcome messages, and real-time ROAS analytics.';
$canonicalUrl = 'https://inboxwa.com/facebook-ads/';
$ogImage = 'assets/images/products/ctwa/hero.png';

include __DIR__ . '/../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/product-pages.css">

<div class="prod-page">
  <div class="prod-ambient-1"></div>
  <div class="prod-ambient-2"></div>

  <!-- Hero Section -->
  <section class="prod-hero">
    <div class="prod-hero-grid">
      <div class="prod-hero-content">
        <div class="prod-badge">
          <span class="prod-badge-dot"></span>
          Click to WhatsApp Ads
        </div>
        <h1 class="prod-hero-title">
          Turn Facebook & Instagram Ads into <span class="prod-gradient-text">Live WhatsApp Conversations</span>
        </h1>
        <p class="prod-hero-desc">
          Create, manage, and optimize ad campaigns that open WhatsApp chats directly. Target high-intent audiences on Meta platforms, capture verified phone numbers instantly, and convert clicks into paying customers.
        </p>
        <div class="prod-hero-ctas">
          <a href="<?php echo $bp; ?>auth/register" class="prod-btn-primary">
            Launch Your First Campaign
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
          <a href="#ctwa-features" class="prod-btn-secondary">
            Explore Features
          </a>
        </div>
        <div class="prod-bullets">
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
            Facebook & Instagram
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
            3-Step Wizard
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
            Real-Time Analytics
          </div>
        </div>
      </div>
      <div class="prod-hero-media">
        <div class="prod-hero-media-wrapper">
          <img src="<?php echo $bp; ?>assets/images/products/ctwa/hero.png" alt="Click to WhatsApp Ads Dashboard" class="prod-hero-media-img" width="900" height="400">
        </div>
      </div>
    </div>
  </section>

  <!-- Hierarchy Structure Section -->
  <section class="prod-section prod-section-alt" id="structure">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">Structure</span>
        <h2 class="prod-section-title">Campaign hierarchy, visualized</h2>
        <p class="prod-section-desc">
          Three levels that define your ad strategy — from broad targeting to precise creative execution.
        </p>
      </div>
      <div class="prod-grid-3">
        <div class="prod-card" style="text-align: center; align-items: center;">
          <div class="prod-card-icon" style="background:#ede9fe;color:#7c3aed">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><line x1="2" y1="12" x2="22" y2="12"></line></svg>
          </div>
          <span style="font-size: 0.78rem; font-weight: 800; color: #7c3aed; text-transform: uppercase; margin-bottom: 0.35rem;">Level 01</span>
          <h3 class="prod-card-title">Campaigns</h3>
          <p class="prod-card-desc">Define objective, budget & schedule. Choose from engagement, traffic, awareness, or leads goals.</p>
        </div>
        <div class="prod-card" style="text-align: center; align-items: center;">
          <div class="prod-card-icon" style="background:#e0f2fe;color:#0284c7">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <span style="font-size: 0.78rem; font-weight: 800; color: #0284c7; text-transform: uppercase; margin-bottom: 0.35rem;">Level 02</span>
          <h3 class="prod-card-title">Ad Sets</h3>
          <p class="prod-card-desc">Target by location, age, gender & platform. Set bids, scheduling, and delivery optimization.</p>
        </div>
        <div class="prod-card" style="text-align: center; align-items: center;">
          <div class="prod-card-icon" style="background:#dcfce7;color:#16a34a">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
          </div>
          <span style="font-size: 0.78rem; font-weight: 800; color: #16a34a; text-transform: uppercase; margin-bottom: 0.35rem;">Level 03</span>
          <h3 class="prod-card-title">Ads</h3>
          <p class="prod-card-desc">Create the creative — image, video, or carousel — with WhatsApp CTA button and welcome experience.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Interactive Showcase -->
  <section class="prod-section" id="ctwa-features">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">Features</span>
        <h2 class="prod-section-title">Built for campaign success</h2>
        <p class="prod-section-desc">
          Everything you need to launch and optimize profitable Click to WhatsApp ad funnels.
        </p>
      </div>

      <div class="prod-showcase-box">
        <div class="prod-showcase-grid">
          <div class="prod-tabs-list" id="ctwa-tabs">
            <button type="button" class="prod-tab-item active" data-img="<?php echo $bp; ?>assets/images/products/ctwa/feature-sync.png">
              <div class="prod-tab-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
              </div>
              <div>
                <div class="prod-tab-text-title">Asset Synchronization</div>
                <div class="prod-tab-text-desc">Connect Facebook Pages and Instagram accounts in one click. Automatically sync ad accounts.</div>
              </div>
            </button>
            <button type="button" class="prod-tab-item" data-img="<?php echo $bp; ?>assets/images/products/ctwa/feature-wizard.png">
              <div class="prod-tab-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
              </div>
              <div>
                <div class="prod-tab-text-title">3-Step Campaign Wizard</div>
                <div class="prod-tab-text-desc">Guided walkthrough: campaign details, ad set targeting, and creative with WhatsApp CTA.</div>
              </div>
            </button>
            <button type="button" class="prod-tab-item" data-img="<?php echo $bp; ?>assets/images/products/ctwa/feature-targeting.png">
              <div class="prod-tab-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              </div>
              <div>
                <div class="prod-tab-text-title">Location & Demographic Targeting</div>
                <div class="prod-tab-text-desc">Target by country, age range, gender, and platform. Set daily budgets and optimization goals.</div>
              </div>
            </button>
            <button type="button" class="prod-tab-item" data-img="<?php echo $bp; ?>assets/images/products/ctwa/feature-formats.png">
              <div class="prod-tab-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
              </div>
              <div>
                <div class="prod-tab-text-title">Multiple Creative Formats</div>
                <div class="prod-tab-text-desc">Single image, video, and carousel ads with custom primary text, headlines, and descriptions.</div>
              </div>
            </button>
            <button type="button" class="prod-tab-item" data-img="<?php echo $bp; ?>assets/images/products/ctwa/feature-welcome.png">
              <div class="prod-tab-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
              </div>
              <div>
                <div class="prod-tab-text-title">WhatsApp Welcome Experience</div>
                <div class="prod-tab-text-desc">Pre-filled greeting messages and ice breaker suggestions that prompt the user to start chatting.</div>
              </div>
            </button>
            <button type="button" class="prod-tab-item" data-img="<?php echo $bp; ?>assets/images/products/ctwa/feature-analytics.png">
              <div class="prod-tab-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
              </div>
              <div>
                <div class="prod-tab-text-title">Real-Time Performance Analytics</div>
                <div class="prod-tab-text-desc">Track spend, impressions, clicks, conversations started, cost-per-result, and CTR across campaigns.</div>
              </div>
            </button>
          </div>
          <div class="prod-tab-preview-pane">
            <img id="ctwa-preview-img" src="<?php echo $bp; ?>assets/images/products/ctwa/feature-sync.png" alt="CTWA Feature Preview" class="prod-preview-img">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3 Simple Steps to Launch -->
  <section class="prod-section prod-section-alt" id="wizard">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">Wizard</span>
        <h2 class="prod-section-title">Three simple steps to launch</h2>
        <p class="prod-section-desc">From concept to live campaign in minutes.</p>
      </div>
      <div class="prod-steps-grid">
        <div class="prod-step-card">
          <div class="prod-step-body" style="padding: 2.25rem;">
            <span class="prod-step-num">Step 01</span>
            <h3 class="prod-step-title">Campaign Setup</h3>
            <p class="prod-step-desc">Choose your campaign objective — engagement, traffic, awareness, or leads. Define the campaign name, set daily budget, select the special ad category, and pick your optimization goal.</p>
          </div>
        </div>
        <div class="prod-step-card">
          <div class="prod-step-body" style="padding: 2.25rem;">
            <span class="prod-step-num">Step 02</span>
            <h3 class="prod-step-title">Targeting Configuration</h3>
            <p class="prod-step-desc">Define who sees your ads. Set targeting by gender, age range, and platforms (Facebook, Instagram, or both). Configure ad set name, daily budget, schedule start/end times, and billing event.</p>
          </div>
        </div>
        <div class="prod-step-card">
          <div class="prod-step-body" style="padding: 2.25rem;">
            <span class="prod-step-num">Step 03</span>
            <h3 class="prod-step-title">Creative & Welcome</h3>
            <p class="prod-step-desc">Upload your ad creative — image, video, or carousel. Add the WhatsApp CTA button with your WhatsApp Business number. Configure the Welcome Experience with greeting messages and ice breakers.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs Section -->
  <section class="prod-section" id="faqs">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">FAQs</span>
        <h2 class="prod-section-title">Click to WhatsApp Ads — common questions</h2>
        <p class="prod-section-desc">
          Everything you need to know about setting up Facebook & Instagram ads that open WhatsApp.
        </p>
      </div>
      <div class="prod-faq-container">
        <div class="prod-faq-list">
          <div class="prod-faq-item active">
            <button type="button" class="prod-faq-question">
              What is Click to WhatsApp Ads and how does it work?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              Click to WhatsApp Ads are Facebook and Instagram advertisements that include a Call-to-Action button opening a WhatsApp chat conversation. When users tap the ad CTA, they're taken directly into a WhatsApp chat with your business — no forms, no landing pages, no friction.
            </div>
          </div>
          <div class="prod-faq-item">
            <button type="button" class="prod-faq-question">
              Do I need a Facebook Business Manager to create ads?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              Yes. Our system connects to your existing Facebook Business Manager to sync your ad accounts, Facebook Pages, and Instagram professional accounts. Once connected, you can create, manage, and track campaigns directly from our dashboard without ever opening Ads Manager.
            </div>
          </div>
          <div class="prod-faq-item">
            <button type="button" class="prod-faq-question">
              What ad formats and creative types are supported?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              We support image, video, and carousel ad formats. Each creative can include a WhatsApp CTA button and be paired with a Welcome Experience — a customizable greeting message with ice breaker suggestion buttons that appear when users land in your WhatsApp chat.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA Box -->
  <section class="prod-section prod-section-alt">
    <div class="prod-container">
      <div class="prod-cta-box">
        <div class="prod-cta-glow"></div>
        <h2 class="prod-cta-title">Turn ad clicks into direct conversations</h2>
        <p class="prod-cta-subtitle">
          Drive 3x more qualified leads from Facebook and Instagram with instant WhatsApp chat openings.
        </p>
        <div class="prod-cta-actions">
          <a href="<?php echo $bp; ?>auth/register" class="prod-cta-btn-white">
            Launch Your First Campaign
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
          <a href="<?php echo $bp; ?>#contact-section" class="prod-cta-btn-trans">
            Book a Demo
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var tabs = document.querySelectorAll('#ctwa-tabs .prod-tab-item');
  var previewImg = document.getElementById('ctwa-preview-img');
  tabs.forEach(function(tab) {
    tab.addEventListener('click', function() {
      tabs.forEach(function(t) { t.classList.remove('active'); });
      tab.classList.add('active');
      var newSrc = tab.getAttribute('data-img');
      if (newSrc && previewImg) {
        previewImg.style.opacity = '0.3';
        previewImg.style.transform = 'scale(0.98)';
        setTimeout(function() {
          previewImg.src = newSrc;
          previewImg.style.opacity = '1';
          previewImg.style.transform = 'scale(1)';
        }, 150);
      }
    });
  });

  var faqItems = document.querySelectorAll('.prod-faq-item');
  faqItems.forEach(function(item) {
    var btn = item.querySelector('.prod-faq-question');
    btn.addEventListener('click', function() {
      var isActive = item.classList.contains('active');
      faqItems.forEach(function(fi) { fi.classList.remove('active'); });
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });
});
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
