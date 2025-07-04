<?php
/**
 * Title: Navigation
 * Slug: govwind/navtop
 * Categories: navigation
 * Block Types: core/template-part/navigation
 * Description: Main navigation section
 *
 * @package WordPress
 * @subpackage Govwind
 * @since Govwind 0.1.0
 */
?>

<?php
/*
$show_header_menu = get_theme_mod('show_header_menu', 'yes');
if ($show_header_menu == 'yes') {
    $show_more_button = get_theme_mod('show_header_menu_more_button', 'yes');
    if ($show_more_button == 'yes') {
        $more_text = __("More","hale");
    } else {
        $more_text = "None";
    }

    $menu_locations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php).

    $topmenu_args = array(
        'menu' => 'main-menu',
        'menu_class' => 'gw-top-nav flex flex-row justify-between',
        'menu_id' => 'menu-menu-top-menu',
        'container' => false,
        'container_class' => '',
        'container_id' => '',
        'fallback_cb' => '',
        'before' => '',
        'after' => '',
        'link_before' => '<span>',
        'link_after' => '</span>',
        'echo' => true,
        'depth' => 1,
        'walker' => '',
        'theme_location' => 'main-menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'item_spacing' => 'preserve',
        'item_class' => 'flex-none bg-blue-400'
    );
    $navigation_array = wp_get_nav_menu_items("main-menu",$topmenu_args);
    ?>
    <!-- wp:navigation {"orientation":"horizontal","className":"gw-top-nav flex flex-row justify-between is-layout-flex wp-block-navigation-is-layout-flex"} -->
        <?php
            foreach($navigation_array as $nav_item) {
               echo '<!-- wp:navigation-link {"label":"'.$nav_item->title.'","url":"'.$nav_item->url.'","className":"flex-none bg-blue-400"} /-->';
            }
            ?>
    <!-- /wp:navigation -->
    <nav class="wp-block-group col-start-2" id="header-navigation" role="navigation" aria-label="Primary navigation" data-more-text="<?php echo $more_text ?>">
        <?php
        wp_nav_menu($topmenu_args);
        ?>
    </nav>
    
<?php

    //var_dump($navigation_array);

}
/**/