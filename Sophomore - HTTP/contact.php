<?php $page="contact"; include "require/header.php"; ?>
<!-- BEGIN CONTACT.PHP -->

<p>Contact <a href='index.php'>How To Technical Procedures</a> with a question or request for future tutorials</p>
<br />

<?php 

if ( isset ( $_POST['uName'], $_POST['uEmail'], $_POST['uSubject'], $_POST['uMessage'] ) ) {
	$name = $_POST['uName'];
	$email = $_POST['uEmail'];
	$subj = $_POST['uSubject'];
	$msg = $_POST['uMessage'];
	
	$message="From: {$name} <{$email}>\nSubject: {$subj}\n\nMessage:\n{$msg}";
	mail ( "duange.erickson@mtchs.org", "HTTP - {$subj}", $message, "From: HowToTechnicalProcedures@braydond.smtchs.org" );
	echo "<script>window.location='contact.php?sent=1';</script>";
	exit ( );
}

if ( isset ( $_GET['sent'] ) && $_GET['sent'] == '1' ) {
	echo "<span style='color:#0c0;font-weight:bold;'>Your message has been sent!</span><br /><br />";
}

?>

<div class="contactBlock" id="block1">
	<strong>Email us</strong>
	<form id="contactForm" method="POST" action="contact.php">
		<label>Name:</label> <input type='text' required name='uName' /> <br />
		<label>Email:</label> <input type='email' required name='uEmail' /> <br />
		<label>Subject:</label> <input type='text' required name='uSubject' /> <br />
		<label>Message:</label> <textarea required name='uMessage'></textarea>
		<br />
		<input type='submit' value="Send" />
	</form>
</div>

<div class="contactBlock" id="block2">
	<strong>Mail us</strong>
	<br />
	Address: 3800 N. Locust Grove<br />
	Meridian, ID 83646
	<br /><br />
	Phone: (208) 288-2928
	
</div>

<!-- END CONTACT.PHP -->
<?php include "require/foot.php"; ?>