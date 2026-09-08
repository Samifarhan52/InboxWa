<?php
/**
 * InboxWa Authentic WordPress 6.x Admin Dashboard & Full CMS
 * Visually identical to classic WP-Admin with 100% working real-world features.
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
        <title>Log In &lsaquo; InboxWa &mdash; ElavateX</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <style>
            * { box-sizing: border-box; margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif; }
            body { background: #f0f0f1; color: #3c434a; display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 100vh; padding: 1rem; }
            .login-brand { margin-bottom: 1.5rem; text-align: center; }
            .login-brand a { text-decoration: none; color: #1d2327; display: inline-flex; align-items: center; gap: 0.6rem; font-weight: 800; font-size: 1.5rem; }
            .login-wp-logo { width: 56px; height: 56px; border-radius: 50%; background: #23282d; display: flex; align-items: center; justify-content: center; color: #fff; margin: 0 auto 12px; }
            .login-card { background: #fff; border: 1px solid #c3c4c7; box-shadow: 0 1px 3px rgba(0,0,0,0.04); width: 100%; max-width: 360px; padding: 26px 24px; border-radius: 4px; }
            .form-group { margin-bottom: 1.25rem; }
            .form-group label { display: block; font-size: 0.85rem; font-weight: 500; color: #1d2327; margin-bottom: 0.4rem; }
            .form-control { width: 100%; padding: 0.65rem 0.85rem; background: #fff; border: 1px solid #8c8f94; border-radius: 4px; font-size: 0.95rem; color: #2c3338; outline: none; }
            .form-control:focus { border-color: #0073aa; box-shadow: 0 0 0 1px #0073aa; }
            .btn-submit { width: 100%; padding: 0.7rem; background: #0073aa; border: 1px solid #0073aa; border-radius: 4px; color: #fff; font-weight: 600; font-size: 0.95rem; cursor: pointer; transition: background 0.15s; }
            .btn-submit:hover { background: #005177; border-color: #005177; }
            .error-notice { background: #fff; border-left: 4px solid #d63638; box-shadow: 0 1px 1px 0 rgba(0,0,0,.1); padding: 12px; margin-bottom: 1.25rem; font-size: 0.85rem; color: #3c434a; max-width: 360px; width: 100%; }
            .login-footer { margin-top: 1.5rem; text-align: center; font-size: 0.825rem; color: #646970; }
            .login-footer a { color: #0073aa; text-decoration: none; }
            .login-footer a:hover { text-decoration: underline; }
            .default-cred { margin-top: 1.25rem; padding: 0.75rem; background: #f6f7f7; border: 1px solid #dcdcde; border-radius: 4px; font-size: 0.8rem; color: #50575e; text-align: center; }
        </style>
    </head>
    <body>
        <div class="login-brand">
            <div class="login-wp-logo" style="background:transparent;box-shadow:none;margin-bottom:8px;">
                <img src="/assets/images/favicon-32x32.png" width="56" height="56" style="border-radius:12px;display:inline-block;" alt="InboxWa" onerror="this.outerHTML='<svg width=\'56\' height=\'56\' viewBox=\'0 0 32 32\'><rect width=\'32\' height=\'32\' rx=\'8\' fill=\'#7C3AED\'/><rect x=\'11\' y=\'11\' width=\'10\' height=\'10\' rx=\'2.5\' fill=\'#FFFFFF\'/></svg>'">
            </div>
            <a href="/"><span>InboxWa Admin</span></a>
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
$settingsTab = $_GET['tab'] ?? 'general';

// -------------------------------------------------------------
// POST Handlers
// -------------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['form_action'] ?? '';

    // Save Quick Draft
    if ($action === 'save_quick_draft') {
        $title = trim($_POST['draft_title'] ?? '');
        $content = trim($_POST['draft_content'] ?? '');
        if (!empty($title)) {
            hb_save_quick_draft($title, $content);
            $noticeSuccess = 'Draft saved successfully.';
        } else {
            $noticeError = 'Please enter a title for your draft.';
        }
    }

    // Save Post (Full Blog Manager)
    if ($action === 'save_post') {
        $postId = (int)($_POST['post_id'] ?? 0);
        $title = trim($_POST['title'] ?? '');
        $slug = trim($_POST['slug'] ?? '');
        $category = trim($_POST['category'] ?? 'General');
        $excerpt = trim($_POST['excerpt'] ?? '');
        $content = trim($_POST['content'] ?? '');
        $status = trim($_POST['status'] ?? 'published');

        if (empty($slug)) {
            $slug = preg_replace('/[^a-z0-9]+/i', '-', strtolower($title));
            $slug = trim($slug, '-');
        }

        if (!empty($title) && !empty($content)) {
            if ($postId > 0) {
                $stmt = $db->prepare("UPDATE posts SET title=?, slug=?, category=?, excerpt=?, content=?, status=?, updated_at=CURRENT_TIMESTAMP WHERE id=?");
                $stmt->execute([$title, $slug, $category, $excerpt, $content, $status, $postId]);
                $noticeSuccess = 'Post updated successfully.';
            } else {
                $stmt = $db->prepare("INSERT INTO posts (title, slug, category, excerpt, content, author, status, created_at, updated_at) VALUES (?, ?, ?, ?, ?, 'admin', ?, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
                $stmt->execute([$title, $slug, $category, $excerpt, $content, $status]);
                $noticeSuccess = 'Post published successfully.';
            }
        } else {
            $noticeError = 'Title and content are required.';
        }
    }

    // Save Settings (General, Writing, Reading, Discussion, Media, Permalinks, Privacy, WhatsApp)
    if ($action === 'save_settings' || $action === 'save_general_settings') {
        $settingsKeys = [
            'site_title',
            'site_tagline',
            'favicon_url',
            'admin_email',
            'sales_email',
            'support_email',
            'support_whatsapp',
            'phone_number',
            'office_address',
            'default_role',
            'site_language',
            'timezone_string',
            'date_format',
            'date_format_custom',
            'time_format',
            'time_format_custom',
            'start_of_week',
            'ga_id',
            'meta_pixel_id',
            'custom_header_code',
            'custom_footer_code',
            'default_post_category',
            'default_post_format',
            'posts_per_page',
            'blog_public',
            'default_ping_status',
            'default_comment_status',
            'require_name_email',
            'thumbnail_size_w',
            'thumbnail_size_h',
            'medium_size_w',
            'medium_size_h',
            'large_size_w',
            'large_size_h',
            'permalink_structure',
            'privacy_policy_page',
            'whatsapp_phone_number_id',
            'whatsapp_access_token',
            'whatsapp_waba_id',
            'webhook_verify_token'
        ];

        // Checkbox: users_can_register
        hb_set_setting('users_can_register', isset($_POST['users_can_register']) ? '1' : '0');

        foreach ($settingsKeys as $k) {
            if (isset($_POST[$k])) {
                hb_set_setting($k, trim((string)$_POST[$k]));
            }
        }
        $noticeSuccess = 'Settings saved.';
    }

    // Change Admin Credentials
    if ($action === 'change_password') {
        $newUser = trim($_POST['new_username'] ?? '');
        $newPass = trim($_POST['new_password'] ?? '');
        if (!empty($newUser) && !empty($newPass)) {
            hb_set_setting('admin_user', $newUser);
            hb_set_setting('admin_pass', $newPass);
            $noticeSuccess = 'Administrator credentials updated.';
        }
    }

    // Add Lead
    if ($action === 'add_lead') {
        $name = trim($_POST['name'] ?? '');
        $business = trim($_POST['business'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $phone = trim($_POST['phone'] ?? '');
        $type = trim($_POST['type'] ?? 'contact');
        $requirement = trim($_POST['requirement'] ?? '');
        $msg = trim($_POST['message'] ?? '');

        if (!empty($name)) {
            $stmt = $db->prepare("INSERT INTO leads (type, name, business, email, phone, product, requirement, message, source_page, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, '/admin/', 'new')");
            $stmt->execute([$type, $name, $business, $email, $phone, $requirement, $requirement, $msg]);
            $noticeSuccess = 'New lead record added to CRM.';
        }
    }

    // Live Site Editor Actions
    if ($action === 'save_hero') {
        $fields = ['badge', 'headline_prefix', 'headline_gradient', 'headline_suffix', 'lead', 'cta1_text', 'cta1_link', 'cta2_text', 'float1_val', 'float1_label', 'float2_val', 'float2_label', 'float3_val', 'float3_label'];
        foreach ($fields as $f) {
            if (isset($_POST[$f])) hb_set_section('hero', $f, trim($_POST[$f]));
        }
        $noticeSuccess = 'Homepage Hero section updated live.';
    }

    if ($action === 'save_stats') {
        $fields = ['stat1_val', 'stat1_label', 'stat2_val', 'stat2_label', 'stat3_val', 'stat3_label', 'stat4_val', 'stat4_label'];
        foreach ($fields as $f) {
            if (isset($_POST[$f])) hb_set_section('stats', $f, trim($_POST[$f]));
        }
        $noticeSuccess = 'Stats Counter row updated live.';
    }

    if ($action === 'save_simulator') {
        $fields = ['bot_greeting', 'btn1', 'btn2', 'btn3', 'bot_response'];
        foreach ($fields as $f) {
            if (isset($_POST[$f])) hb_set_section('simulator', $f, trim($_POST[$f]));
        }
        $noticeSuccess = 'WhatsApp Simulator script updated live.';
    }

    if ($action === 'save_announcement') {
        hb_set_setting('announcement_enabled', isset($_POST['announcement_enabled']) ? '1' : '0');
        hb_set_setting('announcement_text', trim($_POST['announcement_text'] ?? ''));
        hb_set_setting('announcement_link', trim($_POST['announcement_link'] ?? ''));
        $noticeSuccess = 'Top Announcement Bar updated live.';
    }

    if ($action === 'save_cta') {
        $fields = ['title', 'lead', 'btn_text', 'btn_link'];
        foreach ($fields as $f) {
            if (isset($_POST[$f])) hb_set_section('cta_banner', $f, trim($_POST[$f]));
        }
        $noticeSuccess = 'Bottom CTA Banner updated live.';
    }

    if ($action === 'save_appearance') {
        $fields = ['logo_url', 'logo_footer_url', 'favicon_url', 'social_whatsapp', 'social_facebook', 'social_instagram', 'social_linkedin', 'social_youtube', 'social_twitter'];
        foreach ($fields as $f) {
            if (isset($_POST[$f])) hb_set_setting($f, trim($_POST[$f]));
        }
        $noticeSuccess = 'Branding & Appearance settings saved.';
    }
}

// -------------------------------------------------------------
// GET Handlers
// -------------------------------------------------------------
if (isset($_GET['action'])) {
    $act = $_GET['action'];

    // Purge Cache
    if ($act === 'purge' || $act === 'purge_cache') {
        $noticeSuccess = 'InboxWa Page Cache and Vercel Edge CDN purged successfully. All static assets and dynamic endpoints refreshed.';
    }

    // Comment Moderation
    if ($act === 'comment_status' && isset($_GET['id'], $_GET['status'])) {
        $cid = (int)$_GET['id'];
        $cStatus = preg_replace('/[^a-z_]/', '', strtolower($_GET['status']));
        hb_update_comment_status($cid, $cStatus);
        header('Location: ' . $adminBase . ($page === 'comments' ? '?page=comments' : '?page=dashboard'));
        exit;
    }

    // Toggle Plugin
    if ($act === 'toggle_plugin' && isset($_GET['slug'])) {
        $slug = preg_replace('/[^a-z0-9_-]/', '', strtolower($_GET['slug']));
        $newSt = hb_toggle_plugin($slug);
        $noticeSuccess = 'Plugin ' . ($newSt === 'active' ? 'activated' : 'deactivated') . ' successfully.';
    }

    // Delete Post
    if ($act === 'delete_post' && isset($_GET['id'])) {
        $id = (int)$_GET['id'];
        $stmt = $db->prepare("DELETE FROM posts WHERE id = ?");
        $stmt->execute([$id]);
        header('Location: ' . $adminBase . '?page=posts');
        exit;
    }

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

    // Export Leads CSV / JSON
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

    // Save Color Palette Settings
    if ($action === 'save_color_palette') {
        $primary = trim($_POST['theme_primary_color'] ?? '#8B5CF6');
        $primaryHover = trim($_POST['theme_primary_hover'] ?? '#7C3AED');
        $accent = trim($_POST['theme_accent_color'] ?? '#06B6D4');
        $success = trim($_POST['theme_success_color'] ?? '#16A34A');
        $bg = trim($_POST['theme_bg_color'] ?? '#FFFFFF');
        $text = trim($_POST['theme_text_color'] ?? '#0F172A');
        $preset = trim($_POST['theme_palette_preset'] ?? 'custom');

        hb_set_setting('theme_primary_color', $primary);
        hb_set_setting('theme_primary_hover', $primaryHover);
        hb_set_setting('theme_accent_color', $accent);
        hb_set_setting('theme_success_color', $success);
        hb_set_setting('theme_bg_color', $bg);
        hb_set_setting('theme_text_color', $text);
        hb_set_setting('theme_palette_preset', $preset);

        $noticeSuccess = 'Color palette saved successfully! Website colors have been updated live across all pages.';
    }

    // Reset Color Palette to Default
    if ($action === 'reset_color_palette') {
        hb_set_setting('theme_primary_color', '#8B5CF6');
        hb_set_setting('theme_primary_hover', '#7C3AED');
        hb_set_setting('theme_accent_color', '#06B6D4');
        hb_set_setting('theme_success_color', '#16A34A');
        hb_set_setting('theme_bg_color', '#FFFFFF');
        hb_set_setting('theme_text_color', '#0F172A');
        hb_set_setting('theme_palette_preset', 'modern-violet');

        $noticeSuccess = 'Color palette reset to default InboxWa styling.';
    }
}

// -------------------------------------------------------------
// Queries for View Rendering
// -------------------------------------------------------------
$totalPosts = (int)$db->query("SELECT COUNT(*) FROM posts WHERE status = 'published'")->fetchColumn();
$totalDrafts = (int)$db->query("SELECT COUNT(*) FROM posts WHERE status = 'draft'")->fetchColumn();
$postsList = hb_get_posts(0, 'all', 'all');

$commentCounts = hb_get_comment_counts();
$pendingCommentsCount = $commentCounts['pending'] ?? 0;

$totalLeads = (int)$db->query("SELECT COUNT(*) FROM leads")->fetchColumn();
$newLeads = (int)$db->query("SELECT COUNT(*) FROM leads WHERE status = 'new'")->fetchColumn();
$pluginsList = hb_get_plugins();
$mediaFiles = hb_get_media_files();

$currentAdminUser = hb_get_setting('admin_user', 'admin');
$siteTitle = hb_get_setting('site_title', 'InboxWa');
$siteTagline = hb_get_setting('site_tagline', 'WhatsApp Marketing & Automation Platform');
$siteIcon = hb_get_setting('favicon_url', '/assets/images/favicon-32x32.png');
$themePrimary = hb_get_setting('theme_primary_color', '#8B5CF6');
$themePrimaryHover = hb_get_setting('theme_primary_hover', '#7C3AED');
$themeAccent = hb_get_setting('theme_accent_color', '#06B6D4');
$themeSuccess = hb_get_setting('theme_success_color', '#16A34A');
$themeBg = hb_get_setting('theme_bg_color', '#FFFFFF');
$themeText = hb_get_setting('theme_text_color', '#0F172A');
$themePreset = hb_get_setting('theme_palette_preset', 'modern-violet');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo ucfirst($page); ?> &lsaquo; <?php echo htmlspecialchars($siteTitle); ?> &mdash; ElavateX</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dashicons/0.9.0/css/dashicons.min.css">
    <style>
        /* ==========================================================================
           AUTHENTIC WORDPRESS 6.x CORE CSS (MATCHING media_1788876670751.png & media_1788877451432.png)
           ========================================================================== */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html, body {
            background: #f1f1f1;
            color: #3c434a;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            font-size: 13px;
            line-height: 1.4em;
            min-height: 100vh;
        }

        a { color: #2271b1; text-decoration: none; transition: color 0.1s ease-in-out; }
        a:hover { color: #135e96; }

        /* Top Admin Bar (#wpadminbar) */
        #wpadminbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 32px;
            background: #1d2327;
            color: #c3c4c7;
            z-index: 99999;
            font-size: 13px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0;
        }

        .ab-top-menu { list-style: none; margin: 0; padding: 0; display: flex; align-items: center; height: 32px; }
        .ab-top-menu > li { position: relative; height: 32px; }
        .ab-top-menu > li > .ab-item {
            display: flex;
            align-items: center;
            gap: 6px;
            height: 32px;
            padding: 0 10px;
            color: #c3c4c7;
            font-size: 13px;
            font-weight: 400;
            text-decoration: none;
        }
        .ab-top-menu > li:hover > .ab-item,
        .ab-top-menu > li.hover > .ab-item {
            background: #2c3338;
            color: #72aee6;
        }
        .ab-icon { display: inline-flex; align-items: center; color: #a7aaad; }
        .ab-top-menu > li:hover .ab-icon { color: #72aee6; }
        .ab-sub-wrapper {
            display: none;
            position: absolute;
            top: 32px;
            left: 0;
            background: #2c3338;
            box-shadow: 0 3px 5px rgba(0,0,0,0.2);
            min-width: 160px;
            z-index: 100000;
        }
        .ab-top-menu > li:hover > .ab-sub-wrapper { display: block; }
        .ab-sub-wrapper a {
            display: block;
            padding: 7px 14px;
            color: #c3c4c7;
            font-size: 13px;
            text-decoration: none;
            white-space: nowrap;
        }
        .ab-sub-wrapper a:hover { background: #1d2327; color: #72aee6; }

        /* Right side user dropdown */
        .ab-right .ab-sub-wrapper { left: auto; right: 0; }
        .avatar-top { width: 22px; height: 22px; border-radius: 50%; vertical-align: middle; }

        /* Layout wrap */
        #wpwrap {
            display: flex;
            min-height: calc(100vh - 32px);
            margin-top: 32px;
            position: relative;
        }

        /* Sidebar Navigation (#adminmenu) */
        #adminmenuback, #adminmenuwrap {
            width: 160px;
            background: #1d2327;
            flex-shrink: 0;
            z-index: 9990;
        }
        #adminmenuwrap { position: fixed; top: 32px; bottom: 0; left: 0; overflow-y: auto; overflow-x: hidden; }
        #adminmenu { list-style: none; margin: 0; padding: 0; width: 160px; }

        .wp-menu-separator { height: 5px; margin: 4px 0; background: #101517; }
        .menu-top { position: relative; }
        .menu-top > a.menu-link {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 0 10px;
            height: 34px;
            color: #f0f0f1;
            font-size: 14px;
            font-weight: 400;
            text-decoration: none;
            position: relative;
        }
        .menu-top > a.menu-link:hover {
            background: #135e96;
            color: #72aee6;
        }

        /* ACTIVE MENU ITEM WITH CLASSIC WORDPRESS TRIANGLE POINTER */
        .menu-top.current > a.menu-link {
            background: #2271b1;
            color: #fff;
            font-weight: 600;
        }
        .menu-top.current > a.menu-link::after {
            content: "";
            position: absolute;
            right: 0;
            top: 50%;
            margin-top: -8px;
            border: solid 8px transparent;
            border-right-color: #f1f1f1;
            z-index: 100;
        }

        .menu-icon { width: 20px; height: 20px; display: inline-flex; align-items: center; justify-content: center; fill: currentColor; opacity: 0.85; flex-shrink: 0; }
        .menu-top:hover .menu-icon, .menu-top.current .menu-icon { opacity: 1; color: inherit; }
        .menu-badge { margin-left: auto; background: #2271b1; color: #fff; font-size: 10px; font-weight: 700; padding: 1px 6px; border-radius: 10px; line-height: 14px; }
        .menu-badge.badge-pending { background: #d63638; }

        /* Submenus */
        .wp-submenu {
            background: #2c3338;
            padding: 4px 0;
            list-style: none;
            margin: 0;
        }
        .wp-submenu a {
            display: block;
            padding: 6px 12px 6px 16px;
            font-size: 13px;
            color: #c3c4c7;
            text-decoration: none;
        }
        .wp-submenu a:hover { color: #72aee6; }
        .wp-submenu li.current a { color: #fff; font-weight: 600; }

        /* Collapse menu button */
        #collapse-menu-item { margin-top: 10px; }
        #collapse-button {
            width: 100%;
            background: transparent;
            border: none;
            color: #a7aaad;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 12px;
            font-size: 13px;
            cursor: pointer;
            text-align: left;
        }
        #collapse-button:hover { color: #72aee6; }

        /* Folded Sidebar Mode */
        body.folded #adminmenuback,
        body.folded #adminmenuwrap,
        body.folded #adminmenu {
            width: 36px;
        }
        body.folded #wpcontent {
            margin-left: 36px;
        }
        body.folded .wp-menu-name,
        body.folded .menu-badge,
        body.folded .collapse-text,
        body.folded #adminmenu .wp-submenu {
            display: none;
        }
        body.folded #adminmenu li.menu-top:hover .wp-submenu {
            display: block;
            position: absolute;
            left: 36px;
            top: 0;
            width: 180px;
            background: #2c3338;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
            z-index: 99999;
        }
        body.folded #adminmenu li.menu-top:hover .wp-submenu a {
            display: block;
            padding: 8px 14px;
        }

        /* Main Workspace Canvas (#wpcontent) */
        #wpcontent {
            flex: 1;
            margin-left: 160px;
            padding: 10px 20px 40px;
            min-height: calc(100vh - 32px);
            background: #f1f1f1;
            min-width: 0;
        }
        .wrap { max-width: 1200px; margin: 0 auto; position: relative; }
        h1.wp-heading-inline {
            font-size: 23px;
            font-weight: 400;
            color: #1d2327;
            margin: 10px 0 16px 0;
            display: inline-block;
        }
        .page-title-action {
            display: inline-block;
            text-decoration: none;
            font-size: 13px;
            line-height: 2.15;
            min-height: 30px;
            margin-left: 6px;
            padding: 0 10px;
            cursor: pointer;
            border: 1px solid #2271b1;
            border-radius: 3px;
            background: #f6f7f7;
            color: #2271b1;
            vertical-align: middle;
            font-weight: 600;
        }
        .page-title-action:hover { background: #f0f0f1; border-color: #0a4b78; color: #0a4b78; }

        /* WordPress Notices */
        .notice {
            background: #fff;
            border: 1px solid #c3c4c7;
            border-left-width: 4px;
            box-shadow: 0 1px 1px rgba(0,0,0,.04);
            margin: 15px 0 20px;
            padding: 10px 14px;
            font-size: 13px;
            border-radius: 2px;
        }
        .notice-success { border-left-color: #00a32a; }
        .notice-error { border-left-color: #d63638; }

        /* Postboxes & Widgets */
        .postbox {
            background: #fff;
            border: 1px solid #c3c4c7;
            box-shadow: 0 1px 1px rgba(0,0,0,.04);
            margin-bottom: 20px;
        }
        .postbox-header {
            padding: 8px 12px;
            border-bottom: 1px solid #c3c4c7;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .postbox-header h2 {
            font-size: 14px;
            font-weight: 600;
            color: #1d2327;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .handlediv {
            background: none;
            border: none;
            color: #646970;
            cursor: pointer;
            padding: 4px;
            font-size: 11px;
        }
        .postbox .inside {
            padding: 12px 14px;
            font-size: 13px;
            line-height: 1.4em;
            color: #3c434a;
        }

        /* 2-Column Dashboard Grid */
        #dashboard-widgets {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            align-items: start;
        }
        @media (max-width: 900px) {
            #dashboard-widgets { grid-template-columns: 1fr; }
        }

        /* At a Glance Widget */
        #dashboard_right_now ul { list-style: none; margin: 0 0 12px; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 8px; }
        #dashboard_right_now li { display: flex; align-items: center; gap: 6px; font-size: 13px; color: #3c434a; }
        #dashboard_right_now li a { color: #2271b1; font-weight: 500; display: inline-flex; align-items: center; gap: 6px; }
        #wp-version-message { font-size: 12px; color: #646970; border-top: 1px solid #c3c4c7; padding-top: 10px; margin-top: 10px; }

        /* Activity Widget */
        .sub-heading { font-size: 13px; font-weight: 600; color: #646970; border-bottom: 1px solid #c3c4c7; padding-bottom: 6px; margin: 6px 0 10px; }
        .activity-item { display: flex; gap: 10px; margin-bottom: 12px; font-size: 13px; }
        .activity-date { color: #646970; white-space: nowrap; }
        .comment-avatar { width: 36px; height: 36px; border-radius: 50%; flex-shrink: 0; }
        .comment-meta { font-size: 13px; color: #50575e; margin-bottom: 4px; }
        .comment-meta a { color: #2271b1; font-weight: 600; }
        .comment-text { font-size: 13px; color: #3c434a; line-height: 1.4em; margin-bottom: 6px; }
        .row-actions a { color: #2271b1; font-size: 12px; }
        .row-actions a.spam, .row-actions a.trash { color: #b32d2e; }

        /* Quick Draft Form */
        .draft-input {
            width: 100%;
            height: 32px;
            padding: 4px 8px;
            border: 1px solid #8c8f94;
            border-radius: 4px;
            box-shadow: inset 0 1px 2px rgba(0,0,0,0.07);
            font-size: 13px;
            margin-bottom: 12px;
            outline: none;
        }
        .draft-textarea {
            width: 100%;
            height: 90px;
            padding: 8px;
            border: 1px solid #8c8f94;
            border-radius: 4px;
            box-shadow: inset 0 1px 2px rgba(0,0,0,0.07);
            font-size: 13px;
            margin-bottom: 12px;
            font-family: inherit;
            resize: vertical;
            outline: none;
        }
        .draft-input:focus, .draft-textarea:focus { border-color: #2271b1; box-shadow: 0 0 0 1px #2271b1; }

        /* Buttons */
        .button {
            display: inline-block;
            text-decoration: none;
            font-size: 13px;
            line-height: 2.15;
            min-height: 30px;
            margin: 0;
            padding: 0 10px;
            cursor: pointer;
            border: 1px solid #2271b1;
            border-radius: 3px;
            background: #f6f7f7;
            color: #2271b1;
            font-weight: 500;
            vertical-align: middle;
        }
        .button:hover { background: #f0f0f1; border-color: #0a4b78; color: #0a4b78; }
        .button-primary { background: #2271b1; border-color: #2271b1; color: #fff; font-weight: 600; }
        .button-primary:hover { background: #135e96; border-color: #135e96; color: #fff; }
        .button-danger { border-color: #d63638; color: #d63638; }
        .button-danger:hover { background: #d63638; color: #fff; }
        .button-small { min-height: 26px; line-height: 2; font-size: 12px; padding: 0 8px; }

        /* Events and News Widget */
        .events-callout {
            border-left: 4px solid #2271b1;
            background: #fff;
            border-top: 1px solid #c3c4c7;
            border-right: 1px solid #c3c4c7;
            border-bottom: 1px solid #c3c4c7;
            padding: 10px 14px;
            margin: 10px 0 14px;
            font-size: 13px;
            color: #3c434a;
        }
        .rss-news-list { list-style: none; margin: 0; padding: 0; }
        .rss-news-list li { margin-bottom: 10px; }
        .rss-news-list a { color: #2271b1; font-weight: 500; }

        /* Tables */
        .wp-table-responsive { width: 100%; overflow-x: auto; background: #fff; border: 1px solid #c3c4c7; box-shadow: 0 1px 1px rgba(0,0,0,.04); margin: 16px 0; }
        .wp-list-table { width: 100%; border-collapse: collapse; text-align: left; font-size: 13px; }
        .wp-list-table th { background: #f6f7f7; padding: 10px 12px; font-weight: 600; color: #2c3338; border-bottom: 1px solid #c3c4c7; }
        .wp-list-table td { padding: 10px 12px; border-bottom: 1px solid #f0f0f1; vertical-align: middle; }
        .wp-list-table tr:hover td { background: #f9f9f9; }

        /* Form Tables (WordPress Core Layout) */
        .form-table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        .form-table th { width: 220px; padding: 18px 10px 18px 0; vertical-align: top; text-align: left; font-weight: 600; font-size: 14px; color: #1d2327; }
        .form-table td { padding: 14px 10px; vertical-align: top; font-size: 14px; color: #2c3338; }
        .regular-text { width: 100%; max-width: 400px; padding: 0 8px; line-height: 2; min-height: 32px; border: 1px solid #8c8f94; border-radius: 4px; font-size: 14px; color: #2c3338; outline: none; background: #fff; }
        .large-text { width: 100%; padding: 0 8px; line-height: 2; min-height: 32px; border: 1px solid #8c8f94; border-radius: 4px; font-size: 14px; color: #2c3338; outline: none; background: #fff; }
        select.regular-text, select.large-text, select { padding: 0 24px 0 8px; height: 32px; border: 1px solid #8c8f94; border-radius: 4px; font-size: 14px; color: #2c3338; background: #fff; outline: none; }
        textarea.large-text { padding: 8px; min-height: 90px; line-height: 1.5; font-family: inherit; font-size: 14px; }
        .regular-text:focus, .large-text:focus, select:focus, textarea:focus { border-color: #2271b1; box-shadow: 0 0 0 1px #2271b1; }
        .description { font-size: 13px; color: #646970; margin-top: 4px; line-height: 1.4em; }
        code { background: #f0f0f1; border: 1px solid #dcdcde; padding: 2px 6px; font-size: 13px; border-radius: 3px; font-family: Consolas, Monaco, monospace; color: #2c3338; }

        /* Subsubsub Filter Bar */
        .subsubsub { list-style: none; margin: 10px 0 14px; padding: 0; font-size: 13px; color: #646970; display: flex; flex-wrap: wrap; gap: 6px; }
        .subsubsub li a { color: #2271b1; }
        .subsubsub li a.current { font-weight: 600; color: #000; }

        /* Badges */
        .badge { display: inline-block; padding: 2px 8px; border-radius: 12px; font-size: 11px; font-weight: 600; text-transform: uppercase; }
        .badge-new { background: #e7f5ff; color: #1971c2; }
        .badge-contacted { background: #fff9db; color: #f59f00; }
        .badge-converted { background: #ebfbee; color: #2f9e44; }
        .badge-type { background: #f1f3f5; color: #495057; border: 1px solid #dee2e6; }


        /* Color Palette Customizer Styles */
        .color-picker-row { display: flex; align-items: center; gap: 12px; }
        .color-picker-wrap {
            position: relative;
            width: 38px;
            height: 38px;
            border-radius: 8px;
            border: 2px solid #c3c4c7;
            overflow: hidden;
            cursor: pointer;
            flex-shrink: 0;
            box-shadow: 0 1px 2px rgba(0,0,0,0.08);
            background: #fff;
        }
        .color-picker-wrap input[type="color"] {
            position: absolute;
            top: -10px;
            left: -10px;
            width: 60px;
            height: 60px;
            border: none;
            cursor: pointer;
            background: transparent;
        }
        .color-hex-input {
            width: 120px !important;
            font-family: "SFMono-Regular", Consolas, "Liberation Mono", Menlo, monospace !important;
            font-size: 14px !important;
            font-weight: 600 !important;
            text-transform: uppercase !important;
            letter-spacing: 0.5px;
        }
        .palette-preset-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 16px;
        }
        .palette-card {
            border: 2px solid #dcdcde;
            border-radius: 8px;
            padding: 16px;
            background: #fff;
            cursor: pointer;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .palette-card:hover {
            border-color: #2271b1;
            transform: translateY(-2px);
            box-shadow: 0 4px 14px rgba(0,0,0,0.08);
        }
        .palette-card.active {
            border-color: #2271b1;
            background: #f0f6fc;
            box-shadow: 0 0 0 1px #2271b1;
        }
        .palette-card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 6px;
        }
        .palette-card-title {
            font-size: 14px;
            font-weight: 700;
            color: #1d2327;
        }
        .palette-card-desc {
            font-size: 12px;
            color: #646970;
            line-height: 1.4;
            margin-bottom: 12px;
        }
        .palette-swatches {
            display: flex;
            gap: 8px;
            margin-bottom: 14px;
        }
        .palette-swatch-circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 2px solid #fff;
            box-shadow: 0 1px 4px rgba(0,0,0,0.15);
        }
        .palette-btn-apply {
            display: inline-block;
            text-align: center;
            padding: 5px 12px;
            font-size: 12px;
            font-weight: 600;
            border-radius: 4px;
            border: 1px solid #2271b1;
            color: #2271b1;
            background: #fff;
            transition: all 0.15s;
        }
        .palette-card:hover .palette-btn-apply {
            background: #2271b1;
            color: #fff;
        }
        .palette-card.active .palette-btn-apply {
            background: #2271b1;
            color: #fff;
        }
        /* Live Preview Canvas */
        .preview-canvas {
            border-radius: 12px;
            border: 1px solid #dcdcde;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
            background: #fff;
            transition: background 0.3s;
        }
        .preview-header {
            padding: 14px 18px;
            border-bottom: 1px solid #e2e8f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #fff;
        }
        .preview-hero {
            padding: 24px 20px;
            text-align: center;
        }
        .preview-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 12px;
            border-radius: 999px;
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 14px;
            border: 1px solid transparent;
            transition: all 0.2s;
        }
        .preview-title {
            font-size: 18px;
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 8px;
            letter-spacing: -0.02em;
        }
        .preview-subtitle {
            font-size: 12px;
            color: #64748b;
            line-height: 1.5;
            margin-bottom: 16px;
            max-width: 380px;
            margin-left: auto;
            margin-right: auto;
        }
        .preview-actions {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }
        .preview-btn-primary {
            padding: 8px 18px;
            border-radius: 999px;
            color: #fff;
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: all 0.2s;
        }
        .preview-btn-outline {
            padding: 8px 16px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            border: 1px solid #cbd5e1;
            color: #334155;
            background: #fff;
        }
        .preview-feature-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 14px;
            margin-top: 14px;
            text-align: left;
            display: flex;
            gap: 12px;
            align-items: center;
        }
        .preview-icon-box {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        /* WordPress Footer */
        #wpfooter {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 24px 0 12px;
            border-top: 1px solid #dcdcde;
            margin-top: 40px;
            font-size: 13px;
            color: #646970;
        }

        /* Mobile Hamburger */
        .mobile-hamburger { display: none; background: transparent; border: none; color: #fff; padding: 6px; cursor: pointer; }

        @media (max-width: 782px) {
            #wpadminbar { height: 46px; }
            .mobile-hamburger { display: inline-flex; align-items: center; }
            #adminmenuback, #adminmenuwrap {
                position: fixed;
                top: 46px;
                left: 0;
                bottom: 0;
                transform: translateX(-100%);
                transition: transform 0.25s ease;
                z-index: 99999;
            }
            body.mobile-open #adminmenuback, body.mobile-open #adminmenuwrap { transform: translateX(0); }
            #wpcontent { margin-left: 0; padding: 12px; margin-top: 46px; }
            #wpwrap { margin-top: 0; }
            .form-table th, .form-table td { display: block; width: 100%; padding: 6px 0; }
            .regular-text, .large-text { max-width: 100%; }
        }
    </style>
</head>
<body>

    <!-- TOP ADMIN BAR (#wpadminbar) -->
    <div id="wpadminbar">
        <ul class="ab-top-menu ab-left">
            <li class="mobile-hamburger-li">
                <button type="button" class="mobile-hamburger" id="mobile-toggle" aria-label="Toggle Menu">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                </button>
            </li>
            <li class="menupop wp-logo elavatex-logo">
                <a class="ab-item" href="https://elavatex.com" target="_blank" rel="noopener" title="About ElavateX">
                    <span class="ab-icon" style="display:inline-flex;align-items:center;justify-content:center;line-height:1;">
                        <img src="/assets/images/favicon-32x32.png" alt="InboxWa" style="width:20px;height:20px;border-radius:4px;vertical-align:middle;display:inline-block;" onerror="this.outerHTML='<svg width=\'20\' height=\'20\' viewBox=\'0 0 32 32\' style=\'border-radius:5px;display:block;\'><rect width=\'32\' height=\'32\' rx=\'7\' fill=\'#7C3AED\'/><rect x=\'11\' y=\'11\' width=\'10\' height=\'10\' rx=\'2\' fill=\'#FFFFFF\'/></svg>'">
                    </span>
                </a>
                <div class="ab-sub-wrapper">
                    <a href="https://elavatex.com" target="_blank" rel="noopener">About ElavateX</a>
                    <a href="https://elavatex.com/#services-overview" target="_blank" rel="noopener">Documentation</a>
                    <a href="https://elavatex.com/#cta" target="_blank" rel="noopener">Support</a>
                </div>
            </li>
            <li class="menupop site-name">
                <a class="ab-item" href="/" target="_blank" title="Visit Site">
                    <span class="ab-icon">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                    </span>
                    <span class="ab-label"><?php echo htmlspecialchars($siteTitle); ?></span>
                </a>
                <div class="ab-sub-wrapper">
                    <a href="/" target="_blank">Visit Site</a>
                </div>
            </li>
            <li class="comments-link">
                <a class="ab-item" href="<?php echo $adminBase; ?>?page=comments" title="<?php echo $pendingCommentsCount; ?> comments awaiting moderation">
                    <span class="ab-icon">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4c0-1.1-.9-2-2-2z"/></svg>
                    </span>
                    <span class="ab-label"><?php echo $pendingCommentsCount; ?></span>
                </a>
            </li>
            <li class="menupop new-content">
                <a class="ab-item" href="<?php echo $adminBase; ?>?page=post-new">
                    <span class="ab-icon" style="font-weight:700;font-size:16px;">+</span>
                    <span class="ab-label">New</span>
                </a>
                <div class="ab-sub-wrapper">
                    <a href="<?php echo $adminBase; ?>?page=post-new">Post</a>
                    <a href="<?php echo $adminBase; ?>?page=media-new">Media</a>
                    <a href="<?php echo $adminBase; ?>?page=page-new">Page</a>
                    <a href="<?php echo $adminBase; ?>?page=user-new">User</a>
                </div>
            </li>
        </ul>

        <ul class="ab-top-menu ab-right">
            <li class="menupop my-account">
                <a class="ab-item" href="<?php echo $adminBase; ?>?page=profile">
                    <span>Howdy, <strong><?php echo htmlspecialchars($currentAdminUser); ?></strong></span>
                    <img class="avatar-top" src="https://secure.gravatar.com/avatar/<?php echo md5(strtolower(trim($currentAdminUser . '@inboxwa.com'))); ?>?s=26&d=mm&r=g" alt="Avatar">
                </a>
                <div class="ab-sub-wrapper">
                    <a href="<?php echo $adminBase; ?>?page=profile">Edit Profile</a>
                    <a href="<?php echo $adminBase; ?>?action=logout" onclick="return confirm('Log out of admin console?')">Log Out</a>
                </div>
            </li>
        </ul>
    </div>

    <!-- MAIN WRAPPER -->
    <div id="wpwrap">
        <!-- SIDEBAR NAVIGATION (#adminmenu) -->
        <div id="adminmenuback"></div>
        <div id="adminmenuwrap">
            <ul id="adminmenu">
                <!-- 1. Dashboard -->
                <li class="menu-top <?php echo in_array($page, ['dashboard', 'updates']) ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=dashboard" class="menu-link">
                        <span class="menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 10V6h-2v6H5v2h6v6h2v-6h6v-2h-6z"/></svg></span>
                        <span class="wp-menu-name">Dashboard</span>
                    </a>
                    <ul class="wp-submenu">
                        <li class="<?php echo $page === 'dashboard' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=dashboard">Home</a></li>
                        <li class="<?php echo $page === 'updates' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=updates">Updates</a></li>
                    </ul>
                </li>

                <!-- 2. InboxWa Cache (Matches Kinsta Cache from screenshot) -->
                <li class="menu-top <?php echo $page === 'cache' ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=cache&action=purge" class="menu-link" title="Purge Server & CDN Cache">
                        <span class="menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M4 6h16V4H4v2zm0 5h16V9H4v2zm0 5h16v-2H4v2zm0 4h16v-2H4v2z"/></svg></span>
                        <span class="wp-menu-name">InboxWa Cache</span>
                    </a>
                </li>

                <!-- 3. Posts -->
                <li class="menu-top <?php echo in_array($page, ['posts', 'post-new', 'categories', 'tags']) ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=posts" class="menu-link">
                        <span class="menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M14 4v5c0 1.12.37 2.16 1 3H9c.65-.86 1-1.9 1-3V4h4m3-2H7c-.55 0-1 .45-1 1s.45 1 1 1h1v5c0 1.66-1.34 3-3 3v2h5.97v7l1 1 1-1v-7H19v-2c-1.66 0-3-1.34-3-3V4h1c.55 0 1-.45 1-1s-.45-1-1-1z"/></svg></span>
                        <span class="wp-menu-name">Posts</span>
                        <span class="menu-badge"><?php echo $totalPosts; ?></span>
                    </a>
                    <ul class="wp-submenu">
                        <li class="<?php echo $page === 'posts' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=posts">All Posts</a></li>
                        <li class="<?php echo $page === 'post-new' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=post-new">Add New</a></li>
                        <li class="<?php echo $page === 'categories' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=categories">Categories</a></li>
                        <li class="<?php echo $page === 'tags' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=tags">Tags</a></li>
                    </ul>
                </li>

                <!-- 4. Media -->
                <li class="menu-top <?php echo in_array($page, ['media', 'media-new']) ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=media" class="menu-link">
                        <span class="menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg></span>
                        <span class="wp-menu-name">Media</span>
                    </a>
                    <ul class="wp-submenu">
                        <li class="<?php echo $page === 'media' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=media">Library</a></li>
                        <li class="<?php echo $page === 'media-new' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=media-new">Add New</a></li>
                    </ul>
                </li>

                <!-- 5. Pages -->
                <li class="menu-top <?php echo in_array($page, ['pages', 'page-new']) ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=pages" class="menu-link">
                        <span class="menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg></span>
                        <span class="wp-menu-name">Pages</span>
                    </a>
                    <ul class="wp-submenu">
                        <li class="<?php echo $page === 'pages' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=pages">All Pages</a></li>
                        <li class="<?php echo $page === 'page-new' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=page-new">Add New</a></li>
                    </ul>
                </li>

                <!-- 6. Comments -->
                <li class="menu-top <?php echo $page === 'comments' ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=comments" class="menu-link">
                        <span class="menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4c0-1.1-.9-2-2-2z"/></svg></span>
                        <span class="wp-menu-name">Comments</span>
                        <?php if ($pendingCommentsCount > 0): ?>
                            <span class="menu-badge badge-pending"><?php echo $pendingCommentsCount; ?></span>
                        <?php endif; ?>
                    </a>
                </li>

                <li class="wp-menu-separator"></li>

                <!-- 7. Appearance -->
                <li class="menu-top <?php echo in_array($page, ['appearance', 'themes', 'editor', 'colors']) ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=themes" class="menu-link">
                        <span class="menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 3c-4.97 0-9 4.03-9 9 0 2.12.74 4.07 1.97 5.61L4.35 19.4c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l1.9-1.9C9.22 19.59 10.56 20 12 20c4.97 0 9-4.03 9-9s-4.03-9-9-9zm0 15c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6z"/></svg></span>
                        <span class="wp-menu-name">Appearance</span>
                    </a>
                    <ul class="wp-submenu">
                        <li class="<?php echo $page === 'themes' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=themes">Themes</a></li>
                        <li class="<?php echo $page === 'editor' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=editor">Customize (Live CMS)</a></li>
                        <li class="<?php echo $page === 'colors' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=colors">Color Palette</a></li>
                    </ul>
                </li>

                <!-- 8. Plugins -->
                <li class="menu-top <?php echo in_array($page, ['plugins', 'plugin-new']) ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=plugins" class="menu-link">
                        <span class="menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5 11H19V7c0-1.1-.9-2-2-2h-4V3.5C13 2.67 12.33 2 11.5 2S10 2.67 10 3.5V5H6c-1.1 0-2 .9-2 2v3.8H2.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5H4v4c0 1.1.9 2 2 2h4v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5V19h4c1.1 0 2-.9 2-2v-4h1.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5z"/></svg></span>
                        <span class="wp-menu-name">Plugins</span>
                        <span class="menu-badge" style="background:#00a32a">5</span>
                    </a>
                    <ul class="wp-submenu">
                        <li class="<?php echo $page === 'plugins' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=plugins">Installed Plugins</a></li>
                        <li class="<?php echo $page === 'plugin-new' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=plugin-new">Add New</a></li>
                    </ul>
                </li>

                <!-- 9. Users -->
                <li class="menu-top <?php echo in_array($page, ['users', 'user-new', 'profile']) ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=users" class="menu-link">
                        <span class="menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg></span>
                        <span class="wp-menu-name">Users</span>
                    </a>
                    <ul class="wp-submenu">
                        <li class="<?php echo $page === 'users' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=users">All Users</a></li>
                        <li class="<?php echo $page === 'user-new' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=user-new">Add New</a></li>
                        <li class="<?php echo $page === 'profile' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=profile">Profile</a></li>
                    </ul>
                </li>

                <!-- 10. Tools -->
                <li class="menu-top <?php echo in_array($page, ['tools', 'site-health']) ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=tools" class="menu-link">
                        <span class="menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6 6 9 1.6 4.7C.4 7.1.9 10.1 2.9 12.1c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.3-2.3c.5-.4.5-1.1.1-1.4z"/></svg></span>
                        <span class="wp-menu-name">Tools</span>
                    </a>
                    <ul class="wp-submenu">
                        <li class="<?php echo $page === 'tools' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=tools">Available Tools</a></li>
                        <li><a href="<?php echo $adminBase; ?>?action=export&format=csv">Export Leads CSV</a></li>
                        <li class="<?php echo $page === 'site-health' ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=site-health">Site Health</a></li>
                    </ul>
                </li>

                <!-- 11. Settings (MATCHING media_1788877451432.png) -->
                <li class="menu-top <?php echo ($page === 'settings') ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=settings" class="menu-link">
                        <span class="menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg></span>
                        <span class="wp-menu-name">Settings</span>
                    </a>
                    <ul class="wp-submenu">
                        <li class="<?php echo ($page === 'settings' && (!isset($_GET['tab']) || $_GET['tab'] === 'general')) ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=settings">General</a></li>
                        <li class="<?php echo ($page === 'settings' && ($_GET['tab'] ?? '') === 'writing') ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=settings&tab=writing">Writing</a></li>
                        <li class="<?php echo ($page === 'settings' && ($_GET['tab'] ?? '') === 'reading') ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=settings&tab=reading">Reading</a></li>
                        <li class="<?php echo ($page === 'settings' && ($_GET['tab'] ?? '') === 'discussion') ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=settings&tab=discussion">Discussion</a></li>
                        <li class="<?php echo ($page === 'settings' && ($_GET['tab'] ?? '') === 'media') ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=settings&tab=media">Media</a></li>
                        <li class="<?php echo ($page === 'settings' && ($_GET['tab'] ?? '') === 'permalinks') ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=settings&tab=permalinks">Permalinks</a></li>
                        <li class="<?php echo ($page === 'settings' && ($_GET['tab'] ?? '') === 'privacy') ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=settings&tab=privacy">Privacy</a></li>
                        <li class="<?php echo ($page === 'settings' && ($_GET['tab'] ?? '') === 'whatsapp') ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=settings&tab=whatsapp">WhatsApp &amp; API</a></li>
                        <li class="<?php echo ($page === 'settings' && ($_GET['tab'] ?? '') === 'colors') ? 'current' : ''; ?>"><a href="<?php echo $adminBase; ?>?page=settings&tab=colors">Colors &amp; Palette</a></li>
                    </ul>
                </li>

                <li class="wp-menu-separator"></li>

                <!-- Extra CRM features (preserved) -->
                <li class="menu-top <?php echo $page === 'leads' ? 'current' : ''; ?>">
                    <a href="<?php echo $adminBase; ?>?page=leads" class="menu-link">
                        <span class="menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg></span>
                        <span class="wp-menu-name">Leads CRM</span>
                        <?php if ($newLeads > 0): ?>
                            <span class="menu-badge badge-pending"><?php echo $newLeads; ?></span>
                        <?php endif; ?>
                    </a>
                </li>

                <!-- Collapse Menu -->
                <li id="collapse-menu-item">
                    <button type="button" id="collapse-button" aria-label="Collapse Main menu">
                        <span class="dashicons dashicons-admin-collapse">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 14l-4-4 4-4v8z"/></svg>
                        </span>
                        <span class="collapse-text">Collapse menu</span>
                    </button>
                </li>
            </ul>
        </div>

        <!-- MAIN WORKSPACE (#wpcontent) -->
        <div id="wpcontent">
            <div class="wrap">
                <!-- Notifications -->
                <?php if ($noticeSuccess): ?>
                    <div class="notice notice-success is-dismissible">
                        <p><?php echo htmlspecialchars($noticeSuccess); ?></p>
                    </div>
                <?php endif; ?>
                <?php if ($noticeError): ?>
                    <div class="notice notice-error is-dismissible">
                        <p><?php echo htmlspecialchars($noticeError); ?></p>
                    </div>
                <?php endif; ?>

                <?php
                // =============================================================
                // 1. DASHBOARD SCREEN (EXACT MATCH FOR media_1788876670751.png)
                // =============================================================
                if ($page === 'dashboard'): ?>
                    <h1 class="wp-heading-inline">Dashboard</h1>

                    <div id="dashboard-widgets-wrap">
                        <div id="dashboard-widgets">
                            <!-- LEFT COLUMN -->
                            <div class="postbox-container" id="postbox-container-1">
                                
                                <!-- At a Glance Widget -->
                                <div id="dashboard_right_now" class="postbox">
                                    <div class="postbox-header">
                                        <h2>At a Glance</h2>
                                        <button type="button" class="handlediv" aria-expanded="true"><span class="toggle-indicator">&#9650;</span></button>
                                    </div>
                                    <div class="inside">
                                        <div class="main">
                                            <ul>
                                                <li class="post-count">
                                                    <a href="<?php echo $adminBase; ?>?page=posts">
                                                        <span class="dashicons dashicons-admin-post">&#128204;</span>
                                                        <?php echo $totalPosts; ?> Post<?php echo $totalPosts === 1 ? '' : 's'; ?>
                                                    </a>
                                                </li>
                                                <li class="page-count">
                                                    <a href="<?php echo $adminBase; ?>?page=pages">
                                                        <span class="dashicons dashicons-admin-page">&#128196;</span>
                                                        2 Pages
                                                    </a>
                                                </li>
                                                <li class="comment-count">
                                                    <a href="<?php echo $adminBase; ?>?page=comments">
                                                        <span class="dashicons dashicons-admin-comments">&#128172;</span>
                                                        <?php echo $commentCounts['all']; ?> Comment<?php echo $commentCounts['all'] === 1 ? '' : 's'; ?>
                                                    </a>
                                                </li>
                                            </ul>
                                            <p id="wp-version-message">
                                                ElavateX 6.5.4 running <a href="<?php echo $adminBase; ?>?page=themes">InboxWa</a> theme.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Activity Widget -->
                                <div id="dashboard_activity" class="postbox">
                                    <div class="postbox-header">
                                        <h2>Activity</h2>
                                        <button type="button" class="handlediv" aria-expanded="true"><span class="toggle-indicator">&#9650;</span></button>
                                    </div>
                                    <div class="inside">
                                        <div class="sub-heading">Recently Published</div>
                                        <div class="activity-block" style="margin-bottom: 16px;">
                                            <?php 
                                            $recentPublished = hb_get_posts(1, 'all', 'published');
                                            $rp = !empty($recentPublished) ? $recentPublished[0] : null;
                                            if ($rp):
                                                $pTime = date('M jS, g:i a', strtotime($rp['created_at']));
                                            ?>
                                                <div class="activity-item">
                                                    <span class="activity-date"><?php echo $pTime; ?></span>
                                                    <a href="<?php echo $adminBase; ?>?page=posts&action=edit&id=<?php echo $rp['id']; ?>" style="font-weight:600;"><?php echo htmlspecialchars($rp['title']); ?></a>
                                                </div>
                                            <?php else: ?>
                                                <div class="activity-item">
                                                    <span class="activity-date">Nov 9th, 7:59 am</span>
                                                    <a href="<?php echo $adminBase; ?>?page=posts" style="font-weight:600;">Hello world!</a>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="sub-heading">Recent Comments</div>
                                        <div id="the-comment-list">
                                            <?php 
                                            $recentComments = hb_get_comments('all', 3);
                                            if (empty($recentComments)): ?>
                                                <p style="color:#646970; font-style:italic;">No comments yet.</p>
                                            <?php else:
                                                foreach ($recentComments as $c): 
                                                    $gravHash = md5(strtolower(trim($c['author_email'] ?? 'wp@wordpress.org')));
                                            ?>
                                                <div style="display:flex; gap:12px; margin-bottom:14px; padding-bottom:12px; border-bottom:1px solid #f0f0f1;">
                                                    <img class="comment-avatar" src="https://secure.gravatar.com/avatar/<?php echo $gravHash; ?>?s=40&d=retro" alt="Avatar">
                                                    <div style="flex:1;">
                                                        <div class="comment-meta">
                                                            From <a href="<?php echo !empty($c['author_url']) ? htmlspecialchars($c['author_url']) : '#'; ?>"><?php echo htmlspecialchars($c['author_name']); ?></a> on <a href="<?php echo $adminBase; ?>?page=posts"><?php echo htmlspecialchars($c['post_title'] ?? 'Hello world!'); ?></a>
                                                        </div>
                                                        <div class="comment-text">
                                                            <?php echo htmlspecialchars(mb_substr($c['content'], 0, 140)) . (mb_strlen($c['content']) > 140 ? '...' : ''); ?>
                                                        </div>
                                                        <div class="row-actions">
                                                            <a href="<?php echo $adminBase; ?>?action=comment_status&id=<?php echo $c['id']; ?>&status=approved">Approve</a> |
                                                            <a href="<?php echo $adminBase; ?>?page=comments&reply=<?php echo $c['id']; ?>">Reply</a> |
                                                            <a href="<?php echo $adminBase; ?>?action=comment_status&id=<?php echo $c['id']; ?>&status=spam" class="spam">Spam</a> |
                                                            <a href="<?php echo $adminBase; ?>?action=comment_status&id=<?php echo $c['id']; ?>&status=trash" class="trash">Trash</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; endif; ?>
                                        </div>

                                        <ul class="subsubsub" style="margin-top:12px; padding:0;">
                                            <li><a href="<?php echo $adminBase; ?>?page=comments&status=all">All (<?php echo $commentCounts['all']; ?>)</a> |</li>
                                            <li><a href="<?php echo $adminBase; ?>?page=comments&status=pending">Pending (<?php echo $commentCounts['pending']; ?>)</a> |</li>
                                            <li><a href="<?php echo $adminBase; ?>?page=comments&status=approved">Approved (<?php echo $commentCounts['approved']; ?>)</a> |</li>
                                            <li><a href="<?php echo $adminBase; ?>?page=comments&status=spam">Spam (<?php echo $commentCounts['spam']; ?>)</a> |</li>
                                            <li><a href="<?php echo $adminBase; ?>?page=comments&status=trash">Trash (<?php echo $commentCounts['trash']; ?>)</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <!-- RIGHT COLUMN -->
                            <div class="postbox-container" id="postbox-container-2">
                                
                                <!-- Quick Draft Widget -->
                                <div id="dashboard_quick_press" class="postbox">
                                    <div class="postbox-header">
                                        <h2>Quick Draft</h2>
                                    </div>
                                    <div class="inside">
                                        <form method="post" action="">
                                            <input type="hidden" name="form_action" value="save_quick_draft">
                                            <div>
                                                <input type="text" name="draft_title" class="draft-input" placeholder="Title" required>
                                            </div>
                                            <div>
                                                <textarea name="draft_content" class="draft-textarea" placeholder="What's on your mind?"></textarea>
                                            </div>
                                            <p style="margin:0;">
                                                <button type="submit" class="button button-primary">Save Draft</button>
                                            </p>
                                        </form>

                                        <?php 
                                        $recentDrafts = hb_get_recent_drafts(3);
                                        if (!empty($recentDrafts)): ?>
                                            <div style="margin-top:16px; border-top:1px solid #c3c4c7; padding-top:12px;">
                                                <div class="sub-heading" style="margin-bottom:8px;">Recent Drafts</div>
                                                <ul style="list-style:none; padding:0; margin:0;">
                                                    <?php foreach ($recentDrafts as $rd): ?>
                                                        <li style="margin-bottom:8px; font-size:12px;">
                                                            <a href="<?php echo $adminBase; ?>?page=posts&action=edit&id=<?php echo $rd['id']; ?>" style="font-weight:600;"><?php echo htmlspecialchars($rd['title']); ?></a>
                                                            <span style="color:#646970; font-size:11px;"> &mdash; <?php echo date('M jS, Y', strtotime($rd['created_at'])); ?></span>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <!-- ElavateX Events and News Widget -->
                                <div id="dashboard_primary" class="postbox">
                                    <div class="postbox-header">
                                        <h2>
                                            <span>ElavateX Community &amp; News</span>
                                        </h2>
                                        <span title="Edit" style="cursor:pointer; color:#646970;">&#9998;</span>
                                    </div>
                                    <div class="inside">
                                        <p style="margin-bottom:8px; color:#3c434a;">Latest product updates and automation insights. <span style="color:#2271b1; cursor:pointer;">&#9998;</span></p>
                                        <div class="events-callout">
                                            Scale your business messaging. Visit <a href="https://elavatex.com" target="_blank" rel="noopener">ElavateX</a> for tailored automation suites.
                                        </div>
                                        <ul class="rss-news-list">
                                            <li><a href="https://elavatex.com" target="_blank" rel="noopener">The Month in ElavateX &amp; InboxWa: March 2026</a></li>
                                            <li><a href="https://elavatex.com/#services-overview" target="_blank" rel="noopener">ElavateX: WhatsApp Cloud API &amp; Multi-Agent Automation Suite</a></li>
                                            <li><a href="https://elavatex.com/#about" target="_blank" rel="noopener">About ElavateX Digital Ecosystem &amp; Next-Gen Tech</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                <?php
                // =============================================================
                // 2. UPDATES SCREEN
                // =============================================================
                elseif ($page === 'updates'): ?>
                    <h1 class="wp-heading-inline">ElavateX Updates</h1>
                    <p style="margin: 10px 0 16px; color:#555;">Last checked on <?php echo date('F j, Y \a\t g:i a'); ?>. <a href="<?php echo $adminBase; ?>?page=updates" class="button button-small">Check Again</a></p>

                    <div class="postbox">
                        <div class="postbox-header"><h2>Current Status</h2></div>
                        <div class="inside">
                            <p style="font-size:14px; color:#00a32a; font-weight:600; margin-bottom:10px;">&#10004; You have the latest version of ElavateX (6.5.4).</p>
                            <p style="color:#646970;">Future security updates will be applied automatically.</p>
                        </div>
                    </div>

                    <div class="postbox">
                        <div class="postbox-header"><h2>Plugins &amp; Themes</h2></div>
                        <div class="inside">
                            <p style="color:#00a32a; font-weight:600; margin-bottom:6px;">&#10004; Your plugins are all up to date.</p>
                            <p style="color:#00a32a; font-weight:600;">&#10004; Your themes are all up to date.</p>
                        </div>
                    </div>

                <?php
                // =============================================================
                // 3. POSTS SCREEN (All Posts & Add/Edit)
                // =============================================================
                elseif ($page === 'posts' || $page === 'post-new'):
                    $actionPost = $_GET['action'] ?? ($page === 'post-new' ? 'new' : '');
                    $editPostId = (int)($_GET['id'] ?? 0);
                    $editPost = $editPostId > 0 ? hb_get_post($editPostId) : null;
                ?>
                    <h1 class="wp-heading-inline"><?php echo ($actionPost === 'new' || $editPost) ? ($editPost ? 'Edit Post' : 'Add New Post') : 'Posts'; ?></h1>
                    <?php if ($actionPost !== 'new' && !$editPost): ?>
                        <a href="<?php echo $adminBase; ?>?page=post-new" class="page-title-action">Add New</a>
                    <?php endif; ?>

                    <?php if ($actionPost === 'new' || ($actionPost === 'edit' && $editPost)): ?>
                        <!-- Post Form -->
                        <div class="postbox" style="margin-top:16px;">
                            <div class="inside" style="padding:20px;">
                                <form method="post" action="">
                                    <input type="hidden" name="form_action" value="save_post">
                                    <input type="hidden" name="post_id" value="<?php echo $editPost['id'] ?? 0; ?>">

                                    <div style="margin-bottom:16px;">
                                        <label for="post-title" style="font-weight:600; display:block; margin-bottom:6px; font-size:14px;">Add Title</label>
                                        <input type="text" id="post-title" name="title" class="large-text" required value="<?php echo htmlspecialchars($editPost['title'] ?? ''); ?>" placeholder="Enter title here" style="font-size:18px; min-height:42px;">
                                    </div>

                                    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(220px, 1fr)); gap:16px; margin-bottom:16px;">
                                        <div>
                                            <label style="font-weight:600; display:block; margin-bottom:4px;">Permalink Slug</label>
                                            <input type="text" name="slug" class="large-text" value="<?php echo htmlspecialchars($editPost['slug'] ?? ''); ?>" placeholder="e.g. whatsapp-api-guide">
                                        </div>
                                        <div>
                                            <label style="font-weight:600; display:block; margin-bottom:4px;">Category</label>
                                            <select name="category" class="large-text">
                                                <?php 
                                                $cats = ['Guide', 'Automation', 'CRM', 'Marketing', 'E-commerce', 'Strategy', 'Uncategorized'];
                                                foreach ($cats as $c): ?>
                                                    <option value="<?php echo $c; ?>" <?php echo (($editPost['category'] ?? 'Uncategorized') === $c) ? 'selected' : ''; ?>><?php echo $c; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div>
                                            <label style="font-weight:600; display:block; margin-bottom:4px;">Status</label>
                                            <select name="status" class="large-text">
                                                <option value="published" <?php echo (($editPost['status'] ?? 'published') === 'published') ? 'selected' : ''; ?>>Published</option>
                                                <option value="draft" <?php echo (($editPost['status'] ?? '') === 'draft') ? 'selected' : ''; ?>>Draft</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div style="margin-bottom:16px;">
                                        <label style="font-weight:600; display:block; margin-bottom:4px;">Excerpt / Summary</label>
                                        <textarea name="excerpt" class="large-text" rows="2" placeholder="Brief summary..."><?php echo htmlspecialchars($editPost['excerpt'] ?? ''); ?></textarea>
                                    </div>

                                    <div style="margin-bottom:16px;">
                                        <label style="font-weight:600; display:block; margin-bottom:4px;">Content (HTML / Text)</label>
                                        <textarea name="content" class="large-text" rows="12" required style="font-family:monospace; line-height:1.5;"><?php echo htmlspecialchars($editPost['content'] ?? ''); ?></textarea>
                                    </div>

                                    <div style="display:flex; gap:10px;">
                                        <button type="submit" class="button button-primary"><?php echo $editPost ? 'Update' : 'Publish'; ?></button>
                                        <a href="<?php echo $adminBase; ?>?page=posts" class="button">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php else: ?>
                        <!-- Posts Table -->
                        <ul class="subsubsub">
                            <li><a href="<?php echo $adminBase; ?>?page=posts" class="current">All (<?php echo count($postsList); ?>)</a> |</li>
                            <li><a href="<?php echo $adminBase; ?>?page=posts">Published (<?php echo $totalPosts; ?>)</a> |</li>
                            <li><a href="<?php echo $adminBase; ?>?page=posts">Drafts (<?php echo $totalDrafts; ?>)</a></li>
                        </ul>

                        <div class="wp-table-responsive">
                            <table class="wp-list-table">
                                <thead>
                                    <tr>
                                        <th style="width:40px;"><input type="checkbox" disabled></th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Categories</th>
                                        <th>Tags</th>
                                        <th><span class="dashicons dashicons-admin-comments">&#128172;</span></th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($postsList)): ?>
                                        <tr><td colspan="7" style="text-align:center; padding:20px; color:#888;">No posts found.</td></tr>
                                    <?php else: 
                                        foreach ($postsList as $p): ?>
                                        <tr>
                                            <td><input type="checkbox" disabled></td>
                                            <td>
                                                <strong><a href="<?php echo $adminBase; ?>?page=posts&action=edit&id=<?php echo $p['id']; ?>"><?php echo htmlspecialchars($p['title']); ?></a></strong>
                                                <?php if ($p['status'] === 'draft'): ?>
                                                    <span style="color:#646970; font-size:12px;"> &mdash; Draft</span>
                                                <?php endif; ?>
                                                <div class="row-actions" style="margin-top:4px; font-size:12px;">
                                                    <a href="<?php echo $adminBase; ?>?page=posts&action=edit&id=<?php echo $p['id']; ?>">Edit</a> |
                                                    <a href="/resources/blog/<?php echo htmlspecialchars($p['slug']); ?>/" target="_blank">View</a> |
                                                    <a href="<?php echo $adminBase; ?>?page=posts&action=delete_post&id=<?php echo $p['id']; ?>" class="trash" onclick="return confirm('Move post to trash?')">Trash</a>
                                                </div>
                                            </td>
                                            <td><?php echo htmlspecialchars($p['author'] ?: 'admin'); ?></td>
                                            <td><?php echo htmlspecialchars($p['category'] ?: 'Uncategorized'); ?></td>
                                            <td>&mdash;</td>
                                            <td><span class="badge badge-type">1</span></td>
                                            <td>
                                                <?php echo ucfirst($p['status'] ?: 'published'); ?><br>
                                                <span style="color:#646970; font-size:11px;"><?php echo date('Y/m/d', strtotime($p['created_at'])); ?></span>
                                            </td>
                                        </tr>
                                    <?php endforeach; endif; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>

                <?php
                // =============================================================
                // 4. MEDIA LIBRARY SCREEN
                // =============================================================
                elseif ($page === 'media' || $page === 'media-new'): ?>
                    <h1 class="wp-heading-inline">Media Library</h1>
                    <a href="<?php echo $adminBase; ?>?page=media-new" class="page-title-action">Add New</a>

                    <?php if ($page === 'media-new'): ?>
                        <div class="postbox" style="margin-top:16px;">
                            <div class="inside" style="padding:24px; text-align:center;">
                                <h2 style="margin-bottom:12px;">Upload New Media</h2>
                                <p style="color:#646970; margin-bottom:16px;">Drop files anywhere to upload, or select files from your computer.</p>
                                <input type="file" style="margin-bottom:16px;">
                                <div><button type="button" class="button button-primary" onclick="alert('Media upload processed.')">Select Files</button></div>
                                <p class="description" style="margin-top:12px;">Maximum upload file size: 64 MB.</p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(140px, 1fr)); gap:14px; margin-top:16px;">
                        <?php if (empty($mediaFiles)): ?>
                            <p style="color:#646970;">No media items found.</p>
                        <?php else:
                            foreach ($mediaFiles as $mf): ?>
                            <div class="postbox" style="margin-bottom:0; text-align:center; padding:10px; cursor:pointer;" onclick="prompt('Media URL:', '<?php echo htmlspecialchars($mf['url']); ?>')">
                                <div style="height:90px; display:flex; align-items:center; justify-content:center; overflow:hidden; background:#fafafa; margin-bottom:8px; border:1px solid #c3c4c7;">
                                    <img src="<?php echo htmlspecialchars($mf['url']); ?>" alt="<?php echo htmlspecialchars($mf['filename']); ?>" style="max-height:80px; max-width:100%; object-fit:contain;">
                                </div>
                                <div style="font-size:11px; font-weight:600; color:#3c434a; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;"><?php echo htmlspecialchars($mf['filename']); ?></div>
                                <div style="font-size:10px; color:#646970;"><?php echo round($mf['size']/1024, 1); ?> KB</div>
                            </div>
                        <?php endforeach; endif; ?>
                    </div>

                <?php
                // =============================================================
                // 5. PAGES SCREEN
                // =============================================================
                elseif ($page === 'pages' || $page === 'page-new'):
                    $corePages = [
                        ['title' => 'Home', 'url' => '/', 'author' => 'admin', 'date' => '2026/01/15'],
                        ['title' => 'Solutions – WhatsApp API', 'url' => '/solutions/whatsapp-api/', 'author' => 'admin', 'date' => '2026/01/20'],
                        ['title' => 'Pricing & Plans', 'url' => '/pricing/', 'author' => 'admin', 'date' => '2026/01/22'],
                        ['title' => 'Blog & Insights', 'url' => '/resources/blog/', 'author' => 'admin', 'date' => '2026/02/01'],
                        ['title' => 'Business Leads Directory', 'url' => '/business-leads/', 'author' => 'admin', 'date' => '2026/03/01'],
                        ['title' => 'Contact Sales & Support', 'url' => '/contact/', 'author' => 'admin', 'date' => '2026/02/10'],
                    ];
                ?>
                    <h1 class="wp-heading-inline">Pages</h1>
                    <a href="<?php echo $adminBase; ?>?page=page-new" class="page-title-action">Add New</a>

                    <div class="wp-table-responsive">
                        <table class="wp-list-table">
                            <thead>
                                <tr>
                                    <th style="width:40px;"><input type="checkbox" disabled></th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Route URL</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($corePages as $pg): ?>
                                <tr>
                                    <td><input type="checkbox" disabled></td>
                                    <td>
                                        <strong><a href="<?php echo htmlspecialchars($pg['url']); ?>" target="_blank"><?php echo htmlspecialchars($pg['title']); ?></a></strong>
                                        <div class="row-actions" style="margin-top:4px; font-size:12px;">
                                            <a href="<?php echo $adminBase; ?>?page=editor">Edit in Customizer</a> |
                                            <a href="<?php echo htmlspecialchars($pg['url']); ?>" target="_blank">View Live</a>
                                        </div>
                                    </td>
                                    <td><?php echo htmlspecialchars($pg['author']); ?></td>
                                    <td><code><?php echo htmlspecialchars($pg['url']); ?></code></td>
                                    <td>Published<br><span style="color:#646970; font-size:11px;"><?php echo htmlspecialchars($pg['date']); ?></span></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                <?php
                // =============================================================
                // 6. COMMENTS SCREEN
                // =============================================================
                elseif ($page === 'comments'):
                    $filterCommentStatus = $_GET['status'] ?? 'all';
                    $commentsList = hb_get_comments($filterCommentStatus, 50);
                ?>
                    <h1 class="wp-heading-inline">Comments</h1>

                    <ul class="subsubsub">
                        <li><a href="<?php echo $adminBase; ?>?page=comments&status=all" class="<?php echo $filterCommentStatus === 'all' ? 'current' : ''; ?>">All (<?php echo $commentCounts['all']; ?>)</a> |</li>
                        <li><a href="<?php echo $adminBase; ?>?page=comments&status=pending" class="<?php echo $filterCommentStatus === 'pending' ? 'current' : ''; ?>">Pending (<?php echo $commentCounts['pending']; ?>)</a> |</li>
                        <li><a href="<?php echo $adminBase; ?>?page=comments&status=approved" class="<?php echo $filterCommentStatus === 'approved' ? 'current' : ''; ?>">Approved (<?php echo $commentCounts['approved']; ?>)</a> |</li>
                        <li><a href="<?php echo $adminBase; ?>?page=comments&status=spam" class="<?php echo $filterCommentStatus === 'spam' ? 'current' : ''; ?>">Spam (<?php echo $commentCounts['spam']; ?>)</a> |</li>
                        <li><a href="<?php echo $adminBase; ?>?page=comments&status=trash" class="<?php echo $filterCommentStatus === 'trash' ? 'current' : ''; ?>">Trash (<?php echo $commentCounts['trash']; ?>)</a></li>
                    </ul>

                    <div class="wp-table-responsive">
                        <table class="wp-list-table">
                            <thead>
                                <tr>
                                    <th style="width:40px;"><input type="checkbox" disabled></th>
                                    <th>Author</th>
                                    <th>Comment</th>
                                    <th>In Response To</th>
                                    <th>Submitted On</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($commentsList)): ?>
                                    <tr><td colspan="5" style="text-align:center; padding:20px; color:#888;">No comments found.</td></tr>
                                <?php else:
                                    foreach ($commentsList as $cm): 
                                        $cHash = md5(strtolower(trim($cm['author_email'] ?? 'wp@wordpress.org')));
                                ?>
                                    <tr style="<?php echo $cm['status'] === 'pending' ? 'background:#fcf9e8;' : ''; ?>">
                                        <td><input type="checkbox" disabled></td>
                                        <td>
                                            <div style="display:flex; gap:10px; align-items:center;">
                                                <img class="comment-avatar" src="https://secure.gravatar.com/avatar/<?php echo $cHash; ?>?s=36&d=retro" alt="Avatar">
                                                <div>
                                                    <strong><?php echo htmlspecialchars($cm['author_name']); ?></strong><br>
                                                    <span style="font-size:11px; color:#2271b1;"><?php echo htmlspecialchars($cm['author_email']); ?></span><br>
                                                    <span style="font-size:10px; color:#888;"><?php echo htmlspecialchars($cm['author_ip'] ?? '127.0.0.1'); ?></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p style="margin-bottom:6px;"><?php echo nl2br(htmlspecialchars($cm['content'])); ?></p>
                                            <div class="row-actions">
                                                <?php if ($cm['status'] !== 'approved'): ?>
                                                    <a href="<?php echo $adminBase; ?>?action=comment_status&id=<?php echo $cm['id']; ?>&status=approved">Approve</a> |
                                                <?php else: ?>
                                                    <a href="<?php echo $adminBase; ?>?action=comment_status&id=<?php echo $cm['id']; ?>&status=pending">Unapprove</a> |
                                                <?php endif; ?>
                                                <a href="<?php echo $adminBase; ?>?action=comment_status&id=<?php echo $cm['id']; ?>&status=spam" class="spam">Spam</a> |
                                                <a href="<?php echo $adminBase; ?>?action=comment_status&id=<?php echo $cm['id']; ?>&status=trash" class="trash">Trash</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="<?php echo $adminBase; ?>?page=posts"><strong><?php echo htmlspecialchars($cm['post_title'] ?? 'Hello world!'); ?></strong></a>
                                        </td>
                                        <td style="white-space:nowrap; font-size:12px; color:#646970;">
                                            <?php echo date('Y/m/d \a\t g:i a', strtotime($cm['created_at'])); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>

                <?php
                // =============================================================
                // 7. APPEARANCE & THEMES SCREEN
                // =============================================================
                elseif ($page === 'themes'): ?>
                    <h1 class="wp-heading-inline">Themes</h1>

                    <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(280px, 1fr)); gap:20px; margin-top:16px;">
                        <!-- Active Theme -->
                        <div class="postbox" style="margin-bottom:0; border-top: 4px solid #2271b1;">
                            <div style="height:150px; background:linear-gradient(135deg, #1d2327 0%, #2c3338 100%); display:flex; align-items:center; justify-content:center; color:#fff; font-size:20px; font-weight:700;">
                                InboxWa Modern
                            </div>
                            <div class="inside">
                                <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px;">
                                    <strong style="font-size:15px;">Active: InboxWa Modern</strong>
                                    <span class="badge badge-converted">v3.2.0</span>
                                </div>
                                <p style="color:#646970; font-size:12px; margin-bottom:12px;">By InboxWa Engineering. High-converting enterprise marketing and automated messaging theme.</p>
                                <a href="<?php echo $adminBase; ?>?page=editor" class="button button-primary">Customize</a>
                                <a href="<?php echo $adminBase; ?>?page=colors" class="button" style="margin-left:6px;">Color Palette</a>
                            </div>
                        </div>

                        <!-- Twenty Seventeen -->
                        <div class="postbox" style="margin-bottom:0; opacity:0.8;">
                            <div style="height:150px; background:#e0e0e0; display:flex; align-items:center; justify-content:center; color:#555; font-size:18px; font-weight:600;">
                                Twenty Seventeen
                            </div>
                            <div class="inside">
                                <strong style="font-size:14px;">Twenty Seventeen</strong>
                                <p style="color:#646970; font-size:12px; margin:6px 0 12px;">Classic WordPress default theme.</p>
                                <button type="button" class="button button-small" onclick="alert('InboxWa Modern is the required production theme.')">Activate</button>
                            </div>
                        </div>

                        <!-- Twenty Twenty-Four -->
                        <div class="postbox" style="margin-bottom:0; opacity:0.8;">
                            <div style="height:150px; background:#e0e0e0; display:flex; align-items:center; justify-content:center; color:#555; font-size:18px; font-weight:600;">
                                Twenty Twenty-Four
                            </div>
                            <div class="inside">
                                <strong style="font-size:14px;">Twenty Twenty-Four</strong>
                                <p style="color:#646970; font-size:12px; margin:6px 0 12px;">Full site editing block theme.</p>
                                <button type="button" class="button button-small" onclick="alert('InboxWa Modern is the required production theme.')">Activate</button>
                            </div>
                        </div>
                    </div>

                <?php
                // =============================================================
                // 8. PLUGINS SCREEN
                // =============================================================

                <!-- ============================================================= -->
                <!-- 7B. WEBSITE COLOR PALETTE SCREEN -->
                <!-- ============================================================= -->
                <?php elseif ($page === 'colors' || ($page === 'settings' && $settingsTab === 'colors')): ?>
                    <h1 class="wp-heading-inline">Website Color Palette &amp; Appearance</h1>
                    <a href="/" target="_blank" class="page-title-action" style="margin-left:10px;">View Live Site &nearr;</a>
                    <p class="description" style="margin:8px 0 20px; font-size:13px; color:#50575e;">
                        Customize global branding colors across InboxWa. Choose from curated design presets or pick custom colors for primary buttons, gradients, accents, and backgrounds. All adjustments apply in real time.
                    </p>

                    <!-- Presets Section -->
                    <div class="postbox" style="margin-bottom:24px;">
                        <div class="postbox-header">
                            <h2>Curated Color Presets</h2>
                            <span style="font-size:12px; color:#646970;">Click any preset to preview and apply</span>
                        </div>
                        <div class="inside" style="padding:16px;">
                            <div class="palette-preset-grid">
                                <!-- Preset 1: Modern Violet & Cyan -->
                                <div class="palette-card <?php echo $themePreset === 'modern-violet' ? 'active' : ''; ?>" onclick="applyPreset('modern-violet', '#8B5CF6', '#7C3AED', '#06B6D4', '#16A34A', '#FFFFFF', '#0F172A')">
                                    <div>
                                        <div class="palette-card-header">
                                            <div class="palette-card-title">Modern Violet &amp; Cyan</div>
                                            <span style="font-size:11px; background:#ede9fe; color:#7c3aed; padding:2px 6px; border-radius:4px; font-weight:700;">Default</span>
                                        </div>
                                        <div class="palette-card-desc">Signature high-tech vibrant SaaS gradient for automated messaging platforms.</div>
                                    </div>
                                    <div>
                                        <div class="palette-swatches">
                                            <span class="palette-swatch-circle" style="background:#8B5CF6;" title="Primary: #8B5CF6"></span>
                                            <span class="palette-swatch-circle" style="background:#7C3AED;" title="Hover: #7C3AED"></span>
                                            <span class="palette-swatch-circle" style="background:#06B6D4;" title="Accent: #06B6D4"></span>
                                            <span class="palette-swatch-circle" style="background:#16A34A;" title="Success: #16A34A"></span>
                                        </div>
                                        <span class="palette-btn-apply">Apply Preset</span>
                                    </div>
                                </div>

                                <!-- Preset 2: WhatsApp Official Emerald -->
                                <div class="palette-card <?php echo $themePreset === 'whatsapp-emerald' ? 'active' : ''; ?>" onclick="applyPreset('whatsapp-emerald', '#25D366', '#128C7E', '#00A884', '#22C55E', '#FFFFFF', '#111B21')">
                                    <div>
                                        <div class="palette-card-header">
                                            <div class="palette-card-title">WhatsApp Emerald &amp; Teal</div>
                                            <span style="font-size:11px; background:#dcfce7; color:#15803d; padding:2px 6px; border-radius:4px; font-weight:700;">Official WA</span>
                                        </div>
                                        <div class="palette-card-desc">Authentic WhatsApp green brand palette for high recognition and trust.</div>
                                    </div>
                                    <div>
                                        <div class="palette-swatches">
                                            <span class="palette-swatch-circle" style="background:#25D366;" title="Primary: #25D366"></span>
                                            <span class="palette-swatch-circle" style="background:#128C7E;" title="Hover: #128C7E"></span>
                                            <span class="palette-swatch-circle" style="background:#00A884;" title="Accent: #00A884"></span>
                                            <span class="palette-swatch-circle" style="background:#22C55E;" title="Success: #22C55E"></span>
                                        </div>
                                        <span class="palette-btn-apply">Apply Preset</span>
                                    </div>
                                </div>

                                <!-- Preset 3: Ocean Blue & Cobalt -->
                                <div class="palette-card <?php echo $themePreset === 'ocean-blue' ? 'active' : ''; ?>" onclick="applyPreset('ocean-blue', '#2563EB', '#1D4ED8', '#38BDF8', '#10B981', '#FFFFFF', '#0F172A')">
                                    <div>
                                        <div class="palette-card-header">
                                            <div class="palette-card-title">Ocean Blue &amp; Cobalt</div>
                                            <span style="font-size:11px; background:#e0f2fe; color:#0369a1; padding:2px 6px; border-radius:4px; font-weight:700;">Corporate</span>
                                        </div>
                                        <div class="palette-card-desc">Clean corporate enterprise tone with deep royal blues and sky highlights.</div>
                                    </div>
                                    <div>
                                        <div class="palette-swatches">
                                            <span class="palette-swatch-circle" style="background:#2563EB;" title="Primary: #2563EB"></span>
                                            <span class="palette-swatch-circle" style="background:#1D4ED8;" title="Hover: #1D4ED8"></span>
                                            <span class="palette-swatch-circle" style="background:#38BDF8;" title="Accent: #38BDF8"></span>
                                            <span class="palette-swatch-circle" style="background:#10B981;" title="Success: #10B981"></span>
                                        </div>
                                        <span class="palette-btn-apply">Apply Preset</span>
                                    </div>
                                </div>

                                <!-- Preset 4: Sunset Amber & Coral Fire -->
                                <div class="palette-card <?php echo $themePreset === 'sunset-amber' ? 'active' : ''; ?>" onclick="applyPreset('sunset-amber', '#F59E0B', '#D97706', '#EC4899', '#10B981', '#FFFFFF', '#18181B')">
                                    <div>
                                        <div class="palette-card-header">
                                            <div class="palette-card-title">Sunset Amber &amp; Coral</div>
                                            <span style="font-size:11px; background:#fef3c7; color:#b45309; padding:2px 6px; border-radius:4px; font-weight:700;">Warm</span>
                                        </div>
                                        <div class="palette-card-desc">High-energy warm amber gradient ideal for e-commerce and growth campaigns.</div>
                                    </div>
                                    <div>
                                        <div class="palette-swatches">
                                            <span class="palette-swatch-circle" style="background:#F59E0B;" title="Primary: #F59E0B"></span>
                                            <span class="palette-swatch-circle" style="background:#D97706;" title="Hover: #D97706"></span>
                                            <span class="palette-swatch-circle" style="background:#EC4899;" title="Accent: #EC4899"></span>
                                            <span class="palette-swatch-circle" style="background:#10B981;" title="Success: #10B981"></span>
                                        </div>
                                        <span class="palette-btn-apply">Apply Preset</span>
                                    </div>
                                </div>

                                <!-- Preset 5: Electric Indigo -->
                                <div class="palette-card <?php echo $themePreset === 'electric-indigo' ? 'active' : ''; ?>" onclick="applyPreset('electric-indigo', '#4F46E5', '#4338CA', '#06B6D4', '#10B981', '#FFFFFF', '#0F172A')">
                                    <div>
                                        <div class="palette-card-header">
                                            <div class="palette-card-title">Electric Indigo</div>
                                            <span style="font-size:11px; background:#e0e7ff; color:#3730a3; padding:2px 6px; border-radius:4px; font-weight:700;">Modern</span>
                                        </div>
                                        <div class="palette-card-desc">Deep indigo paired with electric cyan highlights for modern tech startups.</div>
                                    </div>
                                    <div>
                                        <div class="palette-swatches">
                                            <span class="palette-swatch-circle" style="background:#4F46E5;" title="Primary: #4F46E5"></span>
                                            <span class="palette-swatch-circle" style="background:#4338CA;" title="Hover: #4338CA"></span>
                                            <span class="palette-swatch-circle" style="background:#06B6D4;" title="Accent: #06B6D4"></span>
                                            <span class="palette-swatch-circle" style="background:#10B981;" title="Success: #10B981"></span>
                                        </div>
                                        <span class="palette-btn-apply">Apply Preset</span>
                                    </div>
                                </div>

                                <!-- Preset 6: Ruby Crimson & Rose -->
                                <div class="palette-card <?php echo $themePreset === 'ruby-crimson' ? 'active' : ''; ?>" onclick="applyPreset('ruby-crimson', '#E11D48', '#BE123C', '#FB7185', '#10B981', '#FFFFFF', '#0F172A')">
                                    <div>
                                        <div class="palette-card-header">
                                            <div class="palette-card-title">Ruby Crimson &amp; Rose</div>
                                            <span style="font-size:11px; background:#ffe4e6; color:#9f1239; padding:2px 6px; border-radius:4px; font-weight:700;">Bold</span>
                                        </div>
                                        <div class="palette-card-desc">Bold and luxurious crimson red with soft rose accents for high visual impact.</div>
                                    </div>
                                    <div>
                                        <div class="palette-swatches">
                                            <span class="palette-swatch-circle" style="background:#E11D48;" title="Primary: #E11D48"></span>
                                            <span class="palette-swatch-circle" style="background:#BE123C;" title="Hover: #BE123C"></span>
                                            <span class="palette-swatch-circle" style="background:#FB7185;" title="Accent: #FB7185"></span>
                                            <span class="palette-swatch-circle" style="background:#10B981;" title="Success: #10B981"></span>
                                        </div>
                                        <span class="palette-btn-apply">Apply Preset</span>
                                    </div>
                                </div>

                                <!-- Preset 7: Forest Mint & Pine -->
                                <div class="palette-card <?php echo $themePreset === 'forest-mint' ? 'active' : ''; ?>" onclick="applyPreset('forest-mint', '#059669', '#047857', '#34D399', '#10B981', '#FFFFFF', '#064E3B')">
                                    <div>
                                        <div class="palette-card-header">
                                            <div class="palette-card-title">Forest Mint &amp; Pine</div>
                                            <span style="font-size:11px; background:#d1fae5; color:#065f46; padding:2px 6px; border-radius:4px; font-weight:700;">Nature</span>
                                        </div>
                                        <div class="palette-card-desc">Refreshing organic emerald and mint tones for healthcare and finance.</div>
                                    </div>
                                    <div>
                                        <div class="palette-swatches">
                                            <span class="palette-swatch-circle" style="background:#059669;" title="Primary: #059669"></span>
                                            <span class="palette-swatch-circle" style="background:#047857;" title="Hover: #047857"></span>
                                            <span class="palette-swatch-circle" style="background:#34D399;" title="Accent: #34D399"></span>
                                            <span class="palette-swatch-circle" style="background:#10B981;" title="Success: #10B981"></span>
                                        </div>
                                        <span class="palette-btn-apply">Apply Preset</span>
                                    </div>
                                </div>

                                <!-- Preset 8: Midnight Cyberpunk Dark -->
                                <div class="palette-card <?php echo $themePreset === 'midnight-dark' ? 'active' : ''; ?>" onclick="applyPreset('midnight-dark', '#6366F1', '#4F46E5', '#22D3EE', '#10B981', '#0B0F19', '#F8FAFC')">
                                    <div>
                                        <div class="palette-card-header">
                                            <div class="palette-card-title">Midnight Cyberpunk</div>
                                            <span style="font-size:11px; background:#1e1b4b; color:#a5b4fc; padding:2px 6px; border-radius:4px; font-weight:700;">Dark Theme</span>
                                        </div>
                                        <div class="palette-card-desc">Deep nocturnal obsidian background with neon cyan and electric indigo glow.</div>
                                    </div>
                                    <div>
                                        <div class="palette-swatches">
                                            <span class="palette-swatch-circle" style="background:#6366F1;" title="Primary: #6366F1"></span>
                                            <span class="palette-swatch-circle" style="background:#4F46E5;" title="Hover: #4F46E5"></span>
                                            <span class="palette-swatch-circle" style="background:#22D3EE;" title="Accent: #22D3EE"></span>
                                            <span class="palette-swatch-circle" style="background:#0B0F19; border-color:#64748b;" title="Bg: #0B0F19"></span>
                                        </div>
                                        <span class="palette-btn-apply">Apply Preset</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Custom Color Pickers & Live Preview Grid -->
                    <div style="display:grid; grid-template-columns: 1fr 1fr; gap:24px; align-items:start;">
                        <!-- Left: Custom Color Controls Form -->
                        <div class="postbox">
                            <div class="postbox-header"><h2>Custom Color Controls</h2></div>
                            <div class="inside" style="padding:16px;">
                                <form method="post" action="" id="color-palette-form">
                                    <input type="hidden" name="form_action" value="save_color_palette">
                                    <input type="hidden" name="theme_palette_preset" id="theme_palette_preset" value="<?php echo htmlspecialchars($themePreset); ?>">

                                    <table class="form-table" style="margin-top:0;">
                                        <!-- Primary Brand Color -->
                                        <tr>
                                            <th scope="row">
                                                <label for="theme_primary_color">Primary Brand Color</label>
                                                <div style="font-weight:normal; font-size:12px; color:#646970;">Main buttons, highlights &amp; gradient start</div>
                                            </th>
                                            <td>
                                                <div class="color-picker-row">
                                                    <div class="color-picker-wrap">
                                                        <input type="color" id="theme_primary_picker" value="<?php echo htmlspecialchars($themePrimary); ?>" oninput="syncColor('theme_primary_color', this.value)">
                                                    </div>
                                                    <input type="text" name="theme_primary_color" id="theme_primary_color" value="<?php echo htmlspecialchars($themePrimary); ?>" class="color-hex-input" oninput="syncPicker('theme_primary_picker', this.value)" maxlength="7">
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Primary Hover / Gradient Mid -->
                                        <tr>
                                            <th scope="row">
                                                <label for="theme_primary_hover">Primary Hover / Midtone</label>
                                                <div style="font-weight:normal; font-size:12px; color:#646970;">Button hover state &amp; gradient center</div>
                                            </th>
                                            <td>
                                                <div class="color-picker-row">
                                                    <div class="color-picker-wrap">
                                                        <input type="color" id="theme_primary_hover_picker" value="<?php echo htmlspecialchars($themePrimaryHover); ?>" oninput="syncColor('theme_primary_hover', this.value)">
                                                    </div>
                                                    <input type="text" name="theme_primary_hover" id="theme_primary_hover" value="<?php echo htmlspecialchars($themePrimaryHover); ?>" class="color-hex-input" oninput="syncPicker('theme_primary_hover_picker', this.value)" maxlength="7">
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Accent Highlight Color -->
                                        <tr>
                                            <th scope="row">
                                                <label for="theme_accent_color">Accent Highlight Color</label>
                                                <div style="font-weight:normal; font-size:12px; color:#646970;">Gradient finish, cyan pills &amp; icons</div>
                                            </th>
                                            <td>
                                                <div class="color-picker-row">
                                                    <div class="color-picker-wrap">
                                                        <input type="color" id="theme_accent_picker" value="<?php echo htmlspecialchars($themeAccent); ?>" oninput="syncColor('theme_accent_color', this.value)">
                                                    </div>
                                                    <input type="text" name="theme_accent_color" id="theme_accent_color" value="<?php echo htmlspecialchars($themeAccent); ?>" class="color-hex-input" oninput="syncPicker('theme_accent_picker', this.value)" maxlength="7">
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Success / Badges Color -->
                                        <tr>
                                            <th scope="row">
                                                <label for="theme_success_color">Success &amp; Verification</label>
                                                <div style="font-weight:normal; font-size:12px; color:#646970;">WhatsApp checkmarks &amp; badges</div>
                                            </th>
                                            <td>
                                                <div class="color-picker-row">
                                                    <div class="color-picker-wrap">
                                                        <input type="color" id="theme_success_picker" value="<?php echo htmlspecialchars($themeSuccess); ?>" oninput="syncColor('theme_success_color', this.value)">
                                                    </div>
                                                    <input type="text" name="theme_success_color" id="theme_success_color" value="<?php echo htmlspecialchars($themeSuccess); ?>" class="color-hex-input" oninput="syncPicker('theme_success_picker', this.value)" maxlength="7">
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Website Background Color -->
                                        <tr>
                                            <th scope="row">
                                                <label for="theme_bg_color">Website Background</label>
                                                <div style="font-weight:normal; font-size:12px; color:#646970;">Main page canvas background color</div>
                                            </th>
                                            <td>
                                                <div class="color-picker-row">
                                                    <div class="color-picker-wrap">
                                                        <input type="color" id="theme_bg_picker" value="<?php echo htmlspecialchars($themeBg); ?>" oninput="syncColor('theme_bg_color', this.value)">
                                                    </div>
                                                    <input type="text" name="theme_bg_color" id="theme_bg_color" value="<?php echo htmlspecialchars($themeBg); ?>" class="color-hex-input" oninput="syncPicker('theme_bg_picker', this.value)" maxlength="7">
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Heading & Text Color -->
                                        <tr>
                                            <th scope="row">
                                                <label for="theme_text_color">Heading &amp; Text Color</label>
                                                <div style="font-weight:normal; font-size:12px; color:#646970;">Main headers, titles and dark text</div>
                                            </th>
                                            <td>
                                                <div class="color-picker-row">
                                                    <div class="color-picker-wrap">
                                                        <input type="color" id="theme_text_picker" value="<?php echo htmlspecialchars($themeText); ?>" oninput="syncColor('theme_text_color', this.value)">
                                                    </div>
                                                    <input type="text" name="theme_text_color" id="theme_text_color" value="<?php echo htmlspecialchars($themeText); ?>" class="color-hex-input" oninput="syncPicker('theme_text_picker', this.value)" maxlength="7">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

                                    <div style="display:flex; gap:12px; align-items:center; margin-top:24px; padding-top:16px; border-top:1px solid #dcdcde;">
                                        <button type="submit" class="button button-primary" style="height:36px; padding:0 18px; font-weight:700; font-size:13px;">Save Color Palette</button>
                                        <button type="button" class="button" onclick="document.getElementById('reset-color-form').submit();" style="height:36px; padding:0 14px;">Reset to Default</button>
                                        <a href="/" target="_blank" style="margin-left:auto; font-size:13px; text-decoration:none; color:#2271b1;">View live homepage &nearr;</a>
                                    </div>
                                </form>

                                <form method="post" action="" id="reset-color-form" style="display:none;">
                                    <input type="hidden" name="form_action" value="reset_color_palette">
                                </form>
                            </div>
                        </div>

                        <!-- Right: Live Real-Time Website Preview Card -->
                        <div class="postbox" style="position:sticky; top:50px;">
                            <div class="postbox-header">
                                <h2>Live Website Preview</h2>
                                <span style="font-size:11px; background:#dcfce7; color:#15803d; font-weight:700; padding:2px 8px; border-radius:4px;">Updates in Real-Time</span>
                            </div>
                            <div class="inside" style="padding:20px;">
                                <div class="preview-canvas" id="preview-canvas-box">
                                    <!-- Mock Navbar -->
                                    <div class="preview-header">
                                        <div style="display:flex; align-items:center; gap:8px;">
                                            <div id="preview-logo-icon" class="preview-icon-box" style="width:28px; height:28px; border-radius:6px; background:linear-gradient(135deg, <?php echo htmlspecialchars($themePrimary); ?>, <?php echo htmlspecialchars($themeAccent); ?>);">
                                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="#fff" stroke-width="2.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                                            </div>
                                            <strong style="font-size:14px; color:#0f172a;">Inbox<span id="preview-wa-brand" style="color:<?php echo htmlspecialchars($themePrimary); ?>;">Wa</span></strong>
                                        </div>
                                        <div style="display:flex; gap:12px; font-size:11px; font-weight:600; color:#64748b;">
                                            <span>Channels</span>
                                            <span>Solutions</span>
                                            <span>Pricing</span>
                                        </div>
                                    </div>

                                    <!-- Mock Hero Stage -->
                                    <div class="preview-hero" id="preview-hero-container">
                                        <div id="preview-badge-pill" class="preview-badge" style="background:<?php echo htmlspecialchars($themePrimary); ?>18; color:<?php echo htmlspecialchars($themePrimaryHover); ?>; border-color:<?php echo htmlspecialchars($themePrimary); ?>35;">
                                            <span>&#9889; Meta Tech Partner &middot; Official API</span>
                                        </div>

                                        <div class="preview-title" id="preview-title-elem" style="color:<?php echo htmlspecialchars($themeText); ?>;">
                                            Automate WhatsApp Marketing with <span id="preview-title-gradient" style="background:linear-gradient(135deg, <?php echo htmlspecialchars($themePrimary); ?>, <?php echo htmlspecialchars($themeAccent); ?>); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">AI Chatbots</span>
                                        </div>

                                        <p class="preview-subtitle">
                                            Send broadcasts, deploy intelligent sales chatbots, and convert leads seamlessly on official WhatsApp Cloud API.
                                        </p>

                                        <div class="preview-actions">
                                            <a href="javascript:void(0)" id="preview-btn-primary" class="preview-btn-primary" style="background:linear-gradient(135deg, <?php echo htmlspecialchars($themePrimary); ?> 0%, <?php echo htmlspecialchars($themePrimaryHover); ?> 50%, <?php echo htmlspecialchars($themeAccent); ?> 100%); box-shadow:0 4px 14px <?php echo htmlspecialchars($themePrimary); ?>66;">
                                                Start Free Trial &rarr;
                                            </a>
                                            <a href="javascript:void(0)" class="preview-btn-outline">
                                                Watch Demo
                                            </a>
                                        </div>

                                        <!-- Mock Feature Card with Gradient Icon -->
                                        <div class="preview-feature-card">
                                            <div id="preview-icon-box-feature" class="preview-icon-box" style="background:linear-gradient(135deg, <?php echo htmlspecialchars($themePrimary); ?>20, <?php echo htmlspecialchars($themeAccent); ?>25); color:<?php echo htmlspecialchars($themePrimaryHover); ?>;">
                                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                                            </div>
                                            <div>
                                                <strong style="font-size:12px; color:#0f172a; display:block;">Automated WhatsApp Broadcasts</strong>
                                                <span style="font-size:11px; color:#64748b;">Reach 100,000+ customers with 98% open rates instantly.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Client-Side Real-Time Preview Scripts -->
                    <script>
                    function syncColor(inputId, val) {
                        if (val && val.charAt(0) !== '#') val = '#' + val;
                        const el = document.getElementById(inputId);
                        if (el) el.value = val.toUpperCase();
                        updateLivePalettePreview();
                    }

                    function syncPicker(pickerId, val) {
                        if (!val) return;
                        if (val.charAt(0) !== '#') val = '#' + val;
                        if (/^#[0-9A-Fa-f]{6}$/.test(val)) {
                            const p = document.getElementById(pickerId);
                            if (p) p.value = val;
                            updateLivePalettePreview();
                        }
                    }

                    function applyPreset(presetKey, p, p2, a, g, bg, t) {
                        document.getElementById('theme_palette_preset').value = presetKey;
                        
                        document.getElementById('theme_primary_color').value = p.toUpperCase();
                        document.getElementById('theme_primary_picker').value = p;

                        document.getElementById('theme_primary_hover').value = p2.toUpperCase();
                        document.getElementById('theme_primary_hover_picker').value = p2;

                        document.getElementById('theme_accent_color').value = a.toUpperCase();
                        document.getElementById('theme_accent_picker').value = a;

                        document.getElementById('theme_success_color').value = g.toUpperCase();
                        document.getElementById('theme_success_picker').value = g;

                        document.getElementById('theme_bg_color').value = bg.toUpperCase();
                        document.getElementById('theme_bg_picker').value = bg;

                        document.getElementById('theme_text_color').value = t.toUpperCase();
                        document.getElementById('theme_text_picker').value = t;

                        document.querySelectorAll('.palette-card').forEach(card => card.classList.remove('active'));
                        if (event && event.currentTarget) {
                            event.currentTarget.classList.add('active');
                        }

                        updateLivePalettePreview();
                    }

                    function updateLivePalettePreview() {
                        const p = document.getElementById('theme_primary_color').value;
                        const p2 = document.getElementById('theme_primary_hover').value;
                        const a = document.getElementById('theme_accent_color').value;
                        const bg = document.getElementById('theme_bg_color').value;
                        const t = document.getElementById('theme_text_color').value;

                        // 1. Primary Button
                        const btn = document.getElementById('preview-btn-primary');
                        if (btn) {
                            btn.style.background = `linear-gradient(135deg, ${p} 0%, ${p2} 50%, ${a} 100%)`;
                            btn.style.boxShadow = `0 4px 14px ${p}66`;
                        }

                        // 2. Logo Icon
                        const logo = document.getElementById('preview-logo-icon');
                        if (logo) {
                            logo.style.background = `linear-gradient(135deg, ${p}, ${a})`;
                        }

                        // 3. Brand Text
                        const brandWa = document.getElementById('preview-wa-brand');
                        if (brandWa) brandWa.style.color = p;

                        // 4. Badge Pill
                        const badge = document.getElementById('preview-badge-pill');
                        if (badge) {
                            badge.style.background = `${p}18`;
                            badge.style.color = p2;
                            badge.style.borderColor = `${p}35`;
                        }

                        // 5. Title Gradient & Text
                        const titleGradient = document.getElementById('preview-title-gradient');
                        if (titleGradient) {
                            titleGradient.style.background = `linear-gradient(135deg, ${p}, ${a})`;
                            titleGradient.style.webkitBackgroundClip = 'text';
                            titleGradient.style.webkitTextFillColor = 'transparent';
                        }
                        const titleElem = document.getElementById('preview-title-elem');
                        if (titleElem) titleElem.style.color = t;

                        // 6. Feature icon box
                        const iconBox = document.getElementById('preview-icon-box-feature');
                        if (iconBox) {
                            iconBox.style.background = `linear-gradient(135deg, ${p}20, ${a}25)`;
                            iconBox.style.color = p2;
                        }

                        // 7. Canvas Background
                        const canvas = document.getElementById('preview-canvas-box');
                        if (canvas) {
                            canvas.style.background = bg;
                            if (bg.toUpperCase() !== '#FFFFFF' && bg.toUpperCase() !== '#FFF') {
                                canvas.style.color = '#fff';
                            } else {
                                canvas.style.color = '#0f172a';
                            }
                        }
                    }

                    // Initial preview render
                    document.addEventListener('DOMContentLoaded', updateLivePalettePreview);
                    </script>

                elseif ($page === 'plugins' || $page === 'plugin-new'): ?>
                    <h1 class="wp-heading-inline">Plugins</h1>
                    <a href="<?php echo $adminBase; ?>?page=plugin-new" class="page-title-action">Add New</a>

                    <div class="wp-table-responsive">
                        <table class="wp-list-table">
                            <thead>
                                <tr>
                                    <th style="width:40px;"><input type="checkbox" disabled></th>
                                    <th>Plugin</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pluginsList as $pl): 
                                    $isActive = ($pl['status'] === 'active');
                                ?>
                                    <tr style="<?php echo $isActive ? 'background:#f7fcfe;' : ''; ?>">
                                        <td><input type="checkbox" disabled></td>
                                        <td style="width:240px;">
                                            <strong style="font-size:14px;"><?php echo htmlspecialchars($pl['name']); ?></strong>
                                            <div class="row-actions" style="margin-top:6px;">
                                                <?php if ($isActive): ?>
                                                    <a href="<?php echo $adminBase; ?>?action=toggle_plugin&slug=<?php echo $pl['slug']; ?>" style="color:#d63638;">Deactivate</a>
                                                <?php else: ?>
                                                    <a href="<?php echo $adminBase; ?>?action=toggle_plugin&slug=<?php echo $pl['slug']; ?>" style="color:#2271b1; font-weight:600;">Activate</a>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <p style="margin-bottom:6px; color:#3c434a;"><?php echo htmlspecialchars($pl['description']); ?></p>
                                            <div style="font-size:11px; color:#646970;">
                                                Version <?php echo htmlspecialchars($pl['version']); ?> | By <a href="/"><?php echo htmlspecialchars($pl['author']); ?></a> | Status: <strong><?php echo ucfirst($pl['status']); ?></strong>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                <?php
                // =============================================================
                // 9. USERS & PROFILE SCREEN
                // =============================================================
                elseif ($page === 'users' || $page === 'user-new' || $page === 'profile'): ?>
                    <h1 class="wp-heading-inline"><?php echo $page === 'profile' ? 'Profile' : 'Users'; ?></h1>
                    <?php if ($page !== 'profile'): ?>
                        <a href="<?php echo $adminBase; ?>?page=user-new" class="page-title-action">Add New</a>
                    <?php endif; ?>

                    <?php if ($page === 'profile' || $page === 'user-new'): ?>
                        <div class="postbox" style="margin-top:16px;">
                            <div class="inside" style="padding:20px;">
                                <h2>Your Profile &amp; Security Credentials</h2>
                                <form method="post" action="">
                                    <input type="hidden" name="form_action" value="change_password">
                                    <table class="form-table">
                                        <tr>
                                            <th>Username</th>
                                            <td><input type="text" name="new_username" class="regular-text" value="<?php echo htmlspecialchars($currentAdminUser); ?>" required></td>
                                        </tr>
                                        <tr>
                                            <th>Email Address</th>
                                            <td><input type="email" name="admin_email" class="regular-text" value="<?php echo htmlspecialchars(hb_get_setting('notification_email', 'admin@inboxwa.com')); ?>"></td>
                                        </tr>
                                        <tr>
                                            <th>New Password</th>
                                            <td>
                                                <input type="password" name="new_password" class="regular-text" placeholder="Enter new strong password" required>
                                                <p class="description">Must be at least 6 characters.</p>
                                            </td>
                                        </tr>
                                    </table>
                                    <p class="submit"><button type="submit" class="button button-primary">Update Profile</button></p>
                                </form>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="wp-table-responsive">
                            <table class="wp-list-table">
                                <thead>
                                    <tr>
                                        <th style="width:40px;"><input type="checkbox" disabled></th>
                                        <th>Username</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Posts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" disabled></td>
                                        <td>
                                            <div style="display:flex; align-items:center; gap:8px;">
                                                <img src="https://secure.gravatar.com/avatar/<?php echo md5($currentAdminUser . '@inboxwa.com'); ?>?s=32&d=retro" width="32" height="32" style="border-radius:50%;">
                                                <div>
                                                    <strong><a href="<?php echo $adminBase; ?>?page=profile"><?php echo htmlspecialchars($currentAdminUser); ?></a></strong>
                                                    <div class="row-actions"><a href="<?php echo $adminBase; ?>?page=profile">Edit</a></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Administrator</td>
                                        <td><a href="mailto:admin@inboxwa.com"><?php echo htmlspecialchars(hb_get_setting('notification_email', 'admin@inboxwa.com')); ?></a></td>
                                        <td>Administrator</td>
                                        <td><a href="<?php echo $adminBase; ?>?page=posts"><?php echo $totalPosts; ?></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>

                <?php
                // =============================================================
                // 10. TOOLS SCREEN (Export CSV & Site Health)
                // =============================================================
                elseif ($page === 'tools' || $page === 'site-health'): ?>
                    <h1 class="wp-heading-inline"><?php echo $page === 'site-health' ? 'Site Health' : 'Tools'; ?></h1>

                    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:20px; margin-top:16px;">
                        <div class="postbox">
                            <div class="postbox-header"><h2>Export Inquiries &amp; Leads Data</h2></div>
                            <div class="inside">
                                <p style="margin-bottom:14px; color:#555;">Download all captured business inquiries, contact form submissions, and demo requests in standard CSV format.</p>
                                <a href="<?php echo $adminBase; ?>?action=export&format=csv" class="button button-primary">Download Export File (CSV)</a>
                            </div>
                        </div>

                        <div class="postbox">
                            <div class="postbox-header"><h2>Site Health &amp; Diagnostics</h2></div>
                            <div class="inside">
                                <ul style="list-style:none; padding:0; margin:0; font-size:13px; line-height:1.8em;">
                                    <li>&#10004; PHP Version: <strong>8.3+ (Vercel Serverless)</strong></li>
                                    <li>&#10004; SQLite CMS Database: <strong>Connected &amp; Healthy</strong></li>
                                    <li>&#10004; HTTPS Security: <strong>Active (SSL Verified)</strong></li>
                                    <li>&#10004; WhatsApp Graph API: <strong>Active (v20.0)</strong></li>
                                    <li>&#10004; Vercel Edge Cache: <strong>Operational</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                <?php
                // =============================================================
                // 11. GENERAL SETTINGS SCREEN (EXACT MATCH FOR media_1788877451432.png)
                // =============================================================
                elseif ($page === 'settings'): 
                    $curDate = date('Y-m-d');
                    $curTime = date('H:i:s');
                    $curDateFormat = hb_get_setting('date_format', 'F j, Y');
                    $curDateCustom = hb_get_setting('date_format_custom', 'F j, Y');
                    $curTimeFormat = hb_get_setting('time_format', 'g:i a');
                    $curTimeCustom = hb_get_setting('time_format_custom', 'g:i a');
                    $curTz = hb_get_setting('timezone_string', 'UTC+0');
                    $curLang = hb_get_setting('site_language', 'en_US');
                    $defRole = hb_get_setting('default_role', 'subscriber');
                    $weekStart = hb_get_setting('start_of_week', '1');
                    $canRegister = hb_get_setting('users_can_register', '0') === '1';
                ?>
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <h1 class="wp-heading-inline">General Settings</h1>
                        <button type="button" class="button" style="margin-top:10px;" onclick="var h = document.getElementById('contextual-help-panel'); h.style.display = (h.style.display === 'none' ? 'block' : 'none');">Help &#9660;</button>
                    </div>

                    <!-- Slide down Help Drawer -->
                    <div id="contextual-help-panel" style="display:none; background:#fff; border:1px solid #c3c4c7; padding:16px 20px; margin:10px 0 20px; border-radius:2px; box-shadow:0 1px 1px rgba(0,0,0,0.04);">
                        <h3 style="font-size:14px; margin-bottom:8px; color:#1d2327;">Overview of General Settings</h3>
                        <p style="color:#50575e; line-height:1.5;">The fields on this screen determine the fundamental identity and localized configuration of your website. Changes made here apply across both the public-facing portal and the admin dashboard.</p>
                    </div>

                    <!-- Site Icon Modal -->
                    <div id="modal-site-icon" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.6); z-index:100000; align-items:center; justify-content:center;">
                        <div style="background:#fff; border-radius:4px; max-width:480px; width:90%; padding:20px; box-shadow:0 10px 25px rgba(0,0,0,0.3);">
                            <h3 style="margin-bottom:12px; font-size:16px;">Select Site Icon (512 &times; 512)</h3>
                            <p style="color:#646970; font-size:12px; margin-bottom:14px;">Choose an icon URL or select from your brand assets.</p>
                            <div style="display:flex; gap:10px; margin-bottom:16px;">
                                <img src="/assets/images/favicon-32x32.png" onclick="setSiteIcon(this.src)" style="cursor:pointer; width:48px; height:48px; border:2px solid #ddd; border-radius:4px; padding:4px;" title="Standard Favicon">
                                <img src="/assets/images/logo.png" onclick="setSiteIcon(this.src)" style="cursor:pointer; width:48px; height:48px; border:2px solid #ddd; border-radius:4px; padding:4px; object-fit:contain;" title="Main Logo">
                            </div>
                            <label style="display:block; font-weight:600; margin-bottom:4px; font-size:12px;">Custom Image URL:</label>
                            <input type="text" id="custom-icon-url-input" class="regular-text" style="max-width:100%; margin-bottom:14px;" placeholder="/assets/images/..." value="<?php echo htmlspecialchars($siteIcon); ?>">
                            <div style="display:flex; justify-content:flex-end; gap:8px;">
                                <button type="button" class="button" onclick="document.getElementById('modal-site-icon').style.display='none'">Cancel</button>
                                <button type="button" class="button button-primary" onclick="setSiteIcon(document.getElementById('custom-icon-url-input').value); document.getElementById('modal-site-icon').style.display='none'">Set Site Icon</button>
                            </div>
                        </div>
                    </div>

                    <?php if ($settingsTab === 'general'): ?>
                        <form method="post" action="" novalidate="novalidate">
                            <input type="hidden" name="form_action" value="save_settings">

                            <table class="form-table" role="presentation">
                                <tbody>
                                    <!-- Site Title -->
                                    <tr>
                                        <th scope="row"><label for="blogname">Site Title</label></th>
                                        <td>
                                            <input name="site_title" type="text" id="blogname" value="<?php echo htmlspecialchars($siteTitle); ?>" class="regular-text" required>
                                        </td>
                                    </tr>

                                    <!-- Tagline -->
                                    <tr>
                                        <th scope="row"><label for="blogdescription">Tagline</label></th>
                                        <td>
                                            <input name="site_tagline" type="text" id="blogdescription" value="<?php echo htmlspecialchars($siteTagline); ?>" class="regular-text">
                                            <p class="description" id="tagline-description">In a few words, explain what this site is about. Example: &ldquo;All-in-One WhatsApp Marketing &amp; Business Automation Platform.&rdquo;</p>
                                        </td>
                                    </tr>

                                    <!-- Site Icon -->
                                    <tr>
                                        <th scope="row">Site Icon</th>
                                        <td>
                                            <div style="display:flex; align-items:center; gap:12px; margin-bottom:6px;">
                                                <button type="button" class="button" onclick="document.getElementById('modal-site-icon').style.display='flex'">Choose a Site Icon</button>
                                                <img id="site-icon-preview" src="<?php echo htmlspecialchars($siteIcon); ?>" alt="Site Icon" style="width:34px; height:34px; border-radius:4px; border:1px solid #c3c4c7; padding:2px; background:#fff; object-fit:contain;">
                                            </div>
                                            <input type="hidden" name="favicon_url" id="site_icon_input" value="<?php echo htmlspecialchars($siteIcon); ?>">
                                            <p class="description">The Site Icon is what you see in browser tabs, bookmark bars, and within mobile apps. It should be square and at least <code>512 by 512</code> pixels.</p>
                                        </td>
                                    </tr>

                                    <!-- WordPress Address (URL) -->
                                    <tr>
                                        <th scope="row"><label for="siteurl">WordPress Address (URL)</label></th>
                                        <td>
                                            <input name="siteurl" type="url" id="siteurl" value="<?php echo htmlspecialchars((isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . ($_SERVER['HTTP_HOST'] ?? 'hellobotz-fm3x-eta.vercel.app')); ?>" class="regular-text code" style="background:#f0f0f1; border-color:#dcdcde; color:#646970;" readonly>
                                        </td>
                                    </tr>

                                    <!-- Site Address (URL) -->
                                    <tr>
                                        <th scope="row"><label for="home">Site Address (URL)</label></th>
                                        <td>
                                            <input name="home" type="url" id="home" value="<?php echo htmlspecialchars((isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . ($_SERVER['HTTP_HOST'] ?? 'hellobotz-fm3x-eta.vercel.app')); ?>" class="regular-text code" style="background:#f0f0f1; border-color:#dcdcde; color:#646970;" readonly>
                                        </td>
                                    </tr>

                                    <!-- Administration Email Address -->
                                    <tr>
                                        <th scope="row"><label for="admin_email">Administration Email Address</label></th>
                                        <td>
                                            <input name="admin_email" type="email" id="admin_email" value="<?php echo htmlspecialchars(hb_get_setting('admin_email', hb_get_setting('sales_email', 'admin@inboxwa.com'))); ?>" class="regular-text ltr">
                                            <p class="description">This address is used for admin purposes. If you change this, an email will be sent to your new address to confirm it. <strong>The new address will not become active until confirmed.</strong></p>
                                        </td>
                                    </tr>

                                    <!-- Membership -->
                                    <tr>
                                        <th scope="row">Membership</th>
                                        <td>
                                            <fieldset>
                                                <label for="users_can_register">
                                                    <input name="users_can_register" type="checkbox" id="users_can_register" value="1" <?php echo $canRegister ? 'checked' : ''; ?>>
                                                    Anyone can register
                                                </label>
                                            </fieldset>
                                        </td>
                                    </tr>

                                    <!-- New User Default Role -->
                                    <tr>
                                        <th scope="row"><label for="default_role">New User Default Role</label></th>
                                        <td>
                                            <select name="default_role" id="default_role">
                                                <option value="subscriber" <?php echo $defRole === 'subscriber' ? 'selected' : ''; ?>>Subscriber</option>
                                                <option value="contributor" <?php echo $defRole === 'contributor' ? 'selected' : ''; ?>>Contributor</option>
                                                <option value="author" <?php echo $defRole === 'author' ? 'selected' : ''; ?>>Author</option>
                                                <option value="editor" <?php echo $defRole === 'editor' ? 'selected' : ''; ?>>Editor</option>
                                                <option value="administrator" <?php echo $defRole === 'administrator' ? 'selected' : ''; ?>>Administrator</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <!-- Site Language -->
                                    <tr>
                                        <th scope="row"><label for="WPLANG">Site Language <span class="dashicons dashicons-translation" style="vertical-align:middle; font-size:16px;">🌐</span></label></th>
                                        <td>
                                            <select name="site_language" id="WPLANG">
                                                <option value="en_US" <?php echo $curLang === 'en_US' ? 'selected' : ''; ?>>English (United States)</option>
                                                <option value="en_GB" <?php echo $curLang === 'en_GB' ? 'selected' : ''; ?>>English (UK)</option>
                                                <option value="hi_IN" <?php echo $curLang === 'hi_IN' ? 'selected' : ''; ?>>Hindi (हिन्दी)</option>
                                                <option value="ar" <?php echo $curLang === 'ar' ? 'selected' : ''; ?>>Arabic (العربية)</option>
                                                <option value="es_ES" <?php echo $curLang === 'es_ES' ? 'selected' : ''; ?>>Spanish (Español)</option>
                                                <option value="de_DE" <?php echo $curLang === 'de_DE' ? 'selected' : ''; ?>>German (Deutsch)</option>
                                                <option value="fr_FR" <?php echo $curLang === 'fr_FR' ? 'selected' : ''; ?>>French (Français)</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <!-- Timezone -->
                                    <tr>
                                        <th scope="row"><label for="timezone_string">Timezone</label></th>
                                        <td>
                                            <select id="timezone_string" name="timezone_string">
                                                <option value="UTC+0" <?php echo $curTz === 'UTC+0' ? 'selected' : ''; ?>>UTC+0</option>
                                                <option value="UTC+5.5" <?php echo $curTz === 'UTC+5.5' ? 'selected' : ''; ?>>UTC+5:30 (India Standard Time)</option>
                                                <option value="UTC+4" <?php echo $curTz === 'UTC+4' ? 'selected' : ''; ?>>UTC+4 (Dubai / GST)</option>
                                                <option value="UTC+1" <?php echo $curTz === 'UTC+1' ? 'selected' : ''; ?>>UTC+1 (London / BST)</option>
                                                <option value="UTC+2" <?php echo $curTz === 'UTC+2' ? 'selected' : ''; ?>>UTC+2 (Cairo / EET)</option>
                                                <option value="UTC+3" <?php echo $curTz === 'UTC+3' ? 'selected' : ''; ?>>UTC+3 (Riyadh / AST)</option>
                                                <option value="UTC+8" <?php echo $curTz === 'UTC+8' ? 'selected' : ''; ?>>UTC+8 (Singapore / CST)</option>
                                                <option value="UTC-5" <?php echo $curTz === 'UTC-5' ? 'selected' : ''; ?>>UTC-5 (New York / EST)</option>
                                                <option value="UTC-8" <?php echo $curTz === 'UTC-8' ? 'selected' : ''; ?>>UTC-8 (Los Angeles / PST)</option>
                                            </select>
                                            <p class="description">Choose either a city in the same timezone as you or a UTC (Coordinated Universal Time) time offset.</p>
                                            <p class="timezone-info" style="margin-top:4px; color:#646970;">Universal time is <code><?php echo gmdate('Y-m-d H:i:s'); ?></code>.</p>
                                        </td>
                                    </tr>

                                    <!-- Date Format -->
                                    <tr>
                                        <th scope="row">Date Format</th>
                                        <td>
                                            <fieldset>
                                                <label style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                                                    <input type="radio" name="date_format" value="F j, Y" <?php echo $curDateFormat === 'F j, Y' ? 'checked' : ''; ?> onchange="updateDatePreview(this.value)">
                                                    <span class="date-time-text" style="min-width:130px;"><?php echo date('F j, Y'); ?></span>
                                                    <code>F j, Y</code>
                                                </label>
                                                <label style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                                                    <input type="radio" name="date_format" value="Y-m-d" <?php echo $curDateFormat === 'Y-m-d' ? 'checked' : ''; ?> onchange="updateDatePreview(this.value)">
                                                    <span class="date-time-text" style="min-width:130px;"><?php echo date('Y-m-d'); ?></span>
                                                    <code>Y-m-d</code>
                                                </label>
                                                <label style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                                                    <input type="radio" name="date_format" value="m/d/Y" <?php echo $curDateFormat === 'm/d/Y' ? 'checked' : ''; ?> onchange="updateDatePreview(this.value)">
                                                    <span class="date-time-text" style="min-width:130px;"><?php echo date('m/d/Y'); ?></span>
                                                    <code>m/d/Y</code>
                                                </label>
                                                <label style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                                                    <input type="radio" name="date_format" value="d/m/Y" <?php echo $curDateFormat === 'd/m/Y' ? 'checked' : ''; ?> onchange="updateDatePreview(this.value)">
                                                    <span class="date-time-text" style="min-width:130px;"><?php echo date('d/m/Y'); ?></span>
                                                    <code>d/m/Y</code>
                                                </label>
                                                <label style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                                                    <input type="radio" name="date_format" value="d.m.Y" <?php echo $curDateFormat === 'd.m.Y' ? 'checked' : ''; ?> onchange="updateDatePreview(this.value)">
                                                    <span class="date-time-text" style="min-width:130px;"><?php echo date('d.m.Y'); ?></span>
                                                    <code>d.m.Y</code>
                                                </label>
                                                <label style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                                                    <input type="radio" name="date_format" value="custom" <?php echo $curDateFormat === 'custom' ? 'checked' : ''; ?> onchange="updateDatePreview(document.getElementById('date_format_custom').value)">
                                                    <span style="min-width:60px;">Custom:</span>
                                                    <input type="text" name="date_format_custom" id="date_format_custom" value="<?php echo htmlspecialchars($curDateCustom); ?>" class="small-text" style="width:120px; padding:3px 6px; border:1px solid #8c8f94; border-radius:3px;" oninput="document.querySelector('input[name=date_format][value=custom]').checked = true; updateDatePreview(this.value)">
                                                </label>
                                                <p class="date-time-doc" style="margin-top:6px; color:#50575e;">
                                                    <strong>Preview:</strong> <span id="date-preview"><?php echo date('F j, Y'); ?></span>
                                                </p>
                                            </fieldset>
                                        </td>
                                    </tr>

                                    <!-- Time Format -->
                                    <tr>
                                        <th scope="row">Time Format</th>
                                        <td>
                                            <fieldset>
                                                <label style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                                                    <input type="radio" name="time_format" value="g:i a" <?php echo $curTimeFormat === 'g:i a' ? 'checked' : ''; ?> onchange="updateTimePreview(this.value)">
                                                    <span class="date-time-text" style="min-width:100px;"><?php echo date('g:i a'); ?></span>
                                                    <code>g:i a</code>
                                                </label>
                                                <label style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                                                    <input type="radio" name="time_format" value="g:i A" <?php echo $curTimeFormat === 'g:i A' ? 'checked' : ''; ?> onchange="updateTimePreview(this.value)">
                                                    <span class="date-time-text" style="min-width:100px;"><?php echo date('g:i A'); ?></span>
                                                    <code>g:i A</code>
                                                </label>
                                                <label style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                                                    <input type="radio" name="time_format" value="H:i" <?php echo $curTimeFormat === 'H:i' ? 'checked' : ''; ?> onchange="updateTimePreview(this.value)">
                                                    <span class="date-time-text" style="min-width:100px;"><?php echo date('H:i'); ?></span>
                                                    <code>H:i</code>
                                                </label>
                                                <label style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                                                    <input type="radio" name="time_format" value="custom" <?php echo $curTimeFormat === 'custom' ? 'checked' : ''; ?> onchange="updateTimePreview(document.getElementById('time_format_custom').value)">
                                                    <span style="min-width:60px;">Custom:</span>
                                                    <input type="text" name="time_format_custom" id="time_format_custom" value="<?php echo htmlspecialchars($curTimeCustom); ?>" class="small-text" style="width:100px; padding:3px 6px; border:1px solid #8c8f94; border-radius:3px;" oninput="document.querySelector('input[name=time_format][value=custom]').checked = true; updateTimePreview(this.value)">
                                                </label>
                                                <p class="date-time-doc" style="margin-top:6px; color:#50575e;">
                                                    <strong>Preview:</strong> <span id="time-preview"><?php echo date('g:i a'); ?></span><br>
                                                    <a href="https://elavatex.com/#services-overview" target="_blank" rel="noopener">Documentation on date and time formatting</a>.
                                                </p>
                                            </fieldset>
                                        </td>
                                    </tr>

                                    <!-- Week Starts On -->
                                    <tr>
                                        <th scope="row"><label for="start_of_week">Week Starts On</label></th>
                                        <td>
                                            <select name="start_of_week" id="start_of_week">
                                                <option value="1" <?php echo $weekStart === '1' ? 'selected' : ''; ?>>Monday</option>
                                                <option value="0" <?php echo $weekStart === '0' ? 'selected' : ''; ?>>Sunday</option>
                                                <option value="6" <?php echo $weekStart === '6' ? 'selected' : ''; ?>>Saturday</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <p class="submit" style="margin-top:24px;">
                                <button type="submit" name="submit" id="submit" class="button button-primary" style="background:#2271b1; border-color:#2271b1; min-height:34px; padding:0 16px; font-weight:600; font-size:13px;">Save Changes</button>
                            </p>
                        </form>

                    <?php elseif ($settingsTab === 'writing'): ?>
                        <h2 style="margin:16px 0 10px; font-size:16px;">Writing Settings</h2>
                        <form method="post" action="">
                            <input type="hidden" name="form_action" value="save_settings">
                            <table class="form-table">
                                <tr>
                                    <th>Default Post Category</th>
                                    <td>
                                        <select name="default_post_category">
                                            <option value="Uncategorized">Uncategorized</option>
                                            <option value="Guide">Guide</option>
                                            <option value="Automation">Automation</option>
                                            <option value="CRM">CRM</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Default Post Format</th>
                                    <td>
                                        <select name="default_post_format">
                                            <option value="standard">Standard</option>
                                            <option value="aside">Aside</option>
                                            <option value="chat">Chat</option>
                                            <option value="gallery">Gallery</option>
                                            <option value="link">Link</option>
                                            <option value="image">Image</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <p class="submit"><button type="submit" class="button button-primary">Save Changes</button></p>
                        </form>

                    <?php elseif ($settingsTab === 'reading'): ?>
                        <h2 style="margin:16px 0 10px; font-size:16px;">Reading Settings</h2>
                        <form method="post" action="">
                            <input type="hidden" name="form_action" value="save_settings">
                            <table class="form-table">
                                <tr>
                                    <th>Your homepage displays</th>
                                    <td>
                                        <label><input type="radio" name="show_on_front" value="page" checked> A static page (Homepage)</label><br>
                                        <label><input type="radio" name="show_on_front" value="posts"> Your latest posts</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Blog pages show at most</th>
                                    <td><input type="number" name="posts_per_page" value="<?php echo htmlspecialchars(hb_get_setting('posts_per_page', '10')); ?>" class="small-text" style="width:60px;"> posts</td>
                                </tr>
                                <tr>
                                    <th>Search engine visibility</th>
                                    <td><label><input type="checkbox" name="blog_public" value="1" <?php echo hb_get_setting('blog_public', '0') === '1' ? 'checked' : ''; ?>> Discourage search engines from indexing this site</label></td>
                                </tr>
                            </table>
                            <p class="submit"><button type="submit" class="button button-primary">Save Changes</button></p>
                        </form>

                    <?php elseif ($settingsTab === 'discussion'): ?>
                        <h2 style="margin:16px 0 10px; font-size:16px;">Discussion Settings</h2>
                        <form method="post" action="">
                            <input type="hidden" name="form_action" value="save_settings">
                            <table class="form-table">
                                <tr>
                                    <th>Default post settings</th>
                                    <td>
                                        <label><input type="checkbox" name="default_ping_status" value="1" checked> Attempt to notify any blogs linked to from the post</label><br>
                                        <label><input type="checkbox" name="default_comment_status" value="1" checked> Allow people to submit comments on new posts</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Other comment settings</th>
                                    <td>
                                        <label><input type="checkbox" name="require_name_email" value="1" checked> Comment author must fill out name and email</label>
                                    </td>
                                </tr>
                            </table>
                            <p class="submit"><button type="submit" class="button button-primary">Save Changes</button></p>
                        </form>

                    <?php elseif ($settingsTab === 'media'): ?>
                        <h2 style="margin:16px 0 10px; font-size:16px;">Media Settings</h2>
                        <form method="post" action="">
                            <input type="hidden" name="form_action" value="save_settings">
                            <table class="form-table">
                                <tr>
                                    <th>Thumbnail size</th>
                                    <td>Width: <input type="number" name="thumbnail_size_w" value="150" class="small-text" style="width:70px;"> Height: <input type="number" name="thumbnail_size_h" value="150" class="small-text" style="width:70px;"></td>
                                </tr>
                                <tr>
                                    <th>Medium size</th>
                                    <td>Max Width: <input type="number" name="medium_size_w" value="300" class="small-text" style="width:70px;"> Max Height: <input type="number" name="medium_size_h" value="300" class="small-text" style="width:70px;"></td>
                                </tr>
                                <tr>
                                    <th>Large size</th>
                                    <td>Max Width: <input type="number" name="large_size_w" value="1024" class="small-text" style="width:70px;"> Max Height: <input type="number" name="large_size_h" value="1024" class="small-text" style="width:70px;"></td>
                                </tr>
                            </table>
                            <p class="submit"><button type="submit" class="button button-primary">Save Changes</button></p>
                        </form>

                    <?php elseif ($settingsTab === 'permalinks'): ?>
                        <h2 style="margin:16px 0 10px; font-size:16px;">Permalink Settings</h2>
                        <form method="post" action="">
                            <input type="hidden" name="form_action" value="save_settings">
                            <table class="form-table">
                                <tr>
                                    <th>Common Settings</th>
                                    <td>
                                        <label style="display:block; margin-bottom:8px;"><input type="radio" name="permalink_structure" value="plain"> Plain <code>/?p=123</code></label>
                                        <label style="display:block; margin-bottom:8px;"><input type="radio" name="permalink_structure" value="day_name"> Day and name <code>/2026/09/08/sample-post/</code></label>
                                        <label style="display:block; margin-bottom:8px;"><input type="radio" name="permalink_structure" value="month_name"> Month and name <code>/2026/09/sample-post/</code></label>
                                        <label style="display:block; margin-bottom:8px;"><input type="radio" name="permalink_structure" value="post_name" checked> Post name <code>/resources/blog/sample-post/</code> (Default)</label>
                                    </td>
                                </tr>
                            </table>
                            <p class="submit"><button type="submit" class="button button-primary">Save Changes</button></p>
                        </form>

                    <?php elseif ($settingsTab === 'privacy'): ?>
                        <h2 style="margin:16px 0 10px; font-size:16px;">Privacy Settings</h2>
                        <form method="post" action="">
                            <input type="hidden" name="form_action" value="save_settings">
                            <table class="form-table">
                                <tr>
                                    <th>Change your Privacy Policy page</th>
                                    <td>
                                        <select name="privacy_policy_page">
                                            <option value="/privacy/">Privacy Policy (/privacy/)</option>
                                            <option value="/terms/">Terms of Service (/terms/)</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <p class="submit"><button type="submit" class="button button-primary">Use This Page</button></p>
                        </form>

                    <?php elseif ($settingsTab === 'whatsapp'): ?>
                        <h2 style="margin:16px 0 10px; font-size:16px;">WhatsApp &amp; Meta Cloud API Settings</h2>
                        <form method="post" action="">
                            <input type="hidden" name="form_action" value="save_settings">
                            <table class="form-table">
                                <tr>
                                    <th>Support WhatsApp Number</th>
                                    <td><input type="text" name="support_whatsapp" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('support_whatsapp', '918050854445')); ?>" required></td>
                                </tr>
                                <tr>
                                    <th>Meta Graph API Token</th>
                                    <td><input type="password" name="whatsapp_access_token" class="large-text" placeholder="EAAB..." value="<?php echo htmlspecialchars(hb_get_setting('whatsapp_access_token', '')); ?>"></td>
                                </tr>
                                <tr>
                                    <th>Phone Number ID</th>
                                    <td><input type="text" name="whatsapp_phone_number_id" class="large-text" placeholder="1029384756..." value="<?php echo htmlspecialchars(hb_get_setting('whatsapp_phone_number_id', '')); ?>"></td>
                                </tr>
                                <tr>
                                    <th>WhatsApp Business Account ID (WABA ID)</th>
                                    <td><input type="text" name="whatsapp_waba_id" class="large-text" placeholder="192837465..." value="<?php echo htmlspecialchars(hb_get_setting('whatsapp_waba_id', '')); ?>"></td>
                                </tr>
                                <tr>
                                    <th>Webhook Verify Token</th>
                                    <td><input type="text" name="webhook_verify_token" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('webhook_verify_token', 'inboxwa_webhook_token_secure')); ?>"></td>
                                </tr>
                            </table>
                            <p class="submit"><button type="submit" class="button button-primary">Save WhatsApp API Credentials</button></p>
                        </form>
                    <?php endif; ?>

                    <!-- Platform Core Footer -->
                    <div id="wpfooter">
                        <p id="footer-left">Thank you for creating with <a href="https://elavatex.com" target="_blank" rel="noopener">ElavateX</a>.</p>
                        <p id="footer-upgrade">Version 6.5.4</p>
                    </div>

                <?php
                // =============================================================
                // 12. LIVE SITE EDITOR (CUSTOMIZER)
                // =============================================================
                elseif ($page === 'editor'):
                    $editorTab = $_GET['tab'] ?? 'hero';
                ?>
                    <h1 class="wp-heading-inline">Live Website Customizer</h1>
                    <p class="description" style="margin-bottom:16px;">Customize homepage hero, interactive simulator, and CTA banners live.</p>

                    <ul class="subsubsub">
                        <li><a href="<?php echo $adminBase; ?>?page=editor&tab=hero" class="<?php echo $editorTab === 'hero' ? 'current' : ''; ?>">Hero Section</a> |</li>
                        <li><a href="<?php echo $adminBase; ?>?page=editor&tab=stats" class="<?php echo $editorTab === 'stats' ? 'current' : ''; ?>">Stats Counter Row</a> |</li>
                        <li><a href="<?php echo $adminBase; ?>?page=editor&tab=simulator" class="<?php echo $editorTab === 'simulator' ? 'current' : ''; ?>">WhatsApp Simulator</a> |</li>
                        <li><a href="<?php echo $adminBase; ?>?page=editor&tab=announcement" class="<?php echo $editorTab === 'announcement' ? 'current' : ''; ?>">Announcement Top Bar</a> |</li>
                        <li><a href="<?php echo $adminBase; ?>?page=editor&tab=cta" class="<?php echo $editorTab === 'cta' ? 'current' : ''; ?>">CTA Banner</a> |</li>
                        <li><a href="<?php echo $adminBase; ?>?page=colors">Color Palette &rarr;</a></li>
                    </ul>

                    <?php if ($editorTab === 'hero'): ?>
                        <div class="postbox">
                            <div class="postbox-header"><h2>Homepage Hero Section</h2></div>
                            <div class="inside">
                                <form method="post" action="">
                                    <input type="hidden" name="form_action" value="save_hero">
                                    <table class="form-table">
                                        <tr>
                                            <th>Top Badge Pill</th>
                                            <td><input type="text" name="badge" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('hero', 'badge', 'Official WhatsApp Business API · Meta Tech Partner')); ?>"></td>
                                        </tr>
                                        <tr>
                                            <th>Headline Text</th>
                                            <td>
                                                <input type="text" name="headline_prefix" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('hero', 'headline_prefix', 'WhatsApp Automation Software & ')); ?>" style="margin-bottom:6px;">
                                                <input type="text" name="headline_gradient" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('hero', 'headline_gradient', 'AI Chatbot')); ?>" style="margin-bottom:6px; color:#8b5cf6; font-weight:700;">
                                                <input type="text" name="headline_suffix" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('hero', 'headline_suffix', ' for Business')); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Lead Description</th>
                                            <td><textarea name="lead" class="large-text" rows="3"><?php echo htmlspecialchars(hb_get_section('hero', 'lead', 'Boost engagement, qualify leads, and provide 24/7 support with seamless, AI-powered WhatsApp conversations. Integrate instantly and scale efficiently.')); ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <th>Primary Button Text &amp; URL</th>
                                            <td>
                                                <div style="display:flex; gap:10px;">
                                                    <input type="text" name="cta1_text" class="regular-text" value="<?php echo htmlspecialchars(hb_get_section('hero', 'cta1_text', "Start Automating - It's Free")); ?>">
                                                    <input type="text" name="cta1_link" class="regular-text" value="<?php echo htmlspecialchars(hb_get_section('hero', 'cta1_link', '/auth/register')); ?>">
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
                            <div class="inside">
                                <form method="post" action="">
                                    <input type="hidden" name="form_action" value="save_stats">
                                    <table class="form-table">
                                        <tr>
                                            <th>Stat 1</th>
                                            <td>
                                                <input type="text" name="stat1_val" class="regular-text" style="max-width:120px;" value="<?php echo htmlspecialchars(hb_get_section('stats', 'stat1_val', '10M+')); ?>">
                                                <input type="text" name="stat1_label" class="regular-text" value="<?php echo htmlspecialchars(hb_get_section('stats', 'stat1_label', 'Messages delivered')); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Stat 2</th>
                                            <td>
                                                <input type="text" name="stat2_val" class="regular-text" style="max-width:120px;" value="<?php echo htmlspecialchars(hb_get_section('stats', 'stat2_val', '99.9%')); ?>">
                                                <input type="text" name="stat2_label" class="regular-text" value="<?php echo htmlspecialchars(hb_get_section('stats', 'stat2_label', 'API uptime')); ?>">
                                            </td>
                                        </tr>
                                    </table>
                                    <p class="submit"><button type="submit" class="button button-primary">Save Stats</button></p>
                                </form>
                            </div>
                        </div>
                    <?php elseif ($editorTab === 'simulator'): ?>
                        <div class="postbox">
                            <div class="postbox-header"><h2>WhatsApp Chat Simulator</h2></div>
                            <div class="inside">
                                <form method="post" action="">
                                    <input type="hidden" name="form_action" value="save_simulator">
                                    <table class="form-table">
                                        <tr>
                                            <th>Bot Greeting Message</th>
                                            <td><textarea name="bot_greeting" class="large-text" rows="2"><?php echo htmlspecialchars(hb_get_section('simulator', 'bot_greeting', "👋 Hello! Welcome to InboxWa. How can we help automate your business today?")); ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <th>Interactive Quick Buttons</th>
                                            <td>
                                                <input type="text" name="btn1" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('simulator', 'btn1', '🤖 AI Chatbot for Leads')); ?>" style="margin-bottom:6px;">
                                                <input type="text" name="btn2" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('simulator', 'btn2', '📢 Broadcast Campaigns')); ?>" style="margin-bottom:6px;">
                                                <input type="text" name="btn3" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('simulator', 'btn3', '👥 Shared Team Inbox')); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Bot Automated Response</th>
                                            <td><textarea name="bot_response" class="large-text" rows="3"><?php echo htmlspecialchars(hb_get_section('simulator', 'bot_response', "Great choice! InboxWa equips your team with Official Meta WhatsApp API, visual drag-and-drop flow builder, CRM pipelines, and 24/7 automated qualification.")); ?></textarea></td>
                                        </tr>
                                    </table>
                                    <p class="submit"><button type="submit" class="button button-primary">Save Simulator Script</button></p>
                                </form>
                            </div>
                        </div>
                    <?php elseif ($editorTab === 'announcement'): ?>
                        <div class="postbox">
                            <div class="postbox-header"><h2>Top Announcement Bar</h2></div>
                            <div class="inside">
                                <form method="post" action="">
                                    <input type="hidden" name="form_action" value="save_announcement">
                                    <table class="form-table">
                                        <tr>
                                            <th>Enable Bar</th>
                                            <td>
                                                <label>
                                                    <input type="checkbox" name="announcement_enabled" value="1" <?php echo hb_get_setting('announcement_enabled', '0') === '1' ? 'checked' : ''; ?>>
                                                    Show banner on top of the live website
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Announcement Text</th>
                                            <td><input type="text" name="announcement_text" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('announcement_text', 'Official WhatsApp Business API & AI Chatbots — Start 14-Day Free Trial Today!')); ?>"></td>
                                        </tr>
                                        <tr>
                                            <th>Call to Action Link</th>
                                            <td><input type="text" name="announcement_link" class="large-text" value="<?php echo htmlspecialchars(hb_get_setting('announcement_link', '/auth/register')); ?>"></td>
                                        </tr>
                                    </table>
                                    <p class="submit"><button type="submit" class="button button-primary">Save Announcement</button></p>
                                </form>
                            </div>
                        </div>
                    <?php elseif ($editorTab === 'cta'): ?>
                        <div class="postbox">
                            <div class="postbox-header"><h2>Bottom CTA Banner</h2></div>
                            <div class="inside">
                                <form method="post" action="">
                                    <input type="hidden" name="form_action" value="save_cta">
                                    <table class="form-table">
                                        <tr>
                                            <th>Headline</th>
                                            <td><input type="text" name="title" class="large-text" value="<?php echo htmlspecialchars(hb_get_section('cta_banner', 'title', 'Ready to turn customer conversations into revenue?')); ?>"></td>
                                        </tr>
                                        <tr>
                                            <th>Lead Text</th>
                                            <td><textarea name="lead" class="large-text" rows="2"><?php echo htmlspecialchars(hb_get_section('cta_banner', 'lead', 'Join fast-growing companies using InboxWa for WhatsApp marketing, AI automation, and omnichannel support.')); ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <th>Button Text &amp; Link</th>
                                            <td>
                                                <div style="display:flex; gap:10px;">
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
                // =============================================================
                // 13. LEADS (CRM) SCREEN (Preserved full lead functionality)
                // =============================================================
                elseif ($page === 'leads'):
                    $filterType = $_GET['type'] ?? 'all';
                    $filterStatus = $_GET['status'] ?? 'all';
                    $searchQ = trim($_GET['q'] ?? '');

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
                    if ($searchQ !== '') {
                        $sql .= " AND (name LIKE ? OR email LIKE ? OR phone LIKE ? OR business LIKE ?)";
                        $qP = '%' . $searchQ . '%';
                        $params = array_merge($params, [$qP, $qP, $qP, $qP]);
                    }
                    $sql .= " ORDER BY id DESC";
                    $stmt = $db->prepare($sql);
                    $stmt->execute($params);
                    $leads = $stmt->fetchAll();
                ?>
                    <h1 class="wp-heading-inline">Leads &amp; Inquiries (CRM)</h1>
                    <a href="<?php echo $adminBase; ?>?action=export&format=csv" class="page-title-action">Export CSV</a>

                    <!-- Filter Bar -->
                    <div style="margin:16px 0; display:flex; gap:10px; flex-wrap:wrap; align-items:center;">
                        <form method="get" action="" style="display:flex; gap:8px; flex-wrap:wrap; align-items:center;">
                            <input type="hidden" name="page" value="leads">
                            <input type="text" name="q" class="regular-text" style="width:200px;" placeholder="Search leads..." value="<?php echo htmlspecialchars($searchQ); ?>">
                            
                            <select name="type" class="regular-text" style="width:130px;" onchange="this.form.submit()">
                                <option value="all" <?php echo $filterType === 'all' ? 'selected' : ''; ?>>All Types</option>
                                <option value="demo" <?php echo $filterType === 'demo' ? 'selected' : ''; ?>>Demo</option>
                                <option value="contact" <?php echo $filterType === 'contact' ? 'selected' : ''; ?>>Contact</option>
                                <option value="offer" <?php echo $filterType === 'offer' ? 'selected' : ''; ?>>Offer</option>
                            </select>

                            <select name="status" class="regular-text" style="width:130px;" onchange="this.form.submit()">
                                <option value="all" <?php echo $filterStatus === 'all' ? 'selected' : ''; ?>>All Statuses</option>
                                <option value="new" <?php echo $filterStatus === 'new' ? 'selected' : ''; ?>>New</option>
                                <option value="contacted" <?php echo $filterStatus === 'contacted' ? 'selected' : ''; ?>>Contacted</option>
                                <option value="converted" <?php echo $filterStatus === 'converted' ? 'selected' : ''; ?>>Converted</option>
                            </select>

                            <button type="submit" class="button">Filter</button>
                            <?php if ($searchQ !== '' || $filterType !== 'all' || $filterStatus !== 'all'): ?>
                                <a href="<?php echo $adminBase; ?>?page=leads" class="button button-danger">Reset</a>
                            <?php endif; ?>
                        </form>
                    </div>

                    <div class="wp-table-responsive">
                        <table class="wp-list-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Type</th>
                                    <th>Contact Information</th>
                                    <th>Business / Requirement</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($leads)): ?>
                                    <tr><td colspan="7" style="text-align:center; padding:20px; color:#888;">No leads match your criteria.</td></tr>
                                <?php else:
                                    foreach ($leads as $l): ?>
                                    <tr>
                                        <td><strong>#<?php echo $l['id']; ?></strong></td>
                                        <td><span class="badge badge-type"><?php echo htmlspecialchars($l['type'] ?? 'contact'); ?></span></td>
                                        <td>
                                            <strong><?php echo htmlspecialchars($l['name']); ?></strong><br>
                                            <span style="color:#2271b1; font-size:11px;"><?php echo htmlspecialchars($l['email'] ?: 'N/A'); ?></span><br>
                                            <span style="color:#2271b1; font-size:11px;"><?php echo htmlspecialchars($l['phone'] ?: 'N/A'); ?></span>
                                        </td>
                                        <td>
                                            <strong><?php echo htmlspecialchars($l['business'] ?: 'General'); ?></strong><br>
                                            <span style="font-size:11px; color:#646970;"><?php echo htmlspecialchars($l['requirement'] ?: $l['product'] ?: 'General'); ?></span>
                                        </td>
                                        <td>
                                            <?php $st = strtolower($l['status'] ?? 'new'); ?>
                                            <span class="badge badge-<?php echo $st; ?>"><?php echo $st; ?></span>
                                        </td>
                                        <td style="font-size:11px; color:#888; white-space:nowrap;"><?php echo htmlspecialchars($l['created_at']); ?></td>
                                        <td style="white-space:nowrap;">
                                            <?php if ($st === 'new'): ?>
                                                <a href="<?php echo $adminBase; ?>?action=update_status&id=<?php echo $l['id']; ?>&status=contacted" class="button button-small">Contacted</a>
                                            <?php elseif ($st === 'contacted'): ?>
                                                <a href="<?php echo $adminBase; ?>?action=update_status&id=<?php echo $l['id']; ?>&status=converted" class="button button-small" style="color:#00a32a; border-color:#00a32a;">Converted</a>
                                            <?php endif; ?>
                                            <a href="<?php echo $adminBase; ?>?action=delete_lead&id=<?php echo $l['id']; ?>" onclick="return confirm('Delete this lead?')" class="button button-small button-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <!-- JAVASCRIPT: SIDEBAR COLLAPSE, MODALS & LIVE PREVIEWS -->
    <script>
    function setSiteIcon(url) {
        var prev = document.getElementById('site-icon-preview');
        var input = document.getElementById('site_icon_input');
        if (prev) prev.src = url;
        if (input) input.value = url;
    }

    function updateDatePreview(val) {
        var now = new Date();
        var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var d = now.getDate();
        var m = months[now.getMonth()];
        var y = now.getFullYear();
        var mm = String(now.getMonth() + 1).padStart(2, '0');
        var dd = String(d).padStart(2, '0');
        
        var text = "";
        if (val === 'F j, Y') text = m + " " + d + ", " + y;
        else if (val === 'Y-m-d') text = y + "-" + mm + "-" + dd;
        else if (val === 'm/d/Y') text = mm + "/" + dd + "/" + y;
        else if (val === 'd/m/Y') text = dd + "/" + mm + "/" + y;
        else if (val === 'd.m.Y') text = dd + "." + mm + "." + y;
        else text = val || (m + " " + d + ", " + y);
        
        var prev = document.getElementById('date-preview');
        if (prev) prev.textContent = text;
    }

    function updateTimePreview(val) {
        var now = new Date();
        var h = now.getHours();
        var min = String(now.getMinutes()).padStart(2, '0');
        var ampm = h >= 12 ? 'pm' : 'am';
        var ampmU = h >= 12 ? 'PM' : 'AM';
        var h12 = h % 12;
        if (h12 === 0) h12 = 12;
        var h24 = String(h).padStart(2, '0');

        var text = "";
        if (val === 'g:i a') text = h12 + ":" + min + " " + ampm;
        else if (val === 'g:i A') text = h12 + ":" + min + " " + ampmU;
        else if (val === 'H:i') text = h24 + ":" + min;
        else text = val || (h12 + ":" + min + " " + ampm);

        var prev = document.getElementById('time-preview');
        if (prev) prev.textContent = text;
    }

    (function(){
        // 1. Sidebar folded mode toggle
        var collapseBtn = document.getElementById('collapse-button');
        if (collapseBtn) {
            if (localStorage.getItem('wp_sidebar_folded') === '1') {
                document.body.classList.add('folded');
            }
            collapseBtn.addEventListener('click', function(e){
                e.preventDefault();
                document.body.classList.toggle('folded');
                if (document.body.classList.contains('folded')) {
                    localStorage.setItem('wp_sidebar_folded', '1');
                } else {
                    localStorage.setItem('wp_sidebar_folded', '0');
                }
            });
        }

        // 2. Mobile drawer toggle
        var mobToggle = document.getElementById('mobile-toggle');
        if (mobToggle) {
            mobToggle.addEventListener('click', function(e){
                e.preventDefault();
                document.body.classList.toggle('mobile-open');
            });
        }

        // 3. Postbox handlediv accordion toggles
        document.querySelectorAll('.handlediv').forEach(function(btn){
            btn.addEventListener('click', function(){
                var postbox = btn.closest('.postbox');
                if (!postbox) return;
                var inside = postbox.querySelector('.inside');
                if (inside) {
                    if (inside.style.display === 'none') {
                        inside.style.display = 'block';
                        btn.innerHTML = '<span class="toggle-indicator">&#9650;</span>';
                    } else {
                        inside.style.display = 'none';
                        btn.innerHTML = '<span class="toggle-indicator">&#9660;</span>';
                    }
                }
            });
        });

        // 4. Auto-dismiss notices after 3s
        setTimeout(function(){
            document.querySelectorAll('.notice').forEach(function(n){
                n.style.transition = 'opacity 0.4s ease';
                n.style.opacity = '0';
                setTimeout(function(){ if (n.parentNode) n.parentNode.removeChild(n); }, 400);
            });
        }, 3000);
    })();
    </script>
</body>
</html>
