<?php
/**
 * 
 * Modded by www.evilripper.net 
 * 
 */
// Get URL of first image in a post
function catch_that_image() 
{
	global $post, $posts;
	$first_img = '';
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
	return $first_img;
}


function OpenGraph_wp_head(){
   //	<meta property="og:description" content="..."/> 
   //<meta property="og:title" content="..."/>
    //Close PHP tags 
    if ( is_single() )
    {
	//echo 'ciao';
	echo '<meta property="og:image" content="' . catch_that_image() . '"/>';
     }//Open PHP tags
    
}

add_action('wp_head', 'OpenGraph_wp_head');

/*******************************************************************************
* NON SERVE *
********************************************************************************

function my_SocialAsync_method() {
    wp_deregister_script( 'SocialAsync' );
    wp_register_script( 'SocialAsync', get_stylesheet_directory_uri().'/js/SocialAsync.js');
    wp_enqueue_script( 'SocialAsync');
}    

 add_action('wp_enqueue_scripts', 'my_SocialAsync_method');


function my_SocialAsync_method() {
    wp_deregister_script( 'SocialAsync' );
    wp_register_script( 'SocialAsync', get_stylesheet_directory_uri().'/js/SocialAsync.js');
    wp_enqueue_script( 'SocialAsync');
}    

 add_action('wp_enqueue_scripts', 'my_SocialAsync_method');
 //add_action('wp_header', 'my_SocialAsync_method');

function your_function() {
    echo '<p>This is inserted at the bottom</p>';
}
add_action('wp_footer', 'your_function');
*/
?>