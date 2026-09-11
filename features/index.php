<?php
$basePath = '../';
$pageTitle = 'Features | Official WhatsApp Business API & Omnichannel Platform | InboxWa';
$pageDescription = 'Explore all InboxWa features: Bulk Broadcast, Shared Team Inbox, AI Chatbot Builder, AI Voice Calling, WhatsApp Catalog, Appointment Booking, WhatsApp Forms, and Click-to-WhatsApp Ads.';
$canonicalUrl = 'https://inboxwa.com/features/';
include __DIR__ . '/../includes/header.php';
?>
<nav class="container" style="padding-top:calc(var(--nav,72px) + 1rem);font-size:.85rem;color:var(--t3)"><a href="<?php echo $bp; ?>">Home</a> / Features</nav>

<section class="section page-hero" style="padding-top:1.25rem">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Platform Features</span>
      <h1>Everything You Need to Scale on WhatsApp</h1>
      <p class="lead">From high-volume broadcasts and AI chatbots to voice agents and in-chat shopping catalogs — built into one connected workspace.</p>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="/auth/register" class="btn btn-primary btn-lg">Start Free Trial</a>
        <a href="<?php echo $bp; ?>#contact-section" class="btn btn-outline btn-lg">Book a Demo</a>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.5rem">
      <!-- 1. Bulk Broadcast -->
      <a href="<?php echo $bp; ?>products/broadcast/" class="card reveal" style="text-decoration:none;display:flex;flex-direction:column;justify-content:space-between;border-radius:16px;padding:1.5rem">
        <div>
          <div style="width:44px;height:44px;border-radius:12px;background:#FDF2F8;color:#DB2777;display:flex;align-items:center;justify-content:center;margin-bottom:1rem">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
          </div>
          <h3 style="font-size:1.15rem;margin-bottom:.5rem;color:#0F172A">Bulk Broadcast</h3>
          <p style="color:#64748B;font-size:.9rem;line-height:1.5">Send campaigns to thousands instantly with verified Meta delivery and audience segmentation.</p>
        </div>
        <span style="color:#7C3AED;font-weight:700;font-size:.9rem;margin-top:1.25rem">Learn More &rarr;</span>
      </a>

      <!-- 2. Shared Team Inbox -->
      <a href="<?php echo $bp; ?>products/shared-inbox/" class="card reveal" style="text-decoration:none;display:flex;flex-direction:column;justify-content:space-between;border-radius:16px;padding:1.5rem">
        <div>
          <div style="width:44px;height:44px;border-radius:12px;background:#F5F3FF;color:#7C3AED;display:flex;align-items:center;justify-content:center;margin-bottom:1rem">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
          </div>
          <h3 style="font-size:1.15rem;margin-bottom:.5rem;color:#0F172A">Shared Team Inbox</h3>
          <p style="color:#64748B;font-size:.9rem;line-height:1.5">Collaborate on customer conversations with multi-agent routing, internal notes, and SLAs.</p>
        </div>
        <span style="color:#7C3AED;font-weight:700;font-size:.9rem;margin-top:1.25rem">Learn More &rarr;</span>
      </a>

      <!-- 3. AI Chatbot Builder -->
      <a href="<?php echo $bp; ?>products/chatbot/" class="card reveal" style="text-decoration:none;display:flex;flex-direction:column;justify-content:space-between;border-radius:16px;padding:1.5rem">
        <div>
          <div style="width:44px;height:44px;border-radius:12px;background:#ECFEFF;color:#0891B2;display:flex;align-items:center;justify-content:center;margin-bottom:1rem">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="18" r="3"/><circle cx="6" cy="6" r="3"/><path d="M13 6h3a2 2 0 0 1 2 2v7"/><line x1="6" y1="9" x2="6" y2="21"/></svg>
          </div>
          <h3 style="font-size:1.15rem;margin-bottom:.5rem;color:#0F172A">AI Chatbot Builder</h3>
          <p style="color:#64748B;font-size:.9rem;line-height:1.5">Visual no-code automation flows, knowledge base resolution, and smart qualification.</p>
        </div>
        <span style="color:#7C3AED;font-weight:700;font-size:.9rem;margin-top:1.25rem">Learn More &rarr;</span>
      </a>

      <!-- 4. AI Voice Calling -->
      <a href="<?php echo $bp; ?>products/ai-voice/" class="card reveal" style="text-decoration:none;display:flex;flex-direction:column;justify-content:space-between;border-radius:16px;padding:1.5rem">
        <div>
          <div style="width:44px;height:44px;border-radius:12px;background:#EEF2FF;color:#4F46E5;display:flex;align-items:center;justify-content:center;margin-bottom:1rem">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </div>
          <h3 style="font-size:1.15rem;margin-bottom:.5rem;color:#0F172A">AI Voice Calling</h3>
          <p style="color:#64748B;font-size:.9rem;line-height:1.5">AI agents for inbound &amp; outbound calls, instant lead callbacks, and appointment handling.</p>
        </div>
        <span style="color:#7C3AED;font-weight:700;font-size:.9rem;margin-top:1.25rem">Learn More &rarr;</span>
      </a>

      <!-- 5. WhatsApp Catalog -->
      <a href="<?php echo $bp; ?>products/catalog/" class="card reveal" style="text-decoration:none;display:flex;flex-direction:column;justify-content:space-between;border-radius:16px;padding:1.5rem">
        <div>
          <div style="width:44px;height:44px;border-radius:12px;background:#F0FDF4;color:#16A34A;display:flex;align-items:center;justify-content:center;margin-bottom:1rem">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          </div>
          <h3 style="font-size:1.15rem;margin-bottom:.5rem;color:#0F172A">WhatsApp Catalog</h3>
          <p style="color:#64748B;font-size:.9rem;line-height:1.5">Showcase products inside WhatsApp, manage cart orders, and automate inventory sync.</p>
        </div>
        <span style="color:#7C3AED;font-weight:700;font-size:.9rem;margin-top:1.25rem">Learn More &rarr;</span>
      </a>

      <!-- 6. Appointment Booking -->
      <a href="<?php echo $bp; ?>solutions/appointment/" class="card reveal" style="text-decoration:none;display:flex;flex-direction:column;justify-content:space-between;border-radius:16px;padding:1.5rem">
        <div>
          <div style="width:44px;height:44px;border-radius:12px;background:#FFFBEB;color:#D97706;display:flex;align-items:center;justify-content:center;margin-bottom:1rem">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          </div>
          <h3 style="font-size:1.15rem;margin-bottom:.5rem;color:#0F172A">Appointment Booking</h3>
          <p style="color:#64748B;font-size:.9rem;line-height:1.5">Let customers self-book appointments directly in chat with automatic calendar sync.</p>
        </div>
        <span style="color:#7C3AED;font-weight:700;font-size:.9rem;margin-top:1.25rem">Learn More &rarr;</span>
      </a>

      <!-- 7. WhatsApp Forms -->
      <a href="<?php echo $bp; ?>products/whatsapp-form/" class="card reveal" style="text-decoration:none;display:flex;flex-direction:column;justify-content:space-between;border-radius:16px;padding:1.5rem">
        <div>
          <div style="width:44px;height:44px;border-radius:12px;background:#ECFDF5;color:#059669;display:flex;align-items:center;justify-content:center;margin-bottom:1rem">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
          </div>
          <h3 style="font-size:1.15rem;margin-bottom:.5rem;color:#0F172A">WhatsApp Forms</h3>
          <p style="color:#64748B;font-size:.9rem;line-height:1.5">Collect responses via native chat forms, customer surveys, and rich lead capture flows.</p>
        </div>
        <span style="color:#7C3AED;font-weight:700;font-size:.9rem;margin-top:1.25rem">Learn More &rarr;</span>
      </a>

      <!-- 8. Click-to-WhatsApp Ads -->
      <a href="<?php echo $bp; ?>facebook-ads/" class="card reveal" style="text-decoration:none;display:flex;flex-direction:column;justify-content:space-between;border-radius:16px;padding:1.5rem">
        <div>
          <div style="width:44px;height:44px;border-radius:12px;background:#FAF5FF;color:#9333EA;display:flex;align-items:center;justify-content:center;margin-bottom:1rem">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3l1.912 5.813a2 2 0 0 0 1.275 1.275L21 12l-5.813 1.912a2 2 0 0 0-1.275 1.275L12 21l-1.912-5.813a2 2 0 0 0-1.275-1.275L3 12l5.813-1.912a2 2 0 0 0 1.275-1.275L12 3z"/></svg>
          </div>
          <h3 style="font-size:1.15rem;margin-bottom:.5rem;color:#0F172A">Click-to-WhatsApp Ads</h3>
          <p style="color:#64748B;font-size:.9rem;line-height:1.5">Drive ad traffic from Meta &amp; Google directly into active, high-converting WhatsApp conversations.</p>
        </div>
        <span style="color:#7C3AED;font-weight:700;font-size:.9rem;margin-top:1.25rem">Learn More &rarr;</span>
      </a>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container">
    <div class="section-header reveal" style="text-align:center">
      <h2 style="color:#fff">Ready to supercharge your customer communication?</h2>
      <p class="lead" style="color:#cbd5e1;margin-top:.75rem">Get started with official Meta Cloud API, automated AI workflows, and dedicated 24/7 support.</p>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="/auth/register" class="btn btn-primary btn-lg">Start Free Trial</a>
        <a href="<?php echo $bp; ?>#contact-section" class="btn btn-white btn-lg">Talk to Sales</a>
      </div>
    </div>
  </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
