'use strict';

import PhotoSwipe from 'photoSwipe';
import PhotoSwipeUI_Default from 'photoSwipeUIDefault';

/*--------------------------------------------------------------------------------
	photoZoom
	- Depends on photoSwipe.js / photoSwipeUIDefault.js
	- The source of the script is https://photoswipe.com/documentation/getting-started.html
--------------------------------------------------------------------------------*/
class photoZoom {
	constructor () {
		this.wrapperName = '.js-pswp';
		this.options = {
			escKey: true,
			arrowKeys: true,
			history: false,
			focus: true,
		};

		this.init();
	}

	init () {
		const scope = this;
		scope.appendSwipeContainer();
		scope.setPhotoSwipe();
	}

	appendSwipeContainer () {
		const scope = this;

		let container = `
		<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="pswp__bg"></div>
			<div class="pswp__scroll-wrap">
				<div class="pswp__container">
					<div class="pswp__item"></div>
					<div class="pswp__item"></div>
					<div class="pswp__item"></div>
				</div>
				<div class="pswp__ui pswp__ui--hidden">
					<div class="pswp__top-bar">
						<div class="pswp__counter"></div>
						<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
						<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
						<div class="pswp__preloader">
							<div class="pswp__preloader__icn">
								<div class="pswp__preloader__cut">
									<div class="pswp__preloader__donut"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
						<div class="pswp__share-tooltip"></div>
					</div>
					<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
					</button>
					<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
					</button>
					<div class="pswp__caption">
						<div class="pswp__caption__center"></div>
					</div>
				</div>
			</div>
		</div>`;

		$('body').append(container);
	}

	setPhotoSwipe () {
		const scope = this;


		var initPhotoSwipeFromDOM = function() {

			let galleryWrap = $(scope.wrapperName);

			//クラス名の設定(アイテム)
			var itemClassName = '.js-pswp__item';
			//クラス名の設定(リンク)
			var linkClassName = '.js-pswp__link';

			//オプションの設定
			var setOptions = {
				escKey: true,
				arrowKeys: true,
				history: 1,
				focus: true,
			};

			galleryWrap.each(function(idx){

				//[.js-pswp__item]が付いたエレメントを全て取得する
				var $galleryElements = galleryWrap.eq(idx).find(itemClassName);
				var items = [];

				//サムネイル作成
				var parseThumbnailElements = function() {
					let $itemEl;
					let $linkEl;
					let size;
					let item;

					var setItems = function(i){
						
						if (i < $galleryElements.length) {
							$itemEl = $galleryElements.eq(i);
							$linkEl = $itemEl.find(linkClassName);
							var image = new Image();
							image.src = $linkEl.find('img').attr('src');
							image.onload = function(){
								size = [image.width, image.height];
								items.push({
									src: $linkEl.attr("href"),
									w: parseInt(size[0], 10),
									h: parseInt(size[1], 10),
									msrc: $linkEl.find('img').attr("src"),
									el: $itemEl.get(0),
									title: $linkEl.find('img').attr("alt")
								});
								setItems(i+1);		
							}
						}
					}

					setItems(0);

					// for(var i=0,l=$galleryElements.length; i < l; i++) {
					// 	$itemEl = $galleryElements.eq(i);
					// 	$linkEl = $itemEl.find(linkClassName);

					// 	if ($linkEl.attr("data-size") !== void 0) {
					// 		size = $linkEl.attr("data-size").split("x");
					// 		items.push({
					// 			src: $linkEl.attr("href"),
					// 			w: parseInt(size[0], 10),
					// 			h: parseInt(size[1], 10),
					// 			msrc: $linkEl.find('img').attr("src"),
					// 			el: $itemEl.get(0),
					// 			title: $linkEl.find('img').attr("alt")
					// 		});
					// 	}
					// }
					return items;
				};

					

				//クリックイベントの設定
				var onThumbnailsClick = function(e) {
					e.preventDefault();
					var eTarget = e.target;
					openPhotoSwipe(parseInt($(this).parents(itemClassName).attr('data-pswp-uid')-1, 10), $galleryElements.eq(idx), "");
					return false;
				};


				//PhotoSwipeの起動
				var openPhotoSwipe = function(index, galleryElement, disableAnimation) {
					var pswpElement = document.querySelectorAll(".pswp")[0];
					var gallery;
					var options;
					//オプション
					options = setOptions;
					options.index = index;
					options.getThumbBoundsFn = function(index) {
						var thumbnail = items[index].el.getElementsByTagName("img")[0];
						var pageYScroll = window.pageYOffset || document.documentElement.scrollTop;
						var rect = thumbnail.getBoundingClientRect();
						return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
					}
					options.galleryUID = idx+1;
					//アニメーションを停止する場合
					if(disableAnimation){
						options.showAnimationDuration = 0;
					}
					gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
					gallery.init();
				};

				//タッチイベントの設定
				items = parseThumbnailElements();
				for(var i = 0, l = $galleryElements.length; i < l; i++) {
					$galleryElements.eq(i).attr('data-pswp-uid', i+1);
					$galleryElements.eq(i).find(linkClassName).on('click', onThumbnailsClick);
				}


				//画像の固有リンクへのアクセス (URLアドレスの解析)
				var photoswipeParseHash = function() {
					var hash = window.location.hash.substring(1);
					var params = {};

					if(hash.length < 5) {
						return params;
					}

					var vars = hash.split('&');
					for (var i = 0; i < vars.length; i++) {
						if(!vars[i]) {
							continue;
						}
						var pair = vars[i].split('=');
						if(pair.length < 2) {
							continue;
						}
						params[pair[0]] = pair[1];
					}

					if(params.gid) {
						params.gid = parseInt(params.gid, 10);
					}

					return params;
				};

				//画像の固有リンクへのアクセス (PhotoSwipeの起動)
				var hashData = photoswipeParseHash();
				if(hashData.pid > 0 && hashData.gid > 0) {
					openPhotoSwipe( hashData.pid - 1 ,  $galleryElements.eq(hashData.gid - 1), true );
				}
			});
		};

		// execute above function
		initPhotoSwipeFromDOM(scope.wrapperName);
	}
}

export default photoZoom;
