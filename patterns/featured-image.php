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

 * Versioning (below):
 * the block name, prefix it gw-
 * a version number, increment if changes are made
*/
	$versioning='gw-featured-image v1-0';
?>

<?php if (has_post_thumbnail()): ?>
	<!-- wp:group {"className":"<?php echo $versioning;?>","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"},"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group <?php echo $versioning;?>" style="padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:post-featured-image {"sizeSlug":"medium","scale":"contain","height":"350px"} /-->
	</div>
	<!-- /wp:group -->
<?php endif; ?>
