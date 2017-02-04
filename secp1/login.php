<?php

    $sUser = $_GET['inputUsername'];
    $sPass = $_GET['inputPassword'];

    /* THIS IS TEMPORARY */
    $dbUser = "dude";
    $dbPass = "pass";

    if ($sUser == $dbUser && $sPass == $dbPass) {
        echo '{"status":"ok"}';
    }