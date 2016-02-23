<?php print render($title_prefix); ?>
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>

<div class="dnd_section_content">
	<div class="dnd_container">
		<div class="dnd_column_dd_span12 ">
		<?php if ($rows): ?>
			<?php if ( empty($title) ): ?>
	    	<?php $title = $view->get_title(); ?>
	  		<?php endif; ?>
			 <?php if ($title): ?>
			<h3 class="column_title_left"><span><?php print t($title); ?></span></h3>
			<?php endif; ?>
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