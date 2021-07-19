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

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header">
        <div class="container site-header__container">
            <nav class="site-header__nav">

                <div class="site-header__logo">
                    <?php the_custom_logo(); ?>
                </div>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#site-header__menu" aria-controls="site-header__menu" aria-expanded="false" aria-label="Toggle navigation">
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