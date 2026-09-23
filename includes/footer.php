<?php if (!isset($bp)) { $bp = isset($basePath) ? $basePath : ""; } ?>
</main>

<?php
require_once dirname(__DIR__) . '/config/cms.php';
$fWa = cms_setting('support_whatsapp', '918050854445');
$fPhone = cms_setting('phone_number', '+91 80508 54445');
$fSalesEmail = cms_setting('sales_email', 'mail@hellobotz.com');
$fSupportEmail = cms_setting('support_email', 'support@hellobotz.com');
$fAddress = cms_setting('office_address', "Bangalore Karnataka 560030");
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
    .footer-social-yt {
    background: #FF0000 !important;
  }
  .footer-social-wa {
    background: #25D366 !important;
  }
  /* Professional 5-Column Footer with Embedded Map */
  .footer-pro-layout {
    display: grid !important;
    grid-template-columns: 1.25fr 0.9fr 0.95fr 0.75fr 1.35fr !important;
    gap: 2.2rem !important;
    align-items: start !important;
    padding-bottom: 2.5rem !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
  }
  .footer-heading {
    font-size: 1rem !important;
    font-weight: 700 !important;
    color: #FFFFFF !important;
    margin-bottom: 1.15rem !important;
    letter-spacing: -0.01em !important;
    text-transform: none !important;
  }
  .footer-channels-list {
    list-style: none !important;
    margin: 0 !important;
    padding: 0 !important;
  }
  .footer-channels-list li {
    margin-bottom: 0.75rem !important;
  }
  .footer-channel-link {
    display: inline-flex !important;
    align-items: center !important;
    gap: 0.65rem !important;
    color: #94A3B8 !important;
    text-decoration: none !important;
    font-size: 0.92rem !important;
    font-weight: 500 !important;
    transition: color 0.2s ease, transform 0.2s ease !important;
  }
  .footer-channel-link:hover {
    color: #FFFFFF !important;
    transform: translateX(3px) !important;
  }
  .channel-icon-pill {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: 28px !important;
    height: 28px !important;
    border-radius: 8px !important;
    flex-shrink: 0 !important;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.25) !important;
  }
  .channel-icon-pill svg {
    display: block !important;
  }
  .ch-wa {
    background: #25D366 !important;
  }
  .ch-ig {
    background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%) !important;
  }
  .ch-fb {
    background: #1877F2 !important;
  }
  .ch-tg {
    background: #229ED9 !important;
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
  .footer-global-presence {
    margin-top: 0.85rem;
    padding: 0.55rem 0.85rem;
    background: rgba(30, 41, 59, 0.7);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 0.35rem 0.5rem;
    font-size: 0.82rem;
    font-weight: 600;
    color: #22D3EE;
    letter-spacing: 0.02em;
    text-align: center;
  }
  .footer-global-presence .presence-tag {
    color: #E2E8F0;
    transition: color 0.2s ease;
  }
  .footer-global-presence .presence-divider {
    color: #64748B;
    font-weight: 400;
  }
  @media (max-width: 1200px) {
    .footer-pro-layout {
      grid-template-columns: 1.2fr 1fr 1fr !important;
      gap: 2rem !important;
    }
    .footer-map-col {
      grid-column: 1 / -1 !important;
    }
  }
  @media (max-width: 768px) {
    .footer-pro-layout {
      grid-template-columns: 1fr 1fr !important;
      gap: 2rem !important;
    }
    .footer-brand-col {
      grid-column: 1 / -1 !important;
    }
    .footer-map-col {
      grid-column: 1 / -1 !important;
    }
  }
  @media (max-width: 480px) {
    .footer-pro-layout {
      grid-template-columns: 1fr !important;
      gap: 1.75rem !important;
    }
  }

  /* =========================================================
     ENTERPRISE TECH CONTACT SECTION (HELLOBOTZ AUTHENTIC DESIGN)
     High-resolution background image, kinetic ambient motion, 
     neon WhatsApp/AI wave streams, and frosted glass cards.
     ========================================================= */
  .footer-contact-section {
    position: relative;
    overflow: hidden;
    padding: 2.25rem 0 2.5rem !important;
    background-color: #080D1A;
    background-image: linear-gradient(180deg, rgba(8, 13, 26, 0.78) 0%, rgba(11, 18, 36, 0.68) 50%, rgba(8, 13, 26, 0.94) 100%), url('<?php echo $bp; ?>assets/images/contact-bg.jpg');
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  }

  /* High-Resolution Tech Background Layer with Kinetic Motion */
  .contact-bg-media-wrap {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 1;
    pointer-events: none;
  }
  .contact-bg-image-layer {
    position: absolute;
    inset: -6%;
    width: 112%;
    height: 112%;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    animation: contactBgKenBurns 24s ease-in-out infinite alternate;
    will-change: transform;
    opacity: 0.95;
  }
  @keyframes contactBgKenBurns {
    0% { transform: scale(1) translate(0, 0); }
    50% { transform: scale(1.05) translate(-1.5%, -1%); }
    100% { transform: scale(1.08) translate(1%, 0.8%); }
  }
  .contact-bg-overlay-grad {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 50% 45%, rgba(8, 13, 26, 0.42) 0%, rgba(8, 13, 26, 0.82) 75%, rgba(8, 13, 26, 0.96) 100%);
    pointer-events: none;
  }

  /* Dynamic Glowing Radial Auras */
  .contact-bg-orb {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    z-index: 1;
    filter: blur(80px);
    opacity: 0.65;
    will-change: transform, opacity;
  }
  .contact-bg-orb-emerald {
    top: -60px;
    left: -80px;
    width: 440px;
    height: 440px;
    background: radial-gradient(circle, rgba(16, 185, 129, 0.35) 0%, rgba(5, 150, 105, 0.15) 50%, transparent 75%);
    animation: contactOrbPulse1 12s ease-in-out infinite alternate;
  }
  .contact-bg-orb-indigo {
    top: 30px;
    right: -100px;
    width: 460px;
    height: 460px;
    background: radial-gradient(circle, rgba(99, 102, 241, 0.32) 0%, rgba(139, 92, 246, 0.15) 50%, transparent 75%);
    animation: contactOrbPulse2 14s ease-in-out infinite alternate;
  }
  .contact-bg-orb-cyan {
    bottom: -80px;
    left: 35%;
    width: 380px;
    height: 380px;
    background: radial-gradient(circle, rgba(6, 182, 212, 0.28) 0%, rgba(14, 165, 233, 0.1) 50%, transparent 75%);
    animation: contactOrbPulse3 10s ease-in-out infinite alternate;
  }

  @keyframes contactOrbPulse1 {
    0% { transform: translate(0, 0) scale(1); opacity: 0.55; }
    50% { transform: translate(40px, 30px) scale(1.1); opacity: 0.75; }
    100% { transform: translate(20px, -20px) scale(0.95); opacity: 0.6; }
  }
  @keyframes contactOrbPulse2 {
    0% { transform: translate(0, 0) scale(1); opacity: 0.6; }
    50% { transform: translate(-45px, 25px) scale(1.12); opacity: 0.8; }
    100% { transform: translate(-20px, 40px) scale(0.98); opacity: 0.65; }
  }
  @keyframes contactOrbPulse3 {
    0% { transform: scale(0.95) translate(0, 0); opacity: 0.5; }
    100% { transform: scale(1.15) translate(30px, -20px); opacity: 0.7; }
  }

  /* High-Tech Dotted Mesh Overlay */
  .contact-bg-mesh {
    position: absolute;
    inset: 0;
    pointer-events: none;
    z-index: 1;
    background-image: radial-gradient(rgba(99, 102, 241, 0.16) 1.2px, transparent 1.2px);
    background-size: 24px 24px;
    -webkit-mask-image: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.9) 20%, rgba(0, 0, 0, 0.3) 70%, transparent 100%);
    mask-image: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.9) 20%, rgba(0, 0, 0, 0.3) 70%, transparent 100%);
  }

  /* Vector SVG Communication Stream Paths */
  .contact-bg-streams {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
    opacity: 0.45;
  }

  /* Floating SaaS Status Chips */
  .contact-float-chip {
    position: absolute;
    z-index: 2;
    pointer-events: none;
    display: none;
  }
  @media (min-width: 1280px) {
    .contact-float-chip {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.45rem 0.85rem;
      border-radius: 9999px;
      background: rgba(15, 23, 42, 0.88);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.16);
      box-shadow: 0 12px 28px -6px rgba(0, 0, 0, 0.5), 0 0 15px rgba(16, 185, 129, 0.2);
      animation: contactChipFloat 6s ease-in-out infinite alternate;
    }
  }
  .contact-float-chip-left {
    top: 36px;
    left: 2%;
  }
  .contact-float-chip-right {
    bottom: 40px;
    right: 2%;
    animation-delay: -3s;
  }
  @keyframes contactChipFloat {
    0% { transform: translateY(0); }
    100% { transform: translateY(-10px); }
  }
  .contact-chip-icon-wa {
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: #25D366;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }
  .contact-chip-icon-wa svg {
    width: 13px;
    height: 13px;
    fill: currentColor;
  }
  .contact-chip-icon-ai {
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: linear-gradient(135deg, #6366F1, #8B5CF6);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }
  .contact-chip-icon-ai svg {
    width: 13px;
    height: 13px;
    stroke: currentColor;
  }
  .contact-chip-title {
    font-size: 0.76rem;
    font-weight: 700;
    color: #FFFFFF !important;
    display: block;
    line-height: 1.2;
  }
  .contact-chip-sub {
    font-size: 0.68rem;
    font-weight: 600;
    color: #34D399;
    display: block;
  }
  .contact-chip-sub.ai-sub {
    color: #A78BFA;
  }

  .contact-section-head {
    text-align: center;
    max-width: 580px;
    margin: 0 auto 1.35rem;
    position: relative;
    z-index: 3;
  }
  .contact-pill-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    padding: 0.28rem 0.85rem;
    border-radius: 9999px;
    background: rgba(16, 185, 129, 0.16);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(16, 185, 129, 0.4);
    box-shadow: 0 0 16px rgba(16, 185, 129, 0.2);
    font-size: 0.72rem;
    font-weight: 700;
    color: #34D399 !important;
    margin-bottom: 0.5rem;
    letter-spacing: 0.02em;
  }
  .contact-pill-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #10B981;
    box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.35);
    animation: contactDotBlink 2s ease-in-out infinite;
  }
  @keyframes contactDotBlink {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.6; transform: scale(1.2); }
  }
  .contact-section-head h2 {
    font-size: 1.45rem !important;
    font-weight: 800;
    line-height: 1.25;
    color: #FFFFFF !important;
    text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
    margin: 0 0 0.35rem;
    letter-spacing: -0.02em;
  }
  .contact-section-head p {
    font-size: 0.82rem !important;
    color: #CBD5E1 !important;
    line-height: 1.4;
    margin: 0;
    text-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);
  }

  /* Two-Column Layout - Ultra Compact & Balanced */
  .footer-contact-grid {
    display: grid !important;
    grid-template-columns: 1fr 1.05fr !important;
    gap: 1.15rem !important;
    align-items: stretch !important;
    position: relative;
    z-index: 3;
    max-width: 820px !important;
    margin: 0 auto;
  }

  /* Master Card Architecture */
  .contact-glass-card {
    background: rgba(255, 255, 255, 0.96) !important;
    backdrop-filter: blur(20px) !important;
    -webkit-backdrop-filter: blur(20px) !important;
    border: 1px solid rgba(255, 255, 255, 0.85) !important;
    border-radius: 14px !important;
    padding: 1.15rem 1.25rem !important;
    box-shadow: 0 12px 35px -10px rgba(0, 0, 0, 0.35), 0 0 0 1px rgba(16, 185, 129, 0.15) !important;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }
  .contact-glass-card:hover {
    box-shadow: 0 16px 45px -10px rgba(0, 0, 0, 0.45), 0 0 0 1.5px rgba(16, 185, 129, 0.3) !important;
    transform: translateY(-2px);
  }

  /* Top accent strip on right form card */
  .contact-card-glow-bar {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, #10B981 0%, #6366F1 50%, #06B6D4 100%);
  }

  /* Card Headings */
  .contact-card-title-group {
    display: flex;
    align-items: flex-start;
    gap: 0.65rem;
    margin-bottom: 0.75rem;
  }
  .contact-card-icon-pill {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }
  .contact-card-icon-pill.pill-green {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.15), rgba(5, 150, 105, 0.25));
    color: #059669;
    border: 1px solid rgba(16, 185, 129, 0.25);
  }
  .contact-card-icon-pill.pill-purple {
    background: linear-gradient(135deg, rgba(99, 102, 241, 0.15), rgba(139, 92, 246, 0.25));
    color: #4F46E5;
    border: 1px solid rgba(99, 102, 241, 0.25);
  }
  .contact-card-icon-pill svg {
    width: 15px;
    height: 15px;
  }
  .contact-card-title {
    font-size: 1.05rem;
    font-weight: 700;
    color: #0F172A;
    margin: 0 0 0.15rem;
    letter-spacing: -0.015em;
  }
  .contact-card-desc {
    font-size: 0.76rem;
    color: #64748B;
    line-height: 1.35;
    margin: 0;
  }

  /* Contact Details Interactive List */
  .contact-details-list {
    display: flex;
    flex-direction: column;
    gap: 0.4rem;
    margin-bottom: 0.75rem;
  }
  .contact-item-row {
    display: flex;
    align-items: center;
    gap: 0.6rem;
    padding: 0.38rem 0.65rem;
    border-radius: 9px;
    background: rgba(248, 250, 252, 0.85);
    border: 1px solid rgba(226, 232, 240, 0.9);
    transition: all 0.2s ease;
    text-decoration: none;
    color: inherit;
  }
  a.contact-item-row:hover {
    background: #ffffff;
    border-color: rgba(99, 102, 241, 0.35);
    transform: translateX(3px);
    box-shadow: 0 3px 8px -2px rgba(15, 23, 42, 0.06);
  }
  .contact-item-icon {
    width: 26px;
    height: 26px;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }
  .icon-loc {
    background: #F1F5F9;
    color: #475569;
  }
  .icon-phone {
    background: rgba(37, 211, 102, 0.12);
    color: #059669;
  }
  .icon-sales {
    background: rgba(99, 102, 241, 0.12);
    color: #4F46E5;
  }
  .icon-support {
    background: rgba(6, 182, 212, 0.12);
    color: #0891B2;
  }
  .contact-item-icon svg {
    width: 13px;
    height: 13px;
  }
  .contact-item-body {
    flex: 1;
    min-width: 0;
  }
  .contact-item-label {
    font-size: 0.62rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: #64748B;
    margin-bottom: 1px;
  }
  .contact-item-val {
    font-size: 0.78rem;
    font-weight: 600;
    color: #0F172A;
    line-height: 1.25;
    word-break: break-word;
  }
  .contact-item-val.highlight-green {
    color: #059669;
    font-weight: 700;
  }
  .contact-item-arrow {
    align-self: center;
    color: #94A3B8;
    font-size: 0.85rem;
    font-weight: 600;
    transition: transform 0.2s ease, color 0.2s ease;
  }
  a.contact-item-row:hover .contact-item-arrow {
    transform: translateX(2px);
    color: #4F46E5;
  }

  /* App Download Section */
  .contact-app-block {
    padding-top: 0.5rem;
    border-top: 1px solid rgba(226, 232, 240, 0.8);
    margin-bottom: 0.65rem;
  }
  .contact-app-label {
    display: block;
    font-size: 0.65rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: #475569;
    margin-bottom: 0.35rem;
  }
  .contact-app-btns {
    display: flex;
    flex-wrap: wrap;
    gap: 0.45rem;
  }
  .contact-app-link {
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
    padding: 0.32rem 0.65rem;
    border-radius: 7px;
    background: #0F172A;
    color: #ffffff !important;
    text-decoration: none;
    font-size: 0.72rem;
    font-weight: 600;
    transition: all 0.2s ease;
    box-shadow: 0 2px 6px rgba(15, 23, 42, 0.1);
  }
  .contact-app-link:hover {
    background: #1E293B;
    transform: translateY(-1px);
    box-shadow: 0 4px 10px rgba(15, 23, 42, 0.18);
  }
  .contact-app-link svg {
    width: 12px;
    height: 12px;
    fill: currentColor;
  }

  /* Meta Tech Partner Card Inside Glass */
  .contact-meta-card {
    display: flex;
    align-items: center;
    gap: 0.65rem;
    padding: 0.45rem 0.7rem;
    border-radius: 10px;
    background: linear-gradient(135deg, rgba(240, 249, 255, 0.9), rgba(245, 243, 255, 0.9));
    border: 1px solid rgba(207, 222, 247, 0.8);
  }
  .contact-meta-card img {
    width: 75px;
    height: auto;
    max-height: 32px;
    object-fit: contain;
    filter: drop-shadow(0 1px 2px rgba(0,0,0,0.06));
  }
  .meta-title-flex {
    display: flex;
    align-items: center;
    gap: 0.25rem;
  }
  .meta-title-flex strong {
    font-size: 0.78rem;
  }
  .meta-blue-check {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #0081FB;
    color: #fff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 0.55rem;
    font-weight: 900;
  }
  .contact-meta-sub {
    font-size: 0.68rem !important;
    color: #64748B;
    margin: 0;
  }

  /* Modern Glassmorphic Form Styling - Compact Pro */
  .footer-contact-form {
    display: flex;
    flex-direction: column;
    gap: 0.55rem;
  }
  .contact-form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0.55rem;
  }
  .contact-field-group {
    display: flex;
    flex-direction: column;
    gap: 0.18rem;
  }
  .contact-field-label {
    font-size: 0.72rem;
    font-weight: 700;
    color: #1E293B;
    display: flex;
    align-items: center;
    gap: 0.2rem;
  }
  .contact-field-label .required-star {
    color: #EF4444;
  }
  .contact-input-wrap {
    position: relative;
    display: flex;
    align-items: center;
  }
  .contact-input-icon {
    position: absolute;
    left: 0.65rem;
    width: 14px;
    height: 14px;
    color: #94A3B8;
    pointer-events: none;
    transition: color 0.2s ease;
  }
  .contact-glass-card .form-input {
    width: 100%;
    height: 35px;
    background: #ffffff !important;
    border: 1.5px solid #CBD5E1 !important;
    color: #0F172A !important;
    border-radius: 8px !important;
    font-size: 0.8rem !important;
    font-family: inherit !important;
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03);
    box-sizing: border-box !important;
  }
  .contact-input-wrap .form-input {
    padding-left: 2.15rem !important;
    padding-right: 0.65rem !important;
  }
  .contact-glass-card select.form-input {
    height: 35px !important;
    line-height: normal !important;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    padding-right: 1.8rem !important;
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    appearance: none !important;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%2364748B' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E") !important;
    background-repeat: no-repeat !important;
    background-position: right 0.65rem center !important;
    background-size: 12px !important;
    cursor: pointer;
  }
  .contact-glass-card .form-input:focus {
    outline: none !important;
    border-color: #6366F1 !important;
    box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.16) !important;
  }
  .contact-input-wrap:focus-within .contact-input-icon {
    color: #6366F1;
  }
  .contact-glass-card textarea.form-input {
    height: 48px !important;
    min-height: 48px !important;
    padding: 0.45rem 0.65rem !important;
    font-size: 0.8rem !important;
    line-height: 1.35 !important;
    resize: vertical;
  }

  /* Submit Button & Security Assurance */
  .contact-form-actions {
    display: flex;
    flex-direction: column;
    gap: 0.45rem;
    margin-top: 0.2rem;
  }
  .btn-contact-submit {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.45rem;
    width: 100%;
    height: 38px;
    border-radius: 8px;
    background: linear-gradient(135deg, #10B981 0%, #059669 100%);
    color: #ffffff;
    font-weight: 700;
    font-size: 0.85rem;
    border: none;
    cursor: pointer;
    box-shadow: 0 4px 14px -2px rgba(16, 185, 129, 0.4);
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .btn-contact-submit:hover {
    transform: translateY(-1px);
    box-shadow: 0 8px 18px -2px rgba(16, 185, 129, 0.5);
    background: linear-gradient(135deg, #059669 0%, #047857 100%);
  }
  .btn-contact-submit:active {
    transform: translateY(0);
  }
  .btn-contact-submit svg {
    width: 14px;
    height: 14px;
    transition: transform 0.2s ease;
  }
  .btn-contact-submit:hover svg {
    transform: translateX(3px);
  }
  .contact-security-guarantee {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.3rem;
    font-size: 0.68rem;
    color: #64748B;
  }
  .contact-security-guarantee svg {
    width: 12px;
    height: 12px;
    color: #10B981;
  }

  /* Pro Dark Theme Glassmorphism for Contact Section */
  html[data-theme="dark"] .contact-glass-card,
  body.dark-theme .contact-glass-card,
  .dark-mode .contact-glass-card {
    background: rgba(15, 23, 42, 0.84) !important;
    border: 1px solid rgba(255, 255, 255, 0.12) !important;
    box-shadow: 0 20px 50px -10px rgba(0, 0, 0, 0.7), 0 0 0 1px rgba(16, 185, 129, 0.2) !important;
    color: #F8FAFC !important;
  }
  html[data-theme="dark"] .contact-card-title,
  body.dark-theme .contact-card-title,
  .dark-mode .contact-card-title {
    color: #FFFFFF !important;
  }
  html[data-theme="dark"] .contact-card-desc,
  body.dark-theme .contact-card-desc,
  .dark-mode .contact-card-desc {
    color: #94A3B8 !important;
  }
  html[data-theme="dark"] .contact-item-row,
  body.dark-theme .contact-item-row,
  .dark-mode .contact-item-row {
    background: rgba(30, 41, 59, 0.7) !important;
    border-color: rgba(255, 255, 255, 0.08) !important;
    color: #F1F5F9 !important;
  }
  html[data-theme="dark"] a.contact-item-row:hover,
  body.dark-theme a.contact-item-row:hover,
  .dark-mode a.contact-item-row:hover {
    background: rgba(51, 65, 85, 0.8) !important;
    border-color: rgba(99, 102, 241, 0.4) !important;
  }
  html[data-theme="dark"] .contact-item-label,
  body.dark-theme .contact-item-label,
  .dark-mode .contact-item-label {
    color: #94A3B8 !important;
  }
  html[data-theme="dark"] .contact-item-val,
  body.dark-theme .contact-item-val,
  .dark-mode .contact-item-val {
    color: #F8FAFC !important;
  }
  html[data-theme="dark"] .icon-loc,
  body.dark-theme .icon-loc,
  .dark-mode .icon-loc {
    background: rgba(51, 65, 85, 0.6) !important;
    color: #CBD5E1 !important;
  }
  html[data-theme="dark"] .contact-field-label,
  body.dark-theme .contact-field-label,
  .dark-mode .contact-field-label {
    color: #E2E8F0 !important;
  }
  html[data-theme="dark"] .contact-glass-card .form-input,
  body.dark-theme .contact-glass-card .form-input,
  .dark-mode .contact-glass-card .form-input {
    background: rgba(15, 23, 42, 0.88) !important;
    border: 1.5px solid rgba(255, 255, 255, 0.12) !important;
    color: #F8FAFC !important;
  }
  html[data-theme="dark"] .contact-glass-card .form-input:focus,
  body.dark-theme .contact-glass-card .form-input:focus,
  .dark-mode .contact-glass-card .form-input:focus {
    background: #0B1120 !important;
    border-color: #10B981 !important;
    box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.22) !important;
  }
  html[data-theme="dark"] .contact-glass-card .form-input::placeholder,
  body.dark-theme .contact-glass-card .form-input::placeholder,
  .dark-mode .contact-glass-card .form-input::placeholder {
    color: #64748B !important;
  }
  html[data-theme="dark"] .contact-meta-card,
  body.dark-theme .contact-meta-card,
  .dark-mode .contact-meta-card {
    background: linear-gradient(135deg, rgba(30, 41, 59, 0.85), rgba(15, 23, 42, 0.85)) !important;
    border-color: rgba(255, 255, 255, 0.1) !important;
  }
  html[data-theme="dark"] .contact-meta-card strong,
  body.dark-theme .contact-meta-card strong,
  .dark-mode .contact-meta-card strong {
    color: #F8FAFC !important;
  }
  html[data-theme="dark"] .contact-meta-card span,
  body.dark-theme .contact-meta-card span,
  .dark-mode .contact-meta-card span {
    color: #94A3B8 !important;
  }
  html[data-theme="dark"] .contact-app-block,
  body.dark-theme .contact-app-block,
  .dark-mode .contact-app-block {
    border-top-color: rgba(255, 255, 255, 0.08) !important;
  }
  html[data-theme="dark"] .contact-app-label,
  body.dark-theme .contact-app-label,
  .dark-mode .contact-app-label {
    color: #94A3B8 !important;
  }
  html[data-theme="dark"] .contact-app-link,
  body.dark-theme .contact-app-link,
  .dark-mode .contact-app-link {
    background: #1E293B !important;
    border: 1px solid rgba(255, 255, 255, 0.1) !important;
  }
  html[data-theme="dark"] .contact-security-guarantee,
  body.dark-theme .contact-security-guarantee,
  .dark-mode .contact-security-guarantee {
    color: #94A3B8 !important;
  }

  /* Responsive Adjustments */
  @media (max-width: 1024px) {
    .footer-contact-grid {
      grid-template-columns: 1fr !important;
      gap: 1.25rem !important;
    }
    .footer-contact-section {
      padding: 2.75rem 0 3.25rem;
    }
  }
  @media (max-width: 640px) {
    .contact-form-row {
      grid-template-columns: 1fr !important;
    }
    .contact-glass-card {
      padding: 1.2rem 1rem !important;
      border-radius: 14px !important;
    }
    .contact-section-head h2 {
      font-size: 1.5rem !important;
    }
  }
  </style>

  <!-- Contact band before footer -->
  <section class="footer-contact-section" id="contact-section">
    <!-- High-Resolution Tech Background Visual with Kinetic Motion -->
    <div class="contact-bg-media-wrap" aria-hidden="true">
      <div class="contact-bg-image-layer" style="background-image: url('<?php echo $bp; ?>assets/images/contact-bg.jpg');"></div>
      <div class="contact-bg-overlay-grad"></div>
    </div>

    <!-- Dynamic Glowing Radial Auras -->
    <div class="contact-bg-orb contact-bg-orb-emerald" aria-hidden="true"></div>
    <div class="contact-bg-orb contact-bg-orb-indigo" aria-hidden="true"></div>
    <div class="contact-bg-orb contact-bg-orb-cyan" aria-hidden="true"></div>

    <!-- High-Tech Dotted Mesh Overlay -->
    <div class="contact-bg-mesh" aria-hidden="true"></div>

    <!-- Vector SVG Communication Stream Paths -->
    <svg class="contact-bg-streams" viewBox="0 0 1440 650" fill="none" preserveAspectRatio="none" aria-hidden="true">
      <path d="M-100 180 C 250 80, 500 420, 850 200 C 1150 40, 1380 320, 1600 160" stroke="url(#cStreamGrad1)" stroke-width="2" stroke-dasharray="6 6" opacity="0.45" />
      <path d="M-100 380 C 200 480, 550 160, 950 360 C 1250 500, 1420 200, 1600 320" stroke="url(#cStreamGrad2)" stroke-width="2" stroke-dasharray="8 8" opacity="0.35" />
      <circle cx="380" cy="240" r="4" fill="#10B981" opacity="0.6"/>
      <circle cx="950" cy="360" r="5" fill="#6366F1" opacity="0.6"/>
      <circle cx="1250" cy="180" r="4" fill="#06B6D4" opacity="0.6"/>
      <defs>
        <linearGradient id="cStreamGrad1" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#10B981" stop-opacity="0.3"/>
          <stop offset="50%" stop-color="#6366F1" stop-opacity="0.7"/>
          <stop offset="100%" stop-color="#06B6D4" stop-opacity="0.3"/>
        </linearGradient>
        <linearGradient id="cStreamGrad2" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#06B6D4" stop-opacity="0.3"/>
          <stop offset="50%" stop-color="#10B981" stop-opacity="0.6"/>
          <stop offset="100%" stop-color="#8B5CF6" stop-opacity="0.3"/>
        </linearGradient>
      </defs>
    </svg>

    <!-- Floating SaaS Status Chips -->
    <div class="contact-float-chip contact-float-chip-left" aria-hidden="true">
      <div class="contact-chip-icon-wa">
        <svg viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.63C8.75 21.41 10.38 21.82 12.04 21.82C17.5 21.82 21.95 17.37 21.95 11.91C21.95 6.45 17.5 2 12.04 2ZM12.04 20.15C10.56 20.15 9.11 19.76 7.85 19.01L7.55 18.83L4.43 19.65L5.26 16.61L5.07 16.3C4.24 14.98 3.8 13.47 3.8 11.91C3.8 7.37 7.5 3.67 12.04 3.67C16.58 3.67 20.28 7.37 20.28 11.91C20.28 16.45 16.58 20.15 12.04 20.15Z"/></svg>
      </div>
      <div>
        <span class="contact-chip-title">WhatsApp API</span>
        <span class="contact-chip-sub">⚡ 99.9% Delivery Rate</span>
      </div>
    </div>

    <div class="contact-float-chip contact-float-chip-right" aria-hidden="true">
      <div class="contact-chip-icon-ai">
        <svg viewBox="0 0 24 24" fill="none"><path d="M12 2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2 2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"/><rect x="4" y="8" width="16" height="12" rx="4"/><circle cx="9" cy="13" r="1.5" fill="currentColor"/><circle cx="15" cy="13" r="1.5" fill="currentColor"/><path d="M9 17h6"/></svg>
      </div>
      <div>
        <span class="contact-chip-title">AI Automation</span>
        <span class="contact-chip-sub ai-sub">✦ &lt;1s Response Time</span>
      </div>
    </div>

    <div class="container" style="position:relative;z-index:3;">
      <!-- Section Header -->
      <div class="contact-section-head">
        <div class="contact-pill-badge">
          <span class="contact-pill-dot"></span>
          <span>Official Meta Tech Partner • Instant 24/7 Response</span>
        </div>
        <h2>Let's Power Your Business Communication</h2>
        <p>Talk to our specialists about WhatsApp Business API, AI Chatbot automation, and omnichannel setup tailored to your scale.</p>
      </div>

      <!-- Two-Column Cards Grid -->
      <div class="footer-contact-grid">
        <!-- Left Glass Card: Contact Info -->
        <div class="contact-glass-card contact-info-card">
          <div>
            <div class="contact-card-title-group">
              <div class="contact-card-icon-pill pill-green">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
              </div>
              <div>
                <div class="contact-card-title" data-i18n="contact_title">Get in touch</div>
                <?php
                $defaultContactText = "Talk to our team about HelloBotz's WhatsApp, Instagram, Facebook & Telegram automation, and omnichannel setup for your business.";
                $activeContactText = isset($footerContactText) && !empty($footerContactText) ? $footerContactText : $defaultContactText;
                ?>
                <p class="contact-card-desc"><?php echo htmlspecialchars($activeContactText); ?></p>
              </div>
            </div>

            <div class="contact-details-list">
              <div class="contact-item-row">
                <div class="contact-item-icon icon-loc">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <div class="contact-item-body">
                  <div class="contact-item-label">Global Headquarters</div>
                  <div class="contact-item-val"><?php echo nl2br(htmlspecialchars($fAddress)); ?></div>
                </div>
              </div>

              <a href="https://wa.me/<?php echo urlencode($fWa); ?>" target="_blank" rel="noopener" class="contact-item-row">
                <div class="contact-item-icon icon-phone">
                  <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.63C8.75 21.41 10.38 21.82 12.04 21.82C17.5 21.82 21.95 17.37 21.95 11.91C21.95 6.45 17.5 2 12.04 2ZM17.47 14.38C17.17 14.23 15.69 13.5 15.41 13.4C15.14 13.3 14.94 13.25 14.74 13.55C14.54 13.85 13.96 14.53 13.78 14.73C13.61 14.93 13.43 14.96 13.13 14.81C12.83 14.66 11.86 14.34 10.71 13.32C9.81 12.52 9.21 11.53 9.03 11.23C8.86 10.93 9.01 10.77 9.16 10.62C9.3 10.49 9.46 10.27 9.61 10.1C9.76 9.92 9.81 9.8 9.91 9.6C10.01 9.4 9.96 9.22 9.89 9.07C9.81 8.92 9.21 7.44 8.96 6.83C8.71 6.24 8.46 6.32 8.28 6.31C8.1 6.3 7.9 6.3 7.7 6.3C7.5 6.3 7.17 6.38 6.9 6.68C6.62 6.98 5.85 7.71 5.85 9.19C5.85 10.67 6.93 12.1 7.08 12.3C7.23 12.5 9.2 15.54 12.22 16.84C14.73 17.93 15.41 17.72 16.03 17.65C16.75 17.56 18.25 16.74 18.55 15.89C18.85 15.04 18.85 14.32 18.78 14.19C18.7 14.07 18.5 13.99 18.2 13.84L17.47 14.38Z"/></svg>
                </div>
                <div class="contact-item-body">
                  <div class="contact-item-label">Direct WhatsApp / Call (24/7 Available)</div>
                  <div class="contact-item-val highlight-green"><?php echo htmlspecialchars($fPhone); ?></div>
                </div>
                <div class="contact-item-arrow">→</div>
              </a>

              <a href="mailto:<?php echo htmlspecialchars($fSalesEmail); ?>" class="contact-item-row">
                <div class="contact-item-icon icon-sales">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/></svg>
                </div>
                <div class="contact-item-body">
                  <div class="contact-item-label">Sales &amp; Enterprise Enquiries</div>
                  <div class="contact-item-val"><?php echo htmlspecialchars($fSalesEmail); ?></div>
                </div>
                <div class="contact-item-arrow">→</div>
              </a>

              <a href="mailto:<?php echo htmlspecialchars($fSupportEmail); ?>" class="contact-item-row">
                <div class="contact-item-icon icon-support">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                </div>
                <div class="contact-item-body">
                  <div class="contact-item-label">Technical &amp; Developer Support</div>
                  <div class="contact-item-val"><?php echo htmlspecialchars($fSupportEmail); ?></div>
                </div>
                <div class="contact-item-arrow">→</div>
              </a>
            </div>

            <!-- Download Apps -->
            <div class="contact-app-block">
              <span class="contact-app-label">Download HelloBotz Mobile App</span>
              <div class="contact-app-btns">
                <a class="contact-app-link" href="/resources/download-ios-app/">
                  <svg viewBox="0 0 24 24"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M15.97 6.32c.67-.82 1.12-1.96.99-3.1-.97.04-2.14.65-2.83 1.45-.62.72-1.16 1.88-1.01 3 1.08.08 2.18-.53 2.85-1.35z"/></svg>
                  <span>App Store</span>
                </a>
                <a class="contact-app-link" href="/resources/download-app/">
                  <svg viewBox="0 0 24 24"><path d="M3 20.5v-17c0-.55.45-1 1-1 .18 0 .35.05.5.14l14 8.5c.31.19.5.53.5.86s-.19.67-.5.86l-14 8.5c-.15.09-.32.14-.5.14-.55 0-1-.45-1-1z"/></svg>
                  <span>Google Play</span>
                </a>
              </div>
            </div>
          </div>

          <!-- Meta Tech Partner Badge -->
          <div class="contact-meta-card">
            <img src="<?php echo $bp; ?>assets/images/partners/meta-tech-partner.png" alt="Meta Tech Partner" width="120" height="60"
              onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
            <div class="meta-ph" style="display:none">Meta<br>Tech Partner</div>
            <div>
              <div class="meta-title-flex">
                <strong style="font-size:0.95rem;color:#0F172A">Meta Tech Partner</strong>
                <span class="meta-blue-check" title="Official WhatsApp Partner">✓</span>
              </div>
              <span style="font-size:0.8rem;color:#64748B;display:block;margin-top:2px">Official WhatsApp Business API Solutions</span>
            </div>
          </div>
        </div>

        <!-- Right Glass Card: Contact Form -->
        <div class="contact-glass-card contact-form-card">
          <div class="contact-card-glow-bar"></div>
          <div>
            <div class="contact-card-title-group">
              <div class="contact-card-icon-pill pill-purple">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
              </div>
              <div>
                <div class="contact-card-title" data-i18n="contact_form_title">Send a message</div>
                <p class="contact-card-desc">Fill out the quick form below and an omnichannel specialist will get back to you within 15 minutes.</p>
              </div>
            </div>

            <form class="footer-contact-form" action="javascript:void(0)" method="post" id="footer-contact-form" novalidate>
              <div class="contact-form-row">
                <div class="contact-field-group">
                  <label class="contact-field-label" for="fc-name">Your Name <span class="required-star">*</span></label>
                  <div class="contact-input-wrap">
                    <svg class="contact-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    <input type="text" class="form-input" id="fc-name" name="name" required placeholder="Your name">
                  </div>
                </div>
                <div class="contact-field-group">
                  <label class="contact-field-label" for="fc-mobile">WhatsApp / Mobile <span class="required-star">*</span></label>
                  <div class="contact-input-wrap">
                    <svg class="contact-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <input type="tel" class="form-input" id="fc-mobile" name="mobile" required placeholder="+91 98765 43210">
                  </div>
                </div>
              </div>

              <div class="contact-field-group">
                <label class="contact-field-label" for="fc-regarding">Regarding / Interest <span class="required-star">*</span></label>
                <div class="contact-input-wrap">
                  <svg class="contact-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
                  <select class="form-input" id="fc-regarding" name="regarding" required>
                    <option value="">Select topic</option>
                    <option value="WhatsApp Business API">WhatsApp Business API &amp; Green Tick</option>
                    <option value="Omnichannel Platform">AI WhatsApp &amp; Omnichannel Chatbots</option>
                    <option value="Pricing / Plans">Enterprise Pricing &amp; High-Volume Broadcasts</option>
                    <option value="Affiliate / Partner">Affiliate &amp; White-Label Partner Programs</option>
                    <option value="Technical Support">Technical Support &amp; Integrations</option>
                    <option value="Demo Request">Live Interactive Product Demo</option>
                    <option value="Other">Other Query</option>
                  </select>
                </div>
              </div>

              <div class="contact-field-group">
                <label class="contact-field-label" for="fc-message">Message / Requirements <span class="required-star">*</span></label>
                <textarea class="form-input" id="fc-message" name="message" rows="2" required placeholder="Tell us about your use case, monthly message volume, or custom needs..."></textarea>
              </div>

              <div class="contact-form-actions">
                <button type="submit" class="btn-contact-submit">
                  <span>Send Message</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
                <div class="contact-security-guarantee">
                  <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                  <span>100% Privacy Protected • Zero Spam Guarantee</span>
                </div>
              </div>
            </form>
          </div>
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
            <img src="<?php echo $bp; ?>assets/images/logo-dark.png" alt="<?php echo htmlspecialchars($SITE_NAME); ?>" class="logo-img" width="130" height="40" onerror="this.src='<?php echo $bp; ?>assets/images/logo-footer.png'">
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
              <a href="<?php echo htmlspecialchars(cms_setting('social_instagram', 'https://www.instagram.com/hellobotz_official?igsi=MXdhY2FkY3AzcmF0ZA%3D%3D&utm_source=qr')); ?>" target="_blank" rel="noopener noreferrer" class="footer-social-btn footer-social-ig" aria-label="HelloBotz on Instagram" title="Instagram">
                <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
              </a>
              <a href="<?php echo htmlspecialchars(cms_setting('social_facebook', 'https://www.facebook.com/share/19EDrKbF2P/?mibextid=wwXIfr')); ?>" target="_blank" rel="noopener noreferrer" class="footer-social-btn footer-social-fb" aria-label="HelloBotz on Facebook" title="Facebook">
                <svg viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
              </a>
              <a href="https://t.me/hellobotz" target="_blank" rel="noopener noreferrer" class="footer-social-btn footer-social-tg" aria-label="HelloBotz on Telegram" title="Telegram">
                <svg viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.643-.204-.657-.643.136-.953l11.57-4.461c.536-.196 1.006.128.832.918z"/></svg>
              </a>
              <a href="<?php echo htmlspecialchars(cms_setting('social_linkedin', 'https://www.linkedin.com/company/hellobotz/')); ?>" target="_blank" rel="noopener noreferrer" class="footer-social-btn footer-social-li" aria-label="HelloBotz on LinkedIn" title="LinkedIn">
                <svg viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
              </a>
              <a href="<?php echo htmlspecialchars(cms_setting('social_youtube', 'https://www.youtube.com/@Hellobotz')); ?>" target="_blank" rel="noopener noreferrer" class="footer-social-btn footer-social-yt" aria-label="HelloBotz on YouTube" title="YouTube">
                <svg viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
              </a>
              <a href="https://wa.me/<?php echo urlencode(cms_setting('social_whatsapp', $fWa)); ?>" target="_blank" rel="noopener noreferrer" class="footer-social-btn footer-social-wa" aria-label="HelloBotz on WhatsApp" title="WhatsApp">
                <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.301-.15-1.78-.878-2.056-.978-.276-.1-.477-.15-.678.15-.2.301-.778.978-.954 1.179-.176.2-.351.226-.652.076-.301-.15-1.27-.468-2.42-1.493-.895-.799-1.5-1.786-1.676-2.087-.176-.301-.019-.464.132-.614.136-.135.301-.351.452-.527.15-.176.2-.301.301-.502.101-.201.05-.376-.025-.526-.075-.15-.678-1.632-.929-2.237-.245-.59-.494-.51-.678-.519-.176-.01-.376-.01-.577-.01-.201 0-.527.075-.803.376-.276.301-1.054 1.029-1.054 2.509 0 1.48 1.079 2.909 1.23 3.11.15.201 2.124 3.243 5.145 4.548.719.311 1.28.497 1.718.636.723.23 1.381.198 1.901.12.58-.088 1.78-.727 2.03-1.43.25-.703.25-1.305.176-1.43-.075-.125-.276-.2-.577-.35zM12.04 21.75c-1.75 0-3.46-.46-4.98-1.33l-.36-.21-3.7 1.22 1.24-3.6-.23-.37c-.96-1.55-1.47-3.34-1.47-5.18 0-5.37 4.37-9.74 9.74-9.74 2.6 0 5.04 1.01 6.88 2.85 1.84 1.84 2.85 4.28 2.85 6.88 0 5.37-4.37 9.74-9.74 9.74zM12.04 0C5.39 0 0 5.39 0 12.04c0 2.12.55 4.19 1.6 6.01L0 24l6.15-1.57c1.76.96 3.75 1.47 5.89 1.47 6.65 0 12.04-5.39 12.04-12.04C24.08 5.39 18.69 0 12.04 0z"/></svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Section 1: Important Links (Preserving all original links) -->
        <div class="footer-nav-col">
          <div class="footer-heading">Important Links</div>
          <ul>
            <li><a href="<?php echo $bp; ?>channel/whatsapp/">WhatsApp Business API</a></li>
            <li><a href="<?php echo $bp; ?>products/chatbot/">AI Chatbot &amp; Automation</a></li>
            <li><a href="<?php echo $bp; ?>pricing/">Pricing Plans</a></li>
            <li><a href="<?php echo $bp; ?>partners/">Partner Program</a></li>
            <li><a href="<?php echo $bp; ?>company/about/">About HelloBotz</a></li>
            <li><a href="<?php echo $bp; ?>#contact-section">Contact Us</a></li>
          </ul>
        </div>

        <!-- Section 2: Our Channels (Styled exactly as in Screenshot 2) -->
        <div class="footer-nav-col">
          <div class="footer-heading">Our Channels</div>
          <ul class="footer-channels-list">
            <li>
              <a href="<?php echo $bp; ?>channel/whatsapp/" class="footer-channel-link">
                <span class="channel-icon-pill ch-wa">
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="#FFFFFF"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.63C8.75 21.41 10.38 21.82 12.04 21.82C17.5 21.82 21.95 17.37 21.95 11.91C21.95 6.45 17.5 2 12.04 2ZM17.47 14.38C17.17 14.23 15.69 13.5 15.41 13.4C15.14 13.3 14.94 13.25 14.74 13.55C14.54 13.85 13.96 14.53 13.78 14.73C13.61 14.93 13.43 14.96 13.13 14.81C12.83 14.66 11.86 14.34 10.71 13.32C9.81 12.52 9.21 11.53 9.03 11.23C8.86 10.93 9.01 10.77 9.16 10.62C9.3 10.49 9.46 10.27 9.61 10.1C9.76 9.92 9.81 9.8 9.91 9.6C10.01 9.4 9.96 9.22 9.89 9.07C9.81 8.92 9.21 7.44 8.96 6.83C8.71 6.24 8.46 6.32 8.28 6.31C8.1 6.3 7.9 6.3 7.7 6.3C7.5 6.3 7.17 6.38 6.9 6.68C6.62 6.98 5.85 7.71 5.85 9.19C5.85 10.67 6.93 12.1 7.08 12.3C7.23 12.5 9.2 15.54 12.22 16.84C14.73 17.93 15.41 17.72 16.03 17.65C16.75 17.56 18.25 16.74 18.55 15.89C18.85 15.04 18.85 14.32 18.78 14.19C18.7 14.07 18.5 13.99 18.2 13.84L17.47 14.38Z"/></svg>
                </span>
                <span>WhatsApp</span>
              </a>
            </li>
            <li>
              <a href="<?php echo $bp; ?>channel/instagram/" class="footer-channel-link">
                <span class="channel-icon-pill ch-ig">
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="#FFFFFF"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </span>
                <span>Instagram</span>
              </a>
            </li>
            <li>
              <a href="<?php echo $bp; ?>channel/facebook/" class="footer-channel-link">
                <span class="channel-icon-pill ch-fb">
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="#FFFFFF"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </span>
                <span>Facebook</span>
              </a>
            </li>
            <li>
              <a href="<?php echo $bp; ?>channel/telegram/" class="footer-channel-link">
                <span class="channel-icon-pill ch-tg">
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="#FFFFFF"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.643-.204-.657-.643.136-.953l11.57-4.461c.536-.196 1.006.128.832.918z"/></svg>
                </span>
                <span>Telegram</span>
              </a>
            </li>
          </ul>
        </div>

        <!-- Section 3: Resources (Blogs & Careers) -->
        <div class="footer-nav-col">
          <div class="footer-heading">Resources</div>
          <ul>
            <li><a href="<?php echo $bp; ?>blogs/">Blogs &amp; Insights</a></li>
            <li><a href="<?php echo $bp; ?>careers/">Careers</a></li>
          </ul>
        </div>

        <!-- Column 4: Location & Embedded Map -->
        <div class="footer-map-col">
          <div class="footer-heading" style="display:flex;align-items:center;justify-content:space-between;margin-bottom:0.75rem;">
            <span style="display:inline-flex;align-items:center;gap:6px;color:#FFFFFF;font-weight:700;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#22D3EE" stroke-width="2.2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
              Location
            </span>
            <a href="https://maps.google.com/maps?q=Bangalore+Karnataka+560030" target="_blank" rel="noopener noreferrer" class="footer-map-pill">
              Google Maps ↗
            </a>
          </div>
          <p style="font-size:0.88rem;color:#E2E8F0;margin:0 0 0.85rem;line-height:1.5;font-weight:600;">
            Bangalore Karnataka 560030
          </p>
          <div class="footer-map-frame-wrap">
            <iframe
              title="HelloBotz Office Location Map"
              src="https://maps.google.com/maps?q=Bangalore+Karnataka+560030&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
              width="100%"
              height="170"
              style="border:0;display:block;"
              loading="lazy"
              allowfullscreen
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
          <div class="footer-global-presence" aria-label="Global Presence: Bangalore, Gujarath, Dubai, Qatar">
            <span class="presence-tag">Bangalore</span>
            <span class="presence-divider">|</span>
            <span class="presence-tag">Gujarath</span>
            <span class="presence-divider">|</span>
            <span class="presence-tag">Dubai</span>
            <span class="presence-divider">|</span>
            <span class="presence-tag">Qatar|</span>
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
  <script src="/main.js?v=41" defer></script>

<script src="/assets/js/mobile-menu.js?v=55"></script>

  <script src="/forms.js?v=22" defer></script>
  <script src="/assets/js/robot-chatbot.js?v=6" defer></script>
  <?php echo cms_setting('custom_footer_code', ''); ?>
</body>
</html>
