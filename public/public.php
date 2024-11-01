<?php

class Wpcalc_Modal_Form_Public {

	private $plugin_name;
	private $version;

	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	public function enqueue_styles() {


		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/style.css', array(), $this->version, 'all' );

	}

	public function enqueue_scripts() {
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/send.js', array( 'jquery' ), $this->version, false );
		wp_localize_script( $this->plugin_name, 'wpcal_modal_Ajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );		
		wp_enqueue_script( 'mask-'.$this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/maskinput.js', array( 'jquery' ), $this->version, false );	
	}
	
	public function wpcmf_mask() { 
	$options = get_option('wpcmf_g');
	?>
	<script type="text/javascript">
	jQuery(function($){
		$(".phone").mask("<?php echo $options['maskphone']; ?>");			
	});
	</script> <?php
	}
	
	public function cookie_scripts() {
		wp_enqueue_script( 'cookie-'.$this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/jquery.cookie.js', array( 'jquery' ), $this->version, false );
	}
	
	public function wpcmf_modal_display() { 
	$options = get_option('wpcmf_m');
	if ($options['modal_open'] == 1){
		if ($options['modal_display'] == 1){						
			?>
			<script type="text/javascript">
			jQuery(function($){				
				if(jQuery.cookie("wpcmfhide")){				
				}
			else {
				var open_wpcmodal = <?php echo $options['open_wpcmodal']*1000; ?>;
				setTimeout(function(){
					jQuery('.overlaywpcalcmf').fadeIn(400,
					function(){
						jQuery('.wpcalcmf') 
						.css('display', 'block')
						.animate({opacity: 1, top: '10%'}, 400);
						});	
						jQuery('html, body').css('overflow', 'hidden');
					} , open_wpcmodal);				
				jQuery.cookie("wpcmfhide", "wpcvisited", {expires: <?php echo $options['cookie_day']; ?>});
				
			}			
			});
			</script> <?php
		}
		if ($options['modal_display'] == 2){						
			?>
			<script type="text/javascript">
			jQuery(function($){				
				if(jQuery.cookie("wpcmfhide")){				
				}
			else {
				jQuery(window).bind('scroll.once', function(){
					show_wpc_modal();
					});
				function show_wpc_modal() {
					var open_wpcmodal = <?php echo $options['open_wpcmodal']*1000; ?>;
					setTimeout(function(){
						jQuery('.overlaywpcalcmf').fadeIn(400,
						function(){
						jQuery('.wpcalcmf') 
						.css('display', 'block')
						.animate({opacity: 1, top: '10%'}, 400);
						});
						jQuery('html, body').css('overflow', 'hidden');
					} , open_wpcmodal);					
					jQuery.cookie("wpcmfhide", "wpcvisited", {expires: <?php echo $options['cookie_day']; ?>});
					jQuery(window).unbind('scroll.once');
					
					};
					
				}			
			});
			</script> <?php
		}
		if ($options['modal_display'] == 3){						
			?>
			<script type="text/javascript">
			jQuery(function($){
				control = 0;
				
				if(jQuery.cookie("wpcmfhide")){				
				}
			else {				
				jQuery(document).bind('mousemove', function(e) {
				    if (e.pageY > 5){
						control = 1;
					}
					if( e.pageY <= 5 && control ==1) {
						show_wpc_modal()
						}
					});
				function show_wpc_modal() {					
					var open_wpcmodal = <?php echo $options['open_wpcmodal']*1000; ?>;
					setTimeout(function(){
						jQuery('.overlaywpcalcmf').fadeIn(400,
						function(){
						jQuery('.wpcalcmf') 
						.css('display', 'block')
						.animate({opacity: 1, top: '10%'}, 400);
						});
						jQuery('html, body').css('overflow', 'hidden');
					} , open_wpcmodal);					
					jQuery.cookie("wpcmfhide", "wpcvisited", {expires: <?php echo $options['cookie_day']; ?>});
					jQuery(document).unbind('mousemove');
					
					};
				}		
			});
			</script> <?php
		}			 		
	}		
	}
	
	public function wpcmf_modal_style() { ?>
	<?php $options = get_option('wpcmf_m'); ?>
	<style type="text/css">
	.wpcmfsmodal  {
		max-width: <?php echo $options['max_width']; ?>px;
		color: <?php echo $options['color']; ?>;
		padding: <?php echo $options['padding']; ?>px;
		border: <?php echo $options['border']; ?>px solid <?php echo $options['border_color']; ?>;
		background-color: <?php echo $options['background_color']; ?>;
		 
	}
	
	</style><?php
	}
		
	
	public function wpcmf_feed_style() { ?>
	<?php $options = get_option('wpcmf_f'); ?>
	<style type="text/css">
	.wpcmffeedsize {
		width: <?php echo $options['width']; ?>px;
		height: <?php echo $options['height']; ?>px;
		margin-top : -<?php echo $options['margin_top']; ?>px;
		margin-left : -<?php echo $options['margin_left']; ?>px;
		color: <?php echo $options['color']; ?>;
		padding: <?php echo $options['padding']; ?>px;
		border: <?php echo $options['border']; ?>px solid <?php echo $options['border_color']; ?>;
		background-color: <?php echo $options['background_color']; ?>;
	}
	.wpcmffeedsize:hover {
		margin-left: -<?php echo $options['width']; ?>px;
		margin-top: -<?php echo $options['height']; ?>px;
	}
	
	</style><?php
	}
	
	public function file_wpcalc_modal_form() {		
      include_once( 'partials/modal.php' );
	
	}
	    

    public function file_wpcalc_feedback_form() {
		include_once( 'partials/feedback.php' );
	}

	
	public function shortcode_form_wpcmf() {		  
		ob_start();
		include_once( 'partials/page.php' );
		$output_string=ob_get_contents();
		ob_end_clean();  
		return $output_string;
		}
    
	}
	
	add_shortcode( 'wpcalcmf', array( 'Wpcalc_Modal_Form_Public', 'shortcode_form_wpcmf' ) );
	
	

