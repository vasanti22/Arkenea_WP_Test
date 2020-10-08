var $ = jQuery.noConflict();

$(document).ready(function(){
	$('.feature-bottom-post-wrap').append($('.featured-articles-wrap .layout5-post-wrap'));
	$('.home-trending-articles-bottom').append($('.layout8-post-wrap'));

	$('.layout6-numb').each(function() {
		if ($(this).text() < 10) {
			$(this).text('0' + $(this).text());
		}
	});

	$('.search-close-icon').click(function(){
		if( $('.mobilemenu-icon').hasClass('open') ){
			$('.mobilemenu-icon').removeClass('open');
			$('.header-nav-menu').hide();
		}
		$('.searchform').toggleClass('open');
		($('.searchform').hasClass('open')) ? $('.searchtext').focus() : $('.searchtext').blur();
		$(this).toggleClass('close');
	});

	$('.mobilemenu-icon').on('click', function(){
		if( $('.searchform').hasClass('open') ){
			$('.searchform').removeClass('open')	
			$('.search-close-icon').removeClass('close');
		}
		$(this).toggleClass('open');
		$('.header-nav-menu').slideToggle(500);
	});	

	var prev_arrow = '<div class="slick-prev"><svg style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 "></polygon></svg></div>';
	var next_arrow = '<div class="slick-next"><svg style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="160,115.4 180.7,96 352,256 180.7,416 160,396.7 310.5,256 "></polygon></svg></div>';

	$('.home-banner-posts-wrap').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		fade: true,
		arrows: true,
		prevArrow: prev_arrow,
		nextArrow: next_arrow,
		appendArrows: $('.home-banner-arr-wrap'),
		infinite: false,
	});

	$('.home-latest-articles-posts-wrap').slick({
		arrows: true,
		appendArrows: $('.slider-nav-arr-wrap-latest'),
		slidesToShow: 5,
		slidesToScroll: 1,
		prevArrow: prev_arrow,
		nextArrow: next_arrow,
		responsive: [
			{
	            breakpoint: 1500,
                settings:{
        			slidesToShow: 4,
        		}
	        },
			{
	            breakpoint: 900,
                settings:{
        			slidesToShow: 3,
        		}
	        },
			{
	            breakpoint: 700,
                settings:{
        			slidesToShow: 2
        		}
	        },
			{
	            breakpoint: 500,
                settings:{
        			slidesToShow: 1
        		}
	        }
		]
	});

	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		fade: true,
		asNavFor: '.slider-nav'
	});

	$('.slider-nav').slick({
		autoplay: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		focusOnSelect: true,
		appendArrows: $('.slider-nav-arr-wrap'),
		prevArrow: prev_arrow,
		nextArrow: next_arrow,
		arrows: false,
		responsive: [
			{
	            breakpoint: 768,
                settings:{
                	autoplay: true,
        			slidesToShow: 3,
        			arrows: true,
        		}
	        },
			{
	            breakpoint: 600,
                settings:{
        			slidesToShow: 2,
        			arrows: true,
        		}
	        }
		]
	});

	$('.home-trending-articles-bottom').slick({
		dots: false,
		arrows: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
	    responsive: [
	        {
	            breakpoint: 9999,
	            settings: "unslick"
	        },
	        {
	            breakpoint: 599,
                settings:{
        			slidesToShow: 1
        		}
	        }
	    ]
	});
});

var cachedWidth = $(window).width();
$(window).resize(function(){
	var newWidth1 = $(window).width();
	if(newWidth1 !== cachedWidth){
		if (window.innerWidth > 1024){
			$('.header-nav-menu').show();
		}else if (window.innerWidth <= 1024) {
			$('.header-nav-menu').hide();
			$('.mobilemenu-icon').removeClass('open');
		}

		if( $('.searchform').hasClass('open') ){
			$('.searchform').removeClass('open')	
			$('.search-close-icon').removeClass('close');
			$('.searchtext').blur();
		}
		cachedWidth = newWidth1;
	}
});