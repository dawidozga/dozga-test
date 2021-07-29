"use strict";

( function( $ ) {

	/**
	 * Document ready function
	 */
    $(document).ready(function () {

        $('.nav-link').on('click', function() {
            const sectionTo = $(this).attr('href');

            // Go to section
            $('html, body').animate({
              scrollTop: (($(sectionTo).offset().top) - 80)
            }, 100);

            // Collapse menu on mobile
            const menuToggler = $('#navbar .navbar-toggler');
            const menu = $('.site-header__menu');
            
            if ($(navbar).hasClass('menu-open')) {
                $(menuToggler).toggleClass('collapsed');
                $(menu).toggleClass('open');
                $(navbar).toggleClass('menu-open');
            }
        });
        
    });
    
} )( jQuery );