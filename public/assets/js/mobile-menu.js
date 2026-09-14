/**
 * HelloBotz Mobile Menu v38 — single handler, no conflicts
 */
(function () {
  'use strict';

  function boot() {
    var toggle = document.querySelector('.mobile-toggle');
    var menu = document.getElementById('mobile-menu');
    if (!toggle || !menu) return;

    // Prevent double-init
    if (menu.getAttribute('data-hb-ready') === '1') return;
    menu.setAttribute('data-hb-ready', '1');

    function openMenu() {
      menu.hidden = false;
      menu.removeAttribute('hidden');
      menu.style.display = 'block';
      menu.classList.add('is-open', 'open');
      menu.setAttribute('aria-hidden', 'false');
      toggle.classList.add('active');
      toggle.setAttribute('aria-expanded', 'true');
      document.body.classList.add('menu-open');
    }

    function closeMenu() {
      menu.classList.remove('is-open', 'open');
      menu.setAttribute('aria-hidden', 'true');
      toggle.classList.remove('active');
      toggle.setAttribute('aria-expanded', 'false');
      document.body.classList.remove('menu-open');
      // close all submenus
      var items = menu.querySelectorAll('.mobile-nav-item.is-open, .mobile-nav-item.open');
      for (var i = 0; i < items.length; i++) {
        items[i].classList.remove('is-open', 'open');
      }
      menu.style.display = 'none';
      menu.hidden = true;
      menu.setAttribute('hidden', '');
    }

    function toggleAccordion(item) {
      if (!item || !item.hasAttribute('data-accordion')) return;
      var isOpen = item.classList.contains('is-open') || item.classList.contains('open');
      // close others
      var all = menu.querySelectorAll('.mobile-nav-item[data-accordion]');
      for (var i = 0; i < all.length; i++) {
        if (all[i] !== item) all[i].classList.remove('is-open', 'open');
      }
      if (isOpen) {
        item.classList.remove('is-open', 'open');
      } else {
        item.classList.add('is-open', 'open');
      }
    }

    // Hamburger
    toggle.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      if (menu.classList.contains('is-open') || menu.classList.contains('open')) {
        closeMenu();
      } else {
        openMenu();
      }
    });

    // Backdrop close
    var bd = menu.querySelector('.mobile-backdrop');
    if (bd) {
      bd.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        closeMenu();
      });
    }

    // Close button
    var cl = menu.querySelector('.mobile-close');
    if (cl) {
      cl.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        closeMenu();
      });
    }

    // Escape
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && (menu.classList.contains('is-open') || menu.classList.contains('open'))) {
        closeMenu();
      }
    });

    // Accordion + link clicks via delegation (capture phase for reliability)
    menu.addEventListener('click', function (e) {
      var t = e.target;

      // Accordion button
      var btn = t.closest('button.mobile-nav-link');
      if (btn && menu.contains(btn)) {
        e.preventDefault();
        e.stopPropagation();
        var item = btn.closest('.mobile-nav-item');
        toggleAccordion(item);
        return;
      }

      // Submenu / action links → navigate & close
      var link = t.closest('a');
      if (link && menu.contains(link) && link.getAttribute('href')) {
        // allow navigation; close drawer
        closeMenu();
      }
    }, false);

    // Extra: direct bind each accordion button (touch devices)
    var btns = menu.querySelectorAll('button.mobile-nav-link');
    for (var i = 0; i < btns.length; i++) {
      (function (btn) {
        btn.addEventListener('click', function (e) {
          e.preventDefault();
          e.stopPropagation();
          toggleAccordion(btn.closest('.mobile-nav-item'));
        });
      })(btns[i]);
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();
