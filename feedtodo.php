<?php
				include('config.inc');
				$q_username=$_REQUEST['t_user'];
				$todo=$_REQUEST['t_todo'];
				$by=$_REQUEST['t_by'];
				// echo $todo;
				// echo $s_username;
				mysql_query("INSERT INTO $q_username (todo,doneby,condn) VALUES ('$todo','$by','nd')    ");
				// echo "Your todo has been successfully updated<br>";
				// echo "click <a href='todomain.php'>here</a> to go back to your list";
				echo "<input type='checkbox' class='cb' id = '$cb'> ";
				echo "<p id='$task' style='display:inline;'>task: ". $todo . "<br>by: " . $by. "<br>status: nd" ."</p>";
				echo "<div class='hidden' id='$div' style='display:inline-block'><form method='POST' action='deletetodo.php'><input name='delete' value='$del' ' type='hidden'><input type='submit' value='done'></form></div>";
				echo "<br><br>";
?>