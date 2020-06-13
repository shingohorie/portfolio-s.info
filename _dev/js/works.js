'use strict';

import PhotoZoom from './modules/_photozoom';

;(function(){

	/*--------------------------------------------------------------------------------
		generate PhotoZoom
	--------------------------------------------------------------------------------*/
	let generatePhotoZoom = function(){
		new PhotoZoom();
	}

	/*--------------------------------------------------------------------------------
		main
	--------------------------------------------------------------------------------*/
	var __main = ()=> {
		generatePhotoZoom();
	}

	document.addEventListener('DOMContentLoaded', __main, false);
})();
