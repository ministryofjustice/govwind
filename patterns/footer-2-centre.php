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

<!-- wp:group {"tagName":"footer","metadata":{"categories":["footer"],"patternName":"govwind/footer","name":"Footer (Crown copyright)"},"className":"my-3 flex justify-between flex-col sm:flex-row","style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-amber"},":hover":{"color":{"text":"var:preset|color|vivid-red"}}}}},"backgroundColor":"black","textColor":"luminous-vivid-amber","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<footer class="wp-block-group my-3 flex justify-between flex-col sm:flex-row has-luminous-vivid-amber-color has-black-background-color has-text-color has-background has-link-color"><!-- wp:heading {"className":"sr-only"} -->
<h2 class="wp-block-heading sr-only" id="footer-nav-heading">Footer links</h2>
<!-- /wp:heading -->

<!-- wp:navigation {"ref":1511,"overlayMenu":"never","className":"[\u0026_.wp-block-navigation-item:not(:last-child)]:me-5","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:site-logo {"style":{"color":{"duotone":["#ffffff","#fcb900"]}}} /-->

<!-- wp:paragraph -->
<p>© Copyright Ministry of Justice</p>
<!-- /wp:paragraph --></footer>
<!-- /wp:group -->
