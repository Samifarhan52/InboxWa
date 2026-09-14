<?php
$basePath = '../';
$robots = 'noindex, nofollow';
$pageTitle = 'Create Account';
$pageDescription = 'Create your HelloBotz account and start with Official WhatsApp Business API, inbox and automation.';
$canonicalUrl = '/auth/register';
include __DIR__ . '/../includes/header.php';
?>
<section class="section" style="padding-top:calc(var(--nav,72px) + 2.5rem);padding-bottom:4rem">
  <div class="container" style="max-width:480px">
    <div class="card reveal" style="padding:2rem">
      <div style="text-align:center;margin-bottom:1.5rem">
        <span class="badge badge-primary">Get started</span>
        <h1 style="font-size:1.5rem;margin:.75rem 0 .35rem">Create your account</h1>
        <p style="margin:0;color:var(--t2);font-size:.95rem">Free trial · Official WhatsApp API ready</p>
      </div>
      <form id="auth-register-form" method="post" action="#" novalidate>
        <label for="reg-name">Full name</label>
        <input id="reg-name" name="name" required autocomplete="name" style="width:100%;margin-bottom:.85rem;padding:.7rem .9rem;border:1px solid var(--bd);border-radius:10px">
        <label for="reg-biz">Business name</label>
        <input id="reg-biz" name="business" required style="width:100%;margin-bottom:.85rem;padding:.7rem .9rem;border:1px solid var(--bd);border-radius:10px">
        <label for="reg-email">Work email</label>
        <input id="reg-email" name="email" type="email" required autocomplete="email" style="width:100%;margin-bottom:.85rem;padding:.7rem .9rem;border:1px solid var(--bd);border-radius:10px">
        <label for="reg-phone">WhatsApp number</label>
        <input id="reg-phone" name="phone" type="tel" required autocomplete="tel" style="width:100%;margin-bottom:.85rem;padding:.7rem .9rem;border:1px solid var(--bd);border-radius:10px">
        <label for="reg-pass">Password</label>
        <input id="reg-pass" name="password" type="password" required minlength="8" autocomplete="new-password" style="width:100%;margin-bottom:1rem;padding:.7rem .9rem;border:1px solid var(--bd);border-radius:10px">
        <label style="display:flex;gap:.5rem;align-items:flex-start;font-size:.85rem;color:var(--t2);margin-bottom:1.25rem">
          <input type="checkbox" required style="margin-top:.2rem">
          <span>I agree to the <a href="<?php echo $bp; ?>company/terms">Terms</a> and <a href="<?php echo $bp; ?>company/privacy">Privacy Policy</a></span>
        </label>
        <button type="submit" class="btn btn-primary btn-block btn-lg" style="width:100%">Create account</button>
      </form>
      <p style="text-align:center;margin-top:1.25rem;font-size:.9rem;color:var(--t2)">
        Already have an account? <a href="/auth/login"><strong>Sign in</strong></a>
      </p>
    </div>
  </div>
</section>
<script>
document.getElementById('auth-register-form').addEventListener('submit', function(e){
  e.preventDefault();
  var fd = new FormData(this);
  var payload = {
    type: 'contact',
    name: fd.get('name'),
    business: fd.get('business'),
    email: fd.get('email'),
    phone: fd.get('phone'),
    message: 'Account registration interest',
    source_page: '/auth/register'
  };
  try {
    fetch('../api/lead.php', { method:'POST', headers:{'Content-Type':'application/json'}, body: JSON.stringify(payload) }).catch(function(){});
  } catch(err){}
  alert('Thanks! Connect this form to your auth backend for full signup. Your details were also sent as a lead.');
});
</script>
<?php include __DIR__ . '/../includes/footer.php'; ?>
