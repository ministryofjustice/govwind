<?php
/**
 * Title: Header with inline navigation
 * Slug: govwind/header-inline
 * Categories: header
 * Block Types: core/template-part/header-default
 * Description: Header with navigation bar in line with the title and logo.
 *
 * @package WordPress
 * @subpackage Govwind
 * @since Govwind 0.1.0
 */
?>
<!-- wp:group {"metadata":{"categories":["header"],"patternName":"govwind/header-inline","name":"Header with inline navigation"},
     "align":"full","className":"has-header-text-color has-text-color is-style-default",
     "style":{"elements":{"link":{"color":{"text":"var:preset|color|header-text"}}}},
     "backgroundColor":"header-bg","textColor":"header-text"} -->
<div class="wp-block-group alignfull has-header-text-color has-text-color is-style-default 
           has-header-bg-background-color has-background has-link-color">
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
            
            <!-- wp:navigation {"ref":1552} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
