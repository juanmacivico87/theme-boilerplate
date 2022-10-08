<?php
namespace ThemeBoilerplate\App;

class App
{
    /**
     * __construct()
     *
     * @return 	void
     * @access 	public
     * @package	theme-boilerplate
     */
    public function __construct()
    {
        $this->init();
    }

    /**
     * init()
     *
     * @return 	void
     * @access 	public
     * @package	theme-boilerplate
     */
    public function init()
    {
        add_action( 'after_setup_theme', [ $this, 'load_theme_textdomain' ] );
        add_action( 'after_setup_theme', [ $this, 'load_theme_supports' ] );
        add_action( 'after_setup_theme', [ $this, 'load_theme_menus' ] );
        add_action( 'after_setup_theme', [ $this, 'load_classes' ] );

        add_action( 'wp_enqueue_scripts', [ $this, 'load_scripts' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'load_styles' ] );
    }

    /**
     * load_textdomain()
     *
     * @return 	void
     * @access 	public
     * @package	theme-boilerplate
     */
    public function load_theme_textdomain(): void
    {
        load_theme_textdomain( 'theme-boilerplate', THEME_BOILERPLATE_LANG_DIR );
    }

    /**
     * load_theme_supports()
     *
     * @return 	void
     * @access 	public
     * @package	theme-boilerplate
     */
    public function load_theme_supports(): void
    {
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );

        add_theme_support( 'html5', [ 'search-form',  'comment-form', 'comment-list', 'gallery', 'caption' ] );
        add_theme_support( 'post-formats', [ 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat' ] );

        add_theme_support( 'custom-logo', [
            'width' => '64',
            'height' => '64',
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => [ 'site-title', 'site-description' ],
         ] );
    }

    /**
     * load_theme_menus()
     *
     * @return 	void
     * @access 	public
     * @package	theme-boilerplate
     */
    public function load_theme_menus(): void
    {
        register_nav_menus( [
            'header-menu' => __( 'Header Menu', 'theme-boilerplate' ),
            'footer-menu' => __( 'Footer Menu', 'theme-boilerplate'),
        ] );
    }

    /**
     * load_scripts()
     *
     * @return 	void
     * @access 	public
     * @package	theme-boilerplate
     */
    public function load_scripts(): void
    {
        $scripts = [
            'theme-boilerplate-credits' => [
                'path' => PREFIX_THEME_ASSETS_DIR . '/js/credits.js',
                'deps' => [],
                'in_footer' => true,
            ],
            'theme-boilerplate' => [
                'path' => PREFIX_THEME_ASSETS_DIR . '/js/scripts.js',
                'deps' => [],
                'in_footer' => true,
            ],
        ];

        foreach( $scripts as $handle => $script ) {
            wp_enqueue_script( $handle, $script['path'], $script['deps'], THEME_BOILERPLATE_VERSION, $script['in_footer'] );
        }
    }

    /**
     * load_styles()
     *
     * @return 	void
     * @access 	public
     * @package	theme-boilerplate
     */
    public function load_styles(): void
    {
        $styles = [
            'theme-boilerplate' => [
                'path' => PREFIX_THEME_ASSETS_DIR . '/css/styles.css',
                'deps' => [],
                'media' => 'all',
            ],
        ];

        foreach( $styles as $handle => $style ) {
            wp_enqueue_style( $handle, $style['path'], $style['deps'], THEME_BOILERPLATE_VERSION, $style['media'] );
        }
    }

    /**
     * load_classes()
     *
     * @return 	void
     * @access 	public
     * @package	theme-boilerplate
     */
    public function load_classes(): void
    {
    }
}
