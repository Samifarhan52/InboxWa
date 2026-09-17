<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'WhatsApp Shopify Integration: Abandoned Cart Recovery & Order Updates | HelloBots';
$pageDescription = 'Recover abandoned carts, send automated order confirmations, COD verification, and shipping alerts on WhatsApp with HelloBots.';
$canonicalUrl = 'https://hellobotz.com/integrations/shopify/';

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
        background-image: linear-gradient(180deg, #f4f7f3 25%, #cce89a 106%);

}
.step{
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
          Shopify        </li>
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
        
        <h1 class="hero-title">Shopify WhatsApp API Integration</h1>
        <p class="hero-text">Connect your Shopify store with the HelloBots WhatsApp API app to automate order updates, recover abandoned carts, and provide 24/7 customer support directly on WhatsApp.
</p>
<div class="btn-groupp" style="display: flex; gap: 12px;">
     <a id="whatsapp-enquiry"
          href="https://apps.shopify.com/HelloBots-whatsapp-chatbot-api?getgabs_integration"
          target="_blank" rel="noopener noreferrer" class="btn text-white cta-button m-0">
          Install Now
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
          <img width="100%" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/Shopify-WhatsApp-Integration.png" loading="lazy"
            alt="Shopify WhatsApp Integration">
        </div>
      </div>
    </div>
  </div>
</section>
<style>
    .trust-wrap {
  padding: 60px 0px;
  background:#f5f5f5;
}

/* ── Header ── */
.trust-header {
  text-align: center;
  margin-bottom: 20px;
}
.trust-header h2 {
  margin-bottom: 12px;
}
.trust-header p {
  line-height: 1.6;
}

/* ── Stats ── */
.stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 16px;
  margin-bottom: 40px;
}
.stat-card {
  padding: 28px 16px;
  text-align: center;
  border:none;
  background:none;
}
.stat-num {
  font-size: 38px;
  font-weight: 700;
  color: #25D366;
  line-height: 1;
  margin-bottom: 8px;
}
.stat-label {
  font-size: 13px;
  color: #1A1A1A;
  line-height: 1.4;
  font-weight:500;
}

/* ── Reviews ── */
.reviews-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 18px;
  margin-bottom: 40px;
}
.review-card {
  border-radius: 14px;
  padding: 22px 70px;
  position: relative;
    min-height: 220px; /* increase height */
}
.stat-card:hover{
    background:none;
    transform:translateY(0px);
}
.review-card.featured {
  border: 2px solid #25D366;
}
.featured-badge {
  position: absolute;
  top: -13px;
  left: 50%;
  transform: translateX(-50%);
  background: #25D366;
  color: #fff;
  font-size: 11px;
  font-weight: 600;
  padding: 3px 14px;
  border-radius: 100px;
  white-space: nowrap;
}
.stars {
  display: flex;
  gap: 3px;
  margin-bottom: 12px;
}
.star {
  width: 14px;
  height: 14px;
  background: #F5A623;
  clip-path: polygon(50% 0%,61% 35%,98% 35%,68% 57%,79% 91%,50% 70%,21% 91%,32% 57%,2% 35%,39% 35%);
}
.review-text {
  font-size: 14px!important;
  color: #1a1a1a;
  line-height: 1.65;
  margin-bottom: 18px;
}
.reviewer {
  display: flex;
  align-items: center;
  gap: 10px;
}
.avatar {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
  font-weight: 600;
  flex-shrink: 0;
}
.reviewer-name {
  font-size: 13px;
  font-weight: 600;
  color: #1a1a1a;
}
.reviewer-role {
  font-size: 12px;
  color: #6b6b6b;
  margin-top: 1px;
}

/* ── Badges ── */

.badges-row {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  gap: 28px 20px;
  max-width: 850px;
  margin: 60px auto;
  align-items: center;
}

/* Top Row (2 centered) */
.badges-row .badge:nth-child(1) {
  grid-column: 2 / 4;
  justify-self: center;
}

.badges-row .badge:nth-child(2) {
  grid-column: 4 / 6;
  justify-self: center;
}

/* Bottom Row (3 evenly spaced) */
.badges-row .badge:nth-child(3) {
  grid-column: 1 / 3;
  justify-self: center;
}

.badges-row .badge:nth-child(4) {
  grid-column: 3 / 5;
  justify-self: center;
}

.badges-row .badge:nth-child(5) {
  grid-column: 5 / 7;
  justify-self: center;
}

/* Badge */
.badge {
  display: flex;
  align-items: center;
  gap: 12px;
}

/* Icon */
.badge-icon {
  width: 38px;
  height: 38px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

/* Text */
.badge-text {
  font-size: 14px;
  font-weight: 600;
  color: #1a1a1a;
  line-height: 1.2;
  text-align:start;
}

.badge-sub {
  font-size: 12px;
  color: #6b6b6b;
  margin-top: 2px;
}

/* ── Mobile Fix ── */
@media (max-width: 768px) {
  .badges-row {
    grid-template-columns: 1fr;
    gap: 16px;
  }

  .badges-row .badge {
    grid-column: auto !important;
    justify-self: flex-start!important;
  }
}
/* ── Responsive ── */
@media (max-width: 860px) {
  .stats-grid { grid-template-columns: repeat(2, 1fr); }
  .reviews-grid { grid-template-columns: 1fr; }
}
@media (max-width: 480px) {
  .stats-grid { grid-template-columns: repeat(2, 1fr); }
  
}
</style>
<section class="trust-wrap">
    <div class="container">

  <!-- Header -->
  <div class="trust-header">
    <h2>Thousands of Shopify Stores Rely on HelloBots</h2>
    <p>Trusted by thousands of Shopify stores to automate sales, support, and customer engagement on WhatsApp.</p>
  </div>

  <!-- Stats -->
  <div class="stats-grid">
    <div class="stat-card">
      <div class="stat-num">500+</div>
      <div class="stat-label">Active Shopify <br> stores</div>
    </div>
    <div class="stat-card">
      <div class="stat-num">98%</div>
      <div class="stat-label">Customer <br> satisfaction rate</div>
    </div>
    <div class="stat-card">
      <div class="stat-num">3x</div>
      <div class="stat-label">Average ROI for<br> merchants</div>
    </div>
    <div class="stat-card">
      <div class="stat-num">1M+</div>
      <div class="stat-label">WhatsApp <br>messages sent</div>
    </div>
  </div>

  <!-- Reviews -->
  <div class="reviews-grid">

    <div class="review-card">
      <div class="stars">
        <div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div>
      </div>
      <p class="review-text">"We got all the support related to setup and proceeding for the WhatsApp abandon cart recovery and confirmation setup. The app has all the feature with regards to chats and automation over WhatsApp."</p>
      <div class="reviewer">
        <div class="avatar" style="background:#E1F5EE;color:#0F6E56;">MS</div>
        <div>
          <div class="reviewer-name">My Store</div>
          <div class="reviewer-role">India</div>
        </div>
      </div>
    </div>

    <div class="review-card featured">
      <div class="featured-badge">Top review</div>
      <div class="stars">
        <div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div>
      </div>
      <p class="review-text">"I’ve had an excellent experience using HelloBots. It helps recover lost sales by sending automated WhatsApp messages to customers who left items in their cart. I would like to specially appreciate Mr Sunny for quick and smooth support, during the onboarding and setup abandoned cart messages. Highly recommended app for WhatsApp automation services."</p>
      <div class="reviewer">
        <div class="avatar" style="background:#E6F1FB;color:#185FA5;">99</div>
        <div>
          <div class="reviewer-name">99pandit.com</div>
          <div class="reviewer-role">India</div>
        </div>
      </div>
    </div>

    <div class="review-card">
      <div class="stars">
        <div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div>
      </div>
      <p class="review-text">"We’ve been using the HelloBots WhatsApp Chatbot & Marketing app on our Shopify store, and it’s made a real difference in how we connect with our customers."</p>
      <div class="reviewer">
        <div class="avatar" style="background:#FAEEDA;color:#854F0B;">V</div>
        <div>
          <div class="reviewer-name">Vishnu</div>
          <div class="reviewer-role">India</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Trust Badges -->
  <div class="badges-row">

    <div class="badge">
      <div class="badge-icon" style="background:#E1F5EE;">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0F6E56" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
      </div>
      <div>
        <div class="badge-text">Meta Business Partner</div>
        <div class="badge-sub">Official WhatsApp API access</div>
      </div>
    </div>

    <div class="badge">
      <div class="badge-icon" style="background:#E6F1FB;">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#185FA5" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
      </div>
      <div>
        <div class="badge-text">SSL Encrypted</div>
        <div class="badge-sub">Your data stays secure</div>
      </div>
    </div>

    <div class="badge">
      <div class="badge-icon" style="background:#EEEDFE;">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#534AB7" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      </div>
      <div>
        <div class="badge-text">GDPR Compliant</div>
        <div class="badge-sub">Privacy-first architecture</div>
      </div>
    </div>

    <div class="badge">
      <div class="badge-icon" style="background:#FAEEDA;">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#854F0B" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      </div>
      <div>
        <div class="badge-text">24/7 Support</div>
        <div class="badge-sub">Always here for you</div>
      </div>
    </div>

    <div class="badge">
      <div class="badge-icon" style="background:#EAF3DE;">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#3B6D11" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
      </div>
      <div>
        <div class="badge-text">5 / 5 rating</div>
        <div class="badge-sub">On Shopify App Store</div>
      </div>
    </div>

  </div>
</div>
</section>
<section class="what-is-api" style="padding: 60px 0px; background-color: #f9f9f9;">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-4 whatsapp-heading">
          What is Shopify WhatsApp Integration?
        </h2>
      </div>
      <div class="col-12">
        <p class="text-center">
         Shopify WhatsApp Integration is the process of connecting the <a href="https://HelloBots.com/whatsapp-business-api/" target="_blank" rel="noopener noreferrer">WhatsApp API</a> with your Shopify online store so you can communicate with customers, send updates, take orders, and boost sales directly via WhatsApp.


      </div>
    </div>
  </div>
</section>
<style>
.ws-section{
    padding:60px 0px;
    text-align:center;
    background:rgba(34,197,94,.1);
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
    box-shadow: 0 12px 35px rgb(195 247 160 / 45%);
}
.ws-card:nth-child(3n){border-right:none;}
.ws-icon-box{
    width:55px;
    height:55px;
    background:#f4ffe2;
    border:1px solid #5d8c3e;
    border-radius:14px;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-shrink:0;
}
.ws-icon{
    font-size:28px;
    color:#5d8c3e;
}
.ws-card-content h3{

font-size:20px;

    margin-bottom:8px;
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
    <h2 class="ws-title mb-5">Benefits of HelloBots WhatsApp API Shopify App</h2>
    <div class="ws-grid mb-5">

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">shopping_cart_checkout</span></div>
            <div class="ws-card-content">
                <h3>Recover Abandoned Carts</h3>
                <p>Automatically send personalized WhatsApp messages to customers who left items in their cart to encourage purchase.</p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">rate_review</span></div>
            <div class="ws-card-content">
                <h3>Feedback Collection & Reviews</h3>
                <p>Collect feedback and reviews through WhatsApp to improve your products and build social proof.</p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">payments</span></div>
            <div class="ws-card-content">
                <h3>Product Catalog & Payments</h3>
                <p>Showcase Shopify products and accept payments directly in WhatsApp that sync with your store admin.</p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">notifications_active</span></div>
            <div class="ws-card-content">
                <h3>E-commerce Notification</h3>
                <p>Send order confirmation, shipping updates, delivery notifications, and tracking IDs via WhatsApp.</p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">chat</span></div>
            <div class="ws-card-content">
                <h3>WhatsApp Chat Button</h3>
                <p>Add a WhatsApp Chat button to your Shopify website, making it easier for customers to reach you instantly.</p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">currency_rupee</span></div>
            <div class="ws-card-content">
                <h3>Support for COD</h3>
                <p>Confirm COD orders with WhatsApp. Reduce returns and cut down by sending a Cash On Delivery order confirmation message.</p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">headset_mic</span></div>
            <div class="ws-card-content">
                <h3>24/7 Sales and Support</h3>
                <p>Deliver 24/7 sales and support using AI WhatsApp chatbots and team inbox. </p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">campaign</span></div>
            <div class="ws-card-content">
                <h3>Run Promotions & Campaigns</h3>
                <p>Launch promotional campaigns, send special offers, and engage customers directly on WhatsApp to boost conversions.</p>
            </div>
        </div>

        <div class="ws-card">
            <div class="ws-icon-box"><span class="material-symbols-rounded ws-icon">analytics</span></div>
            <div class="ws-card-content">
                <h3>Analytics & Performance</h3>
                <p>Easy to track analytics of your campaign performance using the HelloBots dashboard.</p>
            </div>
        </div>

    </div>

    <a href="https://app.HelloBots.com/register" class="cta-button mt-3">Get Started</a>
    </div>
</section>




<section class="whatsapp-usecase py-5" style="background:#ffffff;">
  <div class="container">
    <h2 class="whatsapp-heading mb-5">How to Install the HelloBots WhatsApp API Shopify App

    </h2>
    <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="step">
          <div class="step-number">#1</div>
          <div class="step-text mb-3">
            <h3>Log in to Shopify Admin</h3>
                    <p>
                        Open your Shopify website admin panel, then
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
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/Shopify-Admin.png"
            alt="Login Shopify Admin" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
    <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-1">
        <div class="step">
          <div class="step-number">#2</div>
          <div class="step-text mb-3">
            <h3>Visit Shopify App Store</h3>
            <ul class="tick-list">
                <li><a href="https://apps.shopify.com/HelloBots-whatsapp-chatbot-api?getgabs_integration" target="_blank">Visit this link</a>, or in the search bar, type HelloBots WhatsApp Automation</li>
                <li>Click on Install App</li>
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
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/Shopify-App-Store.png"
            alt="Visit Shopify App Store" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
    <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="step">
          <div class="step-number mb-3">#3</div>
          <div class="step-text">
            <h3>Connect Your WhatsApp Number</h3>
            <ul class="tick-list">
                <li>After installation, you will be redirected to the HelloBots Dashboard
</li>
                <li>Connect your WhatsApp Business API (WABA) (if not done at the app.HelloBots.com panel)
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
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/Connect-HelloBots-Account.png"
            alt="Connect HelloBots Account" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
    
     <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-1">
        <div class="step">
          <div class="step-number mb-3">#4</div>
          <div class="step-text">
            <h3>Enable WhatsApp Automations</h3>
            <p>From the HelloBots dashboard:

            </p>
             <ul class="tick-list">
                <li>Add a WhatsApp chat widget to your website to have 2-way communication with your customers</li>
                <li>Select or create WhatsApp message templates for abandoned cart, order confirmation, etc
</li>
                <li>Enable automation for:
                <ol class="tick-ol">
                    <li>Order Confirmation</li>
                    <li>
                        Abandoned Cart
                    </li>
                </ol>
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
      <div class="col-lg-6 order-2 order-lg-2 text-center">
        <div class="api-image-box mt-3">
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/Enable-WhatsApp-Automations.png"
            alt="Enable WhatsApp Automations" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
   
  <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="step">
          <div class="step-number mb-3">#5</div>
          <div class="step-text">
            <h3>Manage & Reports</h3>
            <ul class="tick-list">
                <li>Chat with live customers

</li>
                <li>Monitor delivery and response rates from the dashboard

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
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/Go-Live.png"
            alt="Go Live" class="api-image img-fluid rounded">
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
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/shopify.png" class="int-icon-box" alt="Shopify">
          <span class="int-name">Shopify</span>
        </div>
        
        <div class="integration-card">
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/woocommerce.png" class="int-icon-box" alt="WooCommerce">
          <span class="int-name">WooCommerce</span>
        </div>
        <div class="integration-card">
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/gotab.png" class="int-icon-box" alt="Gotab">
          <span class="int-name">Gotab</span>
        </div>
     
            <div class="integration-card" data-key="wortal">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/wortal.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Wortal">
          <span class="int-name">Wortal</span>
        </div>
        
       <div class="integration-card" data-key="shiprocket">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/shiprocket.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="shiprocket.com">
          <span class="int-name">Shiprocket</span>
        </div>
        <div class="integration-card" data-key="zoho">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/zoho.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="zoho">
          <span class="int-name">Zoho</span>
        </div>
        
        <div class="integration-card" data-key="google-sheets">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/google-sheet.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="googlesheet">
          <span class="int-name">Google Sheet</span>
        </div>
    
        <div class="integration-card">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/n8n.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="n8n">
          <span class="int-name">n8n</span>
        </div>

        <!-- Duplicate Set 1 -->
             <div class="integration-card" data-key="shopify">
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/shopify.png" class="int-icon-box" alt="Shopify">
          <span class="int-name">Shopify</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/woocommerce.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="WooCommerce">
          <span class="int-name">WooCommerce</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/gotab.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Gotab">
          <span class="int-name">Gotab</span>
        </div>
       
            <div class="integration-card" data-key="wortal">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/wortal.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Wortal">
          <span class="int-name">Wortal</span>
        </div>
        
        <div class="integration-card" data-key="shiprocket">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/shiprocket.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="shiprocket.com">
          <span class="int-name">Shiprocket</span>
        </div>
        <div class="integration-card" data-key="zoho">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/zoho.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="zoho">
          <span class="int-name">Zoho</span>
        </div>
         
        <div class="integration-card" data-key="google-sheets">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/google-sheet.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="googlesheet">
          <span class="int-name">Google Sheet</span>
        </div>
        
        <div class="integration-card">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/n8n.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="n8n">
          <span class="int-name">n8n</span>
        </div>
      </div>


      <div class="marquee-row marquee-scroll-right">

          <div class="integration-card" data-key="shopify">
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/shopify.png" class="int-icon-box" alt="Shopify">
          <span class="int-name">Shopify</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/woocommerce.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="WooCommerce">
          <span class="int-name">WooCommerce</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/gotab.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Gotab">
          <span class="int-name">Gotab</span>
        </div>
        
            <div class="integration-card" data-key="wortal">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/wortal.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Wortal">
          <span class="int-name">Wortal</span>
        </div>
        
       <div class="integration-card" data-key="shiprocket">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/shiprocket.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="shiprocket.com">
          <span class="int-name">Shiprocket</span>
        </div>
        <div class="integration-card" data-key="zoho">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/zoho.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="zoho">
          <span class="int-name">Zoho</span>
        </div>
         
        <div class="integration-card" data-key="google-sheets">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/google-sheet.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="googlesheet">
          <span class="int-name">Google Sheet</span>
        </div>

        <div class="integration-card">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/n8n.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="n8n">
          <span class="int-name">n8n</span>
        </div>

        <!-- Duplicate Set 2 -->
        
           
         <div class="integration-card" data-key="shopify">
          <img src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/shopify.png" class="int-icon-box" alt="Shopify">
          <span class="int-name">Shopify</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/woocommerce.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="WooCommerce">
          <span class="int-name">WooCommerce</span>
        </div>
        <div class="integration-card">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/gotab.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Gotab">
          <span class="int-name">Gotab</span>
        </div>
        
            <div class="integration-card" data-key="wortal">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/wortal.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="Wortal">
          <span class="int-name">Wortal</span>
        </div>
        
        <div class="integration-card" data-key="shiprocket">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/shiprocket.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="shiprocket.com">
          <span class="int-name">Shiprocket</span>
        </div>
        <div class="integration-card" data-key="zoho">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/zoho.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="zoho">
          <span class="int-name">Zoho</span>
        </div>
        
        <div class="integration-card" data-key="google-sheets">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/google-sheet.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="googlesheet">
          <span class="int-name">Google Sheet</span>
        </div>
        
        <div class="integration-card">
          <img loading="lazy" src="<?php echo $bp; ?>assets/images/HelloBots/integrations-shopify/n8n.png" class="int-icon-box" width="50" height="50" loading="lazy" alt="n8n">
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
          <div class="custom-faq-accordion" aria-label="Frequently Asked Questions"><h2>Frequently Asked Questions</h2><div class="faq-item"><button class="faq-question open" type="button" aria-expanded="true" aria-controls="faq-answer-0"><span class="faq-title"><h3>Do I need the WhatsApp Business API to send Shopify notifications on WhatsApp?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-0" class="faq-answer open" role="region" aria-hidden="false" style="max-height:none;">Yes, you need the WhatsApp Business API through a Meta partner like HelloBots to send automated, high-volume Shopify notifications like order confirmations, shipping updates, and abandoned cart alerts.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-1"><span class="faq-title"><h3>What can I automate with Shopify + HelloBots?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-1" class="faq-answer" role="region" aria-hidden="true">1. Order Notifications: Send automated confirmation, shipping, and delivery updates.
2. Abandoned Cart Recovery: Automatically send reminders to customers who left items in their cart.
3. Customer Support: Use chatbots to answer FAQs (e.g., return policies, order tracking).</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-2"><span class="faq-title"><h3>What are the requirements to get started?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-2" class="faq-answer" role="region" aria-hidden="true">A Shopify store with products.
A phone number for the WhatsApp Business account 
A WhatsApp Business API platform or provider like HelloBots
A Facebook Business Manager account to verify your business and API access.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-3"><span class="faq-title"><h3>Can I send broadcast messages to my Shopify customers?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-3" class="faq-answer" role="region" aria-hidden="true">Yes, you can send broadcast messages to Shopify customers by using the WhatsApp Business API through HelloBots.</div></div></div><script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Do I need the WhatsApp Business API to send Shopify notifications on WhatsApp?","acceptedAnswer":{"@type":"Answer","text":"Yes, you need the WhatsApp Business API through a Meta partner like HelloBots to send automated, high-volume Shopify notifications like order confirmations, shipping updates, and abandoned cart alerts."}},{"@type":"Question","name":"What can I automate with Shopify + HelloBots?","acceptedAnswer":{"@type":"Answer","text":"1. Order Notifications: Send automated confirmation, shipping, and delivery updates.\r\n2. Abandoned Cart Recovery: Automatically send reminders to customers who left items in their cart.\r\n3. Customer Support: Use chatbots to answer FAQs (e.g., return policies, order tracking)."}},{"@type":"Question","name":"What are the requirements to get started?","acceptedAnswer":{"@type":"Answer","text":"A Shopify store with products.\r\nA phone number for the WhatsApp Business account \r\nA WhatsApp Business API platform or provider like HelloBots\r\nA Facebook Business Manager account to verify your business and API access."}},{"@type":"Question","name":"Can I send broadcast messages to my Shopify customers?","acceptedAnswer":{"@type":"Answer","text":"Yes, you can send broadcast messages to Shopify customers by using the WhatsApp Business API through HelloBots."}}]}</script>
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
