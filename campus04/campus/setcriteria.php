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
</head>
<body>
	<div class="container">
		<table id="test_table" class="table table-bordered table-hover" style="padding: 50px 0;">
 			<thead>
 				<tr>
 					<br><br><th>ID</th> <th>First Name</th> <th>Middle Name</th> <th>Last Name</th> <th>Registration No</th> <th>X Marks</th> <th>XII Marks</th> <th>Aggregate</th>
 				</tr>
 			</thead>
 			<tbody>
 				<tr>
 					<?php
						session_start();
						include('dbconnection.php');
						if(isset($_POST['submit']))
						{
							$setdept = $_POST['depts'];
							$setcls = $_POST['class'];
							$setten = $_POST['sten'];
							$settwdip = $_POST['stwdip'];
							$agg = $_POST['sagg'];
							$_SESSION['setdept'] = $_POST['depts'];
							$_SESSION['setcls'] = $_POST['class'];
							$_SESSION['setten'] = $_POST['sten'];
							$_SESSION['settwdip'] = $_POST['stwdip'];
							$_SESSION['agg'] = $_POST['sagg'];
							if(isset($_POST['atkt']))
							{
								$lkt = $_POST['nol'];
								$dkt = $_POST['nod'];
								$_SESSION['lkt'] = $_POST['nol'];
								$_SESSION['dkt'] = $_POST['nod'];
							}
							$query = "select RegNo,first_name,middle_name,last_name,RegNo,x_marks,xii_marks,Aggregate from studentinfo natural join personal natural join educational where department='$setdept' AND year='$setcls' AND x_marks>'$setten' AND xii_marks>'$settwdip' AND Aggregate>'$agg' AND lkt='$lkt' AND dkt='$dkt'";
							$result = mysql_query($query);
							
							if(mysql_num_rows($result) > 0)
							{
								while($row = mysql_fetch_array($result))
								{
									echo "<td>".$row["RegNo"]."</td>";    	
									echo "<td>".$row["first_name"]."</td>";   	
									echo "<td>".$row["middle_name"]."</td>";
									echo "<td>".$row["last_name"]."</td>";
									echo "<td>".$row["RegNo"]."</td>";
									echo "<td>".$row["x_marks"]."</td>";
									echo "<td>".$row["xii_marks"]."</td>";
									echo "<td>".$row["Aggregate"]."</td>";
									echo "</tr>";
								}
							}
							else
							{
								header('location:homeadmin.php?setcriteria1=No Records Available!');
							}
						}
					?>
 			</tbody>
		</table>
		<form method="POST" action="set.php">
			<center><button type="submit" name="export" class="btn btn-success btn-lg">EXPORT</button></center>
		</form>
	</div>
</body>
</html>

