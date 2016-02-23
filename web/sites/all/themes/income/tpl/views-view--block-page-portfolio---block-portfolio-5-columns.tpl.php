<?php print render($title_prefix); ?>

<?php if ($header): ?>
<ul class="portfolio_filter option-set clearfix" data-option-key="filter">
	<li><a href="#filter_54be4b2e3f78b" data-option-value="*" class="portfolio_filter_button selected">All</a></li>
	<?php print $header; ?>
</ul>
<?php endif; ?>
<?php if ($rows): ?>
<div class="ABdev_latest_portfolio portfolio_items clearfix">
	<?php print $rows; ?>
</div>
<?php endif; ?>
