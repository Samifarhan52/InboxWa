<?php
$basePath = '../../';
$pageTitle = 'Security';
$pageDescription = 'How we approach data protection and access control for messaging platforms.';
$canonicalUrl = 'https://hellobotz.com/company/security/';
include __DIR__ . '/../../includes/header.php';
?>
<nav class="container" aria-label="Breadcrumb" style="padding-top:0.75rem;padding-bottom:0.35rem;font-size:.85rem;color:var(--t3)"><a href="<?php echo $bp; ?>">Home</a> / Company</nav>
<section class="section page-hero" style="padding-top:1.25rem">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Company</span>
      <h1>Security</h1>
      <p class="lead">How we approach data protection and access control for messaging platforms.</p>
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
<section class="section"><div class="features-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1.15rem;margin-top:1.5rem"><div class="card card-feature reveal"><h3>Access control</h3><p>Role-based access and team permissions.</p></div><div class="card card-feature reveal"><h3>Transport</h3><p>HTTPS in production; secure session practices for admin.</p></div><div class="card card-feature reveal"><h3>Data handling</h3><p>Minimize collection; retention aligned with your account needs.</p></div><div class="card card-feature reveal"><h3>Responsibility</h3><p>You remain responsible for customer consent and local regulations.</p></div></div></section>
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
<?php include __DIR__ . '/../../includes/footer.php'; ?>
