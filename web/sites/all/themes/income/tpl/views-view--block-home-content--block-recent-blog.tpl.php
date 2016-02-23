<?php global $base_url; ?>
<?php print render($title_prefix); ?>
<?php if ($header): ?>
<header>
<?php print $header; ?>
</header>
<?php endif; ?>
<?php if ($rows): ?>
<div class="dnd_section_content">
	<div class="dnd_container">
	<?php print $rows; ?>
	</div>
</div>
<?php endif; ?>

<div class="dnd_section_content aligncenter">
	<div class="dnd_container">
		<div class="dnd_column_dd_span12 ">
			<a href="<?php print $base_url;  ?>/blog" target="_self" class="dnd-button dnd-button_light dnd-button_rounded dnd-button_large "><?php print t('VISIT BLOG') ?></a>
		</div>
	</div>
</div>