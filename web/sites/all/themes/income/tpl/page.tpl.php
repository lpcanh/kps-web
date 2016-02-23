<?php
error_reporting(E_ALL);
global $base_url;
$product = strpos (arg(0),'product');
if(arg(0) == 'taxonomy' && arg(1) == 'term') {
	$tid = (int)arg(2);
	$term = taxonomy_term_load($tid);
	$product_taxonomy = strpos($term->vocabulary_machine_name, 'product');
}

if (isset($node->field_page_style['und'][0]['value'])){
	$page_style = $node->field_page_style['und'][0]['value'];
} else {
	$page_style = 'default';
}
if ($page_style == 'default' && $product === false) {
?>
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
<section class="dnd_section_dd page">
	<div class="container">
	<?php
		if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
			print render($tabs);
		endif;
		print $messages;
	?>
	<?php print render($page['content']) ?>
	</div>
</section>
<?php endif; ?>

<?php  if($page['content_section']):?>
	<?php print render($page['content_section']) ?>
<?php endif; ?>
<?php } elseif (($page_style == 'sidebar' || $product >=0) && $page_style != 'comingsoon') { ?>
<?php require_once(drupal_get_path('theme','income').'/tpl/header.tpl.php'); ?>
<section id="title_breadcrumbs_bar">
	<div class="container clearfix">
		<div class="floatleft">
			<?php $title = drupal_get_title(); ?>
			<h1><?php print $title; ?></h1>
			<?php
				if (arg(0) == 'products' && empty($title)) {
					print '<h1>'.arg(1).' : '.arg(2).'</h1>';
				}
			?>
		</div>
		<?php if ($breadcrumb): ?>
		<div class="floatright">
			<div class="breadcrumbs"><?php print $breadcrumb; ?></div>
		</div>
		<?php endif; ?>
	</div>
</section>
<section id="income_main_section" class="with_left_sidebar">
	<div class="container">
		<div class="row">
		<?php  if($page['content']):?>
			<div id="content_with_right_sidebar" class="span9">
			<?php
				if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
					print render($tabs);
				endif;
				print $messages;
				unset($page['content']['system_main']['default_message']);
			?>
			<?php print render($page['content']) ?>
			</div>
			<?php endif; ?>
			<?php  if($page['sidebar_first']):?>
			<aside class="span3 sidebar sidebar_right">
				<?php print render($page['sidebar_first']) ?>
			</aside>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php } else { ?>
<header id="coming_soon_header" class="clearfix">
	<?php
		if($logo){
	?>
	<div id="logo">
		<a href="<?php print $base_url; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>"></a>
	</div>
	<?php } ?>
</header>
<?php  if($page['content']):?>
<div id="wrapper">
<?php
	if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
		print render($tabs);
	endif;
	print $messages;
?>
<?php print render($page['content']) ?>
</div>
<?php endif; ?>

<?php  if($page['content_section']):?>
	<?php print render($page['content_section']) ?>
<?php endif; ?>
<?php } ?>

<?php
if ($page_style != 'comingsoon') {
?>
<?php require_once(drupal_get_path('theme','income').'/tpl/footer.tpl.php');?>
<?php } else {?>
<footer id="ABdev_main_footer">
	<div id="footer_default_container">
		<div id="footer_copyright">
			<div class="container">
				<div class="row">
					<?php $footer_copyright = theme_get_setting('footer_copyright_message', 'income'); ?>
					<?php if(!empty($footer_copyright)) :?>
					<div class="span6 footer_copyright">
						<?php print $footer_copyright; ?>
					</div>
					<?php endif; ?>
					<?php  if($page['footer_right']):?>
					<div id="footer_menu" class="span6 footer_credits right_aligned">
						<?php print render($page['footer_right']) ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php } ?>