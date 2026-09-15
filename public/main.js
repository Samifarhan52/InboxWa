/**
 * HelloBotz – Main JavaScript
 * Single reusable module for all pages
 */

(function () {
  'use strict';

  /* ---------- Utilities ---------- */
  const $ = (sel, ctx = document) => ctx.querySelector(sel);
  const $$ = (sel, ctx = document) => [...ctx.querySelectorAll(sel)];

  const on = (el, evt, fn, opts) => el && el.addEventListener(evt, fn, opts);
  const off = (el, evt, fn) => el && el.removeEventListener(evt, fn);

  function debounce(fn, ms = 100) {
    let t;
    return (...args) => {
      clearTimeout(t);
      t = setTimeout(() => fn(...args), ms);
    };
  }

  function throttle(fn, ms = 100) {
    let last = 0;
    return (...args) => {
      const now = Date.now();
      if (now - last >= ms) {
        last = now;
        fn(...args);
      }
    };
  }

  /* ---------- Sticky Header & Dynamic Flying Logo ---------- */
  function initHeader() {
    const header = $('.site-header');
    if (!header) return;
    const logo = $('#site-logo');
    const inner = header.querySelector('.header-inner');

    function updateLogoCoords() {
      if (!logo || !inner) return;
      const isMobile = window.innerWidth <= 1024;
      if (isMobile) {
        logo.style.setProperty('--logo-fly-x', '0px');
        logo.style.setProperty('--logo-fly-y', '0px');
        logo.style.setProperty('--logo-fly-scale', '1');
        return;
      }
      const targetLeft = 28;
      const ann = document.querySelector('.announcement-banner');
      const annOffset = (ann && window.scrollY < ann.offsetHeight) ? (ann.offsetHeight - window.scrollY) : 0;
      const targetTop = 16 + annOffset;
      const targetScale = 1.38;

      const innerRect = inner.getBoundingClientRect();
      const innerPaddingLeft = 20;
      const dockX = innerRect.left + innerPaddingLeft;
      const dockY = innerRect.top + ((innerRect.height - 40) / 2);

      const deltaX = targetLeft - dockX;
      const deltaY = targetTop - dockY;

      logo.style.setProperty('--logo-fly-x', deltaX + 'px');
      logo.style.setProperty('--logo-fly-y', deltaY + 'px');
      logo.style.setProperty('--logo-fly-scale', targetScale);
    }

    const onScroll = throttle(() => {
      if (window.scrollY > 25) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    }, 30);

    on(window, 'scroll', onScroll, { passive: true });
    on(window, 'resize', () => {
      updateLogoCoords();
      onScroll();
    }, { passive: true });

    updateLogoCoords();
    onScroll();
  }

  /* ---------- Mega Menu ---------- */
  function initMegaMenu() {
    const items = $$('.nav-item[data-mega]');
    if (!items.length) return;

    let activeItem = null;

    function closeAll() {
      items.forEach((item) => {
        item.classList.remove('open');
        const link = item.querySelector('.nav-link');
        if (link) link.setAttribute('aria-expanded', 'false');
      });
      activeItem = null;
    }

    function positionMenu(item) {
      const menu = item.querySelector('.mega-menu');
      if (!menu) return;

      menu.classList.remove('align-left', 'align-right');

      // Wide mega menus are centered to header-inner container via CSS and should never be shifted
      if (menu.classList.contains('mega-menu-channels') || 
          menu.classList.contains('mega-menu-features') || 
          menu.classList.contains('mega-menu-products') || 
          menu.classList.contains('mega-menu-solutions') || 
          menu.classList.contains('mega-menu-company') || 
          menu.classList.contains('mega-menu-panel')) {
        return;
      }

      // Small dropdowns (e.g. Partners, Company) can align if needed
      const rect = item.getBoundingClientRect();
      const menuWidth = menu.offsetWidth || 260;
      const viewportWidth = window.innerWidth;
      const padding = 16;

      const centerX = rect.left + rect.width / 2;
      const leftEdge = centerX - menuWidth / 2;
      const rightEdge = centerX + menuWidth / 2;

      if (leftEdge < padding) {
        menu.classList.add('align-left');
      } else if (rightEdge > viewportWidth - padding) {
        menu.classList.add('align-right');
      }
    }

    items.forEach((item) => {
      const link = item.querySelector('.nav-link');
      if (!link) return;

      on(link, 'click', (e) => {
        e.preventDefault();
        e.stopPropagation();

        if (activeItem === item) {
          closeAll();
          return;
        }

        closeAll();
        positionMenu(item);
        item.classList.add('open');
        link.setAttribute('aria-expanded', 'true');
        activeItem = item;
      });
    });

    // Close on outside click
    on(document, 'click', (e) => {
      if (activeItem && !activeItem.contains(e.target)) {
        closeAll();
      }
    });

    // Close on ESC
    on(document, 'keydown', (e) => {
      if (e.key === 'Escape' && activeItem) {
        closeAll();
      }
    });

    // Reposition on resize
    on(window, 'resize', debounce(() => {
      if (activeItem) positionMenu(activeItem);
    }, 150));
  }

  /* ---------- Mobile Menu ---------- */
  function initMobileMenu() {
    /* Handled by /assets/js/mobile-menu.js v35 — avoid double handlers */
    return;
  }

  /* ---------- FAQ Accordion ---------- */
  function initFAQ() {
    const items = $$('.faq-item');
    if (!items.length) return;

    items.forEach((item) => {
      const btn = item.querySelector('.faq-question');
      if (!btn) return;

      on(btn, 'click', () => {
        const isOpen = item.classList.contains('open');

        // Optional: close others (single open)
        items.forEach((other) => {
          if (other !== item) {
            other.classList.remove('open');
            const otherBtn = other.querySelector('.faq-question');
            if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
          }
        });

        item.classList.toggle('open', !isOpen);
        btn.setAttribute('aria-expanded', String(!isOpen));
      });
    });
  }

  /* ---------- Scroll Reveal ---------- */
  function initReveal() {
    const els = $$('.reveal');
    if (!els.length) return;

    if (!('IntersectionObserver' in window)) {
      els.forEach((el) => { el.classList.add('visible'); el.classList.add('is-visible'); });
      return;
    }

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );

    els.forEach((el) => observer.observe(el));
  }

  /* ---------- Counter Animation ---------- */
  function initCounters() {
    const counters = $$('[data-count]');
    if (!counters.length) return;

    function animate(el) {
      const target = parseFloat(el.getAttribute('data-count'));
      const suffix = el.getAttribute('data-suffix') || '';
      const prefix = el.getAttribute('data-prefix') || '';
      const duration = 1800;
      const start = performance.now();
      const isFloat = target % 1 !== 0;

      function update(now) {
        const progress = Math.min((now - start) / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        const current = target * eased;

        el.textContent =
          prefix +
          (isFloat ? current.toFixed(1) : Math.floor(current).toLocaleString()) +
          suffix;

        if (progress < 1) requestAnimationFrame(update);
      }

      requestAnimationFrame(update);
    }

    if (!('IntersectionObserver' in window)) {
      counters.forEach(animate);
      return;
    }

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            animate(entry.target);
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.5 }
    );

    counters.forEach((el) => observer.observe(el));
  }

  /* ---------- Button Ripple ---------- */
  function initRipple() {
    on(document, 'click', (e) => {
      const btn = e.target.closest('.btn');
      if (!btn) return;

      const rect = btn.getBoundingClientRect();
      const x = ((e.clientX - rect.left) / rect.width) * 100;
      const y = ((e.clientY - rect.top) / rect.height) * 100;
      btn.style.setProperty('--ripple-x', x + '%');
      btn.style.setProperty('--ripple-y', y + '%');
    });
  }

  /* ---------- WhatsApp Widget ---------- */
  function initWidget() {
    const widget = $('.wa-widget');
    if (!widget) return;
    // HelloBotz Robot Chatbot has its own dedicated controller
    if (widget.id === 'hellobotz-robot-widget') return;

    const btn = widget.querySelector('.wa-widget-btn');
    if (!btn) return;

    on(btn, 'click', (e) => {
      e.stopPropagation();
      widget.classList.toggle('open');
    });

    on(document, 'click', (e) => {
      if (widget.classList.contains('open') && !widget.contains(e.target)) {
        widget.classList.remove('open');
      }
    });

    on(document, 'keydown', (e) => {
      if (e.key === 'Escape' && widget.classList.contains('open')) {
        widget.classList.remove('open');
      }
    });
  }

  /* ---------- Smooth Anchor Scroll ---------- */
  function initSmoothScroll() {
    on(document, 'click', (e) => {
      const link = e.target.closest('a[href^="#"]');
      if (!link) return;

      const id = link.getAttribute('href');
      if (id === '#') return;

      const target = $(id);
      if (!target) return;

      e.preventDefault();
      const headerH = $('.site-header')?.offsetHeight || 72;
      const top = target.getBoundingClientRect().top + window.scrollY - headerH - 16;

      window.scrollTo({ top, behavior: 'smooth' });
    });
  }

  /* ---------- Init ---------- */

  /* ---------- Offer Popup (session) ---------- */
  function initOfferPopup() {
    const el = $('#offer-popup');
    if (!el) return;
    const KEY = 'hb_offer_closed';
    if (sessionStorage.getItem(KEY) === '1') return;

    function open() {
      el.hidden = false;
      requestAnimationFrame(() => el.classList.add('open'));
      document.body.classList.add('menu-open');
    }
    function close() {
      el.classList.remove('open');
      sessionStorage.setItem(KEY, '1');
      setTimeout(() => { el.hidden = true; document.body.classList.remove('menu-open'); }, 280);
    }

    // Countdown timer (resets daily in session view)
    const cd = $('#offer-countdown');
    if (cd) {
      let remaining = 24 * 60 * 60 - 1;
      const tick = () => {
        const h = String(Math.floor(remaining / 3600)).padStart(2, '0');
        const m = String(Math.floor((remaining % 3600) / 60)).padStart(2, '0');
        const s = String(remaining % 60).padStart(2, '0');
        cd.textContent = h + ':' + m + ':' + s;
        if (remaining > 0) remaining--;
      };
      tick();
      setInterval(tick, 1000);
    }

    setTimeout(open, 2200);
    el.querySelectorAll('[data-close-offer]').forEach((n) => on(n, 'click', close));
    on(document, 'keydown', (e) => { if (e.key === 'Escape' && el.classList.contains('open')) close(); });
  }

  /* ---------- Callback Popup ---------- */
  function initCallbackPopup() {
    const el = $('#callback-popup');
    if (!el) return;

    function open() {
      el.hidden = false;
      requestAnimationFrame(() => el.classList.add('open'));
      document.body.classList.add('menu-open');
    }
    function close() {
      el.classList.remove('open');
      setTimeout(() => { el.hidden = true; document.body.classList.remove('menu-open'); }, 280);
    }

    $$('.btn-callback-open').forEach((btn) => on(btn, 'click', (e) => {
      e.preventDefault();
      // close WA widget if open
      const wa = $('.wa-widget');
      if (wa) wa.classList.remove('open');
      open();
    }));

    el.querySelectorAll('[data-close-callback]').forEach((n) => on(n, 'click', close));
    on(document, 'keydown', (e) => { if (e.key === 'Escape' && el.classList.contains('open')) close(); });

    /* form submit handled by forms.js */
  }

  /* ---------- Demo Popup ---------- */
  function initDemoPopup() {
    const el = $('#demo-popup');
    if (!el) return;

    function open() {
      el.hidden = false;
      requestAnimationFrame(() => el.classList.add('open'));
      document.body.classList.add('menu-open');
    }
    function close() {
      el.classList.remove('open');
      setTimeout(() => { el.hidden = true; document.body.classList.remove('menu-open'); }, 280);
    }

    // Open from buttons and header demo links
    $$('.btn-demo-open, a[href="demo"]').forEach((btn) => on(btn, 'click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      const wa = $('.wa-widget');
      if (wa) wa.classList.remove('open');
      open();
    }));

    el.querySelectorAll('[data-close-demo]').forEach((n) => on(n, 'click', close));
    on(document, 'keydown', (e) => { if (e.key === 'Escape' && el.classList.contains('open')) close(); });

    /* form submit handled by forms.js */
  }

  /* ---------- Footer contact form → WhatsApp ---------- */
  function initFooterContact() { /* forms.js */ }

  /* ---------- Explore All Features Button → Navbar Focus ---------- */
  function initExploreFeaturesBtn() {
    const btns = $$('.hb-features-cta-btn, [data-open-features], #btnExploreAllFeatures');
    if (!btns.length) return;

    btns.forEach((btn) => {
      on(btn, 'click', (e) => {
        if (e.metaKey || e.ctrlKey || e.shiftKey || e.button === 1) return;
        e.preventDefault();

        const isMobile = window.innerWidth < 992;
        window.scrollTo({ top: 0, behavior: 'smooth' });

        if (!isMobile) {
          const navItem = $('.nav-item-products') || $('.nav-item-features');
          const navBtn = navItem ? navItem.querySelector('.nav-link') : null;
          const megaMenu = navItem ? navItem.querySelector('.mega-menu') : null;

          setTimeout(() => {
            if (navItem && navBtn) {
              if (!navItem.classList.contains('open')) {
                navBtn.click();
              }

              navItem.classList.remove('nav-item-highlight');
              void navItem.offsetWidth;
              navItem.classList.add('nav-item-highlight');

              if (megaMenu) {
                megaMenu.classList.remove('mega-menu-highlight');
                void megaMenu.offsetWidth;
                megaMenu.classList.add('mega-menu-highlight');
              }

              setTimeout(() => {
                navItem.classList.remove('nav-item-highlight');
                if (megaMenu) megaMenu.classList.remove('mega-menu-highlight');
              }, 3500);
            }
          }, 320);
        } else {
          setTimeout(() => {
            const toggle = $('.mobile-toggle');
            const menu = $('#mobile-menu');
            if (toggle && menu) {
              if (!menu.classList.contains('is-open') && !menu.classList.contains('open')) {
                toggle.click();
              }
              setTimeout(() => {
                const prodAccordion = menu.querySelector('.mobile-nav-item[data-accordion]');
                if (prodAccordion && !prodAccordion.classList.contains('is-open') && !prodAccordion.classList.contains('open')) {
                  const accBtn = prodAccordion.querySelector('.mobile-nav-link');
                  if (accBtn) accBtn.click();
                }
              }, 200);
            }
          }, 300);
        }
      });
    });
  }

  function init() {
    initHeader();
    initMegaMenu();
    initMobileMenu();
    initFAQ();
    initReveal();
    initCounters();
    initRipple();
    initWidget();
    initSmoothScroll();
    initOfferPopup();
    initCallbackPopup();
    initDemoPopup();
    initFooterContact();
    initExploreFeaturesBtn();
  }

  if (document.readyState === 'loading') {
    on(document, 'DOMContentLoaded', init);
  } else {
    init();
  }
})();


