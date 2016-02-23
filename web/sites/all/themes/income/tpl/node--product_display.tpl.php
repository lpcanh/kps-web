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
if(!$page){ ?>
<?php } else { ?>

<!-- .summary -->

<div class="dnd-tabs dnd-tabs-horizontal dnd-tabs-position-top dnd-tabs-boxed woocommerce-tabs" data-selected="1" data-break_point="570" data-effect="slide">
  <ul class="dnd-tabs-ul">
    <li class="description_tab"><a href="#tab-1"><?php print t('DESCRIPTION');?></a></li>
    <li class="reviews_tab"><a href="#tab-2"><?php print t('COMMENTS') ?> (<?php print $comment_count; ?>)</a></li>
  </ul>
  <div class="dnd-tabs-wrapper">
    <div id="tab-1">
    <?php
      hide($content['links']);
      hide($content['comments']);
      hide($content['product:product']);
      hide($content['product:add_to_cart_form']);
      print render($content['body']);
    ?>
    </div>
    <div id="tab-2">
      <?php print render($content['comments']);?>
    </div>
  </div>
</div>


<?php } ?>