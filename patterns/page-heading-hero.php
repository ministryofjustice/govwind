<?php
/**
 * Title: Page Heading Hero
 * Slug: govwind/page-heading-hero
 * Categories: header, featured
 * Description: A full-width page heading hero with breadcrumb, title, description, and supporting image.
 * Keywords: hero, page header, page heading, breadcrumb, title
 *
 */
?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|foreground"}},"color":{"text":"var:preset|color|foreground-secondary"}}}},"backgroundColor":"primary","textColor":"foreground-secondary","layout":{"type":"constrained"}} -->
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

                <!-- wp:spacer {"height":"19px","width":"0px","style":{"layout":[]}} -->
                <div style="height:19px;width:0px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:post-title {"level":1} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"className":"is-style-default","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"layout":{"selfStretch":"fit","flexSize":null}}} -->
                    <p class="is-style-default" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px"><?php esc_html_e( 'Smaller Images, Faster Sites, Happier Visitors. Comprehensive image optimization that doesn\'t require a degree in rocket science.', 'govwind' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:spacer {"height":"30px","width":"0px","style":{"layout":{}}} -->
                <div style="height:30px;width:0px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"33.33%"} -->
            <div class="wp-block-column" style="flex-basis:33.33%">

                <!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
                <figure class="wp-block-image size-full has-custom-border">
                    <img src="https://placehold.co/600x600?text=feature+image" alt="" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px"/>
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
