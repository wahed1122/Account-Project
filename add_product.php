

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Products </title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Products
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
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
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Category </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <select name="product_category" class="form-control"><!-- form-control Begin -->
                              
                              <option selected disabled> Select a Category Product </option>
                              
                              <?php 
                              
                              $get_p_cats = "select * from product_categories";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                  
                                  $p_cat_id = $row_p_cats['p_cat_id'];
                                  $p_cat_title = $row_p_cats['p_cat_title'];
                                  
                                  echo "
                                  
                                  <option value='$p_cat_id'> $p_cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Customer Name </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <select name="product_cat" class="form-control"><!-- form-control Begin -->
                              
                              <option selected disabled> Select a Customer Name </option>
                              
                              <?php 
                              
                              $get_p_cats = "select * from customers";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                  
                                  $customer_id = $row_p_cats['customer_id'];
                                  $customer_name = $row_p_cats['customer_name'];
                                  
                                  echo "
                                  
                                  <option value='$customer_id'> $customer_name </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->

                   
                   
                  <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product বস্তা </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_keywords" type="text" class="form-control" >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->





                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> বস্তা Price </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_sale" type="text" class="form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> payment </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_price" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                   
                  
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
   
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</body>
</html>




<?php 

if(isset($_POST['submit'])){
    
    $product_name = $_POST['product_category'];
    $product_id = $_POST['product_category'];
   $customer_id = $_POST['product_cat'];
   $dilars_id = $_POST['dilars_name'];
    $product_Payment = $_POST['product_price'];
    $product_qty = $_POST['product_keywords'];

    $product_Due = $_POST['product_sale'];
    $total = $product_qty*$product_Due;
 
 $insert_product ="INSERT INTO `product_sale`( `customer_id`, `Product Name`, `Payment`, `Due`, `Product_Qty`, `total`, `Date`) VALUES ('$customer_id','$product_name','$product_Payment','$product_Due','$product_qty','$total',Now())";

 
    

    $run_product = mysqli_query($con,$insert_product);
    
    $insert_product_sale ="INSERT INTO `production`( `production_name` , `Sale`) VALUES ('$product_name','$product_qty')";
$run_product_sale = mysqli_query($con,$insert_product_sale);

    if($run_product_sale){
        
        echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('index.php?add_product','_self')</script>";
        
    }
    
}

?>


