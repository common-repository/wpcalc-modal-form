<?php

class Wpcalc_Modal_Form_Deactivator {

	public static function deactivate() {
	    delete_option('wpcmf_g');
		delete_option('wpcmf_m');
		delete_option('wpcmf_f');
		delete_option('wpcmf_p');
		delete_option('wpcmf_c');
	}

}