<?php

function income_form_system_theme_settings_alter(&$form, $form_state) {
  $theme_path = drupal_get_path('theme', 'income');

  $form['settings'] = array(
	'#type' => 'vertical_tabs',
	'#title' => t('Theme settings'),
	'#weight' => 2,
	'#collapsible' => TRUE,
	'#collapsed' => FALSE,
	'#attached' => array(
	  'css' => array(drupal_get_path('theme', 'income') . '/css/drupalet_base/admin.css'),
	  'js' => array(
		drupal_get_path('theme', 'income') . '/js/drupalet_admin/admin.js',
	  ),
	),
  );


  $form['settings']['general_setting'] = array(

	'#type' => 'fieldset',
	'#title' => t('General Settings'),
	'#collapsible' => TRUE,
	'#collapsed' => FALSE,

  );


  $form['settings']['general_setting']['general_setting_tracking_code'] = array(

	'#type' => 'textarea',
	'#title' => t('Tracking Code'),
	'#default_value' => theme_get_setting('general_setting_tracking_code', 'income'),

  );


  $form['settings']['general_setting']['layout_style'] = array(


	'#title' => t('Layout style'),
	'#type' => 'select',
	'#options' => array(

	  'wide' => t('Wide'),
	  'boxed' => t('Boxed'),

	),
	'#default_value' => theme_get_setting('layout_style', 'income'),


  );


  $form['settings']['header'] = array(

	'#type' => 'fieldset',
	'#title' => t('Header settings'),
	'#collapsible' => TRUE,
	'#collapsed' => FALSE,

  );


  $form['settings']['header']['header_social_info'] = array(


	'#title' => t('Header social info'),
	'#type' => 'textarea',
	'#default_value' => theme_get_setting('header_social_info', 'income'),


  );


  $form['settings']['header']['contact_phone'] = array(


	'#title' => t('Contact phone'),
	'#type' => 'textfield',
	'#default_value' => theme_get_setting('contact_phone', 'income'),


  );


  $form['settings']['header']['contact_mail'] = array(


	'#title' => t('Contact email'),
	'#type' => 'textfield',
	'#default_value' => theme_get_setting('contact_mail', 'income'),


  );


  $form['settings']['blogs'] = array(

	'#type' => 'fieldset',
	'#title' => t('Blogs settings'),
	'#collapsible' => TRUE,
	'#collapsed' => FALSE,

  );


  $form['settings']['blogs']['blog_style'] = array(


	'#title' => t('Blog style'),
	'#type' => 'select',
	'#options' => array(

	  'style1' => t('Blog style 1'),
	  'style2' => t('Blog style 2'),
	  'style3' => t('Blog style 3'),
	  'ministyle' => t('Mini style'),
	  'timeline' => t('Timeline'),
	  'mini2col' => t('Mini 2 column'),
	  '2sidebar' => t('Dual sidebars'),
	  'masonry' => t('Masonry'),

	),
	'#default_value' => theme_get_setting('blog_style', 'income'),


  );


  $form['settings']['blogs']['blog_masonry'] = array(


	'#title' => t('Masonry columns'),
	'#type' => 'select',
	'#options' => array(

	  '2col' => t('2 Columns'),
	  '3col' => t('3 Column'),
	  '4col' => t('4 Column'),

	),
	'#default_value' => theme_get_setting('blog_masonry', 'income'),
	'#description' => t('Note: Only applies to masonry style blog')


  );


  $form['settings']['blogs']['blog_layout'] = array(


	'#title' => t('Blog layout'),
	'#type' => 'select',
	'#options' => array(

	  'fullwidth' => t('Full width'),
	  'sidebarleft' => t('Sidebar left'),
	  'sidebarright' => t('Sidebar right'),

	),
	'#default_value' => theme_get_setting('blog_layout', 'income'),


  );


  $form['settings']['footer'] = array(

	'#type' => 'fieldset',
	'#title' => t('Footer settings'),
	'#collapsible' => TRUE,
	'#collapsed' => FALSE,

  );


  $form['settings']['footer']['footer_style'] = array(


	'#title' => t('Footer style'),
	'#type' => 'select',
	'#options' => array(

	  'footer1' => t('Footer style 1'),
	  'footer2' => t('Footer style 2'),
	  'footer3' => t('Footer style 3')

	),
	'#default_value' => theme_get_setting('footer_style', 'income'),


  );


  $form['settings']['footer']['footer_copyright_message'] = array(

	'#type' => 'textarea',
	'#title' => t('Footer copyright message'),
	'#default_value' => theme_get_setting('footer_copyright_message', 'income'),

  );


  $form['settings']['custom_css'] = array(

	'#type' => 'fieldset',
	'#title' => t('Custom CSS'),
	'#collapsible' => TRUE,
	'#collapsed' => FALSE,

  );


  $form['settings']['custom_css']['custom_css'] = array(

	'#type' => 'textarea',
	'#title' => t('Custom CSS'),
	'#default_value' => theme_get_setting('custom_css', 'income'),
	'#description' => t('<strong>Example:</strong><br/>h1 { font-family: \'Metrophobic\', Arial, serif; font-weight: 400; }')

  );


  //Disable Switcher style;

  $form['settings']['skin']['income_disable_switch'] = array(

	'#title' => t('Switcher style'),
	'#type' => 'select',
	'#options' => array('on' => t('ON'), 'off' => t('OFF')),
	'#default_value' => theme_get_setting('income_disable_switch', 'income'),

  );
  $form['settings']['skin']['built_in_skins'] = array(
	'#type' => 'radios',
	'#title' => t('Built-in Skins'),
	'#options' => array(
	  'default.css' => t('Default'),
	  'red.css' => t('Red'),
	  'dodgerblue.css' => t('Dodger-blue'),
	  'darkblue.css' => t('Dark-blue'),
	  'limegreen.css' => t('Lime-green'),
	  'bluemarguerite.css' => t('Blue-marguerite'),
	  'silvertree.css' => t('Silver-tree'),
	  'orange.css' => t('Orange'),
	  'lightgreen.css' => t('Light-green'),
	  'pink.css' => t('Pink'),
	  'purple.css' => t('Purple'),
	  'springgreen.css' => t('Spring-green'),
	  'violet.css' => t('Violet'),
	  'laurel.css' => t('Laurel'),
	  'turquoise.css' => t('Turquoise'),
	  'silverlime.css' => t('Silver-lime'),
	  'wetasphal.css' => t('Wet-asphal'),
	  'greensmoke.css' => t('Green-smoke'),
	  'amethyst.css' => t('Amethyst'),
	  'concrete.css' => t('Concrete'),
	  'nephritis.css' => t('Nephritis'),
	  'alizarin.css' => t('Alizarin'),
	  'burntsienna.css' => t('Burnt-sienna'),
	  'belizehole.css' => t('Belize-hole'),
	  'midnightblue.css' => t('Midnight-blue'),
	  'greensea.css' => t('Green-sea'),
	  'mediumpurple.css' => t('Medium-purple'),
	  'deepblush.css' => t('Deep-blush'),

	),
	'#default_value' => theme_get_setting('built_in_skins', 'income')
  );


}