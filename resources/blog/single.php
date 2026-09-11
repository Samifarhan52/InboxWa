<?php
/**
 * Dynamic Single Blog Post Template for InboxWa CMS
 */
$basePath = "../../../";
require_once dirname(__DIR__, 2) . "/config/cms.php";

$slug = $_GET["slug"] ?? "";
if (empty($slug)) {
    $req = parse_url($_SERVER["REQUEST_URI"] ?? "", PHP_URL_PATH);
    $parts = array_values(array_filter(explode("/", trim($req, "/"))));
    $slug = end($parts) ?: "";
}

$post = cms_post($slug);
if (!$post) {
    header("HTTP/1.0 404 Not Found");
    $pageTitle = "Post Not Found";
    include dirname(__DIR__, 2) . "/includes/header.php";
    echo '<div class="container" style="padding:6rem 1rem;text-align:center;"><h1>Article Not Found</h1><p>The requested blog article could not be found.</p><a href="/resources/blog/" class="btn btn-primary" style="margin-top:1rem;">Back to Blog</a></div>';
    include dirname(__DIR__, 2) . "/includes/footer.php";
    exit;
}

$pageTitle = htmlspecialchars($post["title"]) . " — InboxWa Blog";
$pageDescription = htmlspecialchars($post["excerpt"] ?: substr(strip_tags($post["content"]), 0, 160));
$canonicalUrl = "https://inboxwa.com/resources/blog/" . urlencode($post["slug"]) . "/";
include dirname(__DIR__, 2) . "/includes/header.php";
?>
<link rel="stylesheet" href="/assets/css/resources.css?v=1">

<nav class="container res-breadcrumb" aria-label="Breadcrumb">
  <a href="/">Home</a> / <a href="/resources/blog/">Blog</a> / <span><?php echo htmlspecialchars($post["title"]); ?></span>
</nav>

<article class="section" style="padding-top:1.25rem;padding-bottom:4rem;">
  <div class="container" style="max-width:840px">
    <div style="margin-bottom:1.5rem;">
      <span class="badge badge-primary"><?php echo htmlspecialchars($post["category"] ?: "Insights"); ?></span>
      <h1 style="margin:.75rem 0 .5rem;font-size:2.25rem;line-height:1.25;font-weight:800;color:var(--t1, #0f172a);"><?php echo htmlspecialchars($post["title"]); ?></h1>
      <div style="color:var(--t3);font-size:.9rem;display:flex;align-items:center;gap:1rem;">
        <span>By <strong><?php echo htmlspecialchars($post["author"] ?: "InboxWa Team"); ?></strong></span>
        <span>&bull;</span>
        <span><?php echo date("F j, Y", strtotime($post["created_at"])); ?></span>
      </div>
    </div>

    <?php if (!empty($post["image"])): ?>
      <div style="margin-bottom:2rem;border-radius:16px;overflow:hidden;background:#f1f5f9;max-height:420px;">
        <img src="<?php echo htmlspecialchars($post["image"]); ?>" alt="<?php echo htmlspecialchars($post["title"]); ?>" style="width:100%;height:auto;object-fit:cover;" onerror="this.style.display='none'">
      </div>
    <?php endif; ?>

    <div class="article-body" style="font-size:1.05rem;line-height:1.8;color:var(--t2, #334155);">
      <?php echo $post["content"]; ?>
    </div>

    <div style="margin-top:3rem;padding:2rem;background:linear-gradient(135deg,rgba(139,92,246,0.06),rgba(6,182,212,0.06));border:1px solid rgba(139,92,246,0.2);border-radius:16px;text-align:center;">
      <h3 style="margin-bottom:0.5rem;font-size:1.35rem;">Accelerate Your Growth with Official WhatsApp Business API</h3>
      <p style="color:var(--t2);margin-bottom:1.25rem;font-size:0.95rem;">Join thousands of businesses scaling conversations, CRM pipelines, and customer loyalty.</p>
      <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
        <a href="/auth/register" class="btn btn-primary btn-lg">Start Free Trial</a>
        <button type="button" class="btn btn-outline btn-lg btn-demo-open">Book a Demo</button>
      </div>
    </div>
  </div>
</article>

<?php include dirname(__DIR__, 2) . "/includes/footer.php"; ?>
