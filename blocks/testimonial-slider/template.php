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
$alignment = $attributes['align'] ?? '';
$heading = $attributes['heading'] ?? '';
$subheading = $attributes['subheading'] ?? '';
$testimonial_slides = $content;

?>
<div <?php echo wp_kses_data( get_block_wrapper_attributes( array( 'class' => $alignment ? 'align' . $alignment : '' ) ) ); ?>>
	<h2 class="heading">
		<?php echo $heading ?>
	</h2>
	<p class="subheading">
		<?php echo $subheading ?>
	</p>
	<div class="testimonial-slider">
		<div class="testimonial-slider-track">
			<?php echo do_blocks($testimonial_slides) ?>
		</div>
	</div>
</div>
