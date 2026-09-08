<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'WhatsApp Business API & Automation Platform | InboxWa';
$pageDescription = 'Scale your sales and customer support with Official Meta WhatsApp Business API. Multi-agent shared inbox, automated AI reply builder, bulk broadcasts, and zero-ban compliance.';
$canonicalUrl = 'https://inboxwa.com/channel/whatsapp/';
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
    padding: calc(var(--nav, 72px) + 1.25rem) 1.5rem 0.5rem;
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
    padding: 2.5rem 1.5rem 4.5rem;
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
  .cw-hero-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 2rem;
  }
  .cw-btn-primary {
    background: #059669;
    color: #ffffff;
    font-weight: 700;
    font-size: 1rem;
    padding: 0.85rem 1.85rem;
    border-radius: 999px;
    text-decoration: none;
    box-shadow: 0 10px 25px -5px rgba(5, 150, 105, 0.4);
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
  }
  .cw-btn-primary:hover {
    background: #047857;
    transform: translateY(-2px);
    box-shadow: 0 15px 30px -5px rgba(5, 150, 105, 0.5);
    color: #ffffff;
  }
  .cw-btn-secondary {
    background: #ffffff;
    color: #0f172a;
    font-weight: 600;
    font-size: 1rem;
    padding: 0.85rem 1.75rem;
    border-radius: 999px;
    border: 1px solid #cbd5e1;
    text-decoration: none;
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
  }
  .cw-btn-secondary:hover {
    background: #f8fafc;
    border-color: #94a3b8;
    color: #0f172a;
    transform: translateY(-2px);
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

  /* Interactive Mockup Phone Stage */
  .cw-phone-wrapper {
    position: relative;
    max-width: 380px;
    margin: 0 auto;
  }
  .cw-phone-device {
    background: #0b141a;
    border-radius: 36px;
    padding: 12px;
    box-shadow: 0 25px 60px -15px rgba(15, 23, 42, 0.35), 0 0 0 1px rgba(255, 255, 255, 0.1);
    border: 3px solid #1e293b;
    position: relative;
    z-index: 2;
  }
  .cw-phone-notch {
    width: 90px;
    height: 18px;
    background: #1e293b;
    border-radius: 0 0 12px 12px;
    margin: 0 auto 8px;
  }
  .cw-phone-screen {
    background: #0b141a;
    border-radius: 26px;
    height: 440px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
  }
  .cw-wa-header {
    background: #1f2c34;
    padding: 10px 14px;
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .cw-wa-avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: linear-gradient(135deg, #059669, #10b981);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    font-weight: 800;
    font-size: 0.85rem;
  }
  .cw-wa-header-info strong {
    display: block;
    color: #e9edef;
    font-size: 0.85rem;
    font-weight: 700;
  }
  .cw-wa-header-info span {
    color: #8696a0;
    font-size: 0.72rem;
    display: flex;
    align-items: center;
    gap: 4px;
  }
  .cw-wa-body {
    flex: 1;
    padding: 12px;
    display: flex;
    flex-direction: column;
    gap: 8px;
    justify-content: flex-end;
    background-image: radial-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px);
    background-size: 16px 16px;
  }
  .cw-bubble {
    max-width: 88%;
    padding: 8px 12px;
    border-radius: 12px;
    font-size: 0.8rem;
    line-height: 1.45;
  }
  .cw-bubble.user {
    align-self: flex-end;
    background: #005c4b;
    color: #e9edef;
    border-bottom-right-radius: 2px;
  }
  .cw-bubble.bot {
    align-self: flex-start;
    background: #1f2c34;
    color: #e9edef;
    border-bottom-left-radius: 2px;
  }
  .cw-bubble .time {
    display: block;
    text-align: right;
    font-size: 0.65rem;
    color: #8696a0;
    margin-top: 3px;
  }
  .cw-floating-card {
    position: absolute;
    z-index: 3;
    background: #ffffff;
    padding: 10px 14px;
    border-radius: 14px;
    box-shadow: 0 14px 30px rgba(15, 23, 42, 0.15);
    border: 1px solid #e2e8f0;
    display: flex;
    align-items: center;
    gap: 10px;
    animation: cwFloat 4s ease-in-out infinite alternate;
  }
  .cw-fc-1 { top: 12%; left: -24px; }
  .cw-fc-2 { bottom: 18%; right: -24px; animation-delay: -2s; }
  @keyframes cwFloat {
    from { transform: translateY(0); }
    to { transform: translateY(-8px); }
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
    background: linear-gradient(135deg, #f8faff 0%, #f1f5f9 100%);
    border: 1px solid #f1f5f9;
    border-radius: 20px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.04);
    position: relative;
    flex-shrink: 0;
  }
  .cw-cap-img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    display: block;
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

  /* Visual Customer Journey & Steps Section */
  .cw-steps-section {
    background: #0b1329;
    color: #ffffff;
    padding: 6rem 1.5rem;
    position: relative;
    overflow: hidden;
  }
  .cw-steps-header {
    text-align: center;
    max-width: 820px;
    margin: 0 auto 4rem;
  }
  .cw-steps-header .cw-section-title {
    color: #ffffff;
    font-size: 2.2rem;
    font-weight: 800;
    line-height: 1.25;
    margin: 1rem 0 0.8rem;
  }
  .cw-steps-header .cw-section-subtitle {
    color: #94a3b8;
    font-size: 1.05rem;
    line-height: 1.6;
    margin: 0;
  }
  .cw-journey-flow {
    display: flex;
    flex-direction: column;
    gap: 3rem;
    max-width: 1160px;
    margin: 0 auto;
  }
  .cw-journey-card {
    background: #131d36;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 24px;
    padding: 2.5rem;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    align-items: center;
    transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 12px 32px -10px rgba(0, 0, 0, 0.4);
    box-sizing: border-box;
    width: 100%;
    max-width: 100%;
  }
  .cw-journey-card:hover {
    border-color: rgba(5, 150, 105, 0.45);
    box-shadow: 0 20px 45px -10px rgba(5, 150, 105, 0.2);
    transform: translateY(-3px);
  }
  .cw-journey-card.reverse {
    direction: rtl;
  }
  .cw-journey-card.reverse > * {
    direction: ltr;
  }
  .cw-journey-media {
    position: relative;
    border-radius: 18px;
    overflow: hidden;
    background: #0f172a;
    border: 1px solid rgba(255, 255, 255, 0.12);
    box-shadow: 0 16px 36px -10px rgba(0, 0, 0, 0.55);
    width: 100%;
    box-sizing: border-box;
  }
  .cw-journey-img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 18px;
    transition: transform 0.4s ease;
  }
  .cw-journey-card:hover .cw-journey-img {
    transform: scale(1.025);
  }
  .cw-journey-badge-float {
    position: absolute;
    top: 14px;
    left: 14px;
    background: rgba(15, 23, 42, 0.88);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(52, 211, 153, 0.3);
    color: #34d399;
    font-size: 0.75rem;
    font-weight: 700;
    padding: 6px 12px;
    border-radius: 999px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    z-index: 2;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
  }
  .cw-journey-content {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
    box-sizing: border-box;
    width: 100%;
  }
  .cw-journey-step-header {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    flex-wrap: wrap;
  }
  .cw-journey-step-pill {
    background: rgba(5, 150, 105, 0.22);
    color: #34d399;
    border: 1px solid rgba(5, 150, 105, 0.4);
    font-size: 0.75rem;
    font-weight: 800;
    letter-spacing: 0.06em;
    padding: 4px 12px;
    border-radius: 999px;
    text-transform: uppercase;
  }
  .cw-journey-step-time {
    color: #94a3b8;
    font-size: 0.82rem;
    font-weight: 600;
  }
  .cw-journey-title {
    font-size: 1.55rem;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.3;
    margin: 0;
  }
  .cw-journey-desc {
    font-size: 0.95rem;
    color: #cbd5e1;
    line-height: 1.6;
    margin: 0;
  }
  .cw-journey-guide-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 0.85rem;
  }
  .cw-journey-guide-box {
    background: rgba(15, 23, 42, 0.65);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius: 14px;
    padding: 1.1rem 1.25rem;
  }
  .cw-journey-box-label {
    font-size: 0.8rem;
    font-weight: 800;
    color: #38bdf8;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 0.55rem;
    display: flex;
    align-items: center;
    gap: 6px;
  }
  .cw-journey-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
  }
  .cw-journey-list li {
    font-size: 0.88rem;
    color: #94a3b8;
    line-height: 1.45;
    display: flex;
    align-items: flex-start;
    gap: 0.6rem;
  }
  .cw-journey-list li svg {
    flex-shrink: 0;
    color: #10b981;
    margin-top: 3px;
  }
  .cw-journey-kpi-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.82rem;
    font-weight: 700;
    color: #34d399;
    background: rgba(16, 185, 129, 0.12);
    border: 1px solid rgba(16, 185, 129, 0.3);
    padding: 7px 14px;
    border-radius: 10px;
    align-self: flex-start;
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
    .cw-btn-primary,
    .cw-btn-secondary {
      width: 100% !important;
      box-sizing: border-box !important;
      justify-content: center !important;
      text-align: center !important;
      padding: 0.85rem 1.25rem !important;
      font-size: 0.95rem !important;
    }
    .cw-trust-row {
      width: 100% !important;
      max-width: 100% !important;
      justify-content: center !important;
      flex-wrap: wrap !important;
      gap: 0.65rem 1.25rem !important;
      font-size: 0.8rem !important;
      margin: 0 auto !important;
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
      flex-direction: row !important;
      overflow-x: auto !important;
      white-space: nowrap !important;
      max-height: none !important;
      gap: 8px !important;
      padding-bottom: 6px !important;
      -webkit-overflow-scrolling: touch !important;
    }
    .cw-cap-tab {
      flex-shrink: 0 !important;
      width: auto !important;
      padding: 9px 14px !important;
      font-size: 0.88rem !important;
    }
    .cw-cap-panel {
      padding: 1.5rem 1.2rem !important;
    }
    .cw-cap-preview {
      border-radius: 14px !important;
      aspect-ratio: 16 / 9 !important;
      width: 100% !important;
      height: auto !important;
      min-height: 180px !important;
      max-height: 240px !important;
      flex-shrink: 0 !important;
      overflow: hidden !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
    }
    .cw-cap-img {
      width: 100% !important;
      height: 100% !important;
      max-height: 100% !important;
      object-fit: contain !important;
      display: block !important;
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
          Scale Your Sales and Support on <span class="highlight-green">WhatsApp</span>
        </h1>
        <p class="cw-hero-desc">
          Manage customer chats together with a shared inbox, build smart automatic reply flows, and run broadcasts safely using the official WhatsApp Business API.
        </p>
        <div class="cw-hero-actions">
          <a href="<?php echo $bp; ?>auth/register" class="cw-btn-primary">
            Start Free Trial
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <button type="button" class="cw-btn-secondary btn-demo-open">
            Book a Demo
          </button>
        </div>
        <div class="cw-trust-row">
          <span class="cw-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            5-Minute Setup
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

      <!-- Phone Simulator Stage -->
      <div class="cw-phone-wrapper">
        <div class="cw-floating-card cw-fc-1">
          <span style="width:10px;height:10px;border-radius:50%;background:#10b981;display:inline-block;"></span>
          <span style="font-size:0.8rem;font-weight:700;color:#0f172a;">+128 Leads Captured</span>
        </div>
        <div class="cw-floating-card cw-fc-2">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
          <span style="font-size:0.8rem;font-weight:700;color:#0f172a;">99.9% Delivery Uptime</span>
        </div>

        <div class="cw-phone-device">
          <div class="cw-phone-notch"></div>
          <div class="cw-phone-screen">
            <div class="cw-wa-header">
              <div class="cw-wa-avatar">IW</div>
              <div class="cw-wa-header-info">
                <strong>InboxWa Business AI</strong>
                <span><i style="width:6px;height:6px;border-radius:50%;background:#10b981;display:inline-block;"></i> Online</span>
              </div>
            </div>
            <div class="cw-wa-body">
              <div class="cw-bubble user">
                Hi! How can InboxWa automate our customer sales on WhatsApp?
                <span class="time">10:42 AM</span>
              </div>
              <div class="cw-bubble bot">
                👋 Hello! With Official WhatsApp API, you can send broadcasts with 98% open rates, auto-qualify leads 24/7, and assign chats across your entire team from 1 single number!
                <span class="time">10:42 AM</span>
              </div>
              <div class="cw-bubble user">
                Can I connect my Shopify store & CRM?
                <span class="time">10:43 AM</span>
              </div>
              <div class="cw-bubble bot">
                ✅ Yes! Orders, abandoned cart recoveries, and contact sync happen automatically with zero code.
                <span class="time">10:43 AM</span>
              </div>
            </div>
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
      <p class="cw-section-subtitle">Discover why scaling on WhatsApp requires switching from the generic app to an official API-powered workflow built for teams.</p>
    </div>

    <div class="cw-table-container">
      <table class="cw-comp-table">
        <thead>
          <tr>
            <th style="width:30%;">Platform Feature</th>
            <th style="width:35%;">WhatsApp App (Standard)</th>
            <th style="width:35%;" class="col-api">Official API (InboxWa)</th>
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
      <h2 class="cw-section-title">Powerful Tools to Turn WhatsApp into a Sales Machine</h2>
      <p class="cw-section-subtitle">Explore the exact capabilities engineered within our platform to help you automate customer operations completely.</p>
    </div>

    <div class="cw-cap-container">
      <!-- Left Sidebar: Select Capabilities -->
      <div class="cw-cap-sidebar">
        <div class="cw-cap-sidebar-title">Select Capabilities</div>
        <div class="cw-cap-tabs" id="cwCapTabs" role="tablist">
          <button type="button" class="cw-cap-tab active" data-index="0" role="tab" aria-selected="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
            <span>Shared Team Inbox</span>
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
          <img id="cwCapImg" src="/assets/images/capabilities/shared-team-inbox.png" alt="Shared Team Inbox" class="cw-cap-img" loading="eager" />
        </div>
        <div class="cw-cap-content">
          <h3 id="cwCapTitle" class="cw-cap-title">Shared Team Inbox</h3>
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

  <!-- 4. HOW IT WORKS / CUSTOMER JOURNEY -->
  <section class="cw-steps-section" id="how-it-works">
    <div class="cw-steps-header">
      <span class="cw-badge-pill" style="background:rgba(5, 150, 105, 0.2);color:#34d399;border-color:rgba(5,150,105,0.4);">Customer Journey &amp; Process</span>
      <h2 class="cw-section-title">How It Works: 3 Steps to WhatsApp Automation</h2>
      <p class="cw-section-subtitle">Visual, end-to-end journey showing how InboxWa connects your official number, automates chat workflows, and closes sales 24/7.</p>
    </div>

    <div class="cw-journey-flow">
      <!-- Step 1 -->
      <div class="cw-journey-card">
        <div class="cw-journey-media">
          <span class="cw-journey-badge-float">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Official Meta Cloud API
          </span>
          <img src="<?php echo $bp; ?>assets/images/journey/wa-step-1.jpg" alt="WhatsApp Step 1: Scan QR and Connect Meta Cloud API" class="cw-journey-img" loading="lazy" />
        </div>
        <div class="cw-journey-content">
          <div class="cw-journey-step-header">
            <span class="cw-journey-step-pill">Step 01 &bull; Connection</span>
            <span class="cw-journey-step-time">⏱️ Under 2 Minutes</span>
          </div>
          <h3 class="cw-journey-title">Scan QR Code &amp; Link Official Meta Cloud API</h3>
          <p class="cw-journey-desc">No complicated developer dashboards or server setups. Connect your phone number securely in seconds with official WhatsApp Cloud verification.</p>
          
          <div class="cw-journey-guide-grid">
            <div class="cw-journey-guide-box">
              <div class="cw-journey-box-label">👉 What You Do</div>
              <ul class="cw-journey-list">
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Open WhatsApp on your phone &amp; scan the secure pairing QR code</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Confirm your company display name and business profile details</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Activate with instant Meta green checkmark verification</span>
                </li>
              </ul>
            </div>
            <div class="cw-journey-guide-box">
              <div class="cw-journey-box-label">⚙️ How It Works Behind The Scenes</div>
              <p style="font-size:0.86rem;color:#94a3b8;line-height:1.5;margin:0;">InboxWa automatically links your number to Meta's enterprise server cluster, establishing an encrypted token tunnel that guarantees 100% anti-ban safety and high throughput.</p>
            </div>
          </div>

          <div class="cw-journey-kpi-badge">
            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Zero Ban Risk &bull; 100% Meta Official API Compliance
          </div>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="cw-journey-card reverse">
        <div class="cw-journey-media">
          <span class="cw-journey-badge-float">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
            Drag-and-Drop Builder
          </span>
          <img src="<?php echo $bp; ?>assets/images/journey/wa-step-2.jpg" alt="WhatsApp Step 2: Visual Chatbot Flow Builder" class="cw-journey-img" loading="lazy" />
        </div>
        <div class="cw-journey-content">
          <div class="cw-journey-step-header">
            <span class="cw-journey-step-pill">Step 02 &bull; Automation</span>
            <span class="cw-journey-step-time">⚡ Zero Coding Needed</span>
          </div>
          <h3 class="cw-journey-title">Build Visual Chatbots &amp; Instant Reply Flows</h3>
          <p class="cw-journey-desc">Design automated response trees that greet customers, qualify buyer intent, display product catalogs, and answer frequently asked questions 24 hours a day.</p>
          
          <div class="cw-journey-guide-grid">
            <div class="cw-journey-guide-box">
              <div class="cw-journey-box-label">👉 What You Do</div>
              <ul class="cw-journey-list">
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Select from 50+ pre-built industry flow templates (Ecommerce, Clinics, Real Estate)</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Add interactive reply buttons, list pickers, PDF brochures, and media cards</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Set smart trigger keywords like "PRICE", "DEMO", "OFFER", or "SUPPORT"</span>
                </li>
              </ul>
            </div>
            <div class="cw-journey-guide-box">
              <div class="cw-journey-box-label">⚙️ How It Works Behind The Scenes</div>
              <p style="font-size:0.86rem;color:#94a3b8;line-height:1.5;margin:0;">Whenever a customer sends an inquiry, InboxWa evaluates intent in milliseconds and fires the exact programmed answer with interactive CTAs without human intervention.</p>
            </div>
          </div>

          <div class="cw-journey-kpi-badge">
            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            Instant 0.5s Response Speed &bull; 24/7/365 Always Active
          </div>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="cw-journey-card">
        <div class="cw-journey-media">
          <span class="cw-journey-badge-float">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            Shared Team Dashboard
          </span>
          <img src="<?php echo $bp; ?>assets/images/journey/wa-step-3.jpg" alt="WhatsApp Step 3: Multi-Agent Inbox and Broadcast Campaigns" class="cw-journey-img" loading="lazy" />
        </div>
        <div class="cw-journey-content">
          <div class="cw-journey-step-header">
            <span class="cw-journey-step-pill">Step 03 &bull; Scale &amp; Sell</span>
            <span class="cw-journey-step-time">📈 98% Open Rates</span>
          </div>
          <h3 class="cw-journey-title">Multi-Agent Team Inbox &amp; Bulk Broadcasts</h3>
          <p class="cw-journey-desc">One phone number, unlimited human agents. Assign chats across your sales team while launching targeted promotional broadcasts to thousands of opted-in customers.</p>
          
          <div class="cw-journey-guide-grid">
            <div class="cw-journey-guide-box">
              <div class="cw-journey-box-label">👉 What You Do</div>
              <ul class="cw-journey-list">
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Assign hot conversations to specific agents with internal private notes</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Broadcast promotional offers, discounts, and order updates in 1 click</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Track real-time delivery, read receipts, and agent resolution metrics</span>
                </li>
              </ul>
            </div>
            <div class="cw-journey-guide-box">
              <div class="cw-journey-box-label">⚙️ How It Works Behind The Scenes</div>
              <p style="font-size:0.86rem;color:#94a3b8;line-height:1.5;margin:0;">InboxWa's multi-tenant engine organizes all contacts into segments, handles rate limiting automatically, and delivers deep conversion attribution straight to your CRM.</p>
            </div>
          </div>

          <div class="cw-journey-kpi-badge">
            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
            98% Average Open Rate &bull; 45% Higher Sales Closing
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. FINAL SALES CTA BANNER -->
  <section class="cw-sales-section">
    <div class="cw-sales-inner">
      <h2 class="cw-sales-title">Turn Your WhatsApp Into A Sales Engine Today</h2>
      <p class="cw-sales-desc">Start sending announcements, managing team chats, and answering customer questions automatically right now.</p>
      <div class="cw-sales-actions">
        <a href="<?php echo $bp; ?>auth/register" class="cw-btn-white">
          Try For Free &rarr;
        </a>
        <button type="button" class="cw-btn-transparent btn-demo-open">
          Talk to Sales
        </button>
      </div>
      <div class="cw-sales-trust">
        <span>✓ 5-Minute Setup</span>
        <span>✓ Official Connection</span>
        <span>✓ Cancel Anytime</span>
      </div>
    </div>
  </section>
</div>

<script>
(function() {
  var basePath = "/assets/images/capabilities/";
  var capabilities = [
    {
      title: "Shared Team Inbox",
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
        tab.scrollIntoView({ behavior: "smooth", block: "nearest", inline: "center" });
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
include __DIR__ . '/../../includes/offer-popup.php';
include __DIR__ . '/../../includes/callback-popup.php';
include __DIR__ . '/../../includes/footer.php';
?>
