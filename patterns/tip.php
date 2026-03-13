<?php
/**
 * Title: Tip
 * Slug: govwind/tip
 * Categories: page
 * Description: A tip or important piece of content
 * Keywords: tip
 *
 */
?>
<!-- wp:group {"style":{"color":{"background":"var(--colour-secondary-accent)"},"border":{"top":{"color":"var(--colour-secondary)"},"right":{"color":"var(--colour-secondary)"},"bottom":{"color":"var(--colour-secondary)"},"left":{"color":"var(--colour-secondary)","width":"4px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-color has-background" style="border-top-color:var(--colour-secondary);border-right-color:var(--colour-secondary);border-bottom-color:var(--colour-secondary);border-left-color:var(--colour-secondary);border-left-width:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);background-color:var(--colour-secondary-accent);">

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
    <div class="wp-block-group">
        <!-- wp:image {"width":"24px","height":"24px","scale":"contain","sizeSlug":"large","className":"is-style-default","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
        <figure class="wp-block-image size-large is-resized is-style-default" style="margin-bottom:var(--wp--preset--spacing--50)">
            <img src="<?php wb_placeholder_image(96, 96); ?>" alt="tip placeholder image" style="object-fit:contain;width:24px;height:24px" />
        </figure>
        <!-- /wp:image -->
        <!-- wp:heading {"fontSize":"lg"} -->
        <h2 class="wp-block-heading has-lg-font-size"><?php esc_html_e( 'TIP', 'govwind' ); ?></h2>
        <!-- /wp:heading --></div>
    <!-- /wp:group -->

    <!-- wp:paragraph -->
    <p><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non orci vitae nibh luctus fermentum. Integer feugiat, nibh sit amet tristique volutpat, neque elit convallis lacus, at pretium mi nisi sit amet lorem. Curabitur at lacus ac velit suscipit ultrices vitae vel arcu.', 'govwind' ); ?></p>
    <!-- /wp:paragraph --></div>
<!-- /wp:group -->
