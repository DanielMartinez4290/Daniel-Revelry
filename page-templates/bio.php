<?php
/**
 * Template Name: Bio Page
 */
get_header(); 

?>
<div id="main" class="backgroundbrown page">

	<div id="fullContent" class="bioPage col-xs-12 col-sm-8">
    	<div class="title">
            BIO
        </div>
        <div id="mainContainer">
	    	<div id="mainPicture"></div>
		
			<div id="bio">
				Born and raised in Texas, I’ve been playing around Austin
				for the past 5 years. My musical style is a mix of rock, blues, and pop. 
			</div>
			<div id="gear">
		    	<div id="gearTitle">
		    		
		    	</div>
	    	</div>
    	</div>
    </div>

	<div id="fullSidebar" class="cf col-xs-12 col-sm-4">
        <?php  get_sidebar(); ?>
    </div>
    

	
</div>

<?php 
	get_footer(); 
?> 