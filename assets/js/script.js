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

  /* About page gallery carousel */
  var aboutCarousel = document.getElementById('aboutCarousel');
  if (aboutCarousel) {
    var aboutSlides = aboutCarousel.querySelectorAll('.about-carousel__slide');
    var aboutPrev = document.getElementById('aboutCarouselPrev');
    var aboutNext = document.getElementById('aboutCarouselNext');
    var aboutStatus = document.getElementById('aboutCarouselStatus');
    var aboutIndex = 0;
    var aboutTotal = aboutSlides.length;

    function goToAboutSlide(index) {
      if (!aboutTotal) return;
      aboutIndex = Math.max(0, Math.min(index, aboutTotal - 1));

      aboutSlides.forEach(function (slide, i) {
        var isActive = i === aboutIndex;
        slide.classList.toggle('is-active', isActive);
        if (isActive) {
          slide.removeAttribute('hidden');
        } else {
          slide.setAttribute('hidden', '');
        }
      });

      if (aboutStatus) {
        aboutStatus.textContent = (aboutIndex + 1) + ' of ' + aboutTotal;
      }

      if (aboutPrev) {
        aboutPrev.disabled = aboutIndex === 0;
      }
      if (aboutNext) {
        aboutNext.disabled = aboutIndex === aboutTotal - 1;
      }
    }

    if (aboutPrev) {
      aboutPrev.addEventListener('click', function () {
        goToAboutSlide(aboutIndex - 1);
      });
    }

    if (aboutNext) {
      aboutNext.addEventListener('click', function () {
        goToAboutSlide(aboutIndex + 1);
      });
    }

  goToAboutSlide(0);
  }

  /* Footer map pins — touch / click toggle for name tabs */
  var mapPins = document.querySelectorAll('.footer-location__pin');
  if (mapPins.length) {
    mapPins.forEach(function (pin) {
      pin.addEventListener('click', function (event) {
        var isTouch = window.matchMedia('(hover: none)').matches;
        if (!isTouch) return;

        if (!pin.classList.contains('is-active')) {
          event.preventDefault();
          mapPins.forEach(function (p) {
            p.classList.remove('is-active');
          });
          pin.classList.add('is-active');
        }
      });

      pin.addEventListener('mouseenter', function () {
        mapPins.forEach(function (p) {
          if (p !== pin) p.classList.remove('is-active');
        });
      });
    });
  }
})();
