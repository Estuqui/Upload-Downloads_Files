<?php
    session_start();
    require_once("./Model/UserModel.php"); 
    
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $userModel = new UserModel();

        if($userModel->isValidUser($email)){
            $authResult = $userModel->Authenticate($email, $password); 
            if($authResult["auth"]) {
                $_SESSION['loggedIn'] = true;
                $_SESSION['userId'] = $authResult['id'];
                header("Location: /");
            }
            else {
                echo "Senha incorreta";
            }
        } 
        else {
            echo "Usuario não existe";
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["action"])) {
        if($_GET["action"] == "logout") {
            session_unset();
            session_destroy();
            header("Location: ./Views/Login.php");
        }
        else if($_GET["action"] == "register") {
            //TODO
            include_once("../Views/Register.php");
        }
    }
?>