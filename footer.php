
<?php 

wp_footer(); 

?> 

<div class="row" id="footer">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          
	      <div class="col-xs-12 col-sm-5 col-md-5" id="headerLogo">
	          <div class="navbar-header">
	          	
	        	<div class="col-sm-12 footerBrand">
	            	<a class="navbar-brand" href="/" id="headerDanielRevelry"><img src="<?= home_url('/wp-content/themes/danielrevelry/img/DanielRevelryLogo.png') ?>" /></a>
	        	</div>
	        	
	          </div>
	      </div>

			<div class="col-xs-12 col-sm-7 col-md-7 footerNav" id="navBar">          
	                  
	            <ul class="nav navbar-nav navbar-right col-sm-12">
	            		<div class='footerLinks'>
	            			<?php 
	            				wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header-menu' ) );
	            			?>
						</div>
	            </ul>
	          
	        </div>
    </div>
    </nav>
  </div>

</div>