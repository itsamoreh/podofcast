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

$quote = $attributes['quote'] ?? '';
$image = $attributes['image']['id'] ?? '';
$author = $attributes['author'] ?? '';

?>
<blockquote <?php echo wp_kses_data( get_block_wrapper_attributes() ); ?>>
	<p class="quote">
		<?php echo wp_kses_post( $quote ) ?>
	</p>
	<div class="footer">
		<?php
		if ( $image ) {
			echo wp_get_attachment_image( $image, 'thumbnail', false, ['class' => 'author-image'] );
		}
		?>
		<cite class="author-name">
			<?php echo wp_kses_post( $author ) ?>
		</cite>
	</div>
</blockquote>
