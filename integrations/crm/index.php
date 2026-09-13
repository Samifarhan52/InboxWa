<?php
$basePath = '../../';
$pageTitle = 'CRM Integration with WhatsApp | Lead Capture, AI & Automation | InboxWa';
$pageDescription = 'Connect your CRM with InboxWa WhatsApp and AI to capture leads, automate follow-ups, assign sales agents and keep conversations in sync.';
$canonicalUrl = 'https://inboxwa.com/integrations/crm/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/crm.css?v=1">
<link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=2">


<section class="crm-hero" aria-label="CRM Integration hero">
  <div class="crm-hero-bg" aria-hidden="true"></div>
  <div class="container">
    <div class="crm-hero-grid">
      <div class="crm-hero-copy">
        <span class="badge crm-badge">CRM + WHATSAPP INTEGRATION</span>
        <h1>Connect Your CRM. Automate Every <span class="grad">Customer Conversation.</span></h1>
        <p class="crm-lead">Bring your CRM, WhatsApp and AI together to capture leads, automate communication, manage follow-ups and help your sales team close opportunities faster.</p>
        <div class="crm-ctas">
          <a href="/auth/register" class="btn btn-primary btn-lg">Get Started</a>
          <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Book CRM Demo</button>
        </div>
        <div class="crm-tabs" id="crm-tabs">
          <button type="button" class="is-active" data-flow="capture">Lead Capture</button>
          <button type="button" data-flow="wa">WhatsApp</button>
          <button type="button" data-flow="qualify">AI Qualification</button>
          <button type="button" data-flow="assign">Assignment</button>
          <button type="button" data-flow="followup">Follow-up</button>
          <button type="button" data-flow="pipeline">Sales Pipeline</button>
        </div>
      </div>
      <div class="crm-sim-stage">
        <div class="crm-dash-mini">
          <div class="crm-dash-title">CRM Lead</div>
          <div class="crm-lead-row"><span>Name</span><b>Rahul Sharma</b></div>
          <div class="crm-lead-row"><span>Source</span><b>Facebook Ads</b></div>
          <div class="crm-lead-row"><span>Status</span><b id="crm-status">New</b></div>
          <div class="crm-lead-row"><span>Next</span><b>Follow-up</b></div>
        </div>
        <div class="crm-phone">
          <div class="crm-notch"></div>
          <div class="crm-screen">
            <div class="crm-wa-head"><div class="crm-av">HB</div><div><strong>InboxWa</strong><small>Sales Assistant</small></div></div>
            <div class="crm-wa-body" id="crm-wa-body"><div class="crm-typing" id="crm-typing"><i></i><i></i><i></i></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="ecosystem">
  <div class="container">
    <div class="section-header reveal"><h2>Connect InboxWa With Your Existing CRM</h2></div>
    <div class="crm-ecosystem reveal">
      <div class="card">HubSpot</div>
      <div class="card">Zoho CRM</div>
      <div class="card">Salesforce</div>
      <div class="card">Pipedrive</div>
      <div class="card">Freshsales</div>
      <div class="card">API / Webhooks</div>
      <div class="card crm-soon">Other CRM · Coming Soon</div>
    </div>
    <p class="crm-note reveal">Only connect integrations that are available for your account. Unsupported native connectors are marked Coming Soon.</p>
  </div>
</section>
<div class="hb-img-slot" data-hb-img-slot>
  
  <div class="hb-img-fallback">
    <div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div>
    <strong>CRM Dashboard + WhatsApp</strong>
    <span>Lead record beside WhatsApp conversation.</span>
  </div>
</div>


<section class="section section-alt" id="workflow">
  <div class="container">
    <div class="section-header reveal"><h2>Turn CRM Events Into WhatsApp Actions</h2></div>
    <div class="crm-flow reveal">
      <span>CRM Event</span><span class="arr">→</span>
      <span>New Lead</span><span class="arr">→</span>
      <span>InboxWa</span><span class="arr">→</span>
      <span>WhatsApp Template</span><span class="arr">→</span>
      <span>Customer</span>
    </div>
    <div class="crm-wa-ex reveal">
      <p>Hi {{Name}}  Thank you for your interest in {{Product}}. Our team will contact you shortly.</p>
      <small>Variables depend on your CRM fields and approved templates.</small>
    </div>
  </div>
</section>

<section class="section" id="pipeline">
  <div class="container">
    <div class="section-header reveal"><h2>Sales Pipeline</h2></div>
    <div class="crm-pipeline reveal">
      <span>New Lead</span><span class="arr">→</span>
      <span>Contacted</span><span class="arr">→</span>
      <span>Qualified</span><span class="arr">→</span>
      <span>Demo</span><span class="arr">→</span>
      <span>Proposal</span><span class="arr">→</span>
      <span>Negotiation</span><span class="arr">→</span>
      <span>Converted</span>
    </div>
  </div>
</section>
<div class="hb-img-slot" data-hb-img-slot>
  
  <div class="hb-img-fallback">
    <div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div>
    <strong>CRM Sales Pipeline</strong>
    <span>New Lead → Qualified → Demo → Converted visual.</span>
  </div>
</div>


<section class="section section-gradient-1" id="followup">
  <div class="container">
    <div class="section-header reveal"><h2>Never Miss the Next Follow-up</h2></div>
    <div class="crm-timeline reveal">
      <span>Lead Created</span><span class="arr">↓</span>
      <span>Welcome</span><span class="arr">↓</span>
      <span>Sales Follow-up</span><span class="arr">↓</span>
      <span>Demo Reminder</span><span class="arr">↓</span>
      <span>Proposal Follow-up</span><span class="arr">↓</span>
      <span>Conversion</span>
    </div>
  </div>
</section>

<section class="section" id="automation">
  <div class="container">
    <div class="section-header reveal"><h2>CRM Status Automation</h2></div>
    <div class="crm-rules">
      <div class="card reveal"><strong>Lead Created</strong><span>→ Send WhatsApp Welcome</span></div>
      <div class="card reveal"><strong>Lead Qualified</strong><span>→ Notify Sales Team</span></div>
      <div class="card reveal"><strong>Demo Scheduled</strong><span>→ Send Confirmation</span></div>
      <div class="card reveal"><strong>Lead Inactive</strong><span>→ Trigger Follow-up</span></div>
      <div class="card reveal"><strong>Lead Converted</strong><span>→ Thank You / Onboarding</span></div>
      <div class="card reveal"><strong>Needs Support</strong><span>→ Assign Support</span></div>
    </div>
  </div>
</section>

<section class="section section-alt" id="twoway">
  <div class="container">
    <div class="section-header reveal"><h2>Keep CRM &amp; WhatsApp Data Connected</h2></div>
    <div class="crm-twoway reveal">
      <div class="card"><h3>CRM → InboxWa</h3><p>Lead details, status, assigned agent, customer data</p></div>
      <div class="arr">↔</div>
      <div class="card"><h3>InboxWa → CRM</h3><p>Conversation status, follow-up, customer response</p></div>
    </div>
  </div>
</section>
<div class="hb-img-slot hb-img-slot--dark" data-hb-img-slot>
  
  <div class="hb-img-fallback">
    <div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div>
    <strong>CRM → InboxWa → WhatsApp</strong>
    <span>Two-way automation flow visual.</span>
  </div>
</div>


<section class="section" id="usecases">
  <div class="container">
    <div class="section-header reveal"><h2>CRM Use Cases</h2></div>
    <div class="crm-usecases">
      <div class="card reveal"><h3>SaaS</h3><p>Lead capture → Demo → Sales follow-up.</p></div>
      <div class="card reveal"><h3>Real Estate</h3><p>Enquiry → Qualification → Agent assignment.</p></div>
      <div class="card reveal"><h3>Education</h3><p>Student enquiry → Counsellor → Follow-up.</p></div>
      <div class="card reveal"><h3>E-commerce</h3><p>Customer enquiry → Order/support workflow.</p></div>
      <div class="card reveal"><h3>Agencies</h3><p>Client enquiry → Sales → Meeting.</p></div>
      <div class="card reveal"><h3>B2B</h3><p>Lead → Qualify → Pipeline → Follow-up.</p></div>
    </div>
  </div>
</section>

<section class="section section-gradient-1" id="benefits">
  <div class="container">
    <div class="section-header reveal"><h2>Business Benefits</h2></div>
    <div class="crm-benefits">
      <div class="card reveal"><h3>One Customer View</h3><p>Keep customer information organized.</p></div>
      <div class="card reveal"><h3>Faster Response</h3><p>Automate first-touch communication.</p></div>
      <div class="card reveal"><h3>Better Follow-up</h3><p>Keep sales activities organized.</p></div>
      <div class="card reveal"><h3>Smarter Routing</h3><p>Send leads to the right team where supported.</p></div>
      <div class="card reveal"><h3>Less Manual Work</h3><p>Automate repetitive communication.</p></div>
      <div class="card reveal"><h3>Connected Workflow</h3><p>Bring CRM and WhatsApp together.</p></div>
    </div>
  </div>
</section>

<section class="section" id="faq">
  <div class="container">
    <div class="section-header reveal"><h2>FAQ</h2></div>
    <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0">
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Which CRMs can I connect with InboxWa?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Supported connectors and API/webhooks depend on your plan. Unavailable native CRMs may show as Coming Soon.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can CRM leads automatically receive WhatsApp messages?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — when automation is configured, new leads and status changes can trigger WhatsApp templates.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can CRM fields be used as WhatsApp variables?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes where field mapping is configured for your integration and template.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I automate lead follow-ups?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — sequences based on status and timing within WhatsApp policy.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I assign leads to sales agents?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Assignment depends on your CRM and InboxWa routing configuration.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I connect through API or Webhooks?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — API/webhooks support custom CRM connections where available.</div></div></div>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container" style="text-align:center">
    <div class="section-header reveal">
      <h2 style="color:#fff">Connect Your CRM With WhatsApp Automation</h2>
      <p class="lead" style="color:rgba(255,255,255,.75)">Bring your customer data, sales team and WhatsApp conversations together with InboxWa.</p>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="/auth/register" class="btn btn-primary btn-lg">Get Started</a>
        <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Book CRM Demo</button>
              <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn btn-download-data btn-lg">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download Data
        </a>
</div>
    </div>
  </div>
</section>

<script src="/assets/js/crm-sim.js?v=1" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
