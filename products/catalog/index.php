<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'WhatsApp Product Catalog & Storefront | HelloBotz's;
$pageDescription = 'Showcase collections, display product catalogs, and accept direct orders inside WhatsApp with automated checkout and payment.';
$canonicalUrl = 'https://hellobotz.com/products/catalog/';
$ogImage = 'https://hellobotz.com/assets/images/hellobots/whatsapp-catalog/Whatsapp-Catalog.png';
$ogTitle = 'WhatsApp Product Catalog & Storefront | HelloBotz's;
$ogDescription = 'Showcase collections, display product catalogs, and accept direct orders inside WhatsApp with automated checkout and payment.';

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
          WhatsApp Catalog        </li>
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
        <h1 class="hero-title"> Showcase and Sell Your Products Using WhatsApp Catalog</h1>
        <p class="hero-text">Easily display your products, engage customers, and drive orders, all within WhatsApp</p>
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
      <!-- Image Content with background -->
      <div class="col-lg-6">
        <div class="api-image-box " style="padding: 20px; border-radius: 10px;">
          <img width="100%" src="/assets/images/hellobots/whatsapp-catalog/Whatsapp-Catalog.png" loading="lazy"
            alt="WhatsApp Catalog">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="trust-section py-5" style="background:#fff!important">
  <div class="container">
    <h2 class="text-center mb-4">Why WhatsApp Catalog for Businesses</h2>
    <div class="row align-items-center">
      <!-- Left Text Section -->
      <div class="col-lg-6">
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3> Mobile Storefront</h3>
            <p>No more separate website, show your products directly on WhatsApp.</p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3>  Detailed Listings</h3>
            <p>Add multiple product images, prices, and short info for every product.
            </p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3></span> Organized Collections</h3>
            <p>Make product browsing easy by grouping similar products into categories.</p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3></span> Simple Management</h3>
            <p>Hide or show items anytime to match product stock availability.</p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3> Direct Messaging</h3>
            <p>Let customers inquire with you instantly about products or orders.</p>
          </div>
        </div>
        <div class="trust-point mb-4 d-flex align-items-start">
          <div>
            <h3> Easy Sharing</h3>
            <p>Send a product catalog or a single item through shareable or quick links.</p>
          </div>
        </div>
      </div>
      <!-- Right Image Section -->
      <div class="col-lg-6 text-center mt-4 mt-lg-0">
        <img src="/assets/images/hellobots/whatsapp-catalog/Why-WhatsApp-Catalog.png"
          alt="Why WhatsApp Catalog" class="img-fluid" />
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
.cat-journey-section {
  padding: 5rem 0;
  background: #f8fafc;
  border-top: 1px solid #e2e8f0;
  border-bottom: 1px solid #e2e8f0;
  position: relative;
}
.cat-journey-container {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 1.25rem;
  box-sizing: border-box;
  text-align: center;
}
.cat-j-kicker {
  font-size: 0.8rem;
  font-weight: 800;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #4f46e5;
  margin-bottom: 0.6rem;
}
.cat-j-title {
  font-size: clamp(1.8rem, 2.8vw, 2.4rem);
  font-weight: 800;
  color: #0f172a;
  letter-spacing: -0.025em;
  margin-bottom: 0.85rem;
  line-height: 1.25;
}
.cat-j-intro {
  font-size: 1.05rem;
  color: #475569;
  max-width: 680px;
  margin: 0 auto 2.5rem;
  line-height: 1.6;
}
.cat-j-nav {
  display: flex;
  justify-content: center;
  gap: 0.75rem;
  flex-wrap: wrap;
  margin-bottom: 2.75rem;
}
.cat-j-tab {
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
.cat-j-tab:hover {
  background: #f1f5f9;
  color: #0f172a;
  border-color: #94a3b8;
}
.cat-j-tab.active {
  background: #4f46e5;
  color: #ffffff;
  border-color: #4f46e5;
  box-shadow: 0 4px 16px rgba(79, 70, 229, 0.35);
}
.cat-j-timeline {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.25rem;
}
@media (max-width: 992px) {
  .cat-j-timeline {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 576px) {
  .cat-j-timeline {
    grid-template-columns: 1fr;
  }
}
.cat-j-card {
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
.cat-j-card:hover {
  transform: translateY(-4px);
  border-color: #818cf8;
  box-shadow: 0 12px 30px rgba(79, 70, 229, 0.12);
}
.cat-j-step-num {
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
.cat-j-card h4 {
  font-size: 1.12rem;
  font-weight: 700;
  color: #0f172a;
  margin-bottom: 0.5rem;
  min-height: 2.5rem;
  display: flex;
  align-items: center;
}
.cat-j-card p {
  font-size: 0.9rem;
  color: #475569;
  line-height: 1.55;
  margin-bottom: 1.25rem;
  flex-grow: 1;
}
.cat-j-badge {
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

<section class="cat-journey-section" id="journey-flow">
  <div class="cat-journey-container">
    <div class="cat-j-kicker">WHATSAPP COMMERCE JOURNEY</div>
    <h2 class="cat-j-title">Sell products directly inside WhatsApp in 4 steps.</h2>
    <p class="cat-j-intro">Transform your WhatsApp Business API into a storefront where shoppers browse, build carts, and pay seamlessly.</p>

    <!-- Scenario Switcher -->
    <div class="cat-j-nav">
      <button type="button" class="cat-j-tab active" onclick="catSwitchJourney('fashion', this)">👗 Fashion & Apparel</button>
        <button type="button" class="cat-j-tab" onclick="catSwitchJourney('food', this)">🍔 Restaurant & Food Menu</button>
        <button type="button" class="cat-j-tab" onclick="catSwitchJourney('b2b', this)">📦 B2B Wholesale Catalog</button>
    </div>

    <!-- 4-Stage Cards -->
    <div class="cat-j-timeline">
        <div class="cat-j-card" id="cat-step-1">
          <div class="cat-j-step-num">01</div>
          <h4 id="cat-title-1">Browse Catalog in Chat</h4>
          <p id="cat-desc-1">Shopper explores product collections, high-res images, and prices.</p>
          <span class="cat-j-badge" id="cat-badge-1">Native Catalog</span>
        </div>
        <div class="cat-j-card" id="cat-step-2">
          <div class="cat-j-step-num">02</div>
          <h4 id="cat-title-2">Add to WhatsApp Cart</h4>
          <p id="cat-desc-2">Customer selects sizes, colors, and updates cart items inside chat.</p>
          <span class="cat-j-badge" id="cat-badge-2">Multi-Item Cart</span>
        </div>
        <div class="cat-j-card" id="cat-step-3">
          <div class="cat-j-step-num">03</div>
          <h4 id="cat-title-3">In-Chat Delivery Details</h4>
          <p id="cat-desc-3">Customer shares delivery address with 1-tap WhatsApp location pin.</p>
          <span class="cat-j-badge" id="cat-badge-3">1-Tap Location</span>
        </div>
        <div class="cat-j-card" id="cat-step-4">
          <div class="cat-j-step-num">04</div>
          <h4 id="cat-title-4">UPI Checkout & Tracking</h4>
          <p id="cat-desc-4">Payment made via UPI/Cards; order receipt and tracking link sent.</p>
          <span class="cat-j-badge" id="cat-badge-4">Instant Confirmation</span>
        </div>
    </div>
  </div>
</section>

<script>
(function() {
  var journeyData = {"fashion": [{"title": "Browse Catalog in Chat", "desc": "Shopper explores product collections, high-res images, and prices.", "badge": "Native Catalog"}, {"title": "Add to WhatsApp Cart", "desc": "Customer selects sizes, colors, and updates cart items inside chat.", "badge": "Multi-Item Cart"}, {"title": "In-Chat Delivery Details", "desc": "Customer shares delivery address with 1-tap WhatsApp location pin.", "badge": "1-Tap Location"}, {"title": "UPI Checkout & Tracking", "desc": "Payment made via UPI/Cards; order receipt and tracking link sent.", "badge": "Instant Confirmation"}], "food": [{"title": "Digital Food Menu", "desc": "Customer browses categories, chef specials, and combos in chat.", "badge": "Live Digital Menu"}, {"title": "Customized Cart", "desc": "Customer adds items with instructions like extra toppings or spice level.", "badge": "Custom Instructions"}, {"title": "Table / Address Check", "desc": "Bot verifies delivery address or dine-in table number in 2 taps.", "badge": "Frictionless Order"}, {"title": "Kitchen Alert & Updates", "desc": "Order pushed to POS; customer receives live cooking and dispatch alerts.", "badge": "Live Status Updates"}], "b2b": [{"title": "Wholesale Price Tiers", "desc": "Verified business buyer browses volume-discounted SKU pricing.", "badge": "Tiered Pricing"}, {"title": "Bulk Order Assembly", "desc": "Buyer selects 100+ units, inputs GST number, and billing location.", "badge": "Bulk Order Ready"}, {"title": "Sales Lead Approval", "desc": "Account manager verifies inventory and approves custom credit terms.", "badge": "1-Click Approval"}, {"title": "Invoice & Dispatch", "desc": "Proforma invoice issued; tracking synced to logistics dispatch.", "badge": "Automated Dispatch"}]};

  window.catSwitchJourney = function(scenarioId, btn) {
    var nav = btn.closest('.cat-j-nav');
    if (nav) {
      var tabs = nav.querySelectorAll('.cat-j-tab');
      for (var t = 0; t < tabs.length; t++) {
        tabs[t].classList.remove('active');
      }
    }
    btn.classList.add('active');

    var steps = journeyData[scenarioId];
    if (!steps) return;

    for (var i = 0; i < steps.length; i++) {
      var num = i + 1;
      var titleEl = document.getElementById('cat-title-' + num);
      var descEl = document.getElementById('cat-desc-' + num);
      var badgeEl = document.getElementById('cat-badge-' + num);
      var cardEl = document.getElementById('cat-step-' + num);

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
        var c = document.getElementById('cat-step-' + j);
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
          <div class="custom-faq-accordion" aria-label="Frequently Asked Questions"><h2>Frequently Asked Questions</h2><div class="faq-item"><button class="faq-question open" type="button" aria-expanded="true" aria-controls="faq-answer-0"><span class="faq-title"><h3>Can customers order directly from the WhatsApp Catalog?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-0" class="faq-answer open" role="region" aria-hidden="false" style="max-height:none;">Yes. Users can easily explore the products, add products to the cart, and place orders in WhatsApp directly. The complete process, from browsing to completing checkout, everything done effortlessly in chat. It makes it faster and convenient for users to buy.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-1"><span class="faq-title"><h3>Can I update my catalog regularly?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-1" class="faq-answer" role="region" aria-hidden="true">Definitely. HelloBotz lets you add, edit, or delete products and services from your WhatsApp catalog anytime, making sure listings are always updated.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-2"><span class="faq-title"><h3>Can I integrate payment options with my WhatsApp Catalog?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-2" class="faq-answer" role="region" aria-hidden="true">Yes, you can integrate multiple payment options with your WhatsApp catalog through platforms such as WhatsApp Pay or third-party payment gateways. It simplifies payment for customers directly in WhatsApp chat.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-3"><span class="faq-title"><h3>Can I sell digital products using the WhatsApp Catalog?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-3" class="faq-answer" role="region" aria-hidden="true">Of course, you’re allowed to list digital items such as eBooks, software licenses, online courses, or memberships in your WhatsApp catalog.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-4"><span class="faq-title"><h3>How many products can we add to a WhatsApp catalog?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-4" class="faq-answer" role="region" aria-hidden="true">Yes, you can add up to 500 products to a single WhatsApp catalog. Yet, companies using the API can upload an unlimited products via a data feed, as per the resources.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-5"><span class="faq-title"><h3>How long does a WhatsApp catalog review take?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-5" class="faq-answer" role="region" aria-hidden="true">The process of WhatsApp catalog review takes more than 24 hours as the review collection is used to confirm they are adhering to the WhatsApp commerce policy before it becomes available to clients.</div></div><div class="faq-item"><button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-6"><span class="faq-title"><h3>What are the rules for the WhatsApp Business catalog?</h3></span><span class="faq-arrow" aria-hidden="true"></span></button><div id="faq-answer-6" class="faq-answer" role="region" aria-hidden="true">Every item or service in the business WhatsApp catalog needs to have a unique title, at least one photo displaying the item, and the origin country for the product.</div></div></div><script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Can customers order directly from the WhatsApp Catalog?","acceptedAnswer":{"@type":"Answer","text":"Yes. Users can easily explore the products, add products to the cart, and place orders in WhatsApp directly. The complete process, from browsing to completing checkout, everything done effortlessly in chat. It makes it faster and convenient for users to buy."}},{"@type":"Question","name":"Can I update my catalog regularly?","acceptedAnswer":{"@type":"Answer","text":"Definitely. HelloBotz lets you add, edit, or delete products and services from your WhatsApp catalog anytime, making sure listings are always updated."}},{"@type":"Question","name":"Can I integrate payment options with my WhatsApp Catalog?","acceptedAnswer":{"@type":"Answer","text":"Yes, you can integrate multiple payment options with your WhatsApp catalog through platforms such as WhatsApp Pay or third-party payment gateways. It simplifies payment for customers directly in WhatsApp chat."}},{"@type":"Question","name":"Can I sell digital products using the WhatsApp Catalog?","acceptedAnswer":{"@type":"Answer","text":"Of course, you’re allowed to list digital items such as eBooks, software licenses, online courses, or memberships in your WhatsApp catalog."}},{"@type":"Question","name":"How many products can we add to a WhatsApp catalog?","acceptedAnswer":{"@type":"Answer","text":"Yes, you can add up to 500 products to a single WhatsApp catalog. Yet, companies using the API can upload an unlimited products via a data feed, as per the resources."}},{"@type":"Question","name":"How long does a WhatsApp catalog review take?","acceptedAnswer":{"@type":"Answer","text":"The process of WhatsApp catalog review takes more than 24 hours as the review collection is used to confirm they are adhering to the WhatsApp commerce policy before it becomes available to clients."}},{"@type":"Question","name":"What are the rules for the WhatsApp Business catalog?","acceptedAnswer":{"@type":"Answer","text":"Every item or service in the business WhatsApp catalog needs to have a unique title, at least one photo displaying the item, and the origin country for the product."}}]}</script>
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
    <h2 class="hb-bottom-cta-title">Ready to transform your business with WhatsApp Catalog & Storefront?</h2>
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
