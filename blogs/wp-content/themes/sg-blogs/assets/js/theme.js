/**
 * SG Blogs theme JS — header scroll, AOS, Load More.
 */
(function () {
  'use strict';

  function initAos() {
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 700,
        once: true,
        offset: 60,
      });
    }
  }

  function initHeaderCollapse() {
    var header = document.querySelector('.site-header');
    if (!header) return;

    var brand = header.querySelector('.header-brand');
    var ticking = false;

    function update() {
      var y = window.scrollY || 0;
      if (y > 80) {
        header.classList.add('is-scrolled');
        if (brand) brand.setAttribute('aria-hidden', 'true');
      } else {
        header.classList.remove('is-scrolled');
        if (brand) brand.removeAttribute('aria-hidden');
      }
      ticking = false;
    }

    window.addEventListener(
      'scroll',
      function () {
        if (!ticking) {
          window.requestAnimationFrame(update);
          ticking = true;
        }
      },
      { passive: true }
    );

    update();
  }

  function initLoadMore() {
    var btn = document.getElementById('blogLoadMore');
    var grid = document.getElementById('blogListingGrid');
    if (!btn || !grid || typeof sgBlogs === 'undefined') return;

    var loading = false;

    btn.addEventListener('click', function () {
      if (loading) return;

      var page = parseInt(btn.getAttribute('data-page'), 10) || 1;
      var max = parseInt(btn.getAttribute('data-max'), 10) || 1;
      var next = page + 1;

      if (next > max) {
        btn.hidden = true;
        return;
      }

      loading = true;
      btn.disabled = true;
      btn.textContent = sgBlogs.i18n.loading;

      var body = new FormData();
      body.append('action', 'sg_blogs_load_more');
      body.append('nonce', sgBlogs.nonce);
      body.append('page', String(next));

      fetch(sgBlogs.ajaxUrl, {
        method: 'POST',
        credentials: 'same-origin',
        body: body,
      })
        .then(function (res) {
          return res.json();
        })
        .then(function (json) {
          if (!json || !json.success || !json.data || !json.data.html) {
            throw new Error('bad response');
          }

          var wrap = document.createElement('div');
          wrap.innerHTML = json.data.html;
          var cards = Array.prototype.slice.call(wrap.children);

          cards.forEach(function (card, i) {
            card.classList.add('blog-card--enter');
            card.style.animationDelay = i * 60 + 'ms';
            grid.appendChild(card);
          });

          btn.setAttribute('data-page', String(json.data.page));
          grid.setAttribute('data-page', String(json.data.page));

          if (!json.data.hasMore) {
            btn.hidden = true;
          } else {
            btn.disabled = false;
            btn.textContent = sgBlogs.i18n.loadMore;
          }
        })
        .catch(function () {
          btn.disabled = false;
          btn.textContent = sgBlogs.i18n.loadMore;
        })
        .finally(function () {
          loading = false;
        });
    });
  }

  function initBlogFaq() {
    var faqRoot = document.getElementById('blogFaq');
    if (!faqRoot) return;

    var items = Array.prototype.slice.call(faqRoot.querySelectorAll('.blog-faq__item'));

    function setOpen(item, open) {
      var trigger = item.querySelector('.blog-faq__trigger');
      var panel = item.querySelector('.blog-faq__panel');
      if (!trigger || !panel) return;

      item.classList.toggle('is-open', open);
      trigger.setAttribute('aria-expanded', open ? 'true' : 'false');
      if (open) {
        panel.removeAttribute('hidden');
      } else {
        panel.setAttribute('hidden', '');
      }
    }

    items.forEach(function (item) {
      var trigger = item.querySelector('.blog-faq__trigger');
      if (!trigger) return;

      trigger.addEventListener('click', function () {
        var willOpen = !item.classList.contains('is-open');
        items.forEach(function (other) {
          setOpen(other, other === item && willOpen);
        });
      });
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    initAos();
    initHeaderCollapse();
    initLoadMore();
    initBlogFaq();
  });
})();
