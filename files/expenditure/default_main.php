<?php

    $sql="select budget_a,budget_b from expenditure where home_id='".$_SESSION['homeid']."' and year='$selected_year'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0){
                
        while($row=mysqli_fetch_assoc($result))
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
                            	document.getElementById('net_profit_per').innerHTML=\"<div class='metric-label d-inline-block float-right text-success font-weight-bold'><span class='icon-circle-small icon-box-xs text-success bg-success-light'><i class='fa fa-fw fa-arrow-up'></i></span><span class='ml-1'>$net_profit_per_var%</span></div>\";
                            }
                            else
                            {
                            	
                            	document.getElementById('net_profit_per').innerHTML=\"<div class='metric-label d-inline-block float-right text-secondary font-weight-bold'><span class='icon-circle-small icon-box-xs text-secondary bg-secondary-light'><i class='fa fa-fw fa-arrow-down'></i></span><span class='ml-1'>$net_profit_per_var%</span></div>\";
                            }


                            $('#income_chart').hide();
                            $('#trans_chart').hide();
                            $('#home_chart').hide();
                            $('#daily_chart').hide();
                            $('#entertainment_chart').hide();
                            $('#health_chart').hide();
                            $('#child_chart').hide();
                            $('#misc_chart').hide();
                            $('#saving_chart').hide();
                            });
                            </script>";
            }
    }

    $income_bud=[0,0,0,0,0,0];
    $income_act=[0,0,0,0,0,0];
    $trans_bud=[0,0,0,0];
    $trans_act=[0,0,0,0];
    $home_bud=[0,0,0,0,0,0,0,0,0,0];
    $home_act=[0,0,0,0,0,0,0,0,0,0];
    $daily_bud=[0,0,0,0,0,0,0,0,0];
    $daily_act=[0,0,0,0,0,0,0,0,0];
    $enter_bud=[0,0,0,0,0,0,0];
    $enter_act=[0,0,0,0,0,0,0];
    $health_bud=[0,0];
    $health_act=[0,0];
    $child_bud=[0,0,0,0,0,0,0];
    $child_act=[0,0,0,0,0,0,0];
    $saving_bud=[0,0,0,0,0,0,0];
    $saving_act=[0,0,0,0,0,0,0];
    $misc_bud=[0,0,0,0,0,0];
    $misc_act=[0,0,0,0,0,0];

	//include income_bud'graph.php';
    //['Salary','Pension','Investment & Saving','Transfer From Saving','Income Tax Rate','Other']
    $sql="select * from expenditure where home_id='".$_SESSION['homeid']."' and year='$selected_year';";

    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        $row=mysqli_fetch_array($result);
        $data=$row['income_b'];
        $income_bud=explode("#",$data);
        $data=$row['income_a'];
        $income_act=explode("#",$data);
        
        $data=$row['transportation_b'];
        $trans_bud=explode("#",$data);
        $data=$row['transportation_a'];
        $trans_act=explode("#",$data);
        
        $data=$row['home_expenses_b'];
        $home_bud=explode("#",$data);
        $data=$row['home_expenses_a'];
        $home_act=explode("#",$data);
        
        $data=$row['daily_living_b'];
        $daily_bud=explode("#",$data);
        $data=$row['daily_living_a'];
        $daily_act=explode("#",$data);

        $data=$row['entertainment_b'];
        $enter_bud=explode("#",$data);
        $data=$row['entertainment_a'];
        $enter_act=explode("#",$data);

        $data=$row['healthcare_b'];
        $health_bud=explode("#",$data);
        $data=$row['healthcare_a'];
        $health_act=explode("#",$data);

        $data=$row['child_education_b'];
        $child_bud=explode("#",$data);
        $data=$row['child_education_a'];
        $child_act=explode("#",$data);

        $data=$row['saving_b'];
        $saving_bud=explode("#",$data);
        $data=$row['saving_a'];
        $saving_act=explode("#",$data);

        $data=$row['misce_expenses_b'];
        $misc_bud=explode("#",$data);
        $data=$row['misce_expenses_a'];
        $misc_act=explode("#",$data);

        
    }

    /*Income*/
    $select_tag_id='#chartselection_income';
    $chart='#income_chart';
    $draw='income_chart';
    $budget="[$income_bud[0], $income_bud[1], $income_bud[2], $income_bud[3], $income_bud[4], $income_bud[5]]";
    $actual="[$income_act[0], $income_act[1], $income_act[2], $income_act[3], $income_act[4], $income_act[5]]";
    $label="['Salary', 'Pension', 'Investment', 'from Saving', 'Income Tax', 'Other']";
    include 'add_graph.php';
    /*Income*/

    /*Transporation*/
    $select_tag_id='#chartselection_trans';
    $chart='#trans_chart';
    $draw='trans_chart';
    $budget="[$trans_bud[0], $trans_bud[1], $trans_bud[2], $trans_bud[3]]";
    $actual="[$trans_act[0], $trans_act[1], $trans_act[2], $trans_act[3]]";
    $label="['Vehicle Main.', 'Parking', 'Gasoline', 'Other']";
    include 'add_graph.php';
    /*Transporation*/

    /*Daily Living*/
    $select_tag_id='#chartselection_daily';
    $chart='#daily_chart';
    $draw='daily_chart';
    $budget="[$daily_bud[0], $daily_bud[1], $daily_bud[2], $daily_bud[3], $daily_bud[4], $daily_bud[5],$daily_bud[6], $daily_bud[7], $daily_bud[8]]";
    $actual="[$daily_act[0], $daily_act[1], $daily_act[2], $daily_act[3], $daily_act[4], $daily_act[5],$daily_act[6], $daily_act[7], $daily_act[8]]";
    $label="['Food','Cloth','Milk','Groceries','Cleaning','Dry cleaning','Per. Supply','Salon/Barber','Other']";
    include 'add_graph.php';
    /*Daily Living*/

    /*Home Expanses*/
    $select_tag_id='#chartselection_home';
    $chart='#home_chart';
    $draw='home_chart';
    $budget="[$home_bud[0], $home_bud[1], $home_bud[2], $home_bud[3], $home_bud[4], $home_bud[5],$home_bud[6], $home_bud[7], $home_bud[8], $home_bud[9]]";
    $actual="[$home_act[0], $home_act[1], $home_act[2], $home_act[3], $home_act[4], $home_act[5],$home_act[6], $home_act[7], $home_act[8], $home_act[9]]";
    $label="['Rent','Electricity','Gas','Water','Internet','TV','Appliance','Garden','Maintenance','Other']";
    include 'add_graph.php';
    /*Home Expanses*/

    /*Entertainment*/
    $select_tag_id='#chartselection_enter';
    $chart='#entertainment_chart';
    $draw='entertainment_chart';
    $budget="[$enter_bud[0], $enter_bud[1], $enter_bud[2], $enter_bud[3], $enter_bud[4], $enter_bud[5],$enter_bud[6]]";
    $actual="[$enter_act[0], $enter_act[1], $enter_act[2], $enter_act[3], $enter_act[4], $enter_act[5], $enter_act[6]]";
    $label="['Activities','Books','Games','Fun Stuff','Hobbies','Trip','Other']";
    include 'add_graph.php';
    /*Entertainment*/

    /*Health Care*/
    $select_tag_id='#chartselection_health';
    $chart='#health_chart';
    $draw='health_chart';
    $budget="[$health_bud[0], $health_bud[1]]";
    $actual="[$health_act[0], $health_act[1]]";
    $label="['Medical Charge','Medical Insurance']";
    include 'add_graph.php';
    /*Health Care*/

    /*Child Education*/
    $select_tag_id='#chartselection_child';
    $chart='#child_chart';
    $draw='child_chart';
    $budget="[$child_bud[0], $child_bud[1], $child_bud[2], $child_bud[3], $child_bud[4], $child_bud[5],$child_bud[6]]";
    $actual="[$child_act[0], $child_act[1], $child_act[2], $child_act[3], $child_act[4], $child_act[5], $child_act[6]]";
    $label="['Tuition Fees','School Supplies','Student loan','Child Care','Child Support','Hostel','Other']";
    include 'add_graph.php';
    /*Child Education*/

    /*Miscellaneous Expenses */
    $select_tag_id='#chartselection_misc';
    $chart='#misc_chart';
    $draw='misc_chart';
    $budget="[$misc_bud[0], $misc_bud[1], $misc_bud[2], $misc_bud[3], $misc_bud[4], $misc_bud[5]]";
    $actual="[$misc_act[0], $misc_act[1], $misc_act[2], $misc_act[3], $misc_act[4], $misc_act[5]]";
    $label="['Pet','Donations',' Sports','Tickets','Travel','Other']";
    include 'add_graph.php';
    /*Miscellaneous Expenses*/

    /*Income*/
    $select_tag_id='#chartselection_saving';
    $chart='#saving_chart';
    $draw='saving_chart';
    $budget="[$saving_bud[0], $saving_bud[1], $saving_bud[2], $saving_bud[3], $saving_bud[4], $saving_bud[5]]";
    $actual="[$saving_act[0], $saving_act[1], $saving_act[2], $saving_act[3], $saving_act[4], $saving_act[5]]";
    $label="['Emerg.','Car Repl.','Retire','Invest','Education','Other']";
    include 'add_graph.php';
    /*Income*/



?>
