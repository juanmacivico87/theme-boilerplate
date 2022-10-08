<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-boilerplate
 */

?>
<!doctype html>
	<html <?php language_attributes() ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ) ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="profile" href="https://gmpg.org/xfn/11">
			<?php wp_head(); ?>
		</head>
		<body>
			<!-- IMPORTANT. README: 
				Menu handbook: https://developer.wordpress.org/themes/functionality/navigation-menus/
				Menu function: https://developer.wordpress.org/reference/functions/wp_nav_menu/ -->
			<?php wp_nav_menu( [ 
				'theme_location' => 'header-menu',
				'container_class' => 'header_menu',
				'depth' => '2',
			] );
			