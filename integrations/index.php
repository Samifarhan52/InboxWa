<?php
$basePath = '../';
$pageTitle = 'Integrations';
$pageDescription = 'Connect HelloBotz to your stack.';
$canonicalUrl = 'https://hellobotz.com/integrations/';
include __DIR__ . '/../includes/header.php';
?>
<nav class="container" style="padding-top:calc(var(--nav,72px) + 1rem);font-size:.85rem;color:var(--t3)"><a href="<?php echo $bp; ?>">Home</a> / Integrations</nav>
<section class="section page-hero hero-animated" style="padding-top:1.25rem">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Integrations</span>
      <h1>Connect your stack</h1>
      <p class="lead">Shopify, WooCommerce, Google Workspace, ads, CRMs and webhooks.</p>
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
<section class="section"><div class="container"><div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:1rem"><a class="card reveal" style="text-decoration:none" href="<?php echo $bp; ?>Integrations/Shopify"><h3>Shopify</h3></a><a class="card reveal" style="text-decoration:none" href="<?php echo $bp; ?>Integrations/WooCommerce"><h3>WooCommerce</h3></a><a class="card reveal" style="text-decoration:none" href="<?php echo $bp; ?>Integrations/Google-Calendar"><h3>Google Calendar</h3></a><a class="card reveal" style="text-decoration:none" href="<?php echo $bp; ?>Integrations/Google-Sheets"><h3>Google Sheets</h3></a><a class="card reveal" style="text-decoration:none" href="<?php echo $bp; ?>Integrations/Webhooks"><h3>Webhooks</h3></a><a class="card reveal" style="text-decoration:none" href="<?php echo $bp; ?>Integrations/Facebook-Ads"><h3>Facebook Ads</h3></a></div></div></section>
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
