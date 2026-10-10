<?php
/**
 * HelloBotz Full Website Pages Scanner, Visual Content Editor & Menus Manager
 * 
 * Indexes all 260+ website routes, allows editing text, headings, paragraphs,
 * images, SEO meta tags, and header dropdown menus.
 */
declare(strict_types=1);

class HbPagesManager {
    private static string $cacheFile = __DIR__ . '/data/pages_inventory.json';

    /**
     * Scan public/ directory and return all real website pages.
     */
    public static function getAllPages(bool $forceRefresh = false): array {
        if (!$forceRefresh && file_exists(self::$cacheFile)) {
            $raw = @file_get_contents(self::$cacheFile);
            if ($raw) {
                $data = json_decode($raw, true);
                if (is_array($data) && !empty($data['pages'])) {
                    return $data['pages'];
                }
            }
        }

        $baseDir = dirname(__DIR__) . '/public';
        $pages = [];

        if (is_dir($baseDir)) {
            $iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($baseDir, RecursiveDirectoryIterator::SKIP_DOTS)
            );

            foreach ($iterator as $file) {
                if ($file->isFile() && $file->getFilename() === 'index.html') {
                    $absPath = $file->getPathname();
                    $relDir = str_replace([$baseDir, '/index.html'], '', $absPath);
                    $slug = empty($relDir) ? '/' : '/' . trim($relDir, '/') . '/';

                    // Skip internal admin console in public if any
                    if (str_starts_with($slug, '/secure-console-x7') || str_starts_with($slug, '/admin')) {
                        continue;
                    }

                    $content = @file_get_contents($absPath);
                    if ($content === false) continue;

                    // Extract title
                    $title = 'Untitled Page';
                    if (preg_match('/<title\b[^>]*>(.*?)<\/title>/is', $content, $m)) {
                        $rawTitle = html_entity_decode(trim($m[1]), ENT_QUOTES | ENT_HTML5, 'UTF-8');
                        $title = preg_replace('/\s*[\|\-\&ndash\;\&mdash\;]\s*HelloBotz.*$/i', '', $rawTitle);
                        $title = trim($title) ?: $rawTitle;
                    }

                    // Extract meta description
                    $metaDesc = '';
                    if (preg_match('/<meta\s+name=["\']description["\']\s+content=["\'](.*?)["\']/is', $content, $m)) {
                        $metaDesc = html_entity_decode(trim($m[1]), ENT_QUOTES | ENT_HTML5, 'UTF-8');
                    }

                    // Extract H1 headline
                    $h1 = '';
                    if (preg_match('/<h1\b[^>]*>(.*?)<\/h1>/is', $content, $m)) {
                        $h1 = trim(strip_tags($m[1]));
                    }

                    // Extract lead paragraph
                    $lead = '';
                    if (preg_match('/<p\b[^>]*class=["\'][^"\']*lead[^"\']*["\'][^>]*>(.*?)<\/p>/is', $content, $m)) {
                        $lead = trim(strip_tags($m[1]));
                    } elseif (preg_match('/<p\b[^>]*>(.*?)<\/p>/is', $content, $m)) {
                        $lead = trim(strip_tags($m[1]));
                    }

                    // Extract hero image
                    $heroImage = '';
                    if (preg_match('/<img\b[^>]+src=["\']([^"\']+\.(?:png|jpg|jpeg|webp|svg))["\']/is', $content, $m)) {
                        $heroImage = $m[1];
                    }

                    // Categorize based on slug
                    $category = self::detectCategory($slug);

                    $pages[] = [
                        'slug' => $slug,
                        'title' => $title,
                        'h1' => $h1,
                        'lead' => mb_substr($lead, 0, 160) . (mb_strlen($lead) > 160 ? '...' : ''),
                        'meta_description' => $metaDesc,
                        'hero_image' => $heroImage,
                        'category' => $category['name'],
                        'category_badge' => $category['badge'],
                        'file_path' => $absPath,
                        'modified' => filemtime($absPath),
                        'size' => filesize($absPath)
                    ];
                }
            }
        }

        // Sort: Home first, then alphabetical by category and title
        usort($pages, function($a, $b) {
            if ($a['slug'] === '/') return -1;
            if ($b['slug'] === '/') return 1;
            if ($a['category'] === $b['category']) {
                return strcmp($a['title'], $b['title']);
            }
            return strcmp($a['category'], $b['category']);
        });

        // Save cache
        $dataDir = dirname(self::$cacheFile);
        if (!is_dir($dataDir)) @mkdir($dataDir, 0755, true);
        @file_put_contents(self::$cacheFile, json_encode([
            'updated_at' => time(),
            'count' => count($pages),
            'pages' => $pages
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

        return $pages;
    }

    /**
     * Get detailed editable content of a single page by slug.
     */
    public static function getPageDetails(string $slug): ?array {
        $cleanSlug = trim($slug, '/');
        $baseDir = dirname(__DIR__) . '/public';
        $filePath = empty($cleanSlug) ? ($baseDir . '/index.html') : ($baseDir . '/' . $cleanSlug . '/index.html');

        if (!file_exists($filePath)) {
            if (str_starts_with($cleanSlug, 'blogs/')) {
                $alt = $baseDir . '/resources/blog/' . substr($cleanSlug, 6) . '/index.html';
                if (file_exists($alt)) $filePath = $alt;
            } elseif (str_starts_with($cleanSlug, 'resources/blog/')) {
                $alt = $baseDir . '/blogs/' . substr($cleanSlug, 15) . '/index.html';
                if (file_exists($alt)) $filePath = $alt;
            }
            if (!file_exists($filePath)) {
                return null;
            }
        }

        $content = @file_get_contents($filePath);
        if ($content === false) return null;

        // 1. Meta Title
        $metaTitle = '';
        if (preg_match('/<title\b[^>]*>(.*?)<\/title>/is', $content, $m)) {
            $metaTitle = html_entity_decode(trim($m[1]), ENT_QUOTES | ENT_HTML5, 'UTF-8');
        }

        // 2. Meta Description
        $metaDesc = '';
        if (preg_match('/<meta\s+name=["\']description["\']\s+content=["\'](.*?)["\']/is', $content, $m)) {
            $metaDesc = html_entity_decode(trim($m[1]), ENT_QUOTES | ENT_HTML5, 'UTF-8');
        }

        // 3. Page Title (clean)
        $title = preg_replace('/\s*[\|\-\&ndash\;\&mdash\;]\s*HelloBotz.*$/i', '', $metaTitle);
        $title = trim($title) ?: $metaTitle;

        // 4. H1 Heading (raw & clean)
        $h1Raw = '';
        $h1Text = '';
        if (preg_match('/<h1\b[^>]*>(.*?)<\/h1>/is', $content, $m)) {
            $h1Raw = trim($m[1]);
            $h1Text = trim(strip_tags($m[1]));
        }

        // 5. Lead Paragraph
        $leadRaw = '';
        $leadText = '';
        if (preg_match('/<p\b[^>]*class=["\'][^"\']*lead[^"\']*["\'][^>]*>(.*?)<\/p>/is', $content, $m)) {
            $leadRaw = trim($m[1]);
            $leadText = trim(strip_tags($m[1]));
        }

        // 6. Secondary H2 Headings
        $h2List = [];
        if (preg_match_all('/<h2\b[^>]*>(.*?)<\/h2>/is', $content, $matches)) {
            foreach ($matches[1] as $idx => $rawH2) {
                $cleanH2 = trim(strip_tags($rawH2));
                if (!empty($cleanH2)) {
                    $h2List[] = ['raw' => trim($rawH2), 'text' => $cleanH2, 'index' => $idx];
                }
            }
        }

        // 7. Extract All Images with src, alt, class
        $imagesList = [];
        if (preg_match_all('/<img\b([^>]+)>/is', $content, $matches)) {
            foreach ($matches[1] as $idx => $tagAttrs) {
                $src = '';
                $alt = '';
                $class = '';
                if (preg_match('/src=["\']([^"\']+)["\']/i', $tagAttrs, $sm)) $src = $sm[1];
                if (preg_match('/alt=["\']([^"\']*)["\']/i', $tagAttrs, $am)) $alt = $am[1];
                if (preg_match('/class=["\']([^"\']*)["\']/i', $tagAttrs, $cm)) $class = $cm[1];

                // Skip small tracking pixels or SVGs inside icons if not meaningful
                if (!empty($src) && !str_starts_with($src, 'data:image/svg+xml')) {
                    $imagesList[] = [
                        'src' => $src,
                        'alt' => $alt,
                        'class' => $class,
                        'index' => $idx
                    ];
                }
            }
        }

        // 8. Buttons / CTAs
        $buttonsList = [];
        if (preg_match_all('/<a\b[^>]*class=["\'][^"\']*btn[^"\']*["\'][^>]*href=["\']([^"\']+)["\'][^>]*>(.*?)<\/a>/is', $content, $matches)) {
            foreach ($matches[0] as $idx => $fullTag) {
                $href = $matches[1][$idx];
                $btnText = trim(strip_tags($matches[2][$idx]));
                if (!empty($btnText) && !empty($href)) {
                    $buttonsList[] = ['text' => $btnText, 'href' => $href];
                }
            }
        }

        $category = self::detectCategory($slug);

        return [
            'slug' => $slug,
            'title' => $title,
            'meta_title' => $metaTitle,
            'meta_description' => $metaDesc,
            'h1_raw' => $h1Raw,
            'h1_text' => $h1Text,
            'lead_raw' => $leadRaw,
            'lead_text' => $leadText,
            'h2_list' => array_slice($h2List, 0, 10),
            'images' => array_slice($imagesList, 0, 15),
            'buttons' => array_slice($buttonsList, 0, 8),
            'raw_html' => $content,
            'category' => $category['name'],
            'category_badge' => $category['badge'],
            'file_path' => $filePath,
            'modified' => filemtime($filePath)
        ];
    }

    /**
     * Save updated page content, metadata, texts and images.
     */
    public static function savePageDetails(string $slug, array $data): bool {
        $cleanSlug = trim($slug, '/');
        $baseDir = dirname(__DIR__) . '/public';
        $filePath = empty($cleanSlug) ? ($baseDir . '/index.html') : ($baseDir . '/' . $cleanSlug . '/index.html');

        if (!file_exists($filePath)) {
            // Create target folder and file if brand new page
            $targetDir = dirname($filePath);
            if (!is_dir($targetDir)) @mkdir($targetDir, 0755, true);
        }

        $currentHtml = file_exists($filePath) ? (string)@file_get_contents($filePath) : '';

        // If user submitted complete raw HTML from Visual Code Editor mode
        if (!empty($data['use_raw_html']) && !empty($data['raw_html'])) {
            $newHtml = $data['raw_html'];
        } else {
            $newHtml = $currentHtml;

            // 1. Update Title & Meta Title
            $newMetaTitle = trim($data['meta_title'] ?? '');
            if (empty($newMetaTitle) && !empty($data['title'])) {
                $newMetaTitle = trim($data['title']) . ' | HelloBotz';
            }
            if (!empty($newMetaTitle)) {
                if (preg_match('/<title\b[^>]*>.*?<\/title>/is', $newHtml)) {
                    $newHtml = preg_replace('/<title\b[^>]*>.*?<\/title>/is', '<title>' . htmlspecialchars($newMetaTitle) . '</title>', $newHtml, 1);
                }
                // Also update OpenGraph title and Twitter title
                $newHtml = preg_replace('/<meta\s+property=["\']og:title["\']\s+content=["\'][^"\']*["\']/is', '<meta property="og:title" content="' . htmlspecialchars($newMetaTitle) . '"', $newHtml, 1);
                $newHtml = preg_replace('/<meta\s+name=["\']twitter:title["\']\s+content=["\'][^"\']*["\']/is', '<meta name="twitter:title" content="' . htmlspecialchars($newMetaTitle) . '"', $newHtml, 1);
            }

            // 2. Update Meta Description
            if (isset($data['meta_description'])) {
                $newMetaDesc = trim($data['meta_description']);
                if (preg_match('/<meta\s+name=["\']description["\']\s+content=["\'][^"\']*["\']/is', $newHtml)) {
                    $newHtml = preg_replace('/<meta\s+name=["\']description["\']\s+content=["\'][^"\']*["\']/is', '<meta name="description" content="' . htmlspecialchars($newMetaDesc) . '"', $newHtml, 1);
                }
                // Also update OpenGraph description and Twitter description
                $newHtml = preg_replace('/<meta\s+property=["\']og:description["\']\s+content=["\'][^"\']*["\']/is', '<meta property="og:description" content="' . htmlspecialchars($newMetaDesc) . '"', $newHtml, 1);
                $newHtml = preg_replace('/<meta\s+name=["\']twitter:description["\']\s+content=["\'][^"\']*["\']/is', '<meta name="twitter:description" content="' . htmlspecialchars($newMetaDesc) . '"', $newHtml, 1);
            }

            // 3. Update H1 Heading
            if (!empty($data['h1'])) {
                $newH1 = trim($data['h1']);
                if (preg_match('/<h1\b([^>]*)>(.*?)<\/h1>/is', $newHtml, $m)) {
                    $attrs = $m[1];
                    // Keep original span styling if present, or replace full innerHTML
                    $newHtml = preg_replace('/<h1\b[^>]*>.*?<\/h1>/is', '<h1' . $attrs . '>' . $newH1 . '</h1>', $newHtml, 1);
                }
            }

            // 4. Update Lead Paragraph
            if (!empty($data['lead'])) {
                $newLead = trim($data['lead']);
                if (preg_match('/<p\b([^>]*class=["\'][^"\']*lead[^"\']*["\'][^>]*)>(.*?)<\/p>/is', $newHtml, $m)) {
                    $attrs = $m[1];
                    $newHtml = preg_replace('/<p\b[^>]*class=["\'][^"\']*lead[^"\']*["\'][^>]*>.*?<\/p>/is', '<p' . $attrs . '>' . $newLead . '</p>', $newHtml, 1);
                }
            }

            // 5. Replace Selected Images
            if (!empty($data['replace_images']) && is_array($data['replace_images'])) {
                foreach ($data['replace_images'] as $oldSrc => $newSrc) {
                    $oldSrc = trim((string)$oldSrc);
                    $newSrc = trim((string)$newSrc);
                    if (!empty($oldSrc) && !empty($newSrc) && $oldSrc !== $newSrc) {
                        $newHtml = str_replace('src="' . $oldSrc . '"', 'src="' . $newSrc . '"', $newHtml);
                        $newHtml = str_replace("src='" . $oldSrc . "'", "src='" . $newSrc . "'", $newHtml);
                    }
                }
            }

            // 6. Replace Primary Button CTA
            if (!empty($data['cta_text']) && !empty($data['cta_link'])) {
                $ctaText = trim($data['cta_text']);
                $ctaLink = trim($data['cta_link']);
                // Update first primary action button
                $newHtml = preg_replace('/(<a\b[^>]*class=["\'][^"\']*btn-primary[^"\']*["\'][^>]*href=["\'])[^"\']*(["\'][^>]*>).*?(<\/a>)/is', '${1}' . htmlspecialchars($ctaLink) . '${2}' . htmlspecialchars($ctaText) . '${3}', $newHtml, 1);
            }
        }

        // Backup previous version safely
        $backupDir = dirname(__DIR__) . '/secure-console-x7/data/page_backups';
        if (!is_dir($backupDir)) @mkdir($backupDir, 0755, true);
        $backupFile = $backupDir . '/' . preg_replace('/[^a-zA-Z0-9_-]/', '_', trim($slug, '/')) . '_' . time() . '.html';
        if ($currentHtml) @file_put_contents($backupFile, $currentHtml);

        // Write updated HTML to public
        $res = @file_put_contents($filePath, $newHtml);

        // Keep blog aliases synchronized between blogs/ and resources/blog/
        if (str_starts_with($cleanSlug, 'blogs/')) {
            $altFile = $baseDir . '/resources/blog/' . substr($cleanSlug, 6) . '/index.html';
            if (is_dir(dirname($altFile))) {
                @file_put_contents($altFile, $newHtml);
            }
        } elseif (str_starts_with($cleanSlug, 'resources/blog/')) {
            $altFile = $baseDir . '/blogs/' . substr($cleanSlug, 15) . '/index.html';
            if (is_dir(dirname($altFile))) {
                @file_put_contents($altFile, $newHtml);
            }
        }

        // Record published slug in settings so runtime serves the live visual version
        if (function_exists('hb_set_setting')) {
            if (empty($cleanSlug)) {
                hb_set_setting('canva_homepage_published', '1');
            }
            $existing = [];
            if (function_exists('hb_get_setting')) {
                $raw = hb_get_setting('canva_published_slugs', '[]');
                $existing = json_decode($raw, true) ?: [];
            }
            if (!in_array($cleanSlug, $existing, true)) {
                $existing[] = $cleanSlug;
            }
            if (str_starts_with($cleanSlug, 'blogs/')) {
                $altSlug = 'resources/blog/' . substr($cleanSlug, 6);
                if (!in_array($altSlug, $existing, true)) $existing[] = $altSlug;
            } elseif (str_starts_with($cleanSlug, 'resources/blog/')) {
                $altSlug = 'blogs/' . substr($cleanSlug, 15);
                if (!in_array($altSlug, $existing, true)) $existing[] = $altSlug;
            }
            hb_set_setting('canva_published_slugs', json_encode(array_values($existing)));
        }

        // Invalidate cache
        if (file_exists(self::$cacheFile)) {
            @unlink(self::$cacheFile);
        }

        return (bool)$res;
    }

    /**
     * Category detection helper.
     */
    private static function detectCategory(string $slug): array {
        if ($slug === '/' || $slug === '/index.html') {
            return ['name' => 'Core & Home', 'badge' => 'badge-core'];
        }
        if (str_starts_with($slug, '/products') || str_starts_with($slug, '/product')) {
            return ['name' => 'Products', 'badge' => 'badge-products'];
        }
        if (str_starts_with($slug, '/solutions')) {
            return ['name' => 'Solutions', 'badge' => 'badge-solutions'];
        }
        if (str_starts_with($slug, '/integrations')) {
            return ['name' => 'Integrations', 'badge' => 'badge-integrations'];
        }
        if (str_starts_with($slug, '/industry') || str_starts_with($slug, '/industries')) {
            return ['name' => 'Industries', 'badge' => 'badge-industries'];
        }
        if (str_starts_with($slug, '/business-leads')) {
            return ['name' => 'Business Leads', 'badge' => 'badge-leads'];
        }
        if (str_starts_with($slug, '/channel') || str_starts_with($slug, '/channels')) {
            return ['name' => 'Channels', 'badge' => 'badge-channels'];
        }
        if (str_starts_with($slug, '/resources') || str_starts_with($slug, '/blogs')) {
            return ['name' => 'Resources & Blog', 'badge' => 'badge-resources'];
        }
        if (str_starts_with($slug, '/partners')) {
            return ['name' => 'Partners', 'badge' => 'badge-partners'];
        }
        if (str_starts_with($slug, '/company') || in_array($slug, ['/pricing/', '/contact/', '/careers/', '/terms/', '/privacy/', '/security/', '/gdpr/', '/login/', '/signup/', '/cookie-policy/'])) {
            return ['name' => 'Core & Company', 'badge' => 'badge-core'];
        }

        return ['name' => 'Other Landing Pages', 'badge' => 'badge-default'];
    }

    /**
     * Header Navigation Dropdowns Manager
     */
    public static function getHeaderMenus(): array {
        $menuFile = dirname(__DIR__) . '/config/header_menus.json';
        if (file_exists($menuFile)) {
            $raw = @file_get_contents($menuFile);
            if ($raw) {
                $decoded = json_decode($raw, true);
                if (is_array($decoded)) return $decoded;
            }
        }

        // Return default structured menus
        return [
            'cta_button' => [
                'text' => 'Start Free',
                'url' => 'https://panindiadata.com/',
                'highlight' => true
            ],
            'products' => [
                ['title' => 'Official WhatsApp API', 'url' => '/channel/whatsapp/', 'desc' => 'High throughput verified Cloud API', 'badge' => 'Meta Partner'],
                ['title' => 'AI Voice Calling', 'url' => '/channel/ai-voice-call/', 'desc' => 'Automated conversational calling agents', 'badge' => 'New'],
                ['title' => 'Broadcast Campaigns', 'url' => '/products/broadcast/', 'desc' => 'Bulk messaging with 98% open rates', 'badge' => 'Popular'],
                ['title' => 'Shared Team Inbox', 'url' => '/products/shared-inbox/', 'desc' => 'Multi-agent customer support hub', 'badge' => ''],
                ['title' => 'Visual Flow Builder', 'url' => '/products/flow-builder/', 'desc' => 'No-code chatbot automation journeys', 'badge' => ''],
                ['title' => 'WhatsApp CRM', 'url' => '/products/crm/', 'desc' => 'Kanban lead pipelines & tracking', 'badge' => '']
            ],
            'solutions' => [
                ['title' => 'Shopify E-Commerce', 'url' => '/solutions/shopify/', 'desc' => 'Abandoned cart recovery & COD alerts', 'badge' => 'E-Commerce'],
                ['title' => 'WooCommerce Automation', 'url' => '/solutions/woocommerce/', 'desc' => 'Order alerts & 1-click checkout links', 'badge' => 'E-Commerce'],
                ['title' => 'Lead Generation', 'url' => '/solutions/lead-generation/', 'desc' => 'Automated instant qualification bots', 'badge' => 'Sales'],
                ['title' => 'Customer Support 24/7', 'url' => '/solutions/customer-support/', 'desc' => 'Instant AI replies with human handover', 'badge' => 'Support'],
                ['title' => 'Appointment Booking', 'url' => '/solutions/appointment/', 'desc' => 'Automated scheduling & calendar sync', 'badge' => 'Operations']
            ],
            'resources' => [
                ['title' => 'Blog & Strategy Guides', 'url' => '/resources/blog/', 'desc' => 'Best practices for WhatsApp sales', 'badge' => ''],
                ['title' => 'API Documentation', 'url' => '/resources/api-docs/', 'desc' => 'Developer endpoints and webhooks', 'badge' => 'Docs'],
                ['title' => 'Case Studies', 'url' => '/resources/case-studies/', 'desc' => 'Real customer growth stories', 'badge' => 'Stories'],
                ['title' => 'Help Center & FAQs', 'url' => '/resources/help-center/', 'desc' => 'Guides, tutorials and setup steps', 'badge' => 'Support']
            ]
        ];
    }

    public static function saveHeaderMenus(array $menus): bool {
        $menuFile = dirname(__DIR__) . '/config/header_menus.json';
        $json = json_encode($menus, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        $res = @file_put_contents($menuFile, $json);

        // Update runtime JS to reflect menu changes live
        self::syncMenuToRuntimeJs($menus);

        return (bool)$res;
    }

    private static function syncMenuToRuntimeJs(array $menus): void {
        $jsDir = dirname(__DIR__) . '/public/assets/js';
        if (!is_dir($jsDir)) @mkdir($jsDir, 0755, true);
        $content = "/** HelloBotz Dynamic Navigation Menus Runtime **/\nwindow.__HELLOBOTZ_MENUS__ = " . json_encode($menus, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . ";\n";
        @file_put_contents($jsDir . '/hb-menus-runtime.js', $content);
    }
}
