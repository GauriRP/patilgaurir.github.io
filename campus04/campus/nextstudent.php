<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="new.css">
  <link href="css/global.css" type="text/css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="bgst">
	<?php
		if(@$_GET['Empty']==true){
	?>
		<div class="alert alert-danger alert-dismissible fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><strong>Invalid Username or Password. Try again!</strong></center>
		</div>
	<?php } ?>
	<div class="login-box">
		<img src="adlog.png" class="adlog">
		<form method="POST" action="studauth.php">
			<center><label class="des">  Student Login</label></center>
			<div class="form-group">
              <label for="username" style="font-size: 20px">Username</label> 
			 	<input type="text" class="form-control" name="username" placeholder="Username">
			</div>
			<div class="form-group">
              <label for="password" style="font-size: 20px">Password</label> 
			  <input type="password" class="form-control" name="password" placeholder="Password" required>
			</div>
			<div class="checkbox">
              <label style="font-weight: bold"><input type="checkbox"> Remember me </label>
			</div>
			<br><button type="submit" name="submit" style="font-weight: bold" class="btn btn-primary btn-block btn1">LOGIN</button>
        </form> 
	</div>
  </div>
</body>
</html>