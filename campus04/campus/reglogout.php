<?php
	session_start();
	if(isset($_GET['log']))
	{
		session_destroy();
		header('location:index.php');
	}
	else if(isset($_GET['logstud']))
	{
		session_destroy();
		header('location:index.php');
	}
?>