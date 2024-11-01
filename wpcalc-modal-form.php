<?php

/**
 * @link              http://wpcalc.com/en/about-plugin/
 * @since             3.1
 * @package           Wpcalc_Modal_Form
 *
 * @wordpress-plugin
 * Plugin Name:       Wpcalc Modal Form
 * Plugin URI:        http://wpcalc.com/en/about-plugin/
 * Description:       Wpcalc Modal Form a simple plug for modal window. Easy configuration fields, messages and style of the contact form.
 * Version:           3.2
 * Author:            Dayes
 * Author URI:        http://codecanyon.net/user/dayesdesign
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpcalc-modal-form
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

function activate_wpcalc_modal_form() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/activator.php';
	Wpcalc_Modal_Form_Activator::activate();
}

function deactivate_wpcalc_modal_form() {	
	require_once plugin_dir_path( __FILE__ ) . 'includes/deactivator.php';
	Wpcalc_Modal_Form_Deactivator::deactivate();
}


register_activation_hook( __FILE__, 'activate_wpcalc_modal_form' );

register_deactivation_hook( __FILE__, 'deactivate_wpcalc_modal_form' );

require plugin_dir_path( __FILE__ ) . 'includes/wpcalc-modal-form.php';

require plugin_dir_path( __FILE__ ) . 'includes/sendmail.php';

function run_wpcalc_modal_form() {

	$plugin = new Wpcalc_Modal_Form();
	$plugin->run();

}
run_wpcalc_modal_form();