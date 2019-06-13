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
<body class="bgimage2">
	<div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-12"></div>
                    <div class="col-md-8 col-sm-4 col-xs-12">
                        <form class="form-container-2" method="POST" action="#">
                            <center><h1 style="font-weight: bold">PERSONAL DETAILS</h1></center>
                            <br>      
                                <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6"><label class="design2" for="prn">PRN Number</label> <input type="text" class="form-control" name="prn" placeholder="PRN Number" required></div>
                                            <div class="col-md-6"><label class="design2" for="roll">Roll No</label> <input type="text" class="form-control" name="roll" placeholder="Roll Number" required></div>
                                        </div>
                                    <br>
                                    <div class="row">
                                            <div class="col-md-4"><label class="design2" for="aad">Aadhar Number</label> <input type="text" class="form-control" name="aad" placeholder="Aadhar Number" required></div>
                                            <div class="col-md-4"><label class="design2" for="dob">Date of Birth</label> <input type="date" class="form-control" name="dob" required></div>
                                        
                                            <div class="col-md-4"><label class="design2" for="gen">Gender</label>  
                                                <div class="dropdown">
										          <select name="gen" placeholder="Select Gender" required>
                                                      <option value="M" class="dropdown-item">Male</option>
                                                      <option value="F" class="dropdown-item">Female</option>
											     </select>
									           </div>
                                            </div>
                                    </div> 
                                    <br>
                                     <div class="row">
                                            <div class="col-md-6"><label class="design2" for="mom">Mother's Name</label> <input type="text" class="form-control" name="mom" placeholder="Mother's Name" required></div>
                                            <div class="col-md-6"><label class="design2" for="ph">Phone Number</label> <input type="text" class="form-control" pattern="^\d{4}-\d{3}-\d{4}$" name="ph" placeholder="Phone Number" required></div>
                                    </div>
                                    
                                     <div class="row">
                                            <div class="col-md-12"><label class="design2" for="add">Address</label> <input type="text" class="form-control" name="add" placeholder="Address" required></div>
                                            
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-3"><label class="design2" for="city">City</label> <input type="text" class="form-control" name="city" placeholder="City" required></div>
                                         <div class="col-md-3"><label class="design2" for="state">State</label> <input type="text" class="form-control" name="state" placeholder="State" required></div>
                                         <div class="col-md-3"><label class="design2" for="country">Country</label> <input type="text" class="form-control" name="country" placeholder="Country" required></div>
                                        <div class="col-md-3"><label class="design2" for="pin">Pin-Code</label> <input type="text" class="form-control" name="pin" placeholder="Pin-Code" required></div>
                                    
                                    </div>
                                    <br>
                                    <input type="submit" name="sub" value="SUBMIT" class="btn btn-success btn-block"/>
                                   <br>
                                </div>               
                            
                            </form> 
                    </div>
                <div class="col-md-2 col-sm-4 col-xs-12"></div>
            </div>
        </div>
<body>
</html>