<?php
$basePath = isset($basePath) ? $basePath : '../../';
$bp = isset($bp) ? $bp : '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'WhatsApp Business API & Automation Platform | HelloBotz';
$pageDescription = 'Scale your sales and customer support with Official Meta WhatsApp Business API. Multi-agent shared inbox, automated AI reply builder, bulk broadcasts, and zero-ban compliance.';
$canonicalUrl = 'https://hellobotz.com/channel/whatsapp/';
$ogImage = 'assets/images/og-image.png';

include __DIR__ . '/../../includes/header.php';
?>

<style>
  /* Channel WhatsApp Page Styles */
  :root {
    --wa-green: #059669;
    --wa-green-hover: #047857;
    --wa-green-light: rgba(5, 150, 105, 0.1);
    --wa-dark: #0f172a;
    --wa-slate: #1e293b;
  }

  .cw-page {
    background: #ffffff;
    color: #1e293b;
    font-family: inherit;
    overflow-x: hidden;
    width: 100%;
    max-width: 100vw;
    box-sizing: border-box;
  }

  /* Breadcrumb */
  .cw-breadcrumb {
    padding: 0.75rem 1.5rem 0.35rem;
    max-width: 1200px;
    margin: 0 auto;
    font-size: 0.85rem;
    color: #64748b;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }
  .cw-breadcrumb a {
    color: #64748b;
    text-decoration: none;
    transition: color 0.15s;
  }
  .cw-breadcrumb a:hover {
    color: var(--wa-green);
  }

  /* Hero Section */
  .cw-hero-section {
    padding: 1.5rem 1.5rem 4.5rem;
    max-width: 1200px;
    width: 100%;
    margin: 0 auto;
    box-sizing: border-box;
  }
  .cw-hero-grid {
    display: grid;
    grid-template-columns: 1.15fr 0.85fr;
    gap: 3.5rem;
    align-items: center;
  }
  .cw-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(5, 150, 105, 0.1);
    border: 1px solid rgba(5, 150, 105, 0.25);
    color: #059669;
    font-size: 0.82rem;
    font-weight: 700;
    padding: 0.35rem 0.85rem;
    border-radius: 999px;
    margin-bottom: 1.25rem;
  }
  .cw-hero-title {
    font-size: clamp(2.25rem, 4.5vw, 3.5rem);
    font-weight: 800;
    line-height: 1.15;
    color: #0f172a;
    letter-spacing: -0.02em;
    margin-bottom: 1.25rem;
  }
  .cw-hero-title .highlight-green {
    color: #059669;
    background: linear-gradient(135deg, #059669 0%, #10b981 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .cw-hero-desc {
    font-size: 1.15rem;
    line-height: 1.65;
    color: #475569;
    margin-bottom: 2rem;
    max-width: 540px;
  }
  /* Master Hero CTA Action Row - Perfectly Aligned Single-Line Layout */
  .cw-hero-actions {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    gap: 0.75rem !important;
    flex-wrap: nowrap !important;
    margin-bottom: 2rem !important;
    width: max-content !important;
    max-width: 100% !important;
  }
  .cw-btn-primary {
    background: #059669 !important;
    color: #ffffff !important;
    font-family: inherit !important;
    font-weight: 700 !important;
    font-size: 0.92rem !important;
    height: 46px !important;
    line-height: 46px !important;
    padding: 0 1.3rem !important;
    border-radius: 9999px !important;
    border: 1.5px solid #059669 !important;
    text-decoration: none !important;
    box-shadow: 0 6px 18px -3px rgba(5, 150, 105, 0.38) !important;
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 0.45rem !important;
    white-space: nowrap !important;
    box-sizing: border-box !important;
    flex-shrink: 0 !important;
    vertical-align: middle !important;
    cursor: pointer !important;
  }
  .cw-btn-primary:hover {
    background: #047857 !important;
    border-color: #047857 !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 10px 24px -3px rgba(5, 150, 105, 0.5) !important;
    color: #ffffff !important;
  }
  .cw-btn-primary svg {
    width: 16px !important;
    height: 16px !important;
    flex-shrink: 0 !important;
    transition: transform 0.2s ease !important;
  }
  .cw-btn-primary:hover svg {
    transform: translateX(3px) !important;
  }
  .cw-btn-secondary {
    background: #ffffff !important;
    color: #0f172a !important;
    font-family: inherit !important;
    font-weight: 600 !important;
    font-size: 0.92rem !important;
    height: 46px !important;
    line-height: 46px !important;
    padding: 0 1.3rem !important;
    border-radius: 9999px !important;
    border: 1.5px solid #cbd5e1 !important;
    text-decoration: none !important;
    box-shadow: 0 4px 12px -2px rgba(15, 23, 42, 0.08) !important;
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 0.45rem !important;
    cursor: pointer !important;
    white-space: nowrap !important;
    box-sizing: border-box !important;
    flex-shrink: 0 !important;
    vertical-align: middle !important;
  }
  .cw-btn-secondary:hover {
    background: #f8fafc !important;
    border-color: #94a3b8 !important;
    color: #0f172a !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 6px 16px -2px rgba(15, 23, 42, 0.12) !important;
  }
  .cw-hero-actions .cw-btn-data,
  .cw-hero-actions .btn-download-data {
    background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%) !important;
    color: #ffffff !important;
    font-family: inherit !important;
    font-weight: 700 !important;
    font-size: 0.92rem !important;
    height: 46px !important;
    line-height: 46px !important;
    padding: 0 1.25rem !important;
    border-radius: 9999px !important;
    border: 1.5px solid rgba(255, 255, 255, 0.25) !important;
    text-decoration: none !important;
    box-shadow: 0 6px 18px -3px rgba(79, 70, 229, 0.42) !important;
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 0.45rem !important;
    cursor: pointer !important;
    white-space: nowrap !important;
    box-sizing: border-box !important;
    flex-shrink: 0 !important;
    vertical-align: middle !important;
  }
  .cw-hero-actions .cw-btn-data:hover,
  .cw-hero-actions .btn-download-data:hover {
    background: linear-gradient(135deg, #4338CA 0%, #6D28D9 100%) !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 10px 24px -3px rgba(79, 70, 229, 0.58) !important;
    color: #ffffff !important;
  }
  .cw-hero-actions .cw-btn-data svg,
  .cw-hero-actions .btn-download-data svg {
    width: 16px !important;
    height: 16px !important;
    flex-shrink: 0 !important;
    transition: transform 0.2s ease !important;
  }
  .cw-hero-actions .cw-btn-data:hover svg,
  .cw-hero-actions .btn-download-data:hover svg {
    transform: translateY(1.5px) !important;
  }
  .cw-trust-row {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    flex-wrap: wrap;
    font-size: 0.85rem;
    font-weight: 600;
    color: #64748b;
  }
  .cw-trust-item {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
  }

  /* Hero Floating Visual */
  .cw-hero-visual {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .cw-hero-img-wrap {
    position: relative;
    width: 100%;
    max-width: 550px;
    margin: 0 auto;
    transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .cw-hero-img-wrap:hover {
    transform: translateY(-6px);
  }
  .cw-hero-img {
    width: 100%;
    height: auto;
    display: block;
    filter: drop-shadow(0 20px 35px rgba(5, 150, 105, 0.12));
  }

  /* Counters Section */
  .cw-counters-section {
    padding: 0 1.5rem 4rem;
    max-width: 1200px;
    margin: 0 auto;
  }
  .cw-counters-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
    padding: 2.25rem 2.5rem;
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.06);
  }
  .cw-counter-item {
    text-align: center;
    padding: 0.5rem 1rem;
    border-right: 1px solid #f1f5f9;
  }
  .cw-counter-item:last-child {
    border-right: none;
  }
  .cw-counter-val {
    font-size: clamp(2rem, 3.5vw, 2.75rem);
    font-weight: 800;
    line-height: 1.1;
    color: #059669;
    letter-spacing: -0.02em;
    margin-bottom: 0.35rem;
  }
  .cw-counter-title {
    font-size: 0.92rem;
    font-weight: 600;
    color: #64748b;
  }
  @media (max-width: 768px) {
    .cw-counters-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 1.5rem 1rem;
      padding: 1.5rem 1rem;
    }
    .cw-counter-item:nth-child(2) {
      border-right: none;
    }
  }

  /* Comparison Section */
  .cw-comparison-section {
    background: #f8fafc;
    padding: 5rem 1.5rem;
    border-top: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
  }
  .cw-section-header {
    text-align: center;
    max-width: 760px;
    margin: 0 auto 3.5rem;
  }
  .cw-section-title {
    font-size: clamp(1.85rem, 3.5vw, 2.75rem);
    font-weight: 800;
    color: #0f172a;
    line-height: 1.2;
    margin: 0.75rem 0 1rem;
    letter-spacing: -0.01em;
  }
  .cw-section-subtitle {
    font-size: 1.1rem;
    color: #64748b;
    line-height: 1.6;
  }

  .cw-table-container {
    max-width: 1050px;
    margin: 0 auto;
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
    overflow: hidden;
  }
  .cw-comp-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
  }
  .cw-comp-table th {
    padding: 18px 24px;
    font-size: 0.85rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    background: #f1f5f9;
    border-bottom: 2px solid #e2e8f0;
  }
  .cw-comp-table th.col-api {
    background: rgba(5, 150, 105, 0.1);
    color: #059669;
  }
  .cw-comp-table td {
    padding: 20px 24px;
    border-bottom: 1px solid #e2e8f0;
    font-size: 0.95rem;
    vertical-align: middle;
  }
  .cw-comp-table tr:last-child td {
    border-bottom: none;
  }
  .cw-comp-feature {
    font-weight: 700;
    color: #0f172a;
  }
  .cw-comp-standard {
    color: #64748b;
  }
  .cw-comp-api {
    color: #059669;
    font-weight: 700;
    background: rgba(5, 150, 105, 0.03);
  }

  /* Interactive Select Capabilities Showcase */
  .cw-showcase-section {
    padding: 5.5rem 1.5rem;
    max-width: 1200px;
    margin: 0 auto;
    box-sizing: border-box;
  }
  .cw-cap-container {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 24px;
    box-shadow: 0 4px 30px -4px rgba(0, 0, 0, 0.06);
    display: grid;
    grid-template-columns: 310px 1fr;
    margin-top: 3rem;
    overflow: hidden;
    position: relative;
  }
  .cw-cap-sidebar {
    padding: 2rem 1.25rem 2rem 1.5rem;
    border-right: 1px solid #f1f5f9;
    display: flex;
    flex-direction: column;
    background: #ffffff;
  }
  .cw-cap-sidebar-title {
    font-size: 1.1rem;
    font-weight: 800;
    color: #0f172a;
    padding-left: 0.5rem;
    padding-bottom: 1.15rem;
    margin-bottom: 0.85rem;
    border-bottom: 1px solid #f1f5f9;
    letter-spacing: -0.01em;
  }
  .cw-cap-tabs {
    display: flex;
    flex-direction: column;
    gap: 6px;
    max-height: 540px;
    overflow-y: auto;
    padding-right: 6px;
    scrollbar-width: thin;
    scrollbar-color: #059669 #f1f5f9;
  }
  .cw-cap-tabs::-webkit-scrollbar {
    width: 5px;
  }
  .cw-cap-tabs::-webkit-scrollbar-track {
    background: #f1f5f9;
    border-radius: 6px;
  }
  .cw-cap-tabs::-webkit-scrollbar-thumb {
    background: #059669;
    border-radius: 6px;
  }
  .cw-cap-tab {
    display: flex;
    align-items: center;
    gap: 14px;
    width: 100%;
    padding: 12px 16px;
    border-radius: 12px;
    border: none;
    background: transparent;
    color: #475569;
    font-size: 0.95rem;
    font-weight: 700;
    font-family: inherit;
    text-align: left;
    cursor: pointer;
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
    outline: none;
    user-select: none;
  }
  .cw-cap-tab:hover:not(.active) {
    background: #f8fafc;
    color: #0f172a;
  }
  .cw-cap-tab.active {
    background: #059669;
    color: #ffffff;
    box-shadow: 0 4px 14px rgba(5, 150, 105, 0.3);
  }
  .cw-cap-tab svg {
    width: 20px;
    height: 20px;
    flex-shrink: 0;
    stroke: #64748b;
    transition: stroke 0.2s ease;
  }
  .cw-cap-tab.active svg {
    stroke: #ffffff;
  }
  .cw-cap-panel {
    padding: 2.25rem 2.5rem;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    background: #ffffff;
  }
  .cw-cap-preview {
    width: 100%;
    aspect-ratio: 16 / 9;
    max-height: 440px;
    background: transparent;
    border: none;
    border-radius: 0;
    overflow: visible;
    position: relative;
    box-shadow: none;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .cw-cap-img {
    max-width: 100%;
    max-height: 100%;
    width: auto;
    height: auto;
    object-fit: contain;
    display: block;
    filter: drop-shadow(0 20px 35px rgba(15, 23, 42, 0.08));
    transition: opacity 0.22s cubic-bezier(0.16, 1, 0.3, 1), transform 0.22s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .cw-cap-img.animating {
    opacity: 0;
    transform: scale(0.985);
  }
  .cw-cap-content {
    margin-top: 1.75rem;
  }
  .cw-cap-title {
    font-size: 1.85rem;
    font-weight: 800;
    color: #0f172a;
    letter-spacing: -0.02em;
    margin: 0 0 0.75rem 0;
    transition: opacity 0.2s ease;
  }
  .cw-cap-desc {
    font-size: 1.02rem;
    color: #475569;
    line-height: 1.65;
    margin: 0 0 1.5rem 0;
    max-width: 720px;
    transition: opacity 0.2s ease;
  }
  .cw-cap-bullets {
    display: flex;
    flex-wrap: wrap;
    gap: 1.25rem 3rem;
    list-style: none;
    padding: 0;
    margin: 0;
    transition: opacity 0.2s ease;
  }
  .cw-cap-bullet-item {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    font-size: 0.95rem;
    font-weight: 700;
    color: #0f172a;
  }
  .cw-cap-bullet-item svg {
    color: #059669;
    stroke: #059669;
    flex-shrink: 0;
  }

  /* Steps Section */
  .cw-steps-section {
    padding: 6rem 1.5rem;
    background: #0f172a;
    color: #ffffff;
    position: relative;
  }
  .cw-steps-container {
    max-width: 1200px;
    margin: 0 auto;
  }
  .cw-steps-header {
    text-align: center;
    max-width: 760px;
    margin: 0 auto 3.5rem;
  }
  .cw-steps-header .cw-badge-pill {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: rgba(5, 150, 105, 0.2) !important;
    color: #34d399 !important;
    border: 1px solid rgba(5, 150, 105, 0.4) !important;
    font-size: 0.85rem;
    font-weight: 700;
    padding: 0.4rem 1.1rem;
    border-radius: 999px;
    margin-bottom: 1.25rem;
  }
  .cw-steps-title {
    font-size: clamp(2rem, 3.5vw, 2.75rem);
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 0.75rem;
    letter-spacing: -0.02em;
    line-height: 1.2;
  }
  .cw-steps-subtitle {
    font-size: 1.05rem;
    color: #94a3b8;
    max-width: 620px;
    margin: 0 auto;
    line-height: 1.6;
  }
  .cw-steps-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
  }
  .cw-step-card {
    background: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 20px;
    padding: 2.25rem 1.75rem;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.25);
    display: flex;
    flex-direction: column;
  }
  .cw-step-card:hover {
    background: #24324a;
    border-color: rgba(16, 185, 129, 0.45);
    transform: translateY(-5px);
    box-shadow: 0 20px 35px -10px rgba(0, 0, 0, 0.4), 0 0 20px rgba(16, 185, 129, 0.1);
  }
  .cw-step-number {
    font-size: 2.5rem;
    font-weight: 900;
    color: #10b981;
    line-height: 1;
    margin-bottom: 1.25rem;
    letter-spacing: -0.03em;
  }
  .cw-step-heading {
    font-size: 1.25rem;
    font-weight: 700;
    color: #ffffff;
    margin: 0 0 0.75rem;
    line-height: 1.3;
  }
  .cw-step-text {
    font-size: 0.92rem;
    color: #94a3b8;
    line-height: 1.6;
    margin: 0;
  }
  @media (max-width: 1024px) {
    .cw-steps-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 1.25rem;
    }
  }
  @media (max-width: 640px) {
    .cw-steps-section {
      padding: 4rem 1.25rem;
    }
    .cw-steps-header {
      margin-bottom: 2.5rem;
    }
    .cw-steps-grid {
      grid-template-columns: 1fr;
      gap: 1rem;
    }
    .cw-step-card {
      padding: 1.75rem 1.5rem;
    }
  }

  /* Sales CTA Section */
  .cw-sales-section {
    background: linear-gradient(135deg, #059669 0%, #047857 100%);
    color: #ffffff;
    padding: 5.5rem 1.5rem;
    text-align: center;
  }
  .cw-sales-inner {
    max-width: 820px;
    margin: 0 auto;
  }
  .cw-sales-title {
    font-size: clamp(2rem, 4vw, 3.25rem);
    font-weight: 900;
    line-height: 1.2;
    margin-bottom: 1.25rem;
    letter-spacing: -0.01em;
  }
  .cw-sales-desc {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.92);
    line-height: 1.6;
    margin-bottom: 2.5rem;
  }
  .cw-sales-actions {
    display: flex;
    justify-content: center;
    gap: 1.25rem;
    flex-wrap: wrap;
    margin-bottom: 2.25rem;
  }
  .cw-btn-white {
    background: #ffffff;
    color: #059669;
    font-weight: 800;
    font-size: 1.05rem;
    padding: 0.95rem 2.25rem;
    border-radius: 999px;
    text-decoration: none;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    transition: all 0.2s ease;
  }
  .cw-btn-white:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    color: #047857;
  }
  .cw-btn-transparent {
    background: transparent;
    color: #ffffff;
    font-weight: 700;
    font-size: 1.05rem;
    padding: 0.95rem 2.25rem;
    border-radius: 999px;
    border: 2px solid rgba(255, 255, 255, 0.6);
    text-decoration: none;
    transition: all 0.2s ease;
  }
  .cw-btn-transparent:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: #ffffff;
    color: #ffffff;
    transform: translateY(-2px);
  }
  .cw-sales-trust {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    font-size: 0.9rem;
    font-weight: 700;
    color: rgba(255, 255, 255, 0.9);
    flex-wrap: wrap;
  }

  @media (max-width: 900px) {
    .cw-hero-section {
      width: 100% !important;
      max-width: 100% !important;
      padding: 1.5rem 1rem 3rem !important;
      box-sizing: border-box !important;
      overflow-x: hidden !important;
    }
    .cw-hero-grid {
      display: flex !important;
      flex-direction: column !important;
      gap: 2rem !important;
      width: 100% !important;
      max-width: 100% !important;
      min-width: 0 !important;
      box-sizing: border-box !important;
    }
    .cw-hero-content {
      width: 100% !important;
      max-width: 100% !important;
      min-width: 0 !important;
      box-sizing: border-box !important;
      text-align: center !important;
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
    }
    .cw-badge-pill {
      margin: 0 auto 1.25rem !important;
      white-space: normal !important;
      word-break: break-word !important;
      text-align: center !important;
      max-width: 100% !important;
    }
    .cw-hero-title {
      font-size: clamp(1.65rem, 6.8vw, 2.35rem) !important;
      line-height: 1.22 !important;
      word-break: break-word !important;
      overflow-wrap: break-word !important;
      text-align: center !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      margin-bottom: 1rem !important;
    }
    .cw-hero-desc {
      font-size: 0.95rem !important;
      line-height: 1.55 !important;
      word-break: break-word !important;
      overflow-wrap: break-word !important;
      text-align: center !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      margin: 0 auto 1.5rem !important;
    }
    .cw-hero-actions {
      display: flex !important;
      flex-direction: column !important;
      width: 100% !important;
      max-width: 320px !important;
      margin: 0 auto 1.5rem !important;
      gap: 0.65rem !important;
      align-items: stretch !important;
    }
    .cw-hero-actions .cw-btn-primary,
    .cw-hero-actions .cw-btn-secondary,
    .cw-hero-actions .cw-btn-data,
    .cw-hero-actions .btn-download-data {
      width: 100% !important;
      box-sizing: border-box !important;
      justify-content: center !important;
      text-align: center !important;
      height: 46px !important;
      line-height: 46px !important;
      padding: 0 1.25rem !important;
      font-size: 0.92rem !important;
    }
    .cw-trust-row {
      display: grid !important;
      grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
      gap: 0.5rem 0.6rem !important;
      width: 100% !important;
      max-width: 360px !important;
      margin: 0 auto 1.5rem !important;
      font-size: 0.76rem !important;
      align-items: center !important;
      justify-items: center !important;
    }
    .cw-trust-item {
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 4px !important;
      white-space: nowrap !important;
      font-size: 0.76rem !important;
    }
    .cw-phone-wrapper {
      width: min(315px, calc(100vw - 32px)) !important;
      max-width: 315px !important;
      margin: 1.25rem auto 0 !important;
      box-sizing: border-box !important;
      perspective: none !important;
      transform-style: flat !important;
      overflow: visible !important;
    }
    .cw-phone-device {
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      transform: none !important;
      transform-style: flat !important;
      border-radius: 36px !important;
      padding: 8px 8px 6px !important;
      border-width: 2.5px !important;
    }
    .cw-phone-screen {
      height: 440px !important;
      border-radius: 28px !important;
    }
    .cw-phone-aura {
      inset: 0 !important;
      filter: blur(16px) !important;
      border-radius: 40px !important;
    }
    .cw-floating-card {
      display: none !important;
    }
    .cw-table-container {
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      overflow-x: auto !important;
      -webkit-overflow-scrolling: touch !important;
      border-radius: 14px !important;
      margin: 0 auto !important;
    }
    .cw-comp-table {
      min-width: 560px !important;
      width: 100% !important;
    }
    .cw-comp-table th,
    .cw-comp-table td {
      padding: 12px 14px !important;
      font-size: 0.82rem !important;
    }
    .cw-showcase-section,
    .cw-steps-section,
    .cw-comparison-section,
    .cw-sales-section {
      padding: 3rem 1rem !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
    }
    .cw-journey-flow {
      gap: 2rem !important;
      width: 100% !important;
      max-width: 100% !important;
    }
    .cw-journey-card {
      grid-template-columns: 1fr !important;
      gap: 1.5rem !important;
      padding: 1.5rem 1.2rem !important;
      width: 100% !important;
      max-width: 100% !important;
    }
    .cw-journey-card.reverse {
      direction: ltr !important;
    }
    .cw-journey-card.reverse .cw-journey-media {
      order: -1 !important;
    }
    .cw-journey-title {
      font-size: 1.3rem !important;
    }
    .cw-cap-container {
      grid-template-columns: 1fr !important;
      border-radius: 18px !important;
      margin-top: 2rem !important;
    }
    .cw-cap-sidebar {
      border-right: none !important;
      border-bottom: 1px solid #f1f5f9 !important;
      padding: 1.25rem 1rem !important;
    }
    .cw-cap-tabs {
      display: flex !important;
      flex-direction: row !important;
      overflow-x: auto !important;
      white-space: nowrap !important;
      max-height: none !important;
      gap: 8px !important;
      padding: 4px 4px 10px !important;
      -webkit-overflow-scrolling: touch !important;
      scrollbar-width: none !important;
    }
    .cw-cap-tabs::-webkit-scrollbar {
      display: none !important;
      height: 0 !important;
    }
    .cw-cap-tab {
      display: inline-flex !important;
      align-items: center !important;
      flex-shrink: 0 !important;
      width: auto !important;
      padding: 9px 16px !important;
      border-radius: 9999px !important;
      font-size: 0.88rem !important;
      font-weight: 700 !important;
      white-space: nowrap !important;
      border: 1.5px solid #e2e8f0 !important;
      background: #ffffff !important;
      color: #475569 !important;
      gap: 8px !important;
    }
    .cw-cap-tab.active {
      background: #059669 !important;
      color: #ffffff !important;
      border-color: #059669 !important;
      box-shadow: 0 4px 12px rgba(5, 150, 105, 0.3) !important;
    }
    .cw-cap-panel {
      padding: 1.5rem 1.2rem !important;
    }
    .cw-cap-preview {
      border-radius: 14px !important;
      aspect-ratio: auto !important;
      width: 100% !important;
      min-height: 200px !important;
      max-height: 320px !important;
      height: auto !important;
      position: relative !important;
      overflow: visible !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      background: transparent !important;
    }
    .cw-cap-img {
      position: relative !important;
      top: auto !important;
      left: auto !important;
      width: 100% !important;
      max-width: 100% !important;
      height: auto !important;
      max-height: 300px !important;
      object-fit: contain !important;
      display: block !important;
      margin: 0 auto !important;
      filter: drop-shadow(0 10px 24px rgba(15, 23, 42, 0.08)) !important;
    }
    .cw-cap-title {
      font-size: 1.45rem !important;
      margin-top: 1.25rem !important;
    }
    .cw-cap-desc {
      font-size: 0.92rem !important;
      margin-bottom: 1.25rem !important;
    }
    .cw-cap-bullets {
      flex-direction: column !important;
      gap: 0.75rem !important;
    }
    .cw-steps-grid {
      grid-template-columns: 1fr !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      gap: 1rem !important;
    }
    .cw-step-card {
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
      padding: 1.5rem 1.25rem !important;
    }
    .cw-sales-inner {
      padding: 2.5rem 1.25rem !important;
      border-radius: 24px !important;
      width: 100% !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
    }
    .cw-sales-title {
      font-size: clamp(1.5rem, 5.5vw, 2rem) !important;
    }
    .cw-sales-desc {
      font-size: 0.95rem !important;
    }
    .cw-sales-actions {
      flex-direction: column !important;
      width: 100% !important;
      max-width: 300px !important;
      margin: 0 auto 1.25rem !important;
      gap: 0.65rem !important;
    }
    .cw-btn-white,
    .cw-btn-transparent {
      width: 100% !important;
      justify-content: center !important;
      box-sizing: border-box !important;
    }
    .cw-sales-trust {
      flex-direction: column !important;
      gap: 0.4rem !important;
      align-items: center !important;
    }
  }


  /* Extracted Brand Marquee and Showcase Styles */
     DUAL-ROW CLIENT TICKER (BRANDS MARQUEE) - Reference: media_1789590019527.png
     ========================================================================== */
  .brands-section {
    background: #f0f0f0;
    padding: 24px 0;
    overflow: hidden;
    position: relative;
    border-top: 1px solid #e5e7eb;
    border-bottom: 1px solid #e5e7eb;
  }
  .brands-inner {
    position: relative;
    overflow: hidden;
    max-width: 100%;
    margin: 0 auto;
  }
  .brands-inner::before,
  .brands-inner::after {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    width: 10%;
    max-width: 140px;
    min-width: 60px;
    pointer-events: none;
    z-index: 2;
  }
  .brands-inner::before {
    left: 0;
    background: linear-gradient(to right, #f0f0f0 0%, rgba(240, 240, 240, 0) 100%);
  }
  .brands-inner::after {
    right: 0;
    background: linear-gradient(to left, #f0f0f0 0%, rgba(240, 240, 240, 0) 100%);
  }
  .brands-inner-dual {
    display: flex;
    flex-direction: column;
    gap: 16px;
  }
  .brands-track {
    display: flex;
    width: max-content;
    gap: 18px;
    align-items: center;
    will-change: transform;
  }
  .brands-track-left {
    animation: 50s linear infinite brandsScrollLeft;
  }
  .brands-track-right {
    animation: 50s linear infinite brandsScrollRight;
  }
  .brands-inner:hover .brands-track-left,
  .brands-inner:hover .brands-track-right {
    animation-play-state: paused;
  }
  @keyframes brandsScrollLeft {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
  @keyframes brandsScrollRight {
    0% { transform: translateX(-50%); }
    100% { transform: translateX(0); }
  }
  .brand-badge {
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
    background: #ffffff !important;
    border: 1px solid #e5e7eb !important;
    border-radius: 9999px !important;
    padding: 6px 14px 6px 8px !important;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05) !important;
    transition: transform 0.2s ease, box-shadow 0.2s ease !important;
    white-space: nowrap !important;
    flex-shrink: 0 !important;
    cursor: default !important;
    user-select: none !important;
  }
  .brand-badge:hover {
    transform: translateY(-2px) !important;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) !important;
  }
  .brand-badge img:first-child {
    width: 24px !important;
    height: 24px !important;
    border-radius: 9999px !important;
    object-fit: cover !important;
    flex-shrink: 0 !important;
  }
  .brand-badge span {
    font-size: 14px !important;
    font-weight: 500 !important;
    color: #1a1a1a !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 4px !important;
    line-height: 1 !important;
  }
  .brand-badge span img {
    width: 16px !important;
    height: 12px !important;
    object-fit: cover !important;
    border-radius: 2px !important;
    display: inline-block !important;
    vertical-align: middle !important;
    margin-left: 4px !important;
  }
  .brand-badge svg {
    width: 16px !important;
    height: 16px !important;
    color: #3b82f6 !important;
    flex-shrink: 0 !important;
    display: inline-block !important;
  }
  @media (max-width: 768px) {
    .brands-section {
      padding: 18px 0;
    }
    .brands-inner-dual {
      gap: 12px;
    }
    .brands-track {
      gap: 12px;
    }
    .brands-inner::before,
    .brands-inner::after {
      width: 50px;
    }
    .brand-badge {
      padding: 5px 12px 5px 7px !important;
    }
    .brand-badge span {
      font-size: 13px !important;
    }
  }



  /* Platform Showcase Section */
  .cw-platform-showcase-section {
    padding: 4.5rem 1.5rem 5rem;
    background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 60%, #ffffff 100%);
    position: relative;
    overflow: hidden;
  }
  .cw-showcase-container {
    max-width: 1140px;
    margin: 0 auto;
    position: relative;
  }
  .cw-showcase-header {
    text-align: center;
    max-width: 780px;
    margin: 0 auto 2.5rem;
  }
  .cw-showcase-pill {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 6px 14px;
    background: #ecfdf5;
    border: 1px solid #a7f3d0;
    border-radius: 30px;
    font-size: 0.78rem;
    font-weight: 700;
    color: #065f46;
    margin-bottom: 1rem;
    letter-spacing: 0.05em;
  }
  .cw-showcase-title {
    font-size: 2.35rem;
    font-weight: 800;
    color: #0f172a;
    line-height: 1.25;
    margin-bottom: 0.85rem;
    letter-spacing: -0.02em;
  }
  .cw-showcase-subtitle {
    font-size: 1.05rem;
    color: #64748b;
    line-height: 1.6;
    margin: 0;
  }
  .cw-showcase-tabs {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-bottom: 2.25rem;
    flex-wrap: wrap;
  }
  .cw-showcase-tab {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 10px 18px;
    font-size: 0.88rem;
    font-weight: 600;
    color: #475569;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s ease;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
  }
  .cw-showcase-tab:hover {
    border-color: #cbd5e1;
    color: #0f172a;
    transform: translateY(-1px);
  }
  .cw-showcase-tab.active {
    background: #0f172a;
    border-color: #0f172a;
    color: #ffffff;
    box-shadow: 0 4px 14px rgba(15, 23, 42, 0.2);
  }
  .cw-showcase-window-wrap {
    position: relative;
    max-width: 1040px;
    margin: 0 auto;
  }
  .cw-showcase-window {
    background: #ffffff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 25px 60px -15px rgba(15, 23, 42, 0.22), 0 0 0 1px rgba(15, 23, 42, 0.08);
  }
  .cw-window-titlebar {
    background: #0f172a;
    padding: 12px 18px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  }
  .cw-window-dots {
    display: flex;
    gap: 7px;
  }
  .cw-dot {
    width: 11px;
    height: 11px;
    border-radius: 50%;
  }
  .cw-dot.red { background: #ef4444; }
  .cw-dot.yellow { background: #f59e0b; }
  .cw-dot.green { background: #10b981; }
  .cw-window-url-bar {
    display: flex;
    align-items: center;
    gap: 7px;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.12);
    padding: 5px 14px;
    border-radius: 8px;
    color: #cbd5e1;
    font-size: 0.78rem;
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
    max-width: 480px;
    width: 100%;
    justify-content: center;
  }
  .cw-window-actions {
    display: flex;
    align-items: center;
  }
  .cw-window-expand {
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.15);
    color: #f1f5f9;
    padding: 5px 12px;
    border-radius: 7px;
    font-size: 0.74rem;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 6px;
    transition: background 0.2s;
  }
  .cw-window-expand:hover {
    background: rgba(255, 255, 255, 0.22);
  }
  .cw-window-screen {
    background: #0b0f19;
    position: relative;
    overflow: hidden;
  }
  .cw-tab-media {
    display: none;
    animation: cwFadeInMedia 0.35s ease;
  }
  .cw-tab-media.active {
    display: block;
  }
  @keyframes cwFadeInMedia {
    from { opacity: 0; transform: scale(0.995); }
    to { opacity: 1; transform: scale(1); }
  }
  .cw-showcase-media-elem {
    width: 100%;
    height: auto;
    max-height: 580px;
    object-fit: contain;
    display: block;
    background: #0b0f19;
    margin: 0 auto;
  }
  .cw-media-caption {
    padding: 14px 22px;
    background: #ffffff;
    border-top: 1px solid #e2e8f0;
    font-size: 0.88rem;
    color: #475569;
    display: flex;
    align-items: center;
    gap: 12px;
  }
  .cw-caption-badge {
    background: #10b981;
    color: #ffffff;
    font-size: 0.72rem;
    font-weight: 700;
    padding: 3px 8px;
    border-radius: 6px;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    flex-shrink: 0;
  }

  /* Floating Proof Badges */
  .cw-showcase-card {
    position: absolute;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.85);
    border-radius: 14px;
    padding: 10px 16px;
    box-shadow: 0 16px 36px rgba(15, 23, 42, 0.12);
    display: flex;
    align-items: center;
    gap: 10px;
    z-index: 5;
    pointer-events: none;
  }
  .cw-sc-left {
    bottom: 50px;
    left: -28px;
    animation: cwFloat 4s ease-in-out infinite alternate;
  }
  .cw-sc-right {
    top: 70px;
    right: -28px;
    animation: cwFloat 4s ease-in-out infinite alternate -2s;
  }
  .cw-sc-icon {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: #ecfdf5;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.15rem;
    flex-shrink: 0;
  }
  .cw-sc-text strong {
    display: block;
    font-size: 0.84rem;
    font-weight: 700;
    color: #0f172a;
    line-height: 1.2;
  }
  .cw-sc-text span {
    display: block;
    font-size: 0.72rem;
    color: #64748b;
  }

  /* Fullscreen Video Lightbox Modal */
  .cw-modal-overlay {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 999999;
    background: rgba(15, 23, 42, 0.88);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    align-items: center;
    justify-content: center;
    padding: 20px;
  }
  .cw-modal-overlay.open {
    display: flex;
  }
  .cw-modal-box {
    background: #0f172a;
    border-radius: 20px;
    width: 100%;
    max-width: 980px;
    overflow: hidden;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.55), 0 0 0 1px rgba(255, 255, 255, 0.1);
    display: flex;
    flex-direction: column;
    animation: cwModalPop 0.25s ease;
  }
  @keyframes cwModalPop {
    from { opacity: 0; transform: scale(0.96); }
    to { opacity: 1; transform: scale(1); }
  }
  .cw-modal-topbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 22px;
    background: #090d16;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  }
  .cw-modal-title {
    display: flex;
    align-items: center;
    gap: 9px;
    color: #f8fafc;
    font-size: 0.92rem;
    font-weight: 700;
  }
  .cw-modal-dot {
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: #10b981;
    box-shadow: 0 0 8px #10b981;
  }
  .cw-modal-close {
    background: rgba(255, 255, 255, 0.1);
    border: none;
    color: #cbd5e1;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    font-size: 1.4rem;
    line-height: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s;
  }
  .cw-modal-close:hover {
    background: #ef4444;
    color: #ffffff;
  }
  .cw-modal-tabs {
    display: flex;
    gap: 8px;
    padding: 12px 20px;
    background: #131b2e;
    border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    overflow-x: auto;
  }
  .cw-m-tab {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.08);
    color: #94a3b8;
    padding: 7px 15px;
    border-radius: 8px;
    font-size: 0.82rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
    white-space: nowrap;
  }
  .cw-m-tab:hover {
    color: #ffffff;
    background: rgba(255, 255, 255, 0.14);
  }
  .cw-m-tab.active {
    background: #10b981;
    border-color: #10b981;
    color: #ffffff;
  }
  .cw-modal-media-container {
    position: relative;
    background: #000000;
    min-height: 360px;
    max-height: 65vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }
  .cw-modal-video, .cw-modal-img {
    max-width: 100%;
    max-height: 65vh;
    width: auto;
    height: auto;
    display: block;
    object-fit: contain;
  }
  .cw-modal-footer {
    padding: 16px 22px;
    background: #090d16;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
  }
  .cw-modal-footnote {
    color: #94a3b8;
    font-size: 0.85rem;
  }
  .cw-modal-actions {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .cw-btn-modal-primary {
    background: #10b981;
    color: #ffffff;
    padding: 8px 18px;
    border-radius: 8px;
    font-size: 0.84rem;
    font-weight: 700;
    text-decoration: none;
    transition: background 0.2s;
    display: inline-block;
  }
  .cw-btn-modal-primary:hover {
    background: #059669;
    color: #ffffff;
  }
  .cw-btn-modal-secondary {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.15);
    color: #e2e8f0;
    padding: 8px 16px;
    border-radius: 8px;
    font-size: 0.84rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
  }
  .cw-btn-modal-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
  }

  @media (max-width: 768px) {
    .cw-platform-showcase-section {
      padding: 3rem 1rem 3.5rem;
    }
    .cw-showcase-title {
      font-size: 1.65rem;
    }
    .cw-showcase-subtitle {
      font-size: 0.92rem;
    }
    .cw-window-url-bar {
      display: none;
    }
    .cw-showcase-card {
      display: none !important;
    }

</style>

<div class="cw-page">
  <!-- Breadcrumb -->
  <nav class="cw-breadcrumb" aria-label="Breadcrumb">
    <a href="<?php echo $bp; ?>">Home</a>
    <span>/</span>
    <a href="<?php echo $bp; ?>#channels">Channels</a>
    <span>/</span>
    <span style="color:#0f172a;font-weight:600;">WhatsApp</span>
  </nav>

  <!-- 1. HERO SECTION -->
  <section class="cw-hero-section">
    <div class="cw-hero-grid">
      <div class="cw-hero-content">
        <span class="cw-badge-pill">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
          Official WhatsApp Connection
        </span>
        <h1 class="cw-hero-title">
          HelloBotz WhatsApp Business API — <span class="highlight-green">Scale Your Sales and Support on WhatsApp</span>
        </h1>
        <p class="cw-hero-desc">
          Manage customer chats with a shared team inbox, run a complete WhatsApp automation software with automatic reply flows, and broadcast safely using the official WhatsApp Business API and WhatsApp CRM software.
        </p>
        <div class="cw-hero-actions">
          <a href="<?php echo $bp; ?>auth/register" class="cw-btn-primary">
            Start Free Trial
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <button type="button" class="cw-btn-secondary btn-demo-open">
            Book a Demo
          </button>
          <a href="<?php echo $bp; ?>business-leads/" class="cw-btn-data btn-download-data btn-get-verified">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Get Verified
          </a>
        </div>
        <div class="cw-trust-row">
          <span class="cw-trust-item">
            <span style="width:8px;height:8px;border-radius:50%;background:#10b981;display:inline-block;margin-right:2px;"></span>
            <strong>+128 Leads Captured</strong>
          </span>
          <span class="cw-trust-item">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
            99.9% Delivery Uptime
          </span>
          <span class="cw-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Official Meta API
          </span>
          <span class="cw-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Zero Ban Risk
          </span>
        </div>
      </div>

      <!-- Floating Transparent PNG Illustration -->
      <div class="cw-hero-visual">
        <div class="cw-hero-img-wrap">
          <img src="<?php echo $bp; ?>assets/images/channel/whatsapp/hero.png" alt="Official WhatsApp Connection & Automation" class="cw-hero-img" loading="eager" />
        </div>
      </div>
    </div>
  </section>

  <!-- WhatsApp Stat Counters Bar -->
  <section class="cw-counters-section">
    <div class="cw-counters-grid">
      <div class="cw-counter-item">
        <div class="cw-counter-val">+45%</div>
        <div class="cw-counter-title">Broadcast Click Rate</div>
      </div>
      <div class="cw-counter-item">
        <div class="cw-counter-val">3x</div>
        <div class="cw-counter-title">Sales Conversion</div>
      </div>
      <div class="cw-counter-item">
        <div class="cw-counter-val">99%</div>
        <div class="cw-counter-title">Message Read Rate</div>
      </div>
      <div class="cw-counter-item">
        <div class="cw-counter-val">24/7</div>
        <div class="cw-counter-title">Auto-Response</div>
      </div>
    </div>
  </section>

  <!-- 1.1 CLIENT BRANDS MARQUEE (media_1789590019527.png) -->
  <section class="brands-section">
    <div class="brands-inner">
                <div class="brands-inner-dual">
            <!-- First Row - Scrolling Left -->
            <div class="brands-track brands-track-left">
                                <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="GIVA">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/07/GIVA.jpg" alt="GIVA"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      GIVA                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="MultiFit">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/multifit.webp" alt="MultiFit"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      MultiFit                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="quelton">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/quelton.webp" alt="quelton"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      quelton                                              <img src="https://flagcdn.com/w40/es.png" alt="Spain"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Ravenwood">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/ravenwood.webp" alt="Ravenwood"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Ravenwood                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="University of Southampton">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/university-of-southampton.png" alt="University of Southampton"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      University of Southampton                                              <img src="https://flagcdn.com/w40/gb.png" alt="United Kingdom"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="SML Mahindra">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/SML-Mahindra.png" alt="SML Mahindra"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      SML Mahindra                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Think IAS">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/Think-IAS.png" alt="Think IAS"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Think IAS                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Ayurvedic Village">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/ayurvedicvillage.png" alt="Ayurvedic Village"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Ayurvedic Village                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="dobbe.ai">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/dobbe.ai_-1.png" alt="dobbe.ai"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      dobbe.ai                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Vegetrainian">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/vegetrainian.png" alt="Vegetrainian"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Vegetrainian                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="HexaCoder">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/hexacoder.webp" alt="HexaCoder"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      HexaCoder                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Charity Commission">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/Charity-Commission.webp" alt="Charity Commission"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Charity Commission                                              <img src="https://flagcdn.com/w40/gb.png" alt="United Kingdom"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Blissify">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/blissify.webp" alt="Blissify"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Blissify                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Sansacosmetics">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/sansacosmetics.webp" alt="Sansacosmetics"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Sansacosmetics                                              <img src="https://flagcdn.com/w40/ve.png" alt="Venezuela"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Shine&#038;Smooth">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/shinesmooth.webp" alt="Shine&#038;Smooth"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Shine&#038;Smooth                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="shop.teamsg">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/shop.teamsg.webp" alt="shop.teamsg"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      shop.teamsg                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="SOStravel">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/sostravel.webp" alt="SOStravel"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      SOStravel                                              <img src="https://flagcdn.com/w40/it.png" alt="Italy"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Three Monkey">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/threemonkey.webp" alt="Three Monkey"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Three Monkey                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Totpro">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/totpro.webp" alt="Totpro"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Totpro                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="TrendyBay">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/TrendyBay.webp" alt="TrendyBay"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      TrendyBay                                              <img src="https://flagcdn.com/w40/gn.png" alt="Guinea"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="tumbledry">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/tumbledry.webp" alt="tumbledry"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      tumbledry                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Vivekananda Global University">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/vgu.webp" alt="Vivekananda Global University"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Vivekananda Global University                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Tumble Dry">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/tumbledry.png" alt="Tumble Dry"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Tumble Dry                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="GIVA">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/07/GIVA.jpg" alt="GIVA"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      GIVA                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="MultiFit">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/multifit.webp" alt="MultiFit"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      MultiFit                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="quelton">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/quelton.webp" alt="quelton"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      quelton                                              <img src="https://flagcdn.com/w40/es.png" alt="Spain"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Ravenwood">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/ravenwood.webp" alt="Ravenwood"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Ravenwood                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="University of Southampton">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/university-of-southampton.png" alt="University of Southampton"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      University of Southampton                                              <img src="https://flagcdn.com/w40/gb.png" alt="United Kingdom"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="SML Mahindra">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/SML-Mahindra.png" alt="SML Mahindra"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      SML Mahindra                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Think IAS">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/Think-IAS.png" alt="Think IAS"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Think IAS                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Ayurvedic Village">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/ayurvedicvillage.png" alt="Ayurvedic Village"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Ayurvedic Village                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="dobbe.ai">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/dobbe.ai_-1.png" alt="dobbe.ai"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      dobbe.ai                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Vegetrainian">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/vegetrainian.png" alt="Vegetrainian"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Vegetrainian                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="HexaCoder">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/hexacoder.webp" alt="HexaCoder"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      HexaCoder                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Charity Commission">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/Charity-Commission.webp" alt="Charity Commission"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Charity Commission                                              <img src="https://flagcdn.com/w40/gb.png" alt="United Kingdom"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Blissify">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/blissify.webp" alt="Blissify"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Blissify                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Sansacosmetics">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/sansacosmetics.webp" alt="Sansacosmetics"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Sansacosmetics                                              <img src="https://flagcdn.com/w40/ve.png" alt="Venezuela"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Shine&#038;Smooth">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/shinesmooth.webp" alt="Shine&#038;Smooth"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Shine&#038;Smooth                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="shop.teamsg">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/shop.teamsg.webp" alt="shop.teamsg"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      shop.teamsg                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="SOStravel">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/sostravel.webp" alt="SOStravel"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      SOStravel                                              <img src="https://flagcdn.com/w40/it.png" alt="Italy"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Three Monkey">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/threemonkey.webp" alt="Three Monkey"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Three Monkey                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Totpro">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/totpro.webp" alt="Totpro"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Totpro                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="TrendyBay">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/TrendyBay.webp" alt="TrendyBay"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      TrendyBay                                              <img src="https://flagcdn.com/w40/gn.png" alt="Guinea"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="tumbledry">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/tumbledry.webp" alt="tumbledry"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      tumbledry                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Vivekananda Global University">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/06/vgu.webp" alt="Vivekananda Global University"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Vivekananda Global University                                              <img src="https://flagcdn.com/w40/in.png" alt="india"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Tumble Dry">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/tumbledry.png" alt="Tumble Dry"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Tumble Dry                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                              </div>

            <!-- Second Row - Scrolling Right -->
            <div class="brands-track brands-track-right">
                                <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Salgar Tea">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/salgartea.png" alt="Salgar Tea"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Salgar Tea                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="FADE MMA &#038; Gym">
                                          <img src="https://cdn.getgabs.com/newhomepage/fade-mma-and-gym.avif" alt="FADE MMA &#038; Gym"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      FADE MMA &#038; Gym                                              <img src="https://flagcdn.com/w40/my.png" alt="Malaysia"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="10 Hydrogen">
                                          <img src="https://cdn.getgabs.com/newhomepage/10-hydrogen.avif" alt="10 Hydrogen"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      10 Hydrogen                                              <img src="https://flagcdn.com/w40/ae.png" alt="UAE"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Davgrey">
                                          <img src="https://cdn.getgabs.com/newhomepage/davgrey.avif" alt="Davgrey"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Davgrey                                              <img src="https://flagcdn.com/w40/pk.png" alt="Pakistan"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Voice AI Agency">
                                          <img src="https://cdn.getgabs.com/newhomepage/voice-aI-agency.avif" alt="Voice AI Agency"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Voice AI Agency                                              <img src="https://flagcdn.com/w40/us.png" alt="USA"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Ollic ict hub">
                                          <img src="https://cdn.getgabs.com/newhomepage/ollic-ict-hub.avif" alt="Ollic ict hub"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Ollic ict hub                                              <img src="https://flagcdn.com/w40/ng.png" alt="Nigeria"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="i-jobs">
                                          <img src="https://cdn.getgabs.com/newhomepage/i-jobs.avif" alt="i-jobs"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      i-jobs                                              <img src="https://flagcdn.com/w40/af.png" alt="UK"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="American Language Centre">
                                          <img src="https://cdn.getgabs.com/newhomepage/the-american-language-centre-of-asablanca.avif" alt="American Language Centre"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      American Language Centre                                              <img src="https://flagcdn.com/w40/ma.png" alt="Morocco"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Abroad Routes">
                                          <img src="https://cdn.getgabs.com/newhomepage/abroad-routes.avif" alt="Abroad Routes"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Abroad Routes                                              <img src="https://flagcdn.com/w40/ae.png" alt="UAE"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Arriival">
                                          <img src="https://cdn.getgabs.com/newhomepage/arriival.avif" alt="Arriival"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Arriival                                              <img src="https://flagcdn.com/w40/my.png" alt="Malaysia"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="tagshop AI">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/01/TAGSHOP.png" alt="tagshop AI"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      tagshop AI                                              <img src="https://flagcdn.com/w40/us.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Dreamcast">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/01/DREAMCAST.png" alt="Dreamcast"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Dreamcast                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="TIE Global">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/01/tie.png" alt="TIE Global"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      TIE Global                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Omni Ice Cream">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/omniicecream.png" alt="Omni Ice Cream"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Omni Ice Cream                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Alagasco">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/Alagasco.png" alt="Alagasco"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Alagasco                                              <img src="https://flagcdn.com/w40/us.png" alt="USA"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Northern Spices">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/03/Northern-Spices.png" alt="Northern Spices"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Northern Spices                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Startup Chaupal">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/03/startup-chaupal.jpg" alt="Startup Chaupal"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Startup Chaupal                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Curious Hues">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/03/Curious-Hues-e1773645714310.webp" alt="Curious Hues"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Curious Hues                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Satyam AI">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/02/Satyam-AI.jpg" alt="Satyam AI"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Satyam AI                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="GD Goenka School">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/02/GDGoenkaSchool.ico" alt="GD Goenka School"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      GD Goenka School                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Capgemini">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/02/capgemini.png" alt="Capgemini"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Capgemini                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Arte hair studio">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/01/arte.png" alt="Arte hair studio"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Arte hair studio                                              <img src="https://flagcdn.com/w40/sg.png" alt="Singapore"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="99pandit">
                                          <img src="https://cdn.getgabs.com/newhomepage/99pandit.avif" alt="99pandit"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      99pandit                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Salgar Tea">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/salgartea.png" alt="Salgar Tea"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Salgar Tea                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="FADE MMA &#038; Gym">
                                          <img src="https://cdn.getgabs.com/newhomepage/fade-mma-and-gym.avif" alt="FADE MMA &#038; Gym"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      FADE MMA &#038; Gym                                              <img src="https://flagcdn.com/w40/my.png" alt="Malaysia"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="10 Hydrogen">
                                          <img src="https://cdn.getgabs.com/newhomepage/10-hydrogen.avif" alt="10 Hydrogen"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      10 Hydrogen                                              <img src="https://flagcdn.com/w40/ae.png" alt="UAE"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Davgrey">
                                          <img src="https://cdn.getgabs.com/newhomepage/davgrey.avif" alt="Davgrey"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Davgrey                                              <img src="https://flagcdn.com/w40/pk.png" alt="Pakistan"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Voice AI Agency">
                                          <img src="https://cdn.getgabs.com/newhomepage/voice-aI-agency.avif" alt="Voice AI Agency"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Voice AI Agency                                              <img src="https://flagcdn.com/w40/us.png" alt="USA"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Ollic ict hub">
                                          <img src="https://cdn.getgabs.com/newhomepage/ollic-ict-hub.avif" alt="Ollic ict hub"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Ollic ict hub                                              <img src="https://flagcdn.com/w40/ng.png" alt="Nigeria"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="i-jobs">
                                          <img src="https://cdn.getgabs.com/newhomepage/i-jobs.avif" alt="i-jobs"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      i-jobs                                              <img src="https://flagcdn.com/w40/af.png" alt="UK"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="American Language Centre">
                                          <img src="https://cdn.getgabs.com/newhomepage/the-american-language-centre-of-asablanca.avif" alt="American Language Centre"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      American Language Centre                                              <img src="https://flagcdn.com/w40/ma.png" alt="Morocco"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Abroad Routes">
                                          <img src="https://cdn.getgabs.com/newhomepage/abroad-routes.avif" alt="Abroad Routes"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Abroad Routes                                              <img src="https://flagcdn.com/w40/ae.png" alt="UAE"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Arriival">
                                          <img src="https://cdn.getgabs.com/newhomepage/arriival.avif" alt="Arriival"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Arriival                                              <img src="https://flagcdn.com/w40/my.png" alt="Malaysia"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="tagshop AI">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/01/TAGSHOP.png" alt="tagshop AI"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      tagshop AI                                              <img src="https://flagcdn.com/w40/us.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Dreamcast">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/01/DREAMCAST.png" alt="Dreamcast"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Dreamcast                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="TIE Global">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/01/tie.png" alt="TIE Global"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      TIE Global                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Omni Ice Cream">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/omniicecream.png" alt="Omni Ice Cream"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Omni Ice Cream                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Alagasco">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/04/Alagasco.png" alt="Alagasco"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Alagasco                                              <img src="https://flagcdn.com/w40/us.png" alt="USA"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Northern Spices">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/03/Northern-Spices.png" alt="Northern Spices"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Northern Spices                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Startup Chaupal">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/03/startup-chaupal.jpg" alt="Startup Chaupal"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Startup Chaupal                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Curious Hues">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/03/Curious-Hues-e1773645714310.webp" alt="Curious Hues"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Curious Hues                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Satyam AI">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/02/Satyam-AI.jpg" alt="Satyam AI"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Satyam AI                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="GD Goenka School">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/02/GDGoenkaSchool.ico" alt="GD Goenka School"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      GD Goenka School                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Capgemini">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/02/capgemini.png" alt="Capgemini"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Capgemini                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="Arte hair studio">
                                          <img src="https://getgabs.com/wp-content/uploads/2026/01/arte.png" alt="Arte hair studio"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      Arte hair studio                                              <img src="https://flagcdn.com/w40/sg.png" alt="Singapore"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                                    <div
                    class="brand-badge flex items-center gap-2 bg-white border border-gray-200 rounded-full px-3 py-1 shadow-sm"
                    title="99pandit">
                                          <img src="https://cdn.getgabs.com/newhomepage/99pandit.avif" alt="99pandit"
                        class="w-6 h-6 rounded-full" loading="lazy">
                                          <span class="text-sm font-medium">
                      99pandit                                              <img src="https://flagcdn.com/w40/in.png" alt="India"
                          class="inline-block w-4 h-4 ml-1" loading="lazy">
                                            </span>
                                          <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="h-3.5 w-3.5 text-blue-500 sm:h-4 sm:w-4">
                        <path fill="currentColor"
                          d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z">
                        </path>
                      </svg>
                                        </div>
                              </div>
          </div>
                  
    </div>
  </section>

  <!-- INTERACTIVE ANIMATED PLATFORM SHOWCASE SECTION -->
  <section class="cw-platform-showcase-section">
    <div class="cw-showcase-container">
      <div class="cw-showcase-header">
        <div class="cw-showcase-pill">
          <span class="cw-pulse-dot" style="width:8px;height:8px;background:#10b981;border-radius:50%;display:inline-block;"></span>
          LIVE PLATFORM WALKTHROUGH
        </div>
        <h2 class="cw-showcase-title">WhatsApp Automation Software in Action — Visual Automation &amp; AI Bots Built for Scale</h2>
        <p class="cw-showcase-subtitle">No complicated coding. Build conversational customer journeys, automate broadcasts, and route high-value leads with zero friction.</p>
      </div>

      <!-- Feature Switcher Tabs -->
      <div class="cw-showcase-tabs" role="tablist">
        <button class="cw-showcase-tab active" data-target="flow" onclick="switchShowcaseTab('flow', this)">
          <span class="cw-tab-icon">⚡</span>
          <span class="cw-tab-label">Visual Flow Builder</span>
        </button>
        <button class="cw-showcase-tab" data-target="chat" onclick="switchShowcaseTab('chat', this)">
          <span class="cw-tab-icon">💬</span>
          <span class="cw-tab-label">Team Live Chat</span>
        </button>
        <button class="cw-showcase-tab" data-target="integrations" onclick="switchShowcaseTab('integrations', this)">
          <span class="cw-tab-icon">🔌</span>
          <span class="cw-tab-label">CRM &amp; Shopify Sync</span>
        </button>
        <button class="cw-showcase-tab" data-target="analytics" onclick="switchShowcaseTab('analytics', this)">
          <span class="cw-tab-icon">📊</span>
          <span class="cw-tab-label">Live Campaign Analytics</span>
        </button>
      </div>

      <!-- Video / GIF Mac Window Frame -->
      <div class="cw-showcase-window-wrap">
        <div class="cw-showcase-window">
          <!-- Window Titlebar with Mac Traffic Lights -->
          <div class="cw-window-titlebar">
            <div class="cw-window-dots">
              <span class="cw-dot red"></span>
              <span class="cw-dot yellow"></span>
              <span class="cw-dot green"></span>
            </div>
            <div class="cw-window-url-bar">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
              <span>app.hellobotz.com/flow-builder/lead-qualification-v3</span>
            </div>
            <div class="cw-window-actions">
              <button class="cw-window-expand" onclick="openHelloBotzVideoModal('flow')" title="View Fullscreen Demo">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"/><polyline points="9 21 3 21 3 15"/><line x1="21" y1="3" x2="14" y2="10"/><line x1="3" y1="21" x2="10" y2="14"/></svg>
                <span>Fullscreen</span>
              </button>
            </div>
          </div>

          <!-- Media Display Viewport -->
          <div class="cw-window-screen">
            <!-- Flow Builder Media -->
            <div class="cw-tab-media active" id="media-flow">
              <video class="cw-showcase-media-elem" autoplay loop muted playsinline poster="<?php echo $bp; ?>assets/images/animations/interakt-hero.gif">
                <source src="<?php echo $bp; ?>assets/images/animations/flow-builder.mp4" type="video/mp4">
                <img src="<?php echo $bp; ?>assets/images/animations/interakt-hero.gif" alt="HelloBotz Visual Flow Builder">
              </video>
              <div class="cw-media-caption">
                <span class="cw-caption-badge">Flow Builder</span>
                <span>Drag &amp; drop conversational trigger nodes, rich interactive media cards, and custom logic without writing a single line of code.</span>
              </div>
            </div>

            <!-- Team Live Chat Media -->
            <div class="cw-tab-media" id="media-chat">
              <img class="cw-showcase-media-elem" src="<?php echo $bp; ?>assets/images/animations/live-chat.gif" alt="HelloBotz Multi-Agent Team Live Chat Shared Inbox" loading="lazy">
              <div class="cw-media-caption">
                <span class="cw-caption-badge">Multi-Agent Inbox</span>
                <span>Shared team inbox on a single official WhatsApp Business number. Assign chats, use quick replies, and track agent response times.</span>
              </div>
            </div>

            <!-- Integrations Media -->
            <div class="cw-tab-media" id="media-integrations">
              <img class="cw-showcase-media-elem" src="<?php echo $bp; ?>assets/images/animations/integration-1.gif" alt="HelloBotz CRM, Shopify and WooCommerce Integrations" loading="lazy">
              <div class="cw-media-caption">
                <span class="cw-caption-badge">Seamless Integrations</span>
                <span>Connect HelloBotz natively with Shopify, WooCommerce, Zoho, HubSpot, Google Sheets, and webhook endpoints with 1 click.</span>
              </div>
            </div>

            <!-- Analytics Media -->
            <div class="cw-tab-media" id="media-analytics">
              <img class="cw-showcase-media-elem" src="<?php echo $bp; ?>assets/images/animations/analytics.gif" alt="HelloBotz Live Campaign Delivery &amp; Conversion Analytics" loading="lazy">
              <div class="cw-media-caption">
                <span class="cw-caption-badge">Real-Time Analytics</span>
                <span>Measure read rates, link click-throughs, sales conversions, and customer engagement metrics with live broadcast reporting.</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Floating Proof Badges around window -->
        <div class="cw-showcase-card cw-sc-left">
          <div class="cw-sc-icon">⚡</div>
          <div class="cw-sc-text">
            <strong>3.8x Faster Reply Speed</strong>
            <span>Instant AI agent auto-routing</span>
          </div>
        </div>

        <div class="cw-showcase-card cw-sc-right">
          <div class="cw-sc-icon">📈</div>
          <div class="cw-sc-text">
            <strong>98% Message Open Rate</strong>
            <span>Direct WhatsApp Verified Delivery</span>
          </div>
        </div>
      </div>
    </div>
  </section>



    <!-- 2. COMPARISON GRID SECTION -->
  <section class="cw-comparison-section">
    <div class="cw-section-header">
      <span class="cw-badge-pill">Comparison Grid</span>
      <h2 class="cw-section-title">Standard WhatsApp vs WhatsApp Business API</h2>
      <p class="cw-section-subtitle">Discover why scaling on WhatsApp requires switching from the generic app to an official API-powered workflow built for teams. See why switching to the WhatsApp Business API — with WhatsApp automation software and WhatsApp CRM software — beats the standard WhatsApp app for growing teams.</p>
    </div>

    <div class="cw-table-container">
      <table class="cw-comp-table">
        <thead>
          <tr>
            <th style="width:30%;">Platform Feature</th>
            <th style="width:35%;">WhatsApp App (Standard)</th>
            <th style="width:35%;" class="col-api">Official API (HelloBotz)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="cw-comp-feature">Multi-Agent Support</td>
            <td class="cw-comp-standard">Max 4 devices (Single device focus)</td>
            <td class="cw-comp-api">Unlimited agents, dynamic routing</td>
          </tr>
          <tr>
            <td class="cw-comp-feature">Broadcast Limits</td>
            <td class="cw-comp-standard">Max 256 contacts per list (Risk of Ban)</td>
            <td class="cw-comp-api">Unlimited broadcasts, safe delivery</td>
          </tr>
          <tr>
            <td class="cw-comp-feature">Auto-Reply Bots</td>
            <td class="cw-comp-standard">Extremely basic auto-responder</td>
            <td class="cw-comp-api">Visual flow builder + AI Support</td>
          </tr>
          <tr>
            <td class="cw-comp-feature">Green Tick Verification</td>
            <td class="cw-comp-standard">Not available for standard accounts</td>
            <td class="cw-comp-api">Official verified green tick badge</td>
          </tr>
          <tr>
            <td class="cw-comp-feature">CRM & API Integrations</td>
            <td class="cw-comp-standard">No Webhook or API connections</td>
            <td class="cw-comp-api">Robust REST APIs + Webhooks ready</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- 3. INTERACTIVE 9-FEATURE SHOWCASE -->
  <section class="cw-showcase-section">
    <div class="cw-section-header">
      <span class="cw-badge-pill">Interactive Showcase</span>
      <h2 class="cw-section-title">Powerful WhatsApp Automation Software Features to Turn WhatsApp into a Sales Machine</h2>
      <p class="cw-section-subtitle">Explore the exact capabilities engineered within our platform to help you automate customer operations completely.</p>
    </div>

    <div class="cw-cap-container">
      <!-- Left Sidebar: Select Capabilities -->
      <div class="cw-cap-sidebar">
        <div class="cw-cap-sidebar-title">Select Capabilities</div>
        <div class="cw-cap-tabs" id="cwCapTabs" role="tablist">
          <button type="button" class="cw-cap-tab active" data-index="0" role="tab" aria-selected="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
            <span>WhatsApp Shared Team Inbox</span>
          </button>
          <button type="button" class="cw-cap-tab" data-index="1" role="tab" aria-selected="false">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="21" x2="4" y2="14"/><line x1="4" y1="10" x2="4" y2="3"/><line x1="12" y1="21" x2="12" y2="12"/><line x1="12" y1="8" x2="12" y2="3"/><line x1="20" y1="21" x2="20" y2="16"/><line x1="20" y1="12" x2="20" y2="3"/><line x1="1" y1="14" x2="7" y2="14"/><line x1="9" y1="8" x2="15" y2="8"/><line x1="17" y1="16" x2="23" y2="16"/></svg>
            <span>Visual Reply Builder</span>
          </button>
          <button type="button" class="cw-cap-tab" data-index="2" role="tab" aria-selected="false">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            <span>Bulk Messaging</span>
          </button>
          <button type="button" class="cw-cap-tab" data-index="3" role="tab" aria-selected="false">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <span>Smart AI Calling</span>
          </button>
          <button type="button" class="cw-cap-tab" data-index="4" role="tab" aria-selected="false">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            <span>Easy Scheduling</span>
          </button>
          <button type="button" class="cw-cap-tab" data-index="5" role="tab" aria-selected="false">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
            <span>Send Simple Forms</span>
          </button>
          <button type="button" class="cw-cap-tab" data-index="6" role="tab" aria-selected="false">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4"/><line x1="8" y1="16" x2="8" y2="16"/><line x1="16" y1="16" x2="16" y2="16"/></svg>
            <span>AI Chat Assistant</span>
          </button>
          <button type="button" class="cw-cap-tab" data-index="7" role="tab" aria-selected="false">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
            <span>Link Your Existing Tools</span>
          </button>
          <button type="button" class="cw-cap-tab" data-index="8" role="tab" aria-selected="false">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
            <span>Showcase Your Products</span>
          </button>
        </div>
      </div>

        <!-- Right Panel: Capability Showcase Display -->
      <div class="cw-cap-panel">
        <div class="cw-cap-preview">
          <img id="cwCapImg" src="<?php echo $bp; ?>assets/images/channel/whatsapp/shared-team-inbox.png" alt="Shared Team Inbox" class="cw-cap-img" loading="eager" />
        </div>
        <div class="cw-cap-content">
          <h3 id="cwCapTitle" class="cw-cap-title">WhatsApp Shared Team Inbox</h3>
          <p id="cwCapDesc" class="cw-cap-desc">Let your entire sales and customer service team chat with customers using a single WhatsApp number. Direct customer messages to the right team member automatically.</p>
          <ul id="cwCapBullets" class="cw-cap-bullets">
            <li class="cw-cap-bullet-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Send chats to the right person</span>
            </li>
            <li class="cw-cap-bullet-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Write notes only your team can see</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. HOW IT WORKS / 4 EASY STEPS -->
  <section class="cw-steps-section" id="how-it-works">
    <div class="cw-steps-container">
      <div class="cw-steps-header">
        <span class="cw-badge-pill" style="background: rgba(5, 150, 105, 0.2); color: #34d399; border-color: rgba(5, 150, 105, 0.4);">How It Works</span>
        <h2 class="cw-steps-title">Start in 4 Easy Steps</h2>
        <p class="cw-steps-subtitle">Setting up your official WhatsApp assistant takes less than 10 minutes. Get your WhatsApp Business API connected and your WhatsApp CRM software live in under 10 minutes.</p>
      </div>

      <div class="cw-steps-grid">
        <div class="cw-step-card">
          <div class="cw-step-number">01</div>
          <h3 class="cw-step-heading">Link Your Phone</h3>
          <p class="cw-step-text">Connect your business phone number by scanning a simple QR code in 30 seconds.</p>
        </div>

        <div class="cw-step-card">
          <div class="cw-step-number">02</div>
          <h3 class="cw-step-heading">Upload Contact List</h3>
          <p class="cw-step-text">Upload your customer phone list or link directly with your existing Shopify or CRM tool.</p>
        </div>

        <div class="cw-step-card">
          <div class="cw-step-number">03</div>
          <h3 class="cw-step-heading">Design Chat Flows</h3>
          <p class="cw-step-text">Type out your answers or design automated reply menus using our visual builder.</p>
        </div>

        <div class="cw-step-card">
          <div class="cw-step-number">04</div>
          <h3 class="cw-step-heading">Start Answering</h3>
          <p class="cw-step-text">Turn on your assistant, send bulk messages, and watch conversations happen automatically.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. FINAL SALES CTA BANNER -->
  <section class="cw-sales-section">
    <div class="cw-sales-inner">
      <h2 class="cw-sales-title">Turn Your WhatsApp Into a Sales Engine with HelloBotz's WhatsApp Business API &amp; WhatsApp Automation Software</h2>
      <p class="cw-sales-desc">Start sending announcements, managing team chats, and answering customer questions automatically right now.</p>
      <div class="cw-sales-actions">
        <a href="<?php echo $bp; ?>auth/register" class="cw-btn-white">
          Try For Free &rarr;
        </a>
        <button type="button" class="cw-btn-transparent btn-demo-open">
          Talk to Sales
        </button>
        <a href="<?php echo $bp; ?>business-leads/" class="cw-btn-data btn-download-data btn-get-verified" style="background:#ffffff !important;color:#059669 !important;border:none !important;">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
          Get Verified
        </a>
      </div>
      <div class="cw-sales-trust">
        <span>✓ 5-Minute Setup</span>
        <span>✓ Official Connection</span>
        <span>✓ Cancel Anytime</span>
      </div>
    </div>
  </section>
</div>


<!-- Fullscreen Video Lightbox Modal -->
<div id="hellobotz-video-modal" class="cw-modal-overlay" onclick="handleModalOverlayClick(event)">
  <div class="cw-modal-box">
    <div class="cw-modal-topbar">
      <div class="cw-modal-title">
        <span class="cw-modal-dot"></span>
        <span>HelloBotz Platform Demo &bull; Interactive Tour</span>
      </div>
      <button class="cw-modal-close" onclick="closeHelloBotzVideoModal()" aria-label="Close demo modal">&times;</button>
    </div>
    <div class="cw-modal-body">
      <div class="cw-modal-tabs">
        <button class="cw-m-tab active" data-tab="flow" onclick="switchModalMedia('flow', this)">⚡ Flow Builder</button>
        <button class="cw-m-tab" data-tab="chat" onclick="switchModalMedia('chat', this)">💬 Team Live Chat</button>
        <button class="cw-m-tab" data-tab="integrations" onclick="switchModalMedia('integrations', this)">🔌 Integrations</button>
        <button class="cw-m-tab" data-tab="analytics" onclick="switchModalMedia('analytics', this)">📊 Campaign Analytics</button>
      </div>
      <div class="cw-modal-media-container" id="hellobotz-modal-media">
        <video class="cw-modal-video" autoplay loop muted playsinline controls poster="<?php echo $bp; ?>assets/images/animations/interakt-hero.gif">
          <source src="<?php echo $bp; ?>assets/images/animations/flow-builder.mp4" type="video/mp4">
          <img src="<?php echo $bp; ?>assets/images/animations/interakt-hero.gif" alt="Flow Builder Demo">
        </video>
      </div>
      <div class="cw-modal-footer">
        <div class="cw-modal-footnote">Experience the full power of WhatsApp automation with zero ban risk.</div>
        <div class="cw-modal-actions">
          <a href="<?php echo $bp; ?>auth/register" class="cw-btn-modal-primary">Start 7-Day Free Trial</a>
          <button type="button" class="cw-btn-modal-secondary btn-demo-open" onclick="closeHelloBotzVideoModal()">Schedule 1-on-1 Call</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>

/* HelloBotz Showcase Video Lightbox & Tabs */
function openHelloBotzVideoModal(tab) {
  var modal = document.getElementById('hellobotz-video-modal');
  if (modal) {
    modal.classList.add('open');
    document.body.style.overflow = 'hidden';
    if (tab) {
      var tabBtn = modal.querySelector('.cw-m-tab[data-tab="' + tab + '"]');
      if (tabBtn) switchModalMedia(tab, tabBtn);
    }
  }
}

function closeHelloBotzVideoModal() {
  var modal = document.getElementById('hellobotz-video-modal');
  if (modal) {
    modal.classList.remove('open');
    document.body.style.overflow = '';
    var vid = modal.querySelector('video');
    if (vid) vid.pause();
  }
}

function handleModalOverlayClick(e) {
  if (e.target && e.target.id === 'hellobotz-video-modal') {
    closeHelloBotzVideoModal();
  }
}

document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeHelloBotzVideoModal();
  }
});

function switchShowcaseTab(target, btn) {
  var tabs = document.querySelectorAll('.cw-showcase-tab');
  tabs.forEach(function(t) { t.classList.remove('active'); });
  if (btn) btn.classList.add('active');

  var medias = document.querySelectorAll('.cw-tab-media');
  medias.forEach(function(m) { m.classList.remove('active'); });
  var activeMedia = document.getElementById('media-' + target);
  if (activeMedia) {
    activeMedia.classList.add('active');
    var vid = activeMedia.querySelector('video');
    if (vid) {
      vid.currentTime = 0;
      vid.play().catch(function(){});
    }
  }
}

function switchModalMedia(type, btn) {
  var container = document.getElementById('hellobotz-modal-media');
  if (!container) return;

  var tabs = document.querySelectorAll('.cw-m-tab');
  tabs.forEach(function(t) { t.classList.remove('active'); });
  if (btn) btn.classList.add('active');

  var bp = "<?php echo $bp; ?>";
  if (type === 'flow') {
    container.innerHTML = '<video class="cw-modal-video" autoplay loop muted playsinline controls poster="' + bp + 'assets/images/animations/interakt-hero.gif"><source src="' + bp + 'assets/images/animations/flow-builder.mp4" type="video/mp4"><img src="' + bp + 'assets/images/animations/interakt-hero.gif" alt="Flow Builder Demo"></video>';
  } else if (type === 'chat') {
    container.innerHTML = '<img class="cw-modal-img" src="' + bp + 'assets/images/animations/live-chat.gif" alt="Multi-Agent Live Chat Inbox">';
  } else if (type === 'integrations') {
    container.innerHTML = '<img class="cw-modal-img" src="' + bp + 'assets/images/animations/integration-1.gif" alt="CRM & eCommerce Integrations">';
  } else if (type === 'analytics') {
    container.innerHTML = '<img class="cw-modal-img" src="' + bp + 'assets/images/animations/analytics.gif" alt="Campaign Analytics">';
  }
}


(function() {
  var basePath = "<?php echo $bp; ?>assets/images/channel/whatsapp/";
  var capabilities = [
    {
      title: "WhatsApp Shared Team Inbox",
      desc: "Let your entire sales and customer service team chat with customers using a single WhatsApp number. Direct customer messages to the right team member automatically.",
      img: basePath + "shared-team-inbox.png",
      bullets: [
        "Send chats to the right person",
        "Write notes only your team can see"
      ]
    },
    {
      title: "Visual Reply Builder",
      desc: "Create simple automatic replies for customer questions. Set up answers that trigger when customers type specific words or tap buttons.",
      img: basePath + "visual-reply-builder.png",
      bullets: [
        "Taps and words trigger replies",
        "Add interactive options menu"
      ]
    },
    {
      title: "Bulk Messaging",
      desc: "Send announcements or notifications to thousands of customers at once. Add their names or personal details to make messages friendly.",
      img: basePath + "bulk-messaging.png",
      bullets: [
        "Add customer names automatically",
        "See who opened and clicked links"
      ]
    },
    {
      title: "Smart AI Calling",
      desc: "Let smart voice assistants make and answer phone calls for your business. Help customers get information without waiting on hold.",
      img: basePath + "smart-ai-calling.png",
      bullets: [
        "Clear and friendly AI voices",
        "See summary logs of every call"
      ]
    },
    {
      title: "Easy Scheduling",
      desc: "Let customers book appointments and schedule meetings directly inside the WhatsApp chat window. No outside links needed.",
      img: basePath + "easy-scheduling.png",
      bullets: [
        "Choose calendar dates in chat",
        "Send automated appointment reminders"
      ]
    },
    {
      title: "Send Simple Forms",
      desc: "Create and send simple forms inside the chat so customers can fill out their details, sign up, or share info without leaving WhatsApp.",
      img: basePath + "send-simple-forms.png",
      bullets: [
        "Fill out forms inside the chat",
        "Save customer answers instantly"
      ]
    },
    {
      title: "AI Chat Assistant",
      desc: "Train an AI helper using your own business files or website links. It can answer customer questions about pricing and product availability 24/7.",
      img: basePath + "ai-chat-assistant.png",
      bullets: [
        "AI answers customer questions",
        "Hand over to a real person if needed"
      ]
    },
    {
      title: "Link Your Existing Tools",
      desc: "Connect WhatsApp with the tools you already use like Shopify or your customer database. Send messages automatically when orders are placed or shipped.",
      img: basePath + "link-existing-tools.png",
      bullets: [
        "Connect with tools like Shopify",
        "Send messages automatically when things update"
      ]
    },
    {
      title: "Showcase Your Products",
      desc: "Display your product inventory, catalog items, and pictures directly in the chat. Let customers select items and check out right inside WhatsApp.",
      img: basePath + "showcase-products.png",
      bullets: [
        "Show product lists and pictures",
        "Quick and easy checkout in chat"
      ]
    }
  ];

  // Preload all capability preview images for instant switching
  capabilities.forEach(function(item) {
    var preload = new Image();
    preload.src = item.img;
  });

  var tabs = document.querySelectorAll(".cw-cap-tab");
  var imgEl = document.getElementById("cwCapImg");
  var titleEl = document.getElementById("cwCapTitle");
  var descEl = document.getElementById("cwCapDesc");
  var bulletsEl = document.getElementById("cwCapBullets");

  if (!tabs.length || !imgEl || !titleEl || !descEl || !bulletsEl) return;

  function setCapability(index) {
    var item = capabilities[index];
    if (!item) return;

    tabs.forEach(function(tab, i) {
      if (i === index) {
        tab.classList.add("active");
        tab.setAttribute("aria-selected", "true");
        var tabsContainer = document.getElementById("cwCapTabs");
        if (tabsContainer && tabsContainer.scrollWidth > tabsContainer.clientWidth) {
          var targetLeft = tab.offsetLeft - (tabsContainer.clientWidth / 2) + (tab.clientWidth / 2);
          tabsContainer.scrollTo({ left: Math.max(0, targetLeft), behavior: "smooth" });
        }
      } else {
        tab.classList.remove("active");
        tab.setAttribute("aria-selected", "false");
      }
    });

    imgEl.classList.add("animating");

    setTimeout(function() {
      imgEl.src = item.img;
      imgEl.alt = item.title;
      titleEl.textContent = item.title;
      descEl.textContent = item.desc;

      var bulletsHtml = "";
      item.bullets.forEach(function(b) {
        bulletsHtml += '<li class="cw-cap-bullet-item">' +
          '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>' +
          '<span>' + b + '</span>' +
          '</li>';
      });
      bulletsEl.innerHTML = bulletsHtml;

      imgEl.onload = function() {
        imgEl.classList.remove("animating");
      };
      setTimeout(function() {
        imgEl.classList.remove("animating");
      }, 50);
    }, 110);
  }

  tabs.forEach(function(tab) {
    tab.addEventListener("click", function() {
      var idx = parseInt(this.getAttribute("data-index"), 10);
      setCapability(idx);
    });
  });
})();
</script>

<?php
$footerContactText = "Talk to our team about Official WhatsApp Business API, automation and omnichannel setup for your business.";
include __DIR__ . '/../../includes/footer.php';
?>
