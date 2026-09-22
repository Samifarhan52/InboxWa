<?php
$basePath = '../';
$pageTitle = 'Products';
$pageDescription = 'HelloBotz products — WhatsApp API, chatbot, inbox, flows, CRM and more.';
$canonicalUrl = 'https://hellobotz.com/products/';
include __DIR__ . '/../includes/header.php';
?>
<nav class="container" style="padding-top:0.75rem;padding-bottom:0.25rem;font-size:.85rem;color:var(--t3)"><a href="<?php echo $bp; ?>">Home</a> / Products</nav>
<section class="section page-hero" style="padding-top:1.25rem">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Products</span>
      <h1>Everything in one HelloBotz account</h1>
      <p class="lead">Official WhatsApp API, AI chatbot, shared inbox, flow builder, broadcasts and CRM — built to work together.</p>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="<?php echo $bp; ?>#contact-section" class="btn btn-primary btn-lg">Book Demo</a>
        <a href="/auth/register" class="btn btn-outline btn-lg">Start Free</a>
              <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn btn-download-data btn-lg">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download Data
        </a>
</div>
    </div>
  </div>
</section>
<section class="section"><div class="container"><div class="section-header reveal"><h2>Platform products</h2></div><div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem;margin-top:1.5rem"><a href="<?php echo $bp; ?>products/whatsapp-api/" class="card reveal" style="text-decoration:none"><h3>WhatsApp API</h3><p>Official Meta API, templates, webhooks.</p><span style="color:var(--p2);font-weight:600;font-size:.875rem">Explore →</span></a><a href="<?php echo $bp; ?>products/chatbot/" class="card reveal" style="text-decoration:none"><h3>AI Chatbot</h3><p>Knowledge base, qualification, handover.</p><span style="color:var(--p2);font-weight:600;font-size:.875rem">Explore →</span></a><a href="<?php echo $bp; ?>products/shared-inbox/" class="card reveal" style="text-decoration:none"><h3>Shared Inbox</h3><p>Multi-agent omnichannel inbox.</p><span style="color:var(--p2);font-weight:600;font-size:.875rem">Explore →</span></a><a href="<?php echo $bp; ?>products/flow-builder/" class="card reveal" style="text-decoration:none"><h3>Flow Builder</h3><p>Visual automation canvas.</p><span style="color:var(--p2);font-weight:600;font-size:.875rem">Explore →</span></a><a href="<?php echo $bp; ?>products/broadcast/" class="card reveal" style="text-decoration:none"><h3>Broadcast</h3><p>Compliant campaigns & analytics.</p><span style="color:var(--p2);font-weight:600;font-size:.875rem">Explore →</span></a><a href="<?php echo $bp; ?>products/crm/" class="card reveal" style="text-decoration:none"><h3>CRM</h3><p>Pipelines next to conversations.</p><span style="color:var(--p2);font-weight:600;font-size:.875rem">Explore →</span></a><a href="<?php echo $bp; ?>products/automation/" class="card reveal" style="text-decoration:none"><h3>Automation</h3><p>Triggers, sequences, AI.</p><span style="color:var(--p2);font-weight:600;font-size:.875rem">Explore →</span></a><a href="<?php echo $bp; ?>products/analytics/" class="card reveal" style="text-decoration:none"><h3>Analytics</h3><p>Delivery, response, agent metrics.</p><span style="color:var(--p2);font-weight:600;font-size:.875rem">Explore →</span></a></div></div></section>
<section class="section section-dark">
  <div class="container">
    <div class="section-header reveal" style="text-align:center">
      <h2 style="color:#fff">Ready to engage customers on WhatsApp?</h2>
      <div style="margin-top:1.25rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="/auth/register" class="btn btn-primary btn-lg">Start Free</a>
        <a href="<?php echo $bp; ?>#contact-section" class="btn btn-white btn-lg">Talk to sales</a>
      </div>
    </div>
  </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
