
<?php 
  
ob_start();
session_start();
include '../../db_connect.php';
$homeid=$_SESSION['homeid'];

$documetname=$_GET['useridfordoc'];
$category=$_GET['category'];
$userid="";
if($category=="individual")
{
	$userid=$_COOKIE['userid'];
}


$sql="select * from dg_locker where home_id='$homeid' and user_id='$userid' and document_name='$documetname' and category='$category'";

$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
	$row=mysqli_fetch_assoc($result);

	$documetname= "../../".$row['document'];
	$ext = pathinfo($documetname, PATHINFO_EXTENSION);
	
	if($ext == 'PDF' || $ext=='pdf')
	{
	
		// Header content type 
		header("Content-type: application/pdf"); 
	  	
		header("Content-Length: " . filesize($documetname)); 

		// Send the file to the browser. 
		readfile($documetname);
	}
	else
	{
		echo "<img src='$documetname' style='display: block;margin-left: auto;margin-right: auto;width: 50%;'>";
	}
}
?> 


