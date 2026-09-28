<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Feedback Collection | CSAT & NPS Surveys | HelloBotz';
$pageDescription = 'Collect customer feedback, ratings and insights automatically with HelloBotz Feedback Collection across WhatsApp and digital channels.';
$canonicalUrl = 'https://hellobotz.com/products/feedback-collection/';
$ogImage = 'assets/images/og-image.png';

include __DIR__ . '/../../includes/header.php';
?>

<style>
/* =====================================================================
   HELLOBOTZ FEEDBACK COLLECTION PAGE THEME
   ===================================================================== */
:root {
  --fb-p: #6d4aff;
  --fb-p2: #8b5cf6;
  --fb-p-l: rgba(109, 74, 255, 0.08);
  --fb-p-m: rgba(109, 74, 255, 0.22);
  --fb-g: #20b486;
  --fb-g-l: rgba(32, 180, 134, 0.12);
  --fb-gold: #f59e0b;
  --fb-t: #151827;
  --fb-t2: #475467;
  --fb-t3: #687086;
  --fb-bg: #f7f8fc;
  --fb-surface: #ffffff;
  --fb-surface2: #f1f3f9;
  --fb-bd: #e7e9f0;
  --fb-bd2: #d8dbe4;
  --fb-sh: 0 22px 65px rgba(38, 31, 85, 0.10);
  --fb-r: 20px;
  --fb-r2: 28px;
  --fb-font: 'Inter', system-ui, -apple-system, sans-serif;
  --fb-max: 1240px;
  --fb-ease: cubic-bezier(.16, 1, .3, 1);
}

body.dark-theme,
[data-theme="dark"] {
  --fb-t: #f8fafc;
  --fb-t2: #cbd5e1;
  --fb-t3: #94a3b8;
  --fb-bg: #0b1120;
  --fb-surface: #0f172a;
  --fb-surface2: #1e293b;
  --fb-bd: rgba(255, 255, 255, 0.08);
  --fb-bd2: rgba(255, 255, 255, 0.15);
  --fb-sh: 0 20px 60px rgba(0, 0, 0, 0.45);
}

.hb-fb-wrap {
  background: var(--fb-bg);
  color: var(--fb-t);
  font-family: var(--fb-font);
  overflow-x: hidden;
  line-height: 1.6;
}

.hb-fb-wrap * {
  box-sizing: border-box;
}

.fb-container {
  max-width: var(--fb-max);
  margin: 0 auto;
  padding: 0 1.5rem;
}

/* TOP GRADIENT STRIP */
.fb-topbar {
  height: 4px;
  background: linear-gradient(90deg, #6d4aff, #8b5cf6, #20b486);
}

/* HERO SECTION */
.fb-hero {
  padding: 5rem 0 4.5rem;
  position: relative;
  overflow: hidden;
  background:
    radial-gradient(circle at 82% 12%, rgba(109, 74, 255, 0.12), transparent 30%),
    radial-gradient(circle at 5% 65%, rgba(32, 180, 134, 0.09), transparent 26%);
}

.fb-hero-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 3.5rem;
  align-items: center;
}

.fb-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 6px 14px;
  border-radius: 999px;
  background: var(--fb-p-l);
  color: var(--fb-p);
  border: 1px solid var(--fb-p-m);
  font-size: 0.78rem;
  font-weight: 800;
  margin-bottom: 1.25rem;
  text-transform: uppercase;
  letter-spacing: 0.04em;
}

.fb-badge-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: var(--fb-g);
  box-shadow: 0 0 0 4px var(--fb-g-l);
  animation: fbPulse 2s infinite;
}

@keyframes fbPulse {
  0%, 100% { transform: scale(1); opacity: 1; }
  50% { transform: scale(1.2); opacity: 0.75; }
}

.fb-hero h1 {
  font-size: clamp(2.4rem, 4.4vw, 3.8rem);
  line-height: 1.06;
  letter-spacing: -0.03em;
  font-weight: 850;
  color: var(--fb-t);
  margin-bottom: 1.25rem;
}

.fb-gradient {
  background: linear-gradient(135deg, #6d4aff 0%, #8b5cf6 50%, #20b486 100%);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.fb-hero-copy {
  font-size: 1.12rem;
  color: var(--fb-t3);
  max-width: 620px;
  margin: 0 0 2rem;
  line-height: 1.65;
}

.fb-actions {
  display: flex;
  gap: 0.85rem;
  flex-wrap: wrap;
  align-items: center;
}

.fb-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 0.82rem 1.65rem;
  border-radius: 12px;
  font-size: 0.95rem;
  font-weight: 750;
  text-decoration: none !important;
  transition: all 0.22s var(--fb-ease);
  cursor: pointer;
  border: 1.5px solid transparent;
}

.fb-btn-primary {
  background: linear-gradient(135deg, #6d4aff 0%, #8b5cf6 100%);
  color: #ffffff !important;
  box-shadow: 0 8px 24px rgba(109, 74, 255, 0.3);
}

.fb-btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 30px rgba(109, 74, 255, 0.45);
  color: #ffffff !important;
}

.fb-btn-secondary {
  background: var(--fb-surface);
  color: var(--fb-t) !important;
  border-color: var(--fb-bd2);
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
}

.fb-btn-secondary:hover {
  border-color: var(--fb-p);
  color: var(--fb-p) !important;
  transform: translateY(-2px);
}

.fb-btn-verified {
  background: linear-gradient(135deg, #10B981 0%, #059669 100%);
  color: #ffffff !important;
  box-shadow: 0 8px 22px rgba(16, 185, 129, 0.3);
}

.fb-btn-verified:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 28px rgba(16, 185, 129, 0.42);
  color: #ffffff !important;
}

.fb-trust {
  display: flex;
  gap: 1.5rem;
  flex-wrap: wrap;
  margin-top: 2rem;
  font-size: 0.85rem;
  color: var(--fb-t3);
}

.fb-trust span {
  display: flex;
  align-items: center;
  gap: 6px;
}

.fb-check {
  color: #10B981;
  font-weight: 900;
}

/* INTERACTIVE FEEDBACK UI MOCKUP */
.fb-shell {
  background: #151827;
  border-radius: var(--fb-r2);
  padding: 12px;
  box-shadow: 0 30px 80px rgba(26, 22, 55, 0.32);
  border: 1px solid rgba(255, 255, 255, 0.08);
}

.fb-browser-bar {
  height: 38px;
  display: flex;
  align-items: center;
  gap: 7px;
  padding: 0 12px;
  color: #9299ad;
  font-size: 0.78rem;
  font-weight: 600;
}

.fb-browser-dot {
  width: 9px;
  height: 9px;
  border-radius: 50%;
  display: inline-block;
}

.fb-browser-dot.red { background: #ef4444; }
.fb-browser-dot.yellow { background: #f59e0b; }
.fb-browser-dot.green { background: #10b981; }

.fb-app {
  background: var(--fb-surface);
  border-radius: 20px;
  overflow: hidden;
  border: 1px solid var(--fb-bd);
}

body.dark-theme .fb-app,
[data-theme="dark"] .fb-app {
  background: var(--fb-surface);
}

.fb-app-head {
  background: var(--fb-surface2);
  padding: 14px 20px;
  border-bottom: 1px solid var(--fb-bd);
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.fb-app-title {
  font-weight: 850;
  font-size: 0.92rem;
  color: var(--fb-t);
}

.fb-live-pill {
  font-size: 0.72rem;
  color: #10B981;
  font-weight: 700;
  display: flex;
  align-items: center;
  gap: 4px;
}

.fb-app-body {
  padding: 2rem 1.75rem;
}

.fb-question {
  text-align: center;
}

.fb-question small {
  font-size: 0.72rem;
  color: var(--fb-p);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  display: block;
}

.fb-question h3 {
  font-size: 1.35rem;
  font-weight: 850;
  margin: 0.4rem 0 0.3rem;
  color: var(--fb-t);
}

.fb-question p {
  font-size: 0.85rem;
  color: var(--fb-t3);
  margin-bottom: 1.25rem;
}

.fb-stars {
  display: flex;
  justify-content: center;
  gap: 8px;
  margin: 1.25rem 0;
}

.fb-star {
  width: 44px;
  height: 44px;
  border-radius: 12px;
  background: var(--fb-surface2);
  color: #d1d5db;
  display: grid;
  place-items: center;
  font-size: 1.4rem;
  cursor: pointer;
  transition: all 0.2s cubic-bezier(.4, 0, .2, 1);
  border: 1px solid var(--fb-bd);
}

.fb-star.selected,
.fb-star:hover {
  background: #f59e0b;
  color: #ffffff;
  border-color: #d97706;
  transform: scale(1.1);
  box-shadow: 0 4px 14px rgba(245, 158, 11, 0.4);
}

.fb-rating-status {
  font-size: 0.85rem;
  font-weight: 800;
  color: #f59e0b;
  margin-bottom: 0.85rem;
  min-height: 20px;
}

.fb-tags-row {
  display: flex;
  justify-content: center;
  gap: 6px;
  flex-wrap: wrap;
  margin-bottom: 1rem;
}

.fb-tag {
  padding: 4px 10px;
  border-radius: 999px;
  border: 1px solid var(--fb-bd);
  background: var(--fb-surface2);
  font-size: 0.72rem;
  font-weight: 700;
  color: var(--fb-t2);
  cursor: pointer;
  transition: all 0.18s;
}

.fb-tag.active {
  background: var(--fb-p);
  color: #ffffff;
  border-color: var(--fb-p);
}

.fb-input {
  width: 100%;
  background: var(--fb-surface2);
  border: 1px solid var(--fb-bd2);
  border-radius: 12px;
  padding: 12px;
  color: var(--fb-t);
  font-size: 0.82rem;
  min-height: 60px;
  resize: none;
  font-family: inherit;
  outline: none;
}

.fb-submit-btn {
  margin-top: 1rem;
  width: 100%;
  border: 0;
  background: var(--fb-p);
  color: #ffffff;
  padding: 12px;
  border-radius: 12px;
  font-weight: 800;
  font-size: 0.88rem;
  cursor: pointer;
  transition: all 0.2s;
  box-shadow: 0 6px 20px rgba(109, 74, 255, 0.3);
}

.fb-submit-btn:hover {
  background: #5b38f5;
  transform: translateY(-1px);
}

.fb-toast-success {
  display: none;
  margin-top: 10px;
  padding: 8px 12px;
  border-radius: 8px;
  background: rgba(32, 180, 134, 0.14);
  color: #10B981;
  font-size: 0.8rem;
  font-weight: 750;
  text-align: center;
}

/* SECTIONS */
.fb-section {
  padding: 5.5rem 0;
}

.fb-section.alt {
  background: var(--fb-surface);
}

.fb-center {
  text-align: center;
}

.fb-kicker {
  color: var(--fb-p);
  font-size: 0.78rem;
  font-weight: 850;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  margin-bottom: 0.6rem;
}

.fb-section-title {
  font-size: clamp(2rem, 3.5vw, 3rem);
  font-weight: 850;
  line-height: 1.12;
  letter-spacing: -0.025em;
  color: var(--fb-t);
  margin-bottom: 0.75rem;
}

.fb-intro {
  max-width: 680px;
  margin: 0 auto;
  color: var(--fb-t3);
  font-size: 1.05rem;
  line-height: 1.6;
}

/* CARDS */
.fb-cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.5rem;
  margin-top: 3.5rem;
}

.fb-card {
  background: var(--fb-surface);
  border: 1px solid var(--fb-bd);
  border-radius: var(--fb-r);
  padding: 2rem;
  transition: all 0.25s var(--fb-ease);
  text-align: left;
}

.fb-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--fb-sh);
  border-color: #ddd7ff;
}

body.dark-theme .fb-card,
[data-theme="dark"] .fb-card {
  background: var(--fb-surface2);
}

.fb-card-icon {
  width: 48px;
  height: 48px;
  border-radius: 14px;
  background: var(--fb-p-l);
  color: var(--fb-p);
  display: grid;
  place-items: center;
  font-size: 1.35rem;
  margin-bottom: 1.25rem;
}

.fb-card h3 {
  font-size: 1.2rem;
  font-weight: 800;
  margin-bottom: 0.5rem;
  color: var(--fb-t);
}

.fb-card p {
  font-size: 0.92rem;
  color: var(--fb-t3);
  margin: 0;
  line-height: 1.55;
}

/* DASHBOARD GRID */
.fb-dashboard-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 4rem;
  align-items: center;
}

.fb-feature-list {
  margin-top: 2rem;
  display: grid;
  gap: 1rem;
}

.fb-feature-item {
  display: flex;
  gap: 1rem;
  background: var(--fb-surface);
  border: 1px solid var(--fb-bd);
  padding: 1.1rem 1.25rem;
  border-radius: 16px;
  transition: transform 0.2s;
}

.fb-feature-item:hover {
  transform: translateX(4px);
  border-color: var(--fb-p-m);
}

body.dark-theme .fb-feature-item,
[data-theme="dark"] .fb-feature-item {
  background: var(--fb-surface2);
}

.fb-mini-icon {
  width: 40px;
  height: 40px;
  flex: none;
  border-radius: 12px;
  background: var(--fb-p-l);
  color: var(--fb-p);
  display: grid;
  place-items: center;
  font-weight: 900;
  font-size: 1.1rem;
}

.fb-feature-item b {
  font-size: 0.98rem;
  color: var(--fb-t);
  display: block;
}

.fb-feature-item p {
  font-size: 0.85rem;
  color: var(--fb-t3);
  margin-top: 3px;
}

/* ANALYTICS PANEL */
.fb-analytics-box {
  background: #171a29;
  border-radius: var(--fb-r2);
  padding: 1.75rem;
  box-shadow: var(--fb-sh);
  border: 1px solid rgba(255, 255, 255, 0.08);
}

.fb-analytics-head {
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #ffffff;
  font-size: 0.95rem;
  margin-bottom: 1.25rem;
}

.fb-analytics-body {
  background: var(--fb-surface);
  border-radius: 18px;
  padding: 1.5rem;
}

body.dark-theme .fb-analytics-body,
[data-theme="dark"] .fb-analytics-body {
  background: var(--fb-surface2);
}

.fb-metrics-row {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0.75rem;
}

.fb-metric-card {
  border: 1px solid var(--fb-bd);
  border-radius: 14px;
  padding: 1rem;
  background: var(--fb-bg);
}

body.dark-theme .fb-metric-card,
[data-theme="dark"] .fb-metric-card {
  background: rgba(255, 255, 255, 0.03);
}

.fb-metric-card small {
  font-size: 0.75rem;
  color: var(--fb-t3);
  font-weight: 600;
  display: block;
}

.fb-metric-card strong {
  display: block;
  font-size: 1.6rem;
  font-weight: 850;
  margin-top: 4px;
  color: var(--fb-t);
}

.fb-chart-box {
  margin-top: 1.5rem;
  display: grid;
  gap: 0.75rem;
}

.fb-chart-row {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 0.78rem;
  font-weight: 700;
  color: var(--fb-t2);
}

.fb-chart-row span:first-child {
  width: 75px;
}

.fb-bar {
  height: 9px;
  flex: 1;
  background: var(--fb-bd);
  border-radius: 999px;
  overflow: hidden;
}

.fb-bar-fill {
  height: 100%;
  border-radius: 999px;
  background: linear-gradient(90deg, #6d4aff, #20b486);
}

.fb-score-box {
  margin-top: 1.5rem;
  background: var(--fb-p-l);
  border: 1px solid var(--fb-p-m);
  border-radius: 16px;
  padding: 1.1rem 1.25rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.fb-score {
  font-size: 1.85rem;
  font-weight: 900;
  color: var(--fb-p);
}

.fb-score-label {
  font-size: 0.78rem;
  color: var(--fb-t3);
  font-weight: 600;
}

/* =====================================================================
   INTERACTIVE JOURNEY FLOW SECTION (FEEDBACK LIFECYCLE)
   ===================================================================== */
.fb-journey-section {
  padding: 5.5rem 0;
  background: var(--fb-surface);
  position: relative;
}

.fb-journey-nav {
  display: flex;
  justify-content: center;
  gap: 0.75rem;
  margin: 2rem 0 3rem;
  flex-wrap: wrap;
}

.fb-j-tab {
  padding: 0.65rem 1.4rem;
  border-radius: 999px;
  border: 1px solid var(--fb-bd2);
  background: var(--fb-surface);
  color: var(--fb-t2);
  font-weight: 750;
  font-size: 0.88rem;
  cursor: pointer;
  transition: all 0.2s;
}

.fb-j-tab:hover,
.fb-j-tab.active {
  background: var(--fb-p);
  color: #ffffff;
  border-color: var(--fb-p);
  box-shadow: 0 4px 18px rgba(109, 74, 255, 0.3);
}

.fb-journey-timeline {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.25rem;
}

.fb-journey-card {
  background: var(--fb-bg);
  border: 1.5px solid var(--fb-bd);
  border-radius: var(--fb-r);
  padding: 1.75rem 1.4rem;
  transition: all 0.25s var(--fb-ease);
  position: relative;
}

body.dark-theme .fb-journey-card,
[data-theme="dark"] .fb-journey-card {
  background: var(--fb-surface2);
}

.fb-journey-card.active-step {
  border-color: var(--fb-p);
  box-shadow: 0 10px 30px rgba(109, 74, 255, 0.16);
  transform: translateY(-4px);
}

.fb-j-num {
  width: 36px;
  height: 36px;
  border-radius: 10px;
  background: var(--fb-p-l);
  color: var(--fb-p);
  font-weight: 900;
  font-size: 0.85rem;
  display: grid;
  place-items: center;
  margin-bottom: 1rem;
}

.fb-journey-card.active-step .fb-j-num {
  background: var(--fb-p);
  color: #ffffff;
}

.fb-journey-card h4 {
  font-size: 1.05rem;
  font-weight: 800;
  margin-bottom: 0.4rem;
  color: var(--fb-t);
}

.fb-journey-card p {
  font-size: 0.85rem;
  color: var(--fb-t3);
  line-height: 1.5;
  margin-bottom: 0.75rem;
}

.fb-j-badge {
  display: inline-block;
  padding: 3px 8px;
  border-radius: 6px;
  background: rgba(32, 180, 134, 0.14);
  color: #10B981;
  font-size: 0.72rem;
  font-weight: 750;
}

/* USE CASES */
.fb-usecases-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.25rem;
  margin-top: 3rem;
}

.fb-use-card {
  padding: 1.5rem;
  background: linear-gradient(145deg, var(--fb-surface), var(--fb-bg));
  border: 1px solid var(--fb-bd);
  border-radius: 18px;
  transition: all 0.2s;
}

body.dark-theme .fb-use-card,
[data-theme="dark"] .fb-use-card {
  background: var(--fb-surface2);
}

.fb-use-card:hover {
  transform: translateY(-4px);
  border-color: var(--fb-p-m);
}

.fb-use-card b {
  font-size: 1rem;
  color: var(--fb-t);
  display: block;
}

.fb-use-card p {
  font-size: 0.85rem;
  color: var(--fb-t3);
  margin-top: 0.5rem;
  line-height: 1.45;
}

/* FAQ */
.fb-faq-wrap {
  max-width: 820px;
  margin: 2.5rem auto 0;
  display: grid;
  gap: 1rem;
}

.fb-faq-wrap details {
  background: var(--fb-surface);
  border: 1px solid var(--fb-bd);
  border-radius: 16px;
  padding: 1.2rem 1.4rem;
  transition: all 0.2s;
}

body.dark-theme .fb-faq-wrap details,
[data-theme="dark"] .fb-faq-wrap details {
  background: var(--fb-surface2);
}

.fb-faq-wrap details[open] {
  border-color: var(--fb-p-m);
  box-shadow: 0 4px 18px rgba(0, 0, 0, 0.04);
}

.fb-faq-wrap summary {
  font-size: 0.98rem;
  font-weight: 800;
  color: var(--fb-t);
  cursor: pointer;
  list-style: none;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.fb-faq-wrap summary::-webkit-details-marker { display: none; }

.fb-faq-wrap summary::after {
  content: '+';
  font-size: 1.2rem;
  font-weight: 700;
  color: var(--fb-p);
}

.fb-faq-wrap details[open] summary::after {
  content: '−';
}

.fb-faq-wrap details p {
  font-size: 0.9rem;
  color: var(--fb-t3);
  padding-top: 0.75rem;
  margin: 0;
  line-height: 1.6;
}

/* CTA */
.fb-cta-section {
  padding: 5.5rem 0;
  color: #ffffff;
  background: linear-gradient(120deg, #17152a 0%, #2a2251 100%);
}

.fb-cta-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 2.5rem;
}

.fb-cta-inner h2 {
  font-size: clamp(2rem, 3.5vw, 2.8rem);
  font-weight: 850;
  line-height: 1.15;
  color: #ffffff;
  margin-bottom: 0.75rem;
}

.fb-cta-inner p {
  color: #c8c5d5;
  max-width: 600px;
  font-size: 1.05rem;
  margin: 0;
}

.fb-cta-actions {
  display: flex;
  gap: 0.85rem;
  flex-wrap: wrap;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
  .fb-hero-grid,
  .fb-dashboard-grid {
    grid-template-columns: 1fr;
    gap: 3rem;
  }
  .fb-cards-grid,
  .fb-journey-timeline,
  .fb-usecases-grid {
    grid-template-columns: 1fr 1fr;
  }
  .fb-cta-inner {
    flex-direction: column;
    align-items: flex-start;
  }
}

@media (max-width: 640px) {
  .fb-hero {
    padding: 2.75rem 0;
  }
  .fb-cards-grid,
  .fb-journey-timeline,
  .fb-usecases-grid {
    grid-template-columns: 1fr;
  }
  .fb-metrics-row {
    grid-template-columns: 1fr;
  }
  .fb-actions {
    flex-direction: column;
    align-items: stretch;
  }
  .fb-btn {
    width: 100%;
    justify-content: center;
    text-align: center;
  }
  .fb-cta-actions {
    flex-direction: column;
    width: 100%;
  }
  .fb-cta-actions .fb-btn {
    width: 100%;
  }
  /* Journey Nav Horizontal Touch-Scroll */
  .fb-journey-nav {
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
  .fb-journey-nav::-webkit-scrollbar {
    display: none !important;
  }
  .fb-j-tab {
    flex-shrink: 0 !important;
    white-space: nowrap !important;
    padding: 0.55rem 1rem !important;
    font-size: 0.8rem !important;
  }
  .fb-app-body {
    padding: 1.25rem 1rem;
  }
  .fb-question h3 {
    font-size: 1.15rem;
  }
}

@media (max-width: 480px) {
  .fb-star {
    width: 36px;
    height: 36px;
    font-size: 1.15rem;
    border-radius: 9px;
  }
  .fb-stars {
    gap: 6px;
  }
  .fb-app-head {
    padding: 10px 14px;
  }
}
</style>

<div class="hb-fb-wrap">
  <div class="fb-topbar"></div>

  <!-- HERO SECTION -->
  <section class="fb-hero">
    <div class="fb-container fb-hero-grid">
      <div>
        <div class="fb-badge">
          <span class="fb-badge-dot"></span> CUSTOMER FEEDBACK &amp; CSAT AUTOMATION
        </div>
        <h1>Turn customer opinions into <span class="fb-gradient">actionable insights.</span></h1>
        <p class="fb-hero-copy">
          Collect CSAT ratings, NPS reviews, and qualitative customer feedback automatically at key touchpoints. Make it effortless for customers to share their experience and empower your team to optimize every interaction.
        </p>
        <div class="fb-actions">
          <a href="https://app.hellobotz.com" class="fb-btn fb-btn-primary">
            Start Collecting Feedback →
          </a>
          <button type="button" class="fb-btn fb-btn-secondary btn-demo-open">
            Book Live Demo
          </button>
          <a href="#contact-section" class="fb-btn fb-btn-verified">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified
          </a>
        </div>
        <div class="fb-trust">
          <span><b class="fb-check">✓</b> 1-Tap WhatsApp Surveys</span>
          <span><b class="fb-check">✓</b> Instant CSAT &amp; NPS Scoring</span>
          <span><b class="fb-check">✓</b> Closed-Loop Escalations</span>
        </div>
      </div>

      <!-- INTERACTIVE FEEDBACK UI MOCKUP -->
      <div class="fb-shell">
        <div class="fb-browser-bar">
          <span class="fb-browser-dot red"></span>
          <span class="fb-browser-dot yellow"></span>
          <span class="fb-browser-dot green"></span>
          <span style="margin-left:8px">HelloBotz · Live WhatsApp Survey Campaign</span>
        </div>
        <div class="fb-app">
          <div class="fb-app-head">
            <div>
              <div class="fb-app-title">Post-Purchase Feedback</div>
              <div class="fb-live-pill">● Live Feedback Trigger Active</div>
            </div>
            <span style="color:var(--fb-t3);font-size:1.1rem;cursor:pointer;">⋮</span>
          </div>
          <div class="fb-app-body">
            <div class="fb-question">
              <small>Order #HB2048 Completed</small>
              <h3>How was your shopping experience?</h3>
              <p>Your feedback helps us continuously elevate our service quality.</p>
              
              <div class="fb-stars" id="fb-stars-container">
                <div class="fb-star selected" onclick="setRating(1)">★</div>
                <div class="fb-star selected" onclick="setRating(2)">★</div>
                <div class="fb-star selected" onclick="setRating(3)">★</div>
                <div class="fb-star selected" onclick="setRating(4)">★</div>
                <div class="fb-star selected" onclick="setRating(5)">★</div>
              </div>
              <div class="fb-rating-status" id="fb-rating-text">★★★★★ 5.0 · Outstanding Experience!</div>

              <div class="fb-tags-row">
                <span class="fb-tag active" onclick="toggleTag(this)">⚡ Lightning Delivery</span>
                <span class="fb-tag active" onclick="toggleTag(this)">💬 Helpful Support</span>
                <span class="fb-tag" onclick="toggleTag(this)">📦 Packaging Quality</span>
                <span class="fb-tag" onclick="toggleTag(this)">💳 Easy Checkout</span>
              </div>

              <textarea class="fb-input" id="fb-custom-comment" placeholder="What did you like most about your order?"></textarea>
              <button type="button" class="fb-submit-btn" onclick="submitInteractiveFeedback()">Submit Instant Feedback</button>
              <div class="fb-toast-success" id="fb-success-toast">🎉 Thank you! Your verified rating has been recorded in live analytics.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="fb-section alt" id="features">
    <div class="fb-container fb-center">
      <div class="fb-kicker">FEEDBACK FEATURES</div>
      <h2 class="fb-section-title">Everything you need to collect better feedback.</h2>
      <p class="fb-intro">
        Create conversational feedback workflows that achieve up to 78% response rates on WhatsApp while giving your business structured, actionable data.
      </p>

      <div class="fb-cards-grid">
        <div class="fb-card">
          <div class="fb-card-icon">★</div>
          <h3>1-Tap Rating Collection</h3>
          <p>Collect instant 1–5 star ratings or CSAT/NPS scores directly inside WhatsApp without redirecting customers to slow external forms.</p>
        </div>

        <div class="fb-card">
          <div class="fb-card-icon">✎</div>
          <h3>Custom Dynamic Flows</h3>
          <p>Ask adaptive follow-up questions based on score: 5-star raters get a Google Review prompt, while 1-star raters are connected to a manager.</p>
        </div>

        <div class="fb-card">
          <div class="fb-card-icon">⚡</div>
          <h3>Event-Based Automated Triggers</h3>
          <p>Auto-dispatch surveys after key milestones: order delivery, ticket resolution, doctor consultation, or product return completion.</p>
        </div>

        <div class="fb-card">
          <div class="fb-card-icon">◉</div>
          <h3>Unified Feedback Dashboard</h3>
          <p>Track real-time NPS, CSAT trends, agent performance scores, and keyword sentiment distribution from a single visual dashboard.</p>
        </div>

        <div class="fb-card">
          <div class="fb-card-icon">↗</div>
          <h3>WhatsApp Interactive Buttons</h3>
          <p>Leverage Meta-approved interactive quick-reply buttons and list menus that make responding as simple as tapping a screen.</p>
        </div>

        <div class="fb-card">
          <div class="fb-card-icon">✦</div>
          <h3>AI Sentiment Analysis</h3>
          <p>Automatically extract customer sentiment, pinpoint recurring complaints, and identify product improvement opportunities.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ANALYTICS -->
  <section class="fb-section">
    <div class="fb-container fb-dashboard-grid">
      <div>
        <div class="fb-kicker">FEEDBACK ANALYTICS</div>
        <h2 class="fb-section-title" style="text-align:left;">See what your customers are really saying.</h2>
        <p class="fb-intro" style="margin-left:0;text-align:left;">
          Transform thousands of individual chat responses into clear visual indicators of customer happiness, agent quality, and product satisfaction.
        </p>

        <div class="fb-feature-list">
          <div class="fb-feature-item">
            <div class="fb-mini-icon">★</div>
            <div>
              <b>Track CSAT &amp; NPS in Real Time</b>
              <p>Monitor customer sentiment week-over-week across specific product categories and agents.</p>
            </div>
          </div>

          <div class="fb-feature-item">
            <div class="fb-mini-icon">↗</div>
            <div>
              <b>Detect Recurring Pain Points</b>
              <p>Catch delivery delays, product defects, or payment snags before they hurt your brand reputation.</p>
            </div>
          </div>

          <div class="fb-feature-item">
            <div class="fb-mini-icon">✓</div>
            <div>
              <b>Drive Positive Public Reviews</b>
              <p>Automatically guide delighted 5-star customers to leave verified reviews on Google and Trustpilot.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="fb-analytics-box">
        <div class="fb-analytics-head">
          <b>Customer Sentiment Telemetry</b>
          <span style="color:#10B981;font-weight:700;font-size:0.8rem;">● Last 30 Days</span>
        </div>
        <div class="fb-analytics-body">
          <div class="fb-metrics-row">
            <div class="fb-metric-card">
              <small>Survey Responses</small>
              <strong>2,486</strong>
            </div>
            <div class="fb-metric-card">
              <small>Average Rating</small>
              <strong>4.8 / 5</strong>
            </div>
            <div class="fb-metric-card">
              <small>Response Rate</small>
              <strong>78.4%</strong>
            </div>
          </div>

          <div class="fb-chart-box">
            <div class="fb-chart-row">
              <span>5 Stars</span>
              <div class="fb-bar"><div class="fb-bar-fill" style="width:86%;"></div></div>
              <b>86%</b>
            </div>
            <div class="fb-chart-row">
              <span>4 Stars</span>
              <div class="fb-bar"><div class="fb-bar-fill" style="width:68%;"></div></div>
              <b>10%</b>
            </div>
            <div class="fb-chart-row">
              <span>3 Stars</span>
              <div class="fb-bar"><div class="fb-bar-fill" style="width:22%;"></div></div>
              <b>3%</b>
            </div>
            <div class="fb-chart-row">
              <span>1–2 Stars</span>
              <div class="fb-bar"><div class="fb-bar-fill" style="width:8%;"></div></div>
              <b>1%</b>
            </div>
          </div>

          <div class="fb-score-box">
            <div>
              <div class="fb-score">4.8 / 5.0</div>
              <div class="fb-score-label">Overall Customer Satisfaction Score (CSAT)</div>
            </div>
            <div style="font-size:1.8rem;color:#f59e0b;">★★★★★</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INTERACTIVE JOURNEY FLOW SECTION -->
  <section class="fb-journey-section" id="how">
    <div class="fb-container fb-center">
      <div class="fb-kicker">AUTOMATED LIFECYCLE FLOW</div>
      <h2 class="fb-section-title">Closed-loop feedback journey in 4 automated steps.</h2>
      <p class="fb-intro">
        From the initial trigger event to intelligent promoter/detractor follow-ups, HelloBotz automates the entire feedback lifecycle.
      </p>

      <!-- Scenario Tabs -->
      <div class="fb-journey-nav">
        <button type="button" class="fb-j-tab active" onclick="switchFbJourney('ecommerce', this)">
          🛒 E-Commerce Post-Delivery
        </button>
        <button type="button" class="fb-j-tab" onclick="switchFbJourney('support', this)">
          🎫 Support Ticket Resolution
        </button>
        <button type="button" class="fb-j-tab" onclick="switchFbJourney('clinic', this)">
          🏥 Clinic / Appointment Care
        </button>
      </div>

      <!-- 4-Step Journey Cards -->
      <div class="fb-journey-timeline">
        <div class="fb-journey-card active-step" id="fb-step-1">
          <div class="fb-j-num">01</div>
          <h4 id="fb-title-1">Trigger Event</h4>
          <p id="fb-desc-1">Courier webhook confirms order delivery; system waits 90 minutes before asking.</p>
          <span class="fb-j-badge" id="fb-badge-1">Smart Delay Logic</span>
        </div>

        <div class="fb-journey-card active-step" id="fb-step-2">
          <div class="fb-j-num">02</div>
          <h4 id="fb-title-2">1-Tap WhatsApp Request</h4>
          <p id="fb-desc-2">Interactive message dispatched with 5-star quick buttons and product picture.</p>
          <span class="fb-j-badge" id="fb-badge-2">Zero App Download</span>
        </div>

        <div class="fb-journey-card active-step" id="fb-step-3">
          <div class="fb-j-num">03</div>
          <h4 id="fb-title-3">Instant Customer Reply</h4>
          <p id="fb-desc-3">Customer taps 5 stars and selects 'Lightning Delivery' chip in under 5 seconds.</p>
          <span class="fb-j-badge" id="fb-badge-3">78% Response Rate</span>
        </div>

        <div class="fb-journey-card active-step" id="fb-step-4">
          <div class="fb-j-num">04</div>
          <h4 id="fb-title-4">Closed-Loop Action</h4>
          <p id="fb-desc-4">Promoter offered 10% coupon code and 1-tap link to leave a verified Google Review.</p>
          <span class="fb-j-badge" id="fb-badge-4">Auto-Reputation Growth</span>
        </div>
      </div>
    </div>
  </section>

  <!-- USE CASES -->
  <section class="fb-section" id="usecases">
    <div class="fb-container fb-center">
      <div class="fb-kicker">VERSATILE APPLICATIONS</div>
      <h2 class="fb-section-title">Feedback collection tailored for every industry.</h2>
      <p class="fb-intro">Proven CSAT playbooks engineered for high engagement and actionable insights.</p>

      <div class="fb-usecases-grid">
        <div class="fb-use-card">
          <b>🛒 E-Commerce &amp; D2C</b>
          <p>Collect delivery and product quality ratings within 2 hours of package unboxing.</p>
        </div>
        <div class="fb-use-card">
          <b>💬 Customer Support</b>
          <p>Measure agent helpfulness and first-contact resolution right after chat close.</p>
        </div>
        <div class="fb-use-card">
          <b>📦 Unboxing Experience</b>
          <p>Gather photos and unboxing feedback for social proof and product improvement.</p>
        </div>
        <div class="fb-use-card">
          <b>⭐ Google Review Boost</b>
          <p>Turn satisfied 5-star chat ratings into public 5-star Google Business reviews.</p>
        </div>
        <div class="fb-use-card">
          <b>🏨 Hospitality &amp; Travel</b>
          <p>Check in on guest comfort during stay and gather overall visit reviews at checkout.</p>
        </div>
        <div class="fb-use-card">
          <b>🏥 Healthcare &amp; Clinics</b>
          <p>Measure patient consultation experience and doctor bedside manner discreetly.</p>
        </div>
        <div class="fb-use-card">
          <b>🎓 Education &amp; EdTech</b>
          <p>Collect student feedback after webinars, course completion, or tutor sessions.</p>
        </div>
        <div class="fb-use-card">
          <b>🏢 B2B Account Management</b>
          <p>Measure quarterly NPS and detect churn risk early before contract renewal dates.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="fb-section alt" id="faq">
    <div class="fb-container">
      <div class="fb-center">
        <div class="fb-kicker">QUESTIONS &amp; ANSWERS</div>
        <h2 class="fb-section-title">Frequently Asked Questions</h2>
        <p class="fb-intro">Everything you need to know about automated customer feedback collection.</p>
      </div>

      <div class="fb-faq-wrap">
        <details open>
          <summary>Can feedback be collected directly inside WhatsApp?</summary>
          <p>Yes. HelloBotz uses official WhatsApp interactive button templates and flows so customers can submit ratings with a single tap directly in the chat, without opening external browser windows.</p>
        </details>

        <details>
          <summary>Can I combine star ratings, multiple-choice, and open text comments?</summary>
          <p>Yes. You can build multi-step conversational surveys: start with a quick 1–5 star rating, ask why they selected that score via choice pills, and invite an optional audio or text comment.</p>
        </details>

        <details>
          <summary>How does the automated detractor alert work?</summary>
          <p>If a customer rates 1 or 2 stars, HelloBotz immediately alerts your customer support manager via WhatsApp and email, pauses promotional broadcasts to that contact, and creates a high-priority retention ticket.</p>
        </details>

        <details>
          <summary>Can we integrate feedback data with Shopify, WooCommerce, or Zoho CRM?</summary>
          <p>Yes. Every rating, tag, and review comment is automatically synchronized into your connected CRM, Google Sheets, or e-commerce platform via our native webhooks and API integrations.</p>
        </details>

        <details>
          <summary>How do you prevent spamming customers with survey requests?</summary>
          <p>HelloBotz includes built-in survey cooldown frequency limits (e.g. maximum one survey request per customer every 30 days) to protect your brand relationship and ensure high response quality.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="fb-cta-section" id="demo">
    <div class="fb-container fb-cta-inner">
      <div>
        <div class="fb-kicker" style="color:#aa9cff;">GET STARTED TODAY</div>
        <h2>Start listening to your customers with HelloBotz.</h2>
        <p>Collect feedback at the exact right moment, understand real-time sentiment, and turn reviews into sustainable business growth.</p>
      </div>
      <div class="fb-cta-actions">
        <a href="https://app.hellobotz.com" class="fb-btn" style="background:#ffffff;color:#17152a;font-weight:800;">
          Start Free Now →
        </a>
        <button type="button" class="fb-btn btn-demo-open" style="border:1.5px solid rgba(255,255,255,0.35);color:#ffffff;background:transparent;">
          Book a Live Demo
        </button>
        <a href="#contact-section" class="fb-btn fb-btn-verified">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
          Get Verified
        </a>
      </div>
    </div>
  </section>
</div>

<script>
/* =====================================================================
   INTERACTIVE FEEDBACK SIMULATOR & JOURNEY SCRIPTS
   ===================================================================== */
var currentRating = 5;
function setRating(val) {
  currentRating = val;
  var stars = document.querySelectorAll('#fb-stars-container .fb-star');
  stars.forEach(function(s, idx) {
    if (idx < val) {
      s.classList.add('selected');
    } else {
      s.classList.remove('selected');
    }
  });

  var statusEl = document.getElementById('fb-rating-text');
  if (val === 5) statusEl.textContent = '★★★★★ 5.0 · Outstanding Experience!';
  else if (val === 4) statusEl.textContent = '★★★★☆ 4.0 · Very Good Service';
  else if (val === 3) statusEl.textContent = '★★★☆☆ 3.0 · Average Experience';
  else if (val === 2) statusEl.textContent = '★★☆☆☆ 2.0 · Needs Improvement';
  else statusEl.textContent = '★☆☆☆☆ 1.0 · Dissatisfied (Alerts Manager)';
}

function toggleTag(el) {
  el.classList.toggle('active');
}

function submitInteractiveFeedback() {
  var toast = document.getElementById('fb-success-toast');
  toast.style.display = 'block';
  toast.textContent = '🎉 Thank you! Your ' + currentRating + '-star rating has been recorded in live analytics.';
  setTimeout(function() {
    toast.style.display = 'none';
  }, 4000);
}

var fbJourneyData = {
  ecommerce: [
    { title: 'Trigger Event', desc: 'Courier webhook confirms order delivery; system waits 90 minutes before asking.', badge: 'Smart Delay Logic' },
    { title: '1-Tap WhatsApp Request', desc: 'Interactive message dispatched with 5-star quick buttons and product picture.', badge: 'Zero App Download' },
    { title: 'Instant Customer Reply', desc: 'Customer taps 5 stars and selects \'Lightning Delivery\' chip in under 5 seconds.', badge: '78% Response Rate' },
    { title: 'Closed-Loop Action', desc: 'Promoter offered 10% coupon code and 1-tap link to leave a verified Google Review.', badge: 'Auto-Reputation Growth' }
  ],
  support: [
    { title: 'Ticket Resolved', desc: 'Support executive marks customer issue resolved in HelloBotz Shared Inbox.', badge: 'Instant Trigger' },
    { title: 'Agent Rating Dispatch', desc: 'Customer receives a 1-tap CSAT rating asking if issue was resolved satisfactorily.', badge: 'Agent Accountability' },
    { title: 'Detractor Detection', desc: 'Customer gives 2 stars: AI flags message as negative and alerts team lead.', badge: 'Real-Time Escalation' },
    { title: 'Service Recovery', desc: 'Senior manager calls customer back within 10 minutes to resolve dissatisfaction.', badge: 'Churn Prevention' }
  ],
  clinic: [
    { title: 'Consultation Done', desc: 'Patient completes clinical checkup or diagnostic test appointment.', badge: 'EMR Sync' },
    { title: 'Care Survey Sent', desc: 'WhatsApp survey dispatched asking about wait time and physician attention.', badge: 'Patient Privacy Safe' },
    { title: 'High CSAT Capture', desc: 'Patient rates 5/5 stars and compliments the smooth digital appointment booking.', badge: 'Verified Feedback' },
    { title: 'Review Auto-Post', desc: 'Direct link to clinic\'s Practo & Google Maps profile generated with 1-click.', badge: 'Local SEO Boost' }
  ]
};

function switchFbJourney(scenario, btn) {
  var tabs = document.querySelectorAll('.fb-j-tab');
  tabs.forEach(function(t) { t.classList.remove('active'); });
  if (btn) btn.classList.add('active');

  var data = fbJourneyData[scenario];
  if (!data) return;

  for (var i = 0; i < 4; i++) {
    var titleEl = document.getElementById('fb-title-' + (i + 1));
    var descEl = document.getElementById('fb-desc-' + (i + 1));
    var badgeEl = document.getElementById('fb-badge-' + (i + 1));
    if (titleEl) titleEl.textContent = data[i].title;
    if (descEl) descEl.textContent = data[i].desc;
    if (badgeEl) badgeEl.textContent = data[i].badge;
  }
}
</script>

<?php
$footerContactText = "Talk to our team to set up automated customer feedback, CSAT surveys, and WhatsApp reviews for your business.";
include __DIR__ . '/../../includes/footer.php';
?>
