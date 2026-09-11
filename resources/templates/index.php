<?php
$basePath = '../../';
$pageTitle = 'WhatsApp Message Templates Library — InboxWa';
$pageDescription = 'High-converting, Meta-approved WhatsApp template designs for marketing broadcasts, utility order tracking, authentication OTPs, and customer support.';
$canonicalUrl = 'https://inboxwa.com/resources/templates/';
include __DIR__ . '/../../includes/header.php';

$templates = [
  // 1. Abandoned Cart Recovery
  [
    'id' => 'tpl_cart_recovery',
    'title' => 'Abandoned Cart Recovery',
    'category' => 'marketing',
    'cat_label' => 'Marketing',
    'meta_status' => 'Approved · High Quality',
    'has_media' => true,
    'media_text' => '🛍️ Product Image / Promo Card',
    'body' => "Hey {{1}}, you left something special in your cart! 🛒\n\nYour items are reserved for the next 2 hours. Complete your order now and enjoy an extra {{2}}% OFF with code *{{3}}*.",
    'footer' => 'Tap STOP to unsubscribe',
    'buttons' => [
      ['icon' => '🛒', 'text' => 'Complete My Order'],
      ['icon' => '💬', 'text' => 'Ask a Question']
    ],
    'raw_copy' => "Hey {{1}}, you left something special in your cart! 🛒\n\nYour items are reserved for the next 2 hours. Complete your order now and enjoy an extra {{2}}% OFF with code {{3}}.\n\nReply STOP to unsubscribe."
  ],
  // 2. Order Confirmation & Tracking
  [
    'id' => 'tpl_order_confirmed',
    'title' => 'Order Confirmation & Tracking',
    'category' => 'utility',
    'cat_label' => 'Utility',
    'meta_status' => 'Approved · High Quality',
    'has_media' => false,
    'body' => "Hi {{1}}! 🎉 Thank you for shopping with {{2}}.\n\nYour order *#{{3}}* has been confirmed and is being packed. Total Amount: *₹{{4}}*.\n\nYou can track the live courier progress below.",
    'footer' => 'InboxWa Automated Delivery Alert',
    'buttons' => [
      ['icon' => '📦', 'text' => 'Track Live Shipment'],
      ['icon' => '📄', 'text' => 'Download Invoice']
    ],
    'raw_copy' => "Hi {{1}}! 🎉 Thank you for shopping with {{2}}.\n\nYour order #{{3}} has been confirmed and is being packed. Total Amount: ₹{{4}}.\n\nYou can track the live courier progress below."
  ],
  // 3. One-Time Password (OTP)
  [
    'id' => 'tpl_auth_otp',
    'title' => 'Secure 2FA / Login OTP',
    'category' => 'authentication',
    'cat_label' => 'Authentication',
    'meta_status' => 'Approved · Zero Markup',
    'has_media' => false,
    'body' => "*{{1}}* is your verification code for {{2}}.\n\nFor security reasons, do not share this code with anyone. This code expires in *10 minutes*.",
    'footer' => 'Security Notice: InboxWa Auth',
    'buttons' => [
      ['icon' => '🔐', 'text' => 'Copy Code ({{1}})']
    ],
    'raw_copy' => "{{1}} is your verification code for {{2}}. For security reasons, do not share this code with anyone. This code expires in 10 minutes."
  ],
  // 4. Appointment Reminder & Reschedule
  [
    'id' => 'tpl_appt_reminder',
    'title' => 'Appointment Reminder & Reschedule',
    'category' => 'utility',
    'cat_label' => 'Utility',
    'meta_status' => 'Approved · High Quality',
    'has_media' => false,
    'body' => "Hello {{1}}, this is a friendly reminder for your upcoming appointment with *{{2}}* on *{{3}}* at *{{4}}*.\n\nClinic location: {{5}}.\n\nPlease confirm your slot below:",
    'footer' => 'Tap an option to respond immediately',
    'buttons' => [
      ['icon' => '✅', 'text' => 'Confirm My Slot'],
      ['icon' => '🔄', 'text' => 'Reschedule Date'],
      ['icon' => '📍', 'text' => 'Google Maps Directions']
    ],
    'raw_copy' => "Hello {{1}}, this is a friendly reminder for your upcoming appointment with {{2}} on {{3}} at {{4}}.\n\nClinic location: {{5}}.\n\nPlease confirm your slot below."
  ],
  // 5. VIP Flash Sale & Catalog Drop
  [
    'id' => 'tpl_flash_sale',
    'title' => 'VIP Flash Sale & Catalog Broadcast',
    'category' => 'marketing',
    'cat_label' => 'Marketing',
    'meta_status' => 'Approved · High Quality',
    'has_media' => true,
    'media_text' => '🔥 Exclusive Festive Collection Banner',
    'body' => "Exclusive Access for {{1}}! ✨\n\nOur {{2}} Flash Sale is now LIVE. Get up to *40% OFF* on trending arrivals for the next 24 hours.\n\nExplore our catalog directly inside WhatsApp:",
    'footer' => 'Reply STOP to opt out',
    'buttons' => [
      ['icon' => '🛍️', 'text' => 'View WhatsApp Catalog'],
      ['icon' => '🎟️', 'text' => 'Claim Promo Code']
    ],
    'raw_copy' => "Exclusive Access for {{1}}! ✨\n\nOur {{2}} Flash Sale is now LIVE. Get up to 40% OFF on trending arrivals for the next 24 hours.\n\nExplore our catalog directly inside WhatsApp:\nReply STOP to opt out"
  ],
  // 6. Support Triage & Human Escalation
  [
    'id' => 'tpl_support_welcome',
    'title' => 'Customer Support Greeting & Triage',
    'category' => 'support',
    'cat_label' => 'Customer Support',
    'meta_status' => 'Approved · High Quality',
    'has_media' => false,
    'body' => "Hi {{1}}, welcome to {{2}} Support! 👋\n\nHow can our team help you today? Please choose an option below or type your question directly.",
    'footer' => 'Live Agents Active 9 AM - 9 PM',
    'buttons' => [
      ['icon' => '📦', 'text' => 'Order & Delivery Issue'],
      ['icon' => '💳', 'text' => 'Refund or Billing'],
      ['icon' => '👨‍💼', 'text' => 'Speak to an Agent']
    ],
    'raw_copy' => "Hi {{1}}, welcome to {{2}} Support! 👋\n\nHow can our team help you today? Please choose an option below or type your question directly."
  ],
  // 7. CSAT & Rating Feedback Request
  [
    'id' => 'tpl_csat_feedback',
    'title' => 'Post-Resolution CSAT Feedback',
    'category' => 'support',
    'cat_label' => 'Customer Support',
    'meta_status' => 'Approved · High Quality',
    'has_media' => false,
    'body' => "Hello {{1}}, your support ticket *#{{2}}* was recently marked as resolved by {{3}}.\n\nHow would you rate your experience today?",
    'footer' => 'Takes less than 5 seconds',
    'buttons' => [
      ['icon' => '⭐', 'text' => '5 - Excellent'],
      ['icon' => '👍', 'text' => '4 - Good'],
      ['icon' => '👎', 'text' => '1-3 - Needs Improvement']
    ],
    'raw_copy' => "Hello {{1}}, your support ticket #{{2}} was recently marked as resolved by {{3}}.\n\nHow would you rate your experience today?"
  ],
  // 8. Event / Webinar Live Reminder
  [
    'id' => 'tpl_webinar_reminder',
    'title' => 'Webinar Starting in 15 Minutes',
    'category' => 'marketing',
    'cat_label' => 'Marketing',
    'meta_status' => 'Approved · High Quality',
    'has_media' => true,
    'media_text' => '🎙️ Speaker Session Artwork',
    'body' => "Starting in 15 minutes, {{1}}! 🚨\n\nWe are going live with *\"{{2}}\"* featuring {{3}}.\n\nGet your questions ready and click below to join the private stream room.",
    'footer' => 'InboxWa Masterclass Series',
    'buttons' => [
      ['icon' => '🎥', 'text' => 'Join Live Zoom Room'],
      ['icon' => '📄', 'text' => 'Download Slide Deck']
    ],
    'raw_copy' => "Starting in 15 minutes, {{1}}! 🚨\n\nWe are going live with \"{{2}}\" featuring {{3}}.\n\nGet your questions ready and click below to join the private stream room."
  ],
  // 9. Payment Due & UPI Direct Link
  [
    'id' => 'tpl_payment_due',
    'title' => 'Invoice & EMI Payment Due Alert',
    'category' => 'utility',
    'cat_label' => 'Utility',
    'meta_status' => 'Approved · High Quality',
    'has_media' => false,
    'body' => "Dear {{1}}, your invoice *#{{2}}* of *₹{{3}}* is due on *{{4}}*.\n\nTo avoid late fees or service interruptions, pay securely via UPI, NetBanking, or Credit Card using the link below.",
    'footer' => 'Secured via 256-bit Encryption',
    'buttons' => [
      ['icon' => '💳', 'text' => 'Pay Now via UPI'],
      ['icon' => '📄', 'text' => 'View Detailed Bill']
    ],
    'raw_copy' => "Dear {{1}}, your invoice #{{2}} of ₹{{3}} is due on {{4}}.\n\nTo avoid late fees or service interruptions, pay securely via UPI, NetBanking, or Credit Card using the link below."
  ]
];
?>
<link rel="stylesheet" href="/assets/css/resources.css?v=2">

<nav class="container res-breadcrumbs" aria-label="Breadcrumb">
  <ol>
    <li><a href="/">Home</a></li>
    <li><a href="/resources/help-center/">Resources</a></li>
    <li aria-current="page">Templates Library</li>
  </ol>
</nav>

<!-- Hero Section -->
<section class="res-hero">
  <div class="container">
    <span class="res-badge"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg> Meta-Approved Templates</span>
    <h1>WhatsApp Message Template Library</h1>
    <p>Pre-approved, battle-tested WhatsApp templates for abandoned carts, transactional updates, OTP verification, and customer support. Ready to deploy into InboxWa.</p>

    <!-- Search Input -->
    <div class="res-search-box" style="max-width:520px;margin:2rem auto 0">
      <svg class="res-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
      <input type="text" id="tpl-search" placeholder="Search templates by keyword, category, or industry..." aria-label="Search WhatsApp templates">
    </div>
  </div>
</section>

<!-- Filter Tabs -->
<section class="section" style="padding-top:2rem;padding-bottom:1rem">
  <div class="container">
    <div class="res-filter-tabs">
      <button type="button" class="res-filter-btn is-active" data-filter="all">All Templates (<?php echo count($templates); ?>)</button>
      <button type="button" class="res-filter-btn" data-filter="marketing">Marketing & Sales</button>
      <button type="button" class="res-filter-btn" data-filter="utility">Utility & Notifications</button>
      <button type="button" class="res-filter-btn" data-filter="authentication">Authentication (OTP)</button>
      <button type="button" class="res-filter-btn" data-filter="support">Customer Support</button>
    </div>
  </div>
</section>

<!-- Templates Cards Grid -->
<section class="section" style="padding-top:1rem">
  <div class="container">
    <div style="display:grid;grid-template-columns:repeat(auto-fill, minmax(360px, 1fr));gap:2rem;">
      <?php foreach ($templates as $t): ?>
      <div class="wa-tpl-card reveal" data-category="<?php echo htmlspecialchars($t['category']); ?>">
        <!-- Card Header -->
        <div class="wa-tpl-header">
          <div>
            <span class="badge badge-primary" style="font-size:0.72rem;margin-bottom:0.25rem"><?php echo htmlspecialchars($t['cat_label']); ?></span>
            <h3 class="wa-tpl-title"><?php echo htmlspecialchars($t['title']); ?></h3>
          </div>
          <span style="font-size:0.72rem;font-weight:700;color:#10B981;background:#ECFDF5;border:1px solid #A7F3D0;padding:2px 8px;border-radius:999px;white-space:nowrap">
            ● <?php echo htmlspecialchars($t['meta_status']); ?>
          </span>
        </div>

        <!-- WhatsApp Chat Pattern Wrapper -->
        <div class="wa-bubble-wrap">
          <div class="wa-bubble">
            <?php if (!empty($t['has_media'])): ?>
            <div class="wa-bubble-media">
              <span><?php echo htmlspecialchars($t['media_text']); ?></span>
            </div>
            <?php endif; ?>

            <!-- Message Body with Variable Highlighting -->
            <div style="white-space:pre-line;">
              <?php
                // Format body text and highlight {{1}}, {{2}} with .wa-var badges
                $formattedBody = htmlspecialchars($t['body']);
                $formattedBody = preg_replace('/\{\{(\d+)\}\}/', '<span class="wa-var">{{$1}}</span>', $formattedBody);
                echo $formattedBody;
              ?>
            </div>

            <!-- Footer & Timestamp -->
            <div class="wa-bubble-footer">
              <span style="font-size:0.7rem;color:#8E8E93;"><?php echo htmlspecialchars($t['footer'] ?? ''); ?></span>
              <span style="margin-left:auto;font-size:0.7rem;color:#8E8E93">10:42 AM</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#34B7F1" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </div>
          </div>

          <!-- Quick Action Buttons -->
          <?php if (!empty($t['buttons'])): ?>
          <div class="wa-actions-stack">
            <?php foreach ($t['buttons'] as $b): ?>
            <div class="wa-btn-pill">
              <span><?php echo $b['icon']; ?></span>
              <span><?php echo htmlspecialchars($b['text']); ?></span>
            </div>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
        </div>

        <!-- Card Footer Actions -->
        <div class="wa-tpl-actions">
          <button type="button" class="btn btn-sm btn-outline copy-tpl" data-tpl="<?php echo htmlspecialchars($t['raw_copy']); ?>" style="flex:1">
            📋 Copy Template
          </button>
          <a class="btn btn-sm btn-primary" href="/auth/register" style="flex:1;text-align:center">
            Use in InboxWa &rarr;
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Meta Guidelines Advice Banner -->
<section class="section section-alt" style="margin-top:2rem;background:#F8FAFC;border-top:1px solid #E2E8F0;padding:3.5rem 0">
  <div class="container" style="max-width:860px">
    <div style="background:#FFFFFF;border:1px solid #E5E7EB;border-radius:18px;padding:2.25rem;box-shadow:0 4px 15px rgba(0,0,0,0.04)">
      <div style="display:flex;gap:1.25rem;align-items:flex-start;flex-wrap:wrap">
        <div style="width:52px;height:52px;border-radius:14px;background:#F5F3FF;color:#7C3AED;display:flex;align-items:center;justify-content:center;font-size:1.75rem;flex-shrink:0">
          💡
        </div>
        <div style="flex:1;min-width:280px">
          <h3 style="font-size:1.25rem;font-weight:800;color:#111827;margin:0 0 0.5rem">Meta Template Approval Guidelines</h3>
          <p style="font-size:0.92rem;color:#4B5563;line-height:1.6;margin:0 0 1rem">
            Meta uses automated machine-learning review for template approvals. To ensure a 99%+ approval rate within 60 seconds, adhere to the following best practices:
          </p>
          <ul style="margin:0;padding-left:1.25rem;font-size:0.88rem;color:#4B5563;line-height:1.6">
            <li><strong>Proper Variable Formatting:</strong> Always ensure variables are sequential (<code>{{1}}</code>, <code>{{2}}</code>) without extra spaces or symbols inside brackets.</li>
            <li><strong>Transparent Opt-Out:</strong> Marketing broadcasts must include clear opt-out instructions (e.g., <em>"Reply STOP to unsubscribe"</em>).</li>
            <li><strong>Match Correct Category:</strong> Submitting a promotional discount as an "Authentication" or "Utility" template will result in an immediate rejection and quality score penalty.</li>
          </ul>
          <div style="margin-top:1.25rem">
            <a href="/resources/documentation/#broadcasts" class="btn btn-sm btn-outline">Read Full Template Documentation &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="/assets/js/resources.js?v=2" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>

