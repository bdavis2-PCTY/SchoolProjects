<?php 
	
	$PAGE='features';
	include "include/include.head.php"; 
	
?>


<!-- START PAGE.FEATURES.PHP -->
<div id='actualPageContent'>
	
	<h1 style='text-align:center;'>Isla Verde Apartment Features</h1>
	<br />
	<hr />
	<br />
	
	<script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script>
		
		$(document).ready(function(){
			var features = {
				'Property Type': [ "1 story", "Apartment", "Floor 16 - 795 sq. ft" ],
				'Accommodation Type': [ 'Vacation Rental' ],
				'Meals': ['Guests provide their own'],
				'Onsite Services': ['Housekeeper Optional'],
				'Suitability': ['Must be 25+ to book<br /><span class="lightText">Elsewise, you need a waiver, please ask</span>', 'Children welcome', 'Pets not allowed', 'Singles', 'Non-Smoking Only', 'Wheelchair accessible' ],
				'Bathrooms': ['2 Bathrooms', 'Master: toilet, shower', 'Main: Toilet, tub/shower' ],
				'Entertainment': [ "Books", "Music library", "Television", "CD player", "Satellite/Cable", "Toys", "DVD player", "Stereo", "Video library" ],
				'Theme': ['Family', 'Romantic', 'Sports & activites', 'Tourist attractions' ],
				'Attractions':[ 'Botanical garden', 'Festivals', 'Reefs', 'Caves', 'Live theater', 'Restaurants',
					'Churches', 'Marina', 'Ruins', 'Cinemas', 'Museums', 'Synagogues', 'Coin laundry',
					'Rain forests', 'Water falls' ],
				'Local services & businesses': [ 'ATM/Bank', 'Groceries', 'Laundromat', 'Fitness center', 'Hospital', 'Madical services' ],
				'Leisure activities': [ 'Beachcombing', 'Gambling casinos', 'Photography', 'Bird watching', 'Horseback riding', 'Scenic drives',
					'Eco tourism', 'outlet shopping', 'Sight seeing', 'Walking' ],
				'Communication/Internet': [ 'Fax' ],
				'Dining': ['Child\'s highchair', 'Dining area', 'Seating for 6 people' ],
				'General': [ "Activites guide", 'Free local calls', 'Parking off street', 'Air conditioning', 'Hair dryer', 'Printer', 'Alarm clock', 'Internt',
					'Scanner', 'Basic soaps', 'Iron & board', 'Sofa bed', 'Bottled water', 'Laundry soap', 'Telephone', 'Ceiling fans', 'Linens provided',
					'Toilet paper', 'Clothes dryer', 'Local activites guide', 'Towels provided', 'Elevator', 'Local maps', 'Washing machine', 'Fitness room/Equipment',
					'Paper towels', 'Wireless internet' ],
				'Kitchen': ['4 Ring stove', 'Gourmet kitchen', 'Oven', 'Blender', 'Ice maker', 'Pantry items', 'Coffee maker', 'Kitchen', 'Refrigerator',
					'Cooking utensils', 'Microwave', 'Toaster' ],
				'Outside': [ "Balcony", 'Binoculars', 'Small cooler', 'Beach towels', 'Outdoor grill', 'Terrace', 'Water sport gear' ],
				'Pool/Spa': ['Community pool<br/><span class="lightText">25-meter fresh water-pool</span>', "Outdoor pool" ],
				'Payment': [ 'Credit card' ],
				'House cleaning': [ 'Housekeeper optional' ]
				
			};
			
			var i = 0;
			for ( index in features ) {
				var html = "";
				
				if ( i == 0 )
					html = "<div class='featuresBlock' style='border:none;'>";
				else
					html = "<div class='featuresBlock'>";
				
				
				html += '<p class="blockName">' + index + '</p>';
				for ( str in features[index] )
					html += "<div class='featuresElement'>" + features[index][str] + "</div>";
				html += "</div>";
				
				$("#featuresList").html ( $("#featuresList").html() + " " + html );
				i++;
			}
		});
		
	</script>
	
	<div id='featuresList'>
	
	</div>
</div>
<!-- END PAGE.FEATURES.PHP -->

<?php include "include/include.foot.php"; ?>