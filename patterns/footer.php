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

    <!-- wp:group {"className":"text-center lg:inline-block mx-auto lg:mx-0 w-[150px] pt-3"} -->
    <div class="wp-block-group text-center lg:inline-block mx-auto lg:mx-0 w-[150px] pt-3">
        <!-- wp:safe-svg/svg-icon {"svgURL":"https://hale.docker/playground/wp-content/uploads/sites/2/2025/06/royal-arms-5.svg","imageID":1534,"imageWidth":702,"imageHeight":624,"dimensionWidth":176,"dimensionHeight":156,"imageSizes":{"full":{"file":"royal-arms-5.svg","width":702,"height":624,"mime_type":"image/svg+xml","source_url":"https://hale.docker/playground/wp-content/uploads/sites/2/2025/06/royal-arms-5.svg"},"medium":{"width":"300","height":"300","crop":false,"file":"royal-arms-5.svg","mime_type":"image/svg+xml","source_url":"https://hale.docker/playground/wp-content/uploads/sites/2/2025/06/royal-arms-5.svg"},"thumbnail":{"width":"150","height":"150","crop":"1","file":"royal-arms-5.svg","mime_type":"image/svg+xml","source_url":"https://hale.docker/playground/wp-content/uploads/sites/2/2025/06/royal-arms-5.svg"}},"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /-->
        <!-- wp:paragraph -->
        <p>©Crown Copyright</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
