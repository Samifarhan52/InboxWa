<?php
$basePath = '../../';
$pageTitle = 'WhatsApp Flow Builder | InboxWa';
$pageDescription = 'Design branching conversations, wait steps and handoffs without writing code.';
$canonicalUrl = 'https://inboxwa.com/products/flow-builder/';
include __DIR__ . '/../../includes/header.php';
?>
<section class="page-hero-premium">
  <div class="page-hero-premium__bg" aria-hidden="true">
    <img src="/assets/images/products/flow-builder/hero.webp" alt="" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
    <div class="hero-fallback-bg" style="display:none"></div>
  </div>
  <div class="page-hero-premium__overlay"></div>
  <div class="container">
    <span class="badge">Product</span>
    <h1>Visual flow builder for WhatsApp journeys</h1>
    <p class="lead">Design branching conversations, wait steps and handoffs without writing code.</p>
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
    <div class="section-header reveal"><h2>Built for real flow builder work</h2></div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem;margin-top:1.25rem"><div class="card reveal" style="padding:1.2rem"><h3>Onboarding</h3><p>Step-by-step welcome journeys.</p></div><div class="card reveal" style="padding:1.2rem"><h3>Support trees</h3><p>Diagnose then escalate.</p></div><div class="card reveal" style="padding:1.2rem"><h3>Lead forms</h3><p>Multi-step data capture.</p></div><div class="card reveal" style="padding:1.2rem"><h3>Surveys</h3><p>CSAT after resolution.</p></div></div>
  </div>
</section>

<section class="section section-dark" id="flow">
  <div class="container">
    <div class="section-header reveal"><h2 style="color:#fff">How it works</h2></div>
    <div class="workflow-sim" id="ws-pr-flow-builder"><div class="ws-step">Open canvas</div><div class="ws-step">Add triggers & steps</div><div class="ws-step">Branch on replies</div><div class="ws-step">Publish flow</div><div class="ws-step">Measure drop-offs</div></div>
    <div class="ws-controls">
      <button type="button" class="btn btn-sm btn-primary ws-next" data-sim="ws-pr-flow-builder">Next step</button>
      <button type="button" class="btn btn-sm btn-outline ws-auto" style="color:#fff;border-color:rgba(255,255,255,.35)" data-sim="ws-pr-flow-builder">Auto-play</button>
    </div>
  </div>
</section>

<section class="section">
  <div class="container" style="max-width:720px;text-align:center">
    <div class="hero-visual-float reveal">
      <img src="/assets/images/products/flow-builder/hero.webp" alt="WhatsApp Flow Builder | InboxWa" width="1000" height="560" loading="lazy"
        style="width:100%;border-radius:16px;border:1px solid var(--bd);min-height:180px;object-fit:cover;background:linear-gradient(135deg,#EDE9FE,#CFFAFE)"
        onerror="this.style.minHeight='180px'">
    </div>
    <p class="lead reveal" style="margin-top:1.5rem">Same InboxWa platform — this product page focuses on flow builder outcomes only.</p>
    <div style="margin-top:1.25rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
      <a href="/pricing/" class="btn btn-outline">View pricing</a>
      <a href="/#contact-section" class="btn btn-primary">Talk to sales</a>
    </div>
  </div>
</section>
<script>
(function(){
  var steps=document.querySelectorAll('#ws-pr-flow-builder .ws-step');
  var i=0,timer=null;
  function show(n){i=Math.max(0,Math.min(n,steps.length-1));steps.forEach(function(el,idx){el.classList.toggle('on',idx<=i);});}
  show(0);
  document.querySelectorAll('[data-sim="ws-pr-flow-builder"].ws-next').forEach(function(b){b.onclick=function(){show(i+1);};});
  document.querySelectorAll('[data-sim="ws-pr-flow-builder"].ws-auto').forEach(function(b){
    b.onclick=function(){if(timer){clearInterval(timer);timer=null;b.textContent='Auto-play';return;}b.textContent='Pause';i=-1;timer=setInterval(function(){i++;if(i>=steps.length)i=0;show(i);},900);};
  });
})();
</script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
