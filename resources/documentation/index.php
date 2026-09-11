<?php
$basePath = '../../';
$pageTitle = 'Product Documentation & User Guides — InboxWa';
$pageDescription = 'Complete step-by-step guides, API references, and walkthroughs to configure WhatsApp Business API, chatbots, broadcasts, CRM, and integrations in InboxWa.';
$canonicalUrl = 'https://inboxwa.com/resources/documentation/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/resources.css?v=3">

<div class="container">
  <nav class="res-breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span class="sep">/</span>
    <a href="<?php echo $bp; ?>solutions/">Solutions</a>
    <span class="sep">/</span>
    <span>Documentation</span>
  </nav>
</div>

<section class="section res-hero" style="padding-bottom:1.5rem">
  <div class="container">
    <div class="reveal">
      <span class="badge badge-primary">Developer &amp; User Manual</span>
      <h1>InboxWa Product Documentation</h1>
      <p class="lead">Complete step-by-step guides, configuration checklists, and best practices to launch and scale your WhatsApp communication infrastructure.</p>
    </div>
  </div>
</section>

<section class="section" style="padding-top:0">
  <div class="container docs-layout">
    <!-- Sticky Sidebar Navigation -->
    <aside class="docs-side reveal" id="docs-side">
      <div class="docs-side-group-title">GETTING STARTED</div>
      <a href="#0" class="is-active">Quickstart Guide</a>
      <a href="#1">Meta Verification</a>
      <a href="#2">Phone Number Setup</a>

      <div class="docs-side-group-title">AUTOMATION &amp; CHATBOTS</div>
      <a href="#3">Flow Builder</a>
      <a href="#4">AI Chatbot Agents</a>

      <div class="docs-side-group-title">CAMPAIGNS &amp; MESSAGING</div>
      <a href="#5">Broadcast Campaigns</a>
      <a href="#6">Shared Team Inbox</a>

      <div class="docs-side-group-title">DATA &amp; INTEGRATIONS</div>
      <a href="#7">CRM &amp; Contacts</a>
      <a href="#8">Webhooks &amp; REST API</a>
      <a href="#9">E-commerce Integrations</a>

      <div class="docs-side-group-title">ADMIN &amp; BILLING</div>
      <a href="#10">Analytics &amp; Reports</a>
      <a href="#11">Billing &amp; Credits</a>
    </aside>

    <!-- Main Content Area -->
    <div class="docs-main">
      <!-- 0. Quickstart -->
      <article id="0" class="docs-section reveal">
        <span class="badge badge-primary" style="margin-bottom:0.75rem">Chapter 1</span>
        <h2>Quickstart: Launching InboxWa in 3 Steps</h2>
        <p>Welcome to InboxWa! This guide walks you through setting up your workspace, connecting an official WhatsApp Business API account, and sending your first automated message.</p>
        
        <div class="docs-callout docs-callout-info">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
          <div><strong>Prerequisites:</strong> You need an active phone number capable of receiving an SMS or voice OTP, a Facebook account with admin access to your company's Meta Business Manager, and your business details.</div>
        </div>

        <h3>Quickstart Checklist:</h3>
        <ol class="docs-steps">
          <li><strong>Create Your InboxWa Account:</strong> Sign up at <a href="/auth/register" style="color:var(--p2);font-weight:700">InboxWa Registration</a>. Choose your organization name and preferred workspace subdomain.</li>
          <li><strong>Complete Meta Embedded Signup:</strong> From the InboxWa Dashboard, click <em>"Connect WhatsApp"</em>. A secure Meta pop-up window will guide you through selecting or creating your Meta Business Manager and WABA (WhatsApp Business Account).</li>
          <li><strong>Verify Your Phone Number:</strong> Enter the 6-digit one-time code (OTP) sent via SMS or voice call to link your phone number to the WhatsApp Cloud API infrastructure.</li>
          <li><strong>Send a Test Message:</strong> Open the Shared Inbox, select your verified test contact, and dispatch an approved template message to confirm bidirectional connectivity.</li>
        </ol>

        <div class="docs-callout docs-callout-tip">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
          <div><strong>Pro Tip:</strong> New phone numbers on unverified Meta Business Managers start in Tier 1 sandbox mode (50 business-initiated conversations/day). Verifying your Meta Business Manager automatically increases this limit to 1,000 conversations/day.</div>
        </div>
      </article>

      <!-- 1. Meta Business Verification -->
      <article id="1" class="docs-section reveal">
        <span class="badge badge-primary" style="margin-bottom:0.75rem">Chapter 2</span>
        <h2>Meta Business Manager Verification</h2>
        <p>Meta requires business verification to confirm your legal identity, protect customers against spam, unlock higher messaging tiers (up to unlimited conversations/day), and enable the official Green Tick verification badge.</p>

        <h3>Required Verification Documents:</h3>
        <ul style="color:#4B5563;line-height:1.7;margin-bottom:1.25rem;">
          <li><strong>Proof of Legal Business Name:</strong> Certificate of Incorporation, GST Registration, Trade License, or Business Bank Statement.</li>
          <li><strong>Proof of Business Address:</strong> Utility Bill (electricity/phone), Bank Statement, or Lease Agreement displaying the exact business address registered in Meta.</li>
          <li><strong>Website Domain Verification:</strong> DNS TXT record or HTML meta tag verification on your official company website.</li>
        </ul>

        <h3>Step-by-Step Submission:</h3>
        <ol class="docs-steps">
          <li>Navigate to <a href="https://business.facebook.com/settings/security" target="_blank" rel="noopener" style="color:var(--p2)">Meta Business Settings &rarr; Security Center</a>.</li>
          <li>Click <strong>"Start Verification"</strong> under the Business Verification tile.</li>
          <li>Enter your legal organization name, address, phone number, and official website URL.</li>
          <li>Upload your government-issued registration certificates. Ensure all business names and addresses match verbatim.</li>
          <li>Select domain verification or corporate email domain verification (e.g. <code>@yourcompany.com</code>) to complete the request.</li>
        </ol>

        <div class="docs-callout docs-callout-tip">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
          <div><strong>Approval Timeline:</strong> Meta typically reviews and approves verification submissions within 24 to 72 business hours. If Meta requests additional info, our support team at <a href="mailto:support@inboxwa.com" style="color:#059669;font-weight:700">support@inboxwa.com</a> can review your submission files.</div>
        </div>
      </article>

      <!-- 2. Phone Number Provisioning & Green Tick -->
      <article id="2" class="docs-section reveal">
        <span class="badge badge-primary" style="margin-bottom:0.75rem">Chapter 3</span>
        <h2>Phone Number Setup &amp; Green Tick Verification</h2>
        <p>Your WhatsApp Business API number is the identity through which all customers interact with your brand. You can use standard 10-digit mobile numbers, landline numbers, or toll-free numbers (e.g. 1800 numbers).</p>

        <h3>Number Migration Considerations:</h3>
        <ul style="color:#4B5563;line-height:1.7;margin-bottom:1.25rem;">
          <li>If your phone number is currently active on the consumer WhatsApp or standard WhatsApp Business app, you must first navigate to <strong>Settings &rarr; Account &rarr; Delete Account</strong> within the mobile app before registering on the Cloud API.</li>
          <li>Once registered on the Cloud API, all chats are managed through InboxWa’s web console, Android app, and iOS app.</li>
        </ul>

        <h3>Official Business Account (Green Tick) Application:</h3>
        <p>The Green Tick badge displays your verified business name in the chat header instead of a phone number, even if the user has not saved your contact.</p>
        <ol class="docs-steps">
          <li>Ensure your Meta Business Manager is fully verified and 2FA is enforced on all admin accounts.</li>
          <li>Maintain a <strong>High</strong> phone number quality rating in InboxWa for at least 7 consecutive days.</li>
          <li>Compile 3 to 5 organic news articles or press releases from notable publications mentioning your brand.</li>
          <li>In your InboxWa Settings &rarr; WhatsApp Profile, click <strong>"Apply for Official Business Account"</strong> and submit your references.</li>
        </ol>
      </article>

      <!-- 3. Flow Builder & Chatbots -->
      <article id="3" class="docs-section reveal">
        <span class="badge badge-primary" style="margin-bottom:0.75rem">Chapter 4</span>
        <h2>Visual Flow Builder &amp; Chatbot Logic</h2>
        <p>InboxWa’s drag-and-drop Visual Flow Builder lets you create sophisticated automated conversation journeys without writing code.</p>

        <h3>Core Node Types:</h3>
        <ul style="color:#4B5563;line-height:1.7;margin-bottom:1.25rem;">
          <li><strong>Send Message:</strong> Dispatches text, images, PDF brochures, video explainers, or interactive buttons.</li>
          <li><strong>Ask Question:</strong> Waits for customer reply and validates format (Text, Email, Phone Number, Date, Number).</li>
          <li><strong>Condition Branch:</strong> Splits the path based on user attributes, tags, or keyword match.</li>
          <li><strong>CRM Update:</strong> Sets contact attributes, adds tags (e.g. <code>lead-qualified</code>), or updates pipeline stage.</li>
          <li><strong>Webhook Action:</strong> Sends customer responses to an external server URL via HTTP POST.</li>
          <li><strong>Agent Handoff:</strong> Pauses automation and notifies an available human agent in the Shared Team Inbox.</li>
        </ul>

        <div class="docs-callout docs-callout-info">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
          <div><strong>Trigger Rules:</strong> Flows can be triggered by incoming keywords (e.g. "PRICING", "CATALOG"), Click-to-WhatsApp Facebook ad payload IDs, or REST API calls from your website.</div>
        </div>
      </article>

      <!-- 4. AI Chatbots -->
      <article id="4" class="docs-section reveal">
        <span class="badge badge-primary" style="margin-bottom:0.75rem">Chapter 5</span>
        <h2>AI Agents &amp; Natural Language Chatbots</h2>
        <p>Empower your chatbot with generative AI to answer open-ended customer inquiries using your own company documentation, FAQs, and product catalogs.</p>

        <h3>Configuring Your AI Knowledge Base:</h3>
        <ol class="docs-steps">
          <li>Navigate to <strong>Chatbots &rarr; AI Assistant</strong> in your InboxWa workspace.</li>
          <li>Upload your product catalogs, warranty policies, service menus, and PDF documentation into the Knowledge Base store.</li>
          <li>Configure your agent’s persona and system prompt (e.g. <em>"You are an empathetic customer support assistant for a premium fashion brand. Always provide helpful sizing guidance."</em>).</li>
          <li>Set confidence thresholds: If the AI confidence score falls below 75%, configure it to gracefully transfer to an on-duty human agent.</li>
        </ol>
      </article>

      <!-- 5. Broadcast Campaigns -->
      <article id="5" class="docs-section reveal">
        <span class="badge badge-primary" style="margin-bottom:0.75rem">Chapter 6</span>
        <h2>Broadcast Campaigns &amp; Anti-Ban Compliance</h2>
        <p>Send personalized notifications, promotional offers, and newsletters to thousands of opted-in customers in seconds with 98%+ open rates.</p>

        <h3>Creating Approved Message Templates:</h3>
        <p>Meta requires all outbound business-initiated messages to be pre-approved templates. Templates fall into 3 official categories:</p>
        <ul style="color:#4B5563;line-height:1.7;margin-bottom:1.25rem;">
          <li><strong>Marketing:</strong> Promotions, product announcements, discount coupons, and seasonal sales.</li>
          <li><strong>Utility:</strong> Order confirmations, shipment tracking updates, appointment reminders, and billing receipts.</li>
          <li><strong>Authentication:</strong> One-Time Passwords (OTPs) and account login security codes.</li>
        </ul>

        <h3>Best Practices for High Phone Quality Rating:</h3>
        <ul style="color:#4B5563;line-height:1.7;margin-bottom:1.25rem;">
          <li><strong>Always Include an Opt-out Button:</strong> Add a Quick Reply button saying <em>"Stop Promotions"</em> or <em>"Unsubscribe"</em> so users opt out rather than blocking your number.</li>
          <li><strong>Segment Your Contacts:</strong> Only broadcast to users who have engaged with your brand in the last 30 to 90 days.</li>
          <li><strong>Use Dynamic Personalization:</strong> Personalize the greeting with <code>{{1}}</code> (customer name) and recent order data to increase relevance.</li>
        </ul>
      </article>

      <!-- 6. Shared Team Inbox -->
      <article id="6" class="docs-section reveal">
        <span class="badge badge-primary" style="margin-bottom:0.75rem">Chapter 7</span>
        <h2>Shared Team Inbox &amp; Collaboration</h2>
        <p>One unified inbox for your entire sales and support department. Eliminate duplicate replies, collaborate on complex customer issues, and monitor SLA response metrics.</p>

        <h3>Key Inbox Capabilities:</h3>
        <ul style="color:#4B5563;line-height:1.7;margin-bottom:1.25rem;">
          <li><strong>Collision Detection:</strong> See in real-time when a colleague is currently viewing or typing a reply to a conversation.</li>
          <li><strong>Internal Private Notes:</strong> Mention teammates with <code>@teammate</code> to discuss customer requests privately without the customer seeing the notes.</li>
          <li><strong>Canned Quick Replies:</strong> Press <code>/</code> in the reply box to insert standardized answers, payment links, or return guidelines.</li>
          <li><strong>Round-Robin Assignment:</strong> Automatically distribute incoming chats evenly across online agents.</li>
        </ul>
      </article>

      <!-- 7. CRM & Contacts -->
      <article id="7" class="docs-section reveal">
        <span class="badge badge-primary" style="margin-bottom:0.75rem">Chapter 8</span>
        <h2>CRM &amp; Contact Management</h2>
        <p>Organize contacts, configure custom properties, manage sales stages, and sync audience lists with CSV imports.</p>

        <h3>Custom Properties &amp; Segmentation:</h3>
        <p>Create unlimited custom attributes such as <code>city</code>, <code>vip_status</code>, <code>annual_spend</code>, or <code>lead_source</code>. Use these attributes to build dynamic audience segments for targeted marketing campaigns.</p>
      </article>

      <!-- 8. Webhooks & REST API -->
      <article id="8" class="docs-section reveal">
        <span class="badge badge-primary" style="margin-bottom:0.75rem">Chapter 9</span>
        <h2>REST API &amp; Webhooks Integration</h2>
        <p>Integrate InboxWa programmatically into your software stack. Complete API references and live interactive code samples are available at <a href="/integrations/api-webhooks/" style="color:var(--p2);font-weight:700">InboxWa API &amp; Webhooks Documentation</a>.</p>

        <div class="code-block">
          <pre><code># Dispatch WhatsApp message via cURL
curl -X POST https://api.inboxwa.com/v1/messages \
  -H "Authorization: Bearer YOUR_API_KEY" \
  -H "Content-Type: application/json" \
  -d '{
    "to": "+919876543210",
    "type": "text",
    "text": { "body": "Hello from InboxWa API!" }
  }'</code></pre>
          <button type="button" class="copy-btn" onclick="navigator.clipboard.writeText(this.previousElementSibling.textContent)">Copy</button>
        </div>
      </article>

      <!-- 9. E-Commerce Integrations -->
      <article id="9" class="docs-section reveal">
        <span class="badge badge-primary" style="margin-bottom:0.75rem">Chapter 10</span>
        <h2>E-Commerce &amp; Native Integrations</h2>
        <p>Connect your storefront and business tools with zero code.</p>
        <ul style="color:#4B5563;line-height:1.7;margin-bottom:1.25rem;">
          <li><strong>Shopify:</strong> Install the InboxWa app to automate abandoned cart recovery, order dispatch alerts, and COD confirmations.</li>
          <li><strong>WooCommerce:</strong> Instant store sync via our native WordPress plugin.</li>
          <li><strong>Google Sheets:</strong> Append incoming form leads to Google Sheets and dispatch WhatsApp notifications automatically.</li>
          <li><strong>Google Calendar:</strong> Automatically sync booked appointments and send WhatsApp reminders with Meet links.</li>
        </ul>
      </article>

      <!-- 10. Analytics & Reports -->
      <article id="10" class="docs-section reveal">
        <span class="badge badge-primary" style="margin-bottom:0.75rem">Chapter 11</span>
        <h2>Analytics, Reporting &amp; Agent SLAs</h2>
        <p>Gain actionable visibility into messaging deliverability, open rates, campaign ROI, and team response speeds.</p>
        <ul style="color:#4B5563;line-height:1.7;margin-bottom:1.25rem;">
          <li><strong>Broadcast Analytics:</strong> Real-time tracking of sent, delivered, read, and failed message counts.</li>
          <li><strong>Agent Performance:</strong> Track First Response Time (FRT), average resolution time, and total resolved conversations per agent.</li>
          <li><strong>Exportable Reports:</strong> Download comprehensive CSV audit trails for accounting and compliance.</li>
        </ul>
      </article>

      <!-- 11. Billing & Plan Credits -->
      <article id="11" class="docs-section reveal">
        <span class="badge badge-primary" style="margin-bottom:0.75rem">Chapter 12</span>
        <h2>Billing, Plans &amp; Conversation Credits</h2>
        <p>Understand plan allowances, add-on credits, and invoice management.</p>
        <p style="color:#4B5563;line-height:1.65">InboxWa separates subscription platform fees from official Meta conversation fees. You pay the transparent flat platform tier plus exact official Meta rates without markup. Top up your conversation wallet anytime with instant GST-compliant tax invoices.</p>
      </article>
    </div>
  </div>
</section>

<!-- Final CTA Section -->
<section class="section section-dark">
  <div class="container" style="text-align:center">
    <div class="reveal">
      <h2 style="color:#fff;margin-bottom:0.75rem;">Need Hands-On Setup Assistance?</h2>
      <p class="lead" style="color:rgba(255,255,255,.75);max-width:580px;margin:0 auto 1.5rem;">Our solution engineers are available to guide you through Meta verification, API setup, and flow design.</p>
      <div style="display:flex;flex-wrap:wrap;gap:0.75rem;justify-content:center">
        <a href="/resources/help-center/#support-form" class="btn btn-primary btn-lg">Open Support Ticket &rarr;</a>
        <a href="https://wa.me/918050854445" target="_blank" rel="noopener" class="btn btn-outline btn-lg" style="color:#fff;border-color:rgba(255,255,255,0.4)">Chat on WhatsApp</a>
      </div>
    </div>
  </div>
</section>

<script src="/assets/js/resources.js?v=3" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
