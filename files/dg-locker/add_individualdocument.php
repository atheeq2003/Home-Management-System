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
    
    <title>Home Management System</title>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../files/dashboard/dashboard.css">
    <link rel="icon" type="image/icon" href="../../img/home_icon4.png" sizes="50x50">
    <script src="../../files/dashboard/dashboard.js"></script>

    <!--<script src="individual.js"></script>-->

	<!-- =========================================== -->
	<!-- CSS for Add new Document -->
	<!-- =========================================== -->


    <style type="text/css">
    	.form_add_document{
    		position: relative;
    		left: 25%;
    		top: 17%;
    		width: 90%;
    		line-height: 30px;
    	}
    	.form_btn{
    		position: relative;
    		left: 65%;
    	}
    	#Doctype{        /*dropdown*/
    		width: 150px;
    		background-color: #87CEFA;
    		border:4px solid transparent;

    	}
    	
    	
    	
    </style>


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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">DG Locker</a></li>
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Individuals</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Add New Document</li>

                                        </ol>
                                    </nav>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>

                    
                    <div class="row">
                    	<form method="POST" class="form_add_document" enctype="multipart/form-data">
                        <!-- ============================================================== -->
                        <!-- Add new Document form -->
                        <!-- ============================================================== -->

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header" style="text-align: center;">Add New Document</h5>
                                <div class="card-body">
                                    
                                        <div class="form-group">
                                            <label for="Docname" style="float: left;">Document Name&nbsp;&nbsp;&nbsp;</label>
                                            <input id="Docname" type="text" name="Docname" required="" placeholder="Enter Document name" class="form-control" style="width: 350px;" maxlength="30">
                                        </div><br>

                                         <div class="form-group">
                                            <label for="Doctype">Document Type</label>&nbsp;&nbsp;&nbsp;                              
                                            <select name="Doctype" id="Doctype">
                                            	<option value="Identity">ID Proof</option>
                                            	<option value="School">School</option>
                                            	<option value="College">College</option>
                                                <option value="Bank">Bank</option>
                                            	<option value="Sports">Sports</option>
                                            	<option value="Health">Health</option>                                            	
                                            	<option value="Office">Office</option>
                                            	<option value="Other">Other</option>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                        		<label for="switch16">Keep Password Protected</label>&nbsp;&nbsp;&nbsp;              
                                        		<div class="switch-button switch-button-success">
                                                        <input type="checkbox" name="switch16" id="switch16" ><span>
                                                    <label for="switch16"></label></span>                                            
                                            	</div>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<div id="div_password1" style="display: none;">
                                        		<label for="password" style="float: left;">Password&nbsp;&nbsp;&nbsp;</label>
                                            	<input id="password" name="password" type="password" placeholder="Type Password"  class="form-control" style="width: 350px;">
                                        	</div>
                                        </div>

                                        <div class="form-group" >
                                        	<div id="div_password2" style="display: none;">
                                        		<label for="re_password" style="float: left;">ReType Password&nbsp;&nbsp;&nbsp;</label>
                                            	<input id="re_password" name="re_password" type="password" placeholder="Retype Password"  class="form-control" style="width: 350px;">
                                        	</div>	                                           
                                        </div>

                                        <div class="form-group row">
                                            <label for="soft_copy" class="col-12 col-sm-3 col-form-label text-sm-right">Upload Document</label>&nbsp;&nbsp;&nbsp;
                                           
                                            <input type="file" id="filetoupload" name="filetoupload" required="" class="form-control" >
                                        		
                                            
                                        </div>
                                     
                                        <div class="form_btn">                                          
                                            <div class="col-sm-6 pl-0">
                                                    <button type="submit" class="btn btn-space btn-primary" name="submitbtn">Save</button>&nbsp;
                                                    <a href="individualdocument.php" class="btn btn-space btn-secondary">Cancel</a>
                                                
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
						$(document).ready(function(){
    					$('#switch16').prop('checked', false);
    					$('#switch16').click(function(){

      						if ($(this).is(':checked')) {
       							$('#div_password1').show();
       							$('#div_password2').show();
       
      						}
      						else{
        						$('#div_password1').hide();
        						$('#div_password2').hide();
      						}
    					});
						});
					</script>";

				if(isset($_POST['submitbtn']))
				{
					
					$documentname=$_POST['Docname'];
					$documenttype=$_POST['Doctype'];
					
					$homeid=$_SESSION['homeid'];
					$userid=$_SESSION['userid'];
					$password="";
                    $temp=1;
					if(isset($_POST['switch16']))
					{	
                        if($_POST['password']!=$_POST['re_password'])
                        {
                            echo " <script type='text/javascript'>
                                        
                                            alert('Password is not same');
                                        
                                        </script>";
                            $temp=0;
                        }
						$password=$_POST['password'];
					}



					$name = $_FILES['filetoupload']['name'];
                    $target_dir="../../image/documents/$homeid$userid";
                    $target="image/documents/$homeid$userid".$name;

                    //echo "<br>".$target_dir;
                    //echo "<br>".$target;

                    $target_file = $target_dir.basename($_FILES["filetoupload"]["name"]);
                    $imagefileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                    $extension_arr=array('jpg','jpeg','png','gif','pdf');
                    $homeid=$_SESSION['homeid'];
                    $userid=$_SESSION['userid'];
                    if(in_array($imagefileType,$extension_arr) && $temp)
                        {	
                        	$sql="select * from dg_locker where home_id='$homeid' and user_id='$userid' and document_name='$documentname'";
                        	$result=mysqli_query($conn,$sql);
                        	$temp=1;
                        	if(mysqli_num_rows($result)>0)
                        	{
                                
                        		$temp=0;
                        	}
                        	if($temp==1)
                        	{
                                
                        		$sql="insert into dg_locker(home_id,user_id,document_name,document,document_type,password,category) values('$homeid','$userid','$documentname','$target','$documenttype','$password','individual')";
                        		mysqli_query($conn,$sql);
                        		move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_dir.$name);
                                header("location: individualdocument.php");
                                exit;
                        	}
                        	else
                        	{
                                echo " <script type='text/javascript'>
                                        
                                            alert('Exist');
                                        
                                        </script>";
                        	}


                        	

                            
                        }



				}
  	?>


</body>
 
</html>
