<?php
$basePath = '../';
$robots = 'noindex, nofollow';
$pageTitle = 'Login';
$pageDescription = 'Sign in to your HelloBotz account — WhatsApp API, shared inbox, automation and CRM.';
$canonicalUrl = '/auth/login';
include __DIR__ . '/../includes/header.php';
?>
<section class="section" style="padding-top:calc(var(--nav,72px) + 2.5rem);padding-bottom:4rem">
  <div class="container" style="max-width:420px">
    <div class="card reveal" style="padding:2rem">
      <div style="text-align:center;margin-bottom:1.5rem">
        <span class="badge badge-primary">Account</span>
        <h1 style="font-size:1.5rem;margin:.75rem 0 .35rem">Welcome back</h1>
        <p style="margin:0;color:var(--t2);font-size:.95rem">Sign in to HelloBotz</p>
      </div>
      <form id="auth-login-form" method="post" action="#" novalidate>
        <label class="form-label" for="login-email">Work email</label>
        <input class="form-input" id="login-email" name="email" type="email" required autocomplete="username" placeholder="you@company.com" style="width:100%;margin-bottom:1rem;padding:.7rem .9rem;border:1px solid var(--bd);border-radius:10px">
        <label class="form-label" for="login-pass">Password</label>
        <input class="form-input" id="login-pass" name="password" type="password" required autocomplete="current-password" placeholder="••••••••" style="width:100%;margin-bottom:.5rem;padding:.7rem .9rem;border:1px solid var(--bd);border-radius:10px">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:1.25rem;font-size:.85rem">
          <label style="display:flex;align-items:center;gap:.4rem;color:var(--t2)"><input type="checkbox" name="remember"> Remember me</label>
          <a href="<?php echo $bp; ?>auth/forgot-password">Forgot password?</a>
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-lg" style="width:100%">Sign in</button>
      </form>
      <p style="text-align:center;margin-top:1.25rem;font-size:.9rem;color:var(--t2)">
        New to HelloBotz? <a href="/auth/register"><strong>Create an account</strong></a>
      </p>
      <p style="text-align:center;margin-top:.75rem;font-size:.8rem;color:var(--t3)">
        Or <a href="<?php echo $bp; ?>#contact-section">book a demo</a> with sales
      </p>
    </div>
  </div>
</section>
<script>
document.getElementById('auth-login-form').addEventListener('submit', function(e){
  e.preventDefault();
  alert('Connect this form to your HelloBotz auth backend (SSO / email login). UI is production-ready.');
});
</script>
<?php include __DIR__ . '/../includes/footer.php'; ?>
