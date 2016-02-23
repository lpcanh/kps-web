<?php
/**
 * @file
 * Default theme implementation to display a node.
 */
  global $base_root, $base_url;

  if(isset($node->field_image)){
  $imageone = $node->field_image['und'][0]['uri'];
  }else{
  $imageone = '';
  }

  if(!empty($node->field_skills)){
  $portfolio_skills = $node->field_skills['und'][0]['value'];
  } else $portfolio_skills = ' Unknown';

  if(!$page){ ?>

  <?php } else { ?>
  <div class="span8">
    <div>
      <?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1200x715', 'attributes'=>array('alt'=>$title, 'class'=>'wp-post-image'))) ?>
    </div>
  </div>
  <div class="span4 portfolio_item_meta">
    <h5 class="column_title_left"><?php print $title; ?></h5>
    <p class="portfolio_single_description">
      <?php
        hide($content['links']);
        hide($content['field_skills']);
        hide($content['field_image']);
        hide($content['field_pictures']);
        hide($content['comments']);
        hide($content['field_portfolio_category']);
        print render($content);
      ?>
    </p>
    <p class="portfolio_single_detail">
      <span class="portfolio_item_meta_label"><?php print t('Date:') ?></span>
      <span class="portfolio_item_meta_data"><?php print format_date($node->created, 'custom', 'F d, Y');?></span>
    </p>
    <p class="portfolio_single_detail">
      <span class="portfolio_item_meta_label"><?php print t('Skills:') ?></span>
      <span class="portfolio_item_meta_data"><?php print $portfolio_skills; ?></span>
    </p>
    <p class="portfolio_single_detail">
      <span class="portfolio_item_meta_label"><?php print t('Category:') ?></span>
      <span class="portfolio_item_meta_data">
        <?php
          if (!empty($node->field_portfolio_category)) {
            foreach($node->field_portfolio_category['und'] as $categories) {
            $name = $categories['taxonomy_term']->name;
            print '<span>'.$name.'</span>';
            }
          }
        ?>
      </span>
    </p>
    <p class="portfolio_item_view_link">
      <a href="<?php print $node_url; ?>" target="_blank"><?php print t('View work') ?></a>
    </p>
    <p class="post_meta_share portfolio_share_social">
      Share <a class="post_share_facebook dnd_tooltip" href="https://www.facebook.com/sharer/sharer.php?u=http://preview.ab-themes.com/income/portfolio/blisfull-randomness/" title="Share on Facebook" data-gravity="s"><i class="ci_icon-facebook"></i></a>
      <a class="post_share_twitter dnd_tooltip" href="https://twitter.com/home?status=Check+this+http://preview.ab-themes.com/income/portfolio/blisfull-randomness/" title="Share on Twitter" data-gravity="s"><i class="ci_icon-twitter"></i></a>
      <a class="post_share_googleplus dnd_tooltip" href="#" title="Share on Google+" data-gravity="s"><i class="ci_icon-googleplus"></i></a>
      <a class="post_share_linkedin dnd_tooltip" href="https://www.linkedin.com/shareArticle?mini=true&amp;title=Blisfull+Randomness&amp;url=http%3A%2F%2Fpreview.ab-themes.com%2Fincome%2Fportfolio%2Fblisfull-randomness%2F" title="Share on Linkedin" data-gravity="s"><i class="ci_icon-linkedin"></i></a>
    </p>
  </div>

  <?php } ?>