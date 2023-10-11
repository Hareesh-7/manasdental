<?php
error_reporting(0);
 include 'dbconnect.php';
session_start();
if(!isset($_SESSION["user_name"])){
 header("Location: login.php");
}
 ?>
 <?php   $sql = $conn->query("SELECT * FROM details where id='1' ");
 $result = $sql->fetch(PDO::FETCH_ASSOC); ?>
 <!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/f5.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <script src="http://code.jquery.com/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
   <link rel="shortcut icon" type="image/x-icon" href="../uploads/<?php echo $result['site_favicon'];?>">
     <link href='../uploads/<?php echo $result['site_favicon']; ?>'  sizes="128x128" rel="shortcut icon" type="image/x-icon" />  
     
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/themes/classic.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/themes/classic.date.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/themes/classic.time.css">
<script>
$( function() {
$(".datepicker").pickadate({format: 'mmmm d,yyyy'});

} );
</script>

    
    
<title>Dashboard/<?php echo $result['site_name'];?></title>
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col">
                    <div class="nav-link text-white font-weight-bold"> <a style="color: white;" href="index.php"> <?php echo $result['site_name']?></a></div>
                   
                </div>
                <div class="col-auto">
                         <ul class="nav nav-menu">
                     <li class="nav-item dropdown">
                        <a class="nav-link text-white" title="HOME" href="index.php"><i class="fas fa-home"></i></a>
                         
                     </li>
                     <li class="nav-item">
                        <a class="nav-link text-white" title="Database Download" href="backup.php"><i class="fas fa-download"></i></a>
                     </li>

                     <li class="nav-item">
                        <a class="nav-link text-white" title="LOGOUT" href="logout.php"><i class="fas fa-sign-out icon"></i></a>
                     </li>
                  </ul>
                </div>
            </div>
        </div>     
</header>

<div class="wrapper">
    
