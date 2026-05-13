<?php
/**
 * Title: Feature section two columns (reverse)
 * Slug: govwind/feature-two-col-reverse
 * Categories: features
 * Inserter: yes
 * Description: A full-width feature section highlighting service with an image and text, image on the left.
 * Keywords: feature, section, full width, product, service, reverse
 */
?>
<!-- wp:group {"align":"full","className":"py-8 md:py-20","style":{"color":{"background":"var(--colour-primary)"},"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|background"}}}},"spacing":{"margin":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-text-color has-background has-link-color py-8 md:py-20" style="background-color:var(--colour-primary);margin-top:var(--wp--preset--spacing--6);margin-bottom:var(--wp--preset--spacing--6)">
	<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:columns {"align":"wide","className":"flex-col-reverse md:flex-row","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-columns alignwide flex-col-reverse md:flex-row">
			<!-- wp:column {"width":"40%","verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
				<!-- wp:image {"align":"center","width":"100%","sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image aligncenter size-large is-resized">
					<img src="<?php gw_placeholder_image(600, 400); ?>" alt="Feature image" style="width:100%" />
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
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
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
