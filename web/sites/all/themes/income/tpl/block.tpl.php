<?php

if(!empty($block->background_color)) {

	$style_color = 'style="background-color: '.$block->background_color.'"';

} else {

	$style_color = '';
}

$out = '';

if($block->region == 'content_section'){



	$out .= '<section class="'.$classes.'" '.$attributes.' '.$style_color.'>';

	$out .= render($title_suffix);

	if ($block->subject):

		$out .= '<h2>'.$block->subject.'</h2>';

	endif;

	$out .= $content;

	$out .= '</section>';





} else if($block->region == 'footer'){

	$out .= '<div class="span3 clearfix">';

	$out .= '<div class="widget '.$classes.'" '.$attributes.'>';

	$out .= render($title_suffix);

	if ($block->subject):

		$out .= '<h3 class="footer-widget-heading">'.$block->subject.'</h3>';

	endif;

	$out .= $content;

	$out .= '</div></div>';





}elseif($block->region == 'slider' || $block->region == 'section_fullwidth'){

	$out .= '<section class="'.$classes.'"  '.$attributes.' >';

	$out .= render($title_suffix);

	if ($block->subject):

		$out .= 'h2>'.$block->subject.'</h2>';

	endif;

	$out .= $content;

	$out .= '</section>';



}elseif($block->region == 'sidebar_first' || $block->region == 'sidebar_second'){



	$out .= '<div class="widget '.$classes.'" '.$attributes.'>';

	$out .= render($title_suffix);

    if ($block->subject)

		$out .= '<div class="sidebar-widget-heading"><h3>'.$block->subject.'</h3></div>';

	$out .= $content;

	$out .= '</div>';



}elseif($block->region == 'related_portfolio'){

	$out .= '<section id="related_portfolio" '.$classes.'" '.$attributes.'>';

	$out .= '<div class="container">';

	$out .= render($title_suffix);

    if ($block->subject)

		$out .= '<h4 class="column_title_center">'.$block->subject.'</h4>';

	$out .= $content;

	$out .= '</div></section>';



}elseif($block->region == 'related_products'){

	$out .= '<div class="related products '.$classes.'" '.$attributes.'>';

	$out .= render($title_suffix);

    if ($block->subject)

    	$out .= '<h3 class="related_title">'.$block->subject.'</h3>';

    $out .= $content;

	$out .= '</div>';



}elseif($block->region == 'footer1_col1' || $block->region == 'footer1_col2' || $block->region == 'footer1_col3'){



	$out .= '<aside class="widget '.$classes.'" '.$attributes.' >';



	$out .= render($title_suffix);



   if ($block->subject)



		$out .= '<h2 class="widget-title">'.$block->subject.'</h2>';

	$out .= '<div class="widget-content">';



	$out .= $content;



	$out .= '</div></aside>';



}elseif($block->region == 'footer2_col1' || $block->region == 'footer2_col2' || $block->region == 'footer2_col3' || $block->region == 'footer2_col4' || $block->region == 'footer2_col5'){



	$out .= '<aside class="widget '.$classes.'" '.$attributes.' >';



	$out .= render($title_suffix);



   if ($block->subject)



		$out .= '<h2 class="widget-title">'.$block->subject.'</h2>';

	$out .= '<div class="widget-content">';



	$out .= $content;



	$out .= '</div></aside>';



}elseif($block->region == 'footer_top'){

	if(!empty($block->block_id)) {

		$id = 'id="'.$block->block_id.'"';

	} else $id = "";

	$out .= '<div '.$id. ' class="' .$classes.'" '.$attributes.'>';

	$out .= render($title_suffix);

	if ($block->subject):

		$out .= '<h4>'.$block->subject.'</h4>';

	endif;

	$out .= $content;

	$out .= '</div>';



}elseif($block->region == 'main_menu'){

	$out .= '<nav class="'.$classes.'"  '.$attributes.'>';

	$out .= render($title_suffix);

	$out .= $content;

	$out .= '</nav>';



}elseif($block->region == 'sidebar_second'){

	$out .= '<aside class="'.$classes.'" '.$attributes.' >';

	$out .= render($title_suffix);

   if ($block->subject)

		$out .= '<h4>'.$block->subject.'</h4>';

	$out .= $content;

	$out .= '</aside>';





}else{

	$out .= '<div id="'.$block_html_id.'" class="'.$classes.'" '.$attributes.'>';

	$out .= render($title_suffix);

	 if ($block->subject)

		$out .= '<h5>'.$block->subject.'</h5>';

	$out .= $content;

	$out .= '</div>';

}

print $out;

?>