<?php
/**
 * Master Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Arity
 */

define( 'ARITY_CSS_VERSION', '0.0.1' );
define( 'ARITY_JS_VERSION', '0.0.1' );

if ( ! function_exists( 'arity_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function arity_setup() {
		/**
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Master Theme, use a find and replace
		 * to change 'arity' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'arity', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/**
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Register wp_nav_menu() menus
		// http://codex.wordpress.org/Function_Reference/register_nav_menus
		register_nav_menus(
			array(
				'main-menu' => __('Main Menu'),
				'mobile-menu' => __('Mobile Menu'),
				'footer-menu' => __('Footer Menu'),
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'arity_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function arity_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Page Sidebar', 'arity' ),
		'id'            => 'page-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'arity' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="page-sidebar__widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'arity' ),
		'id'            => 'blog-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'arity' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="blog-sidebar__widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'arity_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function arity_scripts() {

	if ($_SERVER['REMOTE_ADDR'] == "127.0.0.1") {
		wp_enqueue_style( 'main-css', get_template_directory_uri() . '/dist/css/main.css', array(), ARITY_CSS_VERSION );
	} else {
		wp_enqueue_style( 'main-css', get_template_directory_uri() . '/dist/css/main.min.css', array(), ARITY_CSS_VERSION );
	}

	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', false);
    wp_enqueue_script( 'jquery');
	wp_register_script('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'bootstrap');
    wp_enqueue_script( 'plugins-js', get_template_directory_uri() . '/dist/js/plugins.min.js', array( 'jquery' ), ARITY_JS_VERSION, true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/dist/js/main.min.js', array( 'jquery', 'plugins-js'), ARITY_JS_VERSION, true );

//	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/dist/js/plugins/filter.js', array( 'jquery' ), ARITY_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'arity_scripts' );

// Activate WordPress Maintenance Mode
// Will still load for logged in users and users who can edit the theme
//function wp_maintenance_mode() {
//	if (!current_user_can('edit_themes') || !is_user_logged_in()) {
//		wp_die('<h1>Under Maintenance</h1><br />Website under planned maintenance. Please check back later.');
//	}
//}
//add_action('get_header', 'wp_maintenance_mode');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Functions which enhance the theme via acf options
 */
require get_template_directory() . '/inc/acf-options.php';

/**
 * Shortcodes that can be used anywhere on the site
 */
require get_template_directory() . '/inc/theme-shortcodes.php';

/**
 * All custom post types registered
 */
require get_template_directory() . '/inc/theme-post-types-taxonomies.php';