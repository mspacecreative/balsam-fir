$(function () {
	
	function homeSlide() {
		$('.full-height-vp').outerHeight($(window).height());
	}
	
	$(document).ready(function () {
	    homeSlide();
	});
	
	$(window).resize(function () {
	    homeSlide();
	});
	
	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();
	
	    if (scroll >= 100) {
	        $(".balsam-header, .logo-centered-on-slide").addClass("scroll");
	    } else {
	        $(".balsam-header, .logo-centered-on-slide").removeClass("scroll");
	    }
	});
});