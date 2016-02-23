<?php print render($title_prefix); ?>
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>
<div class="textwidget">
	<div class="ABt_testimonials_wrapper picture_bottom picture_top">
		<?php if ($rows): ?>
		<ul class="ABt_testimonials_slide" data-play="1" data-fx="crossfade" data-easing="quadratic" data-direction="left" data-duration="1000" data-pauseonhover="immediate" data-timeoutduration="5000">
		<?php print $rows; ?>
		</ul>
		<div class="ABt_pagination"></div>
		<?php endif; ?>
	</div>
</div>