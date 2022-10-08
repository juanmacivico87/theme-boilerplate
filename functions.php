<?php
/**
 * WPTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme-boilerplate
 */

if ( false === defined( 'ABSPATH' ) ) {
    exit;
}

require_once 'vendor/autoload.php';

use ThemeBoilerplate\App\App;

$theme_boilerplate = new App;

define( 'THEME_BOILERPLATE_DIR', get_template_directory() );
define( 'THEME_BOILERPLATE_URL', get_template_directory_uri() );
define( 'THEME_BOILERPLATE_LANG_DIR', THEME_BOILERPLATE_URL . '/languages' );
define( 'THEME_BOILERPLATE_ASSETS_DIR', THEME_BOILERPLATE_URL . '/assets' );
define( 'THEME_BOILERPLATE_VERSION', '0.1.0' );