<?php 
class AutenticaLogin{
    private $db;

    public function __construct($db){
        $this->db = $db;
    }
    
    public function autenticacao($nome,$senha){
        //lógica de autenticação aqui
    }
}

?>