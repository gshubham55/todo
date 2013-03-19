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
			What TO DO?
		</title>
		<link rel="stylesheet" href="style_todomain.css"/>
		<script type="text/javascript" src="script_jq.js"></script>
		<!-- <link rel="stylesheet" href="bootstrap_bet.css"/>   -->
	</head>
	<body>
		<br><br>
		<p><a href="logout.php"> Logout</a></p>
		<p> click <a href="todomain.php">here</a> to go back to the previous list</p>
		<p> Tasks you have accomplished :</p>
		<?php
		// echo $s_username;
		$todo=mysql_query("SELECT * FROM $s_username ");
		// $number=mysql_num_rows($todo);
		// echo $number;
		while($row = mysql_fetch_array($todo))
		  	{
		  		if($row['condn']=="d")
		  				
				  		//$del=$row['id'];
				  		//echo "task: ". $row['todo'] . "<br>by: " . $row['doneby']. "<br>status: " . $row['condn'];
						//echo"<form method='POST' action='deletetodo.php'><input name='delete' value='$del' ' type='hidden'><input type='submit' value='delete'></form>";
						//echo "<br><br><br>";
					
		  			{	
				  		$del=$row['id'];
				  		$cb="$del"."cb";
				  		$div="$del"."del";
				  		$task="$del"."task";
				  		//echo $div;
				  		echo "<input type='checkbox' class='cb' id = '$cb'> ";
				  		echo "<p id='$task' style='display:inline;'>task: ". $row['todo'] . "<br>by: " . $row['doneby']. "<br>status: " . $row['condn']."</p>";
						echo "<div class='hidden' id='$div'><form method='POST' action='harddeletetodo.php'><input name='delete' value='$del' ' type='hidden'><input type='submit' value='hard delete'></form></div>";
						echo "<br><br><br>";
					}
					
			}

		  // mysql_close($link);

		?>
		
		
		

		
		
	</body>
	<script type="text/javascript" src="script_todomain.js"></script>
</html>