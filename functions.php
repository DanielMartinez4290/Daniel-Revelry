<?php

function danielrevelry_enqueue_scripts() {
    wp_enqueue_script( 'jquery' );
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

