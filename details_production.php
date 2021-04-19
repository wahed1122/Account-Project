<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['details_production'])){
        
        $details_id = $_GET['details_production'];
        
        
        
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
                                <th> Production <br> Name: </th>
                                <th>Product : </th>
                                <th>Complete <br> Production : </th>
                                <th>বস্তা  : </th>
                                <th>Sale : </th>
                                <th>Date Time : </th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            $total_sale=0;
                            $total_complete_production=0;
                            $total_completed_production=0;
                            $total_product_sake=0;
                            $total_completed_production_Ton=0;

                              $i=0;
                              $get_production = "SELECT * FROM `production` WHERE `production_name`=$details_id";
    
                                
                                
                                $run_production = mysqli_query($con,$get_production);
          
                                while($row_production=mysqli_fetch_array($run_production)){

                                    $production_id = $row_production['production_id'];
                                    $production_name = $row_production['production_name'];
                                    $product = $row_production['worked_out'];
                                    $product_completed = $row_production['product_completed'];
                                    $system_lost = $row_production['system_lost'];
                                    $Sale = $row_production['Sale'];
                                    $dateTime = $row_production['date'];
                                    
                                    $total_sale+=$Sale;
                                    $total_sale_ton = $total_sale/20;

                                   $total_complete_production+=$product_completed;
                                   $product_sake=$product_completed*20;
                                   $total_product_sake+=$product_sake;
                                   $Product_ton=$total_product_sake/20;

                                   $total_completed_production=$total_product_sake-$total_sale;

                                   

                                   
                                   

                                   $total_completed_production_Ton = $total_completed_production/20;


                                  $get_products = "SELECT * FROM `product_categories` WHERE `p_cat_id`=$details_id ";
                                    
                                   $run_products = mysqli_query($con,$get_products);
                                    $row_customer = mysqli_fetch_array($run_products);
                                    $customer_name = $row_customer['p_cat_title'];
                                  
                                  
    
                                    
                                    
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $customer_name; ?> </td>
                                <td> <?php echo $product; ?> Ton</td>
                                <td> <?php echo $product_completed; ?> Ton</td>
                                <td> <?php echo $product_sake; ?> বস্তা</td>
                                <td> <?php echo $Sale; ?> বস্তা </td>
                                <td> <?php echo $dateTime; ?></td>
                               
                                
                                <td> 
                                    <?php if($_SESSION['Role']=='Production'){?>
                                      <a href="index.php?edit_production=<?php echo $production_id; ?>">
                                     
                                         <i class="btn btn-info">Edit</i>
                                    
                                     </a>
                                 </td>
                                     <td> 

                                     


                                     <a href="index.php?delete_production=<?php echo $production_id; ?>">
                                     
                                        <i class="btn btn-danger"> Delete</i>
                                    
                                     </a>
                  <?php }?>

                                     
                                </td>
                            </tr><!-- tr finish -->

                            
                            <?php  } ?>
                           
                        </tbody><!-- tbody finish -->
                        <tfoot style="font-size: 20px; color: red;">
                            

                       <tr><!-- tr begin -->
                                <th colspan="4"> Production</th>
                                <td colspan="2"> = <?php echo $total_product_sake?> বস্তা = <?php echo $Product_ton ?> Ton</td>
                               
                                
                                
                  
                                     
                                
                            </tr><!-- tr finish -->

                            <tr><!-- tr begin -->
                                <th colspan="4">Sale Product</th>
                                <td colspan="2"> = <?php echo $total_sale; ?> বস্তা = <?php echo $total_sale_ton ?> Ton</td>
                               
                                
                                
                  
                                     
                                
                            </tr><!-- tr finish -->


                            <tr><!-- tr begin -->
                                <th colspan="4">Total Production</th>
                                <td colspan="2"> = <?php echo $total_product_sake; ?> বস্তা - <?php echo $total_sale;?> বস্তা</td>
                               
                                
                                
                  
                                     
                                
                            </tr><!-- tr finish -->
                             <tr><!-- tr begin -->
                                <th colspan="4">Total Completed Production</th>
                                <td colspan="2"> = <?php echo $total_completed_production; ?> বস্তা  = <?php echo $total_completed_production_Ton ?> Ton</td>
                               
                                
                                
                  
                                     
                                
                            </tr><!-- tr finish -->
                        </tfoot>
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->


            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>