<?php

require_once("../Configuration/Database.php");

class FileModel
{
    public function InserirArquivo($UserId, $CaminhodoArquivo)
    {
        $pdo = GetDb();
        $stmt = $pdo->prepare("INSERT INTO anexos (UserId, caminho) VALUES ('$UserId', '$CaminhodoArquivo')");
        $stmt->execute();
    }

    public function ObterArquivo($arquivoId)
    {
        $pdo = GetDb();
        $stmt = $pdo->prepare("SELECT * FROM anexos WHERE id = ?");
        $stmt->execute([$arquivoId]);
        return $stmt->fetchObject();
    }

    public function ListarArquivos($userId)
    {
        $pdo = GetDb();
        $stmt = $pdo->prepare("SELECT a.*, u.nome FROM anexos AS a
                                LEFT JOIN usuarios AS u ON u.id = a.UserId 
                                WHERE UserId = $userId");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

function GetDb()
{
    $db = new Database();
    return $db->connect();
}