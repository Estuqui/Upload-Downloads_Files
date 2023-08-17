<?php
    session_start();
    require_once("Database.php");

    if(!isset($_SESSION['loggedIn'])) {
        header("Location: /Views/Login.php");
    }
?>