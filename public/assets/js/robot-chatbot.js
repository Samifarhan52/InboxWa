/**
 * HELLOBOTZ - Interactive AI Robot Character & Website Knowledge Assistant (robot-chatbot.js)
 * Features dynamic character emotion states (blinking, getting bored, excited on hover/click),
 * signature HelloBotz greeting, and instant Q&A grounded on InboxWa with related page buttons.
 */

(function () {
  'use strict';

  var CONFIG = {
    whatsappNumber: (window.InboxWaData && window.InboxWaData.whatsapp) || '918050854445',
    phoneNumber: '+91 80508 54445',
    salesEmail: 'mail@inboxwa.com',
    supportEmail: 'support@inboxwa.com',
    siteName: 'InboxWa'
  };

  // Comprehensive Website Knowledge Base Grounded on All InboxWa Pages
  var KNOWLEDGE_BASE = [
    {
      id: 'pricing',
      intent: 'pricing_plans',
      keywords: ['price', 'pricing', 'plan', 'cost', 'charge', 'rate', 'package', 'subscription', 'fee', 'how much', 'cheap', 'expensive', 'discount', 'yearly', 'monthly', 'dollar', 'rupee', 'currency', 'inr'],
      title: 'InboxWa Pricing & Plans',
      answer: `<strong>💰 InboxWa Transparent Subscription Plans:</strong>
<ul>
  <li><strong>WhatsApp Bulk (₹1,999/mo):</strong> Unlimited Bulk Broadcasts, Official WhatsApp API, Basic CRM, 10 Tags & Contact Management.</li>
  <li><strong>Automation Plan (₹2,999/mo) <span style="color:#8B5CF6;font-weight:700;">★ Most Popular</span>:</strong> Multi-Agent Shared Team Inbox, Visual No-Code Flow Builder, AI Auto-Replies, Shopify/WooCommerce/Sheets sync, 50 Tags.</li>
  <li><strong>Biz Pro Omnichannel (₹4,999/mo):</strong> WhatsApp + Instagram DM + Telegram + Facebook Messenger in one unified inbox, AI Voice Agent, Advanced CRM & Custom Webhooks.</li>
</ul>
<p><em>✨ Save <strong>20% OFF</strong> on Yearly Billing. All plans include 1,000 Free Meta Service Conversations every month!</em></p>`,
      actions: [
        { label: 'View Pricing & Live Currency', url: '/pricing/', type: 'primary' },
        { label: 'Start 7-Day Free Trial', url: '/auth/register', type: 'secondary' },
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20I%20want%20to%20know%20more%20about%20InboxWa%20pricing.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'whatsapp_api',
      intent: 'whatsapp_api_overview',
      keywords: ['whatsapp api', 'official api', 'business api', 'cloud api', 'green tick', 'meta verified', 'official whatsapp', 'meta partner', 'zero ban', 'anti ban', 'ban risk'],
      title: 'Official WhatsApp Business API Platform',
      answer: `<strong>🚀 Official Meta WhatsApp Business API:</strong>
<p>InboxWa is built directly on Meta's Official Cloud API infrastructure:</p>
<ul>
  <li><strong>Zero Ban Risk:</strong> 100% compliant with Meta policies—never get your number banned.</li>
  <li><strong>Green Tick Verification:</strong> Full assistance to get the official verified green badge on WhatsApp.</li>
  <li><strong>High Sending Limits:</strong> Scale from Tier-1 (1,000/day) to Tier-4 (Unlimited messages/day).</li>
  <li><strong>Interactive Messaging:</strong> Buttons, Quick Replies, List Menus, and Product Catalogs.</li>
</ul>`,
      actions: [
        { label: 'Explore WhatsApp API', url: '/channel/whatsapp/', type: 'primary' },
        { label: 'Book Live 1-on-1 Demo', action: 'openDemo', type: 'secondary' },
        { label: 'WhatsApp Support', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20I%20need%20help%20with%20Official%20WhatsApp%20API.', type: 'wa', target: '_blank' }
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
  <li><strong>Personalized Dynamic Tags:</strong> Automatically insert Customer Name, Order ID, City, or custom fields.</li>
  <li><strong>Rich Media Templates:</strong> Send images, PDF catalogs, videos, and clickable CTA buttons.</li>
  <li><strong>Real-time Analytics:</strong> Track Live Sent, Delivered, Read, and Link Clicks.</li>
  <li><strong>Easy CSV Upload:</strong> Import contact lists with one click and organize with smart tags.</li>
</ul>`,
      actions: [
        { label: 'Bulk Broadcast Details', url: '/products/broadcast/', type: 'primary' },
        { label: 'Start Free Trial', url: '/auth/register', type: 'secondary' }
      ]
    },
    {
      id: 'shared_inbox',
      intent: 'shared_team_inbox',
      keywords: ['shared inbox', 'team inbox', 'multiple agents', 'support team', 'assign chat', 'agent collision', 'multi user', 'multiple login', 'internal notes', 'canned response'],
      title: 'Shared Team Inbox for Multi-Agent Support',
      answer: `<strong>👥 Multi-Agent Shared Team Inbox:</strong>
<p>Manage all customer conversations collaboratively on a single WhatsApp number:</p>
<ul>
  <li><strong>Multiple Agents:</strong> Team members can handle chats simultaneously without logging each other out.</li>
  <li><strong>Smart Auto-Assignment:</strong> Route queries round-robin or by department (Sales, Billing, Support).</li>
  <li><strong>Collision Detection:</strong> See who is typing in real-time to avoid duplicate replies.</li>
  <li><strong>Internal Private Notes:</strong> Leave team notes inside chat threads invisible to customers.</li>
</ul>`,
      actions: [
        { label: 'Shared Inbox Feature', url: '/products/shared-inbox/', type: 'primary' },
        { label: 'Book Live Demo', action: 'openDemo', type: 'secondary' }
      ]
    },
    {
      id: 'chatbot_flow_builder',
      intent: 'ai_chatbot_builder',
      keywords: ['chatbot', 'bot', 'flow builder', 'auto reply', 'automation', 'drag and drop', 'no code', 'automated chat', 'ai bot', 'faq bot', 'lead qualification'],
      title: 'No-Code AI Chatbot & Visual Flow Builder',
      answer: `<strong>🤖 Visual Flow Builder & 24/7 AI Chatbots:</strong>
<p>Create automated conversational flows without writing any code:</p>
<ul>
  <li><strong>Drag-and-Drop Canvas:</strong> Build button menus, interactive questionnaires, and branching logic.</li>
  <li><strong>24/7 Automated Answers:</strong> Answer common FAQs, order inquiries, and greetings instantly.</li>
  <li><strong>Automated Lead Capture:</strong> Collect Name, Email, Requirement, and sync directly to CRM.</li>
  <li><strong>Human Handoff:</strong> Seamlessly transfer chats to human support agents whenever needed.</li>
</ul>`,
      actions: [
        { label: 'AI Chatbot Builder', url: '/products/chatbot/', type: 'primary' },
        { label: 'Visual Flow Builder', url: '/products/flow-builder/', type: 'secondary' }
      ]
    },
    {
      id: 'ai_voice',
      intent: 'ai_voice_calling',
      keywords: ['voice', 'ai voice', 'call bot', 'calling', 'automated call', 'phone call', 'telephony', 'speech', 'inbound call', 'outbound call', 'hindi voice'],
      title: 'AI Voice Calling & Telephony Agents',
      answer: `<strong>📞 AI Voice Calling (Agentic Voice Telephony):</strong>
<p>Transform sales and support with natural, human-sounding AI voice calls:</p>
<ul>
  <li><strong>Multilingual Speech:</strong> Natural conversation in Hindi, English, and regional Indian languages.</li>
  <li><strong>Outbound Automated Calling:</strong> Payment reminders, COD order confirmations, and event reminders.</li>
  <li><strong>Inbound Virtual Receptionist:</strong> Answers calls 24/7, handles inquiries, and routes callers.</li>
</ul>`,
      actions: [
        { label: 'Explore AI Voice Calling', url: '/products/ai-voice/', type: 'primary' },
        { label: 'Request a Callback', action: 'openCallback', type: 'secondary' }
      ]
    },
    {
      id: 'channels_omni',
      intent: 'omnichannel_channels',
      keywords: ['omnichannel', 'channels', 'instagram', 'telegram', 'facebook', 'messenger', 'dm automation', 'comment to dm', 'all channels', 'multi channel'],
      title: 'Omnichannel Communication (WhatsApp, IG, Telegram, FB)',
      answer: `<strong>🌐 Unified Omnichannel Communication:</strong>
<p>Connect and reply to customers across all major channels from a single unified inbox:</p>
<ul>
  <li><strong>WhatsApp Business API:</strong> Broadcasts, CRM, and chatbots (<a href="/channel/whatsapp/" style="color:#059669;font-weight:600;">Explore</a>).</li>
  <li><strong>Instagram DM Automation:</strong> Story mentions, comment-to-DM, and auto-replies (<a href="/channel/instagram/" style="color:#e1306c;font-weight:600;">Explore</a>).</li>
  <li><strong>Telegram Bot Platform:</strong> Custom bots and group broadcasts (<a href="/channel/telegram/" style="color:#0284c7;font-weight:600;">Explore</a>).</li>
  <li><strong>Facebook Messenger:</strong> Integrated lead capture and nurturing (<a href="/channel/facebook/" style="color:#2563eb;font-weight:600;">Explore</a>).</li>
</ul>`,
      actions: [
        { label: 'Instagram DM Automation', url: '/channel/instagram/', type: 'primary' },
        { label: 'Telegram Bot Platform', url: '/channel/telegram/', type: 'secondary' },
        { label: 'Facebook Messenger', url: '/channel/facebook/', type: 'secondary' }
      ]
    },
    {
      id: 'integrations_shopify_crm',
      intent: 'integrations_ecommerce',
      keywords: ['shopify', 'woocommerce', 'ecommerce', 'integration', 'connect', 'crm', 'zoho', 'hubspot', 'sheets', 'google sheet', 'google forms', 'calendar', 'webhook', 'api'],
      title: 'E-commerce, CRM & Webhook Integrations',
      answer: `<strong>🔌 1-Click E-Commerce & CRM Integrations:</strong>
<p>Connect InboxWa directly to your existing store and workflow:</p>
<ul>
  <li><strong>Shopify & WooCommerce:</strong> Abandoned cart recovery, automated COD verification, order tracking.</li>
  <li><strong>Google Sheets & Forms:</strong> Instant WhatsApp message whenever a form is submitted or row added.</li>
  <li><strong>CRMs:</strong> Direct sync with Zoho, HubSpot, Salesforce, LeadSquared, and custom webhooks.</li>
  <li><strong>REST APIs:</strong> Connect any custom website or database via developer webhooks.</li>
</ul>`,
      actions: [
        { label: 'Shopify Integration', url: '/solutions/shopify/', type: 'primary' },
        { label: 'Google Sheets & Forms', url: '/solutions/google-forms-sheets/', type: 'secondary' },
        { label: 'All Integrations', url: '/integrations/', type: 'secondary' }
      ]
    },
    {
      id: 'business_leads',
      intent: 'b2b_business_leads',
      keywords: ['leads', 'business leads', 'pan india', 'database', 'panindiadata', 'data marketplace', 'b2b leads', 'customer data', 'buyers', 'verified data', 'lead generation'],
      title: 'Pan-India Business Leads Database (12 Categories)',
      answer: `<strong>📈 Pan-India Verified Business Leads:</strong>
<p>Access high-converting verified customer and B2B contact lists:</p>
<ul>
  <li><strong>12 High-Converting Categories:</strong> Real Estate, Automobiles, E-Commerce, Healthcare, BFSI, Education, IT/Software, Manufacturing, Food & Beverage, Travel, Advertising, and B2B Suppliers.</li>
  <li><strong>Verified Contacts:</strong> Active WhatsApp phone numbers, city, company, and key decision makers.</li>
  <li><strong>Direct Integration:</strong> Broadcast offers directly to verified leads via InboxWa.</li>
</ul>`,
      actions: [
        { label: 'Browse 12 Leads Categories', url: '/business-leads/', type: 'primary' },
        { label: 'Custom Data Request', url: '/solutions/data-marketplace/#custom-request', type: 'secondary' }
      ]
    },
    {
      id: 'green_tick',
      intent: 'meta_green_tick',
      keywords: ['green tick', 'tick', 'verification', 'badge', 'verified badge', 'green badge', 'official badge'],
      title: 'Meta Official Green Tick Verification',
      answer: `<strong>✅ WhatsApp Official Green Tick Verification:</strong>
<p>Build instant credibility with an official verified badge beside your brand name:</p>
<ul>
  <li>Displays your business brand name instead of a phone number even if the user hasn't saved your contact.</li>
  <li><strong>Requirements:</strong> Meta Business Verification, working business website, and brand notability.</li>
  <li><strong>Free Assistance:</strong> InboxWa handles your official application with Meta at zero extra service fee!</li>
</ul>`,
      actions: [
        { label: 'Green Tick Guide', url: '/channel/whatsapp/', type: 'primary' },
        { label: 'Apply via WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20I%20want%20to%20apply%20for%20WhatsApp%20Green%20Tick%20verification.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'human_contact_sales',
      intent: 'talk_to_human',
      keywords: ['talk to human', 'human', 'agent', 'sales', 'speak', 'call', 'support', 'contact', 'phone number', 'email', 'office', 'bangalore', 'address', 'real person', 'customer care'],
      title: 'Talk to Our Team & Human Support',
      answer: `<strong>👨‍💼 Connect with Our Human Team in Bangalore:</strong>
<p>Our sales and technical specialists are ready to help you:</p>
<ul>
  <li><strong>WhatsApp:</strong> +91 80508 54445 (Instant Replies)</li>
  <li><strong>Phone:</strong> <a href="tel:+918050854445" style="color:#0369a1;font-weight:600;">+91 80508 54445</a></li>
  <li><strong>Sales Email:</strong> <a href="mailto:mail@inboxwa.com">mail@inboxwa.com</a></li>
  <li><strong>Support Email:</strong> <a href="mailto:support@inboxwa.com">support@inboxwa.com</a></li>
  <li><strong>Office:</strong> Bangalore, Karnataka, India</li>
</ul>`,
      actions: [
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20InboxWa%20team%2C%20I%20would%20like%20to%20speak%20with%20a%20sales%20representative.', type: 'wa', target: '_blank' },
        { label: 'Call Us Now', url: 'tel:' + CONFIG.whatsappNumber, type: 'secondary' },
        { label: 'Request a Callback', action: 'openCallback', type: 'secondary' }
      ]
    },
    {
      id: 'free_trial_signup',
      intent: 'free_trial_onboarding',
      keywords: ['free trial', 'trial', 'sign up', 'register', 'create account', 'start', 'get started', 'demo', 'login', 'setup time', 'how to start'],
      title: 'Get Started with 7-Day Free Trial',
      answer: `<strong>✨ Start Free Today with InboxWa:</strong>
<p>Get instant access to the official WhatsApp Business API platform:</p>
<ul>
  <li><strong>7-Day Free Trial:</strong> Explore all features with zero risk.</li>
  <li><strong>No Credit Card Required:</strong> Instant activation in less than 3 minutes.</li>
  <li><strong>Dedicated Onboarding:</strong> Full setup support from our engineers.</li>
</ul>`,
      actions: [
        { label: 'Start 7-Day Free Trial', url: '/auth/register', type: 'primary' },
        { label: 'Book Live Demo', action: 'openDemo', type: 'secondary' }
      ]
    }
  ];

  var GREETINGS = ['hi', 'hello', 'hey', 'start', 'good morning', 'good afternoon', 'good evening', 'namaste', 'hola', 'hellobotz'];
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
          title: 'Hello from HelloBotz!',
          answer: `👋 Hello there! I'm <strong>HelloBotz</strong>, your friendly AI assistant for InboxWa.<br><br>I can answer any question about our <strong>Official WhatsApp Business API, Bulk Broadcasts, AI Chatbots, Shared Team Inbox, Voice Calling, Pricing, and Business Leads</strong>.<br><br>What would you like to explore today?`,
          suggestions: [
            'What are your pricing plans?',
            'How does WhatsApp API work?',
            'Can I send bulk broadcasts?',
            'Do you connect with Shopify?'
          ]
        };
      }
    }

    // Check Thanks
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

    // Knowledge Base Scoring
    var bestMatch = null;
    var highestScore = 0;

    KNOWLEDGE_BASE.forEach(function (entry) {
      var score = 0;
      entry.keywords.forEach(function (kw) {
        if (clean.indexOf(kw) !== -1) {
          score += kw.length * 2;
        }
      });
      if (score > highestScore) {
        highestScore = score;
        bestMatch = entry;
      }
    });

    if (highestScore >= 4 && bestMatch) {
      return bestMatch;
    }

    // Fallback response with related page links
    return {
      type: 'fallback',
      title: 'HelloBotz is here to help!',
      answer: `I want to make sure you get the exact answer for: <em>"${escapeHtml(userQuery)}"</em>.<br><br>Here are the most popular topics I can guide you on:`,
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
        { label: 'View Pricing & Plans', url: '/pricing/', type: 'primary' },
        { label: 'Chat on WhatsApp with Team', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=' + encodeURIComponent('Hi InboxWa, I have a question: ' + userQuery), type: 'wa', target: '_blank' },
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

  // HelloBotz Controller & Character State Machine
  function initHelloBotz() {
    var widget = document.getElementById('inboxwa-robot-widget');
    if (!widget) return;

    var triggerBtn = widget.querySelector('.hellobotz-trigger');
    var character = widget.querySelector('.hellobotz-character');
    var speechBubble = widget.querySelector('.hellobotz-speech-bubble');
    var speechText = widget.querySelector('.hellobotz-speech-text');
    var closeBtn = widget.querySelector('.header-close-btn');
    var resetBtn = widget.querySelector('.header-reset-btn');
    var chatBody = widget.querySelector('.inboxwa-chat-body');
    var chatForm = widget.querySelector('.inboxwa-chat-form');
    var chatInput = widget.querySelector('.inboxwa-chat-input');
    var quickChannels = widget.querySelectorAll('.quick-channel-item');

    // -------------------------------------------------------------
    // CHARACTER EMOTION STATES (Blinking, Bored, Excited)
    // -------------------------------------------------------------
    var idleTimer = null;
    var blinkInterval = null;

    function setEmotion(emotion) {
      if (!character) return;
      character.classList.remove('state-excited', 'state-bored', 'is-blinking');

      if (emotion === 'excited') {
        character.classList.add('state-excited');
        if (speechText) speechText.textContent = "✨ Yay! Let's chat!";
      } else if (emotion === 'bored') {
        character.classList.add('state-bored');
        if (speechText) speechText.textContent = "💤 So quiet... ask me something!";
      } else {
        // Normal
        if (speechText) speechText.textContent = "👋 Hi! I'm HelloBotz";
      }
    }

    function resetIdleTimer() {
      clearTimeout(idleTimer);
      // If currently bored, return to normal
      if (character && character.classList.contains('state-bored')) {
        setEmotion('normal');
      }
      // After 12 seconds of no mouse movement or interaction, become bored
      idleTimer = setTimeout(function () {
        if (!widget.classList.contains('is-open')) {
          setEmotion('bored');
        }
      }, 12000);
    }

    // Blinking rhythm (every 3.5 seconds)
    function startBlinking() {
      blinkInterval = setInterval(function () {
        if (!character || character.classList.contains('state-bored') || character.classList.contains('state-excited')) {
          return;
        }
        character.classList.add('is-blinking');
        setTimeout(function () {
          if (character) character.classList.remove('is-blinking');
        }, 180);
      }, 3500);
    }

    // Trigger hover events -> Excited
    if (triggerBtn) {
      triggerBtn.addEventListener('mouseenter', function () {
        setEmotion('excited');
        clearTimeout(idleTimer);
      });

      triggerBtn.addEventListener('mouseleave', function () {
        if (!widget.classList.contains('is-open')) {
          setEmotion('normal');
          resetIdleTimer();
        }
      });
    }

    // User activity resets idle timer
    ['mousemove', 'keydown', 'scroll', 'touchstart'].forEach(function (evt) {
      window.addEventListener(evt, resetIdleTimer, { passive: true });
    });

    startBlinking();
    resetIdleTimer();

    // -------------------------------------------------------------
    // CHATBOX OPEN / CLOSE CONTROLS
    // -------------------------------------------------------------
    function toggleWidget(force) {
      var shouldOpen = typeof force === 'boolean' ? force : (!widget.classList.contains('is-open') && !widget.classList.contains('open'));
      if (shouldOpen) {
        setEmotion('excited');
        widget.classList.add('is-open');
        widget.classList.add('open');
        setTimeout(function () {
          chatInput.focus();
          scrollToBottom();
        }, 100);
      } else {
        widget.classList.remove('is-open');
        widget.classList.remove('open');
        setEmotion('normal');
        resetIdleTimer();
      }
    }

    if (triggerBtn) {
      triggerBtn.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        toggleWidget();
      });
    }

    if (character) {
      character.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        toggleWidget();
      });
    }

    var closeCircle = widget.querySelector('.hellobotz-close-circle');
    if (closeCircle) {
      closeCircle.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        toggleWidget(false);
      });
    }

    if (speechBubble) {
      speechBubble.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        toggleWidget(true);
      });
    }

    if (closeBtn) {
      closeBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        toggleWidget(false);
      });
    }

    // Outside click closes chatbox
    document.addEventListener('click', function (e) {
      if (widget.classList.contains('is-open') && !widget.contains(e.target)) {
        toggleWidget(false);
      }
    });

    // ESC closes chatbox
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && widget.classList.contains('is-open')) {
        toggleWidget(false);
      }
    });

    // Restart conversation button
    if (resetBtn) {
      resetBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        sessionStorage.removeItem('hellobotz_chat_history');
        chatBody.innerHTML = '';
        renderWelcomeMessage();
      });
    }

    function scrollToBottom() {
      setTimeout(function () {
        chatBody.scrollTop = chatBody.scrollHeight;
      }, 50);
    }

    // User message bubble
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

    // Typing Indicator
    function showTypingIndicator() {
      var typing = document.createElement('div');
      typing.id = 'bot-typing-box';
      typing.className = 'chat-bubble-row bot-row';
      typing.innerHTML = `
        <div class="bot-avatar-small">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="none">
            <circle cx="12" cy="12" r="9" fill="#8B5CF6"/>
            <circle cx="9" cy="11" r="1.8" fill="#06B6D4"/>
            <circle cx="15" cy="11" r="1.8" fill="#06B6D4"/>
            <path d="M9 15c1 1 2 1.3 3 1.3s2-.3 3-1.3" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
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

    // HelloBotz Response Bubble with Related Page Buttons
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
        suggestionsHtml = '<div class="bot-suggestions-wrap"><div class="bot-suggestions-title">Quick questions:</div>';
        data.suggestions.forEach(function (sug) {
          suggestionsHtml += `<button type="button" class="bot-chip-btn" data-query="${escapeHtml(sug)}">💬 ${escapeHtml(sug)}</button>`;
        });
        suggestionsHtml += '</div>';
      }

      row.innerHTML = `
        <div class="bot-avatar-small">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="none">
            <circle cx="12" cy="12" r="10" fill="#8B5CF6"/>
            <circle cx="8.5" cy="10.5" r="1.8" fill="#06B6D4"/>
            <circle cx="15.5" cy="10.5" r="1.8" fill="#06B6D4"/>
            <path d="M8.5 14.5c1 1.2 2.2 1.8 3.5 1.8s2.5-.6 3.5-1.8" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
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

    // Handle Question
    function handleUserQuestion(question) {
      if (!question || !question.trim()) return;
      var q = question.trim();
      addUserMessage(q);
      chatInput.value = '';

      showTypingIndicator();
      setTimeout(function () {
        var reply = matchIntent(q);
        addBotResponse(reply);
      }, 500);
    }

    if (chatForm) {
      chatForm.addEventListener('submit', function (e) {
        e.preventDefault();
        handleUserQuestion(chatInput.value);
      });
    }

    // Delegate Click on Chips and Popup Actions
    chatBody.addEventListener('click', function (e) {
      var chip = e.target.closest('.bot-chip-btn');
      if (chip) {
        var q = chip.getAttribute('data-query');
        if (q) handleUserQuestion(q);
        return;
      }

      var demoBtn = e.target.closest('.bot-action-demo');
      if (demoBtn) {
        var d = document.querySelector('.btn-demo-open');
        if (d) d.click();
        return;
      }

      var callbackBtn = e.target.closest('.bot-action-callback');
      if (callbackBtn) {
        var c = document.querySelector('.btn-callback-open');
        if (c) c.click();
        return;
      }
    });

    // Quick Channels Bar triggers
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

    // Welcome Greeting always starting from HelloBotz
    function renderWelcomeMessage() {
      addBotResponse({
        answer: `👋 <strong>Hi there! I'm HelloBotz</strong>, your AI assistant for InboxWa.<br><br>Ask me anything about our <strong>Official WhatsApp Business API, Bulk Broadcasts, AI Chatbots, Voice Calling, or Pricing</strong>! How can I help you grow today?`,
        suggestions: [
          'What are your pricing plans?',
          'How does WhatsApp API work?',
          'Can I send bulk broadcasts without ban?',
          'Do you connect with Shopify or WooCommerce?',
          'How to get Green Tick verification?'
        ],
        actions: [
          { label: 'View Pricing & Plans', url: '/pricing/', type: 'primary' },
          { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20I%20am%20exploring%20InboxWa.', type: 'wa', target: '_blank' }
        ]
      });
    }

    // Save/Load state
    function saveChatState() {
      try {
        sessionStorage.setItem('hellobotz_chat_history', chatBody.innerHTML);
      } catch (e) {}
    }

    function loadChatState() {
      try {
        var saved = sessionStorage.getItem('hellobotz_chat_history');
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

    loadChatState();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initHelloBotz);
  } else {
    initHelloBotz();
  }
})();
