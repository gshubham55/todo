<?php
	session_start();
	if ( !isset($_SESSION['username']))
	{
		header('Location:index.php');
	}
?>
<html>
	<head>
		<title>
			Secured page
		</title>
	</head>
	<body>
		<p> This is a secured page with session : <?=$_SESSION['username'];?>  </p><br><br>
		<p> You can put your secured info here!</p>
		<p> click <a href="todomain.php">here</a> to move on to your TODO list!!</p>
		<p><a href="logout.php"> logout</a></p>
		<?php
		// mysql_close($link) ; 
		?>
	</body>
</html>