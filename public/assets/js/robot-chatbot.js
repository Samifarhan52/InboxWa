/**
 * InboxWa AI Robot Chatbot System (robot-chatbot.js)
 * Interactive, intelligent virtual assistant trained on all InboxWa website content.
 */

(function () {
  'use strict';

  // Global Config fallback
  var CONFIG = {
    whatsappNumber: (window.InboxWaData && window.InboxWaData.whatsapp) || '918050854445',
    phoneNumber: '+91 80508 54445',
    salesEmail: 'mail@inboxwa.com',
    supportEmail: 'support@inboxwa.com',
    siteName: 'InboxWa'
  };

  // Comprehensive Website Knowledge Base
  var KNOWLEDGE_BASE = [
    {
      id: 'pricing',
      intent: 'pricing_plans',
      keywords: ['price', 'pricing', 'plan', 'cost', 'charge', 'rate', 'package', 'subscription', 'fee', 'how much', 'cheap', 'expensive', 'discount', 'yearly', 'monthly', 'dollar', 'rupee', 'currency', 'inr'],
      title: 'InboxWa Pricing & Subscription Plans',
      answer: `<strong>💰 InboxWa Transparent Pricing Plans:</strong>
<ul>
  <li><strong>WhatsApp Bulk (₹1,999/mo):</strong> Unlimited Bulk Broadcasts, Official WhatsApp API, Basic CRM, 10 Tags & Contact Management.</li>
  <li><strong>Automation Plan (₹2,999/mo) <span style="color:#8B5CF6;font-weight:700;">★ Popular</span>:</strong> Multi-Agent Shared Team Inbox, Visual No-Code Flow Builder, AI Auto-Replies, Shopify/WooCommerce/Sheets sync, 50 Tags.</li>
  <li><strong>Biz Pro Omnichannel (₹4,999/mo):</strong> WhatsApp + Instagram DM + Telegram + Facebook Messenger all in one inbox, AI Voice Agent, Advanced CRM & Webhooks.</li>
</ul>
<p><em>✨ Get <strong>20% OFF</strong> on Yearly Billing. All plans include 1,000 Free Meta Service Conversations every month!</em></p>`,
      actions: [
        { label: 'View Pricing & Live Currency', url: '/pricing/', type: 'primary' },
        { label: 'Start 7-Day Free Trial', url: '/auth/register', type: 'secondary' },
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20InboxWa%2C%20I%20want%20to%20know%20more%20about%20your%20pricing%20plans.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'whatsapp_api',
      intent: 'whatsapp_api_overview',
      keywords: ['whatsapp api', 'official api', 'business api', 'cloud api', 'green tick', 'meta verified', 'official whatsapp', 'meta partner', 'zero ban', 'anti ban', 'ban risk'],
      title: 'Official WhatsApp Business API Platform',
      answer: `<strong>🚀 Official Meta WhatsApp Business API:</strong>
<p>InboxWa provides 100% official WhatsApp Business API built directly on Meta's Cloud infrastructure:</p>
<ul>
  <li><strong>Zero Ban Risk:</strong> Complete compliance with Meta policies—never get your business number banned.</li>
  <li><strong>Green Tick Verification:</strong> Full guided assistance to get the official verified green badge on WhatsApp.</li>
  <li><strong>High Sending Limits:</strong> Scale from Tier-1 (1,000/day) to Tier-4 (Unlimited messages/day).</li>
  <li><strong>Interactive Messaging:</strong> Buttons, Quick Replies, List Pickers, Carousel Cards, and Product Catalogs.</li>
</ul>`,
      actions: [
        { label: 'Explore WhatsApp API', url: '/channel/whatsapp/', type: 'primary' },
        { label: 'Book a 1-on-1 Demo', action: 'openDemo', type: 'secondary' },
        { label: 'WhatsApp Support', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%2C%20I%20need%20help%20setting%20up%20Official%20WhatsApp%20API.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'bulk_broadcast',
      intent: 'broadcast_marketing',
      keywords: ['bulk', 'broadcast', 'campaign', 'mass message', 'promotional', 'blast', 'newsletter', 'bulk message', 'send to all', 'csv upload', 'contacts broadcast'],
      title: 'Bulk WhatsApp Broadcast Campaigns',
      answer: `<strong>📢 Unlimited Bulk Broadcasts with 98% Open Rate:</strong>
<p>Reach thousands of targeted customers in seconds right on WhatsApp:</p>
<ul>
  <li><strong>Personalized Dynamic Fields:</strong> Auto-insert Name, Order ID, City, or custom attributes into messages.</li>
  <li><strong>Rich Media Templates:</strong> Send images, PDF brochures, video teasers, and clickable CTA buttons.</li>
  <li><strong>Live Delivery Analytics:</strong> Track real-time Sent, Delivered, Read, and Link Clicks.</li>
  <li><strong>CSV Import & Segment Tags:</strong> Easily upload your customer lists and segment them with smart tags.</li>
</ul>`,
      actions: [
        { label: 'Bulk Broadcast Features', url: '/products/broadcast/', type: 'primary' },
        { label: 'Start Free Trial', url: '/auth/register', type: 'secondary' }
      ]
    },
    {
      id: 'shared_inbox',
      intent: 'shared_team_inbox',
      keywords: ['shared inbox', 'team inbox', 'multiple agents', 'support team', 'assign chat', 'agent collision', 'multi user', 'multiple login', 'internal notes', 'canned response'],
      title: 'Shared Team Inbox for Multi-Agent Support',
      answer: `<strong>👥 Multi-Agent Shared Team Inbox:</strong>
<p>Empower your support and sales team on a single WhatsApp number:</p>
<ul>
  <li><strong>Collaborate Together:</strong> Multiple agents can chat with customers simultaneously without confusion.</li>
  <li><strong>Smart Auto-Assignment:</strong> Route incoming queries round-robin or based on agent departments (Sales, Billing, Tech).</li>
  <li><strong>Collision Detection:</strong> See who is typing in real time to prevent duplicate responses.</li>
  <li><strong>Internal Private Notes:</strong> Leave team notes inside chat threads invisible to the customer.</li>
</ul>`,
      actions: [
        { label: 'Shared Inbox Details', url: '/products/shared-inbox/', type: 'primary' },
        { label: 'Book Live Demo', action: 'openDemo', type: 'secondary' }
      ]
    },
    {
      id: 'chatbot_flow_builder',
      intent: 'ai_chatbot_builder',
      keywords: ['chatbot', 'bot', 'flow builder', 'auto reply', 'automation', 'drag and drop', 'no code', 'automated chat', 'ai bot', 'faq bot', 'lead qualification'],
      title: 'No-Code AI Chatbot & Visual Flow Builder',
      answer: `<strong>🤖 Visual Flow Builder & 24/7 AI Chatbots:</strong>
<p>Build powerful interactive automation without writing a single line of code:</p>
<ul>
  <li><strong>Drag-and-Drop Canvas:</strong> Design intuitive decision trees, button menus, and branching workflows.</li>
  <li><strong>Instant 24/7 Auto-Responses:</strong> Handle customer FAQs, greetings, out-of-office, and order inquiries instantly.</li>
  <li><strong>Lead Qualification & Data Capture:</strong> Automatically collect Name, Email, Requirement, and save to CRM.</li>
  <li><strong>Human Handoff:</strong> Smoothly transfer the conversation to a human agent when needed.</li>
</ul>`,
      actions: [
        { label: 'AI Chatbot Builder', url: '/products/chatbot/', type: 'primary' },
        { label: 'Flow Builder Feature', url: '/products/flow-builder/', type: 'secondary' }
      ]
    },
    {
      id: 'ai_voice',
      intent: 'ai_voice_calling',
      keywords: ['voice', 'ai voice', 'call bot', 'calling', 'automated call', 'phone call', 'telephony', 'speech', 'inbound call', 'outbound call', 'hindi voice'],
      title: 'AI Voice Calling & Virtual Agents',
      answer: `<strong>📞 AI Voice Calling (Agentic Voice Telephony):</strong>
<p>Transform customer communication with human-like AI voice agents:</p>
<ul>
  <li><strong>Natural Multilingual Speech:</strong> Converses seamlessly in Hindi, English, and regional Indian languages.</li>
  <li><strong>Automated Outbound Calling:</strong> Payment reminders, COD order confirmation, event reminders, and lead qualification.</li>
  <li><strong>Inbound Virtual Receptionist:</strong> Answers incoming calls 24/7 and routes calls to human agents.</li>
</ul>`,
      actions: [
        { label: 'Explore AI Voice Calling', url: '/products/ai-voice/', type: 'primary' },
        { label: 'Request Callback', action: 'openCallback', type: 'secondary' }
      ]
    },
    {
      id: 'channels_omni',
      intent: 'omnichannel_channels',
      keywords: ['omnichannel', 'channels', 'instagram', 'telegram', 'facebook', 'messenger', 'dm automation', 'comment to dm', 'all channels', 'multi channel'],
      title: 'Omnichannel Automation (WhatsApp, IG, Telegram, FB)',
      answer: `<strong>🌐 Unified Omnichannel Communication:</strong>
<p>Manage all your customer conversations across major channels in one single screen:</p>
<ul>
  <li><strong>WhatsApp Business API:</strong> Official broadcasts, CRM, and chatbots (<a href="/channel/whatsapp/" style="color:#059669;font-weight:600;">Explore</a>).</li>
  <li><strong>Instagram DM Automation:</strong> Auto-reply to Story mentions, DMs, and Comments-to-DM (<a href="/channel/instagram/" style="color:#e1306c;font-weight:600;">Explore</a>).</li>
  <li><strong>Telegram Bot Platform:</strong> Custom bots, group broadcasts, and support (<a href="/channel/telegram/" style="color:#0284c7;font-weight:600;">Explore</a>).</li>
  <li><strong>Facebook Messenger:</strong> Integrated lead capture and instant auto-replies (<a href="/channel/facebook/" style="color:#2563eb;font-weight:600;">Explore</a>).</li>
</ul>`,
      actions: [
        { label: 'Instagram Automation', url: '/channel/instagram/', type: 'primary' },
        { label: 'Telegram Bot Platform', url: '/channel/telegram/', type: 'secondary' },
        { label: 'Facebook Messenger', url: '/channel/facebook/', type: 'secondary' }
      ]
    },
    {
      id: 'integrations_shopify_crm',
      intent: 'integrations_ecommerce',
      keywords: ['shopify', 'woocommerce', 'ecommerce', 'integration', 'connect', 'crm', 'zoho', 'hubspot', 'sheets', 'google sheet', 'google forms', 'calendar', 'webhook', 'api'],
      title: 'E-commerce, CRM & Webhook Integrations',
      answer: `<strong>🔌 Powerful 1-Click Integrations:</strong>
<p>Seamlessly connect InboxWa with the business tools you already use:</p>
<ul>
  <li><strong>Shopify & WooCommerce:</strong> Abandoned cart recovery, automated COD confirmation, shipping alerts.</li>
  <li><strong>Google Sheets & Forms:</strong> Automatically trigger WhatsApp alerts when a new Google Form or Sheet row is added.</li>
  <li><strong>CRMs:</strong> Native sync with Zoho, HubSpot, Salesforce, LeadSquared, and custom CRMs.</li>
  <li><strong>Webhooks & REST APIs:</strong> Connect any custom website, ERP, or internal database with standard webhooks.</li>
</ul>`,
      actions: [
        { label: 'Shopify Integration', url: '/solutions/shopify/', type: 'primary' },
        { label: 'Google Sheets & Forms', url: '/solutions/google-forms-sheets/', type: 'secondary' },
        { label: 'Developer API & Webhooks', url: '/integrations/api-webhooks/', type: 'secondary' }
      ]
    },
    {
      id: 'business_leads',
      intent: 'b2b_business_leads',
      keywords: ['leads', 'business leads', 'pan india', 'database', 'panindiadata', 'data marketplace', 'b2b leads', 'customer data', 'buyers', 'verified data', 'lead generation'],
      title: 'Pan-India Business Leads Database (12 Categories)',
      answer: `<strong>📈 Pan-India Verified Business Leads:</strong>
<p>Accelerate your sales pipeline with targeted, verified customer & business contact lists:</p>
<ul>
  <li><strong>12 High-Converting Categories:</strong> Real Estate, Automobiles, E-Commerce, Healthcare, BFSI, Education, IT/Software, Manufacturing, Food & Beverage, Travel, Advertising, and B2B Suppliers.</li>
  <li><strong>Verified Contacts:</strong> Phone numbers, WhatsApp active status, city, company name, and key decision makers.</li>
  <li><strong>Direct Integration:</strong> Easily broadcast your offers directly to verified leads via InboxWa.</li>
</ul>`,
      actions: [
        { label: 'Browse 12 Leads Categories', url: '/business-leads/', type: 'primary' },
        { label: 'Custom Data Request', url: '/solutions/data-marketplace/#custom-request', type: 'secondary' }
      ]
    },
    {
      id: 'ctwa_ads',
      intent: 'click_to_whatsapp_ads',
      keywords: ['ctwa', 'facebook ads', 'fb ads', 'instagram ads', 'click to whatsapp', 'ads', 'paid ads', 'ad campaigns'],
      title: 'Click-to-WhatsApp (CTWA) Ads Automation',
      answer: `<strong>🎯 Click-to-WhatsApp (CTWA) Ads:</strong>
<p>Get 3x to 5x higher conversions from Meta Advertising:</p>
<ul>
  <li>Direct ad clicks on Facebook and Instagram straight into WhatsApp.</li>
  <li>Instant bot engagement the second a lead sends the pre-filled prompt.</li>
  <li>Zero drop-off from slow website landing pages.</li>
  <li>Automated lead qualification and CRM capture in real time.</li>
</ul>`,
      actions: [
        { label: 'Click-to-WhatsApp Ads', url: '/facebook-ads/', type: 'primary' },
        { label: 'Talk to Ad Specialist', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%2C%20I%20want%20to%20run%20Click-to-WhatsApp%20Ads.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'free_trial_signup',
      intent: 'free_trial_onboarding',
      keywords: ['free trial', 'trial', 'sign up', 'register', 'create account', 'start', 'get started', 'demo', 'login', 'setup time', 'how to start'],
      title: 'Get Started with 7-Day Free Trial',
      answer: `<strong>✨ Start Free Today with InboxWa:</strong>
<p>Get full access to the official WhatsApp Business API platform:</p>
<ul>
  <li><strong>7-Day Free Trial:</strong> Explore all features with zero risk.</li>
  <li><strong>No Credit Card Required:</strong> Instant activation in less than 3 minutes.</li>
  <li><strong>Dedicated Onboarding Specialist:</strong> We help you connect your number and get Meta verified.</li>
</ul>`,
      actions: [
        { label: 'Start 7-Day Free Trial', url: '/auth/register', type: 'primary' },
        { label: 'Book Live Onboarding Demo', action: 'openDemo', type: 'secondary' }
      ]
    },
    {
      id: 'human_contact_sales',
      intent: 'talk_to_human',
      keywords: ['talk to human', 'human', 'agent', 'sales', 'speak', 'call', 'support', 'contact', 'phone number', 'email', 'office', 'bangalore', 'address', 'real person', 'customer care'],
      title: 'Talk to Our Team & Human Support',
      answer: `<strong>👨‍💼 Connect with Our Human Team:</strong>
<p>Our experts in Bangalore are available to guide you:</p>
<ul>
  <li><strong>WhatsApp:</strong> +91 80508 54445 (Instant Replies)</li>
  <li><strong>Phone:</strong> <a href="tel:+918050854445" style="color:#0369a1;font-weight:600;">+91 80508 54445</a></li>
  <li><strong>Sales Email:</strong> <a href="mailto:mail@inboxwa.com">mail@inboxwa.com</a></li>
  <li><strong>Support Email:</strong> <a href="mailto:support@inboxwa.com">support@inboxwa.com</a></li>
  <li><strong>Office:</strong> Bangalore, Karnataka, India</li>
</ul>`,
      actions: [
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20InboxWa%2C%20I%20would%20like%20to%20talk%20to%20a%20human%20sales%20representative.', type: 'wa', target: '_blank' },
        { label: 'Call Us Now', url: 'tel:' + CONFIG.whatsappNumber, type: 'secondary' },
        { label: 'Request a Callback', action: 'openCallback', type: 'secondary' }
      ]
    },
    {
      id: 'green_tick',
      intent: 'meta_green_tick',
      keywords: ['green tick', 'tick', 'verification', 'badge', 'verified badge', 'green badge', 'official badge'],
      title: 'Meta Official Green Tick Verification',
      answer: `<strong>✅ WhatsApp Official Green Tick Verification:</strong>
<p>A Green Tick badge next to your business name builds immediate trust and credibility:</p>
<ul>
  <li>Shows your verified brand name instead of a phone number even if users haven't saved your contact.</li>
  <li><strong>Eligibility:</strong> Meta Business Verification, working website, and brand notability.</li>
  <li><strong>Free Assistance:</strong> InboxWa handles the official application directly with Meta on your behalf at zero extra service fee!</li>
</ul>`,
      actions: [
        { label: 'Green Tick Details', url: '/channel/whatsapp/', type: 'primary' },
        { label: 'Apply via WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%2C%20I%20want%20to%20apply%20for%20WhatsApp%20Green%20Tick%20verification.', type: 'wa', target: '_blank' }
      ]
    }
  ];

  // Default Greetings & Fallbacks
  var GREETINGS = ['hi', 'hello', 'hey', 'start', 'good morning', 'good afternoon', 'good evening', 'namaste', 'halo', 'hola'];
  var THANKS = ['thanks', 'thank you', 'ok', 'okay', 'great', 'awesome', 'nice', 'cool', 'perfect', 'got it'];

  // Smart Intent Matcher
  function matchIntent(userQuery) {
    var clean = (userQuery || '').toLowerCase().trim();
    if (!clean) return null;

    // Check Greetings
    for (var i = 0; i < GREETINGS.length; i++) {
      if (clean === GREETINGS[i] || clean.indexOf(GREETINGS[i] + ' ') === 0) {
        return {
          type: 'greeting',
          title: 'Welcome to InboxWa!',
          answer: `👋 Hello! I'm the <strong>InboxWa Robot AI Assistant</strong>.<br><br>I can instantly answer any question about our <strong>Official WhatsApp Business API, Bulk Broadcasts, AI Chatbots, Shared Team Inbox, Voice Calling, Pricing, and Business Leads</strong>.<br><br>What would you like to know today?`,
          suggestions: [
            'What are your pricing plans?',
            'How does WhatsApp API work?',
            'Can I send bulk broadcasts?',
            'Do you connect with Shopify?'
          ]
        };
      }
    }

    // Check Thanks / Goodbye
    for (var j = 0; j < THANKS.length; j++) {
      if (clean === THANKS[j] || clean.indexOf(THANKS[j] + ' ') === 0) {
        return {
          type: 'thanks',
          title: 'You are welcome!',
          answer: `😊 You're very welcome! Feel free to ask anything else, or click below to start your free trial or chat directly with our team on WhatsApp.`,
          actions: [
            { label: 'Start Free Trial', url: '/auth/register', type: 'primary' },
            { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber, type: 'wa', target: '_blank' }
          ]
        };
      }
    }

    // Scoring Match across Knowledge Base
    var bestMatch = null;
    var highestScore = 0;

    KNOWLEDGE_BASE.forEach(function (entry) {
      var score = 0;
      entry.keywords.forEach(function (kw) {
        if (clean.indexOf(kw) !== -1) {
          score += kw.length * 2; // Exact word match
        }
      });
      if (score > highestScore) {
        highestScore = score;
        bestMatch = entry;
      }
    });

    // If score is sufficient (match found)
    if (highestScore >= 4 && bestMatch) {
      return bestMatch;
    }

    // Default Fallback
    return {
      type: 'fallback',
      title: 'How can I assist you?',
      answer: `I want to make sure you get the exact information for: <em>"${escapeHtml(userQuery)}"</em>.<br><br>Here are the most popular topics I can help you with:`,
      suggestions: [
        'What are the pricing plans?',
        'How does WhatsApp API work?',
        'Can I send bulk broadcasts without ban?',
        'Do you integrate with Shopify or WooCommerce?',
        'Tell me about AI Voice Calling',
        'How to get Green Tick verification?',
        'I want to speak with a human agent'
      ],
      actions: [
        { label: 'Chat with Human on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=' + encodeURIComponent('Hi InboxWa, I have a question: ' + userQuery), type: 'wa', target: '_blank' },
        { label: 'Book Live Demo', action: 'openDemo', type: 'secondary' }
      ]
    };
  }

  function escapeHtml(str) {
    if (!str) return '';
    return str.replace(/[&<>"']/g, function (m) {
      return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[m];
    });
  }

  function getCurrentTime() {
    var d = new Date();
    var h = d.getHours();
    var m = d.getMinutes();
    var ampm = h >= 12 ? 'PM' : 'AM';
    h = h % 12;
    h = h ? h : 12;
    m = m < 10 ? '0' + m : m;
    return h + ':' + m + ' ' + ampm;
  }

  // Robot Chatbot Controller
  function initRobotChatbot() {
    var widget = document.getElementById('inboxwa-robot-widget');
    if (!widget) return;

    var triggerBtn = widget.querySelector('.inboxwa-robot-trigger');
    var badge = widget.querySelector('.inboxwa-robot-badge');
    var badgeClose = widget.querySelector('.inboxwa-robot-badge-close');
    var chatbox = widget.querySelector('.inboxwa-chatbox');
    var closeBtn = widget.querySelector('.header-close-btn');
    var resetBtn = widget.querySelector('.header-reset-btn');
    var chatBody = widget.querySelector('.inboxwa-chat-body');
    var chatForm = widget.querySelector('.inboxwa-chat-form');
    var chatInput = widget.querySelector('.inboxwa-chat-input');
    var quickChannels = widget.querySelectorAll('.quick-channel-item');

    // Toggle Open / Close
    function toggleWidget(force) {
      var shouldOpen = typeof force === 'boolean' ? force : (!widget.classList.contains('is-open') && !widget.classList.contains('open'));
      if (shouldOpen) {
        widget.classList.add('is-open');
        widget.classList.add('open');
        if (badge) badge.style.display = 'none';
        chatInput.focus();
        scrollToBottom();
      } else {
        widget.classList.remove('is-open');
        widget.classList.remove('open');
      }
    }

    if (triggerBtn) {
      triggerBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        toggleWidget();
      });
    }

    if (badge) {
      badge.addEventListener('click', function (e) {
        e.stopPropagation();
        toggleWidget(true);
      });
    }

    if (badgeClose) {
      badgeClose.addEventListener('click', function (e) {
        e.stopPropagation();
        badge.style.display = 'none';
      });
    }

    if (closeBtn) {
      closeBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        toggleWidget(false);
      });
    }

    // Outside click closes widget
    document.addEventListener('click', function (e) {
      if (widget.classList.contains('is-open') && !widget.contains(e.target)) {
        toggleWidget(false);
      }
    });

    // ESC key closes widget
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && widget.classList.contains('is-open')) {
        toggleWidget(false);
      }
    });

    // Reset conversation
    if (resetBtn) {
      resetBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        sessionStorage.removeItem('inboxwa_bot_chat');
        chatBody.innerHTML = '';
        renderWelcomeMessage();
      });
    }

    // Scroll to bottom
    function scrollToBottom() {
      setTimeout(function () {
        chatBody.scrollTop = chatBody.scrollHeight;
      }, 50);
    }

    // Add user message bubble
    function addUserMessage(text) {
      var row = document.createElement('div');
      row.className = 'chat-bubble-row user-row';
      row.innerHTML = `
        <div class="chat-bubble user-bubble">
          <p>${escapeHtml(text)}</p>
          <span class="chat-time">${getCurrentTime()}</span>
        </div>
      `;
      chatBody.appendChild(row);
      scrollToBottom();
    }

    // Add bot typing indicator
    function showTypingIndicator() {
      var typing = document.createElement('div');
      typing.id = 'bot-typing-box';
      typing.className = 'chat-bubble-row bot-row';
      typing.innerHTML = `
        <div class="bot-avatar-small">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><circle cx="12" cy="12" r="3"/><path d="M12 2a2 2 0 012 2v2a8 8 0 017.9 7H22a1 1 0 010 2h-.1A8 8 0 0114 21.9V23a1 1 0 01-2 0v-1.1A8 8 0 014.1 15H3a1 1 0 010-2h1.1A8 8 0 0112 6V4a2 2 0 01-2-2z"/></svg>
        </div>
        <div class="bot-typing-indicator">
          <div class="bot-typing-dot"></div>
          <div class="bot-typing-dot"></div>
          <div class="bot-typing-dot"></div>
        </div>
      `;
      chatBody.appendChild(typing);
      scrollToBottom();
      return typing;
    }

    function removeTypingIndicator() {
      var el = document.getElementById('bot-typing-box');
      if (el) el.remove();
    }

    // Add bot message bubble
    function addBotResponse(data) {
      removeTypingIndicator();

      var row = document.createElement('div');
      row.className = 'chat-bubble-row bot-row';

      var actionsHtml = '';
      if (data.actions && data.actions.length > 0) {
        actionsHtml = '<div class="bot-actions-group">';
        data.actions.forEach(function (act) {
          var cls = act.type === 'primary' ? 'bot-btn-primary' : (act.type === 'wa' ? 'bot-btn-wa' : 'bot-btn-secondary');
          if (act.action === 'openDemo') {
            actionsHtml += `<button type="button" class="bot-btn ${cls} bot-action-demo">📅 ${escapeHtml(act.label)}</button>`;
          } else if (act.action === 'openCallback') {
            actionsHtml += `<button type="button" class="bot-btn ${cls} bot-action-callback">📞 ${escapeHtml(act.label)}</button>`;
          } else {
            var target = act.target ? `target="${act.target}" rel="noopener"` : '';
            actionsHtml += `<a href="${act.url}" ${target} class="bot-btn ${cls}">${escapeHtml(act.label)} &rarr;</a>`;
          }
        });
        actionsHtml += '</div>';
      }

      var suggestionsHtml = '';
      if (data.suggestions && data.suggestions.length > 0) {
        suggestionsHtml = '<div class="bot-suggestions-wrap"><div class="bot-suggestions-title">Suggested questions:</div>';
        data.suggestions.forEach(function (sug) {
          suggestionsHtml += `<button type="button" class="bot-chip-btn" data-query="${escapeHtml(sug)}">💬 ${escapeHtml(sug)}</button>`;
        });
        suggestionsHtml += '</div>';
      }

      row.innerHTML = `
        <div class="bot-avatar-small">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12 2a2 2 0 012 2v2a8 8 0 017.9 7H22a1 1 0 010 2h-.1A8 8 0 0114 21.9V23a1 1 0 01-2 0v-1.1A8 8 0 014.1 15H3a1 1 0 010-2h1.1A8 8 0 0112 6V4a2 2 0 01-2-2z"/><circle cx="9" cy="13" r="1.5" fill="#06B6D4"/><circle cx="15" cy="13" r="1.5" fill="#06B6D4"/></svg>
        </div>
        <div class="chat-bubble bot-bubble">
          <div>${data.answer}</div>
          ${actionsHtml}
          ${suggestionsHtml}
          <span class="chat-time">${getCurrentTime()}</span>
        </div>
      `;

      chatBody.appendChild(row);
      scrollToBottom();
      saveChatState();
    }

    // Handle User Question
    function handleUserQuestion(question) {
      if (!question || !question.trim()) return;
      var q = question.trim();
      addUserMessage(q);
      chatInput.value = '';

      showTypingIndicator();
      setTimeout(function () {
        var reply = matchIntent(q);
        addBotResponse(reply);
      }, 550);
    }

    // Form submission
    if (chatForm) {
      chatForm.addEventListener('submit', function (e) {
        e.preventDefault();
        handleUserQuestion(chatInput.value);
      });
    }

    // Click Delegation inside Chat Body (Chips, Demo popup, Callback popup)
    chatBody.addEventListener('click', function (e) {
      var chip = e.target.closest('.bot-chip-btn');
      if (chip) {
        var q = chip.getAttribute('data-query');
        if (q) handleUserQuestion(q);
        return;
      }

      var demoBtn = e.target.closest('.bot-action-demo');
      if (demoBtn) {
        if (typeof window.openDemoModal === 'function') {
          window.openDemoModal();
        } else {
          var targetDemo = document.querySelector('.btn-demo-open');
          if (targetDemo) targetDemo.click();
        }
        return;
      }

      var callbackBtn = e.target.closest('.bot-action-callback');
      if (callbackBtn) {
        if (typeof window.openCallbackModal === 'function') {
          window.openCallbackModal();
        } else {
          var targetCb = document.querySelector('.btn-callback-open');
          if (targetCb) targetCb.click();
        }
        return;
      }
    });

    // Quick Channels Actions
    quickChannels.forEach(function (btn) {
      btn.addEventListener('click', function () {
        if (btn.classList.contains('qc-demo')) {
          var d = document.querySelector('.btn-demo-open');
          if (d) d.click();
        } else if (btn.classList.contains('qc-callback')) {
          var c = document.querySelector('.btn-callback-open');
          if (c) c.click();
        }
      });
    });

    // Welcome Message Renderer
    function renderWelcomeMessage() {
      addBotResponse({
        answer: `👋 <strong>Hi! I'm InboxWa Robot AI</strong>, your 24/7 assistant.<br><br>Ask me anything about <strong>WhatsApp API, Bulk Broadcasts, AI Chatbot, Voice Calling, Pricing, or Business Leads</strong>!`,
        suggestions: [
          'What are your pricing plans?',
          'How does WhatsApp API work?',
          'Can I send bulk broadcasts without ban?',
          'Do you connect with Shopify or WooCommerce?',
          'How to get Green Tick verification?'
        ],
        actions: [
          { label: 'View Pricing & Plans', url: '/pricing/', type: 'primary' },
          { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20InboxWa%2C%20I%20am%20exploring%20your%20services.', type: 'wa', target: '_blank' }
        ]
      });
    }

    // Session Storage Persistence
    function saveChatState() {
      try {
        sessionStorage.setItem('inboxwa_bot_chat', chatBody.innerHTML);
      } catch (e) {}
    }

    function loadChatState() {
      try {
        var saved = sessionStorage.getItem('inboxwa_bot_chat');
        if (saved) {
          chatBody.innerHTML = saved;
          scrollToBottom();
        } else {
          renderWelcomeMessage();
        }
      } catch (e) {
        renderWelcomeMessage();
      }
    }

    // Initialize state
    loadChatState();
  }

  // DOM Ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initRobotChatbot);
  } else {
    initRobotChatbot();
  }
})();
