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

