<?php
/**
 * Template Name: Front Page Template
 */
get_header(); 

?>

  <div class="row">
    <div class="col-xs-12" id="mainPic">
     <img width="100%" src="<?= home_url('/wp-content/themes/danielrevelry/img/revelry-logo.jpg') ?>"  /> 
        </div>
     
  </div>
<?php
  $options = get_option( 'danielrevelry_options' ); 
?>
  <div class="row homeContent">

    <div class="col-xs-12">
      <div class="mainVideo1" class="col-xs-12 col-sm-6">
        <div class="homeHeader">
          <h4>Originals</h4>
        </div>
        <iframe height="370" width="97%" src="<?= $options['gypsy_soul_url']; ?>"  allowfullscreen></iframe>
      </div>
      <div class="mainVideo2" class="col-xs-12 col-sm-6">
        <div class="homeHeader">
          <h4>Covers</h4>
        </div>
        <iframe height="370" width="99%" src="<?= $options['pride_and_joy_url']; ?>" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>

    <div class="col-xs-12">
      <div class="mainVideo1" class="col-xs-12 col-sm-6">
        <div class="homeHeader">
          <h4>Featured Video</h4>
        </div>
        <iframe height="370" width="99%" src="<?= $options['voodoo_child_url']; ?>" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="mainVideo2 recordings" class="col-xs-12 col-sm-6">
        <div class="homeHeader">
          <h4>Recordings</h4>
        </div>
        <section id="homeAudio">
          <?php echo do_shortcode('[wonderplugin_audio id="1"]'); ?>  
        </section>
      </div>
    </div>
</div>
<?php get_footer(); ?>  
    </div>

  </div>
</div>