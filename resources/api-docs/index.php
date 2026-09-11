<?php
$basePath = '../../';
$pageTitle = 'API Documentation — InboxWa';
$pageDescription = 'InboxWa REST API overview: authentication, messages, contacts, templates, broadcasts, webhooks and code examples.';
$canonicalUrl = 'https://inboxwa.com/resources/api-docs/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/resources.css?v=3">

<nav class="container" style="padding-top:calc(var(--nav,72px)+1rem);font-size:.85rem;color:var(--t3)"><a href="/">Home</a> / Resources / API Docs</nav>
<section class="section page-hero" style="padding-top:1.25rem"><div class="container"><div class="section-header reveal">
<span class="badge badge-primary">Developers</span>
<h1>InboxWa API overview</h1>
<p class="lead">Authenticate, send messages, manage contacts and receive webhooks.</p>
</div></div></section>
<section class="section"><div class="container docs-layout">
<aside class="docs-side reveal">
<a href="#auth">Authentication</a>
<a href="#messages">WhatsApp Messages</a>
<a href="#contacts">Contacts</a>
<a href="#templates">Templates</a>
<a href="#broadcasts">Broadcasts</a>
<a href="#webhooks">Webhooks</a>
<a href="#errors">API Errors</a>
<a href="#examples">Code Examples</a>
</aside>
<div class="docs-main">
<section id="auth" class="reveal"><h2>Authentication</h2><p>Use a Bearer API token from your workspace settings. Never expose tokens in client-side code.</p>
<pre class="code-block" data-lang="bash"><code>Authorization: Bearer YOUR_API_KEY</code><button type="button" class="copy-btn">Copy</button></pre>
</section>
<section id="messages" class="reveal"><h2>WhatsApp Messages</h2><p>Send session or template messages via REST endpoints scoped to your WABA.</p>
<pre class="code-block"><code>POST /v1/messages
{ "to": "9198XXXXXXXX", "type": "text", "text": { "body": "Hello" } }</code><button type="button" class="copy-btn">Copy</button></pre>
</section>
<section id="contacts" class="reveal"><h2>Contacts</h2><p>Create and update contacts, tags and custom fields for CRM alignment.</p></section>
<section id="templates" class="reveal"><h2>Templates</h2><p>List approved templates and send utility/marketing messages within Meta policy.</p></section>
<section id="broadcasts" class="reveal"><h2>Broadcasts</h2><p>Create campaigns against segments; track delivery and replies in analytics.</p></section>
<section id="webhooks" class="reveal"><h2>Webhooks</h2><p>Receive message status and inbound events on your HTTPS endpoint.</p></section>
<section id="errors" class="reveal"><h2>API Errors</h2><p>Standard HTTP codes with JSON error body. Retry safely on 429/5xx with backoff.</p></section>
<section id="examples" class="reveal"><h2>Code examples</h2>
<div class="code-tabs">
<button type="button" class="is-active" data-tab="curl">cURL</button>
<button type="button" data-tab="php">PHP</button>
<button type="button" data-tab="js">JavaScript</button>
<button type="button" data-tab="py">Python</button>
</div>
<pre class="code-block" data-tab-panel="curl"><code>curl -X POST https://api.inboxwa.com/v1/messages \
  -H "Authorization: Bearer $KEY" \
  -H "Content-Type: application/json" \
  -d '{"to":"9198XXXXXXXX","type":"text","text":{"body":"Hello"}}'</code><button type="button" class="copy-btn">Copy</button></pre>
<pre class="code-block" data-tab-panel="php" hidden><code>$ch = curl_init('https://api.inboxwa.com/v1/messages');
curl_setopt_array($ch, [CURLOPT_POST=>true, CURLOPT_HTTPHEADER=>['Authorization: Bearer '.$key,'Content-Type: application/json'], CURLOPT_POSTFIELDS=>json_encode($payload)]);</code><button type="button" class="copy-btn">Copy</button></pre>
<pre class="code-block" data-tab-panel="js" hidden><code>await fetch('https://api.inboxwa.com/v1/messages', {
  method: 'POST',
  headers: { Authorization: 'Bearer '+key, 'Content-Type': 'application/json' },
  body: JSON.stringify({ to: '9198XXXXXXXX', type: 'text', text: { body: 'Hello' } })
});</code><button type="button" class="copy-btn">Copy</button></pre>
<pre class="code-block" data-tab-panel="py" hidden><code>requests.post('https://api.inboxwa.com/v1/messages', headers={'Authorization': f'Bearer {key}'}, json=payload)</code><button type="button" class="copy-btn">Copy</button></pre>
</section>
</div></div></section>

<script src="/assets/js/resources.js?v=3" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
