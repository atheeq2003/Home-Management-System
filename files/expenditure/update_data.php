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
     <link rel="stylesheet" type="text/css" href="expenditure.css"> 
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
                    <form method="POST">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Dashboard</h2>
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="../../dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active"><a href="expenditure.php" class="breadcrumb-link">Expenditure</a></li>
                                           

                                        </ol>
                                    </nav>
                                    <input type="submit" name="cancelbtn" value="Cancel" class="btn btn-space btn-secondary"  style="float: right;margin-left: 20px;">
                            		<input type="submit" name="updatebtn" class="btn btn-space btn-primary" value="Update" style="float: right;">
                                </div>

                                
                                
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        
                        
                        
                            
                            
                                               
                    </div> 
                    <div class="main_div">
                            <!-- =============Budget Summary==================== -->
                            <div class="card-body" style="margin-left:10%;display: none;" id="summary_table">
                                    <table class="summary_table" cellpadding="0px">
                                        <thead class="summary_t_head">
                                            <tr class="summary_table_h" align="center">
                                                <th scope="col">Budget Summary</th>
                                                <th scope="col">Budget</th>
                                                <th scope="col">Actual</th>
                                                <th scope="col">Difference</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="summary_table_r1">
                                                <th>Total Income</th>
                                                <td><input type="text" id="summary_r1_d1" name="summary_r1_d1" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="summary_r1_d2" name="summary_r1_d2" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly ></td>
                                                <td><input type="text" id="summary_r1_d3" name="summary_r1_d3" align="center" maxlength="9" onkeypress="return onlyNumberKey(event) " readonly></td>
                                            </tr> 
                                            <tr class="summary_table_r2">
                                                <th>Total Expense</th>
                                                <td><input type="text" id="summary_r2_d1" name="summary_r2_d1" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="summary_r2_d2" name="summary_r2_d2" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly ></td>
                                                <td><input type="text" id="summary_r2_d3" name="summary_r2_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="summary_table_result">
                                                <th class="summary_t_lr" align="center">NET</th>
                                                <td><input type="text" id="summary_r3_d1" name="summary_r3_d1" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="summary_r3_d2" name="summary_r3_d2" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="summary_r3_d3" name="summary_r3_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                            </div>


                            <div class="card-body" id="income_table" style="display: none;">
                                    <table class="income_table" cellpadding="0px">
                                        <thead class="income_t_head">
                                            
                                            <tr class="income_table_h" align="center" >
                                                <th scope="col">Income</th>
                                                <th scope="col">Budget</th>
                                                <th scope="col">Actual</th>
                                                <th scope="col">Difference</th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            <tr class="income_table_r1">
                                                <th>Salary</th>
                                                <td><input type="text" id="inc_r1_d1" name="inc_r1_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="inc_r1_d2" name="inc_r1_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="inc_r1_d3" name="inc_r1_d3" align="center" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr> 
                                            <tr class="income_table_r2">
                                                <th>Pension</th>
                                                <td><input type="text" id="inc_r2_d1" name="inc_r2_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="inc_r2_d2" name="inc_r2_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="inc_r2_d3" name="inc_r2_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="income_table_r3">
                                                <th>Investment & Saving</th>
                                                <td><input type="text" id="inc_r3_d1" name="inc_r3_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="inc_r3_d2" name="inc_r3_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="inc_r3_d3" name="inc_r3_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="income_table_r4">
                                                <th>Transfer From Saving</th>
                                                <td><input type="text" id="inc_r4_d1" name="inc_r4_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="inc_r4_d2" name="inc_r4_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="inc_r4_d3" name="inc_r4_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="income_table_r5">
                                                <th>Income Tax Rate</th>
                                                <td><input type="text" id="inc_r5_d1" name="inc_r5_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="inc_r5_d2" name="inc_r5_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="inc_r5_d3" name="inc_r5_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="income_table_r6">
                                                <th>Other</th>
                                                <td><input type="text" id="inc_r6_d1" name="inc_r6_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="inc_r6_d2" name="inc_r6_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="inc_r6_d3" name="inc_r6_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>

                                            <tr class="income_table_result">
                                                <th class="income_t_lr" align="center">TOTAL </th>
                                                <td><input type="text" id="inc_r7_d1" name="inc_r7_d1" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="inc_r7_d2" name="inc_r7_d2" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="inc_r7_d3" name="inc_r7_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                            </div>

                            
                            <!-- =============Home Expanses============== -->
                            
                            <div class="card-body" id="homeexp_table" style="margin-left: 3%;display: none;margin-top: -4%" >
                                    <table class="homeexp_table" cellpadding="0px" >
                                        <thead class="homeexp_t_head">
                                            <tr class="homeexp_table_h" align="center" >
                                                <th scope="col">Home Expenses</th>
                                                <th scope="col">Budget</th>
                                                <th scope="col">Actual</th>
                                                <th scope="col">Difference</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="homeexp_table_r1" >
                                                <th >Mortgage/Rent</th>
                                                <td><input type="text" id="hom_r1_d1" name="hom_r1_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r1_d2" name="hom_r1_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r1_d3" name="hom_r1_d3" align="center"maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr> 
                                            <tr class="homeexp_table_r2" >
                                                <th >Electricity</th>
                                                <td><input type="text" id="hom_r2_d1" name="hom_r2_d1"maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r2_d2" name="hom_r2_d2"maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r2_d3" name="hom_r2_d3"maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="homeexp_table_r3" >
                                                <th >Gas</th>
                                                <td><input type="text" id="hom_r3_d1" name="hom_r3_d1"maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r3_d2" name="hom_r3_d2"maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r3_d3" name="hom_r3_d3"maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="homeexp_table_r4" >
                                                <th >Water</th>
                                                <td><input type="text" id="hom_r4_d1" name="hom_r4_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r4_d2" name="hom_r4_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r4_d3" name="hom_r4_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="homeexp_table_r5">
                                                <th >Internet</th>
                                                <td><input type="text" id="hom_r5_d1" name="hom_r5_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r5_d2" name="hom_r5_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r5_d3" name="hom_r5_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="homeexp_table_r6" >
                                                <th >Set top Box</th>
                                                <td><input type="text" id="hom_r6_d1" name="hom_r6_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r6_d2" name="hom_r6_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r6_d3" name="hom_r6_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="homeexp_table_r7" >
                                                <th >Other Appliances</th>
                                                <td><input type="text" id="hom_r7_d1" name="hom_r7_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r7_d2" name="hom_r7_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r7_d3" name="hom_r7_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="homeexp_table_r8" >
                                                <th >Lawn/Garden</th>
                                                <td><input type="text" id="hom_r8_d1" name="hom_r8_d1" maxlength="9" onkeypress="return onlyNumberKey(event)" ></td>
                                                <td><input type="text" id="hom_r8_d2" name="hom_r8_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r8_d3" name="hom_r8_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="homeexp_table_r9" >
                                                <th >Maintenance</th>
                                                <td><input type="text" id="hom_r9_d1" name="hom_r9_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r9_d2" name="hom_r9_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r9_d3" name="hom_r9_d3"maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="homeexp_table_r10" >
                                                <th >Other</th>
                                                <td><input type="text" id="hom_r10_d1" name="hom_r10_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r10_d2" name="hom_r10_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="hom_r10_d3" name="hom_r10_d3"maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>

                                            <tr class="homeexp_table_result" >
                                                <th class="homeexp_t_lr" align="center">TOTAL </th>
                                                <td><input type="text" id="hom_r11_d1" name="hom_r11_d1" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="hom_r11_d2" name="hom_r11_d2" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="hom_r11_d3" name="hom_r11_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                            </div>
                            <!-- ===============Children Education==================== -->
                            <div class="card-body" id="child_table" style="display: none;">
                                    <table class="ch_table" cellpadding="0px">
                                        <thead class="ch_t_head">
                                            <tr class="ch_table_h" align="center">
                                                <th scope="col">Child & Edu.</th>
                                                <th scope="col">Budget</th>
                                                <th scope="col">Actual</th>
                                                <th scope="col">Difference</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="ch_table_r1">
                                                <th>Tuition Fees</th>
                                                <td><input type="text" id="ch_r1_d1" name="ch_r1_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ch_r1_d2" name="ch_r1_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ch_r1_d3" name="ch_r1_d3" align="center" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr> 
                                            <tr class="ch_table_r2">
                                                <th>School Supplies</th>
                                                <td><input type="text" id="ch_r2_d1" name="ch_r2_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ch_r2_d2" name="ch_r2_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ch_r2_d3" name="ch_r2_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="ch_table_r3">
                                                <th>Student loan</th>
                                                <td><input type="text" id="ch_r3_d1" name="ch_r3_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ch_r3_d2" name="ch_r3_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ch_r3_d3" name="ch_r3_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="ch_table_r4">
                                                <th>Child & Personal Care</th>
                                                <td><input type="text" id="ch_r4_d1" name="ch_r4_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ch_r4_d2" name="ch_r4_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ch_r4_d3" name="ch_r4_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="ch_table_r5">
                                                <th>Child Support Rs.</th>
                                                <td><input type="text" id="ch_r5_d1" name="ch_r5_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ch_r5_d2" name="ch_r5_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ch_r5_d3" name="ch_r5_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="ch_table_r6">
                                                <th>Hostel</th>
                                                <td><input type="text" id="ch_r6_d1" name="ch_r6_d1" maxlength="9" onkeypress="return onlyNumberKey(event)" ></td>
                                                <td><input type="text" id="ch_r6_d2" name="ch_r6_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ch_r6_d3" name="ch_r6_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="ch_table_r7">
                                                <th>Other</th>
                                                <td><input type="text" id="ch_r7_d1" name="ch_r7_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ch_r7_d2" name="ch_r7_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ch_r7_d3" name="ch_r7_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="ch_table_result">
                                                <th class="ch_t_lr" align="center">TOTAL</th>
                                                <td><input type="text" id="ch_r8_d1" name="ch_r8_d1" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="ch_r8_d2" name="ch_r8_d2" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="ch_r8_d3" name="ch_r8_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                            </div>
                            <!-- =================Saving===================== -->
                            <div class="card-body" style="display: none;" id="saving_table">
                                    <table class="sav_table" cellpadding="0px">
                                        <thead class="sav_t_head">
                                            <tr class="sav_table_h" align="center">
                                                <th scope="col">Saving</th>
                                                <th scope="col">Budget</th>
                                                <th scope="col">Actual</th>
                                                <th scope="col">Difference</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="sav_table_r1">
                                                <th>Emergency Fund</th>
                                                <td><input type="text" id="sav_r1_d1" name="sav_r1_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="sav_r1_d2" name="sav_r1_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="sav_r1_d3" name="sav_r1_d3" align="center" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr> 
                                            <tr class="sav_table_r2">
                                                <th>Car Replacement Fund</th>
                                                <td><input type="text" id="sav_r2_d1" name="sav_r2_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="sav_r2_d2" name="sav_r2_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="sav_r2_d3" name="sav_r2_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="sav_table_r3">
                                                <th>Retirement Fund</th>
                                                <td><input type="text" id="sav_r3_d1" name="sav_r3_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="sav_r3_d2" name="sav_r3_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="sav_r3_d3" name="sav_r3_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="sav_table_r4">
                                                <th>Investments</th>
                                                <td><input type="text" id="sav_r4_d1" name="sav_r4_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="sav_r4_d2" name="sav_r4_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="sav_r4_d3" name="sav_r4_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="sav_table_r5">
                                                <th>Education Fund</th>
                                                <td><input type="text" id="sav_r5_d1" name="sav_r5_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="sav_r5_d2" name="sav_r5_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="sav_r5_d3" name="sav_r5_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="sav_table_r6">
                                                <th>Other</th>
                                                <td><input type="text" id="sav_r6_d1" name="sav_r6_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="sav_r6_d2" name="sav_r6_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="sav_r6_d3" name="sav_r6_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="sav_table_result">
                                                <th class="sav_t_lr" align="center">TOTAL </th>
                                                <td><input type="text" id="sav_r7_d1" name="sav_r7_d1" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="sav_r7_d2" name="sav_r7_d2" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="sav_r7_d3" name="sav_r7_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                            </div>
                            <div class="card-body" style="display: none;margin-top: -4% " id="daily_table">
                                    <table class="dai_table" cellpadding="0px">
                                        <thead class="dai_t_head">
                                            <tr class="dai_table_h" align="center">
                                                <th scope="col">Daily Living</th>
                                                <th scope="col">Budget</th>
                                                <th scope="col">Actual</th>
                                                <th scope="col">Difference</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="dai_table_r1">
                                                <th >Food</th>
                                                <td><input type="text" id="dai_r1_d1" name="dai_r1_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r1_d2" name="dai_r1_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r1_d3" name="dai_r1_d3" align="center" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr> 
                                            <tr class="dai_table_r2">
                                                <th >Cloth</th>
                                                <td><input type="text" id="dai_r2_d1" name="dai_r2_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r2_d2" name="dai_r2_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r2_d3" name="dai_r2_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="dai_table_r3">
                                                <th >Milk</th>
                                                <td><input type="text" id="dai_r3_d1" name="dai_r3_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r3_d2" name="dai_r3_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r3_d3" name="dai_r3_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="dai_table_r4">
                                                <th >Groceries</th>
                                                <td><input type="text" id="dai_r4_d1" name="dai_r4_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r4_d2" name="dai_r4_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r4_d3" name="dai_r4_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="dai_table_r5">
                                                <th >Cleaning Service</th>
                                                <td><input type="text" id="dai_r5_d1" name="dai_r5_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r5_d2" name="dai_r5_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r5_d3" name="dai_r5_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="dai_table_r6">
                                                <th >Dry cleaning</th>
                                                <td><input type="text" id="dai_r6_d1" name="dai_r6_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r6_d2" name="dai_r6_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r6_d3" name="dai_r6_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="dai_table_r7">
                                                <th >Personal Supply</th>
                                                <td><input type="text" id="dai_r7_d1" name="dai_r7_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r7_d2" name="dai_r7_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r7_d3" name="dai_r7_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="dai_table_r8">
                                                <th >Salon/Barber</th>
                                                <td><input type="text" id="dai_r8_d1" name="dai_r8_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r8_d2" name="dai_r8_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r8_d3" name="dai_r8_d3"maxlength="9" onkeypress="return onlyNumberKey(event)" readonly ></td>
                                            </tr>
                                            <tr class="dai_table_r9">
                                                <th >Other</th>
                                                <td><input type="text" id="dai_r9_d1" name="dai_r9_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r9_d2" name="dai_r9_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="dai_r9_d3" name="dai_r9_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>

                                            <tr class="dai_table_result">
                                                <th class="dai_t_lr" align="center">TOTAL</th>
                                                <td><input type="text" id="dai_r10_d1" name="dai_r10_d1" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="dai_r10_d2" name="dai_r10_d2" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="dai_r10_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                            </div>
                            <!-- =============Entertainment================ -->
                            <div class="card-body" style=" display: none;" id="entertainment_table">
                                    <table class="ent_table" cellpadding="0px">
                                        <thead class="ent_t_head">
                                            <tr class="ent_table_h" align="center">
                                                <th scope="col">Entertainment</th>
                                                <th scope="col">Budget</th>
                                                <th scope="col">Actual</th>
                                                <th scope="col">Difference</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="ent_table_r1">
                                                <th>Activities</th>
                                                <td><input type="text" id="ent_r1_d1" name="ent_r1_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ent_r1_d2" name="ent_r1_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ent_r1_d3" name="ent_r1_d3" align="center" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr> 
                                            <tr class="ent_table_r2">
                                                <th>Books</th>
                                                <td><input type="text" id="ent_r2_d1" name="ent_r2_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ent_r2_d2" name="ent_r2_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ent_r2_d3" name="ent_r2_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="ent_table_r3">
                                                <th>Games</th>
                                                <td><input type="text" id="ent_r3_d1" name="ent_r3_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ent_r3_d2" name="ent_r3_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ent_r3_d3" name="ent_r3_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="ent_table_r4">
                                                <th>Fun Stuff</th>
                                                <td><input type="text" id="ent_r4_d1" name="ent_r4_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ent_r4_d2" name="ent_r4_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ent_r4_d3" name="ent_r4_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="ent_table_r5">
                                                <th>Hobbies</th>
                                                <td><input type="text" id="ent_r5_d1" name="ent_r5_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ent_r5_d2" name="ent_r5_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ent_r5_d3" name="ent_r5_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="ent_table_r6">
                                                <th>Trip</th>
                                                <td><input type="text" id="ent_r6_d1" name="ent_r6_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ent_r6_d2" name="ent_r6_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ent_r6_d3" name="ent_r6_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="ent_table_r7">
                                                <th>Other</th>
                                                <td><input type="text" id="ent_r7_d1" name="ent_r7_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ent_r7_d2" name="ent_r7_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="ent_r7_d3" name="ent_r7_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="ent_table_result">
                                                <th class="ent_t_lr" align="center">TOTAL </th>
                                                <td><input type="text" id="ent_r8_d1" name="ent_r8_d1" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="ent_r8_d2" name="ent_r8_d2" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="ent_r8_d3" name="ent_r8_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                            </div>

                            <div class="card-body" style="display: none;" id="transportation_table">
                                    <table class="tra_table" cellpadding="0px">
                                        <thead class="tra_t_head">
                                            <tr class="tra_table_h" align="center">
                                                <th scope="col">Transportation</th>
                                                <th scope="col">Budget</th>
                                                <th scope="col">Actual</th>
                                                <th scope="col">Difference</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tra_table_r1">
                                                <th>Vehicle Maintenance</th>
                                                <td><input type="text" id="tra_r1_d1" name="tra_r1_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="tra_r1_d2" name="tra_r1_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="tra_r1_d3" name="tra_r1_d3" align="center" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr> 
                                            <tr class="tra_table_r2">
                                                <th>Parking</th>
                                                <td><input type="text" id="tra_r2_d1" name="tra_r2_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="tra_r2_d2" name="tra_r2_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="tra_r2_d3" name="tra_r2_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="tra_table_r3">
                                                <th>Gasoline/Petrol</th>
                                                <td><input type="text" id="tra_r3_d1" name="tra_r3_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="tra_r3_d2" name="tra_r3_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="tra_r3_d3" name="tra_r3_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="tra_table_r4">
                                                <th>Other</th>
                                                <td><input type="text" id="tra_r4_d1" name="tra_r4_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="tra_r4_d2" name="tra_r4_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="tra_r4_d3" name="tra_r4_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="tra_table_result">
                                                <th class="tra_t_lr" align="center">TOTAL </th>
                                                <td><input type="text" id="tra_r5_d1" name="tra_r5_d1" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="tra_r5_d2" name="tra_r5_d2" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="tra_r5_d3" name="tra_r5_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                            </div>
                            <!-- =============Miscellaneous Expenses================ -->
                            <div class="card-body" style="display: none;" id="misc_table">
                                    <table class="mis_table" cellpadding="0px">
                                        <thead class="mis_t_head">
                                            <tr class="mis_table_h" align="center">
                                                <th scope="col">Miscellaneous Expenses</th>
                                                <th scope="col">Budget</th>
                                                <th scope="col">Actual</th>
                                                <th scope="col">Difference</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="mis_table_r1">
                                                <th>Pet</th>
                                                <td><input type="text" id="mis_r1_d1" name="mis_r1_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="mis_r1_d2" name="mis_r1_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="mis_r1_d3" name="mis_r1_d3" align="center" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly=""></td>
                                            </tr> 
                                            <tr class="mis_table_r2">
                                                <th>Gift & Donations</th>
                                                <td><input type="text" id="mis_r2_d1" name="mis_r2_d1" maxlength="9" onkeypress="return onlyNumberKey(event)" ></td>
                                                <td><input type="text" id="mis_r2_d2" name="mis_r2_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="mis_r2_d3" name="mis_r2_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="mis_table_r3">
                                                <th>Hobbies & Sports</th>
                                                <td><input type="text" id="mis_r3_d1" name="mis_r3_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="mis_r3_d2" name="mis_r3_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="mis_r3_d3" name="mis_r3_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="mis_table_r4">
                                                <th>Tickets</th>
                                                <td><input type="text" id="mis_r4_d1" name="mis_r4_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="mis_r4_d2" name="mis_r4_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="mis_r4_d3" name="mis_r4_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="mis_table_r5">
                                                <th>Travel</th>
                                                <td><input type="text" id="mis_r5_d1" name="mis_r5_d1" maxlength="9" onkeypress="return onlyNumberKey(event)" ></td>
                                                <td><input type="text" id="mis_r5_d2" name="mis_r5_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="mis_r5_d3" name="mis_r5_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="mis_table_r6">
                                                <th>Other</th>
                                                <td><input type="text" id="mis_r6_d1" name="mis_r6_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="mis_r6_d2" name="mis_r6_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="mis_r6_d3" name="mis_r6_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="mis_table_result">
                                                <th class="mis_t_lr" align="center">TOTAL </th>
                                                <td><input type="text" id="mis_r7_d1" name="mis_r7_d1" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="mis_r7_d2" name="mis_r7_d2" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="mis_r7_d3" name="mis_r7_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                            </div>
                            <!-- ===========HealthCare=============== -->
                            <div class="card-body" style="display: none;" id="health_table">
                                    <table class="heal_table" cellpadding="0px">
                                        <thead class="heal_t_head">
                                            <tr class="heal_table_h" align="center">
                                                <th scope="col">HealthCare</th>
                                                <th scope="col">Budget</th>
                                                <th scope="col">Actual</th>
                                                <th scope="col">Difference</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="heal_table_r1">
                                                <th>Medical Charge</th>
                                                <td><input type="text" id="heal_r1_d1" name="heal_r1_d1" maxlength="9" onkeypress="return onlyNumberKey(event)" ></td>
                                                <td><input type="text" id="heal_r1_d2" name="heal_r1_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="heal_r1_d3" name="heal_r1_d3" align="center" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr> 
                                            <tr class="heal_table_r2">
                                                <th>Medical Insurance</th>
                                                <td><input type="text" id="heal_r2_d1" name="heal_r2_d1" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="heal_r2_d2" name="heal_r2_d2" maxlength="9" onkeypress="return onlyNumberKey(event)"></td>
                                                <td><input type="text" id="heal_r2_d3" name="heal_r2_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>
                                            <tr class="heal_table_result">
                                                <th class="heal_t_lr" align="center">TOTAL </th>
                                                <td><input type="text" id="heal_r3_d1" name="heal_r3_d1" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="heal_r3_d2" name="heal_r3_d2" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                                <td><input type="text" id="heal_r3_d3" name="heal_r3_d3" maxlength="9" onkeypress="return onlyNumberKey(event)" readonly></td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
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
        /*if(isset($_POST['submitbtn']))
        {
            $var1=$_POST['abc'];
            echo "$var1";
        }*/
        echo "<script> 
    function onlyNumberKey(evt) { 
          
        // Only ASCII charactar in that range allowed 
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
        return true; 
        } 
    </script> ";

        /*For set default Value*/
        $selectedyear=$_GET['selectedyear'];

        include 'setdefault_value.php';
        



        /*For set default Value*/
        if(isset($_POST['cancelbtn']))
        {
            header("location: expenditure.php");
            exit;
        }
        if(isset($_POST['updatebtn']))
        {
            $income_bud=0;
            $income_act=0;
            $expenses_bud=0;
            $expenses_act=0;
            /*Income*/
            $len=count($income_b);
            $income_b="";
            $income_a="";
            
            for($i=0;$i<$len;$i++)
            {
                $doc_id_1="inc_r".strval($i+1)."_d1";
                $doc_id_2="inc_r".strval($i+1)."_d2";
                if($i!=$len-1){
                    $income_b=$income_b."".$_POST[$doc_id_1]."#";
                    $income_a=$income_a."".$_POST[$doc_id_2]."#";
                }
                else
                {
                   $income_b=$income_b."".$_POST[$doc_id_1];
                    $income_a=$income_a."".$_POST[$doc_id_2];
 
                }
                $income_bud+=$_POST[$doc_id_1];
                $income_act+=$_POST[$doc_id_2];
            }
            /*Income*/

            /*home_expenses*/
            $len=count($home_expenses_b);
            $home_expenses_b="";
            $home_expenses_a="";

            for($i=0;$i<$len;$i++)
            {
                $doc_id_1="hom_r".strval($i+1)."_d1";
                $doc_id_2="hom_r".strval($i+1)."_d2";
                if($i!=$len-1){
                    $home_expenses_b=$home_expenses_b."".$_POST[$doc_id_1]."#";
                    $home_expenses_a=$home_expenses_a."".$_POST[$doc_id_2]."#";
                }
                else
                {
                   $home_expenses_b=$home_expenses_b."".$_POST[$doc_id_1];
                    $home_expenses_a=$home_expenses_a."".$_POST[$doc_id_2];
 
                }
                $expenses_bud+=$_POST[$doc_id_1];
                $expenses_act+=$_POST[$doc_id_2];
            }
            /*home_expenses*/

            /*child_education*/
            $len=count($child_education_b);
            $child_education_b="";
            $child_education_a="";
            for($i=0;$i<$len;$i++)
            {
                $doc_id_1="ch_r".strval($i+1)."_d1";
                $doc_id_2="ch_r".strval($i+1)."_d2";
                if($i!=$len-1){
                    $child_education_b=$child_education_b."".$_POST[$doc_id_1]."#";
                    $child_education_a=$child_education_a."".$_POST[$doc_id_2]."#";
                }
                else
                {
                   $child_education_b=$child_education_b."".$_POST[$doc_id_1];
                    $child_education_a=$child_education_a."".$_POST[$doc_id_2];
 
                }
                $expenses_bud+=$_POST[$doc_id_1];
                $expenses_act+=$_POST[$doc_id_2];
            }
            /*child_education*/

            /*saving*/
            $len=count($saving_b);
            $saving_b="";
            $saving_a="";

            for($i=0;$i<$len;$i++)
            {
                $doc_id_1="sav_r".strval($i+1)."_d1";
                $doc_id_2="sav_r".strval($i+1)."_d2";
                if($i!=$len-1){
                    $saving_b=$saving_b."".$_POST[$doc_id_1]."#";
                    $saving_a=$saving_a."".$_POST[$doc_id_2]."#";
                }
                else
                {
                   $saving_b=$saving_b."".$_POST[$doc_id_1];
                    $saving_a=$saving_a."".$_POST[$doc_id_2];
 
                }
                $income_bud+=$_POST[$doc_id_1];
                $income_act+=$_POST[$doc_id_2];
            }
            /*saving*/

             /*daily_living*/
            $len=count($daily_living_b);
            $daily_living_b="";
            $daily_living_a="";
            for($i=0;$i<$len;$i++)
            {
                $doc_id_1="dai_r".strval($i+1)."_d1";
                $doc_id_2="dai_r".strval($i+1)."_d2";
                if($i!=$len-1){
                    $daily_living_b=$daily_living_b."".$_POST[$doc_id_1]."#";
                    $daily_living_a=$daily_living_a."".$_POST[$doc_id_2]."#";
                }
                else
                {
                   $daily_living_b=$daily_living_b."".$_POST[$doc_id_1];
                    $daily_living_a=$daily_living_a."".$_POST[$doc_id_2];
 
                }
                $expenses_bud+=$_POST[$doc_id_1];
                $expenses_act+=$_POST[$doc_id_2];
            }
            /*daily_living*/

            /*entertainment*/
            $len=count($entertainment_b);
            $entertainment_b="";
            $entertainment_a="";
            for($i=0;$i<$len;$i++)
            {
                $doc_id_1="ent_r".strval($i+1)."_d1";
                $doc_id_2="ent_r".strval($i+1)."_d2";
                if($i!=$len-1){
                    $entertainment_b=$entertainment_b."".$_POST[$doc_id_1]."#";
                    $entertainment_a=$entertainment_a."".$_POST[$doc_id_2]."#";
                }
                else
                {
                   $entertainment_b=$entertainment_b."".$_POST[$doc_id_1];
                    $entertainment_a=$entertainment_a."".$_POST[$doc_id_2];
 
                }
                $expenses_bud+=$_POST[$doc_id_1];
                $expenses_act+=$_POST[$doc_id_2];
            }
            /*entertainment*/


            /*transportation*/
            $len=count($transportation_b);
            $transportation_b="";
            $transportation_a="";
            for($i=0;$i<$len;$i++)
            {
                $doc_id_1="tra_r".strval($i+1)."_d1";
                $doc_id_2="tra_r".strval($i+1)."_d2";
                if($i!=$len-1){
                    $transportation_b=$transportation_b."".$_POST[$doc_id_1]."#";
                    $transportation_a=$transportation_a."".$_POST[$doc_id_2]."#";
                }
                else
                {
                   $transportation_b=$transportation_b."".$_POST[$doc_id_1];
                    $transportation_a=$transportation_a."".$_POST[$doc_id_2];
 
                }
                $expenses_bud+=$_POST[$doc_id_1];
                $expenses_act+=$_POST[$doc_id_2];
            }
            /*transportation*/

            /*misce_expenses*/
            $len=count($misce_expenses_b);
            $misce_expenses_b="";
            $misce_expenses_a="";
            for($i=0;$i<$len;$i++)
            {
                $doc_id_1="mis_r".strval($i+1)."_d1";
                $doc_id_2="mis_r".strval($i+1)."_d2";
                if($i!=$len-1){
                    $misce_expenses_b=$misce_expenses_b."".$_POST[$doc_id_1]."#";
                    $misce_expenses_a=$misce_expenses_a."".$_POST[$doc_id_2]."#";
                }
                else
                {
                   $misce_expenses_b=$misce_expenses_b."".$_POST[$doc_id_1];
                    $misce_expenses_a=$misce_expenses_a."".$_POST[$doc_id_2];
 
                }
                $expenses_bud+=$_POST[$doc_id_1];
                $expenses_act+=$_POST[$doc_id_2];
            }
            /*misce_expenses*/

            /*healthcare*/
            $len=count($healthcare_b);
            $healthcare_b="";
            $healthcare_a="";
            for($i=0;$i<$len;$i++)
            {
                $doc_id_1="heal_r".strval($i+1)."_d1";
                $doc_id_2="heal_r".strval($i+1)."_d2";
                if($i!=$len-1){
                    $healthcare_b=$healthcare_b."".$_POST[$doc_id_1]."#";
                    $healthcare_a=$healthcare_a."".$_POST[$doc_id_2]."#";
                }
                else
                {
                   $healthcare_b=$healthcare_b."".$_POST[$doc_id_1];
                    $healthcare_a=$healthcare_a."".$_POST[$doc_id_2];
 
                }
                $expenses_bud+=$_POST[$doc_id_1];
                $expenses_act+=$_POST[$doc_id_2];
            }
            /*healthcare*/
            $budget_b=$income_bud."#".$expenses_bud;
            $budget_a=$income_act."#".$expenses_act;




            // echo "<br>Income B= ".$income_b;
            // echo "<br>Income A= ".$income_a;
            // echo "<br>home_expenses B= ".$home_expenses_b;
            // echo "<br>home_expenses A= ".$home_expenses_a;
            // echo "<br>child_education B= ".$child_education_b;
            // echo "<br>child_education A= ".$child_education_a;
            // echo "<br>saving B= ".$saving_b;
            // echo "<br>saving A= ".$saving_a;
            // echo "<br>daily_living B= ".$daily_living_b;
            // echo "<br>daily_living A= ".$daily_living_a;
            // echo "<br>entertainment B= ".$entertainment_b;
            // echo "<br>entertainment A= ".$entertainment_a;
            // echo "<br>transportation B= ".$transportation_b;
            // echo "<br>transportation A= ".$transportation_a;
            // echo "<br>misce_expenses B= ".$misce_expenses_b;
            // echo "<br>misce_expenses A= ".$misce_expenses_a;
            // echo "<br>healthcare B= ".$healthcare_b;
            // echo "<br>healthcare A= ".$healthcare_a;
            // echo "<br>Budget B= ".$budget_b;
            // echo "<br>Budget A= ".$budget_a;
            
            $sql= "UPDATE expenditure SET income_b='$income_b',income_a='$income_a',home_expenses_b='$home_expenses_b',home_expenses_a='$home_expenses_a',child_education_b='$child_education_b',child_education_a='$child_education_a',saving_b='$saving_b',saving_a='$saving_a',daily_living_b='$daily_living_b',daily_living_a='$daily_living_a',entertainment_b='$entertainment_b',entertainment_a='$entertainment_a',transportation_b='$transportation_b',transportation_a='$transportation_a',misce_expenses_b='$misce_expenses_b',misce_expenses_a='$misce_expenses_a',healthcare_b='$healthcare_b',healthcare_a='$healthcare_a',budget_b='$budget_b',budget_a='$budget_a' where home_id='$homeid' and year='$selectedyear';";
                $result=mysqli_query($conn,$sql);
                header("location: expenditure.php");
                exit;
        }
        $table_id="#".$_GET['id'];

	echo "<script>
			$(document).ready(function(){
				$('$table_id').show();
				});
		</script>";

        
	?>

</body>
 
</html>



