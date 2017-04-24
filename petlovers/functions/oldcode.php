<?php /*
$user = "root"; 
$pass = "root"; 

$dbh = new PDO('mysql:host=localhost;dbname=petfam', $user, $pass);
 
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=petfam', $user, $pass);
        foreach($dbh->query('SELECT * from userstable') as $row) {
          // echo 'Success';
        
        }
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
     
        die();
    }
*/
?> 




<?php 


/*


include ('dbconnect.php');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `userstable` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
/*
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Hai " . $username . "
";
echo "This is the Members Area
";
echo "<a href='logout.php'>Logout</a>";
 
}else{
//3.2 When the user visits the page first time, simple login form will be displayed.
*/


/*
    if(isset($_GET['email']) && isset($_GET['password'])) {
        echo '{"status":"ok"}'; 
    } else {
        echo '{"status":"fail"}'; 
    }

$email = $_GET['email'];
$password = $_GET['password']



//All Users Query 
//$query = "SELECT email,password FROM userstable WHERE email= $email AND password= $password";  

// Check connection

if (mysqli_connect_errno())

  {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

  }

$qz = "SELECT id FROM userstable where username='".$username."' and password='".$password."'" ;

$qz = str_replace("\'","",$qz);

$result = mysqli_query($con,$qz);

while($row = mysqli_fetch_array($result))

  {

  echo $row['id'];

  }

mysqli_close($con);



/*
 
// query
$result = $conn->prepare("SELECT * FROM userstable WHERE email= $email AND password= $password");
$result->bindParam('email', $email);
$result->bindParam('password', $password);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);

    if($rows > 0) {
    header("location: home.php");
    }
    else{
        $errmsg_arr[] = 'Username and Password are not found';
        $errflag = true;
    }
    if($errflag) {
        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        session_write_close();
        header("location: index.php");
        exit();
    }

*/



?> 