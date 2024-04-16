
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
                                
                                <div class="card-body">
                                    
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Facebook Url</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="facebookurl" id="facebookurl"  placeholder="Enter Facebook Url" class="form-control">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Instagram Url</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="instagramurl" id="instagramurl"  placeholder="Enter Instagram Url" class="form-control">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">LinkedIn Url</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                
                                                <input  type="text" name="linkedinurl" id="linkedinurl" placeholder="Enter LinkedIn Url" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Github Url</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                
                                                <input  type="text" name="githuburl" id="githuburl" placeholder="Enter Github Url" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Youtube Url</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                
                                                <input  type="text" name="youtubeurl" id="youtubeurl" placeholder="Enter Youtube Url" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Twitter Url</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                
                                                <input  type="text" name="twitterurl" id="twitterurl" placeholder="Enter Twitter Url" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Slack Url</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                
                                                <input  type="text" name="slackurl" id="slackurl" placeholder="Enter Slack Url" class="form-control" >
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
            $homeid=$_SESSION['homeid'];
            $userid=$_SESSION['userid'];
            $sql="select * from social_sites where home_id='$homeid' and user_id='$userid'";
            $result = mysqli_query($conn,$sql);
            
            $row=mysqli_fetch_assoc($result);

            $facebookurl=$row['facebook'];
            $instagramurl=$row['instagram'];
            $linkedinurl=$row['linkedin'];
            $githuburl=$row['github'];
            $youtubeurl=$row['youtube'];
            $twitterurl=$row['twitter'];
            $slackurl=$row['slack'];
           

            echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('facebookurl').value='$facebookurl';
                            document.getElementById('instagramurl').value='$instagramurl';
                            document.getElementById('linkedinurl').value='$linkedinurl';
                            
                            document.getElementById('githuburl').value='$githuburl';
                            document.getElementById('youtubeurl').value='$youtubeurl';
                            document.getElementById('twitterurl').value='$twitterurl';
                            document.getElementById('slackurl').value='$slackurl';
                            });
                            


                            </script>";




    		if(isset($_POST['submitbtn']))
    		{
    		$facebookurl=$_POST['facebookurl'];
    		$instagramurl=$_POST['instagramurl'];
    		$linkedinurl=$_POST['linkedinurl'];
            $githuburl=$_POST['githuburl'];
            $youtubeurl=$_POST['youtubeurl'];
            $twitterurl=$_POST['twitterurl'];
            $slackurl=$_POST['slackurl'];
            $homeid=$_SESSION['homeid'];
            $userid=$_SESSION['userid'];

            $sql="select * from social_sites where home_id='$homeid' and user_id='$userid'";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0)
            {
                $sql="update social_sites set instagram='$instagramurl', youtube='$youtubeurl', linkedin='$linkedinurl', github='$githuburl',slack='$slackurl',facebook='$facebookurl',twitter='$twitterurl' where home_id='$homeid' and user_id='$userid'";
                $result=mysqli_query($conn,$sql);
            } 
            else
            {
                $sql=" insert into social_sites(home_id,user_id,instagram,youtube,linkedin,github,slack,facebook,twitter) values ('$homeid','$userid','$instagramurl','$youtubeurl','$linkedinurl','$githuburl','$slackurl','$facebookurl','$twitterurl')";
                $result=mysqli_query($conn,$sql);
                
            }

                    header("location: profile.php");
                    exit;

    		}
            if(isset($_POST['cancelbtn']))
            {
                header("location: profile.php");
                    exit;
            }


    ?>



</body>
 
</html>



