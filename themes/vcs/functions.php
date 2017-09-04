<?php
/**
 * VCS functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package VCS_Theme
 */

if ( ! function_exists( 'vcs_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function vcs_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // vcs_setup
add_action( 'after_setup_theme', 'vcs_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function vcs_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vcs_content_width', 640 );
}
add_action( 'after_setup_theme', 'vcs_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vcs_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'vcs_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function vcs_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_stylesheet_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'vcs_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function vcs_scripts() {
	wp_enqueue_style( 'vcs-style', get_stylesheet_uri() );
	wp_enqueue_script('jquery');

	wp_enqueue_script('vcs-main', get_template_directory_uri() . '/build/js/main.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'vcs-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
	
	wp_enqueue_style( 'fontAwesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.4.0');
	wp_enqueue_style( 'gfonts-libreBaskerville', 'https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700');
	wp_enqueue_style( 'gfonts-workSans', 'https://fonts.googleapis.com/css?family=Work+Sans:300,400,700');
	


	wp_enqueue_style('vcs-owl', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.css');
	wp_enqueue_style('vcs-owl-theme', get_template_directory_uri() . '/lib/owlcarousel/owl.theme.default.min.css');
	wp_enqueue_script('vcs-owl', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js');

	wp_enqueue_style('vcs-flickity', get_template_directory_uri() . '/lib/flickity/flickity.min.css');
	wp_enqueue_script('vcs-flickity', get_template_directory_uri() . '/lib/flickity/flickity.pkgd.min.js');
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vcs_scripts' );

function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyAp5N7aQOYPPaZO2IIvT8k8jjm-TMGtywg');
}

add_action('acf/init', 'my_acf_init');


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
