<!DOCTYPE html>
<html>
<head>
    <title>Bonobos | MTCHS SCRUM</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="Semantic/semantic.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="Semantic/semantic.min.css" type="text/css" />
    <link rel="stylesheet" href="Assets/CSS/reset.css" type="text/css" />
    <link rel="stylesheet" href="Assets/CSS/global.css" type="text/css" />
    <link rel="stylesheet" href="Assets/CSS/home.css" type="text/css" />

	<script>
		$(document).ready(function(){
			$("img").click(function(){
				var src = $(this).attr("src");
				window.open(src);
			});
		});
	</script>

</head>

<body>
  <header>
            <div class="ui menu inverted" id="navigationMenu">
                <div class="header item">Bonobos</div>
                <a class="item" href="index.html">Home</a>
                <a class="item" href="login.php">Login</a>
                <a class="item active" href="contact.php">Contact</a>
            </div>
        </header>

    <div id="globalWrapper">
        <header>
            <div id="headerSection">
                <p class="primary">THE BONOBOS</p>
                <p class="secondary">MTCHS SCRUM REVIEW</p>
            </div>
        </header>
        <div id="contentWrapper">

			<!--
			<img src="Assets/Images/self.jpg" alt="Picture of Braydon Davis" id="selfImage" />
			-->
			
			<?php 
				 $sent = false;
	try {

		if ( isset ( $_POST['contactName'], $_POST['contactEmail'], $_POST['contactMessage'] ) ) {
		
			$name = $_POST['contactName'];
			$email = $_POST['contactEmail'];
			$message = $_POST['contactMessage'];
			$message = "New message from Bonobo contact form!!\n\nName: {$name}\n\nEmail: {$email}\n\nMessage:\n{$message}";
			
			mail("braydon.davis@mtchs.org", "Bonobo Contact", $message);
			
			echo "<div class='success'>Your order has been submitted!</div><script>window.location='contact.php?sent=true';</script>";
			$sent = true;
		}elseif ($_GET['sent']){
			echo "<div class='success'>Your order has been submitted!</div>";
		}
		
	} catch (Exception $e){
		echo "<div class='error'>There was an error!<br /><br />Message: {$e->getMessage()}<br /><br />Stack Trace:<br/ >{$e->getTraceAsString()}</div>";
	}
	
	if (!$sent){
	
?>
			<div id="bonoboImageOne"></div>

            <p class="headerText">Contact Us</p>
            <div>
              <form action="contact.php" method='POST'>
                <label for="name">Name: </label>
				<div class="ui input">
					<input type="text" name="contactName" placeholder="Barry Bonobo"></input>
				</div>
				<br>
					
                <label for="email">Email: </label>
				<div class="ui input">
					<input type="email" name="contactEmail" placeholder="bbonobo@bonobos.com"></input>
				</div>
				<br>
                
				<label for="message">Message: </label>
				<div class="ui input">
					<textarea name="contactMessage" placeholder="How do bonobos peel bananas?"></textarea>
				</div>
				<br />
				
				<input type="submit" value="Send" class="ui blue button"> 
              </form>
            </div>
			
	<?php } ?>

        </div>
        <footer>
            <p id="copyrightText">Copyright &copy; 2017 Bonobos. All Rights Reserved.</p>
        </footer>
    </div>
</body>
</html>
