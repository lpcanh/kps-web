<?php print render($title_prefix); ?>
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>
<div class="woocommerce woocommerce-page">
<?php if ($rows): ?>
	<ul class="products">
		<?php print $rows; ?>
	</ul>
<?php endif; ?>
</div>
<?php if ($pager): ?>
    <?php print $pager; ?>
<?php endif; ?>