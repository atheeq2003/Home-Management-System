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
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <?php
	   include '../login_check1.php';
	             
               
	?>

    <div class="dashboard-main-wrapper">
        
        <!-- ============================================================== -->
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
                                        <img  id="user_img" src="" alt="User Avatar" class="rounded-circle user-avatar-xxl" >
                                        <form method="POST" enctype="multipart/form-data">
                                        <label for="file">
                                            
                                            <i class="fa fa-camera upload-button" id='image' name="image" style="position: absolute; bottom:15%; left:70%;"></i>
                                            <input type="file" id="file" style="display: none" name="filetoupload">
                                            </label>
                                            <div style="display: none;position: static;" id="uploadimg">
                                        
                                                <input type="submit" name="update" style="float: left;" class="btn btn-primary" id="update" value="Update"> 
                                                <input type="submit" name="cancel"style="float: right" class="btn btn-primary" id="cancel" value="Cancel" > 
                                        
                                            </div>

                                            </form>
                                        
                                        
                                    </div>
                                    
                                    <br><br>
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
                                    <h3 class="font-16">Social Channels<a href="edit_social_sites.php"><i class="far fa-edit" style="float: right;"></i></a></h3>
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
                                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-campaign-tab" data-toggle="pill" href="#pills-campaign" role="tab" aria-controls="pills-campaign" aria-selected="true">Profile</a>
                                    </li>
                                    
                                   
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                                        

                                        
                                        <div class="section-block">
                                            <div style="float: right; ">
                                                <a href="editprofile.php" class="btn btn-primary" ><i class="far fa-edit"></i>  Edit</a>
                                            
                                            </div>
                                            <div style="float: left;">
                                                <br>
                                                <h3 class="section-title">Details</h3>
                                              
                                            </div>
                                            
                                            <br><br>
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
                                                                    <h4 class="m-b-10" id="profession">profesion : </h4>
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
                                                                    <a href="javascript:void(0)"  id="addwork"  style="font-size: 20px;" ><i class="ti-plus"  ></i>Add Work Experience</a>
                                                                    <div id="workinputfield">
                                                                    <form method="POST">
                                                                        <input type="text" name="addworktxt"

                                                                        style="width: 80%">
                                                                        <input type="submit" name="addworkbtn" class="btn btn-primary"  value="Add" style="float: right">
                                                                        
                                                                    </form>
                                                                    </div>
                                                                    <br><br>
                                                                    
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
                                                                    <a href="javascript:void(0)"  id="addeducation"  style="font-size: 20px;"><i class="ti-plus"></i>Add Education(School/University)</a>
                                                                    <div id="educationinputfield">
                                                                    <form method="POST">
                                                                        <input type="text" name="addeducationtxt"

                                                                        style="width: 80%">
                                                                        <input type="submit" name="addeducationbtn"class="btn btn-primary"  value="Add" style="float: right">
                                                                        
                                                                    </form>
                                                                    </div>
                                                                    <br><br>     
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
                                                                    <a href="javascript:void(0)"  id="addlanguage"  style="font-size: 20px;"><i class="ti-plus"></i>Add Language</a>
                                                                    <div id="languageinputfield">
                                                                    <form method="POST">
                                                                        <input type="text" name="addlanguagetxt"

                                                                        style="width: 80%">
                                                                        <input type="submit" name="addlanguagebtn" value="Add" class="btn btn-primary"  style="float: right">
                                                                        
                                                                    </form>
                                                                    </div>
                                                                    <br><br>
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                                        <div class="card" id="reviews">
                                            <h5 class="card-header">Revies</h5>
                                            
                                            
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
    			//Socila sites
                ob_start();
    			$sql="select * from social_sites where home_id='".$_SESSION['homeid']."' and user_id='".$_SESSION['userid']."'";

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

            	$sql="select * from user_information where home_id='".$_SESSION['homeid']."' and user_id='".$_SESSION['userid']."'";
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
                    
                    


                    $name="Full Name : ".$row['first_name']." ".$row['middle_name']." ".$row['last_name'];
                    $birth_date=$row['birth_date'];
                    $birth_date=explode("-",$birth_date);
                    $birth_date="Birth Date : ".$birth_date[2]."-".$birth_date[1]."-".$birth_date[0];
                    $profession="Profession :".$row['profession'];
                    $gender="Gender: ".$row['gender'];
                    $blood_group="Blood Group :".$row['blood_group'];
                    $email='<i class="fas fa-fw fa-envelope mr-2" ></i>'.$row['email']."<br>";
                    $mob='<i class="fas fa-fw fa-phone mr-2"></i>'.$row['mobileno'];

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
                


                //For work education language
                $sql="select work from user_information1 where home_id='".$_SESSION['homeid']."' and user_id='".$_SESSION['userid']."'";
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

                $sql="select education from user_information1 where home_id='".$_SESSION['homeid']."' and user_id='".$_SESSION['userid']."'";
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

                $sql="select language from user_information1 where home_id='".$_SESSION['homeid']."' and user_id='".$_SESSION['userid']."'";
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

            

            
             echo "<script>
                        $(document).ready(function(){
                            $('#file').change(function () {
                            var reader = new FileReader();
                            reader.onload = function (e) {

                            $('#user_img').attr('src', e.target.result);

                            }
                            reader.readAsDataURL($(this)[0].files[0]);
                            $('#uploadimg').show();
                            });


                        });
                    </script>";
                if(isset($_POST['update']))
                {
                    $homeid=$_SESSION['homeid'];
                    $userid=$_SESSION['userid'];
                    $name = $_FILES['filetoupload']['name'];
                    $target_dir="../../image/$homeid$userid";
                    $target="image/$homeid$userid".$name;
                    $target_file = $target_dir.basename($_FILES["filetoupload"]["name"]);
                    $imagefileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                    $extension_arr=array('jpg','jpeg','png','gif');
                    
                    if(in_array($imagefileType,$extension_arr))
                        {

                            $sql= "update user_information set image ='".$target."' where home_id='$homeid' and user_id='$userid'";
                            mysqli_query($conn,$sql);
                            
                           
                            move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_dir.$name);
                        }

                }



                echo "<script>
                        $(document).ready(function(){
                            $('#workinputfield').hide();
                            $('#educationinputfield').hide();
                            $('#languageinputfield').hide();
                            $('#addwork').on('click',function(){        
                            $('#workinputfield').show(2000);
                            });
                            $('#addeducation').on('click',function(){        
                            $('#educationinputfield').show(2000);
                            }); 
                            $('#addlanguage').on('click',function(){        
                            $('#languageinputfield').show(2000);
                            }); 
                        });
                        </script>";

               if (isset($_POST['addworkbtn'])) {
                   $work=$_POST['addworktxt'];
                   $homeid=$_SESSION['homeid'];
                   $userid=$_SESSION['userid'];
                   
                   $sql="insert into user_information1(home_id,user_id,work) values ('$homeid','$userid','$work')";
                   mysqli_query($conn,$sql);
                   
                    $str="<p><i class='fas fa-arrow-circle-right' style='font-size:20px;color:blue'></i> $work</p>";

                        echo "<script type='text/javascript'>";
                        echo "$(\"#work\").append(\"$str\");";
                        echo "</script>";
                        echo "".$work;
               }
               if (isset($_POST['addeducationbtn'])) {
                   $education=$_POST['addeducationtxt'];
                   $homeid=$_SESSION['homeid'];
                   $userid=$_SESSION['userid'];
                   
                   $sql="insert into user_information1(home_id,user_id,education) values ('$homeid','$userid','$education')";
                   mysqli_query($conn,$sql);
                   
                    $str="<p><i class='fas fa-arrow-circle-right' style='font-size:20px;color:blue'></i> $education</p>";

                        echo "<script type='text/javascript'>";
                        echo "$(\"#education\").append(\"$str\");";
                        echo "</script>";
                       
               }
               if (isset($_POST['addlanguagebtn'])) {
                   $language=$_POST['addlanguagetxt'];
                   $homeid=$_SESSION['homeid'];
                   $userid=$_SESSION['userid'];
                   
                   $sql="insert into user_information1(home_id,user_id,language) values ('$homeid','$userid','$language')";
                   mysqli_query($conn,$sql);
                   
                    $str="<p><i class='fas fa-arrow-circle-right' style='font-size:20px;color:blue'></i> $language</p>";

                        echo "<script type='text/javascript'>";
                        echo "$(\"#language\").append(\"$str\");";
                        echo "</script>";
                       
               }
               
            



    ?>





</body>
 
</html>

