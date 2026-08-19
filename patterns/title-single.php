<?php
/**
 * Title: Title-single
 * Slug: govwind/title-single
 * Categories: title
 * Description: Page title.
 *
 * @package WordPress
 * @subpackage Govwind
 * @since Govwind 0.1.0
 *
 * Versioning (below):
 * the block name, prefix it gw-
 * a version number, increment if changes are made
 */
$versioning = "gw-title-section v1-0"; ?>


<!-- wp:heading {"level":1,"align":"left","className":"<?php echo $versioning; ?>","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}}} -->
<h1 class="wp-block-heading <?php echo $versioning; ?>" style="padding-bottom:var(--wp--preset--spacing--60)">
	<?php single_post_title(); ?>
</h1>
<!-- /wp:heading -->
