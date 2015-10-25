/**
 * Created by jp on 17.12.14.
 */

$(document).ready(function() {
    $('#mobile-menu-button').on('click', function() {
        $('#mobile-main-menu').slideToggle('fast');
    });
    $('#mobile-main-menu li').on('click', function() {
        $('#mobile-main-menu').slideToggle('fast');
    });

    var changePoint = $('#sidebar').offset().top;
    var height = $('#sidebar').height()*2;

	// $(window).scroll(function ()  {
	//     if ($(window).scrollTop() <= changePoint+height) {
	//         $('#sidebar').removeClass('static');
	//         $('#sidebar').addClass('fixed');
	//     }
	//     else {
	//         $('#sidebar').addClass('static');
	//         $('#sidebar').removeClass('fixed');
	//     }
	// });
});

/*$('#sidebar').affix({
 offset: {
 top: 100,
 bottom: function () {
 return (this.bottom = $('footer').outerHeight(true))
 }
 }
 })*/
