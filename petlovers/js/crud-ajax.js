jQuery(document).ready(function () { 
console.log("crud ajax works");

    $('#formAddUser').submit(function (e) {  
        e.preventDefault(); // prevents page refresh

        var inputs = $(this).serialize();
        console.log(inputs);
        
        $.get("../petlovers/functions/api/insert-user.php?", inputs, function () {
            $('.content').load('../petlovers/functions/api/refresh.php');
        });
    })

})    