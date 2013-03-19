<?php 
	session_start();//initialize session
	include('config.inc');//include database connection setting
	$testpass=md5($_POST['password']);
	$login = mysql_query("SELECT * FROM user WHERE (username = '" . mysql_real_escape_string($_POST['username']) . "') and (password = '" . mysql_real_escape_string($testpass) . "')");
	//change >=1 to ==1 as as soon as the validation code is written
	
	if (mysql_num_rows($login)>=1)// remove >
	{

		$_SESSION['username']=$_POST['username'];
		header('Location:todomain.php');
	}
	else 
		{	
			 
			header('Location:index.php');
		}
		// mysql_close($link) ; // seems unnecssary though as it is redircted to another page instantly

?>