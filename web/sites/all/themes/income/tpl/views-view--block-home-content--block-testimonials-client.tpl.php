<?php print render($title_prefix); ?>
<?php if ($header): ?>
<header>
<?php print $header; ?>
</header>
<?php endif; ?>
<div class="dnd_section_content">
	<div class="dnd_container">
		<div class="dnd_column_dd_span12 ">
		<?php if ($rows): ?>
			<div class="ABt_testimonials_wrapper  testimonials_big">
				<ul class="ABt_testimonials_slide" data-play="1" data-fx="crossfade" data-easing="swing" data-direction="left" data-duration="1000" data-pauseonhover="immediate" data-timeoutduration="5000">
				<?php print $rows; ?>
				</ul>
				<div class="ABt_pagination"></div>
			</div>
		<?php endif; ?>
		</div>
	</div>
</div>