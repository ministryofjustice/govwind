<?php
/**
 * Title: CTA Centered
 * Slug: govwind/cta-centered
 * Categories: call-to-action
 * Description: A full-width call to action section with centered text and button.
 * Keywords: cta, call to action, homepage
 *
 * @package WordPress
 * @subpackage Govwind
 * @since 2025
 */
?>

<!-- wp:group {"align":"full","className":"has-background-background-color has-background","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
    
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center">Ready to get started?</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php esc_html_e('Sign up today and start experiencing the benefits of working with us.', 'govwind'); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
        <!-- wp:button -->
        <div class="wp-block-button">
            <a class="wp-block-button__link wp-element-button"><?php esc_html_e('Sign Up Now', 'govwind'); ?></a>
        </div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

</div>
<!-- /wp:group -->

