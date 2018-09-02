<?php include('server.php') ?>
 <!DOCTYPE html>
<html>
<head>
	<title> Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class='container'>
		<div class="header">
			<h2>HACKATHON</h2>
		</div>
		
		<form method="post" action="login.php " class='col-7'>
			<div class='credential'>
				<div class="input-text col-4">
					<label>Username</label>
					<input type="text" name="username" placeholder="Username">
				</div>
				
				<div class="input-text right col-4">
					<label>Password</label>
					<input type="password" name="password_1" placeholder="Password">
				</div>
			</div>
			<div class="input-text submit">
				<button type="submit" name="login" class="btn">Login</button>
			</div>
			<p>
				New to hackathon? <a href="register.php"> Sign up</a>
			</p>
		</form>
	</div>
</body>
</html> 	