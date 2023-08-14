<?php 
require_once("./Controllers/AnexoController.php");
require_once("./Controllers/LoginController.php");



$action = $_GET["action"] ?? "";
$controller = null;

if(!isset($_SESSION["autenticacao"])){
    $autenticacaoController = new AutenticaController();

    if($action === 'login'){
        $nome = $_POST["nome"] ?? "";
        $senha = $_POST["senha"] ?? "";

        if($autenticacaoController->autenticacao($nome, $senha)){
            $_SESSION['autenticacao'] = true;
        }else{
            echo "Login Inválido";
            include("./Views/Login.php");
            exit;
        }
    }else{
        include("./Views/Login.php");
        exit;
    }
}

if(isset($_SESSION["autenticacao"])){
    $controller = new UploadController();

    if($action === "upload"){
        //lógica do upload
    }elseif($action === "display"){
        //lógica exibição do arquivo
    }elseif ($action === 'logout'){
        $autenticacaoController = new AutenticaController();
        $autenticacaoController->logout();
        header('Location: index.php');
        exit;
    }else{
        include ("./Views/Anexo.php");
    }
    
}