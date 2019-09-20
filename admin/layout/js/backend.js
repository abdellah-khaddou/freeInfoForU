$(function () {

	'use strict';



	// Trigger The Selectboxit
	$(".login").animate(
		{
			top:'0px',
			opacity:0.8
		},2000,function(){
			$(".login").animate(
				{ top:'-20px' }
				,250,
				function(){
					$(".login").animate(
						{ top:'0px' }
						,250,
							function(){
								$(".login").animate(
									{ top:'-10px' }
									,150,
										function(){
											$(".login").animate(
												{ top:'0px',opacity:1 }
												,50

											);
										}
								);
							}
					);
				}
			);
		}
	);


	$('.slider').bxSlider({
		autoControls: true,
		auto:true,
		stopAutoOnClick:true
	});
	
    

	// Hide Placeholder On Form Focus

	$('[placeholder]').focus(function () {

		$(this).attr('data-text', $(this).attr('placeholder'));

		$(this).attr('placeholder', '');

	}).blur(function () {

		$(this).attr('placeholder', $(this).attr('data-text'));

	});
	

	// Add Asterisk On Required Field

	$('input').each(function () {

		if ($(this).attr('required') === 'required') {

			$(this).after('<span class="asterisk">*</span>');

		}

	});

	// Convert Password Field To Text Field On Hover
	// time table page for slider 
	$(".slider td ").click(function(){
		$(this).addClass("aaa");
		
	});
	//end slider time table 
	

 
});

// start dahbord bar 
	
	function showbar(){
	 $(".dash-nav span").toggleClass("span-show");

	
	}
	//end dashbord bar
    