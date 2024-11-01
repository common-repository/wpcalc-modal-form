<?php
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;		
		delete_option('wpcmf_g');
		delete_option('wpcmf_m');
		delete_option('wpcmf_f');
		delete_option('wpcmf_p');
		delete_option('wpcmf_c');
}