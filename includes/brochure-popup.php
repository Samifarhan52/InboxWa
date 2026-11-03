<!-- =========================================================================
     OFFICIAL BROCHURE DOWNLOAD MODAL (Lead Capture + Instant PDF Delivery)
     ========================================================================= -->
<div class="popup-overlay" id="brochure-popup" role="dialog" aria-modal="true" aria-labelledby="brochure-title" hidden>
  <div class="popup-backdrop" data-close-brochure onclick="closeBrochureModal()"></div>
  <div class="popup-card brochure-popup-card">
    <button type="button" class="popup-close" data-close-brochure onclick="closeBrochureModal()" aria-label="Close">&times;</button>

    <div class="brochure-modal-header">
      <div class="brochure-badge">
        <span class="brochure-icon">📄</span>
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
          <label class="form-label" for="brochure-name">Full Name *</label>
          <input type="text" class="form-input" id="brochure-name" name="name" required autocomplete="name" placeholder="e.g. Rahul Sharma">
        </div>
        <div class="form-group">
          <label class="form-label" for="brochure-company">Business / Company</label>
          <input type="text" class="form-input" id="brochure-company" name="company" autocomplete="organization" placeholder="e.g. Acme Enterprises">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label class="form-label" for="brochure-email">Work Email *</label>
          <input type="email" class="form-input" id="brochure-email" name="email" required autocomplete="email" placeholder="rahul@company.com">
        </div>
        <div class="form-group">
          <label class="form-label" for="brochure-phone">WhatsApp Number *</label>
          <input type="tel" class="form-input" id="brochure-phone" name="phone" required autocomplete="tel" inputmode="tel" pattern="[0-9+]*" oninput="this.value = (this.value.startsWith('+') ? '+' : '') + this.value.replace(/\D/g, '')" placeholder="+91 98765 43210">
        </div>
      </div>

      <button type="submit" id="brochureSubmitBtn" class="btn btn-primary btn-block" style="margin-top: 0.75rem; padding: 0.85rem 1.5rem; font-size: 1rem; font-weight: 700; display: flex; align-items: center; justify-content: center; gap: 8px;">
        <span>Download Brochure (PDF)</span>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
      </button>

      <div class="brochure-trust-footer">
        <span class="trust-pill">🔒 Instant Download</span>
        <span class="trust-pill">⚡ No Waiting</span>
        <span class="trust-pill">✓ 0% Meta Markup</span>
      </div>
    </form>

    <div id="brochure-success-box" class="brochure-success-box" style="display:none;">
      <div class="brochure-success-icon">✓</div>
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
        <a href="https://wa.me/918050854445?text=Hi%20HelloBotz%2C%20I%20just%20downloaded%20the%20brochure%20and%20would%20like%20to%20learn%20more." target="_blank" rel="noopener noreferrer" style="color: #10b981; font-weight: 700; text-decoration: underline;">+91 80508 54445</a>
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
  gap: 12px;
  margin-top: 1rem;
  padding-top: 0.85rem;
  border-top: 1px solid #f1f5f9;
  flex-wrap: wrap;
}

.brochure-trust-footer .trust-pill {
  font-size: 0.76rem;
  color: #64748b;
  font-weight: 600;
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
    '<button type="button" class="popup-close" data-close-brochure onclick="closeBrochureModal()" aria-label="Close">&times;</button>' +
    '<div class="brochure-modal-header">' +
    '<div class="brochure-badge"><span class="brochure-icon">📄</span><span>OFFICIAL 2026 BROCHURE • PDF (5.9 MB)</span></div>' +
    '<div id="brochure-title" class="modal-title brochure-heading">Download HelloBotz Brochure</div>' +
    '<p class="popup-lead brochure-lead">Fill out your details below to instantly receive the complete 7-page guide: Meta Cloud API features, 0% markup rates, CRM inbox, and automated flow bot tools.</p>' +
    '</div>' +
    '<form id="brochure-form" action="javascript:void(0)" method="post" novalidate onsubmit="handleBrochureSubmit(event)">' +
    '<div class="form-row">' +
    '<div class="form-group"><label class="form-label" for="brochure-name">Full Name *</label><input type="text" class="form-input" id="brochure-name" name="name" required autocomplete="name" placeholder="e.g. Rahul Sharma"></div>' +
    '<div class="form-group"><label class="form-label" for="brochure-company">Business / Company</label><input type="text" class="form-input" id="brochure-company" name="company" autocomplete="organization" placeholder="e.g. Acme Enterprises"></div>' +
    '</div>' +
    '<div class="form-row">' +
    '<div class="form-group"><label class="form-label" for="brochure-email">Work Email *</label><input type="email" class="form-input" id="brochure-email" name="email" required autocomplete="email" placeholder="rahul@company.com"></div>' +
    '<div class="form-group"><label class="form-label" for="brochure-phone">WhatsApp Number *</label><input type="tel" class="form-input" id="brochure-phone" name="phone" required autocomplete="tel" inputmode="tel" pattern="[0-9+]*" oninput="this.value = (this.value.startsWith(\'+\') ? \'+\' : \'\') + this.value.replace(/\\D/g, \'\')" placeholder="+91 98765 43210"></div>' +
    '</div>' +
    '<button type="submit" id="brochureSubmitBtn" class="btn btn-primary btn-block" style="margin-top:0.75rem;padding:0.85rem 1.5rem;font-size:1rem;font-weight:700;display:flex;align-items:center;justify-content:center;gap:8px;">' +
    '<span>Download Brochure (PDF)</span>' +
    '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>' +
    '</button>' +
    '<div class="brochure-trust-footer">' +
    '<span class="trust-pill">🔒 Instant Download</span>' +
    '<span class="trust-pill">⚡ No Waiting</span>' +
    '<span class="trust-pill">✓ 0% Meta Markup</span>' +
    '</div>' +
    '</form>' +
    '<div id="brochure-success-box" class="brochure-success-box" style="display:none;">' +
    '<div class="brochure-success-icon">✓</div>' +
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
    '<a href="https://wa.me/918050854445?text=Hi%20HelloBotz%2C%20I%20just%20downloaded%20the%20brochure%20and%20would%20like%20to%20learn%20more." target="_blank" rel="noopener noreferrer" style="color:#10b981;font-weight:700;text-decoration:underline;">+91 80508 54445</a>' +
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
