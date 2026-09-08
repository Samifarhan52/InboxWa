<?php
$basePath = '../../../';
$bp = '../../../';
require_once __DIR__ . '/../../../config/cms.php';

$pageTitle = 'Instagram DM Automation & Comment-to-DM Platform | InboxWa';
$pageDescription = 'Automate Instagram Direct Messages, auto-reply to Post & Reel comments, capture leads, and scale customer support with official Meta API compliance.';
$canonicalUrl = 'https://inboxwa.com/channel/instagram/';
$ogImage = 'assets/images/channel/instagram/hero.png';

include __DIR__ . '/../../../includes/header.php';
?>

<style>
  :root {
    --ig-pink: #ec4899;
    --ig-purple: #8b5cf6;
    --ig-orange: #f97316;
    --ig-gradient: linear-gradient(135deg, #f97316 0%, #ec4899 50%, #8b5cf6 100%);
    --ig-gradient-subtle: linear-gradient(135deg, rgba(249, 115, 22, 0.08) 0%, rgba(236, 72, 153, 0.08) 50%, rgba(139, 92, 246, 0.08) 100%);
  }

  .cig-page {
    background: #ffffff;
    color: #1e293b;
    font-family: inherit;
    overflow-x: hidden;
    width: 100%;
    max-width: 100vw;
    box-sizing: border-box;
  }

  /* Breadcrumb */
  .cig-breadcrumb {
    padding: calc(var(--nav, 72px) + 1.25rem) 1.5rem 0.5rem;
    max-width: 1200px;
    margin: 0 auto;
    font-size: 0.85rem;
    color: #64748b;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }
  .cig-breadcrumb a {
    color: #64748b;
    text-decoration: none;
    transition: color 0.15s;
  }
  .cig-breadcrumb a:hover {
    color: var(--ig-pink);
  }

  /* Hero Section */
  .cig-hero-section {
    padding: 2.5rem 1.5rem 4.5rem;
    max-width: 1200px;
    width: 100%;
    margin: 0 auto;
    box-sizing: border-box;
  }
  .cig-hero-grid {
    display: grid;
    grid-template-columns: 1.15fr 0.85fr;
    gap: 3.5rem;
    align-items: center;
  }
  .cig-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(236, 72, 153, 0.1);
    border: 1px solid rgba(236, 72, 153, 0.25);
    color: #db2777;
    font-size: 0.82rem;
    font-weight: 700;
    padding: 0.35rem 0.85rem;
    border-radius: 999px;
    margin-bottom: 1.25rem;
  }
  .cig-badge-pill svg {
    width: 14px;
    height: 14px;
  }
  .cig-hero-title {
    font-size: clamp(2.25rem, 4.5vw, 3.5rem);
    font-weight: 800;
    line-height: 1.15;
    color: #0f172a;
    letter-spacing: -0.02em;
    margin-bottom: 1.25rem;
  }
  .cig-hero-title .highlight-ig {
    background: var(--ig-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .cig-hero-desc {
    font-size: 1.15rem;
    line-height: 1.65;
    color: #475569;
    margin-bottom: 2rem;
    max-width: 540px;
  }
  .cig-hero-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 2rem;
  }
  .cig-btn-primary {
    background: var(--ig-gradient);
    color: #ffffff;
    font-weight: 700;
    font-size: 1rem;
    padding: 0.85rem 1.85rem;
    border-radius: 999px;
    text-decoration: none;
    box-shadow: 0 10px 25px -5px rgba(236, 72, 153, 0.4);
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    border: none;
    cursor: pointer;
  }
  .cig-btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 30px -5px rgba(236, 72, 153, 0.55);
    color: #ffffff;
  }
  .cig-btn-secondary {
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
  .cig-btn-secondary:hover {
    background: #f8fafc;
    border-color: #94a3b8;
    color: #0f172a;
    transform: translateY(-2px);
  }
  .cig-trust-row {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    flex-wrap: wrap;
    font-size: 0.85rem;
    font-weight: 600;
    color: #64748b;
  }
  .cig-trust-item {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
  }
  .cig-trust-item svg {
    color: #10b981;
  }
  .cig-hero-visual {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .cig-hero-img-wrap {
    position: relative;
    width: 100%;
    max-width: 520px;
    border-radius: 28px;
    overflow: hidden;
    box-shadow: 0 25px 50px -12px rgba(15, 23, 42, 0.15), 0 0 0 1px rgba(236, 72, 153, 0.15);
    background: #ffffff;
  }
  .cig-hero-img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
  }

  /* Interactive Trigger Simulator Section */
  .cig-simulator-section {
    padding: 5rem 1.5rem;
    background: #f8fafc;
    border-top: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
  }
  .cig-container {
    max-width: 1200px;
    margin: 0 auto;
    width: 100%;
  }
  .cig-section-header {
    text-align: center;
    max-width: 760px;
    margin: 0 auto 3.5rem;
  }
  .cig-section-title {
    font-size: clamp(1.85rem, 3.5vw, 2.75rem);
    font-weight: 800;
    color: #0f172a;
    letter-spacing: -0.02em;
    margin-top: 0.75rem;
    margin-bottom: 1rem;
    line-height: 1.2;
  }
  .cig-section-subtitle {
    font-size: 1.08rem;
    line-height: 1.6;
    color: #64748b;
  }
  .cig-sim-box {
    background: #ffffff;
    border-radius: 24px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.07);
    padding: 2.5rem;
  }
  .cig-sim-controls {
    margin-bottom: 2.5rem;
    background: #f1f5f9;
    border-radius: 18px;
    padding: 1.25rem 1.5rem;
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }
  .cig-sim-input-row {
    display: flex;
    gap: 0.75rem;
    flex-wrap: wrap;
  }
  .cig-sim-input-wrap {
    flex: 1;
    min-width: 240px;
    position: relative;
  }
  .cig-sim-input-wrap input {
    width: 100%;
    padding: 0.85rem 1rem 0.85rem 2.5rem;
    border-radius: 12px;
    border: 1.5px solid #cbd5e1;
    font-size: 0.95rem;
    font-weight: 600;
    color: #0f172a;
    background: #ffffff;
    box-sizing: border-box;
    transition: all 0.2s ease;
    text-transform: uppercase;
  }
  .cig-sim-input-wrap input:focus {
    outline: none;
    border-color: #ec4899;
    box-shadow: 0 0 0 3px rgba(236, 72, 153, 0.15);
  }
  .cig-sim-input-icon {
    position: absolute;
    left: 0.85rem;
    top: 50%;
    transform: translateY(-50%);
    color: #94a3b8;
  }
  .cig-sim-run-btn {
    background: var(--ig-gradient);
    color: #ffffff;
    font-weight: 700;
    font-size: 0.95rem;
    padding: 0.85rem 1.85rem;
    border-radius: 12px;
    border: none;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    box-shadow: 0 4px 12px rgba(236, 72, 153, 0.3);
    transition: all 0.2s ease;
  }
  .cig-sim-run-btn:hover {
    opacity: 0.95;
    transform: translateY(-1px);
    box-shadow: 0 6px 16px rgba(236, 72, 153, 0.4);
  }
  .cig-sim-chips {
    display: flex;
    align-items: center;
    gap: 0.6rem;
    flex-wrap: wrap;
    font-size: 0.82rem;
    color: #64748b;
    font-weight: 600;
  }
  .cig-chip {
    background: #ffffff;
    border: 1px solid #cbd5e1;
    color: #334155;
    font-size: 0.78rem;
    font-weight: 700;
    padding: 0.35rem 0.75rem;
    border-radius: 999px;
    cursor: pointer;
    transition: all 0.15s ease;
  }
  .cig-chip:hover, .cig-chip.active {
    background: #ec4899;
    color: #ffffff;
    border-color: #ec4899;
  }
  .cig-sim-grid {
    display: grid;
    grid-template-columns: 1.15fr 0.85fr;
    gap: 2.5rem;
    align-items: flex-start;
  }
  .cig-flow-col {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
  }
  .cig-flow-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 1.35rem 1.5rem;
    display: flex;
    gap: 1.25rem;
    position: relative;
    transition: all 0.25s ease;
  }
  .cig-flow-card.active {
    border-color: #ec4899;
    box-shadow: 0 8px 25px -5px rgba(236, 72, 153, 0.15);
    background: #fff5f8;
  }
  .cig-flow-num {
    width: 38px;
    height: 38px;
    border-radius: 12px;
    background: #f1f5f9;
    color: #475569;
    font-weight: 800;
    font-size: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.25s;
  }
  .cig-flow-card.active .cig-flow-num {
    background: var(--ig-gradient);
    color: #ffffff;
  }
  .cig-flow-body h4 {
    margin: 0 0 0.35rem;
    font-size: 1.05rem;
    font-weight: 700;
    color: #0f172a;
  }
  .cig-flow-body p {
    margin: 0;
    font-size: 0.9rem;
    color: #64748b;
    line-height: 1.5;
  }
  .cig-flow-badge {
    display: inline-block;
    margin-top: 0.5rem;
    background: #f1f5f9;
    color: #0284c7;
    font-size: 0.75rem;
    font-weight: 700;
    padding: 0.25rem 0.65rem;
    border-radius: 6px;
  }

  /* Mock Instagram Phone */
  .cig-sim-phone {
    background: #000000;
    border-radius: 36px;
    padding: 12px;
    box-shadow: 0 25px 60px -15px rgba(15, 23, 42, 0.25);
    border: 3px solid #1e293b;
    position: relative;
    max-width: 340px;
    margin: 0 auto;
    width: 100%;
  }
  .cig-sim-notch {
    width: 80px;
    height: 16px;
    background: #1e293b;
    border-radius: 0 0 12px 12px;
    margin: 0 auto 8px;
  }
  .cig-sim-screen {
    background: #0f111a;
    border-radius: 24px;
    overflow: hidden;
    height: 480px;
    display: flex;
    flex-direction: column;
    color: #ffffff;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
  }
  .cig-sim-header {
    background: #161926;
    padding: 10px 14px;
    display: flex;
    align-items: center;
    gap: 10px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  }
  .cig-sim-avatar {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    background: var(--ig-gradient);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 13px;
    color: #fff;
    flex-shrink: 0;
  }
  .cig-sim-header-info {
    flex: 1;
    min-width: 0;
  }
  .cig-sim-name {
    font-size: 0.88rem;
    font-weight: 700;
    color: #ffffff;
    display: flex;
    align-items: center;
    gap: 4px;
  }
  .cig-sim-badge {
    color: #38bdf8;
  }
  .cig-sim-status {
    font-size: 0.7rem;
    color: #94a3b8;
  }
  .cig-sim-chat {
    flex: 1;
    padding: 14px;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    gap: 10px;
    background: #0a0c14;
  }
  .cig-sim-msg {
    max-width: 85%;
    padding: 9px 13px;
    border-radius: 18px;
    font-size: 0.82rem;
    line-height: 1.45;
    position: relative;
    word-break: break-word;
  }
  .cig-sim-msg.user {
    background: #27272a;
    color: #f4f4f5;
    align-self: flex-start;
    border-bottom-left-radius: 4px;
  }
  .cig-sim-msg.bot {
    background: var(--ig-gradient);
    color: #ffffff;
    align-self: flex-end;
    border-bottom-right-radius: 4px;
  }
  .cig-sim-msg.public-reply {
    background: rgba(236, 72, 153, 0.15);
    border: 1px dashed rgba(236, 72, 153, 0.4);
    color: #f472b6;
    align-self: center;
    font-size: 0.74rem;
    border-radius: 10px;
    text-align: center;
    padding: 6px 10px;
  }
  .cig-sim-btn {
    display: block;
    background: rgba(255, 255, 255, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.4);
    color: #ffffff;
    border-radius: 999px;
    padding: 6px 12px;
    font-size: 0.75rem;
    font-weight: 700;
    text-align: center;
    margin-top: 6px;
    text-decoration: none;
  }
  .cig-sim-typing {
    display: flex;
    gap: 4px;
    align-items: center;
    padding: 10px 14px;
    background: #27272a;
    border-radius: 16px;
    align-self: flex-end;
  }
  .cig-sim-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #94a3b8;
    animation: cigDotPulse 1.4s infinite ease-in-out;
  }
  .cig-sim-dot:nth-child(2) { animation-delay: 0.2s; }
  .cig-sim-dot:nth-child(3) { animation-delay: 0.4s; }
  @keyframes cigDotPulse {
    0%, 60%, 100% { transform: translateY(0); opacity: 0.4; }
    30% { transform: translateY(-4px); opacity: 1; }
  }

  /* 4 Showcase Feature Cards */
  .cig-showcases-section {
    padding: 6rem 1.5rem;
    background: #ffffff;
  }
  .cig-showcases-list {
    display: flex;
    flex-direction: column;
    gap: 5rem;
  }
  .cig-showcase-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
  }
  .cig-showcase-row.reversed {
    grid-template-columns: 1fr 1fr;
  }
  .cig-showcase-row.reversed .cig-sc-text {
    order: 2;
  }
  .cig-showcase-row.reversed .cig-sc-visual {
    order: 1;
  }
  .cig-sc-tag {
    display: inline-block;
    background: rgba(236, 72, 153, 0.1);
    color: #db2777;
    font-size: 0.78rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    padding: 0.3rem 0.8rem;
    border-radius: 999px;
    margin-bottom: 1rem;
  }
  .cig-sc-title {
    font-size: clamp(1.85rem, 3vw, 2.5rem);
    font-weight: 800;
    line-height: 1.2;
    color: #0f172a;
    letter-spacing: -0.02em;
    margin-bottom: 1.25rem;
  }
  .cig-sc-desc {
    font-size: 1.08rem;
    line-height: 1.7;
    color: #475569;
    margin-bottom: 1.75rem;
  }
  .cig-sc-bullets {
    list-style: none;
    padding: 0;
    margin: 0 0 2rem;
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
  }
  .cig-sc-bullet {
    display: flex;
    align-items: center;
    gap: 0.65rem;
    font-size: 0.95rem;
    font-weight: 600;
    color: #1e293b;
  }
  .cig-sc-bullet svg {
    color: #ec4899;
    flex-shrink: 0;
  }
  .cig-sc-visual {
    position: relative;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 20px 45px -10px rgba(15, 23, 42, 0.12), 0 0 0 1px rgba(226, 232, 240, 0.8);
    background: #ffffff;
    transition: transform 0.3s ease;
  }
  .cig-sc-visual:hover {
    transform: translateY(-4px);
  }
  .cig-sc-img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
  }

  /* 4 Steps How It Works Section */
  .cig-steps-section {
    padding: 5.5rem 1.5rem;
    background: #0f172a;
    color: #ffffff;
  }
  .cig-steps-section .cig-section-title {
    color: #ffffff;
  }
  .cig-steps-section .cig-section-subtitle {
    color: #94a3b8;
  }
  .cig-steps-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
    margin-top: 3.5rem;
  }
  .cig-step-card {
    background: #1e293b;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 20px;
    padding: 2rem 1.5rem;
    display: flex;
    flex-direction: column;
    position: relative;
    transition: all 0.25s ease;
  }
  .cig-step-card:hover {
    transform: translateY(-4px);
    border-color: rgba(236, 72, 153, 0.4);
    box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.5);
  }
  .cig-step-number {
    font-size: 2.25rem;
    font-weight: 900;
    line-height: 1;
    background: var(--ig-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 1.25rem;
  }
  .cig-step-card h3 {
    font-size: 1.2rem;
    font-weight: 700;
    color: #ffffff;
    margin: 0 0 0.6rem;
  }
  .cig-step-card p {
    margin: 0;
    font-size: 0.9rem;
    line-height: 1.6;
    color: #94a3b8;
  }

  /* Existing Core Capabilities Grid (Retained) */
  .cig-capabilities-section {
    padding: 5.5rem 1.5rem;
    background: #f8fafc;
  }
  .cig-cap-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.75rem;
    margin-top: 3rem;
  }
  .cig-cap-card {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    padding: 2rem;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
    transition: all 0.25s ease;
  }
  .cig-cap-card:hover {
    transform: translateY(-3px);
    border-color: #ec4899;
    box-shadow: 0 12px 24px -6px rgba(236, 72, 153, 0.12);
  }
  .cig-cap-icon {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    background: var(--ig-gradient-subtle);
    color: #ec4899;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.25rem;
  }
  .cig-cap-icon svg {
    width: 24px;
    height: 24px;
  }
  .cig-cap-card h3 {
    font-size: 1.15rem;
    font-weight: 700;
    color: #0f172a;
    margin: 0 0 0.5rem;
  }
  .cig-cap-card p {
    font-size: 0.92rem;
    color: #64748b;
    line-height: 1.6;
    margin: 0;
  }

  /* FAQs Section */
  .cig-faq-section {
    padding: 5rem 1.5rem;
    max-width: 860px;
    margin: 0 auto;
  }
  .cig-faq-item {
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    margin-bottom: 1rem;
    overflow: hidden;
    transition: all 0.2s ease;
  }
  .cig-faq-item.active {
    border-color: #ec4899;
    box-shadow: 0 4px 12px rgba(236, 72, 153, 0.08);
  }
  .cig-faq-trigger {
    width: 100%;
    text-align: left;
    padding: 1.25rem 1.5rem;
    background: #ffffff;
    border: none;
    font-size: 1.05rem;
    font-weight: 700;
    color: #0f172a;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
  }
  .cig-faq-icon {
    font-size: 1.25rem;
    font-weight: 400;
    color: #64748b;
    transition: transform 0.2s ease;
  }
  .cig-faq-item.active .cig-faq-icon {
    transform: rotate(45deg);
    color: #ec4899;
  }
  .cig-faq-content {
    display: none;
    padding: 0 1.5rem 1.25rem;
    font-size: 0.95rem;
    line-height: 1.6;
    color: #475569;
    background: #ffffff;
  }
  .cig-faq-item.active .cig-faq-content {
    display: block;
  }

  /* Bottom Sales CTA Banner */
  .cig-cta-banner {
    padding: 5rem 1.5rem;
    background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%);
    color: #ffffff;
    text-align: center;
    position: relative;
    overflow: hidden;
  }
  .cig-cta-banner::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -20%;
    width: 140%;
    height: 200%;
    background: radial-gradient(circle at 50% 50%, rgba(236, 72, 153, 0.15) 0%, transparent 60%);
    pointer-events: none;
  }
  .cig-cta-title {
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 800;
    letter-spacing: -0.02em;
    margin-bottom: 1rem;
    color: #ffffff;
  }
  .cig-cta-subtitle {
    font-size: 1.15rem;
    color: #cbd5e1;
    max-width: 620px;
    margin: 0 auto 2.5rem;
    line-height: 1.6;
  }
  .cig-cta-actions {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 2rem;
  }
  .cig-btn-white {
    background: #ffffff;
    color: #0f172a;
    font-weight: 700;
    font-size: 1rem;
    padding: 0.85rem 2rem;
    border-radius: 999px;
    text-decoration: none;
    transition: all 0.2s ease;
    border: none;
    cursor: pointer;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
  }
  .cig-btn-white:hover {
    background: #f8fafc;
    transform: translateY(-2px);
    color: #0f172a;
  }
  .cig-cta-trust {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1.5rem;
    font-size: 0.85rem;
    font-weight: 600;
    color: #94a3b8;
    flex-wrap: wrap;
  }

  /* Responsive Adjustments */
  @media (max-width: 1024px) {
    .cig-hero-grid, .cig-sim-grid, .cig-showcase-row, .cig-showcase-row.reversed {
      grid-template-columns: 1fr;
      gap: 2.5rem;
    }
    .cig-showcase-row.reversed .cig-sc-text, .cig-showcase-row.reversed .cig-sc-visual {
      order: unset;
    }
    .cig-cap-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    .cig-steps-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }
  @media (max-width: 640px) {
    .cig-cap-grid, .cig-steps-grid {
      grid-template-columns: 1fr;
    }
    .cig-sim-box {
      padding: 1.5rem;
    }
    .cig-sim-controls {
      padding: 1rem;
    }
  }
</style>

<div class="cig-page">

  <!-- Breadcrumb -->
  <nav class="cig-breadcrumb" aria-label="Breadcrumb">
    <a href="<?php echo $bp; ?>">Home</a>
    <span>/</span>
    <a href="<?php echo $bp; ?>channels/">Channels</a>
    <span>/</span>
    <span style="color: #0f172a; font-weight: 600;">Instagram</span>
  </nav>

  <!-- Hero Section -->
  <section class="cig-hero-section">
    <div class="cig-hero-grid">
      <div class="cig-hero-content">
        <span class="cig-badge-pill">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          Official Instagram Connection
        </span>
        <h1 class="cig-hero-title">
          Turn <span class="highlight-ig">Instagram</span> Comments into Direct DM Sales
        </h1>
        <p class="cig-hero-desc">
          Send automated discount codes, product catalogs, or instant replies to customer messages the second they comment on your posts or reels.
        </p>
        <div class="cig-hero-actions">
          <a href="<?php echo $bp; ?>auth/register" class="cig-btn-primary">
            Connect Your Account
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="#interactive-demo" class="cig-btn-secondary">
            Watch Interactive Demo
          </a>
        </div>
        <div class="cig-trust-row">
          <span class="cig-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
            Safe Official Connection
          </span>
          <span class="cig-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
            Auto-like comments
          </span>
          <span class="cig-trust-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
            Sets up in 5 minutes
          </span>
        </div>
      </div>

      <div class="cig-hero-visual">
        <div class="cig-hero-img-wrap">
          <img src="<?php echo $bp; ?>assets/images/channel/instagram/hero.png" alt="InboxWa Instagram DM Automation" class="cig-hero-img" loading="eager">
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive Trigger Simulator Widget -->
  <section class="cig-simulator-section" id="interactive-demo">
    <div class="cig-container">
      <div class="cig-section-header">
        <span class="cig-badge-pill">Interactive Trigger Demo</span>
        <h2 class="cig-section-title">Test Our Comment-to-DM Flow Live</h2>
        <p class="cig-section-subtitle">
          Type your custom trigger word below, press simulate, and watch the mock Instagram direct message interface respond instantly on the phone screen!
        </p>
      </div>

      <div class="cig-sim-box">
        <div class="cig-sim-controls">
          <div class="cig-sim-input-row">
            <div class="cig-sim-input-wrap">
              <svg class="cig-sim-input-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
              <input type="text" id="cigTriggerInput" value="VOUCHER" placeholder="ENTER TRIGGER WORD (E.G. VOUCHER, PRICE)">
            </div>
            <button type="button" id="cigSimulateBtn" class="cig-sim-run-btn">
              <span>Simulate DM</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>
          </div>
          <div class="cig-sim-chips">
            <span>Quick Keywords:</span>
            <button type="button" class="cig-chip active" data-keyword="VOUCHER">VOUCHER</button>
            <button type="button" class="cig-chip" data-keyword="CATALOG">CATALOG</button>
            <button type="button" class="cig-chip" data-keyword="PRICE">PRICE</button>
            <button type="button" class="cig-chip" data-keyword="INFO">INFO</button>
          </div>
        </div>

        <div class="cig-sim-grid">
          <!-- Flow Diagram -->
          <div class="cig-flow-col">
            <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem;">Automation Workflow Diagram</h3>

            <div class="cig-flow-card active" id="cigFlowStep1">
              <div class="cig-flow-num">1</div>
              <div class="cig-flow-body">
                <h4>Comment Trigger Detected</h4>
                <p>Listens to public comments. Triggers when a user leaves a comment containing your keyword.</p>
                <span class="cig-flow-badge" id="cigFlowBadgeKeyword">Waiting for trigger: "VOUCHER"</span>
              </div>
            </div>

            <div class="cig-flow-card" id="cigFlowStep2">
              <div class="cig-flow-num">2</div>
              <div class="cig-flow-body">
                <h4>Public Auto-Response</h4>
                <p>Instantly posts a public reply to the comment to boost engagement and direct them to checkout.</p>
              </div>
            </div>

            <div class="cig-flow-card" id="cigFlowStep3">
              <div class="cig-flow-num">3</div>
              <div class="cig-flow-body">
                <h4>Private DM Delivered</h4>
                <p>Sends the discount voucher, brochure, or shop link directly to their private Instagram inbox.</p>
              </div>
            </div>
          </div>

          <!-- Simulated Phone -->
          <div class="cig-sim-phone">
            <div class="cig-sim-notch"></div>
            <div class="cig-sim-screen">
              <div class="cig-sim-header">
                <div class="cig-sim-avatar">IW</div>
                <div class="cig-sim-header-info">
                  <div class="cig-sim-name">
                    inbox_wa
                    <svg class="cig-sim-badge" width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                  </div>
                  <div class="cig-sim-status">Active now • Official Business</div>
                </div>
              </div>
              <div class="cig-sim-chat" id="cigChatWindow">
                <div class="cig-sim-msg user">
                  Just left a comment "<strong>VOUCHER</strong>" on your latest Reel! 🔥
                </div>
                <div class="cig-sim-msg public-reply">
                  💬 Public Reply: @user Sent you the code in DM! Check inbox 📥
                </div>
                <div class="cig-sim-msg bot">
                  Hey there! 🎉 Thank you for commenting! Here is your exclusive 20% OFF discount coupon:<br><br>
                  <strong style="font-size: 0.95rem; background: rgba(0,0,0,0.25); padding: 2px 8px; border-radius: 4px; display: inline-block;">INBOX20</strong><br><br>
                  Valid for 24 hours on all collections.
                  <a href="#" class="cig-sim-btn">Claim 20% Discount ↗</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4 Showcase Feature Cards -->
  <section class="cig-showcases-section">
    <div class="cig-container">
      <div class="cig-section-header">
        <span class="cig-badge-pill">Features</span>
        <h2 class="cig-section-title">Grow Your Brand on Instagram Automatically</h2>
        <p class="cig-section-subtitle">
          Here is everything you can set up to manage your customer conversations and ads in one place.
        </p>
      </div>

      <div class="cig-showcases-list">
        <!-- Feature 1: Ask Followers -->
        <div class="cig-showcase-row">
          <div class="cig-sc-text">
            <span class="cig-sc-tag">Grow Followers</span>
            <h3 class="cig-sc-title">Ask Followers to Follow You</h3>
            <p class="cig-sc-desc">
              Automatically prompt new commenters and DM senders to follow your account. Turn every interaction into a follower with a smart, polite follow request sent instantly.
            </p>
            <ul class="cig-sc-bullets">
              <li class="cig-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Double follower conversion from organic viral reels
              </li>
              <li class="cig-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Check follow status in real-time before sending exclusive incentives
              </li>
              <li class="cig-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Fully compliant with Instagram platform guidelines
              </li>
            </ul>
            <a href="<?php echo $bp; ?>auth/register" class="cig-btn-primary">Get Started Free</a>
          </div>
          <div class="cig-sc-visual">
            <img src="<?php echo $bp; ?>assets/images/channel/instagram/ask-followers.png" alt="Ask Followers to Follow You" class="cig-sc-img" loading="lazy">
          </div>
        </div>

        <!-- Feature 2: Auto Like Comments (Reversed) -->
        <div class="cig-showcase-row reversed">
          <div class="cig-sc-text">
            <span class="cig-sc-tag">Boost Engagement</span>
            <h3 class="cig-sc-title">Auto Like Comments</h3>
            <p class="cig-sc-desc">
              Show every commenter that you appreciate them. Our system automatically likes comments on your posts and Reels the moment they are posted, keeping your audience engaged.
            </p>
            <ul class="cig-sc-bullets">
              <li class="cig-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Signals positive activity to the Instagram algorithmic feed
              </li>
              <li class="cig-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Instant acknowledgement builds strong customer loyalty
              </li>
              <li class="cig-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Set custom timing delays or instant reaction modes
              </li>
            </ul>
            <a href="<?php echo $bp; ?>auth/register" class="cig-btn-primary">Boost Engagement Now</a>
          </div>
          <div class="cig-sc-visual">
            <img src="<?php echo $bp; ?>assets/images/channel/instagram/auto-like.png" alt="Auto Like Instagram Comments" class="cig-sc-img" loading="lazy">
          </div>
        </div>

        <!-- Feature 3: Hide Hate Comments -->
        <div class="cig-showcase-row">
          <div class="cig-sc-text">
            <span class="cig-sc-tag">Safe & Clean</span>
            <h3 class="cig-sc-title">Hide Hate Comments Automatically</h3>
            <p class="cig-sc-desc">
              Protect your brand reputation. Automatically detect and hide offensive, hateful, or spam comments before your audience sees them, keeping your community positive.
            </p>
            <ul class="cig-sc-bullets">
              <li class="cig-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Auto-hide profanity, competitor promotion links, and spam bots
              </li>
              <li class="cig-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Custom blocklist keywords tailored to your specific industry
              </li>
              <li class="cig-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Maintains clean ad comments to lower customer acquisition costs
              </li>
            </ul>
            <a href="<?php echo $bp; ?>auth/register" class="cig-btn-primary">Protect Your Brand</a>
          </div>
          <div class="cig-sc-visual">
            <img src="<?php echo $bp; ?>assets/images/channel/instagram/hide-hate.png" alt="Hide Hate Comments Automatically" class="cig-sc-img" loading="lazy">
          </div>
        </div>

        <!-- Feature 4: Smart AI Bot (Reversed) -->
        <div class="cig-showcase-row reversed">
          <div class="cig-sc-text">
            <span class="cig-sc-tag">AI Support</span>
            <h3 class="cig-sc-title">24/7 Smart AI Chatbot</h3>
            <p class="cig-sc-desc">
              Train an AI helper on your website links or business details. It will answer customer questions about pricing and product availability around the clock.
            </p>
            <ul class="cig-sc-bullets">
              <li class="cig-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Trained on your knowledge base, FAQs, and product catalog
              </li>
              <li class="cig-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Seamless handover to human agents on live chat when needed
              </li>
              <li class="cig-sc-bullet">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                Zero latency response ensures you never lose a hot lead
              </li>
            </ul>
            <a href="<?php echo $bp; ?>auth/register" class="cig-btn-primary">Deploy AI Chatbot</a>
          </div>
          <div class="cig-sc-visual">
            <img src="<?php echo $bp; ?>assets/images/channel/instagram/smart-ai-bot.png" alt="24/7 Smart AI Chatbot" class="cig-sc-img" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4 Steps How It Works Section -->
  <section class="cig-steps-section" id="how-it-works">
    <div class="cig-container">
      <div class="cig-section-header">
        <span class="cig-badge-pill" style="background: rgba(255,255,255,0.1); color: #f472b6; border-color: rgba(255,255,255,0.2);">How It Works</span>
        <h2 class="cig-section-title">Start in 4 Easy Steps</h2>
        <p class="cig-section-subtitle">Setting up your official Instagram assistant takes less than 10 minutes.</p>
      </div>

      <div class="cig-steps-grid">
        <div class="cig-step-card">
          <div class="cig-step-number">01</div>
          <h3>Connect Account</h3>
          <p>Link your business Instagram account in 1-click through official Meta authentication.</p>
        </div>

        <div class="cig-step-card">
          <div class="cig-step-number">02</div>
          <h3>Set Keywords</h3>
          <p>Define what words trigger comment replies and direct message sequences.</p>
        </div>

        <div class="cig-step-card">
          <div class="cig-step-number">03</div>
          <h3>Write DM Templates</h3>
          <p>Draft the automated message customers will get in their DMs with buttons and links.</p>
        </div>

        <div class="cig-step-card">
          <div class="cig-step-number">04</div>
          <h3>Activate Flow</h3>
          <p>Go live and watch comment-to-DM triggers scale automatically around the clock.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Retained Core Capabilities Grid -->
  <section class="cig-capabilities-section">
    <div class="cig-container">
      <div class="cig-section-header">
        <span class="cig-badge-pill">Enterprise Capabilities</span>
        <h2 class="cig-section-title">Complete Instagram Growth Suite</h2>
        <p class="cig-section-subtitle">Everything you need to convert followers into revenue with official Meta API compliance.</p>
      </div>

      <div class="cig-cap-grid">
        <div class="cig-cap-card">
          <div class="cig-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          </div>
          <h3>Reels & Post Comment-to-DM</h3>
          <p>Deliver instant links, guides, and coupons the second a buyer comments any keyword on your posts or viral Reels.</p>
        </div>

        <div class="cig-cap-card">
          <div class="cig-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polygon points="12 8 8 12 12 16 12 8"/></svg>
          </div>
          <h3>Story Mention Auto-Thank</h3>
          <p>When someone tags your brand in their Story, immediately send a personalized DM with a surprise discount code.</p>
        </div>

        <div class="cig-cap-card">
          <div class="cig-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>100% Meta Graph Compliance</h3>
          <p>Operate completely within official Instagram Business API limits. Zero shadowban risk and 99.9% uptime SLA.</p>
        </div>

        <div class="cig-cap-card">
          <div class="cig-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
          </div>
          <h3>Unified Multi-Channel Inbox</h3>
          <p>Manage Instagram DMs, WhatsApp messages, and Facebook chats in one single unified team inbox.</p>
        </div>

        <div class="cig-cap-card">
          <div class="cig-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>CRM & Contact Segmentation</h3>
          <p>Automatically extract commenter phone numbers and emails directly into your InboxWa CRM database.</p>
        </div>

        <div class="cig-cap-card">
          <div class="cig-cap-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
          </div>
          <h3>Click-to-Instagram Ads Tracking</h3>
          <p>Track which ads drove conversations and calculate exact ROAS and customer acquisition costs in real-time.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs Section -->
  <section class="cig-faq-section">
    <div class="cig-section-header">
      <span class="cig-badge-pill">Got Questions?</span>
      <h2 class="cig-section-title">Frequently Asked Questions</h2>
      <p class="cig-section-subtitle">Everything you need to know about Instagram DM automation with InboxWa.</p>
    </div>

    <div class="cig-faq-item active">
      <button type="button" class="cig-faq-trigger">
        <span>Does this comply with Instagram and Meta terms of service?</span>
        <span class="cig-faq-icon">+</span>
      </button>
      <div class="cig-faq-content">
        Yes, 100%. InboxWa connects directly to the official Meta Graph API for Instagram Business and Creator accounts. There is zero scraping or unapproved browser automation, ensuring your account is completely safe from shadowbans.
      </div>
    </div>

    <div class="cig-faq-item">
      <button type="button" class="cig-faq-trigger">
        <span>Can it reply to Reels comments as well as regular post comments?</span>
        <span class="cig-faq-icon">+</span>
      </button>
      <div class="cig-faq-content">
        Yes! InboxWa supports comment-to-DM triggers for Instagram Reels, standard Feed posts, Carousel posts, and Live broadcasts.
      </div>
    </div>

    <div class="cig-faq-item">
      <button type="button" class="cig-faq-trigger">
        <span>What happens if someone leaves multiple comments?</span>
        <span class="cig-faq-icon">+</span>
      </button>
      <div class="cig-faq-content">
        InboxWa includes smart frequency capping and anti-spam filters so users only receive one automated DM per campaign, preventing repetitive messaging.
      </div>
    </div>

    <div class="cig-faq-item">
      <button type="button" class="cig-faq-trigger">
        <span>Can I hand over conversations to human agents?</span>
        <span class="cig-faq-icon">+</span>
      </button>
      <div class="cig-faq-content">
        Yes! Whenever a customer asks for a human or has a question outside the bot flow, InboxWa seamlessly pauses the bot and notifies your team in the Unified Live Chat Inbox.
      </div>
    </div>
  </section>

  <!-- Final Sales CTA Banner -->
  <section class="cig-cta-banner">
    <div class="cig-container" style="position: relative; z-index: 2;">
      <h2 class="cig-cta-title">Scale Your Instagram DM Automation Today</h2>
      <p class="cig-cta-subtitle">
        Turn comments into customers, automate customer service, and boost sales 24/7.
      </p>
      <div class="cig-cta-actions">
        <a href="<?php echo $bp; ?>auth/register" class="cig-btn-white">
          Start Free Trial
        </a>
        <button type="button" class="cig-btn-secondary btn-demo-open" style="color: #ffffff; border-color: rgba(255,255,255,0.3); background: rgba(255,255,255,0.1);">
          Talk to Sales
        </button>
      </div>
      <div class="cig-cta-trust">
        <span>✓ Easy Sign In</span>
        <span>✓ Official Connection</span>
        <span>✓ Cancel Anytime</span>
      </div>
    </div>
  </section>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // FAQ Accordion
  const faqItems = document.querySelectorAll('.cig-faq-item');
  faqItems.forEach(item => {
    const trigger = item.querySelector('.cig-faq-trigger');
    trigger.addEventListener('click', () => {
      const isActive = item.classList.contains('active');
      faqItems.forEach(i => i.classList.remove('active'));
      if (!isActive) item.classList.add('active');
    });
  });

  // Simulator Interaction
  const triggerInput = document.getElementById('cigTriggerInput');
  const simBtn = document.getElementById('cigSimulateBtn');
  const chips = document.querySelectorAll('.cig-chip');
  const chatWindow = document.getElementById('cigChatWindow');
  const badgeKeyword = document.getElementById('cigFlowBadgeKeyword');
  const flow1 = document.getElementById('cigFlowStep1');
  const flow2 = document.getElementById('cigFlowStep2');
  const flow3 = document.getElementById('cigFlowStep3');

  const responses = {
    'VOUCHER': {
      user: 'Just left a comment "<strong>VOUCHER</strong>" on your latest Reel! 🔥',
      publicReply: '💬 Public Reply: @user Sent you the code in DM! Check inbox 📥',
      bot: 'Hey there! 🎉 Thank you for commenting! Here is your exclusive 20% OFF discount coupon:<br><br><strong style="font-size: 0.95rem; background: rgba(0,0,0,0.25); padding: 2px 8px; border-radius: 4px; display: inline-block;">INBOX20</strong><br><br>Valid for 24 hours on all collections.<a href="#" class="cig-sim-btn">Claim 20% Discount ↗</a>'
    },
    'CATALOG': {
      user: 'Commented "<strong>CATALOG</strong>" on your new arrival post!',
      publicReply: '💬 Public Reply: @user Catalog sent straight to your DM! 🛍️',
      bot: 'Hi! 🛍️ Here is our latest Spring/Summer Product Catalog featuring 150+ bestselling items with instant checkout links!<a href="#" class="cig-sim-btn">Browse Product Catalog ↗</a>'
    },
    'PRICE': {
      user: 'Can I get the "<strong>PRICE</strong>" breakdown for InboxWa plans?',
      publicReply: '💬 Public Reply: @user Sent full pricing details to your DM! 🏷️',
      bot: 'Hello! 🏷️ Our plans start at ₹999/month with unlimited DM automation, official Meta API connection, and 24/7 priority support.<a href="#" class="cig-sim-btn">View All Pricing Plans ↗</a>'
    },
    'INFO': {
      user: 'Need more "<strong>INFO</strong>" about how comment automation works.',
      publicReply: '💬 Public Reply: @user Sent complete onboarding guide! 📖',
      bot: 'Hey! ℹ️ InboxWa helps you automate comment replies, auto-like interactions, send private DMs, and capture leads seamlessly with 1-click setup.<a href="#" class="cig-sim-btn">Read Integration Guide ↗</a>'
    }
  };

  function runSimulation(kw) {
    kw = (kw || triggerInput.value || 'VOUCHER').trim().toUpperCase();
    triggerInput.value = kw;
    badgeKeyword.textContent = 'Waiting for trigger: "' + kw + '"';

    chips.forEach(c => {
      c.classList.toggle('active', c.getAttribute('data-keyword') === kw);
    });

    const data = responses[kw] || {
      user: 'Commented "<strong>' + kw + '</strong>" on your post!',
      publicReply: '💬 Public Reply: @user Thanks! Check your DMs 🚀',
      bot: 'Thanks for asking about <strong>' + kw + '</strong>! Here is your requested information and next steps.<a href="#" class="cig-sim-btn">Continue to Checkout ↗</a>'
    };

    // Step 1 active
    flow1.classList.add('active');
    flow2.classList.remove('active');
    flow3.classList.remove('active');

    chatWindow.innerHTML = '<div class="cig-sim-msg user">' + data.user + '</div>';

    setTimeout(() => {
      flow2.classList.add('active');
      chatWindow.innerHTML += '<div class="cig-sim-msg public-reply">' + data.publicReply + '</div>';

      const typing = document.createElement('div');
      typing.className = 'cig-sim-typing';
      typing.innerHTML = '<div class="cig-sim-dot"></div><div class="cig-sim-dot"></div><div class="cig-sim-dot"></div>';
      chatWindow.appendChild(typing);
      chatWindow.scrollTop = chatWindow.scrollHeight;

      setTimeout(() => {
        typing.remove();
        flow3.classList.add('active');
        chatWindow.innerHTML += '<div class="cig-sim-msg bot">' + data.bot + '</div>';
        chatWindow.scrollTop = chatWindow.scrollHeight;
      }, 700);
    }, 500);
  }

  simBtn.addEventListener('click', () => runSimulation(triggerInput.value));
  triggerInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') runSimulation(triggerInput.value);
  });

  chips.forEach(chip => {
    chip.addEventListener('click', () => {
      runSimulation(chip.getAttribute('data-keyword'));
    });
  });
});
</script>

<?php
include __DIR__ . '/../../../includes/offer-popup.php';
include __DIR__ . '/../../../includes/callback-popup.php';
include __DIR__ . '/../../../includes/footer.php';
?>
