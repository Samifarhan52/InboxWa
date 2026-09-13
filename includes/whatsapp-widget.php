<?php
/**
 * HELLOBOTZ - Interactive AI Robot Character & Omnichannel Assistant
 * Character features real-time emotion states (blinking, getting bored, excited on hover/click)
 * and opens a compact chatbox that starts with greeting from HelloBotz.
 */
require_once dirname(__DIR__) . '/config/cms.php';
$waWidgetNum = cms_setting('support_whatsapp', '918050854445');
$waWidgetPhone = cms_setting('phone_number', '+91 80508 54445');
$waWidgetSalesMail = cms_setting('sales_email', 'mail@inboxwa.com');
$waWidgetSupportMail = cms_setting('support_email', 'support@inboxwa.com');
?>
<!-- HELLOBOTZ INTERACTIVE ROBOT CHATBOT WIDGET -->
<link rel="stylesheet" href="/assets/css/robot-chatbot.css?v=3">

<div class="inboxwa-robot-widget wa-widget" id="inboxwa-robot-widget">
  
  <!-- DYNAMIC SPEECH TEASER BUBBLE -->
  <div class="hellobotz-speech-bubble" aria-label="Chat with HelloBotz">
    <span class="speech-status-dot"></span>
    <span class="hellobotz-speech-text">👋 Hi! I'm HelloBotz</span>
  </div>

  <!-- COMPACT CHATBOX WINDOW -->
  <div class="inboxwa-chatbox wa-widget-panel" role="dialog" aria-label="HelloBotz AI Assistant">
    
    <!-- CHATBOX HEADER -->
    <div class="inboxwa-chat-header">
      <div class="inboxwa-chat-header-robot">
        <div class="header-robot-avatar">
          <svg viewBox="0 0 36 36" width="24" height="24" fill="none">
            <path d="M18 4v4" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
            <circle cx="18" cy="3" r="2.2" fill="#10B981"/>
            <rect x="6" y="8" width="24" height="20" rx="7" fill="#FFFFFF"/>
            <rect x="3" y="14" width="3" height="8" rx="1.5" fill="#C7D2FE"/>
            <rect x="30" y="14" width="3" height="8" rx="1.5" fill="#C7D2FE"/>
            <rect x="9" y="12" width="18" height="10" rx="4" fill="#1E1B4B"/>
            <circle cx="13.5" cy="17" r="2.2" fill="#06B6D4"/>
            <circle cx="22.5" cy="17" r="2.2" fill="#06B6D4"/>
            <path d="M14 23.5c1 1 2.5 1.5 4 1.5s3-.5 4-1.5" stroke="#8B5CF6" stroke-width="1.6" stroke-linecap="round"/>
          </svg>
          <span class="header-online-dot"></span>
        </div>
        <div class="header-robot-info">
          <h4>HelloBotz <span class="header-robot-tag">AI Agent</span></h4>
          <p>InboxWa 24/7 Official Assistant</p>
        </div>
      </div>
      <div class="header-actions">
        <button type="button" class="header-action-btn header-reset-btn" title="Restart conversation" aria-label="Restart conversation">
          <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="1 4 1 10 7 10"/>
            <path d="M3.51 15a9 9 0 102.13-9.36L1 10"/>
          </svg>
        </button>
        <button type="button" class="header-action-btn header-close-btn" title="Close chat" aria-label="Close chat">
          <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"/>
            <line x1="6" y1="6" x2="18" y2="18"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- ALIGNED QUICK CHANNELS STRIP -->
    <div class="inboxwa-quick-channels" aria-label="Direct contact options">
      <!-- WhatsApp Direct -->
      <a href="https://wa.me/<?php echo urlencode($waWidgetNum); ?>?text=Hi%20HelloBotz%2C%20I%20am%20interested%20in%20InboxWa%20WhatsApp%20Automation." target="_blank" rel="noopener" class="quick-channel-item qc-wa" title="Open WhatsApp Chat">
        <svg viewBox="0 0 24 24" width="13" height="13" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        WhatsApp
      </a>

      <!-- Call Now -->
      <a href="tel:<?php echo htmlspecialchars($waWidgetPhone); ?>" class="quick-channel-item qc-call" title="Call Us Direct">
        <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
        Call Us
      </a>

      <!-- Book Demo -->
      <button type="button" class="quick-channel-item qc-demo btn-demo-open" title="Book Live Demo">
        <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
        Book Demo
      </button>

      <!-- Callback -->
      <button type="button" class="quick-channel-item qc-callback btn-callback-open" title="Request Callback">
        <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
        Callback
      </button>

      <!-- Pricing Plans -->
      <a href="/pricing/" class="quick-channel-item qc-pricing" title="View Pricing">
        <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
        Pricing
      </a>

      <!-- Support Email -->
      <a href="mailto:<?php echo htmlspecialchars($waWidgetSupportMail); ?>" class="quick-channel-item" title="Email Support">
        <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/></svg>
        Email
      </a>
    </div>

    <!-- CHAT MESSAGES STREAM -->
    <div class="inboxwa-chat-body" role="log" aria-live="polite">
      <!-- Dynamic messages injected by robot-chatbot.js -->
    </div>

    <!-- CHAT INPUT FOOTER -->
    <div class="inboxwa-chat-footer">
      <form class="inboxwa-chat-form" action="javascript:void(0);">
        <input type="text" class="inboxwa-chat-input" placeholder="Ask HelloBotz about WhatsApp API, Pricing..." autocomplete="off" aria-label="Ask HelloBotz a question">
        <button type="submit" class="inboxwa-chat-submit" aria-label="Send question">
          <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="22" y1="2" x2="11" y2="13"/>
            <polygon points="22 2 15 22 11 13 2 9 22 2"/>
          </svg>
        </button>
      </form>
      <div class="inboxwa-chat-trust">
        <span>⚡ Powered by HelloBotz &bull; InboxWa Official Meta Cloud API</span>
      </div>
    </div>
  </div>

  <!-- HELLOBOTZ INTERACTIVE ROBOT MASCOT TRIGGER -->
  <button class="hellobotz-trigger" id="hellobotz-trigger-btn" aria-label="Chat with HelloBotz Robot AI" type="button">
    
    <!-- Living Animated Character -->
    <div class="hellobotz-character">
      <!-- Floating Sleep ZZZ (visible in bored state) -->
      <div class="hb-sleep-zzz">z Z</div>

      <!-- HELLOBOTZ SVG CHARACTER -->
      <svg class="hellobotz-svg" viewBox="0 0 56 56" fill="none">
        <!-- Antenna Stem -->
        <path d="M28 8v7" stroke="#475569" stroke-width="2.8" stroke-linecap="round"/>
        <!-- Glowing Antenna Gem (changes color with emotions) -->
        <circle cx="28" cy="7" r="4.2" class="hb-antenna-glow" fill="#22C55E"/>
        <circle cx="26.8" cy="5.8" r="1.4" fill="#FFFFFF" fill-opacity="0.8"/>

        <!-- Ears/Side Bolts -->
        <rect x="5" y="24" width="4.5" height="13" rx="2" fill="#94A3B8"/>
        <rect x="46.5" y="24" width="4.5" height="13" rx="2" fill="#94A3B8"/>

        <!-- Main Robot Head Shell -->
        <rect x="8.5" y="14" width="39" height="34" rx="12" fill="url(#hb-head-gradient)"/>
        <!-- Head Inner Bevel Highlight -->
        <rect x="10" y="15.5" width="36" height="31" rx="10.5" stroke="#FFFFFF" stroke-opacity="0.6" stroke-width="1.2"/>

        <!-- Black Digital Screen Visor -->
        <rect x="13" y="20.5" width="30" height="17" rx="6.5" fill="#0F172A"/>

        <!-- 1. NORMAL EYES (Round glowing cyan eyes with digital reflections) -->
        <g class="hb-eye-normal">
          <circle cx="21" cy="28.5" r="3.4" fill="#06B6D4"/>
          <circle cx="20" cy="27.3" r="1.2" fill="#FFFFFF"/>
          <circle cx="35" cy="28.5" r="3.4" fill="#06B6D4"/>
          <circle cx="34" cy="27.3" r="1.2" fill="#FFFFFF"/>
        </g>

        <!-- 2. EXCITED EYES (Happy glowing arcs ^ ^) -->
        <g class="hb-eye-excited">
          <path d="M17.5 30c1.2-3.2 4.8-3.2 6 0" stroke="#06B6D4" stroke-width="2.8" stroke-linecap="round"/>
          <path d="M32.5 30c1.2-3.2 4.8-3.2 6 0" stroke="#06B6D4" stroke-width="2.8" stroke-linecap="round"/>
        </g>

        <!-- 3. BORED / SLEEPY EYES (Droopy sleepy eyelids) -->
        <g class="hb-eye-bored">
          <path d="M18 29.5h6" stroke="#94A3B8" stroke-width="2.5" stroke-linecap="round"/>
          <path d="M32 29.5h6" stroke="#94A3B8" stroke-width="2.5" stroke-linecap="round"/>
        </g>

        <!-- Friendly Robot Smile -->
        <path class="hb-mouth" d="M22 41.5c1.8 2 4.2 2.6 6 2.6s4.2-.6 6-2.6" stroke="#8B5CF6" stroke-width="2.2" stroke-linecap="round"/>

        <!-- Gradients -->
        <defs>
          <linearGradient id="hb-head-gradient" x1="8.5" y1="14" x2="47.5" y2="48" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFFFFF"/>
            <stop offset="0.75" stop-color="#F1F5F9"/>
            <stop offset="1" stop-color="#E2E8F0"/>
          </linearGradient>
        </defs>
      </svg>
    </div>

    <!-- Close Icon Circle (shown when open) -->
    <div class="hellobotz-close-circle">
      <svg viewBox="0 0 24 24">
        <line x1="18" y1="6" x2="6" y2="18"/>
        <line x1="6" y1="6" x2="18" y2="18"/>
      </svg>
    </div>

  </button>

</div>
