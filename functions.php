<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
@ini_set( 'upload_max_size' , '256M' );

/*
define('WP_MEMORY_LIMIT', '64MB');
add_filter( 'wp_image_editors', 'change_graphic_lib' );

function change_graphic_lib($array) {
  return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}
*/

add_action( 'init',           'danielrevelry_enqueue_scripts' );
add_action( 'init',           'danielrevelry_register_header_menus' );
add_action( 'admin_menu',     'danielrevelry_theme_options_page' );
add_action( 'admin_init',     'danielrevelry_admin_init'); 
add_action( 'widgets_init',   'danielrevelry_widgets_init' );
add_action( 'add_meta_boxes', 'danielrevelry_register_meta_boxes' );
add_action( 'save_post',      'danielrevelry_save_meta' );

add_filter('nav_menu_css_class','danielrevelry_menu_classes',1,3);

//Register Scripts
function danielrevelry_enqueue_scripts() {
    wp_enqueue_script( 'jquery' );

    wp_register_script( 'flexslider_js', get_template_directory_uri() . '/js/jquery.flexslider.js');    
    wp_enqueue_script( 'flexslider_js', get_template_directory_uri() .'/js/jquery.flexslider.js',array('jquery'));  

    wp_register_script( 'flex_js', get_template_directory_uri() .'/js/flex.js');    
    wp_enqueue_script( 'flex_js', get_template_directory_uri() .'/js/flex.js',array('jquery'));

    //Bootstrap CDNS
    wp_register_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js');    
    wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js',array('jquery'));

    wp_enqueue_style( 'flexslider_style',  get_template_directory_uri() .'/css/flexslider.css' );
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css' );
    
}

//Register Nav Menus
function danielrevelry_register_header_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}

//Register Upcoming Shows widget
function danielrevelry_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Main Sidebar'),
        'id' => 'main',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'danielrevelry' ),
        'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '<h2 class="widgettitle">',
    		'after_title'   => '</h2>'
    ) );

}

//Filter to add class to nav elements
function danielrevelry_menu_classes($classes, $item, $args) {
   if ( $item->title == 'Home' ) {
        $classes[] = 'col-sm-2 headerHome';
   }else if ( $item->title == 'Bio' ) {
        $classes[] = 'col-sm-2 bioHome';
   }else if ( $item->title == 'Originals' ) {
        $classes[] = 'col-sm-3 originalsHome';
   }else if ( $item->title == 'Trio' ) {
        $classes[] = 'col-sm-2 coversHome';
   }else if ( $item->title == 'Acoustic' ) {
        $classes[] = 'col-sm-3 acousticHome';
   }

   if($args->theme_location == 'header-menu') {
      $classes[] = 'headerInd';
   }

   return $classes;
}

//Register Meta Box for setlists
function danielrevelry_register_meta_boxes() {
    add_meta_box( 'meta-box-3','Set List PDF', 'danielrevelry_setList', 'page' );
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
}

function danielrevelry_setList($post){
  $leftColumnSet = get_post_meta( $post->ID, '_leftColumnSet', true );
  $rightColumnSet = get_post_meta( $post->ID, '_rightColumnSet', true );
  $requestOnly = get_post_meta( $post->ID, '_requestOnly', true );
  ?>
  <p>Left Column: <textarea style="width:300px;height:480px" class="setListInput" name="leftColumnSet" /><?= esc_attr( $leftColumnSet ); ?></textarea></p>
  <p>Right Column: <textarea style="width:300px;height:280px" class="setListInput" name="rightColumnSet"/><?= esc_attr( $rightColumnSet ); ?></textarea></p>
  <p>Request Only: <textarea style="width:300px;height:280px" class="setListInput" name="requestOnly"/><?= esc_attr( $requestOnly ); ?></textarea></p>
  <?php
}
//Save Setlist
function danielrevelry_save_meta( $post_id ) {

    if ( isset( $_POST['leftColumnSet'] ) ) {
        update_post_meta( $post_id, '_leftColumnSet', $_POST['leftColumnSet'] ) ; 
    }

    if ( isset( $_POST['rightColumnSet'] ) ) {
        update_post_meta( $post_id, '_rightColumnSet', $_POST['rightColumnSet'] ); 
    }

    if ( isset( $_POST['requestOnly'] ) ) {
        update_post_meta( $post_id, '_requestOnly', $_POST['requestOnly'] ); 
    }

}
//Register Theme Options Page
function danielrevelry_theme_options_page() {
  add_theme_page( 'Theme Options', 'Theme Options', 'manage_options', 'danielrevelry-theme-options', 'danielrevelry_theme_options' );
}

function danielrevelry_theme_options() {
  ?>
  <div class="wrap">
    
    <form method="post" action="options.php">
      <?php settings_fields('danielrevelry_options'); ?>
      <?php do_settings_sections('danielrevelry'); ?>
      <input name="Submit" type="submit" value="Save Changes" />
    </form>

  </div>
  <?php
}
//Register settings for Theme Options page
function danielrevelry_admin_init(){
  register_setting( 'danielrevelry_options', 'danielrevelry_options', 'danielrevelry_validate_options' );
  add_settings_section( 'danielrevelry_main', 'Daniel Revelry Theme Options', 'danielrevelry_section_text', 'danielrevelry' );
  add_settings_field(
    'danielrevelry_gypsy_soul_url', 
    'Gypsy Soul URL', 
    'danielrevelry_setting_input', 
    'danielrevelry', 
    'danielrevelry_main',
    array(
        'gypsy_soul_url'
    )  
  );
  add_settings_field(
    'danielrevelry_pride_and_joy_url', 
    'Pride and Joy URL', 
    'danielrevelry_setting_input', 
    'danielrevelry', 
    'danielrevelry_main',
    array(
        'pride_and_joy_url'
    )  
  );
  
  add_settings_field( 
    'danielrevelry_voodoo_child_url', 
    'Voodoo Child URL', 
    'danielrevelry_setting_input', 
    'danielrevelry', 
    'danielrevelry_main',
    array(
        'voodoo_child_url'
    )   
  );
  
}

function danielrevelry_section_text($args) {
  echo '<p>Enter your settings here.</p>'; 
}

//Theme Options Settings inputs 
function danielrevelry_setting_input($args) {
  $options = get_option( 'danielrevelry_options' ); 
  echo '<input style="width:400px;" id="'.$args[0].'" name="danielrevelry_options['.$args[0].']" type="text" value="' . $options[''  . $args[0] . ''] . '" ></input>';
}

//Validation for settings
function danielrevelry_validate_options( $input ) {
  $valid = array(); 
  $valid['gypsy_soul_url'] = $input['gypsy_soul_url'];
  $valid['voodoo_child_url'] = $input['voodoo_child_url'];
  $valid['pride_and_joy_url'] = $input['pride_and_joy_url'];
  //$valid['gypsy_soul_url'] = preg_replace('/[^a-zA-Z]/','', $input['gypsy_soul_url'] );
  return $valid;
}