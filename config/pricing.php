<?php
/**
 * InboxWa – Centralized pricing configuration (source of truth)
 * All plan prices in INR. USD derived via INR_TO_USD_RATE.
 */
require_once __DIR__ . '/cms.php';

$customPlans = [];
try {
  $rawPlans = hb_get_pricing_plans();
  if (!empty($rawPlans)) {
    foreach ($rawPlans as $p) {
      $pid = $p['plan_id'];
      $customPlans[$pid] = [
        'id' => $pid,
        'name' => $p['name'],
        'badge' => $p['badge'] ?: null,
        'tagline' => $p['tagline'] ?? '',
        'channels' => json_decode($p['channels_json'] ?: '[]', true) ?: ['WhatsApp'],
        'monthly' => (int)$p['monthly'],
        'yearly' => (int)$p['yearly'],
        'setup_fee_monthly' => (int)($p['setup_fee_monthly'] ?? 0),
        'setup_fee_yearly' => (int)($p['setup_fee_yearly'] ?? 0),
        'cta' => $p['cta_text'] ?: 'Start Free',
        'cta_link' => $p['cta_link'] ?: '/auth/register',
        'features' => json_decode($p['features_json'] ?: '[]', true) ?: []
      ];
    }
  }
} catch (Throwable $e) {}

$defaultPlans = [
    'growth' => [
      'id' => 'growth',
      'name' => 'Growth',
      'badge' => null,
      'tagline' => 'For businesses starting out on WhatsApp',
      'channels' => ['WhatsApp'],
      'monthly' => 1999,
      'yearly' => 19990,
      'setup_fee_monthly' => 2999,
      'setup_fee_yearly' => 0,
      'cta' => 'Start Free',
      'features' => [
        '50,000 contacts & conversations',
        '500 campaigns / month',
        '100 AI prompts',
        '3 team seats',
        'Priority support',
        '25 bot flows',
        '30 tags',
        'WhatsApp channel',
      ],
    ],
    'pro' => [
      'id' => 'pro',
      'name' => 'Pro',
      'badge' => 'MOST POPULAR',
      'tagline' => 'Full power across every channel',
      'channels' => ['WhatsApp', 'Instagram', 'Facebook', 'Telegram'],
      'monthly' => 4999,
      'yearly' => 49990,
      'setup_fee_monthly' => 0,
      'setup_fee_yearly' => 0,
      'cta' => 'Start Free',
      'features' => [
        '100,000 contacts & conversations',
        '2,000 campaigns / month',
        '500 AI prompts',
        '10 team seats',
        'Dedicated support',
        '20 AI calling agent credits',
        '50 bot flows',
        '60 custom fields',
        '60 tags',
        '60 WhatsApp forms',
        '20 appointment bookings',
        '15 Kanban funnels',
        '10 workspaces',
        '500 MB file limit',
        'WhatsApp, Instagram, Facebook, Telegram',
      ],
    ],
    'business' => [
      'id' => 'business',
      'name' => 'Business',
      'badge' => 'BEST VALUE',
      'tagline' => 'Unlimited scale for serious operations',
      'channels' => ['WhatsApp', 'Instagram', 'Facebook', 'Telegram'],
      'monthly' => 7999,
      'yearly' => 76790,
      'setup_fee_monthly' => 0,
      'setup_fee_yearly' => 0,
      'cta' => 'Start Free',
      'features' => [
        'Unlimited contacts & conversations',
        '10,000 campaigns / month',
        '2,000 AI prompts',
        '25 team seats',
        'Dedicated account manager',
        '50 AI calling agent credits',
        '150 bot flows',
        '100 custom fields',
        '100 tags',
        '100 WhatsApp forms',
        '50 appointment bookings',
        '30 Kanban funnels',
        '25 workspaces',
        '1,000 MB file limit',
        'WhatsApp, Instagram, Facebook, Telegram',
      ],
    ],
  ];

$activePlans = !empty($customPlans) ? $customPlans : $defaultPlans;

return [
  'currency_default' => 'INR',
  'INR_TO_USD_RATE' => 0.012,
  'gst_rate' => 0.18,
  'trial_days' => 14,
  'register_url' => '/auth/register',
  'whatsapp' => cms_setting('support_whatsapp', '918050854445'),
  'plans' => $activePlans,
  'comparison' => [
    ['Contacts', '50,000', '100,000', 'Unlimited'],
    ['Conversations', '50,000', '100,000', 'Unlimited'],
    ['Campaigns / month', '500', '2,000', '10,000'],
    ['AI Prompts', '100', '500', '2,000'],
    ['Team Seats', '3', '10', '25'],
    ['Bot Flows', '25', '50', '150'],
    ['Custom Fields', '—', '60', '100'],
    ['Tags', '30', '60', '100'],
    ['WhatsApp Forms', '—', '60', '100'],
    ['AI Calling Agent credits', '—', '20', '50'],
    ['Appointment Bookings', '—', '20', '50'],
    ['Kanban Funnels', '—', '15', '30'],
    ['Workspaces', '—', '10', '25'],
    ['File Limit', '—', '500 MB', '1,000 MB'],
    ['REST API', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'],
    ['Webhook', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'],
    ['Auto Replies', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'],
    ['Analytics', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'],
    ['Priority Support', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'],
    ['Dedicated Account Manager', '<svg class="hb-close-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ff5252" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>', '<svg class="hb-close-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ff5252" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'],
    ['WhatsApp Channel', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'],
    ['Facebook Messenger', '<svg class="hb-close-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ff5252" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'],
    ['Instagram Direct', '<svg class="hb-close-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ff5252" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'],
    ['Telegram Bot', '<svg class="hb-close-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ff5252" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'],
    ['Mobile App', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>', '<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'],
  ],

  'channel_addons' => [
    ['id' => 'instagram', 'name' => 'Add Instagram', 'price' => 799, 'note' => 'Growth plan only'],
    ['id' => 'facebook', 'name' => 'Add Facebook', 'price' => 799, 'note' => 'Growth plan only'],
    ['id' => 'ig_fb_bundle', 'name' => 'Add Both – Bundle', 'price' => 1299, 'note' => 'Growth plan only · Instagram + Facebook'],
  ],

  'capacity_addons' => [
    ['id' => 'contacts_10k', 'name' => '+10,000 contacts', 'price' => 499],
    ['id' => 'campaigns_1k', 'name' => '+1,000 campaigns / month', 'price' => 399],
    ['id' => 'ai_500', 'name' => '+500 AI prompts', 'price' => 599],
    ['id' => 'seats_5', 'name' => '+5 team seats', 'price' => 999],
    ['id' => 'ai_call_5', 'name' => '+5 AI calling agent credits', 'price' => 699],
  ],

  'managed' => [
    'campaign_agent' => [
      'name' => 'Managed Campaign Agent',
      'price' => 3500,
      'description' => 'A dedicated InboxWa agent can help set up and run campaigns. Share requirements at least 6 hours before launch.',
    ],
    'data_marketplace' => [
      'name' => 'Data Marketplace – Industry Contact Databases',
      'price' => null,
      'description' => 'Verified business contact datasets by industry and volume. Pricing on request. Available separately from subscription.',
    ],
  ],
];
