<?php
    session_start();
    session_destroy();
    unset($_SESSION['username']);
    $_SESSION['message'] = "Logged Out";
    header('Location: login.php');


?>