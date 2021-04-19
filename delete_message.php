<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_message'])){
        
        $delete_id = $_GET['delete_message'];
        
        $delete_user = "DELETE FROM `message` WHERE `message_id`='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_user);
        
        if($run_delete){
            
            echo "<script>alert('Message has been Deleted')</script>";
            
            echo "<script>window.open('index.php?message','_self')</script>";
            
        }
        
    }

?>

<?php } ?>