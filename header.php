<!doctype html>
<html>
<head>
	<?php wp_head(); ?>
	<meta charset="uft-8" />
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<title><?php wp_title(''); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<div class="container">
  
  <div class="row" id="header">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          
	      <div class="col-xs-12 col-sm-5 col-md-5" id="headerLogo">
	          <div class="navbar-header">
	          	
	        	<div class="col-xs-7 col-sm-12">
	            	<a class="navbar-brand" href="/" id="headerDanielRevelry"><img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/DanielRevelryLogo.png') ?>" /></a>
	        	</div>
	        	<div class="col-xs-5">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		              <span class="sr-only">Toggle navigation</span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
	        	</div>
	          </div>
	      </div>

			<div class="col-xs-12 col-sm-7 col-md-7" id="navBar">          
	          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                  
	            <ul class="nav navbar-nav navbar-right col-sm-12">
	            		<div class='headerLinks'>
		              		<a href="home"><li class="headerHome col-sm-2 col-md-2 headerInd" >Home</li></a>
							<a href="bio"><li class="bioHome col-sm-2 col-md-2 headerInd" >Bio</li></a>
							<a href="originals"><li class="originalsHome col-sm-3 col-md-3 headerInd" >Originals</li></a>
							<a href="covers"><li class="coversHome col-sm-2 col-md-2 headerInd" >Covers</li></a>
							<a href="contact"><li class="contactHome col-sm-3 col-md-3 headerInd" >Acoustic</li></a>
						</div>
	            </ul>
	          </div>
	        </div>
    </div>
    </nav>
  </div>