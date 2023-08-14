<?php 

    class UserModel{
        public function isValidUser($username,$password){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE username = ? AND password = ?");
        $stmt->execute([$username,$password]);
        return $stmt->rowCount() > 0;            
        }
    }
?>