<?php require_once(drupal_get_path('theme','income').'/tpl/header.tpl.php'); ?>

<?php
if (isset($node->field_sidebar['und'][0]['value'])){
	$sidebar = $node->field_sidebar['und'][0]['value'];
} else $sidebar = 'fullwidth';

if (isset($node->field_portfolio_description['und'][0]['value'])){
	$description = $node->field_portfolio_description['und'][0]['value'];
} else $description = 'no';

if (isset($node->field_number_columns['und'][0]['value'])){
	$columns = $node->field_number_columns['und'][0]['value'];
} else $columns = 'portfolio_single_column';

?>
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
<section>
<?php if ($columns != 'portfolio_5column') {?>
	<div class="container">
		<div class="row <?php print $columns; ?>">
		<?php if ($sidebar == 'fullwidth' || $columns == 'portfolio_4column') { ?>
			<div <?php if ($columns == 'portfolio_single_column') print 'id="portfolio_single_column"'; ?>class="portfolio_full_width span12 content">
				<?php
					if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
						print render($tabs);
					endif;
					print $messages;
				?>
				<?php  if($page['content']):?>
				<?php print render($page['content']) ?>
				<?php endif; ?>
			</div>
		<?php } elseif ($sidebar == 'sidebarleft') { ?>
			<div <?php if ($columns == 'portfolio_single_column') print 'id="portfolio_single_column"'; ?>  class="portfolio_left_sidebar span9 content content_with_left_sidebar">
				<?php
					if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
						print render($tabs);
					endif;
					print $messages;
				?>
				<?php  if($page['content']):?>
				<?php print render($page['content']) ?>
				<?php endif; ?>
			</div>
			<?php  if($page['sidebar_first']):?>
			<aside class="span3 sidebar sidebar_left">
				<?php print render($page['sidebar_first']) ?>
			</aside>
			<?php endif; ?>
		<?php } else { ?>
			<div <?php if ($columns == 'portfolio_single_column') print 'id="portfolio_single_column"'; ?> class="portfolio_right_sidebar span9 content content_with_right_sidebar">
				<?php
					if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
						print render($tabs);
					endif;
					print $messages;
				?>
				<?php  if($page['content']):?>
				<?php print render($page['content']) ?>
				<?php endif; ?>
			</div>
			<?php  if($page['sidebar_first']):?>
			<aside class="span3 sidebar sidebar_right">
				<?php print render($page['sidebar_first']) ?>
			</aside>
			<?php endif; ?>
		<?php } ?>
		</div>
	</div>

<?php } else { ?>
	<div class="container_fullwidth">
	<?php
		if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
		print render($tabs);
		endif;
		print $messages;
	?>
	<?php  if($page['content']):?>
	<?php print render($page['content']) ?>
	<?php endif; ?>
	</div>
<?php } ?>
</section>

<?php  if($page['content_section']):?>
	<?php print render($page['content_section']) ?>
<?php endif; ?>
<?php

if ($description == 'yes' && $columns == 'portfolio_2column') {
	$des = 'portfolio_2columns_description';
} elseif ($description == 'yes' && $columns == 'portfolio_3column') {
		$des = 'portfolio_3columns_description';
} elseif ($description == 'yes' && $columns == 'portfolio_4column') {
	$des = 'portfolio_4columns_description';
} else $des = '';
?>
<input type="hidden" id="portfolio_description" value="<?php print $des; ?>">
<?php require_once(drupal_get_path('theme','income').'/tpl/footer.tpl.php');?>