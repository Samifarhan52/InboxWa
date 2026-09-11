<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Visual Automation & Chatbot Builder | No-Code WhatsApp Flows | InboxWa';
$pageDescription = 'Build intelligent WhatsApp chatbots visually without code. Automate lead qualification, FAQs, order tracking, and human handover with 21 drag-and-drop conversational flow nodes.';
$canonicalUrl = 'https://inboxwa.com/products/chatbot/';
$ogImage = 'assets/images/products/chatbot/hero.png';

include __DIR__ . '/../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/product-pages.css">

<div class="prod-page">
  <div class="prod-ambient-1"></div>
  <div class="prod-ambient-2"></div>

  <!-- Hero Section -->
  <section class="prod-hero">
    <div class="prod-hero-grid">
      <div class="prod-hero-content">
        <div class="prod-badge">
          <span class="prod-badge-dot"></span>
          No-Code Chatbot Builder
        </div>
        <h1 class="prod-hero-title">
          Automate Conversations Visually <span class="prod-gradient-text">Without Any Code</span>
        </h1>
        <p class="prod-hero-desc">
          Create smart WhatsApp chatbots using a simple drag-and-drop builder. Answer customer questions instantly, capture leads, route tickets to human agents, and integrate with your CRM 24/7.
        </p>
        <div class="prod-hero-ctas">
          <a href="<?php echo $bp; ?>auth/register" class="prod-btn-primary">
            Start Building For Free
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
          <a href="#node-directory" class="prod-btn-secondary">
            Explore Flow Nodes
          </a>
        </div>
        <div class="prod-bullets">
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </span>
            No credit card needed
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </span>
            Built-in template integration
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </span>
            API webhooks enabled
          </div>
        </div>
      </div>
      <div class="prod-hero-media">
        <div class="prod-hero-media-wrapper">
          <img src="<?php echo $bp; ?>assets/images/products/chatbot/hero.png" alt="InboxWa Visual Automation Builder" class="prod-hero-media-img" width="1080" height="1080">
        </div>
      </div>
    </div>
  </section>

  <!-- Flow Nodes Directory Section -->
  <section class="prod-section prod-section-alt" id="node-directory">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">Visual Blocks Directory</span>
        <h2 class="prod-section-title">All Conversational Flow Nodes</h2>
        <p class="prod-section-desc">
          Connect simple, functional visual components to outline paths for any client inquiry without complex scripting.
        </p>
      </div>

      <!-- Category Filter Pills -->
      <div class="prod-nodes-filter" id="node-filters">
        <button type="button" class="prod-filter-btn active" data-filter="all">All Nodes (21)</button>
        <button type="button" class="prod-filter-btn" data-filter="START">Start</button>
        <button type="button" class="prod-filter-btn" data-filter="MESSAGING">Messaging</button>
        <button type="button" class="prod-filter-btn" data-filter="UTILITIES">Utilities</button>
        <button type="button" class="prod-filter-btn" data-filter="LOGIC">Logic</button>
        <button type="button" class="prod-filter-btn" data-filter="INTEGRATION">Integration</button>
        <button type="button" class="prod-filter-btn" data-filter="INTERACTIONS">Interactions</button>
      </div>

      <!-- Nodes Grid -->
      <div class="prod-nodes-grid" id="nodes-grid">
        <!-- 1 -->
        <div class="prod-node-item" data-category="START">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#ede9fe;color:#7c3aed">START</span>
          </div>
          <h3 class="prod-node-name">Automation Entry</h3>
          <p class="prod-node-desc">Launches the bot sequence whenever keyword matches, campaigns trigger, or dynamic variables match.</p>
        </div>
        <!-- 2 -->
        <div class="prod-node-item" data-category="MESSAGING">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#e0f2fe;color:#0284c7">MESSAGING</span>
          </div>
          <h3 class="prod-node-name">Send Message</h3>
          <p class="prod-node-desc">Sends a rich text format layout bubble with personalized custom attributes directly to customers.</p>
        </div>
        <!-- 3 -->
        <div class="prod-node-item" data-category="MESSAGING">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#e0f2fe;color:#0284c7">MESSAGING</span>
          </div>
          <h3 class="prod-node-name">Quick Reply</h3>
          <p class="prod-node-desc">Configures clickable buttons (up to 3) allowing clients to choose options instantly without typing.</p>
        </div>
        <!-- 4 -->
        <div class="prod-node-item" data-category="MESSAGING">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#e0f2fe;color:#0284c7">MESSAGING</span>
          </div>
          <h3 class="prod-node-name">Interactive List</h3>
          <p class="prod-node-desc">Displays an organized pop-up menu drawer showing up to 10 categorized selectable options.</p>
        </div>
        <!-- 5 -->
        <div class="prod-node-item" data-category="MESSAGING">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#e0f2fe;color:#0284c7">MESSAGING</span>
          </div>
          <h3 class="prod-node-name">Media Message</h3>
          <p class="prod-node-desc">Dispatches images, product PDFs, demonstration videos, or audio voice notes.</p>
        </div>
        <!-- 6 -->
        <div class="prod-node-item" data-category="MESSAGING">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#e0f2fe;color:#0284c7">MESSAGING</span>
          </div>
          <h3 class="prod-node-name">WhatsApp Flow Form</h3>
          <p class="prod-node-desc">Opens an in-chat interactive multi-step data collection form directly inside WhatsApp.</p>
        </div>
        <!-- 7 -->
        <div class="prod-node-item" data-category="UTILITIES">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#fef3c7;color:#d97706">UTILITIES</span>
          </div>
          <h3 class="prod-node-name">Wait for Reply</h3>
          <p class="prod-node-desc">Pauses execution and waits for customer response text before proceeding along the branch.</p>
        </div>
        <!-- 8 -->
        <div class="prod-node-item" data-category="UTILITIES">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#fef3c7;color:#d97706">UTILITIES</span>
          </div>
          <h3 class="prod-node-name">Time Delay</h3>
          <p class="prod-node-desc">Introduces realistic human-like typing delays (e.g. 3s, 5s) before triggering following replies.</p>
        </div>
        <!-- 9 -->
        <div class="prod-node-item" data-category="UTILITIES">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#fef3c7;color:#d97706">UTILITIES</span>
          </div>
          <h3 class="prod-node-name">Set Custom Field</h3>
          <p class="prod-node-desc">Stores customer answers into designated CRM custom field columns for segmentation.</p>
        </div>
        <!-- 10 -->
        <div class="prod-node-item" data-category="UTILITIES">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#fef3c7;color:#d97706">UTILITIES</span>
          </div>
          <h3 class="prod-node-name">Add / Remove Tag</h3>
          <p class="prod-node-desc">Labels subscriber profiles dynamically to update interest levels or lifecycle status.</p>
        </div>
        <!-- 11 -->
        <div class="prod-node-item" data-category="LOGIC">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#dcfce7;color:#16a34a">LOGIC</span>
          </div>
          <h3 class="prod-node-name">Conditional Split (If/Else)</h3>
          <p class="prod-node-desc">Branches conversation paths based on variables, tags, opening hours, or keywords.</p>
        </div>
        <!-- 12 -->
        <div class="prod-node-item" data-category="LOGIC">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#dcfce7;color:#16a34a">LOGIC</span>
          </div>
          <h3 class="prod-node-name">Business Hours Check</h3>
          <p class="prod-node-desc">Routes differently depending on whether your team is currently online or offline.</p>
        </div>
        <!-- 13 -->
        <div class="prod-node-item" data-category="LOGIC">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#dcfce7;color:#16a34a">LOGIC</span>
          </div>
          <h3 class="prod-node-name">Random A/B Test</h3>
          <p class="prod-node-desc">Splits audience traffic across different promotional copy variants to optimize conversions.</p>
        </div>
        <!-- 14 -->
        <div class="prod-node-item" data-category="INTEGRATION">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#fae8ff;color:#a855f7">INTEGRATION</span>
          </div>
          <h3 class="prod-node-name">Webhook / API Call</h3>
          <p class="prod-node-desc">Connects with Shopify, WooCommerce, CRM, or custom REST APIs to fetch real-time data.</p>
        </div>
        <!-- 15 -->
        <div class="prod-node-item" data-category="INTEGRATION">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#fae8ff;color:#a855f7">INTEGRATION</span>
          </div>
          <h3 class="prod-node-name">Google Sheets Sync</h3>
          <p class="prod-node-desc">Appends new lead details or looks up customer records directly in Google Spreadsheets.</p>
        </div>
        <!-- 16 -->
        <div class="prod-node-item" data-category="INTEGRATION">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#fae8ff;color:#a855f7">INTEGRATION</span>
          </div>
          <h3 class="prod-node-name">Calendar Booking</h3>
          <p class="prod-node-desc">Queries availability and books appointments directly to Google Calendar or Outlook.</p>
        </div>
        <!-- 17 -->
        <div class="prod-node-item" data-category="INTERACTIONS">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#fee2e2;color:#ef4444">INTERACTIONS</span>
          </div>
          <h3 class="prod-node-name">Human Handover</h3>
          <p class="prod-node-desc">Transfers active chat immediately to human support agents in the Shared Team Inbox.</p>
        </div>
        <!-- 18 -->
        <div class="prod-node-item" data-category="INTERACTIONS">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#fee2e2;color:#ef4444">INTERACTIONS</span>
          </div>
          <h3 class="prod-node-name">Assign to Team/Agent</h3>
          <p class="prod-node-desc">Automatically assigns tickets to specific departments or on-duty specialists.</p>
        </div>
        <!-- 19 -->
        <div class="prod-node-item" data-category="INTERACTIONS">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#fee2e2;color:#ef4444">INTERACTIONS</span>
          </div>
          <h3 class="prod-node-name">AI Smart Assistant</h3>
          <p class="prod-node-desc">Delegates conversation to ChatGPT/Gemini trained on your knowledge base documentation.</p>
        </div>
        <!-- 20 -->
        <div class="prod-node-item" data-category="INTERACTIONS">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#fee2e2;color:#ef4444">INTERACTIONS</span>
          </div>
          <h3 class="prod-node-name">Trigger Campaign Broadcast</h3>
          <p class="prod-node-desc">Enrolls contact into automated multi-day drip messaging sequences.</p>
        </div>
        <!-- 21 -->
        <div class="prod-node-item" data-category="INTERACTIONS">
          <div class="prod-node-header">
            <span class="prod-node-tag" style="background:#fee2e2;color:#ef4444">INTERACTIONS</span>
          </div>
          <h3 class="prod-node-name">Close Conversation</h3>
          <p class="prod-node-desc">Marks ticket as resolved and triggers automated CSAT rating survey.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Use Cases Showcase -->
  <section class="prod-section" id="use-cases">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">Use Cases</span>
        <h2 class="prod-section-title">Proven Chatbot Flow Recipes</h2>
        <p class="prod-section-desc">
          Explore how standard node categories compile into production-ready visual automation blueprints.
        </p>
      </div>

      <div class="prod-showcase-box">
        <div class="prod-showcase-grid">
          <div class="prod-tabs-list" id="recipe-tabs">
            <button type="button" class="prod-tab-item active" data-img="<?php echo $bp; ?>assets/images/products/chatbot/recipe-lead-gen.png">
              <div class="prod-tab-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              </div>
              <div>
                <div class="prod-tab-text-title">Lead Qualification & Booking</div>
                <div class="prod-tab-text-desc">Capture lead details, check meeting slots via API, and book calendar events automatically.</div>
              </div>
            </button>
            <button type="button" class="prod-tab-item" data-img="<?php echo $bp; ?>assets/images/products/chatbot/recipe-order-track.png">
              <div class="prod-tab-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
              </div>
              <div>
                <div class="prod-tab-text-title">Order Status Track Lookup</div>
                <div class="prod-tab-text-desc">Query order ID against Google Sheets or Shopify and dispatch real-time shipping status.</div>
              </div>
            </button>
            <button type="button" class="prod-tab-item" data-img="<?php echo $bp; ?>assets/images/products/chatbot/recipe-support-triage.png">
              <div class="prod-tab-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
              </div>
              <div>
                <div class="prod-tab-text-title">Support Triage & Escalation</div>
                <div class="prod-tab-text-desc">Classify issues with interactive category lists and hand off complex queries to human agents.</div>
              </div>
            </button>
          </div>
          <div class="prod-tab-preview-pane">
            <img id="recipe-preview-img" src="<?php echo $bp; ?>assets/images/products/chatbot/recipe-lead-gen.png" alt="Automation Flow Recipe Preview" class="prod-preview-img">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs Section -->
  <section class="prod-section prod-section-alt" id="faqs">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">FAQs</span>
        <h2 class="prod-section-title">Got Questions about Chatbots & Flows?</h2>
        <p class="prod-section-desc">
          Everything you need to know about building, testing, and scaling WhatsApp automations.
        </p>
      </div>
      <div class="prod-faq-container">
        <div class="prod-faq-list">
          <div class="prod-faq-item active">
            <button type="button" class="prod-faq-question">
              Do I need coding skills to build a WhatsApp chatbot?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              Absolutely not. Our Visual Editor is designed specifically for business users. You drag node blocks, link them using cursor lines, and configure triggers or responses in plain text.
            </div>
          </div>
          <div class="prod-faq-item">
            <button type="button" class="prod-faq-question">
              How do API integrations or webhooks work?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              The Webhook block triggers dynamic API calls mid-conversation. For example, when a user enters an order ID, the chatbot can make a GET request to your Shopify backend, pull the status, and reply to the user automatically.
            </div>
          </div>
          <div class="prod-faq-item">
            <button type="button" class="prod-faq-question">
              What happens when a customer needs human assistance?
              <svg class="prod-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="prod-faq-answer">
              Our chatbot handover block routes the customer context to the Shared Team Inbox immediately. The automation stops running on that active thread, letting agents converse natively.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA Box -->
  <section class="prod-section">
    <div class="prod-container">
      <div class="prod-cta-box">
        <div class="prod-cta-glow"></div>
        <h2 class="prod-cta-title">Build your first WhatsApp bot in 5 minutes</h2>
        <p class="prod-cta-subtitle">
          Automate customer questions, qualify leads, and scale your sales 24/7 with zero coding required.
        </p>
        <div class="prod-cta-actions">
          <a href="<?php echo $bp; ?>auth/register" class="prod-cta-btn-white">
            Start Building Free
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
          <a href="<?php echo $bp; ?>#contact-section" class="prod-cta-btn-trans">
            Book a Demo
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Category Filter for Flow Nodes
  var filterBtns = document.querySelectorAll('#node-filters .prod-filter-btn');
  var nodeItems = document.querySelectorAll('#nodes-grid .prod-node-item');
  filterBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      filterBtns.forEach(function(b) { b.classList.remove('active'); });
      btn.classList.add('active');
      var cat = btn.getAttribute('data-filter');
      nodeItems.forEach(function(item) {
        if (cat === 'all' || item.getAttribute('data-category') === cat) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });

  // Recipe Tabs
  var recipeTabs = document.querySelectorAll('#recipe-tabs .prod-tab-item');
  var recipeImg = document.getElementById('recipe-preview-img');
  recipeTabs.forEach(function(tab) {
    tab.addEventListener('click', function() {
      recipeTabs.forEach(function(t) { t.classList.remove('active'); });
      tab.classList.add('active');
      var newSrc = tab.getAttribute('data-img');
      if (newSrc && recipeImg) {
        recipeImg.style.opacity = '0.3';
        recipeImg.style.transform = 'scale(0.98)';
        setTimeout(function() {
          recipeImg.src = newSrc;
          recipeImg.style.opacity = '1';
          recipeImg.style.transform = 'scale(1)';
        }, 150);
      }
    });
  });

  // FAQ Toggles
  var faqItems = document.querySelectorAll('.prod-faq-item');
  faqItems.forEach(function(item) {
    var btn = item.querySelector('.prod-faq-question');
    btn.addEventListener('click', function() {
      var isActive = item.classList.contains('active');
      faqItems.forEach(function(fi) { fi.classList.remove('active'); });
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });
});
</script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
