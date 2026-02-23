
<?php


add_filter( 'breadcrumb_block_get_breadcrumb_trail', function ( $markup, $args, $breadcrumbs_instance ) {
  
	$mobile_title = 'Back to Home';
	$mobile_url = get_home_url();

    $markup = '<div class="breadcrumb_desktop wb-desktop-only">'. $markup . '</div>';

	if ( is_page() ) {
        global $post;

        if ( $post->post_parent ) {

            $parent_id    = $post->post_parent;
            $mobile_url  = get_permalink( $parent_id );
            $mobile_title = 'Back to ' . get_the_title( $parent_id );
        }
    }

	$back_svg = '<span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
	<mask id="mask0_1322_7753" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
	<rect width="20" height="20" fill="#D9D9D9"/>
	</mask>
	<g mask="url(#mask0_1322_7753)">
	<path d="M6.49833 10.5417L10.766 14.8094L10 15.5833L4.41667 10L10 4.41666L10.766 5.19062L6.49833 9.45833H15.5833V10.5417H6.49833Z" fill="#0A0A0A"/>
	</g>
	</svg></span>';


	$mobile_link = '<a href="' . esc_url( $mobile_url ) . '"> ' . esc_html( $mobile_title ) . '</a>';
	$markup = $markup . '<div class="breadcrumb_mobile wb-mobile-only">'. $back_svg . $mobile_link . '</div>';
	return $markup;
}, 10, 3 );


add_filter( 'breadcrumb_block_get_args', function ( $args ) {
    // For example, change separator.
    $args['separator'] = '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
    <mask id="mask0_1125_14993" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
    <rect width="20" height="20" fill="#D9D9D9"/>
    </mask>
    <g mask="url(#mask0_1125_14993)">
    <path d="M11.1635 10L7.22604 6.0625L8 5.28854L12.7115 10L8 14.7115L7.22604 13.9375L11.1635 10Z" fill="#0A0A0A"/>
    </g>
    </svg>
    ';
    return $args;
} );

add_action( 'breadcrumb_block_single_prepend', function ( $post, $breadcrumbs_instance ) {
    if ( 'page' != $post->post_type ) {

        // $breadcrumbs_instance->add_item( "test", "https://test.gov.uk/");
        
    }
}, 10, 2 );