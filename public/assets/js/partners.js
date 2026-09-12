(function () {
  'use strict';
  // All primary CTAs use .btn-demo-open which is handled by main.js (opens existing WhatsApp form widget)
  // Optional: highlight plan on hover is pure CSS
  document.querySelectorAll('.prt-plan').forEach(function (card) {
    card.addEventListener('mouseenter', function () {
      document.querySelectorAll('.prt-plan').forEach(function (c) { c.classList.remove('is-selected'); });
      card.classList.add('is-selected');
    });
  });
})();
