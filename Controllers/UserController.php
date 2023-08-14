<?php 
    require_once("./Model/UserModel.php"); 

    class UserController{
        public function Login(){
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                $username = $_POST["username"];
                $password = $_POST["password"];

                $userModel = new UserModel();
                if($userModel->isValidUser($username, $password)){
                    $_SESSION["username"] = $username;
                    header('Location: ?action=home');
                    exit;
                }
            }
            
            include_once("./Views/Login.php");
        }
    }
?>