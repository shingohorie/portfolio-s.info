'use strict';

;(function(){

	// tooltip
	const tooltip = function(){
		const $target = $('i.hover');
		let mouseOnTimer, mouseOutTimer;

		$target.on('mouseover', function(){
			const $this = $(this);
			const $img = $this.find('img');
			const $link = $this.closest('a');
			let alt = $img.attr('alt');

			clearTimeout(mouseOnTimer);
			mouseOnTimer = setTimeout(function(){
				if (alt) {
					if ($link.length) alt = `# ${alt} に関する実績をみる`;
					$this.append('<span class="c-tooltip">' + alt + '</span>');
				}
			}, 200);

		}).on('mouseout', function(){
			const $this = $(this);
			const $tooltip = $this.find('.c-tooltip');
			clearTimeout(mouseOnTimer);
			mouseOutTimer = setTimeout(function () {
				if ($tooltip.length) $tooltip.remove();
			}, 100);
		})
	}

	const tooltipV2 = function(){
		const $target = $('a[data-title]');
		let mouseOnTimer, mouseOutTimer;

		$target.on('mouseover', function(){
			const $this = $(this);
			let title =  $this.attr('data-title');
			clearTimeout(mouseOnTimer);
			mouseOnTimer = setTimeout(function(){
				if (title) $this.append('<span class="c-tooltip">' + title + '</span>');
			}, 200);

		}).on('mouseout', function(){
			const $this = $(this);
			const $tooltip = $this.find('.c-tooltip');
			clearTimeout(mouseOnTimer);
			mouseOutTimer = setTimeout(function () {
				if ($tooltip.length) $tooltip.remove();
			}, 100);
		})
	}
	
	tooltip();
	tooltipV2();
})();