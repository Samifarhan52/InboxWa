<?php
$basePath = '/';
$bp = '/';
require_once __DIR__ . '/../config/business-leads.php';
$HBContact = require __DIR__ . '/../config/contact.php';

$categorySlug = trim($_GET['category'] ?? 'real-estate');

if (strtolower($categorySlug) === 'education') {
    require_once __DIR__ . '/../Industries/education/index.php';
    exit;
}

$category = get_business_lead_category($categorySlug);

if (!$category) {
    // Fallback to real-estate if slug not recognized
    $categorySlug = 'real-estate';
    $category = get_business_lead_category('real-estate');
}

$pageTitle = $category['name'] . ' Business Leads & WhatsApp Automation | InboxWa';
$pageDescription = $category['subtitle'] . ' Get verified mobile contacts, automated WhatsApp qualification, and high-converting workflows with InboxWa.';
$canonicalUrl = 'https://inboxwa.com/business-leads/' . urlencode($category['slug']) . '/';
$ogImage = '/assets/images/og-image.png';

$waNumber = $HBContact['data_marketplace_whatsapp'] ?? '918050854445';
$defaultWaMsg = urlencode("Hi InboxWa team, I would like to request verified business leads and datasets for {$category['name']}. Please share available counts and sample preview.");

include __DIR__ . '/../includes/header.php';
?>

<link rel="stylesheet" href="/assets/css/business-leads.css?v=6">

<div class="bl-page">
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

  <?php if ($categorySlug === 'education'): ?>
  <!-- 6 EDTECH USE CASES (CLONED FROM GETGABS) -->
  <section class="bl-section" id="use-cases">
    <div class="bl-container">
      <div class="bl-section-header">
        <span class="bl-badge-pill" style="background:rgba(16,185,129,0.1);color:#059669;border-color:rgba(16,185,129,0.25);">Official EdTech Solutions</span>
        <h2>6 Proven Ways to Use WhatsApp for Education &amp; EdTech</h2>
        <p>From seamless admission inquiries and attendance alerts to fee collection and instant exam notifications, discover how leading institutions transform student engagement.</p>
      </div>

      <div class="bl-journey-flow">
        <!-- Use Case 1 -->
        <div class="bl-journey-card">
          <div class="bl-journey-media">
            <span class="bl-journey-badge-float">01 &bull; Admission Workflow</span>
            <img src="/assets/images/edtech_admission_banner.jpg" alt="WhatsApp Take Admission &amp; Enrollment - Student Admission Flow" class="bl-journey-img" loading="lazy">
          </div>
          <div class="bl-journey-content">
            <div class="bl-journey-step-header">
              <span class="bl-journey-step-pill" style="background:#ecfdf5;color:#059669;">Use Case 01 &bull; Admissions</span>
              <span class="bl-journey-step-time">Instant In-Chat</span>
            </div>
            <h3 class="bl-journey-title">Take Admission &amp; Enrollment</h3>
            <p class="bl-journey-desc">Streamline student inquiries and qualification with official WhatsApp automation. Never let prospective student leads go cold.</p>
            <div class="bl-journey-guide-box" style="margin-bottom:1.5rem;">
              <ul class="bl-journey-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Share program details, eligibility criteria, and fee structures in chat</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Address prospective students' queries instantly via 24/7 AI chatbot</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Send application form links directly on WhatsApp for higher conversion</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Notify students and parents in real time about enrollment application status</span></li>
              </ul>
            </div>
            <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to enquire about WhatsApp Take Admission & Enrollment automation.'); ?>" target="_blank" rel="noopener" class="bl-btn-primary" style="padding:0.75rem 1.6rem;font-size:0.92rem;">
              <span>Enquire Now</span>
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </div>
        </div>

        <!-- Use Case 2 (Reverse) -->
        <div class="bl-journey-card reverse">
          <div class="bl-journey-media">
            <span class="bl-journey-badge-float">02 &bull; Automated Reminders</span>
            <img src="/assets/images/edtech_reminders_banner.jpg" alt="WhatsApp Automated Reminders - Classes, Timetables &amp; Deadlines" class="bl-journey-img" loading="lazy">
          </div>
          <div class="bl-journey-content">
            <div class="bl-journey-step-header">
              <span class="bl-journey-step-pill" style="background:#eff6ff;color:#2563eb;">Use Case 02 &bull; Schedules</span>
              <span class="bl-journey-step-time">Automated Triggers</span>
            </div>
            <h3 class="bl-journey-title">Automated Reminders (Classes &amp; Deadlines)</h3>
            <p class="bl-journey-desc">Ensure 95%+ attendance and zero missed deadlines with high-priority WhatsApp alerts delivered straight to students and parents.</p>
            <div class="bl-journey-guide-box" style="margin-bottom:1.5rem;">
              <ul class="bl-journey-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Remind students of upcoming live lectures, webinars, workshops, and lab sessions</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Post deadlines for assignment submissions, project proposals, and quizzes</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Instantly notify of schedule changes, room allocations, or faculty updates</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Alert students about fee due dates, re-enrollment windows, and test dates</span></li>
              </ul>
            </div>
            <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to enquire about Automated Class & Deadline Reminders on WhatsApp.'); ?>" target="_blank" rel="noopener" class="bl-btn-primary" style="padding:0.75rem 1.6rem;font-size:0.92rem;">
              <span>Enquire Now</span>
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </div>
        </div>

        <!-- Use Case 3 -->
        <div class="bl-journey-card">
          <div class="bl-journey-media">
            <span class="bl-journey-badge-float">03 &bull; Exam Timetables</span>
            <img src="/assets/images/edtech_class_reminders.jpg" alt="WhatsApp Exam Timetables &amp; Hall Tickets Dispatches" class="bl-journey-img" loading="lazy">
          </div>
          <div class="bl-journey-content">
            <div class="bl-journey-step-header">
              <span class="bl-journey-step-pill" style="background:#fdf2f8;color:#db2777;">Use Case 03 &bull; Examinations</span>
              <span class="bl-journey-step-time">Instant PDFs</span>
            </div>
            <h3 class="bl-journey-title">Exam &amp; Results Notifications</h3>
            <p class="bl-journey-desc">Replace slow paper hall tickets and overloaded result servers with instant, personalized WhatsApp dispatches.</p>
            <div class="bl-journey-guide-box" style="margin-bottom:1.5rem;">
              <ul class="bl-journey-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Send digital hall tickets and admit cards with QR codes directly on WhatsApp</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Deliver exam schedules, seat numbers, and centre instructions ahead of time</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Share semester report cards, grade sheets, and transcripts securely</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Provide performance feedback, re-evaluation dates, and study resources</span></li>
              </ul>
            </div>
            <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to enquire about Exam & Results Notifications on WhatsApp.'); ?>" target="_blank" rel="noopener" class="bl-btn-primary" style="padding:0.75rem 1.6rem;font-size:0.92rem;">
              <span>Enquire Now</span>
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </div>
        </div>

        <!-- Use Case 4 (Reverse) -->
        <div class="bl-journey-card reverse">
          <div class="bl-journey-media">
            <span class="bl-journey-badge-float">04 &bull; Parent Engagement</span>
            <img src="/assets/images/edtech_parent_updates.jpg" alt="WhatsApp Parental Communication &amp; Progress Updates" class="bl-journey-img" loading="lazy">
          </div>
          <div class="bl-journey-content">
            <div class="bl-journey-step-header">
              <span class="bl-journey-step-pill" style="background:#fef3c7;color:#d97706;">Use Case 04 &bull; Parents</span>
              <span class="bl-journey-step-time">Real-Time Sync</span>
            </div>
            <h3 class="bl-journey-title">Parental Communication &amp; Updates</h3>
            <p class="bl-journey-desc">Build transparency and trust by keeping parents updated on student attendance, academic milestones, and PTMs.</p>
            <div class="bl-journey-guide-box" style="margin-bottom:1.5rem;">
              <ul class="bl-journey-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Automated daily attendance notifications and absent alerts to parents</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Invites for Parent-Teacher Meetings (PTM) with 1-click RSVP buttons</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Celebrate extracurricular milestones, sports awards, and annual day alerts</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Send tuition fee receipts, bus route updates, and emergency school alerts</span></li>
              </ul>
            </div>
            <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to enquire about Parental WhatsApp Communication.'); ?>" target="_blank" rel="noopener" class="bl-btn-primary" style="padding:0.75rem 1.6rem;font-size:0.92rem;">
              <span>Enquire Now</span>
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </div>
        </div>

        <!-- Use Case 5 -->
        <div class="bl-journey-card">
          <div class="bl-journey-media">
            <span class="bl-journey-badge-float">05 &bull; AI Assistant</span>
            <img src="/assets/images/capabilities/ai-chat-assistant.png" alt="24/7 WhatsApp AI Chatbot Assistant for Students" class="bl-journey-img" loading="lazy">
          </div>
          <div class="bl-journey-content">
            <div class="bl-journey-step-header">
              <span class="bl-journey-step-pill" style="background:#ede9fe;color:#7c3aed;">Use Case 05 &bull; AI Support</span>
              <span class="bl-journey-step-time">24/7 Always On</span>
            </div>
            <h3 class="bl-journey-title">24/7 Student WhatsApp Chatbot</h3>
            <p class="bl-journey-desc">Free your administration and counselors from repetitive inquiries by deploying an AI-powered academic WhatsApp bot.</p>
            <div class="bl-journey-guide-box" style="margin-bottom:1.5rem;">
              <ul class="bl-journey-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Deliver syllabus outlines, course modules, and reference materials 24/7</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Provide immediate answers about library hours, hostel rules, and bus routes</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Handle password resets and LMS portal login assistance automatically</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Resolve 85%+ inquiries without needing staff intervention</span></li>
              </ul>
            </div>
            <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to enquire about 24/7 Student WhatsApp Chatbots.'); ?>" target="_blank" rel="noopener" class="bl-btn-primary" style="padding:0.75rem 1.6rem;font-size:0.92rem;">
              <span>Enquire Now</span>
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </div>
        </div>

        <!-- Use Case 6 (Reverse) -->
        <div class="bl-journey-card reverse">
          <div class="bl-journey-media">
            <span class="bl-journey-badge-float">06 &bull; Team Inbox</span>
            <img src="/assets/images/edtech_shared_inbox.jpg" alt="InboxWa WhatsApp Shared Team Inbox for Admissions" class="bl-journey-img" loading="lazy">
          </div>
          <div class="bl-journey-content">
            <div class="bl-journey-step-header">
              <span class="bl-journey-step-pill" style="background:#f0fdf4;color:#16a34a;">Use Case 06 &bull; Multi-Agent</span>
              <span class="bl-journey-step-time">One Team Number</span>
            </div>
            <h3 class="bl-journey-title">Human Agent Support with Shared Team Inbox</h3>
            <p class="bl-journey-desc">Connect multiple counselors, academic advisors, and finance officers to a single verified WhatsApp number with role-based routing.</p>
            <div class="bl-journey-guide-box" style="margin-bottom:1.5rem;">
              <ul class="bl-journey-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Automatic escalation from chatbot to human counselor for complex queries</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Route student chats by department (Admissions, Accounts, Hostel, Faculty)</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Private internal counselor notes and chat tagging for seamless handoffs</span></li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Track counselor response times, resolution rates, and student satisfaction</span></li>
              </ul>
            </div>
            <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to enquire about Shared Team Inbox for Admissions.'); ?>" target="_blank" rel="noopener" class="bl-btn-primary" style="padding:0.75rem 1.6rem;font-size:0.92rem;">
              <span>Enquire Now</span>
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 10 ALL-IN-ONE FEATURES (CLONED FROM GETGABS) -->
  <section class="bl-section bl-section-alt" id="features">
    <div class="bl-container">
      <div class="bl-section-header">
        <span class="bl-badge-pill" style="background:rgba(16,185,129,0.1);color:#059669;border-color:rgba(16,185,129,0.25);">Meta Cloud Platform</span>
        <h2>All-in-One Features of WhatsApp Business API</h2>
        <p>Transform your institutional operations, student admissions, and parent engagement with comprehensive WhatsApp automation tools.</p>
      </div>

      <div class="bl-features-grid">
        <div class="bl-feature-card">
          <div class="bl-feature-icon" style="background:#ecfdf5;color:#059669;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"/></svg>
          </div>
          <h3>WhatsApp Broadcasting</h3>
          <p>Send bulk tailored broadcasts for open-house announcements, application deadlines, and exam schedules to thousands with zero ban risk.</p>
        </div>

        <div class="bl-feature-card">
          <div class="bl-feature-icon" style="background:#ede9fe;color:#7c3aed;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4"/><line x1="8" y1="16" x2="8.01" y2="16"/><line x1="16" y1="16" x2="16.01" y2="16"/></svg>
          </div>
          <h3>WhatsApp AI Chatbot</h3>
          <p>Automate student inquiries 24/7. Handle course FAQs, hostel queries, fee structures, and syllabus requests instantly without human delay.</p>
        </div>

        <div class="bl-feature-card">
          <div class="bl-feature-icon" style="background:#eff6ff;color:#2563eb;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg>
          </div>
          <h3>WhatsApp Forms &amp; Flows</h3>
          <p>Collect student lead details, application form fields, marksheet uploads, and parent feedback directly inside interactive WhatsApp chat forms.</p>
        </div>

        <div class="bl-feature-card">
          <div class="bl-feature-icon" style="background:#ecfdf5;color:#10b981;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/></svg>
          </div>
          <h3>Meta Verified Blue Tick</h3>
          <p>Establish high credibility and student trust with Meta's official green/blue verified badge on your institution's WhatsApp profile.</p>
        </div>

        <div class="bl-feature-card">
          <div class="bl-feature-icon" style="background:#fef3c7;color:#d97706;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
          </div>
          <h3>Click-to-WhatsApp Ads</h3>
          <p>Convert Instagram, Facebook, and Google ad traffic directly into active WhatsApp admission conversations with up to 5x higher conversion.</p>
        </div>

        <div class="bl-feature-card">
          <div class="bl-feature-icon" style="background:#ecfdf5;color:#059669;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
          </div>
          <h3>In-Chat Fee Payments</h3>
          <p>Enable parents and students to pay registration fees, hostel deposits, and tuition installments securely via WhatsApp UPI and cards.</p>
        </div>

        <div class="bl-feature-card">
          <div class="bl-feature-icon" style="background:#ede9fe;color:#6366f1;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>
          </div>
          <h3>WhatsApp Drip Campaigns</h3>
          <p>Automate multi-day message sequences to nurture prospective student leads from initial inquiry down to final admission confirmation.</p>
        </div>

        <div class="bl-feature-card">
          <div class="bl-feature-icon" style="background:#fdf2f8;color:#ec4899;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>WhatsApp Team Inbox</h3>
          <p>Collaborate across faculty and admission teams in a single central workspace with department routing, tags, and internal notes.</p>
        </div>

        <div class="bl-feature-card">
          <div class="bl-feature-icon" style="background:#e0f2fe;color:#0284c7;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
          </div>
          <h3>WhatsApp Interactive</h3>
          <p>Engage students with interactive buttons, drop-down selection lists, and quick reply cards that make inquiries fast and frictionless.</p>
        </div>

        <div class="bl-feature-card">
          <div class="bl-feature-icon" style="background:#ede9fe;color:#8b5cf6;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
          </div>
          <h3>WhatsApp Course Catalog</h3>
          <p>Display your academic programs, degree specializations, and certifications directly inside the native WhatsApp catalog.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW INBOXWA IS DIFFERENT FROM OTHER BSPS -->
  <section class="bl-section" id="why-inboxwa">
    <div class="bl-container">
      <div class="bl-section-header">
        <span class="bl-badge-pill" style="background:rgba(16,185,129,0.1);color:#059669;border-color:rgba(16,185,129,0.25);">Transparent &amp; Superior</span>
        <h2>How InboxWa is Different from Other Business Solution Providers (BSPs)?</h2>
        <p>InboxWa delivers an affordable, secure, and feature-packed WhatsApp Business solution built specifically for educational institutions and high-volume student outreach.</p>
      </div>

      <div class="bl-bsp-grid">
        <div class="bl-bsp-card">
          <div class="bl-bsp-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
          <div class="bl-bsp-info">
            <h4>No Markup Charges</h4>
            <p>Unbeatable transparent rates with 0% markup on official Meta WhatsApp conversation costs.</p>
          </div>
        </div>

        <div class="bl-bsp-card">
          <div class="bl-bsp-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg></div>
          <div class="bl-bsp-info">
            <h4>No Set-Up Charge</h4>
            <p>Instant activation and zero onboarding fees. Get up and running in minutes without hidden costs.</p>
          </div>
        </div>

        <div class="bl-bsp-card">
          <div class="bl-bsp-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
          <div class="bl-bsp-info">
            <h4>Direct Meta Cloud API Access</h4>
            <p>Ultra-low latency message delivery backed directly by Meta’s official global Cloud infrastructure.</p>
          </div>
        </div>

        <div class="bl-bsp-card">
          <div class="bl-bsp-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
          <div class="bl-bsp-info">
            <h4>Instant Approval &amp; Quick Onboarding</h4>
            <p>Automated Meta Business Manager verification guidance with phone number approval in seconds.</p>
          </div>
        </div>

        <div class="bl-bsp-card">
          <div class="bl-bsp-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg></div>
          <div class="bl-bsp-info">
            <h4>Competitive Pricing Plans</h4>
            <p>Flexible billing options designed for single coaching centers to multi-campus university networks.</p>
          </div>
        </div>

        <div class="bl-bsp-card">
          <div class="bl-bsp-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <div class="bl-bsp-info">
            <h4>Secure &amp; 99.99% Scalable</h4>
            <p>Enterprise-grade encryption protecting student records with guaranteed 99.99% system uptime.</p>
          </div>
        </div>

        <div class="bl-bsp-card">
          <div class="bl-bsp-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></div>
          <div class="bl-bsp-info">
            <h4>Custom LMS &amp; CRM Integrations</h4>
            <p>Seamless two-way sync with LeadSquared, Salesforce Education Cloud, Zoho, Moodle, and ERPs.</p>
          </div>
        </div>

        <div class="bl-bsp-card">
          <div class="bl-bsp-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
          <div class="bl-bsp-info">
            <h4>24/7 Dedicated Human Assistance</h4>
            <p>Priority technical support, campaign strategy assistance, and dedicated account manager on standby.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- DEPARTMENT-WISE USES -->
  <section class="bl-section bl-section-alt" id="departments">
    <div class="bl-container">
      <div class="bl-section-header">
        <span class="bl-badge-pill" style="background:rgba(37,99,235,0.1);color:#2563eb;border-color:rgba(37,99,235,0.25);">Institutional Efficiency</span>
        <h2>Department Wise Uses of WhatsApp Business Platform</h2>
        <p>See how InboxWa helps institutions boost student marketing, streamline admissions, and elevate student services.</p>
      </div>

      <div class="bl-dept-grid">
        <!-- Marketing -->
        <div class="bl-dept-card">
          <div class="bl-dept-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"/></svg></div>
          <h3>WhatsApp for Marketing</h3>
          <p>Reach prospective students and parents instantly with high-engagement broadcasts, open-day announcements, and personalized scholarship offers.</p>
          <div class="bl-journey-guide-box" style="margin-top:auto;margin-bottom:1.25rem;">
            <ul class="bl-journey-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Broadcast open-house invitations</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Click-to-WhatsApp Meta &amp; Google Ads</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Automated event &amp; webinar alerts</span></li>
            </ul>
          </div>
          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to discuss WhatsApp for Education Marketing.'); ?>" target="_blank" rel="noopener" class="bl-dataset-btn">
            <span>Learn More &amp; Setup</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>

        <!-- Admissions -->
        <div class="bl-dept-card">
          <div class="bl-dept-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><polyline points="16 11 18 13 22 9"/></svg></div>
          <h3>WhatsApp for Admissions</h3>
          <p>Convert applicant inquiries into confirmed enrollments with automated qualification workflows, lead routing, and fast counselor follow-ups.</p>
          <div class="bl-journey-guide-box" style="margin-top:auto;margin-bottom:1.25rem;">
            <ul class="bl-journey-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>In-chat eligibility qualification</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>1-on-1 counseling appointment bookings</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Document upload &amp; fee collection</span></li>
            </ul>
          </div>
          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to discuss WhatsApp for Admissions & Counseling.'); ?>" target="_blank" rel="noopener" class="bl-dataset-btn">
            <span>Learn More &amp; Setup</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>

        <!-- Support -->
        <div class="bl-dept-card">
          <div class="bl-dept-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
          <h3>WhatsApp for Student Support</h3>
          <p>Deliver 24/7 student service across hostels, exams, and accounts. Build lasting relationships and active alumni communities.</p>
          <div class="bl-journey-guide-box" style="margin-top:auto;margin-bottom:1.25rem;">
            <ul class="bl-journey-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>24/7 AI resolution for routine student FAQs</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Instant payment links &amp; tuition fee receipts</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg><span>Alumni networking &amp; placement alerts</span></li>
            </ul>
          </div>
          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa, I want to discuss WhatsApp for Student Support & Services.'); ?>" target="_blank" rel="noopener" class="bl-dataset-btn">
            <span>Learn More &amp; Setup</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQS ACCORDION (CLONED FROM GETGABS) -->
  <section class="bl-section" id="faqs">
    <div class="bl-container">
      <div class="bl-section-header">
        <span class="bl-badge-pill" style="background:rgba(37,99,235,0.1);color:#2563eb;border-color:rgba(37,99,235,0.25);">Frequently Asked Questions</span>
        <h2>WhatsApp for Education &amp; EdTech FAQs</h2>
        <p>Everything you need to know about setting up Meta-verified WhatsApp Business API for schools, universities, and coaching institutes.</p>
      </div>

      <div class="bl-faq-accordion">
        <div class="bl-faq-item active">
          <button type="button" class="bl-faq-question" aria-expanded="true">
            <span>1. What are the benefits of using the WhatsApp Business Platform for EdTech?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="bl-faq-answer">
            WhatsApp Business API helps EdTech and institutions deliver personalized learning updates, automate admission inquiries, boost parent engagement, and streamline fee collections with unmatched 98% open rates compared to email.
          </div>
        </div>

        <div class="bl-faq-item">
          <button type="button" class="bl-faq-question" aria-expanded="false">
            <span>2. Can InboxWa integrate with our existing Student Information System (SIS) or CRM?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="bl-faq-answer">
            Yes! InboxWa provides two-way REST APIs and Webhooks that integrate seamlessly with LeadSquared, Salesforce Education Cloud, Zoho CRM, HubSpot, Moodle, Canvas, and custom institutional ERP databases.
          </div>
        </div>

        <div class="bl-faq-item">
          <button type="button" class="bl-faq-question" aria-expanded="false">
            <span>3. How secure is student and parent data on InboxWa?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="bl-faq-answer">
            InboxWa operates directly on Meta's official Cloud API with end-to-end encryption in transit. Student data is strictly isolated, role-permissioned, and fully compliant with international privacy and education guidelines.
          </div>
        </div>

        <div class="bl-faq-item">
          <button type="button" class="bl-faq-question" aria-expanded="false">
            <span>4. Can we send fee payment links and collect tuition directly on WhatsApp?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="bl-faq-answer">
            Yes. InboxWa supports in-chat native payment flows via WhatsApp Pay (UPI, RuPay, debit/credit cards) as well as automated Razorpay/Stripe payment links that auto-generate and dispatch payment receipts instantly upon successful transaction.
          </div>
        </div>

        <div class="bl-faq-item">
          <button type="button" class="bl-faq-question" aria-expanded="false">
            <span>5. How quickly can our institute get onboarded and verified with a green tick?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="bl-faq-answer">
            You can verify your Meta Business Manager and launch your initial WhatsApp admission automation flows within 24 to 48 hours. Our onboarding team assists you through phone number verification, green tick application, and chatbot setup.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Schema.org FAQPage Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "What are the benefits of using the WhatsApp Business Platform for EdTech?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "WhatsApp Business API helps EdTech and institutions deliver personalized learning updates, automate admission inquiries, boost parent engagement, and streamline fee collections with unmatched 98% open rates compared to email."
        }
      },
      {
        "@type": "Question",
        "name": "Can InboxWa integrate with our existing Student Information System (SIS) or CRM?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes! InboxWa provides two-way REST APIs and Webhooks that integrate seamlessly with LeadSquared, Salesforce Education Cloud, Zoho CRM, HubSpot, Moodle, Canvas, and custom institutional ERP databases."
        }
      },
      {
        "@type": "Question",
        "name": "How secure is student and parent data on InboxWa?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "InboxWa operates directly on Meta's official Cloud API with end-to-end encryption in transit. Student data is strictly isolated, role-permissioned, and fully compliant with international privacy and education guidelines."
        }
      },
      {
        "@type": "Question",
        "name": "Can we send fee payment links and collect tuition directly on WhatsApp?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. InboxWa supports in-chat native payment flows via WhatsApp Pay as well as automated Razorpay/Stripe payment links that auto-generate and dispatch payment receipts instantly upon successful transaction."
        }
      },
      {
        "@type": "Question",
        "name": "How quickly can our institute get onboarded and verified with a green tick?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You can verify your Meta Business Manager and launch your initial WhatsApp admission automation flows within 24 to 48 hours. Our onboarding team assists you through phone number verification, green tick application, and chatbot setup."
        }
      }
    ]
  }
  </script>
  <?php endif; ?>

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
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var faqQuestions = document.querySelectorAll('.bl-faq-question');
  faqQuestions.forEach(function(btn) {
    btn.addEventListener('click', function() {
      var item = this.parentElement;
      var isActive = item.classList.contains('active');
      document.querySelectorAll('.bl-faq-item').forEach(function(el) {
        el.classList.remove('active');
        var b = el.querySelector('.bl-faq-question');
        if (b) b.setAttribute('aria-expanded', 'false');
      });
      if (!isActive) {
        item.classList.add('active');
        this.setAttribute('aria-expanded', 'true');
      }
    });
  });
});
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
