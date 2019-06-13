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
</head>
<body>
	<div class="container-fluid bg">
    <div class="row">
      <div class="col-md-3 col-sm-4 col-xs-12"></div>
      <div class="col-md-6 col-sm-4 col-xs-12">
        <form class="form-container-reg" method="POST" action="register.php">
          <div class="form-group">
            <label for="regno">Register Number</label> <input type="text" class="form-control" name="regno" placeholder="Register Number" required>
          </div>
          <div class="form-group">
          	<div class="row">
          		<div class="col-md-4 col-sm-4 col-xs-12"><label for="lname">Last Name</label> <input type="text" class="form-control" name="lname" placeholder="Last Name" required></div>
            	<div class="col-md-4 col-sm-4 col-xs-12"><label for="fname">First Name</label> <input type="text" class="form-control" name="fname" placeholder="First Name" required></div>
            	<div class="col-md-4 col-sm-4 col-xs-12"><label for="mname">Middle Name</label> <input type="text" class="form-control" name="mname" placeholder="Middle Name" required></div>
            </div>
          </div>
          <div class="form-group">
            <label for="dept">Department</label> <input list="depts" class="form-control" name="dept" placeholder="Department" required>
            <datalist id="depts">
            	<option value="Biotechnology"></option> <option value="Civil"></option> <option value="Computer Science"></option>          
            	<option value="Electronics"></option> <option value="Electronics and Telecommunication"></option>
            	<option value="Environment"></option> <option value="Information Technology"></option> <option value="Mechanical"></option>
            </datalist>
          </div>
          <div class="form-group">
			    <div class="row">
			    	<div class="col-md-4 col-sm-4 col-xs-12">
			            <label for="year">Year</label> <input list="years" class="form-control" name="year" placeholder="Year" required>
			            <datalist id="years">
			            	<option value="SE"></option> <option value="TE"></option> <option value="BE"></option>
			            </datalist>
			        </div>
			        <div class="col-md-4 col-sm-4 col-xs-12">
			            <label for="sem">Semester</label> <input list="sems" class="form-control" name="sem" placeholder="Semester" required>
			            <datalist id="sems">
			            	<option value="III"></option> <option value="IV"></option> <option value="V"></option> <option value="VI"></option> <option value="VII"></option> <option value="VIII"></option>
			            </datalist>
			        </div>
			        <div class="col-md-4 col-sm-4 col-xs-12">
			          	<label for="rollno">Roll Number</label> <input type="text" class="form-control" name="rollno" placeholder="Roll Number" required>
			        </div>
			    </div>
	       </div>
          <br><input type="submit" name="submit" value="REGISTER" class="btn btn-success btn-block"/>
        </form>      
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12"></div>
    </div>
  </div>
</body>
</html>