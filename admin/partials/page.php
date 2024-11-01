<script>
jQuery(document).ready(function($) {
	$('.postbox').children('h3, .handlediv').click(function(){ $(this).siblings('.inside').toggle();});	
	$('.wp-color-picker-field').wpColorPicker();	
});
</script>

<?php
$settings = array(
    'textarea_name' => 'wpcmf_p[text]',
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
<?php $options = get_option('wpcmf_p'); ?> 

<div class="metabox-holder">
<div class="meta-box-sortables">
<h2><?php esc_attr_e("Configure form fields in a page", "wpcalc-modal-form") ?></h2>

<h4>Get <a href="http://codecanyon.net/item/ultimate-modal-windows/15871235?s_rank=2" target="_blank">Ultimate Modal Windows</a> version to enable more features. Follower us on <a href="http://codecanyon.net/user/dayesdesign/portfolio" target="_blank">Codecanyon</a>.</h4>

<h4><?php esc_attr_e("To insert a form on the page or post using shortcode", "wpcalc-modal-form") ?> "[wpcalcmf]"</h4>



<div class="postbox">
    <div title="Open/close" class="handlediv"></div>
    <h3 class="adminblock"><?php esc_attr_e("The text over form", "wpcalc-modal-form") ?> <input name="wpcmf_p[text_display]" type="checkbox" value="1" <?php if($options['text_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>"></h3>
    <div class="inside smw-admin" style="display: block;">		
	<?php echo wp_editor(stripslashes($wpcmf_p[text]), 'content', $settings); ?>	
</div>
</div>

<div class="postbox">
<div class="inside smw-admin" style="display: block;">	
<div class="smw-admin-col">
<div class="smw-admin-col-3"><?php esc_attr_e("Title text", "wpcalc-modal-form") ?>: <input name="wpcmf_p[title_display]" type="checkbox" value="1" <?php if($options['title_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>"><br/>
<input type="text" name="wpcmf_p[title]" value="<?php echo sanitize_text_field ( $options['title']); ?>">
</div>
<div class="smw-admin-col-3"><?php esc_attr_e("Field comments", "wpcalc-modal-form") ?>: <input name="wpcmf_p[textarea_display]" type="checkbox" value="1" <?php if($options['textarea_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>"><br/> <input type="text" name="wpcmf_p[textarea]" value="<?php echo sanitize_text_field ( $options['textarea']); ?>"></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Field name", "wpcalc-modal-form") ?>: <input name="wpcmf_p[name_display]" type="checkbox" value="1" <?php if($options['name_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>"><br/>
<input type="text" name="wpcmf_p[name]"  value="<?php echo sanitize_text_field ( $options['name'] ); ?>" /></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Field e-mail", "wpcalc-modal-form") ?>: <input name="wpcmf_p[email_display]" type="checkbox" value="1" <?php if($options['email_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>"><br/>
<input type="text" name="wpcmf_p[email]" value="<?php echo sanitize_text_field ( $options['email'] ); ?>" /></div>
</div>

<div class="smw-admin-col">
<div class="smw-admin-col-3"><?php esc_attr_e("Field phone", "wpcalc-modal-form") ?>: <input name="wpcmf_p[phone_display]" type="checkbox" value="1" <?php if($options['phone_display']=='1') { echo 'checked="checked"'; } ?> title="<?php esc_attr_e("Show/Hide", "wpcalc-modal-form") ?>"><br/>
<input type="text" name="wpcmf_p[phone]" value="<?php echo sanitize_text_field ( $options['phone'] ); ?>" /></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Text To send", "wpcalc-modal-form") ?>:<br/> <input type="text" name="wpcmf_p[button_send]" value="<?php echo sanitize_text_field ( $options['button_send'] ); ?>" /></div>
<div class="smw-admin-col-3"></div>
<div class="smw-admin-col-3"></div>
</div>

</div>
</div>


</div>
</div>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="wpcmf_p" />
<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
</form>

