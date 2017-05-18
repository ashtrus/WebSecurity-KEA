<?php

// include 'dbconfig.php';
// include_once 'token.php';

class USER
{
    private $db;
    public $test = "test variable form User class";
  
    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }
 
    public function getUserProfile($username) {
        try
        {
            $stmt = $this->db->prepare("SELECT user_name, user_email
                                          FROM users 
                                          WHERE user_name=:uname 
                                          LIMIT 1
                                        ");

            $stmt->bindparam(":uname", $username);        
            $stmt->execute(); 
            $userRow=$stmt->fetch(PDO::FETCH_OBJ);

            if($stmt->rowCount() > 0)
            {
                return $userRow;
            }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    

    public function register($fname,$lname,$uname,$umail,$upass) // 
    {
       try
       {
           //$new_password = password_hash($upass, PASSWORD_DEFAULT);  //Needs configuration to SHA256  MOST SECYRE IMO 

          
           $salt4Token = base64_encode(mcrypt_create_iv(16,MCRYPT_DEV_URANDOM)); 
           $token4Salting = "H#cked4L1p"; 
           $userTokenAuth = hash("sha256", $token4Salting.$salt4Token); 


           $salt = base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)); 
           $new_password = hash("sha256", $upass."mySecret".$salt); 
          
          
           $stmt = $this->db->prepare("INSERT INTO users(user_name,user_email,user_pass,user_token) 
                                        VALUES(:uname, :umail, :upass, :utoken)");
              
           $stmt->bindparam(":uname", $uname);
           $stmt->bindparam(":umail", $umail);
           $stmt->bindparam(":upass", $new_password);    
           $stmt->bindparam(":utoken", $userTokenAuth);        
           $stmt->execute(); 
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }     
    }
/*
    public function recoverAccount($umail){
        
        try {
            $stmt = $this->db->prepare("SELECT user_name,user_email,user_password,user_token FROM users LIMIT 1"); 
            $stmt->execute(array(':uname'=>$uname, ':uemail'=>$umail,':upassword'=>$upass,':utoken'=>$utoken));
            $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount() > 0 ) { //Result found

            $upass = $recoverPassword; 
            include_once '/api/recover-mail.php';

           //include Send email + password 
           //passing to email 
            }
        }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

    } 
 */
    public function login($uname,$umail,$upass)
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * 
                                        FROM users 
                                        WHERE user_name=:uname 
                                        OR user_email=:umail 
                                        LIMIT 1
                                    ");
                                    
          $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($upass, $userRow['user_pass']))
             {
                // Set session  
                $_SESSION['user_session'] = $userRow['user_name'];
                $this->redirect('user-profile.php');
                echo 'Successfully Logged in';
                return true;
             }
             else
             {
                $error = "Wrong login Credentials !";
		        echo $error; 
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }

   public function is_loggedin()
   {
      if(isset($_SESSION['user_session']))
      {
         return true;
      }
   }
 
   public function redirect($url)
   {
       header("Location: $url");
   }
 
   public function logout()
   {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
   }
   
}


?>