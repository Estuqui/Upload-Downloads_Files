<?php 
    require_once("../Model/ModelLogin.php");
    require_once("../Configuration/Config.php");

    class AutenticaController{
        private $model;
        
        public function __construct()
        {
            $db = new Database();
            $this->model = new AutenticaLogin($db->connect());
        }

        public function autenticacao($nome, $senha){
            if($this->model->autenticacao($nome, $senha)){
                $_SESSION["autenticacao"]=true;
                return true;
            }
             return false;
        }
        
        public function logout(){
            session_destroy();
        }
    }
?>