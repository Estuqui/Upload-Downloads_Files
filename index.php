<?php 
    session_start();
    require_once("./Configuration/Database.php");

    if(!isset($_SESSION['loggedIn'])) {
        header("Location: /Views/Login.php");
    } else {
        header("Location: /Views/Anexo.php");
    }
?>