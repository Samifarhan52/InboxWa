/**
 * HELLOBOTZ - Pure Mascot Entry Reveal Runtime (entry-reveal.js)
 * Plays once per session (on first site visit or direct shared link entry).
 * Fast, snappy 1.1-second cheerful greeting animation that smoothly reveals the content.
 * Automatically bypassed on all subsequent internal page navigations.
 */
(function () {
  'use strict';

  var hasSeen = false;
  try {
    hasSeen = sessionStorage.getItem('hb_entry_seen') === '1';
  } catch (e) {}

  // If already seen in this browsing session, immediately bypass and remove overlay
  if (hasSeen) {
    document.documentElement.classList.add('hb-entry-skip');
    var el = document.getElementById('hb-entry-reveal');
    if (el) {
      el.style.display = 'none';
      if (el.parentNode) el.parentNode.removeChild(el);
    }
    return;
  }

  // First visit in session or external shared link entry: mark as seen and play snappy reveal
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
      }, 350);
    }

    // Snappy auto-dismiss in 1.1s (quick cheerful wave & instant reveal)
    setTimeout(dismiss, 1100);

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
