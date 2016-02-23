<?php global  $base_url; ?>
<header id="ABdev_main_header" class="clearfix default  sticky_main_header ">
	<div id="top_bar">
      	<div class="container">
      		<?php
      		$header_social = theme_get_setting('header_social_info', 'income');
      		$contact_phone = theme_get_setting('contact_phone', 'income');
      		$contact_mail = theme_get_setting('contact_mail', 'income');
      		?>
      		<?php if (!empty($header_social)): ?>
         	<div class="row">
	            <div id="header_social_info" class="span8">
	            	<?php print $header_social; ?>
	            	<?php if (!empty($contact_mail) && !empty($contact_phone)): ?>
	               	<div class="contact_mail_info">
	                  	<span class="quick_contact_phone"><i class="ci_icon-phonealt"></i><?php print $contact_phone; ?></span><span class="quick_contact_mail"><i class="ci_icon-envelope"></i><a href="mailto:<?php print $contact_mail; ?>"><?php print $contact_mail; ?></a></span>
	               	</div>
	               <?php endif; ?>
	            </div>
	            <?php if ($page['top_right']): ?>
	            <div id="shop_links" class="span4 right_aligned shop_nav_links">
	               <?php print render($page['top_right']) ;?>
	            </div>
	        	<?php endif; ?>
         	</div>
         	<?php endif; ?>
      	</div>
   	</div>
   	<div id="logo_menu_bar">
    	<div class="container">
      	<?php
		if($logo){
		?>
	        <div id="logo">
	            <a href="<?php print $base_url; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>"></a>
	        </div>
        <?php } ?>
        <?php  if($page['header_search']):?>
	        <div class="search-toggle">
	            <a class="search-icon"><i class="ci_icon-search"></i></a>
	            <div id="search-container" class="search-box-wrapper hide">
	               	<div class="search-box">
	                  	<div class="widget_search">
	                    	<?php print render($page['header_search']) ;?>
	                  	</div>
	               	</div>
	            </div>
	        </div>
	    	<?php endif; ?>
      	</div>
   	</div>
   	<?php  if($page['main_menu']):?>
		<?php print render($page['main_menu']) ?>
   	<?php endif; ?>
	<div id="ABdev_menu_toggle">
		<i class="ci_icon-menu"></i>
	</div>
</header>
<div id="ABdev_header_spacer"></div>