<?php 
	// //initialize session
	 session_start();
	
	// //check if the user has already logged in and then jump to the secured page
 	if (isset($_SESSION['username'])) {
	header('Location: securedpage.php');
	}
?>
<html>
	<head>
		<title> Create your account</title>
		<link rel="stylesheet" type="text/css" href="bootstrap_bet.css"/>
		<link rel="stylesheet" type="text/css" href="style_login.css"/>
	</head>
	<body>
		<div id="top" style="background-color:#1A202C;">
			<h1 id="topname"style="color:#DEDBA7;"> What todo?</h1>
		</div>
		<br>

		<div id="formcreate">	
		<p class="lead"> Start filling out your details:</p> <br><br>
		<form method="post" action ="feeduser.php">
			Name: <input type="text" name="name" size="30" class="option field2" style="margin-left:29px;"><br>
			Username: <input type="text" name="username" size="20" class="option field2"><br>
			Password: <input type="password" name="password" size="30" class="option field2"><br>
			<input type="submit" value="go">
		</form>
		</div>




	</body>
</html>