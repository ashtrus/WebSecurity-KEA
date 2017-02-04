<?php 
	session_start();
	$new = "test"; 

	/* */

?>

<!DOCTYPE html>
<html>
<head>
	<title>Web App | Login</title>
	
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

<style>
	body {
		height: 100vh;
		width: 100vw;
	}

</style>
</head>
<body>

<div class="valign-wrapper">
	
	<div class="container">
		
		<form class="col s12" action="#">
			
			<div class="row">
				<div class="input-field col s6">
					<input class="validate" type="text" name="username">
					<label for="username">Username</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<input class="validate" type="password" name="password" value="">
					<label for="password">Password</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<input class="waves-effect waves-light btn-large" type="submit" name="submit" value="Submit">
				</div>
			</div>
		
		</form>

	</div>

</div>


	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

	<script>
		console.log("Connection successful!");

	</script>

</body>
</html>