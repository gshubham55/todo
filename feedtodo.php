<?php
				include('config.inc');
				$q_username=$_REQUEST['t_user'];
				$todo=$_REQUEST['t_todo'];
				$by=$_REQUEST['t_by'];
				//echo $todo;
				//echo "//".$q_username;
				mysql_query("INSERT INTO $q_username (todo,doneby,condn) VALUES ('$todo','$by','nd')    ");
				// echo "Your todo has been successfully updated<br>";
				// echo "click <a href='todomain.php'>here</a> to go back to your list";
				$selec=mysql_query("SELECT * FROM $q_username where todo='$todo' AND doneby='$by'");
				$row = mysql_fetch_array($selec);
				// $number=mysql_num_rows($row);
				$del=$row['id'];
				$cb="$del"."cb";
				$div="$del"."del";
				$task="$del"."task";
				$task1="$task"."1";
				$task2="$task"."2";
				// echo "id:".$task;
				// echo "<input type='checkbox' class='cb' id = '$cb'> ";
				// echo "<p id='$task' style='display:inline;'>task: ". $todo . "<br>by: " . $by. "<br>status: nd" ."</p>";
				// echo "<div class='hidden' id='$div' style='display:inline-block'><form method='POST' action='deletetodo.php'><input name='delete' value='$del' ' type='hidden'><input type='submit' value='done'></form></div>";
				// echo "<br><br>";
					
						// echo "<input type='checkbox' style='margin-left:100px;' class='cb' id = '$cb'> ";
				  		// echo "<p id='$task' style='display:inline;' class='lead'><a onClick='showby()'><span id='undrlne' style='font-size:40'>". $row['todo'] . "</span></a> <span id='hidden2'>&nbsp&nbsp  <span style='font-size:30px;'>by</span> &nbsp&nbsp  <span style='font-size:40'>\"". $row['doneby']. "\"</span></span>"."</p>";
						// echo "<div class='hidden' id='$div' style='display:inline-block'><form method='POST' action='deletetodo.php'><input name='delete' value='$del' ' type='hidden'> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type='submit' value='done'></form></div>";
						// echo "<br><br>";
			
			echo "<tr>";
			echo "<td><input type='checkbox' class='cb' id = '$cb'></td>";
			echo "<td><p class='$task1' class='lead'>". $row['todo'] ."</td>";
			echo "<td><p class='$task2' class='lead'>". $row['doneby'] ."</td>";
			echo "<div class='hidden' id='$div' style='display:inline-block'><form method='POST' action='deletetodo.php'><input name='delete' value='$del' ' type='hidden'> &nbsp&nbsp <input type='submit' value='done'></form></div>";
			echo "<br><br>";
			echo "</tr>";
			
?>