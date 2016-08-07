<?php
/**
 * Template Name: Bio Page
 */
get_header(); 

?>
<div id="main" class="backgroundbrown page">
	<div id="fullSidebar" class="cf">
        <?php  get_sidebar(); ?>
    </div>
    <div id="fullContent" class="bioPage">
    	<div class="title">
            BIO
        </div>
    	<div id="mainPicture">
    		<img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/batman.jpg') ?>" width="300"  />
		</div>
		<div id="bio">
			Born and raised in Texas, I’ve been playing in the Austin music scene 
			for the past 5 years. My biggest musical influences are Jimi Hendrix, 
			John Mayer, and Stevie Ray Vaughan.
		</div>
		<div id="gear">
	    	<div id="gearTitle">
	    		
	    	</div>
    	</div>
    </div>

	
</div>

<?php 
	get_footer(); 
?> 