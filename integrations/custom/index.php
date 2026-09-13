<?php
$basePath = '../../';
$pageTitle = 'Custom Integrations & Integration Marketplace | InboxWa';
$pageDescription = 'Connect InboxWa with CRM, e-commerce, marketing, Google tools, social channels, APIs and webhooks for unified WhatsApp workflows.';
$canonicalUrl = 'https://inboxwa.com/integrations/custom/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/integrations-custom.css?v=1">
<link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=2">

<section class="ic-hero" aria-label="Custom integrations hero">
  <div class="ic-hero-bg" aria-hidden="true"></div>
  <div class="container">
    <div class="ic-hero-grid">
      <div class="ic-hero-copy">
        <span class="badge ic-badge">CUSTOM INTEGRATIONS</span>
        <h1>Connect InboxWa With Your <span class="grad">Entire Business Stack</span></h1>
        <p class="ic-lead">Connect WhatsApp, CRM, e-commerce, marketing, productivity and custom business systems with powerful integrations, APIs, webhooks and automation workflows.</p>
        <div class="ic-ctas">
          <a href="/auth/register" class="btn btn-primary btn-lg">Start Free</a>
          <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Talk to Integration Expert</button>
        </div>
      </div>
      <div class="ic-eco-stage" aria-hidden="true">
        <div class="ic-eco-center">INBOXWA</div>
        <div class="ic-eco-ring">
          <span>WhatsApp</span><span>Shopify</span><span>HubSpot</span><span>Zoho CRM</span>
          <span>Salesforce</span><span>Sheets</span><span>Calendar</span><span>Facebook</span>
          <span>Instagram</span><span>Telegram</span><span>WooCommerce</span><span>API</span>
        </div>
        <p style="position:absolute;bottom:0;left:0;right:0;text-align:center;font-size:.75rem;color:rgba(255,255,255,.55);margin:0">Shopify → InboxWa → WhatsApp · CRM ↔ Conversations</p>
      </div>
    </div>
  </div>
</section>

<section class="section" id="marketplace">
  <div class="container">
    <div class="section-header reveal">
      <h2>Connect With the Tools You Already Use</h2>
      <p class="lead">From CRM and e-commerce to marketing, productivity and communication — bring your existing tools into one connected workflow.</p>
    </div>
    <div class="ic-search-wrap reveal">
      <input type="search" id="ic-search" placeholder="Search integrations..." aria-label="Search integrations">
      <div class="ic-filters" id="ic-filters">
        <button type="button" class="is-active" data-cat="all">All</button>
        <button type="button" data-cat="crm">CRM</button>
        <button type="button" data-cat="ecom">E-commerce</button>
        <button type="button" data-cat="mkt">Marketing</button>
        <button type="button" data-cat="prod">Productivity</button>
        <button type="button" data-cat="social">Social</button>
        <button type="button" data-cat="comm">Communication</button>
        <button type="button" data-cat="auto">Automation</button>
        <button type="button" data-cat="api">API &amp; Custom</button>
      </div>
    </div>
    <div class="ic-grid" id="ic-grid">
      <!-- CRM -->
      <a class="ic-card" data-cat="crm" data-name="zoho crm" href="/integrations/crm/"><div class="ic-logo">ZC</div><strong>Zoho CRM</strong><span>CRM &amp; Sales</span><em class="ic-avail">Available</em></a>
      <a class="ic-card" data-cat="crm" data-name="hubspot" href="/integrations/crm/"><div class="ic-logo">HS</div><strong>HubSpot</strong><span>CRM &amp; Sales</span><em class="ic-avail">Available</em></a>
      <a class="ic-card" data-cat="crm" data-name="salesforce" href="/integrations/crm/"><div class="ic-logo">SF</div><strong>Salesforce</strong><span>CRM &amp; Sales</span><em class="ic-avail">Available</em></a>
      <a class="ic-card" data-cat="crm" data-name="pipedrive" href="/integrations/crm/"><div class="ic-logo">PD</div><strong>Pipedrive</strong><span>CRM &amp; Sales</span><em class="ic-custom">Custom</em></a>
      <a class="ic-card" data-cat="crm" data-name="freshsales" href="/integrations/crm/"><div class="ic-logo">FS</div><strong>Freshsales</strong><span>CRM &amp; Sales</span><em class="ic-custom">Custom</em></a>
      <a class="ic-card" data-cat="crm" data-name="dynamics microsoft" href="/integrations/custom/"><div class="ic-logo">D365</div><strong>Dynamics 365</strong><span>CRM &amp; Sales</span><em class="ic-custom">Custom</em></a>
      <!-- Ecom -->
      <a class="ic-card" data-cat="ecom" data-name="shopify" href="/solutions/shopify/"><div class="ic-logo">Sh</div><strong>Shopify</strong><span>E-commerce</span><em class="ic-avail">Available</em></a>
      <a class="ic-card" data-cat="ecom" data-name="woocommerce" href="/solutions/woocommerce/"><div class="ic-logo">WC</div><strong>WooCommerce</strong><span>E-commerce</span><em class="ic-avail">Available</em></a>
      <a class="ic-card" data-cat="ecom" data-name="magento" href="/integrations/custom/"><div class="ic-logo">Mg</div><strong>Magento</strong><span>E-commerce</span><em class="ic-custom">Custom</em></a>
      <a class="ic-card" data-cat="ecom" data-name="wix" href="/integrations/custom/"><div class="ic-logo">Wx</div><strong>Wix</strong><span>E-commerce</span><em class="ic-custom">Custom</em></a>
      <a class="ic-card" data-cat="ecom" data-name="wordpress" href="/integrations/custom/"><div class="ic-logo">WP</div><strong>WordPress</strong><span>Website</span><em class="ic-custom">Custom</em></a>
      <!-- Marketing -->
      <a class="ic-card" data-cat="auto mkt" data-name="zapier" href="/integrations/custom/"><div class="ic-logo">Zp</div><strong>Zapier</strong><span>Automation</span><em class="ic-custom">Custom</em></a>
      <a class="ic-card" data-cat="auto mkt" data-name="make" href="/integrations/custom/"><div class="ic-logo">Mk</div><strong>Make</strong><span>Automation</span><em class="ic-custom">Custom</em></a>
      <a class="ic-card" data-cat="mkt" data-name="mailchimp" href="/integrations/custom/"><div class="ic-logo">Mc</div><strong>Mailchimp</strong><span>Marketing</span><em class="ic-custom">Custom</em></a>
      <a class="ic-card" data-cat="mkt" data-name="brevo" href="/integrations/custom/"><div class="ic-logo">Bv</div><strong>Brevo</strong><span>Marketing</span><em class="ic-custom">Custom</em></a>
      <a class="ic-card" data-cat="mkt" data-name="activecampaign" href="/integrations/custom/"><div class="ic-logo">AC</div><strong>ActiveCampaign</strong><span>Marketing</span><em class="ic-custom">Custom</em></a>
      <!-- Google -->
      <a class="ic-card" data-cat="prod" data-name="google sheets" href="/solutions/google-forms-sheets/"><div class="ic-logo">GS</div><strong>Google Sheets</strong><span>Productivity</span><em class="ic-avail">Available</em></a>
      <a class="ic-card" data-cat="prod" data-name="google forms" href="/solutions/google-forms-sheets/"><div class="ic-logo">GF</div><strong>Google Forms</strong><span>Productivity</span><em class="ic-avail">Available</em></a>
      <a class="ic-card" data-cat="prod" data-name="google calendar" href="/solutions/google-calendar-meet/"><div class="ic-logo">GC</div><strong>Google Calendar</strong><span>Productivity</span><em class="ic-avail">Available</em></a>
      <a class="ic-card" data-cat="prod" data-name="google drive" href="/integrations/custom/"><div class="ic-logo">GD</div><strong>Google Drive</strong><span>Productivity</span><em class="ic-custom">Custom</em></a>
      <a class="ic-card" data-cat="prod" data-name="gmail" href="/integrations/custom/"><div class="ic-logo">Gm</div><strong>Gmail</strong><span>Productivity</span><em class="ic-custom">Custom</em></a>
      <!-- Social -->
      <a class="ic-card" data-cat="social comm" data-name="whatsapp" href="/products/channels/whatsapp/"><div class="ic-logo">WA</div><strong>WhatsApp</strong><span>Communication</span><em class="ic-avail">Available</em></a>
      <a class="ic-card" data-cat="social" data-name="facebook" href="/products/channels/facebook/"><div class="ic-logo">Fb</div><strong>Facebook</strong><span>Social</span><em class="ic-avail">Available</em></a>
      <a class="ic-card" data-cat="social" data-name="instagram" href="/products/channels/instagram/"><div class="ic-logo">Ig</div><strong>Instagram</strong><span>Social</span><em class="ic-avail">Available</em></a>
      <a class="ic-card" data-cat="social" data-name="telegram" href="/products/channels/telegram/"><div class="ic-logo">Tg</div><strong>Telegram</strong><span>Social</span><em class="ic-avail">Available</em></a>
      <!-- Business -->
      <a class="ic-card" data-cat="comm" data-name="slack" href="/integrations/custom/"><div class="ic-logo">Sl</div><strong>Slack</strong><span>Communication</span><em class="ic-custom">Custom</em></a>
      <a class="ic-card" data-cat="comm" data-name="microsoft teams" href="/integrations/custom/"><div class="ic-logo">MT</div><strong>Microsoft Teams</strong><span>Communication</span><em class="ic-custom">Custom</em></a>
      <a class="ic-card" data-cat="api" data-name="webhooks" href="/integrations/custom/#api"><div class="ic-logo">WH</div><strong>Webhooks</strong><span>API &amp; Custom</span><em class="ic-avail">Available</em></a>
      <a class="ic-card" data-cat="api" data-name="rest api" href="/integrations/custom/#api"><div class="ic-logo">API</div><strong>REST API</strong><span>API &amp; Custom</span><em class="ic-avail">Available</em></a>
      <a class="ic-card" data-cat="api" data-name="custom api" href="/integrations/custom/#api"><div class="ic-logo">+</div><strong>Custom API</strong><span>API &amp; Custom</span><em class="ic-custom">Custom</em></a>
    </div>
    <p class="ic-note reveal" id="ic-empty" hidden>No integrations match your search.</p>
  </div>
</section>

<section class="section section-alt" id="featured">
  <div class="container">
    <div class="section-header reveal"><h2>Featured Integrations</h2></div>
    <div class="ic-featured">
      <a class="card reveal ic-feat" href="/products/channels/whatsapp/"><strong>WhatsApp</strong><span>Business messaging</span></a>
      <a class="card reveal ic-feat" href="/integrations/crm/"><strong>Zoho CRM</strong><span>CRM workflows</span></a>
      <a class="card reveal ic-feat" href="/integrations/crm/"><strong>HubSpot</strong><span>CRM workflows</span></a>
      <a class="card reveal ic-feat" href="/integrations/crm/"><strong>Salesforce</strong><span>CRM workflows</span></a>
      <a class="card reveal ic-feat" href="/solutions/shopify/"><strong>Shopify</strong><span>Store + WhatsApp</span></a>
      <a class="card reveal ic-feat" href="/solutions/woocommerce/"><strong>WooCommerce</strong><span>Store + WhatsApp</span></a>
      <a class="card reveal ic-feat" href="/solutions/google-forms-sheets/"><strong>Google Sheets</strong><span>Forms &amp; data</span></a>
      <a class="card reveal ic-feat" href="/solutions/google-calendar-meet/"><strong>Google Calendar</strong><span>Bookings</span></a>
    </div>
  </div>
</section>

<section class="section" id="whatsapp">
  <div class="container">
    <div class="section-header reveal"><h2>Connect WhatsApp With Your Business Tools</h2></div>
    <div class="ic-flow reveal">
      <span>WhatsApp Business API</span><span class="arr">↓</span>
      <span>InboxWa</span><span class="arr">↓</span>
      <span>CRM / Store / Marketing / Support</span>
    </div>
  </div>
</section>

<section class="section section-gradient-1" id="crm">
  <div class="container">
    <div class="section-header reveal"><h2>Connect WhatsApp With Your CRM</h2></div>
    <div class="ic-flow reveal">
      <span>New WhatsApp Lead</span><span class="arr">→</span>
      <span>InboxWa</span><span class="arr">→</span>
      <span>Contact Created</span><span class="arr">→</span>
      <span>Lead Assigned</span><span class="arr">→</span>
      <span>CRM Updated</span><span class="arr">→</span>
      <span>Sales Team</span>
    </div>
  </div>
</section>

<section class="section" id="ecom">
  <div class="container">
    <div class="section-header reveal"><h2>Connect Your Store With WhatsApp</h2></div>
    <div class="ic-flow reveal">
      <span>New Order</span><span class="arr">→</span>
      <span>Store</span><span class="arr">→</span>
      <span>InboxWa</span><span class="arr">→</span>
      <span>WhatsApp</span><span class="arr">→</span>
      <span>Customer</span>
    </div>
  </div>
</section>

<section class="section section-alt" id="google">
  <div class="container">
    <div class="section-header reveal"><h2>Connect Forms, Sheets &amp; Calendar</h2></div>
    <div class="ic-flow reveal">
      <span>Google Form</span><span class="arr">→</span>
      <span>InboxWa</span><span class="arr">→</span>
      <span>WhatsApp</span>
    </div>
    <div class="ic-flow reveal">
      <span>Lead</span><span class="arr">→</span>
      <span>Google Sheets</span><span class="arr">→</span>
      <span>WhatsApp</span>
    </div>
    <div class="ic-flow reveal">
      <span>Booking</span><span class="arr">→</span>
      <span>Google Calendar</span><span class="arr">→</span>
      <span>WhatsApp</span>
    </div>
  </div>
</section>

<section class="section" id="automation">
  <div class="container">
    <div class="section-header reveal"><h2>Build Your Own Connected Workflow</h2></div>
    <div class="ic-flow reveal">
      <span>Trigger</span><span class="arr">→</span>
      <span>Condition</span><span class="arr">→</span>
      <span>Action</span><span class="arr">→</span>
      <span>WhatsApp</span><span class="arr">→</span>
      <span>CRM</span>
    </div>
  </div>
</section>

<section class="section section-dark" id="api">
  <div class="container">
    <div class="section-header reveal"><h2 style="color:#fff">Have Your Own Software? Connect It With InboxWa.</h2>
      <p class="lead" style="color:rgba(255,255,255,.75)">Build a custom connection using APIs, webhooks or your existing business system.</p>
    </div>
    <div class="ic-flow reveal">
      <span>Your Software</span><span class="arr">→</span>
      <span>API / Webhook</span><span class="arr">→</span>
      <span>InboxWa</span><span class="arr">→</span>
      <span>WhatsApp</span><span class="arr">→</span>
      <span>Customer</span>
    </div>
    <div class="ic-code reveal">
      <code>POST /message · contact · template · message</code>
      <span>Request Sent <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> · Response Received <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> · Demo representation</span>
    </div>
  </div>
</section>

<section class="section" id="process">
  <div class="container">
    <div class="section-header reveal"><h2>How Custom Integration Works</h2></div>
    <div class="ic-steps">
      <div class="card reveal"><span>01</span><strong>Understand</strong><p>Understand your business workflow.</p></div>
      <div class="card reveal"><span>02</span><strong>Connect</strong><p>Connect API, webhook or supported platform.</p></div>
      <div class="card reveal"><span>03</span><strong>Automate</strong><p>Build the required workflow.</p></div>
      <div class="card reveal"><span>04</span><strong>Launch</strong><p>Test, validate and deploy.</p></div>
    </div>
  </div>
</section>

<section class="section section-alt" id="sim">
  <div class="container">
    <div class="section-header reveal"><h2>Data Flow Simulation</h2></div>
    <div class="ic-sim-tabs" id="ic-sim-tabs">
      <button type="button" class="is-active" data-sim="lead">Lead</button>
      <button type="button" data-sim="order">Order</button>
      <button type="button" data-sim="booking">Booking</button>
    </div>
    <div class="ic-flow reveal" id="ic-sim-out">
      <span>Website / Facebook</span><span class="arr">→</span>
      <span>InboxWa</span><span class="arr">→</span>
      <span>CRM</span><span class="arr">→</span>
      <span>WhatsApp</span><span class="arr">→</span>
      <span>Sales Team</span>
    </div>
  </div>
</section>

<div class="hb-img-slot" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div><strong>Integration Ecosystem</strong><span>InboxWa connected to business tools.</span></div>
</div>
<div class="hb-img-slot hb-img-slot--dark" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div><strong>WhatsApp + CRM</strong><span>Lead sync and conversation workflows.</span></div>
</div>
<div class="hb-img-slot" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div><strong>Store + WhatsApp</strong><span>Shopify / WooCommerce order messaging.</span></div>
</div>
<div class="hb-img-slot hb-img-slot--dark" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div><strong>Google Workflows</strong><span>Forms, Sheets and Calendar connected.</span></div>
</div>
<div class="hb-img-slot" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div><strong>Custom API / Webhook</strong><span>Your software to InboxWa to WhatsApp.</span></div>
</div>

<section class="section" id="usecases">
  <div class="container">
    <div class="section-header reveal"><h2>Use Cases</h2></div>
    <div class="ic-usecases">
      <div class="card reveal">Lead Generation</div>
      <div class="card reveal">CRM Sync</div>
      <div class="card reveal">Order Notifications</div>
      <div class="card reveal">Customer Support</div>
      <div class="card reveal">Appointment Booking</div>
      <div class="card reveal">Marketing Automation</div>
      <div class="card reveal">E-commerce Automation</div>
      <div class="card reveal">Sales Follow-up</div>
      <div class="card reveal">ERP Integration</div>
      <div class="card reveal">Custom Software</div>
    </div>
  </div>
</section>

<section class="section section-alt" id="slider">
  <div class="container">
    <div class="section-header reveal"><h2>Works With Your Business Stack</h2></div>
    <div class="ic-marquee reveal" aria-hidden="true">
      <div class="ic-marquee-track">
        <span>Zoho CRM</span><span>HubSpot</span><span>Salesforce</span><span>Shopify</span><span>WooCommerce</span>
        <span>Google Sheets</span><span>Google Calendar</span><span>WhatsApp</span><span>Facebook</span><span>Instagram</span>
        <span>Telegram</span><span>Zapier</span><span>Make</span><span>Webhooks</span><span>REST API</span>
        <span>Zoho CRM</span><span>HubSpot</span><span>Salesforce</span><span>Shopify</span><span>WooCommerce</span>
        <span>Google Sheets</span><span>Google Calendar</span><span>WhatsApp</span><span>Facebook</span><span>Instagram</span>
      </div>
    </div>
  </div>
</section>

<section class="section" id="faq">
  <div class="container">
    <div class="section-header reveal"><h2>FAQ</h2></div>
    <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0">
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">What is a custom integration?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">A connection built for your specific software using APIs, webhooks or a supported connector so InboxWa can exchange data with your systems.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I connect my CRM with WhatsApp?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes where CRM integration is available or configured via API/webhooks for your account.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I connect Shopify or WooCommerce?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — see the Shopify and WooCommerce solution pages for store-connected WhatsApp workflows.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I connect my own software?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — use APIs, webhooks or a custom integration project based on your system’s capabilities.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Do you support APIs and webhooks?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — APIs and webhooks are the foundation for many custom connections.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">How does custom integration work?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">We understand your workflow, connect the systems, automate the path, then test and launch.</div></div></div>
    </div>
  </div>
</section>

<section class="section section-dark ic-final">
  <div class="container" style="text-align:center">
    <div class="section-header reveal">
      <h2 style="color:#fff">Your Tools. Your Data. One Connected Workflow.</h2>
      <p class="lead" style="color:rgba(255,255,255,.75)">Tell us what you want to connect and build a workflow around your business.</p>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="/auth/register" class="btn btn-primary btn-lg">Start Free</a>
        <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Talk to Integration Expert</button>
              <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn btn-download-data btn-lg">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download Data
        </a>
</div>
    </div>
  </div>
</section>

<script src="/assets/js/integrations-custom.js?v=1" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
