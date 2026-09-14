<?php
$basePath = '../';
$bp = '../';
require_once __DIR__ . '/../config/business-leads.php';
$HBContact = require __DIR__ . '/../config/contact.php';

$pageTitle = 'Browse by Business Category – 12 Business Leads Datasets';
$pageDescription = '12 major categories of business data to explore and request. Get verified leads, automated WhatsApp qualification, and targeted datasets for your industry.';
$canonicalUrl = 'https://hellobotz.com/business-leads/';
$ogImage = 'assets/images/og-image.png';

$allCategories = [
    [
        'slug' => 'bfsi',
        'name' => 'Banking & Finance',
        'subtitle' => 'Banks, NBFCs, fintech apps, insurance providers, loan brokers and wealth managers.',
        'color' => '#4f46e5',
        'color_light' => 'rgba(79, 70, 229, 0.1)',
        'svg' => '<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M3 10h18M5 10v11M19 10v11M9 10v11M15 10v11M12 3L2 10h20L12 3z"/></svg>'
    ],
    [
        'slug' => 'healthcare',
        'name' => 'Health & Wellness',
        'subtitle' => 'Hospitals, clinics, diagnostic centres, wellness centres, pharmacies and healthcare businesses.',
        'color' => '#ec4899',
        'color_light' => 'rgba(236, 72, 153, 0.1)',
        'svg' => '<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>'
    ],
    [
        'slug' => 'retail-and-ecommerce',
        'name' => 'Retail & E-commerce',
        'subtitle' => 'Online stores, D2C brands, retail outlets, supermarkets and e-commerce enterprises.',
        'color' => '#7c3aed',
        'color_light' => 'rgba(124, 58, 237, 0.1)',
        'svg' => '<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>'
    ],
    [
        'slug' => 'travel-and-hospitality',
        'name' => 'Travel & Hospitality',
        'subtitle' => 'Hotels, resorts, travel agencies, tour operators, booking portals and hospitality businesses.',
        'color' => '#0284c7',
        'color_light' => 'rgba(2, 132, 199, 0.1)',
        'svg' => '<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/><line x1="2" y1="12" x2="22" y2="12"/></svg>'
    ],
    [
        'slug' => 'education-and-social-impacts',
        'name' => 'Education & Social Impacts',
        'subtitle' => 'Schools, colleges, coaching institutes, training centres, edtech platforms and social organizations.',
        'color' => '#10b981',
        'color_light' => 'rgba(16, 185, 129, 0.1)',
        'svg' => '<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>'
    ],
    [
        'slug' => 'communication-and-it',
        'name' => 'Communication & IT',
        'subtitle' => 'IT companies, SaaS platforms, cloud providers, software agencies and telecom networks.',
        'color' => '#059669',
        'color_light' => 'rgba(5, 150, 105, 0.1)',
        'svg' => '<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>'
    ],
    [
        'slug' => 'food-and-beverages',
        'name' => 'Food & Beverage',
        'subtitle' => 'Restaurants, cafes, cloud kitchens, catering, food manufacturers and beverage brands.',
        'color' => '#ea580c',
        'color_light' => 'rgba(234, 88, 12, 0.1)',
        'svg' => '<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>'
    ],
    [
        'slug' => 'advertising-and-events',
        'name' => 'Advertising & Events',
        'subtitle' => 'Marketing agencies, media production, event planners, exhibition organizers and PR firms.',
        'color' => '#8b5cf6',
        'color_light' => 'rgba(139, 92, 246, 0.1)',
        'svg' => '<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"/></svg>'
    ],
    [
        'slug' => 'construction-and-real-estate',
        'name' => 'Construction & Real Estate',
        'subtitle' => 'Builders, developers, brokers, property consultants, architects and civil contractors.',
        'color' => '#2563eb',
        'color_light' => 'rgba(37, 99, 235, 0.1)',
        'svg' => '<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>'
    ],
    [
        'slug' => 'automobiles-and-transport',
        'name' => 'Automobiles & Transport',
        'subtitle' => 'Dealers, service centres, automobile businesses, transport and logistics operators.',
        'color' => '#0891b2',
        'color_light' => 'rgba(8, 145, 178, 0.1)',
        'svg' => '<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.5 2.8C2.1 11.2 2 11.6 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></svg>'
    ],
    [
        'slug' => 'government-and-utilities',
        'name' => 'Government & Utilities',
        'subtitle' => 'Municipal corporations, public utilities, government boards, civic agencies and energy providers.',
        'color' => '#475569',
        'color_light' => 'rgba(71, 85, 105, 0.1)',
        'svg' => '<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22h16M4 2h16M6 6h12M6 10h12M6 14h12M6 18h12"/></svg>'
    ],
    [
        'slug' => 'manufacturing-and-supply',
        'name' => 'Manufacturing & Supply',
        'subtitle' => 'Factories, industrial suppliers, distributors, raw material vendors and supply chain networks.',
        'color' => '#0d9488',
        'color_light' => 'rgba(13, 148, 136, 0.1)',
        'svg' => '<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/></svg>'
    ]
];

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
        12 major categories of business data to explore and request. Connect with verified phone numbers, automate lead qualification, and close deals on WhatsApp.
      </p>

      <!-- Search Bar -->
      <div style="max-width:560px;margin:0 auto;position:relative;">
        <input type="text" id="bl-search" placeholder="Search any business category or keyword..." style="width:100%;padding:1rem 1.25rem 1rem 3rem;border-radius:999px;border:1px solid rgba(255,255,255,0.25);background:rgba(15,23,42,0.85);color:#ffffff;font-size:1rem;box-sizing:border-box;outline:none;" />
        <svg style="position:absolute;left:18px;top:50%;transform:translateY(-50%);color:#94a3b8;" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
      </div>
    </div>
  </section>

  <!-- 12 CATEGORIES DIRECTORY (Matches Solutions By Industry) -->
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
              <a href="https://panindiadata.com/" target="_blank" rel="noopener" class="bl-dataset-btn" style="padding:0.6rem 1.15rem;font-size:0.86rem;">
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
          <a href="https://wa.me/<?php echo $waNumber; ?>?text=<?php echo urlencode('Hi HelloBotz team, I would like to make a custom business data request. Please connect me with a data specialist.'); ?>" target="_blank" rel="noopener" class="bl-btn-primary" style="padding:1rem 2rem;">
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
