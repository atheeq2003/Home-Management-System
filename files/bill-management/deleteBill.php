<?php
	include '../login_check1.php';

	$selected_issue_date=$_GET['date1'];
	$selected_category=$_GET['category1'];
	
	$redirect=$selected_category.".php";

	$sql="select soft_copy from bill_management where(home_id='".$_SESSION['homeid']."' and category='".$selected_category."' and issue_date='".$selected_issue_date."')";
	// echo "<br>".$sql;
	 $result=mysqli_query($conn,$sql);
	 if(mysqli_num_rows($result)>0)
	 {
	 	$row=mysqli_fetch_array($result);
	 	if($row['soft_copy'] != 'null')
	 	{
	 		$file_path='../../'.$row['soft_copy'];
	 		unlink($file_path);
	 	}
	 	  
	 }

	$sql="delete from bill_management where(home_id='".$_SESSION['homeid']."' and category='".$selected_category."' and issue_date='".$selected_issue_date."')";

    $result=mysqli_query($conn,$sql);
    
    	
		
		if($result==true )
		{
			//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=$selected_category_1">';
			echo "<script type='text/javascript'>
        	    alert('Deleted Successfully!!');
        	    document.location.href='$redirect';
        	</script>";
		}
	
	


	//header("location: $selected_category_1");
    //exit;
	
	
  ?>

