<!DOCTYPE html>
<html lang="en">
	<head>
		<title>A One Step Away</title>
		<meta charset="UTF-8" />
		<script src="source/include.jquery.js" type="text/JavaScript"></script>
		<script src="source/include.jquery-ui.js" type="text/JavaScript"></script>
		<script src="source/include.script.js" type="text/JavaScript"></script>
		<link rel="stylesheet" type="text/css" href="source/include.styles.css" />
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	
	<body>
		<ul id="navigation">
			<li id='icon'><img src='images/icon.png' alt='Website Logo' /></li>
			<li><a href="page.home.php"<?php if(isset($page)&&$page=="Home"){echo "class='selected'";}else{echo"class='notselected'";}?>>Home</a></li>
			<li><a href="page.about.php"<?php if(isset($page)&&$page=="About"){echo "class='selected'";}else{echo"class='notselected'";}?>>About</a></li>
			<li><a href="page.price.php"<?php if(isset($page)&&$page=="Prices"){echo "class='selected'";}else{echo"class='notselected'";}?>>Pricing</a></li>
			<li><a href="page.images.php"<?php if(isset($page)&&$page=="Images"){echo "class='selected'";}else{echo"class='notselected'";}?>>Images</a></li>
			<li><a href="page.contact.php"<?php if(isset($page)&&$page=="Contact"){echo "class='selected'";}else{echo"class='notselected'";}?>>Contact</a></li>
		</ul>
		
		<div id="wrapper">
			<div id="header">
			
			</div>
				
			<div id="contents">