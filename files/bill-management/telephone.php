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
                                            <li class="breadcrumb-item"><a href="../../dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Bill Management</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Telephone</li>

                                        </ol>
                                    </nav>
                                </div>
                                <div style="float: right;padding-right: 25%;">
                                    <div >
                                        <form  method="POST">   
                                        <select name="selectyear" id="selectyear" onchange="this.form.submit()" class="btn btn-secondary" style="">
                                            <option >Select Year</option>
                                            
                                        </select>
                                        <select name="chartselection" id="chartselection" class="btn btn-secondary" style="">
                                            <option>Select Chart</option>
                                            <option value="zoomchart">Line chart</option>
                                            <option value="piechart">Pie Chart</option>
                                            <option value="barchart">Bar chart</option>
                                        </select>        
                                    </form>
                                    </div>
                                </div>
                                <br><br>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="float: left;">
                                    <div class="card" >

                                        <div style="width: 800px; height: 400px; background-color: white">
                                            <h3 class="card-header" id="year_heading"  style="text-align: center; "></h3>
                                            <div class="card-body" >
                                                <div id="c3chart_zoom"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="form_telephone.php?edit=false" class="btn btn-primary" style="float: right;"><i class="ti-plus"></i> Add New Bill</a>
                            </div>
                        </div>
                    </div>
                        

                </div>

            </div>

         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr style="font-size: large;">
                                                <th style="color: maroon;">Issue Date</th>
                                                <th style="color: maroon;">Due Date</th>
                                                <th style="color: maroon;">Rs</th>
                                                <th style="color: maroon;">status</th>
                                                <th style="color: maroon;">View</th>
                                                <th style="color: maroon;">Edit</th>
                                                <th style="color: maroon;">Delete</th>
                                                <th style="color: maroon;">Download</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: black;">
                                            <?php 
                                                 $sql="select issue_date,due_date,amount,paynment_status,soft_copy from bill_management where home_id='".$_SESSION['homeid']."' and category='telephone'";

                                                $result = mysqli_query($conn, $sql);

                                                if(mysqli_num_rows($result) > 0)
                                                {

                                                    while($row=mysqli_fetch_assoc($result))
                                                    {
                                                        $issue_date = $row['issue_date'];
                                                        $due_date = $row['due_date'];
                                                        $amount = $row['amount'];
                                                        $paynment_status = $row['paynment_status'];
                                                        

                                                        if($row['soft_copy'] != 'null')
                                                        {

                                                            $soft_copy1 = $row['soft_copy'];
                                                            //$url = 'electricity?'.$issue_date;
                                                            echo "<tr>
                                                            <td>$issue_date</td>
                                                            <td>$due_date</td>
                                                            <td>$amount</td>
                                                            <td>$paynment_status</td>
                                                            <td><a href='../../$soft_copy1' target='_blank'>View</a></td>

                                                            <td><a href='form_telephone.php?edit=true&date1=$issue_date' >Edit</a></td>
                                                    
                                                            <td><a onclick='javascript: conformationDelete($(this));return false;' href='deleteBill.php?category1=telephone&date1=$issue_date'>Delete</a></td>

                                                            <td><a href='../../$soft_copy1' download>Download</a></td>
                                                            </tr> ";


                                                            echo "<script type='text/javascript'>
                                                                function conformationDelete(anchor)
                                                                { 
                                                                    var conf= confirm('Are You sure want to Delete this Bill??');
                                                                    if(conf)
                                                                    {
                                                                        window.location=anchor.attr('href');
                                                                    }

                                                                }
                                                                 </script>";                                                            
                                                        }
                                                        else{
                                                           echo "<tr>
                                                            <td>$issue_date</td>
                                                            <td>$due_date</td>
                                                            <td>$amount</td>
                                                            <td>$paynment_status</td>
                                                            <td><a href='' onclick='onView2()'>View</a></td>
                                                            
                                                            <td><a href='form_telephone.php?edit=true&date1=$issue_date'>Edit</a></td>

                                                           <td><a onclick='javascript: conformationDelete($(this));return false;' href='deleteBill.php?category1=telephone&date1=$issue_date'>Delete</a></td>

                                                            <td><a href='' onclick='onView2()'>Download</a></td>
                                                            </tr> ";

                                                           echo "<script type='text/javascript'>
                                                                function onView2()
                                                                { 
                                                                    alert('Soft Copy not Uploaded!!');
                                                                }
                                                                 </script>"; 
                                                            
                                                            echo "<script type='text/javascript'>
                                                                function conformationDelete(anchor)
                                                                { 
                                                                    var conf= confirm('Are You sure want to Delete this Bill??');
                                                                    if(conf)
                                                                    {
                                                                        window.location=anchor.attr('href');
                                                                    }

                                                                }
                                                                 </script>";
                                                        }
                                                    } 
                                                }
                                                 ?>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
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



$sql="select issue_date from bill_management where home_id='".$_SESSION['homeid']."' and category='telephone'";
$result = mysqli_query($conn, $sql);
$year_array = array();
$prev_year = "";
if(mysqli_num_rows($result) > 0){
            
    while($row=mysqli_fetch_assoc($result))
        {
            $new_year=$row['issue_date'];
            $new_year=explode("-",$new_year);

            if(strcmp($prev_year,$new_year[0])!=0)
            {
                $prev_year=$new_year[0];
                array_push($year_array,$new_year[0]);
            }

        }
}
for($i=0;$i<count($year_array);$i++)
{
    $year=$year_array[$i];
    echo "<script type='text/javascript'>
                $(document).ready(function(){
                    var x = document.getElementById('selectyear');
                    var option = document.createElement('option');
                    option.text = $year;
                    option.value=$year;
                    x.add(option);

                });
            </script>";
}
$amount_arr=[0,0,0,0,0,0,0,0,0,0,0,0,0];
$selected_year=date("Y-m-d");
$selected_year=explode("-", $selected_year);
$selected_year=$selected_year[0];
$start_date=$selected_year."-01-01";
    $end_date=$selected_year."-12-31";
    $sql="SELECT * FROM bill_management where issue_date between '$start_date' and '$end_date' and category='telephone' ;";

    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
        {
            $month=explode("-", $row['issue_date']);

            $amount_arr[(int)$month[1]]=(int)$row['amount'];

        }
    }
    
    echo "<script type='text/javascript'>
                $(document).ready(function(){
                    document.getElementById('year_heading').innerHTML=$selected_year;
                });
            </script>";
    include 'graph.php';
if(isset($_POST['selectyear'])){
    $amount_arr=[0,0,0,0,0,0,0,0,0,0,0,0,0];
    $selected_year=$_POST['selectyear'];
    $start_date=$selected_year."-01-01";
    $end_date=$selected_year."-12-31";
    $sql="SELECT * FROM bill_management where issue_date between '$start_date' and '$end_date' and category='telephone';";

    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
        {
            $month=explode("-", $row['issue_date']);

            $amount_arr[(int)$month[1]]=(int)$row['amount'];

        }
    }
    echo "<script type='text/javascript'>
                $(document).ready(function(){
                    document.getElementById('year_heading').innerHTML=$selected_year;
                });
            </script>";
    include 'graph.php';



        
}




/*$sql="select amount from bill_management where home_id='".$_SESSION['homeid']."' and category='electricity'";

            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                $amount_arr = array();
                while($row=mysqli_fetch_assoc($result))
                {
                    array_push($amount_arr, $row['amount']);

                }
            }*/

    //echo "<script type='text/javascript'>var arrayFromPhp = '.$amount_arr.';</script>";
            //echo "<script type='text/javascript'>alert('.$amount_arr.');</script>";

            
?>


</body>
 
</html>