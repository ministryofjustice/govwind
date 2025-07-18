<?php
/**
 * Title: Navigation
 * Slug: govwind/navside
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
        'menu_class' => 'gw-side-nav',
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
        'depth' => 2,
        'walker' => '',
        'theme_location' => 'main-menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'item_spacing' => 'preserve',
    );
    ?>
	<!-- wp:group {"tagName":"nav"} -->
	<nav class="wp-block-group" id="header-navigation" role="navigation" aria-label="Primary navigation" data-more-text="<?php echo $more_text ?>">
        <?php 
		/*
		<button type="button" class="hale-header__mobile-controls hale-header__mobile-controls--menu govuk-header__menu-button govuk-js-header-toggle" aria-controls="menu-menu-top-menu" aria-label="Show or hide navigation menu" hidden>
            <svg class="hale-icon hale-icon--cross" xmlns="http://www.w3.org/2000/svg" viewBox="-2 2 29 20" aria-hidden="true" focusable="false">
                <path d='m13.41 12 5.3-5.29a1 1 0 1 0-1.42-1.42L12 10.59l-5.29-5.3a1 1 0 0 0-1.42 1.42l5.3 5.29-5.3 5.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l5.29-5.3 5.29 5.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z'></path>
            </svg>
            <svg class="hale-icon hale-icon--burger" xmlns="http://www.w3.org/2000/svg" viewBox="-4 0 32 22" aria-hidden="true" focusable="false">
                <path d='M.857 3.844h22.286A.856.856 0 0 0 24 2.99V.854A.856.856 0 0 0 23.143 0H.857A.856.856 0 0 0 0 .854V2.99c0 .472.384.854.857.854zm0 8.543h22.286a.856.856 0 0 0 .857-.854V9.397a.856.856 0 0 0-.857-.854H.857A.856.856 0 0 0 0 9.397v2.136c0 .472.384.854.857.854zm0 8.543h22.286a.856.856 0 0 0 .857-.854V17.94a.856.856 0 0 0-.857-.854H.857A.856.856 0 0 0 0 17.94v2.136c0 .472.384.854.857.854z'></path>
            </svg>
            <span><?php echo esc_html__( 'Menu', 'hale' ); ?></span>
        </button>
		/**/
		?>
        <?php
        wp_nav_menu($topmenu_args);
        ?>
    </nav>
	<!-- /wp:group -->
<?php }
