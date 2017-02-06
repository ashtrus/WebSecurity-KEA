<?php 

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=secuirty", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
       // echo "Connection failed: " . $e->getMessage();
    $sql = "SELECT * FROM users "; 
    $result = mysql_query($sql, $link);
    print_r ($result); 

    }
catch(PDOException $e)
    {

    }





$username = "username"; 
$password = "password";

$inputPassword = $_GET['inputPassword']; 
$inputUsername = $_GET['inputUsername']; 



if ($username == $inputUsername && $password == $inputPassword) {

    echo '{"status":"ok"}'; 

}


?> 