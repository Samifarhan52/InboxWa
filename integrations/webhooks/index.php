<?php
$basePath = '../../';
$pageTitle = 'Webhooks & API | HelloBotz';
$pageDescription = 'Connect your app to HelloBotz with webhooks and REST API for WhatsApp automation and CRM events.';
$canonicalUrl = 'https://hellobotz.com/integrations/webhooks/';
include __DIR__ . '/../../includes/header.php';
?>
<nav class="container" style="padding-top:0.75rem;padding-bottom:0.25rem;font-size:.85rem;color:var(--t3)"><a href="/">Home</a> / Integrations / Webhooks & API</nav>

<section class="section page-hero hero-animated" style="padding-top:1.25rem">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Integration</span>
      <div style="display:flex;justify-content:center;margin:.75rem 0">
        <img src="/assets/images/integrations/icons/webhooks.svg" alt="Webhooks & API" width="48" height="48"
          onerror="this.style.display='none';this.nextElementSibling.style.display='flex'"
          style="border-radius:12px">
        <div class="mega-icon mega-icon-purple" style="display:none;width:48px;height:48px;font-size:1.25rem;align-items:center;justify-content:center"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div>
      </div>
      <h1 class="int-hero-title">Webhooks & API</h1>
      <p class="lead">Send events from your product; receive message statuses; build custom workflows safely.</p>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="/#contact-section" class="btn btn-primary btn-lg">Book Demo</a>
        <a href="#sim" class="btn btn-outline btn-lg">See workflow</a>
              <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn btn-download-data btn-lg">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download Data
        </a>
</div>
    </div>
    <div class="int-float hero-visual-float reveal" style="max-width:640px;margin:2rem auto 0">
      <img src="/assets/images/integrations/webhooks/hero.webp" alt="Webhooks & API + HelloBotz + WhatsApp"
        width="1200" height="630" loading="eager"
        style="width:100%;height:auto;border-radius:16px;border:1px solid var(--bd);min-height:180px;object-fit:cover;background:linear-gradient(135deg,#EDE9FE,#CFFAFE)"
        onerror="this.onerror=null;this.src='';this.style.background='linear-gradient(135deg,#EDE9FE,#CFFAFE)';this.style.minHeight='200px'">
    </div>
  </div>
</section>

<section class="section section-gradient-1">
  <div class="container">
    <div class="section-header reveal"><h2>How HelloBotz works with Webhooks & API</h2></div>
    <p class="lead reveal" style="max-width:720px;margin:0 auto 1.5rem;text-align:center">HTTPS webhooks and API tokens let your backend trigger flows and read results.</p>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem"><div class="card reveal"><h3>Custom apps</h3><p>Trigger messages from your UI.</p></div><div class="card reveal"><h3>ERP/OMS</h3><p>Order events in.</p></div><div class="card reveal"><h3>Status sync</h3><p>Delivery receipts out.</p></div><div class="card reveal"><h3>Data pipes</h3><p>CRM and warehouse.</p></div></div>
  </div>
</section>

<section class="section section-dark" id="sim">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Simulation</span>
      <h2 style="color:#fff">Automation workflow</h2>
      <p class="lead" style="color:rgba(255,255,255,.7)">Frontend demo — not connected to a live store or API.</p>
    </div>
    <div class="workflow-sim" id="ws-webhooks">
      <div class="ws-step" style="color:#111">Your app sends HTTPS event</div><div class="ws-step" style="color:#111">HelloBotz validates token</div><div class="ws-step" style="color:#111">Automation runs</div><div class="ws-step" style="color:#111">WhatsApp/API action</div><div class="ws-step" style="color:#111">Webhook callback to you</div><div class="ws-step" style="color:#111">Logs stored</div>
    </div>
    <div class="ws-controls">
      <button type="button" class="btn btn-sm btn-outline ws-prev" style="color:#fff;border-color:rgba(255,255,255,.35)" data-sim="ws-webhooks">Previous</button>
      <button type="button" class="btn btn-sm btn-primary ws-next" data-sim="ws-webhooks">Next</button>
      <button type="button" class="btn btn-sm btn-outline ws-auto" style="color:#fff;border-color:rgba(255,255,255,.35)" data-sim="ws-webhooks">Auto-play</button>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal"><h2>Features</h2></div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:1rem;margin-top:1.25rem"><div class="card card-feature reveal"><h3>Inbound webhooks</h3><p>Start flows.</p></div><div class="card card-feature reveal"><h3>Outbound events</h3><p>Status callbacks.</p></div><div class="card card-feature reveal"><h3>Auth</h3><p>Bearer tokens.</p></div><div class="card card-feature reveal"><h3>Retries</h3><p>Resilient delivery.</p></div><div class="card card-feature reveal"><h3>Signatures</h3><p>Verify payloads.</p></div><div class="card card-feature reveal"><h3>Docs</h3><p>Examples in API docs.</p></div></div>
  </div>
</section>

<section class="section section-alt">
  <div class="container" style="max-width:720px">
    <div class="section-header reveal"><h2>Business benefits</h2></div>
    <ul class="feature-list" style="display:flex;flex-direction:column;gap:.65rem;margin-top:1rem"><li class="feature-list-item reveal"><span class="check"><svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span><span><strong>Fit any stack</strong> — </span></li><li class="feature-list-item reveal"><span class="check"><svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span><span><strong>No brittle screen scrapes</strong> — </span></li><li class="feature-list-item reveal"><span class="check"><svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span><span><strong>Auditable events</strong> — </span></li></ul>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal"><h2>Visuals</h2></div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:1rem">
      <div class="card reveal" style="padding:0;overflow:hidden">
        <img src="/assets/images/integrations/webhooks/workflow.webp" alt="Webhooks & API workflow" width="600" height="360" loading="lazy"
          style="width:100%;aspect-ratio:16/10;object-fit:cover;background:linear-gradient(135deg,#EDE9FE,#CFFAFE)"
          onerror="this.style.minHeight='160px'">
        <div style="padding:1rem"><strong>Workflow</strong><p style="margin:.35rem 0 0;font-size:.9rem;color:var(--t2)">Event → HelloBotz → WhatsApp</p></div>
      </div>
      <div class="card reveal" style="padding:0;overflow:hidden">
        <img src="/assets/images/integrations/webhooks/dashboard.webp" alt="HelloBotz dashboard" width="600" height="360" loading="lazy"
          style="width:100%;aspect-ratio:16/10;object-fit:cover;background:linear-gradient(135deg,#CFFAFE,#EDE9FE)"
          onerror="this.style.minHeight='160px'">
        <div style="padding:1rem"><strong>Inbox &amp; CRM</strong><p style="margin:.35rem 0 0;font-size:.9rem;color:var(--t2)">Replies land in shared inbox</p></div>
      </div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header reveal"><span class="badge badge-primary">FAQ</span><h2>Questions</h2></div>
    <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0"><div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Where are docs?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">See /resources/api-docs/ for examples.</div></div></div></div>
  </div>
</section>

<section class="section section-dark">
  <div class="container"><div class="section-header reveal" style="text-align:center">
    <h2 style="color:#fff">Connect Webhooks & API to HelloBotz</h2>
    <p class="lead" style="color:rgba(255,255,255,.75)">Official WhatsApp Business API + automation for your stack.</p>
    <div style="margin-top:1.25rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
      <a href="/#contact-section" class="btn btn-primary btn-lg">Talk to sales</a>
      <a href="/pricing/" class="btn btn-white btn-lg">View pricing</a>
    </div>
  </div></div>
</section>
<script>
(function(){
  var steps=document.querySelectorAll('#ws-webhooks .ws-step');
  var i=0, timer=null;
  function show(n){
    i=Math.max(0,Math.min(n,steps.length-1));
    steps.forEach(function(el,idx){ el.classList.toggle('on', idx<=i); });
  }
  show(0);
  document.querySelectorAll('[data-sim="ws-webhooks"].ws-next').forEach(function(b){b.onclick=function(){show(i+1);};});
  document.querySelectorAll('[data-sim="ws-webhooks"].ws-prev').forEach(function(b){b.onclick=function(){show(i-1);};});
  document.querySelectorAll('[data-sim="ws-webhooks"].ws-auto').forEach(function(b){
    b.onclick=function(){
      if(timer){clearInterval(timer);timer=null;b.textContent='Auto-play';return;}
      b.textContent='Pause'; i=-1;
      timer=setInterval(function(){ i++; if(i>=steps.length){i=0;} show(i); }, 900);
    };
  });
})();
</script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
