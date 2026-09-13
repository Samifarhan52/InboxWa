<?php
$basePath = '../';
$pageTitle = 'InboxWa Pricing – Simple & Transparent WhatsApp API & Omnichannel Plans';
$pageDescription = 'Simple, transparent pricing for official WhatsApp Business API, CRM, AI chatbot & omnichannel automation. WhatsApp Bulk ₹1,999, Automation ₹2,999, Biz Pro ₹4,999. Live currency converter.';
$pageKeywords = 'InboxWa pricing, WhatsApp API price, AI chatbot plans, omnichannel pricing India, WhatsApp CRM';
$canonicalUrl = 'https://inboxwa.com/pricing/';

include __DIR__ . '/../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/pricing.css?v=3">

<!-- Breadcrumbs -->
<nav class="container breadcrumb-nav" aria-label="Breadcrumb" style="padding-top:calc(var(--nav,72px) + 1.25rem); padding-bottom:0.5rem;">
  <ol style="display:flex;flex-wrap:wrap;gap:.35rem;list-style:none;padding:0;margin:0;font-size:.85rem;color:#64748b;">
    <li><a href="/">Home</a></li>
    <li aria-hidden="true">/</li>
    <li style="color:#0f172a;font-weight:600;">Pricing</li>
  </ol>
</nav>

<!-- HERO SECTION WITH LIVE CURRENCY CONVERTER -->
<section class="hero-section small-hero pricing-hero">
  <div class="container pricing-hero-inner">
    <div style="flex:1;">
      <div class="badge">
        <span class="badge-dot"></span>
        InboxWa Pricing - Simple & Transparent
      </div>
      <h1>Powerful WhatsApp Automation <span class="gradient-text">That Scales With You</span></h1>
      <p class="hero-subtitle">
        Start with what you need, grow as you scale. All plans include core features with no hidden charges.
        Switch between monthly or yearly billing anytime.
      </p>
      <div class="hero-highlight-strip">
        <span>✅ Platform subscription + ✅ Official Meta message rates – all on one page</span>
      </div>
    </div>

    <!-- Currency Converter Dropdown -->
    <div class="currency-converter-card">
      <p class="title">View Prices In</p>
      <select id="currencySelector" aria-label="Select Currency">
        <option value="INR" selected>INR (₹)</option>
        <option value="USD">USD ($)</option>
        <option value="EUR">EUR (€)</option>
        <option value="GBP">GBP (£)</option>
        <option value="AED">AED (د.إ)</option>
        <option value="SAR">SAR (﷼)</option>
        <option value="KWD">KWD (د.ك)</option>
        <option value="BHD">BHD (.د.ب)</option>
        <option value="QAR">QAR (ر.ق)</option>
        <option value="OMR">OMR (ر.ع.)</option>
        <option value="SGD">SGD (S$)</option>
        <option value="AUD">AUD (A$)</option>
        <option value="CAD">CAD (C$)</option>
        <option value="JPY">JPY (¥)</option>
        <option value="MYR">MYR (RM)</option>
        <option value="PKR">PKR (Rs)</option>
        <option value="BDT">BDT (৳)</option>
      </select>
      <p class="currency-sub-note" id="currencySyncText">
        🟢 Live Forex Rates Active<br>
        All plans support monthly & yearly billing
      </p>
    </div>
  </div>
</section>

<!-- MAIN PRICING SECTION -->
<section class="section" id="pricing" style="padding-top:10px;">
  <div class="container">

    <!-- PLAN CATEGORY TOGGLE (WhatsApp API vs Omnichannel) -->
    <div class="plan-category-wrapper">
      <div class="plan-category-toggle">
        <button type="button" class="plan-cat-btn active" data-plan-cat="regular">
          <span>📋</span> WhatsApp API Plans
        </button>
        <button type="button" class="plan-cat-btn" data-plan-cat="omnichannel">
          <span>🌐</span> Omnichannel Plans
        </button>
      </div>
    </div>

    <!-- BILLING TOGGLE -->
    <div class="pricing-billing-pill">
      <span class="pill-label">Choose Your Billing</span>
      <div class="billing-toggle">
        <button type="button" class="toggle-btn active" data-billing="monthly">
          <span>📅</span> Monthly
        </button>
        <button type="button" class="toggle-btn" data-billing="yearly">
          <span>💰</span> Yearly
          <span class="save-pill">Save 30%</span>
        </button>
      </div>
      <span class="billing-subtext">
        All prices in <span class="currency-text">INR</span> • Platform fee only • WhatsApp conversation charges extra
      </span>
    </div>

    <!-- WHATSAPP API PLANS GRID -->
    <div id="regularPlansContainer" class="pricing-grid">
      <!-- 1. Bulk -->
      <div class="pricing-card">
        <div>
          <div class="plan-badge-wrap"><span class="plan-badge">Bulk Messaging</span></div>
          <div class="plan-header">
            <div class="plan-icon" style="color:#4f46e5;">📨</div>
            <div>
              <h2>WhatsApp Bulk</h2>
              <p class="plan-short">High-volume broadcasting made easy</p>
            </div>
          </div>
          <div class="price-wrap">
            <span class="price monthly active" data-inr-val="1999" data-suffix="/month">₹1,999<span>/month</span></span>
            <span class="price yearly" data-inr-val="19999" data-suffix="/year">₹19,999<span>/year</span></span>
          </div>
          <p class="price-subtext">Billed <span class="billing-mode-text">monthly</span> • Save <span class="savings" data-inr-val="3989">₹3,989</span> yearly</p>
          <ul class="plan-features">
            <li><span class="check-icon">✓</span>Connect 2 WhatsApp numbers</li>
            <li><span class="check-icon">✓</span>Unlimited broadcast campaigns</li>
            <li><span class="check-icon">✓</span>Contact list management</li>
            <li><span class="check-icon">✓</span>Basic analytics & reports</li>
            <li><span class="check-icon">✓</span>Email & chat support</li>
          </ul>
          <div class="plan-divider"></div>
          <p class="sub-heading">Ideal for</p>
          <ul class="plan-limitations">
            <li>✔ Promotional broadcasts</li>
            <li>✔ Newsletters & alerts</li>
            <li>✔ Small businesses</li>
          </ul>
        </div>
        <button type="button" class="btn-primary full activate-plan-btn" data-plan-name="WhatsApp Bulk Plan">🚀 Start Now</button>
      </div>

      <!-- 2. Automation (Highlight) -->
      <div class="pricing-card highlight">
        <div>
          <div class="plan-badge-wrap"><span class="plan-badge popular">Most Popular</span></div>
          <div class="plan-header">
            <div class="plan-icon" style="color:#16a34a;background:#ecfdf3;border-color:#bbf7d0;">🤖</div>
            <div>
              <h2>WhatsApp Automation</h2>
              <p class="plan-short">Advanced automation with 100k contacts</p>
            </div>
          </div>
          <div class="price-wrap">
            <span class="price monthly active" data-inr-val="2999" data-suffix="/month">₹2,999<span>/month</span></span>
            <span class="price yearly" data-inr-val="29999" data-suffix="/year">₹29,999<span>/year</span></span>
          </div>
          <p class="price-subtext">Billed <span class="billing-mode-text">monthly</span> • Save <span class="savings" data-inr-val="5989">₹5,989</span> yearly</p>
          <ul class="plan-features">
            <li><span class="check-icon">✓</span>Up to 5 WhatsApp numbers</li>
            <li><span class="check-icon">✓</span><strong>100,000 contacts</strong> storage</li>
            <li><span class="check-icon">✓</span>Drag-&-drop automation builder</li>
            <li><span class="check-icon">✓</span>Advanced segments & tags</li>
            <li><span class="check-icon">✓</span>Webhook & API access</li>
            <li><span class="check-icon">✓</span>Priority WhatsApp support</li>
          </ul>
          <div class="plan-divider"></div>
          <p class="sub-heading">Ideal for</p>
          <ul class="plan-limitations">
            <li>✔ Growing businesses</li>
            <li>✔ E-commerce & D2C brands</li>
            <li>✔ Marketing agencies</li>
          </ul>
        </div>
        <button type="button" class="btn-primary full activate-plan-btn" data-plan-name="WhatsApp Automation Plan">⭐ Get Started</button>
      </div>

      <!-- 3. Biz Pro -->
      <div class="pricing-card">
        <div>
          <div class="plan-badge-wrap"><span class="plan-badge">AI-Powered</span></div>
          <div class="plan-header">
            <div class="plan-icon" style="color:#ea580c;">🏅</div>
            <div>
              <h2>WhatsApp Biz Pro</h2>
              <p class="plan-short">AI agent + 5 team members + 100k contacts</p>
            </div>
          </div>
          <div class="price-wrap">
            <span class="price monthly active" data-inr-val="4999" data-suffix="/month">₹4,999<span>/month</span></span>
            <span class="price yearly" data-inr-val="49999" data-suffix="/year">₹49,999<span>/year</span></span>
          </div>
          <p class="price-subtext">Billed <span class="billing-mode-text">monthly</span> • Save <span class="savings" data-inr-val="9989">₹9,989</span> yearly</p>
          <ul class="plan-features">
            <li><span class="check-icon">✓</span>Up to 10 WhatsApp numbers</li>
            <li><span class="check-icon">✓</span><strong>100,000 contacts</strong> storage</li>
            <li><span class="check-icon">✓</span><strong>AI Agent</strong> (ChatGPT integration)</li>
            <li><span class="check-icon">✓</span><strong>5 Team Members</strong> included</li>
            <li><span class="check-icon">✓</span>Advanced automation & flows</li>
            <li><span class="check-icon">✓</span>Dedicated account manager</li>
            <li><span class="check-icon">✓</span>Priority support & SLA</li>
          </ul>
          <div class="plan-divider"></div>
          <p class="sub-heading">Ideal for</p>
          <ul class="plan-limitations">
            <li>✔ Large enterprises</li>
            <li>✔ High-volume support teams</li>
            <li>✔ AI-first businesses</li>
          </ul>
        </div>
        <button type="button" class="btn-primary full activate-plan-btn" data-plan-name="WhatsApp Biz Pro Plan">🚀 Contact Sales</button>
      </div>
    </div>

    <!-- COMPARISON TOGGLE - WHATSAPP API -->
    <div id="regularComparisonToggle" class="comparison-toggle-wrap">
      <button type="button" id="toggleRegularComparison" class="btn-outline">
        📊 Compare WhatsApp API Plans
      </button>
    </div>
    <div id="regularComparisonTable" class="comparison-table-wrap" style="display:none;">
      <h3 style="font-size:22px;margin:20px 20px 10px;color:#0f172a;">WhatsApp API Plan Comparison</h3>
      <table class="comparison-table">
        <thead>
          <tr>
            <th>Features</th>
            <th>Bulk<br><span class="price-col" data-inr-val="1999" data-suffix="/mo">₹1,999/mo</span></th>
            <th class="col-highlight">Automation<br><span class="price-col" data-inr-val="2999" data-suffix="/mo">₹2,999/mo</span></th>
            <th>Biz Pro<br><span class="price-col" data-inr-val="4999" data-suffix="/mo">₹4,999/mo</span></th>
          </tr>
        </thead>
        <tbody>
          <tr><td>WhatsApp Numbers</td><td>2</td><td class="col-highlight">5</td><td>10</td></tr>
          <tr><td>Contacts</td><td>Unlimited</td><td class="col-highlight">100,000</td><td>100,000</td></tr>
          <tr><td>Automation Builder</td><td><span style="color:#ef4444;">✘</span></td><td class="col-highlight"><span style="color:#16a34a;">✔</span></td><td><span style="color:#16a34a;">✔</span></td></tr>
          <tr><td>AI Agent</td><td><span style="color:#ef4444;">✘</span></td><td class="col-highlight"><span style="color:#ef4444;">✘</span></td><td><span style="color:#16a34a;">✔</span></td></tr>
          <tr><td>Team Members</td><td>1</td><td class="col-highlight">1</td><td>5</td></tr>
          <tr><td>API & Webhooks</td><td><span style="color:#ef4444;">✘</span></td><td class="col-highlight"><span style="color:#16a34a;">✔</span></td><td><span style="color:#16a34a;">✔</span></td></tr>
          <tr><td>Support Level</td><td>Email & Chat</td><td class="col-highlight">Priority WhatsApp</td><td>Dedicated Manager</td></tr>
        </tbody>
      </table>
    </div>

    <!-- OMNICHANNEL PLANS GRID -->
    <div id="omnichannelPlansContainer" class="pricing-grid" style="display:none;">
      <!-- Starter -->
      <div class="pricing-card">
        <div>
          <div class="plan-badge-wrap"><span class="plan-badge">Multi-Channel</span></div>
          <div class="plan-header">
            <div class="plan-icon" style="color:#0284c7;">📱</div>
            <div>
              <h2>Omnichannel Starter</h2>
              <p class="plan-short">Connect WhatsApp, FB, Instagram, RCS</p>
            </div>
          </div>
          <div class="price-wrap">
            <span class="price monthly active" data-inr-val="2499" data-suffix="/month">₹2,499<span>/month</span></span>
            <span class="price yearly" data-inr-val="24999" data-suffix="/year">₹24,999<span>/year</span></span>
          </div>
          <p class="price-subtext">Billed <span class="billing-mode-text">monthly</span> • Save <span class="savings" data-inr-val="5000">~₹5,000</span> yearly</p>
          <ul class="plan-features">
            <li><span class="check-icon">✓</span>2 WhatsApp numbers</li>
            <li><span class="check-icon">✓</span>1 Facebook & 1 Instagram</li>
            <li><span class="check-icon">✓</span>RCS messaging (beta)</li>
            <li><span class="check-icon">✓</span>Unified inbox (3 channels)</li>
            <li><span class="check-icon">✓</span>Basic automation</li>
            <li><span class="check-icon">✓</span>Email support</li>
          </ul>
          <div class="plan-divider"></div>
          <p class="sub-heading">Ideal for</p>
          <ul class="plan-limitations">
            <li>✔ Small omnichannel teams</li>
            <li>✔ Startups testing multi-channel</li>
          </ul>
        </div>
        <button type="button" class="btn-primary full activate-plan-btn" data-plan-name="Omnichannel Starter">🚀 Start Now</button>
      </div>

      <!-- Pro (Highlight) -->
      <div class="pricing-card highlight">
        <div>
          <div class="plan-badge-wrap"><span class="plan-badge popular">Recommended</span></div>
          <div class="plan-header">
            <div class="plan-icon" style="color:#eab308;background:#fefce8;border-color:#fef08a;">🌟</div>
            <div>
              <h2>Omnichannel Pro</h2>
              <p class="plan-short">Full-scale omnichannel with automation</p>
            </div>
          </div>
          <div class="price-wrap">
            <span class="price monthly active" data-inr-val="4999" data-suffix="/month">₹4,999<span>/month</span></span>
            <span class="price yearly" data-inr-val="49999" data-suffix="/year">₹49,999<span>/year</span></span>
          </div>
          <p class="price-subtext">Billed <span class="billing-mode-text">monthly</span> • Save <span class="savings" data-inr-val="9989">₹9,989</span> yearly</p>
          <ul class="plan-features">
            <li><span class="check-icon">✓</span>5 WhatsApp numbers</li>
            <li><span class="check-icon">✓</span>5 FB Pages / IG accounts</li>
            <li><span class="check-icon">✓</span>Full RCS & Telegram support</li>
            <li><span class="check-icon">✓</span>Unified inbox (10 channels)</li>
            <li><span class="check-icon">✓</span>Advanced automation flows</li>
            <li><span class="check-icon">✓</span>AI Agent (ChatGPT) included</li>
            <li><span class="check-icon">✓</span>Priority support & SLA</li>
          </ul>
          <div class="plan-divider"></div>
          <p class="sub-heading">Ideal for</p>
          <ul class="plan-limitations">
            <li>✔ Growing brands</li>
            <li>✔ Multi-brand agencies</li>
            <li>✔ Customer support teams</li>
          </ul>
        </div>
        <button type="button" class="btn-primary full activate-plan-btn" data-plan-name="Omnichannel Pro">⭐ Get Started</button>
      </div>

      <!-- Enterprise -->
      <div class="pricing-card">
        <div>
          <div class="plan-badge-wrap"><span class="plan-badge">Enterprise</span></div>
          <div class="plan-header">
            <div class="plan-icon" style="color:#475569;">🏢</div>
            <div>
              <h2>Omnichannel Enterprise</h2>
              <p class="plan-short">Unlimited scale, dedicated success</p>
            </div>
          </div>
          <div class="price-wrap">
            <span class="price monthly active" data-inr-val="9999" data-suffix="/month">₹9,999<span>/month</span></span>
            <span class="price yearly" data-inr-val="99999" data-suffix="/year">₹99,999<span>/year</span></span>
          </div>
          <p class="price-subtext">Billed <span class="billing-mode-text">monthly</span> • Save <span class="savings" data-inr-val="20000">₹20,000</span> yearly</p>
          <ul class="plan-features">
            <li><span class="check-icon">✓</span>Unlimited WhatsApp numbers</li>
            <li><span class="check-icon">✓</span>Unlimited social channels</li>
            <li><span class="check-icon">✓</span>Full omnichannel suite (FB, IG, RCS, Telegram)</li>
            <li><span class="check-icon">✓</span>Unified inbox (unlimited channels)</li>
            <li><span class="check-icon">✓</span>Custom automation & AI workflows</li>
            <li><span class="check-icon">✓</span>Dedicated account manager</li>
            <li><span class="check-icon">✓</span>24/7 premium support</li>
            <li><span class="check-icon">✓</span>Custom SLAs & data privacy</li>
          </ul>
          <div class="plan-divider"></div>
          <p class="sub-heading">Ideal for</p>
          <ul class="plan-limitations">
            <li>✔ Large enterprises</li>
            <li>✔ Global brands</li>
            <li>✔ High-volume omnichannel teams</li>
          </ul>
        </div>
        <button type="button" class="btn-primary full activate-plan-btn" data-plan-name="Omnichannel Enterprise">🤝 Talk to Sales</button>
      </div>
    </div>

    <!-- COMPARISON TOGGLE - OMNICHANNEL -->
    <div id="omnichannelComparisonToggle" class="comparison-toggle-wrap" style="display:none;">
      <button type="button" id="toggleOmnichannelComparison" class="btn-outline">
        📊 Compare Omnichannel Plans
      </button>
    </div>
    <div id="omnichannelComparisonTable" class="comparison-table-wrap" style="display:none;">
      <h3 style="font-size:22px;margin:20px 20px 10px;color:#0f172a;">Omnichannel Plan Comparison</h3>
      <table class="comparison-table">
        <thead>
          <tr>
            <th>Features</th>
            <th>Starter<br><span class="price-col" data-inr-val="2499" data-suffix="/mo">₹2,499/mo</span></th>
            <th class="col-highlight">Pro<br><span class="price-col" data-inr-val="4999" data-suffix="/mo">₹4,999/mo</span></th>
            <th>Enterprise<br><span class="price-col" data-inr-val="9999" data-suffix="/mo">₹9,999/mo</span></th>
          </tr>
        </thead>
        <tbody>
          <tr><td>WhatsApp Numbers</td><td>2</td><td class="col-highlight">5</td><td>Unlimited</td></tr>
          <tr><td>Social Channels</td><td>1 FB + 1 IG</td><td class="col-highlight">5 FB + 5 IG</td><td>Unlimited</td></tr>
          <tr><td>RCS / Telegram</td><td>RCS (beta)</td><td class="col-highlight">Full RCS + Telegram</td><td>Full + Custom</td></tr>
          <tr><td>Unified Inbox</td><td>3 channels</td><td class="col-highlight">10 channels</td><td>Unlimited</td></tr>
          <tr><td>Automation</td><td>Basic</td><td class="col-highlight">Advanced</td><td>Custom AI</td></tr>
          <tr><td>AI Agent</td><td><span style="color:#ef4444;">✘</span></td><td class="col-highlight"><span style="color:#16a34a;">✔</span></td><td><span style="color:#16a34a;">✔</span></td></tr>
          <tr><td>Support Level</td><td>Email & Chat</td><td class="col-highlight">Priority WhatsApp</td><td>24/7 Premium Dedicated</td></tr>
        </tbody>
      </table>
    </div>

    <!-- META WHATSAPP CONVERSATION PRICING -->
    <div class="meta-rates-section">
      <h3 style="text-align:center;font-size:22px;font-weight:800;color:#0f172a;margin:0 0 6px;">Meta WhatsApp Conversation Pricing (India)</h3>
      <p style="text-align:center;font-size:14px;color:#64748b;margin:0 0 24px;">Official Meta Rates • No Extra Markup • Final price includes GST</p>
      
      <div class="meta-rates-grid">
        <div class="meta-card cat-marketing">
          <div class="meta-icon">🎯</div>
          <h3>Marketing Message</h3>
          <p class="meta-price meta-price-val" data-inr-val="0.86">₹0.86</p>
          <small class="meta-gst">(+ 18% GST ≈ ₹1.01)</small>
        </div>
        <div class="meta-card cat-utility">
          <div class="meta-icon">⚙️</div>
          <h3>Utility Message</h3>
          <p class="meta-price meta-price-val" data-inr-val="0.115">₹0.115</p>
          <small class="meta-gst">(+ GST ≈ ₹0.14)</small>
        </div>
        <div class="meta-card cat-auth">
          <div class="meta-icon">🔐</div>
          <h3>Authentication (OTP)</h3>
          <p class="meta-price meta-price-val" data-inr-val="0.115">₹0.115</p>
          <small class="meta-gst">(+ GST ≈ ₹0.14)</small>
        </div>
        <div class="meta-card cat-service">
          <div class="meta-icon">💬</div>
          <h3>Service Reply</h3>
          <p class="meta-price" style="color:#16a34a;">FREE</p>
          <small class="meta-gst">Within 24h window</small>
        </div>
      </div>
      
      <div style="text-align:center;margin-top:24px;">
        <a href="https://business.whatsapp.com/products/platform-pricing?country=India&currency=Indian%20Rupee%20(INR)&category=Marketing" target="_blank" rel="noopener" class="btn btn-primary" style="display:inline-flex;align-items:center;gap:8px;padding:12px 28px;border-radius:12px;background:#0f766e;">
          📊 View Full Meta Pricing & Calculator
        </a>
      </div>
    </div>

    <!-- CORE FEATURE HIGHLIGHTS -->
    <div class="pricing-feature-grid">
      <div class="pricing-feature-card">
        <div class="pf-icon">📨</div>
        <div>
          <h4>Send Messages via API</h4>
          <p>Trigger automated messages from your CRM, website or apps</p>
        </div>
      </div>
      <div class="pricing-feature-card">
        <div class="pf-icon">📂</div>
        <div>
          <h4>Smart Segmentation</h4>
          <p>Create dynamic segments based on behavior & attributes</p>
        </div>
      </div>
      <div class="pricing-feature-card">
        <div class="pf-icon">🤖</div>
        <div>
          <h4>AI-Powered Bots</h4>
          <p>Automate FAQs, orders, reminders & customer support</p>
        </div>
      </div>
      <div class="pricing-feature-card">
        <div class="pf-icon">💳</div>
        <div>
          <h4>WhatsApp Payments</h4>
          <p>Collect payments directly in chat with seamless checkout</p>
        </div>
      </div>
    </div>

    <!-- IMPORTANT INFO BOX -->
    <div class="pricing-info-box">
      <h3>💡 Important Information</h3>
      <ul>
        <li><span>✅</span> WhatsApp conversation charges are separate and prepaid via wallet (minimum ₹1000 per channel)</li>
        <li><span>✅</span> All plans include free onboarding support and basic template setup</li>
        <li><span>✅</span> Upgrade or downgrade your plan anytime with pro-rata billing</li>
        <li><span>✅</span> 3-day free trial available for all plans (no credit card required)</li>
      </ul>
    </div>

  </div>
</section>

<!-- ADD-ONS SECTION – ALL 15 ADD-ONS -->
<section class="section addon-section" id="addons">
  <div class="container">
    <div style="text-align:center;">
      <h2 style="font-size:26px;font-weight:800;color:#0f172a;margin:0 0 8px;">Add-on modules (per account)</h2>
      <p style="font-size:15px;color:#64748b;margin:0 auto;max-width:600px;">Activate only what you need. Add-on pricing is on top of your base plan.</p>
    </div>

    <div class="addon-grid">
      <!-- 1. Add Channels -->
      <div class="addon-card">
        <div>
          <div class="addon-head"><div class="addon-icon" style="background:#ecfdf3;color:#15803d;">📣</div><h4>Add Channels</h4></div>
          <p class="addon-desc">Facebook, Instagram, WhatsApp, RCS.</p>
        </div>
        <div>
          <p class="addon-price addon-price-dynamic" data-inr-val="799" data-suffix="/ month / channel">₹799 / month / channel</p>
          <button type="button" class="btn-outline full addon-activate-btn" data-addon="Add Channels">Activate</button>
        </div>
      </div>

      <!-- 2. Team Members -->
      <div class="addon-card">
        <div>
          <div class="addon-head"><div class="addon-icon" style="background:#eef2ff;color:#4338ca;">👥</div><h4>Team Members</h4></div>
          <p class="addon-desc">Extra agent logins for inbox & CRM.</p>
        </div>
        <div>
          <p class="addon-price addon-price-dynamic" data-inr-val="299" data-suffix="/ month / user">₹299 / month / user</p>
          <button type="button" class="btn-outline full addon-activate-btn" data-addon="Team Members">Activate</button>
        </div>
      </div>

      <!-- 3. Ecommerce -->
      <div class="addon-card">
        <div>
          <div class="addon-head"><div class="addon-icon" style="background:#fff7ed;color:#c2410c;">🛒</div><h4>Ecommerce</h4></div>
          <p class="addon-desc">WhatsApp ecommerce flows & catalogue journeys.</p>
        </div>
        <div>
          <p class="addon-price addon-price-dynamic" data-inr-val="999" data-suffix="/ month">₹999 / month</p>
          <button type="button" class="btn-outline full addon-activate-btn" data-addon="Ecommerce Module">Activate</button>
        </div>
      </div>

      <!-- 4. Calendar Bot -->
      <div class="addon-card">
        <div>
          <div class="addon-head"><div class="addon-icon" style="background:#fdf2f8;color:#be185d;">📅</div><h4>Calendar Bot</h4></div>
          <p class="addon-desc">Appointment scheduling & reminders on WhatsApp.</p>
        </div>
        <div>
          <p class="addon-price addon-price-dynamic" data-inr-val="499" data-suffix="/ month">₹499 / month</p>
          <button type="button" class="btn-outline full addon-activate-btn" data-addon="Calendar Bot">Activate</button>
        </div>
      </div>

      <!-- 5. Departments -->
      <div class="addon-card">
        <div>
          <div class="addon-head"><div class="addon-icon" style="background:#f0f9ff;color:#0369a1;">🏢</div><h4>Departments</h4></div>
          <p class="addon-desc">Route chats by department / team / brand.</p>
        </div>
        <div>
          <p class="addon-price addon-price-dynamic" data-inr-val="299" data-suffix="/ month">₹299 / month</p>
          <button type="button" class="btn-outline full addon-activate-btn" data-addon="Departments Module">Activate</button>
        </div>
      </div>

      <!-- 6. Media Manager -->
      <div class="addon-card">
        <div>
          <div class="addon-head"><div class="addon-icon" style="background:#faf5ff;color:#7e22ce;">🖼️</div><h4>Media Manager</h4></div>
          <p class="addon-desc">Central media library for templates, files & creatives.</p>
        </div>
        <div>
          <p class="addon-price addon-price-dynamic" data-inr-val="299" data-suffix="/ month">₹299 / month</p>
          <button type="button" class="btn-outline full addon-activate-btn" data-addon="Media Manager">Activate</button>
        </div>
      </div>

      <!-- 7. AI Ecommerce Store -->
      <div class="addon-card">
        <div>
          <div class="addon-head"><div class="addon-icon" style="background:#fffbeb;color:#b45309;">🛒</div><h4>AI Ecommerce Store</h4></div>
          <p class="addon-desc">AI-powered storefront & checkout on WhatsApp.</p>
        </div>
        <div>
          <p class="addon-price addon-price-dynamic" data-inr-val="999" data-suffix="/ month">₹999 / month</p>
          <button type="button" class="btn-outline full addon-activate-btn" data-addon="AI Ecommerce Store">Activate</button>
        </div>
      </div>

      <!-- 8. Google Review QR -->
      <div class="addon-card">
        <div>
          <div class="addon-head"><div class="addon-icon" style="background:#fff1f2;color:#be123c;">⭐</div><h4>Google Review QR</h4></div>
          <p class="addon-desc">Generate QR codes to collect Google reviews instantly via WhatsApp.</p>
        </div>
        <div>
          <p class="addon-price addon-price-dynamic" data-inr-val="499" data-suffix="/ month">₹499 / month</p>
          <button type="button" class="btn-outline full addon-activate-btn" data-addon="Google Review QR">Activate</button>
        </div>
      </div>

      <!-- 9. Webchat Add-on -->
      <div class="addon-card">
        <div>
          <div class="addon-head"><div class="addon-icon" style="background:#ecfeff;color:#0e7490;">🌐</div><h4>Webchat Add-on</h4></div>
          <p class="addon-desc">Embed WhatsApp chat widget on your website for live conversations.</p>
        </div>
        <div>
          <p class="addon-price addon-price-dynamic" data-inr-val="499" data-suffix="/ month">₹499 / month</p>
          <button type="button" class="btn-outline full addon-activate-btn" data-addon="Webchat Add-on">Activate</button>
        </div>
      </div>

      <!-- 10. External Action -->
      <div class="addon-card">
        <div>
          <div class="addon-head"><div class="addon-icon" style="background:#ecfdf5;color:#047857;">⚡</div><h4>External Action</h4></div>
          <p class="addon-desc">Execute paid external actions in bots & automations (per action).</p>
        </div>
        <div>
          <p class="addon-price addon-price-dynamic" data-inr-val="0.05" data-suffix="/ action">₹0.05 / action</p>
          <button type="button" class="btn-outline full addon-activate-btn" data-addon="External Action">Activate</button>
        </div>
      </div>

      <!-- 11. AI Voice Call -->
      <div class="addon-card">
        <div>
          <div class="addon-head"><div class="addon-icon" style="background:#fff1f2;color:#e11d48;">🎙️</div><h4>AI Voice Call</h4></div>
          <p class="addon-desc">AI-powered voice calls & IVR on WhatsApp. Pricing depends on model.</p>
        </div>
        <div>
          <p class="addon-price addon-price-dynamic" data-inr-val="0.10" data-prefix="Starting at" data-suffix="/min">Starting at ₹0.10/min</p>
          <button type="button" class="btn-outline full addon-activate-btn" data-addon="AI Voice Call">Talk to sales</button>
        </div>
      </div>

      <!-- 12. WhatsApp AI Agent -->
      <div class="addon-card">
        <div>
          <div class="addon-head"><div class="addon-icon" style="background:#f0fdfa;color:#0f766e;">🤖</div><h4>WhatsApp AI Agent</h4></div>
          <p class="addon-desc">Autonomous AI agent (ChatGPT, Gemini, Claude) for complex conversations.</p>
        </div>
        <div>
          <p class="addon-price addon-price-dynamic" data-inr-val="999" data-suffix="/ month">₹999 / month</p>
          <button type="button" class="btn-outline full addon-activate-btn" data-addon="WhatsApp AI Agent">Activate</button>
        </div>
      </div>

      <!-- 13. WhatsApp BM Verification Assistance -->
      <div class="addon-card">
        <div>
          <div class="addon-head"><div class="addon-icon" style="background:#eff6ff;color:#1d4ed8;">✅</div><h4>WhatsApp BM Verification</h4></div>
          <p class="addon-desc">Assistance with WhatsApp Business Manager verification, including document & business profile validation.</p>
        </div>
        <div>
          <p class="addon-price addon-price-dynamic" data-inr-val="2999" data-suffix="(one-time)">₹2,999 (one-time)</p>
          <button type="button" class="btn-outline full addon-activate-btn" data-addon="WhatsApp BM Verification">Book Now</button>
        </div>
      </div>

      <!-- 14. 1-Hour Training -->
      <div class="addon-card">
        <div>
          <div class="addon-head"><div class="addon-icon" style="background:#fffbeb;color:#d97706;">🎓</div><h4>1-Hour Training</h4></div>
          <p class="addon-desc">Live training session on WhatsApp automation, chatbots, or CRM workflows – tailored to your team.</p>
        </div>
        <div>
          <p class="addon-price addon-price-dynamic" data-inr-val="999" data-suffix="(per session)">₹999 (per session)</p>
          <button type="button" class="btn-outline full addon-activate-btn" data-addon="1-Hour Training">Book Training</button>
        </div>
      </div>

      <!-- 15. Custom Integration -->
      <div class="addon-card">
        <div>
          <div class="addon-head"><div class="addon-icon" style="background:#f5f3ff;color:#6d28d9;">🔌</div><h4>Custom Integration</h4></div>
          <p class="addon-desc">Custom API, webhook, or third-party integration (CRM, payment gateways, ERP) – built to your needs.</p>
        </div>
        <div>
          <p class="addon-price" style="font-weight:700;">Custom Price</p>
          <button type="button" class="btn-outline full addon-activate-btn" data-addon="Custom Integration">Request Quote</button>
        </div>
      </div>

    </div>

    <div style="margin-top:40px;background:#ffffff;padding:24px;border-radius:18px;border:1px solid #e2e8f0;">
      <h4 style="font-size:15px;font-weight:700;margin:0 0 10px;color:#0f172a;">Important Add-on Information</h4>
      <ul style="list-style:none;padding:0;margin:0;font-size:13.5px;color:#64748b;line-height:1.6;">
        <li style="margin-bottom:6px;">⚠ WhatsApp conversation charges are prepaid via wallet for each channel (minimum ₹1000 / channel).</li>
        <li style="margin-bottom:6px;">⚠ Meta may ban numbers for spam to random lists – always use opt-in contacts only.</li>
        <li>⚠ All taxes and payment gateway charges are extra as applicable.</li>
      </ul>
    </div>
  </div>
</section>

<!-- FREQUENTLY ASKED QUESTIONS -->
<section class="section pricing-faq-section" id="faq">
  <div class="container">
    <div style="text-align:center;">
      <h2 style="font-size:28px;font-weight:800;color:#0f172a;margin:0 0 8px;">Frequently Asked Questions</h2>
      <p style="font-size:15px;color:#64748b;margin:0;">Everything you need to know about InboxWa pricing and plans</p>
    </div>

    <div class="card-grid-2">
      <div class="faq-card">
        <h3>What&apos;s included in the platform fee?</h3>
        <p>The platform fee covers access to InboxWa dashboard, CRM, automation builder, team inbox, and all core features. WhatsApp conversation charges are separate and billed based on usage through prepaid wallet.</p>
      </div>
      <div class="faq-card">
        <h3>Can I upgrade or downgrade my plan?</h3>
        <p>Yes! You can change plans anytime. When upgrading, you get immediate access to new features. When downgrading, changes take effect from your next billing cycle with pro-rata adjustments.</p>
      </div>
      <div class="faq-card">
        <h3>Is there a setup fee or hidden charges?</h3>
        <p>No setup fees for any plans. We believe in transparent pricing - you only pay for what you use. WhatsApp conversation charges are separate and clearly displayed in your dashboard.</p>
      </div>
      <div class="faq-card">
        <h3>Do you offer custom enterprise plans?</h3>
        <p>Absolutely! For large enterprises with specific requirements, we offer custom plans with dedicated support, SLAs, enterprise features, and volume-based pricing. Contact our sales team.</p>
      </div>
      <div class="faq-card">
        <h3>What payment methods do you accept?</h3>
        <p>We accept all major credit/debit cards, UPI, net banking, and bank transfers. For international clients, we support multi-currency online payments with instant receipt generation.</p>
      </div>
      <div class="faq-card">
        <h3>Is there a free trial available?</h3>
        <p>Yes! All plans come with a 3-day free trial. No credit card required. You get full access to all features during the trial period to test everything before committing.</p>
      </div>
    </div>
  </div>
</section>

<!-- BOTTOM CTA SECTION -->
<div class="container">
  <section class="pricing-cta-section">
    <div class="cta-inner">
      <div>
        <h2>Ready to get started?</h2>
        <p>Join 500+ businesses using InboxWa for WhatsApp automation. Start your free trial today!</p>
      </div>
      <div class="cta-buttons">
        <a href="/auth/register" class="btn-cta-primary">Start Free Trial</a>
        <a href="#addons" class="btn-cta-secondary">View Add-ons</a>
      </div>
    </div>
  </section>
</div>

<!-- INTERACTIVE ACTIVATION MODAL -->
<div id="addonModalBackdrop" class="addon-modal-backdrop">
  <div class="addon-modal">
    <button type="button" id="addonModalClose" class="addon-modal-close" aria-label="Close modal">&times;</button>
    <h3>Activate <span id="addonNameSpan">Add-on</span></h3>
    <p class="modal-subtext">Share your details and our team will activate this for your InboxWa account and send your setup details on WhatsApp.</p>
    <form id="addonForm">
      <input type="hidden" id="addonNameField" value="">
      <div class="form-group">
        <label for="adName">Your Full Name</label>
        <input type="text" id="adName" required placeholder="e.g. Rahul Sharma">
      </div>
      <div class="form-group">
        <label for="adMobile">WhatsApp Mobile Number</label>
        <input type="tel" id="adMobile" required placeholder="e.g. +91 98765 43210">
      </div>
      <div class="form-group">
        <label for="adEmail">Work Email Address</label>
        <input type="email" id="adEmail" required placeholder="e.g. rahul@business.com">
      </div>
      <div class="form-group">
        <label for="adReg">Registered InboxWa WhatsApp Number</label>
        <input type="text" id="adReg" placeholder="Your connected WhatsApp business number">
      </div>
      <button type="submit" class="btn-primary full" style="margin-top:12px;">🚀 Send Activation Request on WhatsApp</button>
    </form>
  </div>
</div>

<!-- CALLBACK POPUP (WAAPIBOX CLONE) -->
<div class="callback-popup" id="callbackPopup">
  <button type="button" class="callback-close" id="callbackClose" aria-label="Close callback">&times;</button>
  <div class="callback-header">
    <div class="callback-icon"><span>📞</span></div>
    <div>
      <p class="callback-tagline">Not sure which plan to choose?</p>
      <h3>Get a Call Back in 5 Minutes</h3>
    </div>
  </div>
  <p style="font-size:12px;color:#64748b;margin-bottom:8px;">Available: <strong>10:00 AM – 7:00 PM (Mon – Sat)</strong></p>
  <form id="callbackForm">
    <div class="form-group" style="margin-bottom:8px;">
      <input type="text" id="cbName" required placeholder="Enter your full name" style="padding:8px 12px;font-size:13px;border-radius:8px;border:1px solid #cbd5e1;width:100%;box-sizing:border-box;">
    </div>
    <div class="form-group" style="margin-bottom:10px;">
      <input type="tel" id="cbMobile" required placeholder="Enter your WhatsApp number" style="padding:8px 12px;font-size:13px;border-radius:8px;border:1px solid #cbd5e1;width:100%;box-sizing:border-box;">
    </div>
    <button type="submit" class="btn-primary full" style="padding:9px 14px;font-size:13px;border-radius:8px;">Request Call Back on WhatsApp</button>
  </form>
  <p style="font-size:11px;color:#94a3b8;margin-top:8px;margin-bottom:0;text-align:center;">Our WhatsApp experts will call you & share live demo.</p>
</div>

<script src="/assets/js/pricing.js?v=4" defer></script>
<?php include __DIR__ . '/../includes/footer.php'; ?>
