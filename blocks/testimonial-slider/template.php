<?php
/**
 * All of the parameters passed to the function where this file is being required are accessible in this scope:
 *
 * @param array    $attributes     The array of attributes for this block.
 * @param string   $content        Rendered block output. ie. <InnerBlocks.Content />.
 * @param WP_Block $block_instance The instance of the WP_Block class that represents the block being rendered.
 *
 * @package podofcast
 */

?>
<blockquote <?php echo wp_kses_data( get_block_wrapper_attributes() ); ?>>
	<h2 class="heading">
		<?php
		if ( isset( $attributes['heading'] ) ) {
			echo wp_kses_post( $attributes['heading'] );
		}
		?>
	</h2>
	<p class="subheading">
		<?php
		if ( isset( $attributes['subheading'] ) ) {
			echo wp_kses_post( $attributes['subheading'] );
		}
		?>
	</p>
	<div class="testimonial-slider">
		<div class="testimonial-slider-track"></div>
	</div>
</blockquote>
