<?php 
require_once ('./functions/dbconfig.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once 'components/head.php'; ?> 

<body>

    <!-- Navigation -->
  <?php include_once 'components/nav.php'; ?>

    <h1>HELLO!</h1>
    <?php 

    /*
    by Php $_GET 
    Display user profile -> data here 

    
    */

    if ( isset($_SESSION['user_session']) ) {
      echo esc($_SESSION['user_session']);
    }
?>

<?php include_once 'components/footer.php'; ?>