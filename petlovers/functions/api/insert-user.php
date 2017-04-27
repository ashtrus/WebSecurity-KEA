<?php 
// connect to DB
require_once('../dbconfig.php');

    $username = $_GET['username'];
    $email = $_GET['email'];
    $password = $_GET['password'];

try {

    $sth = $DB_con->prepare('INSERT INTO users (user_name, user_email, user_pass) VALUES (:user_name, :user_email, :user_pass)');
    $sth->bindParam(':user_name', $username);
    $sth->bindParam(':user_email', $email);
    $sth->bindParam(':user_pass', $password);
    $sth->execute();

    return $stmt;

} catch(PDOException $e) {

    echo $e->getMessage();

}
?>