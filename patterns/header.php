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
<header class="wp-block-group alignfull bg-yellow-500 grid grid-cols-[12px_auto_12px] lg:grid-cols-[minmax(12px,_auto)_1000px_minmax(12px,_auto)] col-span-3">

	<!-- wp:group -->
	<div class="wp-block-group max-w-screen-xl col-start-2">
		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading">Header 1 qweqwe</h1>
		<!-- /wp:heading -->
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Header 2</h2>
		<!-- /wp:heading -->

		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--30)","bottom":"var(--wp--preset--spacing--30)"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30); padding-bottom:var(--wp--preset--spacing--30);">
				<!-- wp:site-title /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->	
</header>
<!-- /wp:group -->

