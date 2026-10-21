<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'AI WhatsApp Chatbot | 24/7 Smart Conversations | HelloBotz';
$pageDescription = 'Deploy no-code AI assistants to automate customer inquiries, book appointments, and close sales on WhatsApp around the clock.';
$canonicalUrl = 'https://hellobotz.com/products/chatbot/';
$ogImage = 'https://hellobotz.com/assets/images/hellobots/ai-whatsapp-chatbot/01.png';
$ogTitle = 'AI WhatsApp Chatbot | 24/7 Smart Conversations | HelloBotz';
$ogDescription = 'Deploy no-code AI assistants to automate customer inquiries, book appointments, and close sales on WhatsApp around the clock.';

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
<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/hellobotz-ai-whatsapp-chatbot.css">

<style>
  /* Container Centering & Layout Enforced (1240px max-width) */
  .cloned-hellobots-page {
    width: 100%;
    overflow-x: hidden;
    background: #ffffff;
  }
  html[data-theme="dark"] .cloned-hellobots-page,
  body.dark-theme .cloned-hellobots-page,
  [data-theme="dark"] .cloned-hellobots-page {
    background: #080c14 !important;
    color: #f8fafc !important;
  }
  html[data-theme="dark"] .whatsapp-comparison,
  body.dark-theme .whatsapp-comparison,
  html[data-theme="dark"] .chatbot-comparison,
  body.dark-theme .chatbot-comparison {
    background: #080c14 !important;
    color: #f8fafc !important;
  }
  html[data-theme="dark"] .chatbot-comparison .new-comparison-table {
    background: #0f172a !important;
    border: 1px solid rgba(255, 255, 255, 0.12) !important;
  }
  html[data-theme="dark"] .chatbot-comparison .new-comparison-table thead tr,
  html[data-theme="dark"] .chatbot-comparison .new-comparison-table thead th {
    background: #064e3b !important;
    color: #ffffff !important;
  }
  html[data-theme="dark"] .chatbot-comparison .new-comparison-table tbody tr:nth-child(even) {
    background: #0b1329 !important;
  }
  html[data-theme="dark"] .chatbot-comparison .new-comparison-table tbody tr:nth-child(odd) {
    background: #0f172a !important;
  }
  html[data-theme="dark"] .chatbot-comparison .new-comparison-table tbody tr:hover {
    background: #1e293b !important;
  }
  html[data-theme="dark"] .chatbot-comparison .new-comparison-table td {
    border-color: rgba(255, 255, 255, 0.08) !important;
    color: #e2e8f0 !important;
  }
  html[data-theme="dark"] .chatbot-comparison .new-comparison-table td:first-child {
    color: #ffffff !important;
  }
  html[data-theme="dark"] .chatbot-comparison .cmp-yes { color: #34d399 !important; }
  html[data-theme="dark"] .chatbot-comparison .cmp-no { color: #f87171 !important; }
  html[data-theme="dark"] .chatbot-comparison .cmp-partial { color: #fbbf24 !important; }
  html[data-theme="dark"] .chatbot-can-do,
  html[data-theme="dark"] .ai-engines,
  html[data-theme="dark"] .why-hellobotz,
  html[data-theme="dark"] .usecase-section,
  html[data-theme="dark"] #usecases-explore,
  html[data-theme="dark"] .faq-section {
    background: #080c14 !important;
  }
  html[data-theme="dark"] .chatbot-can-do .ccd-card,
  html[data-theme="dark"] .ai-engines .engine-card,
  html[data-theme="dark"] .usecase-section .grid-item,
  html[data-theme="dark"] #usecases-explore .use-case-card,
  html[data-theme="dark"] .faq-itemm,
  html[data-theme="dark"] .custom-faq-accordion .faq-item {
    background: #0f172a !important;
    border: 1px solid rgba(255, 255, 255, 0.08) !important;
  }
  html[data-theme="dark"] .ccd-body h3,
  html[data-theme="dark"] .engine-card h3,
  html[data-theme="dark"] .grid-item h3,
  html[data-theme="dark"] .use-case-card h3,
  html[data-theme="dark"] .faq-text,
  html[data-theme="dark"] .custom-faq-accordion .faq-question h3,
  html[data-theme="dark"] .faq-section h2 {
    color: #ffffff !important;
  }
  html[data-theme="dark"] .ccd-body p,
  html[data-theme="dark"] .engine-card p,
  html[data-theme="dark"] .grid-item p,
  html[data-theme="dark"] .faq-answerr,
  html[data-theme="dark"] .custom-faq-accordion .faq-answer {
    color: #94a3b8 !important;
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


  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style>
  .custom-faq-accordion {
    margin-top: 30px;
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
</style>

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
    margin-bottom: 24px;">
          <i class="fa-brands fa-meta meta-icon"></i> Official Meta Business Partner
        </span>
        <h1 class="hero-title">
          AI WhatsApp Chatbot That Converts Inbound Chats Into Customers</h1>
        <p class="hero-text">
          Deploy intelligent, zero-hallucination AI assistants on WhatsApp. Automatically qualify inbound leads, schedule demos, resolve complex customer FAQs 24/7, and sync real-time with your CRM and product catalog — powered by the official Meta WhatsApp Business API.
        </p>
        <div class="product-hero-actions" style="display:flex;flex-wrap:wrap;gap:12px;align-items:center;margin-top:1.5rem;">
          <a href="https://app.hellobotz.com/auth/register" class="btn text-white cta-button m-0" style="background:#4f46e5;color:#ffffff;font-weight:700;padding:12px 24px;border-radius:10px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;box-shadow:0 4px 14px rgba(79,70,229,0.35);">
            Start Free Trial →
          </a>
          <button type="button" class="btn btn-outline-primary cta-button-secondary m-0 btn-demo-open" style="border:1.5px solid #4f46e5;color:#4f46e5;background:#ffffff;font-weight:700;padding:12px 22px;border-radius:10px;cursor:pointer;">
            Book Live Demo
          </button>
          <a href="#contact-section" class="btn btn-verified-outline m-0" style="display:inline-flex;align-items:center;gap:7px;border:1.5px solid #10b981;color:#047857;background:#ecfdf5;font-weight:700;padding:12px 22px;border-radius:10px;text-decoration:none;">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified
          </a>
        </div>
      </div>
      <!-- Hero Visual -->
      <div class="col-lg-6">
        <div class="api-image-box">
          <img width="100%" src="<?php echo $bp; ?>assets/images/hellobots/ai-whatsapp-chatbot/01.png"
            alt="HelloBotz Official AI WhatsApp Chatbot Assistant" class="img-fluid" style="border-radius: 16px;">
        </div>
      </div>
    </div>

  </div>



</section>

<!-- ============ AI Chatbot vs Human Agent vs Traditional Chatbot ============ -->
<section class="whatsapp-comparison chatbot-comparison">
  <div class="container">
    <h2 class="whatsapp-heading fw-bold">AI Chatbot vs Human Agent vs Traditional Chatbot</h2>
    <p class="api-subtext">See how an AI-powered WhatsApp chatbot compares with human agents and old rule-based
      bots.</p>

    <!-- DESKTOP TABLE -->
    <div class="table-scroll">
      <table class="new-comparison-table">
        <thead>
          <tr>
            <th>Feature</th>
            <th>AI Chatbot (HelloBotz)</th>
            <th>Human Agent</th>
            <th>Traditional Rule-Based Chatbot</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Intelligence</td>
            <td><span class="cmp-yes">Understands intent and context, learns from conversations</span></td>
            <td><span class="cmp-yes">High — judgment and empathy</span></td>
            <td><span class="cmp-no">None — matches fixed keywords only</span></td>
          </tr>
          <tr>
            <td>Speed</td>
            <td><span class="cmp-yes">Instant, 24/7</span></td>
            <td><span class="cmp-partial">Limited to working hours/availability</span></td>
            <td><span class="cmp-partial">Instant, but breaks on unexpected phrasing</span></td>
          </tr>
          <tr>
            <td>Scalability</td>
            <td><span class="cmp-yes">Handles unlimited chats simultaneously</span></td>
            <td><span class="cmp-no">Limited by headcount</span></td>
            <td><span class="cmp-partial">Scales, but poor experience at volume</span></td>
          </tr>
          <tr>
            <td>Availability</td>
            <td><span class="cmp-yes">24/7, 365 days</span></td>
            <td><span class="cmp-no">Business hours only</span></td>
            <td><span class="cmp-yes">24/7</span></td>
          </tr>
          <tr>
            <td>Cost per conversation</td>
            <td><span class="cmp-yes">Low and fixed</span></td>
            <td><span class="cmp-no">High — salary, training, tools</span></td>
            <td><span class="cmp-partial">Low, but high abandonment cost</span></td>
          </tr>
          <tr>
            <td>Handles complex queries</td>
            <td><span class="cmp-yes">Yes, and escalates when needed</span></td>
            <td><span class="cmp-yes">Yes</span></td>
            <td><span class="cmp-no">No — dead-ends or loops</span></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- MOBILE CARDS -->
    <div class="wa-mobile-cards">
      <div class="wa-feature-card">
        <div class="wa-feature-name">Intelligence</div>
        <div class="wa-col-grid">
          <div class="wa-col-item">
            <div class="wa-col-header">AI Chatbot</div>
            <div class="wa-col-value"><span class="cmp-yes">Understands intent</span></div>
          </div>
          <div class="wa-col-item">
            <div class="wa-col-header">Human Agent</div>
            <div class="wa-col-value"><span class="cmp-yes">High — empathy</span></div>
          </div>
          <div class="wa-col-item">
            <div class="wa-col-header">Rule-Based</div>
            <div class="wa-col-value"><span class="cmp-no">Keywords only</span></div>
          </div>
        </div>
      </div>
      <div class="wa-feature-card">
        <div class="wa-feature-name">Speed</div>
        <div class="wa-col-grid">
          <div class="wa-col-item">
            <div class="wa-col-header">AI Chatbot</div>
            <div class="wa-col-value"><span class="cmp-yes">Instant, 24/7</span></div>
          </div>
          <div class="wa-col-item">
            <div class="wa-col-header">Human Agent</div>
            <div class="wa-col-value"><span class="cmp-partial">Working hours</span></div>
          </div>
          <div class="wa-col-item">
            <div class="wa-col-header">Rule-Based</div>
            <div class="wa-col-value"><span class="cmp-partial">Breaks easily</span></div>
          </div>
        </div>
      </div>
      <div class="wa-feature-card">
        <div class="wa-feature-name">Scalability</div>
        <div class="wa-col-grid">
          <div class="wa-col-item">
            <div class="wa-col-header">AI Chatbot</div>
            <div class="wa-col-value"><span class="cmp-yes">Unlimited chats</span></div>
          </div>
          <div class="wa-col-item">
            <div class="wa-col-header">Human Agent</div>
            <div class="wa-col-value"><span class="cmp-no">Limited by staff</span></div>
          </div>
          <div class="wa-col-item">
            <div class="wa-col-header">Rule-Based</div>
            <div class="wa-col-value"><span class="cmp-partial">Poor at volume</span></div>
          </div>
        </div>
      </div>
      <div class="wa-feature-card">
        <div class="wa-feature-name">Availability</div>
        <div class="wa-col-grid">
          <div class="wa-col-item">
            <div class="wa-col-header">AI Chatbot</div>
            <div class="wa-col-value"><span class="cmp-yes">24/7, 365 days</span></div>
          </div>
          <div class="wa-col-item">
            <div class="wa-col-header">Human Agent</div>
            <div class="wa-col-value"><span class="cmp-no">Business hours</span></div>
          </div>
          <div class="wa-col-item">
            <div class="wa-col-header">Rule-Based</div>
            <div class="wa-col-value"><span class="cmp-yes">24/7</span></div>
          </div>
        </div>
      </div>
      <div class="wa-feature-card">
        <div class="wa-feature-name">Cost per conversation</div>
        <div class="wa-col-grid">
          <div class="wa-col-item">
            <div class="wa-col-header">AI Chatbot</div>
            <div class="wa-col-value"><span class="cmp-yes">Low and fixed</span></div>
          </div>
          <div class="wa-col-item">
            <div class="wa-col-header">Human Agent</div>
            <div class="wa-col-value"><span class="cmp-no">High — salary</span></div>
          </div>
          <div class="wa-col-item">
            <div class="wa-col-header">Rule-Based</div>
            <div class="wa-col-value"><span class="cmp-partial">High drop-offs</span></div>
          </div>
        </div>
      </div>
      <div class="wa-feature-card">
        <div class="wa-feature-name">Handles complex queries</div>
        <div class="wa-col-grid">
          <div class="wa-col-item">
            <div class="wa-col-header">AI Chatbot</div>
            <div class="wa-col-value"><span class="cmp-yes">Yes + escalates</span></div>
          </div>
          <div class="wa-col-item">
            <div class="wa-col-header">Human Agent</div>
            <div class="wa-col-value"><span class="cmp-yes">Yes</span></div>
          </div>
          <div class="wa-col-item">
            <div class="wa-col-header">Rule-Based</div>
            <div class="wa-col-value"><span class="cmp-no">Dead-ends</span></div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ============ What Your AI Chatbot Can Do ============ -->
<section class="chatbot-can-do">
  <div class="container">
    <h2 class="whatsapp-heading ccd-title">What Your AI Chatbot Can Do</h2>

    <div class="ccd-grid">

      <div class="ccd-card">
        <div class="ccd-media">
          <img
            src="<?php echo $bp; ?>assets/images/hellobots/ai-whatsapp-chatbot/1789624184091_19a9c417_Answers_FAQs_Inst.png"
            alt="WhatsApp AI chatbot answering customer FAQs instantly" loading="lazy" width="100%" height="360">
        </div>
        <div class="ccd-body">
          <h3>Answers FAQs Instantly</h3>
          <p>No more repetitive manual replies. From pricing, catalog queries, delivery windows to return policies, your AI chatbot provides immediate, verified answers 24/7.</p>
        </div>
      </div>


      <div class="ccd-card">
        <div class="ccd-media">
          <img
            src="<?php echo $bp; ?>assets/images/hellobots/ai-whatsapp-chatbot/1789624189254_6a40793e_Qualifies_Every_L.png"
            alt="Chatbot qualifying leads on WhatsApp" loading="lazy" width="100%" height="360">
        </div>
        <div class="ccd-body">
          <h3>Qualifies Every Inbound Lead</h3>
          <p>Automate lead scoring by collecting budget, requirements, and timeline parameters, routing only high-intent, sales-ready prospects directly to your sales team.</p>
        </div>
      </div>

      <div class="ccd-card">
        <div class="ccd-media">
          <img
            src="<?php echo $bp; ?>assets/images/hellobots/ai-whatsapp-chatbot/1789624186412_bb02a085_Books_Appointment.png"
            alt="Booking appointments inside WhatsApp" loading="lazy" width="100%" height="360">
        </div>
        <div class="ccd-body">
          <h3>Books Appointments On the Spot</h3>
          <p>Customers select and confirm available slots directly within WhatsApp, auto-syncing with Calendly and Google Calendar without phone tag.</p>
        </div>
      </div>

      <div class="ccd-card">
        <div class="ccd-media">
          <img
            src="<?php echo $bp; ?>assets/images/hellobots/ai-whatsapp-chatbot/1789624190253_45fa1398_Recommends_the_Ri.png"
            alt="Chatbot recommending the right product" loading="lazy" width="100%" height="360">
        </div>
        <div class="ccd-body">
          <h3>Recommends the Right Product</h3>
          <p>Analyzes customer preferences and search inquiries to showcase tailored product carousels with real-time pricing and 1-tap WhatsApp checkout links.</p>
        </div>
      </div>

      <div class="ccd-card">
        <div class="ccd-media">
          <img
            src="<?php echo $bp; ?>assets/images/hellobots/ai-whatsapp-chatbot/1789624188262_2cee0169_Keeps_Customers_P.png"
            alt="Automated order and shipping updates on WhatsApp" loading="lazy" width="100%" height="360">
        </div>
        <div class="ccd-body">
          <h3>Keeps Customers Posted on Orders</h3>
          <p>Shipping updates, tracking URLs, and dispatch confirmations are delivered automatically the moment order status changes in Shopify or WooCommerce.</p>
        </div>
      </div>

      <div class="ccd-card">
        <div class="ccd-media">
          <img
            src="<?php echo $bp; ?>assets/images/hellobots/ai-whatsapp-chatbot/1789624187230_96a61986_Handoff_to_Human.png"
            alt="Chatbot handing off the conversation to a human agent" loading="lazy" width="100%" height="360">
        </div>
        <div class="ccd-body">
          <h3>Seamless Human Escalation</h3>
          <p>When high-touch human expertise is required, the conversation transitions smoothly to your team inbox with full conversational context and CRM history attached.</p>
        </div>
      </div>

    </div>
  </div>
</section>




<!-- ============ Choose the AI Engine Behind Your Chatbot ============ -->
<section class="ai-engines">
  <div class="container">
    <h2 class="whatsapp-heading fw-bold">Choose the AI Engine Behind Your Chatbot</h2>
    <p class="api-subtext">Every AI model brings different strengths to a conversation. With HelloBotz, you can
      choose the one that matches your business communication style while training it on your own content.</p>

    <div class="engine-grid">

      <div class="engine-card">
        <div class="engine-logo">
          <img loading="lazy" src="https://cdn.simpleicons.org/openai/10A37F" alt="ChatGPT (OpenAI) logo" width="48"
            height="48">
        </div>
        <h3>GPT-4o (OpenAI)</h3>
        <p>The global benchmark for natural, flowing conversation. Excels at nuanced multilingual comprehension, witty responses, and high-converting commercial banter.</p>
        <div class="engine-link btn-demo-open" role="button" tabindex="0" data-product="Chatbot" style="cursor:pointer;">Deploy GPT-4o <svg xmlns="http://www.w3.org/2000/svg"
            width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round" class="arrow-icon">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg></div>
      </div>

      <div class="engine-card">
        <div class="engine-logo">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/hellobots/ai-whatsapp-chatbot/img_ef2bc8434b.png" alt="Claude (Anthropic) logo" width="48"
            height="48">
        </div>
        <h3>Claude 3.5 Sonnet (Anthropic)</h3>
        <p>Engineered for unmatched safety, precision, and zero-hallucination compliance. The premier choice for technical documentation, policies, and complex workflows.</p>
        <div class="engine-link btn-demo-open" role="button" tabindex="0" data-product="Chatbot" style="cursor:pointer;">Deploy Claude <svg xmlns="http://www.w3.org/2000/svg"
            width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round" class="arrow-icon">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg></div>
      </div>

      <div class="engine-card">
        <div class="engine-logo">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/hellobots/ai-whatsapp-chatbot/img_9dc4c66f41.png" alt="Gemini (Google) logo"
            width="48" height="48">
        </div>
        <h3>Gemini 1.5 Pro (Google)</h3>
        <p>Google&rsquo;s flagship multimodal AI engine. Built with massive context windows to ingest large PDFs, product catalogs, customer histories, and rich media files.</p>
        <div class="engine-link btn-demo-open" role="button" tabindex="0" data-product="Chatbot" style="cursor:pointer;">Deploy Gemini <svg xmlns="http://www.w3.org/2000/svg"
            width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round" class="arrow-icon">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg></div>
      </div>

    </div>
  </div>
</section>


<!-- ============ Why Businesses Choose HelloBotz ============ -->
<section class="why-hellobotz why-hellobots">
    <div class="container">
        <h2 class="whatsapp-heading fw-bold text-center">Why Businesses Choose HelloBotz for WhatsApp AI Chatbot</h2>

        <div class="wg-grid">

            <article class="wg-card wg-card--1" tabindex="0">
                <h3>AI Chatbot Across WhatsApp Groups</h3>
                <ul class="wg-points">
                    <li><svg class="wg-check" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1.1 14.2-4-4 1.4-1.4 2.6 2.6 5.4-5.4 1.4 1.4-6.8 6.8z" />
                        </svg><span>Connect your AI chatbot to all your WhatsApp support groups.</span></li>
                    <li><svg class="wg-check" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1.1 14.2-4-4 1.4-1.4 2.6 2.6 5.4-5.4 1.4 1.4-6.8 6.8z" />
                        </svg><span>Let it automatically handle each member&rsquo;s queries without manual monitoring.</span></li>
                    <li><svg class="wg-check" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1.1 14.2-4-4 1.4-1.4 2.6 2.6 5.4-5.4 1.4 1.4-6.8 6.8z" />
                        </svg><span>Escalates group conversations to your team only when human judgment is needed.</span></li>
                </ul>
            </article>

            <article class="wg-card wg-card--2" tabindex="0">
                <h3>Replies in Whatever Language Your Customer Types</h3>
                <ul class="wg-points">
                    <li><svg class="wg-check" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1.1 14.2-4-4 1.4-1.4 2.6 2.6 5.4-5.4 1.4 1.4-6.8 6.8z" />
                        </svg><span>The AI automatically detects the customer&rsquo;s language without manual setup per chat.</span></li>
                    <li><svg class="wg-check" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1.1 14.2-4-4 1.4-1.4 2.6 2.6 5.4-5.4 1.4 1.4-6.8 6.8z" />
                        </svg><span>Respond in the same language with simple and clear wording.</span></li>
                    <li><svg class="wg-check" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1.1 14.2-4-4 1.4-1.4 2.6 2.6 5.4-5.4 1.4 1.4-6.8 6.8z" />
                        </svg><span>No leads are lost due to language barriers.</span></li>
                </ul>
            </article>

            <article class="wg-card wg-card--3" tabindex="0">
                <h3>Built on the Official WhatsApp Business API</h3>
                <ul class="wg-points">
                    <li><svg class="wg-check" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1.1 14.2-4-4 1.4-1.4 2.6 2.6 5.4-5.4 1.4 1.4-6.8 6.8z" />
                        </svg><span>HelloBotz is a Meta-verified Business Partner.</span></li>
                    <li><svg class="wg-check" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1.1 14.2-4-4 1.4-1.4 2.6 2.6 5.4-5.4 1.4 1.4-6.8 6.8z" />
                        </svg><span>Get a verified business name with an official blue tick badge.</span></li>
                    <li><svg class="wg-check" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1.1 14.2-4-4 1.4-1.4 2.6 2.6 5.4-5.4 1.4 1.4-6.8 6.8z" />
                        </svg><span>Manage templates and campaigns while automatically qualifying and converting chatbot responses.</span></li>
                </ul>
            </article>

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
        <h3><i class="fas fa-database"></i> WhatsApp Interactive</h3>
        <p>Engage customers with interactive buttons, lists and reply options that make conversations faster, easier, and actionable.</p>
               
<a class="learn-more" href="<?php echo $bp; ?>products/whatsapp-interactive-messages/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
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
<!-- INTERACTIVE JOURNEY FLOW SECTION -->
<style>
.bot-journey-section {
  padding: 5rem 0;
  background: #f8fafc;
  border-top: 1px solid #e2e8f0;
  border-bottom: 1px solid #e2e8f0;
  position: relative;
}
.bot-journey-container {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 1.25rem;
  box-sizing: border-box;
  text-align: center;
}
.bot-j-kicker {
  font-size: 0.8rem;
  font-weight: 800;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #4f46e5;
  margin-bottom: 0.6rem;
}
.bot-j-title {
  font-size: clamp(1.8rem, 2.8vw, 2.4rem);
  font-weight: 800;
  color: #0f172a;
  letter-spacing: -0.025em;
  margin-bottom: 0.85rem;
  line-height: 1.25;
}
.bot-j-intro {
  font-size: 1.05rem;
  color: #475569;
  max-width: 680px;
  margin: 0 auto 2.5rem;
  line-height: 1.6;
}
.bot-j-nav {
  display: flex;
  justify-content: center;
  gap: 0.75rem;
  flex-wrap: wrap;
  margin-bottom: 2.75rem;
}
.bot-j-tab {
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
.bot-j-tab:hover {
  background: #f1f5f9;
  color: #0f172a;
  border-color: #94a3b8;
}
.bot-j-tab.active {
  background: #4f46e5;
  color: #ffffff;
  border-color: #4f46e5;
  box-shadow: 0 4px 16px rgba(79, 70, 229, 0.35);
}
.bot-j-timeline {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.25rem;
}
@media (max-width: 992px) {
  .bot-j-timeline {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 576px) {
  .bot-j-timeline {
    grid-template-columns: 1fr;
  }
}
.bot-j-card {
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
.bot-j-card:hover {
  transform: translateY(-4px);
  border-color: #818cf8;
  box-shadow: 0 12px 30px rgba(79, 70, 229, 0.12);
}
.bot-j-step-num {
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
.bot-j-card h4 {
  font-size: 1.12rem;
  font-weight: 700;
  color: #0f172a;
  margin-bottom: 0.5rem;
  min-height: 2.5rem;
  display: flex;
  align-items: center;
}
.bot-j-card p {
  font-size: 0.9rem;
  color: #475569;
  line-height: 1.55;
  margin-bottom: 1.25rem;
  flex-grow: 1;
}
.bot-j-badge {
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

<section class="bot-journey-section" id="journey-flow">
  <div class="bot-journey-container">
    <div class="bot-j-kicker">AUTONOMOUS CONVERSATIONAL FLOW</div>
    <h2 class="bot-j-title">How HelloBotz AI Chatbot converts queries into revenue.</h2>
    <p class="bot-j-intro">Experience how natural language AI understands intent, takes actions via APIs, and delights customers 24/7.</p>

    <!-- Scenario Switcher -->
    <div class="bot-j-nav">
      <button type="button" class="bot-j-tab active" onclick="botSwitchJourney('ecommerce', this)">🛒 E-Commerce FAQ & Orders</button>
        <button type="button" class="bot-j-tab" onclick="botSwitchJourney('booking', this)">📅 Healthcare & Appointment Booking</button>
        <button type="button" class="bot-j-tab" onclick="botSwitchJourney('b2blead', this)">💼 B2B Lead Qualification</button>
    </div>

    <!-- 4-Stage Cards -->
    <div class="bot-j-timeline">
        <div class="bot-j-card" id="bot-step-1">
          <div class="bot-j-step-num">01</div>
          <h4 id="bot-title-1">Shopper Inquiry</h4>
          <p id="bot-desc-1">Customer asks about order status, return policy, or sizing.</p>
          <span class="bot-j-badge" id="bot-badge-1">Instant Inbound</span>
        </div>
        <div class="bot-j-card" id="bot-step-2">
          <div class="bot-j-step-num">02</div>
          <h4 id="bot-title-2">NLP & CRM Lookup</h4>
          <p id="bot-desc-2">AI parses intent and queries Shopify/WooCommerce API via order #.</p>
          <span class="bot-j-badge" id="bot-badge-2">Zero Hallucination</span>
        </div>
        <div class="bot-j-card" id="bot-step-3">
          <div class="bot-j-step-num">03</div>
          <h4 id="bot-title-3">Instant Contextual Reply</h4>
          <p id="bot-desc-3">Bot replies with live tracking link and estimated delivery window.</p>
          <span class="bot-j-badge" id="bot-badge-3"><1s Response Time</span>
        </div>
        <div class="bot-j-card" id="bot-step-4">
          <div class="bot-j-step-num">04</div>
          <h4 id="bot-title-4">Cross-Sell Offer</h4>
          <p id="bot-desc-4">Bot suggests complementary items with 1-click WhatsApp checkout.</p>
          <span class="bot-j-badge" id="bot-badge-4">+28% Repeat Sales</span>
        </div>
    </div>
  </div>
</section>

<script>
(function() {
  var journeyData = {"ecommerce": [{"title": "Shopper Inquiry", "desc": "Customer asks about order status, return policy, or sizing.", "badge": "Instant Inbound"}, {"title": "NLP & CRM Lookup", "desc": "AI parses intent and queries Shopify/WooCommerce API via order #.", "badge": "Zero Hallucination"}, {"title": "Instant Contextual Reply", "desc": "Bot replies with live tracking link and estimated delivery window.", "badge": "<1s Response Time"}, {"title": "Cross-Sell Offer", "desc": "Bot suggests complementary items with 1-click WhatsApp checkout.", "badge": "+28% Repeat Sales"}], "booking": [{"title": "Appointment Request", "desc": "Patient asks to book a consultation slot or dental checkup.", "badge": "24/7 Availability"}, {"title": "Live Calendar Check", "desc": "Bot connects to Google Calendar/EHR and presents available slots.", "badge": "Real-Time Sync"}, {"title": "1-Tap Confirmation", "desc": "Patient picks slot and confirms details; Meet link issued in-chat.", "badge": "Instant Booking"}, {"title": "Automated Reminder", "desc": "WhatsApp reminders sent 24h & 2h before visit to eliminate no-shows.", "badge": "78% Less No-Shows"}], "b2blead": [{"title": "Ad / Website Inbound", "desc": "Buyer clicks ad and initiates chat asking for enterprise pricing.", "badge": "High Intent"}, {"title": "Smart Qualification", "desc": "Bot asks team size, budget, and timeline to calculate lead score.", "badge": "Automated Scoring"}, {"title": "AE Routing", "desc": "Hot leads assigned immediately to enterprise AE with priority tag.", "badge": "Zero Drop-Off"}, {"title": "Demo Scheduled", "desc": "Prospect selects an open calendar demo slot directly inside WhatsApp.", "badge": "4.2x Faster Pipeline"}]};

  window.botSwitchJourney = function(scenarioId, btn) {
    var nav = btn.closest('.bot-j-nav');
    if (nav) {
      var tabs = nav.querySelectorAll('.bot-j-tab');
      for (var t = 0; t < tabs.length; t++) {
        tabs[t].classList.remove('active');
      }
    }
    btn.classList.add('active');

    var steps = journeyData[scenarioId];
    if (!steps) return;

    for (var i = 0; i < steps.length; i++) {
      var num = i + 1;
      var titleEl = document.getElementById('bot-title-' + num);
      var descEl = document.getElementById('bot-desc-' + num);
      var badgeEl = document.getElementById('bot-badge-' + num);
      var cardEl = document.getElementById('bot-step-' + num);

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
        var c = document.getElementById('bot-step-' + j);
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
      <h2 class="whatsapp-heading fw-bold text-center mb-4">Frequently Asked Questions</h2>

      <div class="faq-item">
        <button class="faq-question open" type="button" aria-expanded="true" aria-controls="faq-answer-1">
          <span class="faq-title"><h3>Is HelloBotz's AI Chatbot built on the official Meta WhatsApp Business API?</h3></span>
          <span class="faq-arrow" aria-hidden="true"></span>
        </button>
        <div id="faq-answer-1" class="faq-answer open" role="region" aria-hidden="false" style="max-height:none;">
          Yes, 100%. HelloBotz is an official Meta Business Partner. All chatbot conversations run strictly through the official WhatsApp Business Cloud API route, providing enterprise-grade encryption, high throughput, Meta verification support, and zero risk of phone number bans associated with unofficial scraping tools.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-2">
          <span class="faq-title"><h3>Which AI models power HelloBotz, and can I choose between them?</h3></span>
          <span class="faq-arrow" aria-hidden="true"></span>
        </button>
        <div id="faq-answer-2" class="faq-answer" role="region" aria-hidden="true">
          HelloBotz features a multi-LLM engine allowing you to power your chatbot with OpenAI's GPT-4o, Anthropic's Claude 3.5 Sonnet, or Google's Gemini 1.5 Pro. You can switch models or route inquiries dynamically based on whether your use case demands natural conversational sales banter, complex analytical logic, or multimodal document processing.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-3">
          <span class="faq-title"><h3>How does HelloBotz guarantee zero hallucinations and grounded responses?</h3></span>
          <span class="faq-arrow" aria-hidden="true"></span>
        </button>
        <div id="faq-answer-3" class="faq-answer" role="region" aria-hidden="true">
          HelloBotz utilizes strict retrieval-augmented generation (RAG) and customizable boundary constraints. The AI is grounded exclusively on your verified business knowledge base—including website URLs, PDF catalogs, internal policies, and FAQ documents. If an inquiry falls outside your verified data, the bot politely flags the limitation or triggers an instant human handoff.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-4">
          <span class="faq-title"><h3>Can the chatbot integrate with our CRM, Shopify store, and booking tools?</h3></span>
          <span class="faq-arrow" aria-hidden="true"></span>
        </button>
        <div id="faq-answer-4" class="faq-answer" role="region" aria-hidden="true">
          Yes. HelloBotz offers seamless native integrations with Shopify, WooCommerce, HubSpot, Zoho CRM, Salesforce, Google Sheets, Calendly, and custom REST API webhooks. Your chatbot can look up live order statuses, recommend in-stock catalog products, confirm appointment bookings, and update CRM contact lead scores in real time without human intervention.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-5">
          <span class="faq-title"><h3>How does the AI hand off complex conversations to human agents?</h3></span>
          <span class="faq-arrow" aria-hidden="true"></span>
        </button>
        <div id="faq-answer-5" class="faq-answer" role="region" aria-hidden="true">
          When a customer requests human assistance or asks a question requiring high-touch human approval, HelloBotz seamlessly routes the chat to your team's HelloBotz Shared Multi-Agent Inbox. The assigned support agent receives the full conversational transcript and CRM customer profile so they can jump in immediately without asking the customer to repeat themselves.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-6">
          <span class="faq-title"><h3>How quickly can we launch, and do we need technical or AI coding skills?</h3></span>
          <span class="faq-arrow" aria-hidden="true"></span>
        </button>
        <div id="faq-answer-6" class="faq-answer" role="region" aria-hidden="true">
          No coding or AI engineering experience is required. With HelloBotz's intuitive visual drag-and-drop workflow builder and 1-click knowledge base sync, most businesses are live in under 15 minutes. You simply connect your WhatsApp Business number, upload your documents or website link, define your brand tone, and activate your bot.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-7">
          <span class="faq-title"><h3>How does WhatsApp conversation pricing work for inbound AI customer chats?</h3></span>
          <span class="faq-arrow" aria-hidden="true"></span>
        </button>
        <div id="faq-answer-7" class="faq-answer" role="region" aria-hidden="true">
          When customers message your WhatsApp chatbot first (User-Initiated / Service Conversations), you receive an active 24-hour customer service window where unlimited incoming and outgoing messages are completely free from Meta per-message conversation fees. If incoming traffic originates from Click-to-WhatsApp (CTWA) ads, Meta provides a 72-hour completely free messaging window, drastically reducing acquisition and support costs.
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
          "name": "Is HelloBotz's AI Chatbot built on the official Meta WhatsApp Business API?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, 100%. HelloBotz is an official Meta Business Partner. All chatbot conversations run strictly through the official WhatsApp Business Cloud API route, providing enterprise-grade encryption, high throughput, Meta verification support, and zero risk of phone number bans associated with unofficial scraping tools."
          }
        },
        {
          "@type": "Question",
          "name": "Which AI models power HelloBotz, and can I choose between them?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "HelloBotz features a multi-LLM engine allowing you to power your chatbot with OpenAI's GPT-4o, Anthropic's Claude 3.5 Sonnet, or Google's Gemini 1.5 Pro. You can switch models or route inquiries dynamically based on whether your use case demands natural conversational sales banter, complex analytical logic, or multimodal document processing."
          }
        },
        {
          "@type": "Question",
          "name": "How does HelloBotz guarantee zero hallucinations and grounded responses?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "HelloBotz utilizes strict retrieval-augmented generation (RAG) and customizable boundary constraints. The AI is grounded exclusively on your verified business knowledge base—including website URLs, PDF catalogs, internal policies, and FAQ documents. If an inquiry falls outside your verified data, the bot politely flags the limitation or triggers an instant human handoff."
          }
        },
        {
          "@type": "Question",
          "name": "Can the chatbot integrate with our CRM, Shopify store, and booking tools?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. HelloBotz offers seamless native integrations with Shopify, WooCommerce, HubSpot, Zoho CRM, Salesforce, Google Sheets, Calendly, and custom REST API webhooks. Your chatbot can look up live order statuses, recommend in-stock catalog products, confirm appointment bookings, and update CRM contact lead scores in real time without human intervention."
          }
        },
        {
          "@type": "Question",
          "name": "How does the AI hand off complex conversations to human agents?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "When a customer requests human assistance or asks a question requiring high-touch human approval, HelloBotz seamlessly routes the chat to your team's HelloBotz Shared Multi-Agent Inbox. The assigned support agent receives the full conversational transcript and CRM customer profile so they can jump in immediately without asking the customer to repeat themselves."
          }
        },
        {
          "@type": "Question",
          "name": "How quickly can we launch, and do we need technical or AI coding skills?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No coding or AI engineering experience is required. With HelloBotz's intuitive visual drag-and-drop workflow builder and 1-click knowledge base sync, most businesses are live in under 15 minutes. You simply connect your WhatsApp Business number, upload your documents or website link, define your brand tone, and activate your bot."
          }
        },
        {
          "@type": "Question",
          "name": "How does WhatsApp conversation pricing work for inbound AI customer chats?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "When customers message your WhatsApp chatbot first (User-Initiated / Service Conversations), you receive an active 24-hour customer service window where unlimited incoming and outgoing messages are completely free from Meta per-message conversation fees. If incoming traffic originates from Click-to-WhatsApp (CTWA) ads, Meta provides a 72-hour completely free messaging window, drastically reducing acquisition and support costs."
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

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  // Init Swiper if present
  if (typeof Swiper !== 'undefined') {
    document.querySelector(".partners-slider") && new Swiper(".partners-slider", {
      slidesPerView: 2,
      spaceBetween: 20,
      loop: true,
      autoplay: { delay: 2500, disableOnInteraction: false },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: { slidesPerView: 3, spaceBetween: 20 },
        768: { slidesPerView: 4, spaceBetween: 30 },
        1024: { slidesPerView: 5, spaceBetween: 30 }
      }
    });
  }

  // Demo modal openers
  const demoButtons = document.querySelectorAll('.book-demo-btn, .btn-demo-open');
  demoButtons.forEach(function (button) {
    button.style.cursor = 'pointer';
    button.addEventListener('click', function (e) {
      e.preventDefault();
      const productSelect = document.getElementById('dm-product');
      if (productSelect) {
        productSelect.value = 'Chatbot';
      }
      if (typeof window.openDemoModal === 'function') {
        window.openDemoModal();
      } else {
        const modal = document.getElementById('demo-popup');
        if (modal) {
          modal.hidden = false;
          requestAnimationFrame(() => modal.classList.add('open'));
          document.body.classList.add('menu-open');
        }
      }
    });
  });

  // Banner rotation if element exists
  const bannerTrack = document.getElementById("bannerTrack");
  if (bannerTrack && bannerTrack.children.length > 0) {
    let bannerIndex = 0;
    const bannerTotal = bannerTrack.children.length;
    setInterval(() => {
      bannerIndex = (bannerIndex + 1) % bannerTotal;
      bannerTrack.style.transform = `translateX(-${bannerIndex * 100}%)`;
    }, 3000);
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
    <h2 class="hb-bottom-cta-title">Ready to transform your business with AI WhatsApp Chatbot?</h2>
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


<?php include __DIR__ . '/../../includes/footer.php'; ?>
