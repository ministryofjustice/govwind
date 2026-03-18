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
<!-- wp:group {"style":{"border":{"top":{"color":"var(--colour-secondary)"},"right":{"color":"var(--colour-secondary)"},"bottom":{"color":"var(--colour-secondary)"},"left":{"color":"var(--colour-secondary)","width":"4px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-secondary-background-color has-background" style="border-top-color:var(--colour-secondary);border-right-color:var(--colour-secondary);border-bottom-color:var(--colour-secondary);border-left-color:var(--colour-secondary);border-left-width:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
    <div class="wp-block-group">

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
        <div class="wp-block-group">
            <!-- wp:image {"width":"24px","height":"24px","scale":"contain","sizeSlug":"large","className":"is-style-default"} -->
            <figure class="wp-block-image size-large is-resized is-style-default">
                <img src="<?php gw_placeholder_image(
                	96,
                	96,
                ); ?>" alt="tip placeholder image" style="object-fit:contain;width:24px;height:24px" />
            </figure>
            <!-- /wp:image -->
            <!-- wp:heading {"fontSize":"lg"} -->
            <h2 class="wp-block-heading has-lg-font-size"><?php esc_html_e(
            	"TIP",
            	"govwind",
            ); ?></h2>
            <!-- /wp:heading --></div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p><?php esc_html_e(
        	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non orci vitae nibh luctus fermentum. Integer feugiat, nibh sit amet tristique volutpat, neque elit convallis lacus, at pretium mi nisi sit amet lorem. Curabitur at lacus ac velit suscipit ultrices vitae vel arcu.",
        	"govwind",
        ); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group --></div>
<!-- /wp:group -->
