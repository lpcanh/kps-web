<div class="<?php print $classes; ?>">
<?php print render($title_prefix); ?>
	<div id="income_products_sorting_view_bar" class="clearfix">
		<?php if ($exposed): ?>
		<div class="view-filters">
			<?php print $exposed; ?>
		</div>
		<?php endif; ?>
		<?php if ($header): ?>
		<div class="select-catalog">
		<?php print $header; ?>
		</div>
		<?php endif; ?>
	</div>
	<?php if ($rows): ?>
		<?php print $rows; ?>
	<?php endif; ?>
	<?php if ($pager): ?>
	    <?php print $pager; ?>
	<?php endif; ?>
</div>

