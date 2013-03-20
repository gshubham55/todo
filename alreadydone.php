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
		<link rel="stylesheet" href="bootstrap_bet.css"/>
		<script type="text/javascript" src="script_jq.js"></script>
		<!-- <link rel="stylesheet" href="bootstrap_bet.css"/>   -->
	</head>
	<body>

		<div class="navbar">
		  <div class="navbar-inner">
		    <a class="brand" href="#">What todo?</a>
		    <ul class="nav">
		      <li><a href="todomain.php">Todo</a></li>
		      <li class="active"><a  href="alreadydone.php">Already done</a></li>
		      <li><a href="logout.php"><div class="right">Logout</div></a></li>
		    </ul>
		  </div>
		</div>
		

		<div class="hero-unit" id="moveup1">
		  <h1 id="moveleft1" style="margin-top:-10px;color:#D0C6B1;">WHAT NOT TODO!</h1>
		  <p style="margin-bottom:-20px;color:#D0C6B1">Coz you're already done with it, silly.</p><br><br>
		</div>








		<!-- <br><br>
		<p><a href="logout.php"> Logout</a></p>
		<p> click <a href="todomain.php">here</a> to go back to the previous list</p>
		<p> Tasks you have accomplished :</p> -->
		<?php
		// echo $s_username;
		$todo=mysql_query("SELECT * FROM $s_username ");
		// $number=mysql_num_rows($todo);

		// echo $number;
		echo "<h1 id='marginreduce'> Your todo's :</h1><br><br><br><table class='table table-hover todo-table' style='width: 1000;margin-left:175px;'><tr><th>CBox</th><th>DONE</th><th>Set Target Time</th></tr>";
		while($row = mysql_fetch_array($todo))
		  	{
		  		if($row['condn']=="d")
		  				
				  		//$del=$row['id'];
				  		//echo "task: ". $row['todo'] . "<br>by: " . $row['doneby']. "<br>status: " . $row['condn'];
						//echo"<form method='POST' action='deletetodo.php'><input name='delete' value='$del' ' type='hidden'><input type='submit' value='delete'></form>";
						
					
		  			{	
				  		$del=$row['id'];
				  		$cb="$del"."cb";
				  		$div="$del"."del";
				  		$task="$del"."task";
				  		$task="$task"."1";
				  		$task="$task"."2";
				  		//echo $div;
				  // 		echo "<input type='checkbox' class='cb' id = '$cb'> ";
				  // 		echo "<p id='$task' style='display:inline;'>task: ". $row['todo'] . "<br>by: " . $row['doneby']. "<br>status: " . $row['condn']."</p>";
						// echo "<div class='hidden' id='$div'><form method='POST' action='harddeletetodo.php'><input name='delete' value='$del' ' type='hidden'><input type='submit' value='hard delete'></form></div>";
						

				  		echo "<tr>";
						echo "<td><input type='checkbox' class='cb' id = '$cb'><div class='hidden' id='$div' style='display:inline-block'><form method='POST' action='harddeletetodo.php'><input name='delete' value='$del' ' type='hidden'> &nbsp&nbsp <input type='submit' value='hard delete'></form></div></td>";
						echo "<td><p class='$task1' class='lead'>". $row['todo'] ."</td>";
						echo "<td><p class='$task2' class='lead'>". $row['doneby'] ."</td>";
						// echo "<div class='hidden' id='$div' style='display:inline-block'><form method='POST' action='deletetodo.php'><input name='delete' value='$del' ' type='hidden'> &nbsp&nbsp <input type='submit' value='done'></form>Set </div>";
						
						echo "</tr>";	
						
					}
					
			}
			echo "</table>";
		  // mysql_close($link);

		?>
		
		
		

		
		
	</body>
	<script type="text/javascript" src="script_todomain.js"></script>
</html>