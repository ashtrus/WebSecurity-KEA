<?php 
session_start(); 


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
					<input class="validate" type="text" name="username" id="username">
					<label for="username">Username</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<input class="validate" type="password" name="password" value="" id="password" >
					<label for="password">Password</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<button class="waves-effect waves-light btn-large"  id="submitBtn" >Login</button>
				</div>
			</div>
		
		</form>

	</div>

</div>


	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>




<script> 
var counterReq = 0 ; 
var inputUsernameGlobal = ""; 




$('#username').on('blur', function(event) {
		
	//event.preventDefault();

    var inputUsername = $('#username').val(); 
    var inputPassword = $('#password').val(); 

	console.log("inputUsername", inputUsername);


	if (inputUsername == inputUsernameGlobal ) {

		inputUsernameGlobal = inputUsername; 

	} else {
		event.preventDefault("user differentt ");

		$("#submitBtn").removeClass("disabled");
		counterReq=0;
		console.log("counter reseted");

	}
	


		$('#submitBtn').on('click', function(event) {

				console.log("submitBtn pressed");

			event.preventDefault();



			if (counterReq >= 3 ) {
				console.log("counter checking " , counterReq);
	


				$("#submitBtn").addClass("disabled");

				setTimeout(function(){ 
				

					console.log("freezre ",  counterReq ,  " ctimeout function started");
					$("#submitBtn").removeClass("disabled");

						

				}, 30000);

			} else	{
				
				counterReq += 1;
				console.log(counterReq);


			}

/*
	var sLink = "login.php?inputUsername="+ inputUsername + "&inputPassword="+ inputPassword; 

      $.ajax({
		  "method": "GET",
		  "url": sLink,
		  "dataType": "JSON",
		  "cache": false 
	  }).done(function(jData) {

		     if (jData.status == "ok") {
				console.log("You logged in ");
			 }
	  })


*/

		})



    })





</script> 

</body>
</html>

