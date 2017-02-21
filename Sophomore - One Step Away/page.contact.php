<?php 
	$page = "Contact";
	include "source/include.head.php"; 
?>

				<div class='home_Catigory'>
					<div class='cadHeading'>Contact us</div>
					<div class='contents'>
						<br />
						<?php 
						
						$name = "";
						$email = "";
						$subj = "";
						$msg = "";
						
						$p = $_POST;
						if ( isset ( $p['uName'], $p['uEmail'], $p['uSubject'], $p['uMsg'] ) ) {
							$doDie = true;
							
							$name = $p['uName'];
							$email = $p['uEmail'];
							$subj = $p['uSubject'];
							$msg = strip_tags ( $p['uMsg'] );
							 
							 if ( empty ( $p['uName'] ) ) {
								echo "<strong style='color:#f00;'>Please enter your name.</strong><br />";
								$doDie = false;
							} elseif ( empty ( $p['uEmail'] ) ) {
								echo "<strong style='color:#f00;'>Please enter your email.</strong><br />";
								$doDie = false;
							} elseif ( !filter_var ( $email, FILTER_VALIDATE_EMAIL ) ) {
								echo "<strong style='color:#f00;'>Invalid email address - Please provide a valid one.</strong><br />";
								$doDie = false;
							} elseif ( empty ( $p['uSubject'] ) ) {
								echo "<strong style='color:#f00;'>Please enter the subject.</strong><br />";
								$doDie = false;
							} elseif ( empty ( $p['uMsg'] ) ) {
								echo "<strong style='color:#f00;'>Please enter your name.</strong><br />";
								$doDie = false;
							} else {
								echo "Please wait as we process your request...";
								// Valid arguments -- execute sending email //
								$subj = "A One Step Away - $subj";
								$headers  = 'MIME-Version: 1.0' . "\r\n";
								$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
								$headers .= "From: $name <smtp@aonestepaway.com>" . "\r\n";
								$msg="From: $name <<a href='mailto:$email'>$email</a>> <br />Subject: $subj<br /><br />Message:<br />$msg";
								mail ( "braydon.davis@mtchs.org", $subj, $msg, $headers );
								echo "<script>window.location='page.contact.php?sent=1';</script>";
							}
							
							if ( $doDie )
								die ( );
						} elseif ( isset ( $_GET['sent'] ) && $_GET['sent'] == "1" ) {
							echo "Thank you for submitting your email!<br />We will send you a response as soon as possible.<br /><br /><div id='contactForm'><input type='submit' value='Return Home' onclick='window.location=\"index.php\";' /></div>";
							die ( );
						}
						
						?>
					
						<form action='page.contact.php' method='POST' id='contactForm'>
							<br />
							<label>Your name:</label> <input type='text' name='uName' value="<?php echo $name; ?>" required placeholder="Ex. Jeff Wilder" /> <br />
							<label>Your email:</label> <input type='email' name='uEmail' value="<?php echo $email; ?>" required placeholder="Ex. hotshot101@yahoo.com" /><br />
							<label>Subject:</label> <input type='text' name='uSubject' value="<?php echo $subj; ?>" placeholder="Ex. Question" required /> 
							<br /><br />
							<label>Questions or concerns:</label>
							<textarea name='uMsg' required placeholder="Your message to us"><?php echo $msg; ?></textarea><br /><br />
							
							<input type="submit" value="Send message" /> 
						</form>				
					</div>
				</div>
				
				<div class='home_Catigory'>
					<div class='cadHeading'>Locate us</div>
					<div class='contents'>
						<br />
						112 Cottonwood Street, Idaho City, ID<br /><br />
						<iframe 
							src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2878.410443210408!2d-115.83567140000002!3d43.826586899999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54af2748e974f8ad%3A0x79294f36851f5864!2s112+Cottonwood+St%2C+Idaho+City%2C+ID+83631!5e0!3m2!1sen!2sus!4v1414735655879" 
							width="798" height="400" frameborder="0" style="border:0;box-shadow:0px 0px 5px #000;">
						</iframe>				
					</div>
				</div>
				
				
<?php include "source/include.foot.php"; ?>