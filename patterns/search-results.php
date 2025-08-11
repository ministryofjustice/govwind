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

<!-- wp:group {"tagName":"main","className":"gw-main-content-area","layout":{"type":"constrained"}} -->
<main class="wp-block-group gw-main-content-area"><!-- wp:query-title {"type":"search"} /-->

	<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->
	
	<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"full","layout":{"type":"default"}} -->
	<div class="wp-block-query alignfull"><!-- wp:post-template {"align":"full","layout":{"type":"default"}} -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
	
	<!-- wp:post-date {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"small"} /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:query-no-results -->
	<!-- wp:paragraph -->
	<p>Sorry, but nothing was found. Please try a search with different keywords.</p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide"><!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous /-->
	
	<!-- wp:query-pagination-numbers /-->
	
	<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination --></div>
	<!-- /wp:group --></div>
	<!-- /wp:query -->
	
	<!-- wp:pattern {"slug":"govwing/more-posts"} /--></main>
	<!-- /wp:group -->