<?php
/**
 * Template Name: Pictures Page
 */
get_header(); 

?>
<div id="main" class="backgroundbrown page">
	<div id="fullSidebar" class="cf">
        <?php  get_sidebar(); ?>
    </div>
    <div id="fullContent">
    	<div id="picturesPictures">
			<div class="flexslider">
			  <ul class="slides">
			    <li>
			      <img src="http://danielrevelry.com/wp-content/uploads/2015/09/12038340_10154169091707004_2716013703673622664_n.jpg" alt="Nook"  />
			    </li>
			    <li>
			     <img src="http://danielrevelry.com/wp-content/uploads/2015/09/10150611_10153305108372004_6475959595570466090_n-1-300x300.jpg" alt="Red Screen"   />
			    </li>
			     <li>
			     <img src="http://danielrevelry.com/wp-content/uploads/2015/09/462_10152590310367004_1647918164_n-300x300.jpg" alt="512"  />
			    </li>
			    <li>
			     <img src="http://danielrevelry.com/wp-content/uploads/2015/09/1071196_10152024518977004_1053764076_o-300x300.jpg" alt="Acoustic"   />
			    </li>
			  </ul>
			</div>
		</div>
    </div>
	
</div>
<script type="text/javascript" charset="utf-8">
  

$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});

</script>
<?php 

get_footer(); 

?> 