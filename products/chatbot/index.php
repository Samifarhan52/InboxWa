<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'AI WhatsApp Chatbot | 24/7 Smart Conversations | HelloBots';
$pageDescription = 'Deploy no-code AI assistants to automate customer inquiries, book appointments, and close sales on WhatsApp around the clock.';
$canonicalUrl = 'https://hellobotz.com/products/chatbot/';
$ogImage = 'https://hellobotz.com/assets/images/hellobots/ai-whatsapp-chatbot/01.png';
$ogTitle = 'AI WhatsApp Chatbot | 24/7 Smart Conversations | HelloBots';
$ogDescription = 'Deploy no-code AI assistants to automate customer inquiries, book appointments, and close sales on WhatsApp around the clock.';

include __DIR__ . '/../../includes/header.php';
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
<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/getgabs-ai-whatsapp-chatbot.css">

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
    src="https://HelloBots.com/wp-content/themes/sierra/assets/jsnewhome/header-shared.js?v=1788956171"></script><link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://HelloBots.com/wp-content/themes/sierra/assets/css/ai-whatsapp-chatbot.css"
  class="css">
<link rel="stylesheet" href="https://HelloBots.com/wp-content/themes/sierra/assets/css/template-industry.css" class="css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">

<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
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
    margin-bottom: 40px;">
          <i class="fa-brands fa-meta meta-icon"></i> Official Meta Partner
        </span>
        <h1 class="hero-title">
          AI WhatsApp Chatbot That Turns Conversations Into Customers</h1>
        <p class="hero-text">
          HelloBots' AI WhatsApp Chatbot understands context, responds quickly in your brand voice, and works 24/7 —
          powered by the official WhatsApp Business API </p>
        <div class="btn-group">
          <!-- Enquiry Now Button -->
          <button class="btn-call me-4 button1 order-lg-1 order-2" id="rcmCallAction">
            <!--<i class="fa-solid fa-link"></i> -->
            <a href="https://app.HelloBots.com/register" target="_blank" rel="noopener noreferrer"
              style="text-decoration: none; color: white;">Try for Free</a>
          </button>

          <!-- Book A Free Demo Button -->
          <div class="btn-book text-decoration-none d-flex align-items-center button1 order-lg-2 order-1 book-demo-btn">
            <!--<i class="fa-solid fa-calendar me-2"></i>-->
            Book A Demo
          </div>


        </div>



      </div>
      <!-- Video Content -->
      <div class="col-lg-6">
        <div class="api-image-box">
          <img width="100%" src="/assets/images/hellobots/ai-whatsapp-chatbot/01.png"
            alt="AI WhatsApp Chatbot">
        </div>
      </div>
    </div>

  </div>



</section>


<section class="what-is-api" style="padding: 60px 0px; background-color: #f9f9f9;;">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-4 whatsapp-heading">Understand WhatsApp AI Chatbot</h2>
      </div>
      <div class="col-12">
        <p class="text-center">
          An AI WhatsApp chatbot is a virtual agent that runs on the <a
            href="https://HelloBots.com/whatsapp-business-api/" target="_blank" rel="noopener noreferrer">WhatsApp
            Business API</a> and uses natural language
          understanding to engage in real conversations, instead of just matching keywords. It understands intent,
          retains context within a chat, and improves the more it’s used.
        </p>
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
          <img src="/assets/images/hellobots/ai-whatsapp-chatbot/Footer_Logo.png" alt="Looks Salon">
        </div>
        <div class="swiper-slide">
          <img src="/assets/images/hellobots/ai-whatsapp-chatbot/Mahindra-Logo-2000.png" alt="Mahindra">
        </div>
        <div class="swiper-slide">
          <img src="/assets/images/hellobots/ai-whatsapp-chatbot/SkodaLogoNew.png" alt="Skoda">
        </div>
        <div class="swiper-slide">
          <img src="/assets/images/hellobots/ai-whatsapp-chatbot/Vegtration_Logo.png" alt="Vegetarian Brand">
        </div>
        <div class="swiper-slide">
          <img src="/assets/images/hellobots/ai-whatsapp-chatbot/zee-business.png" alt="Zee Business">
        </div>
      </div>
      <!-- Pagination and Navigation Buttons -->

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
            <th>AI Chatbot (HelloBots)</th>
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
            src="/assets/images/hellobots/ai-whatsapp-chatbot/1789624184091_19a9c417_Answers_FAQs_Inst.png"
            alt="WhatsApp AI chatbot answering customer FAQs instantly" loading="lazy" width="100%" height="360">
        </div>
        <div class="ccd-body">
          <h3>Answers FAQs Instantly</h3>
          <p>No more typing the same response. From pricing, hours, delivery windows to return policy, your chatbot
            offers instant answers at any time of day.</p>
        </div>
      </div>


      <div class="ccd-card">
        <div class="ccd-media">
          <img
            src="/assets/images/hellobots/ai-whatsapp-chatbot/1789624189254_6a40793e_Qualifies_Every_L.png"
            alt="Chatbot qualifying leads on WhatsApp" loading="lazy" width="100%" height="360">
        </div>
        <div class="ccd-body">
          <h3>Qualifies Every Lead</h3>
          <p>It helps qualify leads by asking the right questions like budget, requirements, or timelines before
            routing only high-intent prospects to your sales team.</p>
        </div>
      </div>

      <div class="ccd-card">
        <div class="ccd-media">
          <img
            src="/assets/images/hellobots/ai-whatsapp-chatbot/1789624186412_bb02a085_Books_Appointment.png"
            alt="Booking appointments inside WhatsApp" loading="lazy" width="100%" height="360">
        </div>
        <div class="ccd-body">
          <h3>Books Appointments On the Spot</h3>
          <p>Customers can select and confirm slots directly within WhatsApp, eliminating missed calls and
            double-booked calendars.</p>
        </div>
      </div>

      <div class="ccd-card">
        <div class="ccd-media">
          <img
            src="/assets/images/hellobots/ai-whatsapp-chatbot/1789624190253_45fa1398_Recommends_the_Ri.png"
            alt="Chatbot recommending the right product" loading="lazy" width="100%" height="360">
        </div>
        <div class="ccd-body">
          <h3>Recommends the Right Product</h3>
          <p>Based on customer inquiries, it suggests a suitable match with images, pricing details, and direct
            purchase links.</p>
        </div>
      </div>

      <div class="ccd-card">
        <div class="ccd-media">
          <img
            src="/assets/images/hellobots/ai-whatsapp-chatbot/1789624188262_2cee0169_Keeps_Customers_P.png"
            alt="Automated order and shipping updates on WhatsApp" loading="lazy" width="100%" height="360">
        </div>
        <div class="ccd-body">
          <h3>Keeps Customers Posted on Orders</h3>
          <p>Shipping updates, delivery status, and order confirmations are sent automatically the moment something
            changes.</p>
        </div>
      </div>

      <div class="ccd-card">
        <div class="ccd-media">
          <img
            src="/assets/images/hellobots/ai-whatsapp-chatbot/1789624187230_96a61986_Handoff_to_Human.png"
            alt="Chatbot handing off the conversation to a human agent" loading="lazy" width="100%" height="360">
        </div>
        <div class="ccd-body">
          <h3>Handoff to Human</h3>
          <p>When a conversation requires human expertise or personalized support, the chatbot hands off queries to a
            human agent with full chat history attached.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============ How It Works ============ -->
<section class="steps-section">
  <div class="container">
    <div class="row">

      <!-- LEFT STICKY CONTENT -->
      <div class="col-lg-5">
        <div class="left-content">
          <h2 style="text-align:start;">How It Works</h2>
          <p>
            Get your AI WhatsApp chatbot live in four simple steps — no coding needed.
          </p>
          <a href="https://app.HelloBots.com/register/" class="btn-cta mb-4">Get Started<svg
              xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="arrow-icon">
              <path d="M5 12h14"></path>
              <path d="m12 5 7 7-7 7"></path>
            </svg></a>
        </div>
      </div>

      <!-- RIGHT SCROLLING STEPS -->
      <div class="col-lg-7">

        <div class="step-card">
          <div class="step-header">
            <div class="step-numberr">1</div>
            <div class="step-title">Connect Your WhatsApp Business Account</div>
          </div>
          <div class="step-desc">
            Link your number through the official WhatsApp Business API in a few clicks.
          </div>
        </div>

        <div class="step-card">
          <div class="step-header">
            <div class="step-numberr">2</div>
            <div class="step-title">Train It on Your Business</div>
          </div>
          <div class="step-desc">
            Upload your FAQs, product catalog, or website content. The chatbot learns your business instead of a generic
            script.
          </div>
        </div>

        <div class="step-card">
          <div class="step-header">
            <div class="step-numberr">3</div>
            <div class="step-title">Set the Rules — and Choose Your AI Engine</div>
          </div>
          <div class="step-desc">
            Decide what it can answer on its own, when the conversation should be handed over to the team, and pick the
            AI engine powering the conversation.
          </div>
        </div>

        <div class="step-card">
          <div class="step-header">
            <div class="step-numberr">4</div>
            <div class="step-title">Go Live</div>
          </div>
          <div class="step-desc">
            Your AI WhatsApp chatbot starts handling conversations instantly without any coding required.
          </div>
        </div>

      </div>

    </div>
  </div>
</section>


<!-- ============ Choose the AI Engine Behind Your Chatbot ============ -->
<section class="ai-engines">
  <div class="container">
    <h2 class="whatsapp-heading fw-bold">Choose the AI Engine Behind Your Chatbot</h2>
    <p class="api-subtext">Every AI model brings different strengths to a conversation. With HelloBots, you can
      choose the one that matches your business communication style while training it on your own content.</p>

    <div class="engine-grid">

      <div class="engine-card">
        <div class="engine-logo">
          <img loading="lazy" src="https://cdn.simpleicons.org/openai/10A37F" alt="ChatGPT (OpenAI) logo" loading="lazy" width="48"
            height="48">
        </div>
        <h3>ChatGPT (OpenAI)</h3>
        <p>The industry standard for natural, flowing conversation. Excels at handling varied phrasing, creative
          responses, and open-ended questions.</p>
        <a class="engine-link" href="LEARN_MORE_URL_CHATGPT">Learn more <svg xmlns="http://www.w3.org/2000/svg"
            width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round" class="arrow-icon">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg></a>
      </div>

      <div class="engine-card">
        <div class="engine-logo">
          <img loading="lazy" src="/assets/images/hellobots/ai-whatsapp-chatbot/img_ef2bc8434b.png" alt="Claude (Anthropic) logo" loading="lazy" width="48"
            height="48">
        </div>
        <h3>Claude (Anthropic)</h3>
        <p>Built for accuracy and detailed responses. It is an ideal fit when customers need step-by-step explanations,
          and your chatbot has to follow multi-part instructions correctly.</p>
        <a class="engine-link" href="LEARN_MORE_URL_CLAUDE">Learn more <svg xmlns="http://www.w3.org/2000/svg"
            width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round" class="arrow-icon">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg></a>
      </div>

      <div class="engine-card">
        <div class="engine-logo">
          <img loading="lazy" src="/assets/images/hellobots/ai-whatsapp-chatbot/img_9dc4c66f41.png" alt="Gemini (Google) logo" loading="lazy"
            width="48" height="48">
        </div>
        <h3>Gemini (Google)</h3>
        <p>Google&rsquo;s advanced multimodal AI model that is well-suited for conversations that mix text,
          documents,
          images, and other media.</p>
        <a class="engine-link" href="LEARN_MORE_URL_GEMINI">Learn more <svg xmlns="http://www.w3.org/2000/svg"
            width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round" class="arrow-icon">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg></a>
      </div>

    </div>
  </div>
</section>


<!-- ============ Why Businesses Choose HelloBots ============ -->
<section class="why-HelloBots">
    <div class="container">
        <h2 class="whatsapp-heading fw-bold">Why Businesses Choose HelloBots for WhatsApp AI Chatbot</h2>

        <div class="wg-grid">

            <article class="wg-card wg-card--1" tabindex="0">

                <div class="wg-front">
                    <h3>AI Chatbot Across WhatsApp Groups</h3>
                    <div class="wg-brand"><img src="/assets/images/hellobots/ai-whatsapp-chatbot/Footer_Logo.png" alt="HelloBots" loading="lazy"></div>
                </div>

                <div class="wg-back">
                    <div class="wg-back-label">What you get</div>
                    <div class="wg-brand"><img src="/assets/images/hellobots/ai-whatsapp-chatbot/Footer_Logo.png" alt="HelloBots" loading="lazy"></div>
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
                </div>

            </article>

            <article class="wg-card wg-card--2" tabindex="0">

                <div class="wg-front">
                    <h3>Replies in Whatever Language Your Customer Types</h3>
                    <div class="wg-brand"><img src="/assets/images/hellobots/ai-whatsapp-chatbot/Footer_Logo.png" alt="HelloBots" loading="lazy"></div>
                </div>

                <div class="wg-back">
                    <div class="wg-back-label">What you get</div>
                    <div class="wg-brand"><img src="/assets/images/hellobots/ai-whatsapp-chatbot/Footer_Logo.png" alt="HelloBots" loading="lazy"></div>
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
                </div>

            </article>

            <article class="wg-card wg-card--3" tabindex="0">

                <div class="wg-front">
                    <h3>Built on the Official WhatsApp Business API</h3>
                    <div class="wg-brand"><img src="/assets/images/hellobots/ai-whatsapp-chatbot/Footer_Logo.png" alt="HelloBots" loading="lazy"></div>
                </div>

                <div class="wg-back">
                    <div class="wg-back-label">What you get</div>
                    <div class="wg-brand"><img src="/assets/images/hellobots/ai-whatsapp-chatbot/Footer_Logo.png" alt="HelloBots" loading="lazy"></div>
                    <ul class="wg-points">
                        <li><svg class="wg-check" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1.1 14.2-4-4 1.4-1.4 2.6 2.6 5.4-5.4 1.4 1.4-6.8 6.8z" />
                            </svg><span>HelloBots is a Meta-verified Business Partner.</span></li>
                        <li><svg class="wg-check" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1.1 14.2-4-4 1.4-1.4 2.6 2.6 5.4-5.4 1.4 1.4-6.8 6.8z" />
                            </svg><span>Get a verified business name with an official blue tick badge.</span></li>
                        <li><svg class="wg-check" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1.1 14.2-4-4 1.4-1.4 2.6 2.6 5.4-5.4 1.4 1.4-6.8 6.8z" />
                            </svg><span>Manage templates and campaigns while automatically qualifying and converting chatbot responses.</span></li>
                    </ul>
                </div>

            </article>

        </div>
    </div>
</section>


<link rel="stylesheet" href="https://HelloBots.com/wp-content/themes/sierra/assets/css/g2reviews.css" class="css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<style>
  .review-role {}
</style>
<section class="reviews-section">
  <div class="container">
    <h2 class="whatsApp-headings mb-3">What Our Customers Say on G2 Platform</h2>
    <div id="g2-review-section" class="review-grid-container">
      <!-- Review cards will be injected here -->
    </div>
    <!--  <div class="view-testimonials-wrapper mb-4">-->
    <!--  <a href="https://www.g2.com/products/HelloBots/reviews" -->
    <!--     target="_blank" -->
    <!--     class="view-testimonials-link">-->
    <!--    View All Testimonials <span class="arrow">→</span>-->
    <!--  </a>-->
    <!--</div>-->

    <div class="row g-4 align-items-stretch">
      <!-- Awards Section -->
      <div class="col-lg-6 col-12 d-flex">
        <div class="awards-column rounded-top-start-4 h-100">
          <p class="review-section-heading">Awarded for excellence</p>
          <div class="d-flex flex-wrap justify-content-center g2-reviews-tags" style="gap:38px;">
            <img
              src="/assets/images/hellobots/ai-whatsapp-chatbot/CommunicationPlatformasaService_UsersMos.png"
              alt="Best Est. ROI - Enterprise" class="award-image" width="100" height="100">
            <img src="/assets/images/hellobots/ai-whatsapp-chatbot/CommunicationPlatformasaService_BestEsti.png"
              alt="Best Support - Enterprise" class="award-image" width="100" height="100">
            <img loading="lazy" src="/assets/images/hellobots/ai-whatsapp-chatbot/Chatbots_HighPerformer_HighPerformer.png"
              alt="Best Usability - Small Business" class="award-image" width="100" height="100">
          </div>
          <div class="d-flex flex-wrap justify-content-center g2-reviews-tags" style="gap:38px;">
            <img loading="lazy" src="/assets/images/hellobots/ai-whatsapp-chatbot/easiest_Admin.png"
              alt="Easiest To Do Business With - Mid-Market" class="award-image" width="100" height="100">
            <img loading="lazy" src="/assets/images/hellobots/ai-whatsapp-chatbot/Chatbots_BestSupport_QualityOfSupport.png"
              alt="Fastest Implementation - Enterprise" class="award-image" width="100" height="100">
            <img loading="lazy" src="/assets/images/hellobots/ai-whatsapp-chatbot/Chatbots_HighPerformer_AsiaPacific_HighP.png"
              alt="Momentum Leader" class="award-image" width="100" height="100">

          </div>
        </div>
      </div>

      <!-- Reviews Section -->
      <div class="col-lg-6 col-12 d-flex">
        <div class="reviews-wrapper rounded-bottom-end-4 h-100">
          <p class="review-section-heading">Loved by users everywhere</p>
          <ul class="reviews-list">
            <li class="review-item">

              <img loading="lazy" src="/assets/images/hellobots/ai-whatsapp-chatbot/g2.png" alt="G2 Logo"
                class="review-logo-img" width="50" height="50">

              <div class="review-content">
                <span class="review-count">40+ reviews</span>
                <div class="stars-container">
                  <span class="dist_marketing-review__stars__5Eqy8"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                      height="18" viewBox="0 0 20 18" fill="none">
                      <g id="Star 9">
                        <path id="Star 1"
                          d="M9.47732 0.616511C9.74471 -0.205505 10.9076 -0.205503 11.175 0.616513L12.7874 5.57329C12.9069 5.94093 13.2496 6.1898 13.6362 6.1898H18.8517C19.7167 6.1898 20.0761 7.29681 19.376 7.80485L15.1583 10.8658C14.8451 11.0931 14.714 11.4964 14.8337 11.8644L16.4452 16.8184C16.7126 17.6406 15.7718 18.3247 15.072 17.8169L10.8505 14.7532C10.5378 14.5262 10.1146 14.5262 9.80188 14.7532L5.5803 17.8169C4.88055 18.3247 3.93972 17.6406 4.20717 16.8184L5.81861 11.8644C5.93831 11.4964 5.80725 11.0931 5.49405 10.8658L1.2763 7.80485C0.57627 7.29682 0.935638 6.1898 1.80059 6.1898H7.01613C7.40273 6.1898 7.74539 5.94093 7.86498 5.57328L9.47732 0.616511Z"
                          fill="currentColor"></path>
                      </g>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                      fill="none">
                      <g id="Star 9">
                        <path id="Star 1"
                          d="M9.47732 0.616511C9.74471 -0.205505 10.9076 -0.205503 11.175 0.616513L12.7874 5.57329C12.9069 5.94093 13.2496 6.1898 13.6362 6.1898H18.8517C19.7167 6.1898 20.0761 7.29681 19.376 7.80485L15.1583 10.8658C14.8451 11.0931 14.714 11.4964 14.8337 11.8644L16.4452 16.8184C16.7126 17.6406 15.7718 18.3247 15.072 17.8169L10.8505 14.7532C10.5378 14.5262 10.1146 14.5262 9.80188 14.7532L5.5803 17.8169C4.88055 18.3247 3.93972 17.6406 4.20717 16.8184L5.81861 11.8644C5.93831 11.4964 5.80725 11.0931 5.49405 10.8658L1.2763 7.80485C0.57627 7.29682 0.935638 6.1898 1.80059 6.1898H7.01613C7.40273 6.1898 7.74539 5.94093 7.86498 5.57328L9.47732 0.616511Z"
                          fill="currentColor"></path>
                      </g>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                      fill="none">
                      <g id="Star 9">
                        <path id="Star 1"
                          d="M9.47732 0.616511C9.74471 -0.205505 10.9076 -0.205503 11.175 0.616513L12.7874 5.57329C12.9069 5.94093 13.2496 6.1898 13.6362 6.1898H18.8517C19.7167 6.1898 20.0761 7.29681 19.376 7.80485L15.1583 10.8658C14.8451 11.0931 14.714 11.4964 14.8337 11.8644L16.4452 16.8184C16.7126 17.6406 15.7718 18.3247 15.072 17.8169L10.8505 14.7532C10.5378 14.5262 10.1146 14.5262 9.80188 14.7532L5.5803 17.8169C4.88055 18.3247 3.93972 17.6406 4.20717 16.8184L5.81861 11.8644C5.93831 11.4964 5.80725 11.0931 5.49405 10.8658L1.2763 7.80485C0.57627 7.29682 0.935638 6.1898 1.80059 6.1898H7.01613C7.40273 6.1898 7.74539 5.94093 7.86498 5.57328L9.47732 0.616511Z"
                          fill="currentColor"></path>
                      </g>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                      fill="none">
                      <g id="Star 9">
                        <path id="Star 1"
                          d="M9.47732 0.616511C9.74471 -0.205505 10.9076 -0.205503 11.175 0.616513L12.7874 5.57329C12.9069 5.94093 13.2496 6.1898 13.6362 6.1898H18.8517C19.7167 6.1898 20.0761 7.29681 19.376 7.80485L15.1583 10.8658C14.8451 11.0931 14.714 11.4964 14.8337 11.8644L16.4452 16.8184C16.7126 17.6406 15.7718 18.3247 15.072 17.8169L10.8505 14.7532C10.5378 14.5262 10.1146 14.5262 9.80188 14.7532L5.5803 17.8169C4.88055 18.3247 3.93972 17.6406 4.20717 16.8184L5.81861 11.8644C5.93831 11.4964 5.80725 11.0931 5.49405 10.8658L1.2763 7.80485C0.57627 7.29682 0.935638 6.1898 1.80059 6.1898H7.01613C7.40273 6.1898 7.74539 5.94093 7.86498 5.57328L9.47732 0.616511Z"
                          fill="currentColor"></path>
                      </g>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                      fill="none">
                      <g id="Star 9">
                        <path id="Star 1"
                          d="M9.47732 0.616511C9.74471 -0.205505 10.9076 -0.205503 11.175 0.616513L12.7874 5.57329C12.9069 5.94093 13.2496 6.1898 13.6362 6.1898H18.8517C19.7167 6.1898 20.0761 7.29681 19.376 7.80485L15.1583 10.8658C14.8451 11.0931 14.714 11.4964 14.8337 11.8644L16.4452 16.8184C16.7126 17.6406 15.7718 18.3247 15.072 17.8169L10.8505 14.7532C10.5378 14.5262 10.1146 14.5262 9.80188 14.7532L5.5803 17.8169C4.88055 18.3247 3.93972 17.6406 4.20717 16.8184L5.81861 11.8644C5.93831 11.4964 5.80725 11.0931 5.49405 10.8658L1.2763 7.80485C0.57627 7.29682 0.935638 6.1898 1.80059 6.1898H7.01613C7.40273 6.1898 7.74539 5.94093 7.86498 5.57328L9.47732 0.616511Z"
                          fill="currentColor"></path>
                      </g>
                    </svg></span>
                </div>
              </div>
            </li>

            <li class="review-item">

              <img loading="lazy" src="/assets/images/hellobots/ai-whatsapp-chatbot/shopify.png" alt="Shopify Logo"
                class="review-logo-img" width="50" height="50">

              <div class="review-content">
                <span class="review-count">10+ reviews</span>
                <div class="stars-container">
                  <span class="dist_marketing-review__stars__5Eqy8"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                      height="18" viewBox="0 0 20 18" fill="none">
                      <g id="Star 9">
                        <path id="Star 1"
                          d="M9.47732 0.616511C9.74471 -0.205505 10.9076 -0.205503 11.175 0.616513L12.7874 5.57329C12.9069 5.94093 13.2496 6.1898 13.6362 6.1898H18.8517C19.7167 6.1898 20.0761 7.29681 19.376 7.80485L15.1583 10.8658C14.8451 11.0931 14.714 11.4964 14.8337 11.8644L16.4452 16.8184C16.7126 17.6406 15.7718 18.3247 15.072 17.8169L10.8505 14.7532C10.5378 14.5262 10.1146 14.5262 9.80188 14.7532L5.5803 17.8169C4.88055 18.3247 3.93972 17.6406 4.20717 16.8184L5.81861 11.8644C5.93831 11.4964 5.80725 11.0931 5.49405 10.8658L1.2763 7.80485C0.57627 7.29682 0.935638 6.1898 1.80059 6.1898H7.01613C7.40273 6.1898 7.74539 5.94093 7.86498 5.57328L9.47732 0.616511Z"
                          fill="currentColor"></path>
                      </g>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                      fill="none">
                      <g id="Star 9">
                        <path id="Star 1"
                          d="M9.47732 0.616511C9.74471 -0.205505 10.9076 -0.205503 11.175 0.616513L12.7874 5.57329C12.9069 5.94093 13.2496 6.1898 13.6362 6.1898H18.8517C19.7167 6.1898 20.0761 7.29681 19.376 7.80485L15.1583 10.8658C14.8451 11.0931 14.714 11.4964 14.8337 11.8644L16.4452 16.8184C16.7126 17.6406 15.7718 18.3247 15.072 17.8169L10.8505 14.7532C10.5378 14.5262 10.1146 14.5262 9.80188 14.7532L5.5803 17.8169C4.88055 18.3247 3.93972 17.6406 4.20717 16.8184L5.81861 11.8644C5.93831 11.4964 5.80725 11.0931 5.49405 10.8658L1.2763 7.80485C0.57627 7.29682 0.935638 6.1898 1.80059 6.1898H7.01613C7.40273 6.1898 7.74539 5.94093 7.86498 5.57328L9.47732 0.616511Z"
                          fill="currentColor"></path>
                      </g>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                      fill="none">
                      <g id="Star 9">
                        <path id="Star 1"
                          d="M9.47732 0.616511C9.74471 -0.205505 10.9076 -0.205503 11.175 0.616513L12.7874 5.57329C12.9069 5.94093 13.2496 6.1898 13.6362 6.1898H18.8517C19.7167 6.1898 20.0761 7.29681 19.376 7.80485L15.1583 10.8658C14.8451 11.0931 14.714 11.4964 14.8337 11.8644L16.4452 16.8184C16.7126 17.6406 15.7718 18.3247 15.072 17.8169L10.8505 14.7532C10.5378 14.5262 10.1146 14.5262 9.80188 14.7532L5.5803 17.8169C4.88055 18.3247 3.93972 17.6406 4.20717 16.8184L5.81861 11.8644C5.93831 11.4964 5.80725 11.0931 5.49405 10.8658L1.2763 7.80485C0.57627 7.29682 0.935638 6.1898 1.80059 6.1898H7.01613C7.40273 6.1898 7.74539 5.94093 7.86498 5.57328L9.47732 0.616511Z"
                          fill="currentColor"></path>
                      </g>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                      fill="none">
                      <g id="Star 9">
                        <path id="Star 1"
                          d="M9.47732 0.616511C9.74471 -0.205505 10.9076 -0.205503 11.175 0.616513L12.7874 5.57329C12.9069 5.94093 13.2496 6.1898 13.6362 6.1898H18.8517C19.7167 6.1898 20.0761 7.29681 19.376 7.80485L15.1583 10.8658C14.8451 11.0931 14.714 11.4964 14.8337 11.8644L16.4452 16.8184C16.7126 17.6406 15.7718 18.3247 15.072 17.8169L10.8505 14.7532C10.5378 14.5262 10.1146 14.5262 9.80188 14.7532L5.5803 17.8169C4.88055 18.3247 3.93972 17.6406 4.20717 16.8184L5.81861 11.8644C5.93831 11.4964 5.80725 11.0931 5.49405 10.8658L1.2763 7.80485C0.57627 7.29682 0.935638 6.1898 1.80059 6.1898H7.01613C7.40273 6.1898 7.74539 5.94093 7.86498 5.57328L9.47732 0.616511Z"
                          fill="currentColor"></path>
                      </g>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                      fill="none">
                      <g id="Star 5">
                        <path id="Union" fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.82498 0.616511C9.09236 -0.205505 10.2553 -0.205503 10.5227 0.616513L12.135 5.57329C12.2546 5.94093 12.5973 6.1898 12.9839 6.1898H18.1994C19.0644 6.1898 19.4237 7.29681 18.7237 7.80485L14.5059 10.8658C14.1927 11.0931 14.0617 11.4964 14.1814 11.8644L15.7928 16.8184C16.0603 17.6406 15.1194 18.3247 14.4197 17.8169L10.1981 14.7532C9.88542 14.5262 9.46222 14.5262 9.14953 14.7532L4.92796 17.8169C4.2282 18.3247 3.28737 17.6406 3.55482 16.8184L5.16626 11.8644C5.28597 11.4964 5.15491 11.0931 4.84171 10.8658L0.623952 7.80485C-0.0760742 7.29682 0.283295 6.1898 1.14824 6.1898H6.36378C6.75039 6.1898 7.09305 5.94093 7.21263 5.57328L8.82498 0.616511ZM9.8098 0.848394L11.4221 5.80517C11.6422 6.48156 12.2726 6.93943 12.9839 6.93943H18.1994C18.2487 6.93943 18.2722 6.95293 18.2859 6.96358C18.3042 6.97776 18.3239 7.00287 18.3354 7.03827C18.3469 7.07367 18.3457 7.10554 18.3392 7.12779C18.3343 7.14448 18.3233 7.1692 18.2834 7.19815L14.0656 10.2591C13.4894 10.6773 13.2483 11.4192 13.4685 12.0962L15.08 17.0502C15.0952 17.0971 15.0896 17.1236 15.0838 17.14C15.0759 17.1618 15.0582 17.1883 15.0281 17.2101C14.998 17.232 14.9673 17.2408 14.9442 17.2415C14.9268 17.242 14.8999 17.2391 14.86 17.2102L10.6384 14.1465C10.3367 13.9275 9.97915 13.8234 9.6243 13.8341V0.756622C9.63874 0.75232 9.65539 0.749631 9.67382 0.749631C9.711 0.749631 9.74095 0.760575 9.7601 0.773625C9.77449 0.783428 9.79457 0.801572 9.8098 0.848394Z"
                          fill="currentColor"></path>
                      </g>
                    </svg></span>
                </div>
              </div>
            </li>

            <li class="review-item">

              <img loading="lazy" src="/assets/images/hellobots/ai-whatsapp-chatbot/Trust-Pilot.png" alt="Trust Pilot Logo"
                class="review-logo-img" width="60" height="60">

              <div class="review-content">
                <span class="review-count">10+ reviews</span>
                <div class="stars-container">
                  <span class="dist_marketing-review__stars__5Eqy8"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                      height="18" viewBox="0 0 20 18" fill="none">
                      <g id="Star 9">
                        <path id="Star 1"
                          d="M9.47732 0.616511C9.74471 -0.205505 10.9076 -0.205503 11.175 0.616513L12.7874 5.57329C12.9069 5.94093 13.2496 6.1898 13.6362 6.1898H18.8517C19.7167 6.1898 20.0761 7.29681 19.376 7.80485L15.1583 10.8658C14.8451 11.0931 14.714 11.4964 14.8337 11.8644L16.4452 16.8184C16.7126 17.6406 15.7718 18.3247 15.072 17.8169L10.8505 14.7532C10.5378 14.5262 10.1146 14.5262 9.80188 14.7532L5.5803 17.8169C4.88055 18.3247 3.93972 17.6406 4.20717 16.8184L5.81861 11.8644C5.93831 11.4964 5.80725 11.0931 5.49405 10.8658L1.2763 7.80485C0.57627 7.29682 0.935638 6.1898 1.80059 6.1898H7.01613C7.40273 6.1898 7.74539 5.94093 7.86498 5.57328L9.47732 0.616511Z"
                          fill="currentColor"></path>
                      </g>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                      fill="none">
                      <g id="Star 9">
                        <path id="Star 1"
                          d="M9.47732 0.616511C9.74471 -0.205505 10.9076 -0.205503 11.175 0.616513L12.7874 5.57329C12.9069 5.94093 13.2496 6.1898 13.6362 6.1898H18.8517C19.7167 6.1898 20.0761 7.29681 19.376 7.80485L15.1583 10.8658C14.8451 11.0931 14.714 11.4964 14.8337 11.8644L16.4452 16.8184C16.7126 17.6406 15.7718 18.3247 15.072 17.8169L10.8505 14.7532C10.5378 14.5262 10.1146 14.5262 9.80188 14.7532L5.5803 17.8169C4.88055 18.3247 3.93972 17.6406 4.20717 16.8184L5.81861 11.8644C5.93831 11.4964 5.80725 11.0931 5.49405 10.8658L1.2763 7.80485C0.57627 7.29682 0.935638 6.1898 1.80059 6.1898H7.01613C7.40273 6.1898 7.74539 5.94093 7.86498 5.57328L9.47732 0.616511Z"
                          fill="currentColor"></path>
                      </g>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                      fill="none">
                      <g id="Star 9">
                        <path id="Star 1"
                          d="M9.47732 0.616511C9.74471 -0.205505 10.9076 -0.205503 11.175 0.616513L12.7874 5.57329C12.9069 5.94093 13.2496 6.1898 13.6362 6.1898H18.8517C19.7167 6.1898 20.0761 7.29681 19.376 7.80485L15.1583 10.8658C14.8451 11.0931 14.714 11.4964 14.8337 11.8644L16.4452 16.8184C16.7126 17.6406 15.7718 18.3247 15.072 17.8169L10.8505 14.7532C10.5378 14.5262 10.1146 14.5262 9.80188 14.7532L5.5803 17.8169C4.88055 18.3247 3.93972 17.6406 4.20717 16.8184L5.81861 11.8644C5.93831 11.4964 5.80725 11.0931 5.49405 10.8658L1.2763 7.80485C0.57627 7.29682 0.935638 6.1898 1.80059 6.1898H7.01613C7.40273 6.1898 7.74539 5.94093 7.86498 5.57328L9.47732 0.616511Z"
                          fill="currentColor"></path>
                      </g>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                      fill="none">
                      <g id="Star 9">
                        <path id="Star 1"
                          d="M9.47732 0.616511C9.74471 -0.205505 10.9076 -0.205503 11.175 0.616513L12.7874 5.57329C12.9069 5.94093 13.2496 6.1898 13.6362 6.1898H18.8517C19.7167 6.1898 20.0761 7.29681 19.376 7.80485L15.1583 10.8658C14.8451 11.0931 14.714 11.4964 14.8337 11.8644L16.4452 16.8184C16.7126 17.6406 15.7718 18.3247 15.072 17.8169L10.8505 14.7532C10.5378 14.5262 10.1146 14.5262 9.80188 14.7532L5.5803 17.8169C4.88055 18.3247 3.93972 17.6406 4.20717 16.8184L5.81861 11.8644C5.93831 11.4964 5.80725 11.0931 5.49405 10.8658L1.2763 7.80485C0.57627 7.29682 0.935638 6.1898 1.80059 6.1898H7.01613C7.40273 6.1898 7.74539 5.94093 7.86498 5.57328L9.47732 0.616511Z"
                          fill="currentColor"></path>
                      </g>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                      fill="none">
                      <g id="Star 5">
                        <path id="Union" fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.82498 0.616511C9.09236 -0.205505 10.2553 -0.205503 10.5227 0.616513L12.135 5.57329C12.2546 5.94093 12.5973 6.1898 12.9839 6.1898H18.1994C19.0644 6.1898 19.4237 7.29681 18.7237 7.80485L14.5059 10.8658C14.1927 11.0931 14.0617 11.4964 14.1814 11.8644L15.7928 16.8184C16.0603 17.6406 15.1194 18.3247 14.4197 17.8169L10.1981 14.7532C9.88542 14.5262 9.46222 14.5262 9.14953 14.7532L4.92796 17.8169C4.2282 18.3247 3.28737 17.6406 3.55482 16.8184L5.16626 11.8644C5.28597 11.4964 5.15491 11.0931 4.84171 10.8658L0.623952 7.80485C-0.0760742 7.29682 0.283295 6.1898 1.14824 6.1898H6.36378C6.75039 6.1898 7.09305 5.94093 7.21263 5.57328L8.82498 0.616511ZM9.8098 0.848394L11.4221 5.80517C11.6422 6.48156 12.2726 6.93943 12.9839 6.93943H18.1994C18.2487 6.93943 18.2722 6.95293 18.2859 6.96358C18.3042 6.97776 18.3239 7.00287 18.3354 7.03827C18.3469 7.07367 18.3457 7.10554 18.3392 7.12779C18.3343 7.14448 18.3233 7.1692 18.2834 7.19815L14.0656 10.2591C13.4894 10.6773 13.2483 11.4192 13.4685 12.0962L15.08 17.0502C15.0952 17.0971 15.0896 17.1236 15.0838 17.14C15.0759 17.1618 15.0582 17.1883 15.0281 17.2101C14.998 17.232 14.9673 17.2408 14.9442 17.2415C14.9268 17.242 14.8999 17.2391 14.86 17.2102L10.6384 14.1465C10.3367 13.9275 9.97915 13.8234 9.6243 13.8341V0.756622C9.63874 0.75232 9.65539 0.749631 9.67382 0.749631C9.711 0.749631 9.74095 0.760575 9.7601 0.773625C9.77449 0.783428 9.79457 0.801572 9.8098 0.848394Z"
                          fill="currentColor"></path>
                      </g>
                    </svg></span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</section>

<!--<div id="review-modal" class="modal-overlay">-->
<!--  <div class="modal-content" id="modal-content">-->
<!--    <button class="modal-close-btn" id="modal-close-btn">&times;</button>-->
<!-- review card will be inserted here -->
<!--  </div>-->
<!--</div>-->


<div id="review-modal" class="modal-overlay">
  <div class="modal-background">
    <div class="modal-content" id="modal-content">
      <button class="modal-close-btn" id="modal-close-btn">&times;</button>

    </div>
  </div>
</div>



<script src="https://HelloBots.com/wp-content/themes/sierra/assets/js/g2reviews.js"></script>

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

      <a class="learn-more" href="https://HelloBots.com/whatsapp-broadcasting/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>

      <div class="grid-item">
        <h3><i class="fas fa-robot"></i> WhatsApp AI Chatbot</h3>
        <p>Use a Chatbot to automate customer queries, manage FAQs, and offer 24/7 instant support to increase
          efficiency and reduce manual workload.</p>
        
        <a class="learn-more" href="https://HelloBots.com/ai-whatsapp-chatbot/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="grid-item">
        <h3><i class="fas fa-file-alt"></i> WhatsApp Forms</h3>
        <p>Collect leads, customer data, and ask for feedback, all within WhatsApp chats using interactive and
          easy-to-fill forms.
        </p>
        
        <a class="learn-more" href="https://HelloBots.com/whatsapp-forms/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="grid-item">
        <h3><i class="fas fa-check-circle"></i> WhatsApp Blue Tick</h3>
        <p>Verified your brand with the official blue tick to improve credibility, trust, and customer confidence.
        </p>

        <a class="learn-more" href="https://HelloBots.com/whatsapp-blue-tick/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
        
      </div>

      <div class="grid-item">
        <h3><i class="fas fa-mouse-pointer"></i> Click-to-WhatsApp Ads</h3>
        <p>Convert your ads into a quick WhatsApp chat to enhance lead generation, customer engagement, and sales
          conversion.</p>
      
        <a class="learn-more" href="https://HelloBots.com/click-to-whatsapp-ads/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="grid-item">
        <h3><i class="fas fa-money-bill-wave"></i> WhatsApp Payments</h3>
        <p>Make it easier for customers to purchase, pay, and check out without leaving WhatsApp with secure in-chat
          payments.
        </p>
      
        <a class="learn-more" href="https://HelloBots.com/whatsapp-payments/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
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
        <a class="learn-more" href="https://HelloBots.com/whatsapp-team-inbox/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>

      </div>
    <div class="grid-item">
        <h3><i class="fas fa-database"></i> WhatsApp Interactive</h3>
        <p>Engage customers with interactive buttons, lists and reply options that make conversations faster, easier, and actionable.</p>
               
<a class="learn-more" href="https://HelloBots.com/whatsapp-interactive-messages/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="grid-item">
        <h3><i class="fas fa-lock"></i> WhatsApp Authentication</h3>
        <p>Send OTPs with 99% reliability and secure logins using WhatsApp’s end-to-end encrypted, one-tap authentication.</p>
               
<a class="learn-more" href="https://HelloBots.com/whatsapp-authentication/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="grid-item">
        <h3><i class="fas fa-th-list"></i> WhatsApp Catalog</h3>
        <p>Display your products or services in the WhatsApp catalog for customers to effortlessly browse and place
          orders.
        </p>
               
                <a class="learn-more" href="https://HelloBots.com/whatsapp-catalog/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>

      </div>

    <div class="grid-item">
        <h3><i class="fas fa-th-list"></i>WhatsApp Voice Calling</h3>
        <p>
Enable real-time voice calls for instant customer connection.
Boost trust, support, and conversions with faster interactions.</p>
               
                <a class="learn-more" href="https://HelloBots.com/whatsapp-business-calling-api/" target="_blank" rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>

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

            <a href="https://HelloBots.com/industries/edtech/" target="_blank" rel="noopener noreferrer"
                class="use-case-card">
                <div class="icon-circle" style="background:#fff4d6;color:#c98a02;"><i
                        class="bi bi-mortarboard-fill"></i></div>
                <h3>Education & EdTech</h3>
            </a>

            <a href="https://HelloBots.com/industries/banking-and-fintech/" target="_blank" rel="noopener noreferrer"
                class="use-case-card">
                <div class="icon-circle" style="background: #e5f2ff; color: #0288d1;"><i class="bi bi-bank"></i></div>
                <h3>Banking & Fintech</h3>
            </a>

            <a href="https://HelloBots.com/industries/healthcare/" target="_blank" rel="noopener noreferrer"
                class="use-case-card">
                <div class="icon-circle" style="background: #ffe5e9; color: #e91e63;"><i
                        class="bi bi-heart-pulse-fill"></i></div>
                <h3>Healthcare</h3>
            </a>

            <a href="https://HelloBots.com/industries/travel-and-tourism/" target="_blank" rel="noopener noreferrer"
                class="use-case-card">
                <div class="icon-circle" style="background: #f0e6ff; color: #7b1fa2;"><i
                        class="bi bi-airplane-fill"></i></div>
                <h3>Travel & Tourism</h3>
            </a>

            <a href="https://HelloBots.com/industries/automotive/" target="_blank" rel="noopener noreferrer"
                class="use-case-card">
                <div class="icon-circle" style="background: #e5f4ff; color: #1565c0;"><i
                        class="bi bi-car-front-fill"></i></div>
                <h3>Automotive</h3>
            </a>

            <a href="https://HelloBots.com/industries/e-commerce/" target="_blank" rel="noopener noreferrer"
                class="use-case-card">
                <div class="icon-circle" style="background: #e6f8ee; color: #2e7d32;"><i class="bi bi-bag-fill"></i>
                </div>
                <h3>Retail & E-commerce</h3>
            </a>

            <a href="https://HelloBots.com/industries/real-estate/" target="_blank" rel="noopener noreferrer"
                class="use-case-card">
                <div class="icon-circle" style="color:#23398f; background: #c6cde9"><i class="fas fa-building"></i>
                </div>
                <h3>Real Estate</h3>
            </a>

            <a href="https://HelloBots.com/industries/restaurant-and-food-business/" target="_blank"
                rel="noopener noreferrer" class="use-case-card">
                <div class="icon-circle" style="background: #e9dec9; color: #6f5627;"><i class="fas fa-utensils"></i>
                </div>
                <h3>Restaurant & Food Business</h3>
            </a>

            <a href="https://HelloBots.com/industries/spas-and-salons/" target="_blank" rel="noopener noreferrer"
                class="use-case-card">
                <div class="icon-circle" style="color: #a55a67; background: #f7e2e6;"><i class="fas fa-spa"></i></div>
                <h3>Spas & Salons</h3>
            </a>

            <a href="https://HelloBots.com/industries/events-and-webinars/" target="_blank" rel="noopener noreferrer"
                class="use-case-card">
                <div class="icon-circle" style="background:#fdeaea;color:#d9534f;"><i class="fas fa-microphone-alt"></i>
                </div>
                <h3>Events & Webinars</h3>
            </a>

            <a href="https://HelloBots.com/industries/small-medium-business/" target="_blank" rel="noopener noreferrer"
                class="use-case-card">
                <div class="icon-circle" style="background:#ffe7d9;color:#d35f16;"><i class="fas fa-store"></i></div>
                <h3>Small & Medium Business</h3>
            </a>

            <a href="https://HelloBots.com/industries/enterprise/" target="_blank" rel="noopener noreferrer"
                class="use-case-card">
                <div class="icon-circle" style="background: linear-gradient(135deg, #e0e7ff, #c7d2fe); color: #1e3a8a;">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3>Enterprises</h3>
            </a>

            <a href="https://HelloBots.com/industries/jewellers/" target="_blank" rel="noopener noreferrer"
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
</style><section class="faq-section">
  <div class="container">
    <div class="custom-faq-accordion" aria-label="Frequently Asked Questions"><h2>Frequently Asked Questions</h2><div class="faq-item"><button class="faq-question open" type="button" aria-expanded="true" aria-controls="faq-answer-8"><span class="faq-title"><h3>Is HelloBots&#039; AI Chatbot built on the official WhatsApp Business API?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-8" class="faq-answer open" role="region" aria-hidden="false" style="max-height:none;">Yes. Each conversation runs via the official WhatsApp Business API, which keeps your number verified and compliant.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-9"><span class="faq-title"><h3>Can I connect the chatbot to my CRM or existing tools?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-9" class="faq-answer" role="region" aria-hidden="true">Yes. You can integrate the chatbot with your CRM, order management, and booking system to pull real-time information into a conversation.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-10"><span class="faq-title"><h3>Does the AI chatbot replace my human support team?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-10" class="faq-answer" role="region" aria-hidden="true">No. It's mainly built to handle repetitive, high-volume queries, with easy handover of complex queries with full context attached.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-11"><span class="faq-title"><h3>How long does it take to set up?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-11" class="faq-answer" role="region" aria-hidden="true">Most businesses go live within a day by connecting their number, uploading business info, and setting their escalation rules.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-12"><span class="faq-title"><h3>How do I train the chatbot on my business?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-12" class="faq-answer" role="region" aria-hidden="true">Upload FAQs, product details, or website content without any coding ot technical expertise needed.</div></div></div><script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Is HelloBots' AI Chatbot built on the official WhatsApp Business API?","acceptedAnswer":{"@type":"Answer","text":"Yes. Each conversation runs via the official WhatsApp Business API, which keeps your number verified and compliant."}},{"@type":"Question","name":"Can I connect the chatbot to my CRM or existing tools?","acceptedAnswer":{"@type":"Answer","text":"Yes. You can integrate the chatbot with your CRM, order management, and booking system to pull real-time information into a conversation."}},{"@type":"Question","name":"Does the AI chatbot replace my human support team?","acceptedAnswer":{"@type":"Answer","text":"No. It's mainly built to handle repetitive, high-volume queries, with easy handover of complex queries with full context attached."}},{"@type":"Question","name":"How long does it take to set up?","acceptedAnswer":{"@type":"Answer","text":"Most businesses go live within a day by connecting their number, uploading business info, and setting their escalation rules."}},{"@type":"Question","name":"How do I train the chatbot on my business?","acceptedAnswer":{"@type":"Answer","text":"Upload FAQs, product details, or website content without any coding ot technical expertise needed."}}]}</script>
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

<section class="cta-section my-5">
  <div class="container rounded text-white text-center cta-container" style="background: #034737; padding: 33px 50px;">
    <div class="row justify-content-center align-items-center">

      <!-- Left Side - Text & Buttons -->
      <div class="col-lg-7 col-md-12 cta-heading">
        <h2 style="font-size:32px; color:#ffffff; text-align:start " class="whatsapp-heading cta-heading">Ready to
          use
          WhatsApp AI Chatbot?</h2>
        <p style="color:#ffffff!important; text-align:start" class="cta-para">Automate conversations, support
          customers
          24/7, and boost engagement - all on WhatsApp.</p>
        <div class="cta-buttons mt-4 order-3 order-lg-3 d-flex" style="gap:12px;">
          <a href="https://app.HelloBots.com/register" target="_blank" rel="noopener noreferrer"
            class="btn btn-light me-2 shadow-sm apply-free" style="color: #645bb1;">Apply Free Now!</a>
          <div class="btn btn-outline-light shadow-sm book-demo book-demo-btn">Book A Free Demo</div>
        </div>
      </div>

      <!-- Right Side - Image -->
      <div class="col-lg-5 col-md-12 text-center order-2 order-lg-2 ">
        <img src="/assets/images/hellobots/ai-whatsapp-chatbot/Cta-1.png" alt="WhatsApp AI Assistant"
          class="img-fluid cta-image" style="max-width: 70%;">
      </div>

    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".partners-slider", {
    slidesPerView: 2, // Show 2 logos on mobile
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 1000,
      disableOnInteraction: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 5, // Show 4 logos on desktop
      }
    }
  });
</script>

<script>
  window.onload = function () {
    Calendly.initBadgeWidget({
      url: 'https://calendly.com/HelloBots/15min',
      text: 'Schedule time with me',
      color: '#0069ff',
      textColor: '#ffffff',
      branding: true
    });
  }
  document.addEventListener('DOMContentLoaded', function () {
    const demoButtons = document.querySelectorAll('.book-demo-btn');
    demoButtons.forEach(function (button) {
      button.addEventListener('click', function (e) {
        e.preventDefault();
        Calendly.initPopupWidget({
          url: 'https://calendly.com/HelloBots/15min'
        });
      });
    });
  });
</script>
<script>
  let bannerIndex = 0;
  const bannerTrack = document.getElementById("bannerTrack");
  const bannerTotal = bannerTrack.children.length;

  setInterval(() => {
    bannerIndex = (bannerIndex + 1) % bannerTotal;
    bannerTrack.style.transform = `translateX(-${bannerIndex * 100}%)`;
  }, 3000); // every 3 seconds
</script>
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


<?php include __DIR__ . '/../../includes/footer.php'; ?>
