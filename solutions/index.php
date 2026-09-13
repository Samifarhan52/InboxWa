<?php
$basePath = '../';
$pageTitle = 'Solutions';
$pageDescription = 'WhatsApp and omnichannel solutions for support, sales and growth.';
$canonicalUrl = 'https://inboxwa.com/solutions/';
include __DIR__ . '/../includes/header.php';
?>
<nav class="container" style="padding-top:calc(var(--nav,72px) + 1rem);font-size:.85rem;color:var(--t3)"><a href="<?php echo $bp; ?>">Home</a> / Solutions</nav>
<section class="section page-hero" style="padding-top:1.25rem">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Solutions</span>
      <h1>Solutions for every customer journey</h1>
      <p class="lead">From first lead to loyal customer — automation your team can run.</p>
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
<section class="section"><div class="container"><div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:1rem"><a href="<?php echo $bp; ?>solutions/customer-support" class="card reveal" style="text-decoration:none"><h3>Customer Support</h3><span style="color:var(--p2);font-weight:600">Explore →</span></a><a href="<?php echo $bp; ?>solutions/sales" class="card reveal" style="text-decoration:none"><h3>Sales</h3><span style="color:var(--p2);font-weight:600">Explore →</span></a><a href="<?php echo $bp; ?>solutions/lead-generation" class="card reveal" style="text-decoration:none"><h3>Lead Generation</h3><span style="color:var(--p2);font-weight:600">Explore →</span></a><a href="<?php echo $bp; ?>solutions/appointment" class="card reveal" style="text-decoration:none"><h3>Appointments</h3><span style="color:var(--p2);font-weight:600">Explore →</span></a><a href="<?php echo $bp; ?>solutions/bulk-messaging" class="card reveal" style="text-decoration:none"><h3>Bulk Messaging</h3><span style="color:var(--p2);font-weight:600">Explore →</span></a><a href="<?php echo $bp; ?>solutions/instagram-automation" class="card reveal" style="text-decoration:none"><h3>Instagram Automation</h3><span style="color:var(--p2);font-weight:600">Explore →</span></a><a href="<?php echo $bp; ?>solutions/facebook-messenger" class="card reveal" style="text-decoration:none"><h3>Facebook Messenger</h3><span style="color:var(--p2);font-weight:600">Explore →</span></a><a href="<?php echo $bp; ?>solutions/telegram-bot" class="card reveal" style="text-decoration:none"><h3>Telegram Bot</h3><span style="color:var(--p2);font-weight:600">Explore →</span></a></div></div></section>
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
