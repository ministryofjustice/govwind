<?php
/**
 * Title: Header
 * Slug: govwind/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with site title.
 *
 * @package WordPress
 * @subpackage Govwind
 * @since Govwind 0.1.0
 */
?>

<!-- wp:group {"tagName":"header","align":"full","layout":{"type":"default"}} -->
<header class="wp-block-group alignfull col-start-2">

	<!-- wp:group -->
	<div class="wp-block-group dark:brightness-75">
		<!-- wp:image -->
			<img class="wp-block-image w-full" src="https://hale.docker/playground/wp-content/uploads/sites/2/2025/04/UK-GOV_WALES_DUO_WHITE_AW_2024-1024x159.png" alt="Logo in English and Welsh (Logo yn Gymraeg a Saesneg)" />
		<!-- /wp:image -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--30)","bottom":"var(--wp--preset--spacing--30)"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group">
				<!-- wp:site-title /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->	
</header>
<!-- /wp:group -->
