<?php 

// connect to DB
require_once('../dbconfig.php');

echo 'refresh.php';

$sql = 'SELECT * FROM users';
?>

    <ul class="group">

    <?php 
        foreach ($DB_con->query($sql) as $row) {
            $name = $row['user_name'];  
    ?>

        <li><?php echo $name ?></li><br>

    <?php 
        }
    ?>

    </ul>

<?php $DB_con = null; ?>
<?php ?>