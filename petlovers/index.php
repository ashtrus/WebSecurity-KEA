<?php 
    require_once ('./functions/dbconfig.php');
    require_once('./functions/login.php');

?>

<!DOCTYPE html>
<html lang="en">

  <?php include_once 'components/head.php'; ?> 

<body>

    <!-- Navigation -->
  <?php include_once 'components/nav.php'; ?>

    <!-- Header -->
  <?php include_once 'components/header.php'; ?> 

    <!-- About -->
   <?php include_once 'components/about.php'; ?> 

    <!-- Services -->
   <?php include_once 'components/services.php'; ?>

    <!-- Portfolio -->
  <?php include_once 'components/portfolio.php'; ?> 



    <!-- Modal Login -->
  <?php include_once 'components/modal-login.php'; ?> 

    <!-- Modal Register -->
  <?php include_once 'components/modal-register.php'; ?> 


    <!-- Footer -->
  <?php include_once 'components/footer.php'; ?>