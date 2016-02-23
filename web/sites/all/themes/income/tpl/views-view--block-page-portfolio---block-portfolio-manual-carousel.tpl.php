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
			<div class="dnd-carousel " data-autoplay="0" data-items="1" data-effect="scroll" data-easing="quadratic" data-duration="800">
				<?php print $rows; ?>
				<div class="carousel_navigation">
					<a href="#" class="carousel_prev"><i class="ci_icon-chevron-left"></i></a>
					<a href="#" class="carousel_next"><i class="ci_icon-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>