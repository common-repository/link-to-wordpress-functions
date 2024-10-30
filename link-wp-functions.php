<?php
/*
Plugin Name: Link to WordPress functions
Plugin URI: 
Description: Place a function-name (ie. the_content) between the [wp] shorttags and it automatically links to the codex page of that function.
Author: Hiranthi Molhoek-Herlaar (illutic WebDesign)
Version: 1.0
Author URI: http://www.illutic.nl
*/

/**************************************************************
	Hooks
**************************************************************/
add_filter('the_content', 'linkwpfunctions');
add_filter('the_excerpt', 'linkwpfunctions');
add_filter('the_content_rss', 'linkwpfunctions');
add_filter('the_excerpt_rss', 'linkwpfunctions');
add_filter('get_the_content', 'linkwpfunctions');
add_filter('get_the_excerpt', 'linkwpfunctions');

/**************************************************************
	Functions
**************************************************************/

/*
Output loggedinout
*/
function linkwpfunctions ( $content = '' )
{	
	if ( is_string($content) )
	{	
		$content = preg_replace('/\[wp\](.*?)\[\/wp\]/si','<a href="http://codex.wordpress.org/Function_Reference/\\1" title="WordPress Codex: \\1" class="wp-codex">\\1</a>',$content);
	}
	return $content;
}

?>