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
<section id="income_main_section" class="single-product woocommerce woocommerce-page with_right_sidebar">
	<div class="container">
		<div class="row">
			<div class="span12 income_single_product_details">
				<?php
					if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
						print render($tabs);
					endif;
					print $messages;
					unset($page['content']['system_main']['default_message']);
				?>
				<?php if($page['single_product']): ?>
				<div itemscope itemtype="http://schema.org/Product" class="product">
				<?php print render($page['single_product']) ?>
				<?php print render($page['content']); ?>
				<?php if($page['related_products']): ?>
				<?php print render($page['related_products']); ?>
				<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<?php  if($page['content_section']):?>
	<?php print render($page['content_section']) ?>
<?php endif; ?>
<?php require_once(drupal_get_path('theme','income').'/tpl/footer.tpl.php');?>