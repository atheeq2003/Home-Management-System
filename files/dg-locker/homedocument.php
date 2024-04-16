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
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="../../dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">DG Locker</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Home document</li>

                                        </ol>
                                    </nav>
                                </div>

                                
                                
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                            <div class="row">
                                <div id="inddoc" style="width: 100%;">
                                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12" style="float: left;" id="addfiledoc">
                                        <div class="product-thumbnail">
                                            <div class="product-img-head">
                                                <div class="product-img">
                                                    <img src="../../img/add_document.jpg" style="height: 196px;" alt="" class="img-fluid">
                                                </div>
                                               
                                           
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content-head">
                                                    <div style="text-align: center;">
                                                        <h3 class="product-title">Add New Document</h3>  
                                                    </div>
                                                </div>
                                                <div class="product-btn">
                                                    <div style="text-align: center;">
                                                        <a href="add_homedocument.php" class="btn btn-primary">Click here</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>



                                <!--<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link " href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>-->



                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="product-sidebar">
                                <div class="product-sidebar-widget">
                                    <h4 class="mb-0">Filter</h4>
                                </div>
                                <div class="product-sidebar-widget">
                                    <h4 class="product-sidebar-widget-title">Documents</h4>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="All" name="All" checked>
                                        <label class="custom-control-label" for="All">All</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Document" name="Document">
                                        <label class="custom-control-label" for="Document">Document(deed)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Taxes" name="Taxes">
                                        <label class="custom-control-label" for="Taxes">Taxes</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Vehicle" name="Vehicle">
                                        <label class="custom-control-label" for="Vehicle">Vehicle</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Health" name="Health">
                                        <label class="custom-control-label" for="Health">Health</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Other" name="Other">
                                        <label class="custom-control-label" for="Other">Other</label>
                                    </div>
                                </div>
                                
                                <div class="product-sidebar-widget" >
                                    <a href="#" class="btn btn-warning" id="resbtn">Reset Filter</a>
                                </div>
                            </div>
                        </div>
                    </div>




                        

                </div>

            </div>


   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Document</h4>
        </div>
        <div class="modal-body">
          <p>You want to remove document</p>
        </div>
        <div class="modal-footer">
            <form  method="post">
                <input type="submit" name="revdocument" id="revdocument" value="Remove" class="btn btn-primary" >
            </form>

          <a href="#" type="button" class="btn btn-primary" data-dismiss="modal">cancel</a>
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
                
            ob_start();
            /*              $('input[type=\"checkbox\"]:checked').prop('checked',false);
                            $('#All').prop('checked', true);*/
            echo "<script>
                    $(document).ready(function(){
                        $('#resbtn').click(function(){
                            
                            location.reload();
                        });
                    });


                    function createsession(clicked) { 
                    createCookie('useridfordoc', clicked, '10'); 
                    } 

                    function createCookie(cname, cvalue, exdays) {
                        var d = new Date();
                        d.setTime(d.getTime() + (exdays*24*60*60*1000));
                        var expires = 'expires='+ d.toUTCString();
                        document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';
                    }
                    
                    </script>";

            $homeid=$_SESSION['homeid'];
            $userid="";

            if(isset($_POST['revdocument']))
            {
                $documentname=$_COOKIE['useridfordoc'];
                $category='homedocument';
                header("location: deletedoc.php?useridfordoc=$documentname&category=$category");
                exit;
            }


            $sql="select * from dg_locker where home_id='$homeid' and user_id='$userid' and category='homedocument'";
            $result=mysqli_query($conn,$sql);
        

            if(mysqli_num_rows($result)){
                while ($row=mysqli_fetch_array($result)) {
                    $img="../../".$row['document'];
                    $pdf=$img;
                    $ext = pathinfo($img, PATHINFO_EXTENSION);
                    
                    $id1=$row['document_type'].'-Id';
                    $viewprotected="";
                    $documentname=$row['document_name'];
                    $documentpath=$row['document'];
                    $documentview='displaydoc.php';
                    $category='homedocument';
                    if($ext=='pdf' || $ext=='PDF')
                    {
                        $img="../../image/documents/pdflogo.jpg";
                        
                    }
                    
                    
                    
                    $str="<script>
                            $(document).ready(function(){
                                $(\"#inddoc\").append(\"<div class='col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12' id=$id1 name=$id1 style='float:left;'>\
                              <div class='product-thumbnail'>\
                                  <div class='product-img-head' style='border: 3px solid gray;'>\
                                    <div class='product-img'>\
                                                    <img src='$img' style='height:150px;'  class='img-fluid' >\
                                    </div>\
                                    <div class='ribbons'></div>\
                                    <div class='ribbons-text'>New</div>\
                                    <div class='product-content'>\
                                        <div class='product-content-head'>\
                                            <h3 class='product-title' style='height:20px;'>$documentname</h3>\
                                        </div>\
                                        <div class='product-btn'>\
                                                <a href='$documentview?useridfordoc=$documentname&category=$category' $viewprotected  id='$documentname' onClick='createsession(this.id)' class='btn btn-primary' style='width:45%;' disabled target='_blank'>View</a>\
                                                <a data-toggle='modal' data-target='#myModal' href='#' id='$documentname' onClick='createsession(this.id)' class='btn btn-primary' style='width:45%; float:right;'>Delete</a><br>\
                                            <div style='text-align:center; padding-top: 5px;' >\
                                                <a href='$pdf' class='btn btn-primary' download >Download</a>\
                                            </div>\
                                        </div>\
                                    </div>\
                                  </div>\
                              </div>\
                           </div>\");
                                });

                        </script>";
                    echo "<br>".$str;   
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

