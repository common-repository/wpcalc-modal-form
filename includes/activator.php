<?php

class Wpcalc_Modal_Form_Activator {

	public static function activate() {
		$wpcmf_g = array(
		'maskphone' => '+9 (999) 999-99-99',		
		'thank' => 'Thank you. We will contact you shortly',
		'colorthank' => '#a03717',
		'sizethank' => '18',
		'timer' => '3',
		'sendmail' => 'admin@example.com',
		'subject' => 'Letter from the site',
		'name' => 'Name',
		'mail' => 'E-mail',
		'phone' => 'Phone',
		'review' => 'Review',
		'errcolor' => '#a03717',
		'errreview' => 'Write a Review',
		'errname' => 'Enter Name',
		'errmail' => 'Enter e-mail',
		'errphone' => 'Enter phone',
		'errreview_required' => '1',
		'errname_required' => '1',
		'errmail_required' => '1',
		'errphone_required' => '1'		
		);
		add_option('wpcmf_g', $wpcmf_g);
		
		$wpcmf_m = array(
		'include' => '0',		
		'button_send' => 'To send',
		'button_send_display' => '1',
		'button' => 'Feedback',
		'button_display' => '1',
		'button_position' => 'wpcalcmf_botton_right',
		'button_color' => '#404040',
		'title_display' => '1',
		'title' => 'Feedback form',
		'text_display' => '1',
		'text' => 'Write to us and we will contact you shortly',
		'textarea_display' => '1',
		'textarea' => 'Write a Review',
		'name_display' => '1',
		'name' => 'your name',
		'email_display' => '1',
		'email' => 'mail@example.org',
		'phone_display' => '1',
		'phone' => 'your phone',
		'open_wpcmodal' => '5',
		'cookie_day' => '1',
		'max_width' => '440',
		'color' => '#555555',
		'padding' => '10',
		'border' => '1',
		'border_color' => '#383838',
		'background_color' => '#ffffff',
		'padding_form' => '0'
		
		
		);
		add_option('wpcmf_m', $wpcmf_m);
		
		$wpcmf_f = array(
		'include' => '0',
		'width' => '400',
		'height' => '400',
		'button_send' => 'To send',
		'button' => 'Feedback',		
		'button_color' => '#404040',
		'title_display' => '1',
		'title' => 'Feedback form',
		'text_display' => '1',
		'text' => 'Write to us and we will contact you shortly',
		'textarea_display' => '1',
		'textarea' => 'Write a Review',
		'name_display' => '1',
		'name' => 'your name',
		'email_display' => '1',
		'email' => 'mail@example.org',
		'phone_display' => '1',
		'phone' => 'your phone',
		'color' => '#555555',
		'padding' => '10',
		'border' => '1',
		'border_color' => '#383838',
		'background_color' => '#ffffff',
		'padding_form' => '0',
		'margin_left' => '150',
		'margin_top' => '45',
		
		);
		add_option('wpcmf_f', $wpcmf_f);
		
		$wpcmf_c = array(
		'button_send' => 'To send',
		'title_display' => '1',		
		'title' => 'Calc form',
		'text_display' => '1',
		'text' => 'Write to us and we will contact you shortly',
		'textarea_display' => '1',
		'textarea' => 'Write a Review',
		'name_display' => '1',
		'name' => 'your name',
		'email_display' => '1',
		'email' => 'mail@example.org',
		'phone_display' => '1',
		'phone' => 'your phone'	
		
		);
		add_option('wpcmf_c', $wpcmf_c);
		
		$wpcmf_p = array(
		'button_send' => 'To send',
		'title_display' => '1',		
		'title' => 'Page form',
		'text_display' => '1',
		'text' => 'Write to us and we will contact you shortly',
		'textarea_display' => '1',
		'textarea' => 'Write a Review',
		'name_display' => '1',
		'name' => 'your name',
		'email_display' => '1',
		'email' => 'mail@example.org',
		'phone_display' => '1',
		'phone' => 'your phone'	
		
		);
		add_option('wpcmf_p', $wpcmf_p);
		
	
	}

}