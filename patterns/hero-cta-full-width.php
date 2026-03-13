<?php
/**
 * Title: Full Width Hero
 * Slug: govwind/hero-cta-full-width
 * Categories: banner, page
 * Keywords: banner, hero
 * Description: Hero Banner with background image
 * Inserter: true
 */

?>
<!-- wp:group {"align":"full","style":{"background":{"backgroundImage":{"url":"<?php gw_placeholder_image($w = 1200,$h = 400) ?>","id":506,"source":"file","title":"fe8054bbe91334dcf6fbb63b995af58ad579a2cf"},"backgroundSize":"cover","backgroundPosition":"50% 50%","backgroundAttachment":"scroll"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull py-0 md:py-16"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"site-background"} -->
<div class="wp-block-column has-site-background-background-color has-background md:rounded" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":1,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"4-xl"} -->
<h1 class="wp-block-heading has-4-xl-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><strong>Ready to get started?</strong></h1>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Sign up now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":506,"sizeSlug":"large","linkDestination":"none","className":"md:hidden","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
<figure class="wp-block-image size-large has-custom-border md:hidden"><img src="<?php gw_placeholder_image($w = 600,$h = 300) ?>" alt="Hero banner placeholder image" class="wp-image-506" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->


