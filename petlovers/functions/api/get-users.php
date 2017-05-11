<?php 



//connect to db 
require_once('../dbconfig.php');

$sql = 'SELECT * FROM users';

$arrayUsers = array();


foreach ($DB_con->query($sql) as $row) {

    $user_name = $row['user_name']; 
    $user_email = $row['user_email'];
    $user_authtoken = $row['user_token'];
        
    $jsonArray = array("user_name" => $user_name, "user_email" => $user_email, "user_token" => $user_authtoken ); 

    array_push($arrayUsers, $jsonArray);

}

$jArr = json_encode($arrayUsers); 

echo $jArr;


$DB_con = null;     
     
?> 