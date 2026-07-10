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

  /* Hero slider — horizontal slide */
  var heroSlider = document.getElementById('heroSlider');
  if (heroSlider) {
    var viewport = heroSlider.parentElement;
    var slides = heroSlider.querySelectorAll('.hero-banner__slide');
    var dots = document.querySelectorAll('.hero-banner__dot');
    var current = 0;
    var interval;

    function getSlideWidth() {
      return viewport ? viewport.offsetWidth : 0;
    }

    function setSlideWidths() {
      var width = getSlideWidth();
      slides.forEach(function (slide) {
        slide.style.width = width + 'px';
      });
    }

    function goToSlide(index) {
      if (!slides.length) return;
      current = ((index % slides.length) + slides.length) % slides.length;
      var width = getSlideWidth();
      heroSlider.style.transform = 'translateX(-' + (current * width) + 'px)';
      slides.forEach(function (slide, i) {
        slide.classList.toggle('is-active', i === current);
      });
      dots.forEach(function (dot, i) {
        dot.classList.toggle('is-active', i === current);
        dot.setAttribute('aria-selected', i === current ? 'true' : 'false');
      });
    }

    function nextSlide() {
      goToSlide(current + 1);
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

    function refresh() {
      setSlideWidths();
      goToSlide(current);
    }

    refresh();
    resetInterval();
    window.addEventListener('resize', refresh);
  }

  /* Moments tabs — dialer roll-up */
  var momentsTabs = document.getElementById('momentsTabs');
  if (momentsTabs) {
    var tabButtons = momentsTabs.querySelectorAll('.moments-tabs__btn');
    var copyReel = document.getElementById('momentsCopyReel');
    var mediaReel = document.getElementById('momentsMediaReel');
    var copyWindow = momentsTabs.querySelector('.moments-tabs__copy-window');
    var mediaWindow = momentsTabs.querySelector('.moments-tabs__media-window');
    var stage = document.getElementById('moments-panel');
    var momentsIndex = 0;
    var isAnimating = false;
    var autoplayEnabled = true;
    var autoplayTimer = null;
    var AUTOPLAY_DELAY = 3000;
    var ANIMATION_MS = 1000;

    function getCopySlideHeight() {
      return copyWindow ? copyWindow.offsetHeight : 0;
    }

    function getMediaSlideHeight() {
      return mediaWindow ? mediaWindow.offsetHeight : 0;
    }

    function syncSlideSizes() {
      var copyH = getCopySlideHeight();
      var mediaH = getMediaSlideHeight();

      if (copyReel) {
        copyReel.querySelectorAll('.moments-tabs__slide').forEach(function (slide) {
          slide.style.flexBasis = copyH + 'px';
          slide.style.height = copyH + 'px';
        });
      }

      if (mediaReel) {
        mediaReel.querySelectorAll('.moments-tabs__media-slide').forEach(function (slide) {
          slide.style.flexBasis = mediaH + 'px';
          slide.style.height = mediaH + 'px';
        });
      }
    }

    function goToMomentsTab(index, animate) {
      if (!copyReel || !mediaReel) return;

      var max = tabButtons.length - 1;
      momentsIndex = Math.max(0, Math.min(index, max));

      syncSlideSizes();

      var copyOffset = momentsIndex * getCopySlideHeight();
      var mediaOffset = momentsIndex * getMediaSlideHeight();

      if (animate === false) {
        copyReel.style.transition = 'none';
        mediaReel.style.transition = 'none';
      } else {
        copyReel.style.transition = '';
        mediaReel.style.transition = '';
      }

      copyReel.style.transform = 'translate3d(0, -' + copyOffset + 'px, 0)';
      mediaReel.style.transform = 'translate3d(0, -' + mediaOffset + 'px, 0)';

      tabButtons.forEach(function (btn, i) {
        var active = i === momentsIndex;
        btn.classList.toggle('is-active', active);
        btn.setAttribute('aria-selected', active ? 'true' : 'false');
        if (active && stage) {
          stage.setAttribute('aria-labelledby', btn.id);
        }
      });

      if (animate === false) {
        void copyReel.offsetHeight;
        copyReel.style.transition = '';
        mediaReel.style.transition = '';
      }
    }

    function stopAutoplay() {
      autoplayEnabled = false;
      if (autoplayTimer) {
        window.clearInterval(autoplayTimer);
        autoplayTimer = null;
      }
    }

    function advanceMomentsTab() {
      if (isAnimating || !tabButtons.length) return;

      isAnimating = true;
      goToMomentsTab((momentsIndex + 1) % tabButtons.length, true);

      window.setTimeout(function () {
        isAnimating = false;
      }, ANIMATION_MS);
    }

    function startAutoplay() {
      if (!autoplayEnabled || autoplayTimer) return;

      autoplayTimer = window.setInterval(advanceMomentsTab, AUTOPLAY_DELAY);
    }

    tabButtons.forEach(function (btn) {
      btn.addEventListener('click', function () {
        stopAutoplay();

        var next = parseInt(btn.getAttribute('data-tab'), 10);
        if (isNaN(next) || next === momentsIndex || isAnimating) return;

        isAnimating = true;
        goToMomentsTab(next, true);

        window.setTimeout(function () {
          isAnimating = false;
        }, ANIMATION_MS);
      });
    });

    ['pointerdown', 'focusin', 'touchstart'].forEach(function (eventName) {
      momentsTabs.addEventListener(
        eventName,
        function () {
          stopAutoplay();
        },
        { passive: true }
      );
    });

    goToMomentsTab(0, false);
    startAutoplay();

    window.addEventListener('resize', function () {
      goToMomentsTab(momentsIndex, false);
    });
  }

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
