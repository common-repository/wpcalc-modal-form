<script>
jQuery(document).ready(function($) {
	$('.postbox').children('h3, .handlediv').click(function(){ $(this).siblings('.inside').toggle();});	
	$('.wp-color-picker-field').wpColorPicker();	
});
</script>

<?php
$settings = array(
    'textarea_name' => 'wpcmf_f[text]',
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
<?php $options = get_option('wpcmf_f'); ?> 

<div class="metabox-holder">
<div class="meta-box-sortables">
<h2>Corner form</h2>

<h4>Get <a href="http://codecanyon.net/item/ultimate-modal-windows/15871235?s_rank=2" target="_blank">Ultimate Modal Windows</a> version to enable more features. Follower us on <a href="http://codecanyon.net/user/dayesdesign/portfolio" target="_blank">Codecanyon</a>.</h4>

<div class="postbox">
<div class="inside smw-admin" style="display: block;">	

<div class="smw-admin-col">
<div class="smw-admin-col-3"><?php esc_attr_e("Include form", "wpcalc-modal-form") ?> <input name="wpcmf_f[include]" type="checkbox" value="1" <?php if($options['include']=='1') { echo 'checked="checked"'; } ?>></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Text buttons", "wpcalc-modal-form") ?>:<br/>
<input type="text" name="wpcmf_f[button]" value="<?php echo sanitize_text_field ( $options['button'] ); ?>" /></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Color button", "wpcalc-modal-form") ?>:<br/>
	<input type='text' placeholder="#ffffff" class="wp-color-picker-field" name='wpcmf_f[button_color]' value="<?php if(empty($options[button_color])){echo "#ffffff";}else{echo $options[button_color];}?>"/></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Text To send", "wpcalc-modal-form") ?>:<br/> <input type="text" name="wpcmf_f[button_send]" value="<?php echo sanitize_text_field ( $options['button_send'] ); ?>" /></div>	
</div>

</div>
</div>

<div class="postbox">
    <div title="Open/close" class="handlediv"></div>
    <h3 class="adminblock"><?php esc_attr_e("The text over form", "wpcalc-modal-form") ?> <input name="wpcmf_f[text_display]" type="checkbox" value="1" <?php if($options['text_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>"></h3>
    <div class="inside smw-admin" style="display: block;">		
	<?php echo wp_editor(stripslashes($options[text]), 'content', $settings); ?>	
</div>
</div>


<div class="postbox">
<h3><?php esc_attr_e("Configure form fields in a pop-up window", "wpcalc-modal-form") ?></h3>
<div class="inside smw-admin" style="display: block;">	

<div class="smw-admin-col">
<div class="smw-admin-col-3"><?php esc_attr_e("Title text", "wpcalc-modal-form") ?>: <input name="wpcmf_f[title_display]" type="checkbox" value="1" <?php if($options['title_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>"><br/>
<input type="text" name="wpcmf_f[title]" value="<?php echo sanitize_text_field ( $options['title']); ?>"></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Field comments", "wpcalc-modal-form") ?>: <input name="wpcmf_f[textarea_display]" type="checkbox" value="1" <?php if($options['textarea_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>"><br/>
<input type="text" name="wpcmf_f[textarea]" value="<?php echo sanitize_text_field ( $options['textarea'] ); ?>">
</div>
<div class="smw-admin-col-3"><?php esc_attr_e("Field name", "wpcalc-modal-form") ?>: <input name="wpcmf_f[name_display]" type="checkbox" value="1" <?php if($options['name_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>"><br/> <input type="text" name="wpcmf_f[name]"  value="<?php echo sanitize_text_field ( $options['name'] ); ?>" /></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Field e-mail", "wpcalc-modal-form") ?>: <input name="wpcmf_f[email_display]" type="checkbox" value="1" <?php if($options['email_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>"><br/>
<input type="text" name="wpcmf_f[email]" value="<?php echo sanitize_text_field ( $options['email'] ); ?>" /></div>	
</div>

<div class="smw-admin-col">
<div class="smw-admin-col-3"><?php esc_attr_e("Field phone", "wpcalc-modal-form") ?>:<input name="wpcmf_f[phone_display]" type="checkbox" value="1" <?php if($options['phone_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>"><br/>
<input type="text" name="wpcmf_f[phone]" value="<?php echo sanitize_text_field ( $options['phone'] ); ?>" /></div>
<div class="smw-admin-col-3"></div>
<div class="smw-admin-col-3"></div>
<div class="smw-admin-col-3"></div>	
</div>

</div>
</div>



<div class="postbox">
<h3><?php esc_attr_e("Style of popup window", "wpcalc-modal-form") ?></h3>
<div class="inside smw-admin" style="display: block;">	

<div class="smw-admin-col">
<div class="smw-admin-col-3"><?php esc_attr_e("Width feedback unit", "wpcalc-modal-form") ?>:<br/><input type="number" name="wpcmf_f[width]" value="<?php echo sanitize_text_field ($options['width'] ); ?>" />px;</div>
<div class="smw-admin-col-3"><?php esc_attr_e("Height feedback unit", "wpcalc-modal-form") ?>:<br/><input type="number" name="wpcmf_f[height]" value="<?php echo sanitize_text_field ($options['height'] ); ?>" />px;</div>
<div class="smw-admin-col-3"><?php esc_attr_e("Visible width", "wpcalc-modal-form") ?>:<br/><input type="number" name="wpcmf_f[margin_left]" value="<?php echo sanitize_text_field ($options['margin_left'] ); ?>" />px;</div>	
<div class="smw-admin-col-3"><?php esc_attr_e("Visible height", "wpcalc-modal-form") ?>:<br/><input type="number" name="wpcmf_f[margin_top]" value="<?php echo sanitize_text_field ($options['margin_top'] ); ?>" />px;</div>
</div>

<div class="smw-admin-col">

<div class="smw-admin-col-3"><?php esc_attr_e("Color", "wpcalc-modal-form") ?> :<br/> <input type='text' placeholder="#ffffff" class="wp-color-picker-field" name='wpcmf_f[color]' value="<?php if(empty($options[color])){echo "#ffffff";}else{echo $$options[color];}?>"/></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Padding", "wpcalc-modal-form") ?>:<br/> <input type="number" name="wpcmf_f[padding]" value="<?php echo sanitize_text_field ( $options['padding'] ); ?>" /> px</div>
<div class="smw-admin-col-3"><?php esc_attr_e("Border", "wpcalc-modal-form") ?> :<br/> <input type="number" name="wpcmf_f[border]" value="<?php echo sanitize_text_field ( $options['border'] ); ?>" /> px</div>	
<div class="smw-admin-col-3"><?php esc_attr_e("Border color", "wpcalc-modal-form") ?> :<br/> <input type="text" name="wpcmf_f[border_color]" value="<?php echo sanitize_text_field ($options['border_color'] ); ?>" class="wp-color-picker-field"/></div>
</div>

<div class="smw-admin-col">

<div class="smw-admin-col-3"><?php esc_attr_e("Background color", "wpcalc-modal-form") ?> :<br/> <input type="text" name="wpcmf_f[background_color]" value="<?php echo sanitize_text_field ($options['background_color'] ); ?>" class="wp-color-picker-field"/></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Padding Form", "wpcalc-modal-form") ?> :<br/> <input type="number" name="wpcmf_f[padding_form]" value="<?php echo sanitize_text_field ( $options['padding_form'] ); ?>" /> px</div>
<div class="smw-admin-col-3"></div>	
</div>


</div>
</div>

</div>
</div>



<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="wpcmf_f" />
<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
</form>

