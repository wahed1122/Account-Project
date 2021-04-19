         <?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['details_product_store'])){
        
        $details_id = $_GET['details_product_store'];
        
        
        
    }

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Store
                
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
                                <th> Store Id: </th>
                                <th> Store Name: </th>

                                <th>Total Store : </th>
                                <th>Work Done : </th>
                                <th>Date Time : </th>
                                <th>Delete</th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            $Total_store_product=0;
                            $total_workdone=0;
                            $total_store_product_inverse_workDone=0;
                              $i=0;
                              $get_orders = "SELECT * FROM `store` WHERE `store_name`=$details_id";
                                
                                
                                $run_orders = mysqli_query($con,$get_orders);
          
                                while($row_order=mysqli_fetch_array($run_orders)){

                                    $store_id = $row_order['store_id'];
                                    $store_name = $row_order['store_name'];
                                    $dateTime = $row_order['date_time'];
                                    $WorkDone = $row_order['Done'];

                                  $total_store=$row_order['total_store'];
                                  $Total_store_product+=$total_store;
                                  $total_workdone+=$WorkDone;
                                  $total_store_product_inverse_workDone=$Total_store_product-$total_workdone;
                                  $get_products = "SELECT * FROM `product_categories` WHERE `p_cat_id`=$details_id ";
                                    
                                   $run_products = mysqli_query($con,$get_products);
                                    $row_customer = mysqli_fetch_array($run_products);
                                    $customer_name = $row_customer['p_cat_title'];
                                  
                                  
    
                                    
                                    
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $store_name; ?> </td>
                                <td> <?php echo $customer_name; ?> </td>
                                <td> <?php echo $total_store; ?> Ton</td>
                                <td> <?php echo $WorkDone; ?> Ton</td>
                                <td> <?php echo $dateTime; ?></td>
                               
                                
                                <td> 
                                     <?php if($_SESSION['Role']=='Store'){?>

                                    

                                     <a href="index.php?edit_customer_order=<?php echo $store_id; ?>">
                                     
                                        <i class="btn btn-info">Edit</i> 
                                    
                                     </a> 
                 
                                     
                                </td>
                                <td>
                                     <a href="index.php?delete_customer_order=<?php echo $store_id; ?>">
                                     
                                        <i class="btn btn-danger">Delete</i> 
                                    
                                     </a> 
                                </td>
                                <td>
                                     <a href="print.php?print=<?php echo $store_id; ?>">
                                     
                                        <i class="btn btn-danger">Print</i> 
                                    
                                     </a> 
                                </td>
                                 <?php } ?>
                            </tr><!-- tr finish -->

                            
                            <?php  } ?>
                           
                        </tbody><!-- tbody finish -->
                        <tfoot style="font-size: 20px; color: red;">
                            <tr><!-- tr begin -->
                                <th colspan="4">Total Work Done</th>
                                <td colspan="2"> = <?php echo $total_workdone; ?> Ton</td>
                               
                                
                                
                  
                                     
                                
                            </tr><!-- tr finish -->
                            <tr><!-- tr begin -->
                                <th colspan="4">Total Store</th>
                                <td colspan="2"> = <?php echo $Total_store_product; ?> - <?php echo $total_workdone;?> Ton</td>
                               
                                
                                
                  
                                     
                                
                            </tr><!-- tr finish -->
                             <tr><!-- tr begin -->
                                <th colspan="4">Total Store</th>
                                <td colspan="2"> = <?php echo $total_store_product_inverse_workDone; ?> Ton</td>
                               
                                
                                
                  
                                     
                                
                            </tr><!-- tr finish -->
                        </tfoot>
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->


            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>