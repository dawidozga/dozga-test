<?php

/**
 * 
 * Customizer functions
 * 
 */

/**
 * Add logo on sticky menu to customizer
 */
function dozga_test_customizer_setting($wp_customize)
{
    $wp_customize->add_setting('logo_on_sticky_menu');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_on_sticky_menu', array(
        'label' => 'Logo on sticky menu',
        'section' => 'title_tagline',
        'settings' => 'logo_on_sticky_menu',
        'priority' => 8
    )));
}
add_action('customize_register', 'dozga_test_customizer_setting');
