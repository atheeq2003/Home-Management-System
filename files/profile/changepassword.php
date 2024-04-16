
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
        
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php
            include 'navbar.php';
        ?>

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
                                        
                                            <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>

                                        </ol>
                                    </nav>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>

                    <form method="POST" >

                    <div class="row">

                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">

                                
                                <div class="card-body">
                                    	
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Current password</label>

                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="password" name="current_password" id="current_password"  placeholder="Enter Current password" class="form-control">

                                            </div>

                                            
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">New password</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="password" name="new_password" id="new_password"  placeholder="Enter New password" class="form-control">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Retype new password</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="password" name="retype_new_password" id="retype_new_password"  placeholder="Enter Retype new password" class="form-control">
                                                <span id="retype_new_password" style="color: red;"></span>

                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                
                                                <button type="submit" name="submitbtn"  id="submitbtn" class="btn btn-space btn-primary" >Save</button>
                                                <button class="btn btn-space btn-secondary" name="cancelbtn" id="cancelbtn">Cancel</button>
                                               

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

    <!--<script src="forms.js"></script>-->

   
 
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
            $homeid=$_SESSION['homeid'];
            $userid=$_SESSION['userid'];

            if(isset($_POST['cancelbtn']))
            {
                header("location: ../../dashboard.php");
                    exit;
            }


            if (isset($_POST['submitbtn'])) {
            	$current_password=$_POST['current_password'];
            	$new_password=$_POST['new_password'];
            	$retype_new_password=$_POST['retype_new_password'];
            	
            	if(strcmp($new_password,$retype_new_password)==0)
            	{
            		 $sql="select * from authentication where home_id='$homeid' and user_id='$userid' and password='$current_password';";
            		 $result = mysqli_query($conn,$sql);
            		 if(mysqli_num_rows($result)>0)
            		 {
            		 	$sql= "UPDATE authentication SET password='$new_password' where home_id='$homeid' and user_id='$userid';";
                			mysqli_query($conn, $sql);
                			echo "<script type='text/javascript'>
                    		alert('Your  password is Changed');
                    		location.reload();
                    		</script>";
                    		
            				
            		 }
            		 else
            		 {
            		 	
            		 	echo "<script type='text/javascript'>
                    		alert('Your Current password is not correct');
                    		</script>";
            		 }

            	}
            	else
            	{
            		echo "<script type='text/javascript'>
                    	alert('Please enter correct password');
                    </script>";
            	}
            }
           


    ?>



</body>
 
</html>




