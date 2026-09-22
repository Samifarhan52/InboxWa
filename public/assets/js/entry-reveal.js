/**
 * HELLOBOTZ - Pure Mascot Entry Reveal Runtime (entry-reveal.js)
 * Automatically plays a 2.4-second cheerful waving entry animation
 * and smoothly reveals the website content underneath.
 */
(function () {
  'use strict';

  function initEntryReveal() {
    var overlay = document.getElementById('hb-entry-reveal');
    if (!overlay) return;

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
      }, 600);
    }

    // Auto-dismiss after 2.4 seconds
    setTimeout(dismiss, 2400);

    // Instant dismiss on user interaction
    overlay.addEventListener('click', dismiss);
    overlay.addEventListener('touchstart', dismiss, { passive: true });
    window.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' || e.key === ' ') {
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
