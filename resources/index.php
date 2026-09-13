<?php
$basePath = '../';
$pageTitle = 'Resources — InboxWa';
$pageDescription = 'Help center, API docs, blog, case studies, templates and app downloads.';
$canonicalUrl = 'https://inboxwa.com/resources/';
include __DIR__ . '/../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/resources.css?v=3">
<nav class="container" style="padding-top:calc(var(--nav,72px)+1rem);font-size:.85rem;color:var(--t3)"><a href="/">Home</a> / Resources</nav>
<section class="section page-hero" style="padding-top:1.25rem"><div class="container"><div class="section-header reveal">
<span class="badge badge-primary">Resources</span>
<h1>Learn, build and get support</h1>
<div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
  <a href="/auth/register" class="btn btn-primary">Start Free Trial</a>
  <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn btn-download-data">
    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
    Download Data
  </a>
</div>
</div></div></section>
<section class="section"><div class="container"><div class="res-grid">
<a class="card res-card" href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" style="border:1.5px solid #a78bfa;background:linear-gradient(135deg,#faf5ff,#f5f3ff)"><h3>Download Data ↗</h3><p>PanIndiaData B2B &amp; B2C verified datasets</p></a>
<a class="card res-card" href="/resources/help-center/"><h3>Help Center</h3><p>Guides & support</p></a>
<a class="card res-card" href="/resources/api-docs/"><h3>API Docs</h3><p>REST & webhooks</p></a>
<a class="card res-card" href="/resources/documentation/"><h3>Documentation</h3><p>Product guides</p></a>
<a class="card res-card" href="/resources/blog/"><h3>Blog</h3><p>Insights</p></a>
<a class="card res-card" href="/resources/case-studies/"><h3>Case Studies</h3><p>Industry stories</p></a>
<a class="card res-card" href="/resources/templates/"><h3>Templates</h3><p>Message starters</p></a>
<a class="card res-card" href="/resources/download-app/"><h3>Download App</h3><p>Android & more</p></a>
<a class="card res-card" href="/resources/download-ios-app/"><h3>iOS App</h3><p>iPhone & iPad</p></a>
</div></div></section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
