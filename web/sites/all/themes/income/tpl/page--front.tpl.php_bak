<?php require_once(drupal_get_path('theme','income').'/tpl/header.tpl.php'); ?>

<?php  if($page['content']):?>
<?php
	if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
		print render($tabs);
	endif;
	print $messages;
	unset($page['content']['system_main']['default_message']);
?>
<?php print render($page['content']) ?>
<?php endif; ?>
<?php  if($page['content_section']):?>
	<?php print render($page['content_section']) ?>
<?php endif; ?>
<?php require_once(drupal_get_path('theme','income').'/tpl/footer.tpl.php');?>