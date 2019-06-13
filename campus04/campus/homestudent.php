<?php
	session_start();
	include('dbconnection.php');	
	$u = $_SESSION['usrnm'];
	$query = "select ID,first_name,last_name from studentlogin where UserName = '".$u."'";
	$result = mysql_query($query);
	if(mysql_num_rows($result) == 1)
	{
		while($row = mysql_fetch_array($result))
		{
			$fnm = $row["first_name"];
			$lnm = $row["last_name"];
			$_SESSION['i'] = $row["ID"];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="new.css">
  	<link href="css/global.css" type="text/css" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic">
  	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans">
</head>
<body>
	<div class="bgimage2">
		<?php if(@$_GET['personal1']==true) { ?>
			<div class="alert alert-success alert-dismissible fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><strong>Personal Details Entered Successfully!</strong></center>
			</div>
		<?php } ?>
		
		<?php if(@$_GET['personal2']==true) { ?>
			<div class="alert alert-success alert-dismissible fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><strong>Personal Details Updated Successfully!</strong></center>
			</div>
		<?php } ?>
		
		<?php if(@$_GET['edu1']==true) { ?>
			<div class="alert alert-success alert-dismissible fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><strong>Educational Details Entered Successfully!</strong></center>
			</div>
		<?php } ?>
		
		<div class="menu">
			<div class="rightmenu1">
				<li><a href="reglogout.php?logstud"><i class="fa fa-power-off"></i>  Log out</a></li>
			</div>
			<div class="leftmenu1">
				<ul>
					<li><a href="#"><i class="fa fa-user"></i>   <?php echo $fnm." ".$lnm ?></a></li>
				</ul>
			</div>
			
		</div>
		<div class="container">
			<div class="col-md-1"></div>
			<div class="col-md-5 img slidead"><br><br><br><br><br>
            	<center><a href="personal1.php"><img src="personal_details.jpe" class="logo1"><h2 class="design3">Personal Details</h2></a></center>
			</div>
			<div class="col-md-5 img slidest"><br><br><br><br><br>
            	<center><a href="educational.php"><img src="educational_details.jpe" class="logo1"><h2 class="design3">Educational Details</h2></a></center>
			</div>
			<div class="col-md-1"></div>
			<!--<div class="col-md-4 col-sm-6 img"><br><br><br><br><br><br><br>
            	<a href="registerbutton.php"><img src="view_profile.jpe" class="logo1"><h2 class="design3">View Profile</h2></a>
			</div>-->
		</div>
	</div>
</body>
</html>