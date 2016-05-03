

<?php 
	/*	
		http://www.htmlpreviews.com/cloud/resort/stormis3/index.html#
		http://cds.mtchs.org/moodle/mod/assign/view.php?id=2459
		http://www.vrbo.com/985961ha
	*/
	
	if ( !isset ( $PAGE ) ) 
		$PAGE = 'home'; ?>
<!-- START INCLUDE/INCLUDE.HEAD.PHP -->
<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset='UTF-8' />
		<title>VRBO - Isla Verde Apartment</title>
		<link rel="stylesheet" href="include/include.css.css" type="text/css" />
	</head>
	
	<body>
		<div id='header'>
			<div id='logo'>
				<a href='index.php'>
					<img src='include/img/VRBO-Isla-Verde-Logo.png' />
				</a>
			</div>
			
			<div id='logoHead'>
				<p>Isla Verde Apartment</p>
			</div><!-- #BeginLibraryItem "/Library/nav.lbi" -->
			<div id='nav'>
				<ul>
					<li <?php if($PAGE=='home') 	echo 'class="selected"'; ?> ><a href='index.php'>Overview</a></li>
					<li <?php if($PAGE=='booknow') 	echo 'class="selected"'; ?> ><a href='page.booknow.php'>Book Now</a></li>
					<li <?php if($PAGE=='features') echo 'class="selected"'; ?> ><a href='page.features.php'>Features</a></li>
					<li <?php if($PAGE=='review') 	echo 'class="selected"'; ?> ><a href='page.review.php'>Reviews</a></li>
					<li <?php if($PAGE=='gallery') 	echo 'class="selected"'; ?> ><a href='page.gallery.php'>Gallery</a></li>
				</ul>
			</div><!-- #EndLibraryItem -->
		</div>
	
		<div id='pageContent'>
<!-- END INCLUDE/INCLUDE.HEAD.PHP -->
