<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Google RCS Business Messaging Channel | HelloBotz';
$pageDescription = 'Upgrade from plain SMS to Google RCS Business Messaging. Send verified interactive carousels, action buttons, videos, and rich media directly to Android message inboxes.';
$canonicalUrl = 'https://hellobotz.com/channel/rcs/';
$ogImage = 'assets/images/og-image.png';

include __DIR__ . '/../../includes/header.php';
?>

<style>
/* =====================================================================
   HELLOBOTZ RCS CHANNEL PAGE THEME
   ===================================================================== */
:root {
  --rcs-p: #1A73E8;
  --rcs-p2: #1557B0;
  --rcs-p-l: rgba(26, 115, 232, 0.1);
  --rcs-p-m: rgba(26, 115, 232, 0.25);
  --rcs-a: #34A853;
  --rcs-t: #0F172A;
  --rcs-t2: #475569;
  --rcs-t3: #64748B;
  --rcs-bg: #FFFFFF;
  --rcs-bg2: #F8FAFC;
  --rcs-bg3: #F1F5F9;
  --rcs-bd: #E2E8F0;
  --rcs-bd2: #CBD5E1;
  --rcs-sh: 0 2px 5px rgba(15,23,42,.05);
  --rcs-sh2: 0 12px 32px -6px rgba(26, 115, 232, 0.18), 0 8px 12px -6px rgba(15,23,42,.06);
  --rcs-r: 12px;
  --rcs-r2: 18px;
  --rcs-r3: 24px;
  --rcs-r4: 999px;
  --rcs-font: 'Inter', system-ui, -apple-system, sans-serif;
  --rcs-max: 1240px;
  --rcs-ease: cubic-bezier(.4,0,.2,1);
}

body.dark-theme,
[data-theme="dark"] {
  --rcs-t: #F8FAFC;
  --rcs-t2: #CBD5E1;
  --rcs-t3: #94A3B8;
  --rcs-bg: #0b1120;
  --rcs-bg2: #0f172a;
  --rcs-bg3: #1e293b;
  --rcs-bd: #1e293b;
  --rcs-bd2: #334155;
  --rcs-sh: 0 2px 6px rgba(0,0,0,.3);
  --rcs-sh2: 0 12px 32px -6px rgba(26, 115, 232, 0.22);
}

.crcs-page {
  background: var(--rcs-bg);
  color: var(--rcs-t);
  font-family: var(--rcs-font);
  overflow-x: hidden;
  width: 100%;
}
.crcs-breadcrumb {
  padding: 0.85rem 1.5rem 0.35rem;
  max-width: var(--rcs-max);
  margin: 0 auto;
  font-size: 0.85rem;
  color: var(--rcs-t3);
  display: flex;
  align-items: center;
  gap: 0.5rem;
}
.crcs-breadcrumb a { color: var(--rcs-t3); text-decoration: none; }
.crcs-breadcrumb a:hover { color: var(--rcs-p); }

.r-container {
  width: 100%;
  max-width: var(--rcs-max);
  margin: 0 auto;
  padding: 0 1.25rem;
  box-sizing: border-box;
}
.r-section { padding: 4.5rem 0; position: relative; }
.r-section-sm { padding: 2.75rem 0; }
.r-section-alt { background: var(--rcs-bg2); }

.r-sec-head {
  text-align: center;
  max-width: 740px;
  margin: 0 auto 3rem;
}
.r-sec-head h2 {
  font-size: clamp(1.6rem, 2.8vw, 2.35rem);
  font-weight: 800;
  letter-spacing: -0.025em;
  color: var(--rcs-t);
  margin-top: 0.85rem;
  line-height: 1.25;
}
.r-sec-head p {
  color: var(--rcs-t2);
  font-size: 1.05rem;
  margin-top: 0.85rem;
  line-height: 1.6;
}
.r-grad-txt {
  background: linear-gradient(135deg, #1A73E8 0%, #06B6D4 100%);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.r-badge {
  display: inline-flex;
  align-items: center;
  gap: 0.45rem;
  padding: 0.32rem 0.85rem;
  font-size: 0.75rem;
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  border-radius: var(--rcs-r4);
  background: var(--rcs-p-l);
  color: var(--rcs-p2);
  border: 1px solid var(--rcs-p-m);
}
.r-badge-dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: #34A853;
  box-shadow: 0 0 8px #34A853;
}

.r-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 0.55rem;
  padding: 0.75rem 1.45rem;
  font-size: 0.92rem;
  font-weight: 700;
  border-radius: var(--rcs-r4);
  border: 1.5px solid transparent;
  transition: all 0.22s var(--rcs-ease);
  text-decoration: none;
  cursor: pointer;
}
.r-btn-primary {
  background: linear-gradient(135deg, #1A73E8 0%, #1557B0 100%);
  color: #FFFFFF !important;
  box-shadow: 0 6px 20px rgba(26, 115, 232, 0.4);
}
.r-btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 26px rgba(26, 115, 232, 0.55);
}
.r-btn-leads {
  background: linear-gradient(135deg, #10B981 0%, #059669 100%);
  color: #FFFFFF !important;
  box-shadow: 0 6px 20px rgba(16, 185, 129, 0.35);
}
.r-btn-leads:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 26px rgba(16, 185, 129, 0.48);
}
.r-btn-outline {
  background: var(--rcs-bg);
  color: var(--rcs-t) !important;
  border-color: var(--rcs-bd2);
}
.r-btn-outline:hover {
  border-color: var(--rcs-p);
  color: var(--rcs-p2) !important;
  background: var(--rcs-p-l);
}

/* Hero */
.r-channel-hero {
  padding: 3.25rem 0 2.5rem;
  position: relative;
  overflow: hidden;
}
.r-channel-head {
  display: flex;
  align-items: center;
  gap: 1.5rem;
  flex-wrap: wrap;
  margin-bottom: 2.25rem;
}
.r-channel-avatar {
  width: 78px;
  height: 78px;
  border-radius: 22px;
  display: grid;
  place-items: center;
  background: #1A73E8;
  color: #FFFFFF;
  box-shadow: 0 12px 30px -8px rgba(26, 115, 232, 0.85);
  flex-shrink: 0;
}
.r-channel-avatar svg { width: 38px; height: 38px; }
.r-channel-meta { flex: 1; min-width: 240px; }
.r-channel-meta h1 {
  font-size: clamp(2rem, 3.8vw, 3rem);
  font-weight: 800;
  letter-spacing: -0.03em;
  color: var(--rcs-t);
  margin-bottom: 0.35rem;
  line-height: 1.15;
}
.r-channel-meta p {
  color: var(--rcs-t2);
  font-size: 1.05rem;
  line-height: 1.5;
  max-width: 620px;
}
.r-channel-actions { display: flex; gap: 0.75rem; flex-wrap: wrap; }
.r-channel-stats {
  display: flex;
  gap: 2.5rem;
  flex-wrap: wrap;
  padding-top: 1.75rem;
  border-top: 1px solid var(--rcs-bd);
}
.r-cs { display: flex; flex-direction: column; }
.r-cs b {
  font-size: 1.55rem;
  font-weight: 800;
  color: var(--rcs-p2);
  line-height: 1.2;
}
.r-cs span {
  font-size: 0.8rem;
  color: var(--rcs-t3);
  font-weight: 600;
  margin-top: 0.2rem;
}

/* Phone Simulator */
.r-overview-grid {
  display: grid;
  grid-template-columns: 1.05fr 0.95fr;
  gap: 3rem;
  align-items: center;
}
.r-phone-card {
  background: var(--rcs-bg);
  border: 1px solid var(--rcs-bd);
  border-radius: var(--rcs-r3);
  padding: 1.75rem;
  box-shadow: var(--rcs-sh2);
  max-width: 440px;
  margin: 0 auto;
}
.r-rcs-card {
  background: var(--rcs-bg2);
  border: 1px solid var(--rcs-bd);
  border-radius: var(--rcs-r2);
  overflow: hidden;
  margin-bottom: 1rem;
}
.r-rcs-img-placeholder {
  height: 140px;
  background: linear-gradient(135deg, #1A73E8 0%, #06B6D4 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #FFFFFF;
  font-weight: 800;
  font-size: 1.1rem;
}
.r-rcs-content {
  padding: 1.25rem;
}
.r-rcs-btn-group {
  display: grid;
  gap: 0.5rem;
  margin-top: 0.85rem;
}
.r-rcs-chip-btn {
  padding: 0.55rem;
  text-align: center;
  border-radius: var(--rcs-r);
  background: var(--rcs-bg);
  border: 1.5px solid var(--rcs-p);
  color: var(--rcs-p2);
  font-size: 0.85rem;
  font-weight: 700;
  cursor: pointer;
  transition: all 0.2s;
}
.r-rcs-chip-btn:hover {
  background: var(--rcs-p);
  color: #FFFFFF;
}

/* Feat Grid */
.r-feat-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.5rem;
}
.r-feat {
  padding: 1.75rem;
  border-radius: var(--rcs-r2);
  background: var(--rcs-bg);
  border: 1px solid var(--rcs-bd);
  box-shadow: var(--rcs-sh);
  transition: all 0.3s;
}
.r-feat:hover {
  transform: translateY(-5px);
  border-color: var(--rcs-p);
  box-shadow: var(--rcs-sh2);
}
.r-feat h4 {
  font-size: 1.08rem;
  font-weight: 700;
  margin: 0.85rem 0 0.45rem;
  color: var(--rcs-t);
}
.r-feat p {
  font-size: 0.88rem;
  color: var(--rcs-t2);
  line-height: 1.55;
  margin: 0;
}

/* CTA */
.r-cta-box {
  text-align: center;
  padding: 4rem 2.5rem;
  border-radius: var(--rcs-r3);
  background: linear-gradient(135deg, #1557B0 0%, #1A73E8 50%, #06B6D4 100%);
  color: #FFFFFF;
  box-shadow: 0 20px 50px rgba(21, 87, 176, 0.3);
}
.r-cta-box h2 {
  color: #FFFFFF !important;
  font-size: clamp(1.8rem, 3.2vw, 2.6rem);
  font-weight: 800;
  margin: 1rem 0;
}
.r-cta-box p {
  color: rgba(255,255,255,.9) !important;
  font-size: 1.05rem;
  max-width: 600px;
  margin: 0 auto 2rem;
}

@media (max-width: 1024px) {
  .r-overview-grid { grid-template-columns: 1fr; }
  .r-feat-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 768px) {
  .r-feat-grid { grid-template-columns: 1fr; }
  .r-channel-head { flex-direction: column; text-align: center; }
  .r-channel-actions { justify-content: center; }
  .r-channel-stats { justify-content: center; }
}
</style>

<div class="crcs-page">
  <div class="crcs-breadcrumb">
    <a href="<?php echo $bp; ?>">Home</a>
    <span>/</span>
    <a href="<?php echo $bp; ?>#channels-section">Channels</a>
    <span>/</span>
    <span style="color: var(--rcs-p2); font-weight: 600;">RCS</span>
  </div>

  <!-- Hero -->
  <section class="r-channel-hero">
    <div class="r-container">
      <div class="r-channel-head">
        <div class="r-channel-avatar">
          <svg viewBox="0 0 24 24" fill="none">
            <path d="M12 4C7.58 4 4 7.13 4 11c0 1.54.58 2.96 1.56 4.1L4.5 18.5l3.67-1.12C9.35 17.73 10.63 18 12 18c4.42 0 8-3.13 8-7s-3.58-7-8-7z" fill="#FFFFFF"/>
            <circle cx="8.5" cy="11" r="1.1" fill="#1A73E8"/>
            <circle cx="12" cy="11" r="1.1" fill="#1A73E8"/>
            <circle cx="15.5" cy="11" r="1.1" fill="#1A73E8"/>
          </svg>
        </div>
        <div class="r-channel-meta">
          <div class="r-badge" style="margin-bottom:.55rem">
            <span class="r-badge-dot"></span> Google Verified Sender · Next-Gen SMS
          </div>
          <h1>Google RCS Business Messaging</h1>
          <p>Transform plain SMS into app-like interactive customer experiences with verified sender checkmarks, carousels, action buttons, and rich media on Android.</p>
        </div>
        <div class="r-channel-actions">
          <a href="#contact-section" class="r-btn r-btn-primary">
            Connect RCS Channel
          </a>
          <a href="#contact-section" class="r-btn r-btn-leads">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified
          </a>
          <a href="#overview" class="r-btn r-btn-outline">
            Interactive RCS Preview
          </a>
        </div>
      </div>

      <div class="r-channel-stats">
        <div class="r-cs"><b>1B+</b><span>Android Active Devices</span></div>
        <div class="r-cs"><b>3.2x</b><span>Higher Click Rate vs SMS</span></div>
        <div class="r-cs"><b>100%</b><span>Verified Brand Identity</span></div>
        <div class="r-cs"><b>0</b><span>App Downloads Required</span></div>
      </div>
    </div>
  </section>

  <!-- Overview -->
  <section class="r-section s-section-alt" id="overview">
    <div class="r-container r-overview-grid">
      <div>
        <span class="r-badge">Next-Gen Messaging</span>
        <h2 style="font-size:clamp(1.8rem,3vw,2.4rem);font-weight:800;color:var(--rcs-t);margin:0.75rem 0 1rem;">
          Bring Rich Media Directly to <span class="r-grad-txt">Native Android Inboxes</span>
        </h2>
        <p style="color:var(--rcs-t2);font-size:1.05rem;line-height:1.65;margin-bottom:1.75rem;">
          Rich Communication Services (RCS) is Google's modern replacement for SMS. HelloBotz gives your brand a verified checkmark, custom logo, clickable carousel cards, map directions, and one-tap calendar scheduling directly in the default Messages app.
        </p>
        <ul style="list-style:none;padding:0;display:grid;gap:0.75rem;margin-bottom:2rem;">
          <li style="display:flex;gap:0.75rem;align-items:center;color:var(--rcs-t);font-weight:500;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#34A853" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span><strong>Verified Checkmark:</strong> Eliminates spam alerts and builds instant brand trust.</span>
          </li>
          <li style="display:flex;gap:0.75rem;align-items:center;color:var(--rcs-t);font-weight:500;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#34A853" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span><strong>Suggested Actions:</strong> One-tap buttons to open URLs, call numbers, or load map pins.</span>
          </li>
          <li style="display:flex;gap:0.75rem;align-items:center;color:var(--rcs-t);font-weight:500;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#34A853" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span><strong>Rich Media Carousels:</strong> Display full catalogs with images, descriptions &amp; prices.</span>
          </li>
        </ul>
        <div style="display:flex;gap:0.75rem;flex-wrap:wrap;">
          <a href="#contact-section" class="r-btn r-btn-primary">Connect RCS Now →</a>
          <a href="#contact-section" class="r-btn r-btn-leads">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified
          </a>
        </div>
      </div>

      <div>
        <div class="r-phone-card">
          <div style="display:flex;align-items:center;gap:0.75rem;margin-bottom:1.25rem;">
            <div style="width:36px;height:36px;border-radius:50%;background:#1A73E8;display:grid;place-items:center;color:#fff;font-weight:800;font-size:0.8rem;">HB</div>
            <div>
              <div style="display:flex;align-items:center;gap:0.35rem;">
                <strong style="color:var(--rcs-t);font-size:0.95rem;">HelloBotz Store</strong>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#1A73E8"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              </div>
              <small style="color:var(--rcs-t3);font-size:0.72rem;">Verified by Google · RCS Chat</small>
            </div>
          </div>

          <div class="r-rcs-card">
            <div class="r-rcs-img-placeholder">
              <span>🛍️ Flash Sale: New Summer Collection</span>
            </div>
            <div class="r-rcs-content">
              <h4 style="font-size:0.95rem;font-weight:700;color:var(--rcs-t);margin-bottom:0.25rem;">Air Cushion Sneakers 2026</h4>
              <p style="font-size:0.8rem;color:var(--rcs-t2);margin:0;line-height:1.4;">
                Exclusive 30% discount applied. Choose your size and get instant free dispatch in 2 hours!
              </p>
              <div class="r-rcs-btn-group">
                <div class="r-rcs-chip-btn">💳 Buy Now at ₹1,999</div>
                <div class="r-rcs-chip-btn" style="border-color:var(--rcs-bd2);color:var(--rcs-t2);">💬 Chat with Fashion Stylist</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="r-section">
    <div class="r-container">
      <div class="r-sec-head">
        <span class="r-badge">Rich Capabilities</span>
        <h2>Why Brands Upgrade to <span class="r-grad-txt">Google RCS</span></h2>
        <p>Interactive conversational commerce without forcing users to download an application.</p>
      </div>

      <div class="r-feat-grid">
        <div class="r-feat">
          <span style="font-size:1.8rem;">🛡️</span>
          <h4>Google Verified Sender Identity</h4>
          <p>Get a verified badge, brand color, and business logo directly approved by Google RCS partner team.</p>
        </div>
        <div class="r-feat">
          <span style="font-size:1.8rem;">🎠</span>
          <h4>Multi-Product Carousels</h4>
          <p>Showcase up to 10 swipeable product cards with images, titles, descriptions, and custom purchase chips.</p>
        </div>
        <div class="r-feat">
          <span style="font-size:1.8rem;">📍</span>
          <h4>Native Device Actions</h4>
          <p>Trigger Google Maps turn-by-turn navigation, calendar meeting invites, and dialpad triggers with 1 tap.</p>
        </div>
        <div class="r-feat">
          <span style="font-size:1.8rem;">🔄</span>
          <h4>Automated Fallback to SMS</h4>
          <p>If an iPhone or non-RCS handset receives your campaign, HelloBotz automatically falls back to plain SMS seamlessly.</p>
        </div>
        <div class="r-feat">
          <span style="font-size:1.8rem;">📊</span>
          <h4>Read Receipts &amp; Real-Time Telemetry</h4>
          <p>Know exactly when messages are delivered, seen, and which action chips received user clicks.</p>
        </div>
        <div class="r-feat">
          <span style="font-size:1.8rem;">🤖</span>
          <h4>AI Chatbot Automation</h4>
          <p>Connect your RCS channel directly to HelloBotz AI conversational bot to answer queries and close sales 24/7.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="r-section" id="cta">
    <div class="r-container">
      <div class="r-cta-box">
        <span class="r-badge" style="background:rgba(255,255,255,.2);color:#FFFFFF;border-color:rgba(255,255,255,.35);">
          Get Started
        </span>
        <h2>Launch Verified Google RCS Campaigns</h2>
        <p>Join the next generation of messaging and achieve 3x higher engagement than traditional SMS.</p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
          <a href="#contact-section" class="r-btn" style="background:#FFFFFF;color:#1A73E8;font-weight:800;">
            Connect RCS Channel 🚀
          </a>
          <a href="#contact-section" class="r-btn r-btn-leads">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified
          </a>
          <a href="#contact-section" class="r-btn" style="background:rgba(255,255,255,.15);color:#FFFFFF;border:1px solid #FFFFFF;">
            Book a Live Product Demo
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
$footerContactText = "Talk to our RCS specialists about Google RCS onboarding and verified agent approval.";
include __DIR__ . '/../../includes/footer.php';
?>
