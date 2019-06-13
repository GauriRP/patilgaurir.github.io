<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "campus";
    mysql_connect($host , $user , $password);
    mysql_select_db($db);
	$y = $_POST['yr'];
	$dept = $_POST['depts'];
	$result = mysql_query("select * from studentinfo where year='$y' AND department='$dept'");
	if(mysql_num_rows($result)>0)
	{
		header('location:homeadmin.php?import1=Batch Already Exists');
	}
	else
	{
		if (isset($_POST['submit']))
		{  
			$file_CSV = fopen($_FILES['filename']['tmp_name'], "r");
			while (($CSV_row_Data = fgetcsv($file_CSV, 1000, ",")) !== FALSE)
			{
				
				mysql_query("INSERT into studentinfo values('','$CSV_row_Data[0]', '$CSV_row_Data[1]', '$CSV_row_Data[2]', '$CSV_row_Data[3]' , '$CSV_row_Data[4]' , '$y', '$dept')");
			}
			fclose($file_CSV);
			header('location:homeadmin.php?import2=Successfully Batch Added');
		}
	}
?>