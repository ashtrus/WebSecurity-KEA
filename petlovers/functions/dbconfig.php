<?php 
// ini_set('display_errors', 'Off');
session_start();
include_once 'security.php';

$DB_host = "127.0.0.1";
$DB_user = "root";
$DB_pass = "";
$DB_name = "dblogin";

try {

    $DB_con = new PDO( "mysql:host={$DB_host}; dbname={$DB_name}", $DB_user, $DB_pass );
    // set the PDO error mode to exception
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'Connection to database was successful';

} catch(PDOException $e) {

    echo $e->getMessage();
    die();
}


include_once 'class.user.php';
$user = new USER($DB_con);

?>