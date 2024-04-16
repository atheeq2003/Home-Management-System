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
            <div class="menu-list">
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
                                <a class="nav-link " href="../../dashboard.php"><i class="fa fa-fw fa-user-circle"></i>Dashboard </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link "  href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Bill Management</a>
                                <div id="submenu-2" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/electricity.php">Electricity</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/gas.php">Gas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/telephone.php">Telephone</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/mobilerecharge.php">Mobile Recharge</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/television.php">Television</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/water.php">Water</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>DG Locker</a>
                                <div id="submenu-3" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../dg-locker/individual.php">Individual</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../dg-locker/homedocument.php">Home document</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../dg-locker/shopdocument.php">Shop document</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                           <li class="nav-item ">
                                <a class="nav-link" href="../expenditure/expenditure.php" ><i class="fab fa-fw fa-wpforms"></i>Expenditure</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>insurance</a>
                                <div id="submenu-7" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../insurance/lifeinsurance.php">Life insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../insurance/terminsurance.php">Term insurance</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                           <li class="nav-item">
                                <a class="nav-link" href="../task-remainder/taskremainder.php" ><i class="fas fa-fw fa-table"></i>Task Remainder</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../saving/saving.php"><i class="fas fa-fw fa-columns"></i>Saving</a>
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
                            
                                            <li class="breadcrumb-item active" aria-current="page">Profile</li>

                                        </ol>
                                    </nav>
                                </div>

                                
                                
                            </div>
                        </div>
                    </div>







                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- profile -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- card profile -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="user-avatar text-center d-block" >
                                        <img  id="user_img" src="" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                                    </div>
                                    <div class="text-center">
                                        <h2 class="font-24 mb-0" id="name"></h2>
                                        
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h3 class="font-16">Contact Information</h3>
                                    <div class="">
                                        <ul class="list-unstyled mb-0">
                                        <a class="mb-2" href="#" id="email"></a>
                                        <a class="mb-0" href="#" id="mob"></a>
                                    </ul>
                                    </div>
                                </div>
                                
                                <div class="card-body border-top">
                                    <h3 class="font-16">Social Channels</h3>
                                    <div class="" >
                                        
                                        <a href="#" id="facebook" target="_blank"><i class="fab fa-fw fa-facebook-square mr-1 facebook-color"></i>facebook.com</a>
                                        <br>
                                        <a href="#" id="twitter" target="_blank"><i class="fab fa-fw fa-twitter-square mr-1 twitter-color" ></i>twitter.com</a>
                                        <br>
                                        <a href="#" id="instagram" target="_blank"><i class="fab fa-fw fa-instagram mr-1 instagram-color" ></i>instagram.com</a>
                                        <br>
                                        <a href="#" id="youtube" target="_blank"><i class="fab fa-fw fa-youtube mr-1 youtube-color" ></i>youtube.com</a>

                                    </div>
                                </div>

                                
                            </div>
                            <!-- ============================================================== -->
                            <!-- end card profile -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- end profile -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- campaign data -->
                        <!-- ============================================================== -->
                        <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- campaign tab one -->
                            <!-- ============================================================== -->
                            <div class="influence-profile-content pills-regular">
                                
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                                        

                                        
                                        <div class="section-block">
                                                <h3 class="section-title">Details</h3>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="media influencer-profile-data d-flex align-items-center p-2">
                                                            
                                                            <div class="media-body ">
                                                                <div class="influencer-profile-data">
                                                                    <h4 class="m-b-10" id="full_name">Full Name : </h4>
                                                                    <h4 class="m-b-10" id="birth">Birth Date : </h4>
                                                                    <h4 class="m-b-10" id="gender">Gender : </h4>
                                                                    <h4 class="m-b-10" id="profession">profession : </h4>
                                                                    <h4 class="m-b-10" id="blood_group">Blood Group : </h4>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>


                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="media influencer-profile-data d-flex align-items-center p-2">
                                                            
                                                            <div class="media-body" id="work">
                                                                 <h3 class="m-b-10">Work</h3>
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="media influencer-profile-data d-flex align-items-center p-2">
                                                            
                                                            <div class="media-body" id="education">
                                                                  <h3 class="m-b-10" >Educatation</h3>
                                                                    
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="media influencer-profile-data d-flex align-items-center p-2">
                                                            
                                                            <div class="media-body" id="language">
                                                                  <h3 class="m-b-10" >Language</h3>
                                                                    
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end campaign tab one -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- end campaign data -->
                        <!-- ============================================================== -->
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
    


    <!--<script src="../../assets/vendor/charts/c3charts/C3chartjs.js"></script>-->
    <script src="graph.js"></script>
    


    <script src="../../assets/libs/js/dashboard-ecommerce.js"></script>



   
 
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
		  include '../header.php';	
			     $sql="select * from social_sites where home_id='".$_SESSION['homeid']."' and user_id='".$_COOKIE['user']."'";

                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    $row=mysqli_fetch_assoc($result);   
                    $facebook=$row['facebook'];
                    $twitter=$row['twitter'];
                    $instagram=$row['instagram'];
                    $youtube=$row['youtube'];
                    if($facebook=="")
                        {   $facebook="#";}
                    if($twitter=="")
                        {   $twitter="#";}
                    if($instagram=="")
                        {   $instagram="#";}
                    if($youtube=="")
                        {   $youtube="#";}

                    echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('facebook').href='$facebook';
                            document.getElementById('twitter').href='$twitter';
                            document.getElementById('instagram').href='$instagram';
                            document.getElementById('youtube').href='$youtube';
                            });
                            </script>";

                }

                //For social sites
                $sql="select * from social_sites where home_id='".$_SESSION['homeid']."' and user_id='".$_COOKIE['user']."'";

                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                $row=mysqli_fetch_assoc($result);	
                $facebook="".$row['facebook'];
                $twitter="".$row['twitter'];
                $instagram="".$row['instagram'];
                $youtube="".$row['youtube'];
                

                	echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('facebook').href='$facebook';
                            });
                            </script>";

            	}



				$sql="select * from user_information where home_id='".$_SESSION['homeid']."' and user_id='".$_COOKIE['user']."'";
                $result = mysqli_query($conn, $sql);
                 
                if(mysqli_num_rows($result) > 0){
                	$row=mysqli_fetch_assoc($result);
                    $name=$row['first_name']." ".$row['last_name'];
                    $img1="../../".$row['image'];  
                	
                	echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('name').innerHTML='$name';
                            document.getElementById('user_img').src='$img1';
                            });
                            </script>";
                    



                    //Personal details
                    
                    $email='<i class="fas fa-fw fa-envelope mr-2" ></i>'.$row['email']."<br>";
                    $mob='<i class="fas fa-fw fa-phone mr-2"></i>'.$row['mobileno'];
                    $name="Full Name : ".$row['first_name']." ".$row['middle_name']." ".$row['last_name'];
                    $birth_date=$row['birth_date'];
                    $birth_date=explode("-",$birth_date);
                    $birth_date="Birth Date : ".$birth_date[2]."-".$birth_date[1]."-".$birth_date[0];
                    $profession="Profession :".$row['profession'];
                    $gender="Gender: ".$row['gender'];
                    $blood_group="Blood Group :".$row['blood_group'];

    				echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('full_name').innerHTML='$name';
                            document.getElementById('email').innerHTML='$email';
                            document.getElementById('mob').innerHTML='$mob';
                            document.getElementById('birth').innerHTML='$birth_date';
                            document.getElementById('profession').innerHTML='$profession';
                            document.getElementById('gender').innerHTML='$gender';
                            document.getElementById('blood_group').innerHTML='$blood_group';
                            });
                            


                            </script>";                
                   
					
    				//Personal details
                }
                else
                {
                	$name=$_SESSION['userid'];
                	echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('head_name').innerHTML='$name';
                            document.getElementById('head_image').src='';
                            });
                            </script>";
                }





                //For work education language
                $sql="select work from user_information1 where home_id='".$_SESSION['homeid']."' and user_id='".$_COOKIE['user']."'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                	while ($row=mysqli_fetch_assoc($result)) {
                		$work=$row['work'];
                        if($work){
                		$str="<p><i class='fas fa-arrow-circle-right' style='font-size:20px;color:blue'></i> $work</p>";

                		echo "<script type='text/javascript'>";
                		echo "$(\"#work\").append(\"$str\");";
                		echo "</script>";
                	   }
                	}

                }

                //For education

                $sql="select education from user_information1 where home_id='".$_SESSION['homeid']."' and user_id='".$_COOKIE['user']."'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                	while ($row=mysqli_fetch_assoc($result)) {
                		$education=$row['education'];
                        if($education){
                		  $str="<p><i class='fas fa-arrow-circle-right' style='font-size:20px;color:blue'></i> $education</p>";

                		  echo "<script type='text/javascript'>";
                		  echo "$(\"#education\").append(\"$str\");";
                		  echo "</script>";
                	   }
                	}

                }
                //For language

                $sql="select language from user_information1 where home_id='".$_SESSION['homeid']."' and user_id='".$_COOKIE['user']."'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                	while ($row=mysqli_fetch_assoc($result)) {
                		$language=$row['language'];
                        if($language){
                		  $str="<p><i class='fas fa-arrow-circle-right' style='font-size:20px;color:blue'></i> $language</p>";

                		  echo "<script type='text/javascript'>";
                		  echo "$(\"#language\").append(\"$str\");";
                		  echo "</script>";
                	   }
                	}

                }
                


	?>

</body>
 
</html>


