<?php
/**
 * All of the parameters passed to the function where this file is being required are accessible in this scope:
 *
 * @param array    $attributes     The array of attributes for this block.
 * @param string   $content        Rendered block output. ie. <InnerBlocks.Content />.
 * @param WP_Block $block_instance The instance of the WP_Block class that represents the block being rendered.
 *
 * @package gutenberg-examples
 */

?>
<blockquote <?php echo wp_kses_data( get_block_wrapper_attributes() ); ?>>
	<p class="quote">
		<?php
		if ( isset( $attributes['quote'] ) ) {
			echo wp_kses_post( $attributes['quote'] );
		}
		?>
	</p>
	<div class="footer">
		<?php
		if ( isset( $attributes['image']['id'] ) ) {
			echo wp_get_attachment_image( $attributes['image']['id'], 'thumbnail', false, ['class' => 'author-image'] );
		}
		?>
		<cite class="author-name">
			<?php
			if ( isset( $attributes['author'] ) ) {
				echo wp_kses_post( $attributes['author'] );
			}
			?>
		</cite>
	</div>
</blockquote>
