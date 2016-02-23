<li class="comment clearfix">
  <?php
  if($picture){
  print $picture;
  }  else {
  //print '<img src="http://placehold.it/45x45" alt="Default User Picture" />';
  }
  ?>
  <span class="comment-author"><?php print theme('username', array('account' => $content['comment_body']['#object'], 'attributes' => array('class' => 'url'))) ?></span>
  <time datetime="2015"><?php print format_date($node->created, 'custom', 'F d, Y g:i a'); ?></time>
  <span class="reply">
    <?php print strip_tags(render($content['links']),'<a>'); ?>
  </span>
  <!-- .reply -->
  <div class="comment-text">
    <p>
      <?php hide($content['links']); print render($content) ?>
    </p>
  </div>
</li>