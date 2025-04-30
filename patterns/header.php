<?php
/**
 * Title: Header
 * Slug: govwind/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with site title and navigation.
 *
 * @package WordPress
 * @subpackage Govwind
 * @since Govwind 0.1.0
 */

 
?>
<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="mycustomcss wp-block-group alignfull bg-blue-500">

	<!-- wp:group -->
	<div class="wp-block-group max-w-screen-xl mx-auto pr-4 pl-4 md:pr-0 md:pl-0">
		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading">Header 5</h1>
		<!-- /wp:heading -->

		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--30)","bottom":"var(--wp--preset--spacing--30)"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30); padding-bottom:var(--wp--preset--spacing--30);">
				<!-- wp:site-title /-->
				
				<!-- wp:group {"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--10)"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
				<div class="wp-block-group">
					<!-- wp:navigation {"overlayBackgroundColor":"base","overlayTextColor":"contrast","layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->	
</div>
<!-- /wp:group -->

