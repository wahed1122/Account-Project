<?php 

    session_start();
    include("includes/db.php");
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Krishi Hat Bazar Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
   
   <div class="container"><!-- container begin -->
       <form action="" class="form-login" method="post"><!-- form-login begin -->
        
           <h2 class="form-login-heading">  Login </h2>
           
           <input type="text" class="form-control" placeholder="Email Address" name="admin_email" required>
           
           <input type="password" class="form-control" placeholder="Your Password" name="admin_pass" required>
           
           <button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login"><!-- btn btn-lg btn-primary btn-block begin -->
               
               Login
               
           </button><!-- btn btn-lg btn-primary btn-block finish -->
           
       </form><!-- form-login finish -->
   </div><!-- container finish -->
    
</body>
</html>


<?php 

    if(isset($_POST['admin_login'])){
        
        $admin_email = $_POST['admin_email'];
        
        $admin_pass = $_POST['admin_pass'];
        
        $get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $count = mysqli_num_rows($run_admin);
        
        if($count==1){
            
            $_SESSION['admin_email']=$admin_email;
            $row=mysqli_fetch_assoc($run_admin);
            $_SESSION['Role']=$row['Role'];
            $_SESSION['Is_Login']='yes';

            if($row['Role']=='Admin'){
              echo "<script>alert('Logged in. Welcome Back')</script>";
            
              echo "<script>window.open('index.php?dashboard','_self')</script>";
            }if($row['Role']=='Accounting'){
              echo "<script>alert('Logged in. Welcome Back')</script>";
            
              echo "<script>window.open('index.php?view_customers','_self')</script>";
            }if($row['Role']=='Production'){
              echo "<script>alert('Logged in. Welcome Back')</script>";
            
              echo "<script>window.open('index.php?view_slides','_self')</script>";
            }if($row['Role']=='Store'){
              echo "<script>alert('Logged in. Welcome Back')</script>";
            
              echo "<script>window.open('index.php?view_cats','_self')</script>";
            }
            
            echo "<script>alert('Logged in. Welcome Back')</script>";
            
            echo "<script>window.open('index.php?insert_slide','_self')</script>";
            
        }else{
            
            echo "<script>alert('Email or Password is Wrong !')</script>";
            
        }
        
    }

?>