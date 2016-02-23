<?php print render($title_prefix); ?>
<?php if ($header): ?>
<header>
<?php print $header; ?>
</header>
<?php endif; ?>

<?php if ($rows): ?>
<div class="dnd_section_content">
	<div class="dnd_container">
		<div class="dnd_column_dd_span12 ">
			<div class="dnd-carousel " data-autoplay="1" data-items="1" data-effect="scroll" data-easing="linear" data-duration="500">
			<?php print $rows; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>