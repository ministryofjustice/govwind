<?php
/**
 * Title: Title-single
 * Slug: govwind/title-single
 * Categories: title
 * Block Types: core/template-part/titlesingle
 * Description: Page title.
 *
 * @package WordPress
 * @subpackage Govwind
 * @since Govwind 0.1.0
 */
?>

<!-- wp:heading {"level":1,"align":"left"} -->
<h1 class="wp-block-heading col-start-2 text-5xl pb-10">
	<?php single_post_title(); ?>
</h1>
<!-- /wp:heading -->
