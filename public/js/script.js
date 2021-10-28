(function($, undefined){
	$(function(){
		/* Slick */
		$('.slider-for').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.slider-nav'
		});
		$('.slider-nav').slick({
			prevArrow: '<i class="fas fa-angle-double-left h2"></i>',
			nextArrow: '<i class="fas fa-angle-double-right h2"></i>',
			slidesToShow: 3,
			slidesToScroll: 1,
			asNavFor: '.slider-for',
			dots: false,
			centerMode: true,
			focusOnSelect: true
		});
	});
})(jQuery);