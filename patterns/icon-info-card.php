<?php
/**
 * Title: Icon Info Card
 * Slug: govwind/icon-info-card
 * Categories: page
 * Keywords: icon, info, card
 * Description: Card that contains an icon, heading and text
 * Inserter: true
 *
 * @package WordPress
 * @subpackage Govwind
 * @since Govwind 0.1.0
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"dimensions":{"minHeight":"100px"}},"backgroundColor":"background-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-secondary-background-color has-background" style="min-height:100px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

    <!-- wp:image {"width":"48px","height":"48px","scale":"contain","sizeSlug":"large","className":"is-style-default","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
    <figure class="wp-block-image size-large is-resized is-style-default" style="margin-bottom:var(--wp--preset--spacing--50)"><img src="/wp-content/themes/govwind/assets/images/placeholder.php?w=96&amp;h=96" alt="Placeholder image" style="object-fit:contain;width:48px;height:48px" /></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"base"} -->
    <h3 class="wp-block-heading has-base-font-size" style="margin-top:0">Encrypted messaging</h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
    <p style="font-size:16px">Thanks to Transport Layer Security (TLS) protocol, any communication is sent via end-to-end encryption.</p>
    <!-- /wp:paragraph -->

</div>
<!-- /wp:group -->