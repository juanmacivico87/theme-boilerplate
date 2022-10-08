<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-boilerplate
 */

//IMPORTANT. README: 
//	Menu handbook: https://developer.wordpress.org/themes/functionality/navigation-menus/
//	Menu function: https://developer.wordpress.org/reference/functions/wp_nav_menu/ -->
wp_nav_menu( [ 
	'theme_location' => 'footer-menu',
	'container_class' => 'footer_menu',
	'depth' => '1',
] );
wp_footer(); ?>

</body></html>