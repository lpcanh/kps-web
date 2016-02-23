<?php require_once(drupal_get_path('theme','income').'/tpl/header.tpl.php'); ?>

<?php
if (isset($_GET['style'])) {
	$blog_style = $_GET['style'];
} else {
	$blog_style = theme_get_setting('blog_style', 'income');
	if(empty($blog_style))
		$blog_style = 'style1';
}

if (isset($_GET['layout'])) {
	$blog_layout = $_GET['layout'];
} elseif (isset($node->field_layout['und'][0]['value'])){
	$blog_layout = $node->field_layout['und'][0]['value'];
} else $blog_layout = theme_get_setting('blog_layout', 'income');
	if(empty($blog_layout))
		$blog_layout = 'sidebarright';
	if(arg(0) == 'node' && $blog_layout == 'fullwidth')
		$blog_layout = 'sidebarright';

if (isset($_GET['grid'])) {
	$grid = $_GET['grid'];
} else {
	$grid = theme_get_setting('blog_masonry', 'income');
if(empty($blog_style))
	$grid = '2col';
}
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
<?php  if($page['content']):?>
<section>
	<div class="container">
	<?php if ($blog_style == 'style1' || $blog_style == 'style2' || $blog_style == 'style3' || $blog_style == 'ministyle') { ?>
		<div class="row">
		<?php if ($blog_layout == 'fullwidth' && $blog_style == 'ministyle'){ ?>
			<div class="blog_category_index blog_category_index_none_mini span12 content_with_right_sidebar">
			<?php
			if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
				print render($tabs);
			endif;
			unset($page['content']['system_main']['default_message']);
			?>
			<?php print $messages; ?>
			<?php print render($page['content']) ?>
			</div><!-- end main-content -->
			<?php } elseif ($blog_layout == 'fullwidth' && $blog_style != 'ministyle') { ?>
			<div class="blog_category_index blog_category_index_right span12 content_with_left_sidebar">
				<?php
				if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
					print render($tabs);
				endif;
				unset($page['content']['system_main']['default_message']);
				?>
				<?php print $messages; ?>
				<?php print render($page['content']) ?>
			</div><!-- end main-content -->
			<?php } elseif ($blog_layout == 'sidebarright' && $blog_style != 'ministyle') {?>
			<div class="blog_category_index blog_category_index_right span9 content_with_right_sidebar">
				<?php
					if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
						print render($tabs);
					endif;
					unset($page['content']['system_main']['default_message']);
				?>
				<?php print $messages; ?>
				<?php print render($page['content']) ?>
			</div><!-- end main-content -->
			<?php  if($page['sidebar_first']):?>
			<aside class="span3 sidebar sidebar_right">
				<?php print render($page['sidebar_first']) ?>
			</aside>
			<?php endif; ?>
			<?php } elseif ($blog_layout == 'sidebarleft' && $blog_style != 'ministyle') { ?>
			<?php  if($page['sidebar_first']):?>
			<aside class="span3 sidebar sidebar_left">
				<?php print render($page['sidebar_first']) ?>
			</aside>
			<?php endif; ?>
			<div class="blog_category_index blog_category_index_right span9 content_with_left_sidebar">
				<?php
				if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
					print render($tabs);
				endif;
				unset($page['content']['system_main']['default_message']);
				?>
				<?php print $messages; ?>
				<?php print render($page['content']) ?>
			</div><!-- end main-content -->
			<?php } elseif ($blog_layout == 'sidebarright' && $blog_style == 'ministyle') { ?>
			<div class="blog_category_index blog_category_index_right_mini span9 content_with_right_sidebar">
				<?php print render($page['content']) ?>
			</div><!-- end main-content -->
			<?php  if($page['sidebar_first']):?>
			<aside class="span3 sidebar sidebar_right">
				<?php print render($page['sidebar_first']) ?>
			</aside>
			<?php endif; ?>
			<?php } else { ?>
			<?php  if($page['sidebar_first']):?>
			<aside class="span3 sidebar sidebar_left">
				<?php print render($page['sidebar_first']) ?>
			</aside>
			<?php endif; ?>
			<div class="blog_category_index blog_category_index_right_mini span9 content_with_left_sidebar">
				<?php
				if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
					print render($tabs);
				endif;
				unset($page['content']['system_main']['default_message']);
				?>
				<?php print $messages; ?>
				<?php print render($page['content']) ?>
			</div><!-- end main-content -->
			<?php } ?>
		</div>
		<?php } elseif ($blog_style == 'timeline') { ?>
		<div id="timeline_posts" class="clearfix">
			<?php
			if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
				print render($tabs);
			endif;
			?>
			<?php print render($page['content']) ?>
		</div>
		<?php } elseif ($blog_style == 'mini2col') { ?>
		<div id="mini2_posts" class="clearfix row">
			<?php
			if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
				print render($tabs);
			endif;
			print $messages;
			?>
			<?php print render($page['content']) ?>
		</div>
		<?php } elseif ($blog_style == '2sidebar') { ?>
		<div class="row">
			<?php  if($page['sidebar_first']):?>
			<aside class="span3 sidebar dual_sidebar sidebar_left">
				<?php print render($page['sidebar_first']) ?>
			</aside>
			<?php endif; ?>
			<div class="blog_category_index blog_category_index_dual span6 content_with_dual_sidebars">
				<?php
				if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
					print render($tabs);
				endif;
				print $messages;
				?>
				<?php print render($page['content']) ?>
			</div><!-- end main-content -->
			<?php  if($page['sidebar_second']):?>
			<aside class="span3 sidebar dual_sidebar sidebar_right">
				<?php print render($page['sidebar_second']) ?>
			</aside>
			<?php endif; ?>
		</div>
		<?php } else { ?>
		<div id="grid_posts" class="clearfix row">
			<?php if ($blog_layout == 'fullwidth' || $grid == '4col') { ?>
			<?php
			if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
				print render($tabs);
			endif;
			print $messages;
			?>
			<?php print render($page['content']) ?>
			<?php } elseif ($blog_layout == 'sidebarleft') { ?>
			<?php  if($page['sidebar_first']):?>
			<aside class="span3 sidebar sidebar_left">
				<?php print render($page['sidebar_first']) ?>
			</aside>
			<?php endif; ?>
			<?php print render($page['content']) ?>
			<?php } else { ?>
			<?php  if($page['sidebar_first']):?>
			<aside class="span3 sidebar sidebar_right">
				<?php print render($page['sidebar_first']) ?>
			</aside>
			<?php endif; ?>
			<?php
			if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
				print render($tabs);
			endif;
			print $messages;
			?>
			<?php print render($page['content']) ?>
			<?php } ?>
		</div>
		<?php } ?>
	</div>
</section>
<?php endif; ?>

<?php require_once(drupal_get_path('theme','income').'/tpl/footer.tpl.php');?>