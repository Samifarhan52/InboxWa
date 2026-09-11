<?php
$basePath = '../../';
$pageTitle = 'WhatsApp Business API for Education | InboxWa CRM Integration';
$pageDescription = 'Power higher enrollments and better ROI with WhatsApp Business API. Scale student reach, reduce drop-offs, and convert faster with automated campaigns and counseling flows on InboxWa.';
$canonicalUrl = 'https://inboxwa.com/industries/education/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/education.css?v=53">

<!-- =========================================================================
     1. HERO SECTION (Meritto Match + Superior InboxWa Experience)
     ========================================================================= -->
<section class="edu-hero" aria-label="WhatsApp Business API for Education hero">
  <div class="container">
    <!-- Top Breadcrumb & Partner Bar -->
    <div class="edu-top-bar">
      <nav class="edu-crumb-nav" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="edu-crumb-sep">/</span>
        <a href="/business-leads/">Solutions</a>
        <span class="edu-crumb-sep">/</span>
        <span>WhatsApp Business API for Education</span>
      </nav>
      <div class="edu-badge">
        <span class="edu-badge-dot"></span>
        Meta Official Tech Partner · Education CRM
      </div>
    </div>

    <div class="edu-grid">
      <!-- Left Column: Copy & Value Proposition -->
      <div class="edu-hero-copy">
        <h1>Power higher enrollments <br> and better ROI with <br><span class="highlightText">WhatsApp Business API</span></h1>
        <p class="edu-lead">Scale your student reach, reduce drop-offs, and convert faster with WhatsApp campaigns, automated admission flows, and multi-counselor live chat, seamlessly powered by InboxWa Education CRM.</p>
        
        <div class="edu-ctas">
          <a href="/auth/register" class="btn btn-primary btn-lg">Start 14-Day Free Trial</a>
          <button type="button" class="btn-ghost-light" onclick="openEduModal()">Book Education Demo</button>
          <a href="https://wa.me/918050854445?text=Hi%20InboxWa%2C%20I%20want%20to%20learn%20more%20about%20WhatsApp%20API%20for%20our%20educational%20institution" target="_blank" rel="noopener" class="btn-ghost-light" style="display:inline-flex;align-items:center;gap:0.4rem;">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            Chat with Specialist
          </a>
        </div>

        <div class="edu-hero-trust-strip">
          <div class="edu-hero-trust-item">
            <svg class="edu-green-tick" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>Instant Meta Verification</span>
          </div>
          <div class="edu-hero-trust-item">
            <svg class="edu-green-tick" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>Green Tick Official Badge</span>
          </div>
          <div class="edu-hero-trust-item">
            <svg class="edu-green-tick" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>Live in 24 Hours</span>
          </div>
        </div>
      </div>

      <!-- Right Column: Interactive Admission & Demo Connect Card -->
      <div class="edu-hero-stage">
        <div class="edu-hero-form-card">
          <div class="edu-form-header">
            <h3>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
              Schedule an Education Demo
            </h3>
            <p>See how InboxWa automates student admissions and boosts your enrollment ROI.</p>
          </div>

          <form id="edu-hero-lead-form" onsubmit="handleEduFormSubmit(event)">
            <div class="edu-form-grid">
              <div class="edu-form-group">
                <label for="edu-inst-name">Institution / University Name</label>
                <input type="text" id="edu-inst-name" required placeholder="e.g. Apex Global University">
              </div>

              <div class="edu-form-group">
                <label for="edu-user-name">Your Full Name &amp; Title</label>
                <input type="text" id="edu-user-name" required placeholder="e.g. Dr. Priya Sharma (Dean of Admissions)">
              </div>

              <div class="edu-form-group">
                <label for="edu-user-phone">WhatsApp Business Number</label>
                <input type="tel" id="edu-user-phone" required placeholder="+91 98765 43210">
              </div>

              <div class="edu-form-group">
                <label for="edu-inst-type">Institution Type</label>
                <select id="edu-inst-type">
                  <option value="university">University / Higher Education</option>
                  <option value="college">College / Undergraduate Institute</option>
                  <option value="coaching">Coaching &amp; Test Prep Institute</option>
                  <option value="k12">K-12 School / Academy</option>
                  <option value="edtech">EdTech &amp; Online Bootcamps</option>
                </select>
              </div>

              <button type="submit" class="edu-form-submit-btn" id="edu-submit-btn">
                <span>Request Custom Demo &amp; ROI Plan</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
              </button>
            </div>
          </form>

          <div class="edu-form-footer-note">
            🔒 100% Student Data Privacy · Meta Business Solution Provider · No Credit Card Required
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- =========================================================================
     2. OVERVIEW & IMPACT SECTION (Meritto Match + Superior Metrics)
     ========================================================================= -->
<section class="edu-overview-section" aria-label="Education WhatsApp ROI Overview">
  <div class="container">
    <div class="edu-overview-inner">
      <h2>How WhatsApp Business API boosts enrollments &amp; ROI for educational organizations</h2>
      <p class="lead">With 98% open rates, rich-media messaging, and broadcast capabilities, WhatsApp Business API connects you with students instantly and personally.</p>
      <p class="subtext">And when powered by <strong>InboxWa</strong>, it becomes an enrollment engine, because in one unified platform, it lets you capture qualified leads, automate engagement, and enable counselors to nurture one-on-one conversations that boost productivity, improve student experience, and deliver measurable ROI.</p>
    </div>

    <!-- 4 Impact Metric Cards -->
    <div class="edu-impact-grid">
      <div class="edu-impact-card">
        <div class="edu-impact-val">98%</div>
        <div class="edu-impact-lbl">WhatsApp Message Open Rate (vs 16% on Email)</div>
      </div>
      <div class="edu-impact-card">
        <div class="edu-impact-val">&lt; 30s</div>
        <div class="edu-impact-lbl">Instant First Response Time with AI Bot</div>
      </div>
      <div class="edu-impact-card">
        <div class="edu-impact-val">43%</div>
        <div class="edu-impact-lbl">Higher Admission Conversion from Inquiries</div>
      </div>
      <div class="edu-impact-card">
        <div class="edu-impact-val">61%</div>
        <div class="edu-impact-lbl">Reduction in Repetitive Counselor Admin Workload</div>
      </div>
    </div>
  </div>
</section>


<!-- =========================================================================
     3. FEATURE 1: Broadcast campaigns with confidence that drives action
     ========================================================================= -->
<section class="edu-feature-section" id="feature-broadcast">
  <div class="container">
    <div class="edu-feature-row">
      <div class="edu-feature-content">
        <span class="edu-feature-pill green">Feature 01 · High-Reach Broadcasts</span>
        <h2>Broadcast campaigns with confidence that drives action</h2>
        <p>Reach the right students at scale with program launches, scholarship updates, event invites, and webinar promotions, all sent directly from InboxWa CRM. Every reply creates or enriches a lead record, keeping your funnel accurate and alive.</p>
        
        <ul class="edu-feature-list">
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Add interactive CTAs and quick reply buttons to boost responses by 4x.</span>
          </li>
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Automatically capture replies as leads in InboxWa CRM with department tagging.</span>
          </li>
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Segment student cohorts by major, entrance test score, city, or counseling status.</span>
          </li>
        </ul>

        <a href="/auth/register" class="btn-feature-cta">
          <span>Start Broadcasting with InboxWa</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
      </div>

      <!-- Feature 1 Visual: High-Reach Broadcasts Media -->
      <div class="edu-feature-visual">
        <div class="edu-media-container">
          <div class="edu-media-topbar">
            <span class="edu-media-topbar-title">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/></svg>
              InboxWa Education CRM · Broadcast Manager
            </span>
            <span class="edu-media-topbar-badge">● Campaign Live</span>
          </div>
          <div class="edu-media-content">
            <img src="/assets/images/education-meritto/inboxwa-broadcast.png" alt="Broadcast campaigns with confidence that drives action" class="edu-feature-img" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- =========================================================================
     4. FEATURE 2: Manage custom templates for instant communication & better delivery
     ========================================================================= -->
<section class="edu-feature-section" id="feature-templates">
  <div class="container">
    <div class="edu-feature-row reverse">
      <div class="edu-feature-content">
        <span class="edu-feature-pill blue">Feature 02 · Meta-Approved Templates</span>
        <h2>Manage custom templates for instant communication &amp; better delivery</h2>
        <p>Manage interactive templates for your most-used WhatsApp messages from welcomes to application updates, ready for quick use and personalization. Categorize, customize, and send in seconds while ensuring strong deliverability and account health.</p>
        
        <ul class="edu-feature-list">
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Organize templates under marketing, utility, or service for faster counselor access.</span>
          </li>
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Monitor Meta approvals and quality health ratings directly within InboxWa.</span>
          </li>
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Dynamic student fields: <code>{{student_name}}</code>, <code>{{course}}</code>, <code>{{application_id}}</code>, <code>{{counselor_name}}</code>.</span>
          </li>
        </ul>

        <a href="/resources/templates/" class="btn-feature-cta purple">
          <span>Explore Education Templates</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
      </div>

      <!-- Feature 2 Visual: Meta Template Hub Media -->
      <div class="edu-feature-visual">
        <div class="edu-media-container">
          <div class="edu-media-topbar">
            <span class="edu-media-topbar-title">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/></svg>
              InboxWa Template Hub · Meta Cloud API
            </span>
            <span class="edu-media-topbar-badge blue">✔ Meta Approved</span>
          </div>
          <div class="edu-media-content">
            <img src="/assets/images/education-meritto/inboxwa-templates.png" alt="Manage custom templates for instant communication and better delivery" class="edu-feature-img" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- =========================================================================
     5. FEATURE 3: Build smart automations that move students through their journey
     ========================================================================= -->
<section class="edu-feature-section" id="feature-journey">
  <div class="container">
    <div class="edu-feature-row">
      <div class="edu-feature-content">
        <span class="edu-feature-pill amber">Feature 03 · Stage-Based Automations</span>
        <h2>Build smart automations that move students through their journey</h2>
        <p>Keep students on track with stage-based WhatsApp communication, and let their engagement trigger the next best actions. From stage or score updates, counselor assignment, and more, personalized journeys run automatically, keeping your pipeline moving and preventing missed opportunities.</p>
        
        <ul class="edu-feature-list">
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Send automated, timely reminders for deadlines, fee payments, interviews, and exams.</span>
          </li>
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Build automated personalized journeys that keep students moving forward and reduce drop-offs.</span>
          </li>
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Trigger instant alerts to counselors when high-intent leads submit marksheet files.</span>
          </li>
        </ul>

        <a href="/auth/register" class="btn-feature-cta">
          <span>Build Admission Journeys</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
      </div>

      <!-- Feature 3 Visual: Smart Automations Video -->
      <div class="edu-feature-visual">
        <div class="edu-media-container">
          <div class="edu-media-topbar">
            <span class="edu-media-topbar-title">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
              InboxWa Journey FlowBuilder · Student Lifecycle
            </span>
            <span class="edu-media-topbar-badge amber">⚡ Smart Reminders</span>
          </div>
          <div class="edu-media-content">
            <video class="edu-feature-video" autoplay loop muted playsinline poster="/assets/images/education-meritto/inboxwa-journey-flow.png">
              <source src="/assets/images/education-meritto/smart-reminders.webm" type="video/webm">
            </video>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- =========================================================================
     6. FEATURE 4: Capture details with customizable forms, inside every chat
     ========================================================================= -->
<section class="edu-feature-section" id="feature-forms">
  <div class="container">
    <div class="edu-feature-row reverse">
      <div class="edu-feature-content">
        <span class="edu-feature-pill blue">Feature 04 · WhatsApp In-Chat Forms</span>
        <h2>Capture details with customizable forms, inside every chat</h2>
        <p>Build interactive forms that open directly inside a WhatsApp chat, making it simple for your students to share details, preferences, and choices without having to leave WhatsApp, which means a smoother and engaging experience.</p>
        
        <ul class="edu-feature-list">
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Collect feedback and surveys after webinars or campus open-days within WhatsApp.</span>
          </li>
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Auto-sync details into InboxWa CRM for context-rich counselor follow-ups.</span>
          </li>
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>3x higher completion rates compared to external landing page forms.</span>
          </li>
        </ul>

        <a href="/auth/register" class="btn-feature-cta purple">
          <span>Create WhatsApp Forms</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
      </div>

      <!-- Feature 4 Visual: In-Chat Forms Media -->
      <div class="edu-feature-visual">
        <div class="edu-media-container">
          <div class="edu-media-topbar">
            <span class="edu-media-topbar-title">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/></svg>
              InboxWa WhatsApp Native Flows · Form Preview
            </span>
            <span class="edu-media-topbar-badge blue">🔒 Encrypted Lead Sync</span>
          </div>
          <div class="edu-media-content">
            <img src="/assets/images/education-meritto/inboxwa-forms.png" alt="Capture details with customizable forms inside every chat" class="edu-feature-img" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- =========================================================================
     7. FEATURE 5: Build instant & two-way conversations with a live chat platform
     ========================================================================= -->
<section class="edu-feature-section" id="feature-live-chat">
  <div class="container">
    <div class="edu-feature-row">
      <div class="edu-feature-content">
        <span class="edu-feature-pill green">Feature 05 · Multi-Counselor Inbox</span>
        <h2>Build instant &amp; two-way conversations with a live chat platform</h2>
        <p>Do more with <strong>InboxWa Live Chat</strong>, our multi-counselor team inbox that allows you to reply naturally beyond static templates, while keeping every exchange tracked. From first inquiry to final admit, every chat is contextually nurtured, right where students feel most comfortable.</p>
        
        <ul class="edu-feature-list">
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Manage all WhatsApp replies from one centralized admissions inbox.</span>
          </li>
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Filter and track chats as queued, picked, or resolved with SLA indicators.</span>
          </li>
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Internal private notes &amp; department routing between counseling and finance.</span>
          </li>
        </ul>

        <a href="/auth/register" class="btn-feature-cta">
          <span>Explore Multi-Counselor Inbox</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
      </div>

      <!-- Feature 5 Visual: Live Chat Video -->
      <div class="edu-feature-visual">
        <div class="edu-media-container">
          <div class="edu-media-topbar">
            <span class="edu-media-topbar-title">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
              InboxWa Shared Team Inbox · Admissions Desk
            </span>
            <span class="edu-media-topbar-badge">● Multi-Counselor Live</span>
          </div>
          <div class="edu-media-content">
            <video class="edu-feature-video" autoplay loop muted playsinline>
              <source src="/assets/images/education-meritto/live-chat.webm" type="video/webm">
            </video>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- =========================================================================
     8. FEATURE 6: Automate replies for instant, 24/7 engagement
     ========================================================================= -->
<section class="edu-feature-section" id="feature-chatbot">
  <div class="container">
    <div class="edu-feature-row reverse">
      <div class="edu-feature-content">
        <span class="edu-feature-pill blue">Feature 06 · AI Education Chatbot</span>
        <h2>Automate replies for instant, 24/7 engagement</h2>
        <p>Coupled with <strong>InboxWa AI Education Chatbot</strong>, you'll never leave a student waiting. Automated responses on WhatsApp handle FAQs, share details, and keep conversations active even outside working hours.</p>
        
        <ul class="edu-feature-list">
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Ensure faster replies for a better student experience with instant &lt; 3s answers.</span>
          </li>
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Automate FAQs and repetitive queries regarding fees, eligibility, and hostels to free up counselor bandwidth.</span>
          </li>
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Seamless bot-to-human counselor handoff when complex academic counseling is needed.</span>
          </li>
        </ul>

        <a href="/auth/register" class="btn-feature-cta purple">
          <span>Deploy Education AI Bot</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
      </div>

      <!-- Feature 6 Visual: AI Chatbot Media -->
      <div class="edu-feature-visual">
        <div class="edu-media-container">
          <div class="edu-media-topbar">
            <span class="edu-media-topbar-title">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/></svg>
              InboxWa AI Education Assistant · 24/7 Virtual Desk
            </span>
            <span class="edu-media-topbar-badge purple">🤖 AI Active</span>
          </div>
          <div class="edu-media-content">
            <img src="/assets/images/education-meritto/inboxwa-automate-replies.png" alt="Automate replies for instant 24/7 engagement with InboxWa AI" class="edu-feature-img" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- =========================================================================
     9. FEATURE 7: Retry undelivered messages automatically for better reach
     ========================================================================= -->
<section class="edu-feature-section" id="feature-retry">
  <div class="container">
    <div class="edu-feature-row">
      <div class="edu-feature-content">
        <span class="edu-feature-pill amber">Feature 07 · Intelligent Auto-Retry</span>
        <h2>Retry undelivered messages automatically for better reach</h2>
        <p>When sender limits or temporary network outages hold a message back, InboxWa automatically retries it at the count and intervals you define. This helps more students receive your critical admission communication without adding manual effort to every campaign.</p>
        
        <ul class="edu-feature-list">
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Boost Campaign ROI with improved campaign reach across roaming student networks.</span>
          </li>
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Choose up to five retry attempts and set intervals from 8 to 48 hours.</span>
          </li>
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Never miss sending urgent admit cards, payment deadline reminders, or interview links.</span>
          </li>
        </ul>

        <a href="/auth/register" class="btn-feature-cta">
          <span>Maximize Campaign Deliverability</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
      </div>

      <!-- Feature 7 Visual: Auto-Retry Media -->
      <div class="edu-feature-visual">
        <div class="edu-media-container">
          <div class="edu-media-topbar">
            <span class="edu-media-topbar-title">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/></svg>
              InboxWa Deliverability Engine · Auto-Retry Queue
            </span>
            <span class="edu-media-topbar-badge amber">⚙️ Engine Active</span>
          </div>
          <div class="edu-media-content">
            <img src="/assets/images/education-meritto/inboxwa-retry.png" alt="Retry undelivered messages automatically for better reach" class="edu-feature-img" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- =========================================================================
     10. FEATURE 8: Track and measure ROI from campaigns and conversations
     ========================================================================= -->
<section class="edu-feature-section" id="feature-roi">
  <div class="container">
    <div class="edu-feature-row reverse">
      <div class="edu-feature-content">
        <span class="edu-feature-pill blue">Feature 08 · Funnel &amp; ROI Attribution</span>
        <h2>Track and measure ROI from campaigns and conversations</h2>
        <p>Move beyond vanity metrics, see how every WhatsApp campaign contributes to applications and enrollments. With InboxWa CRM as the backbone, you can tie conversations directly to outcomes and know exactly what’s driving results.</p>
        
        <ul class="edu-feature-list">
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Track movement from initial WhatsApp ad click to final paid enrollment with clear funnel visibility.</span>
          </li>
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Use counselor performance leaderboards and conversion analytics to double down on what truly works.</span>
          </li>
          <li>
            <span class="edu-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Sync attribution data with LeadSquared, Salesforce, Zoho, Google Sheets, or custom ERPs.</span>
          </li>
        </ul>

        <a href="/auth/register" class="btn-feature-cta purple">
          <span>View ROI Dashboard</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
      </div>

      <!-- Feature 8 Visual: ROI Analytics Media -->
      <div class="edu-feature-visual">
        <div class="edu-media-container">
          <div class="edu-media-topbar">
            <span class="edu-media-topbar-title">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
              InboxWa Analytics · Admission Funnel Yield
            </span>
            <span class="edu-media-topbar-badge">📈 +43% Conversion</span>
          </div>
          <div class="edu-media-content">
            <img src="/assets/images/education-meritto/inboxwa-roi.png" alt="Track and measure ROI from campaigns and conversations" class="edu-feature-img" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================================
     DEDICATED 4-STAGE STUDENT & PARENT JOURNEY FLOW SHOWCASE
     ========================================================================= -->
<section class="edu-journey-showcase-section" id="journey-flow-showcase">
  <div class="container">
    <div class="edu-journey-header">
      <span class="edu-feature-pill green">Full Student & Parent Lifecycle</span>
      <h2>Automate every touchpoint from initial inquiry to convocation</h2>
      <p>Explore how InboxWa’s integrated WhatsApp Business API drives seamless student transitions through 4 automated admission stages—delivering personalized guidance, automated verification, and higher enrollment yields.</p>
    </div>

    <div class="edu-journey-image-card">
      <div class="edu-journey-card-topbar">
        <div class="edu-journey-stage-tags">
          <span class="stage-tag s1">Stage 01 · Inquiry &amp; Discovery</span>
          <span class="stage-tag s2">Stage 02 · Application &amp; Verification</span>
          <span class="stage-tag s3">Stage 03 · Offer &amp; Fee Payment</span>
          <span class="stage-tag s4">Stage 04 · Onboarding &amp; Induction</span>
        </div>
        <button type="button" class="btn-expand-flow" onclick="openFlowModal()">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg>
          <span>View Full Journey Map</span>
        </button>
      </div>

      <div class="edu-journey-img-scroll" onclick="openFlowModal()" title="Click to zoom full screen">
        <img src="/assets/images/education-meritto/inboxwa-journey-flow.png" alt="InboxWa 4-Stage Student and Parent Admission Lifecycle Journey Flow" class="edu-journey-img" loading="lazy">
      </div>

      <div class="edu-journey-caption">
        <span>⚡ 4 Connected Stages · 16 Automated Meta Cloud Workflows · Bi-directional CRM Sync</span>
        <span style="color:#059669; font-weight:700; cursor:pointer;" onclick="openFlowModal()">Click image to zoom full screen 🔍</span>
      </div>
    </div>
  </div>
</section>

<!-- Full-Screen Lightbox Modal for Journey Flow -->
<div class="flow-lightbox-overlay" id="flowLightboxModal" onclick="closeFlowModal(event)">
  <button type="button" class="flow-lightbox-close" onclick="closeFlowModal()" aria-label="Close modal">&times;</button>
  <div class="flow-lightbox-content" onclick="event.stopPropagation()">
    <img src="/assets/images/education-meritto/inboxwa-journey-flow.png" alt="InboxWa Admission Lifecycle Journey Map Full View">
  </div>
</div>


<!-- =========================================================================
     11. META TECH PARTNER TRUST BANNER (Section 9 from Meritto)
     ========================================================================= -->
<section class="edu-bsp-section">
  <div class="container">
    <div class="edu-bsp-box">
      <div class="edu-bsp-content">
        <h2>Getting started is quick and easy with InboxWa, an official Meta Tech Partner.</h2>
        <ul class="edu-bsp-list">
          <li>
            <svg class="edu-green-tick" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>Faster onboarding directly through InboxWa CRM: get started in under 24 hours and secure your official Green Tick verified badge.</span>
          </li>
          <li>
            <svg class="edu-green-tick" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>Manage multiple numbers with ease: route numbers by campus, faculty, or department with customized default replies, opt-ins, and opt-outs.</span>
          </li>
          <li>
            <svg class="edu-green-tick" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>Unlock Meta benefits and early access to new WhatsApp features, interactive flows, and highest message tier throughput.</span>
          </li>
        </ul>
      </div>

      <div class="edu-bsp-visual">
        <div class="edu-media-container" style="max-width:540px; margin:0 auto;">
          <div class="edu-media-topbar">
            <span class="edu-media-topbar-title">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              InboxWa · WhatsApp Business Manager
            </span>
            <span class="edu-media-topbar-badge blue">✔ Meta Tech Partner</span>
          </div>
          <div class="edu-media-content">
            <img src="/assets/images/education-meritto/inboxwa-getting-started.png" alt="InboxWa Meta WhatsApp Business Manager Onboarding" class="edu-feature-img" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- =========================================================================
     12. COMPARISON TABLE: The InboxWa Difference (Section 10 from Meritto)
     ========================================================================= -->
<section class="edu-difference-section">
  <div class="container">
    <div style="text-align:center; max-width:850px; margin:0 auto;">
      <span class="edu-feature-pill green">Competitive Benchmark</span>
      <h2 style="font-size:clamp(1.85rem, 3vw, 2.5rem); font-weight:800; color:#0F172A; margin-bottom:0.75rem;">
        <span class="highlightText">WhatsApp Business API</span> for educational organizations: The InboxWa difference
      </h2>
      <p style="font-size:1.05rem; color:#64748B;">Compare how InboxWa’s integrated education engine outperforms generic standalone tools.</p>
    </div>

    <div class="edu-diff-table-wrap">
      <table class="edu-diff-table">
        <thead>
          <tr>
            <th class="col-aspect">Aspect</th>
            <th class="col-inboxwa">WhatsApp Business API integrated with InboxWa</th>
            <th class="col-standalone">WhatsApp Business API standalone tool</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="aspect-name">Lead data &amp; context</td>
            <td class="inboxwa-cell">✔ Conversations auto-linked to CRM leads, inquiries, marksheets &amp; applications with complete interaction timeline.</td>
            <td class="standalone-cell">✖ Manual exports; no real-time CRM sync; fragmented student records across multiple spreadsheets.</td>
          </tr>
          <tr>
            <td class="aspect-name">Personalization &amp; automation</td>
            <td class="inboxwa-cell">✔ CRM fields + AI drive contextual campaigns, auto-reminders, document verification flows &amp; counselor follow-ups.</td>
            <td class="standalone-cell">✖ Static templates only; manual scheduling; zero adaptive journey branch logic.</td>
          </tr>
          <tr>
            <td class="aspect-name">Engagement visibility</td>
            <td class="inboxwa-cell">✔ Unified timeline across WhatsApp, phone calls, emails, fees &amp; application statuses in a single unified view.</td>
            <td class="standalone-cell">✖ WhatsApp is completely isolated, creating team communication blindspots and lost prospective leads.</td>
          </tr>
          <tr>
            <td class="aspect-name">Insights &amp; ROI</td>
            <td class="inboxwa-cell">✔ End-to-end funnel tracking + AI shows exactly which ad campaigns and counselors drive paid enrollments.</td>
            <td class="standalone-cell">✖ Standard message counts only; no admission yield or tuition revenue attribution.</td>
          </tr>
          <tr>
            <td class="aspect-name">Compliance &amp; Scale</td>
            <td class="inboxwa-cell">✔ Secure, role-based access with team routing &amp; scaling built in on official Meta Cloud API (zero ban risk).</td>
            <td class="standalone-cell">✖ Customer data exported to external tools leads to compliance risks and high vulnerability to number bans.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>


<!-- =========================================================================
     13. INTERACTIVE ROI CALCULATOR
     ========================================================================= -->
<section class="edu-roi-section" style="background:#F8FAFC; padding:4.5rem 0; border-top:1px solid #E2E8F0;">
  <div class="container">
    <div style="text-align:center; max-width:800px; margin:0 auto 2.5rem;">
      <span class="edu-feature-pill amber">Interactive ROI Estimator</span>
      <h2 style="font-size:clamp(1.75rem, 2.8vw, 2.35rem); font-weight:800; color:#0F172A;">Estimate Your Admission Growth &amp; Admin Time Savings</h2>
      <p style="font-size:1.02rem; color:#64748B;">Calculate how many more students your institution can enroll each year with InboxWa.</p>
    </div>

    <div class="edu-roi-card" style="max-width:820px; margin:0 auto; background:#fff; border:1px solid #E2E8F0; border-radius:18px; padding:2rem; box-shadow:0 8px 30px rgba(0,0,0,0.04);">
      <div class="edu-roi-controls" style="margin-bottom:1.5rem;">
        <label for="edu-roi-slider" style="display:flex; justify-content:space-between; font-weight:700; color:#0F172A; margin-bottom:0.75rem; font-size:1rem;">
          <span>Monthly Prospective Student Inquiries:</span>
          <b id="edu-roi-val" style="color:#7C3AED; font-size:1.2rem;">500 / mo</b>
        </label>
        <input type="range" id="edu-roi-slider" min="100" max="5000" step="100" value="500" style="width:100%; height:8px; border-radius:999px; background:#E2E8F0; outline:none; cursor:pointer;" oninput="updateEduRoi(this.value)">
      </div>

      <div class="edu-roi-results" style="display:grid; grid-template-columns:repeat(3, 1fr); gap:1rem; text-align:center;">
        <div style="background:#F0FDF4; border:1px solid #A7F3D0; border-radius:12px; padding:1.25rem;">
          <b id="edu-roi-extra" style="font-size:1.6rem; color:#059669; display:block;">+215 Students</b>
          <span style="font-size:0.8rem; color:#065F46; font-weight:600;">Additional Annual Admissions</span>
        </div>
        <div style="background:#FAF5FF; border:1px solid #DDD6FE; border-radius:12px; padding:1.25rem;">
          <b id="edu-roi-hours" style="font-size:1.6rem; color:#7C3AED; display:block;">125 Hrs/Mo</b>
          <span style="font-size:0.8rem; color:#5B21B6; font-weight:600;">Counseling Time Saved</span>
        </div>
        <div style="background:#EFF6FF; border:1px solid #BFDBFE; border-radius:12px; padding:1.25rem;">
          <b id="edu-roi-rev" style="font-size:1.6rem; color:#2563EB; display:block;">₹1.6 Lakhs+</b>
          <span style="font-size:0.8rem; color:#1E40AF; font-weight:600;">Est. Monthly Fee Yield Boost</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- =========================================================================
     14. FAQS SECTION (Section 11 from Meritto Match + Expanded)
     ========================================================================= -->
<section class="edu-faq-section" id="faqs">
  <div class="container">
    <div style="text-align:center; max-width:800px; margin:0 auto;">
      <span class="edu-feature-pill blue">Clear Answers</span>
      <h2 style="font-size:clamp(1.75rem, 2.8vw, 2.35rem); font-weight:800; color:#0F172A; margin-bottom:0.5rem;">WhatsApp Business API FAQs</h2>
      <p style="font-size:1rem; color:#64748B;">Common questions about deploying WhatsApp API for admissions, exams, and parent updates.</p>
    </div>

    <div class="edu-faq-grid">
      <!-- FAQ 1 -->
      <div class="edu-faq-box active">
        <button type="button" class="edu-faq-q-btn" onclick="toggleEduFaq(this)">
          <span class="q-title"><span>✅</span> How does InboxWa's AI-powered WhatsApp Business API help improve lead engagement?</span>
          <svg class="edu-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="edu-faq-a-pane">
          InboxWa’s AI-powered WhatsApp Business API automates personalized messaging to engage students at various stages of the enrollment process. By analyzing student intent and inquiry details, our AI tailors each message to the prospect's needs, ensuring timely, relevant, and contextual communication that maximizes engagement and conversion rates while reducing counselor response delays.
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="edu-faq-box">
        <button type="button" class="edu-faq-q-btn" onclick="toggleEduFaq(this)">
          <span class="q-title"><span>✅</span> What is the difference between WhatsApp Business and WhatsApp Business API?</span>
          <svg class="edu-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="edu-faq-a-pane">
          The regular WhatsApp Business app is a standalone mobile application designed for single users or small businesses with limited message volume.<br><br>
          The <b>WhatsApp Business API (provided by InboxWa)</b> is an enterprise interface designed for educational institutions that need to broadcast to thousands of students, manage multi-counselor team inboxes, build automated admission flows, verify official Green Tick profiles, and integrate seamlessly with CRMs and ERP systems.
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="edu-faq-box">
        <button type="button" class="edu-faq-q-btn" onclick="toggleEduFaq(this)">
          <span class="q-title"><span>✅</span> How can WhatsApp Business API be leveraged for admissions by educational institutions?</span>
          <svg class="edu-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="edu-faq-a-pane">
          WhatsApp Business API enables your institution to engage prospective students directly in their favorite chat app. You can share pivotal insights, course brochures, syllabus PDFs, take prospects on virtual campus tours, schedule 1-on-1 counseling calls, collect admission application forms natively in chat, verify high school documents, and send tuition fee payment reminders with instant receipt delivery.
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="edu-faq-box">
        <button type="button" class="edu-faq-q-btn" onclick="toggleEduFaq(this)">
          <span class="q-title"><span>✅</span> How does InboxWa help institutions in enabling and using WhatsApp Business API?</span>
          <svg class="edu-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="edu-faq-a-pane">
          As an official Meta Tech Partner, InboxWa fast-tracks your Meta Business Manager verification, secures your official Green Tick, and sets up your phone numbers within 24 hours. We provide pre-built education templates, counseling journey workflows, and CRM integrations so your teams can start communicating immediately with zero technical overhead.
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="edu-faq-box">
        <button type="button" class="edu-faq-q-btn" onclick="toggleEduFaq(this)">
          <span class="q-title"><span>✅</span> Can InboxWa integrate with our existing Education CRM or LMS?</span>
          <svg class="edu-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="edu-faq-a-pane">
          Yes! InboxWa features bidirectional API and Webhook integrations with leading education CRMs including LeadSquared, Salesforce Education Cloud, Zoho CRM, HubSpot, ERPNext, and custom university databases. Lead records, chat transcripts, and status updates sync automatically in real time.
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="edu-faq-box">
        <button type="button" class="edu-faq-q-btn" onclick="toggleEduFaq(this)">
          <span class="q-title"><span>✅</span> Are fee reminders, exam results, and parent broadcasts compliant with Meta policy?</span>
          <svg class="edu-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="edu-faq-a-pane">
          Yes, 100%. Utility and Transactional WhatsApp message templates for fee installment alerts, exam hall tickets, admit cards, parent-teacher meetings, and student attendance alerts comply fully with Meta's Official WhatsApp Business messaging policies and enjoy guaranteed delivery tiers.
        </div>
      </div>
    </div>

    <div class="edu-faq-support-strip">
      <strong>Still Have questions?</strong>
      <a href="mailto:support@inboxwa.com" class="btn btn-outline" style="border-color:#CBD5E1; color:#0F172A; font-weight:700;">Email Us (support@inboxwa.com)</a>
      <a href="https://wa.me/918050854445?text=Hi%20InboxWa%2C%20I%20have%20questions%20regarding%20WhatsApp%20API%20for%20our%20institution" target="_blank" rel="noopener" class="btn btn-primary" style="font-weight:700;">WhatsApp Us (+91 80508 54445)</a>
    </div>
  </div>
</section>


<!-- =========================================================================
     15. BOTTOM CALL TO ACTION BANNER (Section 12 from Meritto Match)
     ========================================================================= -->
<section class="edu-bottom-cta-banner">
  <div class="container">
    <div class="edu-bottom-cta-inner">
      <div class="edu-bottom-cta-copy">
        <h2>Ready to experience the power of <span class="highlightText">WhatsApp Business API</span> to boost your conversions and ROI?</h2>
        <p>Join hundreds of forward-thinking universities, colleges, coaching academies, and EdTech platforms growing enrollments with InboxWa.</p>
      </div>

      <div class="edu-bottom-cta-actions">
        <button type="button" class="edu-btn-demo" onclick="openEduModal()">
          <span>Book a Live Demo</span>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
        <a href="/auth/register" class="edu-btn-whatsapp-direct">Start 14-Day Free Trial</a>
      </div>
    </div>
  </div>
</section>


<!-- =========================================================================
     16. DEMO MODAL POPUP (Triggered by Book a Demo buttons)
     ========================================================================= -->
<div class="edu-modal-overlay" id="edu-demo-modal" onclick="handleModalBackdrop(event)">
  <div class="edu-modal-card">
    <button type="button" class="edu-modal-close" onclick="closeEduModal()" aria-label="Close modal">&times;</button>
    
    <div style="margin-bottom:1.5rem;">
      <h3 style="font-size:1.4rem; font-weight:800; color:#fff; margin:0 0 0.4rem;">Book an Education CRM Demo</h3>
      <p style="font-size:0.88rem; color:rgba(255,255,255,0.7); margin:0;">Our Education Solutions Specialist will demonstrate tailored student flows for your institution.</p>
    </div>

    <form onsubmit="handleModalSubmit(event)">
      <div class="edu-form-grid">
        <div class="edu-form-group">
          <label for="modal-inst">Institution Name</label>
          <input type="text" id="modal-inst" required placeholder="e.g. Apex Global University">
        </div>
        <div class="edu-form-group">
          <label for="modal-name">Your Name</label>
          <input type="text" id="modal-name" required placeholder="e.g. Prof. Arvind Kumar">
        </div>
        <div class="edu-form-group">
          <label for="modal-phone">WhatsApp Phone Number</label>
          <input type="tel" id="modal-phone" required placeholder="+91 98765 43210">
        </div>
        <div class="edu-form-group">
          <label for="modal-email">Official Work Email</label>
          <input type="email" id="modal-email" required placeholder="admissions@university.edu">
        </div>
        <button type="submit" class="edu-form-submit-btn" style="margin-top:0.5rem;" id="modal-submit-btn">
          <span>Confirm Demo Booking</span>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
      </div>
    </form>
    <div id="modal-success-msg" style="display:none; margin-top:1rem; padding:0.85rem; border-radius:10px; background:#065F46; color:#D1FAE5; font-size:0.88rem; text-align:center;">
      ✓ Demo request received! An InboxWa education specialist will contact you on WhatsApp within 15 minutes.
    </div>
  </div>
</div>


<!-- =========================================================================
     17. PAGE INTERACTIVE JAVASCRIPT
     ========================================================================= -->
<script>
function toggleEduFaq(button) {
  const box = button.closest('.edu-faq-box');
  const wasActive = box.classList.contains('active');
  document.querySelectorAll('.edu-faq-box').forEach(b => b.classList.remove('active'));
  if (!wasActive) {
    box.classList.add('active');
  }
}

function updateEduRoi(val) {
  val = parseInt(val, 10);
  document.getElementById('edu-roi-val').textContent = val + ' / mo';
  const extraStudents = Math.round(val * 0.43);
  const hoursSaved = Math.round(val * 0.25);
  const revLakhs = (extraStudents * 0.75).toFixed(1);

  document.getElementById('edu-roi-extra').textContent = '+' + extraStudents + ' Students';
  document.getElementById('edu-roi-hours').textContent = hoursSaved + ' Hrs/Mo';
  document.getElementById('edu-roi-rev').textContent = '₹' + revLakhs + ' Lakhs+';
}

function openEduModal() {
  const modal = document.getElementById('edu-demo-modal');
  if (modal) modal.classList.add('is-active');
}

function closeEduModal() {
  const modal = document.getElementById('edu-demo-modal');
  if (modal) modal.classList.remove('is-active');
}

function handleModalBackdrop(e) {
  if (e.target.id === 'edu-demo-modal') {
    closeEduModal();
  }
}

function handleEduFormSubmit(e) {
  e.preventDefault();
  const btn = document.getElementById('edu-submit-btn');
  const inst = document.getElementById('edu-inst-name').value;
  const name = document.getElementById('edu-user-name').value;
  const phone = document.getElementById('edu-user-phone').value;
  const type = document.getElementById('edu-inst-type').value;

  btn.innerHTML = '<span>Connecting to InboxWa CRM...</span>';
  btn.disabled = true;

  setTimeout(function() {
    btn.innerHTML = '<span>✓ Demo Booked! Opening WhatsApp...</span>';
    btn.style.background = '#059669';
    const text = encodeURIComponent('Hi InboxWa, I requested an Education Demo for ' + inst + ' (' + name + ', ' + type + '). Please share details.');
    window.open('https://wa.me/918050854445?text=' + text, '_blank');
  }, 1000);
}

function handleModalSubmit(e) {
  e.preventDefault();
  const btn = document.getElementById('modal-submit-btn');
  const inst = document.getElementById('modal-inst').value;
  const name = document.getElementById('modal-name').value;

  btn.innerHTML = '<span>Scheduling...</span>';
  btn.disabled = true;

  setTimeout(function() {
    document.getElementById('modal-success-msg').style.display = 'block';
    btn.style.display = 'none';
    setTimeout(function() {
      closeEduModal();
    }, 2500);
  }, 800);
}

function openFlowModal() {
  const m = document.getElementById('flowLightboxModal');
  if (m) m.classList.add('is-active');
  document.body.style.overflow = 'hidden';
}

function closeFlowModal(e) {
  if (!e || e.target.id === 'flowLightboxModal' || e.target.classList.contains('flow-lightbox-close')) {
    const m = document.getElementById('flowLightboxModal');
    if (m) m.classList.remove('is-active');
    document.body.style.overflow = '';
  }
}

document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeFlowModal();
    closeEduModal();
  }
});
</script>

<!-- Global Site Footer (User Requirement: Use our footer, not Meritto's) -->
<?php include __DIR__ . '/../../includes/footer.php'; ?>
