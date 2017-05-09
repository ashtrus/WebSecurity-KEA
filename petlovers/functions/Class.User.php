<?php

// include 'dbconfig.php';
// include_once 'token.php';

class USER
{
    private $db;
  
    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }
 
    public function register($fname,$lname,$uname,$umail,$upass) // 
    {
       try
       {
           //$new_password = password_hash($upass, PASSWORD_DEFAULT);  //Needs configuration to SHA256  MOST SECYRE IMO 

           $salt = base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)); 
          // $token = "H#cked4L1p"; 
           $new_password = hash("sha256", $upass."mySecret".$salt); 
          
           $stmt = $this->db->prepare("INSERT INTO users(user_name,user_email,user_pass) 
                                                       VALUES(:uname, :umail, :upass)");
              
           $stmt->bindparam(":uname", $uname);
           $stmt->bindparam(":umail", $umail);
           $stmt->bindparam(":upass", $new_password);    
           //$stmt->bindparam(":utoken", $hashed_Token);        
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
          $stmt = $this->db->prepare("SELECT * FROM users WHERE user_name=:uname OR user_email=:umail LIMIT 1");
          $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($upass, $userRow['user_pass']))
             {
                $_SESSION['user_session'] = $userRow['user_id'];
                return true;
             }
             else
             {
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