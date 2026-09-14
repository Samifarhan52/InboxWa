<?php
$basePath = '../../';
$pageTitle = 'Class Bookings on WhatsApp';
$pageDescription = 'Fill seats faster — let students and members browse batches, book seats and get reminders on WhatsApp.';
$canonicalUrl = 'https://hellobotz.com/solutions/class-bookings/';
include __DIR__ . '/../../includes/header.php';
?>
<nav class="container" style="padding-top:calc(var(--nav,72px)+1rem);font-size:.85rem;color:var(--t3)"><a href="<?php echo $bp; ?>">Home</a> / <a href="<?php echo $bp; ?>solutions/">Solutions</a> / Class Bookings on WhatsApp</nav>
<section class="section page-hero" style="padding-top:1.25rem">
  <div class="container"><div class="section-header reveal">
    <span class="badge badge-primary">Solution · Class bookings</span>
    <h1>Class Bookings on WhatsApp</h1>
    <p class="lead">Fill seats faster — let students and members browse batches, book seats and get reminders on WhatsApp.</p>
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
    <div class="cls-sim reveal" id="cls-sim"><div class="cls-list" id="cls-list"></div><div class="cls-detail" id="cls-detail">Select a class</div></div>
    <p style="text-align:center;margin-top:1rem"><button type="button" class="btn btn-sm btn-outline sol-replay" style="color:#fff;border-color:rgba(255,255,255,.35)">Replay</button></p>
  </div>
</section>
<style>.cls-sim{display:grid;grid-template-columns:1fr 1.2fr;gap:1rem;max-width:800px;margin:2rem auto 0}
@media(max-width:700px){.cls-sim{grid-template-columns:1fr}}
.cls-list,.cls-detail{background:#111827;border:1px solid rgba(255,255,255,.1);border-radius:14px;padding:1rem;min-height:260px;color:#E5E7EB}
.cls-item{padding:.75rem;border-radius:10px;border:1px solid rgba(255,255,255,.08);margin-bottom:.5rem;cursor:default;transition:.3s}
.cls-item.on{border-color:#8B5CF6;background:rgba(139,92,246,.2)}
.cls-item strong{display:block;color:#fff}
.cls-detail h3{color:#fff;margin:0 0 .5rem}</style>
<script>(function(){
  var classes=[{n:'Yoga · Morning',s:'Mon Wed Fri · 7:00 AM · 8 seats left'},{n:'Python Basics',s:'Tue Thu · 6:00 PM · 3 seats left'},{n:'HIIT Batch B',s:'Daily · 8:00 AM · Waitlist'}];
  function run(){
    var list=document.getElementById('cls-list'); var det=document.getElementById('cls-detail');
    list.innerHTML=classes.map(function(c,i){return '<div class="cls-item" id="ci'+i+'"><strong>'+c.n+'</strong><span style="font-size:.8rem;opacity:.7">'+c.s+'</span></div>';}).join('');
    var i=0;
    function next(){
      if(i>=classes.length){ det.innerHTML='<h3>Booked: Yoga · Morning</h3><p>Confirmation sent on WhatsApp. Reminder 2 hours before class.</p>'; document.getElementById('ci0').classList.add('on'); return; }
      document.querySelectorAll('.cls-item').forEach(function(el){el.classList.remove('on');});
      document.getElementById('ci'+i).classList.add('on');
      det.innerHTML='<h3>'+classes[i].n+'</h3><p>'+classes[i].s+'</p><p style="margin-top:.75rem;color:#A78BFA">Tap to reserve seat…</p>';
      i++; setTimeout(next,1000);
    }
    next();
  }
  run(); document.querySelectorAll('.sol-replay').forEach(function(b){b.onclick=run;});
})();</script>
<section class="section section-gradient-1"><div class="container">
  <div class="section-header reveal"><h2>What you get</h2></div>
  <div class="features-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:1rem;margin-top:1.5rem"><div class="card card-feature reveal"><h3>Batch catalogue</h3><p>Show classes, timings and seats in chat.</p></div><div class="card card-feature reveal"><h3>Seat hold</h3><p>Reserve seats and manage waitlists.</p></div><div class="card card-feature reveal"><h3>Reminders</h3><p>Cut no-shows for paid batches.</p></div><div class="card card-feature reveal"><h3>Coach inbox</h3><p>One number for all centre queries.</p></div><div class="card card-feature reveal"><h3>Payments link</h3><p>Collect fees where your stack supports it.</p></div><div class="card card-feature reveal"><h3>CRM cohorts</h3><p>Track members by batch and level.</p></div></div>
</div></section>
<section class="section"><div class="container">
  <div class="section-header reveal"><h2>Use cases</h2></div>
  <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:1rem;margin-top:1.25rem"><div class="card reveal"><h3>Fitness studios</h3><p>Yoga, HIIT, personal training.</p></div><div class="card reveal"><h3>Coaching centres</h3><p>Demo classes and admissions.</p></div><div class="card reveal"><h3>Workshops</h3><p>Limited-seat events.</p></div><div class="card reveal"><h3>Academies</h3><p>Recurring weekly batches.</p></div></div>
</div></section>
<section class="section section-alt"><div class="container">
  <div class="section-header reveal"><span class="badge badge-primary">FAQ</span><h2>Common questions</h2></div>
  <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0"><div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can parents book for students?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — capture guardian contact and student name in the flow.</div></div></div><div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Multi-branch support?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Tag chats by centre and route to local teams.</div></div></div></div>
</div></section>
<section class="section section-dark"><div class="container"><div class="section-header reveal" style="text-align:center">
  <h2 style="color:#fff">Ready to run this on WhatsApp?</h2>
  <div style="margin-top:1.25rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
    <a href="<?php echo $bp; ?>#contact-section" class="btn btn-primary btn-lg">Book Demo</a>
    <a href="<?php echo $bp; ?>products/whatsapp-api/" class="btn btn-white btn-lg">WhatsApp API</a>
  </div>
</div></div></section>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
