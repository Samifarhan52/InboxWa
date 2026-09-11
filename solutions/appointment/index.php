<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Appointment Booking on WhatsApp Flows | Calendar Sync | InboxWa';
$pageDescription = 'Automate appointments and bookings natively inside WhatsApp. Bi-directional Google & Outlook calendar sync, automated deposit collection, and 80% lower no-shows.';
$canonicalUrl = 'https://inboxwa.com/solutions/appointment/';
$ogImage = 'assets/images/products/appointment/hero.png';

include __DIR__ . '/../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/product-pages.css">

<div class="prod-page">
  <div class="prod-ambient-1"></div>
  <div class="prod-ambient-2"></div>

  <!-- Hero Section -->
  <section class="prod-hero">
    <div class="prod-hero-grid">
      <div class="prod-hero-content">
        <div class="prod-badge">
          <span class="prod-badge-dot"></span>
          Automated Booking
        </div>
        <h1 class="prod-hero-title">
          Automate Appointments and Timelines on <span class="prod-gradient-text">WhatsApp Flows</span>
        </h1>
        <p class="prod-hero-desc">
          Let clients pick dates, select practitioners, and book appointments inside WhatsApp. Sync with Google and Outlook calendars, collect deposits, and reduce no-shows with automated reminders.
        </p>
        <div class="prod-hero-ctas">
          <a href="<?php echo $bp; ?>auth/register" class="prod-btn-primary">
            Start Booking Free
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
          <a href="#scheduling-engine" class="prod-btn-secondary">
            Explore Engine
          </a>
        </div>
        <div class="prod-bullets">
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
            Google & Outlook Sync
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
            Interactive booking maps
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
            80% lower no-show rates
          </div>
        </div>
      </div>
      <div class="prod-hero-media">
        <div class="prod-hero-media-wrapper">
          <img src="<?php echo $bp; ?>assets/images/products/appointment/hero.png" alt="WhatsApp Appointment Booking Flow" class="prod-hero-media-img" width="1080" height="1080">
        </div>
      </div>
    </div>
  </section>

  <!-- In-Chat Booking Journey (3 Steps) -->
  <section class="prod-section prod-section-alt" id="scheduling-engine">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">SCHEDULING ENGINE</span>
        <h2 class="prod-section-title">The In-Chat Booking Journey</h2>
        <p class="prod-section-desc">
          Provide a complete self-service scheduling journey directly within WhatsApp conversations without redirects.
        </p>
      </div>
      <div class="prod-steps-grid">
        <div class="prod-step-card">
          <div class="prod-step-media">
            <img src="<?php echo $bp; ?>assets/images/products/appointment/journey-browse.png" alt="Browse and Select Slots" class="prod-step-img">
          </div>
          <div class="prod-step-body">
            <span class="prod-step-num">Step 01</span>
            <h3 class="prod-step-title">Browse & Select</h3>
            <p class="prod-step-desc">Clients browse availability dates and pick specialist slots natively inside WhatsApp — no website redirects needed.</p>
          </div>
        </div>
        <div class="prod-step-card">
          <div class="prod-step-media">
            <img src="<?php echo $bp; ?>assets/images/products/appointment/journey-deposit.png" alt="Deposit and Lock" class="prod-step-img">
          </div>
          <div class="prod-step-body">
            <span class="prod-step-num">Step 02</span>
            <h3 class="prod-step-title">Deposit & Lock</h3>
            <p class="prod-step-desc">Reduce no-shows by collecting secure booking deposit fees directly inside the chat with one-tap payment.</p>
          </div>
        </div>
        <div class="prod-step-card">
          <div class="prod-step-media">
            <img src="<?php echo $bp; ?>assets/images/products/appointment/journey-calendar.png" alt="Calendar Sync" class="prod-step-img">
          </div>
          <div class="prod-step-body">
            <span class="prod-step-num">Step 03</span>
            <h3 class="prod-step-title">Calendar Sync</h3>
            <p class="prod-step-desc">Reserved slots write immediately to Google/Outlook calendar to block conflicts in real time.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Industry Use Cases Grid -->
  <section class="prod-section" id="usecases">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">USE CASES</span>
        <h2 class="prod-section-title">Real-Time Scheduling Automation Examples</h2>
        <p class="prod-section-desc">
          See how medical, salon, sales, and automotive teams eliminate booking friction.
        </p>
      </div>
      <div class="prod-grid-4">
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
          </div>
          <h3 class="prod-card-title">Medical Clinics</h3>
          <p class="prod-card-desc">Patients select doctors, choose open times, and answer simple pre-consultation health questions straight from WhatsApp chat bubbles.</p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 10 10H12V2z"></path><path d="M12 2a10 10 0 0 1 10 10h-10V2z"></path></svg>
          </div>
          <h3 class="prod-card-title">Spas & Salons</h3>
          <p class="prod-card-desc">Beauty salons and spas let customers choose specific therapist operators, book massage slots, and secure bookings via reservation links.</p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
          </div>
          <h3 class="prod-card-title">Sales Demos</h3>
          <p class="prod-card-desc">B2B consultancies sync corporate Google calendars. When prospects interact with the WhatsApp Flow, they book Zoom video meet calls.</p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
          </div>
          <h3 class="prod-card-title">Automotive Test Drives</h3>
          <p class="prod-card-desc">Dealerships allow potential car buyers to select vehicle models and reserve preferred test-drive test slots directly.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Scheduling Architecture -->
  <section class="prod-section prod-section-alt" id="architecture">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">Architecture</span>
        <h2 class="prod-section-title">Robust Appointment Scheduling Architecture</h2>
        <p class="prod-section-desc">
          Built on official WhatsApp Flows to guarantee zero drop-offs and seamless calendar locking.
        </p>
      </div>
      <div class="prod-grid-4">
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
          </div>
          <h3 class="prod-card-title">Native WhatsApp Flows</h3>
          <p class="prod-card-desc">Build multi-step scheduling forms that display calendar lists natively inside WhatsApp without loading web browser links.</p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg>
          </div>
          <h3 class="prod-card-title">Calendar Integrations</h3>
          <p class="prod-card-desc">Establish bi-directional updates with Google Calendar, Outlook, and major CRM sheets to block booked slot items instantly.</p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
          </div>
          <h3 class="prod-card-title">No-Show Reminders</h3>
          <p class="prod-card-desc">Dispatch automated follow-up warnings (24 hours or 2 hours prior) via WhatsApp, helping businesses cut down missed bookings.</p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="1 4 1 10 7 10"></polyline><path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path></svg>
          </div>
          <h3 class="prod-card-title">Rescheduling & Cancellations</h3>
          <p class="prod-card-desc">Let clients manage their appointments with one-tap reschedule or cancellation buttons right in their confirmation chat.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs Section -->
  <section class="prod-section" id="faqs">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">FAQs</span>
        <h2 class="prod-section-title">Questions about Scheduling?</h2>
        <p class="prod-section-desc">
          Common questions about real-time calendar syncing, buffer times, and multi-timezone handling.
        </p>
      </div>
      <div class="prod-faq-container">
        <div class="prod-faq-list">
          <div class="prod-faq-item active">
            <button type="button" class="prod-faq-question">
              How does the calendar sync prevent overlap?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              InboxWa operates with real-time API integrations. Whenever a customer opens the WhatsApp Flow scheduler form, InboxWa queries your Google/Outlook calendar to block out slots that contain existing events.
            </div>
          </div>
          <div class="prod-faq-item">
            <button type="button" class="prod-faq-question">
              Can customers reschedule or cancel their slots?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              Absolutely. The confirmation cards dispatched to WhatsApp contain reschedule and cancel CTA buttons. Clicking them releases the blocked calendar slot and allows picking a new timing.
            </div>
          </div>
          <div class="prod-faq-item">
            <button type="button" class="prod-faq-question">
              Does it support multiple timezones?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              Yes. Timezones are managed dynamically. When a client triggers the scheduling form, the system automatically detects their phone's local timezone settings and displays calendar slot schedules adjusted accordingly.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA Box -->
  <section class="prod-section prod-section-alt">
    <div class="prod-container">
      <div class="prod-cta-box">
        <div class="prod-cta-glow"></div>
        <h2 class="prod-cta-title">Automate your appointments on WhatsApp</h2>
        <p class="prod-cta-subtitle">
          Save 15+ hours each week on scheduling back-and-forth and cut no-show rates by 80%.
        </p>
        <div class="prod-cta-actions">
          <a href="<?php echo $bp; ?>auth/register" class="prod-cta-btn-white">
            Start Booking Free
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
          <a href="<?php echo $bp; ?>#contact-section" class="prod-cta-btn-trans">
            Book a Demo
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var faqItems = document.querySelectorAll('.prod-faq-item');
  faqItems.forEach(function(item) {
    var btn = item.querySelector('.prod-faq-question');
    btn.addEventListener('click', function() {
      var isActive = item.classList.contains('active');
      faqItems.forEach(function(fi) { fi.classList.remove('active'); });
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });
});
</script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
