<?php
if( defined('DOING_AJAX') && DOING_AJAX ){
	add_action( 'wp_ajax_send_wpcalc_modal_form', 'send_wpcalc_modal_form' );
	add_action( 'wp_ajax_nopriv_send_wpcalc_modal_form', 'send_wpcalc_modal_form' );
}
function send_wpcalc_modal_form() {
	global $wpdb;
	if($_POST['wpcmf'] == 'error'){
		$options = get_option('wpcmf_g');
		wp_send_json( $options );
	}
	else {			
		$options = get_option('wpcmf_g');		
		$myemail = $options['sendmail'];
		$thank = $options['thank'];		
		$colorthank = $options['colorthank'];
		$sizethank = $options['sizethank'];		
		$mailtext = $options['subject'];
		$timer = $options['timer']*1000;
		$wpcmffieldname = $options['name'];
		$wpcmffieldmail = $options['mail'];
		$wpcmffieldphone = $options['phone'];
		$wpcmffieldtext = $options['review'];		
		$text= sanitize_text_field($_POST['textarea']);
		$name= sanitize_text_field($_POST['name']);
		$mail= sanitize_email($_POST['email']);
		$phone= sanitize_text_field($_POST['phone']);
		$contentcalc = sanitize_text_field($_POST['content_calc']);			
		$refreshpage = "";
		$date=date("d.m.Y"); 
		$time=date("H:i:s"); 
		$headers=null;
		$headers.="Content-Type: text/html; charset=utf-8\r\n";
		$headers.="From: ".$name." <".$mail.">\r\n";
		$headers.="X-Mailer: PHP/".phpversion()."\r\n";
		$allmsg="<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'><title></title>
		<style>BODY {FONT-FAMILY: verdana,arial,helvetica; FONT-SIZE: 14px;}</style></head>
		<body>
		$wpcmffieldname: $name
		<p/>
		$wpcmffieldmail: $mail
		<p/>
		$wpcmffieldphone: $phone
		<p/>
		$wpcmffieldtext: $text 
		<p/>
		$contentcalc		
		</body></html>";
		$primsg='<span style="color:'.$colorthank.';font-size:'.$sizethank.'px;">'.$thank.'</span>';		
		mail("$myemail", "$mailtext", $allmsg, $headers);
		print "<script language='Javascript'>function reload() {location = \"$refreshpage\"}; setTimeout('reload()', \"$timer\");</script>$primsg";
	}
	
	exit();
	}
?>