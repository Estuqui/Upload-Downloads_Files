<?php
    require_once("../Model/FileModel.php");

    $fileModel = new FileModel();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();
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
        if ($_GET["action"] == "getfile") {
            $fileid = $_GET["id"];
            $arquivo = $fileModel->ObterArquivo($fileid);
            header("Location: " . $arquivo["caminho"]);
        }
    } else {
        $arquivos = $fileModel->ListarArquivos($_SESSION["userId"]);

        foreach ($arquivos as $item) {
            echo "<tr>";
            echo "<td class='text-nowrap text-center'>" . $item["id"] . "</td>";
            echo "<td class='text-nowrap text-center'>" . $item["nome"] . "</td>";
            echo "<td class='text-nowrap text-center'>" . substr($item["caminho"],11) . "</td>";
            echo "<td class='text-nowrap text-center'><a href='" . $item["caminho"] . "' target='_blank'>VER</a></td>";
            echo "<td class='text-nowrap text-center'><a href='" . $item["caminho"] . "' download='" . substr($item["caminho"],11) . "'>BAIXAR</a></td>";
            echo "</tr>";
        }
    }

    
?>