<?php 
    session_start();
    require_once("./Configuration/Database.php");

    if(isset($_SESSION['loggedIn'])) {
        include("../html/Views/Anexo.php"); 
    } else {
        include("../html/Views/Login.php"); 
    }
