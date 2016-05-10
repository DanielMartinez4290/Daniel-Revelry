<div id="sidebarContent" class="cf">
	<div id="sidebarFeaturedVideo">
		<div id="sidebarFeaturedVideoText">
			<img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/SidebarFeaturedVideoHeader.png') ?>" />
		</div>
		<div id="sidebarFeaturedVideoVideo">
			<iframe width="270" height="190" src="https://www.youtube.com/embed/ijqKuPQcFnM" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	
	<div id="sidebarFacebookPage">
		<div id="sidebarFacebookText">
			<img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/SidebarFacebookPageHeader.png') ?>" />
		</div>
		<div id="sidebarFacebookPicture">
			<a href="https://www.facebook.com/danielrevelry" target="_blank"><img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/renaissance.jpg') ?>"  width="270" /></a>
		</div>
	</div>

	<div id="sidebarUpcomingShows">
		<div id="sidebarUpcomingShowsText">
			<img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/SidebarUpcomingShowsHeader.png') ?>" />
		</div>
		<div id="sidebarUpcomingShowsShows">
			<?php  dynamic_sidebar('main'); ?>
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
</div>