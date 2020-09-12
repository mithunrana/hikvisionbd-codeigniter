"use strict";
jQuery(function(){
	var $winwidth = jQuery(window).width();
	var $winheight = jQuery(window).height();
	if($winwidth > 767) {
		var footerH = jQuery('.site-footer').innerHeight();
		jQuery('.page-wrapper').css('padding-bottom', footerH + 'px');
		
	} else {
		jQuery('.page-wrapper').css('padding-bottom', '');
	}
	
	jQuery('.pp').click(function(){
		jQuery('#privacyPolicy').modal('show');
	})
	jQuery('.tc').click(function(){
		jQuery('#termsAndConditions').modal('show');
	})
	jQuery(".modal").on('hidden.bs.modal', function (e) {
	    jQuery(".modal iframe").attr("src", jQuery(".modal iframe").attr("src"));
	});

	jQuery('.item-country').click(function(){
		jQuery('#itemCountry').modal('show');
	})
	
	jQuery('#primaryNavToggle').click(function(){
		jQuery(this).toggleClass('open');
		jQuery('body').toggleClass('open-primary-menu');
		jQuery('#primaryMobNavbar').toggleClass('open');
		jQuery('.nav-backdrop-overlay').toggleClass('open');
	});		
	
	jQuery('#primaryMobNavbar .nav-content .nav-wrapper').css('height', $winheight);
	jQuery(document).ready(function(){
		jQuery(window).resize(function(){
			var $winwidth = jQuery(window).width();
			var $winheight = jQuery(window).height();
			if($winwidth >= 768) {			
				jQuery('body').removeClass('open-primary-menu');				
			} else if($winwidth <=767 && jQuery('#primaryMobNavbar').hasClass('open')) {
				jQuery('body').addClass('open-primary-menu');	
			}
			if($winwidth > 767) {
				var footerH = jQuery('.site-footer').innerHeight();
				jQuery('.page-wrapper').css('padding-bottom', footerH + 'px');				
			}
			else {
				jQuery('.page-wrapper').css('padding-bottom', '');
			}
			jQuery('#primaryMobNavbar .nav-content .nav-wrapper').css('height', $winheight);
		})
	})
});