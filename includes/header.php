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