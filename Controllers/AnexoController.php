<?php 

    require_once("./Model/ModelAnexo.php");
    require_once("./Configuration/Config.php");

    class UploadController {
        private $model;
         
        public function __construct()
        {
            $db = new DataBase(); 
            $this->model = new Anexo($db->connect());
        }

        public function UploadArquivo($nome, $caminho){
            $this->model->UploadArquivo($nome, $caminho);
        }

        public function DisplayArquivo($id){
            //add lógica exibir arquivo
        }
    }

?>