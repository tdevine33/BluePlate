<?php
	
	// Add Menu Support
	add_theme_support( 'menus' );

	// Add Post Thumbnails Support
	if ( function_exists( 'add_theme_support' ) ) {
	  add_theme_support( 'post-thumbnails' );
	}

	// Add Custom Post Thumbnail Sizes
	if ( function_exists( 'add_image_size' ) ) { 
	  add_image_size( 'carousel_thumb', 156, 117, true);
	  add_image_size( 'carousel_full', 800, 600);
	}
	
	// Add jQuery from Google CDN
	if(!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
	function my_jquery_enqueue() {
	  wp_deregister_script('jquery');
	  wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js", false, null);
	  wp_enqueue_script('jquery');
	}

	// Add Footer SEO Text Widget
	if(function_exists('register_sidebar'))
	register_sidebar( array(
		'name' => 'Footer - SEO Text',
		'before_widget' => '<div class="seo">',
		'after_widget' => '</div>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));
	
	// Get Top Ancestor for Side Nav
	if(!function_exists('get_post_top_ancestor_id')){
	  function get_post_top_ancestor_id(){
	    global $post;

	    if($post->post_parent){
	      $ancestors = array_reverse(get_post_ancestors($post->ID));
	      return $ancestors[0];
	    }

	    return $post->ID;
	  }
	}

	// Custom Theme Settings
	if(is_admin()){ 
	  require_once('lib/blueplate-theme-settings.php');
	}

	function blueplate_get_global_options(){
	  $blueplate_option = array();
	  $blueplate_option   = get_option('blueplate_options');
	  
	  return $blueplate_option;
	}

	$blueplate_option = blueplate_get_global_options();