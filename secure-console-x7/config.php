<?php
/**
 * InboxWa Secure Console & Full CMS Database Engine
 * Compatible with local SQLite and serverless /tmp storage
 */
declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function hb_get_db_path(): string {
    $localDir = __DIR__ . "/data";
    if (!is_dir($localDir)) {
        @mkdir($localDir, 0755, true);
    }
    if (is_dir($localDir) && is_writable($localDir)) {
        return $localDir . "/leads.sqlite";
    }

    // Fallback to system /tmp directory for serverless environments
    $tmpDir = sys_get_temp_dir();
    $tmpFile = rtrim($tmpDir, "/\\") . "/inboxwa_cms.sqlite";
    if (!file_exists($tmpFile) && file_exists(__DIR__ . "/data/leads.sqlite")) {
        @copy(__DIR__ . "/data/leads.sqlite", $tmpFile);
    }
    return $tmpFile;
}

function hb_pdo(): PDO {
    static $pdo = null;
    if ($pdo !== null) {
        return $pdo;
    }

    $dbFile = hb_get_db_path();
    
    try {
        $pdo = new PDO("sqlite:" . $dbFile, null, null, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    } catch (Throwable $e) {
        $pdo = new PDO("sqlite::memory:", null, null, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    // 1. Leads table
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS leads (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            type TEXT,
            name TEXT,
            business TEXT,
            email TEXT,
            phone TEXT,
            whatsapp TEXT,
            country TEXT,
            city TEXT,
            product TEXT,
            requirement TEXT,
            message TEXT,
            preferred_date TEXT,
            preferred_time TEXT,
            source_page TEXT,
            referrer TEXT,
            utm_source TEXT,
            utm_medium TEXT,
            utm_campaign TEXT,
            ip TEXT,
            status TEXT DEFAULT 'new',
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        );
    ");

    // 2. Settings table
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS settings (
            key TEXT PRIMARY KEY,
            value TEXT,
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
        );
    ");

    // 3. Site Sections table (Live Site Content Editor)
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS site_sections (
            section TEXT,
            field TEXT,
            value TEXT,
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (section, field)
        );
    ");

    // 4. Posts table (WordPress-style Blog & News)
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS posts (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            title TEXT NOT NULL,
            slug TEXT UNIQUE NOT NULL,
            category TEXT,
            excerpt TEXT,
            content TEXT,
            image TEXT,
            author TEXT DEFAULT 'InboxWa Team',
            status TEXT DEFAULT 'published',
            views INTEGER DEFAULT 0,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
        );
    ");

    // 5. Pricing Plans table
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS pricing_plans (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            plan_id TEXT UNIQUE NOT NULL,
            name TEXT NOT NULL,
            badge TEXT,
            tagline TEXT,
            monthly INTEGER DEFAULT 0,
            yearly INTEGER DEFAULT 0,
            setup_fee_monthly INTEGER DEFAULT 0,
            setup_fee_yearly INTEGER DEFAULT 0,
            cta_text TEXT DEFAULT 'Start Free',
            cta_link TEXT DEFAULT '/auth/register',
            channels_json TEXT,
            features_json TEXT,
            is_popular INTEGER DEFAULT 0,
            sort_order INTEGER DEFAULT 0
        );
    ");

    // 6. Testimonials table
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS testimonials (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT NOT NULL,
            role TEXT,
            company TEXT,
            avatar TEXT,
            rating INTEGER DEFAULT 5,
            quote TEXT NOT NULL,
            sort_order INTEGER DEFAULT 0
        );
    ");

    // 7. FAQs table
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS faqs (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            category TEXT DEFAULT 'general',
            question TEXT NOT NULL,
            answer TEXT NOT NULL,
            sort_order INTEGER DEFAULT 0
        );
    ");

    // 8. Custom Locations table (SEO Landing Pages live override)
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS custom_locations (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            slug TEXT UNIQUE NOT NULL,
            city TEXT NOT NULL,
            country TEXT NOT NULL,
            type TEXT DEFAULT 'city',
            primary_keyword TEXT,
            meta_title TEXT,
            meta_description TEXT,
            hero_title TEXT,
            hero_description TEXT,
            areas_json TEXT,
            content TEXT,
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
        );
    ");

    // Seed default settings if empty
    $stCount = (int)$pdo->query("SELECT COUNT(*) FROM settings")->fetchColumn();
    if ($stCount === 0) {
        $stmt = $pdo->prepare("INSERT INTO settings (key, value) VALUES (?, ?)");
        $defaultSettings = [
            'admin_user' => 'admin',
            'admin_pass' => 'admin123',
            'site_title' => 'InboxWa',
            'site_tagline' => 'WhatsApp Marketing & Automation Platform',
            'support_whatsapp' => '918050854445',
            'phone_number' => '+91 80508 54445',
            'notification_email' => 'mail@inboxwa.com',
            'sales_email' => 'mail@inboxwa.com',
            'support_email' => 'support@inboxwa.com',
            'office_address' => 'InboxWa AI Technologies Pvt Ltd, Bangalore, India',
            'webhook_url' => '',
            'ga_id' => '',
            'meta_pixel_id' => '',
            'custom_header_code' => '',
            'custom_footer_code' => '',
            'announcement_enabled' => '0',
            'announcement_text' => 'Official WhatsApp Business API & AI Chatbots — Start 14-Day Free Trial Today!',
            'announcement_link' => '/auth/register',
            'logo_url' => '/assets/images/logo.png',
            'logo_footer_url' => '/assets/images/logo-footer.png',
            'favicon_url' => '/assets/images/favicon-32x32.png',
            'social_whatsapp' => 'https://wa.me/918050854445',
            'social_facebook' => 'https://facebook.com/inboxwa',
            'social_instagram' => 'https://instagram.com/inboxwa',
            'social_linkedin' => 'https://linkedin.com/company/inboxwa',
            'social_youtube' => '',
            'social_twitter' => ''
        ];
        foreach ($defaultSettings as $k => $v) {
            $stmt->execute([$k, $v]);
        }
    }

    // Seed default site sections if empty
    $secCount = (int)$pdo->query("SELECT COUNT(*) FROM site_sections")->fetchColumn();
    if ($secCount === 0) {
        $secStmt = $pdo->prepare("INSERT INTO site_sections (section, field, value) VALUES (?, ?, ?)");
        $defaultSections = [
            ['hero', 'badge', 'Official WhatsApp Business API · Meta Tech Partner'],
            ['hero', 'headline_prefix', 'WhatsApp Automation Software & '],
            ['hero', 'headline_gradient', 'AI Chatbot'],
            ['hero', 'headline_suffix', ' for Business'],
            ['hero', 'lead', 'Boost engagement, qualify leads, and provide 24/7 support with seamless, AI-powered WhatsApp conversations. Integrate instantly and scale efficiently.'],
            ['hero', 'cta1_text', "Start Automating - It's Free"],
            ['hero', 'cta1_link', '/auth/register'],
            ['hero', 'cta2_text', 'Book a Demo'],
            ['hero', 'cta2_link', '#demo'],
            ['hero', 'float1_val', '+128 Leads'],
            ['hero', 'float1_label', 'Captured today'],
            ['hero', 'float2_val', '24/7 Active'],
            ['hero', 'float2_label', 'AI Chatbot'],
            ['hero', 'float3_val', '99.9%'],
            ['hero', 'float3_label', 'Delivery Rate'],
            ['stats', 'stat1_val', '10M+'],
            ['stats', 'stat1_label', 'Messages delivered'],
            ['stats', 'stat2_val', '99.9%'],
            ['stats', 'stat2_label', 'API uptime'],
            ['stats', 'stat3_val', '24/7'],
            ['stats', 'stat3_label', 'Bot coverage'],
            ['stats', 'stat4_val', '1 inbox'],
            ['stats', 'stat4_label', 'All channels'],
            ['simulator', 'bot_greeting', "👋 Hello! Welcome to InboxWa. How can we help automate your business today?"],
            ['simulator', 'btn1', "🤖 AI Chatbot for Leads"],
            ['simulator', 'btn2', "📢 Broadcast Campaigns"],
            ['simulator', 'btn3', "👥 Shared Team Inbox"],
            ['simulator', 'bot_response', "Great choice! InboxWa equips your team with Official Meta WhatsApp API, visual drag-and-drop flow builder, CRM pipelines, and 24/7 automated qualification."],
            ['cta_banner', 'title', 'Ready to turn customer conversations into revenue?'],
            ['cta_banner', 'lead', 'Join fast-growing companies using InboxWa for WhatsApp marketing, AI automation, and omnichannel support.'],
            ['cta_banner', 'btn_text', 'Start Free 14-Day Trial'],
            ['cta_banner', 'btn_link', '/auth/register']
        ];
        foreach ($defaultSections as $s) {
            $secStmt->execute([$s[0], $s[1], $s[2]]);
        }
    }

    // Seed default pricing plans if empty
    $planCount = (int)$pdo->query("SELECT COUNT(*) FROM pricing_plans")->fetchColumn();
    if ($planCount === 0) {
        $pStmt = $pdo->prepare("INSERT INTO pricing_plans (plan_id, name, badge, tagline, monthly, yearly, setup_fee_monthly, setup_fee_yearly, cta_text, cta_link, channels_json, features_json, is_popular, sort_order) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        $pStmt->execute([
            'growth', 'Growth', '', 'For businesses starting out on WhatsApp',
            1999, 19990, 2999, 0, 'Start Free', '/auth/register',
            json_encode(['WhatsApp']),
            json_encode([
                '50,000 contacts & conversations',
                '500 campaigns / month',
                '100 AI prompts',
                '3 team seats',
                'Priority support',
                '25 bot flows',
                '30 tags',
                'Official WhatsApp channel'
            ]),
            0, 1
        ]);

        $pStmt->execute([
            'pro', 'Pro', 'MOST POPULAR', 'Full power across every channel',
            4999, 49990, 0, 0, 'Start Free', '/auth/register',
            json_encode(['WhatsApp', 'Instagram', 'Facebook', 'Telegram']),
            json_encode([
                '100,000 contacts & conversations',
                '2,000 campaigns / month',
                '500 AI prompts',
                '10 team seats',
                'Dedicated support',
                '20 AI calling agent credits',
                '50 bot flows',
                '60 custom fields & tags',
                '60 WhatsApp forms',
                '20 appointment bookings',
                'WhatsApp, Instagram, Facebook, Telegram'
            ]),
            1, 2
        ]);

        $pStmt->execute([
            'business', 'Business', 'BEST VALUE', 'Unlimited scale for serious operations',
            7999, 76790, 0, 0, 'Start Free', '/auth/register',
            json_encode(['WhatsApp', 'Instagram', 'Facebook', 'Telegram']),
            json_encode([
                'Unlimited contacts & conversations',
                '10,000 campaigns / month',
                '2,000 AI prompts',
                '25 team seats',
                'Dedicated account manager',
                '50 AI calling agent credits',
                '150 bot flows',
                '100 custom fields & tags',
                '100 WhatsApp forms',
                '50 appointment bookings',
                '30 Kanban funnels & 25 workspaces',
                'WhatsApp, Instagram, Facebook, Telegram'
            ]),
            0, 3
        ]);
    }

    // Seed default posts if empty
    $postCount = (int)$pdo->query("SELECT COUNT(*) FROM posts")->fetchColumn();
    if ($postCount === 0) {
        $postsStmt = $pdo->prepare("INSERT INTO posts (title, slug, category, excerpt, content, image, author, status, views, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $seedPosts = [
            [
                'WhatsApp API for Business: Complete Guide',
                'whatsapp-api-guide',
                'Guide',
                'How businesses use Official WhatsApp Business API for support, marketing and sales at scale.',
                "<h2>Introduction to WhatsApp Business API</h2>\n<p>Official WhatsApp Business API enables companies to connect their communication stack directly to over 2.7 billion active WhatsApp users worldwide. Unlike standard personal apps or unofficial web wrappers, the Official Cloud API guarantees high deliverability, verified green-tick branding, and seamless multi-agent team inboxes.</p>\n<h2>Key Advantages for Businesses</h2>\n<ul>\n<li><strong>Shared Team Inboxes:</strong> Multiple agents can answer chats simultaneously from a single company phone number.</li>\n<li><strong>Automated Workflows:</strong> Build interactive chatbot journeys, auto-replies, and customer lead qualification without manual intervention.</li>\n<li><strong>Broadcasts & Notifications:</strong> Send order updates, payment confirmations, and promotional templates with 98% open rates.</li>\n</ul>\n<h2>How InboxWa Helps You Get Started</h2>\n<p>InboxWa provides instant onboarding with official Meta Tech Partner verification, intuitive flow builders, and native CRM integrations so you can start engaging leads in minutes.</p>",
                '/assets/images/home/whatsapp-api.webp',
                'InboxWa Team',
                'published',
                420,
                date('Y-m-d H:i:s', strtotime('-10 days'))
            ],
            [
                'WhatsApp Chatbot Automation for Businesses',
                'whatsapp-chatbot-automation',
                'Automation',
                'Practical architectures for 24/7 customer service and conversational sales without coding.',
                "<h2>The Power of Conversational Automation</h2>\n<p>Customers today expect immediate replies. Waiting hours for an email or agent response results in abandoned purchases and cold leads. Automated chatbots bridge this gap by qualifying requirements instantly 24 hours a day.</p>\n<h2>Designing Your First Flow</h2>\n<p>Start with common queries: product catalog requests, appointment scheduling, and order status tracking. Ensure you always offer an instant hand-off to a live human representative.</p>",
                '/assets/images/home/workflow-ui.webp',
                'InboxWa Team',
                'published',
                380,
                date('Y-m-d H:i:s', strtotime('-8 days'))
            ],
            [
                'WhatsApp CRM: Manage & Qualify Leads Effortlessly',
                'whatsapp-crm-leads',
                'CRM',
                'Organize contacts, track sales pipelines, and prevent prospect leakage inside WhatsApp.',
                "<h2>Why Traditional CRMs Fall Short for Chat</h2>\n<p>Traditional CRMs are built around emails and phone calls. Modern sales cycles happen in fast, interactive WhatsApp threads. InboxWa embeds a full Kanban sales pipeline directly inside your chat workspace.</p>",
                '/assets/images/home/crm-ui.webp',
                'InboxWa Team',
                'published',
                290,
                date('Y-m-d H:i:s', strtotime('-6 days'))
            ],
            [
                'Broadcast vs Traditional Email: The Engagement Revolution',
                'broadcast-vs-traditional',
                'Strategy',
                'Why WhatsApp broadcast campaigns achieve 4x to 8x higher open rates than email marketing.',
                "<h2>Email Fatigue vs WhatsApp Immediacy</h2>\n<p>With average marketing email open rates lingering below 20%, businesses need more direct communication. WhatsApp messages achieve an astonishing 98% open rate, with the vast majority read within the first 5 minutes of delivery.</p>",
                '/assets/images/home/broadcast-ui.webp',
                'InboxWa Team',
                'published',
                310,
                date('Y-m-d H:i:s', strtotime('-5 days'))
            ],
            [
                'E-commerce Customer Support on WhatsApp',
                'ecommerce-support',
                'E-commerce',
                'Recover abandoned carts, send automated dispatch tracking, and drive repeat purchases.',
                "<h2>Recovering Abandoned Carts</h2>\n<p>Automated WhatsApp notifications with 1-click checkout recovery links recover up to 35% of abandoned carts in Shopify and WooCommerce stores.</p>",
                '/assets/images/ecom_cart_recovery_banner.jpg',
                'InboxWa Team',
                'published',
                275,
                date('Y-m-d H:i:s', strtotime('-4 days'))
            ]
        ];
        foreach ($seedPosts as $sp) {
            $postsStmt->execute($sp);
        }
    }

    // Seed default testimonials if empty
    $tCount = (int)$pdo->query("SELECT COUNT(*) FROM testimonials")->fetchColumn();
    if ($tCount === 0) {
        $tStmt = $pdo->prepare("INSERT INTO testimonials (name, role, company, avatar, rating, quote, sort_order) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $seedTestimonials = [
            ['Aditya Singhania', 'Head of Growth', 'Zenith Retail Brands', '', 5, 'Switching to InboxWa increased our lead qualification speed by 300%. The shared team inbox and automated abandoned cart recovery recovered ₹18 Lakhs in the first quarter.', 1],
            ['Priya Natarajan', 'Customer Experience Director', 'CarePulse Health', '', 5, 'Our clinic appointment no-shows dropped from 28% to less than 4% once we automated calendar confirmations and pre-visit reminders over WhatsApp.', 2],
            ['Farhan Al-Zaidi', 'Operations VP', 'Apex Gulf Properties', '', 5, 'Official Meta API verification was seamless. Our sales agents manage over 4,000 property buyer conversations per week smoothly inside one centralized dashboard.', 3]
        ];
        foreach ($seedTestimonials as $st) {
            $tStmt->execute($st);
        }
    }

    // Seed sample leads if empty
    $leadCount = (int)$pdo->query("SELECT COUNT(*) FROM leads")->fetchColumn();
    if ($leadCount === 0) {
        $seedLeads = [
            [
                'demo', 'Rahul Sharma', 'Apex EdTech Solutions', 'rahul.sharma@apexedtech.in', '+91 98765 43210',
                '+91 98765 43210', 'India', 'Bangalore', 'WhatsApp Business API & Flow Builder',
                'Automate student admission leads & course fee reminders',
                'Looking for Official WhatsApp Business API setup with automated drip campaigns for 50,000 monthly leads.',
                '/industries/education/', 'new', date('Y-m-d H:i:s', strtotime('-2 hours'))
            ],
            [
                'contact', 'Sarah Al-Maktoum', 'Gulf Retail Logistics', 'sarah@gulfretail.ae', '+971 50 123 4567',
                '+971 50 123 4567', 'United Arab Emirates', 'Dubai', 'Shared Team Inbox & Shopify Integration',
                'Shopify order updates and abandoned cart recovery',
                'We need Shopify integration with WhatsApp API for automated tracking updates in English and Arabic.',
                '/solutions/shopify/', 'contacted', date('Y-m-d H:i:s', strtotime('-1 day'))
            ],
            [
                'offer', 'Vikram Malhotra', 'Malhotra Real Estate Group', 'vikram@malhotraproperties.com', '+91 99887 76655',
                '+91 99887 76655', 'India', 'Mumbai', 'Real Estate WhatsApp CRM & Business Data',
                'Site visit scheduling and automated brochures',
                'Claiming 30% discount offer for WhatsApp CRM setup and property lead qualification chatbot.',
                '/industries/real-estate/', 'converted', date('Y-m-d H:i:s', strtotime('-2 days'))
            ]
        ];
        $ins = $pdo->prepare("
            INSERT INTO leads (type, name, business, email, phone, whatsapp, country, city, product, requirement, message, source_page, status, created_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");
        foreach ($seedLeads as $l) {
            $ins->execute($l);
        }
    }

    return $pdo;
}

// -------------------------------------------------------------
// Core CMS Accessor & Mutator Functions
// -------------------------------------------------------------

function hb_get_setting(string $key, string $default = ''): string {
    static $cache = [];
    if (isset($cache[$key])) {
        return $cache[$key];
    }
    try {
        $db = hb_pdo();
        $stmt = $db->prepare("SELECT value FROM settings WHERE key = ?");
        $stmt->execute([$key]);
        $val = $stmt->fetchColumn();
        $res = $val !== false ? (string)$val : $default;
        $cache[$key] = $res;
        return $res;
    } catch (Throwable $e) {
        return $default;
    }
}

function hb_set_setting(string $key, string $value): void {
    try {
        $db = hb_pdo();
        $stmt = $db->prepare("INSERT INTO settings (key, value, updated_at) VALUES (?, ?, CURRENT_TIMESTAMP) ON CONFLICT(key) DO UPDATE SET value = excluded.value, updated_at = CURRENT_TIMESTAMP");
        $stmt->execute([$key, $value]);
    } catch (Throwable $e) {
    }
}

function hb_get_section(string $section, string $field, string $default = ''): string {
    static $secCache = [];
    $cacheKey = $section . ':' . $field;
    if (isset($secCache[$cacheKey])) {
        return $secCache[$cacheKey];
    }
    try {
        $db = hb_pdo();
        $stmt = $db->prepare("SELECT value FROM site_sections WHERE section = ? AND field = ?");
        $stmt->execute([$section, $field]);
        $val = $stmt->fetchColumn();
        $res = $val !== false ? (string)$val : $default;
        $secCache[$cacheKey] = $res;
        return $res;
    } catch (Throwable $e) {
        return $default;
    }
}

function hb_set_section(string $section, string $field, string $value): void {
    try {
        $db = hb_pdo();
        $stmt = $db->prepare("INSERT INTO site_sections (section, field, value, updated_at) VALUES (?, ?, ?, CURRENT_TIMESTAMP) ON CONFLICT(section, field) DO UPDATE SET value = excluded.value, updated_at = CURRENT_TIMESTAMP");
        $stmt->execute([$section, $field, $value]);
    } catch (Throwable $e) {
    }
}

function hb_get_posts(int $limit = 0, string $category = '', string $status = 'published'): array {
    try {
        $db = hb_pdo();
        $sql = "SELECT * FROM posts WHERE 1=1";
        $params = [];
        if ($status !== 'all') {
            $sql .= " AND status = ?";
            $params[] = $status;
        }
        if ($category !== '' && $category !== 'all') {
            $sql .= " AND category = ?";
            $params[] = $category;
        }
        $sql .= " ORDER BY id DESC";
        if ($limit > 0) {
            $sql .= " LIMIT " . (int)$limit;
        }
        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    } catch (Throwable $e) {
        return [];
    }
}

function hb_get_post(int|string $idOrSlug): ?array {
    try {
        $db = hb_pdo();
        if (is_numeric($idOrSlug)) {
            $stmt = $db->prepare("SELECT * FROM posts WHERE id = ?");
            $stmt->execute([(int)$idOrSlug]);
        } else {
            $stmt = $db->prepare("SELECT * FROM posts WHERE slug = ?");
            $stmt->execute([(string)$idOrSlug]);
        }
        $row = $stmt->fetch();
        return $row ?: null;
    } catch (Throwable $e) {
        return null;
    }
}

function hb_get_pricing_plans(): array {
    try {
        $db = hb_pdo();
        $stmt = $db->query("SELECT * FROM pricing_plans ORDER BY sort_order ASC, id ASC");
        return $stmt->fetchAll();
    } catch (Throwable $e) {
        return [];
    }
}

function hb_get_testimonials(): array {
    try {
        $db = hb_pdo();
        $stmt = $db->query("SELECT * FROM testimonials ORDER BY sort_order ASC, id ASC");
        return $stmt->fetchAll();
    } catch (Throwable $e) {
        return [];
    }
}

function hb_is_admin_logged_in(): bool {
    return isset($_SESSION['hb_admin_auth']) && $_SESSION['hb_admin_auth'] === true;
}
