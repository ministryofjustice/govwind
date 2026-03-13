<?php
/**
 * Title: Page Heading Hero
 * Slug: govwind/page-heading-hero
 * Categories: header, featured
 * Description: A full-width page heading hero with breadcrumb, title, description, and supporting image.
 * Keywords: hero, page header, page heading, breadcrumb, title
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"var(--colour-primary)"},"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|background"}}}}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-text-color has-background has-link-color" style="background-color:var(--colour-primary)">

    <!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

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
                <p class="is-style-default"><?php esc_html_e(
                	"Delivering clear, accessible, and reliable digital services built to meet the needs of citizens and communities.",
                	"govwind",
                ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:spacer {"height":"30px"} -->
                <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"33.33%"} -->
            <div class="wp-block-column" style="flex-basis:33.33%">

            <!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"className":"hidden md:block!"} -->
            <figure class="wp-block-image size-full has-custom-border hidden md:block!">
                <img src="<?php gw_placeholder_image(
                	600,
                	600,
                ); ?>" alt="" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px"/>
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
