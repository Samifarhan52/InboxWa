<?php
$basePath = "../../";
$bp = "../../";
require_once __DIR__ . "/../../config/cms.php";

$pageTitle = "Interactive WhatsApp Messages with Buttons & Lists | HelloBotz";
$pageDescription = "Create high-converting interactive WhatsApp messages with CTA buttons, quick replies, and list menus. Boost customer engagement, eliminate typing errors, and drive 3x faster conversions.";
$canonicalUrl = "https://hellobotz.com/products/whatsapp-interactive-messages/";
$ogImage = "assets/images/og-image.png";

include __DIR__ . "/../../includes/header.php";
?>

<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/product-pages.css">

<div class="prod-page">
  <!-- Ambient Gradients -->
  <div class="prod-ambient-1"></div>
  <div class="prod-ambient-2"></div>

  <!-- Hero Section -->
  <section class="prod-hero">
    <div class="prod-hero-grid">
      <div class="prod-hero-content">
        <div class="prod-badge">
          <span class="prod-badge-dot" style="background:#7c3aed;"></span>
          INTERACTIVE CONVERSATIONAL UI
        </div>
        <h1 class="prod-hero-title">
          Boost Engagement with <span class="prod-gradient-text" style="background: linear-gradient(135deg, #7c3aed 0%, #059669 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Interactive WhatsApp Messages</span>
        </h1>
        <p class="prod-hero-desc">
          Replace tedious plain text with interactive CTA buttons, quick replies, and dropdown list pickers. Give your users intuitive 1-tap responses, reduce customer effort, and guide every conversation to a successful outcome.
        </p>
        <div class="prod-hero-ctas">
          <a href="<?php echo $bp; ?>auth/register" class="prod-btn-primary" style="background:#7c3aed; border-color:#7c3aed;">
            Build Interactive Flows Free
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
          <a href="#message-types" class="prod-btn-secondary">
            Explore Button Types
          </a>
          <a href="https://panindiadata.com/" target="_blank" rel="noopener noreferrer" class="btn-download-data" style="padding:0.78rem 1.5rem;font-size:0.95rem;">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            Download Data
          </a>
        </div>
        <div class="prod-bullets">
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon" style="background:#f5f3ff; color:#7c3aed;">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </span>
            3x Higher Click-Through Rate
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon" style="background:#f5f3ff; color:#7c3aed;">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </span>
            Zero Customer Typing Friction
          </div>
          <div class="prod-bullet-item">
            <span class="prod-bullet-icon" style="background:#f5f3ff; color:#7c3aed;">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </span>
            No Coding Required Builder
          </div>
        </div>
      </div>
      <div class="prod-hero-visual">
        <div class="prod-hero-media-wrapper" style="background: linear-gradient(145deg, #fbf7ff 0%, #ede9fe 100%); border: 1.5px solid #ddd6fe; border-radius: 24px; padding: 32px; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 20px 40px -15px rgba(124, 58, 237, 0.15);">
          <!-- Phone Chat Mockup with Interactive Buttons -->
          <div style="background: #ffffff; border-radius: 20px; box-shadow: 0 12px 30px rgba(0,0,0,0.08); width: 100%; max-width: 380px; overflow: hidden; border: 1px solid #e2e8f0;">
            <div style="background: #075e54; padding: 14px 18px; display: flex; align-items: center; gap: 10px; color: #fff;">
              <div style="width: 38px; height: 38px; border-radius: 50%; background: #25d366; display: flex; align-items: center; justify-content: center; font-weight: 700;">HB</div>
              <div>
                <div style="font-weight: 700; font-size: 15px;">HelloBotz Assistant</div>
                <div style="font-size: 11px; opacity: 0.85;">online</div>
              </div>
            </div>
            <div style="background: #efeae2; padding: 16px; display: flex; flex-direction: column; gap: 10px;">
              <!-- Interactive Card -->
              <div style="background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.08); max-width: 90%;">
                <div style="padding: 12px 14px; font-size: 13.5px; color: #111827; line-height: 1.4;">
                  🎉 <strong>Special Flash Deal!</strong><br>
                  Enjoy 25% off all automation plans today. How would you like to proceed?
                  <div style="font-size: 10px; color: #94a3b8; text-align: right; margin-top: 4px;">11:02 AM</div>
                </div>
                <!-- Action Buttons -->
                <div style="border-top: 1px solid #f1f5f9; display: flex; flex-direction: column;">
                  <div style="padding: 10px; text-align: center; color: #0081FB; font-weight: 600; font-size: 13px; border-bottom: 1px solid #f1f5f9; cursor: pointer;">
                    🚀 View Live Demo
                  </div>
                  <div style="padding: 10px; text-align: center; color: #059669; font-weight: 600; font-size: 13px; border-bottom: 1px solid #f1f5f9; cursor: pointer;">
                    💳 Claim 25% Discount
                  </div>
                  <div style="padding: 10px; text-align: center; color: #64748b; font-weight: 500; font-size: 13px; cursor: pointer;">
                    💬 Talk to Human Agent
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Highlights Strip -->
  <section class="prod-stats-strip" style="background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0; padding: 36px 0;">
    <div class="prod-container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 24px; text-align: center;">
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #7c3aed; margin-bottom: 4px;">3x</div>
          <div style="font-size: 0.92rem; color: #64748b; font-weight: 600;">Higher Click Rates</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #059669; margin-bottom: 4px;">80%</div>
          <div style="font-size: 0.92rem; color: #64748b; font-weight: 600;">Faster Responses</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #0081FB; margin-bottom: 4px;">100%</div>
          <div style="font-size: 0.92rem; color: #64748b; font-weight: 600;">Typo-Free Inputs</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #d97706; margin-bottom: 4px;">10-Item</div>
          <div style="font-size: 0.92rem; color: #64748b; font-weight: 600;">Structured Menu Lists</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Message Types Section -->
  <section class="prod-section" id="message-types">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">Supported Formats</span>
        <h2 class="prod-section-title">Types of WhatsApp Interactive Messages</h2>
        <p class="prod-section-desc">
          Combine text, images, and rich action buttons to create intuitive, app-like experiences right inside the chat window.
        </p>
      </div>
      <div class="prod-grid-4">
        <div class="prod-card">
          <div class="prod-card-icon" style="background:#f5f3ff; color:#7c3aed;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="9" x2="15" y2="9"/><line x1="9" y1="15" x2="15" y2="15"/></svg>
          </div>
          <h3 class="prod-card-title">Quick Reply Buttons</h3>
          <p class="prod-card-desc">
            Present up to 3 clickable buttons (e.g., "Yes", "No", "Change Date") for instant customer decisions without typing.
          </p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon" style="background:#eff6ff; color:#0081FB;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
          </div>
          <h3 class="prod-card-title">Call-to-Action (CTA) Buttons</h3>
          <p class="prod-card-desc">
            Direct users with a single tap to open a tracked landing page URL or initiate an immediate phone call with your team.
          </p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon" style="background:#ecfdf5; color:#059669;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
          </div>
          <h3 class="prod-card-title">List Picker Messages</h3>
          <p class="prod-card-desc">
            Organize up to 10 structured options categorized by sections. Ideal for product catalogs, service menus, and FAQ hubs.
          </p>
        </div>
        <div class="prod-card">
          <div class="prod-card-icon" style="background:#fffbeb; color:#d97706;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
          </div>
          <h3 class="prod-card-title">Multi-Product Catalogs</h3>
          <p class="prod-card-desc">
            Display up to 30 items from your Meta catalog directly in chat. Customers add items to cart and check out in one thread.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- How to Build with HelloBotz -->
  <section class="prod-section prod-section-alt">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">Effortless Workflow</span>
        <h2 class="prod-section-title">Design Interactive Flows in HelloBotz</h2>
        <p class="prod-section-desc">
          Drag and drop interactive message blocks into your visual chatbot builder and publish in seconds.
        </p>
      </div>
      <div class="prod-grid-3">
        <div class="prod-card">
          <h3 class="prod-card-title">1. Visual Canvas</h3>
          <p class="prod-card-desc">Drag a "Buttons" or "List" node onto the canvas and enter your copy and button labels.</p>
        </div>
        <div class="prod-card">
          <h3 class="prod-card-title">2. Dynamic Routing</h3>
          <p class="prod-card-desc">Branch the flow based on which button the user clicks, triggering specific answers or webhook events.</p>
        </div>
        <div class="prod-card">
          <h3 class="prod-card-title">3. Live Analytics</h3>
          <p class="prod-card-desc">Monitor which buttons receive the most clicks to optimize conversion funnels in real time.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="prod-section">
    <div class="prod-container">
      <div class="prod-section-header">
        <span class="prod-section-badge">FAQs</span>
        <h2 class="prod-section-title">Frequently Asked Questions</h2>
      </div>
      <div style="max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; gap: 14px;">
        <div class="prod-faq-item" style="background:#fff; border:1px solid #e2e8f0; border-radius:12px; padding:20px 24px;">
          <h4 style="font-size:16px; font-weight:700; color:#111827; margin:0 0 8px 0;">Do interactive messages require Meta template approval?</h4>
          <p style="font-size:14px; color:#4b5563; margin:0; line-height:1.5;">When sent as outbound marketing broadcasts, template approval is required. In inbound support conversations (within the 24-hour service window), you can send custom interactive messages freely without pre-approval.</p>
        </div>
        <div class="prod-faq-item" style="background:#fff; border:1px solid #e2e8f0; border-radius:12px; padding:20px 24px;">
          <h4 style="font-size:16px; font-weight:700; color:#111827; margin:0 0 8px 0;">How many buttons can I include in a single message?</h4>
          <p style="font-size:14px; color:#4b5563; margin:0; line-height:1.5;">WhatsApp allows up to 3 Quick Reply buttons per message, or 1 Call-to-Action button with a website link or phone number. For more options, use List Messages (up to 10 choices).</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Final CTA Banner -->
  <section class="prod-section prod-section-alt" style="padding: 70px 0;">
    <div class="prod-container">
      <div style="background: linear-gradient(135deg, #4c1d95 0%, #0f172a 100%); border-radius: 24px; padding: 48px; text-align: center; color: #fff; box-shadow: 0 24px 50px rgba(0,0,0,0.18);">
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 16px; color:#fff;">Start Sending Interactive Messages with HelloBotz</h2>
        <p style="font-size: 1.05rem; color: #ddd6fe; max-width: 620px; margin: 0 auto 28px auto;">
          Deliver engaging conversational experiences that turn passive readers into active buyers.
        </p>
        <a href="<?php echo $bp; ?>auth/register" class="prod-btn-primary" style="background: #7c3aed; border-color: #7c3aed; font-size: 1.05rem; padding: 14px 32px; display: inline-flex;">
          Create Free Interactive Bot &rarr;
        </a>
      </div>
    </div>
  </section>
</div>

<?php include __DIR__ . "/../../includes/footer.php"; ?>
