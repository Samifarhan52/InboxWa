<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'WhatsApp In-Chat Payments | UPI, Cards & Net Banking | HelloBots';
$pageDescription = 'Accept frictionless digital payments directly in WhatsApp chat conversations. Speed up checkouts and maximize transaction success.';
$canonicalUrl = 'https://hellobotz.com/products/whatsapp-payments/';
$ogImage = 'https://hellobotz.com/assets/images/hellobots/whatsapp-payments/WhatsApp-Payments.png';
$ogTitle = 'WhatsApp In-Chat Payments | UPI, Cards & Net Banking | HelloBots';
$ogDescription = 'Accept frictionless digital payments directly in WhatsApp chat conversations. Speed up checkouts and maximize transaction success.';

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
          <a href="https://HelloBots.com/">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          WhatsApp Payments        </li>
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
    margin-bottom: 40px;">
    <i class="fa-brands fa-meta meta-icon"></i> Official Meta Partner
  </span>
        <!-- Breadcrumbs -->
        <!-- End Breadcrumbs -->
        <h1 class="hero-title">Enable Instant In-Chat Payments on WhatsApp</h1>
        <p class="hero-text">Let your customers pay without leaving the chat, quick, secure, and smooth right inside WhatsApp.</p>
        <a id="whatsapp-enquiry"
          href="<?php echo $bp; ?>#contact-section"
          target="_blank" rel="noopener noreferrer" class="btn text-white cta-button m-0">
          Enquiry Now
        </a>
      </div>
      <!-- Image Content with background -->
      <div class="col-lg-6">
        <div class="api-image-box " style="padding: 20px; border-radius: 10px;">
          <img width="100%" src="/assets/images/hellobots/whatsapp-payments/WhatsApp-Payments.png" loading="lazy"
            alt="WhatsApp Payments">
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
          <img src="/assets/images/hellobots/whatsapp-payments/Footer_Logo.png" alt="Looks Salon">
        </div>
        <div class="swiper-slide">
          <img src="/assets/images/hellobots/whatsapp-payments/Mahindra-Logo-2000.png" alt="Mahindra">
        </div>
        <div class="swiper-slide">
          <img src="/assets/images/hellobots/whatsapp-payments/SkodaLogoNew.png" alt="Skoda">
        </div>
        <div class="swiper-slide">
          <img src="/assets/images/hellobots/whatsapp-payments/Vegtration_Logo.png" alt="Vegetarian Brand">
        </div>
        <div class="swiper-slide">
          <img src="/assets/images/hellobots/whatsapp-payments/zee-business.png" alt="Zee Business">
        </div>
      </div>
      <!-- Pagination and Navigation Buttons -->
    </div>
  </div>
</section>
<section class="what-is-api" style="padding: 60px 0px; background-color: #f9f9f9;;">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-4 whatsapp-heading">
          What is WhatsApp Payment?
        </h2>
      </div>
      <div class="col-12">
        <p class="text-center">
         WhatsApp Payments is an in-chat payment feature that lets both businesses and users send and receive money without exiting WhatsApp. <a href="https://HelloBots.com/whatsapp-business-api/" target="_blank" rel="noopener noreferrer">WhatsApp Business API</a> enables sending of even dynamic payment requests, including order details, payment links, or UPI options, all in a single chat.         </p>
      </div>
    </div>
  </div>
</section>


<section class="trust-section py-5" style="background:#fff!important">
  <div class="container">
    <h2 class="text-center mb-4">Why WhatsApp Payments?
</h2>
    <div class="row align-items-center">
      <!-- Left Text Section -->
      <div class="col-lg-6">
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3>Instant Checkout</h3>
            <p>Allow your customers to complete the purchase within a chat without switching to another app or website. It makes the buying experience smoother and faster.</p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3>Secure Transactions</h3>
            <p>All the payments you make with WhatsApp payments are secure via WhatsApp encryption and UPI verification, making transactions stress-free.
            </p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3></span>Higher Conversions</h3>
            <p>Provide in-chat payment options to customers for simple checkouts. It reduces drop-offs, keeps customers engaged, and improves conversion rate.</p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3></span>Faster Customer Journey</h3>
            <p>From browsing to payments, do everything within a single platform. Clients can browse, decide, and complete the payment without any friction or hassle.</p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3></span>Trusted Experience</h3>
            <p>Gain customer trust with an encrypted and verified payment option to make your brand look more reliable, improving customer satisfaction and repeat business.</p>
          </div>
        </div>
        
        
      </div>
      <!-- Right Image Section -->
      <div class="col-lg-6 text-center mt-4 mt-lg-0">
        <img src="/assets/images/hellobots/whatsapp-payments/Why-WhatsApp-Payments.png"
          alt="Why WhatsApp Payments " class="img-fluid" />
      </div>
    </div>
  </div>
</section>





<section class="HelloBots-steps">
  <div class="container">
 
     <h2 class="mb-5 section-title">How WhatsApp Payment Works?</h2>
    <div class="steps-grid">
      <div class="step-box">
        <span class="step-numberr">01</span>
        <div class="step-icon"><i class="fa-solid fa-user-plus"></i></div>
        <h3>Customer Inquiry</h3>
        <p>A customer messages on WhatsApp, asking or showing interest in your product or services.</p>
      </div>
      <div class="step-box">
        <span class="step-numberr">02</span>
        <div class="step-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
        <h3>Send Payment Request</h3>
        <p>The chatbot or agent shares order details, including order ID, billing amount, dynamic payment link, or UPI option.</p>
      </div>
      <div class="step-box">
        <span class="step-numberr">03</span>
        <div class="step-icon"><i class="fa-brands fa-whatsapp"></i></div>
        <h3>Review & Pay</h3>
        <p>Now the customer will click “review and pay” to review the order details and choose their preferred mode of payment, like UPI or card.</p>
      </div>
      <div class="step-box">
        <span class="step-numberr">04</span>
        <div class="step-icon"><i class="fa-solid fa-address-book"></i></div>
        <h3>Secure Payment Processing</h3>
        <p>Payment will be made through secure online payment gateways, such as Razorpay or PayU, for safer transactions.</p>
      </div>
      <div class="step-box">
        <span class="step-numberr">05</span>
        <div class="step-icon"><i class="fa-solid fa-robot"></i></div>
        <h3>Order Confirmation</h3>
        <p>After the payment is successful, the system will send a confirmation message on WhatsApp and automatically update the order status.</p>
      </div>
     
    </div>
    
                        <div class="btn-groupp mt-5" style="display: flex;
    justify-content: center; gap:20px;">
                      <!-- Enquiry Now Button -->
                    
                         <!--<i class="fa-solid fa-link"></i> -->
                         <a href="https://app.HelloBots.com/register" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: white;"class="btn-apply cta-button cta-buttonn">Get Started</a> 
                      
                  
                      <!-- Book A Free Demo Button -->
                      
                         <!--<i class="fa-solid fa-link"></i> -->
                         <a id="whatsapp-enquiry"
     href="<?php echo $bp; ?>#contact-section" 
     target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: white;" class="btn-apply cta-button cta-buttonn"
   >
    Enquiry Now
  </a>
                     
                  </div>
  </div>
</section>

<style>
.enquiry:hover{
    background:none!important;
    transform:none;
}
  .HelloBots-steps {
    background: #eaf2fd;
    padding: 60px 20px;
    text-align: center;
  }
  .HelloBots-steps .section-title {
    margin-bottom: 20px;
    
  }
  .steps-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    max-width: 1100px;
    margin: 0 auto;
  }
  .step-box {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    padding: 25px 15px;
    position: relative;
    transition: all 0.3s ease;
  }
  .step-box:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.15);
  }
  .step-numberr {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    background: #034737;
    color: #fff;
    padding: 5px 15px;
    border-radius: 10px;
    font-weight: 600;
  }
  .step-icon {
    background: #eaf2fd;
    width: 55px;
    height: 55px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    margin: 15px auto;
    color: #034737;
    font-size: 1.4rem;
  }
 
  .step-box h3 {
    color: #034737;
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 8px;
  }
.cta-buttonn{
    margin:0px!important;
}
  @media (max-width: 992px) {
    .steps-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }
  @media (max-width: 600px) {
    .steps-grid {
      grid-template-columns: 1fr;
    }
    .HelloBots-steps .section-title {
      font-size: 1.4rem;
    }
  }
</style>



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
</style>     <link rel="stylesheet" href="https://HelloBots.com/wp-content/themes/sierra/assets/css/g2reviews.css" class="css">
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
              src="/assets/images/hellobots/whatsapp-payments/CommunicationPlatformasaService_UsersMos.png"
              alt="Best Est. ROI - Enterprise" class="award-image" width="100" height="100">
            <img src="/assets/images/hellobots/whatsapp-payments/CommunicationPlatformasaService_BestEsti.png"
              alt="Best Support - Enterprise" class="award-image" width="100" height="100">
            <img loading="lazy" src="/assets/images/hellobots/whatsapp-payments/Chatbots_HighPerformer_HighPerformer.png"
              alt="Best Usability - Small Business" class="award-image" width="100" height="100">
          </div>
          <div class="d-flex flex-wrap justify-content-center g2-reviews-tags" style="gap:38px;">
            <img loading="lazy" src="/assets/images/hellobots/whatsapp-payments/easiest_Admin.png"
              alt="Easiest To Do Business With - Mid-Market" class="award-image" width="100" height="100">
            <img loading="lazy" src="/assets/images/hellobots/whatsapp-payments/Chatbots_BestSupport_QualityOfSupport.png"
              alt="Fastest Implementation - Enterprise" class="award-image" width="100" height="100">
            <img loading="lazy" src="/assets/images/hellobots/whatsapp-payments/Chatbots_HighPerformer_AsiaPacific_HighP.png"
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

              <img loading="lazy" src="/assets/images/hellobots/whatsapp-payments/g2.png" alt="G2 Logo"
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

              <img loading="lazy" src="/assets/images/hellobots/whatsapp-payments/shopify.png" alt="Shopify Logo"
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

              <img loading="lazy" src="/assets/images/hellobots/whatsapp-payments/Trust-Pilot.png" alt="Trust Pilot Logo"
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
              <div class="custom-faq-accordion" aria-label="Frequently Asked Questions"><h2>Frequently Asked Questions</h2><div class="faq-item"><button class="faq-question open" type="button" aria-expanded="true" aria-controls="faq-answer-0"><span class="faq-title"><h3>Is WhatsApp Payments secure?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-0" class="faq-answer open" role="region" aria-hidden="false" style="max-height:none;">Yes, each transaction that you do via WhatsApp payments is end-to-end encrypted and verified via secure payment networks such as UPI.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-1"><span class="faq-title"><h3>Which countries support WhatsApp Payments?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-1" class="faq-answer" role="region" aria-hidden="true">As of now, WhatsApp payments are supported in certain countries only, including India, Brazil, and Singapore. However, the availability can vary depending on the local restrictions.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-2"><span class="faq-title"><h3>Can any business use WhatsApp Payments?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-2" class="faq-answer" role="region" aria-hidden="true">Of course, all types and sizes of businesses can use this feature. You just have to have a verified WhatsApp business account in addition to access to the official Business API, through which you can send an in-chat payment request.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-3"><span class="faq-title"><h3>What payment methods are supported?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-3" class="faq-answer" role="region" aria-hidden="true">WhatsApp supports the following payment methods: credit/debit cards, UPI, and others as accepted by the local payment gateway integrated with WhatsApp.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-4"><span class="faq-title"><h3>Do customers need a WhatsApp Business account to pay?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-4" class="faq-answer" role="region" aria-hidden="true">No, it is not necessary. Customers can easily pay for their purchases using their normal WhatsApp account.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-5"><span class="faq-title"><h3>How quickly is payment confirmed?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-5" class="faq-answer" role="region" aria-hidden="true">The payment confirmation is an instant process. Once the transaction is successful, WhatsApp automatically confirms it and sends a confirmation message to the customer.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-6"><span class="faq-title"><h3>Does WhatsApp charge a fee for payments?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-6" class="faq-answer" role="region" aria-hidden="true">The payment charges mainly depend on partners and regulations. Generally, peer-to-peer transactions are free, whereas business transaction requires small processing fees.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-7"><span class="faq-title"><h3>Can WhatsApp Payments help increase sales?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-7" class="faq-answer" role="region" aria-hidden="true">Yes, with in-chat payments, companies can minimize the drop-offs and boost the conversion rate while offering a smoother customer experience.</div></div></div><script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Is WhatsApp Payments secure?","acceptedAnswer":{"@type":"Answer","text":"Yes, each transaction that you do via WhatsApp payments is end-to-end encrypted and verified via secure payment networks such as UPI."}},{"@type":"Question","name":"Which countries support WhatsApp Payments?","acceptedAnswer":{"@type":"Answer","text":"As of now, WhatsApp payments are supported in certain countries only, including India, Brazil, and Singapore. However, the availability can vary depending on the local restrictions."}},{"@type":"Question","name":"Can any business use WhatsApp Payments?","acceptedAnswer":{"@type":"Answer","text":"Of course, all types and sizes of businesses can use this feature. You just have to have a verified WhatsApp business account in addition to access to the official Business API, through which you can send an in-chat payment request."}},{"@type":"Question","name":"What payment methods are supported?","acceptedAnswer":{"@type":"Answer","text":"WhatsApp supports the following payment methods: credit/debit cards, UPI, and others as accepted by the local payment gateway integrated with WhatsApp."}},{"@type":"Question","name":"Do customers need a WhatsApp Business account to pay?","acceptedAnswer":{"@type":"Answer","text":"No, it is not necessary. Customers can easily pay for their purchases using their normal WhatsApp account."}},{"@type":"Question","name":"How quickly is payment confirmed?","acceptedAnswer":{"@type":"Answer","text":"The payment confirmation is an instant process. Once the transaction is successful, WhatsApp automatically confirms it and sends a confirmation message to the customer."}},{"@type":"Question","name":"Does WhatsApp charge a fee for payments?","acceptedAnswer":{"@type":"Answer","text":"The payment charges mainly depend on partners and regulations. Generally, peer-to-peer transactions are free, whereas business transaction requires small processing fees."}},{"@type":"Question","name":"Can WhatsApp Payments help increase sales?","acceptedAnswer":{"@type":"Answer","text":"Yes, with in-chat payments, companies can minimize the drop-offs and boost the conversion rate while offering a smoother customer experience."}}]}</script>
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


<?php include __DIR__ . '/../../includes/footer.php'; ?>
