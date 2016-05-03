<?php 
	$PAGE='booknow';
	include "include/include.head.php"; 
?>

<!-- START PAGE.BOOKNOW.PHP -->
<div id='actualPageContent'>	
	<div id='bookMethods'>
		<script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<!-- jQuery UI -->
		<link href="include/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<script src="include/jquery-ui/jquery-ui.min.js"></script>
		
		<script>
			$(document).ready(function(){
				$(".datepicker").datepicker();
			});
		</script>
		
		<h1 style='text-align:center;'>Reserve your stay today!</h1>
		<br />
		<hr />
		<br />
		
		<?php 
			$name = "";
			$email = "";
			$phone = "";
			$nightFrom = "";
			$nightTo = "";
			$request = "";
			
			$disabled = false;
			
			if ( isset ( $_GET['sent'] ) && $_GET['sent'] == '1' ){ ?>
			
			<script>
				function removeSentMessage ( ) {
					$("#bookEmailSent").animate({
						padding:"0 5px 0 5px",
						height:0,
						'margin-top': 0,
						'margin-bottom': 0
					},1000, function(){
						$(this).remove();
					});
				}
				
				function showSentMessage( ) {
					$("#bookEmailSent").css("height","0").css("padding","0 5px 0 5px").animate({
						height:"27px",
						padding:"5px"
					},1000);
				};
				
				$(document).ready( showSentMessage );
			</script>
			
			<?php
				echo '<p id="bookEmailSent">Your request has been sent! <input value="x" id="bookEmailSentClose" type="button" onclick="removeSentMessage();" /></p>';
			} elseif ( isset ( $_POST['bookFullName'], $_POST['bookEmail'], $_POST['bookPhoneNumber'], $_POST['bookNightsTo'], $_POST['bookNightsFrom'] ) ) {
			
				$disabled = true;
				
				echo '<p id="bookEmailProcess">Processing request, please wait</p>';
				
				$name = $_POST['bookFullName'];
				$email = $_POST['bookEmail'];
				$phone = $_POST['bookPhoneNumber'];
				$nights = $_POST['bookNightsFrom'] . " - " . $_POST['bookNightsTo'];
			
				if ( isset ( $_POST['bookRequests'] ) ) $request = $_POST['bookRequests'];
						
				$message = "From: $name <$email>\n\nPhone Number: $phone\n\nDates: $nights\n\nSpecial Requests: $request";
				
				mail ( "duane.erickson@mtchs.org", "Isa Verde Apartment", $message );
				
				echo "<script>window.location='page.booknow.php?sent=1';</script>";
					
			}
		
		?>
		<div style='margin-bottom:30px;'> </div>

		
		<div id='bookForm'>

			<form method='POST' action='page.booknow.php' name='bookFormForm'>
				<label>Full Name: </label><input type='text' required name='bookFullName' <?php if($disabled)echo'disabled';?> value='<?php echo $name; ?>' />
				<br />
				<label>Email Address: </label><input type='email' required name='bookEmail' <?php if($disabled)echo'disabled';?> value='<?php echo $email; ?>' />
				<br />
				<label>Phone Number: </label><input type='tel' required name='bookPhoneNumber' <?php if($disabled)echo'disabled';?> value='<?php echo $phone; ?>' />
				<br />
				<label>From Date: </label><input class='datepicker' type='date' required name='bookNightsFrom' <?php if($disabled)echo'disabled';?> value='<?php echo $nightFrom; ?>' />
				<br />
				<label>To Date: </label><input class='datepicker' type='date' required name='bookNightsTo' <?php if($disabled)echo'disabled';?> value='<?php echo $nightTo; ?>' />
				<br />
				<label>Special Requests: </label><textarea name='bookRequests' <?php if($disabled)echo'disabled';?> value='<?php echo $request; ?>' ></textarea>
				<br />
				<input value='Send request' type='submit' class='QuickButtonStyle2'>
			</form>
		</div>
		
		<div id='bookMap'>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d946.2193821592956!2d-66.026346!3d18.443869!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe4d918e2815c7da8!2sThe+Beach+House!5e0!3m2!1sen!2sus!4v1418440741236" width="550" height="300" frameborder="0" style="border:0"></iframe>
		</div>
	</div>
	
	<div id='mapBlocks'>
		<h1 class='mapCellHeader'>Nearby Areas and Locations</h1>
		<br />
		<div class='mapCell'>
			<p class='mapCellName'>Nearest Airport</p>
			<p class='mapCellDistance'>2 Miles</p>
			<br />
			<p class='mapCellDescription'>Luis Muñoz Marín International Airport</p>
		</div>
		<div class='mapCell'>
			<p class='mapCellName'>Nearest Barpub</p>
			<p class='mapCellDistance'>50 Metres</p>
			<br />
			<p class='mapCellDescription'>Several of them</p>
		</div>
		<div class='mapCell'>
			<p class='mapCellName'>Nearest Golf</p>
			<p class='mapCellDistance'>10 Miles</p>
			<br />
			<p class='mapCellDescription'>Dorado (West of S.J.) or Rio Grande (East of S.J.)</p>
		</div>
		<div class='mapCell'>
			<p class='mapCellName'>Nearest Motorway</p>
			<p class='mapCellDistance'>0.25 Miles</p>
			<br />
			<p class='mapCellDescription'>Baldorioty de Castro Avenue (Route 26)</p>
		</div>
		<div class='mapCell'>
			<p class='mapCellName'>Nearest Restaurant</p>
			<p class='mapCellDistance'>50 Metres</p>
			<br />
			<p class='mapCellDescription'>Over 30 including fast food, sushi, Metropol, Ruth's Chris</p>
		</div>
		<div class='mapCell'>
			<p class='mapCellName'>Nearest Beach</p>
			<p class='mapCellDistance'>20 Metres</p>
			<br />
			<p class='mapCellDescription'>Isla Verde Beach, at your feet</p>
		</div>
	</div>
</div>
<!-- END PAGE.BOOKNOW.PHP -->

<?php include "include/include.foot.php"; ?>