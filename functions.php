<?php
/**
 * Theme Functions.
 *
 * @package Pixel
 */

/**
 * Essential theme supports
 * */
function my_load_styles() {


	wp_register_style( 'style', get_stylesheet_uri() );
	wp_register_style( 'plugins', get_template_directory_uri().'/assets/css/plugins.css', false );
	wp_register_style( 'bootstrap.min', get_template_directory_uri().'/assets/css/bootstrap.min.css', false );
	wp_register_style( 'font-awesome.min', get_template_directory_uri().'/assets/css/font-awesome.min.css', false );
	wp_register_style( 'ionicons.min', get_template_directory_uri().'/assets/css/ionicons.min.css', false );
	wp_register_style( 'et-line', get_template_directory_uri().'/assets/css/et-line.css', false );
	wp_register_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css', false );
	wp_enqueue_style ( 'responsive' );
	wp_enqueue_style ( 'et-line' );
	wp_enqueue_style ( 'ionicons.min' );
	wp_enqueue_style ( 'font-awesome.min' );
	wp_enqueue_style ( 'plugins' );
	wp_enqueue_style ( 'bootstrap.min' );
	wp_enqueue_style ( 'style' );

}
add_action('wp_enqueue_scripts', 'my_load_styles');

function my_load_scripts() {

	wp_register_script( 'modernizr-2.8.3.min', get_template_directory_uri().'/assets/js/vendor/modernizr-2.8.3.min.js');
	wp_enqueue_script( 'modernizr-2.8.3.min' );

}
add_action('wp_enqueue_scripts', 'my_load_scripts');



if ( ! defined( 'PIXEL_DIR_PATH' ) ) {
	define( 'PIXEL_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'PIXEL_DIR_URI' ) ) {
	define( 'PIXEL_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'PIXEL_BUILD_URI' ) ) {
	define( 'PIXEL_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets' );
}

if ( ! defined( 'PIXEL_BUILD_PATH' ) ) {
	define( 'PIXEL_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets' );
}

if ( ! defined( 'PIXEL_BUILD_JS_URI' ) ) {
	define( 'PIXEL_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets' );
}

if ( ! defined( 'PIXEL_BUILD_JS_DIR_PATH' ) ) {
	define( 'PIXEL_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets' );
}

if ( ! defined( 'PIXEL_BUILD_IMG_URI' ) ) {
	define( 'PIXEL_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets' );
}

if ( ! defined( 'PIXEL_BUILD_CSS_URI' ) ) {
	define( 'PIXEL_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets' );
}

if ( ! defined( 'PIXEL_BUILD_CSS_DIR_PATH' ) ) {
	define( 'PIXEL_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets' );
}

if ( ! defined( 'PIXEL_BUILD_LIB_URI' ) ) {
	define( 'PIXEL_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets' );
}

if ( ! defined( 'PIXEL_ARCHIVE_POST_PER_PAGE' ) ) {
	define( 'PIXEL_ARCHIVE_POST_PER_PAGE', 9 );
}

if ( ! defined( 'PIXEL_SEARCH_RESULTS_POST_PER_PAGE' ) ) {
	define( 'PIXEL_SEARCH_RESULTS_POST_PER_PAGE', 9 );
}

require_once PIXEL_DIR_PATH . '/inc/classes/Widgets/class-archive-widget.php';
require_once PIXEL_DIR_PATH . '/inc/classes/Widgets/class-slider-widget.php';
require_once PIXEL_DIR_PATH . '/inc/classes/Widgets/class-tags-widget.php';
require_once PIXEL_DIR_PATH . '/inc/classes/comments_pixel.php';
require_once PIXEL_DIR_PATH . '/inc/classes/Widgets/class-recentpost-widget.php';
require_once PIXEL_DIR_PATH . '/inc/classes/Widgets/class-search-widget.php';
require_once PIXEL_DIR_PATH . '/inc/classes/Widgets/class-category-widget.php';
require_once PIXEL_DIR_PATH . '/inc/helpers/autoloader.php';
require_once PIXEL_DIR_PATH . '/inc/helpers/template-tags.php';
require_once PIXEL_DIR_PATH . '/inc/customizers/customizer_header.php';
function pixel_get_theme_instance() {
	\PIXEL_THEME\Inc\PIXEL_THEME::get_instance();
}
pixel_get_theme_instance();

// function MYTheme_widgets_init() {

	// register_sidebar(
	// 	array(
	// 		'name'          => __( 'Footer 1st coloumn', 'MYTheme' ),
	// 		'id'            => 'footerbar-1',
	// 		'description'   => __( 'Add widgets here to appear in your footer.', 'MYTheme' ),
	// 		'before_widget' => '',
	// 		'after_widget'  => '',
	// 		'before_title'  => '',
	// 		'after_title'   => '',
	// 	)
	// );
	// register_sidebar(
	// 	array(
	// 		'name'          => __( 'Footer 2nd coloumn', 'MYTheme' ),
	// 		'id'            => 'footerbar-3',
	// 		'description'   => __( 'Add widgets here to appear in your footer.', 'MYTheme' ),
	// 		'before_widget' => '',
	// 		'after_widget'  => '',
	// 		'before_title'  => '',
	// 		'after_title'   => '',
	// 	)
	// );
	// register_sidebar(
	// 		array(
	// 			'name'          => __( 'Footer 3rd coloumn', 'MYTheme' ),
	// 			'id'            => 'footerbar-4',
	// 			'description'   => __( 'Add widgets here to appear in your footer.', 'MYTheme' ),
	// 			'before_widget' => '',
	// 			'after_widget'  => '',
	// 			'before_title'  => '',
	// 			'after_title'   => '',
	// 		)
	// );
	// register_sidebar(
	// 	array(
	// 		'name'          => __( 'Footer 4rd coloumn', 'MYTheme' ),
	// 		'id'            => 'footerbar-5',
	// 		'description'   => __( 'Add widgets here to appear in your footer.', 'MYTheme' ),
	// 		'before_widget' => '',
	// 		'after_widget'  => '',
	// 		'before_title'  => '',
	// 		'after_title'   => '',
	// 	)
	// );
	// register_sidebar(
	// 	array(
	// 		'name'          => __( 'Footer last', 'MYTheme' ),
	// 		'id'            => 'footerbar-2',
	// 		'description'   => __( 'Add widgets here to appear in your footer.', 'MYTheme' ),
	// 		'before_widget' => '',
	// 		'after_widget'  => '',
	// 		'before_title'  => '',
	// 		'after_title'   => '',
	// 	)
	// );
//}
//add_action( 'widgets_init', 'MYTheme_widgets_init' );

// add_action( 'init', 'create_custom_post_type_slider' );
// function create_custom_post_type_slider() {
//     $args = array(
//             'label' => 'Slider',
//             'public' => true,
//             'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
           
// 	);
// 		register_post_type( 'sliders', $args);
    
//  }

