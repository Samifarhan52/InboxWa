<?php
require_once dirname(__DIR__) . '/config/cms.php';
$waWidgetNum = cms_setting('support_whatsapp', '918050854445');
$waWidgetPhone = cms_setting('phone_number', '+91 80508 54445');
$waWidgetSalesMail = cms_setting('sales_email', 'mail@inboxwa.com');
$waWidgetSupportMail = cms_setting('support_email', 'support@inboxwa.com');
?>
<div class="wa-widget" id="wa-widget">
  <div class="wa-widget-panel" role="dialog" aria-label="Contact options">
    <div class="wa-widget-header" style="background:linear-gradient(135deg,#8B5CF6 0%,#6366F1 50%,#06B6D4 100%);color:#fff;padding:16px 18px;border-radius:18px 18px 0 0;display:flex;align-items:center;gap:12px;">
      <div style="width:38px;height:38px;border-radius:50%;background:rgba(255,255,255,0.2);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:800;font-size:0.8rem;flex-shrink:0;">
        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/><path d="M8 10h.01M12 10h.01M16 10h.01"/></svg>
      </div>
      <div>
        <h4 style="margin:0;font-size:1rem;font-weight:800;color:#fff;">InboxWa AI</h4>
        <span style="font-size:0.75rem;color:rgba(255,255,255,0.9);display:flex;align-items:center;gap:4px;"><i style="width:6px;height:6px;border-radius:50%;background:#10B981;display:inline-block;"></i> We typically reply instantly</span>
      </div>
    </div>
    
    <div class="wa-widget-body" style="padding:12px;display:flex;flex-direction:column;gap:8px;background:#FFFFFF;">
      <!-- WHATSAPP DIRECT -->
      <a href="https://wa.me/<?php echo urlencode($waWidgetNum); ?>?text=Hi%20InboxWa%2C%20I%20am%20interested%20in%20your%20WhatsApp%20Automation%20and%20AI%20Chatbot%20services." class="wa-widget-action" target="_blank" rel="noopener" style="display:flex;align-items:center;gap:12px;padding:10px 12px;border-radius:12px;text-decoration:none;color:#0F172A;font-weight:600;font-size:0.88rem;background:#F8FAFC;border:1px solid #E2E8F0;transition:all 0.2s;">
        <span class="action-icon whatsapp" style="width:32px;height:32px;border-radius:10px;background:#DCFCE7;color:#16A34A;display:flex;align-items:center;justify-content:center;flex-shrink:0;"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></span>
        WhatsApp
      </a>

      <!-- CALL NOW -->
      <a href="tel:<?php echo htmlspecialchars($waWidgetNum); ?>" class="wa-widget-action" style="display:flex;align-items:center;gap:12px;padding:10px 12px;border-radius:12px;text-decoration:none;color:#0F172A;font-weight:600;font-size:0.88rem;background:#F8FAFC;border:1px solid #E2E8F0;transition:all 0.2s;">
        <span class="action-icon call" style="width:32px;height:32px;border-radius:10px;background:#E0F2FE;color:#0284C7;display:flex;align-items:center;justify-content:center;flex-shrink:0;"><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></span>
        Call Now
      </a>

      <!-- ENQUIRY MAIL -->
      <a href="mailto:<?php echo htmlspecialchars($waWidgetSalesMail); ?>" class="wa-widget-action" style="display:flex;align-items:center;gap:12px;padding:10px 12px;border-radius:12px;text-decoration:none;color:#0F172A;font-weight:600;font-size:0.88rem;background:#F8FAFC;border:1px solid #E2E8F0;transition:all 0.2s;">
        <span class="action-icon email" style="width:32px;height:32px;border-radius:10px;background:#F3E8FF;color:#8B5CF6;display:flex;align-items:center;justify-content:center;flex-shrink:0;"><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/></svg></span>
        Enquiry
      </a>

      <!-- SUPPORT MAIL -->
      <a href="mailto:<?php echo htmlspecialchars($waWidgetSupportMail); ?>" class="wa-widget-action" style="display:flex;align-items:center;gap:12px;padding:10px 12px;border-radius:12px;text-decoration:none;color:#0F172A;font-weight:600;font-size:0.88rem;background:#F8FAFC;border:1px solid #E2E8F0;transition:all 0.2s;">
        <span class="action-icon support" style="width:32px;height:32px;border-radius:10px;background:#ECFEFF;color:#06B6D4;display:flex;align-items:center;justify-content:center;flex-shrink:0;"><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 10a6 6 0 00-12 0v8h12v-8z"/><path d="M4 14h2M18 14h2"/></svg></span>
        Support
      </a>

      <!-- BOOK DEMO -->
      <button type="button" class="wa-widget-action btn-demo-open" style="display:flex;align-items:center;gap:12px;padding:10px 12px;border-radius:12px;border:1px solid #E2E8F0;background:#F8FAFC;color:#0F172A;font-weight:600;font-size:0.88rem;cursor:pointer;width:100%;text-align:left;">
        <span class="action-icon demo" style="width:32px;height:32px;border-radius:10px;background:#F1F5F9;color:#475569;display:flex;align-items:center;justify-content:center;flex-shrink:0;"><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span>
        Book Demo
      </button>

      <!-- REQUEST CALLBACK -->
      <button type="button" class="wa-widget-action btn-callback-open" style="display:flex;align-items:center;gap:12px;padding:10px 12px;border-radius:12px;border:1px solid #E2E8F0;background:#F8FAFC;color:#0F172A;font-weight:600;font-size:0.88rem;cursor:pointer;width:100%;text-align:left;">
        <span class="action-icon call" style="width:32px;height:32px;border-radius:10px;background:#FEF3C7;color:#D97706;display:flex;align-items:center;justify-content:center;flex-shrink:0;"><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg></span>
        Request Callback
      </button>

      <!-- PRICING -->
      <a href="/pricing" class="wa-widget-action" style="display:flex;align-items:center;gap:12px;padding:10px 12px;border-radius:12px;text-decoration:none;color:#0F172A;font-weight:600;font-size:0.88rem;background:#F8FAFC;border:1px solid #E2E8F0;transition:all 0.2s;">
        <span class="action-icon pricing" style="width:32px;height:32px;border-radius:10px;background:#DCFCE7;color:#16A34A;display:flex;align-items:center;justify-content:center;flex-shrink:0;"><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></span>
        Pricing &amp; Plans
      </a>
    </div>
  </div>

  <!-- FLOATING BOT LAUNCHER BUTTON WITH INBOXWA LOGO Z GRADIENT -->
  <button class="wa-widget-btn" aria-label="Open contact widget" type="button" style="width:60px;height:60px;border-radius:50%;background:linear-gradient(135deg,#8B5CF6 0%,#6366F1 50%,#06B6D4 100%);color:#fff;border:none;box-shadow:0 10px 25px rgba(139,92,246,0.45);cursor:pointer;display:flex;align-items:center;justify-content:center;transition:all 0.3s ease;">
    <svg class="icon-wa" viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/><path d="M8 10h.01M12 10h.01M16 10h.01"/></svg>
    <svg class="icon-close" viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2.5" style="display:none;"><path d="M18 6L6 18M6 6l12 12"/></svg>
  </button>
</div>
