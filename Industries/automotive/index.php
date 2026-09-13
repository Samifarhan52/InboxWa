<?php
$basePath = '../../';
$pageTitle = 'Automotive Sales & Service Automation | Test Drive & Leads | InboxWa';
$pageDescription = 'Capture vehicle enquiries, book test drives, manage sales follow-ups and service appointments on WhatsApp with InboxWa.';
$canonicalUrl = 'https://inboxwa.com/industries/automotive/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/automotive.css?v=1">
<link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=2">

<section class="au-hero" aria-label="Automotive automation hero">
  <div class="au-hero-bg" aria-hidden="true"></div>
  <div class="container">
    <div class="au-hero-grid">
      <div class="au-hero-copy">
        <span class="badge au-badge">AUTOMOTIVE AUTOMATION</span>
        <h1>Turn Every Vehicle Enquiry Into a <span class="grad">Sales Opportunity</span></h1>
        <p class="au-lead">Capture automotive leads, answer vehicle enquiries, book test drives, manage follow-ups and connect customers with your sales team through WhatsApp automation.</p>
        <div class="au-ctas">
          <a href="/auth/register" class="btn btn-primary btn-lg">Start Free</a>
          <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Book Automotive Demo</button>
        </div>
      </div>
      <div class="au-phone-stage">
        <div class="au-float au-f1"><b>New Lead</b><svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
        <div class="au-float au-f2"><b>Test Drive</b>Booked</div>
        <div class="au-phone">
          <div class="au-notch"></div>
          <div class="au-screen">
            <div class="au-head"><div class="au-av">AU</div><div><strong>Dealership</strong><small>Demo vehicle flow</small></div></div>
            <div class="au-body" id="au-body"><div class="au-typing" id="au-typing"><i></i><i></i><i></i></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="journey">
  <div class="container">
    <div class="section-header reveal"><h2>From First Enquiry to Vehicle Purchase</h2></div>
    <div class="au-flow reveal">
      <span>Ad / Website</span><span class="arr">↓</span>
      <span>Vehicle Enquiry</span><span class="arr">↓</span>
      <span>WhatsApp</span><span class="arr">↓</span>
      <span>Vehicle Selection</span><span class="arr">↓</span>
      <span>Qualification</span><span class="arr">↓</span>
      <span>Test Drive</span><span class="arr">↓</span>
      <span>Sales Follow-up</span><span class="arr">↓</span>
      <span>Purchase</span>
    </div>
  </div>
</section>

<section class="section section-alt" id="enquiry">
  <div class="container">
    <div class="section-header reveal"><h2>Let Customers Explore Vehicles on WhatsApp</h2></div>
    <div class="au-chat reveal">
      <p class="m user">Show me available SUVs.</p>
      <p class="m bot">SUV · Sedan · Hatchback · EV · Luxury</p>
      <p class="m bot">Demo SUV A · Demo SUV B · View Details · Book Test Drive</p>
      <p class="m ok">Demo vehicle data only</p>
    </div>
  </div>
</section>

<section class="section" id="testdrive">
  <div class="container">
    <div class="section-header reveal"><h2>Book Test Drives Without Back-and-Forth</h2></div>
    <div class="au-flow reveal">
      <span>Select Vehicle</span><span class="arr">→</span>
      <span>Location</span><span class="arr">→</span>
      <span>Date</span><span class="arr">→</span>
      <span>Time</span><span class="arr">→</span>
      <span>Confirm</span>
    </div>
    <div class="au-confirm reveal">
      <strong><svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Test Drive Confirmed · Demo</strong>
      <p>Vehicle: Demo SUV · Date: 28 Aug · Time: 11:30 AM · Location: Demo Showroom</p>
    </div>
  </div>
</section>

<section class="section section-gradient-1" id="sales">
  <div class="container">
    <div class="section-header reveal"><h2>Automatically Qualify Automotive Leads</h2></div>
    <div class="au-flow reveal">
      <span>New Lead</span><span class="arr">→</span>
      <span>Vehicle Interest</span><span class="arr">→</span>
      <span>Timeline</span><span class="arr">→</span>
      <span>Test Drive</span><span class="arr">→</span>
      <span>Sales Team</span>
    </div>
  </div>
</section>

<section class="section" id="dashboard">
  <div class="container">
    <div class="section-header reveal"><h2>Sales Team Dashboard</h2><p class="lead">Demo Data</p></div>
    <div class="au-cards">
      <div class="card reveal">New Leads</div>
      <div class="card reveal">Vehicle Enquiries</div>
      <div class="card reveal">Test Drives</div>
      <div class="card reveal">Follow-ups</div>
      <div class="card reveal">Hot Leads</div>
      <div class="card reveal">Converted</div>
    </div>
  </div>
</section>

<section class="section section-alt" id="service">
  <div class="container">
    <div class="section-header reveal"><h2>Stay Connected After the Sale</h2></div>
    <div class="au-chat reveal">
      <p class="m user">I want to book a service.</p>
      <p class="m bot">Regular Service · Repair · Inspection</p>
      <p class="m ok">Service Appointment Confirmed <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> · Demo</p>
    </div>
    <div class="au-cards" style="margin-top:1.25rem">
      <div class="card reveal">Service Booking</div>
      <div class="card reveal">Service Reminder</div>
      <div class="card reveal">Workshop Appointment</div>
      <div class="card reveal">Customer Support</div>
    </div>
  </div>
</section>

<section class="section section-dark" id="play">
  <div class="container" style="text-align:center">
    <div class="section-header reveal"><h2 style="color:#fff">Watch a Customer Journey From Enquiry to Test Drive</h2></div>
    <button type="button" class="btn btn-primary btn-lg" id="au-play">▶ Play Journey</button>
    <div class="au-play-out" id="au-play-out">Click play to animate the journey.</div>
  </div>
</section>

<section class="section" id="usecases">
  <div class="container">
    <div class="section-header reveal"><h2>One Platform for Every Automotive Workflow</h2></div>
    <div class="au-cards">
      <div class="card reveal">Vehicle Enquiries</div>
      <div class="card reveal">Test Drive Booking</div>
      <div class="card reveal">Lead Generation</div>
      <div class="card reveal">Sales Follow-up</div>
      <div class="card reveal">Service Booking</div>
      <div class="card reveal">Service Reminders</div>
      <div class="card reveal">EV Enquiries</div>
      <div class="card reveal">Used Car Enquiries</div>
      <div class="card reveal">Offers &amp; Campaigns</div>
      <div class="card reveal">Customer Support</div>
    </div>
  </div>
</section>

<section class="section section-alt" id="dealership">
  <div class="container">
    <div class="section-header reveal"><h2>Connect Your Entire Dealership</h2></div>
    <div class="au-flow reveal">
      <span>Marketing</span><span class="arr">→</span>
      <span>Lead</span><span class="arr">→</span>
      <span>Sales</span><span class="arr">→</span>
      <span>Test Drive</span><span class="arr">→</span>
      <span>Purchase</span><span class="arr">→</span>
      <span>Service</span><span class="arr">→</span>
      <span>Repeat</span>
    </div>
  </div>
</section>

<div class="edu-img-card-wrap reveal" style="margin: 2.5rem 0;">
  <img src="/assets/images/auto_test_drive_banner.jpg" alt="WhatsApp Automotive Dealership Test Drive Booking & Brochure PDF" loading="lazy">
  <div class="edu-img-caption-badge">
    <strong><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 16H9m10 0a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V9l2.5-4h9.5L19 9v7z"/><circle cx="7.5" cy="14.5" r="1.5"/><circle cx="16.5" cy="14.5" r="1.5"/></svg> Interactive Test Drive Booking &amp; Showroom Flow</strong>
    <span>Instant Brochure PDF &amp; Location Pin</span>
  </div>
</div>

<div class="edu-img-card-wrap reveal" style="margin: 2.5rem 0;">
  <img src="/assets/images/edtech_shared_inbox.jpg" alt="InboxWa Automotive Sales Team Workspace & Lead Pipeline" loading="lazy">
  <div class="edu-img-caption-badge">
    <strong><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg> Dealership Sales Team Dashboard &amp; Lead Tracker</strong>
    <span>Enquiry → Test Drive → Purchase</span>
  </div>
</div>

<section class="section" id="benefits">
  <div class="container">
    <div class="section-header reveal"><h2>Benefits</h2></div>
    <div class="au-cards">
      <div class="card reveal">Instant Lead Response</div>
      <div class="card reveal">More Test Drive Bookings</div>
      <div class="card reveal">Automated Follow-ups</div>
      <div class="card reveal">Centralized Conversations</div>
      <div class="card reveal">Sales Team Visibility</div>
      <div class="card reveal">Service Automation</div>
      <div class="card reveal">Better Customer Experience</div>
      <div class="card reveal">Connected Operations</div>
    </div>
  </div>
</section>

<section class="section" id="faq">
  <div class="container">
    <div class="section-header reveal"><h2>FAQ</h2></div>
    <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0">
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">How can InboxWa help automotive dealerships?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Capture vehicle enquiries, share demo model options, book test drives and route leads to sales and service teams.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I automate test-drive booking?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — guide customers through vehicle, date and time selection in WhatsApp conversations where configured.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I manage service appointments?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — service booking and reminder-style workflows can be automated based on your setup.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can automotive leads connect to CRM?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Where CRM integration is configured, leads and activity can sync to your sales tools.</div></div></div>
    </div>
  </div>
</section>

<section class="section section-dark au-final">
  <div class="container" style="text-align:center">
    <div class="section-header reveal">
      <h2 style="color:#fff">Turn Every Automotive Enquiry Into Your Next Opportunity</h2>
      <p class="lead" style="color:rgba(255,255,255,.75)">Capture leads, book test drives, automate follow-ups and connect your sales &amp; service teams with InboxWa.</p>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="/auth/register" class="btn btn-primary btn-lg">Start Free</a>
        <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Book Automotive Demo</button>
              <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn btn-download-data btn-lg">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download Data
        </a>
</div>
    </div>
  </div>
</section>

<script src="/assets/js/automotive.js?v=1" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
