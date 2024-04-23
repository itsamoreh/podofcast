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

$heading = $attributes['heading'] ?? '';
$subheading = $attributes['subheading'] ?? '';
$testimonial_slides = $content;

?>
<div <?php echo wp_kses_data( get_block_wrapper_attributes() ); ?>>
	<h2 class="heading">
		<?php echo $heading ?>
	</h2>
	<p class="subheading">
		<?php echo $subheading ?>
	</p>
	<div
		class="testimonial-slider"
		aria-label="Testimonial slider"
		x-data="
			{
				position: 0,
				slideWidth: 590,
				scrollSlider(move) {
					if (!this.canScrollSlider(move)) {
						return;
					}

					this.position = this.position + move;
					$refs.sliderTrain.style.transform = `translateX(${this.position}px`;
				},
				canScrollSlider(move) {
					const sliderTrainWidth = $refs.sliderTrain.offsetWidth;
					const newPosition = this.position + move;

					return newPosition <= 0 && sliderTrainWidth * -1 <= newPosition;
				}
			}
		"
	>
		<div class="testimonial-slider-rail">
			<div class="testimonial-slider-train" x-ref="sliderTrain">
				<?php echo do_blocks($testimonial_slides) ?>
			</div>
		</div>
		<div class="testimonial-slider-controls">
			<button
				class="testimonial-slider-prev disabled"
				:class="{ 'disabled': !canScrollSlider(slideWidth) }"
				@click="scrollSlider(slideWidth)"
				aria-label="Scroll slider to the previous slide"
			>
				<svg
					width="48"
					height="48"
					viewBox="0 0 48 48"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M24 5.50049C13.784 5.50049 5.5 13.7825 5.5 24.0005C5.5 34.2165 13.784 42.5005 24 42.5005C34.216 42.5005 42.5 34.2165 42.5 24.0005C42.5 13.7825 34.216 5.50049 24 5.50049Z"
						stroke="black"
						stroke-width="2.5"
						stroke-linecap="round"
						stroke-linejoin="round"
					/>
					<path
						d="M26.8847 17.0581L19.9127 24.0001L26.8847 30.9421"
						stroke="black"
						stroke-width="2.5"
						stroke-linecap="round"
						stroke-linejoin="round"
					/>
				</svg>
			</button>
			<button
				class="testimonial-slider-next"
				:class="{ 'disabled': !canScrollSlider(slideWidth * -1) }"
				@click="scrollSlider(slideWidth * -1)"
				aria-label="Scroll slider to the next slide"
			>
				<svg
					width="48"
					height="48"
					viewBox="0 0 48 48"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M24 42.4996C34.216 42.4996 42.5 34.2176 42.5 23.9996C42.5 13.7836 34.216 5.49963 24 5.49963C13.784 5.49963 5.5 13.7836 5.5 23.9996C5.5 34.2176 13.784 42.4996 24 42.4996Z"
						stroke="#CD4631"
						stroke-width="2.5"
						stroke-linecap="round"
						stroke-linejoin="round"
					/>
					<path
						d="M21.1153 30.942L28.0873 24L21.1153 17.058"
						stroke="#CD4631"
						stroke-width="2.5"
						stroke-linecap="round"
						stroke-linejoin="round"
					/>
				</svg>
			</button>
		</div>
	</div>
</div>
