<?php
$basePath = '../../';
$pageTitle = 'Subscriptions on WhatsApp';
$pageDescription = 'Onboard members, send renewal reminders and manage plan changes through WhatsApp automation and shared inbox.';
$canonicalUrl = 'https://hellobotz.com/solutions/subscriptions/';
include __DIR__ . '/../../includes/header.php';
?>
<nav class="container" style="padding-top:0.75rem;padding-bottom:0.25rem;font-size:.85rem;color:var(--t3)"><a href="<?php echo $bp; ?>">Home</a> / <a href="<?php echo $bp; ?>solutions/">Solutions</a> / Subscriptions on WhatsApp</nav>
<section class="section page-hero" style="padding-top:1.25rem">
  <div class="container"><div class="section-header reveal">
    <span class="badge badge-primary">Solution · Subscriptions</span>
    <h1>Subscriptions on WhatsApp</h1>
    <p class="lead">Onboard members, send renewal reminders and manage plan changes through WhatsApp automation and shared inbox.</p>
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
    <div class="sub-sim reveal"><div class="sub-steps" id="sub-steps"></div></div>
    <p style="text-align:center;margin-top:1rem"><button type="button" class="btn btn-sm btn-outline sol-replay" style="color:#fff;border-color:rgba(255,255,255,.35)">Replay</button></p>
  </div>
</section>
<style>.sub-sim{max-width:480px;margin:2rem auto 0}
.sub-steps{display:flex;flex-direction:column;gap:.65rem}
.sub-s{padding:.85rem 1rem;border-radius:12px;background:#111827;border:1px solid rgba(255,255,255,.1);color:#E5E7EB;opacity:.35;transition:.35s}
.sub-s.on{opacity:1;border-color:rgba(139,92,246,.5)}
.sub-s strong{display:block;color:#fff}</style>
<script>(function(){
  var s=['Plan selected: Pro Monthly','Welcome sequence on WhatsApp','Day-25 renewal reminder','Customer replies: upgrade to Annual','Agent confirms · CRM plan updated'];
  function run(){
    var el=document.getElementById('sub-steps');
    el.innerHTML=s.map(function(x){return '<div class="sub-s"><strong>'+x+'</strong></div>';}).join('');
    var i=0; function n(){ if(i>=s.length)return; el.children[i].classList.add('on'); i++; setTimeout(n,850);} n();
  }
  run(); document.querySelectorAll('.sol-replay').forEach(function(b){b.onclick=run;});
})();</script>
<section class="section section-gradient-1"><div class="container">
  <div class="section-header reveal"><h2>What you get</h2></div>
  <div class="features-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:1rem;margin-top:1.5rem"><div class="card card-feature reveal"><h3>Plan catalogue</h3><p>Present tiers in interactive messages.</p></div><div class="card card-feature reveal"><h3>Renewal nudges</h3><p>Template reminders before expiry.</p></div><div class="card card-feature reveal"><h3>Upgrade paths</h3><p>Capture intent and route to sales.</p></div><div class="card card-feature reveal"><h3>Dunning-friendly</h3><p>Polite failed-payment follow-ups.</p></div><div class="card card-feature reveal"><h3>Member inbox</h3><p>Support without losing billing context.</p></div><div class="card card-feature reveal"><h3>Automation</h3><p>Welcome and win-back journeys.</p></div></div>
</div></section>
<section class="section"><div class="container">
  <div class="section-header reveal"><h2>Use cases</h2></div>
  <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:1rem;margin-top:1.25rem"><div class="card reveal"><h3>SaaS</h3><p>Trial to paid conversion.</p></div><div class="card reveal"><h3>Memberships</h3><p>Gyms and clubs.</p></div><div class="card reveal"><h3>Media</h3><p>Content subscriptions.</p></div><div class="card reveal"><h3>B2B retainers</h3><p>Quarterly renewals.</p></div></div>
</div></section>
<section class="section section-alt"><div class="container">
  <div class="section-header reveal"><span class="badge badge-primary">FAQ</span><h2>Common questions</h2></div>
  <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0"><div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can we pause plans?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Flows can offer pause/cancel intents and hand to agents for policy exceptions.</div></div></div></div>
</div></section>
<section class="section section-dark"><div class="container"><div class="section-header reveal" style="text-align:center">
  <h2 style="color:#fff">Ready to run this on WhatsApp?</h2>
  <div style="margin-top:1.25rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
    <a href="<?php echo $bp; ?>#contact-section" class="btn btn-primary btn-lg">Book Demo</a>
    <a href="<?php echo $bp; ?>products/whatsapp-api/" class="btn btn-white btn-lg">WhatsApp API</a>
  </div>
</div></div></section>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
