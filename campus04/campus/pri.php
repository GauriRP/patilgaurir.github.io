<?php
	session_start();
	$host = "localhost";
    $user = "root";
    $password = "";
    $db = "campus";
    mysql_connect($host , $user , $password);
    mysql_select_db($db);
	if(isset($_POST['export']))     
    {
		$year = $_SESSION['y'];
        $dept = $_SESSION['d'];
        $nm = "".$year." ".$dept." Batch";
        require("fpdf/fpdf.php");
		$pdf = new FPDF('p','mm','A4');
		$pdf->AddPage();
		$pdf->SetFont("Arial","B",16);
		$pdf->Cell(0,10,"KIT's College Of Engineering, Kolhapur",0,1,"C");
		$pdf->Cell(0,10,"Student Login Information",0,1,"C");
		$pdf->Cell(0,10,$nm,0,1,"C");
		$pdf->Cell(50,10,"",0,1,"C");
		$pdf->Cell(30,10,"Reg No",1,0,"C");
		$pdf->Cell(70,10,"Name",1,0,"C");
		$pdf->Cell(50,10,"Username",1,0,"C");
		$pdf->Cell(0,10,"Password",1,1,"C");
		$pdf->SetFont("Arial","",14);
        $sql = "select * from studentlogin where ID in (select ID from studentinfo where year='".$year."' AND department='".$dept."')";
        $result=mysql_query($sql);
        if(mysql_num_rows($result) > 0)
		{
			while($row = mysql_fetch_array($result)) 
			{
				$pdf->Cell(30,10,$row["RegNo"],1,0,"C");
				$pdf->Cell(70,10,$row["first_name"]." ".$row["middle_name"]." ".$row["last_name"],1,0,"C");
				$pdf->Cell(50,10,$row["UserName"],1,0,"C");
				$pdf->Cell(0,10,$row["Password"],1,1,"C");
			}
			$name = "".$year."_".$dept.".pdf";
			$pdf->output("D",$name);
		}
		else
		{
			echo "<script type='text/javascript'>alert('No Records Available!');location='homeadmin.php';</script>";
		}
    }
?>