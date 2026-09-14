<?php
$basePath = '../../';
$pageTitle = 'CRM & Customer Analytics | Customer Intelligence | HelloBotz';
$pageDescription = 'Manage contacts, leads and customer journeys while turning conversation data into clear insights with HelloBotz CRM and Analytics.';
$canonicalUrl = 'https://hellobotz.com/products/crm-analytics/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/crm-analytics.css?v=1">
<link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=2">

<section class="ca-hero" aria-label="CRM and Analytics hero">
  <div class="ca-hero-bg" aria-hidden="true"></div>
  <div class="container">
    <div class="ca-hero-grid">
      <div class="ca-hero-copy">
        <span class="badge ca-badge">CRM • CUSTOMER INTELLIGENCE</span>
        <h1>Turn Every Customer Conversation Into <span class="grad">Actionable Intelligence</span></h1>
        <p class="ca-lead">Manage contacts, conversations, leads and customer journeys while turning your business data into clear insights from one powerful workspace.</p>
        <div class="ca-ctas">
          <a href="/auth/register" class="btn btn-primary btn-lg">Start Free Trial</a>
          <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Book CRM Demo</button>
        </div>
        <div class="ca-tabs" id="ca-tabs">
          <button type="button" class="is-active" data-flow="lead">New Lead</button>
          <button type="button" data-flow="qualify">Qualify</button>
          <button type="button" data-flow="assign">Assign</button>
          <button type="button" data-flow="follow">Follow-up</button>
          <button type="button" data-flow="convert">Converted</button>
        </div>
      </div>
      <div class="ca-dash-stage">
        <div class="ca-dash">
          <div class="ca-dash-title">CRM Snapshot · Demo Data</div>
          <div class="ca-metrics">
            <div><span>Contacts</span><b id="ca-m-contacts">—</b></div>
            <div><span>New Leads</span><b id="ca-m-leads">—</b></div>
            <div><span>Conversations</span><b id="ca-m-conv">—</b></div>
            <div><span>Follow-ups</span><b id="ca-m-fu">—</b></div>
          </div>
          <div class="ca-charts">
            <div class="ca-chart"><span>Lead Growth</span><div class="ca-bars"><i style="height:40%"></i><i style="height:55%"></i><i style="height:48%"></i><i style="height:70%"></i><i style="height:62%"></i></div></div>
            <div class="ca-chart"><span>Conversations</span><div class="ca-bars"><i style="height:50%"></i><i style="height:45%"></i><i style="height:65%"></i><i style="height:58%"></i><i style="height:72%"></i></div></div>
          </div>
          <div class="ca-sim-log" id="ca-sim-log">Select a step to simulate CRM → Analytics flow.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="crm">
  <div class="container">
    <div class="section-header reveal"><h2>One Workspace for Every Customer</h2></div>
    <div class="ca-profile reveal">
      <div class="ca-profile-row"><span>Customer</span><b>Demo Contact</b></div>
      <div class="ca-profile-row"><span>WhatsApp</span><b>+91 XXXXX XXXXX</b></div>
      <div class="ca-profile-row"><span>Lead Source</span><b>WhatsApp</b></div>
      <div class="ca-profile-row"><span>Tags</span><b>Demo · Hot</b></div>
      <div class="ca-profile-row"><span>Assigned Agent</span><b>Sales Team</b></div>
      <div class="ca-profile-row"><span>Last Conversation</span><b>Today</b></div>
      <div class="ca-profile-row"><span>Lead Status</span><b>New → Qualified → Follow-up → Won</b></div>
    </div>
  </div>
</section>

<div class="edu-img-card-wrap reveal" style="margin: 2.5rem 0;">
  <img src="/assets/images/edtech_shared_inbox.jpg" alt="HelloBotz Unified CRM Customer Profile & Contact Details" loading="lazy">
  <div class="edu-img-caption-badge">
    <strong><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> Unified CRM Customer Profile &amp; Contact Activity</strong>
    <span>Contact History, Tags &amp; Lead Assignment</span>
  </div>
</div>

<section class="section section-alt" id="pipeline">
  <div class="container">
    <div class="section-header reveal"><h2>Lead Pipeline</h2></div>
    <div class="ca-pipeline reveal">
      <div class="ca-col"><strong>New Leads</strong><div class="ca-card">Enquiry</div></div>
      <div class="ca-col"><strong>Contacted</strong><div class="ca-card">WhatsApp reply</div></div>
      <div class="ca-col"><strong>Qualified</strong><div class="ca-card">Budget OK</div></div>
      <div class="ca-col"><strong>Proposal</strong><div class="ca-card">Plan shared</div></div>
      <div class="ca-col"><strong>Won</strong><div class="ca-card">Closed</div></div>
    </div>
  </div>
</section>

<div class="edu-img-card-wrap reveal" style="margin: 2.5rem 0;">
  <img src="/assets/images/facebook_ad_funnel_banner.jpg" alt="HelloBotz Multi-Stage Lead Kanban Pipeline" loading="lazy">
  <div class="edu-img-caption-badge">
    <strong><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg> Visual Lead Pipeline &amp; Conversion Analytics</strong>
    <span>New → Qualified → Proposal → Won</span>
  </div>
</div>

<section class="section" id="analytics">
  <div class="container">
    <div class="section-header reveal"><h2>See What Your Customer Data Is Telling You</h2></div>
    <div class="ca-filters reveal" id="ca-filters">
      <button type="button" class="is-active" data-range="today">Today</button>
      <button type="button" data-range="7d">7 Days</button>
      <button type="button" data-range="30d">30 Days</button>
      <button type="button" data-range="campaign">Campaign</button>
      <button type="button" data-range="agent">Agent</button>
      <button type="button" data-range="source">Lead Source</button>
    </div>
    <div class="ca-analytics-grid reveal">
      <div class="card"><span>Lead Trends</span><strong id="ca-a1">Demo Data</strong></div>
      <div class="card"><span>Conversation Volume</span><strong id="ca-a2">Demo Data</strong></div>
      <div class="card"><span>Campaign Activity</span><strong id="ca-a3">Demo Data</strong></div>
      <div class="card"><span>Agent Activity</span><strong id="ca-a4">Demo Data</strong></div>
      <div class="card"><span>Lead Sources</span><strong id="ca-a5">Demo Data</strong></div>
      <div class="card"><span>Pipeline Status</span><strong id="ca-a6">Demo Data</strong></div>
    </div>
  </div>
</section>

<div class="edu-img-card-wrap reveal" style="margin: 2.5rem 0;">
  <img src="/assets/images/finance_loan_banner.jpg" alt="Real-time Analytics Dashboard & Campaign Insights" loading="lazy">
  <div class="edu-img-caption-badge">
    <strong><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg> Real-Time Conversation &amp; Campaign Analytics</strong>
    <span>Agent Performance &amp; ROI Tracking</span>
  </div>
</div>

<section class="section section-gradient-1" id="flow">
  <div class="container">
    <div class="section-header reveal"><h2>CRM → Analytics Flow</h2></div>
    <div class="ca-flow reveal">
      <span>Customer</span><span class="arr">↓</span>
      <span>WhatsApp Conversation</span><span class="arr">↓</span>
      <span>CRM Contact</span><span class="arr">↓</span>
      <span>Lead / Pipeline</span><span class="arr">↓</span>
      <span>Team Activity</span><span class="arr">↓</span>
      <span>Analytics</span><span class="arr">↓</span>
      <span>Business Decision</span>
    </div>
  </div>
</section>

<section class="section" id="automation">
  <div class="container">
    <div class="section-header reveal"><h2>Automation + CRM</h2></div>
    <div class="ca-flow reveal">
      <span>New Lead</span><span class="arr">→</span>
      <span>Tag Applied</span><span class="arr">→</span>
      <span>Agent Assigned</span><span class="arr">→</span>
      <span>Follow-up</span><span class="arr">→</span>
      <span>CRM Updated</span><span class="arr">→</span>
      <span>Analytics Updated</span>
    </div>
  </div>
</section>

<div class="edu-img-card-wrap reveal" style="margin: 2.5rem 0;">
  <img src="/assets/images/ecom_discovery_banner.jpg" alt="CRM to Analytics Data Workflow" loading="lazy">
  <div class="edu-img-caption-badge">
    <strong><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg> Conversation to Intelligence Workflow</strong>
    <span>Automated Data Capture &amp; Insights</span>
  </div>
</div>

<section class="section section-alt" id="usecases">
  <div class="container">
    <div class="section-header reveal"><h2>Use Cases</h2></div>
    <div class="ca-usecases">
      <div class="card reveal"><h3>Sales Teams</h3><p>Manage leads and follow-ups.</p></div>
      <div class="card reveal"><h3>Customer Support</h3><p>Track conversations and activity.</p></div>
      <div class="card reveal"><h3>Marketing</h3><p>Campaign and lead activity.</p></div>
      <div class="card reveal"><h3>E-commerce</h3><p>Customers and order chats.</p></div>
      <div class="card reveal"><h3>Real Estate</h3><p>Property enquiries and leads.</p></div>
      <div class="card reveal"><h3>Education</h3><p>Student enquiries and admissions.</p></div>
    </div>
  </div>
</section>

<section class="section" id="why">
  <div class="container">
    <div class="section-header reveal"><h2>Why HelloBotz</h2></div>
    <div class="ca-why">
      <div class="card reveal">Centralized Customer Data</div>
      <div class="card reveal">Lead Management</div>
      <div class="card reveal">Team Visibility</div>
      <div class="card reveal">Customer Activity Tracking</div>
      <div class="card reveal">Analytics &amp; Reports</div>
      <div class="card reveal">Actionable Insights</div>
    </div>
  </div>
</section>

<section class="section" id="faq">
  <div class="container">
    <div class="section-header reveal"><h2>FAQ</h2></div>
    <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0">
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">What is HelloBotz CRM?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">A workspace to manage contacts, leads, assignments and customer activity connected to WhatsApp conversations.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I manage WhatsApp leads in CRM?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — leads from WhatsApp can be stored, tagged and assigned where configured.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can multiple team members manage leads?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — assign agents and collaborate based on your team setup.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">What analytics are available?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Conversation, lead and campaign-style insights depending on your plan and connected data.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can CRM and Analytics work together?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — activity in CRM feeds the intelligence view so teams can act on the same customer data.</div></div></div>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container" style="text-align:center">
    <div class="section-header reveal">
      <h2 style="color:#fff">Manage Customers Smarter. Understand Your Business Better.</h2>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="/auth/register" class="btn btn-primary btn-lg">Start Free Trial</a>
        <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Book CRM Demo</button>
              <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn btn-download-data btn-lg">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download Data
        </a>
</div>
    </div>
  </div>
</section>

<script src="/assets/js/crm-analytics.js?v=1" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
