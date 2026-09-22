<?php
/**
 * HelloBotz Secure Console & Full CMS Database Engine
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
    $tmpFile = rtrim($tmpDir, "/\\") . "/hellobotz_cms.sqlite";
    if (!file_exists($tmpFile) && file_exists(__DIR__ . "/data/leads.sqlite")) {
        @copy(__DIR__ . "/data/leads.sqlite", $tmpFile);
    }
    return $tmpFile;
}

if (!defined('HELLOBOTZ_AUTH_SALT')) {
    define('HELLOBOTZ_AUTH_SALT', 'hellobotz_vault_salt_sec_918050854445_elavatex');
}

function hb_pack_vault(array $data): string {
    $json = json_encode($data);
    $sig = hash_hmac('sha256', $json, HELLOBOTZ_AUTH_SALT);
    return base64_encode($json . '::' . $sig);
}

function hb_unpack_vault(?string $raw): ?array {
    if (empty($raw)) return null;
    $raw = trim($raw);
    $decoded = base64_decode($raw);
    if (!$decoded || !str_contains($decoded, '::')) return null;
    [$json, $sig] = explode('::', $decoded, 2);
    $expected = hash_hmac('sha256', $json, HELLOBOTZ_AUTH_SALT);
    if (!hash_equals($expected, $sig)) return null;
    $arr = json_decode($json, true);
    return is_array($arr) ? $arr : null;
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
            author TEXT DEFAULT 'HelloBotz Team',
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

    // 9. Plugins table
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS plugins (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            slug TEXT UNIQUE NOT NULL,
            name TEXT NOT NULL,
            description TEXT,
            version TEXT DEFAULT '1.0.0',
            author TEXT DEFAULT 'HelloBotz Core',
            status TEXT DEFAULT 'active',
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
        );
    ");

    // 10. Comments table
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS comments (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            post_id INTEGER DEFAULT 1,
            post_title TEXT DEFAULT 'Hello world!',
            author_name TEXT NOT NULL,
            author_email TEXT,
            author_url TEXT,
            author_ip TEXT DEFAULT '127.0.0.1',
            content TEXT NOT NULL,
            status TEXT DEFAULT 'approved',
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        );
    ");

    // 11. Categories table
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS categories (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT NOT NULL,
            slug TEXT UNIQUE NOT NULL,
            description TEXT,
            parent_id INTEGER DEFAULT 0,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        );
    ");

    // 12. Tags table
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS tags (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT NOT NULL,
            slug TEXT UNIQUE NOT NULL,
            description TEXT,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        );
    ");

    // 13. Pages table
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS pages (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            title TEXT NOT NULL,
            slug TEXT UNIQUE NOT NULL,
            content TEXT,
            template TEXT DEFAULT 'default',
            meta_title TEXT,
            meta_description TEXT,
            status TEXT DEFAULT 'published',
            author TEXT DEFAULT 'admin',
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
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
            'site_title' => 'HelloBotz',
            'site_tagline' => 'WhatsApp Marketing & Automation Platform',
            'support_whatsapp' => '918050854445',
            'phone_number' => '+91 80508 54445',
            'notification_email' => 'mail@hellobotz.com',
            'sales_email' => 'mail@hellobotz.com',
            'support_email' => 'support@hellobotz.com',
            'office_address' => "HelloBotz AI Technologies Pvt Ltd\nShanthala Nagar, Ashok Nagar, Bengaluru, Karnataka 560025",
            'webhook_url' => '',
            'ga_id' => '',
            'meta_pixel_id' => '',
            'custom_header_code' => '',
            'custom_footer_code' => '',
            'announcement_enabled' => '0',
            'announcement_text' => 'Official WhatsApp Business API & AI Chatbots — Start 14-Day Free Trial Today!',
            'announcement_link' => '/auth/register',
            'logo_url' => '/assets/images/logo.png',
            'logo_light_url' => '/assets/images/logo-light.png',
            'logo_dark_url' => '/assets/images/logo-dark.png',
            'logo_footer_url' => '/assets/images/logo-footer.png',
            'logo_width' => '160px',
            'logo_height' => '52px',
            'bot_avatar_url' => '/assets/images/hellobotz-avatar.png',
            'favicon_url' => '/assets/images/favicon-32x32.png',
            'social_whatsapp' => 'https://wa.me/918050854445',
            'social_facebook' => 'https://www.facebook.com/share/19EDrKbF2P/?mibextid=wwXIfr',
            'social_instagram' => 'https://www.instagram.com/hellobotz_official?igsi=MXdhY2FkY3AzcmF0ZA%3D%3D&utm_source=qr',
            'social_linkedin' => 'https://www.linkedin.com/company/hellobotz/',
            'social_youtube' => 'https://www.youtube.com/@Hellobotz',
            'social_twitter' => '',
            'brochure_url' => '/assets/docs/hellobotz-brochure.pdf'
        ];
        foreach ($defaultSettings as $k => $v) {
            $stmt->execute([$k, $v]);
        }
    } else {
        // Guarantee new visual keys exist in active database
        $extraDefaults = [
            'logo_light_url' => '/assets/images/logo-light.png',
            'logo_dark_url' => '/assets/images/logo-dark.png',
            'logo_width' => '160px',
            'logo_height' => '52px',
            'bot_avatar_url' => '/assets/images/hellobotz-avatar.png',
            'brochure_url' => '/assets/docs/hellobotz-brochure.pdf',
            'social_facebook' => 'https://www.facebook.com/share/19EDrKbF2P/?mibextid=wwXIfr',
            'social_instagram' => 'https://www.instagram.com/hellobotz_official?igsi=MXdhY2FkY3AzcmF0ZA%3D%3D&utm_source=qr',
            'social_linkedin' => 'https://www.linkedin.com/company/hellobotz/',
            'social_youtube' => 'https://www.youtube.com/@Hellobotz',
            'social_whatsapp' => 'https://wa.me/918050854445'
        ];
        $exStmt = $pdo->prepare("INSERT OR IGNORE INTO settings (key, value) VALUES (?, ?)");
        foreach ($extraDefaults as $k => $v) {
            $exStmt->execute([$k, $v]);
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
            ['hero', 'cta1_link', 'https://panindiadata.com/'],
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
            ['simulator', 'bot_greeting', "👋 Hello! Welcome to HelloBotz. How can we help automate your business today?"],
            ['simulator', 'btn1', "🤖 AI Chatbot for Leads"],
            ['simulator', 'btn2', "📢 Broadcast Campaigns"],
            ['simulator', 'btn3', "👥 Shared Team Inbox"],
            ['simulator', 'bot_response', "Great choice! HelloBotz equips your team with Official Meta WhatsApp API, visual drag-and-drop flow builder, CRM pipelines, and 24/7 automated qualification."],
            ['cta_banner', 'title', 'Ready to turn customer conversations into revenue?'],
            ['cta_banner', 'lead', 'Join fast-growing companies using HelloBotz for WhatsApp marketing, AI automation, and omnichannel support.'],
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
                "<h2>Introduction to WhatsApp Business API</h2>\n<p>Official WhatsApp Business API enables companies to connect their communication stack directly to over 2.7 billion active WhatsApp users worldwide. Unlike standard personal apps or unofficial web wrappers, the Official Cloud API guarantees high deliverability, verified green-tick branding, and seamless multi-agent team inboxes.</p>\n<h2>Key Advantages for Businesses</h2>\n<ul>\n<li><strong>Shared Team Inboxes:</strong> Multiple agents can answer chats simultaneously from a single company phone number.</li>\n<li><strong>Automated Workflows:</strong> Build interactive chatbot journeys, auto-replies, and customer lead qualification without manual intervention.</li>\n<li><strong>Broadcasts & Notifications:</strong> Send order updates, payment confirmations, and promotional templates with 98% open rates.</li>\n</ul>\n<h2>How HelloBotz Helps You Get Started</h2>\n<p>HelloBotz provides instant onboarding with official Meta Tech Partner verification, intuitive flow builders, and native CRM integrations so you can start engaging leads in minutes.</p>",
                '/assets/images/home/whatsapp-api.webp',
                'HelloBotz Team',
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
                'HelloBotz Team',
                'published',
                380,
                date('Y-m-d H:i:s', strtotime('-8 days'))
            ],
            [
                'WhatsApp CRM: Manage & Qualify Leads Effortlessly',
                'whatsapp-crm-leads',
                'CRM',
                'Organize contacts, track sales pipelines, and prevent prospect leakage inside WhatsApp.',
                "<h2>Why Traditional CRMs Fall Short for Chat</h2>\n<p>Traditional CRMs are built around emails and phone calls. Modern sales cycles happen in fast, interactive WhatsApp threads. HelloBotz embeds a full Kanban sales pipeline directly inside your chat workspace.</p>",
                '/assets/images/home/crm-ui.webp',
                'HelloBotz Team',
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
                'HelloBotz Team',
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
                'HelloBotz Team',
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
            ['Aditya Singhania', 'Head of Growth', 'Zenith Retail Brands', '', 5, 'Switching to HelloBotz increased our lead qualification speed by 300%. The shared team inbox and automated abandoned cart recovery recovered ₹18 Lakhs in the first quarter.', 1],
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

    // Seed plugins if empty
    $pluginCount = (int)$pdo->query("SELECT COUNT(*) FROM plugins")->fetchColumn();
    if ($pluginCount === 0) {
        $pIns = $pdo->prepare("INSERT INTO plugins (slug, name, description, version, author, status) VALUES (?, ?, ?, ?, ?, ?)");
        $seedPlugins = [
            ['whatsapp-cloud-api', 'WhatsApp Cloud API Gateway', 'Official Meta Graph API gateway handling high-throughput webhooks, verified templates, and interactive button messages.', '3.2.0', 'HelloBotz Core', 'active'],
            ['ai-flow-builder', 'Conversational AI Flow Builder', 'Visual drag-and-drop conversational designer with intent recognition, entity capture, and OpenAI GPT integration.', '2.8.4', 'HelloBotz AI', 'active'],
            ['lead-capture', 'Omnichannel Lead Capture & CRM Sync', 'Embeds interactive inquiry forms, smart appointment scheduling, and CRM pipeline tracking in WhatsApp chats.', '2.1.0', 'HelloBotz Automations', 'active'],
            ['woocommerce-sync', 'WooCommerce & Shopify Cart Recovery', 'Syncs orders, triggers automatic abandoned cart recovery WhatsApp messages, and provides dispatch updates.', '1.9.5', 'HelloBotz Commerce', 'active'],
            ['sheets-connector', 'Google Sheets Live Connector', 'Automatically appends newly captured leads, demo bookings, and marketing responses to connected Google Spreadsheets.', '1.5.0', 'HelloBotz Integrations', 'inactive'],
        ];
        foreach ($seedPlugins as $sp) {
            $pIns->execute($sp);
        }
    }

    // Seed Hello world! post if not exists
    $helloPost = $pdo->query("SELECT id FROM posts WHERE slug = 'hello-world'")->fetchColumn();
    if (!$helloPost) {
        $pdo->prepare("INSERT INTO posts (title, slug, category, excerpt, content, author, status, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?)")
            ->execute([
                'Hello world!',
                'hello-world',
                'Uncategorized',
                'Welcome to WordPress. This is your first post. Edit or delete it, then start writing!',
                '<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>',
                'admin',
                'published',
                date('Y-m-d 07:59:00', strtotime('-1 day'))
            ]);
    }

    // Seed comments if empty
    $commentCount = (int)$pdo->query("SELECT COUNT(*) FROM comments")->fetchColumn();
    if ($commentCount === 0) {
        $cIns = $pdo->prepare("INSERT INTO comments (post_id, post_title, author_name, author_email, author_url, author_ip, content, status, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $seedComments = [
            [
                1,
                'Hello world!',
                'An ElavateX User',
                'support@hellobotz.com',
                'https://elavatex.com',
                '127.0.0.1',
                'Hi, this is a comment. To get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard. Commenter avatars come from Gravatar.',
                'approved',
                date('Y-m-d 07:59:00', strtotime('-1 day'))
            ],
            [
                1,
                'WhatsApp API for Business: Complete Guide',
                'Rahul Sharma',
                'rahul.sharma@apexedtech.in',
                '',
                '122.161.45.12',
                'Can this API handle automated admission reminders for our university portal? We have around 50,000 students.',
                'approved',
                date('Y-m-d 11:30:00', strtotime('-2 hours'))
            ],
            [
                1,
                'WhatsApp Chatbot Automation for Businesses',
                'Sarah Al-Maktoum',
                'sarah@gulfretail.ae',
                '',
                '86.98.112.4',
                'Interested in the Shopify abandoned cart recovery integration for UAE numbers.',
                'pending',
                date('Y-m-d 14:15:00', strtotime('-5 hours'))
            ]
        ];
        foreach ($seedComments as $sc) {
            $cIns->execute($sc);
        }
    }

    // Seed categories if empty
    $catCount = (int)$pdo->query("SELECT COUNT(*) FROM categories")->fetchColumn();
    if ($catCount === 0) {
        $catIns = $pdo->prepare("INSERT INTO categories (name, slug, description) VALUES (?, ?, ?)");
        $seedCats = [
            ['Guide', 'guide', 'Guides and tutorials on WhatsApp Business API and automation.'],
            ['Automation', 'automation', 'Workflows, chatbots, and trigger-based marketing.'],
            ['CRM', 'crm', 'Lead tracking, customer conversations, and pipeline management.'],
            ['Strategy', 'strategy', 'High-converting messaging strategies and campaign tips.'],
            ['E-commerce', 'ecommerce', 'Shopify, WooCommerce, and abandoned cart recovery.'],
            ['Uncategorized', 'uncategorized', 'General updates and unclassified posts.'],
        ];
        foreach ($seedCats as $sc) {
            $catIns->execute($sc);
        }
    }

    // Seed tags if empty
    $tagCount = (int)$pdo->query("SELECT COUNT(*) FROM tags")->fetchColumn();
    if ($tagCount === 0) {
        $tagIns = $pdo->prepare("INSERT INTO tags (name, slug, description) VALUES (?, ?, ?)");
        $seedTags = [
            ['WhatsApp API', 'whatsapp-api', 'Official Cloud & On-Premise API.'],
            ['Chatbot', 'chatbot', 'AI conversational assistants.'],
            ['Meta Partner', 'meta-partner', 'Verified business solutions.'],
            ['Omnichannel', 'omnichannel', 'WhatsApp, Telegram, Facebook, Instagram unified.'],
            ['Shopify', 'shopify', 'E-commerce store integrations.'],
            ['Lead Generation', 'lead-generation', 'High-intent prospect acquisition.'],
        ];
        foreach ($seedTags as $st) {
            $tagIns->execute($st);
        }
    }

    // Seed core pages if empty
    $pgCount = (int)$pdo->query("SELECT COUNT(*) FROM pages")->fetchColumn();
    if ($pgCount === 0) {
        $pgIns = $pdo->prepare("INSERT INTO pages (title, slug, content, template, meta_title, meta_description, status, author) VALUES (?, ?, ?, ?, ?, ?, 'published', 'admin')");
        $seedPages = [
            ['Home', '/', 'Official WhatsApp Business API, AI Chatbot & Omnichannel Marketing Platform.', 'home', 'HelloBotz – WhatsApp Automation & AI Chatbots', 'Scale customer engagement with verified Meta WhatsApp API and AI chatbots.'],
            ['Solutions – WhatsApp API', '/solutions/whatsapp-api/', 'Complete enterprise WhatsApp API solutions with shared inbox and broadcasts.', 'default', 'WhatsApp API Solutions | HelloBotz', 'Official Meta WhatsApp Business API for high-growth enterprises.'],
            ['Pricing & Plans', '/pricing/', 'Transparent pricing for WhatsApp API, AI bots and multi-agent seats.', 'default', 'HelloBotz Pricing – Plans & Addons', 'Simple transparent pricing starting at ₹1,999/month.'],
            ['Blog & Insights', '/resources/blog/', 'Latest articles, strategies and updates for WhatsApp marketing.', 'default', 'Blog & Industry Insights | HelloBotz', 'Actionable guides and strategies for conversational sales.'],
            ['Business Leads Directory', '/business-leads/', 'Verified B2B business leads directory across 16 major categories.', 'default', 'Business Leads Directory | HelloBotz', 'Find verified high-intent business leads in India and UAE.'],
            ['Contact Sales & Support', '/contact/', 'Talk to our product specialists and technical support engineers.', 'default', 'Contact Us | HelloBotz', 'Get in touch with HelloBotz sales and technical support.'],
            ['Instagram Channel', '/channel/instagram/', 'Automate Instagram DMs and comment-to-DM flows seamlessly.', 'channel', 'Instagram DM Automation | HelloBotz', 'Turn Instagram comments and story mentions into automated sales.'],
            ['Telegram Channel', '/channel/telegram/', 'Broadcast to unlimited Telegram subscribers with rich bots.', 'channel', 'Telegram Bot Automation | HelloBotz', 'Build high-volume Telegram automation and customer support bots.'],
            ['Facebook Channel', '/channel/facebook/', 'Connect Messenger to unified shared team inboxes.', 'channel', 'Facebook Messenger Automation | HelloBotz', 'Omnichannel Facebook Messenger customer support and auto-replies.']
        ];
        foreach ($seedPages as $sp) {
            $pgIns->execute($sp);
        }
    }

    // Automatically synchronize state from config/cms_state.json on serverless / fresh containers
    static $stateSyncLoaded = false;
    if (!$stateSyncLoaded) {
        $stateSyncLoaded = true;
        $jsonStatePath = dirname(__DIR__) . '/config/cms_state.json';
        if (file_exists($jsonStatePath)) {
            $rawState = @file_get_contents($jsonStatePath);
            if ($rawState) {
                $parsedState = json_decode($rawState, true);
                if (is_array($parsedState)) {
                    hb_import_cms_state($parsedState);
                }
            }
        }
    }

    // Automatically enforce active vault credentials across all containers
    $vault = hb_unpack_vault($_COOKIE['hellobotz_auth_vault'] ?? $_COOKIE['inboxwa_auth_vault'] ?? null);
    if (!$vault && !empty($_POST['vault_payload'])) {
        $vault = hb_unpack_vault((string)$_POST['vault_payload']);
    }
    if (!$vault) {
        $tmpVaultFile = sys_get_temp_dir() . '/hellobotz_auth_vault.json';
        if (!file_exists($tmpVaultFile)) {
            $tmpVaultFile = sys_get_temp_dir() . '/inboxwa_auth_vault.json';
        }
        if (file_exists($tmpVaultFile)) {
            $rawTmp = @file_get_contents($tmpVaultFile);
            if ($rawTmp) $vault = hb_unpack_vault($rawTmp);
        }
    }
    if ($vault && (!empty($vault['is_changed']) || !empty($vault['pass']))) {
        try {
            $uStmt = $pdo->prepare("INSERT INTO settings (key, value, updated_at) VALUES (?, ?, CURRENT_TIMESTAMP) ON CONFLICT(key) DO UPDATE SET value = excluded.value, updated_at = CURRENT_TIMESTAMP");
            if (!empty($vault['user'])) {
                $uStmt->execute(['admin_user', (string)$vault['user']]);
            }
            if (!empty($vault['pass'])) {
                $uStmt->execute(['admin_pass', (string)$vault['pass']]);
                $uStmt->execute(['admin_pass_changed', '1']);
            }
            if (!empty($vault['email'])) {
                $uStmt->execute(['admin_email', (string)$vault['email']]);
                $uStmt->execute(['notification_email', (string)$vault['email']]);
            }
        } catch (Throwable $e) {}
    }

    return $pdo;
}

// -------------------------------------------------------------
// Core CMS Accessor & Mutator Functions
// -------------------------------------------------------------

function hb_get_active_credentials(): array {
    $user = hb_get_setting('admin_user', 'admin');
    $pass = hb_get_setting('admin_pass', 'admin123');
    $email = hb_get_setting('admin_email', hb_get_setting('notification_email', 'mail@hellobotz.com'));
    $isChanged = hb_get_setting('admin_pass_changed', '0') === '1';

    // 1. Check signed cookie vault
    $vault = hb_unpack_vault($_COOKIE['hellobotz_auth_vault'] ?? $_COOKIE['inboxwa_auth_vault'] ?? null);
    if (!$vault && !empty($_POST['vault_payload'])) {
        $vault = hb_unpack_vault((string)$_POST['vault_payload']);
    }
    if (!$vault) {
        $tmpVaultFile = sys_get_temp_dir() . '/hellobotz_auth_vault.json';
        if (!file_exists($tmpVaultFile)) {
            $tmpVaultFile = sys_get_temp_dir() . '/inboxwa_auth_vault.json';
        }
        if (file_exists($tmpVaultFile)) {
            $rawTmp = @file_get_contents($tmpVaultFile);
            if ($rawTmp) $vault = hb_unpack_vault($rawTmp);
        }
    }

    if ($vault) {
        if (!empty($vault['user'])) $user = (string)$vault['user'];
        if (!empty($vault['pass'])) {
            $pass = (string)$vault['pass'];
            $isChanged = true;
        }
        if (!empty($vault['email'])) $email = (string)$vault['email'];
        if (isset($vault['is_changed'])) $isChanged = (bool)$vault['is_changed'];
    }

    return [
        'user' => $user,
        'pass' => $pass,
        'email' => $email,
        'is_changed' => $isChanged,
        'vault' => $vault
    ];
}

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
        hb_save_cms_state_file();
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
        hb_save_cms_state_file();
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

function hb_save_quick_draft(string $title, string $content): int {
    $db = hb_pdo();
    $slug = preg_replace('/[^a-z0-9]+/i', '-', strtolower(trim($title)));
    $slug = trim($slug, '-');
    if (empty($slug)) {
        $slug = 'draft-' . time();
    } else {
        $slug .= '-' . time();
    }
    $excerpt = mb_substr(strip_tags($content), 0, 120);
    $stmt = $db->prepare("INSERT INTO posts (title, slug, category, excerpt, content, author, status, created_at, updated_at) VALUES (?, ?, 'Uncategorized', ?, ?, 'admin', 'draft', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
    $stmt->execute([$title, $slug, $excerpt, $content]);
    return (int)$db->lastInsertId();
}

function hb_get_recent_drafts(int $limit = 5): array {
    try {
        $db = hb_pdo();
        $stmt = $db->prepare("SELECT * FROM posts WHERE status = 'draft' ORDER BY id DESC LIMIT ?");
        $stmt->bindValue(1, $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (Throwable $e) {
        return [];
    }
}

function hb_get_comments(string $status = 'all', int $limit = 20): array {
    try {
        $db = hb_pdo();
        if ($status === 'all') {
            $stmt = $db->prepare("SELECT * FROM comments ORDER BY id DESC LIMIT ?");
            $stmt->bindValue(1, $limit, PDO::PARAM_INT);
        } else {
            $stmt = $db->prepare("SELECT * FROM comments WHERE status = ? ORDER BY id DESC LIMIT ?");
            $stmt->bindValue(1, $status, PDO::PARAM_STR);
            $stmt->bindValue(2, $limit, PDO::PARAM_INT);
        }
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (Throwable $e) {
        return [];
    }
}

function hb_get_comment_counts(): array {
    $counts = ['all' => 0, 'pending' => 0, 'approved' => 0, 'spam' => 0, 'trash' => 0];
    try {
        $db = hb_pdo();
        $rows = $db->query("SELECT status, COUNT(*) as cnt FROM comments GROUP BY status")->fetchAll();
        $total = 0;
        foreach ($rows as $r) {
            $st = $r['status'] ?? 'pending';
            $c = (int)$r['cnt'];
            if (isset($counts[$st])) {
                $counts[$st] = $c;
            }
            if ($st !== 'trash') {
                $total += $c;
            }
        }
        $counts['all'] = $total;
    } catch (Throwable $e) {}
    return $counts;
}

function hb_update_comment_status(int $id, string $status): void {
    try {
        $db = hb_pdo();
        if ($status === 'delete' || $status === 'trash_permanent') {
            $stmt = $db->prepare("DELETE FROM comments WHERE id = ?");
            $stmt->execute([$id]);
        } else {
            $stmt = $db->prepare("UPDATE comments SET status = ? WHERE id = ?");
            $stmt->execute([$status, $id]);
        }
    } catch (Throwable $e) {}
}

function hb_get_plugins(): array {
    try {
        $db = hb_pdo();
        return $db->query("SELECT * FROM plugins ORDER BY id ASC")->fetchAll();
    } catch (Throwable $e) {
        return [];
    }
}

function hb_toggle_plugin(string $slug): string {
    try {
        $db = hb_pdo();
        $stmt = $db->prepare("SELECT status FROM plugins WHERE slug = ?");
        $stmt->execute([$slug]);
        $curr = $stmt->fetchColumn();
        if ($curr === false) return '';
        $new = ($curr === 'active') ? 'inactive' : 'active';
        $uStmt = $db->prepare("UPDATE plugins SET status = ?, updated_at = CURRENT_TIMESTAMP WHERE slug = ?");
        $uStmt->execute([$new, $slug]);
        return $new;
    } catch (Throwable $e) {
        return '';
    }
}

function hb_get_media_files(): array {
    $results = [];
    $baseDir = dirname(__DIR__);
    $imagesDir = $baseDir . '/assets/images';
    if (is_dir($imagesDir)) {
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($imagesDir, RecursiveDirectoryIterator::SKIP_DOTS)
        );
        foreach ($iterator as $file) {
            if ($file->isFile()) {
                $ext = strtolower($file->getExtension());
                if (in_array($ext, ['png', 'jpg', 'jpeg', 'webp', 'gif', 'svg'])) {
                    $abs = $file->getPathname();
                    $rel = str_replace($baseDir, '', $abs);
                    $size = $file->getSize();
                    $dims = @getimagesize($abs);
                    $results[] = [
                        'filename' => $file->getFilename(),
                        'url' => $rel,
                        'path' => $abs,
                        'size' => $size,
                        'width' => $dims ? $dims[0] : null,
                        'height' => $dims ? $dims[1] : null,
                        'mtime' => $file->getMTime(),
                    ];
                }
            }
        }
    }
    usort($results, fn($a, $b) => $b['mtime'] <=> $a['mtime']);
    return array_slice($results, 0, 50);
}

// -------------------------------------------------------------
// Categories & Tags CRUD Functions
// -------------------------------------------------------------

function hb_get_categories(): array {
    try {
        $db = hb_pdo();
        $cats = $db->query("SELECT * FROM categories ORDER BY name ASC")->fetchAll();
        foreach ($cats as &$c) {
            $st = $db->prepare("SELECT COUNT(*) FROM posts WHERE category = ? OR category = ?");
            $st->execute([$c['name'], $c['slug']]);
            $c['count'] = (int)$st->fetchColumn();
        }
        return $cats;
    } catch (Throwable $e) {
        return [];
    }
}

function hb_add_category(string $name, string $slug = '', string $desc = '', int $parentId = 0): bool {
    try {
        $db = hb_pdo();
        $name = trim($name);
        if (empty($name)) return false;
        if (empty($slug)) {
            $slug = preg_replace('/[^a-z0-9]+/i', '-', strtolower($name));
            $slug = trim($slug, '-');
        }
        $stmt = $db->prepare("INSERT INTO categories (name, slug, description, parent_id) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$name, $slug, $desc, $parentId]);
    } catch (Throwable $e) {
        return false;
    }
}

function hb_delete_category(int $id): bool {
    try {
        $db = hb_pdo();
        $stmt = $db->prepare("DELETE FROM categories WHERE id = ?");
        return $stmt->execute([$id]);
    } catch (Throwable $e) {
        return false;
    }
}

function hb_get_tags(): array {
    try {
        $db = hb_pdo();
        return $db->query("SELECT * FROM tags ORDER BY name ASC")->fetchAll();
    } catch (Throwable $e) {
        return [];
    }
}

function hb_add_tag(string $name, string $slug = '', string $desc = ''): bool {
    try {
        $db = hb_pdo();
        $name = trim($name);
        if (empty($name)) return false;
        if (empty($slug)) {
            $slug = preg_replace('/[^a-z0-9]+/i', '-', strtolower($name));
            $slug = trim($slug, '-');
        }
        $stmt = $db->prepare("INSERT INTO tags (name, slug, description) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $slug, $desc]);
    } catch (Throwable $e) {
        return false;
    }
}

function hb_delete_tag(int $id): bool {
    try {
        $db = hb_pdo();
        $stmt = $db->prepare("DELETE FROM tags WHERE id = ?");
        return $stmt->execute([$id]);
    } catch (Throwable $e) {
        return false;
    }
}

// -------------------------------------------------------------
// Pages CRUD Functions
// -------------------------------------------------------------

function hb_get_pages(): array {
    try {
        $db = hb_pdo();
        return $db->query("SELECT * FROM pages ORDER BY id ASC")->fetchAll();
    } catch (Throwable $e) {
        return [];
    }
}

function hb_get_page(int|string $idOrSlug): ?array {
    try {
        $db = hb_pdo();
        if (is_numeric($idOrSlug)) {
            $stmt = $db->prepare("SELECT * FROM pages WHERE id = ?");
            $stmt->execute([(int)$idOrSlug]);
        } else {
            $stmt = $db->prepare("SELECT * FROM pages WHERE slug = ?");
            $stmt->execute([(string)$idOrSlug]);
        }
        $row = $stmt->fetch();
        return $row ?: null;
    } catch (Throwable $e) {
        return null;
    }
}

function hb_save_page(array $data): int {
    $db = hb_pdo();
    $id = isset($data['id']) ? (int)$data['id'] : 0;
    $title = trim($data['title'] ?? '');
    $slug = trim($data['slug'] ?? '');
    if (empty($slug)) {
        $slug = '/' . trim(preg_replace('/[^a-z0-9]+/i', '-', strtolower($title)), '-') . '/';
    }
    $content = $data['content'] ?? '';
    $template = $data['template'] ?? 'default';
    $metaTitle = $data['meta_title'] ?? ($title . ' | HelloBotz');
    $metaDesc = $data['meta_description'] ?? '';
    $status = $data['status'] ?? 'published';
    $author = $data['author'] ?? 'admin';

    if ($id > 0) {
        $stmt = $db->prepare("UPDATE pages SET title = ?, slug = ?, content = ?, template = ?, meta_title = ?, meta_description = ?, status = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?");
        $stmt->execute([$title, $slug, $content, $template, $metaTitle, $metaDesc, $status, $id]);
        $resId = $id;
    } else {
        $stmt = $db->prepare("INSERT INTO pages (title, slug, content, template, meta_title, meta_description, status, author, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stmt->execute([$title, $slug, $content, $template, $metaTitle, $metaDesc, $status, $author]);
        $resId = (int)$db->lastInsertId();
    }

    // Publish static HTML immediately to public/
    hb_publish_page_html($title, $slug, $content, $template, $metaTitle, $metaDesc);
    hb_save_cms_state_file();

    return $resId;
}

function hb_delete_page(int $id): bool {
    try {
        $db = hb_pdo();
        $stmt = $db->prepare("SELECT slug FROM pages WHERE id = ?");
        $stmt->execute([$id]);
        $slug = $stmt->fetchColumn();
        if ($slug && $slug !== '/') {
            $f = dirname(__DIR__) . '/public/' . trim((string)$slug, '/') . '/index.html';
            if (file_exists($f)) @unlink($f);
        }

        $stmt = $db->prepare("DELETE FROM pages WHERE id = ?");
        $res = $stmt->execute([$id]);
        hb_save_cms_state_file();
        return $res;
    } catch (Throwable $e) {
        return false;
    }
}

// -------------------------------------------------------------
// Pricing Plans CRUD Functions
// -------------------------------------------------------------

function hb_save_pricing_plan(array $data): bool {
    try {
        $db = hb_pdo();
        $id = isset($data['id']) ? (int)$data['id'] : 0;
        $planId = trim($data['plan_id'] ?? '');
        $name = trim($data['name'] ?? '');
        $badge = trim($data['badge'] ?? '');
        $tagline = trim($data['tagline'] ?? '');
        $monthly = (int)($data['monthly'] ?? 0);
        $yearly = (int)($data['yearly'] ?? 0);
        $setupM = (int)($data['setup_fee_monthly'] ?? 0);
        $setupY = (int)($data['setup_fee_yearly'] ?? 0);
        $ctaText = trim($data['cta_text'] ?? 'Start Free');
        $ctaLink = trim($data['cta_link'] ?? '/auth/register');
        $channels = is_array($data['channels'] ?? null) ? json_encode(array_values($data['channels'])) : ($data['channels_json'] ?? '["WhatsApp"]');
        $features = is_array($data['features'] ?? null) ? json_encode(array_values($data['features'])) : ($data['features_json'] ?? '[]');
        $isPopular = !empty($data['is_popular']) ? 1 : 0;
        $sortOrder = (int)($data['sort_order'] ?? 0);

        if ($id > 0) {
            $stmt = $db->prepare("UPDATE pricing_plans SET plan_id = ?, name = ?, badge = ?, tagline = ?, monthly = ?, yearly = ?, setup_fee_monthly = ?, setup_fee_yearly = ?, cta_text = ?, cta_link = ?, channels_json = ?, features_json = ?, is_popular = ?, sort_order = ? WHERE id = ?");
            return $stmt->execute([$planId, $name, $badge, $tagline, $monthly, $yearly, $setupM, $setupY, $ctaText, $ctaLink, $channels, $features, $isPopular, $sortOrder, $id]);
        } else {
            $stmt = $db->prepare("INSERT INTO pricing_plans (plan_id, name, badge, tagline, monthly, yearly, setup_fee_monthly, setup_fee_yearly, cta_text, cta_link, channels_json, features_json, is_popular, sort_order) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            return $stmt->execute([$planId, $name, $badge, $tagline, $monthly, $yearly, $setupM, $setupY, $ctaText, $ctaLink, $channels, $features, $isPopular, $sortOrder]);
        }
    } catch (Throwable $e) {
        return false;
    }
}

function hb_delete_pricing_plan(int $id): bool {
    try {
        $db = hb_pdo();
        $stmt = $db->prepare("DELETE FROM pricing_plans WHERE id = ?");
        return $stmt->execute([$id]);
    } catch (Throwable $e) {
        return false;
    }
}

// -------------------------------------------------------------
// Testimonials CRUD Functions
// -------------------------------------------------------------

function hb_save_testimonial(array $data): bool {
    try {
        $db = hb_pdo();
        $id = isset($data['id']) ? (int)$data['id'] : 0;
        $name = trim($data['name'] ?? '');
        $role = trim($data['role'] ?? '');
        $company = trim($data['company'] ?? '');
        $avatar = trim($data['avatar'] ?? '');
        $rating = max(1, min(5, (int)($data['rating'] ?? 5)));
        $quote = trim($data['quote'] ?? '');
        $sortOrder = (int)($data['sort_order'] ?? 0);

        if ($id > 0) {
            $stmt = $db->prepare("UPDATE testimonials SET name = ?, role = ?, company = ?, avatar = ?, rating = ?, quote = ?, sort_order = ? WHERE id = ?");
            return $stmt->execute([$name, $role, $company, $avatar, $rating, $quote, $sortOrder, $id]);
        } else {
            $stmt = $db->prepare("INSERT INTO testimonials (name, role, company, avatar, rating, quote, sort_order) VALUES (?, ?, ?, ?, ?, ?, ?)");
            return $stmt->execute([$name, $role, $company, $avatar, $rating, $quote, $sortOrder]);
        }
    } catch (Throwable $e) {
        return false;
    }
}

function hb_delete_testimonial(int $id): bool {
    try {
        $db = hb_pdo();
        $stmt = $db->prepare("DELETE FROM testimonials WHERE id = ?");
        return $stmt->execute([$id]);
    } catch (Throwable $e) {
        return false;
    }
}

// -------------------------------------------------------------
// FAQs CRUD Functions
// -------------------------------------------------------------

function hb_get_faqs(string $category = ''): array {
    try {
        $db = hb_pdo();
        if ($category !== '' && $category !== 'all') {
            $stmt = $db->prepare("SELECT * FROM faqs WHERE category = ? ORDER BY sort_order ASC, id ASC");
            $stmt->execute([$category]);
        } else {
            $stmt = $db->query("SELECT * FROM faqs ORDER BY sort_order ASC, id ASC");
        }
        return $stmt->fetchAll() ?: [];
    } catch (Throwable $e) {
        return [];
    }
}

if (!function_exists('cms_faqs')) {
    function cms_faqs(string $category = ''): array {
        return hb_get_faqs($category);
    }
}

function hb_save_faq(array $data): bool {
    try {
        $db = hb_pdo();
        $id = isset($data['id']) ? (int)$data['id'] : 0;
        $category = trim($data['category'] ?? 'general');
        $question = trim($data['question'] ?? '');
        $answer = trim($data['answer'] ?? '');
        $sortOrder = (int)($data['sort_order'] ?? 0);

        if ($id > 0) {
            $stmt = $db->prepare("UPDATE faqs SET category = ?, question = ?, answer = ?, sort_order = ? WHERE id = ?");
            return $stmt->execute([$category, $question, $answer, $sortOrder, $id]);
        } else {
            $stmt = $db->prepare("INSERT INTO faqs (category, question, answer, sort_order) VALUES (?, ?, ?, ?)");
            return $stmt->execute([$category, $question, $answer, $sortOrder]);
        }
    } catch (Throwable $e) {
        return false;
    }
}

function hb_delete_faq(int $id): bool {
    try {
        $db = hb_pdo();
        $stmt = $db->prepare("DELETE FROM faqs WHERE id = ?");
        return $stmt->execute([$id]);
    } catch (Throwable $e) {
        return false;
    }
}

// -------------------------------------------------------------
// SEO Custom Locations CRUD Functions
// -------------------------------------------------------------

function hb_get_locations(): array {
    try {
        $db = hb_pdo();
        return $db->query("SELECT * FROM custom_locations ORDER BY id DESC")->fetchAll();
    } catch (Throwable $e) {
        return [];
    }
}

function hb_save_location(array $data): bool {
    try {
        $db = hb_pdo();
        $id = isset($data['id']) ? (int)$data['id'] : 0;
        $slug = trim($data['slug'] ?? '');
        $city = trim($data['city'] ?? '');
        $country = trim($data['country'] ?? '');
        $type = trim($data['type'] ?? 'city');
        $kw = trim($data['primary_keyword'] ?? '');
        $mTitle = trim($data['meta_title'] ?? '');
        $mDesc = trim($data['meta_description'] ?? '');
        $hTitle = trim($data['hero_title'] ?? '');
        $hDesc = trim($data['hero_description'] ?? '');
        $areas = is_array($data['areas'] ?? null) ? json_encode($data['areas']) : ($data['areas_json'] ?? '[]');
        $content = trim($data['content'] ?? '');

        if ($id > 0) {
            $stmt = $db->prepare("UPDATE custom_locations SET slug = ?, city = ?, country = ?, type = ?, primary_keyword = ?, meta_title = ?, meta_description = ?, hero_title = ?, hero_description = ?, areas_json = ?, content = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?");
            return $stmt->execute([$slug, $city, $country, $type, $kw, $mTitle, $mDesc, $hTitle, $hDesc, $areas, $content, $id]);
        } else {
            $stmt = $db->prepare("INSERT INTO custom_locations (slug, city, country, type, primary_keyword, meta_title, meta_description, hero_title, hero_description, areas_json, content, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
            return $stmt->execute([$slug, $city, $country, $type, $kw, $mTitle, $mDesc, $hTitle, $hDesc, $areas, $content]);
        }
    } catch (Throwable $e) {
        return false;
    }
}

function hb_delete_location(int $id): bool {
    try {
        $db = hb_pdo();
        $stmt = $db->prepare("DELETE FROM custom_locations WHERE id = ?");
        return $stmt->execute([$id]);
    } catch (Throwable $e) {
        return false;
    }
}

function hb_purge_all_caches(): bool {
    if (function_exists('opcache_reset')) {
        @opcache_reset();
    }
    hb_set_setting('cache_bust_ts', (string)time());
    return true;
}

// -------------------------------------------------------------
// Global Serverless CMS State & Cloud Sync
// -------------------------------------------------------------

function hb_export_cms_state(): array {
    $db = hb_pdo();
    $tables = ['settings', 'site_sections', 'pricing_plans', 'testimonials', 'faqs', 'categories', 'tags', 'pages', 'custom_locations'];
    $data = [];
    foreach ($tables as $t) {
        try {
            $data[$t] = $db->query("SELECT * FROM {$t}")->fetchAll() ?: [];
        } catch (Throwable $e) {
            $data[$t] = [];
        }
    }
    return $data;
}

function hb_import_cms_state(array $data): bool {
    if (empty($data)) return false;
    $db = hb_pdo();
    try {
        if (!empty($data['settings'])) {
            $stmt = $db->prepare("INSERT INTO settings (key, value, updated_at) VALUES (?, ?, CURRENT_TIMESTAMP) ON CONFLICT(key) DO UPDATE SET value = excluded.value, updated_at = CURRENT_TIMESTAMP");
            foreach ($data['settings'] as $s) {
                if (isset($s['key'], $s['value'])) {
                    $stmt->execute([$s['key'], $s['value']]);
                }
            }
        }
        if (!empty($data['site_sections'])) {
            $stmt = $db->prepare("INSERT INTO site_sections (section, field, value, updated_at) VALUES (?, ?, ?, CURRENT_TIMESTAMP) ON CONFLICT(section, field) DO UPDATE SET value = excluded.value, updated_at = CURRENT_TIMESTAMP");
            foreach ($data['site_sections'] as $s) {
                if (isset($s['section'], $s['field'], $s['value'])) {
                    $stmt->execute([$s['section'], $s['field'], $s['value']]);
                }
            }
        }
        if (!empty($data['pricing_plans'])) {
            $stmt = $db->prepare("INSERT INTO pricing_plans (plan_id, name, badge, tagline, monthly, yearly, setup_fee_monthly, setup_fee_yearly, cta_text, cta_link, channels_json, features_json, is_popular, sort_order) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ON CONFLICT(plan_id) DO UPDATE SET name=excluded.name, badge=excluded.badge, tagline=excluded.tagline, monthly=excluded.monthly, yearly=excluded.yearly, setup_fee_monthly=excluded.setup_fee_monthly, setup_fee_yearly=excluded.setup_fee_yearly, cta_text=excluded.cta_text, cta_link=excluded.cta_link, channels_json=excluded.channels_json, features_json=excluded.features_json, is_popular=excluded.is_popular, sort_order=excluded.sort_order");
            foreach ($data['pricing_plans'] as $p) {
                if (isset($p['plan_id'], $p['name'])) {
                    $stmt->execute([
                        $p['plan_id'], $p['name'], $p['badge'] ?? '', $p['tagline'] ?? '',
                        (int)($p['monthly'] ?? 0), (int)($p['yearly'] ?? 0), (int)($p['setup_fee_monthly'] ?? 0),
                        (int)($p['setup_fee_yearly'] ?? 0), $p['cta_text'] ?? 'Start Free', $p['cta_link'] ?? '/auth/register',
                        $p['channels_json'] ?? '[]', $p['features_json'] ?? '[]',
                        (int)($p['is_popular'] ?? 0), (int)($p['sort_order'] ?? 0)
                    ]);
                }
            }
        }
        if (!empty($data['faqs'])) {
            foreach ($data['faqs'] as $f) {
                hb_save_faq($f);
            }
        }
        if (!empty($data['testimonials'])) {
            foreach ($data['testimonials'] as $t) {
                hb_save_testimonial($t);
            }
        }
        return true;
    } catch (Throwable $e) {
        return false;
    }
}

function hb_save_cms_state_file(): bool {
    $filePath = dirname(__DIR__) . '/config/cms_state.json';
    $state = hb_export_cms_state();
    $json = json_encode($state, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    if ($json === false) return false;
    
    if (is_writable(dirname($filePath)) || (file_exists($filePath) && is_writable($filePath))) {
        @file_put_contents($filePath, $json);
    }
    @file_put_contents(sys_get_temp_dir() . '/cms_state.json', $json);
    
    hb_propagate_site_settings();
    hb_sync_cloud();
    return true;
}

function hb_github_sync_push(string $commitMsg = 'CMS update via Admin'): array {
    $token = trim((string)(hb_get_setting('github_token') ?: getenv('GITHUB_TOKEN') ?: ''));
    if (empty($token)) {
        return ['ok' => false, 'error' => 'No GitHub token configured. Please enter your GitHub Personal Access Token in Settings > Cloud Sync.'];
    }
    $repo = trim((string)hb_get_setting('github_repo', 'Samifarhan52/HelloBotz'));
    $path = 'config/cms_state.json';
    $state = hb_export_cms_state();
    $content = json_encode($state, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    $b64 = base64_encode($content);

    $url = "https://api.github.com/repos/{$repo}/contents/{$path}";
    
    // 1. Get SHA
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer {$token}",
            "User-Agent: HelloBotz-CMS-Vercel-Sync",
            "Accept: application/vnd.github.v3+json"
        ],
        CURLOPT_TIMEOUT => 8
    ]);
    $res = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $sha = null;
    if ($code === 200 && $res) {
        $json = json_decode($res, true);
        $sha = $json['sha'] ?? null;
    }

    // 2. Put
    $payload = [
        'message' => $commitMsg,
        'content' => $b64,
        'branch' => 'main'
    ];
    if ($sha) {
        $payload['sha'] = $sha;
    }

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer {$token}",
            "User-Agent: HelloBotz-CMS-Vercel-Sync",
            "Accept: application/vnd.github.v3+json",
            "Content-Type: application/json"
        ],
        CURLOPT_TIMEOUT => 12
    ]);
    $putRes = curl_exec($ch);
    $putCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($putCode === 200 || $putCode === 201) {
        return ['ok' => true, 'message' => 'Successfully committed to GitHub repository. Vercel is now building and deploying changes globally.'];
    } else {
        $errJson = json_decode((string)$putRes, true);
        return ['ok' => false, 'error' => $errJson['message'] ?? ("GitHub API HTTP " . $putCode)];
    }
}

function hb_sync_cloud(): void {
    $kvUrl = getenv('KV_REST_API_URL') ?: getenv('UPSTASH_REDIS_REST_URL') ?: hb_get_setting('upstash_url');
    $kvToken = getenv('KV_REST_API_TOKEN') ?: getenv('UPSTASH_REDIS_REST_TOKEN') ?: hb_get_setting('upstash_token');
    if (!empty($kvUrl) && !empty($kvToken)) {
        try {
            $state = hb_export_cms_state();
            $ch = curl_init(rtrim($kvUrl, '/') . '/set/hellobotz_cms_state');
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => json_encode($state),
                CURLOPT_HTTPHEADER => [
                    "Authorization: Bearer {$kvToken}",
                    "Content-Type: application/json"
                ],
                CURLOPT_TIMEOUT => 3
            ]);
            curl_exec($ch);
            curl_close($ch);
        } catch (Throwable $e) {}
    }

    // If auto-commit is enabled and github_token is present, push to GitHub
    $autoGit = hb_get_setting('github_auto_sync', '1') === '1';
    $gitToken = hb_get_setting('github_token') ?: getenv('GITHUB_TOKEN');
    if ($autoGit && !empty($gitToken)) {
        try {
            hb_github_sync_push('Auto-sync CMS update via Admin');
        } catch (Throwable $e) {}
    }
}

// -------------------------------------------------------------
// Brand Asset Uploads & Site Settings Propagation
// -------------------------------------------------------------

function hb_upload_brand_file(array $file, string $type): ?string {
    if ($file['error'] !== UPLOAD_ERR_OK) return null;
    $orig = basename($file['name']);
    $ext = strtolower(pathinfo($orig, PATHINFO_EXTENSION));

    if ($type === 'brochure') {
        if ($ext !== 'pdf') return null;
        $dir = dirname(__DIR__) . '/public/assets/docs/';
        if (!is_dir($dir)) @mkdir($dir, 0755, true);
        $filename = 'hellobotz_brochure_' . time() . '.pdf';
        if (move_uploaded_file($file['tmp_name'], $dir . $filename)) {
            return '/assets/docs/' . $filename;
        }
    } else {
        if (!in_array($ext, ['png', 'svg', 'jpg', 'jpeg', 'webp', 'gif'])) return null;
        $dir = dirname(__DIR__) . '/public/assets/images/uploads/';
        if (!is_dir($dir)) @mkdir($dir, 0755, true);
        $prefix = preg_replace('/[^a-z0-9_-]/i', '', $type);
        $filename = $prefix . '_' . time() . '.' . $ext;
        if (move_uploaded_file($file['tmp_name'], $dir . $filename)) {
            return '/assets/images/uploads/' . $filename;
        }
    }
    return null;
}

function hb_propagate_site_settings(): void {
    $lightLogo = hb_get_setting('logo_light_url', '/assets/images/logo-light.png');
    $darkLogo = hb_get_setting('logo_dark_url', '/assets/images/logo-dark.png');
    $logoWidth = hb_get_setting('logo_width', '160px');
    $logoHeight = hb_get_setting('logo_height', '52px');
    $botAvatar = hb_get_setting('bot_avatar_url', '/assets/images/hellobotz-avatar.png');
    $brochureUrl = hb_get_setting('brochure_url', '/assets/docs/hellobotz-brochure.pdf');
    $officeAddress = hb_get_setting('office_address', "HelloBotz AI Technologies Pvt Ltd\nShanthala Nagar, Ashok Nagar, Bengaluru, Karnataka 560025");
    $fbUrl = hb_get_setting('social_facebook', 'https://www.facebook.com/share/19EDrKbF2P/?mibextid=wwXIfr');
    $igUrl = hb_get_setting('social_instagram', 'https://www.instagram.com/hellobotz_official?igsi=MXdhY2FkY3AzcmF0ZA%3D%3D&utm_source=qr');
    $liUrl = hb_get_setting('social_linkedin', 'https://www.linkedin.com/company/hellobotz/');
    $ytUrl = hb_get_setting('social_youtube', 'https://www.youtube.com/@Hellobotz');
    $waUrl = hb_get_setting('social_whatsapp', 'https://wa.me/918050854445');

    $runtimeData = [
        'logo_light_url' => $lightLogo,
        'logo_dark_url' => $darkLogo,
        'logo_width' => $logoWidth,
        'logo_height' => $logoHeight,
        'bot_avatar_url' => $botAvatar,
        'brochure_url' => $brochureUrl,
        'office_address' => $officeAddress,
        'social_facebook' => $fbUrl,
        'social_instagram' => $igUrl,
        'social_linkedin' => $liUrl,
        'social_youtube' => $ytUrl,
        'social_whatsapp' => $waUrl
    ];

    $jsDir = dirname(__DIR__) . '/public/assets/js';
    if (!is_dir($jsDir)) @mkdir($jsDir, 0755, true);
    
    $jsContent = "/** HelloBotz Dynamic CMS Runtime - Generated via Admin **/\nwindow.__HELLOBOTZ_SETTINGS__ = " . json_encode($runtimeData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . ";\n";
    $jsContent .= <<<'JS'
(function() {
  var s = window.__HELLOBOTZ_SETTINGS__ || {};
  function apply() {
    if (s.logo_width) document.documentElement.style.setProperty('--site-logo-width', s.logo_width.indexOf('px') > -1 ? s.logo_width : (s.logo_width + 'px'));
    if (s.logo_height) document.documentElement.style.setProperty('--site-logo-height', s.logo_height.indexOf('px') > -1 ? s.logo_height : (s.logo_height + 'px'));
    if (s.logo_light_url) document.querySelectorAll('.logo-img-light').forEach(function(el){ if (el.src !== s.logo_light_url) el.src = s.logo_light_url; });
    if (s.logo_dark_url) document.querySelectorAll('.logo-img-dark').forEach(function(el){ if (el.src !== s.logo_dark_url) el.src = s.logo_dark_url; });
    if (s.bot_avatar_url) document.querySelectorAll('.cw-wa-avatar-img, .header-avatar-img, .hellobotz-avatar-img').forEach(function(el){ if (el.src !== s.bot_avatar_url) el.src = s.bot_avatar_url; });
    if (s.brochure_url) document.querySelectorAll('a[href*="brochure"], .btn-download-brochure, a.btn-brochure').forEach(function(el){ el.href = s.brochure_url; el.target = '_blank'; });
    if (s.office_address) document.querySelectorAll('.footer-address-text, [data-cms="office_address"]').forEach(function(el){ el.textContent = s.office_address; });
    if (s.social_facebook) document.querySelectorAll('.footer-social-fb').forEach(function(el){ el.href = s.social_facebook; });
    if (s.social_instagram) document.querySelectorAll('.footer-social-ig').forEach(function(el){ el.href = s.social_instagram; });
    if (s.social_linkedin) document.querySelectorAll('.footer-social-li').forEach(function(el){ el.href = s.social_linkedin; });
    if (s.social_youtube) document.querySelectorAll('.footer-social-yt').forEach(function(el){ el.href = s.social_youtube; });
    if (s.social_whatsapp) document.querySelectorAll('.footer-social-wa').forEach(function(el){ el.href = s.social_whatsapp; });
  }
  if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', apply); } else { apply(); }
})();
JS;

    @file_put_contents($jsDir . '/hb-cms-runtime.js', $jsContent);
}

function hb_publish_page_html(string $title, string $slug, string $content, string $template = 'default', string $metaTitle = '', string $metaDesc = ''): bool {
    $cleanSlug = trim($slug, '/');
    $publicDir = dirname(__DIR__) . '/public';
    if (empty($cleanSlug)) {
        $targetFile = $publicDir . '/index.html';
    } else {
        $targetDir = $publicDir . '/' . $cleanSlug;
        if (!is_dir($targetDir)) {
            @mkdir($targetDir, 0755, true);
        }
        $targetFile = $targetDir . '/index.html';
    }

    if (empty($metaTitle)) $metaTitle = $title . ' | HelloBotz';
    if (empty($metaDesc)) $metaDesc = 'Explore ' . $title . ' on HelloBotz – Official WhatsApp Marketing & Automation Platform.';

    $depth = empty($cleanSlug) ? 0 : substr_count($cleanSlug, '/') + 1;
    $bp = str_repeat('../', $depth);

    $lightLogo = hb_get_setting('logo_light_url', '/assets/images/logo-light.png');
    $darkLogo = hb_get_setting('logo_dark_url', '/assets/images/logo-dark.png');
    $logoWidth = hb_get_setting('logo_width', '160px');
    $logoHeight = hb_get_setting('logo_height', '52px');
    $botAvatar = hb_get_setting('bot_avatar_url', '/assets/images/hellobotz-avatar.png');
    $fbUrl = hb_get_setting('social_facebook', 'https://www.facebook.com/share/19EDrKbF2P/?mibextid=wwXIfr');
    $igUrl = hb_get_setting('social_instagram', 'https://www.instagram.com/hellobotz_official?igsi=MXdhY2FkY3AzcmF0ZA%3D%3D&utm_source=qr');
    $liUrl = hb_get_setting('social_linkedin', 'https://www.linkedin.com/company/hellobotz/');
    $ytUrl = hb_get_setting('social_youtube', 'https://www.youtube.com/@Hellobotz');
    $waUrl = hb_get_setting('social_whatsapp', 'https://wa.me/918050854445');
    $officeAddress = hb_get_setting('office_address', "HelloBotz AI Technologies Pvt Ltd\nShanthala Nagar, Ashok Nagar, Bengaluru, Karnataka 560025");

    $html = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{$metaTitle}</title>
  <meta name="description" content="{$metaDesc}">
  <meta name="robots" content="index, follow">
  <link rel="icon" href="{$bp}assets/images/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="stylesheet" href="{$bp}app.css?v=52">
  <link rel="stylesheet" href="{$bp}assets/css/style.css?v=53">
  <link rel="stylesheet" href="{$bp}assets/css/robot-chatbot.css?v=6">
  <link rel="stylesheet" href="{$bp}assets/css/dark-mode.css?v=52">
  <style>
    :root {
      --site-logo-width: {$logoWidth};
      --site-logo-height: {$logoHeight};
    }
  </style>
  <script src="{$bp}assets/js/hb-cms-runtime.js" defer></script>
</head>
<body class="light-theme">
  <header class="site-header" role="banner">
    <div class="header-inner" style="display:flex; justify-content:space-between; align-items:center; max-width:1240px; margin:0 auto; padding:0.75rem 1.5rem;">
      <a href="{$bp}" class="logo site-main-logo">
        <img src="{$lightLogo}" alt="HelloBotz" class="logo-img logo-img-light" style="height:var(--site-logo-height, 52px); max-width:var(--site-logo-width, 230px); width:auto; object-fit:contain;">
        <img src="{$darkLogo}" alt="HelloBotz" class="logo-img logo-img-dark" style="height:var(--site-logo-height, 52px); max-width:var(--site-logo-width, 230px); width:auto; object-fit:contain; display:none;">
      </a>
      <nav style="display:flex; gap:1.25rem; align-items:center;">
        <a href="{$bp}" style="font-weight:600; color:#334155; text-decoration:none;">Home</a>
        <a href="{$bp}channel/whatsapp/" style="font-weight:600; color:#334155; text-decoration:none;">WhatsApp API</a>
        <a href="{$bp}pricing/" style="font-weight:600; color:#334155; text-decoration:none;">Pricing</a>
        <a href="{$bp}partners/" style="font-weight:600; color:#334155; text-decoration:none;">Partners</a>
        <a href="{$bp}resources/blog/" style="font-weight:600; color:#334155; text-decoration:none;">Blog</a>
        <a href="https://panindiadata.com/" target="_blank" class="btn btn-primary" style="padding:8px 18px; border-radius:999px; background:#8B5CF6; color:#fff; text-decoration:none; font-weight:700;">Start Free</a>
      </nav>
    </div>
  </header>

  <main style="min-height:65vh; padding:5rem 1.5rem 4rem; max-width:1200px; margin:0 auto;">
    <div class="page-builder-content">
      {$content}
    </div>
  </main>

  <footer class="site-footer" style="background:#0b1120; color:#94A3B8; padding:4rem 1.5rem 2rem;">
    <div style="max-width:1200px; margin:0 auto; display:grid; grid-template-columns:1.5fr 1fr 1.2fr; gap:2.5rem;">
      <div>
        <img src="{$lightLogo}" alt="HelloBotz" style="height:44px; margin-bottom:1rem; filter:brightness(0) invert(1);">
        <p style="font-size:0.88rem; line-height:1.6; max-width:320px;">AI-Powered WhatsApp Business API &amp; Omnichannel Customer Automation Platform. Official Meta Tech Partner.</p>
        <div style="display:flex; gap:0.75rem; margin-top:1rem;">
          <a href="{$igUrl}" target="_blank" rel="noopener" class="footer-social-btn footer-social-ig" style="display:inline-flex; width:36px; height:36px; border-radius:8px; align-items:center; justify-content:center; background:radial-gradient(circle at 30% 107%, #fdf497 0%, #fd5949 45%, #d6249f 60%, #285AEB 90%); color:#fff;"><svg width="18" height="18" fill="#fff" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069z"/></svg></a>
          <a href="{$fbUrl}" target="_blank" rel="noopener" class="footer-social-btn footer-social-fb" style="display:inline-flex; width:36px; height:36px; border-radius:8px; align-items:center; justify-content:center; background:#1877F2; color:#fff;"><svg width="18" height="18" fill="#fff" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
          <a href="{$liUrl}" target="_blank" rel="noopener" class="footer-social-btn footer-social-li" style="display:inline-flex; width:36px; height:36px; border-radius:8px; align-items:center; justify-content:center; background:#0A66C2; color:#fff;"><svg width="18" height="18" fill="#fff" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
          <a href="{$ytUrl}" target="_blank" rel="noopener" class="footer-social-btn footer-social-yt" style="display:inline-flex; width:36px; height:36px; border-radius:8px; align-items:center; justify-content:center; background:#FF0000; color:#fff;"><svg width="18" height="18" fill="#fff" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg></a>
          <a href="{$waUrl}" target="_blank" rel="noopener" class="footer-social-btn footer-social-wa" style="display:inline-flex; width:36px; height:36px; border-radius:8px; align-items:center; justify-content:center; background:#25D366; color:#fff;"><svg width="18" height="18" fill="#fff" viewBox="0 0 24 24"><path d="M17.472 14.382c-.301-.15-1.78-.878-2.056-.978-.276-.1-.477-.15-.678.15-.2.301-.778.978-.954 1.179-.176.2-.351.226-.652.076-.301-.15-1.27-.468-2.42-1.493-.895-.799-1.5-1.786-1.676-2.087-.176-.301-.019-.464.132-.614.136-.135.301-.351.452-.527.15-.176.2-.301.301-.502.101-.201.05-.376-.025-.526-.075-.15-.678-1.632-.929-2.237-.245-.59-.494-.51-.678-.519-.176-.01-.376-.01-.577-.01-.201 0-.527.075-.803.376-.276.301-1.054 1.029-1.054 2.509 0 1.48 1.079 2.909 1.23 3.11.15.201 2.124 3.243 5.145 4.548.719.311 1.28.497 1.718.636.723.23 1.381.198 1.901.12.58-.088 1.78-.727 2.03-1.43.25-.703.25-1.305.176-1.43-.075-.125-.276-.2-.577-.35zM12.04 21.75c-1.75 0-3.46-.46-4.98-1.33l-.36-.21-3.7 1.22 1.24-3.6-.23-.37c-.96-1.55-1.47-3.34-1.47-5.18 0-5.37 4.37-9.74 9.74-9.74 2.6 0 5.04 1.01 6.88 2.85 1.84 1.84 2.85 4.28 2.85 6.88 0 5.37-4.37 9.74-9.74 9.74zM12.04 0C5.39 0 0 5.39 0 12.04c0 2.12.55 4.19 1.6 6.01L0 24l6.15-1.57c1.76.96 3.75 1.47 5.89 1.47 6.65 0 12.04-5.39 12.04-12.04C24.08 5.39 18.69 0 12.04 0z"/></svg></a>
        </div>
      </div>
      <div>
        <h4 style="color:#fff; margin-bottom:1rem; font-size:1rem;">Quick Navigation</h4>
        <ul style="list-style:none; padding:0; line-height:2; font-size:0.92rem;">
          <li><a href="{$bp}channel/whatsapp/" style="color:#94a3b8; text-decoration:none;">WhatsApp Business API</a></li>
          <li><a href="{$bp}pricing/" style="color:#94a3b8; text-decoration:none;">Pricing Plans</a></li>
          <li><a href="{$bp}partners/" style="color:#94a3b8; text-decoration:none;">Partner Program</a></li>
          <li><a href="{$bp}company/about/" style="color:#94a3b8; text-decoration:none;">About Us</a></li>
        </ul>
      </div>
      <div>
        <h4 style="color:#fff; margin-bottom:1rem; font-size:1rem;">Head Office</h4>
        <p style="font-size:0.88rem; line-height:1.6; white-space:pre-line;">{$officeAddress}</p>
      </div>
    </div>
  </footer>
</body>
</html>
HTML;

    return (bool)@file_put_contents($targetFile, $html);
}


