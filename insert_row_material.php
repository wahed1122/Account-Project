<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Store
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-money fa-fw"></i> Insert Store 
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> RM  Category </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <select name="product_cat" class="form-control"><!-- form-control Begin -->
                              
                              <option selected disabled> Select a Category RM </option>
                              
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
                       
                      <label class="col-md-3 control-label"> Dilars Name </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <select name="dilars_name" class="form-control"><!-- form-control Begin -->
                              
                              <option selected disabled> Select a Dilars Name </option>
                              
                              <?php 
                              
                              $get_p_cats = "SELECT * FROM `dilars`";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                  
                                  $dilars_id = $row_p_cats['dilars_id'];
                                  $dilars_name = $row_p_cats['dilars_name'];
                                  
                                  echo "
                                  
                                  <option value='$dilars_id'> $dilars_name </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                    
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Total RM  (Ton)
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="total_store" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->

                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                             Amount per Ton
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="amount_per_ton" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->

                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Paid Amount
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="paid_amount" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    

                    
                    
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value="Submit Category" name="submit" type="submit" class="form-control btn btn-primary">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php  

          if(isset($_POST['submit'])){
              
              $total_amount=0;
              $store_name = $_POST['product_cat'];
              $dilars_id = $_POST['dilars_name'];
              
              $total_store = $_POST['total_store'];
              $amount_per_ton = $_POST['amount_per_ton'];
              $paid_amount = $_POST['paid_amount'];
              $total_amount=$amount_per_ton*$total_store;
              
$insert_store = "INSERT INTO `store`(dilars_id,`store_name`, `total_store`, `amount_per_ton`, `paid_amount`, `total_amount`, `date_time`) VALUES ('$dilars_id','$store_name','$total_store','$amount_per_ton','$paid_amount','$total_amount',Now())";


              // $insert_store = "INSERT INTO `store`( `store_name`, `total_store`,date_time) VALUES ('$store_name','$total_store',Now())";
              
              
              $run_store = mysqli_query($con,$insert_store);
              
              if($run_store){
                  
                  echo "<script>alert('Your New Store Has Been Inserted')</script>";
                  
                  echo "<script>window.open('index.php?view_row_material','_self')</script>";
                  
              }
              
          }

?>

<?php } ?>