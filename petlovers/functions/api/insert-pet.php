<?php 
// connect to DB
require_once('../dbconfig.php');

$username = $_SESSION['user_session'];
$name = $_GET['txtPetName'];
$type = $_GET['txtPetType'];
$age = $_GET['txtPetAge'];
$description = $_GET['txtPetDescription'];

try {
	
	$sql = 'INSERT INTO pets (name, type, age, description, owner) 
			VALUES (:name, :type, :age, :description, :owner)';
	$sth = $DB_con->prepare($sql);
	$sth->bindParam(':name', $name);
	$sth->bindParam(':type', $type);
	$sth->bindParam(':age', $age);
	$sth->bindParam(':description', $description);
	$sth->bindParam(':owner', $username);
	$sth->execute();
	
	return $sth;
	
}
catch(PDOException $e) {
	
	echo $e->getMessage();
	
}
?>