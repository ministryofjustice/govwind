<?php
/**
 * Title: Language Switcher
 * Slug: govwind/language-switcher
 * Categories: header, navigation
 * Block Types: core/navigation
 * Inserter: true

 *
 * Versioning (below):
 * the block name, prefix it gw-
 * a version number, increment if changes are made
*/
$versioning = "gw-language-switcher v1-0"; ?>


<!-- wp:group {"layout":{"type":"flex","justifyContent":"right"},"className":"language-switcher <?php echo $versioning; ?>"} -->
<div class="wp-block-group language-switcher <?php echo $versioning; ?>">
    <!-- wp:navigation {"label":"Language Switcher","className":"wp-block-navigation"} -->
        <!-- wp:navigation-link {"label":"English","url":"#","className":"nav-link"} /-->
        <!-- wp:navigation-link {"label":"Cymraeg","url":"#","className":"nav-link"} /-->
    <!-- /wp:navigation -->
</div>
<!-- /wp:group -->

