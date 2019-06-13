<?php
	session_start();
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "campus";

	mysql_connect($host , $user , $password);
	mysql_select_db($db);
	echo "done";
	
	if(isset($_POST['username']))
	{
		$uname = $_POST['username'];
		$pass = $_POST['password'];
		$sql = "select * from adminlogin where UserName='".$uname."' AND Password='".$pass."' limit 1";
		$result = mysql_query($sql);
		if(mysql_num_rows($result) == 1)
		{
			$_SESSION['usr'] = $uname;
			header('location:homeadmin.php');
		}
		else
		{
			header('location:nextadmin.php?Empty=Invalid Username or Password');
		}
	}
?>