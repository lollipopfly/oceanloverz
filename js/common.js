$(document).ready(function() {
/**
***************************************************************
* =PAGE LOAD
***************************************************************
**/

	// Находим ширину экрана
	// var screenWidth = $(document).width() + scrollWidth();

	// SLICK CAROUSEL
	$('.slider-list').slick({
		dots: true,
		fade: true,
		speed: 1000
	});


/**
***************************************************************
* =USABILLITY
***************************************************************
**/

/* Burger-button */

$('.navbar-toggle').on('click', function() {
	$this = $(this);

	if ($this.hasClass('collapsed')) {
		$('.icon-bar.two-icon').stop().animate({
			opacity: 0
		}, 100);

		$('.icon-bar.one-icon').stop().animate({
			top: "10",
			rotation: -45
		}, {
			step: function(now, fx) {
				$(this).css('-webkit-transform', 'rotate(' + now + 'deg)')
					.css('-moz-transform', 'rotate(' + now + 'deg)')
					.css('transform', 'rotate(' + now + 'deg)');
			},
			duration: 300
		}, 'linear');

		$('.icon-bar.three-icon').stop().animate({
			top: "-6",
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
		$('.icon-bar.two-icon').stop().animate({
			opacity: 1
		}, 300);

		$('.icon-bar.three-icon').stop().animate({
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

		$('.icon-bar.one-icon').stop().animate({
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

// Функция определения плосы прокрутки
// function scrollWidth() {
// 	var div = $('<div>').css({
// 	    position: "absolute",
// 	    top: "0px",
// 	    left: "0px",
// 	    width: "100px",
// 	    height: "100px",
// 	    visibility: "hidden",
// 	    overflow: "scroll"
// 	});

// 	$('body').eq(0).append(div);

// 	var width = div.get(0).offsetWidth - div.get(0).clientWidth;

// 	div.remove();

// 	return width;
// }

});