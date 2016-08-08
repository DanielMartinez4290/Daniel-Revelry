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
                <img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/banner.jpg') ?>"  />
              </li>
            </ul>

          </div>
        </div>
     
  </div>

  <div class="row homeContent">

    <div class="col-xs-12">
      <div id="mainVideo1" class="col-sm-6">
        <div class="originalsHeader"><div class="leftTriangle"></div><div class="originalsText">Originals</div><div class="rightTriangle"></div></div>
        <iframe height="370" src="https://www.youtube.com/embed/HMDSx657oTU" frameborder="0" allowfullscreen></iframe>
      </div>
      <div id="mainVideo2" class="col-sm-6">
        <div class="coversHeader"><div class="leftTriangle"></div><div class="coversText">Covers</div><div class="rightTriangle"></div></div>
        <iframe height="370" src="https://www.youtube.com/embed/AnoQn_EzZXI" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>

    <div class="col-xs-12">
      <div id="sidebarContent" class="cf">
  <div id="sidebarFeaturedVideo" class="col-sm-6">
    <div class="featuredVideoHeader"><div class="leftTriangle"></div><div class="featuredVideoText">Featured Video</div><div class="rightTriangle"></div></div>
    <div id="sidebarFeaturedVideoVideo">
      <iframe height="370" src="https://www.youtube.com/embed/n2QkJl4fBBE" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
  
  <div id="sidebarFacebookPage" class="col-sm-6">
    <div class="featuredVideoHeader"><div class="leftTriangle"></div><div class="facebookPageText">Facebook Page</div><div class="rightTriangle"></div></div>
    <div id="sidebarFacebookPicture">
      <a href="https://www.facebook.com/danielrevelry" target="_blank"><img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/batman.jpg') ?>" /></a>
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

<?php 

get_footer(); 

?> 