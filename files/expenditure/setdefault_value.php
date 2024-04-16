<?php  
        $homeid=$_SESSION['homeid'];
        
        $sql="select * from  expenditure where home_id='$homeid' and year='$selectedyear'";

        $result=mysqli_query($conn,$sql);
        /*if(mysqli_num_rows($result) == 0 ){
            $sql="INSERT INTO expenditure(income_b,income_a, home_expenses_b, home_expenses_a, child_education_b, child_education_a, saving_b, saving_a, daily_living_b, daily_living_a, entertainment_b, entertainment_a, transportation_b, transportation_a, misce_expenses_b, misce_expenses_a, healthcare_b, healthcare_a, budget_b, budget_a, home_id) VALUES ('0#0#0#0#0#0','0#0#0#0#0#0','0#0#0#0#0#0#0#0#0#0','0#0#0#0#0#0#0#0#0#0','0#0#0#0#0#0#0','0#0#0#0#0#0#0','0#0#0#0#0#0','0#0#0#0#0#0','0#0#0#0#0#0#0#0#0','0#0#0#0#0#0#0#0#0','0#0#0#0#0#0#0','0#0#0#0#0#0#0','0#0#0#0','0#0#0#0','0#0#0#0#0#0','0#0#0#0#0#0','0#0','0#0','0#0','0#0','$homeid')";
            $result=mysqli_query($conn,$sql);
            $sql="select * from  expenditure where home_id='$homeid'";
            $result=mysqli_query($conn,$sql);
        }*/


        $row=mysqli_fetch_array($result);
        
        /*For default set value of income*/
        $income_b=$row['income_b'];
        $income_a=$row['income_a'];

        $income_b=explode("#", $income_b);
        $income_a=explode("#", $income_a);
        
        $income_bud=0;
        $income_actual=0;
        for($i=0;$i<count($income_b);$i++)
        {

            $doc_id_1="inc_r".strval($i+1)."_d1";
            $doc_id_2="inc_r".strval($i+1)."_d2";
            $doc_id_3="inc_r".strval($i+1)."_d3";
            $diff=$income_b[$i]-$income_a[$i];
            $income_bud+=$income_b[$i];
            $income_actual+=$income_a[$i];
            echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$income_b[$i]';
                            document.getElementById('$doc_id_2').value='$income_a[$i]';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>"; 
        }
        $doc_id_1="inc_r".strval($i+1)."_d1";
        $doc_id_2="inc_r".strval($i+1)."_d2";
        $doc_id_3="inc_r".strval($i+1)."_d3";
        $diff=$income_bud-$income_actual;
        echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$income_bud';
                            document.getElementById('$doc_id_2').value='$income_actual';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>";

        /*For default set value of income*/


        
        /*For default set value of home expenses*/

        $home_expenses_b=$row['home_expenses_b'];
        $home_expenses_a=$row['home_expenses_a'];

        $home_expenses_b=explode("#", $home_expenses_b);
        $home_expenses_a=explode("#", $home_expenses_a);
        
        $home_expenses_bud=0;
        $home_expenses_actual=0;
        for($i=0;$i<count($home_expenses_b);$i++)
        {

            $doc_id_1="hom_r".strval($i+1)."_d1";
            $doc_id_2="hom_r".strval($i+1)."_d2";
            $doc_id_3="hom_r".strval($i+1)."_d3";
            $diff=$home_expenses_b[$i]-$home_expenses_a[$i];
            $home_expenses_bud+=$home_expenses_b[$i];
            $home_expenses_actual+=$home_expenses_a[$i];
            echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$home_expenses_b[$i]';
                            document.getElementById('$doc_id_2').value='$home_expenses_a[$i]';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>"; 
        }
        
        $doc_id_1="hom_r".strval($i+1)."_d1";
        $doc_id_2="hom_r".strval($i+1)."_d2";
        $doc_id_3="hom_r".strval($i+1)."_d3";
        $diff=$home_expenses_bud-$home_expenses_actual;
        echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$home_expenses_bud';
                            document.getElementById('$doc_id_2').value='$home_expenses_actual';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>";

        /*For default set value of home_expenses*/

        /*For default set value of child_education*/
        $child_education_b=$row['child_education_b'];
        $child_education_a=$row['child_education_a'];

        $child_education_b=explode("#", $child_education_b);
        $child_education_a=explode("#", $child_education_a);
        
        $child_education_bud=0;
        $child_education_actual=0;
        for($i=0;$i<count($child_education_b);$i++)
        {

            $doc_id_1="ch_r".strval($i+1)."_d1";
            $doc_id_2="ch_r".strval($i+1)."_d2";
            $doc_id_3="ch_r".strval($i+1)."_d3";
            $diff=$child_education_b[$i]-$child_education_a[$i];
            $child_education_bud+=$child_education_b[$i];
            $child_education_actual+=$child_education_a[$i];
            echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$child_education_b[$i]';
                            document.getElementById('$doc_id_2').value='$child_education_a[$i]';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>"; 
        }
        $doc_id_1="ch_r".strval($i+1)."_d1";
        $doc_id_2="ch_r".strval($i+1)."_d2";
        $doc_id_3="ch_r".strval($i+1)."_d3";
        $diff=$child_education_bud-$child_education_actual;
        echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$child_education_bud';
                            document.getElementById('$doc_id_2').value='$child_education_actual';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>";

        /*For default set value of child_education*/


        /*For default set value of saving*/
        $saving_b=$row['saving_b'];
        $saving_a=$row['saving_a'];

        $saving_b=explode("#", $saving_b);
        $saving_a=explode("#", $saving_a);
        
        $saving_bud=0;
        $saving_actual=0;
        for($i=0;$i<count($saving_b);$i++)
        {

            $doc_id_1="sav_r".strval($i+1)."_d1";
            $doc_id_2="sav_r".strval($i+1)."_d2";
            $doc_id_3="sav_r".strval($i+1)."_d3";
            
            $diff=$saving_b[$i]-$saving_a[$i];
            $saving_bud+=$saving_b[$i];
            $saving_actual+=$saving_a[$i];
            echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$saving_b[$i]';
                            document.getElementById('$doc_id_2').value='$saving_a[$i]';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>"; 
        }
        $doc_id_1="sav_r".strval($i+1)."_d1";
        $doc_id_2="sav_r".strval($i+1)."_d2";
        $doc_id_3="sav_r".strval($i+1)."_d3";
        $diff=$saving_bud-$saving_actual;
        echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$saving_bud';
                            document.getElementById('$doc_id_2').value='$saving_actual';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>";

        /*For default set value of saving*/


        /*For default set value of daily_living*/
        $daily_living_b=$row['daily_living_b'];
        $daily_living_a=$row['daily_living_a'];

        $daily_living_b=explode("#", $daily_living_b);
        $daily_living_a=explode("#", $daily_living_a);
        
        $daily_living_bud=0;
        $daily_living_actual=0;
        for($i=0;$i<count($daily_living_b);$i++)
        {

            $doc_id_1="dai_r".strval($i+1)."_d1";
            $doc_id_2="dai_r".strval($i+1)."_d2";
            $doc_id_3="dai_r".strval($i+1)."_d3";
            $diff=$daily_living_b[$i]-$daily_living_a[$i];
            $daily_living_bud+=$daily_living_b[$i];
            $daily_living_actual+=$daily_living_a[$i];
            echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$daily_living_b[$i]';
                            document.getElementById('$doc_id_2').value='$daily_living_a[$i]';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>"; 
        }
        $doc_id_1="dai_r".strval($i+1)."_d1";
        $doc_id_2="dai_r".strval($i+1)."_d2";
        $doc_id_3="dai_r".strval($i+1)."_d3";
        $diff=$daily_living_bud-$daily_living_actual;
        echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$daily_living_bud';
                            document.getElementById('$doc_id_2').value='$daily_living_actual';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>";

        /*For default set value of daily_living*/

        /*For default set value of entertainment*/
        $entertainment_b=$row['entertainment_b'];
        $entertainment_a=$row['entertainment_a'];

        $entertainment_b=explode("#", $entertainment_b);
        $entertainment_a=explode("#", $entertainment_a);
        
        $entertainment_bud=0;
        $entertainment_actual=0;
        for($i=0;$i<count($entertainment_b);$i++)
        {

            $doc_id_1="ent_r".strval($i+1)."_d1";
            $doc_id_2="ent_r".strval($i+1)."_d2";
            $doc_id_3="ent_r".strval($i+1)."_d3";
            $diff=$entertainment_b[$i]-$entertainment_a[$i];
            $entertainment_bud+=$entertainment_b[$i];
            $entertainment_actual+=$entertainment_a[$i];
            echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$entertainment_b[$i]';
                            document.getElementById('$doc_id_2').value='$entertainment_a[$i]';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>"; 
        }
        $doc_id_1="ent_r".strval($i+1)."_d1";
        $doc_id_2="ent_r".strval($i+1)."_d2";
        $doc_id_3="ent_r".strval($i+1)."_d3";
        $diff=$entertainment_bud-$entertainment_actual;
        echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$entertainment_bud';
                            document.getElementById('$doc_id_2').value='$entertainment_actual';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>";

        /*For default set value of entertainment*/

        /*For default set value of transportation*/
        $transportation_b=$row['transportation_b'];
        $transportation_a=$row['transportation_a'];

        $transportation_b=explode("#", $transportation_b);
        $transportation_a=explode("#", $transportation_a);
        
        $transportation_bud=0;
        $transportation_actual=0;
        for($i=0;$i<count($transportation_b);$i++)
        {

            $doc_id_1="tra_r".strval($i+1)."_d1";
            $doc_id_2="tra_r".strval($i+1)."_d2";
            $doc_id_3="tra_r".strval($i+1)."_d3";
            $diff=$transportation_b[$i]-$transportation_a[$i];
            $transportation_bud+=$transportation_b[$i];
            $transportation_actual+=$transportation_a[$i];
            echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$transportation_b[$i]';
                            document.getElementById('$doc_id_2').value='$transportation_a[$i]';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>"; 
        }
        $doc_id_1="tra_r".strval($i+1)."_d1";
        $doc_id_2="tra_r".strval($i+1)."_d2";
        $doc_id_3="tra_r".strval($i+1)."_d3";
        $diff=$transportation_bud-$transportation_actual;
        echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$transportation_bud';
                            document.getElementById('$doc_id_2').value='$transportation_actual';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>";

        /*For default set value of transportation*/

        /*For default set value of misce_expenses*/
        $misce_expenses_b=$row['misce_expenses_b'];
        $misce_expenses_a=$row['misce_expenses_a'];

        $misce_expenses_b=explode("#", $misce_expenses_b);
        $misce_expenses_a=explode("#", $misce_expenses_a);
        
        $misce_expenses_bud=0;
        $misce_expenses_actual=0;
        for($i=0;$i<count($misce_expenses_b);$i++)
        {

            $doc_id_1="mis_r".strval($i+1)."_d1";
            $doc_id_2="mis_r".strval($i+1)."_d2";
            $doc_id_3="mis_r".strval($i+1)."_d3";
            $diff=$misce_expenses_b[$i]-$misce_expenses_a[$i];
            $misce_expenses_bud+=$misce_expenses_b[$i];
            $misce_expenses_actual+=$misce_expenses_a[$i];
            echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$misce_expenses_b[$i]';
                            document.getElementById('$doc_id_2').value='$misce_expenses_a[$i]';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>"; 
        }
        $doc_id_1="mis_r".strval($i+1)."_d1";
        $doc_id_2="mis_r".strval($i+1)."_d2";
        $doc_id_3="mis_r".strval($i+1)."_d3";
        $diff=$misce_expenses_bud-$misce_expenses_actual;
        echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$misce_expenses_bud';
                            document.getElementById('$doc_id_2').value='$misce_expenses_actual';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>";

        /*For default set value of misce_expenses*/

        /*For default set value of healthcare*/
        $healthcare_b=$row['healthcare_b'];
        $healthcare_a=$row['healthcare_a'];

        $healthcare_b=explode("#", $healthcare_b);
        $healthcare_a=explode("#", $healthcare_a);
        
        $healthcare_bud=0;
        $healthcare_actual=0;
        for($i=0;$i<count($healthcare_b);$i++)
        {

            $doc_id_1="heal_r".strval($i+1)."_d1";
            $doc_id_2="heal_r".strval($i+1)."_d2";
            $doc_id_3="heal_r".strval($i+1)."_d3";
            $diff=$healthcare_b[$i]-$healthcare_a[$i];
            $healthcare_bud+=$healthcare_b[$i];
            $healthcare_actual+=$healthcare_a[$i];
            echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$healthcare_b[$i]';
                            document.getElementById('$doc_id_2').value='$healthcare_a[$i]';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>"; 
        }
        $doc_id_1="heal_r".strval($i+1)."_d1";
        $doc_id_2="heal_r".strval($i+1)."_d2";
        $doc_id_3="heal_r".strval($i+1)."_d3";
        $diff=$healthcare_bud-$healthcare_actual;
        echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$healthcare_bud';
                            document.getElementById('$doc_id_2').value='$healthcare_actual';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>";

        /*For default set value of healthcare*/

         /*For default set value of budget*/
        $budget_b=$row['budget_b'];
        $budget_a=$row['budget_a'];

        $budget_b=explode("#", $budget_b);
        $budget_a=explode("#", $budget_a);
        
        $budget_bud=0;
        $budget_actual=0;
        for($i=0;$i<count($budget_b);$i++)
        {

            $doc_id_1="summary_r".strval($i+1)."_d1";
            $doc_id_2="summary_r".strval($i+1)."_d2";
            $doc_id_3="summary_r".strval($i+1)."_d3";
            if($i==0)
            {
            $diff=$budget_a[$i]-$budget_b[$i];
            }
            else
            {
            $diff=$budget_b[$i]-$budget_a[$i];
            }
            echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$budget_b[$i]';
                            document.getElementById('$doc_id_2').value='$budget_a[$i]';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>"; 
        }
        $budget_bud=$budget_b[0]-$budget_b[1];
        $budget_actual=$budget_a[0]-$budget_a[1];
        $doc_id_1="summary_r".strval($i+1)."_d1";
        $doc_id_2="summary_r".strval($i+1)."_d2";
        $doc_id_3="summary_r".strval($i+1)."_d3";
        $diff=$budget_actual-$budget_bud;
        echo "<script type='text/javascript'>
                            $(document).ready(function(){
                            document.getElementById('$doc_id_1').value='$budget_bud';
                            document.getElementById('$doc_id_2').value='$budget_actual';
                            document.getElementById('$doc_id_3').value='$diff';
                            
                            });
                            </script>";

        /*For default set value of budget*/


?>