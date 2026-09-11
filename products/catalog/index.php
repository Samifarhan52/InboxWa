<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Product Catalog & WhatsApp Storefront Commerce | InboxWa';
$pageDescription = 'Turn WhatsApp into a direct storefront with native product catalogs, multi-item carts, inventory sync with Shopify/WooCommerce, and instant payment checkout links.';
$canonicalUrl = 'https://inboxwa.com/products/catalog/';
$ogImage = 'assets/images/products/catalog/hero.png';

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
          WhatsApp Commerce
        </div>
        <h1 class="prod-hero-title">
          Turn WhatsApp into a Direct <span class="prod-gradient-text">Storefront for Checkout</span>
        </h1>
        <p class="prod-hero-desc">
          Showcase physical items, service packages, and menus directly inside customer chats. Allow clients to build shopping carts and finalize orders with automated payment integrations.
        </p>
        <div class="prod-hero-ctas">
          <a href="<?php echo $bp; ?>auth/register" class="prod-btn-primary">
            Start Free Trial
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
          <a href="#capabilities" class="prod-btn-secondary">
            Explore Capabilities
          </a>
        </div>
        <div class="prod-bullets">
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
            Shopify & WooCommerce Sync
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
            Instant in-chat payment links
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
            0% transaction fees on InboxWa
          </div>
        </div>
      </div>
      <div class="prod-hero-media">
        <div class="prod-hero-media-wrapper">
          <img src="<?php echo $bp; ?>assets/images/products/catalog/hero.png" alt="WhatsApp Product Catalog Storefront" class="prod-hero-media-img" width="1080" height="1080">
        </div>
      </div>
    </div>
  </section>

  <!-- Use Cases Showcase -->
  <section class="prod-section prod-section-alt" id="use-cases">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">USE CASES</span>
        <h2 class="prod-section-title">Real-Time Catalog Integration Examples</h2>
        <p class="prod-section-desc">
          See how top industries utilize synced digital catalogs on WhatsApp to convert conversations into instant orders.
        </p>
      </div>

      <div class="prod-showcase-box">
        <div class="prod-showcase-grid">
          <div class="prod-tabs-list" id="catalog-tabs">
            <button type="button" class="prod-tab-item active" data-img="<?php echo $bp; ?>assets/images/products/catalog/usecase-shopify.png">
              <div class="prod-tab-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
              </div>
              <div>
                <div class="prod-tab-text-title">01. E-Commerce Checkout</div>
                <div class="prod-tab-text-desc">Retailers link Shopify databases to automatically reflect pricing and inventory levels on WhatsApp.</div>
              </div>
            </button>
            <button type="button" class="prod-tab-item" data-img="<?php echo $bp; ?>assets/images/products/catalog/usecase-restaurant.png">
              <div class="prod-tab-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
              </div>
              <div>
                <div class="prod-tab-text-title">02. Restaurant Digital Ordering</div>
                <div class="prod-tab-text-desc">Interactive menus with sizes and spice customizations. Orders print directly to kitchen tickets.</div>
              </div>
            </button>
            <button type="button" class="prod-tab-item" data-img="<?php echo $bp; ?>assets/images/products/catalog/usecase-consulting.png">
              <div class="prod-tab-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
              </div>
              <div>
                <div class="prod-tab-text-title">03. Professional Service Packages</div>
                <div class="prod-tab-text-desc">Agencies and coaches showcase consultation retainers and audits with one-tap payment checkout.</div>
              </div>
            </button>
          </div>
          <div class="prod-tab-preview-pane">
            <img id="catalog-preview-img" src="<?php echo $bp; ?>assets/images/products/catalog/usecase-shopify.png" alt="Catalog Use Case Preview" class="prod-preview-img">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Capabilities Section -->
  <section class="prod-section" id="capabilities">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">Catalog Capabilities</span>
        <h2 class="prod-section-title">Everything You Need to Power Mobile Commerce</h2>
        <p class="prod-section-desc">
          Built-in e-commerce infrastructure designed for frictionless WhatsApp shopping.
        </p>
      </div>
      <div class="prod-grid-4">
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 16 12 12 8 16"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path></svg>
          </div>
          <h3 class="prod-card-title">Meta Catalog Sync</h3>
          <p class="prod-card-desc">
            Instantly sync existing products from Meta Business Manager or upload spreadsheet directories directly.
          </p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
          </div>
          <h3 class="prod-card-title">Dynamic Carts</h3>
          <p class="prod-card-desc">
            Allow clients to pick multiple items, increment quantities, and submit complete orders without leaving the chat viewport.
          </p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
          </div>
          <h3 class="prod-card-title">Auto-Invoicing</h3>
          <p class="prod-card-desc">
            Connect Stripe, Razorpay, or PayPal to automatically dispatch secure checkout links once items are compiled in the cart.
          </p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg>
          </div>
          <h3 class="prod-card-title">Abandoned Cart Recovery</h3>
          <p class="prod-card-desc">
            Automatically re-engage shoppers who added catalog items to their cart but left without completing checkout.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs Section -->
  <section class="prod-section prod-section-alt" id="faqs">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">FAQs</span>
        <h2 class="prod-section-title">Questions about Catalog Integrations?</h2>
        <p class="prod-section-desc">
          Learn how WhatsApp catalogs, payment gateways, and inventory syncing work in InboxWa.
        </p>
      </div>
      <div class="prod-faq-container">
        <div class="prod-faq-list">
          <div class="prod-faq-item active">
            <button type="button" class="prod-faq-question">
              Is a Meta Business Manager catalog required?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              Yes, to use official WhatsApp product collections, you sync your products to Meta Catalog Manager. The InboxWa app simplifies this by giving you a direct API linkage to upload items from your local spreadsheet inventory in seconds.
            </div>
          </div>
          <div class="prod-faq-item">
            <button type="button" class="prod-faq-question">
              How do customers pay once they submit their orders?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              Once the order checkout is compiled in chat, the bot triggers an automated Stripe, Razorpay, or PayPal payment transaction link. Once the customer completes the payment, the bot instantly dispatches a confirmation message and updates the order status.
            </div>
          </div>
          <div class="prod-faq-item">
            <button type="button" class="prod-faq-question">
              Can I trigger chatbot automations when a customer buys?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              Absolutely. When a customer adds items or checkouts, it fires webhook signals that can trigger specific automation builders (like assigning tags, enrolling the contact in automated email flows, or routing them to human inbox specialists).
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
        <h2 class="prod-cta-title">Start Selling Directly on WhatsApp</h2>
        <p class="prod-cta-subtitle">
          Turn passive conversations into active checkouts with automated digital catalogs.
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
  var tabs = document.querySelectorAll('#catalog-tabs .prod-tab-item');
  var previewImg = document.getElementById('catalog-preview-img');
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

<?php include __DIR__ . '/../../includes/footer.php'; ?>
