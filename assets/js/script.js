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

  /* Home stats mobile — one card per slide */
  var homeStatsMobile = document.getElementById('homeStatsMobile');
  if (homeStatsMobile) {
    var homeStatsTrack = document.getElementById('homeStatsMobileTrack');
    var homeStatsPrev = document.getElementById('homeStatsMobilePrev');
    var homeStatsNext = document.getElementById('homeStatsMobileNext');
    var homeStatsIndex = 0;

    function getHomeStatsSlides() {
      if (!homeStatsTrack) return [];
      return Array.prototype.slice.call(homeStatsTrack.querySelectorAll('.home-stats-mobile__slide'));
    }

    function getHomeStatsStep() {
      var viewport = homeStatsMobile.querySelector('.home-stats-mobile__viewport');
      if (!viewport) return 0;
      var slide = getHomeStatsSlides()[0];
      var gap = 16;
      var width = slide ? slide.getBoundingClientRect().width : viewport.offsetWidth;
      return width + gap;
    }

    function updateHomeStatsNav() {
      var total = getHomeStatsSlides().length;
      var atStart = homeStatsIndex <= 0;
      var atEnd = homeStatsIndex >= total - 1;

      if (homeStatsPrev) {
        homeStatsPrev.disabled = atStart;
        homeStatsPrev.classList.toggle('is-active', !atStart && atEnd);
      }
      if (homeStatsNext) {
        homeStatsNext.disabled = atEnd;
        homeStatsNext.classList.toggle('is-active', !atEnd);
      }
    }

    function goToHomeStatsSlide(index) {
      var total = getHomeStatsSlides().length;
      if (!total || !homeStatsTrack) return;
      homeStatsIndex = Math.max(0, Math.min(index, total - 1));
      var step = getHomeStatsStep();
      homeStatsTrack.style.transform = 'translateX(-' + (homeStatsIndex * step) + 'px)';
      updateHomeStatsNav();
    }

    if (homeStatsPrev) {
      homeStatsPrev.addEventListener('click', function () {
        goToHomeStatsSlide(homeStatsIndex - 1);
      });
    }
    if (homeStatsNext) {
      homeStatsNext.addEventListener('click', function () {
        goToHomeStatsSlide(homeStatsIndex + 1);
      });
    }

    goToHomeStatsSlide(0);
    window.addEventListener('resize', function () {
      goToHomeStatsSlide(homeStatsIndex);
    });
  }

  /* Testimonial videos — lazy attach + in-view autoplay + mute toggle */
  var testimonialPreferSound = true;

  function syncMuteButton(btn, muted) {
    if (!btn) return;
    btn.classList.toggle('is-muted', muted);
    btn.setAttribute('aria-pressed', muted ? 'true' : 'false');
    btn.setAttribute('aria-label', muted ? 'Unmute video' : 'Mute video');
  }

  function syncMuteButtonForVideo(video) {
    if (!video) return;
    var wrap = video.closest('.testimonials__video-wrap, .home-testimonials-mobile__video-wrap');
    if (!wrap) return;
    syncMuteButton(wrap.querySelector('.testimonials__mute-btn'), video.muted);
  }

  function bindTestimonialMuteButtons(root) {
    if (!root) return;
    root.querySelectorAll('.testimonials__mute-btn').forEach(function (btn) {
      if (btn.dataset.bound === '1') return;
      btn.dataset.bound = '1';
      btn.addEventListener('click', function (event) {
        event.preventDefault();
        event.stopPropagation();
        var wrap = btn.closest('.testimonials__video-wrap, .home-testimonials-mobile__video-wrap');
        var video = wrap && wrap.querySelector('video');
        if (!video) return;

        video.muted = !video.muted;
        testimonialPreferSound = !video.muted;
        syncMuteButton(btn, video.muted);

        if (video.paused) {
          var playPromise = video.play();
          if (playPromise && typeof playPromise.catch === 'function') {
            playPromise.catch(function () {});
          }
        }
      });
    });
  }

  function loadLazyVideo(video) {
    if (!video || video.dataset.loaded === '1') {
      return Promise.resolve(video);
    }

    var src = video.getAttribute('data-src');
    if (!src) return Promise.resolve(video);

    return new Promise(function (resolve) {
      var settled = false;
      function done() {
        if (settled) return;
        settled = true;
        video.removeEventListener('loadeddata', done);
        video.removeEventListener('error', done);
        resolve(video);
      }

      video.addEventListener('loadeddata', done);
      video.addEventListener('error', done);
      video.src = src;
      video.dataset.loaded = '1';
      video.load();

      if (video.readyState >= 2) done();
    });
  }

  function pauseVideoEl(video) {
    if (!video) return;
    video.pause();
    try {
      video.currentTime = 0;
    } catch (e) {}
  }

  function playLazyVideo(video, isAllowed) {
    if (!video || !isAllowed || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      return;
    }

    loadLazyVideo(video).then(function () {
      if (!isAllowed()) return;

      video.muted = !testimonialPreferSound;
      syncMuteButtonForVideo(video);

      var playPromise = video.play();
      if (playPromise && typeof playPromise.catch === 'function') {
        playPromise.catch(function () {
          if (!isAllowed()) return;
          /* Browsers block unmuted autoplay — fall back to muted */
          if (!video.muted) {
            video.muted = true;
            testimonialPreferSound = false;
            syncMuteButtonForVideo(video);
            video.play().catch(function () {});
          }
        });
      }
    });
  }

  var homeTestimonialsMobile = document.getElementById('homeTestimonialsMobile');
  if (homeTestimonialsMobile) {
    var homeTestimonialsTrack = document.getElementById('homeTestimonialsMobileTrack');
    var homeTestimonialsPrev = document.getElementById('homeTestimonialsMobilePrev');
    var homeTestimonialsNext = document.getElementById('homeTestimonialsMobileNext');
    var homeTestimonialsIndex = 0;
    var homeTestimonialsGap = 30;
    var homeTestimonialsInView = false;

    bindTestimonialMuteButtons(homeTestimonialsMobile);

    function getHomeTestimonialsSlides() {
      if (!homeTestimonialsTrack) return [];
      return Array.prototype.slice.call(
        homeTestimonialsTrack.querySelectorAll('.home-testimonials-mobile__slide')
      );
    }

    function getHomeTestimonialsPerView() {
      return window.matchMedia('(min-width: 768px) and (max-width: 991.98px)').matches ? 2 : 1;
    }

    function getHomeTestimonialsMaxIndex() {
      return Math.max(0, getHomeTestimonialsSlides().length - getHomeTestimonialsPerView());
    }

    function sizeHomeTestimonialsSlides() {
      var viewport = homeTestimonialsMobile.querySelector('.home-testimonials-mobile__viewport');
      var slides = getHomeTestimonialsSlides();
      if (!viewport || !slides.length) return 0;

      var perView = getHomeTestimonialsPerView();
      var slideWidth = (viewport.clientWidth - homeTestimonialsGap * (perView - 1)) / perView;

      slides.forEach(function (slide) {
        slide.style.flex = '0 0 ' + slideWidth + 'px';
        slide.style.width = slideWidth + 'px';
        slide.style.maxWidth = 'none';
      });

      return slideWidth + homeTestimonialsGap;
    }

    function pauseHomeTestimonialsVideos() {
      homeTestimonialsMobile.querySelectorAll('.home-testimonials-mobile__video').forEach(pauseVideoEl);
    }

    function playActiveHomeTestimonialVideo() {
      var slides = getHomeTestimonialsSlides();
      var perView = getHomeTestimonialsPerView();
      var end = Math.min(homeTestimonialsIndex + perView, slides.length);

      for (var i = homeTestimonialsIndex; i < end; i++) {
        var video = slides[i] && slides[i].querySelector('.home-testimonials-mobile__video');
        if (video) {
          playLazyVideo(video, function () {
            return homeTestimonialsInView;
          });
        }
      }
    }

    function updateHomeTestimonialsNav() {
      var maxIndex = getHomeTestimonialsMaxIndex();
      var atStart = homeTestimonialsIndex <= 0;
      var atEnd = homeTestimonialsIndex >= maxIndex;

      if (homeTestimonialsPrev) {
        homeTestimonialsPrev.disabled = atStart;
        homeTestimonialsPrev.classList.toggle('is-active', !atStart && atEnd);
      }
      if (homeTestimonialsNext) {
        homeTestimonialsNext.disabled = atEnd;
        homeTestimonialsNext.classList.toggle('is-active', !atEnd);
      }
    }

    function goToHomeTestimonialsSlide(index) {
      var total = getHomeTestimonialsSlides().length;
      if (!total || !homeTestimonialsTrack) return;
      var step = sizeHomeTestimonialsSlides();
      homeTestimonialsIndex = Math.max(0, Math.min(index, getHomeTestimonialsMaxIndex()));
      homeTestimonialsTrack.style.transform = 'translateX(-' + (homeTestimonialsIndex * step) + 'px)';
      updateHomeTestimonialsNav();
      pauseHomeTestimonialsVideos();
      playActiveHomeTestimonialVideo();
    }

    if (homeTestimonialsPrev) {
      homeTestimonialsPrev.addEventListener('click', function () {
        goToHomeTestimonialsSlide(homeTestimonialsIndex - 1);
      });
    }
    if (homeTestimonialsNext) {
      homeTestimonialsNext.addEventListener('click', function () {
        goToHomeTestimonialsSlide(homeTestimonialsIndex + 1);
      });
    }

    goToHomeTestimonialsSlide(0);
    window.addEventListener('resize', function () {
      goToHomeTestimonialsSlide(homeTestimonialsIndex);
    });

    if (typeof IntersectionObserver !== 'undefined') {
      var homeTestimonialsSection =
        homeTestimonialsMobile.closest('.home-testimonials-mobile') || homeTestimonialsMobile;
      var homeTestimonialsObserver = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            homeTestimonialsInView = entry.isIntersecting;
            if (homeTestimonialsInView) {
              playActiveHomeTestimonialVideo();
            } else {
              pauseHomeTestimonialsVideos();
            }
          });
        },
        { rootMargin: '120px 0px', threshold: 0.2 }
      );
      homeTestimonialsObserver.observe(homeTestimonialsSection);
    } else {
      homeTestimonialsInView = true;
      playActiveHomeTestimonialVideo();
    }
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

  /* Home moments mobile — vertical reel + nav scroll (no page jump) */
  var homeMomentsMobile = document.getElementById('homeMomentsMobile');
  if (homeMomentsMobile) {
    var homeMomentsNav = homeMomentsMobile.querySelector('.home-moments-mobile__nav');
    var homeMomentsBtns = homeMomentsMobile.querySelectorAll('.home-moments-mobile__btn');
    var homeMomentsViewport = homeMomentsMobile.querySelector('.home-moments-mobile__viewport');
    var homeMomentsTrack = document.getElementById('homeMomentsMobileTrack');
    var homeMomentsPanels = homeMomentsMobile.querySelectorAll('.home-moments-mobile__panel');
    var homeMomentsPanel = document.getElementById('home-moments-panel');
    var homeMomentsIndex = 0;
    var homeMomentsAnimating = false;
    var HOME_MOMENTS_ANIM_MS = 800;

    function getHomeMomentsSlideHeight() {
      var max = 0;
      homeMomentsPanels.forEach(function (panel) {
        panel.style.height = 'auto';
        panel.style.flexBasis = 'auto';
        max = Math.max(max, panel.offsetHeight);
      });
      return max;
    }

    function syncHomeMomentsSizes() {
      if (!homeMomentsViewport || !homeMomentsTrack) return 0;
      var height = getHomeMomentsSlideHeight();
      homeMomentsPanels.forEach(function (panel) {
        panel.style.height = height + 'px';
        panel.style.flexBasis = height + 'px';
      });
      homeMomentsViewport.style.height = height + 'px';
      return height;
    }

    function scrollHomeMomentsTabIntoView(btn) {
      if (!homeMomentsNav || !btn) return;
      var left = btn.offsetLeft - (homeMomentsNav.clientWidth - btn.offsetWidth) / 2;
      homeMomentsNav.scrollTo({
        left: Math.max(0, left),
        behavior: 'smooth'
      });
    }

    function goToHomeMomentsTab(index, animate) {
      if (!homeMomentsTrack || !homeMomentsBtns.length) return;

      homeMomentsIndex = Math.max(0, Math.min(index, homeMomentsBtns.length - 1));
      var height = syncHomeMomentsSizes();

      if (animate === false) {
        homeMomentsTrack.style.transition = 'none';
      } else {
        homeMomentsTrack.style.transition = '';
      }

      homeMomentsTrack.style.transform = 'translate3d(0, -' + (homeMomentsIndex * height) + 'px, 0)';

      homeMomentsBtns.forEach(function (btn, i) {
        var active = i === homeMomentsIndex;
        btn.classList.toggle('is-active', active);
        btn.setAttribute('aria-selected', active ? 'true' : 'false');
        if (active && homeMomentsPanel) {
          homeMomentsPanel.setAttribute('aria-labelledby', btn.id);
        }
      });

      if (animate === false) {
        void homeMomentsTrack.offsetHeight;
        homeMomentsTrack.style.transition = '';
      }
    }

    homeMomentsBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var next = parseInt(btn.getAttribute('data-tab'), 10);
        if (isNaN(next) || next === homeMomentsIndex || homeMomentsAnimating) return;

        homeMomentsAnimating = true;
        goToHomeMomentsTab(next, true);
        scrollHomeMomentsTabIntoView(btn);

        window.setTimeout(function () {
          homeMomentsAnimating = false;
        }, HOME_MOMENTS_ANIM_MS);
      });
    });

    goToHomeMomentsTab(0, false);
    window.addEventListener('resize', function () {
      goToHomeMomentsTab(homeMomentsIndex, false);
    });
  }

  /* About page gallery carousel */
  var aboutCarousel = document.getElementById('aboutCarousel');
  if (aboutCarousel) {
    var aboutTrack = document.getElementById('aboutCarouselTrack');
    var aboutGrid = document.getElementById('aboutCarouselGrid');
    var aboutItems = Array.prototype.slice.call(
      aboutCarousel.querySelectorAll('.about-carousel__item')
    );
    var aboutPrev = document.getElementById('aboutCarouselPrev');
    var aboutNext = document.getElementById('aboutCarouselNext');
    var aboutStatus = document.getElementById('aboutCarouselStatus');
    var aboutPage = 0;
    var aboutResizeTimer = null;

    function getAboutPerView() {
      if (window.matchMedia('(max-width: 767px)').matches) return 1;
      if (window.matchMedia('(max-width: 991px)').matches) return 2;
      return 3;
    }

    function getAboutGap() {
      if (!aboutGrid) return 16;
      var styles = window.getComputedStyle(aboutGrid);
      var gap = parseFloat(styles.columnGap || styles.gap);
      return isNaN(gap) ? 16 : gap;
    }

    function getAboutPageCount() {
      return Math.max(1, Math.ceil(aboutItems.length / getAboutPerView()));
    }

    function sizeAboutItems() {
      if (!aboutTrack || !aboutItems.length) return;
      var perView = getAboutPerView();
      var gap = getAboutGap();
      var trackWidth = aboutTrack.offsetWidth;
      var itemWidth = (trackWidth - gap * (perView - 1)) / perView;

      aboutItems.forEach(function (item) {
        item.style.flex = '0 0 ' + itemWidth + 'px';
        item.style.width = itemWidth + 'px';
        item.hidden = false;
      });
    }

    function goToAboutPage(index, animate) {
      if (!aboutItems.length || !aboutGrid || !aboutTrack) return;

      var perView = getAboutPerView();
      var pageCount = getAboutPageCount();
      aboutPage = Math.max(0, Math.min(index, pageCount - 1));

      sizeAboutItems();

      var gap = getAboutGap();
      var itemWidth = aboutItems[0].offsetWidth;
      var offset = aboutPage * perView * (itemWidth + gap);
      var maxOffset = Math.max(0, aboutGrid.scrollWidth - aboutTrack.offsetWidth);
      if (offset > maxOffset) offset = maxOffset;

      if (animate === false) {
        aboutGrid.style.transition = 'none';
      } else {
        aboutGrid.style.transition = '';
      }

      aboutGrid.style.transform = 'translate3d(-' + offset + 'px, 0, 0)';

      if (animate === false) {
        void aboutGrid.offsetWidth;
        aboutGrid.style.transition = '';
      }

      if (aboutStatus) {
        aboutStatus.textContent = (aboutPage + 1) + ' of ' + pageCount;
      }
      if (aboutPrev) {
        aboutPrev.disabled = aboutPage === 0;
      }
      if (aboutNext) {
        aboutNext.disabled = aboutPage >= pageCount - 1;
      }
    }

    if (aboutPrev) {
      aboutPrev.addEventListener('click', function () {
        goToAboutPage(aboutPage - 1, true);
      });
    }

    if (aboutNext) {
      aboutNext.addEventListener('click', function () {
        goToAboutPage(aboutPage + 1, true);
      });
    }

    window.addEventListener('resize', function () {
      window.clearTimeout(aboutResizeTimer);
      aboutResizeTimer = window.setTimeout(function () {
        goToAboutPage(aboutPage, false);
      }, 150);
    });

    goToAboutPage(0, false);
  }

  /* Testimonials carousel — lazy load + in-view autoplay */
  var testimonialsCarousel = document.getElementById('testimonialsCarousel');
  if (testimonialsCarousel) {
    var testimonialsViewport = testimonialsCarousel.querySelector('.testimonials__viewport');
    var testimonialsTrack = testimonialsCarousel.querySelector('.testimonials__track');
    var testimonialSlides = testimonialsCarousel.querySelectorAll('.testimonials__slide');
    var testimonialsPrev = document.getElementById('testimonialsPrev');
    var testimonialsNext = document.getElementById('testimonialsNext');
    var testimonialsStatus = document.getElementById('testimonialsStatus');
    var testimonialsIndex = 0;
    var testimonialsTotal = testimonialSlides.length;
    var testimonialsAnimating = false;
    var testimonialsInView = false;

    bindTestimonialMuteButtons(testimonialsCarousel);

    function getTestimonialsSlideWidth() {
      return testimonialsViewport ? testimonialsViewport.offsetWidth : 0;
    }

    function setTestimonialsSlideWidths() {
      var width = getTestimonialsSlideWidth();
      testimonialSlides.forEach(function (slide) {
        slide.style.width = width + 'px';
        slide.style.flex = '0 0 ' + width + 'px';
      });
    }

    function pauseAllTestimonialVideos() {
      testimonialsCarousel.querySelectorAll('.testimonials__video').forEach(pauseVideoEl);
    }

    function playActiveTestimonialVideo() {
      var activeSlide = testimonialSlides[testimonialsIndex];
      if (!activeSlide) return;

      var video = activeSlide.querySelector('.testimonials__video');
      playLazyVideo(video, function () {
        return testimonialsInView && testimonialSlides[testimonialsIndex] === activeSlide;
      });
    }

    function goToTestimonialSlide(index, animate) {
      if (!testimonialsTotal || !testimonialsTrack) return;

      testimonialsIndex = Math.max(0, Math.min(index, testimonialsTotal - 1));
      pauseAllTestimonialVideos();
      setTestimonialsSlideWidths();

      if (animate === false) {
        testimonialsTrack.style.transition = 'none';
      } else {
        testimonialsTrack.style.transition = '';
        testimonialsAnimating = true;
      }

      var offset = testimonialsIndex * getTestimonialsSlideWidth();
      testimonialsTrack.style.transform = 'translate3d(-' + offset + 'px, 0, 0)';

      testimonialSlides.forEach(function (slide, i) {
        slide.classList.toggle('is-active', i === testimonialsIndex);
      });

      if (testimonialsStatus) {
        testimonialsStatus.textContent = testimonialsIndex + 1 + ' of ' + testimonialsTotal;
      }

      if (testimonialsPrev) {
        testimonialsPrev.disabled = testimonialsIndex === 0;
      }
      if (testimonialsNext) {
        testimonialsNext.disabled = testimonialsIndex === testimonialsTotal - 1;
      }

      if (animate === false) {
        void testimonialsTrack.offsetHeight;
        testimonialsTrack.style.transition = '';
        playActiveTestimonialVideo();
      }
    }

    if (testimonialsTrack) {
      testimonialsTrack.addEventListener('transitionend', function (event) {
        if (event.target !== testimonialsTrack || event.propertyName !== 'transform') return;
        testimonialsAnimating = false;
        playActiveTestimonialVideo();
      });
    }

    if (testimonialsPrev) {
      testimonialsPrev.addEventListener('click', function () {
        if (testimonialsAnimating) return;
        goToTestimonialSlide(testimonialsIndex - 1, true);
      });
    }

    if (testimonialsNext) {
      testimonialsNext.addEventListener('click', function () {
        if (testimonialsAnimating) return;
        goToTestimonialSlide(testimonialsIndex + 1, true);
      });
    }

    goToTestimonialSlide(0, false);
    window.addEventListener('resize', function () {
      goToTestimonialSlide(testimonialsIndex, false);
    });

    if (typeof IntersectionObserver !== 'undefined') {
      var testimonialsSection =
        testimonialsCarousel.closest('.testimonials-section') || testimonialsCarousel;
      var testimonialsObserver = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            testimonialsInView = entry.isIntersecting;
            if (testimonialsInView) {
              playActiveTestimonialVideo();
            } else {
              pauseAllTestimonialVideos();
            }
          });
        },
        { rootMargin: '120px 0px', threshold: 0.2 }
      );
      testimonialsObserver.observe(testimonialsSection);
    } else {
      testimonialsInView = true;
      playActiveTestimonialVideo();
    }
  }

  /* Footer map pins — tap to open popout on touch; hover uses CSS on desktop */
  var mapPinRoots = document.querySelectorAll('#footerMapPins, #footerMapPinsMobile');
  mapPinRoots.forEach(function (root) {
    if (!root) return;
    var pins = root.querySelectorAll('.footer-location__pin');
    var finePointer = window.matchMedia('(hover: hover) and (pointer: fine)');

    pins.forEach(function (pin) {
      pin.addEventListener('click', function (event) {
        if (finePointer.matches) return;

        if (!pin.classList.contains('is-active')) {
          event.preventDefault();
          pins.forEach(function (p) {
            p.classList.remove('is-active');
          });
          pin.classList.add('is-active');
        }
      });
    });
  });

  /* Pause pin spin when location CTAs are off-screen (perf) */
  document.querySelectorAll('.footer-location, .footer-location-mobile').forEach(function (section) {
    if (typeof IntersectionObserver === 'undefined') return;

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          section.classList.toggle('is-pins-paused', !entry.isIntersecting);
        });
      },
      { rootMargin: '80px', threshold: 0 }
    );
    observer.observe(section);
  });

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
  var hlSignsGrid = document.getElementById('hlSignsGrid');

  if (hlSignsTrack && hlSignsPrev && hlSignsNext && hlSignsStatus && hlSignsGrid) {
    var hlItems = Array.prototype.slice.call(
      hlSignsTrack.querySelectorAll('.hl-signs__item')
    );
    var hlPage = 0;
    var hlResizeTimer = null;

    function getHlPerView() {
      if (window.matchMedia('(max-width: 767px)').matches) return 1;
      if (window.matchMedia('(max-width: 1024px)').matches) return 2;
      return 3;
    }

    function getHlGap() {
      var styles = window.getComputedStyle(hlSignsGrid);
      var gap = parseFloat(styles.columnGap || styles.gap);
      return isNaN(gap) ? 16 : gap;
    }

    function getHlPageCount() {
      return Math.max(1, Math.ceil(hlItems.length / getHlPerView()));
    }

    function sizeHlItems() {
      if (!hlItems.length) return;
      var perView = getHlPerView();
      var gap = getHlGap();
      var trackWidth = hlSignsTrack.offsetWidth;
      var itemWidth = (trackWidth - gap * (perView - 1)) / perView;

      hlItems.forEach(function (item) {
        item.style.height = '';
        item.style.flex = '0 0 ' + itemWidth + 'px';
        item.style.width = itemWidth + 'px';
        item.hidden = false;
      });

      var maxHeight = 0;
      hlItems.forEach(function (item) {
        maxHeight = Math.max(maxHeight, item.offsetHeight);
      });
      hlItems.forEach(function (item) {
        item.style.height = maxHeight + 'px';
      });
    }

    function goToHlPage(index, animate) {
      if (!hlItems.length) return;

      var perView = getHlPerView();
      var pageCount = getHlPageCount();
      hlPage = Math.max(0, Math.min(index, pageCount - 1));

      sizeHlItems();

      var gap = getHlGap();
      var itemWidth = hlItems[0].offsetWidth;
      var offset = hlPage * perView * (itemWidth + gap);
      var maxOffset = Math.max(0, hlSignsGrid.scrollWidth - hlSignsTrack.offsetWidth);
      if (offset > maxOffset) offset = maxOffset;

      if (animate === false) {
        hlSignsGrid.style.transition = 'none';
      } else {
        hlSignsGrid.style.transition = '';
      }

      hlSignsGrid.style.transform = 'translate3d(-' + offset + 'px, 0, 0)';

      if (animate === false) {
        void hlSignsGrid.offsetWidth;
        hlSignsGrid.style.transition = '';
      }

      hlSignsStatus.textContent = (hlPage + 1) + ' of ' + pageCount;
      hlSignsPrev.disabled = hlPage === 0;
      hlSignsNext.disabled = hlPage >= pageCount - 1;
    }

    hlSignsPrev.addEventListener('click', function () {
      goToHlPage(hlPage - 1, true);
    });

    hlSignsNext.addEventListener('click', function () {
      goToHlPage(hlPage + 1, true);
    });

    window.addEventListener('resize', function () {
      window.clearTimeout(hlResizeTimer);
      hlResizeTimer = window.setTimeout(function () {
        goToHlPage(hlPage, false);
      }, 150);
    });

    hlItems.forEach(function (item) {
      var img = item.querySelector('img');
      if (img && !img.complete) {
        img.addEventListener('load', function () {
          goToHlPage(hlPage, false);
        });
      }
    });

    goToHlPage(0, false);
  }

  /* Hearing Loss — protecting your hearing carousel */
  var hlJourneyTrack = document.getElementById('hlJourneyTrack');
  var hlJourneyPrev = document.getElementById('hlJourneyPrev');
  var hlJourneyNext = document.getElementById('hlJourneyNext');
  var hlJourneyStatus = document.getElementById('hlJourneyStatus');
  var hlJourneyGrid = document.getElementById('hlJourneyGrid');
  var hlJourneyControls = document.querySelector('.hl-journey__controls');

  if (hlJourneyTrack && hlJourneyPrev && hlJourneyNext && hlJourneyStatus && hlJourneyGrid) {
    var hlJourneyItems = Array.prototype.slice.call(
      hlJourneyTrack.querySelectorAll('.hl-journey__item')
    );
    var hlJourneyPage = 0;
    var hlJourneyResizeTimer = null;

    function getHlJourneyPerView() {
      if (window.matchMedia('(max-width: 767px)').matches) return 1;
      if (window.matchMedia('(max-width: 1024px)').matches) return 2;
      return 4;
    }

    function getHlJourneyGap() {
      var styles = window.getComputedStyle(hlJourneyGrid);
      var gap = parseFloat(styles.columnGap || styles.gap);
      return isNaN(gap) ? 20 : gap;
    }

    function getHlJourneyPeek() {
      var perView = getHlJourneyPerView();
      if (perView >= hlJourneyItems.length) return 0;
      if (perView === 1) return 0.18;
      return 0.32;
    }

    function getHlJourneyPageCount() {
      var perView = getHlJourneyPerView();
      return Math.max(1, hlJourneyItems.length - perView + 1);
    }

    function sizeHlJourneyItems() {
      if (!hlJourneyItems.length) return;
      var perView = getHlJourneyPerView();
      var gap = getHlJourneyGap();
      var peek = getHlJourneyPeek();
      var trackWidth = hlJourneyTrack.offsetWidth;
      var itemWidth = (trackWidth - gap * (perView - 1 + peek)) / (perView + peek);

      hlJourneyItems.forEach(function (item) {
        item.style.height = '';
        item.style.flex = '0 0 ' + itemWidth + 'px';
        item.style.width = itemWidth + 'px';
      });

      var maxHeight = 0;
      hlJourneyItems.forEach(function (item) {
        maxHeight = Math.max(maxHeight, item.offsetHeight);
      });
      hlJourneyItems.forEach(function (item) {
        item.style.height = maxHeight + 'px';
      });
    }

    function goToHlJourneyPage(index, animate) {
      if (!hlJourneyItems.length) return;

      var pageCount = getHlJourneyPageCount();
      hlJourneyPage = Math.max(0, Math.min(index, pageCount - 1));

      sizeHlJourneyItems();

      var gap = getHlJourneyGap();
      var itemWidth = hlJourneyItems[0].offsetWidth;
      var offset = hlJourneyPage * (itemWidth + gap);
      var maxOffset = Math.max(0, hlJourneyGrid.scrollWidth - hlJourneyTrack.offsetWidth);
      if (offset > maxOffset) offset = maxOffset;

      if (animate === false) {
        hlJourneyGrid.style.transition = 'none';
      } else {
        hlJourneyGrid.style.transition = '';
      }

      hlJourneyGrid.style.transform = 'translate3d(-' + offset + 'px, 0, 0)';

      if (animate === false) {
        void hlJourneyGrid.offsetWidth;
        hlJourneyGrid.style.transition = '';
      }

      hlJourneyStatus.textContent = (hlJourneyPage + 1) + ' of ' + pageCount;
      hlJourneyPrev.disabled = hlJourneyPage === 0;
      hlJourneyNext.disabled = hlJourneyPage >= pageCount - 1;

      if (hlJourneyControls) {
        hlJourneyControls.classList.toggle('is-hidden', pageCount <= 1);
      }
    }

    hlJourneyPrev.addEventListener('click', function () {
      goToHlJourneyPage(hlJourneyPage - 1, true);
    });

    hlJourneyNext.addEventListener('click', function () {
      goToHlJourneyPage(hlJourneyPage + 1, true);
    });

    window.addEventListener('resize', function () {
      window.clearTimeout(hlJourneyResizeTimer);
      hlJourneyResizeTimer = window.setTimeout(function () {
        goToHlJourneyPage(hlJourneyPage, false);
      }, 150);
    });

    hlJourneyItems.forEach(function (item) {
      var img = item.querySelector('img.hl-journey__bg');
      if (img && !img.complete) {
        img.addEventListener('load', function () {
          goToHlJourneyPage(hlJourneyPage, false);
        });
      }
    });

    goToHlJourneyPage(0, false);
  }

  /* Social Instagram slider */
  var socialSection = document.getElementById('socialSection');
  if (socialSection) {
    var socialTrack = document.getElementById('socialSliderTrack');
    var socialViewport = document.getElementById('socialSliderViewport') ||
      socialSection.querySelector('.social-section__viewport');
    var socialDots = socialSection.querySelectorAll('.social-section__dot');
    var socialIndex = 0;
    var socialTimer = null;
    var socialIntervalMs = 4000;
    var socialTouchX = null;
    var socialResizeTimer = null;

    function getSocialSlides() {
      if (!socialTrack) return [];
      return Array.prototype.slice.call(socialTrack.children);
    }

    function getSocialGap() {
      if (!socialTrack) return 18;
      var styles = window.getComputedStyle(socialTrack);
      var gap = parseFloat(styles.columnGap || styles.gap);
      return isNaN(gap) ? 18 : gap;
    }

    function sizeSocialSlides() {
      var slides = getSocialSlides();
      if (!socialViewport || !slides.length) return 289;

      var maxSlide = Math.min(271, socialViewport.clientWidth);
      slides.forEach(function (slide) {
        slide.style.flex = '0 0 ' + maxSlide + 'px';
        slide.style.width = maxSlide + 'px';
        slide.style.maxWidth = maxSlide + 'px';
        slide.style.minWidth = maxSlide + 'px';
      });

      return maxSlide + getSocialGap();
    }

    function getSocialStep() {
      return sizeSocialSlides();
    }

    function getMaxSocialIndex() {
      var slides = getSocialSlides();
      if (!slides.length || !socialTrack || !socialViewport) return 0;
      var overflow = socialTrack.scrollWidth - socialViewport.clientWidth;
      if (overflow <= 2) return 0;
      var step = getSocialStep();
      if (step <= 0) return slides.length - 1;
      return Math.min(slides.length - 1, Math.ceil(overflow / step));
    }

    function syncSocialDots() {
      socialDots.forEach(function (dot, i) {
        var active = i === socialIndex;
        dot.classList.toggle('is-active', active);
        dot.setAttribute('aria-selected', active ? 'true' : 'false');
      });
    }

    function goSocial(index, fromAutoplay) {
      var slides = getSocialSlides();
      if (!slides.length || !socialTrack) return;

      var maxIndex = getMaxSocialIndex();
      if (maxIndex <= 0) {
        socialIndex = 0;
        socialTrack.style.transform = 'translate3d(0, 0, 0)';
        syncSocialDots();
        return;
      }

      socialIndex = ((index % (maxIndex + 1)) + (maxIndex + 1)) % (maxIndex + 1);
      socialTrack.style.transform = 'translate3d(-' + (socialIndex * getSocialStep()) + 'px, 0, 0)';
      syncSocialDots();

      if (!fromAutoplay) {
        resetSocialAutoplay();
      }
    }

    function nextSocial() {
      var maxIndex = getMaxSocialIndex();
      if (maxIndex <= 0) return;
      goSocial(socialIndex + 1, true);
    }

    function stopSocialAutoplay() {
      if (socialTimer) {
        window.clearInterval(socialTimer);
        socialTimer = null;
      }
    }

    function resetSocialAutoplay() {
      stopSocialAutoplay();
      socialTimer = window.setInterval(nextSocial, socialIntervalMs);
    }

    socialDots.forEach(function (dot) {
      dot.addEventListener('click', function () {
        var target = parseInt(dot.getAttribute('data-slide'), 10);
        goSocial(isNaN(target) ? 0 : target);
      });
    });

    if (socialViewport) {
      socialViewport.addEventListener('mouseenter', stopSocialAutoplay);
      socialViewport.addEventListener('mouseleave', resetSocialAutoplay);

      socialViewport.addEventListener('touchstart', function (e) {
        socialTouchX = e.changedTouches[0].screenX;
        stopSocialAutoplay();
      }, { passive: true });

      socialViewport.addEventListener('touchend', function (e) {
        if (socialTouchX === null) return;
        var dx = e.changedTouches[0].screenX - socialTouchX;
        socialTouchX = null;
        if (Math.abs(dx) < 40) {
          resetSocialAutoplay();
          return;
        }
        goSocial(socialIndex + (dx < 0 ? 1 : -1));
      }, { passive: true });
    }

    window.addEventListener('resize', function () {
      window.clearTimeout(socialResizeTimer);
      socialResizeTimer = window.setTimeout(function () {
        goSocial(socialIndex, true);
      }, 100);
    });

    window.requestAnimationFrame(function () {
      goSocial(0, true);
      resetSocialAutoplay();
    });
  }
})();


/* ==========================================
   Hearing Aids Script - Start
========================================== */

(function () {
  /* Page-scoped: skip on non–hearing-aids pages */
  if (!document.body || !document.body.classList.contains('hearingAidsPage')) {
    return;
  }

  /* Compact = mobile + tablet (pagers / carousels / stacked chrome).
     Desktop (≥992px) keeps pin-scroll benefits and multi-column layouts. */
  var compactQuery = window.matchMedia('(max-width: 991.98px)');
  var phoneQuery = window.matchMedia('(max-width: 767.98px)');
  var tabletQuery = window.matchMedia('(min-width: 768px) and (max-width: 991.98px)');

  function isCompact() {
    return compactQuery.matches;
  }

  function isPhone() {
    return phoneQuery.matches;
  }

  function isTablet() {
    return tabletQuery.matches;
  }

  function setHidden(el, shouldHide) {
    if (!el) return;
    if (shouldHide) el.setAttribute('hidden', '');
    else el.removeAttribute('hidden');
  }

  function initHaPager(scroller, pager, itemSelector) {
    if (!scroller || !pager) return;

    var items = scroller.querySelectorAll(itemSelector);
    var total = items.length;
    if (!total) return;

    var currentEl = pager.querySelector('[data-ha-pager-current]');
    var totalEl = pager.querySelector('[data-ha-pager-total]');
    var prevBtn = pager.querySelector('.ha-pager__btn--prev');
    var nextBtn = pager.querySelector('.ha-pager__btn--next');
    var index = 0;

    function getPerView() {
      /* Care tablet shows 2 cards → page count is 2 for 3 items */
      if (pager.id === 'haCarePager' && isTablet()) return 2;
      return 1;
    }

    function getPageCount() {
      return Math.max(1, total - getPerView() + 1);
    }

    function sync() {
      var phoneOnlyPager = pager.classList.contains('ha-pager--features');
      var tabletOnlyPager = pager.classList.contains('ha-pager--types');
      var shouldShow = phoneOnlyPager
        ? isPhone()
        : tabletOnlyPager
          ? isTablet()
          : isCompact();
      if (!shouldShow) {
        setHidden(pager, true);
        return;
      }
      setHidden(pager, false);
      var pages = getPageCount();
      if (index > pages - 1) index = pages - 1;
      if (totalEl) totalEl.textContent = String(pages);
      if (currentEl) currentEl.textContent = String(index + 1);
      if (prevBtn) prevBtn.disabled = index <= 0;
      if (nextBtn) nextBtn.disabled = index >= pages - 1;
    }

    function goTo(nextIndex, smooth) {
      var pages = getPageCount();
      if (nextIndex < 0 || nextIndex >= pages) return;
      index = nextIndex;
      var target = items[index];
      if (target) {
        var scrollerRect = scroller.getBoundingClientRect();
        var targetRect = target.getBoundingClientRect();
        var left = scroller.scrollLeft + (targetRect.left - scrollerRect.left);
        scroller.scrollTo({
          left: left,
          behavior: smooth === false ? 'auto' : 'smooth'
        });
      }
      sync();
    }

    function onScroll() {
      var tabletOnlyPager = pager.classList.contains('ha-pager--types');
      var phoneOnlyPager = pager.classList.contains('ha-pager--features');
      var active = phoneOnlyPager
        ? isPhone()
        : tabletOnlyPager
          ? isTablet()
          : isCompact();
      if (!active) return;
      var pages = getPageCount();
      var scrollerRect = scroller.getBoundingClientRect();
      var anchor = scrollerRect.left + Math.min(40, scrollerRect.width * 0.15);
      var closest = 0;
      var closestDist = Infinity;
      for (var i = 0; i < pages; i++) {
        var rect = items[i].getBoundingClientRect();
        var dist = Math.abs(rect.left - anchor);
        if (dist < closestDist) {
          closestDist = dist;
          closest = i;
        }
      }
      if (closest !== index) {
        index = closest;
        sync();
      }
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', function () {
        goTo(index - 1);
      });
    }
    if (nextBtn) {
      nextBtn.addEventListener('click', function () {
        goTo(index + 1);
      });
    }

    scroller.addEventListener('scroll', onScroll, { passive: true });
    function onBreakpointChange() {
      goTo(0, false);
      sync();
    }
    compactQuery.addEventListener('change', onBreakpointChange);
    phoneQuery.addEventListener('change', onBreakpointChange);
    sync();
  }

  function activateStep(index) {
    var stepsRoot = document.getElementById('haStepsPanels');
    if (!stepsRoot) return;
    var stepItems = stepsRoot.querySelectorAll('.ha-steps__item');
    var stepRows = stepsRoot.querySelectorAll('.ha-steps__row');
    var dots = document.querySelectorAll('#haStepsStepper [data-step-dot]');
    var trails = document.querySelectorAll('#haStepsStepper .ha-steps__trail');

    stepItems.forEach(function (el, i) {
      var open = i === index;
      el.classList.toggle('is-open', open);
      el.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    stepRows.forEach(function (row, i) {
      row.classList.toggle('is-active', i === index);
    });
    dots.forEach(function (dot, i) {
      dot.classList.toggle('is-active', i <= index);
    });
    trails.forEach(function (trail, i) {
      trail.classList.toggle('is-active', i < index);
    });
  }

  var stepsRoot = document.getElementById('haStepsPanels');
  if (stepsRoot) {
    var stepItems = stepsRoot.querySelectorAll('.ha-steps__item');
    stepItems.forEach(function (item) {
      item.addEventListener('click', function () {
        activateStep(Number(item.getAttribute('data-step') || 0));
      });
    });
    activateStep(0);
  }

  var stepsStepper = document.getElementById('haStepsStepper');
  if (stepsStepper) {
    stepsStepper.querySelectorAll('[data-step-dot]').forEach(function (dot) {
      dot.addEventListener('click', function () {
        activateStep(Number(dot.getAttribute('data-step-dot') || 0));
      });
    });
  }

  function syncCompactChrome() {
    var compact = isCompact();
    var phoneOnly = isPhone();
    var tabletOnly = isTablet();
    setHidden(document.getElementById('haBenefitsPager'), !compact);
    /* Features pager is phone-only — tablet uses the 2-col grid layout */
    setHidden(document.getElementById('haFeaturesPager'), !phoneOnly);
    setHidden(document.getElementById('haProductsPager'), !compact);
    setHidden(document.getElementById('haCarePager'), !compact);
    /* Types: tabs on phone, horizontal pager slider on tablet only */
    setHidden(document.getElementById('haTypesTabs'), !phoneOnly);
    setHidden(document.getElementById('haTypesPager'), !tabletOnly);
    setHidden(document.getElementById('haFaqMore'), !compact);
    /* Steps phone stepper is phone-only — tablet uses vertical accordion markers */
    setHidden(document.getElementById('haStepsStepper'), !phoneOnly);

    var typePanels = document.querySelectorAll('#haTypesPanels [data-type-panel]');
    if (phoneOnly) {
      var activeTab = document.querySelector('#haTypesTabs .ha-types__tab.is-active');
      var activeIndex = activeTab ? Number(activeTab.getAttribute('data-type-tab') || 0) : 0;
      typePanels.forEach(function (panel) {
        panel.style.display = '';
        panel.classList.toggle('is-active', Number(panel.getAttribute('data-type-panel')) === activeIndex);
      });
    } else {
      typePanels.forEach(function (panel) {
        panel.style.display = '';
        panel.classList.add('is-active');
      });
    }
  }

  // Ink-spread hover origin for steps media
  var stepsMedia = document.getElementById('haStepsMedia');
  if (stepsMedia && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    function setInkOrigin(event) {
      var rect = stepsMedia.getBoundingClientRect();
      if (!rect.width || !rect.height) return;
      var x = ((event.clientX - rect.left) / rect.width) * 100;
      var y = ((event.clientY - rect.top) / rect.height) * 100;
      stepsMedia.style.setProperty('--ink-x', Math.max(0, Math.min(100, x)).toFixed(2) + '%');
      stepsMedia.style.setProperty('--ink-y', Math.max(0, Math.min(100, y)).toFixed(2) + '%');
    }

    stepsMedia.addEventListener('pointerenter', function (event) {
      setInkOrigin(event);
      stepsMedia.classList.remove('is-ink');
      void stepsMedia.offsetWidth;
      stepsMedia.classList.add('is-ink');
    });

    stepsMedia.addEventListener('pointerleave', function () {
      stepsMedia.classList.remove('is-ink');
    });

    stepsMedia.setAttribute('tabindex', '0');
  }

  var benefitSection = document.getElementById('haBenefits');
  var benefitTrack = document.getElementById('haBenefitsTrack');
  var benefitStage = document.getElementById('haBenefitsStage');
  var benefitScroller = document.getElementById('haBenefitsScroller');
  var benefitList = document.getElementById('haBenefitsList');
  var benefitCards = benefitSection
    ? benefitSection.querySelectorAll('.ha-benefits__card')
    : [];

  if (benefitSection && benefitTrack && benefitStage && benefitScroller && benefitList && benefitCards.length) {
    var reduceMotionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
    var activeBenefitIndex = -1;
    var benefitTicking = false;
    var headerEl = document.querySelector('.site-header');
    var cardCount = benefitCards.length;

    function isReduced() {
      return reduceMotionQuery.matches;
    }

    function getHeaderOffset() {
      if (!headerEl) return 0;
      return Math.round(headerEl.getBoundingClientRect().height) || 0;
    }

    function setBenefitMetrics() {
      var headerOffset = getHeaderOffset();
      benefitSection.style.setProperty('--ha-benefits-header-offset', headerOffset + 'px');

      if (isCompact() || isReduced()) {
        benefitTrack.style.height = 'auto';
        benefitList.style.setProperty('--ha-benefits-shift', '0px');
        return;
      }

      var viewport = window.innerHeight || document.documentElement.clientHeight;
      var perCard = Math.max(viewport * 0.62, 360);
      var trackHeight = Math.round(viewport + perCard * cardCount);
      benefitTrack.style.height = trackHeight + 'px';
    }

    function centerActiveCard(index) {
      if (isCompact() || isReduced()) {
        benefitList.style.setProperty('--ha-benefits-shift', '0px');
        return;
      }

      var activeCard = benefitCards[index];
      if (!activeCard) return;

      var viewport = benefitScroller.clientHeight;
      var cardCenter = activeCard.offsetTop + activeCard.offsetHeight / 2;
      var shift = viewport / 2 - cardCenter;

      benefitList.style.setProperty('--ha-benefits-shift', Math.round(shift) + 'px');
    }

    function setActiveBenefit(index) {
      if (index === activeBenefitIndex) {
        centerActiveCard(index);
        return;
      }
      activeBenefitIndex = index;

      for (var i = 0; i < cardCount; i++) {
        var isActive = i === index;
        benefitCards[i].classList.toggle('is-active', isActive);
        benefitCards[i].setAttribute('aria-current', isActive ? 'true' : 'false');
      }

      centerActiveCard(index);
    }

    function updateBenefitProgress() {
      benefitTicking = false;

      if (isCompact() || isReduced()) {
        return;
      }

      var headerOffset = getHeaderOffset();
      var trackRect = benefitTrack.getBoundingClientRect();
      var scrollable = Math.max(1, benefitTrack.offsetHeight - benefitStage.offsetHeight);
      var progress = (headerOffset - trackRect.top) / scrollable;
      if (progress < 0) progress = 0;
      if (progress > 1) progress = 1;

      var index = Math.floor(progress * cardCount);
      if (index >= cardCount) index = cardCount - 1;

      setActiveBenefit(index);
    }

    function onBenefitScroll() {
      if (isCompact()) return;
      if (!benefitTicking) {
        benefitTicking = true;
        window.requestAnimationFrame(updateBenefitProgress);
      }
    }

    setBenefitMetrics();
    setActiveBenefit(0);
    updateBenefitProgress();

    window.addEventListener('scroll', onBenefitScroll, { passive: true });
    window.addEventListener('resize', function () {
      setBenefitMetrics();
      window.requestAnimationFrame(function () {
        centerActiveCard(activeBenefitIndex < 0 ? 0 : activeBenefitIndex);
        updateBenefitProgress();
      });
    }, { passive: true });

    compactQuery.addEventListener('change', function () {
      setBenefitMetrics();
      setActiveBenefit(0);
    });
  }

  initHaPager(
    document.getElementById('haBenefitsList'),
    document.getElementById('haBenefitsPager'),
    '.ha-benefits__card'
  );
  initHaPager(
    document.getElementById('haFeaturesList'),
    document.getElementById('haFeaturesPager'),
    '.ha-features__item'
  );
  initHaPager(
    document.querySelector('#haProductsTrack .ha-products__row'),
    document.getElementById('haProductsPager'),
    '[class*="col-"]'
  );
  initHaPager(
    document.querySelector('#haCareTrack .ha-care__row'),
    document.getElementById('haCarePager'),
    '[class*="col-"]'
  );
  initHaPager(
    document.getElementById('haTypesPanels'),
    document.getElementById('haTypesPager'),
    '[data-type-panel]'
  );

  var typesTabs = document.getElementById('haTypesTabs');
  if (typesTabs) {
    typesTabs.querySelectorAll('[data-type-tab]').forEach(function (tab) {
      tab.addEventListener('click', function () {
        var index = Number(tab.getAttribute('data-type-tab') || 0);
        typesTabs.querySelectorAll('[data-type-tab]').forEach(function (el) {
          var on = el === tab;
          el.classList.toggle('is-active', on);
          el.setAttribute('aria-selected', on ? 'true' : 'false');
        });
        document.querySelectorAll('#haTypesPanels [data-type-panel]').forEach(function (panel) {
          panel.classList.toggle('is-active', Number(panel.getAttribute('data-type-panel')) === index);
        });
      });
    });
  }

  var faqRoot = document.getElementById('haFaqAccordion');
  if (faqRoot) {
    faqRoot.addEventListener('shown.bs.collapse', function (event) {
      var item = event.target.closest('.ha-faq__item');
      if (item) item.classList.add('is-open');
    });
    faqRoot.addEventListener('hidden.bs.collapse', function (event) {
      var item = event.target.closest('.ha-faq__item');
      if (item) item.classList.remove('is-open');
    });
  }

  var faqSection = document.querySelector('.ha-faq');
  var faqMore = document.getElementById('haFaqMore');
  if (faqSection && faqMore) {
    faqMore.addEventListener('click', function () {
      var expanded = faqSection.classList.toggle('is-expanded');
      faqMore.querySelector('span').textContent = expanded ? 'View Less' : 'View More';
    });
  }

  syncCompactChrome();
  compactQuery.addEventListener('change', syncCompactChrome);
  phoneQuery.addEventListener('change', syncCompactChrome);
})();

/* ==========================================
   Hearing Aids Script - End
========================================== */

/* ==========================================================================
     Header top + brand visibility
     Show .header-top and .header-brand while the first page <h1> is still in
     view (or not yet scrolled past). Once the user scrolls past that <h1>,
     add .is-past-banner on .site-header so CSS can fade/slide both away.
     Scrolling back above the <h1> restores them.
     ========================================================================== */
  (function initHeaderBrandOnScroll() {
    var header = document.querySelector('.site-header');
    var brand = document.querySelector('.header-brand');
    var headerTop = document.querySelector('.header-top');
    var heading = document.querySelector('h1');

    if (!header || !heading) return;
    if (!brand && !headerTop) return;

    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var ticking = false;

    function updateHeaderChrome() {
      ticking = false;

      // Hide top/brand only after the first <h1> has fully left the top of the viewport.
      // Using viewport top (not header height) avoids flicker when sections collapse.
      var isPastHeading = heading.getBoundingClientRect().bottom <= 0;

      header.classList.toggle('is-past-banner', isPastHeading);

      if (brand) {
        brand.setAttribute('aria-hidden', isPastHeading ? 'true' : 'false');
      }
      if (headerTop) {
        headerTop.setAttribute('aria-hidden', isPastHeading ? 'true' : 'false');
      }
    }

    function onScrollOrResize() {
      if (reduceMotion) {
        updateHeaderChrome();
        return;
      }
      if (!ticking) {
        ticking = true;
        window.requestAnimationFrame(updateHeaderChrome);
      }
    }

    updateHeaderChrome();
    window.addEventListener('scroll', onScrollOrResize, { passive: true });
    window.addEventListener('resize', onScrollOrResize, { passive: true });
  })();