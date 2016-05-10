<?php
/**
 * Template Name: Covers Page
 */
get_header(); 

?>
<div id="main" class="backgroundbrown page">
	<div id="fullSidebar" class="cf">
        <?php  get_sidebar(); ?>
    </div>
    <div id="fullContent" class="coversPage">
    	<div class="title">
            COVERS
        </div>
        <!--
        <div id="mainPlayer">
			<div id="playerContainer">
		        <div class="player gradient">
		        	<div id="playerTop" class="cf">
			        	<div id="playerPicture">
			        		<div id="playerPictureOne">
				        		<img src="http://ecx.images-amazon.com/images/I/91Hhn%2BzOKKL._SL1425_.jpg"  width="170" />
				        	</div>
				        	<div id="playerPictureTwo">
				        		<img src="http://acltv.com/wp-content/uploads/2012/08/Stevie-Ray-Vaughan-on-ACL1-350x350.jpg"  width="170" />
				        	</div>
				        </div>
				        <div id="playerSongTitle">
				        	<div id="titleOne">
				        		Bright Lights
				        	</div>
				        	<div id="titleTwo">
				        		Pride And Joy
				        	</div>
				        </div>
				        <br><br><br>
				        <div id="playerArtist">
				        	<div id="artistOne">
				        		By Gary Clark Jr
				        	</div>
				        	<div id="artistTwo">
				        		By Stevie Ray Vaughan
				        	</div>
				        </div>
				        <br><br><br>
				        <div id="playerPlayButton">
				        	<a class="button gradient playButton" id="play1" href="" title=""><i class="fa fa-play fa-2x"></i></a>
				    	</div>
				    	<div id="playerSeek">
				    		<input type="range" id="seek" value="0" max=""/>		
				    	</div>
			    	</div>
			    	<div id="playerBot">
	    				<a class="button gradient playerSong" id="song1" href="" title=""><span class="playerSongTitle">1. Bright Lights - Gary Clark Jr</span><span class="playerSongLength"> 4:45</span></a>
	    				<a class="button gradient playerSong" id="song2" href="" title=""><span class="playerSongTitle">2. Pride and Joy - Stevie Ray Vaughan</span><span class="playerSongLength"> 2:43</span></a>	
			    	</div>
		            
		            
		        </div>
            </div>
		</div>
	-->

    	<div id="text">
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
			<iframe width="480" height="315" src="https://www.youtube.com/embed/ijqKuPQcFnM" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="videos">
			<iframe width="480" height="315" src="https://www.youtube.com/embed/n2QkJl4fBBE" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="videos">
			<iframe width="480" height="315" src="https://www.youtube.com/embed/5zgmqd2eDJY" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="videos">
			<iframe width="480" height="315" src="https://www.youtube.com/embed/LhgWPdu5auA" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<br>
    </div>

	
</div>
<script src="/wp-content/themes/danielrevelry/js/coversPlayer.js"></script>
<?php 
	get_footer(); 
?> 