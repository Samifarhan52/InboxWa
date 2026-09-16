<?php
$basePath = "../../";
$bp = "../../";
require_once __DIR__ . "/../../config/cms.php";

$pageTitle = "In-Chat Payments on WhatsApp – Collect & Confirm Orders | HelloBotz";
$pageDescription = "Enable instant in-chat payments on WhatsApp with HelloBotz. Collect payments via UPI, Cards, NetBanking, and Wallets without redirects. 3x faster checkout and zero cart drop-offs.";
$canonicalUrl = "https://hellobotz.com/products/whatsapp-payments/";
$ogImage = "assets/images/og-image.png";

include __DIR__ . "/../../includes/header.php";
?>

<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/product-pages.css">

<div class="prod-page">
  <!-- Ambient Gradients -->
  <div class="prod-ambient-1"></div>
  <div class="prod-ambient-2"></div>

  <!-- Hero Section -->
  <section class="prod-hero">
    <div class="prod-hero-grid">
      <div class="prod-hero-content">
        <div class="prod-badge">
          <span class="prod-badge-dot" style="background:#059669;"></span>
          SEAMLESS CONVERSATIONAL COMMERCE
        </div>
        <h1 class="prod-hero-title">
          Enable Instant <span class="prod-gradient-text">In-Chat Payments</span> on WhatsApp
        </h1>
        <p class="prod-hero-desc">
          Simplify checkout with native in-chat payments. Allow your customers to browse catalogs, add items to cart, pay seamlessly via UPI, credit/debit cards, and NetBanking, and receive instant receipts without ever leaving WhatsApp.
        </p>
        <div class="prod-hero-ctas">
          <a href="<?php echo $bp; ?>auth/register" class="prod-btn-primary">
            Start Collecting Payments
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
          <a href="#how-it-works" class="prod-btn-secondary">
            How It Works
          </a>
          <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn-download-data" style="padding:0.78rem 1.5rem;font-size:0.95rem;">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            Download Data
          </a>
        </div>
        <div class="prod-bullets">
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </span>
            Zero Website Redirects
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </span>
            Razorpay, PayU, Stripe & UPI
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </span>
            Instant Automated Invoicing
          </div>
        </div>
      </div>
      <div class="prod-hero-visual">
        <div class="prod-hero-media-wrapper" style="background: linear-gradient(145deg, #ecfdf5 0%, #d1fae5 100%); border: 1.5px solid #a7f3d0; border-radius: 24px; padding: 32px; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 20px 40px -15px rgba(5, 150, 105, 0.15);">
          <!-- Payment Card Mockup -->
          <div style="background: #ffffff; border-radius: 20px; box-shadow: 0 12px 30px rgba(0,0,0,0.08); width: 100%; max-width: 380px; overflow: hidden; border: 1px solid #e2e8f0;">
            <div style="background: #064e3b; padding: 14px 18px; display: flex; align-items: center; justify-content: space-between; color: #fff;">
              <div style="font-weight: 700; font-size: 15px; display: flex; align-items: center; gap: 8px;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                WhatsApp Pay Checkout
              </div>
              <span style="background: #059669; font-size: 11px; padding: 3px 8px; border-radius: 9999px; font-weight: 600;">Secure 256-bit</span>
            </div>
            <div style="padding: 20px 18px; display: flex; flex-direction: column; gap: 14px;">
              <div style="border-bottom: 1px solid #f1f5f9; padding-bottom: 12px;">
                <div style="font-size: 13px; color: #64748b;">Order #HB-84920</div>
                <div style="font-size: 18px; font-weight: 800; color: #0f172a; margin-top: 2px;">Premium Business Plan (Annual)</div>
              </div>
              <div style="display: flex; justify-content: space-between; align-items: center;">
                <span style="font-size: 14px; color: #64748b;">Amount Payable</span>
                <span style="font-size: 22px; font-weight: 800; color: #059669;">₹4,999.00</span>
              </div>
              <div style="background: #f8fafc; border-radius: 10px; padding: 10px 14px; display: flex; align-items: center; justify-content: space-between; font-size: 13px;">
                <span style="color: #334155; font-weight: 600;">UPI / GPay / PhonePe</span>
                <span style="color: #059669; font-weight: 700;">✓ Connected</span>
              </div>
              <button type="button" style="background: #059669; color: #fff; border: none; padding: 12px; border-radius: 10px; font-size: 15px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px;">
                Pay ₹4,999 on WhatsApp &rarr;
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Highlights Strip -->
  <section class="prod-stats-strip" style="background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0; padding: 36px 0;">
    <div class="prod-container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 24px; text-align: center;">
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #059669; margin-bottom: 4px;">65%</div>
          <div style="font-size: 0.92rem; color: #64748b; font-weight: 600;">Reduced Abandoned Carts</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #0081FB; margin-bottom: 4px;">Zero</div>
          <div style="font-size: 0.92rem; color: #64748b; font-weight: 600;">External Browser Redirects</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #7c3aed; margin-bottom: 4px;">3x</div>
          <div style="font-size: 0.92rem; color: #64748b; font-weight: 600;">Faster Checkout Speed</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #d97706; margin-bottom: 4px;">PCI-DSS</div>
          <div style="font-size: 0.92rem; color: #64748b; font-weight: 600;">Level 1 Certified Security</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why In-Chat Payments Section -->
  <section class="prod-section" id="why-payments">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">Frictionless Commerce</span>
        <h2 class="prod-section-title">Why Businesses Choose WhatsApp In-Chat Payments</h2>
        <p class="prod-section-desc">
          When customers are forced to leave chat to complete a purchase, 7 out of 10 abandon their carts. In-chat checkout keeps them inside the conversation.
        </p>
      </div>
      <div class="prod-grid-3">
        <div class="prod-card">
          <div class="prod-card-icon" style="background:#ecfdf5; color:#059669;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
          </div>
          <h3 class="prod-card-title">One-Tap Native Checkout</h3>
          <p class="prod-card-desc">
            Customers complete payment using their favorite UPI apps or saved cards without entering credentials on third-party websites.
          </p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon" style="background:#eff6ff; color:#0081FB;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
          </div>
          <h3 class="prod-card-title">Instant Automated Invoices</h3>
          <p class="prod-card-desc">
            The moment a payment succeeds, HelloBotz sends an official PDF invoice and order receipt to the customer’s WhatsApp automatically.
          </p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon" style="background:#faf5ff; color:#7c3aed;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
          </div>
          <h3 class="prod-card-title">Real-Time Settlement Tracking</h3>
          <p class="prod-card-desc">
            Track paid orders, failed transactions, refunds, and daily revenue metrics right inside your HelloBotz dashboard.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works Section -->
  <section class="prod-section prod-section-alt" id="how-it-works">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">How It Works</span>
        <h2 class="prod-section-title">The Complete In-Chat Shopping Journey</h2>
        <p class="prod-section-desc">
          Deliver a frictionless buying experience from product discovery to final order confirmation in under 60 seconds.
        </p>
      </div>
      <div class="prod-grid-4">
        <div class="prod-card">
          <div style="font-size: 28px; font-weight: 800; color: #059669; margin-bottom: 12px;">Step 1</div>
          <h3 class="prod-card-title">Customer Browses Catalog</h3>
          <p class="prod-card-desc">Customer views your product catalog or clicks a CTWA ad directly into WhatsApp chat.</p>
        </div>
        <div class="prod-card">
          <div style="font-size: 28px; font-weight: 800; color: #0081FB; margin-bottom: 12px;">Step 2</div>
          <h3 class="prod-card-title">Add Items to Cart</h3>
          <p class="prod-card-desc">They pick product variants, quantities, and review order subtotal in native WhatsApp cards.</p>
        </div>
        <div class="prod-card">
          <div style="font-size: 28px; font-weight: 800; color: #7c3aed; margin-bottom: 12px;">Step 3</div>
          <h3 class="prod-card-title">In-Chat Payment</h3>
          <p class="prod-card-desc">Customer taps "Pay Now", authorizes via UPI or card securely without ever exiting the app.</p>
        </div>
        <div class="prod-card">
          <div style="font-size: 28px; font-weight: 800; color: #d97706; margin-bottom: 12px;">Step 4</div>
          <h3 class="prod-card-title">Instant Confirmation</h3>
          <p class="prod-card-desc">Order is verified, receipt is dispatched, and your CRM/inventory is synced in real time.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="prod-section">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">FAQs</span>
        <h2 class="prod-section-title">Frequently Asked Questions</h2>
      </div>
      <div style="max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; gap: 14px;">
        <div class="prod-faq-item" style="background:#fff; border:1px solid #e2e8f0; border-radius:12px; padding:20px 24px;">
          <h4 style="font-size:16px; font-weight:700; color:#111827; margin:0 0 8px 0;">Which payment gateways are supported on HelloBotz?</h4>
          <p style="font-size:14px; color:#4b5563; margin:0; line-height:1.5;">HelloBotz supports Razorpay, PayU, Stripe, Cashfree, and native WhatsApp Pay UPI with zero transaction markups.</p>
        </div>
        <div class="prod-faq-item" style="background:#fff; border:1px solid #e2e8f0; border-radius:12px; padding:20px 24px;">
          <h4 style="font-size:16px; font-weight:700; color:#111827; margin:0 0 8px 0;">Is WhatsApp payment processing secure?</h4>
          <p style="font-size:14px; color:#4b5563; margin:0; line-height:1.5;">Yes! All transactions are end-to-end encrypted and comply with PCI-DSS Level 1 security standards and central banking guidelines.</p>
        </div>
        <div class="prod-faq-item" style="background:#fff; border:1px solid #e2e8f0; border-radius:12px; padding:20px 24px;">
          <h4 style="font-size:16px; font-weight:700; color:#111827; margin:0 0 8px 0;">Can I sync orders directly to Shopify or WooCommerce?</h4>
          <p style="font-size:14px; color:#4b5563; margin:0; line-height:1.5;">Yes! HelloBotz features ready-to-use integrations for Shopify, WooCommerce, and custom webhooks to update inventory automatically.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Final CTA Banner -->
  <section class="prod-section prod-section-alt" style="padding: 70px 0;">
    <div class="prod-container">
      <div style="background: linear-gradient(135deg, #064e3b 0%, #0f172a 100%); border-radius: 24px; padding: 48px; text-align: center; color: #fff; box-shadow: 0 24px 50px rgba(0,0,0,0.18);">
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 16px; color:#fff;">Start Selling More with In-Chat Payments Today</h2>
        <p style="font-size: 1.05rem; color: #a7f3d0; max-width: 620px; margin: 0 auto 28px auto;">
          Transform your WhatsApp chat into a high-converting automated sales machine with HelloBotz.
        </p>
        <a href="<?php echo $bp; ?>auth/register" class="prod-btn-primary" style="background: #059669; border-color: #059669; font-size: 1.05rem; padding: 14px 32px; display: inline-flex;">
          Activate In-Chat Payments Free &rarr;
        </a>
      </div>
    </div>
  </section>
</div>

<?php include __DIR__ . "/../../includes/footer.php"; ?>
