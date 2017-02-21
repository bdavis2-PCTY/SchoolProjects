<?php 
	$PAGE='gallery';
	include "include/include.head.php"; 
?>

<!-- START PAGE.GALLERY.PHP -->
<div id='actualPageContent'>	
		
	<script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		
	<script>
	
		var images = [ 
			[ 'http://imagesus.homeaway.com/mda01/d6c1aec0-7813-4703-8c43-b448634c8543.1.10', 'Favorite moment of the day as dusk sets in.' ],
			[ 'http://imagesus.homeaway.com/mda01/f9ff40f8-25ac-42cc-8a27-912b11b97726.1.10', 'Come on in! As you enter, kitchen on the left, hall leads to bedrooms.' ],
			[ 'http://imagesus.homeaway.com/mda01/85ab9d1f-2855-4133-a7b0-03d123c21a68.1.10', 'Luxuriously appointed kitchen has plenty of space, easy access' ],
			[ 'http://imagesus.homeaway.com/mda01/0b471bee-12ae-49b9-af0c-6d7d130a2646.1.10', 'Living room and balcony. Leather sofa doubles as sofa-bed.' ],
			[ 'http://imagesus.homeaway.com/mda01/622ec8e2-3d26-49c8-9b31-576d97626f61.1.10', 'Master bedroom with Queen-size bed and ensuite bathroom off to the left.' ],
			[ 'http://imagesus.homeaway.com/mda01/379a023a-56a6-4907-9abb-502edfdaa985.1.10', 'Small work area with mutli-printer, Wi-fi throughout the proptery.' ],
			[ 'http://imagesus.homeaway.com/mda01/ee5286b9-5aa8-45bb-aa94-79d793b7cc7d.1.10', 'Second bedroom with Queen size bed' ],
			[ 'http://imagesus.homeaway.com/mda01/9d6a9eea-8bf7-4bcb-ad08-f05928a6b527.1.10', 'Isla Verde beach mid-week, without the Sunday crowd. That\'s our pool on the right.' ],
			[ 'http://imagesus.homeaway.com/mda01/321bd743-5cb1-4478-8e65-1d7b84ec3efc.1.10', 'The end of another fun-filled day in teh Caribbean.' ],
			[ 'http://imagesus.homeaway.com/mda01/a33f613e-6033-42ed-b210-6168d8cc9d4a.1.10', 'Beach is just out hte door. Ocean view is in building on the left, close to the top.' ],
			[ 'http://imagesus.homeaway.com/mda01/94af3564-36ad-4eee-8571-a904ab594da6.1.10', 'Isla Verde Beach as you step through the gate. Jet skis down to the right.' ],
		];
		
		$(document).ready(function(){
			for ( index in images ) {
				var url = images [ index ] [ 0 ];
				var desc = images [ index ] [ 1 ];
				$("#galleryImages").html ( $("#galleryImages").html ( ) + " <img src='" + url + "' class='galleryImage' onclick='triggerImagePop(this);'/> " );	
				// alert ( index );
			}
		});
			
		// Create image popups
		function triggerImagePop ( e ){
			$("#galleryImages").html ( $("#galleryImages").html() + "<div id='overlay'></div>" );				
			var url = $(e).attr('src');
			var desc = "";
			for ( index in images ) {
				if ( images[index][0] == url )
					desc = images[index][1];
			}
			
			$("#galleryImages").html ( $("#galleryImages").html() + "<div id='imgPopWrapper'><div id='imgPopup'><img src='" + url + "'><br /><span>" + desc + "</span></div></div>" );
			
			$("#imgPopup").css ( "width", $("#imgPopup img").css("width") );
			
			$("#overlay, #imgPopWrapper").click(function(){
				$("#overlay").remove();
				$("#imgPopWrapper").remove();
				$("#imgPopup").remove();
			});
		}
	</script>
	
	<h1 style='text-align:center;'>Isla Verde Apartment Images</h1>
	<p style='text-align:center;font-size:13px;font-style:italic;'>Click to enlarge</p>
	<hr />
	<br />
	<div id='galleryImages'>
		
	</div>
	
</div>
<!-- END PAGE.GALLERY.PHP -->

<?php include "include/include.foot.php"; ?>