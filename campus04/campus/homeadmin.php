<?php
	session_start();
	if(isset($_SESSION['usr']))
	{

	}
	else
	{
		header('Location:nextadmin.php');
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
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic">
  	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans">
</head>
<body class="bgimage2">
	<div >
		<?php if(@$_GET['import2']==true) { ?>
			<div class="alert alert-success alert-dismissible fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><strong>Successfully Batch Added!</strong></center>
			</div>
		<?php } ?>
		
		<?php if(@$_GET['import1']==true) { ?>
			<div class="alert alert-warning alert-dismissible fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><strong>Batch Already Exists!</strong></center>
			</div>
		<?php } ?>
		
		<?php if(@$_GET['generate1']==true) { ?>
			<div class="alert alert-warning alert-dismissible fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><strong>Password Already Generated!</strong></center>
			</div>
		<?php } ?>
		
		<?php if(@$_GET['generate2']==true) { ?>
			<div class="alert alert-success alert-dismissible fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><strong>Password Successfully Generated!</strong></center>
			</div>
		<?php } ?>
		
		<?php if(@$_GET['generate3']==true) { ?>
			<div class="alert alert-warning alert-dismissible fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><strong>No Records Available!</strong></center>
			</div>
		<?php } ?>
		
		<?php if(@$_GET['setcriteria1']==true) { ?>
			<div class="alert alert-warning alert-dismissible fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><strong>No Records Available!</strong></center>
			</div>
		<?php } ?>
		
		<?php if(@$_GET['email1']==true) { ?>
			<div class="alert alert-success alert-dismissible fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><strong>Emails Sent Successfully!</strong></center>
			</div>
		<?php } ?>
		
		<div class="menu menuani">
			<div class="leftmenu">
				<h4> <i class="fa fa-user"></i>  Admin TPC-KIT</h4>
			</div>
			<div class="modal" id="addBatch">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content form-container-1">
						<div class="modal-header">
							<h2 class="text-center text-primary design"> Add Batch </h2>
							<button type="button" class="close" data-dismiss="modal"> &times;</button>
						</div>
						<div class="modal-body">
							<form class="design1" method="post" action="import_query.php" name="upload_excel" enctype="multipart/form-data">
								<div class="form-group">
									<label> Select Admission Year:</label>
									<div class="dropdown">
										<select name="yr">
											<option>Select</option>
											<option value="2017" class="dropdown-item">2016</option>
											<option value="2017" class="dropdown-item">2017</option>
											<option value="2018" class="dropdown-item">2018</option>
											<option value="2019" class="dropdown-item">2019</option>
											<option value="2020" class="dropdown-item">2020</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label> Select Department:</label>
									<div class="dropdown">
										<select name="depts">
											<option>Select</option>
											<option value="Biotech" class="dropdown-item">Biotechnology</option>
											<option value="Civil" class="dropdown-item">Civil</option>
											<option value="CSE" class="dropdown-item">Computer Science</option>
											<option value="Electronics" class="dropdown-item">Electronics</option>
											<option value="ETC" class="dropdown-item">Electronics and Telecommunication</option>
											<option value="Env" class="dropdown-item">Environment</option>
											<option value="IT" class="dropdown-item">Information Technology</option>
											<option value="Mech" class="dropdown-item">Mechanical</option>
											<option value="Prod" class="dropdown-item">Production</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<br><label>Import CSV File:</label>
						            <input type="file" class="form-control" multiple name="filename" id="filename"><br>
						        </div>
						        <input type="submit" id="submit" class="btn btn-success btn-block" name="submit" value="UPLOAD">
						    </form>
						</div>
					</div>
				</div>
			</div>
			
			<div class="modal" id="Generate">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content form-container-1">
						<div class="modal-header">
							<h2 class="text-center text-primary design"> Generate Password </h2>
							<button type="button" class="close" data-dismiss="modal"> &times;</button>
						</div>
						<div class="modal-body">
							<form class="design1" method="post" action="generate.php">
								<div class="form-group">
									<label> Select Admission Year:</label>
									<div class="dropdown">
										<select name="yr">
											<option>Select</option>
											<option value="2017" class="dropdown-item">2016</option>
											<option value="2017" class="dropdown-item">2017</option>
											<option value="2018" class="dropdown-item">2018</option>
											<option value="2019" class="dropdown-item">2019</option>
											<option value="2020" class="dropdown-item">2020</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label> Select Department:</label>
									<div class="dropdown">
										<select name="depts">
											<option>Select</option>
											<option value="Biotech" class="dropdown-item">Biotechnology</option>
											<option value="Civil" class="dropdown-item">Civil</option>
											<option value="CSE" class="dropdown-item">Computer Science</option>
											<option value="Electronics" class="dropdown-item">Electronics</option>
											<option value="ETC" class="dropdown-item">Electronics and Telecommunication</option>
											<option value="Env" class="dropdown-item">Environment</option>
											<option value="IT" class="dropdown-item">Information Technology</option>
											<option value="Mech" class="dropdown-item">Mechanical</option>
											<option value="Prod" class="dropdown-item">Production</option>
										</select>
									</div>
								</div>
								<br><br><input type="submit" id="submit" class="btn btn-success btn-block" name="submit" value="OK">
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal" id="Print">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content form-container-1">
						<div class="modal-header">
							<h2 class="text-center text-primary design"> Print </h2>
							<button type="button" class="close" data-dismiss="modal"> &times;</button>
						</div>
						<div class="modal-body">
							<form class="design1" method="post" action="printing.php">
								<div class="form-group">
									<label> Select Year:</label>
									<div class="dropdown">
										<select name="yr">
											<option>Select</option>
											<option value="2017" class="dropdown-item">2016</option>
											<option value="2017" class="dropdown-item">2017</option>
											<option value="2018" class="dropdown-item">2018</option>
											<option value="2019" class="dropdown-item">2019</option>
											<option value="2020" class="dropdown-item">2020</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label> Select Department:</label>
									<div class="dropdown">
										<select name="depts">
											<option>Select</option>
											<option value="Biotech" class="dropdown-item">Biotechnology</option>
											<option value="Civil" class="dropdown-item">Civil</option>
											<option value="CSE" class="dropdown-item">Computer Science</option>
											<option value="Electronics" class="dropdown-item">Electronics</option>
											<option value="ETC" class="dropdown-item">Electronics and Telecommunication</option>
											<option value="Env" class="dropdown-item">Environment</option>
											<option value="IT" class="dropdown-item">Information Technology</option>
											<option value="Mech" class="dropdown-item">Mechanical</option>
											<option value="Prod" class="dropdown-item">Production</option>
										</select>
									</div>
								</div>
								<br><br><input type="submit" id="submit" class="btn btn-success btn-block" name="exp" value="OK">
							</form>
						</div>
					</div>
				</div>
			</div>
			
			<div class="modal" id="Set">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content form-container-1">
						<div class="modal-header">
							<h2 class="text-center text-primary design"> Set Criteria </h2>
							<button type="button" class="close" data-dismiss="modal"> &times;</button>
						</div>
						<div class="modal-body">
							<form class="design1" method="post" action="setcriteria.php">
								<div class="form-group">
									<label> Select Admission Year:</label>
									<div class="dropdown">
										<select name="yr">
											<option>Select</option>
											<option value="2017" class="dropdown-item">2016</option>
											<option value="2017" class="dropdown-item">2017</option>
											<option value="2018" class="dropdown-item">2018</option>
											<option value="2019" class="dropdown-item">2019</option>
											<option value="2020" class="dropdown-item">2020</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label> Select Department:</label>
									<div class="dropdown">
										<select name="depts">
											<option>Select</option>
											<option value="Biotech" class="dropdown-item">Biotechnology</option>
											<option value="Civil" class="dropdown-item">Civil</option>
											<option value="CSE" class="dropdown-item">Computer Science</option>
											<option value="Electronics" class="dropdown-item">Electronics</option>
											<option value="ETC" class="dropdown-item">Electronics and Telecommunication</option>
											<option value="Env" class="dropdown-item">Environment</option>
											<option value="IT" class="dropdown-item">Information Technology</option>
											<option value="Mech" class="dropdown-item">Mechanical</option>
											<option value="Prod" class="dropdown-item">Production</option>
										</select>
									</div>
								</div>
								<div class="form-group">
										<label> 10th Marks:</label>
										<div class="dropdown">
											<select name="sten">
												<option>Select</option>
												<option value="75">Above 75%</option> 
												<option value="80">Above 80%</option> 
												<option value="85">Above 85%</option>
												<option value="90">Above 90%</option>
											</select>
									</div>
								</div>
								<div class="form-group">
									<label> 12th / Diploma Marks :</label>
									<div class="dropdown">
										<select name="stwdip">
											<option>Select</option>
											<option value="75">Above 75%</option> 
											<option value="80">Above 80%</option> 
											<option value="85">Above 85%</option>
											<option value="90">Above 90%</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label> Engg Aggregate Marks:</label>
									<div class="dropdown">
										<select name="sagg">
											<option>Select</option>
											<option value="50">Above 50%</option> 
											<option value="60">Above 60%</option> 
											<option value="70">Above 70%</option>
											<option value="80">Above 80%</option>
										</select>
									</div>
								</div>
								<div class="form-group" id="at">
									
										<label class="design2">ATKT : </label> 
										<div class="row">
										<div class="col-md-4"> 
											<label class="design2">Yes : </label> <input type="radio" onclick="javascript:atktCheck();" name="atkt" id="yes">
										</div>
										<div class="col-md-4"> 
											<label class="design2">No : </label> <input type="radio" onclick="javascript:atktCheck();" name="atkt" id="no">
										</div>
									</div>
								</div>
								<br><br><input type="submit" id="submit" class="btn btn-success btn-block" name="submit" value="OK">
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="menu1">
				<ul>
					<li><a href="#"><i class="fa fa-graduation-cap"></i>  Student</a>
						<ul>
							<li><a href="#" data-toggle="modal" data-target="#addBatch">Add Batch</a></li>
							<li><a href="#" data-toggle="modal" data-target="#Generate">Generate Password</a></li>
							<li><a href="#" data-toggle="modal" data-target="#Print">Print</a></li>
						</ul>
					</li>
					<li><a href="#" data-toggle="modal" data-target="#Set"><i class="fa fa-check-square"></i>  Set Criteria</a></li>
					<li><a href="reglogout.php?log"><i class="fa fa-power-off"></i>  Log out</a></li>
				</ul>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function atktCheck()
		{
			if(document.getElementById('yes').checked)
			{
				$('#kt').remove();
				$('#at').append('<div id="kt"><div class="form-group"><div class="row"><div class="col-md-4"></div><div class="col-md-4"><label class="design2">Live ATKT : </label> <input type="checkbox" onclick="javascript:ldCheck();" name="ld" id="live"></div><div class="col-md-4"><label class="design2">Dead ATKT : </label> <input type="checkbox" onclick="javascript:ldCheck();" name="ld" id="dead"></div></div></div></div>');
			}
			if(document.getElementById('no').checked)
			{
				$('#kt').remove();
				$('#at').append('<div><input type="hidden" name="nol" value=""><input type="hidden" name="nod" value=""></div>');
			}
		}
		function ldCheck()
		{
			if(document.getElementById('live').checked == false)
			{
				$('#l').remove();
				$('#d').remove();
				$('#l1d1').remove();
			}
			if(document.getElementById('dead').checked == false)
			{
				$('#d').remove();
				$('#d').remove();
				$('#l1d1').remove();
			}
			if(document.getElementById('dead').checked == false && document.getElementById('live').checked == false)
			{
				$('#l').remove();
				$('#d').remove();
				$('#l1d1').remove();
			}
			if(document.getElementById('live').checked == true)
			{
				$('#l').remove();
				$('#d').remove();
				$('#l1d1').remove();
				$('#kt').append('<div id="l"><div class="form-group"><div class="row"><div class="col-md-4"></div><div class="col-md-4"><label class="design2">No of Live ATKT : </label><input type="text" class="form-control" name="nol" placeholder="No of Live ATKT" required><input type="hidden" name="nod" value=""></div><div class="col-md-4"></div></div></div></div>');
			}
			if(document.getElementById('dead').checked == true)
			{
				$('#l').remove();
				$('#d').remove();
				$('#l1d1').remove();
				$('#kt').append('<div id="d"><div class="form-group"><div class="row"><div class="col-md-4"></div><div class="col-md-4"></div><div class="col-md-4"><label class="design2">No of Dead ATKT : </label><input type="text" class="form-control" name="nod" placeholder="No of Dead ATKT" required><input type="hidden" name="nol" value=""></div></div></div></div>');
			}
			if(document.getElementById('dead').checked == true && document.getElementById('live').checked == true)
			{
				$('#l').remove();
				$('#d').remove();
				$('#l1d1').remove();
				$('#kt').append('<div id="l1d1"><div class="form-group"><div class="row"><div class="col-md-4"></div><div class="col-md-4"><label class="design2">No of Live ATKT : </label><input type="text" class="form-control" name="nol" placeholder="No of Live ATKT" required></div><div class="col-md-4"><label class="design2">No of Dead ATKT : </label><input type="text" class="form-control" name="nod" placeholder="No of Live ATKT" required></div></div></div></div>');
			}
		}
	</script>
</body>
</html>