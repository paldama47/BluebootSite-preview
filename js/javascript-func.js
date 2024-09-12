        
		$(document).ready(function () {
		// As each slide is about to become active record the number.
		function onBefore() {
			$("#slideshow").attr("data", $(this).attr("data"));
		}
		// Loop through each slide and assign slide number
		$('#slideshow div').each(function (n) {
			$(this).attr("data", n);
		});
		// Set Cycle options
		$('#slideshow').cycle({
			fx: 'fade',
			speed: 2000,
			timeout: 1000,
			pager: '.navsli',
			prev: '.previ',
			next: '.nexti',
			easing: 'easeInOutQuint',
			before: onBefore
		});
		// On windoe resize
		$(window).resize(function () {
			// Destroy the existing slideshow
			$('#slideshow').cycle('destroy');
			// Loop through each slide and reset the width based on the parent.
			$('#slideshow').each(function () {
				newWidth = $(this).width();
				$(this).children('div').width(newWidth);
			});
			// Reload Cycle setting the starting slide
			$('#slideshow').cycle({
				fx: 'fade',
				speed: 2000,
				timeout: 1000,
				startingSlide: $("#slideshow").attr("data"),
				pager: '.navsli',
				prev: '.previ',
				next: '.nexti',
				easing: 'easeInOutQuint',
				before: onBefore
			});
		});
		
	});


		