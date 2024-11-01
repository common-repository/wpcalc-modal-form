<?php

$options = get_option('wpcmf_p');		
		$page = '';
		$page .= '<noindex>';		
		$page .= '<div class="wpcmf" id="wpcmf_page">';		
		if ($options[title_display] == 1)
			$page .= '<h2>'.$options['title'].'</h2>';
		if ($options[text_display] == 1)
			$page .= do_shortcode($options['text']);
		$page .= '<div id="result_wpcmf_page"></div>';				
		if ($options[name_display] == 1)
			$page .= '<input class="name" type="text" placeholder="'.$options['name'].'">';
		if ($options[email_display] == 1)
			$page .= '<input class="email" type="text" placeholder="'.$options['email'].'">';
		if ($options[phone_display] == 1)
			$page .= '<input class="phone" type="text" placeholder="'.$options['phone'].'">';
		if ($options[textarea_display] == 1)
			$page .= '<textarea class="textarea" placeholder="'.$options['textarea'].'"></textarea>';
		$page .= '<input type="hidden" name="message" class="message" value="">';
		$page .= '<input type="button" onclick="wpcmf(1);" value="'.$options[button_send].'">';
		$page .= '</div>';
		$page .= '</noindex>';		
		echo $page;
?>