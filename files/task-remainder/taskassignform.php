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
    

    <link rel="icon" type="image/icon" href="../../img/home_icon4.png" sizes="50x50">
    


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
        <!-- navbar -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
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
                                <a class="nav-link active" href="../../dashboard.php"><i class="fa fa-fw fa-user-circle"></i>Dashboard </a>
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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Task Remainder</a></li>
                                        
                                            <li class="breadcrumb-item active" aria-current="page">Assign Task</li>

                                        </ol>
                                    </nav>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>

                <form method="post" enctype="multipart/form-data" name="task_assign">
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Task Assign form</h5>
                                <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">To (Name)</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <!-- <input type="text" required=""  placeholder="Enter Name of user" class="form-control" name="to_name" id="to_name"> -->
                                                <select name="to_name" id="to_name" style="width: 100%;margin-top: 2mm;">
                                                     <?php
                                                     $homeid=$_SESSION['homeid'];
                                                    $sql="select first_name from user_information where home_id='$homeid'";
                                                    $result=mysqli_query($conn,$sql);
                                                    if(mysqli_num_rows($result) > 0){
                                                    
                                                    while($row=mysqli_fetch_array($result))
                                                        {
                                                        $data=$row['first_name'];
                                                        echo "<option value=$data>$data</option>";

                                                        }
                                                    }
                                                    ?>  
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">To (Email)</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select name="to_email" id="to_email" style="width: 100%;margin-top: 2mm;">
                                                     <?php
                                                     $homeid=$_SESSION['homeid'];
                                                    $sql="select email from user_information where home_id='$homeid'";
                                                    $result=mysqli_query($conn,$sql);
                                                    if(mysqli_num_rows($result) > 0){
                                                    
                                                    while($row=mysqli_fetch_array($result))
                                                        {
                                                        $data=$row['email'];
                                                        echo "<option value=$data>$data</option>";

                                                        }
                                                    }
                                                    ?>  
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Due Date</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="Date"    class="form-control" name="due_date" id="due_date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Title of Task</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required=""  placeholder="Enter Title of Task" class="form-control" name="task_title" id="task_title">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Task</label>
                                            <div class="col-12 col-sm-8 col-lg-6">    
                                                <textarea name="task_data" required="" placeholder="Enter Task" rows="5" class="form-control" id="task_data" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="soft_copy" class="col-12 col-sm-3 col-form-label text-sm-right">Upload File </label>&nbsp;&nbsp;&nbsp;
                                            <label class="custom-control custom-radio custom-control-inline">
                                            <input type="file" id="soft_copy" class="form-control" name="filetoupload" id="filetoupload">
                                            </label>
                                        </div>
                                        
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <input type="submit" class="btn btn-space btn-primary" value="Assign" name="btnsubmit" id="btnsubmit" style="width: 100px;">
                                                <input class="btn btn-space btn-secondary" value="Cancel" name="btncancel" id="btncancel" style="width: 100px;">
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
    
    //include '../../db_connect.php';
    if($_GET['edit']=="true")
    {
        $homeid=$_SESSION['homeid'];
        $id=$_GET['taskid'];

        $sql="select * from task_remainder where task_id='$id'";


        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0)
            {
                    $row1 = mysqli_fetch_array($result);
                    
                    $userid = $row1['user_id'];
                    $to_name=$row1['to_name'];
                    $to_email=$row1['to_email'];

                    $due_date=$row1['due_date'];
                    $task_title=$row1['title'];
                    $task_data=$row1['task'];
                    
                    echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('to_name').value='$to_name';
                            document.getElementById('to_email').value='$to_email';
                            document.getElementById('due_date').value='$due_date';
                            document.getElementById('task_title').value='$task_title';
                            document.getElementById('task_data').value='$task_data';         
                            });
                        </script>";






            }
    }


    if(isset($_POST['btnsubmit']))
    {

        $sql = "select * from user_information where home_id='".$_SESSION['homeid']."' AND first_name='".$_POST['to_name']."' AND email='".$_POST['to_email']."' ";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0)
        {
            $isfile=0;
            $homeid= $_SESSION['homeid'];
            $userid= $_SESSION['userid'];
            $to_name = $_POST['to_name'];
            $to_email = $_POST['to_email'];
            $task_title = $_POST['task_title'];
            $task_data = htmlspecialchars($_POST['task_data']);
            $task_due_Date=$_POST['due_date'];

            $name = $_FILES["filetoupload"]["name"];

            $target_dir="../../image/taskremainder/$homeid$userid";
            $target="image/taskremainder/$homeid$userid".$name;

            $target_file = $target_dir.basename($_FILES["filetoupload"]["name"]);
            $imagefileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $extension_arr=array('jpg','jpeg','png','gif','pdf','doc','docx','ppt');       
                    
                if(in_array($imagefileType,$extension_arr))
                {   
                    $isfile=1;
                    //home_id user_id to_name to_email    title   task
                    if($_GET['edit']=="true")
                    {
                        $id=$_GET['taskid'];
                        $sql="update task_remainder set to_name='$to_name',to_email='$to_email',title='$task_title',task='$task_data',file='$target',due_date='$task_due_Date' where task_id='$id'";
                    }
                    else
                    {
                    $sql="insert into task_remainder(home_id,user_id,to_name,to_email,title,task,file,due_date) values('$homeid','$userid','$to_name','$to_email','$task_title','$task_data','$target','$task_due_Date')";
                     }       
                    move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_dir.$name);
                             
                }

                if($isfile == 0)
                {
                    if($_GET['edit']=="true")
                    {
                        $id=$_GET['taskid'];
                        $sql="update task_remainder set to_name='$to_name',to_email='$to_email',title='$task_title',task='$task_data',file='',due_date='$task_due_Date' where task_id='$id'";
                    }
                    else
                    {
                    $sql="insert into task_remainder(home_id,user_id,to_name,to_email,title,task,file,due_date) values('$homeid','$userid','$to_name','$to_email','$task_title','$task_data','','$task_due_Date')";
                    }
                }

                mysqli_query($conn, $sql);
                echo "<script type='text/javascript'>
                    alert('Task Added Successfully');
                    document.location.href='taskremainder.php';

                    </script>";
            }
            else
            {
                echo "<script type='text/javascript'>
                    alert('Invalid User name or email!!');
                    </script>";
            }
        
    }

    ?>

</body>
 
</html>