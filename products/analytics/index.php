<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Analytics Dashboard & Business Intelligence | HelloBotz';
$pageDescription = 'HelloBotz Analytics Dashboard gives businesses a clear view of conversations, automation, customers, campaigns and team performance across WhatsApp and digital channels.';
$canonicalUrl = 'https://hellobotz.com/products/analytics/';
$ogImage = 'assets/images/og-image.png';

include __DIR__ . '/../../includes/header.php';
?>

<style>
/* =====================================================================
   HELLOBOTZ ANALYTICS DASHBOARD PAGE THEME
   ===================================================================== */
:root {
  --an-p: #6d4aff;
  --an-p2: #8b5cf6;
  --an-p-l: rgba(109, 74, 255, 0.08);
  --an-p-m: rgba(109, 74, 255, 0.22);
  --an-g: #18b383;
  --an-g-l: rgba(24, 179, 131, 0.12);
  --an-o: #f59e0b;
  --an-t: #151827;
  --an-t2: #475467;
  --an-t3: #697186;
  --an-bg: #f7f8fc;
  --an-surface: #ffffff;
  --an-surface2: #f1f3f9;
  --an-bd: #e7e9f0;
  --an-bd2: #d8dbe4;
  --an-dark: #151827;
  --an-sh: 0 22px 65px rgba(38, 31, 85, 0.10);
  --an-r: 20px;
  --an-r2: 28px;
  --an-font: 'Inter', system-ui, -apple-system, sans-serif;
  --an-max: 1240px;
  --an-ease: cubic-bezier(.16, 1, .3, 1);
}

body.dark-theme,
[data-theme="dark"] {
  --an-t: #f8fafc;
  --an-t2: #cbd5e1;
  --an-t3: #94a3b8;
  --an-bg: #0b1120;
  --an-surface: #0f172a;
  --an-surface2: #1e293b;
  --an-bd: rgba(255, 255, 255, 0.08);
  --an-bd2: rgba(255, 255, 255, 0.15);
  --an-sh: 0 20px 60px rgba(0, 0, 0, 0.45);
}

.hb-an-wrap {
  background: var(--an-bg);
  color: var(--an-t);
  font-family: var(--an-font);
  overflow-x: hidden;
  line-height: 1.6;
}

.hb-an-wrap * {
  box-sizing: border-box;
}

.an-container {
  max-width: var(--an-max);
  margin: 0 auto;
  padding: 0 1.5rem;
}

/* TOP GRADIENT STRIP */
.an-topbar {
  height: 4px;
  background: linear-gradient(90deg, #6d4aff, #8b5cf6, #18b383);
}

/* HERO SECTION */
.an-hero {
  padding: 5rem 0 4.5rem;
  position: relative;
  overflow: hidden;
  background:
    radial-gradient(circle at 86% 12%, rgba(109, 74, 255, 0.13), transparent 30%),
    radial-gradient(circle at 7% 65%, rgba(24, 179, 131, 0.09), transparent 26%);
}

.an-hero-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 3.5rem;
  align-items: center;
}

.an-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: var(--an-p-l);
  color: var(--an-p);
  border: 1px solid var(--an-p-m);
  border-radius: 999px;
  padding: 6px 14px;
  font-size: 0.78rem;
  font-weight: 850;
  letter-spacing: 0.04em;
  margin-bottom: 1.25rem;
  text-transform: uppercase;
}

.an-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: var(--an-g);
  box-shadow: 0 0 0 4px var(--an-g-l);
  animation: anPulse 2s infinite;
}

@keyframes anPulse {
  0%, 100% { transform: scale(1); opacity: 1; }
  50% { transform: scale(1.2); opacity: 0.75; }
}

.an-hero h1 {
  font-size: clamp(2.4rem, 4.4vw, 3.8rem);
  line-height: 1.06;
  letter-spacing: -0.03em;
  font-weight: 850;
  color: var(--an-t);
  margin-bottom: 1.25rem;
}

.an-gradient {
  background: linear-gradient(135deg, #6d4aff 0%, #8b5cf6 50%, #18b383 100%);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.an-hero-copy {
  font-size: 1.12rem;
  color: var(--an-t3);
  max-width: 620px;
  margin: 0 0 2rem;
  line-height: 1.65;
}

.an-actions {
  display: flex;
  gap: 0.85rem;
  flex-wrap: wrap;
  align-items: center;
}

.an-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 0.82rem 1.65rem;
  border-radius: 12px;
  font-size: 0.95rem;
  font-weight: 750;
  text-decoration: none !important;
  transition: all 0.22s var(--an-ease);
  cursor: pointer;
  border: 1.5px solid transparent;
}

.an-btn-primary {
  background: linear-gradient(135deg, #6d4aff 0%, #8b5cf6 100%);
  color: #ffffff !important;
  box-shadow: 0 8px 24px rgba(109, 74, 255, 0.3);
}

.an-btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 30px rgba(109, 74, 255, 0.45);
  color: #ffffff !important;
}

.an-btn-secondary {
  background: var(--an-surface);
  color: var(--an-t) !important;
  border-color: var(--an-bd2);
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
}

.an-btn-secondary:hover {
  border-color: var(--an-p);
  color: var(--an-p) !important;
  transform: translateY(-2px);
}

.an-btn-verified {
  background: linear-gradient(135deg, #10B981 0%, #059669 100%);
  color: #ffffff !important;
  box-shadow: 0 8px 22px rgba(16, 185, 129, 0.3);
}

.an-btn-verified:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 28px rgba(16, 185, 129, 0.42);
  color: #ffffff !important;
}

.an-trust {
  display: flex;
  gap: 1.5rem;
  flex-wrap: wrap;
  margin-top: 2rem;
  font-size: 0.85rem;
  color: var(--an-t3);
}

.an-trust span {
  display: flex;
  align-items: center;
  gap: 6px;
}

.an-check {
  color: #10B981;
  font-weight: 900;
}

/* INTERACTIVE DASHBOARD SHELL MOCKUP */
.an-dashboard-shell {
  background: #151827;
  border-radius: var(--an-r2);
  padding: 12px;
  box-shadow: 0 30px 80px rgba(26, 22, 55, 0.32);
  border: 1px solid rgba(255, 255, 255, 0.08);
}

.an-browser {
  height: 38px;
  display: flex;
  align-items: center;
  gap: 7px;
  padding: 0 12px;
  color: #9299ad;
  font-size: 0.78rem;
  font-weight: 600;
}

.an-browser-dot {
  width: 9px;
  height: 9px;
  border-radius: 50%;
  display: inline-block;
}

.an-browser-dot.red { background: #ef4444; }
.an-browser-dot.yellow { background: #f59e0b; }
.an-browser-dot.green { background: #10b981; }

.an-dashboard {
  background: var(--an-surface);
  border-radius: 20px;
  overflow: hidden;
  display: grid;
  grid-template-columns: 60px 1fr;
  min-height: 460px;
  border: 1px solid var(--an-bd);
}

.an-side {
  background: #171a29;
  padding: 16px 8px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 13px;
}

.an-side-logo {
  width: 36px;
  height: 36px;
  border-radius: 11px;
  background: linear-gradient(135deg, #7657ff, #9b7cff);
  display: grid;
  place-items: center;
  color: white;
  font-weight: 900;
  font-size: 1rem;
}

.an-side-item {
  width: 36px;
  height: 36px;
  border-radius: 10px;
  color: #969db1;
  display: grid;
  place-items: center;
  font-size: 0.95rem;
  cursor: pointer;
  transition: all 0.2s;
}

.an-side-item.active,
.an-side-item:hover {
  background: rgba(255, 255, 255, 0.12);
  color: #ffffff;
}

.an-dash-main {
  padding: 1.25rem 1.4rem;
  background: var(--an-surface);
}

.an-dash-top {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 1rem;
}

.an-dash-title {
  font-size: 0.95rem;
  font-weight: 850;
  color: var(--an-t);
}

.an-period-select {
  font-size: 0.75rem;
  font-weight: 700;
  color: var(--an-t2);
  background: var(--an-surface2);
  border: 1px solid var(--an-bd2);
  padding: 5px 10px;
  border-radius: 8px;
  outline: none;
  cursor: pointer;
}

.an-metrics {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 8px;
}

.an-metric {
  background: var(--an-bg);
  border: 1px solid var(--an-bd);
  border-radius: 12px;
  padding: 10px;
  transition: transform 0.2s;
}

body.dark-theme .an-metric,
[data-theme="dark"] .an-metric {
  background: var(--an-surface2);
}

.an-metric small {
  font-size: 0.68rem;
  color: var(--an-t3);
  font-weight: 600;
  display: block;
}

.an-metric strong {
  display: block;
  font-size: 1.15rem;
  font-weight: 850;
  margin-top: 2px;
  color: var(--an-t);
}

.an-up {
  font-size: 0.68rem;
  color: #10B981;
  font-weight: 750;
  display: inline-block;
  margin-top: 2px;
}

.an-lower {
  display: grid;
  grid-template-columns: 1.35fr 0.65fr;
  gap: 9px;
  margin-top: 10px;
}

.an-panel {
  background: var(--an-bg);
  border: 1px solid var(--an-bd);
  border-radius: 12px;
  padding: 12px;
}

body.dark-theme .an-panel,
[data-theme="dark"] .an-panel {
  background: var(--an-surface2);
}

.an-panel-head {
  display: flex;
  justify-content: space-between;
  font-size: 0.75rem;
  font-weight: 800;
  color: var(--an-t);
  margin-bottom: 8px;
}

.an-chart-area {
  height: 125px;
  display: flex;
  align-items: flex-end;
  gap: 6px;
  padding: 6px 4px 0;
  border-bottom: 1px solid var(--an-bd);
  background: repeating-linear-gradient(to top, transparent 0, transparent 24px, rgba(0,0,0,0.03) 25px);
}

.an-bar {
  flex: 1;
  border-radius: 4px 4px 0 0;
  background: linear-gradient(to top, #6d4aff, #a38eff);
  transition: height 0.6s cubic-bezier(.4, 0, .2, 1);
  cursor: pointer;
}

.an-bar:hover {
  filter: brightness(1.2);
}

.an-donut {
  width: 95px;
  height: 95px;
  border-radius: 50%;
  margin: 6px auto 10px;
  background: conic-gradient(#6d4aff 0 48%, #20b486 48% 76%, #f59e0b 76% 89%, #94a3b8 89% 100%);
  display: grid;
  place-items: center;
  position: relative;
}

.an-donut::after {
  content: "";
  width: 55px;
  height: 55px;
  background: var(--an-surface);
  border-radius: 50%;
}

body.dark-theme .an-donut::after,
[data-theme="dark"] .an-donut::after {
  background: var(--an-surface2);
}

.an-legend {
  font-size: 0.68rem;
  color: var(--an-t3);
  display: grid;
  gap: 4px;
}

.an-legend span {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.an-legend i {
  display: inline-block;
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: #6d4aff;
  margin-right: 4px;
}

.an-legend .g { background: #20b486; }
.an-legend .o { background: #f59e0b; }
.an-legend .gr { background: #94a3b8; }

/* SECTIONS */
.an-section {
  padding: 5.5rem 0;
}

.an-section.alt {
  background: var(--an-surface);
}

.an-center {
  text-align: center;
}

.an-kicker {
  color: var(--an-p);
  font-size: 0.78rem;
  font-weight: 850;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  margin-bottom: 0.6rem;
}

.an-section-title {
  font-size: clamp(2rem, 3.5vw, 3rem);
  font-weight: 850;
  line-height: 1.12;
  letter-spacing: -0.025em;
  color: var(--an-t);
  margin-bottom: 0.75rem;
}

.an-intro {
  max-width: 680px;
  margin: 0 auto;
  color: var(--an-t3);
  font-size: 1.05rem;
  line-height: 1.6;
}

/* CARDS */
.an-cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.5rem;
  margin-top: 3.5rem;
}

.an-card {
  background: var(--an-surface);
  border: 1px solid var(--an-bd);
  border-radius: var(--an-r);
  padding: 2rem;
  transition: all 0.25s var(--an-ease);
  text-align: left;
}

.an-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--an-sh);
  border-color: #ddd7ff;
}

body.dark-theme .an-card,
[data-theme="dark"] .an-card {
  background: var(--an-surface2);
}

.an-card-icon {
  width: 48px;
  height: 48px;
  border-radius: 14px;
  background: var(--an-p-l);
  color: var(--an-p);
  display: grid;
  place-items: center;
  font-size: 1.35rem;
  margin-bottom: 1.25rem;
}

.an-card h3 {
  font-size: 1.2rem;
  font-weight: 800;
  margin-bottom: 0.5rem;
  color: var(--an-t);
}

.an-card p {
  font-size: 0.92rem;
  color: var(--an-t3);
  margin: 0;
  line-height: 1.55;
}

/* INSIGHTS GRID */
.an-feature-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 4rem;
  align-items: center;
}

.an-feature-list {
  margin-top: 2rem;
  display: grid;
  gap: 1rem;
}

.an-feature-item {
  display: flex;
  gap: 1rem;
  background: var(--an-surface);
  border: 1px solid var(--an-bd);
  padding: 1.1rem 1.25rem;
  border-radius: 16px;
  transition: transform 0.2s;
}

.an-feature-item:hover {
  transform: translateX(4px);
  border-color: var(--an-p-m);
}

body.dark-theme .an-feature-item,
[data-theme="dark"] .an-feature-item {
  background: var(--an-surface2);
}

.an-mini-icon {
  width: 40px;
  height: 40px;
  flex: none;
  border-radius: 12px;
  background: var(--an-p-l);
  color: var(--an-p);
  display: grid;
  place-items: center;
  font-weight: 900;
  font-size: 1.1rem;
}

.an-feature-item b {
  font-size: 0.98rem;
  color: var(--an-t);
  display: block;
}

.an-feature-item p {
  font-size: 0.85rem;
  color: var(--an-t3);
  margin-top: 3px;
}

/* ANALYTICS LARGE PANEL */
.an-analytics-large {
  background: #171a29;
  border-radius: var(--an-r2);
  padding: 1.75rem;
  box-shadow: var(--an-sh);
  border: 1px solid rgba(255, 255, 255, 0.08);
}

.an-analytics-head {
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #ffffff;
  font-size: 0.95rem;
  margin-bottom: 1.25rem;
}

.an-analytics-body {
  background: var(--an-surface);
  border-radius: 18px;
  padding: 1.5rem;
}

body.dark-theme .an-analytics-body,
[data-theme="dark"] .an-analytics-body {
  background: var(--an-surface2);
}

.an-big-metrics {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0.75rem;
}

.an-big-metric {
  border: 1px solid var(--an-bd);
  border-radius: 12px;
  padding: 1rem;
  background: var(--an-bg);
}

body.dark-theme .an-big-metric,
[data-theme="dark"] .an-big-metric {
  background: rgba(255, 255, 255, 0.03);
}

.an-big-metric small {
  font-size: 0.75rem;
  color: var(--an-t3);
  font-weight: 600;
  display: block;
}

.an-big-metric strong {
  display: block;
  font-size: 1.6rem;
  font-weight: 850;
  margin-top: 4px;
  color: var(--an-t);
}

.an-graph {
  height: 140px;
  margin-top: 1.25rem;
  border-radius: 12px;
  padding: 8px 6px 0;
  display: flex;
  align-items: flex-end;
  gap: 7px;
  border-bottom: 1px solid var(--an-bd);
  background: repeating-linear-gradient(to top, transparent 0, transparent 27px, rgba(0,0,0,0.03) 28px);
}

.an-graph-bar {
  flex: 1;
  border-radius: 4px 4px 0 0;
  background: linear-gradient(to top, #6d4aff, #a38eff);
  transition: height 0.5s ease;
}

.an-graph-bar:nth-child(2n) {
  background: linear-gradient(to top, #20b486, #6fe0bc);
}

.an-insights-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0.75rem;
  margin-top: 1rem;
}

.an-insight-box {
  background: var(--an-p-l);
  border: 1px solid var(--an-p-m);
  border-radius: 12px;
  padding: 10px 12px;
  font-size: 0.78rem;
}

.an-insight-box b {
  display: block;
  font-size: 0.88rem;
  color: var(--an-p);
  margin-bottom: 2px;
}

.an-insight-box span {
  color: var(--an-t3);
}

/* =====================================================================
   INTERACTIVE JOURNEY FLOW SECTION (DATA INTELLIGENCE PIPELINE)
   ===================================================================== */
.an-journey-section {
  padding: 5.5rem 0;
  background: var(--an-surface);
  position: relative;
}

.an-journey-nav {
  display: flex;
  justify-content: center;
  gap: 0.75rem;
  margin: 2rem 0 3rem;
  flex-wrap: wrap;
}

.an-j-tab {
  padding: 0.65rem 1.4rem;
  border-radius: 999px;
  border: 1px solid var(--an-bd2);
  background: var(--an-surface);
  color: var(--an-t2);
  font-weight: 750;
  font-size: 0.88rem;
  cursor: pointer;
  transition: all 0.2s;
}

.an-j-tab:hover,
.an-j-tab.active {
  background: var(--an-p);
  color: #ffffff;
  border-color: var(--an-p);
  box-shadow: 0 4px 18px rgba(109, 74, 255, 0.3);
}

.an-journey-timeline {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.25rem;
}

.an-journey-card {
  background: var(--an-bg);
  border: 1.5px solid var(--an-bd);
  border-radius: var(--an-r);
  padding: 1.75rem 1.4rem;
  transition: all 0.25s var(--an-ease);
  position: relative;
}

body.dark-theme .an-journey-card,
[data-theme="dark"] .an-journey-card {
  background: var(--an-surface2);
}

.an-journey-card.active-step {
  border-color: var(--an-p);
  box-shadow: 0 10px 30px rgba(109, 74, 255, 0.16);
  transform: translateY(-4px);
}

.an-j-num {
  width: 36px;
  height: 36px;
  border-radius: 10px;
  background: var(--an-p-l);
  color: var(--an-p);
  font-weight: 900;
  font-size: 0.85rem;
  display: grid;
  place-items: center;
  margin-bottom: 1rem;
}

.an-journey-card.active-step .an-j-num {
  background: var(--an-p);
  color: #ffffff;
}

.an-journey-card h4 {
  font-size: 1.05rem;
  font-weight: 800;
  margin-bottom: 0.4rem;
  color: var(--an-t);
}

.an-journey-card p {
  font-size: 0.85rem;
  color: var(--an-t3);
  line-height: 1.5;
  margin-bottom: 0.75rem;
}

.an-j-badge {
  display: inline-block;
  padding: 3px 8px;
  border-radius: 6px;
  background: rgba(24, 179, 131, 0.14);
  color: #10B981;
  font-size: 0.72rem;
  font-weight: 750;
}

/* WHAT YOU CAN TRACK */
.an-data-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.25rem;
  margin-top: 3rem;
}

.an-data-card {
  padding: 1.5rem;
  border-radius: 18px;
  background: linear-gradient(145deg, var(--an-surface), var(--an-bg));
  border: 1px solid var(--an-bd);
  transition: all 0.2s;
}

body.dark-theme .an-data-card,
[data-theme="dark"] .an-data-card {
  background: var(--an-surface2);
}

.an-data-card:hover {
  transform: translateY(-4px);
  border-color: var(--an-p-m);
}

.an-data-card b {
  font-size: 1rem;
  color: var(--an-t);
  display: block;
}

.an-data-card p {
  font-size: 0.85rem;
  color: var(--an-t3);
  margin-top: 0.5rem;
  line-height: 1.45;
}

/* FAQ */
.an-faq-wrap {
  max-width: 820px;
  margin: 2.5rem auto 0;
  display: grid;
  gap: 1rem;
}

.an-faq-wrap details {
  background: var(--an-surface);
  border: 1px solid var(--an-bd);
  border-radius: 16px;
  padding: 1.2rem 1.4rem;
  transition: all 0.2s;
}

body.dark-theme .an-faq-wrap details,
[data-theme="dark"] .an-faq-wrap details {
  background: var(--an-surface2);
}

.an-faq-wrap details[open] {
  border-color: var(--an-p-m);
  box-shadow: 0 4px 18px rgba(0, 0, 0, 0.04);
}

.an-faq-wrap summary {
  font-size: 0.98rem;
  font-weight: 800;
  color: var(--an-t);
  cursor: pointer;
  list-style: none;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.an-faq-wrap summary::-webkit-details-marker { display: none; }

.an-faq-wrap summary::after {
  content: '+';
  font-size: 1.2rem;
  font-weight: 700;
  color: var(--an-p);
}

.an-faq-wrap details[open] summary::after {
  content: '−';
}

.an-faq-wrap details p {
  font-size: 0.9rem;
  color: var(--an-t3);
  padding-top: 0.75rem;
  margin: 0;
  line-height: 1.6;
}

/* CTA */
.an-cta-section {
  padding: 5.5rem 0;
  color: #ffffff;
  background: linear-gradient(120deg, #17152a 0%, #2a2251 100%);
}

.an-cta-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 2.5rem;
}

.an-cta-inner h2 {
  font-size: clamp(2rem, 3.5vw, 2.8rem);
  font-weight: 850;
  line-height: 1.15;
  color: #ffffff;
  margin-bottom: 0.75rem;
}

.an-cta-inner p {
  color: #c8c5d5;
  max-width: 600px;
  font-size: 1.05rem;
  margin: 0;
}

.an-cta-actions {
  display: flex;
  gap: 0.85rem;
  flex-wrap: wrap;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
  .an-hero-grid,
  .an-feature-grid {
    grid-template-columns: 1fr;
    gap: 3rem;
  }
  .an-cards-grid,
  .an-journey-timeline,
  .an-data-grid {
    grid-template-columns: 1fr 1fr;
  }
  .an-cta-inner {
    flex-direction: column;
    align-items: flex-start;
  }
}

@media (max-width: 640px) {
  .an-hero {
    padding: 3.5rem 0;
  }
  .an-cards-grid,
  .an-journey-timeline,
  .an-data-grid {
    grid-template-columns: 1fr;
  }
  .an-metrics {
    grid-template-columns: 1fr 1fr;
  }
  .an-lower {
    grid-template-columns: 1fr;
  }
  .an-big-metrics {
    grid-template-columns: 1fr;
  }
  .an-dashboard {
    grid-template-columns: 50px 1fr;
  }
  .an-actions {
    flex-direction: column;
    align-items: stretch;
  }
  .an-btn {
    width: 100%;
  }
}
</style>

<div class="hb-an-wrap">
  <div class="an-topbar"></div>

  <!-- HERO SECTION -->
  <section class="an-hero">
    <div class="an-container an-hero-grid">
      <div>
        <div class="an-badge">
          <span class="an-dot"></span> REAL-TIME BUSINESS ANALYTICS
        </div>
        <h1>Turn your business data into <span class="an-gradient">clear decisions.</span></h1>
        <p class="an-hero-copy">
          Get a complete 360° view of customer conversations, broadcast campaigns, chatbot automation, agent productivity, and revenue conversion from one unified, high-speed Analytics Dashboard.
        </p>
        <div class="an-actions">
          <a href="<?php echo $bp; ?>auth/register" class="an-btn an-btn-primary">
            Explore Live Dashboard →
          </a>
          <button type="button" class="an-btn an-btn-secondary btn-demo-open">
            Book Live Demo
          </button>
          <a href="#contact-section" class="an-btn an-btn-verified">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified
          </a>
        </div>
        <div class="an-trust">
          <span><b class="an-check">✓</b> Real-Time Data Streaming</span>
          <span><b class="an-check">✓</b> Multi-Channel Cohorts</span>
          <span><b class="an-check">✓</b> Automated ROI Tracking</span>
        </div>
      </div>

      <!-- INTERACTIVE DASHBOARD MOCKUP -->
      <div class="an-dashboard-shell">
        <div class="an-browser">
          <span class="an-browser-dot red"></span>
          <span class="an-browser-dot yellow"></span>
          <span class="an-browser-dot green"></span>
          <span style="margin-left:8px">HelloBotz · Enterprise Analytics Console</span>
        </div>
        <div class="an-dashboard">
          <aside class="an-side">
            <div class="an-side-logo">HB</div>
            <div class="an-side-item active" title="Overview">▦</div>
            <div class="an-side-item" title="Channels">◫</div>
            <div class="an-side-item" title="Agents">♙</div>
            <div class="an-side-item" title="Campaigns">◉</div>
            <div class="an-side-item" title="Settings">⚙</div>
          </aside>
          <div class="an-dash-main">
            <div class="an-dash-top">
              <div class="an-dash-title">Omnichannel Performance</div>
              <select class="an-period-select" id="an-period-dropdown" onchange="changeAnalyticsPeriod(this.value)">
                <option value="30">Last 30 Days ▾</option>
                <option value="7">Last 7 Days ▾</option>
                <option value="1">Today (Live) ▾</option>
              </select>
            </div>

            <div class="an-metrics">
              <div class="an-metric">
                <small>Conversations</small>
                <strong id="an-val-conv">24.8K</strong>
                <span class="an-up" id="an-up-conv">↑ 18.4%</span>
              </div>
              <div class="an-metric">
                <small>New Contacts</small>
                <strong id="an-val-cust">4,286</strong>
                <span class="an-up" id="an-up-cust">↑ 12.8%</span>
              </div>
              <div class="an-metric">
                <small>Messages Sent</small>
                <strong id="an-val-msg">68.4K</strong>
                <span class="an-up" id="an-up-msg">↑ 24.2%</span>
              </div>
              <div class="an-metric">
                <small>Resolution Rate</small>
                <strong id="an-val-res">91.4%</strong>
                <span class="an-up" id="an-up-res">↑ 6.5%</span>
              </div>
            </div>

            <div class="an-lower">
              <div class="an-panel">
                <div class="an-panel-head">
                  <span>Conversation Volume Trend</span>
                  <span style="color:#737b8d;font-weight:600;" id="an-chart-subtitle">30 Days</span>
                </div>
                <div class="an-chart-area" id="an-bars-container">
                  <div class="an-bar" style="height:38%;" title="Day 1: 520 chats"></div>
                  <div class="an-bar" style="height:51%;" title="Day 2: 740 chats"></div>
                  <div class="an-bar" style="height:43%;" title="Day 3: 610 chats"></div>
                  <div class="an-bar" style="height:67%;" title="Day 4: 920 chats"></div>
                  <div class="an-bar" style="height:58%;" title="Day 5: 810 chats"></div>
                  <div class="an-bar" style="height:77%;" title="Day 6: 1,050 chats"></div>
                  <div class="an-bar" style="height:72%;" title="Day 7: 980 chats"></div>
                  <div class="an-bar" style="height:91%;" title="Day 8: 1,240 chats"></div>
                  <div class="an-bar" style="height:82%;" title="Day 9: 1,120 chats"></div>
                  <div class="an-bar" style="height:96%;" title="Day 10: 1,310 chats"></div>
                </div>
              </div>

              <div class="an-panel">
                <div class="an-panel-head">
                  <span>Channel Share</span>
                </div>
                <div class="an-donut"></div>
                <div class="an-legend">
                  <span><i></i> WhatsApp <b>48%</b></span>
                  <span><i class="g"></i> Instagram <b>28%</b></span>
                  <span><i class="o"></i> Facebook <b>13%</b></span>
                  <span><i class="gr"></i> SMS/RCS <b>11%</b></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="an-section alt" id="features">
    <div class="an-container an-center">
      <div class="an-kicker">ANALYTICS FEATURES</div>
      <h2 class="an-section-title">Everything important, visible in one unified pane.</h2>
      <p class="an-intro">
        Bring all your mission-critical messaging KPIs together so executives, marketing managers, and support team leads always know exactly where to optimize next.
      </p>

      <div class="an-cards-grid">
        <div class="an-card">
          <div class="an-card-icon">▦</div>
          <h3>Real-Time Live Dashboard</h3>
          <p>Monitor concurrent conversations, agent reply queues, open tickets, and incoming leads second-by-second without reloading screens.</p>
        </div>

        <div class="an-card">
          <div class="an-card-icon">◒</div>
          <h3>Conversational AI Analytics</h3>
          <p>Analyze bot containment rates, drop-off points, intent match accuracy, and cost savings compared to traditional call center operations.</p>
        </div>

        <div class="an-card">
          <div class="an-card-icon">♙</div>
          <h3>Customer Lifecycle Insights</h3>
          <p>Track customer retention cohorts, repeat engagement frequency, VIP lifetime value, and preferred communication channels.</p>
        </div>

        <div class="an-card">
          <div class="an-card-icon">⚡</div>
          <h3>Broadcast &amp; Campaign ROI</h3>
          <p>Measure WhatsApp and SMS promotional campaigns by delivered count, read rate, link click-throughs, and downstream sales checkout.</p>
        </div>

        <div class="an-card">
          <div class="an-card-icon">↗</div>
          <h3>Agent &amp; Team Productivity</h3>
          <p>Evaluate first-response time (FRT), average resolution time (ART), chat concurrency, and customer CSAT per individual agent.</p>
        </div>

        <div class="an-card">
          <div class="an-card-icon">★</div>
          <h3>Automated Executive Reports</h3>
          <p>Schedule automated daily or weekly PDF/CSV performance digests sent directly to executive WhatsApp inboxes and team Slack channels.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ACTIONABLE INSIGHTS -->
  <section class="an-section">
    <div class="an-container an-feature-grid">
      <div>
        <div class="an-kicker">ACTIONABLE SIGNALS</div>
        <h2 class="an-section-title" style="text-align:left;">Don't just collect data. Understand what to do next.</h2>
        <p class="an-intro" style="margin-left:0;text-align:left;">
          HelloBotz Analytics converts millions of raw telemetry events into intelligent notifications so your growth and support teams can move swiftly.
        </p>

        <div class="an-feature-list">
          <div class="an-feature-item">
            <div class="an-mini-icon">↗</div>
            <div>
              <b>Spot Rapid Growth Trends Early</b>
              <p>Compare period-over-period chat volume to forecast peak support hours and scale agent shifts proactively.</p>
            </div>
          </div>

          <div class="an-feature-item">
            <div class="an-mini-icon">◉</div>
            <div>
              <b>Identify Bottlenecks &amp; Drop-offs</b>
              <p>Locate exact questions where users abandon catalog orders and refine your chatbot conversational flow.</p>
            </div>
          </div>

          <div class="an-feature-item">
            <div class="an-mini-icon">⚡</div>
            <div>
              <b>Measure Automation Impact</b>
              <p>Quantify hours saved and operational expenses reduced by resolving 80%+ of inquiries without human labor.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="an-analytics-large">
        <div class="an-analytics-head">
          <b>Real-Time Efficiency Metrics</b>
          <span style="color:#10B981;font-weight:700;font-size:0.8rem;">Live Stream ●</span>
        </div>
        <div class="an-analytics-body">
          <div class="an-big-metrics">
            <div class="an-big-metric">
              <small>Engagement Rate</small>
              <strong>84.6%</strong>
            </div>
            <div class="an-big-metric">
              <small>Bot Automation</small>
              <strong>72.4%</strong>
            </div>
            <div class="an-big-metric">
              <small>First-Contact Res.</small>
              <strong>91.2%</strong>
            </div>
          </div>

          <div class="an-graph">
            <div class="an-graph-bar" style="height:39%;"></div>
            <div class="an-graph-bar" style="height:51%;"></div>
            <div class="an-graph-bar" style="height:45%;"></div>
            <div class="an-graph-bar" style="height:64%;"></div>
            <div class="an-graph-bar" style="height:57%;"></div>
            <div class="an-graph-bar" style="height:73%;"></div>
            <div class="an-graph-bar" style="height:68%;"></div>
            <div class="an-graph-bar" style="height:84%;"></div>
            <div class="an-graph-bar" style="height:78%;"></div>
            <div class="an-graph-bar" style="height:94%;"></div>
            <div class="an-graph-bar" style="height:88%;"></div>
          </div>

          <div class="an-insights-row">
            <div class="an-insight-box">
              <b>↑ Total Conversations</b>
              <span>+18.4% volume increase this cycle</span>
            </div>
            <div class="an-insight-box">
              <b style="color:#10B981;">✓ Resolution Time</b>
              <span>Average handling speed reduced by 3.2m</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INTERACTIVE JOURNEY FLOW SECTION -->
  <section class="an-journey-section" id="how">
    <div class="an-container an-center">
      <div class="an-kicker">DATA PIPELINE FLOW</div>
      <h2 class="an-section-title">From raw event stream to revenue growth in 4 stages.</h2>
      <p class="an-intro">
        How HelloBotz ingests, normalizes, and visualizes high-throughput conversational events in sub-second latency.
      </p>

      <!-- Channel Switcher -->
      <div class="an-journey-nav">
        <button type="button" class="an-j-tab active" onclick="switchAnJourney('whatsapp', this)">
          📱 WhatsApp Business API Data
        </button>
        <button type="button" class="an-j-tab" onclick="switchAnJourney('omnichannel', this)">
          🌐 Omnichannel (IG, FB, TG)
        </button>
        <button type="button" class="an-j-tab" onclick="switchAnJourney('telecom', this)">
          ⚡ SMS &amp; RCS Operator Stream
        </button>
      </div>

      <!-- 4-Step Cards -->
      <div class="an-journey-timeline">
        <div class="an-journey-card active-step" id="an-step-1">
          <div class="an-j-num">01</div>
          <h4 id="an-title-1">Connect Omnichannel Data</h4>
          <p id="an-desc-1">Webhook streams ingest messages, template sends, and user clicks in real time.</p>
          <span class="an-j-badge" id="an-badge-1">Sub-10ms Ingestion</span>
        </div>

        <div class="an-journey-card active-step" id="an-step-2">
          <div class="an-j-num">02</div>
          <h4 id="an-title-2">Real-Time Event Processing</h4>
          <p id="an-desc-2">Events categorized by delivery status, response latency, and chatbot handover.</p>
          <span class="an-j-badge" id="an-badge-2">99.99% Uptime Engine</span>
        </div>

        <div class="an-journey-card active-step" id="an-step-3">
          <div class="an-j-num">03</div>
          <h4 id="an-title-3">Cohort &amp; Trend Analytics</h4>
          <p id="an-desc-3">Automated funnel visualization shows drop-offs from broadcast delivery to checkout.</p>
          <span class="an-j-badge" id="an-badge-3">Deep Cohort Matrix</span>
        </div>

        <div class="an-journey-card active-step" id="an-step-4">
          <div class="an-j-num">04</div>
          <h4 id="an-title-4">Take High-Impact Action</h4>
          <p id="an-desc-4">Scale winning broadcast audiences, optimize bot scripts, and maximize agent ROI.</p>
          <span class="an-j-badge" id="an-badge-4">Direct Revenue Lift</span>
        </div>
      </div>
    </div>
  </section>

  <!-- WHAT YOU CAN TRACK -->
  <section class="an-section" id="data">
    <div class="an-container an-center">
      <div class="an-kicker">360° TELEMETRY</div>
      <h2 class="an-section-title">A complete view of your business communication.</h2>
      <p class="an-intro">Track every vital metric that drives customer satisfaction and commercial performance.</p>

      <div class="an-data-grid">
        <div class="an-data-card">
          <b>💬 Conversations</b>
          <p>Total chats, open threads, queue depth, closed tickets, and peak hour trends.</p>
        </div>
        <div class="an-data-card">
          <b>👥 Customers &amp; Leads</b>
          <p>New contacts acquired, active returning buyers, and customer lifetime value.</p>
        </div>
        <div class="an-data-card">
          <b>📨 Message Delivery</b>
          <p>Sent, delivered, read, failed, and response rates with operator-level failover logs.</p>
        </div>
        <div class="an-data-card">
          <b>🤖 Chatbot &amp; AI Stats</b>
          <p>Automated deflection rate, RAG knowledge accuracy, and human escalation ratio.</p>
        </div>
        <div class="an-data-card">
          <b>📣 Campaign Tracking</b>
          <p>Broadcast deliverability, opt-out percentages, CTRs, and conversion attribution.</p>
        </div>
        <div class="an-data-card">
          <b>👨‍💼 Team Leaderboard</b>
          <p>Agent reply speed, resolved ticket volume, CSAT ratings, and active handle time.</p>
        </div>
        <div class="an-data-card">
          <b>⭐ CSAT &amp; Sentiment</b>
          <p>Net Promoter Score, 5-star rating averages, sentiment flags, and negative alerts.</p>
        </div>
        <div class="an-data-card">
          <b>📈 Revenue &amp; Orders</b>
          <p>Direct sales generated via WhatsApp Pay, order confirmations, and COD validations.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="an-section alt" id="faq">
    <div class="an-container">
      <div class="an-center">
        <div class="an-kicker">FAQ</div>
        <h2 class="an-section-title">Frequently Asked Questions</h2>
        <p class="an-intro">Everything you need to know about HelloBotz Analytics Dashboard.</p>
      </div>

      <div class="an-faq-wrap">
        <details open>
          <summary>What data can I monitor in the HelloBotz Analytics Dashboard?</summary>
          <p>You can track total incoming and outgoing messages, campaign delivery and read rates, agent response latency (FRT/ART), bot resolution percentage, customer acquisition costs, and revenue generated via conversational commerce.</p>
        </details>

        <details>
          <summary>Is the analytics telemetry updated in real time?</summary>
          <p>Yes. The dashboard streams updates in sub-second latency. When a broadcast is dispatched or an agent responds, you can observe live counters incrementing immediately without manual page refreshes.</p>
        </details>

        <details>
          <summary>Can I filter reports by specific marketing campaigns or team agents?</summary>
          <p>Yes. HelloBotz offers granular filtering: filter by communication channel (WhatsApp, Instagram, SMS, RCS), specific broadcast tag, date range, or individual support representative.</p>
        </details>

        <details>
          <summary>Can I export analytics data to CSV, Excel, or Google BigQuery?</summary>
          <p>Absolutely. You can download one-click CSV and Excel reports, or schedule automated raw webhook data exports into Google BigQuery, Snowflake, or Google Sheets for custom enterprise business intelligence.</p>
        </details>

        <details>
          <summary>Can team members access custom permission-based dashboards?</summary>
          <p>Yes. HelloBotz supports role-based access control (RBAC). Marketing teams see campaign metrics, support managers see ticket and agent KPIs, while executives access top-level revenue dashboards.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="an-cta-section" id="demo">
    <div class="an-container an-cta-inner">
      <div>
        <div class="an-kicker" style="color:#aa9cff;">TAKE COMMAND OF YOUR DATA</div>
        <h2>See the numbers that move your business forward.</h2>
        <p>Consolidate your customer messaging activity into one powerful console and empower your team with data-driven confidence.</p>
      </div>
      <div class="an-cta-actions">
        <a href="<?php echo $bp; ?>auth/register" class="an-btn" style="background:#ffffff;color:#17152a;font-weight:800;">
          Start Free Trial →
        </a>
        <button type="button" class="an-btn btn-demo-open" style="border:1.5px solid rgba(255,255,255,0.35);color:#ffffff;background:transparent;">
          Book a Live Demo
        </button>
        <a href="#contact-section" class="an-btn an-btn-verified">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
          Get Verified
        </a>
      </div>
    </div>
  </section>
</div>

<script>
/* =====================================================================
   INTERACTIVE ANALYTICS SIMULATOR & JOURNEY SCRIPTS
   ===================================================================== */
var periodData = {
  '30': { conv: '24.8K', cust: '4,286', msg: '68.4K', res: '91.4%', upC: '↑ 18.4%', sub: '30 Days', heights: ['38%', '51%', '43%', '67%', '58%', '77%', '72%', '91%', '82%', '96%'] },
  '7': { conv: '6.2K', cust: '1,090', msg: '17.8K', res: '93.1%', upC: '↑ 22.1%', sub: '7 Days', heights: ['45%', '60%', '55%', '80%', '70%', '88%', '94%', '82%', '90%', '98%'] },
  '1': { conv: '940', cust: '148', msg: '2.9K', res: '95.8%', upC: '↑ 8.3%', sub: 'Today (Live)', heights: ['20%', '35%', '48%', '62%', '75%', '85%', '90%', '95%', '92%', '99%'] }
};

function changeAnalyticsPeriod(val) {
  var d = periodData[val];
  if (!d) return;

  document.getElementById('an-val-conv').textContent = d.conv;
  document.getElementById('an-val-cust').textContent = d.cust;
  document.getElementById('an-val-msg').textContent = d.msg;
  document.getElementById('an-val-res').textContent = d.res;
  document.getElementById('an-up-conv').textContent = d.upC;
  document.getElementById('an-chart-subtitle').textContent = d.sub;

  var bars = document.querySelectorAll('#an-bars-container .an-bar');
  bars.forEach(function(b, idx) {
    if (d.heights[idx]) {
      b.style.height = d.heights[idx];
    }
  });
}

var anJourneyData = {
  whatsapp: [
    { title: 'Connect Omnichannel Data', desc: 'Webhook streams ingest messages, template sends, and user clicks in real time.', badge: 'Sub-10ms Ingestion' },
    { title: 'Real-Time Event Processing', desc: 'Events categorized by delivery status, response latency, and chatbot handover.', badge: '99.99% Uptime Engine' },
    { title: 'Cohort & Trend Analytics', desc: 'Automated funnel visualization shows drop-offs from broadcast delivery to checkout.', badge: 'Deep Cohort Matrix' },
    { title: 'Take High-Impact Action', desc: 'Scale winning broadcast audiences, optimize bot scripts, and maximize agent ROI.', badge: 'Direct Revenue Lift' }
  ],
  omnichannel: [
    { title: 'Social Stream Ingest', desc: 'Sync Instagram DM, Facebook Messenger, and Telegram threads into one firehose.', badge: 'Unified Stream' },
    { title: 'Cross-Channel Attribution', desc: 'Link social leads with WhatsApp checkout events using unified phone & email keys.', badge: 'Omni-Identity Match' },
    { title: 'Comparative Velocity', desc: 'Compare customer acquisition costs and response speed across social channels.', badge: 'Channel ROI Matrix' },
    { title: 'Budget Reallocation', desc: 'Direct paid ad spend to high-converting channels based on verified revenue data.', badge: 'Smart Ad Optimization' }
  ],
  telecom: [
    { title: 'Telco Gateway Feed', desc: 'Real-time DLT logs and operator delivery packets ingested from Airtel, Jio & Vi.', badge: 'Direct Operator Pipes' },
    { title: 'Latency & Drop Analysis', desc: 'Dynamic load balancer detects route congestion and measures sub-2s OTP latency.', badge: 'Failover Monitoring' },
    { title: 'Operator Route Scoring', desc: 'Automated routing scores pick the fastest telecom corridor for high-priority OTPs.', badge: 'Zero Drop Engine' },
    { title: 'Cost & Volume Scaling', desc: 'Automated volume tiering unlocks enterprise wholesale rates as monthly volume grows.', badge: 'Wholesale Savings' }
  ]
};

function switchAnJourney(scenario, btn) {
  var tabs = document.querySelectorAll('.an-j-tab');
  tabs.forEach(function(t) { t.classList.remove('active'); });
  if (btn) btn.classList.add('active');

  var data = anJourneyData[scenario];
  if (!data) return;

  for (var i = 0; i < 4; i++) {
    var titleEl = document.getElementById('an-title-' + (i + 1));
    var descEl = document.getElementById('an-desc-' + (i + 1));
    var badgeEl = document.getElementById('an-badge-' + (i + 1));
    if (titleEl) titleEl.textContent = data[i].title;
    if (descEl) descEl.textContent = data[i].desc;
    if (badgeEl) badgeEl.textContent = data[i].badge;
  }
}
</script>

<?php
$footerContactText = "Talk to our data specialists to connect your analytics, integrate CRM webhooks, and customize reporting dashboards.";
include __DIR__ . '/../../includes/footer.php';
?>
