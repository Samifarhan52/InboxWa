<?php
/**
 * InboxWa – Reusable location page template.
 * Expects $loc array from locations-data.php and $basePath / $bp set by the page.
 */
if (!isset($loc) || !is_array($loc)) {
  http_response_code(404);
  echo 'Location not found.';
  return;
}

$pageTitle = $loc['meta_title'];
$pageDescription = $loc['meta_description'];
$pageKeywords = implode(', ', array_merge([$loc['primary_keyword']], $loc['secondary_keywords'] ?? []));
$canonicalUrl = 'https://inboxwa.com/locations/' . $loc['slug'] . '/';
$ogImage = 'https://inboxwa.com/' . ltrim($loc['image'] ?? 'assets/images/og-image.png', '/');

$allLocations = require __DIR__ . '/locations-data.php';
$isCountry = ($loc['type'] ?? 'city') === 'country';
$displayName = $loc['city'];
$label = $isCountry ? $displayName : $displayName;

include __DIR__ . '/header.php';
?>

<!-- Breadcrumb -->
<nav class="loc-breadcrumb container" aria-label="Breadcrumb" style="padding-top:calc(var(--nav,72px) + 1.25rem)">
  <ol itemscope itemtype="https://schema.org/BreadcrumbList" style="display:flex;flex-wrap:wrap;gap:.35rem;list-style:none;font-size:.85rem;color:var(--t3)">
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="<?php echo $bp; ?>"><span itemprop="name">Home</span></a>
      <meta itemprop="position" content="1">
    </li>
    <li aria-hidden="true">/</li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="<?php echo $bp; ?>locations/"><span itemprop="name">Locations</span></a>
      <meta itemprop="position" content="2">
    </li>
    <li aria-hidden="true">/</li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <span itemprop="name">WhatsApp API <?php echo htmlspecialchars($displayName); ?></span>
      <meta itemprop="position" content="3">
    </li>
  </ol>
</nav>

<!-- Hero -->
<section class="section page-hero" style="padding-top:1.5rem">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary"><?php echo $isCountry ? 'Country' : 'City'; ?> · <?php echo htmlspecialchars($loc['country']); ?></span>
      <h1><?php echo htmlspecialchars($loc['hero_title']); ?></h1>
      <p class="lead"><?php echo htmlspecialchars($loc['hero_description']); ?></p>
      <div class="hero-actions" style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="<?php echo $bp; ?>#contact-section" class="btn btn-primary btn-lg">Get Started</a>
        <a href="<?php echo $bp; ?>#contact-section" class="btn btn-outline btn-lg">Book a Demo</a>
      </div>
    </div>
    <div class="loc-hero-media reveal" style="margin-top:2rem;max-width:720px;margin-left:auto;margin-right:auto">
      <img
        src="<?php echo $bp . htmlspecialchars($loc['image'] ?? 'assets/images/og-image.png'); ?>"
        alt="<?php echo htmlspecialchars($loc['image_alt']); ?>"
        width="1200" height="630" loading="eager" decoding="async"
        style="width:100%;height:auto;border-radius:16px;border:1px solid var(--bd);box-shadow:var(--sh2);background:linear-gradient(135deg,#EDE9FE,#CFFAFE);min-height:200px;object-fit:cover"
        onerror="this.style.background='linear-gradient(135deg,#EDE9FE,#CFFAFE)';this.removeAttribute('src')"
      >
    </div>
  </div>
</section>

<!-- Local business context -->
<section class="section section-gradient-1">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Local context</span>
      <h2>Businesses &amp; industries we serve in <?php echo htmlspecialchars($displayName); ?></h2>
      <p class="lead">Teams in <?php echo htmlspecialchars($displayName); ?> use Official WhatsApp Business API for support, sales and operations. Below are common sectors — not a claim of specific customer relationships.</p>
    </div>
    <div class="features-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:1.25rem;margin-top:2rem">
      <?php foreach ($loc['industries'] as $i => $ind):
        if (is_string($ind)) { $indName = $ind; $indText = 'WhatsApp API and automation use cases for ' . $ind . ' teams in ' . $displayName . '.'; }
        else { $indName = $ind['name'] ?? ''; $indText = $ind['text'] ?? ''; }
      ?>
      <div class="card card-feature reveal<?php echo $i ? ' reveal-delay-' . min($i, 4) : ''; ?>">
        <div class="icon-box icon-box-gradient">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
        </div>
        <h3><?php echo htmlspecialchars($indName); ?></h3>
        <p><?php echo htmlspecialchars($indText); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php if (!empty($loc['areas'])): ?>
<!-- Areas -->
<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary"><?php echo $isCountry ? 'Key cities' : 'Areas'; ?></span>
      <h2><?php echo $isCountry ? 'Where teams operate in ' . htmlspecialchars($displayName) : 'Serving teams across ' . htmlspecialchars($displayName); ?></h2>
      <p class="lead"><?php echo $isCountry ? 'Country-wide messaging for teams in major business hubs.' : 'Local teams message customers from neighbourhoods and business districts across the city.'; ?></p>
    </div>
    <div style="display:flex;flex-wrap:wrap;gap:.6rem;justify-content:center;margin-top:1.25rem" class="reveal">
      <?php foreach ($loc['areas'] as $area): ?>
        <span class="pill"><?php echo htmlspecialchars($area); ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- Use cases -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Use cases</span>
      <h2>How businesses in <?php echo htmlspecialchars($displayName); ?> use InboxWa</h2>
    </div>
    <div class="features-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:1.25rem;margin-top:2rem">
      <?php foreach (($loc['use_cases'] ?? [
      ['name' => 'Customer support', 'text' => 'Deflect FAQs and route complex chats to agents.'],
      ['name' => 'Sales qualification', 'text' => 'Capture intent before your team joins.'],
      ['name' => 'Broadcast updates', 'text' => 'Send approved templates to opted-in contacts.'],
      ['name' => 'Reminders', 'text' => 'Reduce no-shows with WhatsApp nudges.'],
    ]) as $i => $uc): if (is_string($uc)) { $uc = ['name' => $uc, 'text' => 'Automate this journey on WhatsApp with InboxWa.']; } ?>
      <div class="card card-feature reveal">
        <div class="icon-box icon-box-accent">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
        </div>
        <h3><?php echo htmlspecialchars($uc['name']); ?></h3>
        <p><?php echo htmlspecialchars($uc['text']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Omnichannel -->
<section class="section section-dark" id="omnichannel-loc">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Omnichannel</span>
      <h2 style="color:#fff">Every channel. One <?php echo htmlspecialchars($displayName); ?> team view.</h2>
      <p class="lead" style="color:rgba(255,255,255,.7)">WhatsApp, Instagram, Facebook, Telegram, Live Chat and Voice — unified for teams serving <?php echo htmlspecialchars($displayName); ?>.</p>
    </div>
    <div class="channels-grid">
      <div class="channel-card reveal"><div class="channel-icon channel-wa" aria-hidden="true"><svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></div><h3>WhatsApp</h3><p>Official API inbox</p></div>
      <div class="channel-card reveal"><div class="channel-icon channel-ig" aria-hidden="true"><svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></div><h3>Instagram</h3><p>DMs &amp; comments</p></div>
      <div class="channel-card reveal"><div class="channel-icon channel-fb" aria-hidden="true"><svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></div><h3>Facebook</h3><p>Messenger</p></div>
      <div class="channel-card reveal"><div class="channel-icon channel-tg" aria-hidden="true"><svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.15 1.568-.769 5.233-1.087 6.94-.134.69-.402 1.215-.652 1.386-.54.34-1.113.29-1.553.176-.69-.175-1.212-.507-1.88-.872-.855-.463-1.339-.726-2.166-1.164-.96-.513-.337-.796.21-1.259.143-.121 2.68-2.456 2.727-2.666.006-.026.014-.125-.047-.177s-.146-.03-.209-.018c-.09.018-1.517.962-4.28 2.826-.405.278-.772.415-1.1.408-.362-.008-1.06-.204-1.578-.373-.635-.207-1.14-.316-1.096-.666.023-.183.356-.37.98-.561 3.836-1.672 6.394-2.776 7.674-3.313 3.66-1.52 4.42-1.784 4.916-1.793z"/></svg></div><h3>Telegram</h3><p>Bots &amp; support</p></div>
      <div class="channel-card reveal"><div class="channel-icon channel-chat" aria-hidden="true"><svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div><h3>Live Chat</h3><p>Website widget</p></div>
      <div class="channel-card reveal"><div class="channel-icon channel-voice" aria-hidden="true"><svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div><h3>Voice</h3><p>Click-to-call</p></div>
    </div>
  </div>
</section>

<!-- Platform capabilities + internal links -->
<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Platform</span>
      <h2>InboxWa capabilities for <?php echo htmlspecialchars($displayName); ?></h2>
      <p class="lead">Explore products and solutions your team can launch on the same account.</p>
    </div>
    <div style="display:flex;flex-wrap:wrap;gap:.65rem;justify-content:center;margin-top:1.25rem" class="reveal">
      <a class="pill" href="<?php echo $bp; ?>products/whatsapp-api">WhatsApp API</a>
      <a class="pill" href="<?php echo $bp; ?>products/shared-inbox">Shared Inbox</a>
      <a class="pill" href="<?php echo $bp; ?>products/chatbot">AI Chatbot</a>
      <a class="pill" href="<?php echo $bp; ?>products/flow-builder">Flow Builder</a>
      <a class="pill" href="<?php echo $bp; ?>products/broadcast">Broadcasts</a>
      <a class="pill" href="<?php echo $bp; ?>products/crm">CRM</a>
      <a class="pill" href="<?php echo $bp; ?>products/automation">Automation</a>
      <a class="pill" href="<?php echo $bp; ?>products/analytics">Analytics</a>
      <a class="pill" href="<?php echo $bp; ?>solutions/lead-generation">Lead Generation</a>
      <a class="pill" href="<?php echo $bp; ?>solutions/customer-support">Customer Support</a>
      <a class="pill" href="<?php echo $bp; ?>Pricing">Pricing</a>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">FAQ</span>
      <h2>WhatsApp API in <?php echo htmlspecialchars($displayName); ?> — questions</h2>
    </div>
    <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0">
      <?php foreach ($loc['faq'] as $item):
        if (is_array($item) && array_keys($item) === range(0, count($item)-1)) {
          $fq = $item[0] ?? ''; $fa = $item[1] ?? '';
        } else {
          $fq = $item['q'] ?? $item['question'] ?? '';
          $fa = $item['a'] ?? $item['answer'] ?? '';
        }
      ?>
      <div class="faq-item reveal">
        <button type="button" class="faq-question" aria-expanded="false">
          <?php echo htmlspecialchars($fq); ?>
          <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="faq-answer"><div class="faq-answer-inner"><?php echo htmlspecialchars($fa); ?></div></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Nearby locations -->
<?php if (!empty($loc['nearby'])): ?>
<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Locations</span>
      <h2>Explore WhatsApp API locations</h2>
      <p class="lead">Related InboxWa location resources.</p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:1rem;margin-top:1.5rem">
      <?php foreach ($loc['nearby'] as $nearSlug):
        if (!isset($allLocations[$nearSlug])) continue;
        $n = $allLocations[$nearSlug];
      ?>
      <a href="<?php echo $bp; ?>locations/<?php echo htmlspecialchars($nearSlug); ?>/" class="card card-center reveal" style="text-decoration:none">
        <h3 style="font-size:1rem;margin-bottom:.35rem"><?php echo htmlspecialchars($n['city']); ?></h3>
        <p style="margin:0;font-size:.85rem"><?php echo htmlspecialchars($n['country']); ?></p>
      </a>
      <?php endforeach; ?>
    </div>
    <p class="reveal" style="text-align:center;margin-top:1.5rem">
      <a href="<?php echo $bp; ?>locations/" class="btn btn-outline">View all locations</a>
    </p>
  </div>
</section>
<?php endif; ?>

<!-- Popular Searches (SEO internal link graph) -->
<section class="section section-alt" id="popular-searches">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Popular searches</span>
      <h2>People also search for in <?php echo htmlspecialchars($displayName); ?></h2>
      <p class="lead">Related WhatsApp API, automation and chatbot topics — useful for teams comparing solutions.</p>
    </div>
    <div class="popular-searches reveal" style="display:flex;flex-wrap:wrap;gap:.5rem;justify-content:center;margin-top:1.25rem;max-width:900px;margin-left:auto;margin-right:auto">
      <?php
      $city = $loc['city'];
      $popular = [
        ['label' => "WhatsApp API Provider $city", 'href' => $bp . 'locations/' . $loc['slug'] . '/'],
        ['label' => "WhatsApp Automation $city", 'href' => $bp . 'locations/' . $loc['slug'] . '/'],
        ['label' => "WhatsApp Chatbot $city", 'href' => $bp . 'products/chatbot'],
        ['label' => "WhatsApp Bulk Messaging $city", 'href' => $bp . 'solutions/bulk-messaging'],
        ['label' => 'WhatsApp Business API', 'href' => $bp . 'products/whatsapp-api'],
        ['label' => 'Shared Team Inbox', 'href' => $bp . 'products/shared-inbox'],
        ['label' => 'Flow Builder', 'href' => $bp . 'products/flow-builder'],
        ['label' => 'Broadcast Campaigns', 'href' => $bp . 'products/broadcast'],
        ['label' => 'Instagram Automation', 'href' => $bp . 'solutions/instagram-automation'],
        ['label' => 'Facebook Messenger API', 'href' => $bp . 'solutions/facebook-messenger'],
        ['label' => 'Telegram Bot Platform', 'href' => $bp . 'solutions/telegram-bot'],
        ['label' => 'WATI Alternative', 'href' => $bp . 'resources/WATI-Alternative'],
        ['label' => 'AiSensy Alternative', 'href' => $bp . 'resources/AiSensy-Alternative'],
        ['label' => 'WhatsApp CRM', 'href' => $bp . 'products/crm'],
        ['label' => 'Lead Generation on WhatsApp', 'href' => $bp . 'solutions/lead-generation'],
        ['label' => 'Customer Support WhatsApp', 'href' => $bp . 'solutions/customer-support'],
      ];
      foreach ($popular as $ps):
      ?>
        <a href="<?php echo htmlspecialchars($ps['href']); ?>" class="pill" style="text-decoration:none"><?php echo htmlspecialchars($ps['label']); ?></a>
      <?php endforeach; ?>
    </div>
    <div class="reveal" style="margin-top:2rem;text-align:center">
      <h3 style="font-size:1rem;margin-bottom:.75rem">Solutions by use case</h3>
      <div style="display:flex;flex-wrap:wrap;gap:.5rem;justify-content:center">
        <a class="pill" href="<?php echo $bp; ?>solutions/bulk-messaging">Bulk WhatsApp Messaging</a>
        <a class="pill" href="<?php echo $bp; ?>products/chatbot">WhatsApp Chatbot</a>
        <a class="pill" href="<?php echo $bp; ?>products/broadcast">WhatsApp Broadcast API</a>
        <a class="pill" href="<?php echo $bp; ?>solutions/instagram-automation">Instagram Automation</a>
        <a class="pill" href="<?php echo $bp; ?>solutions/facebook-messenger">Facebook Messenger API</a>
        <a class="pill" href="<?php echo $bp; ?>solutions/telegram-bot">Telegram Bot Platform</a>
        <a class="pill" href="<?php echo $bp; ?>resources/WATI-Alternative">WATI Alternative</a>
        <a class="pill" href="<?php echo $bp; ?>resources/AiSensy-Alternative">AiSensy Alternative</a>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section section-dark">
  <div class="container">
    <div class="section-header reveal" style="text-align:center">
      <h2 style="color:#fff">Ready to automate customer conversations in <?php echo htmlspecialchars($displayName); ?>?</h2>
      <p class="lead" style="color:rgba(255,255,255,.75)">Official WhatsApp API, AI chatbot, shared inbox and CRM — one platform.</p>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="<?php echo $bp; ?>#contact-section" class="btn btn-primary btn-lg">Start Free</a>
        <a href="<?php echo $bp; ?>#contact-section" class="btn btn-white btn-lg">Book a Demo</a>
        <a href="https://wa.me/918050854445" target="_blank" rel="noopener" class="btn btn-outline btn-lg" style="color:#fff;border-color:rgba(255,255,255,.35)">WhatsApp Us</a>
      </div>
    </div>
  </div>
</section>

<!-- Structured data: FAQ + Breadcrumb already partially in HTML -->
<script type="application/ld+json">
<?php
$faqSchema = [
  '@context' => 'https://schema.org',
  '@type' => 'FAQPage',
  'mainEntity' => array_map(function ($f) {
    if (is_array($f) && array_keys($f) === range(0, count($f) - 1)) {
      $q = $f[0] ?? ''; $a = $f[1] ?? '';
    } else {
      $q = $f['q'] ?? $f['question'] ?? '';
      $a = $f['a'] ?? $f['answer'] ?? '';
    }
    return [
      '@type' => 'Question',
      'name' => $q,
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => $a],
    ];
  }, $loc['faq'] ?? []),
];
echo json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://inboxwa.com/"},
    {"@type": "ListItem", "position": 2, "name": "Locations", "item": "https://inboxwa.com/locations/"},
    {"@type": "ListItem", "position": 3, "name": <?php echo json_encode('WhatsApp API ' . $displayName); ?>, "item": <?php echo json_encode($canonicalUrl); ?>}
  ]
}
</script>

<?php include __DIR__ . '/footer.php'; ?>
