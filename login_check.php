<?php

session_start();

if(count($_SESSION))
{
	include 'db_connect.php';
	

	$sql="select home_id,user_id,password from authentication";
	$result = mysqli_query($conn, $sql);
	$temp=1;
	if($result->num_rows>0){
		while($row=mysqli_fetch_assoc($result)){
			
			if($_SESSION['homeid']==$row['home_id'] && $_SESSION['userid']==$row['user_id'] && $_SESSION['password']==$row['password'] )
			{
				$temp=0;
				break;
			}
		}
	}
	else
	{
		echo "0 results";
	}

	if($temp==1)
	{
		session_unset();
		session_destroy();

		header("location: login.php");
    	exit;
	}
}
else
{

	session_unset();
	session_destroy();
	header("location: login.php");
    exit;
}



?>