<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Enterprise SMS Channel & High-Speed OTP Platform | HelloBotz';
$pageDescription = 'Send enterprise transactional SMS, instant OTPs with sub-2s latency, and targeted promotional broadcasts with 100% TRAI DLT compliance.';
$canonicalUrl = 'https://hellobotz.com/channel/sms/';
$ogImage = 'assets/images/og-image.png';

include __DIR__ . '/../../includes/header.php';
?>

<style>
/* =====================================================================
   HELLOBOTZ SMS CHANNEL PAGE THEME
   ===================================================================== */
:root {
  --sms-p: #F59E0B;
  --sms-p2: #D97706;
  --sms-p-l: rgba(245, 158, 11, 0.1);
  --sms-p-m: rgba(245, 158, 11, 0.25);
  --sms-a: #10B981;
  --sms-t: #0F172A;
  --sms-t2: #475569;
  --sms-t3: #64748B;
  --sms-bg: #FFFFFF;
  --sms-bg2: #F8FAFC;
  --sms-bg3: #F1F5F9;
  --sms-bd: #E2E8F0;
  --sms-bd2: #CBD5E1;
  --sms-sh: 0 2px 5px rgba(15,23,42,.05);
  --sms-sh2: 0 12px 32px -6px rgba(245, 158, 11, 0.18), 0 8px 12px -6px rgba(15,23,42,.06);
  --sms-r: 12px;
  --sms-r2: 18px;
  --sms-r3: 24px;
  --sms-r4: 999px;
  --sms-font: 'Inter', system-ui, -apple-system, sans-serif;
  --sms-max: 1240px;
  --sms-ease: cubic-bezier(.4,0,.2,1);
}

body.dark-theme,
[data-theme="dark"] {
  --sms-t: #F8FAFC;
  --sms-t2: #CBD5E1;
  --sms-t3: #94A3B8;
  --sms-bg: #0b1120;
  --sms-bg2: #0f172a;
  --sms-bg3: #1e293b;
  --sms-bd: #1e293b;
  --sms-bd2: #334155;
  --sms-sh: 0 2px 6px rgba(0,0,0,.3);
  --sms-sh2: 0 12px 32px -6px rgba(245, 158, 11, 0.22);
}

.csms-page {
  background: var(--sms-bg);
  color: var(--sms-t);
  font-family: var(--sms-font);
  overflow-x: hidden;
  width: 100%;
}
.csms-breadcrumb {
  padding: 0.85rem 1.5rem 0.35rem;
  max-width: var(--sms-max);
  margin: 0 auto;
  font-size: 0.85rem;
  color: var(--sms-t3);
  display: flex;
  align-items: center;
  gap: 0.5rem;
}
.csms-breadcrumb a { color: var(--sms-t3); text-decoration: none; }
.csms-breadcrumb a:hover { color: var(--sms-p); }

.s-container {
  width: 100%;
  max-width: var(--sms-max);
  margin: 0 auto;
  padding: 0 1.25rem;
  box-sizing: border-box;
}
.s-section { padding: 4.5rem 0; position: relative; }
.s-section-sm { padding: 2.75rem 0; }
.s-section-alt { background: var(--sms-bg2); }

.s-sec-head {
  text-align: center;
  max-width: 740px;
  margin: 0 auto 3rem;
}
.s-sec-head h2 {
  font-size: clamp(1.6rem, 2.8vw, 2.35rem);
  font-weight: 800;
  letter-spacing: -0.025em;
  color: var(--sms-t);
  margin-top: 0.85rem;
  line-height: 1.25;
}
.s-sec-head p {
  color: var(--sms-t2);
  font-size: 1.05rem;
  margin-top: 0.85rem;
  line-height: 1.6;
}
.s-grad-txt {
  background: linear-gradient(135deg, #F59E0B 0%, #EA580C 100%);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.s-badge {
  display: inline-flex;
  align-items: center;
  gap: 0.45rem;
  padding: 0.32rem 0.85rem;
  font-size: 0.75rem;
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  border-radius: var(--sms-r4);
  background: var(--sms-p-l);
  color: var(--sms-p2);
  border: 1px solid var(--sms-p-m);
}
.s-badge-dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: #10B981;
  box-shadow: 0 0 8px #10B981;
}

.s-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 0.55rem;
  padding: 0.75rem 1.45rem;
  font-size: 0.92rem;
  font-weight: 700;
  border-radius: var(--sms-r4);
  border: 1.5px solid transparent;
  transition: all 0.22s var(--sms-ease);
  text-decoration: none;
  cursor: pointer;
}
.s-btn-primary {
  background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%);
  color: #FFFFFF !important;
  box-shadow: 0 6px 20px rgba(245, 158, 11, 0.4);
}
.s-btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 26px rgba(245, 158, 11, 0.55);
}
.s-btn-leads {
  background: linear-gradient(135deg, #10B981 0%, #059669 100%);
  color: #FFFFFF !important;
  box-shadow: 0 6px 20px rgba(16, 185, 129, 0.35);
}
.s-btn-leads:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 26px rgba(16, 185, 129, 0.48);
}
.s-btn-outline {
  background: var(--sms-bg);
  color: var(--sms-t) !important;
  border-color: var(--sms-bd2);
}
.s-btn-outline:hover {
  border-color: var(--sms-p);
  color: var(--sms-p2) !important;
  background: var(--sms-p-l);
}

/* Hero */
.s-channel-hero {
  padding: 3.25rem 0 2.5rem;
  position: relative;
  overflow: hidden;
}
.s-channel-head {
  display: flex;
  align-items: center;
  gap: 1.5rem;
  flex-wrap: wrap;
  margin-bottom: 2.25rem;
}
.s-channel-avatar {
  width: 78px;
  height: 78px;
  border-radius: 22px;
  display: grid;
  place-items: center;
  background: #F59E0B;
  color: #FFFFFF;
  box-shadow: 0 12px 30px -8px rgba(245, 158, 11, 0.85);
  flex-shrink: 0;
}
.s-channel-avatar svg { width: 38px; height: 38px; }
.s-channel-meta { flex: 1; min-width: 240px; }
.s-channel-meta h1 {
  font-size: clamp(2rem, 3.8vw, 3rem);
  font-weight: 800;
  letter-spacing: -0.03em;
  color: var(--sms-t);
  margin-bottom: 0.35rem;
  line-height: 1.15;
}
.s-channel-meta p {
  color: var(--sms-t2);
  font-size: 1.05rem;
  line-height: 1.5;
  max-width: 620px;
}
.s-channel-actions { display: flex; gap: 0.75rem; flex-wrap: wrap; }
.s-channel-stats {
  display: flex;
  gap: 2.5rem;
  flex-wrap: wrap;
  padding-top: 1.75rem;
  border-top: 1px solid var(--sms-bd);
}
.s-cs { display: flex; flex-direction: column; }
.s-cs b {
  font-size: 1.55rem;
  font-weight: 800;
  color: var(--sms-p2);
  line-height: 1.2;
}
.s-cs span {
  font-size: 0.8rem;
  color: var(--sms-t3);
  font-weight: 600;
  margin-top: 0.2rem;
}

/* Phone Simulator */
.s-overview-grid {
  display: grid;
  grid-template-columns: 1.05fr 0.95fr;
  gap: 3rem;
  align-items: center;
}
.s-phone-card {
  background: var(--sms-bg);
  border: 1px solid var(--sms-bd);
  border-radius: var(--sms-r3);
  padding: 1.75rem;
  box-shadow: var(--sms-sh2);
  max-width: 440px;
  margin: 0 auto;
}
.s-sms-bubble {
  background: var(--sms-bg2);
  border: 1px solid var(--sms-bd);
  border-radius: var(--sms-r2);
  padding: 1.25rem;
  margin-bottom: 1rem;
}
.s-sms-sender {
  display: flex;
  justify-content: space-between;
  font-size: 0.75rem;
  font-weight: 700;
  color: var(--sms-p2);
  margin-bottom: 0.5rem;
}
.s-sms-body {
  font-size: 0.92rem;
  line-height: 1.55;
  color: var(--sms-t);
  margin-bottom: 0.75rem;
}
.s-sms-otp {
  font-size: 1.45rem;
  font-weight: 900;
  letter-spacing: 4px;
  color: #D97706;
  background: var(--sms-p-l);
  padding: 0.4rem 0.85rem;
  border-radius: var(--sms-r);
  display: inline-block;
  margin: 0.5rem 0;
}

/* Feat Grid */
.s-feat-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.5rem;
}
.s-feat {
  padding: 1.75rem;
  border-radius: var(--sms-r2);
  background: var(--sms-bg);
  border: 1px solid var(--sms-bd);
  box-shadow: var(--sms-sh);
  transition: all 0.3s;
}
.s-feat:hover {
  transform: translateY(-5px);
  border-color: var(--sms-p);
  box-shadow: var(--sms-sh2);
}
.s-feat h4 {
  font-size: 1.08rem;
  font-weight: 700;
  margin: 0.85rem 0 0.45rem;
  color: var(--sms-t);
}
.s-feat p {
  font-size: 0.88rem;
  color: var(--sms-t2);
  line-height: 1.55;
  margin: 0;
}

/* CTA */
.s-cta-box {
  text-align: center;
  padding: 4rem 2.5rem;
  border-radius: var(--sms-r3);
  background: linear-gradient(135deg, #D97706 0%, #F59E0B 50%, #EA580C 100%);
  color: #FFFFFF;
  box-shadow: 0 20px 50px rgba(217, 119, 6, 0.3);
}
.s-cta-box h2 {
  color: #FFFFFF !important;
  font-size: clamp(1.8rem, 3.2vw, 2.6rem);
  font-weight: 800;
  margin: 1rem 0;
}
.s-cta-box p {
  color: rgba(255,255,255,.9) !important;
  font-size: 1.05rem;
  max-width: 600px;
  margin: 0 auto 2rem;
}

@media (max-width: 1024px) {
  .s-overview-grid { grid-template-columns: 1fr; }
  .s-feat-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 768px) {
  .s-feat-grid { grid-template-columns: 1fr; }
  .s-channel-head { flex-direction: column; text-align: center; }
  .s-channel-actions { justify-content: center; }
  .s-channel-stats { justify-content: center; }
}
</style>

<div class="csms-page">
  <div class="csms-breadcrumb">
    <a href="<?php echo $bp; ?>">Home</a>
    <span>/</span>
    <a href="<?php echo $bp; ?>#channels-section">Channels</a>
    <span>/</span>
    <span style="color: var(--sms-p2); font-weight: 600;">SMS</span>
  </div>

  <!-- Hero -->
  <section class="s-channel-hero">
    <div class="s-container">
      <div class="s-channel-head">
        <div class="s-channel-avatar">
          <svg viewBox="0 0 24 24" fill="none">
            <path d="M7 8h10M7 12h7m-7 4h4" stroke="#FFFFFF" stroke-width="2.2" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="s-channel-meta">
          <div class="s-badge" style="margin-bottom:.55rem">
            <span class="s-badge-dot"></span> Official Channel · DLT Approved
          </div>
          <h1>Enterprise SMS Channel</h1>
          <p>High-deliverability transactional SMS, sub-2-second OTP delivery, and high-volume promotional broadcasts with 100% TRAI DLT compliance.</p>
        </div>
        <div class="s-channel-actions">
          <a href="#contact-section" class="s-btn s-btn-primary">
            Connect SMS Channel
          </a>
          <a href="#contact-section" class="s-btn s-btn-leads">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified
          </a>
          <a href="#overview" class="s-btn s-btn-outline">
            View Live Route Demo
          </a>
        </div>
      </div>

      <div class="s-channel-stats">
        <div class="s-cs"><b>100M+</b><span>SMS Delivered</span></div>
        <div class="s-cs"><b>99.9%</b><span>Operator Delivery Rate</span></div>
        <div class="s-cs"><b>&lt; 2s</b><span>Avg OTP Latency</span></div>
        <div class="s-cs"><b>100%</b><span>TRAI DLT Compliant</span></div>
      </div>
    </div>
  </section>

  <!-- Overview -->
  <section class="s-section s-section-alt" id="overview">
    <div class="s-container s-overview-grid">
      <div>
        <span class="s-badge">High-Speed Gateway</span>
        <h2 style="font-size:clamp(1.8rem,3vw,2.4rem);font-weight:800;color:var(--sms-t);margin:0.75rem 0 1rem;">
          Instant Delivery with <span class="s-grad-txt">Intelligent Multi-Telco Failover</span>
        </h2>
        <p style="color:var(--sms-t2);font-size:1.05rem;line-height:1.65;margin-bottom:1.75rem;">
          HelloBotz SMS gateway dynamically routes messages across India's top Tier-1 telecom operators (Airtel, Jio, Vi, BSNL). If one route encounters congestion, our AI load balancer instantly redirects packets to ensure zero drops.
        </p>
        <ul style="list-style:none;padding:0;display:grid;gap:0.75rem;margin-bottom:2rem;">
          <li style="display:flex;gap:0.75rem;align-items:center;color:var(--sms-t);font-weight:500;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span><strong>Dedicated Sender IDs:</strong> 6-character brand header approval on DLT.</span>
          </li>
          <li style="display:flex;gap:0.75rem;align-items:center;color:var(--sms-t);font-weight:500;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span><strong>Instant OTP Priority Route:</strong> Guaranteed sub-2s latency for login authentication.</span>
          </li>
          <li style="display:flex;gap:0.75rem;align-items:center;color:var(--sms-t);font-weight:500;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span><strong>Smart WhatsApp Fallback:</strong> Auto-dispatch WhatsApp message if SMS is delayed.</span>
          </li>
        </ul>
        <div style="display:flex;gap:0.75rem;flex-wrap:wrap;">
          <a href="#contact-section" class="s-btn s-btn-primary">Connect SMS Now →</a>
          <a href="#contact-section" class="s-btn s-btn-leads">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified
          </a>
        </div>
      </div>

      <div>
        <div class="s-phone-card">
          <div style="display:flex;align-items:center;gap:0.75rem;margin-bottom:1.25rem;">
            <div style="width:10px;height:10px;border-radius:50%;background:#10B981;"></div>
            <strong style="color:var(--sms-t);font-size:0.95rem;">Live SMS Terminal Preview</strong>
          </div>

          <div class="s-sms-bubble">
            <div class="s-sms-sender">
              <span>VK-HLBOTZ (Official)</span>
              <span>Just now</span>
            </div>
            <div class="s-sms-body">
              Your HelloBotz verification code is below. Valid for 10 minutes. Do not share with anyone.
            </div>
            <div class="s-sms-otp">849-210</div>
            <div style="font-size:0.75rem;color:var(--sms-t3);">Delivered via Airtel Tier-1 Direct Route (Latency: 0.8s)</div>
          </div>

          <div class="s-sms-bubble" style="margin-bottom:0;">
            <div class="s-sms-sender">
              <span>AD-HLBOTZ (Promotional)</span>
              <span>2 mins ago</span>
            </div>
            <div class="s-sms-body">
              Hi Priya! Your favorite kurtis are back in stock with flat 40% OFF. Shop before stock ends: hbotz.in/deal
            </div>
            <div style="font-size:0.75rem;color:var(--sms-t3);">100% DLT Whitelisted · Auto Click-tracking Enabled</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="s-section">
    <div class="s-container">
      <div class="s-sec-head">
        <span class="s-badge">Enterprise Features</span>
        <h2>Built for <span class="s-grad-txt">Mission-Critical Scale</span></h2>
        <p>Everything your engineering and marketing teams need to scale SMS communication.</p>
      </div>

      <div class="s-feat-grid">
        <div class="s-feat">
          <span style="font-size:1.8rem;">⚡</span>
          <h4>Sub-2s OTP Delivery</h4>
          <p>Zero queuing architecture ensures your users never wait for verification passwords or transactional 2FA.</p>
        </div>
        <div class="s-feat">
          <span style="font-size:1.8rem;">🛡️</span>
          <h4>DLT Assistance &amp; Registration</h4>
          <p>Complete white-glove support for entity registration, header approval, and template whitelisting across all Indian portals.</p>
        </div>
        <div class="s-feat">
          <span style="font-size:1.8rem;">📢</span>
          <h4>Bulk Promotional Broadcasts</h4>
          <p>Blast millions of personalized SMS campaigns with high throughput, smart link shorteners, and real-time click metrics.</p>
        </div>
        <div class="s-feat">
          <span style="font-size:1.8rem;">🔄</span>
          <h4>Two-Way SMS &amp; Virtual Numbers</h4>
          <p>Receive inbound customer replies and trigger automated workflows or route inquiries directly to your team inbox.</p>
        </div>
        <div class="s-feat">
          <span style="font-size:1.8rem;">📈</span>
          <h4>Live Delivery Reports (DLR)</h4>
          <p>Detailed operator delivery logs, handset status updates, bounce tracking, and error codes updated via webhooks.</p>
        </div>
        <div class="s-feat">
          <span style="font-size:1.8rem;">🤝</span>
          <h4>Omnichannel WhatsApp Sync</h4>
          <p>Integrate SMS triggers directly alongside WhatsApp and Instagram campaigns for true omnichannel conversion.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="s-section" id="cta">
    <div class="s-container">
      <div class="s-cta-box">
        <span class="s-badge" style="background:rgba(255,255,255,.2);color:#FFFFFF;border-color:rgba(255,255,255,.35);">
          Get Started
        </span>
        <h2>Connect Your SMS Channel Today</h2>
        <p>Scale your notifications, OTPs, and broadcasts with HelloBotz high-throughput enterprise SMS infrastructure.</p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
          <a href="#contact-section" class="s-btn" style="background:#FFFFFF;color:#D97706;font-weight:800;">
            Connect SMS Channel 🚀
          </a>
          <a href="#contact-section" class="s-btn s-btn-leads">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified
          </a>
          <a href="#contact-section" class="s-btn" style="background:rgba(255,255,255,.15);color:#FFFFFF;border:1px solid #FFFFFF;">
            Get Custom Volume Pricing
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
$footerContactText = "Talk to our enterprise telecom specialists to get custom volume SMS pricing and DLT approval assistance.";
include __DIR__ . '/../../includes/footer.php';
?>
