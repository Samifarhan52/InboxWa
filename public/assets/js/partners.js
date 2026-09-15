(function () {
  'use strict';

  // Plan card hover highlighting
  document.querySelectorAll('.prt-plan').forEach(function (card) {
    card.addEventListener('mouseenter', function () {
      document.querySelectorAll('.prt-plan').forEach(function (c) { c.classList.remove('is-selected'); });
      card.classList.add('is-selected');
    });
  });

  // Interactive FAQ Accordion
  document.querySelectorAll('.faq-question').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = btn.closest('.faq-item');
      var ans = item ? item.querySelector('.faq-answer') : null;
      if (!ans) return;
      var isOpen = btn.classList.contains('open');

      // Close all other open answers
      document.querySelectorAll('.faq-question.open').forEach(function (otherBtn) {
        if (otherBtn !== btn) {
          otherBtn.classList.remove('open');
          var otherAns = otherBtn.closest('.faq-item') ? otherBtn.closest('.faq-item').querySelector('.faq-answer') : null;
          if (otherAns) {
            otherAns.style.maxHeight = '0px';
            otherAns.classList.remove('open');
          }
        }
      });

      if (!isOpen) {
        btn.classList.add('open');
        ans.classList.add('open');
        ans.style.maxHeight = ans.scrollHeight + 30 + 'px';
      } else {
        btn.classList.remove('open');
        ans.classList.remove('open');
        ans.style.maxHeight = '0px';
      }
    });
  });
})();
