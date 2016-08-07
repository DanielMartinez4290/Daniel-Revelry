<?php

function danielrevelry_enqueue_scripts() {
    wp_enqueue_script( 'jquery' );

    wp_register_script( 'flexslider_js', get_template_directory_uri() . '/js/jquery.flexslider.js');    
    wp_enqueue_script( 'flexslider_js', get_template_directory_uri() .'/js/jquery.flexslider.js',array('jquery'));  

    wp_register_script( 'flex_js', get_template_directory_uri() .'/js/flex.js');    
    wp_enqueue_script( 'flex_js', get_template_directory_uri() .'/js/flex.js',array('jquery'));

    wp_register_script( 'bootstrap_js', get_template_directory_uri() .'/js/bootstrap.min.js');    
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() .'/js/bootstrap.min.js',array('jquery'));

    wp_enqueue_style( 'flexslider_style',  get_template_directory_uri() .'/css/flexslider.css' );
    wp_enqueue_style( 'bootstrap',  get_template_directory_uri() .'/css/bootstrap.min.css' );
}

add_action( 'init', 'danielrevelry_enqueue_scripts' );
add_action( 'widgets_init', 'theme_slug_widgets_init' );

function theme_slug_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Main Sidebar'),
        'id' => 'main',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    ) );

}

