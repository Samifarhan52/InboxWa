<?php
$basePath = '../../';
$pageTitle = 'Banking Messaging & BFSI Solutions | InboxWa';
$pageDescription = 'Secure Banking Messaging Solutions by InboxWa. We provide WhatsApp API and Bulk SMS for OTPs, transaction alerts, KYC verification, and insurance updates. Get a demo!';
$reqPath = parse_url($_SERVER['REQUEST_URI'] ?? '/business-leads/finance-insurance/', PHP_URL_PATH);
$canonicalUrl = 'https://inboxwa.com' . ($reqPath ?: '/business-leads/finance-insurance/');
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/bfsi.css?v=2">

<div class="bfsi-page">
  <div class="container">
    <!-- Top Breadcrumbs and Status Badge -->
    <div class="bfsi-top-bar">
      <nav class="bfsi-crumb-nav" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="bfsi-crumb-sep">/</span>
        <a href="/business-leads/">Business Leads</a>
        <span class="bfsi-crumb-sep">/</span>
        <span>Finance & Insurance (BFSI)</span>
      </nav>
      <div class="bfsi-partner-badge">
        <span class="bfsi-badge-dot"></span>
        Meta Official Tech Partner · BFSI Messaging Engine
      </div>
    </div>
  </div>

  <!-- =========================================================================
       1. HERO SECTION (Transform Banking with Cutting-Edge Solutions)
       ========================================================================= -->
  <section class="bfsi-hero">
    <div class="container">
      <div class="bfsi-hero-grid">
        <div class="bfsi-hero-content">
          <span class="bfsi-kicker">TECHNOLOGY SOLUTION</span>
          <h1>Transform Banking with <br><span class="highlight-text">Cutting-Edge Solutions</span></h1>
          <p class="bfsi-hero-lead">At InboxWa, we deliver tailored Digital Transformation Solutions for banking and finance, enhancing efficiency, streamlining customer experiences, and ensuring secure, compliant operations with advanced personalization.</p>
          
          <div class="bfsi-ctas">
            <button type="button" class="bfsi-btn-primary" onclick="openBfsiModal('Try it for free')">
              Try it for free
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
            <button type="button" class="bfsi-btn-outline" onclick="openBfsiModal('Schedule Banking Demo')">
              Explore Now
            </button>
            <a href="https://wa.me/918050854445?text=Hi%20InboxWa%2C%20I%20want%20to%20know%20more%20about%20WhatsApp%20Banking%20and%20BFSI%20messaging%20solutions" target="_blank" rel="noopener" class="bfsi-btn-wa">
              <svg viewBox="0 0 24 24" width="17" height="17" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
              Chat on WhatsApp
            </a>
          </div>

          <div class="bfsi-hero-trust-strip">
            <div class="bfsi-trust-item">
              <svg class="bfsi-green-tick" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>100% RBI & PCI DSS Compliant</span>
            </div>
            <div class="bfsi-trust-item">
              <svg class="bfsi-green-tick" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>256-Bit End-to-End Encryption</span>
            </div>
            <div class="bfsi-trust-item">
              <svg class="bfsi-green-tick" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>99.99% Guaranteed SLA</span>
            </div>
          </div>
        </div>

        <div class="bfsi-hero-visual">
          <div class="bfsi-hero-img-wrap">
            <img src="/assets/images/bfsi/bfsi-hero-branded.png" alt="InboxWa BFSI Banking Solutions Hero Graphic" width="1024" height="842" loading="eager">
          </div>
          <div class="bfsi-hero-floating-badge">
            <div class="bfsi-floating-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <div class="bfsi-floating-text">
              <strong>InboxWa Banking Engine</strong>
              <span>Sub-3s Real-Time Financial Alerts</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       2. SOCIAL PROOF / LOGO MARQUEE
       ========================================================================= -->
  <section class="bfsi-marquee-section">
    <div class="container">
      <h2 class="bfsi-marquee-title">Trusted by the world’s most ambitious teams.</h2>
      <p class="bfsi-marquee-sub">Powering automated banking conversations, OTP verifications, and mission-critical financial alerts.</p>
      
      <div class="bfsi-marquee-wrapper">
        <div class="bfsi-marquee-track">
          <!-- First Set -->
          <div class="bfsi-logo-card"><img src="/assets/images/bfsi/logos/partner-1.webp" alt="Partner Bank 1" loading="lazy"></div>
          <div class="bfsi-logo-card"><img src="/assets/images/bfsi/logos/partner-2.webp" alt="SVC Co-operative Bank" loading="lazy"></div>
          <div class="bfsi-logo-card"><img src="/assets/images/bfsi/logos/partner-3.webp" alt="Brand Identity Bank" loading="lazy"></div>
          <div class="bfsi-logo-card"><img src="/assets/images/bfsi/logos/partner-4.png" alt="PMC Bank" loading="lazy"></div>
          <div class="bfsi-logo-card"><img src="/assets/images/bfsi/logos/partner-5.webp" alt="Partner Bank 5" loading="lazy"></div>

          <!-- Duplicate Set for Seamless Infinite Loop -->
          <div class="bfsi-logo-card"><img src="/assets/images/bfsi/logos/partner-1.webp" alt="Partner Bank 1" loading="lazy"></div>
          <div class="bfsi-logo-card"><img src="/assets/images/bfsi/logos/partner-2.webp" alt="SVC Co-operative Bank" loading="lazy"></div>
          <div class="bfsi-logo-card"><img src="/assets/images/bfsi/logos/partner-3.webp" alt="Brand Identity Bank" loading="lazy"></div>
          <div class="bfsi-logo-card"><img src="/assets/images/bfsi/logos/partner-4.png" alt="PMC Bank" loading="lazy"></div>
          <div class="bfsi-logo-card"><img src="/assets/images/bfsi/logos/partner-5.webp" alt="Partner Bank 5" loading="lazy"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       3. KEY FEATURES (6 Alternating Banking & Financial Use Cases)
       ========================================================================= -->
  <section class="bfsi-features-section" id="features">
    <div class="container">
      <div class="bfsi-section-header">
        <span class="bfsi-kicker">KEY FEATURES</span>
        <h2>Conversational Banking &amp; Financial Services Engineered for Scale</h2>
        <p>Empower your bank or financial institution with automated 24/7 client communication, ironclad OTP security, and instant digital self-service on WhatsApp.</p>
      </div>

      <!-- Feature 1: Customer Support and Query Resolution -->
      <div class="bfsi-feature-row">
        <div class="bfsi-feature-visual">
          <img src="/assets/images/bfsi/feature-1-branded.png" alt="InboxWa Customer Support and Query Resolution" width="1024" height="842" loading="lazy">
        </div>
        <div class="bfsi-feature-content">
          <h3>Customer Support and Query Resolution</h3>
          <ul class="bfsi-feature-points">
            <li class="bfsi-feature-point">
              <span class="bfsi-point-number">1</span>
              <span>Instant customer support for queries about account balances, transactions, loans, credit cards, and more.</span>
            </li>
            <li class="bfsi-feature-point">
              <span class="bfsi-point-number">2</span>
              <span>Chatbots manage routine queries, with complex issues escalated to human agents for efficient resolution.</span>
            </li>
          </ul>
          <div class="bfsi-feature-stat">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            <span>Reduces Call-Center Overhead by up to 65%</span>
          </div>
        </div>
      </div>

      <!-- Feature 2: Transaction Notifications and Alerts -->
      <div class="bfsi-feature-row reverse">
        <div class="bfsi-feature-visual">
          <img src="/assets/images/bfsi/feature-2-branded.png" alt="InboxWa Transaction Notifications and Alerts" width="1024" height="842" loading="lazy">
        </div>
        <div class="bfsi-feature-content">
          <h3>Transaction Notifications and Alerts</h3>
          <ul class="bfsi-feature-points">
            <li class="bfsi-feature-point">
              <span class="bfsi-point-number">1</span>
              <span>Receive real-time notifications for transactions, account activities, credit/debit alerts, loan EMIs, investment maturities, and payment reminders.</span>
            </li>
            <li class="bfsi-feature-point">
              <span class="bfsi-point-number">2</span>
              <span>Ensure secure operations with OTP-based authentication for added protection.</span>
            </li>
          </ul>
          <div class="bfsi-feature-stat">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <span>Sub-3s High-Throughput Delivery Guarantee</span>
          </div>
        </div>
      </div>

      <!-- Feature 3: 2-Way Conveyance for Transactions -->
      <div class="bfsi-feature-row">
        <div class="bfsi-feature-visual">
          <img src="/assets/images/bfsi/feature-3-branded.png" alt="InboxWa 2-Way Conveyance for Transactions" width="1024" height="842" loading="lazy">
        </div>
        <div class="bfsi-feature-content">
          <h3>2-Way Conveyance for Transactions</h3>
          <ul class="bfsi-feature-points">
            <li class="bfsi-feature-point">
              <span class="bfsi-point-number">1</span>
              <span>Facilitate secure and seamless transactions via WhatsApp, such as bill payments, fund transfers, and recharge requests.</span>
            </li>
            <li class="bfsi-feature-point">
              <span class="bfsi-point-number">2</span>
              <span>Use OTP-based authentication to ensure the highest level of security for all operations.</span>
            </li>
          </ul>
          <div class="bfsi-feature-stat">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
            <span>Native WhatsApp Quick Actions &amp; Mandate Approvals</span>
          </div>
        </div>
      </div>

      <!-- Feature 4: Personalized Marketing and Promotions -->
      <div class="bfsi-feature-row reverse">
        <div class="bfsi-feature-visual">
          <img src="/assets/images/bfsi/feature-4-branded.png" alt="InboxWa Personalized Marketing and Promotions" width="1024" height="842" loading="lazy">
        </div>
        <div class="bfsi-feature-content">
          <h3>Personalized Marketing and Promotions</h3>
          <ul class="bfsi-feature-points">
            <li class="bfsi-feature-point">
              <span class="bfsi-point-number">1</span>
              <span>Tailored offers and services based on customer profiles and preferences.</span>
            </li>
            <li class="bfsi-feature-point">
              <span class="bfsi-point-number">2</span>
              <span>Promote financial products like loans, insurance, or mutual funds through engaging and targeted messaging.</span>
            </li>
          </ul>
          <div class="bfsi-feature-stat">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
            <span>3.8x Higher Conversion vs Traditional SMS &amp; Email</span>
          </div>
        </div>
      </div>

      <!-- Feature 5: Document Submission and Verification -->
      <div class="bfsi-feature-row">
        <div class="bfsi-feature-visual">
          <img src="/assets/images/bfsi/feature-5-branded.png" alt="InboxWa Document Submission and Verification" width="1024" height="842" loading="lazy">
        </div>
        <div class="bfsi-feature-content">
          <h3>Document Submission and Verification</h3>
          <ul class="bfsi-feature-points">
            <li class="bfsi-feature-point">
              <span class="bfsi-point-number">1</span>
              <span>Simplify KYC document uploads, loan applications, and more via WhatsApp.</span>
            </li>
            <li class="bfsi-feature-point">
              <span class="bfsi-point-number">2</span>
              <span>AI-powered verification accelerates processing and ensures compliance.</span>
            </li>
          </ul>
          <div class="bfsi-feature-stat">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
            <span>Automated Aadhaar/PAN OCR &amp; Instant Verification</span>
          </div>
        </div>
      </div>

      <!-- Feature 6: Interactive Educational Content -->
      <div class="bfsi-feature-row reverse">
        <div class="bfsi-feature-visual">
          <img src="/assets/images/bfsi/feature-6-branded.png" alt="InboxWa Interactive Educational Content" width="1024" height="842" loading="lazy">
        </div>
        <div class="bfsi-feature-content">
          <h3>Interactive Educational Content</h3>
          <ul class="bfsi-feature-points">
            <li class="bfsi-feature-point">
              <span class="bfsi-point-number">1</span>
              <span>Empower customers with financial knowledge through tutorials, tips, and guides.</span>
            </li>
            <li class="bfsi-feature-point">
              <span class="bfsi-point-number">2</span>
              <span>Offer engaging videos and infographics to help customers make informed financial decisions.</span>
            </li>
          </ul>
          <div class="bfsi-feature-stat">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <span>Conversational Calculators for SIP, EMI &amp; Insurance</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       4. INBOXWA CONVERSATIONAL BANKING JOURNEY FLOW
       ========================================================================= -->
  <section class="bfsi-journey-section">
    <div class="container">
      <div class="bfsi-section-header">
        <span class="bfsi-kicker">AUTOMATION JOURNEY FLOW</span>
        <h2>InboxWa End-to-End Conversational Banking Architecture</h2>
        <p>From omnichannel discovery to instant identity authentication and core banking settlement, discover how InboxWa orchestrates every touchpoint with precision.</p>
      </div>

      <div class="bfsi-journey-grid">
        <!-- Step 1 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">1</div>
          <h4>Inquiry &amp; Discovery</h4>
          <p>Customer connects via website click, QR scan, WhatsApp Ads, or missed-call alert. Session initialized within 200 milliseconds.</p>
          <span class="bfsi-step-tag">Step 01 · Omnichannel Ingestion</span>
        </div>

        <!-- Step 2 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">2</div>
          <h4>Secure Identity &amp; KYC</h4>
          <p>InboxWa AI verifies identity via encrypted WhatsApp OTP. User shares PAN/Aadhaar photos parsed in real-time by computer vision.</p>
          <span class="bfsi-step-tag">Step 02 · 100% Encrypted &amp; Compliant</span>
        </div>

        <!-- Step 3 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">3</div>
          <h4>Core Banking API Sync</h4>
          <p>Live bi-directional webhooks query Finacle, TCS BaNCS, Salesforce CRM, or loan engines to retrieve statements and balances.</p>
          <span class="bfsi-step-tag">Step 03 · Enterprise Webhooks</span>
        </div>

        <!-- Step 4 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">4</div>
          <h4>Instant Fulfillment</h4>
          <p>Customer completes payment, receives PDF e-statement, sets up auto-debit mandates, or connects live with their relationship manager.</p>
          <span class="bfsi-step-tag">Step 04 · 24/7 Servicing &amp; Escalation</span>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       5. WHY CHOOSE US (6 Tailored Solutions Cards)
       ========================================================================= -->
  <section class="bfsi-why-section">
    <div class="container">
      <div class="bfsi-section-header">
        <span class="bfsi-kicker">WHY CHOOSE US?</span>
        <h2>Tailored Solutions for Your Business Needs</h2>
        <p>We offer industry-specific solutions focused on security, compliance, and customer satisfaction, driving your business’s digital transformation and operational efficiency.</p>
      </div>

      <div class="bfsi-why-grid">
        <!-- Card 1 -->
        <div class="bfsi-why-card">
          <div class="bfsi-why-icon">
            <img src="/assets/images/bfsi/icons/icon-1.webp" alt="Industry-Specific Expertise" loading="lazy">
          </div>
          <h3>Industry-Specific <br>Expertise</h3>
          <p>We understand the banking and finance sector's unique compliance, security, and customer engagement requirements.</p>
        </div>

        <!-- Card 2 -->
        <div class="bfsi-why-card">
          <div class="bfsi-why-icon">
            <img src="/assets/images/bfsi/icons/icon-2.webp" alt="Seamless Integration across channels" loading="lazy">
          </div>
          <h3>Seamless Integration <br>across channels</h3>
          <p>Our unified platform supports SMS, email, WhatsApp, voice, and in-app messaging, delivering consistent customer experiences in real-time.</p>
        </div>

        <!-- Card 3 -->
        <div class="bfsi-why-card">
          <div class="bfsi-why-icon">
            <img src="/assets/images/bfsi/icons/icon-3.webp" alt="Advanced Security Measures" loading="lazy">
          </div>
          <h3>Advanced Security <br>Measures</h3>
          <p>Adhering to top-tier security protocols like GDPR, CAN-SPAM, and PCI DSS, we prioritize data encryption and regulatory compliance.</p>
        </div>

        <!-- Card 4 -->
        <div class="bfsi-why-card">
          <div class="bfsi-why-icon">
            <img src="/assets/images/bfsi/icons/icon-4.webp" alt="AI-Driven Personalization" loading="lazy">
          </div>
          <h3>AI-Driven <br>Personalization</h3>
          <p>Our AI solutions enhance customer interactions with tailored messaging, boosting engagement and satisfaction.</p>
        </div>

        <!-- Card 5 -->
        <div class="bfsi-why-card">
          <div class="bfsi-why-icon">
            <img src="/assets/images/bfsi/icons/icon-5.webp" alt="Scalable and Future-Ready" loading="lazy">
          </div>
          <h3>Scalable and Future-<br>Ready</h3>
          <p>Whether you’re a large bank or financial institution, our platform scales with your business, adapting to evolving customer needs.</p>
        </div>

        <!-- Card 6 -->
        <div class="bfsi-why-card">
          <div class="bfsi-why-icon">
            <img src="/assets/images/bfsi/icons/icon-6.webp" alt="24/7 Support and Reliability" loading="lazy">
          </div>
          <h3>24/7 Support and <br>Reliability</h3>
          <p>We ensure uninterrupted service, offering robust support so your team can deliver exceptional customer service anytime.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       6. FAQS ACCORDION
       ========================================================================= -->
  <section class="bfsi-faq-section">
    <div class="container">
      <div class="bfsi-section-header">
        <span class="bfsi-kicker">FAQS</span>
        <h2>Got Questions? We’ve Got Answers!</h2>
        <p>Find straightforward answers to common questions about InboxWa’s BFSI messaging solutions, security certifications, and setup process.</p>
      </div>

      <div class="bfsi-faq-list">
        <!-- FAQ 1 -->
        <div class="bfsi-faq-item active">
          <div class="bfsi-faq-header" onclick="toggleBfsiFaq(this)">
            <span>How do your solutions improve transaction security?</span>
            <span class="bfsi-faq-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </div>
          <div class="bfsi-faq-body">
            Our platform integrates secure communication solutions such as OTP verification and end-to-end encryption to ensure all financial transactions are safe.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="bfsi-faq-item">
          <div class="bfsi-faq-header" onclick="toggleBfsiFaq(this)">
            <span>Can customers submit documents via WhatsApp?</span>
            <span class="bfsi-faq-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </div>
          <div class="bfsi-faq-body">
            Yes, customers can securely upload KYC documents, loan applications, and other necessary paperwork via WhatsApp, and our AI system verifies the documents for compliance.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="bfsi-faq-item">
          <div class="bfsi-faq-header" onclick="toggleBfsiFaq(this)">
            <span>How do your solutions help in digital transformation?</span>
            <span class="bfsi-faq-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </div>
          <div class="bfsi-faq-body">
            We provide solutions that enhance customer experiences, streamline operations, and improve service delivery, helping financial institutions achieve digital transformation.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="bfsi-faq-item">
          <div class="bfsi-faq-header" onclick="toggleBfsiFaq(this)">
            <span>Can I track transaction notifications in real-time?</span>
            <span class="bfsi-faq-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </div>
          <div class="bfsi-faq-body">
            Yes, our solution sends real-time notifications about transactions, credit/debit activities, and important account events, ensuring customers are always informed.
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="bfsi-faq-item">
          <div class="bfsi-faq-header" onclick="toggleBfsiFaq(this)">
            <span>What kind of marketing solutions do you offer?</span>
            <span class="bfsi-faq-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </div>
          <div class="bfsi-faq-body">
            We offer personalized marketing tools that help banks promote financial products, such as loans, credit cards, and insurance, based on customer preferences.
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="bfsi-faq-item">
          <div class="bfsi-faq-header" onclick="toggleBfsiFaq(this)">
            <span>Are your solutions scalable for large institutions?</span>
            <span class="bfsi-faq-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </div>
          <div class="bfsi-faq-body">
            Absolutely! Our solutions are designed to scale with your organization, providing flexibility to meet the demands of growing financial institutions.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       7. FINAL CTA BANNER
       ========================================================================= -->
  <section class="bfsi-cta-section">
    <div class="container">
      <div class="bfsi-cta-card">
        <div class="bfsi-cta-content">
          <h2>Ready to Revolutionize Your<br> Banking Services?</h2>
          <p>Experience the power of digital transformation and secure communication solutions. Let’s optimize your customer service, improve operational efficiency, and drive growth.</p>
          <div class="bfsi-cta-actions">
            <button type="button" class="bfsi-btn-primary" onclick="openBfsiModal('Ready to Revolutionize')">
              Get Started Now!
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
            <a href="https://wa.me/918050854445?text=Hi%20InboxWa%2C%20I%20am%20ready%20to%20revolutionize%20our%20banking%20services" target="_blank" rel="noopener" class="bfsi-btn-wa">
              <svg viewBox="0 0 24 24" width="17" height="17" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
              Chat on WhatsApp
            </a>
          </div>
        </div>

        <div class="bfsi-cta-visual">
          <div class="bfsi-cta-badge-box">
            <div class="bfsi-cta-badge-icon">🏦</div>
            <strong>Enterprise BFSI Ready</strong>
            <p>Deploy with high-availability infrastructure, automated failover, and dedicated compliance support.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- =========================================================================
     8. INTERACTIVE CONSULTATION / TRIAL MODAL
     ========================================================================= -->
<div class="bfsi-modal" id="bfsiModal" onclick="if(event.target === this) closeBfsiModal()">
  <div class="bfsi-modal-dialog">
    <div class="bfsi-modal-header">
      <button type="button" class="bfsi-modal-close" onclick="closeBfsiModal()">&times;</button>
      <h3 id="bfsiModalTitle">Schedule Banking Solutions Demo</h3>
      <p>Talk with an InboxWa BFSI Enterprise Solution Architect today.</p>
    </div>
    <div class="bfsi-modal-body">
      <form id="bfsiDemoForm" onsubmit="handleBfsiSubmit(event)">
        <input type="hidden" name="source" value="BFSI Finance & Insurance Page">
        <input type="hidden" name="interest" id="bfsiInterestInput" value="BFSI Banking Solutions Demo">
        
        <div class="bfsi-form-group">
          <label for="bfsiName">Full Name *</label>
          <input type="text" id="bfsiName" name="name" class="bfsi-form-control" placeholder="e.g. Ramesh Sharma" required>
        </div>

        <div class="bfsi-form-group">
          <label for="bfsiEmail">Work Email *</label>
          <input type="email" id="bfsiEmail" name="email" class="bfsi-form-control" placeholder="ramesh@bankorinsurance.com" required>
        </div>

        <div class="bfsi-form-group">
          <label for="bfsiPhone">Mobile Number (WhatsApp) *</label>
          <input type="tel" id="bfsiPhone" name="phone" class="bfsi-form-control" placeholder="+91 98765 43210" required>
        </div>

        <div class="bfsi-form-group">
          <label for="bfsiCompany">Bank / Institution Name</label>
          <input type="text" id="bfsiCompany" name="company" class="bfsi-form-control" placeholder="e.g. Apex Co-operative Bank">
        </div>

        <button type="submit" class="bfsi-btn-primary" style="width:100%;justify-content:center;margin-top:0.5rem;" id="bfsiSubmitBtn">
          Confirm &amp; Request Demo
        </button>
      </form>
    </div>
  </div>
</div>

<script>
// FAQ Accordion Handler
function toggleBfsiFaq(header) {
  const item = header.parentElement;
  const wasActive = item.classList.contains('active');
  
  // Optional: close siblings
  document.querySelectorAll('.bfsi-faq-item').forEach(el => {
    el.classList.remove('active');
  });
  
  if (!wasActive) {
    item.classList.add('active');
  }
}

// Modal Handlers
function openBfsiModal(purpose) {
  const modal = document.getElementById('bfsiModal');
  const title = document.getElementById('bfsiModalTitle');
  const interest = document.getElementById('bfsiInterestInput');
  
  if (purpose) {
    title.textContent = purpose;
    interest.value = purpose + ' - BFSI Page';
  }
  
  modal.classList.add('show');
  document.body.style.overflow = 'hidden';
}

function closeBfsiModal() {
  const modal = document.getElementById('bfsiModal');
  modal.classList.remove('show');
  document.body.style.overflow = '';
}

// Demo Form Submission
function handleBfsiSubmit(e) {
  e.preventDefault();
  const btn = document.getElementById('bfsiSubmitBtn');
  const originalText = btn.innerHTML;
  btn.innerHTML = 'Submitting...';
  btn.disabled = true;

  const form = e.target;
  const formData = new FormData(form);

  fetch('/api/lead.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.json().catch(() => ({ success: true })))
  .then(data => {
    btn.innerHTML = '✓ Request Received!';
    btn.style.background = '#00d26a';
    setTimeout(() => {
      closeBfsiModal();
      btn.innerHTML = originalText;
      btn.disabled = false;
      btn.style.background = '';
      form.reset();
      alert('Thank you! An InboxWa BFSI Specialist will contact you within 15 minutes.');
    }, 1200);
  })
  .catch(err => {
    btn.innerHTML = '✓ Request Received!';
    btn.style.background = '#00d26a';
    setTimeout(() => {
      closeBfsiModal();
      btn.innerHTML = originalText;
      btn.disabled = false;
      btn.style.background = '';
      form.reset();
      alert('Thank you! An InboxWa BFSI Specialist will contact you shortly.');
    }, 1200);
  });
}
</script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
