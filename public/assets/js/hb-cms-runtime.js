/** HelloBotz Dynamic CMS Runtime - Generated via Admin **/
window.__HELLOBOTZ_SETTINGS__ = {
  "logo_light_url": "/assets/images/logo-light.png",
  "logo_dark_url": "/assets/images/logo-dark.png",
  "logo_width": "180px",
  "logo_height": "44px",
  "bot_avatar_url": "/assets/images/hellobotz-avatar.png",
  "brochure_url": "/assets/docs/hellobotz-brochure.pdf",
  "office_address": "Bangalore Karnataka 560030",
  "social_facebook": "https://www.facebook.com/share/19EDrKbF2P/?mibextid=wwXIfr",
  "social_instagram": "https://www.instagram.com/hellobotz_official?igsi=MXdhY2FkY3AzcmF0ZA%3D%3D&utm_source=qr",
  "social_linkedin": "https://www.linkedin.com/company/hellobotz/",
  "social_youtube": "https://www.youtube.com/@Hellobotz",
  "social_whatsapp": "https://wa.me/918050854445"
};
(function() {
  var s = window.__HELLOBOTZ_SETTINGS__ || {};
  function apply() {
    if (s.logo_width) document.documentElement.style.setProperty('--site-logo-width', s.logo_width.indexOf('px') > -1 ? s.logo_width : (s.logo_width + 'px'));
    if (s.logo_height) document.documentElement.style.setProperty('--site-logo-height', s.logo_height.indexOf('px') > -1 ? s.logo_height : (s.logo_height + 'px'));
    if (s.logo_light_url) document.querySelectorAll('.logo-img-light').forEach(function(el){ if (el.src !== s.logo_light_url) el.src = s.logo_light_url; });
    if (s.logo_dark_url) document.querySelectorAll('.logo-img-dark').forEach(function(el){ if (el.src !== s.logo_dark_url) el.src = s.logo_dark_url; });
    if (s.bot_avatar_url) document.querySelectorAll('.cw-wa-avatar-img, .header-avatar-img, .hellobotz-avatar-img').forEach(function(el){ if (el.src !== s.bot_avatar_url) el.src = s.bot_avatar_url; });
    if (s.brochure_url) document.querySelectorAll('a[href*="brochure"], .btn-download-brochure, a.btn-brochure').forEach(function(el){ el.href = s.brochure_url; el.target = '_blank'; });
    if (s.office_address) document.querySelectorAll('.footer-address-text, [data-cms="office_address"]').forEach(function(el){ el.textContent = s.office_address; });
    if (s.social_facebook) document.querySelectorAll('.footer-social-fb').forEach(function(el){ el.href = s.social_facebook; });
    if (s.social_instagram) document.querySelectorAll('.footer-social-ig').forEach(function(el){ el.href = s.social_instagram; });
    if (s.social_linkedin) document.querySelectorAll('.footer-social-li').forEach(function(el){ el.href = s.social_linkedin; });
    if (s.social_youtube) document.querySelectorAll('.footer-social-yt').forEach(function(el){ el.href = s.social_youtube; });
    if (s.social_whatsapp) document.querySelectorAll('.footer-social-wa').forEach(function(el){ el.href = s.social_whatsapp; });
  }
  if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', apply); } else { apply(); }
})();
