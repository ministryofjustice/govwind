<?php
/**
 * Title: Footer (centred)
 * Slug: govwind/footer-centre
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with copyright information and links.
 *
 * @package WordPress
 * @subpackage Govwind
 * @since Govwind 0.1.0
 */
?>

<!-- wp:group {"tagName":"footer","metadata":{"categories":["footer"],"patternName":"govwind/footer","name":"Footer (Crown copyright)"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-amber"},":hover":{"color":{"text":"var:preset|color|vivid-red"}}}}},"backgroundColor":"black","textColor":"luminous-vivid-amber","layout":{"type":"constrained"}} -->
<footer class="wp-block-group has-luminous-vivid-amber-color has-black-background-color has-text-color has-background has-link-color"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"sr-only"} -->
<h2 class="wp-block-heading sr-only" id="footer-nav-heading">Footer links</h2>
<!-- /wp:heading -->

<!-- wp:navigation {"ref":1511,"overlayMenu":"never","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:site-logo {"style":{"color":{"duotone":["#ffffff","#fcb900"]}}} /-->

<!-- wp:paragraph -->
<p>© Copyright Ministry of Justice Ministry</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
