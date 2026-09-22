(function () {
  'use strict';

  // Partnership Program Tabs switching (point_1, point_2, point_3)
  function initPartnerTabs() {
    var tabBtns = document.querySelectorAll('.pp-tab-btn');
    if (!tabBtns.length) return;

    tabBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        tabBtns.forEach(function (b) { b.classList.remove('active'); });
        btn.classList.add('active');

        var targetId = btn.getAttribute('id');
        var content1 = document.getElementById('point_content_1');
        var content2 = document.getElementById('point_content_2');
        var content3 = document.getElementById('point_content_3');

        if (content1) content1.style.display = (targetId === 'point_1') ? 'block' : 'none';
        if (content2) content2.style.display = (targetId === 'point_2') ? 'block' : 'none';
        if (content3) content3.style.display = (targetId === 'point_3') ? 'block' : 'none';
      });
    });
  }

  // Plan card hover highlighting (if present)
  document.querySelectorAll('.prt-plan').forEach(function (card) {
    card.addEventListener('mouseenter', function () {
      document.querySelectorAll('.prt-plan').forEach(function (c) { c.classList.remove('is-selected'); });
      card.classList.add('is-selected');
    });
  });

  // Interactive FAQ Accordion
  function initFaqAccordion() {
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
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function () {
      initPartnerTabs();
      initFaqAccordion();
    });
  } else {
    initPartnerTabs();
    initFaqAccordion();
  }
})();
