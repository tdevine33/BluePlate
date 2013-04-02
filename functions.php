<?php

	// Short Codes
	add_action( 'init', 'register_shortcodes');

	function register_shortcodes(){
	  add_shortcode('button', 'button_function');
	}

	function button_function( $atts, $content = null )
	{
	  extract(
	    shortcode_atts(
	      array( 'link' => '#', ),
	      $atts
	    )
	  );
	  return '<a href="'.$link.'" class="button">'.do_shortcode($content).'</a>';
	}

	function link_function( $atts, $content = null )
	{
	  extract(
	    shortcode_atts(
	      array( 'link' => '#', ),
	      $atts
	    )
	  );
	  return '<a href="'.$link.'" class="link">'.do_shortcode($content).'</a>';
	}
	
	// Add Menu Support
	add_theme_support( 'menus' );

	// Add Post Thumbnails Support
	if ( function_exists( 'add_theme_support' ) ) {
	  add_theme_support( 'post-thumbnails' );
	}

	// Add Custom Post Thumbnail Sizes
	if ( function_exists( 'add_image_size' ) ) { 
	  add_image_size( 'gallery_image', 800, 600, true);
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
	
	// Pagination
	function paginate() {
		global $wp_query, $wp_rewrite;
		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	 
		$pagination = array(
			'base' => @add_query_arg('page','%#%'),
			'format' => '',
			'total' => $wp_query->max_num_pages,
			'current' => $current,
			'show_all' => true,
			'type' => 'list',
			'next_text' => '&raquo;',
			'prev_text' => '&laquo;'
			);
	 
		if( $wp_rewrite->using_permalinks() )
			$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
	 
		if( !empty($wp_query->query_vars['s']) )
			$pagination['add_args'] = array( 's' => get_query_var( 's' ) );
	 
		echo paginate_links( $pagination );
	}