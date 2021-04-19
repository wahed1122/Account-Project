<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['employee_salary_details'])){
        
        $details_id = $_GET['employee_salary_details'];
        
        
        
    }

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Employee Salary
                
            </li><!-- active finish -->

            <li class="active"><!-- active begin -->
                
                <a href="index.php?dashboard"><i class="fa fa-dashboard"></i> Dashboard </a>
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  Store
                
               </h3><!-- panel-title finish --> 
        
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> Employee Name: </th>

                                <th>Employee Salary : </th>
                                <th>Date Time : </th>

                                <th>Delete</th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            
                              $i=0;
                              $get_orders = "SELECT * FROM `employee_salary` WHERE `employee_name`=$details_id";
                                
                                
                                $run_orders = mysqli_query($con,$get_orders);
          
                                while($row_order=mysqli_fetch_array($run_orders)){

                                    $employee_salary = $row_order['employee_salary'];
                                    $employee_name = $row_order['employee_name'];
                                    $date_time   = $row_order['date_time'];
                                    $employee_salary_id = $row_order['employee_salary_id'];
                                    
                                    
                                  $get_products = "SELECT * FROM `employees` WHERE `employee_id`=$employee_name ";
                                    
                                   $run_products = mysqli_query($con,$get_products);
                                    $row_customer = mysqli_fetch_array($run_products);
                                    $employee_names = $row_customer['employee_name'];
                                  
                                  
    
                                    
                                    
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $employee_names; ?> </td>
                                <td> <?php echo $employee_salary; ?> Taka</td>

                                
                                <td> <?php echo $date_time; ?></td>
                               
                                
                                <td> 
                                     <?php if($_SESSION['Role']=='Accounting'){?>

                                     <a href="index.php?delete_employee_salary=<?php echo $employee_salary_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 

                                     
                  <?php }?>
                                     
                                </td>
                            </tr><!-- tr finish -->

                            
                            <?php  } ?>
                           
                        </tbody><!-- tbody finish -->
                       
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->


            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>