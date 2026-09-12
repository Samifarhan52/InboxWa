<?php
$basePath = '../../';
$bp = '../../';
require_once __DIR__ . '/../../config/cms.php';

$pageTitle = 'Product Catalog & WhatsApp Storefront Commerce | InboxWa';
$pageDescription = 'Turn WhatsApp into a direct storefront with native product catalogs, multi-item carts, inventory sync, and instant payment checkout links.';
$canonicalUrl = 'https://inboxwa.com/products/catalog/';
$ogImage = 'assets/images/products/catalog/hero.png';

include __DIR__ . '/../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $bp; ?>assets/css/product-pages.css">

<style>
/* Catalog specific theme overrides & additions */
:root {
  --cat-primary: #d97706;
  --cat-primary-hover: #b45309;
  --cat-primary-subtle: rgba(217, 119, 6, 0.08);
  --cat-primary-border: rgba(217, 119, 6, 0.25);
  --cat-secondary: #0f766e;
}

.cat-page {
  position: relative;
  overflow-x: hidden;
  background-color: #fcfcfd;
  color: #1e293b;
  font-family: inherit;
}

/* Ambient glow orbs */
.cat-ambient-1 {
  position: absolute;
  top: 2%;
  left: -15%;
  width: 60vw;
  height: 60vw;
  border-radius: 9999px;
  background: #d97706;
  opacity: 0.08;
  filter: blur(130px);
  pointer-events: none;
  z-index: 0;
}

.cat-ambient-2 {
  position: absolute;
  top: 35%;
  right: -10%;
  width: 50vw;
  height: 50vw;
  border-radius: 9999px;
  background: #0f766e;
  opacity: 0.06;
  filter: blur(120px);
  pointer-events: none;
  z-index: 0;
}

.cat-bg-dots {
  position: absolute;
  inset: 0;
  background-image: radial-gradient(ellipse at center, #e2e8f0 1px, transparent 1px);
  background-size: 24px 24px;
  opacity: 0.5;
  pointer-events: none;
  z-index: 0;
}

/* HERO */
.cat-hero {
  position: relative;
  padding: clamp(2rem, 5vw, 4.5rem) 1.5rem clamp(2.5rem, 6vw, 5rem);
  z-index: 1;
}

.cat-hero-container {
  max-width: 1280px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr;
  gap: 2.5rem;
  align-items: center;
}

@media (min-width: 1024px) {
  .cat-hero-container {
    grid-template-columns: 1.15fr 0.85fr;
    gap: 3.5rem;
  }
}

.cat-hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.35rem 0.9rem;
  background: var(--cat-primary-subtle);
  border: 1px solid var(--cat-primary-border);
  border-radius: 9999px;
  color: var(--cat-primary);
  font-size: 0.78rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: 1.25rem;
}

.cat-hero-title {
  font-size: clamp(2rem, 4.5vw, 3.4rem);
  font-weight: 900;
  line-height: 1.12;
  letter-spacing: -0.025em;
  color: #0f172a;
  margin-bottom: 1.25rem;
}

.cat-hero-gradient {
  background: linear-gradient(135deg, #d97706 0%, #b45309 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.cat-hero-desc {
  font-size: clamp(1rem, 1.8vw, 1.125rem);
  color: #475569;
  line-height: 1.68;
  max-width: 600px;
  margin-bottom: 2rem;
  font-weight: 500;
}

.cat-hero-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
  align-items: center;
  margin-bottom: 2rem;
}

.cat-btn-primary {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.85rem 1.75rem;
  background: var(--cat-primary);
  color: #ffffff;
  font-size: 0.95rem;
  font-weight: 800;
  border-radius: 10px;
  text-decoration: none;
  box-shadow: 0 10px 25px rgba(217, 119, 6, 0.3);
  transition: all 0.2s ease;
  border: none;
  cursor: pointer;
}

.cat-btn-primary:hover {
  background: var(--cat-primary-hover);
  transform: translateY(-2px);
  box-shadow: 0 14px 30px rgba(217, 119, 6, 0.4);
  color: #ffffff;
}

.cat-btn-secondary {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.85rem 1.6rem;
  background: #ffffff;
  color: #334155;
  font-size: 0.95rem;
  font-weight: 700;
  border-radius: 10px;
  text-decoration: none;
  border: 1px solid #cbd5e1;
  box-shadow: 0 1px 3px rgba(0,0,0,0.05);
  transition: all 0.2s ease;
}

.cat-btn-secondary:hover {
  background: #f8fafc;
  border-color: #94a3b8;
  color: #0f172a;
}

.cat-hero-bullets {
  display: flex;
  flex-wrap: wrap;
  gap: 1.25rem 2rem;
  font-size: 0.84rem;
  font-weight: 700;
  color: #475569;
}

.cat-hero-bullet-item {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
}

.cat-hero-bullet-item svg {
  color: var(--cat-primary);
  flex-shrink: 0;
}

.cat-hero-media {
  position: relative;
  max-width: 520px;
  margin: 0 auto;
  width: 100%;
}

.cat-hero-img-wrap {
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 20px 50px -15px rgba(15, 23, 42, 0.15);
  border: 1px solid rgba(226, 232, 240, 0.8);
  background: #ffffff;
  transition: transform 0.3s ease;
}

.cat-hero-img-wrap:hover {
  transform: translateY(-4px);
}

.cat-hero-img-wrap img {
  width: 100%;
  height: auto;
  display: block;
  object-fit: cover;
}

/* SIMULATOR SANDBOX SECTION (#catalog-demo) */
.cat-sim-section {
  position: relative;
  padding: clamp(3rem, 6vw, 5.5rem) 1.5rem;
  background: #f8fafc;
  border-top: 1px solid rgba(226, 232, 240, 0.8);
  border-bottom: 1px solid rgba(226, 232, 240, 0.8);
  overflow: hidden;
}

.cat-sim-pattern {
  position: absolute;
  inset: 0;
  opacity: 0.18;
  pointer-events: none;
  background-image: radial-gradient(#d97706 1.2px, transparent 1.2px);
  background-size: 20px 20px;
}

.cat-sim-container {
  max-width: 1200px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}

.cat-sim-header {
  text-align: center;
  max-width: 800px;
  margin: 0 auto clamp(2rem, 4vw, 3rem);
}

.cat-sim-badge {
  display: inline-block;
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
  font-size: 0.82rem;
  font-weight: 700;
  color: var(--cat-primary);
  background: var(--cat-primary-subtle);
  border: 1px solid var(--cat-primary-border);
  padding: 0.35rem 1rem;
  border-radius: 9999px;
  box-shadow: 0 1px 2px rgba(0,0,0,0.04);
  margin-bottom: 0.75rem;
}

.cat-sim-title {
  font-size: clamp(1.75rem, 3.2vw, 2.45rem);
  font-weight: 900;
  color: #0f172a;
  letter-spacing: -0.02em;
  margin-bottom: 0.75rem;
}

.cat-sim-desc {
  font-size: 1.05rem;
  font-weight: 500;
  color: #475569;
  line-height: 1.6;
}

.cat-sim-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 2.25rem;
  align-items: center;
}

@media (min-width: 1024px) {
  .cat-sim-grid {
    grid-template-columns: 1.15fr 0.85fr;
  }
}

/* Left: Store Inventory Manager */
.cat-mgr-card {
  background: #ffffff;
  border-radius: 18px;
  border: 1px solid #e2e8f0;
  padding: 1.75rem;
  box-shadow: 0 4px 20px rgba(0,0,0,0.03);
  display: flex;
  flex-direction: column;
  height: 680px;
  box-sizing: border-box;
}

.cat-mgr-head {
  flex-shrink: 0;
  margin-bottom: 1.25rem;
}

.cat-mgr-title {
  font-size: 1.15rem;
  font-weight: 900;
  color: #0f172a;
  display: flex;
  align-items: center;
  gap: 0.6rem;
  margin-bottom: 0.35rem;
}

.cat-mgr-title svg {
  color: var(--cat-primary);
}

.cat-mgr-subtitle {
  font-size: 0.88rem;
  font-weight: 500;
  color: #64748b;
  line-height: 1.45;
}

.cat-mgr-list {
  flex: 1;
  overflow-y: auto;
  padding-right: 0.5rem;
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
}

.cat-mgr-list::-webkit-scrollbar {
  width: 5px;
}
.cat-mgr-list::-webkit-scrollbar-thumb {
  background: #cbd5e1;
  border-radius: 4px;
}

.cat-mgr-item {
  padding: 0.85rem 1rem;
  background: #f8fafc;
  border-radius: 12px;
  border: 1px solid #e2e8f0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 0.85rem;
  transition: border-color 0.2s;
}

.cat-mgr-item:hover {
  border-color: #cbd5e1;
}

.cat-mgr-item-left {
  display: flex;
  align-items: center;
  gap: 0.85rem;
  flex: 1;
  min-width: 0;
}

.cat-mgr-emoji {
  font-size: 1.6rem;
  flex-shrink: 0;
  line-height: 1;
}

.cat-mgr-info {
  flex: 1;
  min-width: 0;
}

.cat-mgr-name {
  font-size: 0.85rem;
  font-weight: 800;
  color: #0f172a;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.cat-mgr-meta {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  margin-top: 0.25rem;
}

.cat-mgr-cat-tag {
  font-size: 0.68rem;
  font-family: ui-monospace, SFMono-Regular, monospace;
  font-weight: 700;
  background: #e2e8f0;
  color: #475569;
  padding: 0.15rem 0.45rem;
  border-radius: 4px;
  text-transform: uppercase;
}

.cat-mgr-stock {
  font-size: 0.75rem;
  font-weight: 700;
  color: #64748b;
}

.cat-mgr-controls {
  display: flex;
  align-items: center;
  gap: 0.6rem;
  flex-shrink: 0;
}

.cat-price-stepper {
  display: flex;
  align-items: center;
  gap: 0.25rem;
  background: #ffffff;
  border: 1px solid #cbd5e1;
  border-radius: 8px;
  padding: 0.2rem 0.35rem;
}

.cat-stepper-btn {
  background: transparent;
  border: none;
  cursor: pointer;
  color: #64748b;
  width: 22px;
  height: 22px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 4px;
  font-size: 0.9rem;
  font-weight: 700;
  transition: all 0.15s;
}

.cat-stepper-btn:hover {
  background: #f1f5f9;
  color: #0f172a;
}

.cat-price-val {
  font-family: ui-monospace, SFMono-Regular, monospace;
  font-size: 0.82rem;
  font-weight: 800;
  color: #0f172a;
  min-width: 52px;
  text-align: center;
}

.cat-mgr-trash-btn {
  background: transparent;
  border: none;
  cursor: pointer;
  color: #ef4444;
  padding: 0.4rem;
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background 0.15s;
}

.cat-mgr-trash-btn:hover {
  background: #fee2e2;
}

/* Manager New Product Form */
.cat-mgr-form {
  margin-top: 1rem;
  padding-top: 1rem;
  border-top: 1px solid #f1f5f9;
  flex-shrink: 0;
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
}

.cat-mgr-form-title {
  font-family: ui-monospace, SFMono-Regular, monospace;
  font-size: 0.8rem;
  font-weight: 800;
  color: #475569;
  text-transform: uppercase;
}

.cat-mgr-form-row {
  display: grid;
  grid-template-columns: 1fr;
  gap: 0.6rem;
}

@media (min-width: 640px) {
  .cat-mgr-form-row {
    grid-template-columns: 1fr auto;
  }
}

.cat-mgr-form-group {
  display: flex;
  gap: 0.5rem;
  align-items: center;
}

.cat-emoji-select {
  background: #f8fafc;
  border: 1px solid #cbd5e1;
  font-size: 1.2rem;
  border-radius: 8px;
  padding: 0.45rem 0.5rem;
  outline: none;
  cursor: pointer;
}

.cat-input-text {
  flex: 1;
  background: #f8fafc;
  border: 1px solid #cbd5e1;
  border-radius: 8px;
  padding: 0.55rem 0.75rem;
  font-size: 0.82rem;
  font-weight: 600;
  color: #0f172a;
  outline: none;
}

.cat-input-text:focus {
  border-color: var(--cat-primary);
  background: #ffffff;
}

.cat-input-price {
  width: 80px;
  background: #f8fafc;
  border: 1px solid #cbd5e1;
  border-radius: 8px;
  padding: 0.55rem 0.65rem;
  font-family: ui-monospace, SFMono-Regular, monospace;
  font-size: 0.82rem;
  font-weight: 700;
  color: #0f172a;
  outline: none;
}

.cat-input-price:focus {
  border-color: var(--cat-primary);
  background: #ffffff;
}

.cat-btn-add {
  background: var(--cat-primary);
  color: #ffffff;
  border: none;
  border-radius: 8px;
  padding: 0.55rem 1rem;
  font-size: 0.82rem;
  font-weight: 800;
  display: inline-flex;
  align-items: center;
  gap: 0.35rem;
  cursor: pointer;
  transition: all 0.15s;
}

.cat-btn-add:hover {
  background: var(--cat-primary-hover);
  transform: scale(1.02);
}

/* Right: Phone Simulator */
.cat-phone-frame {
  background: #090d16;
  border-radius: 40px;
  border: 7px solid #020617;
  padding: 0.9rem;
  height: 600px;
  width: 320px;
  max-width: 100%;
  margin: 0 auto;
  box-shadow: 0 25px 60px -15px rgba(0, 0, 0, 0.45), 0 0 0 1px rgba(255,255,255,0.08) inset;
  position: relative;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  box-sizing: border-box;
}

/* iPhone Dynamic Island */
.cat-phone-notch {
  position: absolute;
  top: 8px;
  left: 50%;
  transform: translateX(-50%);
  width: 105px;
  height: 18px;
  background: #020617;
  border-radius: 9999px;
  z-index: 30;
}

/* Phone Header */
.cat-phone-topbar {
  background: var(--cat-primary);
  color: #ffffff;
  padding: 1.75rem 0.85rem 0.75rem;
  margin: -0.9rem -0.9rem 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-shrink: 0;
  position: relative;
  z-index: 20;
}

.cat-phone-brand {
  display: flex;
  align-items: center;
  gap: 0.6rem;
}

.cat-phone-avatar {
  width: 32px;
  height: 32px;
  border-radius: 9999px;
  background: rgba(255,255,255,0.22);
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 800;
  font-size: 0.75rem;
  color: #ffffff;
  letter-spacing: 0.02em;
}

.cat-phone-info h4 {
  font-size: 0.82rem;
  font-weight: 900;
  margin: 0;
  line-height: 1.2;
}

.cat-phone-info p {
  font-size: 0.65rem;
  font-weight: 700;
  color: #a7f3d0;
  margin: 0;
}

.cat-phone-cart-btn {
  background: transparent;
  border: none;
  cursor: pointer;
  color: #ffffff;
  position: relative;
  padding: 0.35rem;
  border-radius: 6px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background 0.15s;
}

.cat-phone-cart-btn:hover {
  background: rgba(255,255,255,0.15);
}

.cat-cart-badge {
  position: absolute;
  top: -4px;
  right: -4px;
  background: #ef4444;
  color: #ffffff;
  font-family: ui-monospace, monospace;
  font-size: 0.58rem;
  font-weight: 900;
  width: 17px;
  height: 17px;
  border-radius: 9999px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 2px 4px rgba(0,0,0,0.25);
  animation: catPulse 1.6s infinite;
}

@keyframes catPulse {
  0%, 100% { transform: scale(1); }
  50% { transform: scale(1.15); }
}

/* Chat Wallpaper & Area */
.cat-phone-body {
  flex: 1;
  background: #efeae2;
  margin: 0 -0.9rem -0.9rem;
  padding: 0.85rem;
  overflow-y: auto;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  font-size: 0.75rem;
  position: relative;
}

.cat-phone-body::-webkit-scrollbar {
  width: 4px;
}
.cat-phone-body::-webkit-scrollbar-thumb {
  background: #cbd5e1;
  border-radius: 3px;
}

/* Browse View */
.cat-chat-bubble-bot {
  background: #ffffff;
  border-radius: 12px;
  padding: 0.65rem 0.8rem;
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 1px 2px rgba(0,0,0,0.06);
  font-size: 0.76rem;
  font-weight: 600;
  color: #334155;
  line-height: 1.45;
  margin-bottom: 0.65rem;
  align-self: flex-start;
  max-width: 92%;
}

.cat-phone-products-list {
  display: flex;
  flex-direction: column;
  gap: 0.65rem;
  overflow-y: auto;
  max-height: 380px;
  padding-right: 0.25rem;
}

.cat-product-card {
  background: #ffffff;
  border-radius: 12px;
  padding: 0.65rem 0.75rem;
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 1px 3px rgba(0,0,0,0.06);
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
}

.cat-product-card-top {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  gap: 0.5rem;
}

.cat-product-card-info {
  display: flex;
  gap: 0.5rem;
  flex: 1;
  min-width: 0;
}

.cat-product-card-emoji {
  font-size: 1.3rem;
  line-height: 1;
  flex-shrink: 0;
}

.cat-product-card-texts {
  flex: 1;
  min-width: 0;
}

.cat-product-card-texts h5 {
  font-size: 0.78rem;
  font-weight: 800;
  color: #0f172a;
  margin: 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.cat-product-card-texts p {
  font-size: 0.66rem;
  color: #64748b;
  margin: 0.15rem 0 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.cat-product-card-price {
  font-family: ui-monospace, monospace;
  font-weight: 800;
  font-size: 0.75rem;
  color: var(--cat-primary);
  flex-shrink: 0;
}

.cat-btn-add-cart {
  width: 100%;
  background: var(--cat-primary);
  color: #ffffff;
  border: none;
  border-radius: 8px;
  padding: 0.45rem;
  font-size: 0.72rem;
  font-weight: 800;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.25rem;
  transition: opacity 0.15s;
}

.cat-btn-add-cart:hover {
  opacity: 0.92;
}

/* Floating Checkout Strip */
.cat-strip-checkout {
  background: #ffffff;
  border: 1px solid var(--cat-primary-border);
  border-radius: 10px;
  padding: 0.55rem 0.75rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 0.65rem;
  box-shadow: 0 4px 10px rgba(0,0,0,0.06);
}

.cat-strip-count {
  font-size: 0.74rem;
  font-weight: 800;
  color: #0f172a;
}

.cat-strip-btn {
  background: var(--cat-primary);
  color: #ffffff;
  border: none;
  border-radius: 6px;
  padding: 0.4rem 0.75rem;
  font-size: 0.72rem;
  font-weight: 800;
  cursor: pointer;
  transition: opacity 0.15s;
}

.cat-strip-btn:hover {
  opacity: 0.9;
}

/* Cart View in Phone */
.cat-cart-view-box {
  background: #ffffff;
  border-radius: 14px;
  padding: 0.85rem;
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 4px 12px rgba(0,0,0,0.06);
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
  max-height: 480px;
  overflow-y: auto;
}

.cat-cart-view-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-bottom: 0.5rem;
  border-bottom: 1px solid #f1f5f9;
}

.cat-cart-view-header span {
  font-size: 0.85rem;
  font-weight: 900;
  color: #0f172a;
}

.cat-cart-back-btn {
  background: transparent;
  border: none;
  color: var(--cat-primary);
  font-size: 0.72rem;
  font-weight: 700;
  cursor: pointer;
  padding: 0;
}

.cat-cart-empty {
  text-align: center;
  padding: 2rem 1rem;
  color: #94a3b8;
  font-weight: 700;
  font-size: 0.8rem;
}

.cat-cart-items-list {
  display: flex;
  flex-direction: column;
  gap: 0.6rem;
}

.cat-cart-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 0.5rem;
}

.cat-cart-row-left {
  flex: 1;
  min-width: 0;
}

.cat-cart-row-title {
  font-size: 0.75rem;
  font-weight: 800;
  color: #0f172a;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.cat-cart-row-price {
  font-family: ui-monospace, monospace;
  font-size: 0.68rem;
  color: #64748b;
  font-weight: 600;
}

.cat-cart-row-stepper {
  display: flex;
  align-items: center;
  gap: 0.35rem;
}

.cat-cart-row-btn {
  width: 20px;
  height: 20px;
  border-radius: 4px;
  background: #f1f5f9;
  border: none;
  color: #475569;
  font-weight: 800;
  font-size: 0.75rem;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

.cat-cart-row-btn:hover {
  background: #e2e8f0;
}

.cat-cart-row-qty {
  font-family: ui-monospace, monospace;
  font-size: 0.75rem;
  font-weight: 800;
  min-width: 14px;
  text-align: center;
}

.cat-cart-total-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 0.6rem;
  border-top: 1px solid #f1f5f9;
  font-weight: 900;
  font-size: 0.85rem;
  color: #0f172a;
}

.cat-cart-total-val {
  font-family: ui-monospace, monospace;
  color: var(--cat-primary);
  font-size: 0.95rem;
}

.cat-btn-checkout {
  width: 100%;
  background: var(--cat-primary);
  color: #ffffff;
  border: none;
  border-radius: 8px;
  padding: 0.6rem;
  font-size: 0.75rem;
  font-weight: 800;
  cursor: pointer;
  box-shadow: 0 4px 10px rgba(217, 119, 6, 0.25);
  transition: opacity 0.15s;
}

.cat-btn-checkout:hover {
  opacity: 0.9;
}

/* Checkout View in Phone */
.cat-checkout-view-box {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
}

.cat-checkout-msg-bubble {
  background: #ffffff;
  border-radius: 12px;
  padding: 0.75rem 0.85rem;
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 2px 5px rgba(0,0,0,0.05);
  font-family: ui-monospace, SFMono-Regular, monospace;
  font-size: 0.68rem;
  font-weight: 600;
  line-height: 1.5;
  color: #1e293b;
  white-space: pre-wrap;
  word-break: break-word;
}

.cat-btn-reset-shop {
  align-self: flex-end;
  background: var(--cat-primary);
  color: #ffffff;
  border: none;
  border-radius: 8px;
  padding: 0.45rem 0.85rem;
  font-size: 0.72rem;
  font-weight: 800;
  cursor: pointer;
  transition: opacity 0.15s;
}

.cat-btn-reset-shop:hover {
  opacity: 0.9;
}

/* USE CASES SECTION */
.cat-cases-section {
  padding: clamp(3rem, 6vw, 5.5rem) 1.5rem;
  background: #ffffff;
  border-bottom: 1px solid rgba(226, 232, 240, 0.7);
  position: relative;
  z-index: 1;
}

.cat-cases-container {
  max-width: 1200px;
  margin: 0 auto;
}

.cat-cases-header {
  text-align: center;
  max-width: 780px;
  margin: 0 auto clamp(2rem, 4vw, 3rem);
}

.cat-cases-badge {
  display: inline-block;
  font-family: ui-monospace, monospace;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--cat-primary);
  background: var(--cat-primary-subtle);
  border: 1px solid var(--cat-primary-border);
  padding: 0.35rem 0.95rem;
  border-radius: 9999px;
  margin-bottom: 0.75rem;
}

.cat-cases-title {
  font-size: clamp(1.75rem, 3.2vw, 2.45rem);
  font-weight: 900;
  color: #0f172a;
  letter-spacing: -0.02em;
  margin-bottom: 0.75rem;
}

.cat-cases-desc {
  font-size: 1.05rem;
  color: #475569;
  line-height: 1.6;
  font-weight: 500;
}

.cat-cases-tabs-nav {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 0.75rem;
  max-width: 800px;
  margin: 0 auto clamp(2rem, 4vw, 3rem);
}

.cat-tab-btn {
  padding: 0.75rem 1.4rem;
  border-radius: 10px;
  font-size: 0.85rem;
  font-weight: 800;
  cursor: pointer;
  border: 1px solid #e2e8f0;
  background: #f8fafc;
  color: #64748b;
  transition: all 0.2s;
}

.cat-tab-btn:hover {
  background: #f1f5f9;
  color: #0f172a;
}

.cat-tab-btn.active {
  background: var(--cat-primary);
  color: #ffffff;
  border-color: var(--cat-primary);
  box-shadow: 0 8px 20px rgba(217, 119, 6, 0.3);
}

.cat-case-card-box {
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 18px;
  padding: clamp(1.5rem, 3vw, 2.5rem);
  box-shadow: 0 4px 20px rgba(0,0,0,0.03);
  display: grid;
  grid-template-columns: 1fr;
  gap: 2rem;
  align-items: center;
}

@media (min-width: 900px) {
  .cat-case-card-box {
    grid-template-columns: 1.1fr 0.9fr;
    gap: 3rem;
  }
}

.cat-case-info h4 {
  font-size: clamp(1.2rem, 2vw, 1.5rem);
  font-weight: 900;
  color: #0f172a;
  line-height: 1.25;
  margin-bottom: 0.85rem;
}

.cat-case-info p {
  font-size: 0.92rem;
  color: #475569;
  line-height: 1.65;
  font-weight: 500;
  margin-bottom: 1.5rem;
}

.cat-case-bullets {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
}

.cat-case-bullet {
  display: flex;
  align-items: flex-start;
  gap: 0.65rem;
  font-size: 0.82rem;
  font-weight: 600;
  color: #334155;
  line-height: 1.45;
}

.cat-case-bullet svg {
  color: var(--cat-primary);
  flex-shrink: 0;
  margin-top: 2px;
}

.cat-case-media {
  position: relative;
  aspect-ratio: 4 / 3;
  width: 100%;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1);
  background: #ffffff;
  border: 1px solid #e2e8f0;
}

.cat-case-media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: opacity 0.2s ease, transform 0.2s ease;
}

/* CAPABILITIES SECTION (#capabilities) */
.cat-cap-section {
  padding: clamp(3rem, 6vw, 5.5rem) 1.5rem;
  background: #f8fafc;
  border-bottom: 1px solid rgba(226, 232, 240, 0.7);
  position: relative;
  z-index: 1;
}

.cat-cap-container {
  max-width: 1240px;
  margin: 0 auto;
}

.cat-cap-header {
  text-align: center;
  max-width: 780px;
  margin: 0 auto clamp(2rem, 4vw, 3rem);
}

.cat-cap-badge {
  display: inline-block;
  font-family: ui-monospace, monospace;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--cat-primary);
  background: var(--cat-primary-subtle);
  border: 1px solid var(--cat-primary-border);
  padding: 0.35rem 0.95rem;
  border-radius: 9999px;
  margin-bottom: 0.75rem;
}

.cat-cap-title {
  font-size: clamp(1.75rem, 3.2vw, 2.45rem);
  font-weight: 900;
  color: #0f172a;
  letter-spacing: -0.02em;
}

.cat-cap-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 1.5rem;
}

@media (min-width: 640px) {
  .cat-cap-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (min-width: 1024px) {
  .cat-cap-grid {
    grid-template-columns: repeat(4, 1fr);
  }
}

.cat-cap-card {
  background: #ffffff;
  padding: 1.75rem;
  border-radius: 14px;
  border: 1px solid #e2e8f0;
  box-shadow: 0 2px 8px rgba(0,0,0,0.03);
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  transition: all 0.25s ease;
}

.cat-cap-card:hover {
  border-color: #fbbf24;
  box-shadow: 0 10px 25px -5px rgba(217, 119, 6, 0.12);
  transform: translateY(-3px);
}

.cat-cap-icon-box {
  width: 48px;
  height: 48px;
  border-radius: 10px;
  background: var(--cat-primary-subtle);
  border: 1px solid var(--cat-primary-border);
  color: var(--cat-primary);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 1.25rem;
  flex-shrink: 0;
}

.cat-cap-card-title {
  font-size: 1.05rem;
  font-weight: 900;
  color: #0f172a;
  margin-bottom: 0.5rem;
}

.cat-cap-card-desc {
  font-size: 0.88rem;
  font-weight: 500;
  color: #64748b;
  line-height: 1.55;
}

/* FAQS SECTION (#faqs) */
.cat-faq-section {
  padding: clamp(3rem, 6vw, 5.5rem) 1.5rem;
  background: #ffffff;
  position: relative;
  z-index: 1;
}

.cat-faq-container {
  max-width: 900px;
  margin: 0 auto;
}

.cat-faq-header {
  text-align: center;
  margin-bottom: clamp(2rem, 4vw, 3rem);
}

.cat-faq-badge {
  display: inline-block;
  font-family: ui-monospace, monospace;
  font-size: 0.78rem;
  font-weight: 800;
  color: var(--cat-primary);
  background: var(--cat-primary-subtle);
  border: 1px solid var(--cat-primary-border);
  padding: 0.35rem 0.95rem;
  border-radius: 9999px;
  margin-bottom: 0.75rem;
}

.cat-faq-title {
  font-size: clamp(1.75rem, 3.2vw, 2.45rem);
  font-weight: 900;
  color: #0f172a;
  letter-spacing: -0.02em;
}

.cat-faq-list {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.cat-faq-card {
  background: #fcfcfd;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 1px 3px rgba(0,0,0,0.03);
  transition: border-color 0.2s;
}

.cat-faq-card:hover {
  border-color: #cbd5e1;
}

.cat-faq-q-btn {
  width: 100%;
  padding: 1.15rem 1.35rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: transparent;
  border: none;
  cursor: pointer;
  text-align: left;
  gap: 1rem;
}

.cat-faq-q-text {
  font-size: 0.96rem;
  font-weight: 800;
  color: #0f172a;
}

.cat-faq-toggle-icon {
  font-size: 1.25rem;
  font-weight: 900;
  color: #94a3b8;
  flex-shrink: 0;
  transition: transform 0.2s;
  line-height: 1;
}

.cat-faq-card.open .cat-faq-toggle-icon {
  color: var(--cat-primary);
}

.cat-faq-answer {
  display: none;
  padding: 0.5rem 1.35rem 1.25rem;
  font-size: 0.9rem;
  font-weight: 500;
  color: #64748b;
  line-height: 1.65;
  border-top: 1px solid #f1f5f9;
}

.cat-faq-card.open .cat-faq-answer {
  display: block;
}

/* CTA BOX SECTION */
.cat-cta-section {
  padding: clamp(2.5rem, 5vw, 4.5rem) 1.5rem;
  background: #ffffff;
  position: relative;
  z-index: 1;
}

.cat-cta-container {
  max-width: 1100px;
  margin: 0 auto;
}

.cat-cta-banner {
  background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
  border-radius: 24px;
  padding: clamp(2.5rem, 5vw, 4rem) clamp(1.5rem, 4vw, 3rem);
  text-align: center;
  position: relative;
  overflow: hidden;
  box-shadow: 0 20px 50px -10px rgba(15, 23, 42, 0.3);
}

.cat-cta-glow-orb {
  position: absolute;
  top: -50%;
  left: 50%;
  transform: translateX(-50%);
  width: 400px;
  height: 400px;
  background: radial-gradient(circle, rgba(217, 119, 6, 0.35) 0%, transparent 70%);
  filter: blur(60px);
  pointer-events: none;
}

.cat-cta-banner h2 {
  font-size: clamp(1.85rem, 3.5vw, 2.65rem);
  font-weight: 900;
  color: #ffffff;
  margin-bottom: 0.75rem;
  position: relative;
  z-index: 2;
}

.cat-cta-banner p {
  font-size: clamp(1rem, 1.6vw, 1.15rem);
  color: #94a3b8;
  max-width: 600px;
  margin: 0 auto 2rem;
  position: relative;
  z-index: 2;
}

.cat-cta-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
  justify-content: center;
  position: relative;
  z-index: 2;
}

.cat-cta-btn-white {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  background: #ffffff;
  color: #0f172a;
  padding: 0.85rem 1.8rem;
  font-size: 0.95rem;
  font-weight: 800;
  border-radius: 10px;
  text-decoration: none;
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
  transition: all 0.2s;
}

.cat-cta-btn-white:hover {
  background: #f8fafc;
  transform: translateY(-2px);
  color: #0f172a;
}

.cat-cta-btn-ghost {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  background: rgba(255, 255, 255, 0.1);
  color: #ffffff;
  padding: 0.85rem 1.8rem;
  font-size: 0.95rem;
  font-weight: 700;
  border-radius: 10px;
  text-decoration: none;
  border: 1px solid rgba(255, 255, 255, 0.2);
  transition: all 0.2s;
}

.cat-cta-btn-ghost:hover {
  background: rgba(255, 255, 255, 0.2);
  color: #ffffff;
}
</style>

<div class="cat-page">
  <div class="cat-ambient-1"></div>
  <div class="cat-ambient-2"></div>
  <div class="cat-bg-dots"></div>

  <!-- Hero Section -->
  <section class="cat-hero">
    <div class="cat-hero-container">
      <div class="cat-hero-left">
        <div class="cat-hero-badge">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
          <span>WhatsApp Commerce</span>
        </div>
        <h1 class="cat-hero-title">
          Turn WhatsApp into a Direct <span class="cat-hero-gradient">Storefront for Checkout</span>
        </h1>
        <p class="cat-hero-desc">
          Showcase digital menus, synced stock categories, and details directly to clients inside DMs. Allow shoppers to browse, compile carts, and request automated secure billing links in 1-click.
        </p>
        <div class="cat-hero-actions">
          <a href="<?php echo $bp; ?>auth/register" class="cat-btn-primary">
            Start Selling Now
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
          </a>
          <a href="#catalog-demo" class="cat-btn-secondary">
            Try Catalog Simulator
          </a>
        </div>
        <div class="cat-hero-bullets">
          <span class="cat-hero-bullet-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            Auto-sync inventories
          </span>
          <span class="cat-hero-bullet-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            Native Checkout Flow
          </span>
          <span class="cat-hero-bullet-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            Stripe & Razorpay ready
          </span>
        </div>
      </div>

      <div class="cat-hero-media">
        <div class="cat-hero-img-wrap">
          <img src="<?php echo $bp; ?>assets/images/products/catalog/hero.png" alt="WhatsApp Product Catalog Storefront" width="1080" height="1080">
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive WhatsApp Catalog & Checkout Simulator -->
  <section class="cat-sim-section" id="catalog-demo">
    <div class="cat-sim-pattern"></div>
    <div class="cat-sim-container">
      <div class="cat-sim-header">
        <span class="cat-sim-badge">LIVE DEMO</span>
        <h2 class="cat-sim-title">Interact with the Catalog & Checkout Sandbox</h2>
        <p class="cat-sim-desc">
          Connect your Meta catalogs or build dynamic menu items. Allow shoppers to compile carts, browse listings, and checkout directly.
        </p>
      </div>

      <div class="cat-sim-grid">
        <!-- Left: Store Inventory Manager -->
        <div class="cat-mgr-card">
          <div class="cat-mgr-head">
            <h4 class="cat-mgr-title">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              Store Inventory Manager
            </h4>
            <p class="cat-mgr-subtitle">Modify values dynamically to preview changes inside the phone simulator.</p>
          </div>

          <div class="cat-mgr-list" id="cat-inventory-list">
            <!-- Populated via JavaScript -->
          </div>

          <form class="cat-mgr-form" id="cat-add-product-form">
            <span class="cat-mgr-form-title">Create New Store Product</span>
            <div class="cat-mgr-form-row">
              <div class="cat-mgr-form-group">
                <select id="cat-new-emoji" class="cat-emoji-select" aria-label="Product emoji">
                  <option value="☕">☕</option>
                  <option value="🍵">🍵</option>
                  <option value="🥐">🥐</option>
                  <option value="🍪">🍪</option>
                  <option value="🥪">🥪</option>
                  <option value="🎂">🎂</option>
                  <option value="🎁">🎁</option>
                  <option value="💐">💐</option>
                  <option value="🏷️" selected>🏷️</option>
                </select>
                <input type="text" id="cat-new-name" class="cat-input-text" placeholder="Product Name (e.g. Double Espresso)" required>
              </div>
              <div class="cat-mgr-form-group">
                <input type="number" id="cat-new-price" class="cat-input-price" step="0.01" min="0.50" placeholder="Price" required>
                <button type="submit" class="cat-btn-add">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                  Add
                </button>
              </div>
            </div>
          </form>
        </div>

        <!-- Right: Interactive iPhone WhatsApp Simulator -->
        <div class="cat-phone-frame">
          <div class="cat-phone-notch"></div>
          
          <!-- Top Bar -->
          <div class="cat-phone-topbar">
            <div class="cat-phone-brand">
              <div class="cat-phone-avatar">CS</div>
              <div class="cat-phone-info">
                <h4>InboxWa Live Shop</h4>
                <p>Online storefront catalog</p>
              </div>
            </div>
            <button type="button" class="cat-phone-cart-btn" id="cat-toggle-cart-btn" aria-label="Shopping Cart">
              <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
              <span class="cat-cart-badge" id="cat-badge-counter" style="display: none;">0</span>
            </button>
          </div>

          <!-- Dynamic Chat Body -->
          <div class="cat-phone-body" id="cat-phone-body">
            <!-- Dynamic State Injection -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Use Cases Showcase -->
  <section class="cat-cases-section" id="use-cases">
    <div class="cat-cases-container">
      <div class="cat-cases-header">
        <span class="cat-cases-badge">USE CASES</span>
        <h2 class="cat-cases-title">Real-Time Catalog Integration Examples</h2>
        <p class="cat-cases-desc">
          See how top industries utilize synced digital catalogs on WhatsApp to convert conversations into sales instantly.
        </p>
      </div>

      <div class="cat-cases-tabs-nav" id="cat-case-tabs">
        <button type="button" class="cat-tab-btn active" data-tab="0">01. E-Commerce Checkout</button>
        <button type="button" class="cat-tab-btn" data-tab="1">02. Restaurant Digital Ordering</button>
        <button type="button" class="cat-tab-btn" data-tab="2">03. Professional Service Bookings</button>
      </div>

      <div class="cat-case-card-box">
        <div class="cat-case-info">
          <h4 id="cat-case-title">Instantly Sync Inventory & Checkout with Shopify</h4>
          <p id="cat-case-desc">Retailers link their shop databases to automatically reflect pricing adjustments, inventory levels, and details on WhatsApp catalog profiles.</p>
          <div class="cat-case-bullets" id="cat-case-bullets">
            <div class="cat-case-bullet">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 12 12 14 14"></polyline></svg>
              <span>Customers browse collections inside their chat bubble.</span>
            </div>
            <div class="cat-case-bullet">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 12 12 14 14"></polyline></svg>
              <span>Items added to cart compile into a native order summary format.</span>
            </div>
            <div class="cat-case-bullet">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 12 12 14 14"></polyline></svg>
              <span>Checkout web link triggers on order placement for payment gateway integration.</span>
            </div>
          </div>
        </div>

        <div class="cat-case-media">
          <img id="cat-case-img" src="<?php echo $bp; ?>assets/images/products/catalog/usecase-shopify.png" alt="Use case preview">
        </div>
      </div>
    </div>
  </section>

  <!-- Capabilities Section -->
  <section class="cat-cap-section" id="capabilities">
    <div class="cat-cap-container">
      <div class="cat-cap-header">
        <span class="cat-cap-badge">Catalog Capabilities</span>
        <h2 class="cat-cap-title">Everything You Need to Power Mobile Commerce</h2>
      </div>

      <div class="cat-cap-grid">
        <!-- 1. Meta Catalog Sync -->
        <div class="cat-cap-card">
          <div class="cat-cap-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path><path d="M8 16H3v5"></path></svg>
          </div>
          <h4 class="cat-cap-card-title">Meta Catalog Sync</h4>
          <p class="cat-cap-card-desc">Instantly sync existing products from Meta Business Manager or upload spreadsheet directories directly.</p>
        </div>

        <!-- 2. Dynamic Carts -->
        <div class="cat-cap-card">
          <div class="cat-cap-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
          </div>
          <h4 class="cat-cap-card-title">Dynamic Carts</h4>
          <p class="cat-cap-card-desc">Allow clients to pick multiple items, increment quantities, and submit complete orders without leaving the chat viewport.</p>
        </div>

        <!-- 3. Auto-Invoicing -->
        <div class="cat-cap-card">
          <div class="cat-cap-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
          </div>
          <h4 class="cat-cap-card-title">Auto-Invoicing</h4>
          <p class="cat-cap-card-desc">Connect Stripe, Razorpay, or PayPal to automatically dispatch secure checkout links once items are compiled in the cart.</p>
        </div>

        <!-- 4. Inventory Alerts -->
        <div class="cat-cap-card">
          <div class="cat-cap-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
          </div>
          <h4 class="cat-cap-card-title">Inventory Alerts</h4>
          <p class="cat-cap-card-desc">Trigger automated out-of-stock messages or auto-hide catalog products whose database counts drop to zero.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs Section -->
  <section class="cat-faq-section" id="faqs">
    <div class="cat-faq-container">
      <div class="cat-faq-header">
        <span class="cat-faq-badge">FAQs</span>
        <h2 class="cat-faq-title">Questions about Catalog Integrations?</h2>
      </div>

      <div class="cat-faq-list">
        <div class="cat-faq-card open">
          <button type="button" class="cat-faq-q-btn">
            <span class="cat-faq-q-text">Is a Meta Business Manager catalog required?</span>
            <span class="cat-faq-toggle-icon">−</span>
          </button>
          <div class="cat-faq-answer">
            Yes, to use official WhatsApp product collections, you sync your products to Meta Catalog Manager. The app simplifies this by giving you a direct API linkage to upload items from your local spreadsheet inventory in seconds.
          </div>
        </div>

        <div class="cat-faq-card">
          <button type="button" class="cat-faq-q-btn">
            <span class="cat-faq-q-text">How do customers pay once they submit their orders?</span>
            <span class="cat-faq-toggle-icon">+</span>
          </button>
          <div class="cat-faq-answer">
            Once the order checkout is compiled in chat, the bot triggers an automated Stripe, Razorpay, or PayPal payment transaction link. Once the customer completes the payment, the bot instantly dispatches a confirmation message and updates the order status.
          </div>
        </div>

        <div class="cat-faq-card">
          <button type="button" class="cat-faq-q-btn">
            <span class="cat-faq-q-text">Can I trigger chatbot automations when a customer buys?</span>
            <span class="cat-faq-toggle-icon">+</span>
          </button>
          <div class="cat-faq-answer">
            Absolutely. When a customer adds items or checkout, it fires webhook signals that can trigger specific automation builders (like assigning tags, enrolling the contact in automated email flows, or routing them to human inbox specialists).
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA Box -->
  <section class="cat-cta-section">
    <div class="cat-cta-container">
      <div class="cat-cta-banner">
        <div class="cat-cta-glow-orb"></div>
        <h2>Start Selling Directly on WhatsApp</h2>
        <p>Turn passive conversations into active checkouts with automated digital catalogs.</p>
        <div class="cat-cta-actions">
          <a href="<?php echo $bp; ?>auth/register" class="cat-cta-btn-white">
            Start Free Trial
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
          <a href="<?php echo $bp; ?>#contact-section" class="cat-cta-btn-ghost">
            Book a Demo
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Dynamic JavaScript Simulator Engine & Interactivity -->
<script>
(function() {
  'use strict';

  // Initial Product Data
  var products = [
    {
      id: "item-1",
      name: "Organic Coffee Blend",
      price: 14.99,
      emoji: "☕",
      category: "Beverages",
      description: "Rich, locally-roasted medium blend beans.",
      stock: 45
    },
    {
      id: "item-2",
      name: "Matcha Ceremony Set",
      price: 24.50,
      emoji: "🍵",
      category: "Tea Sets",
      description: "Authentic ceramic bowl and premium green tea powder.",
      stock: 18
    },
    {
      id: "item-3",
      name: "Gluten-Free Croissant",
      price: 4.99,
      emoji: "🥐",
      category: "Bakery",
      description: "Flaky, buttery pastries baked fresh every morning.",
      stock: 12
    }
  ];

  var cart = {}; // { id: qty }
  var isCartView = false;
  var checkoutText = null;

  // DOM Elements
  var inventoryListEl = document.getElementById('cat-inventory-list');
  var addProductForm = document.getElementById('cat-add-product-form');
  var phoneBodyEl = document.getElementById('cat-phone-body');
  var cartBadgeEl = document.getElementById('cat-badge-counter');
  var toggleCartBtn = document.getElementById('cat-toggle-cart-btn');

  // Helper to calculate grand total
  function getGrandTotal() {
    var total = 0;
    Object.keys(cart).forEach(function(id) {
      var item = products.find(function(p) { return p.id === id; });
      if (item && cart[id]) {
        total += item.price * cart[id];
      }
    });
    return total.toFixed(2);
  }

  // Helper to calculate total item count
  function getTotalCount() {
    var count = 0;
    Object.keys(cart).forEach(function(id) {
      count += cart[id] || 0;
    });
    return count;
  }

  // Update Cart Badge in Phone Topbar
  function updateBadge() {
    var count = getTotalCount();
    if (count > 0) {
      cartBadgeEl.textContent = count;
      cartBadgeEl.style.display = 'flex';
    } else {
      cartBadgeEl.style.display = 'none';
    }
  }

  // Render Inventory Manager List (Left Column)
  function renderInventory() {
    inventoryListEl.innerHTML = '';
    products.forEach(function(prod) {
      var row = document.createElement('div');
      row.className = 'cat-mgr-item';
      row.innerHTML = 
        '<div class="cat-mgr-item-left">' +
          '<span class="cat-mgr-emoji">' + prod.emoji + '</span>' +
          '<div class="cat-mgr-info">' +
            '<p class="cat-mgr-name">' + escapeHtml(prod.name) + '</p>' +
            '<div class="cat-mgr-meta">' +
              '<span class="cat-mgr-cat-tag">' + escapeHtml(prod.category) + '</span>' +
              '<span class="cat-mgr-stock">Stock: ' + prod.stock + '</span>' +
            '</div>' +
          '</div>' +
        '</div>' +
        '<div class="cat-mgr-controls">' +
          '<div class="cat-price-stepper">' +
            '<button type="button" class="cat-stepper-btn cat-btn-dec" title="Decrease Price">−</button>' +
            '<span class="cat-price-val">$' + prod.price.toFixed(2) + '</span>' +
            '<button type="button" class="cat-stepper-btn cat-btn-inc" title="Increase Price">+</button>' +
          '</div>' +
          '<button type="button" class="cat-mgr-trash-btn" title="Remove Product">' +
            '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18"></path><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"></path><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>' +
          '</button>' +
        '</div>';

      // Event listeners
      row.querySelector('.cat-btn-dec').addEventListener('click', function() {
        var newPrice = parseFloat((prod.price - 1.00).toFixed(2));
        prod.price = newPrice > 0.50 ? newPrice : 0.50;
        renderInventory();
        renderPhone();
      });

      row.querySelector('.cat-btn-inc').addEventListener('click', function() {
        prod.price = parseFloat((prod.price + 1.00).toFixed(2));
        renderInventory();
        renderPhone();
      });

      row.querySelector('.cat-mgr-trash-btn').addEventListener('click', function() {
        products = products.filter(function(p) { return p.id !== prod.id; });
        if (cart[prod.id]) {
          delete cart[prod.id];
          updateBadge();
        }
        renderInventory();
        renderPhone();
      });

      inventoryListEl.appendChild(row);
    });
  }

  // Render Phone Inside Screen
  function renderPhone() {
    updateBadge();

    // 1. If in Checkout View (Order Summary with Stripe Link)
    if (checkoutText) {
      phoneBodyEl.innerHTML = 
        '<div class="cat-checkout-view-box">' +
          '<div class="cat-checkout-msg-bubble">' + escapeHtml(checkoutText) + '</div>' +
          '<button type="button" class="cat-btn-reset-shop" id="cat-btn-reset">Clear & Reset Shop</button>' +
        '</div>';

      document.getElementById('cat-btn-reset').addEventListener('click', function() {
        cart = {};
        checkoutText = null;
        isCartView = false;
        renderPhone();
      });
      return;
    }

    // 2. If in Cart View
    if (isCartView) {
      var cartKeys = Object.keys(cart);
      var cartItemsHtml = '';

      if (cartKeys.length === 0) {
        cartItemsHtml = '<div class="cat-cart-empty">Your cart is empty. Add catalog items!</div>';
      } else {
        cartKeys.forEach(function(id) {
          var item = products.find(function(p) { return p.id === id; });
          if (!item) return;
          var qty = cart[id];
          cartItemsHtml += 
            '<div class="cat-cart-row">' +
              '<div class="cat-cart-row-left">' +
                '<p class="cat-cart-row-title">' + item.emoji + ' ' + escapeHtml(item.name) + '</p>' +
                '<p class="cat-cart-row-price">$' + item.price.toFixed(2) + ' each</p>' +
              '</div>' +
              '<div class="cat-cart-row-stepper">' +
                '<button type="button" class="cat-cart-row-btn cat-btn-cart-dec" data-id="' + item.id + '">−</button>' +
                '<span class="cat-cart-row-qty">' + qty + '</span>' +
                '<button type="button" class="cat-cart-row-btn cat-btn-cart-inc" data-id="' + item.id + '">+</button>' +
              '</div>' +
            '</div>';
        });
      }

      phoneBodyEl.innerHTML = 
        '<div class="cat-cart-view-box">' +
          '<div class="cat-cart-view-header">' +
            '<span>Your Shopping Cart</span>' +
            '<button type="button" class="cat-cart-back-btn" id="cat-btn-back-items">Back to items</button>' +
          '</div>' +
          '<div class="cat-cart-items-list">' + cartItemsHtml + '</div>' +
          (cartKeys.length > 0 ? 
            '<div class="cat-cart-total-row">' +
              '<span>Total:</span>' +
              '<span class="cat-cart-total-val">$' + getGrandTotal() + '</span>' +
            '</div>' +
            '<button type="button" class="cat-btn-checkout" id="cat-btn-gen-checkout">Generate Checkout Link</button>'
          : '') +
        '</div>';

      document.getElementById('cat-btn-back-items').addEventListener('click', function() {
        isCartView = false;
        renderPhone();
      });

      // Steppers inside Cart
      var decBtns = phoneBodyEl.querySelectorAll('.cat-btn-cart-dec');
      decBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
          var id = btn.getAttribute('data-id');
          if (cart[id]) {
            if (cart[id] === 1) {
              delete cart[id];
            } else {
              cart[id] -= 1;
            }
          }
          renderPhone();
        });
      });

      var incBtns = phoneBodyEl.querySelectorAll('.cat-btn-cart-inc');
      incBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
          var id = btn.getAttribute('data-id');
          cart[id] = (cart[id] || 0) + 1;
          renderPhone();
        });
      });

      var genCheckoutBtn = document.getElementById('cat-btn-gen-checkout');
      if (genCheckoutBtn) {
        genCheckoutBtn.addEventListener('click', function() {
          if (Object.keys(cart).length === 0) return;
          var msg = "🛒 *New Order from WhatsApp Store!*\n----------------------------------------\n";
          Object.keys(cart).forEach(function(id) {
            var item = products.find(function(p) { return p.id === id; });
            if (item) {
              msg += "• " + cart[id] + "x " + item.name + " (" + item.emoji + ") - $" + (item.price * cart[id]).toFixed(2) + "\n";
            }
          });
          msg += "----------------------------------------\n*Grand Total:* $" + getGrandTotal() + "\n\nPayment link generated dynamically via WAPI:\n🔗 https://checkout.stripe.com/pay/wapi_inv_" + Math.floor(Math.random() * 900000 + 100000);
          checkoutText = msg;
          isCartView = false;
          renderPhone();
        });
      }

      return;
    }

    // 3. Browse View (Default WhatsApp Storefront)
    var prodCardsHtml = '';
    if (products.length === 0) {
      prodCardsHtml = '<p style="text-align:center; color:#94a3b8; font-weight:700; padding:1.5rem 0;">No products in catalog.</p>';
    } else {
      products.forEach(function(p) {
        prodCardsHtml += 
          '<div class="cat-product-card">' +
            '<div class="cat-product-card-top">' +
              '<div class="cat-product-card-info">' +
                '<span class="cat-product-card-emoji">' + p.emoji + '</span>' +
                '<div class="cat-product-card-texts">' +
                  '<h5>' + escapeHtml(p.name) + '</h5>' +
                  '<p>' + escapeHtml(p.description) + '</p>' +
                '</div>' +
              '</div>' +
              '<span class="cat-product-card-price">$' + p.price.toFixed(2) + '</span>' +
            '</div>' +
            '<button type="button" class="cat-btn-add-cart" data-id="' + p.id + '">' +
              '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>' +
              'Add to Cart' +
            '</button>' +
          '</div>';
      });
    }

    var count = getTotalCount();
    var floatingStripHtml = '';
    if (count > 0) {
      floatingStripHtml = 
        '<div class="cat-strip-checkout">' +
          '<span class="cat-strip-count">Selected: ' + count + ' Items</span>' +
          '<button type="button" class="cat-strip-btn" id="cat-btn-open-cart">Checkout Cart</button>' +
        '</div>';
    }

    phoneBodyEl.innerHTML = 
      '<div>' +
        '<div class="cat-chat-bubble-bot">' +
          'Hello! Welcome to our store menu. Tap below to browse products and place an order directly.' +
        '</div>' +
        '<div class="cat-phone-products-list">' + prodCardsHtml + '</div>' +
      '</div>' +
      (floatingStripHtml ? '<div>' + floatingStripHtml + '</div>' : '');

    // Add to Cart buttons
    var addBtns = phoneBodyEl.querySelectorAll('.cat-btn-add-cart');
    addBtns.forEach(function(btn) {
      btn.addEventListener('click', function() {
        var id = btn.getAttribute('data-id');
        cart[id] = (cart[id] || 0) + 1;
        renderPhone();
      });
    });

    var openCartBtn = document.getElementById('cat-btn-open-cart');
    if (openCartBtn) {
      openCartBtn.addEventListener('click', function() {
        isCartView = true;
        renderPhone();
      });
    }
  }

  // Toggle Cart View on Topbar Cart Click
  toggleCartBtn.addEventListener('click', function() {
    if (checkoutText) {
      checkoutText = null;
    }
    isCartView = !isCartView;
    renderPhone();
  });

  // Handle Add Product Form
  addProductForm.addEventListener('submit', function(e) {
    e.preventDefault();
    var nameInput = document.getElementById('cat-new-name');
    var priceInput = document.getElementById('cat-new-price');
    var emojiInput = document.getElementById('cat-new-emoji');

    var name = nameInput.value.trim();
    var price = parseFloat(priceInput.value);
    var emoji = emojiInput.value || '🏷️';

    if (!name || isNaN(price) || price <= 0) return;

    var newProd = {
      id: 'item-' + Date.now(),
      name: name,
      price: price,
      emoji: emoji,
      category: 'Custom',
      description: 'Added via live catalog preview settings.',
      stock: 50
    };

    products.push(newProd);
    nameInput.value = '';
    priceInput.value = '';
    emojiInput.value = '🏷️';

    renderInventory();
    renderPhone();
  });

  function escapeHtml(str) {
    if (!str) return '';
    return String(str)
      .replace(/&/g, '&amp;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;')
      .replace(/'/g, '&#039;');
  }

  // Initialize Simulator
  renderInventory();
  renderPhone();

  // USE CASES TAB SWITCHER
  var useCaseData = [
    {
      heading: "01. E-Commerce Checkout",
      title: "Instantly Sync Inventory & Checkout with Shopify",
      description: "Retailers link their shop databases to automatically reflect pricing adjustments, inventory levels, and details on WhatsApp catalog profiles.",
      bullets: [
        "Customers browse collections inside their chat bubble.",
        "Items added to cart compile into a native order summary format.",
        "Checkout web link triggers on order placement for payment gateway integration."
      ],
      image: "<?php echo $bp; ?>assets/images/products/catalog/usecase-shopify.png"
    },
    {
      heading: "02. Restaurant Digital Ordering",
      title: "Interactive Menu Ordering for Food Delivery",
      description: "Restaurants and bakeries list categorized menus (Appetizers, Mains, Drinks) with descriptions. Customers select sizes, spice levels, or customizations before adding dishes.",
      bullets: [
        "Scan table QR codes to immediately pull up the WhatsApp menu.",
        "Bot asks: 'Add spice customization?' list selection prompt.",
        "Dispatches kitchen ticket directly to thermal printers on checkout."
      ],
      image: "<?php echo $bp; ?>assets/images/products/catalog/usecase-restaurant.png"
    },
    {
      heading: "03. Professional Service Bookings",
      title: "Digital Service Catalogues for Consultants",
      description: "Agencies, therapists, or business coaches showcase packages (1 Hour Consultation, Monthly Design Retainer, SEO Audit) directly on the dashboard.",
      bullets: [
        "Allows prospects to pick service packages without external scheduling links.",
        "Integrates with CRM custom fields to trigger specific support routines.",
        "Auto-routes tickets to dedicated account specialists upon checkout."
      ],
      image: "<?php echo $bp; ?>assets/images/products/catalog/usecase-consulting.png"
    }
  ];

  var tabBtns = document.querySelectorAll('#cat-case-tabs .cat-tab-btn');
  var caseTitleEl = document.getElementById('cat-case-title');
  var caseDescEl = document.getElementById('cat-case-desc');
  var caseBulletsEl = document.getElementById('cat-case-bullets');
  var caseImgEl = document.getElementById('cat-case-img');

  tabBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      var idx = parseInt(btn.getAttribute('data-tab'), 10);
      var data = useCaseData[idx];
      if (!data) return;

      tabBtns.forEach(function(b) { b.classList.remove('active'); });
      btn.classList.add('active');

      caseTitleEl.textContent = data.title;
      caseDescEl.textContent = data.description;

      var bulletsHtml = '';
      data.bullets.forEach(function(bullet) {
        bulletsHtml += 
          '<div class="cat-case-bullet">' +
            '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 12 12 14 14"></polyline></svg>' +
            '<span>' + escapeHtml(bullet) + '</span>' +
          '</div>';
      });
      caseBulletsEl.innerHTML = bulletsHtml;

      caseImgEl.style.opacity = '0.3';
      caseImgEl.style.transform = 'scale(0.98)';
      setTimeout(function() {
        caseImgEl.src = data.image;
        caseImgEl.style.opacity = '1';
        caseImgEl.style.transform = 'scale(1)';
      }, 150);
    });
  });

  // FAQS ACCORDION
  var faqCards = document.querySelectorAll('.cat-faq-card');
  faqCards.forEach(function(card) {
    var btn = card.querySelector('.cat-faq-q-btn');
    btn.addEventListener('click', function() {
      var isOpen = card.classList.contains('open');
      faqCards.forEach(function(c) {
        c.classList.remove('open');
        var icon = c.querySelector('.cat-faq-toggle-icon');
        if (icon) icon.textContent = '+';
      });

      if (!isOpen) {
        card.classList.add('open');
        var icon = card.querySelector('.cat-faq-toggle-icon');
        if (icon) icon.textContent = '−';
      }
    });
  });

})();
</script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>\n