<?php
// Prevent direct access.
if (!defined("ABSPATH")) {
	exit();
}

add_filter("render_block_core/site-logo", function ($block_content) {
	if (!str_contains($block_content, 'rel="home"')) {
		// We use the presence of rel="home" to confirm that this is a link to the homepage.
		return $block_content;
	}

	$alt = sprintf(
		/* translators: %s: site name */
		__("%s – homepage", "govwind"),
		get_bloginfo("name"),
	);

	return preg_replace(
		// Replace whatever alt text was there with the new homepage alt text.
		'/alt="[^"]*"/',
		'alt="' . esc_attr($alt) . '"',
		$block_content,
		1,
	);
});
