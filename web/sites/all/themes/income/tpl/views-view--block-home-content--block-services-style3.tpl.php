<?php print render($title_prefix); ?>
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>
<div class="dnd_section_content">
	<div class="dnd_container">
	<?php print $rows; ?>
	</div>
</div>
<?php endif; ?>