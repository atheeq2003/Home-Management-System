<?php
ob_start();
session_start();

include '../../db_connect.php'; 

$id=$_GET['taskid'];
$image=$_GET['image'];

$sql="delete from task_remainder where task_id='$id'";

if(strcmp($image,"")!=0)
{
	unlink($image);
}

if (mysqli_query($conn, $sql)) {
	echo "<script>
		alert('Deleted Successfully');
		document.location.href='taskremainder.php';
	</script>";


} 


?>