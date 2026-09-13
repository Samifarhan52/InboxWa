<?php
/**
 * InboxWa AI Robot Chatbot & Omnichannel Contact System
 * Replaces simple floating icon with an interactive Robot Chatbot with direct WhatsApp/Call links.
 */
require_once dirname(__DIR__) . '/config/cms.php';
$waWidgetNum = cms_setting('support_whatsapp', '918050854445');
$waWidgetPhone = cms_setting('phone_number', '+91 80508 54445');
$waWidgetSalesMail = cms_setting('sales_email', 'mail@inboxwa.com');
$waWidgetSupportMail = cms_setting('support_email', 'support@inboxwa.com');
?>
<!-- INBOXWA AI ROBOT CHATBOT WIDGET -->
<link rel="stylesheet" href="/assets/css/robot-chatbot.css?v=1">

<div class="inboxwa-robot-widget wa-widget" id="inboxwa-robot-widget">
  
  <!-- FLOATING TEASER BADGE -->
  <div class="inboxwa-robot-badge" aria-label="Open AI Assistant">
    <div class="badge-icon">
      <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor">
        <circle cx="12" cy="12" r="3"/>
        <path d="M12 2a2 2 0 012 2v2a8 8 0 017.9 7H22a1 1 0 010 2h-.1A8 8 0 0114 21.9V23a1 1 0 01-2 0v-1.1A8 8 0 014.1 15H3a1 1 0 010-2h1.1A8 8 0 0112 6V4a2 2 0 01-2-2z"/>
      </svg>
    </div>
    <span>Ask Robot AI</span>
    <span class="badge-dot"></span>
    <button type="button" class="inboxwa-robot-badge-close" aria-label="Dismiss">&times;</button>
  </div>

  <!-- CHATBOX MODAL WINDOW -->
  <div class="inboxwa-chatbox wa-widget-panel" role="dialog" aria-label="InboxWa AI Robot Chatbot">
    
    <!-- CHATBOX HEADER -->
    <div class="inboxwa-chat-header">
      <div class="inboxwa-chat-header-robot">
        <div class="header-robot-avatar">
          <!-- Robot Face Avatar -->
          <svg viewBox="0 0 36 36" width="24" height="24" fill="none">
            <!-- Antenna -->
            <path d="M18 4v4" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
            <circle cx="18" cy="3" r="2" fill="#10B981"/>
            <!-- Head -->
            <rect x="6" y="8" width="24" height="20" rx="7" fill="#FFFFFF" fill-opacity="0.95"/>
            <!-- Ears -->
            <rect x="3" y="14" width="3" height="8" rx="1.5" fill="#C7D2FE"/>
            <rect x="30" y="14" width="3" height="8" rx="1.5" fill="#C7D2FE"/>
            <!-- Visor -->
            <rect x="9" y="12" width="18" height="10" rx="4" fill="#1E1B4B"/>
            <!-- Glowing Eyes -->
            <circle cx="13.5" cy="17" r="2.2" fill="#06B6D4"/>
            <circle cx="22.5" cy="17" r="2.2" fill="#06B6D4"/>
            <!-- Smile -->
            <path d="M14 23.5c1 1 2.5 1.5 4 1.5s3-.5 4-1.5" stroke="#6366F1" stroke-width="1.6" stroke-linecap="round"/>
          </svg>
          <span class="header-online-dot"></span>
        </div>
        <div class="header-robot-info">
          <h4>InboxWa Robot AI <span class="header-robot-tag">Assistant</span></h4>
          <p>Instant Answers &bull; 24/7 Official Support</p>
        </div>
      </div>
      <div class="header-actions">
        <button type="button" class="header-action-btn header-reset-btn" title="Restart conversation" aria-label="Restart conversation">
          <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="1 4 1 10 7 10"/>
            <path d="M3.51 15a9 9 0 102.13-9.36L1 10"/>
          </svg>
        </button>
        <button type="button" class="header-action-btn header-close-btn" title="Close chat" aria-label="Close chat">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"/>
            <line x1="6" y1="6" x2="18" y2="18"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- QUICK ACTIONS STRIP (INTEGRATING ALL EXISTING CHANNELS) -->
    <div class="inboxwa-quick-channels" aria-label="Direct contact options">
      <!-- WhatsApp Direct -->
      <a href="https://wa.me/<?php echo urlencode($waWidgetNum); ?>?text=Hi%20InboxWa%2C%20I%20am%20interested%20in%20your%20WhatsApp%20Automation%20and%20AI%20Chatbot%20services." target="_blank" rel="noopener" class="quick-channel-item qc-wa" title="Open WhatsApp Chat">
        <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        WhatsApp
      </a>

      <!-- Call Now Direct -->
      <a href="tel:<?php echo htmlspecialchars($waWidgetPhone); ?>" class="quick-channel-item qc-call" title="Call Us Direct">
        <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
        Call Us
      </a>

      <!-- Book Demo -->
      <button type="button" class="quick-channel-item qc-demo btn-demo-open" title="Book a 1-on-1 Demo">
        <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
        Book Demo
      </button>

      <!-- Request Callback -->
      <button type="button" class="quick-channel-item qc-callback btn-callback-open" title="Request Immediate Callback">
        <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
        Callback
      </button>

      <!-- Pricing Plans -->
      <a href="/pricing/" class="quick-channel-item qc-pricing" title="View Pricing & Plans">
        <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
        Pricing
      </a>

      <!-- Support Email -->
      <a href="mailto:<?php echo htmlspecialchars($waWidgetSupportMail); ?>" class="quick-channel-item" title="Email Support">
        <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/></svg>
        Email
      </a>
    </div>

    <!-- CHAT MESSAGES BODY -->
    <div class="inboxwa-chat-body" role="log" aria-live="polite">
      <!-- Dynamic conversation bubbles injected by robot-chatbot.js -->
    </div>

    <!-- CHAT INPUT FOOTER -->
    <div class="inboxwa-chat-footer">
      <form class="inboxwa-chat-form" action="javascript:void(0);">
        <input type="text" class="inboxwa-chat-input" placeholder="Ask Robot AI about WhatsApp API, Pricing..." autocomplete="off" aria-label="Type your question">
        <button type="submit" class="inboxwa-chat-submit" aria-label="Send message">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="22" y1="2" x2="11" y2="13"/>
            <polygon points="22 2 15 22 11 13 2 9 22 2"/>
          </svg>
        </button>
      </form>
      <div class="inboxwa-chat-trust">
        <svg viewBox="0 0 24 24" width="11" height="11" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
        <span>InboxWa Official Meta Cloud API Partner</span>
      </div>
    </div>
  </div>

  <!-- FLOATING ROBOT LAUNCHER BUTTON -->
  <button class="inboxwa-robot-trigger wa-widget-btn" aria-label="Open AI Robot Chatbot" type="button">
    <!-- SVG ROBOT MASCOT ICON -->
    <div class="robot-svg-wrap">
      <svg viewBox="0 0 44 44" width="38" height="38" fill="none">
        <!-- Robot Antenna with Glowing Pulsing Tip -->
        <path d="M22 6v5" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round"/>
        <circle cx="22" cy="5" r="3.2" class="robot-antenna-tip" fill="#22C55E"/>
        <!-- Robot Ears/Bolts -->
        <rect x="4" y="18" width="4" height="10" rx="2" fill="#E0E7FF"/>
        <rect x="36" y="18" width="4" height="10" rx="2" fill="#E0E7FF"/>
        <!-- Robot Head Shell -->
        <rect x="8" y="11" width="28" height="25" rx="8" fill="#FFFFFF"/>
        <!-- Visor Glass -->
        <rect x="11.5" y="16" width="21" height="12" rx="4.5" fill="#0F172A"/>
        <!-- Glowing Digital Eyes -->
        <circle cx="16.5" cy="22" r="2.8" class="robot-eye" fill="#06B6D4"/>
        <circle cx="27.5" cy="22" r="2.8" class="robot-eye" fill="#06B6D4"/>
        <!-- Friendly Digital Mouth -->
        <path d="M17 30c1.5 1.5 3.5 2 5 2s3.5-.5 5-2" stroke="#8B5CF6" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </div>
    <!-- Close Icon (when chatbox is open) -->
    <svg class="robot-icon-close" viewBox="0 0 24 24">
      <line x1="18" y1="6" x2="6" y2="18"/>
      <line x1="6" y1="6" x2="18" y2="18"/>
    </svg>
  </button>

</div>
