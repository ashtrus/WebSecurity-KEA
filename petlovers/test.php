<div class="content">
<?php 

// connect to DB
    require_once('./functions/dbconfig.php');

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

</div>

<form id="formAddUser" method="post">
    <input type="text" id="txtUsername" name="username" placeholder="Enter username">
    <input type="text" id="txtEmail" name="email" placeholder="Enter emai">
    <input type="password" id="txtPassword" name="password" placeholder="Enter password">
    <button type="submit" id="btnAddUser">Add</button>
</form>

<script src="js/jquery.js"></script>
<script src="js/crud-ajax.js"></script>

