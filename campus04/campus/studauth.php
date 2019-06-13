<?php
	session_start();
	include('dbconnection.php');
	if(isset($_POST['username']))
	{
		$_SESSION['u'] = $_POST['username'];
		$_SESSION['p'] = $_POST['password'];
		$uname = $_POST['username'];
		$pass = $_POST['password'];
		$sql = "select * from studentlogin where UserName='".$uname."' AND Password='".$pass."' limit 1";
		$result = mysql_query($sql);
		if(mysql_num_rows($result) == 1)
		{
			$_SESSION['usrnm'] = $uname;
			header('location:homestudent.php');
		}
		else
		{
			$_SESSION['user'] = $uname;
			header('location:nextstudent.php?Empty=Invalid Username or Password');
		}
	}
?>