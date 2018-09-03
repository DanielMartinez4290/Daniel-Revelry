<?php
  $options = get_option( 'danielrevelry_options' ); 
?>
<div id="sidebarContent">
	<div id="sidebarFeaturedVideo">
		<h4>Featured Video</h4>
		<div id="sidebarFeaturedVideoVideo">
		<iframe width="270" height="321" src="<?= $options['voodoo_child_url']; ?>" frameborder="0" allowfullscreen></iframe>
		</div>

	</div>
	<section id="sidebarRecordings">
		  <h4>Recordings</h4>
		  <section id="sidebarAudio">
		  	<?php echo do_shortcode('[wonderplugin_audio id="1"]'); ?>  	
		  </section>
    </section>
	<div id="sidebarSocialIcons">
		<a href="https://www.facebook.com/danielrevelry"><div id="sidebarSocialFB">
				<i class="fa fa-facebook-official fa-2x"></i>
			</div></a>
			<a href="https://www.youtube.com/channel/UCRNhG3sbmr8DFltO2iFSVRQ"><div id="sidebarSocialYT">
				<i class="fa fa-youtube fa-2x"></i>
			</div></a>
	</div>
</div>