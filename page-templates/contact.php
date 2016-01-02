<?php
/**
 * Template Name: Contact Page
 */
get_header(); 

?>
<div id="main" class="backgroundbrown page">
	<div id="fullSidebar" class="cf">
        <?php  get_sidebar(); ?>
    </div>
    <div id="fullContent" class="cf contactPage">
        <div class="title">
            CONTACT
        </div>
    	<div id="contactPicture">
    		<img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/unclegary.jpg') ?>" alt="Uncle Garys" width="270" />
    	</div>
    	<div id="contactPhone">
    		956-463-4723
    	</div>
    	<div id="contactEmail">
    		danielrevelry@gmail.com
    	</div>
	</div>
</div>
<?php 

get_footer(); 

?> 