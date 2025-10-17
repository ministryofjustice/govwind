<?php
/**
 * Title: Default Header
 * Slug: govwind/header-default
 * Categories: header
 * Block Types: core/template-part/header-default
 * Description: Default site header with logo, search bar, optional CTA button, and navigation menu.
 *
 * @package WordPress
 * @subpackage Govwind
 * @since Govwind 0.1.0
 */
?>
<!-- wp:group {"align":"full","className":"has-header-text-color has-text-color is-style-default",
     "style":{"elements":{"link":{"color":{"text":"var:preset|color|header-text"}}}},
     "backgroundColor":"header-bg","textColor":"header-text"} -->
<div class="wp-block-group alignfull has-header-text-color has-text-color is-style-default 
           has-header-bg-background-color has-background has-link-color">
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        
        <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
        <div class="wp-block-group">
            
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
            <div class="wp-block-group">
                <!-- wp:site-logo {"width":145,"shouldSyncIcon":false} /-->
                <!-- wp:site-title /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"flex-end","flexGrow":1}} -->
            <div class="wp-block-group">
                <!-- wp:search {"label":"Search this site","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"width":450,"widthUnit":"px"} /-->

            <!-- wp:button -->
            <div class="wp-block-button">
                <a class="wp-block-button__link wp-element-button" href="#">Click Me CTA</a>
            </div>
            <!-- /wp:button -->
                    
            </div>
            <!-- /wp:group -->
        
        </div>
        <!-- /wp:group -->
        
        <!-- wp:navigation {"layout":{"type":"flex","justifyContent":"left"}} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

