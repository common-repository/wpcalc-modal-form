<?php
        $options = get_option('wpcmf_f');
		$corner = '';
		$corner .= '<noindex>';
		$corner .= '<div id="wpcalcfeed"><div class="wpcmffeed wpcmffeedsize"><div class="wpcmffeedButton" style="margin-top: -'.$options['padding'].'px">';	
		$corner .= '<input  type="button"  style="background: '.$options['button_color'].'" value="'.$options['button'].'">';
		$corner .= '</div>';		
		$corner .= '<div class="wpcmf">';		
		if ($options[title_display] == 1)
			$corner .= '<h2>'.$options['title'].'</h2>';
		if ($options[text_display] == 1)
			$corner .= do_shortcode($options['text']);
		$corner .= '<div id="result_wpcalcfeed"></div><div style="padding: 0px '.$options['padding_form'].'px;">';		
		if ($options[name_display] == 1)
			$corner .= '<input class="name" type="text" placeholder="'.$options['name'].'">';
		if ($options[email_display] == 1)
			$corner .= '<input class="email" type="text" placeholder="'.$options['email'].'">';
		if ($options[phone_display] == 1)
			$corner .= '<input class="phone" type="text" placeholder="'.$options['phone'].'">';
		if ($options[textarea_display] == 1)
			$corner .= '<textarea class="textarea" placeholder="'.$options['textarea'].'"></textarea>';
		$corner .= '<input type="hidden" name="message" class="message" value="">';
		$corner .= '<input type="button" onclick="wpcmf(2);" value="'.$options[button_send].'">';
		$corner .= '</div></div>';
		$corner .= '</div>';
		$corner .= '</div>';
		$corner .= '</noindex>';		
		echo $corner;  
?>