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
			What TODO?
		</title>
		<link rel="stylesheet" href="style_todomain.css"/>
		<!-- <link rel="stylesheet" type="text/css" href="style_login.css"/> -->
		<script type="text/javascript" src="script_jq.js"></script>
		<script type="text/javascript" src="ajax.js"></script>
		<link rel="stylesheet" href="bootstrap_bet.css"/>       <!-- causing problems in form's positioning--> 
		

		<script type="text/javascript">
			function disp()
			{
				if( $('.hidden1').is(':visible') ) {
			    $('.hidden1').css('display', 'none');
			    $('#addrem').html("Add TODO");
			    // it's visible, do something
			}
			else {
				$('.hidden1').css('display', 'block');
			    $('#addrem').html("Close");
			    // it's not visible so do something else
			}
				
			}
		</script>
		<script type="text/javascript">
			function showby()
			{
				
				if( $('#hidden2').is(':visible') ) {
			    $('#hidden2').css('display', 'none');
			    // it's visible, do something
				}
			else {
				$('#hidden2').css('display', 'inline');
			    // it's not visible so do something else
				}
				
			
		}
		</script>
	</head>
	<body >
		<div class="navbar">
		  <div class="navbar-inner">
		    <a class="brand" href="#">What todo?</a>
		    <ul class="nav">
		      <li class="active"><a href="todomain.php">Todo</a></li>
		      <li><a href="alreadydone.php">Already done</a></li>
		      <li><a href="logout.php"><div class="right">Logout</div></a></li>
		    </ul>
		  </div>
		</div>
		

		<div class="hero-unit" id="moveup1">
		  <h1 id="moveleft1" style="margin-top:-10px;color:#D0C6B1">WHAT TODO?</h1>
		  <p style="margin-bottom:-20px;color:#D0C6B1">Check out whatever's left to be done.</p><br><br>
		  <p>
		    <a class="btn btn-primary btn-large" id="addrem" onClick="javascript:disp()">
		      Add TODO
		    </a>
		  </p>
		  <div id="formcontainer" class="hero-unit hidden1" >
			<!-- <form class="form-inline">  -->
			  <input type="text" class="input-xxlarge" style="padding:14;margin-bottom:0px;" placeholder="Todo" name="i_todo" id="i_todo">
			  <input type="text" class="input-large" style="padding:14;margin-bottom:0px;" placeholder="By" name="i_by" id="i_by">
			  
			  <button type="submit" class="btn" onClick="javascript:updateDB()">Go</button>
			 <!-- </form> -->
		   </div> 
		</div>
		<!-- <div id="top">
			<h1 id="topname"> What todo?</h1>
		</div> -->
		<br>
		

			<!-- <p> Request will be sent asynchronously only when you feed todo and by fields and not if you want do delete anything (for now).. </p> -->
			<!-- todo:<input type="text"  name="i_todo" id="i_todo">
			by:<input type="text"  name="i_by" id="i_by">
			<input name="btn" type="submit" value="go" onClick="javascript:updateDB()"> -->
		
		
		<!-- changed form -->
		<!-- <form method="GET" action="feed(name,by)">
			<input type="text" placeholder="todo?" name="todo" id="todo">
			<input type="text" placeholder="by" name="by" id="by">
			<input type="submit" value="go">
		</form> -->
		<!-- <div class="hidden1">
			<br><br><br><br><br><br>
			<br><br><br><br><br><br> 
		</div> -->
		
		<!-- <p><a href="logout.php"> Logout</a></p>
		<p> <a href="alreadydone.php">TASKS ALREADY DONE!</a></p> -->
		

		<?php
		// echo $s_username;
		$todo=mysql_query("SELECT * FROM $s_username ");
		$number=mysql_num_rows($todo);
		// echo $number;
		// if ($number==0){echo "<p id='gotnothing'> you got nothing to do!</p>";}
		// else{
		
			echo "<h1 id='marginreduce' class='hidden-start'> Your todo's :</h1><br><br><br><table class='table table-hover todo-table' style='width: 1000;margin-left:175px;'><tr><th>CBox</th><th>TODO</th><th>By</th></tr>";
		while($row = mysql_fetch_array($todo))
		  	{
		  		if($row['condn']=="nd")
		  			{	
				  		$del=$row['id'];
				  		$cb="$del"."cb";
				  		$div="$del"."del";
				  		$task="$del"."task";
				  		$task1="$task"."1";
				  		$task2="$task"."2";
				  		//echo $div;
				  // 		echo "<input type='checkbox' style='margin-left:100px;' class='cb' id = '$cb'> ";
				  // 		echo "<p id='$task' style='display:inline;' class='lead'><a onClick='showby()'><span id='undrlne' style='font-size:40'>". $row['todo'] . "</span></a> <span id='hidden2'>&nbsp&nbsp  <span style='font-size:30px;'>by</span> &nbsp&nbsp  <span style='font-size:40'>\"". $row['doneby']. "\"</span></span>"."</p>";
						// echo "<div class='hidden' id='$div' style='display:inline-block'><form method='POST' action='deletetodo.php'><input name='delete' value='$del' ' type='hidden'> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type='submit' value='done'></form></div>";
						// echo "<br><br>";

						echo "<tr>";
						echo "<td><input type='checkbox' class='cb' id = '$cb'><div class='hidden' id='$div' style='display:inline-block'><form method='POST' action='deletetodo.php'><input name='delete' value='$del' ' type='hidden'> &nbsp&nbsp <input type='submit' value='done'></form></div></td>";
						echo "<td><p class='$task1' class='lead'>". $row['todo'] ."</td>";
						echo "<td><p class='$task2' class='lead'>". $row['doneby'] ."</td>";
						// echo "<div class='hidden' id='$div' style='display:inline-block'><form method='POST' action='deletetodo.php'><input name='delete' value='$del' ' type='hidden'> &nbsp&nbsp <input type='submit' value='done'></form></div>";
						// echo "<br><br>";
						echo "</tr>";	
					}
			}
		// }

		 // mysql_close($link);

		?>

	</table>
	<!--	<div > 
			<table class="table table-hover">
				<tr>
					<th>hey</th>
					<th>wow</th>
				</tr>
				<tr>
					<td>dfs</td>
					<td>asdaf</td>
				</tr>
			</table>
		</div> -->
	</body>
	<script type="text/javascript" src="script_todomain.js"></script>
	<script>
			function updateDB(){
				// console.log("qerw");
				// var hr = new XMLHttpRequest();
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
						  $('.todo-table').append(msg);
						});
				$('#i_todo').val("");
				$('#i_by').val("");
				callafter();
				$('#marginreduce').removeClass('hidden-start');
				$('.table').removeClass('hidden-start');
				$('#gotnothing').addClass('hidden-start');

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
</html>