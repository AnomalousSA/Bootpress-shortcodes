<?php   
	/* 
	Plugin Name: Bootstrap Short Codes
	Plugin URI: http://www.anomalous.co.za
	Description: Add shortcodes to Bootsrap type websites.
	Author: D.Maidens
	Version: 1.0 
	Author URI: http://www.anomalous.co.za
	*/  
?>
<?php

// Short Codes 
function carosel_shortcode( $atts , $content = null ) {
return '<div class="row-fluid" style="position:relative"><div class="span1"><a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a></div><div class="span10"><div id="myCarousel" class="carousel slide"><ol class="carousel-indicators"></ol><div class="carousel-inner">' . do_shortcode($content) . '</div></div></div><div class="span1"><a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a></div></div>';
}
add_shortcode( 'carosel', 'carosel_shortcode' );

// Add Shortcode
function caroselshortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'class' => '',
		), $atts )
	);

	// Code
return '<div class="item ' . $class .'">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'caroselimg', 'caroselshortcode' );
// Row Fluid Short Code

function row_shortcode( $atts , $content = null ) {

	// Code
       return '<div class="row">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'row', 'row_shortcode' );



// Grid Short code
/* [col span="4" offset="2"]Here is the content[/col]
*/
function col_shortcode( $atts, $content = null  ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'xsmall' => '',
			'small' => '',
			'medium' => '12',
			'large' => '',
			'class' => '',
		), $atts )
	);

	// Check to see if offset is empty, if empty then remove from return code
	$xsmalltest = "";
	$smalltest = "";
	$mediumtest = "";
	$largetest = "";
	$classtest = "";


	if($xsmall != "") {
		$xsmalltest = 'col-xs-' . $xsmall . ' ';
	};
	if($small != "") {
		$smalltest = 'col-sm-' . $small . ' ';
	};
	if($medium != "") {
		$mediumtest = 'col-md-' . $medium . ' ';
	};
	if($large != "") {
		$largetest = 'col-lg-' . $large;
	};
	if($class != "") {
		$classtest = ' ' . $class;
	};

	return '<div class="' .  $xsmalltest . $smalltest . $mediumtest . $largetest . $classtest .  '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'col', 'col_shortcode' );

// Button Shortcodes
// [btn href="test" type="btn-danger" size="btn-large" disabled="disabled"]Here is the content[/btn]

// Add Shortcode
function btnshort_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'href' => '',
			'type' => '',
			'size' => '',
			'disabled' => '',
		), $atts )
	);

	// Code
	return '<a href="' . $href .'" class="btn ' . $type .' ' . $size .  ' ' . $disabled .  '">' . do_shortcode($content) . '</a>';
}
add_shortcode( 'btnshort', 'btnshort_shortcode' );

// Label Short Code
// [label type=""]here is content[/label]
function label_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'type' => '',
		), $atts )
	);

	// Code
	return '<span class="label '.   $type  .'">' . $content . '</span>';
}
add_shortcode( 'label', 'label_shortcode' );

// Badge Shortcode
//[badge type=""]here is content[/badge]
function badge_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'type' => '',
		), $atts )
	);

	// Code
	return '<span class="badge '.   $type  .'">' . $content . '</span>';
}
add_shortcode( 'badge', 'badge_shortcode' );

// Hero Shortcode
// [hero headline="" href="test" type="btn-danger" size="btn-large" buttontext=""]Here is the content[/hero]
function hero_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'headline' => '',
			'href' => '',
			'type' => 'btn-primary',
			'size' => 'btn-large',
			'buttontext' => 'Learn More',
		), $atts )
	);

	// Code
	return '<div class="hero-unit"><h1>' . $headline . '</h1><p>' . $content . '</p><p><a href="' . $href . '" class="btn ' . $type.  ' ' .$size .'">'  . $buttontext . '</a></p></div>';
}
add_shortcode( 'hero', 'hero_shortcode' );

// Headline Shortcode
//[head headline="" subtext=""]
function head_shortcode( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'headline' => 'Headline',
			'subtext' => 'Subtext',
		), $atts )
	);

	// Code
	return '<div class="page-header"><h1>' . $headline .' <small>' . $subtext .'</small></h1></div>';
}
add_shortcode( 'head', 'head_shortcode' );

//Modal

// Add Shortcode
function modal_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'title' => 'Modal Title',
		), $atts )
	);

	// Code
$returnString = '<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
$returnString .= '<div class="modal-header">';
$returnString .= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>';
$returnString .= '<h3 id="myModalLabel">' . $title .  '</h3>';
$returnString .= '</div>';
$returnString .= '<div class="modal-body">';
$returnString .=  do_shortcode($content);
$returnString .= '</div>';
$returnString .= '<div class="modal-footer">';
$returnString .= '<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>';
$returnString .= '</div>';
$returnString .= '</div>';

return $returnString;
}
add_shortcode( 'modal', 'modal_shortcode' );

	// Adding TinyMCE Buttons
	add_action('init', 'add_button');  
	function add_button() {  
	   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
	   {  
			 add_filter('mce_external_plugins', 'add_plugin');  
			 add_filter('mce_buttons_3', 'register_button');  
	   }  
	}  
	function register_button($buttons) {  
	   array_push($buttons, "rowfluid","column","btnshort","label","badge","hero","head","carosel","caroselimg","modal");  // For each button add to the grid
	   return $buttons;  
	}  
	function add_plugin($plugin_array) {  
	   $plugin_array['rowfluid'] = plugins_url( '/assets/editor_plugin.js', __FILE__ );
	   return $plugin_array;  
	}
?>