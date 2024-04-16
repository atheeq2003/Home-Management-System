
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
    <!-- <link rel="stylesheet" href="../../files/dashboard/dashboard.css">
    <script src="../../files/dashboard/dashboard.js"></script> -->
    <!--<script type="text/javascript" src="headerimage.js"></script>-->
    <!--<script type="text/javascript" src="editprofile.js"></script>-->


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
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
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
                                <h5 class="card-header">Basic Details</h5>
                                <div class="card-body">
                                    
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Full Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" name="name" id="name"  placeholder="First Middle Last Name" class="form-control">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Birth Date</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="Date" name="birth" required="" id="birth" data-parsley-minlength="6" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Gender</label>&nbsp;&nbsp;&nbsp;
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline1" class="custom-control-input" id="Male" checked value="Male"><span class="custom-control-label" >Male</span>

                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline1" class="custom-control-input" id="Female" value="Female"><span class="custom-control-label" >Female</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline1" class="custom-control-input" id="Others" value="Others"><span class="custom-control-label" >Others</span>
                                            </label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Profesion</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                
                                                <input  type="text" required="" name="profession" id="profession" placeholder="Enter Profesion" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Blood Group</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input  type="text" name="blood_group" required="" placeholder="Enter Blood Group" class="form-control" id="blood_group">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Email Id</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input  type="text" name="email" required="" placeholder="Enter Email Id" class="form-control" id="email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Mobile No</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input  type="text" name="mobile" required=""  keypress="return onlyNumberKey(event)" placeholder="Enter Mobile no" class="form-control" id="mobile" maxlength="10">
                                            </div>
                                        </div>

                                        <div class="form-group row" >

                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Work</label>
                                            <div class="col-12 col-sm-8 col-lg-6" id="work">
                                                
                                            </div>                          
                                        </div>
                                        <div class="form-group row" >

                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Education</label>
                                            <div class="col-12 col-sm-8 col-lg-6" id="education">
                                                
                                            </div>                          
                                        </div>
                                        <div class="form-group row" >

                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Language</label>
                                            <div class="col-12 col-sm-8 col-lg-6" id="language">
                                                
                                            </div>                          
                                        </div>
                                        <br><br>
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                
                                                <button type="submit" name="submitbtn"  id="submitbtn" class="btn btn-space btn-primary" >Save</button>
                                                <button class="btn btn-space btn-secondary" name="cancelbtn">Cancel</button>
                                               

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

                




    	       $sql="select * from user_information where home_id='".$_SESSION['homeid']."' and user_id='".$_SESSION['userid']."'";
                $result = mysqli_query($conn, $sql);
                 
                if(mysqli_num_rows($result) > 0){

                	$row=mysqli_fetch_assoc($result);
                	$name=$row['first_name']." ".$row['middle_name']." ".$row['last_name'];
                	$birth_date=$row['birth_date'];
                	$profession=$row['profession'];
                    $gender=$row['gender'];
                    $blood_group=$row['blood_group'];
                    $email=$row['email'];
                    $mobile=$row['mobileno'];
                	
                	echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('name').value='$name';
                            document.getElementById('email').value='$email';
                            document.getElementById('mobile').value='$mobile';
                            document.getElementById('birth').value='$birth_date';
                            radiobtn = document.getElementById('$gender');
							radiobtn.checked = true;
                            document.getElementById('profession').value='$profession';
                            document.getElementById('blood_group').value='$blood_group';
                            
                            });
                            


                            </script>";  
                }

                $sql="select work from user_information1 where home_id='".$_SESSION['homeid']."' and user_id='".$_SESSION['userid']."'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                	while ($row=mysqli_fetch_assoc($result)) {
                		$work=$row['work'];
                        if($work){
                		
                		$str="<p><i style='font-size:20px;'></i>$work <a href='#'style='float:right;' class='btn btn-warning'onClick='createCookies(this.id)' id='$work/work' >Remove</a></p>";

                		echo "<script type='text/javascript'>";
                		echo "$(\"#work\").append(\"$str\");";
                		echo "</script>";
                	   }
                	}

                }

                $sql="select education from user_information1 where home_id='".$_SESSION['homeid']."' and user_id='".$_SESSION['userid']."'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                	while ($row=mysqli_fetch_assoc($result)) {
                		$education=$row['education'];
                        if($education){
                		  $str="<p><i style='font-size:20px;'></i>$education <a href='editprofile.php'style='float:right;' class='btn btn-warning'onClick='createCookies(this.id)' id='$education/education'>Remove</a></p>";

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
                		  $str="<p><i style='font-size:20px;'></i>$language <a href='editprofile.php'style='float:right;' class='btn btn-warning'onClick='createCookies(this.id)' id='$language/language'>Remove</a></p>";

                		  echo "<script type='text/javascript'>";
                		  echo "$(\"#language\").append(\"$str\");";
                		  echo "</script>";
                	   }
                	}

                }
                
                if(isset($_POST['submitbtn']))
                {
                    
                	$name=$_POST['name'];
                	$name=explode(" ",$name);
                	$firstname=$name[0];
                	$middlename=$name[1];
                	$lastname=$name[2];
                	$birth_date=$_POST['birth'];
                    $gender=$_POST['radio-inline1'];
                    $profession = $_POST['profession'];
                    $blood_group = $_POST['blood_group'];
                    $email=$_POST['email'];
                    $mobile=$_POST['mobile'];


                    $sql="update user_information set first_name='$firstname',middle_name='$middlename',last_name='$lastname',birth_date='$birth_date',profession='$profession',blood_group='$blood_group',gender='$gender',email='$email',mobileno=$mobile where home_id='".$_SESSION['homeid']."' and user_id='".$_SESSION['userid']."'";
                     
                    
                    $result = mysqli_query($conn, $sql);
                 
                    if($result)
                    {
                    header("location: profile.php");
                    exit;
                    }

                }
                if(isset($_POST['cancelbtn']))
                {
                     header("location: profile.php");
                    exit;
                }
                
                echo "<script>";
                echo "function createCookies(clicked) { 
                    createCookie(\"remove\", clicked, '10'); 
                    } 

                    function createCookie(cname, cvalue, exdays) {
                        var d = new Date();
                        d.setTime(d.getTime() + (exdays*24*60*60*1000));
                        var expires = 'expires='+ d.toUTCString();
                        document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';

                        setTimeout('location.reload(true);', 500);
                    }
                    </script>";
                    
                if(isset($_COOKIE['remove']))
                {
                    $data=$_COOKIE['remove'];
                    
                    $data=explode("/", $data);
                    $homeid=$_SESSION['homeid'];
                    $userid=$_SESSION['userid'];
                    $data1=$data[0];
                    
                    if($data[1]=="work")
                    {
                        $sql="select * from user_information1 where home_id='$homeid' and user_id='$userid' and work='$data1'";
                        
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                        
                        if($row['language']=="" and $row['education']=="")
                        {
                            
                            $sql="delete  from user_information1 where home_id='$homeid' and user_id='$userid' and work='$data1'";
                           mysqli_query($conn, $sql);
                                
                        }
                        else
                        {
                            $sql="update user_information1 set work='' where home_id='$homeid' and user_id='$userid' and work='$data1'";
                            mysqli_query($conn, $sql);
                        }

                    }
                    else if($data[1]=="education")
                    {
                        $sql="select * from user_information1 where home_id='$homeid' and user_id='$userid' and education='$data1'";
                        
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                        
                        if($row['language']=="" and $row['work']=="")
                        {
                            
                            $sql="delete  from user_information1 where home_id='$homeid' and user_id='$userid' and education='$data1'";
                           mysqli_query($conn, $sql);
                                
                        }
                        else
                        {
                            
                            $sql="update user_information1 set education='' where home_id='$homeid' and user_id='$userid' and education='$data1'";
                            mysqli_query($conn, $sql);
                        }

                    }

                    else if($data[1]=="language")
                    {
                        $sql="select * from user_information1 where home_id='$homeid' and user_id='$userid' and language='$data1'";
                        
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                        
                        if($row['education']=="" and $row['work']=="")
                        {
                            
                            $sql="delete  from user_information1 where home_id='$homeid' and user_id='$userid' and language='$data1'";
                           mysqli_query($conn, $sql);
                                
                        }
                        else
                        {
                            
                            $sql="update user_information1 set language='' where home_id='$homeid' and user_id='$userid' and language='$data1'";
                            mysqli_query($conn, $sql);
                        }

                    }


                    unset($_COOKIE['remove']); 
                    setcookie('remove', null, -1, '/'); 
                    header("location: profile.php");
                    exit;
                }
                


    ?>


</body>
 
</html>

