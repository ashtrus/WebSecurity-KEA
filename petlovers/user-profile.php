<?php 
require_once ('./functions/dbconfig.php');

if($user->is_loggedin() == false) {
		$user->redirect('index.php'); 
}
?>
<!DOCTYPE html>
<html lang="en">
<?php 

include_once 'components/head.php';
$username = esc($_SESSION['user_session']);

?> 
<body>
<!-- Navigation -->
<?php include_once 'components/nav.php';
?>
    <h1 class="text-center">HELLO <?php echo $user->getUserProfile($username)->user_name;
?>
      <i id="btnLogout" class="fa fa-sign-out pull-left" aria-hidden="true"></i>
    </h1>
    <br>
    <h4 class="text-center">Username: <?php echo $user->getUserProfile($username)->user_name;
?></h4>
    <h4 class="text-center">Email: <?php echo $user->getUserProfile($username)->user_email;
?></h4>
    <button type="button" id="btnAddPet" class="btn btn-primary btn-block">Add new pet</button>
    
    <form id="formAddPet" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="txtPetName">
      </div>
      <div class="form-group">
        <label for="pwd">Type:</label>
        <input type="text" class="form-control" name="txtPetType">
      </div>
      <div class="form-group">
        <label for="pwd">Age:</label>
        <input type="number" class="form-control" name="txtPetAge">
      </div>
      <div class="form-group">
        <label for="pwd">Description:</label>
        <textarea rows="4" cols="50" class="form-control" name="txtPetDescription"></textarea>
      </div>
      <button type="submit" class="btn btn-default">Add</button>
    </form>

    <div id="petsContainer"></div>

    
<?php include_once 'components/footer.php';
?>