<?php 
add_theme_support( 'post-thumbnails' ); 
 
 function travel_files() {
 	wp_enqueue_script('jQuery','//code.jquery.com/jquery-3.3.1.min.js');
 	wp_enqueue_script('bootstrap_script','//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');
 	wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
 	wp_enqueue_style('main-style', get_stylesheet_uri());
 	wp_enqueue_style('google-font','//fonts.googleapis.com/css?family=Noto+Sans+SC');
 }
 function travel_features() {
 	add_theme_support('title-tag');

 }

 function ourWidgetsInit(){
 		register_sidebar( array(
 				'name' => 'Sidebar',
 				'id' => 'sidebar1'

 		));


 }
 add_action('widgets_init', 'ourWidgetsInit');
 add_action('wp_enqueue_scripts', 'travel_files');
 add_action('after_setup_theme','travel_features');

 ?>