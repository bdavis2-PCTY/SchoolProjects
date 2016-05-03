<?php $page="authors"; include "require/header.php"; ?>
<!-- BEGIN AUTHORS.PHP -->
<script type='text/javascript'>
$(document).ready(function(){
	var list = [
		{ 
			author: "Nicholas Barningham",
			tut: "Installing Eclipse",
			link:"https://www.youtube.com/watch?v=V_LBbXFkbM8&list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd&index=1"
		}, { 
			author: "Adriel Claflin",
			tut: "Gradient Maps in Photoshop",
			link: "https://www.youtube.com/watch?v=M5WA1XrRM9Q&list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd&index=2"
		}, {
			author: "Braydon Davis",
			tut: "PHP Arrays",
			link: "https://www.youtube.com/watch?v=C9VfLQFf6-M&list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd&index=3"
		}, {
			author: "John Cook",
			tut: "Saving and Executing a Python File",
			link: "https://www.youtube.com/watch?v=wPvgs-xobJY&index=4&list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd"
		}, { 
			author: "Lucas Hitchcock",
			tut: "Audio Spectrum in After Effects",
			link: "https://www.youtube.com/watch?v=uHQUMJGYBGM&index=5&list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd"
		}, {
			author: "KaCie Garza",
			tut: "Changing Backgrounds in Photoshop Elements",
			link: "https://www.youtube.com/watch?v=7ngjn5jaggk&index=6&list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd"
		}, {
			author: "Nathan Hall",
			tut: "Coding a Basic CSS Layout in Dreamweaver",
			link: "https://www.youtube.com/watch?v=HS3M45n6lBQ&list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd&index=7"
		}, {
			author: "Colton Hix",
			tut: "Photoshop Bevel & Emboss - Metal Text",
			link: "https://www.youtube.com/watch?v=MSKu-F-UTrI&index=8&list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd"
		}, {
			author: "Justin Jenson",
			tut: "Basic Self Portrait using Illustrator's Pen Tool",
			link: "https://www.youtube.com/watch?v=_VlAinQMJdw&index=9&list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd"
		}, {
			author: "Colby Johnson",
			tut: "Drop Shadows & Layer Styles in Photoshop",
			link: "https://www.youtube.com/watch?v=DQWnCCTBY9I&index=10&list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd"
		}, {
			author: "Kory LaCasse",
			tut: "Photoshop Healing Brushes",
			link: "https://www.youtube.com/watch?v=30s0hBzSOXQ&list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd&index=11"
		}, {
			author: "Madison Sargent",
			tut: "Creating Cookie text in Photoshop", 
			link: "https://www.youtube.com/watch?v=pjoAjtK_L8w&list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd&index=12"
		}, {
			author: "Jordan Plaster",
			tut: "How To Make a Basic Eye in Illustrator",
			link: "https://www.youtube.com/watch?v=0TzlntD6Q3o&list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd&index=13"
		}, {
			author: "Brandon Ptak",
			tut: "Basics of Pathfinder Tool in Illustrator",
			link: "https://www.youtube.com/watch?v=byNN48WIwOc&list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd&index=14"
		}, {
			author: "Griffen Shinn",
			tut: "Simple Shadows in Illustrator",
			link: "https://www.youtube.com/watch?v=mYusK8xLcJI&list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd&index=15"
		}, {
			author: "Kendal Anaya",
			tut: "Code Blocks \"Hello World\"",
			link: "https://www.youtube.com/watch?v=WUCt4chQcjM&list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd&index=16"
		}
	];
	
	for ( i = 0; i < list.length; i++ ) {
		
		var author  = list [ i ].author;
		var tut  = list [ i ].tut;
		var link  = list [ i ].link;
		
		$("#developersList").html ( $("#developersList").html() + "<br/ ><a href='" + link + "' target=_blank>" + tut + "</a> - <a href='mailto:" + author.toLowerCase().replace(" ", ".") + "@mtchs.org'>" + author + "</a>" );
		
	}
	
});
</script>

List of <a href='index.php'>How To Technical Procedures</a> video authors.<br /><br />

<div id="developersList"> </div>



<!-- END AUTHORS.PHP -->
<?php include "require/foot.php"; ?>