<?php
/**
 * InboxWa Universal CMS API & Global Bridge
 * Connects live website pages to SQLite CMS settings, sections, and posts
 */
declare(strict_types=1);

require_once dirname(__DIR__) . "/secure-console-x7/config.php";

/**
 * Get site-wide setting (site title, WhatsApp number, email, scripts, etc.)
 */
function cms_setting(string $key, string $default = ""): string {
    return hb_get_setting($key, $default);
}

/**
 * Get section content for live site editor (Hero, Stats, Simulator, CTA banner)
 */
function cms_section(string $section, string $field, string $default = ""): string {
    return hb_get_section($section, $field, $default);
}

/**
 * Get published blog posts
 */
function cms_posts(int $limit = 0, string $category = ""): array {
    return hb_get_posts($limit, $category, "published");
}

/**
 * Get single blog post by slug or ID
 */
function cms_post(int|string $idOrSlug): ?array {
    return hb_get_post($idOrSlug);
}

/**
 * Get live pricing plans
 */
function cms_pricing_plans(): array {
    $plans = hb_get_pricing_plans();
    if (empty($plans)) {
        $defaultConfig = is_file(__DIR__ . "/pricing.php") ? require __DIR__ . "/pricing.php" : [];
        return $defaultConfig["plans"] ?? [];
    }
    
    $formatted = [];
    foreach ($plans as $p) {
        $pid = $p["plan_id"];
        $formatted[$pid] = [
            "id" => $pid,
            "name" => $p["name"],
            "badge" => $p["badge"] ?: null,
            "tagline" => $p["tagline"] ?? "",
            "channels" => json_decode($p["channels_json"] ?: "[]", true) ?: ["WhatsApp"],
            "monthly" => (int)$p["monthly"],
            "yearly" => (int)$p["yearly"],
            "setup_fee_monthly" => (int)($p["setup_fee_monthly"] ?? 0),
            "setup_fee_yearly" => (int)($p["setup_fee_yearly"] ?? 0),
            "cta" => $p["cta_text"] ?: "Start Free",
            "cta_link" => $p["cta_link"] ?: "/auth/register",
            "is_popular" => (bool)($p["is_popular"] ?? false),
            "features" => json_decode($p["features_json"] ?: "[]", true) ?: []
        ];
    }
    return $formatted;
}

/**
 * Get customer testimonials
 */
function cms_testimonials(): array {
    return hb_get_testimonials();
}

/**
 * Get FAQs
 */
function cms_faqs(string $category = ""): array {
    if (function_exists("hb_get_faqs")) {
        return hb_get_faqs($category);
    }
    try {
        $db = hb_pdo();
        if ($category !== "" && $category !== "all") {
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

/**
 * Get SEO locations merged with custom admin locations
 */
function cms_locations(): array {
    $staticFile = dirname(__DIR__) . "/includes/locations-data.php";
    $list = is_file($staticFile) ? require $staticFile : [];
    
    try {
        $db = hb_pdo();
        $stmt = $db->query("SELECT * FROM custom_locations ORDER BY id DESC");
        $custom = $stmt->fetchAll();
        foreach ($custom as $c) {
            $slug = $c["slug"];
            $list[$slug] = [
                "type" => $c["type"] ?: "city",
                "slug" => $slug,
                "city" => $c["city"],
                "country" => $c["country"],
                "primary_keyword" => $c["primary_keyword"] ?: ($c["city"] . " WhatsApp API"),
                "meta_title" => $c["meta_title"] ?: ($c["city"] . " WhatsApp Business API | InboxWa"),
                "meta_description" => $c["meta_description"] ?: ("WhatsApp Business API provider in " . $c["city"]),
                "hero_title" => $c["hero_title"] ?: ("WhatsApp API in " . $c["city"]),
                "hero_description" => $c["hero_description"] ?: ("Empower your " . $c["city"] . " business with Official WhatsApp Business API."),
                "areas" => json_decode($c["areas_json"] ?: "[]", true) ?: [$c["city"] . " Downtown"],
                "industries" => [],
                "use_cases" => [],
                "faq" => []
            ];
        }
    } catch (Throwable $e) {
    }
    return $list;
}

/**
 * Get all categories
 */
function cms_categories(): array {
    return hb_get_categories();
}

/**
 * Get all tags
 */
function cms_tags(): array {
    return hb_get_tags();
}

/**
 * Get all pages
 */
function cms_pages(): array {
    return hb_get_pages();
}

/**
 * Get single page
 */
function cms_page(int|string $idOrSlug): ?array {
    return hb_get_page($idOrSlug);
}
