<?php
    session_start();
    session_unset();
    session_destroy(); // déstruction de la session

    header("Location: index.php");
    die();
?>