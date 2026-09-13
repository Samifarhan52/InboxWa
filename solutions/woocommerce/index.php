<?php
$basePath = '../../';
$pageTitle = 'WooCommerce WhatsApp Automation | Cart Recovery, Orders & Support | InboxWa';
$pageDescription = 'Connect WooCommerce with InboxWa: abandoned cart recovery, product search, order tracking, COD confirmation, campaigns and support on Official WhatsApp Business API.';
$canonicalUrl = 'https://inboxwa.com/solutions/woocommerce/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/woocommerce.css?v=41">
<link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=2">


<section class="woo-hero" aria-label="WooCommerce hero">
  <div class="container">
    <div class="woo-grid">
      <div class="woo-hero-copy">
        <div class="woo-badge">WooCommerce · WhatsApp Commerce</div>
        <h1>Turn Your WooCommerce Store Into a <span class="grad">WhatsApp Sales Machine</span></h1>
        <p class="woo-lead">Connect WooCommerce with InboxWa and automate product discovery, abandoned carts, orders, payments, marketing, delivery updates and customer support on WhatsApp.</p>
        <div class="woo-ctas">
          <a href="/auth/register" class="btn btn-primary btn-lg">Start Free</a>
          <button type="button" class="btn-ghost-light btn-demo-open">Book WooCommerce Demo</button>
                  <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn-download-data" style="padding:0.78rem 1.5rem;font-size:0.95rem;">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            Download Data
          </a>
</div>
        <div class="woo-tabs" id="woo-tabs" role="tablist">
          <button type="button" class="is-active" data-flow="search">Product Search</button>
          <button type="button" data-flow="cart">Abandoned Cart</button>
          <button type="button" data-flow="order">Order</button>
          <button type="button" data-flow="cod">COD</button>
          <button type="button" data-flow="tracking">Tracking</button>
          <button type="button" data-flow="marketing">Marketing</button>
          <button type="button" data-flow="support">Support</button>
        </div>
      </div>
      <div class="woo-stage">
        <div class="woo-float woo-float-1"><b>New Order</b>Confirmed on chat</div>
        <div class="woo-float woo-float-2"><b>Cart Recovered</b>Checkout started</div>
        <div class="woo-float woo-float-3"><b>Supported</b>Return assisted</div>
        <div class="woo-phone">
          <div class="woo-notch"></div>
          <div class="woo-screen">
            <div class="woo-head">
              <div class="woo-av">WC</div>
              <div>
                <strong>InboxWa Store</strong>
                <small><span class="woo-dot"></span> Live Simulation</small>
              </div>
            </div>
            <div class="woo-body" id="woo-body">
              <div class="woo-typing" id="woo-typing"><i></i><i></i><i></i></div>
              <div class="woo-chips" id="woo-chips"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal"><h2>Connect WooCommerce With InboxWa</h2>
      <p class="lead">WooCommerce → InboxWa → WhatsApp — product, order and customer automation on Official WhatsApp Business API.</p>
    </div>
    <div class="woo-steps reveal">
      <div class="woo-step"><div class="ico">1</div><h4>Install Plugin</h4><p>Add InboxWa connector</p></div>
      <div class="woo-step"><div class="ico">2</div><h4>Connect Store</h4><p>Link your WooCommerce site</p></div>
      <div class="woo-step"><div class="ico">3</div><h4>Sync Products</h4><p>Catalogue ready for chat</p></div>
      <div class="woo-step"><div class="ico">4</div><h4>Connect WhatsApp</h4><p>Official Business API</p></div>
      <div class="woo-step"><div class="ico">5</div><h4>Configure Automation</h4><p>Cart, orders, support</p></div>
      <div class="woo-step"><div class="ico">6</div><h4>Go Live</h4><p>Start selling on chat</p></div>
    </div>
    <div style="text-align:center;margin-top:1.5rem">
      <a href="/#contact-section" class="btn btn-primary">Connect WooCommerce</a>
    </div>
  </div>
</section>
<div class="hb-img-slot" data-hb-img-slot>
  <div class="hb-img-fallback">
    <div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div>
    <strong>WooCommerce + WhatsApp Shopping</strong>
    <span>Store catalog meets WhatsApp product conversation.</span>
  </div>
</div>


<section class="section section-alt">
  <div class="container">
    <div class="section-header reveal"><h2>Live integration simulation</h2>
      <p class="lead">Select a WooCommerce event to see the WhatsApp message InboxWa can send.</p>
    </div>
    <div class="reveal" style="max-width:640px;margin:0 auto">
      <div class="woo-event-btns">
        <button type="button" class="woo-event-btn is-active" data-event="order">New Order</button>
        <button type="button" class="woo-event-btn" data-event="payment">Payment</button>
        <button type="button" class="woo-event-btn" data-event="shipped">Order Shipped</button>
        <button type="button" class="woo-event-btn" data-event="delivered">Order Delivered</button>
        <button type="button" class="woo-event-btn" data-event="cart">Cart</button>
        <button type="button" class="woo-event-btn" data-event="customer">Customer</button>
      </div>
      <div class="woo-event-out" id="woo-event-out">Your order #HB10245 has been confirmed <svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><br>Amount: ₹1,999 · Payment received</div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal"><h2>Everything your WooCommerce store needs on WhatsApp</h2></div>
    <div class="woo-uc-grid" style="margin-top:1.5rem">
      <div class="woo-uc reveal"><h3>Abandoned Cart Recovery</h3><p>Bring customers back to unfinished purchases.</p></div>
      <div class="woo-uc reveal"><h3>AI Product Assistant</h3><p>Help customers discover products through WhatsApp.</p></div>
      <div class="woo-uc reveal"><h3>Product Recommendations</h3><p>Recommend relevant products based on conversation context.</p></div>
      <div class="woo-uc reveal"><h3>Order Confirmation</h3><p>Automatically notify customers after successful orders.</p></div>
      <div class="woo-uc reveal"><h3>Payment Reminder</h3><p>Remind for pending or failed payments where applicable.</p></div>
      <div class="woo-uc reveal"><h3>COD Confirmation</h3><p>Confirm cash-on-delivery orders through WhatsApp.</p></div>
      <div class="woo-uc reveal"><h3>Order Tracking</h3><p>Let customers receive order and shipment updates.</p></div>
      <div class="woo-uc reveal"><h3>Shipping Notifications</h3><p>Automate packing, shipping and delivery communication.</p></div>
      <div class="woo-uc reveal"><h3>Back-in-Stock Alerts</h3><p>Notify interested customers when products return.</p></div>
      <div class="woo-uc reveal"><h3>Price Drop Alerts</h3><p>Notify eligible customers about relevant price changes.</p></div>
      <div class="woo-uc reveal"><h3>Marketing Campaigns</h3><p>Promote launches, sales and offers on WhatsApp.</p></div>
      <div class="woo-uc reveal"><h3>Return &amp; Exchange</h3><p>Automate return, exchange and refund communication.</p></div>
      <div class="woo-uc reveal"><h3>Review &amp; Feedback</h3><p>Request feedback after delivery.</p></div>
      <div class="woo-uc reveal"><h3>Repeat Purchase</h3><p>Reconnect for relevant reorder moments.</p></div>
      <div class="woo-uc reveal"><h3>Customer Support</h3><p>AI handles common questions; complex chats go to agents.</p></div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header reveal"><h2>WooCommerce customer journey</h2></div>
    <div class="woo-journey reveal" style="margin-top:1.25rem">
      <span>Ad</span><span class="arr">→</span>
      <span>WhatsApp</span><span class="arr">→</span>
      <span>AI Assistant</span><span class="arr">→</span>
      <span>Product</span><span class="arr">→</span>
      <span>Cart</span><span class="arr">→</span>
      <span>Checkout</span><span class="arr">→</span>
      <span>Order</span><span class="arr">→</span>
      <span>Shipping</span><span class="arr">→</span>
      <span>Delivery</span><span class="arr">→</span>
      <span>Review</span><span class="arr">→</span>
      <span>Repeat</span>
    </div>
  </div>
</section>
<div class="hb-img-slot hb-img-slot--dark" data-hb-img-slot>
  <div class="hb-img-fallback">
    <div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div>
    <strong>Order Tracking on Mobile</strong>
    <span>Customer sees shipping status updates on WhatsApp.</span>
  </div>
</div>


<section class="section">
  <div class="container">
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.5rem;align-items:center">
      <div class="reveal">
        <h2>AI Shopping Assistant</h2>
        <p class="lead">Customers ask for products in natural language. InboxWa can surface relevant catalogue items, answer questions and guide them toward purchase.</p>
        <p style="font-size:.9rem;color:var(--t2)">Example: “I need a gift under ₹1,500” → product cards with View / Buy actions.</p>
      </div>
      <div class="reveal" style="border-radius:16px;min-height:220px;background:linear-gradient(135deg,#EDE9FE,#CFFAFE);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center;color:#6B7280;font-weight:600;padding:1rem;text-align:center">
        AI product discovery on WhatsApp
      </div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.5rem;align-items:center">
      <div class="reveal" style="border-radius:16px;min-height:220px;background:linear-gradient(135deg,#FEF3C7,#FDE68A);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center;color:#6B7280;font-weight:600;padding:1rem;text-align:center">
        Cart recovery creative (replaceable)
      </div>
      <div class="reveal">
        <h2>Recover abandoned carts</h2>
        <p class="lead">Product added → checkout started → no purchase → WhatsApp reminder → customer returns → order completed.</p>
        <a href="/#contact-section" class="btn btn-primary">Recover Abandoned Carts</a>
      </div>
    </div>
  </div>
</section>
<div class="hb-img-slot" data-hb-img-slot>
  <div class="hb-img-fallback">
    <div class="ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>️</div>
    <strong>Product → Cart → Order → COD</strong>
    <span>Order automation visual for WooCommerce checkout and COD.</span>
  </div>
</div>


<section class="section">
  <div class="container">
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.5rem;align-items:center">
      <div class="reveal">
        <h2>WhatsApp marketing for WooCommerce</h2>
        <p class="lead">New launches, festival sales, flash offers, back-in-stock and win-back — using approved templates.</p>
        <p style="font-size:.9rem;color:var(--t2)">Select Audience → Create Campaign → Preview → Send → Track</p>
        <a href="/#contact-section" class="btn btn-primary" style="margin-top:1rem">Create Campaign</a>
      </div>
      <div class="reveal" style="border-radius:16px;min-height:220px;background:linear-gradient(135deg,#EDE9FE,#CFFAFE);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center;color:#6B7280;font-weight:600;padding:1rem;text-align:center">
        Marketing banner area (replaceable)
      </div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header reveal"><h2>Customer CRM connected to WooCommerce</h2>
      <p class="lead">Track conversations and order context in one place. No invented revenue metrics.</p>
    </div>
    <div class="woo-pipe reveal">
      <span>New Customer</span><span>→</span>
      <span>Interested</span><span>→</span>
      <span>Cart</span><span>→</span>
      <span>Purchased</span><span>→</span>
      <span>Repeat</span><span>→</span>
      <span>VIP</span>
    </div>
    <div class="reveal" style="max-width:720px;margin:1rem auto 0;border-radius:14px;border:1px solid var(--bd);overflow:hidden">
      <table style="width:100%;border-collapse:collapse;font-size:.85rem">
        <thead><tr style="background:var(--bg2)"><th style="padding:.65rem;text-align:left">Field</th><th style="padding:.65rem;text-align:left">Example</th></tr></thead>
        <tbody>
          <tr><td style="padding:.55rem .65rem;border-top:1px solid var(--bd)">Customer</td><td style="padding:.55rem .65rem;border-top:1px solid var(--bd)">WhatsApp contact</td></tr>
          <tr><td style="padding:.55rem .65rem;border-top:1px solid var(--bd)">Order</td><td style="padding:.55rem .65rem;border-top:1px solid var(--bd)">#HB10245</td></tr>
          <tr><td style="padding:.55rem .65rem;border-top:1px solid var(--bd)">Product</td><td style="padding:.55rem .65rem;border-top:1px solid var(--bd)">From catalogue sync</td></tr>
          <tr><td style="padding:.55rem .65rem;border-top:1px solid var(--bd)">Order Status</td><td style="padding:.55rem .65rem;border-top:1px solid var(--bd)">Shipped / Delivered</td></tr>
          <tr><td style="padding:.55rem .65rem;border-top:1px solid var(--bd)">Last Interaction</td><td style="padding:.55rem .65rem;border-top:1px solid var(--bd)">Chat thread</td></tr>
          <tr><td style="padding:.55rem .65rem;border-top:1px solid var(--bd)">Segment</td><td style="padding:.55rem .65rem;border-top:1px solid var(--bd)">Cart / Purchased / VIP</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal"><h2>WooCommerce + WhatsApp features</h2></div>
    <div class="woo-feat-grid reveal" style="margin-top:1.25rem">
      <div class="woo-feat">WooCommerce Integration</div>
      <div class="woo-feat">WhatsApp Business API</div>
      <div class="woo-feat">AI Chatbot</div>
      <div class="woo-feat">Product Catalogue</div>
      <div class="woo-feat">Product Search</div>
      <div class="woo-feat">Product Recommendations</div>
      <div class="woo-feat">Abandoned Cart</div>
      <div class="woo-feat">Order Notifications</div>
      <div class="woo-feat">COD Confirmation</div>
      <div class="woo-feat">Payment Notifications</div>
      <div class="woo-feat">Order Tracking</div>
      <div class="woo-feat">Shipping Updates</div>
      <div class="woo-feat">Marketing Campaigns</div>
      <div class="woo-feat">Customer Segmentation</div>
      <div class="woo-feat">CRM</div>
      <div class="woo-feat">Multi-Agent Inbox</div>
      <div class="woo-feat">Returns &amp; Exchange</div>
      <div class="woo-feat">Review Automation</div>
      <div class="woo-feat">API &amp; Webhooks</div>
      <div class="woo-feat">Analytics</div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header reveal"><h2>WooCommerce marketing in action</h2>
      <p class="lead">Replace these slots with campaign creatives, chat screenshots and store visuals.</p>
    </div>
    <div class="woo-gallery reveal">
      <div class="slot">Campaign<br>1080×1080</div>
      <div class="slot">Product<br>Creative</div>
      <div class="slot">Sale Banner<br>1200×630</div>
      <div class="slot">Chat<br>Screenshot</div>
      <div class="slot">Integration<br>Screenshot</div>
      <div class="slot">Store<br>Visual</div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal"><h2>Trusted by growing businesses</h2>
      <p class="lead">Add your approved client logos here. No invented names.</p>
    </div>
    <div class="woo-logos reveal">
      <span>Logo slot</span><span>Logo slot</span><span>Logo slot</span><span>Logo slot</span><span>Logo slot</span>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header reveal"><h2>Built for every WooCommerce business</h2></div>
    <div class="woo-biz reveal" style="margin-top:1.25rem">
      <div class="card">Fashion &amp; Apparel</div>
      <div class="card">Beauty &amp; Cosmetics</div>
      <div class="card">Jewellery</div>
      <div class="card">Electronics</div>
      <div class="card">Food &amp; Beverage</div>
      <div class="card">Home &amp; Lifestyle</div>
      <div class="card">Health &amp; Wellness</div>
      <div class="card">Retail</div>
      <div class="card">D2C Brands</div>
      <div class="card">Subscription</div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal"><h2>Why InboxWa + WooCommerce</h2></div>
    <div class="woo-uc-grid reveal" style="margin-top:1.25rem">
      <div class="woo-uc"><h3>Sell through WhatsApp</h3><p>Let customers discover and buy without leaving the chat.</p></div>
      <div class="woo-uc"><h3>Recover abandoned carts</h3><p>Remind shoppers about items left in cart.</p></div>
      <div class="woo-uc"><h3>Automate communication</h3><p>Orders, shipping and support messages on autopilot.</p></div>
      <div class="woo-uc"><h3>Respond faster</h3><p>AI answers common questions; agents handle the rest.</p></div>
      <div class="woo-uc"><h3>Simplify order support</h3><p>Tracking, COD and returns from one inbox.</p></div>
      <div class="woo-uc"><h3>Run targeted marketing</h3><p>Approved template campaigns to eligible audiences.</p></div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header reveal"><h2>Frequently asked questions</h2></div>
    <div class="faq-list" style="max-width:720px;margin:1.25rem auto 0">
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can InboxWa connect with WooCommerce?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — connect your WooCommerce store so product, order and customer events can drive WhatsApp automation.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">How does the WooCommerce integration work?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Install the connector, link the store, sync catalogue and WhatsApp, then configure automations for carts, orders and support.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can customers search products on WhatsApp?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — customers can describe what they need and receive relevant product suggestions from your catalogue.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can InboxWa recover abandoned carts?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — trigger reminder sequences when carts are abandoned, within WhatsApp policy.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can customers receive order tracking updates?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — order and shipment status can be shared on WhatsApp as events occur.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can COD orders be confirmed through WhatsApp?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — confirm or cancel COD orders through chat buttons before fulfilment.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I run WooCommerce product campaigns?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — send approved template campaigns for launches, sales and offers to eligible audiences.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can AI answer product questions?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">AI can handle common product questions and hand off complex conversations to your team.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can my support team manage WhatsApp together?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Shared team inbox supports assignment, notes and multi-agent handling.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can WooCommerce events trigger InboxWa automations?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — order, payment, shipping and cart events can trigger the corresponding WhatsApp flows.</div></div></div>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container"><div class="section-header reveal" style="text-align:center">
    <h2 style="color:#fff">Ready to Connect WooCommerce With WhatsApp?</h2>
    <p class="lead" style="color:rgba(255,255,255,.75)">Automate shopping, marketing, orders and customer support with InboxWa.</p>
    <div style="margin-top:1.25rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
      <a href="/auth/register" class="btn btn-primary btn-lg">Start Free</a>
      <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.45);color:#fff;background:transparent">Book WooCommerce Demo</button>
    </div>
  </div></div>
</section>

<script src="/assets/js/woocommerce-sim.js?v=37" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
