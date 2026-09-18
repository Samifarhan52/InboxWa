<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Shopify WhatsApp Automation & Revenue Engine | HelloBotz';
$pageDescription = 'Recover abandoned carts, slash COD return-to-origin (RTO), and drive repeat sales on Shopify with HelloBotz automated WhatsApp Business API.';
$canonicalUrl = 'https://hellobotz.com/integrations/shopify/';
$ogImage = 'https://hellobotz.com/assets/images/integrations/shopify.png';
$ogTitle = 'Shopify WhatsApp Automation & Revenue Engine | HelloBotz';
$ogDescription = 'Recover abandoned carts, slash COD return-to-origin (RTO), and drive repeat sales on Shopify with HelloBotz automated WhatsApp Business API.';

include __DIR__ . '/../../includes/header.php';
?>

<!-- Dependencies: Bootstrap Grid & FontAwesome Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>
  /* ==========================================================================
     SHOPIFY REVENUE ENGINE — SCOPED STYLING (LIGHT & DARK MODE READY)
     ========================================================================== */
  :root {
    --sh-primary: #034737;
    --sh-primary-light: #04634d;
    --sh-accent: #10b981;
    --sh-accent-rgb: 16, 185, 129;
    --sh-purple: #7C3AED;
    --sh-purple-light: #EDE9FE;
    --sh-dark: #0f172a;
    --sh-muted: #64748b;
    --sh-border: #e2e8f0;
    --sh-card-bg: #ffffff;
    --sh-section-bg: #f8fafc;
  }

  .sh-page-wrap {
    width: 100%;
    overflow-x: hidden;
    background-color: #ffffff;
    color: #0f172a;
    font-family: inherit;
  }

  .sh-page-wrap .container {
    max-width: 1240px !important;
    margin-left: auto !important;
    margin-right: auto !important;
    padding-left: 1.25rem !important;
    padding-right: 1.25rem !important;
  }

  /* Typography & Utilities */
  .text-gradient-purple {
    background: linear-gradient(135deg, #7C3AED 0%, #9333EA 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .text-gradient-emerald {
    background: linear-gradient(135deg, #034737 0%, #10B981 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .sh-pill-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 16px;
    background: #F3F4F6;
    border: 1px solid #E5E7EB;
    border-radius: 9999px;
    font-size: 0.85rem;
    font-weight: 600;
    color: #1F2937;
    margin-bottom: 1.25rem;
  }

  /* Breadcrumbs */
  .sh-breadcrumbs {
    padding: 20px 0 10px;
    background: #ffffff;
  }
  .sh-breadcrumbs ol {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    padding: 0;
    margin: 0;
    gap: 8px;
    font-size: 0.85rem;
    color: #64748B;
  }
  .sh-breadcrumbs a {
    color: #64748B;
    text-decoration: none;
    transition: color 0.15s;
  }
  .sh-breadcrumbs a:hover {
    color: #034737;
  }
  .sh-breadcrumbs li+li:before {
    content: "/";
    padding-right: 8px;
    color: #94A3B8;
  }

  /* Hero Section */
  .sh-hero {
    padding: 40px 0 70px;
    background: radial-gradient(circle at 85% 15%, rgba(16, 185, 129, 0.07) 0%, rgba(255, 255, 255, 0) 60%);
  }
  .sh-hero h1 {
    font-size: clamp(2.3rem, 5vw, 3.4rem);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -0.025em;
    color: #0F172A;
    margin-bottom: 1.25rem;
  }
  .sh-hero p.lead {
    font-size: clamp(1.05rem, 2vw, 1.22rem);
    color: #475569;
    line-height: 1.6;
    margin-bottom: 2rem;
    max-width: 620px;
  }
  .sh-hero-cta-group {
    display: flex;
    align-items: center;
    gap: 14px;
    flex-wrap: wrap;
    margin-bottom: 1.5rem;
  }
  .btn-sh-primary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #034737;
    color: #ffffff !important;
    font-weight: 600;
    font-size: 1rem;
    padding: 14px 28px;
    border-radius: 9999px;
    text-decoration: none;
    transition: all 0.2s ease;
    box-shadow: 0 4px 14px rgba(3, 71, 55, 0.28);
  }
  .btn-sh-primary:hover {
    background: #04634d;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(3, 71, 55, 0.35);
  }
  .btn-sh-secondary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #ffffff;
    color: #0F172A !important;
    font-weight: 600;
    font-size: 1rem;
    padding: 13px 26px;
    border-radius: 9999px;
    border: 1px solid #CBD5E1;
    text-decoration: none;
    transition: all 0.2s ease;
  }
  .btn-sh-secondary:hover {
    background: #F8FAFC;
    border-color: #94A3B8;
  }

  /* Hero Showcase Card / Mockup */
  .sh-hero-mockup {
    position: relative;
    background: linear-gradient(135deg, #f0fdf4 0%, #ffffff 100%);
    border: 1px solid #d1fae5;
    border-radius: 24px;
    padding: 28px;
    box-shadow: 0 20px 40px -10px rgba(15, 23, 42, 0.08);
  }
  .sh-live-convo {
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
    border: 1px solid #e2e8f0;
    overflow: hidden;
  }
  .sh-convo-header {
    background: #034737;
    color: #ffffff;
    padding: 12px 18px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .sh-convo-header .brand-info {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .sh-convo-header img {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #fff;
    padding: 2px;
  }
  .sh-convo-body {
    padding: 18px;
    background: #ECE5DD url('https://user-images.githubusercontent.com/15075759/28719144-86dc0f70-73b1-11e7-911d-60d70fcded21.png') repeat;
    display: flex;
    flex-direction: column;
    gap: 14px;
    min-height: 280px;
  }
  .sh-wa-bubble {
    max-width: 88%;
    background: #ffffff;
    border-radius: 10px;
    padding: 12px 14px;
    box-shadow: 0 1px 2px rgba(0,0,0,0.1);
    font-size: 0.9rem;
    color: #1e293b;
    position: relative;
  }
  .sh-wa-bubble.right {
    align-self: flex-end;
    background: #d9fdd3;
  }
  .sh-wa-btn {
    display: block;
    width: 100%;
    text-align: center;
    padding: 8px 12px;
    margin-top: 8px;
    background: #ffffff;
    color: #00a884;
    font-weight: 600;
    font-size: 0.85rem;
    border: 1px solid #e2e8f0;
    border-radius: 6px;
    text-decoration: none;
    transition: background 0.15s;
  }
  .sh-wa-btn:hover {
    background: #f8fafc;
  }
  .sh-hero-badge-float {
    position: absolute;
    bottom: -15px;
    right: -10px;
    background: #0f172a;
    color: #ffffff;
    border-radius: 14px;
    padding: 12px 18px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 0.88rem;
    z-index: 10;
  }
  .sh-hero-badge-float .metric-val {
    font-size: 1.25rem;
    font-weight: 700;
    color: #34d399;
    line-height: 1;
  }

  /* Stats Numbers Section */
  .sh-stats-strip {
    padding: 30px 0;
    background: #ffffff;
    border-top: 1px solid #f1f5f9;
    border-bottom: 1px solid #f1f5f9;
  }
  .sh-stat-item {
    border-left: 3px solid #034737;
    padding-left: 18px;
  }
  .sh-stat-num {
    font-size: clamp(2.2rem, 3.5vw, 2.9rem);
    font-weight: 800;
    color: #0F172A;
    line-height: 1.1;
  }
  .sh-stat-label {
    font-size: 0.92rem;
    color: #64748B;
    margin-top: 4px;
    font-weight: 500;
  }

  /* Section Common Headings */
  .sh-section {
    padding: 85px 0;
  }
  .sh-section.bg-alt {
    background-color: #F8FAFC;
  }
  .sh-sec-head {
    max-width: 760px;
    margin-bottom: 45px;
  }
  .sh-sec-head.text-center {
    margin-left: auto;
    margin-right: auto;
  }
  .sh-sec-head h2 {
    font-size: clamp(1.9rem, 3.5vw, 2.6rem);
    font-weight: 800;
    letter-spacing: -0.02em;
    color: #0F172A;
    line-height: 1.2;
    margin-bottom: 14px;
  }
  .sh-sec-head p {
    font-size: clamp(1rem, 1.8vw, 1.15rem);
    color: #64748B;
    line-height: 1.6;
    margin: 0;
  }

  /* HelloBotz E-commerce Funnel: After The Ad Click Section */
  .sh-leak-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
    gap: 24px;
  }
  .sh-leak-card {
    background: #ffffff;
    border: 1px solid #E2E8F0;
    border-radius: 18px;
    padding: 26px;
    transition: all 0.2s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  .sh-leak-card:hover {
    border-color: #CBD5E1;
    transform: translateY(-3px);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.05);
  }
  .sh-leak-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: #FEE2E2;
    color: #EF4444;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
    margin-bottom: 16px;
  }
  .sh-leak-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: #0F172A;
    margin-bottom: 8px;
  }
  .sh-leak-problem {
    font-size: 0.92rem;
    color: #64748B;
    line-height: 1.5;
    margin-bottom: 16px;
  }
  .sh-leak-fix {
    background: #F0FDF4;
    border-left: 3px solid #10B981;
    padding: 10px 14px;
    border-radius: 0 8px 8px 0;
    font-size: 0.88rem;
    color: #065F46;
    font-weight: 500;
    line-height: 1.45;
  }

  .sh-leak-img-wrap {
    margin: 14px 0 16px;
    border-radius: 12px;
    overflow: hidden;
    background: #f8fafc;
    border: 1px solid #f1f5f9;
    text-align: center;
    padding: 6px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.03);
  }
  .sh-leak-img-wrap img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    display: block;
    margin: 0 auto;
    transition: transform 0.2s ease;
  }
  .sh-leak-card:hover .sh-leak-img-wrap img {
    transform: scale(1.02);
  }

  .sh-callout-strip {
    background: linear-gradient(135deg, #034737 0%, #065f46 100%);
    border-radius: 20px;
    padding: 36px 40px;
    color: #ffffff;
    margin-top: 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
    flex-wrap: wrap;
  }
  .sh-callout-strip h3 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 6px;
    color: #ffffff;
  }
  .sh-callout-strip p {
    font-size: 1rem;
    color: #A7F3D0;
    margin: 0;
    max-width: 600px;
  }
  .btn-sh-white {
    background: #ffffff;
    color: #034737 !important;
    font-weight: 700;
    padding: 12px 24px;
    border-radius: 9999px;
    text-decoration: none;
    transition: all 0.15s ease;
    white-space: nowrap;
  }
  .btn-sh-white:hover {
    background: #f0fdf4;
    transform: scale(1.03);
  }

  /* Engine Playbooks (Detailed) */
  .sh-engine-row {
    margin-bottom: 60px;
  }
  .sh-engine-card {
    background: #ffffff;
    border: 1px solid #E2E8F0;
    border-radius: 20px;
    padding: 36px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
  }
  .sh-engine-card h3 {
    font-size: 1.7rem;
    font-weight: 800;
    color: #0F172A;
    margin-bottom: 16px;
  }
  .sh-engine-bullets {
    list-style: none;
    padding: 0;
    margin: 0 0 24px;
    display: flex;
    flex-direction: column;
    gap: 12px;
  }
  .sh-engine-bullets li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    font-size: 0.95rem;
    color: #334155;
    line-height: 1.5;
  }
  .sh-engine-bullets li i {
    color: #10B981;
    font-size: 1.1rem;
    margin-top: 3px;
    flex-shrink: 0;
  }

  /* 6-Stage Revenue Moments Lifecycle */
  .sh-moment-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 24px;
  }
  .sh-moment-card {
    background: #ffffff;
    border: 1px solid #E2E8F0;
    border-radius: 18px;
    padding: 26px;
    transition: all 0.2s ease;
  }
  .sh-moment-card:hover {
    border-color: #034737;
    transform: translateY(-3px);
    box-shadow: 0 10px 24px rgba(3, 71, 55, 0.08);
  }
  .sh-moment-icon {
    width: 56px;
    height: 56px;
    border-radius: 14px;
    background: #f1f5f9;
    color: #034737;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    margin-bottom: 16px;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid rgba(0, 0, 0, 0.06);
  }
  .sh-moment-icon img {
    width: 38px;
    height: 38px;
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    display: block;
  }
  .sh-stage-badge {
    display: inline-block;
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    padding: 4px 10px;
    border-radius: 6px;
    background: #e2e8f0;
    color: #475569;
    margin-bottom: 12px;
    align-self: flex-start;
  }
  .sh-moment-card h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: #0F172A;
    margin-bottom: 8px;
  }
  .sh-moment-card p {
    font-size: 0.92rem;
    color: #64748B;
    line-height: 1.55;
    margin-bottom: 0;
  }
    margin: 0;
  }

  /* Comparison Matrix */
  .sh-compare-table-wrap {
    overflow-x: auto;
    border-radius: 16px;
    border: 1px solid #E2E8F0;
    background: #ffffff;
  }
  .sh-compare-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
  }
  .sh-compare-table th {
    background: #F8FAFC;
    padding: 16px 20px;
    font-size: 0.88rem;
    font-weight: 700;
    text-transform: uppercase;
    color: #475569;
    letter-spacing: 0.04em;
    border-bottom: 1px solid #E2E8F0;
  }
  .sh-compare-table td {
    padding: 18px 20px;
    border-bottom: 1px solid #E2E8F0;
    font-size: 0.95rem;
    color: #334155;
    vertical-align: middle;
  }
  .sh-compare-table tr:last-child td {
    border-bottom: none;
  }
  .sh-compare-table tr.sh-highlight td {
    background: #F0FDF4;
    color: #065F46;
    font-weight: 600;
  }

  /* 3-Step Setup Guide */
  .sh-steps-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 24px;
  }
  .sh-step-box {
    background: #ffffff;
    border: 1px solid #E2E8F0;
    border-radius: 18px;
    padding: 28px;
    position: relative;
  }
  .sh-step-num {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: #034737;
    color: #ffffff;
    font-weight: 800;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    margin-bottom: 16px;
  }
  .sh-step-box h4 {
    font-size: 1.18rem;
    font-weight: 700;
    color: #0F172A;
    margin-bottom: 8px;
  }
  .sh-step-box p {
    font-size: 0.92rem;
    color: #64748B;
    line-height: 1.55;
    margin: 0;
  }

  /* FAQs Section */
  .faq-itemm {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    margin-bottom: 14px;
    overflow: hidden;
    transition: all 0.2s ease;
  }
  .faq-itemm:hover {
    border-color: #cbd5e1;
  }
  .faq-questionn {
    width: 100%;
    text-align: left;
    background: transparent;
    padding: 20px 22px;
    font-size: 1.05rem;
    font-weight: 600;
    color: #0F172A;
    border: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
  }
  .faq-answerr {
    display: none;
    padding: 0 22px 20px;
    font-size: 0.95rem;
    color: #475569;
    line-height: 1.6;
    border-top: 1px solid #f1f5f9;
    padding-top: 14px;
  }
  .faq-itemm.active .faq-answerr {
    display: block;
  }
  .faq-arrow {
    transition: transform 0.2s ease;
    color: #034737;
    font-size: 0.9rem;
  }
  .faq-itemm.active .faq-arrow {
    transform: rotate(180deg);
  }

  /* Final CTA Banner */
  .sh-final-banner {
    padding: 60px 40px;
    background: radial-gradient(circle at 10% 20%, #034737 0%, #064E3B 100%);
    border-radius: 28px;
    color: #ffffff;
    text-align: center;
    box-shadow: 0 20px 40px -15px rgba(3, 71, 55, 0.4);
  }
  .sh-final-banner h2 {
    font-size: clamp(2rem, 4vw, 2.9rem);
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 14px;
    line-height: 1.2;
  }
  .sh-final-banner p {
    font-size: 1.15rem;
    color: #A7F3D0;
    max-width: 660px;
    margin: 0 auto 30px;
  }

  /* ==========================================================================
     DARK THEME SUPPORT FOR SHOPIFY PAGE
     ========================================================================== */
  html[data-theme="dark"] .sh-page-wrap,
  body.dark-theme .sh-page-wrap {
    background-color: #080c14 !important;
    color: #f1f5f9 !important;
  }
  html[data-theme="dark"] .sh-breadcrumbs,
  body.dark-theme .sh-breadcrumbs {
    background-color: #080c14 !important;
  }
  html[data-theme="dark"] .sh-hero,
  body.dark-theme .sh-hero {
    background: radial-gradient(circle at 85% 15%, rgba(16, 185, 129, 0.12) 0%, rgba(8, 12, 20, 0) 60%) !important;
  }
  html[data-theme="dark"] .sh-hero h1,
  body.dark-theme .sh-hero h1,
  html[data-theme="dark"] .sh-sec-head h2,
  body.dark-theme .sh-sec-head h2,
  html[data-theme="dark"] .sh-stat-num,
  body.dark-theme .sh-stat-num,
  html[data-theme="dark"] .sh-leak-title,
  body.dark-theme .sh-leak-title,
  html[data-theme="dark"] .sh-engine-card h3,
  body.dark-theme .sh-engine-card h3,
  html[data-theme="dark"] .sh-moment-card h4,
  body.dark-theme .sh-moment-card h4,
  html[data-theme="dark"] .sh-step-box h4,
  body.dark-theme .sh-step-box h4,
  html[data-theme="dark"] .faq-questionn,
  body.dark-theme .faq-questionn {
    color: #f8fafc !important;
  }
  html[data-theme="dark"] .sh-hero p.lead,
  body.dark-theme .sh-hero p.lead,
  html[data-theme="dark"] .sh-sec-head p,
  body.dark-theme .sh-sec-head p,
  html[data-theme="dark"] .sh-stat-label,
  body.dark-theme .sh-stat-label,
  html[data-theme="dark"] .sh-leak-problem,
  body.dark-theme .sh-leak-problem,
  html[data-theme="dark"] .sh-engine-bullets li,
  body.dark-theme .sh-engine-bullets li,
  html[data-theme="dark"] .sh-moment-card p,
  body.dark-theme .sh-moment-card p,
  html[data-theme="dark"] .sh-step-box p,
  body.dark-theme .sh-step-box p,
  html[data-theme="dark"] .faq-answerr,
  body.dark-theme .faq-answerr {
    color: #94a3b8 !important;
  }
  html[data-theme="dark"] .sh-pill-badge,
  body.dark-theme .sh-pill-badge {
    background: #1e293b !important;
    border-color: rgba(255, 255, 255, 0.1) !important;
    color: #e2e8f0 !important;
  }
  html[data-theme="dark"] .sh-hero-mockup,
  body.dark-theme .sh-hero-mockup {
    background: #0f172a !important;
    border-color: rgba(255, 255, 255, 0.1) !important;
  }
  html[data-theme="dark"] .sh-stats-strip,
  body.dark-theme .sh-stats-strip {
    background: #0b0f19 !important;
    border-color: rgba(255, 255, 255, 0.08) !important;
  }
  html[data-theme="dark"] .sh-section,
  body.dark-theme .sh-section {
    background: #080d1a !important;
  }
  html[data-theme="dark"] .sh-section.bg-alt,
  body.dark-theme .sh-section.bg-alt {
    background: #0b0f19 !important;
  }
  html[data-theme="dark"] .sh-leak-card,
  body.dark-theme .sh-leak-card,
  html[data-theme="dark"] .sh-engine-card,
  body.dark-theme .sh-engine-card,
  html[data-theme="dark"] .sh-moment-card,
  body.dark-theme .sh-moment-card,
  html[data-theme="dark"] .sh-step-box,
  body.dark-theme .sh-step-box,
  html[data-theme="dark"] .sh-compare-table-wrap,
  body.dark-theme .sh-compare-table-wrap,
  html[data-theme="dark"] .faq-itemm,
  body.dark-theme .faq-itemm {
    background: #0f172a !important;
    border-color: rgba(255, 255, 255, 0.08) !important;
  }
  html[data-theme="dark"] .sh-leak-fix,
  body.dark-theme .sh-leak-fix {
    background: rgba(16, 185, 129, 0.15) !important;
    color: #6ee7b7 !important;
    border-left-color: #10b981 !important;
  }
  html[data-theme="dark"] .sh-leak-img-wrap,
  body.dark-theme .sh-leak-img-wrap {
    background: #1e293b !important;
    border-color: rgba(255, 255, 255, 0.08) !important;
  }
  html[data-theme="dark"] .sh-moment-icon,
  body.dark-theme .sh-moment-icon {
    background: #1e293b !important;
    border-color: rgba(255, 255, 255, 0.08) !important;
  }
  html[data-theme="dark"] .sh-stage-badge,
  body.dark-theme .sh-stage-badge {
    background: #1e293b !important;
    color: #94a3b8 !important;
    border: 1px solid rgba(255, 255, 255, 0.08);
  }
  html[data-theme="dark"] .sh-compare-table th,
  body.dark-theme .sh-compare-table th {
    background: #1e293b !important;
    color: #cbd5e1 !important;
    border-color: rgba(255, 255, 255, 0.08) !important;
  }
  html[data-theme="dark"] .sh-compare-table td,
  body.dark-theme .sh-compare-table td {
    border-color: rgba(255, 255, 255, 0.08) !important;
    color: #cbd5e1 !important;
  }
  html[data-theme="dark"] .sh-compare-table tr.sh-highlight td,
  body.dark-theme .sh-compare-table tr.sh-highlight td {
    background: rgba(16, 185, 129, 0.15) !important;
    color: #34d399 !important;
  }
  html[data-theme="dark"] .btn-sh-secondary,
  body.dark-theme .btn-sh-secondary {
    background: #1e293b !important;
    border-color: rgba(255, 255, 255, 0.15) !important;
    color: #f1f5f9 !important;
  }
  html[data-theme="dark"] .faq-answerr,
  body.dark-theme .faq-answerr {
    border-top-color: rgba(255, 255, 255, 0.08) !important;
  }
  html[data-theme="dark"] .faq-arrow,
  body.dark-theme .faq-arrow {
    color: #34d399 !important;
  }

  /* WhatsApp Simulated Phone UI - Ensure high contrast in both themes */
  .sh-phone-frame .sh-wa-bubble,
  html[data-theme="dark"] .sh-phone-frame .sh-wa-bubble,
  body.dark-theme .sh-phone-frame .sh-wa-bubble {
    background: #ffffff !important;
    color: #111827 !important;
  }
  .sh-phone-frame .sh-wa-bubble.right,
  html[data-theme="dark"] .sh-phone-frame .sh-wa-bubble.right,
  body.dark-theme .sh-phone-frame .sh-wa-bubble.right {
    background: #d9fdd3 !important;
    color: #111827 !important;
  }
  .sh-phone-frame .sh-wa-bubble *,
  html[data-theme="dark"] .sh-phone-frame .sh-wa-bubble *,
  body.dark-theme .sh-phone-frame .sh-wa-bubble * {
    color: #111827 !important;
  }
  .sh-phone-frame .sh-wa-bubble .badge,
  html[data-theme="dark"] .sh-phone-frame .sh-wa-bubble .badge,
  body.dark-theme .sh-phone-frame .sh-wa-bubble .badge {
    color: #ffffff !important;
  }
  .sh-phone-frame .sh-wa-btn,
  html[data-theme="dark"] .sh-phone-frame .sh-wa-btn,
  body.dark-theme .sh-phone-frame .sh-wa-btn {
    background: #ffffff !important;
    color: #00a884 !important;
    border-color: #e2e8f0 !important;
  }
  .sh-phone-frame .sh-phone-header,
  html[data-theme="dark"] .sh-phone-frame .sh-phone-header,
  body.dark-theme .sh-phone-frame .sh-phone-header {
    background: #005c4b !important;
    color: #ffffff !important;
  }
  .sh-phone-frame .sh-phone-header *,
  html[data-theme="dark"] .sh-phone-frame .sh-phone-header *,
  body.dark-theme .sh-phone-frame .sh-phone-header * {
    color: #ffffff !important;
  }
  .sh-phone-frame .sh-floating-metric,
  html[data-theme="dark"] .sh-phone-frame .sh-floating-metric,
  body.dark-theme .sh-phone-frame .sh-floating-metric {
    background: #0f172a !important;
    color: #ffffff !important;
    border: 1px solid rgba(255,255,255,0.15) !important;
  }
  .sh-phone-frame .sh-floating-metric *,
  html[data-theme="dark"] .sh-phone-frame .sh-floating-metric *,
  body.dark-theme .sh-phone-frame .sh-floating-metric * {
    color: #ffffff !important;
  }

  /* Engine Cards Dark Mode UI */
  html[data-theme="dark"] .sh-engine-row .bg-light,
  body.dark-theme .sh-engine-row .bg-light {
    background: #1e293b !important;
    border-color: rgba(255, 255, 255, 0.1) !important;
  }
  html[data-theme="dark"] .sh-engine-row .bg-white,
  body.dark-theme .sh-engine-row .bg-white {
    background: #0f172a !important;
    border-color: rgba(255, 255, 255, 0.1) !important;
    color: #f1f5f9 !important;
  }
  html[data-theme="dark"] .sh-engine-row .bg-white span,
  html[data-theme="dark"] .sh-engine-row .bg-white div,
  body.dark-theme .sh-engine-row .bg-white span,
  body.dark-theme .sh-engine-row .bg-white div {
    color: #f1f5f9 !important;
  }
  html[data-theme="dark"] .sh-engine-row .text-muted,
  body.dark-theme .sh-engine-row .text-muted {
    color: #94a3b8 !important;
  }
</style>

<div class="sh-page-wrap">

  <!-- 1. BREADCRUMBS -->
  <div class="sh-breadcrumbs">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol>
          <li><a href="<?php echo $bp; ?>">Home</a></li>
          <li><a href="<?php echo $bp; ?>integrations/">Integrations</a></li>
          <li aria-current="page" style="color:#034737;font-weight:600;">Shopify WhatsApp Integration</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- 2. HERO SECTION -->
  <section class="sh-hero">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <div class="sh-pill-badge">
            <img src="<?php echo $bp; ?>assets/images/integrations/shopify.png" alt="Shopify" width="18" height="18">
            <span>Official Meta Business Partner • HelloBotz Engine</span>
          </div>

          <h1>More <span class="text-gradient-purple">Revenue</span> from the Customers you've Already Paid for.</h1>

          <p class="lead">
            HelloBotz recovers lost sales from abandoned carts, slashes COD return-to-origin (RTO) rates with instant WhatsApp verification, and boosts repeat orders on autopilot — without spending a rupee more on ads or hiring extra staff.
          </p>

          <div class="sh-hero-cta-group">
            <a href="<?php echo $bp; ?>#contact-section" class="btn-sh-primary">
              <span>Start Recovering Revenue</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="<?php echo $bp; ?>#contact-section" class="btn-sh-secondary">
              <i class="fa-solid fa-calendar-check text-success"></i>
              <span>Book a Live Demo</span>
            </a>
          </div>

          <div class="d-flex align-items-center gap-3 pt-2">
            <div class="d-flex text-warning fs-6">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <span class="small text-muted fw-semibold">Trusted by 500+ fast-growing Shopify stores across India &amp; global markets</span>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="text-center mb-4">
            <img src="<?php echo $bp; ?>assets/images/shopify-funnel/shopify_hero.png" alt="Shopify WhatsApp Revenue Engine" class="img-fluid" style="max-height:240px;object-fit:contain;" loading="eager">
          </div>
          <!-- Interactive Mockup Visual -->
          <div class="sh-hero-mockup">
            <div class="sh-live-convo">
              <div class="sh-convo-header">
                <div class="brand-info">
                  <img src="<?php echo $bp; ?>assets/images/integrations/shopify.png" alt="Store Avatar">
                  <div>
                    <div class="fw-bold" style="font-size:0.95rem;">Urban Vogue Store <i class="fas fa-check-circle text-info ms-1"></i></div>
                    <div style="font-size:0.75rem;opacity:0.85;">via HelloBotz WhatsApp Platform</div>
                  </div>
                </div>
                <span class="badge bg-success" style="font-size:0.75rem;">Connected</span>
              </div>

              <div class="sh-convo-body">
                <!-- Cart Recovery Notification -->
                <div class="sh-wa-bubble">
                  <div class="fw-bold text-dark mb-1">Hey Priya! 👋 You left something special behind!</div>
                  <p class="mb-1 small">Your <strong>Classic Linen Co-ord Set (Size M)</strong> is still reserved in your bag. Complete checkout in the next 30 mins to get an instant 10% OFF!</p>
                  <div class="p-2 rounded bg-light d-flex align-items-center justify-content-between mb-2 border">
                    <span class="small fw-bold">Cart Total: ₹2,499</span>
                    <span class="badge bg-danger text-white">10% OFF APPLIED</span>
                  </div>
                  <a href="<?php echo $bp; ?>#contact-section" class="sh-wa-btn">
                    <i class="fa-solid fa-bolt me-1"></i> Complete Purchase (1-Click Buy)
                  </a>
                </div>

                <!-- Customer reply -->
                <div class="sh-wa-bubble right">
                  <span>Ordered! Selected Cash on Delivery 🎉</span>
                </div>

                <!-- COD Verification Prompt -->
                <div class="sh-wa-bubble">
                  <div class="fw-bold text-dark mb-1">⚡ Quick COD Confirmation: Order #UV-9281</div>
                  <p class="mb-1 small">Please verify delivery address: <em>Plot 42, Bandra West, Mumbai, 400050</em>.</p>
                  <div class="d-flex gap-2 mt-2">
                    <a href="<?php echo $bp; ?>#contact-section" class="sh-wa-btn py-1 text-success flex-fill">
                      <i class="fa-solid fa-check me-1"></i> Confirm Order
                    </a>
                    <a href="<?php echo $bp; ?>#contact-section" class="sh-wa-btn py-1 text-primary flex-fill">
                      <i class="fa-solid fa-credit-card me-1"></i> Pay Now (-₹100)
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Floating Badge -->
            <div class="sh-hero-badge-float">
              <i class="fa-solid fa-arrow-trend-up text-success fs-3"></i>
              <div>
                <div class="metric-val">₹1,42,800</div>
                <div style="font-size:0.75rem;opacity:0.8;">Recovered this month with HelloBotz</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. BY THE NUMBERS STRIP -->
  <section class="sh-stats-strip">
    <div class="container">
      <div class="row g-4">
        <div class="col-6 col-md-3">
          <div class="sh-stat-item">
            <div class="sh-stat-num">500+</div>
            <div class="sh-stat-label">Active Shopify Brands</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="sh-stat-item">
            <div class="sh-stat-num">1M+</div>
            <div class="sh-stat-label">Automated WhatsApp Chats</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="sh-stat-item">
            <div class="sh-stat-num">42%</div>
            <div class="sh-stat-label">Average Cart Recovery Rate</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="sh-stat-item">
            <div class="sh-stat-num">65%</div>
            <div class="sh-stat-label">Reduction in COD RTO Rate</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. E-COMMERCE FUNNEL: AFTER THE AD CLICK WHERE YOUR REVENUE GOES -->
  <section class="sh-section bg-alt" id="sh-leaks">
    <div class="container">
      <div class="sh-sec-head text-center">
        <div class="sh-pill-badge mx-auto">
          <i class="fa-solid fa-funnel-dollar text-primary"></i>
          <span>Funnel Optimization</span>
        </div>
        <h2>After the <span class="text-gradient-purple">Ad Click</span> where your <span class="text-gradient-emerald">Revenue</span> goes</h2>
        <p>
          You've already paid to get these visitors to your Shopify store. Here is the revenue you're leaving on the table every day — and how much of it HelloBotz recovers automatically.
        </p>
      </div>

      <div class="sh-leak-grid">
        <!-- Leak 1 -->
        <div class="sh-leak-card">
          <div>
            <div class="sh-leak-icon">
              <i class="fa-solid fa-cart-arrow-down"></i>
            </div>
            <div class="sh-leak-title">Lost Sales from Abandoned Carts</div>
            <div class="sh-leak-problem">
              Over 70% of shoppers drop off at checkout. Generic emails go straight to the promotions tab or spam folders, causing thousands in lost orders.
            </div>
            <div class="sh-leak-img-wrap">
              <img src="<?php echo $bp; ?>assets/images/shopify-funnel/abandoned_carts.png" alt="Lost Sales from Abandoned Carts" class="img-fluid" loading="lazy">
            </div>
          </div>
          <div class="sh-leak-fix">
            <strong>HelloBotz Fix:</strong> Automated multi-stage WhatsApp recovery sent within 15 minutes with dynamic images, discount codes, and 1-click buy links.
          </div>
        </div>

        <!-- Leak 2 -->
        <div class="sh-leak-card">
          <div>
            <div class="sh-leak-icon">
              <i class="fa-solid fa-truck-ramp-box"></i>
            </div>
            <div class="sh-leak-title">Lost Revenue from High COD Failure Rates</div>
            <div class="sh-leak-problem">
              Unverified Cash on Delivery orders lead to fake addresses, impulsive buyer regret, and expensive Return-to-Origin (RTO) courier penalties.
            </div>
            <div class="sh-leak-img-wrap">
              <img src="<?php echo $bp; ?>assets/images/shopify-funnel/high_cod_failure_rates.png" alt="High COD Failure Rates" class="img-fluid" loading="lazy">
            </div>
          </div>
          <div class="sh-leak-fix">
            <strong>HelloBotz Fix:</strong> Instant WhatsApp order verification with interactive "Confirm" or "Cancel" buttons. Slashes RTO losses by up to 65%.
          </div>
        </div>

        <!-- Leak 3 -->
        <div class="sh-leak-card">
          <div>
            <div class="sh-leak-icon">
              <i class="fa-solid fa-user-xmark"></i>
            </div>
            <div class="sh-leak-title">Repeat Orders Lost (Single-Purchase Churn)</div>
            <div class="sh-leak-problem">
              Most customers buy once and forget your brand. Without timely follow-ups, your customer acquisition cost (CAC) eats all profit margin.
            </div>
            <div class="sh-leak-img-wrap">
              <img src="<?php echo $bp; ?>assets/images/shopify-funnel/no_repeat_orders.png" alt="Repeat Orders Lost" class="img-fluid" loading="lazy">
            </div>
          </div>
          <div class="sh-leak-fix">
            <strong>HelloBotz Fix:</strong> Automated replenishment nudges and win-back flows triggered based on exact product lifecycle and reorder intervals.
          </div>
        </div>

        <!-- Leak 4 -->
        <div class="sh-leak-card">
          <div>
            <div class="sh-leak-icon">
              <i class="fa-solid fa-tags"></i>
            </div>
            <div class="sh-leak-title">Revenue Lost from Missed Cross-sells</div>
            <div class="sh-leak-problem">
              The moment after a purchase is your customer's peak excitement window. If you don't offer relevant add-ons, you lose high-margin sales.
            </div>
            <div class="sh-leak-img-wrap">
              <img src="<?php echo $bp; ?>assets/images/shopify-funnel/missed_cross_sells.png" alt="Revenue Lost from Missed Cross-sells" class="img-fluid" loading="lazy">
            </div>
          </div>
          <div class="sh-leak-fix">
            <strong>HelloBotz Fix:</strong> Smart post-purchase WhatsApp product recommendations and bundle offers sent right upon order dispatch or delivery.
          </div>
        </div>

        <!-- Leak 5 -->
        <div class="sh-leak-card">
          <div>
            <div class="sh-leak-icon">
              <i class="fa-solid fa-comments-dollar"></i>
            </div>
            <div class="sh-leak-title">Sales Lost to Unanswered Product Questions</div>
            <div class="sh-leak-problem">
              Hesitation around sizing, fabrics, shipping times, or warranty causes instant tab abandonment when nobody is there to answer 24/7.
            </div>
            <div class="sh-leak-img-wrap">
              <img src="<?php echo $bp; ?>assets/images/shopify-funnel/sales_lost_to_unanswered_questions.png" alt="Sales Lost to Unanswered Questions" class="img-fluid" loading="lazy">
            </div>
          </div>
          <div class="sh-leak-fix">
            <strong>HelloBotz Fix:</strong> 24/7 AI Sales Agent answers customer questions in seconds on WhatsApp and presents native Shopify catalog product cards.
          </div>
        </div>
      </div>

      <!-- Banner Callout -->
      <div class="sh-callout-strip">
        <div>
          <h3>All revenue from customers you've already paid to acquire.</h3>
          <p>HelloBotz brings it back automatically without extra ad spend or hiring manual support agents.</p>
        </div>
        <a href="<?php echo $bp; ?>#contact-section" class="btn-sh-white">
          <span>Unlock More Revenue</span>
          <i class="fa-solid fa-arrow-right ms-2"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- 5. HOW HELLOBOTZ GETS THAT REVENUE BACK (CORE ENGINES) -->
  <section class="sh-section" id="sh-engines">
    <div class="container">
      <div class="sh-sec-head text-center">
        <div class="sh-pill-badge mx-auto">
          <i class="fa-solid fa-gears text-success"></i>
          <span>Automated Playbooks</span>
        </div>
        <h2>How <span class="text-gradient-purple">HelloBotz</span> gets that Revenue back</h2>
        <p>Three powerful automated engines running 24/7 for your Shopify store — no new team required.</p>
      </div>

      <!-- Engine 1 -->
      <div class="sh-engine-row row align-items-center g-5">
        <div class="col-lg-6">
          <div class="sh-engine-card">
            <span class="badge bg-success-subtle text-success fw-bold px-3 py-2 mb-3" style="font-size:0.85rem;">01. RECOVERY &amp; RTO ENGINE</span>
            <h3>Recover Lost Sales &amp; Slashes COD RTO</h3>
            <ul class="sh-engine-bullets">
              <li>
                <i class="fa-solid fa-circle-check"></i>
                <span><strong>Automated Abandoned Cart Sequences:</strong> Triggers hyper-personalized WhatsApp messages with exact cart images, variant details, and instant pre-filled checkout URLs.</span>
              </li>
              <li>
                <i class="fa-solid fa-circle-check"></i>
                <span><strong>COD Verification with Address Validation:</strong> Validates mobile numbers via WhatsApp OTP/buttons and confirms pin codes to stop invalid orders before packing.</span>
              </li>
              <li>
                <i class="fa-solid fa-circle-check"></i>
                <span><strong>Prepaid Conversion Incentives:</strong> Offers COD buyers an instant discount or gift card if they switch to prepaid payment via UPI or credit card.</span>
              </li>
            </ul>
            <a href="<?php echo $bp; ?>#contact-section" class="btn-sh-primary">Get Started Free</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-3 rounded-4 bg-light border text-center shadow-sm">
            <img src="<?php echo $bp; ?>assets/images/shopify-funnel/recover_lost_sales.png" alt="Recover Lost Sales & Slashes COD RTO Engine" class="img-fluid rounded-3" loading="lazy">
          </div>
        </div>
      </div>

      <!-- Engine 2 -->
      <div class="sh-engine-row row align-items-center g-5 flex-lg-row-reverse">
        <div class="col-lg-6">
          <div class="sh-engine-card">
            <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-2 mb-3" style="font-size:0.85rem;">02. RETENTION ENGINE</span>
            <h3>Win More Repeat Orders on Autopilot</h3>
            <ul class="sh-engine-bullets">
              <li>
                <i class="fa-solid fa-circle-check"></i>
                <span><strong>Predictive Replenishment Alerts:</strong> Re-engages customers right before their skincare, nutrition, or consumable supplies run out.</span>
              </li>
              <li>
                <i class="fa-solid fa-circle-check"></i>
                <span><strong>Automated Win-Back Journeys:</strong> Re-activates quiet shoppers who haven't ordered in 60 to 90 days with exclusive VIP WhatsApp vouchers.</span>
              </li>
              <li>
                <i class="fa-solid fa-circle-check"></i>
                <span><strong>High-AOV VIP Buyer Rewards:</strong> Automatically tags top 10% lifetime spenders in Shopify and delivers early-bird access to sales and new product drops.</span>
              </li>
            </ul>
            <a href="<?php echo $bp; ?>#contact-section" class="btn-sh-primary">Activate Retention Flow</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-3 rounded-4 bg-light border text-center shadow-sm">
            <img src="<?php echo $bp; ?>assets/images/shopify-funnel/win_more_repeat_oders.png" alt="Win More Repeat Orders Autopilot Engine" class="img-fluid rounded-3" loading="lazy">
          </div>
        </div>
      </div>

      <!-- Engine 3 -->
      <div class="sh-engine-row row align-items-center g-5">
        <div class="col-lg-6">
          <div class="sh-engine-card">
            <span class="badge bg-purple-subtle text-purple fw-bold px-3 py-2 mb-3" style="font-size:0.85rem;background:#ede9fe;color:#7c3aed;">03. CONVERSATIONAL SALES</span>
            <h3>Turn Customer Conversations into Orders</h3>
            <ul class="sh-engine-bullets">
              <li>
                <i class="fa-solid fa-circle-check"></i>
                <span><strong>Shopify-Connected Unified Inbox:</strong> Support and sales reps see customer order history, tracking numbers, and total lifetime spend in real-time alongside WhatsApp chats.</span>
              </li>
              <li>
                <i class="fa-solid fa-circle-check"></i>
                <span><strong>24/7 AI Sales Assistant:</strong> Recommends products, answers sizing questions, and resolves order tracking requests without human agent delays.</span>
              </li>
              <li>
                <i class="fa-solid fa-circle-check"></i>
                <span><strong>Interactive WhatsApp Catalogs:</strong> Allows customers to browse products, select variants, and proceed to checkout without ever exiting WhatsApp.</span>
              </li>
            </ul>
            <a href="<?php echo $bp; ?>#contact-section" class="btn-sh-primary">Explore Shared Inbox</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-3 rounded-4 bg-light border text-center shadow-sm">
            <img src="<?php echo $bp; ?>assets/images/shopify-funnel/coversation_into_sales.png" alt="Turn Customer Conversations into Sales" class="img-fluid rounded-3" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. FULL REVENUE LIFECYCLE: EVERY REVENUE MOMENT, COVERED (TILL LTV EXPANSION) -->
  <section class="sh-section bg-alt" id="sh-lifecycle">
    <div class="container">
      <div class="sh-sec-head text-center">
        <div class="sh-pill-badge mx-auto">
          <i class="fa-solid fa-infinity text-primary"></i>
          <span>Full Customer Lifecycle</span>
        </div>
        <h2>Every <span class="text-gradient-purple">Revenue</span> moment, covered</h2>
        <p>From the moment a customer discovers your store to every repeat purchase, HelloBotz works at every single stage of the e-commerce journey.</p>
      </div>

      <div class="sh-moment-grid">
        <!-- 1. Pre-sales -->
        <div class="sh-moment-card">
          <div class="sh-moment-icon">
            <img src="<?php echo $bp; ?>assets/images/shopify-funnel/pre_sales_icon.png" alt="Pre-Sales Icon" width="38" height="38" loading="lazy">
          </div>
          <span class="sh-stage-badge">STAGE 01</span>
          <h4>Pre-Sales Product Discovery</h4>
          <p>Deliver personalized product recommendations via WhatsApp AI whenever shoppers browse but hesitate to add to cart.</p>
        </div>

        <!-- 2. Abandoned Checkout -->
        <div class="sh-moment-card">
          <div class="sh-moment-icon">
            <img src="<?php echo $bp; ?>assets/images/shopify-funnel/conversion_icon.png" alt="Conversion Icon" width="38" height="38" loading="lazy">
          </div>
          <span class="sh-stage-badge">STAGE 02</span>
          <h4>Cart &amp; Checkout Recovery</h4>
          <p>Recover 35–45% of abandoned carts with hyper-personalized WhatsApp messages sent at optimal 15m, 2h, and 24h intervals.</p>
        </div>

        <!-- 3. COD Verification -->
        <div class="sh-moment-card">
          <div class="sh-moment-icon">
            <img src="<?php echo $bp; ?>assets/images/shopify-funnel/post_purchase_icon.png" alt="Post Purchase Icon" width="38" height="38" loading="lazy">
          </div>
          <span class="sh-stage-badge">STAGE 03</span>
          <h4>COD Order Confirmation</h4>
          <p>Verify phone numbers and delivery addresses instantly via interactive buttons. Slash bogus RTO orders by up to 65%.</p>
        </div>

        <!-- 4. Post-Purchase Tracking -->
        <div class="sh-moment-card">
          <div class="sh-moment-icon">
            <img src="<?php echo $bp; ?>assets/images/shopify-funnel/support_icon.png" alt="Support Icon" width="38" height="38" loading="lazy">
          </div>
          <span class="sh-stage-badge">STAGE 04</span>
          <h4>Real-Time Order Tracking</h4>
          <p>Provide automated WhatsApp notifications for dispatch, out-for-delivery, and successful delivery to crush WISMO queries.</p>
        </div>

        <!-- 5. Review & Cross-sell -->
        <div class="sh-moment-card">
          <div class="sh-moment-icon">
            <img src="<?php echo $bp; ?>assets/images/shopify-funnel/retention_icon.png" alt="Retention Icon" width="38" height="38" loading="lazy">
          </div>
          <span class="sh-stage-badge">STAGE 05</span>
          <h4>Reviews &amp; Instant Cross-sells</h4>
          <p>Collect authentic photo reviews and offer smart upsell recommendations directly inside WhatsApp right after unboxing.</p>
        </div>

        <!-- 6. LTV Expansion -->
        <div class="sh-moment-card">
          <div class="sh-moment-icon">
            <img src="<?php echo $bp; ?>assets/images/shopify-funnel/ltv_expansion_icon.png" alt="LTV Expansion Icon" width="38" height="38" loading="lazy">
          </div>
          <span class="sh-stage-badge">STAGE 06</span>
          <h4>LTV Expansion &amp; Win-back</h4>
          <p>Drive predictable repeat orders with automated consumable replenishment alerts and tiered loyalty reward drops.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. COMPARISON MATRIX -->
  <section class="sh-section" id="sh-compare">
    <div class="container">
      <div class="sh-sec-head text-center">
        <div class="sh-pill-badge mx-auto">
          <i class="fa-solid fa-scale-balanced text-primary"></i>
          <span>The Better Way</span>
        </div>
        <h2>The alternative isn't spending more. It's <span class="text-gradient-purple">HelloBotz</span>.</h2>
        <p>Instead of pouring more money into expensive ads, manual support hires, or sluggish agencies, HelloBotz recovers revenue from visitors you've already paid to acquire.</p>
      </div>

      <div class="sh-compare-table-wrap shadow-sm">
        <table class="sh-compare-table">
          <thead>
            <tr>
              <th style="width:25%;">Option</th>
              <th style="width:45%;">The Problem</th>
              <th style="width:30%;">The Outcome</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="fw-bold">Spend more on Ads</td>
              <td>Acquires more first-time orders at razor-thin or negative margins. Does not fix leaky checkout funnels or doorstep RTO cancellations.</td>
              <td class="text-danger fw-semibold">Rising CAC &amp; Lower Profit</td>
            </tr>
            <tr>
              <td class="fw-bold">Hire Support Staff</td>
              <td>Takes weeks to hire and train. Still manual, prone to errors, and human reps cannot answer checkouts 24/7 across midnight traffic spikes.</td>
              <td class="text-warning-emphasis fw-semibold">High Fixed Payroll Overhead</td>
            </tr>
            <tr>
              <td class="fw-bold">Hire an Agency</td>
              <td>Expensive monthly retainers, generic blast campaigns that risk WhatsApp account bans, and slow turnaround times.</td>
              <td class="text-secondary fw-semibold">Ongoing Dependency &amp; Delays</td>
            </tr>
            <tr class="sh-highlight">
              <td class="fw-bold text-success fs-6"><i class="fa-solid fa-check-circle me-1"></i> HelloBotz Revenue Engine</td>
              <td>Plug &amp; play Shopify sync with pre-built recovery playbooks. Live in an afternoon. Every single rupee recovered is clearly attributed on your dashboard.</td>
              <td class="text-success fw-bold">Compounding ROI on Autopilot</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- 8. STEP-BY-STEP SETUP GUIDE -->
  <section class="sh-section bg-alt" id="sh-steps">
    <div class="container">
      <div class="sh-sec-head text-center">
        <div class="sh-pill-badge mx-auto">
          <i class="fa-solid fa-rocket text-success"></i>
          <span>Fast Onboarding</span>
        </div>
        <h2>Connect Shopify with <span class="text-gradient-purple">HelloBotz</span> in 3 Easy Steps</h2>
        <p>Zero technical expertise required. Go live and start recovering abandoned checkouts in under an hour.</p>
      </div>

      <div class="sh-steps-grid">
        <div class="sh-step-box">
          <div class="sh-step-num">1</div>
          <h4>1-Click Shopify Connect</h4>
          <p>Install the HelloBotz app or connect via your Shopify Admin settings in just two clicks. All catalog items, inventory, and order webhooks sync immediately.</p>
        </div>

        <div class="sh-step-box">
          <div class="sh-step-num">2</div>
          <h4>Activate Core Playbooks</h4>
          <p>Toggle on pre-built, Meta-approved WhatsApp templates for Abandoned Cart recovery, COD Confirmation, and Shipping Alerts with customizable timing.</p>
        </div>

        <div class="sh-step-box">
          <div class="sh-step-num">3</div>
          <h4>Go Live &amp; Track ROI</h4>
          <p>Watch recovered carts and verified orders stream in on your HelloBotz analytics dashboard with full revenue attribution for every message.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. SHOPIFY MERCHANT FAQS -->
  <section class="sh-section" id="sh-faq">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-5">
          <div class="sh-pill-badge">
            <i class="fa-solid fa-circle-question text-primary"></i>
            <span>Got Questions?</span>
          </div>
          <h2 class="fw-bold" style="font-size:2.2rem;line-height:1.2;">Frequently Asked Questions</h2>
          <p class="text-muted mt-3 mb-4">
            Everything you need to know about setting up and growing your Shopify store with HelloBotz WhatsApp automation.
          </p>
          <a href="<?php echo $bp; ?>#contact-section" class="btn-sh-primary">Speak with a Shopify Specialist</a>
        </div>

        <div class="col-lg-7">
          <div class="faq-list">
            <!-- FAQ 1 -->
            <div class="faq-itemm active">
              <button type="button" class="faq-questionn" aria-expanded="true">
                <span>How long does it take to set up HelloBotz with Shopify?</span>
                <i class="fa-solid fa-chevron-down faq-arrow"></i>
              </button>
              <div class="faq-answerr">
                Connecting HelloBotz to your Shopify store takes less than 15 minutes. Once connected, your store products and order triggers sync automatically, and pre-built templates for cart recovery and COD verification are ready to launch immediately.
              </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-itemm">
              <button type="button" class="faq-questionn" aria-expanded="false">
                <span>Do I need a developer or coding skills?</span>
                <i class="fa-solid fa-chevron-down faq-arrow"></i>
              </button>
              <div class="faq-answerr">
                Not at all! HelloBotz is 100% no-code. You simply connect your Shopify store using our straightforward guided onboarding, and our team provides free 1-on-1 assistance to help you configure your WhatsApp Business number.
              </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-itemm">
              <button type="button" class="faq-questionn" aria-expanded="false">
                <span>How does COD verification reduce RTO for Shopify merchants?</span>
                <i class="fa-solid fa-chevron-down faq-arrow"></i>
              </button>
              <div class="faq-answerr">
                When a customer places a Cash on Delivery order, HelloBotz instantly triggers an automated WhatsApp message with order details and two buttons: "Confirm Order" and "Cancel Order", plus an option to edit the delivery address. This weeds out fake orders, verifies delivery intent, and cuts RTO losses by up to 65%.
              </div>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-itemm">
              <button type="button" class="faq-questionn" aria-expanded="false">
                <span>Can I customize the abandoned cart messages and discount codes?</span>
                <i class="fa-solid fa-chevron-down faq-arrow"></i>
              </button>
              <div class="faq-answerr">
                Yes! You have full control over the message copy, timing (e.g., send 15 mins vs 2 hours post-abandonment), discount incentives, and dynamic variables like customer name, product image, and cart items.
              </div>
            </div>

            <!-- FAQ 5 -->
            <div class="faq-itemm">
              <button type="button" class="faq-questionn" aria-expanded="false">
                <span>How does HelloBotz attribute recovered revenue?</span>
                <i class="fa-solid fa-chevron-down faq-arrow"></i>
              </button>
              <div class="faq-answerr">
                Every recovered cart link contains unique tracking tokens that map back to your Shopify order IDs. Your HelloBotz analytics dashboard reports the exact revenue recovered, orders verified, and repeat purchases generated by each specific playbook.
              </div>
            </div>

            <!-- FAQ 6 -->
            <div class="faq-itemm">
              <button type="button" class="faq-questionn" aria-expanded="false">
                <span>Is HelloBotz an official Meta WhatsApp Business Solution?</span>
                <i class="fa-solid fa-chevron-down faq-arrow"></i>
              </button>
              <div class="faq-answerr">
                Yes! HelloBotz operates on Meta's official WhatsApp Business Cloud API. This ensures high message deliverability, enterprise security, end-to-end encryption, and assistance in securing the official Meta Verified Blue Tick.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 10. CLOSING HIGH-CONVERTING CTA BANNER -->
  <section class="sh-section" style="padding-top:20px;padding-bottom:90px;">
    <div class="container">
      <div class="sh-final-banner">
        <h2>Every Shopify Brand using HelloBotz can say:<br><span style="color:#34d399;">"HelloBotz recovered ₹X for us this month."</span></h2>
        <p>Join hundreds of high-growth e-commerce brands automating sales, slashes RTO, and scaling customer lifetime value on WhatsApp.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="<?php echo $bp; ?>#contact-section" class="btn-sh-white" style="font-size:1.05rem;padding:14px 32px;">
            <span>Get Started Free</span>
            <i class="fa-solid fa-arrow-right ms-2"></i>
          </a>
          <a href="<?php echo $bp; ?>#contact-section" class="btn-sh-secondary" style="font-size:1.05rem;padding:14px 32px;background:rgba(255,255,255,0.15);color:#ffffff!important;border-color:rgba(255,255,255,0.3);">
            <span>Book Live Demo</span>
          </a>
        </div>
      </div>
    </div>
  </section>

</div>

<script>
  // FAQ Accordion Toggle Interaction
  document.querySelectorAll('.faq-questionn').forEach(button => {
    button.addEventListener('click', () => {
      const item = button.closest('.faq-itemm');
      const isActive = item.classList.contains('active');

      document.querySelectorAll('.faq-itemm').forEach(i => {
        i.classList.remove('active');
        const btn = i.querySelector('.faq-questionn');
        if (btn) btn.setAttribute('aria-expanded', 'false');
      });

      if (!isActive) {
        item.classList.add('active');
        button.setAttribute('aria-expanded', 'true');
      }
    });
  });
</script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
