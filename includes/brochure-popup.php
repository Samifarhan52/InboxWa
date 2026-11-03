<!-- =========================================================================
     OFFICIAL BROCHURE DOWNLOAD MODAL (Lead Capture + Instant PDF Delivery)
     ========================================================================= -->
<div class="popup-overlay" id="brochure-popup" role="dialog" aria-modal="true" aria-labelledby="brochure-title" hidden>
  <div class="popup-backdrop" data-close-brochure onclick="closeBrochureModal()"></div>
  <div class="popup-card brochure-popup-card">
    <button type="button" class="popup-close" data-close-brochure onclick="closeBrochureModal()" aria-label="Close">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>

    <div class="brochure-modal-header">
      <div class="brochure-badge">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;">
          <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
          <polyline points="14 2 14 8 20 8"/>
          <line x1="16" y1="13" x2="8" y2="13"/>
          <line x1="16" y1="17" x2="8" y2="17"/>
          <line x1="10" y1="9" x2="8" y2="9"/>
        </svg>
        <span>OFFICIAL 2026 BROCHURE • PDF (5.9 MB)</span>
      </div>
      <div id="brochure-title" class="modal-title brochure-heading">Download HelloBotz Brochure</div>
      <p class="popup-lead brochure-lead">
        Fill out your details below to instantly receive the complete 7-page guide: Meta Cloud API features, 0% markup rates, CRM inbox, and automated flow bot tools.
      </p>
    </div>

    <form id="brochure-form" action="javascript:void(0)" method="post" novalidate onsubmit="handleBrochureSubmit(event)">
      <div class="form-row">
        <div class="form-group">
          <label class="form-label" for="brochure-name">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block; vertical-align:-1px; margin-right:4px;"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            Full Name *
          </label>
          <input type="text" class="form-input" id="brochure-name" name="name" required autocomplete="name" placeholder="e.g. Rahul Sharma">
        </div>
        <div class="form-group">
          <label class="form-label" for="brochure-company">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block; vertical-align:-1px; margin-right:4px;"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
            Business / Company
          </label>
          <input type="text" class="form-input" id="brochure-company" name="company" autocomplete="organization" placeholder="e.g. Acme Enterprises">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label class="form-label" for="brochure-email">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block; vertical-align:-1px; margin-right:4px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Work Email *
          </label>
          <input type="email" class="form-input" id="brochure-email" name="email" required autocomplete="email" placeholder="rahul@company.com">
        </div>
        <div class="form-group">
          <label class="form-label" for="brochure-phone">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" style="display:inline-block; vertical-align:-1px; margin-right:4px;"><circle cx="12" cy="12" r="12" fill="#25D366"/><path d="M12.04 4C7.6 4 4 7.6 4 12.04c0 1.54.44 2.99 1.2 4.23L4 20l3.86-1.18c1.19.7 2.58 1.1 4.18 1.1 4.44 0 8.04-3.6 8.04-8.04 0-4.44-3.6-7.88-8.04-7.88zm4.73 11.23c-.2.56-1.17 1.07-1.63 1.14-.42.06-.97.09-2.77-.66-2.31-.96-3.8-3.32-3.91-3.48-.12-.15-.93-1.24-.93-2.36 0-1.12.59-1.67.8-1.9.21-.23.46-.29.62-.29.15 0 .31 0 .44.01.14.01.33-.05.51.39.19.45.65 1.58.71 1.7.06.11.1.25.02.4-.07.14-.11.24-.22.37-.12.13-.24.3-.35.4-.12.11-.24.23-.1.47.14.24.63 1.04 1.35 1.68.93.83 1.71 1.09 1.95 1.21.24.12.38.1.53-.06.14-.17.6-.7.76-.94.16-.24.32-.2.53-.12.22.08 1.38.65 1.62.77.24.12.4.18.46.28.06.1.06.6-.14 1.15z" fill="#FFFFFF"/></svg>
            WhatsApp Number *
          </label>
          <input type="tel" class="form-input" id="brochure-phone" name="phone" required autocomplete="tel" inputmode="tel" pattern="[0-9+]*" oninput="this.value = (this.value.startsWith('+') ? '+' : '') + this.value.replace(/\D/g, '')" placeholder="+91 98765 43210">
        </div>
      </div>

      <button type="submit" id="brochureSubmitBtn" class="btn btn-primary btn-block" style="margin-top: 0.75rem; padding: 0.85rem 1.5rem; font-size: 1rem; font-weight: 700; display: flex; align-items: center; justify-content: center; gap: 8px;">
        <span>Download Brochure (PDF)</span>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
      </button>

      <div class="brochure-trust-footer">
        <span class="trust-pill">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
          <span>Instant Download</span>
        </span>
        <span class="trust-pill">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
          <span>No Waiting</span>
        </span>
        <span class="trust-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="#0081FB" style="flex-shrink:0;">
            <path d="M2.035 13.42c.26-6.058 5.405-11.598 10.229-5.27c4.326-6.307 9.45-.643 9.679 4.959a7 7 0 0 1-.706 4.066a3.33 3.33 0 0 1-4.42 1.038c-1.43-.84-2.25-2.386-3.111-3.756c-.57-.944-1.141-1.877-1.701-2.832c-1.256 2.003-2.822 5.727-4.97 6.733a3.485 3.485 0 0 1-4.211-1.183a6.22 6.22 0 0 1-.789-3.755m18.02.623c-.083-2.563-.747-6.422-3.756-6.961c-1.41 0-2.272 1.317-2.998 2.344v.166c.789 1.162 1.473 2.396 2.21 3.59c.602.87 1.587 2.81 2.531 3.184c1.577.498 2.064-1.058 2.013-2.303zm-15.883-.25v.54a2.48 2.48 0 0 0 .56 1.701a1.46 1.46 0 0 0 1.691.27a5.5 5.5 0 0 0 1.608-1.712c1.038-1.473 1.92-3.008 2.915-4.502c0-.104-.176-.28-.217-.384c-.851-1.14-2.075-2.635-3.694-2.075-2.074 1.245-2.79 3.932-2.863 6.163"/>
          </svg>
          <span>0% Meta Markup</span>
        </span>
      </div>
    </form>

    <div id="brochure-success-box" class="brochure-success-box" style="display:none;">
      <div class="brochure-success-icon">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
      </div>
      <h3>Your Download Has Started!</h3>
      <p>
        Thank you for your interest in HelloBotz. Your official 7-page PDF brochure is downloading now.
      </p>
      <div style="margin-top: 1.25rem;">
        <a id="brochureDirectDownloadLink" href="/download-brochure.php" download="HelloBotz_Official_Brochure.pdf" class="btn btn-primary" style="display:inline-flex; align-items:center; gap:8px; padding: 0.75rem 1.4rem; text-decoration:none; font-weight:700;">
          <span>Click Here if Download Didn't Start</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
        </a>
      </div>
      <div style="font-size: 0.85rem; color: #64748B; margin-top: 1.25rem; line-height: 1.5;">
        Need instant answers about API pricing or onboarding? Chat directly on WhatsApp:
        <br>
        <a href="https://wa.me/918050854445?text=Hi%20HelloBotz%2C%20I%20just%20downloaded%20the%20brochure%20and%20would%20like%20to%20learn%20more." target="_blank" rel="noopener noreferrer" style="color: #10b981; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; margin-top: 4px;">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="none" style="vertical-align: middle;">
            <circle cx="12" cy="12" r="12" fill="#25D366"/>
            <path d="M12.04 4C7.6 4 4 7.6 4 12.04c0 1.54.44 2.99 1.2 4.23L4 20l3.86-1.18c1.19.7 2.58 1.1 4.18 1.1 4.44 0 8.04-3.6 8.04-8.04 0-4.44-3.6-7.88-8.04-7.88zm4.73 11.23c-.2.56-1.17 1.07-1.63 1.14-.42.06-.97.09-2.77-.66-2.31-.96-3.8-3.32-3.91-3.48-.12-.15-.93-1.24-.93-2.36 0-1.12.59-1.67.8-1.9.21-.23.46-.29.62-.29.15 0 .31 0 .44.01.14.01.33-.05.51.39.19.45.65 1.58.71 1.7.06.11.1.25.02.4-.07.14-.11.24-.22.37-.12.13-.24.3-.35.4-.12.11-.24.23-.1.47.14.24.63 1.04 1.35 1.68.93.83 1.71 1.09 1.95 1.21.24.12.38.1.53-.06.14-.17.6-.7.76-.94.16-.24.32-.2.53-.12.22.08 1.38.65 1.62.77.24.12.4.18.46.28.06.1.06.6-.14 1.15z" fill="#FFFFFF"/>
          </svg>
          <span>+91 80508 54445</span>
        </a>
      </div>
    </div>
  </div>
</div>

<style>
#brochure-popup {
  position: fixed !important;
  inset: 0 !important;
  z-index: 200000 !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  padding: 1.5rem 1rem !important;
}

#brochure-popup:not(.open):not(:not([hidden])) {
  opacity: 0 !important;
  visibility: hidden !important;
  pointer-events: none !important;
}

#brochure-popup.open,
#brochure-popup:not([hidden]) {
  opacity: 1 !important;
  visibility: visible !important;
  pointer-events: auto !important;
}

#brochure-popup .popup-backdrop {
  position: fixed !important;
  inset: 0 !important;
  z-index: 200001 !important;
  background: rgba(15, 23, 42, 0.72) !important;
  backdrop-filter: blur(8px) !important;
  -webkit-backdrop-filter: blur(8px) !important;
}

.brochure-popup-card {
  max-width: 520px !important;
  width: 95% !important;
  background: #ffffff !important;
  border-radius: 20px !important;
  padding: 2rem 2.25rem !important;
  box-shadow: 0 25px 60px -15px rgba(15, 23, 42, 0.45) !important;
  position: relative !important;
  z-index: 200010 !important;
  border: 1px solid rgba(226, 232, 240, 0.9) !important;
  animation: brochurePopIn 0.28s cubic-bezier(0.16, 1, 0.3, 1) forwards !important;
}

#brochure-popup .popup-close {
  position: absolute !important;
  top: 14px !important;
  right: 14px !important;
  z-index: 200020 !important;
  width: 36px !important;
  height: 36px !important;
  border-radius: 50% !important;
  background: #f1f5f9 !important;
  color: #0f172a !important;
  border: none !important;
  font-size: 1.4rem !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  cursor: pointer !important;
  transition: all 0.2s ease !important;
}

#brochure-popup .popup-close:hover {
  background: #e2e8f0 !important;
  transform: scale(1.08) !important;
}

#brochure-popup .form-label {
  display: block !important;
  font-size: 0.85rem !important;
  font-weight: 700 !important;
  color: #0f172a !important;
  margin-bottom: 0.35rem !important;
}

#brochure-popup .form-input {
  width: 100% !important;
  box-sizing: border-box !important;
  background: #ffffff !important;
  border: 1.5px solid #cbd5e1 !important;
  border-radius: 10px !important;
  padding: 0.65rem 0.9rem !important;
  font-size: 0.95rem !important;
  color: #0f172a !important;
  transition: border-color 0.2s, box-shadow 0.2s !important;
}

#brochure-popup .form-input:focus {
  outline: none !important;
  border-color: #10b981 !important;
  box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.18) !important;
}

@keyframes brochurePopIn {
  from { opacity: 0; transform: scale(0.95) translateY(12px); }
  to { opacity: 1; transform: scale(1) translateY(0); }
}

.brochure-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: rgba(16, 185, 129, 0.1);
  color: #059669;
  font-size: 0.72rem;
  font-weight: 800;
  letter-spacing: 0.05em;
  padding: 4px 10px;
  border-radius: 9999px;
  margin-bottom: 0.65rem;
  border: 1px solid rgba(16, 185, 129, 0.2);
}

.brochure-heading {
  font-size: 1.55rem !important;
  font-weight: 800 !important;
  color: #0F172A !important;
  letter-spacing: -0.02em !important;
  margin-bottom: 0.45rem !important;
  line-height: 1.25 !important;
}

.brochure-lead {
  font-size: 0.9rem !important;
  color: #64748B !important;
  margin-bottom: 1.25rem !important;
  line-height: 1.5 !important;
}

.brochure-trust-footer {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  margin-top: 1rem;
  padding-top: 0.85rem;
  border-top: 1px solid #f1f5f9;
  flex-wrap: wrap;
}

.brochure-trust-footer .trust-pill {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 0.76rem;
  color: #475569;
  font-weight: 600;
  background: #f8fafc;
  padding: 4px 10px;
  border-radius: 9999px;
  border: 1px solid #e2e8f0;
}

.brochure-success-box {
  text-align: center;
  padding: 1rem 0.5rem;
}

.brochure-success-icon {
  width: 58px;
  height: 58px;
  background: #dcfce7;
  color: #16a34a;
  font-size: 1.75rem;
  font-weight: 800;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 1rem;
  box-shadow: 0 8px 20px -4px rgba(22, 163, 74, 0.3);
}

.brochure-success-box h3 {
  font-size: 1.4rem;
  font-weight: 800;
  color: #0F172A;
  margin: 0 0 0.5rem 0;
}

.brochure-success-box p {
  font-size: 0.92rem;
  color: #64748B;
  line-height: 1.5;
  max-width: 420px;
  margin: 0 auto;
}

/* Dark theme support */
html[data-theme="dark"] #brochure-popup .brochure-popup-card,
body.dark-theme #brochure-popup .brochure-popup-card,
[data-theme="dark"] #brochure-popup .brochure-popup-card {
  background: #0f172a !important;
  border-color: rgba(255, 255, 255, 0.12) !important;
  color: #f8fafc !important;
}
html[data-theme="dark"] #brochure-popup .brochure-heading,
body.dark-theme #brochure-popup .brochure-heading {
  color: #ffffff !important;
}
html[data-theme="dark"] #brochure-popup .brochure-lead {
  color: #94a3b8 !important;
}
html[data-theme="dark"] #brochure-popup .form-label {
  color: #e2e8f0 !important;
}
html[data-theme="dark"] #brochure-popup .form-input {
  background: #1e293b !important;
  border-color: #334155 !important;
  color: #ffffff !important;
}
html[data-theme="dark"] #brochure-popup .popup-close {
  background: #1e293b !important;
  color: #f8fafc !important;
}
html[data-theme="dark"] #brochure-popup .trust-pill,
body.dark-theme #brochure-popup .trust-pill,
[data-theme="dark"] #brochure-popup .trust-pill {
  background: #1e293b !important;
  border-color: #334155 !important;
  color: #cbd5e1 !important;
}

@media (max-width: 640px) {
  .brochure-popup-card {
    padding: 1.25rem 1rem !important;
    max-height: 88vh !important;
    overflow-y: auto !important;
    -webkit-overflow-scrolling: touch !important;
    width: 96% !important;
    max-width: min(480px, calc(100vw - 1.25rem)) !important;
    margin: auto !important;
    border-radius: 16px !important;
  }
  .brochure-heading {
    font-size: 1.35rem !important;
  }
  .brochure-lead {
    font-size: 0.82rem !important;
  }
}
</style>

<script>
function ensureBrochureModal() {
  var el = document.getElementById('brochure-popup');
  if (el) return el;
  var wrap = document.createElement('div');
  wrap.innerHTML = '<div class="popup-overlay" id="brochure-popup" role="dialog" aria-modal="true" aria-labelledby="brochure-title" hidden>' +
    '<div class="popup-backdrop" data-close-brochure onclick="closeBrochureModal()"></div>' +
    '<div class="popup-card brochure-popup-card">' +
    '<button type="button" class="popup-close" data-close-brochure onclick="closeBrochureModal()" aria-label="Close">' +
    '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>' +
    '</button>' +
    '<div class="brochure-modal-header">' +
    '<div class="brochure-badge">' +
    '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><line x1="10" y1="9" x2="8" y2="9"/></svg>' +
    '<span>OFFICIAL 2026 BROCHURE • PDF (5.9 MB)</span>' +
    '</div>' +
    '<div id="brochure-title" class="modal-title brochure-heading">Download HelloBotz Brochure</div>' +
    '<p class="popup-lead brochure-lead">Fill out your details below to instantly receive the complete 7-page guide: Meta Cloud API features, 0% markup rates, CRM inbox, and automated flow bot tools.</p>' +
    '</div>' +
    '<form id="brochure-form" action="javascript:void(0)" method="post" novalidate onsubmit="handleBrochureSubmit(event)">' +
    '<div class="form-row">' +
    '<div class="form-group">' +
    '<label class="form-label" for="brochure-name"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block;vertical-align:-1px;margin-right:4px;"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>Full Name *</label>' +
    '<input type="text" class="form-input" id="brochure-name" name="name" required autocomplete="name" placeholder="e.g. Rahul Sharma">' +
    '</div>' +
    '<div class="form-group">' +
    '<label class="form-label" for="brochure-company"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block;vertical-align:-1px;margin-right:4px;"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>Business / Company</label>' +
    '<input type="text" class="form-input" id="brochure-company" name="company" autocomplete="organization" placeholder="e.g. Acme Enterprises">' +
    '</div>' +
    '</div>' +
    '<div class="form-row">' +
    '<div class="form-group">' +
    '<label class="form-label" for="brochure-email"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block;vertical-align:-1px;margin-right:4px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Work Email *</label>' +
    '<input type="email" class="form-input" id="brochure-email" name="email" required autocomplete="email" placeholder="rahul@company.com">' +
    '</div>' +
    '<div class="form-group">' +
    '<label class="form-label" for="brochure-phone"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" style="display:inline-block;vertical-align:-1px;margin-right:4px;"><circle cx="12" cy="12" r="12" fill="#25D366"/><path d="M12.04 4C7.6 4 4 7.6 4 12.04c0 1.54.44 2.99 1.2 4.23L4 20l3.86-1.18c1.19.7 2.58 1.1 4.18 1.1 4.44 0 8.04-3.6 8.04-8.04 0-4.44-3.6-7.88-8.04-7.88zm4.73 11.23c-.2.56-1.17 1.07-1.63 1.14-.42.06-.97.09-2.77-.66-2.31-.96-3.8-3.32-3.91-3.48-.12-.15-.93-1.24-.93-2.36 0-1.12.59-1.67.8-1.9.21-.23.46-.29.62-.29.15 0 .31 0 .44.01.14.01.33-.05.51.39.19.45.65 1.58.71 1.7.06.11.1.25.02.4-.07.14-.11.24-.22.37-.12.13-.24.3-.35.4-.12.11-.24.23-.1.47.14.24.63 1.04 1.35 1.68.93.83 1.71 1.09 1.95 1.21.24.12.38.1.53-.06.14-.17.6-.7.76-.94.16-.24.32-.2.53-.12.22.08 1.38.65 1.62.77.24.12.4.18.46.28.06.1.06.6-.14 1.15z" fill="#FFFFFF"/></svg>WhatsApp Number *</label>' +
    '<input type="tel" class="form-input" id="brochure-phone" name="phone" required autocomplete="tel" inputmode="tel" pattern="[0-9+]*" oninput="this.value = (this.value.startsWith(\'+\') ? \'+\' : \'\') + this.value.replace(/\\D/g, \'\')" placeholder="+91 98765 43210">' +
    '</div>' +
    '</div>' +
    '<button type="submit" id="brochureSubmitBtn" class="btn btn-primary btn-block" style="margin-top:0.75rem;padding:0.85rem 1.5rem;font-size:1rem;font-weight:700;display:flex;align-items:center;justify-content:center;gap:8px;">' +
    '<span>Download Brochure (PDF)</span>' +
    '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>' +
    '</button>' +
    '<div class="brochure-trust-footer">' +
    '<span class="trust-pill"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg><span>Instant Download</span></span>' +
    '<span class="trust-pill"><svg width="13" height="13" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg><span>No Waiting</span></span>' +
    '<span class="trust-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="#0081FB" style="flex-shrink:0;"><path d="M2.035 13.42c.26-6.058 5.405-11.598 10.229-5.27c4.326-6.307 9.45-.643 9.679 4.959a7 7 0 0 1-.706 4.066a3.33 3.33 0 0 1-4.42 1.038c-1.43-.84-2.25-2.386-3.111-3.756c-.57-.944-1.141-1.877-1.701-2.832c-1.256 2.003-2.822 5.727-4.97 6.733a3.485 3.485 0 0 1-4.211-1.183a6.22 6.22 0 0 1-.789-3.755m18.02.623c-.083-2.563-.747-6.422-3.756-6.961c-1.41 0-2.272 1.317-2.998 2.344v.166c.789 1.162 1.473 2.396 2.21 3.59c.602.87 1.587 2.81 2.531 3.184c1.577.498 2.064-1.058 2.013-2.303zm-15.883-.25v.54a2.48 2.48 0 0 0 .56 1.701a1.46 1.46 0 0 0 1.691.27a5.5 5.5 0 0 0 1.608-1.712c1.038-1.473 1.92-3.008 2.915-4.502c0-.104-.176-.28-.217-.384c-.851-1.14-2.075-2.635-3.694-2.075-2.074 1.245-2.79 3.932-2.863 6.163"/></svg><span>0% Meta Markup</span></span>' +
    '</div>' +
    '</form>' +
    '<div id="brochure-success-box" class="brochure-success-box" style="display:none;">' +
    '<div class="brochure-success-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>' +
    '<h3>Your Download Has Started!</h3>' +
    '<p>Thank you for your interest in HelloBotz. Your official 7-page PDF brochure is downloading now.</p>' +
    '<div style="margin-top:1.25rem;">' +
    '<a id="brochureDirectDownloadLink" href="/download-brochure.php" download="HelloBotz_Official_Brochure.pdf" class="btn btn-primary" style="display:inline-flex;align-items:center;gap:8px;padding:0.75rem 1.4rem;text-decoration:none;font-weight:700;">' +
    '<span>Click Here if Download Didn\'t Start</span>' +
    '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>' +
    '</a>' +
    '</div>' +
    '<div style="font-size:0.85rem;color:#64748B;margin-top:1.25rem;line-height:1.5;">' +
    'Need instant answers about API pricing or onboarding? Chat directly on WhatsApp:<br>' +
    '<a href="https://wa.me/918050854445?text=Hi%20HelloBotz%2C%20I%20just%20downloaded%20the%20brochure%20and%20would%20like%20to%20learn%20more." target="_blank" rel="noopener noreferrer" style="color:#10b981;font-weight:700;text-decoration:none;display:inline-flex;align-items:center;gap:6px;margin-top:4px;"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" style="vertical-align:middle;"><circle cx="12" cy="12" r="12" fill="#25D366"/><path d="M12.04 4C7.6 4 4 7.6 4 12.04c0 1.54.44 2.99 1.2 4.23L4 20l3.86-1.18c1.19.7 2.58 1.1 4.18 1.1 4.44 0 8.04-3.6 8.04-8.04 0-4.44-3.6-7.88-8.04-7.88zm4.73 11.23c-.2.56-1.17 1.07-1.63 1.14-.42.06-.97.09-2.77-.66-2.31-.96-3.8-3.32-3.91-3.48-.12-.15-.93-1.24-.93-2.36 0-1.12.59-1.67.8-1.9.21-.23.46-.29.62-.29.15 0 .31 0 .44.01.14.01.33-.05.51.39.19.45.65 1.58.71 1.7.06.11.1.25.02.4-.07.14-.11.24-.22.37-.12.13-.24.3-.35.4-.12.11-.24.23-.1.47.14.24.63 1.04 1.35 1.68.93.83 1.71 1.09 1.95 1.21.24.12.38.1.53-.06.14-.17.6-.7.76-.94.16-.24.32-.2.53-.12.22.08 1.38.65 1.62.77.24.12.4.18.46.28.06.1.06.6-.14 1.15z" fill="#FFFFFF"/></svg><span>+91 80508 54445</span></a>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>';
  var node = wrap.firstElementChild;
  document.body.appendChild(node);
  return node;
}

function openBrochureModal() {
  var el = document.getElementById('brochure-popup') || ensureBrochureModal();
  if (!el) return;
  // If previously submitted, reset view
  var form = document.getElementById('brochure-form');
  var header = document.querySelector('.brochure-modal-header');
  var successBox = document.getElementById('brochure-success-box');
  if (form && successBox && successBox.style.display === 'block') {
    // keep as is or allow re-opening
  }
  el.hidden = false;
  requestAnimationFrame(function() {
    el.classList.add('open');
  });
  document.body.classList.add('menu-open');
}

function closeBrochureModal() {
  var el = document.getElementById('brochure-popup');
  if (!el) return;
  el.classList.remove('open');
  setTimeout(function() {
    el.hidden = true;
    document.body.classList.remove('menu-open');
  }, 280);
}

function triggerBrochureFileDownload() {
  var dlUrl = window.__HELLOBOTZ_BROCHURE_URL || '/download-brochure.php';

  // Strategy 1: Hidden iframe download (Natively forces attachment download in background, 0 popup blocks)
  try {
    var iframe = document.getElementById('hb-brochure-dl-frame');
    if (!iframe) {
      iframe = document.createElement('iframe');
      iframe.id = 'hb-brochure-dl-frame';
      iframe.style.display = 'none';
      document.body.appendChild(iframe);
    }
    iframe.src = dlUrl;
  } catch (errIframe) {}

  // Strategy 2: Programmatic anchor download (same origin, explicit filename, NO target="_blank")
  try {
    var link = document.createElement('a');
    link.href = '/download-brochure.php';
    link.download = 'HelloBotz_Official_Brochure.pdf';
    link.style.display = 'none';
    document.body.appendChild(link);
    link.click();
    setTimeout(function() {
      if (link.parentNode) link.parentNode.removeChild(link);
    }, 400);
  } catch (errLink) {}
}

function handleBrochureSubmit(e) {
  e.preventDefault();
  var form = e.target;
  var btn = document.getElementById('brochureSubmitBtn');

  var name = form.name ? form.name.value.trim() : '';
  var company = form.company ? form.company.value.trim() : '';
  var email = form.email ? form.email.value.trim() : '';
  var phone = form.phone ? form.phone.value.trim() : '';

  if (!name || !email || !phone) {
    alert('Please fill out all required fields (Name, Work Email, WhatsApp Number).');
    return;
  }

  var digitsOnly = phone.replace(/\D/g, '');
  if (digitsOnly.length < 7) {
    alert('Please enter a valid WhatsApp / Mobile number (digits only).');
    if (form.phone) form.phone.focus();
    return;
  }

  // 1. Trigger the download IMMEDIATELY while user click gesture is active!
  triggerBrochureFileDownload();

  // 2. Immediately switch to the success screen with fallback button
  form.style.display = 'none';
  var header = document.querySelector('.brochure-modal-header');
  if (header) header.style.display = 'none';
  var successBox = document.getElementById('brochure-success-box');
  if (successBox) successBox.style.display = 'block';

  // 3. Background lead ingestion
  var payload = {
    type: 'brochure_download',
    name: name,
    email: email,
    phone: phone,
    whatsapp: phone,
    business: company,
    requirement: 'Brochure Download Request (HelloBotz 7-Page Official PDF)',
    source_page: location.pathname
  };

  fetch('/php-api/lead.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(payload)
  }).catch(function() {});
}

// Global click delegation for all brochure buttons across the site
document.addEventListener('click', function(e) {
  var t = e.target.closest('.btn-download-brochure, a.btn-brochure, a[href*="brochure"], .mega-company-brochure-link, .mega-part-brochure-link, [data-open-brochure]');
  if (t) {
    // Allow direct clicks on the success box download link inside the modal
    if (e.target.closest('#brochure-success-box')) return;
    if (e.target.closest('#brochureDirectDownloadLink')) return;

    e.preventDefault();
    e.stopPropagation();
    openBrochureModal();
  }
}, true);

// Close on Escape key
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    var el = document.getElementById('brochure-popup');
    if (el && el.classList.contains('open')) {
      closeBrochureModal();
    }
  }
});

// Expose globals for external callers
window.openBrochureModal = openBrochureModal;
window.closeBrochureModal = closeBrochureModal;

// Strict Global Mobile/Phone Input Sanitizer: Allows ONLY numbers 0-9 (and optional leading '+') across the whole page
(function() {
  function isPhoneField(el) {
    if (!el || el.tagName !== 'INPUT') return false;
    var t = (el.type || '').toLowerCase();
    var n = (el.name || '').toLowerCase();
    var id = (el.id || '').toLowerCase();
    var ph = (el.placeholder || '').toLowerCase();
    return t === 'tel' ||
           n.includes('phone') || n.includes('mobile') || n.includes('whatsapp') ||
           id.includes('phone') || id.includes('mobile') || id.includes('whatsapp') ||
           ph.includes('98765') || ph.includes('phone') || ph.includes('mobile') || ph.includes('whatsapp');
  }

  function sanitizePhone(val) {
    if (!val) return '';
    var hasPlus = val.trim().startsWith('+');
    var clean = val.replace(/\D/g, '');
    return (hasPlus ? '+' : '') + clean;
  }

  document.addEventListener('keydown', function(e) {
    if (!isPhoneField(e.target)) return;
    if (e.key === 'Backspace' || e.key === 'Tab' || e.key === 'Delete' ||
        e.key === 'ArrowLeft' || e.key === 'ArrowRight' || e.key === 'ArrowUp' || e.key === 'ArrowDown' ||
        e.key === 'Enter' || e.key === 'Escape' || e.metaKey || e.ctrlKey || e.altKey) {
      return;
    }
    if (e.key === '+' && e.target.selectionStart === 0 && !e.target.value.includes('+')) {
      return;
    }
    if (!/^[0-9]$/.test(e.key)) {
      e.preventDefault();
    }
  }, true);

  document.addEventListener('input', function(e) {
    if (!isPhoneField(e.target)) return;
    var clean = sanitizePhone(e.target.value);
    if (e.target.value !== clean) {
      e.target.value = clean;
    }
  }, true);

  document.addEventListener('paste', function(e) {
    if (!isPhoneField(e.target)) return;
    e.preventDefault();
    var pasteData = (e.clipboardData || window.clipboardData).getData('text') || '';
    var clean = sanitizePhone(pasteData);
    e.target.value = clean;
    e.target.dispatchEvent(new Event('input', { bubbles: true }));
  }, true);
})();
</script>
