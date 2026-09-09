<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../config/business-leads.php';
$HBContact = require __DIR__ . '/../config/contact.php';

$categorySlug = trim($_GET['category'] ?? 'real-estate');

if ($categorySlug === 'education' && !defined('IN_EDUCATION_PAGE')) {
    require __DIR__ . '/education/index.php';
    exit;
}

$category = get_business_lead_category($categorySlug);

if (!$category) {
    // Fallback to real-estate if slug not recognized
    $categorySlug = 'real-estate';
    $category = get_business_lead_category('real-estate');
}

$pageTitle = $category['name'] . ' Business Leads & WhatsApp Automation';
$pageDescription = $category['subtitle'] . ' Get verified mobile contacts, automated WhatsApp qualification, and high-converting workflows with InboxWa.';
$canonicalUrl = 'https://inboxwa.com/business-leads/' . urlencode($category['slug']) . '/';
$ogImage = 'assets/images/og-image.png';

$waNumber = $HBContact['data_marketplace_whatsapp'] ?? '918884058241';
$defaultWaMsg = urlencode("Hi InboxWa team, I would like to request verified business leads and datasets for {$category['name']}. Please share available counts and sample preview.");

include __DIR__ . '/../includes/header.php';
?>

<link rel="stylesheet" href="/assets/css/business-leads.css?v=3">

<main class="bl-page">
  <!-- BREADCRUMB -->
  <nav class="bl-breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span class="bl-breadcrumb-sep">/</span>
    <a href="/business-leads/">Business Leads</a>
    <span class="bl-breadcrumb-sep">/</span>
    <span style="color:#0f172a;font-weight:600;"><?php echo htmlspecialchars($category['name']); ?></span>
  </nav>

  <!-- HERO SECTION -->
  <section class="bl-hero" aria-label="<?php echo htmlspecialchars($category['name']); ?> Hero">
    <div class="bl-hero-bg" aria-hidden="true"></div>
    <div class="bl-container">
      <div class="bl-hero-grid">
        <div class="bl-hero-copy">
          <div class="bl-badge-pill">
            <span class="bl-badge-icon" style="color:<?php echo $category['color']; ?>;"><?php echo $category['svg']; ?></span>
            <span><?php echo htmlspecialchars($category['badge']); ?></span>
          </div>
          <h1 class="bl-hero-title"><?php echo $category['hero_title']; ?></h1>
          <p class="bl-hero-desc"><?php echo htmlspecialchars($category['hero_desc']); ?></p>
          
          <div class="bl-hero-actions">
            <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo $defaultWaMsg; ?>" target="_blank" rel="noopener" class="bl-btn-primary">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
              <span>Request <?php echo htmlspecialchars($category['name']); ?> Data</span>
            </a>
            <a href="#datasets" class="bl-btn-secondary">
              <span>Explore Datasets</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </a>
          </div>

          <div style="display:flex;align-items:center;gap:14px;color:#94a3b8;font-size:0.84rem;flex-wrap:wrap;">
            <span style="display:inline-flex;align-items:center;gap:5px;">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              100% WhatsApp Verified
            </span>
            <span style="display:inline-flex;align-items:center;gap:5px;">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Instant Excel/CSV Download
            </span>
            <span style="display:inline-flex;align-items:center;gap:5px;">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Zero-Ban Official Meta API
            </span>
          </div>
        </div>

        <!-- Phone Stage Simulation -->
        <div class="bl-phone-stage" aria-label="Interactive Live Phone Simulation">
          <?php if (!empty($category['chat_sim']['floats'][0])): ?>
          <div class="bl-float-pill bl-float-1">
            <b><?php echo htmlspecialchars($category['chat_sim']['floats'][0][0]); ?></b>
            <span><?php echo htmlspecialchars($category['chat_sim']['floats'][0][1]); ?></span>
          </div>
          <?php endif; ?>

          <?php if (!empty($category['chat_sim']['floats'][1])): ?>
          <div class="bl-float-pill bl-float-2">
            <b><?php echo htmlspecialchars($category['chat_sim']['floats'][1][0]); ?></b>
            <span><?php echo htmlspecialchars($category['chat_sim']['floats'][1][1]); ?></span>
          </div>
          <?php endif; ?>

          <div class="bl-phone-mockup">
            <div class="bl-phone-notch"></div>
            <div class="bl-phone-screen">
              <div class="bl-wa-header">
                <div class="bl-wa-avatar" style="background:<?php echo $category['color']; ?>;color:#ffffff;display:flex;align-items:center;justify-content:center;"><?php echo $category['svg']; ?></div>
                <div class="bl-wa-meta">
                  <strong><?php echo htmlspecialchars($category['chat_sim']['bot_name']); ?></strong>
                  <small>● <?php echo htmlspecialchars($category['chat_sim']['bot_status']); ?></small>
                </div>
              </div>
              <div class="bl-wa-chat-body">
                <?php foreach ($category['chat_sim']['messages'] as $msg): ?>
                  <div class="bl-bubble <?php echo $msg['type'] === 'user' ? 'bl-bubble-user' : 'bl-bubble-bot'; ?>">
                    <?php echo htmlspecialchars($msg['text']); ?>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- STATS BAR -->
  <section class="bl-stats-bar" aria-label="Key Performance Indicators">
    <div class="bl-container">
      <div class="bl-stats-grid">
        <?php foreach ($category['stats'] as $st): ?>
        <div class="bl-stat-item">
          <div class="bl-stat-num"><?php echo htmlspecialchars($st[0]); ?></div>
          <div class="bl-stat-lbl"><?php echo htmlspecialchars($st[1]); ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- AVAILABLE DATASETS (Directly fulfills user's "Available Data" & "Explore Data") -->
  <section class="bl-section" id="datasets">
    <div class="bl-container">
      <div class="bl-section-header">
        <span class="bl-badge-pill" style="background:#f1f5f9;color:#0f172a;border-color:#e2e8f0;">Verified Datasets Catalog</span>
        <h2>Available Data for <?php echo htmlspecialchars($category['name']); ?></h2>
        <p><?php echo htmlspecialchars($category['subtitle']); ?></p>
      </div>

      <div class="bl-datasets-grid">
        <?php foreach ($category['datasets'] as $dset): 
          $dsetWaMsg = urlencode("Hi InboxWa, I want to explore and request the verified dataset: '{$dset['title']}' under {$category['name']}. Please share sample records and commercial details.");
        ?>
        <article class="bl-dataset-card">
          <div>
            <div class="bl-dataset-top">
              <span class="bl-badge-avail">Available Data</span>
              <span class="bl-dataset-count"><?php echo htmlspecialchars($dset['count']); ?></span>
            </div>

            <h3><?php echo htmlspecialchars($dset['title']); ?></h3>
            <div class="bl-dataset-coverage">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              <span>Coverage: <?php echo htmlspecialchars($dset['coverage']); ?></span>
            </div>

            <div class="bl-dataset-fields-box">
              <div class="bl-dataset-fields-title">Data Fields Included</div>
              <div class="bl-dataset-fields-tags">
                <?php foreach ($dset['fields'] as $fld): ?>
                  <span class="bl-field-tag"><?php echo htmlspecialchars($fld); ?></span>
                <?php endforeach; ?>
              </div>
            </div>

            <p style="font-size:0.8rem;color:#64748b;margin-bottom:1.5rem;line-height:1.45;">
              <strong style="color:#334155;">Ideal for:</strong> <?php echo htmlspecialchars($dset['audience']); ?>
            </p>
          </div>

          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo $dsetWaMsg; ?>" target="_blank" rel="noopener" class="bl-dataset-btn">
            <span>Explore Data</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CUSTOMER JOURNEY WORKFLOW (Directly fulfills user's "images and journey flow and everything") -->
  <section class="bl-section bl-section-alt" id="journey">
    <div class="bl-container">
      <div class="bl-section-header">
        <span class="bl-badge-pill" style="background:rgba(37,99,235,0.1);color:#2563eb;border-color:rgba(37,99,235,0.25);">End-to-End Workflow</span>
        <h2>Customer Journey &amp; How It Works</h2>
        <p>A proven 3-step process to connect targeted business data, automate lead qualification, and close deals 24/7 on WhatsApp.</p>
      </div>

      <div class="bl-journey-flow">
        <?php foreach ($category['journey'] as $idx => $jstep): 
          $isReverse = ($idx % 2 === 1);
        ?>
        <div class="bl-journey-card <?php echo $isReverse ? 'reverse' : ''; ?>">
          <div class="bl-journey-media">
            <span class="bl-journey-badge-float">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Official Verified Workflow
            </span>
            <img src="<?php echo $bp . htmlspecialchars($jstep['image']); ?>" alt="<?php echo htmlspecialchars($jstep['title']); ?>" class="bl-journey-img" loading="lazy" />
          </div>

          <div class="bl-journey-content">
            <div class="bl-journey-step-header">
              <span class="bl-journey-step-pill">Step <?php echo htmlspecialchars($jstep['step']); ?> &bull; <?php echo htmlspecialchars($jstep['phase']); ?></span>
              <span class="bl-journey-step-time"><?php echo htmlspecialchars($jstep['time']); ?></span>
            </div>

            <h3 class="bl-journey-title"><?php echo htmlspecialchars($jstep['title']); ?></h3>
            <p class="bl-journey-desc"><?php echo htmlspecialchars($jstep['desc']); ?></p>

            <div class="bl-journey-guide-grid">
              <div class="bl-journey-guide-box">
                <div class="bl-journey-box-label">👉 What You Do</div>
                <ul class="bl-journey-list">
                  <?php foreach ($jstep['you_do'] as $yd): ?>
                  <li>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span><?php echo htmlspecialchars($yd); ?></span>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <div class="bl-journey-guide-box">
                <div class="bl-journey-box-label">⚙️ How It Works</div>
                <ul class="bl-journey-list">
                  <?php foreach ($jstep['how_it_works'] as $hiw): ?>
                  <li>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span><?php echo htmlspecialchars($hiw); ?></span>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>

            <div class="bl-journey-kpi-badge">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
              <span><?php echo htmlspecialchars($jstep['kpi']); ?></span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- PROBLEMS & SOLUTIONS -->
  <section class="bl-section">
    <div class="bl-container">
      <div class="bl-section-header">
        <span class="bl-badge-pill" style="background:#fee2e2;color:#b91c1c;border-color:#fecaca;">Bottlenecks vs Solutions</span>
        <h2>Why <?php echo htmlspecialchars($category['name']); ?> Businesses Choose InboxWa</h2>
        <p>Eliminate manual calling fatigue, stop cold leads from going silent, and automate your entire customer acquisition funnel.</p>
      </div>

      <div class="bl-problems-solutions-grid">
        <!-- Problems Column -->
        <div class="bl-prob-sol-col" style="border-top:4px solid #ef4444;">
          <h3 style="color:#b91c1c;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
            <span>Common Industry Challenges</span>
          </h3>
          <div class="bl-cards-list">
            <?php foreach ($category['problems'] as $prob): ?>
            <div class="bl-item-card">
              <h4><?php echo htmlspecialchars($prob['title']); ?></h4>
              <p><?php echo htmlspecialchars($prob['desc']); ?></p>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Solutions Column -->
        <div class="bl-prob-sol-col" style="border-top:4px solid #10b981;">
          <h3 style="color:#059669;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            <span>The InboxWa Advantage</span>
          </h3>
          <div class="bl-cards-list">
            <?php foreach ($category['solutions'] as $sol): ?>
            <div class="bl-item-card">
              <h4><?php echo htmlspecialchars($sol['title']); ?></h4>
              <p><?php echo htmlspecialchars($sol['desc']); ?></p>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA SECTION -->
  <section class="bl-cta-section">
    <div class="bl-container">
      <div class="bl-cta-box">
        <h2>Accelerate Your <?php echo htmlspecialchars($category['name']); ?> Growth</h2>
        <p>Get instant access to verified business datasets, launch official WhatsApp AI bots, and scale your sales pipeline with zero ban risk.</p>
        <div style="display:flex;align-items:center;justify-content:center;gap:1rem;flex-wrap:wrap;">
          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo $defaultWaMsg; ?>" target="_blank" rel="noopener" class="bl-btn-primary" style="padding:1rem 2.2rem;font-size:1.05rem;">
            <span>Request Verified Leads on WhatsApp</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
          <a href="/auth/register" class="bl-btn-secondary" style="padding:1rem 2rem;">
            <span>Start Free Trial</span>
          </a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
