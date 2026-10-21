<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'WhatsApp Interactive Messages | Quick Replies & CTA Buttons | HelloBotz';
$pageDescription = 'Boost response rates with interactive buttons, list pickers, and dynamic CTA messages on WhatsApp using HelloBotz.';
$canonicalUrl = 'https://hellobotz.com/products/whatsapp-interactive-messages/';
$ogImage = 'https://hellobotz.com/assets/images/hellobots/whatsapp-interactive-messages/WhatsApp-Interactive-Messages.png?v=2';
$ogTitle = 'WhatsApp Interactive Messages | Quick Replies & CTA Buttons | HelloBotz';
$ogDescription = 'Boost response rates with interactive buttons, list pickers, and dynamic CTA messages on WhatsApp using HelloBotz.';

include __DIR__ . '/../../includes/header.php';
?>

<!-- Dependencies: Bootstrap Grid, FontAwesome, Swiper -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/hellobotz-variables.css">
<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/hellobotz-same-style.css">
<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/hellobotz-template-industry.css">
<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/hellobotz-g2reviews.css">
<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/hellobotz-whatsapp-blue-tick.css">

<style>
  /* Container Centering & Layout Enforced (1240px max-width) */
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
  .cloned-hellobots-page section {
    width: 100%;
    position: relative;
  }
  .cloned-hellobots-page img {
    max-width: 100%;
    height: auto;
  }
  /* Protect Header and Footer from Bootstrap resets */
  .site-header {
    font-family: inherit;
  }
  .site-header a, .site-header button {
    text-decoration: none !important;
  }
  .site-header .nav-link {
    display: inline-flex !important;
    color: #1e293b !important;
    font-size: 0.95rem !important;
    font-weight: 500 !important;
    padding: 0.5rem 0.85rem !important;
  }
  .site-footer {
    font-family: inherit;
  }
  .site-footer a {
    text-decoration: none !important;
  }
  /* Custom FAQ accordion interaction styles */
  .faq-itemm {
    background: #fff;
    border-radius: 8px;
    margin-bottom: 15px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.06);
    overflow: hidden;
    border: 1px solid #e2e8f0;
  }
  .faq-questionn {
    width: 100%;
    text-align: left;
    background: #fff;
    padding: 18px 20px;
    font-size: 16px;
    cursor: pointer;
    border: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .faq-text {
    flex: 1;
    color: #0f172a;
    font-size: 16px !important;
    margin-bottom: 0px;
    font-weight: 600;
  }
  .faq-arrow {
    display: inline-block;
    width: 9px;
    height: 9px;
    border-right: 2px solid #047857;
    border-bottom: 2px solid #047857;
    transform: rotate(45deg);
    transition: transform 0.3s ease;
  }
  .faq-questionn.open .faq-arrow {
    transform: rotate(-135deg);
  }
  .faq-answerr {
    display: none;
    padding: 0 20px 18px;
    background: #fff;
    color: #475569;
    font-size: 15px;
    line-height: 1.6;
  }
  .faq-answerr.open {
    display: block;
  }
  .cta-button, .btn-primary {
    background: #4f46e5 !important;
    border-color: #4f46e5 !important;
  }
  .cta-button:hover, .btn-primary:hover {
    background: #4338ca !important;
  }
</style>


<div class="cloned-hellobots-page">


  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<style>
   

    @media (max-width: 768px) {
  .whatsapp-enquiryyy {
    display: block;
    margin: 15px auto 0!important; /* top auto bottom */
    text-align: center;
  }
 
}
 .custom-faq-accordion { margin-top:30px; }

.faq-itemm {
    background: #fff;
    border-radius: 8px;
    margin-bottom: 15px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    overflow: hidden;
}

.faq-questionn {
    width: 100%;
    text-align: left;
    background: #fff;
    padding: 20px;
    font-size: 16px;
    cursor: pointer;
    border: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.faq-text {
    flex: 1;
    color: #333;
    font-size: 16px!important;
    margin-bottom:0px;
    font-weight:700;
}

.faq-arrow {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-right: 2px solid #000901;
    border-bottom: 2px solid #024815;
    transform: rotate(45deg);
    transition: transform 0.3s ease;
}
.faq-question.open .faq-arrow {
    transform: rotate(-135deg);
}

.faq-answerr {
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    transition: max-height 0.4s ease, opacity 0.4s ease, padding 0.3s ease;
    padding: 0 20px;
    background: #fff;
}

.faq-itemm p {
    font-size: 16px!important;
}

.faq-answerr.open {
    opacity: 1;
    padding: 15px 20px;
    border-top: 1px solid #eee;
}



</style>
<section class="breadcrumbs">
  <div class="container">
    <div aria-label="breadcrumb" class="custom-breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo $bp; ?>">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          WhatsApp Interactive Messages        </li>
      </ol>
    </div>
  </div>
</section>

<section class="hero-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Text Content -->
      <div class="col-lg-6 mb-4 mb-lg-0">
                      <span class="d-flex align-items-center gap-1 meta-partner" style="font-size: 11px !important;
    color: #111827;
    border: 1px solid #bcbcbc;
    max-width: fit-content;
    padding: 9px;
    border-radius: 8px;
    background: #fdfffe;
    font-weight: 600;
    margin-bottom:40px;

    ">
        <i class="fa-brands fa-meta meta-icon"></i> Official Meta Partner
    </span>
        <!-- Breadcrumbs -->
        <!-- End Breadcrumbs -->
        <h1 class="hero-title">Boost Customer Engagement with WhatsApp Interactive Buttons & Menus</h1>
        <p class="hero-text">Replace typing friction and drop-offs with 1-tap quick replies, 10-item list pickers, and WhatsApp Flows. Accelerate lead qualification, bookings, and instant in-chat checkouts with 3.8x higher conversion.</p>
        <div class="product-hero-actions" style="display:flex;flex-wrap:wrap;gap:12px;align-items:center;margin-top:1.5rem;">
          <a href="https://app.hellobotz.com/auth/register" class="btn text-white cta-button m-0" style="background:#4f46e5;color:#ffffff;font-weight:700;padding:12px 24px;border-radius:10px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;box-shadow:0 4px 14px rgba(79,70,229,0.35);">
            Start Free Trial →
          </a>
          <button type="button" class="btn btn-outline-primary cta-button-secondary m-0 btn-demo-open" data-product="Interactive Messages" style="border:1.5px solid #4f46e5;color:#4f46e5;background:#ffffff;font-weight:700;padding:12px 22px;border-radius:10px;cursor:pointer;">
            Book Live Demo
          </button>
          <a href="#contact-section" class="btn btn-verified-outline m-0" style="display:inline-flex;align-items:center;gap:7px;border:1.5px solid #10b981;color:#047857;background:#ecfdf5;font-weight:700;padding:12px 22px;border-radius:10px;text-decoration:none;">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified
          </a>
        </div>
        <div class="hero-sub-badges" style="margin-top:1.25rem;display:flex;flex-wrap:wrap;gap:14px;font-size:0.85rem;color:#475569;font-weight:600;">
          <span><i class="fa-solid fa-bolt text-warning"></i> 3 Quick Reply Buttons</span>
          <span><i class="fa-solid fa-list-check text-primary"></i> 10-Item List Menus</span>
          <span><i class="fa-solid fa-mobile-screen text-success"></i> Native WhatsApp Flows</span>
          <span><i class="fa-solid fa-shield-halved text-success"></i> Official Meta Cloud API</span>
        </div>
      </div>
      <!-- Image Content with background -->
      <div class="col-lg-6">
        <div class="api-image-box" style="padding: 10px; border-radius: 10px;">
          <img width="100%" src="<?php echo $bp; ?>assets/images/hellobots/whatsapp-interactive-messages/WhatsApp-Interactive-Messages.png?v=2" loading="lazy"
            alt="WhatsApp Interactive Messages - HelloBotz" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>




<section class="whatsapp-usecase py-5">
    <div class="container">
        <h2 class="whatsapp-heading mb-5">Types of WhatsApp Interactive Messages</h2>
        
        <!-- Feature 1: Reply Buttons -->
        <div class="usecase-row row align-items-center mb-5">
            <!-- Text -->
            <div class="col-lg-6 order-1 order-lg-2 mb-5">
                <div class="api-content">
                    <span class="badge mb-2" style="background:#e0e7ff;color:#4338ca;font-weight:700;padding:6px 12px;border-radius:6px;font-size:0.82rem;">1-TAP ACTIONS</span>
                    <h3>Reply Buttons</h3>
                    <p class="mb-3">
                        Guide customer decisions instantly with up to 3 clickable quick-reply buttons. Whether it's choosing a subscription tier, confirming an appointment, or reordering a favorite product, customers reply with a single tap—eliminating typos, hesitation, and chat drop-off.
                    </p>
                    <div class="mb-3" style="display:flex;flex-wrap:wrap;gap:8px;font-size:0.83rem;font-weight:600;">
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">✓ Up to 3 Action Buttons</span>
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">⚡ Instant Webhook Triggers</span>
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">📈 3.8x Higher Conversion</span>
                    </div>
                </div>
                <div style="display:flex;gap:10px;flex-wrap:wrap;align-items:center;">
                    <a href="https://app.hellobotz.com/auth/register" class="btn text-white cta-button m-0" style="background:#4f46e5;color:#ffffff;font-weight:700;padding:10px 20px;border-radius:8px;text-decoration:none;">
                        Start Free Trial →
                    </a>
                    <button type="button" class="btn btn-outline-primary m-0 btn-demo-open" data-product="Interactive Messages" style="border:1.5px solid #4f46e5;color:#4f46e5;background:#ffffff;font-weight:700;padding:10px 18px;border-radius:8px;cursor:pointer;">
                        Book Demo
                    </button>
                </div>
            </div>
            <!-- Image -->
            <div class="col-lg-6 order-2 order-lg-1 text-center">
                <div class="api-image-box">
                    <img src="<?php echo $bp; ?>assets/images/hellobots/whatsapp-interactive-messages/Reply-Buttons.png?v=2" alt="WhatsApp Reply Buttons - HelloBotz" class="api-image img-fluid rounded">
                </div>
            </div>
        </div>

        <!-- Feature 2: List Messages -->
        <div class="usecase-row row align-items-center mb-5">
            <!-- Text -->
            <div class="col-lg-6 order-1 order-lg-1 mb-5">
                <div class="api-content">
                    <span class="badge mb-2" style="background:#ecfdf5;color:#047857;font-weight:700;padding:6px 12px;border-radius:6px;font-size:0.82rem;">ORGANIZED MENUS</span>
                    <h3>List Messages</h3>
                    <p class="mb-3">
                        Present an organized, scrollable menu of up to 10 categorized options in a single clean message. Perfect for customer support departments, product catalogs, branch selection, and FAQs without cluttering the chat with dozens of individual messages.
                    </p>
                    <div class="mb-3" style="display:flex;flex-wrap:wrap;gap:8px;font-size:0.83rem;font-weight:600;">
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">📋 Up to 10 Scrollable Items</span>
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">📂 Multi-Section Grouping</span>
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">✨ Zero Chat Clutter</span>
                    </div>
                </div>
                <div style="display:flex;gap:10px;flex-wrap:wrap;align-items:center;">
                    <a href="https://app.hellobotz.com/auth/register" class="btn text-white cta-button m-0" style="background:#4f46e5;color:#ffffff;font-weight:700;padding:10px 20px;border-radius:8px;text-decoration:none;">
                        Start Free Trial →
                    </a>
                    <button type="button" class="btn btn-outline-primary m-0 btn-demo-open" data-product="Interactive Messages" style="border:1.5px solid #4f46e5;color:#4f46e5;background:#ffffff;font-weight:700;padding:10px 18px;border-radius:8px;cursor:pointer;">
                        Book Demo
                    </button>
                </div>
            </div>
            <!-- Image -->
            <div class="col-lg-6 order-1 order-lg-2 text-center">
                <div class="api-image-box">
                    <img src="<?php echo $bp; ?>assets/images/hellobots/whatsapp-interactive-messages/List-Messages.png?v=2"
                        alt="WhatsApp List Messages - HelloBotz" class="api-image img-fluid rounded">
                </div>
            </div>
        </div>

        <!-- Feature 3: Single-Product Messages -->
        <div class="usecase-row row align-items-center mb-5">
            <!-- Text -->
            <div class="col-lg-6 order-1 order-lg-2 mb-5">
                <div class="api-content">
                    <span class="badge mb-2" style="background:#fef3c7;color:#92400e;font-weight:700;padding:6px 12px;border-radius:6px;font-size:0.82rem;">FOCUSED CHECKOUT</span>
                    <h3>Single-Product Messages</h3>
                    <p class="mb-3">
                        Showcase a specific product directly from your catalog with high-res imagery, live price, product description, and an instant 'Add to Cart' or 'Buy Now' button. Drive laser-focused re-engagement for abandoned carts, flash sales, and personalized customer recommendations.
                    </p>
                    <div class="mb-3" style="display:flex;flex-wrap:wrap;gap:8px;font-size:0.83rem;font-weight:600;">
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">🛍️ Real-Time Catalog Sync</span>
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">⚡ 1-Tap Cart Addition</span>
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">🛒 Shopify & WooCommerce Sync</span>
                    </div>
                </div>
                <div style="display:flex;gap:10px;flex-wrap:wrap;align-items:center;">
                    <a href="https://app.hellobotz.com/auth/register" class="btn text-white cta-button m-0" style="background:#4f46e5;color:#ffffff;font-weight:700;padding:10px 20px;border-radius:8px;text-decoration:none;">
                        Start Free Trial →
                    </a>
                    <button type="button" class="btn btn-outline-primary m-0 btn-demo-open" data-product="Interactive Messages" style="border:1.5px solid #4f46e5;color:#4f46e5;background:#ffffff;font-weight:700;padding:10px 18px;border-radius:8px;cursor:pointer;">
                        Book Demo
                    </button>
                </div>
            </div>
            <!-- Image -->
            <div class="col-lg-6 order-2 order-lg-1 text-center">
                <div class="api-image-box">
                    <img src="<?php echo $bp; ?>assets/images/hellobots/whatsapp-interactive-messages/Single-Product-Messages.png?v=2"
                        alt="WhatsApp Single Product Messages - HelloBotz" class="api-image img-fluid rounded">
                </div>
            </div>
        </div>
        
        <!-- Feature 4: Multi-Product Messages -->
        <div class="usecase-row row align-items-center mb-5">
            <!-- Text -->
            <div class="col-lg-6 order-1 order-lg-1 mb-5">
                <div class="api-content">
                    <span class="badge mb-2" style="background:#fce7f3;color:#9d174d;font-weight:700;padding:6px 12px;border-radius:6px;font-size:0.82rem;">IN-CHAT STOREFRONT</span>
                    <h3>Multi-Product Messages</h3>
                    <p class="mb-3">
                        Deliver a complete native storefront experience inside WhatsApp with up to 30 products organized into up to 10 custom sections. Customers can browse collections, compare items, add multiple products to their in-chat cart, and checkout seamlessly without ever opening an external browser.
                    </p>
                    <div class="mb-3" style="display:flex;flex-wrap:wrap;gap:8px;font-size:0.83rem;font-weight:600;">
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">📦 Up to 30 Products</span>
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">📂 10 Storefront Sections</span>
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">🔒 Zero Website Drop-Off</span>
                    </div>
                </div>
                <div style="display:flex;gap:10px;flex-wrap:wrap;align-items:center;">
                    <a href="https://app.hellobotz.com/auth/register" class="btn text-white cta-button m-0" style="background:#4f46e5;color:#ffffff;font-weight:700;padding:10px 20px;border-radius:8px;text-decoration:none;">
                        Start Free Trial →
                    </a>
                    <button type="button" class="btn btn-outline-primary m-0 btn-demo-open" data-product="Interactive Messages" style="border:1.5px solid #4f46e5;color:#4f46e5;background:#ffffff;font-weight:700;padding:10px 18px;border-radius:8px;cursor:pointer;">
                        Book Demo
                    </button>
                </div>
            </div>
            <!-- Image -->
            <div class="col-lg-6 order-1 order-lg-2 text-center">
                <div class="api-image-box">
                    <img src="<?php echo $bp; ?>assets/images/hellobots/whatsapp-interactive-messages/Multi-Product-Messages.png?v=2"
                        alt="WhatsApp Multi Product Messages - HelloBotz" class="api-image img-fluid rounded">
                </div>
            </div>
        </div>

        <!-- Feature 5: Location Request Messages -->
        <div class="usecase-row row align-items-center mb-5">
            <!-- Text -->
            <div class="col-lg-6 order-1 order-lg-2 mb-5">
                <div class="api-content">
                    <span class="badge mb-2" style="background:#e0f2fe;color:#0369a1;font-weight:700;padding:6px 12px;border-radius:6px;font-size:0.82rem;">GEOLOCATION</span>
                    <h3>Location Request Messages</h3>
                    <p class="mb-3">
                        Prompt customers to securely transmit their precise GPS coordinates or pin delivery addresses with a single tap. Streamline doorstep deliveries, field agent routing, service technician dispatch, and nearest-store recommendations with zero manual address typing errors.
                    </p>
                    <div class="mb-3" style="display:flex;flex-wrap:wrap;gap:8px;font-size:0.83rem;font-weight:600;">
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">📍 1-Tap GPS Transmission</span>
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">🚚 Automated Delivery Routing</span>
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">🏪 Nearest Store Locator</span>
                    </div>
                </div>
                <div style="display:flex;gap:10px;flex-wrap:wrap;align-items:center;">
                    <a href="https://app.hellobotz.com/auth/register" class="btn text-white cta-button m-0" style="background:#4f46e5;color:#ffffff;font-weight:700;padding:10px 20px;border-radius:8px;text-decoration:none;">
                        Start Free Trial →
                    </a>
                    <button type="button" class="btn btn-outline-primary m-0 btn-demo-open" data-product="Interactive Messages" style="border:1.5px solid #4f46e5;color:#4f46e5;background:#ffffff;font-weight:700;padding:10px 18px;border-radius:8px;cursor:pointer;">
                        Book Demo
                    </button>
                </div>
            </div>
            <!-- Image -->
            <div class="col-lg-6 order-2 order-lg-1 text-center">
                <div class="api-image-box">
                    <img src="<?php echo $bp; ?>assets/images/hellobots/whatsapp-interactive-messages/Location-Request-Messages.png?v=2"
                        alt="WhatsApp Location Request Messages - HelloBotz" class="api-image img-fluid rounded">
                </div>
            </div>
        </div>
        
        <!-- Feature 6: WhatsApp Flows -->
        <div class="usecase-row row align-items-center mb-5">
            <!-- Text -->
            <div class="col-lg-6 order-1 order-lg-1 mb-5">
                <div class="api-content">
                    <span class="badge mb-2" style="background:#f3e8ff;color:#6b21a8;font-weight:700;padding:6px 12px;border-radius:6px;font-size:0.82rem;">NATIVE FORMS</span>
                    <h3>WhatsApp Flow Messages</h3>
                    <p class="mb-3">
                        Deploy rich, dynamic, multi-screen interactive forms directly inside WhatsApp without external redirects. Collect qualified lead information, book appointments, execute KYC checks, register warranties, and gather customer feedback within a native, silky-smooth mobile form.
                    </p>
                    <div class="mb-3" style="display:flex;flex-wrap:wrap;gap:8px;font-size:0.83rem;font-weight:600;">
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">📲 Native Multi-Screen Forms</span>
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">⚡ Real-Time Field Validation</span>
                        <span class="badge" style="background:#ecfdf5;color:#047857;border:1px solid #a7f3d0;padding:6px 12px;border-radius:20px;">🔄 Direct CRM & ERP Ingestion</span>
                    </div>
                </div>
                <div style="display:flex;gap:10px;flex-wrap:wrap;align-items:center;">
                    <a href="https://app.hellobotz.com/auth/register" class="btn text-white cta-button m-0" style="background:#4f46e5;color:#ffffff;font-weight:700;padding:10px 20px;border-radius:8px;text-decoration:none;">
                        Start Free Trial →
                    </a>
                    <button type="button" class="btn btn-outline-primary m-0 btn-demo-open" data-product="Interactive Messages" style="border:1.5px solid #4f46e5;color:#4f46e5;background:#ffffff;font-weight:700;padding:10px 18px;border-radius:8px;cursor:pointer;">
                        Book Demo
                    </button>
                </div>
            </div>
            <!-- Image -->
            <div class="col-lg-6 order-1 order-lg-2 text-center">
                <div class="api-image-box">
                    <img src="<?php echo $bp; ?>assets/images/hellobots/whatsapp-interactive-messages/Flow-Messages.png?v=2"
                        alt="WhatsApp Flow Messages - HelloBotz" class="api-image img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="trust-section py-5" style="background:#fff!important">
  <div class="container">
    <div class="text-center mb-5">
      <span class="badge mb-2" style="background:#ecfdf5;color:#047857;font-weight:700;padding:6px 14px;border-radius:20px;font-size:0.85rem;border:1px solid #a7f3d0;">BUSINESS VALUE</span>
      <h2 class="fw-bold mb-3">Why Should Businesses Use WhatsApp Interactive Messages?</h2>
      <p class="text-muted" style="max-width:720px;margin:0 auto;font-size:1.05rem;">
        Transform static chat interactions into high-conversion digital experiences that drive engagement, qualification, and revenue without leaving WhatsApp.
      </p>
    </div>
    <div class="row align-items-center">
      <!-- Left Text Section -->
      <div class="col-lg-6">
        <div class="trust-point mb-4 d-flex align-items-start">
          <div class="me-3 mt-1" style="width:40px;height:40px;border-radius:10px;background:#e0e7ff;color:#4338ca;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.1rem;">
            <i class="fa-solid fa-bolt"></i>
          </div>
          <div>
            <h3 style="font-size:1.15rem;font-weight:700;color:#0f172a;margin-bottom:6px;">Boost Response & Engagement (+64% Lift)</h3>
            <p style="color:#475569;font-size:0.95rem;line-height:1.6;margin-bottom:0;">
              Clickable quick reply buttons and interactive list menus eliminate cognitive friction and typing effort. Prospects respond instantly, driving up to +64% higher engagement compared to traditional plain-text broadcasts.
            </p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div class="me-3 mt-1" style="width:40px;height:40px;border-radius:10px;background:#ecfdf5;color:#047857;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.1rem;">
            <i class="fa-solid fa-mobile-screen-button"></i>
          </div>
          <div>
            <h3 style="font-size:1.15rem;font-weight:700;color:#0f172a;margin-bottom:6px;">Seamless Frictionless Journeys</h3>
            <p style="color:#475569;font-size:0.95rem;line-height:1.6;margin-bottom:0;">
              Enable customers to discover products, schedule appointments, and complete purchases entirely inside WhatsApp. No browser redirects, no forgotten passwords, and zero drop-off along the conversion path.
            </p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div class="me-3 mt-1" style="width:40px;height:40px;border-radius:10px;background:#fef3c7;color:#92400e;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.1rem;">
            <i class="fa-solid fa-arrow-trend-up"></i>
          </div>
          <div>
            <h3 style="font-size:1.15rem;font-weight:700;color:#0f172a;margin-bottom:6px;">Accelerate Conversions (3.8x CTR)</h3>
            <p style="color:#475569;font-size:0.95rem;line-height:1.6;margin-bottom:0;">
              Interactive call-to-action buttons guide high-intent prospects straight into conversion funnels. Deliver personalized recommendations and 1-tap checkout links that convert 3.8x faster than traditional web forms.
            </p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div class="me-3 mt-1" style="width:40px;height:40px;border-radius:10px;background:#f3e8ff;color:#6b21a8;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.1rem;">
            <i class="fa-solid fa-gears"></i>
          </div>
          <div>
            <h3 style="font-size:1.15rem;font-weight:700;color:#0f172a;margin-bottom:6px;">Sub-Second Automated Workflows</h3>
            <p style="color:#475569;font-size:0.95rem;line-height:1.6;margin-bottom:0;">
              Integrate button selections with HelloBotz no-code automation and AI chatbots. Instantly sync user responses with HubSpot, Salesforce, Zoho, and Shopify via high-speed webhooks with &lt;120ms latency.
            </p>
          </div>
        </div>
      </div>
      <!-- Right Image Section -->
      <div class="col-lg-6 text-center mt-4 mt-lg-0">
        <div class="api-image-box" style="padding: 10px; border-radius: 12px;">
          <img src="<?php echo $bp; ?>assets/images/hellobots/whatsapp-interactive-messages/img_3cdda3d145.png?v=2"
            alt="Why WhatsApp Interactive Messages - HelloBotz" class="img-fluid rounded" />
        </div>
      </div>
    </div>
  </div>
</section>









<style>
    .usecase-section {
    background: #fffaeb;
    padding: 60px 20px;

}
.api-subtext{
    text-align:center;
}
  .grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 30px;
  }

  .grid-item {
    display: none;
    flex-direction: column;
    justify-content: space-between;
    border-radius: 8px;
    padding: 20px;
    background: #fff;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
    height: 100%;
  }


  .grid-item h3 {
    font-size: 18px;
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
    color: #034737;
  }

  .grid-item p {
    font-size: 14px;
    line-height: 1.5;
    color: #555;
    flex-grow: 1;
  }

  .grid-item a {
    display: inline-block;
    margin-top: 20px;
    font-size: 14px;
    color: #034737;
    text-decoration: none;
  }

.grid-item a {
  display: inline-block;       /* ensures the link is visible */
  margin-top: 20px;
  font-size: 14px;
  color: #034737;
  text-decoration: none;
}
.learn-more {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-weight: 600;
    color: #034737;
    text-decoration: none;
    font-size: 15px;
    margin-top: 10px;
}
.learn-more:hover i {
    transform: translateX(3px);
}
</style>

<section class="usecase-section">
  <div class="container">
    <h2 class="whatsapp-heading">Explore More WhatsApp Business API Features</h2>
    <p class="mb-4 api-subtext">
      Discover powerful WhatsApp features that help you engage customers, boost sales, and simplify communication — all in
      one platform.
    </p>

   
  <div class="grid">
      <div class="grid-item">
        <h3><i class="fas fa-bullhorn"></i> WhatsApp Broadcasting</h3>
        <p>Send bulk tailored messages to unlimited contacts instantly with guaranteed better reach and improved
          customer engagement without spamming. </p>

      <a class="learn-more" href="<?php echo $bp; ?>products/broadcast/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>

      <div class="grid-item">
        <h3><i class="fas fa-robot"></i> WhatsApp AI Chatbot</h3>
        <p>Use a Chatbot to automate customer queries, manage FAQs, and offer 24/7 instant support to increase
          efficiency and reduce manual workload.</p>
        
        <a class="learn-more" href="<?php echo $bp; ?>products/chatbot/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="grid-item">
        <h3><i class="fas fa-file-alt"></i> WhatsApp Forms</h3>
        <p>Collect leads, customer data, and ask for feedback, all within WhatsApp chats using interactive and
          easy-to-fill forms.
        </p>
        
        <a class="learn-more" href="<?php echo $bp; ?>products/whatsapp-form/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="grid-item">
        <h3><i class="fas fa-check-circle"></i> WhatsApp Blue Tick</h3>
        <p>Verified your brand with the official blue tick to improve credibility, trust, and customer confidence.
        </p>

        <a class="learn-more" href="<?php echo $bp; ?>products/whatsapp-blue-tick/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
        
      </div>

      <div class="grid-item">
        <h3><i class="fas fa-mouse-pointer"></i> Click-to-WhatsApp Ads</h3>
        <p>Convert your ads into a quick WhatsApp chat to enhance lead generation, customer engagement, and sales
          conversion.</p>
      
        <a class="learn-more" href="<?php echo $bp; ?>products/ctwa/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="grid-item">
        <h3><i class="fas fa-money-bill-wave"></i> WhatsApp Payments</h3>
        <p>Make it easier for customers to purchase, pay, and check out without leaving WhatsApp with secure in-chat
          payments.
        </p>
      
        <a class="learn-more" href="<?php echo $bp; ?>products/whatsapp-payments/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="grid-item">
        <h3><i class="fas fa-sync-alt"></i> WhatsApp Drip Campaign</h3>
        <p>Automate sequential messages to nurture leads, increase conversions, and keep your audience engaged over
          time.
        </p>
        <a href="<?php echo $bp; ?>#contact-section" target="_blank">Contact Us ➜ </a>
      </div>

      <div class="grid-item">
        <h3><i class="fas fa-users"></i> WhatsApp Team Inbox</h3>
        <p>Collaborate with your team by handling all customer conversations in a single dashboard using WhatsApp
          shared-team inbox.
        </p>
        <a class="learn-more" href="<?php echo $bp; ?>products/shared-inbox/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>

      </div>
    <div class="grid-item">
        <h3><i class="fas fa-network-wired"></i> WhatsApp Automation</h3>
        <p>Build no-code branching workflows and automated sequences that qualify leads and route requests 24/7.</p>
        <a class="learn-more" href="<?php echo $bp; ?>products/chatbot/">Learn more <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="grid-item">
        <h3><i class="fas fa-lock"></i> WhatsApp Authentication</h3>
        <p>Send OTPs with 99% reliability and secure logins using WhatsApp’s end-to-end encrypted, one-tap authentication.</p>
               
<a class="learn-more" href="<?php echo $bp; ?>products/whatsapp-business-platform/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="grid-item">
        <h3><i class="fas fa-th-list"></i> WhatsApp Catalog</h3>
        <p>Display your products or services in the WhatsApp catalog for customers to effortlessly browse and place
          orders.
        </p>
               
                <a class="learn-more" href="<?php echo $bp; ?>products/catalog/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>

      </div>

    <div class="grid-item">
        <h3><i class="fas fa-th-list"></i>WhatsApp Voice Calling</h3>
        <p>
Enable real-time voice calls for instant customer connection.
Boost trust, support, and conversions with faster interactions.</p>
               
                <a class="learn-more" href="<?php echo $bp; ?>channels/whatsapp/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>

      </div>
    </div>
  </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function() {
  let currentURL = window.location.href.replace(/\/$/, '');

  document.querySelectorAll('.grid-item').forEach(function(item) {
    const link = item.querySelector('a');
    if (!link) return;

    let linkHref = link.href.replace(/\/$/, '');
    if (currentURL !== linkHref) {
      // show only non-matching boxes
      item.style.display = 'flex';
    } else {
      // remove the current feature box
      item.remove();
    }
  });
});
</script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="usecase-section py-5" id="usecases-explore" style="background:#fff;">
    <div class="container text-center">
        <h2 class="fw-bold mb-3 fw-bold">Explore Industry-wise WhatsApp Use Cases</h2>
        <p class="text-muted mb-5">See how businesses across industries use WhatsApp Business Platform(API) to engage
            customers, increase sales, and simplify communication.
        </p>
        <div class="usecase-grid">

            <a href="<?php echo $bp; ?>industry/education-and-social-impacts/" 
                class="use-case-card">
                <div class="icon-circle" style="background:#fff4d6;color:#c98a02;"><i
                        class="bi bi-mortarboard-fill"></i></div>
                <h3>Education & EdTech</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/bfsi/" 
                class="use-case-card">
                <div class="icon-circle" style="background: #e5f2ff; color: #0288d1;"><i class="bi bi-bank"></i></div>
                <h3>Banking & Fintech</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/healthcare/" 
                class="use-case-card">
                <div class="icon-circle" style="background: #ffe5e9; color: #e91e63;"><i
                        class="bi bi-heart-pulse-fill"></i></div>
                <h3>Healthcare</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/travel-and-hospitality/" 
                class="use-case-card">
                <div class="icon-circle" style="background: #f0e6ff; color: #7b1fa2;"><i
                        class="bi bi-airplane-fill"></i></div>
                <h3>Travel & Tourism</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/automobiles-and-transport/" 
                class="use-case-card">
                <div class="icon-circle" style="background: #e5f4ff; color: #1565c0;"><i
                        class="bi bi-car-front-fill"></i></div>
                <h3>Automotive</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/retail-and-ecommerce/" 
                class="use-case-card">
                <div class="icon-circle" style="background: #e6f8ee; color: #2e7d32;"><i class="bi bi-bag-fill"></i>
                </div>
                <h3>Retail & E-commerce</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/construction-and-real-estate/" 
                class="use-case-card">
                <div class="icon-circle" style="color:#23398f; background: #c6cde9"><i class="fas fa-building"></i>
                </div>
                <h3>Real Estate</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/food-and-beverages/"  class="use-case-card">
                <div class="icon-circle" style="background: #e9dec9; color: #6f5627;"><i class="fas fa-utensils"></i>
                </div>
                <h3>Restaurant & Food Business</h3>
            </a>

            <a href="<?php echo $bp; ?>business-leads/beauty-wellness/" 
                class="use-case-card">
                <div class="icon-circle" style="color: #a55a67; background: #f7e2e6;"><i class="fas fa-spa"></i></div>
                <h3>Spas & Salons</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/advertising-and-events/" 
                class="use-case-card">
                <div class="icon-circle" style="background:#fdeaea;color:#d9534f;"><i class="fas fa-microphone-alt"></i>
                </div>
                <h3>Events & Webinars</h3>
            </a>

            <a href="<?php echo $bp; ?>business-leads/b2b-suppliers/" 
                class="use-case-card">
                <div class="icon-circle" style="background:#ffe7d9;color:#d35f16;"><i class="fas fa-store"></i></div>
                <h3>Small & Medium Business</h3>
            </a>

            <a href="<?php echo $bp; ?>industry/communication-and-it/" 
                class="use-case-card">
                <div class="icon-circle" style="background: linear-gradient(135deg, #e0e7ff, #c7d2fe); color: #1e3a8a;">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3>Enterprises</h3>
            </a>

            <a href="<?php echo $bp; ?>business-leads/retail/" 
                class="use-case-card">
                <div class="icon-circle" style="background:#fdf0d5;color:#b8860b;"><i class="fas fa-gem"></i></div>
                <h3>Jewellers</h3>
            </a>

        </div>
    </div>
</section>

<style>
    #usecases-explore .usecase-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 24px;
        margin-top: 10px;
    }

    #usecases-explore .use-case-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 16px;
        background: #fff;
        border: 1px solid #edf0f3;
        border-radius: 16px;
        padding: 34px 16px;
        text-decoration: none;
        color: #1f2430;
        transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
    }

    #usecases-explore .use-case-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgba(0, 0, 0, .08);
        border-color: #dbe0e6;
        color: #1f2430;
    }

    #usecases-explore .icon-circle {
        width: 68px;
        height: 68px;
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 26px;
        flex-shrink: 0;
    }

    #usecases-explore .use-case-card h3 {
        font-size: 15px;
        font-weight: 600;
        line-height: 1.35;
        margin: 0;
    }

    @media (max-width: 1200px) {
        #usecases-explore .usecase-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 900px) {
        #usecases-explore .usecase-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 600px) {
        #usecases-explore .usecase-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .usecase-section h2 {
        font-size: 32px;
    }

    .usecase-item {
        text-align: start;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        padding: 20px 18px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        border-radius: 8px;
        background: #fff;
    }



    .icon-circle {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 24px;
        flex-shrink: 0;
    }

    .usecase-item h3 {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .usecase-item p {
        color: #555;
        font-size: 0.95rem;
        flex-grow: 1;
        margin-bottom: 15px;
    }



    .row.g-4>div {
        display: flex;
    }

    @media (max-width: 767px) {
        .usecase-item {
            height: auto;
        }

        .usecase-item p {
            min-height: auto;
        }
    }
</style>

<style>
    .section {
        padding: 60px 0px;
    }



    .cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }


    .card {
        background: #ffffff;
        border-radius: 20px !important;
        padding: 35px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: 0.2s ease;
    }


    .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 35px rgba(0, 0, 0, 0.12);
    }


    .iconn {
        font-size: 45px;
        margin-bottom: 20px;
        color: #22c55e;
    }


    .card h3 {
        margin: 0 0 10px;
        font-size: 22px;
        color: #0f172a;
    }


    .card p {
        margin: 0 0 20px;
        font-size: 16px;
        color: #475569;
        line-height: 1.45;
    }

    .grid-item a {
        display: inline-block;
        margin-top: 20px;
        font-size: 15px;
        color: #034737;
        text-decoration: none;
    }

    .grid-item a:hover {
        text-decoration: none;
    }

    Learn More Link .learn-more {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-weight: 600;
        color: #034737;
        text-decoration: none;
        font-size: 15px;
        margin-top: 10px;
    }


    .learn-more i {
        transition: 0.2s ease;
    }


    .learn-more:hover i {
        transform: translateX(4px);
    }


    @media(max-width: 900px) {
        .cards {
            grid-template-columns: 1fr 1fr;
        }
    }


    @media(max-width: 600px) {

        .cards {
            grid-template-columns: 1fr;
        }
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />



<section class="section">
    <div class="container">
        <h2 class="whatsapp-heading fw-bold mb-2">Department Wise Uses of WhatsApp Official API</h2>
        <p class="text-center mb-5">See how WhatsApp Business Platform helps businesses boost marketing, streamline
            sales, and improve customer support.</p>


        <div class="cards">
            <div class="card">
                <div class="iconn"><i class="fas fa-bullhorn"></i></div>
                <h3>WhatsApp for Marketing</h3>
                <p>Reach customers instantly with high-engagement broadcasts and personalized offers.</p>
                <a class="learn-more" href="<?php echo $bp; ?>solutions/bulk-messaging/" target="_blank"
                    rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>


            <div class="card">
                <div class="iconn"><i class="fas fa-handshake"></i></div>
                <h3>WhatsApp for Sales</h3>
                <p>Convert chats into sales with automated workflows, lead management, and fast follow-ups.</p>
                <a class="learn-more" href="<?php echo $bp; ?>products/shared-inbox/" target="_blank"
                    rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>


            <div class="card">
                <div class="iconn"><i class="fas fa-headset"></i></div>
                <h3>WhatsApp for Support</h3>
                <p class="">Provide fast, reliable customer support with instant replies and automated ticket
                    management.</p>
                <a class="learn-more" href="<?php echo $bp; ?>solutions/customer-support/" target="_blank"
                    rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- INTERACTIVE JOURNEY FLOW SECTION -->
<style>
.im-journey-section {
  padding: 5rem 0;
  background: #f8fafc;
  border-top: 1px solid #e2e8f0;
  border-bottom: 1px solid #e2e8f0;
  position: relative;
}
.im-journey-container {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 1.25rem;
  box-sizing: border-box;
  text-align: center;
}
.im-j-kicker {
  font-size: 0.8rem;
  font-weight: 800;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #4f46e5;
  margin-bottom: 0.6rem;
}
.im-j-title {
  font-size: clamp(1.8rem, 2.8vw, 2.4rem);
  font-weight: 800;
  color: #0f172a;
  letter-spacing: -0.025em;
  margin-bottom: 0.85rem;
  line-height: 1.25;
}
.im-j-intro {
  font-size: 1.05rem;
  color: #475569;
  max-width: 680px;
  margin: 0 auto 2.5rem;
  line-height: 1.6;
}
.im-j-nav {
  display: flex;
  justify-content: center;
  gap: 0.75rem;
  flex-wrap: wrap;
  margin-bottom: 2.75rem;
}
.im-j-tab {
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
.im-j-tab:hover {
  background: #f1f5f9;
  color: #0f172a;
  border-color: #94a3b8;
}
.im-j-tab.active {
  background: #4f46e5;
  color: #ffffff;
  border-color: #4f46e5;
  box-shadow: 0 4px 16px rgba(79, 70, 229, 0.35);
}
.im-j-timeline {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.25rem;
}
@media (max-width: 992px) {
  .im-j-timeline {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 576px) {
  .im-j-timeline {
    grid-template-columns: 1fr;
  }
}
.im-j-card {
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
.im-j-card:hover {
  transform: translateY(-4px);
  border-color: #818cf8;
  box-shadow: 0 12px 30px rgba(79, 70, 229, 0.12);
}
.im-j-step-num {
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
.im-j-card h4 {
  font-size: 1.12rem;
  font-weight: 700;
  color: #0f172a;
  margin-bottom: 0.5rem;
  min-height: 2.5rem;
  display: flex;
  align-items: center;
}
.im-j-card p {
  font-size: 0.9rem;
  color: #475569;
  line-height: 1.55;
  margin-bottom: 1.25rem;
  flex-grow: 1;
}
.im-j-badge {
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

<section class="im-journey-section" id="journey-flow">
  <div class="im-journey-container">
    <div class="im-j-kicker">INTERACTIVE CONVERSATIONAL FLOW</div>
    <h2 class="im-j-title">Make conversations 4x faster with interactive messages.</h2>
    <p class="im-j-intro">Replace lengthy text instructions with quick reply buttons, list pickers, and CTA link actions.</p>

    <!-- Scenario Switcher -->
    <div class="im-j-nav">
      <button type="button" class="im-j-tab active" onclick="imSwitchJourney('buttons', this)">🔘 Quick Reply Buttons</button>
        <button type="button" class="im-j-tab" onclick="imSwitchJourney('lists', this)">📋 Interactive List Menus</button>
        <button type="button" class="im-j-tab" onclick="imSwitchJourney('cta', this)">🔗 Call-to-Action Link Buttons</button>
    </div>

    <!-- 4-Stage Cards -->
    <div class="im-j-timeline">
        <div class="im-j-card" id="im-step-1">
          <div class="im-j-step-num">01</div>
          <h4 id="im-title-1">Interactive Card Sent</h4>
          <p id="im-desc-1">Message dispatched with up to 3 clear action buttons.</p>
          <span class="im-j-badge" id="im-badge-1">1-Tap Actions</span>
        </div>
        <div class="im-j-card" id="im-step-2">
          <div class="im-j-step-num">02</div>
          <h4 id="im-title-2">Instant Customer Tap</h4>
          <p id="im-desc-2">Customer taps choice without typing a single character or typo.</p>
          <span class="im-j-badge" id="im-badge-2">Zero Typing Friction</span>
        </div>
        <div class="im-j-card" id="im-step-3">
          <div class="im-j-step-num">03</div>
          <h4 id="im-title-3">Sub-100ms Action</h4>
          <p id="im-desc-3">System captures button payload and triggers next logical response.</p>
          <span class="im-j-badge" id="im-badge-3">Sub-100ms Processing</span>
        </div>
        <div class="im-j-card" id="im-step-4">
          <div class="im-j-step-num">04</div>
          <h4 id="im-title-4">Goal Accomplished</h4>
          <p id="im-desc-4">Service rescheduled or preference updated with instant receipt.</p>
          <span class="im-j-badge" id="im-badge-4">94% Response Rate</span>
        </div>
    </div>
  </div>
</section>

<script>
(function() {
  var journeyData = {"buttons": [{"title": "Interactive Card Sent", "desc": "Message dispatched with up to 3 clear action buttons.", "badge": "1-Tap Actions"}, {"title": "Instant Customer Tap", "desc": "Customer taps choice without typing a single character or typo.", "badge": "Zero Typing Friction"}, {"title": "Sub-100ms Action", "desc": "System captures button payload and triggers next logical response.", "badge": "Sub-100ms Processing"}, {"title": "Goal Accomplished", "desc": "Service rescheduled or preference updated with instant receipt.", "badge": "94% Response Rate"}], "lists": [{"title": "List Menu Prompt", "desc": "Customer taps 'View Options'; organized bottom sheet opens.", "badge": "Up to 10 Options"}, {"title": "Section Grouping", "desc": "Items categorized cleanly under headers (Support, Plans, Accounts).", "badge": "Organized Layout"}, {"title": "Single Selection", "desc": "Customer chooses desired option in 1 tap without scrolling back.", "badge": "Effortless Choice"}, {"title": "Dynamic Sub-Flow", "desc": "Detailed answers, pricing, or next steps delivered in sub-second.", "badge": "4x Faster Navigation"}], "cta": [{"title": "Rich Promotional Card", "desc": "High-impact image with customized CTA link button.", "badge": "High CTR Format"}, {"title": "Seamless Web Transition", "desc": "Tapping button opens targeted URL with auto-login UTM tracking.", "badge": "Direct Link Open"}, {"title": "Precise Attribution", "desc": "System logs exact click timestamps, operating system, and campaign ID.", "badge": "Full Attribution"}, {"title": "Retargeting Automation", "desc": "Converters tagged; non-converters enrolled in gentle follow-up drip.", "badge": "Automated Funnel"}]};

  window.imSwitchJourney = function(scenarioId, btn) {
    var nav = btn.closest('.im-j-nav');
    if (nav) {
      var tabs = nav.querySelectorAll('.im-j-tab');
      for (var t = 0; t < tabs.length; t++) {
        tabs[t].classList.remove('active');
      }
    }
    btn.classList.add('active');

    var steps = journeyData[scenarioId];
    if (!steps) return;

    for (var i = 0; i < steps.length; i++) {
      var num = i + 1;
      var titleEl = document.getElementById('im-title-' + num);
      var descEl = document.getElementById('im-desc-' + num);
      var badgeEl = document.getElementById('im-badge-' + num);
      var cardEl = document.getElementById('im-step-' + num);

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
        var c = document.getElementById('im-step-' + j);
        if (c) {
          c.style.opacity = '1';
          c.style.transform = 'translateY(0)';
        }
      }
    }, 120);
  };
})();
</script>


<section class="faq-section">
  <div class="container">
    <div class="custom-faq-accordion" aria-label="Frequently Asked Questions">
      <div class="text-center mb-4">
        <span class="badge mb-2" style="background:#e0e7ff;color:#4338ca;font-weight:700;padding:6px 14px;border-radius:20px;font-size:0.85rem;">KNOWLEDGE BASE</span>
        <h2 class="fw-bold">Frequently Asked Questions</h2>
        <p class="text-muted" style="max-width:680px;margin:0 auto;">Everything you need to know about WhatsApp interactive messages, technical limits, Flows, and Meta API integration.</p>
      </div>

      <!-- FAQ 1 -->
      <div class="faq-item">
        <button class="faq-question open" type="button" aria-expanded="true" aria-controls="faq-answer-0">
          <span class="faq-title"><h3>What are WhatsApp Interactive Messages and how do they differ from plain text?</h3></span>
          <span class="faq-arrow" aria-hidden="true"></span>
        </button>
        <div id="faq-answer-0" class="faq-answer open" role="region" aria-hidden="false" style="max-height:none;">
          WhatsApp Interactive Messages allow businesses to include native, clickable interface elements—such as Quick Reply buttons (up to 3 options), List Messages (up to 10 scrollable items), WhatsApp Flows (multi-screen native forms), and Single/Multi-Product storefront cards—directly inside the chat. Unlike standard plain text where users must type replies or click external links, interactive messages offer 1-tap responses that achieve up to 3.8x higher click-through rates (CTR) and eliminate website drop-off.
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-1">
          <span class="faq-title"><h3>What are the technical limits for Quick Reply buttons and List Messages?</h3></span>
          <span class="faq-arrow" aria-hidden="true"></span>
        </button>
        <div id="faq-answer-1" class="faq-answer" role="region" aria-hidden="true">
          Under the official WhatsApp Cloud API specifications:
          <ul style="margin:8px 0 0;padding-left:20px;">
            <li><strong>Quick Reply Buttons:</strong> Up to 3 buttons per message. Each button label can contain up to 20 characters (including emojis).</li>
            <li><strong>List Messages:</strong> Up to 10 selectable items organized across up to 10 sections. Each row supports a title (up to 24 characters) and an optional description (up to 72 characters).</li>
            <li><strong>Multi-Product Messages:</strong> Up to 30 items categorized into up to 10 catalog sections.</li>
          </ul>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-2">
          <span class="faq-title"><h3>How do WhatsApp Flows work with Interactive Messages?</h3></span>
          <span class="faq-arrow" aria-hidden="true"></span>
        </button>
        <div id="faq-answer-2" class="faq-answer" role="region" aria-hidden="true">
          WhatsApp Flows enable businesses to deploy rich, multi-screen forms natively inside WhatsApp without opening an external browser or third-party web view. Customers can book appointments, configure products, submit KYC documents, fill out customer surveys, and complete sign-ups directly within a smooth, app-like interface. Form inputs are validated in real time and automatically dispatched via webhooks to your CRM or ERP.
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-3">
          <span class="faq-title"><h3>Do I need the official WhatsApp Business Cloud API to send Interactive Messages?</h3></span>
          <span class="faq-arrow" aria-hidden="true"></span>
        </button>
        <div id="faq-answer-3" class="faq-answer" role="region" aria-hidden="true">
          Yes. Interactive components (Reply Buttons, List Messages, Location Requests, Flows, and Product Cards) are exclusively supported on the official Meta WhatsApp Business Cloud API. They are not available on the free consumer WhatsApp app or the standard WhatsApp Business mobile app. HelloBotz provides immediate Meta API onboarding, verified number routing, and full interactive message builder tools.
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-4">
          <span class="faq-title"><h3>Can Interactive Messages be automated with chatbots and CRM webhooks?</h3></span>
          <span class="faq-arrow" aria-hidden="true"></span>
        </button>
        <div id="faq-answer-4" class="faq-answer" role="region" aria-hidden="true">
          Absolutely. HelloBotz features a visual drag-and-drop workflow builder that connects interactive button taps directly to AI chatbots (powered by GPT-4o and Claude), routing logic, and webhook triggers. When a customer selects an option, HelloBotz can instantly update records in HubSpot, Salesforce, Zoho, Shopify, or custom databases with sub-second response times.
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-5">
          <span class="faq-title"><h3>Can customers make payments directly through WhatsApp Interactive Messages?</h3></span>
          <span class="faq-arrow" aria-hidden="true"></span>
        </button>
        <div id="faq-answer-5" class="faq-answer" role="region" aria-hidden="true">
          Yes. Interactive messages seamlessly integrate with WhatsApp In-Chat Payments and UPI. You can trigger dynamic payment requests, catalog checkout cards, and 1-tap UPI deep-links (Google Pay, PhonePe, Paytm, CRED). Customers complete payments securely without leaving WhatsApp, achieving up to 54% higher transaction completion.
        </div>
      </div>

      <!-- FAQ 7 -->
      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-6">
          <span class="faq-title"><h3>How does Meta charge for WhatsApp Interactive Messages?</h3></span>
          <span class="faq-arrow" aria-hidden="true"></span>
        </button>
        <div id="faq-answer-6" class="faq-answer" role="region" aria-hidden="true">
          Interactive messages adhere to Meta's standard conversation-based pricing model. When initiated within an active 24-hour customer service window (initiated by the user), responses and interactive messages incur standard service rates. When sent as outbound proactive campaigns, they fall under Meta's Marketing or Utility template categories. Within a Click-to-WhatsApp (CTWA) 72-hour free window, all conversations are 100% free of Meta conversation charges.
        </div>
      </div>
    </div>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What are WhatsApp Interactive Messages and how do they differ from plain text?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "WhatsApp Interactive Messages allow businesses to include native, clickable interface elements—such as Quick Reply buttons (up to 3 options), List Messages (up to 10 scrollable items), WhatsApp Flows (multi-screen native forms), and Single/Multi-Product storefront cards—directly inside the chat. Unlike standard plain text where users must type replies or click external links, interactive messages offer 1-tap responses that achieve up to 3.8x higher click-through rates (CTR) and eliminate website drop-off."
          }
        },
        {
          "@type": "Question",
          "name": "What are the technical limits for Quick Reply buttons and List Messages?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under the official WhatsApp Cloud API specifications: Quick Reply Buttons allow up to 3 buttons per message (each up to 20 characters including emojis). List Messages support up to 10 selectable items across up to 10 sections with title up to 24 characters and description up to 72 characters. Multi-Product Messages support up to 30 items."
          }
        },
        {
          "@type": "Question",
          "name": "How do WhatsApp Flows work with Interactive Messages?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "WhatsApp Flows enable businesses to deploy rich, multi-screen forms natively inside WhatsApp without opening an external browser or third-party web view. Customers can book appointments, configure products, submit KYC documents, fill out customer surveys, and complete sign-ups directly within a smooth, app-like interface. Form inputs are validated in real time and automatically dispatched via webhooks to your CRM or ERP."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need the official WhatsApp Business Cloud API to send Interactive Messages?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Interactive components (Reply Buttons, List Messages, Location Requests, Flows, and Product Cards) are exclusively supported on the official Meta WhatsApp Business Cloud API. They are not available on the free consumer WhatsApp app or the standard WhatsApp Business mobile app. HelloBotz provides immediate Meta API onboarding, verified number routing, and full interactive message builder tools."
          }
        },
        {
          "@type": "Question",
          "name": "Can Interactive Messages be automated with chatbots and CRM webhooks?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. HelloBotz features a visual drag-and-drop workflow builder that connects interactive button taps directly to AI chatbots (powered by GPT-4o and Claude), routing logic, and webhook triggers. When a customer selects an option, HelloBotz can instantly update records in HubSpot, Salesforce, Zoho, Shopify, or custom databases with sub-second response times."
          }
        },
        {
          "@type": "Question",
          "name": "Can customers make payments directly through WhatsApp Interactive Messages?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Interactive messages seamlessly integrate with WhatsApp In-Chat Payments and UPI. You can trigger dynamic payment requests, catalog checkout cards, and 1-tap UPI deep-links (Google Pay, PhonePe, Paytm, CRED). Customers complete payments securely without leaving WhatsApp, achieving up to 54% higher transaction completion."
          }
        },
        {
          "@type": "Question",
          "name": "How does Meta charge for WhatsApp Interactive Messages?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Interactive messages adhere to Meta's standard conversation-based pricing model. When initiated within an active 24-hour customer service window (initiated by the user), responses and interactive messages incur standard service rates. When sent as outbound proactive campaigns, they fall under Meta's Marketing or Utility template categories. Within a Click-to-WhatsApp (CTWA) 72-hour free window, all conversations are 100% free of Meta conversation charges."
          }
        }
      ]
    }
    </script>
    <script>
    (function(){
        if (window.__customFaqAccordionInit) return;
        window.__customFaqAccordionInit = true;

        function closeAnswer(answer, btn) {
            if (!answer) return;
            // if maxHeight is "none", set to current px value to animate to 0
            if (answer.style.maxHeight === "none" || answer.style.maxHeight === "") {
                answer.style.maxHeight = answer.scrollHeight + "px";
            }
            // force reflow
            void answer.offsetHeight;
            answer.style.maxHeight = "0px";
            answer.classList.remove("open");
            if (btn) {
                btn.classList.remove("open");
                btn.setAttribute("aria-expanded", "false");
            }
            answer.setAttribute("aria-hidden", "true");
        }

        function openAnswer(answer, btn) {
            if (!answer) return;
            // set to exact height so transition works
            answer.style.maxHeight = answer.scrollHeight + "px";
            answer.classList.add("open");
            if (btn) {
                btn.classList.add("open");
                btn.setAttribute("aria-expanded", "true");
            }
            answer.setAttribute("aria-hidden", "false");

            // once transition finishes, set to none to allow internal content changes (images) without clipping
            var onTransEnd = function(e){
                if (answer.classList.contains("open")) {
                    answer.style.maxHeight = "none";
                }
                answer.removeEventListener("transitionend", onTransEnd);
            };
            answer.addEventListener("transitionend", onTransEnd);
        }

        document.addEventListener("click", function(e){
            var btn = e.target.closest ? e.target.closest(".custom-faq-accordion .faq-question") : null;
            if (!btn) return;

            var item = btn.closest(".faq-item");
            if (!item) return;
            var answer = item.querySelector(".faq-answer");
            if (!answer) return;

            // if already open, close it
            if (answer.classList.contains("open")) {
                closeAnswer(answer, btn);
            } else {
                // optionally close other open items (uncomment to allow only-one-open)
                var openItems = document.querySelectorAll(".custom-faq-accordion .faq-answer.open");
                openItems.forEach(function(o){
                    var parentBtn = o.closest(".faq-item") ? o.closest(".faq-item").querySelector(".faq-question") : null;
                    if (o !== answer) closeAnswer(o, parentBtn);
                });

                openAnswer(answer, btn);
            }
        });

        // Make sure open answers recalc height on window resize (useful if images load or layout changes)
        window.addEventListener("resize", function(){
            var openAnswers = document.querySelectorAll(".custom-faq-accordion .faq-answer.open");
            openAnswers.forEach(function(a){
                // if maxHeight is "none", set it to scrollHeight to keep it visible after resize
                if (a.style.maxHeight === "none") {
                    a.style.maxHeight = a.scrollHeight + "px";
                    // then release to none after a tick
                    setTimeout(function(){ a.style.maxHeight = "none"; }, 350);
                }
            });
        });
    })();
    </script>
    
    <style>
    // .custom-faq-accordion { margin-top:30px; border-top:1px solid #ddd; }
    // .custom-faq-accordion h2 { margin-bottom:15px; }
    // .faq-item { margin-bottom:10px; }

    // .faq-question {
    //     width: 100%;
    //     text-align: left;
    //     background: #ffffff;
    //     padding: 10px;
    //     font-size: 16px;
    //     cursor: pointer;
    //     border: 0;
    //     border-bottom: 1px solid;
    //     display: flex;
    //     justify-content: space-between;
    //     align-items: center;
    // }
    // /* Reset heading margin inside button to avoid extra spacing */
    // .faq-question h3 { margin: 0; font-size: 16px; font-weight: 600; }
    // .faq-title { display:inline-block; flex:1; text-align:left; }

    // .faq-arrow {
    //     display: inline-block;
    //     width: 10px;
    //     height: 10px;
    //     border-right: 2px solid #333;
    //     border-bottom: 2px solid #333;
    //     transform: rotate(45deg);
    //     transition: transform 0.25s ease;
    //     margin-left: 8px;
    // }
    // .faq-question.open .faq-arrow {
    //     transform: rotate(-135deg);
    // }

    // .faq-answer {
    //     max-height: 0;
    //     opacity: 0;
    //     overflow: hidden;
    //     transition: max-height 0.35s ease, opacity 0.25s ease, padding 0.25s ease;
    //     padding: 0 10px;
    //     border-bottom: 0;
    //     background: #fff;
    // }
    // .faq-answer.open {
    //     opacity: 1;
    //     padding: 10px;
       
    // }

    // .faq-question.open { border-bottom: 0; }
    
    
    
    
    .custom-faq-accordion { margin-top:30px; }
    .custom-faq-accordion h2 { font-size: 26px; margin-bottom: 15px; }

.faq-item {
    background: #fff;
    border-radius: 8px;
    margin-bottom: 15px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    overflow: hidden;
    box-sizing: border-box;
}

.faq-question {
    width: 100%;
    text-align: left;
    background: #fff;
    padding: 20px;
    font-size: 16px;
    cursor: pointer;
    border: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-sizing: border-box;
}

.faq-title h3{
    flex: 1;
    color: #333;
    font-size: 16px!important;
    margin-bottom:0px;
    font-weight:700;
}

.faq-arrow {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-right: 2px solid #000901;
    border-bottom: 2px solid #024815;
    transform: rotate(45deg);
    transition: transform 0.3s ease;
}
.faq-question.open .faq-arrow {
    transform: rotate(-135deg);
}

.faq-answer {
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    transition: max-height 0.4s ease, opacity 0.4s ease, padding 0.3s ease;
    padding: 0 20px;
    background: #fff;
    box-sizing: border-box;
}

.faq-item .faq-answer {
    font-size: 16px!important;
    color:#202123!important;
}

.faq-answer.open {
    opacity: 1;
    padding: 15px 20px;
    border-top: 1px solid #eee;
}

@media (max-width: 600px) {
    .custom-faq-accordion h2 { font-size: 20px; }
    .faq-question { padding: 14px 16px; font-size: 15px; gap: 10px; }
    .faq-title h3 { font-size: 15px!important; }
    .faq-arrow { flex-shrink: 0; }
    .faq-answer { padding: 0 16px; }
    .faq-item .faq-answer { font-size: 14.5px!important; }
    .faq-answer.open { padding: 12px 16px; }
}

    </style>
    </div>

</section>
<!-- Homepage-style footer. Loaded here (not in <head>) same as header.php - see
        assets/cssnewhome/footer-shared.css for the dedicated, footer-only CSS this uses. -->



</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // FAQ accordion
  document.querySelectorAll('.faq-questionn').forEach(function(btn) {
    btn.addEventListener('click', function() {
      const item = this.closest('.faq-itemm');
      const ans = item ? item.querySelector('.faq-answerr') : null;
      const isOpen = this.classList.contains('open');
      
      // Close all in this section
      const parent = this.closest('.custom-faq-accordion') || document;
      parent.querySelectorAll('.faq-questionn').forEach(b => b.classList.remove('open'));
      parent.querySelectorAll('.faq-answerr').forEach(a => a.classList.remove('open'));

      if (!isOpen && ans) {
        this.classList.add('open');
        ans.classList.add('open');
      }
    });
  });

  // Init Swiper if present
  if (typeof Swiper !== 'undefined') {
    document.querySelector(".partners-slider") && new Swiper(".partners-slider", {
      slidesPerView: 2,
      spaceBetween: 20,
      loop: true,
      autoplay: { delay: 2500, disableOnInteraction: false },
      breakpoints: {
        640: { slidesPerView: 3, spaceBetween: 20 },
        768: { slidesPerView: 4, spaceBetween: 30 },
        1024: { slidesPerView: 5, spaceBetween: 30 }
      }
    });
  }
});
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
    <h2 class="hb-bottom-cta-title">Ready to transform your business with WhatsApp Interactive Messages?</h2>
    <p class="hb-bottom-cta-desc">
      Join fast-growing companies that rely on HelloBotz for official WhatsApp Business API automation, intelligent lead handling, and verified credibility.
    </p>
    <div class="hb-bottom-cta-btns">
      <a href="https://app.hellobotz.com/auth/register" class="hb-cta-btn-primary">
        Start Free Trial →
      </a>
      <button type="button" class="hb-cta-btn-secondary btn-demo-open" data-product="Interactive Messages">
        Book a Live Demo
      </button>
      <a href="#contact-section" class="hb-cta-btn-verified">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
        Get Verified
      </a>
    </div>
  </div>
</section>


<?php include __DIR__ . '/../../includes/footer.php'; ?>
