"use strict";

( function( $ ) {

	/**
	 * Document ready function
	 */
    $(document).ready(function () {

        const navbar = $('#navbar');
        const sticky = navbar.offset().top;

        function stickyNavbar() {
            if (window.pageYOffset > sticky) {
                navbar.addClass('sticky')
            } else {
                navbar.removeClass('sticky');
            }
        }
        
        $(window).on('scroll', function() {
			stickyNavbar();
        });
        
    });
    
} )( jQuery );