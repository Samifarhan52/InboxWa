<?php
$basePath = "../../";
$pageTitle = "Blog — InboxWa Insights";
$pageDescription = "AI automation, WhatsApp API, omnichannel engagement, CRM and business growth insights.";
$canonicalUrl = "https://inboxwa.com/resources/blog/";
include __DIR__ . "/../../includes/header.php";

$posts = cms_posts(0);
$featured = !empty($posts) ? $posts[0] : null;
$latest = count($posts) > 1 ? array_slice($posts, 1) : $posts;
?>
<link rel="stylesheet" href="/assets/css/resources.css?v=1">

<nav class="container" style="padding-top:calc(var(--nav,72px)+1rem);font-size:.85rem;color:var(--t3)">
  <a href="/">Home</a> / Resources / Blog
</nav>

<section class="section page-hero" style="padding-top:1.25rem">
  <div class="container">
    <div class="section-header reveal">
      <span class="badge badge-primary">Blog</span>
      <h1>InboxWa Insights</h1>
      <p class="lead">AI automation, WhatsApp API, omnichannel engagement, CRM and business growth insights.</p>
    </div>
  </div>
</section>

<?php if ($featured): ?>
<section class="section section-gradient-1">
  <div class="container">
    <article class="card reveal" style="padding:1.5rem;display:grid;gap:1.5rem;grid-template-columns:repeat(auto-fit, minmax(280px, 1fr));align-items:center;">
      <div class="blog-img-ph blog-img-ph--lg" style="min-height:220px;border-radius:12px;background:linear-gradient(135deg,rgba(139,92,246,0.15),rgba(6,182,212,0.15));display:flex;align-items:center;justify-content:center;color:#8B5CF6;font-size:2.5rem;">
        📰
      </div>
      <div>
        <span class="badge badge-primary">Featured · <?php echo htmlspecialchars($featured["category"] ?: "Article"); ?></span>
        <h2 style="margin:.75rem 0 .5rem"><a href="/resources/blog/<?php echo htmlspecialchars($featured["slug"]); ?>/" style="text-decoration:none;color:inherit"><?php echo htmlspecialchars($featured["title"]); ?></a></h2>
        <p style="color:var(--t2);line-height:1.6;margin-bottom:1rem"><?php echo htmlspecialchars($featured["excerpt"] ?: "Discover insights on WhatsApp automation and customer communication."); ?></p>
        <div style="font-size:0.85rem;color:var(--t3);margin-bottom:1rem">By <?php echo htmlspecialchars($featured["author"] ?: "InboxWa Team"); ?> · <?php echo date("M j, Y", strtotime($featured["created_at"])); ?></div>
        <a class="btn btn-primary btn-sm" href="/resources/blog/<?php echo htmlspecialchars($featured["slug"]); ?>/">Read Article &rarr;</a>
      </div>
    </article>
  </div>
</section>
<?php endif; ?>

<section class="section">
  <div class="container">
    <div class="section-header reveal"><h2>Latest Articles</h2></div>
    <div class="res-grid" style="display:grid;grid-template-columns:repeat(auto-fit, minmax(300px, 1fr));gap:1.5rem;margin-top:1.5rem;">
      <?php foreach ($latest as $p): ?>
      <article class="card res-card reveal" style="display:flex;flex-direction:column;justify-content:space-between;padding:1.5rem;border-radius:14px;">
        <div>
          <div class="blog-img-ph" role="img" aria-label="<?php echo htmlspecialchars($p["title"]); ?>" style="height:140px;border-radius:10px;background:linear-gradient(135deg,rgba(99,102,241,0.08),rgba(139,92,246,0.08));display:flex;align-items:center;justify-content:center;font-size:2rem;margin-bottom:1rem;">
            📝
          </div>
          <span class="badge badge-primary"><?php echo htmlspecialchars($p["category"] ?: "Guide"); ?></span>
          <h3 style="margin:.65rem 0 .35rem;font-size:1.15rem"><a href="/resources/blog/<?php echo htmlspecialchars($p["slug"]); ?>/" style="text-decoration:none;color:inherit"><?php echo htmlspecialchars($p["title"]); ?></a></h3>
          <p style="color:var(--t2);font-size:.9rem;line-height:1.5"><?php echo htmlspecialchars($p["excerpt"]); ?></p>
        </div>
        <div style="margin-top:1.25rem;display:flex;justify-content:space-between;align-items:center;border-top:1px solid rgba(0,0,0,0.05);padding-top:0.75rem;">
          <span style="font-size:.8rem;color:var(--t3)"><?php echo date("M Y", strtotime($p["created_at"])); ?></span>
          <a class="btn btn-sm btn-outline" href="/resources/blog/<?php echo htmlspecialchars($p["slug"]); ?>/">Read More</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . "/../../includes/footer.php"; ?>
