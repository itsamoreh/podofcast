<?php
/**
 * Plugin Name: Gutenberg Examples Dynamic Block
 * Plugin URI: https://github.com/itsamoreh/podofcast
 * Description: This plugin registers the custom quote slider quote dynamic block.
 * Version: 0.1.0
 * Author: Amor Kumar
 *
 * @package podofcast
 */

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 */
function podofcast_dynamic_block_block_init() {

	register_block_type(
		__DIR__,
		array(
			'render_callback' => 'podofcast_dynamic_block_render_callback',
		)
	);
}
add_action( 'init', 'podofcast_dynamic_block_block_init' );


/**
 * This function is called when the block is being rendered on the front end of the site
 *
 * @param array    $attributes     The array of attributes for this block.
 * @param string   $content        Rendered block output. ie. <InnerBlocks.Content />.
 * @param WP_Block $block_instance The instance of the WP_Block class that represents the block being rendered.
 */
function podofcast_dynamic_block_render_callback( $attributes, $content, $block_instance ) {
	ob_start();
	/**
	 * Keeping the markup to be returned in a separate file is sometimes better, especially if there is very complicated markup.
	 * All of passed parameters are still accessible in the file.
	 */
	require __DIR__ . '/template.php';
	return ob_get_clean();
}
