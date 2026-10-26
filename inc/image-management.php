<?php
// Prevent direct access
if (!defined("ABSPATH")) {
	exit();
}

/**
 * function echos out the path for the image only
 * $w = width in pixels (int only)
 * $h = height in pixels (int only)
 * int only protection here and in the placeholder file
 */
function gw_placeholder_image(int $w = 500, int $h = 300, string $t = ""): void
{
	$t = urlencode(mb_substr($t, 0, 20, "UTF-8"));
	echo esc_url(
		get_template_directory_uri() .
			"/assets/images/placeholder.php?w=$w&h=$h&t=$t",
	);
}

/**
 * Add support for Apple and other new formats
 */
add_filter( 'upload_mimes', function( $mimes ) {
    $mimes['heic'] = 'image/heic';
    $mimes['heif'] = 'image/heif';
    return $mimes;
} );
