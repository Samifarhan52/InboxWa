<?php
/**
 * InboxWa — Premium Global Contact & Presence Page
 * URL: /contact/index.php
 * Does not modify header, footer, mega menu, or global styles.
 */
$basePath = '../';
$pageTitle = 'Contact | InboxWa – Global Presence';
$pageDescription = 'Talk to InboxWa sales, support, partnership or custom integration teams. Head Office Bangalore, Branch Office Surat. Book a demo or chat on WhatsApp.';
$pageKeywords = 'InboxWa contact, InboxWa support, InboxWa sales, WhatsApp API demo, InboxWa Bangalore, InboxWa Surat, book demo';
$canonicalUrl = 'https://inboxwa.com/contact/';
include __DIR__ . '/../includes/header.php';

require_once __DIR__ . '/../config/cms.php';
$contactConfig = @include __DIR__ . '/../config/contact.php';
if (!is_array($contactConfig)) {
  $contactConfig = [
    'support_whatsapp' => '918050854445',
    'sales_email' => 'mail@inboxwa.com',
    'support_email' => 'support@inboxwa.com',
  ];
}
$waRaw = cms_setting('support_whatsapp', $contactConfig['support_whatsapp'] ?? '918050854445');
$wa = preg_replace('/\D/', '', $waRaw);
$waDisplay = cms_setting('phone_number', '+91 80508 54445');
$email = cms_setting('sales_email', $contactConfig['sales_email'] ?? 'mail@inboxwa.com');
$supportEmail = cms_setting('support_email', $contactConfig['support_email'] ?? 'support@inboxwa.com');
$waLink = 'https://wa.me/' . $wa . '?text=' . rawurlencode("Hi InboxWa, I'd like to connect.");
?>

<style>
/* Scoped Contact Page Styles — does not override global theme */
.ct-page { --ct-glass: rgba(255,255,255,.72); --ct-glass-bd: rgba(139,92,246,.12); }
.ct-page .section { padding: 4rem 0; }
.ct-page .section-alt { background: var(--bg2); }
.ct-page .section-header { text-align: center; max-width: 720px; margin: 0 auto 2.5rem; }
.ct-page .section-header .lead { margin-top: .75rem; font-size: 1.05rem; color: var(--t2); }

/* ——— HERO ——— */
.ct-hero {
  position: relative;
  padding: calc(var(--nav,72px) + 2.5rem) 0 3.5rem;
  overflow: hidden;
  background:
    radial-gradient(ellipse 80% 60% at 70% 20%, rgba(139,92,246,.12), transparent 50%),
    radial-gradient(ellipse 60% 50% at 20% 80%, rgba(6,182,212,.08), transparent 45%),
    linear-gradient(180deg, #F8FAFC 0%, #FFFFFF 100%);
}
.ct-hero-grid {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: 2.5rem;
  align-items: center;
}
.ct-hero-badge { margin-bottom: 1rem; }
.ct-hero h1 {
  font-size: clamp(2rem, 4.2vw, 3.1rem);
  letter-spacing: -.03em;
  line-height: 1.15;
  margin-bottom: 1rem;
}
.ct-hero .lead { font-size: 1.1rem; color: var(--t2); max-width: 34rem; margin-bottom: 1.75rem; }
.ct-hero-ctas { display: flex; flex-wrap: wrap; gap: .75rem; }

/* Animated global network visual */
.ct-network {
  position: relative;
  aspect-ratio: 1 / 1;
  max-width: 420px;
  margin: 0 auto;
  border-radius: 24px;
  background:
    radial-gradient(circle at 50% 50%, rgba(139,92,246,.08), transparent 65%),
    linear-gradient(145deg, #0F172A 0%, #1E1B4B 50%, #0F172A 100%);
  box-shadow: 0 25px 50px -12px rgba(15,23,42,.25), inset 0 1px 0 rgba(255,255,255,.06);
  overflow: hidden;
}
.ct-network::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(circle at 30% 35%, rgba(139,92,246,.35), transparent 25%),
    radial-gradient(circle at 70% 55%, rgba(6,182,212,.25), transparent 22%),
    radial-gradient(circle at 50% 75%, rgba(167,139,250,.2), transparent 20%);
  animation: ct-pulse 6s ease-in-out infinite;
}
@keyframes ct-pulse {
  0%, 100% { opacity: .7; }
  50% { opacity: 1; }
}
.ct-net-svg { position: absolute; inset: 0; width: 100%; height: 100%; }
.ct-net-center {
  position: absolute;
  left: 50%; top: 50%;
  transform: translate(-50%, -50%);
  z-index: 3;
  text-align: center;
}
.ct-net-logo {
  font-weight: 800;
  font-size: 1.15rem;
  letter-spacing: .08em;
  color: #fff;
  background: linear-gradient(135deg, #A78BFA, #22D3EE);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  text-shadow: 0 0 30px rgba(139,92,246,.5);
}
.ct-net-sub { font-size: .65rem; color: rgba(255,255,255,.5); letter-spacing: .12em; margin-top: .2rem; }
.ct-node {
  position: absolute;
  z-index: 2;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: .35rem;
}
.ct-node-dot {
  width: 12px; height: 12px;
  border-radius: 50%;
  background: #22D3EE;
  box-shadow: 0 0 0 4px rgba(34,211,238,.25), 0 0 16px rgba(34,211,238,.6);
  animation: ct-dot 2.5s ease-in-out infinite;
}
.ct-node:nth-child(2) .ct-node-dot { animation-delay: .4s; background: #A78BFA; box-shadow: 0 0 0 4px rgba(167,139,250,.25), 0 0 16px rgba(167,139,250,.6); }
.ct-node:nth-child(3) .ct-node-dot { animation-delay: .8s; background: #34D399; box-shadow: 0 0 0 4px rgba(52,211,153,.25), 0 0 16px rgba(52,211,153,.6); }
@keyframes ct-dot {
  0%, 100% { transform: scale(1); }
  50% { transform: scale(1.25); }
}
.ct-node-label {
  font-size: .7rem;
  font-weight: 700;
  letter-spacing: .06em;
  color: rgba(255,255,255,.9);
  text-transform: uppercase;
  white-space: nowrap;
}
.ct-node-bangalore { top: 18%; left: 22%; }
.ct-node-surat { top: 42%; right: 14%; }

/* ——— QUICK CARDS ——— */
.ct-quick {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.15rem;
  margin-top: -1.5rem;
  position: relative;
  z-index: 2;
}
.ct-quick-card {
  background: var(--ct-glass);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border: 1px solid var(--ct-glass-bd);
  border-radius: var(--r2);
  padding: 1.5rem 1.25rem;
  box-shadow: var(--sh2);
  transition: transform .25s var(--ease), box-shadow .25s var(--ease);
  text-align: center;
}
.ct-quick-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--sh3);
  border-color: rgba(139,92,246,.28);
}
.ct-quick-icon {
  width: 48px; height: 48px;
  margin: 0 auto 1rem;
  border-radius: 14px;
  display: flex; align-items: center; justify-content: center;
  background: linear-gradient(135deg, var(--p-l), var(--p-m));
  color: var(--p2);
}
.ct-quick-icon svg { width: 24px; height: 24px; }
.ct-quick-card h3 { font-size: 1.05rem; margin-bottom: .4rem; }
.ct-quick-card p { font-size: .875rem; color: var(--t2); margin-bottom: 1rem; min-height: 2.6em; }
.ct-quick-card .btn { width: 100%; }

/* ——— FORM + WHATSAPP ——— */
.ct-form-grid {
  display: grid;
  grid-template-columns: 1.4fr 0.85fr;
  gap: 1.75rem;
  align-items: start;
}
.ct-form-card {
  background: rgba(255,255,255,.85);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border: 1px solid rgba(139,92,246,.15);
  border-radius: var(--r3);
  padding: 2rem;
  box-shadow: var(--sh2);
}
.ct-form-card h2 { margin-bottom: .35rem; font-size: 1.5rem; }
.ct-form-card .form-lead { color: var(--t3); font-size: .9rem; margin-bottom: 1.5rem; }
.ct-field { margin-bottom: 1.1rem; }
.ct-field label {
  display: block;
  font-size: .8rem;
  font-weight: 600;
  color: var(--t2);
  margin-bottom: .4rem;
}
.ct-field input,
.ct-field select,
.ct-field textarea {
  width: 100%;
  padding: .75rem 1rem;
  font-size: .95rem;
  border: 1.5px solid var(--bd);
  border-radius: var(--r);
  background: #fff;
  color: var(--t);
  transition: border-color .2s, box-shadow .2s;
  font-family: inherit;
}
.ct-field input:focus,
.ct-field select:focus,
.ct-field textarea:focus {
  outline: none;
  border-color: var(--p);
  box-shadow: 0 0 0 3px rgba(139,92,246,.15);
}
.ct-field textarea { min-height: 110px; resize: vertical; }
.ct-field-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
.ct-form-card .btn { width: 100%; margin-top: .5rem; }
.ct-form-success {
  display: none;
  text-align: center;
  padding: 2.5rem 1rem;
}
.ct-form-success.is-visible { display: block; }
.ct-form-success .ok-icon {
  width: 64px; height: 64px;
  margin: 0 auto 1.25rem;
  border-radius: 50%;
  background: var(--g-l);
  color: var(--g);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.75rem;
  font-weight: 700;
}
.ct-form-success h3 { margin-bottom: .5rem; }
.ct-form-success p { color: var(--t2); }

.ct-wa-card {
  background: linear-gradient(160deg, #0F172A 0%, #1E1B4B 60%, #0F172A 100%);
  border-radius: var(--r3);
  padding: 2rem 1.5rem;
  color: #fff;
  text-align: center;
  box-shadow: var(--sh3);
  position: sticky;
  top: calc(var(--nav,72px) + 1rem);
}
.ct-wa-card .wa-icon {
  width: 64px; height: 64px;
  margin: 0 auto 1.25rem;
  border-radius: 18px;
  background: #25D366;
  display: flex; align-items: center; justify-content: center;
  box-shadow: 0 8px 24px rgba(37,211,102,.4);
}
.ct-wa-card .wa-icon svg { width: 32px; height: 32px; fill: #fff; }
.ct-wa-card h3 { color: #fff; margin-bottom: .5rem; }
.ct-wa-card p { color: rgba(255,255,255,.7); font-size: .9rem; margin-bottom: 1.5rem; }
.ct-wa-card .btn-wa {
  background: #25D366;
  color: #fff;
  border: none;
  width: 100%;
  font-weight: 600;
  padding: .85rem 1.25rem;
  border-radius: var(--r4);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: .5rem;
  transition: transform .2s, box-shadow .2s;
}
.ct-wa-card .btn-wa:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(37,211,102,.45);
}
.ct-wa-meta { margin-top: 1.25rem; font-size: .8rem; color: rgba(255,255,255,.5); }

/* ——— OFFICE CARDS ——— */
.ct-offices {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.35rem;
}
.ct-office {
  background: #fff;
  border: 1px solid var(--bd);
  border-radius: var(--r3);
  padding: 1.75rem;
  box-shadow: var(--sh);
  transition: transform .25s, box-shadow .25s;
  position: relative;
  overflow: hidden;
}
.ct-office:hover { transform: translateY(-4px); box-shadow: var(--sh2); }
.ct-office::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--p), var(--a));
}
.ct-office-badge {
  display: inline-flex;
  padding: .25rem .65rem;
  font-size: .65rem;
  font-weight: 700;
  letter-spacing: .05em;
  text-transform: uppercase;
  border-radius: var(--r4);
  background: var(--p-l);
  color: var(--p2);
  margin-bottom: .85rem;
}
.ct-office h3 { font-size: 1.2rem; margin-bottom: .15rem; }
.ct-office .city { font-size: .9rem; color: var(--t3); margin-bottom: 1.15rem; }
.ct-office-detail {
  display: flex;
  align-items: flex-start;
  gap: .65rem;
  font-size: .875rem;
  color: var(--t2);
  margin-bottom: .65rem;
}
.ct-office-detail svg {
  width: 18px; height: 18px;
  flex-shrink: 0;
  color: var(--p);
  margin-top: 1px;
}
.ct-office .btn { margin-top: 1rem; width: 100%; }

/* ——— MAP ——— */
.ct-map-wrap {
  position: relative;
  border-radius: var(--r3);
  overflow: hidden;
  background: linear-gradient(160deg, #0F172A, #1E1B4B);
  min-height: 380px;
  box-shadow: var(--sh3);
}
.ct-map-svg {
  width: 100%;
  height: 100%;
  min-height: 380px;
  display: block;
}
.ct-map-marker {
  cursor: pointer;
  transition: transform .2s;
}
.ct-map-marker:hover { transform: scale(1.15); }
.ct-map-popup {
  position: absolute;
  background: #fff;
  border-radius: var(--r2);
  padding: 1.15rem 1.25rem;
  box-shadow: var(--sh3);
  min-width: 220px;
  z-index: 5;
  display: none;
  pointer-events: auto;
}
.ct-map-popup.is-open { display: block; animation: ct-fadeIn .2s ease; }
@keyframes ct-fadeIn { from { opacity: 0; transform: translateY(6px); } to { opacity: 1; transform: none; } }
.ct-map-popup h4 { font-size: 1rem; margin-bottom: .2rem; }
.ct-map-popup .type { font-size: .75rem; color: var(--p2); font-weight: 600; margin-bottom: .5rem; }
.ct-map-popup p { font-size: .85rem; color: var(--t2); margin-bottom: .35rem; }
.ct-map-popup .btn { margin-top: .65rem; font-size: .8rem; padding: .45rem 1rem; }
.ct-map-popup .close {
  position: absolute;
  top: .5rem; right: .65rem;
  font-size: 1.1rem;
  color: var(--t4);
  cursor: pointer;
  line-height: 1;
}

/* ——— 3-STEP JOURNEY ——— */
.ct-steps {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0;
  flex-wrap: wrap;
}
.ct-step {
  flex: 1;
  min-width: 180px;
  max-width: 260px;
  text-align: center;
  padding: 1.5rem 1rem;
}
.ct-step-num {
  width: 48px; height: 48px;
  margin: 0 auto 1rem;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--p), var(--a));
  color: #fff;
  font-weight: 800;
  font-size: 1.1rem;
  display: flex; align-items: center; justify-content: center;
  box-shadow: 0 6px 16px rgba(139,92,246,.35);
}
.ct-step h3 { font-size: 1rem; margin-bottom: .4rem; }
.ct-step p { font-size: .85rem; color: var(--t3); }
.ct-step-arrow {
  flex-shrink: 0;
  color: var(--p);
  font-size: 1.5rem;
  opacity: .5;
  padding: 0 .25rem;
}

/* ——— HELP CARDS ——— */
.ct-help {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
  gap: 1rem;
}
.ct-help-card {
  background: #fff;
  border: 1px solid var(--bd);
  border-radius: var(--r2);
  padding: 1.25rem 1rem;
  text-align: center;
  transition: all .25s var(--ease);
  display: block;
  color: inherit;
}
.ct-help-card:hover {
  border-color: var(--p);
  transform: translateY(-3px);
  box-shadow: var(--sh2);
  color: var(--p2);
}
.ct-help-card .icon {
  width: 40px; height: 40px;
  margin: 0 auto .75rem;
  border-radius: 10px;
  background: var(--p-l);
  color: var(--p2);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.15rem;
}
.ct-help-card span { font-size: .875rem; font-weight: 600; }

/* ——— JOURNEY SIM ——— */
.ct-journey {
  background: linear-gradient(160deg, #F5F3FF 0%, #ECFEFF 100%);
  border-radius: var(--r3);
  padding: 2.5rem 2rem;
  border: 1px solid rgba(139,92,246,.12);
  max-width: 640px;
  margin: 0 auto;
  box-shadow: var(--sh);
}
.ct-journey-screen { display: none; text-align: center; }
.ct-journey-screen.is-active { display: block; animation: ct-fadeIn .25s ease; }
.ct-journey-screen h3 { margin-bottom: 1.25rem; }
.ct-journey-opts {
  display: flex;
  flex-wrap: wrap;
  gap: .75rem;
  justify-content: center;
}
.ct-journey-btn {
  padding: .75rem 1.25rem;
  border-radius: var(--r4);
  border: 1.5px solid var(--bd);
  background: #fff;
  font-weight: 600;
  font-size: .9rem;
  cursor: pointer;
  transition: all .2s;
}
.ct-journey-btn:hover {
  border-color: var(--p);
  color: var(--p2);
  background: var(--p-l);
}
.ct-journey-fields { text-align: left; max-width: 400px; margin: 0 auto 1.25rem; }
.ct-journey-done .ok {
  width: 56px; height: 56px;
  margin: 0 auto 1rem;
  border-radius: 50%;
  background: var(--g-l);
  color: var(--g);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.5rem; font-weight: 700;
}

/* ——— DEMO SECTION ——— */
.ct-demo-card {
  background: linear-gradient(135deg, #0F172A 0%, #312E81 50%, #0F172A 100%);
  border-radius: var(--r3);
  padding: 2.5rem 2rem;
  color: #fff;
  text-align: center;
  box-shadow: var(--sh3);
}
.ct-demo-card h2 { color: #fff; margin-bottom: .5rem; }
.ct-demo-card p { color: rgba(255,255,255,.7); max-width: 480px; margin: 0 auto 1.5rem; }
.ct-demo-tags {
  display: flex;
  flex-wrap: wrap;
  gap: .5rem;
  justify-content: center;
  margin-bottom: 1.75rem;
}
.ct-demo-tags span {
  padding: .35rem .85rem;
  border-radius: var(--r4);
  background: rgba(255,255,255,.1);
  border: 1px solid rgba(255,255,255,.15);
  font-size: .8rem;
  font-weight: 600;
  color: rgba(255,255,255,.9);
}

/* ——— SUPPORT ——— */
.ct-support {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
  gap: 1rem;
}
.ct-support-card {
  background: #fff;
  border: 1px solid var(--bd);
  border-radius: var(--r2);
  padding: 1.25rem;
  text-align: center;
  transition: all .25s;
}
.ct-support-card:hover { border-color: var(--a); box-shadow: var(--sh); }
.ct-support-card h4 { font-size: .95rem; margin-bottom: .25rem; }
.ct-support-card p { font-size: .8rem; color: var(--t3); }

/* ——— GLOBAL TEAM ——— */
.ct-team-visual {
  position: relative;
  max-width: 520px;
  margin: 0 auto;
  aspect-ratio: 1.6 / 1;
  border-radius: var(--r3);
  background: linear-gradient(145deg, #0F172A, #1E1B4B);
  overflow: hidden;
  box-shadow: var(--sh3);
}
.ct-team-center {
  position: absolute;
  left: 50%; top: 50%;
  transform: translate(-50%, -50%);
  font-weight: 800;
  font-size: 1.1rem;
  letter-spacing: .1em;
  background: linear-gradient(135deg, #A78BFA, #22D3EE);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  z-index: 2;
}
.ct-team-node {
  position: absolute;
  font-size: .75rem;
  font-weight: 700;
  color: rgba(255,255,255,.85);
  letter-spacing: .04em;
  text-transform: uppercase;
}
.ct-team-node::before {
  content: '';
  display: block;
  width: 10px; height: 10px;
  border-radius: 50%;
  background: #22D3EE;
  margin: 0 auto .35rem;
  box-shadow: 0 0 12px rgba(34,211,238,.6);
}
.ct-team-india { top: 22%; left: 18%; }
.ct-team-global { bottom: 20%; left: 50%; transform: translateX(-50%); }

/* ——— LOGO SLIDER ——— */
.ct-logos {
  display: flex;
  gap: 2rem;
  overflow-x: auto;
  padding: 1rem 0;
  scrollbar-width: none;
  -ms-overflow-style: none;
  justify-content: center;
  flex-wrap: wrap;
}
.ct-logos::-webkit-scrollbar { display: none; }
.ct-logo-slot {
  width: 120px;
  height: 56px;
  border-radius: var(--r);
  background: var(--bg2);
  border: 1px dashed var(--bd2);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: .7rem;
  color: var(--t4);
  font-weight: 600;
  flex-shrink: 0;
}

/* ——— REACH US ——— */
.ct-reach {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
  gap: 1rem;
}
.ct-reach-card {
  background: #fff;
  border: 1px solid var(--bd);
  border-radius: var(--r2);
  padding: 1.35rem;
  text-align: center;
  transition: all .25s;
}
.ct-reach-card:hover { border-color: var(--p); box-shadow: var(--sh); }
.ct-reach-card .icon {
  width: 40px; height: 40px;
  margin: 0 auto .75rem;
  border-radius: 10px;
  background: var(--p-l);
  color: var(--p2);
  display: flex; align-items: center; justify-content: center;
}
.ct-reach-card h4 { font-size: .95rem; margin-bottom: .3rem; }
.ct-reach-card a, .ct-reach-card p { font-size: .85rem; color: var(--t2); }
.ct-reach-card a:hover { color: var(--p2); }

/* ——— OFFICE IMAGES ——— */
.ct-office-imgs {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.25rem;
}
.ct-office-img {
  position: relative;
  aspect-ratio: 16 / 9;
  border-radius: var(--r2);
  overflow: hidden;
  background: linear-gradient(135deg, #1E1B4B, #0F172A);
}
.ct-office-img img {
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform .4s var(--ease);
}
.ct-office-img:hover img { transform: scale(1.06); }
.ct-office-img .overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(15,23,42,.75) 0%, transparent 50%);
  pointer-events: none;
}
.ct-office-img .badge-loc {
  position: absolute;
  bottom: 1rem; left: 1rem;
  padding: .3rem .75rem;
  border-radius: var(--r4);
  background: rgba(255,255,255,.95);
  font-size: .7rem;
  font-weight: 700;
  color: var(--t);
  letter-spacing: .03em;
}

/* ——— FAQ ——— */
.ct-faq { max-width: 720px; margin: 0 auto; }
.ct-faq-item {
  border: 1px solid var(--bd);
  border-radius: var(--r2);
  margin-bottom: .75rem;
  background: #fff;
  overflow: hidden;
}
.ct-faq-q {
  width: 100%;
  text-align: left;
  padding: 1.1rem 1.25rem;
  font-weight: 600;
  font-size: .95rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  cursor: pointer;
  background: none;
  border: none;
  color: var(--t);
  font-family: inherit;
}
.ct-faq-q:hover { color: var(--p2); }
.ct-faq-q .chev {
  flex-shrink: 0;
  transition: transform .25s;
  color: var(--t4);
}
.ct-faq-item.is-open .ct-faq-q .chev { transform: rotate(180deg); color: var(--p); }
.ct-faq-a {
  display: none;
  padding: 0 1.25rem 1.15rem;
  font-size: .9rem;
  color: var(--t2);
  line-height: 1.6;
}
.ct-faq-item.is-open .ct-faq-a { display: block; }

/* ——— FINAL CTA ——— */
.ct-final {
  background: linear-gradient(135deg, #6D28D9 0%, #7C3AED 40%, #06B6D4 100%);
  padding: 4rem 0;
  text-align: center;
  color: #fff;
}
.ct-final h2 { color: #fff; margin-bottom: .75rem; }
.ct-final p { color: rgba(255,255,255,.85); max-width: 520px; margin: 0 auto 1.75rem; }
.ct-final-ctas { display: flex; flex-wrap: wrap; gap: .75rem; justify-content: center; }
.ct-final .btn-white { background: #fff; color: var(--p2); }
.ct-final .btn-outline-white {
  background: transparent;
  color: #fff;
  border: 2px solid rgba(255,255,255,.5);
}
.ct-final .btn-outline-white:hover { background: rgba(255,255,255,.15); border-color: #fff; }
.ct-final .btn-wa-final {
  background: #25D366;
  color: #fff;
  border: none;
}

/* ——— RESPONSIVE ——— */
@media (max-width: 960px) {
  .ct-hero-grid { grid-template-columns: 1fr; text-align: center; }
  .ct-hero .lead { margin-left: auto; margin-right: auto; }
  .ct-hero-ctas { justify-content: center; }
  .ct-network { max-width: 340px; }
  .ct-quick { grid-template-columns: repeat(2, 1fr); }
  .ct-form-grid { grid-template-columns: 1fr; }
  .ct-wa-card { position: static; }
  .ct-offices { grid-template-columns: 1fr; }
  .ct-office-imgs { grid-template-columns: 1fr; }
  .ct-steps { flex-direction: column; }
  .ct-step-arrow { transform: rotate(90deg); padding: .25rem 0; }
}
@media (max-width: 560px) {
  .ct-quick { grid-template-columns: 1fr; }
  .ct-field-row { grid-template-columns: 1fr; }
  .ct-hero { padding-top: calc(var(--nav,72px) + 1.5rem); }
  .ct-form-card { padding: 1.35rem; }
  .ct-journey { padding: 1.5rem 1rem; }
  .ct-help { grid-template-columns: repeat(2, 1fr); }
  .ct-map-wrap { min-height: 300px; }
  .ct-map-svg { min-height: 300px; }
}
</style>

<div class="ct-page">

<!-- ========== 1. HERO ========== -->
<section class="ct-hero">
  <div class="container">
    <nav style="font-size:.85rem;color:var(--t3);margin-bottom:1.5rem">
      <a href="<?php echo $bp; ?>">Home</a> / <a href="<?php echo $bp; ?>company/">Company</a> / Contact
    </nav>
    <div class="ct-hero-grid">
      <div class="reveal">
        <span class="badge badge-primary ct-hero-badge">GLOBAL PRESENCE</span>
        <h1>Let’s Build Something Powerful Together</h1>
        <p class="lead">Whether you need a product demo, sales consultation, technical support or a custom business solution, our team is ready to help.</p>
        <div class="ct-hero-ctas">
          <a href="#contact-form" class="btn btn-primary btn-lg btn-demo-open">Book a Demo</a>
          <a href="#contact-form" class="btn btn-outline btn-lg">Contact Sales</a>
        </div>
      </div>
      <div class="ct-network reveal" aria-hidden="true">
        <svg class="ct-net-svg" viewBox="0 0 400 400" fill="none">
          <circle cx="200" cy="200" r="90" stroke="rgba(139,92,246,.25)" stroke-width="1" stroke-dasharray="4 6"/>
          <circle cx="200" cy="200" r="130" stroke="rgba(6,182,212,.15)" stroke-width="1" stroke-dasharray="3 8"/>
          <line x1="110" y1="100" x2="200" y2="200" stroke="rgba(167,139,250,.4)" stroke-width="1.5"/>
          <line x1="310" y1="170" x2="200" y2="200" stroke="rgba(34,211,238,.35)" stroke-width="1.5"/>
          <line x1="180" y1="310" x2="200" y2="200" stroke="rgba(52,211,153,.35)" stroke-width="1.5"/>
          <line x1="110" y1="100" x2="310" y2="170" stroke="rgba(255,255,255,.08)" stroke-width="1"/>
          <line x1="310" y1="170" x2="180" y2="310" stroke="rgba(255,255,255,.08)" stroke-width="1"/>
        </svg>
        <div class="ct-node ct-node-bangalore">
          <div class="ct-node-dot"></div>
          <span class="ct-node-label">Bangalore</span>
        </div>
        <div class="ct-node ct-node-surat">
          <div class="ct-node-dot"></div>
          <span class="ct-node-label">Surat</span>
        </div>
        <div class="ct-net-center">
          <div class="ct-net-logo">INBOXWA</div>
          <div class="ct-net-sub">GLOBAL NETWORK</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== 2. QUICK CONTACT CARDS ========== -->
<section class="section" style="padding-top:0;padding-bottom:2rem">
  <div class="container">
    <div class="ct-quick">
      <div class="ct-quick-card reveal">
        <div class="ct-quick-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
        </div>
        <h3>Sales</h3>
        <p>Talk to our sales team.</p>
        <a href="#contact-form" class="btn btn-primary btn-sm">Book a Demo</a>
      </div>
      <div class="ct-quick-card reveal">
        <div class="ct-quick-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
        </div>
        <h3>Support</h3>
        <p>Get help with your InboxWa account.</p>
        <a href="<?php echo $bp; ?>resources/help-center/" class="btn btn-outline btn-sm">Get Support</a>
      </div>
      <div class="ct-quick-card reveal">
        <div class="ct-quick-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
        </div>
        <h3>Partnership</h3>
        <p>Explore agency, affiliate and whitelabel opportunities.</p>
        <a href="<?php echo $bp; ?>partners/" class="btn btn-outline btn-sm">Become a Partner</a>
      </div>
      <div class="ct-quick-card reveal">
        <div class="ct-quick-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
        <h3>Custom Integration</h3>
        <p>Need API, webhook or custom integration?</p>
        <a href="#contact-form" class="btn btn-outline btn-sm" data-interest="Custom API / Webhooks">Talk to Developer</a>
      </div>
    </div>
  </div>
</section>

<!-- ========== 3. MAIN CONTACT FORM + WHATSAPP ========== -->
<section class="section section-alt" id="contact-form">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">GET IN TOUCH</span>
      <h2>Tell Us How We Can Help</h2>
      <p class="lead">Share your requirement and our team will connect you with the right people.</p>
    </div>
    <div class="ct-form-grid">
      <div class="ct-form-card reveal">
        <div id="ct-form-body">
          <h2>Send a Message</h2>
          <p class="form-lead">We typically respond within a few business hours.</p>
          <form id="ct-contact-form" action="#" method="post" novalidate>
            <div class="ct-field-row">
              <div class="ct-field">
                <label for="ct-name">Full Name *</label>
                <input type="text" id="ct-name" name="full_name" required placeholder="Your name" autocomplete="name">
              </div>
              <div class="ct-field">
                <label for="ct-business">Business Name *</label>
                <input type="text" id="ct-business" name="business_name" required placeholder="Company name" autocomplete="organization">
              </div>
            </div>
            <div class="ct-field-row">
              <div class="ct-field">
                <label for="ct-email">Work Email *</label>
                <input type="email" id="ct-email" name="email" required placeholder="you@company.com" autocomplete="email">
              </div>
              <div class="ct-field">
                <label for="ct-phone">Phone / WhatsApp *</label>
                <input type="tel" id="ct-phone" name="phone" required placeholder="+91 98765 43210" autocomplete="tel">
              </div>
            </div>
            <div class="ct-field-row">
              <div class="ct-field">
                <label for="ct-country">Country *</label>
                <input type="text" id="ct-country" name="country" required placeholder="India" autocomplete="country-name">
              </div>
              <div class="ct-field">
                <label for="ct-interest">I’m Interested In *</label>
                <select id="ct-interest" name="interest" required>
                  <option value="">Select…</option>
                  <option value="Product Demo">Product Demo</option>
                  <option value="Sales">Sales</option>
                  <option value="WhatsApp API">WhatsApp API</option>
                  <option value="Automation">Automation</option>
                  <option value="CRM Integration">CRM Integration</option>
                  <option value="Custom API / Webhooks">Custom API / Webhooks</option>
                  <option value="Partnership">Partnership</option>
                  <option value="Support">Support</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </div>
            <div class="ct-field">
              <label for="ct-message">Message</label>
              <textarea id="ct-message" name="message" placeholder="Tell us about your requirement"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
          </form>
        </div>
        <div class="ct-form-success" id="ct-form-success">
          <div class="ok-icon"><svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <h3>Thanks! Your message has been sent.</h3>
          <p id="ct-success-desc">An email notification has been dispatched to our team at <strong><?php echo htmlspecialchars($email); ?></strong> and WhatsApp.</p>
          <div style="margin-top:1.25rem;">
            <a href="<?php echo htmlspecialchars($waLink); ?>" id="ct-success-wa-btn" class="btn btn-primary" target="_blank" rel="noopener">Continue on WhatsApp (<?php echo htmlspecialchars($waDisplay); ?>)</a>
          </div>
        </div>
      </div>
      <div class="ct-wa-card reveal">
        <div class="wa-icon">
          <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <h3>Prefer WhatsApp?</h3>
        <p>Start a conversation with our team directly.</p>
        <a href="<?php echo htmlspecialchars($waLink); ?>" class="btn-wa" target="_blank" rel="noopener">Chat on WhatsApp</a>
        <p class="ct-wa-meta">Instant response via WhatsApp</p>
      </div>
    </div>
  </div>
</section>

<!-- ========== 4. GLOBAL PRESENCE ========== -->
<section class="section" id="offices">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">OFFICES</span>
      <h2>Our Global Presence</h2>
      <p class="lead">InboxWa AI Technologies Pvt Ltd — growing from India to a global technology presence.</p>
    </div>
    <div class="ct-offices">
      <div class="ct-office reveal">
        <span class="ct-office-badge">HEAD OFFICE</span>
        <h3>🇮🇳 Bangalore</h3>
        <p class="city">Head Office · India</p>
        <div class="ct-office-detail">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <span>Bangalore, India</span>
        </div>
        <div class="ct-office-detail">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          <span><a href="<?php echo htmlspecialchars($waLink); ?>" target="_blank" rel="noopener">Chat / Call on WhatsApp</a></span>
        </div>
        <div class="ct-office-detail">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/></svg>
          <span><a href="mailto:<?php echo htmlspecialchars($email); ?>">Send Email</a></span>
        </div>
        <a href="https://www.google.com/maps/search/InboxWa+Bangalore" class="btn btn-outline btn-sm" target="_blank" rel="noopener">Get Directions</a>
      </div>
      <div class="ct-office reveal">
        <span class="ct-office-badge">BRANCH OFFICE</span>
        <h3>🇮🇳 Surat</h3>
        <p class="city">Branch Office · India</p>
        <div class="ct-office-detail">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <span>Surat, India</span>
        </div>
        <div class="ct-office-detail">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          <span><a href="<?php echo htmlspecialchars($waLink); ?>" target="_blank" rel="noopener">Chat / Call on WhatsApp</a></span>
        </div>
        <div class="ct-office-detail">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/></svg>
          <span><a href="mailto:<?php echo htmlspecialchars($email); ?>">Send Email</a></span>
        </div>
        <a href="https://www.google.com/maps/search/InboxWa+Surat" class="btn btn-outline btn-sm" target="_blank" rel="noopener">Get Directions</a>
      </div></div>
  </div>
</section>

<!-- ========== 5. INTERACTIVE MAP ========== -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">LOCATIONS</span>
      <h2>Find Us Around the World</h2>
      <p class="lead">Click a marker to view office details.</p>
    </div>
    <div class="ct-map-wrap reveal" id="ct-map">
      <svg class="ct-map-svg" viewBox="0 0 800 400" preserveAspectRatio="xMidYMid meet">
        <!-- Simplified world outline focus India + Gulf -->
        <ellipse cx="400" cy="200" rx="320" ry="140" fill="rgba(139,92,246,.06)" stroke="rgba(139,92,246,.15)" stroke-width="1"/>
        <ellipse cx="400" cy="200" rx="220" ry="100" fill="rgba(6,182,212,.04)" stroke="rgba(6,182,212,.1)" stroke-width="1"/>
        <!-- India region -->
        <path d="M480 160 Q500 140 520 165 Q530 190 510 210 Q490 220 470 200 Q460 180 480 160Z" fill="rgba(167,139,250,.2)" stroke="rgba(167,139,250,.4)" stroke-width="1.5"/>
        <!-- Gulf region -->
        <path d="M380 175 Q400 160 415 180 Q410 200 390 195 Q370 190 380 175Z" fill="rgba(34,211,238,.2)" stroke="rgba(34,211,238,.4)" stroke-width="1.5"/>
        <!-- Connection lines -->
        
        <line x1="500" y1="185" x2="480" y2="200" stroke="rgba(255,255,255,.1)" stroke-width="1" stroke-dasharray="4 4"/>
        <!-- Markers -->
        <g class="ct-map-marker" data-office="bangalore" transform="translate(500,185)">
          <circle r="14" fill="rgba(139,92,246,.3)"/>
          <circle r="7" fill="#A78BFA"/>
          <circle r="3" fill="#fff"/>
        </g>
        <g class="ct-map-marker" data-office="surat" transform="translate(480,200)">
          <circle r="14" fill="rgba(6,182,212,.3)"/>
          <circle r="7" fill="#22D3EE"/>
          <circle r="3" fill="#fff"/>
        </g>
        <text x="500" y="165" text-anchor="middle" fill="rgba(255,255,255,.7)" font-size="11" font-weight="600">Bangalore</text>
        <text x="480" y="225" text-anchor="middle" fill="rgba(255,255,255,.7)" font-size="11" font-weight="600">Surat</text>
      </svg>
      <div class="ct-map-popup" id="ct-map-popup">
        <span class="close" id="ct-map-close">&times;</span>
        <h4 id="ct-pop-name">—</h4>
        <div class="type" id="ct-pop-type">—</div>
        <p id="ct-pop-city">—</p>
        <p id="ct-pop-contact">—</p>
        <a id="ct-pop-dir" href="#" class="btn btn-primary btn-sm" target="_blank" rel="noopener">Get Directions</a>
      </div>
    </div>
  </div>
</section>

<!-- ========== 6. OFFICE EXPERIENCE / 3-STEP ========== -->
<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">HOW IT WORKS</span>
      <h2>Connect With the Right Team</h2>
    </div>
    <div class="ct-steps reveal">
      <div class="ct-step">
        <div class="ct-step-num">01</div>
        <h3>Tell Us Your Requirement</h3>
        <p>Share what you need — demo, sales, support or custom work.</p>
      </div>
      <div class="ct-step-arrow" aria-hidden="true">→</div>
      <div class="ct-step">
        <div class="ct-step-num">02</div>
        <h3>We Connect You With the Right Team</h3>
        <p>Sales, support or engineering — matched to your request.</p>
      </div>
      <div class="ct-step-arrow" aria-hidden="true">→</div>
      <div class="ct-step">
        <div class="ct-step-num">03</div>
        <h3>Start Building Your Solution</h3>
        <p>From first call to live automation on WhatsApp and beyond.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========== 7. WHAT CAN WE HELP WITH ========== -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">SOLUTIONS</span>
      <h2>How Can We Help Your Business?</h2>
    </div>
    <div class="ct-help">
      <a href="<?php echo $bp; ?>products/whatsapp-api/" class="ct-help-card reveal"><div class="icon"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div><span>WhatsApp API</span></a>
      <a href="<?php echo $bp; ?>products/automation/" class="ct-help-card reveal"><div class="icon"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div><span>Marketing Automation</span></a>
      <a href="<?php echo $bp; ?>solutions/sales/" class="ct-help-card reveal"><div class="icon"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div><span>Sales Automation</span></a>
      <a href="<?php echo $bp; ?>solutions/customer-support/" class="ct-help-card reveal"><div class="icon"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg></div><span>Customer Support</span></a>
      <a href="<?php echo $bp; ?>products/chatbot/" class="ct-help-card reveal"><div class="icon"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4"/><line x1="8" y1="16" x2="8.01" y2="16"/><line x1="16" y1="16" x2="16.01" y2="16"/></svg></div><span>Chatbot</span></a>
      <a href="<?php echo $bp; ?>products/crm/" class="ct-help-card reveal"><div class="icon"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>️</div><span>CRM Integration</span></a>
      <a href="<?php echo $bp; ?>solutions/payments/" class="ct-help-card reveal"><div class="icon"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg></div><span>E-commerce</span></a>
      <a href="<?php echo $bp; ?>solutions/appointment/" class="ct-help-card reveal"><div class="icon"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div><span>Appointment Automation</span></a>
      <a href="<?php echo $bp; ?>api/" class="ct-help-card reveal"><div class="icon"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v6M12 18v4M4.93 4.93l4.24 4.24M14.83 14.83l4.24 4.24M2 12h6M18 12h4M4.93 19.07l4.24-4.24M14.83 9.17l4.24-4.24"/></svg></div><span>API &amp; Webhooks</span></a>
      <a href="#contact-form" class="ct-help-card reveal" data-interest="Custom API / Webhooks"><div class="icon"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>️</div><span>Custom Integration</span></a>
      <a href="<?php echo $bp; ?>partners/" class="ct-help-card reveal"><div class="icon"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 17a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h5z"/><path d="M18 17a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h5z"/><path d="M16 11V7a4 4 0 0 0-8 0v4"/></svg></div><span>Agency Partnership</span></a>
      <a href="<?php echo $bp; ?>partners/" class="ct-help-card reveal"><div class="icon"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>️</div><span>Whitelabel</span></a>
    </div>
  </div>
</section>

<!-- ========== 8. CONTACT JOURNEY SIMULATION ========== -->
<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">INTERACTIVE</span>
      <h2>Choose What You Need</h2>
      <p class="lead">A quick guided path — or use the full form above.</p>
    </div>
    <div class="ct-journey reveal" id="ct-journey">
      <!-- Screen 1 -->
      <div class="ct-journey-screen is-active" data-step="1">
        <h3>What are you looking for?</h3>
        <div class="ct-journey-opts">
          <button type="button" class="ct-journey-btn" data-choice="Product Demo"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.71 1.26-1.5 1.5-2.5L4.5 16.5z"/><path d="M12 15l-3-3 7.5-7.5c1.5-1.5 4-2.5 4.5-2.5s-1 3-2.5 4.5L12 15z"/></svg> Product Demo</button>
          <button type="button" class="ct-journey-btn" data-choice="Sales"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg> Sales</button>
          <button type="button" class="ct-journey-btn" data-choice="Support"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg> Support</button>
          <button type="button" class="ct-journey-btn" data-choice="Partnership"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 17a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h5z"/><path d="M18 17a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h5z"/><path d="M16 11V7a4 4 0 0 0-8 0v4"/></svg> Partnership</button>
          <button type="button" class="ct-journey-btn" data-choice="Custom Integration"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg> Custom Integration</button>
        </div>
      </div>
      <!-- Screen 2 -->
      <div class="ct-journey-screen" data-step="2">
        <h3>Tell us about your business</h3>
        <div class="ct-journey-fields">
          <div class="ct-field">
            <label for="cj-biz">Business name</label>
            <input type="text" id="cj-biz" placeholder="Your company">
          </div>
          <div class="ct-field">
            <label for="cj-email">Work email</label>
            <input type="email" id="cj-email" placeholder="you@company.com">
          </div>
        </div>
        <button type="button" class="btn btn-primary ct-journey-next">Continue</button>
      </div>
      <!-- Screen 3 -->
      <div class="ct-journey-screen" data-step="3">
        <h3>Preferred contact method</h3>
        <div class="ct-journey-opts">
          <button type="button" class="ct-journey-btn" data-pref="Email">Email</button>
          <button type="button" class="ct-journey-btn" data-pref="WhatsApp">WhatsApp</button>
          <button type="button" class="ct-journey-btn" data-pref="Call">Call</button>
        </div>
      </div>
      <!-- Screen 4 done -->
      <div class="ct-journey-screen ct-journey-done" data-step="4">
        <div class="ok"><svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
        <h3>Request Submitted</h3>
        <p style="color:var(--t2);margin-bottom:1rem">Our team will contact you shortly.</p>
        <p style="font-size:.85rem;color:var(--t3)">This is a guided simulation. For a live request, use the form above or WhatsApp.</p>
        <button type="button" class="btn btn-outline btn-sm" id="ct-journey-reset" style="margin-top:1rem">Start over</button>
      </div>
    </div>
  </div>
</section>

<!-- ========== 9. SALES + DEMO ========== -->
<section class="section section-alt">
  <div class="container">
    <div class="ct-demo-card reveal">
      <h2>Want to See InboxWa in Action?</h2>
      <p>Book a personalized demo and explore how InboxWa can fit your business workflow.</p>
      <div class="ct-demo-tags">
        <span>WhatsApp</span>
        <span>Automation</span>
        <span>CRM</span>
        <span>Campaigns</span>
        <span>Chatbot</span>
        <span>Integrations</span>
      </div>
      <a href="#contact-form" class="btn btn-white btn-lg btn-demo-open">Book a Demo</a>
    </div>
  </div>
</section>

<!-- ========== 10. SUPPORT ========== -->
<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">SUPPORT</span>
      <h2>Already Using InboxWa?</h2>
      <p class="lead">Our support team is here to help.</p>
    </div>
    <div class="ct-support">
      <div class="ct-support-card reveal"><h4>Technical Support</h4><p>Platform &amp; delivery issues</p></div>
      <div class="ct-support-card reveal"><h4>Account Assistance</h4><p>Billing &amp; access</p></div>
      <div class="ct-support-card reveal"><h4>API Support</h4><p>Endpoints &amp; webhooks</p></div>
      <div class="ct-support-card reveal"><h4>Integration Help</h4><p>CRM &amp; tools setup</p></div>
      <div class="ct-support-card reveal"><h4>Campaign Assistance</h4><p>Broadcast &amp; templates</p></div>
    </div>
    <div class="text-center" style="margin-top:1.75rem">
      <a href="<?php echo $bp; ?>resources/help-center/" class="btn btn-primary">Contact Support</a>
      <a href="<?php echo htmlspecialchars($waLink); ?>" class="btn btn-outline" target="_blank" rel="noopener" style="margin-left:.5rem">WhatsApp Support</a>
    </div>
  </div>
</section>

<!-- ========== 11. GLOBAL TEAM ========== -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">TEAM</span>
      <h2>A Global Team. One Connected Platform.</h2>
    </div>
    <div class="ct-team-visual reveal">
      <div class="ct-team-node ct-team-india">India</div>
      
      <div class="ct-team-node ct-team-global">Global Customers</div>
      <div class="ct-team-center">INBOXWA</div>
      <svg style="position:absolute;inset:0;width:100%;height:100%" viewBox="0 0 400 250" fill="none">
        <line x1="90" y1="70" x2="200" y2="125" stroke="rgba(167,139,250,.35)" stroke-width="1.5"/>
        <line x1="320" y1="80" x2="200" y2="125" stroke="rgba(34,211,238,.35)" stroke-width="1.5"/>
        <line x1="200" y1="200" x2="200" y2="125" stroke="rgba(52,211,153,.35)" stroke-width="1.5"/>
      </svg>
    </div>
  </div>
</section>

<!-- ========== 12. CLIENT LOGO SLIDER ========== -->
<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">TRUST</span>
      <h2>Trusted by Growing Businesses</h2>
    </div>
    <div class="ct-logos reveal">
      <div class="ct-logo-slot">Client Logo 1</div>
      <div class="ct-logo-slot">Client Logo 2</div>
      <div class="ct-logo-slot">Client Logo 3</div>
      <div class="ct-logo-slot">Client Logo 4</div>
      <div class="ct-logo-slot">Client Logo 5</div>
      <div class="ct-logo-slot">Client Logo 6</div>
    </div>
  </div>
</section>

<!-- ========== 13. OTHER WAYS TO REACH US ========== -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">CHANNELS</span>
      <h2>Other Ways to Reach Us</h2>
    </div>
    <div class="ct-reach">
      <div class="ct-reach-card reveal">
        <div class="icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/></svg></div>
        <h4>Email</h4>
        <a href="mailto:<?php echo htmlspecialchars($email); ?>">Send Email</a>
      </div>
      <div class="ct-reach-card reveal">
        <div class="icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></div>
        <h4>WhatsApp</h4>
        <a href="<?php echo htmlspecialchars($waLink); ?>" target="_blank" rel="noopener">Chat on WhatsApp</a>
      </div>
      <div class="ct-reach-card reveal">
        <div class="icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
        <h4>Sales</h4>
        <a href="#contact-form">Contact sales team</a>
      </div>
      <div class="ct-reach-card reveal">
        <div class="icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg></div>
        <h4>Support</h4>
        <a href="<?php echo $bp; ?>resources/help-center/">Help center</a>
      </div>
      <div class="ct-reach-card reveal">
        <div class="icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <h4>Office</h4>
        <p>Bangalore · Surat</p>
      </div>
    </div>
  </div>
</section>

<!-- ========== 14. OFFICE IMAGES ========== -->
<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">SPACES</span>
      <h2>Our Offices</h2>
    </div>
    <div class="ct-office-imgs">
      <div class="ct-office-img reveal">
        <div style="width:100%;height:100%;background:linear-gradient(135deg,#312E81,#1E1B4B);display:flex;align-items:center;justify-content:center">
          <span style="color:rgba(255,255,255,.4);font-size:.85rem;font-weight:600">Bangalore Head Office</span>
        </div>
        <div class="overlay"></div>
        <span class="badge-loc">🇮🇳 Bangalore · Head Office</span>
      </div>
      <div class="ct-office-img reveal">
        <div style="width:100%;height:100%;background:linear-gradient(135deg,#0E7490,#164E63);display:flex;align-items:center;justify-content:center">
          <span style="color:rgba(255,255,255,.4);font-size:.85rem;font-weight:600">Surat Branch Office</span>
        </div>
        <div class="overlay"></div>
        <span class="badge-loc">🇮🇳 Surat · Branch Office</span>
      </div>
      <div class="ct-office-img reveal">
        <div style="width:100%;height:100%;background:linear-gradient(135deg,#065F46,#064E3B);display:flex;align-items:center;justify-content:center">
          <span style="color:rgba(255,255,255,.4);font-size:.85rem;font-weight:600">Global Presence</span>
        </div>
        <div class="overlay"></div>
        <span class="badge-loc"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg> Global Customers</span>
      </div>
    </div>
  </div>
</section>

<!-- ========== 15. FAQ ========== -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">FAQ</span>
      <h2>Frequently Asked Questions</h2>
    </div>
    <div class="ct-faq reveal">
      <div class="ct-faq-item">
        <button type="button" class="ct-faq-q" aria-expanded="false">Where is InboxWa headquartered? <span class="chev">▾</span></button>
        <div class="ct-faq-a">InboxWa is headquartered in Bangalore, India (Head Office). We also have a Branch Office in Surat, India.</div>
      </div>
      <div class="ct-faq-item">
        <button type="button" class="ct-faq-q" aria-expanded="false">Does InboxWa have offices in India? <span class="chev">▾</span></button>
        <div class="ct-faq-a">Yes. InboxWa has a Head Office in Bangalore and a Branch Office in Surat.</div>
      </div>
      <div class="ct-faq-item">
        <button type="button" class="ct-faq-q" aria-expanded="false">How can I book a product demo? <span class="chev">▾</span></button>
        <div class="ct-faq-a">Use the contact form on this page and select “Product Demo”, click Book a Demo, or message us on WhatsApp. Our team will schedule a personalized walkthrough.</div>
      </div>
      <div class="ct-faq-item">
        <button type="button" class="ct-faq-q" aria-expanded="false">How can I contact sales? <span class="chev">▾</span></button>
        <div class="ct-faq-a">Email <?php echo htmlspecialchars($email); ?>, chat on WhatsApp at <?php echo htmlspecialchars($waDisplay); ?>, or submit the form with interest “Sales”.</div>
      </div>
      <div class="ct-faq-item">
        <button type="button" class="ct-faq-q" aria-expanded="false">How can existing customers contact support? <span class="chev">▾</span></button>
        <div class="ct-faq-a">Visit our Help Center, use WhatsApp support, or submit the form with interest “Support”. Existing customers can also reach us through their account dashboard where available.</div>
      </div>
      <div class="ct-faq-item">
        <button type="button" class="ct-faq-q" aria-expanded="false">Can I discuss a custom integration? <span class="chev">▾</span></button>
        <div class="ct-faq-a">Yes. Select “Custom API / Webhooks” or “Custom Integration” on the form, or use the “Talk to Developer” card. Our team will review your requirements for APIs, webhooks and third-party systems.</div>
      </div>
      <div class="ct-faq-item">
        <button type="button" class="ct-faq-q" aria-expanded="false">How can I become a InboxWa partner? <span class="chev">▾</span></button>
        <div class="ct-faq-a">Visit our <a href="<?php echo $bp; ?>partners/">Partner Program</a> page for Affiliate, Agency and White Label options, or submit the form with interest “Partnership”.</div>
      </div>
    </div>
  </div>
</section>

<!-- ========== 16. FINAL CTA ========== -->
<section class="ct-final">
  <div class="container">
    <h2>Let’s Start a Conversation</h2>
    <p>Tell us what you want to build, automate or improve — our team will help you find the right solution.</p>
    <div class="ct-final-ctas">
      <a href="#contact-form" class="btn btn-white btn-lg btn-demo-open">Book a Demo</a>
      <a href="#contact-form" class="btn btn-outline-white btn-lg">Contact Sales</a>
      <a href="<?php echo htmlspecialchars($waLink); ?>" class="btn btn-wa-final btn-lg" target="_blank" rel="noopener">Chat on WhatsApp</a>
    </div>
  </div>
</section>

</div><!-- /.ct-page -->

<script>
(function () {
  'use strict';

  /* Form validation + submit handling */
  var form = document.getElementById('ct-contact-form');
  var formBody = document.getElementById('ct-form-body');
  var formSuccess = document.getElementById('ct-form-success');
  var successDesc = document.getElementById('ct-success-desc');
  var successWaBtn = document.getElementById('ct-success-wa-btn');
  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var required = form.querySelectorAll('[required]');
      var ok = true;
      required.forEach(function (el) {
        if (!el.value || !String(el.value).trim()) {
          ok = false;
          el.style.borderColor = '#EF4444';
        } else {
          el.style.borderColor = '';
        }
      });
      var email = document.getElementById('ct-email');
      if (email && email.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
        ok = false;
        email.style.borderColor = '#EF4444';
      }
      if (!ok) return;

      var name = (document.getElementById('ct-name') || {}).value || '';
      var business = (document.getElementById('ct-business') || {}).value || '';
      var emailVal = (email ? email.value.trim() : '');
      var phone = (document.getElementById('ct-phone') || {}).value || '';
      var country = (document.getElementById('ct-country') || {}).value || '';
      var interest = (document.getElementById('ct-interest') || {}).value || '';
      var message = (document.getElementById('ct-message') || {}).value || '';

      var isSupport = (interest === 'Support' || interest === 'Custom API / Webhooks');
      var type = isSupport ? 'support' : 'contact';
      var targetEmail = isSupport ? '<?php echo htmlspecialchars($supportEmail); ?>' : '<?php echo htmlspecialchars($email); ?>';

      var payload = {
        type: type,
        name: name,
        business: business,
        email: emailVal,
        phone: phone,
        country: country,
        requirement: interest,
        message: message,
        source_page: '/contact/'
      };

      var msg = (isSupport ? '*InboxWa Technical Support Request*\n\n' : '*New Contact Enquiry - InboxWa*\n\n') +
        'Name: ' + name + '\n' +
        (business ? 'Business: ' + business + '\n' : '') +
        (emailVal ? 'Email: ' + emailVal + '\n' : '') +
        'Phone: ' + phone + '\n' +
        (country ? 'Country: ' + country + '\n' : '') +
        (interest ? 'Interest: ' + interest + '\n' : '') +
        'Message: ' + (message || '—');

      var waUrl = 'https://wa.me/<?php echo $wa; ?>?text=' + encodeURIComponent(msg);

      // Dispatch to API endpoint (saves to DB and dispatches mail notification)
      try {
        fetch('/api/lead.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(payload),
          credentials: 'same-origin'
        }).then(function(res) { return res.json(); })
          .then(function(res) {
            if (res && res.whatsapp_url) {
              if (successWaBtn) successWaBtn.href = res.whatsapp_url;
            }
          }).catch(function() {});
      } catch (err) {}

      // Automatically open WhatsApp
      window.open(waUrl, '_blank', 'noopener,noreferrer');

      // Update success card
      if (formBody) formBody.style.display = 'none';
      if (formSuccess) {
        formSuccess.classList.add('is-visible');
        if (successDesc) {
          successDesc.innerHTML = 'Your message has been automatically dispatched to our team at <strong>' + targetEmail + '</strong> and WhatsApp. We look forward to speaking with you!';
        }
        if (successWaBtn) {
          successWaBtn.href = waUrl;
        }
      }
    });
  }

  /* Pre-fill interest from data-interest links */
  document.querySelectorAll('[data-interest]').forEach(function (el) {
    el.addEventListener('click', function () {
      var sel = document.getElementById('ct-interest');
      if (sel && el.getAttribute('data-interest')) {
        sel.value = el.getAttribute('data-interest');
      }
    });
  });

  /* Map markers */
  var offices = {
    bangalore: {
      name: 'Bangalore',
      type: 'Head Office',
      city: 'Bangalore, India',
      contact: '<?php echo htmlspecialchars($waDisplay . ' · ' . $email); ?>',
      dir: 'https://www.google.com/maps/search/InboxWa+Bangalore'
    },
    surat: {
      name: 'Surat',
      type: 'Branch Office',
      city: 'Surat, India',
      contact: '<?php echo htmlspecialchars($waDisplay . ' · ' . $email); ?>',
      dir: 'https://www.google.com/maps/search/InboxWa+Surat'
    },
  };
  var popup = document.getElementById('ct-map-popup');
  var mapWrap = document.getElementById('ct-map');
  document.querySelectorAll('.ct-map-marker').forEach(function (m) {
    m.addEventListener('click', function (e) {
      e.stopPropagation();
      var key = m.getAttribute('data-office');
      var o = offices[key];
      if (!o || !popup) return;
      document.getElementById('ct-pop-name').textContent = o.name;
      document.getElementById('ct-pop-type').textContent = o.type;
      document.getElementById('ct-pop-city').textContent = o.city;
      document.getElementById('ct-pop-contact').textContent = o.contact;
      var dir = document.getElementById('ct-pop-dir');
      if (dir) dir.href = o.dir;
      popup.classList.add('is-open');
      popup.style.left = '50%';
      popup.style.top = '50%';
      popup.style.transform = 'translate(-50%, -50%)';
    });
  });
  var mapClose = document.getElementById('ct-map-close');
  if (mapClose) mapClose.addEventListener('click', function () { popup.classList.remove('is-open'); });
  if (mapWrap) mapWrap.addEventListener('click', function () { if (popup) popup.classList.remove('is-open'); });

  /* Journey simulation */
  var journeyChoice = '';
  var journey = document.getElementById('ct-journey');
  function showStep(n) {
    if (!journey) return;
    journey.querySelectorAll('.ct-journey-screen').forEach(function (s) {
      s.classList.toggle('is-active', s.getAttribute('data-step') === String(n));
    });
  }
  if (journey) {
    journey.querySelectorAll('[data-choice]').forEach(function (btn) {
      btn.addEventListener('click', function () {
        journeyChoice = btn.getAttribute('data-choice');
        showStep(2);
      });
    });
    var nextBtn = journey.querySelector('.ct-journey-next');
    if (nextBtn) nextBtn.addEventListener('click', function () { showStep(3); });
    journey.querySelectorAll('[data-pref]').forEach(function (btn) {
      btn.addEventListener('click', function () { showStep(4); });
    });
    var reset = document.getElementById('ct-journey-reset');
    if (reset) reset.addEventListener('click', function () { showStep(1); });
  }

  /* FAQ accordion */
  document.querySelectorAll('.ct-faq-q').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = btn.closest('.ct-faq-item');
      var open = item.classList.contains('is-open');
      document.querySelectorAll('.ct-faq-item').forEach(function (i) {
        i.classList.remove('is-open');
        i.querySelector('.ct-faq-q').setAttribute('aria-expanded', 'false');
      });
      if (!open) {
        item.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

  /* Reveal on scroll (lightweight) */
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (en.isIntersecting) {
          en.target.style.opacity = '1';
          en.target.style.transform = 'none';
          io.unobserve(en.target);
        }
      });
    }, { threshold: 0.12 });
    document.querySelectorAll('.ct-page .reveal').forEach(function (el) {
      el.style.opacity = '0';
      el.style.transform = 'translateY(16px)';
      el.style.transition = 'opacity .5s var(--ease), transform .5s var(--ease)';
      io.observe(el);
    });
  }
})();
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
