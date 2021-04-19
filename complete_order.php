<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Complete Orders
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  Complete Orders
                
               </h3><!-- panel-title finish --> 
			  
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> Customer Email: </th>
                                 <th> Contact Number: </th>

                                <th> Product Name: </th>
                                <th> Product Qty: </th>

                                <th> Total Amount: </th>
                                <th> Details Address: </th>
                                <th> Post Office: </th>
                                <th> Status: </th> 
                                <th>Delete</th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                                $total=0;
          
                                $i=0;
                            
                                $get_orders = "select * from complete";
                                
                                $run_orders = mysqli_query($con,$get_orders);
          
                                while($row_order=mysqli_fetch_array($run_orders)){
                                    
                                    $order_id = $row_order['order_id'];
                                    
                                    $c_id = $row_order['customer_id'];
                                    

                                    
                                    $product_id = $row_order['product_id'];
                                    
                                    $qty = $row_order['qty'];

                                    
                                    $order_amount = $row_order['Amount'];
                                    $details_address = $row_order['details_address'];
                                    $post_office = $row_order['post_orrice'];
                                    
                                    $order_status = $row_order['order_status'];
                                    
                                    $get_products = "select * from products where product_id='$product_id'";
                                    
                                    $run_products = mysqli_query($con,$get_products);
                                    
                                    $row_products = mysqli_fetch_array($run_products);
                                    
                                    $product_title = $row_products['product_title'];
                                    
                                    $get_customer = "select * from customers where customer_id='$c_id'";
                                    
                                    $run_customer = mysqli_query($con,$get_customer);
                                    
                                    $row_customer = mysqli_fetch_array($run_customer);
                                    
                                    $customer_email = $row_customer['customer_email'];
                                    $contuct_number = $row_customer['customer_contact'];
                                    $total+=$order_amount;

                                    
                                    
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $customer_email; ?> </td>
                                <td> <?php echo $contuct_number; ?></td>
                                <td> <?php echo $product_title; ?> </td>
                                <td> <?php echo $qty; ?></td>
                                
                                <td>BDT <?php echo $order_amount; ?> </td>
                                <td> <?php echo $details_address; ?> </td>
                                <td> <?php echo $post_office; ?> </td>
                                <td>
                                    
                                    <?php 
                                    
                                        if($order_status=='pending'){
                                            
                                            echo $order_status='pending';
                                            
                                        }else{
                                            
                                            echo $order_status='Complete';
                                            
                                        }
                                    
                                    ?>
                                    
                                </td>
                                
                                <td> 
                                     
                                     <a href="index.php?delete_complete_order=<?php echo $order_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
									
                                     
                                </td>
                            </tr><!-- tr finish -->

                            
                            <?php  } ?>
                            
                        </tbody><!-- tbody finish -->
                        <tfoot style="font-size: 20px; color: red;">
                            <tr>
                                <th colspan="5">Total</th>
                                <th colspan="2"> = <?php echo $total ?> TaKa</th>
                            </tr>
                        </tfoot>
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>