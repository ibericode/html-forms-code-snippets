<?php

// validate form request
add_filter( 'hf_validate_form', function( $error_code, $form, $data ) {
	if( $data['BEST_HAM'] !== 'iberico_ham' ) {
		$error_code = 'invalid_ham_choice'; 
	}

	return $error_code;
}, 10, 3 );

// register error message for our custom error code
add_filter( 'hf_form_message_invalid_ham_choice', function( $message ) {
    return 'Sorry, but iberico ham is really the best ham.';
});
