<?php 
ob_start();
session_start();

include '../../db_connect.php';

$homeid=$_SESSION['homeid'];
$userid="";
$documentname=$_GET['useridfordoc'];
$category=$_GET['category'];

if($category=='individual')
{
	$userid=$_COOKIE['userid'];
}


$sql="select document from dg_locker where home_id='$homeid' and user_id='$userid' and document_name='$documentname' and category='$category'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{

	$row=mysqli_fetch_array($result);

	$path="../../".$row['document'];

	unlink($path);

	$sql="Delete from dg_locker where home_id='$homeid' and user_id='$userid' and document_name='$documentname' and category='$category'";
	mysqli_query($conn,$sql);
}


if($category=="shopdocument")
{
	header("location: shopdocument.php");
	exit;
}
else if($category=="homedocument")
{
	header("location: homedocument.php");
	exit;
}
else if($category=="individual")
{
	header("location: individualdocument.php");
	exit;
}

?>




