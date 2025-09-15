<?php
//Extends Meta Fields Block Plugin
add_filter( 'meta_field_block_get_acf_field', function ( $block_content, $post_id, $field, $raw_value ) {
    if($field['type'] == 'file'){
        $image = wp_get_attachment_image($field['value']['id'],"medium",true,array('alt'=>"Open document"));
        $block_content =  $image . '
        <a href="' . $field['value']['url'] . '">View File</a>';
    }
    return $block_content;
  }, 10, 4);