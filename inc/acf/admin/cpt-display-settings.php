<?php


add_filter( 'acf/post_type/additional_settings_tabs', function ( $tabs ) {
    $tabs['display-settings'] = 'Display Settings';

    return $tabs;
} );

add_action('acf/post_type/render_settings_tab/display-settings', function ($acf_post_type) {

    echo '<div class="acf-label"><label for="acf_post_type-admin_menu_parent" style="font-weight:500;">Breadcrumb</label></div>';
    echo '<div class="acf-field acf-field-seperator" data-type="seperator" style="margin-top: 15px;"></div>';
    

    $front_page_id = get_option('page_on_front');
    $args = array('post_type' => 'page', 'posts_per_page' => -1);
    $pages = get_posts($args);
    $choices = ['' => 'Home'];

    foreach($pages as $page){
        if($front_page_id != $page->ID && !empty($page->post_title)){
            $choices[$page->ID] = $page->post_title;
        }
    }

    acf_render_field_wrap(
        array(
            'label' => 'Parent Page',
            'instructions' => '',
            'name'         => 'breadcrumb_parent_page',
            'prefix'       => 'acf_post_type',
            'value'        => isset( $acf_post_type['breadcrumb_parent_page'] ) ? $acf_post_type['breadcrumb_parent_page'] : '',
            'type'         => 'select',
            'choices' =>  $choices,
            //'ui' => true,
        )
    );

  
});

add_filter( 'acf/post_type/registration_args', function( $args, $post_type ) {

    if ( isset( $post_type['breadcrumb_parent_page'] ) ) {
        $args['breadcrumb_parent_page'] = $post_type['breadcrumb_parent_page'];
    }

    return $args;
}, 10, 2 );
