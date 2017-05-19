<?php 
// connect to DB
require_once('../dbconfig.php');

$sql = 'SELECT * FROM pets WHERE owner = {$user}';

$username = $_SESSION['user_session'];

$stmt = $DB_con->prepare("SELECT *
                                FROM pets 
                                WHERE owner=:uname 
                            ");

$stmt->bindparam(":uname", $username);        
$stmt->execute(); 
$stmt= $stmt->fetchAll(); 


?>
    <ul class="group">
    
    <?php 
        foreach ($stmt as $row) {
	        $name = $row['name'];
	        $type = $row['type'];
	        $age = $row['age'];
	        $description = $row['description'];
	?>
        <li>
            <span><?php echo esc($name) ?></span>
            <span><?php echo esc($type) ?></span>
            <span><?php echo esc($age) ?></span>
            <span><?php echo esc($description) ?></span>
        </li><br>
    <?php
}
?>
    </ul>
<?php $DB_con = null;
?>