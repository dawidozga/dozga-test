<?php

/**
 * 
 * Custom Blocks functions
 * 
 */

/**
 * Register a new blocks
 */
function my_acf_init_block_types()
{
    if (function_exists('acf_register_block_type')) {

        // register a FAQ block.
        acf_register_block_type(array(
            'name'              => 'faq',
            'title'             => __('FAQ', 'dozga-test'),
            'description'       => __('A custom FAQ block.', 'dozga-test'),
            'render_template'   => 'template-parts/blocks/faq/faq.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('FAQ'),
            'supports'          => array('anchor' => true),
        ));

        // register a Empty block.
        acf_register_block_type(array(
            'name'              => 'empty',
            'title'             => __('Empty', 'dozga-test'),
            'description'       => __('A custom Empty block.', 'dozga-test'),
            'render_template'   => 'template-parts/blocks/empty/empty.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('Empty'),
            'supports'          => array('anchor' => true),
        ));
    }
}
add_action('acf/init', 'my_acf_init_block_types');
