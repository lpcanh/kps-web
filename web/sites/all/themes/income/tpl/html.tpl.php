<!DOCTYPE html>

<html lang="<?php print $language->language; ?>">

	<head>

		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

		<title><?php print $head_title; ?></title>



		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">



		<!--[if lt IE 9]>

		  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>

		<![endif]-->

		<?php print $styles; ?><?php print $head; ?>

		<?php

		//Tracking code

		$tracking_code = theme_get_setting('general_setting_tracking_code', 'income');

		print $tracking_code;

		//Custom css

		$custom_css = theme_get_setting('custom_css', 'income');

		if(!empty($custom_css)):

		?>

		<style type="text/css" media="all">

		<?php print $custom_css;?>

		</style>

		<?php

			endif;

		?>

	</head>

	<body class="<?php print $classes;?>"  <?php print $attributes;?> >

		<div id="skip-link">

			<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>

		</div>

		<?php print $page_top; ?><?php print $page; ?><?php print $page_bottom; ?>

		<?php print $scripts; ?>
		<?php require_once(drupal_get_path('theme','income').'/tpl/switcher.tpl.php'); ?>

	</body>

</html>