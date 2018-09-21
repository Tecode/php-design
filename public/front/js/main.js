jQuery( document ).ready(function( $ ) {
"use strict"
/*-----------------------------------------------------------------------------------*/
/* 	LOADER
/*-----------------------------------------------------------------------------------*/
$("#loader").delay(1000).fadeOut("slow");
/*-----------------------------------------------------------------------------------*/
/*		STICKY NAVIGATION
/*-----------------------------------------------------------------------------------*/
$(".sticky").sticky({topSpacing:0});
/*-----------------------------------------------------------------------------------*/
/*  FULL SCREEN
/*-----------------------------------------------------------------------------------*/
$('.full-screen').superslides({});
/*-----------------------------------------------------------------------------------
    Animated progress bars
/*-----------------------------------------------------------------------------------*/
$('.progress-bars').waypoint(function() {
  $('.progress').each(function(){
    $(this).find('.progress-bar').animate({
      width:$(this).attr('data-percent')
     },200);
});},
	{ 
	offset: '100%',
    triggerOnce: true 
});
/* ==========================================================================
    countdown timer
========================================================================== */
$('.countdown').downCount({
     date: '12/12/2018 12:00:00' // M/D/Y
});
/*-----------------------------------------------------------------------------------*/
/*	ISOTOPE PORTFOLIO
/*-----------------------------------------------------------------------------------*/
var $container = $('.port-wrap .items');
    $container.imagesLoaded(function () {
    $container.isotope({
    itemSelector: '.portfolio-item',
    layoutMode: 'masonry'
});	
});
$('.portfolio-filter li a').on('click', function () {
    $('.portfolio-filter li a').removeClass('active');
    $(this).addClass('active');
    var selector = $(this).attr('data-filter');
    $container.isotope({
      filter: selector
    });
return false;
});
//Togle Menu on click in Header
$(".menu-shows").on('click', function(){
	$(".menu-shows, .menu-shows-inner, .menu").toggleClass("active");
});
/*-----------------------------------------------------------------------------------*/
/*	ISOTOPE PORTFOLIO
/*-----------------------------------------------------------------------------------*/
var $container = $('.port-wrap .items');
    $container.imagesLoaded(function () {
    $container.isotope({
    itemSelector: '.portfolio-item',
    layoutMode: 'masonry'
});	
});
$('.portfolio-filter li a').on('click', function () {
    $('.portfolio-filter li a').removeClass('active');
    $(this).addClass('active');
    var selector = $(this).attr('data-filter');
    $container.isotope({
      filter: selector
    });
return false;
});
/*-----------------------------------------------------------------------------------*/
/*    PIE CHART
/*-----------------------------------------------------------------------------------*/
$('#pie-1').pieChart({
	barColor: '#8c5f0b',
    trackColor: '#fff',
    lineCap: 'round',
    lineWidth: 4,
    	onStep: function (from, to, percent) {
    		$(this.element).find('.pie-value').text(Math.round(percent) + '%');
        }
});
$('#pie-2').pieChart({
	barColor: '#8c5f0b',
    trackColor: '#fff',
    lineCap: 'round',
    lineWidth: 4,
    	onStep: function (from, to, percent) {
    	$(this.element).find('.pie-value').text(Math.round(percent) + '%');
	}
});
$('#pie-3').pieChart({
	barColor: '#8c5f0b',
    trackColor: '#fff',
    lineCap: 'round',
    lineWidth: 4,
    	onStep: function (from, to, percent) {
        	$(this.element).find('.pie-value').text(Math.round(percent) + '%');
		}
});
$('#pie-4').pieChart({
	barColor: '#8c5f0b',
    trackColor: '#fff',
    lineCap: 'round',
    lineWidth: 4,
    	onStep: function (from, to, percent) {
        	$(this.element).find('.pie-value').text(Math.round(percent) + '%');
		}
});


/*-----------------------------------------------------------------------------------*/
/*    Parallax
/*-----------------------------------------------------------------------------------*/
jQuery.stellar({
   horizontalScrolling: false,
   scrollProperty: 'scroll',
   positionProperty: 'position',
});
/*-----------------------------------------------------------------------------------*/
/* 	SLIDER REVOLUTION
/*-----------------------------------------------------------------------------------*/
jQuery(".tp-banner").revolution({
	sliderType:"standard",
	sliderLayout:"auto",
	delay:9000,
	minHeight:360,
	gridwidth:0,
	navigationType:"bullet",
	navigationArrows:"solo",
	navigationStyle:"preview4",
	gridheight:360
});		
/*-----------------------------------------------------------------------------------*/
/* 	SLIDER REVOLUTION
/*-----------------------------------------------------------------------------------*/
jQuery('.tp-banner-full').show().revolution({
	dottedOverlay:"none",
	delay:7000,
	startwidth:1200,
	startheight:500,
	navigationType:"bullet",
	navigationArrows:"solo",
	navigationStyle:"preview4",
	parallax:"mouse",
	parallaxBgFreeze:"on",
	parallaxLevels:[7,4,3,2,5,4,3,2,1,0],												
	keyboardNavigation:"on",						
	shadow:0,
	fullWidth:"on",
	fullScreen:"off",
	shuffle:"off",						
	autoHeight:"off",						
	forceFullWidth:"on",	
	fullScreenOffsetContainer:""	
});
/*-----------------------------------------------------------------------------------*/
/* 	TESTIMONIAL SLIDER
/*-----------------------------------------------------------------------------------*/
$("#testi-slide").owlCarousel({ 
    items : 1,
	autoplay:true,
	loop:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    navigation : true,
	nav: true,
	navText: ["<i class='lnr lnr-arrow-left'></i>","<i class='lnr lnr-arrow-right'></i>"],
	pagination : true,
	singleItem	: true
});
/*-----------------------------------------------------------------------------------*/
/* 	Single SLIDER
/*-----------------------------------------------------------------------------------*/
$(".singl-slide").owlCarousel({ 
    items : 1,
	autoplay:true,
	loop:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    navigation : true,
	nav: true,
	navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	pagination : true,
	singleItem	: true
});
/*-----------------------------------------------------------------------------------*/
/* 	TESTIMONIAL SLIDER
/*-----------------------------------------------------------------------------------*/
$(".deal-slide").owlCarousel({ 
    items : 1,
	autoplay:true,
	loop:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    navigation : true,
	nav: true,
	navText: ["<span>Previous Deal</span>","<span>Next Deal</span>"],
	pagination : true,
	lazyLoad:true,
	nav: true,
	singleItem	: true
});
/*-----------------------------------------------------------------------------------*/
/* 	TESTIMONIAL SLIDER
/*-----------------------------------------------------------------------------------*/
$(".item-slide-5").owlCarousel({ 
    items : 5,
	autoplay:true,
	loop:true,
	margin: 30,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
	navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	lazyLoad:true,
	nav: true,
	responsive:{
        0:{
            items:1,
        },
        600:{
            items:3,
        },
        1000:{
            items:4,
        },
		1200:{
            items:5,
        }
    },
	animateOut: 'fadeOut'		
});
/*-----------------------------------------------------------------------------------*/
/* 	TESTIMONIAL SLIDER
/*-----------------------------------------------------------------------------------*/
$(".item-slide-4").owlCarousel({ 
    items : 4,
	autoplay:true,
	loop:false,
	margin: 30,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
	navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	lazyLoad:true,
	nav: true,
	responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:4,
        }
    },
	animateOut: 'fadeOut'		
});
/*-----------------------------------------------------------------------------------*/
/* 	CASE SLIDER
/*-----------------------------------------------------------------------------------*/
$(".item-slide-3").owlCarousel({ 
    items : 3,
	autoplay:true,
	loop:false,
	margin: 30,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
	navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	lazyLoad:true,
	nav: true,
	responsive:{
        0:{
            items:1,
        },
        800:{
            items:2,
        },
		1000:{
            items:3,
        },
    },
	animateOut: 'fadeOut'		
});
/*-----------------------------------------------------------------------------------*/
/* 	CASE SLIDER
/*-----------------------------------------------------------------------------------*/
$(".item-slide-2").owlCarousel({ 
    items : 2,
	autoplay:true,
	loop:false,
	margin: 30,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
	navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	lazyLoad:true,
	nav: true,
	responsive:{
        0:{
            items:1,
        },
        800:{
            items:2,
        },
		1000:{
            items:2,
        },
    },
	animateOut: 'fadeOut'
		
});
/*-----------------------------------------------------------------------------------*/
/* 	CASE SLIDER
/*-----------------------------------------------------------------------------------*/
$("#blog-slide").owlCarousel({ 
    items : 3,
	autoplay:true,
	loop:false,
	margin: 30,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
	navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	lazyLoad:true,
	nav: true,
	responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
		1000:{
            items:3,
        },
    },
	animateOut: 'fadeOut'		
});
/*-----------------------------------------------------------------------------------*/
/* 	CASE SLIDER
/*-----------------------------------------------------------------------------------*/
$("#blog-slide-2").owlCarousel({ 
    items : 2,
	autoplay:true,
	loop:false,
	margin: 30,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
	navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	lazyLoad:true,
	nav: true,
	responsive:{
        0:{
            items:1,
        },
        800:{
            items:2,
        },
		1000:{
            items:2,
        },
    },
	animateOut: 'fadeOut'
		
});
/*-----------------------------------------------------------------------------------*/
/* 	CASE SLIDER
/*-----------------------------------------------------------------------------------*/
$("#client-slide-1").owlCarousel({ 
    items : 4,
	autoplay:true,
	loop:true,
	margin: 30,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
	navText: ["<i class='lnr lnr-arrow-left'></i>","<i class='lnr lnr-arrow-right'></i>"],
	lazyLoad:true,
	nav: true,
	responsive:{
        0:{
            items:1,
        },
        800:{
            items:2,
        },
		1000:{
            items:4,
        },
    },
	animateOut: 'fadeOut'
		
});
/*-----------------------------------------------------------------------------------*/
/* 	COUNTER
/*-----------------------------------------------------------------------------------*/
$('.counter').counterUp({
    delay: 10,
    time: 300
});
/*-----------------------------------------------------------------------------------
    TESTNMONIALS STYLE 1
/*-----------------------------------------------------------------------------------*/
$('.free-slide').flexslider({
	mode: 'fade',
	animation: "fade",
	auto: true
});
/*-----------------------------------------------------------------------------------*/
/* 	Thumb Slider
/*-----------------------------------------------------------------------------------*/
$('.thumb-slider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
});
/*-----------------------------------------------------------------------------------*/
/* 	ANIMATION
/*-----------------------------------------------------------------------------------*/
var wow = new WOW({
    boxClass:     'animate',      // animated element css class (default is wow)
    animateClass: 'animated', 	// animation css class (default is animated)
    offset:       100,          // distance to the element when triggering the animation (default is 0)
    mobile:       false        // trigger animations on mobile devices (true is default)
});
wow.init();

});

