<?php
$basePath = '../';
require_once __DIR__ . '/../config/cms.php';

$locations = cms_locations();

$pageTitle = 'WhatsApp Business API Locations & Global Coverage | InboxWa';
$pageDescription = 'Official WhatsApp Business API, AI chatbots, and multi-agent CRM available across India, Middle East, Europe, North America, and globally.';
$canonicalUrl = 'https://inboxwa.com/locations/';

include __DIR__ . '/../includes/header.php';
?>

<div class="locations-directory-page" style="padding-top: calc(var(--nav, 72px) + 2rem); min-height: 80vh; background: var(--bg);">
  <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 2rem 1.25rem 4rem;">
    <div style="text-align: center; max-width: 780px; margin: 0 auto 3rem;">
      <span class="badge badge-primary" style="display: inline-block; margin-bottom: 0.75rem; padding: 0.35rem 0.85rem; border-radius: 999px; background: rgba(37,211,102,0.12); color: #128c7e; font-weight: 600; font-size: 0.85rem;">Global Reach & Local Compliance</span>
      <h1 style="font-size: clamp(2rem, 4vw, 2.75rem); font-weight: 800; color: var(--t1); margin-bottom: 1rem; line-height: 1.2;">Official WhatsApp API by Location</h1>
      <p style="font-size: 1.1rem; color: var(--t2); line-height: 1.6;">Discover dedicated WhatsApp Business API solutions, local compliance, AI automations, and CRM setups tailored for your market.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 1.5rem;">
      <?php foreach ($locations as $slug => $loc): ?>
        <a href="<?php echo $bp; ?>locations/<?php echo urlencode($loc['slug'] ?? $slug); ?>/" 
           style="display: block; background: var(--card-bg, #ffffff); border: 1px solid var(--border, #e2e8f0); border-radius: 12px; padding: 1.5rem; text-decoration: none; transition: all 0.2s ease; box-shadow: 0 2px 4px rgba(0,0,0,0.03);"
           onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 10px 20px rgba(0,0,0,0.08)';"
           onmouseout="this.style.transform='none';this.style.boxShadow='0 2px 4px rgba(0,0,0,0.03)';">
          <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 0.75rem;">
            <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.05em; font-weight: 700; color: #25d366; background: rgba(37,211,102,0.1); padding: 0.2rem 0.5rem; border-radius: 4px;">
              <?php echo htmlspecialchars($loc['type'] ?? 'City'); ?>
            </span>
            <span style="font-size: 0.8rem; color: var(--t3); font-weight: 500;">
              <?php echo htmlspecialchars($loc['country'] ?? ''); ?>
            </span>
          </div>
          <h2 style="font-size: 1.2rem; font-weight: 700; color: var(--t1); margin: 0 0 0.5rem;">
            <?php echo htmlspecialchars($loc['city'] ?? $loc['slug']); ?>
          </h2>
          <p style="font-size: 0.875rem; color: var(--t2); line-height: 1.5; margin: 0 0 1rem; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
            <?php echo htmlspecialchars($loc['hero_description'] ?? 'Official WhatsApp Business API setup & CRM automation.'); ?>
          </p>
          <span style="font-size: 0.85rem; font-weight: 600; color: #128c7e; display: inline-flex; align-items: center; gap: 0.25rem;">
            Explore <?php echo htmlspecialchars($loc['city'] ?? 'Location'); ?> &rarr;
          </span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
