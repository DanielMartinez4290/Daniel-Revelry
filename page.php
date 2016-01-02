<?php
 //define( 'WP_USE_THEMES', false ); 
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

<div id="pageContent">	

	<div id="pageTitle">
		<?php the_title() ?>
	</div>

	<?php 
	
	if (have_posts()) :
	   while (have_posts()) :
	      the_post();
	         the_content();
	   endwhile;
	endif;
	?>
</div>
<div id="pageSidebar">
<?php  get_sidebar(); ?>
</div>