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
	<div class="col-start-2 pb-10">
		<?php the_post_thumbnail( 'medium' ); ?>
    </div>
<?php endif; ?>