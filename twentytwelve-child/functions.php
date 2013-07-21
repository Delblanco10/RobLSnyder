<?php
add_filter( 'comment_form_defaults', 'wpse33039_form_defaults' );
function wpse33039_form_defaults( $defaults )
{
    $defaults['title_reply'] = '';
    return $defaults;
}
// This changes the "Powered by Wordpress" footer to read my own personal copywrite statement. //

// Remove old  text
add_action( 'init' , 'mh_remove_copy' );
function mh_remove_copy() {
	remove_action( 'attitude_footer' , 'attitude_footer_info ', 25 );
}

// Add my own copyright text
add_action( 'attitude_footer' , 'mh_footer_info' , 25 );
function mh_footer_info() {
   $output = '<div class="copyright">'.'Copyright © [the-year] [site-link] Powered by: SUPER MARTIANS FROM MARS! '.'</div><!-- .copyright -->';
   echo do_shortcode( $output );
}