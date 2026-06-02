<?php
/**
 * Title: Page Heading Hero
 * Slug: govwind/page-heading-hero
 * Categories: header, featured
 * Description: A full-width page heading hero with breadcrumb, title, description, and supporting image.
 * Keywords: hero, page header, page heading, breadcrumb, title
 */
?>
<!-- wp:group {"metadata":{"categories":["header","featured"],"patternName":"govwind/page-heading-hero","name":"Page Heading Hero"},"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|greyscale-A"},":hover":{"color":{"text":"var:preset|color|background"}}}}},"backgroundColor":"colour-Z","textColor":"greyscale-A","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-greyscale-a-color has-colour-z-background-color has-text-color has-background has-link-color"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%","style":{"spacing":{"padding":{"bottom":"2.1rem"}}}} -->
<div class="wp-block-column" style="padding-bottom:2.1rem;flex-basis:66.66%"><!-- wp:group {"metadata":{"name":"Breadcrumb"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:boldblocks/breadcrumb-block /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|site-colour-palette-3"}}},"spacing":{"margin":{"top":"1rem"}}},"textColor":"site-colour-palette-3","fontSize":"5-xl"} /-->

<!-- wp:paragraph {"className":"is-style-default"} -->
<p class="is-style-default">
	<?php esc_html_e(
 	"Delivering clear, accessible, and reliable digital services built to meet the needs of citizens and communities.",
 	"govwind",
 ); ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"id":1134,"sizeSlug":"full","linkDestination":"none","className":"hidden md:block! md:relative left-[var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002droot\u002d\u002dpadding-left)] [\u0026\u003eimg]:h-full! [\u0026\u003eimg]:w-full! [\u0026\u003eimg]:max-w-max! hidden md:block! [\u0026\u003eimg]:object-cover [\u0026\u003eimg]:object-left","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
<figure class="wp-block-image size-full has-custom-border hidden md:block! md:relative left-[var(--wp--style--root--padding-left)] [&>img]:h-full! [&>img]:w-full! [&>img]:max-w-max! [&>img]:object-cover [&>img]:object-left"><img src="<?php gw_placeholder_image(
	600,
	600,
); ?>" alt="" class="wp-image-1134" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
