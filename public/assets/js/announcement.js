/**
 * HelloBotz Interactive Top Announcement & Offers Carousel
 * Provides auto-rotation, previous/next controls, touch swipe, keyboard accessibility,
 * pause on hover/focus, and smooth persistent synchronization with the fixed navbar.
 */
(function() {
  'use strict';

  function initAnnouncementBar() {
    var bar = document.getElementById('hb-announcement-bar');
    if (!bar) return;

    // Check if dismissed in this session
    try {
      if (sessionStorage.getItem('hb_ann_dismissed') === '1') {
        bar.style.display = 'none';
        document.body.classList.add('hb-ann-dismissed');
        document.documentElement.style.setProperty('--hb-ann-h', '0px');
        return;
      }
    } catch (e) {}

    // Ensure active announcement state
    document.body.classList.remove('hb-ann-dismissed');
    document.body.classList.add('has-ann-bar');
    var isMobile = window.innerWidth <= 768;
    document.documentElement.style.setProperty('--hb-ann-h', isMobile ? '38px' : '40px');

    var slides = bar.querySelectorAll('.hb-ann-slide');
    if (!slides || slides.length === 0) return;

    var prevBtn = bar.querySelector('.hb-ann-prev');
    var nextBtn = bar.querySelector('.hb-ann-next');
    var closeBtn = bar.querySelector('.hb-ann-close');
    var currentCountEl = bar.querySelector('.hb-ann-current');
    var totalCountEl = bar.querySelector('.hb-ann-total');

    var currentIndex = 0;
    var totalSlides = slides.length;
    var timer = null;
    var isPaused = false;
    var intervalTime = 4600; // 4.6s per offer

    if (totalCountEl) {
      totalCountEl.textContent = totalSlides;
    }

    function updateCounter() {
      if (currentCountEl) {
        currentCountEl.textContent = (currentIndex + 1);
      }
    }

    function goToSlide(newIndex, direction) {
      if (newIndex === currentIndex) return;

      var dir = direction;
      if (!dir) {
        dir = newIndex > currentIndex ? 'next' : 'prev';
      }

      var currentSlide = slides[currentIndex];
      var nextSlide = slides[newIndex];

      slides.forEach(function(s, idx) {
        if (idx !== currentIndex && idx !== newIndex) {
          s.classList.remove('is-active', 'is-exiting-next', 'is-exiting-prev', 'is-entering-next', 'is-entering-prev');
          s.setAttribute('aria-hidden', 'true');
        }
      });

      nextSlide.classList.remove('is-active', 'is-exiting-next', 'is-exiting-prev');
      nextSlide.classList.add(dir === 'next' ? 'is-entering-next' : 'is-entering-prev');

      void nextSlide.offsetWidth;

      currentSlide.classList.remove('is-active');
      currentSlide.classList.add(dir === 'next' ? 'is-exiting-next' : 'is-exiting-prev');
      currentSlide.setAttribute('aria-hidden', 'true');

      nextSlide.classList.remove('is-entering-next', 'is-entering-prev');
      nextSlide.classList.add('is-active');
      nextSlide.removeAttribute('aria-hidden');

      currentIndex = newIndex;
      updateCounter();
    }

    function nextSlide() {
      var next = (currentIndex + 1) % totalSlides;
      goToSlide(next, 'next');
    }

    function prevSlide() {
      var prev = (currentIndex - 1 + totalSlides) % totalSlides;
      goToSlide(prev, 'prev');
    }

    function startTimer() {
      stopTimer();
      if (!isPaused) {
        timer = setInterval(nextSlide, intervalTime);
      }
    }

    function stopTimer() {
      if (timer) {
        clearInterval(timer);
        timer = null;
      }
    }

    function resetTimer() {
      stopTimer();
      startTimer();
    }

    // Prev & Next Buttons
    if (prevBtn) {
      prevBtn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        prevSlide();
        resetTimer();
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        nextSlide();
        resetTimer();
      });
    }

    // Dismiss Button
    if (closeBtn) {
      closeBtn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        stopTimer();
        bar.classList.add('hb-ann-closing');
        document.body.classList.remove('has-ann-bar');
        document.body.classList.add('hb-ann-dismissed');
        document.documentElement.style.setProperty('--hb-ann-h', '0px');
        try {
          sessionStorage.setItem('hb_ann_dismissed', '1');
        } catch (err) {}

        setTimeout(function() {
          bar.style.display = 'none';
          window.dispatchEvent(new Event('resize'));
          window.dispatchEvent(new Event('scroll'));
        }, 280);
      });
    }

    // Pause on mouse hover & focus
    bar.addEventListener('mouseenter', function() {
      isPaused = true;
      stopTimer();
    });

    bar.addEventListener('mouseleave', function() {
      isPaused = false;
      startTimer();
    });

    bar.addEventListener('focusin', function() {
      isPaused = true;
      stopTimer();
    });

    bar.addEventListener('focusout', function() {
      isPaused = false;
      startTimer();
    });

    // Touch Swipe gestures for mobile
    var touchStartX = 0;
    var touchStartY = 0;
    bar.addEventListener('touchstart', function(e) {
      if (e.touches && e.touches.length === 1) {
        touchStartX = e.touches[0].clientX;
        touchStartY = e.touches[0].clientY;
      }
    }, { passive: true });

    bar.addEventListener('touchend', function(e) {
      if (e.changedTouches && e.changedTouches.length === 1) {
        var diffX = touchStartX - e.changedTouches[0].clientX;
        var diffY = touchStartY - e.changedTouches[0].clientY;
        if (Math.abs(diffX) > 40 && Math.abs(diffX) > Math.abs(diffY)) {
          if (diffX > 0) {
            nextSlide();
          } else {
            prevSlide();
          }
          resetTimer();
        }
      }
    }, { passive: true });

    // Keyboard support
    bar.addEventListener('keydown', function(e) {
      if (e.key === 'ArrowLeft') {
        prevSlide();
        resetTimer();
      } else if (e.key === 'ArrowRight') {
        nextSlide();
        resetTimer();
      }
    });

    window.addEventListener('resize', function() {
      if (!document.body.classList.contains('hb-ann-dismissed')) {
        var mobile = window.innerWidth <= 768;
        document.documentElement.style.setProperty('--hb-ann-h', mobile ? '38px' : '40px');
      }
    }, { passive: true });

    // Start auto-scroll
    startTimer();

    setTimeout(function() {
      window.dispatchEvent(new Event('resize'));
    }, 50);
  }

  // Pre-check session storage immediately to avoid any flash if previously dismissed
  try {
    if (sessionStorage.getItem('hb_ann_dismissed') === '1') {
      document.documentElement.classList.add('hb-ann-dismissed');
      if (document.body) document.body.classList.add('hb-ann-dismissed');
      document.documentElement.style.setProperty('--hb-ann-h', '0px');
    }
  } catch (e) {}

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAnnouncementBar);
  } else {
    initAnnouncementBar();
  }
})();
