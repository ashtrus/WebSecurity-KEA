<?php
 
$uploaddir = 'uploads/';
$id = 1;
 
/* Setup a database connection with PDO */
$DB_host = "127.0.0.1";
$DB_user = "root";
$DB_pass = "";
$DB_name = "dblogin";
 
// Set DSN
$dsn = 'mysql:host='.$dbhost.';dbname='.$dbname;
 
// Set options
$options = array(
    PDO::ATTR_PERSISTENT    => true,
    PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
);
 
try {
    $db = new PDO($dsn, $dbuser, $dbpass, $options);
}
catch(PDOException $e){
    die("Error!: " . $e->getMessage());
}
 
/* Setup query */
$query = 'SELECT name, original_name, mime_type FROM uploads WHERE id=:id';
 
/* Prepare query */
$db->prepare($query);
 
/* Bind parameters */
$db->bindParam(':id', $id);
 
/* Execute query */
try {
    $db->execute();
    $result = $db->fetch(PDO::FETCH_ASSOC);
}
catch(PDOException $e){
    die("Error!: " . $e->getMessage());
}
 
/* Get the original filename */
$newfile = $result['original_name'];
 
/* Send headers and file to visitor */
header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename='.basename($newfile));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($uploaddir.$result['name']));
header("Content-Type: " . $result['mime_type']);
readfile($uploaddir.$result['name']);
?>