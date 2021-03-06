<?php
/* ******** contact form 7 ***********/

// allow shortcodes in contact form 7....
add_filter( 'wpcf7_form_elements', 'mycustom_wpcf7_form_elements' );

function mycustom_wpcf7_form_elements( $form ) {
	$form = do_shortcode( $form );

	return $form;
}

// allow radio groups to be unfilled / not required by default
remove_filter( 'wpcf7_validate_radio', 'wpcf7_checkbox_validation_filter', 10 );
