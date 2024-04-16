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
    <script src="../../files/dashboard/dashboard.js"></script>
    <script type="text/javascript" src="headerimage.js"></script>
    
    <link rel="icon" type="image/icon" href="../../img/home_icon4.png" sizes="50x50">


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
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list" >
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
                                <a class="nav-link active"  href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Bill Management</a>
                                <div id="submenu-2" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="electricity.php">Electricity</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="gas.php">Gas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="telephone.php">Telephone</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="mobilerecharge.php">Mobile Recharge</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="television.php">Television</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="water.php">Water</a>
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
                    <div class="alert alert-success" id="success-alert" style="display: none;">
                        <a href="telephone.php" class="close">x</a>
                        <strong>Success! </strong> Bill Added Successfully.
                    </div>
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Dashboard</h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Bill Management</a></li>
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Telephone</a></li>
                                            <?php
                                            if($_GET['edit']=='true')
                                            {
                                                echo "<li class='breadcrumb-item active' aria-current='page'>Edit Bill</li>";
                                            }
                                            else
                                            {
                                                echo "<li class='breadcrumb-item active' aria-current='page'>Add New Bill</li>";
                                            }
                                            ?>

                                        </ol>
                                    </nav>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    
                    <form enctype="multipart/form-data" method="post" name="telephone" id="telephone" style="width: 70%;margin-left: 15%;" >
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Telephone Bill Information</h5>
                                <div class="card-body">
                                    <form id="validationform" data-parsley-validate="" novalidate="">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Recharge Date</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="Date" required=""  class="form-control" id="recharge_date" name="recharge_date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Due Date</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="Date" required="" class="form-control" id="due_date" name="due_date"><span id="due_date_span" style="color: red;"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Amount</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input data-parsley-type="digits" type="text" required="" placeholder="Enter only digits" class="form-control" id="amount" name="amount"><span id="amountspan" style="color: red;"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Company Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select id="telephone_company" required="" name="company_name" class="btn btn-secondary" style="background-color: grey;border-color: grey;">
                                                    <option value="BSNL">BSNL</option>
                                                    <option value="Reliance">Reliance</option>
                                                    <option value="Vodafone">Vodafone</option>
                                                    <option value="Airtel">Airtel</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Duration(in month)</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input data-parsley-type="digits" type="number" required="" placeholder="Enter only digits" class="form-control" id="duration_month" name="duration_month"><span id="duration_month_span" style="color: red;"></span>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Paynment Mode</label>&nbsp;&nbsp;&nbsp;
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline2" class="custom-control-input" value="online" checked><span class="custom-control-label">Online</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline2" class="custom-control-input" value="offline"><span class="custom-control-label">Offline</span>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Paynment Status</label>&nbsp;&nbsp;&nbsp;
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline1"  class="custom-control-input" value="payed"><span class="custom-control-label" checked>Payed</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline1" class="custom-control-input" value="not payed" checked><span class="custom-control-label">Not Payed</span>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Notification Required</label>
                                                <div class="col-12 col-sm-8 col-lg-6 pt-1">
                                                    <div class="switch-button switch-button-success">
                                                        <input type="checkbox" checked="" name="switch16" id="switch16"><span>
                                                    <label for="switch16"></label></span>
                                                    </div>
                                                </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="soft_copy" class="col-12 col-sm-3 col-form-label text-sm-right" style="float: right;">Upload Soft Copy of Bill </label>&nbsp;&nbsp;&nbsp;
                                            <input type="file" class="form-control" name="filetoupload" id="filetoupload" style="width: 300px;">              
                                        </div>

                                        
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <input type="submit" class="btn btn-space btn-primary" id="btnsubmit" name="btnsubmit" value="submit" style="width: 100px;">
                                                <input class="btn btn-space btn-secondary" name="btncancel" value="Cancel" style="width: 100px;">
                                            </div>
                                        </div>
                                    </form>
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

   $url = $_GET['edit'];

        if($url == 'true')
        {
            $selected_issue_date = $_GET['date1'];
            $sql1 = "select * from bill_management where(home_id='".$_SESSION['homeid']."' and user_id='".$_SESSION['userid']."' and category='telephone' and issue_date='".$selected_issue_date."')";

            $result1 = mysqli_query($conn,$sql1);
            if(mysqli_num_rows($result1) > 0)
            {
                    $row1 = mysqli_fetch_assoc($result1);
                    
                    // home_id user_id category    issue_date  due_date    amount  duration_month  paynment_status paynment_mode   notification_required   soft_copy   company_name    reference_no    unit_burn   source/recharge_type
                    $homeid = $row1['home_id'];
                    $userid = $row1['user_id'];
                    $category=$row1['category'];
                    $issue_date=$row1['issue_date'];
                    $due_date=$row1['due_date'];
                    $amount=$row1['amount'];
                    $company_name = $row1['company_name'];
                    $duration_month=$row1['duration_month'];
                    $paynment_mode=$row1['paynment_mode'];
                    $paynment_status=$row1['paynment_status'];
                    $notification_required = $row1['notification_required'];
                    $soft_copy = $row1['soft_copy'];
                    $len = strlen($homeid.$userid);
                    $soft_copy1=str_replace('image/bill management/telephone/',"", $soft_copy);
                    $soft_copy1=substr($soft_copy1,$len);
                    //echo "<br>".$soft_copy1;
                    
                    //$unit_burn=$row1['unit_burn'];       
                    //$reference_no=$row1['reference_no'];

                    echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('recharge_date').value='$issue_date';
                            document.getElementById('due_date').value='$due_date';
                            document.getElementById('amount').value='$amount';
                            document.getElementById('duration_month').value='$duration_month';
                            document.getElementById('company_name').value='$company_name';
                            radiobtn_mode = document.getElementById('$paynment_mode');
                            radiobtn_mode.checked = true;
                            radiobtn_status = document.getElementById('$paynment_status');
                            radiobtn_status.checked = true;
                            document.getElementById('filetoupload').val='$soft_copy1';
                            });
                                
                        </script>";
                
            }
        

        }

    if(isset($_POST['btnsubmit']))
        {
           
            // home_id user_id category    issue_date  due_date    amount  duration_month  paynment_status paynment_mode   notification_required   soft_copy   company_name    reference_no    unit_burn   source/recharge_type
         if(form_validation() !== false){
            
            $homeid = $_SESSION['homeid'];
            $userid = $_SESSION['userid'];
            $category="telephone";
            $issue_date=$_POST['recharge_date'];
            $due_date=$_POST['due_date'];
            $amount=$_POST['amount'];
            $duration_month=$_POST['duration_month'];

            $paynment_status=$_POST['radio-inline1'];
            $paynment_mode=$_POST['radio-inline2'];
            //$name_arr = array('BSNL','Reliance','Vodafone','Airtel','Other');
            $company_name = $_POST['company_name'];

            $temp=0;
            if(!empty($_POST['switch16'])){
                $notification_required="ON";
            }
            else{
                $notification_required="OFF";
            }        
            
            $name = $_FILES["filetoupload"]["name"];
            //$homeid = $_SESSION['homeid'];
            //$userid = $_SESSION['userid'];

                    $target_dir="../../image/bill management/telephone/$homeid$userid";
                    $target="image/bill management/telephone/$homeid$userid".$name;

                    $target_file = $target_dir.basename($_FILES["filetoupload"]["name"]);
                    $imagefileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                    $extension_arr=array('jpg','jpeg','png','pdf','doc','docx');       
                    //$homeid=$_SESSION['homeid'];
                    //$userid=$_SESSION['userid'];
                    if(in_array($imagefileType,$extension_arr))
                    {   
                         $temp=1;
                        if($url == 'true')
                        {
                            
                            $sql = "UPDATE bill_management SET due_date='$due_date' , amount='$amount' , duration_month='$duration_month' , paynment_status='$paynment_status' , paynment_mode='$paynment_mode' , notification_required='$notification_required' , soft_copy='$target' ,  company_name=$company_name 
                                WHERE home_id='$homeid' AND user_id='$userid' AND category='telephone' AND issue_date='$issue_date'";
                                
                            // $sql1="delete from bill_management where(home_id='".$_SESSION['homeid']."' and category='".$selected_category."' and issue_date='".$selected_issue_date."')";

                            // $result1=mysqli_query($conn,$sql1);  
                            // $file_path="../../".$;
                            // unlink($file_path);
                        }
                        else
                        {
                          
                           $sql="insert into bill_management values('$homeid','$userid','$category','$issue_date','$due_date','$amount','$duration_month','$paynment_status','$paynment_mode','$notification_required','$target','$company_name','','','')";
                        }  
                           
                            move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_dir.$name);
                             
                    }

            //$extension_arr=array('jpg','jpeg','png','pdf','docx','doc');
            if($url=='true' &&  $temp==0)
            {
                $sql = "UPDATE bill_management SET due_date='$due_date' , amount='$amount' , duration_month='$duration_month' , paynment_status='$paynment_status' , paynment_mode='$paynment_mode' , notification_required='$notification_required' , soft_copy='$target' ,  company_name=$company_name 
                                WHERE home_id='$homeid' AND user_id='$userid' AND category='telephone' AND issue_date='$issue_date'";
            }
            if($url=='false' && $temp==0)
            {
                 $sql="insert into bill_management values('$homeid','$userid','$category','$issue_date','$due_date','$amount','$duration_month','$paynment_status','$paynment_mode','$notification_required','','$company_name','','','')";
            }   
              
            
            
            $result=mysqli_query($conn,$sql);
            if(!$conn)
            {
                die("Connection failed".mysqli_connect_error());
            }
            else{
                echo "<script type='text/javascript'>
                    $(document).ready(function() {
                            $('#success-alert').show();
                            $('#success-alert').fadeTo(3000, 500).slideUp(500, function() {
                              $('#success-alert').slideUp(500);
                            document.location.href='telephone.php';
                          });
                        });
                    </script>";

            }
            
        }

        else{
            echo "<script type='text/javascript'>
                    $(document).ready(function(){

                        $(#btnsubmit).click(function(e){
                            e.preventDefault();
                        });
                    });
                </script>";
           
        }
    }

    function form_validation(){
            $input_issue_date = $_POST['recharge_date'];
            $input_due_date = $_POST['due_date'];
            $input_amount = $_POST['amount'];
            $input_duration_month =  $_POST['duration_month'];

            //$input_unit_burn = $_POST['unit_burn'];
            //$input_reference_no = $_POST['reference_no'];
            
            
            
            //$format_amount= "[/^-?\d*(\.\d+)?$/]";
            //$format_unit_burn = "[/^-?\d*(\.\d+)?$/]";
            //$format_reference_no = '/^[a-zA-Z0-9]+$/';
            
            if($input_issue_date > $input_due_date)
            {
                echo "<script type='text/javascript'>
                document.getElementById('due_date_span').innerHTML='Please select correct Due Date'; 
                document.getElementById('amountspan').innerHTML='';
                document.getElementById('duration_month_span').innerHTML='';
                input_due_date.focus();
                </script>";
                return false;               
            }
            else if(!(is_numeric($input_amount)))
            {
                echo "<script type='text/javascript'>
                document.getElementById('amountspan').innerHTML='only Digits are Allowed';
                document.getElementById('due_date_span').innerHTML='';
                document.getElementById('duration_month_span').innerHTML='';
                input_amount.focus();
                </script>";
                return false;
            }
            else if($input_duration_month<1 || $input_duration_month>12)
            {
                echo "<script type='text/javascript'>
                document.getElementById('duration_month_span').innerHTML='Please select Month Between 1 to 12';
                document.getElementById('amountspan').innerHTML='';
                document.getElementById('due_date_span').innerHTML='';
                input_duration_month.focus();
                </script>";
                return false;
            }
            
        }
    ?>

</body>
 
</html>