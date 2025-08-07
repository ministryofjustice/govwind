<?php
/**
 * Title: Footer (wide)
 * Slug: govwind/footer-wide
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with copyright information and links.
 *
 * @package WordPress
 * @subpackage Govwind
 * @since Govwind 0.1.0
 */
?>


<!-- wp:group {"tagName":"footer","metadata":{"categories":["footer"],"patternName":"govwind/footer","name":"Footer (Crown copyright)"},"className":"my-3 flex justify-between flex-col sm:flex-row","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"black","textColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
    <footer class="wp-block-group my-3 flex justify-between flex-col sm:flex-row has-white-color has-black-background-color has-text-color has-background has-link-color"><!-- wp:group {"className":"lg:inline-block w-[100%] sm:w-[calc(100%-150px)] xl:w-[1056px] align-top","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
        <div class="wp-block-group lg:inline-block w-[100%] sm:w-[calc(100%-150px)] xl:w-[1056px] align-top"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group"><!-- wp:heading {"className":"sr-only"} -->
                <h2 class="wp-block-heading sr-only" id="footer-nav-heading">Footer links</h2>
                <!-- /wp:heading -->

                <!-- wp:navigation {"ref":1511,"overlayMenu":"never","className":"[\u0026_.wp-block-navigation-item:not(:last-child)]:me-5","layout":{"type":"flex","orientation":"vertical"}} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:site-logo /-->
        </div>
    <!-- /wp:group -->

    <!-- wp:paragraph {"className":"inline"} -->
        <p>© Copyright Ministry of Justice</p>
    <!-- /wp:paragraph -->
</footer>
<!-- /wp:group -->
