jQuery(function($){	
	var wpcmf = 'error';
	var data = {
		'action': 'send_wpcalc_modal_form',
		wpcmf:wpcmf
	};
	jQuery.post(wpcal_modal_Ajax.ajaxurl, data, function(data) {		
		errcolor = data.errcolor;
		errreview = data.errreview;
		errname = data.errname;
		errmail = data.errmail;
		errphone = data.errphone;
		errreview_required = data.errreview_required;
		errname_required = data.errname_required;
		errmail_required = data.errmail_required;
		errphone_required = data.errphone_required;
		
	});
});

jQuery(document).ready(function() {
	jQuery('a.wpcalcmf_link').click( function(event){
		event.preventDefault();
		jQuery('.overlaywpcalcmf').fadeIn(400,
		 	function(){
				jQuery('.wpcalcmf') 
					.css('display', 'block')
					.animate({opacity: 1, top: '10%'}, 400); 
		});
		jQuery('html, body').css('overflow', 'hidden');
	});
	
	jQuery('.wpcalcmfclose').click( function(){
		jQuery('.wpcalcmf')
			.animate({opacity: 0, top: '0%'}, 400, 
				function(){ 
					jQuery(this).css('display', 'none'); 
					jQuery('.overlaywpcalcmf').fadeOut(400); 
				}
			);
		jQuery('html, body').css('overflow', '');
	});
});

function wpcmf(wpcmfbuttid) {
	if (wpcmfbuttid == 1){
		var buttid = 'wpcmf_page';
	}
	else if (wpcmfbuttid == 2){
		var buttid = 'wpcalcfeed';
	}
	else if (wpcmfbuttid == 3){
		var buttid = 'wpcalcmodal';
	}	
	else if (wpcmfbuttid == 4){
		var buttid = 'wpcalc_calc';
		var content_calc = jQuery("#wpcmf_result_send").html();
	}	
	var message = jQuery("#" + buttid +" .message").val();	
	var counttextarea = jQuery("#" + buttid +" .textarea").length;
	var countname = jQuery("#" + buttid +" .name").length;
	var countemail = jQuery("#" + buttid +" .email").length;
	var countphone = jQuery("#" + buttid +" .phone").length;	
	var textarea = jQuery("#" + buttid +" .textarea").val();
	var name = jQuery("#" + buttid +" .name").val();
	var email = jQuery("#" + buttid +" .email").val();
	var phone = jQuery("#" + buttid +" .phone").val();		
	jQuery("#" + buttid + " .textarea").removeAttr('style');
	jQuery("#" + buttid + " .name").removeAttr('style');
	jQuery("#" + buttid + " .phone").removeAttr('style');
		
	if ( name == '' && countname == 1 && errname_required ==1){
		jQuery("#" + buttid +" .name").attr("placeholder", errname);
        jQuery("#" + buttid +" .name").css({"border-color": errcolor, "border-width":"1px", "border-style":"solid"});
        jQuery("#" + buttid +" .name").focus();	
		return false;		
    } 
	if ( email == '' && countemail == 1 && errmail_required ==1){
		jQuery("#" + buttid +" .email").attr("placeholder", errmail);
        jQuery("#" + buttid +" .email").css({"border-color": errcolor, "border-width":"1px", "border-style":"solid"});
        jQuery("#" + buttid +" .email").focus();
		return false;
	} 
	if ( email != '' && countemail == 1){
		var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
		if(pattern.test(email)){
			jQuery("#" + buttid + " .email").removeAttr('style');
		} 
		else {
			jQuery("#" + buttid +" .email").css({"border-color": errcolor, "border-width":"1px", "border-style":"solid"});
			jQuery("#" + buttid +" .email").focus();
			return false;
            }
	}		
	if ( phone == '' && countphone == 1 && errphone_required ==1){
		jQuery("#" + buttid +" .phone").attr("placeholder", errphone);
        jQuery("#" + buttid +" .phone").css({"border-color": errcolor, "border-width":"1px", "border-style":"solid"});
        jQuery("#" + buttid +" .phone").focus();
		return false;
	} 
	if ( textarea == '' && counttextarea == 1 && errreview_required ==1){
		jQuery("#" + buttid +" .textarea").attr("placeholder", errreview);
        jQuery("#" + buttid +" .textarea").css({"border-color": errcolor, "border-width":"1px", "border-style":"solid"});
        jQuery("#" + buttid +" .textarea").focus();
		return false;		
    }
	if ( message != ''){
		return false;
	}		
	else {
		var data = {
			'action': 'send_wpcalc_modal_form',
			textarea:textarea,
			name:name,
			email:email,			
			phone:phone,
			content_calc:content_calc
		};
		jQuery.post(wpcal_modal_Ajax.ajaxurl, data, function(msg) {
			jQuery('#result_' + buttid).html(msg);
		});
	}
}
	
	



	
	
	





