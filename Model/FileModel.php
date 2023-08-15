<?php 

    require_once("../Configuration/Database.php");

    class FileModel {
        public function InserirArquivo($UserId, $CaminhodoArquivo) {
            $pdo = GetDb();
            $stmt = $pdo->prepare("INSERT INTO anexos (UserId, caminho) VALUES (?, ?)");
            $stmt->execute([$UserId, $CaminhodoArquivo]);
        }
        
        //$arquivo = $fileModel->ObterArquivo($idDoArquivo);
        //header ... $arquivo["caminho"];
        public function ObterArquivo($arquivoId){
            $pdo = GetDb();
            $stmt = $pdo->prepare("SELECT * FROM anexos WHERE id = ?");
            $stmt->execute([$arquivoId]);
            return $stmt->fetchObject();
        }

        public function ListarArquivos($userId){
            //TODO - SELECT ALL de anexos onde UserId é igual $UserId
            //retornar fetchassoc
        }
    }

    function GetDb() {
        $db = new Database();
        return $db->connect();
    }

?>