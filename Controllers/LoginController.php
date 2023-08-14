<?php 
    include_once("");

    $msg_error = "";
    
    if( isset($_POST["login"]) && isset($_POST["senha"]) ){
        $login =  htmlspecialchars($_POST["login"]);
        $senha = htmlspecialchars($_POST["senha"]);
        
        $stmt = $conexao->query("SELECT id, nome, senha FROM upload WHERE usuario = '$login' AND senha='$senha' LIMIT 1");
        $result = $stmt->fetch_object();
    
        if( $result->id !== null ) {
            session_start();
            $_SESSION["usuario"] = $result->usuario;
            $_SESSION["nome"] = $result->nome;
            header('Location: Anexo.php');
        }else{
            $msg_error = "<div class='alert alert-danger mt-3 text-center'> <i class='bi bi-exclamation-triangle-fill'></i> Usuário ou senha incorretos </div>";
        }
    }
?>