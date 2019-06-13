<?php
	$host = "localhost";
    $user = "root";
    $password = "";
    $db = "campus";
    mysql_connect($host , $user , $password);
    mysql_select_db($db);
	if (isset($_POST['submit']))
    { 	
    	$year = $_POST['yr'];
    	$dept = $_POST['depts'];
        $query = "select * from studentlogin where ID in (select ID from studentinfo where year='".$year."' AND department='".$dept."')";
        $res = mysql_query($query);
        if(mysql_num_rows($res) > 0)
        {
			header('location:homeadmin.php?generate1=Password Already Generated!');
        }
        else
        {
        	$sql = "select * from studentinfo where year='".$year."' AND department='".$dept."' ";
        	$result = mysql_query($sql);
        	function random_password($len)
        	{
        		$chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $pass=substr(str_shuffle($chars),0,$len);
                return $pass;
        	}
        	if(mysql_num_rows($result) > 0)
        	{
        		while ($row = mysql_fetch_assoc($result)) 
        		{
					$id = $row["ID"];
        			$prn = $row["RegNo"];
					$fnm = $row["first_name"];
					$mnm = $row["middle_name"];
					$lnm = $row["last_name"];
					$email = $row["email"];
        			$user = $prn;
        			$pass = random_password(8);
        			$query = "insert into studentlogin values ('$id' , '$prn' , '$fnm' , '$mnm' , '$lnm' , '$email' , '$user' , '$pass')";
        			mysql_query($query);
        		}
                header('location:homeadmin.php?generate2=Successfully Password Generated!');
        	}
        	else
        	{
                header('location:homeadmin.php?generate3=No Records Available!');
        	}
        }
    }
?>