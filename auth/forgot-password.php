<?php
$basePath = '../';
$robots = 'noindex, nofollow';
$pageTitle = 'Forgot Password';
$pageDescription = 'Reset your HelloBotz account password.';
$canonicalUrl = 'https://hellobotz.com/auth/forgot-password';
include __DIR__ . '/../includes/header.php';
?>
<section class="section" style="padding-top:calc(var(--nav,72px) + 2.5rem);padding-bottom:4rem">
  <div class="container" style="max-width:420px">
    <div class="card" style="padding:2rem;text-align:center">
      <h1 style="font-size:1.35rem">Reset password</h1>
      <p style="color:var(--t2)">Enter your work email and we’ll send reset instructions (wire to your auth provider).</p>
      <form onsubmit="event.preventDefault();alert('Connect to password-reset API.');">
        <input type="email" required placeholder="you@company.com" style="width:100%;padding:.7rem;border:1px solid var(--bd);border-radius:10px;margin:1rem 0">
        <button class="btn btn-primary" style="width:100%">Send reset link</button>
      </form>
      <p style="margin-top:1rem"><a href="/auth/login">Back to login</a></p>
    </div>
  </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
