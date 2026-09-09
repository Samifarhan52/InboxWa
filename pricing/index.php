<?php
$basePath = '../';
$pageTitle = 'InboxWa Pricing – WhatsApp API, AI Chatbot & Omnichannel Automation Plans';
$pageDescription = 'Transparent pricing for WhatsApp Business API, AI chatbot and omnichannel automation. Growth ₹1,999, Pro ₹4,999, Business ₹7,999. 14-day free trial. 18% GST at checkout.';
$pageKeywords = 'InboxWa pricing, WhatsApp API price, AI chatbot plans, omnichannel pricing India';
$canonicalUrl = 'https://inboxwa.com/pricing/';
require_once __DIR__ . '/../config/cms.php';
$pricing = require __DIR__ . '/../config/pricing.php';
$dbPlans = cms_pricing_plans();
if (!empty($dbPlans)) {
  $pricing['plans'] = $dbPlans;
}
include __DIR__ . '/../includes/header.php';
$reg = htmlspecialchars($pricing['register_url']);
$gst = (int)round($pricing['gst_rate'] * 100);
$rate = (float)$pricing['INR_TO_USD_RATE'];
?>
<link rel="stylesheet" href="/assets/css/pricing.css?v=1">
<link rel="stylesheet" href="/assets/css/addon-form.css?v=1">

<nav class="container breadcrumb-nav" aria-label="Breadcrumb" style="padding-top:calc(var(--nav,72px)+1rem)">
  <ol style="display:flex;flex-wrap:wrap;gap:.35rem;list-style:none;padding:0;margin:0;font-size:.85rem;color:var(--t3)">
    <li><a href="/">Home</a></li><li aria-hidden="true">/</li><li>Pricing</li>
  </ol>
</nav>

<section class="section page-hero pricing-hero" style="padding-top:1.25rem">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Pricing</span>
      <h1>Simple, transparent pricing for powerful AI automation</h1>
      <p class="lead">Start with the tools you need today and scale your WhatsApp, AI and omnichannel automation as your business grows.</p>
      <div class="pricing-trust">
        <span><?php echo (int)$pricing['trial_days']; ?>-day free trial</span>
        <span>No long-term commitment</span>
        <span><?php echo $gst; ?>% GST applicable at checkout</span>
      </div>
    </div>

    <div class="pricing-controls reveal">
      <div class="pricing-toggle" role="group" aria-label="Billing period">
        <button type="button" class="pt-btn is-active" data-billing="monthly">Monthly</button>
        <button type="button" class="pt-btn" data-billing="yearly">Yearly <span class="pt-save" id="save-badge">Save</span></button>
      </div>
      <div class="currency-toggle" role="group" aria-label="Currency">
        <button type="button" class="cur-btn is-active" data-currency="INR">₹ INR</button>
        <button type="button" class="cur-btn" data-currency="USD">$ USD</button>
      </div>
    </div>
  </div>
</section>

<section class="section" style="padding-top:0">
  <div class="container">
    <div class="pricing-grid" id="pricing-cards">
      <?php foreach ($pricing['plans'] as $plan):
        $pid = $plan['id'];
        $m = (int)$plan['monthly'];
        $y = (int)$plan['yearly'];
        $save = max(0, ($m * 12) - $y);
        $savePct = $m > 0 ? round(($save / ($m * 12)) * 100) : 0;
      ?>
      <article class="price-card<?php echo $pid === 'pro' ? ' price-card--popular' : ''; ?><?php echo $pid === 'business' ? ' price-card--value' : ''; ?>" data-plan="<?php echo $pid; ?>">
        <?php if (!empty($plan['badge'])): ?>
        <div class="price-badge"><?php echo htmlspecialchars($plan['badge']); ?></div>
        <?php endif; ?>
        <h2 class="price-name"><?php echo htmlspecialchars($plan['name']); ?></h2>
        <p class="price-tagline"><?php echo htmlspecialchars($plan['tagline']); ?></p>
        <div class="price-amount">
          <span class="price-main"
            data-monthly="<?php echo $m; ?>"
            data-yearly="<?php echo $y; ?>"
            data-setup-m="<?php echo (int)$plan['setup_fee_monthly']; ?>"
            data-setup-y="<?php echo (int)$plan['setup_fee_yearly']; ?>">—</span>
          <span class="price-period">/ <span class="billing-label">month</span></span>
        </div>
        <p class="price-equiv" aria-live="polite"></p>
        <p class="price-setup" data-setup></p>
        <p class="price-gst">+<?php echo $gst; ?>% GST at checkout</p>
        <ul class="price-channels">
          <?php foreach ($plan['channels'] as $ch): ?>
          <li><?php echo htmlspecialchars($ch); ?></li>
          <?php endforeach; ?>
        </ul>
        <ul class="price-features">
          <?php foreach ($plan['features'] as $f): ?>
          <li><span class="check"><svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span> <?php echo htmlspecialchars($f); ?></li>
          <?php endforeach; ?>
        </ul>
        <a class="btn btn-primary btn-lg price-cta" href="<?php echo $reg; ?>"><?php echo htmlspecialchars($plan['cta']); ?></a>
      </article>
      <?php endforeach; ?>
    </div>
    <p class="pricing-footnote reveal">Meta / WhatsApp conversation charges from Meta are billed separately and are not included in plan prices unless stated in your agreement.</p>
  </div>
</section>

<!-- Comparison -->
<section class="section section-gradient-1" id="compare">
  <div class="container">
    <div class="section-header reveal">
      <h2>What&apos;s included</h2>
      <p class="lead">Compare every feature and limit across Growth, Pro and Business.</p>
    </div>
    <div class="compare-wrap reveal">
      <table class="compare-table">
        <thead>
          <tr>
            <th>Feature</th>
            <th>Growth</th>
            <th>Pro</th>
            <th>Business</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pricing['comparison'] as $row): ?>
          <tr>
            <td><?php echo htmlspecialchars($row[0]); ?></td>
            <td><?php echo htmlspecialchars($row[1]); ?></td>
            <td><?php echo htmlspecialchars($row[2]); ?></td>
            <td><?php echo htmlspecialchars($row[3]); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Calculator -->
<section class="section" id="calculator">
  <div class="container" style="max-width:640px">
    <div class="section-header reveal">
      <h2>Pricing calculator</h2>
      <p class="lead">Estimate your subscription. Not an official invoice.</p>
    </div>
    <div class="card calc-card reveal" style="padding:1.5rem">
      <div class="calc-row">
        <label>Plan</label>
        <select id="calc-plan">
          <option value="growth">Growth</option>
          <option value="pro" selected>Pro</option>
          <option value="business">Business</option>
        </select>
      </div>
      <div class="calc-row">
        <label>Billing</label>
        <select id="calc-billing">
          <option value="monthly">Monthly</option>
          <option value="yearly">Yearly</option>
        </select>
      </div>
      <div class="calc-addons" id="calc-addons"></div>
      <div class="calc-result">
        <div><span>Base</span><strong id="calc-base">—</strong></div>
        <div><span>Add-ons</span><strong id="calc-addons-total">—</strong></div>
        <div><span>Subtotal</span><strong id="calc-sub">—</strong></div>
        <div><span>Est. GST (<?php echo $gst; ?>%)</span><strong id="calc-gst">—</strong></div>
        <div class="calc-total"><span>Estimated total</span><strong id="calc-total">—</strong></div>
      </div>
      <p class="calc-note">Estimate only. Final amount confirmed at checkout. Meta conversation charges extra.</p>
    </div>
  </div>
</section>

<!-- Channel add-ons -->
<section class="section section-alt" id="addons">
  <div class="container">
    <div class="section-header reveal">
      <h2>Extend any plan</h2>
      <p class="lead">Optional add-ons to tailor your plan. Request an add-on — our team will confirm suitability.</p>
    </div>
    <h3 class="addon-cat">Channel add-ons — Growth plan only</h3>
    <p class="addon-note">Pro and Business already include WhatsApp, Instagram, Facebook and Telegram.</p>
    <div class="addon-grid">
      <?php foreach ($pricing['channel_addons'] as $a): ?>
      <div class="card addon-card reveal" data-addon-id="<?php echo htmlspecialchars($a['id']); ?>" data-addon-name="<?php echo htmlspecialchars($a['name']); ?>" data-addon-price="<?php echo (int)$a['price']; ?>">
        <h4><?php echo htmlspecialchars($a['name']); ?></h4>
        <p class="addon-price" data-inr="<?php echo (int)$a['price']; ?>">₹<?php echo number_format($a['price']); ?> / month</p>
        <p class="addon-note"><?php echo htmlspecialchars($a['note']); ?></p>
        <button type="button" class="btn btn-outline btn-sm js-addon-open">Request Add-on</button>
      </div>
      <?php endforeach; ?>
    </div>
    <h3 class="addon-cat" style="margin-top:2rem">Capacity add-ons — any plan</h3>
    <div class="addon-grid">
      <?php foreach ($pricing['capacity_addons'] as $a): ?>
      <div class="card addon-card reveal" data-addon-id="<?php echo htmlspecialchars($a['id']); ?>" data-addon-name="<?php echo htmlspecialchars($a['name']); ?>" data-addon-price="<?php echo (int)$a['price']; ?>">
        <h4><?php echo htmlspecialchars($a['name']); ?></h4>
        <p class="addon-price" data-inr="<?php echo (int)$a['price']; ?>">₹<?php echo number_format($a['price']); ?> / month</p>
        <button type="button" class="btn btn-outline btn-sm js-addon-open">Request Add-on</button>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Managed -->
<section class="section">
  <div class="container">
    <div class="section-header reveal"><h2>Managed services</h2></div>
    <div class="addon-grid">
      <div class="card reveal" style="padding:1.35rem">
        <h3><?php echo htmlspecialchars($pricing['managed']['data_marketplace']['name']); ?></h3>
        <p><?php echo htmlspecialchars($pricing['managed']['data_marketplace']['description']); ?></p>
        <p class="addon-price">Pricing on request</p>
        <a href="/solutions/data-marketplace/" class="btn btn-primary btn-sm">Request Data</a>
      </div>
      <div class="card reveal" style="padding:1.35rem" data-addon-id="managed_campaign" data-addon-name="Managed Campaign Agent" data-addon-price="<?php echo (int)$pricing['managed']['campaign_agent']['price']; ?>">
        <h3><?php echo htmlspecialchars($pricing['managed']['campaign_agent']['name']); ?></h3>
        <p><?php echo htmlspecialchars($pricing['managed']['campaign_agent']['description']); ?></p>
        <p class="addon-price" data-inr="<?php echo (int)$pricing['managed']['campaign_agent']['price']; ?>">₹<?php echo number_format($pricing['managed']['campaign_agent']['price']); ?> / month</p>
        <button type="button" class="btn btn-outline btn-sm js-addon-open">Request Managed Campaign</button>
      </div>
    </div>
  </div>
</section>

<!-- Custom -->
<section class="section section-dark">
  <div class="container">
    <div class="section-header reveal" style="text-align:center">
      <h2 style="color:#fff">Need more?</h2>
      <p class="lead" style="color:rgba(255,255,255,.75)">Higher contacts, campaigns, seats, custom automation, enterprise support and integrations.</p>
      <div style="margin-top:1.25rem">
        <a href="/#contact-section" class="btn btn-primary btn-lg">Talk to Sales</a>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section section-alt" id="pricing-faq">
  <div class="container">
    <div class="section-header reveal"><span class="badge badge-primary">FAQ</span><h2>Pricing questions</h2></div>
    <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0">
      <?php
      $dbFaqs = cms_faqs('pricing');
      if (empty($dbFaqs)) {
        $dbFaqs = cms_faqs();
      }
      if (!empty($dbFaqs)) {
        $faqs = [];
        foreach ($dbFaqs as $df) {
          $faqs[] = [$df['question'], $df['answer']];
        }
      } else {
        $faqs = [
          ['What is included in each plan?', 'Each plan includes contacts, campaigns, AI prompts, seats and channel access as listed in the comparison table. Meta conversation charges are separate.'],
          ['Can I switch plans?', 'Yes. Contact support or upgrade from your account — changes apply as per your billing cycle.'],
          ['Can I change monthly to yearly billing?', 'Yes. Yearly billing unlocks the annual rate and, on Growth, waives the setup fee.'],
          ['Is GST included?', 'Displayed prices are exclusive of GST. 18% GST applies at checkout on eligible amounts.'],
          ['What happens after the free trial?', 'You can choose Growth, Pro or Business to continue. We will guide you before the trial ends.'],
          ['Can I add Instagram or Facebook to Growth?', 'Yes — via channel add-ons. Pro and Business already include all four channels.'],
          ['What are capacity add-ons?', 'Optional monthly boosts for contacts, campaigns, AI prompts, seats or AI calling credits on any plan.'],
          ['Can I request a custom plan?', 'Yes. Use Talk to Sales for higher limits and enterprise needs.'],
          ['Do Pro and Business include all channels?', 'Yes — WhatsApp, Instagram, Facebook and Telegram.'],
          ['Are Meta/WhatsApp conversation charges included?', 'No. Meta usage / conversation charges are billed separately according to Meta’s pricing and your WABA setup.'],
        ];
      }
      foreach ($faqs as $f): ?>
      <div class="faq-item reveal">
        <button type="button" class="faq-question" aria-expanded="false"><?php echo htmlspecialchars($f[0]); ?><svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
        <div class="faq-answer"><div class="faq-answer-inner"><?php echo htmlspecialchars($f[1]); ?></div></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script type="application/ld+json">
<?php
$faqSchema = [
  '@context' => 'https://schema.org',
  '@type' => 'FAQPage',
  'mainEntity' => array_map(function ($f) {
    return ['@type'=>'Question','name'=>$f[0],'acceptedAnswer'=>['@type'=>'Answer','text'=>$f[1]]];
  }, $faqs),
];
echo json_encode($faqSchema, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
?>
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"Home","item":"https://inboxwa.com/"},
    {"@type":"ListItem","position":2,"name":"Pricing","item":"https://inboxwa.com/pricing/"}
  ]
}
</script>

<?php include __DIR__ . '/../includes/addon-form.php'; ?>
<script>
window.HB_PRICING = {
  rate: <?php echo json_encode($rate); ?>,
  gst: <?php echo json_encode((float)$pricing['gst_rate']); ?>,
  plans: <?php echo json_encode(array_map(function ($p) {
    return [
      'id' => $p['id'],
      'monthly' => (int)$p['monthly'],
      'yearly' => (int)$p['yearly'],
      'setup_m' => (int)$p['setup_fee_monthly'],
      'setup_y' => (int)$p['setup_fee_yearly'],
    ];
  }, array_values($pricing['plans']))); ?>,
  channelAddons: <?php echo json_encode($pricing['channel_addons']); ?>,
  capacityAddons: <?php echo json_encode($pricing['capacity_addons']); ?>,
  wa: <?php echo json_encode($pricing['whatsapp']); ?>
};
</script>
<script src="/assets/js/pricing.js?v=1" defer></script>
<script src="/assets/js/addon-form.js?v=1" defer></script>
<?php include __DIR__ . '/../includes/footer.php'; ?>
