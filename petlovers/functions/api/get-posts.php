<?php 
// connect to DB
require_once('../dbconfig.php');

$sql = 'SELECT * FROM posts ORDER BY date ASC';
?>
    <ul class="group">
    
    <?php 
        foreach ($DB_con->query($sql) as $row) {
	        $user = $row['user'];
	        $post = $row['post'];
	        $date = $row['date'];
	?>
        <li>
            <span><?php echo esc($date) ?></span>
            <span><?php echo esc($user) ?></span>
            <span><?php echo esc($post) ?></span>
        </li><br>
    <?php
}
?>
    </ul>
<?php $DB_con = null;
?>