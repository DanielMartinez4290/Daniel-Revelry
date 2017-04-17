<?php
/**
 * Template Name: Front Page Template
 */
get_header(); 

?>
  <div class="row">
    <div class="col-xs-12" id="mainPic">
    
     
          <div class="flexslider">
            <ul class="slides">
              <li>
                <img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/banner-compressor.jpg') ?>"  />
              </li>
            </ul>

          </div>
        </div>
     
  </div>
<?php
  $options = get_option( 'danielrevelry_options' ); 
?>
  <div class="row homeContent">

    <div class="col-xs-12">
      <div id="mainVideo1" class="col-sm-6">
        
        <div class="originalsHeader"><div class="leftTriangle"></div><div class="originalsText">Originals</div><div class="rightTriangle"></div></div>
        <iframe height="370" src="<?= $options['gypsy_soul_url']; ?>" frameborder="0" allowfullscreen></iframe>
      </div>
      <div id="mainVideo2" class="col-sm-6">
        <div class="coversHeader"><div class="leftTriangle"></div><div class="coversText">Covers</div><div class="rightTriangle"></div></div>
        <iframe height="370" src="<?= $options['pride_and_joy_url']; ?>" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>

    <div class="col-xs-12">
      <div id="sidebarContent" class="cf">
  <div id="sidebarFeaturedVideo" class="col-sm-6">
    <div class="featuredVideoHeader"><div class="leftTriangle"></div><div class="featuredVideoText">Featured Video</div><div class="rightTriangle"></div></div>
    <div id="sidebarFeaturedVideoVideo">
      <iframe src="<?= $options['voodoo_child_url']; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
  
  <div id="sidebarFacebookPage" class="col-sm-6">
      <!--<div id="fb-root"></div> -->
    <div class="featuredVideoHeader"><div class="leftTriangle"></div><div class="facebookPageText">Facebook Page</div><div class="rightTriangle"></div></div>
    <div id="sidebarFacebookPicture">
      <div class="fb-like" id="fbLikeButton" data-href="https://www.facebook.com/danielrevelry/" data-width="20px" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="false" colorscheme="dark"></div>
      <a href="https://www.facebook.com/danielrevelry" target="_blank"><img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/profile-pic-compressor.jpg') ?>" /></a>
    </div>
  </div>
  <!--
  <div id="sidebarUpcomingShows">
    
    <div class="upcomingShowsHeader">Upcoming Shows</div>
    <div id="sidebarUpcomingShowsShows">
      <?php  //dynamic_sidebar('main'); ?>
    </div>
  </div>
  
  <div id="sidebarSocialIcons">
    <a href="https://www.facebook.com/danielrevelry"><div id="sidebarSocialFB">
        <i class="fa fa-facebook-official fa-2x"></i>
      </div></a>
      <a href="https://www.youtube.com/channel/UCRNhG3sbmr8DFltO2iFSVRQ"><div id="sidebarSocialYT">
        <i class="fa fa-youtube fa-2x"></i>
      </div></a>
  </div>
-->
</div>
    </div>

  </div>


</div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=176796222526551";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

<?php 

get_footer(); 

?> 