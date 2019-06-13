<?php
	session_start();
	include('dbconnection.php');
	if(isset($_POST['sub']))
	{
		$uname = $_SESSION['u'];
		$pass = $_SESSION['p'];
		$str = "select ID from studinfo where UserName='".$uname."' AND Password='".$pass."'";
		$res = mysql_query($str);
		if(mysql_num_rows($res) == 1)
		{
			while ($ro = mysql_fetch_assoc($res)) 
			{
				$i = $ro["ID"];
			}
		}
		$tenm = $_POST['tenmk'];
		$teny = $_POST['tenyop'];
		$tens = $_POST['tensch'];
		$tenb = $_POST['tenboard'];
		if(isset($_POST['twdip']))
		{
			$twm = $_POST['12mk'];
			$twy = $_POST['12yop'];
			$twc = $_POST['12sch'];
			$twb = $_POST['12board'];
			$dipm = $_POST['dipmk'] ;
			$dipy = $_POST['dipyop'];
			$dips = $_POST['dipsch'];
			$dipb = $_POST['dipuni'];
		}
		
		$sem1 = $_POST['sem1mk'];
		$sem2 = $_POST['sem2mk'];
		$sem3 = $_POST['sem3mk'];
		$sem4 = $_POST['sem4mk'];
		$sem5 = $_POST['sem5mk'];
		$sem6 = $_POST['sem6mk'];
		$sem7 = $_POST['sem7mk'];
		$cnt = 7;
		if($sem4 == 0) {$cnt--;}
		if($sem5 == 0) {$cnt--;}
		if($sem6 == 0) {$cnt--;}
		if($sem7 == 0) {$cnt--;}
		$avg = ($sem1+$sem2+$sem3+$sem4+$sem5+$sem6+$sem7)/$cnt;
		
		if(isset($_POST['atkt']))
		{
			$live = $_POST['nol'];
			$dead = $_POST['nod'];
		}
		$query = "INSERT into educational values('$i' , '$tenm' , '$teny' , '$tens', '$tenb' , '$dipm' , '$dipy' , '$dips' , '$dipb' , '$twm' , '$twy' , '$twc' , '$twb' , '$sem1' , '$sem2' , '$sem3' , '$sem4' , '$sem5' , '$sem6' , '$sem7' , '$live' , '$dead' , '$avg')";
		mysql_query($query);
		header('location:homeadmin.php?edu1=Educational Details Entered Successfully!');
	}
?>

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
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-9">
				<form class="form-container-2 " id="ed" method="POST" action="#">
					<center><h1 style="font-weight: bold"> EDUCATIONAL DETAILS </h1></center><br>
                    <fieldset class="border p-2">
                        <leagend><center>X CLASS DETAILS</center></leagend>
					<div class="form-group">
                        
						<div class="row">
							<div class="col-md-6"> <label class="design2">X Marks</label> <input type="text" class="form-control" name="tenmk" placeholder="X Marks" required> </div>
							<div class="col-md-6"> <label class="design2">X Year of Passing</label> 
								<input list="tyrs" class="form-control" name="tenyop" placeholder="2012" required>
								<datalist id="tyrs">
								  <option value="2012">	  <option value="2013">	  <option value="2014">	  <option value="2015">	  <option value="2016">
								</datalist> 
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-8"> <label class="design2">X School</label> <input type="text" class="form-control" name="tensch" placeholder="X School" required> </div>
							<div class="col-md-4"> <label class="design2">X Board</label> 
								<input list="tboard" class="form-control" name="tenboard" placeholder="SSC" required>
								<datalist id="tboard">
								  <option value="SSC">	  <option value="CBSE">	  <option value="ICSE">
								</datalist> 
							</div>
						</div>
					</div>
					<div class="form-group" id="educate">
						<div class="row">
							<div class="col-md-6">
								<label class="design2" for="twelve"> 12th Standard </label>	<input type="radio" onclick="javascript:yesnoCheck();" name="twdip" id="twelve">
							</div>
							<div class="col-md-6">
								<label class="design2" for="diploma"> Diploma </label> <input type="radio" onclick="javascript:yesnoCheck();" name="twdip" id="diploma"><br>
							</div>
						</div>
					</div>
                    </fieldset>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4"> <label class="design2">SEM I Marks</label> <input type="text" class="form-control" name="sem1mk" placeholder="SEM I Marks" required> </div>
							<div class="col-md-4"> <label class="design2">SEM II Marks</label> <input type="text" class="form-control" name="sem2mk" placeholder="SEM II Marks" required> </div>
							<div class="col-md-4"> <label class="design2">SEM III Marks</label> <input type="text" class="form-control" name="sem3mk" placeholder="SEM III Marks" required> </div>
						</div>
					</div>
					<div class="form-group">	
						<div class="row">
							<div class="col-md-4"> <label class="design2">SEM IV Marks</label> <input type="text" class="form-control" name="sem4mk" placeholder="SEM IV Marks" required> </div>
							<div class="col-md-4"> <label class="design2">SEM V Marks</label> <input type="text" class="form-control" name="sem5mk" placeholder="SEM V Marks" required> </div>
							<div class="col-md-4"> <label class="design2">SEM VI Marks</label> <input type="text" class="form-control" name="sem6mk" placeholder="SEM VI Marks" required> </div>
						</div>
					</div>
					<div class="form-group">	
						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-4"> <label class="design2">SEM VII Marks</label> <input type="text" class="form-control" name="sem7mk" placeholder="SEM VII Marks" required> </div>
							<div class="col-md-4"></div>
						</div>
					</div>
					<div class="form-group" id="at">
						<div class="row">
							<div class="col-md-4"> <label class="design2">ATKT : </label> </div>
							<div class="col-md-4"> 
								<label class="design2" for="atktyes">Yes : </label> <input type="radio" onclick="javascript:atktCheck();" name="atkt" id="yes">
							</div>
							<div class="col-md-4"> 
								<label class="design2" for="atktno">No : </label> <input type="radio" onclick="javascript:atktCheck();" name="atkt" id="no">
							</div>
						</div>
					</div>
					<br> <br><input type="submit" name="sub" value="SUBMIT" class="btn btn-success btn-block"> 
				</form>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	<script type="text/javascript">
		function yesnoCheck() 
		{
			if (document.getElementById('twelve').checked) 
			{
				$('#12').remove();
				$('#di').remove();
				$('#educate').append('<div id="12"> <div class="form-group"><div class="row"><div class="col-md-6"> <label class="design2">XII Marks</label> <input type="text" class="form-control" name="12mk" placeholder="XII Marks" required> </div><div class="col-md-6"> <label class="design2">XII Year of Passing</label> <input list="12yrs" class="form-control" name="12yop" placeholder="2014" required><datalist id="12yrs"><option value="2012">	  <option value="2013">	  <option value="2014">	  <option value="2015">	  <option value="2016"></datalist> </div></div></div><div class="form-group"><div class="row"><div class="col-md-8"> <label class="design2">XII School</label> <input type="text" class="form-control" name="12sch" placeholder="XII College" required> <input type="hidden" name="dipmk" value=""><input type="hidden" name="dipyop" value=""><input type="hidden" name="dipsch" value=""><input type="hidden" name="dipuni" value=""></div><div class="col-md-4"> <label class="design2">XII Board</label> <input list="12boards" class="form-control" name="12board" placeholder="SSC" required><datalist id="12boards"> <option value="HSC">	  <option value="ICSE">	</datalist> </div>	</div></div></div>');
			}
			if (document.getElementById('diploma').checked) 
			{
				$('#di').remove();
				$('#12').remove();
				$('#educate').append('<div id="di"><div class="form-group"><div class="row"><div class="col-md-6"> <label class="design2">Diploma Marks</label> <input type="text" class="form-control" name="dipmk" placeholder="Diploma Marks" required> </div><div class="col-md-6"> <label class="design2">Diploma Year</label><input list="dipyrs" class="form-control" name="dipyop" placeholder="2012" required><datalist id="dipyrs"><option value="2013"><option value="2014"><option value="2015"><option value="2016"><option value="2017"></datalist></div></div></div><div class="form-group"><div class="row"><div class="col-md-8"> <label class="design2">Diploma College</label> <input type="text" class="form-control" name="dipsch" placeholder="Diploma College" required> </div><div class="col-md-4"> <label class="design2">Dip University</label> <input type="text" class="form-control" name="dipuni" placeholder="Diploma University" required> <input type="hidden" name="12mk" value=""><input type="hidden" name="12yop" value=""><input type="hidden" name="12sch" value=""><input type="hidden" name="12board" value=""></div></div></div></div>');
			}
		}
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
<body>
</html>