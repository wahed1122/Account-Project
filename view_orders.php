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
                                <th> Store ID </th>
                                <th> Store Name </th>
                                <th> Total Store </th>

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
                                    <a href="index.php?details_product_store=<?php echo $p_cat_id; ?> ">
                                        <i class="btn btn-primary">View</i> 
                                    </a>
                                </td>
                           
                            </tr><!-- tr finish -->

                           
                                <?php } ?>

                                
                                <?php 
                                $total_store_product=0;
                                $done_store=0;
                                $total_store_inverse_done=0;

                                $get_store="SELECT * FROM `store`";
                                    $run_store = mysqli_query($con,$get_store);
                                    while($row_store=mysqli_fetch_array($run_store)){
                                        $total_store=$row_store['total_store'];
                                        $done = $row_store['Done'];
                                        $total_store_product+=$total_store;
                                        $done_store +=$done;
                                        $total_store_inverse_done=$total_store_product-$done_store;

                                 
                                  } ?>
                                  <th > Total Store </th>
                                <td> <?php echo $total_store_inverse_done; ?> </td>
                        

                        
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php } ?>