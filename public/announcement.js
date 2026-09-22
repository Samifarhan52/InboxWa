/**
 * HelloBotz Interactive Top Announcement & Offers Carousel
 * Provides auto-rotation, previous/next controls, touch swipe, keyboard accessibility,
 * pause on hover/focus, and smooth synchronization with the floating logo dock.
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
        return;
      }
    } catch (e) {}

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

      // Remove classes from all other slides to be clean
      slides.forEach(function(s, idx) {
        if (idx !== currentIndex && idx !== newIndex) {
          s.classList.remove('is-active', 'is-exiting-next', 'is-exiting-prev', 'is-entering-next', 'is-entering-prev');
          s.setAttribute('aria-hidden', 'true');
        }
      });

      // Prepare entering slide
      nextSlide.classList.remove('is-active', 'is-exiting-next', 'is-exiting-prev');
      nextSlide.classList.add(dir === 'next' ? 'is-entering-next' : 'is-entering-prev');

      // Trigger reflow
      void nextSlide.offsetWidth;

      // Animate current slide out
      currentSlide.classList.remove('is-active');
      currentSlide.classList.add(dir === 'next' ? 'is-exiting-next' : 'is-exiting-prev');
      currentSlide.setAttribute('aria-hidden', 'true');

      // Animate next slide in
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
        try {
          sessionStorage.setItem('hb_ann_dismissed', '1');
        } catch (err) {}

        setTimeout(function() {
          bar.style.display = 'none';
          // Notify main.js to smoothly recalibrate the logo dock offset
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
        // Horizontal swipe detected
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

    // Start auto-scroll
    startTimer();

    // Trigger window resize so main.js computes logo dock with announcement offset immediately
    setTimeout(function() {
      window.dispatchEvent(new Event('resize'));
    }, 50);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAnnouncementBar);
  } else {
    initAnnouncementBar();
  }
})();
