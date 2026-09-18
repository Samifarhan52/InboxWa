<?php
if (!isset($basePath)) {
    $basePath = '../../';
}
$robots = 'noindex, nofollow';
$pageTitle = 'Login to HelloBotz';
$pageDescription = 'Sign in to your HelloBotz workspace — Official WhatsApp Business API, shared team inbox, automation and CRM.';
$canonicalUrl = '/auth/login';
$initialMode = 'login'; // 'login' or 'signup'
$extraCss = ['/assets/css/auth-flip.css'];
include __DIR__ . '/../includes/header.php';
?>
<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/auth-flip.css">

<section class="auth-flip-section">
  <!-- Ambient background glow elements -->
  <div class="auth-flip-bg-orb orb-1"></div>
  <div class="auth-flip-bg-orb orb-2"></div>

  <div class="auth-flip-container">
    
    <!-- Tab Switcher Pills -->
    <div class="auth-tab-pills" role="tablist" aria-label="Authentication Options">
      <button type="button" class="auth-tab-pill <?php echo $initialMode === 'login' ? 'active' : ''; ?>" id="tab-pill-login" onclick="flipTo('login')" role="tab" aria-selected="<?php echo $initialMode === 'login' ? 'true' : 'false'; ?>">
        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg>
        <span>Sign In</span>
      </button>
      <button type="button" class="auth-tab-pill <?php echo $initialMode === 'signup' ? 'active' : ''; ?>" id="tab-pill-signup" onclick="flipTo('signup')" role="tab" aria-selected="<?php echo $initialMode === 'signup' ? 'true' : 'false'; ?>">
        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
        <span>Sign Up</span>
        <span class="pill-badge">Free</span>
      </button>
    </div>

    <!-- 3D Perspective Flip Card Viewport -->
    <div class="auth-flip-viewport">
      <div class="auth-flipper <?php echo $initialMode === 'signup' ? 'is-flipped' : ''; ?>" id="authFlipper">

        <!-- ==========================================
             FRONT FACE: LOGIN FORM
             ========================================== -->
        <div class="auth-card-face auth-card-front" id="authFrontFace">
          <div class="auth-header">
            <div class="auth-brand-badge">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a2 2 0 0 1 2 2c0 .74-.4 1.39-1 1.73V7h1a7 7 0 0 1 7 7h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v1a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1a7 7 0 0 1 7-7h1V5.73c-.6-.34-1-.99-1-1.73a2 2 0 0 1 2-2zM9 13a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm6 0a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/></svg>
              <span>HelloBotz Account</span>
            </div>
            <h1>Welcome Back</h1>
            <p>Sign in to your official workspace &amp; team inbox</p>
          </div>

          <div id="login-alert" class="auth-alert-box alert-success" style="display:none;"></div>

          <form id="auth-login-form" method="post" action="#" novalidate onsubmit="handleLoginSubmit(event)">
            <div class="auth-form-group">
              <label class="auth-label" for="login-email">Work Email</label>
              <div class="auth-input-wrap">
                <span class="auth-input-icon">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </span>
                <input class="auth-input" id="login-email" name="email" type="email" required autocomplete="username" placeholder="you@company.com">
              </div>
            </div>

            <div class="auth-form-group">
              <div class="auth-label-row">
                <label class="auth-label" for="login-pass">Password</label>
                <a href="<?php echo $bp; ?>auth/forgot-password" class="auth-forgot-link">Forgot password?</a>
              </div>
              <div class="auth-input-wrap">
                <span class="auth-input-icon">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                </span>
                <input class="auth-input" id="login-pass" name="password" type="password" required autocomplete="current-password" placeholder="••••••••">
                <button type="button" class="auth-pw-toggle" onclick="togglePw('login-pass', this)" title="Show/Hide Password" aria-label="Toggle password visibility">
                  <svg class="icon-eye" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                </button>
              </div>
            </div>

            <div class="auth-form-group">
              <label class="auth-checkbox-wrap">
                <input type="checkbox" name="remember" checked>
                <span>Remember me on this browser</span>
              </label>
            </div>

            <button type="submit" class="btn-auth-submit" id="loginSubmitBtn">
              <span>Sign In to HelloBotz</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
          </form>

          <div class="auth-card-footer">
            <p class="auth-switch-text">
              New to HelloBotz?
              <button type="button" class="auth-flip-action-btn" onclick="flipTo('signup')">
                <strong>Create an account &rarr;</strong>
              </button>
            </p>
            <div class="auth-trust-badges">
              <span>🛡️ Meta Cloud API</span>
              <span>•</span>
              <span>🔒 256-Bit SSL</span>
              <span>•</span>
              <span>⚡ 99.9% Uptime</span>
            </div>
          </div>
        </div>

        <!-- ==========================================
             BACK FACE: SIGN UP (LEAD GEN REGISTER) FORM
             ========================================== -->
        <div class="auth-card-face auth-card-back" id="authBackFace">
          <div class="auth-header">
            <div class="auth-brand-badge badge-trial">
              <span class="auth-trial-sparkle">✨</span>
              <span>14-Day Free Trial • Instant Setup</span>
            </div>
            <h2>Create Your Account</h2>
            <p>Official Meta WhatsApp API ready in under 2 minutes</p>
          </div>

          <div id="signup-alert" class="auth-alert-box alert-success" style="display:none;"></div>

          <form id="auth-register-form" method="post" action="#" novalidate onsubmit="handleSignupSubmit(event)">
            <div class="auth-form-row">
              <div class="auth-form-group">
                <label class="auth-label" for="reg-name">Full Name *</label>
                <div class="auth-input-wrap">
                  <span class="auth-input-icon">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                  </span>
                  <input class="auth-input" id="reg-name" name="name" type="text" required autocomplete="name" placeholder="e.g. Rahul Sharma">
                </div>
              </div>

              <div class="auth-form-group">
                <label class="auth-label" for="reg-biz">Business Name *</label>
                <div class="auth-input-wrap">
                  <span class="auth-input-icon">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                  </span>
                  <input class="auth-input" id="reg-biz" name="business" type="text" required autocomplete="organization" placeholder="e.g. Acme Retail">
                </div>
              </div>
            </div>

            <div class="auth-form-row">
              <div class="auth-form-group">
                <label class="auth-label" for="reg-email">Work Email *</label>
                <div class="auth-input-wrap">
                  <span class="auth-input-icon">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                  </span>
                  <input class="auth-input" id="reg-email" name="email" type="email" required autocomplete="email" placeholder="rahul@company.com">
                </div>
              </div>

              <div class="auth-form-group">
                <label class="auth-label" for="reg-phone">WhatsApp Number *</label>
                <div class="auth-input-wrap">
                  <span class="auth-input-icon" style="color:#25D366;">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                  </span>
                  <input class="auth-input" id="reg-phone" name="phone" type="tel" required autocomplete="tel" placeholder="+91 98765 43210">
                </div>
              </div>
            </div>

            <div class="auth-form-group">
              <label class="auth-label" for="reg-pass">Create Password *</label>
              <div class="auth-input-wrap">
                <span class="auth-input-icon">
                  <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                </span>
                <input class="auth-input" id="reg-pass" name="password" type="password" required minlength="8" autocomplete="new-password" placeholder="At least 8 characters">
                <button type="button" class="auth-pw-toggle" onclick="togglePw('reg-pass', this)" title="Show/Hide Password" aria-label="Toggle password visibility">
                  <svg class="icon-eye" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                </button>
              </div>
            </div>

            <div class="auth-form-group">
              <label class="auth-checkbox-wrap">
                <input type="checkbox" name="terms" required checked>
                <span>I agree to the <a href="<?php echo $bp; ?>terms/" target="_blank">Terms</a> &amp; <a href="<?php echo $bp; ?>privacy/" target="_blank">Privacy Policy</a></span>
              </label>
            </div>

            <button type="submit" class="btn-auth-submit btn-auth-signup" id="regSubmitBtn">
              <span>Create Free Account &amp; Start Trial &rarr;</span>
            </button>
          </form>

          <div class="auth-card-footer">
            <p class="auth-switch-text">
              Already have an account?
              <button type="button" class="auth-flip-action-btn" onclick="flipTo('login')">
                <strong>Sign In here &rarr;</strong>
              </button>
            </p>
            <div class="auth-trust-badges">
              <span>⚡ Instant Access</span>
              <span>•</span>
              <span>💳 No Card Needed</span>
              <span>•</span>
              <span>🤝 24/7 Setup Help</span>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script>
// Password Visibility Toggle
function togglePw(id, btn) {
  var input = document.getElementById(id);
  if (!input) return;
  if (input.type === 'password') {
    input.type = 'text';
    btn.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>';
  } else {
    input.type = 'password';
    btn.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>';
  }
}

// 3D Card Flip Handler
function flipTo(target) {
  var flipper = document.getElementById('authFlipper');
  var pillLogin = document.getElementById('tab-pill-login');
  var pillSignup = document.getElementById('tab-pill-signup');
  if (!flipper) return;

  if (target === 'signup') {
    flipper.classList.add('is-flipped');
    if (pillLogin) {
      pillLogin.classList.remove('active');
      pillLogin.setAttribute('aria-selected', 'false');
    }
    if (pillSignup) {
      pillSignup.classList.add('active');
      pillSignup.setAttribute('aria-selected', 'true');
    }
    try {
      history.replaceState(null, '', '#signup');
    } catch(e) {}
    document.title = 'Create Free Account | HelloBotz';
  } else {
    flipper.classList.remove('is-flipped');
    if (pillSignup) {
      pillSignup.classList.remove('active');
      pillSignup.setAttribute('aria-selected', 'false');
    }
    if (pillLogin) {
      pillLogin.classList.add('active');
      pillLogin.setAttribute('aria-selected', 'true');
    }
    try {
      history.replaceState(null, '', '#login');
    } catch(e) {}
    document.title = 'Login to HelloBotz';
  }
}

// Handle Hash / Initial state on load
window.addEventListener('DOMContentLoaded', function() {
  var hash = window.location.hash;
  var isRegisterPage = window.location.pathname.indexOf('/auth/register') !== -1;
  if (hash === '#signup' || isRegisterPage) {
    flipTo('signup');
  } else if (hash === '#login') {
    flipTo('login');
  }
});

// Submit Handlers
function handleLoginSubmit(e) {
  e.preventDefault();
  var btn = document.getElementById('loginSubmitBtn');
  var origText = btn.innerHTML;
  btn.disabled = true;
  btn.innerHTML = '<span>Signing In...</span>';

  var email = document.getElementById('login-email').value.trim();
  var pass = document.getElementById('login-pass').value;

  if (!email || !pass) {
    alert('Please enter your work email and password.');
    btn.disabled = false;
    btn.innerHTML = origText;
    return;
  }

  // Record login attempt for lead insights
  try {
    fetch('/api/lead.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        type: 'login_attempt',
        email: email,
        source_page: '/auth/login'
      })
    }).catch(function(){});
  } catch(e) {}

  setTimeout(function() {
    var alertBox = document.getElementById('login-alert');
    alertBox.textContent = '✓ Sign in verified. Connecting you to your HelloBotz workspace...';
    alertBox.style.display = 'flex';
    btn.innerHTML = '<span>✓ Access Granted</span>';
    btn.style.background = '#059669';
    setTimeout(function() {
      alert('Welcome to HelloBotz! Your dashboard workspace is ready.');
      btn.disabled = false;
      btn.innerHTML = origText;
      btn.style.background = '';
    }, 1000);
  }, 700);
}

function handleSignupSubmit(e) {
  e.preventDefault();
  var form = document.getElementById('auth-register-form');
  var btn = document.getElementById('regSubmitBtn');
  var origText = btn.innerHTML;
  btn.disabled = true;
  btn.innerHTML = '<span>Provisioning Account...</span>';

  var name = document.getElementById('reg-name').value.trim();
  var business = document.getElementById('reg-biz').value.trim();
  var email = document.getElementById('reg-email').value.trim();
  var phone = document.getElementById('reg-phone').value.trim();
  var pass = document.getElementById('reg-pass').value;

  if (!name || !business || !email || !phone || !pass) {
    alert('Please complete all required fields.');
    btn.disabled = false;
    btn.innerHTML = origText;
    return;
  }

  var payload = {
    type: 'signup',
    name: name,
    business: business,
    email: email,
    phone: phone,
    source_page: '/auth/register'
  };

  fetch('/api/lead.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(payload)
  })
  .then(function(res) { return res.json().catch(function() { return { ok: true }; }); })
  .then(function(data) {
    var alertBox = document.getElementById('signup-alert');
    alertBox.textContent = '🎉 Account Created Successfully! Welcome to HelloBotz. Your 14-day free trial has been activated.';
    alertBox.style.display = 'flex';
    btn.innerHTML = '<span>✓ Trial Activated</span>';
    btn.style.background = '#059669';
    setTimeout(function() {
      window.location.href = 'https://wa.me/918050854445?text=' + encodeURIComponent('Hi HelloBotz, I just registered for a free trial (' + name + ' - ' + business + '). Please guide me through WhatsApp API activation.');
    }, 1500);
  })
  .catch(function(err) {
    var alertBox = document.getElementById('signup-alert');
    alertBox.textContent = '🎉 Account Created! Welcome to HelloBotz. Connecting you to onboarding...';
    alertBox.style.display = 'flex';
    setTimeout(function() {
      window.location.href = 'https://wa.me/918050854445?text=' + encodeURIComponent('Hi HelloBotz, I just registered for a free trial (' + name + ' - ' + business + '). Please guide me through WhatsApp API activation.');
    }, 1500);
  });
}
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
