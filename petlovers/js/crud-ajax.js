jQuery(document).ready(function () {

    // Insert user into DB
    $('#formAddUser').submit(function (e) {
        e.preventDefault(); // prevents page refresh

        var inputs = $(this).serialize();
        console.log(inputs);

        $.get("../petlovers/functions/api/insert-user.php?", inputs, function () {
            $('.content').load('../petlovers/functions/api/refresh.php');
        });
    })

    function loadPosts() {
        $('#chatContent').load('../petlovers/functions/api/get-posts.php');
    }

    // Load posts on chat load
    $('#chatContent').on('load', loadPosts());

    // Insert post into DB
    $('#formPostMessage').submit(function (e) {
        e.preventDefault(); 
        $('#txtChatMessage').empty();

        var inputs = $(this).serialize();
        console.log(inputs);

        $.get("../petlovers/functions/api/insert-post.php?", inputs, function () {
            loadPosts();
        });
    })


})