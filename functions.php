<?php

/**
 * Govwind theme functions
 */
// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Theme setup
add_action('after_setup_theme', function () {
    // Add theme support for editor styles
    add_theme_support('editor-styles');

    // Check if CSS file exists before adding editor styles
    $css_file = get_template_directory() . '/dist/style.css';
    if (file_exists($css_file)) {
        add_editor_style('dist/style.css');
    }

    // Remove core block patterns
    remove_theme_support('core-block-patterns');
});

// Enqueue scripts and styles for frontend
function govwind_enqueue_assets()
{
    // Get file modification time for cache busting
    $css_file = get_template_directory() . '/dist/style.css';
    $css_version = file_exists($css_file) ? filemtime($css_file) : '1.0.0';

    // Enqueue main stylesheet
    wp_enqueue_style(
        'govwind-style',
        get_template_directory_uri() . '/dist/style.css',
        [],
        $css_version
    );

    wp_enqueue_style(
        'google-material-symbols',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200',
        array(),
        null
    );

    // Handle JavaScript
    if (defined('WP_ENV') && WP_ENV === 'development') {
        // Load Vite dev server assets in development
    } else {
        // Only load JS if file exists
        $js_file = get_template_directory() . '/dist/main.js';
        if (file_exists($js_file)) {
            $js_version = filemtime($js_file);
            wp_enqueue_script(
                'govwind-script',
                get_template_directory_uri() . '/dist/main.js',
                [],
                $js_version,
                true // Load in footer
            );
        }
    }
}
add_action('wp_enqueue_scripts', 'govwind_enqueue_assets');

// Enhanced editor styles support
add_action('enqueue_block_editor_assets', function () {
    $css_file = get_template_directory() . '/dist/style.css';
    $css_version = file_exists($css_file) ? filemtime($css_file) : '1.0.0';

    wp_enqueue_style(
        'govwind-editor-style',
        get_template_directory_uri() . '/dist/style.css',
        [],
        $css_version
    );
});

// Register custom block categories
function govwind_register_block_categories($categories)
{
    return array_merge($categories, [
        [
            'slug'  => 'govwind',
            'title' => __('Govwind Blocks', 'govwind'),
        ],
    ]);
}
add_filter('block_categories_all', 'govwind_register_block_categories');

// Add custom class to nav menu items
function govwind_add_additional_class_on_list_item($classes, $item, $args)
{
    if (isset($args->item_class)) {
        $classes[] = $args->item_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'govwind_add_additional_class_on_list_item', 1, 3);

function gw_add_body_class($classes)
{

    $site_name = preg_replace("/[^A-Za-z0-9 ]/", '', get_bloginfo("name"));
    $site_name = str_replace(" ", "-", strtolower($site_name));
    if (is_page()) {
        $classes[] = 'site-'.$site_name;
    }
    return $classes;
}
add_filter('body_class', 'gw_add_body_class');


/**
 * ACF
 */
require get_template_directory() . '/inc/acf/acf.php';

/**
 * Register additional core/button block styles
 */
function govwind_register_button_styles()
{
    register_block_style(
        'core/button',
        array(
            'name'  => 'ghost',
            'label' => __('Ghost', 'govwind'),
        )
    );
}
add_action('init', 'govwind_register_button_styles');

/**
 * Auto register block patterns in /patterns folder 
 */
function govwind_register_all_block_patterns()
{
    if (! function_exists('register_block_pattern')) {
        return;
    }

    $patterns_dir = get_template_directory() . '/patterns/';
    $pattern_files = glob($patterns_dir . '*.php'); // Get all PHP files

    foreach ($pattern_files as $file) {
        // Extract the pattern metadata from the file header
        $pattern_data = get_file_data($file, array(
            'title'       => 'Title',
            'slug'        => 'Slug',
            'categories'  => 'Categories',
            'description' => 'Description',
        ));

        if (empty($pattern_data['slug']) || empty($pattern_data['title'])) {
            continue; // Skip if slug or title is missing
        }

        // Categories as array
        $categories = ! empty($pattern_data['categories']) ? array_map('trim', explode(',', $pattern_data['categories'])) : array( 'uncategorized' );

        // Read the PHP content of the pattern
        $content = file_get_contents($file);

        register_block_pattern(
            'govwind/' . sanitize_title($pattern_data['slug']),
            array(
                'title'       => esc_html__($pattern_data['title'], 'govwind'),
                'description' => esc_html__($pattern_data['description'], 'govwind'),
                'categories'  => $categories,
                'content'     => $content,
            )
        );
    }
}
add_action('init', 'govwind_register_all_block_patterns');


