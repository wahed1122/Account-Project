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
                                <th> SL </th>
                                <th> CH </th>
                                <th> CH_W </th>
                                <th> SW </th>

                                <th> Date </th>
                                 <?php if($_SESSION['Role']=='Store'){?>
                                <th>Delete</th>
                            <?php }?>

                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            
                            
                               
 

                                $get_entry = "SELECT * FROM `trak_entry`";
          
                                $run_entry = mysqli_query($con,$get_entry);
                                
                                while($row_entry=mysqli_fetch_array($run_entry)){
                                    
                                    $SL = $row_entry['sl'];
                                    $ch = $row_entry['ch'];
                                    $ch_w = $row_entry['ch_w'];
                                    $s_w = $row_entry['s_w'];
                                    $date = $row_entry['date'];
                                    
                                    
                                    
                                   
                                     
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $SL; ?> </td>
                                <td> <?php echo $ch; ?> </td>
                                <td> <?php echo $ch_w; ?> </td>
                                <td> <?php echo $s_w; ?> </td>
                              
                               
                                <td> 
                                    <?php echo $date; ?>
                                </td>
                                 <?php if($_SESSION['Role']=='Store'){?>
                                <td>
                                     <a href="index.php?delete_entry=<?php echo $SL; ?>">
                                     
                                        <i class="btn btn-danger">Delete</i> 
                                    
                                     </a> 
                                </td>
                            <?php }?>
                            </tr><!-- tr finish -->

                           
                             <?php }?>  
                        
                        
                        </tbody><!-- tbody finish -->

                        

                    </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php } ?>