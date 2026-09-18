<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Wortal CRM WhatsApp Integration | Multi-Channel Automation | HelloBots';
$pageDescription = 'Connect Wortal CRM with HelloBots WhatsApp Business API to streamline customer communication and automated marketing campaigns.';
$canonicalUrl = 'https://hellobotz.com/integrations/wortal/';
$ogImage = 'https://hellobotz.com/assets/images/hellobots/integrations-wortal/WhatsApp-Wortal-Integration.png';
$ogTitle = 'Wortal CRM WhatsApp Integration | Multi-Channel Automation | HelloBots';
$ogDescription = 'Connect Wortal CRM with HelloBots WhatsApp Business API to streamline customer communication and automated marketing campaigns.';

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
<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/getgabs-whatsapp-blue-tick.css">

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
    src="https://HelloBots.com/wp-content/themes/sierra/assets/jsnewhome/header-shared.js?v=1788956171"></script><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://HelloBots.com/wp-content/themes/sierra/assets/css/whatsapp-blue-tick.css" class="css">
<link rel="stylesheet" href="https://HelloBots.com/wp-content/themes/sierra/assets/css/template-industry.css" class="css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" rel="stylesheet" />
<style>
    @media (max-width: 768px) {
  .whatsapp-enquiryyy {
    display: block;
    text-align: center;
  }
  .step{
      text-align:start;
      align-items:start;
  }
}
.hero-section{
        background-image: linear-gradient(180deg, #ffffff 25%, #88c5fc 150%);

}
.step {
    box-shadow:none; 
}
.step:hover {
    box-shadow:none; 
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

.tick-list {
    list-style: none; /* Remove default bullets */
    padding-left: 0;
}

.tick-list li {
    position: relative;
    padding-left: 25px;
    margin-bottom: 8px;
}

.tick-list li::before {
    content: "✔";
    position: absolute;
    left: 0;
    color: green;
    font-weight: bold;
}
.tick-ol li:before{
    content:""!important;
}
.tick-ol li{
     padding-left: 1px!important;
     list-style:disc;
}
.section .container h2 + p {
    display: none;
}
.section .container h2{
    margin-bottom:30px!important;
}
</style>
<section class="breadcrumbs">
  <div class="container">
    <div aria-label="breadcrumb" class="custom-breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="https://HelloBots.com/">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="https://HelloBots.com/integrations/">Integrations</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          Wortal        </li>
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
        <h1 class="hero-title">Power Your Wortal CRM with WhatsApp Integration</h1>
        <p class="hero-text">Integrate WhatsApp with Wortal CRM to centralize messaging, improve response times, and deliver exceptional customer experiences from a single place.
</p>
        <div class="btn-groupp" style="display: flex; gap: 12px;">
     <a id="whatsapp-enquiry"
          href="https://app.HelloBots.com/register"
          target="_blank" rel="noopener noreferrer" class="btn text-white cta-button m-0">
          Get Started
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
          <img width="100%" src="/assets/images/hellobots/integrations-wortal/WhatsApp-Wortal-Integration.png" loading="lazy"
            alt="WhatsApp Wortal Integration">
        </div>
      </div>
    </div>
  </div>
</section>


<style>
.ws-section{
    padding:60px 0px;
    text-align:center;
    background:#eef5fb;
}

.ws-subtitle{
 
    margin:0 auto 55px;
    line-height:1.7;
}
.ws-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    background:#ffffff;
    border-radius:14px;
    overflow:hidden;
    border:1px solid #eee;
}
.ws-grid {
    
}
.ws-card{
    padding:40px 35px;
    text-align:left;
    display:flex;
    gap:18px;
    border-right:1px solid #eee!important;
    border-bottom:1px solid #eee;
}


.ws-card:hover {
   
    box-shadow: 0 12px 35px rgba(196, 226, 255, 0.8);
}

.ws-card:nth-child(3n){border-right:none;}
.ws-icon-box{
    width:55px;
    height:55px;
    background:#c4e2ff;
    border:1px solid #63aef4;
    border-radius:14px;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-shrink:0;
}
.ws-icon{
    font-size:28px;
    color:#2974ba;
}
.ws-card-content h3{
    margin-bottom:8px;
    font-size:20px;
}
.ws-card-content p{
    font-size:14px;
    color:#55557a;
    line-height:1.7;
}

@media(max-width:992px){
    .ws-grid{grid-template-columns:repeat(2,1fr);}    
    .ws-card:nth-child(3n){border-right:1px solid #eee;}    
    .ws-card:nth-child(2n){border-right:none;}    
}
@media(max-width:600px){
    .ws-grid{grid-template-columns:1fr;}    
    .ws-card{border-right:none;}    
}
</style>

<section class="ws-section">
    <div class="container">
    <h2 class="ws-title mb-5">Why Wortal WhatsApp Integration</h2>
    <div class="ws-grid mb-5">
        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">hub</span></div>
            <div class="ws-card-content">
                <h3>Centralized Customer Communication</h3>
                <p>Handle all WhatsApp chats using your Wortal CRM dashboard. View, reply to, and monitor customer conversations alongside full CRM data without switching to multiple apps.</p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">bolt</span></div>
            <div class="ws-card-content">
                <h3>Enhanced Response Times</h3>
                <p>Instantly reply to your customers' inquiries with WhatsApp messages showing directly in Wortal. Set up automated replies for common questions to decrease response time and boost satisfaction. </p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">campaign</span></div>
            <div class="ws-card-content">
                <h3>Broadcast Campaigns with CRM</h3>
                <p>Use CRM data to send targeted WhatsApp broadcast messages to certain customer groups. Share promotions, announce new launches, or send follow-ups based on their past purchases or lead status.</p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">groups</span></div>
            <div class="ws-card-content">
                <h3>Multi-User Collaboration</h3>
                <p>Assign WhatsApp conversations to precise team members and add internal notes. Collaborate on customer inquiries without leaving the CRM, ideal for support teams and coordinating sales.  </p>
            </div>
        </div>


    </div>

      <a href="https://app.HelloBots.com/register" class="cta-button mt-3">Get Started</a>
    </div>
</section>



<section class="whatsapp-usecase py-5" style="background:#ffffff;">
  <div class="container">
    <h2 class="whatsapp-heading mb-5">How to Integrate HelloBots WhatsApp API in Wortal CRM
    </h2>
    <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="step">
          <div class="step-number">#1</div>
          <div class="step-text mb-3">
            <h3>Access Your Wortal Account</h3>
                    <p>
                        Log in to your Wortal account with your credentials and pick the business you want to integrate with WhatsApp Business.
                    </p>
                    <a id="whatsapp-enquiry"
                    href="<?php echo $bp; ?>#contact-section"
                    target="_blank" rel="noopener noreferrer" class="btn text-white cta-button whatsapp-enquiryyy m-0">
                    Enquiry Now
                </a>
          </div>
          
        </div>

      </div>

      <!-- Image -->
      <div class="col-lg-6 order-2 order-lg-1 text-center">
        <div class="api-image-box mt-3">
          <img src="/assets/images/hellobots/integrations-wortal/Access-Wortal-Account.png"
            alt="Access Wortal Account" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
    <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-1">
        <div class="step">
          <div class="step-number">#2</div>
          <div class="step-text mb-3">
            <h3>Navigate to Your Dashboard</h3>
            <p>After logging in, you will automatically be redirected to your Wortal CRM dashboard. Here you can manage all your integrations and business settings.</p>
            <a id="whatsapp-enquiry"
                    href="<?php echo $bp; ?>#contact-section"
                    target="_blank" rel="noopener noreferrer" class="btn text-white cta-button whatsapp-enquiryyy m-0">
                    Enquiry Now
                </a>
          </div>
          
        </div>

      </div>

      <!-- Image -->
      <div class="col-lg-6 order-2 order-lg-2 text-center">
        <div class="api-image-box mt-3">
          <img src="/assets/images/hellobots/integrations-wortal/Navigate-Dashboard.png"
            alt="Navigate Dashboard" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
    <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="step">
          <div class="step-number mb-3">#3</div>
          <div class="step-text">
            <h3>Open the App Store and Select HelloBots</h3>
            <p>Go to the App Store from the left menu panel, search for "HelloBots" and tap to access the integration.</p>
            <a id="whatsapp-enquiry"
                    href="<?php echo $bp; ?>#contact-section"
                    target="_blank" rel="noopener noreferrer" class="btn text-white cta-button whatsapp-enquiryyy m-0">
                    Enquiry Now
                </a>
          </div>
          
        </div>
      </div>

      <!-- Image -->
      <div class="col-lg-6 order-2 order-lg-1 text-center">
        <div class="api-image-box mt-3">
          <img src="/assets/images/hellobots/integrations-wortal/Open-App-Store.png"
            alt="Open App Store" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
    
     <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-1">
        <div class="step">
          <div class="step-number">#4</div>
          <div class="step-text mb-3">
            <h3>Connect HelloBots Account</h3>
            <p>Click on the "Connect" button to easily link your Wortal CRM with HelloBots for WhatsApp Business integration.</p>
            <a id="whatsapp-enquiry"
                    href="<?php echo $bp; ?>#contact-section"
                    target="_blank" rel="noopener noreferrer" class="btn text-white cta-button whatsapp-enquiryyy m-0">
                    Enquiry Now
                </a>
          </div>
          
        </div>

      </div>

      <!-- Image -->
      <div class="col-lg-6 order-2 order-lg-2 text-center">
        <div class="api-image-box mt-3">
          <img src="/assets/images/hellobots/integrations-wortal/Connect-HelloBots-Account.png"
            alt="Connect HelloBots Account" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
    <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="step">
          <div class="step-number mb-3">#5</div>
          <div class="step-text">
            <h3>Complete Meta Onboarding </h3>
            <p>Click on the “WhatsApp” tab and "Login with Facebook" to begin and finish the Meta onboarding process.</p>
            <a id="whatsapp-enquiry"
                    href="<?php echo $bp; ?>#contact-section"
                    target="_blank" rel="noopener noreferrer" class="btn text-white cta-button whatsapp-enquiryyy m-0">
                    Enquiry Now
                </a>
          </div>
          
        </div>
      </div>

      <!-- Image -->
      <div class="col-lg-6 order-2 order-lg-1 text-center">
        <div class="api-image-box mt-3">
          <img src="/assets/images/hellobots/integrations-wortal/Complete-Meta-Onboarding.png"
            alt="Complete Meta Onboarding" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
    
     <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-1">
        <div class="step">
          <div class="step-number">#6</div>
          <div class="step-text mb-3">
            <h3>Start Using WhatsApp in Wortal</h3>
            <p>Once onboarding is done, you can begin managing WhatsApp conversations directly from your Wortal CRM dashboard.</p>
            <a id="whatsapp-enquiry"
                    href="<?php echo $bp; ?>#contact-section"
                    target="_blank" rel="noopener noreferrer" class="btn text-white cta-button whatsapp-enquiryyy m-0">
                    Enquiry Now
                </a>
          </div>
          
        </div>

      </div>

      <!-- Image -->
      <div class="col-lg-6 order-2 order-lg-2 text-center">
        <div class="api-image-box mt-3">
          <img src="/assets/images/hellobots/integrations-wortal/Start-WhatsApp-in-Wortal.png"
            alt="Start WhatsApp in Wortal" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
    
  </div>
</section>
<style>
.integrations-section {
    position: relative;
    background: linear-gradient(rgb(255, 255, 255) 0px, rgb(248, 250, 252) 100%);
    overflow: hidden;
    padding: 60px 0px;
}
.marquee-wrapper {
    position: relative;
    gap: 24px;
    padding: 40px 0px;
    overflow: hidden;
}
 .marquee-wrapper {
    flex-direction: column;
    display: flex;
}
.marquee-wrapper::after, .marquee-wrapper::before {
    content: "";
    position: absolute;
    top: 0px;
    bottom: 0px;
    width: 200px;
    z-index: 2;
    pointer-events: none;
}
.marquee-row {
    display: flex;
    width: fit-content;
    gap: 24px;
}
.marquee-scroll-left {
    animation: 60s linear 0s infinite normal none running scrollLeft;
}
.integration-card {
    display: flex;
    align-items: center;
    box-shadow: rgba(0, 0, 0, 0.05) 0px 4px 6px -1px, rgba(0, 0, 0, 0.03) 0px 2px 4px -1px;
    min-width: 200px;
    cursor: pointer;
    user-select: none;
    gap: 16px;
    background: rgb(255, 255, 255);
    padding: 16px 24px;
    border-radius: 16px;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(226, 232, 240);
    border-image: initial;
    white-space: nowrap;
    transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s;
}
.int-icon-box {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1.25rem;
    flex-shrink: 0;
    border-radius: 10px;
}
.int-name {
    font-weight: 600;
    color: rgb(30, 41, 59);
    font-size: 0.95rem;
}
.marquee-scroll-right {
    animation: 60s linear 0s infinite normal none running scrollRight;
}
.marquee-wrapper::after, .marquee-wrapper::before {
    content: "";
    position: absolute;
    top: 0px;
    bottom: 0px;
    width: 200px;
    z-index: 2;
    pointer-events: none;
}
.marquee-wrapper::after {
    right: 0px;
    background: linear-gradient(to left, rgb(255, 255, 255) 0px, transparent 100%);
}
.marquee-wrapper::before {
    left: 0px;
    background: linear-gradient(to right, rgb(255, 255, 255) 0px, transparent 100%);
}
@keyframes scrollLeft{0%{transform:translateX(0)}100%{transform:translateX(-50%)}}@keyframes scrollRight{0%{transform:translateX(-50%)}100%{transform:translateX(0)}}.marquee-wrapper:hover .marquee-row{animation-play-state:paused}.
@media(max-width:768px;){
    .integrations-section {
    padding-bottom: 0px;
}
}
</style>

<section class="integrations-section">
    <div class="container mx-auto px-4 md:px-8 lg:px-16 xl:px-24 mb-10">
      <div class="text-center max-w-4xl mx-auto">
        <h2 class="">
         Explore More WhatsApp Business API Integrations
        </h2>
        <p class="">
        Discover all supported integrations and connect WhatsApp with your favorite platforms to automate conversations and workflows.
        </p>
      </div>
    </div>

    <!-- Marquee Wrapper -->
    <div class="marquee-wrapper">

      <!-- Row 1: Left Scroll -->
      <div class="marquee-row marquee-scroll-left">
      <div class="integration-card" data-key="shopify">
          <img src="/assets/images/hellobots/integrations-wortal/shopify.png" class="int-icon-box" alt="Shopify">
          <span class="int-name">Shopify</span>
        </div>
        
        <div class="integration-card">
          <img src="/assets/images/hellobots/integrations-wortal/woocommerce.png" class="int-icon-box" alt="WooCommerce">
          <span class="int-name">WooCommerce</span>
        </div>
        <div class="integration-card">
          <img src="/assets/images/hellobots/integrations-wortal/gotab.png" class="int-icon-box" alt="Gotab">
          <span class="int-name">Gotab</span>
        </div>
     
            <div class="integration-card" data-key="wortal">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/wortal.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Wortal">
          <span class="int-name">Wortal</span>
        </div>
        
       <div class="integration-card" data-key="shiprocket">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/shiprocket.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="shiprocket.com">
          <span class="int-name">Shiprocket</span>
        </div>
        <div class="integration-card" data-key="zoho">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/zoho.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="zoho">
          <span class="int-name">Zoho</span>
        </div>
        
        <div class="integration-card" data-key="google-sheets">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/google-sheet.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="googlesheet">
          <span class="int-name">Google Sheet</span>
        </div>
    
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/n8n.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="n8n">
          <span class="int-name">n8n</span>
        </div>

        <!-- Duplicate Set 1 -->
             <div class="integration-card" data-key="shopify">
          <img src="/assets/images/hellobots/integrations-wortal/shopify.png" class="int-icon-box" alt="Shopify">
          <span class="int-name">Shopify</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/woocommerce.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="WooCommerce">
          <span class="int-name">WooCommerce</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/gotab.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Gotab">
          <span class="int-name">Gotab</span>
        </div>
       
            <div class="integration-card" data-key="wortal">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/wortal.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Wortal">
          <span class="int-name">Wortal</span>
        </div>
        
        <div class="integration-card" data-key="shiprocket">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/shiprocket.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="shiprocket.com">
          <span class="int-name">Shiprocket</span>
        </div>
        <div class="integration-card" data-key="zoho">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/zoho.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="zoho">
          <span class="int-name">Zoho</span>
        </div>
         
        <div class="integration-card" data-key="google-sheets">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/google-sheet.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="googlesheet">
          <span class="int-name">Google Sheet</span>
        </div>
        
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/n8n.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="n8n">
          <span class="int-name">n8n</span>
        </div>
      </div>


      <div class="marquee-row marquee-scroll-right">

          <div class="integration-card" data-key="shopify">
          <img src="/assets/images/hellobots/integrations-wortal/shopify.png" class="int-icon-box" alt="Shopify">
          <span class="int-name">Shopify</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/woocommerce.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="WooCommerce">
          <span class="int-name">WooCommerce</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/gotab.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Gotab">
          <span class="int-name">Gotab</span>
        </div>
        
            <div class="integration-card" data-key="wortal">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/wortal.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Wortal">
          <span class="int-name">Wortal</span>
        </div>
        
       <div class="integration-card" data-key="shiprocket">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/shiprocket.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="shiprocket.com">
          <span class="int-name">Shiprocket</span>
        </div>
        <div class="integration-card" data-key="zoho">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/zoho.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="zoho">
          <span class="int-name">Zoho</span>
        </div>
         
        <div class="integration-card" data-key="google-sheets">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/google-sheet.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="googlesheet">
          <span class="int-name">Google Sheet</span>
        </div>

        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/n8n.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="n8n">
          <span class="int-name">n8n</span>
        </div>

        <!-- Duplicate Set 2 -->
        
           
         <div class="integration-card" data-key="shopify">
          <img src="/assets/images/hellobots/integrations-wortal/shopify.png" class="int-icon-box" alt="Shopify">
          <span class="int-name">Shopify</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/woocommerce.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="WooCommerce">
          <span class="int-name">WooCommerce</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/gotab.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Gotab">
          <span class="int-name">Gotab</span>
        </div>
        
            <div class="integration-card" data-key="wortal">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/wortal.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Wortal">
          <span class="int-name">Wortal</span>
        </div>
        
        <div class="integration-card" data-key="shiprocket">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/shiprocket.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="shiprocket.com">
          <span class="int-name">Shiprocket</span>
        </div>
        <div class="integration-card" data-key="zoho">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/zoho.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="zoho">
          <span class="int-name">Zoho</span>
        </div>
        
        <div class="integration-card" data-key="google-sheets">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/google-sheet.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="googlesheet">
          <span class="int-name">Google Sheet</span>
        </div>
        
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-wortal/n8n.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="n8n">
          <span class="int-name">n8n</span>
        </div>
      </div>

    </div>
  </section>
  
<script>
document.addEventListener("click", function (e) {
    const card = e.target.closest(".integration-card");
    if (!card) return;

    const key = card.dataset.key;

    const links = {
        shopify: "https://HelloBots.com/integrations/shopify/",
        woocommerce: "https://HelloBots.com/integrations/woocommerce/",
        gotab: "https://HelloBots.com/integrations/gotab/",
        wortal: "https://HelloBots.com/integrations/wortal/",
        shiprocket: "https://HelloBots.com/integrations/shiprocket/",
        zoho: "https://HelloBots.com/integrations/zoho/",
        "google-sheets": "https://HelloBots.com/integrations/google-sheets/",
        n8n: "https://HelloBots.com/integrations/n8n/"
    };

    if (links[key]) {
        window.open(links[key], "_blank");
    }
});
</script>
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
                <a class="learn-more" href="https://HelloBots.com/whatsapp-marketing/" target="_blank"
                    rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>


            <div class="card">
                <div class="iconn"><i class="fas fa-handshake"></i></div>
                <h3>WhatsApp for Sales</h3>
                <p>Convert chats into sales with automated workflows, lead management, and fast follow-ups.</p>
                <a class="learn-more" href="https://HelloBots.com/whatsapp-sales-crm/" target="_blank"
                    rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>


            <div class="card">
                <div class="iconn"><i class="fas fa-headset"></i></div>
                <h3>WhatsApp for Support</h3>
                <p class="">Provide fast, reliable customer support with instant replies and automated ticket
                    management.</p>
                <a class="learn-more" href="https://HelloBots.com/whatsapp-customer-support/" target="_blank"
                    rel="noopener noreferrer">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>  <script>
document.addEventListener('DOMContentLoaded', function() {
    // Define URL to integration name mapping
    const integrationPages = {
        '/integrations/shopify/': 'Shopify',
        '/integrations/shopify': 'Shopify',
        '/integrations/woocommerce/': 'WooCommerce',
        '/integrations/woocommerce': 'WooCommerce',
        '/integrations/wortal/': 'Wortal',
        '/integrations/wortal': 'Wortal',
        '/integrations/shiprocket/': 'Shiprocket',
        '/integrations/shiprocket': 'Shiprocket',
        '/integrations/zoho/': 'Zoho',
        '/integrations/zoho': 'Zoho',
        '/integrations/google-sheet/': 'Google Sheet',
        '/integrations/google-sheet': 'Google Sheet',
        '/integrations/n8n/': 'n8n',
        '/integrations/n8n': 'n8n',
        '/integrations/gotab/': 'Gotab',
        '/integrations/gotab': 'Gotab'
    };

    // Get current page path
    const currentPath = window.location.pathname.toLowerCase();
    
    // Find matching integration
    let integrationToHide = null;
    for (const [path, name] of Object.entries(integrationPages)) {
        if (currentPath.includes(path.toLowerCase())) {
            integrationToHide = name;
            break;
        }
    }

    // Hide matching cards if on an integration page
    if (integrationToHide) {
        const allCards = document.querySelectorAll('.integration-card');
        
        allCards.forEach(card => {
            const nameSpan = card.querySelector('.int-name');
            if (nameSpan && nameSpan.textContent.trim() === integrationToHide) {
                // Hide the card and its parent link if wrapped in <a>
                const parent = card.parentElement;
                if (parent.tagName === 'A') {
                    parent.style.display = 'none';
                } else {
                    card.style.display = 'none';
                }
            }
        });
    }
});
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


<?php include __DIR__ . '/../../includes/footer.php'; ?>
