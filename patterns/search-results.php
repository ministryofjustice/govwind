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

<!-- wp:group {"tagName":"main","className":"gw-main-content-area","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group gw-main-content-area" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]}} -->

	<div class="wp-block-query"><!-- wp:columns {"verticalAlignment":"bottom"} -->
		<div class="wp-block-columns are-vertically-aligned-bottom">

			<!-- wp:column {"verticalAlignment":"bottom","width":"66.66%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:66.66%">

				<!-- wp:heading {"level":1} -->
				<h1 class="wp-block-heading">Search results</h1>
				<!-- /wp:heading -->

				<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"},"width":"1px"}},"borderColor":"foreground"} /-->

				<!-- wp:query-total {"displayType":"range-display","rangeFormatSingle":"Showing %1$s of %2$s results","rangeFormatMulti":"Showing %1$s to %2$s of %3$s results","className":"is-style-bold-numbers"} /-->

				<!-- wp:post-template {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"width":"2px","color":"var:preset|color|background-secondary"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--background-secondary);border-top-width:2px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30)">

					<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"2-xl"} /-->

					<!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}}} /-->

					<!-- wp:post-date {"format":"j F Y","hasPrefix":true,"prefix":"\u003cstrong\u003ePublished\u003c/strong\u003e","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

					<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
					<p></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->
				<!-- /wp:post-template -->

				<!-- wp:query-no-results -->
				<!-- wp:heading -->
				<h2 class="wp-block-heading">Nothing found</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
				<!-- /wp:paragraph -->
				<!-- /wp:query-no-results -->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"bottom","width":"33.33%","layout":{"type":"default"}} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%"></div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group">

			<!-- wp:query-pagination {"paginationArrow":"arrow","className":"is-style-centred-on-mobile","style":{"spacing":{"blockGap":"var:preset|spacing|80"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap","orientation":"horizontal"}} -->

			<!-- wp:query-pagination-previous {"label":"Previous"} /-->

			<!-- wp:query-pagination-numbers {"displayType":"current-of-total","className":"is-style-bold-numbers"} /-->

			<!-- wp:query-pagination-next {"label":"Next"} /-->
			<!-- /wp:query-pagination -->

			<!-- wp:query-total {"className":"is-style-bold-numbers","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"left":"0"},"margin":{"left":"0"}}}} /-->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:query -->

</main>
<!-- /wp:group -->