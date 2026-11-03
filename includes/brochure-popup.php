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
          <input type="tel" class="form-input" id="brochure-phone" name="phone" required autocomplete="tel" placeholder="+91 98765 43210">
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
        <a id="brochureDirectDownloadLink" href="/assets/downloads/hellobotz-brochure.pdf" download="HelloBotz_Official_Brochure.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="display:inline-flex; align-items:center; gap:8px; padding: 0.75rem 1.4rem; text-decoration:none; font-weight:700;">
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
.brochure-popup-card {
  max-width: 520px !important;
  width: 95% !important;
  background: #ffffff !important;
  border-radius: 20px !important;
  padding: 2rem 2.25rem !important;
  box-shadow: 0 25px 60px -15px rgba(15, 23, 42, 0.35) !important;
  position: relative !important;
  z-index: 100001 !important;
  border: 1px solid rgba(226, 232, 240, 0.8) !important;
  animation: brochurePopIn 0.28s cubic-bezier(0.16, 1, 0.3, 1) forwards !important;
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
    '<div class="form-group"><label class="form-label" for="brochure-phone">WhatsApp Number *</label><input type="tel" class="form-input" id="brochure-phone" name="phone" required autocomplete="tel" placeholder="+91 98765 43210"></div>' +
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
    '<a id="brochureDirectDownloadLink" href="/assets/downloads/hellobotz-brochure.pdf" download="HelloBotz_Official_Brochure.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="display:inline-flex;align-items:center;gap:8px;padding:0.75rem 1.4rem;text-decoration:none;font-weight:700;">' +
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
  var brochureUrl = window.__HELLOBOTZ_BROCHURE_URL || '/assets/downloads/hellobotz-brochure.pdf';
  var link = document.createElement('a');
  link.href = brochureUrl;
  link.setAttribute('download', 'HelloBotz_Official_Brochure.pdf');
  link.setAttribute('target', '_blank');
  link.style.display = 'none';
  document.body.appendChild(link);
  link.click();
  setTimeout(function() {
    if (link.parentNode) {
      link.parentNode.removeChild(link);
    }
  }, 300);
}

function handleBrochureSubmit(e) {
  e.preventDefault();
  var form = e.target;
  var btn = document.getElementById('brochureSubmitBtn');
  var origText = btn ? btn.innerHTML : '';
  if (btn) {
    btn.disabled = true;
    btn.innerHTML = '<span>Preparing Download...</span>';
  }

  var name = form.name ? form.name.value.trim() : '';
  var company = form.company ? form.company.value.trim() : '';
  var email = form.email ? form.email.value.trim() : '';
  var phone = form.phone ? form.phone.value.trim() : '';

  if (!name || !email || !phone) {
    alert('Please fill out all required fields (Name, Work Email, WhatsApp Number).');
    if (btn) {
      btn.disabled = false;
      btn.innerHTML = origText;
    }
    return;
  }

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

  fetch('/api/lead.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(payload)
  })
  .then(function(res) { return res.json().catch(function() { return { ok: true }; }); })
  .then(function(data) {
    showBrochureSuccess();
  })
  .catch(function() {
    showBrochureSuccess();
  });

  function showBrochureSuccess() {
    form.style.display = 'none';
    var header = document.querySelector('.brochure-modal-header');
    if (header) header.style.display = 'none';
    var successBox = document.getElementById('brochure-success-box');
    if (successBox) successBox.style.display = 'block';

    // Automatically trigger PDF download
    triggerBrochureFileDownload();
  }
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
</script>
