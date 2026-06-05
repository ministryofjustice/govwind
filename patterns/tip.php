<?php
/**
 * Title: Tip
 * Slug: govwind/tip
 * Categories: page
 * Description: A tip or important piece of content
 * Keywords: tip
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"border":{"top":{"color":"var(--colour-secondary)"},"right":{"color":"var(--colour-secondary)"},"bottom":{"color":"var(--colour-secondary)"},"left":{"color":"var(--colour-secondary)","width":"4px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}}},"backgroundColor":"background-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-secondary-background-color has-background" style="border-top-color:var(--colour-secondary);border-right-color:var(--colour-secondary);border-bottom-color:var(--colour-secondary);border-left-color:var(--colour-secondary);border-left-width:4px;margin-top:var(--wp--preset--spacing--6);margin-bottom:var(--wp--preset--spacing--6);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
    <div class="wp-block-group">

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
        <div class="wp-block-group">
            <!-- wp:wb-blocks/icon {"icon":"action/lightbulb_outline","size":1,"alt":"Light bulb icon"} /-->
            <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"fontSize":"lg"} -->
            <h2 class="wp-block-heading has-lg-font-size" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e(
            	"Add tip heading",
            	"govwind",
            ); ?></h2>
            <!-- /wp:heading --></div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p><?php esc_html_e("Add paragraphy text", "govwind"); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group --></div>
<!-- /wp:group -->
