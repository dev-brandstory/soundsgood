/**
 * Sounds Good — Homepage interactions
 * Vanilla JS only
 */
(function () {
  'use strict';

  /* AOS */
  if (typeof AOS !== 'undefined') {
    AOS.init({
      duration: 600,
      once: true,
      offset: 80
    });
  }

  /* Hero slider */
  var heroSlider = document.getElementById('heroSlider');
  if (heroSlider) {
    var slides = heroSlider.querySelectorAll('.hero-banner__slide');
    var dots = document.querySelectorAll('.hero-banner__dot');
    var current = 0;
    var interval;

    function goToSlide(index) {
      if (!slides.length) return;
      current = index;
      slides.forEach(function (slide, i) {
        slide.classList.toggle('is-active', i === current);
      });
      dots.forEach(function (dot, i) {
        dot.classList.toggle('is-active', i === current);
        dot.setAttribute('aria-selected', i === current ? 'true' : 'false');
      });
    }

    function nextSlide() {
      goToSlide((current + 1) % slides.length);
    }

    dots.forEach(function (dot) {
      dot.addEventListener('click', function () {
        var index = parseInt(dot.getAttribute('data-slide'), 10);
        goToSlide(index);
        resetInterval();
      });
    });

    function resetInterval() {
      clearInterval(interval);
      interval = setInterval(nextSlide, 6000);
    }

    resetInterval();
  }

  /* Moments tabs */
  var tabButtons = document.querySelectorAll('.moments-tabs__btn');
  var tabPanels = document.querySelectorAll('.moments-tabs__panel');

  tabButtons.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var target = btn.getAttribute('data-tab');

      tabButtons.forEach(function (b) {
        var isActive = b === btn;
        b.classList.toggle('is-active', isActive);
        b.setAttribute('aria-selected', isActive ? 'true' : 'false');
      });

      tabPanels.forEach(function (panel) {
        var isActive = panel.id === 'tab-panel-' + target;
        panel.classList.toggle('is-active', isActive);
        if (isActive) {
          panel.removeAttribute('hidden');
        } else {
          panel.setAttribute('hidden', '');
        }
      });
    });
  });
})();
