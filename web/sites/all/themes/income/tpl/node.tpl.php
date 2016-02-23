<?php
/**
 * @file
 * Default theme implementation to display a node.
 */
global $base_root, $base_url;

  $style = 'large'; //image style
  if(isset($node->field_image)){
  $imageone = @$node->field_image['und'][0]['uri'];
  }else{
  $imageone = '';
  }

  if(!$page){ ?>

  <?php
  } else {
  ?>
  <?php if($node->type == 'article'){ ?>
  <div class="single_post post_content post_default">
    <div class="post post_main">
      <?php if(isset($node->field_image) && !empty($node->field_image)){ ?>
        <?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1200x715', 'attributes'=>array('alt'=>$title)));?>
      <?php } else print '<h2>'.$title.'</h2>'; ?>
      <div class="postmeta-above clearfix">
        <span class="post_author">
          <?php print t('By'); ?>
          <span><?php print $name; ?><i class="ci_icon-moonfull"></i></span>
          <span class="post_date_inner"> <?php print format_date($node->created, 'custom', 'd F, Y');?></span>
        </span>
      </div>
      <?php
        hide($content['comments']);
        hide($content['links']);
        hide($content['field_tags']);
        hide($content['field_image']);
        hide($content['field_categories']);
        print render($content);
      ?>
      <?php if(isset($node->field_tags) && !empty($node->field_tags)){ ?>
      <div class="postmeta-tags">
        <p class="post_meta_tags">
          <i class="ci_icon-tags"></i>
          <?php
          if (!empty($node->field_tags)) {
          foreach($node->field_tags['und'] as $tags) {
          $tid = $tags['taxonomy_term']->tid;
          $name = $tags['taxonomy_term']->name;
          $taxonomy_term_url = drupal_lookup_path('alias', 'taxonomy/term/'.$tid);
          print '<a href="'.$taxonomy_term_url.'">'.$name.'</a>';
          }
          }
          ?>
        </p>
      </div>
      <?php } ?>
      <div class="postmeta-under clearfix">
        <div class="postmeta-share">
          <p class="post_meta_share">
            <span><?php print t('Share'); ?></span>
            <a class="post_share_twitter dnd_tooltip" href="https://twitter.com/home?status=<?php print $title ?>+<?php print $base_root.$node_url; ?>" title="Share on Twitter" data-gravity="s"><i class="ci_icon-twitter"></i></a>
            <a class="post_share_facebook dnd_tooltip" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $base_root.$node_url; ?>" title="Share on Facebook" data-gravity="s"><i class="ci_icon-facebook"></i></a>
            <a class="post_share_googleplus dnd_tooltip" href="https://plus.google.com/share?url=<?php print $base_root.$node_url; ?>" title="Share on Google+" data-gravity="s"><i class="ci_icon-googleplus"></i></a>
            <a class="post_share_linkedin dnd_tooltip" href="https://www.linkedin.com/shareArticle?mini=true&amp;title=<?php print $title; ?>&amp;url=<?php print $base_root.$node_url; ?>" title="Share on Linkedin" data-gravity="s"><i class="ci_icon-linkedin"></i></a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- End main content -->
  <?php print render($content['comments']);?>
<?php
  } else {
    print render($content);
  }
}

?>