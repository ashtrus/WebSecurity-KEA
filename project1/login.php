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

if (isset($_GET['inputUsername'])) {
    //Sanitizing the input iwht FILTER CONSTANT 
    $_GET['inputUsername'] = filter_var($_GET['inputUsername'], FILTER_SANITIZE_STRING);

}


if ($username == $inputUsername && $password == $inputPassword) {

    $inputUsername = $input; 
    $input  =  preg_replace('/\s+/', ' ', $input);

    echo $input;
    //echo '{"status":"ok"}'; 

}


?> 