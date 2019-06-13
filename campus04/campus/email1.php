<?php
	session_start();
	$host = "localhost";
    $user = "root";
    $password = "";
    $db = "campus";
    mysql_connect($host , $user , $password);
    mysql_select_db($db);
		
	if(isset($_POST["email"]))
	{
		$year = $_SESSION['y'];
		$dept = $_SESSION['d'];
		$cls = $_SESSION['c'];
		$sql = "select * from studentlogin where ID in (select ID from studentinfo where year='".$year."' AND department='".$dept."' AND class='".$cls."')";
		$result=mysql_query($sql);
		if(mysql_num_rows($result) > 0)
		{
			while($row = mysql_fetch_array($result)) 
			{
				$to = $row["email"];
				$subject = "Campus Recruitment Account - Username and Password";
				$message = "Your Username is ".$row["UserName"]." and Password is ".$row["Password"];
				mail($to , $subject , $message);
			}
			header('location:homeadmin.php?email1=Emails Sent Successfully!');
		}
	}
?>