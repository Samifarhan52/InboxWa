<?php
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
    <a href="/resources/blog/launch-whatsapp-business-api-agency-solution/" class="btn btn-success px-4 py-2 rounded-pill fw-bold">Read the New 2026 Guide &rarr;</a>
    <a href="/resources/blog/" class="btn btn-outline-secondary px-4 py-2 rounded-pill fw-bold">All Blog Articles</a>
  </div>
</div>
<?php include __DIR__ . '/../../../includes/footer.php'; ?>
