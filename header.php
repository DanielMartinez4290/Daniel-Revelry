<!doctype html>
<html>
<head>
	<?php wp_head(); ?>
	<meta charset="uft-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title><?php wp_title(''); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
	<link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAARERH/ERER/xEREf8RERH/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACPpqiZERER/xEREf8RERH/ERER/4+mqJkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACPpqjgERER/xEREf8RERH/ERER/xEREf8RERH/j6ao/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAI+mqP9NYWb/ERER/xEREf+Ppqj/iqCj/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4P0D8j6ao/xEREf8RERH/j6ao/4+mqP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAE1hZv+Ppqj/ERER/xEREf8RERH/ERER/xEREf8RERH/j6ao/01hZv8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAISQkBBEREf8RERH/ERER/xEREf8RERH/ERER/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACPpqj/TWFm/xEREf8RERH/TWFm/2uAhP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERER/ztDQ/sRERH/ERER/xEREf8RERH/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABNYWb/j6aomREREf8RERH/ERER/xEREf8RERH/ERER/4+mqJlSZmv/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAARERH/ERER/xEREf8RERH/ERER/xcYGP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACPpqj/TWFm/46lp/8RERH/ERER/4uho/9NYWb/j6ao/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAE1hZv9NYWb/JSgp/xEREf8RERH/ERER/xEREf8RERH/ERER/xEREf9NYWb/TWFm/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABEREf8RERH/ERER/xEREf8RERH/ERER/xEREf8RERH/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABEREf8RERH/ERER/xEREf+HnZ8zAAAAAIednxAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/D8AAPgfAADwDwAA+B8AAPgfAADgBwAA+B8AAPgfAAD4HwAA4AcAAPgfAADwDwAAwAMAAPAPAAD8PwAA//8AAA==" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	 <base href="/">
</head>

<div class="container">
  
  <header class="row">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          
	      <div class="col-sm-5" id="headerLogo">
	          <div class="navbar-header">
	          	
	        	<div class="col-xs-7 col-sm-12">
	            	<a class="navbar-brand" href="/" id="headerDanielRevelry"><img src="<?= home_url('/wp-content/themes/danielrevelry/img/DanielRevelryLogo-compressor.png') ?>" /></a>
	        	</div>
	        	
	          </div>
	      </div>

			<div class="col-xs-12 col-sm-7" id="navBar">          
	                  
	            <ul class="nav navbar-nav navbar-right col-sm-12">
	            		<div class='headerLinks'>
	            			<?php 
	            				wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header-menu' ) );
	            			?>
						</div>
	            </ul>
	          
	        </div>
    </div>
    </nav>
  </header>

   <script type="text/javascript">
   
   jQuery(document).ready(function($){  
   	  
	});
    </script>