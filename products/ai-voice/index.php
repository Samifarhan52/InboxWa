<?php
$basePath = '../../';
$pageTitle = 'AI Voice Calling | Inbound & Outbound AI Voice Agents | InboxWa';
$pageDescription = 'Deploy AI voice agents for inbound inquiries, automated outbound calls, appointment confirmations, and instant human handover with InboxWa.';
$canonicalUrl = 'https://inboxwa.com/products/ai-voice/';
include __DIR__ . '/../../includes/header.php';
?>
<section class="page-hero-premium">
  <div class="page-hero-premium__bg" aria-hidden="true">
    <div class="hero-fallback-bg" style="background:linear-gradient(135deg,#0F172A 0%,#1E1B4B 50%,#312E81 100%)"></div>
  </div>
  <div class="page-hero-premium__overlay"></div>
  <div class="container">
    <span class="badge" style="background:rgba(139,92,246,0.25);color:#C4B5FD;border:1px solid rgba(139,92,246,0.4)">Feature</span>
    <h1>AI Voice Calling &amp; Smart Voice Agents</h1>
    <p class="lead">Deploy conversational AI voice agents for inbound support, outbound qualification campaigns, appointment reminders, and instant CRM sync.</p>
    <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
      <a href="/auth/register" class="btn btn-primary btn-lg">Start Free Trial</a>
      <a href="/#contact-section" class="btn btn-outline btn-lg" style="border-color:rgba(255,255,255,.4);color:#fff">Book a Demo</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal"><h2>Built for High-Converting Voice Workflows</h2></div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem;margin-top:1.25rem">
      <div class="card reveal" style="padding:1.4rem">
        <div style="width:42px;height:42px;border-radius:12px;background:#EEF2FF;color:#4F46E5;display:flex;align-items:center;justify-content:center;margin-bottom:1rem">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        </div>
        <h3>Inbound Call Handling</h3>
        <p>Answer prospective customer inquiries 24/7 with human-like voice AI and zero wait times.</p>
      </div>
      <div class="card reveal" style="padding:1.4rem">
        <div style="width:42px;height:42px;border-radius:12px;background:#F5F3FF;color:#7C3AED;display:flex;align-items:center;justify-content:center;margin-bottom:1rem">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" y1="19" x2="12" y2="23"/><line x1="8" y1="23" x2="16" y2="23"/></svg>
        </div>
        <h3>Outbound Lead Qualification</h3>
        <p>Automatically dial newly captured leads from WhatsApp &amp; Ads within 30 seconds of submission.</p>
      </div>
      <div class="card reveal" style="padding:1.4rem">
        <div style="width:42px;height:42px;border-radius:12px;background:#FFFBEB;color:#D97706;display:flex;align-items:center;justify-content:center;margin-bottom:1rem">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        </div>
        <h3>Appointment Confirmations</h3>
        <p>Remind customers of upcoming appointments and auto-reschedule without human agents.</p>
      </div>
      <div class="card reveal" style="padding:1.4rem">
        <div style="width:42px;height:42px;border-radius:12px;background:#ECFDF5;color:#059669;display:flex;align-items:center;justify-content:center;margin-bottom:1rem">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h3>Live Agent Handover</h3>
        <p>Seamlessly transfer interested callers directly to human sales reps or counselors with call transcripts.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section-dark" id="flow">
  <div class="container">
    <div class="section-header reveal"><h2 style="color:#fff">How AI Voice Calling Works</h2></div>
    <div class="workflow-sim" id="ws-pr-voice"><div class="ws-step">Lead captured</div><div class="ws-step">Instant AI call</div><div class="ws-step">Natural conversation</div><div class="ws-step">Qualification check</div><div class="ws-step">CRM &amp; WhatsApp sync</div></div>
    <div class="ws-controls">
      <button type="button" class="btn btn-sm btn-primary ws-next" data-sim="ws-pr-voice">Next step</button>
      <button type="button" class="btn btn-sm btn-outline ws-auto" style="color:#fff;border-color:rgba(255,255,255,.35)" data-sim="ws-pr-voice">Auto-play</button>
    </div>
  </div>
</section>

<section class="section">
  <div class="container" style="max-width:720px;text-align:center">
    <h2 class="reveal">Connect AI Voice with WhatsApp &amp; CRM</h2>
    <p class="lead reveal" style="margin-top:1rem">Turn missed calls and lead forms into instant revenue with automated voice follow-ups connected directly to your InboxWa shared team inbox.</p>
    <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
      <a href="/pricing/" class="btn btn-outline">View pricing</a>
      <a href="/#contact-section" class="btn btn-primary">Book a Voice Demo</a>
    </div>
  </div>
</section>
<script>
(function(){
  var steps=document.querySelectorAll('#ws-pr-voice .ws-step');
  var i=0,timer=null;
  function showStep(idx){
    steps.forEach(function(s,k){s.classList.toggle('active',k===idx);});
  }
  showStep(0);
  var nextBtn=document.querySelector('.ws-next[data-sim="ws-pr-voice"]');
  if(nextBtn){
    nextBtn.addEventListener('click',function(){
      i=(i+1)%steps.length;
      showStep(i);
    });
  }
  var autoBtn=document.querySelector('.ws-auto[data-sim="ws-pr-voice"]');
  if(autoBtn){
    autoBtn.addEventListener('click',function(){
      if(timer){clearInterval(timer);timer=null;autoBtn.textContent='Auto-play';}
      else{
        timer=setInterval(function(){i=(i+1)%steps.length;showStep(i);},1600);
        autoBtn.textContent='Pause';
      }
    });
  }
})();
</script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
