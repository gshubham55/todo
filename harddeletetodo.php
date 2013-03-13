<?php
	session_start();
	$s_username=$_SESSION['username'];
	if ( !isset($s_username))
	{
		header('Location:index.php');
	}
	else 
		include('config.inc');//include database connection setting
?>
<html>
	<head>
		<title>
			DELETING TO DO?
		</title>
		<!-- <link rel="stylesheet" href="bootstrap_bet.css"/> -->       <!-- causing problems in form positioning--> 
	</head>
	<body>
		<?php
			$delete=$_POST['delete'];
    		mysql_query("DELETE FROM $s_username WHERE id='$delete'");
		?>
		<?php
		header("Location:alreadydone.php");
		?>
		
	</body>
