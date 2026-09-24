/**
 * HELLOBOTZ - Pure Mascot Entry Reveal Runtime (entry-reveal.js)
 * Plays ONLY on initial visit to the website or when arriving at any page via a shared link / external referral.
 * Automatically bypassed on all internal page navigations.
 * Fast, snappy 650ms cheerful greeting animation that smoothly reveals the landing page.
 */
(function () {
  'use strict';

  var isInternalNav = false;
  try {
    if (document.referrer) {
      var refHost = new URL(document.referrer).hostname;
      if (refHost === window.location.hostname || (refHost && window.location.hostname && refHost.endsWith(window.location.hostname))) {
        isInternalNav = true;
      }
    }
  } catch (e) {}

  var hasSeen = false;
  try {
    hasSeen = sessionStorage.getItem('hb_entry_seen') === '1';
  } catch (e) {}

  // If already seen in this browsing session OR navigating internally from another page on the website, immediately bypass
  if (hasSeen || isInternalNav) {
    try { sessionStorage.setItem('hb_entry_seen', '1'); } catch (e) {}
    document.documentElement.classList.add('hb-entry-skip');
    var el = document.getElementById('hb-entry-reveal');
    if (el) {
      el.style.display = 'none';
      if (el.parentNode) el.parentNode.removeChild(el);
    }
    return;
  }

  // Initial site visit or direct shared link entry: mark as seen and show quick snappy reveal
  try {
    sessionStorage.setItem('hb_entry_seen', '1');
  } catch (e) {}

  function initEntryReveal() {
    var overlay = document.getElementById('hb-entry-reveal');
    if (!overlay) return;

    if (document.documentElement.classList.contains('hb-entry-skip')) {
      overlay.style.display = 'none';
      if (overlay.parentNode) overlay.parentNode.removeChild(overlay);
      return;
    }

    var dismissed = false;

    function dismiss() {
      if (dismissed) return;
      dismissed = true;
      overlay.classList.add('hb-entry-done');
      setTimeout(function () {
        overlay.style.display = 'none';
        if (overlay.parentNode) {
          overlay.parentNode.removeChild(overlay);
        }
      }, 250);
    }

    // Ultra-snappy auto-dismiss in 650ms (quick cheerful greeting & immediate reveal)
    setTimeout(dismiss, 650);

    // Instant dismiss on any user interaction
    overlay.addEventListener('click', dismiss);
    overlay.addEventListener('touchstart', dismiss, { passive: true });
    window.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' || e.key === ' ' || e.key === 'Enter') {
        dismiss();
      }
    }, { once: true });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initEntryReveal);
  } else {
    initEntryReveal();
  }
})();
