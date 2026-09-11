<?php
$basePath = '../../';
$pageTitle = 'API & Webhooks — Developer Documentation | InboxWa';
$pageDescription = 'Connect your website, CRM, ERP or custom applications to InboxWa using official WhatsApp Business Cloud REST APIs and real-time event webhooks.';
$canonicalUrl = 'https://inboxwa.com/integrations/api-webhooks/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/api-webhooks.css?v=2">
<link rel="stylesheet" href="/assets/css/resources.css?v=2">

<section class="api-hero" aria-label="API Webhooks hero">
  <div class="api-hero-bg" aria-hidden="true"></div>
  <div class="container">
    <div class="api-hero-grid">
      <div class="api-hero-copy">
        <span class="badge api-badge">DEVELOPER PLATFORM</span>
        <h1>Connect InboxWa With <span class="grad">Any Application</span></h1>
        <p class="api-lead">Build mission-critical integrations between InboxWa and your website, CRM, ERP, mobile app or custom backend using lightning-fast REST APIs and real-time webhook events.</p>
        <div class="api-ctas">
          <a href="#code" class="btn btn-primary btn-lg">Explore Endpoints &rarr;</a>
          <a href="#webhook" class="btn btn-outline btn-lg" style="border-color:rgba(255,255,255,.4);color:#fff">Webhook Events</a>
          <a href="/resources/help-center/#support-form" class="btn btn-outline btn-lg" style="border-color:rgba(255,255,255,.4);color:#fff">Talk to Developer</a>
        </div>
      </div>
      <div class="api-arch">
        <span>Your Application</span><span class="arr">&rarr;</span>
        <span>REST API / Webhook</span><span class="arr">&rarr;</span>
        <span class="core">InboxWa Core</span><span class="arr">&rarr;</span>
        <span>WhatsApp Cloud</span><span class="arr">&rarr;</span>
        <span>Customer</span>
      </div>
    </div>
  </div>
</section>

<!-- API vs Webhooks Side-by-Side -->
<section class="section" id="diff">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Integration Models</span>
      <h2>API &amp; Webhooks: Two-Way Synchronization</h2>
      <p class="lead">Whether pushing data from your backend or reacting to customer replies in real time, InboxWa gives developers complete bidirectional control.</p>
    </div>
    
    <div class="api-diff">
      <div class="card reveal" style="border-radius:16px;padding:2rem;border:1px solid #E5E7EB;box-shadow:0 4px 15px rgba(0,0,0,0.03)">
        <div style="display:flex;align-items:center;gap:10px;margin-bottom:0.75rem">
          <span class="badge badge-primary" style="font-size:0.8rem">Outbound &amp; Actions</span>
          <h3 style="margin:0;font-size:1.35rem">REST API</h3>
        </div>
        <p style="color:#4B5563;line-height:1.6">Your server requests InboxWa to perform an immediate action such as dispatching a template message, importing contacts, or triggering a chatbot flow.</p>
        <div class="api-flow-mini" style="background:#F3F4F6;padding:0.75rem 1rem;border-radius:10px;font-family:monospace;font-size:0.85rem">Your App &rarr; HTTP POST &rarr; InboxWa API &rarr; WhatsApp Message</div>
        <p class="api-ex"><strong>Key Endpoints:</strong> Send Message &middot; Trigger Flow &middot; Create Contact &middot; Query Conversations &middot; Retrieve Reports</p>
        <div style="margin-top:1rem"><strong style="color:var(--p2)">Model: Pull / Push on-demand</strong></div>
      </div>

      <div class="card reveal" style="border-radius:16px;padding:2rem;border:1px solid #E5E7EB;box-shadow:0 4px 15px rgba(0,0,0,0.03)">
        <div style="display:flex;align-items:center;gap:10px;margin-bottom:0.75rem">
          <span class="badge badge-primary" style="font-size:0.8rem;background:rgba(6,182,212,0.15);color:#0891B2">Inbound &amp; Real-time</span>
          <h3 style="margin:0;font-size:1.35rem">Event Webhooks</h3>
        </div>
        <p style="color:#4B5563;line-height:1.6">InboxWa notifies your server instantaneously the exact millisecond an event occurs—such as a customer replying, reading a message, or opting in.</p>
        <div class="api-flow-mini" style="background:#F3F4F6;padding:0.75rem 1rem;border-radius:10px;font-family:monospace;font-size:0.85rem">WhatsApp Event &rarr; InboxWa &rarr; HTTP POST &rarr; Your Webhook Listener</div>
        <p class="api-ex"><strong>Key Events:</strong> message.received &middot; message.delivered &middot; message.read &middot; template.approved &middot; flow.completed</p>
        <div style="margin-top:1rem"><strong style="color:#0891B2">Model: Real-time event streaming (&lt; 250ms)</strong></div>
      </div>
    </div>
  </div>
</section>

<!-- Interactive Live API Request Simulator -->
<section class="section section-dark" id="live">
  <div class="container" style="text-align:center">
    <div class="section-header reveal">
      <span class="badge" style="background:rgba(6,182,212,0.2);color:#67E8F9;border:1px solid rgba(34,211,238,0.3)">Interactive Sandbox</span>
      <h2 style="color:#fff">Simulate an API Request</h2>
      <p class="lead" style="color:rgba(255,255,255,.75)">Experience the sub-second execution cycle of InboxWa’s cloud messaging infrastructure.</p>
    </div>
    <button type="button" class="btn btn-primary btn-lg" id="api-test" style="display:inline-flex;align-items:center;gap:8px;margin-bottom:1.25rem">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"/></svg>
      Dispatch Test API Request
    </button>
    <div class="api-test-out" id="api-test-out" style="max-width:540px;margin:0 auto;font-family:monospace;background:#060B14;border:1px solid rgba(255,255,255,0.15);padding:1.25rem;border-radius:12px">
      Click the button above to simulate: Client Request &rarr; Authentication &rarr; Cloud API &rarr; 200 OK Response
    </div>
  </div>
</section>

<!-- Code Snippets Section -->
<section class="section" id="code">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">SDKs &amp; Examples</span>
      <h2>Simple Integration. Enterprise Scale.</h2>
      <p class="lead">Clean JSON payloads, standard Bearer token authentication, and comprehensive language support.</p>
    </div>

    <div class="api-code-tabs" id="api-code-tabs">
      <button type="button" class="is-active" data-lang="curl">cURL</button>
      <button type="button" data-lang="js">Node.js / JavaScript</button>
      <button type="button" data-lang="py">Python</button>
      <button type="button" data-lang="php">PHP</button>
    </div>

    <pre class="api-code" id="api-code-block"><code>curl -X POST https://api.inboxwa.com/v1/messages \
  -H "Authorization: Bearer YOUR_INBOXWA_API_KEY" \
  -H "Content-Type: application/json" \
  -d '{
    "to": "+919876543210",
    "type": "template",
    "template": {
      "name": "order_confirmation_v2",
      "language": "en_US",
      "parameters": [
        { "type": "text", "text": "Rahul" },
        { "type": "text", "text": "ORD-9842" },
        { "type": "text", "text": "₹2,499" }
      ]
    }
  }'</code></pre>

    <div class="api-response reveal" style="max-width:720px;margin:1.25rem auto 0;background:#0B1120;color:#E2E8F0;border:1px solid #1E293B;border-radius:14px;padding:1.25rem;">
      <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:0.5rem">
        <strong style="color:#34D399;font-size:0.85rem;font-family:monospace">HTTP/1.1 200 OK</strong>
        <span style="font-size:0.75rem;color:#94A3B8;font-family:monospace">Latency: 142ms</span>
      </div>
      <pre style="margin:0;font-size:0.82rem;line-height:1.45;color:#A5F3FC;font-family:monospace"><code>{
  "success": true,
  "message_id": "wamid.HBgLOTE5ODc2NTQzMjEwFQIAEhgWM0VCMDAxMkJFQ0QwNDk5OTQyM0I0MQA=",
  "recipient": "+919876543210",
  "status": "queued",
  "created_at": "2026-09-11T12:30:00Z"
}</code></pre>
    </div>
  </div>
</section>

<!-- Webhooks Real-Time Flow -->
<section class="section section-gradient-1" id="webhook">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Real-Time Callbacks</span>
      <h2>Webhook Architecture &amp; Event Stream</h2>
      <p class="lead">Subscribe to critical conversation and delivery events with 99.99% webhook delivery guarantees and automated exponential retries.</p>
    </div>

    <div class="api-flow reveal">
      <span>1. Customer Sends Message</span><span class="arr">&rarr;</span>
      <span>2. Meta WhatsApp Cloud</span><span class="arr">&rarr;</span>
      <span>3. InboxWa Ingestion</span><span class="arr">&rarr;</span>
      <span>4. Webhook HTTP POST</span><span class="arr">&rarr;</span>
      <span>5. Your Backend CRM / DB</span>
    </div>

    <div class="api-log reveal" style="max-width:620px;margin:1.75rem auto 0;padding:1.5rem;background:#070B16;border:1px solid #1E293B;border-radius:16px;">
      <div style="display:flex;justify-content:space-between;border-bottom:1px solid #1E293B;padding-bottom:8px;margin-bottom:12px;font-size:0.78rem;">
        <span style="color:#67E8F9;font-weight:700">INBOUND EVENT STREAM</span>
        <span style="color:#34D399">● LIVE</span>
      </div>
      <div style="font-family:monospace;font-size:0.8rem;line-height:1.6;color:#CBD5E1">
        <div><span style="color:#A78BFA">EVENT:</span> message.received</div>
        <div><span style="color:#A78BFA">SENDER:</span> +91 98765 43210 (Karan Patel)</div>
        <div><span style="color:#A78BFA">PAYLOAD:</span> "Hi, I would like to book a consultation tomorrow at 3 PM"</div>
        <div><span style="color:#A78BFA">DESTINATION:</span> https://crm.yourcompany.com/webhooks/inboxwa</div>
        <div><span style="color:#A78BFA">STATUS:</span> <strong style="color:#34D399">200 OK (Processed in 118ms)</strong></div>
      </div>
    </div>
  </div>
</section>

<!-- What Can You Build -->
<section class="section" id="usecases">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Developer Solutions</span>
      <h2>What Can You Build with InboxWa APIs?</h2>
      <p class="lead">From automated transactional alerts to two-way CRM sync, create tailored WhatsApp workflows.</p>
    </div>

    <div class="res-grid">
      <div class="res-card reveal">
        <div class="res-card-icon icon-bg-purple">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h3>Custom CRM Synchronization</h3>
        <p>Sync WhatsApp conversations, leads, and customer tags directly into HubSpot, Salesforce, Zoho or proprietary internal databases.</p>
      </div>

      <div class="res-card reveal">
        <div class="res-card-icon icon-bg-green">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
        </div>
        <h3>E-Commerce Order Lifecycle</h3>
        <p>Trigger automated WhatsApp alerts for order placed, dispatch tracking links, OTP cash-on-delivery confirmations, and return updates.</p>
      </div>

      <div class="res-card reveal">
        <div class="res-card-icon icon-bg-blue">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        </div>
        <h3>Appointment &amp; Event Booking</h3>
        <p>Connect your booking system to send instant calendar invites, Google Meet links, 24-hour reminder pings, and automated rescheduling.</p>
      </div>

      <div class="res-card reveal">
        <div class="res-card-icon icon-bg-pink">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
        </div>
        <h3>Payment Links &amp; Invoicing</h3>
        <p>Dispatch dynamic UPI / Razorpay payment links, automated invoice PDFs, subscription renewal reminders, and instant payment receipts.</p>
      </div>

      <div class="res-card reveal">
        <div class="res-card-icon icon-bg-cyan">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
        </div>
        <h3>Lead Routing &amp; Scoring</h3>
        <p>When leads submit a website form or ad, qualify them via bot questions and route high-value prospects to active sales reps instantly.</p>
      </div>

      <div class="res-card reveal">
        <div class="res-card-icon icon-bg-indigo">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4"/></svg>
        </div>
        <h3>AI Agent Custom Workflows</h3>
        <p>Integrate your own LLM / LangChain / OpenAI agent with InboxWa’s messaging pipe for tailored conversational intelligence.</p>
      </div>
    </div>
  </div>
</section>

<!-- Error Code Reference Table -->
<section class="section section-gradient-1" id="errors">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Status Codes</span>
      <h2>Predictable HTTP Status Codes &amp; Errors</h2>
      <p class="lead">Clear error structures make debugging integrations effortless.</p>
    </div>

    <div style="max-width:840px;margin:0 auto;overflow-x:auto;background:#fff;border:1px solid #E5E7EB;border-radius:16px;box-shadow:0 2px 8px rgba(0,0,0,0.03);" class="reveal">
      <table style="width:100%;border-collapse:collapse;font-size:0.9rem;text-align:left;">
        <thead>
          <tr style="background:#F9FAFB;border-bottom:1px solid #E5E7EB;font-weight:700;color:#374151">
            <th style="padding:14px 18px;">Status Code</th>
            <th style="padding:14px 18px;">Type</th>
            <th style="padding:14px 18px;">Description</th>
            <th style="padding:14px 18px;">Recommended Action</th>
          </tr>
        </thead>
        <tbody>
          <tr style="border-bottom:1px solid #F3F4F6">
            <td style="padding:14px 18px;font-weight:700;color:#16A34A;font-family:monospace">200 OK</td>
            <td style="padding:14px 18px;">Success</td>
            <td style="padding:14px 18px;">Message or action successfully validated &amp; queued.</td>
            <td style="padding:14px 18px;color:#6B7280">Store message_id for delivery status tracking.</td>
          </tr>
          <tr style="border-bottom:1px solid #F3F4F6">
            <td style="padding:14px 18px;font-weight:700;color:#DC2626;font-family:monospace">400 Bad Request</td>
            <td style="padding:14px 18px;">Client Error</td>
            <td style="padding:14px 18px;">Missing parameters or invalid template variable format.</td>
            <td style="padding:14px 18px;color:#6B7280">Verify JSON payload matches template specification.</td>
          </tr>
          <tr style="border-bottom:1px solid #F3F4F6">
            <td style="padding:14px 18px;font-weight:700;color:#DC2626;font-family:monospace">401 Unauthorized</td>
            <td style="padding:14px 18px;">Auth Error</td>
            <td style="padding:14px 18px;">Invalid, expired, or missing Bearer API token.</td>
            <td style="padding:14px 18px;color:#6B7280">Generate new API key in InboxWa Developer Dashboard.</td>
          </tr>
          <tr style="border-bottom:1px solid #F3F4F6">
            <td style="padding:14px 18px;font-weight:700;color:#D97706;font-family:monospace">429 Rate Limit</td>
            <td style="padding:14px 18px;">Rate Exceeded</td>
            <td style="padding:14px 18px;">API call limit exceeded (default 80 req/sec).</td>
            <td style="padding:14px 18px;color:#6B7280">Implement exponential backoff or request tier upgrade.</td>
          </tr>
          <tr>
            <td style="padding:14px 18px;font-weight:700;color:#7C3AED;font-family:monospace">500 Server Error</td>
            <td style="padding:14px 18px;">Meta / Server</td>
            <td style="padding:14px 18px;">Meta WhatsApp Cloud downtime or upstream timeout.</td>
            <td style="padding:14px 18px;color:#6B7280">InboxWa retries automatically with 5 retry intervals.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Interactive Workflow Builder Simulation -->
<section class="section" id="playground">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Workflow Tester</span>
      <h2>Interactive Trigger &amp; Action Simulator</h2>
      <p class="lead">Test automation logic directly inside your browser.</p>
    </div>

    <div class="api-play reveal" style="max-width:540px;margin:1.5rem auto 0;background:#fff;border:1px solid #E5E7EB;border-radius:18px;padding:2rem;box-shadow:0 4px 20px rgba(0,0,0,0.04)">
      <label>
        Trigger Event (Inbound):
        <select id="api-trigger" style="width:100%;padding:0.75rem;border-radius:8px;border:1px solid #D1D5DB;margin-top:4px">
          <option value="New Shopify Order">Shopify &rarr; New Order Placed</option>
          <option value="Lead Form Submission">Website &rarr; Lead Form Submitted</option>
          <option value="Incoming WhatsApp Message">WhatsApp &rarr; Customer Keyword "DEMO"</option>
          <option value="HubSpot Deal Won">HubSpot CRM &rarr; Deal Stage "Closed Won"</option>
        </select>
      </label>

      <label style="margin-top:0.75rem">
        Automated Action (Outbound):
        <select id="api-action" style="width:100%;padding:0.75rem;border-radius:8px;border:1px solid #D1D5DB;margin-top:4px">
          <option value="Send WhatsApp Order Confirmation">Send Instant Order Confirmation with Tracking Link</option>
          <option value="Qualify Lead with AI Chatbot">Trigger 3-Question WhatsApp Qualification Bot</option>
          <option value="Notify Sales Rep on WhatsApp">Send High-Priority Alert to On-Duty Sales Agent</option>
          <option value="Create Calendar Booking">Send Interactive Calendar Booking Flow</option>
        </select>
      </label>

      <button type="button" class="btn btn-primary btn-lg" id="api-run" style="margin-top:1.25rem;width:100%">
        Execute Simulated Automation &rarr;
      </button>

      <div class="api-run-out" id="api-run-out" style="margin-top:1rem;background:#0F172A;color:#38BDF8;border-radius:10px;padding:1rem;font-family:monospace;font-size:0.85rem;line-height:1.5;text-align:left">
        Select a trigger + action, then click "Execute Simulated Automation".
      </div>
    </div>
  </div>
</section>

<!-- Final CTA Section -->
<section class="section section-dark api-final">
  <div class="container" style="text-align:center">
    <div class="reveal">
      <h2 style="color:#fff;margin-bottom:0.75rem;">Ready to Build with InboxWa APIs?</h2>
      <p class="lead" style="color:rgba(255,255,255,.75);max-width:600px;margin:0 auto 1.75rem;">Get API credentials in minutes, explore comprehensive postman collections, and integrate enterprise WhatsApp automation.</p>
      <div style="display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="<?php echo $bp; ?>auth/register" class="btn btn-primary btn-lg">Generate Free API Keys &rarr;</a>
        <a href="/resources/documentation/" class="btn btn-outline btn-lg" style="border-color:rgba(255,255,255,.4);color:#fff">Read Documentation</a>
        <a href="/resources/help-center/#support-form" class="btn btn-outline btn-lg" style="border-color:rgba(255,255,255,.4);color:#fff">Talk to Developer Support</a>
      </div>
    </div>
  </div>
</section>

<script src="/assets/js/api-webhooks.js?v=2" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>

