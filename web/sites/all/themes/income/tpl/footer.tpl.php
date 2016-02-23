<?php

if (isset($node->field_footer_style['und'][0]['value']))

	{

		$footer_style = $node->field_footer_style['und'][0]['value'];

	} else $footer_style = theme_get_setting('footer_style', 'income');

	if(empty($footer_style))

		$footer_style = 'footer1';

?>

<?php if ($footer_style == 'footer1') { ?>

<footer id="ABdev_main_footer">

	<div id="footer_columns">

		<div class="container">

			<div class="row">

				<?php  if($page['footer']):?>

				<?php print render($page['footer']); ?>

				<?php endif; ?>

			</div>

		</div>

	</div>



	<div id="footer_copyright">

		<div class="container">

			<div class="row">

				<?php $footer_copyright = theme_get_setting('footer_copyright_message', 'income'); ?>

				<?php if(!empty($footer_copyright)) :?>

				<div class="span7 footer_copyright">

					<?php print $footer_copyright; ?>

				</div>

				<?php endif; ?>

				<?php  if($page['footer_right']):?>

				<div id="footer_menu" class="span5">

					<?php print render($page['footer_right']) ?>

				</div>

				<?php endif; ?>

			</div>

		</div>

	</div>

</footer>

<?php } elseif ($footer_style == 'footer2') { ?>

<footer id="ABdev_main_footer">

	<div id="footer_onepage_container">

		<div class="container">

			<a href="#" id="back_to_top" title="Back to top"><i class="ci_icon-chevron-up"></i></a>

			<?php $footer_copyright = theme_get_setting('footer_copyright_message', 'income'); ?>

			<?php if(!empty($footer_copyright)) :?>

			<div class="footer_onepage_copyright">

				<?php print $footer_copyright; ?>

			</div>

			<?php endif; ?>

			<?php  if($page['footer_bottom']):?>

			<?php print render($page['footer_bottom']) ?>

			<?php endif; ?>

		</div>

	</div>

</footer>

<?php } else { ?>

<footer id="ABdev_main_footer">

	<div id="footer_landing_container">

		<div class="container">

			<?php $footer_copyright = theme_get_setting('footer_copyright_message', 'income'); ?>

			<?php if(!empty($footer_copyright)) :?>

			<div class="span7 footer_landing_copyright">

				<?php print $footer_copyright; ?>

			</div>

			<?php endif; ?>

			<a href="#" id="back_to_top" title="Back to top"><i class="ci_icon-chevron-up"></i></a>

		</div>

	</div>

</footer>

<?php } ?>