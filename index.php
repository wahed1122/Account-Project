<?php 

    session_start();
    include("includes/db.php");
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        
        $admin_session = $_SESSION['admin_email'];
        
        $get_admin = "select * from admins where admin_email='$admin_session'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['admin_id'];
        
        $admin_name = $row_admin['admin_name'];
        
        $admin_email = $row_admin['admin_email'];
        
        $admin_image = $row_admin['admin_image'];
        
        $admin_country = $row_admin['admin_country'];
        
        $admin_about = $row_admin['admin_about'];
        
        $admin_contact = $row_admin['admin_contact'];
        
        $admin_job = $row_admin['admin_job'];
        
        $get_products = "select * from products";
        
        $run_products = mysqli_query($con,$get_products);
        
        $count_products = mysqli_num_rows($run_products);
        
        $get_customers = "select * from customers";
        
        $run_customers = mysqli_query($con,$get_customers);
        
        $count_customers = mysqli_num_rows($run_customers);
        
        $get_p_categories = "select * from product_categories";
        
        $run_p_categories = mysqli_query($con,$get_p_categories);
        
        $count_p_categories = mysqli_num_rows($run_p_categories);
        
        $get_customer_orders = "select * from  customer_orders";
        
        $run_customer_orders = mysqli_query($con,$get_customer_orders);
        
        $count_pending_orders = mysqli_num_rows($run_customer_orders);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php if($_SESSION['Role']=='Admin'){?>
    <title> Admin Area</title>
<?php }?>
 <?php if($_SESSION['Role']=='Production'){?>
    <title> Production Area</title>
<?php }?>
     <?php if($_SESSION['Role']=='Store'){?>
    <title> Store Area</title>
<?php }?>
     <?php if($_SESSION['Role']=='Accounting'){?>
    <title> Accounting Area</title>
<?php }?>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }   if(isset($_GET['insert_product'])){
                        
                        include("insert_product.php");
                        
                }   if(isset($_GET['view_products'])){
                        
                        include("view_products.php");
                        
                }   if(isset($_GET['delete_product'])){
                        
                        include("delete_product.php");
                        
                }   if(isset($_GET['edit_product'])){
                        
                        include("edit_product.php");
                        
                }   if(isset($_GET['insert_p_cat'])){
                        
                        include("insert_p_cat.php");
                        
                }   if(isset($_GET['view_p_cats'])){
                        
                        include("view_p_cats.php");
                        
                }   if(isset($_GET['delete_p_cat'])){
                        
                        include("delete_p_cat.php");
                        
                }   if(isset($_GET['edit_p_cat'])){
                        
                        include("edit_p_cat.php");
                        
                }if(isset($_GET['details_product_store'])){
                        
                        include("details_product_store.php");
                        
                } if(isset($_GET['details_production'])){
                        
                        include("details_production.php");
                        
                }if(isset($_GET['edit_production'])){
                        
                        include("edit_production.php");
                        
                }if(isset($_GET['insert_row_material'])){
                        
                        include("insert_row_material.php");
                        
                }if(isset($_GET['view_row_material'])){
                        
                        include("view_row_material.php");
                        
                }if(isset($_GET['details_rm_store'])){
                        
                        include("details_rm_store.php");
                        
                }if(isset($_GET['delete_production'])){
                        
                        include("delete_production.php");
                        
                } if(isset($_GET['insert_cat'])){
                        
                        include("insert_cat.php");
                        
                }   if(isset($_GET['edit_customer_product'])){
                        
                        include("edit_customer_product.php");
                        
                } if(isset($_GET['delete_customer_product'])){
                        
                        include("delete_customer_product.php");
                        
                }if(isset($_GET['view_cats'])){
                        
                        include("view_cats.php");
                        
                }if(isset($_GET['edit_cat'])){
                        
                        include("edit_cat.php");
                        
                }   if(isset($_GET['delete_cat'])){
                        
                        include("delete_cat.php");
                        
                }   if(isset($_GET['insert_slide'])){
                        
                        include("insert_slide.php");
                        
                }   if(isset($_GET['view_slides'])){
                        
                        include("view_slides.php");
                        
                }   if(isset($_GET['delete_slide'])){
                        
                        include("delete_slide.php");
                        
                }   if(isset($_GET['edit_slide'])){
                        
                        include("edit_slide.php");
                        
                }   if(isset($_GET['insert_box'])){
                        
                        include("insert_box.php");
                        
                }   if(isset($_GET['view_boxes'])){
                        
                        include("view_boxes.php");
                        
                }   if(isset($_GET['delete_box'])){
                        
                        include("delete_box.php");
                        
                }   if(isset($_GET['edit_box'])){
                        
                        include("edit_box.php");
                        
                }  if(isset($_GET['add_customer'])){
                        
                        include("add_customer.php");
                        
                }if(isset($_GET['view_customers'])){
                        
                        include("view_customers.php");
                        
                }   if(isset($_GET['add_dilar'])){
                        
                        include("add_dilar.php");
                        
                }   if(isset($_GET['insert_employee'])){
                        
                        include("insert_employee.php");
                        
                }   if(isset($_GET['view_employee'])){
                        
                        include("view_employee.php");
                        
                }   if(isset($_GET['delete_employee'])){
                        
                        include("delete_employee.php");
                        
                }   if(isset($_GET['employee_salary_details'])){
                        
                        include("employee_salary_details.php");
                        
                }   if(isset($_GET['add_employee_salary'])){
                        
                        include("add_employee_salary.php");
                        
                }   if(isset($_GET['delete_employee_salary'])){
                        
                        include("delete_employee_salary.php");
                        
                }   if(isset($_GET['others'])){
                        
                        include("others.php");
                        
                }   if(isset($_GET['view_others'])){
                        
                        include("view_others.php");
                        
                }   if(isset($_GET['message'])){
                        
                        include("message.php");
                        
                }   if(isset($_GET['delete_message'])){
                        
                        include("delete_message.php");
                        
                }

                if(isset($_GET['edit_customer_order'])){
                        
                        include("edit_customer_order.php");
                        
                }if(isset($_GET['delete_customer_order'])){
                        
                        include("delete_customer_order.php");
                        
                }if(isset($_GET['add_product'])){
                        
                        include("add_product.php");
                        
                }if(isset($_GET['delete_customer'])){
                        
                        include("delete_customer.php");
                        
                }if(isset($_GET['details_customer'])){
                        
                        include("details_customer.php");

                 }  if(isset($_GET['view_orders'])){
                        
                        include("view_orders.php");
                        
                }if(isset($_GET['complete_order'])){
                        
                        include("complete_order.php");
                        
                } if(isset($_GET['delete_complete_order'])){
                        
                        include("delete_complete_order.php");
                        
                } if(isset($_GET['delete_order'])){
                        
                        include("delete_order.php");
                        
                } if(isset($_GET['confirm_order'])){
                        
                        include("confirm_order.php");
                        
                } 
                if(isset($_GET['view_payments'])){
                        
                        include("view_payments.php");
                        
                }if(isset($_GET['confirm_payment'])){
                        
                        include("confirm_payment.php");
				}
				if(isset($_GET['delete_payment'])){
                        
                        include("delete_payment.php");
                        
                }   if(isset($_GET['view_users'])){
                        
                        include("view_users.php");
                        
                }   if(isset($_GET['delete_user'])){
                        
                        include("delete_user.php");
                        
                }if(isset($_GET['insert_user'])){
                        
                        include("insert_user.php");
                        
                }   if(isset($_GET['user_profile'])){
                        
                        include("user_profile.php");
                        
                }   if(isset($_GET['insert_terms'])){
                        
                        include("insert_terms.php");
                        
                }   if(isset($_GET['view_terms'])){
                        
                        include("view_terms.php");
                        
                }   if(isset($_GET['delete_term'])){
                        
                        include("delete_term.php");
                        
                }   if(isset($_GET['edit_term'])){
                        
                        include("edit_term.php");
                        
                }   if(isset($_GET['edit_css'])){
                        
                        include("edit_css.php");
                        
                }   if(isset($_GET['insert_manufacturer'])){
                        
                        include("insert_manufacturer.php");
                        
                }   if(isset($_GET['view_manufacturers'])){
                        
                        include("view_manufacturers.php");
                        
                }   if(isset($_GET['delete_manufacturer'])){
                        
                        include("delete_manufacturer.php");
                        
                }   if(isset($_GET['edit_manufacturer'])){
                        
                        include("edit_manufacturer.php");
                        
                }   if(isset($_GET['insert_coupon'])){
                        
                        include("insert_coupon.php");
                        
                }   if(isset($_GET['view_coupons'])){
                        
                        include("view_coupons.php");
                        
                }   if(isset($_GET['delete_coupon'])){
                        
                        include("delete_coupon.php");
                        
                }   if(isset($_GET['edit_coupon'])){
                        
                        include("edit_coupon.php");
                        
                }   if(isset($_GET['insert_entry'])){
                        
                        include("insert_entry.php");
                        
                }   if(isset($_GET['view_entry'])){
                        
                        include("view_entry.php");
                        
                }   if(isset($_GET['delete_entry'])){
                        
                        include("delete_entry.php");
                        
                }   if(isset($_GET['print'])){
                        
                        include("print.php");
                        
                } 
        
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>       
</body>
</html>


<?php } ?>