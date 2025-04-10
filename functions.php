<?php
/**
 * Govwind theme functions
 */

// Prevent direct access
if (!defined('ABSPATH')) exit;

// Enqueue scripts and styles
function govwind_enqueue_assets() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/dist/tailwind.css', [], '1.0');

    if (defined('WP_ENV') && WP_ENV === 'development') {
        // Load Vite dev server assets in development
    } else {
        wp_enqueue_script('theme-script', get_template_directory_uri() . '/dist/main.js', [], '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'govwind_enqueue_assets');

// Register custom block categories
function govwind_register_block_categories($categories) {
    return array_merge($categories, [
        [
            'slug'  => 'govwind',
            'title' => __('Govwind Blocks', 'govwind'),
        ],
    ]);
}
add_filter('block_categories_all', 'govwind_register_block_categories');

#add_action( 'after_setup_theme', 'sync_colour_scheme_across_multisite' );

function sync_colour_scheme_across_multisite() {
	if ( ! is_multisite() ) {
		return;
	}

	// Make sure global styles functionality is loaded
	if ( ! function_exists( 'wp_get_global_styles_post' ) ) {
		require_once ABSPATH . 'wp-includes/global-styles-and-settings.php';
	}

	$theme      = wp_get_theme();
	$theme_slug = $theme->get_stylesheet();

	$json_path = get_theme_file_path( 'styles/01-colour-scheme.json' );
	if ( ! file_exists( $json_path ) ) {
		error_log( 'Colour scheme JSON file not found at: ' . $json_path );
		return;
	}

	$json_raw  = file_get_contents( $json_path );
	$json_data = json_decode( $json_raw, true );
	$new_hash  = md5( $json_raw );

	$sites = get_sites( [ 'number' => 0 ] );
	foreach ( $sites as $site ) {
		switch_to_blog( $site->blog_id );

		$option_key  = 'my_colour_scheme_hash_' . $theme_slug;
		$stored_hash = get_option( $option_key );

		if ( $stored_hash !== $new_hash ) {
			// Query for the existing wp_global_styles post
			$post = get_posts( [
				'post_type'   => 'wp_global_styles',
				'post_status' => 'publish',
				'meta_key'    => 'wp_global_styles_theme',  // Tie to the specific theme
				'meta_value'  => $theme_slug,
				'numberposts' => 1,
			] );

			// If the post exists, update it
			if ( $post ) {
				$post = $post[0];  // Get the first (and only) result

				// New content for the post
				$new_content = wp_json_encode( [
					'styles' => $json_data['styles'] ?? [],
				] );

				// Update the post
				wp_update_post( [
					'ID'           => $post->ID,
					'post_content' => $new_content,
				] );

				// Optional: Force WordPress to create a revision
				// This is done automatically by updating the post content
			} else {
				// If the post doesn't exist, create it
				wp_insert_post( [
					'post_type'    => 'wp_global_styles',
					'post_status'  => 'publish',
					'post_title'   => $theme_slug,
					'post_name'    => $theme_slug,
					'post_content' => wp_json_encode( [
						'styles' => $json_data['styles'] ?? [],
					] ),
					'meta_input'   => [
						'wp_global_styles_theme' => $theme_slug,
					],
				] );
			}

			// Update the stored hash for the site
			update_option( $option_key, $new_hash );
		}

		restore_current_blog();
	}
}


add_action( 'admin_init', function() {
    // Check if the theme's theme.json has been updated
    $theme_json_path = get_template_directory() . '/theme.json';
    $theme_json_path = get_theme_file_path( 'styles/01-colour-scheme.json' );
    $last_modified_time = get_option( 'last_theme_json_mod' );

    if ( $last_modified_time && filemtime( $theme_json_path ) > $last_modified_time ) {
        // Clear global styles cache
        wp_cache_delete( 'global_styles', 'theme' );

        // Force regeneration of global styles
        wp_get_global_stylesheet();

        // Update timestamp in DB
        update_option( 'last_theme_json_mod', filemtime( $theme_json_path ) );

        error_log( 'Global styles regenerated after theme.json change.' );
    } else {
        // Initialize the timestamp if it’s not set
        update_option( 'last_theme_json_mod', filemtime( $theme_json_path ) );
    }
} );

