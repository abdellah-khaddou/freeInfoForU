$(function () {

	'use strict';



	// Trigger The Selectboxit

	$("select").selectBoxIt({

		autoWidth: false
        

	});

    $('#Container').mixItUp();

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

    $("select").selectBoxIt({

		autoWidth: false
        

	});
	$(".slider").bxSlider();
});