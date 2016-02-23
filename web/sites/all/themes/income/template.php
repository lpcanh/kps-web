<?php

global $base_url;



function income_preprocess_html(&$variables) {



	drupal_add_css('http://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C400italic%7COpen+Sans%3A400&amp;ver=4.0.1', array('type' => 'external'));

	drupal_add_js('http://maps.google.com/maps/api/js?sensor=false&amp;ver=4.0.1', array('type' => 'external'));

	//Switcher color
	$disable_switcher = theme_get_setting('income_disable_switch', 'income');
	if(empty($disable_switcher))
		$disable_switcher = 'on';
	if(!empty($disable_switcher) && $disable_switcher=='on')
	drupal_add_css(base_path().path_to_theme().'/js/style-switcher/color-switcher.css', array('type' => 'external', 'media' => 'all'));

}



// Add css skin
$setting_skin = theme_get_setting('built_in_skins', 'income');
if(!empty($setting_skin)){
	$skin_color = '/css/color-scheme/'.$setting_skin;
}else{
	$skin_color = '/css/color-scheme/default.css';
}
$css_skin = array(
	'#tag' => 'link', // The #tag is the html tag - <link />
	'#attributes' => array( // Set up an array of attributes inside the tag
	'href' => $base_url.'/'.path_to_theme().$skin_color,
	'rel' => 'stylesheet',
	'type' => 'text/css',
	'id' => 'skin',
	'data-baseurl'=>$base_url.'/'.path_to_theme()
	),
	'#weight' => 1,
);
drupal_add_html_head($css_skin, 'skin');



function income_form_comment_form_alter(&$form, &$form_state) {

  $form['comment_body']['#after_build'][] = 'income_customize_comment_form';

}



function income_customize_comment_form(&$form) {

  $form[LANGUAGE_NONE][0]['format']['#access'] = FALSE;

  return $form;

}



function income_preprocess_page(&$vars) {



	if (isset($vars['node'])) {

		$vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;

	}



	//404 page

	$status = drupal_get_http_header("status");

	if($status == "404 Not Found") {

		$vars['theme_hook_suggestions'][] = 'page__404';

	}





	// if (isset($vars['node'])) :

	// 	//print $vars['node']->type;

 //        if($vars['node']->type == 'page'):



 //            $node = node_load($vars['node']->nid);

 //            $output = field_view_field('node', $node, 'field_show_page_title', array('label' => 'hidden'));

 //            $vars['field_show_page_title'] = $output;

	// 		//sidebar

	// 		$output = field_view_field('node', $node, 'field_sidebar', array('label' => 'hidden'));

 //            $vars['field_sidebar'] = $output;

 //        endif;

 //    endif;



}





// Remove superfish css files.

function income_css_alter(&$css) {

	unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);

	unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);



//	unset($css[drupal_get_path('module', 'system') . '/system.base.css']);

}



function income_form_alter(&$form, &$form_state, $form_id) {

	if ($form_id == 'search_block_form') {

		$form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty

		$form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield

		$form['search_block_form']['#attributes']['id'] = array("mod-search-searchword");

		//disabled submit button

		//unset($form['actions']['submit']);

		unset($form['search_block_form']['#title']);

		$form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";

		$form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";

	}

	if($form_id == 'contact_site_form'){

		$form['mail']['#attributes']['class'] = array("input-contact-form");

		$form['name']['#attributes']['class'] = array("input-contact-form");

		$form['subject']['#attributes']['class'] = array("input-contact-form");

		$form['message']['#attributes']['class'] = array("message-contact-form");

		$form['actions']['submit']['#attributes']['class'] = array('btn btn-success contact-form-button');

	}

	if ($form_id == 'comment_form') {

		$form['comment_filter']['format'] = array(); // nuke wysiwyg from comments

	}



}

function income_textarea($variables) {

  $element = $variables['element'];

  $element['#attributes']['name'] = $element['#name'];

  $element['#attributes']['id'] = $element['#id'];

  $element['#attributes']['cols'] = $element['#cols'];

  $element['#attributes']['rows'] = $element['#rows'];

  _form_set_class($element, array('form-textarea'));



  $wrapper_attributes = array(

    'class' => array('form-textarea-wrapper'),

  );



  // Add resizable behavior.

  if (!empty($element['#resizable'])) {

    $wrapper_attributes['class'][] = 'resizable';

  }



  $output = '<div' . drupal_attributes($wrapper_attributes) . '>';

  $output .= '<textarea' . drupal_attributes($element['#attributes']) . '>' . check_plain($element['#value']) . '</textarea>';

  $output .= '</div>';

  return $output;

}

function income_breadcrumb($variables) {

	$crumbs ='';

	$breadcrumb = $variables['breadcrumb'];

	if (!empty($breadcrumb)) {

		$crumbs .= '';

		foreach($breadcrumb as $value) {



			$crumbs .= $value.' <i class="ci_icon-chevron-right"></i>';

		}

		$crumbs .= '<span class="current">'.drupal_get_title().'</span>';

		return $crumbs;

	}else{

		return NULL;

	}

}

//custom main menu

function income_menu_tree__main_menu(array $variables) {

	if (preg_match("/\bexpanded\b/i", $variables['tree'])){

	return '<ul class="main_menu">' . $variables['tree'] . '</ul>';

	} else {

	return '<ul>' . $variables['tree'] . '</ul>';

	}

}





/**Override Menu theme */





function income_links__system_menu_footer_menu($variables) {

	$str = '<ul id="footer_menu_inner">';

		foreach ($variables['links'] as $link) {

        $str .= "<li class='menu-item'>".l($link['title'], $link['path'], $link)."</li>";

    }

	$str .= '</ul>';

	return $str;

}

function hook_preprocess_page(&$variables) {

	if (arg(0) == 'node' && is_numeric($nid)) {

		if (isset($variables['page']['content']['system_main']['nodes'][$nid])) {

			$variables['node_content'] =& $variables['page']['content']['system_main']['nodes'][$nid];

			if (empty($variables['node_content']['field_show_page_title'])) {

			$variables['node_content']['field_show_page_title'] = NULL;

			}

		}

	}

}



function getRelatedPosts($ntype,$nid){

	$nids = db_query("SELECT n.nid, title FROM {node} n WHERE n.status = 1 AND n.type = :type AND n.nid <> :nid ORDER BY RAND() LIMIT 0,6", array(':type' => $ntype, ':nid' => $nid))->fetchCol();

	$nodes = node_load_multiple($nids);

	$return_string = '' ;

	if (!empty($nodes)):

		foreach ($nodes as $node) :

			$field_image = field_get_items('node', $node, 'field_image');

			$return_string .= '<div class="related-post"><figure>';

			$return_string .= '<a href="'.url("node/" . $node->nid).'">';

			$return_string .= theme('image_style', array('style_name' => 'image_112x70', 'path' => $field_image[0]['uri'], 'attributes'=>array('alt'=>$node->title)));

			$return_string .= '</a></figure>';

			$return_string .= '<p class="title"><a href="'.url("node/" . $node->nid).'">';

			$return_string .= $node->title.'</a></p>';

			$return_string .= '<p class="meta">'.format_date($node->created, 'custom', 'd M Y').', '.$node->comment_count.' Comments</p></div>';

		endforeach;

	endif;

	return $return_string.'<div class="riva-insert-menu-here"></div>';

}



function income_preprocess_node(&$vars) {

	unset($vars['content']['links']['statistics']['#links']['statistics_counter']);

}

