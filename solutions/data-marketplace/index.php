<?php
$basePath = '../../';
$pageTitle = 'Data Marketplace | Business Leads & Industry Datasets | InboxWa';
$pageDescription = 'Discover business leads and industry-specific datasets for targeted marketing and sales. Explore 16 categories, filter by location and request data via WhatsApp.';
$canonicalUrl = 'https://inboxwa.com/solutions/data-marketplace/';
$HBContact = require __DIR__ . '/../../config/contact.php';
$waNumber = $HBContact['data_marketplace_whatsapp'] ?? '918884058241';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/data-marketplace.css?v=3">

<!-- HERO -->
<section class="dm-hero" aria-label="Data Marketplace Hero">
  <div class="dm-hero-bg" aria-hidden="true"></div>
  <div class="dm-orb dm-orb-1" aria-hidden="true"></div>
  <div class="dm-orb dm-orb-2" aria-hidden="true"></div>
  <div class="container">
    <div class="dm-hero-grid">
      <div class="dm-hero-copy">
        <span class="badge dm-badge">Data Marketplace</span>
        <h1>Find the Right Business Data for Your <span class="grad">Growth</span></h1>
        <p class="dm-lead">Discover business leads and industry-specific datasets designed to help businesses build targeted marketing and sales campaigns.</p>
        <div class="dm-ctas">
          <a href="#categories" class="btn btn-primary btn-lg">Explore Business Data</a>
          <button type="button" class="btn btn-outline btn-lg dm-open-form" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Request Data</button>
        </div>
      </div>
      <div class="dm-hero-visual" aria-hidden="true">
        <div class="dm-dash">
          <div class="dm-dash-title">Data Marketplace</div>
          <div class="dm-data-cards">
            <div class="dm-dcard" style="--d:0">Real Estate Leads</div>
            <div class="dm-dcard" style="--d:1">Education Leads</div>
            <div class="dm-dcard" style="--d:2">Healthcare Businesses</div>
            <div class="dm-dcard" style="--d:3">E-commerce Businesses</div>
          </div>
          <div class="dm-flow-tags">
            <span>Industry</span><span class="arr">→</span>
            <span>Location</span><span class="arr">→</span>
            <span>Business Type</span><span class="arr">→</span>
            <span>Lead Data</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 16 CATEGORIES -->
<section class="section" id="categories">
  <div class="container">
    <div class="section-header reveal">
      <h2>Browse by Business Category</h2>
      <p class="lead">16 major categories of business data to explore and request.</p>
    </div>
    <div class="dm-cats">
      <?php
      $categories = [
        ['Real Estate','Builders, developers, brokers, property consultants and real estate businesses.','<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>'],
        ['Education','Schools, colleges, coaching institutes, training centres and education businesses.','<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>'],
        ['Healthcare','Hospitals, clinics, diagnostic centres, wellness and healthcare businesses.','<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>'],
        ['E-commerce','Online stores, D2C brands, retailers and e-commerce businesses.','<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>️'],
        ['Finance & Insurance','Financial services, insurance agencies, consultants and related businesses.','<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>'],
        ['Automotive','Dealers, service centres, automobile businesses and automotive professionals.','<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 16H9m10 0a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V9l2.5-4h9.5L19 9v7z"/><circle cx="7.5" cy="14.5" r="1.5"/><circle cx="16.5" cy="14.5" r="1.5"/></svg>'],
        ['Travel & Hospitality','Hotels, resorts, travel agencies, tour operators and hospitality businesses.','<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>️'],
        ['Restaurants & Food','Restaurants, cafes, cloud kitchens, catering and food businesses.','<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2v20M6 2v6a3 3 0 0 0 3 3h0a3 3 0 0 0 3-3V2M9 11v11"/></svg>️'],
        ['Beauty & Wellness','Salons, spas, beauty clinics, wellness centres and professionals.','<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20"/></svg>'],
        ['IT & Software','IT companies, software businesses, technology providers and SaaS companies.','<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="2" y1="20" x2="22" y2="20"/></svg>'],
        ['Digital Marketing','Marketing agencies, advertising agencies, SEO businesses and consultants.','<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14"/></svg>'],
        ['Professional Services','Consultants, legal, accounting, HR, business and professional service providers.','<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>'],
        ['Manufacturing','Manufacturers, factories, suppliers and industrial businesses.','<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20h20M4 20V10l4 4V8l4 4V4l8 6v10"/></svg>'],
        ['Retail','Local retailers, stores, distributors and consumer businesses.','<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>'],
        ['B2B & Suppliers','Wholesalers, distributors, suppliers, vendors and B2B businesses.','<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"/><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>'],
        ['Events & Wedding','Event planners, wedding businesses, photographers, venues and related services.','<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>'],
      ];
      foreach ($categories as $i => $c): ?>
      <article class="dm-cat-card reveal" data-cat="<?php echo htmlspecialchars($c[0]); ?>">
        <div class="dm-cat-icon"><?php echo $c[2]; ?></div>
        <h3><?php echo htmlspecialchars($c[0]); ?></h3>
        <p><?php echo htmlspecialchars($c[1]); ?></p>
        <span class="dm-cat-badge">Available Data</span>
        <button type="button" class="btn btn-sm btn-primary dm-open-form" data-industry="<?php echo htmlspecialchars($c[0]); ?>">Explore Data</button>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- BROWSE / FILTERS -->
<section class="section section-alt" id="browse">
  <div class="container">
    <div class="section-header reveal">
      <h2>Explore Business Data</h2>
      <p class="lead">Filter by industry, location and requirements to find relevant datasets.</p>
    </div>
    <div class="dm-filters reveal">
      <div class="dm-search">
        <input type="search" id="dm-search" placeholder="Search business data…" aria-label="Search">
      </div>
      <div class="dm-filter-row">
        <select id="dm-f-industry" aria-label="Industry"><option value="">Industry</option>
          <?php foreach ($categories as $c): ?><option value="<?php echo htmlspecialchars($c[0]); ?>"><?php echo htmlspecialchars($c[0]); ?></option><?php endforeach; ?>
        </select>
        <select id="dm-f-state" aria-label="State"><option value="">State</option>
          <option>Maharashtra</option><option>Karnataka</option><option>Delhi NCR</option><option>Tamil Nadu</option><option>Gujarat</option><option>Other</option>
        </select>
        <select id="dm-f-city" aria-label="City"><option value="">City</option>
          <option>Mumbai</option><option>Bangalore</option><option>Delhi</option><option>Chennai</option><option>Pune</option><option>Other</option>
        </select>
        <select id="dm-f-type" aria-label="Business Type"><option value="">Business Type</option>
          <option>B2B</option><option>B2C</option><option>Service</option><option>Product</option>
        </select>
        <select id="dm-f-fresh" aria-label="Data Freshness"><option value="">Data Freshness</option>
          <option>Recent</option><option>Updated this quarter</option><option>Any</option>
        </select>
        <button type="button" class="btn btn-primary" id="dm-get-verified-leads">Get Verified Leads</button>
      </div>
    </div>

    <div class="dm-products reveal" id="dm-products">
      <?php
      $samples = [
        ['Real Estate Businesses – Metro Cities','Real Estate','Multi-city','Builders & Brokers','Business contacts'],
        ['Education Institutes – Coaching & Colleges','Education','Pan-India sample','Institutes','Institute profiles'],
        ['Healthcare Clinics & Centres','Healthcare','Selected cities','Clinics','Business listings'],
        ['E-commerce & D2C Brands','E-commerce','Major markets','Online stores','Brand directory'],
        ['B2B Suppliers & Distributors','B2B & Suppliers','Selected states','Wholesalers','Business directory'],
        ['Digital Marketing Agencies','Digital Marketing','Metro focus','Agencies','Agency listings'],
      ];
      foreach ($samples as $s): ?>
      <article class="dm-product-card">
        <h3><?php echo htmlspecialchars($s[0]); ?></h3>
        <div class="dm-meta">
          <span><?php echo htmlspecialchars($s[1]); ?></span>
          <span><?php echo htmlspecialchars($s[2]); ?></span>
          <span><?php echo htmlspecialchars($s[3]); ?></span>
        </div>
        <p class="dm-fields">Fields: Business Name, Category, Location, Website (where available)</p>
        <p class="dm-updated">Last updated: Available on request · Source info provided on enquiry</p>
        <div class="dm-product-ctas">
          <button type="button" class="btn btn-sm btn-outline dm-view-details" data-name="<?php echo htmlspecialchars($s[0]); ?>" data-industry="<?php echo htmlspecialchars($s[1]); ?>">View Details</button>
          <button type="button" class="btn btn-sm btn-primary dm-open-form" data-industry="<?php echo htmlspecialchars($s[1]); ?>" data-dataset="<?php echo htmlspecialchars($s[0]); ?>">Request Data</button>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- DETAILS MODAL -->
<div class="dm-modal" id="dm-modal" hidden>
  <div class="dm-modal-backdrop" data-close></div>
  <div class="dm-modal-box" role="dialog" aria-modal="true" aria-labelledby="dm-modal-title">
    <button type="button" class="dm-modal-close" data-close aria-label="Close">×</button>
    <h2 id="dm-modal-title">Dataset Overview</h2>
    <div class="dm-modal-body">
      <p id="dm-modal-desc">Structured business dataset for targeted outreach and research. Exact coverage and fields are confirmed on request.</p>
      <h4>Coverage</h4>
      <p id="dm-modal-coverage">Country / State / City as specified in the dataset.</p>
      <h4>Available Fields (examples)</h4>
      <ul>
        <li>Business Name</li>
        <li>Business Category</li>
        <li>Location</li>
        <li>Website (where lawfully available)</li>
        <li>Other permitted business attributes</li>
      </ul>
      <h4>Data Freshness</h4>
      <p>Update information is shared when you request the dataset.</p>
      <h4>Source / Permission</h4>
      <p>Source and permitted-use information are provided with each approved request. Only data that can be shared under applicable rules is offered.</p>
      <h4>Delivery</h4>
      <p>CSV / Excel / API / other supported formats as available.</p>
    </div>
    <button type="button" class="btn btn-primary btn-lg dm-open-form" id="dm-modal-request">Request This Data</button>
  </div>
</div>

<!-- FEATURES -->
<section class="section" id="features">
  <div class="container">
    <div class="section-header reveal"><h2>Data Built Around Your Target Market</h2></div>
    <div class="dm-features">
      <div class="card reveal dm-feat"><span><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></span><h3>Industry Focused</h3><p>Find data by business category.</p></div>
      <div class="card reveal dm-feat"><span><svg class="hb-svg-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span><h3>Location Based</h3><p>Filter by state, city or region.</p></div>
      <div class="card reveal dm-feat"><span><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg></span><h3>Business Ready</h3><p>Structured information for business use cases.</p></div>
      <div class="card reveal dm-feat"><span><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg></span><h3>Fresh Data</h3><p>Clearly display available freshness information.</p></div>
      <div class="card reveal dm-feat"><span><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg></span><h3>Transparent</h3><p>Show relevant source and permitted-use information.</p></div>
      <div class="card reveal dm-feat"><span><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"/><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></span><h3>Flexible Access</h3><p>Request supported formats or integrations.</p></div>
    </div>
  </div>
</section>

<!-- MARKETING VISUAL 1 -->
<section class="section section-gradient-1">
  <div class="container dm-marketing reveal">
    <div class="dm-mkt-copy">
      <h2>Target the Right Businesses</h2>
      <p class="lead">Industry → Location → Audience → Business Leads</p>
      <p>Use category and location filters to focus on the segments that matter for your campaigns.</p>
    </div>
    <div class="dm-mkt-visual" aria-hidden="true">
      <div class="dm-mkt-card">Industry</div>
      <div class="dm-mkt-arrow">→</div>
      <div class="dm-mkt-card">Location</div>
      <div class="dm-mkt-arrow">→</div>
      <div class="dm-mkt-card">Audience</div>
      <div class="dm-mkt-arrow">→</div>
      <div class="dm-mkt-card dm-mkt-highlight">Business Leads</div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="section" id="how">
  <div class="container">
    <div class="section-header reveal"><h2>How It Works</h2></div>
    <div class="dm-process reveal">
      <div class="dm-step"><div class="dm-step-num">01</div><h3>Explore</h3><p>Browse categories and datasets.</p></div>
      <div class="dm-step-line"></div>
      <div class="dm-step"><div class="dm-step-num">02</div><h3>Filter</h3><p>Select industry, location and requirements.</p></div>
      <div class="dm-step-line"></div>
      <div class="dm-step"><div class="dm-step-num">03</div><h3>Request</h3><p>Submit your data requirement.</p></div>
      <div class="dm-step-line"></div>
      <div class="dm-step"><div class="dm-step-num">04</div><h3>Get Data</h3><p>Receive the approved dataset through the available delivery method.</p></div>
    </div>
  </div>
</section>

<!-- USE CASES -->
<section class="section section-alt" id="usecases">
  <div class="container">
    <div class="section-header reveal"><h2>Use Cases</h2></div>
    <div class="dm-usecases">
      <div class="card reveal"><h3>Lead Generation</h3><p>Build targeted lists for outreach campaigns.</p></div>
      <div class="card reveal"><h3>B2B Sales</h3><p>Identify businesses that match your ideal customer profile.</p></div>
      <div class="card reveal"><h3>Market Research</h3><p>Understand coverage by industry and location.</p></div>
      <div class="card reveal"><h3>Audience Building</h3><p>Segment audiences for marketing programs.</p></div>
      <div class="card reveal"><h3>Business Outreach</h3><p>Contact relevant businesses where permitted.</p></div>
      <div class="card reveal"><h3>Industry Research</h3><p>Explore category-level business landscapes.</p></div>
      <div class="card reveal"><h3>Location-Based Marketing</h3><p>Focus campaigns on specific cities or regions.</p></div>
      <div class="card reveal"><h3>Customer Acquisition</h3><p>Support acquisition strategies with structured data.</p></div>
    </div>
  </div>
</section>

<!-- MARKETING VISUAL 2 -->
<section class="section">
  <div class="container dm-marketing dm-marketing-rev reveal">
    <div class="dm-mkt-visual" aria-hidden="true">
      <div class="dm-dash-mini">
        <div class="dm-dash-mini-row"><span>Category</span><strong>—</strong></div>
        <div class="dm-dash-mini-row"><span>Location</span><strong>—</strong></div>
        <div class="dm-dash-mini-row"><span>Records</span><strong>On request</strong></div>
        <div class="dm-dash-mini-row"><span>Format</span><strong>CSV / Excel / API</strong></div>
      </div>
    </div>
    <div class="dm-mkt-copy">
      <h2>Turn Business Data Into Marketing Opportunities</h2>
      <p class="lead">Structured datasets help you plan outreach, research and campaigns with clearer targeting.</p>
    </div>
  </div>
</section>

<!-- TRUST -->
<section class="section section-alt" id="trust">
  <div class="container">
    <div class="section-header reveal"><h2>Clear Information &amp; Responsible Use</h2></div>
    <div class="dm-trust">
      <div class="card reveal"><h3>Clear Data Information</h3><p>Dataset scope and fields are described before you request.</p></div>
      <div class="card reveal"><h3>Source Transparency</h3><p>Source and permitted-use details are shared with approved requests.</p></div>
      <div class="card reveal"><h3>Freshness Information</h3><p>Available update information is provided on enquiry.</p></div>
      <div class="card reveal"><h3>Permitted Use</h3><p>Only data that can be shared under applicable rules is offered.</p></div>
      <div class="card reveal"><h3>Structured Data</h3><p>Organized fields for practical business use.</p></div>
      <div class="card reveal"><h3>Business-Focused Categories</h3><p>16 clear industry categories to browse.</p></div>
    </div>
    <p class="dm-legal reveal">For any personal or contact information, data is offered only where collection, sharing and marketing use are legally permitted and appropriately consented where required.</p>
  </div>
</section>

<!-- CUSTOM REQUEST -->
<section class="section" id="custom-request">
  <div class="container" style="text-align:center;max-width:640px">
    <div class="section-header reveal">
      <h2>Can't Find the Data You Need?</h2>
      <p class="lead">Tell us what audience or business segment you're looking for and our team will help you with a suitable data request.</p>
      <button type="button" class="btn btn-primary btn-lg dm-open-form" style="margin-top:1rem">Request Custom Data</button>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section section-alt" id="faq">
  <div class="container">
    <div class="section-header reveal"><h2>FAQ</h2></div>
    <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0">
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">What type of business data is available?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Industry and location-oriented business datasets across 16 categories, subject to availability and permitted use.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I filter data by industry and location?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — use the filters for industry, state, city and other criteria on the Explore section.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I request custom data?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — use Request Custom Data and describe your audience or segment requirements.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I preview dataset information?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">View Details shows overview, example fields, coverage and delivery options. Full access is provided after request approval.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">What formats are available?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">CSV, Excel, API or other supported formats depending on the dataset.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can data be accessed through API?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Where supported, API delivery can be requested. Confirm availability when you submit your request.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">How fresh is the data?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Freshness information is shared for the specific dataset when you enquire.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">How is the source information provided?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Source and permitted-use details are included with approved data deliveries.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I use the data for marketing?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Use must comply with applicable laws and the permitted-use terms shared with the dataset. Personal/contact data is only offered where legally permitted.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">How do I request a dataset?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Click Request Data or Request Custom Data, fill the dedicated form, and submit. You will be connected via WhatsApp with your details pre-filled.</div></div></div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="section section-dark">
  <div class="container" style="text-align:center">
    <div class="section-header reveal">
      <h2 style="color:#fff">Find the Data You Need to Grow</h2>
      <p class="lead" style="color:rgba(255,255,255,.75)">Explore business categories, discover relevant datasets and request the data that fits your marketing and sales requirements.</p>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="#categories" class="btn btn-primary btn-lg">Explore Data</a>
        <button type="button" class="btn btn-outline btn-lg dm-open-form" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Request Data</button>
      </div>
    </div>
  </div>
</section>

<!-- DEDICATED DATA MARKETPLACE FORM (MODAL) -->
<div class="dm-form-modal" id="dm-form-modal" hidden>
  <div class="dm-form-backdrop" data-close-form></div>
  <div class="dm-form-box" role="dialog" aria-modal="true" aria-labelledby="dm-form-title">
    <button type="button" class="dm-modal-close" data-close-form aria-label="Close">×</button>
    <h2 id="dm-form-title">Request Data</h2>
    <p class="dm-form-sub">Dedicated Data Marketplace enquiry — independent of other site forms.</p>
    <form id="dm-request-form" novalidate>
      <div class="form-group">
        <label class="form-label" for="dm-name">Full Name *</label>
        <input class="form-input" type="text" id="dm-name" name="full_name" required autocomplete="name">
      </div>
      <div class="form-group">
        <label class="form-label" for="dm-company">Business / Company Name *</label>
        <input class="form-input" type="text" id="dm-company" name="company" required>
      </div>
      <div class="form-group">
        <label class="form-label" for="dm-wa">WhatsApp Number *</label>
        <input class="form-input" type="tel" id="dm-wa" name="whatsapp" required autocomplete="tel">
      </div>
      <div class="form-group">
        <label class="form-label" for="dm-email">Email *</label>
        <input class="form-input" type="email" id="dm-email" name="email" required autocomplete="email">
      </div>
      <div class="form-group">
        <label class="form-label" for="dm-industry">Industry *</label>
        <select class="form-input" id="dm-industry" name="industry" required>
          <option value="">Select industry…</option>
          <?php foreach ($categories as $c): ?><option value="<?php echo htmlspecialchars($c[0]); ?>"><?php echo htmlspecialchars($c[0]); ?></option><?php endforeach; ?>
        </select>
      </div>
      <div class="form-group">
        <label class="form-label" for="dm-location">Location (State / City)</label>
        <input class="form-input" type="text" id="dm-location" name="location" placeholder="e.g. Maharashtra / Mumbai">
      </div>
      <div class="form-group">
        <label class="form-label" for="dm-req">Data Requirement *</label>
        <textarea class="form-input" id="dm-req" name="requirement" rows="3" required placeholder="Tell us what type of business data you are looking for."></textarea>
      </div>
      <div class="form-group">
        <label class="form-label" for="dm-size">Expected Data Size</label>
        <select class="form-input" id="dm-size" name="size">
          <option value="">Not Sure</option>
          <option>Small</option>
          <option>Medium</option>
          <option>Large</option>
        </select>
      </div>
      <div class="form-group">
        <label class="form-label" for="dm-format">Preferred Format</label>
        <select class="form-input" id="dm-format" name="format">
          <option value="">Not Sure</option>
          <option>Excel</option>
          <option>CSV</option>
          <option>API</option>
        </select>
      </div>
      <div class="form-group">
        <label class="form-label" for="dm-purpose">Purpose / Use Case</label>
        <textarea class="form-input" id="dm-purpose" name="purpose" rows="2"></textarea>
      </div>
      <button type="submit" class="btn btn-primary btn-lg" style="width:100%" id="dm-submit">Request Data on WhatsApp</button>
    </form>
    <div class="dm-form-success" id="dm-form-success" hidden>
      <div class="dm-success-icon"><svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
      <strong>Request Received</strong>
      <p>Opening WhatsApp with your details. Our team will respond shortly.</p>
    </div>
  </div>
</div>

<script>
window.DM_WA = '<?php echo htmlspecialchars($waNumber); ?>';
</script>
<script src="/assets/js/data-marketplace.js?v=3" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
