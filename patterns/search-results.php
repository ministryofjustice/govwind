<?php
/**
 * Title: Search results
 * Slug: govwind/search-results
 * Categories: content
 * Description: Displays the search results
 *
 * @package WordPress
 * @subpackage Govwind
 * @since Govwind 0.1.0
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main
	class="wp-block-group gw-main-content-area"
	style="
		margin-top: 0;
		padding-top: var(--wp--preset--spacing--60);
		padding-bottom: var(--wp--preset--spacing--60);
	"
>

	<!-- wp:query-title {"type":"search"} /-->

	<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->
	
	<!-- wp:pattern {"slug":"govwing/template-query-loop"} /-->
	
	<!-- wp:pattern {"slug":"govwing/more-posts"} /-->
</main>
<!-- /wp:group -->