<?php
/**
 * Title: Feature section two columns
 * Slug: govwind/feature-two-col
 * Categories: features
 * Inserter: yes
 * Description: A full-width feature section highlighting service with text and an image.
 * Keywords: feature, section, full width, product, service
 */
?>
<!-- wp:group {"align":"full","className":"py-8 md:py-20","style":{"color":{"background":"var(--colour-primary)"},"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|background"}}}}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-text-color has-background has-link-color py-8 md:py-20" style="background-color:var(--colour-primary)">

	<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-columns alignwide">

			<!-- wp:column {"width":"60%","verticalAlignment":"top","style":{"spacing":{"padding":{"right":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%;padding-right:var(--wp--preset--spacing--50)">
				<!-- wp:heading {"textAlign":"left"} -->
				<h2 class="wp-block-heading has-text-align-left">Feature Section</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>This section highlights two key features side by side, combining structured text with an illustrative image to effectively communicate key aspects of your service or initiative. By presenting these elements in an accessible and visually balanced layout, this pattern has been designed to engage stakeholders and improve clarity. Whether you aim to outline policy measures, demonstrate service benefits, or emphasise strategic priorities, this format provides a focused framework.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"40%","verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large">
					<img src="<?php wb_placeholder_image(600,400); ?>" alt="Feature image" />
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
