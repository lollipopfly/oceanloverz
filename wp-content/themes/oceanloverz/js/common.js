$(document).ready(function() {
/**
***************************************************************
* =PAGE LOAD
***************************************************************
**/

	// SLICK CAROUSEL
	$('.slider-list').slick({
		dots: true,
		speed: 800,
		autoplay: true,
		autoplaySpeed: 7000,
	});


/**
***************************************************************
* =USABILLITY
***************************************************************
**/

/* Burger-button */
// lide up & down navigation
$('.burger').on('click', function() {
	$this = $(this);
	$this.toggleClass('active');
	$('.nav').slideToggle(300, 'linear');
});

// animation burger btn
$('.burger').on('click', function() {
	$this = $(this);

	if ($this.hasClass('active')) {
		$('.burger__row.two-icon').stop().animate({
			opacity: 0
		}, 100);

		$('.burger__row.one-icon').stop().animate({
			top: "11",
			rotation: -45
		}, {
			step: function(now, fx) {
				$(this).css('-webkit-transform', 'rotate(' + now + 'deg)')
					.css('-moz-transform', 'rotate(' + now + 'deg)')
					.css('transform', 'rotate(' + now + 'deg)');
			},
			duration: 300
		}, 'linear');

		$('.burger__row.three-icon').stop().animate({
			top: "-7",
			rotation: 45
		}, {
			step: function(now, fx) {
				$(this).css('-webkit-transform', 'rotate(' + now + 'deg)')
					.css('-moz-transform', 'rotate(' + now + 'deg)')
					.css('transform', 'rotate(' + now + 'deg)');
			},
			duration: 300
		}, 'linear');
	} else {
		$('.burger__row.two-icon').stop().animate({
			opacity: 1
		}, 300);

		$('.burger__row.three-icon').stop().animate({
			top: '0px',
			rotation: 0
		}, {
			step: function(now, fx) {
				$(this).css('-webkit-transform', 'rotate(' + now + 'deg)')
					.css('-moz-transform', 'rotate(' + now + 'deg)')
					.css('transform', 'rotate(' + now + 'deg)');
			},
			duration: 300
		}, 'linear');

		$('.burger__row.one-icon').stop().animate({
			top: '0px',
			rotation: 0
		}, {
			step: function(now, fx) {
				$(this).css('-webkit-transform', 'rotate(' + now + 'deg)')
					.css('-moz-transform', 'rotate(' + now + 'deg)')
					.css('transform', 'rotate(' + now + 'deg)');
			},
			duration: 300
		}, 'linear');
	}
});


/**
***************************************************************
* =FUNCTIONS
***************************************************************
**/


});