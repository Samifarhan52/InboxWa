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
<?php if ($currentSlug === 'bfsi' || $currentSlug === 'healthcare' || $currentSlug === 'retail-and-ecommerce'): ?>
<link rel="stylesheet" href="/assets/css/bfsi.css?v=retail20261022">
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
            <img decoding="async" alt="HelloBotz Attract and Capture Dashboard" src="/assets/images/home-meritto/attract-and-capture.png" loading="lazy">
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
            <img decoding="async" alt="HelloBotz Engage and Nurture Dashboard" src="/assets/images/home-meritto/engage-and-nurture.png" loading="lazy">
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
            <img decoding="async" alt="HelloBotz Apply and Enroll Dashboard" src="/assets/images/home-meritto/apply-and-enroll.png" loading="lazy">
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
            <img decoding="async" alt="HelloBotz Collect and Reconcile Dashboard" src="/assets/images/home-meritto/collect-and-reconcile.png" loading="lazy">
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
            <img decoding="async" alt="HelloBotz Reports and Analysis Dashboard" src="/assets/images/home-meritto/reports-and-analysis.png" loading="lazy">
          </div>
        </article>
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
