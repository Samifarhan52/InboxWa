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
</div></div></section>
<section class="section"><div class="container"><div class="res-grid">
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
