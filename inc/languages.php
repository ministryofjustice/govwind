<?php
// Prevent direct access
if (!defined("ABSPATH")) {
	exit();
}

/**
 * These actions and functions support multi-lingual pages
 * Pages can be set a lang attribute which will appear in the content container
 * Links to said page shall have an hreflang attribute
 * Protection against superfluous use:
 * - no need for a lang if the site lang is the same
 * - no need for it if the page is set to a less specific one than the site (e.g. en vs en-GB)
 * - links to a page check against the page content rather than the site
 *
 * Example, English site with some Welsh pages
 * Welsh page
 * 		<html lang="en-GB">
 * 			<nav>
 * 				<a> English Page</a>
 * 				<a hreflang="cy"> Welsh Page </a>
 * 			</nav>
 * 			<main lang="cy">
 * 				<a hreflang="en-GB"> English Page </a>
 * 				<a> Welsh Page </a>
 *
 * English page
 * 		<html lang="en-GB">
 * 			<nav>
 * 				<a> English Page</a>
 * 				<a hreflang="cy"> Welsh Page </a>
 * 			</nav>
 * 			<main>
 * 				<a> English Page </a>
 * 				<a hreflang="cy"> Welsh Page </a>
 *
 * In this example, if a page was set to lang = "en", it would be recognised as being English (sharing "en" with "en-GB")
 * So the lang wouldn't be used
 */

add_action("init", function () {
	register_post_meta("page", "_page_language", [
		"type" => "string",
		"single" => true,
		"show_in_rest" => true,
		"sanitize_callback" => "wb_sanitize_page_language",
		"auth_callback" => function () {
			return current_user_can("edit_pages");
		},
	]);
});

add_action("enqueue_block_editor_assets", function () {
	$screen = get_current_screen();

	if ($screen && $screen->post_type !== "page") {
		return;
	}

	wp_enqueue_script(
		"page-language-panel",
		get_template_directory_uri() . "/assets/js/page-language.js",
		[
			"wp-plugins",
			"wp-edit-post",
			"wp-components",
			"wp-element",
			"wp-data",
		],
		filemtime(get_template_directory() . "/assets/js/page-language.js"),
		true,
	);
});

function wb_sanitize_page_language($value)
{
	$value = sanitize_text_field($value);

	if ($value === "") {
		return "";
	}

	return preg_match('/^[A-Za-z]{2,3}(-[A-Za-z0-9]+)*$/', $value)
		? $value
		: "";
}

add_filter(
	"render_block",
	function ($block_content, $block) {
		// This sets the language of the page content to the page language.
		// As the header and footer will always be in the site language,
		// we leave the html tag in the site lang and only change
		// the page content lang attribute to the page lang

		if (!is_page() || $block["blockName"] !== "core/post-content") {
			return $block_content;
		}
		$languages = wb_get_page_languages(get_queried_object_id());
		$page_lang = $languages["page"];
		$site_lang = $languages["site"];

		// Don't add a lang attribute if it's the same as the site.
		if (
			empty($page_lang) ||
			strtolower($page_lang) == strtolower($site_lang)
		) {
			return $block_content;
		}

		return preg_replace(
			"/^<([a-z0-9-]+)/i",
			'<$1 lang="' . esc_attr($page_lang) . '"',
			$block_content,
			1,
		);
	},
	10,
	2,
);

add_filter(
	"render_block_core/post-content",
	function ($content, $block) {
		// This calls the function to add hreflang attributes to links - only if it is in the main page content
		return wb_add_hreflang_to_links($content);
	},
	10,
	2,
);

function wb_add_hreflang_to_links($content)
{
	// This filter adds hreflang attributes to links if their page is not in the current page language.
	// The current page language might not be the site language.
	// If so, all links to pages in the site language must be marked.

	return preg_replace_callback(
		'/<a\b([^>]*href=["\']([^"\']+)["\'][^>]*)>/i',
		function ($matches) {
			$post_id = url_to_postid($matches[2]);

			if (!$post_id) {
				return $matches[0];
			}

			$current_page_lang = wb_get_page_languages()["page"]; // no argument = current page ID
			$site_lang = wb_get_page_languages()["site"];
			$lang = wb_get_page_languages($post_id)["page"];

			if (empty($lang)) {
				$lang = $site_lang;
			}

			if ($lang != $current_page_lang) {
				return "<a" .
					$matches[1] .
					' hreflang="' .
					esc_attr(str_replace("_", "-", $lang)) .
					'">';
			} else {
				return $matches[0];
			}
		},
		$content,
	);
}

add_filter(
	"render_block",
	function ($block_content, $block) {
		// This filter adds hreflang attributes to the navigation links if their page is not in the site language
		// The nav will always be in the site language

		if ($block["blockName"] !== "core/navigation-link") {
			return $block_content;
		}

		$post_id = $block["attrs"]["id"] ?? 0;

		if (!$post_id) {
			return $block_content;
		}

		$languages = wb_get_page_languages($post_id);
		$page_lang = $languages["page"];
		$site_lang = $languages["site"];

		if (empty($page_lang) || $page_lang === $site_lang) {
			return $block_content;
		}

		$block_content = preg_replace(
			"/<a\b/",
			'<a hreflang="' . esc_attr($page_lang) . '"',
			$block_content,
			1,
		);

		return $block_content;
	},
	10,
	2,
);

/**
 * This function returns the page language for a particular ID, and the site language
 * @param $id = the ID of the page in question (defaults to current ID)
 * @return [$page_lang,$site_lang] = a named array with both the lang value for the page and site
 * If no page language is set, $page_lang will be the site lang
 * We check:
 * - Page lang is set
 *   If not, page lang is site lang
 * - Page lang isn't just the base language of site lang
 *   If so, we will change it to the site lang (e.g. "en" becomes "en-GB")
 *   But if the site is just the base of the page, we won't (e.g. "en-GB" won't become "en")
 */

function wb_get_page_languages($id = "")
{
	if (empty($id)) {
		$id = get_the_id();
	}

	// turn wordpress values into ISO (_ to -)
	$page_lang = str_replace(
		"_",
		"-",
		get_post_meta($id, "_page_language", true),
	);
	$site_lang = str_replace("_", "-", get_bloginfo("language"));

	if (empty($page_lang)) {
		$page_lang = $site_lang;
	}

	// If the page language is just the base language and the site
	// language is more specific (e.g. "en" vs "en-GB"), inherit it.
	if (strtolower($page_lang) == strtolower(strtok($site_lang, "-"))) {
		$page_lang = $site_lang;
	}

	return [
		"page" => $page_lang,
		"site" => $site_lang,
	];
}
