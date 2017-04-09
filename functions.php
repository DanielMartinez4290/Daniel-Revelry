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

add_action( 'add_meta_boxes', 'wpdocs_register_meta_boxes' );

function wpdocs_register_meta_boxes() {
    add_meta_box( 'meta-box-3','Set List PDF', 'dm_mg_setList', 'page' );
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
}

function dm_mg_setList($post){
  $leftColumnSet = get_post_meta( $post->ID, '_leftColumnSet', true );
  $rightColumnSet = get_post_meta( $post->ID, '_rightColumnSet', true );
  ?>
  <p>Left Column: <textarea style="width:300px;height:500px" class="setListInput" name="leftColumnSet" /><?= esc_attr( $leftColumnSet ); ?></textarea></p> 
  <p>Right Column: <textarea style="width:300px;height:500px" class="setListInput" name="rightColumnSet"/><?= esc_attr( $rightColumnSet ); ?></textarea></p> 
  </br>
  <?php
}

add_action( 'save_post', 'dm_mg_save_meta' );

function dm_mg_save_meta( $post_id ) {

    if ( isset( $_POST['leftColumnSet'] ) ) {
        update_post_meta( $post_id, '_leftColumnSet', $_POST['leftColumnSet'] ) ; 
    }

    if ( isset( $_POST['rightColumnSet'] ) ) {
        update_post_meta( $post_id, '_rightColumnSet', $_POST['rightColumnSet'] ); 
    }

}












