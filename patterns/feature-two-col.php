<?php
/**
 * Title: Feature section two columns
 * Slug: govwind/feature-two-col
 * Categories: features
 * Description: A full-width feature section highlighting key aspects of your product or service with text and an image.
 * Keywords: feature, section, full width, product, service
 *
 * @package WordPress
 * @subpackage Govwind
 * @since 2025
 */
?>

<!-- wp:group {"align":"full","className":"has-background-background-color has-background","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center">Feature Section</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"60%","layout":{"type":"constrained"}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:paragraph -->
			<p style="font-size:var(--wp--preset--font-size--xl)">Our work is dedicated to making positive changes that bring real value to individuals, communities, and organisations. Discover the range of projects and initiatives we’re currently developing to support progress and innovation.
                <br><br>We continue to explore new opportunities and ideas, ensuring our efforts remain relevant, effective, and forward-looking.
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large">
				<img src="https://placehold.co/600x400?text=Feature+Image" alt="Feature image" />
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

