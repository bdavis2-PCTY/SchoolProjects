<?php $page="tutorials"; include "require/header.php"; ?>
<!-- BEGIN TUTORIALS.PHP -->

Tags: <a href="#aftereffects">Adobe After Effects</a>, <a href='#illustrator'>Adobe Illustrator</a>, <a href="#photoshop">Adobe Photoshop</a>, <a href="#programming">Programming/Software</a>

<br /><br />

<script>
$(document).ready(function(){
	
	console.log ( "docuemtn ready" );
	
	$("iframe" ).each(function(index,element){
		console.log ( index + ": " + element );
		
		$(element).attr("_id",index);
		
		$(element).click(function(){
			alert ( "Clicked " + $(this).attr("_id") );
		});
		
	});
	
});
</script>

<div id="videos_list">
	<div id="aftereffects" class="videoSection">
		<h2><img src="images/icon_after_effects.png" /> Adobe After Effects</h2>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/uHQUMJGYBGM?list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd" frameborder="0" allowfullscreen></iframe>
	</div>
	
	<div id="illustrator" class="videoSection">
		<h2><img src="images/icon_illustrator.png" /> Adobe Illustrator</h2>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/_VlAinQMJdw?list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/0TzlntD6Q3o?list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/byNN48WIwOc?list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/mYusK8xLcJI?list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd" frameborder="0" allowfullscreen></iframe>
	</div>

	<div id="photoshop" class="videoSection">
		<h2><img src="images/icon_photoshop.png" /> Adobe Photoshop</h2>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/M5WA1XrRM9Q?list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/7ngjn5jaggk?list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/MSKu-F-UTrI?list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/DQWnCCTBY9I?list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/30s0hBzSOXQ?list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/pjoAjtK_L8w?list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd" frameborder="0" allowfullscreen></iframe>
	</div>
	
	<div id="programming" class="videoSection">
		<h2><img src="images/icon_programming.png" /> Programming/Software</h2>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/V_LBbXFkbM8?list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/C9VfLQFf6-M?list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/wPvgs-xobJY?list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/HS3M45n6lBQ?list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/WUCt4chQcjM?list=PLXDA3cXS1a6AJvgJrGEBKm7UJr--gUPRd" frameborder="0" allowfullscreen></iframe>
	</div>
	
</div>

<!-- END TUTORIALS.PHP -->
<?php include "require/foot.php"; ?>