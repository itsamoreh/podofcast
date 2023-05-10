<?php
/**
 * Title: Footer
 * Slug: powder/footer
 * Description: Footer with site title, text, links.
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"30px","bottom":"30px"},"margin":{"top":"0"}}},"layout":{"type":"constrained"},"fontSize":"x-small"} -->
<div class="wp-block-group alignfull has-x-small-font-size" style="margin-top:0;padding-top:30px;padding-bottom:30px">
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p>© <?php echo esc_html( gmdate( 'Y' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:site-title {"isLink":false,"style":{"typography":{"fontWeight":"300"}},"fontSize":"x-small"} /-->
</div>
<!-- /wp:group -->
<!-- wp:paragraph -->
<p> · </p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="https://powder.design/themes/powder/" data-type="URL" data-id="https://powder.design/themes/powder/">Theme</a> by <a href="https://briangardner.com/" data-type="URL" data-id="https://briangardner.com/">Brian Gardner</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph -->
<p><a href="#">Twitter</a> · <a href="#">Instagram</a> · <a href="#">LinkedIn</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
