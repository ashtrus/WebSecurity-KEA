
//Login 

$('#login-btn').on('click', function() {
    var email = $('#inputemail').val();   
    var password = $('#inputpassword').val();   

var sLink = "./functions/login.php?email="+email+"&password="+password; 
console.log(sLink);

$.ajax({
    "method":"GET",
    "url": sLink,
    "dataType": "JSON"
    
}).done(function(jData) {
    if(jData.status == 'ok'){
        console.log("success");
    } else {
        console.log("failed");
    }
    
    }).fail(function(jFail) {
       
    })


})

// Logout

$('#btnLogout').click(function () { 
    console.log("logout btn clicked");
    $.get("./functions/logout.php");
})

//Register 