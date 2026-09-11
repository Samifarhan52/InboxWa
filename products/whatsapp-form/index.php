<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'WhatsApp Forms & Native Meta Flows | In-Chat Lead Forms | InboxWa';
$pageDescription = 'Build interactive data collection forms that live inside WhatsApp chats. Powered by native Meta Flows with zero redirects, drag & drop builder, and instant CRM sync.';
$canonicalUrl = 'https://inboxwa.com/products/whatsapp-form/';
$ogImage = 'assets/images/products/whatsapp-form/hero.png';

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
          WhatsApp Forms
        </div>
        <h1 class="prod-hero-title">
          Interactive Forms that Live <span class="prod-gradient-text">Inside WhatsApp Chats</span>
        </h1>
        <p class="prod-hero-desc">
          Design and deploy native data collection forms powered by Meta Flows. Capture leads, book services, collect feedback, and trigger automations without redirecting users to external browser links.
        </p>
        <div class="prod-hero-ctas">
          <a href="<?php echo $bp; ?>auth/register" class="prod-btn-primary">
            Build Your First Form
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
          <a href="#capabilities" class="prod-btn-secondary">
            Explore Capabilities
          </a>
        </div>
        <div class="prod-bullets">
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
            Zero page redirects
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
            Drag & drop visual builder
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
            Keyword auto-trigger
          </div>
        </div>
      </div>
      <div class="prod-hero-media">
        <div class="prod-hero-media-wrapper">
          <img src="<?php echo $bp; ?>assets/images/products/whatsapp-form/hero.png" alt="WhatsApp Native Chat Forms" class="prod-hero-media-img" width="900" height="400">
        </div>
      </div>
    </div>
  </section>

  <!-- 3-Step Workflow Section -->
  <section class="prod-section prod-section-alt" id="workflow">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">Workflow</span>
        <h2 class="prod-section-title">From design to delivery in three steps</h2>
        <p class="prod-section-desc">
          A streamlined pipeline to create and deploy forms inside WhatsApp.
        </p>
      </div>
      <div class="prod-steps-grid">
        <div class="prod-step-card">
          <div class="prod-step-media">
            <img src="<?php echo $bp; ?>assets/images/products/whatsapp-form/step-design.png" alt="Design with drag and drop" class="prod-step-img">
          </div>
          <div class="prod-step-body">
            <span class="prod-step-num">Step 01</span>
            <h3 class="prod-step-title">Design with drag & drop</h3>
            <p class="prod-step-desc">Use the visual builder to add text inputs, email, phone, dropdowns, checkboxes, and date pickers. Configure field labels, placeholders, and required validation on any field.</p>
          </div>
        </div>
        <div class="prod-step-card">
          <div class="prod-step-media">
            <img src="<?php echo $bp; ?>assets/images/products/whatsapp-form/step-publish.png" alt="Publish to Meta Flows" class="prod-step-img">
          </div>
          <div class="prod-step-body">
            <span class="prod-step-num">Step 02</span>
            <h3 class="prod-step-title">Publish to Meta Flows</h3>
            <p class="prod-step-desc">Once designed, publish your form to Meta's native interactive form system. Define submission settings — custom success messages and button text — to guide users after they submit.</p>
          </div>
        </div>
        <div class="prod-step-card">
          <div class="prod-step-media">
            <img src="<?php echo $bp; ?>assets/images/products/whatsapp-form/step-automate.png" alt="Share and automate delivery" class="prod-step-img">
          </div>
          <div class="prod-step-body">
            <span class="prod-step-num">Step 03</span>
            <h3 class="prod-step-title">Share & automate delivery</h3>
            <p class="prod-step-desc">Package your form into a Response Resource with a custom CTA button. Deploy it manually in chats or automate delivery via Keyword Triggers — when users type matching words, the form sends automatically.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Capabilities Section (6 Grid) -->
  <section class="prod-section" id="capabilities">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">Capabilities</span>
        <h2 class="prod-section-title">Everything you need to build powerful forms</h2>
        <p class="prod-section-desc">
          High-performance data capture built directly into the WhatsApp messaging engine.
        </p>
      </div>
      <div class="prod-grid-3">
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
          </div>
          <h3 class="prod-card-title">Drag & Drop Builder</h3>
          <p class="prod-card-desc">Design forms visually — add, reorder, and configure fields in seconds. No coding required.</p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
          </div>
          <h3 class="prod-card-title">Rich Field Types</h3>
          <p class="prod-card-desc">Text, Text Area, Number, Email, Phone, Dropdown, Single Choice, Checkbox, and Date Picker fields.</p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 0 0-10 10c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2z"></path></svg>
          </div>
          <h3 class="prod-card-title">Meta Flows Powered</h3>
          <p class="prod-card-desc">Forms run on Meta's native interactive data collection system directly inside WhatsApp.</p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
          </div>
          <h3 class="prod-card-title">Keyword Triggers</h3>
          <p class="prod-card-desc">Automatically send forms when users type specific keywords — completely hands-free.</p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>
          </div>
          <h3 class="prod-card-title">Response Resources</h3>
          <p class="prod-card-desc">Package forms with greeting text and custom CTA buttons for seamless sharing across chats.</p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
          </div>
          <h3 class="prod-card-title">Real-Time Submissions</h3>
          <p class="prod-card-desc">Form responses are saved instantly to your CRM and can trigger webhook actions immediately.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Field Palette Section (8 Components) -->
  <section class="prod-section prod-section-alt" id="field-palette">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">Field Palette</span>
        <h2 class="prod-section-title">Available form components</h2>
        <p class="prod-section-desc">
          Every field type you need to capture structured data.
        </p>
      </div>
      <div class="prod-grid-4">
        <div class="prod-card" style="padding: 1.25rem;">
          <h4 style="font-size: 1rem; color: #0f172a; margin-bottom: 0.25rem;">Text & Text Area</h4>
          <p style="font-size: 0.85rem; color: #64748b;">Single & multi-line inputs</p>
        </div>
        <div class="prod-card" style="padding: 1.25rem;">
          <h4 style="font-size: 1rem; color: #0f172a; margin-bottom: 0.25rem;">Email</h4>
          <p style="font-size: 0.85rem; color: #64748b;">Validated email field</p>
        </div>
        <div class="prod-card" style="padding: 1.25rem;">
          <h4 style="font-size: 1rem; color: #0f172a; margin-bottom: 0.25rem;">Phone</h4>
          <p style="font-size: 0.85rem; color: #64748b;">Validated number input</p>
        </div>
        <div class="prod-card" style="padding: 1.25rem;">
          <h4 style="font-size: 1rem; color: #0f172a; margin-bottom: 0.25rem;">Dropdown</h4>
          <p style="font-size: 0.85rem; color: #64748b;">Searchable select list</p>
        </div>
        <div class="prod-card" style="padding: 1.25rem;">
          <h4 style="font-size: 1rem; color: #0f172a; margin-bottom: 0.25rem;">Single Choice</h4>
          <p style="font-size: 0.85rem; color: #64748b;">Radio button options</p>
        </div>
        <div class="prod-card" style="padding: 1.25rem;">
          <h4 style="font-size: 1rem; color: #0f172a; margin-bottom: 0.25rem;">Checkbox</h4>
          <p style="font-size: 0.85rem; color: #64748b;">Multi-select checkboxes</p>
        </div>
        <div class="prod-card" style="padding: 1.25rem;">
          <h4 style="font-size: 1rem; color: #0f172a; margin-bottom: 0.25rem;">Date Picker</h4>
          <p style="font-size: 0.85rem; color: #64748b;">Calendar date selector</p>
        </div>
        <div class="prod-card" style="padding: 1.25rem;">
          <h4 style="font-size: 1rem; color: #0f172a; margin-bottom: 0.25rem;">Number</h4>
          <p style="font-size: 0.85rem; color: #64748b;">Integer or decimal input</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs Section -->
  <section class="prod-section" id="faqs">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">FAQs</span>
        <h2 class="prod-section-title">Questions about WhatsApp Forms?</h2>
        <p class="prod-section-desc">
          Learn how native in-chat forms eliminate drop-offs and collect verified data.
        </p>
      </div>
      <div class="prod-faq-container">
        <div class="prod-faq-list">
          <div class="prod-faq-item active">
            <button type="button" class="prod-faq-question">
              How do WhatsApp Forms differ from regular web forms?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              Unlike traditional web forms that redirect users to external pages, WhatsApp Forms render directly inside the chat conversation. This eliminates friction, reduces drop-offs, and achieves significantly higher completion rates — users never leave the familiar WhatsApp interface.
            </div>
          </div>
          <div class="prod-faq-item">
            <button type="button" class="prod-faq-question">
              Can I trigger forms automatically based on user messages?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              Absolutely. Using Keyword Triggers, you can configure specific keywords (e.g. "Apply", "Register", "Book") to automatically deliver your form. When a user sends a matching keyword, the system responds instantly with the interactive form — no manual intervention needed.
            </div>
          </div>
          <div class="prod-faq-item">
            <button type="button" class="prod-faq-question">
              What field types are available in the form builder?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              The visual builder supports Text Input, Text Area, Number, Email, Phone, Dropdown, Single Choice (radio), Checkbox, and Date Picker. Each field can be configured with a display label, placeholder text, and required validation toggle.
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
        <h2 class="prod-cta-title">Start capturing verified leads in chat</h2>
        <p class="prod-cta-subtitle">
          Eliminate web redirects and boost your lead form completion rates by 3.5x.
        </p>
        <div class="prod-cta-actions">
          <a href="<?php echo $bp; ?>auth/register" class="prod-cta-btn-white">
            Build Your First Form
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
