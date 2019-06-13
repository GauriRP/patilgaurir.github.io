<?php
    session_start();
    include('dbconnection.php');
    $i=$_SESSION['i'];
// to check if already exist
    $sql ="select * from personal where ID = $i";
    $result =mysql_query($sql);
    if(mysql_num_rows($result)==1)
    {
        while($row=mysql_fetch_assoc($result))
        {
             $p=$row["Prn"];
             $rno=$row["RNo"];
             $aad=$row["Aadhar"];
             $dob=$row["Dob"];
             $gen=$row["Gender"];
             $mom=$row["Mom"];
             $ph=$row["PhNo"];
             $add=$row["Address"];
             $city=$row["City"];
             $state=$row["State"];
             $country=$row["Country"];
             $pin=$row["Pin"];
        }   
     //////////////////////EDIT PRINT//////////////////////////////////////////////////////////////////////   
  ?>
<html>
    <head>
        <meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" type="text/css" href="new.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="css/global.css" type="text/css" rel="stylesheet">
        <link href="style.css" type="text/css" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
    </head>
    <body class="bgimage2">
        <div id="modal1" class="modal fade" role="dialog">
             <div class="modal-dialog">
                    <div class="modal-content">
                            <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>EDIT DETAILS</h4>
                            </div>
                            <div class="modal-body">
                            <form class="form-container-2 bgimage2"  method="POST" action="#" name="myForm1" onsubmit=" return Validd()" >
                            <br>
                            <center><b><h4><b>Personal Details</b></h4></b></center>
                            <br>      
                           
                                <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6"><label for="prn">PRN Number</label> <input type="text" class="form-control" name="prn" value="<?php echo $p;?>"  required><span id="error101"></span></div>
                                            <div class="col-md-6"><label for="roll">Roll No</label> <input type="text" class="form-control" name="roll" value="<?php echo $rno;?>" required><span id="error102"></span></div>
                                        </div>
                                    <br>
                                    <div class="row">
                                            <div class="col-md-4"><label for="aad">Aadhar Number</label> <input type="text" class="form-control" name="aad" value="<?php echo $aad;?>"  required><span id="error103"></span></div>
                                            <div class="col-md-4"><label for="dob">Date of Birth</label> <input type="date" class="form-control" name="dob" value="<?php echo $dob;?>"  required></div>
                                        
                                            <div class="col-md-4"><label for="gen">Gender</label>  
                                                <div class="dropdown">
										          <select name="gen">
                                                      <option><?php echo $gen;?></option>
                                                      <option value="Male" class="dropdown-item">Male</option>
                                                      <option value="Female" class="dropdown-item">Female</option>
											     </select>
									           </div>
                                            </div>
                                    </div> 
                                    <br>
                                     <div class="row">
                                            <div class="col-md-6"><label for="mom">Mother's Name</label> <input type="text" class="form-control" name="mom" value="<?php echo $mom;?>" required><span id="error104"></span></div>
                                            <div class="col-md-6"><label for="ph">Phone Number</label> <input type="text" class="form-control" name="ph" value="<?php echo $ph;?>"  required><span id="error105"></span></div>
                                    </div>
                                    
                                     <div class="row">
                                            <div class="col-md-12"><label for="add">Address</label> <input type="text" class="form-control" name="add" value="<?php echo $add;?>"  required><span id="error106"></span></div>
                                            
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-3"><label for="country">Country</label> <input type="text" class="form-control" name="country" value="<?php echo $country;?>"  required><span id="error107"></span></div>
                                         <div class="col-md-3"><label for="state">State</label> <input type="text" class="form-control" name="state" value="<?php echo $state;?>"  required><span id="error108"></span></div>
                                        <div class="col-md-3"><label for="city">City</label> <input type="text" class="form-control" name="city" value="<?php echo $city;?>" required><span id="error109"></span></div>
                                        <div class="col-md-3"><label for="pin">Pin-Code</label> <input type="text" class="form-control" name="pin" value="<?php echo $pin;?>" required><span id="error110"></span></div>
                                    
                                    </div>
                                    <br><br><center><input type="submit" name="save" value="Save Changes" class="btn btn-success btn-block" /></center>
                                </div>               
                             <script>
                                    function Validd()
                                        {
                                           // prompt("hello");
                                            var flag=true,flag1=true,flag2=true,flag3=true,flag4=true,flag5=true;
                                            var phone1=document.forms["myForm1"]["ph"];
                                        //    var regno1=document.forms["myForm1"]["regno"];
                                            var prn1=document.forms["myForm1"]["prn"];
                                            var roll=document.forms["myForm1"]["roll"];
                                            var aad=document.forms["myForm1"]["aad"];
                                            var mom=document.forms["myForm1"]["mom"];
                                            var country=document.forms["myForm1"]["country"];
                                            var state=document.forms["myForm1"]["state"];
                                            var city=document.forms["myForm1"]["city"];
                                            var pin=document.forms["myForm1"]["pin"];
                                            if(phone1.value.match(/^\d{10}$/))
                                                {
                                                    flag=true;
                                                }
                                            else
                                            {
                                               document.getElementById("ph").style.borderColor="red"
                                                document.getElementById("error105").innerHTML="Invalid Phone Number";
                                                document.getElementById("error105").style.color="red"
                                               
                                                flag= false;
                                            }
                                            
                                        /*    if(regno1.value.match(/^\d{10}$/))
                                                {
                                                    flag1=true;
                                                }
                                            else
                                            {
                                               document.getElementById("regno").style.borderColor="red"
                                                document.getElementById("error100").innerHTML="Invalid Registration Number";
                                                document.getElementById("error100").style.color="red"
                                               
                                                flag1= false;
                                            }*/
                                            
                                            if(prn1.value.match(/^\d{10}$/))
                                            {
                                                flag2= true;
                                            }
                                            else
                                            {
												document.getElementById("prn").style.borderColor="red"
                                                document.getElementById("error101").innerHTML="Invalid PRN Number";
                                                document.getElementById("error101").style.color="red"
                                                flag2= false;
                                            }
                                            
                                            if(aad.value.match(/^\d{12}$/))
                                                {
                                                    flag3= true;
                                                }
                                            else
                                            {
                                               document.getElementById("aad").style.borderColor="red"
                                                document.getElementById("error103").innerHTML="Invalid Aadhar  Number";
                                                document.getElementById("error103").style.color="red"
                                               
                                                flag3= false;
                                            }
                                            
                                            if(roll.value.match(/^[0-9]*\d$/))
                                                {
                                                    flag4= true;
                                                }
                                            else
                                            {
                                               document.getElementById("roll").style.borderColor="red"
                                                document.getElementById("error102").innerHTML="Invalid Roll Number";
                                                document.getElementById("error102").style.color="red"
                                               
                                                flag4=false;
                                            }
                                            if(pin.value.match(/^[0-9]*\d$/))
                                                {
                                                    flag5= true;
                                                }
                                            else
                                            {
                                               document.getElementById("pin").style.borderColor="red"
                                                document.getElementById("error110").innerHTML="Invalid Pin Number";
                                                document.getElementById("error110").style.color="red"
                                               
                                                flag5=false;
                                            }
                                            
                                            if(flag==true && flag1==true && flag2==true && flag3==true && flag4==true && flag5==true)
                                                {
                                                    return true;
                                                }
                                                else{
                                                    return false;
                                                }
                                        }
                                </script>
                            </form>
                               
                            </div>
                           
                     </div>

                </div>
     </div>

            <div class="bgimage2">
        
                 <br><br><br><center><h2><b>Personal Details</b></h2></center><br>
        <center><table class="table table-bordered tab" style="padding:50px 0" >
            <br><br>
        <tr><td>PRN number   </td><td><?php echo "$p"; ?></td></tr>
         <tr><td>Roll number   </td><td><?php echo "$rno"; ?></td></tr>
         <tr><td>Aadhar number   </td><td><?php echo "$aad"; ?></td></tr>
         <tr><td>DOB   </td><td><?php echo "$dob"; ?></td></tr>
         <tr><td>Gender   </td><td><?php echo "$gen"; ?></td></tr>
         <tr><td>Mother's Name   </td><td><?php echo "$mom"; ?></td></tr>
         <tr><td>Phone Number   </td><td><?php echo "$ph"; ?></td></tr>
         <tr><td>Address   </td><td><?php echo "$add"; ?></td></tr>
         <tr><td>City   </td><td><?php echo "$city"; ?></td></tr>
         <tr><td>State   </td><td><?php echo "$state"; ?></td></tr>
         <tr><td>Country   </td><td><?php echo "$country"; ?></td></tr>
         <tr><td>PIN code   </td><td><?php echo "$pin"; ?></td></tr>
        
            </table></center>
                <br><br>
                 <center><button class="btn btn-success"  data-toggle="modal" data-target="#modal1" name="edit">EDIT</button></center>
        </div>
                  
           
    </body>
</html>
<?php
    if(isset($_POST['save']))
	{
        $p=$_POST['prn'];
        $rno=$_POST['roll'];
        $aad=$_POST['aad'];
        $dob=$_POST['dob'];
        $gen=$_POST['gen'];
        $mom=$_POST['mom'];
         
        $ph=$_POST['ph'];
        $add=$_POST['add'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $country=$_POST['country'];
        $pin=$_POST['pin'];

        $query2="UPDATE  personal SET Prn='$p' WHERE ID='$i'";
        mysql_query($query2);
            
        $query3 ="UPDATE  personal SET RNo='$rno' WHERE ID='$i'";
        mysql_query($query3);
            
        $query4 ="UPDATE  personal SET Aadhar='$aad' WHERE ID='$i'";
        mysql_query($query4);
            
        $query5="UPDATE  personal SET Dob='$dob' WHERE ID='$i'";
        mysql_query($query5);
             
        $query6="UPDATE  personal SET Gender='$gen' WHERE ID='$i'";
        mysql_query($query6);
        
        $query7="UPDATE  personal SET Mom='$mom' WHERE ID='$i'";
        mysql_query($query7);
    
		$query8="UPDATE  personal SET PhNo='$ph' WHERE ID='$i'";
        mysql_query($query8);
        
		$query9="UPDATE  personal SET Address='$add' WHERE ID='$i'";
        mysql_query($query9);

		$query10="UPDATE  personal SET Country='$country' WHERE ID='$i'";
        mysql_query($query10);

		$query11="UPDATE  personal SET State='$state' WHERE ID='$i'";
        mysql_query($query11);

		$query12="UPDATE  personal SET City='$city' WHERE ID='$i'";
        mysql_query($query12);

		$query13="UPDATE  personal SET Pin='$pin' WHERE ID='$i'";
        mysql_query($query13);

        header('location:homestudent.php?personal2=Personal Details Updated Successfully!');
    }    
?>
<?php
        
    }
    else
        ////////////////////////////////NEW RECORD////////////////////////////////////////////////
    {
   ?>    
 
<html>
<head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" type="text/css" href="new.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="css/global.css" type="text/css" rel="stylesheet">
        <link href="style.css" type="text/css" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
    <body class="bgimage2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-12"></div>
                    <div class="col-md-8 col-sm-4 col-xs-12">
                        <form class="form-container-2 bgimage2" onsubmit="return Valid()" name="myForm" method="POST" action="#">
                            <br>
                            <center><b><h4><b>Personal Details</b></h4></b></center>
                            <br>      
                                <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6"><label for="prn">PRN Number</label> <input type="text" class="form-control" name="prn" placeholder="PRN Number" id="prn" required><span id="error2"></span></div>
                                            <div class="col-md-6"><label for="roll">Roll No</label> <input type="text" class="form-control" name="roll" placeholder="Roll Number" id="roll" required><span id="error5"></span></div>
                                        </div>
                                                                      <br>
                                    <div class="row">
                                        <div class="col-md-4"><label for="aad">Aadhar Number</label> <input type="text" class="form-control" name="aad" id="aad" placeholder="Aadhar Number" required><span id="error3"></span></div>
                                            <div class="col-md-4"><label for="dob">Date of Birth</label> <input type="date" class="form-control" name="dob" id="dob" required></div>
                                        
                                            <div class="col-md-4"><label for="gen">Gender</label>  
                                                <div class="dropdown">
										          <select name="gen" placeholder="Select Gender" required>
                                                      <option value="Male" class="dropdown-item">Male</option>
                                                      <option value="Female" class="dropdown-item">Female</option>
											     </select>
									           </div>
                                            </div>
                                    </div> 
                                    <br>
                                     <div class="row">
                                            <div class="col-md-6"><label for="mom">Mother's Name</label> <input type="text" class="form-control" name="mom" id="mom" placeholder="Mother's Name" required></div>
                                            <div class="col-md-6"><label for="ph">Phone Number</label> <input type="text" class="form-control" name="ph" id="ph" placeholder="Phone Number" required><span id="error"></span></div>
                                    </div>
                                    
                                     <div class="row">
                                            <div class="col-md-12"><label for="add">Address</label> <input type="text" class="form-control" name="add" id="add" placeholder="Address" required></div>
                                            
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-3"><label for="country">Country</label> <input type="text" class="form-control" name="country" id="country" placeholder="Country" required></div>
                                         <div class="col-md-3"><label for="state">State</label> <input type="text" class="form-control" name="state" id="state" placeholder="State" required></div>
                                        <div class="col-md-3"><label for="city">City</label> <input type="text" class="form-control" name="city" id="city" placeholder="City" required></div>
                                        <div class="col-md-3"><label for="pin">Pin-Code</label> <input type="text" class="form-control" name="pin" id="pin" placeholder="Pin-Code" required><span id="error4"></span></div>
                                    
                                    </div>
                                    <br>
                                    <input type="submit" name="sub" value="SUBMIT" class="btn btn-success btn-block"/>
                                    <script>
                                        function Valid()
                                        {
                                            var flag=true,flag1=true,flag2=true,flag3=true,flag4=true,flag5=true;
                                            var phone=document.forms["myForm"]["ph"];
                                            var regno=document.forms["myForm"]["regno"];
                                            var prn=document.forms["myForm"]["prn"];
                                            var roll=document.forms["myForm"]["roll"];
                                            var aad=document.forms["myForm"]["aad"];
                                             var mom=document.forms["myForm"]["mom"];
                                             var country=document.forms["myForm"]["country"];
                                            var state=document.forms["myForm"]["state"];
                                            var city=document.forms["myForm"]["city"];
                                            var pin=document.forms["myForm"]["pin"];
                                            if(phone.value.match(/^\d{10}$/))
                                                {
                                                    flag=true;
                                                }
                                            else
                                            {
                                               document.getElementById("ph").style.borderColor="red"
                                                document.getElementById("error").innerHTML="Invalid Phone Number";
                                                document.getElementById("error").style.color="red"
                                               
                                                flag= false;
                                            }
                                            
                                            if(regno.value.match(/^\d{10}$/))
                                                {
                                                    flag1=true;
                                                }
                                            else
                                            {
                                               document.getElementById("regno").style.borderColor="red"
                                                document.getElementById("error1").innerHTML="Invalid Registration Number";
                                                document.getElementById("error1").style.color="red"
                                               
                                                flag1= false;
                                            }
                                            
                                            if(prn.value.match(/^\d{10}$/))
                                                {
                                                    flag2= true;
                                                }
                                            else
                                            {
                                               document.getElementById("prn").style.borderColor="red"
                                                document.getElementById("error2").innerHTML="Invalid PRN Number";
                                                document.getElementById("error2").style.color="red"
                                               
                                                flag2= false;
                                            }
                                            
                                            if(aad.value.match(/^\d{12}$/))
                                                {
                                                    flag3= true;
                                                }
                                            else
                                            {
                                               document.getElementById("aad").style.borderColor="red"
                                                document.getElementById("error3").innerHTML="Invalid Aadhar  Number";
                                                document.getElementById("error3").style.color="red"
                                               
                                                flag3= false;
                                            }
                                            
                                            if(roll.value.match(/^[0-9]*\d$/))
                                                {
                                                    flag4= true;
                                                }
                                            else
                                            {
                                               document.getElementById("roll").style.borderColor="red"
                                                document.getElementById("error5").innerHTML="Invalid Roll Number";
                                                document.getElementById("error5").style.color="red"
                                               
                                                flag4=false;
                                            }
                                            if(pin.value.match(/^[0-9]*\d$/))
                                                {
                                                    flag5= true;
                                                }
                                            else
                                            {
                                               document.getElementById("pin").style.borderColor="red"
                                                document.getElementById("error4").innerHTML="Invalid Pin Number";
                                                document.getElementById("error4").style.color="red"
                                               
                                                flag5=false;
                                            }
                                            
                                            if(flag==true && flag1==true && flag2==true && flag3==true && flag4==true && flag5==true)
                                                {
                                                    return true;
                                                }
                                                else{
                                                    return false;
                                                }
                                        }
                                    </script>
                                   <br>
                                </div>               
                            
                            </form> 
                    </div>
                <div class="col-md-2 col-sm-4 col-xs-12"></div>
            </div>
        </div>
                            
    </body>
</html>
    <?php
        

    if(isset($_POST['sub']))
    {
        //echo "This is post";
        $p=$_POST['prn'];
        $rno=$_POST['roll'];
        $aad=$_POST['aad'];
        $dob=$_POST['dob'];
        $gen=$_POST['gen'];
        $mom=$_POST['mom'];
         
        $ph=$_POST['ph'];
        $add=$_POST['add'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $country=$_POST['country'];
        $pin=$_POST['pin'];

        $query="insert into personal values('".$i."','".$p."','".$rno."','".$aad."','".$dob."','".$gen."','".$mom."','".$ph."','".$add."','".$country."','".$state."','".$city."','".$pin."')";
        echo $reg;
        mysql_query($query);
        header('location:homestudent.php?personal1=Personal Details Entered Successfully!');
    }
     
    }
?>
