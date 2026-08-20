<?php
/**
 * Title: Feature section two columns
 * Slug: govwind/feature-two-col
 * Categories: features
 * Inserter: yes
 * Description: A full-width feature section highlighting service with text and an image.
 * Keywords: feature, section, full width, product, service
 *
 * Versioning (below):
 * the block name, prefix it gw-
 * a version number, increment if changes are made
 */
$versioning = "gw-feature-two-col v1-0"; ?>

<!-- wp:group {"align":"full","className":"gw-responsive-y-padding-8-20 <?php echo $versioning; ?>","style":{"spacing":{"margin":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull gw-responsive-y-padding-8-20 <?php echo $versioning; ?>" style="margin-top:var(--wp--preset--spacing--6);margin-bottom:var(--wp--preset--spacing--6)">
	<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{}}} -->
	<div class="wp-block-group" style="">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"4rem"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"60%","verticalAlignment":"top","style":{"spacing":{}}} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%;">
				<!-- wp:heading {"textAlign":"left","level":2,"fontSize":"3-xl"} -->
				<h2 class="wp-block-heading has-text-align-left has-3-xl-font-size">Feature pattern title</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Add your feature paragraph text in this section.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"40%","verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large">
					<img src="<?php echo esc_url(
     	gw_placeholder_image(600, 400),
     ); ?>" alt="Feature image" />
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
