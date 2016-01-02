<?php
 define( 'WP_USE_THEMES', false ); 
get_header(); 

/**
 * 
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<div id="main">
	
<?php 

if (have_posts()) :
   while (have_posts()) :
      the_post();
?>
	<div id="songtitle">
		<h1><?php the_title(); ?></h1>
	</div>
<?php  			
  			
         the_content();
   endwhile;
endif;
?>