

<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_customer_order'])){
        
        $delete_id = $_GET['delete_customer_order'];
        
        $delete_c = "DELETE FROM `store` WHERE `store_id`='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_c);
        
        if($run_delete){
            
            echo "<script>alert('One of your costumer has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_cats','_self')</script>";
            
        }
        
    }

?>

<?php } ?>