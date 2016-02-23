<?php print render($title_prefix); ?>
<?php if ($header): ?>
<header>
<?php print $header; ?>
</header>
<?php endif; ?>
<div class="dnd_section_content">
	<div class="dnd_container">
		<?php if ($rows): ?>
		<div class="dnd_column_dd_span4 white_text_h3 dnd-animo" data-animation="fadeInLeft" data-duration="1000" data-delay="100">
			<span class="clear  " style="height:60px;display:block;"></span>
			<?php print $rows; ?>
		</div>
		<?php endif; ?>
		<?php if ($footer): ?>
		<?php print $footer; ?>
		<?php endif; ?>
		<?php if ($attachment_after): ?>
		<div class="dnd_column_dd_span4 white_text_h3 dnd-animo" data-animation="fadeInRight" data-duration="1000" data-delay="100">
			<span class="clear  " style="height:60px;display:block;"></span>
      		<?php print $attachment_after; ?>
      	</div>
  		<?php endif; ?>
	</div>
</div>