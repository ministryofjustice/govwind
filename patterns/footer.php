<?php
/**
 * Title: Footer
 * Slug: govwind/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with copyright information and links.
 *
 * @package WordPress
 * @subpackage Govwind
 * @since Govwind 0.1.0
 */
?>


<!-- wp:group {"className":"col-start-2 my-3 flex justify-between flex-col sm:flex-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group col-start-2 my-3 flex justify-between flex-col sm:flex-row">
    <!-- wp:group {"className":"lg:inline-block w-[100%] sm:w-[calc(100%-150px)] xl:w-[1056px] align-top"} -->
    <div class="wp-block-group lg:inline-block w-[100%] sm:w-[calc(100%-150px)] xl:w-[1056px] align-top">
        <!-- wp:template-part {"slug":"footer-nav","theme":"govwind"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:template-part {"slug":"crown-copyright","theme":"govwind"} /-->
</div>
<!-- /wp:group -->
