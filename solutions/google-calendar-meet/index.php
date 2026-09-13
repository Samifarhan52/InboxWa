<?php
$basePath = '../../';
$pageTitle = 'Google Calendar + Google Meet + WhatsApp | Appointment Automation | InboxWa';
$pageDescription = 'Connect Google Calendar and Google Meet with InboxWa. Book appointments, create meetings, send WhatsApp confirmations and reminders automatically.';
$canonicalUrl = 'https://inboxwa.com/solutions/google-calendar-meet/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/google-calendar-meet.css?v=1">
<link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=2">


<section class="gcm-hero" aria-label="Google Calendar Meet Hero">
  <div class="gcm-hero-bg" aria-hidden="true"></div>
  <div class="container">
    <div class="gcm-hero-grid">
      <div class="gcm-hero-copy">
        <span class="badge gcm-badge">GOOGLE CALENDAR + GOOGLE MEET INTEGRATION</span>
        <h1>Book Meetings. Automate Reminders. <span class="grad">Close More Deals.</span></h1>
        <p class="gcm-lead">Connect Google Calendar and Google Meet with InboxWa to let customers book appointments, automatically create meetings and receive confirmations and reminders on WhatsApp.</p>
        <div class="gcm-ctas">
          <a href="/auth/register" class="btn btn-primary btn-lg">Get Started</a>
          <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Book a Demo</button>
        </div>
        <div class="gcm-tabs" id="gcm-tabs" role="tablist">
          <button type="button" class="is-active" data-flow="sales">Sales Demo</button>
          <button type="button" data-flow="consult">Consultation</button>
          <button type="button" data-flow="edu">Education</button>
          <button type="button" data-flow="re">Real Estate</button>
          <button type="button" data-flow="support">Support</button>
          <button type="button" data-flow="onboard">Onboarding</button>
        </div>
      </div>
      <div class="gcm-phone-stage">
        <div class="gcm-float gcm-float-1"><b>Appointment Booked</b>Confirmed</div>
        <div class="gcm-float gcm-float-2"><b>Google Meet Created</b>Link ready</div>
        <div class="gcm-float gcm-float-3"><b>WhatsApp Sent</b>Confirmation</div>
        <div class="gcm-float gcm-float-4"><b>Reminder Scheduled</b>Before meeting</div>
        <div class="gcm-phone" aria-label="Booking simulation">
          <div class="gcm-notch"></div>
          <div class="gcm-screen">
            <div class="gcm-wa-head">
              <div class="gcm-av">HB</div>
              <div><strong>InboxWa</strong><small>Appointment Assistant</small></div>
            </div>
            <div class="gcm-wa-body" id="gcm-wa-body">
              <div class="gcm-typing" id="gcm-typing"><i></i><i></i><i></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="how">
  <div class="container">
    <div class="section-header reveal">
      <h2>From Booking to Meeting — Automatically</h2>
      <p class="lead">Customer → InboxWa → Google Calendar → Google Meet → WhatsApp</p>
    </div>
    <div class="gcm-steps reveal">
      <div class="gcm-step"><div class="num">01</div><h3>Customer Chooses a Time</h3><p>Customer selects an available appointment slot.</p></div>
      <div class="gcm-step"><div class="num">02</div><h3>Google Calendar Creates the Event</h3><p>Appointment details are added to the connected calendar.</p></div>
      <div class="gcm-step"><div class="num">03</div><h3>Google Meet Link</h3><p>The meeting can include a Google Meet link when configured.</p></div>
      <div class="gcm-step"><div class="num">04</div><h3>WhatsApp Confirmation</h3><p>Customer receives appointment details through WhatsApp.</p></div>
      <div class="gcm-step"><div class="num">05</div><h3>Automated Reminder</h3><p>Send appropriate reminders before the scheduled meeting.</p></div>
    </div>
  </div>
</section>
<div class="hb-img-slot" data-hb-img-slot>
  
  <div class="hb-img-fallback">
    <div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div>
    <strong>Calendar Booking + Time Slots</strong>
    <span>Available slots and booking on calendar UI.</span>
  </div>
</div>


<section class="section section-alt" id="calendar">
  <div class="container">
    <div class="gcm-split reveal">
      <div class="gcm-cal-mock">
        <div class="gcm-cal-head">Monday · Availability</div>
        <div class="gcm-slot free">10:00 AM — Available</div>
        <div class="gcm-slot booked">12:00 PM — Booked</div>
        <div class="gcm-slot free">2:00 PM — Available</div>
        <div class="gcm-slot free">4:00 PM — Available</div>
      </div>
      <div>
        <h2>Turn Your Calendar Into a Booking System</h2>
        <ul class="check-list">
          <li>Appointment scheduling</li>
          <li>Availability management</li>
          <li>Event creation</li>
          <li>Date &amp; time selection</li>
          <li>Team scheduling</li>
          <li>Calendar reminders</li>
          <li>Rescheduling support where configured</li>
          <li>Automated customer notifications</li>
        </ul>
        <a href="/auth/register" class="btn btn-primary">Start Booking Automation</a>
        <p class="gcm-note">Google Calendar branding used for illustration only — not an official Google endorsement.</p>
      </div>
    </div>
  </div>
</section>

<section class="section" id="meet">
  <div class="container">
    <div class="section-header reveal"><h2>Every Booking Can Become a Meeting</h2></div>
    <div class="gcm-meet-card reveal">
      <strong>Client Consultation</strong>
      <div class="gcm-meet-meta"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> 22 August &nbsp; ⏰ 4:00 PM</div>
      <div class="gcm-meet-btn">Google Meet · Join Meeting</div>
    </div>
    <div class="gcm-meet-flow reveal">
      <span>Booking</span><span class="arr">→</span>
      <span>Calendar Event</span><span class="arr">→</span>
      <span>Meet Link</span><span class="arr">→</span>
      <span>WhatsApp Confirmation</span>
    </div>
    <div class="gcm-meet-feats reveal">
      <span>Online meetings</span><span>Remote consultations</span><span>Sales demos</span>
      <span>Customer onboarding</span><span>Support sessions</span><span>Education counselling</span><span>Partner meetings</span>
    </div>
  </div>
</section>
<div class="hb-img-slot" data-hb-img-slot>
  
  <div class="hb-img-fallback">
    <div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div>
    <strong>Calendar → Google Meet</strong>
    <span>Event creation with Meet link visual.</span>
  </div>
</div>


<section class="section section-gradient-1" id="whatsapp">
  <div class="container">
    <div class="section-header reveal"><h2>Keep Customers Updated on WhatsApp</h2></div>
    <div class="gcm-msg-seq reveal">
      <div class="gcm-msg"><b>Booking Confirmation</b><p>Your meeting is confirmed.</p></div>
      <div class="gcm-msg"><b>Reminder</b><p>Your meeting starts in 1 hour.</p></div>
      <div class="gcm-msg"><b>Meeting Time</b><p>Your meeting is starting now.</p></div>
      <div class="gcm-msg"><b>Follow-up</b><p>Thank you for joining. Do you need any further assistance?</p></div>
    </div>
    <p class="gcm-note reveal">Use approved WhatsApp templates where required.</p>
  </div>
</section>

<section class="section" id="reminders">
  <div class="container">
    <div class="section-header reveal"><h2>Automatic Reminder Flow</h2><p class="lead">Example timings — configurable where supported.</p></div>
    <div class="gcm-timeline reveal">
      <span>Meeting Booked</span><span class="arr">↓</span>
      <span>Confirmation</span><span class="arr">↓</span>
      <span>1 Day Before</span><span class="arr">↓</span>
      <span>1 Hour Before</span><span class="arr">↓</span>
      <span>Meeting Time</span><span class="arr">↓</span>
      <span>Post-Meeting Follow-up</span>
    </div>
  </div>
</section>
<div class="hb-img-slot hb-img-slot--dark" data-hb-img-slot>
  
  <div class="hb-img-fallback">
    <div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div>
    <strong>WhatsApp Confirmation + Reminder</strong>
    <span>Meeting confirmed and reminder on mobile.</span>
  </div>
</div>


<section class="section section-alt" id="types">
  <div class="container">
    <div class="section-header reveal"><h2>Appointment Types</h2></div>
    <div class="gcm-types">
      <div class="card reveal"><h3>Sales Demo</h3><p>Book product demonstrations automatically.</p></div>
      <div class="card reveal"><h3>Consultation</h3><p>Allow customers to schedule consultations.</p></div>
      <div class="card reveal"><h3>Education Counselling</h3><p>Schedule student counselling meetings.</p></div>
      <div class="card reveal"><h3>Real Estate Consultation</h3><p>Schedule buyer/property discussions.</p></div>
      <div class="card reveal"><h3>Customer Support</h3><p>Let customers book support sessions.</p></div>
      <div class="card reveal"><h3>Onboarding</h3><p>Schedule new customer onboarding.</p></div>
      <div class="card reveal"><h3>Partner Meeting</h3><p>Book Affiliate, Agency and White Label partner meetings.</p></div>
    </div>
  </div>
</section>

<section class="section" id="industries">
  <div class="container">
    <div class="section-header reveal"><h2>Business Use Cases</h2></div>
    <div class="gcm-industries">
      <div class="card reveal"><h3>SaaS &amp; Technology</h3><p>Product demos and sales meetings.</p></div>
      <div class="card reveal"><h3>Education</h3><p>Counselling, admissions and online sessions.</p></div>
      <div class="card reveal"><h3>Real Estate</h3><p>Property consultation and buyer meetings.</p></div>
      <div class="card reveal"><h3>Agencies</h3><p>Client consultation and strategy meetings.</p></div>
      <div class="card reveal"><h3>Healthcare / Professional Services</h3><p>Appointment and consultation workflows where applicable.</p></div>
      <div class="card reveal"><h3>Customer Support</h3><p>Scheduled support sessions.</p></div>
    </div>
  </div>
</section>

<section class="section section-gradient-1" id="dashboard">
  <div class="container">
    <div class="section-header reveal"><h2>Appointment Dashboard</h2><p class="lead">Illustrative demo data.</p></div>
    <div class="gcm-dash reveal">
      <div class="gcm-dash-item"><span>Today's Meetings</span><strong>—</strong><small>Demo</small></div>
      <div class="gcm-dash-item"><span>Upcoming</span><strong>—</strong><small>Demo</small></div>
      <div class="gcm-dash-item"><span>Available Slots</span><strong>—</strong><small>Demo</small></div>
      <div class="gcm-dash-item"><span>Completed</span><strong>—</strong><small>Demo</small></div>
      <div class="gcm-dash-item"><span>Cancelled</span><strong>—</strong><small>Demo</small></div>
      <div class="gcm-dash-item"><span>Follow-ups</span><strong>—</strong><small>Demo</small></div>
    </div>
    <div class="gcm-meeting-row reveal">
      <strong>Rahul – Demo</strong>
      <span>Today · 4:00 PM · Google Meet · Confirmed</span>
    </div>
  </div>
</section>

<section class="section" id="team">
  <div class="container">
    <div class="section-header reveal"><h2>Keep Your Team's Meetings Organized</h2></div>
    <div class="gcm-team reveal">
      <div class="gcm-team-card"><b>Rahul</b><span class="free">Available</span></div>
      <div class="gcm-team-card"><b>Priya</b><span class="busy">Meeting</span></div>
      <div class="gcm-team-card"><b>Amit</b><span class="free">Available</span></div>
    </div>
    <div class="gcm-team-flow reveal">
      <span>Assign</span><span class="arr">→</span>
      <span>Schedule</span><span class="arr">→</span>
      <span>Meet</span><span class="arr">→</span>
      <span>Follow-up</span>
    </div>
  </div>
</section>

<section class="section section-alt" id="automation">
  <div class="container">
    <div class="section-header reveal"><h2>Automation Builder</h2></div>
    <div class="gcm-builder reveal">
      <div><span class="tag when">WHEN</span> Appointment is booked</div>
      <div class="arr">↓</div>
      <div><span class="tag act">ACTION</span> Create Calendar Event</div>
      <div class="arr">↓</div>
      <div><span class="tag act">ACTION</span> Attach Meet details where configured</div>
      <div class="arr">↓</div>
      <div><span class="tag act">ACTION</span> Send WhatsApp Confirmation</div>
      <div class="arr">↓</div>
      <div><span class="tag wait">WAIT</span> Before Meeting</div>
      <div class="arr">↓</div>
      <div><span class="tag act">ACTION</span> Send Reminder</div>
      <div class="arr">↓</div>
      <div><span class="tag act">ACTION</span> Send Follow-up</div>
    </div>
  </div>
</section>

<section class="section" id="integrations">
  <div class="container">
    <div class="section-header reveal">
      <h2>Connect Your Meeting Workflow</h2>
      <p class="lead">Lead → Booking → Calendar → Meet → WhatsApp → CRM</p>
    </div>
    <div class="gcm-integrations reveal">
      <div class="card">Google Calendar</div>
      <div class="card">Google Meet</div>
      <div class="card">WhatsApp</div>
      <div class="card">Website</div>
      <div class="card">CRM</div>
      <div class="card">Google Forms</div>
    </div>
  </div>
</section>

<section class="section section-gradient-1" id="benefits">
  <div class="container">
    <div class="section-header reveal"><h2>Benefits</h2></div>
    <div class="gcm-benefits">
      <div class="card reveal"><h3>Save Time</h3><p>Reduce manual appointment coordination.</p></div>
      <div class="card reveal"><h3>Reduce No-Shows</h3><p>Send timely customer reminders.</p></div>
      <div class="card reveal"><h3>Faster Booking</h3><p>Let customers choose available times.</p></div>
      <div class="card reveal"><h3>Better Experience</h3><p>Keep customers informed through WhatsApp.</p></div>
      <div class="card reveal"><h3>Centralized Scheduling</h3><p>Manage appointments through your connected calendar.</p></div>
      <div class="card reveal"><h3>More Productive Teams</h3><p>Spend less time coordinating meetings.</p></div>
    </div>
  </div>
</section>

<section class="section section-dark" id="journey">
  <div class="container">
    <div class="section-header reveal"><h2 style="color:#fff">Real Customer Journey</h2></div>
    <div class="gcm-journey reveal">
      <span>Enquiry</span><span class="arr">↓</span>
      <span>Choose Time</span><span class="arr">↓</span>
      <span>Confirmed</span><span class="arr">↓</span>
      <span>Calendar Event</span><span class="arr">↓</span>
      <span>Google Meet</span><span class="arr">↓</span>
      <span>WhatsApp Reminder</span><span class="arr">↓</span>
      <span>Meeting</span><span class="arr">↓</span>
      <span>Follow-up</span>
    </div>
  </div>
</section>

<section class="section" id="faq">
  <div class="container">
    <div class="section-header reveal"><h2>FAQ</h2></div>
    <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0">
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can customers book meetings through WhatsApp?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — customers can select available slots in WhatsApp flows and receive confirmation messages.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can appointments be added to Google Calendar?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — when Google Calendar is connected, events can be created from booked appointments.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can Google Meet links be included in meetings?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — Meet details can be attached when configured with the calendar event.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can customers receive WhatsApp confirmations?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — confirmation messages can be sent after booking via WhatsApp.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can meeting reminders be automated?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — reminders can be sent before the meeting based on your automation setup.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I use this for sales demos?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — sales demo booking is a primary use case.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I use it for education counselling?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — counselling and admission-related slots can be scheduled.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I use it for real estate consultations?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — property consultation slots can be booked and confirmed on WhatsApp.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can multiple team members use the system?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Team calendars and assignment depend on your connected Google Calendar setup and product configuration.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I connect Google Forms with the booking workflow?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — Google Forms can feed leads into InboxWa, which can then drive booking and calendar flows where configured.</div></div></div>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container" style="text-align:center">
    <div class="section-header reveal">
      <h2 style="color:#fff">Make Every Appointment Automatic</h2>
      <p class="lead" style="color:rgba(255,255,255,.75)">Connect Google Calendar and Google Meet with InboxWa and turn bookings into seamless WhatsApp-powered meeting experiences.</p>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="/auth/register" class="btn btn-primary btn-lg">Get Started</a>
        <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Book a Demo</button>
              <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn btn-download-data btn-lg">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download Data
        </a>
</div>
    </div>
  </div>
</section>

<script src="/assets/js/google-calendar-meet.js?v=1" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
