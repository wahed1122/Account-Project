<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_employee_salary'])){
        
        $delete_id = $_GET['delete_employee_salary'];
        
        $delete_pro = "DELETE FROM `employee_salary` WHERE `employee_salary_id`='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('One of your production has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_employee','_self')</script>";
            
        }
        
    }

?>

<?php } ?>