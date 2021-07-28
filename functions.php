<?php

/**
 * dozga-test functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dozga-test
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('dozga_test_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function dozga_test_setup()
    {
        /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on dozga-test, use a find and replace
		 * to change 'dozga-test' to the name of your theme in all the template files.
		 */
        load_theme_textdomain('dozga-test', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
        add_theme_support('title-tag');

        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'primary' => esc_html__('Primary', 'dozga-test'),
            )
        );

        /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'dozga_test_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'dozga_test_setup');

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


/**
 * Include Sripts & Styles
 */
function frontend_dozga_scripts()
{
    // Enqueue Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('index', get_template_directory_uri() . '/dist/js/index.js', array(), _S_VERSION, true);

    // Enqueue Styles
    wp_enqueue_style('index', get_template_directory_uri() . '/dist/css/index.css', array(), _S_VERSION);
}
add_action('wp_enqueue_scripts', 'frontend_dozga_scripts');


/**
 * Register a new block
 */
function my_acf_init_block_types()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'faq',
            'title'             => __('FAQ', 'dozga-test'),
            'description'       => __('A custom FAQ block.', 'dozga-test'),
            'render_template'   => 'template-parts/blocks/faq/faq.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('FAQ', 'quote'),
            'supports'          => array('anchor' => true),
        ));
    }
}
add_action('acf/init', 'my_acf_init_block_types');
