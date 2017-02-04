<?php 


$username = "username"; 
$password = "password";

$inputPassword = $_GET['inputPassword']; 
$inputUsername = $_GET['inputUsername']; 




if ($username == $inputUsername && $password == $inputPassword) {

    echo '{"status":"ok"}'; 

}


?> 