<?php
$basePath = '../../';
$pageTitle = 'WhatsApp CRM & Pipelines | HelloBotz';
$pageDescription = 'Turn chats into contacts and deals — stages that match how your sales team actually sells.';
$canonicalUrl = 'https://hellobotz.com/products/crm/';
include __DIR__ . '/../../includes/header.php';
?>
<section class="page-hero-premium">
  <div class="page-hero-premium__bg" aria-hidden="true">
    <img src="/assets/images/products/crm/hero.webp" alt="" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
    <div class="hero-fallback-bg" style="display:none"></div>
  </div>
  <div class="page-hero-premium__overlay"></div>
  <div class="container">
    <span class="badge">Product</span>
    <h1>CRM pipelines fed by real WhatsApp conversations</h1>
    <p class="lead">Turn chats into contacts and deals — stages that match how your sales team actually sells.</p>
    <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
      <a href="/auth/register" class="btn btn-primary btn-lg">Start Free Trial</a>
      <a href="/#contact-section" class="btn btn-outline btn-lg" style="border-color:rgba(255,255,255,.4);color:#fff">Book a Demo</a>
            <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn btn-download-data btn-lg">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download Data
        </a>
</div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal"><h2>Built for real crm work</h2></div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem;margin-top:1.25rem"><div class="card reveal" style="padding:1.2rem"><h3>Lead capture</h3><p>Every chat can create a contact.</p></div><div class="card reveal" style="padding:1.2rem"><h3>Deal stages</h3><p>Move deals from conversation outcomes.</p></div><div class="card reveal" style="padding:1.2rem"><h3>Owner routing</h3><p>Right rep on the right chat.</p></div><div class="card reveal" style="padding:1.2rem"><h3>Follow-ups</h3><p>Tasks from unread or stalled deals.</p></div></div>
  </div>
</section>

<section class="section section-dark" id="flow">
  <div class="container">
    <div class="section-header reveal"><h2 style="color:#fff">How it works</h2></div>
    <div class="workflow-sim" id="ws-pr-crm"><div class="ws-step">Chat starts</div><div class="ws-step">Contact matched</div><div class="ws-step">Qualify in inbox</div><div class="ws-step">Update stage</div><div class="ws-step">Forecast from pipeline</div></div>
    <div class="ws-controls">
      <button type="button" class="btn btn-sm btn-primary ws-next" data-sim="ws-pr-crm">Next step</button>
      <button type="button" class="btn btn-sm btn-outline ws-auto" style="color:#fff;border-color:rgba(255,255,255,.35)" data-sim="ws-pr-crm">Auto-play</button>
    </div>
  </div>
</section>

<section class="section">
  <div class="container" style="max-width:720px;text-align:center">
    <div class="hero-visual-float reveal">
      <img src="/assets/images/products/crm/hero.webp" alt="WhatsApp CRM & Pipelines | HelloBotz" width="1000" height="560" loading="lazy"
        style="width:100%;border-radius:16px;border:1px solid var(--bd);min-height:180px;object-fit:cover;background:linear-gradient(135deg,#EDE9FE,#CFFAFE)"
        onerror="this.style.minHeight='180px'">
    </div>
    <p class="lead reveal" style="margin-top:1.5rem">Same HelloBotz platform — this product page focuses on crm outcomes only.</p>
    <div style="margin-top:1.25rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
      <a href="/pricing/" class="btn btn-outline">View pricing</a>
      <a href="/#contact-section" class="btn btn-primary">Talk to sales</a>
    </div>
  </div>
</section>
<script>
(function(){
  var steps=document.querySelectorAll('#ws-pr-crm .ws-step');
  var i=0,timer=null;
  function show(n){i=Math.max(0,Math.min(n,steps.length-1));steps.forEach(function(el,idx){el.classList.toggle('on',idx<=i);});}
  show(0);
  document.querySelectorAll('[data-sim="ws-pr-crm"].ws-next').forEach(function(b){b.onclick=function(){show(i+1);};});
  document.querySelectorAll('[data-sim="ws-pr-crm"].ws-auto').forEach(function(b){
    b.onclick=function(){if(timer){clearInterval(timer);timer=null;b.textContent='Auto-play';return;}b.textContent='Pause';i=-1;timer=setInterval(function(){i++;if(i>=steps.length)i=0;show(i);},900);};
  });
})();
</script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
