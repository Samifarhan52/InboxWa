(function () {
  'use strict';

  // 1. Partnership Program Tabs (point_1, point_2, point_3)
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

  // 2. Interactive FAQ Accordion
  function initFaqAccordion() {
    var faqQuestions = document.querySelectorAll('.custom-faq-accordion .faq-question, .faq-question');
    if (!faqQuestions.length) return;

    faqQuestions.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var item = btn.closest('.faq-item');
        var ans = item ? item.querySelector('.faq-answer') : null;
        if (!ans) return;
        var isOpen = btn.classList.contains('open');

        // Close all other open answers
        document.querySelectorAll('.custom-faq-accordion .faq-question.open, .faq-question.open').forEach(function (otherBtn) {
          if (otherBtn !== btn) {
            otherBtn.classList.remove('open');
            otherBtn.setAttribute('aria-expanded', 'false');
            var otherAns = otherBtn.closest('.faq-item') ? otherBtn.closest('.faq-item').querySelector('.faq-answer') : null;
            if (otherAns) {
              otherAns.style.maxHeight = '0px';
              otherAns.classList.remove('open');
              otherAns.setAttribute('aria-hidden', 'true');
            }
          }
        });

        if (!isOpen) {
          btn.classList.add('open');
          btn.setAttribute('aria-expanded', 'true');
          ans.classList.add('open');
          ans.setAttribute('aria-hidden', 'false');
          ans.style.maxHeight = ans.scrollHeight + 30 + 'px';
        } else {
          btn.classList.remove('open');
          btn.setAttribute('aria-expanded', 'false');
          ans.classList.remove('open');
          ans.setAttribute('aria-hidden', 'true');
          ans.style.maxHeight = '0px';
        }
      });
    });
  }

  // 3. Touch support for feature cards (mobile tap to flip/expand)
  function initFeatureCardsTouch() {
    var cards = document.querySelectorAll('.pp-feature-card');
    if (!cards.length) return;

    cards.forEach(function (card) {
      card.addEventListener('click', function () {
        var isActive = card.classList.contains('is-active');
        cards.forEach(function (c) { c.classList.remove('is-active'); });
        if (!isActive) {
          card.classList.add('is-active');
        }
      });
    });
  }

  // 4. Demo open handlers
  function initDemoButtons() {
    document.querySelectorAll('.btn-demo-open, .book-demo-btn').forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        var modal = document.getElementById('demoModal') || document.getElementById('cwDemoModal') || document.getElementById('ppDemoModal');
        if (modal) {
          e.preventDefault();
          modal.classList.add('is-open');
          modal.setAttribute('aria-hidden', 'false');
          if (typeof modal.showModal === 'function') {
            try { modal.showModal(); } catch (err) {}
          }
        }
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function () {
      initPartnerTabs();
      initFaqAccordion();
      initFeatureCardsTouch();
      initDemoButtons();
    });
  } else {
    initPartnerTabs();
    initFaqAccordion();
    initFeatureCardsTouch();
    initDemoButtons();
  }
})();
