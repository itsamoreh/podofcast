<?php
/**
 * Title: Hero
 * Slug: podofcast/hero
 * Description: Hero with title, body and button.
 * Categories: heros
 * Block Types: core/template-part/hero
 */
?>
<!-- wp:group {"className":"podofcast-pattern-hero","align":"full","style":{"spacing":{"padding":{"top":"64px","right":"12px","bottom":"60px","left":"12px"}}},"backgroundColor":"champagne","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignfull podofcast-pattern-hero has-champagne-background-color has-background" style="padding-top:64px;padding-right:12px;padding-bottom:60px;padding-left:12px">

	<!-- wp:heading {"textAlign":"center","level":1,"lock":{"move":true,"remove":true},"textColor":"black","fontSize":"display"} -->
	<h1 class="wp-block-heading has-text-align-center has-black-color has-text-color has-display-font-size"><strong>Your Daily<br> <span class="last-word">Podcast</span></strong></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-small"}}},"textColor":"davys-grey","fontSize":"Body"} -->
	<p class="has-text-align-center has-davys-grey-color has-text-color has-body-font-size" style="margin-bottom:var(--wp--preset--spacing--x-small)">We cover all kinds of categories and a weekly special guest.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|x-large"}}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--x-large)">SubScribe</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
