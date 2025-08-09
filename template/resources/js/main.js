import { ua, normalizeURL } from './util';
import PhotoSwipeLightbox from 'photoswipe/lightbox';
import PhotoSwipe from 'photoswipe';

// override viewport for mobile
const viewportfix = function () {
  if (/ipad|iphone|android|macintosh/.test(ua) && screen.availWidth <= 1024) {
    $('meta[name="viewport"').attr('content', 'width=1110');
    document.documentElement.classList.add('is-mobile');
  }
};

// activate global navigation
const activateGnav = function () {
  const $target = $('.l-gnav');
  const protocol = location.protocol;
  const host = location.host;
  const currentUrl = location.pathname;
  const isHome = /^\/$/.test(normalizeURL(currentUrl));
  $target.find('a').filter('.is-active').removeClass('is-active');
  if (!isHome) {
    $target.find('a').each(function () {
      var $this = $(this);
      var url = normalizeURL($this.attr('href'));
      if (url.match(/^\//)) {
        if (currentUrl.match(url)) $this.addClass('is-active');
      } else if (url) {
        url = url.replace(protocol + '//', '').replace(host, '');
        if (currentUrl.match(url)) $this.addClass('is-active');
      }
    });
  }
};

// scroller fix
const scrollerfix = function () {
  if ('scrollingElement' in document) return document.scrollingElement;
  if (navigator.userAgent.toLowerCase().indexOf('webkit') != -1)
    return document.body;
  return document.documentElement;
};

// photoSwipe setu
const setPhotoSwipe = function () {
  $('a[data-pswp-src]').each((i, ele) => {
    const $anchor = $(ele);
    const $img = $(ele).find('img');
    const img = $img[0];
    if ($img.length) {
      if (img.complete) {
        $anchor.attr('data-pswp-width', img.naturalWidth);
        $anchor.attr('data-pswp-height', img.naturalHeight);
      } else {
        $img.on('load', function () {
          $anchor.attr('data-pswp-width', img.naturalWidth);
          $anchor.attr('data-pswp-height', img.naturalHeight);
        });
      }
    }
  });
  const lightbox = new PhotoSwipeLightbox({
    gallery: '.js-pswp',
    children: 'a[data-pswp-src]',
    pswpModule: PhotoSwipe,
  });
  lightbox.init();
};

viewportfix();
scrollerfix();
activateGnav();
setPhotoSwipe();
