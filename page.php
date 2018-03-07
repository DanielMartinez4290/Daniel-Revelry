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

<style>
.nav, .row{
display:none;
}
#main{
	padding-top:60px;
}
</style>

<div id="main">

<div id="pageContent" class="col-xs-12 col-sm-8">	

	<div id="pageTitle">
		<h2><?= the_title() ?></h2>
	</div>
	<div id="posts">
		<?php 
		if (have_posts()) :
		   while (have_posts()) :
		      the_post();
		         the_content();
		   endwhile;
		endif;
		?>
	</div>
</div>
<div id="pageSidebar" class="col-xs-12 col-sm-4">
<?php  get_sidebar(); ?>
</div>
</div>
<?php 
	get_footer(); 
?> 