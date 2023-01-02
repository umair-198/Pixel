<?php
/**
 * Theme Sidebars.
 *
 * @package Pixel
 */

namespace PIXEL_THEME\Inc;

use PIXEL_THEME\Inc\Traits\Singleton;

/**
 * Class Assets
 */
class Sidebars {

	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {
		$this->setup_hooks();
	}

	/**
	 * To register action/filter.
	 *
	 * @return void
	 */
	protected function setup_hooks() {

		/**
		 * Actions
		 */
		add_action( 'widgets_init', [ $this, 'register_sidebars' ] );
	
		
	}

	/**
	 * Register widgets.
	 *
	 * @action widgets_init
	 */
	public function register_sidebars() {

		register_sidebar(
			[
				'name'          => esc_html__( 'Sidebar', 'pixel' ),
				'id'            => 'sidebar-1',
				'description'   => '',
				'before_widget' => '<div id="%1$s" class="co-blog-sidebar %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			]
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer 1st coloumn', 'Pixel' ),
				'id'            => 'footerbar-1',
				'description'   => __( 'Add widgets here to appear in your footer.', 'Pixel' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer 2nd coloumn', 'Pixel' ),
				'id'            => 'footerbar-3',
				'description'   => __( 'Add widgets here to appear in your footer.', 'Pixel' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			)
		);
		register_sidebar(
				array(
					'name'          => __( 'Footer 3rd coloumn', 'Pixel' ),
					'id'            => 'footerbar-4',
					'description'   => __( 'Add widgets here to appear in your footer.', 'Pixel' ),
					'before_widget' => '',
					'after_widget'  => '',
					'before_title'  => '',
					'after_title'   => '',
				)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer last 1', 'Pixel' ),
				'id'            => 'footerbar-2',
				'description'   => __( 'Add widgets here to appear in your footer.', 'Pixel' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer last 2', 'Pixel' ),
				'id'            => 'footerbar-5',
				'description'   => __( 'Add widgets here to appear in your footer.', 'Pixel' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			)
		);

		
		

	}


	public function register_post_slider() {
		register_widget( 'PIXEL_THEME\Inc\PostsSlider' );
	}

}
