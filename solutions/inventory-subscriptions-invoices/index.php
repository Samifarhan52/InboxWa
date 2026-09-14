<?php
$basePath = '../../';
$pageTitle = 'Inventory, Subscriptions & Invoices | HelloBotz';
$pageDescription = 'Manage stock alerts, subscription renewals and invoice payments on WhatsApp with HelloBotz automation.';
$canonicalUrl = 'https://hellobotz.com/solutions/inventory-subscriptions-invoices/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/isi.css?v=1">
<link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=2">

<section class="isi-hero" aria-label="Inventory Subscriptions Invoices hero">
  <div class="isi-hero-bg" aria-hidden="true"></div>
  <div class="container">
    <div class="isi-hero-grid">
      <div class="isi-hero-copy">
        <span class="badge isi-badge">OPERATIONS ON WHATSAPP</span>
        <h1>Inventory, Subscriptions &amp; Invoices — <span class="grad">One Connected Flow</span></h1>
        <p class="isi-lead">Send stock alerts, manage renewals and collect invoice payments through WhatsApp workflows with HelloBotz.</p>
        <div class="isi-ctas">
          <a href="/auth/register" class="btn btn-primary btn-lg">Start Free</a>
          <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Book a Demo</button>
        </div>
      </div>
      <div class="isi-journey">
        <span>Stock / Plan / Invoice</span><span class="arr">↓</span>
        <span>HelloBotz</span><span class="arr">↓</span>
        <span>WhatsApp</span><span class="arr">↓</span>
        <span>Customer Action</span>
      </div>
    </div>
  </div>
</section>

<section class="section" id="tabs">
  <div class="container">
    <div class="isi-tabs" id="isi-tabs">
      <button type="button" class="is-active" data-panel="inventory">Inventory</button>
      <button type="button" data-panel="subscriptions">Subscriptions</button>
      <button type="button" data-panel="invoices">Invoice &amp; Payments</button>
    </div>

    <div class="isi-panel is-active" id="panel-inventory" data-panel="inventory">
      <h2 id="inventory">Stock Alerts on WhatsApp</h2>
      <p class="isi-desc">Notify customers when products are low, back in stock or ready to order — using approved messaging practices.</p>
      <div class="isi-flow">
        <span>Inventory Event</span><span class="arr">→</span>
        <span>HelloBotz</span><span class="arr">→</span>
        <span>WhatsApp Template</span><span class="arr">→</span>
        <span>Customer</span>
      </div>
      <div class="isi-chat">
        <p class="m bot">Hi! The item you asked about is back in stock.</p>
        <p class="m bot">View product · Talk to team</p>
        <p class="m ok">Stock alert sent <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> · Demo flow</p>
      </div>
      <div class="isi-cards">
        <div class="card">Low stock alerts</div>
        <div class="card">Back-in-stock notify</div>
        <div class="card">Product enquiry follow-up</div>
        <div class="card">Team inventory updates</div>
      </div>
    </div>

    <div class="isi-panel" data-panel="subscriptions" hidden>
      <h2 id="subscriptions">Renewals &amp; Plans</h2>
      <p class="isi-desc">Remind customers about plan renewals and guide them through the next step on WhatsApp.</p>
      <div class="isi-flow">
        <span>Plan Due</span><span class="arr">→</span>
        <span>HelloBotz</span><span class="arr">→</span>
        <span>Reminder</span><span class="arr">→</span>
        <span>Customer Reply</span>
      </div>
      <div class="isi-chat">
        <p class="m bot">Your plan renews soon. Would you like help continuing?</p>
        <p class="m bot">Renew · Change plan · Talk to team</p>
        <p class="m ok">Renewal reminder sent <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> · Demo flow</p>
      </div>
      <div class="isi-cards">
        <div class="card">Renewal reminders</div>
        <div class="card">Plan options</div>
        <div class="card">Upgrade / change requests</div>
        <div class="card">Team notification</div>
      </div>
    </div>

    <div class="isi-panel" data-panel="invoices" hidden>
      <h2 id="invoices">Invoices &amp; Payment Collection</h2>
      <p class="isi-desc">Share invoice details and payment links on WhatsApp where your payment setup supports it.</p>
      <div class="isi-flow">
        <span>Invoice Created</span><span class="arr">→</span>
        <span>HelloBotz</span><span class="arr">→</span>
        <span>WhatsApp</span><span class="arr">→</span>
        <span>Pay / Confirm</span>
      </div>
      <div class="isi-chat">
        <p class="m bot">Invoice #HB-1024 is ready. Amount: as per your bill.</p>
        <p class="m bot">Pay now · View details · Talk to accounts</p>
        <p class="m ok">Invoice shared <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> · Demo flow</p>
      </div>
      <div class="isi-cards">
        <div class="card">Invoice share</div>
        <div class="card">Payment link (if configured)</div>
        <div class="card">Payment reminder</div>
        <div class="card">Accounts follow-up</div>
      </div>
    </div>
  </div>
</section>

<section class="section section-dark" id="journey">
  <div class="container">
    <div class="section-header reveal"><h2 style="color:#fff">Operations Journey</h2></div>
    <div class="isi-flow reveal">
      <span>Business Event</span><span class="arr">↓</span>
      <span>HelloBotz</span><span class="arr">↓</span>
      <span>WhatsApp Message</span><span class="arr">↓</span>
      <span>Customer Action</span><span class="arr">↓</span>
      <span>Team / CRM Update</span>
    </div>
  </div>
</section>

<section class="section" id="usecases">
  <div class="container">
    <div class="section-header reveal"><h2>Use Cases</h2></div>
    <div class="isi-cards">
      <div class="card reveal">E-commerce stock updates</div>
      <div class="card reveal">SaaS renewals</div>
      <div class="card reveal">Service plan reminders</div>
      <div class="card reveal">Invoice follow-ups</div>
      <div class="card reveal">Payment collection</div>
      <div class="card reveal">Internal ops alerts</div>
    </div>
  </div>
</section>

<section class="section" id="faq">
  <div class="container">
    <div class="section-header reveal"><h2>FAQ</h2></div>
    <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0">
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I send stock alerts on WhatsApp?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — using approved templates and your configured inventory triggers where supported.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can subscription renewals be reminded on WhatsApp?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — schedule renewal-style messages and route replies to your team.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can invoices be shared on WhatsApp?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — share invoice details and payment options based on your payment integration.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Do these require templates?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Business-initiated messages outside the customer care window typically need approved WhatsApp templates.</div></div></div>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container" style="text-align:center">
    <div class="section-header reveal">
      <h2 style="color:#fff">Run Operations Conversations on WhatsApp</h2>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="/auth/register" class="btn btn-primary btn-lg">Start Free</a>
        <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Book a Demo</button>
              <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn btn-download-data btn-lg">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download Data
        </a>
</div>
    </div>
  </div>
</section>

<script src="/assets/js/isi.js?v=1" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
