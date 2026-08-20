<?php
/**
 * Title: Header minimal
 * Slug: govwind/header-minimal
 * Categories: header
 * Block Types: core/template-part/header-minimal
 * Description: Header with site title.
 *
 * @package WordPress
 * @subpackage Govwind
 * @since Govwind 0.1.0
 *
 * Versioning (below):
 * the block name, prefix it gw-
 * a version number, increment if changes are made
 */
$versioning = "gw-header-min v1-0"; ?>
<!-- wp:group {"metadata":{"categories":["header"],"patternName":"govwind/header-default","name":"Simple Header"},
     "align":"full","className":"has-header-text-color has-text-color is-style-default <?php echo $versioning; ?>",
     "style":{"elements":{"link":{"color":{"text":"var:preset|color|header-text"}}}},
     "backgroundColor":"primary","textColor":"header-text"} -->
<div class="wp-block-group alignfull has-header-text-color has-text-color is-style-default 
           has-primary-background-color has-background has-link-color <?php echo $versioning; ?>">
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
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
