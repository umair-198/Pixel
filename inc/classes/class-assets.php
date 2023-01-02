<?php
/**
 * Enqueue theme assets
 *
 * @package PIXEL
 */

namespace PIXEL_THEME\Inc;

use PIXEL_THEME\Inc\Traits\Singleton;

class Assets {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
		/**
		 * The 'enqueue_block_assets' hook includes styles and scripts both in editor and frontend,
		 * except when is_admin() is used to include them conditionally
		 */
		add_action( 'enqueue_block_assets', [ $this, 'enqueue_editor_assets' ] );
	}

	public function register_styles() {
		// Register styles.
		wp_register_style( 'bootstrap.min', PIXEL_BUILD_CSS_URI . '/css/bootstrap.min.css', filemtime( PIXEL_BUILD_CSS_DIR_PATH . '/css/bootstrap.min.css' ), 'all' );
// Enqueue Styles.
		wp_enqueue_style( 'bootstrap-css' );
	}

	public function register_scripts() {
		// Register scripts.
		wp_register_script( 'modernizr-2.8.3.min', PIXEL_BUILD_JS_URI . '/js/vendor/modernizr-2.8.3.min.js', ['jquery', 'slick-js'], filemtime( PIXEL_BUILD_JS_DIR_PATH . '/js/vendor/modernizr-2.8.3.min.js' ), true );
	
		

		// Enqueue Scripts.
		wp_enqueue_script( 'modernizr-2.8.3.min' );

	}

	/**
	 * Enqueue editor scripts and styles.
	 */
	public function enqueue_editor_assets() {

		$asset_config_file = sprintf( '%s/assets.php', PIXEL_BUILD_PATH );

		if ( ! file_exists( $asset_config_file ) ) {
			return;
		}

		$asset_config = require_once $asset_config_file;

		if ( empty( $asset_config['js/editor.js'] ) ) {
			return;
		}

		$editor_asset    = $asset_config['js/editor.js'];
		$js_dependencies = ( ! empty( $editor_asset['dependencies'] ) ) ? $editor_asset['dependencies'] : [];
		$version         = ( ! empty( $editor_asset['version'] ) ) ? $editor_asset['version'] : filemtime( $asset_config_file );

		// Theme Gutenberg blocks JS.
		if ( is_admin() ) {
			wp_enqueue_script(
				'pixel-blocks-js',
				PIXEL_BUILD_JS_URI . '/blocks.js',
				$js_dependencies,
				$version,
				true
			);
		}

		// Theme Gutenberg blocks CSS.
		$css_dependencies = [
			'wp-block-library-theme',
			'wp-block-library',
		];

	}

}
