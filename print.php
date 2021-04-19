<?php
include 'includes/db.php';
?>

<?php 

    if(isset($_GET['print'])){
        
        $details_id = $_GET['print'];
        
        
        
    }

?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP Print</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>User Data</h2>
      <table class="table table-bordered print">
        <thead>
          <tr>
            <th>S.No</th>
            <th>Product Name</th>
            <th>Store</th>
            <th>Datetime</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
          $user_qry="SELECT * FROM `store`where store_name='$details_id' ORDER by store_id DESC LIMIT 5  ";
          $user_res=mysqli_query($con,$user_qry);
          while($user_data=mysqli_fetch_array($user_res))
          {
             
             $store_name = $user_data['store_name'];
              $dateTime = $user_data['date_time'];
              $WorkDone = $user_data['Done'];

              $total_store=$user_data['total_store'];
              
              $get_products = "SELECT * FROM `product_categories` WHERE `p_cat_id`=$store_name ";
                                    
              $run_products = mysqli_query($con,$get_products);
              $row_customer = mysqli_fetch_array($run_products);
              $customer_name = $row_customer['p_cat_title'];
                                  
                                  
    
                                    
                                    
                                    
              $i++;

          ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $customer_name; ?></td>
            <td><?php echo $total_store; ?></td>
            <td><?php echo $dateTime; ?></td>
          </tr>
          <?php

          }
          ?>
        </tbody>
      </table>

      <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>