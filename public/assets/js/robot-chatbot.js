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

  // Primary 5-6 Vertical Service/Platform Options
  var SERVICES_MENU = [
    {
      id: 'whatsapp_api',
      icon: '📱',
      label: 'WhatsApp Business API & Green Tick',
      userText: 'I am interested in WhatsApp Business API & Green Tick verification',
      answer: '<strong>Official Meta WhatsApp Business API:</strong><br>Power your customer communications on Meta\'s official cloud infrastructure with <strong>zero ban risk</strong>, full assistance for official green tick verification, high message throughput, and interactive CTA buttons.',
      actions: [
        { label: 'Explore WhatsApp API', url: '/products/channels/whatsapp/', type: 'primary' },
        { label: 'Green Tick Verification', url: '/products/whatsapp-blue-tick/', type: 'secondary' },
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20I%20am%20interested%20in%20Official%20WhatsApp%20API.', type: 'wa', target: '_blank' },
        { label: 'Book Live Demo', action: 'openDemo', type: 'secondary' }
      ]
    },
    {
      id: 'bulk_broadcast',
      icon: '📢',
      label: 'Bulk WhatsApp Broadcast Campaigns',
      userText: 'Tell me about Bulk WhatsApp Broadcast Campaigns',
      answer: '<strong>Unlimited Bulk Broadcasts (98% Open Rate):</strong><br>Deliver personalized promotional campaigns to thousands of verified contacts with rich media (PDF, video, image), dynamic custom tags, CSV contact uploads, and live read/click tracking.',
      actions: [
        { label: 'Broadcast Features', url: '/products/broadcast/', type: 'primary' },
        { label: 'Start 7-Day Free Trial', url: '/auth/register', type: 'secondary' },
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20I%20want%20to%20know%20more%20about%20bulk%20broadcasts.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'chatbot_flow_builder',
      icon: '🤖',
      label: 'AI Chatbots & Visual Flow Builder',
      userText: 'I am looking for AI Chatbots & Visual Flow Builder',
      answer: '<strong>Visual No-Code Flow Builder & 24/7 AI Chatbots:</strong><br>Automate routine customer support with drag-and-drop branching flows, 24/7 AI-powered answers, automated lead qualification, and seamless human agent handover.',
      actions: [
        { label: 'AI Chatbot Builder', url: '/products/chatbot/', type: 'primary' },
        { label: 'Visual Flow Builder', url: '/products/flow-builder/', type: 'secondary' },
        { label: 'Book Live Demo', action: 'openDemo', type: 'secondary' }
      ]
    },
    {
      id: 'integrations_shopify_crm',
      icon: '🔌',
      label: 'Shopify, E-Commerce & CRM Integrations',
      userText: 'I am looking for Shopify & E-Commerce Integrations',
      answer: '<strong>1-Click E-Commerce & CRM Integrations:</strong><br>Connect HelloBotz directly to Shopify, WooCommerce, Zoho, HubSpot, and Google Sheets to recover abandoned carts, automate COD confirmation, send tracking alerts, and sync leads.',
      actions: [
        { label: 'Shopify Revenue Engine', url: '/solutions/shopify/', type: 'primary' },
        { label: 'All Integrations', url: '/integrations/', type: 'secondary' },
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20I%20want%20to%20integrate%20HelloBotz%20with%20my%20store.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'pricing',
      icon: '💰',
      label: 'Pricing Plans & Subscriptions',
      userText: 'What are your pricing plans & packages?',
      answer: '<strong>HelloBotz Transparent Subscription Plans:</strong><br>• <strong>WhatsApp Bulk (₹1,999/mo):</strong> Official API, Unlimited Broadcasts, Basic CRM.<br>• <strong>Automation Plan (₹2,999/mo):</strong> Flow Builder, Multi-Agent Shared Inbox, E-Commerce sync.<br>• <strong>Biz Pro Omnichannel (₹4,999/mo):</strong> WhatsApp + IG + Telegram + FB, AI Voice.<br><em>Save 20% on annual billing. 1,000 free Meta service conversations included monthly!</em>',
      actions: [
        { label: 'View Pricing & Plans', url: '/pricing/', type: 'primary' },
        { label: 'Start 7-Day Free Trial', url: '/auth/register', type: 'secondary' },
        { label: 'Get Custom Quote', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20I%20am%20looking%20for%20a%20pricing%20quote.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'others',
      icon: '💬',
      label: 'Others / Type Your Requirement',
      userText: 'I have a custom question or requirement',
      answer: '<strong>How can we assist you specifically?</strong> ✍️<br>Please type your requirement or question in the box below. I will provide the exact details, documentation, or connect you directly with our team!',
      actions: [
        { label: 'Chat Directly on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20I%20have%20a%20custom%20requirement.', type: 'wa', target: '_blank' },
        { label: 'Request a Callback', action: 'openCallback', type: 'secondary' }
      ]
    }
  ];

  // Comprehensive Website Knowledge Base Grounded on All HelloBotz Pages
  var KNOWLEDGE_BASE = [
    {
      id: 'pricing',
      intent: 'pricing_plans',
      keywords: ['price', 'pricing', 'plan', 'cost', 'charge', 'rate', 'package', 'subscription', 'fee', 'how much', 'cheap', 'expensive', 'discount', 'yearly', 'monthly', 'dollar', 'rupee', 'currency', 'inr'],
      title: 'HelloBotz Pricing & Plans',
      answer: '<strong>HelloBotz Transparent Subscription Plans:</strong><br>• <strong>WhatsApp Bulk (₹1,999/mo):</strong> Unlimited Bulk Broadcasts, Official Meta API, Basic CRM.<br>• <strong>Automation Plan (₹2,999/mo):</strong> Multi-Agent Shared Team Inbox, Visual Flow Builder, AI Auto-Replies, Shopify/WooCommerce/Sheets sync.<br>• <strong>Biz Pro Omnichannel (₹4,999/mo):</strong> WhatsApp + Instagram + Telegram + Facebook Messenger in one inbox, AI Voice Agent.<br><em>Save 20% on yearly billing. Includes 1,000 Free Meta Service Conversations monthly!</em>',
      actions: [
        { label: 'View Pricing & Plans', url: '/pricing/', type: 'primary' },
        { label: 'Start 7-Day Free Trial', url: '/auth/register', type: 'secondary' },
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20I%20want%20to%20know%20more%20about%20HelloBotz%20pricing.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'whatsapp_api',
      intent: 'whatsapp_api_overview',
      keywords: ['whatsapp api', 'official api', 'business api', 'cloud api', 'green tick', 'meta verified', 'official whatsapp', 'meta partner', 'zero ban', 'anti ban', 'ban risk'],
      title: 'Official WhatsApp Business API Platform',
      answer: '<strong>Official Meta WhatsApp Business API:</strong><br>• <strong>Zero Ban Risk:</strong> 100% compliant with Meta official infrastructure.<br>• <strong>Green Tick Verification:</strong> Full assistance for the verified green badge on WhatsApp.<br>• <strong>High Throughput:</strong> Scale from Tier-1 (1,000/day) to Tier-4 (Unlimited messages/day).<br>• <strong>Interactive Messaging:</strong> Buttons, Quick Replies, List Menus, and Product Catalogs.',
      actions: [
        { label: 'Explore WhatsApp API', url: '/products/channels/whatsapp/', type: 'primary' },
        { label: 'Green Tick Verification', url: '/products/whatsapp-blue-tick/', type: 'secondary' },
        { label: 'Book Live Demo', action: 'openDemo', type: 'secondary' }
      ]
    },
    {
      id: 'bulk_broadcast',
      intent: 'broadcast_marketing',
      keywords: ['bulk', 'broadcast', 'campaign', 'mass message', 'promotional', 'blast', 'newsletter', 'bulk message', 'send to all', 'csv upload', 'contacts broadcast'],
      title: 'Bulk WhatsApp Broadcast Campaigns',
      answer: '<strong>Unlimited Bulk Broadcasts with 98% Open Rate:</strong><br>• <strong>Personalized Dynamic Tags:</strong> Automatically insert Customer Name, Order ID, City, or custom fields.<br>• <strong>Rich Media Templates:</strong> Send images, PDF catalogs, videos, and clickable CTA buttons.<br>• <strong>Real-time Analytics:</strong> Track Live Sent, Delivered, Read, and Link Clicks.<br>• <strong>Easy CSV Upload:</strong> Import contact lists with one click and organize with smart tags.',
      actions: [
        { label: 'Bulk Broadcast Details', url: '/products/broadcast/', type: 'primary' },
        { label: 'Start 7-Day Free Trial', url: '/auth/register', type: 'secondary' },
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20tell%20me%20about%20bulk%20broadcasts.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'shared_inbox',
      intent: 'shared_team_inbox',
      keywords: ['shared inbox', 'team inbox', 'multiple agents', 'support team', 'assign chat', 'agent collision', 'multi user', 'multiple login', 'internal notes', 'canned response'],
      title: 'Shared Team Inbox for Multi-Agent Support',
      answer: '<strong>Multi-Agent Shared Team Inbox:</strong><br>• <strong>Single WhatsApp Number:</strong> Team members handle customer chats simultaneously.<br>• <strong>Smart Auto-Assignment:</strong> Route queries round-robin or by department (Sales, Billing, Support).<br>• <strong>Collision Detection:</strong> See who is typing in real-time to avoid duplicate replies.<br>• <strong>Internal Private Notes:</strong> Leave team notes inside chat threads invisible to customers.',
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
      answer: '<strong>Visual Flow Builder & 24/7 AI Chatbots:</strong><br>• <strong>Drag-and-Drop Canvas:</strong> Build button menus, interactive questionnaires, and branching logic without code.<br>• <strong>24/7 Automated Answers:</strong> Answer common FAQs, order inquiries, and greetings instantly.<br>• <strong>Automated Lead Capture:</strong> Collect Name, Email, Requirement, and sync directly to CRM.<br>• <strong>Human Handoff:</strong> Seamlessly transfer chats to human support agents whenever needed.',
      actions: [
        { label: 'AI Chatbot Builder', url: '/products/chatbot/', type: 'primary' },
        { label: 'Visual Flow Builder', url: '/products/flow-builder/', type: 'secondary' },
        { label: 'Book Live Demo', action: 'openDemo', type: 'secondary' }
      ]
    },
    {
      id: 'ai_voice',
      intent: 'ai_voice_calling',
      keywords: ['voice', 'ai voice', 'call bot', 'calling', 'automated call', 'phone call', 'telephony', 'speech', 'inbound call', 'outbound call', 'hindi voice'],
      title: 'AI Voice Calling & Telephony Agents',
      answer: '<strong>AI Voice Calling (Agentic Voice Telephony):</strong><br>• <strong>Multilingual Speech:</strong> Natural conversation in Hindi, English, and regional Indian languages.<br>• <strong>Outbound Automated Calling:</strong> Payment reminders, COD order confirmations, and event reminders.<br>• <strong>Inbound Virtual Receptionist:</strong> Answers calls 24/7, handles inquiries, and routes callers.',
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
      answer: '<strong>Unified Omnichannel Communication:</strong><br>Connect and reply to customers across all major channels from a single unified inbox:<br>• <strong>WhatsApp Business API:</strong> Broadcasts, CRM, and chatbots.<br>• <strong>Instagram DM Automation:</strong> Story mentions, comment-to-DM, and auto-replies.<br>• <strong>Telegram Bot Platform:</strong> Custom bots and group broadcasts.<br>• <strong>Facebook Messenger:</strong> Integrated lead capture and nurturing.',
      actions: [
        { label: 'Instagram DM Automation', url: '/products/channels/instagram/', type: 'primary' },
        { label: 'Telegram Bot Platform', url: '/products/channels/telegram/', type: 'secondary' },
        { label: 'Facebook Messenger', url: '/products/channels/facebook/', type: 'secondary' }
      ]
    },
    {
      id: 'integrations_shopify_crm',
      intent: 'integrations_ecommerce',
      keywords: ['shopify', 'woocommerce', 'ecommerce', 'integration', 'connect', 'crm', 'zoho', 'hubspot', 'sheets', 'google sheet', 'google forms', 'calendar', 'webhook', 'api'],
      title: 'E-commerce, CRM & Webhook Integrations',
      answer: '<strong>1-Click E-Commerce & CRM Integrations:</strong><br>• <strong>Shopify & WooCommerce:</strong> Abandoned cart recovery, automated COD verification, order tracking.<br>• <strong>Google Sheets & Forms:</strong> Instant WhatsApp message whenever a form is submitted or row added.<br>• <strong>CRMs:</strong> Direct sync with Zoho, HubSpot, Salesforce, LeadSquared, and custom webhooks.<br>• <strong>REST APIs:</strong> Connect any custom website or database via developer webhooks.',
      actions: [
        { label: 'Shopify Integration', url: '/solutions/shopify/', type: 'primary' },
        { label: 'All Integrations', url: '/integrations/', type: 'secondary' },
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20I%20want%20to%20integrate%20with%20Shopify.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'business_leads',
      intent: 'b2b_business_leads',
      keywords: ['leads', 'business leads', 'pan india', 'database', 'panindiadata', 'data marketplace', 'b2b leads', 'customer data', 'buyers', 'verified data', 'lead generation'],
      title: 'Pan-India Business Leads Database (12 Categories)',
      answer: '<strong>Pan-India Verified Business Leads:</strong><br>• <strong>12 High-Converting Categories:</strong> Real Estate, Automobiles, E-Commerce, Healthcare, BFSI, Education, IT/Software, Manufacturing, Food & Beverage, Travel, Advertising, and B2B Suppliers.<br>• <strong>Verified Contacts:</strong> Active WhatsApp phone numbers, city, company, and key decision makers.<br>• <strong>Direct Integration:</strong> Broadcast offers directly to verified leads via HelloBotz.',
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
      answer: '<strong>WhatsApp Official Green Tick Verification:</strong><br>• Displays your business brand name instead of a phone number even if the user has not saved your contact.<br>• <strong>Requirements:</strong> Meta Business Verification, working business website, and brand notability.<br>• <strong>Free Assistance:</strong> HelloBotz handles your official application with Meta at zero extra service fee!',
      actions: [
        { label: 'Green Tick Guide', url: '/products/whatsapp-blue-tick/', type: 'primary' },
        { label: 'Apply via WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%2C%20I%20want%20to%20apply%20for%20WhatsApp%20Green%20Tick%20verification.', type: 'wa', target: '_blank' }
      ]
    },
    {
      id: 'human_contact_sales',
      intent: 'talk_to_human',
      keywords: ['talk to human', 'human', 'agent', 'sales', 'speak', 'call', 'support', 'contact', 'phone number', 'email', 'office', 'bangalore', 'address', 'real person', 'customer care'],
      title: 'Talk to Our Team & Human Support',
      answer: '<strong>Connect with Our Specialist Team in Bangalore:</strong><br>• <strong>WhatsApp:</strong> +91 80508 54445 (Instant Replies)<br>• <strong>Phone:</strong> +91 80508 54445<br>• <strong>Sales Email:</strong> mail@hellobotz.com<br>• <strong>Support Email:</strong> support@hellobotz.com<br>• <strong>Office:</strong> Bangalore, Karnataka, India',
      actions: [
        { label: 'Chat on WhatsApp', url: 'https://wa.me/' + CONFIG.whatsappNumber + '?text=Hi%20HelloBotz%20team%2C%20I%20would%20like%20to%20speak%20with%20a%20sales%20representative.', type: 'wa', target: '_blank' },
        { label: 'Call Us Now', url: 'tel:' + CONFIG.phoneNumber, type: 'secondary' },
        { label: 'Request a Callback', action: 'openCallback', type: 'secondary' }
      ]
    },
    {
      id: 'free_trial_signup',
      intent: 'free_trial_onboarding',
      keywords: ['free trial', 'trial', 'sign up', 'register', 'create account', 'start', 'get started', 'demo', 'login', 'setup time', 'how to start'],
      title: 'Get Started with 7-Day Free Trial',
      answer: '<strong>Start Free Today with HelloBotz:</strong><br>• <strong>7-Day Free Trial:</strong> Explore all features with zero risk.<br>• <strong>No Credit Card Required:</strong> Instant activation in less than 3 minutes.<br>• <strong>Dedicated Onboarding:</strong> Full setup support from our engineers.',
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
          answer: '👋 <strong>Hello! Welcome to HelloBotz.</strong><br><br>Which service or platform are you looking for today? Please pick an option below or type your custom requirement:',
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
          answer: '😊 <strong>You are very welcome!</strong><br><br>Feel free to ask anything else, explore our services, or chat directly with our team on WhatsApp.',
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
        if (speechText) speechText.textContent = "✨ Let's chat!";
      } else if (emotion === 'bored') {
        character.classList.add('state-bored');
        if (speechText) speechText.textContent = "💤 HelloBotz is here to help!";
      } else {
        if (speechText) speechText.textContent = "👋 Hi! How can I help?";
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

      var menuBtnHtml = '';
      if (data.showMenuBtn) {
        menuBtnHtml = '<button type="button" class="bot-btn-menu bot-action-show-menu"><span>☰</span> Explore Services Menu</button>';
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
        answer: '👋 <strong>Hello! Welcome to HelloBotz.</strong><br><br>Which service or platform are you looking for today?',
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
