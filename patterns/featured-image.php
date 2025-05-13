<?php
/**
 * Title: Featured-image
 * Slug: govwind/featured-image
 * Categories: image
 * Description: Displays the featured image for the post
 *
 * @package WordPress
 * @subpackage Govwind
 * @since Govwind 0.1.0
 */
?>

<?php if ( has_post_thumbnail() ) : ?>
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"},"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group col-start-2 pb-10 mb-10">
		<!-- wp:post-featured-image {"sizeSlug":"medium","scale":"contain","height":"350px"} /-->
	</div>
	<!-- /wp:group -->
<?php endif; ?>
