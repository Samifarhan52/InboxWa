<?php
$basePath = '../';
$bp = '../';
require_once __DIR__ . '/../config/business-leads.php';
$HBContact = require __DIR__ . '/../config/contact.php';

$pageTitle = 'Browse by Business Category – 16 Business Leads Datasets';
$pageDescription = '16 major categories of business data to explore and request. Get verified leads, automated WhatsApp qualification, and targeted datasets for your industry.';
$canonicalUrl = 'https://inboxwa.com/business-leads/';
$ogImage = 'assets/images/og-image.png';

$allCategories = get_all_business_leads_categories();
$waNumber = $HBContact['data_marketplace_whatsapp'] ?? '918884058241';

include __DIR__ . '/../includes/header.php';
?>

<link rel="stylesheet" href="/assets/css/business-leads.css?v=3">

<main class="bl-page">
  <!-- HERO -->
  <section class="bl-hero" aria-label="Business Leads Directory Hero">
    <div class="bl-hero-bg" aria-hidden="true"></div>
    <div class="bl-container" style="text-align:center;">
      <span class="bl-badge-pill">B2B &amp; B2C Verified Data Marketplace</span>
      <h1 class="bl-hero-title">Browse by Business Category</h1>
      <p class="bl-hero-desc" style="margin:0 auto 2.5rem;max-width:680px;">
        16 major categories of business data to explore and request. Connect with verified phone numbers, automate lead qualification, and close deals on WhatsApp.
      </p>

      <!-- Search Bar -->
      <div style="max-width:560px;margin:0 auto;position:relative;">
        <input type="text" id="bl-search" placeholder="Search any business category or keyword..." style="width:100%;padding:1rem 1.25rem 1rem 3rem;border-radius:999px;border:1px solid rgba(255,255,255,0.25);background:rgba(15,23,42,0.85);color:#ffffff;font-size:1rem;box-sizing:border-box;outline:none;" />
        <svg style="position:absolute;left:18px;top:50%;transform:translateY(-50%);color:#94a3b8;" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
      </div>
    </div>
  </section>

  <!-- 16 CATEGORIES DIRECTORY (Exactly fulfills user prompt format) -->
  <section class="bl-section" id="categories">
    <div class="bl-container">
      <div class="bl-hub-grid" id="bl-grid">
        <?php foreach ($allCategories as $cat): ?>
        <article class="bl-hub-card" data-title="<?php echo strtolower(htmlspecialchars($cat['name'])); ?>" data-desc="<?php echo strtolower(htmlspecialchars($cat['subtitle'])); ?>">
          <div>
            <div class="bl-hub-icon" style="background:<?php echo $cat['color_light']; ?>;color:<?php echo $cat['color']; ?>;">
              <?php echo $cat['svg']; ?>
            </div>
            <h3><?php echo htmlspecialchars($cat['name']); ?></h3>
            <p><?php echo htmlspecialchars($cat['subtitle']); ?></p>
          </div>

          <div>
            <div style="margin-bottom:0.85rem;">
              <span class="bl-badge-avail">Available Data</span>
            </div>
            <div class="bl-hub-footer">
              <a href="/business-leads/<?php echo urlencode($cat['slug']); ?>/" class="bl-dataset-btn" style="padding:0.6rem 1.15rem;font-size:0.86rem;">
                <span>Explore Data</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
            </div>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CUSTOM DATA REQUEST CTA -->
  <section class="bl-cta-section" style="padding-top:1rem;">
    <div class="bl-container">
      <div class="bl-cta-box">
        <h2>Looking for a Custom Business Audience?</h2>
        <p>Tell us your target geography, industry vertical, job titles, or company size. We source, scrub, and verify targeted leads tailored to your exact campaign goals.</p>
        <div style="display:flex;align-items:center;justify-content:center;gap:1rem;flex-wrap:wrap;">
          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi InboxWa team, I would like to make a custom business data request. Please connect me with a data specialist.'); ?>" target="_blank" rel="noopener" class="bl-btn-primary" style="padding:1rem 2rem;">
            <span>Submit Custom Data Request</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
  // Live search filtering for category cards
  document.getElementById('bl-search')?.addEventListener('input', function(e) {
    const q = e.target.value.toLowerCase().trim();
    const cards = document.querySelectorAll('#bl-grid .bl-hub-card');
    cards.forEach(card => {
      const title = card.getAttribute('data-title') || '';
      const desc = card.getAttribute('data-desc') || '';
      if (!q || title.includes(q) || desc.includes(q)) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  });
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
