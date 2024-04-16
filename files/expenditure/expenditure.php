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
     <link rel="stylesheet" type="text/css" href="expenditure1.css"> 
     <link rel="icon" type="image/icon" href="../../img/home_icon4.png" >

     
    

   



</head>

<body style="color: black;">
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
                                <a class="nav-link "  href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Bill Management</a>
                                <div id="submenu-2" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                         <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/electricity.html">Electricity</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/gas.html">Gas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/telephone.html">Telephone</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/mobilerecharge.html">Mobile Recharge</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/television.html">Television</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../bill-management/water.html">Water</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>DG Locker</a>
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
                                <a class="nav-link active" href="#" ><i class="fab fa-fw fa-wpforms"></i>Expenditure</a>
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
                    <form  method="POST">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Dashboard</h2>
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="../../dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active"><a href="#" class="breadcrumb-link">Expenditure</a></li>
                                           

                                        </ol>

                                    </nav>
                                    <select name="selectyear" id="selectyear" class="btn btn-primary" onchange="this.form.submit()" style="float: right; margin-right: 10%; margin-top: -2%;">
                                        <!-- <option >Select Year</option> -->
                                        <?php 
                                            $sql="select year from expenditure where home_id='".$_SESSION['homeid']."'";
                                                $result = mysqli_query($conn, $sql);
                                                if(mysqli_num_rows($result) > 0){
                                                            
                                                    while($row=mysqli_fetch_assoc($result))
                                                        {
                                                            $data=$row['year'];
                                                            echo "<option value='$data'>$data</option>"; 
                                                        }
                                                }
                                        ?>
                                    </select>
                                </div>
                            </div>

                        </div>

                    </div>
                       
                        
                        
                    <div class="row" >
                        <div style="width: 30%;">
                            <div class="card" >
                                <h4 class="card-header" >Total Income</h4>

                                <div class="card-body" >
                                    
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1" id="total_income"></h1>
                                    </div>
                                    <span id="total_income_per">
                                    <!-- <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        <span class="icon-circle-small icon-box-xs text-success bg-success-light" id="total_income_per_arrow"></span><span class="ml-1" id="total_income_per"></span>
                                    </div> -->
                                    </span>

                                </div>
                                
                                <div class="card-footer text-center bg-white">
                                     
                                     <a href="#" class="card-link" onclick="this.form.submit();" id="summary_table" name="summary_table">View Details</a>
                                   
                                    <!-- <input type="submit" class="card-link" name="summary_btn" value="View Details" style="width: 100%; background-color: transparent; outline: none; border:none;"> -->
                                </div>
                            </div>
                        </div>
                        <div style="width: 30%;margin-left: 5%;">
                            <div class="card">
                                <h4 class="card-header">Total Expences</h4>
                                <div class="card-body">
                                    
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1" id="total_expense"></h1>
                                    </div>
                                    <span id="total_expense_per">
                                    <!-- <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        <span class="icon-circle-small icon-box-xs text-success bg-success-light" id="total_expense_per_arrow"></span><span class="ml-1" id="total_expense_per"></span>
                                    </div> -->
                                    </span>
                                </div>
                                
                                <div class="card-footer text-center bg-white">
                                    <a href="#" class="card-link" onclick="this.form.submit();" id="summary_table1" name="summary_table1">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div style="width: 30%;margin-left: 5%;">
                            <div class="card">
                                <h4 class="card-header">Net Profit Margin</h4>
                                <div class="card-body">

                                    <div class="metric-value d-inline-block">

                                        <h1 class="mb-1" id="net_profit"></h1>
                                    </div>
                                    <span id="net_profit_per">
                                    <!-- <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        <span class="icon-circle-small icon-box-xs text-success bg-success-light" id="net_profit_per_arrow"></span><span class="ml-1" id="net_profit_per"></span>
                                    </div> -->
                                    </span>
                                </div>
                                
                                <div class="card-footer text-center bg-white">
                                    <a href="#" class="card-link" onclick="this.form.submit();" id="summary_table2" name="summary_table2">View Details</a>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>

                    <div>
                        <div style="width: 92%; margin-left: 4%;float: left">
                            <div class="card" >
                                <div class="card-header" style="font-size: 20px;font-weight: bold;background:linear-gradient(to right , #73abe8 0%,  #d9e8d4 100%)" >HOME EXPENSES    <select name="chartselection_home" id="chartselection_home" class="btn btn-secondary" style="margin-left:50%;font-size: 15px;">
                                                <option >Select</option >
                                                <option value="linechart">Line chart</option>
                
                                                <option value="barchart">Bar chart</option>
                                            </select>    <input type="submit" name="home_btn" id="home_btn" value="Update" style="margin-left:5%" class="btn btn-space btn-primary"></div>

                                <div class="card-body">
                                    <canvas id="home_chart" >
                                    </canvas>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div style="width: 56%; margin-left: -1%;float: left">
                            <div class="card">
                                <div class="card-header" style="font-size: 20px;font-weight: bold;background:linear-gradient(to right , #73abe8 0%,   #bad6da 100%)">INCOME <select name="chartselection_income" id="chartselection_income" style="margin-left:30%;font-size: 15px;" class="btn btn-secondary">
                                                <option>Select</option>
                                                <option value="linechart">Line chart</option>
                
                                                <option value="barchart">Bar chart</option>
                                            </select>    <input type="submit" name="income_btn" id="income_btn" value="Update" style="margin-left:5%" class="btn btn-space btn-primary"></div>

                                <div class="card-body">
                                    <canvas id="income_chart" >
                                    </canvas>
                                   
                                </div>
                            </div>
                        </div>
                        <div style="width: 44%; float: right">
                            <div class="card">
                                <div class="card-header" style="font-size: 20px;font-weight: bold;background:linear-gradient(to right ,#bad6da  0%,   #d9e8d4 100%)">TRANSPORTATION <select name="chartselection_trans" id="chartselection_trans" style="margin-left:4%;font-size: 15px; width: 25%;" class="btn btn-secondary">
                                                <option>Select</option>
                                                <option value="linechart">Line chart</option>
                
                                                <option value="barchart">Bar chart</option>
                                            </select>    <input type="submit" name="trans_btn" id="trans_btn" value="Update" style="margin-left:2%" class="btn btn-space btn-primary"></div>

                                <div class="card-body">
                                    <canvas id="trans_chart" >
                                    </canvas>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div style="width: 92%; margin-left: 4%;float: left">
                            <div class="card">
                                <div class="card-header" style="font-size: 20px;font-weight: bold;background:linear-gradient(to right , #73abe8 0%,  #d9e8d4 100%)">DAILY LIVING <select name="chartselection_daily" id="chartselection_daily" style="margin-left:55%;font-size: 15px;" class="btn btn-secondary">
                                                <option>Select</option>
                                                <option value="linechart">Line chart</option>
                
                                                <option value="barchart">Bar chart</option>
                                            </select>    <input type="submit" name="daily_btn" id="daily_btn" value="Update" style="margin-left:5%" class="btn btn-space btn-primary"></div>

                                <div class="card-body">
                                    <canvas id="daily_chart" >
                                    </canvas>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div style="width: 56%; margin-left: -1%;float: left">
                            <div class="card">
                                <div class="card-header" style="font-size: 20px;font-weight: bold;background:linear-gradient(to right , #73abe8 0%,   #bad6da 100%)">ENTERTAINMENT <select name="chartselection_enter" id="chartselection_enter" style="margin-left:20%;font-size: 15px; " class="btn btn-secondary">
                                                <option>Select</option>
                                                <option value="linechart">Line chart</option>
                
                                                <option value="barchart">Bar chart</option>
                                            </select>    <input type="submit" name="entertinment_btn" id="entertinment_btn" value="Update" style="margin-left:5%" class="btn btn-space btn-primary"></div>

                                <div class="card-body">
                                    <canvas id="entertainment_chart" >
                                    </canvas>
                                   
                                </div>
                            </div>
                        </div>
                        <div style="width: 44%; float: right">
                            <div class="card">
                                <div class="card-header" style="font-size: 20px;font-weight: bold;background:linear-gradient(to right ,#bad6da  0%,   #d9e8d4 100%)">HEALTH CARE<select name="chartselection_health" id="chartselection_health" style="margin-left:10%;font-size: 15px;" class="btn btn-secondary">
                                                <option>Select</option>
                                                <option value="linechart">Line chart</option>
                
                                                <option value="barchart">Bar chart</option>
                                            </select>    <input type="submit" name="health_btn" id="health_btn" value="Update" style="margin-left:5%" class="btn btn-space btn-primary"></div>

                                <div class="card-body">
                                    <canvas id="health_chart" >
                                    </canvas>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div style="width: 92%; margin-left: 4%;float: left">
                            <div class="card">
                                <div class="card-header" style="font-size: 20px;font-weight: bold;background:linear-gradient(to right , #73abe8 0%,  #d9e8d4 100%)">CHILD EDUCATION <select name="chartselection_child" id="chartselection_child" style="margin-left:50%;font-size: 15px;" class="btn btn-secondary">
                                                <option>Select</option>
                                                <option value="linechart">Line chart</option>
                
                                                <option value="barchart">Bar chart</option>
                                            </select>    <input type="submit" name="child_btn" id="child_btn" value="Update" style="margin-left:5%" class="btn btn-space btn-primary"></div>

                                <div class="card-body">
                                    <canvas id="child_chart" >
                                    </canvas>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        
                        <div style="width: 51%; float: left;margin-left: -1%;">
                            <div class="card">
                                <div class="card-header" style="font-size: 20px;font-weight: bold;background:linear-gradient(to right , #73abe8 0%,   #bad6da 100%)">SAVING<select name="chartselection_saving" id="chartselection_saving" style="margin-left:30%;font-size: 15px;" class="btn btn-secondary">
                                                <option>Select</option>
                                                <option value="linechart">Line chart</option>
                
                                                <option value="barchart">Bar chart</option>
                                            </select>    <input type="submit" name="saving_btn" id="saving_btn" value="Update" style="margin-left:5%" class="btn btn-space btn-primary"></div>

                                <div class="card-body">
                                    <canvas id="saving_chart" >
                                    </canvas>
                                   
                                </div>
                            </div>
                        </div>
                        <div style="width: 49%; float: right;">
                            <div class="card">
                                <div class="card-header" style="font-size: 20px;font-weight: bold;background:linear-gradient(to right ,#bad6da  0%,   #d9e8d4 100%)" >MISCELLANEOUS <select name="chartselection_misc" id="chartselection_misc" style="margin-left:10%;font-size: 15px;" class="btn btn-secondary">
                                                <option>Select</option>
                                                <option value="linechart">Line chart</option>
                
                                                <option value="barchart">Bar chart</option>
                                            </select>    <input type="submit" name="misc_btn" id="misc_btn" value="Update" style="margin-left:5%" class="btn btn-space btn-primary"></div>

                                <div class="card-body">
                                    <canvas id="misc_chart" >
                                    </canvas>
                                   
                                </div>
                            </div>
                        </div>
                    </div>




                    </form>
                    <!-- <div>
                        <br><br><br>
                        <form method="POST">
                            <input type="text" name="abc">
                            <input type="submit" name="submitbtn" value="click here">
                        </form> 

                    </div> -->
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
    <script src="graph.js"></script>

    <!-- <script src="../../assets/vendor/charts/c3charts/C3chartjs.js"></script> -->
    <script src="../../assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
    <!-- <script src="../../assets/vendor/charts/charts-bundle/chartjs.js"></script> -->
        
    
    



    
    <?php
    include '../header.php';
    $selected_year=date("Y-m-d");
    
    $selected_year=explode('-', $selected_year);

    if($selected_year[1]<4)
    {
        $selected_year=$selected_year[0];
   
    $selected_year=((int)$selected_year+1)."-".$selected_year;
    }
    else
    {
    $selected_year=$selected_year[0];
   
    $selected_year=$selected_year."-".((int)$selected_year+1);
    }
    
    $homeid=$_SESSION['homeid'];
    $sql="select * from  expenditure where home_id='$homeid' and year='$selected_year'";
    $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) == 0 ){
            $sql="INSERT INTO expenditure(income_b,income_a, home_expenses_b, home_expenses_a, child_education_b, child_education_a, saving_b, saving_a, daily_living_b, daily_living_a, entertainment_b, entertainment_a, transportation_b, transportation_a, misce_expenses_b, misce_expenses_a, healthcare_b, healthcare_a, budget_b, budget_a, home_id,year) VALUES ('0#0#0#0#0#0','0#0#0#0#0#0','0#0#0#0#0#0#0#0#0#0','0#0#0#0#0#0#0#0#0#0','0#0#0#0#0#0#0','0#0#0#0#0#0#0','0#0#0#0#0#0','0#0#0#0#0#0','0#0#0#0#0#0#0#0#0','0#0#0#0#0#0#0#0#0','0#0#0#0#0#0#0','0#0#0#0#0#0#0','0#0#0#0','0#0#0#0','0#0#0#0#0#0','0#0#0#0#0#0','0#0','0#0','0#0','0#0','$homeid','$selected_year')";
            $result=mysqli_query($conn,$sql);
           
        }
    
    echo "<script>
            $(document).ready(function(){
                document.getElementById('selectyear').value='$selected_year';
                document.getElementById('summary_table').href = 'update_data.php?id=summary_table&selectedyear=$selected_year';
                document.getElementById('summary_table1').href = 'update_data.php?id=summary_table&selectedyear=$selected_year';
                document.getElementById('summary_table2').href = 'update_data.php?id=summary_table&selectedyear=$selected_year';

                });
        </script>";

    include 'default_main.php';

    




   if(isset($_POST['selectyear'])){
        //echo "hello: ".isset($_POST['selectyear']);
        $selected_year=$_POST['selectyear'];
        
        echo "<script>
            $(document).ready(function(){
                document.getElementById('selectyear').value='$selected_year';
                document.getElementById('summary_table').href = 'update_data.php?id=summary_table&selectedyear=$selected_year';
                document.getElementById('summary_table1').href = 'update_data.php?id=summary_table&selectedyear=$selected_year';
                document.getElementById('summary_table2').href = 'update_data.php?id=summary_table&selectedyear=$selected_year';
                });
        </script>";
        $sql="select budget_a,budget_b from expenditure where home_id='".$_SESSION['homeid']."' and year='$selected_year'";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) > 0){
                    
            while($row=mysqli_fetch_array($result))
                {
                    $budget_a=$row['budget_a'];
                    $budget_a=explode("#", $budget_a);
                    $total_expense=$budget_a[1];
                    $total_income=$budget_a[0];
                    $budget_b=$row['budget_b'];
                    $budget_b=explode("#", $budget_b);
                    $net=$budget_b[0]-$budget_b[1];
                    $net_profit=$budget_a[0]-$budget_a[1];
                    //$net_profit=($total_income-$total_expense)-$net;
                    if($budget_b[0]!=0)
                    {
                        $total_income_per=(int)(((int)$budget_a[0]*100)/$budget_b[0]);
                    }
                    else
                    {
                        $total_income_per=0;
                    }
                    
                    if($total_income_per<0)
                    {
                        $total_income_per=$total_income_per+((-2)*$total_income_per)-100;
                    }
                    if($budget_b[1]!=0)
                    {
                    $total_expense_per=(int)(((int)$budget_a[1]*100)/$budget_b[1]);
                    }
                    else{
                        $total_expense_per=0;
                    }
                    if($total_expense_per<0)
                    {
                        $total_expense_per=$total_expense_per+((-2)*$total_expense_per)-100;
                    }
                    if($net!=0)
                    {

                        $net_profit_per=(int)(($net_profit*100)/(int)($net));
                        $temp=1;
                        if($net<0)
                        {
                            $net_profit_per=$net_profit_per*(-2)+100;
                            $temp=0;
                        }
                        if($net_profit<0)
                        {
                            if($temp)
                            {
                                $net_profit_per=$net_profit_per*(-2)+100;   
                            }
                            else
                            {
                                $net_profit_per=$net_profit_per*(-1);
                            }
                        }
                    }
                    else
                    {
                        $net_profit_per=0;
                    }
                    if($net_profit_per<0)
                    {
                        $net_profit_per=$net_profit_per+((-2)*$net_profit_per)-100;
                    }
                        
                    ///////////////////////////
                
                    if($total_income_per<100)
                    {
                        $total_income_per_var=100-$total_income_per;
                    }
                    else
                    {
                        $total_income_per_var=$total_income_per-100;
                    }

                    if($total_expense_per<100)
                    {
                        $total_expense_per_var=100-$total_expense_per;
                    }
                    else
                    {
                        $total_expense_per_var=$total_expense_per-100;
                    }
                    if($net_profit_per<100)
                    {
                        $net_profit_per_var=100-$net_profit_per;
                    }
                    else
                    {
                        $net_profit_per_var=$net_profit_per-100;
                    }

                    ////////////////////////////



                    echo "<script type='text/javascript'>
                                $(document).ready(function(){
                                document.getElementById('total_income').innerHTML='$total_income';
                                document.getElementById('total_expense').innerHTML='$total_expense';
                                document.getElementById('net_profit').innerHTML='$net_profit';

                                if($total_income_per>=100)
                                {
                                    document.getElementById('total_income_per').innerHTML=\"<div class='metric-label d-inline-block float-right text-success font-weight-bold'><span class='icon-circle-small icon-box-xs text-success bg-success-light'><i class='fa fa-fw fa-arrow-up'></i></span><span class='ml-1'>$total_income_per_var%</span></div>\";

                                }
                                else
                                {
                                        document.getElementById('total_income_per').innerHTML=\"<div class='metric-label d-inline-block float-right text-secondary font-weight-bold'><span class='icon-circle-small icon-box-xs text-secondary bg-secondary-light'><i class='fa fa-fw fa-arrow-down'></i></span><span class='ml-1'>$total_income_per_var%</span></div>\";
                                }

                                if($total_expense_per<100)
                                {
                                    document.getElementById('total_expense_per').innerHTML=\"<div class='metric-label d-inline-block float-right text-success font-weight-bold'><span class='icon-circle-small icon-box-xs text-success bg-success-light'><i class='fa fa-fw fa-arrow-up'></i></span><span class='ml-1'>$total_expense_per_var%</span></div>\";
                                }
                                else
                                {
                             
                                    document.getElementById('total_expense_per').innerHTML=\"<div class='metric-label d-inline-block float-right text-secondary font-weight-bold'><span class='icon-circle-small icon-box-xs text-secondary bg-secondary-light'><i class='fa fa-fw fa-arrow-down'></i></span><span class='ml-1'>$total_expense_per_var%</span></div>\";
                                }
                                if($net_profit>0)
                                {
                                    document.getElementById('net_profit_per').innerHTML=\"<div class='metric-label d-inline-block float-right text-success font-weight-bold'><span class='icon-circle-small icon-box-xs text-success bg-success-light'><i class='fa fa-fw fa-arrow-up'></i></span><span class='ml-1'>$net_profit_per_var</span></div>\";
                                    
                                }
                                else
                                {
                                    
                                    document.getElementById('net_profit_per').innerHTML=\"<div class='metric-label d-inline-block float-right text-secondary font-weight-bold'><span class='icon-circle-small icon-box-xs text-secondary bg-secondary-light'><i class='fa fa-fw fa-arrow-down'></i></span><span class='ml-1'>$net_profit_per_var%</span></div>\";
                                }
                                });
                                </script>";


                }
        }
        
        include 'default_main.php';


   }
  


   if(isset($_POST['home_btn']))
   {
        //echo "<br>Selected Year=".$selected_year;
        header("location: update_data.php?id=homeexp_table&selectedyear=$selected_year");
        exit;
   }
   else if(isset($_POST['income_btn']))
   {
        header("location: update_data.php?id=income_table&selectedyear=$selected_year");
        exit;
   }
   else if(isset($_POST['trans_btn']))
   {
        header("location: update_data.php?id=transportation_table&selectedyear=$selected_year");
        exit;
   }
   else if(isset($_POST['daily_btn']))
   {
        header("location: update_data.php?id=daily_table&selectedyear=$selected_year");
        exit;
   }
   else if(isset($_POST['entertinment_btn']))
   {
        header("location: update_data.php?id=entertainment_table&selectedyear=$selected_year");
        exit;
   }
   else if(isset($_POST['health_btn']))
   {
        header("location: update_data.php?id=health_table&selectedyear=$selected_year");
        exit;
   }
   else if(isset($_POST['child_btn']))
   {
        header("location: update_data.php?id=child_table&selectedyear=$selected_year");
        exit;
   }
   else if(isset($_POST['misc_btn']))
   {
        header("location: update_data.php?id=misc_table&selectedyear=$selected_year");
        exit;
   }
   else if(isset($_POST['saving_btn']))
   {
        header("location: update_data.php?id=saving_table&selectedyear=$selected_year");
        exit;
   } 
   else if (isset($_POST['summary_btn'])) {
        echo "Hello";
        header("location: update_data.php?id=summary_table&selectedyear=$selected_year");
        exit;
   }

   
   



    ?>

</body>
 
</html>




