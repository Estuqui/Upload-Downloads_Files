<?php 
    session_start();
    require_once("./Configuration/Database.php");

    $action = isset($_GET["action"]) ? $_GET["action"] : 'anexo';
    
    if($action === 'anexo'){
        include("./Views/Anexo.php");
    }elseif($action === 'login'){
        include("./Views/Login.php0");
    }elseif($action === 'anexo'){
        include("./Controllers/FileController.php");
        $fileController = new FileController();
        $fileController->viewFile(); //Verificar esse método
    }
?>