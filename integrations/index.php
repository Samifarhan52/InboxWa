<?php
$basePath = '../';
$bp = '../';
require_once __DIR__ . '/../config/cms.php';

$pageTitle = 'WhatsApp Business API Integration for Automation | HelloBots';
$pageDescription = 'Connect HelloBots WhatsApp Business API with CRMs, e-commerce platforms, Google Workspace, payment gateways, and tools.';
$canonicalUrl = 'https://hellobotz.com/integrations/';

include __DIR__ . '/../includes/header.php';
?>

<!-- Dependencies: Bootstrap Grid, FontAwesome, Swiper -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/getgabs-variables.css">
<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/getgabs-same-style.css">
<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/getgabs-template-industry.css">
<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/getgabs-g2reviews.css">

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


  <script data-cookieconsent="ignore"
    src="https://HelloBots.com/wp-content/themes/sierra/assets/jsnewhome/header-shared.js?v=1788956171"></script><style>
  .wa-process-section {}

  .wa-step-card {
    border-radius: 16px;
    padding: 25px 20px;
    height: 100%;
    transition: all 0.3s ease;
  }

  .wa-step-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
  }

  /* Light Gradient Variations */
  .col-lg-3:nth-child(1) .wa-step-card {
    background: linear-gradient(135deg, #e3f0ff, #f4f9ff);
  }

  .col-lg-3:nth-child(2) .wa-step-card {
    background: linear-gradient(135deg, #e6fff7, #f2fff9);
  }

  .col-lg-3:nth-child(3) .wa-step-card {
    background: linear-gradient(135deg, #fff4e6, #fff9f2);
  }

  .col-lg-3:nth-child(4) .wa-step-card {
    background: linear-gradient(135deg, #f3e8ff, #faf5ff);
  }

  h2 {
    text-align: center;
  }

  .wa-step-badge {
    width: 34px;
    height: 34px;
    font-size: 14px;
    font-weight: 600;
    background: #ffffff;
    color: #0066ff;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
  }

  .wa-step-heading {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 8px;
    color: #222;
  }

  .wa-step-description {
    font-size: 18px;
    margin: 0;
    line-height: 1.6;
    color: #555;
  }

  .cta-button {
    font-size: 15px;
    font-weight: bold;
    animation: 2s infinite pulse;
    background: linear-gradient(180deg, #024815 0, #000801 100%);
    color: #fff;
    padding: 13px 26px !important;
    border-radius: 12px;
    font-weight: 600;
    font-size: 15px;
    text-align: center;
    display: inline-block;
    border: none;
    cursor: pointer;
  }

  @media (max-width: 768px) {
    .wa-process-title {
      font-size: 26px;
    }
  }

  .integration-heading {
    color: #fff;
    text-align: center;
    position: relative;
  }

  .integration-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1b1b1b;
    line-height: 1.3;
  }

  .partners-section {
    padding: 20px 0;
    text-align: center;
    background-color: #fff;
  }

  .swiper-slide img {
    width: 100% !important;
    max-width: 90px;
    height: auto;
    margin: 0 auto;
    filter: grayscale(1);
  }

  .swiper-slide {
    flex-shrink: 1 !important;
  }

  .swiper-wrapper {
    align-items: center;
  }

  .swiper-slide img:hover {
    filter: grayscale(0);
    scale: 1.1;
  }

  .integration-section {
    padding: 70px 20px;
    background: #f3f4f6;
  }

  .integration-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 260px));
    gap: 30px;
    justify-content: center;
  }

  .integration-grid a {
    text-decoration: none;
  }

  .integration-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 50px 25px;
    text-align: center;
    min-height: 260px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
  }

  .integration-logo {
    max-height: 70px;
    margin-bottom: 30px;
    object-fit: contain;
  }

  .integration-card h3 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 6px;
  }

  .integration-card p {
    font-size: 14px;
    color: #6b7280;
  }

  /* Brand Hover Borders */
  .shopify-card:hover {
    border: 2px solid #95BF47;
  }

  .shiprocket-card:hover {
    border: 2px solid #7f54b3;
  }

  .wortal-card:hover {
    border: 2px solid #2f70c0;
  }

  .google-sheet-card:hover {
    border: 2px solid #19a15f;
  }

  .zoho-card:hover {
    border: 2px solid #fbb21b;
  }

  .faq-itemm {
    background: #fff;
    border-radius: 8px;
    margin-bottom: 15px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
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
    font-size: 16px !important;
    margin-bottom: 0px;
    font-weight: 700;
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
    font-size: 16px !important;
  }

  .faq-answerr.open {
    opacity: 1;
    padding: 15px 20px;
    border-top: 1px solid #eee;
  }

  .breadcrumbs {
    padding: 0.75rem 0;
    font-size: 0.75rem;
    border-bottom: 1px solid #dadfe7;
  }

  /* Remove default bootstrap breadcrumb slash */
  .breadcrumb-item+.breadcrumb-item::before {
    content: "»";
    /* you can change this to "" (nothing) or "›" */
    color: #6c757d;
    /* grey like in your screenshot */
    padding: 0 5px;
    font-size: 12px;
  }

  .breadcrumb {
    background: transparent;
    margin: 0;
    padding: 0;
  }

  .breadcrumb a {
    text-decoration: none;
    color: #034737;
    /* Bootstrap blue */
    font-weight: 700;
  }

  .breadcrumb a:hover {
    text-decoration: underline;
  }

  .breadcrumb-item.active {
    color: #6c757d;
    /* grey */
  }

  .breadcrumb-item {
    font-size: 12px;
  }

  .whatsapp-section {
    background-color: #f4f7f3;
    padding: 60px 0;
    text-align: center
  }

  .whatsapp-section h2 {
    font-size: 32px;
    font-weight: 700
  }

  .whatsapp-feature-box {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    margin: 10px;
    text-align: left;
    height: 100px
  }

  .btn-api-apply,
  .whatsapp-btn {
    background: linear-gradient(180deg, #024815 0, #000801 100%);
    padding: 12px 26px;
    text-decoration: none;
    display: inline-block;
    font-weight: 600;
    animation: 2s infinite pulse;
    transition: .3s ease-in-out;
    border-radius: 12px
  }

  .whatsapp-feature-box i {
    font-size: 24px;
    color: #034737
  }

  .whatsapp-btn {
    color: #fff;
    font-size: 15px;
    margin-top: 20px
  }

  .confused-section {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 60px 20px 16px;

  }

  .confused-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 16px;
    background: #fff;
    border: 2px solid #d6f0d2;
    border-radius: 16px;
    padding: 40px 60px;
    background: linear-gradient(180deg, #e9f5f0 0%, #ffffff 100%);
    max-width: 720px;
    width: 100%;
  }

  .emoji-text {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
  }

  .confused-title {
    font-size: 32px;
    font-weight: 800;
    color: #0f3e2d;
  }

  .confused-subtext {
    font-size: 16px;
    color: #6b7280;
    margin-bottom: 8px;
  }

  .whatsapp-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background: linear-gradient(180deg, #024815 0%, #000801 100%);
    color: #fff;
    padding: 8px 15px;
    border-radius: 14px;
    font-weight: 600;
    text-decoration: none;
    font-size: 18px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }

  .whatsapp-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
  }

  @media (max-width: 600px) {
    .confused-title {
      font-size: 28px;
    }

    .confused-subtext {
      font-size: 16px;
    }

    .confused-box {
      padding: 30px 20px;
    }
  }

  @media (max-width: 767px) {
    h1 {
      font-size: 1.6rem !important;
    }

    p {
      font-size: 14px !important;
    }

    h2 {
      font-size: 1.4rem !important;
    }

    .swiper-slide img {
      max-width: 60px !important;

    }

  }

  @keyframes pulse {
    0% {
      box-shadow: 0 0 0 0 rgba(0, 168, 107, 0.6);
    }

    70% {
      box-shadow: 0 0 0 10px rgba(0, 168, 107, 0);
    }

    100% {
      box-shadow: 0 0 0 0 rgba(0, 168, 107, 0);
    }
  }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<section class="breadcrumbs">
  <div class="container">
    <div aria-label="breadcrumb" class="custom-breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="https://HelloBots.com/">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          Integrations        </li>
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
    margin-bottom: 40px;">
          <i class="fa-brands fa-meta meta-icon"></i> Official Meta Partner
        </span>
        <!-- Breadcrumbs -->
        <!-- End Breadcrumbs -->
        <h1 class="hero-title"> Integrate WhatsApp Business API with Your Existing Platforms</h1>
        <p class="hero-text">Easily integrate HelloBots WhatsApp Business API with your favorite business tools to
          automate conversations, notifications, and workflows from a single platform.
        </p>
        <div class="btn-groupp" style="display: flex; gap: 12px;">
          <a href="#explore-more" class="btn text-white cta-button m-0">
            Explore All
          </a>
          <a id="whatsapp-enquiry"
            href="<?php echo $bp; ?>#contact-section"
            target="_blank" rel="noopener noreferrer" class="btn text-white cta-button m-0">
            Enquiry Now
          </a>

        </div>
      </div>
      <!-- Image Content with background -->
      <div class="col-lg-6">
        <div class="api-image-box " style="padding: 20px; border-radius: 10px;">
          <img width="100%" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-main/WhatsApp-Business-API-Integration.png"
            loading="lazy" alt=" WhatsApp Business API Integration">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="partners-section">
  <div class="container">
    <h2 class="partners-title whatsapp-heading">Our Trusted Clients</h2>
    <div class="swiper partners-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-main/Footer_Logo.png" alt="Looks Salon">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-main/Mahindra-Logo-2000.png" alt="Mahindra">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-main/SkodaLogoNew.png" alt="Skoda">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-main/Vegtration_Logo.png" alt="Vegetarian Brand">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-main/zee-business.png" alt="Zee Business">
        </div>
      </div>
      <!-- Pagination and Navigation Buttons -->

    </div>
  </div>
</section>
<section class="what-is-api" style="padding: 60px 0px;">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-4 whatsapp-heading">
          What is WhatsApp Business API Integration
        </h2>
      </div>
      <div class="col-12">
        <p class="text-center">
          WhatsApp Business API Integration is the process of connecting the <a
            href="https://HelloBots.com/whatsapp-business-api/" target="_blank" rel="noopener noreferrer">official Meta
            API</a> to your existing business software (CRMs, ERP, e-commerce, helpdesk, payment gateways, or logistics
          software) to automate and manage customer communication at scale.
      </div>
    </div>
  </div>
</section>
<section class="wa-process-section" style="padding: 60px 0px;background: #fcfbfc;">
  <div class="container">
    <h2 class="wa-process-title text-center mb-5">How WhatsApp Integrations Work with HelloBots</h2>

    <div class="row g-4">

      <div class="col-md-6 col-lg-3">
        <div class="wa-step-card">
          <div class="wa-step-badge">1</div>
          <div class="wa-step-heading">Choose your integration</div>
          <p class="wa-step-description">Select the platform you want to connect to, such as eCommerce, CRM, or support
            tools.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="wa-step-card">
          <div class="wa-step-badge">2</div>
          <div class="wa-step-heading">Connect your platform with HelloBots</div>
          <p class="wa-step-description">Connect your platform securely with HelloBots’ WhatsApp Business API in just a
            few clicks.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="wa-step-card">
          <div class="wa-step-badge">3</div>
          <div class="wa-step-heading">Set Automation Rules</div>
          <p class="wa-step-description">Define triggers and workflows for messages like order updates, alerts, or
            reminders.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="wa-step-card">
          <div class="wa-step-badge">4</div>
          <div class="wa-step-heading">Start sending messages on WhatsApp</div>
          <p class="wa-step-description">Go live and deliver automated, real-time messages to your customers on
            WhatsApp.</p>
        </div>
      </div>



    </div>
  </div>
</section>

<section class="whatsapp-section">
  <div class="container">
    <h2 class="whatsapp-heading fw-bold">More Reasons to Choose HelloBots</h2>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="whatsapp-feature-box d-flex align-items-center">
          <i class="fas fa-dollar-sign me-3"></i>
          <p class="mb-0"><strong>No Markup Charges:</strong> Unbeatable transparent rates with no markup
            charges.</p>
        </div>
        <div class="whatsapp-feature-box d-flex align-items-center">
          <i class="fas fa-tools me-3"></i>
          <p class="mb-0"><strong>No Set-Up Charge:</strong> Instant access with no set-up charges.
          </p>
        </div>
        <div class="whatsapp-feature-box d-flex align-items-center">
          <i class="fas fa-plug me-3"></i>
          <p class="mb-0"><strong>Direct WhatsApp API Access:</strong> Smooth integration with the official
            WhatsApp API.
          </p>
        </div>
        <div class="whatsapp-feature-box d-flex align-items-center">
          <i class="fas fa-clock me-3"></i>
          <p class="mb-0"><strong>Instant Approval & Quick Onboarding:</strong> Approval in seconds.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="whatsapp-feature-box d-flex align-items-center">
          <i class="fas fa-wallet me-3"></i>
          <p class="mb-0"><strong>Competitive Pricing:</strong> Affordable pricing options that fit in your budget.
          </p>
        </div>
        <div class="whatsapp-feature-box d-flex align-items-center">
          <i class="fas fa-shield-alt me-3"></i>
          <p class="mb-0"><strong>Secure & Scalable:</strong> Enterprise-grade security with a high delivery
            rate.
          </p>
        </div>
        <div class="whatsapp-feature-box d-flex align-items-center">
          <i class="fas fa-link me-3"></i>
          <p class="mb-0"><strong>Custom Integrations:</strong> Seamless integration with existing CRM
            software and third-party apps.
          </p>
        </div>
        <div class="whatsapp-feature-box d-flex align-items-center">
          <i class="fas fa-headset me-3"></i>
          <p class="mb-0"><strong>24/7 Assistance:</strong> Comprehensive assistance 24 hours a day.</p>
        </div>
      </div>
    </div>

  </div>
</section>


<section class="integration-section" id="explore-more">
  <div class="container">
    <h2 class="text-center mb-5">Hand-Picked Integrations to Fuel Your WhatsApp Business Growth</h2>
    <div class="integration-grid">

      <!-- Card 1 -->
      <a href="https://HelloBots.com/integrations/shopify/" target="_blank" rel="noopener noreferrer" class="">
        <div class="integration-card shopify-card">
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-main/shopify.png" alt="Shopify Logo" class="integration-logo" />
          <h3>Shopify</h3>
          <p>E-commerce</p>
        </div>
      </a>
      <!-- Card 2 -->
      <a href="https://HelloBots.com/integrations/shiprocket/" target="_blank" rel="noopener noreferrer" class="">
        <div class="integration-card shiprocket-card">
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-main/shiprocket.png" alt="shiprocket" class="integration-logo" />
          <h3>Shiprocket</h3>
          <p>E-commerce</p>
        </div>
      </a>
      <a href="https://HelloBots.com/integrations/wortal/" target="_blank" rel="noopener noreferrer" class="">
        <div class="integration-card wortal-card">
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-main/wortal.png" alt="Wortal" class="integration-logo" />
          <h3>Wortal</h3>
          <p>E-commerce</p>
        </div>
      </a>
      <a href="https://HelloBots.com/integrations/google-sheets/" style="text-decoration:none;" target="_blank"
        rel="noopener noreferrer">
        <div class="integration-card google-sheet-card">
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-main/google-sheet.png" alt="Google Sheets Logo"
            class="integration-logo" />
          <h3>Google Sheets</h3>
          <p>Business Management</p>
        </div>
      </a>

      <a href="https://HelloBots.com/integrations/zoho/" target="_blank" rel="noopener noreferrer">
        <div class="integration-card zoho-card">
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-main/zoho.png" alt="zoho" class="integration-logo" />
          <h3>Zoho</h3>
          <p>Data Management</p>
        </div>
      </a>

    </div>
  </div>
</section>

<section class="confused-section mb-5">
  <div class="confused-box">
    <div class="emoji-text">
      <div class="confused-title">Can't find what you're looking for?</div>
    </div>
    <div class="confused-subtext">Let's chat with the sales team on WhatsApp</div>
    <a href="<?php echo $bp; ?>#contact-section"
      target="_blank" rel="noopener noreferrer" class="top_heading_button"
      style="text-decoration:none;color: #fff;font-weight: 500; padding: 15px 20px; transition: .3s ease-in-out; animation: 2s infinite pulse; background: linear-gradient(180deg, #024815 0, #000801 100%); border-radius: 12px; font-size: 16px;">
      <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-main/WhatsApp.png" alt="WhatsApp Icon" width="24"
        height="24">
      Enquiry Now
    </a>
  </div>
</section>

<section class="faq-section">
  <div class="container">
    <div class="custom-faq-accordion" aria-label="Frequently Asked Questions"><h2>Frequently Asked Questions</h2><div class="faq-item"><button class="faq-question open" type="button" aria-expanded="true" aria-controls="faq-answer-0"><span class="faq-title"><h3>Do I need technical knowledge to set up integrations?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-0" class="faq-answer open" role="region" aria-hidden="false" style="max-height:none;">No. HelloBots provides you with ready-to-use integrations with a simple setup process. Just connect your platforms and configure basic automations without any technical skills.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-1"><span class="faq-title"><h3>Can I use multiple integrations at once?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-1" class="faq-answer" role="region" aria-hidden="true">Of Course. Yes, you can use multiple integrations simultaneously, like eCommerce, CRM, payment, and support tools, and handle all WhatsApp chats from a single dashboard.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-2"><span class="faq-title"><h3>Is HelloBots WhatsApp Business API integration secure?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-2" class="faq-answer" role="region" aria-hidden="true">Yes. HelloBots follows secure API practices and utilizes encrypted connections to safeguard customer data and business communication.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-3"><span class="faq-title"><h3>Do I need a developer to set up WhatsApp Business API integrations?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-3" class="faq-answer" role="region" aria-hidden="true">In most cases, it is not required. HelloBots integrations are created for non-technical users. But for advanced or custom workflows, you can seek the help of a developer for deeper customization.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-4"><span class="faq-title"><h3>What kind of businesses can benefit from WhatsApp Business API integrations?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-4" class="faq-answer" role="region" aria-hidden="true">Every size of business, including eCommerce, retail, education, healthcare, logistics, and service-based companies, can take the edge by automating messages and engaging clients on WhatsApp.</div></div></div><script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Do I need technical knowledge to set up integrations?","acceptedAnswer":{"@type":"Answer","text":"No. HelloBots provides you with ready-to-use integrations with a simple setup process. Just connect your platforms and configure basic automations without any technical skills."}},{"@type":"Question","name":"Can I use multiple integrations at once?","acceptedAnswer":{"@type":"Answer","text":"Of Course. Yes, you can use multiple integrations simultaneously, like eCommerce, CRM, payment, and support tools, and handle all WhatsApp chats from a single dashboard."}},{"@type":"Question","name":"Is HelloBots WhatsApp Business API integration secure?","acceptedAnswer":{"@type":"Answer","text":"Yes. HelloBots follows secure API practices and utilizes encrypted connections to safeguard customer data and business communication."}},{"@type":"Question","name":"Do I need a developer to set up WhatsApp Business API integrations?","acceptedAnswer":{"@type":"Answer","text":"In most cases, it is not required. HelloBots integrations are created for non-technical users. But for advanced or custom workflows, you can seek the help of a developer for deeper customization."}},{"@type":"Question","name":"What kind of businesses can benefit from WhatsApp Business API integrations?","acceptedAnswer":{"@type":"Answer","text":"Every size of business, including eCommerce, retail, education, healthcare, logistics, and service-based companies, can take the edge by automating messages and engaging clients on WhatsApp."}}]}</script>
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
<link rel="stylesheet"
    href="https://HelloBots.com/wp-content/themes/sierra/assets/cssnewhome/footer-shared.css?v=1788952221"
    media="all">


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
    new Swiper('.partners-slider', {
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


<?php include __DIR__ . '/../includes/footer.php'; ?>
