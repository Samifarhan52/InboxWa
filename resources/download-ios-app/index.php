<?php
$basePath = '../../';
$pageTitle = 'InboxWa for iPhone & iPad — Official iOS WhatsApp Business App';
$pageDescription = 'Experience InboxWa on iOS. Real-time Apple push notifications, Face ID protection, lock screen widgets, and multi-agent shared inbox for iPhone & iPad.';
$canonicalUrl = 'https://inboxwa.com/resources/download-ios-app/';
$appLinks = require __DIR__ . '/../../config/app-links.php';
include __DIR__ . '/../../includes/header.php';

$iosUrl = trim($appLinks['ios'] ?? '') ?: 'https://apps.apple.com/app/inboxwa-business';
?>
<link rel="stylesheet" href="/assets/css/resources.css?v=2">

<nav class="container res-breadcrumbs" aria-label="Breadcrumb">
  <ol>
    <li><a href="/">Home</a></li>
    <li><a href="/resources/download-app/">Download Apps</a></li>
    <li aria-current="page">iOS App</li>
  </ol>
</nav>

<!-- Hero Section with Apple Showcase Styling -->
<section class="res-hero" style="background:radial-gradient(ellipse at top, rgba(139,92,246,0.15), transparent 70%), #FFFFFF;">
  <div class="container" style="max-width:920px">
    <span class="res-badge" style="background:#F3F4F6;color:#111827;border-color:#E5E7EB">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M15.97 6.37c.62-.75 1.04-1.8 0.92-2.85-.9.04-1.99.6-2.61 1.34-.55.63-1.03 1.68-.9 2.69 1 .08 2.01-.51 2.59-1.18z"/></svg>
      Designed for Apple Silicon &amp; iOS 17/18
    </span>
    <h1 style="font-size:clamp(2.2rem, 4vw, 3.25rem);letter-spacing:-0.03em;color:#0F172A">InboxWa for iPhone &amp; iPad</h1>
    <p style="max-width:640px;margin:0 auto 1.75rem;font-size:1.1rem;color:#475569;line-height:1.6">
      The fastest, most elegant mobile experience for WhatsApp Business teams. Respond to inquiries, view customer purchase histories, and assign tickets with native iOS responsiveness.
    </p>

    <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="<?php echo htmlspecialchars($iosUrl); ?>" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:8px">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M15.97 6.37c.62-.75 1.04-1.8 0.92-2.85-.9.04-1.99.6-2.61 1.34-.55.63-1.03 1.68-.9 2.69 1 .08 2.01-.51 2.59-1.18z"/></svg>
        Download on the App Store
      </a>
      <a class="btn btn-outline btn-lg" href="#pwa-steps">Add to Home Screen (Instant PWA) &darr;</a>
    </div>
  </div>
</section>

<!-- Visual iPhone 16 Pro Mockup Section -->
<section class="section" style="padding-top:1rem;padding-bottom:3rem">
  <div class="container" style="max-width:440px">
    <!-- iPhone Outer Shell -->
    <div style="background:#1E293B;padding:12px;border-radius:48px;box-shadow:0 25px 60px -15px rgba(15,23,42,0.35), 0 0 0 1px rgba(255,255,255,0.1);position:relative">
      <!-- Screen Inner -->
      <div style="background:#FFFFFF;border-radius:38px;overflow:hidden;border:1px solid #CBD5E1">
        
        <!-- Status Bar & Dynamic Island -->
        <div style="background:#F8FAFC;padding:12px 20px 8px;display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid #F1F5F9">
          <span style="font-size:0.75rem;font-weight:700;color:#0F172A">9:41</span>
          <!-- Dynamic Island Pill -->
          <div style="width:78px;height:20px;background:#0F172A;border-radius:20px;display:flex;align-items:center;justify-content:center">
            <div style="width:7px;height:7px;border-radius:50%;background:#1E293B;margin-left:auto;margin-right:8px"></div>
          </div>
          <div style="display:flex;gap:4px;align-items:center">
            <svg width="14" height="12" viewBox="0 0 24 24" fill="#0F172A"><path d="M12 3c-4.97 0-9 4.03-9 9 0 2.12.74 4.07 1.97 5.61L4.35 21l3.52-.92C9.36 20.64 10.64 21 12 21c4.97 0 9-4.03 9-9s-4.03-9-9-9z"/></svg>
            <span style="font-size:0.7rem;font-weight:700;color:#0F172A">100%</span>
          </div>
        </div>

        <!-- App Header Bar -->
        <div style="padding:12px 16px;background:#FFFFFF;display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid #F1F5F9">
          <div style="display:flex;align-items:center;gap:10px">
            <div style="width:34px;height:34px;border-radius:10px;background:linear-gradient(135deg,#8B5CF6,#06B6D4);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:0.85rem">IW</div>
            <div>
              <strong style="display:block;font-size:0.95rem;color:#0F172A">InboxWa</strong>
              <span style="font-size:0.7rem;color:#10B981;font-weight:600">● Cloud Connected</span>
            </div>
          </div>
          <span style="background:#F5F3FF;color:#7C3AED;font-size:0.7rem;font-weight:700;padding:3px 8px;border-radius:999px">14 Unread</span>
        </div>

        <!-- Chat Conversations List -->
        <div style="display:flex;flex-direction:column">
          <!-- Chat 1 -->
          <div style="padding:12px 16px;display:flex;gap:12px;align-items:center;border-bottom:1px solid #F8FAFC;background:#FBFBFE">
            <div style="width:42px;height:42px;border-radius:50%;background:#FCE7F3;color:#BE185D;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:0.85rem;flex-shrink:0">AK</div>
            <div style="flex:1;min-width:0">
              <div style="display:flex;justify-content:space-between;align-items:baseline">
                <strong style="font-size:0.88rem;color:#0F172A">Aanya Kapoor</strong>
                <span style="font-size:0.68rem;color:#94A3B8">2m ago</span>
              </div>
              <p style="margin:2px 0 0;font-size:0.78rem;color:#475569;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">Hi! Can I confirm the delivery slot for tomorrow?</p>
            </div>
            <span style="width:18px;height:18px;border-radius:50%;background:#7C3AED;color:#fff;font-size:0.65rem;font-weight:800;display:flex;align-items:center;justify-content:center">1</span>
          </div>

          <!-- Chat 2 -->
          <div style="padding:12px 16px;display:flex;gap:12px;align-items:center;border-bottom:1px solid #F8FAFC">
            <div style="width:42px;height:42px;border-radius:50%;background:#E0E7FF;color:#4338CA;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:0.85rem;flex-shrink:0">RM</div>
            <div style="flex:1;min-width:0">
              <div style="display:flex;justify-content:space-between;align-items:baseline">
                <strong style="font-size:0.88rem;color:#0F172A">Rahul Mehta</strong>
                <span style="font-size:0.68rem;color:#94A3B8">14m ago</span>
              </div>
              <p style="margin:2px 0 0;font-size:0.78rem;color:#64748B;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">Payment confirmed! Order #4821</p>
            </div>
          </div>

          <!-- Chat 3 -->
          <div style="padding:12px 16px;display:flex;gap:12px;align-items:center;border-bottom:1px solid #F8FAFC">
            <div style="width:42px;height:42px;border-radius:50%;background:#ECFDF5;color:#047857;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:0.85rem;flex-shrink:0">PS</div>
            <div style="flex:1;min-width:0">
              <div style="display:flex;justify-content:space-between;align-items:baseline">
                <strong style="font-size:0.88rem;color:#0F172A">Priya Sharma</strong>
                <span style="font-size:0.68rem;color:#94A3B8">1h ago</span>
              </div>
              <p style="margin:2px 0 0;font-size:0.78rem;color:#64748B;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">Thanks! The bot helped me book my slot.</p>
            </div>
          </div>
        </div>

        <!-- iOS Bottom Tab Bar -->
        <div style="background:#F8FAFC;border-top:1px solid #E2E8F0;padding:10px 24px;display:flex;justify-content:space-between;align-items:center">
          <div style="text-align:center;color:#7C3AED">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/></svg>
            <span style="display:block;font-size:0.65rem;font-weight:700">Inbox</span>
          </div>
          <div style="text-align:center;color:#94A3B8">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>
            <span style="display:block;font-size:0.65rem;font-weight:600">Contacts</span>
          </div>
          <div style="text-align:center;color:#94A3B8">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
            <span style="display:block;font-size:0.65rem;font-weight:600">Settings</span>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Native iOS Highlights Grid -->
<section class="section" style="padding-top:1.5rem">
  <div class="container">
    <div class="section-header reveal" style="text-align:center;margin-bottom:2.5rem">
      <span class="badge badge-primary">IOS CAPABILITIES</span>
      <h2 style="font-size:2rem;font-weight:800;color:#0F172A">Crafted for the Apple Ecosystem</h2>
      <p class="lead">Engineered specifically to take full advantage of iOS hardware, security, and multitasking.</p>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(300px, 1fr));gap:1.75rem">
      
      <div class="card reveal" style="padding:1.75rem;border-radius:18px;border:1px solid #E2E8F0;">
        <div style="width:48px;height:48px;border-radius:12px;background:#F5F3FF;color:#7C3AED;display:flex;align-items:center;justify-content:center;font-size:1.5rem;margin-bottom:1rem">🔔</div>
        <h3 style="font-size:1.2rem;font-weight:800;color:#0F172A;margin:0 0 0.5rem">Instant APNs Push Alerts</h3>
        <p style="color:#64748B;font-size:0.92rem;line-height:1.6;margin:0">
          Integrated with Meta Cloud API and Apple Push Notification service. Receive critical message notifications within milliseconds with rich action previews.
        </p>
      </div>

      <div class="card reveal" style="padding:1.75rem;border-radius:18px;border:1px solid #E2E8F0;">
        <div style="width:48px;height:48px;border-radius:12px;background:#EFF6FF;color:#2563EB;display:flex;align-items:center;justify-content:center;font-size:1.5rem;margin-bottom:1rem">🛡️</div>
        <h3 style="font-size:1.2rem;font-weight:800;color:#0F172A;margin:0 0 0.5rem">Face ID &amp; Touch ID Security</h3>
        <p style="color:#64748B;font-size:0.92rem;line-height:1.6;margin:0">
          Protect sensitive enterprise conversations and payment queries behind iOS Secure Enclave biometrics. Lock chats automatically upon app minimization.
        </p>
      </div>

      <div class="card reveal" style="padding:1.75rem;border-radius:18px;border:1px solid #E2E8F0;">
        <div style="width:48px;height:48px;border-radius:12px;background:#ECFDF5;color:#059669;display:flex;align-items:center;justify-content:center;font-size:1.5rem;margin-bottom:1rem">📱</div>
        <h3 style="font-size:1.2rem;font-weight:800;color:#0F172A;margin:0 0 0.5rem">iPad Split View &amp; Multitasking</h3>
        <p style="color:#64748B;font-size:0.92rem;line-height:1.6;margin:0">
          Full iPadOS optimization with Stage Manager, Split View, and Slide Over. Run InboxWa side-by-side with your CRM, inventory spreadsheets, or notes.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- PWA Add-To-Home-Screen Step-by-Step Guide -->
<section class="section section-alt" id="pwa-steps" style="margin-top:2.5rem;background:#F8FAFC;border-top:1px solid #E2E8F0;border-bottom:1px solid #E2E8F0;padding:4.5rem 0">
  <div class="container" style="max-width:860px">
    <div style="text-align:center;margin-bottom:2.5rem">
      <span class="badge badge-primary">FAST SETUP</span>
      <h2 style="font-size:1.85rem;font-weight:800;color:#0F172A;margin:0.5rem 0 0.5rem">How to install InboxWa on iOS in 30 seconds</h2>
      <p style="color:#64748B;font-size:0.95rem">Get full-screen, native app speed without waiting for store reviews.</p>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(240px, 1fr));gap:1.5rem">
      <!-- Step 1 -->
      <div style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:16px;padding:1.75rem;text-align:center;box-shadow:0 2px 8px rgba(0,0,0,0.03)">
        <div style="width:36px;height:36px;border-radius:50%;background:#8B5CF6;color:#fff;font-weight:800;display:flex;align-items:center;justify-content:center;margin:0 auto 1rem">1</div>
        <strong style="display:block;font-size:1rem;color:#0F172A;margin-bottom:0.4rem">Open in Safari</strong>
        <p style="font-size:0.86rem;color:#64748B;line-height:1.5;margin:0">Visit <strong>inboxwa.com/auth/login</strong> on your iPhone or iPad using Apple Safari.</p>
      </div>

      <!-- Step 2 -->
      <div style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:16px;padding:1.75rem;text-align:center;box-shadow:0 2px 8px rgba(0,0,0,0.03)">
        <div style="width:36px;height:36px;border-radius:50%;background:#8B5CF6;color:#fff;font-weight:800;display:flex;align-items:center;justify-content:center;margin:0 auto 1rem">2</div>
        <strong style="display:block;font-size:1rem;color:#0F172A;margin-bottom:0.4rem">Tap the Share Icon</strong>
        <p style="font-size:0.86rem;color:#64748B;line-height:1.5;margin:0">Tap the Safari Share button (the square with an arrow pointing up ⎋) in the bottom toolbar.</p>
      </div>

      <!-- Step 3 -->
      <div style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:16px;padding:1.75rem;text-align:center;box-shadow:0 2px 8px rgba(0,0,0,0.03)">
        <div style="width:36px;height:36px;border-radius:50%;background:#8B5CF6;color:#fff;font-weight:800;display:flex;align-items:center;justify-content:center;margin:0 auto 1rem">3</div>
        <strong style="display:block;font-size:1rem;color:#0F172A;margin-bottom:0.4rem">Add to Home Screen</strong>
        <p style="font-size:0.86rem;color:#64748B;line-height:1.5;margin:0">Select <strong>"Add to Home Screen"</strong>. The InboxWa app icon will appear alongside your native apps!</p>
      </div>
    </div>

    <div style="text-align:center;margin-top:2.5rem">
      <a href="/auth/login" class="btn btn-primary btn-lg">Launch InboxWa Web App</a>
    </div>
  </div>
</section>

<!-- System Compatibility Specs -->
<section class="section" style="padding-top:3rem">
  <div class="container" style="max-width:760px">
    <div style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:18px;padding:2rem;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:1.5rem">
      <div>
        <h4 style="margin:0 0 0.25rem;font-size:1.05rem;color:#0F172A">System Compatibility</h4>
        <p style="margin:0;font-size:0.88rem;color:#64748B">Requires iOS 15.0 or later, iPadOS 15.0+, or macOS 12.0+ (Apple Silicon).</p>
      </div>
      <a class="btn btn-sm btn-outline" href="/resources/help-center/">Contact Support &rarr;</a>
    </div>
  </div>
</section>

<script src="/assets/js/resources.js?v=2" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>

