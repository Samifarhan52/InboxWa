<?php
$basePath = '../../';
$pageTitle = 'Inventory Alerts on WhatsApp';
$pageDescription = 'Notify teams and customers about stock, low-inventory alerts and restock windows — coordinated through WhatsApp and automation.';
$canonicalUrl = 'https://hellobotz.com/solutions/inventory/';
include __DIR__ . '/../../includes/header.php';
?>
<nav class="container" style="padding-top:0.75rem;padding-bottom:0.25rem;font-size:.85rem;color:var(--t3)"><a href="<?php echo $bp; ?>">Home</a> / <a href="<?php echo $bp; ?>solutions/">Solutions</a> / Inventory Alerts on WhatsApp</nav>
<section class="section page-hero" style="padding-top:1.25rem">
  <div class="container"><div class="section-header reveal">
    <span class="badge badge-primary">Solution · Inventory</span>
    <h1>Inventory Alerts on WhatsApp</h1>
    <p class="lead">Notify teams and customers about stock, low-inventory alerts and restock windows — coordinated through WhatsApp and automation.</p>
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
    <div class="inv-sim reveal"><div class="inv-grid" id="inv-grid"></div></div>
    <p style="text-align:center;margin-top:1rem"><button type="button" class="btn btn-sm btn-outline sol-replay" style="color:#fff;border-color:rgba(255,255,255,.35)">Replay</button></p>
  </div>
</section>
<style>.inv-sim{max-width:520px;margin:2rem auto 0}
.inv-grid{display:grid;grid-template-columns:1fr 1fr;gap:.65rem}
.inv-item{padding:1rem;border-radius:12px;background:#111827;border:1px solid rgba(255,255,255,.1);color:#fff}
.inv-item span{display:block;font-size:.75rem;color:rgba(255,255,255,.5);margin-top:.35rem}
.inv-item.low{border-color:#F59E0B}
.inv-item.ok{border-color:#22C55E}
.inv-item.out{border-color:#EF4444}</style>
<script>(function(){
  var items=[{n:'SKU-Blue-M',st:'low',l:'12 left · Alert sent'},{n:'SKU-Red-L',st:'ok',l:'In stock'},{n:'SKU-Green-S',st:'out',l:'Out · Waitlist open'},{n:'SKU-Black-M',st:'ok',l:'Restocked today'}];
  function run(){
    var el=document.getElementById('inv-grid');
    el.innerHTML='';
    items.forEach(function(it,i){
      setTimeout(function(){
        var d=document.createElement('div');
        d.className='inv-item '+it.st;
        d.innerHTML='<strong>'+it.n+'</strong><span>'+it.l+'</span>';
        el.appendChild(d);
      }, i*400);
    });
  }
  run(); document.querySelectorAll('.sol-replay').forEach(function(b){b.onclick=run;});
})();</script>
<section class="section section-gradient-1"><div class="container">
  <div class="section-header reveal"><h2>What you get</h2></div>
  <div class="features-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:1rem;margin-top:1.5rem"><div class="card card-feature reveal"><h3>Low-stock alerts</h3><p>Ping ops on WhatsApp when thresholds hit.</p></div><div class="card card-feature reveal"><h3>Waitlist capture</h3><p>Customers join restock lists in chat.</p></div><div class="card card-feature reveal"><h3>Restock broadcasts</h3><p>Notify opted-in segments lawfully.</p></div><div class="card card-feature reveal"><h3>Store routing</h3><p>Tag by warehouse or outlet.</p></div><div class="card card-feature reveal"><h3>CRM sync</h3><p>Link interest to contacts.</p></div><div class="card card-feature reveal"><h3>Webhook ready</h3><p>Connect your ERP/OMS events.</p></div></div>
</div></section>
<section class="section"><div class="container">
  <div class="section-header reveal"><h2>Use cases</h2></div>
  <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:1rem;margin-top:1.25rem"><div class="card reveal"><h3>D2C brands</h3><p>Launch and restock waves.</p></div><div class="card reveal"><h3>Retail chains</h3><p>Store-level availability.</p></div><div class="card reveal"><h3>Spare parts</h3><p>Dealer inventory queries.</p></div><div class="card reveal"><h3>Pharmacies</h3><p>High-demand SKU alerts.</p></div></div>
</div></section>
<section class="section section-alt"><div class="container">
  <div class="section-header reveal"><span class="badge badge-primary">FAQ</span><h2>Common questions</h2></div>
  <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0"><div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Is this a full WMS?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">No — HelloBotz notifies and captures intent; inventory source of truth stays in your system.</div></div></div></div>
</div></section>
<section class="section section-dark"><div class="container"><div class="section-header reveal" style="text-align:center">
  <h2 style="color:#fff">Ready to run this on WhatsApp?</h2>
  <div style="margin-top:1.25rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
    <a href="<?php echo $bp; ?>#contact-section" class="btn btn-primary btn-lg">Book Demo</a>
    <a href="<?php echo $bp; ?>products/whatsapp-api/" class="btn btn-white btn-lg">WhatsApp API</a>
  </div>
</div></div></section>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
