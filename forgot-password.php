<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
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
    <!-- ============================================================== -->
    <!-- forgot password  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card">
            <div class="card-header text-center"><span class="splash-description">Please enter your information.</span></div>
            <div class="card-body">
                <form method="POST">
                    <p>Don't worry, we'll send you an email to reset your password.</p>
                     <!--<div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="homeid" required="" placeholder="homeid" autocomplete="off">
                    </div>-->
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="Your Email" autocomplete="off"><span id="emailspan" style="color: red;"></span>
                    </div>
                    <div class="form-group pt-1">
                    	<input class="btn btn-block btn-primary btn-xl" type="submit" name="submitbtn" value="Reset Password">  
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <span>Don't have an account? <a href="sign-up.php">Sign Up</a></span>
            </div>
        </div>
    </div>

    <?php
    	if(isset($_POST['submitbtn']))
    	{
    		include 'db_connect.php';
			
            $email=$_POST['email'];
			$sql="select * from user_information where email='$email'";
			$result = mysqli_query($conn, $sql);
			$temp=1;

			if(mysqli_num_rows($result)>0){
                    $row=mysqli_fetch_array($result);
					$user_home_id=$row['home_id'];
                    $user_user_id=$row['user_id'];
                        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                        $pass = array(); //remember to declare $pass as an array
                        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                        for ($i = 0; $i < 8; $i++) {
                            $n = rand(0, $alphaLength);
                            $pass[] = $alphabet[$n];
                        }
                        $new_password=implode($pass);
                    
                        $to_email=$row['email'];
                        $subject="New Password";
                        $body='New Password= '.$new_password;
                        $body=$body."\nHome id= ".$user_home_id."\nUser id = ".$user_user_id;
                        $headers="From :sender\'s email";
                        if(mail($to_email,$subject,$body))
                        {
                            $sql="update authentication set password='$new_password' where home_id='$user_home_id' and user_id='$user_user_id';";
                        $result = mysqli_query($conn, $sql);
                        header("location: login.php");
                        exit;
                        }
                        else
                        {
                            echo "Email sending fail";
                        }
                        
						
				}
				
			else
				{
					echo "<script type='text/javascript'>
					document.getElementById('emailspan').innerHTML='Please Enter Proper id';
					</script>";
				}
            

    	}
		?>
    <!-- ============================================================== -->
    <!-- end forgot password  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

 
</html>
