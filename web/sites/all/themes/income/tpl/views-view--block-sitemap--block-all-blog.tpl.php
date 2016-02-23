<?php print render($title_prefix); ?>
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>

<div class="dnd_section_content">
	<div class="dnd_container">
		<div class="dnd_column_dd_span12 ">
			<?php if ( empty($title) ): ?>
			<?php $title = $view->get_title(); ?>
			<?php endif; ?>
			<?php if ($title): ?>
			<h4><?php print t($title); ?></h4>
			<?php endif; ?>
			<?php if ($rows): ?>
			<?php print $rows; ?>
			<?php endif; ?>
		</div>
	</div>
</div>