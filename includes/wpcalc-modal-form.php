<?php


class Wpcalc_Modal_Form {


	protected $loader;

	protected $plugin_name;

	protected $version;

	public function __construct() {

		$this->plugin_name = 'wpcalc-modal-form';
		$this->version = '1.2';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}


	private function load_dependencies() {

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/loader.php';


		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/i18n.php';


		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/admin.php';


		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/public.php';


		$this->loader = new Wpcalc_Modal_Form_Loader();

	}


	private function set_locale() {

		$plugin_i18n = new Wpcalc_Modal_Form_i18n();
		$plugin_i18n->set_domain( $this->get_plugin_name() );

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}


	private function define_admin_hooks() {

		$plugin_admin = new Wpcalc_Modal_Form_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
		$this->loader->add_action( 'admin_menu', $plugin_admin, 'add_admin_wpcalc_modal_form' );		
		$plugin_basename = plugin_basename( plugin_dir_path( __DIR__ ) . $this->plugin_name . '.php' );
		$this->loader->add_filter( 'plugin_action_links_' . $plugin_basename, $plugin_admin, 'add_action_links' );
		$this->loader->add_filter( 'admin_footer_text', $plugin_admin, 'wpmf_admin_rate_us' );

	}

	private function define_public_hooks() {

		$options_m = get_option('wpcmf_m');
		$options_f = get_option('wpcmf_f');

		$plugin_public = new Wpcalc_Modal_Form_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
		$this->loader->add_action( 'wp_head', $plugin_public, 'wpcmf_mask' );
		$this->loader->add_action( 'wp_footer', $plugin_public, 'wpcmf_modal_display' );
		
		if($options_m['modal_open'] == 1){
			$this->loader->add_action( 'wp_head', $plugin_public, 'cookie_scripts' );
		}		
			
		if($options_f['include'] == 1){
		$this->loader->add_action( 'wp_head', $plugin_public, 'wpcmf_feed_style' );
		$this->loader->add_action( 'wp_footer', $plugin_public, 'file_wpcalc_feedback_form' );
		}
		
		if($options_m['include'] == 1){
			$this->loader->add_action( 'wp_head', $plugin_public, 'wpcmf_modal_style' );
		$this->loader->add_action( 'wp_footer', $plugin_public, 'file_wpcalc_modal_form' );
		}		
			
			
	}

	public function run() {
		$this->loader->run();
	}

	public function get_plugin_name() {
		return $this->plugin_name;
	}

	public function get_loader() {
		return $this->loader;
	}


	public function get_version() {
		return $this->version;
	}

}