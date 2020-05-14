<?php
/**
 * LookShop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package LookShop
 */

if ( ! function_exists( 'lookshop_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lookshop_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on LookShop, use a find and replace
		 * to change 'lookshop' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lookshop', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
        add_image_size( 'slider-mini', 200, 300, true );
        add_image_size( 'product', 400, 500, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'header-menu' => esc_html__( 'Primary', 'lookshop' ),
            'footer-menu1' => esc_html__( 'Customer Service', 'lookshop' ),
            'footer-menu2' => esc_html__( 'Information', 'lookshop' ),
            'footer-menu3' => esc_html__( 'Campaigns', 'lookshop' ),
            'footer-menu4' => esc_html__( 'Stores', 'lookshop' ),
            'subfooter' => esc_html__( 'subfooter', 'lookshop' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'lookshop_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'lookshop_setup' );
add_filter('show_admin_bar', '__return_false');
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lookshop_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'lookshop_content_width', 640 );
}
add_action( 'after_setup_theme', 'lookshop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lookshop_widgets_init() {

    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar-shop', 'lookshop' ),
        'id'            => 'sidebar-shop',
        'description'   => esc_html__( 'Add widgets here.', 'lookshop' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s sidebar-widjet">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title sidebar-widget__title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'lookshop_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
    // отменяем зарегистрированный jQuery
    wp_deregister_script('jquery-core');
    wp_deregister_script('jquery');

    // регистрируем
    wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true );
    wp_register_script( 'jquery', false, array('jquery-core'), null, false );

    // подключаем
    wp_enqueue_script( 'jquery' );
}

function lookshop_scripts() {
	wp_enqueue_style( 'lookshop-style', get_stylesheet_uri() );
    wp_enqueue_style( 'slick-style',  '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
    wp_enqueue_style( 'slick-theme',  '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css' );
	wp_enqueue_style( 'fontamazon', get_template_directory_uri() . '/assets/css/css/all.css' );
//	wp_enqueue_style( 'fontamazon1', get_template_directory_uri() . '/assets/css/css/fontawesome.css' );
	wp_enqueue_style( 'my-style', get_template_directory_uri() . '/assets/css/styles.css' );


	wp_enqueue_script( 'lookshop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'lib', get_template_directory_uri() . '/assets/js/libs.min.js', array('jquery'), '', true );

	wp_enqueue_script( 'lookshop-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lookshop_scripts' );
add_filter("loop_shop_per_page", function($cols) {

    return 9;

}, 20);
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-cart.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-single-product.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-archive.php';

}
