<!-- connect to DB-->
<?php require_once('./functions/dbconfig.php'); ?>

<?php 
/**
 * 
 */
// class ClassName extends AnotherClass
// {
    
//     function __construct(argument)
//     {
//         # code...
//     }
// }

class User2 {
    public $username, $email, $password, $token, $entry;

    public function __construct()
    {
        $this->entry = "{$this->user_name} password is {$this->user_pass}";
    }
    
}

?>



<div class="content">
    <ul class="group">

<?php 
    $sql = 'SELECT * FROM users';
    $query = $DB_con->query($sql);
    $query->setFetchMode(PDO::FETCH_CLASS, 'User2');

    while ($row = $query->fetch()) {

        $entry = $row->entry;
?>
        <li><?php echo esc($entry) ?></li><br>

<?php

   } ?>

    </ul>

<?php $DB_con = null; ?>

</div>

<form id="formAddUser" method="post">
    <input type="text" id="txtUsername" name="username" placeholder="Enter username">
    <input type="text" id="txtEmail" name="email" placeholder="Enter emai">
    <input type="password" id="txtPassword" name="password" placeholder="Enter password">
    <button type="submit" id="btnAddUser">Add</button>
</form>

<script src="js/jquery.js"></script>
<script src="js/crud-ajax.js"></script>
