<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_entry'])){
        
        $delete_id = $_GET['delete_entry'];
        
        $delete_entrry = "DELETE FROM `trak_entry` WHERE `sl`='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_entrry);
        
        if($run_delete){
            
            echo "<script>alert('One of your Entry  has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_entry','_self')</script>";
            
        }
        
    }

?>

<?php } ?>