<?php
/**
 * The template for displaying all search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package theme-boilerplate
 */

get_header(); ?>

<h1><?php esc_html_e( 'You are in search page', 'theme-boilerplate' ) ?></h1>

<?php if ( false !== have_posts() ): 
    while ( false !== have_posts() ): the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php the_excerpt();
    endwhile;
endif;

get_footer();
