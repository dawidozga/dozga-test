"use strict";

( function( $ ) {

	/**
	 * Document ready function
	 */
    $(document).ready(function () {

        const menuToggler = $('#navbar .navbar-toggler');
        const menu = $('.site-header__menu');

        $(menuToggler).on('click', function () {
            $(this).toggleClass('collapsed');
            $(menu).toggleClass('open');
            $(navbar).toggleClass('menu-open');
        });
        
    });
    
} )( jQuery );