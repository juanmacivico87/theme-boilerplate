<?php
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-boilerplate
 */

get_header(); ?>

<h1><?php esc_html_e( 'You are in the front page', 'theme-boilerplate' ) ?></h1>

<?php if ( false !== have_posts() ): 
    while ( false !== have_posts() ): the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php the_excerpt();
    endwhile;
endif;

get_footer();