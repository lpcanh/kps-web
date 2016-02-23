/* <![CDATA[ */
	//var mejsL10n = {"language":"en","strings":{"Close":"Close","Fullscreen":"Fullscreen","Download File":"Download File","Download Video":"Download Video","Play\/Pause":"Play\/Pause","Mute Toggle":"Mute Toggle","None":"None","Turn off Fullscreen":"Turn off Fullscreen","Go Fullscreen":"Go Fullscreen","Unmute":"Unmute","Mute":"Mute","Captions\/Subtitles":"Captions\/Subtitles"}};
	//var _wpmejsSettings = {"pluginPath":"\/income\/wp-includes\/js\/mediaelement\/"};
/* ]]> */

/* <![CDATA[ */
var dnd_options = {"dnd_tipsy_opacity":"0.8","dnd_custom_map_style":""};
/* ]]> */

/* <![CDATA[ */
var wpsArgs = {"auto_scroll":"false","circular":"false","easing_effect":"linear","no_of_items_to_scroll":"1","fx":"fade"};
/* ]]> */

jQuery(document).ready(function($) {
	$('.widget_search .form-actions input').val('');
	$('.widget_search .form-actions').append('<i class="ci_icon-search"></i>');
	// JS partners logo
	var s = 0;
	for (var i = 1; i <= $('.partners_logo_style2 .dnd_column_dd_span2').length; i++) {
		$('.partners_logo_style2 .dnd_column_dd_span2:nth-child('+i+') div.dnd-animo').attr('data-delay', s);
		s = s + 400;
	};

	//JS contact form style 2
	for (var i = 1; i <= 3; i++) {
		$('.contact_form_2 form .form-item:nth-child('+i+')').addClass('dnd_column_dd_span4');
	};
	//JS search form
	$('section.404_search form').addClass('dnd_column_dd_span4');
	$('form.dnd_column_dd_span4 input[type="submit"]').val('');
	$('form.dnd_column_dd_span4 .form-actions').append('<i class="ci_icon-search"></i>');
	$('.dnd_search .form-actions input').val('');
	$('.dnd_search .form-actions').append('<i class="ci_icon-search"></i>');

	//JS pager
	$('ul.pager li.pager-next a').html('<span>›<span>');
	$('ul.pager li.pager-last a').html('<span>»</span>');
	$('ul.pager li.pager-first a').html('<span>«</span>');
	$('ul.pager li.pager-previous a').html('<span>‹</span>');

	//JS portfolio
	if($('#portfolio_description').val()) {
		var des = $('#portfolio_description').val();
		$('section > .container').addClass(des);
		if($('#portfolio_description').val() != '') {
			var h = $('section .block > .row > [class*="span"]:nth-child(1) .portfolio_item_meta_detail_description').height();
			for (var i = 1; i <= $('section .block > .row > [class*="span"]').length; i++) {
				if ($('section .block > .row > [class*="span"]:nth-child('+i+') .portfolio_item_meta_detail_description').height() > h) {
					h = $('section .block > .row > [class*="span"]:nth-child('+i+') .portfolio_item_meta_detail_description').height();
				}
			};
			$('section .block > .row > [class*="span"] .portfolio_item_meta_detail_description').height(h);
		}
	}

	//JS Page
	if ($('body section.page .node .content .field-name-body').text() || $('body section.page #block-system-main').height() > 10) {
	} else {
		$('body section.page').addClass('no_padding');
	}

	//JS Shop

	$('li.product.income_products_list form.commerce-add-to-cart > div').append('<i class="ci_icon-shopping-cart"></i>');

	for (var i = 1; i <= $('ul.products li.product').length; i++) {
		var span_w = $('ul.products li.product:nth-child('+i+') .star-rating span').attr('data-width') + '%';
		$('ul.products li.product:nth-child('+i+') .star-rating span').css('width', span_w);
		if ($('ul.products.grid li.product:nth-child('+i+') .products_loop_image_secondary').html()) {
		} else {
			$('ul.products.grid li.product:nth-child('+i+') .products_loop_image_wrapper > div:nth-child(2)').removeAttr('class');
			$('ul.products.grid li.product:nth-child('+i+') .products_loop_image_wrapper > div:nth-child(2)').addClass('product_single_image_zoom_wrapper');
		}
	};
	var sw = $('.single_product_ratings .star-rating span').attr('data-width') + '%';
	$('.single_product_ratings .star-rating span').css('width', sw);
	$('.shop_nav_links .view-footer .line-item-summary-view-cart').prepend('<i class="ci_icon-shopping-cart"></i> ');

});