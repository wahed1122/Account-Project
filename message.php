<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / View Message
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> View Message
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th>  Id </th>
                                <th> Message Name </th>
                                <th> Message </th>
                                <th> Date Time </th>
                                <th> Delete </th>

                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            
                            
                               $i=0;
                               
                                $get_message = "SELECT * FROM `message`";
          
                                $run_message = mysqli_query($con,$get_message);
                                
                                while($row_cats=mysqli_fetch_array($run_message)){

                                    $message_id=$row_cats['message_id'];

                                    
                                    $message_name = $row_cats['name'];
                                    $message = $row_cats['message'];
                                    $datetime = $row_cats['datetime'];
                                    
                                   
                                    
                                 $i++;
                                    
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $message_name; ?> </td>
                                <td> <?php echo $message; ?> </td>
                                <td> <?php echo $datetime; ?> </td>
                                <td> 
                                    <a href="index.php?delete_message=<?php echo $message_id; ?> ">
                                         <i class="btn btn-danger"> Delete</i>
                                    </a>
                                </td>

                              
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




<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>



<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-money fa-fw"></i> Message Reply
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                  

                     
                    
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Name
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="name" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->


                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Message
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        


                            <textarea name="message" class="form-control" rows="5" ></textarea>
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->

                    

                    
                    

                    
                    
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value="Send Message" name="submit" type="submit" class="form-control btn btn-primary">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php  

          if(isset($_POST['submit'])){
              
              
              $message_name = $_POST['name'];
              
              $message = $_POST['message'];
              

$insert_store = "INSERT INTO `message`(`name`, `message`, `datetime`) VALUES ('$message_name','$message',Now())";

              



              // $insert_store = "INSERT INTO `store`( `store_name`, `total_store`,date_time) VALUES ('$store_name','$total_store',Now())";
              
              
              $run_store = mysqli_query($con,$insert_store);
              
              if($run_store){
                  
                  echo "<script>alert('Your New Store Has Been Inserted')</script>";
                  
                  echo "<script>window.open('index.php?message','_self')</script>";
                  
              }
              
          }

?>

<?php } ?>