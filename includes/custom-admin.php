<?php

/**
 * 
 * Custom WP admin panel functions
 * 
 */

/**
 * Add Styles to Admin Gutenberg Editor
 */
function enqueue_styles_in_admin()
{
    $current_screen = get_current_screen();
    if (method_exists($current_screen, 'is_block_editor') && $current_screen->is_block_editor()) {
        wp_enqueue_style('styles', get_template_directory_uri() . '/dist/css/index.css');
    }
}
add_action('admin_enqueue_scripts', 'enqueue_styles_in_admin');
