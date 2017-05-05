<?php

	function samjohnstone_styles(){     
	/* REGISTER ALL JS FOR SITE */
		wp_deregister_script( 'jquery' );
		wp_register_script('jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js','','1.1', true);
		wp_register_script('foundation',get_stylesheet_directory_uri()."/assets/js/vendor/foundation.min.js",'','1.1', true);
		wp_register_style( 'style',get_stylesheet_directory_uri().'/assets/css/foundation.min.css');
		wp_register_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css');
		wp_register_style( 'layout',get_stylesheet_directory_uri().'/style.css');
		wp_register_style( 'font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');

		wp_enqueue_style('style');
		wp_enqueue_style('normalize'); 
		wp_enqueue_style('layout');  
		wp_enqueue_style('font-awesome');  

		wp_enqueue_script('jquery');
		wp_enqueue_script('foundation');
	  }
	  add_action( 'wp_enqueue_scripts', 'samjohnstone_styles' );
	  add_theme_support( 'post-thumbnails' );

	  
?>