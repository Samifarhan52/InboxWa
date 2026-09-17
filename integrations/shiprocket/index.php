<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Shiprocket WhatsApp Integration | Order Tracking & NDR | HelloBots';
$pageDescription = 'Automate courier tracking alerts, delivery notifications, and non-delivery report (NDR) verifications via WhatsApp.';
$canonicalUrl = 'https://hellobotz.com/integrations/shiprocket/';
$ogImage = 'https://hellobotz.com/assets/images/hellobots/integrations-shiprocket/WhatsApp-Shiprocket-Integration.png';
$ogTitle = 'Shiprocket WhatsApp Integration | Order Tracking & NDR | HelloBots';
$ogDescription = 'Automate courier tracking alerts, delivery notifications, and non-delivery report (NDR) verifications via WhatsApp.';

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
        background-image: linear-gradient(180deg, #f4f7f3 25%, #cdb9fb 106%);

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
          shiprocket        </li>
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
        <h1 class="hero-title">WhatsApp Shiprocket Integration for Automated Notifications</h1>
        <p class="hero-text">Send timely shipping alerts to your customers on WhatsApp to keep them updated regarding their order delivery status.
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
          <img width="100%" src="/assets/images/hellobots/integrations-shiprocket/WhatsApp-Shiprocket-Integration.png" loading="lazy"
            alt="WhatsApp Shiprocket Integration">
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
          <img src="/assets/images/hellobots/integrations-shiprocket/Footer_Logo.png" alt="Looks Salon">
        </div>
        <div class="swiper-slide">
          <img src="/assets/images/hellobots/integrations-shiprocket/Mahindra-Logo-2000.png" alt="Mahindra">
        </div>
        <div class="swiper-slide">
          <img src="/assets/images/hellobots/integrations-shiprocket/SkodaLogoNew.png" alt="Skoda">
        </div>
        <div class="swiper-slide">
          <img src="/assets/images/hellobots/integrations-shiprocket/Vegtration_Logo.png" alt="Vegetarian Brand">
        </div>
        <div class="swiper-slide">
          <img src="/assets/images/hellobots/integrations-shiprocket/zee-business.png" alt="Zee Business">
        </div>
      </div>
      <!-- Pagination and Navigation Buttons -->
    </div>
  </div>
</section>
<section class="what-is-api" style="padding: 60px 0px; background-color: #f9f9f9;">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-4 whatsapp-heading">
          What is Shiprocket WhatsApp Integration
        </h2>
      </div>
      <div class="col-12">
        <p class="text-center">
            Shiprocket WhatsApp Integration is the process of connecting the <a href="https://HelloBots.com/whatsapp-business-api/" target="_blank" rel="noopener noreferrer">WhatsApp Business API</a>  with your Shiprocket shipping platform so you can automatically send updates to customers about their orders via WhatsApp messages.
         </p>
      </div>
    </div>
  </div>
</section>
<style>
.ws-section{
    padding:60px 0px;
    text-align:center;
    background:rgb(249 247 255);
}

.ws-subtitle{
 
    margin:0 auto 55px;
    line-height:1.7;
}
.ws-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    background:#ffffff;
    border-radius:14px;
    overflow:hidden;
    border:1px solid #eee;
}
.ws-card{
    padding:40px 35px;
    text-align:left;
    display:flex;
    gap:18px;
    border-right:1px solid #eee;
    border-bottom:1px solid #eee;
}


.ws-card:hover {
    
    box-shadow: 0 12px 35px rgba(205, 185, 251, 0.45);
}
.ws-card:nth-child(3n){border-right:none;}
.ws-icon-box{
    width:55px;
    height:55px;
    background:#cdb9fb33;
    border:1px solid #cdb9fb;
    border-radius:14px;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-shrink:0;
}
.ws-icon{
    font-size:28px;
    color:#7c3aed;
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
    <h2 class="ws-title mb-5">Why WhatsApp Shiprocket Integration</h2>
    <div class="ws-grid mb-5">
        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">local_shipping</span></div>
            <div class="ws-card-content">
                <h3>Real-time Shipping Updates</h3>
                <p>Keep your clients on loop without them asking for it. Automatically notify them using WhatsApp at every milestone, from order pickup and transit process to the final delivery attempt.</p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">travel_explore</span></div>
            <div class="ws-card-content">
                <h3>Direct Delivery Tracking Links</h3>
                <p>Reduce friction in the post-purchase journey by sharing live and clickable tracking links within WhatsApp chat. It enables customers to check their shipment status with just a click.   </p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">inventory_2</span></div>
            <div class="ws-card-content">
                <h3>Instant Delivery Confirmation</h3>
                <p>Provide peace of mind the moment an order reaches its destination. Send automated confirmation messages as soon as Shiprocket marks an order as delivered to make sure it reaches the right person.</p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">error</span></div>
            <div class="ws-card-content">
                <h3>Proactive Exception Handling</h3>
                <p>Convert a potential negative into a positive. In case of any delay, weather disruption, or failed attempts, inform your clients instantly via WhatsApp to manage expectations and maintain trust. </p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">alarm</span></div>
            <div class="ws-card-content">
                <h3>Automated Delivery Reminders</h3>
                <p>Decrease failed delivery attempts by sending automated reminders and coordination instructions on the delivery day. It ensures customers are available to receive their packages.</p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">route</span></div>
            <div class="ws-card-content">
                <h3>Unified Multi-Courier Support</h3>
                <p>Be it a Delhivery, BlueDart, or Ecom Express through Shiprocket, HelloBots delivers a unified brand experience. Monitor and notify about packages across all courier partners from a single WhatsApp API dashboard.</p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">support_agent</span></div>
            <div class="ws-card-content">
                <h3>Decreased Support Queries</h3>
                <p>Proactively updating customers can lower "Where is my order?" (WISMO) tickets by up to 70%.</p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">branding_watermark</span></div>
            <div class="ws-card-content">
                <h3>Branded Experience</h3>
                <p>Use your own brand name and personalized templates to make the conversation feel more professional and trustworthy. </p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">assignment_return</span></div>
            <div class="ws-card-content">
                <h3>Reduced RTO (Return to Origin)</h3>
                <p>Sending automated <strong>COD (Cash on Delivery)</strong> confirmations and address verification prompts via WhatsApp ensures the customer is genuine about the order before you ship it.</p>
            </div>
        </div>

    </div>

     <a href="https://app.HelloBots.com/register" class="cta-button mt-3">Get Started</a>
    </div>
</section>



<section class="whatsapp-usecase py-5" style="background:#ffffff;">
  <div class="container">
    <h2 class="whatsapp-heading mb-5">How to Integrate HelloBots WhatsApp API in Shiprocket
    </h2>
    <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="step">
          <div class="step-number">#1</div>
          <div class="step-text mb-3">
            <h3>Generate Webhook URL</h3>
                    <p>
                        We'll use a webhook to bridge the gap between Shiprocket and Shopify. Go to the integration tab, select Shiprocket, and copy the webhook URL.
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
          <img src="/assets/images/hellobots/integrations-shiprocket/Generate-Webhook-URL.png"
            alt="Generate Webhook URL" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
    <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-1">
        <div class="step">
          <div class="step-number">#2</div>
          <div class="step-text mb-3">
            <h3>Configure Shiprocket Panel</h3>
            <ul class="tick-list">
                <li>Log in to Shiprocket > Settings > API > Webhooks.</li>
                <li>Create a new Webhook and paste the URL copied above.</li>
                <li>Set the Event Trigger to "Order Created" or "Cart Abandoned"</li>
            </ul>
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
          <img src="/assets/images/hellobots/integrations-shiprocket/Configure-Shiprocket-Panel.png"
            alt="Configure Shiprocket Panel" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
    <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="step">
          <div class="step-number mb-3">#3</div>
          <div class="step-text">
            <h3>Activate HelloBots Automation</h3>
            <ul class="tick-list">
                <li>Go to Automations in HelloBots and click 'Create New'
</li>
                <li>Select 'Abandoned Checkout' as your primary trigger
</li>
<li>Choose your pre-approved WhatsApp template (e.g., 'Discount Reminder')
</li>
<li>Flip the switch to 'Active' to start recovering sales
</li>
              
            </ul>
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
          <img src="/assets/images/hellobots/integrations-shiprocket/Activate-HelloBots-Automation.png"
            alt="Activate HelloBots Automation" class="api-image img-fluid rounded">
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
          <img src="/assets/images/hellobots/integrations-shiprocket/shopify.png" class="int-icon-box" alt="Shopify">
          <span class="int-name">Shopify</span>
        </div>
        
        <div class="integration-card">
          <img src="/assets/images/hellobots/integrations-shiprocket/woocommerce.png" class="int-icon-box" alt="WooCommerce">
          <span class="int-name">WooCommerce</span>
        </div>
        <div class="integration-card">
          <img src="/assets/images/hellobots/integrations-shiprocket/gotab.png" class="int-icon-box" alt="Gotab">
          <span class="int-name">Gotab</span>
        </div>
     
            <div class="integration-card" data-key="wortal">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/wortal.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Wortal">
          <span class="int-name">Wortal</span>
        </div>
        
       <div class="integration-card" data-key="shiprocket">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/shiprocket.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="shiprocket.com">
          <span class="int-name">Shiprocket</span>
        </div>
        <div class="integration-card" data-key="zoho">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/zoho.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="zoho">
          <span class="int-name">Zoho</span>
        </div>
        
        <div class="integration-card" data-key="google-sheets">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/google-sheet.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="googlesheet">
          <span class="int-name">Google Sheet</span>
        </div>
    
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/n8n.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="n8n">
          <span class="int-name">n8n</span>
        </div>

        <!-- Duplicate Set 1 -->
             <div class="integration-card" data-key="shopify">
          <img src="/assets/images/hellobots/integrations-shiprocket/shopify.png" class="int-icon-box" alt="Shopify">
          <span class="int-name">Shopify</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/woocommerce.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="WooCommerce">
          <span class="int-name">WooCommerce</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/gotab.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Gotab">
          <span class="int-name">Gotab</span>
        </div>
       
            <div class="integration-card" data-key="wortal">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/wortal.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Wortal">
          <span class="int-name">Wortal</span>
        </div>
        
        <div class="integration-card" data-key="shiprocket">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/shiprocket.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="shiprocket.com">
          <span class="int-name">Shiprocket</span>
        </div>
        <div class="integration-card" data-key="zoho">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/zoho.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="zoho">
          <span class="int-name">Zoho</span>
        </div>
         
        <div class="integration-card" data-key="google-sheets">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/google-sheet.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="googlesheet">
          <span class="int-name">Google Sheet</span>
        </div>
        
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/n8n.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="n8n">
          <span class="int-name">n8n</span>
        </div>
      </div>


      <div class="marquee-row marquee-scroll-right">

          <div class="integration-card" data-key="shopify">
          <img src="/assets/images/hellobots/integrations-shiprocket/shopify.png" class="int-icon-box" alt="Shopify">
          <span class="int-name">Shopify</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/woocommerce.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="WooCommerce">
          <span class="int-name">WooCommerce</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/gotab.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Gotab">
          <span class="int-name">Gotab</span>
        </div>
        
            <div class="integration-card" data-key="wortal">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/wortal.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Wortal">
          <span class="int-name">Wortal</span>
        </div>
        
       <div class="integration-card" data-key="shiprocket">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/shiprocket.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="shiprocket.com">
          <span class="int-name">Shiprocket</span>
        </div>
        <div class="integration-card" data-key="zoho">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/zoho.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="zoho">
          <span class="int-name">Zoho</span>
        </div>
         
        <div class="integration-card" data-key="google-sheets">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/google-sheet.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="googlesheet">
          <span class="int-name">Google Sheet</span>
        </div>

        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/n8n.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="n8n">
          <span class="int-name">n8n</span>
        </div>

        <!-- Duplicate Set 2 -->
        
           
         <div class="integration-card" data-key="shopify">
          <img src="/assets/images/hellobots/integrations-shiprocket/shopify.png" class="int-icon-box" alt="Shopify">
          <span class="int-name">Shopify</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/woocommerce.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="WooCommerce">
          <span class="int-name">WooCommerce</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/gotab.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Gotab">
          <span class="int-name">Gotab</span>
        </div>
        
            <div class="integration-card" data-key="wortal">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/wortal.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Wortal">
          <span class="int-name">Wortal</span>
        </div>
        
        <div class="integration-card" data-key="shiprocket">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/shiprocket.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="shiprocket.com">
          <span class="int-name">Shiprocket</span>
        </div>
        <div class="integration-card" data-key="zoho">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/zoho.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="zoho">
          <span class="int-name">Zoho</span>
        </div>
        
        <div class="integration-card" data-key="google-sheets">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/google-sheet.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="googlesheet">
          <span class="int-name">Google Sheet</span>
        </div>
        
        <div class="integration-card">
          <img loading="lazy" src="/assets/images/hellobots/integrations-shiprocket/n8n.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="n8n">
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
</section><section class="faq-section">
  <div class="container">
          <div class="custom-faq-accordion" aria-label="Frequently Asked Questions"><h2>Frequently Asked Questions</h2><div class="faq-item"><button class="faq-question open" type="button" aria-expanded="true" aria-controls="faq-answer-0"><span class="faq-title"><h3>Can we customize how data from WhatsApp is recorded in Shiprocket?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-0" class="faq-answer open" role="region" aria-hidden="false" style="max-height:none;">Of Course. You can customize the way WhatsApp data is recorded in Shiprocket. It consist which data fields go into which fields of Shiprocket, setting up custom formats, and filtering out unwanted information.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-1"><span class="faq-title"><h3>How often does the data sync between WhatsApp and Shiprocket?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-1" class="faq-answer" role="region" aria-hidden="true">The data sync between WhatsApp and Shiprocket generally occurs in real-time through instant triggers. And in case of scheduled triggers, it can take a maximum of 15 minutes.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-2"><span class="faq-title"><h3>Can I filter or transform data before sending it from WhatsApp to Shiprocket?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-2" class="faq-answer" role="region" aria-hidden="true">Yes, HelloBots enables you to add custom logic or use built-in filters to adjust data as per your requirements.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-3"><span class="faq-title"><h3>Is it possible to add conditions to the integration between WhatsApp and Shiprocket?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-3" class="faq-answer" role="region" aria-hidden="true">Absolutely. You can set conditional logic to control the flow of data between WhatsApp and Shiprocket. For example, you can select specific data that you want when certain conditions are met, or you can create if/else statements to manage different results.</div></div></div><script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Can we customize how data from WhatsApp is recorded in Shiprocket?","acceptedAnswer":{"@type":"Answer","text":"Of Course. You can customize the way WhatsApp data is recorded in Shiprocket. It consist which data fields go into which fields of Shiprocket, setting up custom formats, and filtering out unwanted information."}},{"@type":"Question","name":"How often does the data sync between WhatsApp and Shiprocket?","acceptedAnswer":{"@type":"Answer","text":"The data sync between WhatsApp and Shiprocket generally occurs in real-time through instant triggers. And in case of scheduled triggers, it can take a maximum of 15 minutes."}},{"@type":"Question","name":"Can I filter or transform data before sending it from WhatsApp to Shiprocket?","acceptedAnswer":{"@type":"Answer","text":"Yes, HelloBots enables you to add custom logic or use built-in filters to adjust data as per your requirements."}},{"@type":"Question","name":"Is it possible to add conditions to the integration between WhatsApp and Shiprocket?","acceptedAnswer":{"@type":"Answer","text":"Absolutely. You can set conditional logic to control the flow of data between WhatsApp and Shiprocket. For example, you can select specific data that you want when certain conditions are met, or you can create if/else statements to manage different results."}}]}</script>
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
<script>
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
