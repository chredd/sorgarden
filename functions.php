<?php
/**
 * sorgarden functions and definitions
 *
 * @package sorgarden
 * @since sorgarden 1.0
 */

require_once 'inc/ParentWalker.class.php';

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since sorgarden 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'sorgarden_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since sorgarden 1.0
 */
function sorgarden_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on sorgarden, use a find and replace
	 * to change 'sorgarden' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'sorgarden', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'sorgarden' ),
		'header' => __( 'Header Menu', 'sorgarden' )
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // sorgarden_setup
add_action( 'after_setup_theme', 'sorgarden_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since sorgarden 1.0
 */
function sorgarden_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'sorgarden' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );	

	register_sidebar( array(
		'name' => __( 'Footer', 'sorgarden' ),
		'id' => 'sidebar-footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', 'sorgarden_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function sorgarden_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-responsive', get_template_directory_uri() . '/css/boostrap-responsive.min.css' );
	wp_enqueue_style( 'sorgarden', get_template_directory_uri() . '/css/sorgarden.css' );

	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'sorgarden_scripts' );

/**
 * Implement the Custom Header feature
 */
// require( get_template_directory() . '/inc/custom-header.php' );