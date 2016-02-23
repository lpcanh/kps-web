<?php print render($title_prefix); ?>
<?php if ($header): ?>
	<header>
	<?php print $header; ?>
	</header>
<?php endif; ?>

<div class="dnd_section_content">
	<div class="dnd_container">
		<div class="dnd_column_dd_span12 ">
			<?php if($rows): ?>
			<div class="ABp_latest_portfolio">
				<ul class="clearfix">
					<?php print $rows; ?>
				</ul>
				<div class="portfolio_navigation">
					<a href="#" class="portfolio_prev"><i class="ci_icon-chevron-left"></i></a>
					<a href="#" class="portfolio_next"><i class="ci_icon-chevron-right"></i></a>
				</div>
			</div>
		<?php endif; ?>
		</div>
	</div>
</div>