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

  /* Contact page — branch locator tabs */
  var branchButtons = document.querySelectorAll('.contact-branches__item');
  var branchTitle = document.getElementById('branchDetailTitle');
  var branchAddress = document.getElementById('branchDetailAddress');
  var branchPhones = document.getElementById('branchDetailPhones');
  var branchMap = document.getElementById('branchMapFrame');
  var branchPanel = document.getElementById('branch-panel');

  if (branchButtons.length && branchTitle && branchAddress && branchPhones && branchMap) {
    branchButtons.forEach(function (btn) {
      btn.addEventListener('click', function () {
        branchButtons.forEach(function (b) {
          b.classList.remove('is-active');
          b.setAttribute('aria-selected', 'false');
        });

        btn.classList.add('is-active');
        btn.setAttribute('aria-selected', 'true');

        var label = btn.getAttribute('data-label') || '';
        var address = btn.getAttribute('data-address') || '';
        var phones = (btn.getAttribute('data-phones') || '').split('|').filter(Boolean);
        var mapSrc = btn.getAttribute('data-map') || '';

        branchTitle.textContent = label;
        branchAddress.textContent = address;
        branchMap.src = mapSrc;
        branchMap.title = 'Map of ' + label;

        if (branchPanel) {
          branchPanel.setAttribute('aria-labelledby', btn.id);
        }

        branchPhones.innerHTML = '';
        phones.forEach(function (phone) {
          var link = document.createElement('a');
          link.href = 'tel:' + phone.replace(/\s+/g, '');
          link.textContent = phone;
          branchPhones.appendChild(link);
        });
      });
    });
  }

  /* FAQ accordion (testimonials + hearing loss) */
  document.querySelectorAll('#testimonialsFaq, #hearingLossFaq').forEach(function (faqRoot) {
    var faqItems = Array.prototype.slice.call(faqRoot.querySelectorAll('.testimonials-faq__item'));

    function setFaqItemState(item, isOpen) {
      var trigger = item.querySelector('.testimonials-faq__trigger');
      var panel = item.querySelector('.testimonials-faq__panel');
      var question = item.querySelector('.testimonials-faq__question');
      if (!trigger || !panel) return;

      item.classList.toggle('is-open', isOpen);
      trigger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      panel.hidden = !isOpen;

      if (question) {
        trigger.setAttribute(
          'aria-label',
          (isOpen ? 'Collapse: ' : 'Expand: ') + question.textContent.trim()
        );
      }
    }

    function closeAllFaqItems(exceptItem) {
      faqItems.forEach(function (item) {
        if (exceptItem && item === exceptItem) return;
        setFaqItemState(item, false);
      });
    }

    faqItems.forEach(function (item) {
      var trigger = item.querySelector('.testimonials-faq__trigger');
      if (!trigger) return;

      trigger.addEventListener('click', function (event) {
        event.preventDefault();
        var willOpen = !item.classList.contains('is-open');
        closeAllFaqItems(willOpen ? item : null);
        setFaqItemState(item, willOpen);
      });

      trigger.addEventListener('keydown', function (event) {
        if (event.key !== 'Enter' && event.key !== ' ') return;
        event.preventDefault();
        trigger.click();
      });
    });
  });

  /* Hearing Loss — early signs carousel */
  var hlSignsTrack = document.getElementById('hlSignsTrack');
  var hlSignsPrev = document.getElementById('hlSignsPrev');
  var hlSignsNext = document.getElementById('hlSignsNext');
  var hlSignsStatus = document.getElementById('hlSignsStatus');

  if (hlSignsTrack && hlSignsPrev && hlSignsNext && hlSignsStatus) {
    var hlSlides = Array.prototype.slice.call(hlSignsTrack.querySelectorAll('.hl-signs__slide'));
    var hlIndex = 0;

    function showHlSlide(index) {
      hlSlides.forEach(function (slide, i) {
        var active = i === index;
        slide.classList.toggle('is-active', active);
        slide.hidden = !active;
      });
      hlIndex = index;
      hlSignsStatus.textContent = index + 1 + ' of ' + hlSlides.length;
      hlSignsPrev.disabled = index === 0;
      hlSignsNext.disabled = index >= hlSlides.length - 1;
    }

    hlSignsPrev.addEventListener('click', function () {
      if (hlIndex > 0) showHlSlide(hlIndex - 1);
    });

    hlSignsNext.addEventListener('click', function () {
      if (hlIndex < hlSlides.length - 1) showHlSlide(hlIndex + 1);
    });
  }
})();
