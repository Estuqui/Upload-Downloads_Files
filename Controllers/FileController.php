<?php 


    require_once("./Model/FIleModel.php");

    class FileController{
        public function UploadArquivo(){
            if($_SERVER["REQUEST_METHOD"]==="POST"){
                $fileModel = new FileModel();
                $filename = $_FILES["file"]["name"];
                $content = file_get_contents($filename["file"]["temp_name"]);
                $fileModel->insertFile($filename, $content); //Verificar Método
            }

            include("#"); //Arquivo dentro da Views
        }

        public function VisualisarArquivo(){
            $filename = $_GET["filename"];
            $filename = $_GET["filename"];
            header("Location: #");
            echo "";
            }
        }
    
?>