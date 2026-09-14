<?php
$basePath = '../../';
$pageTitle = 'WhatsApp Business Platform | API, Shared Inbox & Broadcasts | HelloBotz';
$pageDescription = 'Official WhatsApp Business API, shared team inbox and broadcast campaigns in one platform for conversations, teams and growth.';
$canonicalUrl = 'https://hellobotz.com/products/whatsapp-business-platform/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/wa-platform.css?v=1">
<link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=2">

<section class="wbp-hero" aria-label="WhatsApp Business Platform hero">
  <div class="wbp-hero-bg" aria-hidden="true"></div>
  <div class="container">
    <div class="wbp-hero-grid">
      <div class="wbp-hero-copy">
        <span class="badge wbp-badge">OFFICIAL WHATSAPP BUSINESS PLATFORM</span>
        <h1>One WhatsApp Platform for <span class="grad">Conversations, Teams &amp; Growth</span></h1>
        <p class="wbp-lead">Connect your official WhatsApp Business API, manage customer conversations with your team and run targeted broadcast campaigns from one powerful platform.</p>
        <div class="wbp-ctas">
          <a href="/auth/register" class="btn btn-primary btn-lg">Start Free Trial</a>
          <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Book WhatsApp Demo</button>
        </div>
        <div class="wbp-tabs" id="wbp-tabs">
          <button type="button" class="is-active" data-flow="api">WhatsApp API</button>
          <button type="button" data-flow="inbox">Team Inbox</button>
          <button type="button" data-flow="broadcast">Broadcasts</button>
        </div>
      </div>
      <div class="wbp-phone-stage">
        <div class="wbp-phone">
          <div class="wbp-notch"></div>
          <div class="wbp-screen">
            <div class="wbp-wa-head"><div class="wbp-av">HB</div><div><strong>HelloBotz Platform</strong><small>API · Inbox · Broadcast</small></div></div>
            <div class="wbp-wa-body" id="wbp-wa-body"><div class="wbp-typing" id="wbp-typing"><i></i><i></i><i></i></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="core">
  <div class="container">
    <div class="wbp-core">
      <div class="card reveal" id="whatsapp-api">
        <h3>Official WhatsApp API</h3>
        <p>Official WhatsApp Business messaging infrastructure for reliable business communication.</p>
      </div>
      <div class="card reveal" id="team-inbox">
        <h3>Shared Team Inbox</h3>
        <p>Multiple agents can manage customer conversations from one shared workspace.</p>
      </div>
      <div class="card reveal" id="broadcasts">
        <h3>Broadcast Campaigns</h3>
        <p>Send approved WhatsApp templates to targeted customer segments at scale.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section-alt" id="journey">
  <div class="container">
    <div class="section-header reveal"><h2>Customer Journey</h2></div>
    <div class="wbp-journey reveal">
      <span>Customer</span><span class="arr">→</span>
      <span>WhatsApp</span><span class="arr">→</span>
      <span>API</span><span class="arr">→</span>
      <span>Inbox</span><span class="arr">→</span>
      <span>Agent</span><span class="arr">→</span>
      <span>Broadcast</span><span class="arr">→</span>
      <span>Follow-up</span>
    </div>
  </div>
</section>

<div class="edu-img-card-wrap reveal" style="margin: 2.5rem 0;">
  <img src="/assets/images/edtech_shared_inbox.jpg" alt="WhatsApp Business Platform Official Meta API & Shared Inbox" loading="lazy">
  <div class="edu-img-caption-badge">
    <strong><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg> Official Meta WhatsApp Business API &amp; Multi-Agent Inbox</strong>
    <span>Shared Team Workspace with Green Tick Credibility</span>
  </div>
</div>

<section class="section" id="inbox-section">
  <div class="container">
    <div class="section-header reveal"><h2>Shared Team Inbox</h2></div>
    <div class="wbp-inbox-mock reveal">
      <div class="wbp-inbox-col"><strong>New Conversations</strong><p>Customer: I need product details</p></div>
      <div class="wbp-inbox-col"><strong>Chat</strong><p>Assign to: Sales · Agent: Rahul · Status: In Progress</p></div>
      <div class="wbp-inbox-col"><strong>Status</strong><p>Open / Pending / Resolved</p></div>
    </div>
  </div>
</section>

<div class="edu-img-card-wrap reveal" style="margin: 2.5rem 0;">
  <img src="/assets/images/facebook_ad_funnel_banner.jpg" alt="WhatsApp Broadcast Campaigns & Automated Workflows" loading="lazy">
  <div class="edu-img-caption-badge">
    <strong><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"/></svg> High-Converting WhatsApp Broadcast Campaigns</strong>
    <span>Targeted Messaging with 98% Guaranteed Open Rate</span>
  </div>
</div>

<section class="section section-gradient-1" id="broadcast-section">
  <div class="container">
    <div class="section-header reveal"><h2>Broadcast Campaigns</h2></div>
    <div class="wbp-journey reveal">
      <span>Select Audience</span><span class="arr">↓</span>
      <span>Choose Template</span><span class="arr">↓</span>
      <span>Preview</span><span class="arr">↓</span>
      <span>Send Campaign</span>
    </div>
    <div class="wbp-campaign reveal">
      <p><strong>Campaign Created</strong> · Audience: Demo segment · Template: New Offer · Status: Ready</p>
      <p class="wbp-tpl">Hi {{name}}  Check our latest update. Reply STOP to opt out.</p>
    </div>
  </div>
</section>

<div class="edu-img-card-wrap reveal" style="margin: 2.5rem 0;">
  <img src="/assets/images/ecom_discovery_banner.jpg" alt="WhatsApp API Architecture & Seamless CRM Integrations" loading="lazy">
  <div class="edu-img-caption-badge">
    <strong><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg> Enterprise WhatsApp API &amp; Webhook Architecture</strong>
    <span>Seamless Integration with Shopify, WooCommerce &amp; CRMs</span>
  </div>
</div>

<section class="section section-alt" id="usecases">
  <div class="container">
    <div class="section-header reveal"><h2>Use Cases</h2></div>
    <div class="wbp-usecases">
      <div class="card reveal"><h3>Sales</h3><p>Lead conversations and follow-ups.</p></div>
      <div class="card reveal"><h3>Customer Support</h3><p>Team-based WhatsApp support.</p></div>
      <div class="card reveal"><h3>Marketing</h3><p>Targeted broadcast campaigns.</p></div>
      <div class="card reveal"><h3>E-commerce</h3><p>Order and customer communication.</p></div>
      <div class="card reveal"><h3>Real Estate</h3><p>Lead qualification and follow-up.</p></div>
      <div class="card reveal"><h3>Education</h3><p>Student enquiries and communication.</p></div>
    </div>
  </div>
</section>

<section class="section" id="why">
  <div class="container">
    <div class="section-header reveal"><h2>Why HelloBotz</h2></div>
    <div class="wbp-why">
      <div class="card reveal">Official WhatsApp API</div>
      <div class="card reveal">Shared Team Inbox</div>
      <div class="card reveal">Team Assignment</div>
      <div class="card reveal">Broadcast Campaigns</div>
      <div class="card reveal">Automation</div>
      <div class="card reveal">Customer Management</div>
    </div>
  </div>
</section>

<section class="section" id="faq">
  <div class="container">
    <div class="section-header reveal"><h2>FAQ</h2></div>
    <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0">
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">What is WhatsApp Business API?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Official Meta Business API for sending and receiving WhatsApp messages with business tools, templates and webhooks.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can multiple agents use the same WhatsApp number?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — Shared Team Inbox lets multiple agents work on conversations for the same connected number.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">What is Shared Team Inbox?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">A shared workspace to assign chats, collaborate and resolve customer conversations as a team.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I send WhatsApp Broadcast Campaigns?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — send approved template messages to eligible audience segments following Meta policies.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I connect my CRM?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Where configured, connect CRM and automation so leads and conversations stay in sync.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I automate WhatsApp conversations?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — use flows, chatbot and automation features available on your plan.</div></div></div>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container" style="text-align:center">
    <div class="section-header reveal">
      <h2 style="color:#fff">Turn WhatsApp Into Your Complete Business Communication Platform</h2>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="/auth/register" class="btn btn-primary btn-lg">Start Free Trial</a>
        <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Book WhatsApp Demo</button>
              <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn btn-download-data btn-lg">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download Data
        </a>
</div>
    </div>
  </div>
</section>

<script src="/assets/js/wa-platform.js?v=1" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
