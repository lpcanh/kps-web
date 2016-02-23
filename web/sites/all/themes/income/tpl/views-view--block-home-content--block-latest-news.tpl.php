<?php print render($title_prefix); ?>
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>
<div class="dnd_section_content">
	<div class="dnd_container">
		<div class="dnd_column_dd_span6 ">
		<?php if ($rows): ?>
			<?php if ( empty($title) ): ?>
	    	<?php $title = $view->get_title(); ?>
	  		<?php endif; ?>
			 <?php if ($title): ?>
			<h3 class="column_title_left"><span><?php print t($title); ?></span></h3>
			<?php endif; ?>
			<?php print $rows; ?>
		<?php endif; ?>
		</div>
		<?php if ($footer): ?>
		<div class="dnd_column_dd_span6 left_column">
			<?php print $footer; ?>
		</div>
		<?php endif; ?>
	</div>
</div>