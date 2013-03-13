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
		<title>Login page 0.2</title>
		<link rel="stylesheet" type="text/css" href="bootstrap_bet.css"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>

	<body>

		<p class="lead">User Login</p>

		<table border="0">
		<form method="POST" action="loginproc.php">
		<tr><td class="option">Username</td><td>:</td><td><input type="text" name="username" size="20" ></td></tr>
		<tr><td class="option">Password</td><td>:</td><td><input type="password" name="password" size="20"></td></tr>
		<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Login"></td></tr>
		</form>
		</table>
		<p>Don't have an account? click <a href="create.php" >here</a> to create one!</p>
	</body>

</html>	