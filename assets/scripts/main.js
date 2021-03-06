function menuToggle(el){
	('.menu-wrapper').slideToggle();
}
(function($) {

	AOS.init({
		easing: 'ease-out-back',
		duration: 1000
	});

	$('.home-hero__slider').slick({
		dots: true,
		arrows: false,
		autoplay: true,
		fade: true,
		autoplaySpeed: 8000,
		appendDots: '.home-hero__slider_nav'
	});

	$('.testimonial-slider').slick({
		fade: true,
		autoplay: true,
		arrows: false,
		dots: true,
		appendDots: '.testimonial-slider__nav'

	});

	$('.about-team__slider').slick({
		arrows: false,
		dots: true,
		autoplay: true,
		slide: '.col-md-1',
		slidesToShow: 4,
		slidesToScroll: 2,
		mobileFirst: true,
		appendDots: '.about-team__slider_nav',
		responsive: [
			{
				breakpoint: 120,
				settings: {
					slidesToShow: 2,
					autoplay: true,
					dots: true,
					arrows: false

				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					autoplay: true,
					dots: true,
					arrows: false
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					autoplay: true,
					dots: true,
					arrows: false
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 6,
					slidesToScroll: 6,
					autoplay: true,
					dots: true,
					arrows: false,
				}
			}
		]
	});

	$('.resourcesvideos').slick({
	  dots: true,
	  arrows: false,
	  infinite: false,
	  autoplay: true,
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 4,
	  appendDots: '.resource-slider__nav',
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			infinite: true,
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
	  ]
	});

	$('.menu-toggle').on('click', function(){
		//alert('test');
		$('.menu-wrapper').slideToggle();
	});

	$('li').on('click', function(e){
		//e.stopPropagation();
		//console.log('test');
		$(this).find('.sub-menu').slideToggle();
	});

		var child = $('.slick-dots').find('li');

	$.each( child, function (key, value) {

		var li = $(value);

		var num = li.find('button').text();

		if(num < 10) {
			var zero = 0;
			li.find('button').text(zero + num);
		}
	});

	$('.modal').on('hide.bs.modal', function() {
		 var memory = $(this).html();
		 $(this).html(memory);
	});

})(jQuery);