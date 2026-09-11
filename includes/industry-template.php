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

        <!-- Hero Visual: Interactive 3D WhatsApp iPhone Simulator -->
        <div class="ind-hero-visual">
          <div class="cw-phone-wrapper" id="cw-phone-wrapper">
            <!-- Glowing Ambient Aura -->
            <div class="cw-phone-aura" aria-hidden="true"></div>

            <!-- 3D Tilting Phone Device Frame -->
            <div class="cw-phone-device" id="cw-phone-device">
              <!-- Glass Glare Sweep -->
              <div class="cw-phone-glare" aria-hidden="true"></div>

              <!-- Hardware Top Bar: Live Clock & Dynamic Island -->
              <div class="cw-phone-topbar">
                <span class="cw-status-time" id="cw-status-clock">10:43</span>
                <div class="cw-dynamic-island">
                  <span class="cw-island-camera"></span>
                  <span class="cw-island-speaker"></span>
                </div>
                <div class="cw-status-icons">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M12 3c-4.97 0-9.46 2.02-12.73 5.3l1.42 1.42C3.37 7.03 7.42 5.2 12 5.2s8.63 1.83 11.31 4.52l1.42-1.42C21.46 5.02 16.97 3 12 3zm0 4c-3.87 0-7.37 1.57-9.9 4.1l1.41 1.42C5.69 10.5 8.66 9.2 12 9.2s6.31 1.3 8.49 3.32l1.41-1.42C19.37 8.57 15.87 7 12 7zm0 4c-2.76 0-5.26 1.12-7.07 2.93l1.41 1.41C7.79 13.9 9.77 13 12 13s4.21.9 5.66 2.34l1.41-1.41C17.26 12.12 14.76 11 12 11zm0 4c-1.66 0-3.16.67-4.24 1.76L12 21.01l4.24-4.25C15.16 15.67 13.66 15 12 15z"/></svg>
                  <span class="cw-status-5g">5G</span>
                  <svg width="14" height="12" viewBox="0 0 24 24" fill="currentColor"><rect x="2" y="7" width="17" height="10" rx="2" ry="2" fill="none" stroke="currentColor" stroke-width="2"/><path d="M5 9h11v6H5z"/><rect x="20" y="10" width="2" height="4" rx="0.5"/></svg>
                </div>
              </div>

              <!-- Phone Internal Screen -->
              <div class="cw-phone-screen">
                <!-- WhatsApp Chat Header -->
                <div class="cw-wa-header">
                  <div class="cw-wa-avatar">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                    <span class="cw-wa-avatar-badge"></span>
                  </div>
                  <div class="cw-wa-header-info">
                    <div class="cw-wa-title-row">
                      <strong id="cw-header-title"><?php echo htmlspecialchars($indData['chat_title'] ?? ('InboxWa ' . ($indData['breadcrumb_label'] ?? 'Business') . ' AI')); ?></strong>
                      <svg class="cw-verified-check" width="13" height="13" viewBox="0 0 24 24" fill="#10b981"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                    </div>
                    <span class="cw-wa-subtitle"><i class="cw-live-dot"></i> Online • Official Meta Partner</span>
                  </div>
                  <div class="cw-wa-header-tools">
                    <button type="button" class="cw-tool-btn" id="cw-audio-toggle" title="Toggle audio sound (Click to mute/unmute)">
                      <svg id="cw-audio-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M15.54 8.46a5 5 0 0 1 0 7.07"/></svg>
                    </button>
                    <button type="button" class="cw-tool-btn" id="cw-chat-reset" title="Restart conversation">
                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"/><path d="M3 21v-5h5"/></svg>
                    </button>
                  </div>
                </div>

                <!-- WhatsApp Chat Messages Body -->
                <div class="cw-wa-body" id="cw-live-body">
                  <?php 
                  $initialMsgs = $indData['chat_messages'] ?? [
                    ['type' => 'user', 'text' => "Hi! How does InboxWa help our business scale on WhatsApp?"],
                    ['type' => 'bot', 'text' => "👋 Hello! With Official WhatsApp API, you can automate customer funnels, send 98% open-rate broadcasts, and close deals 24/7 with zero ban risk."]
                  ];
                  foreach ($initialMsgs as $idx => $m):
                    $isBot = ($m['type'] ?? '') === 'bot';
                  ?>
                    <div class="cw-bubble <?php echo $isBot ? 'bot' : 'user'; ?>">
                      <span><?php echo nl2br(htmlspecialchars($m['text'])); ?></span>
                      <?php if ($isBot && !empty($m['buttons'])): ?>
                        <div class="cw-bubble-buttons" style="display:flex;flex-direction:column;gap:5px;margin-top:6px;">
                          <?php foreach ($m['buttons'] as $bText): ?>
                            <button type="button" class="cw-bot-action-btn cw-sim-action-btn" data-query="<?php echo htmlspecialchars($bText); ?>" style="text-align:left;width:fit-content;"><?php echo htmlspecialchars($bText); ?> &rarr;</button>
                          <?php endforeach; ?>
                        </div>
                      <?php endif; ?>
                      <div class="cw-bubble-meta">
                        <span class="time"><?php echo date('h:i A', strtotime("-".(3 - min($idx, 3))." minutes")); ?></span>
                        <?php if (!$isBot): ?>
                          <span class="cw-ticks double-blue">✓✓</span>
                        <?php endif; ?>
                      </div>
                    </div>
                  <?php endforeach; ?>

                  <!-- Typing Indicator Bubble -->
                  <div class="cw-bubble bot cw-typing-bubble" id="cw-typing-indicator" style="display:none;">
                    <div class="cw-typing-dots">
                      <span></span><span></span><span></span>
                    </div>
                    <span class="cw-typing-label"><?php echo htmlspecialchars($indData['chat_title'] ?? 'InboxWa AI'); ?> is typing...</span>
                  </div>
                </div>

                <!-- Quick Suggestion Chips Carousel -->
                <div class="cw-chips-wrap">
                  <div class="cw-chips-hint">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                    <span>Tap a topic or type below:</span>
                  </div>
                  <div class="cw-chips-scroll" id="cw-chips-container">
                    <?php 
                    $industryChips = getIndustryChips($indData['slug']);
                    foreach ($industryChips as $chip):
                    ?>
                      <button type="button" class="cw-chip" data-query="<?php echo htmlspecialchars($chip); ?>"><?php echo htmlspecialchars($chip); ?></button>
                    <?php endforeach; ?>
                  </div>
                </div>

                <!-- WhatsApp Chat Composer Footer -->
                <div class="cw-chat-footer" id="cw-chat-footer">
                  <button type="button" class="cw-chat-btn-emoji" id="cw-emoji-btn" title="Add emoji">😊</button>
                  <input type="text" id="cw-chat-input" class="cw-chat-input" placeholder="Type a message or ask anything..." autocomplete="off" maxlength="150">
                  <button type="button" id="cw-chat-send" class="cw-chat-send" aria-label="Send message" title="Send message">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
                  </button>
                </div>

                <!-- Bottom iOS Home Indicator -->
                <div class="cw-home-bar"></div>
              </div>
            </div>

            <!-- Floating Verified Metric Pill Alongside the Phone -->
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
       PLATFORM ARCHITECTURE & WORKFLOW SHOWCASE (Authentic Branded Graphic)
       ========================================================================= -->
  <section class="ind-architecture-section" style="padding: 1.5rem 0 3.5rem;">
    <div class="container">
      <div class="ind-section-header" style="text-align:center;margin-bottom:2rem;">
        <span class="ind-kicker">ENTERPRISE CONVERSATIONAL ARCHITECTURE</span>
        <h2>End-to-End WhatsApp Infrastructure for <?php echo htmlspecialchars($indData['breadcrumb_label'] ?? 'Enterprises'); ?></h2>
        <p>Pre-integrated with official Meta Cloud APIs, secure 256-bit webhook pipelines, and automated CRM sync built for 99.99% uptime.</p>
      </div>
      <div class="ind-hero-media-card">
        <img src="/assets/images/industries/<?php echo $indData['slug']; ?>/hero-branded.png" 
             alt="<?php echo htmlspecialchars($indData['title']); ?> Architecture Overview - InboxWa" 
             class="ind-hero-media-img" 
             loading="lazy">
      </div>
    </div>
  </section>

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

// =========================================================================
// INTERACTIVE IPHONE SIMULATOR ENGINE (with bespoke industry NLP)
// =========================================================================
(function() {
  const currentIndustrySlug = "<?php echo addslashes($indData['slug'] ?? ''); ?>";
  const currentIndustryName = "<?php echo addslashes($indData['breadcrumb_label'] ?? 'Industry'); ?>";

  // 1. Live Clock in Hardware Top Bar
  function updatePhoneClock() {
    const clockEl = document.getElementById('cw-status-clock');
    if (!clockEl) return;
    const now = new Date();
    let hours = now.getHours();
    const minutes = String(now.getMinutes()).padStart(2, '0');
    hours = hours % 12 || 12;
    clockEl.textContent = hours + ':' + minutes;
  }
  updatePhoneClock();
  setInterval(updatePhoneClock, 30000);

  // 2. 3D Tilt Effect on Desktop Hover
  const phoneWrapper = document.getElementById('cw-phone-wrapper');
  const phoneDevice = document.getElementById('cw-phone-device');
  if (phoneWrapper && phoneDevice && window.matchMedia('(pointer: fine)').matches) {
    phoneWrapper.addEventListener('mousemove', function(e) {
      const rect = phoneWrapper.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const cx = rect.width / 2;
      const cy = rect.height / 2;
      const dx = (x - cx) / cx;
      const dy = (y - cy) / cy;
      phoneDevice.style.transform = `perspective(1200px) rotateY(${dx * 8}deg) rotateX(${-dy * 8}deg) scale3d(1.02, 1.02, 1.02)`;
    });
    phoneWrapper.addEventListener('mouseleave', function() {
      phoneDevice.style.transform = 'perspective(1200px) rotateY(0deg) rotateX(0deg) scale3d(1, 1, 1)';
    });
  }

  // 3. Audio Chimes Synthesizer
  let audioEnabled = true;
  const audioToggle = document.getElementById('cw-audio-toggle');
  const audioIcon = document.getElementById('cw-audio-icon');

  if (audioToggle) {
    audioToggle.addEventListener('click', function() {
      audioEnabled = !audioEnabled;
      if (audioEnabled) {
        audioToggle.setAttribute('title', 'Audio sound ON (Click to mute)');
        audioToggle.style.color = '#10b981';
        audioIcon.innerHTML = '<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M15.54 8.46a5 5 0 0 1 0 7.07"/>';
        playChime(true);
      } else {
        audioToggle.setAttribute('title', 'Audio sound MUTED (Click to unmute)');
        audioToggle.style.color = '#ef4444';
        audioIcon.innerHTML = '<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><line x1="23" y1="9" x2="17" y2="15"/><line x1="17" y1="9" x2="23" y2="15"/>';
      }
    });
  }

  function playChime(isBot) {
    if (!audioEnabled) return;
    try {
      const AudioContext = window.AudioContext || window.webkitAudioContext;
      if (!AudioContext) return;
      const ctx = new AudioContext();
      const osc = ctx.createOscillator();
      const gain = ctx.createGain();
      osc.type = 'sine';
      if (isBot) {
        osc.frequency.setValueAtTime(587.33, ctx.currentTime);
        osc.frequency.exponentialRampToValueAtTime(880, ctx.currentTime + 0.08);
      } else {
        osc.frequency.setValueAtTime(440, ctx.currentTime);
        osc.frequency.exponentialRampToValueAtTime(659.25, ctx.currentTime + 0.06);
      }
      gain.gain.setValueAtTime(0.08, ctx.currentTime);
      gain.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + 0.16);
      osc.connect(gain);
      gain.connect(ctx.destination);
      osc.start();
      osc.stop(ctx.currentTime + 0.16);
    } catch (err) {}
  }

  // 4. Chatbot DOM Elements & Utilities
  const cwBody = document.getElementById('cw-live-body');
  const chatSendBtn = document.getElementById('cw-chat-send');
  const chatInput = document.getElementById('cw-chat-input');
  const chatReset = document.getElementById('cw-chat-reset');
  const emojiBtn = document.getElementById('cw-emoji-btn');

  function getFormattedTime() {
    const now = new Date();
    let h = now.getHours();
    const m = String(now.getMinutes()).padStart(2, '0');
    const ampm = h >= 12 ? 'PM' : 'AM';
    h = h % 12 || 12;
    return `${h}:${m} ${ampm}`;
  }

  function scrollToBottom() {
    if (!cwBody) return;
    cwBody.scrollTo({ top: cwBody.scrollHeight, behavior: 'smooth' });
  }

  function escapeHtml(str) {
    return str.replace(/[&<>'"]/g, function(tag) {
      return ({
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        "'": '&#39;',
        '"': '&quot;'
      })[tag] || tag;
    });
  }

  // Cache initial chat HTML for reset
  const initialChatHtml = cwBody ? cwBody.innerHTML : '';

  if (chatReset) {
    chatReset.addEventListener('click', function() {
      if (!cwBody) return;
      cwBody.innerHTML = initialChatHtml;
      bindSimButtons();
      playChime(true);
      scrollToBottom();
    });
  }

  // Emoji rotator
  const emojiList = ['✨', '🚀', '💬', '💼', '📍', '📋', '⚡', '👍'];
  let emojiIdx = 0;
  if (emojiBtn && chatInput) {
    emojiBtn.addEventListener('click', function() {
      chatInput.value += emojiList[emojiIdx % emojiList.length] + ' ';
      emojiIdx++;
      chatInput.focus();
    });
  }

  // 5. Intelligent NLP Response Engine tailored for each of the 14 industries
  function getIndustryBotReply(rawText, slug) {
    const q = rawText.toLowerCase().trim();

    // Industry-specific matches
    if (slug === 'real-estate') {
      if (q.includes('visit') || q.includes('site') || q.includes('tour') || q.includes('inspect') || q.includes('weekend') || q.includes('saturday') || q.includes('sunday')) {
        return {
          text: "🏡 Site visit booked! Our senior relationship manager Raghav will greet you at the Clubhouse. Live location pin and calendar confirmation sent to your WhatsApp.",
          actionText: "Confirm Preferred Slot",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('brochure') || q.includes('price') || q.includes('floor') || q.includes('plan') || q.includes('cost') || q.includes('rate') || q.includes('sheet')) {
        return {
          text: "📄 Official project brochure & latest all-inclusive cost breakdown sheet attached:\n\n📄 Luxury_Residences_Pricing_Matrix.pdf (4.2 MB)\n\nIncludes floor plans, payment milestones, and club amenities.",
          actionText: "Download Full Brochure",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('360') || q.includes('virtual') || q.includes('walkthrough') || q.includes('video')) {
        return {
          text: "📍 360° Ultra-HD Virtual Tour loaded! Walk through the living room, master bedroom, and balcony in interactive 3D.",
          actionText: "Launch 360° Walkthrough",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('downpayment') || q.includes('down') || q.includes('emi') || q.includes('loan') || q.includes('bank') || q.includes('interest')) {
        return {
          text: "💰 Flexible 20:80 developer payment scheme active! Pre-approved home loan offers available from HDFC, SBI & ICICI at 8.4% with ₹48,500/mo estimated EMI.",
          actionText: "Calculate Custom EMI",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('advisor') || q.includes('call') || q.includes('speak') || q.includes('talk') || q.includes('agent')) {
        return {
          text: "📞 Connecting you directly with our Senior Property Advisor (+91 80508 54445) for VIP inventory access and developer discounts.",
          actionText: "Chat with Advisor",
          actionUrl: "https://wa.me/918050854445"
        };
      }
    }

    if (slug === 'healthcare') {
      if (q.includes('doctor') || q.includes('appointment') || q.includes('consult') || q.includes('slot') || q.includes('book') || q.includes('opd')) {
        return {
          text: "🩺 Available slots with Senior Specialist: Today 4:30 PM & Tomorrow 10:00 AM. Token will be sent instantly on confirmation.",
          actionText: "Confirm Doctor Slot",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('report') || q.includes('lab') || q.includes('test') || q.includes('blood') || q.includes('scan') || q.includes('result')) {
        return {
          text: "📋 Lab Report #LAB-9042 is verified by Chief Pathologist. Enter your MRN/Patient ID to receive the 256-bit encrypted PDF directly in chat.",
          actionText: "Download Lab PDF",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('medicine') || q.includes('pharmacy') || q.includes('refill') || q.includes('prescription')) {
        return {
          text: "💊 Digital prescription verified! Hospital pharmacy doorstep delivery is available within 90 minutes. Would you like to confirm dispatch?",
          actionText: "Order Medicine Delivery",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('emergency') || q.includes('urgent') || q.includes('ambulance') || q.includes('icu')) {
        return {
          text: "🚨 24/7 Hospital Emergency Desk alerted! Emergency Hotline: +91 80508 54445. GPS-tracked ambulance can be dispatched immediately.",
          actionText: "Call Emergency Desk",
          actionUrl: "tel:+918050854445"
        };
      }
    }

    if (slug === 'travel-hospitality') {
      if (q.includes('package') || q.includes('itinerary') || q.includes('tour') || q.includes('trip') || q.includes('vacation') || q.includes('goa') || q.includes('maldives') || q.includes('bali')) {
        return {
          text: "✈️ Curated 5D/4N VIP Holiday Package with 5-star ocean villa, private airport transfer, and daily breakfast curated for you!",
          actionText: "View Full Itinerary",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('hotel') || q.includes('room') || q.includes('villa') || q.includes('resort') || q.includes('check') || q.includes('stay')) {
        return {
          text: "🏨 Premium Deluxe Suite availability confirmed. Complimentary early check-in at 11:00 AM & late checkout added to your reservation.",
          actionText: "Reserve Suite",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('flight') || q.includes('ticket') || q.includes('boarding') || q.includes('pass') || q.includes('web')) {
        return {
          text: "🎫 Web check-in complete! E-tickets and digital QR boarding passes dispatched to your WhatsApp. Gate 4B, boarding at 14:15.",
          actionText: "Download Boarding Pass",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('concierge') || q.includes('driver') || q.includes('cab') || q.includes('taxi')) {
        return {
          text: "🛎️ 24/7 WhatsApp Guest Concierge is active! Airport pickup driver Mohan (+91 98765 22222) in Toyota Innova is assigned.",
          actionText: "Message Concierge",
          actionUrl: "https://wa.me/918050854445"
        };
      }
    }

    if (slug === 'beauty-wellness') {
      if (q.includes('appointment') || q.includes('salon') || q.includes('spa') || q.includes('massage') || q.includes('haircut') || q.includes('facial') || q.includes('slot')) {
        return {
          text: "💆‍♀️ Salon & Spa slot reserved for Saturday 3:30 PM with Senior Stylist Neha! Private wellness suite booked with aroma diffuser.",
          actionText: "Confirm Slot",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('rate') || q.includes('card') || q.includes('menu') || q.includes('price') || q.includes('cost')) {
        return {
          text: "💅 Complete Bridal & Spa Rate Card with seasonal 20% discount sheet attached. View all skincare, hair therapy, and nail art pricing.",
          actionText: "Download Rate Card",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('package') || q.includes('bridal') || q.includes('glow') || q.includes('offer')) {
        return {
          text: "✨ Exclusive Glow Wellness Package: Hydrafacial + Deep Tissue Aromatherapy + Keratin Hair Spa for ₹4,999 (Save 40%).",
          actionText: "Claim Wellness Offer",
          actionUrl: "#indModal"
        };
      }
    }

    if (slug === 'ecommerce') {
      if (q.includes('track') || q.includes('order') || q.includes('where') || q.includes('shipment') || q.includes('status') || q.includes('delivery')) {
        return {
          text: "📦 Order #INB-8921 is out for delivery with BlueDart express! Expected today by 5:00 PM. Delivery OTP is 4821.",
          actionText: "Live GPS Tracking",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('cart') || q.includes('abandoned') || q.includes('checkout') || q.includes('bag') || q.includes('discount')) {
        return {
          text: "🛍️ You left 2 items in your cart! Use exclusive coupon code EXTRA10 for flat 10% instant discount + Free Express Shipping.",
          actionText: "Complete Order with 10% Off",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('return') || q.includes('refund') || q.includes('exchange') || q.includes('replace')) {
        return {
          text: "↩️ 1-Click WhatsApp Return requested. Doorstep pickup scheduled tomorrow between 10 AM - 2 PM. Instant refund to source.",
          actionText: "Schedule Return",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('cod') || q.includes('cash') || q.includes('upi') || q.includes('pay')) {
        return {
          text: "💳 Convert your COD to WhatsApp UPI payment in 1 click and get instant ₹50 cashback directly into your bank account!",
          actionText: "Pay via WhatsApp UPI",
          actionUrl: "#indModal"
        };
      }
    }

    if (slug === 'automotive') {
      if (q.includes('test') || q.includes('drive') || q.includes('book') || q.includes('showroom') || q.includes('slot')) {
        return {
          text: "🚗 Doorstep test drive booked for Tata Safari Dark Edition this Sunday at 10:30 AM! Vehicle specialist will arrive at your address.",
          actionText: "Confirm Test Drive",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('road') || q.includes('price') || q.includes('quote') || q.includes('brochure') || q.includes('cost')) {
        return {
          text: "📋 Official on-road pricing sheet generated with RTO registration, 3-year bumper-to-bumper insurance, and seasonal accessories kit.",
          actionText: "Download Price Quote",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('emi') || q.includes('loan') || q.includes('finance') || q.includes('downpayment')) {
        return {
          text: "💰 Auto finance pre-approval starting from 7.9% interest with zero downpayment schemes and flexible 7-year tenure from top banks.",
          actionText: "Calculate Car EMI",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('service') || q.includes('maintenance') || q.includes('repair') || q.includes('pickup')) {
        return {
          text: "🔧 Periodic service slot booked! Free doorstep car pickup scheduled on Thursday 9:00 AM with live WhatsApp video job-card.",
          actionText: "Manage Car Service",
          actionUrl: "#indModal"
        };
      }
    }

    if (slug === 'restaurants-food') {
      if (q.includes('table') || q.includes('reserve') || q.includes('reservation') || q.includes('seat') || q.includes('dinner') || q.includes('lunch')) {
        return {
          text: "🍽️ Table for 4 reserved tonight at 8:00 PM in the outdoor garden section! Special dietary preferences recorded.",
          actionText: "Confirm Table",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('menu') || q.includes('food') || q.includes('order') || q.includes('dishes') || q.includes('pizza') || q.includes('chef')) {
        return {
          text: "🍕 Interactive WhatsApp Menu loaded! Browse woodfired pizzas, gourmet pastas, and signature mocktails with 1-tap ordering.",
          actionText: "Open WhatsApp Menu",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('party') || q.includes('birthday') || q.includes('catering') || q.includes('banquet') || q.includes('bulk')) {
        return {
          text: "🎉 Private banquet hall available for 30-80 guests with customized 4-course buffet menu from ₹850/guest.",
          actionText: "Inquire Banquet Booking",
          actionUrl: "#indModal"
        };
      }
    }

    if (slug === 'manufacturing') {
      if (q.includes('rfq') || q.includes('quote') || q.includes('proforma') || q.includes('pricing') || q.includes('estimate') || q.includes('invoice')) {
        return {
          text: "⚙️ RFQ intake received! Proforma Invoice #PI-8491 generated with volume discount tiers and delivery timeline.",
          actionText: "Download Proforma Invoice",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('cad') || q.includes('spec') || q.includes('drawing') || q.includes('datasheet') || q.includes('technical')) {
        return {
          text: "📐 Technical CAD drawings, material safety data sheets (MSDS), and ISO 9001 compliance certificates dispatched.",
          actionText: "Download CAD & Specs",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('dispatch') || q.includes('truck') || q.includes('lr') || q.includes('lorry') || q.includes('shipment')) {
        return {
          text: "🚛 Truck KA 04 D 8821 loaded at Plant Gate 3. Driver: Mohan (+91 98765 11111). Lorry Receipt (LR) copy attached.",
          actionText: "Track Factory Truck",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('spare') || q.includes('machine') || q.includes('maintenance') || q.includes('seal')) {
        return {
          text: "🔩 Machine spare parts catalog loaded. Select component model for overnight express courier dispatch to your factory.",
          actionText: "Order OEM Spares",
          actionUrl: "#indModal"
        };
      }
    }

    if (slug === 'events-wedding') {
      if (q.includes('rsvp') || q.includes('ticket') || q.includes('pass') || q.includes('qr') || q.includes('entry') || q.includes('badge')) {
        return {
          text: "🎟️ VIP QR Entry Pass generated! Scan at Gate 2 for instant contactless badge printing and access to executive lounge.",
          actionText: "Download VIP Pass",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('venue') || q.includes('map') || q.includes('location') || q.includes('parking') || q.includes('directions')) {
        return {
          text: "📍 Venue: Grand Ballroom, Palace Grounds, Bengaluru. Dedicated complimentary valet parking available at Gate 4.",
          actionText: "Open Location Map",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('schedule') || q.includes('agenda') || q.includes('speaker') || q.includes('timing')) {
        return {
          text: "📅 Full 2-day conference agenda, keynote speaker timetable, and breakout networking sessions sent to chat.",
          actionText: "View Event Schedule",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('wedding') || q.includes('stay') || q.includes('hotel') || q.includes('guest')) {
        return {
          text: "💒 Welcome to Ananya & Kabir's Wedding! Your luxury room allocation at Taj West End is Room #312. Sangeet begins at 7 PM.",
          actionText: "View Wedding Flow",
          actionUrl: "#indModal"
        };
      }
    }

    if (slug === 'digital-marketing') {
      if (q.includes('agency') || q.includes('white') || q.includes('reseller') || q.includes('client') || q.includes('partner')) {
        return {
          text: "💼 InboxWa White-Label Agency Console gives you 100% custom branding, client sub-accounts, and custom domain setup.",
          actionText: "Explore Agency Plan",
          actionUrl: "/pricing"
        };
      }
      if (q.includes('ctw') || q.includes('ads') || q.includes('meta') || q.includes('lead') || q.includes('campaign')) {
        return {
          text: "🎯 Click-to-WhatsApp (CTWA) ads sync leads directly into InboxWa bots with 0-second latency, boosting ROAS by 3.8x!",
          actionText: "See Ad Funnel Setup",
          actionUrl: "#indModal"
        };
      }
    }

    if (slug === 'it-software') {
      if (q.includes('api') || q.includes('key') || q.includes('docs') || q.includes('sdk') || q.includes('endpoint') || q.includes('postman')) {
        return {
          text: "💻 Official Meta Cloud API docs & Postman collection ready. High-speed REST endpoints for WhatsApp messages, media, and webhooks.",
          actionText: "Explore API Docs",
          actionUrl: "/channel/whatsapp/"
        };
      }
      if (q.includes('otp') || q.includes('2fa') || q.includes('auth') || q.includes('verification')) {
        return {
          text: "⚡ Ultra-fast WhatsApp OTP delivery (< 2.8s latency) at 40% lower cost than traditional SMS gateways with 99.9% delivery rate.",
          actionText: "Test OTP Delivery",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('webhook') || q.includes('crm') || q.includes('zapier') || q.includes('hubspot') || q.includes('salesforce')) {
        return {
          text: "🔗 1-Click webhooks support Salesforce, HubSpot, Zoho, Zapier, Segment, and custom Node/Python microservices.",
          actionText: "View Integrations",
          actionUrl: "#indModal"
        };
      }
    }

    if (slug === 'retail') {
      if (q.includes('stock') || q.includes('store') || q.includes('available') || q.includes('size') || q.includes('inventory')) {
        return {
          text: "🏬 In stock! Size M & L available at Indiranagar Flagship store (4 units left). Reserved for 2 hours under your name.",
          actionText: "Hold Item In-Store",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('loyalty') || q.includes('points') || q.includes('rewards') || q.includes('balance')) {
        return {
          text: "🎁 You have 850 Loyalty Points worth ₹850! Redeem on your next store visit or apply at online checkout.",
          actionText: "Redeem Loyalty Points",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('weekend') || q.includes('offer') || q.includes('sale') || q.includes('discount')) {
        return {
          text: "🏷️ Flat 30% OFF this weekend across all store outlets! Show this WhatsApp message at cashier desk to redeem.",
          actionText: "Claim Store Discount",
          actionUrl: "#indModal"
        };
      }
    }

    if (slug === 'professional-services') {
      if (q.includes('consult') || q.includes('advisory') || q.includes('appointment') || q.includes('lawyer') || q.includes('ca')) {
        return {
          text: "💼 45-Minute Strategic Advisory consultation booked with Senior Partner. Meeting link & calendar invite sent to WhatsApp.",
          actionText: "Confirm Time Slot",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('fee') || q.includes('retainer') || q.includes('cost') || q.includes('quote') || q.includes('pricing')) {
        return {
          text: "⚖️ Transparent fee schedule: Hourly advisory or customized monthly retainer with dedicated legal & tax counsel.",
          actionText: "View Retainer Terms",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('nda') || q.includes('confidential') || q.includes('vault') || q.includes('document')) {
        return {
          text: "🔒 Mutual Non-Disclosure Agreement (NDA) and 256-bit encrypted document vault link dispatched for instant digital signing.",
          actionText: "Sign Digital NDA",
          actionUrl: "#indModal"
        };
      }
    }

    if (slug === 'b2b-suppliers') {
      if (q.includes('repeat') || q.includes('order') || q.includes('bulk') || q.includes('reorder') || q.includes('po')) {
        return {
          text: "📦 One-tap repeat order! 500 Bags of UltraTech 53 Grade Cement queued for confirmation at wholesale rate ₹340/bag.",
          actionText: "Confirm PO Order",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('wholesale') || q.includes('rate') || q.includes('price') || q.includes('sheet') || q.includes('catalog')) {
        return {
          text: "💰 Updated Q3 Wholesale Rate Matrix for verified distributors dispatched (up to 28% volume discount tiers included).",
          actionText: "Download Rate Sheet",
          actionUrl: "#indModal"
        };
      }
      if (q.includes('ledger') || q.includes('statement') || q.includes('balance') || q.includes('invoice')) {
        return {
          text: "📄 Outstanding ledger balance: ₹42,500. GST invoice PDF & direct UPI payment link shared to WhatsApp.",
          actionText: "Download Ledger PDF",
          actionUrl: "#indModal"
        };
      }
    }

    // Global queries (Pricing, Demo, Meta API, Green Tick, Broadcast, etc.)
    if (q.includes('price') || q.includes('pricing') || q.includes('plan') || q.includes('cost') || q.includes('fee') || q.includes('rate')) {
      return {
        text: `💳 Plans start at just $29/month with 0% markup on Meta messages! Includes unlimited contacts, team inbox, broadcast manager, and AI visual builder for ${currentIndustryName}.`,
        actionText: "View Pricing Plans",
        actionUrl: "/pricing"
      };
    }
    if (q.includes('demo') || q.includes('call') || q.includes('talk') || q.includes('sales') || q.includes('meeting') || q.includes('specialist')) {
      return {
        text: `📞 We'd love to show you how InboxWa transforms ${currentIndustryName} workflows! Schedule a personalized 15-minute walkthrough with our automation architects.`,
        actionText: "Schedule Live Demo",
        actionUrl: "#indModal"
      };
    }
    if (q.includes('green tick') || q.includes('tick') || q.includes('badge') || q.includes('verify')) {
      return {
        text: "✅ We help your business apply for and secure the official Meta Verified Green Tick badge beside your brand name for maximum customer trust.",
        actionText: "Request Green Tick Help",
        actionUrl: "#indModal"
      };
    }
    if (q.includes('broadcast') || q.includes('bulk') || q.includes('blast') || q.includes('campaign') || q.includes('mass')) {
      return {
        text: `📢 Send 10,000 to 1,000,000+ broadcasts in minutes with 98% average open rates! Powered by the Official Meta WhatsApp Cloud API with smart delivery pacing.`,
        actionText: "Start Free Trial",
        actionUrl: "/auth/register"
      };
    }
    if (q.includes('ban') || q.includes('risk') || q.includes('safe') || q.includes('meta') || q.includes('official') || q.includes('api')) {
      return {
        text: "🛡️ Zero Ban Risk! Unlike unofficial QR-scraping extensions that get phone numbers permanently banned, InboxWa connects directly through the official Meta Business Cloud API with 100% compliance guarantee.",
        actionText: "Verify Meta Partner Status",
        actionUrl: "/channel/whatsapp/"
      };
    }
    if (q.includes('team') || q.includes('agent') || q.includes('inbox') || q.includes('seat') || q.includes('multi')) {
      return {
        text: `👥 Connect unlimited team members to 1 single WhatsApp number with smart department routing, private internal notes, canned replies, and agent analytics.`,
        actionText: "Explore Team Inbox",
        actionUrl: "/channel/whatsapp/"
      };
    }
    if (q.includes('hi') || q.includes('hello') || q.includes('hey') || q.includes('good')) {
      return {
        text: `👋 Hello! Welcome to InboxWa ${currentIndustryName} AI! Tap any topic chip above or type any question to test live WhatsApp automation.`,
        actionText: "Get Started Free",
        actionUrl: "/auth/register"
      };
    }
    if (q.includes('trial') || q.includes('free') || q.includes('sign') || q.includes('register') || q.includes('start')) {
      return {
        text: "🚀 You can start right now with our 14-day free trial! Zero credit card required and 5-minute setup.",
        actionText: "Start Free Trial",
        actionUrl: "/auth/register"
      };
    }

    // Default intelligent fallback
    return {
      text: `⚡ InboxWa powers ${currentIndustryName} with official Meta Cloud API, automated AI chat funnels, 98% open-rate broadcasts, and seamless CRM integrations!`,
      actionText: "Request Free Demo",
      actionUrl: "#indModal"
    };
  }

  // 6. Handle User Message & Bot Response
  function handleUserMessage(msgText) {
    if (!msgText || !msgText.trim() || !cwBody) return;
    const cleanText = msgText.trim();

    // Append User Message
    const userDiv = document.createElement('div');
    userDiv.className = 'cw-bubble user';
    userDiv.innerHTML = `
      <span>${escapeHtml(cleanText)}</span>
      <div class="cw-bubble-meta">
        <span class="time">${getFormattedTime()}</span>
        <span class="cw-ticks grey">✓</span>
      </div>
    `;

    const typingIndicatorEl = document.getElementById('cw-typing-indicator');
    if (typingIndicatorEl) {
      cwBody.insertBefore(userDiv, typingIndicatorEl);
    } else {
      cwBody.appendChild(userDiv);
    }
    scrollToBottom();
    playChime(false);

    // Change tick to double blue after 220ms
    setTimeout(function() {
      const ticks = userDiv.querySelector('.cw-ticks');
      if (ticks) {
        ticks.className = 'cw-ticks double-blue';
        ticks.textContent = '✓✓';
      }
    }, 220);

    // Show Typing Indicator
    if (typingIndicatorEl) {
      typingIndicatorEl.style.display = 'flex';
      scrollToBottom();
    }

    if (chatInput) chatInput.disabled = true;

    // Bot Response after 750ms
    setTimeout(function() {
      if (typingIndicatorEl) typingIndicatorEl.style.display = 'none';

      const botReply = getIndustryBotReply(cleanText, currentIndustrySlug);
      const botDiv = document.createElement('div');
      botDiv.className = 'cw-bubble bot';

      let actionBtnHtml = '';
      if (botReply.actionText && botReply.actionUrl) {
        if (botReply.actionUrl.startsWith('#') || botReply.actionUrl.includes('Modal')) {
          actionBtnHtml = `<button type="button" class="cw-bot-action-btn" onclick="openIndModal('${escapeHtml(botReply.actionText)}')">${escapeHtml(botReply.actionText)} &rarr;</button>`;
        } else if (botReply.actionUrl.startsWith('http') || botReply.actionUrl.startsWith('tel:')) {
          actionBtnHtml = `<a href="${escapeHtml(botReply.actionUrl)}" target="_blank" rel="noopener" class="cw-bot-action-btn">${escapeHtml(botReply.actionText)} &rarr;</a>`;
        } else {
          actionBtnHtml = `<a href="${escapeHtml(botReply.actionUrl)}" class="cw-bot-action-btn">${escapeHtml(botReply.actionText)} &rarr;</a>`;
        }
      }

      botDiv.innerHTML = `
        <span>${escapeHtml(botReply.text).replace(/\\n/g, '<br>')}</span>
        ${actionBtnHtml}
        <div class="cw-bubble-meta">
          <span class="time">${getFormattedTime()}</span>
        </div>
      `;

      if (typingIndicatorEl) {
        cwBody.insertBefore(botDiv, typingIndicatorEl);
      } else {
        cwBody.appendChild(botDiv);
      }

      scrollToBottom();
      playChime(true);

      if (chatInput) {
        chatInput.disabled = false;
        chatInput.focus();
      }
    }, 750);
  }

  // Trigger Send Action
  function sendCurrentInput() {
    if (!chatInput) return;
    const val = chatInput.value;
    if (!val || !val.trim()) {
      chatInput.focus();
      return;
    }
    chatInput.value = '';
    if (chatSendBtn) {
      chatSendBtn.style.transform = '';
      chatSendBtn.style.boxShadow = '';
    }
    handleUserMessage(val);
  }

  if (chatSendBtn) {
    chatSendBtn.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      sendCurrentInput();
    });
  }

  if (chatInput) {
    chatInput.addEventListener('keydown', function(e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        e.stopPropagation();
        sendCurrentInput();
      }
    });

    chatInput.addEventListener('input', function() {
      if (chatSendBtn) {
        if (chatInput.value.trim().length > 0) {
          chatSendBtn.style.transform = 'scale(1.12)';
          chatSendBtn.style.boxShadow = '0 0 10px rgba(0, 168, 132, 0.8)';
        } else {
          chatSendBtn.style.transform = '';
          chatSendBtn.style.boxShadow = '';
        }
      }
    });
  }

  // Bind suggestion chips
  const chips = document.querySelectorAll('.cw-chip');
  chips.forEach(function(chip) {
    chip.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      const q = chip.getAttribute('data-query');
      if (q) {
        handleUserMessage(q);
      }
    });
  });

  // Bind buttons inside chat bubbles
  function bindSimButtons() {
    document.querySelectorAll('.cw-sim-action-btn').forEach(function(btn) {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        const q = btn.getAttribute('data-query');
        if (q) {
          handleUserMessage(q);
        }
      });
    });
  }
  bindSimButtons();

  // Highlight first chip gently after 2.5s if user hasn't interacted
  setTimeout(function() {
    const firstChip = document.querySelector('.cw-chip');
    if (firstChip && chatInput && !chatInput.value) {
      firstChip.style.transform = 'scale(1.08) translateY(-2px)';
      firstChip.style.boxShadow = '0 0 12px rgba(16, 185, 129, 0.7)';
      setTimeout(function() {
        firstChip.style.transform = '';
        firstChip.style.boxShadow = '';
      }, 1200);
    }
  }, 2500);
})();

</script>

<?php include __DIR__ . '/footer.php'; ?>
