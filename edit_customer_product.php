<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_customer_product'])){
        
        $edit_id = $_GET['edit_customer_product'];
        
        $get_p = "select * from product_sale where Sale_Id='$edit_id'";
        
        $run_edit = mysqli_query($con,$get_p);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $p_name = $row_edit['Product Name'];
        
        $p_Qty = $row_edit['Product_Qty'];
        $payment = $row_edit['Payment'];
        
       
        
    }
        
        

?>

<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Insert Product 
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                  
                   
>
                   
                  <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Qty </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_qty" type="text" class="form-control" value="<?php echo $p_Qty; ?>" >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
 
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> payment </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_price" type="text" class="form-control" value="<?php echo $payment; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                   
                  
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="update" value="Update Product" type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->


<?php 

if(isset($_POST['update'])){
    
    $product_name = $_POST['product_name'];
    $product_qty = $_POST['product_qty'];
    $product_price = $_POST['product_price'];
    
$update_product = "UPDATE `product_sale` SET `Product Name`='$product_name',`Payment`='$product_price',`Product_Qty`='$product_qty' WHERE Sale_Id='$edit_id' ";

    $run_product = mysqli_query($con,$update_product);
        
    if($run_product){
            
        echo "<script>alert('Your product has been updated Successfully')</script>"; 
            
        echo "<script>window.open('index.php?view_customers','_self')</script>"; 
            
    }
        
    
    
}

?>


<?php } ?>