<?php 
	// //initialize session
	 session_start();
	
	// //check if the user has already logged in and then jump to the secured page
 	if (isset($_SESSION['username'])) {
	header('Location: securedpage.php');
	}
?>
<html>

	<head>
		<title>Login page 0.2</title>
		<link rel="stylesheet" type="text/css" href="bootstrap_bet.css"/>
		<link rel="stylesheet" type="text/css" href="style_login.css"/>
	</head>

	<body>
		<!-- color combo 430 -->
		<div id="top" style="background-color:#1A202C;">
			<h1 id="topname"style="color:#DEDBA7;"> What todo?</h1>
		</div>
		
		<br>
		
		<div id="info">
			<!-- <br><br>
			<h3 class="weirdcolor"> What todo? is an app to cater to your daily needs.</h3>
			<h3 class="weirdcolor"> Use it to take down notes of whatever's on your mind!!</h3><br><br>
			<p class="lead">Login or create an account to proceed<p> -->  
			<div id="floatleft1">	
				<div class="hero-unit" id="moveup1" style="background-color:#1F7872;">
				  <h3>Welcome to</h3>
				  <h1 style="margin-left:0;margin-top:-10px;">WHAT TODO?</h1>
				  <p style="margin-right:-20px;">A simple yet effective app to take down whatever's on your mind right now.</p>
				  <!-- <p>
				    <a class="btn btn-primary btn-large">
				      Learn more
				    </a>
				  </p> -->
				</div>
			</div>

		</div>
		<div id="form" class="hero-unit"  style="background-color: #d0d0d0;">
			<h3 style="margin-left:-5px;margin-bottom:30px;margin-top:-10px;color:#1A202C">User Login:</h3>
			<div id="left">
				<form class="form-horizontal" method="POST" action="loginproc.php">
				  <div class="control-group">
				    <label class="control-label" for="inputEmail" style="font-size:18px;color:#1A202C">Username</label>
				    <div class="controls">
				      <input type="text" id="username" name="username" style="padding:12;" >
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="inputPassword" style="font-size:18px;color:#1A202C">Password</label>
				    <div class="controls">
				      <input type="password" id="password" name="password" style="padding:12;" >
				    </div>
				  </div>
				  <div class="control-group">
				    <div class="controls">
				      <!-- <label class="checkbox">
				        <input type="checkbox"> Remember me
				      </label> -->
				      <button type="submit" class="btn">Sign in</button>
				    </div>
				  </div>
				</form>

			</div>
			<p id="create" style="color:#1A202C">New here? <a href="create.php" >Create account</a></p>
		</div>
		<!-- <div id="form">	
			<p class="lead">User Login</p>

			<table border="0">
			<form method="POST" action="loginproc.php">
			<tr><td class="option field">Username</td><td>:</td><td><input type="text" name="username" size="20" ></td></tr>
			<tr><td class="option field">Password</td><td>:</td><td><input type="password" name="password" size="20"></td></tr>
			<tr><td>&nbsp;</td><td>&nbsp;</td><td><div id="submit"><input type="submit" value="Login" ></div></td></tr>
			</form>
			</table><br>
			<p id="create">New here? <a href="create.php" >Create account</a></p>
		</div> -->
<!-- 		<p>Don't have an account? click <a href="create.php" >here</a> to create one!</p> -->
	</body>

</html>	