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
<body>

<div id="fullsite">
	<div id="headercontainer">
		<div id="header">
			<div id="HeaderDanielRevelry">
				<a href="home"><img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/DanielRevelryLogo.png') ?>" /></a>
			</div>
			<div id="headernav">
				<ul>
					<a href="home"><li class="headerHome" ><img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/HomeButtonCropped.png') ?>" /></li></a>
					<a href="bio"><li class="bioHome" ><img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/BioButtonCropped.png') ?>" /></li></a>
					<a href="originals"><li class="originalsHome" ><img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/OriginalsButtonCropped.png') ?>" /></li></a>
					<a href="covers"><li class="coversHome" ><img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/CoversButtonCropped.png') ?>" /></li></a>
					<a href="contact"><li class="contactHome" ><img src="<?php echo home_url('/wp-content/themes/danielrevelry/img/ContactButtonCropped.png') ?>" /></li></a>
				</ul>	
			</div>
		</div>
	</div>

	<div id="container">