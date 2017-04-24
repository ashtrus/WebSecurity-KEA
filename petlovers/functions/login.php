<?php 

$user = "root"; 
$pass = "root"; 

$dbh = new PDO('mysql:host=localhost;dbname=petfam', $user, $pass);
 

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=petfam', $user, $pass);
        foreach($dbh->query('SELECT * from userstable') as $row) {
            print_r($row);
          
           
        }
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
     
        die();
    }




?> 