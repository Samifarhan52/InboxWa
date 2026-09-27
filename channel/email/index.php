<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Omnichannel Email Marketing & Transactional API Channel | HelloBotz';
$pageDescription = 'High-deliverability transactional and marketing email automation. Seamlessly sync email threads with WhatsApp & SMS in your HelloBotz shared inbox.';
$canonicalUrl = 'https://hellobotz.com/channel/email/';
$ogImage = 'assets/images/og-image.png';

include __DIR__ . '/../../includes/header.php';
?>

<style>
/* =====================================================================
   HELLOBOTZ EMAIL CHANNEL PAGE THEME
   ===================================================================== */
:root {
  --em-p: #EA4335;
  --em-p2: #C5221F;
  --em-p-l: rgba(234, 67, 53, 0.1);
  --em-p-m: rgba(234, 67, 53, 0.25);
  --em-a: #FBBC05;
  --em-t: #0F172A;
  --em-t2: #475569;
  --em-t3: #64748B;
  --em-bg: #FFFFFF;
  --em-bg2: #F8FAFC;
  --em-bg3: #F1F5F9;
  --em-bd: #E2E8F0;
  --em-bd2: #CBD5E1;
  --em-sh: 0 2px 5px rgba(15,23,42,.05);
  --em-sh2: 0 12px 32px -6px rgba(234, 67, 53, 0.18), 0 8px 12px -6px rgba(15,23,42,.06);
  --em-r: 12px;
  --em-r2: 18px;
  --em-r3: 24px;
  --em-r4: 999px;
  --em-font: 'Inter', system-ui, -apple-system, sans-serif;
  --em-max: 1240px;
  --em-ease: cubic-bezier(.4,0,.2,1);
}

body.dark-theme,
[data-theme="dark"] {
  --em-t: #F8FAFC;
  --em-t2: #CBD5E1;
  --em-t3: #94A3B8;
  --em-bg: #0b1120;
  --em-bg2: #0f172a;
  --em-bg3: #1e293b;
  --em-bd: #1e293b;
  --em-bd2: #334155;
  --em-sh: 0 2px 6px rgba(0,0,0,.3);
  --em-sh2: 0 12px 32px -6px rgba(234, 67, 53, 0.22);
}

.cemail-page {
  background: var(--em-bg);
  color: var(--em-t);
  font-family: var(--em-font);
  overflow-x: hidden;
  width: 100%;
}
.cemail-breadcrumb {
  padding: 0.85rem 1.5rem 0.35rem;
  max-width: var(--em-max);
  margin: 0 auto;
  font-size: 0.85rem;
  color: var(--em-t3);
  display: flex;
  align-items: center;
  gap: 0.5rem;
}
.cemail-breadcrumb a { color: var(--em-t3); text-decoration: none; }
.cemail-breadcrumb a:hover { color: var(--em-p); }

.em-container {
  width: 100%;
  max-width: var(--em-max);
  margin: 0 auto;
  padding: 0 1.25rem;
  box-sizing: border-box;
}
.em-section { padding: 4.5rem 0; position: relative; }
.em-section-sm { padding: 2.75rem 0; }
.em-section-alt { background: var(--em-bg2); }

.em-sec-head {
  text-align: center;
  max-width: 740px;
  margin: 0 auto 3rem;
}
.em-sec-head h2 {
  font-size: clamp(1.6rem, 2.8vw, 2.35rem);
  font-weight: 800;
  letter-spacing: -0.025em;
  color: var(--em-t);
  margin-top: 0.85rem;
  line-height: 1.25;
}
.em-sec-head p {
  color: var(--em-t2);
  font-size: 1.05rem;
  margin-top: 0.85rem;
  line-height: 1.6;
}
.em-grad-txt {
  background: linear-gradient(135deg, #EA4335 0%, #F59E0B 100%);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.em-badge {
  display: inline-flex;
  align-items: center;
  gap: 0.45rem;
  padding: 0.32rem 0.85rem;
  font-size: 0.75rem;
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  border-radius: var(--em-r4);
  background: var(--em-p-l);
  color: var(--em-p2);
  border: 1px solid var(--em-p-m);
}
.em-badge-dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: #EA4335;
  box-shadow: 0 0 8px #EA4335;
}

.em-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 0.55rem;
  padding: 0.75rem 1.45rem;
  font-size: 0.92rem;
  font-weight: 700;
  border-radius: var(--em-r4);
  border: 1.5px solid transparent;
  transition: all 0.22s var(--em-ease);
  text-decoration: none;
  cursor: pointer;
}
.em-btn-primary {
  background: linear-gradient(135deg, #EA4335 0%, #C5221F 100%);
  color: #FFFFFF !important;
  box-shadow: 0 6px 20px rgba(234, 67, 53, 0.4);
}
.em-btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 26px rgba(234, 67, 53, 0.55);
}
.em-btn-leads {
  background: linear-gradient(135deg, #10B981 0%, #059669 100%);
  color: #FFFFFF !important;
  box-shadow: 0 6px 20px rgba(16, 185, 129, 0.35);
}
.em-btn-leads:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 26px rgba(16, 185, 129, 0.48);
}
.em-btn-outline {
  background: var(--em-bg);
  color: var(--em-t) !important;
  border-color: var(--em-bd2);
}
.em-btn-outline:hover {
  border-color: var(--em-p);
  color: var(--em-p2) !important;
  background: var(--em-p-l);
}

/* Hero */
.em-channel-hero {
  padding: 3.25rem 0 2.5rem;
  position: relative;
  overflow: hidden;
}
.em-channel-head {
  display: flex;
  align-items: center;
  gap: 1.5rem;
  flex-wrap: wrap;
  margin-bottom: 2.25rem;
}
.em-channel-avatar {
  width: 78px;
  height: 78px;
  border-radius: 22px;
  display: grid;
  place-items: center;
  background: #EA4335;
  color: #FFFFFF;
  box-shadow: 0 12px 30px -8px rgba(234, 67, 53, 0.85);
  flex-shrink: 0;
}
.em-channel-avatar svg { width: 38px; height: 38px; }
.em-channel-meta { flex: 1; min-width: 240px; }
.em-channel-meta h1 {
  font-size: clamp(2rem, 3.8vw, 3rem);
  font-weight: 800;
  letter-spacing: -0.03em;
  color: var(--em-t);
  margin-bottom: 0.35rem;
  line-height: 1.15;
}
.em-channel-meta p {
  color: var(--em-t2);
  font-size: 1.05rem;
  line-height: 1.5;
  max-width: 620px;
}
.em-channel-actions { display: flex; gap: 0.75rem; flex-wrap: wrap; }
.em-channel-stats {
  display: flex;
  gap: 2.5rem;
  flex-wrap: wrap;
  padding-top: 1.75rem;
  border-top: 1px solid var(--em-bd);
}
.em-cs { display: flex; flex-direction: column; }
.em-cs b {
  font-size: 1.55rem;
  font-weight: 800;
  color: var(--em-p2);
  line-height: 1.2;
}
.em-cs span {
  font-size: 0.8rem;
  color: var(--em-t3);
  font-weight: 600;
  margin-top: 0.2rem;
}

/* Mail Preview Card */
.em-overview-grid {
  display: grid;
  grid-template-columns: 1.05fr 0.95fr;
  gap: 3rem;
  align-items: center;
}
.em-mail-card {
  background: var(--em-bg);
  border: 1px solid var(--em-bd);
  border-radius: var(--em-r3);
  padding: 1.75rem;
  box-shadow: var(--em-sh2);
  max-width: 480px;
  margin: 0 auto;
}
.em-mail-header {
  border-bottom: 1px solid var(--em-bd);
  padding-bottom: 1rem;
  margin-bottom: 1.25rem;
}
.em-mail-subject {
  font-size: 1.05rem;
  font-weight: 800;
  color: var(--em-t);
  margin-bottom: 0.5rem;
}
.em-mail-meta {
  display: flex;
  justify-content: space-between;
  font-size: 0.78rem;
  color: var(--em-t3);
}
.em-mail-preview-box {
  background: var(--em-bg2);
  border: 1px solid var(--em-bd);
  border-radius: var(--em-r2);
  padding: 1.25rem;
  font-size: 0.88rem;
  line-height: 1.6;
  color: var(--em-t);
}

/* Feat Grid */
.em-feat-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.5rem;
}
.em-feat {
  padding: 1.75rem;
  border-radius: var(--em-r2);
  background: var(--em-bg);
  border: 1px solid var(--em-bd);
  box-shadow: var(--em-sh);
  transition: all 0.3s;
}
.em-feat:hover {
  transform: translateY(-5px);
  border-color: var(--em-p);
  box-shadow: var(--em-sh2);
}
.em-feat h4 {
  font-size: 1.08rem;
  font-weight: 700;
  margin: 0.85rem 0 0.45rem;
  color: var(--em-t);
}
.em-feat p {
  font-size: 0.88rem;
  color: var(--em-t2);
  line-height: 1.55;
  margin: 0;
}

/* CTA */
.em-cta-box {
  text-align: center;
  padding: 4rem 2.5rem;
  border-radius: var(--em-r3);
  background: linear-gradient(135deg, #C5221F 0%, #EA4335 50%, #F59E0B 100%);
  color: #FFFFFF;
  box-shadow: 0 20px 50px rgba(197, 34, 31, 0.3);
}
.em-cta-box h2 {
  color: #FFFFFF !important;
  font-size: clamp(1.8rem, 3.2vw, 2.6rem);
  font-weight: 800;
  margin: 1rem 0;
}
.em-cta-box p {
  color: rgba(255,255,255,.9) !important;
  font-size: 1.05rem;
  max-width: 600px;
  margin: 0 auto 2rem;
}

@media (max-width: 1024px) {
  .em-overview-grid { grid-template-columns: 1fr; }
  .em-feat-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 768px) {
  .em-section { padding: 3rem 0; }
  .em-channel-hero { padding: 2rem 0 1.5rem; }
  .em-feat-grid { grid-template-columns: 1fr; }
  .em-channel-head { flex-direction: column; text-align: center; }
  .em-channel-actions {
    flex-direction: column;
    align-items: stretch;
    width: 100%;
    gap: 0.75rem;
  }
  .em-channel-actions .em-btn {
    width: 100%;
    justify-content: center;
    text-align: center;
    box-sizing: border-box;
  }
  .em-channel-stats {
    justify-content: center;
    gap: 1.5rem;
  }
  .em-channel-stats .em-cs {
    align-items: center;
  }
  .em-phone-card,
  .em-phone-mockup {
    padding: 1.25rem 1rem;
    border-radius: 18px;
    max-width: 100%;
  }
  .em-overview-grid .em-btn {
    width: 100%;
    justify-content: center;
    text-align: center;
    box-sizing: border-box;
  }
  .em-cta-box {
    padding: 2.75rem 1.25rem;
    border-radius: 18px;
  }
  .em-cta-box .em-channel-actions {
    flex-direction: column;
    align-items: stretch;
    width: 100%;
  }
}

@media (max-width: 480px) {
  .em-channel-avatar {
    width: 64px;
    height: 64px;
    border-radius: 18px;
  }
  .em-channel-avatar svg {
    width: 30px;
    height: 30px;
  }
  .em-phone-card,
  .em-phone-mockup {
    padding: 1rem 0.75rem;
    border-radius: 16px;
  }
  .em-mail-preview-box {
    padding: 1rem 0.75rem;
  }
  .em-mail-subject {
    font-size: 0.96rem;
  }
  .em-feat {
    padding: 1.35rem 1.15rem;
  }
  .em-cta-box {
    padding: 2.25rem 1rem;
  }
}
</style>

<div class="cemail-page">
  <div class="cemail-breadcrumb">
    <a href="<?php echo $bp; ?>">Home</a>
    <span>/</span>
    <a href="<?php echo $bp; ?>#channels-section">Channels</a>
    <span>/</span>
    <span style="color: var(--em-p2); font-weight: 600;">EMAIL</span>
  </div>

  <!-- Hero -->
  <section class="em-channel-hero">
    <div class="em-container">
      <div class="em-channel-head">
        <div class="em-channel-avatar">
          <svg viewBox="0 0 24 24" fill="none">
            <path d="M5.5 7.5l6.5 4.5 6.5-4.5M5.5 7.5h13a1 1 0 011 1v8a1 1 0 01-1 1h-13a1 1 0 01-1-1v-8a1 1 0 011-1z" stroke="#FFFFFF" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="em-channel-meta">
          <div class="em-badge" style="margin-bottom:.55rem">
            <span class="em-badge-dot"></span> Official Channel · 99.8% Inbox Rate
          </div>
          <h1>Omnichannel EMAIL Automation</h1>
          <p>Deliver transactional receipts, automated drip onboarding, and AI-optimized newsletters with seamless shared inbox synchronization.</p>
        </div>
        <div class="em-channel-actions">
          <a href="#contact-section" class="em-btn em-btn-primary">
            Connect EMAIL Channel
          </a>
          <a href="#contact-section" class="em-btn em-btn-leads">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified
          </a>
          <a href="#overview" class="em-btn em-btn-outline">
            View Email Capabilities
          </a>
        </div>
      </div>

      <div class="em-channel-stats">
        <div class="em-cs"><b>99.8%</b><span>Primary Inbox Placement</span></div>
        <div class="em-cs"><b>48%</b><span>Avg Email Open Rate</span></div>
        <div class="em-cs"><b>100%</b><span>DKIM, SPF &amp; DMARC Verified</span></div>
        <div class="em-cs"><b>1 Inbox</b><span>Synced with WhatsApp &amp; SMS</span></div>
      </div>
    </div>
  </section>

  <!-- Overview -->
  <section class="em-section em-section-alt" id="overview">
    <div class="em-container em-overview-grid">
      <div>
        <span class="em-badge">Smart Deliverability</span>
        <h2 style="font-size:clamp(1.8rem,3vw,2.4rem);font-weight:800;color:var(--em-t);margin:0.75rem 0 1rem;">
          Emails That Land in <span class="em-grad-txt">Primary Inboxes, Not Spam</span>
        </h2>
        <p style="color:var(--em-t2);font-size:1.05rem;line-height:1.65;margin-bottom:1.75rem;">
          HelloBotz provides dedicated IP warmup, automated domain reputation protection, and real-time spam filter analysis so your critical invoices, password resets, and marketing campaigns reach customers reliably.
        </p>
        <ul style="list-style:none;padding:0;display:grid;gap:0.75rem;margin-bottom:2rem;">
          <li style="display:flex;gap:0.75rem;align-items:center;color:var(--em-t);font-weight:500;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#EA4335" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span><strong>Unified Customer Timeline:</strong> See email replies right next to WhatsApp chats.</span>
          </li>
          <li style="display:flex;gap:0.75rem;align-items:center;color:var(--em-t);font-weight:500;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#EA4335" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span><strong>AI Subject Line Optimizer:</strong> Auto-test 3 variations to maximize open rates.</span>
          </li>
          <li style="display:flex;gap:0.75rem;align-items:center;color:var(--em-t);font-weight:500;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#EA4335" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span><strong>Triggered Omnichannel Workflows:</strong> If email is unread in 24h, send a WhatsApp alert.</span>
          </li>
        </ul>
        <div style="display:flex;gap:0.75rem;flex-wrap:wrap;">
          <a href="#contact-section" class="em-btn em-btn-primary">Connect EMAIL Now →</a>
          <a href="#contact-section" class="em-btn em-btn-leads">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified
          </a>
        </div>
      </div>

      <div>
        <div class="em-mail-card">
          <div class="em-mail-header">
            <div class="em-mail-subject">⚡ Your Account Setup is 100% Complete!</div>
            <div class="em-mail-meta">
              <span>From: HelloBotz &lt;updates@hellobotz.com&gt;</span>
              <span>Today, 10:45 AM</span>
            </div>
          </div>
          <div class="em-mail-preview-box">
            <p style="margin-top:0;"><strong>Hi Alex,</strong></p>
            <p>Welcome to the unified communication suite. Your Official WhatsApp API and SMS channel credentials are now live!</p>
            <div style="background:var(--em-bg);border:1px solid var(--em-bd);border-radius:8px;padding:0.75rem;margin:1rem 0;text-align:center;">
              <span style="display:inline-block;padding:0.5rem 1.25rem;background:#EA4335;color:#FFFFFF;border-radius:6px;font-weight:700;font-size:0.85rem;">
                Open Unified Inbox
              </span>
            </div>
            <p style="margin-bottom:0;font-size:0.78rem;color:var(--em-t3);">Delivered with 100% TLS encryption and BIMI brand checkmark.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="em-section">
    <div class="em-container">
      <div class="em-sec-head">
        <span class="em-badge">Omnichannel Engine</span>
        <h2>High Performance <span class="em-grad-txt">Email Infrastructure</span></h2>
        <p>Built for product growth engineers, marketing leaders, and support teams.</p>
      </div>

      <div class="em-feat-grid">
        <div class="em-feat">
          <span style="font-size:1.8rem;">📥</span>
          <h4>Shared Inbox Integration</h4>
          <p>Manage customer emails alongside WhatsApp chats with team assignment, private notes, and canned snippets.</p>
        </div>
        <div class="em-feat">
          <span style="font-size:1.8rem;">🎯</span>
          <h4>High-Speed Transactional API</h4>
          <p>Send password resets, invoice receipts, and verification links at millisecond speed via REST API and SMTP.</p>
        </div>
        <div class="em-feat">
          <span style="font-size:1.8rem;">🎨</span>
          <h4>Visual Drag-and-Drop Builder</h4>
          <p>Design modern mobile-responsive email templates without touching HTML or CSS code.</p>
        </div>
        <div class="em-feat">
          <span style="font-size:1.8rem;">🤖</span>
          <h4>AI Copy &amp; Spam Predictor</h4>
          <p>Scan your emails for spam trigger words before sending to ensure maximum deliverability.</p>
        </div>
        <div class="em-feat">
          <span style="font-size:1.8rem;">📊</span>
          <h4>Advanced Telemetry</h4>
          <p>Track unique open rates, link clicks, device breakdowns, unsubscribe rates, and bounce logs in real time.</p>
        </div>
        <div class="em-feat">
          <span style="font-size:1.8rem;">🛡️</span>
          <h4>BIMI &amp; Custom Domain Authentication</h4>
          <p>Showcase your official brand logo next to your emails in Gmail and Apple Mail with complete BIMI setup.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="em-section" id="cta">
    <div class="em-container">
      <div class="em-cta-box">
        <span class="em-badge" style="background:rgba(255,255,255,.2);color:#FFFFFF;border-color:rgba(255,255,255,.35);">
          Get Started
        </span>
        <h2>Supercharge Your Email Channel</h2>
        <p>Unify email with WhatsApp, Instagram, SMS, and RCS for the ultimate customer engagement experience.</p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
          <a href="#contact-section" class="em-btn" style="background:#FFFFFF;color:#C5221F;font-weight:800;">
            Connect EMAIL Channel 🚀
          </a>
          <a href="#contact-section" class="em-btn em-btn-leads">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified
          </a>
          <a href="#contact-section" class="em-btn" style="background:rgba(255,255,255,.15);color:#FFFFFF;border:1px solid #FFFFFF;">
            Talk to an Email Expert
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
$footerContactText = "Talk to our email deliverability specialists to configure custom DKIM, dedicated IPs, and automated drip sequences.";
include __DIR__ . '/../../includes/footer.php';
?>
