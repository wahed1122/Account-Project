<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_customer_product'])){
        
        $delete_sale_id = $_GET['delete_customer_product'];
        
        $delete_slide = "DELETE FROM `product_sale` WHERE `Sale_Id`='$delete_sale_id'";
        
        $run_delete = mysqli_query($con,$delete_slide);
        
        if($run_delete){
            
            echo "<script>alert('One of Your Slide Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_customers','_self')</script>";
            
        }
        
    }

?>




<?php } ?>