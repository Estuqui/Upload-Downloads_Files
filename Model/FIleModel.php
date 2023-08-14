<?php 

    class FileModel {
        public function InserirArquivo($UserId, $CaminhodoArquivo){
            global $pdo;
            $stmt = $pdo->prepare("INSERT INTO anexos (id, UserId, caminho) VALUES (?, ?, ?)");
            $stmt->execute([$UserId, $CaminhodoArquivo]);
        }
        
        public function ObterArquivo($UserId){
            global $pdo;
            $stmt = $pdo->prepare("SELECT * FROM anexos WHERE $UserId = ?");
            $stmt->execute([$UserId]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }

?>