<script>
jQuery(document).ready(function($) {
	$('.postbox').children('h3, .handlediv').click(function(){ $(this).siblings('.inside').toggle();});	
	$('.wp-color-picker-field').wpColorPicker();	
});
</script>

<form method="post" name="general_options" action="options.php">
<?php wp_nonce_field('update-options'); ?>
<?php $wpcmf_g = get_option('wpcmf_g'); ?> 

<div class="metabox-holder">
<div class="meta-box-sortables">
<h2>E-mail</h2>
<h4>Get <a href="http://codecanyon.net/item/ultimate-modal-windows/15871235?s_rank=2" target="_blank">Ultimate Modal Windows</a> version to enable more features. Follower us on <a href="http://codecanyon.net/user/dayesdesign/portfolio" target="_blank">Codecanyon</a>.</h4>
<div class="postbox">
<div title="Open/close" class="handlediv"></div>
<h3 class="adminblock"><?php esc_attr_e("Sending mail", "wpcalc-modal-form") ?></h3>
<div class="inside smw-admin" style="display: block;">	

<div class="smw-admin-col">
<div class="smw-admin-col-3"><?php esc_attr_e("Close window through", "wpcalc-modal-form") ?>:<br/> <input type="number" name="wpcmf_g[timer]" value="<?php echo sanitize_text_field ( $wpcmf_g['timer'] ); ?>" /><?php esc_attr_e("seconds", "wpcalc-modal-form") ?></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Text after sending a message", "wpcalc-modal-form") ?>:<br/> <input type="text" name="wpcmf_g[thank]" value="<?php echo sanitize_text_field ( $wpcmf_g['thank']); ?>"></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Text color Thanks", "wpcalc-modal-form") ?>:<br/> <input type='text' placeholder="#444444" class="wp-color-picker-field" name='wpcmf_g[colorthank]' value="<?php if(empty($wpcmf_g[colorthank])){echo "#444444";}else{echo $wpcmf_g[colorthank];}?>"/></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Text Size Thank", "wpcalc-modal-form") ?> :<br/><input type="number" name="wpcmf_g[sizethank]" value="<?php echo sanitize_text_field ( $wpcmf_g['sizethank'] ); ?>" /><?php esc_attr_e("px", "wpcalc-modal-form") ?></div>	
</div>

<div class="smw-admin-col">
<div class="smw-admin-col-3"><?php esc_attr_e("Send to e-mail", "wpcalc-modal-form") ?>:<br/>
<input type="text" name="wpcmf_g[sendmail]" value="<?php echo sanitize_text_field ( $wpcmf_g['sendmail']); ?>" /> <?php esc_attr_e("enter multiple recipients can be separated by commas", "wpcalc-modal-form") ?></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Post subject", "wpcalc-modal-form") ?>:<br/> <input type="text" name="wpcmf_g[subject]" value="<?php echo sanitize_text_field ( $wpcmf_g['subject']); ?>" /></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Field Name", "wpcalc-modal-form") ?>:<br/> <input type="text" name="wpcmf_g[name]" value="<?php echo sanitize_text_field ( $wpcmf_g['name']); ?>" /></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Field E-mail", "wpcalc-modal-form") ?>:<br/><input type="text" name="wpcmf_g[mail]" value="<?php echo sanitize_text_field ( $wpcmf_g['mail']); ?>" /> </div>	
</div>

<div class="smw-admin-col">
<div class="smw-admin-col-3"><?php esc_attr_e("Field Phone", "wpcalc-modal-form") ?>:<br/> <input type="text" name="wpcmf_g[phone]" value="<?php echo sanitize_text_field ( $wpcmf_g['phone']); ?>" /></div>
<div class="smw-admin-col-3"><?php esc_attr_e("Field Review", "wpcalc-modal-form") ?>:<br/>  <input type="text" name="wpcmf_g[review]" value="<?php echo sanitize_text_field ( $wpcmf_g['review']); ?>" /></div>
<div class="smw-admin-col-3"></div>
<div class="smw-admin-col-3"></div>	
</div>

</div>
</div>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="wpcmf_g" />
<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
</form>