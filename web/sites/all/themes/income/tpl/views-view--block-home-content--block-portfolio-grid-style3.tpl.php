<?php print render($title_prefix); ?>
<?php if ($header): ?>
<header>
<?php print $header; ?>
</header>
<?php endif; ?>

<div class="dnd_section_content">
	<div class="dnd_container">
		<div class="dnd_column_dd_span12 ">
			<?php if ($footer): ?>
			<ul class="portfolio_filter option-set clearfix" data-option-key="filter">
				<li><a href="#filter_54be4b2e3f78b" data-option-value="*" class="portfolio_filter_button">All</a></li>
				<?php print $footer; ?>
			</ul>
			<?php endif; ?>
		<?php if ($rows): ?>
			<div class="ABdev_latest_portfolio clearfix">
			<?php print $rows; ?>
			</div>
		<?php endif; ?>
		<?php if ($pager): ?>
    		<?php print $pager; ?>
  		<?php endif; ?>
		</div>
	</div>
</div>