<?php
$basePath = '../../';
$pageTitle = 'Travel & Tourism WhatsApp & Instagram Automation | InboxWa';
$pageDescription = 'WhatsApp Business API and Instagram automation for travel & tourism: booking, support, campaigns and shared inbox with InboxWa.';
$canonicalUrl = 'https://inboxwa.com/industries/travel-tourism/';
include __DIR__ . '/../../includes/header.php';
?>
<nav class="container" style="padding-top:calc(var(--nav,72px)+1rem);font-size:.85rem;color:var(--t3)"><a href="/">Home</a> / <a href="/industries/">Industries</a> / Travel & Tourism</nav>

<section class="section page-hero hero-animated" style="padding-top:1.25rem">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Industry</span>
      <div style="font-size:2.5rem;margin:.5rem 0"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>️</div>
      <h1>Travel & Tourism automation on WhatsApp &amp; Instagram</h1>
      <p class="lead">Official WhatsApp Business API + Instagram messaging — designed for travel & tourism teams that need speed, compliance and a shared inbox.</p>
      <div style="margin-top:1.25rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="/#contact-section" class="btn btn-primary btn-lg">Book industry demo</a>
        <a href="#flow" class="btn btn-outline btn-lg">See flow</a>
              <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn btn-download-data btn-lg">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download Data
        </a>
</div>
    </div>
    <div class="hero-visual-float reveal" style="max-width:720px;margin:2rem auto 0">
      <img src="/assets/images/industries/travel-tourism/hero.webp" alt="Travel & Tourism WhatsApp automation"
        width="1200" height="630" loading="eager"
        style="width:100%;border-radius:16px;border:1px solid var(--bd);min-height:200px;object-fit:cover;background:linear-gradient(135deg,#EDE9FE,#CFFAFE)"
        onerror="this.style.minHeight='200px'">
    </div>
  </div>
</section>

<section class="section section-gradient-1">
  <div class="container">
    <div class="section-header reveal"><h2 class="flow-line" style="display:inline-block">WhatsApp &amp; Instagram use cases</h2></div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem;margin-top:1.5rem"><div class="card reveal" style="padding:1.15rem"><strong>Itinerary and booking confirmations</strong></div><div class="card reveal" style="padding:1.15rem"><strong>Flight/hotel update alerts</strong></div><div class="card reveal" style="padding:1.15rem"><strong>Instagram trip enquiries → sales</strong></div><div class="card reveal" style="padding:1.15rem"><strong>Upsell insurance & activities</strong></div><div class="card reveal" style="padding:1.15rem"><strong>Group tour coordination chats</strong></div></div>
  </div>
</section>

<section class="section section-dark" id="flow">
  <div class="container">
    <div class="section-header reveal"><h2 style="color:#fff">Automation flow</h2></div>
    <div class="workflow-sim" id="ws-ind-travel-tourism"><div class="ws-step">Customer reaches you (WhatsApp / Instagram)</div><div class="ws-step">Travel & Tourism workflow triggers in InboxWa</div><div class="ws-step">Bot qualifies or shares updates</div><div class="ws-step">Human agent in shared inbox when needed</div><div class="ws-step">CRM stage + analytics updated</div></div>
    <div class="ws-controls">
      <button type="button" class="btn btn-sm btn-outline ws-prev" style="color:#fff;border-color:rgba(255,255,255,.45);background:transparent" data-sim="ws-ind-travel-tourism">Previous</button>
      <button type="button" class="btn btn-sm btn-primary ws-next" data-sim="ws-ind-travel-tourism">Next</button>
      <button type="button" class="btn btn-sm btn-outline ws-auto" style="color:#fff;border-color:rgba(255,255,255,.45);background:transparent" data-sim="ws-ind-travel-tourism">Auto-play</button>
    </div>
  </div>
</section>

<section class="section">
  <div class="container" style="max-width:800px;text-align:center">
    <h2 class="reveal">Channels that matter for Travel & Tourism</h2>
    <p class="lead reveal">WhatsApp for high-intent conversations. Instagram for discovery and DMs. One InboxWa inbox for both.</p>
    <div style="display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center;margin-top:1.25rem">
      <a href="/products/whatsapp-api/" class="btn btn-outline">WhatsApp API</a>
      <a href="/products/chatbot/" class="btn btn-outline">Chatbot</a>
      <a href="/solutions/data-marketplace/" class="btn btn-outline">Data Marketplace</a>
      <a href="/pricing/" class="btn btn-primary">Pricing</a>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container"><div class="section-header reveal" style="text-align:center">
    <h2 style="color:#fff">Run Travel & Tourism conversations on InboxWa</h2>
    <a href="/#contact-section" class="btn btn-primary btn-lg" style="margin-top:1rem">Talk to us</a>
  </div></div>
</section>
<script>
(function(){
  var steps=document.querySelectorAll('#ws-ind-travel-tourism .ws-step');
  var i=0,timer=null;
  function show(n){ i=Math.max(0,Math.min(n,steps.length-1)); steps.forEach(function(el,idx){el.classList.toggle('on',idx<=i);}); }
  show(0);
  document.querySelectorAll('[data-sim="ws-ind-travel-tourism"].ws-next').forEach(function(b){b.onclick=function(){show(i+1);};});
  document.querySelectorAll('[data-sim="ws-ind-travel-tourism"].ws-prev').forEach(function(b){b.onclick=function(){show(i-1);};});
  document.querySelectorAll('[data-sim="ws-ind-travel-tourism"].ws-auto').forEach(function(b){
    b.onclick=function(){
      if(timer){clearInterval(timer);timer=null;b.textContent='Auto-play';return;}
      b.textContent='Pause'; i=-1;
      timer=setInterval(function(){i++; if(i>=steps.length)i=0; show(i);},900);
    };
  });
})();
</script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
