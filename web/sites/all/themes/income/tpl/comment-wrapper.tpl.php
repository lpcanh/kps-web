<?php
	if ($content['#node']->comment and !($content['#node']->comment == 1 and $content['#node']->comment_count)) { ?>
		<section id="comments_section" class="section_border_top">
			<div id="comments">
				<h3 id="comments-title"><?php print $content['#node']->comment_count; ?> <?php print t('comments')?></h3>
				<ol class="commentlist">
				<?php print render($content['comments']); ?>
				</ol>
				<div id="respond" class="comment-respond">
					<h3 id="reply-title" class="comment-reply-title"><?php print t('Leave a comment') ?></h3>
					<?php
						if (isset($node->rate_product_reviews['#markup'])) {
							print $node->rate_product_reviews['#markup'];
						}
					?>
					<?php print str_replace('resizable', '', render($content['comment_form'])); ?>
				</div>
			</div>
			<!-- #comments -->
		</section>
<?php
	}
?>
