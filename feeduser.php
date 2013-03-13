	<head>
		<title>lets check your status!</title>
		<link rel="stylesheet" href="bootstrap_bet.css"/>
	</head>
<?php 
	// //initialize session
	session_start();
 	if (isset($_SESSION['username'])) {
	header('Location: securedpage.php');
	}
?>
<?php
	$hname=$_REQUEST['name'];
	$husername=$_REQUEST['username'];
	$hpassword_unenc=$_REQUEST['password'];
	$hpassword=md5($hpassword_unenc);
	include('config.inc');
	$try= mysql_query("SELECT * FROM user WHERE username='$husername'");//debug
	// $try = mysql_query("SELECT * from user where username = $husername"	);
	$number=mysql_num_rows($try);
	if ($number>=1)
	{
		echo "<p> This username aleady exists</p>";
		echo "<p> Click <a href='create.php'>here</a> to try again ";
	}
	else 
	{
		 
		 $insert=mysql_query("INSERT INTO user (name,username,password,password_unenc) VALUES ('$hname', '$husername', '$hpassword', '$hpassword_unenc')");
	     // code below not working.. debug asap
	     // $newtable=mysql_query("CREATE TABLE tt (todo CHAR(90),by VARCHAR(30))");
		 mysql_query("CREATE TABLE $husername(
							id INT NOT NULL AUTO_INCREMENT, 
							PRIMARY KEY(id),
							 todo VARCHAR(100), 
							 doneby VARCHAR(20),
							 condn VARCHAR(10))")
							 or die(mysql_error());  
		 $_SESSION['username']=$_POST['username'];
		 $sessioncur=$_SESSION['username'];
		 echo "<p>You have created your account with username: $husername and enc password: $hpassword </p>";
		 echo "<p> click <a href='securedpage.php'>here</a> to go to secured page or <a href='logout.php'>here</a> to log out";
		// unset($_SESSION['username']);
		// session_destroy();
	}
?>