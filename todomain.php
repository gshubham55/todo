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
		<script type="text/javascript" src="ajax.js"></script>
		<!-- <link rel="stylesheet" href="bootstrap_bet.css"/> -->       <!-- causing problems in form's positioning--> 
		<script>
			function updateDB(){
				// console.log("qerw");
				var hr = new XMLHttpRequest();
				var url = "feedtodo.php";
				var c_todo = $('#i_todo').val();
				var c_by = $('#i_by').val();
				var c_username= "<?php echo $s_username ?>";
				// console.log(s_username);
				$.ajax({
						  type: "POST",
						  url: url,
						  data: { t_todo: c_todo , t_by: c_by ,t_user : c_username }
						}).done(function( msg ) {
						  $('#forlater').append("<div class='ret'>"+msg+"</div>");
						});
				// var transfer = "t_todo="+todo+"&t_by="+by;
				// hr.open("POST",url,true);
				// // hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				// hr.onreadystatechange=function(){
				// 	if (hr.readyState==4 && hr.status ==200){
				// 		var ret = hr.responseText;
				// 		$('#forlater').append("<div class='ret'>"+ret+"</div>");
				// 	}
				// }
				// hr.send(transfer);

			}
			
		</script>
	</head>
	<body>
		
			todo:<input type="text"  name="i_todo" id="i_todo">
			by:<input type="text"  name="i_by" id="i_by">
			<input name="btn" type="submit" value="go" onClick="javascript:updateDB()">
		
		<!-- changed form -->
		<!-- <form method="GET" action="feed(name,by)">
			<input type="text" placeholder="todo?" name="todo" id="todo">
			<input type="text" placeholder="by" name="by" id="by">
			<input type="submit" value="go">
		</form> -->
		<br><br>
		
		<p><a href="logout.php"> Logout</a></p>
		<p> <a href="alreadydone.php">TASKS ALREADY DONE!</a></p>
		<p> Your todo's :</p>
		<div id="forlater"></div>
		<?php
		// echo $s_username;
		$todo=mysql_query("SELECT * FROM $s_username ");
		// $number=mysql_num_rows($todo);
		// echo $number;
		while($row = mysql_fetch_array($todo))
		  	{
		  		if($row['condn']=="nd")
		  			{	
				  		$del=$row['id'];
				  		$cb="$del"."cb";
				  		$div="$del"."del";
				  		$task="$del"."task";
				  		//echo $div;
				  		echo "<input type='checkbox' class='cb' id = '$cb'> ";
				  		echo "<p id='$task' style='display:inline;'>task: ". $row['todo'] . "<br>by: " . $row['doneby']. "<br>status: " . $row['condn']."</p>";
						echo "<div class='hidden' id='$div' style='display:inline-block'><form method='POST' action='deletetodo.php'><input name='delete' value='$del' ' type='hidden'><input type='submit' value='done'></form></div>";
						echo "<br><br>";
					}
			}

		  mysql_close($link);

		?>
	</body>
	<script type="text/javascript" src="script_todomain.js"></script>
</html>