<?php

include_once("dbconfig.php");

//$con= new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
$sthandler = $DB_con->prepare("SELECT * FROM photos");

$sthandler->execute();
$sthandler= $sthandler->fetchAll(); 
//var_dump($sthandler);

foreach ($sthandler as $key => $value) {
	# code..
	//var_dump($value);
	echo '<img src="'.$value["imagePath"].'">';

}

/*
$sthandler->execute();
while ($row = $sthandler->fetch(PDO::FETCH_ASSOC)){

$image_name=$row["imagePath"];
echo "<img src=".$image_name." width=100 height=100/&gt";
}*/


?>