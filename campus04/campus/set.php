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
        $setdept = $_SESSION['setdept'];
		$setcls = $_SESSION['setcls'];
		$setten = $_SESSION['setten'];
		$settwdip = $_SESSION['settwdip'];
		$agg = $_SESSION['agg'];
		$lkt = $_SESSION['lkt'];
		$dkt = $_SESSION['dkt'];
		$nm = "ShortedList_".$setdept."_".$setcls;
        require("fpdf/fpdf.php");
		$pdf = new FPDF('p','mm','A4');
		$pdf->AddPage();
		$pdf->SetFont("Arial","B",11);
		$pdf->Cell(0,10,$nm,0,1,"C");
		$pdf->Cell(0,10,"",0,1,"C");
		$pdf->Cell(10,10,"Reg No",1,0,"C");
		$pdf->Cell(25,10,"First Name",1,0,"C");
		$pdf->Cell(25,10,"Middle Name",1,0,"C");
		$pdf->Cell(24,10,"Last Name",1,0,"C");
		$pdf->Cell(30,10,"Registration No",1,0,"C");
		$pdf->Cell(18,10,"X Marks",1,0,"C");
		$pdf->Cell(26,10,"XII/Dip Marks",1,0,"C");
		$pdf->Cell(0,10,"Engg Aggregate",1,1,"C");
		$pdf->SetFont("Arial","",10);
        $sql="select RegNo,first_name,middle_name,last_name,RegNo,x_marks,xii_marks,Aggregate from information natural join personal natural join educational where department='$setdept' AND class='$setcls' AND x_marks>'$setten' AND xii_marks>'$settwdip' AND Aggregate>'$agg' AND lkt='$lkt' AND dkt='$dkt'";
        $result=mysql_query($sql);
		
		while($row = mysql_fetch_array($result)) 
		{
			$pdf->Cell(10,7,$row["RegNo"],1,0,"C");
			$pdf->Cell(25,7,$row["first_name"],1,0,"C");
			$pdf->Cell(25,7,$row["middle_name"],1,0,"C");
			$pdf->Cell(24,7,$row["last_name"],1,0,"C");
			$pdf->Cell(30,7,$row["RegNo"],1,0,"C");
			$pdf->Cell(18,7,$row["x_marks"],1,0,"C");
			$pdf->Cell(26,7,$row["xii_marks"],1,0,"C");
			$pdf->Cell(0,7,$row["Aggregate"],1,1,"C");
		}
		$name = "ShortedList_".$setdept."_".$setcls.".pdf";
		$pdf->output("D",$name);
    }
?>