<?php

/**
 * 
 * Helper menu functions
 * 
 */

/**
 * Add class to menu links
 */
function add_nav_menu_link_class($atts, $item, $args, $depth)
{
    $atts['class'] = 'nav-link';

    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_nav_menu_link_class', 10, 4);


/**
 * Change nav items class
 */
function change_nav_items_class($nav_menu, $args)
{
    if (in_array($args->theme_location, array('primary', 'additional'))) {
        $nav_menu = preg_replace('/menu-item/', 'nav-item', $nav_menu);
    }

    return $nav_menu;
}
add_filter('wp_nav_menu', 'change_nav_items_class', 10, 2);
