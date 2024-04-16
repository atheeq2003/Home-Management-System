
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../../dashboard.php"><img src="../../img/logo4.jpg" style="width: 30%;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <!-- <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Ayush Vachhani</span>accepted your invitation to join the team.
                                    
                                                </div>
                                            </a> -->
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
                                                $image="../../".$row1['image'];
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
                                    <div class="list-footer"> <a href="../task-remainder/taskremainder.php">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item" id="githubheader" name="githubheader" target="_blank"><img src="../../img/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item" id="facebookheader" name="facebookheader" target="_blank"><img src="../../img/facebook.jpg" alt="" > <span>Facebook</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item" id="instagramheader" name="instagramheader" target="_blank"><img src="../../img/instagram.jpg" alt="" > <span>Instagram</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item" id="linkedinheader" name="linkedinheader" target="_blank"><img src="../../img/linkedin.png" alt=""> <span>LinkedIn</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item" id="twitterheader" name="twitterheader" target="_blank"><img src="../../img/twitter.jpg" alt="" ><span>Twitter</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item" id="slackheader" name="slackheader" target="_blank"><img src="../../img/slack.png" alt="" > <span>Slack</span></a>
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
                                <a class="dropdown-item" href="../profile/profile.php"><i class="fas fa-user mr-2"></i>Profile</a>
                                <a class="dropdown-item" href="../profile/changepassword.php"><i class="m-r-9 mdi mdi-key-variant"></i> Change Password</a>
                                <a class="dropdown-item" href="../../logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

</body>
</html>

<?php
                $sql="select first_name,middle_name,last_name,image from user_information where home_id='".$_SESSION['homeid']."' and user_id='".$_SESSION['userid']."'";
                $result = mysqli_query($conn, $sql);
                 
                if(mysqli_num_rows($result) > 0){
                $row=mysqli_fetch_assoc($result);
                    $name=$row['first_name']." ".$row['last_name'];
                    $img1="../../".$row['image'];  
                    
                
                    
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

                $sql="select * from social_sites where home_id='".$_SESSION['homeid']."' and user_id='".$_SESSION['userid']."'";

                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
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

                }
                

?>