<?php
add_filter( 'comment_form_defaults', 'wpse33039_form_defaults' );
function wpse33039_form_defaults( $defaults )
{
    $defaults['title_reply'] = '';
    return $defaults;
}