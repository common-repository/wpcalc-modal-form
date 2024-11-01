<script>
jQuery(document).ready(function($) {
	$('.postbox').children('h3, .handlediv').click(function(){ $(this).siblings('.inside').toggle();});	
	$('.wp-color-picker-field').wpColorPicker();	
});
</script>

<?php
$settings = array(
    'textarea_name' => 'wpcmf_m[text]',
	'textarea_rows' => '10',
	'wpautop' => 0,
    'media_buttons' => true,
    'tinymce' => array(
        'theme_advanced_buttons1' => 'formatselect,|,bold,italic,underline,|,' .
        'bullist,blockquote,|,justifyleft,justifycenter' .
        ',justifyright,justifyfull,|,link,unlink,|' .
        ',spellchecker,wp_fullscreen,wp_adv'
    )
);
?>


<form method="post" name="general_options" action="options.php">
<?php wp_nonce_field('update-options'); ?>
<?php $wpcmf_g = get_option('wpcmf_g'); ?> 
<?php $wpcmf_m = get_option('wpcmf_m'); ?>

<div class="metabox-holder">
<div class="meta-box-sortables">
<h2>Modal Window</h2>

<h4>Get <a href="http://codecanyon.net/item/ultimate-modal-windows/15871235?s_rank=2" target="_blank">Ultimate Modal Windows</a> version to enable more features. Follower us on <a href="http://codecanyon.net/user/dayesdesign/portfolio" target="_blank">Codecanyon</a>.</h4>

<div class="postbox">
<div class="inside smw-admin" style="display: block;">	
<div class="smw-admin-col">
<div class="smw-admin-col-3">
<?php esc_attr_e("Include form", "wpcalc-modal-form") ?> <input name="wpcmf_m[include]" type="checkbox" value="1" <?php if($wpcmf_m['include']=='1') { echo 'checked="checked"'; } ?>>
</div>

<div class="smw-admin-col-3"><?php esc_attr_e("Text buttons", "wpcalc-modal-form") ?> <input name="wpcmf_m[button_display]" type="checkbox" value="1" <?php if($wpcmf_m['button_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>">:<br/>
<input type="text" name="wpcmf_m[button]" value="<?php echo sanitize_text_field ( $wpcmf_m['button'] ); ?>" /></div>
<div class="smw-admin-col-3">
<select name="wpcmf_m[button_position]">
<option value="wpcalcmf_botton_right" <?php if($wpcmf_m['button_position']=='wpcalcmf_botton_right') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Right", "wpcalc-modal-form") ?></option>
<option value="wpcalcmf_botton_left" <?php if($wpcmf_m['button_position']=='wpcalcmf_botton_left') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Left", "wpcalc-modal-form") ?></option>
<option value="wpcalcmf_botton_top" <?php if($wpcmf_m['button_position']=='wpcalcmf_botton_top') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Top", "wpcalc-modal-form") ?></option>
<option value="wpcalcmf_botton_bottom" <?php if($wpcmf_m['button_position']=='wpcalcmf_botton_bottom') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Bottom", "wpcalc-modal-form") ?></option></select>
</div>

<div class="smw-admin-col-3"><?php esc_attr_e("Color button", "wpcalc-modal-form") ?>:<br/>
	<input type='text' placeholder="#ffffff" class="wp-color-picker-field" name='wpcmf_m[button_color]' value="<?php if(empty($wpcmf_m[button_color])){echo "#ffffff";}else{echo $wpcmf_m[border_color];}?>"/></div>
	
	
</div>
</div>
</div>

<div class="postbox">
    <div title="Open/close" class="handlediv"></div>
    <h3 class="adminblock"><?php esc_attr_e("The text over form", "wpcalc-modal-form") ?> <input name="wpcmf_m[text_display]" type="checkbox" value="1" <?php if($wpcmf_m['text_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>"></h3>
    <div class="inside smw-admin" style="display: block;">		
	<?php echo wp_editor(stripslashes($wpcmf_m[text]), 'content', $settings); ?>	
</div>
</div>


<div class="postbox">
    <div title="Open/close" class="handlediv"></div>
    <h3 class="adminblock"><?php esc_attr_e("Style of modal window", "wpcalc-modal-form") ?></h3>
    <div class="inside smw-admin" style="display: block;">	
	<div class="smw-admin-col">	
	<div class="smw-admin-col-3"><?php esc_attr_e("Width", "wpcalc-modal-form") ?>:<br/><input type="number" name="wpcmf_m[max_width]" value="<?php echo sanitize_text_field ( $wpcmf_m['max_width'] ); ?>" /> px</div>
	<div class="smw-admin-col-3"><?php esc_attr_e("Color", "wpcalc-modal-form") ?>:<br/><input type='text' placeholder="#ffffff" class="wp-color-picker-field" name='wpcmf_m[color]' value="<?php if(empty($wpcmf_m[color])){echo "#ffffff";}else{echo $wpcmf_m[color];}?>"/></div>
	<div class="smw-admin-col-3"><?php esc_attr_e("Padding", "wpcalc-modal-form") ?>:<br/><input type="number" name="wpcmf_m[padding]" value="<?php echo sanitize_text_field ( $wpcmf_m['padding'] ); ?>" /> px</div>
	<div class="smw-admin-col-3"><?php esc_attr_e("Border", "wpcalc-modal-form") ?>:<br/><input type="number" name="wpcmf_m[border]" value="<?php echo sanitize_text_field ( $wpcmf_m['border'] ); ?>" /> px</div>
	</div>		
	<div class="smw-admin-col">	
	<div class="smw-admin-col-3"><?php esc_attr_e("Border color", "wpcalc-modal-form") ?>:<br/> <input type='text' placeholder="#ffffff" class="wp-color-picker-field" name='wpcmf_m[border_color]' value="<?php if(empty($wpcmf_m[border_color])){echo "#ffffff";}else{echo $wpcmf_m[border_color];}?>"/></div>
	<div class="smw-admin-col-3"><?php esc_attr_e("Background color", "wpcalc-modal-form") ?>:<br/> <input type='text' placeholder="#ffffff" class="wp-color-picker-field" name='wpcmf_m[background_color]' value="<?php if(empty($wpcmf_m[background_color])){echo "#ffffff";}else{echo $wpcmf_m[background_color];}?>"/></div>
	<div class="smw-admin-col-3"><?php esc_attr_e("Padding Form", "wpcalc-modal-form") ?> :<br/><input type="number" name="wpcmf_m[padding_form]" value="<?php echo sanitize_text_field ( $wpcmf_m['padding_form'] ); ?>" /> px</div>
	<div class="smw-admin-col-3"></div>
	</div>

</div>
</div>

<div class="postbox">
    <div title="Open/close" class="handlediv"></div>
    <h3 class="adminblock"><?php esc_attr_e("Setting the appearance of a modal window", "wpcalc-modal-form") ?></h3>
    <div class="inside smw-admin" style="display: block;">		
	<div class="smw-admin-col">	
	<div class="smw-admin-col-3"><?php esc_attr_e("Show modal window", "wpcalc-modal-form") ?> <input name="wpcmf_m[modal_open]" type="checkbox" value="1" <?php if($wpcmf_m['modal_open']=='1') { echo 'checked="checked"'; } ?>></div>
	<div class="smw-admin-col-3"><?php esc_attr_e("While loading", "wpcalc-modal-form") ?> <input name="wpcmf_m[modal_display]" type="radio" value="1" <?php if($wpcmf_m['modal_display']=='1') { echo 'checked="checked"'; } ?>></div>
	<div class="smw-admin-col-3"><?php esc_attr_e("When scroll the window", "wpcalc-modal-form") ?> <input name="wpcmf_m[modal_display]" type="radio" value="2" <?php if($wpcmf_m['modal_display']=='2') { echo 'checked="checked"'; } ?>></div>
	<div class="smw-admin-col-3"><?php esc_attr_e("When you close the window", "wpcalc-modal-form") ?> <input name="wpcmf_m[modal_display]" type="radio" value="3" <?php if($wpcmf_m['modal_display']=='3') { echo 'checked="checked"'; } ?> ></div>
	</div>		
	<div class="smw-admin-col">	
	<div class="smw-admin-col-3"><?php esc_attr_e("Cookies days ", "wpcalc-modal-form") ?>:<br/> <input type="number" name="wpcmf_m[cookie_day]" value="<?php echo sanitize_text_field ( $wpcmf_m['cookie_day'] ); ?>" /></div>
	<div class="smw-admin-col-3"><?php esc_attr_e("Timer", "wpcalc-modal-form") ?>:<br/> <input type="number" name="wpcmf_m[open_wpcmodal]" value="<?php echo sanitize_text_field ( $wpcmf_m['open_wpcmodal'] ); ?>" /><?php esc_attr_e("seconds", "wpcalc-modal-form") ?></div>
	<div class="smw-admin-col-3"></div>
	<div class="smw-admin-col-3"></div>
	</div>
</div>
</div>

<div class="postbox">
    <div title="Open/close" class="handlediv"></div>
    <h3 class="adminblock"><?php esc_attr_e("Configure form fields in a modal window", "wpcalc-modal-form") ?></h3>
    <div class="inside smw-admin" style="display: block;">		
	<div class="smw-admin-col">	
	<div class="smw-admin-col-3"><?php esc_attr_e("Title text", "wpcalc-modal-form") ?> <input name="wpcmf_m[title_display]" type="checkbox" value="1" <?php if($wpcmf_m['title_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>">:<br/>
<input type="text" name="wpcmf_m[title]" value="<?php echo sanitize_text_field ( $wpcmf_m['title']); ?>"></div>
	<div class="smw-admin-col-3"><?php esc_attr_e("Field comments", "wpcalc-modal-form") ?> <input name="wpcmf_m[textarea_display]" type="checkbox" value="1" <?php if($wpcmf_m['textarea_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>">:<br/>
<input type="text" name="wpcmf_m[textarea]" value="<?php echo esc_textarea( $wpcmf_m['textarea'] ); ?>"></div>
	<div class="smw-admin-col-3"><?php esc_attr_e("Field name", "wpcalc-modal-form") ?> <input name="wpcmf_m[name_display]" type="checkbox" value="1" <?php if($wpcmf_m['name_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>">:<br/>
<input type="text" name="wpcmf_m[name]"  value="<?php echo sanitize_text_field ( $wpcmf_m['name'] ); ?>" /></div>
	<div class="smw-admin-col-3"><?php esc_attr_e("Field e-mail", "wpcalc-modal-form") ?> <input name="wpcmf_m[email_display]" type="checkbox" value="1" <?php if($wpcmf_m['email_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>">:<br/>
<input type="text" name="wpcmf_m[email]" value="<?php echo sanitize_text_field ( $wpcmf_m['email'] ); ?>" /></div>
	</div>	
	<div class="smw-admin-col">	
	<div class="smw-admin-col-3"><?php esc_attr_e("Field phone", "wpcalc-modal-form") ?> <input name="wpcmf_m[phone_display]" type="checkbox" value="1" <?php if($wpcmf_m['phone_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>">:<br/>
<input type="text" name="wpcmf_m[phone]" value="<?php echo sanitize_text_field ( $wpcmf_m['phone'] ); ?>" /></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Mask phone", "wpcalc-modal-form") ?>:<br/>
<input type="text" name="wpcmf_g[maskphone]" value="<?php echo sanitize_text_field ( $wpcmf_g['maskphone'] ); ?>" /></div>

	<div class="smw-admin-col-3"><?php esc_attr_e("Text To send", "wpcalc-modal-form") ?> <input name="wpcmf_m[button_send_display]" type="checkbox" value="1" <?php if($wpcmf_m['button_send_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>">:<br/>
<input type="text" name="wpcmf_m[button_send]" value="<?php echo sanitize_text_field ( $wpcmf_m['button_send'] ); ?>" /></div>
	
	
	<div class="smw-admin-col-3"></div>
	</div>	
	
</div>
</div>


<div class="postbox">
    <div title="Open/close" class="handlediv"></div>
    <h3 class="adminblock"><?php esc_attr_e("Setting alarm text", "wpcalc-modal-form") ?></h3>
    <div class="inside smw-admin" style="display: block;">		
	
	<div class="smw-admin-col">	
	<div class="smw-admin-col-3"><?php esc_attr_e("Color error", "wpcalc-modal-form") ?>:<br/> <input type='text' placeholder="#ffffff" class="wp-color-picker-field" name='wpcmf_g[errcolor]' value="<?php if(empty($wpcmf_m[background_color])){echo "#ffffff";}else{echo $wpcmf_g[errcolor];}?>"/></div>
	<div class="smw-admin-col-3"><?php esc_attr_e("Filled review", "wpcalc-modal-form") ?>:<br/> <?php esc_attr_e("Required rule", "wpcalc-modal-form") ?> <input name="wpcmf_g[errreview_required]" type="checkbox" value="1" <?php if($wpcmf_g['errreview_required']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Enable/disable", "wpcalc-modal-form") ?>"><br/> <input type="text" name="wpcmf_g[errreview]" value="<?php echo sanitize_text_field ( $wpcmf_g['errreview']); ?>" /></div>
	<div class="smw-admin-col-3"><?php esc_attr_e("Not Specified name", "wpcalc-modal-form") ?>: <br/><?php esc_attr_e("Required rule", "wpcalc-modal-form") ?> <input name="wpcmf_g[errname_required]" type="checkbox" value="1" <?php if($wpcmf_g['errname_required']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Enable/disable", "wpcalc-modal-form") ?>"><br/> <input type="text" name="wpcmf_g[errname]" value="<?php echo sanitize_text_field ( $wpcmf_g['errname']); ?>" /> </div>
	<div class="smw-admin-col-3"><span><?php esc_attr_e("Not Specified Email", "wpcalc-modal-form") ?>: <br/><?php esc_attr_e("Required rule", "wpcalc-modal-form") ?> <input name="wpcmf_g[errmail_required]" type="checkbox" value="1" <?php if($wpcmf_g['errmail_required']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Enable/disable", "wpcalc-modal-form") ?>"><br/> <input type="text" name="wpcmf_g[errmail]" value="<?php echo sanitize_text_field ( $wpcmf_g['errmail']); ?>" /></div>
	</div>
	
	<div class="smw-admin-col">	
	<div class="smw-admin-col-3"><?php esc_attr_e("Unknown phone", "wpcalc-modal-form") ?>:<br/><?php esc_attr_e("Required rule", "wpcalc-modal-form") ?> <input name="wpcmf_g[errphone_required]" type="checkbox" value="1" <?php if($wpcmf_g['errphone_required']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Enable/disable", "wpcalc-modal-form") ?>"> <input type="text" name="wpcmf_g[errphone]" value="<?php echo sanitize_text_field ( $wpcmf_g['errphone']); ?>" /></div>
	<div class="smw-admin-col-3"></div>
	<div class="smw-admin-col-3"></div>
	<div class="smw-admin-col-3"></div>
	</div>
		
</div>
</div>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="wpcmf_g,wpcmf_m" />
<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
</form>
	





</div>
</div>
