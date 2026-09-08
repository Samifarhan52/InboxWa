<?php
/**
 * InboxWa WordPress-Style Admin Dashboard & Live Website CMS
 * Full mobile-responsive management system
 */
declare(strict_types=1);

require_once __DIR__ . '/config.php';

$db = hb_pdo();

// Determine Admin URL prefix (/admin/ or /secure-console-x7/)
$requestUri = $_SERVER['REQUEST_URI'] ?? '';
$adminBase = (strpos($requestUri, '/admin') === 0) ? '/admin/' : '/secure-console-x7/';

// Handle Logout
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['hb_admin_auth']);
    header('Location: ' . $adminBase);
    exit;
}

// Handle Login POST
$loginError = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_submit'])) {
    $user = trim($_POST['username'] ?? '');
    $pass = trim($_POST['password'] ?? '');
    
    $expectedUser = hb_get_setting('admin_user', 'admin');
    $expectedPass = hb_get_setting('admin_pass', 'admin123');

    if ($user === $expectedUser && $pass === $expectedPass) {
        $_SESSION['hb_admin_auth'] = true;
        header('Location: ' . $adminBase);
        exit;
    } else {
        $loginError = 'Invalid username or password. Please try again.';
    }
}

// Render Login Page if Not Authenticated
if (!hb_is_admin_logged_in()) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log In &lsaquo; InboxWa Admin &mdash; WordPress</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <style>
            * { box-sizing: border-box; margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif; }
            body { background: #f0f0f1; color: #3c434a; display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 100vh; padding: 1rem; }
            .login-brand { margin-bottom: 1.5rem; text-align: center; }
            .login-brand a { text-decoration: none; color: #1d2327; display: inline-flex; align-items: center; gap: 0.6rem; font-weight: 800; font-size: 1.5rem; }
            .login-brand-icon { width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, #8b5cf6, #06b6d4); display: flex; align-items: center; justify-content: center; color: #fff; box-shadow: 0 8px 20px rgba(139,92,246,0.3); }
            .login-card { background: #fff; border: 1px solid #c3c4c7; box-shadow: 0 1px 3px rgba(0,0,0,0.04); width: 100%; max-width: 360px; padding: 26px 24px; border-radius: 6px; }
            .form-group { margin-bottom: 1.25rem; }
            .form-group label { display: block; font-size: 0.85rem; font-weight: 500; color: #1d2327; margin-bottom: 0.4rem; }
            .form-control { width: 100%; padding: 0.65rem 0.85rem; background: #fff; border: 1px solid #8c8f94; border-radius: 4px; font-size: 0.95rem; color: #2c3338; outline: none; transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
            .form-control:focus { border-color: #2271b1; box-shadow: 0 0 0 1px #2271b1; }
            .btn-submit { width: 100%; padding: 0.7rem; background: #2271b1; border: 1px solid #2271b1; border-radius: 4px; color: #fff; font-weight: 600; font-size: 0.95rem; cursor: pointer; transition: background 0.15s; }
            .btn-submit:hover { background: #135e96; border-color: #135e96; }
            .error-notice { background: #fff; border-left: 4px solid #d63638; box-shadow: 0 1px 1px 0 rgba(0,0,0,.1); padding: 12px; margin-bottom: 1.25rem; font-size: 0.85rem; color: #3c434a; max-width: 360px; width: 100%; }
            .login-footer { margin-top: 1.5rem; text-align: center; font-size: 0.825rem; color: #646970; }
            .login-footer a { color: #2271b1; text-decoration: none; }
            .login-footer a:hover { text-decoration: underline; }
            .default-cred { margin-top: 1.25rem; padding: 0.75rem; background: #f6f7f7; border: 1px solid #dcdcde; border-radius: 4px; font-size: 0.8rem; color: #50575e; text-align: center; }
        </style>
    </head>
    <body>
        <div class="login-brand">
            <a href="/">
                <div class="login-brand-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                </div>
                <span>InboxWa</span>
            </a>
        </div>
        <?php if ($loginError): ?>
            <div class="error-notice"><strong>Error:</strong> <?php echo htmlspecialchars($loginError); ?></div>
        <?php endif; ?>
        <div class="login-card">
            <form method="post" action="">
                <div class="form-group">
                    <label for="username">Username or Email Address</label>
                    <input type="text" id="username" name="username" class="form-control" required autofocus placeholder="admin">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required placeholder="••••••••">
                </div>
                <button type="submit" name="login_submit" class="btn-submit">Log In</button>
            </form>
            <div class="default-cred">
                Default credentials: <code>admin</code> / <code>admin123</code>
            </div>
        </div>
        <div class="login-footer">
            <a href="/">&larr; Go to InboxWa live website</a>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Flash messages
$noticeSuccess = '';
$noticeError = '';

// Current active page
$page = $_GET['page'] ?? 'dashboard';

// Handle POST actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['form_action'] ?? '';

    // Save Hero Section
    if ($action === 'save_hero') {
        hb_set_section('hero', 'badge', trim($_POST['badge'] ?? ''));
        hb_set_section('hero', 'headline_prefix', trim($_POST['headline_prefix'] ?? ''));
        hb_set_section('hero', 'headline_gradient', trim($_POST['headline_gradient'] ?? ''));
        hb_set_section('hero', 'headline_suffix', trim($_POST['headline_suffix'] ?? ''));
        hb_set_section('hero', 'lead', trim($_POST['lead'] ?? ''));
        hb_set_section('hero', 'cta1_text', trim($_POST['cta1_text'] ?? ''));
        hb_set_section('hero', 'cta1_link', trim($_POST['cta1_link'] ?? ''));
        hb_set_section('hero', 'cta2_text', trim($_POST['cta2_text'] ?? ''));
        hb_set_section('hero', 'float1_val', trim($_POST['float1_val'] ?? ''));
        hb_set_section('hero', 'float1_label', trim($_POST['float1_label'] ?? ''));
        hb_set_section('hero', 'float2_val', trim($_POST['float2_val'] ?? ''));
        hb_set_section('hero', 'float2_label', trim($_POST['float2_label'] ?? ''));
        hb_set_section('hero', 'float3_val', trim($_POST['float3_val'] ?? ''));
        hb_set_section('hero', 'float3_label', trim($_POST['float3_label'] ?? ''));
        $noticeSuccess = 'Homepage Hero section updated successfully. Live website updated.';
    }

    // Save Stats Bar
    if ($action === 'save_stats') {
        hb_set_section('stats', 'stat1_val', trim($_POST['stat1_val'] ?? ''));
        hb_set_section('stats', 'stat1_label', trim($_POST['stat1_label'] ?? ''));
        hb_set_section('stats', 'stat2_val', trim($_POST['stat2_val'] ?? ''));
        hb_set_section('stats', 'stat2_label', trim($_POST['stat2_label'] ?? ''));
        hb_set_section('stats', 'stat3_val', trim($_POST['stat3_val'] ?? ''));
        hb_set_section('stats', 'stat3_label', trim($_POST['stat3_label'] ?? ''));
        hb_set_section('stats', 'stat4_val', trim($_POST['stat4_val'] ?? ''));
        hb_set_section('stats', 'stat4_label', trim($_POST['stat4_label'] ?? ''));
        $noticeSuccess = 'Stats Counter Bar updated successfully.';
    }

    // Save Live Chat Simulator
    if ($action === 'save_simulator') {
        hb_set_section('simulator', 'bot_greeting', trim($_POST['bot_greeting'] ?? ''));
        hb_set_section('simulator', 'btn1', trim($_POST['btn1'] ?? ''));
        hb_set_section('simulator', 'btn2', trim($_POST['btn2'] ?? ''));
        hb_set_section('simulator', 'btn3', trim($_POST['btn3'] ?? ''));
        hb_set_section('simulator', 'bot_response', trim($_POST['bot_response'] ?? ''));
        $noticeSuccess = 'WhatsApp Chat Simulator content updated successfully.';
    }

    // Save Announcement Bar
    if ($action === 'save_announcement') {
        hb_set_setting('announcement_enabled', isset($_POST['announcement_enabled']) ? '1' : '0');
        hb_set_setting('announcement_text', trim($_POST['announcement_text'] ?? ''));
        hb_set_setting('announcement_link', trim($_POST['announcement_link'] ?? ''));
        $noticeSuccess = 'Announcement bar settings updated.';
    }

    // Save Bottom CTA Banner
    if ($action === 'save_cta') {
        hb_set_section('cta_banner', 'title', trim($_POST['title'] ?? ''));
        hb_set_section('cta_banner', 'lead', trim($_POST['lead'] ?? ''));
        hb_set_section('cta_banner', 'btn_text', trim($_POST['btn_text'] ?? ''));
        hb_set_section('cta_banner', 'btn_link', trim($_POST['btn_link'] ?? ''));
        $noticeSuccess = 'Bottom CTA banner updated.';
    }

    // Save General / System Settings
    if ($action === 'save_settings') {
        hb_set_setting('site_title', trim($_POST['site_title'] ?? 'InboxWa'));
        hb_set_setting('site_tagline', trim($_POST['site_tagline'] ?? ''));
        hb_set_setting('support_whatsapp', trim($_POST['support_whatsapp'] ?? ''));
        hb_set_setting('phone_number', trim($_POST['phone_number'] ?? ''));
        hb_set_setting('sales_email', trim($_POST['sales_email'] ?? ''));
        hb_set_setting('support_email', trim($_POST['support_email'] ?? ''));
        hb_set_setting('office_address', trim($_POST['office_address'] ?? ''));
        hb_set_setting('webhook_url', trim($_POST['webhook_url'] ?? ''));
        hb_set_setting('ga_id', trim($_POST['ga_id'] ?? ''));
        hb_set_setting('meta_pixel_id', trim($_POST['meta_pixel_id'] ?? ''));
        hb_set_setting('custom_header_code', trim($_POST['custom_header_code'] ?? ''));
        hb_set_setting('custom_footer_code', trim($_POST['custom_footer_code'] ?? ''));
        $noticeSuccess = 'Settings saved successfully.';
    }

    // Save Branding & Appearance
    if ($action === 'save_appearance') {
        hb_set_setting('logo_url', trim($_POST['logo_url'] ?? '/assets/images/logo.png'));
        hb_set_setting('logo_footer_url', trim($_POST['logo_footer_url'] ?? '/assets/images/logo-footer.png'));
        hb_set_setting('favicon_url', trim($_POST['favicon_url'] ?? '/assets/images/favicon-32x32.png'));
        hb_set_setting('social_whatsapp', trim($_POST['social_whatsapp'] ?? ''));
        hb_set_setting('social_facebook', trim($_POST['social_facebook'] ?? ''));
        hb_set_setting('social_instagram', trim($_POST['social_instagram'] ?? ''));
        hb_set_setting('social_linkedin', trim($_POST['social_linkedin'] ?? ''));
        hb_set_setting('social_youtube', trim($_POST['social_youtube'] ?? ''));
        hb_set_setting('social_twitter', trim($_POST['social_twitter'] ?? ''));
        $noticeSuccess = 'Appearance & branding updated successfully.';
    }

    // Change Admin Credentials
    if ($action === 'change_password') {
        $u = trim($_POST['new_username'] ?? '');
        $p = trim($_POST['new_password'] ?? '');
        if (!empty($u) && !empty($p)) {
            hb_set_setting('admin_user', $u);
            hb_set_setting('admin_pass', $p);
            $noticeSuccess = 'Admin username and password updated successfully.';
        } else {
            $noticeError = 'Username and password cannot be empty.';
        }
    }

    // Add Manual Lead
    if ($action === 'add_lead') {
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $phone = trim($_POST['phone'] ?? '');
        $type = trim($_POST['type'] ?? 'contact');
        $biz = trim($_POST['business'] ?? '');
        $req = trim($_POST['requirement'] ?? '');
        $msg = trim($_POST['message'] ?? '');

        if ($name !== '' && ($email !== '' || $phone !== '')) {
            $stmt = $db->prepare("INSERT INTO leads (type, name, business, email, phone, requirement, message, status, source_page) VALUES (?, ?, ?, ?, ?, ?, ?, 'new', 'admin_manual')");
            $stmt->execute([$type, $name, $biz, $email, $phone, $req, $msg]);
            $noticeSuccess = 'New lead added to CRM.';
        } else {
            $noticeError = 'Name and at least email or phone are required.';
        }
    }

    // Add / Edit Blog Post
    if ($action === 'save_post') {
        $postId = (int)($_POST['post_id'] ?? 0);
        $title = trim($_POST['title'] ?? '');
        $slug = preg_replace('/[^a-z0-9\-]/', '', strtolower(str_replace(' ', '-', trim($_POST['slug'] ?? ''))));
        if (empty($slug)) {
            $slug = preg_replace('/[^a-z0-9\-]/', '', strtolower(str_replace(' ', '-', $title)));
        }
        $category = trim($_POST['category'] ?? 'Guide');
        $excerpt = trim($_POST['excerpt'] ?? '');
        $content = trim($_POST['content'] ?? '');
        $author = trim($_POST['author'] ?? 'InboxWa Team');
        $image = trim($_POST['image'] ?? '/assets/images/home/whatsapp-api.webp');
        $status = trim($_POST['status'] ?? 'published');

        if (!empty($title)) {
            if ($postId > 0) {
                $stmt = $db->prepare("UPDATE posts SET title = ?, slug = ?, category = ?, excerpt = ?, content = ?, image = ?, author = ?, status = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?");
                $stmt->execute([$title, $slug, $category, $excerpt, $content, $image, $author, $status, $postId]);
                $noticeSuccess = 'Post updated successfully.';
            } else {
                $stmt = $db->prepare("INSERT INTO posts (title, slug, category, excerpt, content, image, author, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([$title, $slug, $category, $excerpt, $content, $image, $author, $status]);
                $noticeSuccess = 'New blog post published successfully.';
            }
        } else {
            $noticeError = 'Post title is required.';
        }
    }

    // Save Pricing Plan
    if ($action === 'save_plan') {
        $planId = trim($_POST['plan_id'] ?? '');
        $name = trim($_POST['name'] ?? '');
        $badge = trim($_POST['badge'] ?? '');
        $tagline = trim($_POST['tagline'] ?? '');
        $monthly = (int)($_POST['monthly'] ?? 0);
        $yearly = (int)($_POST['yearly'] ?? 0);
        $ctaText = trim($_POST['cta_text'] ?? 'Start Free');
        $ctaLink = trim($_POST['cta_link'] ?? '/auth/register');
        $featuresRaw = trim($_POST['features'] ?? '');
        $featuresArr = array_values(array_filter(array_map('trim', explode("\n", $featuresRaw))));

        if (!empty($planId) && !empty($name)) {
            $stmt = $db->prepare("INSERT INTO pricing_plans (plan_id, name, badge, tagline, monthly, yearly, cta_text, cta_link, features_json) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) ON CONFLICT(plan_id) DO UPDATE SET name=excluded.name, badge=excluded.badge, tagline=excluded.tagline, monthly=excluded.monthly, yearly=excluded.yearly, cta_text=excluded.cta_text, cta_link=excluded.cta_link, features_json=excluded.features_json");
            $stmt->execute([$planId, $name, $badge, $tagline, $monthly, yearly, $ctaText, $ctaLink, json_encode($featuresArr)]);
            $noticeSuccess = 'Pricing plan updated successfully.';
        }
    }

    // Add / Edit Testimonial
    if ($action === 'save_testimonial') {
        $name = trim($_POST['name'] ?? '');
        $role = trim($_POST['role'] ?? '');
        $company = trim($_POST['company'] ?? '');
        $quote = trim($_POST['quote'] ?? '');
        $rating = (int)($_POST['rating'] ?? 5);

        if (!empty($name) && !empty($quote)) {
            $stmt = $db->prepare("INSERT INTO testimonials (name, role, company, rating, quote) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$name, $role, $company, $rating, $quote]);
            $noticeSuccess = 'Testimonial added.';
        }
    }

    // Add / Edit FAQ
    if ($action === 'save_faq') {
        $cat = trim($_POST['category'] ?? 'general');
        $q = trim($_POST['question'] ?? '');
        $a = trim($_POST['answer'] ?? '');

        if (!empty($q) && !empty($a)) {
            $stmt = $db->prepare("INSERT INTO faqs (category, question, answer) VALUES (?, ?, ?)");
            $stmt->execute([$cat, $q, $a]);
            $noticeSuccess = 'FAQ added.';
        }
    }

    // Add / Edit Location
    if ($action === 'save_location') {
        $city = trim($_POST['city'] ?? '');
        $country = trim($_POST['country'] ?? '');
        $type = trim($_POST['type'] ?? 'city');
        $slug = trim($_POST['slug'] ?? '');
        if (empty($slug)) {
            $slug = 'WhatsApp-API-' . str_replace(' ', '-', $city);
        }
        $primaryKeyword = trim($_POST['primary_keyword'] ?? ($city . ' WhatsApp API'));
        $metaTitle = trim($_POST['meta_title'] ?? ($city . ' WhatsApp Business API | InboxWa'));
        $metaDesc = trim($_POST['meta_description'] ?? '');
        $heroTitle = trim($_POST['hero_title'] ?? ('WhatsApp API in ' . $city));
        $heroDesc = trim($_POST['hero_description'] ?? '');
        $areasRaw = trim($_POST['areas'] ?? '');
        $areasArr = array_values(array_filter(array_map('trim', explode(',', $areasRaw))));

        if (!empty($city) && !empty($country)) {
            $stmt = $db->prepare("INSERT INTO custom_locations (slug, city, country, type, primary_keyword, meta_title, meta_description, hero_title, hero_description, areas_json) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ON CONFLICT(slug) DO UPDATE SET city=excluded.city, country=excluded.country, type=excluded.type, primary_keyword=excluded.primary_keyword, meta_title=excluded.meta_title, meta_description=excluded.meta_description, hero_title=excluded.hero_title, hero_description=excluded.hero_description, areas_json=excluded.areas_json, updated_at=CURRENT_TIMESTAMP");
            $stmt->execute([$slug, $city, $country, $type, $primaryKeyword, $metaTitle, $metaDesc, $heroTitle, $heroDesc, json_encode($areasArr)]);
            $noticeSuccess = 'Location page saved. Accessible live on website.';
        }
    }
}

// Handle GET actions
if (isset($_GET['action'])) {
    $act = $_GET['action'];

    // Update Lead Status
    if ($act === 'update_status' && isset($_GET['id'], $_GET['status'])) {
        $id = (int)$_GET['id'];
        $st = preg_replace('/[^a-z_]/', '', strtolower($_GET['status']));
        $stmt = $db->prepare("UPDATE leads SET status = ? WHERE id = ?");
        $stmt->execute([$st, $id]);
        header('Location: ' . $adminBase . '?page=leads');
        exit;
    }

    // Delete Lead
    if ($act === 'delete_lead' && isset($_GET['id'])) {
        $id = (int)$_GET['id'];
        $stmt = $db->prepare("DELETE FROM leads WHERE id = ?");
        $stmt->execute([$id]);
        header('Location: ' . $adminBase . '?page=leads');
        exit;
    }

    // Delete Post
    if ($act === 'delete_post' && isset($_GET['id'])) {
        $id = (int)$_GET['id'];
        $stmt = $db->prepare("DELETE FROM posts WHERE id = ?");
        $stmt->execute([$id]);
        header('Location: ' . $adminBase . '?page=posts');
        exit;
    }

    // Delete Testimonial
    if ($act === 'delete_testimonial' && isset($_GET['id'])) {
        $id = (int)$_GET['id'];
        $stmt = $db->prepare("DELETE FROM testimonials WHERE id = ?");
        $stmt->execute([$id]);
        header('Location: ' . $adminBase . '?page=testimonials');
        exit;
    }

    // Delete FAQ
    if ($act === 'delete_faq' && isset($_GET['id'])) {
        $id = (int)$_GET['id'];
        $stmt = $db->prepare("DELETE FROM faqs WHERE id = ?");
        $stmt->execute([$id]);
        header('Location: ' . $adminBase . '?page=faqs');
        exit;
    }

    // Export Leads (CSV / JSON)
    if ($act === 'export') {
        $format = $_GET['format'] ?? 'csv';
        $stmt = $db->query("SELECT * FROM leads ORDER BY id DESC");
        $allLeads = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($format === 'json') {
            header('Content-Type: application/json; charset=utf-8');
            header('Content-Disposition: attachment; filename=inboxwa_leads_' . date('Y-m-d') . '.json');
            echo json_encode($allLeads, JSON_PRETTY_PRINT);
            exit;
        } else {
            header('Content-Type: text/csv; charset=utf-8');
            header('Content-Disposition: attachment; filename=inboxwa_leads_' . date('Y-m-d') . '.csv');
            $output = fopen('php://output', 'w');
            fputcsv($output, ['ID', 'Type', 'Name', 'Business', 'Email', 'Phone', 'WhatsApp', 'Country', 'City', 'Product', 'Requirement', 'Message', 'Source Page', 'Status', 'Created At']);
            foreach ($allLeads as $row) {
                fputcsv($output, [
                    $row['id'], $row['type'], $row['name'], $row['business'], $row['email'],
                    $row['phone'], $row['whatsapp'], $row['country'], $row['city'], $row['product'],
                    $row['requirement'], $row['message'], $row['source_page'], $row['status'], $row['created_at']
                ]);
            }
            fclose($output);
            exit;
        }
    }
}

// Queries for views
$totalLeads = (int)$db->query("SELECT COUNT(*) FROM leads")->fetchColumn();
$newLeads = (int)$db->query("SELECT COUNT(*) FROM leads WHERE status = 'new'")->fetchColumn();
$convertedLeads = (int)$db->query("SELECT COUNT(*) FROM leads WHERE status = 'converted'")->fetchColumn();
$totalPosts = (int)$db->query("SELECT COUNT(*) FROM posts")->fetchColumn();

// Leads list query with filters
$filterType = $_GET['type'] ?? 'all';
$filterStatus = $_GET['status'] ?? 'all';
$searchQuery = trim($_GET['q'] ?? '');

$sql = "SELECT * FROM leads WHERE 1=1";
$params = [];
if ($filterType !== 'all') {
    $sql .= " AND type = ?";
    $params[] = $filterType;
}
if ($filterStatus !== 'all') {
    $sql .= " AND status = ?";
    $params[] = $filterStatus;
}
if ($searchQuery !== '') {
    $sql .= " AND (name LIKE ? OR email LIKE ? OR phone LIKE ? OR business LIKE ? OR city LIKE ?)";
    $q = '%' . $searchQuery . '%';
    $params = array_merge($params, [$q, $q, $q, $q, $q]);
}
$sql .= " ORDER BY id DESC";
$stmt = $db->prepare($sql);
$stmt->execute($params);
$leads = $stmt->fetchAll();

// All posts
$postsList = hb_get_posts(0, '', 'all');

// All pricing plans
$plansList = hb_get_pricing_plans();

// All testimonials
$testimonialsList = hb_get_testimonials();

// All FAQs
$faqsList = $db->query("SELECT * FROM faqs ORDER BY id DESC")->fetchAll();

// Locations data
$locationsDataFile = dirname(__DIR__) . '/includes/locations-data.php';
$staticLocations = is_file($locationsDataFile) ? require $locationsDataFile : [];
$customLocations = $db->query("SELECT * FROM custom_locations ORDER BY id DESC")->fetchAll();
$allLocationsCount = count($staticLocations) + count($customLocations);

// Current user
$currentAdminUser = hb_get_setting('admin_user', 'admin');
$siteTitle = hb_get_setting('site_title', 'InboxWa');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo ucfirst($page); ?> &lsaquo; <?php echo htmlspecialchars($siteTitle); ?> &mdash; WordPress</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* ==========================================================================
           AUTHENTIC WORDPRESS CORE ADMIN STYLES (MOBILE-FIRST + DESKTOP)
           ========================================================================== */
        :root {
            --wp-admin-theme-color: #2271b1;
            --wp-admin-theme-color--darker-10: #135e96;
            --wp-admin-theme-color--darker-20: #0a4b78;
            --wp-admin-border-color: #c3c4c7;
            --wp-sidebar-width: 170px;
            --wp-bar-height: 32px;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { background: #f0f0f1; color: #3c434a; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif; font-size: 13px; line-height: 1.4em; min-height: 100vh; }
        
        a { color: #2271b1; text-decoration: none; transition: color 0.1s ease-in-out; }
        a:hover { color: #135e96; }

        /* WP Top Admin Bar */
        #wpadminbar { position: fixed; top: 0; left: 0; width: 100%; height: var(--wp-bar-height); background: #1d2327; color: #c3c4c7; z-index: 99999; display: flex; align-items: center; justify-content: space-between; padding: 0 10px; font-size: 13px; }
        .wp-bar-left { display: flex; align-items: center; gap: 8px; }
        .wp-bar-right { display: flex; align-items: center; gap: 12px; }
        .wp-bar-item { display: inline-flex; align-items: center; gap: 5px; height: var(--wp-bar-height); padding: 0 8px; color: #c3c4c7; font-weight: 500; text-decoration: none; }
        .wp-bar-item:hover { background: #2c3338; color: #72aee6; }
        .wp-bar-logo { display: inline-flex; align-items: center; justify-content: center; width: 22px; height: 22px; border-radius: 4px; background: linear-gradient(135deg, #8b5cf6, #06b6d4); color: #fff; }
        .wp-bar-btn { background: #2271b1; color: #fff; padding: 2px 8px; border-radius: 3px; font-size: 11px; font-weight: 600; text-decoration: none; }
        .wp-bar-btn:hover { background: #135e96; color: #fff; }
        
        .mobile-hamburger { display: none; background: transparent; border: none; color: #fff; padding: 6px; cursor: pointer; border-radius: 4px; }
        .mobile-hamburger:hover { background: #2c3338; }

        /* Layout Container */
        #wpwrap { display: flex; min-height: calc(100vh - var(--wp-bar-height)); margin-top: var(--wp-bar-height); position: relative; }

        /* WP Sidebar Navigation */
        #adminmenuback, #adminmenuwrap { width: var(--wp-sidebar-width); background: #1d2327; flex-shrink: 0; z-index: 9999; }
        #adminmenu { list-style: none; margin: 0; padding: 0; }
        .menu-top { position: relative; }
        .menu-top a.menu-link { display: flex; align-items: center; gap: 10px; padding: 9px 12px; color: #f0f0f1; font-size: 14px; font-weight: 400; text-decoration: none; border-left: 4px solid transparent; transition: all 0.1s; }
        .menu-top a.menu-link:hover { background: #135e96; color: #fff; border-left-color: #72aee6; }
        .menu-top.current a.menu-link { background: #2271b1; color: #fff; border-left-color: #72aee6; font-weight: 600; }
        .menu-icon { width: 18px; height: 18px; fill: currentColor; opacity: 0.85; flex-shrink: 0; }
        .menu-top:hover .menu-icon, .menu-top.current .menu-icon { opacity: 1; }
        .menu-badge { margin-left: auto; background: #d63638; color: #fff; font-size: 10px; font-weight: 700; padding: 1px 6px; border-radius: 10px; }
        .menu-separator { height: 1px; background: #2c3338; margin: 6px 0; }

        /* Main Body Content */
        #wpcontent { flex: 1; padding: 20px 24px 40px; min-width: 0; background: #f0f0f1; }
        .wrap { max-width: 1200px; margin: 0 auto; }
        .wp-heading-inline { font-size: 23px; font-weight: 400; color: #1d2327; margin: 0 8px 16px 0; display: inline-block; }
        .page-title-action { display: inline-block; text-decoration: none; font-size: 13px; line-height: 2.15384615; min-height: 30px; margin: 0; padding: 0 10px; cursor: pointer; border: 1px solid #2271b1; border-radius: 3px; background: #f6f7f7; color: #2271b1; vertical-align: top; font-weight: 600; }
        .page-title-action:hover { background: #f0f0f1; border-color: #0a4b78; color: #0a4b78; }

        /* Notices */
        .notice { background: #fff; border: 1px solid #c3c4c7; border-left-width: 4px; box-shadow: 0 1px 1px rgba(0,0,0,.04); margin: 15px 0 20px; padding: 10px 14px; font-size: 13px; border-radius: 2px; }
        .notice-success { border-left-color: #00a32a; }
        .notice-error { border-left-color: #d63638; }

        /* Dashboard Overview Grid */
        .wp-stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-bottom: 20px; }
        .stat-box { background: #fff; border: 1px solid #c3c4c7; padding: 16px; border-radius: 4px; box-shadow: 0 1px 2px rgba(0,0,0,0.03); }
        .stat-box-title { font-size: 11px; text-transform: uppercase; font-weight: 600; color: #646970; letter-spacing: 0.5px; margin-bottom: 6px; }
        .stat-box-number { font-size: 28px; font-weight: 700; color: #1d2327; }
        .stat-box-meta { font-size: 11px; color: #8c8f94; margin-top: 4px; }

        /* Postboxes & Panels */
        .postbox { background: #fff; border: 1px solid #c3c4c7; box-shadow: 0 1px 1px rgba(0,0,0,.04); border-radius: 4px; margin-bottom: 20px; }
        .postbox-header { padding: 12px 16px; border-bottom: 1px solid #c3c4c7; background: #fff; border-top-left-radius: 4px; border-top-right-radius: 4px; }
        .postbox-header h2 { font-size: 14px; font-weight: 600; color: #1d2327; margin: 0; display: flex; align-items: center; gap: 8px; }
        .postbox-content { padding: 16px; }

        /* 2-Column Grid */
        .grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 20px; }

        /* Forms & Inputs */
        .form-table { width: 100%; border-collapse: collapse; margin-top: 0.5em; }
        .form-table th { width: 220px; padding: 16px 10px 16px 0; vertical-align: top; text-align: left; font-weight: 600; font-size: 13px; color: #1d2327; }
        .form-table td { padding: 12px 10px 12px 0; vertical-align: top; }
        .regular-text { width: 100%; max-width: 420px; padding: 0 8px; line-height: 2; min-height: 32px; border: 1px solid #8c8f94; border-radius: 4px; font-size: 13px; color: #2c3338; outline: none; }
        .large-text { width: 100%; padding: 0 8px; line-height: 2; min-height: 32px; border: 1px solid #8c8f94; border-radius: 4px; font-size: 13px; color: #2c3338; outline: none; }
        textarea.large-text { padding: 8px; min-height: 90px; line-height: 1.5; font-family: inherit; }
        .regular-text:focus, .large-text:focus, select.regular-text:focus { border-color: #2271b1; box-shadow: 0 0 0 1px #2271b1; }
        .description { font-size: 12px; color: #646970; margin-top: 4px; font-style: italic; }

        /* Buttons */
        .button { display: inline-block; text-decoration: none; font-size: 13px; line-height: 2.15384615; min-height: 32px; margin: 0; padding: 0 12px; cursor: pointer; border: 1px solid #2271b1; border-radius: 3px; background: #f6f7f7; color: #2271b1; font-weight: 600; transition: all 0.15s; vertical-align: middle; }
        .button:hover { background: #f0f0f1; border-color: #0a4b78; color: #0a4b78; }
        .button-primary { background: #2271b1; border-color: #2271b1; color: #fff; }
        .button-primary:hover { background: #135e96; border-color: #135e96; color: #fff; }
        .button-danger { border-color: #d63638; color: #d63638; }
        .button-danger:hover { background: #d63638; color: #fff; }
        .button-small { min-height: 26px; line-height: 2; font-size: 12px; padding: 0 8px; }

        /* WP List Tables */
        .wp-table-responsive { width: 100%; overflow-x: auto; background: #fff; border: 1px solid #c3c4c7; box-shadow: 0 1px 1px rgba(0,0,0,.04); border-radius: 4px; margin: 16px 0; -webkit-overflow-scrolling: touch; }
        .wp-list-table { width: 100%; border-collapse: collapse; text-align: left; font-size: 13px; }
        .wp-list-table th { background: #f6f7f7; padding: 10px 12px; font-weight: 600; color: #2c3338; border-bottom: 1px solid #c3c4c7; }
        .wp-list-table td { padding: 12px; border-bottom: 1px solid #f0f0f1; vertical-align: middle; }
        .wp-list-table tr:last-child td { border-bottom: none; }
        .wp-list-table tr:hover td { background: #f9f9f9; }

        /* Badges */
        .badge { display: inline-block; padding: 2px 8px; border-radius: 12px; font-size: 11px; font-weight: 600; text-transform: uppercase; }
        .badge-new { background: #e7f5ff; color: #1971c2; }
        .badge-contacted { background: #fff9db; color: #f59f00; }
        .badge-converted { background: #ebfbee; color: #2f9e44; }
        .badge-lost { background: #ffe3e3; color: #e03131; }
        .badge-type { background: #f1f3f5; color: #495057; border: 1px solid #dee2e6; }

        /* Modals */
        .wp-modal { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.6); z-index: 100000; display: flex; align-items: center; justify-content: center; padding: 15px; }
        .wp-modal[hidden] { display: none !important; }
        .wp-modal-dialog { background: #fff; border-radius: 6px; width: 100%; max-width: 650px; max-height: 90vh; overflow-y: auto; box-shadow: 0 10px 25px rgba(0,0,0,0.3); padding: 24px; position: relative; }
        .wp-modal-close { position: absolute; top: 16px; right: 16px; background: transparent; border: none; font-size: 20px; line-height: 1; cursor: pointer; color: #8c8f94; }
        .wp-modal-close:hover { color: #1d2327; }

        /* Tabs inside editor */
        .subsubsub { list-style: none; margin: 12px 0; padding: 0; font-size: 13px; color: #646970; display: flex; flex-wrap: wrap; gap: 8px; }
        .subsubsub li a { padding: 4px 10px; border-radius: 4px; background: #fff; border: 1px solid #c3c4c7; color: #3c434a; font-weight: 500; }
        .subsubsub li a.current { background: #2271b1; color: #fff; border-color: #2271b1; }

        /* Backdrop for mobile drawer */
        #wp-backdrop { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 9998; }

        /* ==========================================================================
           MOBILE RESPONSIVENESS (< 782px WordPress Standard Breakpoint)
           ========================================================================== */
        @media screen and (max-width: 782px) {
            :root {
                --wp-bar-height: 46px;
                --wp-sidebar-width: 240px;
            }

            body { font-size: 14px; }
            #wpadminbar { height: var(--wp-bar-height); padding: 0 12px; }
            .mobile-hamburger { display: inline-flex; align-items: center; justify-content: center; }
            
            #adminmenuback, #adminmenuwrap {
                position: fixed;
                top: var(--wp-bar-height);
                left: 0;
                bottom: 0;
                height: calc(100vh - var(--wp-bar-height));
                transform: translateX(-100%);
                transition: transform 0.25s cubic-bezier(0.4, 0, 0.2, 1);
                overflow-y: auto;
                box-shadow: 4px 0 15px rgba(0,0,0,0.3);
            }

            body.wp-mobile-menu-open #adminmenuback,
            body.wp-mobile-menu-open #adminmenuwrap {
                transform: translateX(0);
            }

            body.wp-mobile-menu-open #wp-backdrop {
                display: block;
            }

            #wpcontent { padding: 16px 12px; width: 100%; }
            .wrap { width: 100%; }

            .grid-2 { grid-template-columns: 1fr; }
            .form-table th, .form-table td { display: block; width: 100%; padding: 6px 0; }
            .regular-text, .large-text { max-width: 100%; font-size: 16px; min-height: 44px; padding: 8px 12px; }
            textarea.large-text { font-size: 16px; min-height: 120px; }
            .button, .page-title-action { min-height: 40px; line-height: 2.8; font-size: 14px; padding: 0 16px; }

            .wp-list-table th, .wp-list-table td { padding: 8px 10px; font-size: 12px; }
            .wp-stats-grid { grid-template-columns: 1fr 1fr; gap: 10px; }
            .stat-box-number { font-size: 24px; }
        }

        @media screen and (max-width: 480px) {
            .wp-stats-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <!-- Top Admin Bar -->
    <div id="wpadminbar">
        <div class="wp-bar-left">
            <button type="button" class="mobile-hamburger" id="mobile-menu-toggle" aria-label="Toggle navigation menu">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
            </button>
            <a href="<?php echo $adminBase; ?>" class="wp-bar-item">
                <span class="wp-bar-logo">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                </span>
                <span><strong>InboxWa</strong> CMS</span>
            </a>
            <a href="/" target="_blank" class="wp-bar-item" title="View live website">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                <span>Visit Site</span>
            </a>
        </div>
        <div class="wp-bar-right">
            <span class="wp-bar-item" style="color:#94a3b8">Howdy, <strong><?php echo htmlspecialchars($currentAdminUser); ?></strong></span>
            <a href="<?php echo $adminBase; ?>?page=leads&action=open_add_lead" class="wp-bar-btn">+ New Lead</a>
            <a href="<?php echo $adminBase; ?>?action=logout" class="wp-bar-item" style="color:#f87171" onclick="return confirm('Log out of admin console?')">Log Out</a>
        </div>
    </div>

    <div id="wpwrap">
        <!-- Backdrop for mobile drawer -->
        <div id="wp-backdrop"></div>

        <!-- Left Admin Navigation Menu -->
        <div id="adminmenuback"></div>
        <div id="adminmenuwrap">
            <ul id="adminmenu">
                <li class="menu-top <?php echo $page === 'dashboard' ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=dashboard" class="menu-link">
                        <svg class="menu-icon" viewBox="0 0 24 24"><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/></svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-top <?php echo $page === 'editor' ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=editor" class="menu-link">
                        <svg class="menu-icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                        <span>Live Site Editor</span>
                    </a>
                </li>
                <li class="menu-top <?php echo $page === 'pages' ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=pages" class="menu-link">
                        <svg class="menu-icon" viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                        <span>Pages &amp; SEO</span>
                    </a>
                </li>
                <li class="menu-top <?php echo $page === 'posts' ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=posts" class="menu-link">
                        <svg class="menu-icon" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                        <span>Posts (Blog)</span>
                        <span class="menu-badge" style="background:#2271b1"><?php echo $totalPosts; ?></span>
                    </a>
                </li>
                <li class="menu-top <?php echo $page === 'pricing' ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=pricing" class="menu-link">
                        <svg class="menu-icon" viewBox="0 0 24 24"><path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58.55 0 1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41 0-.55-.23-1.06-.59-1.42zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z"/></svg>
                        <span>Pricing Plans</span>
                    </a>
                </li>
                <li class="menu-top <?php echo $page === 'locations' ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=locations" class="menu-link">
                        <svg class="menu-icon" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        <span>SEO Locations</span>
                        <span class="menu-badge" style="background:#646970"><?php echo $allLocationsCount; ?></span>
                    </a>
                </li>
                <li class="menu-top <?php echo $page === 'testimonials' ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=testimonials" class="menu-link">
                        <svg class="menu-icon" viewBox="0 0 24 24"><path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z"/></svg>
                        <span>Testimonials</span>
                    </a>
                </li>
                <li class="menu-top <?php echo $page === 'faqs' ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=faqs" class="menu-link">
                        <svg class="menu-icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 16h-2v-2h2v2zm1.07-7.75l-.9.92C12.45 11.9 12 12.5 12 14h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H7c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.04-.42 1.99-1.07 2.75z"/></svg>
                        <span>FAQs</span>
                    </a>
                </li>
                <li class="menu-separator"></li>
                <li class="menu-top <?php echo $page === 'leads' ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=leads" class="menu-link">
                        <svg class="menu-icon" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                        <span>Leads (CRM)</span>
                        <?php if ($newLeads > 0): ?>
                            <span class="menu-badge"><?php echo $newLeads; ?></span>
                        <?php endif; ?>
                    </a>
                </li>
                <li class="menu-top <?php echo $page === 'appearance' ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=appearance" class="menu-link">
                        <svg class="menu-icon" viewBox="0 0 24 24"><path d="M12 3c-4.97 0-9 4.03-9 9 0 2.12.74 4.07 1.97 5.61L4.35 19.4c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l1.9-1.9C9.22 19.59 10.56 20 12 20c4.97 0 9-4.03 9-9s-4.03-9-9-9zm0 15c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6z"/></svg>
                        <span>Appearance</span>
                    </a>
                </li>
                <li class="menu-top <?php echo $page === 'settings' ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=settings" class="menu-link">
                        <svg class="menu-icon" viewBox="0 0 24 24"><path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Body Workspace -->
        <div id="wpcontent">
            <div class="wrap">
                <?php if ($noticeSuccess): ?>
                    <div class="notice notice-success is-dismissible" style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;background:#f0fdf4;border-left:4px solid #16a34a;border-radius:4px;margin-bottom:18px;box-shadow:0 1px 3px rgba(0,0,0,0.05);transition:all 0.4s ease;">
                        <span style="font-weight:600;color:#15803d;display:flex;align-items:center;gap:6px;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> <?php echo htmlspecialchars($noticeSuccess); ?></span>
                        <button type="button" onclick="this.closest('.notice').remove();" style="background:none;border:none;color:#15803d;font-size:18px;cursor:pointer;padding:0 6px;line-height:1;" aria-label="Dismiss">&times;</button>
                    </div>
                <?php endif; ?>
                <?php if ($noticeError): ?>
                    <div class="notice notice-error is-dismissible" style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;background:#fef2f2;border-left:4px solid #dc2626;border-radius:4px;margin-bottom:18px;box-shadow:0 1px 3px rgba(0,0,0,0.05);transition:all 0.4s ease;">
                        <span style="font-weight:600;color:#b91c1c;display:flex;align-items:center;gap:6px;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg> <?php echo htmlspecialchars($noticeError); ?></span>
                        <button type="button" onclick="this.closest('.notice').remove();" style="background:none;border:none;color:#b91c1c;font-size:18px;cursor:pointer;padding:0 6px;line-height:1;" aria-label="Dismiss">&times;</button>
                    </div>
                <?php endif; ?>

                <?php if ($noticeSuccess || $noticeError): ?>
                <script>
                (function(){
                    setTimeout(function(){
                        var notices = document.querySelectorAll('.notice');
                        notices.forEach(function(el){
                            el.style.maxHeight = el.scrollHeight + 'px';
                            el.style.boxSizing = 'border-box';
                            el.offsetHeight; // force reflow
                            el.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
                            el.style.opacity = '0';
                            el.style.maxHeight = '0px';
                            el.style.marginTop = '0px';
                            el.style.marginBottom = '0px';
                            el.style.paddingTop = '0px';
                            el.style.paddingBottom = '0px';
                            el.style.borderWidth = '0px';
                            el.style.overflow = 'hidden';
                            setTimeout(function(){ if(el && el.parentNode) el.parentNode.removeChild(el); }, 400);
                        });
                    }, 2000);
                })();
                </script>
                <?php endif; ?>

                <?php
                // -------------------------------------------------------------
                // 1. DASHBOARD OVERVIEW SCREEN
                // -------------------------------------------------------------
                if ($page === 'dashboard'): ?>
                    <h1 class="wp-heading-inline">Dashboard</h1>
                    
                    <div class="postbox" style="background: linear-gradient(135deg, #1d2327 0%, #2c3338 100%); color: #fff; border: none; margin-top: 10px;">
                        <div class="postbox-content" style="padding: 24px;">
                            <h2 style="color: #fff; font-size: 20px; font-weight: 700; margin-bottom: 6px;">Welcome to InboxWa Management Console</h2>
                            <p style="color: #c3c4c7; font-size: 14px; max-width: 680px; line-height: 1.6;">
                                Manage live website content, blog posts, pricing plans, SEO location landing pages, and inbound prospect leads in real time without writing any code.
                            </p>
                            <div style="margin-top: 16px; display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="<?php echo $adminBase; ?>?page=editor" class="button button-primary">Customize Live Site &rarr;</a>
                                <a href="<?php echo $adminBase; ?>?page=posts&action=new" class="button button-secondary">Write a Blog Post</a>
                                <a href="<?php echo $adminBase; ?>?page=leads" class="button button-secondary">View Leads (<?php echo $newLeads; ?> New)</a>
                                <a href="/" target="_blank" class="button button-secondary">View Live Website ↗</a>
                            </div>
                        </div>
                    </div>

                    <div class="wp-stats-grid">
                        <div class="stat-box" style="border-left: 4px solid #2271b1;">
                            <div class="stat-box-title">Total Inquiries</div>
                            <div class="stat-box-number"><?php echo $totalLeads; ?></div>
                            <div class="stat-box-meta">From contact, demo &amp; offer forms</div>
                        </div>
                        <div class="stat-box" style="border-left: 4px solid #00a32a;">
                            <div class="stat-box-title">New Leads</div>
                            <div class="stat-box-number" style="color: #00a32a"><?php echo $newLeads; ?></div>
                            <div class="stat-box-meta">Requires follow-up</div>
                        </div>
                        <div class="stat-box" style="border-left: 4px solid #72aee6;">
                            <div class="stat-box-title">Published Articles</div>
                            <div class="stat-box-number"><?php echo $totalPosts; ?></div>
                            <div class="stat-box-meta">Live in /resources/blog/</div>
                        </div>
                        <div class="stat-box" style="border-left: 4px solid #dba617;">
                            <div class="stat-box-title">Active Locations</div>
                            <div class="stat-box-number"><?php echo $allLocationsCount; ?></div>
                            <div class="stat-box-meta">Regional &amp; country landing pages</div>
                        </div>
                    </div>

                    <div class="grid-2">
                        <!-- Recent Leads Widget -->
                        <div class="postbox">
                            <div class="postbox-header">
                                <h2>Recent Inbound Inquiries</h2>
                            </div>
                            <div class="postbox-content" style="padding:0; overflow-x: auto; -webkit-overflow-scrolling: touch;">
                                <table class="wp-list-table">
                                    <thead>
                                        <tr>
                                            <th>Contact</th>
                                            <th>Product / Request</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $recentLeads = array_slice($leads, 0, 5);
                                        if (empty($recentLeads)): ?>
                                            <tr><td colspan="4" style="text-align:center;color:#8c8f94">No inquiries received yet.</td></tr>
                                        <?php else:
                                            foreach ($recentLeads as $rl): ?>
                                            <tr>
                                                <td>
                                                    <strong><?php echo htmlspecialchars($rl['name']); ?></strong><br>
                                                    <span style="color:#646970;font-size:11px"><?php echo htmlspecialchars($rl['phone'] ?: $rl['email']); ?></span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-type"><?php echo htmlspecialchars($rl['type']); ?></span><br>
                                                    <span style="font-size:11px;color:#646970"><?php echo htmlspecialchars($rl['requirement'] ?: $rl['business'] ?: 'General'); ?></span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-<?php echo strtolower($rl['status'] ?: 'new'); ?>"><?php echo htmlspecialchars($rl['status'] ?: 'new'); ?></span>
                                                </td>
                                                <td>
                                                    <a href="<?php echo $adminBase; ?>?page=leads" class="button button-small">View</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Quick Note / Lead Widget -->
                        <div class="postbox">
                            <div class="postbox-header">
                                <h2>Quick Add Prospect Lead</h2>
                            </div>
                            <div class="postbox-content">
                                <form method="post" action="">
                                    <input type="hidden" name="form_action" value="add_lead">
                                    <div style="margin-bottom:10px">
                                        <input type="text" name="name" class="regular-text" required placeholder="Lead / Client Name *" style="max-width:100%">
                                    </div>
                                    <div style="margin-bottom:10px">
                                        <input type="text" name="phone" class="regular-text" placeholder="Mobile / WhatsApp Number" style="max-width:100%">
                                    </div>
                                    <div style="margin-bottom:10px">
                                        <input type="email" name="email" class="regular-text" placeholder="Work Email" style="max-width:100%">
                                    </div>
                                    <div style="margin-bottom:10px">
                                        <textarea name="message" class="large-text" rows="3" placeholder="Requirement notes..."></textarea>
                                    </div>
                                    <button type="submit" class="button button-primary">Save Lead</button>
                                </form>
                            </div>
                        </div>
                    </div>

                <?php
                // -------------------------------------------------------------
                // 2. LIVE SITE CONTENT EDITOR (WP CUSTOMIZER STYLE)
                // -------------------------------------------------------------
                elseif ($page === 'editor'):
                    $editorTab = $_GET['tab'] ?? 'hero';
                ?>
                    <h1 class="wp-heading-inline">Live Website Editor</h1>
                    <p class="description" style="margin-bottom:16px">Edit text, CTA buttons, simulator scripts, and announcement banners live on the homepage without touching any code.</p>

                    <ul class="subsubsub">
                        <li><a href="<?php echo $adminBase; ?>?page=editor&tab=hero" class="<?php echo $editorTab === 'hero' ? 'current' : ''; ?>">Hero Section</a> |</li>
                        <li><a href="<?php echo $adminBase; ?>?page=editor&tab=stats" class="<?php echo $editorTab === 'stats' ? 'current' : ''; ?>">Stats Counter Row</a> |</li>
                        <li><a href="<?php echo $adminBase; ?>?page=editor&tab=simulator" class="<?php echo $editorTab === 'simulator' ? 'current' : ''; ?>">WhatsApp Chat Simulator</a> |</li>
                        <li><a href="<?php echo $adminBase; ?>?page=editor&tab=announcement" class="<?php echo $editorTab === 'announcement' ? 'current' : ''; ?>">Announcement Top Bar</a> |</li>
                        <li><a href="<?php echo $adminBase; ?>?page=editor&tab=cta" class="<?php echo $editorTab === 'cta' ? 'current' : ''; ?>">Bottom CTA Banner</a></li>
                    </ul>

                    <?php if ($editorTab === 'hero'): ?>
                        <div class="postbox">
                            <div class="postbox-header"><h2>Homepage Hero Section</h2></div>
                            <div class="postbox-content">
                                <form method="post" action="">
                                    <input type="hidden" name="form_action" value="save_hero">
                                    <table class="form-table">
                                        <tr>
                                            <th><label for="badge">Top Badge Pill</label></th>
                                            <td>
                                                <input type="text" id="badge" name="badge" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('hero', 'badge', 'Official WhatsApp Business API · Meta Tech Partner')); ?>">
                                                <p class="description">Small highlighted badge above main headline.</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="headline_prefix">Headline Text (Start)</label></th>
                                            <td>
                                                <input type="text" id="headline_prefix" name="headline_prefix" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('hero', 'headline_prefix', 'WhatsApp Automation Software & ')); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="headline_gradient">Gradient Highlighted Text</label></th>
                                            <td>
                                                <input type="text" id="headline_gradient" name="headline_gradient" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('hero', 'headline_gradient', 'AI Chatbot')); ?>" style="color:#8b5cf6;font-weight:700">
                                                <p class="description">Displays with modern purple-to-cyan gradient on the live site.</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="headline_suffix">Headline Text (End)</label></th>
                                            <td>
                                                <input type="text" id="headline_suffix" name="headline_suffix" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('hero', 'headline_suffix', ' for Business')); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="lead">Subheading / Lead Description</label></th>
                                            <td>
                                                <textarea id="lead" name="lead" class="large-text" rows="3"><?php echo htmlspecialchars(hb_get_section('hero', 'lead', 'Boost engagement, qualify leads, and provide 24/7 support with seamless, AI-powered WhatsApp conversations. Integrate instantly and scale efficiently.')); ?></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="cta1_text">Primary Button Text &amp; Link</label></th>
                                            <td>
                                                <div style="display:flex;gap:10px;flex-wrap:wrap">
                                                    <input type="text" id="cta1_text" name="cta1_text" class="regular-text" value="<?php echo htmlspecialchars(hb_get_section('hero', 'cta1_text', "Start Automating - It's Free")); ?>" placeholder="Button Text">
                                                    <input type="text" name="cta1_link" class="regular-text" value="<?php echo htmlspecialchars(hb_get_section('hero', 'cta1_link', '/auth/register')); ?>" placeholder="Button Link URL">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="cta2_text">Secondary Button Text</label></th>
                                            <td>
                                                <input type="text" id="cta2_text" name="cta2_text" class="regular-text" value="<?php echo htmlspecialchars(hb_get_section('hero', 'cta2_text', 'Book a Demo')); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label>Floating Phone Badges</label></th>
                                            <td>
                                                <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(200px, 1fr));gap:12px">
                                                    <div style="background:#f6f7f7;padding:10px;border-radius:4px;border:1px solid #dcdcde">
                                                        <strong>Badge 1 (Top Left)</strong>
                                                        <input type="text" name="float1_val" class="large-text" style="margin:4px 0" value="<?php echo htmlspecialchars(hb_get_section('hero', 'float1_val', '+128 Leads')); ?>">
                                                        <input type="text" name="float1_label" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('hero', 'float1_label', 'Captured today')); ?>">
                                                    </div>
                                                    <div style="background:#f6f7f7;padding:10px;border-radius:4px;border:1px solid #dcdcde">
                                                        <strong>Badge 2 (Middle Right)</strong>
                                                        <input type="text" name="float2_val" class="large-text" style="margin:4px 0" value="<?php echo htmlspecialchars(hb_get_section('hero', 'float2_val', '24/7 Active')); ?>">
                                                        <input type="text" name="float2_label" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('hero', 'float2_label', 'AI Chatbot')); ?>">
                                                    </div>
                                                    <div style="background:#f6f7f7;padding:10px;border-radius:4px;border:1px solid #dcdcde">
                                                        <strong>Badge 3 (Bottom Left)</strong>
                                                        <input type="text" name="float3_val" class="large-text" style="margin:4px 0" value="<?php echo htmlspecialchars(hb_get_section('hero', 'float3_val', '99.9%')); ?>">
                                                        <input type="text" name="float3_label" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('hero', 'float3_label', 'Delivery Rate')); ?>">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <p class="submit"><button type="submit" class="button button-primary">Save Changes to Live Site</button></p>
                                </form>
                            </div>
                        </div>

                    <?php elseif ($editorTab === 'stats'): ?>
                        <div class="postbox">
                            <div class="postbox-header"><h2>Stats Counter Bar</h2></div>
                            <div class="postbox-content">
                                <form method="post" action="">
                                    <input type="hidden" name="form_action" value="save_stats">
                                    <table class="form-table">
                                        <tr>
                                            <th>Stat Box 1</th>
                                            <td>
                                                <input type="text" name="stat1_val" class="regular-text" style="max-width:120px" value="<?php echo htmlspecialchars(hb_get_section('stats', 'stat1_val', '10M+')); ?>">
                                                <input type="text" name="stat1_label" class="regular-text" value="<?php echo htmlspecialchars(hb_get_section('stats', 'stat1_label', 'Messages delivered')); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Stat Box 2</th>
                                            <td>
                                                <input type="text" name="stat2_val" class="regular-text" style="max-width:120px" value="<?php echo htmlspecialchars(hb_get_section('stats', 'stat2_val', '99.9%')); ?>">
                                                <input type="text" name="stat2_label" class="regular-text" value="<?php echo htmlspecialchars(hb_get_section('stats', 'stat2_label', 'API uptime')); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Stat Box 3</th>
                                            <td>
                                                <input type="text" name="stat3_val" class="regular-text" style="max-width:120px" value="<?php echo htmlspecialchars(hb_get_section('stats', 'stat3_val', '24/7')); ?>">
                                                <input type="text" name="stat3_label" class="regular-text" value="<?php echo htmlspecialchars(hb_get_section('stats', 'stat3_label', 'Bot coverage')); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Stat Box 4</th>
                                            <td>
                                                <input type="text" name="stat4_val" class="regular-text" style="max-width:120px" value="<?php echo htmlspecialchars(hb_get_section('stats', 'stat4_val', '1 inbox')); ?>">
                                                <input type="text" name="stat4_label" class="regular-text" value="<?php echo htmlspecialchars(hb_get_section('stats', 'stat4_label', 'All channels')); ?>">
                                            </td>
                                        </tr>
                                    </table>
                                    <p class="submit"><button type="submit" class="button button-primary">Save Stats</button></p>
                                </form>
                            </div>
                        </div>

                    <?php elseif ($editorTab === 'simulator'): ?>
                        <div class="postbox">
                            <div class="postbox-header"><h2>Interactive Phone Chat Simulator Script</h2></div>
                            <div class="postbox-content">
                                <form method="post" action="">
                                    <input type="hidden" name="form_action" value="save_simulator">
                                    <table class="form-table">
                                        <tr>
                                            <th><label for="bot_greeting">Initial Bot Welcome Message</label></th>
                                            <td>
                                                <textarea id="bot_greeting" name="bot_greeting" class="large-text" rows="2"><?php echo htmlspecialchars(hb_get_section('simulator', 'bot_greeting', "👋 Hello! Welcome to InboxWa. How can we help automate your business today?")); ?></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label>User Prompt Buttons (Quick Replies)</label></th>
                                            <td>
                                                <div style="margin-bottom:8px"><input type="text" name="btn1" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('simulator', 'btn1', '🤖 AI Chatbot for Leads')); ?>"></div>
                                                <div style="margin-bottom:8px"><input type="text" name="btn2" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('simulator', 'btn2', '📢 Broadcast Campaigns')); ?>"></div>
                                                <div><input type="text" name="btn3" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('simulator', 'btn3', '👥 Shared Team Inbox')); ?>"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="bot_response">Automated Bot Response</label></th>
                                            <td>
                                                <textarea id="bot_response" name="bot_response" class="large-text" rows="3"><?php echo htmlspecialchars(hb_get_section('simulator', 'bot_response', "Great choice! InboxWa equips your team with Official Meta WhatsApp API, visual drag-and-drop flow builder, CRM pipelines, and 24/7 automated qualification.")); ?></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                    <p class="submit"><button type="submit" class="button button-primary">Save Simulator Script</button></p>
                                </form>
                            </div>
                        </div>

                    <?php elseif ($editorTab === 'announcement'): ?>
                        <div class="postbox">
                            <div class="postbox-header"><h2>Top Announcement Notification Bar</h2></div>
                            <div class="postbox-content">
                                <form method="post" action="">
                                    <input type="hidden" name="form_action" value="save_announcement">
                                    <table class="form-table">
                                        <tr>
                                            <th>Enable Announcement Bar</th>
                                            <td>
                                                <label>
                                                    <input type="checkbox" name="announcement_enabled" value="1" <?php echo hb_get_setting('announcement_enabled', '0') === '1' ? 'checked' : ''; ?>>
                                                    Display promotional banner at the very top of the live website
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Banner Message</th>
                                            <td>
                                                <input type="text" name="announcement_text" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('announcement_text', 'Official WhatsApp Business API & AI Chatbots — Start 14-Day Free Trial Today!')); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Target URL Link</th>
                                            <td>
                                                <input type="text" name="announcement_link" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('announcement_link', '/auth/register')); ?>" placeholder="/auth/register or https://...">
                                            </td>
                                        </tr>
                                    </table>
                                    <p class="submit"><button type="submit" class="button button-primary">Save Announcement Bar</button></p>
                                </form>
                            </div>
                        </div>

                    <?php elseif ($editorTab === 'cta'): ?>
                        <div class="postbox">
                            <div class="postbox-header"><h2>Bottom Call to Action Banner</h2></div>
                            <div class="postbox-content">
                                <form method="post" action="">
                                    <input type="hidden" name="form_action" value="save_cta">
                                    <table class="form-table">
                                        <tr>
                                            <th>Banner Title</th>
                                            <td>
                                                <input type="text" name="title" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('cta_banner', 'title', 'Ready to turn customer conversations into revenue?')); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td>
                                                <textarea name="lead" class="large-text" rows="2"><?php echo htmlspecialchars(hb_get_section('cta_banner', 'lead', 'Join fast-growing companies using InboxWa for WhatsApp marketing, AI automation, and omnichannel support.')); ?></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Button Text &amp; Link</th>
                                            <td>
                                                <div style="display:flex;gap:10px;flex-wrap:wrap">
                                                    <input type="text" name="btn_text" class="regular-text" value="<?php echo htmlspecialchars(hb_get_section('cta_banner', 'btn_text', 'Start Free 14-Day Trial')); ?>">
                                                    <input type="text" name="btn_link" class="regular-text" value="<?php echo htmlspecialchars(hb_get_section('cta_banner', 'btn_link', '/auth/register')); ?>">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <p class="submit"><button type="submit" class="button button-primary">Save CTA Banner</button></p>
                                </form>
                            </div>
                        </div>
                    <?php endif; ?>

                <?php
                // -------------------------------------------------------------
                // 3. PAGES & SEO SCREEN
                // -------------------------------------------------------------
                elseif ($page === 'pages'):
                    $corePages = [
                        ['title' => 'Home', 'url' => '/', 'meta_title' => 'WhatsApp Marketing & Automation Platform | InboxWa', 'desc' => 'Homepage with live WhatsApp simulation, feature highlights, and integrations.'],
                        ['title' => 'Pricing', 'url' => '/pricing/', 'meta_title' => 'InboxWa Pricing – WhatsApp API, AI Chatbot Plans', 'desc' => 'Transparent plans (Growth, Pro, Business) with monthly and yearly pricing.'],
                        ['title' => 'Contact Us', 'url' => '/contact/', 'meta_title' => 'Contact InboxWa – Sales & Support', 'desc' => 'Official communication channels, office locations, and enquiry form.'],
                        ['title' => 'About Company', 'url' => '/company/about/', 'meta_title' => 'About InboxWa – AI Technologies', 'desc' => 'Company vision, executive team, and global partner ecosystem.'],
                        ['title' => 'Partners', 'url' => '/partners/', 'meta_title' => 'InboxWa Partner Program', 'desc' => 'Affiliate, Agency, White-Label, and Technology partner programs.'],
                        ['title' => 'Blog Index', 'url' => '/resources/blog/', 'meta_title' => 'Blog — InboxWa Insights', 'desc' => 'Technical guides, conversational marketing tutorials, and updates.'],
                        ['title' => 'Help Center', 'url' => '/resources/help-center/', 'meta_title' => 'Help Center & Documentation', 'desc' => 'Knowledge base, API guides, and troubleshooting documentation.'],
                        ['title' => 'Privacy Policy', 'url' => '/privacy/', 'meta_title' => 'Privacy Policy', 'desc' => 'Data privacy policy and GDPR compliance terms.'],
                        ['title' => 'Terms of Service', 'url' => '/terms/', 'meta_title' => 'Terms of Service', 'desc' => 'Master subscription terms and acceptable use guidelines.']
                    ];
                ?>
                    <h1 class="wp-heading-inline">Pages &amp; SEO Management</h1>
                    <p class="description" style="margin-bottom:16px">Overview of live site routes and their indexing metadata.</p>
                    
                    <div class="wp-table-responsive">
                        <table class="wp-list-table">
                            <thead>
                                <tr>
                                    <th>Page Title</th>
                                    <th>Route URL</th>
                                    <th>Meta Title Tag</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($corePages as $cp): ?>
                                <tr>
                                    <td><strong><?php echo htmlspecialchars($cp['title']); ?></strong><br><span style="color:#8c8f94;font-size:11px"><?php echo htmlspecialchars($cp['desc']); ?></span></td>
                                    <td><code><?php echo htmlspecialchars($cp['url']); ?></code></td>
                                    <td style="max-width:280px;color:#2c3338"><?php echo htmlspecialchars($cp['meta_title']); ?></td>
                                    <td><span class="badge badge-converted">Published</span></td>
                                    <td>
                                        <a href="<?php echo htmlspecialchars($cp['url']); ?>" target="_blank" class="button button-small">View Live</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                <?php
                // -------------------------------------------------------------
                // 4. POSTS / BLOG MANAGER SCREEN
                // -------------------------------------------------------------
                elseif ($page === 'posts'):
                    $actionPost = $_GET['action'] ?? '';
                    $editPostId = (int)($_GET['id'] ?? 0);
                    $editPost = $editPostId > 0 ? hb_get_post($editPostId) : null;
                ?>
                    <h1 class="wp-heading-inline">Posts</h1>
                    <a href="<?php echo $adminBase; ?>?page=posts&action=new" class="page-title-action">Add New Post</a>
                    
                    <?php if ($actionPost === 'new' || ($actionPost === 'edit' && $editPost)): ?>
                        <!-- ADD / EDIT POST FORM -->
                        <div class="postbox" style="margin-top:16px">
                            <div class="postbox-header">
                                <h2><?php echo $editPost ? 'Edit Post' : 'Add New Blog Post'; ?></h2>
                            </div>
                            <div class="postbox-content">
                                <form method="post" action="">
                                    <input type="hidden" name="form_action" value="save_post">
                                    <input type="hidden" name="post_id" value="<?php echo $editPost['id'] ?? 0; ?>">

                                    <div style="margin-bottom:16px">
                                        <label for="post-title" style="font-weight:600;display:block;margin-bottom:6px">Post Title *</label>
                                        <input type="text" id="post-title" name="title" class="large-text" required value="<?php echo htmlspecialchars($editPost['title'] ?? ''); ?>" placeholder="Enter title here" style="font-size:18px;min-height:40px">
                                    </div>

                                    <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(240px, 1fr));gap:16px;margin-bottom:16px">
                                        <div>
                                            <label for="post-slug" style="font-weight:600;display:block;margin-bottom:4px">Slug (URL)</label>
                                            <input type="text" id="post-slug" name="slug" class="large-text" value="<?php echo htmlspecialchars($editPost['slug'] ?? ''); ?>" placeholder="e.g. whatsapp-marketing-guide">
                                            <p class="description">Live URL: /resources/blog/<strong>slug</strong>/</p>
                                        </div>
                                        <div>
                                            <label for="post-cat" style="font-weight:600;display:block;margin-bottom:4px">Category</label>
                                            <select id="post-cat" name="category" class="large-text">
                                                <?php 
                                                $cats = ['Guide', 'Automation', 'CRM', 'Marketing', 'E-commerce', 'Strategy', 'Updates'];
                                                foreach ($cats as $c): ?>
                                                    <option value="<?php echo $c; ?>" <?php echo (($editPost['category'] ?? '') === $c) ? 'selected' : ''; ?>><?php echo $c; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="post-status" style="font-weight:600;display:block;margin-bottom:4px">Status</label>
                                            <select id="post-status" name="status" class="large-text">
                                                <option value="published" <?php echo (($editPost['status'] ?? 'published') === 'published') ? 'selected' : ''; ?>>Published</option>
                                                <option value="draft" <?php echo (($editPost['status'] ?? '') === 'draft') ? 'selected' : ''; ?>>Draft</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div style="margin-bottom:16px">
                                        <label for="post-excerpt" style="font-weight:600;display:block;margin-bottom:4px">Excerpt / Summary</label>
                                        <textarea id="post-excerpt" name="excerpt" class="large-text" rows="2" placeholder="Short description for listing preview..."><?php echo htmlspecialchars($editPost['excerpt'] ?? ''); ?></textarea>
                                    </div>

                                    <div style="margin-bottom:16px">
                                        <label for="post-content" style="font-weight:600;display:block;margin-bottom:4px">Post Content (HTML / Rich Text) *</label>
                                        <textarea id="post-content" name="content" class="large-text" rows="12" required style="font-family:monospace;line-height:1.5"><?php echo htmlspecialchars($editPost['content'] ?? ''); ?></textarea>
                                        <p class="description">Supports HTML headings (&lt;h2&gt;, &lt;h3&gt;), paragraphs (&lt;p&gt;), unordered lists (&lt;ul&gt;&lt;li&gt;), and bold text.</p>
                                    </div>

                                    <div style="display:flex;gap:10px">
                                        <button type="submit" class="button button-primary"><?php echo $editPost ? 'Update Post' : 'Publish Post'; ?></button>
                                        <a href="<?php echo $adminBase; ?>?page=posts" class="button">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php else: ?>
                        <!-- POSTS LIST TABLE -->
                        <div class="wp-table-responsive">
                            <table class="wp-list-table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Categories</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($postsList)): ?>
                                        <tr><td colspan="6" style="text-align:center;color:#8c8f94">No posts found. Create your first post!</td></tr>
                                    <?php else:
                                        foreach ($postsList as $p): ?>
                                        <tr>
                                            <td>
                                                <strong style="font-size:14px"><a href="<?php echo $adminBase; ?>?page=posts&action=edit&id=<?php echo $p['id']; ?>"><?php echo htmlspecialchars($p['title']); ?></a></strong>
                                                <div style="color:#8c8f94;font-size:11px;margin-top:2px">Slug: /resources/blog/<?php echo htmlspecialchars($p['slug']); ?>/</div>
                                            </td>
                                            <td><?php echo htmlspecialchars($p['author'] ?: 'InboxWa Team'); ?></td>
                                            <td><span class="badge badge-type"><?php echo htmlspecialchars($p['category'] ?: 'General'); ?></span></td>
                                            <td>
                                                <span class="badge badge-<?php echo $p['status'] === 'published' ? 'converted' : 'new'; ?>">
                                                    <?php echo htmlspecialchars(ucfirst($p['status'] ?: 'published')); ?>
                                                </span>
                                            </td>
                                            <td style="color:#646970;font-size:12px"><?php echo date('Y/m/d', strtotime($p['created_at'])); ?></td>
                                            <td>
                                                <a href="<?php echo $adminBase; ?>?page=posts&action=edit&id=<?php echo $p['id']; ?>" class="button button-small">Edit</a>
                                                <a href="/resources/blog/<?php echo htmlspecialchars($p['slug']); ?>/" target="_blank" class="button button-small">View</a>
                                                <a href="<?php echo $adminBase; ?>?page=posts&action=delete_post&id=<?php echo $p['id']; ?>" onclick="return confirm('Are you sure you want to delete this post?')" class="button button-small button-danger">Trash</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; endif; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>

                <?php
                // -------------------------------------------------------------
                // 5. PRICING PLANS SCREEN
                // -------------------------------------------------------------
                elseif ($page === 'pricing'):
                ?>
                    <h1 class="wp-heading-inline">Pricing Plans Manager</h1>
                    <p class="description" style="margin-bottom:16px">Edit plan prices, features, and tags. All changes instantly sync to /pricing/ and add-on modal forms.</p>

                    <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(320px, 1fr));gap:20px;">
                        <?php foreach ($plansList as $pl): 
                            $feats = json_decode($pl['features_json'] ?: '[]', true) ?: [];
                        ?>
                        <div class="postbox" style="border-top: 4px solid <?php echo $pl['plan_id'] === 'pro' ? '#8b5cf6' : ($pl['plan_id'] === 'business' ? '#06b6d4' : '#2271b1'); ?>;">
                            <div class="postbox-header" style="display:flex;justify-content:space-between;align-items:center;">
                                <h2><?php echo htmlspecialchars($pl['name']); ?> Plan</h2>
                                <?php if (!empty($pl['badge'])): ?>
                                    <span class="badge badge-converted"><?php echo htmlspecialchars($pl['badge']); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="postbox-content">
                                <form method="post" action="">
                                    <input type="hidden" name="form_action" value="save_plan">
                                    <input type="hidden" name="plan_id" value="<?php echo htmlspecialchars($pl['plan_id']); ?>">

                                    <div style="margin-bottom:10px">
                                        <label style="font-weight:600;display:block;margin-bottom:4px">Display Name</label>
                                        <input type="text" name="name" class="large-text" value="<?php echo htmlspecialchars($pl['name']); ?>" required>
                                    </div>
                                    <div style="margin-bottom:10px">
                                        <label style="font-weight:600;display:block;margin-bottom:4px">Highlight Badge (Optional)</label>
                                        <input type="text" name="badge" class="large-text" value="<?php echo htmlspecialchars($pl['badge'] ?? ''); ?>" placeholder="e.g. MOST POPULAR">
                                    </div>
                                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-bottom:10px">
                                        <div>
                                            <label style="font-weight:600;display:block;margin-bottom:4px">Monthly (₹)</label>
                                            <input type="number" name="monthly" class="large-text" value="<?php echo (int)$pl['monthly']; ?>" required>
                                        </div>
                                        <div>
                                            <label style="font-weight:600;display:block;margin-bottom:4px">Yearly (₹)</label>
                                            <input type="number" name="yearly" class="large-text" value="<?php echo (int)$pl['yearly']; ?>" required>
                                        </div>
                                    </div>
                                    <div style="margin-bottom:10px">
                                        <label style="font-weight:600;display:block;margin-bottom:4px">Tagline</label>
                                        <input type="text" name="tagline" class="large-text" value="<?php echo htmlspecialchars($pl['tagline'] ?? ''); ?>">
                                    </div>
                                    <div style="margin-bottom:10px">
                                        <label style="font-weight:600;display:block;margin-bottom:4px">Features (one per line)</label>
                                        <textarea name="features" class="large-text" rows="6"><?php echo htmlspecialchars(implode("\n", $feats)); ?></textarea>
                                    </div>
                                    <button type="submit" class="button button-primary" style="width:100%">Save <?php echo htmlspecialchars($pl['name']); ?> Plan</button>
                                </form>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                <?php
                // -------------------------------------------------------------
                // 6. SEO LOCATIONS SCREEN
                // -------------------------------------------------------------
                elseif ($page === 'locations'):
                ?>
                    <h1 class="wp-heading-inline">SEO Location Landing Pages</h1>
                    <button type="button" class="page-title-action" onclick="document.getElementById('modal-add-location').hidden = false;">+ Add New City / Country</button>
                    <p class="description" style="margin-bottom:16px">Browse, filter and edit 80+ international and Indian city landing pages.</p>

                    <!-- Add Location Modal -->
                    <div id="modal-add-location" class="wp-modal" hidden>
                        <div class="wp-modal-dialog">
                            <button type="button" class="wp-modal-close" onclick="document.getElementById('modal-add-location').hidden = true;">&times;</button>
                            <h2 style="font-size:18px;margin-bottom:16px;">Add New Location Landing Page</h2>
                            <form method="post" action="">
                                <input type="hidden" name="form_action" value="save_location">
                                <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:12px;">
                                    <div>
                                        <label style="font-weight:600;display:block;margin-bottom:4px">City / Area *</label>
                                        <input type="text" name="city" class="large-text" required placeholder="e.g. Singapore">
                                    </div>
                                    <div>
                                        <label style="font-weight:600;display:block;margin-bottom:4px">Country *</label>
                                        <input type="text" name="country" class="large-text" required placeholder="e.g. Singapore">
                                    </div>
                                </div>
                                <div style="margin-bottom:12px">
                                    <label style="font-weight:600;display:block;margin-bottom:4px">Slug</label>
                                    <input type="text" name="slug" class="large-text" placeholder="e.g. WhatsApp-API-Singapore">
                                </div>
                                <div style="margin-bottom:12px">
                                    <label style="font-weight:600;display:block;margin-bottom:4px">Primary Keyword</label>
                                    <input type="text" name="primary_keyword" class="large-text" placeholder="WhatsApp API Singapore">
                                </div>
                                <div style="margin-bottom:12px">
                                    <label style="font-weight:600;display:block;margin-bottom:4px">Meta Title</label>
                                    <input type="text" name="meta_title" class="large-text" placeholder="WhatsApp Business API in Singapore | InboxWa">
                                </div>
                                <div style="margin-bottom:12px">
                                    <label style="font-weight:600;display:block;margin-bottom:4px">Meta Description</label>
                                    <textarea name="meta_description" class="large-text" rows="2" placeholder="Official WhatsApp Business API for businesses in Singapore..."></textarea>
                                </div>
                                <div style="margin-bottom:16px">
                                    <label style="font-weight:600;display:block;margin-bottom:4px">Target Areas / Suburbs (comma-separated)</label>
                                    <input type="text" name="areas" class="large-text" placeholder="Marina Bay, Orchard, Jurong, Changi">
                                </div>
                                <button type="submit" class="button button-primary">Save &amp; Publish Location</button>
                            </form>
                        </div>
                    </div>

                    <div class="wp-table-responsive">
                        <table class="wp-list-table">
                            <thead>
                                <tr>
                                    <th>Location Name</th>
                                    <th>Country / Type</th>
                                    <th>Primary Keyword</th>
                                    <th>Page Title Tag</th>
                                    <th>Live URL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                // Merge custom and sample of static locations
                                $displayLocations = array_slice($staticLocations, 0, 25);
                                foreach ($displayLocations as $key => $loc): ?>
                                <tr>
                                    <td>
                                        <strong><?php echo htmlspecialchars($loc['city'] ?? $loc['country'] ?? $key); ?></strong><br>
                                        <span style="color:#8c8f94;font-size:11px">Slug: /Locations/<?php echo htmlspecialchars($loc['slug'] ?? $key); ?>/</span>
                                    </td>
                                    <td>
                                        <span class="badge badge-type"><?php echo htmlspecialchars(strtoupper($loc['type'] ?? 'CITY')); ?></span><br>
                                        <span style="color:#646970;font-size:12px"><?php echo htmlspecialchars($loc['country'] ?? 'Global'); ?></span>
                                    </td>
                                    <td><strong style="color:#2271b1"><?php echo htmlspecialchars($loc['primary_keyword'] ?? 'N/A'); ?></strong></td>
                                    <td style="max-width:280px;color:#3c434a"><?php echo htmlspecialchars($loc['meta_title'] ?? 'N/A'); ?></td>
                                    <td>
                                        <a href="/Locations/<?php echo htmlspecialchars($loc['slug'] ?? $key); ?>/" target="_blank" class="button button-small">View Page ↗</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                <?php
                // -------------------------------------------------------------
                // 7. TESTIMONIALS SCREEN
                // -------------------------------------------------------------
                elseif ($page === 'testimonials'):
                ?>
                    <h1 class="wp-heading-inline">Testimonials &amp; Client Reviews</h1>
                    <button type="button" class="page-title-action" onclick="document.getElementById('modal-add-testimonial').hidden = false;">+ Add New Testimonial</button>
                    
                    <div id="modal-add-testimonial" class="wp-modal" hidden>
                        <div class="wp-modal-dialog">
                            <button type="button" class="wp-modal-close" onclick="document.getElementById('modal-add-testimonial').hidden = true;">&times;</button>
                            <h2 style="font-size:18px;margin-bottom:16px;">Add Client Review</h2>
                            <form method="post" action="">
                                <input type="hidden" name="form_action" value="save_testimonial">
                                <div style="margin-bottom:12px">
                                    <label style="font-weight:600;display:block;margin-bottom:4px">Client Name *</label>
                                    <input type="text" name="name" class="large-text" required placeholder="e.g. Ramesh Patel">
                                </div>
                                <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:12px">
                                    <div>
                                        <label style="font-weight:600;display:block;margin-bottom:4px">Role / Designation</label>
                                        <input type="text" name="role" class="large-text" placeholder="e.g. Founder & CEO">
                                    </div>
                                    <div>
                                        <label style="font-weight:600;display:block;margin-bottom:4px">Company Name</label>
                                        <input type="text" name="company" class="large-text" placeholder="e.g. Acme Tech">
                                    </div>
                                </div>
                                <div style="margin-bottom:12px">
                                    <label style="font-weight:600;display:block;margin-bottom:4px">Star Rating (1-5)</label>
                                    <select name="rating" class="large-text">
                                        <option value="5">★★★★★ 5 Stars</option>
                                        <option value="4">★★★★☆ 4 Stars</option>
                                    </select>
                                </div>
                                <div style="margin-bottom:16px">
                                    <label style="font-weight:600;display:block;margin-bottom:4px">Review Quote *</label>
                                    <textarea name="quote" class="large-text" rows="4" required placeholder="What did they say about InboxWa?"></textarea>
                                </div>
                                <button type="submit" class="button button-primary">Save Testimonial</button>
                            </form>
                        </div>
                    </div>

                    <div class="wp-table-responsive">
                        <table class="wp-list-table">
                            <thead>
                                <tr>
                                    <th>Client</th>
                                    <th>Company</th>
                                    <th>Rating</th>
                                    <th>Review Quote</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($testimonialsList)): ?>
                                    <tr><td colspan="5" style="text-align:center;color:#8c8f94">No testimonials yet. Add your first customer review!</td></tr>
                                <?php else:
                                    foreach ($testimonialsList as $t): ?>
                                    <tr>
                                        <td><strong><?php echo htmlspecialchars($t['name']); ?></strong><br><span style="color:#646970;font-size:11px"><?php echo htmlspecialchars($t['role'] ?? ''); ?></span></td>
                                        <td><?php echo htmlspecialchars($t['company'] ?? ''); ?></td>
                                        <td style="color:#f59f00"><?php echo str_repeat('★', (int)($t['rating'] ?: 5)); ?></td>
                                        <td style="max-width:380px;color:#3c434a;line-height:1.5">&ldquo;<?php echo htmlspecialchars($t['quote']); ?>&rdquo;</td>
                                        <td>
                                            <a href="<?php echo $adminBase; ?>?page=testimonials&action=delete_testimonial&id=<?php echo $t['id']; ?>" onclick="return confirm('Delete review?')" class="button button-small button-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>

                <?php
                // -------------------------------------------------------------
                // 8. FAQS SCREEN
                // -------------------------------------------------------------
                elseif ($page === 'faqs'):
                ?>
                    <h1 class="wp-heading-inline">Frequently Asked Questions (FAQs)</h1>
                    <button type="button" class="page-title-action" onclick="document.getElementById('modal-add-faq').hidden = false;">+ Add New FAQ</button>
                    
                    <div id="modal-add-faq" class="wp-modal" hidden>
                        <div class="wp-modal-dialog">
                            <button type="button" class="wp-modal-close" onclick="document.getElementById('modal-add-faq').hidden = true;">&times;</button>
                            <h2 style="font-size:18px;margin-bottom:16px;">Add FAQ Item</h2>
                            <form method="post" action="">
                                <input type="hidden" name="form_action" value="save_faq">
                                <div style="margin-bottom:12px">
                                    <label style="font-weight:600;display:block;margin-bottom:4px">Category</label>
                                    <select name="category" class="large-text">
                                        <option value="general">General</option>
                                        <option value="pricing">Pricing</option>
                                        <option value="api">API &amp; Integration</option>
                                    </select>
                                </div>
                                <div style="margin-bottom:12px">
                                    <label style="font-weight:600;display:block;margin-bottom:4px">Question *</label>
                                    <input type="text" name="question" class="large-text" required placeholder="e.g. How does Official WhatsApp API work?">
                                </div>
                                <div style="margin-bottom:16px">
                                    <label style="font-weight:600;display:block;margin-bottom:4px">Answer *</label>
                                    <textarea name="answer" class="large-text" rows="4" required placeholder="Detailed explanation..."></textarea>
                                </div>
                                <button type="submit" class="button button-primary">Save FAQ</button>
                            </form>
                        </div>
                    </div>

                    <div class="wp-table-responsive">
                        <table class="wp-list-table">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($faqsList)): ?>
                                    <tr><td colspan="4" style="text-align:center;color:#8c8f94">No FAQs added yet.</td></tr>
                                <?php else:
                                    foreach ($faqsList as $fq): ?>
                                    <tr>
                                        <td><span class="badge badge-type"><?php echo htmlspecialchars(ucfirst($fq['category'])); ?></span></td>
                                        <td><strong><?php echo htmlspecialchars($fq['question']); ?></strong></td>
                                        <td style="max-width:420px;color:#50575e"><?php echo htmlspecialchars($fq['answer']); ?></td>
                                        <td>
                                            <a href="<?php echo $adminBase; ?>?page=faqs&action=delete_faq&id=<?php echo $fq['id']; ?>" onclick="return confirm('Delete FAQ?')" class="button button-small button-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>

                <?php
                // -------------------------------------------------------------
                // 9. LEADS & INQUIRIES (CRM) SCREEN
                // -------------------------------------------------------------
                elseif ($page === 'leads'):
                ?>
                    <h1 class="wp-heading-inline">Leads &amp; Inquiries (CRM)</h1>
                    <button type="button" class="page-title-action" onclick="document.getElementById('modal-manual-lead').hidden = false;">+ Add Manual Lead</button>
                    <a href="<?php echo $adminBase; ?>?action=export&format=csv" class="page-title-action">Export CSV</a>
                    <a href="<?php echo $adminBase; ?>?action=export&format=json" class="page-title-action">Export JSON</a>

                    <!-- Manual Lead Modal -->
                    <div id="modal-manual-lead" class="wp-modal" <?php echo (isset($_GET['action']) && $_GET['action'] === 'open_add_lead') ? '' : 'hidden'; ?>>
                        <div class="wp-modal-dialog">
                            <button type="button" class="wp-modal-close" onclick="document.getElementById('modal-manual-lead').hidden = true;">&times;</button>
                            <h2 style="font-size:18px;margin-bottom:16px;">Add Manual Lead Record</h2>
                            <form method="post" action="">
                                <input type="hidden" name="form_action" value="add_lead">
                                <div style="margin-bottom:10px">
                                    <label style="font-weight:600;display:block;margin-bottom:4px">Full Name *</label>
                                    <input type="text" name="name" class="large-text" required placeholder="e.g. Ramesh Kumar">
                                </div>
                                <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-bottom:10px">
                                    <div>
                                        <label style="font-weight:600;display:block;margin-bottom:4px">Phone / WhatsApp</label>
                                        <input type="text" name="phone" class="large-text" placeholder="+91 ...">
                                    </div>
                                    <div>
                                        <label style="font-weight:600;display:block;margin-bottom:4px">Email Address</label>
                                        <input type="email" name="email" class="large-text" placeholder="ramesh@company.com">
                                    </div>
                                </div>
                                <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-bottom:10px">
                                    <div>
                                        <label style="font-weight:600;display:block;margin-bottom:4px">Lead Type</label>
                                        <select name="type" class="large-text">
                                            <option value="demo">Demo Request</option>
                                            <option value="contact">Contact Form</option>
                                            <option value="callback">Callback</option>
                                            <option value="offer">Offer Claim</option>
                                            <option value="addon">Addon Request</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label style="font-weight:600;display:block;margin-bottom:4px">Business Name</label>
                                        <input type="text" name="business" class="large-text" placeholder="Company Ltd">
                                    </div>
                                </div>
                                <div style="margin-bottom:10px">
                                    <label style="font-weight:600;display:block;margin-bottom:4px">Product / Requirement</label>
                                    <input type="text" name="requirement" class="large-text" placeholder="WhatsApp API, Flow Builder, etc.">
                                </div>
                                <div style="margin-bottom:14px">
                                    <label style="font-weight:600;display:block;margin-bottom:4px">Notes / Message</label>
                                    <textarea name="message" class="large-text" rows="3" placeholder="Additional details..."></textarea>
                                </div>
                                <button type="submit" class="button button-primary">Save Lead to CRM</button>
                            </form>
                        </div>
                    </div>

                    <!-- Filter Bar -->
                    <div style="margin:16px 0;display:flex;gap:10px;flex-wrap:wrap;align-items:center;">
                        <form method="get" action="" style="display:flex;gap:8px;flex-wrap:wrap;align-items:center;">
                            <input type="hidden" name="page" value="leads">
                            <input type="text" name="q" class="regular-text" style="width:220px;" placeholder="Search leads..." value="<?php echo htmlspecialchars($searchQuery); ?>">
                            
                            <select name="type" class="regular-text" style="width:140px;" onchange="this.form.submit()">
                                <option value="all" <?php echo $filterType === 'all' ? 'selected' : ''; ?>>All Types</option>
                                <option value="demo" <?php echo $filterType === 'demo' ? 'selected' : ''; ?>>Demo</option>
                                <option value="contact" <?php echo $filterType === 'contact' ? 'selected' : ''; ?>>Contact</option>
                                <option value="callback" <?php echo $filterType === 'callback' ? 'selected' : ''; ?>>Callback</option>
                                <option value="offer" <?php echo $filterType === 'offer' ? 'selected' : ''; ?>>Offer</option>
                                <option value="addon" <?php echo $filterType === 'addon' ? 'selected' : ''; ?>>Addon</option>
                            </select>

                            <select name="status" class="regular-text" style="width:140px;" onchange="this.form.submit()">
                                <option value="all" <?php echo $filterStatus === 'all' ? 'selected' : ''; ?>>All Statuses</option>
                                <option value="new" <?php echo $filterStatus === 'new' ? 'selected' : ''; ?>>New</option>
                                <option value="contacted" <?php echo $filterStatus === 'contacted' ? 'selected' : ''; ?>>Contacted</option>
                                <option value="converted" <?php echo $filterStatus === 'converted' ? 'selected' : ''; ?>>Converted</option>
                            </select>

                            <button type="submit" class="button">Filter</button>
                            <?php if ($searchQuery !== '' || $filterType !== 'all' || $filterStatus !== 'all'): ?>
                                <a href="<?php echo $adminBase; ?>?page=leads" class="button button-danger">Reset</a>
                            <?php endif; ?>
                        </form>
                        <div style="margin-left:auto;color:#646970;font-size:12px">
                            Total: <strong><?php echo count($leads); ?></strong> leads
                        </div>
                    </div>

                    <div class="wp-table-responsive">
                        <table class="wp-list-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Type</th>
                                    <th>Contact Information</th>
                                    <th>Business / Requirement</th>
                                    <th>Message</th>
                                    <th>Source Page</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($leads)): ?>
                                    <tr><td colspan="9" style="text-align:center;color:#8c8f94;padding:24px">No lead entries match your criteria.</td></tr>
                                <?php else:
                                    foreach ($leads as $l): ?>
                                    <tr>
                                        <td><strong>#<?php echo $l['id']; ?></strong></td>
                                        <td><span class="badge badge-type"><?php echo htmlspecialchars($l['type'] ?? 'contact'); ?></span></td>
                                        <td>
                                            <strong style="color:#1d2327"><?php echo htmlspecialchars($l['name']); ?></strong><br>
                                            <span style="color:#646970;font-size:11px">✉ <?php echo htmlspecialchars($l['email'] ?: 'N/A'); ?></span><br>
                                            <span style="color:#2271b1;font-size:11px">📞 <?php echo htmlspecialchars($l['phone'] ?: 'N/A'); ?></span>
                                            <?php if (!empty($l['city']) || !empty($l['country'])): ?>
                                                <br><span style="color:#8c8f94;font-size:11px">📍 <?php echo htmlspecialchars(implode(', ', array_filter([$l['city'], $l['country']]))); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if (!empty($l['business'])): ?>
                                                <strong><?php echo htmlspecialchars($l['business']); ?></strong><br>
                                            <?php endif; ?>
                                            <span style="color:#646970;font-size:11px"><?php echo htmlspecialchars($l['requirement'] ?: $l['product'] ?: 'General'); ?></span>
                                        </td>
                                        <td style="max-width:240px;color:#50575e;font-size:12px">
                                            <?php echo htmlspecialchars($l['message'] ?: 'No additional notes.'); ?>
                                        </td>
                                        <td><span style="font-size:11px;color:#8c8f94"><?php echo htmlspecialchars(basename($l['source_page'] ?: '/')); ?></span></td>
                                        <td>
                                            <?php $st = strtolower($l['status'] ?? 'new'); ?>
                                            <span class="badge badge-<?php echo $st; ?>"><?php echo $st; ?></span>
                                        </td>
                                        <td style="white-space:nowrap;font-size:11px;color:#8c8f94"><?php echo htmlspecialchars($l['created_at']); ?></td>
                                        <td style="white-space:nowrap">
                                            <?php if ($st === 'new'): ?>
                                                <a href="<?php echo $adminBase; ?>?action=update_status&id=<?php echo $l['id']; ?>&status=contacted" class="button button-small">Contacted</a>
                                            <?php elseif ($st === 'contacted'): ?>
                                                <a href="<?php echo $adminBase; ?>?action=update_status&id=<?php echo $l['id']; ?>&status=converted" class="button button-small" style="color:#00a32a;border-color:#00a32a">Converted</a>
                                            <?php endif; ?>
                                            <a href="<?php echo $adminBase; ?>?action=delete_lead&id=<?php echo $l['id']; ?>" onclick="return confirm('Delete this lead record?')" class="button button-small button-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>

                <?php
                // -------------------------------------------------------------
                // 10. APPEARANCE & BRANDING SCREEN
                // -------------------------------------------------------------
                elseif ($page === 'appearance'):
                ?>
                    <h1 class="wp-heading-inline">Appearance &amp; Branding</h1>
                    <p class="description" style="margin-bottom:16px">Customize logos, favicons, and social media channels.</p>

                    <div class="postbox">
                        <div class="postbox-header"><h2>Brand Assets</h2></div>
                        <div class="postbox-content">
                            <form method="post" action="">
                                <input type="hidden" name="form_action" value="save_appearance">
                                <table class="form-table">
                                    <tr>
                                        <th><label for="logo_url">Header Logo Image URL</label></th>
                                        <td>
                                            <input type="text" id="logo_url" name="logo_url" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('logo_url', '/assets/images/logo.png')); ?>">
                                            <p class="description">Standard horizontal logo (e.g. /assets/images/logo.png)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="logo_footer_url">Footer Logo Image URL</label></th>
                                        <td>
                                            <input type="text" id="logo_footer_url" name="logo_footer_url" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('logo_footer_url', '/assets/images/logo-footer.png')); ?>">
                                            <p class="description">Light logo version for dark footer background.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="favicon_url">Favicon URL</label></th>
                                        <td>
                                            <input type="text" id="favicon_url" name="favicon_url" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('favicon_url', '/assets/images/favicon-32x32.png')); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Social Media Links</th>
                                        <td>
                                            <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px">
                                                <div>
                                                    <label style="font-size:11px;font-weight:600;display:block">WhatsApp Channel</label>
                                                    <input type="text" name="social_whatsapp" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('social_whatsapp', 'https://wa.me/918050854445')); ?>">
                                                </div>
                                                <div>
                                                    <label style="font-size:11px;font-weight:600;display:block">Facebook</label>
                                                    <input type="text" name="social_facebook" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('social_facebook', 'https://facebook.com/inboxwa')); ?>">
                                                </div>
                                                <div>
                                                    <label style="font-size:11px;font-weight:600;display:block">Instagram</label>
                                                    <input type="text" name="social_instagram" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('social_instagram', 'https://instagram.com/inboxwa')); ?>">
                                                </div>
                                                <div>
                                                    <label style="font-size:11px;font-weight:600;display:block">LinkedIn</label>
                                                    <input type="text" name="social_linkedin" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('social_linkedin', 'https://linkedin.com/company/inboxwa')); ?>">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <p class="submit"><button type="submit" class="button button-primary">Save Appearance</button></p>
                            </form>
                        </div>
                    </div>

                <?php
                // -------------------------------------------------------------
                // 11. GENERAL SETTINGS SCREEN
                // -------------------------------------------------------------
                elseif ($page === 'settings'):
                ?>
                    <h1 class="wp-heading-inline">Settings</h1>
                    
                    <div class="grid-2">
                        <div class="postbox">
                            <div class="postbox-header"><h2>General &amp; Contact Configuration</h2></div>
                            <div class="postbox-content">
                                <form method="post" action="">
                                    <input type="hidden" name="form_action" value="save_settings">
                                    <table class="form-table">
                                        <tr>
                                            <th>Site Title</th>
                                            <td><input type="text" name="site_title" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('site_title', 'InboxWa')); ?>" required></td>
                                        </tr>
                                        <tr>
                                            <th>Tagline</th>
                                            <td><input type="text" name="site_tagline" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('site_tagline', 'WhatsApp Marketing & Automation Platform')); ?>"></td>
                                        </tr>
                                        <tr>
                                            <th>Support WhatsApp Number *</th>
                                            <td>
                                                <input type="text" name="support_whatsapp" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('support_whatsapp', '918050854445')); ?>" required>
                                                <p class="description">Used for floating WhatsApp widget and 1-click chat buttons.</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Phone Number</th>
                                            <td><input type="text" name="phone_number" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('phone_number', '+91 80508 54445')); ?>"></td>
                                        </tr>
                                        <tr>
                                            <th>Sales Email</th>
                                            <td><input type="email" name="sales_email" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('sales_email', 'mail@inboxwa.com')); ?>"></td>
                                        </tr>
                                        <tr>
                                            <th>Technical Support Email</th>
                                            <td><input type="email" name="support_email" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('support_email', 'support@inboxwa.com')); ?>"></td>
                                        </tr>
                                        <tr>
                                            <th>Office Address</th>
                                            <td><textarea name="office_address" class="large-text" rows="2"><?php echo htmlspecialchars(hb_get_setting('office_address', "InboxWa AI Technologies Pvt Ltd, Bangalore, India")); ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <th>Google Analytics Measurement ID</th>
                                            <td><input type="text" name="ga_id" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('ga_id', '')); ?>" placeholder="G-XXXXXXXXXX"></td>
                                        </tr>
                                        <tr>
                                            <th>Meta Pixel ID</th>
                                            <td><input type="text" name="meta_pixel_id" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('meta_pixel_id', '')); ?>" placeholder="e.g. 1234567890"></td>
                                        </tr>
                                        <tr>
                                            <th>Custom &lt;head&gt; Scripts</th>
                                            <td><textarea name="custom_header_code" class="large-text" rows="3" placeholder="<script>...</script> or <style>..."><?php echo htmlspecialchars(hb_get_setting('custom_header_code', '')); ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <th>Custom Footer Scripts</th>
                                            <td><textarea name="custom_footer_code" class="large-text" rows="3" placeholder="<script>...</script>"><?php echo htmlspecialchars(hb_get_setting('custom_footer_code', '')); ?></textarea></td>
                                        </tr>
                                    </table>
                                    <p class="submit"><button type="submit" class="button button-primary">Save Settings</button></p>
                                </form>
                            </div>
                        </div>

                        <div class="postbox">
                            <div class="postbox-header"><h2>Administrator Credentials</h2></div>
                            <div class="postbox-content">
                                <form method="post" action="">
                                    <input type="hidden" name="form_action" value="change_password">
                                    <div style="margin-bottom:12px">
                                        <label style="font-weight:600;display:block;margin-bottom:4px">Admin Username</label>
                                        <input type="text" name="new_username" class="large-text" value="<?php echo htmlspecialchars($currentAdminUser); ?>" required>
                                    </div>
                                    <div style="margin-bottom:16px">
                                        <label style="font-weight:600;display:block;margin-bottom:4px">New Password</label>
                                        <input type="password" name="new_password" class="large-text" placeholder="Enter new strong password..." required>
                                    </div>
                                    <button type="submit" class="button button-primary">Update Password</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <!-- Mobile Drawer JS Toggle -->
    <script>
    (function(){
        var toggle = document.getElementById('mobile-menu-toggle');
        var backdrop = document.getElementById('wp-backdrop');
        if (!toggle) return;

        function openDrawer() {
            document.body.classList.add('wp-mobile-menu-open');
        }
        function closeDrawer() {
            document.body.classList.remove('wp-mobile-menu-open');
        }

        toggle.addEventListener('click', function(e){
            e.preventDefault();
            if (document.body.classList.contains('wp-mobile-menu-open')) {
                closeDrawer();
            } else {
                openDrawer();
            }
        });

        if (backdrop) {
            backdrop.addEventListener('click', closeDrawer);
        }

        // Close on escape
        document.addEventListener('keydown', function(e){
            if (e.key === 'Escape') closeDrawer();
        });
    })();
    </script>
</body>
</html>
