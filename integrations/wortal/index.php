<?php
http_response_code(410);
$basePath = "../../";
$bp = "../../";
$pageTitle = '410 - Integration Permanently Retired | HelloBotz';
$pageDescription = 'This integration has been permanently retired. Explore official WhatsApp integrations at HelloBotz.';
include __DIR__ . '/../../includes/header.php';
?>
<div class="container text-center py-5 my-5" style="max-width: 680px; min-height: 50vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
  <div style="font-size: 3.5rem; margin-bottom: 1rem;">🔒</div>
  <h1 class="h2 fw-bold mb-3" style="color: #0F172A;">Integration Retired</h1>
  <p class="text-muted mb-4" style="font-size: 1.1rem; line-height: 1.6;">This integration has been permanently retired from our platform. Explore our active, verified WhatsApp integrations for Shopify, WooCommerce, Zoho, and Google Sheets.</p>
  <div class="d-flex gap-3 justify-content-center">
    <a href="/integrations/" class="btn btn-success px-4 py-2 rounded-pill fw-bold">Explore Active Integrations &rarr;</a>
    <a href="/" class="btn btn-outline-secondary px-4 py-2 rounded-pill fw-bold">Home</a>
  </div>
</div>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
