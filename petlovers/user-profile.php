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




<script> 

  function storeLocalStorage() {

    //Global user 
    //verify user with id or token backend 
    //object to -> stringify 
    //userName , user email , token, store in lcoal storage. 
   
  }

    var sLink = "functions/api/get-users.php"; 

    $.ajax({
      "url": sLink,
      "method": "GET",
      "dataType": "JSON",
      "cache": false 

    }).done(function(jData) {
       // console.log( jData); 

        $.each(jData, function(i,jObjectData) {
                  console.log(jObjectData );

            var sUsername = jObjectData.user_name; 
                  console.log("My user name is ",  sUsername);

            var sUseremail = jObjectData.user_email; 
                  console.log("My user Email is " , sUseremail);

            var sUserid  = jObjectData.user_id; 
                  console.log('My user id is ', sUserid);

            var sUserAuthToken = jObjectData.user_token; 
                  console.log("My user Token is " , sUserAuthToken);
        });

    }).fail(function(jFail) {
        console.log('Failed');
    })

</script> 