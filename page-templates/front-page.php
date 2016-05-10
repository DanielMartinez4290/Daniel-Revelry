<?php
/**
 * Template Name: Front Page Template
 */
get_header(); 

?>
<div id="main" class="backgroundbrown">
	<span id="mainpic">
		<div class="flexslider">
		  <ul class="slides">
		    <li>
		      <img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/banner.jpg') ?>"  />
		    </li>
		    <li>
		     <img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/firepromo.jpg') ?>"  />
		    </li>
		  </ul>
		</div>
	</span>



	<div id="mainContent" class="cf">
		<div id="mainLeft">
			<div id="mainVideo1">
				<iframe width="480" height="249" src="https://www.youtube.com/embed/ijqKuPQcFnM" frameborder="0" allowfullscreen></iframe>
			</div>
			<br>
			<div id="mainVideo2">
				<iframe width="480" height="249" src="https://www.youtube.com/embed/HMDSx657oTU" frameborder="0" allowfullscreen></iframe>
			</div>
			<br>
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
					        		<img src="http://ecx.images-amazon.com/images/I/91Hhn%2BzOKKL._SL1425_.jpg"  width="170" />
					        	</div>
					        </div>
					        <div id="playerSongTitle">
					        	<div id="titleOne">
					        		Fire
					        	</div>
					        	<div id="titleTwo">
					        		Bright Lights
					        	</div>
					        </div>
					        <br><br><br>
					        <div id="playerArtist">
					        	<div id="artistOne">
					        		By Daniel Revelry
					        	</div>
					        	<div id="artistTwo">
					        		By Gary Clark Jr
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
		    				<a class="button gradient playerSong" id="song1" href="" title=""><span class="playerSongTitle">1. Fire - Daniel Revelry</span><span class="playerSongLength"> 4:45</span></a>
		    				<a class="button gradient playerSong" id="song2" href="" title=""><span class="playerSongTitle">2. Bright Lights - Gary Clark Jr</span><span class="playerSongLength"> 4:15</span></a>	
				    	</div>
			            
			            
			        </div>

	            </div>
	            
			</div>
			-->
		</div>

		<div id="mainSidebar" class="cf">
			<?php  get_sidebar('main'); ?>
		</div>

	</div>
	<br>
	<br>
	<br>
	
</div>

<!-- <script src="/wp-content/themes/danielrevelry/js/homePlayer.js"></script> -->

<?php 

get_footer(); 

?> 