<!-- =========================================================================
     FREE TRIAL LEAD GENERATION POPUP MODAL (Triggered by "Start Free" buttons)
     ========================================================================= -->
<div class="popup-overlay" id="trial-popup" role="dialog" aria-modal="true" aria-labelledby="trial-title" hidden>
  <div class="popup-backdrop" data-close-trial onclick="closeTrialModal()"></div>
  <div class="popup-card trial-popup-card">
    <button type="button" class="popup-close" data-close-trial onclick="closeTrialModal()" aria-label="Close">&times;</button>
    
    <div class="trial-modal-header">
      <div class="trial-badge">
        <span class="trial-sparkle">✨</span>
        <span>14-DAY FREE TRIAL • NO CARD REQUIRED</span>
      </div>
      <div id="trial-title" class="modal-title trial-heading">Start Your Free Trial</div>
      <p class="popup-lead trial-lead">
        Get instant access to Official WhatsApp Business API, visual flow builder &amp; shared team inbox in under 2 minutes.
      </p>
    </div>

    <form id="trial-form" action="javascript:void(0)" method="post" novalidate onsubmit="handleTrialSubmit(event)">
      <div class="form-row">
        <div class="form-group">
          <label class="form-label" for="trial-name">Full Name *</label>
          <input type="text" class="form-input" id="trial-name" name="name" required autocomplete="name" placeholder="e.g. Rahul Sharma">
        </div>
        <div class="form-group">
          <label class="form-label" for="trial-company">Business Name *</label>
          <input type="text" class="form-input" id="trial-company" name="company" required autocomplete="organization" placeholder="e.g. Acme Retail">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label class="form-label" for="trial-email">Work Email *</label>
          <input type="email" class="form-input" id="trial-email" name="email" required autocomplete="email" placeholder="rahul@company.com">
        </div>
        <div class="form-group">
          <label class="form-label" for="trial-phone">WhatsApp Number *</label>
          <input type="tel" class="form-input" id="trial-phone" name="phone" required autocomplete="tel" placeholder="+91 98765 43210">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label class="form-label" for="trial-usecase">Primary Need</label>
          <select class="form-input" id="trial-usecase" name="use_case">
            <option value="WhatsApp Business API & Broadcasts">WhatsApp API &amp; Bulk Broadcasts</option>
            <option value="AI Chatbots & Visual Flow Builder">AI Chatbots &amp; Visual Flow Builder</option>
            <option value="Shared Team Inbox & CRM">Shared Team Inbox &amp; CRM</option>
            <option value="Ecommerce & Cart Recovery (Shopify/Woo)">E-commerce &amp; Cart Recovery (Shopify/Woo)</option>
            <option value="Instagram & Omnichannel Automation">Instagram &amp; Omnichannel Automation</option>
            <option value="Verified Business Data Marketplace">Verified Business Data &amp; Leads</option>
          </select>
        </div>
        <div class="form-group">
          <label class="form-label" for="trial-volume">Expected Contacts / Vol.</label>
          <select class="form-input" id="trial-volume" name="volume">
            <option value="Under 5,000 / month">Under 5,000 / month</option>
            <option value="5,000 - 25,000 / month">5,000 - 25,000 / month</option>
            <option value="25,000 - 100,000 / month">25,000 - 100,000 / month</option>
            <option value="100,000+ (Enterprise)">100,000+ (Enterprise)</option>
          </select>
        </div>
      </div>

      <button type="submit" class="btn btn-primary btn-block btn-trial-submit" id="trialSubmitBtn">
        <span>Claim Free Trial &amp; Get Started &rarr;</span>
      </button>
      
      <div class="trial-trust-footer">
        <div class="trial-trust-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Meta Cloud API Partner</span>
        </div>
        <div class="trial-trust-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Instant Setup</span>
        </div>
        <div class="trial-trust-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Cancel Anytime</span>
        </div>
      </div>
    </form>
    
    <div id="trial-success-box" class="trial-success-box" style="display:none;">
      <div class="trial-success-icon">✓</div>
      <h3>Welcome to HelloBotz!</h3>
      <p>Your 14-day free trial request has been registered. Our onboarding specialist will connect with your WhatsApp credentials and setup guide in under 10 minutes.</p>
      <a href="https://wa.me/918050854445?text=Hi%20HelloBotz%2C%20I%20just%20signed%20up%20for%20a%20Free%20Trial.%20Please%20help%20me%20activate%20my%20WhatsApp%20API%20workspace." target="_blank" rel="noopener" class="btn btn-primary" style="margin-top:1rem;display:inline-flex;align-items:center;gap:8px;">
        <span>Chat with Onboarding on WhatsApp &rarr;</span>
      </a>
    </div>
  </div>
</div>

<style>
/* Trial Modal Styles */
.trial-popup-card {
  max-width: 540px !important;
  width: 92% !important;
  border-radius: 20px !important;
  padding: 2rem !important;
  background: #ffffff !important;
  box-shadow: 0 25px 60px -15px rgba(15, 23, 42, 0.25) !important;
  border: 1px solid rgba(109, 40, 217, 0.15) !important;
  position: relative !important;
  overflow: hidden !important;
}
.trial-popup-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 5px;
  background: linear-gradient(90deg, #6D28D9 0%, #8B5CF6 50%, #25D366 100%);
}
.trial-modal-header {
  margin-bottom: 1.25rem;
}
.trial-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: rgba(109, 40, 217, 0.08);
  color: #6D28D9;
  font-size: 0.75rem;
  font-weight: 700;
  letter-spacing: 0.04em;
  padding: 4px 10px;
  border-radius: 100px;
  margin-bottom: 0.65rem;
  border: 1px solid rgba(109, 40, 217, 0.15);
}
.trial-heading {
  font-size: 1.65rem !important;
  font-weight: 800 !important;
  color: #0F172A !important;
  margin: 0 0 0.4rem 0 !important;
  line-height: 1.2 !important;
}
.trial-lead {
  font-size: 0.88rem !important;
  color: #64748B !important;
  line-height: 1.45 !important;
  margin: 0 !important;
}
.btn-trial-submit {
  width: 100% !important;
  padding: 0.85rem !important;
  font-size: 1rem !important;
  font-weight: 700 !important;
  background: linear-gradient(135deg, #6D28D9 0%, #7C3AED 100%) !important;
  color: #ffffff !important;
  border: none !important;
  border-radius: 10px !important;
  cursor: pointer !important;
  box-shadow: 0 8px 20px -4px rgba(109, 40, 217, 0.4) !important;
  transition: all 0.2s ease !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  gap: 8px !important;
  margin-top: 0.5rem !important;
}
.btn-trial-submit:hover {
  transform: translateY(-1px) !important;
  box-shadow: 0 12px 24px -4px rgba(109, 40, 217, 0.5) !important;
  background: linear-gradient(135deg, #5B21B6 0%, #6D28D9 100%) !important;
}
.trial-trust-footer {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 16px;
  margin-top: 1rem;
  padding-top: 0.85rem;
  border-top: 1px solid #F1F5F9;
  flex-wrap: wrap;
}
.trial-trust-item {
  display: flex;
  align-items: center;
  gap: 5px;
  font-size: 0.78rem;
  font-weight: 600;
  color: #475569;
}
.trial-success-box {
  text-align: center;
  padding: 1.5rem 0.5rem;
}
.trial-success-icon {
  width: 56px;
  height: 56px;
  background: #DCFCE7;
  color: #16A34A;
  font-size: 1.75rem;
  font-weight: 800;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 1rem;
  box-shadow: 0 8px 20px -4px rgba(22, 163, 74, 0.3);
}
.trial-success-box h3 {
  font-size: 1.4rem;
  font-weight: 800;
  color: #0F172A;
  margin: 0 0 0.5rem 0;
}
.trial-success-box p {
  font-size: 0.92rem;
  color: #64748B;
  line-height: 1.5;
  max-width: 420px;
  margin: 0 auto;
}
@media (max-width: 600px) {
  .trial-popup-card {
    padding: 1.4rem 1.1rem !important;
  }
  .trial-trust-footer {
    gap: 10px;
  }
}
</style>

<script>
function openTrialModal() {
  var el = document.getElementById('trial-popup');
  if (!el) return;
  el.hidden = false;
  requestAnimationFrame(function() {
    el.classList.add('open');
  });
  document.body.classList.add('menu-open');
}

function closeTrialModal() {
  var el = document.getElementById('trial-popup');
  if (!el) return;
  el.classList.remove('open');
  setTimeout(function() {
    el.hidden = true;
    document.body.classList.remove('menu-open');
  }, 280);
}

function handleTrialSubmit(e) {
  e.preventDefault();
  var form = e.target;
  var btn = document.getElementById('trialSubmitBtn');
  var origText = btn.innerHTML;
  btn.disabled = true;
  btn.innerHTML = '<span>Activating Trial...</span>';

  var name = form.name ? form.name.value.trim() : '';
  var company = form.company ? form.company.value.trim() : '';
  var email = form.email ? form.email.value.trim() : '';
  var phone = form.phone ? form.phone.value.trim() : '';
  var useCase = form.use_case ? form.use_case.value : '';
  var volume = form.volume ? form.volume.value : '';

  if (!name || !email || !phone) {
    alert('Please fill out all required fields.');
    btn.disabled = false;
    btn.innerHTML = origText;
    return;
  }

  var payload = {
    type: 'free_trial',
    name: name,
    email: email,
    phone: phone,
    business: company,
    product: useCase,
    requirement: 'Free Trial Request - Vol: ' + volume,
    source_page: location.pathname
  };

  fetch('/api/lead.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(payload)
  })
  .then(function(res) { return res.json().catch(function() { return { ok: true }; }); })
  .then(function(data) {
    form.style.display = 'none';
    var header = form.previousElementSibling;
    if (header) header.style.display = 'none';
    var successBox = document.getElementById('trial-success-box');
    if (successBox) successBox.style.display = 'block';
  })
  .catch(function() {
    // Graceful fallback
    form.style.display = 'none';
    var header = form.previousElementSibling;
    if (header) header.style.display = 'none';
    var successBox = document.getElementById('trial-success-box');
    if (successBox) successBox.style.display = 'block';
  });
}

// Global click listener for any Start Free buttons sitewide
document.addEventListener('click', function(e) {
  var t = e.target.closest('.header-cta-start, .mnav-start, .btn-start-free, [data-open-trial], a[href*="auth/register"]');
  if (t) {
    // If on auth login/register page, let it flip to signup instead
    if (window.location.pathname.indexOf('/auth/login') !== -1 || window.location.pathname.indexOf('/auth/register') !== -1) {
      if (typeof window.flipTo === 'function') {
        e.preventDefault();
        window.flipTo('signup');
        return;
      }
      return;
    }
    e.preventDefault();
    openTrialModal();
  }
});
</script>
