<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php

if(isset($_GET['confirm_order'])){
	$confirm_order = $_GET['confirm_order'];
	$status = "complete";
	$update = "UPDATE `customer_orders` SET `order_status`='$status' WHERE `order_id`='$confirm_order'";
	$run_update = mysqli_query($con,$update );

    $order=" SELECT * FROM `customer_orders` WHERE `order_id`='$confirm_order' ";
     $run_order= mysqli_query($con,$order);
                                       
 while($row_oder = mysqli_fetch_array($run_order)){
    $order_id = $row_oder['order_id'];
    $customer_id = $row_oder['customer_id'];
    $invoice_no = $row_oder['invoice_no'];
    $product_id = $row_oder['product_id'];
    $qty = $row_oder['qty'];
    $size = $row_oder['size'];
    $details_address = $row_oder['details_address'];
    $post_orrice = $row_oder['post_office'];
    $order_status = $row_oder['order_status'];
    $order_status = $row_oder['order_status'];
    $Amount = $row_oder['due_amount'];

    $complete="INSERT INTO `complete`(`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`,`Amount`, `details_address`, `post_orrice`, `order_status`) VALUES ('$order_id','$customer_id','$invoice_no','$product_id','$qty','$Amount','$details_address','$post_orrice','$order_status')";
    $run_complete= mysqli_query($con,$complete);
    $delete_orders = "DELETE FROM `customer_orders` WHERE `order_id`='$confirm_order'";
    $run_Delete_customer=mysqli_query($con,$delete_orders);
	if($run_Delete_customer){
		echo "<script>alert('One of your costumer order has been update')</script>";
            
        echo "<script>window.open('index.php?view_orders','_self')</script>";
	}
}}

?>
<?php } ?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Orders
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Orders
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->