<?php 
// if($user->is_loggedin()!="")
// {
// 	$user->redirect('user-profile.php');
	
// }

if(isset($_POST['btn-login']))
{
	$uname = $_POST['txt_uname_email'];
	$umail = $_POST['txt_uname_email'];
	$upass = $_POST['txt_password'];
	
	if($user->login($uname,$umail,$upass))
				 {
        // Set session             
		$_SESSION['user_session'] = $uname;
		$user->redirect('user-profile.php');
		echo 'Successfully Logged in';
	}
	else
				 {
		$error = "Wrong login Credentials !";
		echo $error;
	}
}


?> 