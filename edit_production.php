

<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_production'])){
        
        $edit_id = $_GET['edit_production'];
        
        $get_p = "SELECT * FROM `production` WHERE `production_id`='$edit_id'";
        
        $run_edit = mysqli_query($con,$get_p);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $worked_out = $row_edit['worked_out'];
        $product_completed = $row_edit['product_completed'];
        
        $system_lost = $row_edit['system_lost'];
        
        
       
        
    }
        
        

?>

<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Insert Store 
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Worked Out </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="worked_out" type="text" class="form-control" value="<?php echo $worked_out; ?>" >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                    <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Complete Work </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_completed" type="text" class="form-control" value="<?php echo $product_completed; ?>" >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                  <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> System Lost </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="system_lost" type="text" class="form-control" value="<?php echo $system_lost; ?>" >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
 
                   
                   
                   
                   
                  
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="submit" value="Update Product" type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->


<?php 

if(isset($_POST['submit'])){
    
    $worked_out = $_POST['worked_out'];
    $product_completed = $_POST['product_completed'];
    $system_lost = $_POST['system_lost'];


    $production_update = "UPDATE `production` SET `worked_out`='$worked_out',`product_completed`='$product_completed',`system_lost`='$system_lost' WHERE `production_id`='$edit_id'";
   // $production_update = "UPDATE `store` SET `total_store`='$total_store',`Done`='$work_done' WHERE `store_id`='$edit_id'";


  $run_production = mysqli_query($con,$production_update);
        
   if($run_production){
            
   echo "<script>alert('Your Production has been updated Successfully')</script>"; 
            
       echo "<script>window.open('index.php?view_slides','_self')</script>"; 
            
     }
        
    
    
}

?>


<?php } ?>