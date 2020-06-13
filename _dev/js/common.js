'use strict';

import objectFitImages from 'object-fit-images'
import Stickyfill from 'stickyfilljs'
import { ua, normalizeURL, scroller } from 'util'

;(function(){

	// viewport fix
	// const viewportfix = function(){
	// 	if (/ipad|iphone|android/.test(ua) && screen.availWidth < 1024) {
	// 		$('meta[name="viewport"').attr('content', 'width=1110');
	// 	} 
	// }

	// UA fix
	const uafix = function() {
		if (/msie|trident\/7/.test(ua)) {
			let link = document.createElement('link');
			link.rel = 'stylesheet';
			link.href = '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap';
			document.head.appendChild(link);
			document.documentElement.classList.add('is-msie');
		}
	}

	// fix for style
	const stylefix = function(){
		// sticky position
		let target = document.querySelectorAll('.u-sticky');
		Stickyfill.add(target);
		// object-fit
		objectFitImages();
	}

	// activate global navigation
	const activateGnav = function(){
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
	}

	//viewportfix();
	uafix();
	stylefix();
	activateGnav();
})();