<?php

	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    add_theme_support('post-thumbnails');


	add_action('wp_enqueue_script','register_my_scripts');

function register_my_scripts(){
 wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"), true);
}


    register_nav_menus( array(
    	'primary' => 'Primary Navigation',
    	'about' => 'About Navigation',
    	'footer' => 'Footer Navigation',

    	) );

    add_action('init', 'management');

    function management()
    {
    	register_post_type('management',
    		array(
    			'labels' => array(
    				'name' => __('Management'),
    				'singular_name' => __('Management'),
    				'all_items' => __('All Management'),
    				'add_new' => __('Add New Team Member'),
    				'add_new_item' => __('Add A New Team Member'),
    				'new_item' => __('Add Team Member'),
    				'edit_item' => __('Edit Team Member'),
    			),
    			'description' => 'Use this panel to add images to the site Management',
    			'public' => true,
    			'exclude_from_search' => true,
    			'menu_position' => 20,
			'taxonomies' => array('category'),
    			'supports' => array(
    				'title',
    				'editor',
    				'custom-fields',
    				'excerpt',
    				'thumbnail',
    				'page-attributes'
    			),
    			// 'hierarchical' => true,
    			'show_in_nav_menus' => false,
    		)
    	);
    }

	add_action('init', 'projects');

	function projects()
	{
		register_post_type('projects',
			array(
				'labels' => array(
					'name' => __('Projects'),
					'singular_name' => __('Project'),
					'all_items' => __('All Projects'),
					'add_new' => __('Add New Project'),
					'add_new_item' => __('Add A New Projects'),
					'new_item' => __('Add Project'),
					'edit_item' => __('Edit Project'),
				),
				'description' => 'Use this panel to add images to the site Projects',
				'public' => true,
				'exclude_from_search' => true,
				'menu_position' => 21,
				'taxonomies' => array('category'),
				'supports' => array(
					'title',
					'editor',
					'custom-fields',
					'excerpt',
					'thumbnail',
					'page-attributes',
				),
				// 'hierarchical' => true,
				'show_in_nav_menus' => false,
			)
		);
	}



    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

     if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'News Widgets',
    		'id'   => 'news-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));

       }


?>