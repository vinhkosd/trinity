(function($) {
	"use strict";
	$(document).ready(function() {
		var $menuIcon = $('.menu-humburgur-icon'),
			$header   = $('#header'),
			$slide    = $('.our-team-slider');
		$menuIcon.on('click',function(e){
			$(this).toggleClass('open');
			var target = $(this).data('target');
			$header.toggleClass('header--open');
			$(target).slideToggle();
		})

		$('.sidebar-slider .slider').slick({
			dots:true,
			arrows: false,
			 // centerMode: true,
		});
		$('.main-slider .slider').slick({
			dots:true,
			arrows: false,
			autoplay: true,
		});
		
		
		$('.galleryBox-slider').owlCarousel({
			margin: 0,
			center: true,
			loop: true,
			nav: false,
			dots: true,
			items: 1,
			autoplay:true,
			autoplayTimeout:5000,
			autoplayHoverPause:true,
			responsive: {
			    750: {
			      items: 3,
				  nav: true,
			    },
			 }
		});
		$('.character-slider').slick({
			dots:true,
			arrows: true,
			autoplay: false,
		});
		$('.character_mobile_slide').slick({
			dots:false,
			arrows: true,
			autoplay: false,
		});
		$('.news-column-tab li').on('click',function(){
			let tar = $(this).attr('rel');
			$('.news-column-tab li').removeClass('active')
			$(this).addClass('active')
			$('.news-column-content').hide();
			$(tar).show();
		})
		
		$('.button_collapse').on('click',function(){
			$(this).toggleClass('off');
			$(this).parent().toggleClass('off');
		})
	});
})(jQuery);