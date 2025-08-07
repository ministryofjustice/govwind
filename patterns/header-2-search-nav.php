<?php
/**
 * Title: Header with search bar & navigation bar
 * Slug: govwind/header-search-nav
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with a search bar at the right hand side & a navigation bar.
 *
 * @package WordPress
 * @subpackage Govwind
 * @since Govwind 0.1.0
 */

?>
<!-- wp:group {"metadata":{"categories":["header"],"patternName":"govwind/header","name":"Header"},"align":"full","className":"govwind-header py-3 has-white-color has-text-color ","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"vivid-purple","textColor":"white"} -->
<div class="govwind-header wp-block-group alignfull py-3 has-white-color has-vivid-purple-background-color has-text-color has-background has-link-color"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":145,"shouldSyncIcon":false} /-->

<!-- wp:site-title /--></div>
<!-- /wp:group -->

<!-- wp:search {"label":"Search this site","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"ref":1552} /--></div>
<!-- /wp:group -->