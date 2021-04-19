<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['details_customer'])){
        
        $details_id = $_GET['details_customer'];
        
        
        
    }

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Complete Orders
                
            </li><!-- active finish -->

            <li class="active"><!-- active begin -->
                
                <a href="add_product.php"><i class="fa fa-dashboard"></i> Add_product </a>
                
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
                                <th> Customer <br> Email: </th>

                                <th> Product <br> Name: </th>
                                <th> Product <br> বস্তা: </th>
                                <th> Per বস্তা <br> Price: </th>
                                <th> Total: </th>
                                <th > Payment: </th>
                                <th> Balance: </th>
                                <th> Date: </th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            $total_price=0;
                            $total_due=0;
                            $total_paymet=0;
                            $total_balance=0;
                              $i=0;
                                $get_orders = "SELECT * FROM `product_sale` WHERE `customer_id`=$details_id";
                                
                                $run_orders = mysqli_query($con,$get_orders);
          
                                while($row_order=mysqli_fetch_array($run_orders)){


                                  $product_sale_id = $row_order['Sale_Id'];

                                  $product_name=$row_order['Product Name'];
                                  $product_qty=$row_order['Product_Qty'];
                                  $per_price=$row_order['Due'];
                                  $Payment=$row_order['Payment'];
                                  $Date=$row_order['Date'];
                                  $total = $product_qty*$per_price;
                                  $Due = $total-$Payment;
                                  $total_price+=$total;
                                  $total_due += $Due;
                                  $total_paymet +=$Payment;
                                  $total_balance+=$Due;

                                  

                                   $get_products = "SELECT * FROM `product_categories`where p_cat_id='$product_name'";
                                   $run_product = mysqli_query($con,$get_products);
                                    $row_custome = mysqli_fetch_array($run_product);
                                    $product_names = $row_custome['p_cat_title'];


                                  $get_products = "select * from  customers WHERE `customer_id`=$details_id ";
                                    
                                   $run_products = mysqli_query($con,$get_products);
                                    $row_customer = mysqli_fetch_array($run_products);
                                    $customer_name = $row_customer['customer_name'];


                                   
                                    
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $customer_name; ?> </td>
                                <td> <?php echo $product_names; ?> </td>
                                <td> <?php echo $product_qty; ?></td>
                                <td> <?php echo $per_price; ?> </td>
                                <td> <?php echo $total; ?> Taka</td>
                                <td> <?php echo $Payment; ?> Taka</td>
                                <td> <?php echo $Due; ?> Taka</td>
                                <td> <?php echo $Date; ?> </td>
                                
                                <td> 
                                     <?php 
                                     if($_SESSION['Role']=='Accounting'){?>
                                    

                                     <a href="index.php?edit_customer_product=<?php echo $product_sale_id; ?>">
                                     
                                        <i class="btn btn-info">Edit</i> 
                                    
                                     </a> 
                                   </td>
                                     <td> 
                                       <a href="index.php?delete_customer_product=<?php echo $product_sale_id; ?>">
                                     
                                        <i class="btn btn-danger"> Delete</i>
                                    
                                     </a>
                  <?php }?>
                                     
                                </td>
                            </tr><!-- tr finish -->

                            
                            <?php  } ?>
                            
                        </tbody><!-- tbody finish -->



                            <tr style="font-size: 20px; color: red;">
                                <th colspan="3">Total Amount</th>
                                <th colspan="3"> = <?php echo $total_price; ?> TaKa</th>
                            </tr>

                             <tr style="font-size: 20px; color: red;">
                                <th colspan="5">Total Payment</th>
                                <th colspan="2"> = <?php echo $total_paymet; ?> TaKa</th>
                            </tr>


                            <tr style="font-size: 20px; color: red;">
                                <th colspan="5">Total Balance</th>
                                <th colspan="4"><?php echo $total_balance ?> TaKa</th>
                            </tr>


                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->


            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>