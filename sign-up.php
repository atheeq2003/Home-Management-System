<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/fonts/circular-std/style.css">
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

<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
	<?php
		session_start();
	?>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" onsubmit="return formValidation();" method="POST">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registrations Form</h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="homeid" required="" placeholder="homeid" autocomplete="off"><span id="homeidspan" style="color: red"></span>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="userid" required="" placeholder="User Id" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" name="pass1" type="password" required="" placeholder="Password">
                </div>
                <div class="form-group">
                	<input class="form-control form-control-lg" id="pass2" name="pass2" type="password" required="" placeholder="Confirm"><span id="passspan" style="color: red"></span>
                   
                </div>
                <div class="form-group pt-2">
                    <input class="btn btn-block btn-primary" type="submit" value="Register My Account" name="submitbtn">
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                    </label>
                </div>
                <div class="form-group row pt-0">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                        <button class="btn btn-block btn-social btn-facebook " type="button">Facebook</button>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <button class="btn  btn-block btn-social btn-twitter" type="button">Twitter</button>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="login.php" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
    <?php
    	if(isset($_POST['submitbtn']))
    	{
        	

        	include 'db_connect.php';
			//$conn=dbconnect::db('iwt_project');

			$sql="select home_id from authentication";
			$result = mysqli_query($conn, $sql);
			$temp=1;
			if(mysqli_num_rows($result) > 0){
				while ($row=mysqli_fetch_assoc($result)) {
					if($row['home_id']==$_POST['homeid']){
						$temp=0;
					}
				}
			}
			if($temp==0)
			{
				echo "<script type='text/javascript'>
					document.getElementById('homeidspan').innerHTML='Please enter another Home id';
					</script>";
			}
			else if($_POST['pass1']!=$_POST['pass2'])
			{
				echo "<script type='text/javascript'>
					document.getElementById('passspan').innerHTML='Password is not matched';
					</script>";
			}
			else if($temp==1)
			{
                $sql="insert into user_information(home_id,user_id,email) values ('".$_POST['homeid']."','".$_POST['userid']."','".$_POST['email']."')";
                mysqli_query($conn,$sql);

				$sql="insert into authentication(home_id,user_id,password) values ('".$_POST['homeid']."','".$_POST['userid']."','".$_POST['pass1']."')";
				
				if (mysqli_query($conn,$sql)) {
  						header("location: login.php");
    					exit;
				} else {
					  	echo "Error: ";

				}

			}
            //mysqli_close($conn);

        

    	}

    ?>

</body>


 
</html>

