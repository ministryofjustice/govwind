<?php
/**
 * Title: Page Heading Hero
 * Slug: govwind/page-heading-hero
 * Categories: header, featured
 * Description: A full-width page heading hero with breadcrumb, title, description, and supporting image.
 * Keywords: hero, page header, page heading, breadcrumb, title
 */
?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-secondary"},":hover":{"color":{"text":"var:preset|color|foreground"}}}}},"backgroundColor":"primary","textColor":"foreground-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-foreground-secondary-color has-primary-background-color has-text-color has-background has-link-color">

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">

        <!-- wp:columns {"align":"wide"} -->
        <div class="wp-block-columns alignwide">

            <!-- wp:column {"width":"66.66%"} -->
            <div class="wp-block-column" style="flex-basis:66.66%">

                <!-- wp:group {"metadata":{"name":"Breadcrumb"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
                    <!-- wp:boldblocks/breadcrumb-block /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:spacer {"height":"19px"} -->
                <div style="height:19px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:post-title {"level":1} /-->

                <!-- wp:paragraph {"className":"is-style-default"} -->
                <p class="is-style-default"><?php esc_html_e( 'Delivering clear, accessible, and reliable digital services built to meet the needs of citizens and communities.', 'govwind' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:spacer {"height":"30px"} -->
                <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"33.33%"} -->
            <div class="wp-block-column" style="flex-basis:33.33%">

                <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hidden md:block!"} -->
                <figure class="wp-block-image size-full hidden md:block!">
                    <img src="https://placehold.co/600x600?text=feature+image" alt=""/>
                </figure>
                <!-- /wp:image -->

            </div>
            <!-- /wp:column -->

        </div>
        <!-- /wp:columns -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
