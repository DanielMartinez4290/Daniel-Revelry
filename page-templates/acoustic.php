<?php
/**
 * Template Name: Acoustic Page
 */
get_header(); 

?>
<div id="main" class="backgroundbrown page">
	
    <div id="fullContent" class="coversPage col-xs-12 col-sm-8">
    	<div class="title">
            ACOUSTIC
        </div>

    	<div class="coversPageText">
    		<?php 
				if (have_posts()) :
				   while (have_posts()) :
				      the_post();
				         the_content();
				   endwhile;
				endif;
			?>
		</div>
		<br>
		<div class="videos">
			<iframe src="https://www.youtube.com/embed/LhgWPdu5auA" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<br>
    </div>

    <div id="fullSidebar" class="col-xs-12 col-sm-4">
        <?php  get_sidebar(); ?>
    </div>

	
</div>
<script src="/wp-content/themes/danielrevelry/js/coversPlayer.js"></script>
<?php 
	get_footer(); 
?> 