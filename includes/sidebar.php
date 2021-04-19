<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
   
<nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top begin -->
    <div class="navbar-header"><!-- navbar-header begin -->
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><!-- navbar-toggle begin -->
            
            <span class="sr-only">Toggle Navigation</span>
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button><!-- navbar-toggle finish -->
        <?php if($_SESSION['Role']=='Admin'){?>
        <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>
        <?php }?>
        <?php if($_SESSION['Role']=='Production'){?>
        <a href="index.php?dashboard" class="navbar-brand">Production Area</a>
        <?php }?>
        <?php if($_SESSION['Role']=='Store'){?>
        <a href="index.php?dashboard" class="navbar-brand">Store Area</a>
        <?php }?>
        <?php if($_SESSION['Role']=='Accounting'){?>
        <a href="index.php?dashboard" class="navbar-brand">Accounting Area</a>
        <?php }?>
    </div><!-- navbar-header finish -->
    
    <ul class="nav navbar-right top-nav"><!-- nav navbar-right top-nav begin -->
        
        <li class="dropdown"><!-- dropdown begin -->
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle begin -->
                
                <i class="fa fa-user"></i> <?php echo $admin_name;  ?> <b class="caret"></b>
                
            </a><!-- dropdown-toggle finish -->
            
            <ul class="dropdown-menu"><!-- dropdown-menu begin -->
                <li><!-- li begin -->
                    <a href="index.php?user_profile=<?php echo $admin_id; ?>"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-user"></i> Profile
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li><!-- li begin -->
                    <a href="index.php?view_products"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-envelope"></i> Products
                        
                        <span class="badge"><?php echo $count_products; ?></span>
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li><!-- li begin -->
                    <a href="index.php?view_customers"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-users"></i> Customeres
                        
                        <span class="badge"><?php echo $count_customers; ?></span>
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li><!-- li begin -->
                    <a href="index.php?view_cats"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Product Categories
                        
                        <span class="badge"><?php echo $count_p_categories; ?></span>
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li class="divider"></li>
                
                <li><!-- li begin -->
                    <a href="logout.php"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-power-off"></i> Log Out
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
            </ul><!-- dropdown-menu finish -->
            
        </li><!-- dropdown finish -->
        
    </ul><!-- nav navbar-right top-nav finish -->
    
    <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse begin -->
        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav begin -->
            <li><!-- li begin -->
                <a href="index.php?dashboard"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-dashboard"></i> Dashboard
                        
                </a><!-- a href finish -->
                
            </li><!-- li finish -->
            <?php if($_SESSION['Role']=='Admin'){?>

            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#p_cat"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-edit"></i> Products Categories
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="p_cat" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_p_cat"> Insert Product Category </a>
                    </li><!-- li finish -->
					
                    <li><!-- li begin -->
                        <a href="index.php?view_p_cats"> View Products Categories </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            <?php }?>
            <?php if($_SESSION['Role']=='Store'){?>
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#cat"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-book"></i> Store
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="cat" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_cat"> Insert Store </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_cats"> View Store </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#p_cat"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-edit"></i>  Entry
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="p_cat" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_entry"> Insert Entry </a>
                    </li><!-- li finish -->
                    
                    <li><!-- li begin -->
                        <a href="index.php?view_entry"> View Entry </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->




                         <li><!-- li begin -->
                        <a href="index.php?message"> Message
                            <?php   
                                       
$rt = mysqli_query($con,"SELECT * FROM `message`");
$num1 = mysqli_num_rows($rt);
{?><b class="label green pull-right"style="color:red;font-size:20px;"><?php echo htmlentities($num1); ?></b>
<?php } ?>
                         </a>
                    </li><!-- li finish -->


            <?php }?>
            <?php if($_SESSION['Role']=='Production'){?>
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#slides"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Production
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="slides" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_slide"> Insert Production </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_slides"> View Production </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->


              <?php }?>
             
            <?php if($_SESSION['Role']=='Admin'){?>

            
             <li><!-- li begin -->
                <a href="index.php?add_customer"><!-- a href begin -->
                    <i class="fa fa-fw fa-users"></i> Add DS
                </a><!-- a href finish -->
            </li><!-- li finish -->


            <li><!-- li begin -->
                <a href="index.php?view_customers"><!-- a href begin -->
                    <i class="fa fa-fw fa-users"></i> View DS
                </a><!-- a href finish -->
            </li><!-- li finish -->


<li><!-- li begin -->
                <a href="index.php?view_orders"><!-- a href begin -->
                    <i class="fa fa-fw fa-book"></i> Admin View Store 
                    
                </a><!-- a href finish -->
                
            </li><!-- li finish -->

 <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#slide"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Employee
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="slide" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_employee"> Insert Employee </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_employee"> View Employee </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            <li><!-- li begin -->
                <a href="index.php?view_entry"> Admin View Entry Level </a>
            </li><!-- li finish -->


            <li><!-- li begin -->
                        <a href="index.php?message"> Message
<?php   
                                       
$rt = mysqli_query($con,"SELECT * FROM `message`");
$num1 = mysqli_num_rows($rt);
{?><b class="label green pull-right"style="color:red;font-size:20px;"><?php echo htmlentities($num1); ?></b>
<?php } ?>

                         </a>
                    </li><!-- li finish -->

<?php }?>
<?php if($_SESSION['Role']=='Accounting'){?>
<li><!-- li begin -->
                <a href="index.php?view_customers"><!-- a href begin -->
                    <i class="fa fa-fw fa-users"></i> View DS
                </a><!-- a href finish -->
            </li><!-- li finish -->


            <li><!-- li begin -->
            <a href="index.php?add_product"><!-- a href begin -->
                
                       <i class="fa fa-fw fa-users"></i> Add DS Product 
              


            </a><!-- a href finish -->
                </li><!-- li finish -->
                <li><!-- li begin -->
                <a href="index.php?view_payments"><!-- a href begin -->
                    <i class="fa fa-fw fa-money"></i>  View Production
    
                </a><!-- a href finish -->
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#slides"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> RM Store
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="slides" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_row_material"> Insert RM </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_row_material"> View RM </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="index.php?add_employee_salary"><!-- a href begin -->
                    <i class="fa fa-fw fa-users"></i> Add Employee Salary
                </a><!-- a href finish -->
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#slide"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Employee
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="slide" class="collapse"><!-- collapse begin -->

                    <li><!-- li begin -->
                        <a href="index.php?view_employee"> View Employee </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

                        <li><!-- li begin -->
                        <a href="index.php?message"> Message
                            <?php   
                                       
$rt = mysqli_query($con,"SELECT * FROM `message`");
$num1 = mysqli_num_rows($rt);
{?><b class="label green pull-right"style="color:red;font-size:20px;"><?php echo htmlentities($num1); ?></b>
<?php } ?>
                         </a>
                    </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#others"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Others
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="others" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?others"> Insert Others </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_others"> View Others </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->




<?php }?>
<?php if($_SESSION['Role']=='Production'){?>
            <li><!-- li begin -->
                <a href="index.php?view_orders"><!-- a href begin -->
                    <i class="fa fa-fw fa-book"></i>  View Store 
					
                </a><!-- a href finish -->
				
            </li><!-- li finish -->
        <?php }?>
            <?php if($_SESSION['Role']=='Admin'){?>

            <li><!-- li begin -->
                <a href="index.php?add_dilar"><!-- a href begin -->
                    <i class="fa fa-fw fa-money"></i> Add RM Dilar
    
                </a><!-- a href finish -->
            </li><!-- li finish -->
                
            <li><!-- li begin -->
                <a href="index.php?view_payments"><!-- a href begin -->
                    <i class="fa fa-fw fa-money"></i> Admin View Production
	
                </a><!-- a href finish -->
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="index.php?edit_css"><!-- a href begin -->
                    <i class="fa fa-fw fa-pencil"></i> CSS Editor
                </a><!-- a href finish -->
            </li><!-- li finish -->
            <?php }?>
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#users"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-users"></i> Users
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="users" class="collapse"><!-- collapse begin -->
                    <?php if($_SESSION['Role']=='Admin'){?>
                    <li><!-- li begin -->
                        <a href="index.php?insert_user"> Insert User </a>
                    </li><!-- li finish -->

                    <li><!-- li begin -->
                        <a href="index.php?view_users"> View Users </a>
                    </li><!-- li finish -->
                <?php }?>
                    <li><!-- li begin -->
                        <a href="index.php?user_profile=<?php echo $admin_id; ?>"> Edit User Profile </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            


            <li><!-- li begin -->
                <a href="logout.php"><!-- a href begin -->
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a><!-- a href finish -->
            </li><!-- li finish -->
            
        </ul><!-- nav navbar-nav side-nav finish -->
    </div><!-- collapse navbar-collapse navbar-ex1-collapse finish -->
    
</nav><!-- navbar navbar-inverse navbar-fixed-top finish -->


<?php } ?>