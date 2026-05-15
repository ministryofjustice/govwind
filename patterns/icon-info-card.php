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
<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"},"margin":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}},"dimensions":{"minHeight":"100px"},"typography":{"fontSize":"1rem"}},"backgroundColor":"greyscale-B","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-greyscale-b-background-color has-background" style="min-height:100px;margin-top:var(--wp--preset--spacing--6);margin-bottom:var(--wp--preset--spacing--6);padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem;font-size:1rem">

    <!-- wp:wb-blocks/icon {"size":2.5} /-->

    <!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"lg"} -->
    <h2 class="wp-block-heading has-lg-font-size" style="margin-top:0">Add your heading here.</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Add your text here.</p>
    <!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
