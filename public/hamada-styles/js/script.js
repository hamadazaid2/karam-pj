$(document).ready(function(){
	/*header-fixed*/
    $(window).scroll(function(){
            
        if ($(window).scrollTop() >= 200) {
            $('#header').addClass('fixed-header');
        }
        else {
            $('#header').removeClass('fixed-header');
        }
              
    });

    $('#toggle').on('click', function () {
        $(this).toggleClass('active');
        $('body').toggleClass('open-menu-xs');
        $('#overlay').toggleClass('open');
    });

    $('.overlay-menu a').on('click', function () {
        
        $('html, body').animate({
           
            scrollTop: $('#' + $(this).data('value')).offset().top
           
        }, 1000);
        
        $('#toggle').removeClass('active');
        
        $('#overlay').removeClass('open');
        
    });
	
	$("#customerSlider").owlCarousel({
 
            items: 1,
	        loop: true,
            rtl: true,
	        margin: 0,
	        responsiveClass: true,
	        nav: true,
	        dots: true,
	        smartSpeed: 500,
	        autoplay: true,
	        autoplayTimeout: 5000,
	        autoplayHoverPause: true,
		 	navText:['<i class="ti-angle-right"></i>','<i class="ti-angle-left"></i>']
     });
	

})