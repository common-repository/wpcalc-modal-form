<?php
		$options = get_option('wpcmf_m');		
		$modal = '';
		$modal .= '<noindex>';
		$modal .= '<div id="wpcalcmodal">';
		if ($options[button_display] == 1)
			$modal .= '<a href="#wpfeedback" class="wpcalcmf_link"><div class="wpcalcmf_botton '.$options['button_position'].'" style="background: '.$options['button_color'].'">'.$options['button'].'</div></a>';
		$modal .= '<div class="overlaywpcalcmf">';
		$modal .= '<div class="wpcalcmf wpcmfsmodal">';
		$modal .= '<div class="wpcmf">';		
		if ($options[title_display] == 1)
			$modal .= '<h2>'.$options['title'].'</h2>';
		if ($options[text_display] == 1)
			$modal .= do_shortcode($options['text']);
		$modal .= '<div id="result_wpcalcmodal"></div><div style="padding: 0px '.$options['padding_form'].'px;">';		
		if ($options[name_display] == 1)
			$modal .= '<input class="name" type="text" placeholder="'.$options['name'].'">';
		if ($options[email_display] == 1)
			$modal .= '<input class="email" type="text" placeholder="'.$options['email'].'">';
		if ($options[phone_display] == 1)
			$modal .= '<input class="phone" type="text" placeholder="'.$options['phone'].'">';
		if ($options[textarea_display] == 1)
			$modal .= '<textarea class="textarea" placeholder="'.$options['textarea'].'"></textarea>';
		$modal .= '<input type="hidden" name="message" class="message" value="">';
		if ($options[button_send_display] == 1)
			$modal .= '<input type="button" onclick="wpcmf(3);" value="'.$options[button_send].'">';
		$modal .= '</div></div>';				
		$modal .= '<span class="wpcalcmfclose"></span>';
		$modal .= '</div>';
		$modal .= '</div></div>';
		$modal .= '</noindex>';		
		echo $modal;  
?>