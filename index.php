<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Registration Portal</title>
	<link href="css/font.css" rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type='text/css' href="css/login-style.css">
</head>
<body>
	<?php
	//include "connection.php";
	?>
	<div class="overlay">
<div class="container">
  <h1 id="title" class="hidden"><span id="logo">Registration <strong>Portal</strong></span></h1>
</div>
		<div class="login-box">
			<div class="box-header">
			 <form action="check.php" method="POST">
				<h2>Student Log In</h2>
			</div>
			<label for="username">Username</label>
			<br/>
			<input type="text" name="use" id="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" name="pass" id="password">
			<br/>
			<button type="submit">Sign In</button>
			<br/>
			
		</form>
		</div>

		<div class="login-boxt">
			<div class="box-headert">
			 <form action="checkfact.php" method="POST">
				<h2>Faculty Log In</h2>
			</div>
			<label for="username">Username</label>
			<br/>
			<input type="text" name="id" id="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" name="password" id="password">
			<br/>
			<button type="submit">Sign In</button>
			<br/>
			
		</form>
		</div>
	</div>
		
</body>
</html>