<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_production'])){
        
        $delete_id = $_GET['delete_production'];
        
        $delete_pro = "DELETE FROM `production` WHERE `production_id`='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('One of your production has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_slides','_self')</script>";
            
        }
        
    }

?>

<?php } ?>