$(function(){
	'use strict'
	$(window).resize(function(){
		$('.middle').css({
			top : ($('.header').height()-$('.middle').height())/2,
			
		});	
	});
	$('.middle').css({
		top : ($('.header').height()-$('.middle').height())/2,
		
	});	
	
	var images = ['slider1.jpg','slider2.jpg','slider3.jpg'];
	
    setInterval(function(){
		$('.slider > div').css({'background': 'url(../gtm/layout/css/images/'+images[Math.floor(Math.random() * images.length)] +')no-repeat',
		'background-size': 'cover',
		'-webkit-background-size': 'cover',
	    '-moz-background-size': 'cover'
		 });
	},5000);
	
	
	
});