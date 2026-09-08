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
  }

  /* Hero Section */
  .cw-hero-wrap {
    padding: 2.5rem 1.25rem 4.5rem;
    max-width: 1240px;
    margin: 0 auto;
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

  /* Upgraded Floating Badges */
  .cw-floating-card {
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

  /* Comparison Section */
  .cw-comparison-section {
    background: #f8fafc;
    padding: 5rem 1.25rem;
    border-top: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
  }
  .cw-section-header {
    text-align: center;
    max-width: 760px;
    margin: 0 auto 3.5rem;
  }
  .cw-section-title {
    font-size: clamp(1.85rem, 3.5vw, 2.75rem);
    font-weight: 800;
    color: #0f172a;
    line-height: 1.2;
    margin: 0.75rem 0 1rem;
    letter-spacing: -0.01em;
  }
  .cw-section-subtitle {
    font-size: 1.1rem;
    color: #64748b;
    line-height: 1.6;
  }

  .cw-table-container {
    max-width: 1050px;
    margin: 0 auto;
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
    overflow: hidden;
  }
  .cw-comp-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
  }
  .cw-comp-table th {
    padding: 18px 24px;
    font-size: 0.85rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    background: #f1f5f9;
    border-bottom: 2px solid #e2e8f0;
  }
  .cw-comp-table th.col-api {
    background: rgba(5, 150, 105, 0.1);
    color: #059669;
  }
  .cw-comp-table td {
    padding: 20px 24px;
    border-bottom: 1px solid #e2e8f0;
    font-size: 0.95rem;
    vertical-align: middle;
  }
  .cw-comp-table tr:last-child td {
    border-bottom: none;
  }
  .cw-comp-feature {
    font-weight: 700;
    color: #0f172a;
  }
  .cw-comp-standard {
    color: #64748b;
  }
  .cw-comp-api {
    color: #059669;
    font-weight: 700;
    background: rgba(5, 150, 105, 0.03);
  }

  /* Interactive 9-Feature Showcase */
  .cw-showcase-section {
    padding: 5.5rem 1.25rem;
    max-width: 1240px;
    margin: 0 auto;
  }
  .cw-showcase-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 24px;
    margin-top: 3rem;
  }
  .cw-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 18px;
    padding: 26px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    display: flex;
    flex-direction: column;
  }
  .cw-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 36px -8px rgba(15, 23, 42, 0.1);
    border-color: rgba(5, 150, 105, 0.3);
  }
  .cw-card-icon {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    background: rgba(5, 150, 105, 0.1);
    color: #059669;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 18px;
  }
  .cw-card-title {
    font-size: 1.25rem;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
  }
  .cw-card-desc {
    font-size: 0.92rem;
    color: #475569;
    line-height: 1.6;
    margin-bottom: 20px;
    flex-grow: 1;
  }
  .cw-card-bullets {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 8px;
    border-top: 1px solid #f1f5f9;
    padding-top: 16px;
  }
  .cw-card-bullets li {
    font-size: 0.85rem;
    font-weight: 600;
    color: #334155;
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .cw-card-bullets li svg {
    color: #059669;
    flex-shrink: 0;
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

  /* Sales CTA Section */
  .cw-sales-section {
    background: linear-gradient(135deg, #059669 0%, #047857 100%);
    color: #ffffff;
    padding: 5.5rem 1.25rem;
    text-align: center;
  }
  .cw-sales-inner {
    max-width: 820px;
    margin: 0 auto;
  }
  .cw-sales-title {
    font-size: clamp(2rem, 4vw, 3.25rem);
    font-weight: 900;
    line-height: 1.2;
    margin-bottom: 1.25rem;
    letter-spacing: -0.01em;
  }
  .cw-sales-desc {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.92);
    line-height: 1.6;
    margin-bottom: 2.5rem;
  }
  .cw-sales-actions {
    display: flex;
    justify-content: center;
    gap: 1.25rem;
    flex-wrap: wrap;
    margin-bottom: 2.25rem;
  }
  .cw-btn-white {
    background: #ffffff;
    color: #059669;
    font-weight: 800;
    font-size: 1.05rem;
    padding: 0.95rem 2.25rem;
    border-radius: 999px;
    text-decoration: none;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    transition: all 0.2s ease;
  }
  .cw-btn-white:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    color: #047857;
  }
  .cw-btn-transparent {
    background: transparent;
    color: #ffffff;
    font-weight: 700;
    font-size: 1.05rem;
    padding: 0.95rem 2.25rem;
    border-radius: 999px;
    border: 2px solid rgba(255, 255, 255, 0.6);
    text-decoration: none;
    transition: all 0.2s ease;
    cursor: pointer;
  }
  .cw-btn-transparent:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: #ffffff;
    color: #ffffff;
    transform: translateY(-2px);
  }
  .cw-sales-trust {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    font-size: 0.9rem;
    font-weight: 700;
    color: rgba(255, 255, 255, 0.9);
    flex-wrap: wrap;
  }

  /* =========================================
     COMPREHENSIVE MOBILE RESPONSIVE ENGINE
     ========================================= */
  @media (max-width: 900px) {
    .cw-hero-grid {
      grid-template-columns: 1fr;
      gap: 2.5rem;
    }
    .cw-hero-content {
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .cw-badge-pill {
      margin-left: auto;
      margin-right: auto;
    }
    .cw-hero-desc {
      margin-left: auto;
      margin-right: auto;
    }
    .cw-hero-actions {
      justify-content: center;
    }
    .cw-trust-row {
      justify-content: center;
    }
    .cw-phone-wrapper {
      margin-top: 1rem;
    }
    .cw-table-container {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }
    .cw-showcase-grid {
      grid-template-columns: 1fr;
    }
  }

  @media (max-width: 768px) {
    .cw-hero-wrap {
      padding: 1.5rem 1rem 3rem;
      overflow-x: clip;
    }
    .cw-hero-title {
      font-size: clamp(1.85rem, 7.5vw, 2.75rem);
      line-height: 1.2;
    }
    .cw-hero-desc {
      font-size: 1rem;
      line-height: 1.55;
      margin-bottom: 1.5rem;
    }
    .cw-hero-actions {
      flex-direction: column;
      width: 100%;
      max-width: 360px;
      margin-left: auto;
      margin-right: auto;
      gap: 0.75rem;
    }
    .cw-btn-primary,
    .cw-btn-secondary {
      width: 100%;
      justify-content: center;
      padding: 0.85rem 1.5rem;
      font-size: 0.95rem;
    }
    .cw-trust-row {
      gap: 0.85rem 1.25rem;
      font-size: 0.8rem;
    }

    /* Mobile Chat Input - Crucial iOS Zoom Prevention */
    .cw-chat-input {
      font-size: 16px !important;
      -webkit-text-size-adjust: 100%;
    }

    /* Phone Device on Tablets & Phones */
    .cw-phone-wrapper {
      width: 100%;
      max-width: 360px;
      margin: 1.25rem auto 0;
    }
    .cw-phone-device {
      transform: none !important;
      border-radius: 38px;
      padding: 8px 8px 6px;
      border-width: 2.5px;
    }
    .cw-phone-screen {
      height: 460px;
      border-radius: 30px;
    }
    .cw-wa-body {
      -webkit-overflow-scrolling: touch;
      overscroll-behavior: contain;
      padding: 8px 10px;
      gap: 7px;
    }
    .cw-floating-card {
      transform: scale(0.82);
    }
    .cw-fc-1 {
      left: -8px;
      top: 4%;
      transform-origin: top left;
    }
    .cw-fc-2 {
      right: -8px;
      bottom: 27%;
      transform-origin: bottom right;
    }

    /* Steps Section Mobile */
    .cw-steps-section {
      padding: 3rem 1rem;
    }
    .cw-steps-grid {
      grid-template-columns: 1fr;
      gap: 1rem;
    }
    .cw-step-card {
      padding: 1.5rem 1.25rem;
    }

    /* Showcase Section Mobile */
    .cw-showcase-section {
      padding: 3rem 1rem;
    }
    .cw-card {
      padding: 1.5rem 1.25rem;
    }

    /* Comparison Section Mobile */
    .cw-comparison-section {
      padding: 3rem 1rem;
    }
    .cw-section-header {
      margin-bottom: 2rem;
    }
    .cw-section-title {
      font-size: 1.75rem;
    }
    .cw-section-subtitle {
      font-size: 0.95rem;
    }

    /* Final Sales Banner Mobile */
    .cw-sales-section {
      padding: 3rem 1rem;
    }
    .cw-sales-inner {
      padding: 2.5rem 1.25rem;
      border-radius: 24px;
    }
    .cw-sales-title {
      font-size: 1.75rem;
    }
    .cw-sales-desc {
      font-size: 0.95rem;
    }
    .cw-sales-actions {
      flex-direction: column;
      width: 100%;
      max-width: 320px;
      margin: 0 auto 1.5rem;
    }
    .cw-btn-white,
    .cw-btn-transparent {
      width: 100%;
      justify-content: center;
    }
    .cw-sales-trust {
      flex-direction: column;
      gap: 0.4rem;
    }
  }

  /* Compact Mobile Viewports (<= 400px - iPhone SE, Galaxy S) */
  @media (max-width: 400px) {
    .cw-hero-wrap {
      padding: 1.25rem 0.75rem 2.5rem;
    }
    .cw-phone-wrapper {
      max-width: 315px;
    }
    .cw-phone-device {
      border-radius: 34px;
      padding: 7px 7px 5px;
    }
    .cw-phone-screen {
      height: 430px;
      border-radius: 26px;
    }
    .cw-wa-header {
      padding: 8px 10px;
      gap: 7px;
    }
    .cw-wa-title-row strong {
      font-size: 0.78rem;
    }
    .cw-wa-subtitle {
      font-size: 0.65rem;
    }
    .cw-floating-card {
      transform: scale(0.72);
    }
    .cw-fc-1 {
      left: -4px;
      top: 3%;
    }
    .cw-fc-2 {
      right: -4px;
      bottom: 27%;
    }
    .cw-chips-scroll {
      gap: 4px;
    }
    .cw-chip {
      padding: 4px 9px;
      font-size: 0.68rem;
    }
    .cw-chat-footer {
      padding: 6px 7px 7px;
      gap: 4px;
    }
    .cw-chat-input {
      padding: 7px 10px;
    }
    .cw-chat-send {
      width: 32px;
      height: 32px;
      min-width: 32px;
    }
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
          Scale Your Sales and Support on <span class="highlight-green">WhatsApp</span>
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
          <span class="cw-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            5-Minute Setup
          </span>
          <span class="cw-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Official Meta API
          </span>
          <span class="cw-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Zero Ban Risk
          </span>
        </div>
      </div>

      <!-- Interactive 3D Phone Simulator Stage -->
      <div class="cw-phone-wrapper" id="cw-phone-wrapper">
        <!-- Glowing Ambient Aura -->
        <div class="cw-phone-aura" aria-hidden="true"></div>

        <!-- Floating Card 1: Leads Captured with Live Pulse & Counter -->
        <div class="cw-floating-card cw-fc-1" id="cw-card-leads" title="Real-time Lead Capture Metric">
          <span class="cw-pulse-dot"></span>
          <div class="cw-fc-text">
            <strong>+<span id="cw-leads-num">128</span> Leads Captured</strong>
          </div>
        </div>

        <!-- Floating Card 2: Uptime with Animated Heartbeat SVG -->
        <div class="cw-floating-card cw-fc-2" title="Official WhatsApp Cloud API 99.9% SLA">
          <svg class="cw-ecg-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
          </svg>
          <div class="cw-fc-text">
            <strong>99.9% Delivery Uptime</strong>
          </div>
        </div>

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
                <button type="button" class="cw-chip" data-query="See pricing & plans">💰 See Pricing</button>
                <button type="button" class="cw-chip" data-query="How does AI Bot work?">🤖 How AI Works</button>
                <button type="button" class="cw-chip" data-query="Can I send 50k bulk broadcasts?">📢 Send Broadcasts</button>
                <button type="button" class="cw-chip" data-query="Is there zero ban risk with Meta API?">⚡ 0% Ban Guarantee</button>
                <button type="button" class="cw-chip" data-query="How does multi-agent team inbox work?">👥 Team Inbox</button>
                <button type="button" class="cw-chip" data-query="I want to book a live demo">📞 Book Live Demo</button>
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

  <!-- 2. COMPARISON GRID SECTION -->
  <section class="cw-comparison-section">
    <div class="cw-section-header">
      <span class="cw-badge-pill">Comparison Grid</span>
      <h2 class="cw-section-title">Standard WhatsApp vs WhatsApp Business API</h2>
      <p class="cw-section-subtitle">Discover why scaling on WhatsApp requires switching from the generic app to an official API-powered workflow built for teams.</p>
    </div>

    <div class="cw-table-container">
      <table class="cw-comp-table">
        <thead>
          <tr>
            <th style="width:30%;">Platform Feature</th>
            <th style="width:35%;">WhatsApp App (Standard)</th>
            <th style="width:35%;" class="col-api">Official API (InboxWa)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="cw-comp-feature">Multi-Agent Support</td>
            <td class="cw-comp-standard">Max 4 devices (Single device focus)</td>
            <td class="cw-comp-api">Unlimited agents, dynamic routing</td>
          </tr>
          <tr>
            <td class="cw-comp-feature">Broadcast Limits</td>
            <td class="cw-comp-standard">Max 256 contacts per list (Risk of Ban)</td>
            <td class="cw-comp-api">Unlimited broadcasts, safe delivery</td>
          </tr>
          <tr>
            <td class="cw-comp-feature">Auto-Reply Bots</td>
            <td class="cw-comp-standard">Extremely basic auto-responder</td>
            <td class="cw-comp-api">Visual flow builder + AI Support</td>
          </tr>
          <tr>
            <td class="cw-comp-feature">Green Tick Verification</td>
            <td class="cw-comp-standard">Not available for standard accounts</td>
            <td class="cw-comp-api">Official verified green tick badge</td>
          </tr>
          <tr>
            <td class="cw-comp-feature">CRM & API Integrations</td>
            <td class="cw-comp-standard">No Webhook or API connections</td>
            <td class="cw-comp-api">Robust REST APIs + Webhooks ready</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- 3. INTERACTIVE 9-FEATURE SHOWCASE -->
  <section class="cw-showcase-section">
    <div class="cw-section-header">
      <span class="cw-badge-pill">Interactive Showcase</span>
      <h2 class="cw-section-title">Powerful Tools to Turn WhatsApp into a Sales Machine</h2>
      <p class="cw-section-subtitle">Explore the exact capabilities engineered within our platform to help you automate customer operations completely.</p>
    </div>

    <div class="cw-showcase-grid">
      <!-- Feature 1 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
        </div>
        <h3 class="cw-card-title">Shared Team Inbox</h3>
        <p class="cw-card-desc">Let your entire sales and customer service team chat with customers using a single WhatsApp number. Direct customer messages to the right team member automatically.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Send chats to the right person</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Write notes only your team can see</li>
        </ul>
      </div>

      <!-- Feature 2 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
        </div>
        <h3 class="cw-card-title">Visual Reply Builder</h3>
        <p class="cw-card-desc">Create simple automatic replies for customer questions. Set up answers that trigger when customers type specific words or tap buttons.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Taps and words trigger replies</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Add interactive options menu</li>
        </ul>
      </div>

      <!-- Feature 3 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
        </div>
        <h3 class="cw-card-title">Bulk Messaging</h3>
        <p class="cw-card-desc">Send announcements or notifications to thousands of customers at once. Add their names or personal details to make messages friendly.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Add customer names automatically</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> See who opened and clicked links</li>
        </ul>
      </div>

      <!-- Feature 4 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
        </div>
        <h3 class="cw-card-title">Smart AI Calling</h3>
        <p class="cw-card-desc">Let smart voice assistants make and answer phone calls for your business. Help customers get information without waiting on hold.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Clear and friendly AI voices</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> See summary logs of every call</li>
        </ul>
      </div>

      <!-- Feature 5 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/><path d="M8 14h.01M12 14h.01M16 14h.01"/></svg>
        </div>
        <h3 class="cw-card-title">Easy Scheduling</h3>
        <p class="cw-card-desc">Let customers book appointments and schedule meetings directly inside the WhatsApp chat window. No outside links needed.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Choose calendar dates in chat</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Send automated appointment reminders</li>
        </ul>
      </div>

      <!-- Feature 6 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M8 13h8M8 17h8M8 9h2"/></svg>
        </div>
        <h3 class="cw-card-title">Send Simple Forms</h3>
        <p class="cw-card-desc">Create and send simple forms inside the chat so customers can fill out their details, sign up, or share info without leaving WhatsApp.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Fill out forms inside the chat</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Save customer answers instantly</li>
        </ul>
      </div>

      <!-- Feature 7 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/><path d="M8 10h.01M12 10h.01M16 10h.01"/></svg>
        </div>
        <h3 class="cw-card-title">AI Chat Assistant</h3>
        <p class="cw-card-desc">Train an AI helper using your own business files or website links. It can answer customer questions about pricing and product availability 24/7.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> AI answers customer questions</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Hand over to a real person if needed</li>
        </ul>
      </div>

      <!-- Feature 8 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
        </div>
        <h3 class="cw-card-title">Link Your Existing Tools</h3>
        <p class="cw-card-desc">Connect WhatsApp with the tools you already use like Shopify or your customer database. Send messages automatically when orders are placed or shipped.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Connect with tools like Shopify</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Send messages automatically on updates</li>
        </ul>
      </div>

      <!-- Feature 9 -->
      <div class="cw-card">
        <div class="cw-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 002 2h12a2 2 0 002-2V8z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
        </div>
        <h3 class="cw-card-title">Showcase Your Products</h3>
        <p class="cw-card-desc">Display your product inventory, catalog items, and pictures directly in the chat. Let customers select items and check out right inside WhatsApp.</p>
        <ul class="cw-card-bullets">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Show product lists and pictures</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Quick and easy checkout in chat</li>
        </ul>
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

  <!-- 5. FINAL SALES CTA BANNER -->
  <section class="cw-sales-section">
    <div class="cw-sales-inner">
      <h2 class="cw-sales-title">Turn Your WhatsApp Into A Sales Engine Today</h2>
      <p class="cw-sales-desc">Start sending announcements, managing team chats, and answering customer questions automatically right now.</p>
      <div class="cw-sales-actions">
        <a href="<?php echo $bp; ?>auth/register" class="cw-btn-white">
          Try For Free &rarr;
        </a>
        <button type="button" class="cw-btn-transparent btn-demo-open">
          Talk to Sales
        </button>
      </div>
      <div class="cw-sales-trust">
        <span>✓ 5-Minute Setup</span>
        <span>✓ Official Connection</span>
        <span>✓ Cancel Anytime</span>
      </div>
    </div>
  </section>
</div>

<script>
(function() {
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
      const card = document.getElementById('cw-card-leads');
      if (card) {
        card.style.transform = 'scale(1.12) translateY(-6px)';
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
})();
</script>

<?php
include __DIR__ . '/includes/offer-popup.php';
include __DIR__ . '/includes/callback-popup.php';
include __DIR__ . '/includes/footer.php';
?>
