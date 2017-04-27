<?php 

// connect to DB
require_once('../dbconfig.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$username = $_GET['username'];
$email = $_GET['email'];
$password = $_GET['password'];

echo $username;
echo $email;
echo $password;

$sth = $DB_con->prepare('INSERT INTO users (user_name, user_email, user_pass) VALUES (:user_name, :user_email, :user_pass)');
$sth->bindParam(':user_name', $username, PDO::PARAM_STR);
$sth->bindParam(':user_email', $email, PDO::PARAM_STR);
$sth->bindParam(':user_pass', $password, PDO::PARAM_STR);
$sth->execute();



if ($DB_con->query($sth) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sth . "<br>" . $DB_con->error;
}


?>

<?php ?>