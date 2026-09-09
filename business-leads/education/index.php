<?php
if (!defined('IN_EDUCATION_PAGE')) {
    define('IN_EDUCATION_PAGE', true);
}

$basePath = '/';
$bp = '/';
require_once __DIR__ . '/../../config/business-leads.php';
$HBContact = require __DIR__ . '/../../config/contact.php';

$categorySlug = 'education';
$category = get_business_lead_category('education');

if (!$category) {
    // Fallback safety if config key missing
    $category = [
        'name' => 'Education & EdTech',
        'badge' => 'EDUCATION BUSINESS LEADS & ENROLLMENT AUTOMATION',
        'color' => '#10b981',
        'svg' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>',
        'datasets' => [],
        'problems' => [],
        'solutions' => []
    ];
}

$pageTitle = 'WhatsApp for EdTech, Schools, Colleges & Institutes | Verified Leads & Automation | InboxWa';
$pageDescription = 'Boost admissions and student learning with official WhatsApp Business API for EdTech. Automate enrollments, class reminders, exam hall tickets, fee payments, and 24/7 student counseling.';
$canonicalUrl = 'https://inboxwa.com/business-leads/education/';
$ogImage = '/assets/images/og-image.png';

$waNumber = $HBContact['data_marketplace_whatsapp'] ?? '918050854445';
$defaultWaMsg = urlencode("Hi InboxWa team, I would like to request verified student & institute leads and EdTech WhatsApp automation for Education. Please share details.");

include __DIR__ . '/../../includes/header.php';
?>

<link rel="stylesheet" href="/assets/css/business-leads.css?v=5">
<link rel="stylesheet" href="/assets/css/education.css?v=52">
<link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=7">

<div class="bl-page">
  <!-- BREADCRUMB -->
  <nav class="bl-breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span class="bl-breadcrumb-sep">/</span>
    <a href="/business-leads/">Business Leads</a>
    <span class="bl-breadcrumb-sep">/</span>
    <span style="color:#0f172a;font-weight:600;">Education &amp; EdTech</span>
  </nav>

  <!-- HERO SECTION WITH LIVE 6-FLOW SIMULATION -->
  <section class="edu-hero" aria-label="Education &amp; EdTech Solution Hero">
    <div class="container">
      <div class="edu-grid">
        <div class="edu-hero-copy">
          <div class="edu-badge">
            <span class="edu-badge-dot"></span>
            Meta Official Partner · Education &amp; EdTech Solutions
          </div>
          <h1>Power Up Your EdTech &amp; Institution Growth with <span class="grad">WhatsApp</span></h1>
          <p class="edu-lead">Simplify admissions instantly, deliver class reminders, share exam updates, collect tuition fees, and engage students &amp; parents with ease! Built for schools, colleges, coaching institutes, and EdTech platforms.</p>
          
          <div class="edu-ctas">
            <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo $defaultWaMsg; ?>" target="_blank" rel="noopener" class="btn btn-primary btn-lg">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block;vertical-align:middle;margin-right:6px;"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
              <span>Request Education Data</span>
            </a>
            <a href="/auth/register" class="btn-ghost-light" style="display:inline-flex;align-items:center;text-decoration:none;">
              <span>Start 14-Day Free Trial</span>
            </a>
            <a href="#datasets" class="btn-ghost-light" style="display:inline-flex;align-items:center;text-decoration:none;">
              <span>Explore Datasets</span>
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left:5px;"><polyline points="6 9 12 15 18 9"/></svg>
            </a>
          </div>

          <div style="display:flex;align-items:center;gap:14px;color:rgba(255,255,255,0.75);font-size:0.84rem;flex-wrap:wrap;margin-bottom:1.5rem;">
            <span style="display:inline-flex;align-items:center;gap:5px;">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              100% WhatsApp Verified
            </span>
            <span style="display:inline-flex;align-items:center;gap:5px;">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Instant Excel/CSV Download
            </span>
            <span style="display:inline-flex;align-items:center;gap:5px;">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Zero-Ban Official Meta API
            </span>
          </div>

          <!-- Student Name Personalization Interactive Box -->
          <div class="edu-name-input-wrap">
            <span><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg> Try Live Demo As:</span>
            <input type="text" id="edu-student-name" value="Rahul" placeholder="Enter student name..." aria-label="Enter student name for simulation">
            <div class="edu-preset-names">
              <button type="button" data-name="Rahul">Rahul</button>
              <button type="button" data-name="Ananya">Ananya</button>
              <button type="button" data-name="Priya">Priya</button>
            </div>
          </div>

          <div class="edu-sim-tabs" id="edu-tabs" role="tablist" aria-label="Education WhatsApp simulations">
            <button type="button" class="is-active" data-flow="admission">1. Admission Inquiry</button>
            <button type="button" data-flow="course">2. Fee &amp; Syllabus</button>
            <button type="button" data-flow="counselling">3. 1-on-1 Counselling</button>
            <button type="button" data-flow="docs">4. Document Upload</button>
            <button type="button" data-flow="fee">5. Fee Reminders</button>
            <button type="button" data-flow="results">6. Exam Results</button>
          </div>
        </div>

        <div class="edu-phone-stage">
          <div class="edu-float edu-float-1">
            <b><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg> Instant Qualification</b>
            Course &amp; score matched in &lt; 30s
          </div>
          <div class="edu-float edu-float-2">
            <b><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> Slot Confirmed</b>
            1-on-1 Counselling booked
          </div>
          <div class="edu-float edu-float-3">
            <b><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg> Fee Collected</b>
            Receipt sent via WhatsApp UPI
          </div>

          <div class="edu-phone" aria-label="Live education WhatsApp simulation screen">
            <div class="edu-phone-notch"></div>
            <div class="edu-phone-screen">
              <div class="edu-wa-head">
                <div class="edu-wa-av">EDU</div>
                <div>
                  <strong>Apex University Desk</strong>
                  <small><span class="edu-live-dot"></span> Official WhatsApp API</small>
                </div>
              </div>
              <div class="edu-wa-body" id="edu-wa-body">
                <div class="edu-typing" id="edu-typing"><i></i><i></i><i></i></div>
                <div class="edu-chips" id="edu-chips"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 2026 STATS & IMPACT METRICS BAR -->
  <section class="edu-metrics-bar" aria-label="Key Performance Indicators">
    <div class="container">
      <div class="edu-metrics-grid">
        <div class="edu-metric-item">
          <div class="edu-metric-val">98%</div>
          <div class="edu-metric-lbl">WhatsApp Message Open Rate</div>
        </div>
        <div class="edu-metric-item">
          <div class="edu-metric-val">45 - 60%</div>
          <div class="edu-metric-lbl">Click-Through Rate on Alerts</div>
        </div>
        <div class="edu-metric-item">
          <div class="edu-metric-val">2.60Bn+</div>
          <div class="edu-metric-lbl">Global WhatsApp Active Users</div>
        </div>
        <div class="edu-metric-item">
          <div class="edu-metric-val">43%</div>
          <div class="edu-metric-lbl">Higher Admission Conversion Rate</div>
        </div>
        <div class="edu-metric-item">
          <div class="edu-metric-val">61%</div>
          <div class="edu-metric-lbl">Reduction in Manual Admin Workload</div>
        </div>
      </div>
    </div>
  </section>

  <!-- UNDERSTAND WHATSAPP FOR EDTECH (Getgabs Cloned & Enhanced) -->
  <section class="edu-overview-section">
    <div class="container">
      <div class="edu-overview-box">
        <span class="bl-badge-pill" style="background:rgba(16,185,129,0.1);color:#059669;border-color:rgba(16,185,129,0.25);">Official Meta Cloud API</span>
        <h2 style="font-size:clamp(2rem, 3.5vw, 2.75rem);font-weight:800;color:#0F172A;margin-top:0.75rem;">Understand WhatsApp for EdTech</h2>
        <p class="edu-overview-lead">
          WhatsApp for EdTech is the use of the official <strong>WhatsApp Business API</strong> to streamline conversations between educational institutions, prospective students, and parents. It enables schools, coaching institutes, universities, and EdTech platforms to dispatch exam notifications, syllabus brochures, application status updates, and lecture reminders instantly in real-time. Also, it offers 24/7 intelligent query resolution via an AI counselor. Unlike SMS or email, WhatsApp offers instant message delivery, higher engagement, and deeply personalized conversations.
        </p>

        <div class="edu-overview-features">
          <div class="edu-overview-pill">
            <div class="edu-overview-pill-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
            </div>
            <h4>Real-time 2-Way Chat</h4>
            <p>Students and parents can ask questions and receive instant answers without downloading secondary mobile apps.</p>
          </div>

          <div class="edu-overview-pill">
            <div class="edu-overview-pill-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4"/><line x1="8" y1="16" x2="8.01" y2="16"/><line x1="16" y1="16" x2="16.01" y2="16"/></svg>
            </div>
            <h4>24/7 AI Counselor</h4>
            <p>Qualify applicant eligibility, match majors, and share curriculum PDFs automatically 24 hours a day.</p>
          </div>

          <div class="edu-overview-pill">
            <div class="edu-overview-pill-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            </div>
            <h4>Automated Governance</h4>
            <p>Keep track of fee installment due dates, exam schedules, and attendance alerts with verifiable audit logs.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6 CORE WHATSAPP USE CASES FOR EDTECH (Getgabs Cloned & Fully Rendered) -->
  <section class="edu-usecase-section">
    <div class="container">
      <div class="section-header text-center" style="margin-bottom: 4rem;">
        <span class="bl-badge-pill" style="background:rgba(37,99,235,0.1);color:#2563eb;border-color:rgba(37,99,235,0.25);">End-to-End Application &amp; Student Operations</span>
        <h2 style="font-size: clamp(2rem, 3.5vw, 2.75rem); font-weight: 800; color:#0F172A; margin-top:0.75rem;">WhatsApp Use Cases for EdTech</h2>
        <p class="lead" style="color:#64748B;max-width:720px;margin:0 auto;">Transform student admissions, class alerts, hall tickets, fee collections &amp; parent communications natively on WhatsApp.</p>
      </div>

      <!-- Use Case 1: Take Admission & Enrollment -->
      <div class="edu-usecase-row reverse">
        <div class="edu-usecase-content">
          <h3>Take Admission &amp; Enrollment</h3>
          <ul class="edu-usecase-list">
            <li>Quickly send eligibility criteria, course details, and digital brochures in high resolution.</li>
            <li>Automation for offering instant responses to admission FAQs without any human delays.</li>
            <li>Share direct interactive application links and confirm provisional enrollment in real-time.</li>
            <li>Send the latest updates on application status to keep students informed and engaged.</li>
          </ul>
          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to enquire about WhatsApp Take Admission & Enrollment automation.'); ?>" target="_blank" rel="noopener" class="btn-enquiry">
            <span>Enquiry Now</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="margin-left:6px;"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>

        <div class="edu-usecase-img-box">
          <img src="/assets/images/edtech_admission_banner.jpg" alt="WhatsApp Take Admission &amp; Enrollment - Student Admission Flow" loading="lazy">
        </div>
      </div>

      <!-- Use Case 2: Automated Reminders (Classes & Deadlines) -->
      <div class="edu-usecase-row">
        <div class="edu-usecase-content">
          <h3>Automated Reminders (Classes &amp; Deadlines)</h3>
          <ul class="edu-usecase-list">
            <li>Remind students of upcoming live lectures, webinars, workshops, and lab sessions.</li>
            <li>Post deadlines for assignment submission, project proposals, and quiz submissions on chat.</li>
            <li>Instantly notify students and parents of any last-minute changes or faculty rescheduling.</li>
            <li>Alert students about fee due dates, re-enrollment windows, and scholarship test dates.</li>
          </ul>
          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to enquire about Automated Class & Deadline Reminders on WhatsApp.'); ?>" target="_blank" rel="noopener" class="btn-enquiry">
            <span>Enquiry Now</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="margin-left:6px;"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>

        <div class="edu-usecase-img-box">
          <img src="/assets/images/edtech_reminders_banner.jpg" alt="WhatsApp Automated Reminders - Classes, Timetables &amp; Deadlines" loading="lazy">
        </div>
      </div>

      <!-- Use Case 3: Exam & Results Notifications -->
      <div class="edu-usecase-row reverse">
        <div class="edu-usecase-content">
          <h3>Exam &amp; Results Notifications</h3>
          <ul class="edu-usecase-list">
            <li>Send exam timetables, digital hall tickets with QR verification, and classroom seating charts.</li>
            <li>Inform candidates immediately regarding any unexpected center updates or postponements.</li>
            <li>Share official exam scorecards, semester grade reports, and percentiles privately.</li>
            <li>Send tailored study tips, past exam papers, and revision notes prior to test dates.</li>
          </ul>
          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to enquire about WhatsApp Exam Notifications & Hall Tickets.'); ?>" target="_blank" rel="noopener" class="btn-enquiry">
            <span>Enquiry Now</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="margin-left:6px;"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>

        <div class="edu-usecase-img-box">
          <img src="/assets/images/edtech_class_reminders.jpg" alt="WhatsApp Exam Timetables &amp; Hall Tickets Dispatches" loading="lazy">
        </div>
      </div>

      <!-- Use Case 4: Parental Communication -->
      <div class="edu-usecase-row">
        <div class="edu-usecase-content">
          <h3>Parental Communication</h3>
          <ul class="edu-usecase-list">
            <li>Provide real-time updates on student daily attendance, lecture skips, and academic progress.</li>
            <li>Send reminders about forthcoming events, annual sports days, and parent-teacher conferences (PTM).</li>
            <li>Inform parents regarding co-curricular milestones, medals, certificates, and student accolades.</li>
            <li>Send term report cards, digital consent slips, and field trip permission forms directly on chat.</li>
          </ul>
          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to enquire about WhatsApp Parental Communication workflows.'); ?>" target="_blank" rel="noopener" class="btn-enquiry">
            <span>Enquiry Now</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="margin-left:6px;"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>

        <div class="edu-usecase-img-box">
          <img src="/assets/images/edtech_parent_updates.jpg" alt="WhatsApp Parental Communication &amp; Progress Updates" loading="lazy">
        </div>
      </div>

      <!-- Use Case 5: 24/7 Student WhatsApp Chatbot Support -->
      <div class="edu-usecase-row reverse">
        <div class="edu-usecase-content">
          <h3>24/7 Student WhatsApp Chatbot Support</h3>
          <ul class="edu-usecase-list">
            <li>Automatically respond to repetitive queries on course syllabus, eligibility, timings, and hostel fees.</li>
            <li>Dispatch learning resources, lecture notes, video recordings, and study schedules on demand.</li>
            <li>Offer round-the-clock guidance for academic questions, assignment guidelines, and exam centers.</li>
            <li>Assist with LMS portal logins, password resets, and technical support without human staffing.</li>
          </ul>
          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to enquire about 24/7 WhatsApp AI Chatbot for our institute.'); ?>" target="_blank" rel="noopener" class="btn-enquiry">
            <span>Enquiry Now</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="margin-left:6px;"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>

        <div class="edu-usecase-img-box">
          <img src="/assets/images/capabilities/ai-chat-assistant.png" alt="24/7 WhatsApp AI Chatbot Assistant for Students" loading="lazy">
        </div>
      </div>

      <!-- Use Case 6: Human Agent Support with Shared Inbox -->
      <div class="edu-usecase-row">
        <div class="edu-usecase-content">
          <h3>Human Agent Support with Shared Inbox</h3>
          <ul class="edu-usecase-list">
            <li>Let the AI bot resolve standard FAQs and seamlessly escalate high-intent student leads to live counselors.</li>
            <li>Enable faculty, counselors, accounts, and admissions teams to collaborate within a unified team inbox.</li>
            <li>Provide personalized 1-on-1 career guidance, scholarship advisement, and fee concessions.</li>
            <li>Deliver mentorship touchpoints connecting prospective applicants directly with department deans.</li>
          </ul>
          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to enquire about WhatsApp Multi-Agent Shared Team Inbox.'); ?>" target="_blank" rel="noopener" class="btn-enquiry">
            <span>Enquiry Now</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="margin-left:6px;"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>

        <div class="edu-usecase-img-box">
          <img src="/assets/images/edtech_shared_inbox.jpg" alt="InboxWa WhatsApp Shared Team Inbox for Admissions" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- WHY USE WHATSAPP BUSINESS API FOR EDTECH BANNER -->
  <section class="container" style="margin-bottom:5rem;">
    <div class="edu-why-use-banner">
      <div class="edu-why-use-copy">
        <span class="bl-badge-pill" style="background:rgba(255,255,255,0.15);color:#A5F3FC;border-color:rgba(255,255,255,0.25);">Official Meta Cloud Partner</span>
        <h3>Why Use WhatsApp Business API for EdTech?</h3>
        <p>WhatsApp is revolutionizing how leading educational institutions, test-prep coaching centers, and colleges connect with students and parents. It makes communication personal, immediate, and 5x more responsive than email or SMS.</p>
        
        <div class="edu-why-use-points">
          <div class="edu-why-use-point">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span><strong>Instant Trust:</strong> Meta Green/Blue verified badge builds institutional credibility immediately.</span>
          </div>
          <div class="edu-why-use-point">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span><strong>Zero Spam &amp; No Ban Risk:</strong> Direct official Meta Cloud API eliminates account suspension concerns.</span>
          </div>
          <div class="edu-why-use-point">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span><strong>Native In-Chat Forms &amp; UPI:</strong> Complete registration and fee collection without leaving WhatsApp.</span>
          </div>
        </div>
      </div>

      <div style="text-align:center;">
        <img src="/assets/images/edtech_admission_journey.jpg" alt="WhatsApp EdTech Verification Platform" style="width:100%;max-width:440px;border-radius:20px;border:1px solid rgba(255,255,255,0.15);box-shadow:0 15px 35px rgba(0,0,0,0.3);" loading="lazy">
      </div>
    </div>
  </section>

  <!-- AVAILABLE DATASETS CATALOG (Preserved from existing website) -->
  <section class="edu-datasets-section" id="datasets">
    <div class="container">
      <div class="section-header text-center">
        <span class="bl-badge-pill" style="background:#f1f5f9;color:#0f172a;border-color:#e2e8f0;">Verified Datasets Catalog</span>
        <h2 style="font-size: clamp(2rem, 3.5vw, 2.75rem); font-weight: 800; color:#0F172A;margin-top:0.75rem;">Available Data for Education &amp; EdTech</h2>
        <p class="lead" style="color:#64748B;max-width:740px;margin:0 auto;">Pan-India verified mobile contacts of school principals, coaching institute directors, and high-intent student applicants.</p>
      </div>

      <div class="edu-datasets-grid">
        <?php foreach ($category['datasets'] as $dset): 
          $dsetWaMsg = urlencode("Hi InboxWa, I want to explore and request the verified dataset: '{$dset['title']}' under Education. Please share sample records and pricing.");
        ?>
        <article class="edu-dataset-card">
          <div>
            <div class="edu-dataset-top">
              <span class="edu-dataset-badge">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                Verified Active
              </span>
              <span class="edu-dataset-count"><?php echo htmlspecialchars($dset['count']); ?></span>
            </div>

            <h3><?php echo htmlspecialchars($dset['title']); ?></h3>
            <div class="edu-dataset-coverage">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              <span>Coverage: <?php echo htmlspecialchars($dset['coverage']); ?></span>
            </div>

            <div class="edu-dataset-fields-box">
              <div class="edu-dataset-fields-title">Data Fields Included</div>
              <div class="edu-dataset-fields-tags">
                <?php foreach ($dset['fields'] as $fld): ?>
                  <span class="edu-field-tag"><?php echo htmlspecialchars($fld); ?></span>
                <?php endforeach; ?>
              </div>
            </div>

            <p style="font-size:0.84rem;color:#64748b;margin-bottom:1.25rem;line-height:1.5;">
              <strong style="color:#334155;">Ideal for:</strong> <?php echo htmlspecialchars($dset['audience']); ?>
            </p>
          </div>

          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo $dsetWaMsg; ?>" target="_blank" rel="noopener" class="edu-dataset-btn">
            <span>Explore Dataset &amp; Sample</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 5-STAGE STUDENT & PARENT LIFECYCLE JOURNEY -->
  <section class="edu-journey-section">
    <div class="container">
      <div class="section-header text-center">
        <span class="bl-badge-pill" style="background:rgba(124,58,237,0.1);color:#7c3aed;border-color:rgba(124,58,237,0.25);">End-to-End Workflow</span>
        <h2 style="font-size: clamp(2rem, 3.5vw, 2.75rem); font-weight: 800; color:#0F172A;margin-top:0.75rem;">The Complete 5-Stage Student &amp; Parent Journey Flow</h2>
        <p class="lead" style="color:#64748B;max-width:720px;margin:0 auto;">From initial inquiry to admission, class alerts, semester exams, and alumni onboarding — automate every touchpoint on WhatsApp.</p>
      </div>

      <div class="edu-journey-5grid" style="margin-top:3.5rem;">
        <!-- Stage 1 -->
        <div class="edu-journey-card">
          <div class="edu-step-badge">01</div>
          <h3>Capture &amp; Qualify</h3>
          <p>Convert prospective student leads from Meta Ads, Google Search, and website QR codes into instant WhatsApp chats.</p>
          <ul class="edu-journey-list">
            <li>Click-to-WhatsApp Ad Router</li>
            <li>AI Major &amp; Eligibility Matcher</li>
            <li>24/7 Automated Lead Qualification</li>
          </ul>
        </div>

        <!-- Stage 2 -->
        <div class="edu-journey-card">
          <div class="edu-step-badge">02</div>
          <h3>Admission &amp; Verification</h3>
          <p>Guide applicants through native WhatsApp application forms, 10th/12th document uploads, and counseling scheduling.</p>
          <ul class="edu-journey-list">
            <li>Interactive Application Forms</li>
            <li>Instant Document Verification</li>
            <li>1-on-1 Counselor Booking</li>
          </ul>
        </div>

        <!-- Stage 3 -->
        <div class="edu-journey-card">
          <div class="edu-step-badge">03</div>
          <h3>Class Reminders &amp; Support</h3>
          <p>Keep enrolled students engaged with automated class alerts, assignment deadlines, and AI-powered FAQ support.</p>
          <ul class="edu-journey-list">
            <li>Live Lecture &amp; Webinar Alerts</li>
            <li>Assignment Deadline Alerts</li>
            <li>24/7 Student AI Assistant</li>
          </ul>
        </div>

        <!-- Stage 4 -->
        <div class="edu-journey-card">
          <div class="edu-step-badge">04</div>
          <h3>Exams &amp; Results</h3>
          <p>Dispatch exam timetables, digital hall tickets, seating plans, and official result report cards to students &amp; parents.</p>
          <ul class="edu-journey-list">
            <li>Exam Timetables &amp; Hall Tickets</li>
            <li>Confidential Result Dispatches</li>
            <li>Targeted Exam Prep Materials</li>
          </ul>
        </div>

        <!-- Stage 5 -->
        <div class="edu-journey-card">
          <div class="edu-step-badge">05</div>
          <h3>Fee Reminders &amp; Parents</h3>
          <p>Automate tuition fee installment reminders with direct payment links, parent PTM invites, and attendance warnings.</p>
          <ul class="edu-journey-list">
            <li>Automated Fee Due Reminders</li>
            <li>WhatsApp UPI Payment Links</li>
            <li>Real-time Parent Attendance Alerts</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ALL-IN-ONE FEATURES OF WHATSAPP BUSINESS API (10 Features Grid from Getgabs) -->
  <section class="edu-solutions-section">
    <div class="container">
      <div class="section-header text-center">
        <span class="bl-badge-pill" style="background:rgba(16,185,129,0.1);color:#059669;border-color:rgba(16,185,129,0.25);">Meta Cloud Platform</span>
        <h2 style="font-size: clamp(2rem, 3.5vw, 2.75rem); font-weight: 800; color:#0F172A;margin-top:0.75rem;">All-in-One Features of WhatsApp Business API</h2>
        <p class="lead" style="color:#64748B;max-width:720px;margin:0 auto;">Transform your institutional operations, student admissions, and parent engagement with comprehensive WhatsApp automation tools.</p>
      </div>

      <div class="edu-solutions-grid">
        <div class="edu-solution-card">
          <div class="edu-sol-ico" style="color:#10b981;">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"/></svg>
          </div>
          <h3>WhatsApp Broadcasting</h3>
          <p>Send bulk tailored broadcasts for open-house announcements, application deadlines, and exam schedules to thousands of contacts with zero ban risk.</p>
        </div>

        <div class="edu-solution-card">
          <div class="edu-sol-ico" style="color:#7c3aed;">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4"/><line x1="8" y1="16" x2="8.01" y2="16"/><line x1="16" y1="16" x2="16.01" y2="16"/></svg>
          </div>
          <h3>WhatsApp AI Chatbot</h3>
          <p>Automate student inquiries 24/7. Handle course FAQs, hostel queries, fee structures, and syllabus requests instantly without human delay.</p>
        </div>

        <div class="edu-solution-card">
          <div class="edu-sol-ico" style="color:#2563eb;">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg>
          </div>
          <h3>WhatsApp Forms &amp; Flows</h3>
          <p>Collect student lead details, application form fields, marksheet uploads, and parent feedback directly inside interactive WhatsApp chat forms.</p>
        </div>

        <div class="edu-solution-card">
          <div class="edu-sol-ico" style="color:#059669;">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/></svg>
          </div>
          <h3>Meta Verified Blue Tick</h3>
          <p>Establish high credibility and student trust with Meta's official green/blue verified badge on your institution's WhatsApp Business profile.</p>
        </div>

        <div class="edu-solution-card">
          <div class="edu-sol-ico" style="color:#d97706;">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
          </div>
          <h3>Click-to-WhatsApp Ads</h3>
          <p>Convert Instagram, Facebook, and Google ad traffic directly into active WhatsApp admission conversations with up to 5x higher conversion.</p>
        </div>

        <div class="edu-solution-card">
          <div class="edu-sol-ico" style="color:#10b981;">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
          </div>
          <h3>In-Chat Fee Payments</h3>
          <p>Enable parents and students to pay registration fees, hostel deposits, and tuition installments securely via WhatsApp UPI and cards.</p>
        </div>

        <div class="edu-solution-card">
          <div class="edu-sol-ico" style="color:#6366f1;">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>
          </div>
          <h3>WhatsApp Drip Campaigns</h3>
          <p>Automate multi-day message sequences to nurture prospective student leads from initial inquiry down to final admission confirmation.</p>
        </div>

        <div class="edu-solution-card">
          <div class="edu-sol-ico" style="color:#ec4899;">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>WhatsApp Team Inbox</h3>
          <p>Collaborate across faculty and admission teams in a single central workspace with department routing, tags, and internal notes.</p>
        </div>

        <div class="edu-solution-card">
          <div class="edu-sol-ico" style="color:#0284c7;">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
          </div>
          <h3>WhatsApp Interactive</h3>
          <p>Engage students with interactive buttons, drop-down selection lists, and quick reply cards that make inquiries fast and frictionless.</p>
        </div>

        <div class="edu-solution-card">
          <div class="edu-sol-ico" style="color:#8b5cf6;">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
          </div>
          <h3>WhatsApp Course Catalog</h3>
          <p>Display your academic programs, degree specializations, and professional certifications directly inside the native WhatsApp catalog.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW INBOXWA IS DIFFERENT FROM OTHER BSPS (Direct Cloned & Enhanced from Getgabs) -->
  <section class="edu-bsp-section">
    <div class="container">
      <div class="section-header text-center">
        <span class="bl-badge-pill" style="background:rgba(16,185,129,0.1);color:#059669;border-color:rgba(16,185,129,0.25);">Transparent &amp; Superior</span>
        <h2 style="font-size: clamp(2rem, 3.5vw, 2.75rem); font-weight: 800; color:#0F172A;margin-top:0.75rem;">How InboxWa is Different from Other Business Solution Providers (BSPs)?</h2>
        <p class="lead" style="color:#64748B;max-width:760px;margin:0 auto;">InboxWa delivers an affordable, secure, and feature-packed WhatsApp Business solution built specifically for educational institutions and high-volume student outreach.</p>
      </div>

      <div class="edu-bsp-grid">
        <div class="edu-bsp-card">
          <div class="edu-bsp-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
          </div>
          <div class="edu-bsp-info">
            <h4>No Markup Charges</h4>
            <p>Unbeatable transparent rates with 0% markup on official Meta WhatsApp conversation costs.</p>
          </div>
        </div>

        <div class="edu-bsp-card">
          <div class="edu-bsp-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
          </div>
          <div class="edu-bsp-info">
            <h4>No Set-Up Charge</h4>
            <p>Instant activation and zero onboarding fees. Get up and running in minutes without hidden costs.</p>
          </div>
        </div>

        <div class="edu-bsp-card">
          <div class="edu-bsp-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
          </div>
          <div class="edu-bsp-info">
            <h4>Direct Meta Cloud API Access</h4>
            <p>Ultra-low latency message delivery backed directly by Meta’s official global Cloud infrastructure.</p>
          </div>
        </div>

        <div class="edu-bsp-card">
          <div class="edu-bsp-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <div class="edu-bsp-info">
            <h4>Instant Approval &amp; Quick Onboarding</h4>
            <p>Automated Meta Business Manager verification guidance with phone number approval in seconds.</p>
          </div>
        </div>

        <div class="edu-bsp-card">
          <div class="edu-bsp-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
          </div>
          <div class="edu-bsp-info">
            <h4>Competitive Pricing Plans</h4>
            <p>Flexible billing options designed for single coaching centers to multi-campus university networks.</p>
          </div>
        </div>

        <div class="edu-bsp-card">
          <div class="edu-bsp-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <div class="edu-bsp-info">
            <h4>Secure &amp; 99.99% Scalable</h4>
            <p>Enterprise-grade encryption protecting student records with guaranteed 99.99% system uptime.</p>
          </div>
        </div>

        <div class="edu-bsp-card">
          <div class="edu-bsp-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
          </div>
          <div class="edu-bsp-info">
            <h4>Custom LMS &amp; CRM Integrations</h4>
            <p>Seamless two-way sync with LeadSquared, Salesforce Education Cloud, Zoho, Moodle, Canvas, and ERPs.</p>
          </div>
        </div>

        <div class="edu-bsp-card">
          <div class="edu-bsp-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          </div>
          <div class="edu-bsp-info">
            <h4>24/7 Dedicated Human Assistance</h4>
            <p>Priority technical support, campaign strategy assistance, and dedicated account manager on standby.</p>
          </div>
        </div>
      </div>

      <div style="text-align:center;margin-top:3rem;">
        <a href="/auth/register" class="btn btn-primary btn-lg" style="padding:1rem 2.5rem;">Start Free with InboxWa Today</a>
      </div>
    </div>
  </section>

  <!-- DEPARTMENT-WISE USES OF WHATSAPP PLATFORM (Getgabs Cloned & Enhanced) -->
  <section class="edu-dept-section">
    <div class="container">
      <div class="section-header text-center">
        <span class="bl-badge-pill" style="background:rgba(37,99,235,0.1);color:#2563eb;border-color:rgba(37,99,235,0.25);">Institutional Efficiency</span>
        <h2 style="font-size: clamp(2rem, 3.5vw, 2.75rem); font-weight: 800; color:#0F172A;margin-top:0.75rem;">Department Wise Uses of WhatsApp Business Platform</h2>
        <p class="lead" style="color:#64748B;max-width:740px;margin:0 auto;">See how InboxWa helps institutions boost student marketing, streamline admissions, and elevate student services.</p>
      </div>

      <div class="edu-dept-grid">
        <!-- Marketing -->
        <div class="edu-dept-card">
          <div class="edu-dept-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"/></svg>
          </div>
          <h3>WhatsApp for Marketing</h3>
          <p>Reach prospective students and parents instantly with high-engagement broadcasts, open-day announcements, and personalized scholarship offers.</p>
          <ul class="edu-dept-list">
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Broadcast open-house invitations</li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Click-to-WhatsApp Meta &amp; Google Ads</li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Automated event &amp; webinar alerts</li>
          </ul>
          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to discuss WhatsApp for Education Marketing.'); ?>" target="_blank" rel="noopener" class="bl-dataset-btn" style="margin-top:auto;">
            <span>Learn More &amp; Setup</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>

        <!-- Sales & Admissions -->
        <div class="edu-dept-card">
          <div class="edu-dept-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><polyline points="16 11 18 13 22 9"/></svg>
          </div>
          <h3>WhatsApp for Admissions</h3>
          <p>Convert applicant inquiries into confirmed enrollments with automated qualification workflows, lead routing, and fast counselor follow-ups.</p>
          <ul class="edu-dept-list">
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> In-chat eligibility qualification</li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> 1-on-1 counseling appointment bookings</li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Document upload &amp; fee collection</li>
          </ul>
          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to discuss WhatsApp for Admissions & Counseling.'); ?>" target="_blank" rel="noopener" class="bl-dataset-btn" style="margin-top:auto;">
            <span>Learn More &amp; Setup</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>

        <!-- Support & Student Services -->
        <div class="edu-dept-card">
          <div class="edu-dept-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          </div>
          <h3>WhatsApp for Student Support</h3>
          <p>Provide 24/7 student &amp; parent support with instant automated replies, syllabus dispatches, and multi-department ticket routing.</p>
          <ul class="edu-dept-list">
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> 24/7 syllabus &amp; fee queries</li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> LMS login &amp; password reset assistance</li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Automated parent attendance notifications</li>
          </ul>
          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to discuss WhatsApp for Student Support.'); ?>" target="_blank" rel="noopener" class="bl-dataset-btn" style="margin-top:auto;">
            <span>Learn More &amp; Setup</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- LIVE CRM ADMISSION PIPELINE SHOWCASE -->
  <section class="edu-crm-section">
    <div class="container">
      <div class="section-header text-center">
        <h2 style="color:#fff;font-size:clamp(2rem, 3.5vw, 2.75rem);font-weight:800;">Centralized Admission Pipeline &amp; Lead Workspace</h2>
        <p class="lead" style="color:rgba(255,255,255,.75);max-width:700px;margin:0 auto;">Track prospective student leads across every stage of the enrollment funnel with full visibility for counselors and directors.</p>
      </div>

      <div class="edu-crm-container">
        <div class="edu-crm-header">
          <div class="edu-crm-title">
            <span><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></span> 2026 Student Admission Tracker (Live CRM)
          </div>
          <div class="edu-crm-filter-btns">
            <button type="button" class="active" data-dept="all">All Departments</button>
            <button type="button" data-dept="engineering">Engineering</button>
            <button type="button" data-dept="mba">Business / MBA</button>
            <button type="button" data-dept="medical">Medical</button>
            <button type="button" data-dept="edtech">Online EdTech</button>
          </div>
        </div>

        <div style="overflow-x:auto">
          <table class="edu-crm-table">
            <thead>
              <tr>
                <th>Student Name</th>
                <th>Program</th>
                <th>Status Stage</th>
                <th>Assigned Counselor</th>
                <th>Next Automated Action</th>
              </tr>
            </thead>
            <tbody>
              <tr data-dept="engineering">
                <td><b>Rohan Sharma</b></td>
                <td>B.Tech Computer Science</td>
                <td><span class="edu-pill new">New Lead</span></td>
                <td>Priya Sharma</td>
                <td>Send Syllabus PDF via WhatsApp</td>
              </tr>
              <tr data-dept="mba">
                <td><b>Ananya Verma</b></td>
                <td>MBA Marketing &amp; Finance</td>
                <td><span class="edu-pill qual">Qualified</span></td>
                <td>Vikram Malhotra</td>
                <td>Schedule 1-on-1 Counseling Call</td>
              </tr>
              <tr data-dept="mba">
                <td><b>Kabir Mehta</b></td>
                <td>BBA International Business</td>
                <td><span class="edu-pill visit">Campus Visit Booked</span></td>
                <td>Neha Gupta</td>
                <td>Campus Tour Reminder (Tomorrow 10 AM)</td>
              </tr>
              <tr data-dept="edtech">
                <td><b>Sneha Kulkarni</b></td>
                <td>Online Full-Stack AI Bootcamp</td>
                <td><span class="edu-pill app">Application Submitted</span></td>
                <td>Priya Sharma</td>
                <td>Verify 12th Marksheet PDF Upload</td>
              </tr>
              <tr data-dept="engineering">
                <td><b>Aarav Patel</b></td>
                <td>B.Tech Mechanical</td>
                <td><span class="edu-pill enrolled">Enrolled &amp; Fee Paid</span></td>
                <td>Accounts Team</td>
                <td>Dispatch Welcome Kit &amp; LMS Login</td>
              </tr>
              <tr data-dept="medical">
                <td><b>Dr. Ritu Deshmukh</b></td>
                <td>MBBS / NEET PG Test Prep</td>
                <td><span class="edu-pill qual">Qualified</span></td>
                <td>Dr. Sameer Khan</td>
                <td>Send NEET Mock Test Schedule on WhatsApp</td>
              </tr>
              <tr data-dept="edtech">
                <td><b>Devansh Rao</b></td>
                <td>Data Science &amp; ML Masterclass</td>
                <td><span class="edu-pill enrolled">Enrolled &amp; Fee Paid</span></td>
                <td>EdTech Ops</td>
                <td>Trigger WhatsApp LMS Access &amp; Community Invite</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- INTERACTIVE ROI CALCULATOR -->
  <section class="edu-roi-section">
    <div class="container">
      <div class="section-header text-center">
        <span class="bl-badge-pill" style="background:rgba(37,99,235,0.1);color:#2563eb;border-color:rgba(37,99,235,0.25);">Growth Forecaster</span>
        <h2 style="font-size:clamp(2rem, 3.5vw, 2.75rem);font-weight:800;color:#0F172A;margin-top:0.75rem;">Estimate Your Admission Growth &amp; Admin Time Savings</h2>
        <p class="lead" style="color:#64748B;max-width:700px;margin:0 auto;">Calculate how much your school, college, or EdTech platform can gain by switching to InboxWa automation.</p>
      </div>

      <div class="edu-roi-card">
        <div class="edu-roi-controls">
          <label for="edu-roi-slider">
            <span>Monthly Student Inquiries:</span>
            <b id="edu-roi-val">500 / mo</b>
          </label>
          <input type="range" id="edu-roi-slider" class="edu-roi-slider" min="100" max="5000" step="100" value="500">
        </div>

        <div class="edu-roi-results">
          <div class="edu-roi-res-box">
            <b id="edu-roi-extra">+215 Students</b>
            <span>Additional Annual Admissions</span>
          </div>
          <div class="edu-roi-res-box">
            <b id="edu-roi-hours">125 Hrs/Mo</b>
            <span>Counseling Time Saved</span>
          </div>
          <div class="edu-roi-res-box">
            <b id="edu-roi-rev">₹1.6 Lakhs</b>
            <span>Est. Fee Revenue Growth</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- COMPARISON TABLE: TRADITIONAL VS INBOXWA -->
  <section class="edu-compare-section">
    <div class="container">
      <div class="section-header text-center">
        <span class="bl-badge-pill" style="background:#fee2e2;color:#b91c1c;border-color:#fecaca;">The Quantitative Edge</span>
        <h2 style="font-size:clamp(2rem, 3.5vw, 2.75rem);font-weight:800;color:#0F172A;margin-top:0.75rem;">InboxWa vs. Traditional Admission &amp; Communication Methods</h2>
        <p class="lead" style="color:#64748B;max-width:700px;margin:0 auto;">See how official WhatsApp automation outpaces legacy emails, paper forms, and slow phone calls.</p>
      </div>

      <div class="edu-compare-table-wrap">
        <table class="edu-compare-table">
          <thead>
            <tr>
              <th>Key Metric</th>
              <th>Traditional Methods (Email / Call / SMS)</th>
              <th>InboxWa WhatsApp Automation</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>First Response Time</td>
              <td>24 to 48 Hours via Email</td>
              <td>Instant (&lt; 30 Seconds) via AI Bot</td>
            </tr>
            <tr>
              <td>Student Engagement &amp; Open Rate</td>
              <td>12% - 18% Email Open Rate</td>
              <td>98% WhatsApp Open Rate (45-60% Clicks)</td>
            </tr>
            <tr>
              <td>Application Document Submission</td>
              <td>Manual email attachments &amp; postal forms</td>
              <td>Native WhatsApp Flow upload in chat</td>
            </tr>
            <tr>
              <td>Fee Collection &amp; Reminders</td>
              <td>Manual phone calls &amp; paper invoices</td>
              <td>Automated WhatsApp payment links &amp; receipts</td>
            </tr>
            <tr>
              <td>Counselor Efficiency</td>
              <td>Overwhelmed answering repetitive FAQs</td>
              <td>Focuses on qualified students ready to enroll</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- PROBLEMS & SOLUTIONS (Preserved from existing website) -->
  <section class="bl-section">
    <div class="container">
      <div class="bl-section-header">
        <span class="bl-badge-pill" style="background:#fee2e2;color:#b91c1c;border-color:#fecaca;">Bottlenecks vs Solutions</span>
        <h2>Why Education Businesses Choose InboxWa</h2>
        <p>Eliminate manual calling fatigue, stop cold leads from going silent, and automate your entire student acquisition funnel.</p>
      </div>

      <div class="bl-problems-solutions-grid">
        <!-- Problems Column -->
        <div class="bl-prob-sol-col" style="border-top:4px solid #ef4444;">
          <h3 style="color:#b91c1c;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
            <span>Common Industry Challenges</span>
          </h3>
          <div class="bl-cards-list">
            <?php foreach ($category['problems'] as $prob): ?>
            <div class="bl-item-card">
              <h4><?php echo htmlspecialchars($prob['title']); ?></h4>
              <p><?php echo htmlspecialchars($prob['desc']); ?></p>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Solutions Column -->
        <div class="bl-prob-sol-col" style="border-top:4px solid #10b981;">
          <h3 style="color:#059669;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            <span>The InboxWa Advantage</span>
          </h3>
          <div class="bl-cards-list">
            <?php foreach ($category['solutions'] as $sol): ?>
            <div class="bl-item-card">
              <h4><?php echo htmlspecialchars($sol['title']); ?></h4>
              <p><?php echo htmlspecialchars($sol['desc']); ?></p>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- EXPLORE INDUSTRY-WISE WHATSAPP USE CASES (Cross Navigation Grid from Getgabs) -->
  <section class="edu-ind-section">
    <div class="container">
      <div class="section-header text-center">
        <span class="bl-badge-pill" style="background:rgba(124,58,237,0.1);color:#7c3aed;border-color:rgba(124,58,237,0.25);">Ecosystem Directory</span>
        <h2 style="font-size:clamp(2rem, 3.5vw, 2.75rem);font-weight:800;color:#0F172A;margin-top:0.75rem;">Explore Industry-Wise WhatsApp Use Cases</h2>
        <p class="lead" style="color:#64748B;max-width:700px;margin:0 auto;">See how organizations across diverse sectors scale customer conversations with InboxWa.</p>
      </div>

      <div class="edu-ind-grid">
        <a href="/business-leads/education/" class="edu-ind-card" style="border-color:#10b981;box-shadow:0 4px 15px rgba(16,185,129,0.15);">
          <div class="edu-ind-icon" style="background:#dcfce7;color:#059669;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
          </div>
          <h4>Education &amp; EdTech</h4>
        </a>

        <a href="/business-leads/real-estate/" class="edu-ind-card">
          <div class="edu-ind-icon" style="background:#e0e7ff;color:#3730a3;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <h4>Real Estate</h4>
        </a>

        <a href="/business-leads/healthcare/" class="edu-ind-card">
          <div class="edu-ind-icon" style="background:#ffe4e6;color:#e11d48;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h4>Healthcare</h4>
        </a>

        <a href="/business-leads/automotive/" class="edu-ind-card">
          <div class="edu-ind-icon" style="background:#e0f2fe;color:#0284c7;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
          </div>
          <h4>Automotive</h4>
        </a>

        <a href="/business-leads/ecommerce/" class="edu-ind-card">
          <div class="edu-ind-icon" style="background:#dcfce7;color:#166534;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
          </div>
          <h4>E-Commerce</h4>
        </a>

        <a href="/business-leads/finance/" class="edu-ind-card">
          <div class="edu-ind-icon" style="background:#fef3c7;color:#b45309;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
          </div>
          <h4>Banking &amp; Fintech</h4>
        </a>

        <a href="/business-leads/events/" class="edu-ind-card">
          <div class="edu-ind-icon" style="background:#fee2e2;color:#b91c1c;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          </div>
          <h4>Events &amp; Webinars</h4>
        </a>

        <a href="/business-leads/travel/" class="edu-ind-card">
          <div class="edu-ind-icon" style="background:#ede9fe;color:#6d28d9;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.8 19.2L16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/></svg>
          </div>
          <h4>Travel &amp; Tourism</h4>
        </a>

        <a href="/business-leads/salon/" class="edu-ind-card">
          <div class="edu-ind-icon" style="background:#fce7f3;color:#be185d;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="6" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><line x1="20" y1="4" x2="8.12" y2="15.88"/><line x1="14.47" y1="14.48" x2="20" y2="20"/><line x1="8.12" y1="8.12" x2="12" y2="12"/></svg>
          </div>
          <h4>Spas &amp; Salons</h4>
        </a>

        <a href="/business-leads/restaurant/" class="edu-ind-card">
          <div class="edu-ind-icon" style="background:#ffedd5;color:#c2410c;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
          </div>
          <h4>Restaurants &amp; Food</h4>
        </a>

        <a href="/business-leads/smb/" class="edu-ind-card">
          <div class="edu-ind-icon" style="background:#fef9c3;color:#a16207;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3h18v18H3zM9 9h6v6H9z"/></svg>
          </div>
          <h4>Small &amp; Medium Biz</h4>
        </a>

        <a href="/business-leads/enterprise/" class="edu-ind-card">
          <div class="edu-ind-icon" style="background:#e0e7ff;color:#1e3a8a;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
          </div>
          <h4>Enterprises</h4>
        </a>
      </div>
    </div>
  </section>

  <!-- FAQS WITH JSON-LD SCHEMA (All 5 Getgabs FAQs + Top EdTech Questions) -->
  <section class="edu-faq-section">
    <div class="container">
      <div class="section-header text-center">
        <span class="bl-badge-pill" style="background:rgba(16,185,129,0.1);color:#059669;border-color:rgba(16,185,129,0.25);">Got Questions?</span>
        <h2 style="font-size:clamp(2rem, 3.5vw, 2.75rem);font-weight:800;color:#0F172A;margin-top:0.75rem;">Frequently Asked Questions</h2>
        <p class="lead" style="color:#64748B;max-width:700px;margin:0 auto;">Everything you need to know about setting up InboxWa for your school, college, coaching institute, or EdTech platform.</p>
      </div>

      <div class="edu-faq-accordion" id="edu-faq-accordion">
        <div class="edu-faq-item active">
          <button type="button" class="edu-faq-question" aria-expanded="true">
            <span>Can this platform connect with my existing LMS or ERP?</span>
            <svg class="edu-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="edu-faq-answer">
            Yes, you can easily connect InboxWa with your existing learning management systems (Moodle, Canvas, Blackboard) or ERP tools (Fedena, LeadSquared, Salesforce Education Cloud, Zoho CRM). It enables sharing reminders, assignments, fee updates, and application records automatically without any manual effort.
          </div>
        </div>

        <div class="edu-faq-item">
          <button type="button" class="edu-faq-question" aria-expanded="false">
            <span>How secure is the communication for student and parent data?</span>
            <svg class="edu-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="edu-faq-answer">
            Each conversation is highly secured via Meta’s end-to-end encryption and managed strictly through verified WhatsApp Business accounts. Sensitive details such as fee invoices, marksheet uploads, and personal student data remain completely private and compliant with education communication data policies.
          </div>
        </div>

        <div class="edu-faq-item">
          <button type="button" class="edu-faq-question" aria-expanded="false">
            <span>Do students or parents need to download a separate app?</span>
            <svg class="edu-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="edu-faq-answer">
            No. It eliminates the friction of downloading any separate institutional app. Students and parents interact seamlessly via their standard WhatsApp messenger, while your institution manages and automates all chats from the centralized InboxWa dashboard.
          </div>
        </div>

        <div class="edu-faq-item">
          <button type="button" class="edu-faq-question" aria-expanded="false">
            <span>Is it only for sending notifications, or can students reply too?</span>
            <svg class="edu-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="edu-faq-answer">
            WhatsApp is a full two-way communication channel. Not only can your institute broadcast timetables and fee alerts, but students and parents can also reply, ask follow-up questions, upload documents, and schedule counselor calls directly in the chat.
          </div>
        </div>

        <div class="edu-faq-item">
          <button type="button" class="edu-faq-question" aria-expanded="false">
            <span>Is this solution suitable for small coaching centres as well as large universities?</span>
            <svg class="edu-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="edu-faq-answer">
            Yes, InboxWa is designed for single-location test prep coaching centers as well as multi-campus university chains. It enables centers to send homework alerts, manage admission inquiries, and automate fee reminders all within a single scalable platform.
          </div>
        </div>

        <div class="edu-faq-item">
          <button type="button" class="edu-faq-question" aria-expanded="false">
            <span>Are fee reminders, exam results, and parent broadcasts permitted by Meta WhatsApp policy?</span>
            <svg class="edu-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="edu-faq-answer">
            Yes. Utility and Transactional WhatsApp Message Templates for fee alerts, registration receipts, exam hall tickets, and attendance updates are 100% compliant with Meta Business Policies.
          </div>
        </div>

        <div class="edu-faq-item">
          <button type="button" class="edu-faq-question" aria-expanded="false">
            <span>How many admission counsellors and faculty members can access the platform simultaneously?</span>
            <svg class="edu-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="edu-faq-answer">
            InboxWa provides unlimited multi-agent access with granular role permissions. You can add dozens of counselors, assign specific course departments to teams, and monitor counselor performance metrics live.
          </div>
        </div>

        <div class="edu-faq-item">
          <button type="button" class="edu-faq-question" aria-expanded="false">
            <span>How quickly can our institution go live with InboxWa?</span>
            <svg class="edu-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="edu-faq-answer">
            You can verify your Meta Business Manager and launch your initial WhatsApp admission automation flows within 24 to 48 hours. Our onboarding team assists you through phone number verification, green tick application, and chatbot setup.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ SCHEMA.ORG JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "Can this platform connect with my existing LMS or ERP?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, you can easily connect InboxWa with your existing learning management systems (Moodle, Canvas, Blackboard) or ERP tools (Fedena, LeadSquared, Salesforce Education Cloud, Zoho CRM). It enables sharing reminders, assignments, fee updates, and application records automatically without any manual effort."
        }
      },
      {
        "@type": "Question",
        "name": "How secure is the communication for student and parent data?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Each conversation is highly secured via Meta's end-to-end encryption and managed strictly through verified WhatsApp Business accounts. Sensitive details such as fee invoices, marksheet uploads, and personal student data remain completely private and compliant with education communication data policies."
        }
      },
      {
        "@type": "Question",
        "name": "Do students or parents need to download a separate app?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "No. It eliminates the friction of downloading any separate institutional app. Students and parents interact seamlessly via their standard WhatsApp messenger, while your institution manages and automates all chats from the centralized InboxWa dashboard."
        }
      },
      {
        "@type": "Question",
        "name": "Is it only for sending notifications, or can students reply too?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "WhatsApp is a full two-way communication channel. Not only can your institute broadcast timetables and fee alerts, but students and parents can also reply, ask follow-up questions, upload documents, and schedule counselor calls directly in the chat."
        }
      },
      {
        "@type": "Question",
        "name": "Is this solution suitable for small coaching centres as well as large universities?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, InboxWa is designed for single-location test prep coaching centers as well as multi-campus university chains. It enables centers to send homework alerts, manage admission inquiries, and automate fee reminders all within a single scalable platform."
        }
      },
      {
        "@type": "Question",
        "name": "Are fee reminders, exam results, and parent broadcasts permitted by Meta WhatsApp policy?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Utility and Transactional WhatsApp Message Templates for fee alerts, registration receipts, exam hall tickets, and attendance updates are 100% compliant with Meta Business Policies."
        }
      },
      {
        "@type": "Question",
        "name": "How many admission counsellors and faculty members can access the platform simultaneously?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "InboxWa provides unlimited multi-agent access with granular role permissions. You can add dozens of counselors, assign specific course departments to teams, and monitor counselor performance metrics live."
        }
      },
      {
        "@type": "Question",
        "name": "How quickly can our institution go live with InboxWa?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You can verify your Meta Business Manager and launch your initial WhatsApp admission automation flows within 24 to 48 hours. Our onboarding team assists you through phone number verification, green tick application, and chatbot setup."
        }
      }
    ]
  }
  </script>

  <!-- FINAL CONVERSION CTA SECTION -->
  <section class="bl-cta-section" style="margin-top:2rem;">
    <div class="container">
      <div class="bl-cta-box">
        <h2>Accelerate Your EdTech &amp; Institution Admissions</h2>
        <p>Get instant access to 650,000+ verified education leads, launch official WhatsApp AI bots, and scale student enrollments with zero ban risk.</p>
        <div style="display:flex;align-items:center;justify-content:center;gap:1rem;flex-wrap:wrap;">
          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo $defaultWaMsg; ?>" target="_blank" rel="noopener" class="bl-btn-primary" style="padding:1rem 2.2rem;font-size:1.05rem;">
            <span>Request Verified Leads on WhatsApp</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
          <a href="/auth/register" class="bl-btn-secondary" style="padding:1rem 2rem;">
            <span>Start 14-Day Free Trial</span>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Interactive Simulator & Calculator Scripts -->
<script src="/assets/js/education-sim.js?v=43" defer></script>

<!-- Inline FAQ Accordion Toggle Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  var faqQuestions = document.querySelectorAll('.edu-faq-question');
  faqQuestions.forEach(function(btn) {
    btn.addEventListener('click', function() {
      var item = this.parentElement;
      var isActive = item.classList.contains('active');
      
      // Close all other items
      document.querySelectorAll('.edu-faq-item').forEach(function(el) {
        el.classList.remove('active');
        var b = el.querySelector('.edu-faq-question');
        if (b) b.setAttribute('aria-expanded', 'false');
      });

      // Toggle clicked item
      if (!isActive) {
        item.classList.add('active');
        this.setAttribute('aria-expanded', 'true');
      }
    });
  });
});
</script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>

