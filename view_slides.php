<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / View Store
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> View Store
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Product ID </th>
                                <th> Product Name </th>
                                <th> View </th>

                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            
                            
                               
                               
                                $get_p_cats = "SELECT * FROM `product_categories`";
          
                                $run_p_cats = mysqli_query($con,$get_p_cats);
                                
                                while($row_cats=mysqli_fetch_array($run_p_cats)){
                                    
                                    $p_cat_id = $row_cats['p_cat_id'];
                                    
                                    $p_cat_title = $row_cats['p_cat_title'];
                                    
                                   
                                    
                                 
                                    
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $p_cat_id; ?> </td>
                                <td> <?php echo $p_cat_title; ?> </td>
                                

                                <td> 
                                    <a href="index.php?details_production=<?php echo $p_cat_id; ?> ">
                                        <i class="btn btn-primary">View</i> 
                                    </a>
                                </td>
                           
                            </tr><!-- tr finish -->

                           
                                <?php } ?>


                        
                        
                        </tbody><!-- tbody finish -->
                         <?php 
                            $total_sale=0;
                            $total_complete_production=0;
                            $total_completed_production=0;
                            $total_product_sake=0;
                            $total_completed_production_Ton=0;

                              $i=0;
                              $get_production = "SELECT * FROM `production` ";
    
                                
                                
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
                                   $total_completed_production_Ton=$total_completed_production/20;
                                   
}
                                   
                                   ?>
                                   <td style="font-size: 25px; color: blue">Total Production</td>
                                   <td style="font-size: 25px; color: blue"><?php echo $total_completed_production; ?> বস্তা  = <?php echo $total_completed_production_Ton ?> Ton</td>
                        
                    </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php } ?>