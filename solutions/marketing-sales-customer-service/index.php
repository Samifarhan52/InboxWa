<?php
$basePath = '../../';
$pageTitle = 'Marketing, Sales & Customer Service | HelloBotz';
$pageDescription = 'Capture leads, convert conversations into customers and deliver faster support with HelloBotz — marketing, sales and customer service connected.';
$canonicalUrl = 'https://hellobotz.com/solutions/marketing-sales-customer-service/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/mscs.css?v=1">
<link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=2">

<section class="mscs-hero" aria-label="Marketing Sales Service hero">
  <div class="mscs-hero-bg" aria-hidden="true"></div>
  <div class="container">
    <div class="mscs-hero-grid">
      <div class="mscs-hero-copy">
        <span class="badge mscs-badge">BUSINESS GROWTH SOLUTIONS</span>
        <h1>Marketing, Sales &amp; Customer Service — <span class="grad">Connected in One Platform</span></h1>
        <p class="mscs-lead">Capture more leads, convert conversations into customers and deliver faster customer support with HelloBotz automation.</p>
        <div class="mscs-ctas">
          <a href="/auth/register" class="btn btn-primary btn-lg">Start Free</a>
          <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Book a Demo</button>
        </div>
      </div>
      <div class="mscs-journey reveal">
        <span>Marketing</span><span class="arr">↓</span>
        <span>Lead</span><span class="arr">↓</span>
        <span>Sales</span><span class="arr">↓</span>
        <span>Customer</span><span class="arr">↓</span>
        <span>Support</span><span class="arr">↓</span>
        <span>Repeat</span>
      </div>
    </div>
  </div>
</section>

<section class="section" id="tabs">
  <div class="container">
    <div class="mscs-tabs" id="mscs-tabs">
      <button type="button" class="is-active" data-panel="marketing">Marketing</button>
      <button type="button" data-panel="sales">Sales</button>
      <button type="button" data-panel="service">Customer Service</button>
    </div>

    <div class="mscs-panel is-active" id="panel-marketing" data-panel="marketing">
      <h2 id="marketing">Turn Campaigns Into Conversations</h2>
      <div class="mscs-flow">
        <span>Facebook / Instagram / Website</span><span class="arr">→</span>
        <span>Lead Captured</span><span class="arr">→</span>
        <span>HelloBotz</span><span class="arr">→</span>
        <span>WhatsApp</span><span class="arr">→</span>
        <span>Follow-up</span>
      </div>
      <div class="mscs-chat">
        <p class="m user">I want to know more about this offer.</p>
        <p class="m bot">Sure! What are you interested in?</p>
        <p class="m bot">Product · Pricing · Book Demo</p>
        <p class="m ok">Lead Captured <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> · Tagged <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> · Follow-up Started <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></p>
      </div>
      <div class="mscs-cards">
        <div class="card">Lead Generation</div><div class="card">Campaign Automation</div>
        <div class="card">Click-to-WhatsApp</div><div class="card">Lead Qualification</div>
        <div class="card">Broadcasts</div><div class="card">Follow-ups</div>
        <div class="card">Customer Segmentation</div><div class="card">Retargeting</div>
      </div>
    </div>

    <div class="mscs-panel" id="panel-sales" data-panel="sales" hidden>
      <h2 id="sales">Convert More Leads Into Customers</h2>
      <div class="mscs-flow">
        <span>New Lead</span><span class="arr">→</span>
        <span>Qualification</span><span class="arr">→</span>
        <span>Product Interest</span><span class="arr">→</span>
        <span>Sales Team</span><span class="arr">→</span>
        <span>Follow-up</span><span class="arr">→</span>
        <span>Conversion</span>
      </div>
      <div class="mscs-chat">
        <p class="m user">I want to buy this.</p>
        <p class="m bot">Great! Let me help you.</p>
        <p class="m ok">Requirement Captured · Agent Assigned · Follow-up Scheduled</p>
      </div>
      <div class="mscs-cards">
        <div class="card">Lead Qualification</div><div class="card">Sales Automation</div>
        <div class="card">Product Enquiry</div><div class="card">CRM Sync</div>
        <div class="card">Agent Assignment</div><div class="card">Follow-up</div>
        <div class="card">Order Enquiry</div><div class="card">Conversion Tracking</div>
      </div>
    </div>

    <div class="mscs-panel" id="panel-service" data-panel="service" hidden>
      <h2 id="service">Deliver Faster, Smarter Customer Support</h2>
      <div class="mscs-flow">
        <span>Customer Message</span><span class="arr">→</span>
        <span>AI / Bot</span><span class="arr">→</span>
        <span>Answer</span><span class="arr">→</span>
        <span>Human Handover</span><span class="arr">→</span>
        <span>Resolution</span>
      </div>
      <div class="mscs-chat">
        <p class="m user">I need help with my order.</p>
        <p class="m bot">Sure! Please select an option.</p>
        <p class="m bot">Order Status · Return · Talk to Agent</p>
        <p class="m ok">Issue Detected <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> · Agent Assigned <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></p>
      </div>
      <div class="mscs-cards">
        <div class="card">FAQs</div><div class="card">Order Support</div>
        <div class="card">Ticket Handling</div><div class="card">Instant Replies</div>
        <div class="card">Human Handover</div><div class="card">Customer Notifications</div>
        <div class="card">Feedback Collection</div><div class="card">24/7 Automation</div>
      </div>
    </div>
  </div>
</section>

<section class="section section-dark" id="complete">
  <div class="container">
    <div class="section-header reveal"><h2 style="color:#fff">From First Click to Loyal Customer</h2></div>
    <div class="mscs-flow reveal">
      <span>1 Discover</span><span class="arr">↓</span>
      <span>2 Engage</span><span class="arr">↓</span>
      <span>3 Qualify</span><span class="arr">↓</span>
      <span>4 Sell</span><span class="arr">↓</span>
      <span>5 Support</span><span class="arr">↓</span>
      <span>6 Retain</span>
    </div>
    <button type="button" class="btn btn-primary" id="mscs-play" style="display:block;margin:1.25rem auto 0">Play Customer Journey</button>
    <div class="mscs-play-out" id="mscs-play-out">Click play to see the full journey animation.</div>
  </div>
</section>

<section class="section" id="channels">
  <div class="container">
    <div class="section-header reveal"><h2>Meet Customers Wherever They Are</h2></div>
    <div class="mscs-channels">
      <a class="card reveal" href="/products/channels/whatsapp/">WhatsApp</a>
      <a class="card reveal" href="/products/channels/facebook/">Facebook</a>
      <a class="card reveal" href="/products/channels/instagram/">Instagram</a>
      <a class="card reveal" href="/products/channels/telegram/">Telegram</a>
      <a class="card reveal" href="/products/chatbot/">Website</a>
    </div>
  </div>
</section>

<section class="section section-alt" id="crm">
  <div class="container">
    <div class="section-header reveal"><h2>Everything Connected Behind the Conversation</h2></div>
    <div class="mscs-flow reveal">
      <span>Customer</span><span class="arr">→</span>
      <span>HelloBotz</span><span class="arr">→</span>
      <span>CRM</span><span class="arr">→</span>
      <span>Automation</span><span class="arr">→</span>
      <span>Sales / Support</span>
    </div>
  </div>
</section>

<section class="section" id="dashboard">
  <div class="container">
    <div class="section-header reveal"><h2>Three Solution Dashboard</h2><p class="lead">Demo Data — illustrative only</p></div>
    <div class="mscs-dash">
      <div class="card reveal"><h3>Marketing</h3><p>Leads · Campaigns · Conversations</p></div>
      <div class="card reveal"><h3>Sales</h3><p>Qualified · Follow-ups · Conversions</p></div>
      <div class="card reveal"><h3>Customer Service</h3><p>Conversations · Resolved · Handover</p></div>
    </div>
  </div>
</section>

<div class="hb-img-slot" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div><strong>Marketing Automation</strong><span>Campaigns to WhatsApp conversations.</span></div>
</div>
<div class="hb-img-slot hb-img-slot--dark" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div><strong>Sales / CRM</strong><span>Lead qualification and agent follow-up.</span></div>
</div>
<div class="hb-img-slot" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div><strong>Customer Support</strong><span>Bot answers and human handover.</span></div>
</div>
<div class="hb-img-slot hb-img-slot--dark" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div><strong>Complete Customer Journey</strong><span>Discover → Engage → Sell → Support → Retain</span></div>
</div>

<section class="section section-alt" id="industries">
  <div class="container">
    <div class="section-header reveal"><h2>Built for Every Customer-Facing Business</h2></div>
    <div class="mscs-industries">
      <div class="card reveal">E-commerce</div><div class="card reveal">Real Estate</div>
      <div class="card reveal">Education</div><div class="card reveal">Healthcare</div>
      <div class="card reveal">Travel</div><div class="card reveal">Automotive</div>
      <div class="card reveal">Finance</div><div class="card reveal">Agencies</div>
      <div class="card reveal">Local Businesses</div><div class="card reveal">Professional Services</div>
    </div>
  </div>
</section>

<section class="section" id="faq">
  <div class="container">
    <div class="section-header reveal"><h2>FAQ</h2></div>
    <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0">
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">How can HelloBotz help with marketing?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Turn campaign interest into conversations, capture leads and start follow-ups on WhatsApp and connected channels.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">How can HelloBotz help sales teams?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Qualify interest, assign agents, sync CRM where configured and keep follow-ups organized.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can HelloBotz automate customer support?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — FAQs, common requests and human handover for complex cases.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can Marketing, Sales and Support work together?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — one conversation stack can feed leads, sales activity and support resolution.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can leads be sent to CRM?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Where CRM integration is configured, leads and activity can sync to your CRM.</div></div></div>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container" style="text-align:center">
    <div class="section-header reveal">
      <h2 style="color:#fff">One Platform. Three Powerful Business Functions.</h2>
      <p class="lead" style="color:rgba(255,255,255,.75)">Generate Leads. Close Sales. Delight Customers.</p>
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

<script src="/assets/js/mscs.js?v=1" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
