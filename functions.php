<?php
/**
 * This file adds functions to the WordPress theme.
 *
 * @package podofcast
 * @author  Amor Kumar
 * @license GNU General Public License v2 or later
 * @link    https://amorkumar.com/
 */

if ( ! function_exists( 'podofcast_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook.
	 *
	 * @since 0.1.0
	 */
	function podofcast_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'podofcast', get_template_directory() . '/languages' );

		// Enqueue editor styles.
		add_editor_style( '/style.css' );

		// Disable loading core block inline styles.
		add_filter( 'should_load_separate_core_block_assets', '__return_false' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'podofcast_setup' );

/**
 * Enqueue theme style sheet.
 *
 * @since 0.1.0
 */
function podofcast_enqueue_style_sheet() {

	wp_enqueue_style(
		'podofcast',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme( 'podofcast' )->get( 'Version' )
	);

}
add_action( 'wp_enqueue_scripts', 'podofcast_enqueue_style_sheet' );

/**
 * Add meta tags.
 *
 * @since 0.1.0
 */
function podofcast_add_meta_tags() {
	echo '<meta name="description" content="Example site for a full site editing experiment.">';
  }
  add_action('wp_head', 'podofcast_add_meta_tags');

/**
 * Enqueue theme scripts.
 *
 * @since 0.1.0
 */
function podofcast_enqueue_script() {

	wp_enqueue_script( 'alpinejs', 'https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js', array(), null, false );
    wp_script_add_data( 'alpinejs', 'defer', true );

}
add_action( 'wp_enqueue_scripts', 'podofcast_enqueue_script' );

/**
 * Register block styles.
 *
 * @since 0.1.0
 */
function podofcast_register_block_styles() {

	$block_styles = array(
		'core/group' => array(
			'shadow' => __( 'Shadow', 'podofcast' ),
		),
		'core/image' => array(
			'shadow' => __( 'Shadow', 'podofcast' ),
		),
		'core/navigation-link' => array(
			'outline' => __( 'Outline', 'podofcast' ),
		),
		'core/social-links' => array(
			'outline' => __( 'Outline', 'podofcast' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}

}
add_action( 'init', 'podofcast_register_block_styles' );

/**
 * Register block pattern categories.
 *
 * @since 0.1.0
 */
function podofcast_register_block_pattern_categories() {
	register_block_pattern_category(
		'heros',
		array( 'label' => __( 'Heros', 'podofcast' ) )
	);
	register_block_pattern_category(
		'quotes',
		array( 'label' => __( 'Quotes', 'podofcast' ) )
	);
	register_block_pattern_category(
		'other',
		array( 'label' => __( 'Other', 'podofcast' ) )
	);
}
add_action( 'init', 'podofcast_register_block_pattern_categories' );

/**
 * Register custom Gutenberg blocks.
 *
 */
include get_theme_file_path() . '/blocks-built/testimonial-slider/index.php';
include get_theme_file_path() . '/blocks-built/testimonial-slider-quote/index.php';
