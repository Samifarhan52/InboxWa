/**
 * HELLOBOTZ - Interactive AI Robot Character & Website Knowledge Assistant (robot-chatbot.js)
 * Features dynamic character emotion states (blinking, getting bored, excited on hover/click),
 * signature HelloBotz greeting, vertical service options selector, and instant Q&A grounded on HelloBotz.
 */

(function () {
  'use strict';

  var CONFIG = {
    whatsappNumber: (window.HelloBotzData && window.HelloBotzData.whatsapp) || '918050854445',
    phoneNumber: '+91 80508 54445',
    salesEmail: 'mail@hellobotz.com',
    supportEmail: 'support@hellobotz.com',
    siteName: 'HelloBotz',
    avatarUrl: '/assets/images/hellobotz-avatar.png'
  };

  // Primary 5-6 Vertical Service/Platform Options (Concise & Direct)
  var SERVICES_MENU = [
    {
      id: 'whatsapp_api',
      icon: '<svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"/><path d="M12 18h.01"/></svg>',
      label: 'WhatsApp Business API & Blue Tick',
      userText: 'Tell me about WhatsApp Business API & Blue Tick',
      answer: '<strong>Official WhatsApp Business API:</strong> Connect on Meta\'s official cloud infrastructure with zero ban risk, official blue tick verification, and high messaging throughput.',
      actions: [
        { label: 'Explore WhatsApp API', url: '/products/channels/whatsapp/', type: 'primary' },
        { label: 'Blue Tick Verification', url: '/products/whatsapp-blue-tick/', type: 'secondary' },
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20tell%20me%20about%20Official%20WhatsApp%20API.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'bulk_broadcast',
      icon: '<svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 11 18-5v12L3 13v-2z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/></svg>',
      label: 'Bulk WhatsApp Broadcast Campaigns',
      userText: 'Tell me about Bulk WhatsApp Broadcast Campaigns',
      answer: '<strong>Bulk Broadcast Campaigns:</strong> Send personalized mass messages with 98% open rates, media attachments (images, PDFs, videos), dynamic tags, and live analytics.',
      actions: [
        { label: 'Broadcast Features', url: '/products/broadcast/', type: 'primary' },
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20tell%20me%20about%20bulk%20broadcasts.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'chatbot_flow_builder',
      icon: '<svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#8B5CF6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4"/><line x1="8" y1="16" x2="8" y2="16"/><line x1="16" y1="16" x2="16" y2="16"/></svg>',
      label: 'AI Chatbots & Visual Flow Builder',
      userText: 'Tell me about AI Chatbots & Flow Builder',
      answer: '<strong>AI Chatbots & Visual Flow Builder:</strong> Build drag-and-drop automated flows to answer customer FAQs, capture leads, and support users 24/7 with human handoff.',
      actions: [
        { label: 'AI Chatbot Builder', url: '/products/chatbot/', type: 'primary' },
        { label: 'Visual Flow Builder', url: '/products/flow-builder/', type: 'secondary' }
      ]
    },
    {
      id: 'integrations_shopify_crm',
      icon: '<svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#EC4899" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22v-5"/><path d="M9 8V2"/><path d="M15 8V2"/><path d="M18 8v5a6 6 0 0 1-12 0V8z"/></svg>',
      label: 'Shopify, E-Commerce & CRM Integrations',
      userText: 'Tell me about Shopify & CRM Integrations',
      answer: '<strong>E-Commerce & CRM Integrations:</strong> Connect HelloBotz with Shopify, WooCommerce, Zoho, HubSpot, and Google Sheets to automate abandoned carts and order alerts.',
      actions: [
        { label: 'Shopify Integration', url: '/solutions/shopify/', type: 'primary' },
        { label: 'All Integrations', url: '/integrations/', type: 'secondary' }
      ]
    },
    {
      id: 'pricing',
      icon: '<svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#F59E0B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>',
      label: 'Pricing Plans & Subscriptions',
      userText: 'What are your pricing plans & packages?',
      answer: '<strong>Transparent Pricing Plans:</strong> Plans start at ₹1,999/mo for Bulk Broadcasts, ₹2,999/mo for Automation & Shared Inbox, and ₹4,999/mo for Omnichannel Pro (save 20% yearly).',
      actions: [
        { label: 'View Pricing & Plans', url: '/pricing/', type: 'primary' },
        { label: 'Start 7-Day Free Trial', url: '/auth/register', type: 'secondary' }
      ]
    },
    {
      id: 'others',
      icon: '<svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#06B6D4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>',
      label: 'Others / Custom Requirement',
      userText: 'I have a custom question or requirement',
      answer: '<strong>How can we assist you?</strong> Please type your requirement below or chat directly with our specialist team for instant assistance.',
      actions: [
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20I%20have%20a%20custom%20requirement.', type: 'wa', target: '_blank' },
        { label: 'Book Live Demo', action: 'openDemo', type: 'secondary' }
      ]
    }
  ];

  // Comprehensive Website Knowledge Base Grounded on All HelloBotz Pages (Crisp & Direct)
  var KNOWLEDGE_BASE = [
    {
      id: 'pricing',
      intent: 'pricing_plans',
      keywords: ['price', 'pricing', 'plan', 'cost', 'charge', 'rate', 'package', 'subscription', 'fee', 'how much', 'cheap', 'expensive', 'discount', 'yearly', 'monthly', 'dollar', 'rupee', 'currency', 'inr'],
      title: 'HelloBotz Pricing & Plans',
      answer: '<strong>HelloBotz Pricing:</strong> Plans start at ₹1,999/mo (Bulk Broadcast), ₹2,999/mo (Automation & Shared Inbox), and ₹4,999/mo (Omnichannel Pro). Annual billing saves 20%.',
      actions: [
        { label: 'View Pricing & Plans', url: '/pricing/', type: 'primary' },
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20I%20want%20to%20know%20more%20about%20HelloBotz%20pricing.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'whatsapp_api',
      intent: 'whatsapp_api_overview',
      keywords: ['whatsapp api', 'official api', 'business api', 'cloud api', 'green tick', 'meta verified', 'official whatsapp', 'meta partner', 'zero ban', 'anti ban', 'ban risk'],
      title: 'Official WhatsApp Business API Platform',
      answer: '<strong>Official WhatsApp Business API:</strong> Official Meta cloud API with zero ban risk, official blue/green tick verification, and high message throughput.',
      actions: [
        { label: 'Explore WhatsApp API', url: '/products/channels/whatsapp/', type: 'primary' },
        { label: 'Blue Tick Verification', url: '/products/whatsapp-blue-tick/', type: 'secondary' }
      ]
    },
    {
      id: 'bulk_broadcast',
      intent: 'broadcast_marketing',
      keywords: ['bulk', 'broadcast', 'campaign', 'mass message', 'promotional', 'blast', 'newsletter', 'bulk message', 'send to all', 'csv upload', 'contacts broadcast'],
      title: 'Bulk WhatsApp Broadcast Campaigns',
      answer: '<strong>Bulk Broadcast Campaigns:</strong> Send personalized mass messages with 98% open rates, media attachments (images, PDFs, videos), and live read tracking.',
      actions: [
        { label: 'Explore Broadcasts', url: '/products/broadcast/', type: 'primary' },
        { label: 'Start 7-Day Free Trial', url: '/auth/register', type: 'secondary' }
      ]
    },
    {
      id: 'shared_inbox',
      intent: 'shared_team_inbox',
      keywords: ['shared inbox', 'team inbox', 'multiple agents', 'support team', 'assign chat', 'agent collision', 'multi user', 'multiple login', 'internal notes', 'canned response'],
      title: 'Shared Team Inbox for Multi-Agent Support',
      answer: '<strong>Multi-Agent Shared Inbox:</strong> Manage all customer conversations from a single WhatsApp number with team assignments, collision detection, and private notes.',
      actions: [
        { label: 'Explore Shared Inbox', url: '/products/shared-inbox/', type: 'primary' },
        { label: 'Book Live Demo', action: 'openDemo', type: 'secondary' }
      ]
    },
    {
      id: 'chatbot_flow_builder',
      intent: 'ai_chatbot_builder',
      keywords: ['chatbot', 'bot', 'flow builder', 'auto reply', 'automation', 'drag and drop', 'no code', 'automated chat', 'ai bot', 'faq bot', 'lead qualification'],
      title: 'No-Code AI Chatbot & Visual Flow Builder',
      answer: '<strong>Visual AI Chatbots:</strong> Drag-and-drop flow builder to automate customer inquiries, order updates, and lead capture with seamless human agent handoff.',
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
      answer: '<strong>AI Voice Calling:</strong> Automated conversational voice agents for payment reminders, COD verification, and 24/7 inbound reception in multiple languages.',
      actions: [
        { label: 'Explore AI Voice Calling', url: '/products/ai-voice/', type: 'primary' },
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20tell%20me%20about%20AI%20Voice%20calling.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'channels_omni',
      intent: 'omnichannel_channels',
      keywords: ['omnichannel', 'channels', 'instagram', 'telegram', 'facebook', 'messenger', 'dm automation', 'comment to dm', 'all channels', 'multi channel'],
      title: 'Omnichannel Communication (WhatsApp, IG, Telegram, FB)',
      answer: '<strong>Unified Omnichannel Platform:</strong> Manage WhatsApp, Instagram DMs, Telegram, and Facebook Messenger from a single collaborative workspace.',
      actions: [
        { label: 'Instagram Automation', url: '/products/channels/instagram/', type: 'primary' },
        { label: 'WhatsApp API', url: '/products/channels/whatsapp/', type: 'secondary' }
      ]
    },
    {
      id: 'integrations_shopify_crm',
      intent: 'integrations_ecommerce',
      keywords: ['shopify', 'woocommerce', 'ecommerce', 'integration', 'connect', 'crm', 'zoho', 'hubspot', 'sheets', 'google sheet', 'google forms', 'calendar', 'webhook', 'api'],
      title: 'E-commerce, CRM & Webhook Integrations',
      answer: '<strong>E-Commerce & CRM Integrations:</strong> One-click integrations with Shopify, WooCommerce, Zoho, HubSpot, and Google Sheets for automated notifications.',
      actions: [
        { label: 'Explore Integrations', url: '/integrations/', type: 'primary' },
        { label: 'Shopify Integration', url: '/solutions/shopify/', type: 'secondary' }
      ]
    },
    {
      id: 'business_leads',
      intent: 'b2b_business_leads',
      keywords: ['leads', 'business leads', 'pan india', 'database', 'panindiadata', 'data marketplace', 'b2b leads', 'customer data', 'buyers', 'verified data', 'lead generation'],
      title: 'Pan-India Business Leads Database (12 Categories)',
      answer: '<strong>Verified B2B Business Leads:</strong> Access active decision-maker contacts across 12 high-growth industries to drive your targeted WhatsApp campaigns.',
      actions: [
        { label: 'Browse 12 Lead Categories', url: '/business-leads/', type: 'primary' },
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20tell%20me%20about%20business%20leads.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'green_tick',
      intent: 'meta_green_tick',
      keywords: ['green tick', 'blue tick', 'tick', 'verification', 'badge', 'verified badge', 'green badge', 'official badge'],
      title: 'Meta Official Blue/Green Tick Verification',
      answer: '<strong>Official Blue Tick Verification:</strong> Get Meta\'s official verified badge on WhatsApp to boost brand trust and customer confidence with zero service fees.',
      actions: [
        { label: 'Blue Tick Verification', url: '/products/whatsapp-blue-tick/', type: 'primary' },
        { label: 'Apply on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20I%20want%20to%20apply%20for%20WhatsApp%20Blue%20Tick%20verification.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'human_contact_sales',
      intent: 'talk_to_human',
      keywords: ['talk to human', 'human', 'agent', 'sales', 'speak', 'call', 'support', 'contact', 'phone number', 'email', 'office', 'bangalore', 'address', 'real person', 'customer care'],
      title: 'Talk to Our Team & Human Support',
      answer: '<strong>Talk to HelloBotz Team:</strong> Reach our Bangalore team 24/7 via WhatsApp (+91 80508 54445) or email (mail@hellobotz.com).',
      actions: [
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%20team%2C%20I%20would%20like%20to%20speak%20with%20sales.', type: 'wa', target: '_blank' },
        { label: 'Book Live Demo', action: 'openDemo', type: 'secondary' }
      ]
    },
    {
      id: 'free_trial_signup',
      intent: 'free_trial_onboarding',
      keywords: ['free trial', 'trial', 'sign up', 'register', 'create account', 'start', 'get started', 'demo', 'login', 'setup time', 'how to start'],
      title: 'Get Started with 7-Day Free Trial',
      answer: '<strong>Start Free with HelloBotz:</strong> Enjoy our 7-day free trial with no credit card required and instant 3-minute onboarding.',
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
          answer: '<strong>Hello! Welcome to HelloBotz.</strong><br><br>Which service or platform are you looking for today? Please pick an option below or type your custom requirement:',
          options: SERVICES_MENU
        };
      }
    }

    // Check Thanks
    for (var j = 0; j < THANKS.length; j++) {
      if (clean === THANKS[j] || clean.indexOf(THANKS[j] + ' ') === 0) {
        return {
          type: 'thanks',
          title: 'You are welcome!',
          answer: '<strong>You are very welcome!</strong><br><br>Feel free to ask anything else, explore our services, or chat directly with our team on WhatsApp.',
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

    // Fallback response with related redirect buttons
    return {
      type: 'fallback',
      title: 'HelloBotz is here to help!',
      answer: 'Thank you for reaching out regarding: <em>"' + escapeHtml(userQuery) + '"</em>.<br><br>Here are the quickest ways we can help you get the exact details:',
      actions: [
        { label: 'Chat with Specialist on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=' + encodeURIComponent('Hi HelloBotz, I have a question about: ' + userQuery), type: 'wa', target: '_blank' },
        { label: 'View Pricing & Plans', url: '/pricing/', type: 'primary' },
        { label: 'Book Live 1-on-1 Demo', action: 'openDemo', type: 'secondary' }
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
    var widget = document.getElementById('hellobotz-robot-widget');
    if (!widget) return;

    var triggerBtn = widget.querySelector('.hellobotz-trigger');
    var character = widget.querySelector('.hellobotz-character');
    var speechBubble = widget.querySelector('.hellobotz-speech-bubble');
    var speechText = widget.querySelector('.hellobotz-speech-text');
    var closeBtn = widget.querySelector('.header-close-btn');
    var resetBtn = widget.querySelector('.header-reset-btn');
    var chatBody = widget.querySelector('.hellobotz-chat-body');
    var chatForm = widget.querySelector('.hellobotz-chat-form');
    var chatInput = widget.querySelector('.hellobotz-chat-input');
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
        if (speechText) speechText.textContent = "Let's chat!";
      } else if (emotion === 'bored') {
        character.classList.add('state-bored');
        if (speechText) speechText.textContent = "HelloBotz is here to help!";
      } else {
        if (speechText) speechText.textContent = "Hi! How can I help?";
      }
    }

    function resetIdleTimer() {
      clearTimeout(idleTimer);
      if (character && character.classList.contains('state-bored')) {
        setEmotion('normal');
      }
      idleTimer = setTimeout(function () {
        if (!widget.classList.contains('is-open')) {
          setEmotion('bored');
        }
      }, 12000);
    }

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

    ['mousemove', 'keydown', 'scroll', 'touchstart'].forEach(function (evt) {
      window.addEventListener(evt, resetIdleTimer, { passive: true });
    });

    startBlinking();
    resetIdleTimer();

    widget.classList.remove('is-open', 'open');

    // -------------------------------------------------------------
    // CHATBOX OPEN / CLOSE CONTROLS
    // -------------------------------------------------------------
    function toggleWidget(force) {
      var isOpen = widget.classList.contains('is-open') || widget.classList.contains('open');
      var shouldOpen = typeof force === 'boolean' ? force : !isOpen;
      if (shouldOpen) {
        setEmotion('excited');
        widget.classList.add('is-open');
        widget.classList.add('open');
        setTimeout(function () {
          if (chatInput) chatInput.focus();
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

    if (speechBubble) {
      speechBubble.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        toggleWidget(true);
      });
    }

    var closeButtons = widget.querySelectorAll('.header-close-btn, .hellobotz-close-circle');
    closeButtons.forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        toggleWidget(false);
      });
    });

    document.addEventListener('click', function (e) {
      if ((widget.classList.contains('is-open') || widget.classList.contains('open')) && !widget.contains(e.target)) {
        toggleWidget(false);
      }
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && (widget.classList.contains('is-open') || widget.classList.contains('open'))) {
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
      saveChatState();
    }

    // Typing Indicator with Updated Avatar
    function showTypingIndicator() {
      removeTypingIndicator();
      var typing = document.createElement('div');
      typing.id = 'bot-typing-box';
      typing.className = 'chat-bubble-row bot-row';
      typing.innerHTML = `
        <div class="bot-avatar-small">
          <img src="${CONFIG.avatarUrl}" alt="HelloBotz" class="bot-avatar-img" width="26" height="26">
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

    // HelloBotz Response Bubble with Vertical Options & Redirect Buttons
    function addBotResponse(data) {
      removeTypingIndicator();

      var row = document.createElement('div');
      row.className = 'chat-bubble-row bot-row';

      var optionsHtml = '';
      if (data.options && data.options.length > 0) {
        optionsHtml = '<div class="bot-vertical-options">';
        data.options.forEach(function (opt) {
          var isOthers = opt.id === 'others' ? ' opt-others' : '';
          optionsHtml += `
            <button type="button" class="bot-option-btn${isOthers}" data-service-id="${escapeHtml(opt.id)}">
              <span class="opt-left">
                <span class="opt-icon">${opt.icon}</span>
                <span class="opt-text">${escapeHtml(opt.label)}</span>
              </span>
              <span class="opt-arrow">&rsaquo;</span>
            </button>
          `;
        });
        optionsHtml += '</div>';
      }

      var actionsHtml = '';
      if (data.actions && data.actions.length > 0) {
        actionsHtml = '<div class="bot-actions-group">';
        data.actions.forEach(function (act) {
          var cls = act.type === 'primary' ? 'bot-btn-primary' : (act.type === 'wa' ? 'bot-btn-wa' : 'bot-btn-secondary');
          if (act.action === 'openDemo') {
            actionsHtml += `<button type="button" class="bot-btn ${cls} bot-action-demo"><svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block;vertical-align:-1px;margin-right:4px;"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>${escapeHtml(act.label)}</button>`;
          } else if (act.action === 'openCallback') {
            actionsHtml += `<button type="button" class="bot-btn ${cls} bot-action-callback"><svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block;vertical-align:-1px;margin-right:4px;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>${escapeHtml(act.label)}</button>`;
          } else {
            var target = act.target ? `target="${act.target}" rel="noopener"` : '';
            actionsHtml += `<a href="${act.url}" ${target} class="bot-btn ${cls}">${escapeHtml(act.label)} &rarr;</a>`;
          }
        });
        actionsHtml += '</div>';
      }

      var menuBtnHtml = '';
      if (data.showMenuBtn) {
        menuBtnHtml = '<button type="button" class="bot-btn-menu bot-action-show-menu"><svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block;vertical-align:-1px;margin-right:4px;"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>Explore Services Menu</button>';
      }

      row.innerHTML = `
        <div class="bot-avatar-small">
          <img src="${CONFIG.avatarUrl}" alt="HelloBotz" class="bot-avatar-img" width="26" height="26">
        </div>
        <div class="chat-bubble bot-bubble">
          <div>${data.answer}</div>
          ${optionsHtml}
          ${actionsHtml}
          ${menuBtnHtml}
          <span class="chat-time">${getCurrentTime()}</span>
        </div>
      `;

      chatBody.appendChild(row);
      scrollToBottom();
      saveChatState();
    }

    // Handle Service Option Click
    function handleServiceOptionClick(serviceId) {
      var item = null;
      for (var i = 0; i < SERVICES_MENU.length; i++) {
        if (SERVICES_MENU[i].id === serviceId) {
          item = SERVICES_MENU[i];
          break;
        }
      }
      if (!item) return;

      addUserMessage(item.userText || item.label);
      showTypingIndicator();

      setTimeout(function () {
        if (serviceId === 'others') {
          addBotResponse({
            answer: item.answer,
            actions: item.actions,
            showMenuBtn: true
          });
          setTimeout(function () {
            if (chatInput) {
              chatInput.focus();
              chatInput.placeholder = 'Type your requirement or question here...';
            }
          }, 150);
        } else {
          addBotResponse({
            answer: item.answer,
            actions: item.actions,
            showMenuBtn: true
          });
        }
      }, 400);
    }

    // Re-show Services Menu Prompt
    function showServicesMenuPrompt() {
      addUserMessage('Show Services Menu');
      showTypingIndicator();
      setTimeout(function () {
        addBotResponse({
          answer: '<strong>HelloBotz Services & Solutions:</strong><br>Which service or platform would you like to explore?',
          options: SERVICES_MENU,
          showMenuBtn: false
        });
      }, 350);
    }

    // Handle User Free-Form Question
    function handleUserQuestion(question) {
      if (!question || !question.trim()) return;
      var q = question.trim();
      addUserMessage(q);
      chatInput.value = '';

      showTypingIndicator();
      setTimeout(function () {
        var reply = matchIntent(q);
        if (reply.type === 'greeting') {
          addBotResponse({
            answer: reply.answer,
            options: SERVICES_MENU,
            showMenuBtn: false
          });
        } else {
          reply.showMenuBtn = true;
          addBotResponse(reply);
        }
      }, 450);
    }

    if (chatForm) {
      chatForm.addEventListener('submit', function (e) {
        e.preventDefault();
        handleUserQuestion(chatInput.value);
      });
    }

    // Delegate Clicks for Options, Menu, and Modals
    chatBody.addEventListener('click', function (e) {
      var optBtn = e.target.closest('.bot-option-btn');
      if (optBtn) {
        var sId = optBtn.getAttribute('data-service-id');
        if (sId) handleServiceOptionClick(sId);
        return;
      }

      var menuBtn = e.target.closest('.bot-action-show-menu');
      if (menuBtn) {
        showServicesMenuPrompt();
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

    // Initial Greetings with Vertical Options
    function renderWelcomeMessage() {
      addBotResponse({
        answer: '<strong>Hello! Welcome to HelloBotz.</strong><br><br>Which service or platform are you looking for today?',
        options: SERVICES_MENU,
        showMenuBtn: false
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
        if (saved && saved.indexOf('bot-option-btn') !== -1) {
          chatBody.innerHTML = saved;
          scrollToBottom();
        } else {
          chatBody.innerHTML = '';
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
