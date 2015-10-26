var Default = {
	init: function(){
		this.resizeElements();
		this.initSlick();
	},
	resizeElements: function(){
		var timedFn = window.setTimeout(function(){
			var $cards = $('.cards');
			var _maxH = _h = 0;
			$cards.each(function(index, el) {
				var _h = $(el).outerHeight();
				_maxH = (_h > _maxH ? _h : _maxH);
			});
			$cards.height(_maxH);
			window.clearTimeout(timedFn);
		}, 1000);
	},
	initSlick: function(){
		$('.slick').slick({
			centerMode: true,
			variableWidth: true,
		  	speed: 500
		});
	}
};

(function($){
	Default.init();	
})(window.jQuery);