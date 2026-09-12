<?php
/**
 * Unified Industry Page Controller for InboxWa
 * High-conversion template for all 12 industries
 */
$allIndustries = require __DIR__ . '/industry_data.php';

if (!isset($currentSlug) || !isset($allIndustries[$currentSlug])) {
    header("HTTP/1.0 404 Not Found");
    echo "Industry page not found.";
    exit;
}

$ind = $allIndustries[$currentSlug];
$basePath = '../../';
$pageTitle = htmlspecialchars($ind['name']) . ' Communication Solutions | InboxWa';
$pageDescription = htmlspecialchars($ind['meta_desc']);
$reqPath = parse_url($_SERVER['REQUEST_URI'] ?? ('/industry/' . $currentSlug . '/'), PHP_URL_PATH);
$canonicalUrl = 'https://inboxwa.com' . ($reqPath ?: ('/industry/' . $currentSlug . '/'));

include __DIR__ . '/../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/industry.css?v=2">

<div class="industry-page">
  <div class="container">
    <!-- Top Breadcrumbs and Status Badge -->
    <div class="industry-top-bar">
      <nav class="industry-crumb-nav" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="industry-crumb-sep">/</span>
        <a href="/solutions/">Solutions</a>
        <span class="industry-crumb-sep">/</span>
        <span><?php echo htmlspecialchars($ind['name']); ?></span>
      </nav>
      <div class="industry-partner-badge">
        <span class="industry-badge-dot"></span>
        Meta Official Tech Partner · <?php echo htmlspecialchars($ind['nav_name']); ?> Messaging
      </div>
    </div>
  </div>

  <!-- =========================================================================
       1. HERO SECTION
       ========================================================================= -->
  <section class="industry-hero">
    <div class="container">
      <div class="industry-hero-grid">
        <div class="industry-hero-content">
          <span class="industry-kicker">TECHNOLOGY SOLUTION</span>
          <h1><?php 
            $titleParts = explode('with', $ind['hero_title'], 2);
            if (count($titleParts) === 2) {
              echo htmlspecialchars(trim($titleParts[0])) . ' with <br><span class="highlight-text">' . htmlspecialchars(trim($titleParts[1])) . '</span>';
            } else {
              $words = explode(' ', $ind['hero_title']);
              $splitAt = max(1, count($words) - 3);
              $firstPart = implode(' ', array_slice($words, 0, $splitAt));
              $secondPart = implode(' ', array_slice($words, $splitAt));
              echo htmlspecialchars($firstPart) . ' <br><span class="highlight-text">' . htmlspecialchars($secondPart) . '</span>';
            }
          ?></h1>
          <p class="industry-hero-lead"><?php echo htmlspecialchars($ind['hero_lead']); ?></p>
          
          <div class="industry-ctas">
            <button type="button" class="industry-btn-primary" onclick="openIndustryModal('Try it for free - <?php echo addslashes($ind['name']); ?>')">
              Try it for free
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
            <button type="button" class="industry-btn-outline" onclick="openIndustryModal('Schedule Demo - <?php echo addslashes($ind['name']); ?>')">
              Explore Now
            </button>
            <a href="https://wa.me/918050854445?text=Hi%20InboxWa%2C%20I%20want%20to%20know%20more%20about%20WhatsApp%20messaging%20solutions%20for%20<?php echo urlencode($ind['name']); ?>" target="_blank" rel="noopener" class="industry-btn-wa">
              <svg viewBox="0 0 24 24" width="17" height="17" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
              Chat on WhatsApp
            </a>
          </div>

          <div class="industry-hero-trust-strip">
            <div class="industry-trust-item">
              <svg class="industry-green-tick" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>100% Meta Verified Tech Partner</span>
            </div>
            <div class="industry-trust-item">
              <svg class="industry-green-tick" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>256-Bit Secure End-to-End Encryption</span>
            </div>
            <div class="industry-trust-item">
              <svg class="industry-green-tick" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>99.99% Guaranteed SLA</span>
            </div>
          </div>
        </div>

        <div class="industry-hero-visual">
          <div class="industry-hero-img-wrap">
            <img src="<?php echo htmlspecialchars($ind['hero_image']); ?>" alt="InboxWa <?php echo htmlspecialchars($ind['name']); ?> Solutions" width="1024" height="842" loading="eager">
          </div>
          <div class="industry-hero-floating-badge">
            <div class="industry-floating-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <div class="industry-floating-text">
              <strong>InboxWa <?php echo htmlspecialchars($ind['nav_name']); ?></strong>
              <span>Real-Time Omnichannel Automation</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       2. TRUSTED BY SECTION / MARQUEE
       ========================================================================= -->
  <section class="industry-marquee-section">
    <div class="container">
      <h2 class="industry-marquee-title">Trusted by the world’s most ambitious teams.</h2>
      <p class="industry-marquee-sub">Powering automated conversations, instant notifications, and mission-critical workflows across <?php echo htmlspecialchars($ind['name']); ?>.</p>
      
      <div class="industry-marquee-wrapper">
        <div class="industry-marquee-track">
          <span class="industry-logo-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg> Global Enterprise Cloud</span>
          <span class="industry-logo-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 2 22 22 22"/></svg> Apex Healthcare Systems</span>
          <span class="industry-logo-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><rect x="3" y="3" width="18" height="18" rx="2"/></svg> Prime Commerce Ltd</span>
          <span class="industry-logo-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg> EduTech Global</span>
          <span class="industry-logo-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg> City Transit Authority</span>
          <span class="industry-logo-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 2 22 22 22"/></svg> Omnichannel Logistics</span>
          <!-- Duplicate for seamless loop -->
          <span class="industry-logo-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg> Global Enterprise Cloud</span>
          <span class="industry-logo-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 2 22 22 22"/></svg> Apex Healthcare Systems</span>
          <span class="industry-logo-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><rect x="3" y="3" width="18" height="18" rx="2"/></svg> Prime Commerce Ltd</span>
          <span class="industry-logo-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg> EduTech Global</span>
          <span class="industry-logo-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg> City Transit Authority</span>
          <span class="industry-logo-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 2 22 22 22"/></svg> Omnichannel Logistics</span>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       3. 6 ALTERNATING FEATURE ROWS (FLOATING TRANSPARENT PNG VISUALS)
       ========================================================================= -->
  <section class="industry-features-section">
    <div class="container">
      <div class="industry-section-header">
        <h2>Enterprise-Grade WhatsApp Solutions for <br><?php echo htmlspecialchars($ind['name']); ?></h2>
        <p>Built for scale, speed, and continuous customer satisfaction. Discover how InboxWa streamlines your operations.</p>
      </div>

      <?php foreach ($ind['features'] as $fIdx => $feat): ?>
      <?php $isEven = ($fIdx % 2 !== 0); ?>
      <div class="industry-feature-row<?php echo $isEven ? ' reverse' : ''; ?>">
        <div class="industry-feature-content">
          <span class="industry-feature-badge">Feature <?php echo htmlspecialchars($feat['index']); ?></span>
          <h3 class="industry-feature-title"><?php echo htmlspecialchars($feat['title']); ?></h3>
          <p class="industry-feature-desc"><?php echo htmlspecialchars($feat['desc']); ?></p>
          
          <?php if (!empty($feat['bullets'])): ?>
          <ul class="industry-feature-bullets">
            <?php foreach ($feat['bullets'] as $bullet): ?>
            <li>
              <span class="industry-bullet-icon">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
              </span>
              <span><?php echo htmlspecialchars($bullet); ?></span>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>

          <button type="button" class="industry-feature-cta" onclick="openIndustryModal('Explore Feature: <?php echo addslashes($feat['title']); ?>')">
            <span>Explore <?php echo htmlspecialchars($feat['title']); ?></span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </button>
        </div>

        <div class="industry-feature-visual">
          <img src="<?php echo htmlspecialchars($feat['image']); ?>" alt="<?php echo htmlspecialchars($feat['title']); ?> Illustration" loading="lazy">
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- =========================================================================
       4. TAILORED SOLUTIONS CARDS (6 GRIDS)
       ========================================================================= -->
  <section class="industry-solutions-section">
    <div class="container">
      <div class="industry-section-header">
        <h2>Tailored Solutions for Your Business Needs</h2>
        <p>Comprehensive tools designed specifically to overcome industry roadblocks and elevate ROI.</p>
      </div>

      <div class="industry-solutions-grid">
        <?php 
        $icons = [
          '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>',
          '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
          '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>',
          '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>',
          '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>',
          '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>'
        ];
        foreach ($ind['solutions'] as $sIdx => $sol): 
          $iconSvg = $icons[$sIdx % count($icons)];
        ?>
        <div class="industry-sol-card">
          <div class="industry-sol-icon">
            <?php echo $iconSvg; ?>
          </div>
          <h3><?php echo htmlspecialchars($sol['title']); ?></h3>
          <p><?php echo htmlspecialchars($sol['desc']); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       5. FAQS ACCORDION
       ========================================================================= -->
  <section class="industry-faq-section">
    <div class="container">
      <div class="industry-section-header">
        <h2>Got Questions? We’ve Got Answers!</h2>
        <p>Everything you need to know about implementing InboxWa in <?php echo htmlspecialchars($ind['name']); ?>.</p>
      </div>

      <div class="industry-faq-list">
        <?php foreach ($ind['faqs'] as $qIdx => $faq): ?>
        <div class="industry-faq-item<?php echo $qIdx === 0 ? ' active' : ''; ?>">
          <button type="button" class="industry-faq-header" onclick="toggleIndustryFaq(this)">
            <span><?php echo htmlspecialchars($faq['q']); ?></span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="industry-faq-body" style="<?php echo $qIdx === 0 ? 'display:block;' : ''; ?>">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       6. CTA BANNER SECTION
       ========================================================================= -->
  <section class="industry-cta-section">
    <div class="container">
      <div class="industry-cta-banner">
        <h2>Transform Your <?php echo htmlspecialchars($ind['name']); ?> Communication</h2>
        <p>Join hundreds of high-growth businesses using InboxWa to automate customer engagement, scale conversions, and build lasting loyalty.</p>
        <div class="industry-cta-actions">
          <button type="button" class="industry-btn-white" onclick="openIndustryModal('CTA Banner - <?php echo addslashes($ind['name']); ?>')">
            Get Started Free
          </button>
          <a href="https://wa.me/918050854445?text=Hi%20InboxWa%2C%20I%20want%20to%20schedule%20a%20demo%20for%20<?php echo urlencode($ind['name']); ?>" target="_blank" rel="noopener" class="industry-btn-ghost">
            Chat with an Expert
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Simple FAQ Toggle & Modal Script -->
<script>
function toggleIndustryFaq(btn) {
  const item = btn.closest('.industry-faq-item');
  const body = item.querySelector('.industry-faq-body');
  const isActive = item.classList.contains('active');
  
  // Close all other items
  document.querySelectorAll('.industry-faq-item').forEach(i => {
    i.classList.remove('active');
    const b = i.querySelector('.industry-faq-body');
    if (b) b.style.display = 'none';
  });

  if (!isActive) {
    item.classList.add('active');
    if (body) body.style.display = 'block';
  }
}

function openIndustryModal(source) {
  if (typeof openDemoModal === 'function') {
    openDemoModal();
  } else if (typeof openBfsiModal === 'function') {
    openBfsiModal(source);
  } else {
    window.location.href = '/#contact-section';
  }
}
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
