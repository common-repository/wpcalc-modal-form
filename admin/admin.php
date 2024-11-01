<?php


class Wpcalc_Modal_Form_Admin {

	private $plugin_name;
	
	private $version;


	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

    

	public function enqueue_styles() {


		wp_enqueue_style( 'admin-style-wpcalcmf', plugin_dir_url( __FILE__ ) . 'css/style.css', array(), $this->version, 'all' );
		wp_enqueue_style('wp-color-picker');

	}

	public function enqueue_scripts() {

		wp_enqueue_script( 'admin-script-wpcalcmf', plugin_dir_url( __FILE__ ) . 'js/script.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script('wp-color-picker');

	}
	

    public function add_admin_wpcalc_modal_form() {
        add_menu_page( 'Wpcalc Modal Form', 'Modal Window', 'edit_pages', 'modal_wpmf', array($this, 'wpmf_windows'),'dashicons-admin-page', null);
		add_submenu_page('modal_wpmf', 'Page form', 'Page form', 'edit_pages', 'wpmf_page', array($this, 'wpmf_page'));
		add_submenu_page('modal_wpmf', 'Corner form', 'Corner form', 'edit_pages', 'wpmf_corner', array($this, 'wpmf_corner'));
		add_submenu_page('modal_wpmf', 'Email settings', 'Settings e-mail', 'edit_pages', 'wpmf_e_mail', array($this, 'wpmf_e_mail'));
		add_submenu_page('modal_wpmf', 'Marketing WP', 'Marketing WP', 'edit_pages', 'wpmf_plugins', array($this, 'wpmf_plugins'));
    }
	
	public function wpmf_windows() { 
	global $typewpmf;
	$typewpmf = 'modal';
	include_once( 'partials/general.php' );
	}
	
	public function wpmf_e_mail() { 
	global $typewpmf;
	$typewpmf = 'modal';
	include_once( 'partials/mail.php' );
	}
	public function wpmf_plugins() { 
	global $typewpmf;
	$typewpmf = 'modal';
	include_once( 'partials/marketing-wp.php' );
	}
	public function wpmf_page() { 
	global $typewpmf;
	$typewpmf = 'modal';
	include_once( 'partials/page.php' );
	}
	
	public function wpmf_corner() { 
	global $typewpmf;
	$typewpmf = 'modal';
	include_once( 'partials/corner.php' );
	}
	
	function wpmf_admin_rate_us( $footer_text ) {
	global $typewpmf;
	if ( $typewpmf = 'modal' ) {
		$rate_text = sprintf( '<span id="footer-thankyou">Wpcalc Modal Form developed by <a href="http://dayes.co/" target="_blank">Dayes</a> | <a href="http://wpcalc.com/" target="_blank">WPcalc.com</a>'
		);

		return str_replace( '</span>', '', $footer_text ) . ' | ' . $rate_text . '</span>';
	} else {
		return $footer_text;
	}
	}


    public function add_action_links( $links ) {
        $settings_link = array(
            '<a href="' . admin_url( 'options-general.php?page=modal_wpmf') . '">' . __('Settings', 'wpcalc-modal-form') . '</a>',
        );
        return array_merge(  $settings_link, $links );

    }


   
	
}