<?php get_header(); ?>

<style>
#main{
	padding-top:15px;
}
</style>
<div id="main">

	<div id="pageContent" class="col-xs-12 col-sm-8">	
		<h1><?= the_title() ?></h1>
		
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

<?php get_footer(); ?> 