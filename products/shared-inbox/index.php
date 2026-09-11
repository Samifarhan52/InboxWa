<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Shared Team Inbox | Multi-Agent WhatsApp & Omnichannel Chat | InboxWa';
$pageDescription = 'One unified shared team inbox for WhatsApp, Instagram, Facebook, and Telegram. Collaborate with multi-agent routing, contact masking, internal notes, and collision detection.';
$canonicalUrl = 'https://inboxwa.com/products/shared-inbox/';
$ogImage = 'assets/images/products/shared-inbox/hero.png';

include __DIR__ . '/../../includes/header.php';
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
          Omnichannel Team Hub
        </div>
        <h1 class="prod-hero-title">
          One Unified Shared Inbox for <span class="prod-gradient-text">Collaboration</span>
        </h1>
        <p class="prod-hero-desc">
          Empower your customer-facing teams with a unified inbox to manage conversations across WhatsApp, Instagram, Facebook, and Telegram — all in one collaborative workspace.
        </p>
        <div class="prod-hero-ctas">
          <a href="<?php echo $bp; ?>auth/register" class="prod-btn-primary">
            Start Free Trial
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
          <a href="#features" class="prod-btn-secondary">
            Explore Features
          </a>
        </div>
        <div class="prod-bullets">
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </span>
            Multi-Agent Support
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </span>
            Role-Based Permissions
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </span>
            Private Team Notes
          </div>
        </div>
      </div>
      <div class="prod-hero-media">
        <div class="prod-hero-media-wrapper">
          <img src="<?php echo $bp; ?>assets/images/products/shared-inbox/hero.png" alt="InboxWa Shared Team Inbox" class="prod-hero-media-img" width="1480" height="814">
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive Sandbox Showcase -->
  <section class="prod-section prod-section-alt" id="sandbox">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">Interactive Sandbox</span>
        <h2 class="prod-section-title">Take the Team Inbox for a Test Drive</h2>
        <p class="prod-section-desc">
          Experience the speed and simplicity of our multi-agent collaboration interface designed for rapid ticket resolution.
        </p>
      </div>
      <div class="prod-hero-media" style="max-width: 1040px; margin: 0 auto;">
        <div class="prod-hero-media-wrapper">
          <img src="<?php echo $bp; ?>assets/images/products/shared-inbox/sandbox.png" alt="InboxWa Live Team Sandbox" class="prod-hero-media-img" width="1080" height="1080">
        </div>
      </div>
    </div>
  </section>

  <!-- Features Grid -->
  <section class="prod-section" id="features">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">Engineered for Results</span>
        <h2 class="prod-section-title">Everything You Need to Automate Customer Success</h2>
        <p class="prod-section-desc">
          Purpose-built tools that turn high message volume into organized team workflows.
        </p>
      </div>
      <div class="prod-grid-4">
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
          </div>
          <h3 class="prod-card-title">Smart Message Routing</h3>
          <p class="prod-card-desc">
            Automatically distribute incoming chats to the right agent based on language, department, or availability.
          </p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
          </div>
          <h3 class="prod-card-title">Contact Masking & Privacy</h3>
          <p class="prod-card-desc">
            Protect your customer lists by masking phone numbers so agents only see what they need to respond.
          </p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
          </div>
          <h3 class="prod-card-title">Collision Detection</h3>
          <p class="prod-card-desc">
            Real-time indicators show when another team member is already viewing or typing in a conversation.
          </p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
          </div>
          <h3 class="prod-card-title">Canned Responses & Macros</h3>
          <p class="prod-card-desc">
            Answer repetitive questions in seconds with customizable snippet shortcuts and media attachments.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Collaboration Section -->
  <section class="prod-section prod-section-alt">
    <div class="prod-container">
      <div class="prod-hero-grid">
        <div class="prod-hero-content">
          <span class="prod-badge">
            <span class="prod-badge-dot"></span>
            Team Collaboration
          </span>
          <h2 class="prod-section-title">Build Better Collaborations Behind the Scenes</h2>
          <p class="prod-hero-desc">
            Resolve complex customer issues faster with internal notes, mentions, and seamless handoffs that keep everyone aligned without messy external chat tools.
          </p>
          <div class="prod-bullets" style="flex-direction: column; align-items: flex-start; gap: 0.75rem;">
            <div class="prod-bullet-item">
              <span class="prod-bullet-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
              Leave private yellow notes visible only to teammates
            </div>
            <div class="prod-bullet-item">
              <span class="prod-bullet-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
              Tag specific agents to request instant input on tickets
            </div>
            <div class="prod-bullet-item">
              <span class="prod-bullet-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
              Hand off conversations across shifts with full audit history
            </div>
          </div>
        </div>
        <div class="prod-hero-media">
          <div class="prod-hero-media-wrapper">
            <img src="<?php echo $bp; ?>assets/images/products/shared-inbox/team.png" alt="Team Collaboration Workspace" class="prod-hero-media-img" width="1080" height="1080">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Metrics Counter Grid -->
  <section class="prod-section">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">Performance Impact</span>
        <h2 class="prod-section-title">Grow Your Business on Solid Numbers</h2>
      </div>
      <div class="prod-grid-3">
        <div class="prod-card" style="text-align: center; align-items: center;">
          <div style="font-size: 3rem; font-weight: 800; color: #7c3aed; line-height: 1; margin-bottom: 0.5rem;">+65%</div>
          <h3 class="prod-card-title">Faster Response Time</h3>
          <p class="prod-card-desc">Resolve inquiries in minutes with automated routing and collision detection.</p>
        </div>
        <div class="prod-card" style="text-align: center; align-items: center;">
          <div style="font-size: 3rem; font-weight: 800; color: #06b6d4; line-height: 1; margin-bottom: 0.5rem;">4.8/5</div>
          <h3 class="prod-card-title">Customer Satisfaction</h3>
          <p class="prod-card-desc">Deliver prompt, contextual assistance across all conversational channels.</p>
        </div>
        <div class="prod-card" style="text-align: center; align-items: center;">
          <div style="font-size: 3rem; font-weight: 800; color: #10b981; line-height: 1; margin-bottom: 0.5rem;">0</div>
          <h3 class="prod-card-title">Missed Messages</h3>
          <p class="prod-card-desc">Shared visibility prevents messages from slipping through shifts unhandled.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs Accordion -->
  <section class="prod-section prod-section-alt" id="faqs">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">FAQs</span>
        <h2 class="prod-section-title">Got Questions about the Shared Inbox?</h2>
        <p class="prod-section-desc">
          Learn how multi-agent login, permissions, and internal privacy work in InboxWa.
        </p>
      </div>
      <div class="prod-faq-container">
        <div class="prod-faq-list">
          <div class="prod-faq-item active">
            <button type="button" class="prod-faq-question">
              Do agents need their own separate mobile devices?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              No. The entire workspace runs on a single official WhatsApp Business API profile or social page. Support agents login through their own dashboard accounts and share access dynamically.
            </div>
          </div>
          <div class="prod-faq-item">
            <button type="button" class="prod-faq-question">
              How does the contact masking / privacy control feature work?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              Admins can enable contact masking in settings. Once activated, phone numbers are masked on the screen (e.g. +1 •••• ••-9922). Agents can send and receive texts, but cannot view or export complete contact numbers.
            </div>
          </div>
          <div class="prod-faq-item">
            <button type="button" class="prod-faq-question">
              Can we write notes to other team members during a chat?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              Yes. Private Internal Notes can be written directly on the chat flow. They are highlighted with a distinct yellow theme and are completely invisible to customers.
            </div>
          </div>
          <div class="prod-faq-item">
            <button type="button" class="prod-faq-question">
              Can I transfer a conversation to another department?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              Yes, with one click you can assign any active chat to specific agents or queues (Sales, Support, Billing) along with private notes explaining the customer context.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA Box -->
  <section class="prod-section">
    <div class="prod-container">
      <div class="prod-cta-box">
        <div class="prod-cta-glow"></div>
        <h2 class="prod-cta-title">Unify your customer communications today</h2>
        <p class="prod-cta-subtitle">
          Give your support and sales team one shared superpower to resolve queries 65% faster.
        </p>
        <div class="prod-cta-actions">
          <a href="<?php echo $bp; ?>auth/register" class="prod-cta-btn-white">
            Start Free Trial
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

<?php include __DIR__ . '/../../includes/footer.php'; ?>
