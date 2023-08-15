<?php
session_start();
require_once("../Model/FileModel.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fileModel = new FileModel();
    $filename = $_FILES["file"]["name"];
    $fileTemp = $_FILES["file"]["tmp_name"];
    $caminho = "../Uploads/" . $filename;
    $userId = $_SESSION['userId'];

    if (is_uploaded_file($fileTemp)) {
        move_uploaded_file($fileTemp, $caminho);
    }

    $fileModel->InserirArquivo($userId, $caminho);

    header("Location: /");
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["action"])) {
    $fileModel = new FileModel();

    if ($_GET["action"] == "getfile") {
        $fileid = $_GET["id"];
        $arquivo = $fileModel->ObterArquivo($fileid);
        header("Location: " . $arquivo["caminho"]);
    } elseif ($_GET["action"] == "listfiles") {
        $arquivos = $fileModel->ListarArquivos($_SESSION["userId"]);

        foreach ($arquivos as $arquivo) {
            echo "<td>" . $arquivo["id"] . "</td>";
            echo "<td>" . $arquivo["UserId"] . "</td>";
            echo "<td>" . $arquivo["caminho"] . "</td>";
        }
    }
}
