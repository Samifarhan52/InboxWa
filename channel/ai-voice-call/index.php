<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'AI Voice Call Channel — Human-like Voice AI for Business | HelloBotz';
$pageDescription = 'Automate inbound & outbound calls with human-like AI voice agents on HelloBotz. Support for Hindi, English & Hinglish, 320ms latency, CRM auto-sync, 24/7.';
$canonicalUrl = 'https://hellobotz.com/channel/ai-voice-call/';
$ogImage = 'assets/images/og-image.png';

include __DIR__ . '/../../includes/header.php';
?>

<style>
/* =====================================================================
   HELLOBOTZ AI VOICE CALL CHANNEL PAGE THEME
   Tailored to HelloBotz design system with full dark theme support
   ===================================================================== */
:root {
  --voice-p: #8B5CF6;
  --voice-p2: #7C3AED;
  --voice-p-l: rgba(139, 92, 246, 0.1);
  --voice-p-m: rgba(139, 92, 246, 0.22);
  --voice-a: #06B6D4;
  --voice-a-l: rgba(6, 182, 212, 0.1);
  --voice-g: #16A34A;
  --voice-t: #0F172A;
  --voice-t2: #475569;
  --voice-t3: #64748B;
  --voice-t4: #94A3B8;
  --voice-bg: #FFFFFF;
  --voice-bg2: #F8FAFC;
  --voice-bg3: #F1F5F9;
  --voice-bd: #E2E8F0;
  --voice-bd2: #CBD5E1;
  --voice-sh: 0 2px 5px rgba(15,23,42,.05), 0 1px 3px rgba(15,23,42,.03);
  --voice-sh2: 0 12px 32px -6px rgba(139,92,246,.18), 0 8px 12px -6px rgba(15,23,42,.06);
  --voice-r: 12px;
  --voice-r2: 18px;
  --voice-r3: 24px;
  --voice-r4: 999px;
  --voice-font: 'Inter', system-ui, -apple-system, sans-serif;
  --voice-max: 1240px;
  --voice-ease: cubic-bezier(.4,0,.2,1);
}

/* Dark Theme Overrides */
body.dark-theme,
[data-theme="dark"] {
  --voice-t: #F8FAFC;
  --voice-t2: #CBD5E1;
  --voice-t3: #94A3B8;
  --voice-t4: #64748B;
  --voice-bg: #0b1120;
  --voice-bg2: #0f172a;
  --voice-bg3: #1e293b;
  --voice-bd: #1e293b;
  --voice-bd2: #334155;
  --voice-sh: 0 2px 6px rgba(0,0,0,.3);
  --voice-sh2: 0 12px 32px -6px rgba(139,92,246,.25), 0 8px 16px -6px rgba(0,0,0,.4);
}

.cvoice-page {
  background: var(--voice-bg);
  color: var(--voice-t);
  font-family: var(--voice-font);
  overflow-x: hidden;
  width: 100%;
  box-sizing: border-box;
}

/* Breadcrumb */
.cvoice-breadcrumb {
  padding: 0.85rem 1.5rem 0.35rem;
  max-width: var(--voice-max);
  margin: 0 auto;
  font-size: 0.85rem;
  color: var(--voice-t3);
  display: flex;
  align-items: center;
  gap: 0.5rem;
}
.cvoice-breadcrumb a {
  color: var(--voice-t3);
  text-decoration: none;
  transition: color 0.15s;
}
.cvoice-breadcrumb a:hover {
  color: var(--voice-p);
}

/* Container & Sections */
.v-container {
  width: 100%;
  max-width: var(--voice-max);
  margin: 0 auto;
  padding: 0 1.25rem;
  box-sizing: border-box;
}
.v-section {
  padding: 4.5rem 0;
  position: relative;
}
.v-section-sm {
  padding: 2.75rem 0;
}
.v-section-alt {
  background: var(--voice-bg2);
}

/* Section Headings */
.v-sec-head {
  text-align: center;
  max-width: 740px;
  margin: 0 auto 3rem;
}
.v-sec-head h2 {
  font-size: clamp(1.6rem, 2.8vw, 2.35rem);
  font-weight: 800;
  letter-spacing: -0.025em;
  color: var(--voice-t);
  margin-top: 0.85rem;
  line-height: 1.25;
}
.v-sec-head p {
  color: var(--voice-t2);
  font-size: 1.05rem;
  margin-top: 0.85rem;
  line-height: 1.6;
}

.v-grad-txt {
  background: linear-gradient(135deg, var(--voice-p) 0%, var(--voice-a) 100%);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

/* Badges */
.v-badge {
  display: inline-flex;
  align-items: center;
  gap: 0.45rem;
  padding: 0.32rem 0.85rem;
  font-size: 0.75rem;
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  border-radius: var(--voice-r4);
  background: var(--voice-p-l);
  color: var(--voice-p2);
  border: 1px solid var(--voice-p-m);
}
.v-badge-dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: var(--voice-g);
  box-shadow: 0 0 8px var(--voice-g);
  animation: v-pulse 1.8s infinite;
}
@keyframes v-pulse {
  0%, 100% { opacity: 1; transform: scale(1); }
  50% { opacity: 0.5; transform: scale(1.3); }
}

/* Buttons */
.v-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 0.55rem;
  padding: 0.75rem 1.45rem;
  font-size: 0.92rem;
  font-weight: 700;
  border-radius: var(--voice-r4);
  border: 1.5px solid transparent;
  transition: all 0.22s var(--voice-ease);
  white-space: nowrap;
  line-height: 1.25;
  cursor: pointer;
  text-decoration: none;
}
.v-btn-primary {
  background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 50%, #06B6D4 100%);
  color: #FFFFFF !important;
  border-color: transparent;
  box-shadow: 0 6px 22px rgba(139, 92, 246, 0.42);
}
.v-btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 28px rgba(139, 92, 246, 0.55);
  opacity: 0.97;
}
.v-btn-outline {
  background: var(--voice-bg);
  color: var(--voice-t) !important;
  border-color: var(--voice-bd2);
}
.v-btn-outline:hover {
  border-color: var(--voice-p);
  color: var(--voice-p2) !important;
  background: var(--voice-p-l);
}
.v-btn-leads {
  background: linear-gradient(135deg, #10B981 0%, #059669 100%);
  color: #FFFFFF !important;
  box-shadow: 0 6px 20px rgba(16, 185, 129, 0.35);
}
.v-btn-leads:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 26px rgba(16, 185, 129, 0.48);
}
.v-btn-lg {
  padding: 0.92rem 1.85rem;
  font-size: 1rem;
}

/* =====================================================================
   HERO SECTION
   ===================================================================== */
.v-channel-hero {
  padding: 3.25rem 0 2.5rem;
  position: relative;
  overflow: hidden;
}
.v-channel-hero::before {
  content: '';
  position: absolute;
  top: -220px;
  right: -160px;
  width: 550px;
  height: 550px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(139,92,246,.15), transparent 70%);
  pointer-events: none;
}
.v-channel-hero::after {
  content: '';
  position: absolute;
  bottom: -120px;
  left: -120px;
  width: 450px;
  height: 450px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(6,182,212,.12), transparent 70%);
  pointer-events: none;
}
.v-channel-head {
  position: relative;
  display: flex;
  align-items: center;
  gap: 1.5rem;
  flex-wrap: wrap;
  margin-bottom: 2.25rem;
}
.v-channel-avatar {
  width: 78px;
  height: 78px;
  border-radius: 22px;
  flex-shrink: 0;
  display: grid;
  place-items: center;
  background: linear-gradient(135deg, #8B5CF6, #06B6D4);
  color: #FFFFFF;
  box-shadow: 0 12px 30px -8px rgba(139, 92, 246, 0.85);
}
.v-channel-avatar svg {
  width: 38px;
  height: 38px;
  fill: #FFFFFF;
}
.v-channel-meta {
  flex: 1;
  min-width: 240px;
}
.v-channel-meta h1 {
  font-size: clamp(2rem, 3.8vw, 3rem);
  font-weight: 800;
  letter-spacing: -0.03em;
  color: var(--voice-t);
  margin-bottom: 0.35rem;
  line-height: 1.15;
}
.v-channel-meta p {
  color: var(--voice-t2);
  font-size: 1.05rem;
  line-height: 1.5;
  max-width: 620px;
}
.v-channel-actions {
  display: flex;
  gap: 0.75rem;
  flex-wrap: wrap;
  align-items: center;
}

.v-channel-stats {
  display: flex;
  gap: 2.5rem;
  flex-wrap: wrap;
  padding-top: 1.75rem;
  border-top: 1px solid var(--voice-bd);
  position: relative;
}
.v-channel-stats .v-cs {
  display: flex;
  flex-direction: column;
}
.v-channel-stats .v-cs b {
  font-size: 1.55rem;
  font-weight: 800;
  letter-spacing: -0.02em;
  background: linear-gradient(135deg, var(--voice-p), var(--voice-a));
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  line-height: 1.2;
}
.v-channel-stats .v-cs span {
  font-size: 0.8rem;
  color: var(--voice-t3);
  font-weight: 600;
  margin-top: 0.2rem;
}

/* =====================================================================
   OVERVIEW & INTERACTIVE CALL PREVIEW
   ===================================================================== */
.v-overview-grid {
  display: grid;
  grid-template-columns: 1.05fr 0.95fr;
  gap: 3rem;
  align-items: center;
}
.v-overview-copy h2 {
  font-size: clamp(1.8rem, 3vw, 2.4rem);
  font-weight: 800;
  line-height: 1.2;
  letter-spacing: -0.02em;
  color: var(--voice-t);
  margin: 0.75rem 0 1rem;
}
.v-overview-copy p.v-lead {
  color: var(--voice-t2);
  font-size: 1.05rem;
  line-height: 1.65;
  margin-bottom: 1.75rem;
}
.v-overview-list {
  display: grid;
  gap: 0.75rem;
  margin-bottom: 2rem;
  list-style: none;
  padding: 0;
}
.v-overview-list li {
  display: flex;
  gap: 0.75rem;
  align-items: flex-start;
  font-size: 0.95rem;
  color: var(--voice-t);
  font-weight: 500;
}
.v-overview-list li svg {
  width: 20px;
  height: 20px;
  flex-shrink: 0;
  margin-top: 2px;
  stroke: var(--voice-g);
  fill: none;
  stroke-width: 2.6;
}

/* Scenario Selector Tabs */
.v-scenario-nav {
  display: flex;
  gap: 0.65rem;
  overflow-x: auto;
  padding-bottom: 0.5rem;
  margin-bottom: 1.25rem;
  scrollbar-width: thin;
}
.v-scen-btn {
  padding: 0.6rem 1.25rem;
  border-radius: 9999px;
  font-size: 0.88rem;
  font-weight: 700;
  background: #F1F5F9;
  color: #334155;
  border: 1px solid #E2E8F0;
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
  white-space: nowrap;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.03);
}
.v-scen-btn:hover {
  background: #E2E8F0;
  color: #0F172A;
  transform: translateY(-1px);
}
.v-scen-btn.active {
  background: linear-gradient(135deg, #5B61F6 0%, #00A3FF 100%);
  color: #FFFFFF;
  border-color: transparent;
  box-shadow: 0 6px 18px rgba(91, 97, 246, 0.35);
}
body.dark-theme .v-scen-btn,
[data-theme="dark"] .v-scen-btn {
  background: #1E293B;
  color: #CBD5E1;
  border-color: #334155;
}
body.dark-theme .v-scen-btn:hover,
[data-theme="dark"] .v-scen-btn:hover {
  background: #334155;
  color: #FFFFFF;
}
body.dark-theme .v-scen-btn.active,
[data-theme="dark"] .v-scen-btn.active {
  background: linear-gradient(135deg, #6366F1 0%, #0EA5E9 100%);
  color: #FFFFFF;
  box-shadow: 0 6px 18px rgba(99, 102, 241, 0.45);
}

/* Call Card */
.v-call-card {
  position: relative;
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: 28px;
  padding: 2rem;
  box-shadow: 0 20px 45px -12px rgba(100, 116, 139, 0.12);
  overflow: hidden;
  transition: all 0.3s ease;
}
body.dark-theme .v-call-card,
[data-theme="dark"] .v-call-card {
  background: #0F172A;
  border-color: #1E293B;
  box-shadow: 0 20px 45px -12px rgba(0, 0, 0, 0.6);
}
.v-cc-top {
  display: flex;
  align-items: center;
  gap: 1.15rem;
  margin-bottom: 1.35rem;
}
.v-cc-av {
  width: 52px;
  height: 52px;
  border-radius: 16px;
  background: linear-gradient(135deg, #6366F1, #0EA5E9);
  display: grid;
  place-items: center;
  font-weight: 800;
  font-size: 1.15rem;
  color: #FFFFFF;
  flex-shrink: 0;
  box-shadow: 0 8px 20px -4px rgba(99, 102, 241, 0.55);
}
.v-cc-info {
  flex: 1;
  min-width: 0;
}
.v-cc-info h4 {
  font-size: 1.08rem;
  font-weight: 800;
  color: #0F172A;
  margin: 0 0 0.2rem 0;
  letter-spacing: -0.01em;
}
body.dark-theme .v-cc-info h4,
[data-theme="dark"] .v-cc-info h4 {
  color: #F8FAFC;
}
.v-cc-info p {
  font-size: 0.82rem;
  color: #64748B;
  margin: 0;
  display: flex;
  align-items: center;
  gap: 0.45rem;
  font-weight: 500;
}
body.dark-theme .v-cc-info p,
[data-theme="dark"] .v-cc-info p {
  color: #94A3B8;
}
.v-badge-dot {
  display: inline-block;
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: #10B981;
  box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.2);
  flex-shrink: 0;
}
.v-cc-timer {
  font-size: 0.85rem;
  font-weight: 700;
  color: #0284C7;
  background: #E0F2FE;
  padding: 0.35rem 0.95rem;
  border-radius: 9999px;
  border: 1px solid #BAE6FD;
  font-variant-numeric: tabular-nums;
  letter-spacing: 0.02em;
}
body.dark-theme .v-cc-timer,
[data-theme="dark"] .v-cc-timer {
  background: rgba(14, 165, 233, 0.15);
  color: #38BDF8;
  border-color: rgba(56, 189, 248, 0.25);
}

/* Waveform Visualizer */
.v-wave-container {
  background: #F1F5F9;
  border: 1px solid #E2E8F0;
  border-radius: 18px;
  padding: 1rem 1.4rem;
  margin-bottom: 1.25rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1.25rem;
}
body.dark-theme .v-wave-container,
[data-theme="dark"] .v-wave-container {
  background: #1E293B;
  border-color: #334155;
}
.v-wave {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 5px;
  height: 42px;
  flex: 1;
}
.v-wave i {
  display: block;
  width: 4.5px;
  border-radius: 99px;
  background: linear-gradient(180deg, #8B5CF6, #06B6D4);
  transition: height 0.15s ease, opacity 0.2s ease;
}
.v-wave i:nth-child(1) { height: 70%; }
.v-wave i:nth-child(2) { height: 40%; }
.v-wave i:nth-child(3) { height: 30%; }
.v-wave i:nth-child(4) { height: 55%; }
.v-wave i:nth-child(5) { height: 25%; }
.v-wave i:nth-child(6) { height: 85%; }
.v-wave i:nth-child(7) { height: 20%; }
.v-wave i:nth-child(8) { height: 35%; }
.v-wave i:nth-child(9) { height: 65%; }
.v-wave i:nth-child(10) { height: 25%; }
.v-wave i:nth-child(11) { height: 45%; }
.v-wave i:nth-child(12) { height: 30%; }
.v-wave i:nth-child(13) { height: 75%; }
.v-wave i:nth-child(14) { height: 50%; }

.v-wave.speaking i {
  animation: v-wave-speak 0.85s ease-in-out infinite alternate;
}
.v-wave.speaking i:nth-child(2n) {
  animation-duration: 0.65s;
  animation-delay: 0.12s;
}
.v-wave.speaking i:nth-child(3n) {
  animation-duration: 0.95s;
  animation-delay: 0.24s;
}
.v-wave.speaking i:nth-child(5n) {
  animation-duration: 0.72s;
  animation-delay: 0.08s;
}
@keyframes v-wave-speak {
  0% { height: 20%; transform: scaleY(0.7); }
  50% { height: 95%; transform: scaleY(1); }
  100% { height: 35%; transform: scaleY(0.75); }
}

.v-audio-toggle {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.55rem 1.15rem;
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: 9999px;
  font-size: 0.82rem;
  font-weight: 700;
  color: #0F172A;
  cursor: pointer;
  box-shadow: 0 2px 6px rgba(0,0,0,0.06);
  transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
  user-select: none;
  white-space: nowrap;
}
.v-audio-toggle:hover {
  transform: translateY(-1px);
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  border-color: #CBD5E1;
}
body.dark-theme .v-audio-toggle,
[data-theme="dark"] .v-audio-toggle {
  background: #0F172A;
  border-color: #334155;
  color: #F8FAFC;
}
.v-audio-toggle.is-playing {
  background: #ECFDF5;
  border-color: #10B981;
  color: #059669;
}
body.dark-theme .v-audio-toggle.is-playing,
[data-theme="dark"] .v-audio-toggle.is-playing {
  background: rgba(16, 185, 129, 0.15);
  border-color: rgba(16, 185, 129, 0.4);
  color: #34D399;
}

/* Transcript Box */
.v-transcript {
  background: #F8FAFC;
  border: 1.5px solid #E2E8F0;
  border-radius: 20px;
  padding: 1.25rem 1.5rem;
  display: flex;
  flex-direction: column;
  gap: 1.15rem;
  min-height: 180px;
}
body.dark-theme .v-transcript,
[data-theme="dark"] .v-transcript {
  background: rgba(15, 23, 42, 0.6);
  border-color: #334155;
}
.v-msg {
  display: flex;
  align-items: flex-start;
  gap: 0.85rem;
  font-size: 0.92rem;
  line-height: 1.6;
  padding: 0.55rem 0.85rem;
  border-radius: 12px;
  transition: all 0.25s ease;
  position: relative;
  cursor: pointer;
  border-left: 3.5px solid transparent;
}
.v-msg:hover {
  background: rgba(99, 102, 241, 0.05);
}
.v-msg.active-speaking.ai {
  background: rgba(2, 132, 199, 0.08);
  border-left-color: #0284C7;
  transform: translateX(4px);
  box-shadow: 0 4px 14px rgba(2, 132, 199, 0.08);
}
.v-msg.active-speaking.user {
  background: rgba(236, 72, 153, 0.08);
  border-left-color: #EC4899;
  transform: translateX(4px);
  box-shadow: 0 4px 14px rgba(236, 72, 153, 0.08);
}
body.dark-theme .v-msg.active-speaking.ai,
[data-theme="dark"] .v-msg.active-speaking.ai {
  background: rgba(14, 165, 233, 0.15);
}
body.dark-theme .v-msg.active-speaking.user,
[data-theme="dark"] .v-msg.active-speaking.user {
  background: rgba(236, 72, 153, 0.15);
}
.v-msg .v-who {
  font-weight: 800;
  flex-shrink: 0;
  font-size: 0.82rem;
  letter-spacing: 0.03em;
  padding-top: 1px;
  min-width: 32px;
}
.v-msg.ai .v-who {
  color: #0284C7;
}
.v-msg.user .v-who {
  color: #EC4899;
}
.v-msg p {
  color: #0F172A;
  margin: 0;
  flex: 1;
}
body.dark-theme .v-msg p,
[data-theme="dark"] .v-msg p {
  color: #F8FAFC;
}

/* Footer Chips */
.v-cc-foot {
  display: flex;
  gap: 0.55rem;
  margin-top: 1.25rem;
  flex-wrap: wrap;
}
.v-chip {
  font-size: 0.76rem;
  font-weight: 600;
  padding: 0.42rem 0.95rem;
  border-radius: 9999px;
  background: #F1F5F9;
  border: 1px solid #E2E8F0;
  color: #475569;
  display: inline-flex;
  align-items: center;
  gap: 0.4rem;
  transition: all 0.25s ease;
}
body.dark-theme .v-chip,
[data-theme="dark"] .v-chip {
  background: #1E293B;
  border-color: #334155;
  color: #94A3B8;
}
.v-chip.on {
  background: #DCFCE7 !important;
  border-color: #86EFAC !important;
  color: #15803D !important;
  font-weight: 700 !important;
}
body.dark-theme .v-chip.on,
[data-theme="dark"] .v-chip.on {
  background: rgba(22, 163, 74, 0.22) !important;
  color: #4ADE80 !important;
  border-color: rgba(34, 197, 94, 0.35) !important;
}
.v-chip-dot {
  font-size: 0.8rem;
  line-height: 1;
}
.v-chip.on .v-chip-dot {
  animation: v-pulse-dot 1.8s infinite ease-in-out;
}
@keyframes v-pulse-dot {
  0%, 100% { opacity: 1; transform: scale(1); }
  50% { opacity: 0.4; transform: scale(1.2); }
}

/* =====================================================================
   INTERACTIVE SAVINGS & ROI CALCULATOR
   ===================================================================== */
.v-roi-card {
  background: linear-gradient(135deg, var(--voice-bg), var(--voice-bg2));
  border: 1.5px solid var(--voice-p-m);
  border-radius: var(--voice-r3);
  padding: 2.5rem 2rem;
  box-shadow: var(--voice-sh2);
  margin: 2rem 0;
}
.v-roi-grid {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: 2.5rem;
  align-items: center;
}
.v-calc-slider-box {
  margin: 1.5rem 0;
}
.v-calc-slider-label {
  display: flex;
  justify-content: space-between;
  font-size: 0.95rem;
  font-weight: 700;
  margin-bottom: 0.75rem;
  color: var(--voice-t);
}
.v-calc-slider-val {
  color: var(--voice-p2);
  font-size: 1.25rem;
  font-weight: 800;
}
.v-range-slider {
  width: 100%;
  height: 8px;
  border-radius: 999px;
  background: var(--voice-bd);
  outline: none;
  -webkit-appearance: none;
  cursor: pointer;
}
.v-range-slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background: linear-gradient(135deg, #8B5CF6, #06B6D4);
  cursor: pointer;
  box-shadow: 0 4px 10px rgba(139, 92, 246, 0.5);
  border: 2px solid #FFFFFF;
}
.v-roi-results {
  background: var(--voice-bg);
  border: 1px solid var(--voice-bd);
  border-radius: var(--voice-r2);
  padding: 1.75rem;
  box-shadow: var(--voice-sh);
}
.v-roi-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0.75rem 0;
  border-bottom: 1px dashed var(--voice-bd);
}
.v-roi-row:last-child {
  border-bottom: none;
  padding-top: 1rem;
}
.v-roi-val-strike {
  text-decoration: line-through;
  color: var(--voice-t3);
  font-weight: 600;
  font-size: 1.1rem;
}
.v-roi-val-save {
  font-size: 1.6rem;
  font-weight: 900;
  color: var(--voice-g);
}

/* =====================================================================
   FEATURES GRID
   ===================================================================== */
.v-feat-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.5rem;
}
.v-feat {
  padding: 1.75rem;
  border-radius: var(--voice-r2);
  background: var(--voice-bg);
  border: 1px solid var(--voice-bd);
  box-shadow: var(--voice-sh);
  transition: all 0.3s var(--voice-ease);
}
.v-feat:hover {
  background: var(--voice-p-l);
  border-color: var(--voice-p-m);
  transform: translateY(-5px);
  box-shadow: var(--voice-sh2);
}
.v-icon-box {
  width: 52px;
  height: 52px;
  border-radius: 16px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  font-size: 1.5rem;
  margin-bottom: 1.1rem;
}
.v-icon-p { background: linear-gradient(135deg, var(--voice-p-l), var(--voice-p-m)); color: var(--voice-p2); }
.v-icon-a { background: var(--voice-a-l); color: var(--voice-a); }
.v-icon-g { background: rgba(22, 163, 74, 0.12); color: var(--voice-g); }
.v-icon-pink { background: rgba(236, 72, 153, 0.12); color: #EC4899; }
.v-feat h4 {
  font-size: 1.1rem;
  font-weight: 700;
  margin-bottom: 0.45rem;
  color: var(--voice-t);
}
.v-feat p {
  font-size: 0.88rem;
  color: var(--voice-t2);
  line-height: 1.6;
  margin: 0;
}

/* =====================================================================
   HOW IT WORKS (4 STEPS)
   ===================================================================== */
.v-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.75rem;
  position: relative;
}
.v-steps::before {
  content: '';
  position: absolute;
  top: 30px;
  left: 10%;
  right: 10%;
  height: 2px;
  background: linear-gradient(90deg, transparent, rgba(139,92,246,.5), rgba(6,182,212,.5), transparent);
}
.v-step {
  text-align: center;
  position: relative;
  z-index: 2;
}
.v-step-num {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  margin: 0 auto 1.25rem;
  display: grid;
  place-items: center;
  font-weight: 800;
  font-size: 1.15rem;
  background: var(--voice-bg);
  border: 2.5px solid var(--voice-p-m);
  color: var(--voice-p2);
  box-shadow: 0 0 0 6px var(--voice-bg), 0 4px 18px -4px rgba(139,92,246,.4);
  transition: all 0.3s;
}
.v-step:hover .v-step-num {
  background: linear-gradient(135deg, #8B5CF6, #06B6D4);
  color: #FFFFFF;
  border-color: transparent;
  transform: scale(1.1);
}
.v-step h4 {
  font-size: 1.02rem;
  margin-bottom: 0.45rem;
  color: var(--voice-t);
}
.v-step p {
  font-size: 0.85rem;
  color: var(--voice-t2);
  line-height: 1.55;
  margin: 0;
}

/* =====================================================================
   USE CASES / INDUSTRIES
   ===================================================================== */
.v-ind-grid {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  gap: 1.15rem;
}
.v-ind {
  padding: 1.6rem 0.85rem;
  border-radius: var(--voice-r2);
  text-align: center;
  background: var(--voice-bg);
  border: 1px solid var(--voice-bd);
  box-shadow: var(--voice-sh);
  transition: all 0.3s var(--voice-ease);
  cursor: pointer;
}
.v-ind:hover {
  transform: translateY(-6px);
  background: var(--voice-p-l);
  border-color: rgba(139,92,246,.35);
  box-shadow: var(--voice-sh2);
}
.v-ind span {
  font-size: 1.75rem;
  display: block;
  margin-bottom: 0.65rem;
}
.v-ind p {
  font-size: 0.84rem;
  font-weight: 700;
  color: var(--voice-t);
  margin: 0;
}

/* =====================================================================
   STATS ROW
   ===================================================================== */
.v-stats-row {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.5rem;
  background: linear-gradient(135deg, var(--voice-p-l), var(--voice-bg));
  border: 1px solid var(--voice-p-m);
  border-radius: var(--voice-r3);
  padding: 2.25rem 1.75rem;
}
.v-stat {
  text-align: center;
}
.v-stat h3 {
  font-size: clamp(1.6rem, 2.6vw, 2.25rem);
  font-weight: 800;
  background: linear-gradient(135deg, var(--voice-p), var(--voice-a));
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  line-height: 1.2;
}
.v-stat p {
  font-size: 0.86rem;
  color: var(--voice-t2);
  margin-top: 0.35rem;
  font-weight: 600;
}

/* =====================================================================
   TESTIMONIALS
   ===================================================================== */
.v-tst-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.5rem;
}
.v-tst {
  padding: 1.75rem;
  border-radius: var(--voice-r2);
  background: var(--voice-bg);
  border: 1px solid var(--voice-bd);
  box-shadow: var(--voice-sh);
  transition: all 0.3s var(--voice-ease);
}
.v-tst:hover {
  transform: translateY(-5px);
  border-color: rgba(6,182,212,.4);
  box-shadow: var(--voice-sh2);
}
.v-tst .stars {
  font-size: 0.95rem;
  margin-bottom: 0.85rem;
  color: #F59E0B;
  letter-spacing: 2px;
}
.v-tst p {
  font-size: 0.9rem;
  color: var(--voice-t2);
  margin-bottom: 1.35rem;
  line-height: 1.65;
}
.v-tst-who {
  display: flex;
  align-items: center;
  gap: 0.85rem;
}
.v-tst-av {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  display: grid;
  place-items: center;
  font-weight: 800;
  font-size: 0.85rem;
  color: #FFFFFF;
  flex-shrink: 0;
}
.v-tst-who h5 {
  font-size: 0.9rem;
  font-weight: 700;
  color: var(--voice-t);
  margin: 0;
}
.v-tst-who small {
  font-size: 0.75rem;
  color: var(--voice-t3);
}

/* =====================================================================
   FAQ ACCORDION
   ===================================================================== */
.v-faq-list {
  max-width: 860px;
  margin: 0 auto;
  display: grid;
  gap: 0.85rem;
}
.v-faq {
  border-radius: var(--voice-r2);
  background: var(--voice-bg);
  border: 1px solid var(--voice-bd);
  overflow: hidden;
  transition: all 0.25s;
}
.v-faq.open {
  background: var(--voice-p-l);
  border-color: var(--voice-p-m);
}
.v-faq-q {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  padding: 1.15rem 1.5rem;
  font-size: 0.96rem;
  font-weight: 700;
  text-align: left;
  color: var(--voice-t);
  background: transparent;
  border: none;
  cursor: pointer;
}
.v-faq-q .plus {
  width: 28px;
  height: 28px;
  border-radius: 50%;
  flex-shrink: 0;
  display: grid;
  place-items: center;
  background: var(--voice-bg3);
  border: 1px solid var(--voice-bd);
  transition: 0.3s;
  font-size: 1.1rem;
  line-height: 1;
  color: var(--voice-p2);
}
.v-faq.open .plus {
  transform: rotate(45deg);
  background: linear-gradient(135deg, #8B5CF6, #06B6D4);
  color: #FFFFFF;
  border-color: transparent;
}
.v-faq-a {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.35s var(--voice-ease);
}
.v-faq-a p {
  padding: 0 1.5rem 1.25rem;
  font-size: 0.88rem;
  color: var(--voice-t2);
  line-height: 1.7;
  margin: 0;
}

/* =====================================================================
   CTA BOX
   ===================================================================== */
.v-cta-box {
  position: relative;
  text-align: center;
  padding: 4rem 2.5rem;
  border-radius: var(--voice-r3);
  overflow: hidden;
  background: linear-gradient(135deg, #6D28D9 0%, #8B5CF6 50%, #06B6D4 100%);
  color: #FFFFFF;
  box-shadow: 0 20px 50px rgba(109, 40, 217, 0.35);
}
.v-cta-box::before {
  content: '';
  position: absolute;
  width: 600px;
  height: 600px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(255,255,255,.16), transparent 70%);
  top: -300px;
  left: 50%;
  transform: translateX(-50%);
}
.v-cta-box > * {
  position: relative;
  z-index: 2;
}
.v-cta-box h2 {
  color: #FFFFFF !important;
  font-size: clamp(1.8rem, 3.2vw, 2.6rem);
  font-weight: 800;
  margin: 1rem 0;
}
.v-cta-box p {
  color: rgba(255,255,255,.9) !important;
  font-size: 1.05rem;
  max-width: 600px;
  margin: 0 auto 2rem;
  line-height: 1.6;
}
.v-cta-btns {
  display: flex;
  gap: 1rem;
  justify-content: center;
  flex-wrap: wrap;
}
.v-btn-white {
  background: #FFFFFF !important;
  color: #7C3AED !important;
  border-color: transparent !important;
  font-weight: 800;
}
.v-btn-white:hover {
  background: #F1F5F9 !important;
  transform: translateY(-2px);
  box-shadow: 0 8px 24px rgba(0,0,0,0.2);
}
.v-btn-outline-white {
  background: rgba(255,255,255,0.08) !important;
  color: #FFFFFF !important;
  border-color: rgba(255,255,255,.6) !important;
}
.v-btn-outline-white:hover {
  background: rgba(255,255,255,0.2) !important;
  border-color: #FFFFFF !important;
}
.v-cta-note {
  font-size: 0.82rem;
  color: rgba(255,255,255,.82) !important;
  margin-top: 1.5rem !important;
}

/* Animations */
.v-reveal {
  opacity: 0;
  transform: translateY(22px);
  transition: opacity 0.65s var(--voice-ease), transform 0.65s var(--voice-ease);
}
.v-reveal.in {
  opacity: 1;
  transform: none;
}

/* =====================================================================
   RESPONSIVE DESIGN
   ===================================================================== */
@media (max-width: 1024px) {
  .v-overview-grid,
  .v-roi-grid {
    grid-template-columns: 1fr;
    gap: 2.5rem;
  }
  .v-feat-grid,
  .v-tst-grid {
    grid-template-columns: 1fr 1fr;
  }
  .v-steps {
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
  }
  .v-steps::before {
    display: none;
  }
  .v-ind-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}
@media (max-width: 768px) {
  .v-section {
    padding: 3rem 0;
  }
  .v-section-sm {
    padding: 2.25rem 0;
  }
  .v-stats-row {
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
    padding: 1.5rem 1rem;
  }
  .v-feat-grid,
  .v-tst-grid {
    grid-template-columns: 1fr;
  }
  .v-steps {
    grid-template-columns: 1fr;
  }
  .v-ind-grid {
    grid-template-columns: 1fr 1fr;
  }
  .v-cta-box {
    padding: 2.75rem 1.25rem;
  }
  .v-channel-hero {
    padding: 2.25rem 0 1.75rem;
  }
  .v-channel-head {
    flex-direction: column;
    text-align: center;
  }
  .v-channel-actions {
    width: 100%;
    justify-content: center;
    flex-direction: column;
    align-items: stretch;
  }
  .v-channel-actions .v-btn,
  .v-overview-copy .v-btn,
  .v-cta-box .v-btn {
    width: 100%;
    justify-content: center;
    text-align: center;
    box-sizing: border-box;
  }
  .v-channel-stats {
    justify-content: center;
    gap: 1.5rem;
  }
  .v-channel-stats .v-cs {
    align-items: center;
  }

  /* Simulator Mobile Optimization (768px) */
  .v-call-card {
    padding: 1.25rem 1rem;
    border-radius: 20px;
  }
  .v-cc-top {
    gap: 0.85rem;
    margin-bottom: 1rem;
  }
  .v-cc-av {
    width: 46px;
    height: 46px;
    font-size: 1.05rem;
    border-radius: 12px;
  }
  .v-cc-info h4 {
    font-size: 0.98rem;
  }
  .v-cc-timer {
    font-size: 0.78rem;
    padding: 0.28rem 0.75rem;
  }
  .v-scenario-nav {
    display: flex;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
    padding-bottom: 0.35rem;
    gap: 0.5rem;
  }
  .v-scenario-nav::-webkit-scrollbar {
    display: none;
  }
  .v-scen-btn {
    padding: 0.5rem 1rem;
    font-size: 0.82rem;
    flex-shrink: 0;
  }
  .v-wave-container {
    padding: 0.75rem 0.9rem;
    gap: 0.75rem;
    border-radius: 14px;
    margin-bottom: 1rem;
  }
  .v-wave {
    gap: 3px;
    height: 32px;
  }
  .v-wave i {
    width: 3.5px;
  }
  .v-audio-toggle {
    padding: 0.45rem 0.85rem;
    font-size: 0.76rem;
    gap: 0.4rem;
  }
  .v-transcript {
    padding: 1rem 0.9rem;
    min-height: 150px;
    gap: 0.75rem;
    border-radius: 16px;
  }
  .v-msg {
    padding: 0.45rem 0.65rem;
    font-size: 0.86rem;
    gap: 0.6rem;
  }
  .v-msg .v-who {
    font-size: 0.75rem;
    min-width: 26px;
  }
  .v-cc-foot {
    gap: 0.45rem;
    margin-top: 1rem;
  }
  .v-chip {
    font-size: 0.72rem;
    padding: 0.35rem 0.75rem;
  }

  /* ROI Calculator Mobile Optimization */
  .v-roi-card {
    padding: 1.5rem 1rem;
    border-radius: 18px;
    margin: 1.5rem 0;
  }
  .v-roi-results {
    padding: 1.25rem 1rem;
    border-radius: 14px;
  }
  .v-roi-row {
    padding: 0.6rem 0;
    font-size: 0.88rem;
  }
  .v-roi-val-save {
    font-size: 1.35rem;
  }
}

@media (max-width: 480px) {
  .v-stats-row {
    grid-template-columns: 1fr;
    gap: 1rem;
  }
  .v-ind-grid {
    grid-template-columns: 1fr;
  }
  .v-channel-hero {
    padding: 1.75rem 0 1.25rem;
  }
  .v-call-card {
    padding: 1rem 0.75rem;
    border-radius: 16px;
  }
  .v-cc-top {
    gap: 0.65rem;
  }
  .v-cc-av {
    width: 40px;
    height: 40px;
    font-size: 0.95rem;
    border-radius: 10px;
  }
  .v-cc-info h4 {
    font-size: 0.92rem;
  }
  .v-cc-timer {
    font-size: 0.72rem;
    padding: 0.22rem 0.55rem;
  }
  .v-scen-btn {
    padding: 0.45rem 0.85rem;
    font-size: 0.78rem;
  }
  .v-wave-container {
    padding: 0.6rem 0.65rem;
    gap: 0.5rem;
  }
  .v-wave {
    gap: 2.2px;
    height: 26px;
  }
  .v-wave i {
    width: 2.5px;
  }
  .v-audio-toggle {
    padding: 0.4rem 0.65rem;
    font-size: 0.72rem;
  }
  .v-audio-toggle svg {
    width: 13px;
    height: 13px;
  }
  .v-transcript {
    padding: 0.75rem 0.65rem;
    border-radius: 14px;
  }
  .v-msg {
    padding: 0.4rem 0.5rem;
    font-size: 0.82rem;
  }
  .v-chip {
    font-size: 0.68rem;
    padding: 0.3rem 0.6rem;
  }
  .v-roi-card {
    padding: 1.2rem 0.75rem;
  }
  .v-calc-slider-val {
    font-size: 1.1rem;
  }
  .v-roi-val-save {
    font-size: 1.2rem;
  }
}
</style>

<div class="cvoice-page">
  <!-- Breadcrumb -->
  <div class="cvoice-breadcrumb">
    <a href="<?php echo $bp; ?>">Home</a>
    <span>/</span>
    <a href="<?php echo $bp; ?>#channels-section">Channels</a>
    <span>/</span>
    <span style="color: var(--voice-p2); font-weight: 600;">AI Voice Call</span>
  </div>

  <!-- =====================================================================
       CHANNEL HEADER / HERO
       ===================================================================== -->
  <section class="v-channel-hero">
    <div class="v-container">
      <div class="v-channel-head v-reveal">
        <div class="v-channel-avatar">
          <svg viewBox="0 0 24 24">
            <path d="M15.2 13.2l-1.3-1.3a.8.8 0 00-1.1 0l-.6.6a6.5 6.5 0 01-3-3l.6-.6a.8.8 0 000-1.1L8.5 6.5a.8.8 0 00-1.1 0L6.4 7.4c-.5.5-.7 1.2-.6 1.9a11.5 11.5 0 008 8c.7.2 1.4-.1 1.9-.6l.9-.9a.8.8 0 000-1.1l-1.4-1.5z"/>
          </svg>
        </div>
        <div class="v-channel-meta">
          <div class="v-badge" style="margin-bottom:.55rem">
            <span class="v-badge-dot"></span> Official Channel · Live
          </div>
          <h1>AI Voice Call Channel</h1>
          <p>Automate inbound &amp; outbound calls with human-like AI voice agents — directly inside your HelloBotz omnichannel inbox.</p>
        </div>
        <div class="v-channel-actions">
          <a href="#contact-section" class="v-btn v-btn-primary">
            Connect AI Voice
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="#contact-section" class="v-btn v-btn-leads">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified
          </a>
          <a href="#demo" class="v-btn v-btn-outline">
            Interactive Demo
          </a>
        </div>
      </div>

      <div class="v-channel-stats v-reveal">
        <div class="v-cs"><b><span class="v-count" data-to="5">0</span>M+</b><span>Calls Automated</span></div>
        <div class="v-cs"><b><span class="v-count" data-to="98">0</span>%</b><span>Answer Rate</span></div>
        <div class="v-cs"><b><span class="v-count" data-to="320">0</span>ms</b><span>Ultra-low Latency</span></div>
        <div class="v-cs"><b>24/7</b><span>Zero Human Delay</span></div>
      </div>
    </div>
  </section>

  <!-- =====================================================================
       OVERVIEW & INTERACTIVE CALL SIMULATOR
       ===================================================================== -->
  <section class="v-section v-section-alt" id="demo">
    <div class="v-container v-overview-grid">
      <div class="v-overview-copy v-reveal">
        <span class="v-badge">Live Channel Overview</span>
        <h2>Har Call Ka <span class="v-grad-txt">Smart Answer</span></h2>
        <p class="v-lead">
          HelloBotz AI Voice Call channel aapke business ki har incoming aur outgoing call
          ko natural human-like AI agent se automate karta hai — 24/7, bina extra staff hire kiye.
          Sabhi audio recordings, live transcripts aur lead scores aapke unified inbox me sync hote hain.
        </p>
        <ul class="v-overview-list">
          <li>
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
            <span><strong>Zero Hold Time:</strong> Instant call answering at infinite concurrency without waiting.</span>
          </li>
          <li>
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
            <span><strong>Native Indian Accents:</strong> Fluent in Hindi, Indian English, Hinglish &amp; 10+ regional dialects.</span>
          </li>
          <li>
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
            <span><strong>Auto CRM Sync:</strong> Every call creates notes, recordings &amp; sentiment tags in your inbox.</span>
          </li>
          <li>
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
            <span><strong>Warm Transfer:</strong> Real-time handover to human executive when high-ticket intent is detected.</span>
          </li>
        </ul>
        <div style="display:flex;gap:0.75rem;flex-wrap:wrap;">
          <a href="#contact-section" class="v-btn v-btn-primary">Get Verified Setup →</a>
          <a href="#calculator" class="v-btn v-btn-outline">Calculate Savings ⚡</a>
        </div>
      </div>

      <!-- LIVE CALL PREVIEW WITH SCENARIOS -->
      <div class="v-reveal" style="position:relative">
        <!-- Scenario Switcher -->
        <div class="v-scenario-nav">
          <button class="v-scen-btn active" data-scenario="real-estate" type="button">🏢 Real Estate</button>
          <button class="v-scen-btn" data-scenario="ecommerce" type="button">🛒 E-Commerce COD</button>
          <button class="v-scen-btn" data-scenario="healthcare" type="button">🏥 Clinic Booking</button>
          <button class="v-scen-btn" data-scenario="bfsi" type="button">💳 Payment Alert</button>
        </div>

        <div class="v-call-card">
          <div class="v-cc-top">
            <div class="v-cc-av" id="v-agent-av">AI</div>
            <div class="v-cc-info">
              <h4 id="v-agent-name">HelloBotz Agent — "Aria"</h4>
              <p><span class="v-badge-dot"></span> <span id="v-scenario-tag">Real Estate Inbound · Hindi + English</span></p>
            </div>
            <div class="v-cc-timer" id="v-call-timer">01:24</div>
          </div>

          <!-- Waveform visualizer -->
          <div class="v-wave-container">
            <div class="v-wave" id="v-waveform" aria-label="Audio Waveform Visualizer">
              <i style="animation-delay:0s"></i>
              <i style="animation-delay:.12s"></i>
              <i style="animation-delay:.25s"></i>
              <i style="animation-delay:.35s"></i>
              <i style="animation-delay:.18s"></i>
              <i style="animation-delay:.05s"></i>
              <i style="animation-delay:.28s"></i>
              <i style="animation-delay:.4s"></i>
              <i style="animation-delay:.15s"></i>
              <i style="animation-delay:.32s"></i>
              <i style="animation-delay:.08s"></i>
              <i style="animation-delay:.22s"></i>
              <i style="animation-delay:.38s"></i>
              <i style="animation-delay:.1s"></i>
            </div>
            <button class="v-audio-toggle" id="v-audio-btn" type="button" aria-label="Play AI Voice Call Sample">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"/></svg>
              <span>Play Sample</span>
            </button>
          </div>

          <!-- Transcript -->
          <div class="v-transcript" id="v-transcript-box">
            <div class="v-msg ai" data-idx="0" title="Click to hear this line">
              <span class="v-who">AI</span>
              <p id="v-msg-1">Namaste! Main Aria bol rahi hoon HelloBotz Real Estate se. Kya aap 3 BHK luxury flats dekh rahe the?</p>
            </div>
            <div class="v-msg user" data-idx="1" title="Click to hear this line">
              <span class="v-who">YOU</span>
              <p id="v-msg-2">Haan, kal sham 4 baje sample flat visit ka slot mil jayega?</p>
            </div>
            <div class="v-msg ai" data-idx="2" title="Click to hear this line">
              <span class="v-who">AI</span>
              <p id="v-msg-3">Bilkul! Kal sham 4:00 PM confirm kar diya. Location &amp; gate pass WhatsApp par bhej diya hai ✅</p>
            </div>
          </div>

          <div class="v-cc-foot">
            <span class="v-chip on" id="v-status-connected"><span class="v-chip-dot">●</span> Live Connected</span>
            <span class="v-chip" id="v-latency-tag">Latency 320ms</span>
            <span class="v-chip" id="v-sentiment-tag">Sentiment: High Intent 😊</span>
            <span class="v-chip" id="v-wa-sent-tag">Auto WhatsApp Sent</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =====================================================================
       INTERACTIVE ROI / COST SAVINGS CALCULATOR
       ===================================================================== -->
  <section class="v-section" id="calculator">
    <div class="v-container">
      <div class="v-sec-head v-reveal">
        <span class="v-badge">ROI &amp; Cost Calculator</span>
        <h2>Kitna Save Karega Aapka <span class="v-grad-txt">Business?</span></h2>
        <p>Compare standard call center telecalling overheads against HelloBotz Autonomous Voice AI agents.</p>
      </div>

      <div class="v-roi-card v-reveal">
        <div class="v-roi-grid">
          <div>
            <h3 style="font-size:1.35rem;font-weight:800;color:var(--voice-t);margin-bottom:0.5rem;">
              Daily Voice Call Volume
            </h3>
            <p style="color:var(--voice-t2);font-size:0.92rem;margin-bottom:1.5rem;">
              Adjust the slider to simulate your current customer inquiry or outreach volume:
            </p>

            <div class="v-calc-slider-box">
              <div class="v-calc-slider-label">
                <span>Daily Calls Handled:</span>
                <span class="v-calc-slider-val" id="v-slider-display">300 Calls / Day</span>
              </div>
              <input type="range" class="v-range-slider" id="v-call-slider" min="50" max="3000" step="50" value="300">
              <div style="display:flex;justify-content:space-between;color:var(--voice-t3);font-size:0.75rem;margin-top:0.4rem;">
                <span>50 calls/day</span>
                <span>1,500 calls/day</span>
                <span>3,000+ calls/day</span>
              </div>
            </div>

            <div style="display:flex;gap:0.6rem;flex-wrap:wrap;margin-top:1.5rem;">
              <span class="v-badge" style="background:var(--voice-bg3);color:var(--voice-t2);border-color:var(--voice-bd);">⚡ Zero Infrastructure Cost</span>
              <span class="v-badge" style="background:var(--voice-bg3);color:var(--voice-t2);border-color:var(--voice-bd);">🚀 100% Concurrent Answering</span>
            </div>
          </div>

          <div class="v-roi-results">
            <div class="v-roi-row">
              <span style="color:var(--voice-t2);font-size:0.9rem;">Traditional Telecallers:</span>
              <span class="v-roi-val-strike" id="v-cost-manual">₹45,000 / mo</span>
            </div>
            <div class="v-roi-row">
              <span style="color:var(--voice-t2);font-size:0.9rem;">HelloBotz AI Voice:</span>
              <span style="font-weight:800;color:var(--voice-p2);font-size:1.15rem;" id="v-cost-ai">₹7,500 / mo</span>
            </div>
            <div class="v-roi-row">
              <div>
                <strong style="color:var(--voice-t);display:block;font-size:1rem;">Net Monthly Savings:</strong>
                <small style="color:var(--voice-g);font-weight:700;">83% Lower Cost</small>
              </div>
              <span class="v-roi-val-save" id="v-cost-savings">₹37,500</span>
            </div>
            <a href="<?php echo $bp; ?>#contact-section" class="v-btn v-btn-primary" style="width:100%;margin-top:1.25rem;border-radius:var(--voice-r);">
              Claim Your Cost Savings Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =====================================================================
       FEATURES
       ===================================================================== -->
  <section class="v-section v-section-alt" id="features">
    <div class="v-container">
      <div class="v-sec-head v-reveal">
        <span class="v-badge">Enterprise Capabilities</span>
        <h2>Sab Kuch Jo Aapko <span class="v-grad-txt">Chahiye</span></h2>
        <p>Enterprise-grade voice AI natively integrated directly into your omnichannel inbox.</p>
      </div>

      <div class="v-feat-grid">
        <div class="v-feat v-reveal">
          <div class="v-icon-box v-icon-p">📥</div>
          <h4>Inbound Call Handling</h4>
          <p>Instant call pickup with auto-receptionist, intelligent IVR, contextual FAQ answering, and zero customer wait time.</p>
        </div>
        <div class="v-feat v-reveal">
          <div class="v-icon-box v-icon-a">📤</div>
          <h4>Outbound Calling Campaigns</h4>
          <p>Launch parallel voice campaigns to thousands of leads for sales qualification, appointment reminders, and follow-ups.</p>
        </div>
        <div class="v-feat v-reveal">
          <div class="v-icon-box v-icon-pink">🤖</div>
          <h4>Custom AI Persona &amp; Voice</h4>
          <p>Train the AI on your brand guidelines, product catalogs, objection handling scripts, and preferred tone of voice.</p>
        </div>
        <div class="v-feat v-reveal">
          <div class="v-icon-box v-icon-g">🌐</div>
          <h4>Multi-Language &amp; Hinglish</h4>
          <p>Natural bilingual fluency in Hindi, English, Hinglish, Marathi, Tamil, Telugu, and 10+ regional Indian languages.</p>
        </div>
        <div class="v-feat v-reveal">
          <div class="v-icon-box v-icon-p">📊</div>
          <h4>Live Audio Transcripts &amp; Sentiment</h4>
          <p>Every call recording, word-by-word transcript, speaker diarization, and emotion score logged automatically in real time.</p>
        </div>
        <div class="v-feat v-reveal">
          <div class="v-icon-box v-icon-a">🔗</div>
          <h4>Unified Omnichannel Inbox</h4>
          <p>Voice calls sit seamlessly alongside WhatsApp, Instagram, and SMS conversations in one shared customer profile.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- =====================================================================
       HOW IT WORKS (4 STEPS)
       ===================================================================== -->
  <section class="v-section" id="how">
    <div class="v-container">
      <div class="v-sec-head v-reveal">
        <span class="v-badge">Deployment Workflow</span>
        <h2>4 Steps Me <span class="v-grad-txt">Live</span> Ho Jayiye</h2>
        <p>No complex telecom hardware. Zero coding. Go live in under 15 minutes.</p>
      </div>

      <div class="v-steps">
        <div class="v-step v-reveal">
          <div class="v-step-num">01</div>
          <h4>Connect Number</h4>
          <p>Bring your existing business phone number or get a dedicated cloud virtual number in 1 click.</p>
        </div>
        <div class="v-step v-reveal">
          <div class="v-step-num">02</div>
          <h4>Train Your Agent</h4>
          <p>Upload your website link, PDFs, FAQs and sample dialogues. The voice agent trains in seconds.</p>
        </div>
        <div class="v-step v-reveal">
          <div class="v-step-num">03</div>
          <h4>Go Live</h4>
          <p>Activate inbound answering and outbound campaign triggers from your HelloBotz dashboard.</p>
        </div>
        <div class="v-step v-reveal">
          <div class="v-step-num">04</div>
          <h4>Track &amp; Scale</h4>
          <p>Monitor real-time call performance, conversation recordings, and qualification rates in your inbox.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- =====================================================================
       USE CASES / INDUSTRIES
       ===================================================================== -->
  <section class="v-section v-section-alt">
    <div class="v-container">
      <div class="v-sec-head v-reveal">
        <span class="v-badge">Industry Use Cases</span>
        <h2>Har Industry Ke Liye <span class="v-grad-txt">Tailored Solutions</span></h2>
        <p>Discover how high-growth businesses replace manual calling queues with HelloBotz Voice Agents.</p>
      </div>

      <div class="v-ind-grid">
        <div class="v-ind v-reveal" onclick="switchScenario('real-estate')">
          <span>🏠</span>
          <p>Real Estate</p>
        </div>
        <div class="v-ind v-reveal" onclick="switchScenario('healthcare')">
          <span>🏥</span>
          <p>Healthcare</p>
        </div>
        <div class="v-ind v-reveal" onclick="switchScenario('ecommerce')">
          <span>🛒</span>
          <p>E-commerce</p>
        </div>
        <div class="v-ind v-reveal" onclick="switchScenario('bfsi')">
          <span>💳</span>
          <p>Fintech &amp; BFSI</p>
        </div>
        <div class="v-ind v-reveal" onclick="switchScenario('real-estate')">
          <span>🎓</span>
          <p>EdTech</p>
        </div>
        <div class="v-ind v-reveal" onclick="switchScenario('ecommerce')">
          <span>🚚</span>
          <p>Logistics</p>
        </div>
      </div>
    </div>
  </section>

  <!-- =====================================================================
       PERFORMANCE STATS
       ===================================================================== -->
  <section class="v-section-sm">
    <div class="v-container">
      <div class="v-stats-row v-reveal">
        <div class="v-stat">
          <h3><span class="v-count" data-to="5">0</span>M+</h3>
          <p>Voice Calls Automated</p>
        </div>
        <div class="v-stat">
          <h3><span class="v-count" data-to="98">0</span>%</h3>
          <p>First Call Answer Rate</p>
        </div>
        <div class="v-stat">
          <h3><span class="v-count" data-to="60">0</span>%</h3>
          <p>Average Cost Reduction</p>
        </div>
        <div class="v-stat">
          <h3>24/7/365</h3>
          <p>Continuous AI Availability</p>
        </div>
      </div>
    </div>
  </section>

  <!-- =====================================================================
       TESTIMONIALS
       ===================================================================== -->
  <section class="v-section v-section-alt">
    <div class="v-container">
      <div class="v-sec-head v-reveal">
        <span class="v-badge">Client Reviews</span>
        <h2>Businesses <span class="v-grad-txt">Love</span> HelloBotz Voice</h2>
        <p>Real experiences from revenue teams who scaled calling operations with voice AI.</p>
      </div>

      <div class="v-tst-grid">
        <div class="v-tst v-reveal">
          <div class="stars">★★★★★</div>
          <p>"Pehle 40% calls miss ho jaate the peak hours me. Ab HelloBotz 100% inquiries instantly pick karta hai — lead conversion 2.4x badh gaya!"</p>
          <div class="v-tst-who">
            <div class="v-tst-av" style="background:linear-gradient(135deg,#8B5CF6,#6D28D9)">RS</div>
            <div>
              <h5>Rahul Sharma</h5>
              <small>Founder, PropEdge Realty</small>
            </div>
          </div>
        </div>

        <div class="v-tst v-reveal">
          <div class="stars">★★★★★</div>
          <p>"Outbound campaigns ne humara lead qualification time 70% kam kar diya. AI agent Hindi & Hinglish me fluently baat karta hai — patients are delighted."</p>
          <div class="v-tst-who">
            <div class="v-tst-av" style="background:linear-gradient(135deg,#06B6D4,#0284C7)">AK</div>
            <div>
              <h5>Dr. Anjali Kapoor</h5>
              <small>Head of Patient Care, MediCare+</small>
            </div>
          </div>
        </div>

        <div class="v-tst v-reveal">
          <div class="stars">★★★★★</div>
          <p>"COD verification calls automate karne se humara RTO rate 32% se drop hoke 14% par aa gaya. HelloBotz has paid for itself 10x over."</p>
          <div class="v-tst-who">
            <div class="v-tst-av" style="background:linear-gradient(135deg,#DB2777,#9D174D)">MP</div>
            <div>
              <h5>Manish Patel</h5>
              <small>COO, ShopKart India</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =====================================================================
       FAQ
       ===================================================================== -->
  <section class="v-section">
    <div class="v-container">
      <div class="v-sec-head v-reveal">
        <span class="v-badge">Frequently Asked Questions</span>
        <h2>Common <span class="v-grad-txt">Questions</span></h2>
        <p>Everything you need to know about setting up and deploying AI Voice Call agents.</p>
      </div>

      <div class="v-faq-list">
        <div class="v-faq v-reveal">
          <button class="v-faq-q" type="button">
            Kya AI agent Hindi aur regional languages me baat kar sakta hai?
            <span class="plus">+</span>
          </button>
          <div class="v-faq-a">
            <p>Haan! HelloBotz AI Voice Agents Hindi, English, Hinglish, Marathi, Gujarati, Tamil, Telugu, Kannada, Bengali aur 10+ Indian languages support karte hain. Agent customer ki boli samajh kar naturally switch kar sakta hai.</p>
          </div>
        </div>

        <div class="v-faq v-reveal">
          <button class="v-faq-q" type="button">
            Setup karne me kitna time lagta hai?
            <span class="plus">+</span>
          </button>
          <div class="v-faq-a">
            <p>Basic setup 10–15 minute ka hai. Aap apna virtual number connect karo, FAQs upload karo, aur agent live test karo. Custom API integrations aur complex ERP webhooks ke liye hamari dedicated engineering team 24 hours me onboarding complete karti hai.</p>
          </div>
        </div>

        <div class="v-faq v-reveal">
          <button class="v-faq-q" type="button">
            Kya hum apna existing business phone number use kar sakte hain?
            <span class="plus">+</span>
          </button>
          <div class="v-faq-a">
            <p>Bilkul! Aap apne existing business phone number par call forwarding activate kar sakte hain, ya HelloBotz se verified national virtual DID number le sakte hain with crystal-clear call quality.</p>
          </div>
        </div>

        <div class="v-faq v-reveal">
          <button class="v-faq-q" type="button">
            Call ke baad kya customer ko WhatsApp message bhej sakte hain?
            <span class="plus">+</span>
          </button>
          <div class="v-faq-a">
            <p>Haan! HelloBotz ka omnichannel engine call khatam hote hi automated WhatsApp confirmation, catalog links, payment invoices ya meeting invites send karta hai.</p>
          </div>
        </div>

        <div class="v-faq v-reveal">
          <button class="v-faq-q" type="button">
            Data security aur voice recording compliance ka kya standard hai?
            <span class="plus">+</span>
          </button>
          <div class="v-faq-a">
            <p>Aapka complete customer audio aur transcript data enterprise-grade AES-256 bit encryption ke saath secure cloud servers par host hota hai. HelloBotz strictly ISO/IEC 27001, GDPR aur Indian DPDP Act standards comply karta hai.</p>
          </div>
        </div>

        <div class="v-faq v-reveal">
          <button class="v-faq-q" type="button">
            Kya free trial ya guided live demo available hai?
            <span class="plus">+</span>
          </button>
          <div class="v-faq-a">
            <p>Haan! Aap hamare lead generation form par submit karke live 1-on-1 personalized test call demo schedule kar sakte hain. No upfront payment required.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =====================================================================
       HIGH-CONVERTING CTA
       ===================================================================== -->
  <section class="v-section" id="cta">
    <div class="v-container">
      <div class="v-cta-box v-reveal">
        <span class="v-badge" style="background:rgba(255,255,255,.2);color:#FFFFFF;border:1px solid rgba(255,255,255,.35);">
          Ready to Scale
        </span>
        <h2>AI Voice Call Channel Activate Karein</h2>
        <p>Apne business me 24/7 autonomous phone agents deploy karke har customer inquiry ko instant revenue me convert karein.</p>
        <div class="v-cta-btns">
          <a href="#contact-section" class="v-btn v-btn-white v-btn-lg">
            Connect AI Voice Channel 🚀
          </a>
          <a href="#contact-section" class="v-btn v-btn-leads v-btn-lg">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified
          </a>
          <a href="#contact-section" class="v-btn v-btn-outline-white v-btn-lg">
            📞 Book a Live Demo Call
          </a>
        </div>
        <p class="v-cta-note">✅ 10-Minute Setup · ✅ Zero Hardware Needed · ✅ Hindi &amp; Hinglish Fluency · ✅ 24/7 Dedicated Support</p>
      </div>
    </div>
  </section>
</div>

<script>
(function() {
  /* ========== SCROLL REVEAL ========== */
  var reveals = document.querySelectorAll('.v-reveal');
  if ('IntersectionObserver' in window) {
    var revealObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry, i) {
        if (entry.isIntersecting) {
          setTimeout(function() {
            entry.target.classList.add('in');
          }, i * 60);
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    reveals.forEach(function(el) { revealObserver.observe(el); });
  } else {
    reveals.forEach(function(el) { el.classList.add('in'); });
  }

  /* ========== NUMBER COUNTERS ========== */
  var counters = document.querySelectorAll('.v-count');
  if ('IntersectionObserver' in window) {
    var countObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (!entry.isIntersecting) return;
        var el = entry.target;
        var target = parseInt(el.getAttribute('data-to'), 10) || 0;
        var cur = 0;
        var step = Math.max(1, Math.ceil(target / 35));
        var timer = setInterval(function() {
          cur += step;
          if (cur >= target) {
            el.textContent = target;
            clearInterval(timer);
          } else {
            el.textContent = cur;
          }
        }, 30);
        countObserver.unobserve(el);
      });
    }, { threshold: 0.5 });
    counters.forEach(function(c) { countObserver.observe(c); });
  }

  /* ========== FAQ ACCORDION ========== */
  var faqs = document.querySelectorAll('.v-faq');
  faqs.forEach(function(faq) {
    var q = faq.querySelector('.v-faq-q');
    var a = faq.querySelector('.v-faq-a');
    q.addEventListener('click', function() {
      var isOpen = faq.classList.contains('open');
      faqs.forEach(function(f) {
        f.classList.remove('open');
        var ans = f.querySelector('.v-faq-a');
        if (ans) ans.style.maxHeight = null;
      });
      if (!isOpen) {
        faq.classList.add('open');
        a.style.maxHeight = a.scrollHeight + 'px';
      }
    });
  });

  /* ========== AUDIO CONTEXT & SOUND EFFECTS ========== */
  var audioCtx = null;
  function getAudioCtx() {
    if (!audioCtx) {
      var AC = window.AudioContext || window.webkitAudioContext;
      if (AC) audioCtx = new AC();
    }
    if (audioCtx && audioCtx.state === 'suspended') {
      audioCtx.resume();
    }
    return audioCtx;
  }

  // Telephony connect chime: pleasant dual sine tone (C5 + E5)
  function playConnectChime(onComplete) {
    try {
      var ctx = getAudioCtx();
      if (!ctx) { if (onComplete) onComplete(); return; }
      var t = ctx.currentTime;
      var o1 = ctx.createOscillator();
      var g1 = ctx.createGain();
      o1.type = 'sine';
      o1.frequency.setValueAtTime(523.25, t);
      g1.gain.setValueAtTime(0.001, t);
      g1.gain.linearRampToValueAtTime(0.08, t + 0.04);
      g1.gain.exponentialRampToValueAtTime(0.001, t + 0.3);
      o1.connect(g1); g1.connect(ctx.destination);
      o1.start(t); o1.stop(t + 0.3);

      var o2 = ctx.createOscillator();
      var g2 = ctx.createGain();
      o2.type = 'sine';
      o2.frequency.setValueAtTime(659.25, t + 0.1);
      g2.gain.setValueAtTime(0.001, t + 0.1);
      g2.gain.linearRampToValueAtTime(0.09, t + 0.14);
      g2.gain.exponentialRampToValueAtTime(0.001, t + 0.42);
      o2.connect(g2); g2.connect(ctx.destination);
      o2.start(t + 0.1); o2.stop(t + 0.42);

      setTimeout(function() {
        if (onComplete) onComplete();
      }, 450);
    } catch (e) {
      if (onComplete) onComplete();
    }
  }

  // WhatsApp delivery notification chime (double melodic bell ding)
  function playWhatsAppChime() {
    try {
      var ctx = getAudioCtx();
      if (!ctx) return;
      var t = ctx.currentTime;
      var o1 = ctx.createOscillator();
      var g1 = ctx.createGain();
      o1.type = 'sine';
      o1.frequency.setValueAtTime(1318.5, t); // E6
      g1.gain.setValueAtTime(0.001, t);
      g1.gain.linearRampToValueAtTime(0.12, t + 0.02);
      g1.gain.exponentialRampToValueAtTime(0.001, t + 0.28);
      o1.connect(g1); g1.connect(ctx.destination);
      o1.start(t); o1.stop(t + 0.28);

      var o2 = ctx.createOscillator();
      var g2 = ctx.createGain();
      o2.type = 'sine';
      o2.frequency.setValueAtTime(1760, t + 0.12); // A6
      g2.gain.setValueAtTime(0.001, t + 0.12);
      g2.gain.linearRampToValueAtTime(0.14, t + 0.14);
      g2.gain.exponentialRampToValueAtTime(0.001, t + 0.55);
      o2.connect(g2); g2.connect(ctx.destination);
      o2.start(t + 0.12); o2.stop(t + 0.55);
    } catch (e) {}
  }

  // Call completion chime (gentle double tone)
  function playEndCallChime() {
    try {
      var ctx = getAudioCtx();
      if (!ctx) return;
      var t = ctx.currentTime;
      var o = ctx.createOscillator();
      var g = ctx.createGain();
      o.type = 'sine';
      o.frequency.setValueAtTime(587.33, t); // D5
      o.frequency.setValueAtTime(440, t + 0.12); // A4
      g.gain.setValueAtTime(0.05, t);
      g.gain.exponentialRampToValueAtTime(0.001, t + 0.35);
      o.connect(g); g.connect(ctx.destination);
      o.start(t); o.stop(t + 0.35);
    } catch(e) {}
  }

  // Fallback vocal-formant audio synthesis (if speechSynthesis unavailable/empty)
  function playFormantSpeech(text, isFemale, onEnd) {
    try {
      var ctx = getAudioCtx();
      if (!ctx) { setTimeout(onEnd, 1400); return; }
      var words = text.split(/\s+/).length;
      var wordDuration = 0.22;
      var totalTime = Math.max(1.2, words * wordDuration);
      var now = ctx.currentTime;
      
      var baseFreq = isFemale ? 210 : 130;
      var f1 = isFemale ? 540 : 380;

      var osc = ctx.createOscillator();
      osc.type = 'triangle';
      osc.frequency.setValueAtTime(baseFreq, now);

      for (var i = 0; i < words; i++) {
        var t = now + i * wordDuration;
        var pMod = (i % 2 === 0 ? 1.06 : 0.94);
        osc.frequency.linearRampToValueAtTime(baseFreq * pMod, t + 0.08);
      }

      var filter = ctx.createBiquadFilter();
      filter.type = 'bandpass';
      filter.frequency.setValueAtTime(f1, now);
      filter.Q.setValueAtTime(3.5, now);

      var gain = ctx.createGain();
      gain.gain.setValueAtTime(0.001, now);
      gain.gain.linearRampToValueAtTime(0.06, now + 0.04);
      for (var j = 0; j < words; j++) {
        var wt = now + j * wordDuration;
        gain.gain.setValueAtTime(0.06, wt);
        gain.gain.linearRampToValueAtTime(0.02, wt + wordDuration * 0.7);
      }
      gain.gain.linearRampToValueAtTime(0.0001, now + totalTime);

      osc.connect(filter);
      filter.connect(gain);
      gain.connect(ctx.destination);

      osc.start(now);
      osc.stop(now + totalTime);

      setTimeout(function() {
        if (onEnd) onEnd();
      }, totalTime * 1000);
    } catch(e) {
      setTimeout(onEnd, 1400);
    }
  }

  /* ========== SPEECH SYNTHESIS VOICE RESOLVER ========== */
  var cachedVoices = [];
  function loadVoices() {
    if ('speechSynthesis' in window) {
      cachedVoices = window.speechSynthesis.getVoices();
    }
  }
  if ('speechSynthesis' in window) {
    loadVoices();
    window.speechSynthesis.onvoiceschanged = loadVoices;
  }

  function getBestVoice(gender) {
    if (!cachedVoices || cachedVoices.length === 0) loadVoices();
    if (!cachedVoices || cachedVoices.length === 0) return null;

    // 1. Indian English / Hindi voices
    var indianVoices = cachedVoices.filter(function(v) {
      var lang = (v.lang || '').toLowerCase();
      var name = (v.name || '').toLowerCase();
      return lang.includes('in') || lang.includes('hi') || name.includes('india') || name.includes('hindi') || name.includes('veena') || name.includes('lekha') || name.includes('rishi') || name.includes('neerja');
    });

    if (indianVoices.length > 0) {
      if (gender === 'female') {
        var f = indianVoices.find(function(v) {
          var n = v.name.toLowerCase();
          return n.includes('female') || n.includes('veena') || n.includes('lekha') || n.includes('neerja') || n.includes('kiran');
        });
        if (f) return f;
      } else {
        var m = indianVoices.find(function(v) {
          var n = v.name.toLowerCase();
          return n.includes('male') || n.includes('rishi') || n.includes('karan') || n.includes('madhav');
        });
        if (m) return m;
      }
      return indianVoices[0];
    }

    // 2. High-quality natural English voices
    if (gender === 'female') {
      var fEng = cachedVoices.find(function(v) {
        var n = v.name.toLowerCase();
        var l = v.lang.toLowerCase();
        return l.startsWith('en') && (n.includes('female') || n.includes('samantha') || n.includes('karen') || n.includes('moira') || n.includes('zira') || n.includes('google'));
      });
      if (fEng) return fEng;
    } else {
      var mEng = cachedVoices.find(function(v) {
        var n = v.name.toLowerCase();
        var l = v.lang.toLowerCase();
        return l.startsWith('en') && (n.includes('male') || n.includes('daniel') || n.includes('david') || n.includes('george') || n.includes('alex'));
      });
      if (mEng) return mEng;
    }

    return cachedVoices.find(function(v) { return (v.lang || '').toLowerCase().startsWith('en'); }) || cachedVoices[0];
  }

  /* ========== SCENARIOS DATA ========== */
  var scenarios = {
    'real-estate': {
      agent: 'HelloBotz Agent — "Aria"',
      tag: 'Real Estate Inbound · Hindi + English',
      defaultTimer: '01:24',
      sentiment: 'Sentiment: High Intent 😊',
      persona: 'real-estate',
      isFemale: true,
      messages: [
        { who: 'AI', text: 'Namaste! Main Aria bol rahi hoon HelloBotz Real Estate se. Kya aap 3 BHK luxury flats dekh rahe the?' },
        { who: 'YOU', text: 'Haan, kal sham 4 baje sample flat visit ka slot mil jayega?' },
        { who: 'AI', text: 'Bilkul! Kal sham 4:00 PM confirm kar diya. Location & gate pass WhatsApp par bhej diya hai ✅', triggerWA: true }
      ]
    },
    'ecommerce': {
      agent: 'HelloBotz Agent — "Rohan"',
      tag: 'COD Order Verification · Instant Call',
      defaultTimer: '00:48',
      sentiment: 'Sentiment: Order Confirmed 📦',
      persona: 'ecommerce',
      isFemale: false,
      messages: [
        { who: 'AI', text: 'Namaste Mr. Verma! Aapka ₹2,499 ka Sneaker order received hua hai. Kya aap is order ko confirm karte hain?' },
        { who: 'YOU', text: 'Haan ji, confirm hai. Kab tak deliver hoga?' },
        { who: 'AI', text: 'Order confirmed! Friday tak delivery ho jayegi. Live tracking link WhatsApp par bhej diya hai ✅', triggerWA: true }
      ]
    },
    'healthcare': {
      agent: 'HelloBotz Agent — "Dr. Assistant"',
      tag: 'Clinic Appointment · Auto Scheduler',
      defaultTimer: '01:05',
      sentiment: 'Sentiment: Appointment Booked 🩺',
      persona: 'healthcare',
      isFemale: true,
      messages: [
        { who: 'AI', text: 'Hello! MediCare Clinic me swagat hai. Kya aap doctor consultation book karna chahte hain?' },
        { who: 'YOU', text: 'Haan, Dr. Gupta se kal morning consultation mil sakta hai?' },
        { who: 'AI', text: 'Dr. Gupta ke paas kal 11:30 AM ka slot available hai. Booking confirm kar di hai, WhatsApp reminder set ✅', triggerWA: true }
      ]
    },
    'bfsi': {
      agent: 'HelloBotz Agent — "Pooja"',
      tag: 'Payment Reminder & Instant Link',
      defaultTimer: '00:52',
      sentiment: 'Sentiment: Payment Link Sent 💳',
      persona: 'bfsi',
      isFemale: true,
      messages: [
        { who: 'AI', text: 'Namaste Rahul ji! Aapki EMI due date kal hai. Kya main instant UPI payment link WhatsApp kar doon?' },
        { who: 'YOU', text: 'Haan please, WhatsApp par bhej dijiye main abhi pay kar deta hoon.' },
        { who: 'AI', text: 'Link bhej diya hai! Payment hote hi digital receipt automatically generate ho jayegi. Dhanyawad ✅', triggerWA: true }
      ]
    }
  };

  var currentScenarioKey = 'real-estate';
  var isPlaying = false;
  var currentStep = -1;
  var timerInterval = null;
  var elapsedSeconds = 0;
  var stepTimeout = null;

  var audioBtn = document.getElementById('v-audio-btn');
  var waveform = document.getElementById('v-waveform');
  var callTimerEl = document.getElementById('v-call-timer');
  var waSentTag = document.getElementById('v-wa-sent-tag');
  var statusConnectedTag = document.getElementById('v-status-connected');

  function setWaveformActive(active) {
    if (!waveform) return;
    if (active) {
      waveform.classList.add('speaking');
    } else {
      waveform.classList.remove('speaking');
    }
  }

  function startLiveTimer() {
    clearInterval(timerInterval);
    elapsedSeconds = 0;
    if (callTimerEl) callTimerEl.textContent = '00:00';
    timerInterval = setInterval(function() {
      elapsedSeconds++;
      var m = String(Math.floor(elapsedSeconds / 60)).padStart(2, '0');
      var s = String(elapsedSeconds % 60).padStart(2, '0');
      if (callTimerEl) callTimerEl.textContent = m + ':' + s;
    }, 1000);
  }

  function stopLiveTimer() {
    clearInterval(timerInterval);
  }

  function renderTranscript(messages) {
    var box = document.getElementById('v-transcript-box');
    if (!box) return;
    box.innerHTML = '';
    messages.forEach(function(m, idx) {
      var div = document.createElement('div');
      div.className = 'v-msg ' + (m.who === 'AI' ? 'ai' : 'user');
      div.setAttribute('data-idx', idx);
      div.setAttribute('title', 'Click to hear this line');
      div.innerHTML = '<span class="v-who">' + m.who + '</span><p id="v-msg-' + (idx + 1) + '">' + m.text + '</p>';
      
      div.addEventListener('click', function() {
        playSingleLine(idx);
      });
      box.appendChild(div);
    });
  }

  function highlightLine(idx) {
    var box = document.getElementById('v-transcript-box');
    if (!box) return;
    var lines = box.querySelectorAll('.v-msg');
    lines.forEach(function(el, i) {
      if (i === idx) {
        el.classList.add('active-speaking');
      } else {
        el.classList.remove('active-speaking');
      }
    });
  }

  function clearHighlight() {
    var box = document.getElementById('v-transcript-box');
    if (!box) return;
    box.querySelectorAll('.v-msg').forEach(function(el) {
      el.classList.remove('active-speaking');
    });
  }

  function setButtonState(state) {
    if (!audioBtn) return;
    if (state === 'playing') {
      audioBtn.classList.add('is-playing');
      audioBtn.innerHTML = '<svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><rect x="6" y="4" width="4" height="16"/><rect x="14" y="4" width="4" height="16"/></svg><span>Pause</span>';
    } else if (state === 'replay') {
      audioBtn.classList.remove('is-playing');
      audioBtn.innerHTML = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><polyline points="3 3 3 8 8 8"/></svg><span>Replay Call</span>';
    } else {
      audioBtn.classList.remove('is-playing');
      audioBtn.innerHTML = '<svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"/></svg><span>Play Sample</span>';
    }
  }

  function speakLine(messageObj, scenarioObj, onLineEnd) {
    var isAI = (messageObj.who === 'AI');
    var isFemale = isAI ? scenarioObj.isFemale : false; // Customer caller has distinct lower/male tone

    // Trigger WhatsApp notification sound when AI announces WhatsApp sent
    if (messageObj.triggerWA) {
      setTimeout(function() {
        playWhatsAppChime();
        if (waSentTag) {
          waSentTag.classList.add('on');
          waSentTag.textContent = 'Auto WhatsApp Sent ✅';
        }
      }, 1200);
    }

    setWaveformActive(true);

    if ('speechSynthesis' in window) {
      window.speechSynthesis.cancel();
      var utt = new SpeechSynthesisUtterance(messageObj.text);
      var v = getBestVoice(isFemale ? 'female' : 'male');
      if (v) {
        utt.voice = v;
        utt.lang = v.lang || (v.lang.includes('hi') ? 'hi-IN' : 'en-IN');
      }

      if (isAI) {
        utt.pitch = isFemale ? 1.05 : 0.95;
        utt.rate = 0.96;
      } else {
        utt.pitch = 0.88;
        utt.rate = 1.0;
      }

      var ended = false;
      utt.onend = function() {
        if (!ended) {
          ended = true;
          setWaveformActive(false);
          if (onLineEnd) onLineEnd();
        }
      };
      utt.onerror = function() {
        if (!ended) {
          ended = true;
          setWaveformActive(false);
          playFormantSpeech(messageObj.text, isFemale, onLineEnd);
        }
      };

      // Safeguard for browsers where onend doesn't fire
      var wordCount = messageObj.text.split(/\s+/).length;
      var safetyMs = Math.max(3000, (wordCount * 550) + 2000);
      setTimeout(function() {
        if (!ended && isPlaying) {
          ended = true;
          setWaveformActive(false);
          if (onLineEnd) onLineEnd();
        }
      }, safetyMs);

      window.speechSynthesis.speak(utt);
    } else {
      playFormantSpeech(messageObj.text, isFemale, function() {
        setWaveformActive(false);
        if (onLineEnd) onLineEnd();
      });
    }
  }

  function stopAllAudio() {
    isPlaying = false;
    currentStep = -1;
    clearTimeout(stepTimeout);
    if ('speechSynthesis' in window) {
      window.speechSynthesis.cancel();
    }
    stopLiveTimer();
    setWaveformActive(false);
    clearHighlight();
    setButtonState('idle');
  }

  function playStep(stepIdx) {
    if (!isPlaying) return;
    var scen = scenarios[currentScenarioKey];
    if (!scen || !scen.messages || stepIdx >= scen.messages.length) {
      // Call finished
      stopLiveTimer();
      setWaveformActive(false);
      clearHighlight();
      playEndCallChime();
      if (statusConnectedTag) {
        statusConnectedTag.innerHTML = '<span class="v-chip-dot">●</span> Call Completed';
      }
      setButtonState('replay');
      isPlaying = false;
      currentStep = -1;
      return;
    }

    currentStep = stepIdx;
    highlightLine(stepIdx);

    speakLine(scen.messages[stepIdx], scen, function() {
      if (!isPlaying) return;
      clearHighlight();
      // Natural conversational breath pause between turns
      stepTimeout = setTimeout(function() {
        if (isPlaying) {
          playStep(stepIdx + 1);
        }
      }, 450);
    });
  }

  function startFullCall() {
    stopAllAudio();
    isPlaying = true;
    setButtonState('playing');

    if (waSentTag) {
      waSentTag.classList.remove('on');
      waSentTag.textContent = 'Auto WhatsApp Sent';
    }
    if (statusConnectedTag) {
      statusConnectedTag.classList.add('on');
      statusConnectedTag.innerHTML = '<span class="v-chip-dot">●</span> Live Connected';
    }

    startLiveTimer();

    // Play telecom connect chime first, then dialogue
    playConnectChime(function() {
      if (isPlaying) {
        playStep(0);
      }
    });
  }

  function playSingleLine(idx) {
    var scen = scenarios[currentScenarioKey];
    if (!scen || !scen.messages[idx]) return;

    stopAllAudio();
    isPlaying = true;
    setButtonState('playing');
    highlightLine(idx);

    speakLine(scen.messages[idx], scen, function() {
      clearHighlight();
      setWaveformActive(false);
      setButtonState('idle');
      isPlaying = false;
    });
  }

  // Button toggle
  if (audioBtn) {
    audioBtn.addEventListener('click', function() {
      if (isPlaying) {
        stopAllAudio();
      } else {
        startFullCall();
      }
    });
  }

  /* ========== SCENARIOS SWITCHER ========== */
  window.switchScenario = function(key) {
    var data = scenarios[key];
    if (!data) return;

    currentScenarioKey = key;
    stopAllAudio();

    // Update scenario nav buttons
    document.querySelectorAll('.v-scen-btn').forEach(function(btn) {
      if (btn.getAttribute('data-scenario') === key) {
        btn.classList.add('active');
      } else {
        btn.classList.remove('active');
      }
    });

    // Update agent info & metrics
    var nameEl = document.getElementById('v-agent-name');
    if (nameEl) nameEl.textContent = data.agent;

    var tagEl = document.getElementById('v-scenario-tag');
    if (tagEl) tagEl.textContent = data.tag;

    var timerEl = document.getElementById('v-call-timer');
    if (timerEl) timerEl.textContent = data.defaultTimer;

    var sentEl = document.getElementById('v-sentiment-tag');
    if (sentEl) sentEl.textContent = data.sentiment;

    if (waSentTag) {
      waSentTag.classList.remove('on');
      waSentTag.textContent = 'Auto WhatsApp Sent';
    }
    if (statusConnectedTag) {
      statusConnectedTag.classList.add('on');
      statusConnectedTag.innerHTML = '<span class="v-chip-dot">●</span> Live Connected';
    }

    renderTranscript(data.messages);
    setButtonState('idle');
  };

  document.querySelectorAll('.v-scen-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var scen = this.getAttribute('data-scenario');
      switchScenario(scen);
    });
  });

  // Attach click to default rendered messages
  document.querySelectorAll('#v-transcript-box .v-msg').forEach(function(el) {
    el.addEventListener('click', function() {
      var idx = parseInt(this.getAttribute('data-idx') || '0', 10);
      playSingleLine(idx);
    });
  });

  /* ========== ROI CALCULATOR ========== */
  var slider = document.getElementById('v-call-slider');
  var sliderDisplay = document.getElementById('v-slider-display');
  var costManual = document.getElementById('v-cost-manual');
  var costAi = document.getElementById('v-cost-ai');
  var costSavings = document.getElementById('v-cost-savings');

  function updateCalculator() {
    var calls = parseInt(slider.value, 10);
    sliderDisplay.textContent = calls.toLocaleString('en-IN') + ' Calls / Day';

    // Calculation: 1 human telecaller handles ~80 calls/day, cost ₹18,000/mo
    var agentsNeeded = Math.max(1, Math.ceil(calls / 75));
    var humanCost = agentsNeeded * 18000;
    
    // AI voice costs ~ ₹0.85 per call average (₹25/day per 30 calls)
    var monthlyAiCost = Math.round(calls * 30 * 0.85);

    var netSavings = Math.max(0, humanCost - monthlyAiCost);

    costManual.textContent = '₹' + humanCost.toLocaleString('en-IN') + ' / mo';
    costAi.textContent = '₹' + monthlyAiCost.toLocaleString('en-IN') + ' / mo';
    costSavings.textContent = '₹' + netSavings.toLocaleString('en-IN');
  }

  slider.addEventListener('input', updateCalculator);
  updateCalculator();

})();
</script>

<?php
$footerContactText = "Talk to our voice engineers about activating human-like AI Voice Call agents for your business today.";
include __DIR__ . '/../../includes/footer.php';
?>
