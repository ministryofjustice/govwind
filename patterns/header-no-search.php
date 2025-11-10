<?php
/**
 * Title: Header
 * Slug: govwind/header-no-search
 * Categories: header
 * Block Types: core/template-part/header-no-search
 * Description: Clean header with logo, title, and navigation with home link.
 */
?>
<!-- wp:group {"metadata":{"categories":["header"],"patternName":"govwind/header-no-search","name":"Header search"},"align":"full","className":"has-header-text-color has-text-color is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|header-text"}}}},"backgroundColor":"header-bg","textColor":"header-text"} -->
<div class="wp-block-group alignfull has-header-text-color has-text-color is-style-default has-header-bg-background-color has-background has-link-color">
	
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group">
			
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo {"width":145,"shouldSyncIcon":false} /-->
				
				<!-- wp:site-title /-->
			</div>
			<!-- /wp:group -->
			
			<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right"}} -->
				<!-- wp:navigation-link {"label":"Home","url":"/","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->
			
		</div>
		<!-- /wp:group -->
		
	</div>
	<!-- /wp:group -->
	
</div>
<!-- /wp:group -->
