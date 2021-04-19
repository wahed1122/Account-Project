<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / View Others
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> View Others
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Others Name </th>
                                <th> Others Amount </th>
                                <th> Date Time </th>

                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            
                            
                               
                               
                                $get_p_cats = "SELECT * FROM `others`";
          
                                $run_p_cats = mysqli_query($con,$get_p_cats);
                                
                                while($row_cats=mysqli_fetch_array($run_p_cats)){
                                    
                                    $others_name = $row_cats['others_name'];
                                    
                                    $Amount = $row_cats['Amount'];
                                    $datetime = $row_cats['datetime'];
                                    
                                   
                                    
                                 
                                    
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $others_name; ?> </td>
                                <td> <?php echo $Amount; ?> </td>
                                <td> <?php echo $datetime; ?> </td>

                              
                            </tr><!-- tr finish -->

                           
                                <?php } ?>


                        
                        
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php } ?>