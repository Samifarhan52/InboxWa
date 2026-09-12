<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Telegram Bot Automation & Broadcast Platform | InboxWa';
$pageDescription = 'Connect your business chat, create quick message templates with buttons, set up automatic replies for customer questions, and track all incoming messages easily with InboxWa.';
$canonicalUrl = 'https://inboxwa.com/channel/telegram/';
$ogImage = 'assets/images/channel/telegram/hero.png';

include __DIR__ . '/../../includes/header.php';
?>

<style>
  :root {
    --tg-blue: #0284c7;
    --tg-sky: #0ea5e9;
    --tg-dark: #0369a1;
    --tg-gradient: linear-gradient(135deg, #0284c7 0%, #0ea5e9 100%);
    --tg-gradient-subtle: linear-gradient(135deg, rgba(2, 132, 199, 0.08) 0%, rgba(14, 165, 233, 0.08) 100%);
  }

  .ctg-page {
    background: #ffffff;
    color: #1e293b;
    font-family: inherit;
    overflow-x: hidden;
    width: 100%;
    max-width: 100vw;
    box-sizing: border-box;
  }

  /* Breadcrumb */
  .ctg-breadcrumb {
    padding: calc(var(--nav, 72px) + 1.25rem) 1.5rem 0.5rem;
    max-width: 1200px;
    margin: 0 auto;
    font-size: 0.85rem;
    color: #64748b;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }
  .ctg-breadcrumb a {
    color: #64748b;
    text-decoration: none;
    transition: color 0.15s;
  }
  .ctg-breadcrumb a:hover {
    color: var(--tg-blue);
  }

  /* Hero Section */
  .ctg-hero-section {
    padding: 2.5rem 1.5rem 4.5rem;
    max-width: 1200px;
    width: 100%;
    margin: 0 auto;
    box-sizing: border-box;
  }
  .ctg-hero-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3.5rem;
    align-items: center;
  }
  .ctg-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.35rem 0.9rem;
    border-radius: 9999px;
    background: var(--tg-gradient-subtle);
    color: var(--tg-blue);
    font-size: 0.78rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    border: 1px solid rgba(2, 132, 199, 0.2);
    margin-bottom: 1.25rem;
  }
  .ctg-badge-pill svg {
    flex-shrink: 0;
  }
  .ctg-hero-title {
    font-size: clamp(2.2rem, 4vw, 3.25rem);
    font-weight: 900;
    line-height: 1.15;
    color: #0f172a;
    margin: 0 0 1.25rem;
    letter-spacing: -0.025em;
  }
  .ctg-hero-title .highlight-tg {
    background: var(--tg-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
  }
  .ctg-hero-desc {
    font-size: 1.1rem;
    line-height: 1.65;
    color: #475569;
    margin: 0 0 2rem;
    max-width: 520px;
  }
  .ctg-hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    margin-bottom: 2.5rem;
    align-items: center;
  }
  .ctg-btn-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    background: var(--tg-gradient);
    color: #ffffff !important;
    font-weight: 700;
    font-size: 0.98rem;
    padding: 0.875rem 1.85rem;
    border-radius: 12px;
    text-decoration: none;
    box-shadow: 0 10px 25px -5px rgba(2, 132, 199, 0.38);
    transition: all 0.2s ease;
    border: none;
    cursor: pointer;
  }
  .ctg-btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 30px -5px rgba(2, 132, 199, 0.5);
    color: #ffffff !important;
  }
  .ctg-btn-secondary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    background: #f8fafc;
    color: #334155;
    font-weight: 600;
    font-size: 0.98rem;
    padding: 0.875rem 1.65rem;
    border-radius: 12px;
    text-decoration: none;
    border: 1px solid #e2e8f0;
    transition: all 0.2s ease;
    cursor: pointer;
  }
  .ctg-btn-secondary:hover {
    background: #f1f5f9;
    color: #0f172a;
    border-color: #cbd5e1;
  }
  .ctg-trust-row {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    font-size: 0.85rem;
    color: #64748b;
    font-weight: 600;
    align-items: center;
  }
  .ctg-trust-item {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
  }
  .ctg-trust-item svg {
    color: var(--tg-blue);
    flex-shrink: 0;
  }
  .ctg-hero-visual {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }
  .ctg-hero-img-wrap {
    position: relative;
    width: 100%;
    max-width: 550px;
    margin: 0 auto;
    background: transparent;
    border: none;
    box-shadow: none;
    transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .ctg-hero-img-wrap:hover {
    transform: translateY(-6px);
  }
  .ctg-hero-img {
    display: block;
    width: 100%;
    height: auto;
    filter: drop-shadow(0 20px 35px rgba(2, 132, 199, 0.15));
  }

  /* Section Containers */
  .ctg-container {
    max-width: 1200px;
    margin: 0 auto;
    width: 100%;
    padding: 0 1.5rem;
    box-sizing: border-box;
  }
  .ctg-section-header {
    text-align: center;
    max-width: 760px;
    margin: 0 auto 3.5rem;
  }
  .ctg-section-title {
    font-size: clamp(1.85rem, 3.2vw, 2.6rem);
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 1rem;
    letter-spacing: -0.02em;
    line-height: 1.2;
  }
  .ctg-section-subtitle {
    font-size: 1.05rem;
    color: #64748b;
    line-height: 1.6;
    margin: 0;
  }

  /* 4 Showcase Rows */
  .ctg-showcases-section {
    padding: 5rem 0;
    background: #ffffff;
  }
  .ctg-showcases-list {
    display: flex;
    flex-direction: column;
    gap: 5.5rem;
  }
  .ctg-showcase-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
  }
  .ctg-showcase-row.reversed {
    direction: rtl;
  }
  .ctg-showcase-row.reversed .ctg-sc-text {
    direction: ltr;
  }
  .ctg-showcase-row.reversed .ctg-sc-visual {
    direction: ltr;
  }
  .ctg-sc-tag {
    display: inline-block;
    padding: 0.25rem 0.75rem;
    border-radius: 6px;
    background: rgba(2, 132, 199, 0.1);
    color: var(--tg-blue);
    font-size: 0.78rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 0.75rem;
  }
  .ctg-sc-title {
    font-size: clamp(1.65rem, 2.5vw, 2.25rem);
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 1rem;
    line-height: 1.25;
    letter-spacing: -0.015em;
  }
  .ctg-sc-desc {
    font-size: 1.02rem;
    line-height: 1.65;
    color: #475569;
    margin: 0 0 1.5rem;
  }
  .ctg-sc-bullets {
    list-style: none;
    padding: 0;
    margin: 0 0 2rem;
    display: flex;
    flex-direction: column;
    gap: 0.85rem;
  }
  .ctg-sc-bullet {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    font-size: 0.95rem;
    color: #334155;
    font-weight: 500;
    line-height: 1.45;
  }
  .ctg-sc-bullet svg {
    color: var(--tg-blue);
    flex-shrink: 0;
    margin-top: 2px;
  }
  .ctg-sc-visual {
    position: relative;
    width: 100%;
    max-width: 550px;
    margin: 0 auto;
    background: transparent;
    border: none;
    box-shadow: none;
    border-radius: 0;
    overflow: visible;
    transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .ctg-sc-visual:hover {
    transform: translateY(-6px);
  }
  .ctg-sc-img {
    display: block;
    width: 100%;
    height: auto;
    filter: drop-shadow(0 20px 35px rgba(15, 23, 42, 0.08));
  }

  /* 4 Steps Section */
  .ctg-steps-section {
    padding: 5rem 0;
    background: #f8fafc;
    border-top: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
  }
  .ctg-steps-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
  }
  .ctg-step-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 2rem 1.5rem;
    border: 1px solid #e2e8f0;
    position: relative;
    transition: all 0.25s ease;
    display: flex;
    flex-direction: column;
  }
  .ctg-step-card:hover {
    transform: translateY(-4px);
    border-color: var(--tg-blue);
    box-shadow: 0 15px 30px -5px rgba(2, 132, 199, 0.12);
  }
  .ctg-step-number {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: var(--tg-gradient-subtle);
    color: var(--tg-blue);
    font-size: 1.15rem;
    font-weight: 800;
    margin-bottom: 1.25rem;
    border: 1px solid rgba(2, 132, 199, 0.2);
  }
  .ctg-step-card h3 {
    font-size: 1.15rem;
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 0.65rem;
    line-height: 1.3;
  }
  .ctg-step-card p {
    font-size: 0.9rem;
    line-height: 1.6;
    color: #64748b;
    margin: 0;
  }

  /* Enterprise Capabilities Grid */
  .ctg-capabilities-section {
    padding: 5.5rem 0;
    background: #ffffff;
  }
  .ctg-cap-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.75rem;
  }
  .ctg-cap-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 2.25rem 1.75rem;
    border: 1px solid #e2e8f0;
    transition: all 0.25s ease;
  }
  .ctg-cap-card:hover {
    border-color: var(--tg-blue);
    box-shadow: 0 15px 35px -5px rgba(2, 132, 199, 0.12);
    transform: translateY(-3px);
  }
  .ctg-cap-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: var(--tg-gradient-subtle);
    color: var(--tg-blue);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.25rem;
    border: 1px solid rgba(2, 132, 199, 0.2);
  }
  .ctg-cap-icon svg {
    width: 26px;
    height: 26px;
  }
  .ctg-cap-card h3 {
    font-size: 1.2rem;
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 0.75rem;
  }
  .ctg-cap-card p {
    font-size: 0.92rem;
    line-height: 1.6;
    color: #64748b;
    margin: 0;
  }

  /* BotFather Setup Guide Section */
  .ctg-guide-section {
    padding: 5rem 0;
    background: #f8fafc;
    border-top: 1px solid #e2e8f0;
  }
  .ctg-guide-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
  }
  .ctg-guide-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 2.25rem 1.75rem;
    border: 1px solid #e2e8f0;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    position: relative;
  }
  .ctg-guide-num {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    border-radius: 10px;
    background: var(--tg-blue);
    color: #ffffff;
    font-weight: 800;
    font-size: 1rem;
    margin-bottom: 1.25rem;
  }
  .ctg-guide-card h3 {
    font-size: 1.15rem;
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 0.75rem;
  }
  .ctg-guide-card p {
    font-size: 0.9rem;
    color: #64748b;
    line-height: 1.6;
    margin: 0 0 1rem;
  }
  .ctg-code-box {
    background: #0f172a;
    color: #38bdf8;
    padding: 0.5rem 0.85rem;
    border-radius: 8px;
    font-family: monospace;
    font-size: 0.85rem;
    display: inline-block;
  }

  /* FAQs Section */
  .ctg-faq-section {
    padding: 5.5rem 0;
    background: #ffffff;
    border-top: 1px solid #e2e8f0;
  }
  .ctg-faq-list {
    max-width: 800px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }
  .ctg-faq-item {
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    background: #ffffff;
    overflow: hidden;
    transition: all 0.2s ease;
  }
  .ctg-faq-item.active {
    border-color: var(--tg-blue);
    box-shadow: 0 10px 25px -5px rgba(2, 132, 199, 0.08);
  }
  .ctg-faq-trigger {
    width: 100%;
    padding: 1.35rem 1.5rem;
    text-align: left;
    background: none;
    border: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 1.05rem;
    font-weight: 700;
    color: #0f172a;
    cursor: pointer;
  }
  .ctg-faq-icon {
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #94a3b8;
    transition: transform 0.25s ease;
    flex-shrink: 0;
  }
  .ctg-faq-item.active .ctg-faq-icon {
    transform: rotate(180deg);
    color: var(--tg-blue);
  }
  .ctg-faq-content {
    display: none;
    padding: 0 1.5rem 1.35rem;
    font-size: 0.95rem;
    color: #475569;
    line-height: 1.65;
  }
  .ctg-faq-item.active .ctg-faq-content {
    display: block;
  }

  /* Sales Banner */
  .ctg-sales-section {
    padding: 5rem 1.5rem;
    background: #f8fafc;
  }
  .ctg-cta-banner {
    max-width: 1100px;
    margin: 0 auto;
    background: var(--tg-gradient);
    border-radius: 24px;
    padding: 4.5rem 2.5rem;
    text-align: center;
    color: #ffffff;
    box-shadow: 0 25px 50px -12px rgba(2, 132, 199, 0.4);
    position: relative;
    overflow: hidden;
  }
  .ctg-cta-banner::before {
    content: ;
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.15) 0%, transparent 60%);
    pointer-events: none;
  }
  .ctg-cta-title {
    font-size: clamp(2rem, 3.5vw, 2.75rem);
    font-weight: 900;
    margin: 0 0 1rem;
    line-height: 1.2;
    color: #ffffff;
  }
  .ctg-cta-subtitle {
    font-size: 1.15rem;
    opacity: 0.95;
    max-width: 680px;
    margin: 0 auto 2.5rem;
    line-height: 1.6;
    color: #ffffff;
  }
  .ctg-cta-actions {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 1rem;
    position: relative;
    z-index: 2;
  }
  .ctg-btn-white {
    background: #ffffff;
    color: var(--tg-blue) !important;
    font-weight: 800;
    font-size: 1rem;
    padding: 0.95rem 2.2rem;
    border-radius: 12px;
    text-decoration: none;
    box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
  }
  .ctg-btn-white:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    color: var(--tg-blue) !important;
  }
  .ctg-cta-trust {
    margin-top: 1.75rem;
    font-size: 0.85rem;
    opacity: 0.9;
    color: #ffffff;
  }

  /* Responsive Rules */
  @media (max-width: 1024px) {
    .ctg-hero-grid, .ctg-showcase-row {
      grid-template-columns: 1fr;
      gap: 3rem;
    }
    .ctg-showcase-row.reversed {
      direction: ltr;
    }
    .ctg-showcase-row.reversed .ctg-sc-visual {
      order: 2;
    }
    .ctg-showcase-row.reversed .ctg-sc-text {
      order: 1;
    }
    .ctg-steps-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    .ctg-cap-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    .ctg-guide-grid {
      grid-template-columns: 1fr;
    }
  }
  @media (max-width: 640px) {
    .ctg-hero-section {
      padding: 1.5rem 1rem 3.5rem;
    }
    .ctg-steps-grid {
      grid-template-columns: 1fr;
    }
    .ctg-cap-grid {
      grid-template-columns: 1fr;
    }
    .ctg-cta-banner {
      padding: 3rem 1.5rem;
    }
    .ctg-hero-actions {
      flex-direction: column;
      align-items: stretch;
    }
    .ctg-btn-primary, .ctg-btn-secondary {
      width: 100%;
      text-align: center;
    }
  }
</style>

<div class="ctg-page">
  <!-- Breadcrumb -->
  <nav class="ctg-breadcrumb" aria-label="Breadcrumb">
    <a href="<?php echo $bp; ?>">Home</a>
    <span>/</span>
    <span>Channels</span>
    <span>/</span>
    <span style="color:#0284c7;font-weight:600;">Telegram</span>
  </nav>

  <!-- 1. HERO SECTION -->
  <section class="ctg-hero-section">
    <div class="ctg-hero-grid">
      <div class="ctg-hero-content">
        <span class="ctg-badge-pill">
          <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69a.2.2 0 00-.05-.18c-.06-.05-.14-.03-.21-.02-.09.02-1.49.95-4.22 2.79-.4.27-.76.41-1.08.4-.36-.01-1.04-.2-1.55-.37-.63-.2-1.12-.31-1.08-.66.02-.18.27-.36.75-.55 2.92-1.27 4.86-2.11 5.83-2.51 2.78-1.16 3.35-1.36 3.73-1.36.08 0 .27.02.39.12.1.08.13.19.14.27-.01.06.01.24 0 .38z"/></svg>
          TELEGRAM BOT AUTOMATION
        </span>
        <h1 class="ctg-hero-title">
          Automate Your Telegram <span class="highlight-tg">Customer Chats</span>
        </h1>
        <p class="ctg-hero-desc">
          Connect your business chat, create quick message templates with buttons, set up automatic replies for customer questions, and track all incoming messages easily.
        </p>
        <div class="ctg-hero-actions">
          <a href="<?php echo $bp; ?>auth/register" class="ctg-btn-primary">
            Start Free Trial &rarr;
          </a>
          <button type="button" class="ctg-btn-secondary btn-demo-open">
            Book Telegram Demo
          </button>
        </div>
        <div class="ctg-trust-row">
          <span class="ctg-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Official Bot API
          </span>
          <span class="ctg-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            Unlimited Broadcasts
          </span>
          <span class="ctg-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            2-Minute Setup
          </span>
        </div>
      </div>

      <div class="ctg-hero-visual">
        <div class="ctg-hero-img-wrap">
          <img src="<?php echo $bp; ?>assets/images/channel/telegram/hero.png?v=20260909" alt="InboxWa Telegram Automation" class="ctg-hero-img" loading="eager">
        </div>
      </div>
    </div>
  </section>

  <!-- 2. 4 FEATURE SHOWCASE CARDS -->
  <section class="ctg-showcases-section">
    <div class="ctg-container">
      <div class="ctg-section-header">
        <span class="ctg-badge-pill">Features</span>
        <h2 class="ctg-section-title">Powerful Features Made Simple</h2>
        <p class="ctg-section-subtitle">
          Here is everything you can set up to manage your customer conversations in real-time.
        </p>
      </div>

      <div class="ctg-showcases-list">
        <!-- Showcase 1: Easy Account Setup -->
        <div class="ctg-showcase-row">
          <div class="ctg-sc-text">
            <span class="ctg-sc-tag">Instant Setup</span>
            <h3 class="ctg-sc-title">Easy Account Setup</h3>
            <p class="ctg-sc-desc">
              Connect your Telegram business account instantly with just a single copy-paste step.
            </p>
            <ul class="ctg-sc-bullets">
              <li class="ctg-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Connect using standard BotFather API token in seconds
              </li>
              <li class="ctg-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                No coding or server configuration needed to go live
              </li>
              <li class="ctg-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Secure webhook routing with 99.9% uptime SLA
              </li>
            </ul>
            <a href="<?php echo $bp; ?>auth/register" class="ctg-btn-primary">Connect Telegram Free &rarr;</a>
          </div>
          <div class="ctg-sc-visual">
            <img src="<?php echo $bp; ?>assets/images/channel/telegram/easy-setup.png?v=20260909" alt="Easy Account Setup" class="ctg-sc-img" loading="lazy">
          </div>
        </div>

        <!-- Showcase 2: Messages with Quick Buttons (Reversed) -->
        <div class="ctg-showcase-row reversed">
          <div class="ctg-sc-text">
            <span class="ctg-sc-tag">Interactive Menus</span>
            <h3 class="ctg-sc-title">Messages with Quick Buttons</h3>
            <p class="ctg-sc-desc">
              Write answers that include clickable buttons so your customers can reply or visit links in one tap.
            </p>
            <ul class="ctg-sc-bullets">
              <li class="ctg-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Inline URL buttons, callback query buttons, and web app links
              </li>
              <li class="ctg-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Guide users through interactive self-service support flows
              </li>
              <li class="ctg-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Drastically reduce agent workload with 1-tap navigation
              </li>
            </ul>
            <a href="<?php echo $bp; ?>auth/register" class="ctg-btn-primary">Create Button Workflows &rarr;</a>
          </div>
          <div class="ctg-sc-visual">
            <img src="<?php echo $bp; ?>assets/images/channel/telegram/quick-buttons.png?v=20260909" alt="Messages with Quick Buttons" class="ctg-sc-img" loading="lazy">
          </div>
        </div>

        <!-- Showcase 3: Word Detection Rules -->
        <div class="ctg-showcase-row">
          <div class="ctg-sc-text">
            <span class="ctg-sc-tag">Keyword Triggers</span>
            <h3 class="ctg-sc-title">Word Detection Rules</h3>
            <p class="ctg-sc-desc">
              Tell your account to automatically send specific answers whenever a customer types words like 'price' or 'help'.
            </p>
            <ul class="ctg-sc-bullets">
              <li class="ctg-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Match exact keywords, phrases, or AI intent triggers
              </li>
              <li class="ctg-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Deliver instant pricing cards, catalogs, and documentation
              </li>
              <li class="ctg-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Fallback cleanly to human agents when complex queries arise
              </li>
            </ul>
            <a href="<?php echo $bp; ?>auth/register" class="ctg-btn-primary">Configure Keyword Rules &rarr;</a>
          </div>
          <div class="ctg-sc-visual">
            <img src="<?php echo $bp; ?>assets/images/channel/telegram/word-detection.png?v=20260909" alt="Word Detection Rules" class="ctg-sc-img" loading="lazy">
          </div>
        </div>

        <!-- Showcase 4: Real-Time Message Logs (Reversed) -->
        <div class="ctg-showcase-row reversed">
          <div class="ctg-sc-text">
            <span class="ctg-sc-tag">Live Monitoring</span>
            <h3 class="ctg-sc-title">Real-Time Message Logs</h3>
            <p class="ctg-sc-desc">
              Keep track of all sent, delivered, and read messages in a simple list view.
            </p>
            <ul class="ctg-sc-bullets">
              <li class="ctg-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Full audit trail of customer interactions and response times
              </li>
              <li class="ctg-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Monitor broadcast delivery rates across channels and groups
              </li>
              <li class="ctg-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Filter by user, date, trigger rule, and resolution status
              </li>
            </ul>
            <a href="<?php echo $bp; ?>auth/register" class="ctg-btn-primary">View Message Analytics &rarr;</a>
          </div>
          <div class="ctg-sc-visual">
            <img src="<?php echo $bp; ?>assets/images/channel/telegram/message-logs.png?v=20260909" alt="Real-Time Message Logs" class="ctg-sc-img" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. START IN 4 EASY STEPS -->
  <section class="ctg-steps-section" id="how-it-works">
    <div class="ctg-container">
      <div class="ctg-section-header">
        <span class="ctg-badge-pill">Process &amp; Setup</span>
        <h2 class="ctg-section-title">Start in 4 Easy Steps</h2>
        <p class="ctg-section-subtitle">
          No complicated codes or technical steps. Just connect and go.
        </p>
      </div>

      <div class="ctg-steps-grid">
        <div class="ctg-step-card">
          <div class="ctg-step-number">01</div>
          <h3>Link Your Chat</h3>
          <p>Enter your Telegram account link details to connect your chat securely in one second.</p>
        </div>

        <div class="ctg-step-card">
          <div class="ctg-step-number">02</div>
          <h3>Choose Reply Words</h3>
          <p>Pick key words that customers often ask (like 'price', 'delivery') so your chat knows what to answer.</p>
        </div>

        <div class="ctg-step-card">
          <div class="ctg-step-number">03</div>
          <h3>Create Answers</h3>
          <p>Type out your answer messages and add helpful quick buttons for customers to click.</p>
        </div>

        <div class="ctg-step-card">
          <div class="ctg-step-number">04</div>
          <h3>Start Answering</h3>
          <p>Your chat assistant is ready! It will automatically reply to customer questions 24 hours a day.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. ENTERPRISE TELEGRAM CAPABILITIES -->
  <section class="ctg-capabilities-section">
    <div class="ctg-container">
      <div class="ctg-section-header">
        <span class="ctg-badge-pill">Enterprise Infrastructure</span>
        <h2 class="ctg-section-title">Built for High-Volume Telegram Channels &amp; Groups</h2>
        <p class="ctg-section-subtitle">
          Scale broadcasts to hundreds of thousands of subscribers with zero per-message fees.
        </p>
      </div>

      <div class="ctg-cap-grid">
        <div class="ctg-cap-card">
          <div class="ctg-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"/></svg>
          </div>
          <h3>Unlimited Telegram Broadcasts</h3>
          <p>Send marketing announcements, exclusive flash sales, and newsletters to unlimited channel subscribers with zero per-message fees.</p>
        </div>

        <div class="ctg-cap-card">
          <div class="ctg-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          </div>
          <h3>Interactive Inline Keyboards</h3>
          <p>Design rich multi-row button menus, external web link buttons, and dynamic callback actions that let subscribers self-serve instantly.</p>
        </div>

        <div class="ctg-cap-card">
          <div class="ctg-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
          </div>
          <h3>Keyword Auto-Responders</h3>
          <p>Set automated answers for frequently asked questions, product catalogs, service pricing, and customer onboarding triggers.</p>
        </div>

        <div class="ctg-cap-card">
          <div class="ctg-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>Group &amp; Channel Moderation</h3>
          <p>Automatically welcome new community members, prevent spam links, and maintain clean discussion spaces across multiple groups.</p>
        </div>

        <div class="ctg-cap-card">
          <div class="ctg-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          </div>
          <h3>Multi-Agent Shared Inbox</h3>
          <p>Assign customer inquiries across support reps, tag conversations, add internal notes, and maintain response speed metrics.</p>
        </div>

        <div class="ctg-cap-card">
          <div class="ctg-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <h3>CRM &amp; Webhook Integration</h3>
          <p>Stream Telegram leads and customer profiles into HubSpot, Zoho, Google Sheets, or custom backend endpoints via instant webhooks.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. BOTFATHER QUICK SETUP GUIDE -->
  <section class="ctg-guide-section">
    <div class="ctg-container">
      <div class="ctg-section-header">
        <span class="ctg-badge-pill">Quick Guide</span>
        <h2 class="ctg-section-title">How to Create Your Telegram Bot in 2 Minutes</h2>
        <p class="ctg-section-subtitle">
          Follow these 3 simple steps to generate your free Bot token from Telegram.
        </p>
      </div>

      <div class="ctg-guide-grid">
        <div class="ctg-guide-card">
          <div class="ctg-guide-num">1</div>
          <h3>Message @BotFather</h3>
          <p>Open Telegram, search for the verified <span class="ctg-code-box">@BotFather</span> bot, and press Start or send the command:</p>
          <div class="ctg-code-box">/newbot</div>
        </div>

        <div class="ctg-guide-card">
          <div class="ctg-guide-num">2</div>
          <h3>Name Your Bot</h3>
          <p>Give your bot a friendly display name (e.g. <em>Acme Support</em>) and a unique username ending in 'bot' (e.g. <em>acme_support_bot</em>).</p>
          <div class="ctg-code-box">mybrand_assistant_bot</div>
        </div>

        <div class="ctg-guide-card">
          <div class="ctg-guide-num">3</div>
          <h3>Paste Token in InboxWa</h3>
          <p>BotFather will reply with your HTTP API token. Copy this key, paste it into your InboxWa Channel Settings, and your bot is live!</p>
          <div class="ctg-code-box">123456789:ABCdefGhIJKlmNoPQR...</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. FREQUENTLY ASKED QUESTIONS -->
  <section class="ctg-faq-section">
    <div class="ctg-container">
      <div class="ctg-section-header">
        <span class="ctg-badge-pill">FAQ</span>
        <h2 class="ctg-section-title">Frequently Asked Questions</h2>
        <p class="ctg-section-subtitle">
          Everything you need to know about Telegram automation with InboxWa.
        </p>
      </div>

      <div class="ctg-faq-list">
        <div class="ctg-faq-item active">
          <button type="button" class="ctg-faq-trigger">
            <span>How does InboxWa connect to my Telegram channel or bot?</span>
            <span class="ctg-faq-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </button>
          <div class="ctg-faq-content">
            InboxWa connects using the official Telegram Bot API. Simply generate a bot token from @BotFather in Telegram and paste it into InboxWa. The connection is established instantly via secure webhooks without requiring any hosting or server configuration.
          </div>
        </div>

        <div class="ctg-faq-item">
          <button type="button" class="ctg-faq-trigger">
            <span>Are there any per-message fees for Telegram broadcasts?</span>
            <span class="ctg-faq-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </button>
          <div class="ctg-faq-content">
            No! Unlike WhatsApp or SMS, Telegram does not charge any per-message conversation fees. You can broadcast unlimited promotional messages, updates, and catalogs to your channel subscribers completely free of network charges.
          </div>
        </div>

        <div class="ctg-faq-item">
          <button type="button" class="ctg-faq-trigger">
            <span>Can multiple team members manage the same Telegram account?</span>
            <span class="ctg-faq-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </button>
          <div class="ctg-faq-content">
            Yes. With InboxWa's Multi-Agent Shared Inbox, your entire sales and support team can log into one unified dashboard, assign chats to specific agents, add internal collaboration notes, and respond concurrently.
          </div>
        </div>

        <div class="ctg-faq-item">
          <button type="button" class="ctg-faq-trigger">
            <span>Can I manage Telegram alongside WhatsApp and Instagram?</span>
            <span class="ctg-faq-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </button>
          <div class="ctg-faq-content">
            Yes! InboxWa provides an omnichannel workspace where you can connect WhatsApp, Instagram, Facebook Messenger, and Telegram under one shared dashboard. Your agents can switch between channels seamlessly.
          </div>
        </div>

        <div class="ctg-faq-item">
          <button type="button" class="ctg-faq-trigger">
            <span>Does InboxWa support Telegram group moderation?</span>
            <span class="ctg-faq-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </span>
          </button>
          <div class="ctg-faq-content">
            Yes. You can add your bot as an administrator in your Telegram groups to send automated welcome messages, filter spam links, enforce community guidelines, and reply to member questions.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. SALES CTA BANNER -->
  <section class="ctg-sales-section">
    <div class="ctg-cta-banner">
      <h2 class="ctg-cta-title">Automate Your Telegram Chat Today</h2>
      <p class="ctg-cta-subtitle">
        Connect your account in seconds, write easy reply buttons, set up key word detection, and view all chats in real-time.
      </p>
      <div class="ctg-cta-actions">
        <a href="<?php echo $bp; ?>auth/register" class="ctg-btn-white">
          Start Free Trial &rarr;
        </a>
        <button type="button" class="ctg-btn-secondary btn-demo-open" style="background:rgba(255,255,255,0.15);color:#ffffff;border-color:rgba(255,255,255,0.3);">
          Book Telegram Demo
        </button>
      </div>
      <div class="ctg-cta-trust">
        Free 14-day trial &bull; No credit card required &bull; 2-minute setup
      </div>
    </div>
  </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // FAQ accordion
  const faqItems = document.querySelectorAll('.ctg-faq-item');
  faqItems.forEach(item => {
    const trigger = item.querySelector('.ctg-faq-trigger');
    trigger.addEventListener('click', () => {
      const isActive = item.classList.contains('active');
      faqItems.forEach(i => i.classList.remove('active'));
      if (!isActive) item.classList.add('active');
    });
  });
});
</script>

<?php
include __DIR__ . '/../../includes/offer-popup.php';
include __DIR__ . '/../../includes/callback-popup.php';
include __DIR__ . '/../../includes/footer.php';
?>
