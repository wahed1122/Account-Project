

<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_customer_order'])){
        
        $edit_id = $_GET['edit_customer_order'];
        
        $get_p = "SELECT * FROM `store` WHERE `store_id`='$edit_id'";
        
        $run_edit = mysqli_query($con,$get_p);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $total_store = $row_edit['total_store'];
        
        $Done = $row_edit['Done'];
        
        
       
        
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
                       
                      <label class="col-md-3 control-label"> Total Store </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="total_store" type="text" class="form-control" value="<?php echo $total_store; ?>" >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
>
                   
                  <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Work is Done </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="work_done" type="text" class="form-control" value="<?php echo $Done; ?>" >
                          
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
    
    $total_store = $_POST['total_store'];
    $work_done = $_POST['work_done'];


    
   $u_store = "UPDATE `store` SET `total_store`='$total_store',`Done`='$work_done' WHERE `store_id`='$edit_id'";


  $run_store = mysqli_query($con,$u_store);
        
   if($run_store){
            
   echo "<script>alert('Your Store has been updated Successfully')</script>"; 
            
       echo "<script>window.open('index.php?view_cats','_self')</script>"; 
            
     }
        
    
    
}

?>


<?php } ?>