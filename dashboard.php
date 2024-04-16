<!DOCTYPE html>
<html lang="en">
  
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">

    <title>Home Management System</title>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="files/dashboard/dashboard.css">
    <link rel="icon" type="image/icon" href="img/home_icon4.png" sizes="50x50">
   



</head>

<body>

	<?php
	   include 'login_check.php';           
               
	?>

    <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="dashboard.php"><img src="img/home.jpg" style="width: 25%;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <!-- <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div> -->
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <?php 
                                            $sql="select first_name from user_information where home_id='".$_SESSION['homeid']."' and user_id='".$_SESSION['userid']."'";
                                            $result=mysqli_query($conn,$sql);
                                            $row=mysqli_fetch_array($result);
                                            $name=$row['first_name'];
                                            $sql="select * from task_remainder where home_id='".$_SESSION['homeid']."' and to_name='$name'";
                                            $result=mysqli_query($conn,$sql);
                                            if(mysqli_num_rows($result)>0)
                                            {
                                                while($row=mysqli_fetch_array($result))
                                                {
                                                $person_id=$row['user_id'];
                                                $sql1="select first_name,last_name,image from user_information where home_id='".$_SESSION['homeid']."' and user_id='$person_id'";
                                                $result1=mysqli_query($conn,$sql1);
                                                $row1=mysqli_fetch_array($result1);
                                                $person_name=$row1['first_name']." ".$row1['last_name'];
                                                $image=$row1['image'];
                                                $title=$row['title'];
                                                echo "<a href='#' class='list-group-item list-group-item-action active'>
                                                <div class='notification-info'>
                                                    <div class='notification-list-user-img'><img src='$image' alt='' class='user-avatar-md rounded-circle'></div>
                                                    <div class='notification-list-user-block'><span class='notification-list-user-name'>$person_name</span>
                                                        $title
                                                </div>
                                                </a>";
                                                }

                                            }

                                            ?>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="files/task-remainder/taskremainder.php">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item" id="githubheader" name="githubheader" target="_blank"><img src="img/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item" id="facebookheader" name="facebookheader" target="_blank"><img src="img/facebook.jpg" alt="" > <span>Facebook</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item" id="instagramheader" name="instagramheader" target="_blank"><img src="img/instagram.jpg" alt="" > <span>Instagram</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item" id="linkedinheader" name="linkedinheader" target="_blank"><img src="img/linkedin.png" alt=""> <span>LinkedIn</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item" id="twitterheader" name="twitterheader" target="_blank"><img src="img/twitter.jpg" alt="" ><span>Twitter</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item" id="slackheader" name="slackheader" target="_blank"><img src="img/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="" alt="" id="head_image" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name" id="head_name"></h5>
                                    <span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="files/profile/profile.php"><i class="fas fa-user mr-2"></i>Profile</a>
                                <a class="dropdown-item" href="files/profile/changepassword.php"><i class="m-r-9 mdi mdi-key-variant"></i> Change Password</a>
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>




    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
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
                                <a class="nav-link active" href="dashboard.php"><i class="fa fa-fw fa-user-circle"></i>Dashboard </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Bill Management</a>
                                <div id="submenu-2" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="files/bill-management/electricity.php">Electricity</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="files/bill-management/gas.php">Gas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="files/bill-management/telephone.php">Telephone</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="files/bill-management/mobilerecharge.php">Mobile Recharge</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="files/bill-management/television.html">Television</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="files/bill-management/water.php">Water</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>DG Locker</a>
                                <div id="submenu-3" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="files/dg-locker/individual.php">Individual</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="files/dg-locker/homedocument.php">Home document</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="files/dg-locker/shopdocument.php">Shop document</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="files/expenditure/expenditure.php" ><i class="fab fa-fw fa-wpforms"></i>Expenditure</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>insurance</a>
                                <div id="submenu-7" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="files/insurance/lifeinsurance.php">Life insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="files/insurance/terminsurance.php">Term insurance</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="files/task-remainder/taskremainder.php" ><i class="fas fa-fw fa-table"></i>Task Remainder</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="files/saving/saving.php"><i class="fas fa-fw fa-columns"></i>Saving</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        

        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
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
                                
                                
                            </div>
                        </div>
                    </div>
                    
                    <div id="record" style="margin-top: -3.5%">
                      
                        <form action="files/dashboard/add_userform.php" >

                            <input type='image' src="img/add_user.png" alt='Submit' id="btnAdd"  style='float:left;width: 30%; padding: 4%;margin-left:1.5%;margin-right:1.5%;' ></input>
                        </form>
                    </div> 

                </div>

            </div>

            
           
        </div>
        
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <!-- <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script> -->
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <!-- <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script> -->





    <?php

                $sql="select * from social_sites where home_id='".$_SESSION['homeid']."' and user_id='".$_SESSION['userid']."'";

                $result = mysqli_query($conn, $sql);
                
                    $row=mysqli_fetch_assoc($result);   
                    $facebook=$row['facebook'];
                    $twitter=$row['twitter'];
                    $instagram=$row['instagram'];
                    $github=$row['github'];
                    $linkedin=$row['linkedin'];
                    $slack=$row['slack'];
                    if($facebook=="")
                        {   $facebook="#";}
                    if($twitter=="")
                        {   $twitter="#";}
                    if($instagram=="")
                        {   $instagram="#";}
                    if($github=="")
                        {   $github="#";}
                    if($linkedin=="")
                        {   $linkedin="#";}
                    if($slack=="")
                        {   $slack="#";}
                    
                    
                    echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('facebookheader').href='$facebook';

                            document.getElementById('twitterheader').href='$twitter';
                            
                            document.getElementById('instagramheader').href='$instagram';
                            document.getElementById('githubheader').href='$github';
                            document.getElementById('linkedinheader').href='$linkedin';
                            document.getElementById('slackheader').href='$slack';
                            });
                            </script>";

                


                
                $sql="select first_name,middle_name,last_name,image from user_information where home_id='".$_SESSION['homeid']."' and user_id='".$_SESSION['userid']."'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                $row=mysqli_fetch_assoc($result);
                    $name=$row['first_name']." ".$row['last_name'];
                    $img1=$row['image'];  
                    
                    echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('head_name').innerHTML='$name';
                        document.getElementById('head_image').src='$img1';
                            });
                            </script>";



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



                $sql="select *from user_information where home_id='".$_SESSION['homeid']."'";
                $result = mysqli_query($conn, $sql);
                $i=0;
                $length=mysqli_num_rows($result);
                if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){

                    
                    $name=$row['first_name'];  
                    

                    $img1=$row['image'];
                    
                    $id=$row['user_id'];
                    $str1="<script type='text/javascript'>
                                 $(document).ready(function(){
                            $('#record').append(\"<div class='flip-card' style=' float:left ;width:30%;                   padding:20px;margin-left:1.5%;margin-right:1.5%;height:325px;'>\
                            <div class='flip-card-inner' style='border-radius:20%;' >\
                            <div class='flip-card-front' style='border-radius:20%;background:#efeff7;border: 5px solid gray;'><h2>$name</h2>\
                                <img src='$img1' alt='Avatar' style='width:80%;height:80%;border-radius:20%;'>\
                            <div>\
                            </div></div>\
                            <div class='flip-card-back' style='border-radius:20%;'>\
                            <br><br><br>\
                            <a href='files/dashboard/viewinformation.php' id='$id' onClick='createsession(this.id)' class='btn btn-warning' style='font-size:20px;' >view</a>\
                            <br><br>\
                            <br><br>\
                            <a href='#' class='btn btn-warning' style='font-size:20px;' >Remove</a>\
                            </div>\
                            </div>\
                        </div>\");
                        });  
                        </script>";

                    echo "".$str1;

                    } 




                }




                
                $user="user";
                echo "<script>";
                echo "function createsession(clicked) { 
                    createCookie('$user', clicked, '10'); 
                    } 

                    function createCookie(cname, cvalue, exdays) {
                        var d = new Date();
                        d.setTime(d.getTime() + (exdays*24*60*60*1000));
                        var expires = 'expires='+ d.toUTCString();
                        document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';
                    }
                    </script>";
                



                



               

    ?>
</body>
</html>
 

