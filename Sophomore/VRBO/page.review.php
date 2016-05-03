<?php 
	$PAGE='review';
	include "include/include.head.php"; 
?>

<!-- START PAGE.REVIEW.PHP -->
<div id='actualPageContent'>	
	
	<script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script>
		$(document).ready(function(){
			$(".reviewStars").each(function(){
				var x = parseInt ( $(this).html() );
				$(this).html ( "" );
				for ( i = 0; i < x; i++ )
					$(this).html( $(this).html() + "<img src='https://cdn4.iconfinder.com/data/icons/small-n-flat/24/star-128.png' class='reviewStar' />" );
				if ( x < 5 ){
					for ( i = 0; i < ( 5-x ); i++ )
						$(this).html("<img src='https://cdn0.iconfinder.com/data/icons/thin-voting-awards/57/thin-231_star_favorite-128.png' class='reviewStar' />" + $(this).html() );
				}
				$(this).attr("title", x.toString() + " star rating!" );
			})
		});
	</script>
	
	<h1 style='text-align:center;'>Isla Verde Apartment Reviews</h1>
	<br />
	<hr />
	<br />
	
	<div class='reviewsReviewBlock'>
		<div class='reviewBlockFrom'>Lisa C.</div>
		<div class='reviewStars'>5</div>
		<p class='reviewBlockComment'>We stayed here for the 2nd time and it was every bit as great as the first time. Very clean, washer/dryer are a huge plus, beds are very comfortable. John is so kind to leave food and drink so you can have something when you arrive. Everything you need is provided and communication with John in advance of you stay is so smooth and easy. We can't wait to do this again next year. We have stayed in other units in Marbella Oeste and this one is by far the best!</p>
	</div>
	
	<div class='reviewsReviewBlock'>
		<div class='reviewBlockFrom'>Adriana Fischetti</div>
		<div class='reviewStars'>5</div>
		<p class='reviewBlockComment'>Let me just say we come to marabella del caribe yearly,we love the properties,you are right on the beach,a extremely safe building,with 24 hour security,parking,shopping in a short walking distance,gambling,all the amenities and that includes John's particular property,roomy,comfortable,everything you need,updated appliances,etc.and a very nice welcome package of cold cuts,some rum,soda and beer,love it! And to add, the whole experience from our first encounter with John to check out,is handled very professional from John and his team.Our only complaint is,we only fault mother nature,we have had 5 rainy weeks in the last 6 years! Oh well,i still advise you get down there and have a ball.John & Adriana</p>
	</div>
	
	<div class='reviewsReviewBlock'>
		<div class='reviewBlockFrom'>Janine R.</div>
		<div class='reviewStars'>5</div>
		<p class='reviewBlockComment'>Everything leading up to our vacation went very smoothly. Annette was a pleasure to deal with and Tanya was terrific too. They were both very accommodating. They had the refrigerator stocked with some items to get our vacation started. Omar the taxi driver was amazing!!! You cannot stay at this condo without getting Omar's cell number. He picked us up at the airport and helped us out all week. We booked a tour of the rainforest with him and he provided us with so much information. My son's loved him. The photos of the condo are accurate. The kitchen although very very small is nicely appointed. Plenty of plates, dishes, etc. The location of the condo is absolutely perfect! My husband and I traveled with our 3 young sons and having a Walgreens across the street was wonderful. You MUST go to Sweet Bakery across the street and have the Mallorca sandwich. Then go down the road to Mi Casita for delicous Puerto Rican food. One criticism we have doesn't deal with the actual condo. The gate to which you have to use in order to get on and off the beach is NUTS. Its a NYC type subway gate. Carrying coolers, beach bags and chairs got very frustrating, but once you're on the beach, you realize it's the best location on the horseshoe. We will be back :)</p>
	</div>
	
	<div class='reviewsReviewBlock'>
		<div class='reviewBlockFrom'>Lisa M.</div>
		<div class='reviewStars'>4</div>
		<p class='reviewBlockComment'>apartment was perfect. Clean and comfortable. Beautiful view of the beach from every room. This is the second renting from John and all went smoothly. I can't wait to go back.</p>
	</div>
	
	<div class='reviewsReviewBlock'>
		<div class='reviewBlockFrom'>Judith M.</div>
		<div class='reviewStars'>5</div>
		<p class='reviewBlockComment'>My first impression of the condo was..WOW!!! What a view! It was Amazing. We spent 10 comfortable days with our family of 5 (including two teenagers). We absolutely loved this place. The condo was clean and included all you could possibly need. Would highly recommend.</p>
	</div>
	
	<div class='reviewsReviewBlock'>
		<div class='reviewBlockFrom'>JR. R</div>
		<div class='reviewStars'>5</div>
		<p class='reviewBlockComment'>We stayed for 10 days and enjoyed it thoroughly. Tanya met us at the condo with juice, beer, milk, eggs, bread and other groceries that we did not have to grocery shop until the next day. The condo is clean and well-kept; secured building. Close to restaurants offering a variety of food, grocery stores, Walgreens, casinos. We like Pueblo grocery store which also sells hot food to go if you don't want to sit and eat in in a restaurant. We rented a car throughout our stay but public transportation is accessible as bus stop is a few yards away from the building. The beach is a few yards away from the condo which inspired my husband to jog/walk every morning! I could go on and on about our stay but bottom line is our experience staying at this place is very positive. Will definitely rent again the next time we visit Puerto Rico.</p>
	</div>
	
	<div class='reviewsReviewBlock'>
		<div class='reviewBlockFrom'>Morgen W.</div>
		<div class='reviewStars'>4</div>
		<p class='reviewBlockComment'>Condo was great and beautiful the beach was pretty and perfect. The condo is right on the beach with a perfect view. We plan to be back very soon and and staying in the condo again. John is great and very helpful. Love love love it!!!!</p>
	</div>
	
	<div id='reviewsLeaveComment'>
		<p>Leave a review!</p>
		<form action='#' method='POST' onsubmit='alert("Review submitted!");return false;'>
			<label>Name: </label> <input type='text' required />
			<br />
			<label>Rating: </label> <input type='number' min='1' max='5' value='5' required />
			<br />
			<label>Comments: </label> <textarea required></textarea>	
			<br />
			
			<input class='QuickButtonStyle2' type='submit' value='Submit review!' style='margin-left:100px;' />
		</form>
	</div>
	
</div>
<!-- END PAGE.REVIEW.PHP -->

<?php include "include/include.foot.php"; ?>