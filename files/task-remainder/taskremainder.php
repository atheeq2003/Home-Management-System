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
    <!-- <script src="taskremainder.js"></script> -->
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
        <!-- navbar -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
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
                                <a class="nav-link active" href="#" ><i class="fas fa-fw fa-table"></i>Task Remainder</a>
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
                                            <li class="breadcrumb-item"><a href="../../dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active"><a href="#" class="breadcrumb-link">Task Remainder</a></li>
                                            

                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                            <section class="cd-timeline js-cd-timeline">
                        <div class="cd-timeline__container">
                            <div id="task">

                            <!--<div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                                    <img src="../../assets/vendor/timeline/img/cd-icon-picture.svg" alt="Picture">
                                </div>
                                <div class="cd-timeline__content js-cd-content">
                                    <h3>Title of section 1</h3>
                                    <h4 style="float: left;">From : Ayush</h4>
                                    <h4 style="float: right;">To : Yash</h4><br><br>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                    <a href="#0" class="btn btn-primary btn-lg">Read More</a>
                                    <span class="cd-timeline__date">12 July, 2016</span>
                                </div>
                            </div>-->

                            </div>
                        </div>
                    </section>


                            
                        </div>
                       

                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12"  >
                            <div class="product-sidebar-widget" >
                                <a href="taskassignform.php?edit=false" class="btn btn-primary" id="assigntask" ><i class="ti-plus"></i> Assign Task</a>
                            </div>
                            <div class="product-sidebar" >
                                <div class="product-sidebar-widget">
                                    <h4 class="mb-0">Filter</h4>
                                </div>
                                <div class="product-sidebar-widget" id="filter">
                                    <h4 class="product-sidebar-widget-title">Assign to</h4>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="All" name="All" checked>
                                        <label class="custom-control-label" for="All">All</label>
                                    </div> 
                                    <!--<div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cat-2">
                                        <label class="custom-control-label" for="cat-2">Technical</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cat-3">
                                        <label class="custom-control-label" for="cat-3">Sports</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cat-4">
                                        <label class="custom-control-label" for="cat-4">Bank</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cat-5">
                                        <label class="custom-control-label" for="cat-5">Others</label>
                                    </div>-->
                                </div>
                                
                                <div class="product-sidebar-widget" >
                                    <a href="#" class="btn btn-primary" id="resbtn" >Reset Filter</a>

                                </div>
                            </div>
                        </div>

                    </div>

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
        
        echo "<script type='text/javascript'>
                            $(document).ready(function(){
                                  $('#resbtn').click(function(){
                                    location.reload();
                                });
                            });
                            </script>";
        $homeid=$_SESSION['homeid'];
        $userid=$_SESSION['userid'];
        $sql="select * from user_information where home_id='$homeid';";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_array($result))
            {
                $name=$row['first_name'];
                echo "<script type='text/javascript'>
                            $(document).ready(function(){

                                $('#filter').append(\"<div class='custom-control custom-checkbox' >\
                                        <input type='checkbox' class='custom-control-input' id=$name name=$name>\
                                        <label class='custom-control-label' for=$name>$name</label>\
                                    </div>\");   
                            });
                            </script>";
            }
        }

        $sql="select * from task_remainder where home_id='$homeid';";
        $result=mysqli_query($conn,$sql);
        $image=['../../assets/vendor/timeline/img/cd-icon-location.svg'];
        $background=['cd-timeline__img cd-timeline__img--picture js-cd-img','cd-timeline__img cd-timeline__img--location js-cd-img','cd-timeline__img cd-timeline__img--movie js-cd-img'];
        $i=0;
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_array($result))
            {
                if($i>2)
                {
                    $i=0;
                }
                $background_color=$background[$i];
                $i+=1;
                $sql1="select first_name from user_information where home_id= '".$row['home_id']."' and user_id='".$row['user_id']."';";
                $result1=mysqli_query($conn,$sql1);
                $row1=mysqli_fetch_array($result1);
                $title=$row['title'];
                $from=$row1['first_name'];
                $to=$row['to_name'];
                $task=$row['task'];
                $id=$to."-Id";
                $img="../../".$row['file'];
                
                if($img=="../../")
                {
                    $img="#";
                    
                }
                if($_SESSION['userid']==$row['user_id'])
                {
                $delete="deletetask.php?"."taskid=".$row['task_id']."&image=".$img;
                $update="taskassignform.php?edit=true"."&taskid=".$row['task_id']."&image=".$img;
                }
                else
                {
                   $delete="#";
                   $update="#"; 
                }

                echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            $('#task').append(\"<div class='cd-timeline__block js-cd-block' id=$id name=$id>\
                                <div class='$background_color'>\
                                    <img src='../../assets/vendor/timeline/img/cd-icon-location.svg' alt='Picture'>\
                                </div>\
                                <div class='cd-timeline__content js-cd-content'>\
                                    <h3>$title</h3>\
                                    <h4 style='float: left;'>From :$from</h4>\
                                    <h4 style='float: right;'>To :$to</h4><br><br>\
                                    <p>$task</p><br><a href='$img' class='btn btn-primary' >Image</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='$update' class='btn btn-warning' >Update</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='$delete' class='btn btn-danger ' >Delete</a>\
                                    <span class='cd-timeline__date'></span>\
                                </div>\
                            </div>\");   
                            });
                            </script>";
            }

        }
        echo "<script type='text/javascript'>
                            
                                 $(function () {
                                    
                                    $('input:checkbox').click(function () {
                                        
                                       
                                        var selected = [];
                                        var not_selected=[];
                                       
                                        $('input:checkbox').each(function () {
                                            
                                            if ($(this).is(':checked')){
                                                var color = $(this).attr('name').replace('', '');
                                                selected.push(color);
                                            }
                                            else
                                            {
                                                    var color = $(this).attr('name').replace('', '');
                                                    not_selected.push(color);
                                            }

                                        });
                                        var temp=0;
                                        for (var i = 0; i < selected.length; i++) {
                                            if(selected[i]=='All')
                                            {
                                                temp=1;
                                                break;
                                            }
                                        }
                                        if(temp)
                                        {

                                            for (var i = 0; i < selected.length; i++) {

                                                if(selected[i]!='All')
                                                {
                                                   var id1='[id='+selected[i]+'-Id'+']';
                                                    $(id1).show();
                                                }
                                            }
                                            for (var i = 0; i < not_selected.length; i++) {
                                                if(not_selected[i]!='All')
                                                {
                                                    var id1='[id='+not_selected[i]+'-Id'+']';
                                                    $(id1).show();
                                                }
                                            }
                                        }
                                        else
                                        {

                                            for (var i = 0; i < selected.length; i++) {

                                                if(selected[i]!='All')
                                                {
                                                    var id1='[id='+selected[i]+'-Id'+']';
                                                    $(id1).show();
                                                }
                                            }
                                            for (var i = 0; i < not_selected.length; i++) {
                                                if(not_selected[i]!='All')
                                                {
                                                    var id1='[id='+not_selected[i]+'-Id'+']';
                                                     $(id1).hide();
                                                }
                                            }
                                        }



                                    });

                                    });
                       
                                
                            </script>";



    ?>

</body>
 
</html>