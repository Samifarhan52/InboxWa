<?php
$basePath = '../../';
$pageTitle = 'Download InboxWa Apps — Android, iOS, Desktop & Web Console';
$pageDescription = 'Download InboxWa for Android, iOS iPhone/iPad, macOS, Windows, or use the high-speed Web App. Access your WhatsApp shared inbox from anywhere.';
$canonicalUrl = 'https://inboxwa.com/resources/download-app/';
$appLinks = require __DIR__ . '/../../config/app-links.php';
include __DIR__ . '/../../includes/header.php';

$androidUrl = trim($appLinks['android'] ?? '') ?: 'https://play.google.com/store/apps/details?id=com.inboxwa.app';
$iosUrl = trim($appLinks['ios'] ?? '') ?: '/resources/download-ios-app/';
$desktopUrl = trim($appLinks['desktop'] ?? '') ?: '/auth/login';
?>
<link rel="stylesheet" href="/assets/css/resources.css?v=3">

<nav class="container res-breadcrumbs" aria-label="Breadcrumb">
  <ol>
    <li><a href="/">Home</a></li>
    <li><a href="/resources/help-center/">Resources</a></li>
    <li aria-current="page">Download Apps</li>
  </ol>
</nav>

<!-- Hero Section -->
<section class="res-hero">
  <div class="container">
    <span class="res-badge"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg> Unified Multi-Platform Ecosystem</span>
    <h1>InboxWa Across All Your Devices</h1>
    <p>Manage high-volume WhatsApp conversations, assign agent tickets on the go, monitor live AI chatbot sequences, and receive instant push notifications wherever you work.</p>
    
    <div style="display:flex;gap:0.75rem;justify-content:center;margin-top:2rem;flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="#platforms">Choose Your Platform &darr;</a>
      <a class="btn btn-outline btn-lg" href="/auth/login">Launch Web App</a>
    </div>
  </div>
</section>

<!-- Platforms Download Cards Grid -->
<section class="section" id="platforms" style="padding-top:2.5rem">
  <div class="container">
    <div class="download-grid">
      
      <!-- 1. Android Card -->
      <div class="download-card reveal">
        <div class="download-platform-icon" style="background:#ECFDF5;color:#10B981">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M17.523 15.3414c-.5511 0-.9993-.4486-.9993-.9997s.4482-.9993.9993-.9993c.551 0 .9993.4482.9993.9993.0001.5511-.4482.9997-.9993.9997m-11.046 0c-.5511 0-.9993-.4486-.9993-.9997s.4482-.9993.9993-.9993c.5511 0 .9993.4482.9993.9993 0 .5511-.4482.9997-.9993.9997m11.4045-6.02l1.9973-3.4592a.416.416 0 00-.1521-.5676.416.416 0 00-.5676.1521l-2.0223 3.503C15.5902 8.414 13.8533 8.09 12 8.09s-3.5902.324-5.1367.8597L4.841 5.4467a.4161.4161 0 00-.5677-.1521.4157.4157 0 00-.1521.5676l1.9973 3.4592C2.6889 11.1867.3432 14.6589 0 18.761h24c-.3432-4.1021-2.6889-7.5743-6.1185-9.4396"/>
          </svg>
        </div>
        <span class="badge badge-primary" style="font-size:0.72rem;margin-bottom:0.5rem">Android Smartphone & Tablet</span>
        <h3>Android App</h3>
        <p>Real-time customer inbox, sound notifications, quick voice note replies, and agent ticket reassignment for Android users.</p>
        
        <div style="display:flex;flex-direction:column;gap:8px;width:100%;margin-top:auto">
          <a class="btn btn-primary" href="<?php echo htmlspecialchars($androidUrl); ?>" target="_blank" rel="noopener">
            Get it on Google Play
          </a>
          <a class="btn btn-sm btn-outline" href="https://wa.me/918050854445?text=Hi%20InboxWa%2C%20please%20send%20me%20the%20direct%20Android%20APK%20download%20link" target="_blank" rel="noopener">
            Request Direct APK (.apk)
          </a>
        </div>

        <ul class="download-specs-list">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Requires Android 8.0 (Oreo) or later</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Background sync & sound alerts</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Lightweight package: ~24 MB</li>
        </ul>
      </div>

      <!-- 2. Apple iOS Card -->
      <div class="download-card reveal">
        <div class="download-platform-icon" style="background:#F5F3FF;color:#7C3AED">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M15.97 6.37c.62-.75 1.04-1.8 0.92-2.85-.9.04-1.99.6-2.61 1.34-.55.63-1.03 1.68-.9 2.69 1 .08 2.01-.51 2.59-1.18z"/>
          </svg>
        </div>
        <span class="badge badge-primary" style="font-size:0.72rem;margin-bottom:0.5rem">iPhone & iPad</span>
        <h3>iOS App</h3>
        <p>Silky smooth iOS experience with native Lock Screen widgets, APNs instant alerts, Face ID authentication, and iPad Split View.</p>
        
        <div style="display:flex;flex-direction:column;gap:8px;width:100%;margin-top:auto">
          <a class="btn btn-primary" href="/resources/download-ios-app/">
            View iOS App Showcase &rarr;
          </a>
          <a class="btn btn-sm btn-outline" href="/auth/login">
            Install iOS PWA Icon
          </a>
        </div>

        <ul class="download-specs-list">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Requires iOS 15.0 or later</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Optimized for iPhone 16 / 15 Pro</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Face ID & Touch ID protection</li>
        </ul>
      </div>

      <!-- 3. Desktop (macOS & Windows) Card -->
      <div class="download-card reveal">
        <div class="download-platform-icon" style="background:#EFF6FF;color:#2563EB">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
            <line x1="8" y1="21" x2="16" y2="21"></line>
            <line x1="12" y1="17" x2="12" y2="21"></line>
          </svg>
        </div>
        <span class="badge badge-primary" style="font-size:0.72rem;margin-bottom:0.5rem">macOS & Windows</span>
        <h3>Desktop App</h3>
        <p>Built for power users. Global Cmd+K / Ctrl+K search, native OS notification tray, and multi-monitor shared inbox efficiency.</p>
        
        <div style="display:flex;flex-direction:column;gap:8px;width:100%;margin-top:auto">
          <a class="btn btn-primary" href="<?php echo htmlspecialchars($desktopUrl); ?>">
            Download for Desktop
          </a>
          <a class="btn btn-sm btn-outline" href="/auth/login">
            Launch Web App in Browser
          </a>
        </div>

        <ul class="download-specs-list">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> macOS Apple Silicon (M1/M2/M3) & Intel</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Windows 10 & 11 64-bit installer</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Auto-updates in background</li>
        </ul>
      </div>

      <!-- 4. Web Console Card -->
      <div class="download-card reveal">
        <div class="download-platform-icon" style="background:#ECFEFF;color:#0891B2">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="2" y1="12" x2="22" y2="12"></line>
            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
          </svg>
        </div>
        <span class="badge badge-primary" style="font-size:0.72rem;margin-bottom:0.5rem">Cloud Browser Edition</span>
        <h3>Web Console</h3>
        <p>Instant access with zero downloads required. Open Chrome, Safari, Edge, or Firefox and manage your operations in seconds.</p>
        
        <div style="display:flex;flex-direction:column;gap:8px;width:100%;margin-top:auto">
          <a class="btn btn-primary" href="/auth/login">
            Open Web App
          </a>
          <a class="btn btn-sm btn-outline" href="/auth/register">
            Create Free Account
          </a>
        </div>

        <ul class="download-specs-list">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Zero installation, instant load</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Chrome, Safari, Edge & Firefox</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> 256-bit TLS enterprise encryption</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- QR Code Quick Connect Section -->
<section class="section section-alt" style="margin-top:2.5rem;background:#F8FAFC;border-top:1px solid #E2E8F0;border-bottom:1px solid #E2E8F0;padding:4rem 0">
  <div class="container" style="max-width:840px">
    <div style="background:#FFFFFF;border:1px solid #E5E7EB;border-radius:22px;padding:2.5rem;box-shadow:0 6px 25px rgba(0,0,0,0.04);display:grid;grid-template-columns:repeat(auto-fit, minmax(280px, 1fr));gap:2.5rem;align-items:center;">
      <div>
        <span class="badge badge-primary" style="margin-bottom:0.75rem">INSTANT MOBILE SYNC</span>
        <h2 style="font-size:1.65rem;font-weight:800;color:#111827;margin:0 0 0.75rem">Scan to open on your phone</h2>
        <p style="color:#4B5563;font-size:0.95rem;line-height:1.6;margin:0 0 1.5rem">
          Point your iPhone or Android camera at this QR code to instantly launch the InboxWa mobile portal or save it directly to your home screen as a high-performance web app.
        </p>
        <div style="display:flex;gap:0.75rem;align-items:center">
          <div style="width:10px;height:10px;border-radius:50%;background:#10B981"></div>
          <span style="font-size:0.85rem;font-weight:600;color:#111827">Multi-session concurrency active</span>
        </div>
      </div>

      <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;background:#FAFAFA;border:1px dashed #D1D5DB;border-radius:18px;padding:2rem;">
        <!-- Clean SVG QR Code Graphic -->
        <svg width="160" height="160" viewBox="0 0 100 100" fill="none" style="background:#fff;padding:8px;border-radius:12px;box-shadow:0 2px 8px rgba(0,0,0,0.08)">
          <!-- Corner Squares -->
          <rect x="10" y="10" width="24" height="24" rx="3" fill="#111827"/>
          <rect x="14" y="14" width="16" height="16" fill="#fff"/>
          <rect x="18" y="18" width="8" height="8" fill="#7C3AED"/>

          <rect x="66" y="10" width="24" height="24" rx="3" fill="#111827"/>
          <rect x="70" y="14" width="16" height="16" fill="#fff"/>
          <rect x="74" y="18" width="8" height="8" fill="#7C3AED"/>

          <rect x="10" y="66" width="24" height="24" rx="3" fill="#111827"/>
          <rect x="14" y="70" width="16" height="16" fill="#fff"/>
          <rect x="18" y="74" width="8" height="8" fill="#7C3AED"/>

          <!-- QR Data Dots -->
          <rect x="42" y="14" width="6" height="6" fill="#111827"/>
          <rect x="52" y="14" width="6" height="6" fill="#111827"/>
          <rect x="42" y="24" width="6" height="6" fill="#7C3AED"/>
          <rect x="52" y="24" width="6" height="6" fill="#111827"/>
          
          <rect x="14" y="42" width="6" height="6" fill="#111827"/>
          <rect x="24" y="42" width="6" height="6" fill="#111827"/>
          <rect x="34" y="42" width="6" height="6" fill="#7C3AED"/>
          <rect x="44" y="42" width="6" height="6" fill="#111827"/>
          <rect x="54" y="42" width="6" height="6" fill="#111827"/>
          <rect x="64" y="42" width="6" height="6" fill="#7C3AED"/>
          <rect x="74" y="42" width="6" height="6" fill="#111827"/>
          <rect x="84" y="42" width="6" height="6" fill="#111827"/>

          <rect x="42" y="52" width="6" height="6" fill="#111827"/>
          <rect x="52" y="52" width="6" height="6" fill="#7C3AED"/>
          <rect x="42" y="62" width="6" height="6" fill="#111827"/>
          <rect x="52" y="62" width="6" height="6" fill="#111827"/>

          <rect x="42" y="74" width="6" height="6" fill="#7C3AED"/>
          <rect x="52" y="74" width="6" height="6" fill="#111827"/>
          <rect x="64" y="74" width="6" height="6" fill="#111827"/>
          <rect x="74" y="64" width="6" height="6" fill="#7C3AED"/>
          <rect x="84" y="74" width="6" height="6" fill="#111827"/>
          <rect x="74" y="84" width="6" height="6" fill="#111827"/>
        </svg>
        <span style="font-size:0.75rem;font-weight:700;color:#6B7280;margin-top:0.75rem">Scan with iOS Camera or Google Lens</span>
      </div>
    </div>
  </div>
</section>

<!-- Enterprise Security & Architecture Callout -->
<section class="section" style="padding-top:3.5rem">
  <div class="container" style="max-width:840px;text-align:center">
    <span class="badge badge-primary" style="margin-bottom:0.75rem">ENTERPRISE CLOUD FOUNDATION</span>
    <h2 style="font-size:1.85rem;font-weight:800;color:#111827;margin:0 0 1rem">Zero-disconnect reliability, guaranteed</h2>
    <p style="color:#4B5563;font-size:0.95rem;line-height:1.6;margin:0 0 2rem">
      Unlike unofficial WhatsApp tools that rely on fragile QR-linked web sessions that disconnect whenever your phone drops offline, InboxWa is connected directly to the <strong>Official Meta WhatsApp Cloud API</strong>. Your incoming messages, automated replies, and team assignments run 24/7 in our cloud datacenter.
    </p>

    <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(220px, 1fr));gap:1.5rem;text-align:left">
      <div style="background:#FFFFFF;border:1px solid #E5E7EB;border-radius:14px;padding:1.25rem;">
        <div style="font-size:1.5rem;margin-bottom:0.5rem">🔒</div>
        <strong style="display:block;font-size:0.95rem;color:#111827;margin-bottom:0.25rem">SOC2 & ISO Compliant</strong>
        <p style="font-size:0.84rem;color:#6B7280;margin:0;line-height:1.5">Bank-grade data encryption in transit and at rest with role-based agent permissions.</p>
      </div>
      <div style="background:#FFFFFF;border:1px solid #E5E7EB;border-radius:14px;padding:1.25rem;">
        <div style="font-size:1.5rem;margin-bottom:0.5rem">⚡</div>
        <strong style="display:block;font-size:0.95rem;color:#111827;margin-bottom:0.25rem">Real-Time Sync</strong>
        <p style="font-size:0.84rem;color:#6B7280;margin:0;line-height:1.5">Action on one screen immediately reflects across all logged-in agent smartphones and PCs.</p>
      </div>
      <div style="background:#FFFFFF;border:1px solid #E5E7EB;border-radius:14px;padding:1.25rem;">
        <div style="font-size:1.5rem;margin-bottom:0.5rem">👥</div>
        <strong style="display:block;font-size:0.95rem;color:#111827;margin-bottom:0.25rem">Unlimited Concurrency</strong>
        <p style="font-size:0.84rem;color:#6B7280;margin:0;line-height:1.5">25+ agents can manage the same WhatsApp number simultaneously without collisions.</p>
      </div>
    </div>
  </div>
</section>

<script src="/assets/js/resources.js?v=3" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>

