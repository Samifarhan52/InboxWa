<?php
$basePath = "";
require_once __DIR__ . '/config/cms.php';

$pageTitle = cms_setting('site_title', 'InboxWa') . ' – ' . cms_setting('site_tagline', 'Scale Your Sales and Support on WhatsApp');
$pageDescription = 'Official WhatsApp Business API platform with shared inbox, AI chatbots, visual flow builder, bulk broadcasts, and CRM integrations.';
$canonicalUrl = 'https://inboxwa.com/';

include __DIR__ . '/includes/header.php';
?>

<style>
  :root {
    --wa-green: #059669;
    --wa-green-hover: #047857;
    --wa-dark: #0f172a;
    --wa-slate: #1e293b;
  }

  .cw-main-page {
    background: #ffffff;
    color: #1e293b;
    overflow-x: hidden;
    width: 100%;
    max-width: 100vw;
    box-sizing: border-box;
  }

  /* Hero Section */
  .cw-hero-wrap {
    padding: 2.5rem 1.25rem 4.5rem;
    max-width: 1240px;
    width: 100%;
    margin: 0 auto;
    box-sizing: border-box;
  }
  .cw-hero-grid {
    display: grid;
    grid-template-columns: 1.15fr 0.85fr;
    gap: 3.5rem;
    align-items: center;
  }
  .cw-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(5, 150, 105, 0.1);
    border: 1px solid rgba(5, 150, 105, 0.25);
    color: #059669;
    font-size: 0.85rem;
    font-weight: 700;
    padding: 0.4rem 0.95rem;
    border-radius: 999px;
    margin-bottom: 1.25rem;
  }
  .cw-hero-title {
    font-size: clamp(2.25rem, 4.5vw, 3.65rem);
    font-weight: 800;
    line-height: 1.15;
    color: #0f172a;
    letter-spacing: -0.02em;
    margin-bottom: 1.25rem;
  }
  .cw-hero-title .highlight-green {
    color: #059669;
    background: linear-gradient(135deg, #059669 0%, #10b981 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .cw-hero-desc {
    font-size: 1.15rem;
    line-height: 1.65;
    color: #475569;
    margin-bottom: 2rem;
    max-width: 560px;
  }
  .cw-hero-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 2rem;
  }
  .cw-btn-primary {
    background: #059669;
    color: #ffffff;
    font-weight: 700;
    font-size: 1rem;
    padding: 0.85rem 1.85rem;
    border-radius: 999px;
    text-decoration: none;
    box-shadow: 0 10px 25px -5px rgba(5, 150, 105, 0.4);
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
  }
  .cw-btn-primary:hover {
    background: #047857;
    transform: translateY(-2px);
    box-shadow: 0 15px 30px -5px rgba(5, 150, 105, 0.5);
    color: #ffffff;
  }
  .cw-btn-secondary {
    background: #ffffff;
    color: #0f172a;
    font-weight: 600;
    font-size: 1rem;
    padding: 0.85rem 1.75rem;
    border-radius: 999px;
    border: 1px solid #cbd5e1;
    text-decoration: none;
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    cursor: pointer;
  }
  .cw-btn-secondary:hover {
    background: #f8fafc;
    border-color: #94a3b8;
    color: #0f172a;
    transform: translateY(-2px);
  }
  .cw-trust-row {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    flex-wrap: wrap;
    font-size: 0.88rem;
    font-weight: 600;
    color: #64748b;
  }
  .cw-trust-item {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
  }

  /* Interactive 3D Mockup Phone Stage */
  .cw-phone-wrapper {
    position: relative;
    max-width: 385px;
    margin: 0 auto;
    perspective: 1200px;
    transform-style: preserve-3d;
  }
  
  /* Glowing Ambient Aura */
  .cw-phone-aura {
    position: absolute;
    inset: -25px;
    border-radius: 60px;
    background: radial-gradient(circle at 50% 50%, rgba(16, 185, 129, 0.28) 0%, rgba(124, 58, 237, 0.18) 45%, rgba(6, 182, 212, 0.12) 65%, transparent 80%);
    filter: blur(35px);
    z-index: 1;
    pointer-events: none;
    animation: cwAuraPulse 6s ease-in-out infinite alternate;
  }
  @keyframes cwAuraPulse {
    0% { transform: scale(0.95); opacity: 0.7; }
    100% { transform: scale(1.06); opacity: 1; }
  }

  /* Phone Device Frame (Titanium Slate) */
  .cw-phone-device {
    background: #0d151c;
    border-radius: 44px;
    padding: 10px 10px 8px;
    box-shadow: 0 30px 80px -15px rgba(0, 0, 0, 0.6), 0 0 0 1.5px rgba(255, 255, 255, 0.12), inset 0 1px 2px rgba(255, 255, 255, 0.25);
    border: 3px solid #22303c;
    position: relative;
    z-index: 2;
    transform-style: preserve-3d;
    transition: transform 0.2s cubic-bezier(0.2, 0.8, 0.2, 1), box-shadow 0.25s ease;
    will-change: transform;
  }

  /* Glare Sweep Reflection */
  .cw-phone-glare {
    position: absolute;
    top: 0;
    left: -80%;
    width: 60%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.04), transparent);
    transform: skewX(-25deg);
    pointer-events: none;
    z-index: 10;
  }

  /* Hardware Top Bar (Status Clock + Dynamic Island) */
  .cw-phone-topbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 4px 14px 6px;
    color: #e9edef;
    font-size: 0.72rem;
    font-weight: 600;
  }
  .cw-status-time {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    letter-spacing: -0.02em;
  }
  .cw-dynamic-island {
    background: #000000;
    border-radius: 20px;
    height: 18px;
    width: 92px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    box-shadow: inset 0 0 2px rgba(255, 255, 255, 0.15);
  }
  .cw-island-camera {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #111a24;
    border: 1px solid #1f2c38;
    position: relative;
  }
  .cw-island-camera::after {
    content: '';
    position: absolute;
    top: 1px;
    left: 1px;
    width: 2px;
    height: 2px;
    border-radius: 50%;
    background: rgba(56, 189, 248, 0.8);
  }
  .cw-island-speaker {
    width: 28px;
    height: 3px;
    border-radius: 2px;
    background: #1c2630;
  }
  .cw-status-icons {
    display: flex;
    align-items: center;
    gap: 5px;
    opacity: 0.85;
  }
  .cw-status-5g {
    font-size: 0.65rem;
    font-weight: 700;
    letter-spacing: -0.04em;
  }

  /* Phone Internal Screen */
  .cw-phone-screen {
    background: #0b141a;
    border-radius: 34px;
    height: 485px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    position: relative;
    border: 1px solid rgba(255, 255, 255, 0.05);
  }

  /* WhatsApp Header */
  .cw-wa-header {
    background: #1f2c34;
    padding: 9px 12px;
    display: flex;
    align-items: center;
    gap: 9px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    flex-shrink: 0;
  }
  .cw-wa-avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: linear-gradient(135deg, #059669, #10b981);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    position: relative;
    flex-shrink: 0;
    box-shadow: 0 2px 8px rgba(16, 185, 129, 0.4);
  }
  .cw-wa-avatar-badge {
    position: absolute;
    bottom: -1px;
    right: -1px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #10b981;
    border: 2px solid #1f2c34;
  }
  .cw-wa-header-info {
    flex: 1;
    min-width: 0;
  }
  .cw-wa-title-row {
    display: flex;
    align-items: center;
    gap: 4px;
  }
  .cw-wa-title-row strong {
    color: #e9edef;
    font-size: 0.83rem;
    font-weight: 700;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .cw-verified-check {
    flex-shrink: 0;
  }
  .cw-wa-subtitle {
    color: #8696a0;
    font-size: 0.68rem;
    display: flex;
    align-items: center;
    gap: 4px;
    margin-top: 1px;
  }
  .cw-live-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #10b981;
    display: inline-block;
    box-shadow: 0 0 6px rgba(16, 185, 129, 0.8);
  }
  .cw-wa-header-tools {
    display: flex;
    align-items: center;
    gap: 4px;
  }
  .cw-tool-btn {
    background: transparent;
    border: none;
    color: #8696a0;
    cursor: pointer;
    padding: 6px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
  }
  .cw-tool-btn:hover {
    color: #e9edef;
    background: rgba(255, 255, 255, 0.08);
  }

  /* WhatsApp Messages Scroll Area */
  .cw-wa-body {
    flex: 1;
    padding: 10px 12px;
    display: flex;
    flex-direction: column;
    gap: 8px;
    overflow-y: auto;
    scroll-behavior: smooth;
    background-color: #0b141a;
    background-image: radial-gradient(rgba(255, 255, 255, 0.06) 1px, transparent 1px);
    background-size: 16px 16px;
  }
  .cw-wa-body::-webkit-scrollbar {
    width: 4px;
  }
  .cw-wa-body::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.12);
    border-radius: 4px;
  }

  /* Chat Bubbles */
  .cw-bubble {
    max-width: 86%;
    padding: 8px 11px;
    border-radius: 12px;
    font-size: 0.78rem;
    line-height: 1.42;
    position: relative;
    word-break: break-word;
    animation: cwBubblePop 0.28s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
  }
  @keyframes cwBubblePop {
    from { opacity: 0; transform: translateY(8px) scale(0.96); }
    to { opacity: 1; transform: translateY(0) scale(1); }
  }
  .cw-bubble.user {
    align-self: flex-end;
    background: #005c4b;
    color: #e9edef;
    border-bottom-right-radius: 2px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
  }
  .cw-bubble.bot {
    align-self: flex-start;
    background: #1f2c34;
    color: #e9edef;
    border-bottom-left-radius: 2px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
  }
  .cw-bubble-meta {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 3px;
    margin-top: 3px;
    font-size: 0.63rem;
    color: #8696a0;
  }
  .cw-ticks {
    font-size: 0.7rem;
    letter-spacing: -2px;
    font-weight: 700;
  }
  .cw-ticks.double-blue {
    color: #53bdeb;
  }
  .cw-ticks.grey {
    color: #8696a0;
  }

  /* Interactive Bot CTA Action Button */
  .cw-bot-action-btn {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    background: rgba(16, 185, 129, 0.15);
    border: 1px solid rgba(16, 185, 129, 0.35);
    color: #34d399;
    border-radius: 8px;
    padding: 5px 9px;
    font-size: 0.72rem;
    font-weight: 600;
    margin-top: 6px;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.2s;
  }
  .cw-bot-action-btn:hover {
    background: #059669;
    color: #ffffff;
    border-color: #10b981;
    transform: translateY(-1px);
  }

  /* Typing Indicator Bubble */
  .cw-typing-bubble {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 12px;
  }
  .cw-typing-dots {
    display: inline-flex;
    align-items: center;
    gap: 3px;
  }
  .cw-typing-dots span {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #10b981;
    display: inline-block;
    animation: cwBounceDot 1.4s infinite ease-in-out;
  }
  .cw-typing-dots span:nth-child(2) { animation-delay: 0.2s; }
  .cw-typing-dots span:nth-child(3) { animation-delay: 0.4s; }
  @keyframes cwBounceDot {
    0%, 80%, 100% { transform: translateY(0); opacity: 0.4; }
    40% { transform: translateY(-5px); opacity: 1; }
  }
  .cw-typing-label {
    font-size: 0.7rem;
    color: #8696a0;
    font-style: italic;
  }

  /* Quick Suggestion Chips Carousel */
  .cw-chips-wrap {
    background: rgba(11, 20, 26, 0.98);
    border-top: 1px solid rgba(255, 255, 255, 0.06);
    padding: 6px 10px 4px;
    flex-shrink: 0;
    position: relative;
    z-index: 15;
  }
  .cw-chips-hint {
    display: flex;
    align-items: center;
    gap: 4px;
    font-size: 0.65rem;
    color: #8696a0;
    margin-bottom: 4px;
    font-weight: 600;
  }
  .cw-chips-scroll {
    display: flex;
    gap: 6px;
    overflow-x: auto;
    white-space: nowrap;
    scrollbar-width: none;
    -ms-overflow-style: none;
    padding-bottom: 3px;
  }
  .cw-chips-scroll::-webkit-scrollbar {
    display: none;
  }
  .cw-chip {
    background: rgba(16, 185, 129, 0.14);
    border: 1px solid rgba(16, 185, 129, 0.35);
    color: #e9edef;
    border-radius: 14px;
    font-size: 0.72rem;
    font-weight: 600;
    padding: 5px 11px;
    cursor: pointer;
    transition: all 0.2s ease;
    flex-shrink: 0;
    position: relative;
    z-index: 20;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  }
  .cw-chip:hover {
    background: #059669;
    border-color: #10b981;
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(16, 185, 129, 0.4);
  }
  .cw-chip:active {
    transform: scale(0.96);
  }

  /* WhatsApp Chat Input Footer */
  .cw-chat-footer {
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 7px 10px 9px;
    background: #1f2c34;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    flex-shrink: 0;
    position: relative;
    z-index: 20;
  }
  .cw-chat-btn-emoji {
    background: transparent;
    border: none;
    font-size: 1.15rem;
    cursor: pointer;
    padding: 3px;
    line-height: 1;
    opacity: 0.85;
    transition: opacity 0.2s, transform 0.2s;
    position: relative;
    z-index: 25;
  }
  .cw-chat-btn-emoji:hover {
    opacity: 1;
    transform: scale(1.15);
  }
  .cw-chat-input {
    flex: 1;
    background: #2a3942;
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 20px;
    padding: 8px 14px;
    color: #ffffff;
    font-size: 0.8rem;
    outline: none;
    transition: all 0.2s ease;
    cursor: text;
    user-select: text;
    -webkit-user-select: text;
    position: relative;
    z-index: 25;
  }
  .cw-chat-input:focus {
    border-color: #00a884;
    background: #32434d;
    box-shadow: 0 0 0 2px rgba(0, 168, 132, 0.3);
  }
  .cw-chat-input::placeholder {
    color: #8696a0;
  }
  .cw-chat-send {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    background: #00a884;
    border: none;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s ease;
    flex-shrink: 0;
    box-shadow: 0 2px 8px rgba(0, 168, 132, 0.4);
    position: relative;
    z-index: 25;
  }
  .cw-chat-send:hover {
    background: #10b981;
    transform: scale(1.1);
  }
  .cw-chat-send:active {
    transform: scale(0.94);
  }

  /* Bottom iOS Home Indicator */
  .cw-home-bar {
    width: 90px;
    height: 4px;
    border-radius: 3px;
    background: rgba(255, 255, 255, 0.25);
    margin: 4px auto 3px;
    flex-shrink: 0;
  }

  /* ==========================================================================
     INBOXWA INTERACTIVE ANIMATED FLOW BUILDER & SHOWCASE MODULES
     ========================================================================== */
  
  /* Hero Animated Teaser Box */
  .cw-hero-anim-box {
    margin-top: 1.25rem;
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 10px 14px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(226, 232, 240, 0.95);
    border-radius: 16px;
    box-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.08), 0 4px 6px -2px rgba(15, 23, 42, 0.03);
    cursor: pointer;
    transition: all 0.25s ease;
    user-select: none;
    max-width: 540px;
  }
  .cw-hero-anim-box:hover {
    transform: translateY(-2px);
    border-color: rgba(16, 185, 129, 0.5);
    box-shadow: 0 14px 30px -4px rgba(16, 185, 129, 0.15), 0 6px 12px -2px rgba(15, 23, 42, 0.06);
  }
  .cw-hero-anim-thumb {
    position: relative;
    width: 90px;
    height: 58px;
    border-radius: 10px;
    overflow: hidden;
    flex-shrink: 0;
    background: #0f172a;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.18);
  }
  .cw-hero-anim-video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  .cw-hero-anim-overlay {
    position: absolute;
    inset: 0;
    background: rgba(15, 23, 42, 0.25);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s ease;
  }
  .cw-hero-anim-box:hover .cw-hero-anim-overlay {
    background: rgba(15, 23, 42, 0.1);
  }
  .cw-hero-anim-play-icon {
    width: 26px;
    height: 26px;
    border-radius: 50%;
    background: #10b981;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-left: 2px;
    box-shadow: 0 3px 10px rgba(16, 185, 129, 0.5);
    transition: transform 0.25s ease;
  }
  .cw-hero-anim-box:hover .cw-hero-anim-play-icon {
    transform: scale(1.12);
  }
  .cw-hero-anim-live-tag {
    position: absolute;
    top: 4px;
    left: 4px;
    background: rgba(15, 23, 42, 0.8);
    backdrop-filter: blur(4px);
    color: #ffffff;
    font-size: 0.58rem;
    font-weight: 700;
    padding: 2px 5px;
    border-radius: 4px;
    display: flex;
    align-items: center;
    gap: 4px;
    letter-spacing: 0.02em;
  }
  .cw-hero-anim-details {
    flex: 1;
    min-width: 0;
  }
  .cw-hero-anim-title-row {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 2px;
    flex-wrap: wrap;
  }
  .cw-hero-anim-heading {
    font-size: 0.88rem;
    font-weight: 700;
    color: #0f172a;
  }
  .cw-hero-anim-pill {
    font-size: 0.65rem;
    font-weight: 700;
    color: #059669;
    background: #ecfdf5;
    border: 1px solid #a7f3d0;
    padding: 1px 7px;
    border-radius: 10px;
    letter-spacing: 0.02em;
  }
  .cw-hero-anim-sub {
    font-size: 0.76rem;
    color: #64748b;
    margin: 0;
    line-height: 1.35;
  }
  .cw-hero-anim-action {
    display: flex;
    align-items: center;
    padding-left: 2px;
  }
  .cw-hero-anim-expand-btn {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    background: #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #475569;
    transition: all 0.2s ease;
  }
  .cw-hero-anim-box:hover .cw-hero-anim-expand-btn {
    background: #ecfdf5;
    color: #059669;
  }

  /* Platform Showcase Section */
  .cw-platform-showcase-section {
    padding: 4.5rem 1.5rem 5rem;
    background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 60%, #ffffff 100%);
    position: relative;
    overflow: hidden;
  }
  .cw-showcase-container {
    max-width: 1140px;
    margin: 0 auto;
    position: relative;
  }
  .cw-showcase-header {
    text-align: center;
    max-width: 780px;
    margin: 0 auto 2.5rem;
  }
  .cw-showcase-pill {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 6px 14px;
    background: #ecfdf5;
    border: 1px solid #a7f3d0;
    border-radius: 30px;
    font-size: 0.78rem;
    font-weight: 700;
    color: #065f46;
    margin-bottom: 1rem;
    letter-spacing: 0.05em;
  }
  .cw-showcase-title {
    font-size: 2.35rem;
    font-weight: 800;
    color: #0f172a;
    line-height: 1.25;
    margin-bottom: 0.85rem;
    letter-spacing: -0.02em;
  }
  .cw-showcase-subtitle {
    font-size: 1.05rem;
    color: #64748b;
    line-height: 1.6;
    margin: 0;
  }
  .cw-showcase-tabs {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-bottom: 2.25rem;
    flex-wrap: wrap;
  }
  .cw-showcase-tab {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 10px 18px;
    font-size: 0.88rem;
    font-weight: 600;
    color: #475569;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s ease;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
  }
  .cw-showcase-tab:hover {
    border-color: #cbd5e1;
    color: #0f172a;
    transform: translateY(-1px);
  }
  .cw-showcase-tab.active {
    background: #0f172a;
    border-color: #0f172a;
    color: #ffffff;
    box-shadow: 0 4px 14px rgba(15, 23, 42, 0.2);
  }
  .cw-showcase-window-wrap {
    position: relative;
    max-width: 1040px;
    margin: 0 auto;
  }
  .cw-showcase-window {
    background: #ffffff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 25px 60px -15px rgba(15, 23, 42, 0.22), 0 0 0 1px rgba(15, 23, 42, 0.08);
  }
  .cw-window-titlebar {
    background: #0f172a;
    padding: 12px 18px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  }
  .cw-window-dots {
    display: flex;
    gap: 7px;
  }
  .cw-dot {
    width: 11px;
    height: 11px;
    border-radius: 50%;
  }
  .cw-dot.red { background: #ef4444; }
  .cw-dot.yellow { background: #f59e0b; }
  .cw-dot.green { background: #10b981; }
  .cw-window-url-bar {
    display: flex;
    align-items: center;
    gap: 7px;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.12);
    padding: 5px 14px;
    border-radius: 8px;
    color: #cbd5e1;
    font-size: 0.78rem;
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
    max-width: 480px;
    width: 100%;
    justify-content: center;
  }
  .cw-window-actions {
    display: flex;
    align-items: center;
  }
  .cw-window-expand {
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.15);
    color: #f1f5f9;
    padding: 5px 12px;
    border-radius: 7px;
    font-size: 0.74rem;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 6px;
    transition: background 0.2s;
  }
  .cw-window-expand:hover {
    background: rgba(255, 255, 255, 0.22);
  }
  .cw-window-screen {
    background: #0b0f19;
    position: relative;
    overflow: hidden;
  }
  .cw-tab-media {
    display: none;
    animation: cwFadeInMedia 0.35s ease;
  }
  .cw-tab-media.active {
    display: block;
  }
  @keyframes cwFadeInMedia {
    from { opacity: 0; transform: scale(0.995); }
    to { opacity: 1; transform: scale(1); }
  }
  .cw-showcase-media-elem {
    width: 100%;
    height: auto;
    max-height: 580px;
    object-fit: contain;
    display: block;
    background: #0b0f19;
    margin: 0 auto;
  }
  .cw-media-caption {
    padding: 14px 22px;
    background: #ffffff;
    border-top: 1px solid #e2e8f0;
    font-size: 0.88rem;
    color: #475569;
    display: flex;
    align-items: center;
    gap: 12px;
  }
  .cw-caption-badge {
    background: #10b981;
    color: #ffffff;
    font-size: 0.72rem;
    font-weight: 700;
    padding: 3px 8px;
    border-radius: 6px;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    flex-shrink: 0;
  }

  /* Floating Proof Badges */
  .cw-showcase-card {
    position: absolute;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.85);
    border-radius: 14px;
    padding: 10px 16px;
    box-shadow: 0 16px 36px rgba(15, 23, 42, 0.12);
    display: flex;
    align-items: center;
    gap: 10px;
    z-index: 5;
    pointer-events: none;
  }
  .cw-sc-left {
    bottom: 50px;
    left: -28px;
    animation: cwFloat 4s ease-in-out infinite alternate;
  }
  .cw-sc-right {
    top: 70px;
    right: -28px;
    animation: cwFloat 4s ease-in-out infinite alternate -2s;
  }
  .cw-sc-icon {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: #ecfdf5;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.15rem;
    flex-shrink: 0;
  }
  .cw-sc-text strong {
    display: block;
    font-size: 0.84rem;
    font-weight: 700;
    color: #0f172a;
    line-height: 1.2;
  }
  .cw-sc-text span {
    display: block;
    font-size: 0.72rem;
    color: #64748b;
  }

  /* Fullscreen Video Lightbox Modal */
  .cw-modal-overlay {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 999999;
    background: rgba(15, 23, 42, 0.88);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    align-items: center;
    justify-content: center;
    padding: 20px;
  }
  .cw-modal-overlay.open {
    display: flex;
  }
  .cw-modal-box {
    background: #0f172a;
    border-radius: 20px;
    width: 100%;
    max-width: 980px;
    overflow: hidden;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.55), 0 0 0 1px rgba(255, 255, 255, 0.1);
    display: flex;
    flex-direction: column;
    animation: cwModalPop 0.25s ease;
  }
  @keyframes cwModalPop {
    from { opacity: 0; transform: scale(0.96); }
    to { opacity: 1; transform: scale(1); }
  }
  .cw-modal-topbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 22px;
    background: #090d16;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  }
  .cw-modal-title {
    display: flex;
    align-items: center;
    gap: 9px;
    color: #f8fafc;
    font-size: 0.92rem;
    font-weight: 700;
  }
  .cw-modal-dot {
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: #10b981;
    box-shadow: 0 0 8px #10b981;
  }
  .cw-modal-close {
    background: rgba(255, 255, 255, 0.1);
    border: none;
    color: #cbd5e1;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    font-size: 1.4rem;
    line-height: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s;
  }
  .cw-modal-close:hover {
    background: #ef4444;
    color: #ffffff;
  }
  .cw-modal-tabs {
    display: flex;
    gap: 8px;
    padding: 12px 20px;
    background: #131b2e;
    border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    overflow-x: auto;
  }
  .cw-m-tab {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.08);
    color: #94a3b8;
    padding: 7px 15px;
    border-radius: 8px;
    font-size: 0.82rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
    white-space: nowrap;
  }
  .cw-m-tab:hover {
    color: #ffffff;
    background: rgba(255, 255, 255, 0.14);
  }
  .cw-m-tab.active {
    background: #10b981;
    border-color: #10b981;
    color: #ffffff;
  }
  .cw-modal-media-container {
    position: relative;
    background: #000000;
    min-height: 360px;
    max-height: 65vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }
  .cw-modal-video, .cw-modal-img {
    max-width: 100%;
    max-height: 65vh;
    width: auto;
    height: auto;
    display: block;
    object-fit: contain;
  }
  .cw-modal-footer {
    padding: 16px 22px;
    background: #090d16;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
  }
  .cw-modal-footnote {
    color: #94a3b8;
    font-size: 0.85rem;
  }
  .cw-modal-actions {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .cw-btn-modal-primary {
    background: #10b981;
    color: #ffffff;
    padding: 8px 18px;
    border-radius: 8px;
    font-size: 0.84rem;
    font-weight: 700;
    text-decoration: none;
    transition: background 0.2s;
    display: inline-block;
  }
  .cw-btn-modal-primary:hover {
    background: #059669;
    color: #ffffff;
  }
  .cw-btn-modal-secondary {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.15);
    color: #e2e8f0;
    padding: 8px 16px;
    border-radius: 8px;
    font-size: 0.84rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
  }
  .cw-btn-modal-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
  }

  @media (max-width: 768px) {
    .cw-platform-showcase-section {
      padding: 3rem 1rem 3.5rem;
    }
    .cw-showcase-title {
      font-size: 1.65rem;
    }
    .cw-showcase-subtitle {
      font-size: 0.92rem;
    }
    .cw-window-url-bar {
      display: none;
    }
    .cw-showcase-card {
      display: none !important;
    }
    .cw-hero-anim-box {
      padding: 8px 10px;
    }
    .cw-hero-anim-thumb {
      width: 76px;
      height: 50px;
    }
    .cw-hero-anim-heading {
      font-size: 0.82rem;
    }
    .cw-hero-anim-sub {
      font-size: 0.7rem;
    }
    .cw-modal-footer {
      flex-direction: column;
      align-items: stretch;
      text-align: center;
    }
    .cw-modal-actions {
      justify-content: center;
    }
  }

  /* Upgraded Floating Badges (Hidden to prevent covering phone mockup) */
  .cw-floating-card {
    display: none !important;
    position: absolute;
    z-index: 5;
    pointer-events: none; /* Never blocks user interaction with chat */
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.85);
    padding: 8px 14px;
    border-radius: 16px;
    box-shadow: 0 16px 36px rgba(15, 23, 42, 0.16), 0 2px 6px rgba(0, 0, 0, 0.04);
    display: flex;
    align-items: center;
    gap: 9px;
    animation: cwFloat 4.5s ease-in-out infinite alternate;
  }
  .cw-fc-1 {
    top: 8%;
    left: -32px;
  }
  .cw-fc-2 {
    bottom: 27%;
    right: -28px;
    animation-delay: -2.25s;
  }
  .cw-fc-text strong {
    display: block;
    font-size: 0.82rem;
    font-weight: 700;
    color: #0f172a;
    line-height: 1.2;
    white-space: nowrap;
  }
  .cw-fc-text span {
    display: block;
    font-size: 0.68rem;
    color: #64748b;
  }

  /* Live Pulsing Green Dot */
  .cw-pulse-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #10b981;
    position: relative;
    display: inline-block;
    box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7);
    animation: cwPulseDot 2s infinite;
    flex-shrink: 0;
  }
  @keyframes cwPulseDot {
    0% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); }
    70% { box-shadow: 0 0 0 8px rgba(16, 185, 129, 0); }
    100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
  }

  /* Animated ECG Heartbeat Pulse */
  .cw-ecg-icon polyline {
    stroke-dasharray: 50;
    stroke-dashoffset: 50;
    animation: cwEcgPulse 3s ease-in-out infinite;
  }
  @keyframes cwEcgPulse {
    0% { stroke-dashoffset: 50; opacity: 0.3; }
    40% { stroke-dashoffset: 0; opacity: 1; }
    80% { stroke-dashoffset: -50; opacity: 1; }
    100% { stroke-dashoffset: -50; opacity: 0.3; }
  }

  @keyframes cwFloat {
    from { transform: translateY(0); }
    to { transform: translateY(-9px); }
  }

  /* ==========================================================================
     CLIENT LOGO SCROLLER (MERITTO CLONE)
     ========================================================================== */
  .customer-proof-strip {
    position: relative;
    padding: 3rem 1.5rem 3.5rem;
    background: #ffffff;
    border-bottom: 1px solid #f1f5f9;
    text-align: center;
    overflow: hidden;
  }
  .customer-proof-strip .label {
    font-size: 0.95rem;
    font-weight: 500;
    color: #64748b;
    margin-bottom: 1.75rem;
    letter-spacing: -0.01em;
  }
  .customer-proof-strip .label b {
    color: #0f172a;
    font-weight: 700;
  }
  .customer-logo-marquee {
    position: relative;
    overflow: hidden;
    padding: 10px 0;
    -webkit-mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent);
    mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent);
  }
  .customer-logo-track {
    display: flex;
    align-items: center;
    gap: 56px;
    width: max-content;
    animation: customerLogoScroll 42s linear infinite;
    will-change: transform;
  }
  .customer-logo-marquee:hover .customer-logo-track {
    animation-play-state: paused;
  }
  .customer-logo-item {
    height: 52px;
    min-width: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex: 0 0 auto;
  }
  .customer-logo-item img {
    display: block;
    max-height: 44px;
    max-width: 140px;
    width: auto;
    height: auto;
    object-fit: contain;
    filter: grayscale(15%);
    opacity: 0.88;
    mix-blend-mode: multiply;
    transition: filter 0.25s ease, opacity 0.25s ease, transform 0.25s ease;
  }
  .customer-logo-item:hover img {
    filter: none;
    opacity: 1;
    transform: scale(1.05);
  }
  @keyframes customerLogoScroll {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
  }
  @media (max-width: 768px) {
    .customer-proof-strip { padding: 2rem 1rem 2.5rem; }
    .customer-logo-track { gap: 32px; }
    .customer-logo-item { min-width: 90px; height: 42px; }
    .customer-logo-item img { max-width: 110px; max-height: 36px; }
  }

  /* ==========================================================================
     5-STAGE INTERACTIVE LIFECYCLE TOUR (MERITTO CLONE)
     ========================================================================== */
  .stages-native {
    position: relative;
    padding: 6rem 1.5rem 7rem;
    background: #f8fafc;
    overflow: hidden;
  }
  .stages-native:before {
    content: "";
    position: absolute;
    width: 900px;
    height: 500px;
    left: 50%;
    bottom: -250px;
    transform: translateX(-50%);
    background: radial-gradient(ellipse, rgba(165, 187, 252, 0.25), rgba(213, 226, 255, 0.15) 40%, transparent 72%);
    filter: blur(40px);
    pointer-events: none;
  }
  .stages-wrap {
    max-width: 1240px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
  }
  .stage-heading {
    text-align: center;
    max-width: 820px;
    margin: 0 auto 3rem;
  }
  .stage-kicker {
    display: inline-block;
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #4338ca;
    background: #eef2ff;
    padding: 6px 14px;
    border-radius: 9999px;
    margin-bottom: 1rem;
    border: 1px solid rgba(99, 102, 241, 0.2);
  }
  .stage-display-title {
    font-size: clamp(2rem, 3.8vw, 2.9rem);
    font-weight: 800;
    line-height: 1.18;
    color: #0f172a;
    letter-spacing: -0.02em;
    margin: 0 0 1rem;
  }
  .stage-subtitle {
    font-size: 1.12rem;
    line-height: 1.7;
    color: #64748b;
    max-width: 720px;
    margin: 0 auto;
  }
  .stage-tabs {
    position: relative;
    z-index: 2;
    display: flex;
    gap: 6px;
    max-width: 940px;
    margin: 2.5rem auto 2.5rem;
    padding: 6px;
    border-radius: 18px;
    background: #e2e8f0;
    box-shadow: 0 2px 18px rgba(28, 40, 90, 0.06);
    overflow-x: auto;
    scrollbar-width: none;
  }
  .stage-tabs::-webkit-scrollbar { display: none; }
  .stage-tab {
    flex: 1 0 160px;
    border: 0;
    background: transparent;
    color: #64748b;
    border-radius: 13px;
    padding: 13px 14px;
    font-size: 0.88rem;
    font-weight: 700;
    cursor: pointer;
    white-space: nowrap;
    transition: all 0.25s ease;
    text-align: center;
  }
  .stage-tab:hover {
    color: #4338ca;
    background: rgba(255, 255, 255, 0.65);
  }
  .stage-tab.active {
    color: #312e81;
    background: #ffffff;
    box-shadow: 0 3px 14px rgba(28, 40, 90, 0.12);
  }
  .stage-panes {
    position: relative;
    z-index: 2;
    border: 1px solid #e2e8f0;
    border-radius: 30px;
    overflow: hidden;
    background: #ffffff;
    box-shadow: 0 24px 70px rgba(47, 59, 104, 0.08);
  }
  .stage-pane {
    display: none;
    grid-template-columns: 1fr 1fr;
    min-height: 520px;
  }
  .stage-pane.active {
    display: grid;
    animation: stageFadeIn 0.38s ease;
  }
  @keyframes stageFadeIn {
    from { opacity: 0.35; transform: translateY(6px); }
    to { opacity: 1; transform: none; }
  }
  .stage-copy {
    padding: 50px 48px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .stage-demo-label {
    font-size: 0.82rem;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #4f46e5;
    font-weight: 800;
    margin-bottom: 0.5rem;
  }
  .stage-copy h3 {
    font-size: clamp(1.85rem, 2.6vw, 2.45rem);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -0.03em;
    color: #0f172a;
    margin: 10px 0 14px;
  }
  .stage-copy p {
    font-size: 1rem;
    line-height: 1.68;
    color: #475569;
    margin: 0 0 20px;
    max-width: 520px;
  }
  .stage-features {
    display: grid;
    gap: 12px;
    margin-top: 15px;
  }
  .stage-feature-item {
    display: flex;
    gap: 12px;
    align-items: flex-start;
    color: #1e293b;
    font-size: 0.92rem;
    line-height: 1.45;
  }
  .stage-feature-item i {
    font-style: normal;
    width: 22px;
    height: 22px;
    flex: 0 0 22px;
    border-radius: 50%;
    display: grid;
    place-items: center;
    background: linear-gradient(180deg, #4f46e5, #3730a3);
    color: #ffffff;
    font-size: 11px;
    font-weight: 800;
    margin-top: 1px;
  }
  .stage-media {
    background: #eef2ff;
    padding: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 0;
    position: relative;
  }
  .stage-media img {
    display: block;
    width: 90%;
    max-width: 600px;
    height: auto;
    object-fit: contain;
    filter: drop-shadow(0 18px 30px rgba(47, 59, 104, 0.12));
    border-radius: 12px;
  }
  @media (max-width: 991px) {
    .stage-pane, .stage-pane.active { grid-template-columns: 1fr; }
    .stage-copy { padding: 36px 28px; }
    .stage-media { padding: 28px 20px; min-height: 320px; }
    .stage-media img { width: 95%; }
  }
  @media (max-width: 640px) {
    .stage-tabs { margin: 1.5rem auto 1.5rem; }
    .stage-tab { flex-basis: 140px; font-size: 0.8rem; padding: 10px 10px; }
    .stage-panes { border-radius: 20px; }
    .stage-copy { padding: 24px 20px; }
    .stage-copy h3 { font-size: 1.6rem; }
    .stage-media { padding: 20px 14px; min-height: 240px; }
  }


  /* Steps Section */
  .cw-steps-section {
    background: #0f172a;
    color: #ffffff;
    padding: 5.5rem 1.25rem;
  }
  .cw-steps-header {
    text-align: center;
    max-width: 760px;
    margin: 0 auto 4rem;
  }
  .cw-steps-header .cw-section-title {
    color: #ffffff;
  }
  .cw-steps-header .cw-section-subtitle {
    color: #94a3b8;
  }
  .cw-steps-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 24px;
    max-width: 1200px;
    margin: 0 auto;
  }
  .cw-step-card {
    background: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 18px;
    padding: 28px 24px;
    position: relative;
    transition: transform 0.2s ease;
  }
  .cw-step-card:hover {
    transform: translateY(-4px);
    border-color: rgba(5, 150, 105, 0.4);
  }
  .cw-step-num {
    font-size: 2.5rem;
    font-weight: 900;
    color: rgba(5, 150, 105, 0.4);
    line-height: 1;
    margin-bottom: 14px;
  }
  .cw-step-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 10px;
  }
  .cw-step-desc {
    font-size: 0.88rem;
    color: #94a3b8;
    line-height: 1.6;
    margin: 0;
  }

  /* =========================================
     COMPREHENSIVE MOBILE RESPONSIVE ENGINE
     ========================================= */
  @media (max-width: 900px) {
    .cw-hero-wrap {
      width: 100% !important;
      max-width: 100% !important;
      padding: 1.5rem 1rem 3rem !important;
      box-sizing: border-box !important;
      overflow-x: hidden !important;
    }
    .cw-hero-grid {
      display: flex !important;
      flex-direction: column !important;
      gap: 2rem !important;
      width: 100% !important;
      max-width: 100% !important;
      min-width: 0 !important;
      box-sizing: border-box !important;
    }
    .cw-hero-content {
      width: 100% !important;
      max-width: 100% !important;
      min-width: 0 !important;
      box-sizing: border-box !important;
      text-align: center !important;
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
    }
    .cw-badge-pill {
      margin: 0 auto 1.25rem !important;
      white-space: normal !important;
      word-break: break-word !important;
      text-align: center !important;
      max-width: 100% !important;
    }
    .cw-hero-title {
      font-size: clamp(1.65rem, 6.8vw, 2.35rem) !important;
      line-height: 1.22 !important;
      word-break: break-word !important;
      overflow-wrap: break-word !important;
      text-align: center !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      margin-bottom: 1rem !important;
    }
    .cw-hero-desc {
      font-size: 0.95rem !important;
      line-height: 1.55 !important;
      word-break: break-word !important;
      overflow-wrap: break-word !important;
      text-align: center !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      margin: 0 auto 1.5rem !important;
    }
    .cw-hero-actions {
      display: flex !important;
      flex-direction: column !important;
      width: 100% !important;
      max-width: 320px !important;
      margin: 0 auto 1.5rem !important;
      gap: 0.65rem !important;
      align-items: stretch !important;
    }
    .cw-btn-primary,
    .cw-btn-secondary {
      width: 100% !important;
      box-sizing: border-box !important;
      justify-content: center !important;
      text-align: center !important;
      padding: 0.85rem 1.25rem !important;
      font-size: 0.95rem !important;
    }
    .cw-trust-row {
      width: 100% !important;
      max-width: 100% !important;
      justify-content: center !important;
      flex-wrap: wrap !important;
      gap: 0.65rem 1.25rem !important;
      font-size: 0.8rem !important;
      margin: 0 auto !important;
    }
    .cw-phone-wrapper {
      width: min(315px, calc(100vw - 32px)) !important;
      max-width: 315px !important;
      margin: 1.25rem auto 0 !important;
      box-sizing: border-box !important;
      perspective: none !important;
      transform-style: flat !important;
      overflow: visible !important;
    }
    .cw-phone-device {
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      transform: none !important;
      transform-style: flat !important;
      border-radius: 36px !important;
      padding: 8px 8px 6px !important;
      border-width: 2.5px !important;
    }
    .cw-phone-screen {
      height: 440px !important;
      border-radius: 28px !important;
    }
    .cw-phone-aura {
      inset: 0 !important;
      filter: blur(16px) !important;
      border-radius: 40px !important;
    }
    .cw-floating-card {
      display: none !important;
    }
    .cw-table-container {
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      overflow-x: auto !important;
      -webkit-overflow-scrolling: touch !important;
      border-radius: 14px !important;
      margin: 0 auto !important;
    }
    .cw-comp-table {
      min-width: 560px !important;
      width: 100% !important;
    }
    .cw-steps-section {
      padding: 3rem 1rem !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
    }
    .cw-steps-grid {
      grid-template-columns: 1fr !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      gap: 1rem !important;
    }
    .cw-step-card {
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      padding: 1.5rem 1.25rem !important;
    }
    .cw-sales-inner {
      padding: 2.5rem 1.25rem !important;
      border-radius: 24px !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
    }
    .cw-sales-title {
      font-size: clamp(1.5rem, 5.5vw, 2rem) !important;
    }
    .cw-sales-desc {
      font-size: 0.95rem !important;
    }
    .cw-sales-actions {
      flex-direction: column !important;
      width: 100% !important;
      max-width: 300px !important;
      margin: 0 auto 1.25rem !important;
      gap: 0.65rem !important;
    }
    .cw-btn-white,
    .cw-btn-transparent {
      width: 100% !important;
      justify-content: center !important;
      box-sizing: border-box !important;
    }
    .cw-sales-trust {
      flex-direction: column !important;
      gap: 0.4rem !important;
      align-items: center !important;
    }
  }

  @media (max-width: 768px) {
    .cw-chat-input {
      font-size: 16px !important;
      -webkit-text-size-adjust: 100% !important;
    }
    .cw-wa-body {
      -webkit-overflow-scrolling: touch !important;
      overscroll-behavior: contain !important;
      padding: 8px 10px !important;
      gap: 7px !important;
    }
    .cw-section-title {
      font-size: clamp(1.4rem, 5.5vw, 1.85rem) !important;
    }
    .cw-section-subtitle {
      font-size: 0.9rem !important;
    }
  }

  @media (max-width: 400px) {
    .cw-hero-wrap {
      padding: 1.25rem 0.75rem 2.25rem !important;
    }
    .cw-hero-title {
      font-size: clamp(1.4rem, 6.2vw, 1.7rem) !important;
    }
    .cw-phone-wrapper {
      width: min(290px, calc(100vw - 20px)) !important;
      max-width: 290px !important;
    }
    .cw-phone-device {
      border-radius: 32px !important;
      padding: 6px 6px 5px !important;
    }
    .cw-phone-screen {
      height: 400px !important;
      border-radius: 24px !important;
    }
    .cw-wa-header {
      padding: 7px 8px !important;
      gap: 6px !important;
    }
    .cw-wa-title-row strong {
      font-size: 0.76rem !important;
    }
    .cw-wa-subtitle {
      font-size: 0.62rem !important;
    }
    .cw-chips-scroll {
      gap: 4px !important;
    }
    .cw-chip {
      padding: 4px 8px !important;
      font-size: 0.66rem !important;
    }
    .cw-chat-footer {
      padding: 5px 6px 6px !important;
      gap: 4px !important;
    }
    .cw-chat-input {
      padding: 6px 9px !important;
    }
    .cw-chat-send {
      width: 30px !important;
      height: 30px !important;
      min-width: 30px !important;
    }
  }

  /* ==========================================================================
     AUTHENTIC HELLOBOTZ FEATURES SECTION (JOURNEY FLOW)
     ========================================================================== */
  .reveal-item {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.65s cubic-bezier(.4,0,.2,1), transform 0.65s cubic-bezier(.4,0,.2,1);
  }
  .reveal-item.reveal-visible {
    opacity: 1;
    transform: translateY(0);
  }
  .reveal-left {
    opacity: 0;
    transform: translateX(-48px);
    transition: opacity 0.7s cubic-bezier(.4,0,.2,1), transform 0.7s cubic-bezier(.4,0,.2,1);
  }
  .reveal-left.reveal-visible {
    opacity: 1;
    transform: translateX(0);
  }
  .reveal-right {
    opacity: 0;
    transform: translateX(48px);
    transition: opacity 0.7s cubic-bezier(.4,0,.2,1), transform 0.7s cubic-bezier(.4,0,.2,1);
  }
  .reveal-right.reveal-visible {
    opacity: 1;
    transform: translateX(0);
  }

  .hb-features-section {
    position: relative;
    padding: 4.5rem 1.5rem 5.5rem;
    background: #ffffff;
    overflow: hidden;
  }
  .hb-features-container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 1rem;
    box-sizing: border-box;
  }
  .hb-features-header {
    text-align: center;
    max-width: 820px;
    margin: 0 auto 4.5rem;
  }
  .hb-features-badge {
    display: inline-block;
    font-size: 12px;
    font-weight: 800;
    color: var(--p, #7C3AED);
    background: rgba(124, 58, 237, 0.1);
    padding: 6px 18px;
    border-radius: 9999px;
    margin-bottom: 1.1rem;
    letter-spacing: 0.06em;
    text-transform: uppercase;
  }
  .hb-features-title {
    font-size: clamp(22px, 3.2vw, 36px);
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 1rem;
    line-height: 1.22;
    letter-spacing: -0.02em;
  }
  .hb-features-subtitle {
    font-size: clamp(15px, 1.25vw, 17px);
    color: #475569;
    line-height: 1.65;
  }

  .hb-feature-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: clamp(24px, 4vw, 48px);
    align-items: center;
    margin-bottom: clamp(32px, 4.5vw, 55px);
  }
  .hb-feature-text {
    box-sizing: border-box;
  }
  .hb-feature-icon-box {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 56px;
    height: 56px;
    border-radius: 16px;
    background: var(--p, #7C3AED);
    color: #ffffff;
    margin-bottom: 1.25rem;
    box-shadow: 0 10px 25px -5px rgba(124, 58, 237, 0.35);
  }
  .hb-feature-icon-box svg {
    width: 28px;
    height: 28px;
  }
  .hb-feature-item-title {
    font-size: clamp(22px, 2.4vw, 30px);
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 0.95rem;
    line-height: 1.22;
    letter-spacing: -0.015em;
  }
  .hb-feature-item-desc {
    font-size: clamp(15px, 1.2vw, 17px);
    color: #475569;
    line-height: 1.7;
    margin-bottom: 1.25rem;
  }
  .hb-feature-media-wrap {
    position: relative;
    width: 100%;
    max-width: 550px;
    margin: 0 auto;
    z-index: 10;
  }
  .hb-feature-media-inner {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .hb-feature-media-inner:hover {
    transform: translateY(-6px);
  }
  .hb-feature-img {
    width: 100%;
    height: auto;
    object-fit: contain;
    display: block;
    border-radius: 12px;
    transition: transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
  }

  /* Desktop Alternating Order: Odd features reverse order */
  @media (min-width: 1025px) {
    .hb-feature-row.is-odd .hb-feature-text {
      order: 2;
    }
    .hb-feature-row.is-odd .hb-feature-media-wrap {
      order: 1;
    }
  }

  /* Mobile Stack */
  @media (max-width: 1024px) {
    .hb-feature-row {
      grid-template-columns: 1fr;
      gap: 2.25rem;
      margin-bottom: 3.5rem;
    }
    .hb-feature-media-wrap {
      max-width: 480px;
    }
  }

  /* Bottom CTA Button */
  .hb-features-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.65rem;
    background: var(--p, #7C3AED);
    color: #ffffff !important;
    padding: 0.95rem 2.5rem;
    height: 52px;
    border-radius: 12px;
    font-weight: 700;
    font-size: 1.1rem;
    text-decoration: none;
    box-shadow: 0 10px 25px -5px rgba(124, 58, 237, 0.4);
    transition: all 0.3s ease;
  }
  .hb-features-cta-btn:hover {
    background: #6D28D9;
    transform: scale(1.05);
    box-shadow: 0 15px 30px -5px rgba(124, 58, 237, 0.5);
    color: #ffffff !important;
  }
  .hb-features-cta-btn svg {
    transition: transform 0.3s ease;
  }
  .hb-features-cta-btn:hover svg {
    transform: translateX(4px);
  }
</style>

<div class="cw-main-page">
  <!-- 1. HERO SECTION -->
  <section class="cw-hero-wrap">
    <div class="cw-hero-grid">
      <div class="cw-hero-content">
        <span class="cw-badge-pill">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
          <?php echo htmlspecialchars(cms_section('hero', 'badge', 'Official WhatsApp Connection')); ?>
        </span>
        <h1 class="cw-hero-title">
          <?php echo htmlspecialchars(cms_section('hero', 'headline_prefix', 'Scale Your Sales and Support on ')); ?><span class="highlight-green"><?php echo htmlspecialchars(cms_section('hero', 'headline_gradient', 'WhatsApp')); ?></span><?php echo htmlspecialchars(cms_section('hero', 'headline_suffix', '')); ?>
        </h1>
        <p class="cw-hero-desc">
          <?php echo htmlspecialchars(cms_section('hero', 'lead', 'Manage customer chats together with a shared inbox, build smart automatic reply flows, and run broadcasts safely using the official WhatsApp Business API.')); ?>
        </p>
        <div class="cw-hero-actions">
          <a href="<?php echo htmlspecialchars(cms_section('hero', 'cta1_link', '/auth/register')); ?>" class="cw-btn-primary">
            <?php echo htmlspecialchars(cms_section('hero', 'cta1_text', 'Start Free Trial')); ?>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <button type="button" class="cw-btn-secondary btn-demo-open">
            <?php echo htmlspecialchars(cms_section('hero', 'cta2_text', 'Book a Demo')); ?>
          </button>
        </div>
        <div class="cw-trust-row">
          <span class="cw-trust-item" id="cw-side-leads">
            <span class="cw-pulse-dot" style="width:8px;height:8px;display:inline-block;border-radius:50%;background:#10b981;margin-right:2px;"></span>
            <strong><span id="cw-leads-num"><?php echo htmlspecialchars(cms_section('hero', 'float1_val', '+128')); ?></span> <?php echo htmlspecialchars(cms_section('hero', 'float1_label', 'Leads Captured')); ?></strong>
          </span>
          <span class="cw-trust-item">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
            <?php echo htmlspecialchars(cms_section('hero', 'float3_val', '99.9%')); ?> <?php echo htmlspecialchars(cms_section('hero', 'float3_label', 'Delivery Uptime')); ?>
          </span>
          <span class="cw-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <?php echo htmlspecialchars(cms_section('hero', 'float2_val', 'Official Meta API')); ?>
          </span>
          <span class="cw-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <?php echo htmlspecialchars(cms_section('hero', 'float2_label', 'Zero Ban Risk')); ?>
          </span>
        </div>

        <!-- Interactive Animated Flow Builder Demo Box -->
        <div class="cw-hero-anim-box" onclick="openInboxwaVideoModal('flow')" role="button" tabindex="0" aria-label="Watch InboxWa Flow Builder Animation">
          <div class="cw-hero-anim-thumb">
            <video class="cw-hero-anim-video" autoplay loop muted playsinline poster="/assets/images/animations/interakt-hero.gif">
              <source src="/assets/images/animations/flow-builder.mp4" type="video/mp4">
              <img src="/assets/images/animations/interakt-hero.gif" alt="InboxWa Flow Builder Animation" loading="lazy">
            </video>
            <div class="cw-hero-anim-overlay">
              <span class="cw-hero-anim-play-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"/></svg>
              </span>
            </div>
            <span class="cw-hero-anim-live-tag">
              <span class="cw-pulse-dot" style="width:6px;height:6px;background:#10b981;border-radius:50%;display:inline-block;"></span>
              Live Flow
            </span>
          </div>
          <div class="cw-hero-anim-details">
            <div class="cw-hero-anim-title-row">
              <span class="cw-hero-anim-heading">See InboxWa in Action</span>
              <span class="cw-hero-anim-pill">Visual Builder</span>
            </div>
            <p class="cw-hero-anim-sub">Watch how drag-and-drop conversational bots qualify leads &amp; trigger sales 24/7 &rarr;</p>
          </div>
          <div class="cw-hero-anim-action">
            <span class="cw-hero-anim-expand-btn" title="Expand Fullscreen Demo">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg>
            </span>
          </div>
        </div>
      </div>

      <!-- Interactive 3D Phone Simulator Stage -->
      <div class="cw-phone-wrapper" id="cw-phone-wrapper">
        <!-- Glowing Ambient Aura -->
        <div class="cw-phone-aura" aria-hidden="true"></div>

        <!-- 3D Tilting Phone Device Frame -->
        <div class="cw-phone-device" id="cw-phone-device">
          <!-- Glass Glare Sweep -->
          <div class="cw-phone-glare" aria-hidden="true"></div>

          <!-- Hardware Top Bar: Live Clock & Dynamic Island -->
          <div class="cw-phone-topbar">
            <span class="cw-status-time" id="cw-status-clock">10:43</span>
            <div class="cw-dynamic-island">
              <span class="cw-island-camera"></span>
              <span class="cw-island-speaker"></span>
            </div>
            <div class="cw-status-icons">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M12 3c-4.97 0-9.46 2.02-12.73 5.3l1.42 1.42C3.37 7.03 7.42 5.2 12 5.2s8.63 1.83 11.31 4.52l1.42-1.42C21.46 5.02 16.97 3 12 3zm0 4c-3.87 0-7.37 1.57-9.9 4.1l1.41 1.42C5.69 10.5 8.66 9.2 12 9.2s6.31 1.3 8.49 3.32l1.41-1.42C19.37 8.57 15.87 7 12 7zm0 4c-2.76 0-5.26 1.12-7.07 2.93l1.41 1.41C7.79 13.9 9.77 13 12 13s4.21.9 5.66 2.34l1.41-1.41C17.26 12.12 14.76 11 12 11zm0 4c-1.66 0-3.16.67-4.24 1.76L12 21.01l4.24-4.25C15.16 15.67 13.66 15 12 15z"/></svg>
              <span class="cw-status-5g">5G</span>
              <svg width="14" height="12" viewBox="0 0 24 24" fill="currentColor"><rect x="2" y="7" width="17" height="10" rx="2" ry="2" fill="none" stroke="currentColor" stroke-width="2"/><path d="M5 9h11v6H5z"/><rect x="20" y="10" width="2" height="4" rx="0.5"/></svg>
            </div>
          </div>

          <!-- Phone Screen -->
          <div class="cw-phone-screen">
            <!-- WhatsApp Chat Header -->
            <div class="cw-wa-header">
              <div class="cw-wa-avatar">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                <span class="cw-wa-avatar-badge"></span>
              </div>
              <div class="cw-wa-header-info">
                <div class="cw-wa-title-row">
                  <strong>InboxWa Business AI</strong>
                  <svg class="cw-verified-check" width="13" height="13" viewBox="0 0 24 24" fill="#10b981"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                </div>
                <span class="cw-wa-subtitle"><i class="cw-live-dot"></i> Online • Official Meta Partner</span>
              </div>
              <div class="cw-wa-header-tools">
                <button type="button" class="cw-tool-btn" id="cw-audio-toggle" title="Toggle audio sound (Click to mute/unmute)">
                  <svg id="cw-audio-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M15.54 8.46a5 5 0 0 1 0 7.07"/></svg>
                </button>
                <button type="button" class="cw-tool-btn" id="cw-chat-reset" title="Restart conversation">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"/><path d="M3 21v-5h5"/></svg>
                </button>
              </div>
            </div>

            <!-- WhatsApp Chat Messages Body -->
            <div class="cw-wa-body" id="cw-live-body">
              <div class="cw-bubble user">
                <span>Hi! How can InboxWa automate our customer sales on WhatsApp?</span>
                <div class="cw-bubble-meta">
                  <span class="time">10:42 AM</span>
                  <span class="cw-ticks double-blue">✓✓</span>
                </div>
              </div>
              <div class="cw-bubble bot">
                <span>👋 Hello! With Official WhatsApp API, you can send broadcasts with 98% open rates, auto-qualify leads 24/7, and assign chats across your entire team from 1 single number!</span>
                <div class="cw-bubble-meta">
                  <span class="time">10:42 AM</span>
                </div>
              </div>
              <div class="cw-bubble user">
                <span>Can I connect my Shopify store &amp; CRM?</span>
                <div class="cw-bubble-meta">
                  <span class="time">10:43 AM</span>
                  <span class="cw-ticks double-blue">✓✓</span>
                </div>
              </div>
              <div class="cw-bubble bot">
                <span>✅ Yes! Orders, abandoned cart recoveries, and contact sync happen automatically with zero code.</span>
                <div class="cw-bubble-meta">
                  <span class="time">10:43 AM</span>
                </div>
              </div>

              <!-- Typing Indicator Bubble (controlled via JS) -->
              <div class="cw-bubble bot cw-typing-bubble" id="cw-typing-indicator" style="display:none;">
                <div class="cw-typing-dots">
                  <span></span><span></span><span></span>
                </div>
                <span class="cw-typing-label">InboxWa AI is typing...</span>
              </div>
            </div>

            <!-- Quick Suggestion Chips Carousel -->
            <div class="cw-chips-wrap">
              <div class="cw-chips-hint">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                <span>Tap a topic or type below:</span>
              </div>
              <div class="cw-chips-scroll" id="cw-chips-container">
                <button type="button" class="cw-chip" data-query="<?php echo htmlspecialchars(cms_section('simulator', 'btn1', '💰 See Pricing')); ?>"><?php echo htmlspecialchars(cms_section('simulator', 'btn1', '💰 See Pricing')); ?></button>
                <button type="button" class="cw-chip" data-query="<?php echo htmlspecialchars(cms_section('simulator', 'btn2', '🤖 How AI Works')); ?>"><?php echo htmlspecialchars(cms_section('simulator', 'btn2', '🤖 How AI Works')); ?></button>
                <button type="button" class="cw-chip" data-query="<?php echo htmlspecialchars(cms_section('simulator', 'btn3', '📢 Send Broadcasts')); ?>"><?php echo htmlspecialchars(cms_section('simulator', 'btn3', '📢 Send Broadcasts')); ?></button>
                <button type="button" class="cw-chip" data-query="⚡ 0% Ban Guarantee">⚡ 0% Ban Guarantee</button>
                <button type="button" class="cw-chip" data-query="👥 Team Inbox">👥 Team Inbox</button>
                <button type="button" class="cw-chip" data-query="📞 Book Live Demo">📞 Book Live Demo</button>
              </div>
            </div>

            <!-- WhatsApp Chat Composer Footer -->
            <div class="cw-chat-footer" id="cw-chat-footer">
              <button type="button" class="cw-chat-btn-emoji" id="cw-emoji-btn" title="Add emoji">😊</button>
              <input type="text" id="cw-chat-input" class="cw-chat-input" placeholder="Type a message or ask anything..." autocomplete="off" maxlength="150">
              <button type="button" id="cw-chat-send" class="cw-chat-send" aria-label="Send message" title="Send message">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
              </button>
            </div>

            <!-- Bottom iOS Home Indicator -->
            <div class="cw-home-bar"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INTERACTIVE ANIMATED PLATFORM SHOWCASE SECTION -->
  <section class="cw-platform-showcase-section">
    <div class="cw-showcase-container">
      <div class="cw-showcase-header">
        <div class="cw-showcase-pill">
          <span class="cw-pulse-dot" style="width:8px;height:8px;background:#10b981;border-radius:50%;display:inline-block;"></span>
          LIVE PLATFORM WALKTHROUGH
        </div>
        <h2 class="cw-showcase-title">Visual Automation &amp; AI Bots, Built for WhatsApp Scale</h2>
        <p class="cw-showcase-subtitle">No complicated coding. Build conversational customer journeys, automate broadcasts, and route high-value leads with zero friction.</p>
      </div>

      <!-- Feature Switcher Tabs -->
      <div class="cw-showcase-tabs" role="tablist">
        <button class="cw-showcase-tab active" data-target="flow" onclick="switchShowcaseTab('flow', this)">
          <span class="cw-tab-icon">⚡</span>
          <span class="cw-tab-label">Visual Flow Builder</span>
        </button>
        <button class="cw-showcase-tab" data-target="chat" onclick="switchShowcaseTab('chat', this)">
          <span class="cw-tab-icon">💬</span>
          <span class="cw-tab-label">Team Live Chat</span>
        </button>
        <button class="cw-showcase-tab" data-target="integrations" onclick="switchShowcaseTab('integrations', this)">
          <span class="cw-tab-icon">🔌</span>
          <span class="cw-tab-label">CRM &amp; Shopify Sync</span>
        </button>
        <button class="cw-showcase-tab" data-target="analytics" onclick="switchShowcaseTab('analytics', this)">
          <span class="cw-tab-icon">📊</span>
          <span class="cw-tab-label">Live Campaign Analytics</span>
        </button>
      </div>

      <!-- Video / GIF Mac Window Frame -->
      <div class="cw-showcase-window-wrap">
        <div class="cw-showcase-window">
          <!-- Window Titlebar with Mac Traffic Lights -->
          <div class="cw-window-titlebar">
            <div class="cw-window-dots">
              <span class="cw-dot red"></span>
              <span class="cw-dot yellow"></span>
              <span class="cw-dot green"></span>
            </div>
            <div class="cw-window-url-bar">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
              <span>app.inboxwa.com/flow-builder/lead-qualification-v3</span>
            </div>
            <div class="cw-window-actions">
              <button class="cw-window-expand" onclick="openInboxwaVideoModal('flow')" title="View Fullscreen Demo">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"/><polyline points="9 21 3 21 3 15"/><line x1="21" y1="3" x2="14" y2="10"/><line x1="3" y1="21" x2="10" y2="14"/></svg>
                <span>Fullscreen</span>
              </button>
            </div>
          </div>

          <!-- Media Display Viewport -->
          <div class="cw-window-screen">
            <!-- Flow Builder Media -->
            <div class="cw-tab-media active" id="media-flow">
              <video class="cw-showcase-media-elem" autoplay loop muted playsinline poster="/assets/images/animations/interakt-hero.gif">
                <source src="/assets/images/animations/flow-builder.mp4" type="video/mp4">
                <img src="/assets/images/animations/interakt-hero.gif" alt="InboxWa Visual Flow Builder">
              </video>
              <div class="cw-media-caption">
                <span class="cw-caption-badge">Flow Builder</span>
                <span>Drag &amp; drop conversational trigger nodes, rich interactive media cards, and custom logic without writing a single line of code.</span>
              </div>
            </div>

            <!-- Team Live Chat Media -->
            <div class="cw-tab-media" id="media-chat">
              <img class="cw-showcase-media-elem" src="/assets/images/animations/live-chat.gif" alt="InboxWa Multi-Agent Team Live Chat Shared Inbox" loading="lazy">
              <div class="cw-media-caption">
                <span class="cw-caption-badge">Multi-Agent Inbox</span>
                <span>Shared team inbox on a single official WhatsApp Business number. Assign chats, use quick replies, and track agent response times.</span>
              </div>
            </div>

            <!-- Integrations Media -->
            <div class="cw-tab-media" id="media-integrations">
              <img class="cw-showcase-media-elem" src="/assets/images/animations/integration-1.gif" alt="InboxWa CRM, Shopify and WooCommerce Integrations" loading="lazy">
              <div class="cw-media-caption">
                <span class="cw-caption-badge">Seamless Integrations</span>
                <span>Connect InboxWa natively with Shopify, WooCommerce, Zoho, HubSpot, Google Sheets, and webhook endpoints with 1 click.</span>
              </div>
            </div>

            <!-- Analytics Media -->
            <div class="cw-tab-media" id="media-analytics">
              <img class="cw-showcase-media-elem" src="/assets/images/animations/analytics.gif" alt="InboxWa Live Campaign Delivery &amp; Conversion Analytics" loading="lazy">
              <div class="cw-media-caption">
                <span class="cw-caption-badge">Real-Time Analytics</span>
                <span>Measure read rates, link click-throughs, sales conversions, and customer engagement metrics with live broadcast reporting.</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Floating Proof Badges around window -->
        <div class="cw-showcase-card cw-sc-left">
          <div class="cw-sc-icon">⚡</div>
          <div class="cw-sc-text">
            <strong>3.8x Faster Reply Speed</strong>
            <span>Instant AI agent auto-routing</span>
          </div>
        </div>

        <div class="cw-showcase-card cw-sc-right">
          <div class="cw-sc-icon">📈</div>
          <div class="cw-sc-text">
            <strong>98% Message Open Rate</strong>
            <span>Direct WhatsApp Verified Delivery</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 2. CLIENT LOGO MARQUEE SCROLLER (MERITTO CLONE) -->
  <div class="logo-band customer-proof-strip">
    <div class="label"><b>1,000+ educational institutions &amp; fast-growing enterprises</b> trust InboxWa</div>
    <div aria-label="Institutions using InboxWa" class="customer-logo-marquee">
      <div class="customer-logo-track">
        <?php
        $meritto_logos = [
          ['name' => 'Physics Wallah', 'file' => 'physics-wallah.png'],
          ['name' => 'Asia Pacific University', 'file' => 'apu.png'],
          ['name' => 'BITS Pilani Digital', 'file' => 'bits.jpg'],
          ['name' => 'Dibber', 'file' => 'dibber.jpg'],
          ['name' => 'IIM Bangalore', 'file' => 'iimb.jpg'],
          ['name' => 'American University in the Emirates', 'file' => 'aue.png'],
          ['name' => 'Kalinga Institute', 'file' => 'kiit.jpg'],
          ['name' => 'Coursera', 'file' => 'coursera.png'],
          ['name' => 'SRM', 'file' => 'srm.jpg'],
          ['name' => 'MIT World Peace University', 'file' => 'mit.jpg'],
          ['name' => 'GMAC NMAT', 'file' => 'gmac.jpg'],
          ['name' => 'XLRI', 'file' => 'xlri.png'],
          ['name' => 'Ashoka University', 'file' => 'ashoka.jpg'],
          ['name' => 'Lovely Professional University', 'file' => 'lpu.jpg'],
          ['name' => 'SPJIMR', 'file' => 'spjimr.jpg'],
          ['name' => 'MDI', 'file' => 'mdi.jpg'],
          ['name' => 'IMI', 'file' => 'imi.jpg'],
          ['name' => 'Shiv Nadar University', 'file' => 'shiv-nadar.jpg'],
          ['name' => 'SLIIT', 'file' => 'sliit.jpg'],
          ['name' => 'Plaksha University', 'file' => 'plaksha.jpg'],
          ['name' => 'Woxsen University', 'file' => 'woxsen.jpg'],
          ['name' => 'Thapar Institute', 'file' => 'thapar.png']
        ];
        for ($loop = 0; $loop < 2; $loop++):
          foreach ($meritto_logos as $logo):
        ?>
          <div class="customer-logo-item">
            <img decoding="async" alt="<?php echo htmlspecialchars($logo['name']); ?>" src="<?php echo $bp; ?>assets/images/home-meritto/logos/<?php echo $logo['file']; ?>" loading="lazy">
          </div>
        <?php
          endforeach;
        endfor;
        ?>
      </div>
    </div>
  </div>

  <!-- 2.1 5-STAGE INTERACTIVE LIFECYCLE TOUR (MERITTO CLONE) -->
  <section class="stages-native" id="platform">
    <div class="stages-wrap">
      <div class="stage-heading">
        <span class="stage-kicker">One Connected Growth &amp; Enrollment System</span>
        <h2 class="stage-display-title">Run every stage of enrollment on one connected system</h2>
        <p class="stage-subtitle">Bring marketing, admissions, applications, payments and student engagement together on one purpose-built InboxWa platform.</p>
      </div>

      <!-- 5 TABS -->
      <div aria-label="Enrollment stages" class="stage-tabs" role="tablist">
        <button aria-selected="true" class="stage-tab active" data-stage="0" role="tab">Attract &amp; Capture</button>
        <button aria-selected="false" class="stage-tab" data-stage="1" role="tab">Engage &amp; Nurture</button>
        <button aria-selected="false" class="stage-tab" data-stage="2" role="tab">Apply &amp; Enroll</button>
        <button aria-selected="false" class="stage-tab" data-stage="3" role="tab">Collect &amp; Reconcile</button>
        <button aria-selected="false" class="stage-tab" data-stage="4" role="tab">Unlock Intelligence</button>
      </div>

      <!-- 5 PANES -->
      <div class="stage-panes">
        <!-- STAGE 0: ATTRACT & CAPTURE -->
        <article class="stage-pane active" data-pane="0">
          <div class="stage-copy">
            <div class="stage-demo-label">Attract &amp; Capture</div>
            <h3>Every enquiry <br>captured, attributed, <br>and owned.</h3>
            <p>Online, offline, partner and campaign demand lands in one connected pipeline, with source, attribution and ownership preserved from the moment an enquiry enters InboxWa.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Enquiries centralised across every channel and campaign.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Primary, secondary and tertiary source attribution.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Auto source tracking that cannot be edited later.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Lead verification and de-duplication at entry.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Publisher panel with quality and impact scoring.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>200+ lead sources, 40 ERPs and 20 exam systems integrated.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="InboxWa Attract and Capture Dashboard" src="<?php echo $bp; ?>assets/images/home-meritto/attract-and-capture.png" loading="lazy">
          </div>
        </article>

        <!-- STAGE 1: ENGAGE & NURTURE -->
        <article class="stage-pane" data-pane="1">
          <div class="stage-copy">
            <div class="stage-demo-label">Engage &amp; Nurture</div>
            <h3>The right journey,<br> on the right channel,<br> with the right counsellor.</h3>
            <p>Every enquiry is scored, matched to a journey and routed to the counsellor most likely to convert it — then engaged wherever the student actually replies.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Personalised marketing journeys triggered by intent and stage.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Lead scoring and prediction that ranks the pipeline.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Omnichannel nurture across WhatsApp, email, SMS and voice.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>InboxWa Live Chat for live counselling; InboxWa AI for always-on qualification.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Smart lead distribution by programme, campus, language or performance.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>InboxWa AI Guide and Voice for autonomous engagement at scale.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="InboxWa Engage and Nurture Dashboard" src="<?php echo $bp; ?>assets/images/home-meritto/engage-and-nurture.png" loading="lazy">
          </div>
        </article>

        <!-- STAGE 2: APPLY & ENROLL -->
        <article class="stage-pane" data-pane="2">
          <div class="stage-copy">
            <div class="stage-demo-label">Apply &amp; Enroll</div>
            <h3>Move applicants from application started to successfully enrolled.</h3>
            <p>Manage applications, documents, reviews, interviews, offers and enrollment stages with visibility across every student movement.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>No-code, programme-specific forms and admission portal.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Document collection, verification and eligibility checks.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Shortlisting, GD-PI and interview scheduling.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Merit lists and offer letters issued in-system.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Drop-off alerts before applicants go cold.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Role-based access and full audit trails.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="InboxWa Apply and Enroll Dashboard" src="<?php echo $bp; ?>assets/images/home-meritto/apply-and-enroll.png" loading="lazy">
          </div>
        </article>

        <!-- STAGE 3: COLLECT & RECONCILE -->
        <article class="stage-pane" data-pane="3">
          <div class="stage-copy">
            <div class="stage-demo-label">Collect &amp; Reconcile</div>
            <h3>Payment is part of enrollment, not a separate chase.</h3>
            <p>InboxWa Pay connects fee collection to the student record, so reconciliation stops being a month-end reconstruction across disconnected systems and teams.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Application, tuition, hostel, transport and event fees.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>One-time, partial, recurring and financed structures.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Payment links from CRM, portal and campaigns.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Real-time reconciliation against the student record.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Failure analytics and default tracking for finance.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>InboxWa Smart ID for identity, access and payments.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="InboxWa Collect and Reconcile Dashboard" src="<?php echo $bp; ?>assets/images/home-meritto/collect-and-reconcile.png" loading="lazy">
          </div>
        </article>

        <!-- STAGE 4: UNLOCK INTELLIGENCE -->
        <article class="stage-pane" data-pane="4">
          <div class="stage-copy">
            <div class="stage-demo-label">Unlock Intelligence</div>
            <h3>One view of the funnel, and the context that makes AI useful.</h3>
            <p>Enquiries, conversations, applications and payments in one system means leadership sees the whole picture, and InboxWa AI reasons over real institutional context.</p>
            <div class="stage-features">
              <div class="stage-feature-item"><i>✓</i><span>Live dashboards from enquiry quality to fee realisation.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Marketing ROI by source, publisher and campaign.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Turnaround time, stage conversion and drop-off analysis.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Programme, campus and vertical performance in one builder.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>InboxWa AI Coach surfacing next-best actions for counsellors.</span></div>
              <div class="stage-feature-item"><i>✓</i><span>Every module deepens the context intelligence works from.</span></div>
            </div>
          </div>
          <div class="stage-media">
            <img decoding="async" alt="InboxWa Reports and Analysis Dashboard" src="<?php echo $bp; ?>assets/images/home-meritto/reports-and-analysis.png" loading="lazy">
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- 2.5 AUTHENTIC FEATURES SECTION (HELLOBOTZ CLONE) -->
  <section class="hb-features-section" id="features">
    <div id="journey-flow" style="position: absolute; top: -80px; left: 0;"></div>
    <div class="hb-features-container">
      <!-- SECTION HEADER -->
      <div class="hb-features-header reveal-item">
        <span class="hb-features-badge">BUILT FOR GROWING BUSINESSES</span>
        <h2 class="hb-features-title">Everything You Need to Automate Customer Conversations</h2>
        <p class="hb-features-subtitle">InboxWa gives your team Everything you need to automate, sell, and support customers —all in ONE place.</p>
      </div>

      <!-- 8-FEATURE ALTERNATING LIST -->
      <div class="hb-features-list">
        <!-- Feature 0: Key Capabilities & Setup (Even -> Left Text, Right Media) -->
        <div class="hb-feature-row is-even">
          <div class="hb-feature-text reveal-left" style="transition-delay: 0ms;">
            <div class="hb-feature-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h3 class="hb-feature-item-title">Key Capabilities &amp; Setup</h3>
            <p class="hb-feature-item-desc">Official Meta WABA API integration in under 2 minutes 24/7 automated instant responses for all incoming leads Pre-approved message templates and interactive buttons.</p>
          </div>
          <div class="hb-feature-media-wrap reveal-right" style="transition-delay: 120ms;">
            <div class="hb-feature-media-inner">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-0-capabilities.png" alt="Key Capabilities &amp; Setup" class="hb-feature-img" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Feature 1: Centralized Communication Hub (Odd -> Right Text, Left Media) -->
        <div class="hb-feature-row is-odd">
          <div class="hb-feature-text reveal-right" style="transition-delay: 0ms;">
            <div class="hb-feature-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h3 class="hb-feature-item-title">Centralized Communication Hub</h3>
            <p class="hb-feature-item-desc">Manage WhatsApp, Instagram DMs, Facebook, and Telegram in one screen Assign chats to team members with smart auto-routing Internal agent notes, SLA alerts, and real-time response tracking.</p>
          </div>
          <div class="hb-feature-media-wrap reveal-left" style="transition-delay: 120ms;">
            <div class="hb-feature-media-inner">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-1-hub.png" alt="Centralized Communication Hub" class="hb-feature-img" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Feature 2: Drag-and-Drop Automation (Even -> Left Text, Right Media) -->
        <div class="hb-feature-row is-even">
          <div class="hb-feature-text reveal-left" style="transition-delay: 0ms;">
            <div class="hb-feature-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h3 class="hb-feature-item-title">Drag-and-Drop Automation</h3>
            <p class="hb-feature-item-desc">Build multi-step conversational flows without writing code Set up keyword triggers, interactive buttons, and media replies Automatically qualify leads and capture customer details.</p>
          </div>
          <div class="hb-feature-media-wrap reveal-right" style="transition-delay: 120ms;">
            <div class="hb-feature-media-inner">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-2-automation.png" alt="Drag-and-Drop Automation" class="hb-feature-img" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Feature 3: Autonomous Voice Intelligence (Odd -> Right Text, Left Media) -->
        <div class="hb-feature-row is-odd">
          <div class="hb-feature-text reveal-right" style="transition-delay: 0ms;">
            <div class="hb-feature-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h3 class="hb-feature-item-title">Autonomous Voice Intelligence</h3>
            <p class="hb-feature-item-desc">Human-sounding AI handles inbound and outbound phone calls Automated lead qualification and routine customer inquiries Complete call summaries, audio logs, and transcriptions.</p>
          </div>
          <div class="hb-feature-media-wrap reveal-left" style="transition-delay: 120ms;">
            <div class="hb-feature-media-inner">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-3-voice.png" alt="Autonomous Voice Intelligence" class="hb-feature-img" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Feature 4: High-Deliverability Outreach (Even -> Left Text, Right Media) -->
        <div class="hb-feature-row is-even">
          <div class="hb-feature-text reveal-left" style="transition-delay: 0ms;">
            <div class="hb-feature-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h3 class="hb-feature-item-title">High-Deliverability Outreach</h3>
            <p class="hb-feature-item-desc">Send personalized broadcast campaigns to thousands at once Schedule campaigns by date, time, and customer tags Live analytics tracking delivery rates, opens, and replies.</p>
          </div>
          <div class="hb-feature-media-wrap reveal-right" style="transition-delay: 120ms;">
            <div class="hb-feature-media-inner">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-4-outreach.png" alt="High-Deliverability Outreach" class="hb-feature-img" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Feature 5: Automated Sales Engine (Odd -> Right Text, Left Media) -->
        <div class="hb-feature-row is-odd">
          <div class="hb-feature-text reveal-right" style="transition-delay: 0ms;">
            <div class="hb-feature-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h3 class="hb-feature-item-title">Automated Sales Engine</h3>
            <p class="hb-feature-item-desc">Instant order updates and shipping confirmation alerts Automated abandoned cart recovery messages that convert In-chat product catalog display and direct payment links.</p>
          </div>
          <div class="hb-feature-media-wrap reveal-left" style="transition-delay: 120ms;">
            <div class="hb-feature-media-inner">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-5-sales.png" alt="Automated Sales Engine" class="hb-feature-img" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Feature 6: Social Traffic Conversion (Even -> Left Text, Right Media) -->
        <div class="hb-feature-row is-even">
          <div class="hb-feature-text reveal-left" style="transition-delay: 0ms;">
            <div class="hb-feature-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h3 class="hb-feature-item-title">Social Traffic Conversion</h3>
            <p class="hb-feature-item-desc">Convert Facebook &amp; Instagram ad clicks directly into WhatsApp chats Track exact ad attribution and ROI for every campaign Pre-filled message templates allow instant customer response.</p>
          </div>
          <div class="hb-feature-media-wrap reveal-right" style="transition-delay: 120ms;">
            <div class="hb-feature-media-inner">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-6-social.png" alt="Social Traffic Conversion" class="hb-feature-img" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Feature 7: Growth Metrics & Insights Dashboard (Odd -> Right Text, Left Media) -->
        <div class="hb-feature-row is-odd">
          <div class="hb-feature-text reveal-right" style="transition-delay: 0ms;">
            <div class="hb-feature-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h3 class="hb-feature-item-title">Growth Metrics &amp; Insights Dashboard</h3>
            <p class="hb-feature-item-desc">Real-time operational dashboard for messaging performance Monitor agent response speeds and conversation resolution rates Comprehensive campaign ROI tracking with CSV/PDF exports.</p>
          </div>
          <div class="hb-feature-media-wrap reveal-left" style="transition-delay: 120ms;">
            <div class="hb-feature-media-inner">
              <img src="<?php echo $bp; ?>assets/images/journey-flow/feature-7-dashboard.png" alt="Growth Metrics &amp; Insights Dashboard" class="hb-feature-img" loading="lazy">
            </div>
          </div>
        </div>
      </div>

      <!-- BOTTOM CTA BUTTON -->
      <div class="reveal-item text-center" style="margin-top: 3.5rem; text-align: center;">
        <a href="<?php echo $bp; ?>auth/register" class="hb-features-cta-btn">
          Explore All Features
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
      </div>
    </div>
  </section>


  <!-- 4. HOW IT WORKS / 4 EASY STEPS -->
  <section class="cw-steps-section">
    <div class="cw-steps-header">
      <span class="cw-badge-pill" style="background:rgba(5, 150, 105, 0.2);color:#34d399;border-color:rgba(5,150,105,0.4);">How It Works</span>
      <h2 class="cw-section-title">Start in 4 Easy Steps</h2>
      <p class="cw-section-subtitle">Setting up your official WhatsApp assistant takes less than 10 minutes.</p>
    </div>

    <div class="cw-steps-grid">
      <div class="cw-step-card">
        <div class="cw-step-num">01</div>
        <h3 class="cw-step-title">Link Your Phone</h3>
        <p class="cw-step-desc">Connect your business phone number by scanning a simple QR code in 30 seconds.</p>
      </div>

      <div class="cw-step-card">
        <div class="cw-step-num">02</div>
        <h3 class="cw-step-title">Upload Contact List</h3>
        <p class="cw-step-desc">Upload your customer phone list or link directly with your existing Shopify or CRM tool.</p>
      </div>

      <div class="cw-step-card">
        <div class="cw-step-num">03</div>
        <h3 class="cw-step-title">Design Chat Flows</h3>
        <p class="cw-step-desc">Type out your answers or design automated reply menus using our visual builder.</p>
      </div>

      <div class="cw-step-card">
        <div class="cw-step-num">04</div>
        <h3 class="cw-step-title">Start Answering</h3>
        <p class="cw-step-desc">Turn on your assistant, send bulk messages, and watch conversations happen automatically.</p>
      </div>
    </div>
  </section>

</div>

<script>
(function() {
  // 0. 5-Stage Interactive Lifecycle Tour Tabs Switcher
  const stageTabs = document.querySelectorAll('.stage-tab');
  const stagePanes = document.querySelectorAll('.stage-pane');
  if (stageTabs.length && stagePanes.length) {
    stageTabs.forEach(function(tab) {
      tab.addEventListener('click', function() {
        const stageIdx = this.getAttribute('data-stage');
        stageTabs.forEach(function(t) {
          t.classList.remove('active');
          t.setAttribute('aria-selected', 'false');
        });
        this.classList.add('active');
        this.setAttribute('aria-selected', 'true');
        
        stagePanes.forEach(function(pane) {
          if (pane.getAttribute('data-pane') === stageIdx) {
            pane.classList.add('active');
          } else {
            pane.classList.remove('active');
          }
        });
      });
    });
  }
  // 1. Live Clock in Phone Hardware Top Bar
  function updatePhoneClock() {
    const clockEl = document.getElementById('cw-status-clock');
    if (!clockEl) return;
    const now = new Date();
    let hours = now.getHours();
    const minutes = String(now.getMinutes()).padStart(2, '0');
    hours = hours % 12 || 12;
    clockEl.textContent = hours + ':' + minutes;
  }
  updatePhoneClock();
  setInterval(updatePhoneClock, 30000);

  // 2. 3D Tilt Effect on Desktop Hover
  const phoneWrapper = document.getElementById('cw-phone-wrapper');
  const phoneDevice = document.getElementById('cw-phone-device');
  if (phoneWrapper && phoneDevice && window.matchMedia('(pointer: fine)').matches) {
    phoneWrapper.addEventListener('mousemove', function(e) {
      const rect = phoneWrapper.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const cx = rect.width / 2;
      const cy = rect.height / 2;
      const dx = (x - cx) / cx;
      const dy = (y - cy) / cy;
      phoneDevice.style.transform = `perspective(1200px) rotateY(${dx * 9}deg) rotateX(${-dy * 9}deg) scale3d(1.02, 1.02, 1.02)`;
    });
    phoneWrapper.addEventListener('mouseleave', function() {
      phoneDevice.style.transform = 'perspective(1200px) rotateY(0deg) rotateX(0deg) scale3d(1, 1, 1)';
    });
  }

  // 3. Realistic Web Audio Chimes (Synthesized - zero external file dependencies)
  let audioEnabled = true;
  const audioToggle = document.getElementById('cw-audio-toggle');
  const audioIcon = document.getElementById('cw-audio-icon');

  if (audioToggle) {
    audioToggle.addEventListener('click', function() {
      audioEnabled = !audioEnabled;
      if (audioEnabled) {
        audioToggle.setAttribute('title', 'Audio sound ON (Click to mute)');
        audioToggle.style.color = '#10b981';
        audioIcon.innerHTML = '<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M15.54 8.46a5 5 0 0 1 0 7.07"/>';
      } else {
        audioToggle.setAttribute('title', 'Audio sound MUTED (Click to unmute)');
        audioToggle.style.color = '#ef4444';
        audioIcon.innerHTML = '<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><line x1="23" y1="9" x2="17" y2="15"/><line x1="17" y1="9" x2="23" y2="15"/>';
      }
    });
  }

  function playChime(isBot) {
    if (!audioEnabled) return;
    try {
      const AudioContext = window.AudioContext || window.webkitAudioContext;
      if (!AudioContext) return;
      const ctx = new AudioContext();
      const osc = ctx.createOscillator();
      const gain = ctx.createGain();
      osc.type = 'sine';
      if (isBot) {
        osc.frequency.setValueAtTime(587.33, ctx.currentTime);
        osc.frequency.exponentialRampToValueAtTime(880, ctx.currentTime + 0.08);
      } else {
        osc.frequency.setValueAtTime(440, ctx.currentTime);
        osc.frequency.exponentialRampToValueAtTime(659.25, ctx.currentTime + 0.06);
      }
      gain.gain.setValueAtTime(0.08, ctx.currentTime);
      gain.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + 0.16);
      osc.connect(gain);
      gain.connect(ctx.destination);
      osc.start();
      osc.stop(ctx.currentTime + 0.16);
    } catch (err) {}
  }

  // 4. Live Chatbot Engine
  const cwBody = document.getElementById('cw-live-body');
  const typingIndicator = document.getElementById('cw-typing-indicator');
  const chatSendBtn = document.getElementById('cw-chat-send');
  const chatInput = document.getElementById('cw-chat-input');
  const chatReset = document.getElementById('cw-chat-reset');
  const emojiBtn = document.getElementById('cw-emoji-btn');
  const leadsNumEl = document.getElementById('cw-leads-num');

  function getFormattedTime() {
    const now = new Date();
    let h = now.getHours();
    const m = String(now.getMinutes()).padStart(2, '0');
    const ampm = h >= 12 ? 'PM' : 'AM';
    h = h % 12 || 12;
    return `${h}:${m} ${ampm}`;
  }

  function scrollToBottom() {
    if (!cwBody) return;
    cwBody.scrollTo({ top: cwBody.scrollHeight, behavior: 'smooth' });
  }

  function escapeHtml(str) {
    return str.replace(/[&<>'"]/g, function(tag) {
      return ({
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        "'": '&#39;',
        '"': '&quot;'
      })[tag] || tag;
    });
  }

  // Default initial message markup for reset
  const defaultChatHtml = `
    <div class="cw-bubble user">
      <span>Hi! How can InboxWa automate our customer sales on WhatsApp?</span>
      <div class="cw-bubble-meta">
        <span class="time">10:42 AM</span>
        <span class="cw-ticks double-blue">✓✓</span>
      </div>
    </div>
    <div class="cw-bubble bot">
      <span>👋 Hello! With Official WhatsApp API, you can send broadcasts with 98% open rates, auto-qualify leads 24/7, and assign chats across your entire team from 1 single number!</span>
      <div class="cw-bubble-meta">
        <span class="time">10:42 AM</span>
      </div>
    </div>
    <div class="cw-bubble user">
      <span>Can I connect my Shopify store &amp; CRM?</span>
      <div class="cw-bubble-meta">
        <span class="time">10:43 AM</span>
        <span class="cw-ticks double-blue">✓✓</span>
      </div>
    </div>
    <div class="cw-bubble bot">
      <span>✅ Yes! Orders, abandoned cart recoveries, and contact sync happen automatically with zero code.</span>
      <div class="cw-bubble-meta">
        <span class="time">10:43 AM</span>
      </div>
    </div>
    <div class="cw-bubble bot cw-typing-bubble" id="cw-typing-indicator" style="display:none;">
      <div class="cw-typing-dots">
        <span></span><span></span><span></span>
      </div>
      <span class="cw-typing-label">InboxWa AI is typing...</span>
    </div>
  `;

  if (chatReset) {
    chatReset.addEventListener('click', function() {
      if (!cwBody) return;
      cwBody.innerHTML = defaultChatHtml;
      playChime(true);
      scrollToBottom();
    });
  }

  // Emoji button quick rotator
  const emojiList = ['🚀', '🛍️', '💰', '🤖', '⚡', '📦', '💬'];
  let emojiIdx = 0;
  if (emojiBtn && chatInput) {
    emojiBtn.addEventListener('click', function() {
      chatInput.value += emojiList[emojiIdx % emojiList.length] + ' ';
      emojiIdx++;
      chatInput.focus();
    });
  }

  // Conversational AI NLP Matcher
  function generateBotReply(text) {
    const q = text.toLowerCase().trim();

    if (q.includes('price') || q.includes('pricing') || q.includes('plan') || q.includes('cost') || q.includes('fee') || q.includes('rate')) {
      return {
        text: "💳 Plans start at just $29/month with 0% markup on Meta messages! Includes unlimited contacts, team inbox, broadcast manager, and AI visual builder.",
        actionText: "View Pricing Plans",
        actionUrl: "/pricing"
      };
    }
    if (q.includes('shopify') || q.includes('woo') || q.includes('store') || q.includes('cart') || q.includes('abandoned') || q.includes('order')) {
      return {
        text: "🛍️ 1-Click Shopify & WooCommerce integration! Automatically send abandoned cart recovery links (recapturing ~35% lost sales), order confirmations, and live shipment tracking via WhatsApp.",
        actionText: "Explore Shopify Sync",
        actionUrl: "/channel/whatsapp/"
      };
    }
    if (q.includes('broadcast') || q.includes('bulk') || q.includes('blast') || q.includes('campaign') || q.includes('mass') || q.includes('csv')) {
      return {
        text: "📢 Send 10,000 to 1,000,000+ broadcasts in minutes with 98% average open rates! Powered by the Official Meta WhatsApp Cloud API with smart pacing so delivery is 100% reliable.",
        actionText: "Start Free Trial",
        actionUrl: "/auth/register"
      };
    }
    if (q.includes('ban') || q.includes('risk') || q.includes('meta') || q.includes('official') || q.includes('api') || q.includes('safe')) {
      return {
        text: "🛡️ Zero Ban Risk! Unlike unofficial QR-scraping extensions that get accounts banned, InboxWa connects directly through the official Meta Business Cloud API with 100% compliance guarantee.",
        actionText: "Verify API Status",
        actionUrl: "/channel/whatsapp/"
      };
    }
    if (q.includes('team') || q.includes('agent') || q.includes('inbox') || q.includes('seat') || q.includes('multi') || q.includes('assign')) {
      return {
        text: "👥 Connect unlimited team members to 1 single WhatsApp number! Includes automated department routing, private notes, quick canned replies, and agent analytics.",
        actionText: "Learn More",
        actionUrl: "/channel/whatsapp/"
      };
    }
    if (q.includes('bot') || q.includes('ai') || q.includes('flow') || q.includes('builder') || q.includes('automate') || q.includes('chatgpt')) {
      return {
        text: "🤖 Build intelligent auto-reply flows in minutes with our visual drag-and-drop builder! Train your AI on website URLs or FAQs to qualify prospects and close deals 24/7.",
        actionText: "Try Flow Builder",
        actionUrl: "/auth/register"
      };
    }
    if (q.includes('demo') || q.includes('call') || q.includes('talk') || q.includes('sales') || q.includes('meeting') || q.includes('specialist')) {
      return {
        text: "📞 We'd love to show you InboxWa in action! Schedule a personalized 15-minute walkthrough with our automation architects.",
        actionText: "Book Live Demo",
        actionUrl: "#demo"
      };
    }
    if (q.includes('hi') || q.includes('hello') || q.includes('hey') || q.includes('hola') || q.includes('good')) {
      return {
        text: "👋 Hello! Welcome to InboxWa! Ask me about pricing, Shopify integration, bulk broadcasts, or click any chip above to test.",
        actionText: "Get Started Free",
        actionUrl: "/auth/register"
      };
    }
    if (q.includes('trial') || q.includes('free') || q.includes('sign') || q.includes('register') || q.includes('start')) {
      return {
        text: "🚀 You can start right now with our 14-day free trial! Zero credit card required and 5-minute setup.",
        actionText: "Start Free Trial",
        actionUrl: "/auth/register"
      };
    }
    if (q.includes('green tick') || q.includes('tick') || q.includes('badge') || q.includes('verify')) {
      return {
        text: "✅ We help your business apply for and secure the official Meta Verified Green Tick badge beside your brand name for maximum trust.",
        actionText: "Request Green Tick Help",
        actionUrl: "/channel/whatsapp/"
      };
    }

    return {
      text: "⚡ InboxWa empowers you to scale WhatsApp sales with official Meta Cloud API, automated AI chat funnels, 98% open-rate broadcasts, and 1-click CRM/Shopify sync!",
      actionText: "Start 14-Day Trial",
      actionUrl: "/auth/register"
    };
  }

  function handleUserMessage(msgText) {
    if (!msgText || !msgText.trim() || !cwBody) return;
    const cleanText = msgText.trim();

    // 1. Append User Message
    const userDiv = document.createElement('div');
    userDiv.className = 'cw-bubble user';
    userDiv.innerHTML = `
      <span>${escapeHtml(cleanText)}</span>
      <div class="cw-bubble-meta">
        <span class="time">${getFormattedTime()}</span>
        <span class="cw-ticks grey">✓</span>
      </div>
    `;
    const typingIndicatorEl = document.getElementById('cw-typing-indicator');
    if (typingIndicatorEl) {
      cwBody.insertBefore(userDiv, typingIndicatorEl);
    } else {
      cwBody.appendChild(userDiv);
    }
    scrollToBottom();
    playChime(false);

    // 2. Change tick to double blue after 220ms
    setTimeout(function() {
      const ticks = userDiv.querySelector('.cw-ticks');
      if (ticks) {
        ticks.className = 'cw-ticks double-blue';
        ticks.textContent = '✓✓';
      }
    }, 220);

    // 3. Increment Leads Captured Metric with bounce
    if (leadsNumEl) {
      const cur = parseInt(leadsNumEl.textContent, 10) || 128;
      leadsNumEl.textContent = cur + 1;
      const card = document.getElementById('cw-card-leads') || document.getElementById('cw-side-leads');
      if (card) {
        card.style.transform = 'scale(1.08)';
        setTimeout(() => { card.style.transform = ''; }, 350);
      }
    }

    // 4. Show Typing Indicator
    if (typingIndicatorEl) {
      typingIndicatorEl.style.display = 'flex';
      scrollToBottom();
    }

    // Disable input while bot is typing
    if (chatInput) chatInput.disabled = true;

    // 5. Bot Response after realistic delay
    setTimeout(function() {
      if (typingIndicatorEl) typingIndicatorEl.style.display = 'none';

      const botReply = generateBotReply(cleanText);
      const botDiv = document.createElement('div');
      botDiv.className = 'cw-bubble bot';

      let actionBtnHtml = '';
      if (botReply.actionText && botReply.actionUrl) {
        if (botReply.actionUrl === '#demo') {
          actionBtnHtml = `<button type="button" class="cw-bot-action-btn btn-demo-open">${escapeHtml(botReply.actionText)} &rarr;</button>`;
        } else {
          actionBtnHtml = `<a href="${escapeHtml(botReply.actionUrl)}" class="cw-bot-action-btn">${escapeHtml(botReply.actionText)} &rarr;</a>`;
        }
      }

      botDiv.innerHTML = `
        <span>${escapeHtml(botReply.text)}</span>
        ${actionBtnHtml}
        <div class="cw-bubble-meta">
          <span class="time">${getFormattedTime()}</span>
        </div>
      `;

      if (typingIndicatorEl) {
        cwBody.insertBefore(botDiv, typingIndicatorEl);
      } else {
        cwBody.appendChild(botDiv);
      }

      scrollToBottom();
      playChime(true);

      if (chatInput) {
        chatInput.disabled = false;
        chatInput.focus();
      }
    }, 750);
  }

  // Trigger Send Action
  function sendCurrentInput() {
    if (!chatInput) return;
    const val = chatInput.value;
    if (!val || !val.trim()) {
      chatInput.focus();
      return;
    }
    chatInput.value = '';
    if (chatSendBtn) {
      chatSendBtn.style.transform = '';
      chatSendBtn.style.boxShadow = '';
    }
    handleUserMessage(val);
  }

  // Click on Send Button
  if (chatSendBtn) {
    chatSendBtn.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      sendCurrentInput();
    });
  }

  // Press Enter key inside Input
  if (chatInput) {
    chatInput.addEventListener('keydown', function(e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        e.stopPropagation();
        sendCurrentInput();
      }
    });

    // Visual feedback when typing text
    chatInput.addEventListener('input', function() {
      if (chatSendBtn) {
        if (chatInput.value.trim().length > 0) {
          chatSendBtn.style.transform = 'scale(1.12)';
          chatSendBtn.style.boxShadow = '0 0 10px rgba(0, 168, 132, 0.8)';
        } else {
          chatSendBtn.style.transform = '';
          chatSendBtn.style.boxShadow = '';
        }
      }
    });
  }

  // Click inside chat body auto-focuses input
  if (cwBody) {
    cwBody.addEventListener('click', function(e) {
      if (e.target.closest('a') || e.target.closest('button')) return;
      if (chatInput) chatInput.focus();
    });
  }

  // Quick Suggestion Chips Listener
  const chips = document.querySelectorAll('.cw-chip');
  chips.forEach(function(chip) {
    chip.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      const q = chip.getAttribute('data-query');
      if (q) {
        handleUserMessage(q);
      }
    });
  });

  // Highlight first chip gently after 2.5s if user hasn't interacted yet
  setTimeout(function() {
    const firstChip = document.querySelector('.cw-chip');
    if (firstChip && chatInput && !chatInput.value) {
      firstChip.style.transform = 'scale(1.08) translateY(-2px)';
      firstChip.style.boxShadow = '0 0 12px rgba(16, 185, 129, 0.7)';
      setTimeout(function() {
        firstChip.style.transform = '';
        firstChip.style.boxShadow = '';
      }, 1200);
    }
  }, 2500);

  // -------------------------------------------------------------------------
  // Authentic Features Reveal Animations (Hellobotz Clone)
  // -------------------------------------------------------------------------
  (function() {
    const revealElements = document.querySelectorAll('#features .reveal-left, #features .reveal-right, #features .reveal-item');
    if (revealElements.length && 'IntersectionObserver' in window) {
      const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            setTimeout(function() {
              entry.target.classList.add('reveal-visible');
            }, 80);
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12 });

      revealElements.forEach(function(el) {
        observer.observe(el);
      });
    } else if (revealElements.length) {
      revealElements.forEach(function(el) {
        el.classList.add('reveal-visible');
      });
    }
  })();
})();
</script>

<!-- INBOXWA INTERACTIVE PLATFORM DEMO MODAL -->
<div id="inboxwa-video-modal" class="cw-modal-overlay" onclick="handleModalOverlayClick(event)">
  <div class="cw-modal-box">
    <div class="cw-modal-topbar">
      <div class="cw-modal-title">
        <span class="cw-modal-dot"></span>
        <span>InboxWa Platform Demo &bull; Interactive Tour</span>
      </div>
      <button class="cw-modal-close" onclick="closeInboxwaVideoModal()" aria-label="Close demo modal">&times;</button>
    </div>
    <div class="cw-modal-body">
      <div class="cw-modal-tabs">
        <button class="cw-m-tab active" data-tab="flow" onclick="switchModalMedia('flow', this)">⚡ Flow Builder</button>
        <button class="cw-m-tab" data-tab="chat" onclick="switchModalMedia('chat', this)">💬 Team Live Chat</button>
        <button class="cw-m-tab" data-tab="integrations" onclick="switchModalMedia('integrations', this)">🔌 Integrations</button>
        <button class="cw-m-tab" data-tab="analytics" onclick="switchModalMedia('analytics', this)">📊 Campaign Analytics</button>
      </div>
      <div class="cw-modal-media-container" id="inboxwa-modal-media">
        <video class="cw-modal-video" autoplay loop muted playsinline controls poster="/assets/images/animations/interakt-hero.gif">
          <source src="/assets/images/animations/flow-builder.mp4" type="video/mp4">
          <img src="/assets/images/animations/interakt-hero.gif" alt="Flow Builder Demo">
        </video>
      </div>
      <div class="cw-modal-footer">
        <div class="cw-modal-footnote">Experience the full power of WhatsApp automation with zero ban risk.</div>
        <div class="cw-modal-actions">
          <a href="/contact" class="cw-btn-modal-primary">Start 7-Day Free Trial</a>
          <button type="button" class="cw-btn-modal-secondary btn-demo-open" onclick="closeInboxwaVideoModal()">Schedule 1-on-1 Call</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
/* InboxWa Animated Showcase & Modal Handlers */
function openInboxwaVideoModal(tab) {
  var modal = document.getElementById('inboxwa-video-modal');
  if (modal) {
    modal.classList.add('open');
    document.body.style.overflow = 'hidden';
    if (tab) {
      var tabBtn = modal.querySelector('.cw-m-tab[data-tab="' + tab + '"]');
      if (tabBtn) switchModalMedia(tab, tabBtn);
    }
  }
}

function closeInboxwaVideoModal() {
  var modal = document.getElementById('inboxwa-video-modal');
  if (modal) {
    modal.classList.remove('open');
    document.body.style.overflow = '';
    var vid = modal.querySelector('video');
    if (vid) vid.pause();
  }
}

function handleModalOverlayClick(e) {
  if (e.target && e.target.id === 'inboxwa-video-modal') {
    closeInboxwaVideoModal();
  }
}

document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeInboxwaVideoModal();
  }
});

function switchShowcaseTab(target, btn) {
  var tabs = document.querySelectorAll('.cw-showcase-tab');
  tabs.forEach(function(t) { t.classList.remove('active'); });
  if (btn) btn.classList.add('active');

  var medias = document.querySelectorAll('.cw-tab-media');
  medias.forEach(function(m) { m.classList.remove('active'); });
  var activeMedia = document.getElementById('media-' + target);
  if (activeMedia) {
    activeMedia.classList.add('active');
    var vid = activeMedia.querySelector('video');
    if (vid) {
      vid.currentTime = 0;
      vid.play().catch(function(){});
    }
  }
}

function switchModalMedia(type, btn) {
  var container = document.getElementById('inboxwa-modal-media');
  if (!container) return;

  var tabs = document.querySelectorAll('.cw-m-tab');
  tabs.forEach(function(t) { t.classList.remove('active'); });
  if (btn) btn.classList.add('active');

  if (type === 'flow') {
    container.innerHTML = '<video class="cw-modal-video" autoplay loop muted playsinline controls poster="/assets/images/animations/interakt-hero.gif"><source src="/assets/images/animations/flow-builder.mp4" type="video/mp4"><img src="/assets/images/animations/interakt-hero.gif" alt="Flow Builder Demo"></video>';
  } else if (type === 'chat') {
    container.innerHTML = '<img class="cw-modal-img" src="/assets/images/animations/live-chat.gif" alt="Multi-Agent Live Chat Inbox">';
  } else if (type === 'integrations') {
    container.innerHTML = '<img class="cw-modal-img" src="/assets/images/animations/integration-1.gif" alt="CRM & eCommerce Integrations">';
  } else if (type === 'analytics') {
    container.innerHTML = '<img class="cw-modal-img" src="/assets/images/animations/analytics.gif" alt="Campaign Analytics">';
  }
}
</script>

<?php
include __DIR__ . '/includes/offer-popup.php';
include __DIR__ . '/includes/callback-popup.php';
include __DIR__ . '/includes/footer.php';
?>
