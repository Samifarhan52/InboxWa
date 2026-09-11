<?php
$basePath = '../../';
$pageTitle = 'Help Center & Support — InboxWa';
$pageDescription = 'Official InboxWa Help Center. Explore guides, setup tutorials, FAQs and documentation for WhatsApp Business API, chatbots, broadcasts, CRM and integrations.';
$canonicalUrl = 'https://inboxwa.com/resources/help-center/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/resources.css?v=3">

<div class="container">
  <nav class="res-breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span class="sep">/</span>
    <a href="<?php echo $bp; ?>solutions/">Solutions</a>
    <span class="sep">/</span>
    <span>Help Center</span>
  </nav>
</div>

<!-- Hero Section -->
<section class="section res-hero">
  <div class="container">
    <div class="reveal">
      <span class="badge badge-primary">InboxWa Help Center</span>
      <h1>How Can We Help You Today?</h1>
      <p class="lead">Search guides, tutorials, and setup instructions for WhatsApp Business API, chatbots, team inbox, campaigns, and integrations.</p>
      
      <div class="hc-search-wrap">
        <div class="hc-search-input-box">
          <svg class="hc-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          <input type="search" id="hc-search" class="hc-search-input" placeholder="Search guides, setup tutorials, error codes or topics..." aria-label="Search help center">
        </div>
        <div class="hc-quick-pills">
          <span>Popular topics:</span>
          <a href="#cat-waba" class="hc-pill">WhatsApp API</a>
          <a href="#cat-flows" class="hc-pill">Flow Builder</a>
          <a href="#cat-broadcasts" class="hc-pill">Broadcast Campaigns</a>
          <a href="#cat-billing" class="hc-pill">Billing &amp; Credits</a>
          <a href="#cat-api" class="hc-pill">Webhooks</a>
          <a href="#support-form" class="hc-pill" style="color:var(--p2);font-weight:700;">+ Raise Ticket</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Categories Grid -->
<section class="section section-gradient-1" id="categories">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Browse Knowledgebase</span>
      <h2>Explore by Category</h2>
      <p class="lead">Step-by-step guides categorized to help your team launch faster.</p>
    </div>

    <div class="res-grid">
      <!-- 1. WhatsApp API -->
      <a class="res-card reveal" href="/resources/documentation/#cat-waba" id="cat-waba">
        <div class="res-card-icon icon-bg-green">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
        </div>
        <h3>WhatsApp Business API</h3>
        <p>Connecting your WABA, Meta Business verification, phone number migration &amp; green tick badge.</p>
        <div class="res-card-footer">
          <span>12 Guides</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        </div>
      </a>

      <!-- 2. Chatbots & Flows -->
      <a class="res-card reveal" href="/resources/documentation/#cat-flows" id="cat-flows">
        <div class="res-card-icon icon-bg-purple">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4"/><line x1="8" y1="16" x2="8" y2="16"/><line x1="16" y1="16" x2="16" y2="16"/></svg>
        </div>
        <h3>Chatbots &amp; Flow Builder</h3>
        <p>Design multi-branch conversation funnels, keyword triggers, dynamic responses &amp; AI fallbacks.</p>
        <div class="res-card-footer">
          <span>15 Guides</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        </div>
      </a>

      <!-- 3. Broadcast Campaigns -->
      <a class="res-card reveal" href="/resources/documentation/#cat-broadcasts" id="cat-broadcasts">
        <div class="res-card-icon icon-bg-blue">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
        </div>
        <h3>Broadcast Campaigns</h3>
        <p>Pre-approved message templates, custom attributes, CSV audience uploads &amp; delivery reporting.</p>
        <div class="res-card-footer">
          <span>9 Guides</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        </div>
      </a>

      <!-- 4. Shared Team Inbox -->
      <a class="res-card reveal" href="/resources/documentation/#cat-inbox">
        <div class="res-card-icon icon-bg-cyan">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
        </div>
        <h3>Shared Team Inbox</h3>
        <p>Multi-agent routing, live collision alerts, private internal notes, quick replies &amp; tags.</p>
        <div class="res-card-footer">
          <span>8 Guides</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        </div>
      </a>

      <!-- 5. CRM & Contacts -->
      <a class="res-card reveal" href="/resources/documentation/#cat-crm">
        <div class="res-card-icon icon-bg-indigo">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h3>CRM &amp; Contact Management</h3>
        <p>Create segments, configure custom attributes, manage lead stages &amp; automate lifecycle tags.</p>
        <div class="res-card-footer">
          <span>10 Guides</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        </div>
      </a>

      <!-- 6. Webhooks & API -->
      <a class="res-card reveal" href="/integrations/api-webhooks/" id="cat-api">
        <div class="res-card-icon icon-bg-pink">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
        <h3>Webhooks &amp; REST API</h3>
        <p>Real-time event subscriptions, HMAC verification, REST endpoints &amp; code examples.</p>
        <div class="res-card-footer">
          <span>14 Guides</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        </div>
      </a>

      <!-- 7. Integrations -->
      <a class="res-card reveal" href="/resources/documentation/#cat-integrations">
        <div class="res-card-icon icon-bg-emerald">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
        </div>
        <h3>E-Commerce &amp; Tool Integrations</h3>
        <p>Connect Shopify, WooCommerce, Google Sheets, Google Calendar, HubSpot, Zoho and Zapier.</p>
        <div class="res-card-footer">
          <span>11 Guides</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        </div>
      </a>

      <!-- 8. Billing & Pricing -->
      <a class="res-card reveal" href="/resources/documentation/#cat-billing" id="cat-billing">
        <div class="res-card-icon icon-bg-amber">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
        </div>
        <h3>Billing, Plans &amp; Invoices</h3>
        <p>Understand Meta conversation charges, subscription plans, top-up wallet &amp; invoice download.</p>
        <div class="res-card-footer">
          <span>7 Guides</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        </div>
      </a>

      <!-- 9. Security & Compliance -->
      <a class="res-card reveal" href="/resources/documentation/#cat-security">
        <div class="res-card-icon icon-bg-purple">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        </div>
        <h3>Account, 2FA &amp; Security</h3>
        <p>Two-factor authentication, IP restrictions, user permission roles, data retention &amp; GDPR compliance.</p>
        <div class="res-card-footer">
          <span>6 Guides</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- Popular Articles Section -->
<section class="section" id="articles">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Most Read</span>
      <h2>Popular Help Articles</h2>
      <p class="lead">Frequently referenced troubleshooting guides and setup walk-throughs.</p>
    </div>

    <div class="res-grid">
      <article class="res-card reveal">
        <span class="badge badge-primary" style="align-self:flex-start;margin-bottom:0.75rem;">WhatsApp API</span>
        <h3>How to Verify Your Meta Business Manager Account</h3>
        <p>Required documents, business registration details, and step-by-step verification process to unlock unlimited messaging tiers.</p>
        <div class="res-card-footer">
          <span>4 min read</span>
          <a href="/resources/documentation/#0" class="btn btn-sm btn-outline">Read Guide &rarr;</a>
        </div>
      </article>

      <article class="res-card reveal">
        <span class="badge badge-primary" style="align-self:flex-start;margin-bottom:0.75rem;">Automation</span>
        <h3>Building an Automated Lead Qualification Flow</h3>
        <p>Capture customer intent, request budget and contact details, and route qualified leads instantly to sales reps.</p>
        <div class="res-card-footer">
          <span>5 min read</span>
          <a href="/resources/documentation/#3" class="btn btn-sm btn-outline">Read Guide &rarr;</a>
        </div>
      </article>

      <article class="res-card reveal">
        <span class="badge badge-primary" style="align-self:flex-start;margin-bottom:0.75rem;">Campaigns</span>
        <h3>Meta Template Approval Guidelines &amp; Best Practices</h3>
        <p>Avoid template rejections. How to format variables, categories, call-to-action buttons, and opt-out clauses properly.</p>
        <div class="res-card-footer">
          <span>6 min read</span>
          <a href="/resources/documentation/#5" class="btn btn-sm btn-outline">Read Guide &rarr;</a>
        </div>
      </article>

      <article class="res-card reveal">
        <span class="badge badge-primary" style="align-self:flex-start;margin-bottom:0.75rem;">Developer</span>
        <h3>Setting Up Real-Time Webhooks for Customer Messages</h3>
        <p>Configure HTTP endpoints, handle verification tokens, verify HMAC signatures, and handle delivery callbacks reliably.</p>
        <div class="res-card-footer">
          <span>7 min read</span>
          <a href="/integrations/api-webhooks/" class="btn btn-sm btn-outline">Read Guide &rarr;</a>
        </div>
      </article>

      <article class="res-card reveal">
        <span class="badge badge-primary" style="align-self:flex-start;margin-bottom:0.75rem;">E-commerce</span>
        <h3>Automating Abandoned Cart Recovery on WhatsApp</h3>
        <p>Connect Shopify or WooCommerce to dispatch personalized recovery reminders with dynamic checkout links within 15 minutes.</p>
        <div class="res-card-footer">
          <span>5 min read</span>
          <a href="/solutions/shopify/" class="btn btn-sm btn-outline">Read Guide &rarr;</a>
        </div>
      </article>

      <article class="res-card reveal">
        <span class="badge badge-primary" style="align-self:flex-start;margin-bottom:0.75rem;">Billing</span>
        <h3>Understanding WhatsApp Business API Conversation Charges</h3>
        <p>Learn how Meta charges for Service, Marketing, Utility, and Authentication conversations with InboxWa’s zero-markup model.</p>
        <div class="res-card-footer">
          <span>4 min read</span>
          <a href="/pricing/" class="btn btn-sm btn-outline">Read Guide &rarr;</a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- Frequently Asked Questions -->
<section class="section section-gradient-1" id="faqs">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">FAQ</span>
      <h2>Frequently Asked Questions</h2>
      <p class="lead">Instant answers to the most common questions our support team receives.</p>
    </div>

    <div class="res-faq-list">
      <div class="res-faq-item reveal">
        <button type="button" class="res-faq-question" aria-expanded="false">
          <span>How long does it take to activate the official WhatsApp Business API?</span>
          <svg class="res-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="res-faq-answer">
          With InboxWa, your WhatsApp Business API number is typically activated within 10 to 30 minutes via Meta Embedded Signup. If your Meta Business Manager is already verified, you can immediately begin sending messages up to Tier 1 limits (1,000 unique business-initiated conversations per 24 hours).
        </div>
      </div>

      <div class="res-faq-item reveal">
        <button type="button" class="res-faq-question" aria-expanded="false">
          <span>Can I use my existing WhatsApp number with InboxWa?</span>
          <svg class="res-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="res-faq-answer">
          Yes! You can migrate an existing mobile, landline, or toll-free number to the WhatsApp Cloud API. Note that before migrating, you must delete the account from the regular WhatsApp or WhatsApp Business mobile app so Meta can register it on the Cloud API infrastructure.
        </div>
      </div>

      <div class="res-faq-item reveal">
        <button type="button" class="res-faq-question" aria-expanded="false">
          <span>How do I get the official Green Tick verification badge?</span>
          <svg class="res-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="res-faq-answer">
          To qualify for the official Meta Official Business Account (Green Tick) badge, your business must have a verified Meta Business Manager, 2-factor authentication enabled, and demonstrable brand notability (organic press mentions in credible publications). InboxWa’s support team assists all Growth &amp; Enterprise tier clients with Green Tick applications at no extra fee.
        </div>
      </div>

      <div class="res-faq-item reveal">
        <button type="button" class="res-faq-question" aria-expanded="false">
          <span>What are the messaging rate limits for bulk broadcasts?</span>
          <svg class="res-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="res-faq-answer">
          Meta structures messaging tiers dynamically based on phone number quality rating: Tier 1 allows 1,000 conversations/day, Tier 2 allows 10,000/day, Tier 3 allows 100,000/day, and Tier 4 allows unlimited conversations/day. As your broadcasts maintain a High quality rating, Meta automatically elevates your messaging tier every 48 hours.
        </div>
      </div>

      <div class="res-faq-item reveal">
        <button type="button" class="res-faq-question" aria-expanded="false">
          <span>Can I connect multiple agents to handle incoming chats on the same number?</span>
          <svg class="res-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="res-faq-answer">
          Yes! InboxWa’s Shared Team Inbox allows unlimited agents to respond to incoming customer messages simultaneously from our web console, Android app, or iOS app. You can assign conversations manually, use round-robin auto-assignment, add internal notes, and tag conversations with priority flags.
        </div>
      </div>

      <div class="res-faq-item reveal">
        <button type="button" class="res-faq-question" aria-expanded="false">
          <span>Does InboxWa charge per message or take commission on WhatsApp charges?</span>
          <svg class="res-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="res-faq-answer">
          InboxWa maintains 100% transparent pricing with zero markup on Meta conversation fees. You pay the standard transparent platform subscription plus the exact official Meta conversation cost as published by Meta for your country.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Support Form Section -->
<section class="section" id="support-form">
  <div class="container" style="max-width:720px">
    <div class="section-header reveal" style="margin-bottom:1.75rem">
      <span class="badge badge-primary">Priority Assistance</span>
      <h2>Contact InboxWa Technical Support</h2>
      <p class="lead">Have an issue or need assistance? Open a support ticket below or message our engineers directly on WhatsApp.</p>
    </div>

    <div class="support-sla-banner reveal">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <span>⚡ Average response time: Under 15 minutes during business hours (9 AM – 9 PM IST)</span>
    </div>

    <div class="support-form-card reveal">
      <form id="support-form-el" method="post" action="javascript:void(0)">
        <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(240px, 1fr));gap:1rem;">
          <div class="support-input-group">
            <label for="sup-name">Your Full Name *</label>
            <input type="text" id="sup-name" name="name" required placeholder="e.g. Rahul Sharma" autocomplete="name">
          </div>
          <div class="support-input-group">
            <label for="sup-email">Business Email *</label>
            <input type="email" id="sup-email" name="email" required placeholder="name@company.com" autocomplete="email">
          </div>
        </div>

        <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(240px, 1fr));gap:1rem;">
          <div class="support-input-group">
            <label for="sup-whatsapp">Registered WhatsApp Number *</label>
            <input type="tel" id="sup-whatsapp" name="whatsapp" required placeholder="+91 98765 43210" autocomplete="tel">
          </div>
          <div class="support-input-group">
            <label for="sup-category">Support Category *</label>
            <select id="sup-category" name="category" required>
              <option value="">Select issue category</option>
              <option value="WhatsApp API Setup">WhatsApp API Setup &amp; Onboarding</option>
              <option value="Meta Business Verification">Meta Business Verification</option>
              <option value="Chatbot & Flow Builder">Chatbot &amp; Flow Builder</option>
              <option value="Broadcasts & Templates">Broadcasts &amp; Template Approval</option>
              <option value="Webhooks & API Integration">Webhooks &amp; API Integration</option>
              <option value="Billing & Subscription">Billing, Invoices &amp; Plan Credits</option>
              <option value="Other Technical Query">Other Technical Query</option>
            </select>
          </div>
        </div>

        <div class="support-input-group">
          <label for="sup-subject">Subject / Issue Summary *</label>
          <input type="text" id="sup-subject" name="subject" required placeholder="Brief description of your issue">
        </div>

        <div class="support-input-group">
          <label for="sup-message">Detailed Description *</label>
          <textarea id="sup-message" name="message" required rows="4" placeholder="Please provide steps to reproduce, error messages, phone number involved, or screenshots context..."></textarea>
        </div>

        <div style="display:flex;flex-wrap:wrap;gap:1rem;align-items:center;margin-top:1.5rem">
          <button type="submit" class="btn btn-primary btn-lg" style="flex:1;min-width:200px">
            Submit Support Request &rarr;
          </button>
          <a class="btn btn-outline btn-lg" href="https://wa.me/918050854445?text=Hi%20InboxWa%20Support%2C%20I%20need%20assistance%20with%20my%20account" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:8px">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="#25D366"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2z"/></svg>
            Chat Live on WhatsApp
          </a>
        </div>

        <div id="support-status" style="margin-top:1.25rem;display:none;padding:0.9rem;border-radius:10px;background:#F0FDF4;border:1px solid #BBF7D0;font-size:0.92rem;line-height:1.5;"></div>
      </form>

      <div style="margin-top:2rem;padding-top:1.5rem;border-top:1px solid #F3F4F6;display:flex;flex-wrap:wrap;justify-content:space-between;gap:1rem;font-size:0.85rem;color:#6B7280;">
        <div><strong>Email Technical Support:</strong> <a href="mailto:support@inboxwa.com" style="color:var(--p2);text-decoration:none">support@inboxwa.com</a></div>
        <div><strong>Direct Support Hotline:</strong> <a href="tel:+918050854445" style="color:var(--p2);text-decoration:none">+91 80508 54445</a></div>
      </div>
    </div>
  </div>
</section>

<!-- Final CTA Banner -->
<section class="section section-dark">
  <div class="container" style="text-align:center">
    <div class="reveal">
      <h2 style="color:#FFFFFF;margin-bottom:0.75rem;">Scale Your Conversations with InboxWa</h2>
      <p class="lead" style="color:rgba(255,255,255,0.75);max-width:580px;margin:0 auto 1.5rem;">Join thousands of businesses automating sales, support, and marketing on official WhatsApp Business API.</p>
      <div style="display:flex;flex-wrap:wrap;gap:0.75rem;justify-content:center">
        <a href="<?php echo $bp; ?>auth/register" class="btn btn-primary btn-lg">Start Free 14-Day Trial &rarr;</a>
        <a href="<?php echo $bp; ?>#contact-section" class="btn btn-outline btn-lg btn-demo-open" style="color:#fff;border-color:rgba(255,255,255,0.4)">Book Live Demo</a>
      </div>
    </div>
  </div>
</section>

<script src="/assets/js/resources.js?v=3" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
