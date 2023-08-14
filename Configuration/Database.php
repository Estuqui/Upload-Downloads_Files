<?php

class Database{

    private $host = "localhost";
    private $db_name = "upload";
    private $username = "jessica";
    private $password = "123456";

    public function connect(){
        $pdo = new PDO("mysql:host=$this->host; dbname=$this->db_name", $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
    }
    }

    