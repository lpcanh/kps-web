<?php
/**
 * @file
 * Default theme implementation to display a node.
 */
global $base_root, $base_url;

  $style = 'large'; //image style
  if(isset($node->field_image)){
  $imageone = $node->field_image['und'][0]['uri'];
  }else{
  $imageone = '';
  }

  if($node->field_blog_format){
  $blog_format = $node->field_blog_format['und'][0]['value'];
  }else{
  $blog_format = 'ci_icon-rawaccesslogs';
  }

  if (isset($_GET['style'])) {
  $blog_style = $_GET['style'];
  } else {
    $blog_style = theme_get_setting('blog_style', 'income');
    if(empty($blog_style))
      $blog_style = 'style1';
  }

  if(!$page){ ?>
  <?php
    if (isset($_GET['layout'])) {
    $blog_layout = $_GET['layout'];
    } else $blog_layout = theme_get_setting('blog_layout', 'income');
      if(empty($blog_layout))
        $blog_layout = 'sidebarright';
  ?>
  <?php if(!empty($blog_style) && $blog_style=='style1'){ ?>
  <div class="blog_category_index blog_category_index_right post_wrapper clearfix">
    <div class="post_content">
      <div class="post_badges">
        <div class="post_info">
          <div class="post_date">
            <span class="post_main_date"><?php print format_date($node->created, 'custom', 'd');?></span>
            <span class="post_main_month"><?php print format_date($node->created, 'custom', 'M, Y');?></span>
          </div>
          <div class="post_type">
            <i class="<?php print $blog_format; ?>"></i>
          </div>
        </div>
      </div>
      <div class="post_main">
        <?php if ($blog_format == 'ci_icon-youtube') { ?>
        <div class="videoWrapper-youtube">
          <?php print render($content['field_video_url']); ?>
        </div>
        <?php } elseif ($blog_format == 'ci_icon-soundcloud') { ?>
        <?php print render($content['field_soundcloud_url']); ?>
        <?php } elseif ($blog_format == 'ci_icon-picture') { ?>
        <?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1200x715', 'attributes'=>array('alt'=>$title, 'class'=>'wp-post-image'))) ?>
        <?php } else {} ?>
        <div class="post_main_inner_wrapper">
          <h5><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
          <span class="post_author"><?php print t('By'); ?>
            <span><?php print $name; ?><i class="ci_icon-moonfull"></i></span>
            <span class="post_date_inner"> <?php print format_date($node->created, 'custom', 'd F, Y');?></span>
          </span>
          <div class="post_padding">
            <p>
              <?php
                hide($content['links']);
                hide($content['field_tags']);
                hide($content['field_video_url']);
                hide($content['field_blog_format']);
                hide($content['field_soundcloud_url']);
                hide($content['comments']);
                hide($content['field_categories']);
                hide($content['field_layout']);
                print render($content);
              ?>
            </p>
          </div>
          <div class="post-readmore">
            <a href="<?php print $node_url; ?>" class="more-link"><?php print t('Read More'); ?></a>
            <p class="post_meta_tags">
              <i class="ci_icon-comment"></i><?php print $comment_count;?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php } elseif ($blog_style=='style2'){ ?>
  <div class="blog_category_index_right2 clearfix">
    <div class="post_content">
      <?php if ($user_picture) { ?>
      <div class="post_badges">
      <?php print $user_picture; ?>
      </div>
      <?php } ?>
      <div class="post_main">
        <?php if ($blog_format == 'ci_icon-youtube') { ?>
        <div class="videoWrapper-youtube">
          <?php print render($content['field_video_url']); ?>
        </div>
        <?php } elseif ($blog_format == 'ci_icon-soundcloud') { ?>
        <?php print render($content['field_soundcloud_url']); ?>
        <?php } elseif ($blog_format == 'ci_icon-picture') { ?>
        <?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1200x715', 'attributes'=>array('alt'=>$title, 'class'=>'wp-post-image'))) ?>
        <?php } else {} ?>
        <div class="post_main_inner_wrapper">
          <div class="post_info">
            <div class="post_date">
              <span class="post_main_date"><?php print format_date($node->created, 'custom', 'd');?></span>
              <span class="post_main_month"><?php print format_date($node->created, 'custom', 'M, Y');?></span>
            </div>
            <div class="post_type">
              <i class="<?php print $blog_format; ?>"></i>
            </div>
          </div>
          <h5><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
          <span class="post_author">
            <?php print t('By'); ?>
            <span><?php print $name; ?><i class="ci_icon-moonfull"></i></span>
            <span class="post_date_inner"> <?php print format_date($node->created, 'custom', 'd F, Y');?></span>
          </span>
          <div class="post_padding">
            <p>
              <?php
                hide($content['links']);
                hide($content['field_tags']);
                hide($content['field_video_url']);
                hide($content['field_blog_format']);
                hide($content['field_soundcloud_url']);
                hide($content['comments']);
                hide($content['field_categories']);
                hide($content['field_layout']);
                print render($content);
              ?>
            </p>
          </div>
          <div class="post-readmore">
            <a href="<?php print $node_url; ?>" class="more-link"><?php print t('Read More'); ?></a>
            <p class="post_meta_tags">
              <i class="ci_icon-comment"></i><?php print $comment_count;?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } elseif ($blog_style == 'style3') { ?>
  <div class="blog_category_index blog_category_index_right3 post_wrapper clearfix">
    <div class="post_content">
      <div class="post_badges">
      </div>
      <div class="post_main">
        <?php if ($blog_format == 'ci_icon-youtube') { ?>
        <div class="videoWrapper-youtube">
          <?php print render($content['field_video_url']); ?>
        </div>
        <?php } elseif ($blog_format == 'ci_icon-soundcloud') { ?>
        <?php print render($content['field_soundcloud_url']); ?>
        <?php } elseif ($blog_format == 'ci_icon-picture') { ?>
        <?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1200x715', 'attributes'=>array('alt'=>$title, 'class'=>'wp-post-image'))) ?>
        <?php } else {} ?>
        <div class="post_main_inner_wrapper">
          <div class="post_info">
            <div class="post_date">
              <span class="post_main_date"><?php print format_date($node->created, 'custom', 'd');?></span>
              <span class="post_main_month"><?php print format_date($node->created, 'custom', 'M, Y');?></span>
            </div>
            <div class="post_type">
              <i class="<?php print $blog_format; ?>"></i>
            </div>
          </div>
          <h5><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
          <span class="post_author">
            <?php print t('By'); ?>
            <span><?php print $name; ?><i class="ci_icon-moonfull"></i></span>
            <span class="post_date_inner"> <?php print format_date($node->created, 'custom', 'd F, Y');?></span>
          </span>
          <div class="post_padding">
            <p>
              <?php
                hide($content['links']);
                hide($content['field_tags']);
                hide($content['field_video_url']);
                hide($content['field_blog_format']);
                hide($content['field_soundcloud_url']);
                hide($content['comments']);
                hide($content['field_categories']);
                hide($content['field_layout']);
                print render($content);
              ?>
            </p>
          </div>
          <div class="post-readmore">
            <a href="<?php print $node_url; ?>" class="more-link"><?php print t('Read More'); ?></a>
            <p class="post_meta_tags">
              <i class="ci_icon-comment"></i><?php print $comment_count;?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } elseif ($blog_style == 'ministyle') { ?>
  <div class="blog_category_index_right_mini post_wrapper clearfix">
    <div class="post_content">
      <div class="post_main">
        <div class="row">
          <?php if ($blog_format == 'ci_icon-rawaccesslogs') { ?>
          <div class="span12 post_main_inner_wrapper">
            <div class="post_type">
              <i class="<?php print $blog_format; ?>"></i>
            </div>
            <h5><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
            <span class="post_author">
              <?php print t('By'); ?>
              <span><?php print $name; ?><i class="ci_icon-moonfull"></i></span>
              <span class="post_date_inner"><?php print format_date($node->created, 'custom', 'd F, Y');?></span>
            </span>
            <div class="post_padding">
              <p>
                <?php
                  hide($content['links']);
                  hide($content['field_tags']);
                  hide($content['field_video_url']);
                  hide($content['field_blog_format']);
                  hide($content['field_soundcloud_url']);
                  hide($content['comments']);
                  hide($content['field_categories']);
                  hide($content['field_layout']);
                  print render($content);
                ?>
              </p>
            </div>
            <div class="post-readmore">
              <a href="<?php print $node_url; ?>" class="more-link"><?php print t('Read More'); ?></a>
              <p class="post_meta_tags">
                <i class="ci_icon-comment"></i><?php print $comment_count;?>
              </p>
            </div>
          </div>
          <?php } else { ?>
          <div class="span5">
            <?php if ($blog_format == 'ci_icon-youtube') { ?>
            <div class="videoWrapper-youtube">
              <?php print render($content['field_video_url']); ?>
            </div>
            <?php } elseif ($blog_format == 'ci_icon-soundcloud') { ?>
            <?php print render($content['field_soundcloud_url']); ?>
            <?php } elseif ($blog_format == 'ci_icon-picture') { ?>
            <?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1200x715', 'attributes'=>array('alt'=>$title, 'class'=>'wp-post-image'))) ?>
            <?php } else {} ?>
          </div>
          <div class="span7 post_main_inner_wrapper">
            <div class="post_type">
              <i class="<?php print $blog_format; ?>"></i>
            </div>
            <h5><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
            <span class="post_author">
              <?php print t('By'); ?>
              <span><?php print $name; ?><i class="ci_icon-moonfull"></i></span>
              <span class="post_date_inner"> <?php print format_date($node->created, 'custom', 'd F, Y');?></span>
            </span>
            <div class="post_padding">
              <p>
                <?php
                hide($content['links']);
                hide($content['field_tags']);
                hide($content['field_video_url']);
                hide($content['field_blog_format']);
                hide($content['field_soundcloud_url']);
                hide($content['comments']);
                hide($content['field_categories']);
                hide($content['field_layout']);
                print render($content);
              ?>
              </p>
            </div>
            <div class="post-readmore">
              <a href="<?php print $node_url; ?>" class="more-link"><?php print t('Read More'); ?></a>
              <p class="post_meta_tags">
                <i class="ci_icon-comment"></i><?php print $comment_count;?>
              </p>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <?php } elseif ($blog_style == 'timeline') {?>
  <div class="timeline_post">
    <?php if ($blog_format == 'ci_icon-youtube') { ?>
    <div class="videoWrapper-youtube">
      <?php print render($content['field_video_url']); ?>
    </div>
    <?php } elseif ($blog_format == 'ci_icon-soundcloud') { ?>
    <?php print render($content['field_soundcloud_url']); ?>
    <?php } elseif ($blog_format == 'ci_icon-picture') { ?>
    <?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1200x715', 'attributes'=>array('alt'=>$title, 'class'=>'wp-post-image'))) ?>
    <?php } else {} ?>
    <div class="post_main_inner_wrapper">
      <h5><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
      <div class="timeline_postmeta">
        <span class="post_author">
          <?php print t('By'); ?>
          <span><?php print $name; ?><i class="ci_icon-moonfull"></i></span>
          <span class="post_date_inner"> <?php print format_date($node->created, 'custom', 'd F, Y');?></span>
        </span>
      </div>
      <div class="timeline_content">
        <p>
          <?php
            hide($content['links']);
            hide($content['field_tags']);
            hide($content['field_video_url']);
            hide($content['field_blog_format']);
            hide($content['field_soundcloud_url']);
            hide($content['comments']);
            hide($content['field_categories']);
            hide($content['field_layout']);
            print render($content);
          ?>
        </p>
      </div>
      <div class="post-readmore">
        <a href="<?php print $node_url; ?>" class="more-link"><?php print t('Read More'); ?></a>
        <p class="post_meta_comments">
          <i class="ci_icon-comment"></i><?php print $comment_count;?>
        </p>
      </div>
    </div>
  </div>
  <?php } elseif ($blog_style == 'mini2col') { ?>
  <div class="mini2_post span6">
    <div class="row">
      <?php if ($blog_format == 'ci_icon-rawaccesslogs') { ?>
      <div class="span12 post_main_inner_wrapper">
        <div class="post_type">
          <i class="<?php print $blog_format; ?>"></i>
        </div>
        <h5><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
        <span class="post_info"><span class="post_date_inner"><?php print format_date($node->created, 'custom', 'd F, Y');?> </span></span>
        <div class="post_content">
          <?php
            hide($content['links']);
            hide($content['field_tags']);
            hide($content['field_video_url']);
            hide($content['field_blog_format']);
            hide($content['field_soundcloud_url']);
            hide($content['comments']);
            hide($content['field_categories']);
            hide($content['field_layout']);
            print render($content);
          ?>
        </div>
      </div>
      <?php } else { ?>
      <div class="span6">
        <?php if ($blog_format == 'ci_icon-youtube') { ?>
        <div class="videoWrapper-youtube">
          <?php print render($content['field_video_url']); ?>
        </div>
        <?php } elseif ($blog_format == 'ci_icon-soundcloud') { ?>
        <?php print render($content['field_soundcloud_url']); ?>
        <?php } elseif ($blog_format == 'ci_icon-picture') { ?>
        <?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1200x715', 'attributes'=>array('alt'=>$title, 'class'=>'wp-post-image'))) ?>
        <?php } else {} ?>
      </div>
      <div class="span6 post_main_inner_wrapper">
        <div class="post_type">
          <i class="<?php print $blog_format; ?>"></i>
        </div>
        <h5><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
        <span class="post_info"><span class="post_date_inner"><?php print format_date($node->created, 'custom', 'd F, Y');?></span></span>
        <div class="post_content">
          <?php
            hide($content['links']);
            hide($content['field_tags']);
            hide($content['field_video_url']);
            hide($content['field_blog_format']);
            hide($content['field_soundcloud_url']);
            hide($content['comments']);
            hide($content['field_categories']);
            hide($content['field_layout']);
            print render($content);
          ?>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <?php } elseif ($blog_style == '2sidebar') { ?>
  <div class="post_wrapper clearfix">
    <div class="post_content">
      <div class="post_main">
        <?php if ($blog_format == 'ci_icon-youtube') { ?>
        <div class="videoWrapper-youtube">
          <?php print render($content['field_video_url']); ?>
        </div>
        <?php } elseif ($blog_format == 'ci_icon-soundcloud') { ?>
        <?php print render($content['field_soundcloud_url']); ?>
        <?php } elseif ($blog_format == 'ci_icon-picture') { ?>
        <?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1200x715', 'attributes'=>array('alt'=>$title, 'class'=>'wp-post-image'))) ?>
        <?php } else {} ?>
        <div class="post_main_inner_wrapper">
          <h5><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
          <span class="post_author">
            <?php print t('By'); ?>
            <span><?php print $name; ?><i class="ci_icon-moonfull"></i></span>
            <span class="post_date_inner"> <?php print format_date($node->created, 'custom', 'd F, Y');?></span>
          </span>
          <div class="post_padding">
            <p>
              <?php
                hide($content['links']);
                hide($content['field_tags']);
                hide($content['field_video_url']);
                hide($content['field_blog_format']);
                hide($content['field_soundcloud_url']);
                hide($content['comments']);
                hide($content['field_categories']);
                hide($content['field_layout']);
                print render($content);
              ?>
            </p>
          </div>
          <div class="post-readmore">
            <a href="<?php print $node_url; ?>" class="more-link"><?php print t('Read More'); ?></a>
            <p class="post_meta_tags">
              <i class="ci_icon-comment"></i><?php print $comment_count;?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } elseif ($blog_style == 'masonry'){ ?>
    <?php
    if (isset($_GET['grid'])) {
    $grid = $_GET['grid'];
    } else {
      $grid = theme_get_setting('blog_masonry', 'income');
      if(empty($blog_style))
        $grid = '2col';
    }
    if ($grid == '2col' && $blog_layout == 'fullwidth') {
    ?>
    <div class="blog_category_index_masonry2 no_sidebar span6 grid_post">
      <?php if ($blog_format == 'ci_icon-youtube') { ?>
      <div class="videoWrapper-youtube">
        <?php print render($content['field_video_url']); ?>
      </div>
      <?php } elseif ($blog_format == 'ci_icon-soundcloud') { ?>
      <?php print render($content['field_soundcloud_url']); ?>
      <?php } elseif ($blog_format == 'ci_icon-picture') { ?>
      <?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1200x715', 'attributes'=>array('alt'=>$title, 'class'=>'wp-post-image'))) ?>
      <?php } else {} ?>
      <div class="post_main_inner_wrapper">
        <h5><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
        <div class="grid_content">
          <?php
            hide($content['links']);
            hide($content['field_tags']);
            hide($content['field_video_url']);
            hide($content['field_blog_format']);
            hide($content['field_soundcloud_url']);
            hide($content['comments']);
            hide($content['field_categories']);
            hide($content['field_layout']);
            print render($content);
          ?>
        </div>
        <div class="post-readmore">
          <a href="<?php print $node_url; ?>" class="more-link"><?php print t('Read More'); ?></a>
        </div>
      </div>
      <div class="grid_postmeta">
        <p class="post_meta_date">
          <i class="ci_icon-calendar"></i><?php print format_date($node->created, 'custom', 'd M, Y');?>
        </p>
        <p class="post_meta_comments">
          <i class="ci_icon-comment"></i><?php print $comment_count;?>
        </p>
      </div>
    </div>
    <?php } elseif ($grid == '2col' && $blog_layout == 'sidebarleft'){ ?>
    <div class="blog_category_index_masonry2_left span9_halved content_with_left_sidebar grid_post">
      <?php if ($blog_format == 'ci_icon-youtube') { ?>
      <div class="videoWrapper-youtube">
        <?php print render($content['field_video_url']); ?>
      </div>
      <?php } elseif ($blog_format == 'ci_icon-soundcloud') { ?>
      <?php print render($content['field_soundcloud_url']); ?>
      <?php } elseif ($blog_format == 'ci_icon-picture') { ?>
      <?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1200x715', 'attributes'=>array('alt'=>$title, 'class'=>'wp-post-image'))) ?>
      <?php } else {} ?>
      <div class="post_main_inner_wrapper">
        <h5><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
        <div class="grid_content">
          <?php
            hide($content['links']);
            hide($content['field_tags']);
            hide($content['field_video_url']);
            hide($content['field_blog_format']);
            hide($content['field_soundcloud_url']);
            hide($content['comments']);
            hide($content['field_categories']);
            hide($content['field_layout']);
            print render($content);
          ?>
        </div>
        <div class="post-readmore">
          <a href="<?php print $node_url; ?>" class="more-link"><?php print t('Read More'); ?></a>
        </div>
      </div>
      <div class="grid_postmeta">
        <p class="post_meta_date">
          <i class="ci_icon-calendar"></i><?php print format_date($node->created, 'custom', 'd F, Y');?>
        </p>
        <p class="post_meta_comments">
          <i class="ci_icon-comment"></i><?php print $comment_count;?>
        </p>
      </div>
    </div>
    <?php } elseif ($grid == '2col' && $blog_layout == 'sidebarright'){ ?>
    <div class="blog_category_index_masonry2_right span9_halved content_with_right_sidebar grid_post">
      <?php if ($blog_format == 'ci_icon-youtube') { ?>
      <div class="videoWrapper-youtube">
        <?php print render($content['field_video_url']); ?>
      </div>
      <?php } elseif ($blog_format == 'ci_icon-soundcloud') { ?>
      <?php print render($content['field_soundcloud_url']); ?>
      <?php } elseif ($blog_format == 'ci_icon-picture') { ?>
      <?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1200x715', 'attributes'=>array('alt'=>$title, 'class'=>'wp-post-image'))) ?>
      <?php } else {} ?>
      <div class="post_main_inner_wrapper">
        <h5><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
        <div class="grid_content">
          <?php
          hide($content['links']);
          hide($content['field_tags']);
          hide($content['field_video_url']);
          hide($content['field_blog_format']);
          hide($content['field_soundcloud_url']);
          hide($content['comments']);
          hide($content['field_categories']);
          hide($content['field_layout']);
          print render($content);
          ?>
        </div>
        <div class="post-readmore">
          <a href="<?php print $node_url; ?>" class="more-link"><?php print t('Read More'); ?></a>
        </div>
      </div>
      <div class="grid_postmeta">
        <p class="post_meta_date">
          <i class="ci_icon-calendar"></i><?php print format_date($node->created, 'custom', 'd F, Y');?>
        </p>
        <p class="post_meta_comments">
          <i class="ci_icon-comment"></i><?php print $comment_count;?>
        </p>
      </div>
    </div>
    <?php } elseif ($grid == '3col' && $blog_layout == 'fullwidth'){ ?>
    <div class="blog_category_index_masonry3 span4 grid_post">
      <?php if ($blog_format == 'ci_icon-youtube') { ?>
      <div class="videoWrapper-youtube">
        <?php print render($content['field_video_url']); ?>
      </div>
      <?php } elseif ($blog_format == 'ci_icon-soundcloud') { ?>
      <?php print render($content['field_soundcloud_url']); ?>
      <?php } elseif ($blog_format == 'ci_icon-picture') { ?>
      <?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1200x715', 'attributes'=>array('alt'=>$title, 'class'=>'wp-post-image'))) ?>
      <?php } else {} ?>
      <div class="post_main_inner_wrapper">
        <h5><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
        <div class="grid_content">
          <?php
          hide($content['links']);
          hide($content['field_tags']);
          hide($content['field_video_url']);
          hide($content['field_blog_format']);
          hide($content['field_soundcloud_url']);
          hide($content['comments']);
          hide($content['field_categories']);
          hide($content['field_layout']);
          print render($content);
          ?>
        </div>
        <div class="post-readmore">
          <a href="<?php print $node_url; ?>" class="more-link"><?php print t('Read More'); ?></a>
        </div>
      </div>
      <div class="grid_postmeta">
        <p class="post_meta_date">
          <i class="ci_icon-calendar"></i><?php print format_date($node->created, 'custom', 'd F, Y');?>
        </p>
        <p class="post_meta_comments">
          <i class="ci_icon-comment"></i><?php print $comment_count;?>
        </p>
      </div>
    </div>
    <?php } elseif ($grid == '3col' && $blog_layout == 'sidebarleft'){ ?>
    <div class="span3 content_with_left_sidebar blog_category_index_masonry3_left grid_post">
      <?php if ($blog_format == 'ci_icon-youtube') { ?>
      <div class="videoWrapper-youtube">
        <?php print render($content['field_video_url']); ?>
      </div>
      <?php } elseif ($blog_format == 'ci_icon-soundcloud') { ?>
      <?php print render($content['field_soundcloud_url']); ?>
      <?php } elseif ($blog_format == 'ci_icon-picture') { ?>
      <?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1200x715', 'attributes'=>array('alt'=>$title, 'class'=>'wp-post-image'))) ?>
      <?php } else {} ?>
      <div class="post_main_inner_wrapper">
        <h5><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
        <div class="grid_content">
          <?php
          hide($content['links']);
          hide($content['field_tags']);
          hide($content['field_video_url']);
          hide($content['field_blog_format']);
          hide($content['field_soundcloud_url']);
          hide($content['comments']);
          hide($content['field_categories']);
          hide($content['field_layout']);
          print render($content);
          ?>
        </div>
        <div class="post-readmore">
          <a href="<?php print $node_url; ?>" class="more-link"><?php print t('Read More'); ?></a>
        </div>
      </div>
      <div class="grid_postmeta">
        <p class="post_meta_date">
          <i class="ci_icon-calendar"></i><?php print format_date($node->created, 'custom', 'd F, Y');?>
        </p>
        <p class="post_meta_comments">
          <i class="ci_icon-comment"></i><?php print $comment_count;?>
        </p>
      </div>
    </div>
    <?php } elseif ($grid == '3col' && $blog_layout == 'sidebarright'){ ?>
    <div class="span3 content_with_right_sidebar blog_category_index_masonry3_right grid_post">
      <?php if ($blog_format == 'ci_icon-youtube') { ?>
      <div class="videoWrapper-youtube">
        <?php print render($content['field_video_url']); ?>
      </div>
      <?php } elseif ($blog_format == 'ci_icon-soundcloud') { ?>
      <?php print render($content['field_soundcloud_url']); ?>
      <?php } elseif ($blog_format == 'ci_icon-picture') { ?>
      <?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1200x715', 'attributes'=>array('alt'=>$title, 'class'=>'wp-post-image'))) ?>
      <?php } else {} ?>
      <div class="post_main_inner_wrapper">
        <h5><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
        <div class="grid_content">
          <?php
          hide($content['links']);
          hide($content['field_tags']);
          hide($content['field_video_url']);
          hide($content['field_blog_format']);
          hide($content['field_soundcloud_url']);
          hide($content['comments']);
          hide($content['field_categories']);
          hide($content['field_layout']);
          print render($content);
          ?>
        </div>
        <div class="post-readmore">
          <a href="<?php print $node_url; ?>" class="more-link"><?php print t('Read More'); ?></a>
        </div>
      </div>
      <div class="grid_postmeta">
        <p class="post_meta_date">
          <i class="ci_icon-calendar"></i><?php print format_date($node->created, 'custom', 'd F, Y');?>
        </p>
        <p class="post_meta_comments">
          <i class="ci_icon-comment"></i><?php print $comment_count;?>
        </p>
      </div>
    </div>
    <?php } else { ?>
    <div class="blog_category_index_masonry4 span3 grid_post">
      <?php if ($blog_format == 'ci_icon-youtube') { ?>
      <div class="videoWrapper-youtube">
        <?php print render($content['field_video_url']); ?>
      </div>
      <?php } elseif ($blog_format == 'ci_icon-soundcloud') { ?>
      <?php print render($content['field_soundcloud_url']); ?>
      <?php } elseif ($blog_format == 'ci_icon-picture') { ?>
      <?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1200x715', 'attributes'=>array('alt'=>$title, 'class'=>'wp-post-image'))) ?>
      <?php } else {} ?>
      <div class="post_main_inner_wrapper">
        <h5><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
        <div class="grid_content">
          <?php
          hide($content['links']);
          hide($content['field_tags']);
          hide($content['field_video_url']);
          hide($content['field_blog_format']);
          hide($content['field_soundcloud_url']);
          hide($content['comments']);
          hide($content['field_categories']);
          hide($content['field_layout']);
          print render($content);
          ?>
        </div>
        <div class="post-readmore">
          <a href="<?php print $node_url; ?>" class="more-link"><?php print t('Read More'); ?></a>
        </div>
      </div>
      <div class="grid_postmeta">
        <p class="post_meta_date">
          <i class="ci_icon-calendar"></i><?php print format_date($node->created, 'custom', 'd F, Y');?>
        </p>
        <p class="post_meta_comments">
          <i class="ci_icon-comment"></i><?php print $comment_count;?>
        </p>
      </div>
    </div>
    <?php } ?>
  <?php } ?>

<?php } else {
    if (isset($node->field_layout['und'][0]['value'])){
      $blog_layout = $node->field_layout['und'][0]['value'];
    } else $blog_layout = theme_get_setting('blog_layout', 'income');
      if(empty($blog_layout) || $blog_layout == 'fullwidth')
        $blog_layout = 'sidebarright';
  ?>
  <div class="single_post post_content">
    <div class="post post_main">
      <?php if ($blog_format == 'ci_icon-youtube') { ?>
          <div class="videoWrapper-youtube">
          <?php print render($content['field_video_url']); ?>
          </div>
          <?php } elseif ($blog_format == 'ci_icon-soundcloud') { ?>
          <?php print render($content['field_soundcloud_url']); ?>
          <?php } elseif ($blog_format == 'ci_icon-picture') { ?>
          <?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1200x715', 'attributes'=>array('alt'=>$title, 'class'=>'wp-post-image'))) ?>
          <?php } else {} ?>
      <div class="postmeta-above clearfix">
        <span class="post_author">
          <?php print t('By'); ?>
                <span><?php print $name; ?><i class="ci_icon-moonfull"></i></span>
                <span class="post_date_inner"> <?php print format_date($node->created, 'custom', 'd F, Y');?></span>
        </span>
        <p class="post_meta_comments">
          <i class="ci_icon-comment"></i><?php print $comment_count;?>
        </p>
      </div>
      <?php
            hide($content['links']);
            hide($content['field_tags']);
            hide($content['field_video_url']);
            hide($content['field_blog_format']);
            hide($content['field_soundcloud_url']);
            hide($content['comments']);
            hide($content['field_categories']);
            hide($content['field_image']);
            hide($content['field_layout']);
            print render($content);
          ?>
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
  <!-- Comments start //-->
  <?php print render($content['comments']);?>
  <?php
  }

?>