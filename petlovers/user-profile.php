<?php 
require_once ('./functions/dbconfig.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php 

include_once 'components/head.php'; 
$username = esc($_SESSION['user_session']);

?> 

<body>

<!-- Navigation -->
<?php include_once 'components/nav.php'; ?>


    <h1 class="text-center">HELLO!</h1><br>

    <h4 class="text-center">Username: <?php echo $user->getUserProfile($username)->user_name; ?></h4>
    <h4 class="text-center">Email: <?php echo $user->getUserProfile($username)->user_email; ?></h4>
  

<?php include_once 'components/footer.php'; ?>