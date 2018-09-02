<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title> User Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>HACKATHON</h2>
	</div>
	
	<form method="post" action="register.php" class="col-6">
		<?php include ('errors.php'); ?>
		<div>
			<div class="input-text col-4" >
				Username    <input type="text" name="username" placeholder="name"value="<?php echo $username; ?>">
			</div>
			<div class="input-text col-4 right">
				Email    <input type="text" name="email" placeholder="name@example.com"value="<?php echo $email; ?>">
			</div>
		</div>
		<div>
			<div class="input-text col-4">
				Password    <input type="password" name="password_1" placeholder="name">
			</div>
			<div class="input-text col-4 right">
				Confirm Password    <input type="password" name="password_2" placeholder="password">
			</div>
		</div>
		<div class="images">
			<input type="image" value="Add Picture" class='image' height="100px" width="200px">
		</div>
		<div class="input-text submit">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
	
</body>
</html> 	