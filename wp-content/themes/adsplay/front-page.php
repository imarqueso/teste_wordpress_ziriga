<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 */

get_header(); ?>

<?php if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
        edit_post_link();
    endwhile;
endif; ?>

<?php
get_footer();
