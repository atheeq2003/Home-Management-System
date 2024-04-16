<?php 

include '../login_check1.php';

    $sql="select amount from bill_management where home_id='".$_SESSION['homeid']."' and category='electricity'";

                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    $amount_arr = array();
                    while($row=mysqli_fetch_assoc($result))
                    {
                        array_push($amount_arr, $row['amount']);
                    }
                }


?>