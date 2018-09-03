<?php
/**
 * Template Name: All Night Long Page
 */
get_header(); 

?>
<style>
.headerLinks{
    display:none;
}
audio{
    width:100%;
}
</style>
<div id="main" class="backgroundbrown page">
    
    <div id="fullContent" class="col-xs-12 col-sm-5" style="padding:0px;">

        <div class="title">
            All Night Long
        </div>
        <br>
        <!--
        <div id="fireVideo">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/WQcAR6wul-E" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        </div>
    -->
    <audio controls>
      <source src="horse.ogg" type="audio/ogg">

      <source src="<?= home_url('/wp-content/themes/danielrevelry/songs/All-Night-Long.m4a'); ?>" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
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
    	
    	<div id="fireLyrics">
            <br>
            <section class="fireHeader" style="text-align:center;">
        		<span id="fireTitle" style="font-weight:700;font-size:20px;" >"All Night Long"</span> <span id="fireByDaniel">by Daniel Revelry</span><br><br>
            </section>
    		<div id="fireWords" style="text-align:center;">
    			I admire from a far, the strongest buzz in this bar<br>
    			I throw back a whiskey, cuz tonight I’m feeling risky<br>
    			I float across the floor, to the girl that I adore<br>
    			You're lookin so good tonight, where have you been hidin all my life?<br>
                <br>
                So what are you doin tonight? <br>
                I'm thinkin me and you by the candle light<br>
                Listenin to our favorite songs<br>
                While I'm lovin on you All Night Long<br>
                All Night Long, just me and you All Night Long<br>
                Lovin you, All Night Long<br>
                Just me and you All Night Long<br>
                <br>
    			Now baby take my hand, I’ve had about all I can stand<br>
    			This love’s ready to ignite, let me love you under the moonlight<br>
    			She smiles back at me, with a warmth that can’t be seen<br>
    			Now baby come in close, cuz my heart burns for you the most<br>
                <br>
    		</div>
    	</div>
    </div>
    <div id="fullSidebar" class="cf col-xs-12  col-sm-offset-1 col-sm-6" style="padding:0px">
        <?php  get_sidebar(); ?>
    </div>
</div>
<script src="/wp-content/themes/danielrevelry/js/originalsPlayer.js"></script>
<?php get_footer(); ?> 