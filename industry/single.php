<?php
/**
 * Unified Industry Page Controller for HelloBotz
 * High-conversion template for all 12 industries
 */
$allIndustries = require __DIR__ . '/industry_data.php';

if (!isset($currentSlug) || !isset($allIndustries[$currentSlug])) {
    header("HTTP/1.0 404 Not Found");
    echo "Industry page not found.";
    exit;
}

$ind = $allIndustries[$currentSlug];
$basePath = '../../';
$pageTitle = htmlspecialchars($ind['name']) . ' Communication Solutions | HelloBotz';
$pageDescription = htmlspecialchars($ind['meta_desc']);
$reqPath = parse_url($_SERVER['REQUEST_URI'] ?? ('/industry/' . $currentSlug . '/'), PHP_URL_PATH);
$canonicalUrl = 'https://hellobotz.com' . ($reqPath ?: ('/industry/' . $currentSlug . '/'));

include __DIR__ . '/../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/industry.css?v=4">
<?php if ($currentSlug === 'bfsi' || $currentSlug === 'healthcare' || $currentSlug === 'retail-and-ecommerce' || $currentSlug === 'travel-and-hospitality' || $currentSlug === 'education-and-social-impacts' || $currentSlug === 'communication-and-it' || $currentSlug === 'food-and-beverages' || $currentSlug === 'advertising-and-events' || $currentSlug === 'construction-and-real-estate' || $currentSlug === 'automobiles-and-transport'): ?>
<link rel="stylesheet" href="/assets/css/bfsi.css?v=auto20261022">
<?php endif; ?>

<div class="industry-page">
  <div class="container">
    <!-- Top Breadcrumbs and Status Badge -->
    <div class="industry-top-bar">
      <nav class="industry-crumb-nav" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="industry-crumb-sep">/</span>
        <a href="/solutions/">Solutions</a>
        <span class="industry-crumb-sep">/</span>
        <span><?php echo htmlspecialchars($ind['name']); ?></span>
      </nav>
      <div class="industry-partner-badge">
        <span class="industry-badge-dot"></span>
        Meta Official Tech Partner · <?php echo htmlspecialchars($ind['nav_name']); ?> Messaging
      </div>
    </div>
  </div>

  <!-- =========================================================================
       1. HERO SECTION
       ========================================================================= -->
  <section class="industry-hero">
    <div class="container">
      <div class="industry-hero-grid">
        <div class="industry-hero-content">
          <span class="industry-kicker">TECHNOLOGY SOLUTION</span>
          <h1><?php 
            $titleParts = explode('with', $ind['hero_title'], 2);
            if (count($titleParts) === 2) {
              echo htmlspecialchars(trim($titleParts[0])) . ' with <br><span class="highlight-text">' . htmlspecialchars(trim($titleParts[1])) . '</span>';
            } else {
              $words = explode(' ', $ind['hero_title']);
              $splitAt = max(1, count($words) - 3);
              $firstPart = implode(' ', array_slice($words, 0, $splitAt));
              $secondPart = implode(' ', array_slice($words, $splitAt));
              echo htmlspecialchars($firstPart) . ' <br><span class="highlight-text">' . htmlspecialchars($secondPart) . '</span>';
            }
          ?></h1>
          <p class="industry-hero-lead"><?php echo htmlspecialchars($ind['hero_lead']); ?></p>
          
          <div class="industry-ctas">
            <button type="button" class="industry-btn-primary" onclick="openIndustryModal('Try it for free - <?php echo addslashes($ind['name']); ?>')">
              Try it for free
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
            <a href="<?php echo $bp; ?>business-leads/" class="btn-download-data btn-get-verified-leads" style="padding:0.8rem 1.5rem;">
              <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
              Get Verified Leads
            </a>
            <a href="https://wa.me/918050854445?text=Hi%20HelloBotz%2C%20I%20want%20to%20know%20more%20about%20WhatsApp%20messaging%20solutions%20for%20<?php echo urlencode($ind['name']); ?>" target="_blank" rel="noopener" class="industry-btn-wa">
              <svg viewBox="0 0 24 24" width="17" height="17" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
              Chat on WhatsApp
            </a>
          </div>

          <div class="industry-hero-trust-strip">
            <div class="industry-trust-item">
              <svg class="industry-green-tick" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>100% Meta Verified Tech Partner</span>
            </div>
            <div class="industry-trust-item">
              <svg class="industry-green-tick" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>256-Bit Secure End-to-End Encryption</span>
            </div>
            <div class="industry-trust-item">
              <svg class="industry-green-tick" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>99.99% Guaranteed SLA</span>
            </div>
          </div>
        </div>

        <div class="industry-hero-visual">
          <div class="industry-hero-img-wrap">
            <img src="<?php echo htmlspecialchars($ind['hero_image']); ?>" alt="HelloBotz <?php echo htmlspecialchars($ind['name']); ?> Solutions" width="1024" height="842" loading="eager">
          </div>
          <div class="industry-hero-floating-badge">
            <div class="industry-floating-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <div class="industry-floating-text">
              <strong>HelloBotz <?php echo htmlspecialchars($ind['nav_name']); ?></strong>
              <span>Real-Time Omnichannel Automation</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php if ($currentSlug === 'bfsi'): ?>
  <!-- =========================================================================
       2.1 BFSI 5-STAGE CONVERSATIONAL BANKING LIFECYCLE TOUR
       ========================================================================= -->
  <section class="stages-native" id="banking-lifecycle-system">
    <div class="stages-wrap">
      <div class="stage-heading">
        <span class="stage-kicker">End-to-End Conversational Banking</span>
        <h2 class="stage-display-title">Orchestrate Every Stage of Banking on WhatsApp</h2>
        <p class="stage-subtitle">From instant digital KYC onboarding to real-time fraud locks, automated lending, and 1-tap UPI collections on one unified enterprise platform.</p>
      </div>

      <!-- 5 TABS -->
      <div aria-label="Banking Lifecycle Stages" class="stage-tabs" role="tablist">
        <button aria-selected="true" class="stage-tab active" data-stage="0" role="tab">Onboard &amp; KYC</button>
        <button aria-selected="false" class="stage-tab" data-stage="1" role="tab">Protect &amp; Alert</button>
        <button aria-selected="false" class="stage-tab" data-stage="2" role="tab">Engage &amp; Advise</button>
        <button aria-selected="false" class="stage-tab" data-stage="3" role="tab">Originate &amp; Disburse</button>
        <button aria-selected="false" class="stage-tab" data-stage="4" role="tab">Collect &amp; Settle</button>
      </div>

      <!-- 5 PANES -->
      <div class="stage-panes">
        <!-- STAGE 0: ONBOARD & KYC -->
        <article class="stage-pane active" data-pane="0">
          <div class="stage-copy">
            <div class="stage-demo-label">Onboard &amp; KYC</div>
            <h3>Frictionless e-KYC <br>and instant account <br>opening in minutes.</h3>
            <p>Eliminate branch visits and lengthy onboarding queues. Customers complete identity verification, upload Aadhaar/PAN documents, and open savings or demat accounts natively inside WhatsApp.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Native WhatsApp Flows for structured in-chat document collection.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>AI-powered OCR extracts PAN, Aadhaar &amp; passport data in &lt;1.5s.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Real-time CKYC and Aadhaar OTP verification via UIDAI gateways.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Video KYC scheduling with automated reminder notifications.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant virtual account generation with welcome kit and e-statement.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>100% compliant with RBI Master Directions on digital onboarding.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz WhatsApp Digital KYC and Onboarding" src="/assets/images/bfsi/stage-kyc-onboarding.png?v=bfsi20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 1: PROTECT & ALERT -->
        <article class="stage-pane" data-pane="1">
          <div class="stage-copy">
            <div class="stage-demo-label">Protect &amp; Alert</div>
            <h3>Sub-second OTPs <br>and 1-tap instant <br>card fraud lock.</h3>
            <p>Safeguard cardholders against unauthorized transactions and cyber threats. HelloBotz delivers high-priority authentication OTPs and instant fraud alerts with 1-tap interactive card controls.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>99.99% OTP delivery SLA with sub-1.2s latency via Meta Direct Route.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Proactive suspicious transaction alerts for out-of-pattern spending.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Interactive 1-tap quick buttons: &ldquo;Freeze Card Now&rdquo; &amp; &ldquo;Confirm Transaction&rdquo;.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant automated SMS fallback ensuring zero missed OTP alerts.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Direct hot-transfer to bank fraud investigation desk in one tap.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>PCI-DSS Level 1 certified architecture with end-to-end encryption.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Fraud Alerts and Sub-Second Banking OTPs" src="/assets/images/bfsi/stage-fraud-alert.png?v=bfsi20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 2: ENGAGE & ADVISE -->
        <article class="stage-pane" data-pane="2">
          <div class="stage-copy">
            <div class="stage-demo-label">Engage &amp; Advise</div>
            <h3>24/7 AI Banking Concierge <br>for balances, statements, <br>and wealth advisory.</h3>
            <p>Empower customers with self-service conversational banking. HelloBotz AI resolves balance queries, generates mini-statements, and suggests wealth investments around the clock.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Real-time balance check and last 5 transactions in under 800ms.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant password-protected PDF e-statement generation in chat.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Fixed deposit, mutual fund &amp; SIP calculators with personalized projections.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Zero-hallucination AI guardrails for regulatory and compliance queries.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Smart escalation to assigned Relationship Managers with complete chat context.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Deflects over 68% of routine inbound banking call-center volume.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz 24/7 AI Banking Concierge and Inquiries" src="/assets/images/bfsi/stage-ai-banking.png?v=bfsi20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 3: ORIGINATE & DISBURSE -->
        <article class="stage-pane" data-pane="3">
          <div class="stage-copy">
            <div class="stage-demo-label">Originate &amp; Disburse</div>
            <h3>Pre-approved loans <br>and digital credit <br>sanction in minutes.</h3>
            <p>Turn browsing borrowers into funded accounts. Guide prospective applicants through personal, home, or vehicle loan eligibility, salary verification, and instant sanction letter dispatch.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Interactive in-chat EMI calculator with dynamic loan tenure sliders.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant salary slip and 6-month bank statement document upload.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Direct API hook to credit bureaus (CIBIL, Experian, Equifax, CRIF).</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated pre-approval sanction letter delivered directly in WhatsApp.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Digital e-Mandate and NACH setup via NPCI DigiLocker link.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>4.2x higher loan application completion rate vs traditional web forms.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Automated Loan Origination and Disbursal" src="/assets/images/bfsi/stage-loan-disbursal.png?v=bfsi20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 4: COLLECT & SETTLE -->
        <article class="stage-pane" data-pane="4">
          <div class="stage-copy">
            <div class="stage-demo-label">Collect &amp; Settle</div>
            <h3>1-Tap WhatsApp UPI <br>payments and automated <br>EMI recovery.</h3>
            <p>Maximize recovery rates without annoying manual debt collection calls. HelloBotz automates polite EMI due alerts with native WhatsApp UPI checkout for instant, sub-second settlement.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Native WhatsApp Payments powered by NPCI UPI (Google Pay, PhonePe, Paytm).</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated multi-stage EMI reminder sequences prior to due dates.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Sub-second payment settlement with automated GST payment receipt.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Dynamic payment links supporting credit cards, debit cards &amp; net banking.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Real-time webhook reconciliation with Finacle, TCS BaNCS &amp; SAP ERP.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Cuts overdue debt collection turnaround times by up to 54%.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz In-Chat WhatsApp Payments and UPI Settlement" src="/assets/images/bfsi/stage-upi-collection.png?v=bfsi20261022" loading="lazy">
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       2.2 HELLOBOTZ CONVERSATIONAL BANKING ARCHITECTURE JOURNEY FLOW (4 STEPS)
       ========================================================================= -->
  <section class="bfsi-journey-section">
    <div class="container">
      <div class="stage-heading" style="margin-bottom:2.5rem;">
        <span class="stage-kicker">ARCHITECTURE FLOW</span>
        <h2 class="stage-display-title">HelloBotz End-to-End Banking Architecture</h2>
        <p class="stage-subtitle">From omnichannel customer ingestion to identity authentication, CBS synchronization, and instant fulfillment.</p>
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
          <p>HelloBotz AI verifies identity via encrypted WhatsApp OTP. User shares PAN/Aadhaar photos parsed in real-time by computer vision.</p>
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
  <?php endif; ?>

  <?php if ($currentSlug === 'healthcare'): ?>
  <!-- =========================================================================
       2.1 HEALTHCARE 5-STAGE INTERACTIVE PATIENT LIFECYCLE TOUR
       ========================================================================= -->
  <section class="stages-native" id="healthcare-lifecycle-system">
    <div class="stages-wrap">
      <div class="stage-heading">
        <span class="stage-kicker">End-to-End Patient Engagement</span>
        <h2 class="stage-display-title">Orchestrate Every Stage of Healthcare on WhatsApp</h2>
        <p class="stage-subtitle">From instant doctor appointment booking and clinical triage to diagnostic lab report delivery, pharmacy payments, and post-op care on one unified platform.</p>
      </div>

      <!-- 5 TABS -->
      <div aria-label="Healthcare Lifecycle Stages" class="stage-tabs" role="tablist">
        <button aria-selected="true" class="stage-tab active" data-stage="0" role="tab">Discover &amp; Register</button>
        <button aria-selected="false" class="stage-tab" data-stage="1" role="tab">Schedule &amp; Triage</button>
        <button aria-selected="false" class="stage-tab" data-stage="2" role="tab">Consult &amp; Diagnose</button>
        <button aria-selected="false" class="stage-tab" data-stage="3" role="tab">Deliver &amp; Remind</button>
        <button aria-selected="false" class="stage-tab" data-stage="4" role="tab">Settle &amp; Follow-Up</button>
      </div>

      <!-- 5 PANES -->
      <div class="stage-panes">
        <!-- STAGE 0: DISCOVER & REGISTER -->
        <article class="stage-pane active" data-pane="0">
          <div class="stage-copy">
            <div class="stage-demo-label">Discover &amp; Register</div>
            <h3>Frictionless digital <br>intake and patient <br>registration in minutes.</h3>
            <p>Eliminate paper clipboards and waiting room congestion. Patients complete registration, provide medical history, and upload insurance health cards directly via Native WhatsApp Flows before their hospital arrival.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Native WhatsApp Flows for structured in-chat clinical intake forms.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant extraction of government health IDs and insurance cards via OCR.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated patient unique hospital identifier (UHID) generation.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Digital consent capture and privacy disclosures compliant with HIPAA.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Direct bi-directional sync with leading HIS and EHR software platforms.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>84% digital completion rate with zero website redirects or app installs.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Healthcare Patient Intake and Registration" src="/assets/images/industry/healthcare/stage-patient-onboard.png?v=health20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 1: SCHEDULE & TRIAGE -->
        <article class="stage-pane" data-pane="1">
          <div class="stage-copy">
            <div class="stage-demo-label">Schedule &amp; Triage</div>
            <h3>Sub-second doctor booking <br>and 24/7 clinical <br>symptom triage.</h3>
            <p>Empower patients to check specialist availability and select OPD consultation slots in real-time. Automated AI symptom triage prioritizes urgent cases and guides emergency admissions immediately.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Interactive time slot selector connected to real-time doctor rosters.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Certified AI clinical symptom screener with zero-hallucination guardrails.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated 24h and 2h pre-visit reminders that cut no-shows by 44%.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>1-tap instant rescheduling, cancellations, and waitlist management.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Emergency red-flag detection with instant hot-transfer to duty doctors.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Turnaround time for slot confirmations reduced to under 1.2 seconds.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Doctor Appointment Scheduling and Clinical Triage" src="/assets/images/industry/healthcare/stage-doctor-booking.png?v=health20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 2: CONSULT & DIAGNOSE -->
        <article class="stage-pane" data-pane="2">
          <div class="stage-copy">
            <div class="stage-demo-label">Consult &amp; Diagnose</div>
            <h3>Teleconsultation access, <br>live OPD queue status, <br>and specialist routing.</h3>
            <p>Streamline virtual and physical clinical visits. Deliver encrypted video consultation links, real-time live OPD queue token trackers, and direct chat handoffs to attending medical specialists.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Encrypted 1-click video consultation links sent directly via WhatsApp.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Live OPD queue token tracking reducing patient waiting room anxiety.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Hospital department routing (Cardiology, Pediatrics, Orthopedics, Oncology).</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Pre-consultation vital recording (blood pressure, temperature, sugar levels).</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Private internal staff collaboration notes between attending doctors and nurses.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>62% reduction in patient front-desk inquiry phone calls.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz 24/7 Clinical AI Assistant and Teleconsultation" src="/assets/images/industry/healthcare/stage-clinical-ai.png?v=health20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 3: DELIVER & REMIND -->
        <article class="stage-pane" data-pane="3">
          <div class="stage-copy">
            <div class="stage-demo-label">Deliver &amp; Remind</div>
            <h3>Instant lab report dispatch <br>and automated dosage <br>reminders.</h3>
            <p>Deliver diagnostic pathology, radiology, and blood reports the moment they are certified. Keep patients on track with intelligent dosage reminder notifications and preventive wellness advice.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Password-protected PDF lab reports dispatched automatically from LIMS.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Digital doctor e-prescriptions sent with dosage guidelines and dietary tips.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated medication adherence reminders tailored to patient treatment plans.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Diagnostic test preparation instructions (e.g. fasting guidelines before blood draw).</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Proactive chronic disease management journeys (Diabetes, Hypertension).</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Eliminates 75% of administrative workload for physical report dispatch.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Diagnostic Lab Report Delivery and Medication Reminders" src="/assets/images/industry/healthcare/stage-lab-reports.png?v=health20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 4: SETTLE & FOLLOW-UP -->
        <article class="stage-pane" data-pane="4">
          <div class="stage-copy">
            <div class="stage-demo-label">Settle &amp; Follow-Up</div>
            <h3>1-Tap WhatsApp UPI <br>payments and post-op <br>recovery monitoring.</h3>
            <p>Settle consultation fees, pharmacy orders, and diagnostic test bills instantly without billing counter lines. Track patient recovery with automated post-discharge wellness check-ins.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Native WhatsApp Payments via UPI (Google Pay, PhonePe, Paytm, BHIM).</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Digital tax-ready healthcare GST invoice automatically sent to chat.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Home medicine refill ordering with live delivery dispatch updates.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated Day 3, Day 7 &amp; Day 14 post-discharge recovery check-in surveys.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant feedback and CSAT rating capture to monitor patient satisfaction.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Accelerates hospital bill settlement cycles by up to 58%.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Healthcare Billing UPI Payments and Post-Op Monitoring" src="/assets/images/industry/healthcare/stage-health-payments.png?v=health20261022" loading="lazy">
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       2.2 HELLOBOTZ HEALTHCARE ARCHITECTURE JOURNEY FLOW (4 STEPS)
       ========================================================================= -->
  <section class="bfsi-journey-section">
    <div class="container">
      <div class="stage-heading" style="margin-bottom:2.5rem;">
        <span class="stage-kicker">CLINICAL ARCHITECTURE FLOW</span>
        <h2 class="stage-display-title">HelloBotz End-to-End Healthcare Architecture</h2>
        <p class="stage-subtitle">From omnichannel patient discovery and clinical triage to EHR synchronization, report delivery, and seamless billing fulfillment.</p>
      </div>

      <div class="bfsi-journey-grid">
        <!-- Step 1 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">1</div>
          <h4>Discovery &amp; Triage</h4>
          <p>Patient connects via hospital website, QR code at OPD desk, or WhatsApp emergency helpline. AI triage classifies intent in under 200ms.</p>
          <span class="bfsi-step-tag">Step 01 · Omnichannel Ingestion</span>
        </div>

        <!-- Step 2 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">2</div>
          <h4>Identity &amp; Digital Intake</h4>
          <p>Patient confirms mobile number, uploads insurance card/government ID via WhatsApp Flows, and receives unique hospital UHID token.</p>
          <span class="bfsi-step-tag">Step 02 · 100% HIPAA &amp; NABH Compliant</span>
        </div>

        <!-- Step 3 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">3</div>
          <h4>HIS / EHR Integration</h4>
          <p>Bi-directional webhooks query hospital management software, doctor appointment rosters, and diagnostic LIMS in real-time.</p>
          <span class="bfsi-step-tag">Step 03 · Enterprise Clinical Webhooks</span>
        </div>

        <!-- Step 4 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">4</div>
          <h4>Fulfillment &amp; Care</h4>
          <p>Instant consultation booking, password-protected lab PDF delivery, 1-tap UPI fee payment, and automated post-visit checkup alerts.</p>
          <span class="bfsi-step-tag">Step 04 · 24/7 Patient Care &amp; Follow-up</span>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php if ($currentSlug === 'retail-and-ecommerce'): ?>
  <!-- =========================================================================
       2.1 RETAIL & E-COMMERCE 5-STAGE INTERACTIVE LIFECYCLE TOUR
       ========================================================================= -->
  <section class="stages-native" id="retail-lifecycle-system">
    <div class="stages-wrap">
      <div class="stage-heading">
        <span class="stage-kicker">End-to-End WhatsApp Commerce</span>
        <h2 class="stage-display-title">Orchestrate Every Stage of E-Commerce on WhatsApp</h2>
        <p class="stage-subtitle">From interactive catalog browsing and abandoned cart recovery to 1-tap UPI in-chat checkout, real-time WISMO tracking, and repeat purchase loops on one unified platform.</p>
      </div>

      <!-- 5 TABS -->
      <div aria-label="E-Commerce Lifecycle Stages" class="stage-tabs" role="tablist">
        <button aria-selected="true" class="stage-tab active" data-stage="0" role="tab">Browse &amp; Discover</button>
        <button aria-selected="false" class="stage-tab" data-stage="1" role="tab">Recover Abandoned Carts</button>
        <button aria-selected="false" class="stage-tab" data-stage="2" role="tab">1-Tap In-Chat Checkout</button>
        <button aria-selected="false" class="stage-tab" data-stage="3" role="tab">Track &amp; Deflect WISMO</button>
        <button aria-selected="false" class="stage-tab" data-stage="4" role="tab">Anti-RTO &amp; Loyalty</button>
      </div>

      <!-- 5 PANES -->
      <div class="stage-panes">
        <!-- STAGE 0: BROWSE & DISCOVER -->
        <article class="stage-pane active" data-pane="0">
          <div class="stage-copy">
            <div class="stage-demo-label">Browse &amp; Discover</div>
            <h3>Showcase rich product <br>catalogs &amp; collections <br>directly inside WhatsApp.</h3>
            <p>Eliminate high mobile drop-offs caused by slow external landing pages. HelloBotz presents multi-product catalogs with high-res imagery, real-time stock availability, and 1-tap "Add to Cart" actions right in the conversational thread.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Multi-product collection carousels and single-product hero showcase cards.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Live bi-directional catalog sync with Shopify, WooCommerce, Magento &amp; ERPs.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Contextual product search and natural language conversational recommendations.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Dynamic variant selectors for sizes, colors, pricing, and bundle discounts.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant WhatsApp cart sync directly connected to your online store checkout.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>3.8x higher catalog engagement rate compared to standard external web links.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz WhatsApp Product Catalog Browsing and In-Chat Cart" src="/assets/images/industry/retail-and-ecommerce/stage-catalog-browse.png?v=retail20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 1: RECOVER ABANDONED CARTS -->
        <article class="stage-pane" data-pane="1">
          <div class="stage-copy">
            <div class="stage-demo-label">Recover Abandoned Carts</div>
            <h3>Recover high-intent <br>shoppers with intelligent <br>multi-touch nudges.</h3>
            <p>Over 70% of e-commerce carts are abandoned at checkout. HelloBotz automatically triggers personalized WhatsApp reminders featuring the customer's exact items, product snapshots, and time-sensitive discount codes to drive instant checkout.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Automated multi-stage drip sequence (15 min, 2 hr, 24 hr) post drop-off.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>High-resolution product cards displaying exact items left in the checkout cart.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Personalized dynamic discount coupons with 1-tap coupon auto-apply links.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Pre-approved Meta utility &amp; marketing templates with 98% open rates.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Smart intent detection: answers shopper questions before checkout completion.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Recovers up to 45% of abandoned carts, unlocking immediate revenue.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Automated WhatsApp Abandoned Cart Recovery Sequences" src="/assets/images/industry/retail-and-ecommerce/stage-cart-recovery.png?v=retail20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 2: 1-TAP IN-CHAT CHECKOUT -->
        <article class="stage-pane" data-pane="2">
          <div class="stage-copy">
            <div class="stage-demo-label">1-Tap In-Chat Checkout</div>
            <h3>Frictionless native <br>WhatsApp payments &amp; <br>sub-second UPI checkout.</h3>
            <p>Complete transactions without sending customers away to third-party payment gateways. Shoppers complete payment in seconds via native UPI, Google Pay, PhonePe, Paytm, or credit/debit cards with instant confirmation.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Native WhatsApp Payments powered by NPCI UPI and Razorpay/Cashfree.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>1-tap pay with popular UPI apps (Google Pay, PhonePe, Paytm, CRED).</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Pre-filled customer shipping details and saved billing preferences.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Real-time webhook confirmation with sub-second order placement.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated GST tax invoice PDF generated and delivered immediately in chat.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>54% higher conversion rate vs traditional redirected payment flows.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz In-Chat WhatsApp Payments and UPI Checkout" src="/assets/images/industry/retail-and-ecommerce/stage-inchat-checkout.png?v=retail20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 3: TRACK & DEFLECT WISMO -->
        <article class="stage-pane" data-pane="3">
          <div class="stage-copy">
            <div class="stage-demo-label">Track &amp; Deflect WISMO</div>
            <h3>Real-time dispatch alerts <br>and autonomous 24/7 <br>order tracking.</h3>
            <p>Eliminate repetitive customer support overhead. HelloBotz automates dispatch notifications, courier AWB tracking links, and autonomous answers to "Where Is My Order?" inquiries in under 0.8 seconds.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Automated milestone alerts: Order Confirmed, Dispatched, Out for Delivery, Delivered.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Live GPS courier tracking links via Shiprocket, Delhivery, BlueDart, Bluedart.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Sub-0.8s autonomous AI responses to order status and delivery timeline inquiries.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>1-tap delivery rescheduling and alternative delivery address update.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Seamless human agent escalation with full Shopify order context attached.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Deflects up to 84% of post-purchase WISMO support tickets.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Live Order Dispatch Tracking and WISMO Deflection" src="/assets/images/industry/retail-and-ecommerce/stage-wismo-tracking.png?v=retail20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 4: ANTI-RTO & LOYALTY -->
        <article class="stage-pane" data-pane="4">
          <div class="stage-copy">
            <div class="stage-demo-label">Anti-RTO &amp; Loyalty</div>
            <h3>Anti-RTO COD verification <br>and automated repeat <br>purchase loops.</h3>
            <p>Protect operating margins by verifying Cash-on-Delivery orders before dispatch, and turn happy customers into repeat buyers with automated post-delivery NPS reviews and replenishment offers.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>1-tap interactive COD confirmation buttons: "[ Confirm Order ]" vs "[ Cancel ]".</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Incentivize instant prepaid conversion with 5-10% discount on 1-tap UPI payment.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Reduces Return to Origin (RTO) rates by up to 35% across high-risk pin codes.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Post-delivery 1-tap CSAT rating, Google review prompt, and photo feedback.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated replenishment reminders tailored to customer purchase cycles.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Lifts customer lifetime value (LTV) and boosts repeat orders by 38%.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Anti-RTO COD Verification and Post-Purchase Reviews" src="/assets/images/industry/retail-and-ecommerce/stage-loyalty-reviews.png?v=retail20261022" loading="lazy">
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       2.2 HELLOBOTZ RETAIL & E-COMMERCE ARCHITECTURE JOURNEY FLOW (4 STEPS)
       ========================================================================= -->
  <section class="bfsi-journey-section">
    <div class="container">
      <div class="stage-heading" style="margin-bottom:2.5rem;">
        <span class="stage-kicker">COMMERCE ARCHITECTURE FLOW</span>
        <h2 class="stage-display-title">HelloBotz End-to-End Retail &amp; E-Commerce Architecture</h2>
        <p class="stage-subtitle">From real-time storefront synchronization and interactive in-chat browsing to anti-RTO verification, automated courier dispatch, and retention loops.</p>
      </div>

      <div class="bfsi-journey-grid">
        <!-- Step 1 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">1</div>
          <h4>Storefront Sync &amp; Ingestion</h4>
          <p>Real-time webhooks ingest catalogs, pricing, inventory levels, and customer cart sessions from Shopify, WooCommerce, Magento, or custom ERPs.</p>
          <span class="bfsi-step-tag">Step 01 · Omnichannel Catalog Ingestion</span>
        </div>

        <!-- Step 2 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">2</div>
          <h4>Conversational Cart &amp; Checkout</h4>
          <p>Shoppers browse multi-product catalogs, select product variants, and complete purchases via native 1-tap WhatsApp UPI or cards.</p>
          <span class="bfsi-step-tag">Step 02 · Zero-Friction Conversational Commerce</span>
        </div>

        <!-- Step 3 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">3</div>
          <h4>Anti-RTO &amp; Courier Dispatch</h4>
          <p>COD orders are validated with interactive reply buttons. Real-time courier APIs (Shiprocket, Delhivery, BlueDart) generate dispatch AWBs.</p>
          <span class="bfsi-step-tag">Step 03 · Automated Dispatch &amp; Anti-RTO</span>
        </div>

        <!-- Step 4 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">4</div>
          <h4>Autonomous WISMO &amp; Loyalty</h4>
          <p>24/7 AI handles tracking inquiries in &lt;0.8s, captures post-delivery reviews, and triggers automated replenishment re-engagement campaigns.</p>
          <span class="bfsi-step-tag">Step 04 · 24/7 Post-Purchase Care &amp; Retention</span>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php if ($currentSlug === 'travel-and-hospitality'): ?>
  <!-- =========================================================================
       2.1 TRAVEL & HOSPITALITY 5-STAGE INTERACTIVE LIFECYCLE TOUR
       ========================================================================= -->
  <section class="stages-native" id="travel-lifecycle-system">
    <div class="stages-wrap">
      <div class="stage-heading">
        <span class="stage-kicker">End-to-End Guest &amp; Traveler Engagement</span>
        <h2 class="stage-display-title">Orchestrate Every Stage of Travel &amp; Hospitality on WhatsApp</h2>
        <p class="stage-subtitle">From flight search and instant suite booking to automated boarding passes, 24/7 AI concierge, 1-tap room upgrades, and post-checkout loyalty reviews on one unified platform.</p>
      </div>

      <!-- 5 TABS -->
      <div aria-label="Travel &amp; Hospitality Lifecycle Stages" class="stage-tabs" role="tablist">
        <button aria-selected="true" class="stage-tab active" data-stage="0" role="tab">Discover &amp; Reserve</button>
        <button aria-selected="false" class="stage-tab" data-stage="1" role="tab">Confirm &amp; Board</button>
        <button aria-selected="false" class="stage-tab" data-stage="2" role="tab">Pay &amp; Upgrade</button>
        <button aria-selected="false" class="stage-tab" data-stage="3" role="tab">AI Virtual Concierge</button>
        <button aria-selected="false" class="stage-tab" data-stage="4" role="tab">Reviews &amp; Loyalty</button>
      </div>

      <!-- 5 PANES -->
      <div class="stage-panes">
        <!-- STAGE 0: DISCOVER & RESERVE -->
        <article class="stage-pane active" data-pane="0">
          <div class="stage-copy">
            <div class="stage-demo-label">Discover &amp; Reserve</div>
            <h3>Interactive flight &amp; hotel <br>reservation directly <br>inside WhatsApp.</h3>
            <p>Eliminate app fatigue and booking friction. Guests explore room types, flight itineraries, villa packages, and seasonal offers with interactive list pickers and native booking flows.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Interactive 10-item menu pickers for destinations, suites, and tour packages.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Live bi-directional sync with Amadeus, Sabre, Opera PMS &amp; Cloudbeds.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant availability check and dynamic seasonal tariff quotes.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Native WhatsApp Flows for passport capture and guest preferences.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Pre-booking FAQs answered autonomously by conversational AI in &lt;0.8s.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>3.4x higher booking completion rate vs traditional OTA mobile redirects.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz WhatsApp Travel Reservation and Direct Hotel Booking" src="/assets/images/industry/travel-and-hospitality/stage-guest-booking.png?v=travel20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 1: CONFIRM & BOARD -->
        <article class="stage-pane" data-pane="1">
          <div class="stage-copy">
            <div class="stage-demo-label">Confirm &amp; Board</div>
            <h3>Automated boarding passes, <br>digital room keys &amp; <br>instant itineraries.</h3>
            <p>Deliver mission-critical travel documents straight to where travelers are already looking. Automated PDF e-tickets, QR boarding passes, and web check-in reminders with 98% open rates.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Instant PDF boarding pass, PNR confirmation, and booking voucher delivery.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>QR code check-in passes compatible with airport scanners and hotel kiosks.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated 24h &amp; 2h pre-arrival reminders with interactive web check-in links.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Real-time gate changes, flight delay alerts, and baggage carousel updates.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Pre-approved Meta utility templates with zero account ban risk.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Reduces front-desk and check-in lobby congestion by up to 52%.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Automated Boarding Passes and Flight Schedule Updates" src="/assets/images/industry/travel-and-hospitality/stage-boarding-pass.png?v=travel20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 2: PAY & UPGRADE -->
        <article class="stage-pane" data-pane="2">
          <div class="stage-copy">
            <div class="stage-demo-label">Pay &amp; Upgrade</div>
            <h3>1-Tap WhatsApp UPI <br>payments and instant <br>room upgrades.</h3>
            <p>Maximize ancillary revenue without tedious payment gateway links. Guests pay deposit balances, airport transfers, gourmet meal plans, and spa appointments with 1-tap in-chat payments.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Native WhatsApp Payments via UPI (Google Pay, PhonePe, Paytm, BHIM).</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Global multi-currency support with Stripe, Razorpay &amp; international cards.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated personalized room upgrade offers (e.g., Ocean Suite for +$45/night).</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant GST tax invoice and digital payment receipts dispatched to chat.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Real-time webhook reconciliation with hotel ERP and PMS accounting.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Increases ancillary guest spend by 36% during the pre-arrival window.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz 1-Tap WhatsApp In-Chat Payments and Room Upgrades" src="/assets/images/industry/travel-and-hospitality/stage-guest-payments.png?v=travel20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 3: AI VIRTUAL CONCIERGE -->
        <article class="stage-pane" data-pane="3">
          <div class="stage-copy">
            <div class="stage-demo-label">AI Virtual Concierge</div>
            <h3>24/7 in-stay guest <br>service and autonomous <br>concierge requests.</h3>
            <p>Turn every smartphone into a 5-star digital concierge. Guests order room service, request fresh towels, book airport cabs, or ask for local attraction guides anytime, anywhere.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Natural language room service ordering with dietary preference customization.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Housekeeping and amenity requests auto-routed to on-duty staff PMS tickets.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant local sightseeing, restaurant recommendations &amp; weather forecasts.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Interactive 1-tap reply buttons: "[ Fresh Towels ]", "[ Late Checkout ]", "[ Airport Cab ]".</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Seamless human manager handover with complete chat history and VIP flags.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Resolves 82% of in-stay guest service requests with sub-1-second response times.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz 24/7 AI Virtual Concierge and Guest Room Service" src="/assets/images/industry/travel-and-hospitality/stage-ai-concierge.png?v=travel20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 4: REVIEWS & LOYALTY -->
        <article class="stage-pane" data-pane="4">
          <div class="stage-copy">
            <div class="stage-demo-label">Reviews &amp; Loyalty</div>
            <h3>Automated post-stay <br>NPS surveys and loyalty <br>re-booking loops.</h3>
            <p>Protect online reputation on TripAdvisor &amp; Google while driving direct repeat bookings. Automated post-checkout check-ins capture glowing guest reviews and offer exclusive member re-booking privileges.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>1-tap WhatsApp CSAT &amp; NPS star ratings captured 2 hours post-checkout.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Direct deep-link routing for 5-star guests to Google Reviews &amp; TripAdvisor.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Private issue alerting for dissatisfied guests to recover sentiment proactively.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated anniversary &amp; birthday greetings with personalized loyalty discount codes.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Exclusive repeat booking incentives bypassing expensive 20% OTA commissions.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Boosts verified review collection by 4.2x and drives 28% repeat direct bookings.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Post-Stay Guest NPS Reviews and Loyalty Re-engagement" src="/assets/images/industry/travel-and-hospitality/stage-guest-reviews.png?v=travel20261022" loading="lazy">
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       2.2 HELLOBOTZ TRAVEL & HOSPITALITY ARCHITECTURE JOURNEY FLOW (4 STEPS)
       ========================================================================= -->
  <section class="bfsi-journey-section">
    <div class="container">
      <div class="stage-heading" style="margin-bottom:2.5rem;">
        <span class="stage-kicker">HOSPITALITY ARCHITECTURE FLOW</span>
        <h2 class="stage-display-title">HelloBotz End-to-End Travel &amp; Hospitality Architecture</h2>
        <p class="stage-subtitle">From omnichannel traveler inquiry and GDS/PMS synchronization to automated boarding passes, 24/7 AI concierge care, and post-stay loyalty loops.</p>
      </div>

      <div class="bfsi-journey-grid">
        <!-- Step 1 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">1</div>
          <h4>Omnichannel Discovery</h4>
          <p>Traveler connects via hotel website, airport QR code, travel ads, or reservation SMS. Session initialized in under 200ms with multilingual support.</p>
          <span class="bfsi-step-tag">Step 01 · Omnichannel Ingestion</span>
        </div>

        <!-- Step 2 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">2</div>
          <h4>GDS &amp; PMS Live Sync</h4>
          <p>Real-time webhooks query Amadeus, Sabre, Opera PMS, or custom CRS to verify availability, room rates, flight schedules, and booking PNRs.</p>
          <span class="bfsi-step-tag">Step 02 · Enterprise Travel Webhooks</span>
        </div>

        <!-- Step 3 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">3</div>
          <h4>1-Tap Booking &amp; Pay</h4>
          <p>Guest selects room or flight, completes 1-tap UPI or international card payment, and receives instant QR boarding pass and digital itinerary.</p>
          <span class="bfsi-step-tag">Step 03 · Zero-Friction Fulfillment</span>
        </div>

        <!-- Step 4 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">4</div>
          <h4>In-Stay Concierge &amp; Loyalty</h4>
          <p>Autonomous AI manages room service, flight status alerts, and concierge requests, transitioning to post-stay NPS reviews and repeat booking perks.</p>
          <span class="bfsi-step-tag">Step 04 · 24/7 Guest Care &amp; Retention</span>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php if ($currentSlug === 'education-and-social-impacts'): ?>
  <!-- =========================================================================
       2.1 5-STAGE INTERACTIVE LIFECYCLE TOUR (ONE CONNECTED ENROLLMENT SYSTEM)
       ========================================================================= -->
  <section class="stages-native" id="enrollment-system">
    <div class="stages-wrap">
      <div class="stage-heading">
        <span class="stage-kicker">One Connected Growth &amp; Enrollment System</span>
        <h2 class="stage-display-title">Run every stage of enrollment on one connected system</h2>
        <p class="stage-subtitle">Bring marketing, admissions, applications, payments and student engagement together on one purpose-built HelloBotz platform.</p>
      </div>

      <!-- 5 TABS -->
      <div aria-label="Enrollment stages" class="stage-tabs" role="tablist">
        <button aria-selected="true" class="stage-tab active" data-stage="0" role="tab">Attract &amp; Capture</button>
        <button aria-selected="false" class="stage-tab" data-stage="1" role="tab">Engage &amp; Nurture</button>
        <button aria-selected="false" class="stage-tab" data-stage="2" role="tab">Apply &amp; Enroll</button>
        <button aria-selected="false" class="stage-tab" data-stage="3" role="tab">Collect &amp; Reconcile</button>
        <button aria-selected="false" class="stage-tab" data-stage="4" role="tab">Unlock Intelligence</button>
      </div>

      <!-- 5 PANES -->
      <div class="stage-panes">
        <!-- STAGE 0: ATTRACT & CAPTURE -->
        <article class="stage-pane active" data-pane="0">
          <div class="stage-copy">
            <div class="stage-demo-label">Attract &amp; Capture</div>
            <h3>Every enquiry <br>captured, attributed, <br>and owned.</h3>
            <p>Online, offline, partner and campaign demand lands in one connected pipeline, with source, attribution and ownership preserved from the moment an enquiry enters HelloBotz.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Enquiries centralised across every channel and campaign.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Primary, secondary and tertiary source attribution.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Auto source tracking that cannot be edited later.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Lead verification and de-duplication at entry.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Publisher panel with quality and impact scoring.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>200+ lead sources, 40 ERPs and 20 exam systems integrated.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Attract and Capture Dashboard" src="/assets/images/industry/education-and-social-impacts/stage-attract-capture.png?v=edu20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 1: ENGAGE & NURTURE -->
        <article class="stage-pane" data-pane="1">
          <div class="stage-copy">
            <div class="stage-demo-label">Engage &amp; Nurture</div>
            <h3>The right journey,<br> on the right channel,<br> with the right counsellor.</h3>
            <p>Every enquiry is scored, matched to a journey and routed to the counsellor most likely to convert it — then engaged wherever the student actually replies.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Personalised marketing journeys triggered by intent and stage.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Lead scoring and prediction that ranks the pipeline.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Omnichannel nurture across WhatsApp, email, SMS and voice.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>HelloBotz Live Chat for live counselling; HelloBotz AI for always-on qualification.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Smart lead distribution by programme, campus, language or performance.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>HelloBotz AI Guide and Voice for autonomous engagement at scale.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Engage and Nurture Dashboard" src="/assets/images/industry/education-and-social-impacts/stage-engage-nurture.png?v=edu20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 2: APPLY & ENROLL -->
        <article class="stage-pane" data-pane="2">
          <div class="stage-copy">
            <div class="stage-demo-label">Apply &amp; Enroll</div>
            <h3>Move applicants from application started to successfully enrolled.</h3>
            <p>Manage applications, documents, reviews, interviews, offers and enrollment stages with visibility across every student movement.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>No-code, programme-specific forms and admission portal.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Document collection, verification and eligibility checks.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Shortlisting, GD-PI and interview scheduling.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Merit lists and offer letters issued in-system.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Drop-off alerts before applicants go cold.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Role-based access and full audit trails.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Apply and Enroll Dashboard" src="/assets/images/industry/education-and-social-impacts/stage-apply-enroll.png?v=edu20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 3: COLLECT & RECONCILE -->
        <article class="stage-pane" data-pane="3">
          <div class="stage-copy">
            <div class="stage-demo-label">Collect &amp; Reconcile</div>
            <h3>Payment is part of enrollment, not a separate chase.</h3>
            <p>HelloBotz Pay connects fee collection to the student record, so reconciliation stops being a month-end reconstruction across disconnected systems and teams.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Application, tuition, hostel, transport and event fees.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>One-time, partial, recurring and financed structures.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Payment links from CRM, portal and campaigns.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Real-time reconciliation against the student record.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Failure analytics and default tracking for finance.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>HelloBotz Smart ID for identity, access and payments.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Collect and Reconcile Dashboard" src="/assets/images/industry/education-and-social-impacts/stage-collect-reconcile.png?v=edu20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 4: UNLOCK INTELLIGENCE -->
        <article class="stage-pane" data-pane="4">
          <div class="stage-copy">
            <div class="stage-demo-label">Unlock Intelligence</div>
            <h3>One view of the funnel, and the context that makes AI useful.</h3>
            <p>Enquiries, conversations, applications and payments in one system means leadership sees the whole picture, and HelloBotz AI reasons over real institutional context.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Live dashboards from enquiry quality to fee realisation.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Marketing ROI by source, publisher and campaign.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Turnaround time, stage conversion and drop-off analysis.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Programme, campus and vertical performance in one builder.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>HelloBotz AI Coach surfacing next-best actions for counsellors.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Every module deepens the context intelligence works from.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Reports and Analysis Dashboard" src="/assets/images/industry/education-and-social-impacts/stage-campus-intelligence.png?v=edu20261022" loading="lazy">
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       2.2 HELLOBOTZ EDUCATION & SOCIAL IMPACT ARCHITECTURE JOURNEY FLOW (4 STEPS)
       ========================================================================= -->
  <section class="bfsi-journey-section">
    <div class="container">
      <div class="stage-heading" style="margin-bottom:2.5rem;">
        <span class="stage-kicker">ADMISSIONS &amp; CAMPUS ARCHITECTURE FLOW</span>
        <h2 class="stage-display-title">HelloBotz End-to-End Education Architecture</h2>
        <p class="stage-subtitle">From omnichannel student inquiry and automated eligibility triage to digital admission enrollment, 1-tap fee collection, and LMS/SIS integration.</p>
      </div>

      <div class="bfsi-journey-grid">
        <!-- Step 1 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">1</div>
          <h4>Lead Capture &amp; Ingestion</h4>
          <p>Student connects via campus website, college fair QR code, Google Ads, or social outreach. Intake session initialized in &lt;200ms.</p>
          <span class="bfsi-step-tag">Step 01 · Omnichannel Admissions Intake</span>
        </div>

        <!-- Step 2 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">2</div>
          <h4>AI Qualification &amp; Counseling</h4>
          <p>Conversational AI qualifies course interest, verifies eligibility criteria, answers tuition FAQs, and schedules 1-on-1 advisor counseling.</p>
          <span class="bfsi-step-tag">Step 02 · 24/7 AI Academic Counseling</span>
        </div>

        <!-- Step 3 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">3</div>
          <h4>1-Tap Enrollment &amp; Fee Pay</h4>
          <p>Applicant submits digital documents via WhatsApp Flows and completes application or semester fee payments with native 1-tap UPI.</p>
          <span class="bfsi-step-tag">Step 03 · Zero-Friction Fee Collection</span>
        </div>

        <!-- Step 4 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">4</div>
          <h4>SIS / LMS Sync &amp; Retention</h4>
          <p>Real-time webhooks sync student profiles with Moodle, Canvas, or Ellucian ERP. Dispatches automated attendance alerts and exam grade cards.</p>
          <span class="bfsi-step-tag">Step 04 · 24/7 Campus Servicing &amp; Alerts</span>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php if ($currentSlug === 'communication-and-it'): ?>
  <!-- =========================================================================
       2.1 COMMUNICATION & IT 5-STAGE INTERACTIVE LIFECYCLE TOUR
       ========================================================================= -->
  <section class="stages-native" id="it-lifecycle-system">
    <div class="stages-wrap">
      <div class="stage-heading">
        <span class="stage-kicker">End-to-End IT &amp; DevOps Operations</span>
        <h2 class="stage-display-title">Orchestrate Every Stage of Enterprise IT &amp; DevOps on WhatsApp</h2>
        <p class="stage-subtitle">From P1/P2 incident alerting and autonomous L1/L2 employee helpdesk resolution to developer 2FA authentication, Jira/ServiceNow ticketing, and SLA telemetry on one unified platform.</p>
      </div>

      <!-- 5 TABS -->
      <div aria-label="IT &amp; DevOps Lifecycle Stages" class="stage-tabs" role="tablist">
        <button aria-selected="true" class="stage-tab active" data-stage="0" role="tab">Alert &amp; Triage</button>
        <button aria-selected="false" class="stage-tab" data-stage="1" role="tab">AI IT Helpdesk</button>
        <button aria-selected="false" class="stage-tab" data-stage="2" role="tab">Procure &amp; Provision</button>
        <button aria-selected="false" class="stage-tab" data-stage="3" role="tab">Auth &amp; Approvals</button>
        <button aria-selected="false" class="stage-tab" data-stage="4" role="tab">Telemetry &amp; SLAs</button>
      </div>

      <!-- 5 PANES -->
      <div class="stage-panes">
        <!-- STAGE 0: ALERT & TRIAGE -->
        <article class="stage-pane active" data-pane="0">
          <div class="stage-copy">
            <div class="stage-demo-label">Alert &amp; Triage</div>
            <h3>Sub-second P1 incident alerts <br>and real-time DevOps <br>triage on WhatsApp.</h3>
            <p>Stop missing critical production alerts buried in noisy email inboxes or Slack channels. Dispatches instant incident telemetry via PagerDuty, Datadog &amp; CloudWatch webhooks with 1-tap on-call acknowledgement.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Instant incident dispatch triggered by Datadog, PagerDuty, AWS &amp; New Relic.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>1-tap acknowledge and pod restart reply buttons: "[ Ack ]" vs "[ Escalate ]".</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Reduces Mean Time to Acknowledge (MTTA) by 68% for critical production outages.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated on-call engineer phone paging and escalation rota sync.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Direct deep-link integration to live metrics dashboards and error logs.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Pre-approved Meta utility message templates with 99.99% delivery guarantee.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Real-Time IT Incident Alerting and DevOps Triage" src="/assets/images/industry/communication-and-it/stage-incident-alert.png?v=it20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 1: AI IT HELPDESK -->
        <article class="stage-pane" data-pane="1">
          <div class="stage-copy">
            <div class="stage-demo-label">AI IT Helpdesk</div>
            <h3>24/7 autonomous L1/L2 <br>support and internal <br>employee troubleshooting.</h3>
            <p>Empower remote and in-office teams with an always-on internal IT engineer. Autonomous AI resolves password resets, VPN configuration, software installations, and hardware requests in seconds.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Autonomous password resets and zero-trust identity verification in chat.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Step-by-step troubleshooting guides for macOS, Windows, Linux, and VPNs.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Grounded on internal knowledge repositories (Notion, Confluence, Jira).</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Natural language intent recognition with zero-hallucination guardrails.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Deflects up to 76% of routine internal IT helpdesk support tickets.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Sub-0.8s response time across 50+ languages for global engineering teams.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz 24/7 Autonomous AI Employee and Developer Helpdesk" src="/assets/images/industry/communication-and-it/stage-ai-helpdesk.png?v=it20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 2: PROCURE & PROVISION -->
        <article class="stage-pane" data-pane="2">
          <div class="stage-copy">
            <div class="stage-demo-label">Procure &amp; Provision</div>
            <h3>Interactive software <br>catalog and hardware <br>procurement approval.</h3>
            <p>Streamline software license and developer workstation provisioning. Employees browse approved tools and request access; managers approve instantly with 1-tap WhatsApp buttons.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Interactive 10-item list menu displaying enterprise SaaS tools and dev licenses.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>1-tap manager approval workflows sent directly to department heads via WhatsApp.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Triggers automated provisioning webhooks to Okta, Google Workspace &amp; Azure AD.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Real-time software license allocation and compliance audit tracking.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Eliminates multi-day procurement delay, provisioning access in under 2 minutes.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Complete audit trail logging for SOC 2, ISO 27001, and ITIL compliance.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Interactive IT Software Catalog and Hardware Procurement" src="/assets/images/industry/communication-and-it/stage-procure-catalog.png?v=it20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 3: AUTH & APPROVALS -->
        <article class="stage-pane" data-pane="3">
          <div class="stage-copy">
            <div class="stage-demo-label">Auth &amp; Approvals</div>
            <h3>Sub-second 2FA OTPs <br>and zero-trust access <br>verification.</h3>
            <p>Protect developer credentials and critical enterprise databases with WhatsApp 2-Factor Authentication (2FA) and biometric approvals, cutting SMS toll fraud risks to zero.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Sub-800ms OTP delivery with 99.99% message throughput SLA.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Guaranteed delivery bypassing carrier SMS filtering and international routing delays.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Cuts OTP transmission costs by up to 45% compared to legacy SMS aggregators.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>End-to-end encrypted with zero risk of SIM-swap attacks or telecom interception.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Pre-approved Meta authentication templates compliant with global security standards.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Frictionless 1-tap autofill verification for internal developer tools.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz WhatsApp 2FA OTP Delivery and Zero-Trust Authentication" src="/assets/images/industry/communication-and-it/stage-auth-approvals.png?v=it20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 4: TELEMETRY & SLAS -->
        <article class="stage-pane" data-pane="4">
          <div class="stage-copy">
            <div class="stage-demo-label">Telemetry &amp; SLAs</div>
            <h3>Real-time MTTA/MTTR <br>telemetry, SLA tracking <br>&amp; post-incident reviews.</h3>
            <p>Gain executive visibility into enterprise IT velocity and support quality. Live telemetry streams track ticket turnaround times, engineer resolution metrics, and post-mortems in real-time.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Live tracking of Mean Time to Acknowledge (MTTA) and Mean Time to Resolve (MTTR).</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated post-ticket closure 1-tap CSAT rating capture for IT service quality.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Bi-directional sync with Jira Service Management, ServiceNow &amp; Zendesk.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated incident post-mortem generation delivered directly to leadership.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant BI export to Tableau, PowerBI, BigQuery, and enterprise SIEM tools.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Guaranteed 99.99% Meta API uptime backed by enterprise SLA.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz IT Operations SLA Telemetry and Post-Incident Reviews" src="/assets/images/industry/communication-and-it/stage-it-telemetry.png?v=it20261022" loading="lazy">
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       2.2 HELLOBOTZ COMMUNICATION & IT ARCHITECTURE JOURNEY FLOW (4 STEPS)
       ========================================================================= -->
  <section class="bfsi-journey-section">
    <div class="container">
      <div class="stage-heading" style="margin-bottom:2.5rem;">
        <span class="stage-kicker">DEVOPS &amp; ITSM ARCHITECTURE FLOW</span>
        <h2 class="stage-display-title">HelloBotz End-to-End IT Operations Architecture</h2>
        <p class="stage-subtitle">From real-time monitoring webhook ingestion and autonomous AI triage to zero-trust 2FA approvals, Jira/ServiceNow sync, and SLA telemetry.</p>
      </div>

      <div class="bfsi-journey-grid">
        <!-- Step 1 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">1</div>
          <h4>Incident &amp; Event Ingestion</h4>
          <p>Real-time webhooks ingest events from PagerDuty, Datadog, AWS CloudWatch, Jira Service Management, or employee chats in &lt;200ms.</p>
          <span class="bfsi-step-tag">Step 01 · Omnichannel IT Ingestion</span>
        </div>

        <!-- Step 2 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">2</div>
          <h4>Autonomous AI Triage</h4>
          <p>Autonomous AI resolves routine L1/L2 issues (passwords, VPN, permissions) and immediately pages on-call DevOps leads for critical outages.</p>
          <span class="bfsi-step-tag">Step 02 · Autonomous Triage &amp; Diagnostics</span>
        </div>

        <!-- Step 3 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">3</div>
          <h4>Interactive Approvals &amp; 2FA</h4>
          <p>Managers authorize software provisioning with 1-tap buttons. Employees receive sub-second encrypted 2FA OTPs for zero-trust login.</p>
          <span class="bfsi-step-tag">Step 03 · Zero-Trust Access &amp; Approvals</span>
        </div>

        <!-- Step 4 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">4</div>
          <h4>ITSM Sync &amp; SLA Telemetry</h4>
          <p>Bi-directional webhooks update ServiceNow, Jira, and internal audit logs with resolution time, post-mortem notes, and CSAT scores.</p>
          <span class="bfsi-step-tag">Step 04 · Enterprise ITSM &amp; Audit Compliance</span>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php if ($currentSlug === 'food-and-beverages'): ?>
  <!-- =========================================================================
       2.1 FOOD & BEVERAGES 5-STAGE INTERACTIVE LIFECYCLE TOUR
       ========================================================================= -->
  <section class="stages-native" id="fnb-lifecycle-system">
    <div class="stages-wrap">
      <div class="stage-heading">
        <span class="stage-kicker">End-to-End Restaurant &amp; F&amp;B Commerce</span>
        <h2 class="stage-display-title">Orchestrate Every Stage of Food Ordering &amp; Guest Loyalty on WhatsApp</h2>
        <p class="stage-subtitle">From interactive digital menu browsing and instant table reservations to 1-tap WhatsApp UPI payment, live kitchen display (KDS) dispatch, and post-dining reviews on one unified platform.</p>
      </div>

      <!-- 5 TABS -->
      <div aria-label="Food and Beverage Lifecycle Stages" class="stage-tabs" role="tablist">
        <button aria-selected="true" class="stage-tab active" data-stage="0" role="tab">Digital Menu</button>
        <button aria-selected="false" class="stage-tab" data-stage="1" role="tab">Table Booking</button>
        <button aria-selected="false" class="stage-tab" data-stage="2" role="tab">1-Tap WhatsApp Pay</button>
        <button aria-selected="false" class="stage-tab" data-stage="3" role="tab">Kitchen &amp; Dispatch</button>
        <button aria-selected="false" class="stage-tab" data-stage="4" role="tab">Reviews &amp; Loyalty</button>
      </div>

      <!-- 5 PANES -->
      <div class="stage-panes">
        <!-- STAGE 0: DIGITAL MENU -->
        <article class="stage-pane active" data-pane="0">
          <div class="stage-copy">
            <div class="stage-demo-label">Digital Menu</div>
            <h3>Interactive visual menu <br>with instant dietary tags <br>&amp; custom modifiers.</h3>
            <p>Replace clunky PDF downloads with rich interactive WhatsApp catalog messages. Diners browse appetizers, chef specials, beverages, and desserts with high-resolution imagery, spice levels, and allergen indicators.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Multi-Product Catalog integration with dynamic pricing and out-of-stock sync.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Dietary tag badges: Veg, Non-Veg, Vegan, Gluten-Free, and Jain preferences.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Custom dish modifiers: crust types, spice levels, toppings, and portion sizes.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated smart cross-sells (beverages, sides, dips) boosting average cart value by 28%.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Sub-second catalog loading without downloading bulky external PDF files.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant multilingual menu support across English, Hindi, and regional languages.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Interactive WhatsApp Digital Food Menu" src="/assets/images/industry/food-and-beverages/stage-digital-menu.png?v=fnb20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 1: TABLE BOOKING -->
        <article class="stage-pane" data-pane="1">
          <div class="stage-copy">
            <div class="stage-demo-label">Table Booking</div>
            <h3>Frictionless table <br>reservations &amp; live <br>virtual waitlist queues.</h3>
            <p>Eliminate diner walkaways during peak weekend rushes. Diners pick their dining date, party size, and seating area in seconds, while walk-in guests receive real-time queue tokens and "Table Ready" WhatsApp notifications.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Interactive date, time-slot, and party size picker natively inside WhatsApp.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Live seating area selection: Rooftop, Outdoor Patio, AC Dining, or Private Booth.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Virtual queue waitlist token system with automated "Your Table is Ready" alerts.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Reduces table no-shows by 65% with automated WhatsApp reminder pings.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Optional pre-order meal selection so food is prepared right upon diner arrival.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Direct sync with restaurant host stand software and seating management ERPs.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Instant Table Reservations and Virtual Queue on WhatsApp" src="/assets/images/industry/food-and-beverages/stage-table-booking.png?v=fnb20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 2: 1-TAP WHATSAPP PAY -->
        <article class="stage-pane" data-pane="2">
          <div class="stage-copy">
            <div class="stage-demo-label">1-Tap WhatsApp Pay</div>
            <h3>Sub-2s UPI checkout <br>&amp; 100% margin retention <br>with zero commission.</h3>
            <p>Keep 100% of your order revenues without surrendering 25% to 35% to food aggregators. Diners pay instantly via WhatsApp native payments, UPI (Google Pay, PhonePe, Paytm), cards, or net banking.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Direct 1-tap UPI intent checkout natively inside the WhatsApp chat thread.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Supports Google Pay, PhonePe, Paytm, BHIM, Credit/Debit Cards, and Net Banking.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Zero aggregator commission: keep 100% of dish revenue and diner relationship.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant automated GST tax invoice dispatch with itemized discounts and tips.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant automated refund triggers for unavailable ingredients or cancelled dishes.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>RBI and Meta compliant end-to-end 256-bit encrypted payment settlement.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz 1-Tap WhatsApp UPI Payments and In-Chat Order Settlement" src="/assets/images/industry/food-and-beverages/stage-inchat-pay.png?v=fnb20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 3: KITCHEN & DISPATCH -->
        <article class="stage-pane" data-pane="3">
          <div class="stage-copy">
            <div class="stage-demo-label">Kitchen &amp; Dispatch</div>
            <h3>Direct POS &amp; KDS injection <br>with live GPS rider <br>tracking alerts.</h3>
            <p>Eliminate human error and order delays. Paid orders immediately generate Kitchen Order Tickets (KOT) in Petpooja, Posist, UrbanPiper, or Toast, while dispatching automated live delivery tracking updates to diners.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Automated KOT (Kitchen Order Ticket) printing in &lt;1 second via POS webhook.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Bi-directional sync with Petpooja, Posist, UrbanPiper, Toast, and custom ERPs.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Dynamic prep time estimations and kitchen throttling during heavy peak hours.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated delivery rider assignment with live GPS location map pin dispatch.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Milestone alerts: "Order Cooking" ➔ "Rider Dispatched" ➔ "Arrived at Doorstep".</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Direct 1-tap WhatsApp call or message button to contact delivery executive.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Kitchen Display System Sync and Live Delivery Tracking" src="/assets/images/industry/food-and-beverages/stage-live-kitchen.png?v=fnb20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 4: REVIEWS & LOYALTY -->
        <article class="stage-pane" data-pane="4">
          <div class="stage-copy">
            <div class="stage-demo-label">Reviews &amp; Loyalty</div>
            <h3>Automated CSAT loops, <br>Google Review prompts <br>&amp; 1-click re-orders.</h3>
            <p>Transform casual diners into habitual regulars. Automatically trigger post-meal feedback 30 minutes after dining or delivery, funnel 5-star ratings to Google Maps, and reward guests with redeemable loyalty points.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Automated post-dining CSAT surveys with 1-tap interactive star rating chips.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Smart Google Maps / TripAdvisor review booster routing satisfied 5-star diners.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Digital loyalty wallet showing cashback balance, tier status, and reward expiry.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated re-order prompts: "Re-order your favorite Friday Dinner in 1 click".</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Private manager alerts for sub-3 star ratings enabling immediate guest recovery.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>3.6x higher guest retention and repeat dine-in frequency within 60 days.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Automated Post-Meal CSAT Reviews and Loyalty Rewards" src="/assets/images/industry/food-and-beverages/stage-fnb-loyalty.png?v=fnb20261022" loading="lazy">
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       2.2 FOOD & BEVERAGES ARCHITECTURE JOURNEY FLOW (4 STEPS)
       ========================================================================= -->
  <section class="bfsi-journey-section">
    <div class="container">
      <div class="stage-heading" style="margin-bottom:2.5rem;">
        <span class="stage-kicker">RESTAURANT COMMERCE ARCHITECTURE FLOW</span>
        <h2 class="stage-display-title">HelloBotz End-to-End Food &amp; Beverage Architecture</h2>
        <p class="stage-subtitle">From omnichannel QR and chat ordering ingestion to bi-directional POS/KOT sync, 1-tap UPI payment settlement, and automated rider dispatch &amp; loyalty rewards.</p>
      </div>

      <div class="bfsi-journey-grid">
        <!-- Step 1 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">1</div>
          <h4>Omnichannel Dine-In &amp; Delivery Ingestion</h4>
          <p>Diners scan tabletop QR codes, click Instagram/Facebook ads, or message your WhatsApp number to open rich interactive digital menus in &lt;100ms.</p>
          <span class="bfsi-step-tag">Step 01 · Omnichannel Ingestion</span>
        </div>

        <!-- Step 2 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">2</div>
          <h4>POS &amp; Kitchen Display Sync</h4>
          <p>Orders instantly inject into Petpooja, Posist, UrbanPiper, or Toast POS. Kitchen Order Tickets (KOT) print automatically in the kitchen with zero manual data entry.</p>
          <span class="bfsi-step-tag">Step 02 · KDS &amp; POS Bi-Directional Sync</span>
        </div>

        <!-- Step 3 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">3</div>
          <h4>1-Tap UPI Settlement (0% Commission)</h4>
          <p>Diners complete checkout via WhatsApp Pay, Google Pay, PhonePe, or cards. Revenue settles directly into the restaurant's merchant account with zero aggregator cuts.</p>
          <span class="bfsi-step-tag">Step 03 · Zero-Commission Checkout</span>
        </div>

        <!-- Step 4 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">4</div>
          <h4>Live Dispatch &amp; Re-Order Loyalty</h4>
          <p>Automated live GPS dispatch updates keep diners informed. Post-meal CSAT surveys boost Google ratings, while 1-tap re-order triggers drive repeat orders.</p>
          <span class="bfsi-step-tag">Step 04 · Dispatch &amp; Guest Retention</span>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php if ($currentSlug === 'advertising-and-events'): ?>
  <!-- =========================================================================
       2.1 ADVERTISING & EVENTS 5-STAGE INTERACTIVE LIFECYCLE TOUR
       ========================================================================= -->
  <section class="stages-native" id="events-lifecycle-system">
    <div class="stages-wrap">
      <div class="stage-heading">
        <span class="stage-kicker">End-to-End Advertising &amp; Event Operations</span>
        <h2 class="stage-display-title">Orchestrate Every Stage of Event Marketing &amp; Attendee Operations on WhatsApp</h2>
        <p class="stage-subtitle">From high-impact marketing broadcasts and native in-chat registration flows to 1-tap UPI ticket checkout, live on-site AI concierge, and post-event analytics on one unified platform.</p>
      </div>

      <!-- 5 TABS -->
      <div aria-label="Advertising and Event Lifecycle Stages" class="stage-tabs" role="tablist">
        <button aria-selected="true" class="stage-tab active" data-stage="0" role="tab">Broadcast &amp; Promote</button>
        <button aria-selected="false" class="stage-tab" data-stage="1" role="tab">Register &amp; Book</button>
        <button aria-selected="false" class="stage-tab" data-stage="2" role="tab">1-Tap Ticket Pay</button>
        <button aria-selected="false" class="stage-tab" data-stage="3" role="tab">Live Concierge</button>
        <button aria-selected="false" class="stage-tab" data-stage="4" role="tab">Analytics &amp; CSAT</button>
      </div>

      <!-- 5 PANES -->
      <div class="stage-panes">
        <!-- STAGE 0: BROADCAST & PROMOTE -->
        <article class="stage-pane active" data-pane="0">
          <div class="stage-copy">
            <div class="stage-demo-label">Broadcast &amp; Promote</div>
            <h3>High-impact WhatsApp <br>marketing blasts with <br>98% open rates.</h3>
            <p>Cut through email clutter and spam filters. Deliver personalized rich media teasers, speaker announcements, early-bird passes, and festival updates directly to opt-in audience pockets with verified sender trust.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>100% Meta Cloud API verified message delivery with green badge credibility.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Rich media headers: teasers, speaker video reels, and interactive banners.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Audience segmentation by past event attendance, job title, and location.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated retargeting sequences for abandoned ticket bookings and VIP passes.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>4.8x higher click-through rates (CTR) compared to traditional promotional emails.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Meta compliance guardrails ensuring zero account suspension or spam flags.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz WhatsApp Event Marketing Broadcasts and Promotions" src="/assets/images/industry/advertising-and-events/stage-broadcast-promote.png?v=adv20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 1: REGISTER & BOOK -->
        <article class="stage-pane" data-pane="1">
          <div class="stage-copy">
            <div class="stage-demo-label">Register &amp; Book</div>
            <h3>Frictionless in-chat <br>registration flows &amp; <br>breakout track selection.</h3>
            <p>Eliminate registration drop-offs caused by slow external landing pages. Attendees enter contact details, choose ticket tiers (VIP, Delegate, Student), and select breakout workshops natively inside WhatsApp Flows in under 60 seconds.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Native WhatsApp Flows with multi-step interactive forms and date selectors.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Real-time seat reservation for high-demand masterclasses and roundtables.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Sub-100ms form submission with zero external website redirection.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant bi-directional CRM lead sync into HubSpot, Salesforce, and Zoho.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Group delegation booking and multiple companion registration support.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>3.8x higher form completion rate compared to traditional web portals.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz In-Chat Event Registration and Interactive WhatsApp Flows" src="/assets/images/industry/advertising-and-events/stage-register-book.png?v=adv20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 2: 1-TAP TICKET PAY -->
        <article class="stage-pane" data-pane="2">
          <div class="stage-copy">
            <div class="stage-demo-label">1-Tap Ticket Pay</div>
            <h3>Instant in-chat UPI <br>ticketing &amp; dynamic <br>turnstile QR badges.</h3>
            <p>Monetize conferences, concerts, and expos with frictionless in-chat checkout. Attendees pay via WhatsApp Pay, UPI (GPay, PhonePe, Paytm), or credit cards, and immediately receive cryptographically secure QR passes.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Sub-2 second payment completion via WhatsApp native UPI intents and cards.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant delivery of encrypted dynamic QR code entry passes in the chat.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>1-tap Apple Wallet and Google Wallet pass addition buttons.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated GST tax invoice PDF generation and immediate dispatch.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Bi-directional webhook synchronization with Eventbrite, Stripe, and Townscript.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>End-to-end 256-bit encrypted transactions with zero fraud chargeback risks.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz 1-Tap WhatsApp UPI Ticketing and Instant QR Passes" src="/assets/images/industry/advertising-and-events/stage-ticket-pay.png?v=adv20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 3: LIVE CONCIERGE -->
        <article class="stage-pane" data-pane="3">
          <div class="stage-copy">
            <div class="stage-demo-label">Live Concierge</div>
            <h3>24/7 autonomous AI <br>attendee concierge &amp; <br>real-time venue alerts.</h3>
            <p>Provide VIP-level support to tens of thousands of attendees simultaneously. Autonomous AI resolves venue navigation, speaker bios, WiFi credentials, dining options, and parking questions in sub-seconds.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Autonomous resolution of 85%+ live attendee venue inquiries.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Interactive floor maps and hall navigation pins delivered directly in chat.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated session countdown pings: "Keynote starts in 15 mins in Hall A".</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Urgent broadcast alerts for room reassignments, schedule shifts, or weather alerts.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Human agent handover via shared team inbox for VIP sponsors and speakers.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Multilingual real-time translation across 30+ regional and global languages.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz AI Event Concierge and Live Venue Support on WhatsApp" src="/assets/images/industry/advertising-and-events/stage-live-concierge.png?v=adv20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 4: ANALYTICS & CSAT -->
        <article class="stage-pane" data-pane="4">
          <div class="stage-copy">
            <div class="stage-demo-label">Analytics &amp; CSAT</div>
            <h3>Live campaign telemetry, <br>sponsor lead reports <br>&amp; post-event NPS loops.</h3>
            <p>Prove undeniable ROI to event sponsors and stakeholders. Track real-time broadcast delivery, session engagement, and ticket sales velocity, then trigger post-event feedback surveys right after the closing remarks.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Automated post-event CSAT surveys with 1-tap interactive star rating chips.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Direct attendee routing to Google Reviews and LinkedIn testimonial sharing.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Live sponsor booth lead capture telemetry and engagement reporting.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant BI export to HubSpot, Tableau, PowerBI, BigQuery, and CSV.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Session popularity metrics, drop-off analytics, and attendee retention rates.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated "early access" campaign triggers for the upcoming year's summit.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Live Campaign Analytics and Post-Event CSAT Surveys" src="/assets/images/industry/advertising-and-events/stage-analytics-csat.png?v=adv20261022" loading="lazy">
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       2.2 ADVERTISING & EVENTS ARCHITECTURE JOURNEY FLOW (4 STEPS)
       ========================================================================= -->
  <section class="bfsi-journey-section">
    <div class="container">
      <div class="stage-heading" style="margin-bottom:2.5rem;">
        <span class="stage-kicker">CAMPAIGN &amp; EVENT ARCHITECTURE FLOW</span>
        <h2 class="stage-display-title">HelloBotz End-to-End Advertising &amp; Event Architecture</h2>
        <p class="stage-subtitle">From CRM segmentation and Meta broadcast dispatch to native in-chat registration, 1-tap UPI ticket checkout, and live AI concierge with sponsor telemetry.</p>
      </div>

      <div class="bfsi-journey-grid">
        <!-- Step 1 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">1</div>
          <h4>Audience Ingestion &amp; Campaign Launch</h4>
          <p>Meta Cloud API ingests contact lists, synchronizes CRM segments from HubSpot/Salesforce, and dispatches rich media marketing broadcasts with 98% open rates.</p>
          <span class="bfsi-step-tag">Step 01 · Omnichannel Broadcast Launch</span>
        </div>

        <!-- Step 2 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">2</div>
          <h4>Native In-Chat Registration Flows</h4>
          <p>Interactive WhatsApp Flows capture attendee credentials, job titles, and masterclass preferences in &lt;60s with zero external website redirection.</p>
          <span class="bfsi-step-tag">Step 02 · Native WhatsApp Flows</span>
        </div>

        <!-- Step 3 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">3</div>
          <h4>1-Tap UPI Ticketing &amp; Dynamic QR Passes</h4>
          <p>Attendees complete instant checkout via WhatsApp Pay, UPI, or cards. Cryptographically verified dynamic QR badges are generated for contactless entry.</p>
          <span class="bfsi-step-tag">Step 03 · 1-Tap UPI Ticketing</span>
        </div>

        <!-- Step 4 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">4</div>
          <h4>Live AI Concierge &amp; Sponsor Telemetry</h4>
          <p>On-site AI resolves venue FAQs, pushes session countdowns, and collects post-event CSAT feedback with instant sponsor lead reporting into CRM.</p>
          <span class="bfsi-step-tag">Step 04 · Live Support &amp; Sponsor ROI</span>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php if ($currentSlug === 'construction-and-real-estate'): ?>
  <!-- =========================================================================
       2.1 CONSTRUCTION & REAL ESTATE 5-STAGE INTERACTIVE LIFECYCLE TOUR
       ========================================================================= -->
  <section class="stages-native" id="realestate-lifecycle-system">
    <div class="stages-wrap">
      <div class="stage-heading">
        <span class="stage-kicker">End-to-End Real Estate Sales &amp; PropTech CRM</span>
        <h2 class="stage-display-title">Orchestrate Every Stage of Property Sales &amp; Buyer Engagement on WhatsApp</h2>
        <p class="stage-subtitle">From sub-45 second portal lead triage and interactive floorplan catalogs to 1-tap site visit scheduling, digital token deposits, and construction milestone updates on one unified platform.</p>
      </div>

      <!-- 5 TABS -->
      <div aria-label="Real Estate Lifecycle Stages" class="stage-tabs" role="tablist">
        <button aria-selected="true" class="stage-tab active" data-stage="0" role="tab">Capture &amp; Triage</button>
        <button aria-selected="false" class="stage-tab" data-stage="1" role="tab">Floorplans &amp; Tours</button>
        <button aria-selected="false" class="stage-tab" data-stage="2" role="tab">Site Visit Booking</button>
        <button aria-selected="false" class="stage-tab" data-stage="3" role="tab">Token Advance &amp; KYC</button>
        <button aria-selected="false" class="stage-tab" data-stage="4" role="tab">Milestones &amp; CRM</button>
      </div>

      <!-- 5 PANES -->
      <div class="stage-panes">
        <!-- STAGE 0: CAPTURE & TRIAGE -->
        <article class="stage-pane active" data-pane="0">
          <div class="stage-copy">
            <div class="stage-demo-label">Capture &amp; Triage</div>
            <h3>Sub-45s lead qualification <br>from 99acres, portals <br>&amp; Meta Click-to-WhatsApp.</h3>
            <p>Eliminate lead decay and beat competitor developers to high-intent buyers. Inbound inquiries from real estate portals and social ads receive instant personalized greetings, budget triage, and digital brochures.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Instant automated greeting dispatched in &lt;45s with project introductory video.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>1-tap qualification chips: Budget (₹75L - ₹1.5Cr+), Configuration (2/3/4 BHK), and Timeline.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Slashing lead drop-off and leakage to rival developers by over 72%.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Smart round-robin lead routing to designated on-site sales consultants.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Real-time webhook sync from 99acres, MagicBricks, Housing.com &amp; Meta Ads.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant bi-directional lead creation in Salesforce, LeadSquared &amp; Sell.Do.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Real Estate Lead Capture and Instant 45-Second Triage" src="/assets/images/industry/construction-and-real-estate/stage-lead-capture.png?v=real20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 1: FLOORPLANS & TOURS -->
        <article class="stage-pane" data-pane="1">
          <div class="stage-copy">
            <div class="stage-demo-label">Floorplans &amp; Tours</div>
            <h3>Interactive unit plans, <br>360° virtual tours &amp; <br>RERA approvals.</h3>
            <p>Showcase unit layouts, tower elevations, carpet areas, and dynamic cost sheets directly inside WhatsApp. Buyers can explore virtual walkthroughs and download verified RERA sanction certificates with a single tap.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Multi-Product WhatsApp catalogs with 2BHK, 3BHK, and Penthouse floor plans.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>1-tap RERA-approved PDF project brochure download without website friction.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Embedded 360-degree virtual sample flat walkthrough videos and drone view clips.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Dynamic payment milestone calculator: Construction-linked vs Subvention schemes.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Direct bank approval list (SBI, HDFC, ICICI) with loan eligibility estimates.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Real-time unit inventory availability sync preventing double bookings.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Interactive Floorplans, Virtual Tours and RERA Brochures" src="/assets/images/industry/construction-and-real-estate/stage-virtual-tour.png?v=real20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 2: SITE VISIT BOOKING -->
        <article class="stage-pane" data-pane="2">
          <div class="stage-copy">
            <div class="stage-demo-label">Site Visit Booking</div>
            <h3>1-tap site visit calendar, <br>chauffeur dispatch &amp; <br>live GPS directions.</h3>
            <p>Transform digital interest into physical sales gallery footfall. Buyers choose their preferred weekend visit slot in seconds, receive live Google Maps route pins, and get automated calendar invites that reduce no-shows.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Interactive date and time slot calendar picker inside WhatsApp Flows.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated site location Google Maps pin and driving landmark instructions.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Optional VIP complimentary cab / chauffeur booking integration for qualified buyers.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated WhatsApp visit reminder pings sent at 24 hours and 2 hours prior.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>58% reduction in site visit no-show rates across premium residential projects.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant sales executive allocation with notification badge sent to on-site host.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz 1-Tap Site Visit Scheduling and Google Maps Navigation" src="/assets/images/industry/construction-and-real-estate/stage-site-visit.png?v=real20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 3: TOKEN ADVANCE & KYC -->
        <article class="stage-pane" data-pane="3">
          <div class="stage-copy">
            <div class="stage-demo-label">Token Advance &amp; KYC</div>
            <h3>Instant UPI token deposits, <br>RERA receipts &amp; <br>encrypted KYC capture.</h3>
            <p>Lock in interested buyers before they leave the sales lounge. Collect earnest token deposits via 1-tap WhatsApp UPI, issue RERA-compliant digital booking acknowledgments, and collect buyer identity documents securely.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Sub-2 second token advance settlement via UPI, GPay, PhonePe, and Net Banking.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant RERA-compliant digital token booking receipt generated and sent in chat.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Secure in-chat KYC document collection: PAN card, Aadhaar, and address proof.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>End-to-end 256-bit AES encryption protecting sensitive buyer financial data.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Immediate unit block in inventory ERP preventing competing sales allocation.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated demand notice schedule generation aligned with builder-buyer agreement.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz 1-Tap UPI Token Deposit Settlement and Encrypted KYC" src="/assets/images/industry/construction-and-real-estate/stage-token-checkout.png?v=real20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 4: MILESTONES & CRM -->
        <article class="stage-pane" data-pane="4">
          <div class="stage-copy">
            <div class="stage-demo-label">Milestones &amp; CRM</div>
            <h3>Slab completion updates, <br>demand letter dispatch <br>&amp; CRM pipeline sync.</h3>
            <p>Build lasting buyer trust and streamline project cash flows. Broadcast slab-wise drone videos to existing buyers, automate construction milestone payment links, and keep pipeline metrics synchronized across your enterprise CRM.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Automated slab-wise milestone broadcast updates with high-res drone footage.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated payment demand letters with 1-tap payment links and GST invoices.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Channel partner and broker attribution tracking with commission milestone alerts.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Real-time bi-directional sync with Salesforce, LeadSquared, Sell.Do &amp; Zoho.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Post-handover snag reporting and automated maintenance ticketing.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>3.4x higher referral lead generation from satisfied existing homeowners.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Construction Milestone Updates and CRM Pipeline Telemetry" src="/assets/images/industry/construction-and-real-estate/stage-buyer-telemetry.png?v=real20261022" loading="lazy">
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       2.2 CONSTRUCTION & REAL ESTATE ARCHITECTURE JOURNEY FLOW (4 STEPS)
       ========================================================================= -->
  <section class="bfsi-journey-section">
    <div class="container">
      <div class="stage-heading" style="margin-bottom:2.5rem;">
        <span class="stage-kicker">PROPTECH &amp; REAL ESTATE ARCHITECTURE FLOW</span>
        <h2 class="stage-display-title">HelloBotz End-to-End Real Estate Architecture</h2>
        <p class="stage-subtitle">From omnichannel property inquiry ingestion and autonomous AI triage to 1-tap site visit booking, digital token checkout, and post-sales milestone tracking.</p>
      </div>

      <div class="bfsi-journey-grid">
        <!-- Step 1 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">1</div>
          <h4>Omnichannel Lead Ingestion</h4>
          <p>Real-time webhooks ingest buyer leads from 99acres, MagicBricks, Housing.com, Google Ads, Meta Click-to-WhatsApp ads, and site signage in &lt;200ms.</p>
          <span class="bfsi-step-tag">Step 01 · Omnichannel Lead Ingestion</span>
        </div>

        <!-- Step 2 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">2</div>
          <h4>Autonomous AI Triage &amp; CRM Sync</h4>
          <p>Autonomous AI engages leads within 45s, qualifies budgets and BHK requirements, shares brochures, and syncs data to Salesforce, LeadSquared, or Sell.Do.</p>
          <span class="bfsi-step-tag">Step 02 · Autonomous Triage &amp; CRM Sync</span>
        </div>

        <!-- Step 3 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">3</div>
          <h4>1-Tap Site Visit Booking &amp; Directions</h4>
          <p>Buyers select visit slots on an interactive calendar, receive live Google Maps GPS location pins, and get automated reminder alerts reducing no-shows by 58%.</p>
          <span class="bfsi-step-tag">Step 03 · Site Visit &amp; GPS Navigation</span>
        </div>

        <!-- Step 4 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">4</div>
          <h4>Token Advance &amp; Milestone Tracking</h4>
          <p>Buyers settle earnest token deposits via 1-tap UPI with RERA receipts, while homeowners receive automated slab milestone drone updates and payment notices.</p>
          <span class="bfsi-step-tag">Step 04 · Token Checkout &amp; Milestones</span>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php if ($currentSlug === 'automobiles-and-transport'): ?>
  <!-- =========================================================================
       2.1 AUTOMOBILES & TRANSPORT 5-STAGE INTERACTIVE LIFECYCLE TOUR
       ========================================================================= -->
  <section class="stages-native" id="auto-lifecycle-system">
    <div class="stages-wrap">
      <div class="stage-heading">
        <span class="stage-kicker">End-to-End Automotive CRM &amp; Service Bay Operations</span>
        <h2 class="stage-display-title">Orchestrate Every Stage of Car Sales &amp; Workshop Operations on WhatsApp</h2>
        <p class="stage-subtitle">From doorstep test drive bookings and interactive vehicle configurators to transparent service job cards, 1-tap UPI bill settlement, and 24/7 Roadside Assistance on one unified platform.</p>
      </div>

      <!-- 5 TABS -->
      <div aria-label="Automotive and Transport Lifecycle Stages" class="stage-tabs" role="tablist">
        <button aria-selected="true" class="stage-tab active" data-stage="0" role="tab">Test Drive</button>
        <button aria-selected="false" class="stage-tab" data-stage="1" role="tab">Brochure &amp; Specs</button>
        <button aria-selected="false" class="stage-tab" data-stage="2" role="tab">Service &amp; Job Card</button>
        <button aria-selected="false" class="stage-tab" data-stage="3" role="tab">1-Tap UPI Pay</button>
        <button aria-selected="false" class="stage-tab" data-stage="4" role="tab">Insurance &amp; Fleet</button>
      </div>

      <!-- 5 PANES -->
      <div class="stage-panes">
        <!-- STAGE 0: TEST DRIVE -->
        <article class="stage-pane active" data-pane="0">
          <div class="stage-copy">
            <div class="stage-demo-label">Test Drive</div>
            <h3>Frictionless doorstep <br>&amp; showroom test drive <br>scheduling in &lt;60s.</h3>
            <p>Convert digital automotive leads into showroom footfall and home test drives. Buyers select vehicle model, trim, fuel type, date, and preferred location with automated sales consultant allocation.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Interactive model and trim selector inside native WhatsApp Flows.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Choice of Doorstep Test Drive or Express Showroom Experience.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>In-chat driving license photo capture for express paperwork clearance.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated WhatsApp reminders sent 24h and 2h prior, achieving 88% attendance.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant sales consultant allocation with live Google Maps route tracking.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Bi-directional test drive logging into CDK Global, DealerTrack &amp; Salesforce.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Doorstep and Showroom Test Drive Booking on WhatsApp" src="/assets/images/industry/automobiles-and-transport/stage-test-drive.png?v=auto20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 1: BROCHURE & SPECS -->
        <article class="stage-pane" data-pane="1">
          <div class="stage-copy">
            <div class="stage-demo-label">Brochure &amp; Specs</div>
            <h3>Interactive vehicle catalogs, <br>360° views &amp; dynamic <br>on-road price quotes.</h3>
            <p>Empower car shoppers with instant product knowledge. Share rich vehicle catalogs with color swatches, technical spec sheets, variant comparison sheets, and personalized on-road pricing breakdowns.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Multi-Product WhatsApp catalogs showcasing vehicle variants, colors, and trims.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>1-tap high-definition PDF brochure and technical spec sheet download.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Dynamic on-road price estimator including RTO, insurance, and accessories.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Embedded 360-degree interior and exterior walkthrough video clips.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Instant loan EMI calculator with partner bank financing schemes (HDFC, SBI, ICICI).</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Old car exchange valuation request with instant photo appraisal in chat.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Interactive Vehicle Catalogs, Specs and On-Road Pricing" src="/assets/images/industry/automobiles-and-transport/stage-car-config.png?v=auto20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 2: SERVICE & JOB CARD -->
        <article class="stage-pane" data-pane="2">
          <div class="stage-copy">
            <div class="stage-demo-label">Service &amp; Job Card</div>
            <h3>Proactive maintenance alerts, <br>bay booking &amp; transparent <br>video job cards.</h3>
            <p>Maximize service workshop retention and eliminate repair mistrust. Send automated service due reminders based on vehicle odometer intervals, provide upfront job card estimates, and share technician inspection videos.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Automated service due broadcasts triggered 30 days and 7 days prior.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Transparent upfront repair cost estimates with itemized parts and labor.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>1-tap add-on service approvals for brake pads, tire rotation, or wheel alignment.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Technician photo/video clips demonstrating worn components prior to replacement.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Self-service workshop bay booking with pick-and-drop driver allocation.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Real-time milestone notifications: "Washing Completed" ➔ "Ready for Delivery".</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Automated Vehicle Service Booking and Transparent Job Cards" src="/assets/images/industry/automobiles-and-transport/stage-service-booking.png?v=auto20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 3: 1-TAP UPI PAY -->
        <article class="stage-pane" data-pane="3">
          <div class="stage-copy">
            <div class="stage-demo-label">1-Tap UPI Pay</div>
            <h3>Sub-2s service bill checkout, <br>genuine accessories <br>&amp; digital gate passes.</h3>
            <p>Eliminate long cashier lines at the service center. Car owners review itemized invoices and pay in seconds via WhatsApp UPI intents or credit cards, receiving an express digital gate pass for 10-second vehicle pickup.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Sub-2 second payment completion via WhatsApp Pay, UPI, GPay, and PhonePe.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Automated GST tax invoice PDF delivered instantly to the WhatsApp thread.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Cryptographically verified digital gate pass barcode for express showroom exit.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Genuine manufacturer accessories catalog with 1-tap add-to-bill capability.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Zero cashier friction: 4.2x faster service bill clearance during evening rushes.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>End-to-end 256-bit encrypted transactions with zero payment reconciliation errors.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz 1-Tap WhatsApp UPI Service Payments and Digital Gate Pass" src="/assets/images/industry/automobiles-and-transport/stage-auto-pay.png?v=auto20261022" loading="lazy">
          </div>
        </article>

        <!-- STAGE 4: INSURANCE & FLEET -->
        <article class="stage-pane" data-pane="4">
          <div class="stage-copy">
            <div class="stage-demo-label">Insurance &amp; Fleet</div>
            <h3>Proactive policy renewals, <br>warranty alerts &amp; 24/7 <br>Roadside Assistance (RSA).</h3>
            <p>Retain high-margin after-sales renewals and provide emergency protection. Automate motor insurance renewal comparisons, extended warranty notices, and 1-tap live GPS dispatch for roadside breakdowns and towing.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Automated insurance expiry reminders with instant multi-insurer comparison quotes.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>1-tap digital policy renewal and digital certificate issuance in chat.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>24/7 Roadside Assistance (RSA) with 1-tap WhatsApp live GPS location dispatch.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Real-time ETA tracking of the dispatched mechanic or recovery crane.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Extended warranty and roadside package purchase options with instant activation.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Fleet maintenance tracking and driver compliance alerts for transport operators.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="HelloBotz Motor Insurance Renewals, Warranty Alerts and Roadside SOS" src="/assets/images/industry/automobiles-and-transport/stage-fleet-telemetry.png?v=auto20261022" loading="lazy">
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       2.2 AUTOMOBILES & TRANSPORT ARCHITECTURE JOURNEY FLOW (4 STEPS)
       ========================================================================= -->
  <section class="bfsi-journey-section">
    <div class="container">
      <div class="stage-heading" style="margin-bottom:2.5rem;">
        <span class="stage-kicker">AUTOMOTIVE &amp; FLEET ARCHITECTURE FLOW</span>
        <h2 class="stage-display-title">HelloBotz End-to-End Automotive Architecture</h2>
        <p class="stage-subtitle">From omnichannel vehicle inquiry ingestion and Dealership Management System (DMS) sync to 1-tap UPI bill settlement, digital gate passes, and 24/7 roadside assistance.</p>
      </div>

      <div class="bfsi-journey-grid">
        <!-- Step 1 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">1</div>
          <h4>Omnichannel Inquiry Ingestion</h4>
          <p>Webhooks ingest vehicle inquiries from Meta Click-to-WhatsApp ads, CarDekho, CarWale, dealership websites, and showroom QR codes in &lt;200ms.</p>
          <span class="bfsi-step-tag">Step 01 · Omnichannel Ingestion</span>
        </div>

        <!-- Step 2 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">2</div>
          <h4>DMS &amp; Workshop Bay Sync</h4>
          <p>Test drive bookings and periodic service requests sync bi-directionally with CDK Global, DealerTrack, Keyloop, or SAP Auto ERP with zero manual re-entry.</p>
          <span class="bfsi-step-tag">Step 02 · DMS &amp; Workshop Bay Sync</span>
        </div>

        <!-- Step 3 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">3</div>
          <h4>1-Tap UPI Settle &amp; Gate Pass</h4>
          <p>Car owners approve job cards, pay repair bills via 1-tap WhatsApp UPI, and instantly receive automated GST invoices and digital workshop gate passes.</p>
          <span class="bfsi-step-tag">Step 03 · 1-Tap UPI Settle &amp; Gate Pass</span>
        </div>

        <!-- Step 4 -->
        <div class="bfsi-journey-step">
          <div class="bfsi-step-badge">4</div>
          <h4>Roadside SOS &amp; Lifecycle Renewals</h4>
          <p>AI concierge handles 24/7 emergency roadside assistance with live GPS dispatch, while driving high-margin insurance renewals and warranty extensions.</p>
          <span class="bfsi-step-tag">Step 04 · Roadside SOS &amp; Renewals</span>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- =========================================================================
       3. 6 ALTERNATING FEATURE ROWS (FLOATING TRANSPARENT PNG VISUALS)
       ========================================================================= -->
  <section class="industry-features-section">
    <div class="container">
      <div class="industry-section-header">
        <h2>Enterprise-Grade WhatsApp Solutions for <br><?php echo htmlspecialchars($ind['name']); ?></h2>
        <p>Built for scale, speed, and continuous customer satisfaction. Discover how HelloBotz streamlines your operations.</p>
      </div>

      <?php foreach ($ind['features'] as $fIdx => $feat): ?>
      <?php $isEven = ($fIdx % 2 !== 0); ?>
      <div class="industry-feature-row<?php echo $isEven ? ' reverse' : ''; ?>">
        <div class="industry-feature-content">
          <span class="industry-feature-badge">Feature <?php echo htmlspecialchars($feat['index']); ?></span>
          <h3 class="industry-feature-title"><?php echo htmlspecialchars($feat['title']); ?></h3>
          <p class="industry-feature-desc"><?php echo htmlspecialchars($feat['desc']); ?></p>
          
          <?php if (!empty($feat['bullets'])): ?>
          <ul class="industry-feature-bullets">
            <?php foreach ($feat['bullets'] as $bullet): ?>
            <li>
              <span class="industry-bullet-icon">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
              </span>
              <span><?php echo htmlspecialchars($bullet); ?></span>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>

          <button type="button" class="industry-feature-cta" onclick="openIndustryModal('Explore Feature: <?php echo addslashes($feat['title']); ?>')">
            <span>Explore <?php echo htmlspecialchars($feat['title']); ?></span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </button>
        </div>

        <div class="industry-feature-visual">
          <img src="<?php echo htmlspecialchars($feat['image']); ?>" alt="<?php echo htmlspecialchars($feat['title']); ?> Illustration" loading="lazy">
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- =========================================================================
       4. TAILORED SOLUTIONS CARDS (6 GRIDS)
       ========================================================================= -->
  <section class="industry-solutions-section">
    <div class="container">
      <div class="industry-section-header">
        <h2>Tailored Solutions for Your Business Needs</h2>
        <p>Comprehensive tools designed specifically to overcome industry roadblocks and elevate ROI.</p>
      </div>

      <div class="industry-solutions-grid">
        <?php 
        $icons = [
          '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>',
          '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
          '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>',
          '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>',
          '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>',
          '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>'
        ];
        foreach ($ind['solutions'] as $sIdx => $sol): 
          $iconSvg = $icons[$sIdx % count($icons)];
        ?>
        <div class="industry-sol-card">
          <div class="industry-sol-icon">
            <?php echo $iconSvg; ?>
          </div>
          <h3><?php echo htmlspecialchars($sol['title']); ?></h3>
          <p><?php echo htmlspecialchars($sol['desc']); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       5. FAQS ACCORDION
       ========================================================================= -->
  <section class="industry-faq-section" id="faq">
    <div class="container">
      <div class="industry-section-header">
        <h2>Got Questions? We’ve Got Answers!</h2>
        <p>Everything you need to know about implementing HelloBotz in <?php echo htmlspecialchars($ind['name']); ?>.</p>
      </div>

      <div class="industry-faq-list">
        <?php foreach ($ind['faqs'] as $qIdx => $faq): ?>
        <div class="industry-faq-item<?php echo $qIdx === 0 ? ' active' : ''; ?>">
          <button type="button" class="industry-faq-header" onclick="toggleIndustryFaq(this)">
            <span><?php echo htmlspecialchars($faq['q']); ?></span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="industry-faq-body" style="<?php echo $qIdx === 0 ? 'display:block;' : ''; ?>">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       6. CTA BANNER SECTION
       ========================================================================= -->
  <section class="industry-cta-section">
    <div class="container">
      <div class="industry-cta-banner">
        <h2>Transform Your <?php echo htmlspecialchars($ind['name']); ?> Communication</h2>
        <p>Join hundreds of high-growth businesses using HelloBotz to automate customer engagement, scale conversions, and build lasting loyalty.</p>
        <div class="industry-cta-actions">
          <button type="button" class="industry-btn-white" onclick="openIndustryModal('CTA Banner - <?php echo addslashes($ind['name']); ?>')">
            Get Started Free
          </button>
          <a href="<?php echo $bp; ?>business-leads/" class="btn-download-data btn-get-verified-leads" style="background:#ffffff !important;color:#4f46e5 !important;border:none !important;box-shadow:0 6px 20px rgba(0,0,0,0.15) !important;">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified Leads
          </a>
          <a href="https://wa.me/918050854445?text=Hi%20HelloBotz%2C%20I%20want%20to%20schedule%20a%20demo%20for%20<?php echo urlencode($ind['name']); ?>" target="_blank" rel="noopener" class="industry-btn-ghost">
            Chat with an Expert
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Simple FAQ Toggle & Modal Script -->
<script>
function toggleIndustryFaq(btn) {
  const item = btn.closest('.industry-faq-item');
  const body = item.querySelector('.industry-faq-body');
  const isActive = item.classList.contains('active');
  
  // Close all other items
  document.querySelectorAll('.industry-faq-item').forEach(i => {
    i.classList.remove('active');
    const b = i.querySelector('.industry-faq-body');
    if (b) b.style.display = 'none';
  });

  if (!isActive) {
    item.classList.add('active');
    if (body) body.style.display = 'block';
  }
}

function openIndustryModal(source) {
  if (typeof openDemoModal === 'function') {
    openDemoModal();
  } else if (typeof openBfsiModal === 'function') {
    openBfsiModal(source);
  } else {
    window.location.href = '/#contact-section';
  }
}

// 5-Stage Interactive Lifecycle Tour Tabs Switcher
document.addEventListener('DOMContentLoaded', function() {
  const stageTabs = document.querySelectorAll('.stage-tab');
  const stagePanes = document.querySelectorAll('.stage-pane');
  if (stageTabs.length && stagePanes.length) {
    stageTabs.forEach(function(tab) {
      tab.addEventListener('click', function() {
        const stageIdx = this.getAttribute('data-stage');
        stageTabs.forEach(function(t) {
          t.classList.remove('active');
          t.setAttribute('aria-selected', 'false');
        });
        this.classList.add('active');
        this.setAttribute('aria-selected', 'true');
        
        stagePanes.forEach(function(pane) {
          if (pane.getAttribute('data-pane') === stageIdx) {
            pane.classList.add('active');
          } else {
            pane.classList.remove('active');
          }
        });
      });
    });
  }
});
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
