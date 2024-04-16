<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="icon" type="image/icon" href="img/home_icon4.png" sizes="50x50">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>
<body>
	<?php
	session_start();
	?>
	
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <div class="splash-container">
        <div class="card ">
    		<div class="card-header text-center"><a href="../index.html"></a><span class="splash-description">Please enter your information.</span></div>
    		<div class="card-body">
    			<form method="POST">
                    <span id="spanform" style="color: red;"></span>
    				<div class="form-group">
    					<input class="form-control form-control-lg" type="text" name="homeid" id="homeid" placeholder="homeid" autocomplete="off" required="">
    				</div>
					<div class="form-group">   
    					<input class="form-control form-control-lg" type="text" name="userid" id="userid"  placeholder="Userid" autocomplete="off" required="">
					</div>
	    			<div class="form-group">
    					<input class="form-control form-control-lg"type="password" name="password" id="password" placeholder="Password" required="">
    				</div>
    				<div class="form-group">
    					<input type="submit" class="btn btn-primary btn-lg btn-block" id="submitbtn" name="submitbtn" value="Sign in" >
    				</div>
    			</form>
    		</div>
    		<div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="sign-up.php" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="forgot-password.php" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>

   
  	<?php

  	if(isset($_POST['submitbtn']))
    {
        $_SESSION['homeid']=$_POST['homeid'];

        $_SESSION['userid']=$_POST['userid'];

        $_SESSION['password']=$_POST['password'];

        include 'db_connect.php';
        //$conn=dbconnect::db('iwt_project');

        $sql="select home_id,user_id,password from authentication";
        $result = mysqli_query($conn, $sql);
        $temp=1;
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
            
                if($_SESSION['homeid']==$row['home_id'] && $_SESSION['userid']==$row['user_id'] && $_SESSION['password']==$row['password'] )
                {
                    $temp=0;
                    break;
                }
            }
        
        }
       

        if($temp==1)
        {
            session_unset();
            session_destroy();
            echo "<script type='text/javascript'>
                    document.getElementById('spanform').innerHTML='Please Enter proper information';
                    </script>";
        
        }
        else{
            header("location: dashboard.php");
            exit;
        }

    }
  	?>


</body>
</html>