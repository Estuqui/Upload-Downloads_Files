<?php

require_once("../Configuration/Database.php");

class FileModel
{
    public function InserirArquivo($UserId, $CaminhodoArquivo)
    {
        $pdo = GetDb();
        $stmt = $pdo->prepare("INSERT INTO anexos (UserId, caminho) VALUES (?, ?)");
        $stmt->execute([$UserId, $CaminhodoArquivo]);
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
        $stmt = $pdo->prepare("SELECT * FROM anexos WHERE UserId = $userId");
        $stmt->execute([$userId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

function GetDb()
{
    $db = new Database();
    return $db->connect();
}
