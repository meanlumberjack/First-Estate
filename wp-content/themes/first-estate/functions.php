<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
  
	// Custom post type
	add_theme_support('post-thumbnails');
	
	add_action('init', 'portfolio_register');
 
	function portfolio_register() {
 
	$labels = array(
		'name' => _x('Portfolio', 'post type general name'),
		'singular_name' => _x('Portfolio item', 'post type singular name'),
		'add_new' => _x('Nieuwe item', 'portfolio item'),
		'add_new_item' => __('Voeg een nieuwe portfolio item toe'),
		'edit_item' => __('Bewerk dit portfolio item'),
		'new_item' => __('Nieuwe portfolio item'),
		'view_item' => __('Bekijk portfolio item'),
		'search_items' => __('Zoek portfolio'),
		'not_found' =>  __('Niets gevonden'),
		'not_found_in_trash' => __('Niets gevonden in prullenbak'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 
 
	register_post_type( 'portfolio' , $args );
	}

	// Custom taxonomy
	register_taxonomy("categorieen", array("portfolio"), array("hierarchical" => true, "label" => "Categorieën", "singular_label" => "Categorie", "rewrite" => true));

	// RSS
	function myfeed_request($portfolioRSS) {
	if (isset($portfolioRSS['feed']) && !isset($portfolioRSS['post_type']))
		$portfolioRSS['post_type'] = array('portfolio');
		return $portfolioRSS;
	}
	add_filter('request', 'myfeed_request');
?>