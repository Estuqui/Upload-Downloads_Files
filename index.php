<?php 
    session_start();
    require_once("./Configuration/Database.php");

    if(isset($_SESSION['loggedIn'])) {
        include("Views/Anexo.php");
    } else {
        include("Views/Login.php");
    }
?>