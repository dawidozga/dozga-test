<?php

/**
 * The header for theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dozga-test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="80">
    <?php wp_body_open(); ?>

    <header id="navbar" class="site-header">
        <div class="container site-header__container">
            <nav id="navbarNav" class="site-header__nav">

                <div class="site-header__logo">
                    <div class="std-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <div class="sticky-logo">
                        <a href="<?php echo home_url(); ?>" class="custom-logo-link" rel="home">
                            <img src="<?php echo get_theme_mod('logo_on_sticky_menu'); ?>" class="custom-logo" alt="<?php echo get_bloginfo('name'); ?>" />
                        </a>
                    </div>
                </div>

                <button class="navbar-toggler collapsed" aria-label="Toggle navigation">
                    <div class="navbar-toggler__in">
                        <span class="line top"></span>
                        <span class="line middle"></span>
                        <span class="line bottom"></span>
                    </div>
                </button>

                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location'  => 'primary',
                        'container_class' => 'site-header__menu',
                        'menu_class'      => 'site-header__primary',
                    ));
                }
                ?>

            </nav>
        </div>
    </header>

    <div id="page" class="site">