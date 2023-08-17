<?php
include_once("../Configuration/Auth.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/AnexoEstilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css " rel="stylesheet">
    <title>Home</title>

<body>
    <nav>

        <div class="logo">
            <a href="#"> <i class="bi bi-box-seam-fill"></i> </a>
        </div>

        <ul style="margin-bottom:0">
            <li> <a href="/Views/Suporte.php"> Suporte <i class="bi bi-person-fill-gear"></i> </a> </li>
            <li> <a href="/Controllers/UserController.php?action=logout"> Exit <i class="bi bi-box-arrow-right"></i>
                </a>
            </li>
        </ul>

    </nav>
    <div class="container mt-2">
        <h1>Upload de Arquivos <i class="bi bi-cloud-upload-fill"></i></h1>

        <div class="mt-4 mb-4 text-center">
            <form action="/Controllers/FileController.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file" accept=".pdf,.txt,.doc,.docx,.jpg,.png">
                <input type="submit" value="Enviar Arquivo">
            </form>
        </div>


        <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th scope="col" class='text-nowrap text-center'>#</th>
                    <th scope="col" class='text-nowrap text-center'>Usuário </th>
                    <th scope="col" class='text-nowrap text-center'>Caminho do Arquivo </th>
                    <th scope="col" class='text-nowrap text-center'>Visualizar </th>
                    <th scope="col" class='text-nowrap text-center'>Download </th>
                </tr>
            </thead>
            <tbody>
                <?php include_once("../Controllers/FileController.php"); ?>
            </tbody>
        </table>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js "></script>
</body>

</html>