<?php
    session_start();
    require_once("./config.php");
    require_once("./functions.php");

    ensure_user_is_authenticated();

    echo $_SESSION['email'];
?>