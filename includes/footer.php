<?php if (!isset($bp)) { $bp = isset($basePath) ? $basePath : ""; } ?>
</main>

<?php
require_once dirname(__DIR__) . '/config/cms.php';
$fWa = cms_setting('support_whatsapp', '918050854445');
$fPhone = cms_setting('phone_number', '+91 80508 54445');
$fSalesEmail = cms_setting('sales_email', 'mail@hellobotz.com');
$fSupportEmail = cms_setting('support_email', 'support@hellobotz.com');
$fAddress = cms_setting('office_address', "HelloBotz AI Technologies Pvt Ltd\nShanthala Nagar, Ashok Nagar, Bengaluru, Karnataka 560025");
?>
  <!-- Scoped Footer & Map Styles -->
  <style>
  .footer-social-row {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-top: 0.75rem;
    flex-wrap: wrap;
  }
  .footer-social-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    border-radius: 10px;
    color: #ffffff !important;
    border: none;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.22);
    transition: transform 0.2s ease, filter 0.2s ease;
    text-decoration: none;
    cursor: pointer;
  }
  .footer-social-btn svg {
    width: 20px;
    height: 20px;
    fill: #ffffff !important;
    display: block;
  }
  .footer-social-btn:hover {
    transform: translateY(-2px);
    filter: brightness(1.12);
  }
  /* Original Brand Colors Always Active (No hover transition needed) */
  .footer-social-ig {
    background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%) !important;
  }
  .footer-social-fb {
    background: #1877F2 !important;
  }
  .footer-social-tg {
    background: #229ED9 !important;
  }
  .footer-social-li {
    background: #0A66C2 !important;
  }
  .footer-social-wa {
    background: #25D366 !important;
  }
  /* Professional 3-Column Footer with Embedded Map */
  .footer-pro-layout {
    display: grid !important;
    grid-template-columns: 1.35fr 0.95fr 1.45fr !important;
    gap: 3rem !important;
    align-items: start !important;
    padding-bottom: 2.5rem !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
  }
  .footer-brand-desc {
    font-size: 0.88rem;
    color: #94A3B8;
    line-height: 1.55;
    margin: 0.85rem 0 0;
    max-width: 24rem;
  }
  .footer-nav-col ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  .footer-nav-col li {
    margin-bottom: 0.75rem;
  }
  .footer-nav-col a {
    color: #94A3B8;
    text-decoration: none;
    font-size: 0.92rem;
    font-weight: 500;
    transition: color 0.2s ease, padding-left 0.2s ease;
    display: inline-block;
  }
  .footer-nav-col a:hover {
    color: #FFFFFF;
    padding-left: 4px;
  }
  .footer-map-pill {
    font-size: 0.75rem;
    color: #22D3EE !important;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 4px;
    padding: 3px 9px;
    border-radius: 6px;
    background: rgba(34, 211, 238, 0.1);
    border: 1px solid rgba(34, 211, 238, 0.25);
    transition: all 0.2s ease;
  }
  .footer-map-pill:hover {
    background: #22D3EE;
    color: #0F172A !important;
  }
  .footer-map-frame-wrap {
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.12);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    background: #1E293B;
  }
  @media (max-width: 1024px) {
    .footer-pro-layout {
      grid-template-columns: 1fr 1fr !important;
      gap: 2rem !important;
    }
    .footer-map-col {
      grid-column: 1 / -1 !important;
    }
  }
  @media (max-width: 640px) {
    .footer-pro-layout {
      grid-template-columns: 1fr !important;
      gap: 2rem !important;
    }
  }
  </style>

  <!-- Contact band before footer -->
  <section class="footer-contact-section" id="contact-section">
    <div class="container">
      <div class="footer-contact-grid">
        <div>
          <div class="footer-contact-heading" data-i18n="contact_title">Get in touch</div>
          <?php
          $defaultContactText = "Talk to our team about HelloBotz's WhatsApp, Instagram, Facebook & Telegram automation, and omnichannel setup for your business.";
          $activeContactText = isset($footerContactText) && !empty($footerContactText) ? $footerContactText : $defaultContactText;
          ?>
          <p style="margin:0 0 1rem;max-width:28rem"><?php echo htmlspecialchars($activeContactText); ?></p>
          <div class="footer-address">
            <div class="footer-address-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
              <span><?php echo nl2br(htmlspecialchars($fAddress)); ?></span>
            </div>
            <div class="footer-address-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
              <span><a href="https://wa.me/<?php echo urlencode($fWa); ?>" target="_blank" rel="noopener"><strong>Call / WhatsApp Us: <?php echo htmlspecialchars($fPhone); ?></strong></a></span>
            </div>
            <div class="footer-address-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/></svg>
              <span><a href="mailto:<?php echo htmlspecialchars($fSalesEmail); ?>"><strong>Send Enquiry Email: <?php echo htmlspecialchars($fSalesEmail); ?></strong></a></span>
            </div>
            <div class="footer-address-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/></svg>
              <span><a href="mailto:<?php echo htmlspecialchars($fSupportEmail); ?>"><strong>Email Technical Support: <?php echo htmlspecialchars($fSupportEmail); ?></strong></a></span>
            </div>
          </div>
          <div class="footer-app-download" style="margin-top:1.25rem">
            <strong style="display:block;margin-bottom:.65rem">Download HelloBotz App</strong>
            <div style="display:flex;flex-wrap:wrap;gap:.65rem">
              <a class="btn btn-sm btn-outline" href="/resources/download-ios-app/"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="display:inline-block;vertical-align:-2px;margin-right:4px"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M15.97 6.32c.67-.82 1.12-1.96.99-3.1-.97.04-2.14.65-2.83 1.45-.62.72-1.16 1.88-1.01 3 1.08.08 2.18-.53 2.85-1.35z"/></svg> App Store</a>
              <a class="btn btn-sm btn-outline" href="/resources/download-app/"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="display:inline-block;vertical-align:-2px;margin-right:4px"><path d="M3 20.5v-17c0-.55.45-1 1-1 .18 0 .35.05.5.14l14 8.5c.31.19.5.53.5.86s-.19.67-.5.86l-14 8.5c-.15.09-.32.14-.5.14-.55 0-1-.45-1-1z"/></svg> Google Play</a>
            </div>

          <div class="footer-meta-partner">
            <img src="<?php echo $bp; ?>assets/images/partners/meta-tech-partner.png" alt="Meta Tech Partner" width="120" height="60"
              onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
            <div class="meta-ph" style="display:none">Meta<br>Tech Partner</div>
            <div>
              <strong style="display:block;font-size:.9rem;color:#111">Meta Tech Partner</strong>
              <span style="font-size:.8rem;color:#6B7280">Official WhatsApp Business API solutions</span>
            </div>
          </div>
          </div>
        </div>
        <div>
          <div class="footer-contact-heading" data-i18n="contact_form_title">Send a message</div>
          <form class="footer-contact-form" action="javascript:void(0)" method="post" id="footer-contact-form" novalidate>
            <div class="form-group">
              <label class="form-label" for="fc-name">Name</label>
              <input type="text" class="form-input" id="fc-name" name="name" required placeholder="Your name">
            </div>
            <div class="form-group">
              <label class="form-label" for="fc-mobile">Mobile</label>
              <input type="tel" class="form-input" id="fc-mobile" name="mobile" required placeholder="+91 98765 43210">
            </div>
            <div class="form-group">
              <label class="form-label" for="fc-regarding">Regarding</label>
              <select class="form-input" id="fc-regarding" name="regarding" required>
                <option value="">Select topic</option>
                <option value="WhatsApp Business API">WhatsApp Business API</option>
                <option value="Omnichannel Platform">Omnichannel Platform</option>
                <option value="Pricing / Plans">Pricing / Plans</option>
                <option value="Affiliate / Partner">Affiliate / Partner</option>
                <option value="Technical Support">Technical Support</option>
                <option value="Demo Request">Demo Request</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label" for="fc-message">Message</label>
              <textarea class="form-input" id="fc-message" name="message" rows="3" required placeholder="How can we help?"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>

    </div>
  </section>

  <footer class="site-footer" role="contentinfo">
    <div class="container">
      <div class="footer-pro-layout">
        <!-- Column 1: Brand, Request Callback & Permanent Social Logos -->
        <div class="footer-brand-col">
          <a href="<?php echo $bp; ?>" class="logo" aria-label="<?php echo htmlspecialchars($SITE_NAME); ?> Home">
            <img src="<?php echo $bp; ?>assets/images/logo-footer.png" alt="<?php echo htmlspecialchars($SITE_NAME); ?>" class="logo-img" width="170" height="42" onerror="this.src='<?php echo $bp; ?>assets/images/logo.png'">
            <span class="logo-fallback" style="display:none;align-items:center;gap:0.4rem">
              <img src="<?php echo $bp; ?>assets/images/logo-icon.png" width="32" height="32" style="border-radius:8px" alt="<?php echo htmlspecialchars($SITE_NAME); ?>">
              <span style="font-weight:800;color:#fff">Hellobotz</span>
            </span>
          </a>
          <p class="footer-brand-desc">AI-Powered WhatsApp Business API &amp; Omnichannel Customer Automation Platform. Official Meta Tech Partner.</p>
          <div style="margin-top:1.15rem;display:flex;align-items:center;gap:0.75rem;">
            <button type="button" class="btn btn-primary btn-sm btn-callback-open">Request Callback</button>
          </div>
          <div class="footer-social-wrapper" style="margin-top:1.25rem;">
            <span style="display:block;font-size:0.75rem;text-transform:uppercase;letter-spacing:0.08em;color:#94A3B8;font-weight:700;margin-bottom:0.55rem;">Follow Us</span>
            <div class="footer-social-row" style="margin-top:0;">
              <a href="https://instagram.com/hellobotz" target="_blank" rel="noopener noreferrer" class="footer-social-btn footer-social-ig" aria-label="HelloBotz on Instagram" title="Instagram">
                <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
              </a>
              <a href="https://facebook.com/hellobotz" target="_blank" rel="noopener noreferrer" class="footer-social-btn footer-social-fb" aria-label="HelloBotz on Facebook" title="Facebook">
                <svg viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
              </a>
              <a href="https://t.me/hellobotz" target="_blank" rel="noopener noreferrer" class="footer-social-btn footer-social-tg" aria-label="HelloBotz on Telegram" title="Telegram">
                <svg viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.643-.204-.657-.643.136-.953l11.57-4.461c.536-.196 1.006.128.832.918z"/></svg>
              </a>
              <a href="https://linkedin.com/company/hellobotz" target="_blank" rel="noopener noreferrer" class="footer-social-btn footer-social-li" aria-label="HelloBotz on LinkedIn" title="LinkedIn">
                <svg viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
              </a>
              <a href="https://wa.me/<?php echo urlencode($fWa); ?>" target="_blank" rel="noopener noreferrer" class="footer-social-btn footer-social-wa" aria-label="HelloBotz on WhatsApp" title="WhatsApp">
                <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.301-.15-1.78-.878-2.056-.978-.276-.1-.477-.15-.678.15-.2.301-.778.978-.954 1.179-.176.2-.351.226-.652.076-.301-.15-1.27-.468-2.42-1.493-.895-.799-1.5-1.786-1.676-2.087-.176-.301-.019-.464.132-.614.136-.135.301-.351.452-.527.15-.176.2-.301.301-.502.101-.201.05-.376-.025-.526-.075-.15-.678-1.632-.929-2.237-.245-.59-.494-.51-.678-.519-.176-.01-.376-.01-.577-.01-.201 0-.527.075-.803.376-.276.301-1.054 1.029-1.054 2.509 0 1.48 1.079 2.909 1.23 3.11.15.201 2.124 3.243 5.145 4.548.719.311 1.28.497 1.718.636.723.23 1.381.198 1.901.12.58-.088 1.78-.727 2.03-1.43.25-.703.25-1.305.176-1.43-.075-.125-.276-.2-.577-.35zM12.04 21.75c-1.75 0-3.46-.46-4.98-1.33l-.36-.21-3.7 1.22 1.24-3.6-.23-.37c-.96-1.55-1.47-3.34-1.47-5.18 0-5.37 4.37-9.74 9.74-9.74 2.6 0 5.04 1.01 6.88 2.85 1.84 1.84 2.85 4.28 2.85 6.88 0 5.37-4.37 9.74-9.74 9.74zM12.04 0C5.39 0 0 5.39 0 12.04c0 2.12.55 4.19 1.6 6.01L0 24l6.15-1.57c1.76.96 3.75 1.47 5.89 1.47 6.65 0 12.04-5.39 12.04-12.04C24.08 5.39 18.69 0 12.04 0z"/></svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Column 2: Important Links (Only 6 Core Links) -->
        <div class="footer-nav-col">
          <div class="footer-heading">Important Links</div>
          <ul>
            <li><a href="<?php echo $bp; ?>channel/whatsapp/">WhatsApp Business API</a></li>
            <li><a href="<?php echo $bp; ?>products/chatbot/">AI Chatbot &amp; Automation</a></li>
            <li><a href="<?php echo $bp; ?>pricing/">Pricing Plans</a></li>
            <li><a href="<?php echo $bp; ?>partners/">Partner Program</a></li>
            <li><a href="<?php echo $bp; ?>company/about/">About HelloBotz</a></li>
            <li><a href="<?php echo $bp; ?>contact/">Contact Us</a></li>
          </ul>
        </div>

        <!-- Column 3: Head Office Map Directly In Footer -->
        <div class="footer-map-col">
          <div class="footer-heading" style="display:flex;align-items:center;justify-content:space-between;margin-bottom:0.75rem;">
            <span style="display:inline-flex;align-items:center;gap:6px;color:#FFFFFF;font-weight:700;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#22D3EE" stroke-width="2.2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
              Head Office
            </span>
            <a href="https://www.google.com/maps/search/?api=1&amp;query=Shanthala+Nagar,+Ashok+Nagar,+Bengaluru,+Karnataka+560025" target="_blank" rel="noopener noreferrer" class="footer-map-pill">
              Google Maps ↗
            </a>
          </div>
          <p style="font-size:0.83rem;color:#94A3B8;margin:0 0 0.85rem;line-height:1.5;">
            <strong style="color:#FFFFFF;">HelloBotz AI Technologies Pvt Ltd</strong><br>
            Shanthala Nagar, Ashok Nagar, Bengaluru, Karnataka 560025
          </p>
          <div class="footer-map-frame-wrap">
            <iframe
              title="HelloBotz Head Office Map"
              src="https://maps.google.com/maps?q=Shanthala+Nagar,+Ashok+Nagar,+Bengaluru,+Karnataka+560025&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
              width="100%"
              height="190"
              style="border:0;display:block;"
              loading="lazy"
              allowfullscreen
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <p class="footer-copy">&copy; <?php echo date('Y'); ?> HelloBotz AI Technologies Pvt Ltd. All rights reserved.</p>
        <div class="footer-legal">
          <a href="/privacy/">Privacy Policy</a>
          <a href="/terms/">Terms of Service</a>
          <a href="/security/">Security</a>
          <a href="/cookie-policy/">Cookie Policy</a>
        </div>
      </div>
    </div>
  </footer>

  <?php include __DIR__ . '/whatsapp-widget.php'; ?>
  <?php include __DIR__ . '/demo-popup.php'; ?>
  <?php include __DIR__ . '/callback-popup.php'; ?>
  <?php include __DIR__ . '/offer-popup.php'; ?>
  <?php include __DIR__ . '/trial-popup.php'; ?>
  <!-- Google Website Translator Integration -->
  <div id="google_translate_element" style="display:none !important;" aria-hidden="true"></div>
  <script type="text/javascript">
    function googleTranslateElementInit() {
      if (window.google && window.google.translate) {
        new window.google.translate.TranslateElement({
          pageLanguage: 'en',
          includedLanguages: 'en,ar,es,pt,de,fr',
          autoDisplay: false
        }, 'google_translate_element');
      }
      if (window.HelloBotzI18n && typeof window.HelloBotzI18n.onGoogleInit === 'function') {
        window.HelloBotzI18n.onGoogleInit();
      }
    }
  </script>
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" defer></script>
  <script src="/i18n.js?v=25" defer></script>
  <script src="/main.js?v=40" defer></script>

<script src="/assets/js/mobile-menu.js?v=38"></script>

  <script src="/forms.js?v=22" defer></script>
  <script src="/assets/js/robot-chatbot.js?v=5" defer></script>
  <?php echo cms_setting('custom_footer_code', ''); ?>
</body>
</html>
