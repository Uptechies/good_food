(function($){
	"use strict";
	jQuery(document).on('ready', function () {

		// Header Sticky
		$(window).on('scroll',function() {
			if ($(this).scrollTop() > 120){
				$('.navbar-area').addClass("is-sticky");
			}
			else{
				$('.navbar-area').removeClass("is-sticky");
			}
		});

		// Others Option For Responsive JS
		$(".others-option-for-responsive .dot-menu").on("click", function(){
			$(".others-option-for-responsive .container .container").toggleClass("active");
		});

		// Popup Video
		$('.popup-youtube').magnificPopup({
			disableOn: 320,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});

		// Search Menu JS
		$(".others-option .search-box i").on("click", function(){
			$(".search-overlay").toggleClass("search-overlay-active");
		});
		$(".search-overlay-close").on("click", function(){
			$(".search-overlay").removeClass("search-overlay-active");
		});

		// Odometer JS
		$('.odometer').appear(function(e) {
			var odo = $(".odometer");
			odo.each(function() {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
		});

		// Nice Select JS
		$('select').niceSelect();
	});

	// WOW Animation JS
	if($('.wow').length){
		var wow = new WOW({
			mobile: false
		});
		wow.init();
	}

	// Go to Top
	$(function(){
		// Scroll Event
		$(window).on('scroll', function(){
			var scrolled = $(window).scrollTop();
			if (scrolled > 600) $('.go-top').addClass('active');
			if (scrolled < 600) $('.go-top').removeClass('active');
		});
		// Click Event
		$('.go-top').on('click', function() {
			$("html, body").animate({ scrollTop: "0" },  500);
		});

		$( '.toggle-nav' ).click( function() {
			$( this ).toggleClass( 'menu-open' );
			$( '#site-navigation' ).toggleClass( 'menu-open' );
			$( '.others-option-for-responsive' ).toggleClass( 'menu-open' );
		});
		$( '.sub-trigger' ).click( function() {
			$( this ).toggleClass( 'is-open' );
			$( this ).siblings( '.dropdown-menu' ).toggle( 300 );
		});

		$( '#site-navigation .menu-close' ).on( 'click', function(e) {
			$( '.toggle-nav' ).toggleClass( 'menu-open' );
			$( '#site-navigation' ).toggleClass( 'menu-open' );
			$( '.toggle-nav' ).focus();
		});
	});

	$( window ).on( 'elementor/frontend/init', function() {
        elementorFrontend.hooks.addAction( 'frontend/element_ready/widget', function( $scope ) {

			// Testimonials Slides
			$('.testimonials-slides').owlCarousel({
				loop: true,
				nav: true,
				dots: false,
				autoplayHoverPause: true,
				autoplay: true,
				items: 1,
				navText: [
					"<i class='bx bx-left-arrow-alt'></i>",
					"<i class='bx bx-right-arrow-alt'></i>"
				]
			});

			// Products Slides
			$('.products-slides').owlCarousel({
					loop: true,
					nav: false,
					dots: true,
					autoplayHoverPause: true,
					autoplay: true,
					margin: 30,
					navText: [
						"<i class='bx bx-left-arrow-alt'></i>",
						"<i class='bx bx-right-arrow-alt'></i>"
					],
					responsive: {
						0: {
							items: 1,
						},
						576: {
							items: 2,
						},
						768: {
							items: 2,
						},
						992: {
							items: 3,
						},
						1200: {
							items: 4,
						}
					}
				});
		});
    });

}(jQuery));