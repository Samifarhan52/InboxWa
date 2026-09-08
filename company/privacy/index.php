<?php
$basePath = '../../';
$pageTitle = 'Privacy Policy';
$pageDescription = 'How InboxWa processes personal data.';
$canonicalUrl = 'https://inboxwa.com/company/privacy/';
include __DIR__ . '/../../includes/header.php';
?>
<nav class="container" style="padding-top:calc(var(--nav,72px) + 1rem);font-size:.85rem;color:var(--t3)"><a href="<?php echo $bp; ?>">Home</a> / Company</nav>
<section class="section page-hero" style="padding-top:1.25rem">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Company</span>
      <h1>Privacy Policy</h1>
      <p class="lead">How InboxWa processes personal data.</p>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="<?php echo $bp; ?>#contact-section" class="btn btn-primary btn-lg">Book Demo</a>
        <a href="/auth/register" class="btn btn-outline btn-lg">Start Free</a>
      </div>
    </div>
  </div>
</section>
<section class="section"><div class="container" style="max-width:720px"><div class="card"><p>We process account and contact data to provide the service, respond to enquiries and improve the product. Contact mail@inboxwa.com for privacy requests. Replace this summary with your legal counsel–approved policy before production.</p></div></div></section>
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
