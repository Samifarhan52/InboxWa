<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Native WhatsApp Forms & Flows | Collect Leads & Feedback | HelloBots';
$pageDescription = 'Create interactive multi-screen WhatsApp forms and surveys. Capture high-intent customer leads without external landing pages.';
$canonicalUrl = 'https://hellobotz.com/products/whatsapp-form/';
$ogImage = 'https://hellobotz.com/assets/images/hellobots/whatsapp-forms/WhatsApp-Form.png';
$ogTitle = 'Native WhatsApp Forms & Flows | Collect Leads & Feedback | HelloBots';
$ogDescription = 'Create interactive multi-screen WhatsApp forms and surveys. Capture high-intent customer leads without external landing pages.';

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
    .step{
      box-shadow:none;
  }
  .step-number{
      display:none;
  }
  .step:hover{
      box-shadow:none;
      transform:none;
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


    @media (max-width: 768px) {
  .whatsapp-enquiryyy {
    display: block;
    margin: 15px auto 0!important; /* top auto bottom */
    text-align: center;
  }
 
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
          WhatsApp Forms        </li>
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
        <h1 class="hero-title">Capture Leads and Streamline Customer Interactions Using WhatsApp Forms</h1>
        <p class="hero-text">Use interactive forms and automated flows to gather client feedback, information, and orders directly on WhatsApp. </p>
        <a id="whatsapp-enquiry"
          href="<?php echo $bp; ?>#contact-section"
          target="_blank" rel="noopener noreferrer" class="btn text-white cta-button m-0">
          Enquiry Now
        </a>
      </div>
      <!-- Image Content with background -->
      <div class="col-lg-6">
        <div class="api-image-box " style="padding: 20px; border-radius: 10px;">
          <img width="100%" src="/assets/images/hellobots/whatsapp-forms/WhatsApp-Form.png" loading="lazy"
            alt="WhatsApp Forms">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="what-is-api" style="padding: 60px 0px; background-color: #f9f9f9;;">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-4 whatsapp-heading">
          What is WhatsApp Form
        </h2>
      </div>
      <div class="col-12">
        <p class="text-center">
            WhatsApp form is a digital form designed to collect information from customers directly within the chat interface. It’s a key feature of the <a href="https://HelloBots.com/whatsapp-business-api/" target="_blank" rel="noopener noreferrer">official WhatsApp API</a>, used for various purposes such as collecting feedback, generating quality leads, scheduling appointments, and registering for events.
         </p>
      </div>
    </div>
  </div>
</section>
<section class="trust-section py-5" style="background:#fff!important">
  <div class="container">
    <h2 class="text-center mb-4">Why WhatsApp Forms</h2>
    <div class="row align-items-center">
      <!-- Left Text Section -->
      <div class="col-lg-6">
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3>Higher completion rates:</h3>
            <p>Users find WhatsApp forms quick and easy to fill out as it open directly in WhatsApp, leading to more completions.</p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3>Enhanced user experience</h3>
            <p>Improve user experience and make the process smooth and convenient. Users do not need to switch between apps or open a browser.
            </p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3></span>Instant follow-up</h3>
            <p>When a form is submitted, automated replies or messages can be sent quickly, improving conversion rates.</p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3></span>Real-time CRM integration</h3>
            <p>Replies are automatically synced with CRM for immediate tagging, lead monitoring, and workflow automation.</p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3>Streamlined processes</h3>
            <p>Manage appointments, product inquiries, or quote requests seamlessly without repeated questions or manual steps.</p>
          </div>
        </div>
        
      </div>
      <!-- Right Image Section -->
      <div class="col-lg-6 text-center mt-4 mt-lg-0">
        <img src="/assets/images/hellobots/whatsapp-forms/Why-WhatsApp-Form.png"
          alt="Why WhatsApp Forms" class="img-fluid" />
      </div>
    </div>
  </div>
</section>


<section class="whatsapp-usecase py-5" style="background:#f4f7fd;">
  <div class="container">
    <h2 class="whatsapp-heading mb-5">Common Use Cases of WhatsApp Forms

    </h2>
    <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="step">
          <div class="step-number">#1</div>
          <div class="step-text mb-3">
            <h3>Lead Generation</h3>
                    <p>
                        Collect customer details and interests for new sales opportunities.
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
          <img src="/assets/images/hellobots/whatsapp-forms/Lead-Generations.png"
            alt="Lead Generation" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
    <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-1">
        <div class="step">
          <div class="step-number">#2</div>
          <div class="step-text mb-3">
            <h3>Appointment Booking</h3>
            <p> Let users book appointments for services like doctor visits, salons, or car maintenance directly within the WhatsApp chat.
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
      <div class="col-lg-6 order-2 order-lg-2 text-center">
        <div class="api-image-box mt-3">
          <img src="/assets/images/hellobots/whatsapp-forms/Appointment-Booking.png"
            alt="Appointment Booking" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
    <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="step">
          <div class="step-number mb-3">#3</div>
          <div class="step-text">
            <h3>Feedback and Surveys</h3>
            <p>Get user feedback on products in an organized format that is quick and easy for customers to respond to.
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
          <img src="/assets/images/hellobots/whatsapp-forms/Feedback-and-Surveys.png"
            alt="Feedback and Surveys" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
    
     <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-1">
        <div class="step">
          <div class="step-number mb-3">#4</div>
          <div class="step-text">
            <h3>Requests for Quotes(RFQs)</h3>
            <p>Improve the method of collecting important information for high-value quotes, mainly in B2B or high-ticket sectors.
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
      <div class="col-lg-6 order-2 order-lg-2 text-center">
        <div class="api-image-box mt-3">
          <img src="/assets/images/hellobots/whatsapp-forms/Requests-for-Quotes.png"
            alt="Requests for Quotes" class="api-image img-fluid rounded">
        </div>
      </div>
    </div>
      <div class="usecase-row row align-items-center mb-5">
      <!-- Text -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="step">
          <div class="step-number mb-3">#5</div>
          <div class="step-text">
            <h3>Product recommendations</h3>
            <p>Lead users via a series of queries to prefer the right product to align with their needs.
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
          <img src="/assets/images/hellobots/whatsapp-forms/Product-Recommendation.png"
            alt="Product Recommendations" class="api-image img-fluid rounded">
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
            <div class="custom-faq-accordion" aria-label="Frequently Asked Questions"><h2>Frequently Asked Questions</h2><div class="faq-item"><button class="faq-question open" type="button" aria-expanded="true" aria-controls="faq-answer-0"><span class="faq-title"><h3>Do I need any coding skills to create WhatsApp Forms?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-0" class="faq-answer open" role="region" aria-hidden="false" style="max-height:none;">No coding skills are required to create WhatsApp forms with HelloBots’s user friendly interface.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-1"><span class="faq-title"><h3>Can multiple WhatsApp Forms be run simultaneously?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-1" class="faq-answer" role="region" aria-hidden="true">Of course, you’re allowed to run different types of WhatsApp forms like customer service, appointment booking, or product queries.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-2"><span class="faq-title"><h3>Can I customize my WhatsApp Form?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-2" class="faq-answer" role="region" aria-hidden="true">Yes. You can customize WhatsApp forms like add your own queries, branding, and automation - hence it feels aligned with your business.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-3"><span class="faq-title"><h3>Are WhatsApp Forms secure?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-3" class="faq-answer" role="region" aria-hidden="true">Absolutely. WhatsApp forms are end-to-end encrypted, keep customers’ details confidential, and messages safe.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-4"><span class="faq-title"><h3>What types of businesses can use WhatsApp Forms?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-4" class="faq-answer" role="region" aria-hidden="true">Every business, whether eCommerce, education, or healthcare, can leverage WhatsApp forms to generate leads, feedback, or customer service.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-5"><span class="faq-title"><h3>Can WhatsApp Forms be integrated with CRM tools?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-5" class="faq-answer" role="region" aria-hidden="true">Yes. Many WhatsApp form solutions (like HelloBots) offer easy CRM integration to handle leads and automate follow-ups.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-6"><span class="faq-title"><h3>What are the rules for the WhatsApp Business catalog?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-6" class="faq-answer" role="region" aria-hidden="true">Every item or service in the business WhatsApp catalog needs to have a unique title, at least one photo displaying the item, and the origin country for the product.</div></div></div><script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Do I need any coding skills to create WhatsApp Forms?","acceptedAnswer":{"@type":"Answer","text":"No coding skills are required to create WhatsApp forms with HelloBots’s user friendly interface."}},{"@type":"Question","name":"Can multiple WhatsApp Forms be run simultaneously?","acceptedAnswer":{"@type":"Answer","text":"Of course, you’re allowed to run different types of WhatsApp forms like customer service, appointment booking, or product queries."}},{"@type":"Question","name":"Can I customize my WhatsApp Form?","acceptedAnswer":{"@type":"Answer","text":"Yes. You can customize WhatsApp forms like add your own queries, branding, and automation - hence it feels aligned with your business."}},{"@type":"Question","name":"Are WhatsApp Forms secure?","acceptedAnswer":{"@type":"Answer","text":"Absolutely. WhatsApp forms are end-to-end encrypted, keep customers’ details confidential, and messages safe."}},{"@type":"Question","name":"What types of businesses can use WhatsApp Forms?","acceptedAnswer":{"@type":"Answer","text":"Every business, whether eCommerce, education, or healthcare, can leverage WhatsApp forms to generate leads, feedback, or customer service."}},{"@type":"Question","name":"Can WhatsApp Forms be integrated with CRM tools?","acceptedAnswer":{"@type":"Answer","text":"Yes. Many WhatsApp form solutions (like HelloBots) offer easy CRM integration to handle leads and automate follow-ups."}},{"@type":"Question","name":"What are the rules for the WhatsApp Business catalog?","acceptedAnswer":{"@type":"Answer","text":"Every item or service in the business WhatsApp catalog needs to have a unique title, at least one photo displaying the item, and the origin country for the product."}}]}</script>
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
