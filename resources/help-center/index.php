<?php
$basePath = '../../';
$pageTitle = 'Help Center — InboxWa';
$pageDescription = 'Search InboxWa help articles on WhatsApp API, chatbot, broadcast, CRM, billing and account security.';
$canonicalUrl = 'https://inboxwa.com/resources/help-center/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/resources.css?v=1">

<nav class="container" style="padding-top:calc(var(--nav,72px)+1rem);font-size:.85rem;color:var(--t3)"><a href="/">Home</a> / <a href="/resources/">Resources</a> / Help Center</nav>
<section class="section page-hero" style="padding-top:1.25rem"><div class="container"><div class="section-header reveal">
<span class="badge badge-primary">Help Center</span>
<h1>How can we help?</h1>
<p class="lead">Guides for WhatsApp API, AI chatbot, campaigns, CRM and billing.</p>
<div class="hc-search reveal"><input type="search" id="hc-search" placeholder="Search Help Center..." aria-label="Search help"></div>
</div></div></section>
<section class="section section-gradient-1"><div class="container">
<div class="section-header reveal"><h2>Categories</h2></div>
<div class="res-grid">
<a class="card res-card reveal" href="#articles"><h3>WhatsApp API</h3><p>Articles &amp; setup tips</p></a><a class="card res-card reveal" href="#articles"><h3>AI Chatbot</h3><p>Articles &amp; setup tips</p></a><a class="card res-card reveal" href="#articles"><h3>Broadcast Campaigns</h3><p>Articles &amp; setup tips</p></a><a class="card res-card reveal" href="#articles"><h3>CRM</h3><p>Articles &amp; setup tips</p></a><a class="card res-card reveal" href="#articles"><h3>Flow Builder</h3><p>Articles &amp; setup tips</p></a><a class="card res-card reveal" href="#articles"><h3>Integrations</h3><p>Articles &amp; setup tips</p></a><a class="card res-card reveal" href="#articles"><h3>Omnichannel Inbox</h3><p>Articles &amp; setup tips</p></a><a class="card res-card reveal" href="#articles"><h3>Billing & Pricing</h3><p>Articles &amp; setup tips</p></a><a class="card res-card reveal" href="#articles"><h3>Account & Security</h3><p>Articles &amp; setup tips</p></a>
</div></div></section>
<section class="section" id="articles"><div class="container">
<div class="section-header reveal"><h2>Popular articles</h2></div>
<div class="res-grid">
<article class="card res-card reveal"><h3>Connect WhatsApp Business API</h3><p>Link your WABA and verify business.</p><a class="btn btn-sm btn-outline" href="/resources/documentation/">Read Article</a></article><article class="card res-card reveal"><h3>Build your first chatbot flow</h3><p>No-code flows for FAQs and leads.</p><a class="btn btn-sm btn-outline" href="/resources/documentation/">Read Article</a></article><article class="card res-card reveal"><h3>Send a compliant broadcast</h3><p>Templates, segments and reports.</p><a class="btn btn-sm btn-outline" href="/resources/documentation/">Read Article</a></article><article class="card res-card reveal"><h3>Invite team members</h3><p>Roles, inbox assignment and permissions.</p><a class="btn btn-sm btn-outline" href="/resources/documentation/">Read Article</a></article><article class="card res-card reveal"><h3>Understand plan limits</h3><p>Contacts, campaigns and AI prompts.</p><a class="btn btn-sm btn-outline" href="/resources/documentation/">Read Article</a></article><article class="card res-card reveal"><h3>Webhooks & API keys</h3><p>Authenticate and receive events.</p><a class="btn btn-sm btn-outline" href="/resources/documentation/">Read Article</a></article>
</div></div></section>
<section class="section section-alt" id="support-form"><div class="container" style="max-width:640px">
<div class="section-header reveal"><h2>Contact support</h2><p class="lead">Submit a ticket or chat on WhatsApp.</p></div>
<form class="card reveal" id="support-form-el" style="padding:1.5rem" method="post" action="javascript:void(0)">
<label>Name *</label><input name="name" required style="width:100%;margin-bottom:.75rem;padding:.65rem;border-radius:8px;border:1px solid var(--bd)">
<label>Email *</label><input type="email" name="email" required style="width:100%;margin-bottom:.75rem;padding:.65rem;border-radius:8px;border:1px solid var(--bd)">
<label>WhatsApp number *</label><input type="tel" name="whatsapp" required style="width:100%;margin-bottom:.75rem;padding:.65rem;border-radius:8px;border:1px solid var(--bd)">
<label>Subject *</label><input name="subject" required style="width:100%;margin-bottom:.75rem;padding:.65rem;border-radius:8px;border:1px solid var(--bd)">
<label>Category</label><select name="category" style="width:100%;margin-bottom:.75rem;padding:.65rem;border-radius:8px;border:1px solid var(--bd)">
<option>WhatsApp API</option><option>Billing</option><option>Chatbot</option><option>Account</option><option>Other</option></select>
<label>Message *</label><textarea name="message" required rows="4" style="width:100%;margin-bottom:1rem;padding:.65rem;border-radius:8px;border:1px solid var(--bd)"></textarea>
<div style="display:flex;flex-wrap:wrap;gap:.75rem">
<button type="submit" class="btn btn-primary">Submit Support Request</button>
<a class="btn btn-outline" href="https://wa.me/918050854445" target="_blank" rel="noopener">Chat on WhatsApp</a>
</div>
<p id="support-status" style="margin-top:.75rem;display:none;color:#15803D"></p>
</form>
</div></section>

<script src="/assets/js/resources.js?v=1" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
