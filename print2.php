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
            <th> No: </th>
                                <th> Customer <br> Email: </th>

                                <th> Product <br> Name: </th>
                                <th> Product <br> বস্তা: </th>
                                <th> Per বস্তা <br> Price: </th>
                                <th> Total: </th>
                                <th > Payment: </th>
                               
                                <th> Date: </th>
                                
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
          $user_qry="SELECT * FROM `product_sale`where customer_id='$details_id' ORDER by Sale_Id DESC LIMIT 5  ";
          $user_res=mysqli_query($con,$user_qry);
          while($user_data=mysqli_fetch_array($user_res))
          {
             
             $product_sale_id = $user_data['Sale_Id'];

              $product_name=$user_data['Product Name'];
              $product_qty=$user_data['Product_Qty'];
              $per_price=$user_data['Due'];
              $Payment=$user_data['Payment'];
              $Date=$user_data['Date'];;
              $total = $product_qty*$per_price;
              
              $get_products = "SELECT * FROM `product_categories` WHERE `p_cat_id`=$product_name ";
                                    
              $run_products = mysqli_query($con,$get_products);
              $row_customer = mysqli_fetch_array($run_products);
              $product_names = $row_customer['p_cat_title'];

              $get_products = "select * from  customers WHERE `customer_id`=$details_id ";
                                    
              $run_products = mysqli_query($con,$get_products);
              $row_customer = mysqli_fetch_array($run_products);
              $customer_name = $row_customer['customer_name'];

                                  
                                  
    
                                    
                                    
                                    
              $i++;

          ?>
          <tr>
            <td> <?php echo $i; ?> </td>
                                <td> <?php echo $customer_name; ?> </td>
                                <td> <?php echo $product_names; ?> </td>
                                <td> <?php echo $product_qty; ?></td>
                                <td> <?php echo $per_price; ?> </td>
                                <td> <?php echo $total; ?> Taka</td>
                                <td> <?php echo $Payment; ?> Taka</td>
                                <td> <?php echo $Date; ?> </td>
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