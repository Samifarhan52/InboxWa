import os
import re
import json
import html
from blogs_data import BLOGS_CONFIG, PALETTES
from build_v2_system import make_hero_svg, make_diagram_svg

os.makedirs('assets/images/blog/v2', exist_ok=True)

# Read the HTML layout skeleton from public/resources/blog/best-whatsapp-crm/index.html
with open('public/resources/blog/best-whatsapp-crm/index.html', 'r', errors='ignore') as f:
    sample_full_html = f.read()

# Locate container boundaries
m_start = sample_full_html.find('<div class="container" style="max-width: 920px;')
m_end = sample_full_html.find('</article>') + len('</article>\n</div>')
html_head_part = sample_full_html[:m_start]
html_foot_part = sample_full_html[m_end:]

print(f"Loaded layout templates: head={len(html_head_part)}, foot={len(html_foot_part)}")

# We will build cards for the blog listing page
cards_data = []

for idx, conf in enumerate(BLOGS_CONFIG):
    old_slug = conf["old_slug"]
    new_slug = conf["new_slug"]
    category = conf["category"]
    title = conf["title"]
    description = conf["description"]
    metric = conf["metric"]
    palette = PALETTES[idx % len(PALETTES)]
    
    hero_svg_path = f"assets/images/blog/v2/{new_slug}-hero.svg"
    diagram_svg_path = f"assets/images/blog/v2/{new_slug}-diagram.svg"
    
    # 1. Generate Hero SVG
    make_hero_svg(hero_svg_path, category, title, metric, palette)
    
    # 2. Generate Diagram SVG
    make_diagram_svg(diagram_svg_path, conf["diag_title"], conf["step1"], conf["step2"], conf["step3"], conf["step4"], conf["diag_metric"], palette)
    
    # 3. Read original rewritten body from old file
    old_php_path = f"resources/blog/{old_slug}/index.php"
    if os.path.exists(old_php_path):
        with open(old_php_path, 'r', errors='ignore') as fp:
            old_raw = fp.read()
    else:
        old_raw = ""
    
    # Extract body content between <div class="single-article-content"> and </article>
    content_match = re.search(r'<div class="single-article-content">(.*?)</article>', old_raw, re.DOTALL)
    if content_match:
        body_inner = content_match.group(1).strip()
    else:
        body_inner = f"<p>{html.escape(description)}</p>"
    
    # Clean gg- classes to hb-
    body_inner = body_inner.replace("gg-highlights-", "hb-takeaways-")
    body_inner = body_inner.replace("Too Long? Read This First", "⚡ Executive Summary & Key Takeaways")
    
    # Clean any old provider/steps/webp images if any
    body_inner = re.sub(r'<img[^>]+src=["\'][^"\']*(?:steps|providers|old)[^"\']*["\'][^>]*>', '', body_inner)
    body_inner = re.sub(r'<div class="gg-step-[^"]*">', '<div class="hb-step-card">', body_inner)
    body_inner = re.sub(r'class="gg-[^"]*"', 'class="hb-step-element"', body_inner)
    
    # Insert Diagram after the first </h2>
    diagram_html = f'''
    <div class="hb-diagram-wrapper">
      <img src="/assets/images/blog/v2/{new_slug}-diagram.svg" alt="{html.escape(title)} Workflow Architecture" class="hb-diagram-img" width="1000" height="460" loading="lazy">
      <div class="hb-diagram-caption">
        <span>Proprietary HelloBotz Infrastructure</span>
        <span>Official Meta Cloud API v20</span>
      </div>
    </div>
    '''
    
    if "</h2>" in body_inner:
        parts = body_inner.split("</h2>", 1)
        body_inner = parts[0] + "</h2>" + diagram_html + parts[1]
    else:
        body_inner = diagram_html + body_inner
        
    # Insert Pro Tip before the last <h2> (which is usually FAQ)
    protip_html = f'''
    <div class="hb-pro-tip-box">
      <div class="hb-pro-tip-title">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
        HelloBotz Engineering Pro Tip
      </div>
      <p class="hb-pro-tip-text">{html.escape(conf["pro_tip"])}</p>
    </div>
    '''
    
    if '<div class="custom-faq-accordion' in body_inner:
        body_inner = body_inner.replace('<div class="custom-faq-accordion', protip_html + '\n<div class="custom-faq-accordion')
    elif '<h2>Frequently Asked Questions' in body_inner:
        body_inner = body_inner.replace('<h2>Frequently Asked Questions', protip_html + '\n<h2>Frequently Asked Questions')
    else:
        body_inner = body_inner + protip_html
        
    # Add Author Bio and CTA Banner at end of body_inner
    author_and_cta = f'''
    <div class="hb-author-bio-card">
      <div class="hb-author-avatar-lg">F</div>
      <div class="hb-author-details">
        <h4>Faris</h4>
        <p>Official HelloBotz Technical Specialist & Enterprise Solutions Architect. Passionate about empowering businesses to scale real-time customer workflows using Meta Cloud API.</p>
      </div>
    </div>

    <div class="hb-blog-cta-banner">
      <h3>Ready to Automate Your WhatsApp Messaging with HelloBotz?</h3>
      <p>Join fast-growing companies that choose HelloBotz for zero-markup Cloud API messaging, automated CRM pipelines, and 99.9% reliability.</p>
      <a href="/auth/register/" class="hb-blog-cta-btn">Start Free 14-Day Trial &rarr;</a>
    </div>
    '''
    body_inner = body_inner + author_and_cta

    # Build container HTML
    container_html = f'''<div class="container" style="max-width: 920px; margin: 0 auto; padding-top: 1.75rem;">
  <nav class="blog-breadcrumbs" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span class="sep">/</span>
    <a href="/resources/blog/">Blog &amp; Insights</a>
    <span class="sep">/</span>
    <span class="current">{html.escape(category)}</span>
  </nav>

  <article class="single-blog-article">
    <div class="single-blog-header">
      <div class="blog-tag-badge">{html.escape(category)}</div>
      <h1>{html.escape(title)}</h1>
      <div class="single-blog-meta">
        <div class="author-pill">
          <div class="author-avatar">F</div>
          <div class="author-info">
            <span class="author-name">Faris</span>
            <span class="author-reading-time">9 min read • Official HelloBotz Contributor</span>
          </div>
        </div>
        <div class="single-blog-updated">
          LAST UPDATED : <strong>Oct 20, 2026</strong>
        </div>
      </div>
    </div>

    <!-- Featured Banner Image -->
    <div class="single-blog-featured-img">
      <img src="/assets/images/blog/v2/{new_slug}-hero.svg" alt="{html.escape(title)}" title="{html.escape(title)}" width="1200" height="630" style="width: 100%; height: auto; border-radius: 14px; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
    </div>

    <!-- Article Content -->
    <div class="single-article-content">
{body_inner}
    </div>
  </article>
</div>'''

    # Build dynamic PHP file
    php_content = f'''<?php
$basePath = "../../../";
$pageTitle = '{html.escape(title)} — HelloBotz Insights';
$pageDescription = '{html.escape(description)}';
$canonicalUrl = 'https://hellobotz.com/resources/blog/{new_slug}/';
$ogImage = 'https://hellobotz.com/assets/images/blog/v2/{new_slug}-hero.svg';
include __DIR__ . '/../../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/articles-blog.css?v=3">

{container_html}

<script>
document.addEventListener('DOMContentLoaded', function() {{
  document.querySelectorAll('.custom-faq-accordion .faq-question').forEach(function(question) {{
    question.addEventListener('click', function() {{
      var item = this.closest('.faq-item');
      var answer = item.querySelector('.faq-answer');
      var isExpanded = this.getAttribute('aria-expanded') === 'true';
      this.setAttribute('aria-expanded', !isExpanded);
      answer.setAttribute('aria-hidden', isExpanded);
    }});
  }});
}});
</script>

<?php include __DIR__ . '/../../../includes/footer.php'; ?>
'''

    # Write dynamic PHP file to resources/blog/<new_slug>/index.php
    new_php_dir = f"resources/blog/{new_slug}"
    os.makedirs(new_php_dir, exist_ok=True)
    with open(f"{new_php_dir}/index.php", 'w') as fp:
        fp.write(php_content)

    # Write proxy router to blogs/<new_slug>/index.php
    new_proxy_dir = f"blogs/{new_slug}"
    os.makedirs(new_proxy_dir, exist_ok=True)
    with open(f"{new_proxy_dir}/index.php", 'w') as fp:
        fp.write("<?php require __DIR__ . '/../../resources/blog/' . basename(__DIR__) . '/index.php'; ?>\n")

    # Build static HTML file
    custom_head = html_head_part
    custom_head = re.sub(r'<title>.*?</title>', f'<title>{html.escape(title)} — HelloBotz Insights</title>', custom_head, flags=re.DOTALL)
    custom_head = re.sub(r'<meta name="description" content=".*?">', f'<meta name="description" content="{html.escape(description)}">', custom_head)
    custom_head = re.sub(r'<link rel="canonical" href=".*?">', f'<link rel="canonical" href="https://hellobotz.com/resources/blog/{new_slug}/">', custom_head)
    custom_head = re.sub(r'<meta property="og:image" content=".*?">', f'<meta property="og:image" content="https://hellobotz.com/assets/images/blog/v2/{new_slug}-hero.svg">', custom_head)
    custom_head = re.sub(r'<meta property="og:title" content=".*?">', f'<meta property="og:title" content="{html.escape(title)}">', custom_head)
    custom_head = re.sub(r'<meta property="og:description" content=".*?">', f'<meta property="og:description" content="{html.escape(description)}">', custom_head)

    full_static_html = custom_head + container_html + html_foot_part

    # Write static HTML mirrors
    pub_res_dir = f"public/resources/blog/{new_slug}"
    os.makedirs(pub_res_dir, exist_ok=True)
    with open(f"{pub_res_dir}/index.html", 'w') as fp:
        fp.write(full_static_html)

    pub_blogs_dir = f"public/blogs/{new_slug}"
    os.makedirs(pub_blogs_dir, exist_ok=True)
    with open(f"{pub_blogs_dir}/index.html", 'w') as fp:
        fp.write(full_static_html)

    # 4. Now handle Old Slug Retirement (HTTP 410 Gone)
    old_php_dir = f"resources/blog/{old_slug}"
    os.makedirs(old_php_dir, exist_ok=True)
    gone_php = f'''<?php
http_response_code(410);
$basePath = "../../../";
$pageTitle = '410 - Content Permanently Relocated | HelloBotz';
$pageDescription = 'This URL has been permanently retired. Explore our latest official 2026 WhatsApp guides at HelloBotz.';
include __DIR__ . '/../../../includes/header.php';
?>
<div class="container text-center py-5 my-5" style="max-width: 680px; min-height: 50vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
  <div style="font-size: 3.5rem; margin-bottom: 1rem;">🔒</div>
  <h1 class="h2 fw-bold mb-3" style="color: #0F172A;">Resource Permanently Relocated</h1>
  <p class="text-muted mb-4" style="font-size: 1.1rem; line-height: 1.6;">This specific URL has been permanently retired as part of our infrastructure and content upgrade. You can find our brand-new official 2026 WhatsApp guides in our resource library.</p>
  <div class="d-flex gap-3 justify-content-center">
    <a href="/resources/blog/{new_slug}/" class="btn btn-success px-4 py-2 rounded-pill fw-bold">Read the New 2026 Guide &rarr;</a>
    <a href="/resources/blog/" class="btn btn-outline-secondary px-4 py-2 rounded-pill fw-bold">All Blog Articles</a>
  </div>
</div>
<?php include __DIR__ . '/../../../includes/footer.php'; ?>
'''
    with open(f"{old_php_dir}/index.php", 'w') as fp:
        fp.write(gone_php)

    old_proxy_dir = f"blogs/{old_slug}"
    os.makedirs(old_proxy_dir, exist_ok=True)
    with open(f"{old_proxy_dir}/index.php", 'w') as fp:
        fp.write("<?php require __DIR__ . '/../../resources/blog/' . basename(__DIR__) . '/index.php'; ?>\n")

    gone_static = f'''<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex, follow">
  <meta http-equiv="refresh" content="3;url=/resources/blog/{new_slug}/">
  <title>410 - Content Relocated | HelloBotz</title>
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/articles-blog.css">
</head>
<body style="background: #F8FAFC; display: flex; align-items: center; justify-content: center; min-height: 100vh; font-family: sans-serif; text-align: center;">
  <div style="max-width: 600px; padding: 40px; background: #ffffff; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); margin: 20px;">
    <div style="font-size: 48px; margin-bottom: 16px;">🔒</div>
    <h1 style="font-size: 24px; font-weight: 800; color: #0F172A; margin-bottom: 12px;">Resource Permanently Relocated</h1>
    <p style="color: #64748B; font-size: 15px; line-height: 1.6; margin-bottom: 24px;">This specific URL has been retired. Redirecting to our updated 2026 guide in 3 seconds...</p>
    <a href="/resources/blog/{new_slug}/" style="display: inline-block; background: #25D366; color: #064E3B; font-weight: 700; padding: 12px 24px; border-radius: 99px; text-decoration: none;">View New Guide &rarr;</a>
  </div>
</body>
</html>'''

    pub_old_res = f"public/resources/blog/{old_slug}"
    os.makedirs(pub_old_res, exist_ok=True)
    with open(f"{pub_old_res}/index.html", 'w') as fp:
        fp.write(gone_static)

    pub_old_blog = f"public/blogs/{old_slug}"
    os.makedirs(pub_old_blog, exist_ok=True)
    with open(f"{pub_old_blog}/index.html", 'w') as fp:
        fp.write(gone_static)

    # Collect card info for blog listing page
    cards_data.append({
        "slug": new_slug,
        "title": title,
        "description": description,
        "category": category,
        "image": f"/assets/images/blog/v2/{new_slug}-hero.svg",
        "read_time": "9 min read"
    })
    print(f"[{idx+1}/22] Successfully built: {old_slug} -> {new_slug}")

# 5. Build Updated Listing Grids
print("\nBuilding updated blog listing grids...")

def generate_blog_cards_html(cards):
    html_cards = []
    for c in cards:
        card = f'''        <div class="col-lg-4 col-md-6 col-12 mb-4 blog-card-item" data-category="{html.escape(c['category'])}">
          <div class="article-card">
            <div class="article-img-wrap">
              <a href="/resources/blog/{c['slug']}/">
                <img src="{c['image']}" alt="{html.escape(c['title'])}" class="article-img" width="400" height="210" loading="lazy">
              </a>
              <span class="article-category-badge">{html.escape(c['category'])}</span>
            </div>
            <div class="article-body">
              <div class="article-meta">
                <span class="author-name">Faris</span>
                <span class="dot">•</span>
                <span class="read-time">{c['read_time']}</span>
              </div>
              <h3 class="article-title">
                <a href="/resources/blog/{c['slug']}/">{html.escape(c['title'])}</a>
              </h3>
              <p class="article-excerpt">{html.escape(c['description'])}</p>
              <div class="article-footer">
                <a href="/resources/blog/{c['slug']}/" class="read-more-link">
                  Read Guide
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <span class="article-date">Oct 20, 2026</span>
              </div>
            </div>
          </div>
        </div>'''
        html_cards.append(card)
    return "\n".join(html_cards)

cards_html = generate_blog_cards_html(cards_data)

# Update resources/blog/index.php
with open('resources/blog/index.php', 'r', errors='ignore') as f:
    res_index = f.read()

# Replace the grid inside <div class="row g-4" id="articlesGrid"> ... </div>
grid_pattern = r'(<div class="row g-4" id="articlesGrid">)(.*?)(</div>\s*<!-- Pagination / Load More -->)'
new_res_index = re.sub(grid_pattern, f'\\1\n{cards_html}\n      \\3', res_index, flags=re.DOTALL)
new_res_index = re.sub(r'All Articles \(\d+\)', f'All Articles ({len(cards_data)})', new_res_index)

with open('resources/blog/index.php', 'w') as f:
    f.write(new_res_index)

# Update blogs/index.php
with open('blogs/index.php', 'w') as f:
    f.write("<?php require __DIR__ . '/../resources/blog/index.php'; ?>\n")

# Update public/resources/blog/index.html & public/blogs/index.html
with open('public/resources/blog/index.html', 'r', errors='ignore') as f:
    pub_res_index = f.read()

new_pub_res = re.sub(grid_pattern, f'\\1\n{cards_html}\n      \\3', pub_res_index, flags=re.DOTALL)
new_pub_res = re.sub(r'All Articles \(\d+\)', f'All Articles ({len(cards_data)})', new_pub_res)

with open('public/resources/blog/index.html', 'w') as f:
    f.write(new_pub_res)

with open('public/blogs/index.html', 'w') as f:
    f.write(new_pub_res)

# 6. Update sitemap.xml with the 22 new URLs
print("Updating sitemap.xml...")
with open('sitemap.xml', 'r', errors='ignore') as f:
    sitemap_text = f.read()

# Remove any old blog URLs
sitemap_text = re.sub(r'\s*<url>\s*<loc>https://hellobotz.com/resources/blog/[^<]+/</loc>.*?</url>', '', sitemap_text, flags=re.DOTALL)

# Build new sitemap entries
new_sitemap_urls = []
for c in cards_data:
    entry = f'''  <url>
    <loc>https://hellobotz.com/resources/blog/{c['slug']}/</loc>
    <lastmod>2026-10-20</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>'''
    new_sitemap_urls.append(entry)

new_entries_block = "\n".join(new_sitemap_urls)
sitemap_text = sitemap_text.replace('</urlset>', f'{new_entries_block}\n</urlset>')

with open('sitemap.xml', 'w') as f:
    f.write(sitemap_text)

print("\n🎉 ALL 22 BLOGS, IMAGES, STATIC MIRRORS, RETIRED SLUGS & SITEMAP COMPLETED SUCCESSFULLY!")
