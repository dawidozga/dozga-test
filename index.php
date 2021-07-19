<?php

/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dozga-test
 */

get_header();


while (have_posts()) : the_post();

    the_content();

endwhile;


get_footer();
