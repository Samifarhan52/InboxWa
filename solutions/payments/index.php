<?php
$basePath = '../../';
$pageTitle = 'Invoice & Payments on WhatsApp';
$pageDescription = 'Share invoices, payment links and confirmations on WhatsApp — so collections move faster without endless follow-up calls.';
$canonicalUrl = 'https://inboxwa.com/solutions/payments/';
include __DIR__ . '/../../includes/header.php';
?>
<nav class="container" style="padding-top:calc(var(--nav,72px)+1rem);font-size:.85rem;color:var(--t3)"><a href="<?php echo $bp; ?>">Home</a> / <a href="<?php echo $bp; ?>solutions/">Solutions</a> / Invoice & Payments on WhatsApp</nav>
<section class="section page-hero" style="padding-top:1.25rem">
  <div class="container"><div class="section-header reveal">
    <span class="badge badge-primary">Solution · Invoice & Payments</span>
    <h1>Invoice & Payments on WhatsApp</h1>
    <p class="lead">Share invoices, payment links and confirmations on WhatsApp — so collections move faster without endless follow-up calls.</p>
    <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
      <a href="<?php echo $bp; ?>#contact-section" class="btn btn-primary btn-lg">Book Demo</a>
      <a href="#sol-sim" class="btn btn-outline btn-lg">See how it works</a>
            <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn btn-download-data btn-lg">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download Data
        </a>
</div>
  </div></div>
</section>
<section class="section section-dark" id="sol-sim">
  <div class="container">
    <div class="section-header reveal"><span class="badge badge-primary">Simulation</span>
      <h2 style="color:#fff">Watch the experience</h2>
      <p class="lead" style="color:rgba(255,255,255,.7)">Frontend demo only — not connected to a live system.</p>
    </div>
    <div class="pay-sim reveal"><div class="pay-card" id="pay-card"></div></div>
    <p style="text-align:center;margin-top:1rem"><button type="button" class="btn btn-sm btn-outline sol-replay" style="color:#fff;border-color:rgba(255,255,255,.35)">Replay</button></p>
  </div>
</section>
<style>.pay-sim{max-width:400px;margin:2rem auto 0}
.pay-card{background:#111827;border:1px solid rgba(255,255,255,.12);border-radius:16px;padding:1.25rem;color:#E5E7EB;min-height:220px}
.pay-card h3{color:#fff;margin:0 0 .75rem}
.pay-row{display:flex;justify-content:space-between;padding:.4rem 0;font-size:.9rem;border-bottom:1px solid rgba(255,255,255,.06)}
.pay-btn{display:block;margin-top:1rem;text-align:center;padding:.75rem;border-radius:10px;background:linear-gradient(135deg,#8B5CF6,#06B6D4);color:#fff;font-weight:700}</style>
<script>(function(){
  var steps=[
    '<h3>Invoice #INV-1042</h3><div class="pay-row"><span>Client</span><strong>Asha Traders</strong></div><div class="pay-row"><span>Amount</span><strong>₹12,500</strong></div><div class="pay-row"><span>Due</span><strong>Today</strong></div>',
    '<h3>Invoice #INV-1042</h3><div class="pay-row"><span>Client</span><strong>Asha Traders</strong></div><div class="pay-row"><span>Amount</span><strong>₹12,500</strong></div><div class="pay-btn">Pay securely</div><p style="font-size:.8rem;opacity:.6;margin-top:.5rem">Link sent on WhatsApp</p>',
    '<h3>Payment received</h3><div class="pay-row"><span>Status</span><strong style="color:#86EFAC">Paid</strong></div><div class="pay-row"><span>Channel</span><strong>WhatsApp</strong></div><p style="margin-top:.75rem;font-size:.85rem">Receipt shared · CRM updated · Thank-you template queued</p>'
  ];
  function run(){ var el=document.getElementById('pay-card'); var i=0; function n(){ if(i>=steps.length)return; el.innerHTML=steps[i++]; setTimeout(n,1200);} n(); }
  run(); document.querySelectorAll('.sol-replay').forEach(function(b){b.onclick=run;});
})();</script>
<section class="section section-gradient-1"><div class="container">
  <div class="section-header reveal"><h2>What you get</h2></div>
  <div class="features-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:1rem;margin-top:1.5rem"><div class="card card-feature reveal"><h3>Invoice share</h3><p>Send PDF or summary in chat.</p></div><div class="card card-feature reveal"><h3>Payment links</h3><p>Use your existing payment provider links.</p></div><div class="card card-feature reveal"><h3>Auto reminders</h3><p>Gentle nudges before due dates.</p></div><div class="card card-feature reveal"><h3>Paid confirmations</h3><p>Close the loop in the same thread.</p></div><div class="card card-feature reveal"><h3>CRM status</h3><p>Mark invoices paid against contacts.</p></div><div class="card card-feature reveal"><h3>Team visibility</h3><p>Collections and support see one timeline.</p></div></div>
</div></section>
<section class="section"><div class="container">
  <div class="section-header reveal"><h2>Use cases</h2></div>
  <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:1rem;margin-top:1.25rem"><div class="card reveal"><h3>Agencies</h3><p>Milestone invoices.</p></div><div class="card reveal"><h3>Clinics</h3><p>Procedure balances.</p></div><div class="card reveal"><h3>Coaching</h3><p>Fee collection.</p></div><div class="card reveal"><h3>B2B services</h3><p>Subscription top-ups.</p></div></div>
</div></section>
<section class="section section-alt"><div class="container">
  <div class="section-header reveal"><span class="badge badge-primary">FAQ</span><h2>Common questions</h2></div>
  <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0"><div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Do you process payments?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">InboxWa shares invoices and links; payment is handled by your PSP/gateway.</div></div></div><div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Official WhatsApp?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — utility templates for reminders where required.</div></div></div></div>
</div></section>
<section class="section section-dark"><div class="container"><div class="section-header reveal" style="text-align:center">
  <h2 style="color:#fff">Ready to run this on WhatsApp?</h2>
  <div style="margin-top:1.25rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
    <a href="<?php echo $bp; ?>#contact-section" class="btn btn-primary btn-lg">Book Demo</a>
    <a href="<?php echo $bp; ?>products/whatsapp-api/" class="btn btn-white btn-lg">WhatsApp API</a>
  </div>
</div></div></section>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
