<?php
/**
 * Template Name: Originals Page
 */
get_header(); 

?>
<div id="main" class="backgroundbrown page">
	<div id="fullSidebar" class="cf">
        <?php  get_sidebar(); ?>
    </div>
    <div id="fullContent" class="originalsPage">
    	<div class="title">
            ORIGINALS
        </div>
<!--
    	<div id="mainPlayer">
			<div id="playerContainer">
		        <div class="player gradient">
		        	<div id="playerTop" class="cf">
			        	<div id="playerPicture">
			        		<div id="playerPictureOne">
				        		<img src="<?php //echo home_url('/wp-content/themes/danielrevelry/img/songwriter.jpg') ?>"  width="170" />
				        	</div>
				        	<div id="playerPictureTwo">
				        		<img src="<?php //echo home_url('/wp-content/themes/danielrevelry/img/batman.jpg') ?>"  width="170" />
				        	</div>
				        </div>
				        <div id="playerSongTitle">
				        	<div id="titleOne">
				        		Fire
				        	</div>
				        	<div id="titleTwo">
				        		Gypsy Soul
				        	</div>
				        </div>
				        <br><br><br>
				        <div id="playerArtist">
				        	<div id="artistOne">
				        		By Daniel Revelry
				        	</div>
				        	<div id="artistTwo">
				        		By Daniel Revelry
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
	    				<a class="button gradient playerSong" id="song1" href="" title=""><span class="playerSongTitle">1. Fire</span><span class="playerSongLength"> 4:45</span></a>
	    				<a class="button gradient playerSong" id="song2" href="" title=""><span class="playerSongTitle">2. Gypsy Soul</span><span class="playerSongLength"> 2:43</span></a>	
			    	</div>
		            
		            
		        </div>
            </div>
		</div>
	-->
	</br>
	<div class="videos">
		<iframe width="485" height="315" src="https://www.youtube.com/embed/HMDSx657oTU" frameborder="0" allowfullscreen></iframe>
    	<iframe width="485" height="315" src="https://www.youtube.com/embed/139gnI0-_8g" frameborder="0" allowfullscreen></iframe>
    </div>
    </div>

	
</div>
<script src="/wp-content/themes/danielrevelry/js/originalPlayer.js"></script>

<?php 
	get_footer(); 
?> 