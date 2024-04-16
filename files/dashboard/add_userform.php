<!DOCTYPE html>
<html lang="en">
  
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/circular-std/style.css" >
    <link rel="stylesheet" href="../../assets/libs/css/style.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../../assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../../assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icon-css/flag-icon.min.css">



    <link rel="stylesheet" type="text/css" href="../../assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../../assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../../assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../../assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
     <link rel="stylesheet" href="../../assets/vendor/fonts/themify-icons/themify-icons.css">
     <link rel="icon" type="image/icon" href="../../img/home_icon4.png" sizes="50x50">
    
    <title>Home Management System</title>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



</head>

<body>
	<?php
	ob_start();
	   include '../login_check1.php';           
               
	?>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list" >
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="../../dashboard.php"><i class="fa fa-fw fa-user-circle"></i>Dashboard </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link "  href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Bill Management</a>
                                <div id="submenu-2" class="collapse submenu" >
                                     <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/electricity.html">Electricity</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/gas.html">Gas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/telephone.html">Telephone</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/mobilerecharge.html">Mobile Recharge</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/television.html">Television</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/water.html">Water</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>DG Locker</a>
                                <div id="submenu-3" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../dg-locker/individual.html">Individual</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../dg-locker/homedocument.html">Home document</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../dg-locker/shopdocument.html">Shop document</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../expenditure/expenditure.html" ><i class="fab fa-fw fa-wpforms"></i>Expenditure</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>insurance</a>
                                <div id="submenu-7" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../insurance/lifeinsurance.html">Life insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../insurance/terminsurance.html">Term insurance</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../task-remainder/taskremainder.html" ><i class="fas fa-fw fa-table"></i>Task Remainder</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../saving/saving.html"><i class="fas fa-fw fa-columns"></i>Saving</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="dashboard-wrapper">

            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Dashboard</h2>
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Profile</a></li>
                                        
                                            <li class="breadcrumb-item active" aria-current="page">Add User</li>

                                        </ol>
                                    </nav>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>

                    <form method="POST">
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Basic Details</h5>
                                <div class="card-body">
                                   
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Full Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required=""  placeholder="First Name  Middle Name  Last Name" class="form-control" name="fullname">
                                            </div>
                                            <span id="fullnamespan" style="color: red;"></span>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right" >User Id</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required=""  placeholder="Enter User Id for User" class="form-control" name="givenuserid">
                                            </div>
                                            <span id="useridspan" style="color: red;"></span>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Email </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required=""  placeholder="Enter Email id of user" name="email" class="form-control">
                                            </div>
                                            <span id="emailspan" style="color: red;"></span>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Mobile No</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required=""  placeholder="Enter Mobile No of user" onkeypress="return onlyNumberKey(event)" name="mobile" class="form-control" maxlength="10">
                                            </div>
                                            <span id="mobilespan" style="color: red;"></span>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Password</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="password" required=""  placeholder="Enter Password for user" name="password" class="form-control">
                                            </div>
                                            <span id="passwordspan" style="color: red;"></span>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Confirm Password</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="password" required=""  placeholder="Enter Password for user" name="cpassword" class="form-control">


                                            </div>

                                            <span id="cpasswordspan" style="color: red;"></span>
                                        </div>
                                        
                                        <br><br>
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                
                                                <button type="submit" name="submitbtn"  id="submitbtn" class="btn btn-space btn-primary" >ADD</button>
                                                <a href="../../dashboard.php" class="btn btn-space btn-secondary" name="cancelbtn">Cancel</a>
                                            </div>
                                        </div>
                                        

                                        

                                        
                                        
                                        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                        

                </div>

            </div>

        
        
        
        </div>            
           
    </div>





    
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="../../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="../../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="../../assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="../../assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="../../assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="../../assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="../../assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="../../assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="../../assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="../../assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="../../assets/libs/js/dashboard-ecommerce.js"></script>

    <script src="forms.js"></script>

   
 
    <script src="../../assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="../../assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="../../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../../assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    
    <?php
    	ob_start();
		  include '../header.php';	
          echo "<script> 
                    function onlyNumberKey(evt) { 
                          
                        // Only ASCII charactar in that range allowed 
                        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
                        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
                            return false; 
                        return true; 
                    } 
                </script> ";
		  if(isset($_POST['submitbtn']))
		  {
		  	
		  	$fullname=$_POST['fullname'];
		  	$fullname=explode(" ", $fullname);
		  	$firstname=$fullname[0];
		  	$middlename=$fullname[1];
		  	$lastname=$fullname[2];
		  	$givenuserid=$_POST['givenuserid'];
		  	$email=$_POST['email'];
		  	$mobile=$_POST['mobile'];
		  	$password=$_POST['password'];
		  	$cpassword=$_POST['cpassword'];
		  	$homeid=$_SESSION['homeid'];

		  	if($password==$cpassword)
		  	{
		  		$sql="select user_id from authentication where home_id='$homeid'";
				$result = mysqli_query($conn, $sql);
				$temp=1;
				if(mysqli_num_rows($result) > 0){
					while ($row=mysqli_fetch_assoc($result)) {
						if($row['user_id']==$givenuserid){
							$temp=0;
						}
					}
				}
				if($temp==0)
				{
					echo "<script type='text/javascript'>
					document.getElementById('useridspan').innerHTML='Please enter another User id';
					</script>";
				}
				else
				{
					$sql="insert into authentication(home_id,user_id,password) values ('$homeid','$givenuserid','$password')";
					$result = mysqli_query($conn, $sql);
					$sql="insert into user_information(home_id,user_id,first_name,middle_name,last_name,email,mobileno) values('$homeid','$givenuserid','$firstname','$middlename','$lastname','$email','$mobile')";
					$result = mysqli_query($conn, $sql);

					header("location: ../../dashboard.php");
                    exit;
				}
		  	}
		  	else{
		  		echo "<script type='text/javascript'>
					document.getElementById('cpasswordspan').innerHTML='*Please Enter Proper Password';
					</script>";

		  	}


		  }
		  

	?>		  

</body>
 
</html>
