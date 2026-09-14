<?php
$basePath = '../../';
$pageTitle = 'Marketing on WhatsApp';
$pageDescription = 'Run compliant campaigns, nurture sequences and click-to-WhatsApp journeys that convert attention into conversations.';
$canonicalUrl = 'https://hellobotz.com/solutions/marketing/';
include __DIR__ . '/../../includes/header.php';
?>
<nav class="container" style="padding-top:calc(var(--nav,72px)+1rem);font-size:.85rem;color:var(--t3)"><a href="<?php echo $bp; ?>">Home</a> / <a href="<?php echo $bp; ?>solutions/">Solutions</a> / Marketing on WhatsApp</nav>
<section class="section page-hero" style="padding-top:1.25rem">
  <div class="container"><div class="section-header reveal">
    <span class="badge badge-primary">Solution · Marketing</span>
    <h1>Marketing on WhatsApp</h1>
    <p class="lead">Run compliant campaigns, nurture sequences and click-to-WhatsApp journeys that convert attention into conversations.</p>
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
    <div class="mkt-sim reveal"><div class="mkt-funnel" id="mkt-funnel"></div></div>
    <p style="text-align:center;margin-top:1rem"><button type="button" class="btn btn-sm btn-outline sol-replay" style="color:#fff;border-color:rgba(255,255,255,.35)">Replay</button></p>
  </div>
</section>
<style>.mkt-sim{max-width:480px;margin:2rem auto 0}
.mkt-funnel div{margin:.45rem auto;padding:.65rem;border-radius:10px;background:rgba(139,92,246,.25);color:#fff;text-align:center;font-size:.9rem;transition:width .5s}
</style>
<script>(function(){
  var rows=[['Ad impressions',100],['WhatsApp clicks',70],['Chats started',50],['Qualified leads',30],['Sales pipeline',18]];
  function run(){
    var el=document.getElementById('mkt-funnel');
    el.innerHTML=rows.map(function(r){return '<div style="width:40%">'+r[0]+'</div>';}).join('');
    requestAnimationFrame(function(){ el.querySelectorAll('div').forEach(function(d,i){d.style.width=rows[i][1]+'%';}); });
  }
  run(); document.querySelectorAll('.sol-replay').forEach(function(b){b.onclick=run;});
})();</script>
<section class="section section-gradient-1"><div class="container">
  <div class="section-header reveal"><h2>What you get</h2></div>
  <div class="features-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:1rem;margin-top:1.5rem"><div class="card card-feature reveal"><h3>Click-to-WhatsApp ads</h3><p>Meta ads into assigned inbox chats.</p></div><div class="card card-feature reveal"><h3>Template campaigns</h3><p>Broadcasts with reply tracking.</p></div><div class="card card-feature reveal"><h3>Nurture flows</h3><p>Educate before the sales call.</p></div><div class="card card-feature reveal"><h3>Segmentation</h3><p>Tags and lists that match intent.</p></div><div class="card card-feature reveal"><h3>Analytics</h3><p>See which messages create pipeline.</p></div><div class="card card-feature reveal"><h3>CRM handoff</h3><p>Qualified chats become deals.</p></div></div>
</div></section>
<section class="section"><div class="container">
  <div class="section-header reveal"><h2>Use cases</h2></div>
  <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:1rem;margin-top:1.25rem"><div class="card reveal"><h3>Product launches</h3><p>Warm audiences first.</p></div><div class="card reveal"><h3>Webinar invites</h3><p>RSVP in chat.</p></div><div class="card reveal"><h3>Re-engagement</h3><p>Win back quiet contacts.</p></div><div class="card reveal"><h3>Lead magnets</h3><p>Deliver content via WhatsApp.</p></div></div>
</div></section>
<section class="section section-alt"><div class="container">
  <div class="section-header reveal"><span class="badge badge-primary">FAQ</span><h2>Common questions</h2></div>
  <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0"><div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Marketing vs utility templates?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">HelloBotz helps you use the right Meta category; approval remains with Meta.</div></div></div></div>
</div></section>
<section class="section section-dark"><div class="container"><div class="section-header reveal" style="text-align:center">
  <h2 style="color:#fff">Ready to run this on WhatsApp?</h2>
  <div style="margin-top:1.25rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
    <a href="<?php echo $bp; ?>#contact-section" class="btn btn-primary btn-lg">Book Demo</a>
    <a href="<?php echo $bp; ?>products/whatsapp-api/" class="btn btn-white btn-lg">WhatsApp API</a>
  </div>
</div></div></section>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
