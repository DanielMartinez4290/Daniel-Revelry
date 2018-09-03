<?php
/**
 * Template Name: Gypsy Soul Page
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
<div id="main" class="backgroundbrown page container">
    
    <div class="fullContent col-xs-12 col-sm-8">

        <div class="title">
            Gypsy Soul
        </div>
        <audio controls>
          <source src="horse.ogg" type="audio/ogg">

          <source src="<?= home_url('/wp-content/themes/danielrevelry/songs/gypsy-soul.mp3'); ?>" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <br>
        <?php
          $options = get_option( 'danielrevelry_options' ); 
        ?>
        <div class="originalVideo">
            <iframe height="315" width="100%" src="<?= $options['gypsy_soul_url']; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    	
    	<div class="originalLyrics">
    		<span class="originalTitle">"Gypsy Soul"</span> <span id="fireByDaniel">by Daniel Revelry</span><br><br>
    		<div id="fireWords">
    			She’s got a lightnin’ smile and legs so smooth<br>
                She’ll go all night when you’ve got the blues<br>
                She’s got lips so sweet you won't have a prayer<br>
                Burn so good, it aint even fair<br>
                <br>
                She’s so Rock N Roll<br>
                Ooo that girl’s got a Gypsy Soul<br>
                <br>
                She’ll light up a room when it’s time to groove<br>
                Better than a dream, she hits every move<br>
                She’s got a wild side they don’t allow in heaven<br>
                Never stops at 10 she goes straight to 11<br>
                <br>
                She’s so Rock N Roll<br>
                Ooo that girl’s got a Gypsy Soul<br>
                <br>
                She’s so Rock N Roll<br>
                She’s so Rock N Roll<br>
                She’s so Rock N Roll<br>
                Ooo baby that girls got a Gypsy Soul<br>
                <br>
                She’s got a Gypsy Soul<br>
                She's so Rock N Roll, but she’s got a Gypsy Soul<br>
                She's so Rock N Roll, but she’s got a Gypsy Soul<br><br><br>
    		</div>
    	</div>
    </div>
    <div class="cf fullSidebar col-xs-12 col-sm-4">
        <?php  get_sidebar(); ?>
    </div>
</div>

<?php 

get_footer(); 

?> 