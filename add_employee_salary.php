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
                
                    <i class="fa fa-money fa-fw"></i> Insert Employee Salary 
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                  

                     <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Dilars Name </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <select name="employee_name" class="form-control"><!-- form-control Begin -->
                              
                              <option selected disabled> Select a Employee Name </option>
                              
                              <?php 
                              
                              $get_p_cats = "SELECT * FROM `employees`";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                  
                                  $employee_id = $row_p_cats['employee_id'];
                                  $employee_name = $row_p_cats['employee_name'];
                                  
                                  echo "
                                  
                                  <option value='$employee_id'> $employee_name </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                    
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Employee Salary
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="employee_salary" type="text" class="form-control">
                        
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
              
              
              $employee_id = $_POST['employee_name'];
              
              $employee_salary = $_POST['employee_salary'];
              
              
$insert_store = "INSERT INTO `employee_salary`(`employee_name`,`employee_salary`,date_time) VALUES ('$employee_id','$employee_salary',Now())";


              // $insert_store = "INSERT INTO `store`( `store_name`, `total_store`,date_time) VALUES ('$store_name','$total_store',Now())";
              
              
              $run_store = mysqli_query($con,$insert_store);
              
              if($run_store){
                  
                  echo "<script>alert('Your New Store Has Been Inserted')</script>";
                  
                  echo "<script>window.open('index.php?view_employee','_self')</script>";
                  
              }
              
          }

?>

<?php } ?>