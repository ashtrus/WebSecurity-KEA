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
	
	$user->login($uname,$umail,$upass);

}


?> 