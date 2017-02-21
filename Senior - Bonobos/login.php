<?php 

	require_once "API/API/APIBase.php";
	require_once "API/API/AccountAPI.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Bonobos | Login | MTCHS SCRUM</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="Semantic/semantic.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="Semantic/semantic.min.css" type="text/css" />
    <link rel="stylesheet" href="Assets/CSS/reset.css" type="text/css" />
    <link rel="stylesheet" href="Assets/CSS/global.css" type="text/css" />
    <link rel="stylesheet" href="Assets/CSS/home.css" type="text/css" />
	<link rel="stylesheet" href="Assets/CSS/login.css" type="text/css" />
</head>

<body>
    <div id="globalWrapper">
        <div id="contentWrapper">
            
			<div id="loginWrapper">
				<form action="login.php" method="post">
					<label>Email:</label> 
					<div class="ui input">
						<input type='email' name='loginEmail' required placeholder="Login email address" />
					</div>
					<br />
					<label>Password:</label> 
					<div class="ui input">
						<input type="password" name="loginPassword" required placeholder="Login password" />
					</div>
					<br />
					<input type="submit" value="Register" class="ui green button" name="doRegister" />
					<input type="submit" value="Login" class="ui blue button" name="doLogin" />
				</form>
			</div>
			
        </div>
        <footer>
            <p id="copyrightText">Copyright &copy; 2017 Bonobos. All Rights Reserved.</p>
        </footer>
    </div>
</body>
</html>
