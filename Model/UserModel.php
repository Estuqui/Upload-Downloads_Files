<?php 
    require_once("./Configuration/Database.php");

    class UserModel{
        public function isValidUser($email){
            $pdo = GetDb();
            $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
            $stmt->execute([$email]);
            return $stmt->rowCount() > 0;            
        }

        public function Authenticate($email, $password) {
            $pdo = GetDb();
            $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ? AND password = ?");
            $stmt->execute([$email, $password]);

            $result = ["auth" => $stmt->rowCount() > 0, "id" => $stmt->fetchObject()->id];
            return $result;
        }
    }

    function GetDb() {
        $db = new Database();
        return $db->connect();
    }
?>