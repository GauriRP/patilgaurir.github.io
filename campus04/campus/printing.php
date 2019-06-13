<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  		<link rel="stylesheet" type="text/css" href="new.css">
  		<link href="css/global.css" type="text/css" rel="stylesheet">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  		<script src="js/jquery.min.js"></script>
  		<script src="js/bootstrap.min.js"></script>
  		<script src="js/tableexport.min.js"></script>
  		<link rel="stylesheet" type="text/css" href="style.css">
  		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="  crossorigin="anonymous"></script>
  		<script src="FileSaver.min.js"></script>
  		<script src="excel-gen.js"></script>
	</head>
<body>
	<div class="container">
		<center><h1 style="color:orange">KIT's College of Engineering, Kolhapur</h1></center>
		<center><h1 style="color:orange">Student Login Information</h1></center>
		<div class="col-md-8"></div>
		<div class="col-md-2">
					<form method="POST" action="email1.php">
					<button type="submit" name="email" class="btn btn-success btn-lg">SEND EMAIL</button>
				</form>
		</div>
		<div class="col-md-2">
				<form method="POST" action="pri.php">
					<button type="submit" name="export" class="btn btn-success btn-lg">EXPORT</button>
				</form>
		</div>
		<br><br>
		<table id="test_table" class="table table-bordered table-hover" style="padding: 50px 0;">
 			<thead>
 				<tr>
 					<br><br><th>Registration No</th>	<th>Name</th> <th>UserName</th> <th>Password</th>
 				</tr>
 			</thead>
 			<tbody>
 				<tr>
 					<?php
 						session_start();
 						$host = "localhost";
					    $user = "root";
					    $password = "";
					    $db = "campus";
					    mysql_connect($host , $user , $password);
					    mysql_select_db($db);
					    $output = '';
					    if(isset($_POST['exp']))
					    {
					    	$_SESSION['y'] = $_POST['yr'];
					    	$_SESSION['d'] = $_POST['depts'];
					    	$year = $_POST['yr'];
					       	$dept = $_POST['depts'];
					       	$sql="select * from studentlogin where ID in (select ID from studentinfo where year='".$year."' AND department='".$dept."')";
					       	$result=mysql_query($sql);
					        if(mysql_num_rows($result) > 0)
					        {
					            while($row = mysql_fetch_array($result))
					            {
					             	echo "<td>".$row["RegNo"]."</td>";    	
									echo "<td>".$row["first_name"]."  ".$row["middle_name"]."  ".$row["last_name"]."</td>";    	
									echo "<td>".$row["UserName"]."</td>";   	
									echo "<td>".$row["Password"]."</td>";
					                echo "</tr>";
					            }
					        }
					    }
 					?>
 			</tbody>
		</table>
	</div>
</body>
</html>

