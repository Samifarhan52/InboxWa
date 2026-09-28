<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'AI Assistant for Customer Support | HelloBotz';
$pageDescription = 'HelloBotz AI Assistant helps your support team answer faster, automate repetitive queries, and provide 24/7 customer support across WhatsApp and digital channels.';
$canonicalUrl = 'https://hellobotz.com/products/ai-assistant/';
$ogImage = 'assets/images/og-image.png';

include __DIR__ . '/../../includes/header.php';
?>

<style>
/* =====================================================================
   HELLOBOTZ AI ASSISTANT PAGE THEME
   ===================================================================== */
:root {
  --ai-p: #6d4aff;
  --ai-p2: #8b5cf6;
  --ai-p-l: rgba(109, 74, 255, 0.08);
  --ai-p-m: rgba(109, 74, 255, 0.22);
  --ai-g: #20c997;
  --ai-g-l: rgba(32, 201, 151, 0.12);
  --ai-t: #111827;
  --ai-t2: #475467;
  --ai-t3: #667085;
  --ai-bg: #f7f8fc;
  --ai-surface: #ffffff;
  --ai-surface2: #f1f3f9;
  --ai-bd: #e8eaf0;
  --ai-bd2: #d8dbe4;
  --ai-sh: 0 18px 55px rgba(32, 30, 70, 0.08);
  --ai-r: 20px;
  --ai-r2: 28px;
  --ai-font: 'Inter', system-ui, -apple-system, sans-serif;
  --ai-max: 1240px;
  --ai-ease: cubic-bezier(.16, 1, .3, 1);
}

body.dark-theme,
[data-theme="dark"] {
  --ai-t: #f8fafc;
  --ai-t2: #cbd5e1;
  --ai-t3: #94a3b8;
  --ai-bg: #0b1120;
  --ai-surface: #0f172a;
  --ai-surface2: #1e293b;
  --ai-bd: rgba(255, 255, 255, 0.08);
  --ai-bd2: rgba(255, 255, 255, 0.15);
  --ai-sh: 0 20px 60px rgba(0, 0, 0, 0.45);
}

.hb-ai-wrap {
  background: var(--ai-bg);
  color: var(--ai-t);
  font-family: var(--ai-font);
  overflow-x: hidden;
  line-height: 1.6;
}

.hb-ai-wrap * {
  box-sizing: border-box;
}

.ai-container {
  max-width: var(--ai-max);
  margin: 0 auto;
  padding: 0 1.5rem;
}

/* TOP GRADIENT STRIP */
.ai-topbar {
  height: 4px;
  background: linear-gradient(90deg, #6d4aff, #9b7cff, #20c997);
}

/* HERO SECTION */
.ai-hero {
  padding: 5rem 0 4.5rem;
  position: relative;
  overflow: hidden;
  background:
    radial-gradient(circle at 85% 18%, rgba(109, 74, 255, 0.12), transparent 32%),
    radial-gradient(circle at 8% 50%, rgba(32, 201, 151, 0.09), transparent 26%);
}

.ai-hero-grid {
  display: grid;
  grid-template-columns: 1.05fr 0.95fr;
  gap: 3.5rem;
  align-items: center;
}

.ai-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: var(--ai-p-l);
  color: var(--ai-p);
  border: 1px solid var(--ai-p-m);
  border-radius: 999px;
  padding: 6px 14px;
  font-size: 0.78rem;
  font-weight: 800;
  letter-spacing: 0.04em;
  margin-bottom: 1.25rem;
  text-transform: uppercase;
}

.ai-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: var(--ai-g);
  box-shadow: 0 0 0 4px var(--ai-g-l);
  animation: aiPulse 2s infinite;
}

@keyframes aiPulse {
  0%, 100% { transform: scale(1); opacity: 1; }
  50% { transform: scale(1.2); opacity: 0.75; }
}

.ai-hero h1 {
  font-size: clamp(2.4rem, 4.4vw, 3.8rem);
  line-height: 1.08;
  letter-spacing: -0.03em;
  font-weight: 850;
  color: var(--ai-t);
  margin-bottom: 1.25rem;
}

.ai-gradient {
  background: linear-gradient(135deg, #6d4aff 0%, #8b5cf6 50%, #20c997 100%);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.ai-hero p.lead {
  font-size: 1.12rem;
  color: var(--ai-t3);
  max-width: 620px;
  margin: 0 0 2rem;
  line-height: 1.65;
}

.ai-hero-actions {
  display: flex;
  gap: 0.85rem;
  flex-wrap: wrap;
  align-items: center;
}

.ai-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 0.82rem 1.65rem;
  border-radius: 12px;
  font-weight: 750;
  font-size: 0.95rem;
  transition: all 0.22s var(--ai-ease);
  text-decoration: none !important;
  cursor: pointer;
  border: 1.5px solid transparent;
}

.ai-btn-primary {
  background: linear-gradient(135deg, #6d4aff 0%, #8b5cf6 100%);
  color: #ffffff !important;
  box-shadow: 0 8px 24px rgba(109, 74, 255, 0.32);
}

.ai-btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 30px rgba(109, 74, 255, 0.45);
  color: #ffffff !important;
}

.ai-btn-secondary {
  background: var(--ai-surface);
  color: var(--ai-t) !important;
  border-color: var(--ai-bd2);
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
}

.ai-btn-secondary:hover {
  border-color: var(--ai-p);
  color: var(--ai-p) !important;
  transform: translateY(-2px);
}

.ai-btn-verified {
  background: linear-gradient(135deg, #10B981 0%, #059669 100%);
  color: #ffffff !important;
  box-shadow: 0 8px 22px rgba(16, 185, 129, 0.3);
}

.ai-btn-verified:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 28px rgba(16, 185, 129, 0.42);
  color: #ffffff !important;
}

.ai-trust-row {
  display: flex;
  gap: 1.5rem;
  flex-wrap: wrap;
  margin-top: 2rem;
  color: var(--ai-t3);
  font-size: 0.85rem;
}

.ai-trust-row span {
  display: flex;
  gap: 6px;
  align-items: center;
}

.ai-check {
  color: #10B981;
  font-weight: 900;
}

/* INTERACTIVE AI CHAT SIMULATOR WINDOW */
.ai-window {
  background: #101322;
  border-radius: var(--ai-r2);
  padding: 12px;
  box-shadow: 0 28px 80px rgba(20, 18, 50, 0.35);
  border: 1px solid rgba(255, 255, 255, 0.08);
  position: relative;
  max-width: 100%;
  box-sizing: border-box;
  overflow: hidden;
}

.ai-window-bar {
  height: 38px;
  display: flex;
  align-items: center;
  gap: 7px;
  padding: 0 12px;
  color: #a8aec2;
  font-size: 0.78rem;
  font-weight: 600;
  overflow: hidden;
  max-width: 100%;
  box-sizing: border-box;
}

.ai-window-title {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  min-width: 0;
  flex: 1;
}

.ai-wdot {
  width: 9px;
  height: 9px;
  border-radius: 50%;
  display: inline-block;
}

.ai-wdot.red { background: #ef4444; }
.ai-wdot.yellow { background: #f59e0b; }
.ai-wdot.green { background: #10b981; }

.ai-app {
  background: var(--ai-bg);
  border-radius: 20px;
  overflow: hidden;
  min-height: 480px;
  display: grid;
  grid-template-columns: 68px 1fr;
}

.ai-sidebar {
  background: #171a29;
  padding: 18px 8px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 14px;
}

.ai-side-logo {
  width: 40px;
  height: 40px;
  border-radius: 12px;
  background: linear-gradient(135deg, #7657ff, #9b7cff);
  display: grid;
  place-items: center;
  color: white;
  font-weight: 900;
  font-size: 1.1rem;
}

.ai-side-icon {
  width: 38px;
  height: 38px;
  border-radius: 10px;
  color: #9da4b9;
  display: grid;
  place-items: center;
  font-size: 1rem;
  cursor: pointer;
  transition: all 0.2s;
}

.ai-side-icon.active,
.ai-side-icon:hover {
  background: rgba(255, 255, 255, 0.12);
  color: white;
}

.ai-chat-area {
  display: flex;
  flex-direction: column;
  background: var(--ai-surface);
  min-width: 0;
  width: 100%;
  overflow: hidden;
}

.ai-chat-head {
  padding: 14px 20px;
  border-bottom: 1px solid var(--ai-bd);
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: var(--ai-surface);
}

.ai-chat-title {
  font-weight: 800;
  font-size: 0.92rem;
  color: var(--ai-t);
}

.ai-online-status {
  font-size: 0.72rem;
  color: #10B981;
  font-weight: 600;
}

.ai-chat-messages {
  padding: 18px;
  display: flex;
  flex-direction: column;
  gap: 12px;
  flex: 1;
  overflow-y: auto;
  max-height: 290px;
}

.ai-msg {
  max-width: 80%;
  padding: 11px 14px;
  border-radius: 14px;
  font-size: 0.82rem;
  line-height: 1.45;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
  word-break: break-word;
  overflow-wrap: anywhere;
}

.ai-msg-customer {
  background: var(--ai-surface2);
  color: var(--ai-t);
  border: 1px solid var(--ai-bd);
  align-self: flex-start;
  border-bottom-left-radius: 4px;
}

.ai-msg-assistant {
  background: #eeeaff;
  color: #2e1d74;
  border: 1px solid #ddd6ff;
  align-self: flex-end;
  border-bottom-right-radius: 4px;
}

body.dark-theme .ai-msg-assistant,
[data-theme="dark"] .ai-msg-assistant {
  background: rgba(109, 74, 255, 0.25);
  color: #e0e7ff;
  border-color: rgba(109, 74, 255, 0.4);
}

.ai-msg-label {
  font-size: 0.65rem;
  font-weight: 800;
  color: var(--ai-p);
  margin-bottom: 4px;
  display: flex;
  align-items: center;
  gap: 4px;
}

.ai-quick-chips {
  padding: 8px 16px 4px;
  display: flex;
  gap: 6px;
  overflow-x: auto;
  scrollbar-width: none;
}

.ai-quick-chips::-webkit-scrollbar { display: none; }

.ai-chip {
  padding: 4px 10px;
  background: var(--ai-p-l);
  color: var(--ai-p);
  border: 1px solid var(--ai-p-m);
  border-radius: 999px;
  font-size: 0.72rem;
  font-weight: 700;
  cursor: pointer;
  white-space: nowrap;
  transition: all 0.18s;
}

.ai-chip:hover {
  background: var(--ai-p);
  color: #fff;
}

.ai-chat-input-bar {
  margin: 8px 14px 14px;
  padding: 8px 12px;
  background: var(--ai-surface2);
  border: 1px solid var(--ai-bd2);
  border-radius: 12px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 8px;
}

.ai-chat-input-bar input {
  background: transparent;
  border: none;
  outline: none;
  font-size: 0.8rem;
  color: var(--ai-t);
  flex: 1;
}

.ai-send-btn {
  background: var(--ai-p);
  color: #fff;
  border: none;
  padding: 6px 12px;
  border-radius: 8px;
  font-size: 0.75rem;
  font-weight: 800;
  cursor: pointer;
  transition: opacity 0.2s;
}

.ai-send-btn:hover {
  opacity: 0.9;
}

/* SECTION STYLES */
.ai-section {
  padding: 5.5rem 0;
}

.ai-section.alt {
  background: var(--ai-surface);
}

.ai-center {
  text-align: center;
}

.ai-kicker {
  font-size: 0.78rem;
  color: var(--ai-p);
  font-weight: 850;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  margin-bottom: 0.6rem;
}

.ai-section-title {
  font-size: clamp(2rem, 3.5vw, 3rem);
  font-weight: 850;
  letter-spacing: -0.025em;
  line-height: 1.12;
  color: var(--ai-t);
  margin-bottom: 0.75rem;
}

.ai-section-intro {
  max-width: 680px;
  margin: 0 auto;
  color: var(--ai-t3);
  font-size: 1.05rem;
  line-height: 1.6;
}

/* FEATURE CARDS GRID */
.ai-cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.5rem;
  margin-top: 3.5rem;
}

.ai-card {
  background: var(--ai-surface);
  border: 1px solid var(--ai-bd);
  border-radius: var(--ai-r);
  padding: 2rem;
  box-shadow: 0 10px 35px rgba(31, 28, 64, 0.04);
  transition: all 0.25s var(--ai-ease);
  text-align: left;
}

.ai-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--ai-sh);
  border-color: #ddd8ff;
}

body.dark-theme .ai-card,
[data-theme="dark"] .ai-card {
  background: var(--ai-surface2);
}

.ai-card-icon {
  width: 48px;
  height: 48px;
  border-radius: 14px;
  background: var(--ai-p-l);
  color: var(--ai-p);
  display: grid;
  place-items: center;
  font-size: 1.35rem;
  margin-bottom: 1.25rem;
}

.ai-card h3 {
  font-size: 1.2rem;
  font-weight: 800;
  margin-bottom: 0.5rem;
  color: var(--ai-t);
}

.ai-card p {
  color: var(--ai-t3);
  font-size: 0.92rem;
  line-height: 1.55;
  margin: 0;
}

/* CO-PILOT GRID */
.ai-copilot-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 4rem;
  align-items: center;
}

.ai-feature-list {
  display: grid;
  gap: 1rem;
  margin-top: 2rem;
}

.ai-feature-item {
  display: flex;
  gap: 1rem;
  padding: 1.1rem 1.25rem;
  border: 1px solid var(--ai-bd);
  border-radius: 16px;
  background: var(--ai-surface);
  transition: transform 0.2s;
}

.ai-feature-item:hover {
  transform: translateX(4px);
  border-color: var(--ai-p-m);
}

body.dark-theme .ai-feature-item,
[data-theme="dark"] .ai-feature-item {
  background: var(--ai-surface2);
}

.ai-feature-icon {
  width: 42px;
  height: 42px;
  flex-shrink: 0;
  border-radius: 12px;
  background: var(--ai-p-l);
  color: var(--ai-p);
  display: grid;
  place-items: center;
  font-size: 1.1rem;
  font-weight: 900;
}

.ai-feature-item b {
  font-size: 0.98rem;
  color: var(--ai-t);
  display: block;
}

.ai-feature-item p {
  font-size: 0.85rem;
  color: var(--ai-t3);
  margin: 3px 0 0;
}

/* MOCK METRICS PANEL */
.ai-mock-panel {
  background: #171a29;
  border-radius: var(--ai-r2);
  padding: 1.75rem;
  box-shadow: var(--ai-sh);
  border: 1px solid rgba(255, 255, 255, 0.08);
}

.ai-panel-head {
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #ffffff;
  margin-bottom: 1.25rem;
  font-size: 0.95rem;
  flex-wrap: wrap;
  gap: 8px;
}

.ai-panel-body {
  background: var(--ai-surface);
  border-radius: 18px;
  padding: 1.5rem;
}

body.dark-theme .ai-panel-body,
[data-theme="dark"] .ai-panel-body {
  background: var(--ai-surface2);
}

.ai-metric-row {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0.75rem;
}

.ai-metric {
  padding: 1rem;
  border: 1px solid var(--ai-bd);
  border-radius: 14px;
  background: var(--ai-bg);
}

body.dark-theme .ai-metric,
[data-theme="dark"] .ai-metric {
  background: rgba(255, 255, 255, 0.03);
}

.ai-metric small {
  color: var(--ai-t3);
  font-size: 0.75rem;
  font-weight: 600;
  display: block;
}

.ai-metric strong {
  display: block;
  font-size: 1.6rem;
  font-weight: 850;
  color: var(--ai-t);
  margin-top: 4px;
}

.ai-bar-wrap {
  margin-top: 1.5rem;
  display: grid;
  gap: 0.85rem;
}

.ai-bar-item {
  display: grid;
  gap: 4px;
}

.ai-bar-label {
  display: flex;
  justify-content: space-between;
  font-size: 0.78rem;
  font-weight: 700;
  color: var(--ai-t2);
}

.ai-bar-line {
  height: 9px;
  border-radius: 999px;
  background: var(--ai-bd);
  overflow: hidden;
}

.ai-bar-fill {
  height: 100%;
  border-radius: 999px;
  background: linear-gradient(90deg, #6d4aff, #20c997);
  transition: width 1s ease-in-out;
}

/* =====================================================================
   INTERACTIVE JOURNEY FLOW SECTION (CUSTOMER SUPPORT LIFECYCLE)
   ===================================================================== */
.ai-journey-section {
  padding: 5.5rem 0;
  background: var(--ai-surface);
  position: relative;
}

.ai-journey-nav {
  display: flex;
  justify-content: center;
  gap: 0.75rem;
  margin: 2rem 0 3rem;
  flex-wrap: wrap;
}

.ai-j-tab {
  padding: 0.65rem 1.4rem;
  border-radius: 999px;
  border: 1px solid var(--ai-bd2);
  background: var(--ai-surface);
  color: var(--ai-t2);
  font-weight: 750;
  font-size: 0.88rem;
  cursor: pointer;
  transition: all 0.2s;
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.ai-j-tab:hover,
.ai-j-tab.active {
  background: var(--ai-p);
  color: #ffffff;
  border-color: var(--ai-p);
  box-shadow: 0 4px 18px rgba(109, 74, 255, 0.3);
}

.ai-journey-timeline {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.25rem;
  position: relative;
}

.ai-journey-card {
  background: var(--ai-bg);
  border: 1.5px solid var(--ai-bd);
  border-radius: var(--ai-r);
  padding: 1.75rem 1.4rem;
  position: relative;
  transition: all 0.25s var(--ai-ease);
}

body.dark-theme .ai-journey-card,
[data-theme="dark"] .ai-journey-card {
  background: var(--ai-surface2);
}

.ai-journey-card.active-step {
  border-color: var(--ai-p);
  box-shadow: 0 10px 30px rgba(109, 74, 255, 0.16);
  transform: translateY(-4px);
}

.ai-j-step-num {
  width: 36px;
  height: 36px;
  border-radius: 10px;
  background: var(--ai-p-l);
  color: var(--ai-p);
  font-weight: 900;
  font-size: 0.85rem;
  display: grid;
  place-items: center;
  margin-bottom: 1rem;
}

.ai-journey-card.active-step .ai-j-step-num {
  background: var(--ai-p);
  color: #ffffff;
}

.ai-journey-card h4 {
  font-size: 1.05rem;
  font-weight: 800;
  margin-bottom: 0.4rem;
  color: var(--ai-t);
}

.ai-journey-card p {
  font-size: 0.85rem;
  color: var(--ai-t3);
  line-height: 1.5;
  margin-bottom: 0.75rem;
}

.ai-j-badge {
  display: inline-block;
  padding: 3px 8px;
  border-radius: 6px;
  background: rgba(32, 201, 151, 0.14);
  color: #10B981;
  font-size: 0.72rem;
  font-weight: 750;
}

/* USE CASES GRID */
.ai-usecases-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.25rem;
  margin-top: 3rem;
}

.ai-use-card {
  padding: 1.5rem;
  border-radius: 18px;
  background: linear-gradient(145deg, var(--ai-surface), var(--ai-bg));
  border: 1px solid var(--ai-bd);
  transition: all 0.2s;
}

body.dark-theme .ai-use-card,
[data-theme="dark"] .ai-use-card {
  background: var(--ai-surface2);
}

.ai-use-card:hover {
  transform: translateY(-4px);
  border-color: var(--ai-p-m);
}

.ai-use-card b {
  font-size: 1rem;
  color: var(--ai-t);
  display: block;
}

.ai-use-card p {
  font-size: 0.85rem;
  color: var(--ai-t3);
  margin-top: 0.5rem;
  line-height: 1.45;
}

/* FAQ SECTION */
.ai-faq-wrap {
  max-width: 820px;
  margin: 2.5rem auto 0;
  display: grid;
  gap: 1rem;
}

.ai-faq-wrap details {
  background: var(--ai-surface);
  border: 1px solid var(--ai-bd);
  border-radius: 16px;
  padding: 1.2rem 1.4rem;
  transition: all 0.2s;
}

body.dark-theme .ai-faq-wrap details,
[data-theme="dark"] .ai-faq-wrap details {
  background: var(--ai-surface2);
}

.ai-faq-wrap details[open] {
  border-color: var(--ai-p-m);
  box-shadow: 0 4px 18px rgba(0, 0, 0, 0.04);
}

.ai-faq-wrap summary {
  font-weight: 800;
  font-size: 0.98rem;
  color: var(--ai-t);
  cursor: pointer;
  list-style: none;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 12px;
}

.ai-faq-wrap summary::-webkit-details-marker { display: none; }

.ai-faq-wrap summary::after {
  content: '+';
  font-size: 1.2rem;
  font-weight: 700;
  color: var(--ai-p);
  transition: transform 0.2s;
  flex-shrink: 0;
}

.ai-faq-wrap details[open] summary::after {
  content: '−';
}

.ai-faq-wrap details p {
  color: var(--ai-t3);
  font-size: 0.9rem;
  padding-top: 0.75rem;
  margin: 0;
  line-height: 1.6;
}

/* BOTTOM CTA BANNER */
.ai-cta-section {
  padding: 5.5rem 0;
  background: linear-gradient(120deg, #17152a 0%, #282052 100%);
  color: #ffffff;
  position: relative;
  overflow: hidden;
}

.ai-cta-box {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 2.5rem;
  position: relative;
  z-index: 2;
}

.ai-cta-box h2 {
  font-size: clamp(2rem, 3.5vw, 2.8rem);
  font-weight: 850;
  line-height: 1.15;
  color: #ffffff;
  margin-bottom: 0.75rem;
}

.ai-cta-box p {
  color: #c9c7d7;
  max-width: 600px;
  font-size: 1.05rem;
  margin: 0;
}

.ai-cta-actions {
  display: flex;
  gap: 0.85rem;
  flex-wrap: wrap;
}

/* RESPONSIVE BREAKPOINTS */
@media (max-width: 1024px) {
  .ai-hero-grid,
  .ai-copilot-grid {
    grid-template-columns: minmax(0, 1fr) !important;
    gap: 3rem;
  }
  .ai-cards-grid {
    grid-template-columns: 1fr 1fr;
  }
  .ai-journey-timeline {
    grid-template-columns: 1fr 1fr;
  }
  .ai-usecases-grid {
    grid-template-columns: 1fr 1fr;
  }
  .ai-cta-box {
    flex-direction: column;
    align-items: flex-start;
  }
}

@media (max-width: 768px) {
  .hb-ai-wrap {
    width: 100% !important;
    max-width: 100vw !important;
    overflow-x: hidden !important;
  }
  .ai-container {
    padding: 0 1rem !important;
    width: 100% !important;
    max-width: 100% !important;
    box-sizing: border-box !important;
  }
  
  /* Sections padding */
  .ai-hero {
    padding: 2.25rem 0 2rem !important;
  }
  .ai-section,
  .ai-journey-section,
  .ai-cta-section {
    padding: 2.75rem 0 !important;
  }
  
  /* Typography */
  .ai-hero h1 {
    font-size: 1.85rem !important;
    line-height: 1.2 !important;
    margin-bottom: 1rem !important;
    word-break: break-word !important;
  }
  .ai-hero p.lead {
    font-size: 0.95rem !important;
    line-height: 1.55 !important;
    margin: 0 0 1.5rem !important;
  }
  .ai-section-title {
    font-size: 1.65rem !important;
    line-height: 1.22 !important;
    letter-spacing: -0.02em !important;
  }
  .ai-section-intro {
    font-size: 0.92rem !important;
    line-height: 1.5 !important;
  }
  
  /* Hero Actions & Trust */
  .ai-hero-actions {
    display: flex !important;
    flex-direction: column !important;
    align-items: stretch !important;
    width: 100% !important;
    gap: 0.75rem !important;
  }
  .ai-btn {
    width: 100% !important;
    justify-content: center !important;
    text-align: center !important;
    padding: 0.85rem 1.25rem !important;
    font-size: 0.92rem !important;
    box-sizing: border-box !important;
  }
  .ai-trust-row {
    flex-direction: column !important;
    align-items: flex-start !important;
    gap: 0.6rem !important;
    margin-top: 1.25rem !important;
    font-size: 0.82rem !important;
  }

  /* Interactive Simulator Window */
  .ai-hero-grid {
    grid-template-columns: minmax(0, 1fr) !important;
    gap: 2rem !important;
    width: 100% !important;
  }
  .ai-window {
    width: 100% !important;
    max-width: 100% !important;
    min-width: 0 !important;
    box-sizing: border-box !important;
    padding: 8px !important;
    border-radius: 16px !important;
    margin: 0 auto !important;
    overflow: hidden !important;
  }
  .ai-window-bar {
    height: 34px !important;
    padding: 0 8px !important;
    font-size: 0.72rem !important;
    display: flex !important;
    align-items: center !important;
    gap: 6px !important;
    overflow: hidden !important;
  }
  .ai-window-bar span:last-child {
    white-space: nowrap !important;
    overflow: hidden !important;
    text-overflow: ellipsis !important;
    min-width: 0 !important;
    flex: 1 !important;
  }
  .ai-app {
    display: grid !important;
    grid-template-columns: minmax(0, 1fr) !important;
    border-radius: 12px !important;
    width: 100% !important;
    min-width: 0 !important;
    min-height: auto !important;
    overflow: hidden !important;
  }
  .ai-sidebar {
    display: none !important;
  }
  .ai-chat-area {
    width: 100% !important;
    min-width: 0 !important;
    overflow: hidden !important;
  }
  .ai-chat-head {
    padding: 10px 12px !important;
  }
  .ai-chat-title {
    font-size: 0.88rem !important;
  }
  .ai-online-status {
    font-size: 0.68rem !important;
  }
  .ai-chat-messages {
    padding: 10px !important;
    max-height: 240px !important;
    gap: 10px !important;
  }
  .ai-msg {
    max-width: 90% !important;
    font-size: 0.8rem !important;
    padding: 8px 11px !important;
    word-break: break-word !important;
    overflow-wrap: anywhere !important;
  }
  .ai-quick-chips {
    padding: 6px 8px 6px !important;
    display: flex !important;
    flex-wrap: nowrap !important;
    gap: 6px !important;
    overflow-x: auto !important;
    -webkit-overflow-scrolling: touch !important;
    scrollbar-width: none !important;
    width: 100% !important;
    box-sizing: border-box !important;
  }
  .ai-chip {
    flex-shrink: 0 !important;
    padding: 4px 8px !important;
    font-size: 0.68rem !important;
    white-space: nowrap !important;
  }
  .ai-chat-input-bar {
    margin: 6px 8px 10px !important;
    padding: 6px 8px !important;
    border-radius: 10px !important;
    display: flex !important;
    gap: 6px !important;
    align-items: center !important;
  }
  .ai-chat-input-bar input {
    font-size: 16px !important;
    min-width: 0 !important;
    flex: 1 !important;
    width: 100% !important;
  }
  .ai-send-btn {
    flex-shrink: 0 !important;
    padding: 6px 10px !important;
    font-size: 0.72rem !important;
    border-radius: 8px !important;
  }

  /* Feature cards */
  .ai-cards-grid {
    grid-template-columns: minmax(0, 1fr) !important;
    gap: 1rem !important;
    margin-top: 2rem !important;
  }
  .ai-card {
    padding: 1.25rem 1rem !important;
    border-radius: 16px !important;
  }
  .ai-card h3 {
    font-size: 1.05rem !important;
  }
  .ai-card p {
    font-size: 0.86rem !important;
  }
  .ai-card-icon {
    width: 40px !important;
    height: 40px !important;
    font-size: 1.15rem !important;
    border-radius: 12px !important;
    margin-bottom: 0.9rem !important;
  }

  /* Co-Pilot & Mock Panel */
  .ai-copilot-grid {
    grid-template-columns: minmax(0, 1fr) !important;
    gap: 2rem !important;
  }
  .ai-feature-list {
    margin-top: 1.25rem !important;
    gap: 0.75rem !important;
  }
  .ai-feature-item {
    padding: 0.85rem 1rem !important;
    border-radius: 14px !important;
    gap: 0.75rem !important;
  }
  .ai-feature-icon {
    width: 36px !important;
    height: 36px !important;
    min-width: 36px !important;
    font-size: 0.95rem !important;
    border-radius: 10px !important;
  }
  .ai-feature-item b {
    font-size: 0.92rem !important;
  }
  .ai-feature-item p {
    font-size: 0.82rem !important;
  }
  .ai-mock-panel {
    padding: 1rem 0.85rem !important;
    border-radius: 18px !important;
    width: 100% !important;
    box-sizing: border-box !important;
    overflow: hidden !important;
  }
  .ai-panel-head {
    display: flex !important;
    flex-wrap: wrap !important;
    justify-content: space-between !important;
    align-items: center !important;
    gap: 6px !important;
    margin-bottom: 0.9rem !important;
  }
  .ai-panel-head b {
    font-size: 0.85rem !important;
  }
  .ai-panel-head span {
    font-size: 0.72rem !important;
  }
  .ai-panel-body {
    padding: 0.85rem !important;
    border-radius: 14px !important;
  }
  .ai-metric-row {
    grid-template-columns: repeat(3, 1fr) !important;
    gap: 0.5rem !important;
  }
  .ai-metric {
    padding: 0.65rem 0.5rem !important;
    border-radius: 10px !important;
    text-align: center !important;
  }
  .ai-metric small {
    font-size: 0.68rem !important;
    line-height: 1.2 !important;
  }
  .ai-metric strong {
    font-size: 1.2rem !important;
    margin-top: 2px !important;
  }
  .ai-bar-label {
    font-size: 0.72rem !important;
  }

  /* Journey Nav Horizontal Touch-Scroll */
  .ai-journey-nav {
    display: flex !important;
    flex-wrap: nowrap !important;
    overflow-x: auto !important;
    -webkit-overflow-scrolling: touch !important;
    justify-content: flex-start !important;
    padding: 4px 1rem 12px !important;
    margin: 1.25rem -1rem 1.75rem !important;
    scrollbar-width: none !important;
    gap: 0.5rem !important;
    width: calc(100% + 2rem) !important;
    box-sizing: border-box !important;
  }
  .ai-journey-nav::-webkit-scrollbar {
    display: none !important;
  }
  .ai-j-tab {
    flex-shrink: 0 !important;
    white-space: nowrap !important;
    padding: 0.55rem 1rem !important;
    font-size: 0.8rem !important;
  }
  .ai-journey-timeline {
    grid-template-columns: minmax(0, 1fr) !important;
    gap: 1rem !important;
  }
  .ai-journey-card {
    padding: 1.25rem 1rem !important;
    border-radius: 16px !important;
  }
  .ai-journey-card h4 {
    font-size: 0.98rem !important;
  }
  .ai-journey-card p {
    font-size: 0.82rem !important;
  }

  /* Use cases */
  .ai-usecases-grid {
    grid-template-columns: 1fr 1fr !important;
    gap: 0.85rem !important;
    margin-top: 1.75rem !important;
  }
  .ai-use-card {
    padding: 1rem 0.85rem !important;
    border-radius: 14px !important;
  }
  .ai-use-card b {
    font-size: 0.9rem !important;
  }
  .ai-use-card p {
    font-size: 0.8rem !important;
  }

  /* FAQ */
  .ai-faq-wrap {
    margin: 1.75rem auto 0 !important;
    gap: 0.75rem !important;
  }
  .ai-faq-wrap details {
    padding: 1rem 1.15rem !important;
    border-radius: 14px !important;
  }
  .ai-faq-wrap summary {
    font-size: 0.9rem !important;
    gap: 12px !important;
  }
  .ai-faq-wrap summary::after {
    flex-shrink: 0 !important;
    font-size: 1.1rem !important;
  }
  .ai-faq-wrap details p {
    font-size: 0.84rem !important;
  }

  /* Bottom CTA */
  .ai-cta-box {
    flex-direction: column !important;
    align-items: stretch !important;
    text-align: center !important;
    gap: 1.5rem !important;
  }
  .ai-cta-box h2 {
    font-size: 1.65rem !important;
    line-height: 1.2 !important;
  }
  .ai-cta-box p {
    font-size: 0.9rem !important;
    margin: 0 auto !important;
  }
  .ai-cta-actions {
    flex-direction: column !important;
    width: 100% !important;
    gap: 0.75rem !important;
    align-items: stretch !important;
  }
  .ai-cta-actions .ai-btn {
    width: 100% !important;
    justify-content: center !important;
    text-align: center !important;
  }
}

@media (max-width: 480px) {
  .ai-hero h1 {
    font-size: 1.65rem !important;
    line-height: 1.22 !important;
  }
  .ai-section-title {
    font-size: 1.5rem !important;
  }
  .ai-metric-row {
    grid-template-columns: 1fr !important;
    gap: 0.5rem !important;
  }
  .ai-usecases-grid {
    grid-template-columns: 1fr !important;
  }
}</style>

<div class="hb-ai-wrap">
  <div class="ai-topbar"></div>

  <!-- HERO SECTION -->
  <section class="ai-hero">
    <div class="ai-container ai-hero-grid">
      <div>
        <div class="ai-eyebrow">
          <span class="ai-dot"></span> AI-POWERED CUSTOMER SUPPORT
        </div>
        <h1>Support customers faster with your <span class="ai-gradient">AI Assistant.</span></h1>
        <p class="lead">
          Give your support team an intelligent co-pilot that understands customer intent, suggests accurate replies, handles repetitive queries, and helps your agents respond with confidence — 24/7 across WhatsApp and omnichannel inboxes.
        </p>
        <div class="ai-hero-actions">
          <a href="https://app.hellobotz.com/auth/register" class="ai-btn ai-btn-primary">
            Start Free with AI Assistant →
          </a>
          <button type="button" class="ai-btn ai-btn-secondary btn-demo-open">
            Book Live Demo
          </button>
          <a href="#contact-section" class="ai-btn ai-btn-verified">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified
          </a>
        </div>
        <div class="ai-trust-row">
          <span><b class="ai-check">✓</b> 24/7 Autonomous AI Layer</span>
          <span><b class="ai-check">✓</b> Instant Human Handover</span>
          <span><b class="ai-check">✓</b> Official WhatsApp API Ready</span>
        </div>
      </div>

      <!-- INTERACTIVE AI SUPPORT WINDOW MOCKUP -->
      <div class="ai-window">
        <div class="ai-window-bar">
          <span class="ai-wdot red"></span>
          <span class="ai-wdot yellow"></span>
          <span class="ai-wdot green"></span>
          <span class="ai-window-title" style="margin-left:8px">HelloBotz AI Support Co-Pilot · Active Session</span>
        </div>
        <div class="ai-app">
          <aside class="ai-sidebar">
            <div class="ai-side-logo">HB</div>
            <div class="ai-side-icon active" title="AI Chat">✦</div>
            <div class="ai-side-icon" title="Knowledge Base">◫</div>
            <div class="ai-side-icon" title="Team Inbox">♙</div>
            <div class="ai-side-icon" title="Settings">⚙</div>
          </aside>
          <div class="ai-chat-area">
            <div class="ai-chat-head">
              <div>
                <div class="ai-chat-title">AI Support Assistant</div>
                <div class="ai-online-status">● Online · Auto-Suggest Ready (&lt; 0.8s)</div>
              </div>
              <span style="color:var(--ai-t3);font-size:1.1rem;cursor:pointer;">⋮</span>
            </div>
            
            <div class="ai-chat-messages" id="ai-chat-messages">
              <div class="ai-msg ai-msg-customer">
                Hi! I placed order #HB2048 yesterday. Can you tell me when it will arrive?
              </div>
              <div class="ai-msg ai-msg-assistant">
                <div class="ai-msg-label">✦ AI SUGGESTED REPLY (Confidence 98%)</div>
                Hello! Your order <b>#HB2048</b> has been dispatched and is currently <b>Out for Delivery</b> via BlueDart Express. Expected arrival is today before 5:00 PM.
              </div>
              <div class="ai-msg ai-msg-customer">
                Awesome, thank you! Could you also share the live tracking link?
              </div>
              <div class="ai-msg ai-msg-assistant">
                <div class="ai-msg-label">✦ AI 1-CLICK DISPATCH</div>
                Here is your live tracking link: <a href="javascript:void(0)" style="color:var(--ai-p);font-weight:700;">track.hellobotz.com/HB2048</a>. Please let me know if you need anything else! 😊
              </div>
            </div>

            <!-- Quick interactive scenario test chips -->
            <div class="ai-quick-chips">
              <span class="ai-chip" onclick="simulateAiChat('Track Order #HB9902')">📦 Track Order</span>
              <span class="ai-chip" onclick="simulateAiChat('What is your refund policy?')">💳 Refund Policy</span>
              <span class="ai-chip" onclick="simulateAiChat('Can I speak with a human executive?')">👤 Human Handover</span>
              <span class="ai-chip" onclick="simulateAiChat('How do I update shipping address?')">📍 Change Address</span>
            </div>

            <div class="ai-chat-input-bar">
              <input type="text" id="ai-input-field" placeholder="Ask AI Assistant to draft or reply..." onkeypress="if(event.key==='Enter') simulateAiCustom();">
              <button type="button" class="ai-send-btn" onclick="simulateAiCustom()">Send ➤</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES SECTION -->
  <section class="ai-section alt" id="features">
    <div class="ai-container ai-center">
      <div class="ai-kicker">AI SUPPORT FEATURES</div>
      <h2 class="ai-section-title">Turn every support conversation into a smarter experience.</h2>
      <p class="ai-section-intro">
        HelloBotz AI Assistant works alongside your human agents to eliminate repetitive queries, boost first-response resolution, and maintain consistent brand voice across all channels.
      </p>

      <div class="ai-cards-grid">
        <div class="ai-card">
          <div class="ai-card-icon">✦</div>
          <h3>Smart Reply Suggestions</h3>
          <p>Generate context-aware replies from the customer's chat history so agents can respond instantly with accurate, approved data without typing from scratch.</p>
        </div>

        <div class="ai-card">
          <div class="ai-card-icon">◉</div>
          <h3>24/7 AI Assistance</h3>
          <p>Answer customer questions instantly even outside business hours, holidays, and weekends with an always-active, brand-safe AI support layer.</p>
        </div>

        <div class="ai-card">
          <div class="ai-card-icon">⚡</div>
          <h3>Instant Conversation Summary</h3>
          <p>Summarize lengthy customer threads into concise bullet points, highlighting customer sentiment, previous orders, core issues, and suggested next steps.</p>
        </div>

        <div class="ai-card">
          <div class="ai-card-icon">⌁</div>
          <h3>Knowledge-Based Answers</h3>
          <p>Connect your internal knowledge base, PDFs, website URLs, return policies, and product catalogs to train AI on your specific business rules.</p>
        </div>

        <div class="ai-card">
          <div class="ai-card-icon">↗</div>
          <h3>Seamless Human Handover</h3>
          <p>Let AI handle repetitive Tier-1 queries while smoothly escalating VIP customers and high-ticket intents to human specialists with complete context.</p>
        </div>

        <div class="ai-card">
          <div class="ai-card-icon">◌</div>
          <h3>Omnichannel Synchronization</h3>
          <p>Deploy your AI assistant simultaneously across WhatsApp, Instagram DM, Facebook Messenger, Telegram, Webchat, and Email from one unified inbox.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- AI + HUMAN CO-PILOT GRID -->
  <section class="ai-section">
    <div class="ai-container ai-copilot-grid">
      <div>
        <div class="ai-kicker">AI + HUMAN CO-PILOT</div>
        <h2 class="ai-section-title" style="text-align:left;">Your agents stay in control. AI does the heavy lifting.</h2>
        <p class="ai-section-intro" style="margin-left:0;text-align:left;">
          Give your team an intelligent co-pilot instead of replacing the personal touch your customers value. Agents review, customize, and approve responses in a single tap.
        </p>

        <div class="ai-feature-list">
          <div class="ai-feature-item">
            <div class="ai-feature-icon">✦</div>
            <div>
              <b>Draft replies in sub-second latency</b>
              <p>AI scans the context and prepares the exact tracking, policy, or billing answer for instant approval.</p>
            </div>
          </div>

          <div class="ai-feature-item">
            <div class="ai-feature-icon">✓</div>
            <div>
              <b>Keep answers 100% consistent</b>
              <p>Eliminate human errors by grounding replies on approved internal business documentation and CRM records.</p>
            </div>
          </div>

          <div class="ai-feature-item">
            <div class="ai-feature-icon">↗</div>
            <div>
              <b>Escalate with complete audit context</b>
              <p>Transfer chats to specialist agents with summary notes, detected emotions, and CRM customer lifetime value.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="ai-mock-panel">
        <div class="ai-panel-head">
          <b>AI Support Intelligence Overview</b>
          <span style="color:#10B981;font-weight:700;font-size:0.8rem;">● Real-Time Telemetry</span>
        </div>
        <div class="ai-panel-body">
          <div class="ai-metric-row">
            <div class="ai-metric">
              <small>AI Assisted Chats</small>
              <strong>82.4%</strong>
            </div>
            <div class="ai-metric">
              <small>Avg Response Time</small>
              <strong>&lt; 0.8s</strong>
            </div>
            <div class="ai-metric">
              <small>Active Threads</small>
              <strong>128</strong>
            </div>
          </div>

          <div class="ai-bar-wrap">
            <div class="ai-bar-item">
              <div class="ai-bar-label">
                <span>Autonomous AI Resolution</span>
                <span>82%</span>
              </div>
              <div class="ai-bar-line">
                <div class="ai-bar-fill" style="width:82%;"></div>
              </div>
            </div>

            <div class="ai-bar-item">
              <div class="ai-bar-label">
                <span>Agent Suggestion Acceptance</span>
                <span>91%</span>
              </div>
              <div class="ai-bar-line">
                <div class="ai-bar-fill" style="width:91%;"></div>
              </div>
            </div>

            <div class="ai-bar-item">
              <div class="ai-bar-label">
                <span>Customer Satisfaction (CSAT)</span>
                <span>96.4%</span>
              </div>
              <div class="ai-bar-line">
                <div class="ai-bar-fill" style="width:96.4%;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INTERACTIVE JOURNEY FLOW SECTION -->
  <section class="ai-journey-section" id="how">
    <div class="ai-container ai-center">
      <div class="ai-kicker">INTERACTIVE JOURNEY FLOW</div>
      <h2 class="ai-section-title">From customer question to resolved ticket in seconds.</h2>
      <p class="ai-section-intro">
        Explore how customer queries navigate our 4-stage intelligent processing pipeline. Switch scenarios below to see real-time handling.
      </p>

      <!-- Scenario Switcher -->
      <div class="ai-journey-nav">
        <button type="button" class="ai-j-tab active" onclick="switchJourneyScenario('order', this)">
          📦 Order &amp; Delivery Tracking
        </button>
        <button type="button" class="ai-j-tab" onclick="switchJourneyScenario('refund', this)">
          💳 Refund &amp; Escalation Handover
        </button>
        <button type="button" class="ai-j-tab" onclick="switchJourneyScenario('lead', this)">
          🌙 After-Hours Lead Capture
        </button>
      </div>

      <!-- 4-Step Journey Cards -->
      <div class="ai-journey-timeline" id="ai-journey-container">
        <div class="ai-journey-card active-step" id="j-step-1">
          <div class="ai-j-step-num">01</div>
          <h4 id="j-title-1">Omnichannel Ingest</h4>
          <p id="j-desc-1">Customer texts WhatsApp asking about dispatch timing and courier tracking.</p>
          <span class="ai-j-badge" id="j-badge-1">Instant Hook &lt; 20ms</span>
        </div>

        <div class="ai-journey-card active-step" id="j-step-2">
          <div class="ai-j-step-num">02</div>
          <h4 id="j-title-2">Intent &amp; RAG Match</h4>
          <p id="j-desc-2">AI extracts order number #HB2048, checks Shopify/CRM API, and matches policy.</p>
          <span class="ai-j-badge" id="j-badge-2">Zero Hallucination</span>
        </div>

        <div class="ai-journey-card active-step" id="j-step-3">
          <div class="ai-j-step-num">03</div>
          <h4 id="j-title-3">Co-Pilot Suggestion</h4>
          <p id="j-desc-3">AI formats personalized answer with tracking link &amp; predicted delivery window.</p>
          <span class="ai-j-badge" id="j-badge-3">Agent 1-Click Approve</span>
        </div>

        <div class="ai-journey-card active-step" id="j-step-4">
          <div class="ai-j-step-num">04</div>
          <h4 id="j-title-4">Resolution &amp; Sync</h4>
          <p id="j-desc-4">Message dispatched to WhatsApp, ticket marked resolved in CRM with CSAT survey.</p>
          <span class="ai-j-badge" id="j-badge-4">99.8% CSAT Rating</span>
        </div>
      </div>
    </div>
  </section>

  <!-- USE CASES SECTION -->
  <section class="ai-section" id="usecases">
    <div class="ai-container ai-center">
      <div class="ai-kicker">BUILT FOR EVERY WORKFLOW</div>
      <h2 class="ai-section-title">One AI Assistant. Limitless support scenarios.</h2>
      <p class="ai-section-intro">
        Whether you are managing e-commerce shipments, clinic appointments, or SaaS onboarding, HelloBotz AI scales with your volume.
      </p>

      <div class="ai-usecases-grid">
        <div class="ai-use-card">
          <b>📦 Order &amp; Delivery</b>
          <p>Answer tracking requests, delivery reschedules, and address verification automatically.</p>
        </div>
        <div class="ai-use-card">
          <b>💬 FAQs &amp; Inquiries</b>
          <p>Handle 80% of repetitive questions on hours, location, warranty, and pricing instantly.</p>
        </div>
        <div class="ai-use-card">
          <b>🧾 Billing &amp; Invoices</b>
          <p>Retrieve GST invoices, explain payment failures, and send secure payment links.</p>
        </div>
        <div class="ai-use-card">
          <b>🛠 Product Troubleshooting</b>
          <p>Guide customers through step-by-step setup, video guides, and user manual lookup.</p>
        </div>
        <div class="ai-use-card">
          <b>👥 Pre-Sales Lead Support</b>
          <p>Qualify prospect budget, gather requirements, and book calendar meetings for sales.</p>
        </div>
        <div class="ai-use-card">
          <b>🎫 Ticket Summary &amp; Routing</b>
          <p>Auto-categorize customer complaints and assign priority tickets to the right team.</p>
        </div>
        <div class="ai-use-card">
          <b>🌙 24/7 After-Hours Layer</b>
          <p>Never leave customers hanging at midnight. Provide instant help around the clock.</p>
        </div>
        <div class="ai-use-card">
          <b>🔁 Automated Follow-ups</b>
          <p>Check back with customers 24 hours after resolution to confirm their issue remains solved.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ SECTION -->
  <section class="ai-section alt" id="faq">
    <div class="ai-container">
      <div class="ai-center">
        <div class="ai-kicker">COMMON QUESTIONS</div>
        <h2 class="ai-section-title">Frequently Asked Questions</h2>
        <p class="ai-section-intro">Everything you need to know about setting up HelloBotz AI Assistant.</p>
      </div>

      <div class="ai-faq-wrap">
        <details open>
          <summary>Can AI Assistant work with our existing WhatsApp support inbox?</summary>
          <p>Yes. HelloBotz AI Assistant natively integrates into your WhatsApp Business API shared inbox. It works as an agent co-pilot drafting suggestions for your team or as an autonomous first-line responder.</p>
        </details>

        <details>
          <summary>How does the human agent handover work?</summary>
          <p>If a customer expresses frustration, asks for a human agent, or enters a high-intent sales question, the AI Assistant instantly flags the conversation, notifies the assigned human executive, and transfers the chat with an auto-generated context summary.</p>
        </details>

        <details>
          <summary>Can we control what the AI answers and prevent hallucinations?</summary>
          <p>Absolutely. HelloBotz uses strict Retrieval-Augmented Generation (RAG). The assistant only answers using information found in your uploaded knowledge documents, website URLs, and verified policy guides. If an answer isn't in your knowledge base, it politely offers to connect with a team member.</p>
        </details>

        <details>
          <summary>Does the AI support multiple languages like Hindi and Hinglish?</summary>
          <p>Yes. HelloBotz AI Assistant automatically detects and replies in English, Hindi, Hinglish, Spanish, Arabic, Portuguese, and over 60+ global languages, ensuring your customers feel understood in their preferred language.</p>
        </details>

        <details>
          <summary>How fast can we set this up for our company?</summary>
          <p>Onboarding typically takes less than 15 minutes. Connect your WhatsApp channel, paste your website URL or upload your support FAQ document, and start testing your AI assistant immediately in sandbox mode.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- BOTTOM CTA BANNER -->
  <section class="ai-cta-section" id="demo">
    <div class="ai-container ai-cta-box">
      <div>
        <div class="ai-kicker" style="color:#a99aff;">READY TO ACCELERATE SUPPORT?</div>
        <h2>Make every support conversation faster.</h2>
        <p>Bring AI-powered assistance into your customer support workflow and let your team focus on high-impact customer relationships.</p>
      </div>
      <div class="ai-cta-actions">
        <a href="https://app.hellobotz.com/auth/register" class="ai-btn" style="background:#ffffff;color:#181528;font-weight:800;">
          Start Free Trial →
        </a>
        <button type="button" class="ai-btn btn-demo-open" style="border:1.5px solid rgba(255,255,255,0.35);color:#ffffff;background:transparent;">
          Book a Live Demo
        </button>
        <a href="#contact-section" class="ai-btn ai-btn-verified">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
          Get Verified
        </a>
      </div>
    </div>
  </section>
</div>

<script>
/* =====================================================================
   INTERACTIVE SIMULATOR & JOURNEY SCRIPTS
   ===================================================================== */
function simulateAiChat(query) {
  var chatBox = document.getElementById('ai-chat-messages');
  if (!chatBox) return;

  // Append customer message
  var custDiv = document.createElement('div');
  custDiv.className = 'ai-msg ai-msg-customer';
  custDiv.textContent = query;
  chatBox.appendChild(custDiv);
  chatBox.scrollTop = chatBox.scrollHeight;

  // Prepare response based on chip
  var response = '';
  if (query.indexOf('Track') !== -1) {
    response = 'Package #HB9902 is currently loaded on the delivery van with courier Ecom Express. Expected delivery today by 4:30 PM. Live OTP: 4492.';
  } else if (query.indexOf('Refund') !== -1) {
    response = 'Our refund policy guarantees 100% money back within 7 days of delivery. Refunds are credited back to the original payment method in 3–5 business days.';
  } else if (query.indexOf('human') !== -1 || query.indexOf('Handover') !== -1) {
    response = 'Transferring you right away to our senior support specialist, Priya Sharma. She has received your chat summary and will respond within 45 seconds!';
  } else {
    response = 'You can change your shipping address within 2 hours of order placement directly from our customer portal or I can update it for you right now.';
  }

  // Simulate typing indicator
  setTimeout(function() {
    var aiDiv = document.createElement('div');
    aiDiv.className = 'ai-msg ai-msg-assistant';
    aiDiv.innerHTML = '<div class="ai-msg-label">✦ AI AUTO-SUGGESTION</div>' + response;
    chatBox.appendChild(aiDiv);
    chatBox.scrollTop = chatBox.scrollHeight;
  }, 450);
}

function simulateAiCustom() {
  var input = document.getElementById('ai-input-field');
  if (!input || !input.value.trim()) return;
  var text = input.value.trim();
  input.value = '';
  simulateAiChat(text);
}

var journeyData = {
  order: [
    { title: 'Omnichannel Ingest', desc: 'Customer texts WhatsApp asking about dispatch timing and courier tracking.', badge: 'Instant Hook < 20ms' },
    { title: 'Intent & RAG Match', desc: 'AI extracts order number #HB2048, checks Shopify/CRM API, and matches policy.', badge: 'Zero Hallucination' },
    { title: 'Co-Pilot Suggestion', desc: 'AI formats personalized answer with tracking link & predicted delivery window.', badge: 'Agent 1-Click Approve' },
    { title: 'Resolution & Sync', desc: 'Message dispatched to WhatsApp, ticket marked resolved in CRM with CSAT survey.', badge: '99.8% CSAT Rating' }
  ],
  refund: [
    { title: 'Refund Request Flag', desc: 'Customer requests a replacement or full refund on a damaged item.', badge: 'High-Intent Detection' },
    { title: 'Eligibility Check', desc: 'AI validates purchase date (within 7-day window) and auto-requests photo proof.', badge: 'Automated Proof Collect' },
    { title: 'Human Escalation', desc: 'AI alerts Tier-2 Returns Lead with order invoice, reason code, and customer tier.', badge: 'VIP Fast-Track Handover' },
    { title: 'Instant Reverse Pickup', desc: 'Executive approves refund in 1-tap, auto-booking return courier via Delhivery.', badge: 'Zero Wait Latency' }
  ],
  lead: [
    { title: 'After-Hours Ping', desc: 'Website visitor texts WhatsApp at 11:45 PM asking about Enterprise API volume.', badge: '24/7 Availability' },
    { title: 'AI Qualification', desc: 'AI inquires about expected monthly message volume, company size, and budget.', badge: 'Instant Lead Scoring' },
    { title: 'Calendar Booking', desc: 'AI presents Google Calendar slot picker directly inside the WhatsApp chat.', badge: 'Calendar Direct Sync' },
    { title: 'Sales CRM Handover', desc: 'Lead logged in Zoho CRM with meeting invite sent to enterprise account executive.', badge: 'Zero Lead Leakage' }
  ]
};

function switchJourneyScenario(scenario, btn) {
  var tabs = document.querySelectorAll('.ai-j-tab');
  tabs.forEach(function(t) { t.classList.remove('active'); });
  if (btn) btn.classList.add('active');

  var data = journeyData[scenario];
  if (!data) return;

  for (var i = 0; i < 4; i++) {
    var titleEl = document.getElementById('j-title-' + (i + 1));
    var descEl = document.getElementById('j-desc-' + (i + 1));
    var badgeEl = document.getElementById('j-badge-' + (i + 1));
    if (titleEl) titleEl.textContent = data[i].title;
    if (descEl) descEl.textContent = data[i].desc;
    if (badgeEl) badgeEl.textContent = data[i].badge;
  }
}
</script>

<?php
$footerContactText = "Talk to our AI architects to deploy customized AI Assistant agents, connect your knowledge base, and integrate WhatsApp support.";
include __DIR__ . '/../../includes/footer.php';
?>
