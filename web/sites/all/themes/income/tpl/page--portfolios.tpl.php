<?php require_once(drupal_get_path('theme','income').'/tpl/header.tpl.php'); ?>

<section id="title_breadcrumbs_bar">
	<div class="container clearfix">
		<div class="floatleft">
			<h1><?php print drupal_get_title(); ?></h1>
		</div>
		<?php if ($breadcrumb): ?>
		<div class="floatright">
			<div class="breadcrumbs"><?php print $breadcrumb; ?></div>
		</div>
		<?php endif; ?>
	</div>
</section>

<?php  if($page['content']):?>
<section id="simple_item_portfolio">
	<div class="container">
		<div class="row">
		<?php
			if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
				print render($tabs);
			endif;
			print $messages;
		?>
		<?php print render($page['content']) ?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php  if($page['related_portfolio']):?>
	<?php print render($page['related_portfolio']) ?>
<?php endif; ?>
<?php require_once(drupal_get_path('theme','income').'/tpl/footer.tpl.php');?>