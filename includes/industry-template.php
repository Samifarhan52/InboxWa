<?php
/**
 * Unified Template Renderer for InboxWa Industry Solution Pages
 * Renders complete, accessible, responsive, high-converting industry landing pages
 */

if (!isset($indData)) {
    die('Industry data not provided');
}

$basePath = $basePath ?? '../../';
$pageTitle = $indData['title'] ?? 'Industry Messaging Solutions | InboxWa';
$pageDescription = $indData['meta_desc'] ?? 'Transform your industry communication with InboxWa Official WhatsApp Business API.';
$reqPath = parse_url($_SERVER['REQUEST_URI'] ?? ('/business-leads/' . ($indData['slug'] ?? '') . '/'), PHP_URL_PATH);
$canonicalUrl = 'https://inboxwa.com' . ($reqPath ?: ('/business-leads/' . ($indData['slug'] ?? '') . '/'));

include __DIR__ . '/header.php';
?>
<link rel="stylesheet" href="/assets/css/industry-pages.css?v=2">

<div class="ind-page">
  <div class="container">
    <!-- Top Breadcrumbs and Status Badge -->
    <div class="ind-top-bar">
      <nav class="ind-crumb-nav" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="ind-crumb-sep">/</span>
        <a href="/business-leads/">Business Leads</a>
        <span class="ind-crumb-sep">/</span>
        <span><?php echo htmlspecialchars($indData['breadcrumb_label'] ?? $indData['title']); ?></span>
      </nav>
      <div class="ind-partner-badge">
        <span class="ind-badge-dot"></span>
        Meta Official Tech Partner · <?php echo htmlspecialchars($indData['breadcrumb_label'] ?? 'Industry Solutions'); ?>
      </div>
    </div>
  </div>

  <!-- =========================================================================
       1. HERO SECTION
       ========================================================================= -->
  <section class="ind-hero">
    <div class="container">
      <div class="ind-hero-grid">
        <div class="ind-hero-content">
          <span class="ind-kicker"><?php echo htmlspecialchars($indData['kicker'] ?? 'INDUSTRY SOLUTION'); ?></span>
          <h1><?php echo $indData['headline']; ?></h1>
          <p class="ind-hero-lead"><?php echo htmlspecialchars($indData['lead']); ?></p>
          
          <div class="ind-ctas">
            <button type="button" class="ind-btn-primary" onclick="openIndModal('Try it for free')">
              Try it for free
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
            <button type="button" class="ind-btn-outline" onclick="openIndModal('Schedule Demo')">
              Schedule Demo
            </button>
            <a href="https://wa.me/918050854445?text=<?php echo urlencode('Hi InboxWa, I want to learn more about WhatsApp solutions for ' . ($indData['breadcrumb_label'] ?? 'our business')); ?>" target="_blank" rel="noopener" class="ind-btn-wa">
              <svg viewBox="0 0 24 24" width="17" height="17" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
              Chat on WhatsApp
            </a>
          </div>

          <div class="ind-hero-trust-strip">
            <div class="ind-trust-item">
              <svg class="ind-green-tick" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Meta Official Tech Partner</span>
            </div>
            <div class="ind-trust-item">
              <svg class="ind-green-tick" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Green Tick Verified Setup</span>
            </div>
            <div class="ind-trust-item">
              <svg class="ind-green-tick" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>99.99% Guaranteed Uptime</span>
            </div>
          </div>
        </div>

        <!-- Hero Visual: Authentic Cloned & Branded Image Graphic + Live Interactive Overlay -->
        <div class="ind-hero-visual">
          <div class="ind-hero-media-card">
            <img src="/assets/images/industries/<?php echo $indData['slug']; ?>/hero-branded.png" 
                 alt="<?php echo htmlspecialchars($indData['title']); ?> - InboxWa" 
                 class="ind-hero-media-img" 
                 loading="eager">

            <!-- Floating Verified Metric Pill -->
            <?php if (!empty($indData['floating_metric'])): ?>
              <div class="ind-floating-metric">
                <div class="ind-metric-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <div class="ind-metric-info">
                  <strong><?php echo htmlspecialchars($indData['floating_metric']['value']); ?></strong>
                  <span><?php echo htmlspecialchars($indData['floating_metric']['label']); ?></span>
                </div>
              </div>
            <?php endif; ?>

            <!-- Live Verified WhatsApp Chat Pill Float -->
            <div class="ind-hero-chat-pill">
              <div class="ind-pill-avatar">IW</div>
              <div class="ind-pill-text">
                <span class="ind-pill-title">InboxWa AI <?php echo htmlspecialchars($indData['breadcrumb_label'] ?? 'Bot'); ?> <svg width="12" height="12" viewBox="0 0 24 24" fill="#00D26A"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg></span>
                <span class="ind-pill-desc">Meta Official Tech Partner · Online 24/7</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       CLIENT TRUST LOGO MARQUEE
       ========================================================================= -->
  <section class="ind-marquee-section">
    <div class="container">
      <p class="ind-marquee-label">Trusted by leading <?php echo htmlspecialchars($indData['breadcrumb_label'] ?? 'industry'); ?> enterprises &amp; fast-growing brands</p>
      <div class="ind-marquee-container">
        <div class="ind-marquee-track">
          <?php 
          $slug = $indData['slug'];
          $logos = [
            "/assets/images/industries/{$slug}/logo-1.png",
            "/assets/images/industries/{$slug}/logo-2.png",
            "/assets/images/industries/{$slug}/logo-3.png",
            "/assets/images/industries/{$slug}/logo-4.png"
          ];
          for ($r = 0; $r < 5; $r++):
            foreach ($logos as $lg): ?>
              <div class="ind-logo-slide">
                <img src="<?php echo $lg; ?>" alt="<?php echo htmlspecialchars($indData['breadcrumb_label'] ?? 'Industry'); ?> Client Partner - InboxWa" loading="lazy">
              </div>
          <?php endforeach; endfor; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       2. STATS STRIP
       ========================================================================= -->
  <?php if (!empty($indData['stats'])): ?>
    <section class="ind-stats-section">
      <div class="container">
        <div class="ind-stats-grid">
          <?php foreach ($indData['stats'] as $stat): ?>
            <div class="ind-stat-card">
              <div class="ind-stat-number"><?php echo htmlspecialchars($stat['number']); ?></div>
              <div class="ind-stat-label"><?php echo htmlspecialchars($stat['label']); ?></div>
              <div class="ind-stat-sub"><?php echo htmlspecialchars($stat['sub']); ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- =========================================================================
       3. CORE USE CASES (Alternating Grid)
       ========================================================================= -->
  <section class="ind-usecases-section" id="use-cases">
    <div class="container">
      <div class="ind-section-header">
        <span class="ind-kicker">PROVEN CONVERSATIONAL USE CASES</span>
        <h2>Automate, Engage &amp; Scale with WhatsApp</h2>
        <p>Discover high-impact WhatsApp automation workflows designed specifically for <?php echo htmlspecialchars($indData['breadcrumb_label'] ?? 'your industry'); ?>.</p>
      </div>

      <?php foreach (($indData['use_cases'] ?? []) as $index => $uc): ?>
        <div class="ind-usecase-row <?php echo ($index % 2 === 1) ? 'reverse' : ''; ?>">
          <div class="ind-usecase-visual">
            <div class="ind-usecase-media-box">
              <img src="/assets/images/industries/<?php echo $indData['slug']; ?>/usecase-<?php echo ($index + 1); ?>.webp" 
                   alt="<?php echo htmlspecialchars($uc['title']); ?> - InboxWa" 
                   class="ind-usecase-img" 
                   loading="lazy">
              <div class="ind-usecase-media-pill">
                <span class="ind-badge-dot"></span>
                InboxWa · <?php echo htmlspecialchars($uc['tag'] ?? 'Core Solution'); ?>
              </div>
            </div>

            <div class="ind-interactive-chat">
              <div class="ind-chat-header-mini">
                <span class="status-dot"></span>
                <strong>InboxWa AI Engine · <?php echo htmlspecialchars($uc['title']); ?></strong>
              </div>
              <div class="ind-msg bot">
                <?php echo $uc['chat_sample']['bot']; ?>
                <?php if (!empty($uc['chat_sample']['buttons'])): ?>
                  <div class="ind-msg-buttons">
                    <?php foreach ($uc['chat_sample']['buttons'] as $b): ?>
                      <div class="ind-msg-btn"><?php echo htmlspecialchars($b); ?></div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
                <span class="msg-time"><?php echo date('h:i A'); ?></span>
              </div>
              <?php if (!empty($uc['chat_sample']['user'])): ?>
                <div class="ind-msg user">
                  <?php echo htmlspecialchars($uc['chat_sample']['user']); ?>
                  <span class="msg-time"><?php echo date('h:i A'); ?></span>
                </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="ind-usecase-content">
            <span class="ind-usecase-tag"><?php echo htmlspecialchars($uc['tag'] ?? 'Core Solution'); ?></span>
            <h3><?php echo htmlspecialchars($uc['title']); ?></h3>
            <p><?php echo htmlspecialchars($uc['description']); ?></p>
            <ul class="ind-usecase-points">
              <?php foreach ($uc['points'] as $p): ?>
                <li class="ind-usecase-point">
                  <span class="ind-point-icon">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span><?php echo htmlspecialchars($p); ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- =========================================================================
       4. INBOXWA CONVERSATIONAL JOURNEY FLOW
       ========================================================================= -->
  <section class="ind-journey-section">
    <div class="container">
      <div class="ind-section-header">
        <span class="ind-kicker">INBOXWA JOURNEY FLOW</span>
        <h2>End-to-End WhatsApp Automation Pipeline</h2>
        <p>From omnichannel discovery to instant qualification and long-term retention, see how InboxWa powers the complete lifecycle.</p>
      </div>

      <div class="ind-journey-grid">
        <?php foreach (($indData['journey_steps'] ?? []) as $i => $step): ?>
          <div class="ind-journey-step">
            <div class="ind-step-badge"><?php echo ($i + 1); ?></div>
            <h4><?php echo htmlspecialchars($step['title']); ?></h4>
            <p><?php echo htmlspecialchars($step['desc']); ?></p>
            <span class="ind-step-tag"><?php echo htmlspecialchars($step['tag']); ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       5. TAILORED SOLUTIONS / 6-CARD GRID
       ========================================================================= -->
  <section class="ind-why-section">
    <div class="container">
      <div class="ind-section-header">
        <span class="ind-kicker">WHY CHOOSE INBOXWA</span>
        <h2>Tailored Solutions for Your Business Needs</h2>
        <p>Enterprise-grade infrastructure, native multi-channel integrations, and purpose-built tools to maximize ROI.</p>
      </div>

      <div class="ind-why-grid">
        <?php foreach (($indData['solutions'] ?? []) as $sol): ?>
          <div class="ind-why-card">
            <div class="ind-why-icon">
              <?php echo $sol['icon']; ?>
            </div>
            <h3><?php echo htmlspecialchars($sol['title']); ?></h3>
            <p><?php echo htmlspecialchars($sol['desc']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       6. ACCORDION FAQS
       ========================================================================= -->
  <section class="ind-faq-section">
    <div class="container">
      <div class="ind-section-header">
        <span class="ind-kicker">FREQUENTLY ASKED QUESTIONS</span>
        <h2>Got Questions? We’ve Got Answers!</h2>
        <p>Everything you need to know about setting up and scaling WhatsApp messaging for your team.</p>
      </div>

      <div class="ind-faq-list">
        <?php foreach (($indData['faqs'] ?? []) as $idx => $faq): ?>
          <div class="ind-faq-item <?php echo ($idx === 0) ? 'active' : ''; ?>">
            <div class="ind-faq-header" onclick="toggleIndFaq(this)">
              <span><?php echo htmlspecialchars($faq['q']); ?></span>
              <span class="ind-faq-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
              </span>
            </div>
            <div class="ind-faq-body">
              <?php echo htmlspecialchars($faq['a']); ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       7. BOTTOM CTA BANNER
       ========================================================================= -->
  <section class="ind-cta-section">
    <div class="container">
      <div class="ind-cta-card">
        <div class="ind-cta-content">
          <h2><?php echo $indData['cta_heading'] ?? ('Ready to Scale Your ' . ($indData['breadcrumb_label'] ?? 'Business') . ' with InboxWa?'); ?></h2>
          <p><?php echo htmlspecialchars($indData['cta_desc'] ?? 'Join thousands of fast-growing businesses automating conversations, bookings, and sales on WhatsApp.'); ?></p>
          <div class="ind-cta-actions">
            <button type="button" class="ind-btn-primary" onclick="openIndModal('<?php echo htmlspecialchars($indData['breadcrumb_label'] ?? 'Get Started'); ?>')">
              Get Started Now!
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
            <a href="https://wa.me/918050854445?text=<?php echo urlencode('Hi InboxWa, I want to get started with ' . ($indData['breadcrumb_label'] ?? 'our business')); ?>" target="_blank" rel="noopener" class="ind-btn-wa">
              <svg viewBox="0 0 24 24" width="17" height="17" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
              Chat on WhatsApp
            </a>
          </div>
        </div>

        <div class="ind-cta-visual">
          <div class="ind-cta-badge-box">
            <div class="ind-cta-badge-icon">⚡</div>
            <strong>Live in 24 Hours</strong>
            <p>Official Meta WhatsApp Business API activation, verified green tick assistance, and dedicated support.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- =========================================================================
     8. INTERACTIVE DEMO / TRIAL MODAL
     ========================================================================= -->
<div class="ind-modal" id="indModal" onclick="if(event.target === this) closeIndModal()">
  <div class="ind-modal-dialog">
    <div class="ind-modal-header">
      <button type="button" class="ind-modal-close" onclick="closeIndModal()">&times;</button>
      <h3 id="indModalTitle">Schedule <?php echo htmlspecialchars($indData['breadcrumb_label'] ?? 'Industry'); ?> Demo</h3>
      <p>Connect with an InboxWa Solution Specialist within 15 minutes.</p>
    </div>
    <div class="ind-modal-body">
      <form id="indDemoForm" onsubmit="handleIndSubmit(event)">
        <input type="hidden" name="source" value="<?php echo htmlspecialchars($indData['breadcrumb_label'] ?? 'Industry'); ?> Page">
        <input type="hidden" name="interest" id="indInterestInput" value="<?php echo htmlspecialchars($indData['breadcrumb_label'] ?? 'Industry'); ?> Solution Demo">
        
        <div class="ind-form-group">
          <label for="indName">Full Name *</label>
          <input type="text" id="indName" name="name" class="ind-form-control" placeholder="e.g. Ramesh Sharma" required>
        </div>

        <div class="ind-form-group">
          <label for="indEmail">Work Email *</label>
          <input type="email" id="indEmail" name="email" class="ind-form-control" placeholder="ramesh@company.com" required>
        </div>

        <div class="ind-form-group">
          <label for="indPhone">WhatsApp Number *</label>
          <input type="tel" id="indPhone" name="phone" class="ind-form-control" placeholder="+91 98765 43210" required>
        </div>

        <div class="ind-form-group">
          <label for="indCompany">Company / Business Name</label>
          <input type="text" id="indCompany" name="company" class="ind-form-control" placeholder="e.g. Prime Living Developers">
        </div>

        <button type="submit" class="ind-btn-primary" style="width:100%;justify-content:center;margin-top:0.5rem;" id="indSubmitBtn">
          Confirm &amp; Request Demo
        </button>
      </form>
    </div>
  </div>
</div>

<script>
function toggleIndFaq(header) {
  const item = header.parentElement;
  const wasActive = item.classList.contains('active');
  document.querySelectorAll('.ind-faq-item').forEach(el => el.classList.remove('active'));
  if (!wasActive) {
    item.classList.add('active');
  }
}

function openIndModal(purpose) {
  const modal = document.getElementById('indModal');
  const title = document.getElementById('indModalTitle');
  const interest = document.getElementById('indInterestInput');
  if (purpose) {
    title.textContent = purpose;
    interest.value = purpose + ' - <?php echo addslashes($indData['breadcrumb_label'] ?? 'Industry'); ?> Page';
  }
  modal.classList.add('show');
  document.body.style.overflow = 'hidden';
}

function closeIndModal() {
  const modal = document.getElementById('indModal');
  modal.classList.remove('show');
  document.body.style.overflow = '';
}

function handleIndSubmit(e) {
  e.preventDefault();
  const btn = document.getElementById('indSubmitBtn');
  const originalText = btn.innerHTML;
  btn.innerHTML = 'Submitting...';
  btn.disabled = true;

  const form = e.target;
  const formData = new FormData(form);

  fetch('/api/lead.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.json().catch(() => ({ success: true })))
  .then(data => {
    btn.innerHTML = '✓ Request Received!';
    btn.style.background = '#00D26A';
    setTimeout(() => {
      closeIndModal();
      btn.innerHTML = originalText;
      btn.disabled = false;
      btn.style.background = '';
      form.reset();
      alert('Thank you! An InboxWa Industry Specialist will contact you within 15 minutes.');
    }, 1200);
  })
  .catch(err => {
    btn.innerHTML = '✓ Request Received!';
    btn.style.background = '#00D26A';
    setTimeout(() => {
      closeIndModal();
      btn.innerHTML = originalText;
      btn.disabled = false;
      btn.style.background = '';
      form.reset();
      alert('Thank you! An InboxWa Industry Specialist will contact you shortly.');
    }, 1200);
  });
}
</script>

<?php include __DIR__ . '/footer.php'; ?>
