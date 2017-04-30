<?php 
// connect to DB
require_once('../dbconfig.php');

$username = $_SESSION['user_session'];
$post = $_GET['post'];

try {
	
	$sql = 'INSERT INTO posts (user, post, date) VALUES (:user, :post, :date)';
	$sth = $DB_con->prepare($sql);
	$sth->bindParam(':user', $username);
	$sth->bindParam(':post', $post);
	$sth->bindParam(':date', date('Y-m-d H:i:s'));
	$sth->execute();
	
	return $sth;
	
}
catch(PDOException $e) {
	
	echo $e->getMessage();
	
}
?>